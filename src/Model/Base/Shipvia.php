<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
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
use Map\CustomerTableMap;
use Map\PurchaseOrderTableMap;
use Map\ShipviaTableMap;
use Map\VendorShipfromTableMap;
use Map\VendorTableMap;
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
 * Base class that represents a row from the 'ar_cust_svia' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Shipvia implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ShipviaTableMap';


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
     * The value for the artbshipvia field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the artbsviadesc field.
     *
     * @var        string
     */
    protected $artbsviadesc;

    /**
     * The value for the artbsviaprio field.
     *
     * @var        string
     */
    protected $artbsviaprio;

    /**
     * The value for the artbsviaweb field.
     *
     * @var        string
     */
    protected $artbsviaweb;

    /**
     * The value for the artbsviaair field.
     *
     * @var        string
     */
    protected $artbsviaair;

    /**
     * The value for the artbsviaupsserv field.
     *
     * @var        string
     */
    protected $artbsviaupsserv;

    /**
     * The value for the artbsviaupsbilling field.
     *
     * @var        string
     */
    protected $artbsviaupsbilling;

    /**
     * The value for the artbsviascaccd field.
     *
     * @var        string
     */
    protected $artbsviascaccd;

    /**
     * The value for the artbsviaedimethcd field.
     *
     * @var        string
     */
    protected $artbsviaedimethcd;

    /**
     * The value for the artbsviaupsresidential field.
     *
     * @var        string
     */
    protected $artbsviaupsresidential;

    /**
     * The value for the artbsviachrgfrt field.
     *
     * @var        string
     */
    protected $artbsviachrgfrt;

    /**
     * The value for the artbsviauseroute field.
     *
     * @var        string
     */
    protected $artbsviauseroute;

    /**
     * The value for the artbsviacommfrght field.
     *
     * @var        string
     */
    protected $artbsviacommfrght;

    /**
     * The value for the artbsviashiparea field.
     *
     * @var        string
     */
    protected $artbsviashiparea;

    /**
     * The value for the artbsviausesurchg field.
     *
     * @var        string
     */
    protected $artbsviausesurchg;

    /**
     * The value for the artbsviasurchgpct field.
     *
     * @var        string
     */
    protected $artbsviasurchgpct;

    /**
     * The value for the artbsviataxcode field.
     *
     * @var        string
     */
    protected $artbsviataxcode;

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
     * @var        ObjectCollection|ChildVendorShipfrom[] Collection to store aggregation of ChildVendorShipfrom objects.
     */
    protected $collVendorShipfroms;
    protected $collVendorShipfromsPartial;

    /**
     * @var        ObjectCollection|ChildVendor[] Collection to store aggregation of ChildVendor objects.
     */
    protected $collVendors;
    protected $collVendorsPartial;

    /**
     * @var        ObjectCollection|ChildCustomer[] Collection to store aggregation of ChildCustomer objects.
     */
    protected $collCustomers;
    protected $collCustomersPartial;

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
     * @var ObjectCollection|ChildVendorShipfrom[]
     */
    protected $vendorShipfromsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildVendor[]
     */
    protected $vendorsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildCustomer[]
     */
    protected $customersScheduledForDeletion = null;

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
        $this->artbshipvia = '';
    }

    /**
     * Initializes internal state of Base\Shipvia object.
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
     * Compares this with another <code>Shipvia</code> instance.  If
     * <code>obj</code> is an instance of <code>Shipvia</code>, delegates to
     * <code>equals(Shipvia)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Shipvia The current object, for fluid interface
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
     * Get the [artbshipvia] column value.
     *
     * @return string
     */
    public function getArtbshipvia()
    {
        return $this->artbshipvia;
    }

    /**
     * Get the [artbsviadesc] column value.
     *
     * @return string
     */
    public function getArtbsviadesc()
    {
        return $this->artbsviadesc;
    }

    /**
     * Get the [artbsviaprio] column value.
     *
     * @return string
     */
    public function getArtbsviaprio()
    {
        return $this->artbsviaprio;
    }

    /**
     * Get the [artbsviaweb] column value.
     *
     * @return string
     */
    public function getArtbsviaweb()
    {
        return $this->artbsviaweb;
    }

    /**
     * Get the [artbsviaair] column value.
     *
     * @return string
     */
    public function getArtbsviaair()
    {
        return $this->artbsviaair;
    }

    /**
     * Get the [artbsviaupsserv] column value.
     *
     * @return string
     */
    public function getArtbsviaupsserv()
    {
        return $this->artbsviaupsserv;
    }

    /**
     * Get the [artbsviaupsbilling] column value.
     *
     * @return string
     */
    public function getArtbsviaupsbilling()
    {
        return $this->artbsviaupsbilling;
    }

    /**
     * Get the [artbsviascaccd] column value.
     *
     * @return string
     */
    public function getArtbsviascaccd()
    {
        return $this->artbsviascaccd;
    }

    /**
     * Get the [artbsviaedimethcd] column value.
     *
     * @return string
     */
    public function getArtbsviaedimethcd()
    {
        return $this->artbsviaedimethcd;
    }

    /**
     * Get the [artbsviaupsresidential] column value.
     *
     * @return string
     */
    public function getArtbsviaupsresidential()
    {
        return $this->artbsviaupsresidential;
    }

    /**
     * Get the [artbsviachrgfrt] column value.
     *
     * @return string
     */
    public function getArtbsviachrgfrt()
    {
        return $this->artbsviachrgfrt;
    }

    /**
     * Get the [artbsviauseroute] column value.
     *
     * @return string
     */
    public function getArtbsviauseroute()
    {
        return $this->artbsviauseroute;
    }

    /**
     * Get the [artbsviacommfrght] column value.
     *
     * @return string
     */
    public function getArtbsviacommfrght()
    {
        return $this->artbsviacommfrght;
    }

    /**
     * Get the [artbsviashiparea] column value.
     *
     * @return string
     */
    public function getArtbsviashiparea()
    {
        return $this->artbsviashiparea;
    }

    /**
     * Get the [artbsviausesurchg] column value.
     *
     * @return string
     */
    public function getArtbsviausesurchg()
    {
        return $this->artbsviausesurchg;
    }

    /**
     * Get the [artbsviasurchgpct] column value.
     *
     * @return string
     */
    public function getArtbsviasurchgpct()
    {
        return $this->artbsviasurchgpct;
    }

    /**
     * Get the [artbsviataxcode] column value.
     *
     * @return string
     */
    public function getArtbsviataxcode()
    {
        return $this->artbsviataxcode;
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
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [artbsviadesc] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviadesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviadesc !== $v) {
            $this->artbsviadesc = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIADESC] = true;
        }

        return $this;
    } // setArtbsviadesc()

    /**
     * Set the value of [artbsviaprio] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviaprio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviaprio !== $v) {
            $this->artbsviaprio = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAPRIO] = true;
        }

        return $this;
    } // setArtbsviaprio()

    /**
     * Set the value of [artbsviaweb] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviaweb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviaweb !== $v) {
            $this->artbsviaweb = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAWEB] = true;
        }

        return $this;
    } // setArtbsviaweb()

    /**
     * Set the value of [artbsviaair] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviaair($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviaair !== $v) {
            $this->artbsviaair = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAAIR] = true;
        }

        return $this;
    } // setArtbsviaair()

    /**
     * Set the value of [artbsviaupsserv] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviaupsserv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviaupsserv !== $v) {
            $this->artbsviaupsserv = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAUPSSERV] = true;
        }

        return $this;
    } // setArtbsviaupsserv()

    /**
     * Set the value of [artbsviaupsbilling] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviaupsbilling($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviaupsbilling !== $v) {
            $this->artbsviaupsbilling = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAUPSBILLING] = true;
        }

        return $this;
    } // setArtbsviaupsbilling()

    /**
     * Set the value of [artbsviascaccd] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviascaccd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviascaccd !== $v) {
            $this->artbsviascaccd = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIASCACCD] = true;
        }

        return $this;
    } // setArtbsviascaccd()

    /**
     * Set the value of [artbsviaedimethcd] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviaedimethcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviaedimethcd !== $v) {
            $this->artbsviaedimethcd = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAEDIMETHCD] = true;
        }

        return $this;
    } // setArtbsviaedimethcd()

    /**
     * Set the value of [artbsviaupsresidential] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviaupsresidential($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviaupsresidential !== $v) {
            $this->artbsviaupsresidential = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL] = true;
        }

        return $this;
    } // setArtbsviaupsresidential()

    /**
     * Set the value of [artbsviachrgfrt] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviachrgfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviachrgfrt !== $v) {
            $this->artbsviachrgfrt = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIACHRGFRT] = true;
        }

        return $this;
    } // setArtbsviachrgfrt()

    /**
     * Set the value of [artbsviauseroute] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviauseroute($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviauseroute !== $v) {
            $this->artbsviauseroute = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAUSEROUTE] = true;
        }

        return $this;
    } // setArtbsviauseroute()

    /**
     * Set the value of [artbsviacommfrght] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviacommfrght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviacommfrght !== $v) {
            $this->artbsviacommfrght = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIACOMMFRGHT] = true;
        }

        return $this;
    } // setArtbsviacommfrght()

    /**
     * Set the value of [artbsviashiparea] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviashiparea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviashiparea !== $v) {
            $this->artbsviashiparea = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIASHIPAREA] = true;
        }

        return $this;
    } // setArtbsviashiparea()

    /**
     * Set the value of [artbsviausesurchg] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviausesurchg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviausesurchg !== $v) {
            $this->artbsviausesurchg = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIAUSESURCHG] = true;
        }

        return $this;
    } // setArtbsviausesurchg()

    /**
     * Set the value of [artbsviasurchgpct] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviasurchgpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviasurchgpct !== $v) {
            $this->artbsviasurchgpct = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIASURCHGPCT] = true;
        }

        return $this;
    } // setArtbsviasurchgpct()

    /**
     * Set the value of [artbsviataxcode] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setArtbsviataxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviataxcode !== $v) {
            $this->artbsviataxcode = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_ARTBSVIATAXCODE] = true;
        }

        return $this;
    } // setArtbsviataxcode()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ShipviaTableMap::COL_DUMMY] = true;
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
            if ($this->artbshipvia !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ShipviaTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ShipviaTableMap::translateFieldName('Artbsviadesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviadesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ShipviaTableMap::translateFieldName('Artbsviaprio', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviaprio = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ShipviaTableMap::translateFieldName('Artbsviaweb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviaweb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ShipviaTableMap::translateFieldName('Artbsviaair', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviaair = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ShipviaTableMap::translateFieldName('Artbsviaupsserv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviaupsserv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ShipviaTableMap::translateFieldName('Artbsviaupsbilling', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviaupsbilling = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ShipviaTableMap::translateFieldName('Artbsviascaccd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviascaccd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ShipviaTableMap::translateFieldName('Artbsviaedimethcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviaedimethcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ShipviaTableMap::translateFieldName('Artbsviaupsresidential', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviaupsresidential = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ShipviaTableMap::translateFieldName('Artbsviachrgfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviachrgfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ShipviaTableMap::translateFieldName('Artbsviauseroute', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviauseroute = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ShipviaTableMap::translateFieldName('Artbsviacommfrght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviacommfrght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ShipviaTableMap::translateFieldName('Artbsviashiparea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviashiparea = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ShipviaTableMap::translateFieldName('Artbsviausesurchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviausesurchg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ShipviaTableMap::translateFieldName('Artbsviasurchgpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviasurchgpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ShipviaTableMap::translateFieldName('Artbsviataxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviataxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ShipviaTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ShipviaTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ShipviaTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 20; // 20 = ShipviaTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Shipvia'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ShipviaTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildShipviaQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collVendorShipfroms = null;

            $this->collVendors = null;

            $this->collCustomers = null;

            $this->collPurchaseOrders = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Shipvia::setDeleted()
     * @see Shipvia::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ShipviaTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildShipviaQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ShipviaTableMap::DATABASE_NAME);
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
                ShipviaTableMap::addInstanceToPool($this);
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

            if ($this->vendorShipfromsScheduledForDeletion !== null) {
                if (!$this->vendorShipfromsScheduledForDeletion->isEmpty()) {
                    foreach ($this->vendorShipfromsScheduledForDeletion as $vendorShipfrom) {
                        // need to save related object because we set the relation to null
                        $vendorShipfrom->save($con);
                    }
                    $this->vendorShipfromsScheduledForDeletion = null;
                }
            }

            if ($this->collVendorShipfroms !== null) {
                foreach ($this->collVendorShipfroms as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->vendorsScheduledForDeletion !== null) {
                if (!$this->vendorsScheduledForDeletion->isEmpty()) {
                    foreach ($this->vendorsScheduledForDeletion as $vendor) {
                        // need to save related object because we set the relation to null
                        $vendor->save($con);
                    }
                    $this->vendorsScheduledForDeletion = null;
                }
            }

            if ($this->collVendors !== null) {
                foreach ($this->collVendors as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->customersScheduledForDeletion !== null) {
                if (!$this->customersScheduledForDeletion->isEmpty()) {
                    foreach ($this->customersScheduledForDeletion as $customer) {
                        // need to save related object because we set the relation to null
                        $customer->save($con);
                    }
                    $this->customersScheduledForDeletion = null;
                }
            }

            if ($this->collCustomers !== null) {
                foreach ($this->collCustomers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIADESC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaDesc';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAPRIO)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaPrio';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAWEB)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaWeb';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAAIR)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaAir';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUPSSERV)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaUpsServ';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUPSBILLING)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaUpsBilling';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIASCACCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaScacCd';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAEDIMETHCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaEdiMethCd';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaUpsResidential';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIACHRGFRT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaChrgFrt';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUSEROUTE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaUseRoute';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIACOMMFRGHT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaCommFrght';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIASHIPAREA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaShipArea';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUSESURCHG)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaUseSurchg';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIASURCHGPCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaSurchgPct';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIATAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaTaxCode';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_cust_svia (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaDesc':
                        $stmt->bindValue($identifier, $this->artbsviadesc, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaPrio':
                        $stmt->bindValue($identifier, $this->artbsviaprio, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaWeb':
                        $stmt->bindValue($identifier, $this->artbsviaweb, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaAir':
                        $stmt->bindValue($identifier, $this->artbsviaair, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaUpsServ':
                        $stmt->bindValue($identifier, $this->artbsviaupsserv, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaUpsBilling':
                        $stmt->bindValue($identifier, $this->artbsviaupsbilling, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaScacCd':
                        $stmt->bindValue($identifier, $this->artbsviascaccd, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaEdiMethCd':
                        $stmt->bindValue($identifier, $this->artbsviaedimethcd, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaUpsResidential':
                        $stmt->bindValue($identifier, $this->artbsviaupsresidential, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaChrgFrt':
                        $stmt->bindValue($identifier, $this->artbsviachrgfrt, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaUseRoute':
                        $stmt->bindValue($identifier, $this->artbsviauseroute, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaCommFrght':
                        $stmt->bindValue($identifier, $this->artbsviacommfrght, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaShipArea':
                        $stmt->bindValue($identifier, $this->artbsviashiparea, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaUseSurchg':
                        $stmt->bindValue($identifier, $this->artbsviausesurchg, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaSurchgPct':
                        $stmt->bindValue($identifier, $this->artbsviasurchgpct, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaTaxCode':
                        $stmt->bindValue($identifier, $this->artbsviataxcode, PDO::PARAM_STR);
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
        $pos = ShipviaTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArtbshipvia();
                break;
            case 1:
                return $this->getArtbsviadesc();
                break;
            case 2:
                return $this->getArtbsviaprio();
                break;
            case 3:
                return $this->getArtbsviaweb();
                break;
            case 4:
                return $this->getArtbsviaair();
                break;
            case 5:
                return $this->getArtbsviaupsserv();
                break;
            case 6:
                return $this->getArtbsviaupsbilling();
                break;
            case 7:
                return $this->getArtbsviascaccd();
                break;
            case 8:
                return $this->getArtbsviaedimethcd();
                break;
            case 9:
                return $this->getArtbsviaupsresidential();
                break;
            case 10:
                return $this->getArtbsviachrgfrt();
                break;
            case 11:
                return $this->getArtbsviauseroute();
                break;
            case 12:
                return $this->getArtbsviacommfrght();
                break;
            case 13:
                return $this->getArtbsviashiparea();
                break;
            case 14:
                return $this->getArtbsviausesurchg();
                break;
            case 15:
                return $this->getArtbsviasurchgpct();
                break;
            case 16:
                return $this->getArtbsviataxcode();
                break;
            case 17:
                return $this->getDateupdtd();
                break;
            case 18:
                return $this->getTimeupdtd();
                break;
            case 19:
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

        if (isset($alreadyDumpedObjects['Shipvia'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Shipvia'][$this->hashCode()] = true;
        $keys = ShipviaTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArtbshipvia(),
            $keys[1] => $this->getArtbsviadesc(),
            $keys[2] => $this->getArtbsviaprio(),
            $keys[3] => $this->getArtbsviaweb(),
            $keys[4] => $this->getArtbsviaair(),
            $keys[5] => $this->getArtbsviaupsserv(),
            $keys[6] => $this->getArtbsviaupsbilling(),
            $keys[7] => $this->getArtbsviascaccd(),
            $keys[8] => $this->getArtbsviaedimethcd(),
            $keys[9] => $this->getArtbsviaupsresidential(),
            $keys[10] => $this->getArtbsviachrgfrt(),
            $keys[11] => $this->getArtbsviauseroute(),
            $keys[12] => $this->getArtbsviacommfrght(),
            $keys[13] => $this->getArtbsviashiparea(),
            $keys[14] => $this->getArtbsviausesurchg(),
            $keys[15] => $this->getArtbsviasurchgpct(),
            $keys[16] => $this->getArtbsviataxcode(),
            $keys[17] => $this->getDateupdtd(),
            $keys[18] => $this->getTimeupdtd(),
            $keys[19] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collVendorShipfroms) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'vendorShipfroms';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_ship_froms';
                        break;
                    default:
                        $key = 'VendorShipfroms';
                }

                $result[$key] = $this->collVendorShipfroms->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVendors) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'vendors';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_vend_masts';
                        break;
                    default:
                        $key = 'Vendors';
                }

                $result[$key] = $this->collVendors->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCustomers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cust_masts';
                        break;
                    default:
                        $key = 'Customers';
                }

                $result[$key] = $this->collCustomers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Shipvia
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ShipviaTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Shipvia
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArtbshipvia($value);
                break;
            case 1:
                $this->setArtbsviadesc($value);
                break;
            case 2:
                $this->setArtbsviaprio($value);
                break;
            case 3:
                $this->setArtbsviaweb($value);
                break;
            case 4:
                $this->setArtbsviaair($value);
                break;
            case 5:
                $this->setArtbsviaupsserv($value);
                break;
            case 6:
                $this->setArtbsviaupsbilling($value);
                break;
            case 7:
                $this->setArtbsviascaccd($value);
                break;
            case 8:
                $this->setArtbsviaedimethcd($value);
                break;
            case 9:
                $this->setArtbsviaupsresidential($value);
                break;
            case 10:
                $this->setArtbsviachrgfrt($value);
                break;
            case 11:
                $this->setArtbsviauseroute($value);
                break;
            case 12:
                $this->setArtbsviacommfrght($value);
                break;
            case 13:
                $this->setArtbsviashiparea($value);
                break;
            case 14:
                $this->setArtbsviausesurchg($value);
                break;
            case 15:
                $this->setArtbsviasurchgpct($value);
                break;
            case 16:
                $this->setArtbsviataxcode($value);
                break;
            case 17:
                $this->setDateupdtd($value);
                break;
            case 18:
                $this->setTimeupdtd($value);
                break;
            case 19:
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
        $keys = ShipviaTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArtbshipvia($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArtbsviadesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArtbsviaprio($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArtbsviaweb($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArtbsviaair($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArtbsviaupsserv($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArtbsviaupsbilling($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArtbsviascaccd($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArtbsviaedimethcd($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArtbsviaupsresidential($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArtbsviachrgfrt($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArtbsviauseroute($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArtbsviacommfrght($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArtbsviashiparea($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArtbsviausesurchg($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArtbsviasurchgpct($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArtbsviataxcode($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setDateupdtd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setTimeupdtd($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setDummy($arr[$keys[19]]);
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
     * @return $this|\Shipvia The current object, for fluid interface
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
        $criteria = new Criteria(ShipviaTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIADESC)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIADESC, $this->artbsviadesc);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAPRIO)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAPRIO, $this->artbsviaprio);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAWEB)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAWEB, $this->artbsviaweb);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAAIR)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAAIR, $this->artbsviaair);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUPSSERV)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAUPSSERV, $this->artbsviaupsserv);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUPSBILLING)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAUPSBILLING, $this->artbsviaupsbilling);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIASCACCD)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIASCACCD, $this->artbsviascaccd);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAEDIMETHCD)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAEDIMETHCD, $this->artbsviaedimethcd);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL, $this->artbsviaupsresidential);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIACHRGFRT)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIACHRGFRT, $this->artbsviachrgfrt);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUSEROUTE)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAUSEROUTE, $this->artbsviauseroute);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIACOMMFRGHT)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIACOMMFRGHT, $this->artbsviacommfrght);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIASHIPAREA)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIASHIPAREA, $this->artbsviashiparea);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIAUSESURCHG)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIAUSESURCHG, $this->artbsviausesurchg);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIASURCHGPCT)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIASURCHGPCT, $this->artbsviasurchgpct);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_ARTBSVIATAXCODE)) {
            $criteria->add(ShipviaTableMap::COL_ARTBSVIATAXCODE, $this->artbsviataxcode);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_DATEUPDTD)) {
            $criteria->add(ShipviaTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ShipviaTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ShipviaTableMap::COL_DUMMY)) {
            $criteria->add(ShipviaTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildShipviaQuery::create();
        $criteria->add(ShipviaTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);

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
        $validPk = null !== $this->getArtbshipvia();

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
        return $this->getArtbshipvia();
    }

    /**
     * Generic method to set the primary key (artbshipvia column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArtbshipvia($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getArtbshipvia();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Shipvia (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArtbsviadesc($this->getArtbsviadesc());
        $copyObj->setArtbsviaprio($this->getArtbsviaprio());
        $copyObj->setArtbsviaweb($this->getArtbsviaweb());
        $copyObj->setArtbsviaair($this->getArtbsviaair());
        $copyObj->setArtbsviaupsserv($this->getArtbsviaupsserv());
        $copyObj->setArtbsviaupsbilling($this->getArtbsviaupsbilling());
        $copyObj->setArtbsviascaccd($this->getArtbsviascaccd());
        $copyObj->setArtbsviaedimethcd($this->getArtbsviaedimethcd());
        $copyObj->setArtbsviaupsresidential($this->getArtbsviaupsresidential());
        $copyObj->setArtbsviachrgfrt($this->getArtbsviachrgfrt());
        $copyObj->setArtbsviauseroute($this->getArtbsviauseroute());
        $copyObj->setArtbsviacommfrght($this->getArtbsviacommfrght());
        $copyObj->setArtbsviashiparea($this->getArtbsviashiparea());
        $copyObj->setArtbsviausesurchg($this->getArtbsviausesurchg());
        $copyObj->setArtbsviasurchgpct($this->getArtbsviasurchgpct());
        $copyObj->setArtbsviataxcode($this->getArtbsviataxcode());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getVendorShipfroms() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVendorShipfrom($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVendors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVendor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCustomers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomer($relObj->copy($deepCopy));
                }
            }

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
     * @return \Shipvia Clone of current object.
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
        if ('VendorShipfrom' == $relationName) {
            $this->initVendorShipfroms();
            return;
        }
        if ('Vendor' == $relationName) {
            $this->initVendors();
            return;
        }
        if ('Customer' == $relationName) {
            $this->initCustomers();
            return;
        }
        if ('PurchaseOrder' == $relationName) {
            $this->initPurchaseOrders();
            return;
        }
    }

    /**
     * Clears out the collVendorShipfroms collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addVendorShipfroms()
     */
    public function clearVendorShipfroms()
    {
        $this->collVendorShipfroms = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collVendorShipfroms collection loaded partially.
     */
    public function resetPartialVendorShipfroms($v = true)
    {
        $this->collVendorShipfromsPartial = $v;
    }

    /**
     * Initializes the collVendorShipfroms collection.
     *
     * By default this just sets the collVendorShipfroms collection to an empty array (like clearcollVendorShipfroms());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVendorShipfroms($overrideExisting = true)
    {
        if (null !== $this->collVendorShipfroms && !$overrideExisting) {
            return;
        }

        $collectionClassName = VendorShipfromTableMap::getTableMap()->getCollectionClassName();

        $this->collVendorShipfroms = new $collectionClassName;
        $this->collVendorShipfroms->setModel('\VendorShipfrom');
    }

    /**
     * Gets an array of ChildVendorShipfrom objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildShipvia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildVendorShipfrom[] List of ChildVendorShipfrom objects
     * @throws PropelException
     */
    public function getVendorShipfroms(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collVendorShipfromsPartial && !$this->isNew();
        if (null === $this->collVendorShipfroms || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVendorShipfroms) {
                // return empty collection
                $this->initVendorShipfroms();
            } else {
                $collVendorShipfroms = ChildVendorShipfromQuery::create(null, $criteria)
                    ->filterByShipvia($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collVendorShipfromsPartial && count($collVendorShipfroms)) {
                        $this->initVendorShipfroms(false);

                        foreach ($collVendorShipfroms as $obj) {
                            if (false == $this->collVendorShipfroms->contains($obj)) {
                                $this->collVendorShipfroms->append($obj);
                            }
                        }

                        $this->collVendorShipfromsPartial = true;
                    }

                    return $collVendorShipfroms;
                }

                if ($partial && $this->collVendorShipfroms) {
                    foreach ($this->collVendorShipfroms as $obj) {
                        if ($obj->isNew()) {
                            $collVendorShipfroms[] = $obj;
                        }
                    }
                }

                $this->collVendorShipfroms = $collVendorShipfroms;
                $this->collVendorShipfromsPartial = false;
            }
        }

        return $this->collVendorShipfroms;
    }

    /**
     * Sets a collection of ChildVendorShipfrom objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $vendorShipfroms A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildShipvia The current object (for fluent API support)
     */
    public function setVendorShipfroms(Collection $vendorShipfroms, ConnectionInterface $con = null)
    {
        /** @var ChildVendorShipfrom[] $vendorShipfromsToDelete */
        $vendorShipfromsToDelete = $this->getVendorShipfroms(new Criteria(), $con)->diff($vendorShipfroms);


        $this->vendorShipfromsScheduledForDeletion = $vendorShipfromsToDelete;

        foreach ($vendorShipfromsToDelete as $vendorShipfromRemoved) {
            $vendorShipfromRemoved->setShipvia(null);
        }

        $this->collVendorShipfroms = null;
        foreach ($vendorShipfroms as $vendorShipfrom) {
            $this->addVendorShipfrom($vendorShipfrom);
        }

        $this->collVendorShipfroms = $vendorShipfroms;
        $this->collVendorShipfromsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related VendorShipfrom objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related VendorShipfrom objects.
     * @throws PropelException
     */
    public function countVendorShipfroms(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collVendorShipfromsPartial && !$this->isNew();
        if (null === $this->collVendorShipfroms || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVendorShipfroms) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVendorShipfroms());
            }

            $query = ChildVendorShipfromQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByShipvia($this)
                ->count($con);
        }

        return count($this->collVendorShipfroms);
    }

    /**
     * Method called to associate a ChildVendorShipfrom object to this object
     * through the ChildVendorShipfrom foreign key attribute.
     *
     * @param  ChildVendorShipfrom $l ChildVendorShipfrom
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function addVendorShipfrom(ChildVendorShipfrom $l)
    {
        if ($this->collVendorShipfroms === null) {
            $this->initVendorShipfroms();
            $this->collVendorShipfromsPartial = true;
        }

        if (!$this->collVendorShipfroms->contains($l)) {
            $this->doAddVendorShipfrom($l);

            if ($this->vendorShipfromsScheduledForDeletion and $this->vendorShipfromsScheduledForDeletion->contains($l)) {
                $this->vendorShipfromsScheduledForDeletion->remove($this->vendorShipfromsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildVendorShipfrom $vendorShipfrom The ChildVendorShipfrom object to add.
     */
    protected function doAddVendorShipfrom(ChildVendorShipfrom $vendorShipfrom)
    {
        $this->collVendorShipfroms[]= $vendorShipfrom;
        $vendorShipfrom->setShipvia($this);
    }

    /**
     * @param  ChildVendorShipfrom $vendorShipfrom The ChildVendorShipfrom object to remove.
     * @return $this|ChildShipvia The current object (for fluent API support)
     */
    public function removeVendorShipfrom(ChildVendorShipfrom $vendorShipfrom)
    {
        if ($this->getVendorShipfroms()->contains($vendorShipfrom)) {
            $pos = $this->collVendorShipfroms->search($vendorShipfrom);
            $this->collVendorShipfroms->remove($pos);
            if (null === $this->vendorShipfromsScheduledForDeletion) {
                $this->vendorShipfromsScheduledForDeletion = clone $this->collVendorShipfroms;
                $this->vendorShipfromsScheduledForDeletion->clear();
            }
            $this->vendorShipfromsScheduledForDeletion[]= $vendorShipfrom;
            $vendorShipfrom->setShipvia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Shipvia is new, it will return
     * an empty collection; or if this Shipvia has previously
     * been saved, it will retrieve related VendorShipfroms from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Shipvia.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildVendorShipfrom[] List of ChildVendorShipfrom objects
     */
    public function getVendorShipfromsJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildVendorShipfromQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getVendorShipfroms($query, $con);
    }

    /**
     * Clears out the collVendors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addVendors()
     */
    public function clearVendors()
    {
        $this->collVendors = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collVendors collection loaded partially.
     */
    public function resetPartialVendors($v = true)
    {
        $this->collVendorsPartial = $v;
    }

    /**
     * Initializes the collVendors collection.
     *
     * By default this just sets the collVendors collection to an empty array (like clearcollVendors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVendors($overrideExisting = true)
    {
        if (null !== $this->collVendors && !$overrideExisting) {
            return;
        }

        $collectionClassName = VendorTableMap::getTableMap()->getCollectionClassName();

        $this->collVendors = new $collectionClassName;
        $this->collVendors->setModel('\Vendor');
    }

    /**
     * Gets an array of ChildVendor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildShipvia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildVendor[] List of ChildVendor objects
     * @throws PropelException
     */
    public function getVendors(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collVendorsPartial && !$this->isNew();
        if (null === $this->collVendors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVendors) {
                // return empty collection
                $this->initVendors();
            } else {
                $collVendors = ChildVendorQuery::create(null, $criteria)
                    ->filterByShipvia($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collVendorsPartial && count($collVendors)) {
                        $this->initVendors(false);

                        foreach ($collVendors as $obj) {
                            if (false == $this->collVendors->contains($obj)) {
                                $this->collVendors->append($obj);
                            }
                        }

                        $this->collVendorsPartial = true;
                    }

                    return $collVendors;
                }

                if ($partial && $this->collVendors) {
                    foreach ($this->collVendors as $obj) {
                        if ($obj->isNew()) {
                            $collVendors[] = $obj;
                        }
                    }
                }

                $this->collVendors = $collVendors;
                $this->collVendorsPartial = false;
            }
        }

        return $this->collVendors;
    }

    /**
     * Sets a collection of ChildVendor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $vendors A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildShipvia The current object (for fluent API support)
     */
    public function setVendors(Collection $vendors, ConnectionInterface $con = null)
    {
        /** @var ChildVendor[] $vendorsToDelete */
        $vendorsToDelete = $this->getVendors(new Criteria(), $con)->diff($vendors);


        $this->vendorsScheduledForDeletion = $vendorsToDelete;

        foreach ($vendorsToDelete as $vendorRemoved) {
            $vendorRemoved->setShipvia(null);
        }

        $this->collVendors = null;
        foreach ($vendors as $vendor) {
            $this->addVendor($vendor);
        }

        $this->collVendors = $vendors;
        $this->collVendorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Vendor objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Vendor objects.
     * @throws PropelException
     */
    public function countVendors(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collVendorsPartial && !$this->isNew();
        if (null === $this->collVendors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVendors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVendors());
            }

            $query = ChildVendorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByShipvia($this)
                ->count($con);
        }

        return count($this->collVendors);
    }

    /**
     * Method called to associate a ChildVendor object to this object
     * through the ChildVendor foreign key attribute.
     *
     * @param  ChildVendor $l ChildVendor
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function addVendor(ChildVendor $l)
    {
        if ($this->collVendors === null) {
            $this->initVendors();
            $this->collVendorsPartial = true;
        }

        if (!$this->collVendors->contains($l)) {
            $this->doAddVendor($l);

            if ($this->vendorsScheduledForDeletion and $this->vendorsScheduledForDeletion->contains($l)) {
                $this->vendorsScheduledForDeletion->remove($this->vendorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildVendor $vendor The ChildVendor object to add.
     */
    protected function doAddVendor(ChildVendor $vendor)
    {
        $this->collVendors[]= $vendor;
        $vendor->setShipvia($this);
    }

    /**
     * @param  ChildVendor $vendor The ChildVendor object to remove.
     * @return $this|ChildShipvia The current object (for fluent API support)
     */
    public function removeVendor(ChildVendor $vendor)
    {
        if ($this->getVendors()->contains($vendor)) {
            $pos = $this->collVendors->search($vendor);
            $this->collVendors->remove($pos);
            if (null === $this->vendorsScheduledForDeletion) {
                $this->vendorsScheduledForDeletion = clone $this->collVendors;
                $this->vendorsScheduledForDeletion->clear();
            }
            $this->vendorsScheduledForDeletion[]= $vendor;
            $vendor->setShipvia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Shipvia is new, it will return
     * an empty collection; or if this Shipvia has previously
     * been saved, it will retrieve related Vendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Shipvia.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildVendor[] List of ChildVendor objects
     */
    public function getVendorsJoinApTypeCode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildVendorQuery::create(null, $criteria);
        $query->joinWith('ApTypeCode', $joinBehavior);

        return $this->getVendors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Shipvia is new, it will return
     * an empty collection; or if this Shipvia has previously
     * been saved, it will retrieve related Vendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Shipvia.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildVendor[] List of ChildVendor objects
     */
    public function getVendorsJoinApTermsCode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildVendorQuery::create(null, $criteria);
        $query->joinWith('ApTermsCode', $joinBehavior);

        return $this->getVendors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Shipvia is new, it will return
     * an empty collection; or if this Shipvia has previously
     * been saved, it will retrieve related Vendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Shipvia.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildVendor[] List of ChildVendor objects
     */
    public function getVendorsJoinApBuyer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildVendorQuery::create(null, $criteria);
        $query->joinWith('ApBuyer', $joinBehavior);

        return $this->getVendors($query, $con);
    }

    /**
     * Clears out the collCustomers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCustomers()
     */
    public function clearCustomers()
    {
        $this->collCustomers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCustomers collection loaded partially.
     */
    public function resetPartialCustomers($v = true)
    {
        $this->collCustomersPartial = $v;
    }

    /**
     * Initializes the collCustomers collection.
     *
     * By default this just sets the collCustomers collection to an empty array (like clearcollCustomers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCustomers($overrideExisting = true)
    {
        if (null !== $this->collCustomers && !$overrideExisting) {
            return;
        }

        $collectionClassName = CustomerTableMap::getTableMap()->getCollectionClassName();

        $this->collCustomers = new $collectionClassName;
        $this->collCustomers->setModel('\Customer');
    }

    /**
     * Gets an array of ChildCustomer objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildShipvia is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildCustomer[] List of ChildCustomer objects
     * @throws PropelException
     */
    public function getCustomers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCustomersPartial && !$this->isNew();
        if (null === $this->collCustomers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCustomers) {
                // return empty collection
                $this->initCustomers();
            } else {
                $collCustomers = ChildCustomerQuery::create(null, $criteria)
                    ->filterByShipvia($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCustomersPartial && count($collCustomers)) {
                        $this->initCustomers(false);

                        foreach ($collCustomers as $obj) {
                            if (false == $this->collCustomers->contains($obj)) {
                                $this->collCustomers->append($obj);
                            }
                        }

                        $this->collCustomersPartial = true;
                    }

                    return $collCustomers;
                }

                if ($partial && $this->collCustomers) {
                    foreach ($this->collCustomers as $obj) {
                        if ($obj->isNew()) {
                            $collCustomers[] = $obj;
                        }
                    }
                }

                $this->collCustomers = $collCustomers;
                $this->collCustomersPartial = false;
            }
        }

        return $this->collCustomers;
    }

    /**
     * Sets a collection of ChildCustomer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $customers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildShipvia The current object (for fluent API support)
     */
    public function setCustomers(Collection $customers, ConnectionInterface $con = null)
    {
        /** @var ChildCustomer[] $customersToDelete */
        $customersToDelete = $this->getCustomers(new Criteria(), $con)->diff($customers);


        $this->customersScheduledForDeletion = $customersToDelete;

        foreach ($customersToDelete as $customerRemoved) {
            $customerRemoved->setShipvia(null);
        }

        $this->collCustomers = null;
        foreach ($customers as $customer) {
            $this->addCustomer($customer);
        }

        $this->collCustomers = $customers;
        $this->collCustomersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Customer objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Customer objects.
     * @throws PropelException
     */
    public function countCustomers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCustomersPartial && !$this->isNew();
        if (null === $this->collCustomers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCustomers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCustomers());
            }

            $query = ChildCustomerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByShipvia($this)
                ->count($con);
        }

        return count($this->collCustomers);
    }

    /**
     * Method called to associate a ChildCustomer object to this object
     * through the ChildCustomer foreign key attribute.
     *
     * @param  ChildCustomer $l ChildCustomer
     * @return $this|\Shipvia The current object (for fluent API support)
     */
    public function addCustomer(ChildCustomer $l)
    {
        if ($this->collCustomers === null) {
            $this->initCustomers();
            $this->collCustomersPartial = true;
        }

        if (!$this->collCustomers->contains($l)) {
            $this->doAddCustomer($l);

            if ($this->customersScheduledForDeletion and $this->customersScheduledForDeletion->contains($l)) {
                $this->customersScheduledForDeletion->remove($this->customersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildCustomer $customer The ChildCustomer object to add.
     */
    protected function doAddCustomer(ChildCustomer $customer)
    {
        $this->collCustomers[]= $customer;
        $customer->setShipvia($this);
    }

    /**
     * @param  ChildCustomer $customer The ChildCustomer object to remove.
     * @return $this|ChildShipvia The current object (for fluent API support)
     */
    public function removeCustomer(ChildCustomer $customer)
    {
        if ($this->getCustomers()->contains($customer)) {
            $pos = $this->collCustomers->search($customer);
            $this->collCustomers->remove($pos);
            if (null === $this->customersScheduledForDeletion) {
                $this->customersScheduledForDeletion = clone $this->collCustomers;
                $this->customersScheduledForDeletion->clear();
            }
            $this->customersScheduledForDeletion[]= $customer;
            $customer->setShipvia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Shipvia is new, it will return
     * an empty collection; or if this Shipvia has previously
     * been saved, it will retrieve related Customers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Shipvia.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildCustomer[] List of ChildCustomer objects
     */
    public function getCustomersJoinArCommissionCode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildCustomerQuery::create(null, $criteria);
        $query->joinWith('ArCommissionCode', $joinBehavior);

        return $this->getCustomers($query, $con);
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
     * If this ChildShipvia is new, it will return
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
                    ->filterByShipvia($this)
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
     * @return $this|ChildShipvia The current object (for fluent API support)
     */
    public function setPurchaseOrders(Collection $purchaseOrders, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrder[] $purchaseOrdersToDelete */
        $purchaseOrdersToDelete = $this->getPurchaseOrders(new Criteria(), $con)->diff($purchaseOrders);


        $this->purchaseOrdersScheduledForDeletion = $purchaseOrdersToDelete;

        foreach ($purchaseOrdersToDelete as $purchaseOrderRemoved) {
            $purchaseOrderRemoved->setShipvia(null);
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
                ->filterByShipvia($this)
                ->count($con);
        }

        return count($this->collPurchaseOrders);
    }

    /**
     * Method called to associate a ChildPurchaseOrder object to this object
     * through the ChildPurchaseOrder foreign key attribute.
     *
     * @param  ChildPurchaseOrder $l ChildPurchaseOrder
     * @return $this|\Shipvia The current object (for fluent API support)
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
        $purchaseOrder->setShipvia($this);
    }

    /**
     * @param  ChildPurchaseOrder $purchaseOrder The ChildPurchaseOrder object to remove.
     * @return $this|ChildShipvia The current object (for fluent API support)
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
            $this->purchaseOrdersScheduledForDeletion[]= $purchaseOrder;
            $purchaseOrder->setShipvia(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Shipvia is new, it will return
     * an empty collection; or if this Shipvia has previously
     * been saved, it will retrieve related PurchaseOrders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Shipvia.
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
     * Otherwise if this Shipvia is new, it will return
     * an empty collection; or if this Shipvia has previously
     * been saved, it will retrieve related PurchaseOrders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Shipvia.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrder[] List of ChildPurchaseOrder objects
     */
    public function getPurchaseOrdersJoinVendorShipfrom(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderQuery::create(null, $criteria);
        $query->joinWith('VendorShipfrom', $joinBehavior);

        return $this->getPurchaseOrders($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->artbshipvia = null;
        $this->artbsviadesc = null;
        $this->artbsviaprio = null;
        $this->artbsviaweb = null;
        $this->artbsviaair = null;
        $this->artbsviaupsserv = null;
        $this->artbsviaupsbilling = null;
        $this->artbsviascaccd = null;
        $this->artbsviaedimethcd = null;
        $this->artbsviaupsresidential = null;
        $this->artbsviachrgfrt = null;
        $this->artbsviauseroute = null;
        $this->artbsviacommfrght = null;
        $this->artbsviashiparea = null;
        $this->artbsviausesurchg = null;
        $this->artbsviasurchgpct = null;
        $this->artbsviataxcode = null;
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
            if ($this->collVendorShipfroms) {
                foreach ($this->collVendorShipfroms as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVendors) {
                foreach ($this->collVendors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCustomers) {
                foreach ($this->collCustomers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrders) {
                foreach ($this->collPurchaseOrders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collVendorShipfroms = null;
        $this->collVendors = null;
        $this->collCustomers = null;
        $this->collPurchaseOrders = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ShipviaTableMap::DEFAULT_STRING_FORMAT);
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
