<?php

namespace Base;

use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \Shipvia as ChildShipvia;
use \ShipviaQuery as ChildShipviaQuery;
use \Vendor as ChildVendor;
use \VendorQuery as ChildVendorQuery;
use \VendorShipfrom as ChildVendorShipfrom;
use \VendorShipfromQuery as ChildVendorShipfromQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderTableMap;
use Map\VendorShipfromTableMap;
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
 * Base class that represents a row from the 'ap_ship_from' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class VendorShipfrom implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\VendorShipfromTableMap';


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
     * The value for the apvevendid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apvevendid;

    /**
     * The value for the apfmshipid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apfmshipid;

    /**
     * The value for the apfmname field.
     *
     * @var        string
     */
    protected $apfmname;

    /**
     * The value for the apfmadr1 field.
     *
     * @var        string
     */
    protected $apfmadr1;

    /**
     * The value for the apfmadr2 field.
     *
     * @var        string
     */
    protected $apfmadr2;

    /**
     * The value for the apfmadr3 field.
     *
     * @var        string
     */
    protected $apfmadr3;

    /**
     * The value for the apfmctry field.
     *
     * @var        string
     */
    protected $apfmctry;

    /**
     * The value for the apfmcity field.
     *
     * @var        string
     */
    protected $apfmcity;

    /**
     * The value for the apfmstat field.
     *
     * @var        string
     */
    protected $apfmstat;

    /**
     * The value for the apfmzipcode field.
     *
     * @var        string
     */
    protected $apfmzipcode;

    /**
     * The value for the apfmcont1 field.
     *
     * @var        string
     */
    protected $apfmcont1;

    /**
     * The value for the apfmcont2 field.
     *
     * @var        string
     */
    protected $apfmcont2;

    /**
     * The value for the artbsviacode field.
     *
     * @var        string
     */
    protected $artbsviacode;

    /**
     * The value for the apfmglacct field.
     *
     * @var        string
     */
    protected $apfmglacct;

    /**
     * The value for the apfmpurmtd field.
     *
     * @var        string
     */
    protected $apfmpurmtd;

    /**
     * The value for the apfmpomtd field.
     *
     * @var        int
     */
    protected $apfmpomtd;

    /**
     * The value for the apfmdateopen field.
     *
     * @var        string
     */
    protected $apfmdateopen;

    /**
     * The value for the apfmlastpurdate field.
     *
     * @var        string
     */
    protected $apfmlastpurdate;

    /**
     * The value for the apfmpur24mo01 field.
     *
     * @var        string
     */
    protected $apfmpur24mo01;

    /**
     * The value for the apfmpo24mo01 field.
     *
     * @var        int
     */
    protected $apfmpo24mo01;

    /**
     * The value for the apfmpur24mo02 field.
     *
     * @var        string
     */
    protected $apfmpur24mo02;

    /**
     * The value for the apfmpo24mo02 field.
     *
     * @var        int
     */
    protected $apfmpo24mo02;

    /**
     * The value for the apfmpur24mo03 field.
     *
     * @var        string
     */
    protected $apfmpur24mo03;

    /**
     * The value for the apfmpo24mo03 field.
     *
     * @var        int
     */
    protected $apfmpo24mo03;

    /**
     * The value for the apfmpur24mo04 field.
     *
     * @var        string
     */
    protected $apfmpur24mo04;

    /**
     * The value for the apfmpo24mo04 field.
     *
     * @var        int
     */
    protected $apfmpo24mo04;

    /**
     * The value for the apfmpur24mo05 field.
     *
     * @var        string
     */
    protected $apfmpur24mo05;

    /**
     * The value for the apfmpo24mo05 field.
     *
     * @var        int
     */
    protected $apfmpo24mo05;

    /**
     * The value for the apfmpur24mo06 field.
     *
     * @var        string
     */
    protected $apfmpur24mo06;

    /**
     * The value for the apfmpo24mo06 field.
     *
     * @var        int
     */
    protected $apfmpo24mo06;

    /**
     * The value for the apfmpur24mo07 field.
     *
     * @var        string
     */
    protected $apfmpur24mo07;

    /**
     * The value for the apfmpo24mo07 field.
     *
     * @var        int
     */
    protected $apfmpo24mo07;

    /**
     * The value for the apfmpur24mo08 field.
     *
     * @var        string
     */
    protected $apfmpur24mo08;

    /**
     * The value for the apfmpo24mo08 field.
     *
     * @var        int
     */
    protected $apfmpo24mo08;

    /**
     * The value for the apfmpur24mo09 field.
     *
     * @var        string
     */
    protected $apfmpur24mo09;

    /**
     * The value for the apfmpo24mo09 field.
     *
     * @var        int
     */
    protected $apfmpo24mo09;

    /**
     * The value for the apfmpur24mo10 field.
     *
     * @var        string
     */
    protected $apfmpur24mo10;

    /**
     * The value for the apfmpo24mo10 field.
     *
     * @var        int
     */
    protected $apfmpo24mo10;

    /**
     * The value for the apfmpur24mo11 field.
     *
     * @var        string
     */
    protected $apfmpur24mo11;

    /**
     * The value for the apfmpo24mo11 field.
     *
     * @var        int
     */
    protected $apfmpo24mo11;

    /**
     * The value for the apfmpur24mo12 field.
     *
     * @var        string
     */
    protected $apfmpur24mo12;

    /**
     * The value for the apfmpo24mo12 field.
     *
     * @var        int
     */
    protected $apfmpo24mo12;

    /**
     * The value for the apfmpur24mo13 field.
     *
     * @var        string
     */
    protected $apfmpur24mo13;

    /**
     * The value for the apfmpo24mo13 field.
     *
     * @var        int
     */
    protected $apfmpo24mo13;

    /**
     * The value for the apfmpur24mo14 field.
     *
     * @var        string
     */
    protected $apfmpur24mo14;

    /**
     * The value for the apfmpo24mo14 field.
     *
     * @var        int
     */
    protected $apfmpo24mo14;

    /**
     * The value for the apfmpur24mo15 field.
     *
     * @var        string
     */
    protected $apfmpur24mo15;

    /**
     * The value for the apfmpo24mo15 field.
     *
     * @var        int
     */
    protected $apfmpo24mo15;

    /**
     * The value for the apfmpur24mo16 field.
     *
     * @var        string
     */
    protected $apfmpur24mo16;

    /**
     * The value for the apfmpo24mo16 field.
     *
     * @var        int
     */
    protected $apfmpo24mo16;

    /**
     * The value for the apfmpur24mo17 field.
     *
     * @var        string
     */
    protected $apfmpur24mo17;

    /**
     * The value for the apfmpo24mo17 field.
     *
     * @var        int
     */
    protected $apfmpo24mo17;

    /**
     * The value for the apfmpur24mo18 field.
     *
     * @var        string
     */
    protected $apfmpur24mo18;

    /**
     * The value for the apfmpo24mo18 field.
     *
     * @var        int
     */
    protected $apfmpo24mo18;

    /**
     * The value for the apfmpur24mo19 field.
     *
     * @var        string
     */
    protected $apfmpur24mo19;

    /**
     * The value for the apfmpo24mo19 field.
     *
     * @var        int
     */
    protected $apfmpo24mo19;

    /**
     * The value for the apfmpur24mo20 field.
     *
     * @var        string
     */
    protected $apfmpur24mo20;

    /**
     * The value for the apfmpo24mo20 field.
     *
     * @var        int
     */
    protected $apfmpo24mo20;

    /**
     * The value for the apfmpur24mo21 field.
     *
     * @var        string
     */
    protected $apfmpur24mo21;

    /**
     * The value for the apfmpo24mo21 field.
     *
     * @var        int
     */
    protected $apfmpo24mo21;

    /**
     * The value for the apfmpur24mo22 field.
     *
     * @var        string
     */
    protected $apfmpur24mo22;

    /**
     * The value for the apfmpo24mo22 field.
     *
     * @var        int
     */
    protected $apfmpo24mo22;

    /**
     * The value for the apfmpur24mo23 field.
     *
     * @var        string
     */
    protected $apfmpur24mo23;

    /**
     * The value for the apfmpo24mo23 field.
     *
     * @var        int
     */
    protected $apfmpo24mo23;

    /**
     * The value for the apfmpur24mo24 field.
     *
     * @var        string
     */
    protected $apfmpur24mo24;

    /**
     * The value for the apfmpo24mo24 field.
     *
     * @var        int
     */
    protected $apfmpo24mo24;

    /**
     * The value for the apfmouracctnbr field.
     *
     * @var        string
     */
    protected $apfmouracctnbr;

    /**
     * The value for the apfmpurytd field.
     *
     * @var        string
     */
    protected $apfmpurytd;

    /**
     * The value for the apfmpoytd field.
     *
     * @var        int
     */
    protected $apfmpoytd;

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
     * @var        ChildVendor
     */
    protected $aVendor;

    /**
     * @var        ChildShipvia
     */
    protected $aShipvia;

    /**
     * @var        ObjectCollection|ChildPurchaseOrder[] Collection to store aggregation of ChildPurchaseOrder objects.
     */
    protected $collPurchaseOrders;
    protected $collPurchaseOrdersPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrder[]
     */
    protected $purchaseOrdersScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->apvevendid = '';
        $this->apfmshipid = '';
    }

    /**
     * Initializes internal state of Base\VendorShipfrom object.
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
     * Compares this with another <code>VendorShipfrom</code> instance.  If
     * <code>obj</code> is an instance of <code>VendorShipfrom</code>, delegates to
     * <code>equals(VendorShipfrom)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|VendorShipfrom The current object, for fluid interface
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
     * Get the [apvevendid] column value.
     *
     * @return string
     */
    public function getApvevendid()
    {
        return $this->apvevendid;
    }

    /**
     * Get the [apfmshipid] column value.
     *
     * @return string
     */
    public function getApfmshipid()
    {
        return $this->apfmshipid;
    }

    /**
     * Get the [apfmname] column value.
     *
     * @return string
     */
    public function getApfmname()
    {
        return $this->apfmname;
    }

    /**
     * Get the [apfmadr1] column value.
     *
     * @return string
     */
    public function getApfmadr1()
    {
        return $this->apfmadr1;
    }

    /**
     * Get the [apfmadr2] column value.
     *
     * @return string
     */
    public function getApfmadr2()
    {
        return $this->apfmadr2;
    }

    /**
     * Get the [apfmadr3] column value.
     *
     * @return string
     */
    public function getApfmadr3()
    {
        return $this->apfmadr3;
    }

    /**
     * Get the [apfmctry] column value.
     *
     * @return string
     */
    public function getApfmctry()
    {
        return $this->apfmctry;
    }

    /**
     * Get the [apfmcity] column value.
     *
     * @return string
     */
    public function getApfmcity()
    {
        return $this->apfmcity;
    }

    /**
     * Get the [apfmstat] column value.
     *
     * @return string
     */
    public function getApfmstat()
    {
        return $this->apfmstat;
    }

    /**
     * Get the [apfmzipcode] column value.
     *
     * @return string
     */
    public function getApfmzipcode()
    {
        return $this->apfmzipcode;
    }

    /**
     * Get the [apfmcont1] column value.
     *
     * @return string
     */
    public function getApfmcont1()
    {
        return $this->apfmcont1;
    }

    /**
     * Get the [apfmcont2] column value.
     *
     * @return string
     */
    public function getApfmcont2()
    {
        return $this->apfmcont2;
    }

    /**
     * Get the [artbsviacode] column value.
     *
     * @return string
     */
    public function getArtbsviacode()
    {
        return $this->artbsviacode;
    }

    /**
     * Get the [apfmglacct] column value.
     *
     * @return string
     */
    public function getApfmglacct()
    {
        return $this->apfmglacct;
    }

    /**
     * Get the [apfmpurmtd] column value.
     *
     * @return string
     */
    public function getApfmpurmtd()
    {
        return $this->apfmpurmtd;
    }

    /**
     * Get the [apfmpomtd] column value.
     *
     * @return int
     */
    public function getApfmpomtd()
    {
        return $this->apfmpomtd;
    }

    /**
     * Get the [apfmdateopen] column value.
     *
     * @return string
     */
    public function getApfmdateopen()
    {
        return $this->apfmdateopen;
    }

    /**
     * Get the [apfmlastpurdate] column value.
     *
     * @return string
     */
    public function getApfmlastpurdate()
    {
        return $this->apfmlastpurdate;
    }

    /**
     * Get the [apfmpur24mo01] column value.
     *
     * @return string
     */
    public function getApfmpur24mo01()
    {
        return $this->apfmpur24mo01;
    }

    /**
     * Get the [apfmpo24mo01] column value.
     *
     * @return int
     */
    public function getApfmpo24mo01()
    {
        return $this->apfmpo24mo01;
    }

    /**
     * Get the [apfmpur24mo02] column value.
     *
     * @return string
     */
    public function getApfmpur24mo02()
    {
        return $this->apfmpur24mo02;
    }

    /**
     * Get the [apfmpo24mo02] column value.
     *
     * @return int
     */
    public function getApfmpo24mo02()
    {
        return $this->apfmpo24mo02;
    }

    /**
     * Get the [apfmpur24mo03] column value.
     *
     * @return string
     */
    public function getApfmpur24mo03()
    {
        return $this->apfmpur24mo03;
    }

    /**
     * Get the [apfmpo24mo03] column value.
     *
     * @return int
     */
    public function getApfmpo24mo03()
    {
        return $this->apfmpo24mo03;
    }

    /**
     * Get the [apfmpur24mo04] column value.
     *
     * @return string
     */
    public function getApfmpur24mo04()
    {
        return $this->apfmpur24mo04;
    }

    /**
     * Get the [apfmpo24mo04] column value.
     *
     * @return int
     */
    public function getApfmpo24mo04()
    {
        return $this->apfmpo24mo04;
    }

    /**
     * Get the [apfmpur24mo05] column value.
     *
     * @return string
     */
    public function getApfmpur24mo05()
    {
        return $this->apfmpur24mo05;
    }

    /**
     * Get the [apfmpo24mo05] column value.
     *
     * @return int
     */
    public function getApfmpo24mo05()
    {
        return $this->apfmpo24mo05;
    }

    /**
     * Get the [apfmpur24mo06] column value.
     *
     * @return string
     */
    public function getApfmpur24mo06()
    {
        return $this->apfmpur24mo06;
    }

    /**
     * Get the [apfmpo24mo06] column value.
     *
     * @return int
     */
    public function getApfmpo24mo06()
    {
        return $this->apfmpo24mo06;
    }

    /**
     * Get the [apfmpur24mo07] column value.
     *
     * @return string
     */
    public function getApfmpur24mo07()
    {
        return $this->apfmpur24mo07;
    }

    /**
     * Get the [apfmpo24mo07] column value.
     *
     * @return int
     */
    public function getApfmpo24mo07()
    {
        return $this->apfmpo24mo07;
    }

    /**
     * Get the [apfmpur24mo08] column value.
     *
     * @return string
     */
    public function getApfmpur24mo08()
    {
        return $this->apfmpur24mo08;
    }

    /**
     * Get the [apfmpo24mo08] column value.
     *
     * @return int
     */
    public function getApfmpo24mo08()
    {
        return $this->apfmpo24mo08;
    }

    /**
     * Get the [apfmpur24mo09] column value.
     *
     * @return string
     */
    public function getApfmpur24mo09()
    {
        return $this->apfmpur24mo09;
    }

    /**
     * Get the [apfmpo24mo09] column value.
     *
     * @return int
     */
    public function getApfmpo24mo09()
    {
        return $this->apfmpo24mo09;
    }

    /**
     * Get the [apfmpur24mo10] column value.
     *
     * @return string
     */
    public function getApfmpur24mo10()
    {
        return $this->apfmpur24mo10;
    }

    /**
     * Get the [apfmpo24mo10] column value.
     *
     * @return int
     */
    public function getApfmpo24mo10()
    {
        return $this->apfmpo24mo10;
    }

    /**
     * Get the [apfmpur24mo11] column value.
     *
     * @return string
     */
    public function getApfmpur24mo11()
    {
        return $this->apfmpur24mo11;
    }

    /**
     * Get the [apfmpo24mo11] column value.
     *
     * @return int
     */
    public function getApfmpo24mo11()
    {
        return $this->apfmpo24mo11;
    }

    /**
     * Get the [apfmpur24mo12] column value.
     *
     * @return string
     */
    public function getApfmpur24mo12()
    {
        return $this->apfmpur24mo12;
    }

    /**
     * Get the [apfmpo24mo12] column value.
     *
     * @return int
     */
    public function getApfmpo24mo12()
    {
        return $this->apfmpo24mo12;
    }

    /**
     * Get the [apfmpur24mo13] column value.
     *
     * @return string
     */
    public function getApfmpur24mo13()
    {
        return $this->apfmpur24mo13;
    }

    /**
     * Get the [apfmpo24mo13] column value.
     *
     * @return int
     */
    public function getApfmpo24mo13()
    {
        return $this->apfmpo24mo13;
    }

    /**
     * Get the [apfmpur24mo14] column value.
     *
     * @return string
     */
    public function getApfmpur24mo14()
    {
        return $this->apfmpur24mo14;
    }

    /**
     * Get the [apfmpo24mo14] column value.
     *
     * @return int
     */
    public function getApfmpo24mo14()
    {
        return $this->apfmpo24mo14;
    }

    /**
     * Get the [apfmpur24mo15] column value.
     *
     * @return string
     */
    public function getApfmpur24mo15()
    {
        return $this->apfmpur24mo15;
    }

    /**
     * Get the [apfmpo24mo15] column value.
     *
     * @return int
     */
    public function getApfmpo24mo15()
    {
        return $this->apfmpo24mo15;
    }

    /**
     * Get the [apfmpur24mo16] column value.
     *
     * @return string
     */
    public function getApfmpur24mo16()
    {
        return $this->apfmpur24mo16;
    }

    /**
     * Get the [apfmpo24mo16] column value.
     *
     * @return int
     */
    public function getApfmpo24mo16()
    {
        return $this->apfmpo24mo16;
    }

    /**
     * Get the [apfmpur24mo17] column value.
     *
     * @return string
     */
    public function getApfmpur24mo17()
    {
        return $this->apfmpur24mo17;
    }

    /**
     * Get the [apfmpo24mo17] column value.
     *
     * @return int
     */
    public function getApfmpo24mo17()
    {
        return $this->apfmpo24mo17;
    }

    /**
     * Get the [apfmpur24mo18] column value.
     *
     * @return string
     */
    public function getApfmpur24mo18()
    {
        return $this->apfmpur24mo18;
    }

    /**
     * Get the [apfmpo24mo18] column value.
     *
     * @return int
     */
    public function getApfmpo24mo18()
    {
        return $this->apfmpo24mo18;
    }

    /**
     * Get the [apfmpur24mo19] column value.
     *
     * @return string
     */
    public function getApfmpur24mo19()
    {
        return $this->apfmpur24mo19;
    }

    /**
     * Get the [apfmpo24mo19] column value.
     *
     * @return int
     */
    public function getApfmpo24mo19()
    {
        return $this->apfmpo24mo19;
    }

    /**
     * Get the [apfmpur24mo20] column value.
     *
     * @return string
     */
    public function getApfmpur24mo20()
    {
        return $this->apfmpur24mo20;
    }

    /**
     * Get the [apfmpo24mo20] column value.
     *
     * @return int
     */
    public function getApfmpo24mo20()
    {
        return $this->apfmpo24mo20;
    }

    /**
     * Get the [apfmpur24mo21] column value.
     *
     * @return string
     */
    public function getApfmpur24mo21()
    {
        return $this->apfmpur24mo21;
    }

    /**
     * Get the [apfmpo24mo21] column value.
     *
     * @return int
     */
    public function getApfmpo24mo21()
    {
        return $this->apfmpo24mo21;
    }

    /**
     * Get the [apfmpur24mo22] column value.
     *
     * @return string
     */
    public function getApfmpur24mo22()
    {
        return $this->apfmpur24mo22;
    }

    /**
     * Get the [apfmpo24mo22] column value.
     *
     * @return int
     */
    public function getApfmpo24mo22()
    {
        return $this->apfmpo24mo22;
    }

    /**
     * Get the [apfmpur24mo23] column value.
     *
     * @return string
     */
    public function getApfmpur24mo23()
    {
        return $this->apfmpur24mo23;
    }

    /**
     * Get the [apfmpo24mo23] column value.
     *
     * @return int
     */
    public function getApfmpo24mo23()
    {
        return $this->apfmpo24mo23;
    }

    /**
     * Get the [apfmpur24mo24] column value.
     *
     * @return string
     */
    public function getApfmpur24mo24()
    {
        return $this->apfmpur24mo24;
    }

    /**
     * Get the [apfmpo24mo24] column value.
     *
     * @return int
     */
    public function getApfmpo24mo24()
    {
        return $this->apfmpo24mo24;
    }

    /**
     * Get the [apfmouracctnbr] column value.
     *
     * @return string
     */
    public function getApfmouracctnbr()
    {
        return $this->apfmouracctnbr;
    }

    /**
     * Get the [apfmpurytd] column value.
     *
     * @return string
     */
    public function getApfmPurYtd()
    {
        return $this->apfmpurytd;
    }

    /**
     * Get the [apfmpoytd] column value.
     *
     * @return int
     */
    public function getApfmPoYtd()
    {
        return $this->apfmpoytd;
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
     * Set the value of [apvevendid] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APVEVENDID] = true;
        }

        if ($this->aVendor !== null && $this->aVendor->getApvevendid() !== $v) {
            $this->aVendor = null;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [apfmshipid] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmshipid !== $v) {
            $this->apfmshipid = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMSHIPID] = true;
        }

        return $this;
    } // setApfmshipid()

    /**
     * Set the value of [apfmname] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmname !== $v) {
            $this->apfmname = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMNAME] = true;
        }

        return $this;
    } // setApfmname()

    /**
     * Set the value of [apfmadr1] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmadr1 !== $v) {
            $this->apfmadr1 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMADR1] = true;
        }

        return $this;
    } // setApfmadr1()

    /**
     * Set the value of [apfmadr2] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmadr2 !== $v) {
            $this->apfmadr2 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMADR2] = true;
        }

        return $this;
    } // setApfmadr2()

    /**
     * Set the value of [apfmadr3] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmadr3 !== $v) {
            $this->apfmadr3 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMADR3] = true;
        }

        return $this;
    } // setApfmadr3()

    /**
     * Set the value of [apfmctry] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmctry !== $v) {
            $this->apfmctry = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMCTRY] = true;
        }

        return $this;
    } // setApfmctry()

    /**
     * Set the value of [apfmcity] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmcity !== $v) {
            $this->apfmcity = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMCITY] = true;
        }

        return $this;
    } // setApfmcity()

    /**
     * Set the value of [apfmstat] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmstat !== $v) {
            $this->apfmstat = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMSTAT] = true;
        }

        return $this;
    } // setApfmstat()

    /**
     * Set the value of [apfmzipcode] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmzipcode !== $v) {
            $this->apfmzipcode = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMZIPCODE] = true;
        }

        return $this;
    } // setApfmzipcode()

    /**
     * Set the value of [apfmcont1] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmcont1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmcont1 !== $v) {
            $this->apfmcont1 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMCONT1] = true;
        }

        return $this;
    } // setApfmcont1()

    /**
     * Set the value of [apfmcont2] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmcont2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmcont2 !== $v) {
            $this->apfmcont2 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMCONT2] = true;
        }

        return $this;
    } // setApfmcont2()

    /**
     * Set the value of [artbsviacode] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setArtbsviacode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviacode !== $v) {
            $this->artbsviacode = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_ARTBSVIACODE] = true;
        }

        if ($this->aShipvia !== null && $this->aShipvia->getArtbshipvia() !== $v) {
            $this->aShipvia = null;
        }

        return $this;
    } // setArtbsviacode()

    /**
     * Set the value of [apfmglacct] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmglacct !== $v) {
            $this->apfmglacct = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMGLACCT] = true;
        }

        return $this;
    } // setApfmglacct()

    /**
     * Set the value of [apfmpurmtd] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpurmtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpurmtd !== $v) {
            $this->apfmpurmtd = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPURMTD] = true;
        }

        return $this;
    } // setApfmpurmtd()

    /**
     * Set the value of [apfmpomtd] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpomtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpomtd !== $v) {
            $this->apfmpomtd = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPOMTD] = true;
        }

        return $this;
    } // setApfmpomtd()

    /**
     * Set the value of [apfmdateopen] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmdateopen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmdateopen !== $v) {
            $this->apfmdateopen = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMDATEOPEN] = true;
        }

        return $this;
    } // setApfmdateopen()

    /**
     * Set the value of [apfmlastpurdate] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmlastpurdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmlastpurdate !== $v) {
            $this->apfmlastpurdate = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMLASTPURDATE] = true;
        }

        return $this;
    } // setApfmlastpurdate()

    /**
     * Set the value of [apfmpur24mo01] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo01 !== $v) {
            $this->apfmpur24mo01 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO01] = true;
        }

        return $this;
    } // setApfmpur24mo01()

    /**
     * Set the value of [apfmpo24mo01] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo01($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo01 !== $v) {
            $this->apfmpo24mo01 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO01] = true;
        }

        return $this;
    } // setApfmpo24mo01()

    /**
     * Set the value of [apfmpur24mo02] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo02 !== $v) {
            $this->apfmpur24mo02 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO02] = true;
        }

        return $this;
    } // setApfmpur24mo02()

    /**
     * Set the value of [apfmpo24mo02] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo02($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo02 !== $v) {
            $this->apfmpo24mo02 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO02] = true;
        }

        return $this;
    } // setApfmpo24mo02()

    /**
     * Set the value of [apfmpur24mo03] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo03 !== $v) {
            $this->apfmpur24mo03 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO03] = true;
        }

        return $this;
    } // setApfmpur24mo03()

    /**
     * Set the value of [apfmpo24mo03] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo03($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo03 !== $v) {
            $this->apfmpo24mo03 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO03] = true;
        }

        return $this;
    } // setApfmpo24mo03()

    /**
     * Set the value of [apfmpur24mo04] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo04 !== $v) {
            $this->apfmpur24mo04 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO04] = true;
        }

        return $this;
    } // setApfmpur24mo04()

    /**
     * Set the value of [apfmpo24mo04] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo04($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo04 !== $v) {
            $this->apfmpo24mo04 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO04] = true;
        }

        return $this;
    } // setApfmpo24mo04()

    /**
     * Set the value of [apfmpur24mo05] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo05 !== $v) {
            $this->apfmpur24mo05 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO05] = true;
        }

        return $this;
    } // setApfmpur24mo05()

    /**
     * Set the value of [apfmpo24mo05] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo05($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo05 !== $v) {
            $this->apfmpo24mo05 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO05] = true;
        }

        return $this;
    } // setApfmpo24mo05()

    /**
     * Set the value of [apfmpur24mo06] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo06 !== $v) {
            $this->apfmpur24mo06 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO06] = true;
        }

        return $this;
    } // setApfmpur24mo06()

    /**
     * Set the value of [apfmpo24mo06] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo06($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo06 !== $v) {
            $this->apfmpo24mo06 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO06] = true;
        }

        return $this;
    } // setApfmpo24mo06()

    /**
     * Set the value of [apfmpur24mo07] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo07 !== $v) {
            $this->apfmpur24mo07 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO07] = true;
        }

        return $this;
    } // setApfmpur24mo07()

    /**
     * Set the value of [apfmpo24mo07] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo07($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo07 !== $v) {
            $this->apfmpo24mo07 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO07] = true;
        }

        return $this;
    } // setApfmpo24mo07()

    /**
     * Set the value of [apfmpur24mo08] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo08 !== $v) {
            $this->apfmpur24mo08 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO08] = true;
        }

        return $this;
    } // setApfmpur24mo08()

    /**
     * Set the value of [apfmpo24mo08] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo08($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo08 !== $v) {
            $this->apfmpo24mo08 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO08] = true;
        }

        return $this;
    } // setApfmpo24mo08()

    /**
     * Set the value of [apfmpur24mo09] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo09 !== $v) {
            $this->apfmpur24mo09 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO09] = true;
        }

        return $this;
    } // setApfmpur24mo09()

    /**
     * Set the value of [apfmpo24mo09] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo09($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo09 !== $v) {
            $this->apfmpo24mo09 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO09] = true;
        }

        return $this;
    } // setApfmpo24mo09()

    /**
     * Set the value of [apfmpur24mo10] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo10 !== $v) {
            $this->apfmpur24mo10 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO10] = true;
        }

        return $this;
    } // setApfmpur24mo10()

    /**
     * Set the value of [apfmpo24mo10] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo10 !== $v) {
            $this->apfmpo24mo10 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO10] = true;
        }

        return $this;
    } // setApfmpo24mo10()

    /**
     * Set the value of [apfmpur24mo11] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo11 !== $v) {
            $this->apfmpur24mo11 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO11] = true;
        }

        return $this;
    } // setApfmpur24mo11()

    /**
     * Set the value of [apfmpo24mo11] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo11($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo11 !== $v) {
            $this->apfmpo24mo11 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO11] = true;
        }

        return $this;
    } // setApfmpo24mo11()

    /**
     * Set the value of [apfmpur24mo12] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo12 !== $v) {
            $this->apfmpur24mo12 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO12] = true;
        }

        return $this;
    } // setApfmpur24mo12()

    /**
     * Set the value of [apfmpo24mo12] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo12($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo12 !== $v) {
            $this->apfmpo24mo12 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO12] = true;
        }

        return $this;
    } // setApfmpo24mo12()

    /**
     * Set the value of [apfmpur24mo13] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo13 !== $v) {
            $this->apfmpur24mo13 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO13] = true;
        }

        return $this;
    } // setApfmpur24mo13()

    /**
     * Set the value of [apfmpo24mo13] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo13($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo13 !== $v) {
            $this->apfmpo24mo13 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO13] = true;
        }

        return $this;
    } // setApfmpo24mo13()

    /**
     * Set the value of [apfmpur24mo14] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo14 !== $v) {
            $this->apfmpur24mo14 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO14] = true;
        }

        return $this;
    } // setApfmpur24mo14()

    /**
     * Set the value of [apfmpo24mo14] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo14($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo14 !== $v) {
            $this->apfmpo24mo14 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO14] = true;
        }

        return $this;
    } // setApfmpo24mo14()

    /**
     * Set the value of [apfmpur24mo15] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo15 !== $v) {
            $this->apfmpur24mo15 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO15] = true;
        }

        return $this;
    } // setApfmpur24mo15()

    /**
     * Set the value of [apfmpo24mo15] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo15($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo15 !== $v) {
            $this->apfmpo24mo15 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO15] = true;
        }

        return $this;
    } // setApfmpo24mo15()

    /**
     * Set the value of [apfmpur24mo16] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo16 !== $v) {
            $this->apfmpur24mo16 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO16] = true;
        }

        return $this;
    } // setApfmpur24mo16()

    /**
     * Set the value of [apfmpo24mo16] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo16($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo16 !== $v) {
            $this->apfmpo24mo16 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO16] = true;
        }

        return $this;
    } // setApfmpo24mo16()

    /**
     * Set the value of [apfmpur24mo17] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo17 !== $v) {
            $this->apfmpur24mo17 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO17] = true;
        }

        return $this;
    } // setApfmpur24mo17()

    /**
     * Set the value of [apfmpo24mo17] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo17($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo17 !== $v) {
            $this->apfmpo24mo17 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO17] = true;
        }

        return $this;
    } // setApfmpo24mo17()

    /**
     * Set the value of [apfmpur24mo18] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo18 !== $v) {
            $this->apfmpur24mo18 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO18] = true;
        }

        return $this;
    } // setApfmpur24mo18()

    /**
     * Set the value of [apfmpo24mo18] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo18($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo18 !== $v) {
            $this->apfmpo24mo18 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO18] = true;
        }

        return $this;
    } // setApfmpo24mo18()

    /**
     * Set the value of [apfmpur24mo19] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo19 !== $v) {
            $this->apfmpur24mo19 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO19] = true;
        }

        return $this;
    } // setApfmpur24mo19()

    /**
     * Set the value of [apfmpo24mo19] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo19($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo19 !== $v) {
            $this->apfmpo24mo19 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO19] = true;
        }

        return $this;
    } // setApfmpo24mo19()

    /**
     * Set the value of [apfmpur24mo20] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo20($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo20 !== $v) {
            $this->apfmpur24mo20 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO20] = true;
        }

        return $this;
    } // setApfmpur24mo20()

    /**
     * Set the value of [apfmpo24mo20] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo20($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo20 !== $v) {
            $this->apfmpo24mo20 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO20] = true;
        }

        return $this;
    } // setApfmpo24mo20()

    /**
     * Set the value of [apfmpur24mo21] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo21($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo21 !== $v) {
            $this->apfmpur24mo21 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO21] = true;
        }

        return $this;
    } // setApfmpur24mo21()

    /**
     * Set the value of [apfmpo24mo21] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo21($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo21 !== $v) {
            $this->apfmpo24mo21 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO21] = true;
        }

        return $this;
    } // setApfmpo24mo21()

    /**
     * Set the value of [apfmpur24mo22] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo22($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo22 !== $v) {
            $this->apfmpur24mo22 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO22] = true;
        }

        return $this;
    } // setApfmpur24mo22()

    /**
     * Set the value of [apfmpo24mo22] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo22($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo22 !== $v) {
            $this->apfmpo24mo22 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO22] = true;
        }

        return $this;
    } // setApfmpo24mo22()

    /**
     * Set the value of [apfmpur24mo23] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo23($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo23 !== $v) {
            $this->apfmpur24mo23 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO23] = true;
        }

        return $this;
    } // setApfmpur24mo23()

    /**
     * Set the value of [apfmpo24mo23] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo23($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo23 !== $v) {
            $this->apfmpo24mo23 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO23] = true;
        }

        return $this;
    } // setApfmpo24mo23()

    /**
     * Set the value of [apfmpur24mo24] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpur24mo24($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpur24mo24 !== $v) {
            $this->apfmpur24mo24 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPUR24MO24] = true;
        }

        return $this;
    } // setApfmpur24mo24()

    /**
     * Set the value of [apfmpo24mo24] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmpo24mo24($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpo24mo24 !== $v) {
            $this->apfmpo24mo24 = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPO24MO24] = true;
        }

        return $this;
    } // setApfmpo24mo24()

    /**
     * Set the value of [apfmouracctnbr] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmouracctnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmouracctnbr !== $v) {
            $this->apfmouracctnbr = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMOURACCTNBR] = true;
        }

        return $this;
    } // setApfmouracctnbr()

    /**
     * Set the value of [apfmpurytd] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmPurYtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmpurytd !== $v) {
            $this->apfmpurytd = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPURYTD] = true;
        }

        return $this;
    } // setApfmPurYtd()

    /**
     * Set the value of [apfmpoytd] column.
     *
     * @param int $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setApfmPoYtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apfmpoytd !== $v) {
            $this->apfmpoytd = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_APFMPOYTD] = true;
        }

        return $this;
    } // setApfmPoYtd()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[VendorShipfromTableMap::COL_DUMMY] = true;
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
            if ($this->apvevendid !== '') {
                return false;
            }

            if ($this->apfmshipid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : VendorShipfromTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmcont1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmcont1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmcont2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmcont2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : VendorShipfromTableMap::translateFieldName('Artbsviacode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviacode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpurmtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpurmtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpomtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpomtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmdateopen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmdateopen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmlastpurdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmlastpurdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo01 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo02 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo03 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo04 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo05 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo06 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo07 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo08 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo09 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo11 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo12 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo13 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo14 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo15 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo16 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo17 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo18 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo19 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo20 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo20 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo21 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo21 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo22 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo22 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo23 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo23 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpur24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpur24mo24 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmpo24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpo24mo24 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : VendorShipfromTableMap::translateFieldName('Apfmouracctnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmouracctnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : VendorShipfromTableMap::translateFieldName('ApfmPurYtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpurytd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : VendorShipfromTableMap::translateFieldName('ApfmPoYtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmpoytd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : VendorShipfromTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : VendorShipfromTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : VendorShipfromTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 72; // 72 = VendorShipfromTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\VendorShipfrom'), 0, $e);
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
        if ($this->aVendor !== null && $this->apvevendid !== $this->aVendor->getApvevendid()) {
            $this->aVendor = null;
        }
        if ($this->aShipvia !== null && $this->artbsviacode !== $this->aShipvia->getArtbshipvia()) {
            $this->aShipvia = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(VendorShipfromTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildVendorShipfromQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aVendor = null;
            $this->aShipvia = null;
            $this->collPurchaseOrders = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see VendorShipfrom::setDeleted()
     * @see VendorShipfrom::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(VendorShipfromTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildVendorShipfromQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(VendorShipfromTableMap::DATABASE_NAME);
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
                VendorShipfromTableMap::addInstanceToPool($this);
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

            if ($this->aVendor !== null) {
                if ($this->aVendor->isModified() || $this->aVendor->isNew()) {
                    $affectedRows += $this->aVendor->save($con);
                }
                $this->setVendor($this->aVendor);
            }

            if ($this->aShipvia !== null) {
                if ($this->aShipvia->isModified() || $this->aShipvia->isNew()) {
                    $affectedRows += $this->aShipvia->save($con);
                }
                $this->setShipvia($this->aShipvia);
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

            if ($this->purchaseOrdersScheduledForDeletion !== null) {
                if (!$this->purchaseOrdersScheduledForDeletion->isEmpty()) {
                    foreach ($this->purchaseOrdersScheduledForDeletion as $purchaseOrder) {
                        // need to save related object because we set the relation to null
                        $purchaseOrder->save($con);
                    }
                    $this->purchaseOrdersScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrders !== null) {
                foreach ($this->collPurchaseOrders as $referrerFK) {
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
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmShipId';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmName';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmAdr1';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmAdr2';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmAdr3';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmCtry';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMCITY)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmCity';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmStat';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmZipCode';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMCONT1)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmCont1';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMCONT2)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmCont2';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_ARTBSVIACODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaCode';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmGlAcct';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPURMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPurMtd';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPOMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPoMtd';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMDATEOPEN)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmDateOpen';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMLASTPURDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmLastPurDate';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO01)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo01';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO01)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo01';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO02)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo02';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO02)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo02';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO03)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo03';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO03)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo03';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO04)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo04';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO04)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo04';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO05)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo05';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO05)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo05';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO06)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo06';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO06)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo06';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO07)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo07';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO07)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo07';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO08)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo08';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO08)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo08';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO09)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo09';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO09)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo09';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo10';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo10';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo11';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo11';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo12';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo12';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo13';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo13';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo14';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo14';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo15';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo15';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo16';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo16';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo17';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo17';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo18';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo18';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo19';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo19';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo20';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo20';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo21';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo21';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo22';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo22';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo23';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo23';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPur24mo24';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPo24mo24';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMOURACCTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmOurAcctNbr';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPURYTD)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPurYtd';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPOYTD)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmPoYtd';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ap_ship_from (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ApveVendId':
                        $stmt->bindValue($identifier, $this->apvevendid, PDO::PARAM_STR);
                        break;
                    case 'ApfmShipId':
                        $stmt->bindValue($identifier, $this->apfmshipid, PDO::PARAM_STR);
                        break;
                    case 'ApfmName':
                        $stmt->bindValue($identifier, $this->apfmname, PDO::PARAM_STR);
                        break;
                    case 'ApfmAdr1':
                        $stmt->bindValue($identifier, $this->apfmadr1, PDO::PARAM_STR);
                        break;
                    case 'ApfmAdr2':
                        $stmt->bindValue($identifier, $this->apfmadr2, PDO::PARAM_STR);
                        break;
                    case 'ApfmAdr3':
                        $stmt->bindValue($identifier, $this->apfmadr3, PDO::PARAM_STR);
                        break;
                    case 'ApfmCtry':
                        $stmt->bindValue($identifier, $this->apfmctry, PDO::PARAM_STR);
                        break;
                    case 'ApfmCity':
                        $stmt->bindValue($identifier, $this->apfmcity, PDO::PARAM_STR);
                        break;
                    case 'ApfmStat':
                        $stmt->bindValue($identifier, $this->apfmstat, PDO::PARAM_STR);
                        break;
                    case 'ApfmZipCode':
                        $stmt->bindValue($identifier, $this->apfmzipcode, PDO::PARAM_STR);
                        break;
                    case 'ApfmCont1':
                        $stmt->bindValue($identifier, $this->apfmcont1, PDO::PARAM_STR);
                        break;
                    case 'ApfmCont2':
                        $stmt->bindValue($identifier, $this->apfmcont2, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaCode':
                        $stmt->bindValue($identifier, $this->artbsviacode, PDO::PARAM_STR);
                        break;
                    case 'ApfmGlAcct':
                        $stmt->bindValue($identifier, $this->apfmglacct, PDO::PARAM_STR);
                        break;
                    case 'ApfmPurMtd':
                        $stmt->bindValue($identifier, $this->apfmpurmtd, PDO::PARAM_STR);
                        break;
                    case 'ApfmPoMtd':
                        $stmt->bindValue($identifier, $this->apfmpomtd, PDO::PARAM_INT);
                        break;
                    case 'ApfmDateOpen':
                        $stmt->bindValue($identifier, $this->apfmdateopen, PDO::PARAM_STR);
                        break;
                    case 'ApfmLastPurDate':
                        $stmt->bindValue($identifier, $this->apfmlastpurdate, PDO::PARAM_STR);
                        break;
                    case 'ApfmPur24mo01':
                        $stmt->bindValue($identifier, $this->apfmpur24mo01, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo01':
                        $stmt->bindValue($identifier, $this->apfmpo24mo01, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo02':
                        $stmt->bindValue($identifier, $this->apfmpur24mo02, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo02':
                        $stmt->bindValue($identifier, $this->apfmpo24mo02, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo03':
                        $stmt->bindValue($identifier, $this->apfmpur24mo03, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo03':
                        $stmt->bindValue($identifier, $this->apfmpo24mo03, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo04':
                        $stmt->bindValue($identifier, $this->apfmpur24mo04, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo04':
                        $stmt->bindValue($identifier, $this->apfmpo24mo04, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo05':
                        $stmt->bindValue($identifier, $this->apfmpur24mo05, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo05':
                        $stmt->bindValue($identifier, $this->apfmpo24mo05, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo06':
                        $stmt->bindValue($identifier, $this->apfmpur24mo06, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo06':
                        $stmt->bindValue($identifier, $this->apfmpo24mo06, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo07':
                        $stmt->bindValue($identifier, $this->apfmpur24mo07, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo07':
                        $stmt->bindValue($identifier, $this->apfmpo24mo07, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo08':
                        $stmt->bindValue($identifier, $this->apfmpur24mo08, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo08':
                        $stmt->bindValue($identifier, $this->apfmpo24mo08, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo09':
                        $stmt->bindValue($identifier, $this->apfmpur24mo09, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo09':
                        $stmt->bindValue($identifier, $this->apfmpo24mo09, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo10':
                        $stmt->bindValue($identifier, $this->apfmpur24mo10, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo10':
                        $stmt->bindValue($identifier, $this->apfmpo24mo10, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo11':
                        $stmt->bindValue($identifier, $this->apfmpur24mo11, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo11':
                        $stmt->bindValue($identifier, $this->apfmpo24mo11, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo12':
                        $stmt->bindValue($identifier, $this->apfmpur24mo12, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo12':
                        $stmt->bindValue($identifier, $this->apfmpo24mo12, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo13':
                        $stmt->bindValue($identifier, $this->apfmpur24mo13, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo13':
                        $stmt->bindValue($identifier, $this->apfmpo24mo13, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo14':
                        $stmt->bindValue($identifier, $this->apfmpur24mo14, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo14':
                        $stmt->bindValue($identifier, $this->apfmpo24mo14, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo15':
                        $stmt->bindValue($identifier, $this->apfmpur24mo15, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo15':
                        $stmt->bindValue($identifier, $this->apfmpo24mo15, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo16':
                        $stmt->bindValue($identifier, $this->apfmpur24mo16, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo16':
                        $stmt->bindValue($identifier, $this->apfmpo24mo16, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo17':
                        $stmt->bindValue($identifier, $this->apfmpur24mo17, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo17':
                        $stmt->bindValue($identifier, $this->apfmpo24mo17, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo18':
                        $stmt->bindValue($identifier, $this->apfmpur24mo18, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo18':
                        $stmt->bindValue($identifier, $this->apfmpo24mo18, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo19':
                        $stmt->bindValue($identifier, $this->apfmpur24mo19, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo19':
                        $stmt->bindValue($identifier, $this->apfmpo24mo19, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo20':
                        $stmt->bindValue($identifier, $this->apfmpur24mo20, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo20':
                        $stmt->bindValue($identifier, $this->apfmpo24mo20, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo21':
                        $stmt->bindValue($identifier, $this->apfmpur24mo21, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo21':
                        $stmt->bindValue($identifier, $this->apfmpo24mo21, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo22':
                        $stmt->bindValue($identifier, $this->apfmpur24mo22, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo22':
                        $stmt->bindValue($identifier, $this->apfmpo24mo22, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo23':
                        $stmt->bindValue($identifier, $this->apfmpur24mo23, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo23':
                        $stmt->bindValue($identifier, $this->apfmpo24mo23, PDO::PARAM_INT);
                        break;
                    case 'ApfmPur24mo24':
                        $stmt->bindValue($identifier, $this->apfmpur24mo24, PDO::PARAM_STR);
                        break;
                    case 'ApfmPo24mo24':
                        $stmt->bindValue($identifier, $this->apfmpo24mo24, PDO::PARAM_INT);
                        break;
                    case 'ApfmOurAcctNbr':
                        $stmt->bindValue($identifier, $this->apfmouracctnbr, PDO::PARAM_STR);
                        break;
                    case 'ApfmPurYtd':
                        $stmt->bindValue($identifier, $this->apfmpurytd, PDO::PARAM_STR);
                        break;
                    case 'ApfmPoYtd':
                        $stmt->bindValue($identifier, $this->apfmpoytd, PDO::PARAM_INT);
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
        $pos = VendorShipfromTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getApvevendid();
                break;
            case 1:
                return $this->getApfmshipid();
                break;
            case 2:
                return $this->getApfmname();
                break;
            case 3:
                return $this->getApfmadr1();
                break;
            case 4:
                return $this->getApfmadr2();
                break;
            case 5:
                return $this->getApfmadr3();
                break;
            case 6:
                return $this->getApfmctry();
                break;
            case 7:
                return $this->getApfmcity();
                break;
            case 8:
                return $this->getApfmstat();
                break;
            case 9:
                return $this->getApfmzipcode();
                break;
            case 10:
                return $this->getApfmcont1();
                break;
            case 11:
                return $this->getApfmcont2();
                break;
            case 12:
                return $this->getArtbsviacode();
                break;
            case 13:
                return $this->getApfmglacct();
                break;
            case 14:
                return $this->getApfmpurmtd();
                break;
            case 15:
                return $this->getApfmpomtd();
                break;
            case 16:
                return $this->getApfmdateopen();
                break;
            case 17:
                return $this->getApfmlastpurdate();
                break;
            case 18:
                return $this->getApfmpur24mo01();
                break;
            case 19:
                return $this->getApfmpo24mo01();
                break;
            case 20:
                return $this->getApfmpur24mo02();
                break;
            case 21:
                return $this->getApfmpo24mo02();
                break;
            case 22:
                return $this->getApfmpur24mo03();
                break;
            case 23:
                return $this->getApfmpo24mo03();
                break;
            case 24:
                return $this->getApfmpur24mo04();
                break;
            case 25:
                return $this->getApfmpo24mo04();
                break;
            case 26:
                return $this->getApfmpur24mo05();
                break;
            case 27:
                return $this->getApfmpo24mo05();
                break;
            case 28:
                return $this->getApfmpur24mo06();
                break;
            case 29:
                return $this->getApfmpo24mo06();
                break;
            case 30:
                return $this->getApfmpur24mo07();
                break;
            case 31:
                return $this->getApfmpo24mo07();
                break;
            case 32:
                return $this->getApfmpur24mo08();
                break;
            case 33:
                return $this->getApfmpo24mo08();
                break;
            case 34:
                return $this->getApfmpur24mo09();
                break;
            case 35:
                return $this->getApfmpo24mo09();
                break;
            case 36:
                return $this->getApfmpur24mo10();
                break;
            case 37:
                return $this->getApfmpo24mo10();
                break;
            case 38:
                return $this->getApfmpur24mo11();
                break;
            case 39:
                return $this->getApfmpo24mo11();
                break;
            case 40:
                return $this->getApfmpur24mo12();
                break;
            case 41:
                return $this->getApfmpo24mo12();
                break;
            case 42:
                return $this->getApfmpur24mo13();
                break;
            case 43:
                return $this->getApfmpo24mo13();
                break;
            case 44:
                return $this->getApfmpur24mo14();
                break;
            case 45:
                return $this->getApfmpo24mo14();
                break;
            case 46:
                return $this->getApfmpur24mo15();
                break;
            case 47:
                return $this->getApfmpo24mo15();
                break;
            case 48:
                return $this->getApfmpur24mo16();
                break;
            case 49:
                return $this->getApfmpo24mo16();
                break;
            case 50:
                return $this->getApfmpur24mo17();
                break;
            case 51:
                return $this->getApfmpo24mo17();
                break;
            case 52:
                return $this->getApfmpur24mo18();
                break;
            case 53:
                return $this->getApfmpo24mo18();
                break;
            case 54:
                return $this->getApfmpur24mo19();
                break;
            case 55:
                return $this->getApfmpo24mo19();
                break;
            case 56:
                return $this->getApfmpur24mo20();
                break;
            case 57:
                return $this->getApfmpo24mo20();
                break;
            case 58:
                return $this->getApfmpur24mo21();
                break;
            case 59:
                return $this->getApfmpo24mo21();
                break;
            case 60:
                return $this->getApfmpur24mo22();
                break;
            case 61:
                return $this->getApfmpo24mo22();
                break;
            case 62:
                return $this->getApfmpur24mo23();
                break;
            case 63:
                return $this->getApfmpo24mo23();
                break;
            case 64:
                return $this->getApfmpur24mo24();
                break;
            case 65:
                return $this->getApfmpo24mo24();
                break;
            case 66:
                return $this->getApfmouracctnbr();
                break;
            case 67:
                return $this->getApfmPurYtd();
                break;
            case 68:
                return $this->getApfmPoYtd();
                break;
            case 69:
                return $this->getDateupdtd();
                break;
            case 70:
                return $this->getTimeupdtd();
                break;
            case 71:
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

        if (isset($alreadyDumpedObjects['VendorShipfrom'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['VendorShipfrom'][$this->hashCode()] = true;
        $keys = VendorShipfromTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getApvevendid(),
            $keys[1] => $this->getApfmshipid(),
            $keys[2] => $this->getApfmname(),
            $keys[3] => $this->getApfmadr1(),
            $keys[4] => $this->getApfmadr2(),
            $keys[5] => $this->getApfmadr3(),
            $keys[6] => $this->getApfmctry(),
            $keys[7] => $this->getApfmcity(),
            $keys[8] => $this->getApfmstat(),
            $keys[9] => $this->getApfmzipcode(),
            $keys[10] => $this->getApfmcont1(),
            $keys[11] => $this->getApfmcont2(),
            $keys[12] => $this->getArtbsviacode(),
            $keys[13] => $this->getApfmglacct(),
            $keys[14] => $this->getApfmpurmtd(),
            $keys[15] => $this->getApfmpomtd(),
            $keys[16] => $this->getApfmdateopen(),
            $keys[17] => $this->getApfmlastpurdate(),
            $keys[18] => $this->getApfmpur24mo01(),
            $keys[19] => $this->getApfmpo24mo01(),
            $keys[20] => $this->getApfmpur24mo02(),
            $keys[21] => $this->getApfmpo24mo02(),
            $keys[22] => $this->getApfmpur24mo03(),
            $keys[23] => $this->getApfmpo24mo03(),
            $keys[24] => $this->getApfmpur24mo04(),
            $keys[25] => $this->getApfmpo24mo04(),
            $keys[26] => $this->getApfmpur24mo05(),
            $keys[27] => $this->getApfmpo24mo05(),
            $keys[28] => $this->getApfmpur24mo06(),
            $keys[29] => $this->getApfmpo24mo06(),
            $keys[30] => $this->getApfmpur24mo07(),
            $keys[31] => $this->getApfmpo24mo07(),
            $keys[32] => $this->getApfmpur24mo08(),
            $keys[33] => $this->getApfmpo24mo08(),
            $keys[34] => $this->getApfmpur24mo09(),
            $keys[35] => $this->getApfmpo24mo09(),
            $keys[36] => $this->getApfmpur24mo10(),
            $keys[37] => $this->getApfmpo24mo10(),
            $keys[38] => $this->getApfmpur24mo11(),
            $keys[39] => $this->getApfmpo24mo11(),
            $keys[40] => $this->getApfmpur24mo12(),
            $keys[41] => $this->getApfmpo24mo12(),
            $keys[42] => $this->getApfmpur24mo13(),
            $keys[43] => $this->getApfmpo24mo13(),
            $keys[44] => $this->getApfmpur24mo14(),
            $keys[45] => $this->getApfmpo24mo14(),
            $keys[46] => $this->getApfmpur24mo15(),
            $keys[47] => $this->getApfmpo24mo15(),
            $keys[48] => $this->getApfmpur24mo16(),
            $keys[49] => $this->getApfmpo24mo16(),
            $keys[50] => $this->getApfmpur24mo17(),
            $keys[51] => $this->getApfmpo24mo17(),
            $keys[52] => $this->getApfmpur24mo18(),
            $keys[53] => $this->getApfmpo24mo18(),
            $keys[54] => $this->getApfmpur24mo19(),
            $keys[55] => $this->getApfmpo24mo19(),
            $keys[56] => $this->getApfmpur24mo20(),
            $keys[57] => $this->getApfmpo24mo20(),
            $keys[58] => $this->getApfmpur24mo21(),
            $keys[59] => $this->getApfmpo24mo21(),
            $keys[60] => $this->getApfmpur24mo22(),
            $keys[61] => $this->getApfmpo24mo22(),
            $keys[62] => $this->getApfmpur24mo23(),
            $keys[63] => $this->getApfmpo24mo23(),
            $keys[64] => $this->getApfmpur24mo24(),
            $keys[65] => $this->getApfmpo24mo24(),
            $keys[66] => $this->getApfmouracctnbr(),
            $keys[67] => $this->getApfmPurYtd(),
            $keys[68] => $this->getApfmPoYtd(),
            $keys[69] => $this->getDateupdtd(),
            $keys[70] => $this->getTimeupdtd(),
            $keys[71] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
            if (null !== $this->aShipvia) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'shipvia';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cust_svia';
                        break;
                    default:
                        $key = 'Shipvia';
                }

                $result[$key] = $this->aShipvia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPurchaseOrders) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrders';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_heads';
                        break;
                    default:
                        $key = 'PurchaseOrders';
                }

                $result[$key] = $this->collPurchaseOrders->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\VendorShipfrom
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = VendorShipfromTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\VendorShipfrom
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setApvevendid($value);
                break;
            case 1:
                $this->setApfmshipid($value);
                break;
            case 2:
                $this->setApfmname($value);
                break;
            case 3:
                $this->setApfmadr1($value);
                break;
            case 4:
                $this->setApfmadr2($value);
                break;
            case 5:
                $this->setApfmadr3($value);
                break;
            case 6:
                $this->setApfmctry($value);
                break;
            case 7:
                $this->setApfmcity($value);
                break;
            case 8:
                $this->setApfmstat($value);
                break;
            case 9:
                $this->setApfmzipcode($value);
                break;
            case 10:
                $this->setApfmcont1($value);
                break;
            case 11:
                $this->setApfmcont2($value);
                break;
            case 12:
                $this->setArtbsviacode($value);
                break;
            case 13:
                $this->setApfmglacct($value);
                break;
            case 14:
                $this->setApfmpurmtd($value);
                break;
            case 15:
                $this->setApfmpomtd($value);
                break;
            case 16:
                $this->setApfmdateopen($value);
                break;
            case 17:
                $this->setApfmlastpurdate($value);
                break;
            case 18:
                $this->setApfmpur24mo01($value);
                break;
            case 19:
                $this->setApfmpo24mo01($value);
                break;
            case 20:
                $this->setApfmpur24mo02($value);
                break;
            case 21:
                $this->setApfmpo24mo02($value);
                break;
            case 22:
                $this->setApfmpur24mo03($value);
                break;
            case 23:
                $this->setApfmpo24mo03($value);
                break;
            case 24:
                $this->setApfmpur24mo04($value);
                break;
            case 25:
                $this->setApfmpo24mo04($value);
                break;
            case 26:
                $this->setApfmpur24mo05($value);
                break;
            case 27:
                $this->setApfmpo24mo05($value);
                break;
            case 28:
                $this->setApfmpur24mo06($value);
                break;
            case 29:
                $this->setApfmpo24mo06($value);
                break;
            case 30:
                $this->setApfmpur24mo07($value);
                break;
            case 31:
                $this->setApfmpo24mo07($value);
                break;
            case 32:
                $this->setApfmpur24mo08($value);
                break;
            case 33:
                $this->setApfmpo24mo08($value);
                break;
            case 34:
                $this->setApfmpur24mo09($value);
                break;
            case 35:
                $this->setApfmpo24mo09($value);
                break;
            case 36:
                $this->setApfmpur24mo10($value);
                break;
            case 37:
                $this->setApfmpo24mo10($value);
                break;
            case 38:
                $this->setApfmpur24mo11($value);
                break;
            case 39:
                $this->setApfmpo24mo11($value);
                break;
            case 40:
                $this->setApfmpur24mo12($value);
                break;
            case 41:
                $this->setApfmpo24mo12($value);
                break;
            case 42:
                $this->setApfmpur24mo13($value);
                break;
            case 43:
                $this->setApfmpo24mo13($value);
                break;
            case 44:
                $this->setApfmpur24mo14($value);
                break;
            case 45:
                $this->setApfmpo24mo14($value);
                break;
            case 46:
                $this->setApfmpur24mo15($value);
                break;
            case 47:
                $this->setApfmpo24mo15($value);
                break;
            case 48:
                $this->setApfmpur24mo16($value);
                break;
            case 49:
                $this->setApfmpo24mo16($value);
                break;
            case 50:
                $this->setApfmpur24mo17($value);
                break;
            case 51:
                $this->setApfmpo24mo17($value);
                break;
            case 52:
                $this->setApfmpur24mo18($value);
                break;
            case 53:
                $this->setApfmpo24mo18($value);
                break;
            case 54:
                $this->setApfmpur24mo19($value);
                break;
            case 55:
                $this->setApfmpo24mo19($value);
                break;
            case 56:
                $this->setApfmpur24mo20($value);
                break;
            case 57:
                $this->setApfmpo24mo20($value);
                break;
            case 58:
                $this->setApfmpur24mo21($value);
                break;
            case 59:
                $this->setApfmpo24mo21($value);
                break;
            case 60:
                $this->setApfmpur24mo22($value);
                break;
            case 61:
                $this->setApfmpo24mo22($value);
                break;
            case 62:
                $this->setApfmpur24mo23($value);
                break;
            case 63:
                $this->setApfmpo24mo23($value);
                break;
            case 64:
                $this->setApfmpur24mo24($value);
                break;
            case 65:
                $this->setApfmpo24mo24($value);
                break;
            case 66:
                $this->setApfmouracctnbr($value);
                break;
            case 67:
                $this->setApfmPurYtd($value);
                break;
            case 68:
                $this->setApfmPoYtd($value);
                break;
            case 69:
                $this->setDateupdtd($value);
                break;
            case 70:
                $this->setTimeupdtd($value);
                break;
            case 71:
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
        $keys = VendorShipfromTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setApvevendid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setApfmshipid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setApfmname($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setApfmadr1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setApfmadr2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setApfmadr3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setApfmctry($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setApfmcity($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setApfmstat($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setApfmzipcode($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setApfmcont1($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setApfmcont2($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArtbsviacode($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setApfmglacct($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setApfmpurmtd($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setApfmpomtd($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setApfmdateopen($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setApfmlastpurdate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setApfmpur24mo01($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setApfmpo24mo01($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setApfmpur24mo02($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setApfmpo24mo02($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setApfmpur24mo03($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setApfmpo24mo03($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setApfmpur24mo04($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setApfmpo24mo04($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setApfmpur24mo05($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setApfmpo24mo05($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setApfmpur24mo06($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setApfmpo24mo06($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setApfmpur24mo07($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setApfmpo24mo07($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setApfmpur24mo08($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setApfmpo24mo08($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setApfmpur24mo09($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setApfmpo24mo09($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setApfmpur24mo10($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setApfmpo24mo10($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setApfmpur24mo11($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setApfmpo24mo11($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setApfmpur24mo12($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setApfmpo24mo12($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setApfmpur24mo13($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setApfmpo24mo13($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setApfmpur24mo14($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setApfmpo24mo14($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setApfmpur24mo15($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setApfmpo24mo15($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setApfmpur24mo16($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setApfmpo24mo16($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setApfmpur24mo17($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setApfmpo24mo17($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setApfmpur24mo18($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setApfmpo24mo18($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setApfmpur24mo19($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setApfmpo24mo19($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setApfmpur24mo20($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setApfmpo24mo20($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setApfmpur24mo21($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setApfmpo24mo21($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setApfmpur24mo22($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setApfmpo24mo22($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setApfmpur24mo23($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setApfmpo24mo23($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setApfmpur24mo24($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setApfmpo24mo24($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setApfmouracctnbr($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setApfmPurYtd($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setApfmPoYtd($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setDateupdtd($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setTimeupdtd($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setDummy($arr[$keys[71]]);
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
     * @return $this|\VendorShipfrom The current object, for fluid interface
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
        $criteria = new Criteria(VendorShipfromTableMap::DATABASE_NAME);

        if ($this->isColumnModified(VendorShipfromTableMap::COL_APVEVENDID)) {
            $criteria->add(VendorShipfromTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMSHIPID)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMSHIPID, $this->apfmshipid);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMNAME)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMNAME, $this->apfmname);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMADR1)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMADR1, $this->apfmadr1);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMADR2)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMADR2, $this->apfmadr2);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMADR3)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMADR3, $this->apfmadr3);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMCTRY)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMCTRY, $this->apfmctry);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMCITY)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMCITY, $this->apfmcity);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMSTAT)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMSTAT, $this->apfmstat);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMZIPCODE)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMZIPCODE, $this->apfmzipcode);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMCONT1)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMCONT1, $this->apfmcont1);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMCONT2)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMCONT2, $this->apfmcont2);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_ARTBSVIACODE)) {
            $criteria->add(VendorShipfromTableMap::COL_ARTBSVIACODE, $this->artbsviacode);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMGLACCT)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMGLACCT, $this->apfmglacct);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPURMTD)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPURMTD, $this->apfmpurmtd);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPOMTD)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPOMTD, $this->apfmpomtd);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMDATEOPEN)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMDATEOPEN, $this->apfmdateopen);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMLASTPURDATE)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMLASTPURDATE, $this->apfmlastpurdate);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO01)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO01, $this->apfmpur24mo01);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO01)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO01, $this->apfmpo24mo01);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO02)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO02, $this->apfmpur24mo02);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO02)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO02, $this->apfmpo24mo02);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO03)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO03, $this->apfmpur24mo03);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO03)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO03, $this->apfmpo24mo03);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO04)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO04, $this->apfmpur24mo04);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO04)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO04, $this->apfmpo24mo04);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO05)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO05, $this->apfmpur24mo05);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO05)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO05, $this->apfmpo24mo05);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO06)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO06, $this->apfmpur24mo06);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO06)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO06, $this->apfmpo24mo06);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO07)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO07, $this->apfmpur24mo07);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO07)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO07, $this->apfmpo24mo07);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO08)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO08, $this->apfmpur24mo08);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO08)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO08, $this->apfmpo24mo08);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO09)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO09, $this->apfmpur24mo09);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO09)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO09, $this->apfmpo24mo09);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO10)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO10, $this->apfmpur24mo10);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO10)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO10, $this->apfmpo24mo10);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO11)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO11, $this->apfmpur24mo11);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO11)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO11, $this->apfmpo24mo11);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO12)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO12, $this->apfmpur24mo12);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO12)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO12, $this->apfmpo24mo12);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO13)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO13, $this->apfmpur24mo13);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO13)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO13, $this->apfmpo24mo13);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO14)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO14, $this->apfmpur24mo14);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO14)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO14, $this->apfmpo24mo14);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO15)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO15, $this->apfmpur24mo15);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO15)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO15, $this->apfmpo24mo15);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO16)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO16, $this->apfmpur24mo16);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO16)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO16, $this->apfmpo24mo16);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO17)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO17, $this->apfmpur24mo17);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO17)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO17, $this->apfmpo24mo17);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO18)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO18, $this->apfmpur24mo18);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO18)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO18, $this->apfmpo24mo18);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO19)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO19, $this->apfmpur24mo19);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO19)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO19, $this->apfmpo24mo19);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO20)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO20, $this->apfmpur24mo20);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO20)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO20, $this->apfmpo24mo20);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO21)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO21, $this->apfmpur24mo21);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO21)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO21, $this->apfmpo24mo21);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO22)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO22, $this->apfmpur24mo22);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO22)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO22, $this->apfmpo24mo22);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO23)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO23, $this->apfmpur24mo23);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO23)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO23, $this->apfmpo24mo23);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPUR24MO24)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPUR24MO24, $this->apfmpur24mo24);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPO24MO24)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPO24MO24, $this->apfmpo24mo24);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMOURACCTNBR)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMOURACCTNBR, $this->apfmouracctnbr);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPURYTD)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPURYTD, $this->apfmpurytd);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_APFMPOYTD)) {
            $criteria->add(VendorShipfromTableMap::COL_APFMPOYTD, $this->apfmpoytd);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_DATEUPDTD)) {
            $criteria->add(VendorShipfromTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_TIMEUPDTD)) {
            $criteria->add(VendorShipfromTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(VendorShipfromTableMap::COL_DUMMY)) {
            $criteria->add(VendorShipfromTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildVendorShipfromQuery::create();
        $criteria->add(VendorShipfromTableMap::COL_APVEVENDID, $this->apvevendid);
        $criteria->add(VendorShipfromTableMap::COL_APFMSHIPID, $this->apfmshipid);

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
        $validPk = null !== $this->getApvevendid() &&
            null !== $this->getApfmshipid();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation vendor to table ap_vend_mast
        if ($this->aVendor && $hash = spl_object_hash($this->aVendor)) {
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
        $pks[0] = $this->getApvevendid();
        $pks[1] = $this->getApfmshipid();

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
        $this->setApvevendid($keys[0]);
        $this->setApfmshipid($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getApvevendid()) && (null === $this->getApfmshipid());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \VendorShipfrom (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setApfmshipid($this->getApfmshipid());
        $copyObj->setApfmname($this->getApfmname());
        $copyObj->setApfmadr1($this->getApfmadr1());
        $copyObj->setApfmadr2($this->getApfmadr2());
        $copyObj->setApfmadr3($this->getApfmadr3());
        $copyObj->setApfmctry($this->getApfmctry());
        $copyObj->setApfmcity($this->getApfmcity());
        $copyObj->setApfmstat($this->getApfmstat());
        $copyObj->setApfmzipcode($this->getApfmzipcode());
        $copyObj->setApfmcont1($this->getApfmcont1());
        $copyObj->setApfmcont2($this->getApfmcont2());
        $copyObj->setArtbsviacode($this->getArtbsviacode());
        $copyObj->setApfmglacct($this->getApfmglacct());
        $copyObj->setApfmpurmtd($this->getApfmpurmtd());
        $copyObj->setApfmpomtd($this->getApfmpomtd());
        $copyObj->setApfmdateopen($this->getApfmdateopen());
        $copyObj->setApfmlastpurdate($this->getApfmlastpurdate());
        $copyObj->setApfmpur24mo01($this->getApfmpur24mo01());
        $copyObj->setApfmpo24mo01($this->getApfmpo24mo01());
        $copyObj->setApfmpur24mo02($this->getApfmpur24mo02());
        $copyObj->setApfmpo24mo02($this->getApfmpo24mo02());
        $copyObj->setApfmpur24mo03($this->getApfmpur24mo03());
        $copyObj->setApfmpo24mo03($this->getApfmpo24mo03());
        $copyObj->setApfmpur24mo04($this->getApfmpur24mo04());
        $copyObj->setApfmpo24mo04($this->getApfmpo24mo04());
        $copyObj->setApfmpur24mo05($this->getApfmpur24mo05());
        $copyObj->setApfmpo24mo05($this->getApfmpo24mo05());
        $copyObj->setApfmpur24mo06($this->getApfmpur24mo06());
        $copyObj->setApfmpo24mo06($this->getApfmpo24mo06());
        $copyObj->setApfmpur24mo07($this->getApfmpur24mo07());
        $copyObj->setApfmpo24mo07($this->getApfmpo24mo07());
        $copyObj->setApfmpur24mo08($this->getApfmpur24mo08());
        $copyObj->setApfmpo24mo08($this->getApfmpo24mo08());
        $copyObj->setApfmpur24mo09($this->getApfmpur24mo09());
        $copyObj->setApfmpo24mo09($this->getApfmpo24mo09());
        $copyObj->setApfmpur24mo10($this->getApfmpur24mo10());
        $copyObj->setApfmpo24mo10($this->getApfmpo24mo10());
        $copyObj->setApfmpur24mo11($this->getApfmpur24mo11());
        $copyObj->setApfmpo24mo11($this->getApfmpo24mo11());
        $copyObj->setApfmpur24mo12($this->getApfmpur24mo12());
        $copyObj->setApfmpo24mo12($this->getApfmpo24mo12());
        $copyObj->setApfmpur24mo13($this->getApfmpur24mo13());
        $copyObj->setApfmpo24mo13($this->getApfmpo24mo13());
        $copyObj->setApfmpur24mo14($this->getApfmpur24mo14());
        $copyObj->setApfmpo24mo14($this->getApfmpo24mo14());
        $copyObj->setApfmpur24mo15($this->getApfmpur24mo15());
        $copyObj->setApfmpo24mo15($this->getApfmpo24mo15());
        $copyObj->setApfmpur24mo16($this->getApfmpur24mo16());
        $copyObj->setApfmpo24mo16($this->getApfmpo24mo16());
        $copyObj->setApfmpur24mo17($this->getApfmpur24mo17());
        $copyObj->setApfmpo24mo17($this->getApfmpo24mo17());
        $copyObj->setApfmpur24mo18($this->getApfmpur24mo18());
        $copyObj->setApfmpo24mo18($this->getApfmpo24mo18());
        $copyObj->setApfmpur24mo19($this->getApfmpur24mo19());
        $copyObj->setApfmpo24mo19($this->getApfmpo24mo19());
        $copyObj->setApfmpur24mo20($this->getApfmpur24mo20());
        $copyObj->setApfmpo24mo20($this->getApfmpo24mo20());
        $copyObj->setApfmpur24mo21($this->getApfmpur24mo21());
        $copyObj->setApfmpo24mo21($this->getApfmpo24mo21());
        $copyObj->setApfmpur24mo22($this->getApfmpur24mo22());
        $copyObj->setApfmpo24mo22($this->getApfmpo24mo22());
        $copyObj->setApfmpur24mo23($this->getApfmpur24mo23());
        $copyObj->setApfmpo24mo23($this->getApfmpo24mo23());
        $copyObj->setApfmpur24mo24($this->getApfmpur24mo24());
        $copyObj->setApfmpo24mo24($this->getApfmpo24mo24());
        $copyObj->setApfmouracctnbr($this->getApfmouracctnbr());
        $copyObj->setApfmPurYtd($this->getApfmPurYtd());
        $copyObj->setApfmPoYtd($this->getApfmPoYtd());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getPurchaseOrders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrder($relObj->copy($deepCopy));
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
     * @return \VendorShipfrom Clone of current object.
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
     * Declares an association between this object and a ChildVendor object.
     *
     * @param  ChildVendor $v
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVendor(ChildVendor $v = null)
    {
        if ($v === null) {
            $this->setApvevendid('');
        } else {
            $this->setApvevendid($v->getApvevendid());
        }

        $this->aVendor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildVendor object, it will not be re-added.
        if ($v !== null) {
            $v->addVendorShipfrom($this);
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
        if ($this->aVendor === null && (($this->apvevendid !== "" && $this->apvevendid !== null))) {
            $this->aVendor = ChildVendorQuery::create()
                ->filterByVendorShipfrom($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVendor->addVendorShipfroms($this);
             */
        }

        return $this->aVendor;
    }

    /**
     * Declares an association between this object and a ChildShipvia object.
     *
     * @param  ChildShipvia $v
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     * @throws PropelException
     */
    public function setShipvia(ChildShipvia $v = null)
    {
        if ($v === null) {
            $this->setArtbsviacode(NULL);
        } else {
            $this->setArtbsviacode($v->getArtbshipvia());
        }

        $this->aShipvia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildShipvia object, it will not be re-added.
        if ($v !== null) {
            $v->addVendorShipfrom($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildShipvia object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildShipvia The associated ChildShipvia object.
     * @throws PropelException
     */
    public function getShipvia(ConnectionInterface $con = null)
    {
        if ($this->aShipvia === null && (($this->artbsviacode !== "" && $this->artbsviacode !== null))) {
            $this->aShipvia = ChildShipviaQuery::create()->findPk($this->artbsviacode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aShipvia->addVendorShipfroms($this);
             */
        }

        return $this->aShipvia;
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
        if ('PurchaseOrder' == $relationName) {
            $this->initPurchaseOrders();
            return;
        }
    }

    /**
     * Clears out the collPurchaseOrders collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrders()
     */
    public function clearPurchaseOrders()
    {
        $this->collPurchaseOrders = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrders collection loaded partially.
     */
    public function resetPartialPurchaseOrders($v = true)
    {
        $this->collPurchaseOrdersPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrders collection.
     *
     * By default this just sets the collPurchaseOrders collection to an empty array (like clearcollPurchaseOrders());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrders($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrders && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrders = new $collectionClassName;
        $this->collPurchaseOrders->setModel('\PurchaseOrder');
    }

    /**
     * Gets an array of ChildPurchaseOrder objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildVendorShipfrom is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrder[] List of ChildPurchaseOrder objects
     * @throws PropelException
     */
    public function getPurchaseOrders(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrdersPartial && !$this->isNew();
        if (null === $this->collPurchaseOrders || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrders) {
                // return empty collection
                $this->initPurchaseOrders();
            } else {
                $collPurchaseOrders = ChildPurchaseOrderQuery::create(null, $criteria)
                    ->filterByVendorShipfrom($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrdersPartial && count($collPurchaseOrders)) {
                        $this->initPurchaseOrders(false);

                        foreach ($collPurchaseOrders as $obj) {
                            if (false == $this->collPurchaseOrders->contains($obj)) {
                                $this->collPurchaseOrders->append($obj);
                            }
                        }

                        $this->collPurchaseOrdersPartial = true;
                    }

                    return $collPurchaseOrders;
                }

                if ($partial && $this->collPurchaseOrders) {
                    foreach ($this->collPurchaseOrders as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrders[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrders = $collPurchaseOrders;
                $this->collPurchaseOrdersPartial = false;
            }
        }

        return $this->collPurchaseOrders;
    }

    /**
     * Sets a collection of ChildPurchaseOrder objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrders A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildVendorShipfrom The current object (for fluent API support)
     */
    public function setPurchaseOrders(Collection $purchaseOrders, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrder[] $purchaseOrdersToDelete */
        $purchaseOrdersToDelete = $this->getPurchaseOrders(new Criteria(), $con)->diff($purchaseOrders);


        $this->purchaseOrdersScheduledForDeletion = $purchaseOrdersToDelete;

        foreach ($purchaseOrdersToDelete as $purchaseOrderRemoved) {
            $purchaseOrderRemoved->setVendorShipfrom(null);
        }

        $this->collPurchaseOrders = null;
        foreach ($purchaseOrders as $purchaseOrder) {
            $this->addPurchaseOrder($purchaseOrder);
        }

        $this->collPurchaseOrders = $purchaseOrders;
        $this->collPurchaseOrdersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrder objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrder objects.
     * @throws PropelException
     */
    public function countPurchaseOrders(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrdersPartial && !$this->isNew();
        if (null === $this->collPurchaseOrders || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrders) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrders());
            }

            $query = ChildPurchaseOrderQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVendorShipfrom($this)
                ->count($con);
        }

        return count($this->collPurchaseOrders);
    }

    /**
     * Method called to associate a ChildPurchaseOrder object to this object
     * through the ChildPurchaseOrder foreign key attribute.
     *
     * @param  ChildPurchaseOrder $l ChildPurchaseOrder
     * @return $this|\VendorShipfrom The current object (for fluent API support)
     */
    public function addPurchaseOrder(ChildPurchaseOrder $l)
    {
        if ($this->collPurchaseOrders === null) {
            $this->initPurchaseOrders();
            $this->collPurchaseOrdersPartial = true;
        }

        if (!$this->collPurchaseOrders->contains($l)) {
            $this->doAddPurchaseOrder($l);

            if ($this->purchaseOrdersScheduledForDeletion and $this->purchaseOrdersScheduledForDeletion->contains($l)) {
                $this->purchaseOrdersScheduledForDeletion->remove($this->purchaseOrdersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrder $purchaseOrder The ChildPurchaseOrder object to add.
     */
    protected function doAddPurchaseOrder(ChildPurchaseOrder $purchaseOrder)
    {
        $this->collPurchaseOrders[]= $purchaseOrder;
        $purchaseOrder->setVendorShipfrom($this);
    }

    /**
     * @param  ChildPurchaseOrder $purchaseOrder The ChildPurchaseOrder object to remove.
     * @return $this|ChildVendorShipfrom The current object (for fluent API support)
     */
    public function removePurchaseOrder(ChildPurchaseOrder $purchaseOrder)
    {
        if ($this->getPurchaseOrders()->contains($purchaseOrder)) {
            $pos = $this->collPurchaseOrders->search($purchaseOrder);
            $this->collPurchaseOrders->remove($pos);
            if (null === $this->purchaseOrdersScheduledForDeletion) {
                $this->purchaseOrdersScheduledForDeletion = clone $this->collPurchaseOrders;
                $this->purchaseOrdersScheduledForDeletion->clear();
            }
            $this->purchaseOrdersScheduledForDeletion[]= clone $purchaseOrder;
            $purchaseOrder->setVendorShipfrom(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this VendorShipfrom is new, it will return
     * an empty collection; or if this VendorShipfrom has previously
     * been saved, it will retrieve related PurchaseOrders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in VendorShipfrom.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrder[] List of ChildPurchaseOrder objects
     */
    public function getPurchaseOrdersJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getPurchaseOrders($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this VendorShipfrom is new, it will return
     * an empty collection; or if this VendorShipfrom has previously
     * been saved, it will retrieve related PurchaseOrders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in VendorShipfrom.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrder[] List of ChildPurchaseOrder objects
     */
    public function getPurchaseOrdersJoinShipvia(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderQuery::create(null, $criteria);
        $query->joinWith('Shipvia', $joinBehavior);

        return $this->getPurchaseOrders($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aVendor) {
            $this->aVendor->removeVendorShipfrom($this);
        }
        if (null !== $this->aShipvia) {
            $this->aShipvia->removeVendorShipfrom($this);
        }
        $this->apvevendid = null;
        $this->apfmshipid = null;
        $this->apfmname = null;
        $this->apfmadr1 = null;
        $this->apfmadr2 = null;
        $this->apfmadr3 = null;
        $this->apfmctry = null;
        $this->apfmcity = null;
        $this->apfmstat = null;
        $this->apfmzipcode = null;
        $this->apfmcont1 = null;
        $this->apfmcont2 = null;
        $this->artbsviacode = null;
        $this->apfmglacct = null;
        $this->apfmpurmtd = null;
        $this->apfmpomtd = null;
        $this->apfmdateopen = null;
        $this->apfmlastpurdate = null;
        $this->apfmpur24mo01 = null;
        $this->apfmpo24mo01 = null;
        $this->apfmpur24mo02 = null;
        $this->apfmpo24mo02 = null;
        $this->apfmpur24mo03 = null;
        $this->apfmpo24mo03 = null;
        $this->apfmpur24mo04 = null;
        $this->apfmpo24mo04 = null;
        $this->apfmpur24mo05 = null;
        $this->apfmpo24mo05 = null;
        $this->apfmpur24mo06 = null;
        $this->apfmpo24mo06 = null;
        $this->apfmpur24mo07 = null;
        $this->apfmpo24mo07 = null;
        $this->apfmpur24mo08 = null;
        $this->apfmpo24mo08 = null;
        $this->apfmpur24mo09 = null;
        $this->apfmpo24mo09 = null;
        $this->apfmpur24mo10 = null;
        $this->apfmpo24mo10 = null;
        $this->apfmpur24mo11 = null;
        $this->apfmpo24mo11 = null;
        $this->apfmpur24mo12 = null;
        $this->apfmpo24mo12 = null;
        $this->apfmpur24mo13 = null;
        $this->apfmpo24mo13 = null;
        $this->apfmpur24mo14 = null;
        $this->apfmpo24mo14 = null;
        $this->apfmpur24mo15 = null;
        $this->apfmpo24mo15 = null;
        $this->apfmpur24mo16 = null;
        $this->apfmpo24mo16 = null;
        $this->apfmpur24mo17 = null;
        $this->apfmpo24mo17 = null;
        $this->apfmpur24mo18 = null;
        $this->apfmpo24mo18 = null;
        $this->apfmpur24mo19 = null;
        $this->apfmpo24mo19 = null;
        $this->apfmpur24mo20 = null;
        $this->apfmpo24mo20 = null;
        $this->apfmpur24mo21 = null;
        $this->apfmpo24mo21 = null;
        $this->apfmpur24mo22 = null;
        $this->apfmpo24mo22 = null;
        $this->apfmpur24mo23 = null;
        $this->apfmpo24mo23 = null;
        $this->apfmpur24mo24 = null;
        $this->apfmpo24mo24 = null;
        $this->apfmouracctnbr = null;
        $this->apfmpurytd = null;
        $this->apfmpoytd = null;
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
            if ($this->collPurchaseOrders) {
                foreach ($this->collPurchaseOrders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collPurchaseOrders = null;
        $this->aVendor = null;
        $this->aShipvia = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VendorShipfromTableMap::DEFAULT_STRING_FORMAT);
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
