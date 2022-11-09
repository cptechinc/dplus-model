<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \SalesOrder as ChildSalesOrder;
use \SalesOrderDetail as ChildSalesOrderDetail;
use \SalesOrderDetailQuery as ChildSalesOrderDetailQuery;
use \SalesOrderLotserialQuery as ChildSalesOrderLotserialQuery;
use \SalesOrderQuery as ChildSalesOrderQuery;
use \Exception;
use \PDO;
use Map\SalesOrderLotserialTableMap;
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
 * Base class that represents a row from the 'so_lot_ser' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SalesOrderLotserial implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SalesOrderLotserialTableMap';


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
     * The value for the oesdtag field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdtag;

    /**
     * The value for the oesdlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdlotser;

    /**
     * The value for the oesdbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdbin;

    /**
     * The value for the oesdplltnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oesdplltnbr;

    /**
     * The value for the oesdcrtnnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oesdcrtnnbr;

    /**
     * The value for the oesdqtyship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oesdqtyship;

    /**
     * The value for the oesdcntrqty field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $oesdcntrqty;

    /**
     * The value for the oesdspecordr field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oesdspecordr;

    /**
     * The value for the oesdlotref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdlotref;

    /**
     * The value for the oesdbatch field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdbatch;

    /**
     * The value for the oesdcuredate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdcuredate;

    /**
     * The value for the oesdacstatus field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdacstatus;

    /**
     * The value for the oesdtestlot field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdtestlot;

    /**
     * The value for the oesdpllttype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdpllttype;

    /**
     * The value for the oesdtarewght field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oesdtarewght;

    /**
     * The value for the oesduseup field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesduseup;

    /**
     * The value for the oesdlblprtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdlblprtd;

    /**
     * The value for the oesdorigbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdorigbin;

    /**
     * The value for the oesdactvdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oesdactvdate;

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
        $this->oesdtag = '';
        $this->oesdlotser = '';
        $this->oesdbin = '';
        $this->oesdplltnbr = 0;
        $this->oesdcrtnnbr = 0;
        $this->oesdqtyship = '0.0000000';
        $this->oesdcntrqty = '0';
        $this->oesdspecordr = 'N';
        $this->oesdlotref = '';
        $this->oesdbatch = '';
        $this->oesdcuredate = '';
        $this->oesdacstatus = '';
        $this->oesdtestlot = '';
        $this->oesdpllttype = '';
        $this->oesdtarewght = '0.000';
        $this->oesduseup = '';
        $this->oesdlblprtd = '';
        $this->oesdorigbin = '';
        $this->oesdactvdate = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\SalesOrderLotserial object.
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
     * Compares this with another <code>SalesOrderLotserial</code> instance.  If
     * <code>obj</code> is an instance of <code>SalesOrderLotserial</code>, delegates to
     * <code>equals(SalesOrderLotserial)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SalesOrderLotserial The current object, for fluid interface
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
     * Get the [oesdtag] column value.
     *
     * @return string
     */
    public function getOesdtag()
    {
        return $this->oesdtag;
    }

    /**
     * Get the [oesdlotser] column value.
     *
     * @return string
     */
    public function getOesdlotser()
    {
        return $this->oesdlotser;
    }

    /**
     * Get the [oesdbin] column value.
     *
     * @return string
     */
    public function getOesdbin()
    {
        return $this->oesdbin;
    }

    /**
     * Get the [oesdplltnbr] column value.
     *
     * @return int
     */
    public function getOesdplltnbr()
    {
        return $this->oesdplltnbr;
    }

    /**
     * Get the [oesdcrtnnbr] column value.
     *
     * @return int
     */
    public function getOesdcrtnnbr()
    {
        return $this->oesdcrtnnbr;
    }

    /**
     * Get the [oesdqtyship] column value.
     *
     * @return string
     */
    public function getOesdqtyship()
    {
        return $this->oesdqtyship;
    }

    /**
     * Get the [oesdcntrqty] column value.
     *
     * @return string
     */
    public function getOesdcntrqty()
    {
        return $this->oesdcntrqty;
    }

    /**
     * Get the [oesdspecordr] column value.
     *
     * @return string
     */
    public function getOesdspecordr()
    {
        return $this->oesdspecordr;
    }

    /**
     * Get the [oesdlotref] column value.
     *
     * @return string
     */
    public function getOesdlotref()
    {
        return $this->oesdlotref;
    }

    /**
     * Get the [oesdbatch] column value.
     *
     * @return string
     */
    public function getOesdbatch()
    {
        return $this->oesdbatch;
    }

    /**
     * Get the [oesdcuredate] column value.
     *
     * @return string
     */
    public function getOesdcuredate()
    {
        return $this->oesdcuredate;
    }

    /**
     * Get the [oesdacstatus] column value.
     *
     * @return string
     */
    public function getOesdacstatus()
    {
        return $this->oesdacstatus;
    }

    /**
     * Get the [oesdtestlot] column value.
     *
     * @return string
     */
    public function getOesdtestlot()
    {
        return $this->oesdtestlot;
    }

    /**
     * Get the [oesdpllttype] column value.
     *
     * @return string
     */
    public function getOesdpllttype()
    {
        return $this->oesdpllttype;
    }

    /**
     * Get the [oesdtarewght] column value.
     *
     * @return string
     */
    public function getOesdtarewght()
    {
        return $this->oesdtarewght;
    }

    /**
     * Get the [oesduseup] column value.
     *
     * @return string
     */
    public function getOesduseup()
    {
        return $this->oesduseup;
    }

    /**
     * Get the [oesdlblprtd] column value.
     *
     * @return string
     */
    public function getOesdlblprtd()
    {
        return $this->oesdlblprtd;
    }

    /**
     * Get the [oesdorigbin] column value.
     *
     * @return string
     */
    public function getOesdorigbin()
    {
        return $this->oesdorigbin;
    }

    /**
     * Get the [oesdactvdate] column value.
     *
     * @return string
     */
    public function getOesdactvdate()
    {
        return $this->oesdactvdate;
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
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOehdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdnbr !== $v) {
            $this->oehdnbr = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OEHDNBR] = true;
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
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOedtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtline !== $v) {
            $this->oedtline = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OEDTLINE] = true;
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
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [oesdtag] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdtag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdtag !== $v) {
            $this->oesdtag = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDTAG] = true;
        }

        return $this;
    } // setOesdtag()

    /**
     * Set the value of [oesdlotser] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdlotser !== $v) {
            $this->oesdlotser = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDLOTSER] = true;
        }

        return $this;
    } // setOesdlotser()

    /**
     * Set the value of [oesdbin] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdbin !== $v) {
            $this->oesdbin = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDBIN] = true;
        }

        return $this;
    } // setOesdbin()

    /**
     * Set the value of [oesdplltnbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdplltnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oesdplltnbr !== $v) {
            $this->oesdplltnbr = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDPLLTNBR] = true;
        }

        return $this;
    } // setOesdplltnbr()

    /**
     * Set the value of [oesdcrtnnbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdcrtnnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oesdcrtnnbr !== $v) {
            $this->oesdcrtnnbr = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDCRTNNBR] = true;
        }

        return $this;
    } // setOesdcrtnnbr()

    /**
     * Set the value of [oesdqtyship] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdqtyship !== $v) {
            $this->oesdqtyship = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDQTYSHIP] = true;
        }

        return $this;
    } // setOesdqtyship()

    /**
     * Set the value of [oesdcntrqty] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdcntrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdcntrqty !== $v) {
            $this->oesdcntrqty = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDCNTRQTY] = true;
        }

        return $this;
    } // setOesdcntrqty()

    /**
     * Set the value of [oesdspecordr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdspecordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdspecordr !== $v) {
            $this->oesdspecordr = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDSPECORDR] = true;
        }

        return $this;
    } // setOesdspecordr()

    /**
     * Set the value of [oesdlotref] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdlotref !== $v) {
            $this->oesdlotref = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDLOTREF] = true;
        }

        return $this;
    } // setOesdlotref()

    /**
     * Set the value of [oesdbatch] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdbatch !== $v) {
            $this->oesdbatch = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDBATCH] = true;
        }

        return $this;
    } // setOesdbatch()

    /**
     * Set the value of [oesdcuredate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdcuredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdcuredate !== $v) {
            $this->oesdcuredate = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDCUREDATE] = true;
        }

        return $this;
    } // setOesdcuredate()

    /**
     * Set the value of [oesdacstatus] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdacstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdacstatus !== $v) {
            $this->oesdacstatus = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDACSTATUS] = true;
        }

        return $this;
    } // setOesdacstatus()

    /**
     * Set the value of [oesdtestlot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdtestlot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdtestlot !== $v) {
            $this->oesdtestlot = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDTESTLOT] = true;
        }

        return $this;
    } // setOesdtestlot()

    /**
     * Set the value of [oesdpllttype] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdpllttype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdpllttype !== $v) {
            $this->oesdpllttype = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDPLLTTYPE] = true;
        }

        return $this;
    } // setOesdpllttype()

    /**
     * Set the value of [oesdtarewght] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdtarewght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdtarewght !== $v) {
            $this->oesdtarewght = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDTAREWGHT] = true;
        }

        return $this;
    } // setOesdtarewght()

    /**
     * Set the value of [oesduseup] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesduseup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesduseup !== $v) {
            $this->oesduseup = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDUSEUP] = true;
        }

        return $this;
    } // setOesduseup()

    /**
     * Set the value of [oesdlblprtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdlblprtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdlblprtd !== $v) {
            $this->oesdlblprtd = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDLBLPRTD] = true;
        }

        return $this;
    } // setOesdlblprtd()

    /**
     * Set the value of [oesdorigbin] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdorigbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdorigbin !== $v) {
            $this->oesdorigbin = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDORIGBIN] = true;
        }

        return $this;
    } // setOesdorigbin()

    /**
     * Set the value of [oesdactvdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setOesdactvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oesdactvdate !== $v) {
            $this->oesdactvdate = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_OESDACTVDATE] = true;
        }

        return $this;
    } // setOesdactvdate()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SalesOrderLotserialTableMap::COL_DUMMY] = true;
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

            if ($this->oesdtag !== '') {
                return false;
            }

            if ($this->oesdlotser !== '') {
                return false;
            }

            if ($this->oesdbin !== '') {
                return false;
            }

            if ($this->oesdplltnbr !== 0) {
                return false;
            }

            if ($this->oesdcrtnnbr !== 0) {
                return false;
            }

            if ($this->oesdqtyship !== '0.0000000') {
                return false;
            }

            if ($this->oesdcntrqty !== '0') {
                return false;
            }

            if ($this->oesdspecordr !== 'N') {
                return false;
            }

            if ($this->oesdlotref !== '') {
                return false;
            }

            if ($this->oesdbatch !== '') {
                return false;
            }

            if ($this->oesdcuredate !== '') {
                return false;
            }

            if ($this->oesdacstatus !== '') {
                return false;
            }

            if ($this->oesdtestlot !== '') {
                return false;
            }

            if ($this->oesdpllttype !== '') {
                return false;
            }

            if ($this->oesdtarewght !== '0.000') {
                return false;
            }

            if ($this->oesduseup !== '') {
                return false;
            }

            if ($this->oesdlblprtd !== '') {
                return false;
            }

            if ($this->oesdorigbin !== '') {
                return false;
            }

            if ($this->oesdactvdate !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdtag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdtag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdplltnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdplltnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdcrtnnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdcntrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdspecordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdspecordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdcuredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdcuredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdacstatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdacstatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdtestlot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdtestlot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdpllttype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdpllttype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdtarewght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdtarewght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesduseup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesduseup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdlblprtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdlblprtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdorigbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdorigbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Oesdactvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oesdactvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : SalesOrderLotserialTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 25; // 25 = SalesOrderLotserialTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SalesOrderLotserial'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderLotserialTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSalesOrderLotserialQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SalesOrderLotserial::setDeleted()
     * @see SalesOrderLotserial::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderLotserialTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSalesOrderLotserialQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderLotserialTableMap::DATABASE_NAME);
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
                SalesOrderLotserialTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OEHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdNbr';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OEDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtLine';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDTAG)) {
            $modifiedColumns[':p' . $index++]  = 'OesdTag';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'OesdLotSer';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OesdBin';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDPLLTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OesdPlltNbr';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDCRTNNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OesdCrtnNbr';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OesdQtyShip';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OesdCntrQty';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDSPECORDR)) {
            $modifiedColumns[':p' . $index++]  = 'OesdSpecOrdr';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'OesdLotRef';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'OesdBatch';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDCUREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OesdCureDate';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDACSTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'OesdAcStatus';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDTESTLOT)) {
            $modifiedColumns[':p' . $index++]  = 'OesdTestLot';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDPLLTTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OesdPlltType';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDTAREWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'OesdTareWght';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDUSEUP)) {
            $modifiedColumns[':p' . $index++]  = 'OesdUseUp';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDLBLPRTD)) {
            $modifiedColumns[':p' . $index++]  = 'OesdLblPrtd';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDORIGBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OesdOrigBin';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDACTVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OesdActvDate';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_lot_ser (%s) VALUES (%s)',
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
                    case 'OesdTag':
                        $stmt->bindValue($identifier, $this->oesdtag, PDO::PARAM_STR);
                        break;
                    case 'OesdLotSer':
                        $stmt->bindValue($identifier, $this->oesdlotser, PDO::PARAM_STR);
                        break;
                    case 'OesdBin':
                        $stmt->bindValue($identifier, $this->oesdbin, PDO::PARAM_STR);
                        break;
                    case 'OesdPlltNbr':
                        $stmt->bindValue($identifier, $this->oesdplltnbr, PDO::PARAM_INT);
                        break;
                    case 'OesdCrtnNbr':
                        $stmt->bindValue($identifier, $this->oesdcrtnnbr, PDO::PARAM_INT);
                        break;
                    case 'OesdQtyShip':
                        $stmt->bindValue($identifier, $this->oesdqtyship, PDO::PARAM_STR);
                        break;
                    case 'OesdCntrQty':
                        $stmt->bindValue($identifier, $this->oesdcntrqty, PDO::PARAM_STR);
                        break;
                    case 'OesdSpecOrdr':
                        $stmt->bindValue($identifier, $this->oesdspecordr, PDO::PARAM_STR);
                        break;
                    case 'OesdLotRef':
                        $stmt->bindValue($identifier, $this->oesdlotref, PDO::PARAM_STR);
                        break;
                    case 'OesdBatch':
                        $stmt->bindValue($identifier, $this->oesdbatch, PDO::PARAM_STR);
                        break;
                    case 'OesdCureDate':
                        $stmt->bindValue($identifier, $this->oesdcuredate, PDO::PARAM_STR);
                        break;
                    case 'OesdAcStatus':
                        $stmt->bindValue($identifier, $this->oesdacstatus, PDO::PARAM_STR);
                        break;
                    case 'OesdTestLot':
                        $stmt->bindValue($identifier, $this->oesdtestlot, PDO::PARAM_STR);
                        break;
                    case 'OesdPlltType':
                        $stmt->bindValue($identifier, $this->oesdpllttype, PDO::PARAM_STR);
                        break;
                    case 'OesdTareWght':
                        $stmt->bindValue($identifier, $this->oesdtarewght, PDO::PARAM_STR);
                        break;
                    case 'OesdUseUp':
                        $stmt->bindValue($identifier, $this->oesduseup, PDO::PARAM_STR);
                        break;
                    case 'OesdLblPrtd':
                        $stmt->bindValue($identifier, $this->oesdlblprtd, PDO::PARAM_STR);
                        break;
                    case 'OesdOrigBin':
                        $stmt->bindValue($identifier, $this->oesdorigbin, PDO::PARAM_STR);
                        break;
                    case 'OesdActvDate':
                        $stmt->bindValue($identifier, $this->oesdactvdate, PDO::PARAM_STR);
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
        $pos = SalesOrderLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOesdtag();
                break;
            case 4:
                return $this->getOesdlotser();
                break;
            case 5:
                return $this->getOesdbin();
                break;
            case 6:
                return $this->getOesdplltnbr();
                break;
            case 7:
                return $this->getOesdcrtnnbr();
                break;
            case 8:
                return $this->getOesdqtyship();
                break;
            case 9:
                return $this->getOesdcntrqty();
                break;
            case 10:
                return $this->getOesdspecordr();
                break;
            case 11:
                return $this->getOesdlotref();
                break;
            case 12:
                return $this->getOesdbatch();
                break;
            case 13:
                return $this->getOesdcuredate();
                break;
            case 14:
                return $this->getOesdacstatus();
                break;
            case 15:
                return $this->getOesdtestlot();
                break;
            case 16:
                return $this->getOesdpllttype();
                break;
            case 17:
                return $this->getOesdtarewght();
                break;
            case 18:
                return $this->getOesduseup();
                break;
            case 19:
                return $this->getOesdlblprtd();
                break;
            case 20:
                return $this->getOesdorigbin();
                break;
            case 21:
                return $this->getOesdactvdate();
                break;
            case 22:
                return $this->getDateupdtd();
                break;
            case 23:
                return $this->getTimeupdtd();
                break;
            case 24:
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

        if (isset($alreadyDumpedObjects['SalesOrderLotserial'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesOrderLotserial'][$this->hashCode()] = true;
        $keys = SalesOrderLotserialTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOehdnbr(),
            $keys[1] => $this->getOedtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getOesdtag(),
            $keys[4] => $this->getOesdlotser(),
            $keys[5] => $this->getOesdbin(),
            $keys[6] => $this->getOesdplltnbr(),
            $keys[7] => $this->getOesdcrtnnbr(),
            $keys[8] => $this->getOesdqtyship(),
            $keys[9] => $this->getOesdcntrqty(),
            $keys[10] => $this->getOesdspecordr(),
            $keys[11] => $this->getOesdlotref(),
            $keys[12] => $this->getOesdbatch(),
            $keys[13] => $this->getOesdcuredate(),
            $keys[14] => $this->getOesdacstatus(),
            $keys[15] => $this->getOesdtestlot(),
            $keys[16] => $this->getOesdpllttype(),
            $keys[17] => $this->getOesdtarewght(),
            $keys[18] => $this->getOesduseup(),
            $keys[19] => $this->getOesdlblprtd(),
            $keys[20] => $this->getOesdorigbin(),
            $keys[21] => $this->getOesdactvdate(),
            $keys[22] => $this->getDateupdtd(),
            $keys[23] => $this->getTimeupdtd(),
            $keys[24] => $this->getDummy(),
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
     * @return $this|\SalesOrderLotserial
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SalesOrderLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SalesOrderLotserial
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
                $this->setOesdtag($value);
                break;
            case 4:
                $this->setOesdlotser($value);
                break;
            case 5:
                $this->setOesdbin($value);
                break;
            case 6:
                $this->setOesdplltnbr($value);
                break;
            case 7:
                $this->setOesdcrtnnbr($value);
                break;
            case 8:
                $this->setOesdqtyship($value);
                break;
            case 9:
                $this->setOesdcntrqty($value);
                break;
            case 10:
                $this->setOesdspecordr($value);
                break;
            case 11:
                $this->setOesdlotref($value);
                break;
            case 12:
                $this->setOesdbatch($value);
                break;
            case 13:
                $this->setOesdcuredate($value);
                break;
            case 14:
                $this->setOesdacstatus($value);
                break;
            case 15:
                $this->setOesdtestlot($value);
                break;
            case 16:
                $this->setOesdpllttype($value);
                break;
            case 17:
                $this->setOesdtarewght($value);
                break;
            case 18:
                $this->setOesduseup($value);
                break;
            case 19:
                $this->setOesdlblprtd($value);
                break;
            case 20:
                $this->setOesdorigbin($value);
                break;
            case 21:
                $this->setOesdactvdate($value);
                break;
            case 22:
                $this->setDateupdtd($value);
                break;
            case 23:
                $this->setTimeupdtd($value);
                break;
            case 24:
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
        $keys = SalesOrderLotserialTableMap::getFieldNames($keyType);

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
            $this->setOesdtag($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOesdlotser($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOesdbin($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOesdplltnbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOesdcrtnnbr($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOesdqtyship($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOesdcntrqty($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOesdspecordr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOesdlotref($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOesdbatch($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOesdcuredate($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOesdacstatus($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOesdtestlot($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOesdpllttype($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOesdtarewght($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setOesduseup($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOesdlblprtd($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOesdorigbin($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOesdactvdate($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setDateupdtd($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setTimeupdtd($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setDummy($arr[$keys[24]]);
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
     * @return $this|\SalesOrderLotserial The current object, for fluid interface
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
        $criteria = new Criteria(SalesOrderLotserialTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OEHDNBR)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OEHDNBR, $this->oehdnbr);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OEDTLINE)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OEDTLINE, $this->oedtline);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_INITITEMNBR)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDTAG)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDTAG, $this->oesdtag);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDLOTSER)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDLOTSER, $this->oesdlotser);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDBIN)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDBIN, $this->oesdbin);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDPLLTNBR)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDPLLTNBR, $this->oesdplltnbr);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDCRTNNBR)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDCRTNNBR, $this->oesdcrtnnbr);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDQTYSHIP)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDQTYSHIP, $this->oesdqtyship);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDCNTRQTY)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDCNTRQTY, $this->oesdcntrqty);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDSPECORDR)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDSPECORDR, $this->oesdspecordr);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDLOTREF)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDLOTREF, $this->oesdlotref);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDBATCH)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDBATCH, $this->oesdbatch);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDCUREDATE)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDCUREDATE, $this->oesdcuredate);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDACSTATUS)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDACSTATUS, $this->oesdacstatus);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDTESTLOT)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDTESTLOT, $this->oesdtestlot);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDPLLTTYPE)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDPLLTTYPE, $this->oesdpllttype);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDTAREWGHT)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDTAREWGHT, $this->oesdtarewght);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDUSEUP)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDUSEUP, $this->oesduseup);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDLBLPRTD)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDLBLPRTD, $this->oesdlblprtd);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDORIGBIN)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDORIGBIN, $this->oesdorigbin);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_OESDACTVDATE)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_OESDACTVDATE, $this->oesdactvdate);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_DATEUPDTD)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SalesOrderLotserialTableMap::COL_DUMMY)) {
            $criteria->add(SalesOrderLotserialTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSalesOrderLotserialQuery::create();
        $criteria->add(SalesOrderLotserialTableMap::COL_OEHDNBR, $this->oehdnbr);
        $criteria->add(SalesOrderLotserialTableMap::COL_OEDTLINE, $this->oedtline);
        $criteria->add(SalesOrderLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(SalesOrderLotserialTableMap::COL_OESDTAG, $this->oesdtag);
        $criteria->add(SalesOrderLotserialTableMap::COL_OESDLOTSER, $this->oesdlotser);
        $criteria->add(SalesOrderLotserialTableMap::COL_OESDBIN, $this->oesdbin);
        $criteria->add(SalesOrderLotserialTableMap::COL_OESDPLLTNBR, $this->oesdplltnbr);
        $criteria->add(SalesOrderLotserialTableMap::COL_OESDCRTNNBR, $this->oesdcrtnnbr);

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
            null !== $this->getOesdtag() &&
            null !== $this->getOesdlotser() &&
            null !== $this->getOesdbin() &&
            null !== $this->getOesdplltnbr() &&
            null !== $this->getOesdcrtnnbr();

        $validPrimaryKeyFKs = 4;
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
        $pks[3] = $this->getOesdtag();
        $pks[4] = $this->getOesdlotser();
        $pks[5] = $this->getOesdbin();
        $pks[6] = $this->getOesdplltnbr();
        $pks[7] = $this->getOesdcrtnnbr();

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
        $this->setOesdtag($keys[3]);
        $this->setOesdlotser($keys[4]);
        $this->setOesdbin($keys[5]);
        $this->setOesdplltnbr($keys[6]);
        $this->setOesdcrtnnbr($keys[7]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getOehdnbr()) && (null === $this->getOedtline()) && (null === $this->getInititemnbr()) && (null === $this->getOesdtag()) && (null === $this->getOesdlotser()) && (null === $this->getOesdbin()) && (null === $this->getOesdplltnbr()) && (null === $this->getOesdcrtnnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SalesOrderLotserial (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOehdnbr($this->getOehdnbr());
        $copyObj->setOedtline($this->getOedtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setOesdtag($this->getOesdtag());
        $copyObj->setOesdlotser($this->getOesdlotser());
        $copyObj->setOesdbin($this->getOesdbin());
        $copyObj->setOesdplltnbr($this->getOesdplltnbr());
        $copyObj->setOesdcrtnnbr($this->getOesdcrtnnbr());
        $copyObj->setOesdqtyship($this->getOesdqtyship());
        $copyObj->setOesdcntrqty($this->getOesdcntrqty());
        $copyObj->setOesdspecordr($this->getOesdspecordr());
        $copyObj->setOesdlotref($this->getOesdlotref());
        $copyObj->setOesdbatch($this->getOesdbatch());
        $copyObj->setOesdcuredate($this->getOesdcuredate());
        $copyObj->setOesdacstatus($this->getOesdacstatus());
        $copyObj->setOesdtestlot($this->getOesdtestlot());
        $copyObj->setOesdpllttype($this->getOesdpllttype());
        $copyObj->setOesdtarewght($this->getOesdtarewght());
        $copyObj->setOesduseup($this->getOesduseup());
        $copyObj->setOesdlblprtd($this->getOesdlblprtd());
        $copyObj->setOesdorigbin($this->getOesdorigbin());
        $copyObj->setOesdactvdate($this->getOesdactvdate());
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
     * @return \SalesOrderLotserial Clone of current object.
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
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
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
            $v->addSalesOrderLotserial($this);
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
                $this->aSalesOrder->addSalesOrderLotserials($this);
             */
        }

        return $this->aSalesOrder;
    }

    /**
     * Declares an association between this object and a ChildSalesOrderDetail object.
     *
     * @param  ChildSalesOrderDetail $v
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
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
            $v->addSalesOrderLotserial($this);
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
                $this->aSalesOrderDetail->addSalesOrderLotserials($this);
             */
        }

        return $this->aSalesOrderDetail;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\SalesOrderLotserial The current object (for fluent API support)
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
            $v->addSalesOrderLotserial($this);
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
                $this->aItemMasterItem->addSalesOrderLotserials($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSalesOrder) {
            $this->aSalesOrder->removeSalesOrderLotserial($this);
        }
        if (null !== $this->aSalesOrderDetail) {
            $this->aSalesOrderDetail->removeSalesOrderLotserial($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeSalesOrderLotserial($this);
        }
        $this->oehdnbr = null;
        $this->oedtline = null;
        $this->inititemnbr = null;
        $this->oesdtag = null;
        $this->oesdlotser = null;
        $this->oesdbin = null;
        $this->oesdplltnbr = null;
        $this->oesdcrtnnbr = null;
        $this->oesdqtyship = null;
        $this->oesdcntrqty = null;
        $this->oesdspecordr = null;
        $this->oesdlotref = null;
        $this->oesdbatch = null;
        $this->oesdcuredate = null;
        $this->oesdacstatus = null;
        $this->oesdtestlot = null;
        $this->oesdpllttype = null;
        $this->oesdtarewght = null;
        $this->oesduseup = null;
        $this->oesdlblprtd = null;
        $this->oesdorigbin = null;
        $this->oesdactvdate = null;
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
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SalesOrderLotserialTableMap::DEFAULT_STRING_FORMAT);
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
