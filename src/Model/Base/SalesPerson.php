<?php

namespace Base;

use \Booking as ChildBooking;
use \BookingDayCustomer as ChildBookingDayCustomer;
use \BookingDayCustomerQuery as ChildBookingDayCustomerQuery;
use \BookingDayDetail as ChildBookingDayDetail;
use \BookingDayDetailQuery as ChildBookingDayDetailQuery;
use \BookingDayRep as ChildBookingDayRep;
use \BookingDayRepQuery as ChildBookingDayRepQuery;
use \BookingQuery as ChildBookingQuery;
use \BookingSummaryRep as ChildBookingSummaryRep;
use \BookingSummaryRepQuery as ChildBookingSummaryRepQuery;
use \SalesPerson as ChildSalesPerson;
use \SalesPersonQuery as ChildSalesPersonQuery;
use \Exception;
use \PDO;
use Map\BookingDayCustomerTableMap;
use Map\BookingDayDetailTableMap;
use Map\BookingDayRepTableMap;
use Map\BookingSummaryRepTableMap;
use Map\BookingTableMap;
use Map\SalesPersonTableMap;
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
 * Base class that represents a row from the 'ar_saleper1' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SalesPerson implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SalesPersonTableMap';


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
     * The value for the arspsaleper1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the arspname field.
     *
     * @var        string
     */
    protected $arspname;

    /**
     * The value for the arspmtdsale field.
     *
     * @var        string
     */
    protected $arspmtdsale;

    /**
     * The value for the arspytdsale field.
     *
     * @var        string
     */
    protected $arspytdsale;

    /**
     * The value for the arspltdsale field.
     *
     * @var        string
     */
    protected $arspltdsale;

    /**
     * The value for the arsplastsaledate field.
     *
     * @var        string
     */
    protected $arsplastsaledate;

    /**
     * The value for the arspmtdcommearn field.
     *
     * @var        string
     */
    protected $arspmtdcommearn;

    /**
     * The value for the arspytdcommearn field.
     *
     * @var        string
     */
    protected $arspytdcommearn;

    /**
     * The value for the arspltdcommearn field.
     *
     * @var        string
     */
    protected $arspltdcommearn;

    /**
     * The value for the arspmtdcommpaid field.
     *
     * @var        string
     */
    protected $arspmtdcommpaid;

    /**
     * The value for the arspytdcommpaid field.
     *
     * @var        string
     */
    protected $arspytdcommpaid;

    /**
     * The value for the arspltdcommpaid field.
     *
     * @var        string
     */
    protected $arspltdcommpaid;

    /**
     * The value for the arspcommcycle field.
     *
     * @var        string
     */
    protected $arspcommcycle;

    /**
     * The value for the arspgrup field.
     *
     * @var        string
     */
    protected $arspgrup;

    /**
     * The value for the arsplogin field.
     *
     * @var        string
     */
    protected $arsplogin;

    /**
     * The value for the arspmgr field.
     *
     * @var        string
     */
    protected $arspmgr;

    /**
     * The value for the arspvendid field.
     *
     * @var        string
     */
    protected $arspvendid;

    /**
     * The value for the arsprestrictaccess field.
     *
     * @var        string
     */
    protected $arsprestrictaccess;

    /**
     * The value for the arspemailaddr field.
     *
     * @var        string
     */
    protected $arspemailaddr;

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
     * @var        ObjectCollection|ChildBookingDayCustomer[] Collection to store aggregation of ChildBookingDayCustomer objects.
     */
    protected $collBookingDayCustomers;
    protected $collBookingDayCustomersPartial;

    /**
     * @var        ObjectCollection|ChildBookingDayDetail[] Collection to store aggregation of ChildBookingDayDetail objects.
     */
    protected $collBookingDayDetails;
    protected $collBookingDayDetailsPartial;

    /**
     * @var        ObjectCollection|ChildBookingDayRep[] Collection to store aggregation of ChildBookingDayRep objects.
     */
    protected $collBookingDayReps;
    protected $collBookingDayRepsPartial;

    /**
     * @var        ObjectCollection|ChildBookingSummaryRep[] Collection to store aggregation of ChildBookingSummaryRep objects.
     */
    protected $collBookingSummaryReps;
    protected $collBookingSummaryRepsPartial;

    /**
     * @var        ObjectCollection|ChildBooking[] Collection to store aggregation of ChildBooking objects.
     */
    protected $collBookings;
    protected $collBookingsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBookingDayCustomer[]
     */
    protected $bookingDayCustomersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBookingDayDetail[]
     */
    protected $bookingDayDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBookingDayRep[]
     */
    protected $bookingDayRepsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBookingSummaryRep[]
     */
    protected $bookingSummaryRepsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBooking[]
     */
    protected $bookingsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->arspsaleper1 = '';
    }

    /**
     * Initializes internal state of Base\SalesPerson object.
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
     * Compares this with another <code>SalesPerson</code> instance.  If
     * <code>obj</code> is an instance of <code>SalesPerson</code>, delegates to
     * <code>equals(SalesPerson)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SalesPerson The current object, for fluid interface
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
     * Get the [arspsaleper1] column value.
     *
     * @return string
     */
    public function getArspsaleper1()
    {
        return $this->arspsaleper1;
    }

    /**
     * Get the [arspname] column value.
     *
     * @return string
     */
    public function getArspname()
    {
        return $this->arspname;
    }

    /**
     * Get the [arspmtdsale] column value.
     *
     * @return string
     */
    public function getArspmtdsale()
    {
        return $this->arspmtdsale;
    }

    /**
     * Get the [arspytdsale] column value.
     *
     * @return string
     */
    public function getArspytdsale()
    {
        return $this->arspytdsale;
    }

    /**
     * Get the [arspltdsale] column value.
     *
     * @return string
     */
    public function getArspltdsale()
    {
        return $this->arspltdsale;
    }

    /**
     * Get the [arsplastsaledate] column value.
     *
     * @return string
     */
    public function getArsplastsaledate()
    {
        return $this->arsplastsaledate;
    }

    /**
     * Get the [arspmtdcommearn] column value.
     *
     * @return string
     */
    public function getArspmtdcommearn()
    {
        return $this->arspmtdcommearn;
    }

    /**
     * Get the [arspytdcommearn] column value.
     *
     * @return string
     */
    public function getArspytdcommearn()
    {
        return $this->arspytdcommearn;
    }

    /**
     * Get the [arspltdcommearn] column value.
     *
     * @return string
     */
    public function getArspltdcommearn()
    {
        return $this->arspltdcommearn;
    }

    /**
     * Get the [arspmtdcommpaid] column value.
     *
     * @return string
     */
    public function getArspmtdcommpaid()
    {
        return $this->arspmtdcommpaid;
    }

    /**
     * Get the [arspytdcommpaid] column value.
     *
     * @return string
     */
    public function getArspytdcommpaid()
    {
        return $this->arspytdcommpaid;
    }

    /**
     * Get the [arspltdcommpaid] column value.
     *
     * @return string
     */
    public function getArspltdcommpaid()
    {
        return $this->arspltdcommpaid;
    }

    /**
     * Get the [arspcommcycle] column value.
     *
     * @return string
     */
    public function getArspcommcycle()
    {
        return $this->arspcommcycle;
    }

    /**
     * Get the [arspgrup] column value.
     *
     * @return string
     */
    public function getArspgrup()
    {
        return $this->arspgrup;
    }

    /**
     * Get the [arsplogin] column value.
     *
     * @return string
     */
    public function getArsplogin()
    {
        return $this->arsplogin;
    }

    /**
     * Get the [arspmgr] column value.
     *
     * @return string
     */
    public function getArspmgr()
    {
        return $this->arspmgr;
    }

    /**
     * Get the [arspvendid] column value.
     *
     * @return string
     */
    public function getArspvendid()
    {
        return $this->arspvendid;
    }

    /**
     * Get the [arsprestrictaccess] column value.
     *
     * @return string
     */
    public function getArsprestrictaccess()
    {
        return $this->arsprestrictaccess;
    }

    /**
     * Get the [arspemailaddr] column value.
     *
     * @return string
     */
    public function getArspemailaddr()
    {
        return $this->arspemailaddr;
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
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [arspname] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspname !== $v) {
            $this->arspname = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPNAME] = true;
        }

        return $this;
    } // setArspname()

    /**
     * Set the value of [arspmtdsale] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspmtdsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspmtdsale !== $v) {
            $this->arspmtdsale = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPMTDSALE] = true;
        }

        return $this;
    } // setArspmtdsale()

    /**
     * Set the value of [arspytdsale] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspytdsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspytdsale !== $v) {
            $this->arspytdsale = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPYTDSALE] = true;
        }

        return $this;
    } // setArspytdsale()

    /**
     * Set the value of [arspltdsale] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspltdsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspltdsale !== $v) {
            $this->arspltdsale = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPLTDSALE] = true;
        }

        return $this;
    } // setArspltdsale()

    /**
     * Set the value of [arsplastsaledate] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArsplastsaledate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arsplastsaledate !== $v) {
            $this->arsplastsaledate = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPLASTSALEDATE] = true;
        }

        return $this;
    } // setArsplastsaledate()

    /**
     * Set the value of [arspmtdcommearn] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspmtdcommearn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspmtdcommearn !== $v) {
            $this->arspmtdcommearn = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPMTDCOMMEARN] = true;
        }

        return $this;
    } // setArspmtdcommearn()

    /**
     * Set the value of [arspytdcommearn] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspytdcommearn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspytdcommearn !== $v) {
            $this->arspytdcommearn = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPYTDCOMMEARN] = true;
        }

        return $this;
    } // setArspytdcommearn()

    /**
     * Set the value of [arspltdcommearn] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspltdcommearn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspltdcommearn !== $v) {
            $this->arspltdcommearn = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPLTDCOMMEARN] = true;
        }

        return $this;
    } // setArspltdcommearn()

    /**
     * Set the value of [arspmtdcommpaid] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspmtdcommpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspmtdcommpaid !== $v) {
            $this->arspmtdcommpaid = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPMTDCOMMPAID] = true;
        }

        return $this;
    } // setArspmtdcommpaid()

    /**
     * Set the value of [arspytdcommpaid] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspytdcommpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspytdcommpaid !== $v) {
            $this->arspytdcommpaid = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPYTDCOMMPAID] = true;
        }

        return $this;
    } // setArspytdcommpaid()

    /**
     * Set the value of [arspltdcommpaid] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspltdcommpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspltdcommpaid !== $v) {
            $this->arspltdcommpaid = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPLTDCOMMPAID] = true;
        }

        return $this;
    } // setArspltdcommpaid()

    /**
     * Set the value of [arspcommcycle] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspcommcycle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspcommcycle !== $v) {
            $this->arspcommcycle = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPCOMMCYCLE] = true;
        }

        return $this;
    } // setArspcommcycle()

    /**
     * Set the value of [arspgrup] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspgrup !== $v) {
            $this->arspgrup = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPGRUP] = true;
        }

        return $this;
    } // setArspgrup()

    /**
     * Set the value of [arsplogin] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArsplogin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arsplogin !== $v) {
            $this->arsplogin = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPLOGIN] = true;
        }

        return $this;
    } // setArsplogin()

    /**
     * Set the value of [arspmgr] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspmgr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspmgr !== $v) {
            $this->arspmgr = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPMGR] = true;
        }

        return $this;
    } // setArspmgr()

    /**
     * Set the value of [arspvendid] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspvendid !== $v) {
            $this->arspvendid = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPVENDID] = true;
        }

        return $this;
    } // setArspvendid()

    /**
     * Set the value of [arsprestrictaccess] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArsprestrictaccess($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arsprestrictaccess !== $v) {
            $this->arsprestrictaccess = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPRESTRICTACCESS] = true;
        }

        return $this;
    } // setArsprestrictaccess()

    /**
     * Set the value of [arspemailaddr] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setArspemailaddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspemailaddr !== $v) {
            $this->arspemailaddr = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_ARSPEMAILADDR] = true;
        }

        return $this;
    } // setArspemailaddr()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SalesPersonTableMap::COL_DUMMY] = true;
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
            if ($this->arspsaleper1 !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SalesPersonTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SalesPersonTableMap::translateFieldName('Arspname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SalesPersonTableMap::translateFieldName('Arspmtdsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspmtdsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SalesPersonTableMap::translateFieldName('Arspytdsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspytdsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SalesPersonTableMap::translateFieldName('Arspltdsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspltdsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SalesPersonTableMap::translateFieldName('Arsplastsaledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arsplastsaledate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SalesPersonTableMap::translateFieldName('Arspmtdcommearn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspmtdcommearn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SalesPersonTableMap::translateFieldName('Arspytdcommearn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspytdcommearn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SalesPersonTableMap::translateFieldName('Arspltdcommearn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspltdcommearn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SalesPersonTableMap::translateFieldName('Arspmtdcommpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspmtdcommpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SalesPersonTableMap::translateFieldName('Arspytdcommpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspytdcommpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SalesPersonTableMap::translateFieldName('Arspltdcommpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspltdcommpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SalesPersonTableMap::translateFieldName('Arspcommcycle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspcommcycle = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SalesPersonTableMap::translateFieldName('Arspgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SalesPersonTableMap::translateFieldName('Arsplogin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arsplogin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SalesPersonTableMap::translateFieldName('Arspmgr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspmgr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SalesPersonTableMap::translateFieldName('Arspvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SalesPersonTableMap::translateFieldName('Arsprestrictaccess', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arsprestrictaccess = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SalesPersonTableMap::translateFieldName('Arspemailaddr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspemailaddr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : SalesPersonTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : SalesPersonTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : SalesPersonTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 22; // 22 = SalesPersonTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SalesPerson'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SalesPersonTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSalesPersonQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collBookingDayCustomers = null;

            $this->collBookingDayDetails = null;

            $this->collBookingDayReps = null;

            $this->collBookingSummaryReps = null;

            $this->collBookings = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SalesPerson::setDeleted()
     * @see SalesPerson::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesPersonTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSalesPersonQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesPersonTableMap::DATABASE_NAME);
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
                SalesPersonTableMap::addInstanceToPool($this);
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

            if ($this->bookingDayCustomersScheduledForDeletion !== null) {
                if (!$this->bookingDayCustomersScheduledForDeletion->isEmpty()) {
                    \BookingDayCustomerQuery::create()
                        ->filterByPrimaryKeys($this->bookingDayCustomersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->bookingDayCustomersScheduledForDeletion = null;
                }
            }

            if ($this->collBookingDayCustomers !== null) {
                foreach ($this->collBookingDayCustomers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->bookingDayDetailsScheduledForDeletion !== null) {
                if (!$this->bookingDayDetailsScheduledForDeletion->isEmpty()) {
                    foreach ($this->bookingDayDetailsScheduledForDeletion as $bookingDayDetail) {
                        // need to save related object because we set the relation to null
                        $bookingDayDetail->save($con);
                    }
                    $this->bookingDayDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collBookingDayDetails !== null) {
                foreach ($this->collBookingDayDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->bookingDayRepsScheduledForDeletion !== null) {
                if (!$this->bookingDayRepsScheduledForDeletion->isEmpty()) {
                    \BookingDayRepQuery::create()
                        ->filterByPrimaryKeys($this->bookingDayRepsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->bookingDayRepsScheduledForDeletion = null;
                }
            }

            if ($this->collBookingDayReps !== null) {
                foreach ($this->collBookingDayReps as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->bookingSummaryRepsScheduledForDeletion !== null) {
                if (!$this->bookingSummaryRepsScheduledForDeletion->isEmpty()) {
                    \BookingSummaryRepQuery::create()
                        ->filterByPrimaryKeys($this->bookingSummaryRepsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->bookingSummaryRepsScheduledForDeletion = null;
                }
            }

            if ($this->collBookingSummaryReps !== null) {
                foreach ($this->collBookingSummaryReps as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->bookingsScheduledForDeletion !== null) {
                if (!$this->bookingsScheduledForDeletion->isEmpty()) {
                    foreach ($this->bookingsScheduledForDeletion as $booking) {
                        // need to save related object because we set the relation to null
                        $booking->save($con);
                    }
                    $this->bookingsScheduledForDeletion = null;
                }
            }

            if ($this->collBookings !== null) {
                foreach ($this->collBookings as $referrerFK) {
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
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ArspName';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPMTDSALE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspMtdSale';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPYTDSALE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspYtdSale';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLTDSALE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLtdSale';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLASTSALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLastSaleDate';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPMTDCOMMEARN)) {
            $modifiedColumns[':p' . $index++]  = 'ArspMtdCommEarn';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPYTDCOMMEARN)) {
            $modifiedColumns[':p' . $index++]  = 'ArspYtdCommEarn';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLTDCOMMEARN)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLtdCommEarn';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPMTDCOMMPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArspMtdCommPaid';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPYTDCOMMPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArspYtdCommPaid';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLTDCOMMPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLtdCommPaid';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPCOMMCYCLE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspCommCycle';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'ArspGrup';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLOGIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLogin';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPMGR)) {
            $modifiedColumns[':p' . $index++]  = 'ArspMgr';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ArspVendId';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPRESTRICTACCESS)) {
            $modifiedColumns[':p' . $index++]  = 'ArspRestrictAccess';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPEMAILADDR)) {
            $modifiedColumns[':p' . $index++]  = 'ArspEmailAddr';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_saleper1 (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'ArspName':
                        $stmt->bindValue($identifier, $this->arspname, PDO::PARAM_STR);
                        break;
                    case 'ArspMtdSale':
                        $stmt->bindValue($identifier, $this->arspmtdsale, PDO::PARAM_STR);
                        break;
                    case 'ArspYtdSale':
                        $stmt->bindValue($identifier, $this->arspytdsale, PDO::PARAM_STR);
                        break;
                    case 'ArspLtdSale':
                        $stmt->bindValue($identifier, $this->arspltdsale, PDO::PARAM_STR);
                        break;
                    case 'ArspLastSaleDate':
                        $stmt->bindValue($identifier, $this->arsplastsaledate, PDO::PARAM_STR);
                        break;
                    case 'ArspMtdCommEarn':
                        $stmt->bindValue($identifier, $this->arspmtdcommearn, PDO::PARAM_STR);
                        break;
                    case 'ArspYtdCommEarn':
                        $stmt->bindValue($identifier, $this->arspytdcommearn, PDO::PARAM_STR);
                        break;
                    case 'ArspLtdCommEarn':
                        $stmt->bindValue($identifier, $this->arspltdcommearn, PDO::PARAM_STR);
                        break;
                    case 'ArspMtdCommPaid':
                        $stmt->bindValue($identifier, $this->arspmtdcommpaid, PDO::PARAM_STR);
                        break;
                    case 'ArspYtdCommPaid':
                        $stmt->bindValue($identifier, $this->arspytdcommpaid, PDO::PARAM_STR);
                        break;
                    case 'ArspLtdCommPaid':
                        $stmt->bindValue($identifier, $this->arspltdcommpaid, PDO::PARAM_STR);
                        break;
                    case 'ArspCommCycle':
                        $stmt->bindValue($identifier, $this->arspcommcycle, PDO::PARAM_STR);
                        break;
                    case 'ArspGrup':
                        $stmt->bindValue($identifier, $this->arspgrup, PDO::PARAM_STR);
                        break;
                    case 'ArspLogin':
                        $stmt->bindValue($identifier, $this->arsplogin, PDO::PARAM_STR);
                        break;
                    case 'ArspMgr':
                        $stmt->bindValue($identifier, $this->arspmgr, PDO::PARAM_STR);
                        break;
                    case 'ArspVendId':
                        $stmt->bindValue($identifier, $this->arspvendid, PDO::PARAM_STR);
                        break;
                    case 'ArspRestrictAccess':
                        $stmt->bindValue($identifier, $this->arsprestrictaccess, PDO::PARAM_STR);
                        break;
                    case 'ArspEmailAddr':
                        $stmt->bindValue($identifier, $this->arspemailaddr, PDO::PARAM_STR);
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
        $pos = SalesPersonTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArspsaleper1();
                break;
            case 1:
                return $this->getArspname();
                break;
            case 2:
                return $this->getArspmtdsale();
                break;
            case 3:
                return $this->getArspytdsale();
                break;
            case 4:
                return $this->getArspltdsale();
                break;
            case 5:
                return $this->getArsplastsaledate();
                break;
            case 6:
                return $this->getArspmtdcommearn();
                break;
            case 7:
                return $this->getArspytdcommearn();
                break;
            case 8:
                return $this->getArspltdcommearn();
                break;
            case 9:
                return $this->getArspmtdcommpaid();
                break;
            case 10:
                return $this->getArspytdcommpaid();
                break;
            case 11:
                return $this->getArspltdcommpaid();
                break;
            case 12:
                return $this->getArspcommcycle();
                break;
            case 13:
                return $this->getArspgrup();
                break;
            case 14:
                return $this->getArsplogin();
                break;
            case 15:
                return $this->getArspmgr();
                break;
            case 16:
                return $this->getArspvendid();
                break;
            case 17:
                return $this->getArsprestrictaccess();
                break;
            case 18:
                return $this->getArspemailaddr();
                break;
            case 19:
                return $this->getDateupdtd();
                break;
            case 20:
                return $this->getTimeupdtd();
                break;
            case 21:
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

        if (isset($alreadyDumpedObjects['SalesPerson'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesPerson'][$this->hashCode()] = true;
        $keys = SalesPersonTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArspsaleper1(),
            $keys[1] => $this->getArspname(),
            $keys[2] => $this->getArspmtdsale(),
            $keys[3] => $this->getArspytdsale(),
            $keys[4] => $this->getArspltdsale(),
            $keys[5] => $this->getArsplastsaledate(),
            $keys[6] => $this->getArspmtdcommearn(),
            $keys[7] => $this->getArspytdcommearn(),
            $keys[8] => $this->getArspltdcommearn(),
            $keys[9] => $this->getArspmtdcommpaid(),
            $keys[10] => $this->getArspytdcommpaid(),
            $keys[11] => $this->getArspltdcommpaid(),
            $keys[12] => $this->getArspcommcycle(),
            $keys[13] => $this->getArspgrup(),
            $keys[14] => $this->getArsplogin(),
            $keys[15] => $this->getArspmgr(),
            $keys[16] => $this->getArspvendid(),
            $keys[17] => $this->getArsprestrictaccess(),
            $keys[18] => $this->getArspemailaddr(),
            $keys[19] => $this->getDateupdtd(),
            $keys[20] => $this->getTimeupdtd(),
            $keys[21] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collBookingDayCustomers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookingDayCustomers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_by_day_custs';
                        break;
                    default:
                        $key = 'BookingDayCustomers';
                }

                $result[$key] = $this->collBookingDayCustomers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collBookingDayDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookingDayDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_by_day_dets';
                        break;
                    default:
                        $key = 'BookingDayDetails';
                }

                $result[$key] = $this->collBookingDayDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collBookingDayReps) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookingDayReps';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_by_day_reps';
                        break;
                    default:
                        $key = 'BookingDayReps';
                }

                $result[$key] = $this->collBookingDayReps->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collBookingSummaryReps) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookingSummaryReps';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_by_rep_sumries';
                        break;
                    default:
                        $key = 'BookingSummaryReps';
                }

                $result[$key] = $this->collBookingSummaryReps->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collBookings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_log_heads';
                        break;
                    default:
                        $key = 'Bookings';
                }

                $result[$key] = $this->collBookings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\SalesPerson
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SalesPersonTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SalesPerson
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArspsaleper1($value);
                break;
            case 1:
                $this->setArspname($value);
                break;
            case 2:
                $this->setArspmtdsale($value);
                break;
            case 3:
                $this->setArspytdsale($value);
                break;
            case 4:
                $this->setArspltdsale($value);
                break;
            case 5:
                $this->setArsplastsaledate($value);
                break;
            case 6:
                $this->setArspmtdcommearn($value);
                break;
            case 7:
                $this->setArspytdcommearn($value);
                break;
            case 8:
                $this->setArspltdcommearn($value);
                break;
            case 9:
                $this->setArspmtdcommpaid($value);
                break;
            case 10:
                $this->setArspytdcommpaid($value);
                break;
            case 11:
                $this->setArspltdcommpaid($value);
                break;
            case 12:
                $this->setArspcommcycle($value);
                break;
            case 13:
                $this->setArspgrup($value);
                break;
            case 14:
                $this->setArsplogin($value);
                break;
            case 15:
                $this->setArspmgr($value);
                break;
            case 16:
                $this->setArspvendid($value);
                break;
            case 17:
                $this->setArsprestrictaccess($value);
                break;
            case 18:
                $this->setArspemailaddr($value);
                break;
            case 19:
                $this->setDateupdtd($value);
                break;
            case 20:
                $this->setTimeupdtd($value);
                break;
            case 21:
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
        $keys = SalesPersonTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArspsaleper1($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArspname($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArspmtdsale($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArspytdsale($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArspltdsale($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArsplastsaledate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArspmtdcommearn($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArspytdcommearn($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArspltdcommearn($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArspmtdcommpaid($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArspytdcommpaid($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArspltdcommpaid($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArspcommcycle($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArspgrup($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArsplogin($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArspmgr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArspvendid($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArsprestrictaccess($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArspemailaddr($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setDateupdtd($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setTimeupdtd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setDummy($arr[$keys[21]]);
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
     * @return $this|\SalesPerson The current object, for fluid interface
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
        $criteria = new Criteria(SalesPersonTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPNAME)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPNAME, $this->arspname);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPMTDSALE)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPMTDSALE, $this->arspmtdsale);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPYTDSALE)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPYTDSALE, $this->arspytdsale);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLTDSALE)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPLTDSALE, $this->arspltdsale);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLASTSALEDATE)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPLASTSALEDATE, $this->arsplastsaledate);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPMTDCOMMEARN)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPMTDCOMMEARN, $this->arspmtdcommearn);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPYTDCOMMEARN)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPYTDCOMMEARN, $this->arspytdcommearn);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLTDCOMMEARN)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPLTDCOMMEARN, $this->arspltdcommearn);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPMTDCOMMPAID)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPMTDCOMMPAID, $this->arspmtdcommpaid);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPYTDCOMMPAID)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPYTDCOMMPAID, $this->arspytdcommpaid);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLTDCOMMPAID)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPLTDCOMMPAID, $this->arspltdcommpaid);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPCOMMCYCLE)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPCOMMCYCLE, $this->arspcommcycle);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPGRUP)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPGRUP, $this->arspgrup);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPLOGIN)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPLOGIN, $this->arsplogin);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPMGR)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPMGR, $this->arspmgr);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPVENDID)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPVENDID, $this->arspvendid);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPRESTRICTACCESS)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPRESTRICTACCESS, $this->arsprestrictaccess);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_ARSPEMAILADDR)) {
            $criteria->add(SalesPersonTableMap::COL_ARSPEMAILADDR, $this->arspemailaddr);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_DATEUPDTD)) {
            $criteria->add(SalesPersonTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SalesPersonTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SalesPersonTableMap::COL_DUMMY)) {
            $criteria->add(SalesPersonTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSalesPersonQuery::create();
        $criteria->add(SalesPersonTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);

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
        $validPk = null !== $this->getArspsaleper1();

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
        return $this->getArspsaleper1();
    }

    /**
     * Generic method to set the primary key (arspsaleper1 column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArspsaleper1($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getArspsaleper1();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SalesPerson (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setArspname($this->getArspname());
        $copyObj->setArspmtdsale($this->getArspmtdsale());
        $copyObj->setArspytdsale($this->getArspytdsale());
        $copyObj->setArspltdsale($this->getArspltdsale());
        $copyObj->setArsplastsaledate($this->getArsplastsaledate());
        $copyObj->setArspmtdcommearn($this->getArspmtdcommearn());
        $copyObj->setArspytdcommearn($this->getArspytdcommearn());
        $copyObj->setArspltdcommearn($this->getArspltdcommearn());
        $copyObj->setArspmtdcommpaid($this->getArspmtdcommpaid());
        $copyObj->setArspytdcommpaid($this->getArspytdcommpaid());
        $copyObj->setArspltdcommpaid($this->getArspltdcommpaid());
        $copyObj->setArspcommcycle($this->getArspcommcycle());
        $copyObj->setArspgrup($this->getArspgrup());
        $copyObj->setArsplogin($this->getArsplogin());
        $copyObj->setArspmgr($this->getArspmgr());
        $copyObj->setArspvendid($this->getArspvendid());
        $copyObj->setArsprestrictaccess($this->getArsprestrictaccess());
        $copyObj->setArspemailaddr($this->getArspemailaddr());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getBookingDayCustomers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBookingDayCustomer($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBookingDayDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBookingDayDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBookingDayReps() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBookingDayRep($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBookingSummaryReps() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBookingSummaryRep($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBookings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBooking($relObj->copy($deepCopy));
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
     * @return \SalesPerson Clone of current object.
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('BookingDayCustomer' == $relationName) {
            $this->initBookingDayCustomers();
            return;
        }
        if ('BookingDayDetail' == $relationName) {
            $this->initBookingDayDetails();
            return;
        }
        if ('BookingDayRep' == $relationName) {
            $this->initBookingDayReps();
            return;
        }
        if ('BookingSummaryRep' == $relationName) {
            $this->initBookingSummaryReps();
            return;
        }
        if ('Booking' == $relationName) {
            $this->initBookings();
            return;
        }
    }

    /**
     * Clears out the collBookingDayCustomers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookingDayCustomers()
     */
    public function clearBookingDayCustomers()
    {
        $this->collBookingDayCustomers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookingDayCustomers collection loaded partially.
     */
    public function resetPartialBookingDayCustomers($v = true)
    {
        $this->collBookingDayCustomersPartial = $v;
    }

    /**
     * Initializes the collBookingDayCustomers collection.
     *
     * By default this just sets the collBookingDayCustomers collection to an empty array (like clearcollBookingDayCustomers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookingDayCustomers($overrideExisting = true)
    {
        if (null !== $this->collBookingDayCustomers && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingDayCustomerTableMap::getTableMap()->getCollectionClassName();

        $this->collBookingDayCustomers = new $collectionClassName;
        $this->collBookingDayCustomers->setModel('\BookingDayCustomer');
    }

    /**
     * Gets an array of ChildBookingDayCustomer objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSalesPerson is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBookingDayCustomer[] List of ChildBookingDayCustomer objects
     * @throws PropelException
     */
    public function getBookingDayCustomers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayCustomersPartial && !$this->isNew();
        if (null === $this->collBookingDayCustomers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookingDayCustomers) {
                // return empty collection
                $this->initBookingDayCustomers();
            } else {
                $collBookingDayCustomers = ChildBookingDayCustomerQuery::create(null, $criteria)
                    ->filterBySalesPerson($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingDayCustomersPartial && count($collBookingDayCustomers)) {
                        $this->initBookingDayCustomers(false);

                        foreach ($collBookingDayCustomers as $obj) {
                            if (false == $this->collBookingDayCustomers->contains($obj)) {
                                $this->collBookingDayCustomers->append($obj);
                            }
                        }

                        $this->collBookingDayCustomersPartial = true;
                    }

                    return $collBookingDayCustomers;
                }

                if ($partial && $this->collBookingDayCustomers) {
                    foreach ($this->collBookingDayCustomers as $obj) {
                        if ($obj->isNew()) {
                            $collBookingDayCustomers[] = $obj;
                        }
                    }
                }

                $this->collBookingDayCustomers = $collBookingDayCustomers;
                $this->collBookingDayCustomersPartial = false;
            }
        }

        return $this->collBookingDayCustomers;
    }

    /**
     * Sets a collection of ChildBookingDayCustomer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookingDayCustomers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function setBookingDayCustomers(Collection $bookingDayCustomers, ConnectionInterface $con = null)
    {
        /** @var ChildBookingDayCustomer[] $bookingDayCustomersToDelete */
        $bookingDayCustomersToDelete = $this->getBookingDayCustomers(new Criteria(), $con)->diff($bookingDayCustomers);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->bookingDayCustomersScheduledForDeletion = clone $bookingDayCustomersToDelete;

        foreach ($bookingDayCustomersToDelete as $bookingDayCustomerRemoved) {
            $bookingDayCustomerRemoved->setSalesPerson(null);
        }

        $this->collBookingDayCustomers = null;
        foreach ($bookingDayCustomers as $bookingDayCustomer) {
            $this->addBookingDayCustomer($bookingDayCustomer);
        }

        $this->collBookingDayCustomers = $bookingDayCustomers;
        $this->collBookingDayCustomersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BookingDayCustomer objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BookingDayCustomer objects.
     * @throws PropelException
     */
    public function countBookingDayCustomers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayCustomersPartial && !$this->isNew();
        if (null === $this->collBookingDayCustomers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookingDayCustomers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookingDayCustomers());
            }

            $query = ChildBookingDayCustomerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesPerson($this)
                ->count($con);
        }

        return count($this->collBookingDayCustomers);
    }

    /**
     * Method called to associate a ChildBookingDayCustomer object to this object
     * through the ChildBookingDayCustomer foreign key attribute.
     *
     * @param  ChildBookingDayCustomer $l ChildBookingDayCustomer
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function addBookingDayCustomer(ChildBookingDayCustomer $l)
    {
        if ($this->collBookingDayCustomers === null) {
            $this->initBookingDayCustomers();
            $this->collBookingDayCustomersPartial = true;
        }

        if (!$this->collBookingDayCustomers->contains($l)) {
            $this->doAddBookingDayCustomer($l);

            if ($this->bookingDayCustomersScheduledForDeletion and $this->bookingDayCustomersScheduledForDeletion->contains($l)) {
                $this->bookingDayCustomersScheduledForDeletion->remove($this->bookingDayCustomersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBookingDayCustomer $bookingDayCustomer The ChildBookingDayCustomer object to add.
     */
    protected function doAddBookingDayCustomer(ChildBookingDayCustomer $bookingDayCustomer)
    {
        $this->collBookingDayCustomers[]= $bookingDayCustomer;
        $bookingDayCustomer->setSalesPerson($this);
    }

    /**
     * @param  ChildBookingDayCustomer $bookingDayCustomer The ChildBookingDayCustomer object to remove.
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function removeBookingDayCustomer(ChildBookingDayCustomer $bookingDayCustomer)
    {
        if ($this->getBookingDayCustomers()->contains($bookingDayCustomer)) {
            $pos = $this->collBookingDayCustomers->search($bookingDayCustomer);
            $this->collBookingDayCustomers->remove($pos);
            if (null === $this->bookingDayCustomersScheduledForDeletion) {
                $this->bookingDayCustomersScheduledForDeletion = clone $this->collBookingDayCustomers;
                $this->bookingDayCustomersScheduledForDeletion->clear();
            }
            $this->bookingDayCustomersScheduledForDeletion[]= clone $bookingDayCustomer;
            $bookingDayCustomer->setSalesPerson(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesPerson is new, it will return
     * an empty collection; or if this SalesPerson has previously
     * been saved, it will retrieve related BookingDayCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesPerson.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayCustomer[] List of ChildBookingDayCustomer objects
     */
    public function getBookingDayCustomersJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayCustomerQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getBookingDayCustomers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesPerson is new, it will return
     * an empty collection; or if this SalesPerson has previously
     * been saved, it will retrieve related BookingDayCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesPerson.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayCustomer[] List of ChildBookingDayCustomer objects
     */
    public function getBookingDayCustomersJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayCustomerQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getBookingDayCustomers($query, $con);
    }

    /**
     * Clears out the collBookingDayDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookingDayDetails()
     */
    public function clearBookingDayDetails()
    {
        $this->collBookingDayDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookingDayDetails collection loaded partially.
     */
    public function resetPartialBookingDayDetails($v = true)
    {
        $this->collBookingDayDetailsPartial = $v;
    }

    /**
     * Initializes the collBookingDayDetails collection.
     *
     * By default this just sets the collBookingDayDetails collection to an empty array (like clearcollBookingDayDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookingDayDetails($overrideExisting = true)
    {
        if (null !== $this->collBookingDayDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingDayDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collBookingDayDetails = new $collectionClassName;
        $this->collBookingDayDetails->setModel('\BookingDayDetail');
    }

    /**
     * Gets an array of ChildBookingDayDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSalesPerson is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBookingDayDetail[] List of ChildBookingDayDetail objects
     * @throws PropelException
     */
    public function getBookingDayDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayDetailsPartial && !$this->isNew();
        if (null === $this->collBookingDayDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookingDayDetails) {
                // return empty collection
                $this->initBookingDayDetails();
            } else {
                $collBookingDayDetails = ChildBookingDayDetailQuery::create(null, $criteria)
                    ->filterBySalesPerson($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingDayDetailsPartial && count($collBookingDayDetails)) {
                        $this->initBookingDayDetails(false);

                        foreach ($collBookingDayDetails as $obj) {
                            if (false == $this->collBookingDayDetails->contains($obj)) {
                                $this->collBookingDayDetails->append($obj);
                            }
                        }

                        $this->collBookingDayDetailsPartial = true;
                    }

                    return $collBookingDayDetails;
                }

                if ($partial && $this->collBookingDayDetails) {
                    foreach ($this->collBookingDayDetails as $obj) {
                        if ($obj->isNew()) {
                            $collBookingDayDetails[] = $obj;
                        }
                    }
                }

                $this->collBookingDayDetails = $collBookingDayDetails;
                $this->collBookingDayDetailsPartial = false;
            }
        }

        return $this->collBookingDayDetails;
    }

    /**
     * Sets a collection of ChildBookingDayDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookingDayDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function setBookingDayDetails(Collection $bookingDayDetails, ConnectionInterface $con = null)
    {
        /** @var ChildBookingDayDetail[] $bookingDayDetailsToDelete */
        $bookingDayDetailsToDelete = $this->getBookingDayDetails(new Criteria(), $con)->diff($bookingDayDetails);


        $this->bookingDayDetailsScheduledForDeletion = $bookingDayDetailsToDelete;

        foreach ($bookingDayDetailsToDelete as $bookingDayDetailRemoved) {
            $bookingDayDetailRemoved->setSalesPerson(null);
        }

        $this->collBookingDayDetails = null;
        foreach ($bookingDayDetails as $bookingDayDetail) {
            $this->addBookingDayDetail($bookingDayDetail);
        }

        $this->collBookingDayDetails = $bookingDayDetails;
        $this->collBookingDayDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BookingDayDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BookingDayDetail objects.
     * @throws PropelException
     */
    public function countBookingDayDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayDetailsPartial && !$this->isNew();
        if (null === $this->collBookingDayDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookingDayDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookingDayDetails());
            }

            $query = ChildBookingDayDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesPerson($this)
                ->count($con);
        }

        return count($this->collBookingDayDetails);
    }

    /**
     * Method called to associate a ChildBookingDayDetail object to this object
     * through the ChildBookingDayDetail foreign key attribute.
     *
     * @param  ChildBookingDayDetail $l ChildBookingDayDetail
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function addBookingDayDetail(ChildBookingDayDetail $l)
    {
        if ($this->collBookingDayDetails === null) {
            $this->initBookingDayDetails();
            $this->collBookingDayDetailsPartial = true;
        }

        if (!$this->collBookingDayDetails->contains($l)) {
            $this->doAddBookingDayDetail($l);

            if ($this->bookingDayDetailsScheduledForDeletion and $this->bookingDayDetailsScheduledForDeletion->contains($l)) {
                $this->bookingDayDetailsScheduledForDeletion->remove($this->bookingDayDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBookingDayDetail $bookingDayDetail The ChildBookingDayDetail object to add.
     */
    protected function doAddBookingDayDetail(ChildBookingDayDetail $bookingDayDetail)
    {
        $this->collBookingDayDetails[]= $bookingDayDetail;
        $bookingDayDetail->setSalesPerson($this);
    }

    /**
     * @param  ChildBookingDayDetail $bookingDayDetail The ChildBookingDayDetail object to remove.
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function removeBookingDayDetail(ChildBookingDayDetail $bookingDayDetail)
    {
        if ($this->getBookingDayDetails()->contains($bookingDayDetail)) {
            $pos = $this->collBookingDayDetails->search($bookingDayDetail);
            $this->collBookingDayDetails->remove($pos);
            if (null === $this->bookingDayDetailsScheduledForDeletion) {
                $this->bookingDayDetailsScheduledForDeletion = clone $this->collBookingDayDetails;
                $this->bookingDayDetailsScheduledForDeletion->clear();
            }
            $this->bookingDayDetailsScheduledForDeletion[]= $bookingDayDetail;
            $bookingDayDetail->setSalesPerson(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesPerson is new, it will return
     * an empty collection; or if this SalesPerson has previously
     * been saved, it will retrieve related BookingDayDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesPerson.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayDetail[] List of ChildBookingDayDetail objects
     */
    public function getBookingDayDetailsJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayDetailQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getBookingDayDetails($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesPerson is new, it will return
     * an empty collection; or if this SalesPerson has previously
     * been saved, it will retrieve related BookingDayDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesPerson.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayDetail[] List of ChildBookingDayDetail objects
     */
    public function getBookingDayDetailsJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayDetailQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getBookingDayDetails($query, $con);
    }

    /**
     * Clears out the collBookingDayReps collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookingDayReps()
     */
    public function clearBookingDayReps()
    {
        $this->collBookingDayReps = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookingDayReps collection loaded partially.
     */
    public function resetPartialBookingDayReps($v = true)
    {
        $this->collBookingDayRepsPartial = $v;
    }

    /**
     * Initializes the collBookingDayReps collection.
     *
     * By default this just sets the collBookingDayReps collection to an empty array (like clearcollBookingDayReps());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookingDayReps($overrideExisting = true)
    {
        if (null !== $this->collBookingDayReps && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingDayRepTableMap::getTableMap()->getCollectionClassName();

        $this->collBookingDayReps = new $collectionClassName;
        $this->collBookingDayReps->setModel('\BookingDayRep');
    }

    /**
     * Gets an array of ChildBookingDayRep objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSalesPerson is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBookingDayRep[] List of ChildBookingDayRep objects
     * @throws PropelException
     */
    public function getBookingDayReps(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayRepsPartial && !$this->isNew();
        if (null === $this->collBookingDayReps || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookingDayReps) {
                // return empty collection
                $this->initBookingDayReps();
            } else {
                $collBookingDayReps = ChildBookingDayRepQuery::create(null, $criteria)
                    ->filterBySalesPerson($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingDayRepsPartial && count($collBookingDayReps)) {
                        $this->initBookingDayReps(false);

                        foreach ($collBookingDayReps as $obj) {
                            if (false == $this->collBookingDayReps->contains($obj)) {
                                $this->collBookingDayReps->append($obj);
                            }
                        }

                        $this->collBookingDayRepsPartial = true;
                    }

                    return $collBookingDayReps;
                }

                if ($partial && $this->collBookingDayReps) {
                    foreach ($this->collBookingDayReps as $obj) {
                        if ($obj->isNew()) {
                            $collBookingDayReps[] = $obj;
                        }
                    }
                }

                $this->collBookingDayReps = $collBookingDayReps;
                $this->collBookingDayRepsPartial = false;
            }
        }

        return $this->collBookingDayReps;
    }

    /**
     * Sets a collection of ChildBookingDayRep objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookingDayReps A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function setBookingDayReps(Collection $bookingDayReps, ConnectionInterface $con = null)
    {
        /** @var ChildBookingDayRep[] $bookingDayRepsToDelete */
        $bookingDayRepsToDelete = $this->getBookingDayReps(new Criteria(), $con)->diff($bookingDayReps);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->bookingDayRepsScheduledForDeletion = clone $bookingDayRepsToDelete;

        foreach ($bookingDayRepsToDelete as $bookingDayRepRemoved) {
            $bookingDayRepRemoved->setSalesPerson(null);
        }

        $this->collBookingDayReps = null;
        foreach ($bookingDayReps as $bookingDayRep) {
            $this->addBookingDayRep($bookingDayRep);
        }

        $this->collBookingDayReps = $bookingDayReps;
        $this->collBookingDayRepsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BookingDayRep objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BookingDayRep objects.
     * @throws PropelException
     */
    public function countBookingDayReps(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayRepsPartial && !$this->isNew();
        if (null === $this->collBookingDayReps || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookingDayReps) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookingDayReps());
            }

            $query = ChildBookingDayRepQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesPerson($this)
                ->count($con);
        }

        return count($this->collBookingDayReps);
    }

    /**
     * Method called to associate a ChildBookingDayRep object to this object
     * through the ChildBookingDayRep foreign key attribute.
     *
     * @param  ChildBookingDayRep $l ChildBookingDayRep
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function addBookingDayRep(ChildBookingDayRep $l)
    {
        if ($this->collBookingDayReps === null) {
            $this->initBookingDayReps();
            $this->collBookingDayRepsPartial = true;
        }

        if (!$this->collBookingDayReps->contains($l)) {
            $this->doAddBookingDayRep($l);

            if ($this->bookingDayRepsScheduledForDeletion and $this->bookingDayRepsScheduledForDeletion->contains($l)) {
                $this->bookingDayRepsScheduledForDeletion->remove($this->bookingDayRepsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBookingDayRep $bookingDayRep The ChildBookingDayRep object to add.
     */
    protected function doAddBookingDayRep(ChildBookingDayRep $bookingDayRep)
    {
        $this->collBookingDayReps[]= $bookingDayRep;
        $bookingDayRep->setSalesPerson($this);
    }

    /**
     * @param  ChildBookingDayRep $bookingDayRep The ChildBookingDayRep object to remove.
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function removeBookingDayRep(ChildBookingDayRep $bookingDayRep)
    {
        if ($this->getBookingDayReps()->contains($bookingDayRep)) {
            $pos = $this->collBookingDayReps->search($bookingDayRep);
            $this->collBookingDayReps->remove($pos);
            if (null === $this->bookingDayRepsScheduledForDeletion) {
                $this->bookingDayRepsScheduledForDeletion = clone $this->collBookingDayReps;
                $this->bookingDayRepsScheduledForDeletion->clear();
            }
            $this->bookingDayRepsScheduledForDeletion[]= clone $bookingDayRep;
            $bookingDayRep->setSalesPerson(null);
        }

        return $this;
    }

    /**
     * Clears out the collBookingSummaryReps collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookingSummaryReps()
     */
    public function clearBookingSummaryReps()
    {
        $this->collBookingSummaryReps = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookingSummaryReps collection loaded partially.
     */
    public function resetPartialBookingSummaryReps($v = true)
    {
        $this->collBookingSummaryRepsPartial = $v;
    }

    /**
     * Initializes the collBookingSummaryReps collection.
     *
     * By default this just sets the collBookingSummaryReps collection to an empty array (like clearcollBookingSummaryReps());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookingSummaryReps($overrideExisting = true)
    {
        if (null !== $this->collBookingSummaryReps && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingSummaryRepTableMap::getTableMap()->getCollectionClassName();

        $this->collBookingSummaryReps = new $collectionClassName;
        $this->collBookingSummaryReps->setModel('\BookingSummaryRep');
    }

    /**
     * Gets an array of ChildBookingSummaryRep objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSalesPerson is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBookingSummaryRep[] List of ChildBookingSummaryRep objects
     * @throws PropelException
     */
    public function getBookingSummaryReps(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingSummaryRepsPartial && !$this->isNew();
        if (null === $this->collBookingSummaryReps || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookingSummaryReps) {
                // return empty collection
                $this->initBookingSummaryReps();
            } else {
                $collBookingSummaryReps = ChildBookingSummaryRepQuery::create(null, $criteria)
                    ->filterBySalesPerson($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingSummaryRepsPartial && count($collBookingSummaryReps)) {
                        $this->initBookingSummaryReps(false);

                        foreach ($collBookingSummaryReps as $obj) {
                            if (false == $this->collBookingSummaryReps->contains($obj)) {
                                $this->collBookingSummaryReps->append($obj);
                            }
                        }

                        $this->collBookingSummaryRepsPartial = true;
                    }

                    return $collBookingSummaryReps;
                }

                if ($partial && $this->collBookingSummaryReps) {
                    foreach ($this->collBookingSummaryReps as $obj) {
                        if ($obj->isNew()) {
                            $collBookingSummaryReps[] = $obj;
                        }
                    }
                }

                $this->collBookingSummaryReps = $collBookingSummaryReps;
                $this->collBookingSummaryRepsPartial = false;
            }
        }

        return $this->collBookingSummaryReps;
    }

    /**
     * Sets a collection of ChildBookingSummaryRep objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookingSummaryReps A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function setBookingSummaryReps(Collection $bookingSummaryReps, ConnectionInterface $con = null)
    {
        /** @var ChildBookingSummaryRep[] $bookingSummaryRepsToDelete */
        $bookingSummaryRepsToDelete = $this->getBookingSummaryReps(new Criteria(), $con)->diff($bookingSummaryReps);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->bookingSummaryRepsScheduledForDeletion = clone $bookingSummaryRepsToDelete;

        foreach ($bookingSummaryRepsToDelete as $bookingSummaryRepRemoved) {
            $bookingSummaryRepRemoved->setSalesPerson(null);
        }

        $this->collBookingSummaryReps = null;
        foreach ($bookingSummaryReps as $bookingSummaryRep) {
            $this->addBookingSummaryRep($bookingSummaryRep);
        }

        $this->collBookingSummaryReps = $bookingSummaryReps;
        $this->collBookingSummaryRepsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BookingSummaryRep objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BookingSummaryRep objects.
     * @throws PropelException
     */
    public function countBookingSummaryReps(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingSummaryRepsPartial && !$this->isNew();
        if (null === $this->collBookingSummaryReps || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookingSummaryReps) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookingSummaryReps());
            }

            $query = ChildBookingSummaryRepQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesPerson($this)
                ->count($con);
        }

        return count($this->collBookingSummaryReps);
    }

    /**
     * Method called to associate a ChildBookingSummaryRep object to this object
     * through the ChildBookingSummaryRep foreign key attribute.
     *
     * @param  ChildBookingSummaryRep $l ChildBookingSummaryRep
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function addBookingSummaryRep(ChildBookingSummaryRep $l)
    {
        if ($this->collBookingSummaryReps === null) {
            $this->initBookingSummaryReps();
            $this->collBookingSummaryRepsPartial = true;
        }

        if (!$this->collBookingSummaryReps->contains($l)) {
            $this->doAddBookingSummaryRep($l);

            if ($this->bookingSummaryRepsScheduledForDeletion and $this->bookingSummaryRepsScheduledForDeletion->contains($l)) {
                $this->bookingSummaryRepsScheduledForDeletion->remove($this->bookingSummaryRepsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBookingSummaryRep $bookingSummaryRep The ChildBookingSummaryRep object to add.
     */
    protected function doAddBookingSummaryRep(ChildBookingSummaryRep $bookingSummaryRep)
    {
        $this->collBookingSummaryReps[]= $bookingSummaryRep;
        $bookingSummaryRep->setSalesPerson($this);
    }

    /**
     * @param  ChildBookingSummaryRep $bookingSummaryRep The ChildBookingSummaryRep object to remove.
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function removeBookingSummaryRep(ChildBookingSummaryRep $bookingSummaryRep)
    {
        if ($this->getBookingSummaryReps()->contains($bookingSummaryRep)) {
            $pos = $this->collBookingSummaryReps->search($bookingSummaryRep);
            $this->collBookingSummaryReps->remove($pos);
            if (null === $this->bookingSummaryRepsScheduledForDeletion) {
                $this->bookingSummaryRepsScheduledForDeletion = clone $this->collBookingSummaryReps;
                $this->bookingSummaryRepsScheduledForDeletion->clear();
            }
            $this->bookingSummaryRepsScheduledForDeletion[]= clone $bookingSummaryRep;
            $bookingSummaryRep->setSalesPerson(null);
        }

        return $this;
    }

    /**
     * Clears out the collBookings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookings()
     */
    public function clearBookings()
    {
        $this->collBookings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookings collection loaded partially.
     */
    public function resetPartialBookings($v = true)
    {
        $this->collBookingsPartial = $v;
    }

    /**
     * Initializes the collBookings collection.
     *
     * By default this just sets the collBookings collection to an empty array (like clearcollBookings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookings($overrideExisting = true)
    {
        if (null !== $this->collBookings && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingTableMap::getTableMap()->getCollectionClassName();

        $this->collBookings = new $collectionClassName;
        $this->collBookings->setModel('\Booking');
    }

    /**
     * Gets an array of ChildBooking objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSalesPerson is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBooking[] List of ChildBooking objects
     * @throws PropelException
     */
    public function getBookings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingsPartial && !$this->isNew();
        if (null === $this->collBookings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookings) {
                // return empty collection
                $this->initBookings();
            } else {
                $collBookings = ChildBookingQuery::create(null, $criteria)
                    ->filterBySalesPerson($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingsPartial && count($collBookings)) {
                        $this->initBookings(false);

                        foreach ($collBookings as $obj) {
                            if (false == $this->collBookings->contains($obj)) {
                                $this->collBookings->append($obj);
                            }
                        }

                        $this->collBookingsPartial = true;
                    }

                    return $collBookings;
                }

                if ($partial && $this->collBookings) {
                    foreach ($this->collBookings as $obj) {
                        if ($obj->isNew()) {
                            $collBookings[] = $obj;
                        }
                    }
                }

                $this->collBookings = $collBookings;
                $this->collBookingsPartial = false;
            }
        }

        return $this->collBookings;
    }

    /**
     * Sets a collection of ChildBooking objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function setBookings(Collection $bookings, ConnectionInterface $con = null)
    {
        /** @var ChildBooking[] $bookingsToDelete */
        $bookingsToDelete = $this->getBookings(new Criteria(), $con)->diff($bookings);


        $this->bookingsScheduledForDeletion = $bookingsToDelete;

        foreach ($bookingsToDelete as $bookingRemoved) {
            $bookingRemoved->setSalesPerson(null);
        }

        $this->collBookings = null;
        foreach ($bookings as $booking) {
            $this->addBooking($booking);
        }

        $this->collBookings = $bookings;
        $this->collBookingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Booking objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Booking objects.
     * @throws PropelException
     */
    public function countBookings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingsPartial && !$this->isNew();
        if (null === $this->collBookings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookings());
            }

            $query = ChildBookingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesPerson($this)
                ->count($con);
        }

        return count($this->collBookings);
    }

    /**
     * Method called to associate a ChildBooking object to this object
     * through the ChildBooking foreign key attribute.
     *
     * @param  ChildBooking $l ChildBooking
     * @return $this|\SalesPerson The current object (for fluent API support)
     */
    public function addBooking(ChildBooking $l)
    {
        if ($this->collBookings === null) {
            $this->initBookings();
            $this->collBookingsPartial = true;
        }

        if (!$this->collBookings->contains($l)) {
            $this->doAddBooking($l);

            if ($this->bookingsScheduledForDeletion and $this->bookingsScheduledForDeletion->contains($l)) {
                $this->bookingsScheduledForDeletion->remove($this->bookingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBooking $booking The ChildBooking object to add.
     */
    protected function doAddBooking(ChildBooking $booking)
    {
        $this->collBookings[]= $booking;
        $booking->setSalesPerson($this);
    }

    /**
     * @param  ChildBooking $booking The ChildBooking object to remove.
     * @return $this|ChildSalesPerson The current object (for fluent API support)
     */
    public function removeBooking(ChildBooking $booking)
    {
        if ($this->getBookings()->contains($booking)) {
            $pos = $this->collBookings->search($booking);
            $this->collBookings->remove($pos);
            if (null === $this->bookingsScheduledForDeletion) {
                $this->bookingsScheduledForDeletion = clone $this->collBookings;
                $this->bookingsScheduledForDeletion->clear();
            }
            $this->bookingsScheduledForDeletion[]= $booking;
            $booking->setSalesPerson(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesPerson is new, it will return
     * an empty collection; or if this SalesPerson has previously
     * been saved, it will retrieve related Bookings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesPerson.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBooking[] List of ChildBooking objects
     */
    public function getBookingsJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getBookings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesPerson is new, it will return
     * an empty collection; or if this SalesPerson has previously
     * been saved, it will retrieve related Bookings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesPerson.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBooking[] List of ChildBooking objects
     */
    public function getBookingsJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getBookings($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->arspsaleper1 = null;
        $this->arspname = null;
        $this->arspmtdsale = null;
        $this->arspytdsale = null;
        $this->arspltdsale = null;
        $this->arsplastsaledate = null;
        $this->arspmtdcommearn = null;
        $this->arspytdcommearn = null;
        $this->arspltdcommearn = null;
        $this->arspmtdcommpaid = null;
        $this->arspytdcommpaid = null;
        $this->arspltdcommpaid = null;
        $this->arspcommcycle = null;
        $this->arspgrup = null;
        $this->arsplogin = null;
        $this->arspmgr = null;
        $this->arspvendid = null;
        $this->arsprestrictaccess = null;
        $this->arspemailaddr = null;
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
            if ($this->collBookingDayCustomers) {
                foreach ($this->collBookingDayCustomers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBookingDayDetails) {
                foreach ($this->collBookingDayDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBookingDayReps) {
                foreach ($this->collBookingDayReps as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBookingSummaryReps) {
                foreach ($this->collBookingSummaryReps as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBookings) {
                foreach ($this->collBookings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collBookingDayCustomers = null;
        $this->collBookingDayDetails = null;
        $this->collBookingDayReps = null;
        $this->collBookingSummaryReps = null;
        $this->collBookings = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SalesPersonTableMap::DEFAULT_STRING_FORMAT);
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
