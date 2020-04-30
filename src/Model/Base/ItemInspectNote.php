<?php

namespace Base;

use \ItemInspectNoteQuery as ChildItemInspectNoteQuery;
use \Exception;
use \PDO;
use Map\ItemInspectNoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'notes_item_inspect' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItemInspectNote implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItemInspectNoteTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the qcnotype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qcnotype;

    /**
     * The value for the qcnotypedesc field.
     *
     * @var        string
     */
    protected $qcnotypedesc;

    /**
     * The value for the inititemnbr field.
     *
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the qcnodate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qcnodate;

    /**
     * The value for the qcnotime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qcnotime;

    /**
     * The value for the qcnouser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qcnouser;

    /**
     * The value for the qcnoseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $qcnoseq;

    /**
     * The value for the qcnonote field.
     *
     * @var        string
     */
    protected $qcnonote;

    /**
     * The value for the qcnokey2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qcnokey2;

    /**
     * The value for the dateupdtd field.
     *
     * @var        string
     */
    protected $dateupdtd;

    /**
     * The value for the timeupdtd field.
     *
     * @var        string
     */
    protected $timeupdtd;

    /**
     * The value for the dummy field.
     *
     * @var        string
     */
    protected $dummy;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->qcnotype = '';
        $this->qcnodate = '';
        $this->qcnotime = '';
        $this->qcnouser = '';
        $this->qcnoseq = 0;
        $this->qcnokey2 = '';
    }

    /**
     * Initializes internal state of Base\ItemInspectNote object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>ItemInspectNote</code> instance.  If
     * <code>obj</code> is an instance of <code>ItemInspectNote</code>, delegates to
     * <code>equals(ItemInspectNote)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
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
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|ItemInspectNote The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
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
     * Get the [qcnotype] column value.
     *
     * @return string
     */
    public function getQcnotype()
    {
        return $this->qcnotype;
    }

    /**
     * Get the [qcnotypedesc] column value.
     *
     * @return string
     */
    public function getQcnotypedesc()
    {
        return $this->qcnotypedesc;
    }

    /**
     * Get the [inititemnbr] column value.
     *
     * @return string
     */
    public function getInititemnbr()
    {
        return $this->inititemnbr;
    }

    /**
     * Get the [qcnodate] column value.
     *
     * @return string
     */
    public function getQcnodate()
    {
        return $this->qcnodate;
    }

    /**
     * Get the [qcnotime] column value.
     *
     * @return string
     */
    public function getQcnotime()
    {
        return $this->qcnotime;
    }

    /**
     * Get the [qcnouser] column value.
     *
     * @return string
     */
    public function getQcnouser()
    {
        return $this->qcnouser;
    }

    /**
     * Get the [qcnoseq] column value.
     *
     * @return int
     */
    public function getQcnoseq()
    {
        return $this->qcnoseq;
    }

    /**
     * Get the [qcnonote] column value.
     *
     * @return string
     */
    public function getQcnonote()
    {
        return $this->qcnonote;
    }

    /**
     * Get the [qcnokey2] column value.
     *
     * @return string
     */
    public function getQcnokey2()
    {
        return $this->qcnokey2;
    }

    /**
     * Get the [dateupdtd] column value.
     *
     * @return string
     */
    public function getDateupdtd()
    {
        return $this->dateupdtd;
    }

    /**
     * Get the [timeupdtd] column value.
     *
     * @return string
     */
    public function getTimeupdtd()
    {
        return $this->timeupdtd;
    }

    /**
     * Get the [dummy] column value.
     *
     * @return string
     */
    public function getDummy()
    {
        return $this->dummy;
    }

    /**
     * Set the value of [qcnotype] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setQcnotype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qcnotype !== $v) {
            $this->qcnotype = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_QCNOTYPE] = true;
        }

        return $this;
    } // setQcnotype()

    /**
     * Set the value of [qcnotypedesc] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setQcnotypedesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qcnotypedesc !== $v) {
            $this->qcnotypedesc = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_QCNOTYPEDESC] = true;
        }

        return $this;
    } // setQcnotypedesc()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [qcnodate] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setQcnodate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qcnodate !== $v) {
            $this->qcnodate = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_QCNODATE] = true;
        }

        return $this;
    } // setQcnodate()

    /**
     * Set the value of [qcnotime] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setQcnotime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qcnotime !== $v) {
            $this->qcnotime = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_QCNOTIME] = true;
        }

        return $this;
    } // setQcnotime()

    /**
     * Set the value of [qcnouser] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setQcnouser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qcnouser !== $v) {
            $this->qcnouser = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_QCNOUSER] = true;
        }

        return $this;
    } // setQcnouser()

    /**
     * Set the value of [qcnoseq] column.
     *
     * @param int $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setQcnoseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qcnoseq !== $v) {
            $this->qcnoseq = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_QCNOSEQ] = true;
        }

        return $this;
    } // setQcnoseq()

    /**
     * Set the value of [qcnonote] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setQcnonote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qcnonote !== $v) {
            $this->qcnonote = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_QCNONOTE] = true;
        }

        return $this;
    } // setQcnonote()

    /**
     * Set the value of [qcnokey2] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setQcnokey2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qcnokey2 !== $v) {
            $this->qcnokey2 = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_QCNOKEY2] = true;
        }

        return $this;
    } // setQcnokey2()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ItemInspectNote The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItemInspectNoteTableMap::COL_DUMMY] = true;
        }

        return $this;
    } // setDummy()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->qcnotype !== '') {
                return false;
            }

            if ($this->qcnodate !== '') {
                return false;
            }

            if ($this->qcnotime !== '') {
                return false;
            }

            if ($this->qcnouser !== '') {
                return false;
            }

            if ($this->qcnoseq !== 0) {
                return false;
            }

            if ($this->qcnokey2 !== '') {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemInspectNoteTableMap::translateFieldName('Qcnotype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qcnotype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemInspectNoteTableMap::translateFieldName('Qcnotypedesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qcnotypedesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemInspectNoteTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemInspectNoteTableMap::translateFieldName('Qcnodate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qcnodate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemInspectNoteTableMap::translateFieldName('Qcnotime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qcnotime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemInspectNoteTableMap::translateFieldName('Qcnouser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qcnouser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemInspectNoteTableMap::translateFieldName('Qcnoseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qcnoseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemInspectNoteTableMap::translateFieldName('Qcnonote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qcnonote = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItemInspectNoteTableMap::translateFieldName('Qcnokey2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qcnokey2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItemInspectNoteTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItemInspectNoteTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItemInspectNoteTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 12; // 12 = ItemInspectNoteTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItemInspectNote'), 0, $e);
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
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemInspectNoteTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemInspectNoteQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ItemInspectNote::setDeleted()
     * @see ItemInspectNote::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemInspectNoteTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemInspectNoteQuery::create()
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
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemInspectNoteTableMap::DATABASE_NAME);
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
                ItemInspectNoteTableMap::addInstanceToPool($this);
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
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
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

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'QcnoType';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOTYPEDESC)) {
            $modifiedColumns[':p' . $index++]  = 'QcnoTypeDesc';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNODATE)) {
            $modifiedColumns[':p' . $index++]  = 'QcnoDate';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOTIME)) {
            $modifiedColumns[':p' . $index++]  = 'QcnoTime';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOUSER)) {
            $modifiedColumns[':p' . $index++]  = 'QcnoUser';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'QcnoSeq';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNONOTE)) {
            $modifiedColumns[':p' . $index++]  = 'QcnoNote';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOKEY2)) {
            $modifiedColumns[':p' . $index++]  = 'QcnoKey2';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO notes_item_inspect (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'QcnoType':
                        $stmt->bindValue($identifier, $this->qcnotype, PDO::PARAM_STR);
                        break;
                    case 'QcnoTypeDesc':
                        $stmt->bindValue($identifier, $this->qcnotypedesc, PDO::PARAM_STR);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'QcnoDate':
                        $stmt->bindValue($identifier, $this->qcnodate, PDO::PARAM_STR);
                        break;
                    case 'QcnoTime':
                        $stmt->bindValue($identifier, $this->qcnotime, PDO::PARAM_STR);
                        break;
                    case 'QcnoUser':
                        $stmt->bindValue($identifier, $this->qcnouser, PDO::PARAM_STR);
                        break;
                    case 'QcnoSeq':
                        $stmt->bindValue($identifier, $this->qcnoseq, PDO::PARAM_INT);
                        break;
                    case 'QcnoNote':
                        $stmt->bindValue($identifier, $this->qcnonote, PDO::PARAM_STR);
                        break;
                    case 'QcnoKey2':
                        $stmt->bindValue($identifier, $this->qcnokey2, PDO::PARAM_STR);
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
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemInspectNoteTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getQcnotype();
                break;
            case 1:
                return $this->getQcnotypedesc();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getQcnodate();
                break;
            case 4:
                return $this->getQcnotime();
                break;
            case 5:
                return $this->getQcnouser();
                break;
            case 6:
                return $this->getQcnoseq();
                break;
            case 7:
                return $this->getQcnonote();
                break;
            case 8:
                return $this->getQcnokey2();
                break;
            case 9:
                return $this->getDateupdtd();
                break;
            case 10:
                return $this->getTimeupdtd();
                break;
            case 11:
                return $this->getDummy();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['ItemInspectNote'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ItemInspectNote'][$this->hashCode()] = true;
        $keys = ItemInspectNoteTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getQcnotype(),
            $keys[1] => $this->getQcnotypedesc(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getQcnodate(),
            $keys[4] => $this->getQcnotime(),
            $keys[5] => $this->getQcnouser(),
            $keys[6] => $this->getQcnoseq(),
            $keys[7] => $this->getQcnonote(),
            $keys[8] => $this->getQcnokey2(),
            $keys[9] => $this->getDateupdtd(),
            $keys[10] => $this->getTimeupdtd(),
            $keys[11] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\ItemInspectNote
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemInspectNoteTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ItemInspectNote
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setQcnotype($value);
                break;
            case 1:
                $this->setQcnotypedesc($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setQcnodate($value);
                break;
            case 4:
                $this->setQcnotime($value);
                break;
            case 5:
                $this->setQcnouser($value);
                break;
            case 6:
                $this->setQcnoseq($value);
                break;
            case 7:
                $this->setQcnonote($value);
                break;
            case 8:
                $this->setQcnokey2($value);
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
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = ItemInspectNoteTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setQcnotype($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setQcnotypedesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setQcnodate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setQcnotime($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setQcnouser($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setQcnoseq($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setQcnonote($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setQcnokey2($arr[$keys[8]]);
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
     * @return $this|\ItemInspectNote The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
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
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ItemInspectNoteTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOTYPE)) {
            $criteria->add(ItemInspectNoteTableMap::COL_QCNOTYPE, $this->qcnotype);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOTYPEDESC)) {
            $criteria->add(ItemInspectNoteTableMap::COL_QCNOTYPEDESC, $this->qcnotypedesc);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_INITITEMNBR)) {
            $criteria->add(ItemInspectNoteTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNODATE)) {
            $criteria->add(ItemInspectNoteTableMap::COL_QCNODATE, $this->qcnodate);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOTIME)) {
            $criteria->add(ItemInspectNoteTableMap::COL_QCNOTIME, $this->qcnotime);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOUSER)) {
            $criteria->add(ItemInspectNoteTableMap::COL_QCNOUSER, $this->qcnouser);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOSEQ)) {
            $criteria->add(ItemInspectNoteTableMap::COL_QCNOSEQ, $this->qcnoseq);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNONOTE)) {
            $criteria->add(ItemInspectNoteTableMap::COL_QCNONOTE, $this->qcnonote);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_QCNOKEY2)) {
            $criteria->add(ItemInspectNoteTableMap::COL_QCNOKEY2, $this->qcnokey2);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItemInspectNoteTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItemInspectNoteTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItemInspectNoteTableMap::COL_DUMMY)) {
            $criteria->add(ItemInspectNoteTableMap::COL_DUMMY, $this->dummy);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildItemInspectNoteQuery::create();
        $criteria->add(ItemInspectNoteTableMap::COL_QCNOTYPE, $this->qcnotype);
        $criteria->add(ItemInspectNoteTableMap::COL_QCNODATE, $this->qcnodate);
        $criteria->add(ItemInspectNoteTableMap::COL_QCNOTIME, $this->qcnotime);
        $criteria->add(ItemInspectNoteTableMap::COL_QCNOUSER, $this->qcnouser);
        $criteria->add(ItemInspectNoteTableMap::COL_QCNOSEQ, $this->qcnoseq);
        $criteria->add(ItemInspectNoteTableMap::COL_QCNOKEY2, $this->qcnokey2);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getQcnotype() &&
            null !== $this->getQcnodate() &&
            null !== $this->getQcnotime() &&
            null !== $this->getQcnouser() &&
            null !== $this->getQcnoseq() &&
            null !== $this->getQcnokey2();

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
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getQcnotype();
        $pks[1] = $this->getQcnodate();
        $pks[2] = $this->getQcnotime();
        $pks[3] = $this->getQcnouser();
        $pks[4] = $this->getQcnoseq();
        $pks[5] = $this->getQcnokey2();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param      array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setQcnotype($keys[0]);
        $this->setQcnodate($keys[1]);
        $this->setQcnotime($keys[2]);
        $this->setQcnouser($keys[3]);
        $this->setQcnoseq($keys[4]);
        $this->setQcnokey2($keys[5]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getQcnotype()) && (null === $this->getQcnodate()) && (null === $this->getQcnotime()) && (null === $this->getQcnouser()) && (null === $this->getQcnoseq()) && (null === $this->getQcnokey2());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ItemInspectNote (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setQcnotype($this->getQcnotype());
        $copyObj->setQcnotypedesc($this->getQcnotypedesc());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setQcnodate($this->getQcnodate());
        $copyObj->setQcnotime($this->getQcnotime());
        $copyObj->setQcnouser($this->getQcnouser());
        $copyObj->setQcnoseq($this->getQcnoseq());
        $copyObj->setQcnonote($this->getQcnonote());
        $copyObj->setQcnokey2($this->getQcnokey2());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());
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
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \ItemInspectNote Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->qcnotype = null;
        $this->qcnotypedesc = null;
        $this->inititemnbr = null;
        $this->qcnodate = null;
        $this->qcnotime = null;
        $this->qcnouser = null;
        $this->qcnoseq = null;
        $this->qcnonote = null;
        $this->qcnokey2 = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItemInspectNoteTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
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

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
