<?php

namespace Base;

use \CstkHead as ChildCstkHead;
use \CstkHeadQuery as ChildCstkHeadQuery;
use \CstkItem as ChildCstkItem;
use \CstkItemQuery as ChildCstkItemQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \Exception;
use \PDO;
use Map\CstkHeadTableMap;
use Map\CstkItemTableMap;
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
 * Base class that represents a row from the 'cust_stock_head' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class CstkHead implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\CstkHeadTableMap';


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
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arstshipid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arstshipid;

    /**
     * The value for the cskhcell field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cskhcell;

    /**
     * The value for the cskhenterdate field.
     *
     * @var        string
     */
    protected $cskhenterdate;

    /**
     * The value for the cskhconsign field.
     *
     * @var        string
     */
    protected $cskhconsign;

    /**
     * The value for the cskhreplcnt field.
     *
     * @var        string
     */
    protected $cskhreplcnt;

    /**
     * The value for the cskhlabelformat field.
     *
     * @var        string
     */
    protected $cskhlabelformat;

    /**
     * The value for the cskhwhse field.
     *
     * @var        string
     */
    protected $cskhwhse;

    /**
     * The value for the cskhapproved field.
     *
     * @var        string
     */
    protected $cskhapproved;

    /**
     * The value for the cskhconsignbinwhse field.
     *
     * @var        string
     */
    protected $cskhconsignbinwhse;

    /**
     * The value for the cskhconsignbincust field.
     *
     * @var        string
     */
    protected $cskhconsignbincust;

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
     * @var        ChildCustomer
     */
    protected $aCustomer;

    /**
     * @var        ChildCustomerShipto
     */
    protected $aCustomerShipto;

    /**
     * @var        ObjectCollection|ChildCstkItem[] Collection to store aggregation of ChildCstkItem objects.
     */
    protected $collCstkItems;
    protected $collCstkItemsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildCstkItem[]
     */
    protected $cstkItemsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->arcucustid = '';
        $this->arstshipid = '';
        $this->cskhcell = '';
    }

    /**
     * Initializes internal state of Base\CstkHead object.
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
     * Compares this with another <code>CstkHead</code> instance.  If
     * <code>obj</code> is an instance of <code>CstkHead</code>, delegates to
     * <code>equals(CstkHead)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CstkHead The current object, for fluid interface
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [arstshipid] column value.
     *
     * @return string
     */
    public function getArstshipid()
    {
        return $this->arstshipid;
    }

    /**
     * Get the [cskhcell] column value.
     *
     * @return string
     */
    public function getCskhcell()
    {
        return $this->cskhcell;
    }

    /**
     * Get the [cskhenterdate] column value.
     *
     * @return string
     */
    public function getCskhenterdate()
    {
        return $this->cskhenterdate;
    }

    /**
     * Get the [cskhconsign] column value.
     *
     * @return string
     */
    public function getCskhconsign()
    {
        return $this->cskhconsign;
    }

    /**
     * Get the [cskhreplcnt] column value.
     *
     * @return string
     */
    public function getCskhreplcnt()
    {
        return $this->cskhreplcnt;
    }

    /**
     * Get the [cskhlabelformat] column value.
     *
     * @return string
     */
    public function getCskhlabelformat()
    {
        return $this->cskhlabelformat;
    }

    /**
     * Get the [cskhwhse] column value.
     *
     * @return string
     */
    public function getCskhwhse()
    {
        return $this->cskhwhse;
    }

    /**
     * Get the [cskhapproved] column value.
     *
     * @return string
     */
    public function getCskhapproved()
    {
        return $this->cskhapproved;
    }

    /**
     * Get the [cskhconsignbinwhse] column value.
     *
     * @return string
     */
    public function getCskhconsignbinwhse()
    {
        return $this->cskhconsignbinwhse;
    }

    /**
     * Get the [cskhconsignbincust] column value.
     *
     * @return string
     */
    public function getCskhconsignbincust()
    {
        return $this->cskhconsignbincust;
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
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArcucustid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arstshipid] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_ARSTSHIPID] = true;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArstshipid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [cskhcell] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhcell($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhcell !== $v) {
            $this->cskhcell = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHCELL] = true;
        }

        return $this;
    } // setCskhcell()

    /**
     * Set the value of [cskhenterdate] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhenterdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhenterdate !== $v) {
            $this->cskhenterdate = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHENTERDATE] = true;
        }

        return $this;
    } // setCskhenterdate()

    /**
     * Set the value of [cskhconsign] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhconsign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhconsign !== $v) {
            $this->cskhconsign = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHCONSIGN] = true;
        }

        return $this;
    } // setCskhconsign()

    /**
     * Set the value of [cskhreplcnt] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhreplcnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhreplcnt !== $v) {
            $this->cskhreplcnt = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHREPLCNT] = true;
        }

        return $this;
    } // setCskhreplcnt()

    /**
     * Set the value of [cskhlabelformat] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhlabelformat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhlabelformat !== $v) {
            $this->cskhlabelformat = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHLABELFORMAT] = true;
        }

        return $this;
    } // setCskhlabelformat()

    /**
     * Set the value of [cskhwhse] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhwhse !== $v) {
            $this->cskhwhse = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHWHSE] = true;
        }

        return $this;
    } // setCskhwhse()

    /**
     * Set the value of [cskhapproved] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhapproved($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhapproved !== $v) {
            $this->cskhapproved = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHAPPROVED] = true;
        }

        return $this;
    } // setCskhapproved()

    /**
     * Set the value of [cskhconsignbinwhse] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhconsignbinwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhconsignbinwhse !== $v) {
            $this->cskhconsignbinwhse = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHCONSIGNBINWHSE] = true;
        }

        return $this;
    } // setCskhconsignbinwhse()

    /**
     * Set the value of [cskhconsignbincust] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setCskhconsignbincust($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhconsignbincust !== $v) {
            $this->cskhconsignbincust = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_CSKHCONSIGNBINCUST] = true;
        }

        return $this;
    } // setCskhconsignbincust()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[CstkHeadTableMap::COL_DUMMY] = true;
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
            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->arstshipid !== '') {
                return false;
            }

            if ($this->cskhcell !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CstkHeadTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CstkHeadTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CstkHeadTableMap::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhcell = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CstkHeadTableMap::translateFieldName('Cskhenterdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhenterdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CstkHeadTableMap::translateFieldName('Cskhconsign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhconsign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CstkHeadTableMap::translateFieldName('Cskhreplcnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhreplcnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CstkHeadTableMap::translateFieldName('Cskhlabelformat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhlabelformat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CstkHeadTableMap::translateFieldName('Cskhwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CstkHeadTableMap::translateFieldName('Cskhapproved', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhapproved = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CstkHeadTableMap::translateFieldName('Cskhconsignbinwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhconsignbinwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CstkHeadTableMap::translateFieldName('Cskhconsignbincust', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhconsignbincust = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CstkHeadTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CstkHeadTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CstkHeadTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 14; // 14 = CstkHeadTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CstkHead'), 0, $e);
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
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
        if ($this->aCustomerShipto !== null && $this->arcucustid !== $this->aCustomerShipto->getArcucustid()) {
            $this->aCustomerShipto = null;
        }
        if ($this->aCustomerShipto !== null && $this->arstshipid !== $this->aCustomerShipto->getArstshipid()) {
            $this->aCustomerShipto = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(CstkHeadTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCstkHeadQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->aCustomerShipto = null;
            $this->collCstkItems = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see CstkHead::setDeleted()
     * @see CstkHead::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CstkHeadTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCstkHeadQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CstkHeadTableMap::DATABASE_NAME);
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
                CstkHeadTableMap::addInstanceToPool($this);
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

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

            if ($this->aCustomerShipto !== null) {
                if ($this->aCustomerShipto->isModified() || $this->aCustomerShipto->isNew()) {
                    $affectedRows += $this->aCustomerShipto->save($con);
                }
                $this->setCustomerShipto($this->aCustomerShipto);
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

            if ($this->cstkItemsScheduledForDeletion !== null) {
                if (!$this->cstkItemsScheduledForDeletion->isEmpty()) {
                    \CstkItemQuery::create()
                        ->filterByPrimaryKeys($this->cstkItemsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cstkItemsScheduledForDeletion = null;
                }
            }

            if ($this->collCstkItems !== null) {
                foreach ($this->collCstkItems as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(CstkHeadTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHCELL)) {
            $modifiedColumns[':p' . $index++]  = 'CskhCell';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHENTERDATE)) {
            $modifiedColumns[':p' . $index++]  = 'CskhEnterDate';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHCONSIGN)) {
            $modifiedColumns[':p' . $index++]  = 'CskhConsign';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHREPLCNT)) {
            $modifiedColumns[':p' . $index++]  = 'CskhReplCnt';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHLABELFORMAT)) {
            $modifiedColumns[':p' . $index++]  = 'CskhLabelFormat';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'CskhWhse';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHAPPROVED)) {
            $modifiedColumns[':p' . $index++]  = 'CskhApproved';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHCONSIGNBINWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'CskhConsignBinWhse';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHCONSIGNBINCUST)) {
            $modifiedColumns[':p' . $index++]  = 'CskhConsignBinCust';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO cust_stock_head (%s) VALUES (%s)',
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
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);
                        break;
                    case 'CskhCell':
                        $stmt->bindValue($identifier, $this->cskhcell, PDO::PARAM_STR);
                        break;
                    case 'CskhEnterDate':
                        $stmt->bindValue($identifier, $this->cskhenterdate, PDO::PARAM_STR);
                        break;
                    case 'CskhConsign':
                        $stmt->bindValue($identifier, $this->cskhconsign, PDO::PARAM_STR);
                        break;
                    case 'CskhReplCnt':
                        $stmt->bindValue($identifier, $this->cskhreplcnt, PDO::PARAM_STR);
                        break;
                    case 'CskhLabelFormat':
                        $stmt->bindValue($identifier, $this->cskhlabelformat, PDO::PARAM_STR);
                        break;
                    case 'CskhWhse':
                        $stmt->bindValue($identifier, $this->cskhwhse, PDO::PARAM_STR);
                        break;
                    case 'CskhApproved':
                        $stmt->bindValue($identifier, $this->cskhapproved, PDO::PARAM_STR);
                        break;
                    case 'CskhConsignBinWhse':
                        $stmt->bindValue($identifier, $this->cskhconsignbinwhse, PDO::PARAM_STR);
                        break;
                    case 'CskhConsignBinCust':
                        $stmt->bindValue($identifier, $this->cskhconsignbincust, PDO::PARAM_STR);
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
        $pos = CstkHeadTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArcucustid();
                break;
            case 1:
                return $this->getArstshipid();
                break;
            case 2:
                return $this->getCskhcell();
                break;
            case 3:
                return $this->getCskhenterdate();
                break;
            case 4:
                return $this->getCskhconsign();
                break;
            case 5:
                return $this->getCskhreplcnt();
                break;
            case 6:
                return $this->getCskhlabelformat();
                break;
            case 7:
                return $this->getCskhwhse();
                break;
            case 8:
                return $this->getCskhapproved();
                break;
            case 9:
                return $this->getCskhconsignbinwhse();
                break;
            case 10:
                return $this->getCskhconsignbincust();
                break;
            case 11:
                return $this->getDateupdtd();
                break;
            case 12:
                return $this->getTimeupdtd();
                break;
            case 13:
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

        if (isset($alreadyDumpedObjects['CstkHead'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CstkHead'][$this->hashCode()] = true;
        $keys = CstkHeadTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArstshipid(),
            $keys[2] => $this->getCskhcell(),
            $keys[3] => $this->getCskhenterdate(),
            $keys[4] => $this->getCskhconsign(),
            $keys[5] => $this->getCskhreplcnt(),
            $keys[6] => $this->getCskhlabelformat(),
            $keys[7] => $this->getCskhwhse(),
            $keys[8] => $this->getCskhapproved(),
            $keys[9] => $this->getCskhconsignbinwhse(),
            $keys[10] => $this->getCskhconsignbincust(),
            $keys[11] => $this->getDateupdtd(),
            $keys[12] => $this->getTimeupdtd(),
            $keys[13] => $this->getDummy(),
        );
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
            if (null !== $this->aCustomerShipto) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customerShipto';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_ship_to';
                        break;
                    default:
                        $key = 'CustomerShipto';
                }

                $result[$key] = $this->aCustomerShipto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCstkItems) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'cstkItems';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'cust_stock_dets';
                        break;
                    default:
                        $key = 'CstkItems';
                }

                $result[$key] = $this->collCstkItems->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\CstkHead
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CstkHeadTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CstkHead
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setArstshipid($value);
                break;
            case 2:
                $this->setCskhcell($value);
                break;
            case 3:
                $this->setCskhenterdate($value);
                break;
            case 4:
                $this->setCskhconsign($value);
                break;
            case 5:
                $this->setCskhreplcnt($value);
                break;
            case 6:
                $this->setCskhlabelformat($value);
                break;
            case 7:
                $this->setCskhwhse($value);
                break;
            case 8:
                $this->setCskhapproved($value);
                break;
            case 9:
                $this->setCskhconsignbinwhse($value);
                break;
            case 10:
                $this->setCskhconsignbincust($value);
                break;
            case 11:
                $this->setDateupdtd($value);
                break;
            case 12:
                $this->setTimeupdtd($value);
                break;
            case 13:
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
        $keys = CstkHeadTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArstshipid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCskhcell($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCskhenterdate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCskhconsign($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCskhreplcnt($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCskhlabelformat($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setCskhwhse($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCskhapproved($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCskhconsignbinwhse($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setCskhconsignbincust($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setDateupdtd($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setTimeupdtd($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setDummy($arr[$keys[13]]);
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
     * @return $this|\CstkHead The current object, for fluid interface
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
        $criteria = new Criteria(CstkHeadTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CstkHeadTableMap::COL_ARCUCUSTID)) {
            $criteria->add(CstkHeadTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_ARSTSHIPID)) {
            $criteria->add(CstkHeadTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHCELL)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHCELL, $this->cskhcell);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHENTERDATE)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHENTERDATE, $this->cskhenterdate);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHCONSIGN)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHCONSIGN, $this->cskhconsign);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHREPLCNT)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHREPLCNT, $this->cskhreplcnt);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHLABELFORMAT)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHLABELFORMAT, $this->cskhlabelformat);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHWHSE)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHWHSE, $this->cskhwhse);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHAPPROVED)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHAPPROVED, $this->cskhapproved);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHCONSIGNBINWHSE)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHCONSIGNBINWHSE, $this->cskhconsignbinwhse);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_CSKHCONSIGNBINCUST)) {
            $criteria->add(CstkHeadTableMap::COL_CSKHCONSIGNBINCUST, $this->cskhconsignbincust);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_DATEUPDTD)) {
            $criteria->add(CstkHeadTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_TIMEUPDTD)) {
            $criteria->add(CstkHeadTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(CstkHeadTableMap::COL_DUMMY)) {
            $criteria->add(CstkHeadTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildCstkHeadQuery::create();
        $criteria->add(CstkHeadTableMap::COL_ARCUCUSTID, $this->arcucustid);
        $criteria->add(CstkHeadTableMap::COL_ARSTSHIPID, $this->arstshipid);
        $criteria->add(CstkHeadTableMap::COL_CSKHCELL, $this->cskhcell);

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
        $validPk = null !== $this->getArcucustid() &&
            null !== $this->getArstshipid() &&
            null !== $this->getCskhcell();

        $validPrimaryKeyFKs = 3;
        $primaryKeyFKs = [];

        //relation customer to table ar_cust_mast
        if ($this->aCustomer && $hash = spl_object_hash($this->aCustomer)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation shipto to table ar_ship_to
        if ($this->aCustomerShipto && $hash = spl_object_hash($this->aCustomerShipto)) {
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
        $pks[0] = $this->getArcucustid();
        $pks[1] = $this->getArstshipid();
        $pks[2] = $this->getCskhcell();

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
        $this->setArcucustid($keys[0]);
        $this->setArstshipid($keys[1]);
        $this->setCskhcell($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getArcucustid()) && (null === $this->getArstshipid()) && (null === $this->getCskhcell());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CstkHead (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setCskhcell($this->getCskhcell());
        $copyObj->setCskhenterdate($this->getCskhenterdate());
        $copyObj->setCskhconsign($this->getCskhconsign());
        $copyObj->setCskhreplcnt($this->getCskhreplcnt());
        $copyObj->setCskhlabelformat($this->getCskhlabelformat());
        $copyObj->setCskhwhse($this->getCskhwhse());
        $copyObj->setCskhapproved($this->getCskhapproved());
        $copyObj->setCskhconsignbinwhse($this->getCskhconsignbinwhse());
        $copyObj->setCskhconsignbincust($this->getCskhconsignbincust());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getCstkItems() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCstkItem($relObj->copy($deepCopy));
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
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \CstkHead Clone of current object.
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
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\CstkHead The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addCstkHead($this);
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
        if ($this->aCustomer === null && (($this->arcucustid !== "" && $this->arcucustid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->arcucustid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addCstkHeads($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a ChildCustomerShipto object.
     *
     * @param  ChildCustomerShipto $v
     * @return $this|\CstkHead The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomerShipto(ChildCustomerShipto $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        if ($v === null) {
            $this->setArstshipid('');
        } else {
            $this->setArstshipid($v->getArstshipid());
        }

        $this->aCustomerShipto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomerShipto object, it will not be re-added.
        if ($v !== null) {
            $v->addCstkHead($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomerShipto object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCustomerShipto The associated ChildCustomerShipto object.
     * @throws PropelException
     */
    public function getCustomerShipto(ConnectionInterface $con = null)
    {
        if ($this->aCustomerShipto === null && (($this->arcucustid !== "" && $this->arcucustid !== null) && ($this->arstshipid !== "" && $this->arstshipid !== null))) {
            $this->aCustomerShipto = ChildCustomerShiptoQuery::create()->findPk(array($this->arcucustid, $this->arstshipid), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomerShipto->addCstkHeads($this);
             */
        }

        return $this->aCustomerShipto;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CstkItem' == $relationName) {
            $this->initCstkItems();
            return;
        }
    }

    /**
     * Clears out the collCstkItems collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCstkItems()
     */
    public function clearCstkItems()
    {
        $this->collCstkItems = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCstkItems collection loaded partially.
     */
    public function resetPartialCstkItems($v = true)
    {
        $this->collCstkItemsPartial = $v;
    }

    /**
     * Initializes the collCstkItems collection.
     *
     * By default this just sets the collCstkItems collection to an empty array (like clearcollCstkItems());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCstkItems($overrideExisting = true)
    {
        if (null !== $this->collCstkItems && !$overrideExisting) {
            return;
        }

        $collectionClassName = CstkItemTableMap::getTableMap()->getCollectionClassName();

        $this->collCstkItems = new $collectionClassName;
        $this->collCstkItems->setModel('\CstkItem');
    }

    /**
     * Gets an array of ChildCstkItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCstkHead is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildCstkItem[] List of ChildCstkItem objects
     * @throws PropelException
     */
    public function getCstkItems(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCstkItemsPartial && !$this->isNew();
        if (null === $this->collCstkItems || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCstkItems) {
                // return empty collection
                $this->initCstkItems();
            } else {
                $collCstkItems = ChildCstkItemQuery::create(null, $criteria)
                    ->filterByCstkHead($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCstkItemsPartial && count($collCstkItems)) {
                        $this->initCstkItems(false);

                        foreach ($collCstkItems as $obj) {
                            if (false == $this->collCstkItems->contains($obj)) {
                                $this->collCstkItems->append($obj);
                            }
                        }

                        $this->collCstkItemsPartial = true;
                    }

                    return $collCstkItems;
                }

                if ($partial && $this->collCstkItems) {
                    foreach ($this->collCstkItems as $obj) {
                        if ($obj->isNew()) {
                            $collCstkItems[] = $obj;
                        }
                    }
                }

                $this->collCstkItems = $collCstkItems;
                $this->collCstkItemsPartial = false;
            }
        }

        return $this->collCstkItems;
    }

    /**
     * Sets a collection of ChildCstkItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $cstkItems A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCstkHead The current object (for fluent API support)
     */
    public function setCstkItems(Collection $cstkItems, ConnectionInterface $con = null)
    {
        /** @var ChildCstkItem[] $cstkItemsToDelete */
        $cstkItemsToDelete = $this->getCstkItems(new Criteria(), $con)->diff($cstkItems);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->cstkItemsScheduledForDeletion = clone $cstkItemsToDelete;

        foreach ($cstkItemsToDelete as $cstkItemRemoved) {
            $cstkItemRemoved->setCstkHead(null);
        }

        $this->collCstkItems = null;
        foreach ($cstkItems as $cstkItem) {
            $this->addCstkItem($cstkItem);
        }

        $this->collCstkItems = $cstkItems;
        $this->collCstkItemsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CstkItem objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related CstkItem objects.
     * @throws PropelException
     */
    public function countCstkItems(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCstkItemsPartial && !$this->isNew();
        if (null === $this->collCstkItems || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCstkItems) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCstkItems());
            }

            $query = ChildCstkItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCstkHead($this)
                ->count($con);
        }

        return count($this->collCstkItems);
    }

    /**
     * Method called to associate a ChildCstkItem object to this object
     * through the ChildCstkItem foreign key attribute.
     *
     * @param  ChildCstkItem $l ChildCstkItem
     * @return $this|\CstkHead The current object (for fluent API support)
     */
    public function addCstkItem(ChildCstkItem $l)
    {
        if ($this->collCstkItems === null) {
            $this->initCstkItems();
            $this->collCstkItemsPartial = true;
        }

        if (!$this->collCstkItems->contains($l)) {
            $this->doAddCstkItem($l);

            if ($this->cstkItemsScheduledForDeletion and $this->cstkItemsScheduledForDeletion->contains($l)) {
                $this->cstkItemsScheduledForDeletion->remove($this->cstkItemsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildCstkItem $cstkItem The ChildCstkItem object to add.
     */
    protected function doAddCstkItem(ChildCstkItem $cstkItem)
    {
        $this->collCstkItems[]= $cstkItem;
        $cstkItem->setCstkHead($this);
    }

    /**
     * @param  ChildCstkItem $cstkItem The ChildCstkItem object to remove.
     * @return $this|ChildCstkHead The current object (for fluent API support)
     */
    public function removeCstkItem(ChildCstkItem $cstkItem)
    {
        if ($this->getCstkItems()->contains($cstkItem)) {
            $pos = $this->collCstkItems->search($cstkItem);
            $this->collCstkItems->remove($pos);
            if (null === $this->cstkItemsScheduledForDeletion) {
                $this->cstkItemsScheduledForDeletion = clone $this->collCstkItems;
                $this->cstkItemsScheduledForDeletion->clear();
            }
            $this->cstkItemsScheduledForDeletion[]= clone $cstkItem;
            $cstkItem->setCstkHead(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CstkHead is new, it will return
     * an empty collection; or if this CstkHead has previously
     * been saved, it will retrieve related CstkItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CstkHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildCstkItem[] List of ChildCstkItem objects
     */
    public function getCstkItemsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildCstkItemQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getCstkItems($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CstkHead is new, it will return
     * an empty collection; or if this CstkHead has previously
     * been saved, it will retrieve related CstkItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CstkHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildCstkItem[] List of ChildCstkItem objects
     */
    public function getCstkItemsJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildCstkItemQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getCstkItems($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CstkHead is new, it will return
     * an empty collection; or if this CstkHead has previously
     * been saved, it will retrieve related CstkItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CstkHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildCstkItem[] List of ChildCstkItem objects
     */
    public function getCstkItemsJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildCstkItemQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getCstkItems($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeCstkHead($this);
        }
        if (null !== $this->aCustomerShipto) {
            $this->aCustomerShipto->removeCstkHead($this);
        }
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->cskhcell = null;
        $this->cskhenterdate = null;
        $this->cskhconsign = null;
        $this->cskhreplcnt = null;
        $this->cskhlabelformat = null;
        $this->cskhwhse = null;
        $this->cskhapproved = null;
        $this->cskhconsignbinwhse = null;
        $this->cskhconsignbincust = null;
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
            if ($this->collCstkItems) {
                foreach ($this->collCstkItems as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collCstkItems = null;
        $this->aCustomer = null;
        $this->aCustomerShipto = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CstkHeadTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // parent::preSave($con);
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
            // parent::preInsert($con);
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
            // parent::preUpdate($con);
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
            // parent::preDelete($con);
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
