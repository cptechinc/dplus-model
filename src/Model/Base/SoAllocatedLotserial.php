<?php

namespace Base;

use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \SalesOrder as ChildSalesOrder;
use \SalesOrderDetail as ChildSalesOrderDetail;
use \SalesOrderDetailQuery as ChildSalesOrderDetailQuery;
use \SalesOrderQuery as ChildSalesOrderQuery;
use \SoAllocatedLotserialQuery as ChildSoAllocatedLotserialQuery;
use \Exception;
use \PDO;
use Map\SoAllocatedLotserialTableMap;
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
 * Base class that represents a row from the 'so_pre_allo' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SoAllocatedLotserial implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SoAllocatedLotserialTableMap';


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
     * The value for the oehdnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehdnbr;

    /**
     * The value for the oedtline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedtline;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the oeidlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidlotser;

    /**
     * The value for the oeidbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidbin;

    /**
     * The value for the oeidplltnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oeidplltnbr;

    /**
     * The value for the oeidcrtnnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oeidcrtnnbr;

    /**
     * The value for the oeidqtyship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oeidqtyship;

    /**
     * The value for the oeidlotref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidlotref;

    /**
     * The value for the oeidcntrqty field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $oeidcntrqty;

    /**
     * The value for the oeidbatch field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidbatch;

    /**
     * The value for the oeidcuredate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidcuredate;

    /**
     * The value for the oeidpllttype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidpllttype;

    /**
     * The value for the oeidlblprtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidlblprtd;

    /**
     * The value for the oeidorigbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidorigbin;

    /**
     * The value for the oeidplltid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeidplltid;

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
     * @var        ChildSalesOrder
     */
    protected $aSalesOrder;

    /**
     * @var        ChildSalesOrderDetail
     */
    protected $aSalesOrderDetail;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildInvLotMaster
     */
    protected $aInvLotMaster;

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
        $this->oehdnbr = 0;
        $this->oedtline = 0;
        $this->inititemnbr = '';
        $this->oeidlotser = '';
        $this->oeidbin = '';
        $this->oeidplltnbr = 0;
        $this->oeidcrtnnbr = 0;
        $this->oeidqtyship = '0.0000000';
        $this->oeidlotref = '';
        $this->oeidcntrqty = '0';
        $this->oeidbatch = '';
        $this->oeidcuredate = '';
        $this->oeidpllttype = '';
        $this->oeidlblprtd = '';
        $this->oeidorigbin = '';
        $this->oeidplltid = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\SoAllocatedLotserial object.
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
     * Compares this with another <code>SoAllocatedLotserial</code> instance.  If
     * <code>obj</code> is an instance of <code>SoAllocatedLotserial</code>, delegates to
     * <code>equals(SoAllocatedLotserial)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SoAllocatedLotserial The current object, for fluid interface
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
     * Get the [oehdnbr] column value.
     *
     * @return int
     */
    public function getOehdnbr()
    {
        return $this->oehdnbr;
    }

    /**
     * Get the [oedtline] column value.
     *
     * @return int
     */
    public function getOedtline()
    {
        return $this->oedtline;
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
     * Get the [oeidlotser] column value.
     *
     * @return string
     */
    public function getOeidlotser()
    {
        return $this->oeidlotser;
    }

    /**
     * Get the [oeidbin] column value.
     *
     * @return string
     */
    public function getOeidbin()
    {
        return $this->oeidbin;
    }

    /**
     * Get the [oeidplltnbr] column value.
     *
     * @return int
     */
    public function getOeidplltnbr()
    {
        return $this->oeidplltnbr;
    }

    /**
     * Get the [oeidcrtnnbr] column value.
     *
     * @return int
     */
    public function getOeidcrtnnbr()
    {
        return $this->oeidcrtnnbr;
    }

    /**
     * Get the [oeidqtyship] column value.
     *
     * @return string
     */
    public function getOeidqtyship()
    {
        return $this->oeidqtyship;
    }

    /**
     * Get the [oeidlotref] column value.
     *
     * @return string
     */
    public function getOeidlotref()
    {
        return $this->oeidlotref;
    }

    /**
     * Get the [oeidcntrqty] column value.
     *
     * @return string
     */
    public function getOeidcntrqty()
    {
        return $this->oeidcntrqty;
    }

    /**
     * Get the [oeidbatch] column value.
     *
     * @return string
     */
    public function getOeidbatch()
    {
        return $this->oeidbatch;
    }

    /**
     * Get the [oeidcuredate] column value.
     *
     * @return string
     */
    public function getOeidcuredate()
    {
        return $this->oeidcuredate;
    }

    /**
     * Get the [oeidpllttype] column value.
     *
     * @return string
     */
    public function getOeidpllttype()
    {
        return $this->oeidpllttype;
    }

    /**
     * Get the [oeidlblprtd] column value.
     *
     * @return string
     */
    public function getOeidlblprtd()
    {
        return $this->oeidlblprtd;
    }

    /**
     * Get the [oeidorigbin] column value.
     *
     * @return string
     */
    public function getOeidorigbin()
    {
        return $this->oeidorigbin;
    }

    /**
     * Get the [oeidplltid] column value.
     *
     * @return string
     */
    public function getOeidplltid()
    {
        return $this->oeidplltid;
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
     * Set the value of [oehdnbr] column.
     *
     * @param int $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOehdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdnbr !== $v) {
            $this->oehdnbr = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEHDNBR] = true;
        }

        if ($this->aSalesOrder !== null && $this->aSalesOrder->getOehdnbr() !== $v) {
            $this->aSalesOrder = null;
        }

        if ($this->aSalesOrderDetail !== null && $this->aSalesOrderDetail->getOehdnbr() !== $v) {
            $this->aSalesOrderDetail = null;
        }

        return $this;
    } // setOehdnbr()

    /**
     * Set the value of [oedtline] column.
     *
     * @param int $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOedtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtline !== $v) {
            $this->oedtline = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEDTLINE] = true;
        }

        if ($this->aSalesOrderDetail !== null && $this->aSalesOrderDetail->getOedtline() !== $v) {
            $this->aSalesOrderDetail = null;
        }

        return $this;
    } // setOedtline()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        if ($this->aInvLotMaster !== null && $this->aInvLotMaster->getInititemnbr() !== $v) {
            $this->aInvLotMaster = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [oeidlotser] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidlotser !== $v) {
            $this->oeidlotser = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDLOTSER] = true;
        }

        if ($this->aInvLotMaster !== null && $this->aInvLotMaster->getLotmlotnbr() !== $v) {
            $this->aInvLotMaster = null;
        }

        return $this;
    } // setOeidlotser()

    /**
     * Set the value of [oeidbin] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidbin !== $v) {
            $this->oeidbin = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDBIN] = true;
        }

        return $this;
    } // setOeidbin()

    /**
     * Set the value of [oeidplltnbr] column.
     *
     * @param int $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidplltnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oeidplltnbr !== $v) {
            $this->oeidplltnbr = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR] = true;
        }

        return $this;
    } // setOeidplltnbr()

    /**
     * Set the value of [oeidcrtnnbr] column.
     *
     * @param int $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidcrtnnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oeidcrtnnbr !== $v) {
            $this->oeidcrtnnbr = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR] = true;
        }

        return $this;
    } // setOeidcrtnnbr()

    /**
     * Set the value of [oeidqtyship] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidqtyship !== $v) {
            $this->oeidqtyship = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP] = true;
        }

        return $this;
    } // setOeidqtyship()

    /**
     * Set the value of [oeidlotref] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidlotref !== $v) {
            $this->oeidlotref = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDLOTREF] = true;
        }

        return $this;
    } // setOeidlotref()

    /**
     * Set the value of [oeidcntrqty] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidcntrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidcntrqty !== $v) {
            $this->oeidcntrqty = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY] = true;
        }

        return $this;
    } // setOeidcntrqty()

    /**
     * Set the value of [oeidbatch] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidbatch !== $v) {
            $this->oeidbatch = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDBATCH] = true;
        }

        return $this;
    } // setOeidbatch()

    /**
     * Set the value of [oeidcuredate] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidcuredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidcuredate !== $v) {
            $this->oeidcuredate = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDCUREDATE] = true;
        }

        return $this;
    } // setOeidcuredate()

    /**
     * Set the value of [oeidpllttype] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidpllttype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidpllttype !== $v) {
            $this->oeidpllttype = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDPLLTTYPE] = true;
        }

        return $this;
    } // setOeidpllttype()

    /**
     * Set the value of [oeidlblprtd] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidlblprtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidlblprtd !== $v) {
            $this->oeidlblprtd = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDLBLPRTD] = true;
        }

        return $this;
    } // setOeidlblprtd()

    /**
     * Set the value of [oeidorigbin] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidorigbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidorigbin !== $v) {
            $this->oeidorigbin = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDORIGBIN] = true;
        }

        return $this;
    } // setOeidorigbin()

    /**
     * Set the value of [oeidplltid] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setOeidplltid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeidplltid !== $v) {
            $this->oeidplltid = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_OEIDPLLTID] = true;
        }

        return $this;
    } // setOeidplltid()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SoAllocatedLotserialTableMap::COL_DUMMY] = true;
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
            if ($this->oehdnbr !== 0) {
                return false;
            }

            if ($this->oedtline !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->oeidlotser !== '') {
                return false;
            }

            if ($this->oeidbin !== '') {
                return false;
            }

            if ($this->oeidplltnbr !== 0) {
                return false;
            }

            if ($this->oeidcrtnnbr !== 0) {
                return false;
            }

            if ($this->oeidqtyship !== '0.0000000') {
                return false;
            }

            if ($this->oeidlotref !== '') {
                return false;
            }

            if ($this->oeidcntrqty !== '0') {
                return false;
            }

            if ($this->oeidbatch !== '') {
                return false;
            }

            if ($this->oeidcuredate !== '') {
                return false;
            }

            if ($this->oeidpllttype !== '') {
                return false;
            }

            if ($this->oeidlblprtd !== '') {
                return false;
            }

            if ($this->oeidorigbin !== '') {
                return false;
            }

            if ($this->oeidplltid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidplltnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidplltnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidcrtnnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidcntrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidcuredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidcuredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidpllttype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidpllttype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidlblprtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidlblprtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidorigbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidorigbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Oeidplltid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeidplltid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SoAllocatedLotserialTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 19; // 19 = SoAllocatedLotserialTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SoAllocatedLotserial'), 0, $e);
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
        if ($this->aSalesOrder !== null && $this->oehdnbr !== $this->aSalesOrder->getOehdnbr()) {
            $this->aSalesOrder = null;
        }
        if ($this->aSalesOrderDetail !== null && $this->oehdnbr !== $this->aSalesOrderDetail->getOehdnbr()) {
            $this->aSalesOrderDetail = null;
        }
        if ($this->aSalesOrderDetail !== null && $this->oedtline !== $this->aSalesOrderDetail->getOedtline()) {
            $this->aSalesOrderDetail = null;
        }
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aInvLotMaster !== null && $this->inititemnbr !== $this->aInvLotMaster->getInititemnbr()) {
            $this->aInvLotMaster = null;
        }
        if ($this->aInvLotMaster !== null && $this->oeidlotser !== $this->aInvLotMaster->getLotmlotnbr()) {
            $this->aInvLotMaster = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SoAllocatedLotserialTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSoAllocatedLotserialQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSalesOrder = null;
            $this->aSalesOrderDetail = null;
            $this->aItemMasterItem = null;
            $this->aInvLotMaster = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SoAllocatedLotserial::setDeleted()
     * @see SoAllocatedLotserial::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoAllocatedLotserialTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSoAllocatedLotserialQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoAllocatedLotserialTableMap::DATABASE_NAME);
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
                SoAllocatedLotserialTableMap::addInstanceToPool($this);
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

            if ($this->aSalesOrder !== null) {
                if ($this->aSalesOrder->isModified() || $this->aSalesOrder->isNew()) {
                    $affectedRows += $this->aSalesOrder->save($con);
                }
                $this->setSalesOrder($this->aSalesOrder);
            }

            if ($this->aSalesOrderDetail !== null) {
                if ($this->aSalesOrderDetail->isModified() || $this->aSalesOrderDetail->isNew()) {
                    $affectedRows += $this->aSalesOrderDetail->save($con);
                }
                $this->setSalesOrderDetail($this->aSalesOrderDetail);
            }

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aInvLotMaster !== null) {
                if ($this->aInvLotMaster->isModified() || $this->aInvLotMaster->isNew()) {
                    $affectedRows += $this->aInvLotMaster->save($con);
                }
                $this->setInvLotMaster($this->aInvLotMaster);
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
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdNbr';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtLine';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'OeidLotSer';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OeidBin';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OeidPlltNbr';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OeidCrtnNbr';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OeidQtyShip';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'OeidLotRef';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OeidCntrQty';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'OeidBatch';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDCUREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OeidCureDate';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDPLLTTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OeidPlltType';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDLBLPRTD)) {
            $modifiedColumns[':p' . $index++]  = 'OeidLblPrtd';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDORIGBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OeidOrigBin';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDPLLTID)) {
            $modifiedColumns[':p' . $index++]  = 'OeidPlltID';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_pre_allo (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OehdNbr':
                        $stmt->bindValue($identifier, $this->oehdnbr, PDO::PARAM_INT);
                        break;
                    case 'OedtLine':
                        $stmt->bindValue($identifier, $this->oedtline, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'OeidLotSer':
                        $stmt->bindValue($identifier, $this->oeidlotser, PDO::PARAM_STR);
                        break;
                    case 'OeidBin':
                        $stmt->bindValue($identifier, $this->oeidbin, PDO::PARAM_STR);
                        break;
                    case 'OeidPlltNbr':
                        $stmt->bindValue($identifier, $this->oeidplltnbr, PDO::PARAM_INT);
                        break;
                    case 'OeidCrtnNbr':
                        $stmt->bindValue($identifier, $this->oeidcrtnnbr, PDO::PARAM_INT);
                        break;
                    case 'OeidQtyShip':
                        $stmt->bindValue($identifier, $this->oeidqtyship, PDO::PARAM_STR);
                        break;
                    case 'OeidLotRef':
                        $stmt->bindValue($identifier, $this->oeidlotref, PDO::PARAM_STR);
                        break;
                    case 'OeidCntrQty':
                        $stmt->bindValue($identifier, $this->oeidcntrqty, PDO::PARAM_STR);
                        break;
                    case 'OeidBatch':
                        $stmt->bindValue($identifier, $this->oeidbatch, PDO::PARAM_STR);
                        break;
                    case 'OeidCureDate':
                        $stmt->bindValue($identifier, $this->oeidcuredate, PDO::PARAM_STR);
                        break;
                    case 'OeidPlltType':
                        $stmt->bindValue($identifier, $this->oeidpllttype, PDO::PARAM_STR);
                        break;
                    case 'OeidLblPrtd':
                        $stmt->bindValue($identifier, $this->oeidlblprtd, PDO::PARAM_STR);
                        break;
                    case 'OeidOrigBin':
                        $stmt->bindValue($identifier, $this->oeidorigbin, PDO::PARAM_STR);
                        break;
                    case 'OeidPlltID':
                        $stmt->bindValue($identifier, $this->oeidplltid, PDO::PARAM_STR);
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
        $pos = SoAllocatedLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOehdnbr();
                break;
            case 1:
                return $this->getOedtline();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getOeidlotser();
                break;
            case 4:
                return $this->getOeidbin();
                break;
            case 5:
                return $this->getOeidplltnbr();
                break;
            case 6:
                return $this->getOeidcrtnnbr();
                break;
            case 7:
                return $this->getOeidqtyship();
                break;
            case 8:
                return $this->getOeidlotref();
                break;
            case 9:
                return $this->getOeidcntrqty();
                break;
            case 10:
                return $this->getOeidbatch();
                break;
            case 11:
                return $this->getOeidcuredate();
                break;
            case 12:
                return $this->getOeidpllttype();
                break;
            case 13:
                return $this->getOeidlblprtd();
                break;
            case 14:
                return $this->getOeidorigbin();
                break;
            case 15:
                return $this->getOeidplltid();
                break;
            case 16:
                return $this->getDateupdtd();
                break;
            case 17:
                return $this->getTimeupdtd();
                break;
            case 18:
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

        if (isset($alreadyDumpedObjects['SoAllocatedLotserial'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SoAllocatedLotserial'][$this->hashCode()] = true;
        $keys = SoAllocatedLotserialTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOehdnbr(),
            $keys[1] => $this->getOedtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getOeidlotser(),
            $keys[4] => $this->getOeidbin(),
            $keys[5] => $this->getOeidplltnbr(),
            $keys[6] => $this->getOeidcrtnnbr(),
            $keys[7] => $this->getOeidqtyship(),
            $keys[8] => $this->getOeidlotref(),
            $keys[9] => $this->getOeidcntrqty(),
            $keys[10] => $this->getOeidbatch(),
            $keys[11] => $this->getOeidcuredate(),
            $keys[12] => $this->getOeidpllttype(),
            $keys[13] => $this->getOeidlblprtd(),
            $keys[14] => $this->getOeidorigbin(),
            $keys[15] => $this->getOeidplltid(),
            $keys[16] => $this->getDateupdtd(),
            $keys[17] => $this->getTimeupdtd(),
            $keys[18] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSalesOrder) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesOrder';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_header';
                        break;
                    default:
                        $key = 'SalesOrder';
                }

                $result[$key] = $this->aSalesOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSalesOrderDetail) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesOrderDetail';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_detail';
                        break;
                    default:
                        $key = 'SalesOrderDetail';
                }

                $result[$key] = $this->aSalesOrderDetail->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
            if (null !== $this->aInvLotMaster) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invLotMaster';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_lot_mast';
                        break;
                    default:
                        $key = 'InvLotMaster';
                }

                $result[$key] = $this->aInvLotMaster->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\SoAllocatedLotserial
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SoAllocatedLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SoAllocatedLotserial
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOehdnbr($value);
                break;
            case 1:
                $this->setOedtline($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setOeidlotser($value);
                break;
            case 4:
                $this->setOeidbin($value);
                break;
            case 5:
                $this->setOeidplltnbr($value);
                break;
            case 6:
                $this->setOeidcrtnnbr($value);
                break;
            case 7:
                $this->setOeidqtyship($value);
                break;
            case 8:
                $this->setOeidlotref($value);
                break;
            case 9:
                $this->setOeidcntrqty($value);
                break;
            case 10:
                $this->setOeidbatch($value);
                break;
            case 11:
                $this->setOeidcuredate($value);
                break;
            case 12:
                $this->setOeidpllttype($value);
                break;
            case 13:
                $this->setOeidlblprtd($value);
                break;
            case 14:
                $this->setOeidorigbin($value);
                break;
            case 15:
                $this->setOeidplltid($value);
                break;
            case 16:
                $this->setDateupdtd($value);
                break;
            case 17:
                $this->setTimeupdtd($value);
                break;
            case 18:
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
        $keys = SoAllocatedLotserialTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOehdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOedtline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOeidlotser($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOeidbin($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOeidplltnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOeidcrtnnbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOeidqtyship($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOeidlotref($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOeidcntrqty($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOeidbatch($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOeidcuredate($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOeidpllttype($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOeidlblprtd($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOeidorigbin($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOeidplltid($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDateupdtd($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setTimeupdtd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setDummy($arr[$keys[18]]);
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
     * @return $this|\SoAllocatedLotserial The current object, for fluid interface
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
        $criteria = new Criteria(SoAllocatedLotserialTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEHDNBR)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEHDNBR, $this->oehdnbr);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEDTLINE)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEDTLINE, $this->oedtline);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_INITITEMNBR)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDLOTSER)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDLOTSER, $this->oeidlotser);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDBIN)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDBIN, $this->oeidbin);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, $this->oeidplltnbr);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, $this->oeidcrtnnbr);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP, $this->oeidqtyship);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDLOTREF)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDLOTREF, $this->oeidlotref);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY, $this->oeidcntrqty);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDBATCH)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDBATCH, $this->oeidbatch);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDCUREDATE)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDCUREDATE, $this->oeidcuredate);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDPLLTTYPE)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDPLLTTYPE, $this->oeidpllttype);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDLBLPRTD)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDLBLPRTD, $this->oeidlblprtd);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDORIGBIN)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDORIGBIN, $this->oeidorigbin);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_OEIDPLLTID)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDPLLTID, $this->oeidplltid);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_DATEUPDTD)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SoAllocatedLotserialTableMap::COL_DUMMY)) {
            $criteria->add(SoAllocatedLotserialTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSoAllocatedLotserialQuery::create();
        $criteria->add(SoAllocatedLotserialTableMap::COL_OEHDNBR, $this->oehdnbr);
        $criteria->add(SoAllocatedLotserialTableMap::COL_OEDTLINE, $this->oedtline);
        $criteria->add(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDLOTSER, $this->oeidlotser);
        $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDBIN, $this->oeidbin);
        $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, $this->oeidplltnbr);
        $criteria->add(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, $this->oeidcrtnnbr);

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
        $validPk = null !== $this->getOehdnbr() &&
            null !== $this->getOedtline() &&
            null !== $this->getInititemnbr() &&
            null !== $this->getOeidlotser() &&
            null !== $this->getOeidbin() &&
            null !== $this->getOeidplltnbr() &&
            null !== $this->getOeidcrtnnbr();

        $validPrimaryKeyFKs = 6;
        $primaryKeyFKs = [];

        //relation salesorder to table so_header
        if ($this->aSalesOrder && $hash = spl_object_hash($this->aSalesOrder)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation salesorderdetail to table so_detail
        if ($this->aSalesOrderDetail && $hash = spl_object_hash($this->aSalesOrderDetail)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation item to table inv_item_mast
        if ($this->aItemMasterItem && $hash = spl_object_hash($this->aItemMasterItem)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation lotserial to table inv_lot_mast
        if ($this->aInvLotMaster && $hash = spl_object_hash($this->aInvLotMaster)) {
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
        $pks[0] = $this->getOehdnbr();
        $pks[1] = $this->getOedtline();
        $pks[2] = $this->getInititemnbr();
        $pks[3] = $this->getOeidlotser();
        $pks[4] = $this->getOeidbin();
        $pks[5] = $this->getOeidplltnbr();
        $pks[6] = $this->getOeidcrtnnbr();

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
        $this->setOehdnbr($keys[0]);
        $this->setOedtline($keys[1]);
        $this->setInititemnbr($keys[2]);
        $this->setOeidlotser($keys[3]);
        $this->setOeidbin($keys[4]);
        $this->setOeidplltnbr($keys[5]);
        $this->setOeidcrtnnbr($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getOehdnbr()) && (null === $this->getOedtline()) && (null === $this->getInititemnbr()) && (null === $this->getOeidlotser()) && (null === $this->getOeidbin()) && (null === $this->getOeidplltnbr()) && (null === $this->getOeidcrtnnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SoAllocatedLotserial (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOehdnbr($this->getOehdnbr());
        $copyObj->setOedtline($this->getOedtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setOeidlotser($this->getOeidlotser());
        $copyObj->setOeidbin($this->getOeidbin());
        $copyObj->setOeidplltnbr($this->getOeidplltnbr());
        $copyObj->setOeidcrtnnbr($this->getOeidcrtnnbr());
        $copyObj->setOeidqtyship($this->getOeidqtyship());
        $copyObj->setOeidlotref($this->getOeidlotref());
        $copyObj->setOeidcntrqty($this->getOeidcntrqty());
        $copyObj->setOeidbatch($this->getOeidbatch());
        $copyObj->setOeidcuredate($this->getOeidcuredate());
        $copyObj->setOeidpllttype($this->getOeidpllttype());
        $copyObj->setOeidlblprtd($this->getOeidlblprtd());
        $copyObj->setOeidorigbin($this->getOeidorigbin());
        $copyObj->setOeidplltid($this->getOeidplltid());
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
     * @return \SoAllocatedLotserial Clone of current object.
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
     * Declares an association between this object and a ChildSalesOrder object.
     *
     * @param  ChildSalesOrder $v
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesOrder(ChildSalesOrder $v = null)
    {
        if ($v === null) {
            $this->setOehdnbr(0);
        } else {
            $this->setOehdnbr($v->getOehdnbr());
        }

        $this->aSalesOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSalesOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addSoAllocatedLotserial($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSalesOrder object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSalesOrder The associated ChildSalesOrder object.
     * @throws PropelException
     */
    public function getSalesOrder(ConnectionInterface $con = null)
    {
        if ($this->aSalesOrder === null && ($this->oehdnbr != 0)) {
            $this->aSalesOrder = ChildSalesOrderQuery::create()->findPk($this->oehdnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesOrder->addSoAllocatedLotserials($this);
             */
        }

        return $this->aSalesOrder;
    }

    /**
     * Declares an association between this object and a ChildSalesOrderDetail object.
     *
     * @param  ChildSalesOrderDetail $v
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesOrderDetail(ChildSalesOrderDetail $v = null)
    {
        if ($v === null) {
            $this->setOehdnbr(0);
        } else {
            $this->setOehdnbr($v->getOehdnbr());
        }

        if ($v === null) {
            $this->setOedtline(0);
        } else {
            $this->setOedtline($v->getOedtline());
        }

        $this->aSalesOrderDetail = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSalesOrderDetail object, it will not be re-added.
        if ($v !== null) {
            $v->addSoAllocatedLotserial($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSalesOrderDetail object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSalesOrderDetail The associated ChildSalesOrderDetail object.
     * @throws PropelException
     */
    public function getSalesOrderDetail(ConnectionInterface $con = null)
    {
        if ($this->aSalesOrderDetail === null && ($this->oehdnbr != 0 && $this->oedtline != 0)) {
            $this->aSalesOrderDetail = ChildSalesOrderDetailQuery::create()->findPk(array($this->oehdnbr, $this->oedtline), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesOrderDetail->addSoAllocatedLotserials($this);
             */
        }

        return $this->aSalesOrderDetail;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
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
            $v->addSoAllocatedLotserial($this);
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
                $this->aItemMasterItem->addSoAllocatedLotserials($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildInvLotMaster object.
     *
     * @param  ChildInvLotMaster $v
     * @return $this|\SoAllocatedLotserial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvLotMaster(ChildInvLotMaster $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        if ($v === null) {
            $this->setOeidlotser('');
        } else {
            $this->setOeidlotser($v->getLotmlotnbr());
        }

        $this->aInvLotMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvLotMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addSoAllocatedLotserial($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvLotMaster object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvLotMaster The associated ChildInvLotMaster object.
     * @throws PropelException
     */
    public function getInvLotMaster(ConnectionInterface $con = null)
    {
        if ($this->aInvLotMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->oeidlotser !== "" && $this->oeidlotser !== null))) {
            $this->aInvLotMaster = ChildInvLotMasterQuery::create()->findPk(array($this->inititemnbr, $this->oeidlotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvLotMaster->addSoAllocatedLotserials($this);
             */
        }

        return $this->aInvLotMaster;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSalesOrder) {
            $this->aSalesOrder->removeSoAllocatedLotserial($this);
        }
        if (null !== $this->aSalesOrderDetail) {
            $this->aSalesOrderDetail->removeSoAllocatedLotserial($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeSoAllocatedLotserial($this);
        }
        if (null !== $this->aInvLotMaster) {
            $this->aInvLotMaster->removeSoAllocatedLotserial($this);
        }
        $this->oehdnbr = null;
        $this->oedtline = null;
        $this->inititemnbr = null;
        $this->oeidlotser = null;
        $this->oeidbin = null;
        $this->oeidplltnbr = null;
        $this->oeidcrtnnbr = null;
        $this->oeidqtyship = null;
        $this->oeidlotref = null;
        $this->oeidcntrqty = null;
        $this->oeidbatch = null;
        $this->oeidcuredate = null;
        $this->oeidpllttype = null;
        $this->oeidlblprtd = null;
        $this->oeidorigbin = null;
        $this->oeidplltid = null;
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

        $this->aSalesOrder = null;
        $this->aSalesOrderDetail = null;
        $this->aItemMasterItem = null;
        $this->aInvLotMaster = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SoAllocatedLotserialTableMap::DEFAULT_STRING_FORMAT);
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
