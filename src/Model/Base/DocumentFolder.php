<?php

namespace Base;

use \Document as ChildDocument;
use \DocumentFolder as ChildDocumentFolder;
use \DocumentFolderQuery as ChildDocumentFolderQuery;
use \DocumentQuery as ChildDocumentQuery;
use \Exception;
use \PDO;
use Map\DocumentFolderTableMap;
use Map\DocumentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'doc_control' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class DocumentFolder implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Map\\DocumentFolderTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var bool
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var bool
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = [];

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = [];

    /**
     * The value for the doccfolder field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $doccfolder;

    /**
     * The value for the doccfolderdesc field.
     *
     * @var        string|null
     */
    protected $doccfolderdesc;

    /**
     * The value for the doccdir field.
     *
     * @var        string|null
     */
    protected $doccdir;

    /**
     * The value for the docctag field.
     *
     * @var        string|null
     */
    protected $docctag;

    /**
     * The value for the doccmultcopy field.
     *
     * @var        string|null
     */
    protected $doccmultcopy;

    /**
     * The value for the doccoverwrt field.
     *
     * @var        string|null
     */
    protected $doccoverwrt;

    /**
     * The value for the doccfilecnt field.
     *
     * @var        int|null
     */
    protected $doccfilecnt;

    /**
     * The value for the doccautoscanid field.
     *
     * @var        string|null
     */
    protected $doccautoscanid;

    /**
     * The value for the doccuseautofile field.
     *
     * @var        string|null
     */
    protected $doccuseautofile;

    /**
     * The value for the dateupdtd field.
     *
     * @var        string|null
     */
    protected $dateupdtd;

    /**
     * The value for the timeupdtd field.
     *
     * @var        string|null
     */
    protected $timeupdtd;

    /**
     * The value for the dummy field.
     *
     * @var        string|null
     */
    protected $dummy;

    /**
     * @var        ObjectCollection|ChildDocument[] Collection to store aggregation of ChildDocument objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildDocument> Collection to store aggregation of ChildDocument objects.
     */
    protected $collDocuments;
    protected $collDocumentsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildDocument[]
     * @phpstan-var ObjectCollection&\Traversable<ChildDocument>
     */
    protected $documentsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues(): void
    {
        $this->doccfolder = '';
    }

    /**
     * Initializes internal state of Base\DocumentFolder object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return bool True if the object has been modified.
     */
    public function isModified(): bool
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param string $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return bool True if $col has been modified.
     */
    public function isColumnModified(string $col): bool
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns(): array
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return bool True, if the object has never been persisted.
     */
    public function isNew(): bool
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param bool $b the state of the object.
     */
    public function setNew(bool $b): void
    {
        $this->new = $b;
    }

    /**
     * Whether this object has been deleted.
     * @return bool The deleted state of this object.
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param bool $b The deleted state of this object.
     * @return void
     */
    public function setDeleted(bool $b): void
    {
        $this->deleted = $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified(?string $col = null): void
    {
        if (null !== $col) {
            unset($this->modifiedColumns[$col]);
        } else {
            $this->modifiedColumns = [];
        }
    }

    /**
     * Compares this with another <code>DocumentFolder</code> instance.  If
     * <code>obj</code> is an instance of <code>DocumentFolder</code>, delegates to
     * <code>equals(DocumentFolder)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param mixed $obj The object to compare to.
     * @return bool Whether equal to the object specified.
     */
    public function equals($obj): bool
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns(): array
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return bool
     */
    public function hasVirtualColumn(string $name): bool
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return mixed
     *
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getVirtualColumn(string $name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of nonexistent virtual column `%s`.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @param mixed $value The value to give to the virtual column
     *
     * @return $this The current object, for fluid interface
     */
    public function setVirtualColumn(string $name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param string $msg
     * @param int $priority One of the Propel::LOG_* logging levels
     * @return void
     */
    protected function log(string $msg, int $priority = Propel::LOG_INFO): void
    {
        Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param \Propel\Runtime\Parser\AbstractParser|string $parser An AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME, TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM. Defaults to TableMap::TYPE_PHPNAME.
     * @return string The exported data
     */
    public function exportTo($parser, bool $includeLazyLoadColumns = true, string $keyType = TableMap::TYPE_PHPNAME): string
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     *
     * @return array<string>
     */
    public function __sleep(): array
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [doccfolder] column value.
     *
     * @return string
     */
    public function getDoccfolder()
    {
        return $this->doccfolder;
    }

    /**
     * Get the [doccfolderdesc] column value.
     *
     * @return string|null
     */
    public function getDoccfolderdesc()
    {
        return $this->doccfolderdesc;
    }

    /**
     * Get the [doccdir] column value.
     *
     * @return string|null
     */
    public function getDoccdir()
    {
        return $this->doccdir;
    }

    /**
     * Get the [docctag] column value.
     *
     * @return string|null
     */
    public function getDocctag()
    {
        return $this->docctag;
    }

    /**
     * Get the [doccmultcopy] column value.
     *
     * @return string|null
     */
    public function getDoccmultcopy()
    {
        return $this->doccmultcopy;
    }

    /**
     * Get the [doccoverwrt] column value.
     *
     * @return string|null
     */
    public function getDoccoverwrt()
    {
        return $this->doccoverwrt;
    }

    /**
     * Get the [doccfilecnt] column value.
     *
     * @return int|null
     */
    public function getDoccfilecnt()
    {
        return $this->doccfilecnt;
    }

    /**
     * Get the [doccautoscanid] column value.
     *
     * @return string|null
     */
    public function getDoccautoscanid()
    {
        return $this->doccautoscanid;
    }

    /**
     * Get the [doccuseautofile] column value.
     *
     * @return string|null
     */
    public function getDoccUseAutoFile()
    {
        return $this->doccuseautofile;
    }

    /**
     * Get the [dateupdtd] column value.
     *
     * @return string|null
     */
    public function getDateupdtd()
    {
        return $this->dateupdtd;
    }

    /**
     * Get the [timeupdtd] column value.
     *
     * @return string|null
     */
    public function getTimeupdtd()
    {
        return $this->timeupdtd;
    }

    /**
     * Get the [dummy] column value.
     *
     * @return string|null
     */
    public function getDummy()
    {
        return $this->dummy;
    }

    /**
     * Set the value of [doccfolder] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDoccfolder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doccfolder !== $v) {
            $this->doccfolder = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCFOLDER] = true;
        }

        return $this;
    }

    /**
     * Set the value of [doccfolderdesc] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDoccfolderdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doccfolderdesc !== $v) {
            $this->doccfolderdesc = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCFOLDERDESC] = true;
        }

        return $this;
    }

    /**
     * Set the value of [doccdir] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDoccdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doccdir !== $v) {
            $this->doccdir = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCDIR] = true;
        }

        return $this;
    }

    /**
     * Set the value of [docctag] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDocctag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->docctag !== $v) {
            $this->docctag = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCTAG] = true;
        }

        return $this;
    }

    /**
     * Set the value of [doccmultcopy] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDoccmultcopy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doccmultcopy !== $v) {
            $this->doccmultcopy = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCMULTCOPY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [doccoverwrt] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDoccoverwrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doccoverwrt !== $v) {
            $this->doccoverwrt = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCOVERWRT] = true;
        }

        return $this;
    }

    /**
     * Set the value of [doccfilecnt] column.
     *
     * @param int|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDoccfilecnt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->doccfilecnt !== $v) {
            $this->doccfilecnt = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCFILECNT] = true;
        }

        return $this;
    }

    /**
     * Set the value of [doccautoscanid] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDoccautoscanid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doccautoscanid !== $v) {
            $this->doccautoscanid = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCAUTOSCANID] = true;
        }

        return $this;
    }

    /**
     * Set the value of [doccuseautofile] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDoccUseAutoFile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->doccuseautofile !== $v) {
            $this->doccuseautofile = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DOCCUSEAUTOFILE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    }

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    }

    /**
     * Set the value of [dummy] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[DocumentFolderTableMap::COL_DUMMY] = true;
        }

        return $this;
    }

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return bool Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues(): bool
    {
            if ($this->doccfolder !== '') {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    }

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by DataFetcher->fetch().
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param bool $rehydrate Whether this object is being re-hydrated from the database.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int next starting column
     * @throws \Propel\Runtime\Exception\PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(array $row, int $startcol = 0, bool $rehydrate = false, string $indexType = TableMap::TYPE_NUM): int
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : DocumentFolderTableMap::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doccfolder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : DocumentFolderTableMap::translateFieldName('Doccfolderdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doccfolderdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : DocumentFolderTableMap::translateFieldName('Doccdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doccdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : DocumentFolderTableMap::translateFieldName('Docctag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->docctag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : DocumentFolderTableMap::translateFieldName('Doccmultcopy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doccmultcopy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : DocumentFolderTableMap::translateFieldName('Doccoverwrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doccoverwrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : DocumentFolderTableMap::translateFieldName('Doccfilecnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doccfilecnt = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : DocumentFolderTableMap::translateFieldName('Doccautoscanid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doccautoscanid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : DocumentFolderTableMap::translateFieldName('DoccUseAutoFile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->doccuseautofile = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : DocumentFolderTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : DocumentFolderTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : DocumentFolderTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 12; // 12 = DocumentFolderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\DocumentFolder'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function ensureConsistency(): void
    {
    }

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param bool $deep (optional) Whether to also de-associated any related objects.
     * @param ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload(bool $deep = false, ?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(DocumentFolderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildDocumentFolderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collDocuments = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see DocumentFolder::setDeleted()
     * @see DocumentFolder::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentFolderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildDocumentFolderQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    public function save(?ConnectionInterface $con = null): int
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentFolderTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                DocumentFolderTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con): int
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->documentsScheduledForDeletion !== null) {
                if (!$this->documentsScheduledForDeletion->isEmpty()) {
                    \DocumentQuery::create()
                        ->filterByPrimaryKeys($this->documentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->documentsScheduledForDeletion = null;
                }
            }

            if ($this->collDocuments !== null) {
                foreach ($this->collDocuments as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    }

    /**
     * Insert the row in the database.
     *
     * @param ConnectionInterface $con
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con): void
    {
        $modifiedColumns = [];
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCFOLDER)) {
            $modifiedColumns[':p' . $index++]  = 'DoccFolder';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCFOLDERDESC)) {
            $modifiedColumns[':p' . $index++]  = 'DoccFolderDesc';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCDIR)) {
            $modifiedColumns[':p' . $index++]  = 'DoccDir';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCTAG)) {
            $modifiedColumns[':p' . $index++]  = 'DoccTag';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCMULTCOPY)) {
            $modifiedColumns[':p' . $index++]  = 'DoccMultCopy';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCOVERWRT)) {
            $modifiedColumns[':p' . $index++]  = 'DoccOverWrt';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCFILECNT)) {
            $modifiedColumns[':p' . $index++]  = 'DoccFileCnt';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCAUTOSCANID)) {
            $modifiedColumns[':p' . $index++]  = 'DoccAutoScanId';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCUSEAUTOFILE)) {
            $modifiedColumns[':p' . $index++]  = 'DoccUseAutoFile';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO doc_control (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'DoccFolder':
                        $stmt->bindValue($identifier, $this->doccfolder, PDO::PARAM_STR);

                        break;
                    case 'DoccFolderDesc':
                        $stmt->bindValue($identifier, $this->doccfolderdesc, PDO::PARAM_STR);

                        break;
                    case 'DoccDir':
                        $stmt->bindValue($identifier, $this->doccdir, PDO::PARAM_STR);

                        break;
                    case 'DoccTag':
                        $stmt->bindValue($identifier, $this->docctag, PDO::PARAM_STR);

                        break;
                    case 'DoccMultCopy':
                        $stmt->bindValue($identifier, $this->doccmultcopy, PDO::PARAM_STR);

                        break;
                    case 'DoccOverWrt':
                        $stmt->bindValue($identifier, $this->doccoverwrt, PDO::PARAM_STR);

                        break;
                    case 'DoccFileCnt':
                        $stmt->bindValue($identifier, $this->doccfilecnt, PDO::PARAM_INT);

                        break;
                    case 'DoccAutoScanId':
                        $stmt->bindValue($identifier, $this->doccautoscanid, PDO::PARAM_STR);

                        break;
                    case 'DoccUseAutoFile':
                        $stmt->bindValue($identifier, $this->doccuseautofile, PDO::PARAM_STR);

                        break;
                    case 'DateUpdtd':
                        $stmt->bindValue($identifier, $this->dateupdtd, PDO::PARAM_STR);

                        break;
                    case 'TimeUpdtd':
                        $stmt->bindValue($identifier, $this->timeupdtd, PDO::PARAM_STR);

                        break;
                    case 'dummy':
                        $stmt->bindValue($identifier, $this->dummy, PDO::PARAM_STR);

                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param ConnectionInterface $con
     *
     * @return int Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con): int
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName(string $name, string $type = TableMap::TYPE_PHPNAME)
    {
        $pos = DocumentFolderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos Position in XML schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition(int $pos)
    {
        switch ($pos) {
            case 0:
                return $this->getDoccfolder();

            case 1:
                return $this->getDoccfolderdesc();

            case 2:
                return $this->getDoccdir();

            case 3:
                return $this->getDocctag();

            case 4:
                return $this->getDoccmultcopy();

            case 5:
                return $this->getDoccoverwrt();

            case 6:
                return $this->getDoccfilecnt();

            case 7:
                return $this->getDoccautoscanid();

            case 8:
                return $this->getDoccUseAutoFile();

            case 9:
                return $this->getDateupdtd();

            case 10:
                return $this->getTimeupdtd();

            case 11:
                return $this->getDummy();

            default:
                return null;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param bool $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array An associative array containing the field names (as keys) and field values
     */
    public function toArray(string $keyType = TableMap::TYPE_PHPNAME, bool $includeLazyLoadColumns = true, array $alreadyDumpedObjects = [], bool $includeForeignObjects = false): array
    {
        if (isset($alreadyDumpedObjects['DocumentFolder'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['DocumentFolder'][$this->hashCode()] = true;
        $keys = DocumentFolderTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getDoccfolder(),
            $keys[1] => $this->getDoccfolderdesc(),
            $keys[2] => $this->getDoccdir(),
            $keys[3] => $this->getDocctag(),
            $keys[4] => $this->getDoccmultcopy(),
            $keys[5] => $this->getDoccoverwrt(),
            $keys[6] => $this->getDoccfilecnt(),
            $keys[7] => $this->getDoccautoscanid(),
            $keys[8] => $this->getDoccUseAutoFile(),
            $keys[9] => $this->getDateupdtd(),
            $keys[10] => $this->getTimeupdtd(),
            $keys[11] => $this->getDummy(),
        ];
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collDocuments) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'documents';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'doc_indices';
                        break;
                    default:
                        $key = 'Documents';
                }

                $result[$key] = $this->collDocuments->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this
     */
    public function setByName(string $name, $value, string $type = TableMap::TYPE_PHPNAME)
    {
        $pos = DocumentFolderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        $this->setByPosition($pos, $value);

        return $this;
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return $this
     */
    public function setByPosition(int $pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setDoccfolder($value);
                break;
            case 1:
                $this->setDoccfolderdesc($value);
                break;
            case 2:
                $this->setDoccdir($value);
                break;
            case 3:
                $this->setDocctag($value);
                break;
            case 4:
                $this->setDoccmultcopy($value);
                break;
            case 5:
                $this->setDoccoverwrt($value);
                break;
            case 6:
                $this->setDoccfilecnt($value);
                break;
            case 7:
                $this->setDoccautoscanid($value);
                break;
            case 8:
                $this->setDoccUseAutoFile($value);
                break;
            case 9:
                $this->setDateupdtd($value);
                break;
            case 10:
                $this->setTimeupdtd($value);
                break;
            case 11:
                $this->setDummy($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param array $arr An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return $this
     */
    public function fromArray(array $arr, string $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = DocumentFolderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setDoccfolder($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setDoccfolderdesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDoccdir($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setDocctag($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDoccmultcopy($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setDoccoverwrt($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDoccfilecnt($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setDoccautoscanid($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setDoccUseAutoFile($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setDateupdtd($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setTimeupdtd($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setDummy($arr[$keys[11]]);
        }

        return $this;
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this The current object, for fluid interface
     */
    public function importFrom($parser, string $data, string $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria(): Criteria
    {
        $criteria = new Criteria(DocumentFolderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCFOLDER)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCFOLDER, $this->doccfolder);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCFOLDERDESC)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCFOLDERDESC, $this->doccfolderdesc);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCDIR)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCDIR, $this->doccdir);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCTAG)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCTAG, $this->docctag);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCMULTCOPY)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCMULTCOPY, $this->doccmultcopy);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCOVERWRT)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCOVERWRT, $this->doccoverwrt);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCFILECNT)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCFILECNT, $this->doccfilecnt);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCAUTOSCANID)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCAUTOSCANID, $this->doccautoscanid);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DOCCUSEAUTOFILE)) {
            $criteria->add(DocumentFolderTableMap::COL_DOCCUSEAUTOFILE, $this->doccuseautofile);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DATEUPDTD)) {
            $criteria->add(DocumentFolderTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_TIMEUPDTD)) {
            $criteria->add(DocumentFolderTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(DocumentFolderTableMap::COL_DUMMY)) {
            $criteria->add(DocumentFolderTableMap::COL_DUMMY, $this->dummy);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria(): Criteria
    {
        $criteria = ChildDocumentFolderQuery::create();
        $criteria->add(DocumentFolderTableMap::COL_DOCCFOLDER, $this->doccfolder);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int|string Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getDoccfolder();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getDoccfolder();
    }

    /**
     * Generic method to set the primary key (doccfolder column).
     *
     * @param string|null $key Primary key.
     * @return void
     */
    public function setPrimaryKey(?string $key = null): void
    {
        $this->setDoccfolder($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getDoccfolder();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \DocumentFolder (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setDoccfolder($this->getDoccfolder());
        $copyObj->setDoccfolderdesc($this->getDoccfolderdesc());
        $copyObj->setDoccdir($this->getDoccdir());
        $copyObj->setDocctag($this->getDocctag());
        $copyObj->setDoccmultcopy($this->getDoccmultcopy());
        $copyObj->setDoccoverwrt($this->getDoccoverwrt());
        $copyObj->setDoccfilecnt($this->getDoccfilecnt());
        $copyObj->setDoccautoscanid($this->getDoccautoscanid());
        $copyObj->setDoccUseAutoFile($this->getDoccUseAutoFile());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getDocuments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDocument($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \DocumentFolder Clone of current object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function copy(bool $deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName): void
    {
        if ('Document' === $relationName) {
            $this->initDocuments();
            return;
        }
    }

    /**
     * Clears out the collDocuments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addDocuments()
     */
    public function clearDocuments()
    {
        $this->collDocuments = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collDocuments collection loaded partially.
     *
     * @return void
     */
    public function resetPartialDocuments($v = true): void
    {
        $this->collDocumentsPartial = $v;
    }

    /**
     * Initializes the collDocuments collection.
     *
     * By default this just sets the collDocuments collection to an empty array (like clearcollDocuments());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDocuments(bool $overrideExisting = true): void
    {
        if (null !== $this->collDocuments && !$overrideExisting) {
            return;
        }

        $collectionClassName = DocumentTableMap::getTableMap()->getCollectionClassName();

        $this->collDocuments = new $collectionClassName;
        $this->collDocuments->setModel('\Document');
    }

    /**
     * Gets an array of ChildDocument objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildDocumentFolder is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildDocument[] List of ChildDocument objects
     * @phpstan-return ObjectCollection&\Traversable<ChildDocument> List of ChildDocument objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getDocuments(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collDocumentsPartial && !$this->isNew();
        if (null === $this->collDocuments || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collDocuments) {
                    $this->initDocuments();
                } else {
                    $collectionClassName = DocumentTableMap::getTableMap()->getCollectionClassName();

                    $collDocuments = new $collectionClassName;
                    $collDocuments->setModel('\Document');

                    return $collDocuments;
                }
            } else {
                $collDocuments = ChildDocumentQuery::create(null, $criteria)
                    ->filterByDocumentFolder($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collDocumentsPartial && count($collDocuments)) {
                        $this->initDocuments(false);

                        foreach ($collDocuments as $obj) {
                            if (false == $this->collDocuments->contains($obj)) {
                                $this->collDocuments->append($obj);
                            }
                        }

                        $this->collDocumentsPartial = true;
                    }

                    return $collDocuments;
                }

                if ($partial && $this->collDocuments) {
                    foreach ($this->collDocuments as $obj) {
                        if ($obj->isNew()) {
                            $collDocuments[] = $obj;
                        }
                    }
                }

                $this->collDocuments = $collDocuments;
                $this->collDocumentsPartial = false;
            }
        }

        return $this->collDocuments;
    }

    /**
     * Sets a collection of ChildDocument objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $documents A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setDocuments(Collection $documents, ?ConnectionInterface $con = null)
    {
        /** @var ChildDocument[] $documentsToDelete */
        $documentsToDelete = $this->getDocuments(new Criteria(), $con)->diff($documents);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->documentsScheduledForDeletion = clone $documentsToDelete;

        foreach ($documentsToDelete as $documentRemoved) {
            $documentRemoved->setDocumentFolder(null);
        }

        $this->collDocuments = null;
        foreach ($documents as $document) {
            $this->addDocument($document);
        }

        $this->collDocuments = $documents;
        $this->collDocumentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Document objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related Document objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countDocuments(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collDocumentsPartial && !$this->isNew();
        if (null === $this->collDocuments || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDocuments) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDocuments());
            }

            $query = ChildDocumentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDocumentFolder($this)
                ->count($con);
        }

        return count($this->collDocuments);
    }

    /**
     * Method called to associate a ChildDocument object to this object
     * through the ChildDocument foreign key attribute.
     *
     * @param ChildDocument $l ChildDocument
     * @return $this The current object (for fluent API support)
     */
    public function addDocument(ChildDocument $l)
    {
        if ($this->collDocuments === null) {
            $this->initDocuments();
            $this->collDocumentsPartial = true;
        }

        if (!$this->collDocuments->contains($l)) {
            $this->doAddDocument($l);

            if ($this->documentsScheduledForDeletion and $this->documentsScheduledForDeletion->contains($l)) {
                $this->documentsScheduledForDeletion->remove($this->documentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildDocument $document The ChildDocument object to add.
     */
    protected function doAddDocument(ChildDocument $document): void
    {
        $this->collDocuments[]= $document;
        $document->setDocumentFolder($this);
    }

    /**
     * @param ChildDocument $document The ChildDocument object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeDocument(ChildDocument $document)
    {
        if ($this->getDocuments()->contains($document)) {
            $pos = $this->collDocuments->search($document);
            $this->collDocuments->remove($pos);
            if (null === $this->documentsScheduledForDeletion) {
                $this->documentsScheduledForDeletion = clone $this->collDocuments;
                $this->documentsScheduledForDeletion->clear();
            }
            $this->documentsScheduledForDeletion[]= clone $document;
            $document->setDocumentFolder(null);
        }

        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     *
     * @return $this
     */
    public function clear()
    {
        $this->doccfolder = null;
        $this->doccfolderdesc = null;
        $this->doccdir = null;
        $this->docctag = null;
        $this->doccmultcopy = null;
        $this->doccoverwrt = null;
        $this->doccfilecnt = null;
        $this->doccautoscanid = null;
        $this->doccuseautofile = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);

        return $this;
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param bool $deep Whether to also clear the references on all referrer objects.
     * @return $this
     */
    public function clearAllReferences(bool $deep = false)
    {
        if ($deep) {
            if ($this->collDocuments) {
                foreach ($this->collDocuments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collDocuments = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DocumentFolderTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preSave(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postSave(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before inserting to database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preInsert(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postInsert(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before updating the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preUpdate(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postUpdate(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before deleting the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preDelete(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postDelete(?ConnectionInterface $con = null): void
    {
            }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
