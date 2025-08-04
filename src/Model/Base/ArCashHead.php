<?php

namespace Base;

use \ArCashHead as ChildArCashHead;
use \ArCashHeadQuery as ChildArCashHeadQuery;
use \ArPaymentPending as ChildArPaymentPending;
use \ArPaymentPendingQuery as ChildArPaymentPendingQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \Exception;
use \PDO;
use Map\ArCashHeadTableMap;
use Map\ArPaymentPendingTableMap;
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
 * Base class that represents a row from the 'ar_cash_head' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ArCashHead implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Map\\ArCashHeadTableMap';


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
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the archamtrec field.
     *
     * @var        string|null
     */
    protected $archamtrec;

    /**
     * The value for the archclerkid field.
     *
     * @var        string|null
     */
    protected $archclerkid;

    /**
     * The value for the archpostflag field.
     *
     * @var        string|null
     */
    protected $archpostflag;

    /**
     * The value for the archorigwhse field.
     *
     * @var        string|null
     */
    protected $archorigwhse;

    /**
     * The value for the archccnbr field.
     *
     * @var        string|null
     */
    protected $archccnbr;

    /**
     * The value for the archccexpdate field.
     *
     * @var        string|null
     */
    protected $archccexpdate;

    /**
     * The value for the archccvalidcode field.
     *
     * @var        string|null
     */
    protected $archccvalidcode;

    /**
     * The value for the archccaprv field.
     *
     * @var        string|null
     */
    protected $archccaprv;

    /**
     * The value for the archccinfo field.
     *
     * @var        string|null
     */
    protected $archccinfo;

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
     * @var        ChildCustomer
     */
    protected $aCustomer;

    /**
     * @var        ObjectCollection|ChildArPaymentPending[] Collection to store aggregation of ChildArPaymentPending objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildArPaymentPending> Collection to store aggregation of ChildArPaymentPending objects.
     */
    protected $collArPaymentPendings;
    protected $collArPaymentPendingsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildArPaymentPending[]
     * @phpstan-var ObjectCollection&\Traversable<ChildArPaymentPending>
     */
    protected $arPaymentPendingsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues(): void
    {
        $this->arcucustid = '';
    }

    /**
     * Initializes internal state of Base\ArCashHead object.
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
     * Compares this with another <code>ArCashHead</code> instance.  If
     * <code>obj</code> is an instance of <code>ArCashHead</code>, delegates to
     * <code>equals(ArCashHead)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [archamtrec] column value.
     *
     * @return string|null
     */
    public function getArchamtrec()
    {
        return $this->archamtrec;
    }

    /**
     * Get the [archclerkid] column value.
     *
     * @return string|null
     */
    public function getArchclerkid()
    {
        return $this->archclerkid;
    }

    /**
     * Get the [archpostflag] column value.
     *
     * @return string|null
     */
    public function getArchpostflag()
    {
        return $this->archpostflag;
    }

    /**
     * Get the [archorigwhse] column value.
     *
     * @return string|null
     */
    public function getArchorigwhse()
    {
        return $this->archorigwhse;
    }

    /**
     * Get the [archccnbr] column value.
     *
     * @return string|null
     */
    public function getArchccnbr()
    {
        return $this->archccnbr;
    }

    /**
     * Get the [archccexpdate] column value.
     *
     * @return string|null
     */
    public function getArchccexpdate()
    {
        return $this->archccexpdate;
    }

    /**
     * Get the [archccvalidcode] column value.
     *
     * @return string|null
     */
    public function getArchccvalidcode()
    {
        return $this->archccvalidcode;
    }

    /**
     * Get the [archccaprv] column value.
     *
     * @return string|null
     */
    public function getArchccaprv()
    {
        return $this->archccaprv;
    }

    /**
     * Get the [archccinfo] column value.
     *
     * @return string|null
     */
    public function getArchccinfo()
    {
        return $this->archccinfo;
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
     * Set the value of [arcucustid] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    }

    /**
     * Set the value of [archamtrec] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchamtrec($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archamtrec !== $v) {
            $this->archamtrec = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHAMTREC] = true;
        }

        return $this;
    }

    /**
     * Set the value of [archclerkid] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchclerkid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archclerkid !== $v) {
            $this->archclerkid = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHCLERKID] = true;
        }

        return $this;
    }

    /**
     * Set the value of [archpostflag] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchpostflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archpostflag !== $v) {
            $this->archpostflag = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHPOSTFLAG] = true;
        }

        return $this;
    }

    /**
     * Set the value of [archorigwhse] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchorigwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archorigwhse !== $v) {
            $this->archorigwhse = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHORIGWHSE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [archccnbr] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchccnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archccnbr !== $v) {
            $this->archccnbr = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHCCNBR] = true;
        }

        return $this;
    }

    /**
     * Set the value of [archccexpdate] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchccexpdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archccexpdate !== $v) {
            $this->archccexpdate = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHCCEXPDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [archccvalidcode] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchccvalidcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archccvalidcode !== $v) {
            $this->archccvalidcode = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHCCVALIDCODE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [archccaprv] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchccaprv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archccaprv !== $v) {
            $this->archccaprv = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHCCAPRV] = true;
        }

        return $this;
    }

    /**
     * Set the value of [archccinfo] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArchccinfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archccinfo !== $v) {
            $this->archccinfo = $v;
            $this->modifiedColumns[ArCashHeadTableMap::COL_ARCHCCINFO] = true;
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
            $this->modifiedColumns[ArCashHeadTableMap::COL_DATEUPDTD] = true;
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
            $this->modifiedColumns[ArCashHeadTableMap::COL_TIMEUPDTD] = true;
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
            $this->modifiedColumns[ArCashHeadTableMap::COL_DUMMY] = true;
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
            if ($this->arcucustid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ArCashHeadTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ArCashHeadTableMap::translateFieldName('Archamtrec', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archamtrec = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ArCashHeadTableMap::translateFieldName('Archclerkid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archclerkid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ArCashHeadTableMap::translateFieldName('Archpostflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archpostflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ArCashHeadTableMap::translateFieldName('Archorigwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archorigwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ArCashHeadTableMap::translateFieldName('Archccnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archccnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ArCashHeadTableMap::translateFieldName('Archccexpdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archccexpdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ArCashHeadTableMap::translateFieldName('Archccvalidcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archccvalidcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ArCashHeadTableMap::translateFieldName('Archccaprv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archccaprv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ArCashHeadTableMap::translateFieldName('Archccinfo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->archccinfo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ArCashHeadTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ArCashHeadTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ArCashHeadTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 13; // 13 = ArCashHeadTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ArCashHead'), 0, $e);
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
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
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
            $con = Propel::getServiceContainer()->getReadConnection(ArCashHeadTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildArCashHeadQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->collArPaymentPendings = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see ArCashHead::setDeleted()
     * @see ArCashHead::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCashHeadTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildArCashHeadQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCashHeadTableMap::DATABASE_NAME);
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
                ArCashHeadTableMap::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

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

            if ($this->arPaymentPendingsScheduledForDeletion !== null) {
                if (!$this->arPaymentPendingsScheduledForDeletion->isEmpty()) {
                    \ArPaymentPendingQuery::create()
                        ->filterByPrimaryKeys($this->arPaymentPendingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->arPaymentPendingsScheduledForDeletion = null;
                }
            }

            if ($this->collArPaymentPendings !== null) {
                foreach ($this->collArPaymentPendings as $referrerFK) {
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
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHAMTREC)) {
            $modifiedColumns[':p' . $index++]  = 'ArchAmtRec';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCLERKID)) {
            $modifiedColumns[':p' . $index++]  = 'ArchClerkId';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHPOSTFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'ArchPostFlag';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHORIGWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'ArchOrigWhse';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArchCcNbr';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCEXPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArchCcExpDate';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCVALIDCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArchCcValidCode';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCAPRV)) {
            $modifiedColumns[':p' . $index++]  = 'ArchCcAprv';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCINFO)) {
            $modifiedColumns[':p' . $index++]  = 'ArchCcInfo';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_cash_head (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);

                        break;
                    case 'ArchAmtRec':
                        $stmt->bindValue($identifier, $this->archamtrec, PDO::PARAM_STR);

                        break;
                    case 'ArchClerkId':
                        $stmt->bindValue($identifier, $this->archclerkid, PDO::PARAM_STR);

                        break;
                    case 'ArchPostFlag':
                        $stmt->bindValue($identifier, $this->archpostflag, PDO::PARAM_STR);

                        break;
                    case 'ArchOrigWhse':
                        $stmt->bindValue($identifier, $this->archorigwhse, PDO::PARAM_STR);

                        break;
                    case 'ArchCcNbr':
                        $stmt->bindValue($identifier, $this->archccnbr, PDO::PARAM_STR);

                        break;
                    case 'ArchCcExpDate':
                        $stmt->bindValue($identifier, $this->archccexpdate, PDO::PARAM_STR);

                        break;
                    case 'ArchCcValidCode':
                        $stmt->bindValue($identifier, $this->archccvalidcode, PDO::PARAM_STR);

                        break;
                    case 'ArchCcAprv':
                        $stmt->bindValue($identifier, $this->archccaprv, PDO::PARAM_STR);

                        break;
                    case 'ArchCcInfo':
                        $stmt->bindValue($identifier, $this->archccinfo, PDO::PARAM_STR);

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
        $pos = ArCashHeadTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArcucustid();

            case 1:
                return $this->getArchamtrec();

            case 2:
                return $this->getArchclerkid();

            case 3:
                return $this->getArchpostflag();

            case 4:
                return $this->getArchorigwhse();

            case 5:
                return $this->getArchccnbr();

            case 6:
                return $this->getArchccexpdate();

            case 7:
                return $this->getArchccvalidcode();

            case 8:
                return $this->getArchccaprv();

            case 9:
                return $this->getArchccinfo();

            case 10:
                return $this->getDateupdtd();

            case 11:
                return $this->getTimeupdtd();

            case 12:
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
        if (isset($alreadyDumpedObjects['ArCashHead'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['ArCashHead'][$this->hashCode()] = true;
        $keys = ArCashHeadTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArchamtrec(),
            $keys[2] => $this->getArchclerkid(),
            $keys[3] => $this->getArchpostflag(),
            $keys[4] => $this->getArchorigwhse(),
            $keys[5] => $this->getArchccnbr(),
            $keys[6] => $this->getArchccexpdate(),
            $keys[7] => $this->getArchccvalidcode(),
            $keys[8] => $this->getArchccaprv(),
            $keys[9] => $this->getArchccinfo(),
            $keys[10] => $this->getDateupdtd(),
            $keys[11] => $this->getTimeupdtd(),
            $keys[12] => $this->getDummy(),
        ];
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCustomer) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customer';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cust_mast';
                        break;
                    default:
                        $key = 'Customer';
                }

                $result[$key] = $this->aCustomer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collArPaymentPendings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'arPaymentPendings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cash_dets';
                        break;
                    default:
                        $key = 'ArPaymentPendings';
                }

                $result[$key] = $this->collArPaymentPendings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ArCashHeadTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setArchamtrec($value);
                break;
            case 2:
                $this->setArchclerkid($value);
                break;
            case 3:
                $this->setArchpostflag($value);
                break;
            case 4:
                $this->setArchorigwhse($value);
                break;
            case 5:
                $this->setArchccnbr($value);
                break;
            case 6:
                $this->setArchccexpdate($value);
                break;
            case 7:
                $this->setArchccvalidcode($value);
                break;
            case 8:
                $this->setArchccaprv($value);
                break;
            case 9:
                $this->setArchccinfo($value);
                break;
            case 10:
                $this->setDateupdtd($value);
                break;
            case 11:
                $this->setTimeupdtd($value);
                break;
            case 12:
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
        $keys = ArCashHeadTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArchamtrec($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArchclerkid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArchpostflag($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArchorigwhse($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArchccnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArchccexpdate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArchccvalidcode($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArchccaprv($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArchccinfo($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setDateupdtd($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setTimeupdtd($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDummy($arr[$keys[12]]);
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
        $criteria = new Criteria(ArCashHeadTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCUCUSTID)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHAMTREC)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHAMTREC, $this->archamtrec);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCLERKID)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHCLERKID, $this->archclerkid);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHPOSTFLAG)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHPOSTFLAG, $this->archpostflag);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHORIGWHSE)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHORIGWHSE, $this->archorigwhse);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCNBR)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHCCNBR, $this->archccnbr);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCEXPDATE)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHCCEXPDATE, $this->archccexpdate);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCVALIDCODE)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHCCVALIDCODE, $this->archccvalidcode);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCAPRV)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHCCAPRV, $this->archccaprv);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_ARCHCCINFO)) {
            $criteria->add(ArCashHeadTableMap::COL_ARCHCCINFO, $this->archccinfo);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_DATEUPDTD)) {
            $criteria->add(ArCashHeadTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ArCashHeadTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ArCashHeadTableMap::COL_DUMMY)) {
            $criteria->add(ArCashHeadTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildArCashHeadQuery::create();
        $criteria->add(ArCashHeadTableMap::COL_ARCUCUSTID, $this->arcucustid);

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
        $validPk = null !== $this->getArcucustid();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation customer to table ar_cust_mast
        if ($this->aCustomer && $hash = spl_object_hash($this->aCustomer)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

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
        return $this->getArcucustid();
    }

    /**
     * Generic method to set the primary key (arcucustid column).
     *
     * @param string|null $key Primary key.
     * @return void
     */
    public function setPrimaryKey(?string $key = null): void
    {
        $this->setArcucustid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getArcucustid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \ArCashHead (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArchamtrec($this->getArchamtrec());
        $copyObj->setArchclerkid($this->getArchclerkid());
        $copyObj->setArchpostflag($this->getArchpostflag());
        $copyObj->setArchorigwhse($this->getArchorigwhse());
        $copyObj->setArchccnbr($this->getArchccnbr());
        $copyObj->setArchccexpdate($this->getArchccexpdate());
        $copyObj->setArchccvalidcode($this->getArchccvalidcode());
        $copyObj->setArchccaprv($this->getArchccaprv());
        $copyObj->setArchccinfo($this->getArchccinfo());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getArPaymentPendings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArPaymentPending($relObj->copy($deepCopy));
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
     * @return \ArCashHead Clone of current object.
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
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param ChildCustomer $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setArCashHead($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomer object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildCustomer The associated ChildCustomer object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getCustomer(?ConnectionInterface $con = null)
    {
        if ($this->aCustomer === null && (($this->arcucustid !== "" && $this->arcucustid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->arcucustid, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aCustomer->setArCashHead($this);
        }

        return $this->aCustomer;
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
        if ('ArPaymentPending' === $relationName) {
            $this->initArPaymentPendings();
            return;
        }
    }

    /**
     * Clears out the collArPaymentPendings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addArPaymentPendings()
     */
    public function clearArPaymentPendings()
    {
        $this->collArPaymentPendings = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collArPaymentPendings collection loaded partially.
     *
     * @return void
     */
    public function resetPartialArPaymentPendings($v = true): void
    {
        $this->collArPaymentPendingsPartial = $v;
    }

    /**
     * Initializes the collArPaymentPendings collection.
     *
     * By default this just sets the collArPaymentPendings collection to an empty array (like clearcollArPaymentPendings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArPaymentPendings(bool $overrideExisting = true): void
    {
        if (null !== $this->collArPaymentPendings && !$overrideExisting) {
            return;
        }

        $collectionClassName = ArPaymentPendingTableMap::getTableMap()->getCollectionClassName();

        $this->collArPaymentPendings = new $collectionClassName;
        $this->collArPaymentPendings->setModel('\ArPaymentPending');
    }

    /**
     * Gets an array of ChildArPaymentPending objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildArCashHead is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildArPaymentPending[] List of ChildArPaymentPending objects
     * @phpstan-return ObjectCollection&\Traversable<ChildArPaymentPending> List of ChildArPaymentPending objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getArPaymentPendings(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collArPaymentPendingsPartial && !$this->isNew();
        if (null === $this->collArPaymentPendings || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collArPaymentPendings) {
                    $this->initArPaymentPendings();
                } else {
                    $collectionClassName = ArPaymentPendingTableMap::getTableMap()->getCollectionClassName();

                    $collArPaymentPendings = new $collectionClassName;
                    $collArPaymentPendings->setModel('\ArPaymentPending');

                    return $collArPaymentPendings;
                }
            } else {
                $collArPaymentPendings = ChildArPaymentPendingQuery::create(null, $criteria)
                    ->filterByArCashHead($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collArPaymentPendingsPartial && count($collArPaymentPendings)) {
                        $this->initArPaymentPendings(false);

                        foreach ($collArPaymentPendings as $obj) {
                            if (false == $this->collArPaymentPendings->contains($obj)) {
                                $this->collArPaymentPendings->append($obj);
                            }
                        }

                        $this->collArPaymentPendingsPartial = true;
                    }

                    return $collArPaymentPendings;
                }

                if ($partial && $this->collArPaymentPendings) {
                    foreach ($this->collArPaymentPendings as $obj) {
                        if ($obj->isNew()) {
                            $collArPaymentPendings[] = $obj;
                        }
                    }
                }

                $this->collArPaymentPendings = $collArPaymentPendings;
                $this->collArPaymentPendingsPartial = false;
            }
        }

        return $this->collArPaymentPendings;
    }

    /**
     * Sets a collection of ChildArPaymentPending objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $arPaymentPendings A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setArPaymentPendings(Collection $arPaymentPendings, ?ConnectionInterface $con = null)
    {
        /** @var ChildArPaymentPending[] $arPaymentPendingsToDelete */
        $arPaymentPendingsToDelete = $this->getArPaymentPendings(new Criteria(), $con)->diff($arPaymentPendings);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->arPaymentPendingsScheduledForDeletion = clone $arPaymentPendingsToDelete;

        foreach ($arPaymentPendingsToDelete as $arPaymentPendingRemoved) {
            $arPaymentPendingRemoved->setArCashHead(null);
        }

        $this->collArPaymentPendings = null;
        foreach ($arPaymentPendings as $arPaymentPending) {
            $this->addArPaymentPending($arPaymentPending);
        }

        $this->collArPaymentPendings = $arPaymentPendings;
        $this->collArPaymentPendingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ArPaymentPending objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related ArPaymentPending objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countArPaymentPendings(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collArPaymentPendingsPartial && !$this->isNew();
        if (null === $this->collArPaymentPendings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArPaymentPendings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArPaymentPendings());
            }

            $query = ChildArPaymentPendingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByArCashHead($this)
                ->count($con);
        }

        return count($this->collArPaymentPendings);
    }

    /**
     * Method called to associate a ChildArPaymentPending object to this object
     * through the ChildArPaymentPending foreign key attribute.
     *
     * @param ChildArPaymentPending $l ChildArPaymentPending
     * @return $this The current object (for fluent API support)
     */
    public function addArPaymentPending(ChildArPaymentPending $l)
    {
        if ($this->collArPaymentPendings === null) {
            $this->initArPaymentPendings();
            $this->collArPaymentPendingsPartial = true;
        }

        if (!$this->collArPaymentPendings->contains($l)) {
            $this->doAddArPaymentPending($l);

            if ($this->arPaymentPendingsScheduledForDeletion and $this->arPaymentPendingsScheduledForDeletion->contains($l)) {
                $this->arPaymentPendingsScheduledForDeletion->remove($this->arPaymentPendingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildArPaymentPending $arPaymentPending The ChildArPaymentPending object to add.
     */
    protected function doAddArPaymentPending(ChildArPaymentPending $arPaymentPending): void
    {
        $this->collArPaymentPendings[]= $arPaymentPending;
        $arPaymentPending->setArCashHead($this);
    }

    /**
     * @param ChildArPaymentPending $arPaymentPending The ChildArPaymentPending object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeArPaymentPending(ChildArPaymentPending $arPaymentPending)
    {
        if ($this->getArPaymentPendings()->contains($arPaymentPending)) {
            $pos = $this->collArPaymentPendings->search($arPaymentPending);
            $this->collArPaymentPendings->remove($pos);
            if (null === $this->arPaymentPendingsScheduledForDeletion) {
                $this->arPaymentPendingsScheduledForDeletion = clone $this->collArPaymentPendings;
                $this->arPaymentPendingsScheduledForDeletion->clear();
            }
            $this->arPaymentPendingsScheduledForDeletion[]= clone $arPaymentPending;
            $arPaymentPending->setArCashHead(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ArCashHead is new, it will return
     * an empty collection; or if this ArCashHead has previously
     * been saved, it will retrieve related ArPaymentPendings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ArCashHead.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @param string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildArPaymentPending[] List of ChildArPaymentPending objects
     * @phpstan-return ObjectCollection&\Traversable<ChildArPaymentPending}> List of ChildArPaymentPending objects
     */
    public function getArPaymentPendingsJoinCustomer(?Criteria $criteria = null, ?ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildArPaymentPendingQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getArPaymentPendings($query, $con);
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
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeArCashHead($this);
        }
        $this->arcucustid = null;
        $this->archamtrec = null;
        $this->archclerkid = null;
        $this->archpostflag = null;
        $this->archorigwhse = null;
        $this->archccnbr = null;
        $this->archccexpdate = null;
        $this->archccvalidcode = null;
        $this->archccaprv = null;
        $this->archccinfo = null;
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
            if ($this->collArPaymentPendings) {
                foreach ($this->collArPaymentPendings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collArPaymentPendings = null;
        $this->aCustomer = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArCashHeadTableMap::DEFAULT_STRING_FORMAT);
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
