<?php

namespace Base;

use \BookingQuery as ChildBookingQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \SalesPerson as ChildSalesPerson;
use \SalesPersonQuery as ChildSalesPersonQuery;
use \Exception;
use \PDO;
use Map\BookingTableMap;
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
 * Base class that represents a row from the 'so_book_log_head' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Booking implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\BookingTableMap';


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
     * The value for the bklhordrbase field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $bklhordrbase;

    /**
     * The value for the bklhseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $bklhseq;

    /**
     * The value for the bklhordrnbr field.
     *
     * @var        string
     */
    protected $bklhordrnbr;

    /**
     * The value for the bklhtrandate field.
     *
     * @var        string
     */
    protected $bklhtrandate;

    /**
     * The value for the bklhtrantime field.
     *
     * @var        string
     */
    protected $bklhtrantime;

    /**
     * The value for the bklhlogin field.
     *
     * @var        string
     */
    protected $bklhlogin;

    /**
     * The value for the bklhordrdate field.
     *
     * @var        string
     */
    protected $bklhordrdate;

    /**
     * The value for the arcucustid field.
     *
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arstshipid field.
     *
     * @var        string
     */
    protected $arstshipid;

    /**
     * The value for the bklhshiptostat field.
     *
     * @var        string
     */
    protected $bklhshiptostat;

    /**
     * The value for the bklhorigwhse field.
     *
     * @var        string
     */
    protected $bklhorigwhse;

    /**
     * The value for the arspsaleper1 field.
     *
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the bklhsp1pct field.
     *
     * @var        string
     */
    protected $bklhsp1pct;

    /**
     * The value for the arspsaleper2 field.
     *
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the bklhsp2pct field.
     *
     * @var        string
     */
    protected $bklhsp2pct;

    /**
     * The value for the arspsaleper3 field.
     *
     * @var        string
     */
    protected $arspsaleper3;

    /**
     * The value for the bklhsp3pct field.
     *
     * @var        string
     */
    protected $bklhsp3pct;

    /**
     * The value for the artmtermcd field.
     *
     * @var        string
     */
    protected $artmtermcd;

    /**
     * The value for the bklhusercode1 field.
     *
     * @var        string
     */
    protected $bklhusercode1;

    /**
     * The value for the bklhusercode2 field.
     *
     * @var        string
     */
    protected $bklhusercode2;

    /**
     * The value for the bklhusercode3 field.
     *
     * @var        string
     */
    protected $bklhusercode3;

    /**
     * The value for the bkldusercode4 field.
     *
     * @var        string
     */
    protected $bkldusercode4;

    /**
     * The value for the bklhpgmref field.
     *
     * @var        string
     */
    protected $bklhpgmref;

    /**
     * The value for the bklhreascd field.
     *
     * @var        string
     */
    protected $bklhreascd;

    /**
     * The value for the bklhfrttot field.
     *
     * @var        string
     */
    protected $bklhfrttot;

    /**
     * The value for the bklhmisctot field.
     *
     * @var        string
     */
    protected $bklhmisctot;

    /**
     * The value for the bklhsviacode field.
     *
     * @var        string
     */
    protected $bklhsviacode;

    /**
     * The value for the bklhcreditmemo field.
     *
     * @var        string
     */
    protected $bklhcreditmemo;

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
     * @var        ChildSalesPerson
     */
    protected $aSalesPerson;

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
        $this->bklhordrbase = '';
        $this->bklhseq = 0;
    }

    /**
     * Initializes internal state of Base\Booking object.
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
     * Compares this with another <code>Booking</code> instance.  If
     * <code>obj</code> is an instance of <code>Booking</code>, delegates to
     * <code>equals(Booking)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Booking The current object, for fluid interface
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
     * Get the [bklhordrbase] column value.
     *
     * @return string
     */
    public function getBklhordrbase()
    {
        return $this->bklhordrbase;
    }

    /**
     * Get the [bklhseq] column value.
     *
     * @return int
     */
    public function getBklhseq()
    {
        return $this->bklhseq;
    }

    /**
     * Get the [bklhordrnbr] column value.
     *
     * @return string
     */
    public function getBklhordrnbr()
    {
        return $this->bklhordrnbr;
    }

    /**
     * Get the [bklhtrandate] column value.
     *
     * @return string
     */
    public function getBklhtrandate()
    {
        return $this->bklhtrandate;
    }

    /**
     * Get the [bklhtrantime] column value.
     *
     * @return string
     */
    public function getBklhtrantime()
    {
        return $this->bklhtrantime;
    }

    /**
     * Get the [bklhlogin] column value.
     *
     * @return string
     */
    public function getBklhlogin()
    {
        return $this->bklhlogin;
    }

    /**
     * Get the [bklhordrdate] column value.
     *
     * @return string
     */
    public function getBklhordrdate()
    {
        return $this->bklhordrdate;
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
     * Get the [bklhshiptostat] column value.
     *
     * @return string
     */
    public function getBklhshiptostat()
    {
        return $this->bklhshiptostat;
    }

    /**
     * Get the [bklhorigwhse] column value.
     *
     * @return string
     */
    public function getBklhorigwhse()
    {
        return $this->bklhorigwhse;
    }

    /**
     * Get the [arspsaleper1] column value.
     *
     * @return string
     */
    public function getArspsaleper1()
    {
        return $this->arspsaleper1;
    }

    /**
     * Get the [bklhsp1pct] column value.
     *
     * @return string
     */
    public function getBklhsp1pct()
    {
        return $this->bklhsp1pct;
    }

    /**
     * Get the [arspsaleper2] column value.
     *
     * @return string
     */
    public function getArspsaleper2()
    {
        return $this->arspsaleper2;
    }

    /**
     * Get the [bklhsp2pct] column value.
     *
     * @return string
     */
    public function getBklhsp2pct()
    {
        return $this->bklhsp2pct;
    }

    /**
     * Get the [arspsaleper3] column value.
     *
     * @return string
     */
    public function getArspsaleper3()
    {
        return $this->arspsaleper3;
    }

    /**
     * Get the [bklhsp3pct] column value.
     *
     * @return string
     */
    public function getBklhsp3pct()
    {
        return $this->bklhsp3pct;
    }

    /**
     * Get the [artmtermcd] column value.
     *
     * @return string
     */
    public function getArtmtermcd()
    {
        return $this->artmtermcd;
    }

    /**
     * Get the [bklhusercode1] column value.
     *
     * @return string
     */
    public function getBklhusercode1()
    {
        return $this->bklhusercode1;
    }

    /**
     * Get the [bklhusercode2] column value.
     *
     * @return string
     */
    public function getBklhusercode2()
    {
        return $this->bklhusercode2;
    }

    /**
     * Get the [bklhusercode3] column value.
     *
     * @return string
     */
    public function getBklhusercode3()
    {
        return $this->bklhusercode3;
    }

    /**
     * Get the [bkldusercode4] column value.
     *
     * @return string
     */
    public function getBkldusercode4()
    {
        return $this->bkldusercode4;
    }

    /**
     * Get the [bklhpgmref] column value.
     *
     * @return string
     */
    public function getBklhpgmref()
    {
        return $this->bklhpgmref;
    }

    /**
     * Get the [bklhreascd] column value.
     *
     * @return string
     */
    public function getBklhreascd()
    {
        return $this->bklhreascd;
    }

    /**
     * Get the [bklhfrttot] column value.
     *
     * @return string
     */
    public function getBklhfrttot()
    {
        return $this->bklhfrttot;
    }

    /**
     * Get the [bklhmisctot] column value.
     *
     * @return string
     */
    public function getBklhmisctot()
    {
        return $this->bklhmisctot;
    }

    /**
     * Get the [bklhsviacode] column value.
     *
     * @return string
     */
    public function getBklhsviacode()
    {
        return $this->bklhsviacode;
    }

    /**
     * Get the [bklhcreditmemo] column value.
     *
     * @return string
     */
    public function getBklhcreditmemo()
    {
        return $this->bklhcreditmemo;
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
     * Set the value of [bklhordrbase] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhordrbase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhordrbase !== $v) {
            $this->bklhordrbase = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHORDRBASE] = true;
        }

        return $this;
    } // setBklhordrbase()

    /**
     * Set the value of [bklhseq] column.
     *
     * @param int $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->bklhseq !== $v) {
            $this->bklhseq = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHSEQ] = true;
        }

        return $this;
    } // setBklhseq()

    /**
     * Set the value of [bklhordrnbr] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhordrnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhordrnbr !== $v) {
            $this->bklhordrnbr = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHORDRNBR] = true;
        }

        return $this;
    } // setBklhordrnbr()

    /**
     * Set the value of [bklhtrandate] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhtrandate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhtrandate !== $v) {
            $this->bklhtrandate = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHTRANDATE] = true;
        }

        return $this;
    } // setBklhtrandate()

    /**
     * Set the value of [bklhtrantime] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhtrantime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhtrantime !== $v) {
            $this->bklhtrantime = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHTRANTIME] = true;
        }

        return $this;
    } // setBklhtrantime()

    /**
     * Set the value of [bklhlogin] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhlogin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhlogin !== $v) {
            $this->bklhlogin = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHLOGIN] = true;
        }

        return $this;
    } // setBklhlogin()

    /**
     * Set the value of [bklhordrdate] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhordrdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhordrdate !== $v) {
            $this->bklhordrdate = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHORDRDATE] = true;
        }

        return $this;
    } // setBklhordrdate()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[BookingTableMap::COL_ARCUCUSTID] = true;
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
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[BookingTableMap::COL_ARSTSHIPID] = true;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArstshipid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [bklhshiptostat] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhshiptostat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhshiptostat !== $v) {
            $this->bklhshiptostat = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHSHIPTOSTAT] = true;
        }

        return $this;
    } // setBklhshiptostat()

    /**
     * Set the value of [bklhorigwhse] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhorigwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhorigwhse !== $v) {
            $this->bklhorigwhse = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHORIGWHSE] = true;
        }

        return $this;
    } // setBklhorigwhse()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[BookingTableMap::COL_ARSPSALEPER1] = true;
        }

        if ($this->aSalesPerson !== null && $this->aSalesPerson->getArspsaleper1() !== $v) {
            $this->aSalesPerson = null;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [bklhsp1pct] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhsp1pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhsp1pct !== $v) {
            $this->bklhsp1pct = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHSP1PCT] = true;
        }

        return $this;
    } // setBklhsp1pct()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[BookingTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [bklhsp2pct] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhsp2pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhsp2pct !== $v) {
            $this->bklhsp2pct = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHSP2PCT] = true;
        }

        return $this;
    } // setBklhsp2pct()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[BookingTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [bklhsp3pct] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhsp3pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhsp3pct !== $v) {
            $this->bklhsp3pct = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHSP3PCT] = true;
        }

        return $this;
    } // setBklhsp3pct()

    /**
     * Set the value of [artmtermcd] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setArtmtermcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermcd !== $v) {
            $this->artmtermcd = $v;
            $this->modifiedColumns[BookingTableMap::COL_ARTMTERMCD] = true;
        }

        return $this;
    } // setArtmtermcd()

    /**
     * Set the value of [bklhusercode1] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhusercode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhusercode1 !== $v) {
            $this->bklhusercode1 = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHUSERCODE1] = true;
        }

        return $this;
    } // setBklhusercode1()

    /**
     * Set the value of [bklhusercode2] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhusercode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhusercode2 !== $v) {
            $this->bklhusercode2 = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHUSERCODE2] = true;
        }

        return $this;
    } // setBklhusercode2()

    /**
     * Set the value of [bklhusercode3] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhusercode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhusercode3 !== $v) {
            $this->bklhusercode3 = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHUSERCODE3] = true;
        }

        return $this;
    } // setBklhusercode3()

    /**
     * Set the value of [bkldusercode4] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBkldusercode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkldusercode4 !== $v) {
            $this->bkldusercode4 = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLDUSERCODE4] = true;
        }

        return $this;
    } // setBkldusercode4()

    /**
     * Set the value of [bklhpgmref] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhpgmref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhpgmref !== $v) {
            $this->bklhpgmref = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHPGMREF] = true;
        }

        return $this;
    } // setBklhpgmref()

    /**
     * Set the value of [bklhreascd] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhreascd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhreascd !== $v) {
            $this->bklhreascd = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHREASCD] = true;
        }

        return $this;
    } // setBklhreascd()

    /**
     * Set the value of [bklhfrttot] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhfrttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhfrttot !== $v) {
            $this->bklhfrttot = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHFRTTOT] = true;
        }

        return $this;
    } // setBklhfrttot()

    /**
     * Set the value of [bklhmisctot] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhmisctot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhmisctot !== $v) {
            $this->bklhmisctot = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHMISCTOT] = true;
        }

        return $this;
    } // setBklhmisctot()

    /**
     * Set the value of [bklhsviacode] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhsviacode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhsviacode !== $v) {
            $this->bklhsviacode = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHSVIACODE] = true;
        }

        return $this;
    } // setBklhsviacode()

    /**
     * Set the value of [bklhcreditmemo] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setBklhcreditmemo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bklhcreditmemo !== $v) {
            $this->bklhcreditmemo = $v;
            $this->modifiedColumns[BookingTableMap::COL_BKLHCREDITMEMO] = true;
        }

        return $this;
    } // setBklhcreditmemo()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[BookingTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[BookingTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\Booking The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[BookingTableMap::COL_DUMMY] = true;
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
            if ($this->bklhordrbase !== '') {
                return false;
            }

            if ($this->bklhseq !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : BookingTableMap::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhordrbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : BookingTableMap::translateFieldName('Bklhseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : BookingTableMap::translateFieldName('Bklhordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhordrnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : BookingTableMap::translateFieldName('Bklhtrandate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhtrandate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : BookingTableMap::translateFieldName('Bklhtrantime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhtrantime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : BookingTableMap::translateFieldName('Bklhlogin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhlogin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : BookingTableMap::translateFieldName('Bklhordrdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhordrdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : BookingTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : BookingTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : BookingTableMap::translateFieldName('Bklhshiptostat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhshiptostat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : BookingTableMap::translateFieldName('Bklhorigwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhorigwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : BookingTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : BookingTableMap::translateFieldName('Bklhsp1pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhsp1pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : BookingTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : BookingTableMap::translateFieldName('Bklhsp2pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhsp2pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : BookingTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : BookingTableMap::translateFieldName('Bklhsp3pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhsp3pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : BookingTableMap::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : BookingTableMap::translateFieldName('Bklhusercode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhusercode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : BookingTableMap::translateFieldName('Bklhusercode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhusercode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : BookingTableMap::translateFieldName('Bklhusercode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhusercode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : BookingTableMap::translateFieldName('Bkldusercode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkldusercode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : BookingTableMap::translateFieldName('Bklhpgmref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhpgmref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : BookingTableMap::translateFieldName('Bklhreascd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhreascd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : BookingTableMap::translateFieldName('Bklhfrttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhfrttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : BookingTableMap::translateFieldName('Bklhmisctot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhmisctot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : BookingTableMap::translateFieldName('Bklhsviacode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhsviacode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : BookingTableMap::translateFieldName('Bklhcreditmemo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bklhcreditmemo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : BookingTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : BookingTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : BookingTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 31; // 31 = BookingTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Booking'), 0, $e);
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
        if ($this->aSalesPerson !== null && $this->arspsaleper1 !== $this->aSalesPerson->getArspsaleper1()) {
            $this->aSalesPerson = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(BookingTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildBookingQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->aCustomerShipto = null;
            $this->aSalesPerson = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Booking::setDeleted()
     * @see Booking::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildBookingQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingTableMap::DATABASE_NAME);
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
                BookingTableMap::addInstanceToPool($this);
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

            if ($this->aSalesPerson !== null) {
                if ($this->aSalesPerson->isModified() || $this->aSalesPerson->isNew()) {
                    $affectedRows += $this->aSalesPerson->save($con);
                }
                $this->setSalesPerson($this->aSalesPerson);
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
        if ($this->isColumnModified(BookingTableMap::COL_BKLHORDRBASE)) {
            $modifiedColumns[':p' . $index++]  = 'BklhOrdrBase';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'BklhSeq';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'BklhOrdrNbr';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHTRANDATE)) {
            $modifiedColumns[':p' . $index++]  = 'BklhTranDate';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHTRANTIME)) {
            $modifiedColumns[':p' . $index++]  = 'BklhTranTime';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHLOGIN)) {
            $modifiedColumns[':p' . $index++]  = 'BklhLogIn';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHORDRDATE)) {
            $modifiedColumns[':p' . $index++]  = 'BklhOrdrDate';
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSHIPTOSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'BklhShipToStat';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHORIGWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'BklhOrigWhse';
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSP1PCT)) {
            $modifiedColumns[':p' . $index++]  = 'BklhSp1Pct';
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSP2PCT)) {
            $modifiedColumns[':p' . $index++]  = 'BklhSp2Pct';
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer3';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSP3PCT)) {
            $modifiedColumns[':p' . $index++]  = 'BklhSp3Pct';
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARTMTERMCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermCd';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHUSERCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'BklhUserCode1';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHUSERCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'BklhUserCode2';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHUSERCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'BklhUserCode3';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLDUSERCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'BkldUserCode4';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHPGMREF)) {
            $modifiedColumns[':p' . $index++]  = 'BklhPgmRef';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHREASCD)) {
            $modifiedColumns[':p' . $index++]  = 'BklhReasCd';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHFRTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'BklhFrtTot';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHMISCTOT)) {
            $modifiedColumns[':p' . $index++]  = 'BklhMiscTot';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSVIACODE)) {
            $modifiedColumns[':p' . $index++]  = 'BklhSviaCode';
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHCREDITMEMO)) {
            $modifiedColumns[':p' . $index++]  = 'BklhCreditMemo';
        }
        if ($this->isColumnModified(BookingTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(BookingTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(BookingTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_book_log_head (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'BklhOrdrBase':
                        $stmt->bindValue($identifier, $this->bklhordrbase, PDO::PARAM_STR);
                        break;
                    case 'BklhSeq':
                        $stmt->bindValue($identifier, $this->bklhseq, PDO::PARAM_INT);
                        break;
                    case 'BklhOrdrNbr':
                        $stmt->bindValue($identifier, $this->bklhordrnbr, PDO::PARAM_STR);
                        break;
                    case 'BklhTranDate':
                        $stmt->bindValue($identifier, $this->bklhtrandate, PDO::PARAM_STR);
                        break;
                    case 'BklhTranTime':
                        $stmt->bindValue($identifier, $this->bklhtrantime, PDO::PARAM_STR);
                        break;
                    case 'BklhLogIn':
                        $stmt->bindValue($identifier, $this->bklhlogin, PDO::PARAM_STR);
                        break;
                    case 'BklhOrdrDate':
                        $stmt->bindValue($identifier, $this->bklhordrdate, PDO::PARAM_STR);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);
                        break;
                    case 'BklhShipToStat':
                        $stmt->bindValue($identifier, $this->bklhshiptostat, PDO::PARAM_STR);
                        break;
                    case 'BklhOrigWhse':
                        $stmt->bindValue($identifier, $this->bklhorigwhse, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'BklhSp1Pct':
                        $stmt->bindValue($identifier, $this->bklhsp1pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'BklhSp2Pct':
                        $stmt->bindValue($identifier, $this->bklhsp2pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'BklhSp3Pct':
                        $stmt->bindValue($identifier, $this->bklhsp3pct, PDO::PARAM_STR);
                        break;
                    case 'ArtmTermCd':
                        $stmt->bindValue($identifier, $this->artmtermcd, PDO::PARAM_STR);
                        break;
                    case 'BklhUserCode1':
                        $stmt->bindValue($identifier, $this->bklhusercode1, PDO::PARAM_STR);
                        break;
                    case 'BklhUserCode2':
                        $stmt->bindValue($identifier, $this->bklhusercode2, PDO::PARAM_STR);
                        break;
                    case 'BklhUserCode3':
                        $stmt->bindValue($identifier, $this->bklhusercode3, PDO::PARAM_STR);
                        break;
                    case 'BkldUserCode4':
                        $stmt->bindValue($identifier, $this->bkldusercode4, PDO::PARAM_STR);
                        break;
                    case 'BklhPgmRef':
                        $stmt->bindValue($identifier, $this->bklhpgmref, PDO::PARAM_STR);
                        break;
                    case 'BklhReasCd':
                        $stmt->bindValue($identifier, $this->bklhreascd, PDO::PARAM_STR);
                        break;
                    case 'BklhFrtTot':
                        $stmt->bindValue($identifier, $this->bklhfrttot, PDO::PARAM_STR);
                        break;
                    case 'BklhMiscTot':
                        $stmt->bindValue($identifier, $this->bklhmisctot, PDO::PARAM_STR);
                        break;
                    case 'BklhSviaCode':
                        $stmt->bindValue($identifier, $this->bklhsviacode, PDO::PARAM_STR);
                        break;
                    case 'BklhCreditMemo':
                        $stmt->bindValue($identifier, $this->bklhcreditmemo, PDO::PARAM_STR);
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
        $pos = BookingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getBklhordrbase();
                break;
            case 1:
                return $this->getBklhseq();
                break;
            case 2:
                return $this->getBklhordrnbr();
                break;
            case 3:
                return $this->getBklhtrandate();
                break;
            case 4:
                return $this->getBklhtrantime();
                break;
            case 5:
                return $this->getBklhlogin();
                break;
            case 6:
                return $this->getBklhordrdate();
                break;
            case 7:
                return $this->getArcucustid();
                break;
            case 8:
                return $this->getArstshipid();
                break;
            case 9:
                return $this->getBklhshiptostat();
                break;
            case 10:
                return $this->getBklhorigwhse();
                break;
            case 11:
                return $this->getArspsaleper1();
                break;
            case 12:
                return $this->getBklhsp1pct();
                break;
            case 13:
                return $this->getArspsaleper2();
                break;
            case 14:
                return $this->getBklhsp2pct();
                break;
            case 15:
                return $this->getArspsaleper3();
                break;
            case 16:
                return $this->getBklhsp3pct();
                break;
            case 17:
                return $this->getArtmtermcd();
                break;
            case 18:
                return $this->getBklhusercode1();
                break;
            case 19:
                return $this->getBklhusercode2();
                break;
            case 20:
                return $this->getBklhusercode3();
                break;
            case 21:
                return $this->getBkldusercode4();
                break;
            case 22:
                return $this->getBklhpgmref();
                break;
            case 23:
                return $this->getBklhreascd();
                break;
            case 24:
                return $this->getBklhfrttot();
                break;
            case 25:
                return $this->getBklhmisctot();
                break;
            case 26:
                return $this->getBklhsviacode();
                break;
            case 27:
                return $this->getBklhcreditmemo();
                break;
            case 28:
                return $this->getDateupdtd();
                break;
            case 29:
                return $this->getTimeupdtd();
                break;
            case 30:
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

        if (isset($alreadyDumpedObjects['Booking'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Booking'][$this->hashCode()] = true;
        $keys = BookingTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBklhordrbase(),
            $keys[1] => $this->getBklhseq(),
            $keys[2] => $this->getBklhordrnbr(),
            $keys[3] => $this->getBklhtrandate(),
            $keys[4] => $this->getBklhtrantime(),
            $keys[5] => $this->getBklhlogin(),
            $keys[6] => $this->getBklhordrdate(),
            $keys[7] => $this->getArcucustid(),
            $keys[8] => $this->getArstshipid(),
            $keys[9] => $this->getBklhshiptostat(),
            $keys[10] => $this->getBklhorigwhse(),
            $keys[11] => $this->getArspsaleper1(),
            $keys[12] => $this->getBklhsp1pct(),
            $keys[13] => $this->getArspsaleper2(),
            $keys[14] => $this->getBklhsp2pct(),
            $keys[15] => $this->getArspsaleper3(),
            $keys[16] => $this->getBklhsp3pct(),
            $keys[17] => $this->getArtmtermcd(),
            $keys[18] => $this->getBklhusercode1(),
            $keys[19] => $this->getBklhusercode2(),
            $keys[20] => $this->getBklhusercode3(),
            $keys[21] => $this->getBkldusercode4(),
            $keys[22] => $this->getBklhpgmref(),
            $keys[23] => $this->getBklhreascd(),
            $keys[24] => $this->getBklhfrttot(),
            $keys[25] => $this->getBklhmisctot(),
            $keys[26] => $this->getBklhsviacode(),
            $keys[27] => $this->getBklhcreditmemo(),
            $keys[28] => $this->getDateupdtd(),
            $keys[29] => $this->getTimeupdtd(),
            $keys[30] => $this->getDummy(),
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
            if (null !== $this->aSalesPerson) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesPerson';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_saleper1';
                        break;
                    default:
                        $key = 'SalesPerson';
                }

                $result[$key] = $this->aSalesPerson->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\Booking
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = BookingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Booking
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBklhordrbase($value);
                break;
            case 1:
                $this->setBklhseq($value);
                break;
            case 2:
                $this->setBklhordrnbr($value);
                break;
            case 3:
                $this->setBklhtrandate($value);
                break;
            case 4:
                $this->setBklhtrantime($value);
                break;
            case 5:
                $this->setBklhlogin($value);
                break;
            case 6:
                $this->setBklhordrdate($value);
                break;
            case 7:
                $this->setArcucustid($value);
                break;
            case 8:
                $this->setArstshipid($value);
                break;
            case 9:
                $this->setBklhshiptostat($value);
                break;
            case 10:
                $this->setBklhorigwhse($value);
                break;
            case 11:
                $this->setArspsaleper1($value);
                break;
            case 12:
                $this->setBklhsp1pct($value);
                break;
            case 13:
                $this->setArspsaleper2($value);
                break;
            case 14:
                $this->setBklhsp2pct($value);
                break;
            case 15:
                $this->setArspsaleper3($value);
                break;
            case 16:
                $this->setBklhsp3pct($value);
                break;
            case 17:
                $this->setArtmtermcd($value);
                break;
            case 18:
                $this->setBklhusercode1($value);
                break;
            case 19:
                $this->setBklhusercode2($value);
                break;
            case 20:
                $this->setBklhusercode3($value);
                break;
            case 21:
                $this->setBkldusercode4($value);
                break;
            case 22:
                $this->setBklhpgmref($value);
                break;
            case 23:
                $this->setBklhreascd($value);
                break;
            case 24:
                $this->setBklhfrttot($value);
                break;
            case 25:
                $this->setBklhmisctot($value);
                break;
            case 26:
                $this->setBklhsviacode($value);
                break;
            case 27:
                $this->setBklhcreditmemo($value);
                break;
            case 28:
                $this->setDateupdtd($value);
                break;
            case 29:
                $this->setTimeupdtd($value);
                break;
            case 30:
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
        $keys = BookingTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setBklhordrbase($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setBklhseq($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setBklhordrnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setBklhtrandate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setBklhtrantime($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setBklhlogin($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setBklhordrdate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArcucustid($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArstshipid($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setBklhshiptostat($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setBklhorigwhse($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArspsaleper1($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setBklhsp1pct($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArspsaleper2($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setBklhsp2pct($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArspsaleper3($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setBklhsp3pct($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArtmtermcd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setBklhusercode1($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setBklhusercode2($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setBklhusercode3($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setBkldusercode4($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setBklhpgmref($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setBklhreascd($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setBklhfrttot($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setBklhmisctot($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setBklhsviacode($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setBklhcreditmemo($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setDateupdtd($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setTimeupdtd($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setDummy($arr[$keys[30]]);
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
     * @return $this|\Booking The current object, for fluid interface
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
        $criteria = new Criteria(BookingTableMap::DATABASE_NAME);

        if ($this->isColumnModified(BookingTableMap::COL_BKLHORDRBASE)) {
            $criteria->add(BookingTableMap::COL_BKLHORDRBASE, $this->bklhordrbase);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSEQ)) {
            $criteria->add(BookingTableMap::COL_BKLHSEQ, $this->bklhseq);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHORDRNBR)) {
            $criteria->add(BookingTableMap::COL_BKLHORDRNBR, $this->bklhordrnbr);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHTRANDATE)) {
            $criteria->add(BookingTableMap::COL_BKLHTRANDATE, $this->bklhtrandate);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHTRANTIME)) {
            $criteria->add(BookingTableMap::COL_BKLHTRANTIME, $this->bklhtrantime);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHLOGIN)) {
            $criteria->add(BookingTableMap::COL_BKLHLOGIN, $this->bklhlogin);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHORDRDATE)) {
            $criteria->add(BookingTableMap::COL_BKLHORDRDATE, $this->bklhordrdate);
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARCUCUSTID)) {
            $criteria->add(BookingTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARSTSHIPID)) {
            $criteria->add(BookingTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSHIPTOSTAT)) {
            $criteria->add(BookingTableMap::COL_BKLHSHIPTOSTAT, $this->bklhshiptostat);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHORIGWHSE)) {
            $criteria->add(BookingTableMap::COL_BKLHORIGWHSE, $this->bklhorigwhse);
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(BookingTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSP1PCT)) {
            $criteria->add(BookingTableMap::COL_BKLHSP1PCT, $this->bklhsp1pct);
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(BookingTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSP2PCT)) {
            $criteria->add(BookingTableMap::COL_BKLHSP2PCT, $this->bklhsp2pct);
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(BookingTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSP3PCT)) {
            $criteria->add(BookingTableMap::COL_BKLHSP3PCT, $this->bklhsp3pct);
        }
        if ($this->isColumnModified(BookingTableMap::COL_ARTMTERMCD)) {
            $criteria->add(BookingTableMap::COL_ARTMTERMCD, $this->artmtermcd);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHUSERCODE1)) {
            $criteria->add(BookingTableMap::COL_BKLHUSERCODE1, $this->bklhusercode1);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHUSERCODE2)) {
            $criteria->add(BookingTableMap::COL_BKLHUSERCODE2, $this->bklhusercode2);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHUSERCODE3)) {
            $criteria->add(BookingTableMap::COL_BKLHUSERCODE3, $this->bklhusercode3);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLDUSERCODE4)) {
            $criteria->add(BookingTableMap::COL_BKLDUSERCODE4, $this->bkldusercode4);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHPGMREF)) {
            $criteria->add(BookingTableMap::COL_BKLHPGMREF, $this->bklhpgmref);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHREASCD)) {
            $criteria->add(BookingTableMap::COL_BKLHREASCD, $this->bklhreascd);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHFRTTOT)) {
            $criteria->add(BookingTableMap::COL_BKLHFRTTOT, $this->bklhfrttot);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHMISCTOT)) {
            $criteria->add(BookingTableMap::COL_BKLHMISCTOT, $this->bklhmisctot);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHSVIACODE)) {
            $criteria->add(BookingTableMap::COL_BKLHSVIACODE, $this->bklhsviacode);
        }
        if ($this->isColumnModified(BookingTableMap::COL_BKLHCREDITMEMO)) {
            $criteria->add(BookingTableMap::COL_BKLHCREDITMEMO, $this->bklhcreditmemo);
        }
        if ($this->isColumnModified(BookingTableMap::COL_DATEUPDTD)) {
            $criteria->add(BookingTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(BookingTableMap::COL_TIMEUPDTD)) {
            $criteria->add(BookingTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(BookingTableMap::COL_DUMMY)) {
            $criteria->add(BookingTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildBookingQuery::create();
        $criteria->add(BookingTableMap::COL_BKLHORDRBASE, $this->bklhordrbase);
        $criteria->add(BookingTableMap::COL_BKLHSEQ, $this->bklhseq);

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
        $validPk = null !== $this->getBklhordrbase() &&
            null !== $this->getBklhseq();

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
        $pks[0] = $this->getBklhordrbase();
        $pks[1] = $this->getBklhseq();

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
        $this->setBklhordrbase($keys[0]);
        $this->setBklhseq($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getBklhordrbase()) && (null === $this->getBklhseq());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Booking (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBklhordrbase($this->getBklhordrbase());
        $copyObj->setBklhseq($this->getBklhseq());
        $copyObj->setBklhordrnbr($this->getBklhordrnbr());
        $copyObj->setBklhtrandate($this->getBklhtrandate());
        $copyObj->setBklhtrantime($this->getBklhtrantime());
        $copyObj->setBklhlogin($this->getBklhlogin());
        $copyObj->setBklhordrdate($this->getBklhordrdate());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setBklhshiptostat($this->getBklhshiptostat());
        $copyObj->setBklhorigwhse($this->getBklhorigwhse());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setBklhsp1pct($this->getBklhsp1pct());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setBklhsp2pct($this->getBklhsp2pct());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setBklhsp3pct($this->getBklhsp3pct());
        $copyObj->setArtmtermcd($this->getArtmtermcd());
        $copyObj->setBklhusercode1($this->getBklhusercode1());
        $copyObj->setBklhusercode2($this->getBklhusercode2());
        $copyObj->setBklhusercode3($this->getBklhusercode3());
        $copyObj->setBkldusercode4($this->getBkldusercode4());
        $copyObj->setBklhpgmref($this->getBklhpgmref());
        $copyObj->setBklhreascd($this->getBklhreascd());
        $copyObj->setBklhfrttot($this->getBklhfrttot());
        $copyObj->setBklhmisctot($this->getBklhmisctot());
        $copyObj->setBklhsviacode($this->getBklhsviacode());
        $copyObj->setBklhcreditmemo($this->getBklhcreditmemo());
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
     * @return \Booking Clone of current object.
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
     * @return $this|\Booking The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if ($v === null) {
            $this->setArcucustid(NULL);
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addBooking($this);
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
            $this->aCustomer = ChildCustomerQuery::create()
                ->filterByBooking($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addBookings($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a ChildCustomerShipto object.
     *
     * @param  ChildCustomerShipto $v
     * @return $this|\Booking The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomerShipto(ChildCustomerShipto $v = null)
    {
        if ($v === null) {
            $this->setArcucustid(NULL);
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        if ($v === null) {
            $this->setArstshipid(NULL);
        } else {
            $this->setArstshipid($v->getArstshipid());
        }

        $this->aCustomerShipto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomerShipto object, it will not be re-added.
        if ($v !== null) {
            $v->addBooking($this);
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
                $this->aCustomerShipto->addBookings($this);
             */
        }

        return $this->aCustomerShipto;
    }

    /**
     * Declares an association between this object and a ChildSalesPerson object.
     *
     * @param  ChildSalesPerson $v
     * @return $this|\Booking The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesPerson(ChildSalesPerson $v = null)
    {
        if ($v === null) {
            $this->setArspsaleper1(NULL);
        } else {
            $this->setArspsaleper1($v->getArspsaleper1());
        }

        $this->aSalesPerson = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSalesPerson object, it will not be re-added.
        if ($v !== null) {
            $v->addBooking($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSalesPerson object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSalesPerson The associated ChildSalesPerson object.
     * @throws PropelException
     */
    public function getSalesPerson(ConnectionInterface $con = null)
    {
        if ($this->aSalesPerson === null && (($this->arspsaleper1 !== "" && $this->arspsaleper1 !== null))) {
            $this->aSalesPerson = ChildSalesPersonQuery::create()->findPk($this->arspsaleper1, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesPerson->addBookings($this);
             */
        }

        return $this->aSalesPerson;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeBooking($this);
        }
        if (null !== $this->aCustomerShipto) {
            $this->aCustomerShipto->removeBooking($this);
        }
        if (null !== $this->aSalesPerson) {
            $this->aSalesPerson->removeBooking($this);
        }
        $this->bklhordrbase = null;
        $this->bklhseq = null;
        $this->bklhordrnbr = null;
        $this->bklhtrandate = null;
        $this->bklhtrantime = null;
        $this->bklhlogin = null;
        $this->bklhordrdate = null;
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->bklhshiptostat = null;
        $this->bklhorigwhse = null;
        $this->arspsaleper1 = null;
        $this->bklhsp1pct = null;
        $this->arspsaleper2 = null;
        $this->bklhsp2pct = null;
        $this->arspsaleper3 = null;
        $this->bklhsp3pct = null;
        $this->artmtermcd = null;
        $this->bklhusercode1 = null;
        $this->bklhusercode2 = null;
        $this->bklhusercode3 = null;
        $this->bkldusercode4 = null;
        $this->bklhpgmref = null;
        $this->bklhreascd = null;
        $this->bklhfrttot = null;
        $this->bklhmisctot = null;
        $this->bklhsviacode = null;
        $this->bklhcreditmemo = null;
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

        $this->aCustomer = null;
        $this->aCustomerShipto = null;
        $this->aSalesPerson = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BookingTableMap::DEFAULT_STRING_FORMAT);
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
