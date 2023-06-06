<?php

namespace Base;

use \ArContact as ChildArContact;
use \ArContactQuery as ChildArContactQuery;
use \Booking as ChildBooking;
use \BookingDayCustomer as ChildBookingDayCustomer;
use \BookingDayCustomerQuery as ChildBookingDayCustomerQuery;
use \BookingDayDetail as ChildBookingDayDetail;
use \BookingDayDetailQuery as ChildBookingDayDetailQuery;
use \BookingQuery as ChildBookingQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \SalesHistory as ChildSalesHistory;
use \SalesHistoryQuery as ChildSalesHistoryQuery;
use \SalesOrder as ChildSalesOrder;
use \SalesOrderQuery as ChildSalesOrderQuery;
use \SoStandingOrder as ChildSoStandingOrder;
use \SoStandingOrderDetail as ChildSoStandingOrderDetail;
use \SoStandingOrderDetailQuery as ChildSoStandingOrderDetailQuery;
use \SoStandingOrderQuery as ChildSoStandingOrderQuery;
use \Exception;
use \PDO;
use Map\ArContactTableMap;
use Map\BookingDayCustomerTableMap;
use Map\BookingDayDetailTableMap;
use Map\BookingTableMap;
use Map\CustomerShiptoTableMap;
use Map\SalesHistoryTableMap;
use Map\SalesOrderTableMap;
use Map\SoStandingOrderDetailTableMap;
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
 * Base class that represents a row from the 'ar_ship_to' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class CustomerShipto implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\CustomerShiptoTableMap';


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
     * The value for the arstname field.
     *
     * @var        string
     */
    protected $arstname;

    /**
     * The value for the arstadr1 field.
     *
     * @var        string
     */
    protected $arstadr1;

    /**
     * The value for the arstadr2 field.
     *
     * @var        string
     */
    protected $arstadr2;

    /**
     * The value for the arstadr3 field.
     *
     * @var        string
     */
    protected $arstadr3;

    /**
     * The value for the arstctry field.
     *
     * @var        string
     */
    protected $arstctry;

    /**
     * The value for the arstcity field.
     *
     * @var        string
     */
    protected $arstcity;

    /**
     * The value for the arststat field.
     *
     * @var        string
     */
    protected $arststat;

    /**
     * The value for the arstzipcode field.
     *
     * @var        string
     */
    protected $arstzipcode;

    /**
     * The value for the arstdeliverydays field.
     *
     * @var        int
     */
    protected $arstdeliverydays;

    /**
     * The value for the arstcommcode field.
     *
     * @var        string
     */
    protected $arstcommcode;

    /**
     * The value for the arstallowsplit field.
     *
     * @var        string
     */
    protected $arstallowsplit;

    /**
     * The value for the arstlindstsp field.
     *
     * @var        string
     */
    protected $arstlindstsp;

    /**
     * The value for the arstlmecommcustid field.
     *
     * @var        string
     */
    protected $arstlmecommcustid;

    /**
     * The value for the arstcatlgid field.
     *
     * @var        string
     */
    protected $arstcatlgid;

    /**
     * The value for the arspsaleper1 field.
     *
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the arspsaleper2 field.
     *
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the arspsaleper3 field.
     *
     * @var        string
     */
    protected $arspsaleper3;

    /**
     * The value for the artbmtaxcode field.
     *
     * @var        string
     */
    protected $artbmtaxcode;

    /**
     * The value for the arsttaxexemnbr field.
     *
     * @var        string
     */
    protected $arsttaxexemnbr;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the artbshipvia field.
     *
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the arstbord field.
     *
     * @var        string
     */
    protected $arstbord;

    /**
     * The value for the arstcredhold field.
     *
     * @var        string
     */
    protected $arstcredhold;

    /**
     * The value for the arstusercode field.
     *
     * @var        string
     */
    protected $arstusercode;

    /**
     * The value for the arstpriclvl field.
     *
     * @var        string
     */
    protected $arstpriclvl;

    /**
     * The value for the arstshipcomp field.
     *
     * @var        string
     */
    protected $arstshipcomp;

    /**
     * The value for the arsttxbl field.
     *
     * @var        string
     */
    protected $arsttxbl;

    /**
     * The value for the arstpostal field.
     *
     * @var        string
     */
    protected $arstpostal;

    /**
     * The value for the arstsalemtd field.
     *
     * @var        string
     */
    protected $arstsalemtd;

    /**
     * The value for the arstinvmtd field.
     *
     * @var        int
     */
    protected $arstinvmtd;

    /**
     * The value for the arstdateopen field.
     *
     * @var        string
     */
    protected $arstdateopen;

    /**
     * The value for the arstlastsaledate field.
     *
     * @var        string
     */
    protected $arstlastsaledate;

    /**
     * The value for the arstsale24mo1 field.
     *
     * @var        string
     */
    protected $arstsale24mo1;

    /**
     * The value for the arstinv24mo1 field.
     *
     * @var        int
     */
    protected $arstinv24mo1;

    /**
     * The value for the arstsale24mo2 field.
     *
     * @var        string
     */
    protected $arstsale24mo2;

    /**
     * The value for the arstinv24mo2 field.
     *
     * @var        int
     */
    protected $arstinv24mo2;

    /**
     * The value for the arstsale24mo3 field.
     *
     * @var        string
     */
    protected $arstsale24mo3;

    /**
     * The value for the arstinv24mo3 field.
     *
     * @var        int
     */
    protected $arstinv24mo3;

    /**
     * The value for the arstsale24mo4 field.
     *
     * @var        string
     */
    protected $arstsale24mo4;

    /**
     * The value for the arstinv24mo4 field.
     *
     * @var        int
     */
    protected $arstinv24mo4;

    /**
     * The value for the arstsale24mo5 field.
     *
     * @var        string
     */
    protected $arstsale24mo5;

    /**
     * The value for the arstinv24mo5 field.
     *
     * @var        int
     */
    protected $arstinv24mo5;

    /**
     * The value for the arstsale24mo6 field.
     *
     * @var        string
     */
    protected $arstsale24mo6;

    /**
     * The value for the arstinv24mo6 field.
     *
     * @var        int
     */
    protected $arstinv24mo6;

    /**
     * The value for the arstsale24mo7 field.
     *
     * @var        string
     */
    protected $arstsale24mo7;

    /**
     * The value for the arstinv24mo7 field.
     *
     * @var        int
     */
    protected $arstinv24mo7;

    /**
     * The value for the arstsale24mo8 field.
     *
     * @var        string
     */
    protected $arstsale24mo8;

    /**
     * The value for the arstinv24mo8 field.
     *
     * @var        int
     */
    protected $arstinv24mo8;

    /**
     * The value for the arstsale24mo9 field.
     *
     * @var        string
     */
    protected $arstsale24mo9;

    /**
     * The value for the arstinv24mo9 field.
     *
     * @var        int
     */
    protected $arstinv24mo9;

    /**
     * The value for the arstsale24mo10 field.
     *
     * @var        string
     */
    protected $arstsale24mo10;

    /**
     * The value for the arstinv24mo10 field.
     *
     * @var        int
     */
    protected $arstinv24mo10;

    /**
     * The value for the arstsale24mo11 field.
     *
     * @var        string
     */
    protected $arstsale24mo11;

    /**
     * The value for the arstinv24mo11 field.
     *
     * @var        int
     */
    protected $arstinv24mo11;

    /**
     * The value for the arstsale24mo12 field.
     *
     * @var        string
     */
    protected $arstsale24mo12;

    /**
     * The value for the arstinv24mo12 field.
     *
     * @var        int
     */
    protected $arstinv24mo12;

    /**
     * The value for the arstsale24mo13 field.
     *
     * @var        string
     */
    protected $arstsale24mo13;

    /**
     * The value for the arstinv24mo13 field.
     *
     * @var        int
     */
    protected $arstinv24mo13;

    /**
     * The value for the arstsale24mo14 field.
     *
     * @var        string
     */
    protected $arstsale24mo14;

    /**
     * The value for the arstinv24mo14 field.
     *
     * @var        int
     */
    protected $arstinv24mo14;

    /**
     * The value for the arstsale24mo15 field.
     *
     * @var        string
     */
    protected $arstsale24mo15;

    /**
     * The value for the arstinv24mo15 field.
     *
     * @var        int
     */
    protected $arstinv24mo15;

    /**
     * The value for the arstsale24mo16 field.
     *
     * @var        string
     */
    protected $arstsale24mo16;

    /**
     * The value for the arstinv24mo16 field.
     *
     * @var        int
     */
    protected $arstinv24mo16;

    /**
     * The value for the arstsale24mo17 field.
     *
     * @var        string
     */
    protected $arstsale24mo17;

    /**
     * The value for the arstinv24mo17 field.
     *
     * @var        int
     */
    protected $arstinv24mo17;

    /**
     * The value for the arstsale24mo18 field.
     *
     * @var        string
     */
    protected $arstsale24mo18;

    /**
     * The value for the arstinv24mo18 field.
     *
     * @var        int
     */
    protected $arstinv24mo18;

    /**
     * The value for the arstsale24mo19 field.
     *
     * @var        string
     */
    protected $arstsale24mo19;

    /**
     * The value for the arstinv24mo19 field.
     *
     * @var        int
     */
    protected $arstinv24mo19;

    /**
     * The value for the arstsale24mo20 field.
     *
     * @var        string
     */
    protected $arstsale24mo20;

    /**
     * The value for the arstinv24mo20 field.
     *
     * @var        int
     */
    protected $arstinv24mo20;

    /**
     * The value for the arstsale24mo21 field.
     *
     * @var        string
     */
    protected $arstsale24mo21;

    /**
     * The value for the arstinv24mo21 field.
     *
     * @var        int
     */
    protected $arstinv24mo21;

    /**
     * The value for the arstsale24mo22 field.
     *
     * @var        string
     */
    protected $arstsale24mo22;

    /**
     * The value for the arstinv24mo22 field.
     *
     * @var        int
     */
    protected $arstinv24mo22;

    /**
     * The value for the arstsale24mo23 field.
     *
     * @var        string
     */
    protected $arstsale24mo23;

    /**
     * The value for the arstinv24mo23 field.
     *
     * @var        int
     */
    protected $arstinv24mo23;

    /**
     * The value for the arstsale24mo24 field.
     *
     * @var        string
     */
    protected $arstsale24mo24;

    /**
     * The value for the arstinv24mo24 field.
     *
     * @var        int
     */
    protected $arstinv24mo24;

    /**
     * The value for the arstprimshipid field.
     *
     * @var        string
     */
    protected $arstprimshipid;

    /**
     * The value for the arstmyvendid field.
     *
     * @var        string
     */
    protected $arstmyvendid;

    /**
     * The value for the arstaddlpricdisc field.
     *
     * @var        string
     */
    protected $arstaddlpricdisc;

    /**
     * The value for the arstediinvc field.
     *
     * @var        string
     */
    protected $arstediinvc;

    /**
     * The value for the arstchrgfrt field.
     *
     * @var        string
     */
    protected $arstchrgfrt;

    /**
     * The value for the arstdistcntr field.
     *
     * @var        string
     */
    protected $arstdistcntr;

    /**
     * The value for the arstdunsnbr field.
     *
     * @var        string
     */
    protected $arstdunsnbr;

    /**
     * The value for the arstrfmlvalu field.
     *
     * @var        int
     */
    protected $arstrfmlvalu;

    /**
     * The value for the arstcustpopram field.
     *
     * @var        string
     */
    protected $arstcustpopram;

    /**
     * The value for the artbroutcode field.
     *
     * @var        string
     */
    protected $artbroutcode;

    /**
     * The value for the arstupsacctnbr field.
     *
     * @var        string
     */
    protected $arstupsacctnbr;

    /**
     * The value for the arstfobinputyn field.
     *
     * @var        string
     */
    protected $arstfobinputyn;

    /**
     * The value for the arstfobperlb field.
     *
     * @var        string
     */
    protected $arstfobperlb;

    /**
     * The value for the arstsaleytd field.
     *
     * @var        string
     */
    protected $arstsaleytd;

    /**
     * The value for the arstinvytd field.
     *
     * @var        int
     */
    protected $arstinvytd;

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
     * @var        ObjectCollection|ChildArContact[] Collection to store aggregation of ChildArContact objects.
     */
    protected $collArContacts;
    protected $collArContactsPartial;

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
     * @var        ObjectCollection|ChildBooking[] Collection to store aggregation of ChildBooking objects.
     */
    protected $collBookings;
    protected $collBookingsPartial;

    /**
     * @var        ObjectCollection|ChildSalesHistory[] Collection to store aggregation of ChildSalesHistory objects.
     */
    protected $collSalesHistories;
    protected $collSalesHistoriesPartial;

    /**
     * @var        ObjectCollection|ChildSalesOrder[] Collection to store aggregation of ChildSalesOrder objects.
     */
    protected $collSalesOrders;
    protected $collSalesOrdersPartial;

    /**
     * @var        ObjectCollection|ChildSoStandingOrderDetail[] Collection to store aggregation of ChildSoStandingOrderDetail objects.
     */
    protected $collSoStandingOrderDetails;
    protected $collSoStandingOrderDetailsPartial;

    /**
     * @var        ChildSoStandingOrder one-to-one related ChildSoStandingOrder object
     */
    protected $singleSoStandingOrder;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildArContact[]
     */
    protected $arContactsScheduledForDeletion = null;

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
     * @var ObjectCollection|ChildBooking[]
     */
    protected $bookingsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesHistory[]
     */
    protected $salesHistoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesOrder[]
     */
    protected $salesOrdersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSoStandingOrderDetail[]
     */
    protected $soStandingOrderDetailsScheduledForDeletion = null;

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
    }

    /**
     * Initializes internal state of Base\CustomerShipto object.
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
     * Compares this with another <code>CustomerShipto</code> instance.  If
     * <code>obj</code> is an instance of <code>CustomerShipto</code>, delegates to
     * <code>equals(CustomerShipto)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CustomerShipto The current object, for fluid interface
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
     * Get the [arstname] column value.
     *
     * @return string
     */
    public function getArstname()
    {
        return $this->arstname;
    }

    /**
     * Get the [arstadr1] column value.
     *
     * @return string
     */
    public function getArstadr1()
    {
        return $this->arstadr1;
    }

    /**
     * Get the [arstadr2] column value.
     *
     * @return string
     */
    public function getArstadr2()
    {
        return $this->arstadr2;
    }

    /**
     * Get the [arstadr3] column value.
     *
     * @return string
     */
    public function getArstadr3()
    {
        return $this->arstadr3;
    }

    /**
     * Get the [arstctry] column value.
     *
     * @return string
     */
    public function getArstctry()
    {
        return $this->arstctry;
    }

    /**
     * Get the [arstcity] column value.
     *
     * @return string
     */
    public function getArstcity()
    {
        return $this->arstcity;
    }

    /**
     * Get the [arststat] column value.
     *
     * @return string
     */
    public function getArststat()
    {
        return $this->arststat;
    }

    /**
     * Get the [arstzipcode] column value.
     *
     * @return string
     */
    public function getArstzipcode()
    {
        return $this->arstzipcode;
    }

    /**
     * Get the [arstdeliverydays] column value.
     *
     * @return int
     */
    public function getArstdeliverydays()
    {
        return $this->arstdeliverydays;
    }

    /**
     * Get the [arstcommcode] column value.
     *
     * @return string
     */
    public function getArstcommcode()
    {
        return $this->arstcommcode;
    }

    /**
     * Get the [arstallowsplit] column value.
     *
     * @return string
     */
    public function getArstallowsplit()
    {
        return $this->arstallowsplit;
    }

    /**
     * Get the [arstlindstsp] column value.
     *
     * @return string
     */
    public function getArstlindstsp()
    {
        return $this->arstlindstsp;
    }

    /**
     * Get the [arstlmecommcustid] column value.
     *
     * @return string
     */
    public function getArstlmecommcustid()
    {
        return $this->arstlmecommcustid;
    }

    /**
     * Get the [arstcatlgid] column value.
     *
     * @return string
     */
    public function getArstcatlgid()
    {
        return $this->arstcatlgid;
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
     * Get the [arspsaleper2] column value.
     *
     * @return string
     */
    public function getArspsaleper2()
    {
        return $this->arspsaleper2;
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
     * Get the [artbmtaxcode] column value.
     *
     * @return string
     */
    public function getArtbmtaxcode()
    {
        return $this->artbmtaxcode;
    }

    /**
     * Get the [arsttaxexemnbr] column value.
     *
     * @return string
     */
    public function getArsttaxexemnbr()
    {
        return $this->arsttaxexemnbr;
    }

    /**
     * Get the [intbwhse] column value.
     *
     * @return string
     */
    public function getIntbwhse()
    {
        return $this->intbwhse;
    }

    /**
     * Get the [artbshipvia] column value.
     *
     * @return string
     */
    public function getArtbshipvia()
    {
        return $this->artbshipvia;
    }

    /**
     * Get the [arstbord] column value.
     *
     * @return string
     */
    public function getArstbord()
    {
        return $this->arstbord;
    }

    /**
     * Get the [arstcredhold] column value.
     *
     * @return string
     */
    public function getArstcredhold()
    {
        return $this->arstcredhold;
    }

    /**
     * Get the [arstusercode] column value.
     *
     * @return string
     */
    public function getArstusercode()
    {
        return $this->arstusercode;
    }

    /**
     * Get the [arstpriclvl] column value.
     *
     * @return string
     */
    public function getArstpriclvl()
    {
        return $this->arstpriclvl;
    }

    /**
     * Get the [arstshipcomp] column value.
     *
     * @return string
     */
    public function getArstshipcomp()
    {
        return $this->arstshipcomp;
    }

    /**
     * Get the [arsttxbl] column value.
     *
     * @return string
     */
    public function getArsttxbl()
    {
        return $this->arsttxbl;
    }

    /**
     * Get the [arstpostal] column value.
     *
     * @return string
     */
    public function getArstpostal()
    {
        return $this->arstpostal;
    }

    /**
     * Get the [arstsalemtd] column value.
     *
     * @return string
     */
    public function getArstsalemtd()
    {
        return $this->arstsalemtd;
    }

    /**
     * Get the [arstinvmtd] column value.
     *
     * @return int
     */
    public function getArstinvmtd()
    {
        return $this->arstinvmtd;
    }

    /**
     * Get the [arstdateopen] column value.
     *
     * @return string
     */
    public function getArstdateopen()
    {
        return $this->arstdateopen;
    }

    /**
     * Get the [arstlastsaledate] column value.
     *
     * @return string
     */
    public function getArstlastsaledate()
    {
        return $this->arstlastsaledate;
    }

    /**
     * Get the [arstsale24mo1] column value.
     *
     * @return string
     */
    public function getArstsale24mo1()
    {
        return $this->arstsale24mo1;
    }

    /**
     * Get the [arstinv24mo1] column value.
     *
     * @return int
     */
    public function getArstinv24mo1()
    {
        return $this->arstinv24mo1;
    }

    /**
     * Get the [arstsale24mo2] column value.
     *
     * @return string
     */
    public function getArstsale24mo2()
    {
        return $this->arstsale24mo2;
    }

    /**
     * Get the [arstinv24mo2] column value.
     *
     * @return int
     */
    public function getArstinv24mo2()
    {
        return $this->arstinv24mo2;
    }

    /**
     * Get the [arstsale24mo3] column value.
     *
     * @return string
     */
    public function getArstsale24mo3()
    {
        return $this->arstsale24mo3;
    }

    /**
     * Get the [arstinv24mo3] column value.
     *
     * @return int
     */
    public function getArstinv24mo3()
    {
        return $this->arstinv24mo3;
    }

    /**
     * Get the [arstsale24mo4] column value.
     *
     * @return string
     */
    public function getArstsale24mo4()
    {
        return $this->arstsale24mo4;
    }

    /**
     * Get the [arstinv24mo4] column value.
     *
     * @return int
     */
    public function getArstinv24mo4()
    {
        return $this->arstinv24mo4;
    }

    /**
     * Get the [arstsale24mo5] column value.
     *
     * @return string
     */
    public function getArstsale24mo5()
    {
        return $this->arstsale24mo5;
    }

    /**
     * Get the [arstinv24mo5] column value.
     *
     * @return int
     */
    public function getArstinv24mo5()
    {
        return $this->arstinv24mo5;
    }

    /**
     * Get the [arstsale24mo6] column value.
     *
     * @return string
     */
    public function getArstsale24mo6()
    {
        return $this->arstsale24mo6;
    }

    /**
     * Get the [arstinv24mo6] column value.
     *
     * @return int
     */
    public function getArstinv24mo6()
    {
        return $this->arstinv24mo6;
    }

    /**
     * Get the [arstsale24mo7] column value.
     *
     * @return string
     */
    public function getArstsale24mo7()
    {
        return $this->arstsale24mo7;
    }

    /**
     * Get the [arstinv24mo7] column value.
     *
     * @return int
     */
    public function getArstinv24mo7()
    {
        return $this->arstinv24mo7;
    }

    /**
     * Get the [arstsale24mo8] column value.
     *
     * @return string
     */
    public function getArstsale24mo8()
    {
        return $this->arstsale24mo8;
    }

    /**
     * Get the [arstinv24mo8] column value.
     *
     * @return int
     */
    public function getArstinv24mo8()
    {
        return $this->arstinv24mo8;
    }

    /**
     * Get the [arstsale24mo9] column value.
     *
     * @return string
     */
    public function getArstsale24mo9()
    {
        return $this->arstsale24mo9;
    }

    /**
     * Get the [arstinv24mo9] column value.
     *
     * @return int
     */
    public function getArstinv24mo9()
    {
        return $this->arstinv24mo9;
    }

    /**
     * Get the [arstsale24mo10] column value.
     *
     * @return string
     */
    public function getArstsale24mo10()
    {
        return $this->arstsale24mo10;
    }

    /**
     * Get the [arstinv24mo10] column value.
     *
     * @return int
     */
    public function getArstinv24mo10()
    {
        return $this->arstinv24mo10;
    }

    /**
     * Get the [arstsale24mo11] column value.
     *
     * @return string
     */
    public function getArstsale24mo11()
    {
        return $this->arstsale24mo11;
    }

    /**
     * Get the [arstinv24mo11] column value.
     *
     * @return int
     */
    public function getArstinv24mo11()
    {
        return $this->arstinv24mo11;
    }

    /**
     * Get the [arstsale24mo12] column value.
     *
     * @return string
     */
    public function getArstsale24mo12()
    {
        return $this->arstsale24mo12;
    }

    /**
     * Get the [arstinv24mo12] column value.
     *
     * @return int
     */
    public function getArstinv24mo12()
    {
        return $this->arstinv24mo12;
    }

    /**
     * Get the [arstsale24mo13] column value.
     *
     * @return string
     */
    public function getArstsale24mo13()
    {
        return $this->arstsale24mo13;
    }

    /**
     * Get the [arstinv24mo13] column value.
     *
     * @return int
     */
    public function getArstinv24mo13()
    {
        return $this->arstinv24mo13;
    }

    /**
     * Get the [arstsale24mo14] column value.
     *
     * @return string
     */
    public function getArstsale24mo14()
    {
        return $this->arstsale24mo14;
    }

    /**
     * Get the [arstinv24mo14] column value.
     *
     * @return int
     */
    public function getArstinv24mo14()
    {
        return $this->arstinv24mo14;
    }

    /**
     * Get the [arstsale24mo15] column value.
     *
     * @return string
     */
    public function getArstsale24mo15()
    {
        return $this->arstsale24mo15;
    }

    /**
     * Get the [arstinv24mo15] column value.
     *
     * @return int
     */
    public function getArstinv24mo15()
    {
        return $this->arstinv24mo15;
    }

    /**
     * Get the [arstsale24mo16] column value.
     *
     * @return string
     */
    public function getArstsale24mo16()
    {
        return $this->arstsale24mo16;
    }

    /**
     * Get the [arstinv24mo16] column value.
     *
     * @return int
     */
    public function getArstinv24mo16()
    {
        return $this->arstinv24mo16;
    }

    /**
     * Get the [arstsale24mo17] column value.
     *
     * @return string
     */
    public function getArstsale24mo17()
    {
        return $this->arstsale24mo17;
    }

    /**
     * Get the [arstinv24mo17] column value.
     *
     * @return int
     */
    public function getArstinv24mo17()
    {
        return $this->arstinv24mo17;
    }

    /**
     * Get the [arstsale24mo18] column value.
     *
     * @return string
     */
    public function getArstsale24mo18()
    {
        return $this->arstsale24mo18;
    }

    /**
     * Get the [arstinv24mo18] column value.
     *
     * @return int
     */
    public function getArstinv24mo18()
    {
        return $this->arstinv24mo18;
    }

    /**
     * Get the [arstsale24mo19] column value.
     *
     * @return string
     */
    public function getArstsale24mo19()
    {
        return $this->arstsale24mo19;
    }

    /**
     * Get the [arstinv24mo19] column value.
     *
     * @return int
     */
    public function getArstinv24mo19()
    {
        return $this->arstinv24mo19;
    }

    /**
     * Get the [arstsale24mo20] column value.
     *
     * @return string
     */
    public function getArstsale24mo20()
    {
        return $this->arstsale24mo20;
    }

    /**
     * Get the [arstinv24mo20] column value.
     *
     * @return int
     */
    public function getArstinv24mo20()
    {
        return $this->arstinv24mo20;
    }

    /**
     * Get the [arstsale24mo21] column value.
     *
     * @return string
     */
    public function getArstsale24mo21()
    {
        return $this->arstsale24mo21;
    }

    /**
     * Get the [arstinv24mo21] column value.
     *
     * @return int
     */
    public function getArstinv24mo21()
    {
        return $this->arstinv24mo21;
    }

    /**
     * Get the [arstsale24mo22] column value.
     *
     * @return string
     */
    public function getArstsale24mo22()
    {
        return $this->arstsale24mo22;
    }

    /**
     * Get the [arstinv24mo22] column value.
     *
     * @return int
     */
    public function getArstinv24mo22()
    {
        return $this->arstinv24mo22;
    }

    /**
     * Get the [arstsale24mo23] column value.
     *
     * @return string
     */
    public function getArstsale24mo23()
    {
        return $this->arstsale24mo23;
    }

    /**
     * Get the [arstinv24mo23] column value.
     *
     * @return int
     */
    public function getArstinv24mo23()
    {
        return $this->arstinv24mo23;
    }

    /**
     * Get the [arstsale24mo24] column value.
     *
     * @return string
     */
    public function getArstsale24mo24()
    {
        return $this->arstsale24mo24;
    }

    /**
     * Get the [arstinv24mo24] column value.
     *
     * @return int
     */
    public function getArstinv24mo24()
    {
        return $this->arstinv24mo24;
    }

    /**
     * Get the [arstprimshipid] column value.
     *
     * @return string
     */
    public function getArstprimshipid()
    {
        return $this->arstprimshipid;
    }

    /**
     * Get the [arstmyvendid] column value.
     *
     * @return string
     */
    public function getArstmyvendid()
    {
        return $this->arstmyvendid;
    }

    /**
     * Get the [arstaddlpricdisc] column value.
     *
     * @return string
     */
    public function getArstaddlpricdisc()
    {
        return $this->arstaddlpricdisc;
    }

    /**
     * Get the [arstediinvc] column value.
     *
     * @return string
     */
    public function getArstediinvc()
    {
        return $this->arstediinvc;
    }

    /**
     * Get the [arstchrgfrt] column value.
     *
     * @return string
     */
    public function getArstchrgfrt()
    {
        return $this->arstchrgfrt;
    }

    /**
     * Get the [arstdistcntr] column value.
     *
     * @return string
     */
    public function getArstdistcntr()
    {
        return $this->arstdistcntr;
    }

    /**
     * Get the [arstdunsnbr] column value.
     *
     * @return string
     */
    public function getArstdunsnbr()
    {
        return $this->arstdunsnbr;
    }

    /**
     * Get the [arstrfmlvalu] column value.
     *
     * @return int
     */
    public function getArstrfmlvalu()
    {
        return $this->arstrfmlvalu;
    }

    /**
     * Get the [arstcustpopram] column value.
     *
     * @return string
     */
    public function getArstcustpopram()
    {
        return $this->arstcustpopram;
    }

    /**
     * Get the [artbroutcode] column value.
     *
     * @return string
     */
    public function getArtbroutcode()
    {
        return $this->artbroutcode;
    }

    /**
     * Get the [arstupsacctnbr] column value.
     *
     * @return string
     */
    public function getArstupsacctnbr()
    {
        return $this->arstupsacctnbr;
    }

    /**
     * Get the [arstfobinputyn] column value.
     *
     * @return string
     */
    public function getArstfobinputyn()
    {
        return $this->arstfobinputyn;
    }

    /**
     * Get the [arstfobperlb] column value.
     *
     * @return string
     */
    public function getArstfobperlb()
    {
        return $this->arstfobperlb;
    }

    /**
     * Get the [arstsaleytd] column value.
     *
     * @return string
     */
    public function getArstsaleytd()
    {
        return $this->arstsaleytd;
    }

    /**
     * Get the [arstinvytd] column value.
     *
     * @return int
     */
    public function getArstinvytd()
    {
        return $this->arstinvytd;
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
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arstshipid] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSHIPID] = true;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [arstname] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstname !== $v) {
            $this->arstname = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTNAME] = true;
        }

        return $this;
    } // setArstname()

    /**
     * Set the value of [arstadr1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstadr1 !== $v) {
            $this->arstadr1 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTADR1] = true;
        }

        return $this;
    } // setArstadr1()

    /**
     * Set the value of [arstadr2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstadr2 !== $v) {
            $this->arstadr2 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTADR2] = true;
        }

        return $this;
    } // setArstadr2()

    /**
     * Set the value of [arstadr3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstadr3 !== $v) {
            $this->arstadr3 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTADR3] = true;
        }

        return $this;
    } // setArstadr3()

    /**
     * Set the value of [arstctry] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstctry !== $v) {
            $this->arstctry = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTCTRY] = true;
        }

        return $this;
    } // setArstctry()

    /**
     * Set the value of [arstcity] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcity !== $v) {
            $this->arstcity = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTCITY] = true;
        }

        return $this;
    } // setArstcity()

    /**
     * Set the value of [arststat] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArststat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arststat !== $v) {
            $this->arststat = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSTAT] = true;
        }

        return $this;
    } // setArststat()

    /**
     * Set the value of [arstzipcode] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstzipcode !== $v) {
            $this->arstzipcode = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTZIPCODE] = true;
        }

        return $this;
    } // setArstzipcode()

    /**
     * Set the value of [arstdeliverydays] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstdeliverydays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstdeliverydays !== $v) {
            $this->arstdeliverydays = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS] = true;
        }

        return $this;
    } // setArstdeliverydays()

    /**
     * Set the value of [arstcommcode] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstcommcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcommcode !== $v) {
            $this->arstcommcode = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTCOMMCODE] = true;
        }

        return $this;
    } // setArstcommcode()

    /**
     * Set the value of [arstallowsplit] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstallowsplit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstallowsplit !== $v) {
            $this->arstallowsplit = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTALLOWSPLIT] = true;
        }

        return $this;
    } // setArstallowsplit()

    /**
     * Set the value of [arstlindstsp] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstlindstsp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstlindstsp !== $v) {
            $this->arstlindstsp = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTLINDSTSP] = true;
        }

        return $this;
    } // setArstlindstsp()

    /**
     * Set the value of [arstlmecommcustid] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstlmecommcustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstlmecommcustid !== $v) {
            $this->arstlmecommcustid = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID] = true;
        }

        return $this;
    } // setArstlmecommcustid()

    /**
     * Set the value of [arstcatlgid] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstcatlgid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcatlgid !== $v) {
            $this->arstcatlgid = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTCATLGID] = true;
        }

        return $this;
    } // setArstcatlgid()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [arsttaxexemnbr] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArsttaxexemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arsttaxexemnbr !== $v) {
            $this->arsttaxexemnbr = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR] = true;
        }

        return $this;
    } // setArsttaxexemnbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [arstbord] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstbord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstbord !== $v) {
            $this->arstbord = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTBORD] = true;
        }

        return $this;
    } // setArstbord()

    /**
     * Set the value of [arstcredhold] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstcredhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcredhold !== $v) {
            $this->arstcredhold = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTCREDHOLD] = true;
        }

        return $this;
    } // setArstcredhold()

    /**
     * Set the value of [arstusercode] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstusercode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstusercode !== $v) {
            $this->arstusercode = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTUSERCODE] = true;
        }

        return $this;
    } // setArstusercode()

    /**
     * Set the value of [arstpriclvl] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstpriclvl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstpriclvl !== $v) {
            $this->arstpriclvl = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTPRICLVL] = true;
        }

        return $this;
    } // setArstpriclvl()

    /**
     * Set the value of [arstshipcomp] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstshipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipcomp !== $v) {
            $this->arstshipcomp = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSHIPCOMP] = true;
        }

        return $this;
    } // setArstshipcomp()

    /**
     * Set the value of [arsttxbl] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArsttxbl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arsttxbl !== $v) {
            $this->arsttxbl = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTTXBL] = true;
        }

        return $this;
    } // setArsttxbl()

    /**
     * Set the value of [arstpostal] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstpostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstpostal !== $v) {
            $this->arstpostal = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTPOSTAL] = true;
        }

        return $this;
    } // setArstpostal()

    /**
     * Set the value of [arstsalemtd] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsalemtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsalemtd !== $v) {
            $this->arstsalemtd = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALEMTD] = true;
        }

        return $this;
    } // setArstsalemtd()

    /**
     * Set the value of [arstinvmtd] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinvmtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinvmtd !== $v) {
            $this->arstinvmtd = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINVMTD] = true;
        }

        return $this;
    } // setArstinvmtd()

    /**
     * Set the value of [arstdateopen] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstdateopen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstdateopen !== $v) {
            $this->arstdateopen = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTDATEOPEN] = true;
        }

        return $this;
    } // setArstdateopen()

    /**
     * Set the value of [arstlastsaledate] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstlastsaledate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstlastsaledate !== $v) {
            $this->arstlastsaledate = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTLASTSALEDATE] = true;
        }

        return $this;
    } // setArstlastsaledate()

    /**
     * Set the value of [arstsale24mo1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo1 !== $v) {
            $this->arstsale24mo1 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO1] = true;
        }

        return $this;
    } // setArstsale24mo1()

    /**
     * Set the value of [arstinv24mo1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo1 !== $v) {
            $this->arstinv24mo1 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO1] = true;
        }

        return $this;
    } // setArstinv24mo1()

    /**
     * Set the value of [arstsale24mo2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo2 !== $v) {
            $this->arstsale24mo2 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO2] = true;
        }

        return $this;
    } // setArstsale24mo2()

    /**
     * Set the value of [arstinv24mo2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo2 !== $v) {
            $this->arstinv24mo2 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO2] = true;
        }

        return $this;
    } // setArstinv24mo2()

    /**
     * Set the value of [arstsale24mo3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo3 !== $v) {
            $this->arstsale24mo3 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO3] = true;
        }

        return $this;
    } // setArstsale24mo3()

    /**
     * Set the value of [arstinv24mo3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo3 !== $v) {
            $this->arstinv24mo3 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO3] = true;
        }

        return $this;
    } // setArstinv24mo3()

    /**
     * Set the value of [arstsale24mo4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo4 !== $v) {
            $this->arstsale24mo4 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO4] = true;
        }

        return $this;
    } // setArstsale24mo4()

    /**
     * Set the value of [arstinv24mo4] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo4 !== $v) {
            $this->arstinv24mo4 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO4] = true;
        }

        return $this;
    } // setArstinv24mo4()

    /**
     * Set the value of [arstsale24mo5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo5 !== $v) {
            $this->arstsale24mo5 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO5] = true;
        }

        return $this;
    } // setArstsale24mo5()

    /**
     * Set the value of [arstinv24mo5] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo5 !== $v) {
            $this->arstinv24mo5 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO5] = true;
        }

        return $this;
    } // setArstinv24mo5()

    /**
     * Set the value of [arstsale24mo6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo6 !== $v) {
            $this->arstsale24mo6 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO6] = true;
        }

        return $this;
    } // setArstsale24mo6()

    /**
     * Set the value of [arstinv24mo6] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo6 !== $v) {
            $this->arstinv24mo6 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO6] = true;
        }

        return $this;
    } // setArstinv24mo6()

    /**
     * Set the value of [arstsale24mo7] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo7 !== $v) {
            $this->arstsale24mo7 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO7] = true;
        }

        return $this;
    } // setArstsale24mo7()

    /**
     * Set the value of [arstinv24mo7] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo7($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo7 !== $v) {
            $this->arstinv24mo7 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO7] = true;
        }

        return $this;
    } // setArstinv24mo7()

    /**
     * Set the value of [arstsale24mo8] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo8 !== $v) {
            $this->arstsale24mo8 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO8] = true;
        }

        return $this;
    } // setArstsale24mo8()

    /**
     * Set the value of [arstinv24mo8] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo8($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo8 !== $v) {
            $this->arstinv24mo8 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO8] = true;
        }

        return $this;
    } // setArstinv24mo8()

    /**
     * Set the value of [arstsale24mo9] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo9 !== $v) {
            $this->arstsale24mo9 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO9] = true;
        }

        return $this;
    } // setArstsale24mo9()

    /**
     * Set the value of [arstinv24mo9] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo9($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo9 !== $v) {
            $this->arstinv24mo9 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO9] = true;
        }

        return $this;
    } // setArstinv24mo9()

    /**
     * Set the value of [arstsale24mo10] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo10 !== $v) {
            $this->arstsale24mo10 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO10] = true;
        }

        return $this;
    } // setArstsale24mo10()

    /**
     * Set the value of [arstinv24mo10] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo10 !== $v) {
            $this->arstinv24mo10 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO10] = true;
        }

        return $this;
    } // setArstinv24mo10()

    /**
     * Set the value of [arstsale24mo11] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo11 !== $v) {
            $this->arstsale24mo11 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO11] = true;
        }

        return $this;
    } // setArstsale24mo11()

    /**
     * Set the value of [arstinv24mo11] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo11($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo11 !== $v) {
            $this->arstinv24mo11 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO11] = true;
        }

        return $this;
    } // setArstinv24mo11()

    /**
     * Set the value of [arstsale24mo12] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo12 !== $v) {
            $this->arstsale24mo12 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO12] = true;
        }

        return $this;
    } // setArstsale24mo12()

    /**
     * Set the value of [arstinv24mo12] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo12($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo12 !== $v) {
            $this->arstinv24mo12 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO12] = true;
        }

        return $this;
    } // setArstinv24mo12()

    /**
     * Set the value of [arstsale24mo13] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo13 !== $v) {
            $this->arstsale24mo13 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO13] = true;
        }

        return $this;
    } // setArstsale24mo13()

    /**
     * Set the value of [arstinv24mo13] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo13($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo13 !== $v) {
            $this->arstinv24mo13 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO13] = true;
        }

        return $this;
    } // setArstinv24mo13()

    /**
     * Set the value of [arstsale24mo14] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo14 !== $v) {
            $this->arstsale24mo14 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO14] = true;
        }

        return $this;
    } // setArstsale24mo14()

    /**
     * Set the value of [arstinv24mo14] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo14($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo14 !== $v) {
            $this->arstinv24mo14 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO14] = true;
        }

        return $this;
    } // setArstinv24mo14()

    /**
     * Set the value of [arstsale24mo15] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo15 !== $v) {
            $this->arstsale24mo15 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO15] = true;
        }

        return $this;
    } // setArstsale24mo15()

    /**
     * Set the value of [arstinv24mo15] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo15($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo15 !== $v) {
            $this->arstinv24mo15 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO15] = true;
        }

        return $this;
    } // setArstinv24mo15()

    /**
     * Set the value of [arstsale24mo16] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo16 !== $v) {
            $this->arstsale24mo16 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO16] = true;
        }

        return $this;
    } // setArstsale24mo16()

    /**
     * Set the value of [arstinv24mo16] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo16($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo16 !== $v) {
            $this->arstinv24mo16 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO16] = true;
        }

        return $this;
    } // setArstinv24mo16()

    /**
     * Set the value of [arstsale24mo17] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo17 !== $v) {
            $this->arstsale24mo17 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO17] = true;
        }

        return $this;
    } // setArstsale24mo17()

    /**
     * Set the value of [arstinv24mo17] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo17($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo17 !== $v) {
            $this->arstinv24mo17 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO17] = true;
        }

        return $this;
    } // setArstinv24mo17()

    /**
     * Set the value of [arstsale24mo18] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo18 !== $v) {
            $this->arstsale24mo18 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO18] = true;
        }

        return $this;
    } // setArstsale24mo18()

    /**
     * Set the value of [arstinv24mo18] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo18($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo18 !== $v) {
            $this->arstinv24mo18 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO18] = true;
        }

        return $this;
    } // setArstinv24mo18()

    /**
     * Set the value of [arstsale24mo19] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo19 !== $v) {
            $this->arstsale24mo19 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO19] = true;
        }

        return $this;
    } // setArstsale24mo19()

    /**
     * Set the value of [arstinv24mo19] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo19($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo19 !== $v) {
            $this->arstinv24mo19 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO19] = true;
        }

        return $this;
    } // setArstinv24mo19()

    /**
     * Set the value of [arstsale24mo20] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo20($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo20 !== $v) {
            $this->arstsale24mo20 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO20] = true;
        }

        return $this;
    } // setArstsale24mo20()

    /**
     * Set the value of [arstinv24mo20] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo20($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo20 !== $v) {
            $this->arstinv24mo20 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO20] = true;
        }

        return $this;
    } // setArstinv24mo20()

    /**
     * Set the value of [arstsale24mo21] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo21($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo21 !== $v) {
            $this->arstsale24mo21 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO21] = true;
        }

        return $this;
    } // setArstsale24mo21()

    /**
     * Set the value of [arstinv24mo21] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo21($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo21 !== $v) {
            $this->arstinv24mo21 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO21] = true;
        }

        return $this;
    } // setArstinv24mo21()

    /**
     * Set the value of [arstsale24mo22] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo22($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo22 !== $v) {
            $this->arstsale24mo22 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO22] = true;
        }

        return $this;
    } // setArstsale24mo22()

    /**
     * Set the value of [arstinv24mo22] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo22($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo22 !== $v) {
            $this->arstinv24mo22 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO22] = true;
        }

        return $this;
    } // setArstinv24mo22()

    /**
     * Set the value of [arstsale24mo23] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo23($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo23 !== $v) {
            $this->arstsale24mo23 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO23] = true;
        }

        return $this;
    } // setArstsale24mo23()

    /**
     * Set the value of [arstinv24mo23] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo23($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo23 !== $v) {
            $this->arstinv24mo23 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO23] = true;
        }

        return $this;
    } // setArstinv24mo23()

    /**
     * Set the value of [arstsale24mo24] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsale24mo24($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsale24mo24 !== $v) {
            $this->arstsale24mo24 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALE24MO24] = true;
        }

        return $this;
    } // setArstsale24mo24()

    /**
     * Set the value of [arstinv24mo24] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinv24mo24($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinv24mo24 !== $v) {
            $this->arstinv24mo24 = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINV24MO24] = true;
        }

        return $this;
    } // setArstinv24mo24()

    /**
     * Set the value of [arstprimshipid] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstprimshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstprimshipid !== $v) {
            $this->arstprimshipid = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTPRIMSHIPID] = true;
        }

        return $this;
    } // setArstprimshipid()

    /**
     * Set the value of [arstmyvendid] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstmyvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstmyvendid !== $v) {
            $this->arstmyvendid = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTMYVENDID] = true;
        }

        return $this;
    } // setArstmyvendid()

    /**
     * Set the value of [arstaddlpricdisc] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstaddlpricdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstaddlpricdisc !== $v) {
            $this->arstaddlpricdisc = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTADDLPRICDISC] = true;
        }

        return $this;
    } // setArstaddlpricdisc()

    /**
     * Set the value of [arstediinvc] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstediinvc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstediinvc !== $v) {
            $this->arstediinvc = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTEDIINVC] = true;
        }

        return $this;
    } // setArstediinvc()

    /**
     * Set the value of [arstchrgfrt] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstchrgfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstchrgfrt !== $v) {
            $this->arstchrgfrt = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTCHRGFRT] = true;
        }

        return $this;
    } // setArstchrgfrt()

    /**
     * Set the value of [arstdistcntr] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstdistcntr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstdistcntr !== $v) {
            $this->arstdistcntr = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTDISTCNTR] = true;
        }

        return $this;
    } // setArstdistcntr()

    /**
     * Set the value of [arstdunsnbr] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstdunsnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstdunsnbr !== $v) {
            $this->arstdunsnbr = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTDUNSNBR] = true;
        }

        return $this;
    } // setArstdunsnbr()

    /**
     * Set the value of [arstrfmlvalu] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstrfmlvalu($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstrfmlvalu !== $v) {
            $this->arstrfmlvalu = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTRFMLVALU] = true;
        }

        return $this;
    } // setArstrfmlvalu()

    /**
     * Set the value of [arstcustpopram] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstcustpopram($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcustpopram !== $v) {
            $this->arstcustpopram = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTCUSTPOPRAM] = true;
        }

        return $this;
    } // setArstcustpopram()

    /**
     * Set the value of [artbroutcode] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArtbroutcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbroutcode !== $v) {
            $this->artbroutcode = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARTBROUTCODE] = true;
        }

        return $this;
    } // setArtbroutcode()

    /**
     * Set the value of [arstupsacctnbr] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstupsacctnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstupsacctnbr !== $v) {
            $this->arstupsacctnbr = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTUPSACCTNBR] = true;
        }

        return $this;
    } // setArstupsacctnbr()

    /**
     * Set the value of [arstfobinputyn] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstfobinputyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstfobinputyn !== $v) {
            $this->arstfobinputyn = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTFOBINPUTYN] = true;
        }

        return $this;
    } // setArstfobinputyn()

    /**
     * Set the value of [arstfobperlb] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstfobperlb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstfobperlb !== $v) {
            $this->arstfobperlb = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTFOBPERLB] = true;
        }

        return $this;
    } // setArstfobperlb()

    /**
     * Set the value of [arstsaleytd] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstsaleytd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsaleytd !== $v) {
            $this->arstsaleytd = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTSALEYTD] = true;
        }

        return $this;
    } // setArstsaleytd()

    /**
     * Set the value of [arstinvytd] column.
     *
     * @param int $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setArstinvytd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinvytd !== $v) {
            $this->arstinvytd = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_ARSTINVYTD] = true;
        }

        return $this;
    } // setArstinvytd()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[CustomerShiptoTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CustomerShiptoTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CustomerShiptoTableMap::translateFieldName('Arststat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arststat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstdeliverydays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstdeliverydays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstcommcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcommcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstallowsplit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstallowsplit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstlindstsp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstlindstsp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstlmecommcustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstlmecommcustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstcatlgid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcatlgid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CustomerShiptoTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CustomerShiptoTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CustomerShiptoTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CustomerShiptoTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CustomerShiptoTableMap::translateFieldName('Arsttaxexemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arsttaxexemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CustomerShiptoTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CustomerShiptoTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstbord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstbord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstcredhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcredhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstusercode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstusercode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstpriclvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstpriclvl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstshipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CustomerShiptoTableMap::translateFieldName('Arsttxbl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arsttxbl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstpostal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstpostal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsalemtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsalemtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinvmtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinvmtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstdateopen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstdateopen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstlastsaledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstlastsaledate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo7 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo8 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo9 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo11 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo12 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo13 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo14 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo15 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo16 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo17 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo18 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo19 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo20 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo20 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo21 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo21 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo22 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo22 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo23 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo23 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsale24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsale24mo24 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinv24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinv24mo24 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstprimshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstprimshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstmyvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstmyvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstaddlpricdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstaddlpricdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstediinvc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstediinvc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstchrgfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstchrgfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstdistcntr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstdistcntr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstdunsnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstdunsnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstrfmlvalu', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstrfmlvalu = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstcustpopram', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcustpopram = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : CustomerShiptoTableMap::translateFieldName('Artbroutcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbroutcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstupsacctnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstupsacctnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstfobinputyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstfobinputyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstfobperlb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstfobperlb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstsaleytd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsaleytd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : CustomerShiptoTableMap::translateFieldName('Arstinvytd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinvytd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : CustomerShiptoTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : CustomerShiptoTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : CustomerShiptoTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 100; // 100 = CustomerShiptoTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CustomerShipto'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CustomerShiptoTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCustomerShiptoQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->collArContacts = null;

            $this->collBookingDayCustomers = null;

            $this->collBookingDayDetails = null;

            $this->collBookings = null;

            $this->collSalesHistories = null;

            $this->collSalesOrders = null;

            $this->collSoStandingOrderDetails = null;

            $this->singleSoStandingOrder = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see CustomerShipto::setDeleted()
     * @see CustomerShipto::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerShiptoTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCustomerShiptoQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerShiptoTableMap::DATABASE_NAME);
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
                CustomerShiptoTableMap::addInstanceToPool($this);
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

            if ($this->arContactsScheduledForDeletion !== null) {
                if (!$this->arContactsScheduledForDeletion->isEmpty()) {
                    \ArContactQuery::create()
                        ->filterByPrimaryKeys($this->arContactsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->arContactsScheduledForDeletion = null;
                }
            }

            if ($this->collArContacts !== null) {
                foreach ($this->collArContacts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
                    \BookingDayDetailQuery::create()
                        ->filterByPrimaryKeys($this->bookingDayDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
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

            if ($this->salesHistoriesScheduledForDeletion !== null) {
                if (!$this->salesHistoriesScheduledForDeletion->isEmpty()) {
                    \SalesHistoryQuery::create()
                        ->filterByPrimaryKeys($this->salesHistoriesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesHistoriesScheduledForDeletion = null;
                }
            }

            if ($this->collSalesHistories !== null) {
                foreach ($this->collSalesHistories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesOrdersScheduledForDeletion !== null) {
                if (!$this->salesOrdersScheduledForDeletion->isEmpty()) {
                    \SalesOrderQuery::create()
                        ->filterByPrimaryKeys($this->salesOrdersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesOrdersScheduledForDeletion = null;
                }
            }

            if ($this->collSalesOrders !== null) {
                foreach ($this->collSalesOrders as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->soStandingOrderDetailsScheduledForDeletion !== null) {
                if (!$this->soStandingOrderDetailsScheduledForDeletion->isEmpty()) {
                    \SoStandingOrderDetailQuery::create()
                        ->filterByPrimaryKeys($this->soStandingOrderDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->soStandingOrderDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collSoStandingOrderDetails !== null) {
                foreach ($this->collSoStandingOrderDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleSoStandingOrder !== null) {
                if (!$this->singleSoStandingOrder->isDeleted() && ($this->singleSoStandingOrder->isNew() || $this->singleSoStandingOrder->isModified())) {
                    $affectedRows += $this->singleSoStandingOrder->save($con);
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
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ArstName';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAdr1';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAdr2';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAdr3';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCtry';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCity';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ArstStat';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArstZipCode';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArstDeliveryDays';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCOMMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCommCode';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTALLOWSPLIT)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAllowSplit';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTLINDSTSP)) {
            $modifiedColumns[':p' . $index++]  = 'ArstLindstSp';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstLmEcommCustId';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCATLGID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCatlgId';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer3';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxCode';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArstTaxExemNbr';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTBORD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstBord';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCREDHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCredHold';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTUSERCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArstUserCode';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTPRICLVL)) {
            $modifiedColumns[':p' . $index++]  = 'ArstPricLvl';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipComp';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTTXBL)) {
            $modifiedColumns[':p' . $index++]  = 'ArstTxbl';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArstPostal';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALEMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSaleMtd';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINVMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInvMtd';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTDATEOPEN)) {
            $modifiedColumns[':p' . $index++]  = 'ArstDateOpen';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTLASTSALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArstLastSaleDate';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO1)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo1';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO1)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo1';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO2)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo2';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO2)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo2';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO3)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo3';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO3)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo3';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO4)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo4';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO4)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo4';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO5)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo5';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO5)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo5';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO6)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo6';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO6)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo6';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO7)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo7';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO7)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo7';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO8)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo8';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO8)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo8';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO9)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo9';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO9)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo9';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo10';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo10';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo11';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo11';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo12';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo12';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo13';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo13';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo14';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo14';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo15';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo15';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo16';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo16';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo17';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo17';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo18';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo18';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo19';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo19';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo20';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo20';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo21';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo21';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo22';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo22';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo23';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo23';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSale24mo24';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInv24mo24';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTPRIMSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstPrimShipId';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTMYVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstMyVendId';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTADDLPRICDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAddlPricDisc';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTEDIINVC)) {
            $modifiedColumns[':p' . $index++]  = 'ArstEdiInvc';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCHRGFRT)) {
            $modifiedColumns[':p' . $index++]  = 'ArstChrgFrt';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTDISTCNTR)) {
            $modifiedColumns[':p' . $index++]  = 'ArstDistCntr';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTDUNSNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArstDunsNbr';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTRFMLVALU)) {
            $modifiedColumns[':p' . $index++]  = 'ArstRfmlValu';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCUSTPOPRAM)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCustPOPram';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARTBROUTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbRoutCode';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTUPSACCTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArstUpsAcctNbr';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTFOBINPUTYN)) {
            $modifiedColumns[':p' . $index++]  = 'ArstFobInputYn';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTFOBPERLB)) {
            $modifiedColumns[':p' . $index++]  = 'ArstFobPerLb';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALEYTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSaleYtd';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINVYTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInvYtd';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_ship_to (%s) VALUES (%s)',
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
                    case 'ArstName':
                        $stmt->bindValue($identifier, $this->arstname, PDO::PARAM_STR);
                        break;
                    case 'ArstAdr1':
                        $stmt->bindValue($identifier, $this->arstadr1, PDO::PARAM_STR);
                        break;
                    case 'ArstAdr2':
                        $stmt->bindValue($identifier, $this->arstadr2, PDO::PARAM_STR);
                        break;
                    case 'ArstAdr3':
                        $stmt->bindValue($identifier, $this->arstadr3, PDO::PARAM_STR);
                        break;
                    case 'ArstCtry':
                        $stmt->bindValue($identifier, $this->arstctry, PDO::PARAM_STR);
                        break;
                    case 'ArstCity':
                        $stmt->bindValue($identifier, $this->arstcity, PDO::PARAM_STR);
                        break;
                    case 'ArstStat':
                        $stmt->bindValue($identifier, $this->arststat, PDO::PARAM_STR);
                        break;
                    case 'ArstZipCode':
                        $stmt->bindValue($identifier, $this->arstzipcode, PDO::PARAM_STR);
                        break;
                    case 'ArstDeliveryDays':
                        $stmt->bindValue($identifier, $this->arstdeliverydays, PDO::PARAM_INT);
                        break;
                    case 'ArstCommCode':
                        $stmt->bindValue($identifier, $this->arstcommcode, PDO::PARAM_STR);
                        break;
                    case 'ArstAllowSplit':
                        $stmt->bindValue($identifier, $this->arstallowsplit, PDO::PARAM_STR);
                        break;
                    case 'ArstLindstSp':
                        $stmt->bindValue($identifier, $this->arstlindstsp, PDO::PARAM_STR);
                        break;
                    case 'ArstLmEcommCustId':
                        $stmt->bindValue($identifier, $this->arstlmecommcustid, PDO::PARAM_STR);
                        break;
                    case 'ArstCatlgId':
                        $stmt->bindValue($identifier, $this->arstcatlgid, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'ArstTaxExemNbr':
                        $stmt->bindValue($identifier, $this->arsttaxexemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'ArstBord':
                        $stmt->bindValue($identifier, $this->arstbord, PDO::PARAM_STR);
                        break;
                    case 'ArstCredHold':
                        $stmt->bindValue($identifier, $this->arstcredhold, PDO::PARAM_STR);
                        break;
                    case 'ArstUserCode':
                        $stmt->bindValue($identifier, $this->arstusercode, PDO::PARAM_STR);
                        break;
                    case 'ArstPricLvl':
                        $stmt->bindValue($identifier, $this->arstpriclvl, PDO::PARAM_STR);
                        break;
                    case 'ArstShipComp':
                        $stmt->bindValue($identifier, $this->arstshipcomp, PDO::PARAM_STR);
                        break;
                    case 'ArstTxbl':
                        $stmt->bindValue($identifier, $this->arsttxbl, PDO::PARAM_STR);
                        break;
                    case 'ArstPostal':
                        $stmt->bindValue($identifier, $this->arstpostal, PDO::PARAM_STR);
                        break;
                    case 'ArstSaleMtd':
                        $stmt->bindValue($identifier, $this->arstsalemtd, PDO::PARAM_STR);
                        break;
                    case 'ArstInvMtd':
                        $stmt->bindValue($identifier, $this->arstinvmtd, PDO::PARAM_INT);
                        break;
                    case 'ArstDateOpen':
                        $stmt->bindValue($identifier, $this->arstdateopen, PDO::PARAM_STR);
                        break;
                    case 'ArstLastSaleDate':
                        $stmt->bindValue($identifier, $this->arstlastsaledate, PDO::PARAM_STR);
                        break;
                    case 'ArstSale24mo1':
                        $stmt->bindValue($identifier, $this->arstsale24mo1, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo1':
                        $stmt->bindValue($identifier, $this->arstinv24mo1, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo2':
                        $stmt->bindValue($identifier, $this->arstsale24mo2, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo2':
                        $stmt->bindValue($identifier, $this->arstinv24mo2, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo3':
                        $stmt->bindValue($identifier, $this->arstsale24mo3, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo3':
                        $stmt->bindValue($identifier, $this->arstinv24mo3, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo4':
                        $stmt->bindValue($identifier, $this->arstsale24mo4, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo4':
                        $stmt->bindValue($identifier, $this->arstinv24mo4, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo5':
                        $stmt->bindValue($identifier, $this->arstsale24mo5, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo5':
                        $stmt->bindValue($identifier, $this->arstinv24mo5, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo6':
                        $stmt->bindValue($identifier, $this->arstsale24mo6, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo6':
                        $stmt->bindValue($identifier, $this->arstinv24mo6, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo7':
                        $stmt->bindValue($identifier, $this->arstsale24mo7, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo7':
                        $stmt->bindValue($identifier, $this->arstinv24mo7, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo8':
                        $stmt->bindValue($identifier, $this->arstsale24mo8, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo8':
                        $stmt->bindValue($identifier, $this->arstinv24mo8, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo9':
                        $stmt->bindValue($identifier, $this->arstsale24mo9, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo9':
                        $stmt->bindValue($identifier, $this->arstinv24mo9, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo10':
                        $stmt->bindValue($identifier, $this->arstsale24mo10, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo10':
                        $stmt->bindValue($identifier, $this->arstinv24mo10, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo11':
                        $stmt->bindValue($identifier, $this->arstsale24mo11, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo11':
                        $stmt->bindValue($identifier, $this->arstinv24mo11, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo12':
                        $stmt->bindValue($identifier, $this->arstsale24mo12, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo12':
                        $stmt->bindValue($identifier, $this->arstinv24mo12, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo13':
                        $stmt->bindValue($identifier, $this->arstsale24mo13, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo13':
                        $stmt->bindValue($identifier, $this->arstinv24mo13, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo14':
                        $stmt->bindValue($identifier, $this->arstsale24mo14, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo14':
                        $stmt->bindValue($identifier, $this->arstinv24mo14, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo15':
                        $stmt->bindValue($identifier, $this->arstsale24mo15, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo15':
                        $stmt->bindValue($identifier, $this->arstinv24mo15, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo16':
                        $stmt->bindValue($identifier, $this->arstsale24mo16, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo16':
                        $stmt->bindValue($identifier, $this->arstinv24mo16, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo17':
                        $stmt->bindValue($identifier, $this->arstsale24mo17, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo17':
                        $stmt->bindValue($identifier, $this->arstinv24mo17, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo18':
                        $stmt->bindValue($identifier, $this->arstsale24mo18, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo18':
                        $stmt->bindValue($identifier, $this->arstinv24mo18, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo19':
                        $stmt->bindValue($identifier, $this->arstsale24mo19, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo19':
                        $stmt->bindValue($identifier, $this->arstinv24mo19, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo20':
                        $stmt->bindValue($identifier, $this->arstsale24mo20, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo20':
                        $stmt->bindValue($identifier, $this->arstinv24mo20, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo21':
                        $stmt->bindValue($identifier, $this->arstsale24mo21, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo21':
                        $stmt->bindValue($identifier, $this->arstinv24mo21, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo22':
                        $stmt->bindValue($identifier, $this->arstsale24mo22, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo22':
                        $stmt->bindValue($identifier, $this->arstinv24mo22, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo23':
                        $stmt->bindValue($identifier, $this->arstsale24mo23, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo23':
                        $stmt->bindValue($identifier, $this->arstinv24mo23, PDO::PARAM_INT);
                        break;
                    case 'ArstSale24mo24':
                        $stmt->bindValue($identifier, $this->arstsale24mo24, PDO::PARAM_STR);
                        break;
                    case 'ArstInv24mo24':
                        $stmt->bindValue($identifier, $this->arstinv24mo24, PDO::PARAM_INT);
                        break;
                    case 'ArstPrimShipId':
                        $stmt->bindValue($identifier, $this->arstprimshipid, PDO::PARAM_STR);
                        break;
                    case 'ArstMyVendId':
                        $stmt->bindValue($identifier, $this->arstmyvendid, PDO::PARAM_STR);
                        break;
                    case 'ArstAddlPricDisc':
                        $stmt->bindValue($identifier, $this->arstaddlpricdisc, PDO::PARAM_STR);
                        break;
                    case 'ArstEdiInvc':
                        $stmt->bindValue($identifier, $this->arstediinvc, PDO::PARAM_STR);
                        break;
                    case 'ArstChrgFrt':
                        $stmt->bindValue($identifier, $this->arstchrgfrt, PDO::PARAM_STR);
                        break;
                    case 'ArstDistCntr':
                        $stmt->bindValue($identifier, $this->arstdistcntr, PDO::PARAM_STR);
                        break;
                    case 'ArstDunsNbr':
                        $stmt->bindValue($identifier, $this->arstdunsnbr, PDO::PARAM_STR);
                        break;
                    case 'ArstRfmlValu':
                        $stmt->bindValue($identifier, $this->arstrfmlvalu, PDO::PARAM_INT);
                        break;
                    case 'ArstCustPOPram':
                        $stmt->bindValue($identifier, $this->arstcustpopram, PDO::PARAM_STR);
                        break;
                    case 'ArtbRoutCode':
                        $stmt->bindValue($identifier, $this->artbroutcode, PDO::PARAM_STR);
                        break;
                    case 'ArstUpsAcctNbr':
                        $stmt->bindValue($identifier, $this->arstupsacctnbr, PDO::PARAM_STR);
                        break;
                    case 'ArstFobInputYn':
                        $stmt->bindValue($identifier, $this->arstfobinputyn, PDO::PARAM_STR);
                        break;
                    case 'ArstFobPerLb':
                        $stmt->bindValue($identifier, $this->arstfobperlb, PDO::PARAM_STR);
                        break;
                    case 'ArstSaleYtd':
                        $stmt->bindValue($identifier, $this->arstsaleytd, PDO::PARAM_STR);
                        break;
                    case 'ArstInvYtd':
                        $stmt->bindValue($identifier, $this->arstinvytd, PDO::PARAM_INT);
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
        $pos = CustomerShiptoTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArstname();
                break;
            case 3:
                return $this->getArstadr1();
                break;
            case 4:
                return $this->getArstadr2();
                break;
            case 5:
                return $this->getArstadr3();
                break;
            case 6:
                return $this->getArstctry();
                break;
            case 7:
                return $this->getArstcity();
                break;
            case 8:
                return $this->getArststat();
                break;
            case 9:
                return $this->getArstzipcode();
                break;
            case 10:
                return $this->getArstdeliverydays();
                break;
            case 11:
                return $this->getArstcommcode();
                break;
            case 12:
                return $this->getArstallowsplit();
                break;
            case 13:
                return $this->getArstlindstsp();
                break;
            case 14:
                return $this->getArstlmecommcustid();
                break;
            case 15:
                return $this->getArstcatlgid();
                break;
            case 16:
                return $this->getArspsaleper1();
                break;
            case 17:
                return $this->getArspsaleper2();
                break;
            case 18:
                return $this->getArspsaleper3();
                break;
            case 19:
                return $this->getArtbmtaxcode();
                break;
            case 20:
                return $this->getArsttaxexemnbr();
                break;
            case 21:
                return $this->getIntbwhse();
                break;
            case 22:
                return $this->getArtbshipvia();
                break;
            case 23:
                return $this->getArstbord();
                break;
            case 24:
                return $this->getArstcredhold();
                break;
            case 25:
                return $this->getArstusercode();
                break;
            case 26:
                return $this->getArstpriclvl();
                break;
            case 27:
                return $this->getArstshipcomp();
                break;
            case 28:
                return $this->getArsttxbl();
                break;
            case 29:
                return $this->getArstpostal();
                break;
            case 30:
                return $this->getArstsalemtd();
                break;
            case 31:
                return $this->getArstinvmtd();
                break;
            case 32:
                return $this->getArstdateopen();
                break;
            case 33:
                return $this->getArstlastsaledate();
                break;
            case 34:
                return $this->getArstsale24mo1();
                break;
            case 35:
                return $this->getArstinv24mo1();
                break;
            case 36:
                return $this->getArstsale24mo2();
                break;
            case 37:
                return $this->getArstinv24mo2();
                break;
            case 38:
                return $this->getArstsale24mo3();
                break;
            case 39:
                return $this->getArstinv24mo3();
                break;
            case 40:
                return $this->getArstsale24mo4();
                break;
            case 41:
                return $this->getArstinv24mo4();
                break;
            case 42:
                return $this->getArstsale24mo5();
                break;
            case 43:
                return $this->getArstinv24mo5();
                break;
            case 44:
                return $this->getArstsale24mo6();
                break;
            case 45:
                return $this->getArstinv24mo6();
                break;
            case 46:
                return $this->getArstsale24mo7();
                break;
            case 47:
                return $this->getArstinv24mo7();
                break;
            case 48:
                return $this->getArstsale24mo8();
                break;
            case 49:
                return $this->getArstinv24mo8();
                break;
            case 50:
                return $this->getArstsale24mo9();
                break;
            case 51:
                return $this->getArstinv24mo9();
                break;
            case 52:
                return $this->getArstsale24mo10();
                break;
            case 53:
                return $this->getArstinv24mo10();
                break;
            case 54:
                return $this->getArstsale24mo11();
                break;
            case 55:
                return $this->getArstinv24mo11();
                break;
            case 56:
                return $this->getArstsale24mo12();
                break;
            case 57:
                return $this->getArstinv24mo12();
                break;
            case 58:
                return $this->getArstsale24mo13();
                break;
            case 59:
                return $this->getArstinv24mo13();
                break;
            case 60:
                return $this->getArstsale24mo14();
                break;
            case 61:
                return $this->getArstinv24mo14();
                break;
            case 62:
                return $this->getArstsale24mo15();
                break;
            case 63:
                return $this->getArstinv24mo15();
                break;
            case 64:
                return $this->getArstsale24mo16();
                break;
            case 65:
                return $this->getArstinv24mo16();
                break;
            case 66:
                return $this->getArstsale24mo17();
                break;
            case 67:
                return $this->getArstinv24mo17();
                break;
            case 68:
                return $this->getArstsale24mo18();
                break;
            case 69:
                return $this->getArstinv24mo18();
                break;
            case 70:
                return $this->getArstsale24mo19();
                break;
            case 71:
                return $this->getArstinv24mo19();
                break;
            case 72:
                return $this->getArstsale24mo20();
                break;
            case 73:
                return $this->getArstinv24mo20();
                break;
            case 74:
                return $this->getArstsale24mo21();
                break;
            case 75:
                return $this->getArstinv24mo21();
                break;
            case 76:
                return $this->getArstsale24mo22();
                break;
            case 77:
                return $this->getArstinv24mo22();
                break;
            case 78:
                return $this->getArstsale24mo23();
                break;
            case 79:
                return $this->getArstinv24mo23();
                break;
            case 80:
                return $this->getArstsale24mo24();
                break;
            case 81:
                return $this->getArstinv24mo24();
                break;
            case 82:
                return $this->getArstprimshipid();
                break;
            case 83:
                return $this->getArstmyvendid();
                break;
            case 84:
                return $this->getArstaddlpricdisc();
                break;
            case 85:
                return $this->getArstediinvc();
                break;
            case 86:
                return $this->getArstchrgfrt();
                break;
            case 87:
                return $this->getArstdistcntr();
                break;
            case 88:
                return $this->getArstdunsnbr();
                break;
            case 89:
                return $this->getArstrfmlvalu();
                break;
            case 90:
                return $this->getArstcustpopram();
                break;
            case 91:
                return $this->getArtbroutcode();
                break;
            case 92:
                return $this->getArstupsacctnbr();
                break;
            case 93:
                return $this->getArstfobinputyn();
                break;
            case 94:
                return $this->getArstfobperlb();
                break;
            case 95:
                return $this->getArstsaleytd();
                break;
            case 96:
                return $this->getArstinvytd();
                break;
            case 97:
                return $this->getDateupdtd();
                break;
            case 98:
                return $this->getTimeupdtd();
                break;
            case 99:
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

        if (isset($alreadyDumpedObjects['CustomerShipto'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CustomerShipto'][$this->hashCode()] = true;
        $keys = CustomerShiptoTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArstshipid(),
            $keys[2] => $this->getArstname(),
            $keys[3] => $this->getArstadr1(),
            $keys[4] => $this->getArstadr2(),
            $keys[5] => $this->getArstadr3(),
            $keys[6] => $this->getArstctry(),
            $keys[7] => $this->getArstcity(),
            $keys[8] => $this->getArststat(),
            $keys[9] => $this->getArstzipcode(),
            $keys[10] => $this->getArstdeliverydays(),
            $keys[11] => $this->getArstcommcode(),
            $keys[12] => $this->getArstallowsplit(),
            $keys[13] => $this->getArstlindstsp(),
            $keys[14] => $this->getArstlmecommcustid(),
            $keys[15] => $this->getArstcatlgid(),
            $keys[16] => $this->getArspsaleper1(),
            $keys[17] => $this->getArspsaleper2(),
            $keys[18] => $this->getArspsaleper3(),
            $keys[19] => $this->getArtbmtaxcode(),
            $keys[20] => $this->getArsttaxexemnbr(),
            $keys[21] => $this->getIntbwhse(),
            $keys[22] => $this->getArtbshipvia(),
            $keys[23] => $this->getArstbord(),
            $keys[24] => $this->getArstcredhold(),
            $keys[25] => $this->getArstusercode(),
            $keys[26] => $this->getArstpriclvl(),
            $keys[27] => $this->getArstshipcomp(),
            $keys[28] => $this->getArsttxbl(),
            $keys[29] => $this->getArstpostal(),
            $keys[30] => $this->getArstsalemtd(),
            $keys[31] => $this->getArstinvmtd(),
            $keys[32] => $this->getArstdateopen(),
            $keys[33] => $this->getArstlastsaledate(),
            $keys[34] => $this->getArstsale24mo1(),
            $keys[35] => $this->getArstinv24mo1(),
            $keys[36] => $this->getArstsale24mo2(),
            $keys[37] => $this->getArstinv24mo2(),
            $keys[38] => $this->getArstsale24mo3(),
            $keys[39] => $this->getArstinv24mo3(),
            $keys[40] => $this->getArstsale24mo4(),
            $keys[41] => $this->getArstinv24mo4(),
            $keys[42] => $this->getArstsale24mo5(),
            $keys[43] => $this->getArstinv24mo5(),
            $keys[44] => $this->getArstsale24mo6(),
            $keys[45] => $this->getArstinv24mo6(),
            $keys[46] => $this->getArstsale24mo7(),
            $keys[47] => $this->getArstinv24mo7(),
            $keys[48] => $this->getArstsale24mo8(),
            $keys[49] => $this->getArstinv24mo8(),
            $keys[50] => $this->getArstsale24mo9(),
            $keys[51] => $this->getArstinv24mo9(),
            $keys[52] => $this->getArstsale24mo10(),
            $keys[53] => $this->getArstinv24mo10(),
            $keys[54] => $this->getArstsale24mo11(),
            $keys[55] => $this->getArstinv24mo11(),
            $keys[56] => $this->getArstsale24mo12(),
            $keys[57] => $this->getArstinv24mo12(),
            $keys[58] => $this->getArstsale24mo13(),
            $keys[59] => $this->getArstinv24mo13(),
            $keys[60] => $this->getArstsale24mo14(),
            $keys[61] => $this->getArstinv24mo14(),
            $keys[62] => $this->getArstsale24mo15(),
            $keys[63] => $this->getArstinv24mo15(),
            $keys[64] => $this->getArstsale24mo16(),
            $keys[65] => $this->getArstinv24mo16(),
            $keys[66] => $this->getArstsale24mo17(),
            $keys[67] => $this->getArstinv24mo17(),
            $keys[68] => $this->getArstsale24mo18(),
            $keys[69] => $this->getArstinv24mo18(),
            $keys[70] => $this->getArstsale24mo19(),
            $keys[71] => $this->getArstinv24mo19(),
            $keys[72] => $this->getArstsale24mo20(),
            $keys[73] => $this->getArstinv24mo20(),
            $keys[74] => $this->getArstsale24mo21(),
            $keys[75] => $this->getArstinv24mo21(),
            $keys[76] => $this->getArstsale24mo22(),
            $keys[77] => $this->getArstinv24mo22(),
            $keys[78] => $this->getArstsale24mo23(),
            $keys[79] => $this->getArstinv24mo23(),
            $keys[80] => $this->getArstsale24mo24(),
            $keys[81] => $this->getArstinv24mo24(),
            $keys[82] => $this->getArstprimshipid(),
            $keys[83] => $this->getArstmyvendid(),
            $keys[84] => $this->getArstaddlpricdisc(),
            $keys[85] => $this->getArstediinvc(),
            $keys[86] => $this->getArstchrgfrt(),
            $keys[87] => $this->getArstdistcntr(),
            $keys[88] => $this->getArstdunsnbr(),
            $keys[89] => $this->getArstrfmlvalu(),
            $keys[90] => $this->getArstcustpopram(),
            $keys[91] => $this->getArtbroutcode(),
            $keys[92] => $this->getArstupsacctnbr(),
            $keys[93] => $this->getArstfobinputyn(),
            $keys[94] => $this->getArstfobperlb(),
            $keys[95] => $this->getArstsaleytd(),
            $keys[96] => $this->getArstinvytd(),
            $keys[97] => $this->getDateupdtd(),
            $keys[98] => $this->getTimeupdtd(),
            $keys[99] => $this->getDummy(),
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
            if (null !== $this->collArContacts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'arContacts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cont_masts';
                        break;
                    default:
                        $key = 'ArContacts';
                }

                $result[$key] = $this->collArContacts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
            if (null !== $this->collSalesHistories) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesHistories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_head_hists';
                        break;
                    default:
                        $key = 'SalesHistories';
                }

                $result[$key] = $this->collSalesHistories->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesOrders) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesOrders';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_headers';
                        break;
                    default:
                        $key = 'SalesOrders';
                }

                $result[$key] = $this->collSalesOrders->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSoStandingOrderDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soStandingOrderDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_stand_dets';
                        break;
                    default:
                        $key = 'SoStandingOrderDetails';
                }

                $result[$key] = $this->collSoStandingOrderDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleSoStandingOrder) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soStandingOrder';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_stand_head';
                        break;
                    default:
                        $key = 'SoStandingOrder';
                }

                $result[$key] = $this->singleSoStandingOrder->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
     * @return $this|\CustomerShipto
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CustomerShiptoTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CustomerShipto
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
                $this->setArstname($value);
                break;
            case 3:
                $this->setArstadr1($value);
                break;
            case 4:
                $this->setArstadr2($value);
                break;
            case 5:
                $this->setArstadr3($value);
                break;
            case 6:
                $this->setArstctry($value);
                break;
            case 7:
                $this->setArstcity($value);
                break;
            case 8:
                $this->setArststat($value);
                break;
            case 9:
                $this->setArstzipcode($value);
                break;
            case 10:
                $this->setArstdeliverydays($value);
                break;
            case 11:
                $this->setArstcommcode($value);
                break;
            case 12:
                $this->setArstallowsplit($value);
                break;
            case 13:
                $this->setArstlindstsp($value);
                break;
            case 14:
                $this->setArstlmecommcustid($value);
                break;
            case 15:
                $this->setArstcatlgid($value);
                break;
            case 16:
                $this->setArspsaleper1($value);
                break;
            case 17:
                $this->setArspsaleper2($value);
                break;
            case 18:
                $this->setArspsaleper3($value);
                break;
            case 19:
                $this->setArtbmtaxcode($value);
                break;
            case 20:
                $this->setArsttaxexemnbr($value);
                break;
            case 21:
                $this->setIntbwhse($value);
                break;
            case 22:
                $this->setArtbshipvia($value);
                break;
            case 23:
                $this->setArstbord($value);
                break;
            case 24:
                $this->setArstcredhold($value);
                break;
            case 25:
                $this->setArstusercode($value);
                break;
            case 26:
                $this->setArstpriclvl($value);
                break;
            case 27:
                $this->setArstshipcomp($value);
                break;
            case 28:
                $this->setArsttxbl($value);
                break;
            case 29:
                $this->setArstpostal($value);
                break;
            case 30:
                $this->setArstsalemtd($value);
                break;
            case 31:
                $this->setArstinvmtd($value);
                break;
            case 32:
                $this->setArstdateopen($value);
                break;
            case 33:
                $this->setArstlastsaledate($value);
                break;
            case 34:
                $this->setArstsale24mo1($value);
                break;
            case 35:
                $this->setArstinv24mo1($value);
                break;
            case 36:
                $this->setArstsale24mo2($value);
                break;
            case 37:
                $this->setArstinv24mo2($value);
                break;
            case 38:
                $this->setArstsale24mo3($value);
                break;
            case 39:
                $this->setArstinv24mo3($value);
                break;
            case 40:
                $this->setArstsale24mo4($value);
                break;
            case 41:
                $this->setArstinv24mo4($value);
                break;
            case 42:
                $this->setArstsale24mo5($value);
                break;
            case 43:
                $this->setArstinv24mo5($value);
                break;
            case 44:
                $this->setArstsale24mo6($value);
                break;
            case 45:
                $this->setArstinv24mo6($value);
                break;
            case 46:
                $this->setArstsale24mo7($value);
                break;
            case 47:
                $this->setArstinv24mo7($value);
                break;
            case 48:
                $this->setArstsale24mo8($value);
                break;
            case 49:
                $this->setArstinv24mo8($value);
                break;
            case 50:
                $this->setArstsale24mo9($value);
                break;
            case 51:
                $this->setArstinv24mo9($value);
                break;
            case 52:
                $this->setArstsale24mo10($value);
                break;
            case 53:
                $this->setArstinv24mo10($value);
                break;
            case 54:
                $this->setArstsale24mo11($value);
                break;
            case 55:
                $this->setArstinv24mo11($value);
                break;
            case 56:
                $this->setArstsale24mo12($value);
                break;
            case 57:
                $this->setArstinv24mo12($value);
                break;
            case 58:
                $this->setArstsale24mo13($value);
                break;
            case 59:
                $this->setArstinv24mo13($value);
                break;
            case 60:
                $this->setArstsale24mo14($value);
                break;
            case 61:
                $this->setArstinv24mo14($value);
                break;
            case 62:
                $this->setArstsale24mo15($value);
                break;
            case 63:
                $this->setArstinv24mo15($value);
                break;
            case 64:
                $this->setArstsale24mo16($value);
                break;
            case 65:
                $this->setArstinv24mo16($value);
                break;
            case 66:
                $this->setArstsale24mo17($value);
                break;
            case 67:
                $this->setArstinv24mo17($value);
                break;
            case 68:
                $this->setArstsale24mo18($value);
                break;
            case 69:
                $this->setArstinv24mo18($value);
                break;
            case 70:
                $this->setArstsale24mo19($value);
                break;
            case 71:
                $this->setArstinv24mo19($value);
                break;
            case 72:
                $this->setArstsale24mo20($value);
                break;
            case 73:
                $this->setArstinv24mo20($value);
                break;
            case 74:
                $this->setArstsale24mo21($value);
                break;
            case 75:
                $this->setArstinv24mo21($value);
                break;
            case 76:
                $this->setArstsale24mo22($value);
                break;
            case 77:
                $this->setArstinv24mo22($value);
                break;
            case 78:
                $this->setArstsale24mo23($value);
                break;
            case 79:
                $this->setArstinv24mo23($value);
                break;
            case 80:
                $this->setArstsale24mo24($value);
                break;
            case 81:
                $this->setArstinv24mo24($value);
                break;
            case 82:
                $this->setArstprimshipid($value);
                break;
            case 83:
                $this->setArstmyvendid($value);
                break;
            case 84:
                $this->setArstaddlpricdisc($value);
                break;
            case 85:
                $this->setArstediinvc($value);
                break;
            case 86:
                $this->setArstchrgfrt($value);
                break;
            case 87:
                $this->setArstdistcntr($value);
                break;
            case 88:
                $this->setArstdunsnbr($value);
                break;
            case 89:
                $this->setArstrfmlvalu($value);
                break;
            case 90:
                $this->setArstcustpopram($value);
                break;
            case 91:
                $this->setArtbroutcode($value);
                break;
            case 92:
                $this->setArstupsacctnbr($value);
                break;
            case 93:
                $this->setArstfobinputyn($value);
                break;
            case 94:
                $this->setArstfobperlb($value);
                break;
            case 95:
                $this->setArstsaleytd($value);
                break;
            case 96:
                $this->setArstinvytd($value);
                break;
            case 97:
                $this->setDateupdtd($value);
                break;
            case 98:
                $this->setTimeupdtd($value);
                break;
            case 99:
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
        $keys = CustomerShiptoTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArstshipid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArstname($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArstadr1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArstadr2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArstadr3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArstctry($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArstcity($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArststat($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArstzipcode($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArstdeliverydays($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArstcommcode($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArstallowsplit($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArstlindstsp($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArstlmecommcustid($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArstcatlgid($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArspsaleper1($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArspsaleper2($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArspsaleper3($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setArsttaxexemnbr($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setIntbwhse($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setArtbshipvia($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArstbord($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArstcredhold($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArstusercode($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setArstpriclvl($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setArstshipcomp($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setArsttxbl($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setArstpostal($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setArstsalemtd($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setArstinvmtd($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setArstdateopen($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setArstlastsaledate($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setArstsale24mo1($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setArstinv24mo1($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setArstsale24mo2($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setArstinv24mo2($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setArstsale24mo3($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setArstinv24mo3($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setArstsale24mo4($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setArstinv24mo4($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setArstsale24mo5($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setArstinv24mo5($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setArstsale24mo6($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setArstinv24mo6($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setArstsale24mo7($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setArstinv24mo7($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setArstsale24mo8($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setArstinv24mo8($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setArstsale24mo9($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setArstinv24mo9($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setArstsale24mo10($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setArstinv24mo10($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setArstsale24mo11($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setArstinv24mo11($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setArstsale24mo12($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setArstinv24mo12($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setArstsale24mo13($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setArstinv24mo13($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setArstsale24mo14($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setArstinv24mo14($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setArstsale24mo15($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setArstinv24mo15($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setArstsale24mo16($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setArstinv24mo16($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setArstsale24mo17($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setArstinv24mo17($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setArstsale24mo18($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setArstinv24mo18($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setArstsale24mo19($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setArstinv24mo19($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setArstsale24mo20($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setArstinv24mo20($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setArstsale24mo21($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setArstinv24mo21($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setArstsale24mo22($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setArstinv24mo22($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setArstsale24mo23($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setArstinv24mo23($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setArstsale24mo24($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setArstinv24mo24($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setArstprimshipid($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setArstmyvendid($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setArstaddlpricdisc($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setArstediinvc($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setArstchrgfrt($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setArstdistcntr($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setArstdunsnbr($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setArstrfmlvalu($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setArstcustpopram($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setArtbroutcode($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setArstupsacctnbr($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setArstfobinputyn($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setArstfobperlb($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setArstsaleytd($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setArstinvytd($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setDateupdtd($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setTimeupdtd($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setDummy($arr[$keys[99]]);
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
     * @return $this|\CustomerShipto The current object, for fluid interface
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
        $criteria = new Criteria(CustomerShiptoTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARCUCUSTID)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSHIPID)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTNAME)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTNAME, $this->arstname);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTADR1)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTADR1, $this->arstadr1);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTADR2)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTADR2, $this->arstadr2);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTADR3)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTADR3, $this->arstadr3);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCTRY)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTCTRY, $this->arstctry);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCITY)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTCITY, $this->arstcity);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSTAT)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSTAT, $this->arststat);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTZIPCODE)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTZIPCODE, $this->arstzipcode);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS, $this->arstdeliverydays);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCOMMCODE)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTCOMMCODE, $this->arstcommcode);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTALLOWSPLIT)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTALLOWSPLIT, $this->arstallowsplit);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTLINDSTSP)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTLINDSTSP, $this->arstlindstsp);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID, $this->arstlmecommcustid);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCATLGID)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTCATLGID, $this->arstcatlgid);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR, $this->arsttaxexemnbr);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_INTBWHSE)) {
            $criteria->add(CustomerShiptoTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTBORD)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTBORD, $this->arstbord);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCREDHOLD)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTCREDHOLD, $this->arstcredhold);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTUSERCODE)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTUSERCODE, $this->arstusercode);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTPRICLVL)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTPRICLVL, $this->arstpriclvl);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSHIPCOMP)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSHIPCOMP, $this->arstshipcomp);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTTXBL)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTTXBL, $this->arsttxbl);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTPOSTAL)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTPOSTAL, $this->arstpostal);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALEMTD)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALEMTD, $this->arstsalemtd);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINVMTD)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINVMTD, $this->arstinvmtd);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTDATEOPEN)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTDATEOPEN, $this->arstdateopen);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTLASTSALEDATE)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTLASTSALEDATE, $this->arstlastsaledate);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO1)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO1, $this->arstsale24mo1);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO1)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO1, $this->arstinv24mo1);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO2)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO2, $this->arstsale24mo2);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO2)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO2, $this->arstinv24mo2);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO3)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO3, $this->arstsale24mo3);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO3)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO3, $this->arstinv24mo3);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO4)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO4, $this->arstsale24mo4);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO4)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO4, $this->arstinv24mo4);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO5)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO5, $this->arstsale24mo5);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO5)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO5, $this->arstinv24mo5);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO6)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO6, $this->arstsale24mo6);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO6)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO6, $this->arstinv24mo6);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO7)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO7, $this->arstsale24mo7);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO7)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO7, $this->arstinv24mo7);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO8)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO8, $this->arstsale24mo8);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO8)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO8, $this->arstinv24mo8);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO9)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO9, $this->arstsale24mo9);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO9)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO9, $this->arstinv24mo9);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO10)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO10, $this->arstsale24mo10);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO10)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO10, $this->arstinv24mo10);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO11)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO11, $this->arstsale24mo11);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO11)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO11, $this->arstinv24mo11);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO12)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO12, $this->arstsale24mo12);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO12)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO12, $this->arstinv24mo12);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO13)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO13, $this->arstsale24mo13);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO13)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO13, $this->arstinv24mo13);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO14)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO14, $this->arstsale24mo14);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO14)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO14, $this->arstinv24mo14);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO15)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO15, $this->arstsale24mo15);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO15)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO15, $this->arstinv24mo15);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO16)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO16, $this->arstsale24mo16);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO16)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO16, $this->arstinv24mo16);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO17)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO17, $this->arstsale24mo17);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO17)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO17, $this->arstinv24mo17);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO18)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO18, $this->arstsale24mo18);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO18)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO18, $this->arstinv24mo18);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO19)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO19, $this->arstsale24mo19);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO19)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO19, $this->arstinv24mo19);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO20)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO20, $this->arstsale24mo20);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO20)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO20, $this->arstinv24mo20);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO21)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO21, $this->arstsale24mo21);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO21)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO21, $this->arstinv24mo21);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO22)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO22, $this->arstsale24mo22);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO22)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO22, $this->arstinv24mo22);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO23)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO23, $this->arstsale24mo23);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO23)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO23, $this->arstinv24mo23);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALE24MO24)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALE24MO24, $this->arstsale24mo24);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINV24MO24)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINV24MO24, $this->arstinv24mo24);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTPRIMSHIPID)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTPRIMSHIPID, $this->arstprimshipid);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTMYVENDID)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTMYVENDID, $this->arstmyvendid);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTADDLPRICDISC)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTADDLPRICDISC, $this->arstaddlpricdisc);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTEDIINVC)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTEDIINVC, $this->arstediinvc);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCHRGFRT)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTCHRGFRT, $this->arstchrgfrt);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTDISTCNTR)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTDISTCNTR, $this->arstdistcntr);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTDUNSNBR)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTDUNSNBR, $this->arstdunsnbr);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTRFMLVALU)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTRFMLVALU, $this->arstrfmlvalu);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTCUSTPOPRAM)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTCUSTPOPRAM, $this->arstcustpopram);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARTBROUTCODE)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARTBROUTCODE, $this->artbroutcode);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTUPSACCTNBR)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTUPSACCTNBR, $this->arstupsacctnbr);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTFOBINPUTYN)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTFOBINPUTYN, $this->arstfobinputyn);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTFOBPERLB)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTFOBPERLB, $this->arstfobperlb);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTSALEYTD)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTSALEYTD, $this->arstsaleytd);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_ARSTINVYTD)) {
            $criteria->add(CustomerShiptoTableMap::COL_ARSTINVYTD, $this->arstinvytd);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_DATEUPDTD)) {
            $criteria->add(CustomerShiptoTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_TIMEUPDTD)) {
            $criteria->add(CustomerShiptoTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(CustomerShiptoTableMap::COL_DUMMY)) {
            $criteria->add(CustomerShiptoTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildCustomerShiptoQuery::create();
        $criteria->add(CustomerShiptoTableMap::COL_ARCUCUSTID, $this->arcucustid);
        $criteria->add(CustomerShiptoTableMap::COL_ARSTSHIPID, $this->arstshipid);

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
            null !== $this->getArstshipid();

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
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getArcucustid();
        $pks[1] = $this->getArstshipid();

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
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getArcucustid()) && (null === $this->getArstshipid());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CustomerShipto (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setArstname($this->getArstname());
        $copyObj->setArstadr1($this->getArstadr1());
        $copyObj->setArstadr2($this->getArstadr2());
        $copyObj->setArstadr3($this->getArstadr3());
        $copyObj->setArstctry($this->getArstctry());
        $copyObj->setArstcity($this->getArstcity());
        $copyObj->setArststat($this->getArststat());
        $copyObj->setArstzipcode($this->getArstzipcode());
        $copyObj->setArstdeliverydays($this->getArstdeliverydays());
        $copyObj->setArstcommcode($this->getArstcommcode());
        $copyObj->setArstallowsplit($this->getArstallowsplit());
        $copyObj->setArstlindstsp($this->getArstlindstsp());
        $copyObj->setArstlmecommcustid($this->getArstlmecommcustid());
        $copyObj->setArstcatlgid($this->getArstcatlgid());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setArsttaxexemnbr($this->getArsttaxexemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArstbord($this->getArstbord());
        $copyObj->setArstcredhold($this->getArstcredhold());
        $copyObj->setArstusercode($this->getArstusercode());
        $copyObj->setArstpriclvl($this->getArstpriclvl());
        $copyObj->setArstshipcomp($this->getArstshipcomp());
        $copyObj->setArsttxbl($this->getArsttxbl());
        $copyObj->setArstpostal($this->getArstpostal());
        $copyObj->setArstsalemtd($this->getArstsalemtd());
        $copyObj->setArstinvmtd($this->getArstinvmtd());
        $copyObj->setArstdateopen($this->getArstdateopen());
        $copyObj->setArstlastsaledate($this->getArstlastsaledate());
        $copyObj->setArstsale24mo1($this->getArstsale24mo1());
        $copyObj->setArstinv24mo1($this->getArstinv24mo1());
        $copyObj->setArstsale24mo2($this->getArstsale24mo2());
        $copyObj->setArstinv24mo2($this->getArstinv24mo2());
        $copyObj->setArstsale24mo3($this->getArstsale24mo3());
        $copyObj->setArstinv24mo3($this->getArstinv24mo3());
        $copyObj->setArstsale24mo4($this->getArstsale24mo4());
        $copyObj->setArstinv24mo4($this->getArstinv24mo4());
        $copyObj->setArstsale24mo5($this->getArstsale24mo5());
        $copyObj->setArstinv24mo5($this->getArstinv24mo5());
        $copyObj->setArstsale24mo6($this->getArstsale24mo6());
        $copyObj->setArstinv24mo6($this->getArstinv24mo6());
        $copyObj->setArstsale24mo7($this->getArstsale24mo7());
        $copyObj->setArstinv24mo7($this->getArstinv24mo7());
        $copyObj->setArstsale24mo8($this->getArstsale24mo8());
        $copyObj->setArstinv24mo8($this->getArstinv24mo8());
        $copyObj->setArstsale24mo9($this->getArstsale24mo9());
        $copyObj->setArstinv24mo9($this->getArstinv24mo9());
        $copyObj->setArstsale24mo10($this->getArstsale24mo10());
        $copyObj->setArstinv24mo10($this->getArstinv24mo10());
        $copyObj->setArstsale24mo11($this->getArstsale24mo11());
        $copyObj->setArstinv24mo11($this->getArstinv24mo11());
        $copyObj->setArstsale24mo12($this->getArstsale24mo12());
        $copyObj->setArstinv24mo12($this->getArstinv24mo12());
        $copyObj->setArstsale24mo13($this->getArstsale24mo13());
        $copyObj->setArstinv24mo13($this->getArstinv24mo13());
        $copyObj->setArstsale24mo14($this->getArstsale24mo14());
        $copyObj->setArstinv24mo14($this->getArstinv24mo14());
        $copyObj->setArstsale24mo15($this->getArstsale24mo15());
        $copyObj->setArstinv24mo15($this->getArstinv24mo15());
        $copyObj->setArstsale24mo16($this->getArstsale24mo16());
        $copyObj->setArstinv24mo16($this->getArstinv24mo16());
        $copyObj->setArstsale24mo17($this->getArstsale24mo17());
        $copyObj->setArstinv24mo17($this->getArstinv24mo17());
        $copyObj->setArstsale24mo18($this->getArstsale24mo18());
        $copyObj->setArstinv24mo18($this->getArstinv24mo18());
        $copyObj->setArstsale24mo19($this->getArstsale24mo19());
        $copyObj->setArstinv24mo19($this->getArstinv24mo19());
        $copyObj->setArstsale24mo20($this->getArstsale24mo20());
        $copyObj->setArstinv24mo20($this->getArstinv24mo20());
        $copyObj->setArstsale24mo21($this->getArstsale24mo21());
        $copyObj->setArstinv24mo21($this->getArstinv24mo21());
        $copyObj->setArstsale24mo22($this->getArstsale24mo22());
        $copyObj->setArstinv24mo22($this->getArstinv24mo22());
        $copyObj->setArstsale24mo23($this->getArstsale24mo23());
        $copyObj->setArstinv24mo23($this->getArstinv24mo23());
        $copyObj->setArstsale24mo24($this->getArstsale24mo24());
        $copyObj->setArstinv24mo24($this->getArstinv24mo24());
        $copyObj->setArstprimshipid($this->getArstprimshipid());
        $copyObj->setArstmyvendid($this->getArstmyvendid());
        $copyObj->setArstaddlpricdisc($this->getArstaddlpricdisc());
        $copyObj->setArstediinvc($this->getArstediinvc());
        $copyObj->setArstchrgfrt($this->getArstchrgfrt());
        $copyObj->setArstdistcntr($this->getArstdistcntr());
        $copyObj->setArstdunsnbr($this->getArstdunsnbr());
        $copyObj->setArstrfmlvalu($this->getArstrfmlvalu());
        $copyObj->setArstcustpopram($this->getArstcustpopram());
        $copyObj->setArtbroutcode($this->getArtbroutcode());
        $copyObj->setArstupsacctnbr($this->getArstupsacctnbr());
        $copyObj->setArstfobinputyn($this->getArstfobinputyn());
        $copyObj->setArstfobperlb($this->getArstfobperlb());
        $copyObj->setArstsaleytd($this->getArstsaleytd());
        $copyObj->setArstinvytd($this->getArstinvytd());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getArContacts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArContact($relObj->copy($deepCopy));
                }
            }

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

            foreach ($this->getBookings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBooking($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesHistories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesHistory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrder($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSoStandingOrderDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSoStandingOrderDetail($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getSoStandingOrder();
            if ($relObj) {
                $copyObj->setSoStandingOrder($relObj->copy($deepCopy));
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
     * @return \CustomerShipto Clone of current object.
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
     * @return $this|\CustomerShipto The current object (for fluent API support)
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
            $v->addCustomerShipto($this);
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
                $this->aCustomer->addCustomerShiptos($this);
             */
        }

        return $this->aCustomer;
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
        if ('ArContact' == $relationName) {
            $this->initArContacts();
            return;
        }
        if ('BookingDayCustomer' == $relationName) {
            $this->initBookingDayCustomers();
            return;
        }
        if ('BookingDayDetail' == $relationName) {
            $this->initBookingDayDetails();
            return;
        }
        if ('Booking' == $relationName) {
            $this->initBookings();
            return;
        }
        if ('SalesHistory' == $relationName) {
            $this->initSalesHistories();
            return;
        }
        if ('SalesOrder' == $relationName) {
            $this->initSalesOrders();
            return;
        }
        if ('SoStandingOrderDetail' == $relationName) {
            $this->initSoStandingOrderDetails();
            return;
        }
    }

    /**
     * Clears out the collArContacts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addArContacts()
     */
    public function clearArContacts()
    {
        $this->collArContacts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collArContacts collection loaded partially.
     */
    public function resetPartialArContacts($v = true)
    {
        $this->collArContactsPartial = $v;
    }

    /**
     * Initializes the collArContacts collection.
     *
     * By default this just sets the collArContacts collection to an empty array (like clearcollArContacts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArContacts($overrideExisting = true)
    {
        if (null !== $this->collArContacts && !$overrideExisting) {
            return;
        }

        $collectionClassName = ArContactTableMap::getTableMap()->getCollectionClassName();

        $this->collArContacts = new $collectionClassName;
        $this->collArContacts->setModel('\ArContact');
    }

    /**
     * Gets an array of ChildArContact objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomerShipto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildArContact[] List of ChildArContact objects
     * @throws PropelException
     */
    public function getArContacts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collArContactsPartial && !$this->isNew();
        if (null === $this->collArContacts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collArContacts) {
                // return empty collection
                $this->initArContacts();
            } else {
                $collArContacts = ChildArContactQuery::create(null, $criteria)
                    ->filterByCustomerShipto($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collArContactsPartial && count($collArContacts)) {
                        $this->initArContacts(false);

                        foreach ($collArContacts as $obj) {
                            if (false == $this->collArContacts->contains($obj)) {
                                $this->collArContacts->append($obj);
                            }
                        }

                        $this->collArContactsPartial = true;
                    }

                    return $collArContacts;
                }

                if ($partial && $this->collArContacts) {
                    foreach ($this->collArContacts as $obj) {
                        if ($obj->isNew()) {
                            $collArContacts[] = $obj;
                        }
                    }
                }

                $this->collArContacts = $collArContacts;
                $this->collArContactsPartial = false;
            }
        }

        return $this->collArContacts;
    }

    /**
     * Sets a collection of ChildArContact objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $arContacts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function setArContacts(Collection $arContacts, ConnectionInterface $con = null)
    {
        /** @var ChildArContact[] $arContactsToDelete */
        $arContactsToDelete = $this->getArContacts(new Criteria(), $con)->diff($arContacts);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->arContactsScheduledForDeletion = clone $arContactsToDelete;

        foreach ($arContactsToDelete as $arContactRemoved) {
            $arContactRemoved->setCustomerShipto(null);
        }

        $this->collArContacts = null;
        foreach ($arContacts as $arContact) {
            $this->addArContact($arContact);
        }

        $this->collArContacts = $arContacts;
        $this->collArContactsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ArContact objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ArContact objects.
     * @throws PropelException
     */
    public function countArContacts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collArContactsPartial && !$this->isNew();
        if (null === $this->collArContacts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArContacts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArContacts());
            }

            $query = ChildArContactQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerShipto($this)
                ->count($con);
        }

        return count($this->collArContacts);
    }

    /**
     * Method called to associate a ChildArContact object to this object
     * through the ChildArContact foreign key attribute.
     *
     * @param  ChildArContact $l ChildArContact
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function addArContact(ChildArContact $l)
    {
        if ($this->collArContacts === null) {
            $this->initArContacts();
            $this->collArContactsPartial = true;
        }

        if (!$this->collArContacts->contains($l)) {
            $this->doAddArContact($l);

            if ($this->arContactsScheduledForDeletion and $this->arContactsScheduledForDeletion->contains($l)) {
                $this->arContactsScheduledForDeletion->remove($this->arContactsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildArContact $arContact The ChildArContact object to add.
     */
    protected function doAddArContact(ChildArContact $arContact)
    {
        $this->collArContacts[]= $arContact;
        $arContact->setCustomerShipto($this);
    }

    /**
     * @param  ChildArContact $arContact The ChildArContact object to remove.
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function removeArContact(ChildArContact $arContact)
    {
        if ($this->getArContacts()->contains($arContact)) {
            $pos = $this->collArContacts->search($arContact);
            $this->collArContacts->remove($pos);
            if (null === $this->arContactsScheduledForDeletion) {
                $this->arContactsScheduledForDeletion = clone $this->collArContacts;
                $this->arContactsScheduledForDeletion->clear();
            }
            $this->arContactsScheduledForDeletion[]= clone $arContact;
            $arContact->setCustomerShipto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related ArContacts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildArContact[] List of ChildArContact objects
     */
    public function getArContactsJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildArContactQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getArContacts($query, $con);
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
     * If this ChildCustomerShipto is new, it will return
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
                    ->filterByCustomerShipto($this)
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
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
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
            $bookingDayCustomerRemoved->setCustomerShipto(null);
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
                ->filterByCustomerShipto($this)
                ->count($con);
        }

        return count($this->collBookingDayCustomers);
    }

    /**
     * Method called to associate a ChildBookingDayCustomer object to this object
     * through the ChildBookingDayCustomer foreign key attribute.
     *
     * @param  ChildBookingDayCustomer $l ChildBookingDayCustomer
     * @return $this|\CustomerShipto The current object (for fluent API support)
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
        $bookingDayCustomer->setCustomerShipto($this);
    }

    /**
     * @param  ChildBookingDayCustomer $bookingDayCustomer The ChildBookingDayCustomer object to remove.
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
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
            $bookingDayCustomer->setCustomerShipto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related BookingDayCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
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
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related BookingDayCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayCustomer[] List of ChildBookingDayCustomer objects
     */
    public function getBookingDayCustomersJoinSalesPerson(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayCustomerQuery::create(null, $criteria);
        $query->joinWith('SalesPerson', $joinBehavior);

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
     * If this ChildCustomerShipto is new, it will return
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
                    ->filterByCustomerShipto($this)
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
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function setBookingDayDetails(Collection $bookingDayDetails, ConnectionInterface $con = null)
    {
        /** @var ChildBookingDayDetail[] $bookingDayDetailsToDelete */
        $bookingDayDetailsToDelete = $this->getBookingDayDetails(new Criteria(), $con)->diff($bookingDayDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->bookingDayDetailsScheduledForDeletion = clone $bookingDayDetailsToDelete;

        foreach ($bookingDayDetailsToDelete as $bookingDayDetailRemoved) {
            $bookingDayDetailRemoved->setCustomerShipto(null);
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
                ->filterByCustomerShipto($this)
                ->count($con);
        }

        return count($this->collBookingDayDetails);
    }

    /**
     * Method called to associate a ChildBookingDayDetail object to this object
     * through the ChildBookingDayDetail foreign key attribute.
     *
     * @param  ChildBookingDayDetail $l ChildBookingDayDetail
     * @return $this|\CustomerShipto The current object (for fluent API support)
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
        $bookingDayDetail->setCustomerShipto($this);
    }

    /**
     * @param  ChildBookingDayDetail $bookingDayDetail The ChildBookingDayDetail object to remove.
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
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
            $this->bookingDayDetailsScheduledForDeletion[]= clone $bookingDayDetail;
            $bookingDayDetail->setCustomerShipto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related BookingDayDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
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
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related BookingDayDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayDetail[] List of ChildBookingDayDetail objects
     */
    public function getBookingDayDetailsJoinSalesPerson(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayDetailQuery::create(null, $criteria);
        $query->joinWith('SalesPerson', $joinBehavior);

        return $this->getBookingDayDetails($query, $con);
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
     * If this ChildCustomerShipto is new, it will return
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
                    ->filterByCustomerShipto($this)
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
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function setBookings(Collection $bookings, ConnectionInterface $con = null)
    {
        /** @var ChildBooking[] $bookingsToDelete */
        $bookingsToDelete = $this->getBookings(new Criteria(), $con)->diff($bookings);


        $this->bookingsScheduledForDeletion = $bookingsToDelete;

        foreach ($bookingsToDelete as $bookingRemoved) {
            $bookingRemoved->setCustomerShipto(null);
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
                ->filterByCustomerShipto($this)
                ->count($con);
        }

        return count($this->collBookings);
    }

    /**
     * Method called to associate a ChildBooking object to this object
     * through the ChildBooking foreign key attribute.
     *
     * @param  ChildBooking $l ChildBooking
     * @return $this|\CustomerShipto The current object (for fluent API support)
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
        $booking->setCustomerShipto($this);
    }

    /**
     * @param  ChildBooking $booking The ChildBooking object to remove.
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
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
            $this->bookingsScheduledForDeletion[]= clone $booking;
            $booking->setCustomerShipto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related Bookings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
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
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related Bookings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBooking[] List of ChildBooking objects
     */
    public function getBookingsJoinSalesPerson(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingQuery::create(null, $criteria);
        $query->joinWith('SalesPerson', $joinBehavior);

        return $this->getBookings($query, $con);
    }

    /**
     * Clears out the collSalesHistories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesHistories()
     */
    public function clearSalesHistories()
    {
        $this->collSalesHistories = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesHistories collection loaded partially.
     */
    public function resetPartialSalesHistories($v = true)
    {
        $this->collSalesHistoriesPartial = $v;
    }

    /**
     * Initializes the collSalesHistories collection.
     *
     * By default this just sets the collSalesHistories collection to an empty array (like clearcollSalesHistories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesHistories($overrideExisting = true)
    {
        if (null !== $this->collSalesHistories && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesHistoryTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesHistories = new $collectionClassName;
        $this->collSalesHistories->setModel('\SalesHistory');
    }

    /**
     * Gets an array of ChildSalesHistory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomerShipto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesHistory[] List of ChildSalesHistory objects
     * @throws PropelException
     */
    public function getSalesHistories(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesHistoriesPartial && !$this->isNew();
        if (null === $this->collSalesHistories || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesHistories) {
                // return empty collection
                $this->initSalesHistories();
            } else {
                $collSalesHistories = ChildSalesHistoryQuery::create(null, $criteria)
                    ->filterByCustomerShipto($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesHistoriesPartial && count($collSalesHistories)) {
                        $this->initSalesHistories(false);

                        foreach ($collSalesHistories as $obj) {
                            if (false == $this->collSalesHistories->contains($obj)) {
                                $this->collSalesHistories->append($obj);
                            }
                        }

                        $this->collSalesHistoriesPartial = true;
                    }

                    return $collSalesHistories;
                }

                if ($partial && $this->collSalesHistories) {
                    foreach ($this->collSalesHistories as $obj) {
                        if ($obj->isNew()) {
                            $collSalesHistories[] = $obj;
                        }
                    }
                }

                $this->collSalesHistories = $collSalesHistories;
                $this->collSalesHistoriesPartial = false;
            }
        }

        return $this->collSalesHistories;
    }

    /**
     * Sets a collection of ChildSalesHistory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesHistories A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function setSalesHistories(Collection $salesHistories, ConnectionInterface $con = null)
    {
        /** @var ChildSalesHistory[] $salesHistoriesToDelete */
        $salesHistoriesToDelete = $this->getSalesHistories(new Criteria(), $con)->diff($salesHistories);


        $this->salesHistoriesScheduledForDeletion = $salesHistoriesToDelete;

        foreach ($salesHistoriesToDelete as $salesHistoryRemoved) {
            $salesHistoryRemoved->setCustomerShipto(null);
        }

        $this->collSalesHistories = null;
        foreach ($salesHistories as $salesHistory) {
            $this->addSalesHistory($salesHistory);
        }

        $this->collSalesHistories = $salesHistories;
        $this->collSalesHistoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesHistory objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesHistory objects.
     * @throws PropelException
     */
    public function countSalesHistories(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesHistoriesPartial && !$this->isNew();
        if (null === $this->collSalesHistories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesHistories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesHistories());
            }

            $query = ChildSalesHistoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerShipto($this)
                ->count($con);
        }

        return count($this->collSalesHistories);
    }

    /**
     * Method called to associate a ChildSalesHistory object to this object
     * through the ChildSalesHistory foreign key attribute.
     *
     * @param  ChildSalesHistory $l ChildSalesHistory
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function addSalesHistory(ChildSalesHistory $l)
    {
        if ($this->collSalesHistories === null) {
            $this->initSalesHistories();
            $this->collSalesHistoriesPartial = true;
        }

        if (!$this->collSalesHistories->contains($l)) {
            $this->doAddSalesHistory($l);

            if ($this->salesHistoriesScheduledForDeletion and $this->salesHistoriesScheduledForDeletion->contains($l)) {
                $this->salesHistoriesScheduledForDeletion->remove($this->salesHistoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesHistory $salesHistory The ChildSalesHistory object to add.
     */
    protected function doAddSalesHistory(ChildSalesHistory $salesHistory)
    {
        $this->collSalesHistories[]= $salesHistory;
        $salesHistory->setCustomerShipto($this);
    }

    /**
     * @param  ChildSalesHistory $salesHistory The ChildSalesHistory object to remove.
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function removeSalesHistory(ChildSalesHistory $salesHistory)
    {
        if ($this->getSalesHistories()->contains($salesHistory)) {
            $pos = $this->collSalesHistories->search($salesHistory);
            $this->collSalesHistories->remove($pos);
            if (null === $this->salesHistoriesScheduledForDeletion) {
                $this->salesHistoriesScheduledForDeletion = clone $this->collSalesHistories;
                $this->salesHistoriesScheduledForDeletion->clear();
            }
            $this->salesHistoriesScheduledForDeletion[]= clone $salesHistory;
            $salesHistory->setCustomerShipto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related SalesHistories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesHistory[] List of ChildSalesHistory objects
     */
    public function getSalesHistoriesJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesHistoryQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getSalesHistories($query, $con);
    }

    /**
     * Clears out the collSalesOrders collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesOrders()
     */
    public function clearSalesOrders()
    {
        $this->collSalesOrders = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesOrders collection loaded partially.
     */
    public function resetPartialSalesOrders($v = true)
    {
        $this->collSalesOrdersPartial = $v;
    }

    /**
     * Initializes the collSalesOrders collection.
     *
     * By default this just sets the collSalesOrders collection to an empty array (like clearcollSalesOrders());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesOrders($overrideExisting = true)
    {
        if (null !== $this->collSalesOrders && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesOrderTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesOrders = new $collectionClassName;
        $this->collSalesOrders->setModel('\SalesOrder');
    }

    /**
     * Gets an array of ChildSalesOrder objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomerShipto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesOrder[] List of ChildSalesOrder objects
     * @throws PropelException
     */
    public function getSalesOrders(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrdersPartial && !$this->isNew();
        if (null === $this->collSalesOrders || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesOrders) {
                // return empty collection
                $this->initSalesOrders();
            } else {
                $collSalesOrders = ChildSalesOrderQuery::create(null, $criteria)
                    ->filterByCustomerShipto($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesOrdersPartial && count($collSalesOrders)) {
                        $this->initSalesOrders(false);

                        foreach ($collSalesOrders as $obj) {
                            if (false == $this->collSalesOrders->contains($obj)) {
                                $this->collSalesOrders->append($obj);
                            }
                        }

                        $this->collSalesOrdersPartial = true;
                    }

                    return $collSalesOrders;
                }

                if ($partial && $this->collSalesOrders) {
                    foreach ($this->collSalesOrders as $obj) {
                        if ($obj->isNew()) {
                            $collSalesOrders[] = $obj;
                        }
                    }
                }

                $this->collSalesOrders = $collSalesOrders;
                $this->collSalesOrdersPartial = false;
            }
        }

        return $this->collSalesOrders;
    }

    /**
     * Sets a collection of ChildSalesOrder objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesOrders A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function setSalesOrders(Collection $salesOrders, ConnectionInterface $con = null)
    {
        /** @var ChildSalesOrder[] $salesOrdersToDelete */
        $salesOrdersToDelete = $this->getSalesOrders(new Criteria(), $con)->diff($salesOrders);


        $this->salesOrdersScheduledForDeletion = $salesOrdersToDelete;

        foreach ($salesOrdersToDelete as $salesOrderRemoved) {
            $salesOrderRemoved->setCustomerShipto(null);
        }

        $this->collSalesOrders = null;
        foreach ($salesOrders as $salesOrder) {
            $this->addSalesOrder($salesOrder);
        }

        $this->collSalesOrders = $salesOrders;
        $this->collSalesOrdersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesOrder objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesOrder objects.
     * @throws PropelException
     */
    public function countSalesOrders(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrdersPartial && !$this->isNew();
        if (null === $this->collSalesOrders || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesOrders) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesOrders());
            }

            $query = ChildSalesOrderQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerShipto($this)
                ->count($con);
        }

        return count($this->collSalesOrders);
    }

    /**
     * Method called to associate a ChildSalesOrder object to this object
     * through the ChildSalesOrder foreign key attribute.
     *
     * @param  ChildSalesOrder $l ChildSalesOrder
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function addSalesOrder(ChildSalesOrder $l)
    {
        if ($this->collSalesOrders === null) {
            $this->initSalesOrders();
            $this->collSalesOrdersPartial = true;
        }

        if (!$this->collSalesOrders->contains($l)) {
            $this->doAddSalesOrder($l);

            if ($this->salesOrdersScheduledForDeletion and $this->salesOrdersScheduledForDeletion->contains($l)) {
                $this->salesOrdersScheduledForDeletion->remove($this->salesOrdersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesOrder $salesOrder The ChildSalesOrder object to add.
     */
    protected function doAddSalesOrder(ChildSalesOrder $salesOrder)
    {
        $this->collSalesOrders[]= $salesOrder;
        $salesOrder->setCustomerShipto($this);
    }

    /**
     * @param  ChildSalesOrder $salesOrder The ChildSalesOrder object to remove.
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function removeSalesOrder(ChildSalesOrder $salesOrder)
    {
        if ($this->getSalesOrders()->contains($salesOrder)) {
            $pos = $this->collSalesOrders->search($salesOrder);
            $this->collSalesOrders->remove($pos);
            if (null === $this->salesOrdersScheduledForDeletion) {
                $this->salesOrdersScheduledForDeletion = clone $this->collSalesOrders;
                $this->salesOrdersScheduledForDeletion->clear();
            }
            $this->salesOrdersScheduledForDeletion[]= clone $salesOrder;
            $salesOrder->setCustomerShipto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related SalesOrders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesOrder[] List of ChildSalesOrder objects
     */
    public function getSalesOrdersJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesOrderQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getSalesOrders($query, $con);
    }

    /**
     * Clears out the collSoStandingOrderDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSoStandingOrderDetails()
     */
    public function clearSoStandingOrderDetails()
    {
        $this->collSoStandingOrderDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSoStandingOrderDetails collection loaded partially.
     */
    public function resetPartialSoStandingOrderDetails($v = true)
    {
        $this->collSoStandingOrderDetailsPartial = $v;
    }

    /**
     * Initializes the collSoStandingOrderDetails collection.
     *
     * By default this just sets the collSoStandingOrderDetails collection to an empty array (like clearcollSoStandingOrderDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSoStandingOrderDetails($overrideExisting = true)
    {
        if (null !== $this->collSoStandingOrderDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = SoStandingOrderDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collSoStandingOrderDetails = new $collectionClassName;
        $this->collSoStandingOrderDetails->setModel('\SoStandingOrderDetail');
    }

    /**
     * Gets an array of ChildSoStandingOrderDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomerShipto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSoStandingOrderDetail[] List of ChildSoStandingOrderDetail objects
     * @throws PropelException
     */
    public function getSoStandingOrderDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSoStandingOrderDetailsPartial && !$this->isNew();
        if (null === $this->collSoStandingOrderDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSoStandingOrderDetails) {
                // return empty collection
                $this->initSoStandingOrderDetails();
            } else {
                $collSoStandingOrderDetails = ChildSoStandingOrderDetailQuery::create(null, $criteria)
                    ->filterByCustomerShipto($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSoStandingOrderDetailsPartial && count($collSoStandingOrderDetails)) {
                        $this->initSoStandingOrderDetails(false);

                        foreach ($collSoStandingOrderDetails as $obj) {
                            if (false == $this->collSoStandingOrderDetails->contains($obj)) {
                                $this->collSoStandingOrderDetails->append($obj);
                            }
                        }

                        $this->collSoStandingOrderDetailsPartial = true;
                    }

                    return $collSoStandingOrderDetails;
                }

                if ($partial && $this->collSoStandingOrderDetails) {
                    foreach ($this->collSoStandingOrderDetails as $obj) {
                        if ($obj->isNew()) {
                            $collSoStandingOrderDetails[] = $obj;
                        }
                    }
                }

                $this->collSoStandingOrderDetails = $collSoStandingOrderDetails;
                $this->collSoStandingOrderDetailsPartial = false;
            }
        }

        return $this->collSoStandingOrderDetails;
    }

    /**
     * Sets a collection of ChildSoStandingOrderDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $soStandingOrderDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function setSoStandingOrderDetails(Collection $soStandingOrderDetails, ConnectionInterface $con = null)
    {
        /** @var ChildSoStandingOrderDetail[] $soStandingOrderDetailsToDelete */
        $soStandingOrderDetailsToDelete = $this->getSoStandingOrderDetails(new Criteria(), $con)->diff($soStandingOrderDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->soStandingOrderDetailsScheduledForDeletion = clone $soStandingOrderDetailsToDelete;

        foreach ($soStandingOrderDetailsToDelete as $soStandingOrderDetailRemoved) {
            $soStandingOrderDetailRemoved->setCustomerShipto(null);
        }

        $this->collSoStandingOrderDetails = null;
        foreach ($soStandingOrderDetails as $soStandingOrderDetail) {
            $this->addSoStandingOrderDetail($soStandingOrderDetail);
        }

        $this->collSoStandingOrderDetails = $soStandingOrderDetails;
        $this->collSoStandingOrderDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SoStandingOrderDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SoStandingOrderDetail objects.
     * @throws PropelException
     */
    public function countSoStandingOrderDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSoStandingOrderDetailsPartial && !$this->isNew();
        if (null === $this->collSoStandingOrderDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSoStandingOrderDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSoStandingOrderDetails());
            }

            $query = ChildSoStandingOrderDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerShipto($this)
                ->count($con);
        }

        return count($this->collSoStandingOrderDetails);
    }

    /**
     * Method called to associate a ChildSoStandingOrderDetail object to this object
     * through the ChildSoStandingOrderDetail foreign key attribute.
     *
     * @param  ChildSoStandingOrderDetail $l ChildSoStandingOrderDetail
     * @return $this|\CustomerShipto The current object (for fluent API support)
     */
    public function addSoStandingOrderDetail(ChildSoStandingOrderDetail $l)
    {
        if ($this->collSoStandingOrderDetails === null) {
            $this->initSoStandingOrderDetails();
            $this->collSoStandingOrderDetailsPartial = true;
        }

        if (!$this->collSoStandingOrderDetails->contains($l)) {
            $this->doAddSoStandingOrderDetail($l);

            if ($this->soStandingOrderDetailsScheduledForDeletion and $this->soStandingOrderDetailsScheduledForDeletion->contains($l)) {
                $this->soStandingOrderDetailsScheduledForDeletion->remove($this->soStandingOrderDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSoStandingOrderDetail $soStandingOrderDetail The ChildSoStandingOrderDetail object to add.
     */
    protected function doAddSoStandingOrderDetail(ChildSoStandingOrderDetail $soStandingOrderDetail)
    {
        $this->collSoStandingOrderDetails[]= $soStandingOrderDetail;
        $soStandingOrderDetail->setCustomerShipto($this);
    }

    /**
     * @param  ChildSoStandingOrderDetail $soStandingOrderDetail The ChildSoStandingOrderDetail object to remove.
     * @return $this|ChildCustomerShipto The current object (for fluent API support)
     */
    public function removeSoStandingOrderDetail(ChildSoStandingOrderDetail $soStandingOrderDetail)
    {
        if ($this->getSoStandingOrderDetails()->contains($soStandingOrderDetail)) {
            $pos = $this->collSoStandingOrderDetails->search($soStandingOrderDetail);
            $this->collSoStandingOrderDetails->remove($pos);
            if (null === $this->soStandingOrderDetailsScheduledForDeletion) {
                $this->soStandingOrderDetailsScheduledForDeletion = clone $this->collSoStandingOrderDetails;
                $this->soStandingOrderDetailsScheduledForDeletion->clear();
            }
            $this->soStandingOrderDetailsScheduledForDeletion[]= clone $soStandingOrderDetail;
            $soStandingOrderDetail->setCustomerShipto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related SoStandingOrderDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoStandingOrderDetail[] List of ChildSoStandingOrderDetail objects
     */
    public function getSoStandingOrderDetailsJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoStandingOrderDetailQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getSoStandingOrderDetails($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CustomerShipto is new, it will return
     * an empty collection; or if this CustomerShipto has previously
     * been saved, it will retrieve related SoStandingOrderDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CustomerShipto.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoStandingOrderDetail[] List of ChildSoStandingOrderDetail objects
     */
    public function getSoStandingOrderDetailsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoStandingOrderDetailQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getSoStandingOrderDetails($query, $con);
    }

    /**
     * Gets a single ChildSoStandingOrder object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildSoStandingOrder
     * @throws PropelException
     */
    public function getSoStandingOrder(ConnectionInterface $con = null)
    {

        if ($this->singleSoStandingOrder === null && !$this->isNew()) {
            $this->singleSoStandingOrder = ChildSoStandingOrderQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleSoStandingOrder;
    }

    /**
     * Sets a single ChildSoStandingOrder object as related to this object by a one-to-one relationship.
     *
     * @param  ChildSoStandingOrder $v ChildSoStandingOrder
     * @return $this|\CustomerShipto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSoStandingOrder(ChildSoStandingOrder $v = null)
    {
        $this->singleSoStandingOrder = $v;

        // Make sure that that the passed-in ChildSoStandingOrder isn't already associated with this object
        if ($v !== null && $v->getCustomerShipto(null, false) === null) {
            $v->setCustomerShipto($this);
        }

        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeCustomerShipto($this);
        }
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->arstname = null;
        $this->arstadr1 = null;
        $this->arstadr2 = null;
        $this->arstadr3 = null;
        $this->arstctry = null;
        $this->arstcity = null;
        $this->arststat = null;
        $this->arstzipcode = null;
        $this->arstdeliverydays = null;
        $this->arstcommcode = null;
        $this->arstallowsplit = null;
        $this->arstlindstsp = null;
        $this->arstlmecommcustid = null;
        $this->arstcatlgid = null;
        $this->arspsaleper1 = null;
        $this->arspsaleper2 = null;
        $this->arspsaleper3 = null;
        $this->artbmtaxcode = null;
        $this->arsttaxexemnbr = null;
        $this->intbwhse = null;
        $this->artbshipvia = null;
        $this->arstbord = null;
        $this->arstcredhold = null;
        $this->arstusercode = null;
        $this->arstpriclvl = null;
        $this->arstshipcomp = null;
        $this->arsttxbl = null;
        $this->arstpostal = null;
        $this->arstsalemtd = null;
        $this->arstinvmtd = null;
        $this->arstdateopen = null;
        $this->arstlastsaledate = null;
        $this->arstsale24mo1 = null;
        $this->arstinv24mo1 = null;
        $this->arstsale24mo2 = null;
        $this->arstinv24mo2 = null;
        $this->arstsale24mo3 = null;
        $this->arstinv24mo3 = null;
        $this->arstsale24mo4 = null;
        $this->arstinv24mo4 = null;
        $this->arstsale24mo5 = null;
        $this->arstinv24mo5 = null;
        $this->arstsale24mo6 = null;
        $this->arstinv24mo6 = null;
        $this->arstsale24mo7 = null;
        $this->arstinv24mo7 = null;
        $this->arstsale24mo8 = null;
        $this->arstinv24mo8 = null;
        $this->arstsale24mo9 = null;
        $this->arstinv24mo9 = null;
        $this->arstsale24mo10 = null;
        $this->arstinv24mo10 = null;
        $this->arstsale24mo11 = null;
        $this->arstinv24mo11 = null;
        $this->arstsale24mo12 = null;
        $this->arstinv24mo12 = null;
        $this->arstsale24mo13 = null;
        $this->arstinv24mo13 = null;
        $this->arstsale24mo14 = null;
        $this->arstinv24mo14 = null;
        $this->arstsale24mo15 = null;
        $this->arstinv24mo15 = null;
        $this->arstsale24mo16 = null;
        $this->arstinv24mo16 = null;
        $this->arstsale24mo17 = null;
        $this->arstinv24mo17 = null;
        $this->arstsale24mo18 = null;
        $this->arstinv24mo18 = null;
        $this->arstsale24mo19 = null;
        $this->arstinv24mo19 = null;
        $this->arstsale24mo20 = null;
        $this->arstinv24mo20 = null;
        $this->arstsale24mo21 = null;
        $this->arstinv24mo21 = null;
        $this->arstsale24mo22 = null;
        $this->arstinv24mo22 = null;
        $this->arstsale24mo23 = null;
        $this->arstinv24mo23 = null;
        $this->arstsale24mo24 = null;
        $this->arstinv24mo24 = null;
        $this->arstprimshipid = null;
        $this->arstmyvendid = null;
        $this->arstaddlpricdisc = null;
        $this->arstediinvc = null;
        $this->arstchrgfrt = null;
        $this->arstdistcntr = null;
        $this->arstdunsnbr = null;
        $this->arstrfmlvalu = null;
        $this->arstcustpopram = null;
        $this->artbroutcode = null;
        $this->arstupsacctnbr = null;
        $this->arstfobinputyn = null;
        $this->arstfobperlb = null;
        $this->arstsaleytd = null;
        $this->arstinvytd = null;
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
            if ($this->collArContacts) {
                foreach ($this->collArContacts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
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
            if ($this->collBookings) {
                foreach ($this->collBookings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesHistories) {
                foreach ($this->collSalesHistories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrders) {
                foreach ($this->collSalesOrders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSoStandingOrderDetails) {
                foreach ($this->collSoStandingOrderDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleSoStandingOrder) {
                $this->singleSoStandingOrder->clearAllReferences($deep);
            }
        } // if ($deep)

        $this->collArContacts = null;
        $this->collBookingDayCustomers = null;
        $this->collBookingDayDetails = null;
        $this->collBookings = null;
        $this->collSalesHistories = null;
        $this->collSalesOrders = null;
        $this->collSoStandingOrderDetails = null;
        $this->singleSoStandingOrder = null;
        $this->aCustomer = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CustomerShiptoTableMap::DEFAULT_STRING_FORMAT);
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
