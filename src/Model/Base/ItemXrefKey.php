<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItemXrefKeyQuery as ChildItemXrefKeyQuery;
use \Vendor as ChildVendor;
use \VendorQuery as ChildVendorQuery;
use \Exception;
use \PDO;
use Map\ItemXrefKeyTableMap;
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
 * Base class that represents a row from the 'item_xref_key' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItemXrefKey implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItemXrefKeyTableMap';


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
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the initdesc1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $initdesc1;

    /**
     * The value for the initdesc2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $initdesc2;

    /**
     * The value for the rkeytheiritem field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rkeytheiritem;

    /**
     * The value for the rkeytheiritemdesc1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rkeytheiritemdesc1;

    /**
     * The value for the rkeytheiritemdesc2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rkeytheiritemdesc2;

    /**
     * The value for the rkeysource field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rkeysource;

    /**
     * The value for the rkeysourcedesc field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rkeysourcedesc;

    /**
     * The value for the rkeycvid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rkeycvid;

    /**
     * The value for the dateupdtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $dateupdtd;

    /**
     * The value for the timeupdtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $timeupdtd;

    /**
     * The value for the dummy field.
     *
     * Note: this column has a database default value of: 'P'
     * @var        string
     */
    protected $dummy;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildVendor
     */
    protected $aVendor;

    /**
     * @var        ChildCustomer
     */
    protected $aCustomer;

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
        $this->inititemnbr = '';
        $this->initdesc1 = '';
        $this->initdesc2 = '';
        $this->rkeytheiritem = '';
        $this->rkeytheiritemdesc1 = '';
        $this->rkeytheiritemdesc2 = '';
        $this->rkeysource = '';
        $this->rkeysourcedesc = '';
        $this->rkeycvid = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\ItemXrefKey object.
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
     * Compares this with another <code>ItemXrefKey</code> instance.  If
     * <code>obj</code> is an instance of <code>ItemXrefKey</code>, delegates to
     * <code>equals(ItemXrefKey)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ItemXrefKey The current object, for fluid interface
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
     * Get the [inititemnbr] column value.
     *
     * @return string
     */
    public function getInititemnbr()
    {
        return $this->inititemnbr;
    }

    /**
     * Get the [initdesc1] column value.
     *
     * @return string
     */
    public function getInitdesc1()
    {
        return $this->initdesc1;
    }

    /**
     * Get the [initdesc2] column value.
     *
     * @return string
     */
    public function getInitdesc2()
    {
        return $this->initdesc2;
    }

    /**
     * Get the [rkeytheiritem] column value.
     *
     * @return string
     */
    public function getRkeytheiritem()
    {
        return $this->rkeytheiritem;
    }

    /**
     * Get the [rkeytheiritemdesc1] column value.
     *
     * @return string
     */
    public function getRkeytheiritemdesc1()
    {
        return $this->rkeytheiritemdesc1;
    }

    /**
     * Get the [rkeytheiritemdesc2] column value.
     *
     * @return string
     */
    public function getRkeytheiritemdesc2()
    {
        return $this->rkeytheiritemdesc2;
    }

    /**
     * Get the [rkeysource] column value.
     *
     * @return string
     */
    public function getRkeysource()
    {
        return $this->rkeysource;
    }

    /**
     * Get the [rkeysourcedesc] column value.
     *
     * @return string
     */
    public function getRkeysourcedesc()
    {
        return $this->rkeysourcedesc;
    }

    /**
     * Get the [rkeycvid] column value.
     *
     * @return string
     */
    public function getRkeycvid()
    {
        return $this->rkeycvid;
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
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [initdesc1] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setInitdesc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initdesc1 !== $v) {
            $this->initdesc1 = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_INITDESC1] = true;
        }

        return $this;
    } // setInitdesc1()

    /**
     * Set the value of [initdesc2] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setInitdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initdesc2 !== $v) {
            $this->initdesc2 = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_INITDESC2] = true;
        }

        return $this;
    } // setInitdesc2()

    /**
     * Set the value of [rkeytheiritem] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setRkeytheiritem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rkeytheiritem !== $v) {
            $this->rkeytheiritem = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_RKEYTHEIRITEM] = true;
        }

        return $this;
    } // setRkeytheiritem()

    /**
     * Set the value of [rkeytheiritemdesc1] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setRkeytheiritemdesc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rkeytheiritemdesc1 !== $v) {
            $this->rkeytheiritemdesc1 = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC1] = true;
        }

        return $this;
    } // setRkeytheiritemdesc1()

    /**
     * Set the value of [rkeytheiritemdesc2] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setRkeytheiritemdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rkeytheiritemdesc2 !== $v) {
            $this->rkeytheiritemdesc2 = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC2] = true;
        }

        return $this;
    } // setRkeytheiritemdesc2()

    /**
     * Set the value of [rkeysource] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setRkeysource($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rkeysource !== $v) {
            $this->rkeysource = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_RKEYSOURCE] = true;
        }

        return $this;
    } // setRkeysource()

    /**
     * Set the value of [rkeysourcedesc] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setRkeysourcedesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rkeysourcedesc !== $v) {
            $this->rkeysourcedesc = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_RKEYSOURCEDESC] = true;
        }

        return $this;
    } // setRkeysourcedesc()

    /**
     * Set the value of [rkeycvid] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setRkeycvid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rkeycvid !== $v) {
            $this->rkeycvid = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_RKEYCVID] = true;
        }

        if ($this->aVendor !== null && $this->aVendor->getApvevendid() !== $v) {
            $this->aVendor = null;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    } // setRkeycvid()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItemXrefKeyTableMap::COL_DUMMY] = true;
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
            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->initdesc1 !== '') {
                return false;
            }

            if ($this->initdesc2 !== '') {
                return false;
            }

            if ($this->rkeytheiritem !== '') {
                return false;
            }

            if ($this->rkeytheiritemdesc1 !== '') {
                return false;
            }

            if ($this->rkeytheiritemdesc2 !== '') {
                return false;
            }

            if ($this->rkeysource !== '') {
                return false;
            }

            if ($this->rkeysourcedesc !== '') {
                return false;
            }

            if ($this->rkeycvid !== '') {
                return false;
            }

            if ($this->dateupdtd !== '') {
                return false;
            }

            if ($this->timeupdtd !== '') {
                return false;
            }

            if ($this->dummy !== 'P') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemXrefKeyTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemXrefKeyTableMap::translateFieldName('Initdesc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initdesc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemXrefKeyTableMap::translateFieldName('Initdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemXrefKeyTableMap::translateFieldName('Rkeytheiritem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rkeytheiritem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemXrefKeyTableMap::translateFieldName('Rkeytheiritemdesc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rkeytheiritemdesc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemXrefKeyTableMap::translateFieldName('Rkeytheiritemdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rkeytheiritemdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemXrefKeyTableMap::translateFieldName('Rkeysource', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rkeysource = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemXrefKeyTableMap::translateFieldName('Rkeysourcedesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rkeysourcedesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItemXrefKeyTableMap::translateFieldName('Rkeycvid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rkeycvid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItemXrefKeyTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItemXrefKeyTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItemXrefKeyTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 12; // 12 = ItemXrefKeyTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItemXrefKey'), 0, $e);
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
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aVendor !== null && $this->rkeycvid !== $this->aVendor->getApvevendid()) {
            $this->aVendor = null;
        }
        if ($this->aCustomer !== null && $this->rkeycvid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
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
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefKeyTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemXrefKeyQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
            $this->aVendor = null;
            $this->aCustomer = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ItemXrefKey::setDeleted()
     * @see ItemXrefKey::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefKeyTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemXrefKeyQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefKeyTableMap::DATABASE_NAME);
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
                ItemXrefKeyTableMap::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aVendor !== null) {
                if ($this->aVendor->isModified() || $this->aVendor->isNew()) {
                    $affectedRows += $this->aVendor->save($con);
                }
                $this->setVendor($this->aVendor);
            }

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
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_INITDESC1)) {
            $modifiedColumns[':p' . $index++]  = 'InitDesc1';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_INITDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'InitDesc2';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM)) {
            $modifiedColumns[':p' . $index++]  = 'RkeyTheirItem';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC1)) {
            $modifiedColumns[':p' . $index++]  = 'RkeyTheirItemDesc1';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'RkeyTheirItemDesc2';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYSOURCE)) {
            $modifiedColumns[':p' . $index++]  = 'RkeySource';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYSOURCEDESC)) {
            $modifiedColumns[':p' . $index++]  = 'RkeySourceDesc';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYCVID)) {
            $modifiedColumns[':p' . $index++]  = 'RkeyCVId';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO item_xref_key (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'InitDesc1':
                        $stmt->bindValue($identifier, $this->initdesc1, PDO::PARAM_STR);
                        break;
                    case 'InitDesc2':
                        $stmt->bindValue($identifier, $this->initdesc2, PDO::PARAM_STR);
                        break;
                    case 'RkeyTheirItem':
                        $stmt->bindValue($identifier, $this->rkeytheiritem, PDO::PARAM_STR);
                        break;
                    case 'RkeyTheirItemDesc1':
                        $stmt->bindValue($identifier, $this->rkeytheiritemdesc1, PDO::PARAM_STR);
                        break;
                    case 'RkeyTheirItemDesc2':
                        $stmt->bindValue($identifier, $this->rkeytheiritemdesc2, PDO::PARAM_STR);
                        break;
                    case 'RkeySource':
                        $stmt->bindValue($identifier, $this->rkeysource, PDO::PARAM_STR);
                        break;
                    case 'RkeySourceDesc':
                        $stmt->bindValue($identifier, $this->rkeysourcedesc, PDO::PARAM_STR);
                        break;
                    case 'RkeyCVId':
                        $stmt->bindValue($identifier, $this->rkeycvid, PDO::PARAM_STR);
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
        $pos = ItemXrefKeyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInititemnbr();
                break;
            case 1:
                return $this->getInitdesc1();
                break;
            case 2:
                return $this->getInitdesc2();
                break;
            case 3:
                return $this->getRkeytheiritem();
                break;
            case 4:
                return $this->getRkeytheiritemdesc1();
                break;
            case 5:
                return $this->getRkeytheiritemdesc2();
                break;
            case 6:
                return $this->getRkeysource();
                break;
            case 7:
                return $this->getRkeysourcedesc();
                break;
            case 8:
                return $this->getRkeycvid();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['ItemXrefKey'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ItemXrefKey'][$this->hashCode()] = true;
        $keys = ItemXrefKeyTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getInitdesc1(),
            $keys[2] => $this->getInitdesc2(),
            $keys[3] => $this->getRkeytheiritem(),
            $keys[4] => $this->getRkeytheiritemdesc1(),
            $keys[5] => $this->getRkeytheiritemdesc2(),
            $keys[6] => $this->getRkeysource(),
            $keys[7] => $this->getRkeysourcedesc(),
            $keys[8] => $this->getRkeycvid(),
            $keys[9] => $this->getDateupdtd(),
            $keys[10] => $this->getTimeupdtd(),
            $keys[11] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aItemMasterItem) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemMasterItem';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_item_mast';
                        break;
                    default:
                        $key = 'ItemMasterItem';
                }

                $result[$key] = $this->aItemMasterItem->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVendor) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'vendor';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_vend_mast';
                        break;
                    default:
                        $key = 'Vendor';
                }

                $result[$key] = $this->aVendor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
     * @return $this|\ItemXrefKey
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemXrefKeyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ItemXrefKey
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setInitdesc1($value);
                break;
            case 2:
                $this->setInitdesc2($value);
                break;
            case 3:
                $this->setRkeytheiritem($value);
                break;
            case 4:
                $this->setRkeytheiritemdesc1($value);
                break;
            case 5:
                $this->setRkeytheiritemdesc2($value);
                break;
            case 6:
                $this->setRkeysource($value);
                break;
            case 7:
                $this->setRkeysourcedesc($value);
                break;
            case 8:
                $this->setRkeycvid($value);
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
        $keys = ItemXrefKeyTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setInitdesc1($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInitdesc2($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setRkeytheiritem($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setRkeytheiritemdesc1($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setRkeytheiritemdesc2($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setRkeysource($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setRkeysourcedesc($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setRkeycvid($arr[$keys[8]]);
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
     * @return $this|\ItemXrefKey The current object, for fluid interface
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
        $criteria = new Criteria(ItemXrefKeyTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_INITITEMNBR)) {
            $criteria->add(ItemXrefKeyTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_INITDESC1)) {
            $criteria->add(ItemXrefKeyTableMap::COL_INITDESC1, $this->initdesc1);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_INITDESC2)) {
            $criteria->add(ItemXrefKeyTableMap::COL_INITDESC2, $this->initdesc2);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM)) {
            $criteria->add(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM, $this->rkeytheiritem);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC1)) {
            $criteria->add(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC1, $this->rkeytheiritemdesc1);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC2)) {
            $criteria->add(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC2, $this->rkeytheiritemdesc2);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYSOURCE)) {
            $criteria->add(ItemXrefKeyTableMap::COL_RKEYSOURCE, $this->rkeysource);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYSOURCEDESC)) {
            $criteria->add(ItemXrefKeyTableMap::COL_RKEYSOURCEDESC, $this->rkeysourcedesc);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_RKEYCVID)) {
            $criteria->add(ItemXrefKeyTableMap::COL_RKEYCVID, $this->rkeycvid);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItemXrefKeyTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItemXrefKeyTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItemXrefKeyTableMap::COL_DUMMY)) {
            $criteria->add(ItemXrefKeyTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildItemXrefKeyQuery::create();
        $criteria->add(ItemXrefKeyTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM, $this->rkeytheiritem);
        $criteria->add(ItemXrefKeyTableMap::COL_RKEYSOURCE, $this->rkeysource);
        $criteria->add(ItemXrefKeyTableMap::COL_RKEYCVID, $this->rkeycvid);

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
        $validPk = null !== $this->getInititemnbr() &&
            null !== $this->getRkeytheiritem() &&
            null !== $this->getRkeysource() &&
            null !== $this->getRkeycvid();

        $validPrimaryKeyFKs = 3;
        $primaryKeyFKs = [];

        //relation item to table inv_item_mast
        if ($this->aItemMasterItem && $hash = spl_object_hash($this->aItemMasterItem)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation vendor to table ap_vend_mast
        if ($this->aVendor && $hash = spl_object_hash($this->aVendor)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

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
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getInititemnbr();
        $pks[1] = $this->getRkeytheiritem();
        $pks[2] = $this->getRkeysource();
        $pks[3] = $this->getRkeycvid();

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
        $this->setInititemnbr($keys[0]);
        $this->setRkeytheiritem($keys[1]);
        $this->setRkeysource($keys[2]);
        $this->setRkeycvid($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInititemnbr()) && (null === $this->getRkeytheiritem()) && (null === $this->getRkeysource()) && (null === $this->getRkeycvid());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ItemXrefKey (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setInitdesc1($this->getInitdesc1());
        $copyObj->setInitdesc2($this->getInitdesc2());
        $copyObj->setRkeytheiritem($this->getRkeytheiritem());
        $copyObj->setRkeytheiritemdesc1($this->getRkeytheiritemdesc1());
        $copyObj->setRkeytheiritemdesc2($this->getRkeytheiritemdesc2());
        $copyObj->setRkeysource($this->getRkeysource());
        $copyObj->setRkeysourcedesc($this->getRkeysourcedesc());
        $copyObj->setRkeycvid($this->getRkeycvid());
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
     * @return \ItemXrefKey Clone of current object.
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
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v !== null) {
            $v->addItemXrefKey($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildItemMasterItem object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildItemMasterItem The associated ChildItemMasterItem object.
     * @throws PropelException
     */
    public function getItemMasterItem(ConnectionInterface $con = null)
    {
        if ($this->aItemMasterItem === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null))) {
            $this->aItemMasterItem = ChildItemMasterItemQuery::create()->findPk($this->inititemnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aItemMasterItem->addItemXrefKeys($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildVendor object.
     *
     * @param  ChildVendor $v
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVendor(ChildVendor $v = null)
    {
        if ($v === null) {
            $this->setRkeycvid('');
        } else {
            $this->setRkeycvid($v->getApvevendid());
        }

        $this->aVendor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildVendor object, it will not be re-added.
        if ($v !== null) {
            $v->addItemXrefKey($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildVendor object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildVendor The associated ChildVendor object.
     * @throws PropelException
     */
    public function getVendor(ConnectionInterface $con = null)
    {
        if ($this->aVendor === null && (($this->rkeycvid !== "" && $this->rkeycvid !== null))) {
            $this->aVendor = ChildVendorQuery::create()->findPk($this->rkeycvid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVendor->addItemXrefKeys($this);
             */
        }

        return $this->aVendor;
    }

    /**
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\ItemXrefKey The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if ($v === null) {
            $this->setRkeycvid('');
        } else {
            $this->setRkeycvid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addItemXrefKey($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomer object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCustomer The associated ChildCustomer object.
     * @throws PropelException
     */
    public function getCustomer(ConnectionInterface $con = null)
    {
        if ($this->aCustomer === null && (($this->rkeycvid !== "" && $this->rkeycvid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->rkeycvid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addItemXrefKeys($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeItemXrefKey($this);
        }
        if (null !== $this->aVendor) {
            $this->aVendor->removeItemXrefKey($this);
        }
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeItemXrefKey($this);
        }
        $this->inititemnbr = null;
        $this->initdesc1 = null;
        $this->initdesc2 = null;
        $this->rkeytheiritem = null;
        $this->rkeytheiritemdesc1 = null;
        $this->rkeytheiritemdesc2 = null;
        $this->rkeysource = null;
        $this->rkeysourcedesc = null;
        $this->rkeycvid = null;
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

        $this->aItemMasterItem = null;
        $this->aVendor = null;
        $this->aCustomer = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItemXrefKeyTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // return parent::preSave($con);
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
            // parent::postSave($con);
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
            // return parent::preInsert($con);
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
            // parent::postInsert($con);
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
            // return parent::preUpdate($con);
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
            // parent::postUpdate($con);
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
            // return parent::preDelete($con);
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
            // parent::postDelete($con);
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
