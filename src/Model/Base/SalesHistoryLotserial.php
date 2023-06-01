<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \SalesHistory as ChildSalesHistory;
use \SalesHistoryDetail as ChildSalesHistoryDetail;
use \SalesHistoryDetailQuery as ChildSalesHistoryDetailQuery;
use \SalesHistoryLotserialQuery as ChildSalesHistoryLotserialQuery;
use \SalesHistoryQuery as ChildSalesHistoryQuery;
use \Exception;
use \PDO;
use Map\SalesHistoryLotserialTableMap;
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
 * Base class that represents a row from the 'so_lot_ser_hist' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SalesHistoryLotserial implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SalesHistoryLotserialTableMap';


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
     * The value for the oehhnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehhnbr;

    /**
     * The value for the oedhline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhline;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the oeshtag field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshtag;

    /**
     * The value for the oeshlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshlotser;

    /**
     * The value for the oeshbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshbin;

    /**
     * The value for the oeshplltnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oeshplltnbr;

    /**
     * The value for the oeshcrtnnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oeshcrtnnbr;

    /**
     * The value for the oeshyear field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshyear;

    /**
     * The value for the oeshqtyship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oeshqtyship;

    /**
     * The value for the oeshcntrqty field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $oeshcntrqty;

    /**
     * The value for the oeshspecordr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshspecordr;

    /**
     * The value for the oeshlotref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshlotref;

    /**
     * The value for the oeshbatch field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshbatch;

    /**
     * The value for the oeshcuredate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshcuredate;

    /**
     * The value for the oeshacstatus field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshacstatus;

    /**
     * The value for the oeshtestlot field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshtestlot;

    /**
     * The value for the oeshpllttype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshpllttype;

    /**
     * The value for the oeshtarewght field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oeshtarewght;

    /**
     * The value for the oeshuseup field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshuseup;

    /**
     * The value for the oeshlblprtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshlblprtd;

    /**
     * The value for the oeshorigbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshorigbin;

    /**
     * The value for the oeshactvdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshactvdate;

    /**
     * The value for the oeshplltid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oeshplltid;

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
     * @var        ChildSalesHistory
     */
    protected $aSalesHistory;

    /**
     * @var        ChildSalesHistoryDetail
     */
    protected $aSalesHistoryDetail;

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
        $this->oehhnbr = 0;
        $this->oedhline = 0;
        $this->inititemnbr = '';
        $this->oeshtag = '';
        $this->oeshlotser = '';
        $this->oeshbin = '';
        $this->oeshplltnbr = 0;
        $this->oeshcrtnnbr = 0;
        $this->oeshyear = '';
        $this->oeshqtyship = '0.0000000';
        $this->oeshcntrqty = '0';
        $this->oeshspecordr = '';
        $this->oeshlotref = '';
        $this->oeshbatch = '';
        $this->oeshcuredate = '';
        $this->oeshacstatus = '';
        $this->oeshtestlot = '';
        $this->oeshpllttype = '';
        $this->oeshtarewght = '0.000';
        $this->oeshuseup = '';
        $this->oeshlblprtd = '';
        $this->oeshorigbin = '';
        $this->oeshactvdate = '';
        $this->oeshplltid = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\SalesHistoryLotserial object.
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
     * Compares this with another <code>SalesHistoryLotserial</code> instance.  If
     * <code>obj</code> is an instance of <code>SalesHistoryLotserial</code>, delegates to
     * <code>equals(SalesHistoryLotserial)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SalesHistoryLotserial The current object, for fluid interface
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
     * Get the [oehhnbr] column value.
     *
     * @return int
     */
    public function getOehhnbr()
    {
        return $this->oehhnbr;
    }

    /**
     * Get the [oedhline] column value.
     *
     * @return int
     */
    public function getOedhline()
    {
        return $this->oedhline;
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
     * Get the [oeshtag] column value.
     *
     * @return string
     */
    public function getOeshtag()
    {
        return $this->oeshtag;
    }

    /**
     * Get the [oeshlotser] column value.
     *
     * @return string
     */
    public function getOeshlotser()
    {
        return $this->oeshlotser;
    }

    /**
     * Get the [oeshbin] column value.
     *
     * @return string
     */
    public function getOeshbin()
    {
        return $this->oeshbin;
    }

    /**
     * Get the [oeshplltnbr] column value.
     *
     * @return int
     */
    public function getOeshplltnbr()
    {
        return $this->oeshplltnbr;
    }

    /**
     * Get the [oeshcrtnnbr] column value.
     *
     * @return int
     */
    public function getOeshcrtnnbr()
    {
        return $this->oeshcrtnnbr;
    }

    /**
     * Get the [oeshyear] column value.
     *
     * @return string
     */
    public function getOeshyear()
    {
        return $this->oeshyear;
    }

    /**
     * Get the [oeshqtyship] column value.
     *
     * @return string
     */
    public function getOeshqtyship()
    {
        return $this->oeshqtyship;
    }

    /**
     * Get the [oeshcntrqty] column value.
     *
     * @return string
     */
    public function getOeshcntrqty()
    {
        return $this->oeshcntrqty;
    }

    /**
     * Get the [oeshspecordr] column value.
     *
     * @return string
     */
    public function getOeshspecordr()
    {
        return $this->oeshspecordr;
    }

    /**
     * Get the [oeshlotref] column value.
     *
     * @return string
     */
    public function getOeshlotref()
    {
        return $this->oeshlotref;
    }

    /**
     * Get the [oeshbatch] column value.
     *
     * @return string
     */
    public function getOeshbatch()
    {
        return $this->oeshbatch;
    }

    /**
     * Get the [oeshcuredate] column value.
     *
     * @return string
     */
    public function getOeshcuredate()
    {
        return $this->oeshcuredate;
    }

    /**
     * Get the [oeshacstatus] column value.
     *
     * @return string
     */
    public function getOeshacstatus()
    {
        return $this->oeshacstatus;
    }

    /**
     * Get the [oeshtestlot] column value.
     *
     * @return string
     */
    public function getOeshtestlot()
    {
        return $this->oeshtestlot;
    }

    /**
     * Get the [oeshpllttype] column value.
     *
     * @return string
     */
    public function getOeshpllttype()
    {
        return $this->oeshpllttype;
    }

    /**
     * Get the [oeshtarewght] column value.
     *
     * @return string
     */
    public function getOeshtarewght()
    {
        return $this->oeshtarewght;
    }

    /**
     * Get the [oeshuseup] column value.
     *
     * @return string
     */
    public function getOeshuseup()
    {
        return $this->oeshuseup;
    }

    /**
     * Get the [oeshlblprtd] column value.
     *
     * @return string
     */
    public function getOeshlblprtd()
    {
        return $this->oeshlblprtd;
    }

    /**
     * Get the [oeshorigbin] column value.
     *
     * @return string
     */
    public function getOeshorigbin()
    {
        return $this->oeshorigbin;
    }

    /**
     * Get the [oeshactvdate] column value.
     *
     * @return string
     */
    public function getOeshactvdate()
    {
        return $this->oeshactvdate;
    }

    /**
     * Get the [oeshplltid] column value.
     *
     * @return string
     */
    public function getOeshplltid()
    {
        return $this->oeshplltid;
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
     * Set the value of [oehhnbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOehhnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehhnbr !== $v) {
            $this->oehhnbr = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OEHHNBR] = true;
        }

        if ($this->aSalesHistory !== null && $this->aSalesHistory->getOehhnbr() !== $v) {
            $this->aSalesHistory = null;
        }

        if ($this->aSalesHistoryDetail !== null && $this->aSalesHistoryDetail->getOehhnbr() !== $v) {
            $this->aSalesHistoryDetail = null;
        }

        return $this;
    } // setOehhnbr()

    /**
     * Set the value of [oedhline] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOedhline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhline !== $v) {
            $this->oedhline = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OEDHLINE] = true;
        }

        if ($this->aSalesHistoryDetail !== null && $this->aSalesHistoryDetail->getOedhline() !== $v) {
            $this->aSalesHistoryDetail = null;
        }

        return $this;
    } // setOedhline()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [oeshtag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshtag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshtag !== $v) {
            $this->oeshtag = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHTAG] = true;
        }

        return $this;
    } // setOeshtag()

    /**
     * Set the value of [oeshlotser] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshlotser !== $v) {
            $this->oeshlotser = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHLOTSER] = true;
        }

        return $this;
    } // setOeshlotser()

    /**
     * Set the value of [oeshbin] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshbin !== $v) {
            $this->oeshbin = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHBIN] = true;
        }

        return $this;
    } // setOeshbin()

    /**
     * Set the value of [oeshplltnbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshplltnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oeshplltnbr !== $v) {
            $this->oeshplltnbr = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHPLLTNBR] = true;
        }

        return $this;
    } // setOeshplltnbr()

    /**
     * Set the value of [oeshcrtnnbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshcrtnnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oeshcrtnnbr !== $v) {
            $this->oeshcrtnnbr = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHCRTNNBR] = true;
        }

        return $this;
    } // setOeshcrtnnbr()

    /**
     * Set the value of [oeshyear] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshyear($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshyear !== $v) {
            $this->oeshyear = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHYEAR] = true;
        }

        return $this;
    } // setOeshyear()

    /**
     * Set the value of [oeshqtyship] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshqtyship !== $v) {
            $this->oeshqtyship = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHQTYSHIP] = true;
        }

        return $this;
    } // setOeshqtyship()

    /**
     * Set the value of [oeshcntrqty] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshcntrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshcntrqty !== $v) {
            $this->oeshcntrqty = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHCNTRQTY] = true;
        }

        return $this;
    } // setOeshcntrqty()

    /**
     * Set the value of [oeshspecordr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshspecordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshspecordr !== $v) {
            $this->oeshspecordr = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHSPECORDR] = true;
        }

        return $this;
    } // setOeshspecordr()

    /**
     * Set the value of [oeshlotref] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshlotref !== $v) {
            $this->oeshlotref = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHLOTREF] = true;
        }

        return $this;
    } // setOeshlotref()

    /**
     * Set the value of [oeshbatch] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshbatch !== $v) {
            $this->oeshbatch = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHBATCH] = true;
        }

        return $this;
    } // setOeshbatch()

    /**
     * Set the value of [oeshcuredate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshcuredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshcuredate !== $v) {
            $this->oeshcuredate = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHCUREDATE] = true;
        }

        return $this;
    } // setOeshcuredate()

    /**
     * Set the value of [oeshacstatus] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshacstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshacstatus !== $v) {
            $this->oeshacstatus = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHACSTATUS] = true;
        }

        return $this;
    } // setOeshacstatus()

    /**
     * Set the value of [oeshtestlot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshtestlot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshtestlot !== $v) {
            $this->oeshtestlot = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHTESTLOT] = true;
        }

        return $this;
    } // setOeshtestlot()

    /**
     * Set the value of [oeshpllttype] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshpllttype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshpllttype !== $v) {
            $this->oeshpllttype = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHPLLTTYPE] = true;
        }

        return $this;
    } // setOeshpllttype()

    /**
     * Set the value of [oeshtarewght] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshtarewght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshtarewght !== $v) {
            $this->oeshtarewght = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHTAREWGHT] = true;
        }

        return $this;
    } // setOeshtarewght()

    /**
     * Set the value of [oeshuseup] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshuseup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshuseup !== $v) {
            $this->oeshuseup = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHUSEUP] = true;
        }

        return $this;
    } // setOeshuseup()

    /**
     * Set the value of [oeshlblprtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshlblprtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshlblprtd !== $v) {
            $this->oeshlblprtd = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHLBLPRTD] = true;
        }

        return $this;
    } // setOeshlblprtd()

    /**
     * Set the value of [oeshorigbin] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshorigbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshorigbin !== $v) {
            $this->oeshorigbin = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHORIGBIN] = true;
        }

        return $this;
    } // setOeshorigbin()

    /**
     * Set the value of [oeshactvdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshactvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshactvdate !== $v) {
            $this->oeshactvdate = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHACTVDATE] = true;
        }

        return $this;
    } // setOeshactvdate()

    /**
     * Set the value of [oeshplltid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setOeshplltid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oeshplltid !== $v) {
            $this->oeshplltid = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_OESHPLLTID] = true;
        }

        return $this;
    } // setOeshplltid()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SalesHistoryLotserialTableMap::COL_DUMMY] = true;
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
            if ($this->oehhnbr !== 0) {
                return false;
            }

            if ($this->oedhline !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->oeshtag !== '') {
                return false;
            }

            if ($this->oeshlotser !== '') {
                return false;
            }

            if ($this->oeshbin !== '') {
                return false;
            }

            if ($this->oeshplltnbr !== 0) {
                return false;
            }

            if ($this->oeshcrtnnbr !== 0) {
                return false;
            }

            if ($this->oeshyear !== '') {
                return false;
            }

            if ($this->oeshqtyship !== '0.0000000') {
                return false;
            }

            if ($this->oeshcntrqty !== '0') {
                return false;
            }

            if ($this->oeshspecordr !== '') {
                return false;
            }

            if ($this->oeshlotref !== '') {
                return false;
            }

            if ($this->oeshbatch !== '') {
                return false;
            }

            if ($this->oeshcuredate !== '') {
                return false;
            }

            if ($this->oeshacstatus !== '') {
                return false;
            }

            if ($this->oeshtestlot !== '') {
                return false;
            }

            if ($this->oeshpllttype !== '') {
                return false;
            }

            if ($this->oeshtarewght !== '0.000') {
                return false;
            }

            if ($this->oeshuseup !== '') {
                return false;
            }

            if ($this->oeshlblprtd !== '') {
                return false;
            }

            if ($this->oeshorigbin !== '') {
                return false;
            }

            if ($this->oeshactvdate !== '') {
                return false;
            }

            if ($this->oeshplltid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshtag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshtag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshplltnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshplltnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshcrtnnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshyear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshyear = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshcntrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshspecordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshspecordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshcuredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshcuredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshacstatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshacstatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshtestlot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshtestlot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshpllttype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshpllttype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshtarewght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshtarewght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshuseup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshuseup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshlblprtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshlblprtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshorigbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshorigbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshactvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshactvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Oeshplltid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oeshplltid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : SalesHistoryLotserialTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 27; // 27 = SalesHistoryLotserialTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SalesHistoryLotserial'), 0, $e);
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
        if ($this->aSalesHistory !== null && $this->oehhnbr !== $this->aSalesHistory->getOehhnbr()) {
            $this->aSalesHistory = null;
        }
        if ($this->aSalesHistoryDetail !== null && $this->oehhnbr !== $this->aSalesHistoryDetail->getOehhnbr()) {
            $this->aSalesHistoryDetail = null;
        }
        if ($this->aSalesHistoryDetail !== null && $this->oedhline !== $this->aSalesHistoryDetail->getOedhline()) {
            $this->aSalesHistoryDetail = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SalesHistoryLotserialTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSalesHistoryLotserialQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSalesHistory = null;
            $this->aSalesHistoryDetail = null;
            $this->aItemMasterItem = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SalesHistoryLotserial::setDeleted()
     * @see SalesHistoryLotserial::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryLotserialTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSalesHistoryLotserialQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryLotserialTableMap::DATABASE_NAME);
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
                SalesHistoryLotserialTableMap::addInstanceToPool($this);
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

            if ($this->aSalesHistory !== null) {
                if ($this->aSalesHistory->isModified() || $this->aSalesHistory->isNew()) {
                    $affectedRows += $this->aSalesHistory->save($con);
                }
                $this->setSalesHistory($this->aSalesHistory);
            }

            if ($this->aSalesHistoryDetail !== null) {
                if ($this->aSalesHistoryDetail->isModified() || $this->aSalesHistoryDetail->isNew()) {
                    $affectedRows += $this->aSalesHistoryDetail->save($con);
                }
                $this->setSalesHistoryDetail($this->aSalesHistoryDetail);
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
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OEHHNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhNbr';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OEDHLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLine';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHTAG)) {
            $modifiedColumns[':p' . $index++]  = 'OeshTag';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'OeshLotSer';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OeshBin';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OeshPlltNbr';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OeshCrtnNbr';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHYEAR)) {
            $modifiedColumns[':p' . $index++]  = 'OeshYear';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OeshQtyShip';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OeshCntrQty';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHSPECORDR)) {
            $modifiedColumns[':p' . $index++]  = 'OeshSpecOrdr';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'OeshLotRef';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'OeshBatch';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHCUREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OeshCureDate';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHACSTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'OeshAcStatus';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHTESTLOT)) {
            $modifiedColumns[':p' . $index++]  = 'OeshTestLot';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHPLLTTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OeshPlltType';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHTAREWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'OeshTareWght';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHUSEUP)) {
            $modifiedColumns[':p' . $index++]  = 'OeshUseUp';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHLBLPRTD)) {
            $modifiedColumns[':p' . $index++]  = 'OeshLblPrtd';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHORIGBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OeshOrigBin';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHACTVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OeshActvDate';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHPLLTID)) {
            $modifiedColumns[':p' . $index++]  = 'OeshPlltID';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_lot_ser_hist (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OehhNbr':
                        $stmt->bindValue($identifier, $this->oehhnbr, PDO::PARAM_INT);
                        break;
                    case 'OedhLine':
                        $stmt->bindValue($identifier, $this->oedhline, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'OeshTag':
                        $stmt->bindValue($identifier, $this->oeshtag, PDO::PARAM_STR);
                        break;
                    case 'OeshLotSer':
                        $stmt->bindValue($identifier, $this->oeshlotser, PDO::PARAM_STR);
                        break;
                    case 'OeshBin':
                        $stmt->bindValue($identifier, $this->oeshbin, PDO::PARAM_STR);
                        break;
                    case 'OeshPlltNbr':
                        $stmt->bindValue($identifier, $this->oeshplltnbr, PDO::PARAM_INT);
                        break;
                    case 'OeshCrtnNbr':
                        $stmt->bindValue($identifier, $this->oeshcrtnnbr, PDO::PARAM_INT);
                        break;
                    case 'OeshYear':
                        $stmt->bindValue($identifier, $this->oeshyear, PDO::PARAM_STR);
                        break;
                    case 'OeshQtyShip':
                        $stmt->bindValue($identifier, $this->oeshqtyship, PDO::PARAM_STR);
                        break;
                    case 'OeshCntrQty':
                        $stmt->bindValue($identifier, $this->oeshcntrqty, PDO::PARAM_STR);
                        break;
                    case 'OeshSpecOrdr':
                        $stmt->bindValue($identifier, $this->oeshspecordr, PDO::PARAM_STR);
                        break;
                    case 'OeshLotRef':
                        $stmt->bindValue($identifier, $this->oeshlotref, PDO::PARAM_STR);
                        break;
                    case 'OeshBatch':
                        $stmt->bindValue($identifier, $this->oeshbatch, PDO::PARAM_STR);
                        break;
                    case 'OeshCureDate':
                        $stmt->bindValue($identifier, $this->oeshcuredate, PDO::PARAM_STR);
                        break;
                    case 'OeshAcStatus':
                        $stmt->bindValue($identifier, $this->oeshacstatus, PDO::PARAM_STR);
                        break;
                    case 'OeshTestLot':
                        $stmt->bindValue($identifier, $this->oeshtestlot, PDO::PARAM_STR);
                        break;
                    case 'OeshPlltType':
                        $stmt->bindValue($identifier, $this->oeshpllttype, PDO::PARAM_STR);
                        break;
                    case 'OeshTareWght':
                        $stmt->bindValue($identifier, $this->oeshtarewght, PDO::PARAM_STR);
                        break;
                    case 'OeshUseUp':
                        $stmt->bindValue($identifier, $this->oeshuseup, PDO::PARAM_STR);
                        break;
                    case 'OeshLblPrtd':
                        $stmt->bindValue($identifier, $this->oeshlblprtd, PDO::PARAM_STR);
                        break;
                    case 'OeshOrigBin':
                        $stmt->bindValue($identifier, $this->oeshorigbin, PDO::PARAM_STR);
                        break;
                    case 'OeshActvDate':
                        $stmt->bindValue($identifier, $this->oeshactvdate, PDO::PARAM_STR);
                        break;
                    case 'OeshPlltID':
                        $stmt->bindValue($identifier, $this->oeshplltid, PDO::PARAM_STR);
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
        $pos = SalesHistoryLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOehhnbr();
                break;
            case 1:
                return $this->getOedhline();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getOeshtag();
                break;
            case 4:
                return $this->getOeshlotser();
                break;
            case 5:
                return $this->getOeshbin();
                break;
            case 6:
                return $this->getOeshplltnbr();
                break;
            case 7:
                return $this->getOeshcrtnnbr();
                break;
            case 8:
                return $this->getOeshyear();
                break;
            case 9:
                return $this->getOeshqtyship();
                break;
            case 10:
                return $this->getOeshcntrqty();
                break;
            case 11:
                return $this->getOeshspecordr();
                break;
            case 12:
                return $this->getOeshlotref();
                break;
            case 13:
                return $this->getOeshbatch();
                break;
            case 14:
                return $this->getOeshcuredate();
                break;
            case 15:
                return $this->getOeshacstatus();
                break;
            case 16:
                return $this->getOeshtestlot();
                break;
            case 17:
                return $this->getOeshpllttype();
                break;
            case 18:
                return $this->getOeshtarewght();
                break;
            case 19:
                return $this->getOeshuseup();
                break;
            case 20:
                return $this->getOeshlblprtd();
                break;
            case 21:
                return $this->getOeshorigbin();
                break;
            case 22:
                return $this->getOeshactvdate();
                break;
            case 23:
                return $this->getOeshplltid();
                break;
            case 24:
                return $this->getDateupdtd();
                break;
            case 25:
                return $this->getTimeupdtd();
                break;
            case 26:
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

        if (isset($alreadyDumpedObjects['SalesHistoryLotserial'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesHistoryLotserial'][$this->hashCode()] = true;
        $keys = SalesHistoryLotserialTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOehhnbr(),
            $keys[1] => $this->getOedhline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getOeshtag(),
            $keys[4] => $this->getOeshlotser(),
            $keys[5] => $this->getOeshbin(),
            $keys[6] => $this->getOeshplltnbr(),
            $keys[7] => $this->getOeshcrtnnbr(),
            $keys[8] => $this->getOeshyear(),
            $keys[9] => $this->getOeshqtyship(),
            $keys[10] => $this->getOeshcntrqty(),
            $keys[11] => $this->getOeshspecordr(),
            $keys[12] => $this->getOeshlotref(),
            $keys[13] => $this->getOeshbatch(),
            $keys[14] => $this->getOeshcuredate(),
            $keys[15] => $this->getOeshacstatus(),
            $keys[16] => $this->getOeshtestlot(),
            $keys[17] => $this->getOeshpllttype(),
            $keys[18] => $this->getOeshtarewght(),
            $keys[19] => $this->getOeshuseup(),
            $keys[20] => $this->getOeshlblprtd(),
            $keys[21] => $this->getOeshorigbin(),
            $keys[22] => $this->getOeshactvdate(),
            $keys[23] => $this->getOeshplltid(),
            $keys[24] => $this->getDateupdtd(),
            $keys[25] => $this->getTimeupdtd(),
            $keys[26] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSalesHistory) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesHistory';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_head_hist';
                        break;
                    default:
                        $key = 'SalesHistory';
                }

                $result[$key] = $this->aSalesHistory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSalesHistoryDetail) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesHistoryDetail';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_det_hist';
                        break;
                    default:
                        $key = 'SalesHistoryDetail';
                }

                $result[$key] = $this->aSalesHistoryDetail->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\SalesHistoryLotserial
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SalesHistoryLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SalesHistoryLotserial
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOehhnbr($value);
                break;
            case 1:
                $this->setOedhline($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setOeshtag($value);
                break;
            case 4:
                $this->setOeshlotser($value);
                break;
            case 5:
                $this->setOeshbin($value);
                break;
            case 6:
                $this->setOeshplltnbr($value);
                break;
            case 7:
                $this->setOeshcrtnnbr($value);
                break;
            case 8:
                $this->setOeshyear($value);
                break;
            case 9:
                $this->setOeshqtyship($value);
                break;
            case 10:
                $this->setOeshcntrqty($value);
                break;
            case 11:
                $this->setOeshspecordr($value);
                break;
            case 12:
                $this->setOeshlotref($value);
                break;
            case 13:
                $this->setOeshbatch($value);
                break;
            case 14:
                $this->setOeshcuredate($value);
                break;
            case 15:
                $this->setOeshacstatus($value);
                break;
            case 16:
                $this->setOeshtestlot($value);
                break;
            case 17:
                $this->setOeshpllttype($value);
                break;
            case 18:
                $this->setOeshtarewght($value);
                break;
            case 19:
                $this->setOeshuseup($value);
                break;
            case 20:
                $this->setOeshlblprtd($value);
                break;
            case 21:
                $this->setOeshorigbin($value);
                break;
            case 22:
                $this->setOeshactvdate($value);
                break;
            case 23:
                $this->setOeshplltid($value);
                break;
            case 24:
                $this->setDateupdtd($value);
                break;
            case 25:
                $this->setTimeupdtd($value);
                break;
            case 26:
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
        $keys = SalesHistoryLotserialTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOehhnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOedhline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOeshtag($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOeshlotser($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOeshbin($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOeshplltnbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOeshcrtnnbr($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOeshyear($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOeshqtyship($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOeshcntrqty($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOeshspecordr($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOeshlotref($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOeshbatch($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOeshcuredate($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOeshacstatus($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOeshtestlot($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOeshpllttype($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setOeshtarewght($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOeshuseup($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOeshlblprtd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOeshorigbin($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setOeshactvdate($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setOeshplltid($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setDateupdtd($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setTimeupdtd($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setDummy($arr[$keys[26]]);
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
     * @return $this|\SalesHistoryLotserial The current object, for fluid interface
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
        $criteria = new Criteria(SalesHistoryLotserialTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OEHHNBR)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OEHHNBR, $this->oehhnbr);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OEDHLINE)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OEDHLINE, $this->oedhline);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_INITITEMNBR)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHTAG)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHTAG, $this->oeshtag);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHLOTSER)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHLOTSER, $this->oeshlotser);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHBIN)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHBIN, $this->oeshbin);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, $this->oeshplltnbr);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, $this->oeshcrtnnbr);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHYEAR)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHYEAR, $this->oeshyear);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHQTYSHIP)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHQTYSHIP, $this->oeshqtyship);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHCNTRQTY)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHCNTRQTY, $this->oeshcntrqty);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHSPECORDR)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHSPECORDR, $this->oeshspecordr);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHLOTREF)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHLOTREF, $this->oeshlotref);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHBATCH)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHBATCH, $this->oeshbatch);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHCUREDATE)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHCUREDATE, $this->oeshcuredate);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHACSTATUS)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHACSTATUS, $this->oeshacstatus);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHTESTLOT)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHTESTLOT, $this->oeshtestlot);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHPLLTTYPE)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHPLLTTYPE, $this->oeshpllttype);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHTAREWGHT)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHTAREWGHT, $this->oeshtarewght);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHUSEUP)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHUSEUP, $this->oeshuseup);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHLBLPRTD)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHLBLPRTD, $this->oeshlblprtd);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHORIGBIN)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHORIGBIN, $this->oeshorigbin);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHACTVDATE)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHACTVDATE, $this->oeshactvdate);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_OESHPLLTID)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_OESHPLLTID, $this->oeshplltid);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_DATEUPDTD)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SalesHistoryLotserialTableMap::COL_DUMMY)) {
            $criteria->add(SalesHistoryLotserialTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSalesHistoryLotserialQuery::create();
        $criteria->add(SalesHistoryLotserialTableMap::COL_OEHHNBR, $this->oehhnbr);
        $criteria->add(SalesHistoryLotserialTableMap::COL_OEDHLINE, $this->oedhline);
        $criteria->add(SalesHistoryLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(SalesHistoryLotserialTableMap::COL_OESHTAG, $this->oeshtag);
        $criteria->add(SalesHistoryLotserialTableMap::COL_OESHLOTSER, $this->oeshlotser);
        $criteria->add(SalesHistoryLotserialTableMap::COL_OESHBIN, $this->oeshbin);
        $criteria->add(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, $this->oeshplltnbr);
        $criteria->add(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, $this->oeshcrtnnbr);

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
        $validPk = null !== $this->getOehhnbr() &&
            null !== $this->getOedhline() &&
            null !== $this->getInititemnbr() &&
            null !== $this->getOeshtag() &&
            null !== $this->getOeshlotser() &&
            null !== $this->getOeshbin() &&
            null !== $this->getOeshplltnbr() &&
            null !== $this->getOeshcrtnnbr();

        $validPrimaryKeyFKs = 4;
        $primaryKeyFKs = [];

        //relation saleshistory to table so_head_hist
        if ($this->aSalesHistory && $hash = spl_object_hash($this->aSalesHistory)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation saleshistorydetail to table so_det_hist
        if ($this->aSalesHistoryDetail && $hash = spl_object_hash($this->aSalesHistoryDetail)) {
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
        $pks[0] = $this->getOehhnbr();
        $pks[1] = $this->getOedhline();
        $pks[2] = $this->getInititemnbr();
        $pks[3] = $this->getOeshtag();
        $pks[4] = $this->getOeshlotser();
        $pks[5] = $this->getOeshbin();
        $pks[6] = $this->getOeshplltnbr();
        $pks[7] = $this->getOeshcrtnnbr();

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
        $this->setOehhnbr($keys[0]);
        $this->setOedhline($keys[1]);
        $this->setInititemnbr($keys[2]);
        $this->setOeshtag($keys[3]);
        $this->setOeshlotser($keys[4]);
        $this->setOeshbin($keys[5]);
        $this->setOeshplltnbr($keys[6]);
        $this->setOeshcrtnnbr($keys[7]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getOehhnbr()) && (null === $this->getOedhline()) && (null === $this->getInititemnbr()) && (null === $this->getOeshtag()) && (null === $this->getOeshlotser()) && (null === $this->getOeshbin()) && (null === $this->getOeshplltnbr()) && (null === $this->getOeshcrtnnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SalesHistoryLotserial (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOehhnbr($this->getOehhnbr());
        $copyObj->setOedhline($this->getOedhline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setOeshtag($this->getOeshtag());
        $copyObj->setOeshlotser($this->getOeshlotser());
        $copyObj->setOeshbin($this->getOeshbin());
        $copyObj->setOeshplltnbr($this->getOeshplltnbr());
        $copyObj->setOeshcrtnnbr($this->getOeshcrtnnbr());
        $copyObj->setOeshyear($this->getOeshyear());
        $copyObj->setOeshqtyship($this->getOeshqtyship());
        $copyObj->setOeshcntrqty($this->getOeshcntrqty());
        $copyObj->setOeshspecordr($this->getOeshspecordr());
        $copyObj->setOeshlotref($this->getOeshlotref());
        $copyObj->setOeshbatch($this->getOeshbatch());
        $copyObj->setOeshcuredate($this->getOeshcuredate());
        $copyObj->setOeshacstatus($this->getOeshacstatus());
        $copyObj->setOeshtestlot($this->getOeshtestlot());
        $copyObj->setOeshpllttype($this->getOeshpllttype());
        $copyObj->setOeshtarewght($this->getOeshtarewght());
        $copyObj->setOeshuseup($this->getOeshuseup());
        $copyObj->setOeshlblprtd($this->getOeshlblprtd());
        $copyObj->setOeshorigbin($this->getOeshorigbin());
        $copyObj->setOeshactvdate($this->getOeshactvdate());
        $copyObj->setOeshplltid($this->getOeshplltid());
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
     * @return \SalesHistoryLotserial Clone of current object.
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
     * Declares an association between this object and a ChildSalesHistory object.
     *
     * @param  ChildSalesHistory $v
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesHistory(ChildSalesHistory $v = null)
    {
        if ($v === null) {
            $this->setOehhnbr(0);
        } else {
            $this->setOehhnbr($v->getOehhnbr());
        }

        $this->aSalesHistory = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSalesHistory object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesHistoryLotserial($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSalesHistory object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSalesHistory The associated ChildSalesHistory object.
     * @throws PropelException
     */
    public function getSalesHistory(ConnectionInterface $con = null)
    {
        if ($this->aSalesHistory === null && ($this->oehhnbr != 0)) {
            $this->aSalesHistory = ChildSalesHistoryQuery::create()->findPk($this->oehhnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesHistory->addSalesHistoryLotserials($this);
             */
        }

        return $this->aSalesHistory;
    }

    /**
     * Declares an association between this object and a ChildSalesHistoryDetail object.
     *
     * @param  ChildSalesHistoryDetail $v
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesHistoryDetail(ChildSalesHistoryDetail $v = null)
    {
        if ($v === null) {
            $this->setOehhnbr(0);
        } else {
            $this->setOehhnbr($v->getOehhnbr());
        }

        if ($v === null) {
            $this->setOedhline(0);
        } else {
            $this->setOedhline($v->getOedhline());
        }

        $this->aSalesHistoryDetail = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSalesHistoryDetail object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesHistoryLotserial($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSalesHistoryDetail object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSalesHistoryDetail The associated ChildSalesHistoryDetail object.
     * @throws PropelException
     */
    public function getSalesHistoryDetail(ConnectionInterface $con = null)
    {
        if ($this->aSalesHistoryDetail === null && ($this->oehhnbr != 0 && $this->oedhline != 0)) {
            $this->aSalesHistoryDetail = ChildSalesHistoryDetailQuery::create()->findPk(array($this->oehhnbr, $this->oedhline), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesHistoryDetail->addSalesHistoryLotserials($this);
             */
        }

        return $this->aSalesHistoryDetail;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\SalesHistoryLotserial The current object (for fluent API support)
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
            $v->addSalesHistoryLotserial($this);
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
                $this->aItemMasterItem->addSalesHistoryLotserials($this);
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
        if (null !== $this->aSalesHistory) {
            $this->aSalesHistory->removeSalesHistoryLotserial($this);
        }
        if (null !== $this->aSalesHistoryDetail) {
            $this->aSalesHistoryDetail->removeSalesHistoryLotserial($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeSalesHistoryLotserial($this);
        }
        $this->oehhnbr = null;
        $this->oedhline = null;
        $this->inititemnbr = null;
        $this->oeshtag = null;
        $this->oeshlotser = null;
        $this->oeshbin = null;
        $this->oeshplltnbr = null;
        $this->oeshcrtnnbr = null;
        $this->oeshyear = null;
        $this->oeshqtyship = null;
        $this->oeshcntrqty = null;
        $this->oeshspecordr = null;
        $this->oeshlotref = null;
        $this->oeshbatch = null;
        $this->oeshcuredate = null;
        $this->oeshacstatus = null;
        $this->oeshtestlot = null;
        $this->oeshpllttype = null;
        $this->oeshtarewght = null;
        $this->oeshuseup = null;
        $this->oeshlblprtd = null;
        $this->oeshorigbin = null;
        $this->oeshactvdate = null;
        $this->oeshplltid = null;
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

        $this->aSalesHistory = null;
        $this->aSalesHistoryDetail = null;
        $this->aItemMasterItem = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SalesHistoryLotserialTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return // parent::preSave($con);
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
            return // parent::preInsert($con);
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
            return // parent::preUpdate($con);
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
            return // parent::preDelete($con);
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
