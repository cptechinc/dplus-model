<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItemXrefVendorQuery as ChildItemXrefVendorQuery;
use \UnitofMeasurePurchase as ChildUnitofMeasurePurchase;
use \UnitofMeasurePurchaseQuery as ChildUnitofMeasurePurchaseQuery;
use \Vendor as ChildVendor;
use \VendorQuery as ChildVendorQuery;
use \Exception;
use \PDO;
use Map\ItemXrefVendorTableMap;
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
 * Base class that represents a row from the 'vend_item_xref' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItemXrefVendor implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItemXrefVendorTableMap';


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
     * The value for the vexrvenditemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $vexrvenditemnbr;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the vexrpoordercode field.
     *
     * @var        string
     */
    protected $vexrpoordercode;

    /**
     * The value for the vexroption1 field.
     *
     * @var        string
     */
    protected $vexroption1;

    /**
     * The value for the intbuompur field.
     *
     * @var        string
     */
    protected $intbuompur;

    /**
     * The value for the vexrcaseqty field.
     *
     * @var        string
     */
    protected $vexrcaseqty;

    /**
     * The value for the vexrprtkitdet field.
     *
     * @var        string
     */
    protected $vexrprtkitdet;

    /**
     * The value for the vexrlistprice field.
     *
     * @var        string
     */
    protected $vexrlistprice;

    /**
     * The value for the vexrunitcost field.
     *
     * @var        string
     */
    protected $vexrunitcost;

    /**
     * The value for the vexrforeigncost field.
     *
     * @var        string
     */
    protected $vexrforeigncost;

    /**
     * The value for the vexrcostlastdate field.
     *
     * @var        string
     */
    protected $vexrcostlastdate;

    /**
     * The value for the vexrunitunit1 field.
     *
     * @var        int
     */
    protected $vexrunitunit1;

    /**
     * The value for the vexrunitcost1 field.
     *
     * @var        string
     */
    protected $vexrunitcost1;

    /**
     * The value for the vexrunitunit2 field.
     *
     * @var        int
     */
    protected $vexrunitunit2;

    /**
     * The value for the vexrunitcost2 field.
     *
     * @var        string
     */
    protected $vexrunitcost2;

    /**
     * The value for the vexrunitunit3 field.
     *
     * @var        int
     */
    protected $vexrunitunit3;

    /**
     * The value for the vexrunitcost3 field.
     *
     * @var        string
     */
    protected $vexrunitcost3;

    /**
     * The value for the vexrunitunit4 field.
     *
     * @var        int
     */
    protected $vexrunitunit4;

    /**
     * The value for the vexrunitcost4 field.
     *
     * @var        string
     */
    protected $vexrunitcost4;

    /**
     * The value for the vexrunitunit5 field.
     *
     * @var        int
     */
    protected $vexrunitunit5;

    /**
     * The value for the vexrunitcost5 field.
     *
     * @var        string
     */
    protected $vexrunitcost5;

    /**
     * The value for the vexrunitunit6 field.
     *
     * @var        int
     */
    protected $vexrunitunit6;

    /**
     * The value for the vexrunitcost6 field.
     *
     * @var        string
     */
    protected $vexrunitcost6;

    /**
     * The value for the vexrunitunit7 field.
     *
     * @var        int
     */
    protected $vexrunitunit7;

    /**
     * The value for the vexrunitcost7 field.
     *
     * @var        string
     */
    protected $vexrunitcost7;

    /**
     * The value for the vexrunitunit8 field.
     *
     * @var        int
     */
    protected $vexrunitunit8;

    /**
     * The value for the vexrunitcost8 field.
     *
     * @var        string
     */
    protected $vexrunitcost8;

    /**
     * The value for the vexrunitunit9 field.
     *
     * @var        int
     */
    protected $vexrunitunit9;

    /**
     * The value for the vexrunitcost9 field.
     *
     * @var        string
     */
    protected $vexrunitcost9;

    /**
     * The value for the vexrunitunit10 field.
     *
     * @var        int
     */
    protected $vexrunitunit10;

    /**
     * The value for the vexrunitcost10 field.
     *
     * @var        string
     */
    protected $vexrunitcost10;

    /**
     * The value for the vexraprvcode field.
     *
     * @var        string
     */
    protected $vexraprvcode;

    /**
     * The value for the vexrvenditemdesc field.
     *
     * @var        string
     */
    protected $vexrvenditemdesc;

    /**
     * The value for the vexrminbuyqty field.
     *
     * @var        int
     */
    protected $vexrminbuyqty;

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
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildUnitofMeasurePurchase
     */
    protected $aUnitofMeasurePurchase;

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
        $this->apvevendid = '';
        $this->vexrvenditemnbr = '';
        $this->inititemnbr = '';
    }

    /**
     * Initializes internal state of Base\ItemXrefVendor object.
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
     * Compares this with another <code>ItemXrefVendor</code> instance.  If
     * <code>obj</code> is an instance of <code>ItemXrefVendor</code>, delegates to
     * <code>equals(ItemXrefVendor)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ItemXrefVendor The current object, for fluid interface
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
     * Get the [vexrvenditemnbr] column value.
     *
     * @return string
     */
    public function getVexrvenditemnbr()
    {
        return $this->vexrvenditemnbr;
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
     * Get the [vexrpoordercode] column value.
     *
     * @return string
     */
    public function getVexrpoordercode()
    {
        return $this->vexrpoordercode;
    }

    /**
     * Get the [vexroption1] column value.
     *
     * @return string
     */
    public function getVexroption1()
    {
        return $this->vexroption1;
    }

    /**
     * Get the [intbuompur] column value.
     *
     * @return string
     */
    public function getIntbuompur()
    {
        return $this->intbuompur;
    }

    /**
     * Get the [vexrcaseqty] column value.
     *
     * @return string
     */
    public function getVexrcaseqty()
    {
        return $this->vexrcaseqty;
    }

    /**
     * Get the [vexrprtkitdet] column value.
     *
     * @return string
     */
    public function getVexrprtkitdet()
    {
        return $this->vexrprtkitdet;
    }

    /**
     * Get the [vexrlistprice] column value.
     *
     * @return string
     */
    public function getVexrlistprice()
    {
        return $this->vexrlistprice;
    }

    /**
     * Get the [vexrunitcost] column value.
     *
     * @return string
     */
    public function getVexrunitcost()
    {
        return $this->vexrunitcost;
    }

    /**
     * Get the [vexrforeigncost] column value.
     *
     * @return string
     */
    public function getVexrforeigncost()
    {
        return $this->vexrforeigncost;
    }

    /**
     * Get the [vexrcostlastdate] column value.
     *
     * @return string
     */
    public function getVexrcostlastdate()
    {
        return $this->vexrcostlastdate;
    }

    /**
     * Get the [vexrunitunit1] column value.
     *
     * @return int
     */
    public function getVexrunitunit1()
    {
        return $this->vexrunitunit1;
    }

    /**
     * Get the [vexrunitcost1] column value.
     *
     * @return string
     */
    public function getVexrunitcost1()
    {
        return $this->vexrunitcost1;
    }

    /**
     * Get the [vexrunitunit2] column value.
     *
     * @return int
     */
    public function getVexrunitunit2()
    {
        return $this->vexrunitunit2;
    }

    /**
     * Get the [vexrunitcost2] column value.
     *
     * @return string
     */
    public function getVexrunitcost2()
    {
        return $this->vexrunitcost2;
    }

    /**
     * Get the [vexrunitunit3] column value.
     *
     * @return int
     */
    public function getVexrunitunit3()
    {
        return $this->vexrunitunit3;
    }

    /**
     * Get the [vexrunitcost3] column value.
     *
     * @return string
     */
    public function getVexrunitcost3()
    {
        return $this->vexrunitcost3;
    }

    /**
     * Get the [vexrunitunit4] column value.
     *
     * @return int
     */
    public function getVexrunitunit4()
    {
        return $this->vexrunitunit4;
    }

    /**
     * Get the [vexrunitcost4] column value.
     *
     * @return string
     */
    public function getVexrunitcost4()
    {
        return $this->vexrunitcost4;
    }

    /**
     * Get the [vexrunitunit5] column value.
     *
     * @return int
     */
    public function getVexrunitunit5()
    {
        return $this->vexrunitunit5;
    }

    /**
     * Get the [vexrunitcost5] column value.
     *
     * @return string
     */
    public function getVexrunitcost5()
    {
        return $this->vexrunitcost5;
    }

    /**
     * Get the [vexrunitunit6] column value.
     *
     * @return int
     */
    public function getVexrunitunit6()
    {
        return $this->vexrunitunit6;
    }

    /**
     * Get the [vexrunitcost6] column value.
     *
     * @return string
     */
    public function getVexrunitcost6()
    {
        return $this->vexrunitcost6;
    }

    /**
     * Get the [vexrunitunit7] column value.
     *
     * @return int
     */
    public function getVexrunitunit7()
    {
        return $this->vexrunitunit7;
    }

    /**
     * Get the [vexrunitcost7] column value.
     *
     * @return string
     */
    public function getVexrunitcost7()
    {
        return $this->vexrunitcost7;
    }

    /**
     * Get the [vexrunitunit8] column value.
     *
     * @return int
     */
    public function getVexrunitunit8()
    {
        return $this->vexrunitunit8;
    }

    /**
     * Get the [vexrunitcost8] column value.
     *
     * @return string
     */
    public function getVexrunitcost8()
    {
        return $this->vexrunitcost8;
    }

    /**
     * Get the [vexrunitunit9] column value.
     *
     * @return int
     */
    public function getVexrunitunit9()
    {
        return $this->vexrunitunit9;
    }

    /**
     * Get the [vexrunitcost9] column value.
     *
     * @return string
     */
    public function getVexrunitcost9()
    {
        return $this->vexrunitcost9;
    }

    /**
     * Get the [vexrunitunit10] column value.
     *
     * @return int
     */
    public function getVexrunitunit10()
    {
        return $this->vexrunitunit10;
    }

    /**
     * Get the [vexrunitcost10] column value.
     *
     * @return string
     */
    public function getVexrunitcost10()
    {
        return $this->vexrunitcost10;
    }

    /**
     * Get the [vexraprvcode] column value.
     *
     * @return string
     */
    public function getVexraprvcode()
    {
        return $this->vexraprvcode;
    }

    /**
     * Get the [vexrvenditemdesc] column value.
     *
     * @return string
     */
    public function getVexrvenditemdesc()
    {
        return $this->vexrvenditemdesc;
    }

    /**
     * Get the [vexrminbuyqty] column value.
     *
     * @return int
     */
    public function getVexrminbuyqty()
    {
        return $this->vexrminbuyqty;
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
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_APVEVENDID] = true;
        }

        if ($this->aVendor !== null && $this->aVendor->getApvevendid() !== $v) {
            $this->aVendor = null;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [vexrvenditemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrvenditemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrvenditemnbr !== $v) {
            $this->vexrvenditemnbr = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR] = true;
        }

        return $this;
    } // setVexrvenditemnbr()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [vexrpoordercode] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrpoordercode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrpoordercode !== $v) {
            $this->vexrpoordercode = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRPOORDERCODE] = true;
        }

        return $this;
    } // setVexrpoordercode()

    /**
     * Set the value of [vexroption1] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexroption1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexroption1 !== $v) {
            $this->vexroption1 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXROPTION1] = true;
        }

        return $this;
    } // setVexroption1()

    /**
     * Set the value of [intbuompur] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setIntbuompur($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuompur !== $v) {
            $this->intbuompur = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_INTBUOMPUR] = true;
        }

        if ($this->aUnitofMeasurePurchase !== null && $this->aUnitofMeasurePurchase->getIntbuompur() !== $v) {
            $this->aUnitofMeasurePurchase = null;
        }

        return $this;
    } // setIntbuompur()

    /**
     * Set the value of [vexrcaseqty] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrcaseqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrcaseqty !== $v) {
            $this->vexrcaseqty = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRCASEQTY] = true;
        }

        return $this;
    } // setVexrcaseqty()

    /**
     * Set the value of [vexrprtkitdet] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrprtkitdet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrprtkitdet !== $v) {
            $this->vexrprtkitdet = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRPRTKITDET] = true;
        }

        return $this;
    } // setVexrprtkitdet()

    /**
     * Set the value of [vexrlistprice] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrlistprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrlistprice !== $v) {
            $this->vexrlistprice = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRLISTPRICE] = true;
        }

        return $this;
    } // setVexrlistprice()

    /**
     * Set the value of [vexrunitcost] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost !== $v) {
            $this->vexrunitcost = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST] = true;
        }

        return $this;
    } // setVexrunitcost()

    /**
     * Set the value of [vexrforeigncost] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrforeigncost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrforeigncost !== $v) {
            $this->vexrforeigncost = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST] = true;
        }

        return $this;
    } // setVexrforeigncost()

    /**
     * Set the value of [vexrcostlastdate] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrcostlastdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrcostlastdate !== $v) {
            $this->vexrcostlastdate = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE] = true;
        }

        return $this;
    } // setVexrcostlastdate()

    /**
     * Set the value of [vexrunitunit1] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit1 !== $v) {
            $this->vexrunitunit1 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT1] = true;
        }

        return $this;
    } // setVexrunitunit1()

    /**
     * Set the value of [vexrunitcost1] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost1 !== $v) {
            $this->vexrunitcost1 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST1] = true;
        }

        return $this;
    } // setVexrunitcost1()

    /**
     * Set the value of [vexrunitunit2] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit2 !== $v) {
            $this->vexrunitunit2 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT2] = true;
        }

        return $this;
    } // setVexrunitunit2()

    /**
     * Set the value of [vexrunitcost2] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost2 !== $v) {
            $this->vexrunitcost2 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST2] = true;
        }

        return $this;
    } // setVexrunitcost2()

    /**
     * Set the value of [vexrunitunit3] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit3 !== $v) {
            $this->vexrunitunit3 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT3] = true;
        }

        return $this;
    } // setVexrunitunit3()

    /**
     * Set the value of [vexrunitcost3] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost3 !== $v) {
            $this->vexrunitcost3 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST3] = true;
        }

        return $this;
    } // setVexrunitcost3()

    /**
     * Set the value of [vexrunitunit4] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit4 !== $v) {
            $this->vexrunitunit4 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT4] = true;
        }

        return $this;
    } // setVexrunitunit4()

    /**
     * Set the value of [vexrunitcost4] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost4 !== $v) {
            $this->vexrunitcost4 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST4] = true;
        }

        return $this;
    } // setVexrunitcost4()

    /**
     * Set the value of [vexrunitunit5] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit5 !== $v) {
            $this->vexrunitunit5 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT5] = true;
        }

        return $this;
    } // setVexrunitunit5()

    /**
     * Set the value of [vexrunitcost5] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost5 !== $v) {
            $this->vexrunitcost5 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST5] = true;
        }

        return $this;
    } // setVexrunitcost5()

    /**
     * Set the value of [vexrunitunit6] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit6 !== $v) {
            $this->vexrunitunit6 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT6] = true;
        }

        return $this;
    } // setVexrunitunit6()

    /**
     * Set the value of [vexrunitcost6] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost6 !== $v) {
            $this->vexrunitcost6 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST6] = true;
        }

        return $this;
    } // setVexrunitcost6()

    /**
     * Set the value of [vexrunitunit7] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit7($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit7 !== $v) {
            $this->vexrunitunit7 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT7] = true;
        }

        return $this;
    } // setVexrunitunit7()

    /**
     * Set the value of [vexrunitcost7] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost7 !== $v) {
            $this->vexrunitcost7 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST7] = true;
        }

        return $this;
    } // setVexrunitcost7()

    /**
     * Set the value of [vexrunitunit8] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit8($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit8 !== $v) {
            $this->vexrunitunit8 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT8] = true;
        }

        return $this;
    } // setVexrunitunit8()

    /**
     * Set the value of [vexrunitcost8] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost8 !== $v) {
            $this->vexrunitcost8 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST8] = true;
        }

        return $this;
    } // setVexrunitcost8()

    /**
     * Set the value of [vexrunitunit9] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit9($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit9 !== $v) {
            $this->vexrunitunit9 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT9] = true;
        }

        return $this;
    } // setVexrunitunit9()

    /**
     * Set the value of [vexrunitcost9] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost9 !== $v) {
            $this->vexrunitcost9 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST9] = true;
        }

        return $this;
    } // setVexrunitcost9()

    /**
     * Set the value of [vexrunitunit10] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitunit10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrunitunit10 !== $v) {
            $this->vexrunitunit10 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITUNIT10] = true;
        }

        return $this;
    } // setVexrunitunit10()

    /**
     * Set the value of [vexrunitcost10] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrunitcost10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrunitcost10 !== $v) {
            $this->vexrunitcost10 = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRUNITCOST10] = true;
        }

        return $this;
    } // setVexrunitcost10()

    /**
     * Set the value of [vexraprvcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexraprvcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexraprvcode !== $v) {
            $this->vexraprvcode = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRAPRVCODE] = true;
        }

        return $this;
    } // setVexraprvcode()

    /**
     * Set the value of [vexrvenditemdesc] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrvenditemdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vexrvenditemdesc !== $v) {
            $this->vexrvenditemdesc = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRVENDITEMDESC] = true;
        }

        return $this;
    } // setVexrvenditemdesc()

    /**
     * Set the value of [vexrminbuyqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setVexrminbuyqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->vexrminbuyqty !== $v) {
            $this->vexrminbuyqty = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_VEXRMINBUYQTY] = true;
        }

        return $this;
    } // setVexrminbuyqty()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItemXrefVendorTableMap::COL_DUMMY] = true;
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

            if ($this->vexrvenditemnbr !== '') {
                return false;
            }

            if ($this->inititemnbr !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemXrefVendorTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrvenditemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemXrefVendorTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrpoordercode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrpoordercode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexroption1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexroption1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemXrefVendorTableMap::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuompur = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrcaseqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrcaseqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrprtkitdet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrprtkitdet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrlistprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrlistprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrforeigncost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrforeigncost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrcostlastdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrcostlastdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit7 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit8 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit9 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitunit10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitunit10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrunitcost10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrunitcost10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexraprvcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexraprvcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrvenditemdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrvenditemdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ItemXrefVendorTableMap::translateFieldName('Vexrminbuyqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vexrminbuyqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ItemXrefVendorTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ItemXrefVendorTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ItemXrefVendorTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 38; // 38 = ItemXrefVendorTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItemXrefVendor'), 0, $e);
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
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aUnitofMeasurePurchase !== null && $this->intbuompur !== $this->aUnitofMeasurePurchase->getIntbuompur()) {
            $this->aUnitofMeasurePurchase = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefVendorTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemXrefVendorQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aVendor = null;
            $this->aItemMasterItem = null;
            $this->aUnitofMeasurePurchase = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ItemXrefVendor::setDeleted()
     * @see ItemXrefVendor::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemXrefVendorQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorTableMap::DATABASE_NAME);
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
                ItemXrefVendorTableMap::addInstanceToPool($this);
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

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aUnitofMeasurePurchase !== null) {
                if ($this->aUnitofMeasurePurchase->isModified() || $this->aUnitofMeasurePurchase->isNew()) {
                    $affectedRows += $this->aUnitofMeasurePurchase->save($con);
                }
                $this->setUnitofMeasurePurchase($this->aUnitofMeasurePurchase);
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
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'VexrVendItemNbr';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRPOORDERCODE)) {
            $modifiedColumns[':p' . $index++]  = 'VexrPoOrderCode';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXROPTION1)) {
            $modifiedColumns[':p' . $index++]  = 'VexrOption1';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_INTBUOMPUR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomPur';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRCASEQTY)) {
            $modifiedColumns[':p' . $index++]  = 'VexrCaseQty';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRPRTKITDET)) {
            $modifiedColumns[':p' . $index++]  = 'VexrPrtKitDet';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRLISTPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'VexrListPrice';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST)) {
            $modifiedColumns[':p' . $index++]  = 'VexrForeignCost';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'VexrCostLastDate';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT1)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit1';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST1)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost1';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT2)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit2';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST2)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost2';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT3)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit3';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST3)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost3';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT4)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit4';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST4)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost4';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT5)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit5';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST5)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost5';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT6)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit6';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST6)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost6';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT7)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit7';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST7)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost7';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT8)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit8';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST8)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost8';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT9)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit9';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST9)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost9';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT10)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitUnit10';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST10)) {
            $modifiedColumns[':p' . $index++]  = 'VexrUnitCost10';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRAPRVCODE)) {
            $modifiedColumns[':p' . $index++]  = 'VexrAprvCode';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRVENDITEMDESC)) {
            $modifiedColumns[':p' . $index++]  = 'VexrVendItemDesc';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRMINBUYQTY)) {
            $modifiedColumns[':p' . $index++]  = 'VexrMinBuyQty';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO vend_item_xref (%s) VALUES (%s)',
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
                    case 'VexrVendItemNbr':
                        $stmt->bindValue($identifier, $this->vexrvenditemnbr, PDO::PARAM_STR);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'VexrPoOrderCode':
                        $stmt->bindValue($identifier, $this->vexrpoordercode, PDO::PARAM_STR);
                        break;
                    case 'VexrOption1':
                        $stmt->bindValue($identifier, $this->vexroption1, PDO::PARAM_STR);
                        break;
                    case 'IntbUomPur':
                        $stmt->bindValue($identifier, $this->intbuompur, PDO::PARAM_STR);
                        break;
                    case 'VexrCaseQty':
                        $stmt->bindValue($identifier, $this->vexrcaseqty, PDO::PARAM_STR);
                        break;
                    case 'VexrPrtKitDet':
                        $stmt->bindValue($identifier, $this->vexrprtkitdet, PDO::PARAM_STR);
                        break;
                    case 'VexrListPrice':
                        $stmt->bindValue($identifier, $this->vexrlistprice, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitCost':
                        $stmt->bindValue($identifier, $this->vexrunitcost, PDO::PARAM_STR);
                        break;
                    case 'VexrForeignCost':
                        $stmt->bindValue($identifier, $this->vexrforeigncost, PDO::PARAM_STR);
                        break;
                    case 'VexrCostLastDate':
                        $stmt->bindValue($identifier, $this->vexrcostlastdate, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit1':
                        $stmt->bindValue($identifier, $this->vexrunitunit1, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost1':
                        $stmt->bindValue($identifier, $this->vexrunitcost1, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit2':
                        $stmt->bindValue($identifier, $this->vexrunitunit2, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost2':
                        $stmt->bindValue($identifier, $this->vexrunitcost2, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit3':
                        $stmt->bindValue($identifier, $this->vexrunitunit3, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost3':
                        $stmt->bindValue($identifier, $this->vexrunitcost3, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit4':
                        $stmt->bindValue($identifier, $this->vexrunitunit4, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost4':
                        $stmt->bindValue($identifier, $this->vexrunitcost4, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit5':
                        $stmt->bindValue($identifier, $this->vexrunitunit5, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost5':
                        $stmt->bindValue($identifier, $this->vexrunitcost5, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit6':
                        $stmt->bindValue($identifier, $this->vexrunitunit6, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost6':
                        $stmt->bindValue($identifier, $this->vexrunitcost6, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit7':
                        $stmt->bindValue($identifier, $this->vexrunitunit7, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost7':
                        $stmt->bindValue($identifier, $this->vexrunitcost7, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit8':
                        $stmt->bindValue($identifier, $this->vexrunitunit8, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost8':
                        $stmt->bindValue($identifier, $this->vexrunitcost8, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit9':
                        $stmt->bindValue($identifier, $this->vexrunitunit9, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost9':
                        $stmt->bindValue($identifier, $this->vexrunitcost9, PDO::PARAM_STR);
                        break;
                    case 'VexrUnitUnit10':
                        $stmt->bindValue($identifier, $this->vexrunitunit10, PDO::PARAM_INT);
                        break;
                    case 'VexrUnitCost10':
                        $stmt->bindValue($identifier, $this->vexrunitcost10, PDO::PARAM_STR);
                        break;
                    case 'VexrAprvCode':
                        $stmt->bindValue($identifier, $this->vexraprvcode, PDO::PARAM_STR);
                        break;
                    case 'VexrVendItemDesc':
                        $stmt->bindValue($identifier, $this->vexrvenditemdesc, PDO::PARAM_STR);
                        break;
                    case 'VexrMinBuyQty':
                        $stmt->bindValue($identifier, $this->vexrminbuyqty, PDO::PARAM_INT);
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
        $pos = ItemXrefVendorTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getVexrvenditemnbr();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getVexrpoordercode();
                break;
            case 4:
                return $this->getVexroption1();
                break;
            case 5:
                return $this->getIntbuompur();
                break;
            case 6:
                return $this->getVexrcaseqty();
                break;
            case 7:
                return $this->getVexrprtkitdet();
                break;
            case 8:
                return $this->getVexrlistprice();
                break;
            case 9:
                return $this->getVexrunitcost();
                break;
            case 10:
                return $this->getVexrforeigncost();
                break;
            case 11:
                return $this->getVexrcostlastdate();
                break;
            case 12:
                return $this->getVexrunitunit1();
                break;
            case 13:
                return $this->getVexrunitcost1();
                break;
            case 14:
                return $this->getVexrunitunit2();
                break;
            case 15:
                return $this->getVexrunitcost2();
                break;
            case 16:
                return $this->getVexrunitunit3();
                break;
            case 17:
                return $this->getVexrunitcost3();
                break;
            case 18:
                return $this->getVexrunitunit4();
                break;
            case 19:
                return $this->getVexrunitcost4();
                break;
            case 20:
                return $this->getVexrunitunit5();
                break;
            case 21:
                return $this->getVexrunitcost5();
                break;
            case 22:
                return $this->getVexrunitunit6();
                break;
            case 23:
                return $this->getVexrunitcost6();
                break;
            case 24:
                return $this->getVexrunitunit7();
                break;
            case 25:
                return $this->getVexrunitcost7();
                break;
            case 26:
                return $this->getVexrunitunit8();
                break;
            case 27:
                return $this->getVexrunitcost8();
                break;
            case 28:
                return $this->getVexrunitunit9();
                break;
            case 29:
                return $this->getVexrunitcost9();
                break;
            case 30:
                return $this->getVexrunitunit10();
                break;
            case 31:
                return $this->getVexrunitcost10();
                break;
            case 32:
                return $this->getVexraprvcode();
                break;
            case 33:
                return $this->getVexrvenditemdesc();
                break;
            case 34:
                return $this->getVexrminbuyqty();
                break;
            case 35:
                return $this->getDateupdtd();
                break;
            case 36:
                return $this->getTimeupdtd();
                break;
            case 37:
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

        if (isset($alreadyDumpedObjects['ItemXrefVendor'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ItemXrefVendor'][$this->hashCode()] = true;
        $keys = ItemXrefVendorTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getApvevendid(),
            $keys[1] => $this->getVexrvenditemnbr(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getVexrpoordercode(),
            $keys[4] => $this->getVexroption1(),
            $keys[5] => $this->getIntbuompur(),
            $keys[6] => $this->getVexrcaseqty(),
            $keys[7] => $this->getVexrprtkitdet(),
            $keys[8] => $this->getVexrlistprice(),
            $keys[9] => $this->getVexrunitcost(),
            $keys[10] => $this->getVexrforeigncost(),
            $keys[11] => $this->getVexrcostlastdate(),
            $keys[12] => $this->getVexrunitunit1(),
            $keys[13] => $this->getVexrunitcost1(),
            $keys[14] => $this->getVexrunitunit2(),
            $keys[15] => $this->getVexrunitcost2(),
            $keys[16] => $this->getVexrunitunit3(),
            $keys[17] => $this->getVexrunitcost3(),
            $keys[18] => $this->getVexrunitunit4(),
            $keys[19] => $this->getVexrunitcost4(),
            $keys[20] => $this->getVexrunitunit5(),
            $keys[21] => $this->getVexrunitcost5(),
            $keys[22] => $this->getVexrunitunit6(),
            $keys[23] => $this->getVexrunitcost6(),
            $keys[24] => $this->getVexrunitunit7(),
            $keys[25] => $this->getVexrunitcost7(),
            $keys[26] => $this->getVexrunitunit8(),
            $keys[27] => $this->getVexrunitcost8(),
            $keys[28] => $this->getVexrunitunit9(),
            $keys[29] => $this->getVexrunitcost9(),
            $keys[30] => $this->getVexrunitunit10(),
            $keys[31] => $this->getVexrunitcost10(),
            $keys[32] => $this->getVexraprvcode(),
            $keys[33] => $this->getVexrvenditemdesc(),
            $keys[34] => $this->getVexrminbuyqty(),
            $keys[35] => $this->getDateupdtd(),
            $keys[36] => $this->getTimeupdtd(),
            $keys[37] => $this->getDummy(),
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
            if (null !== $this->aUnitofMeasurePurchase) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'unitofMeasurePurchase';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_uom_pur';
                        break;
                    default:
                        $key = 'UnitofMeasurePurchase';
                }

                $result[$key] = $this->aUnitofMeasurePurchase->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\ItemXrefVendor
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemXrefVendorTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ItemXrefVendor
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setApvevendid($value);
                break;
            case 1:
                $this->setVexrvenditemnbr($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setVexrpoordercode($value);
                break;
            case 4:
                $this->setVexroption1($value);
                break;
            case 5:
                $this->setIntbuompur($value);
                break;
            case 6:
                $this->setVexrcaseqty($value);
                break;
            case 7:
                $this->setVexrprtkitdet($value);
                break;
            case 8:
                $this->setVexrlistprice($value);
                break;
            case 9:
                $this->setVexrunitcost($value);
                break;
            case 10:
                $this->setVexrforeigncost($value);
                break;
            case 11:
                $this->setVexrcostlastdate($value);
                break;
            case 12:
                $this->setVexrunitunit1($value);
                break;
            case 13:
                $this->setVexrunitcost1($value);
                break;
            case 14:
                $this->setVexrunitunit2($value);
                break;
            case 15:
                $this->setVexrunitcost2($value);
                break;
            case 16:
                $this->setVexrunitunit3($value);
                break;
            case 17:
                $this->setVexrunitcost3($value);
                break;
            case 18:
                $this->setVexrunitunit4($value);
                break;
            case 19:
                $this->setVexrunitcost4($value);
                break;
            case 20:
                $this->setVexrunitunit5($value);
                break;
            case 21:
                $this->setVexrunitcost5($value);
                break;
            case 22:
                $this->setVexrunitunit6($value);
                break;
            case 23:
                $this->setVexrunitcost6($value);
                break;
            case 24:
                $this->setVexrunitunit7($value);
                break;
            case 25:
                $this->setVexrunitcost7($value);
                break;
            case 26:
                $this->setVexrunitunit8($value);
                break;
            case 27:
                $this->setVexrunitcost8($value);
                break;
            case 28:
                $this->setVexrunitunit9($value);
                break;
            case 29:
                $this->setVexrunitcost9($value);
                break;
            case 30:
                $this->setVexrunitunit10($value);
                break;
            case 31:
                $this->setVexrunitcost10($value);
                break;
            case 32:
                $this->setVexraprvcode($value);
                break;
            case 33:
                $this->setVexrvenditemdesc($value);
                break;
            case 34:
                $this->setVexrminbuyqty($value);
                break;
            case 35:
                $this->setDateupdtd($value);
                break;
            case 36:
                $this->setTimeupdtd($value);
                break;
            case 37:
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
        $keys = ItemXrefVendorTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setApvevendid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setVexrvenditemnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setVexrpoordercode($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setVexroption1($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIntbuompur($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setVexrcaseqty($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setVexrprtkitdet($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setVexrlistprice($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setVexrunitcost($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setVexrforeigncost($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setVexrcostlastdate($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setVexrunitunit1($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setVexrunitcost1($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setVexrunitunit2($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setVexrunitcost2($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setVexrunitunit3($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setVexrunitcost3($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setVexrunitunit4($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setVexrunitcost4($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setVexrunitunit5($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setVexrunitcost5($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setVexrunitunit6($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setVexrunitcost6($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setVexrunitunit7($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setVexrunitcost7($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setVexrunitunit8($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setVexrunitcost8($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setVexrunitunit9($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setVexrunitcost9($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setVexrunitunit10($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setVexrunitcost10($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setVexraprvcode($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setVexrvenditemdesc($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setVexrminbuyqty($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setDateupdtd($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setTimeupdtd($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setDummy($arr[$keys[37]]);
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
     * @return $this|\ItemXrefVendor The current object, for fluid interface
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
        $criteria = new Criteria(ItemXrefVendorTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_APVEVENDID)) {
            $criteria->add(ItemXrefVendorTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR, $this->vexrvenditemnbr);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_INITITEMNBR)) {
            $criteria->add(ItemXrefVendorTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRPOORDERCODE)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRPOORDERCODE, $this->vexrpoordercode);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXROPTION1)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXROPTION1, $this->vexroption1);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_INTBUOMPUR)) {
            $criteria->add(ItemXrefVendorTableMap::COL_INTBUOMPUR, $this->intbuompur);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRCASEQTY)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRCASEQTY, $this->vexrcaseqty);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRPRTKITDET)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRPRTKITDET, $this->vexrprtkitdet);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRLISTPRICE)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRLISTPRICE, $this->vexrlistprice);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST, $this->vexrunitcost);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST, $this->vexrforeigncost);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE, $this->vexrcostlastdate);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT1)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT1, $this->vexrunitunit1);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST1)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST1, $this->vexrunitcost1);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT2)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT2, $this->vexrunitunit2);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST2)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST2, $this->vexrunitcost2);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT3)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT3, $this->vexrunitunit3);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST3)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST3, $this->vexrunitcost3);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT4)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT4, $this->vexrunitunit4);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST4)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST4, $this->vexrunitcost4);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT5)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT5, $this->vexrunitunit5);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST5)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST5, $this->vexrunitcost5);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT6)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT6, $this->vexrunitunit6);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST6)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST6, $this->vexrunitcost6);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT7)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT7, $this->vexrunitunit7);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST7)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST7, $this->vexrunitcost7);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT8)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT8, $this->vexrunitunit8);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST8)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST8, $this->vexrunitcost8);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT9)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT9, $this->vexrunitunit9);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST9)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST9, $this->vexrunitcost9);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITUNIT10)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITUNIT10, $this->vexrunitunit10);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRUNITCOST10)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRUNITCOST10, $this->vexrunitcost10);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRAPRVCODE)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRAPRVCODE, $this->vexraprvcode);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRVENDITEMDESC)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRVENDITEMDESC, $this->vexrvenditemdesc);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_VEXRMINBUYQTY)) {
            $criteria->add(ItemXrefVendorTableMap::COL_VEXRMINBUYQTY, $this->vexrminbuyqty);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItemXrefVendorTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItemXrefVendorTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItemXrefVendorTableMap::COL_DUMMY)) {
            $criteria->add(ItemXrefVendorTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildItemXrefVendorQuery::create();
        $criteria->add(ItemXrefVendorTableMap::COL_APVEVENDID, $this->apvevendid);
        $criteria->add(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR, $this->vexrvenditemnbr);
        $criteria->add(ItemXrefVendorTableMap::COL_INITITEMNBR, $this->inititemnbr);

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
            null !== $this->getVexrvenditemnbr() &&
            null !== $this->getInititemnbr();

        $validPrimaryKeyFKs = 2;
        $primaryKeyFKs = [];

        //relation vendor to table ap_vend_mast
        if ($this->aVendor && $hash = spl_object_hash($this->aVendor)) {
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
        $pks[0] = $this->getApvevendid();
        $pks[1] = $this->getVexrvenditemnbr();
        $pks[2] = $this->getInititemnbr();

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
        $this->setVexrvenditemnbr($keys[1]);
        $this->setInititemnbr($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getApvevendid()) && (null === $this->getVexrvenditemnbr()) && (null === $this->getInititemnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ItemXrefVendor (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setVexrvenditemnbr($this->getVexrvenditemnbr());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setVexrpoordercode($this->getVexrpoordercode());
        $copyObj->setVexroption1($this->getVexroption1());
        $copyObj->setIntbuompur($this->getIntbuompur());
        $copyObj->setVexrcaseqty($this->getVexrcaseqty());
        $copyObj->setVexrprtkitdet($this->getVexrprtkitdet());
        $copyObj->setVexrlistprice($this->getVexrlistprice());
        $copyObj->setVexrunitcost($this->getVexrunitcost());
        $copyObj->setVexrforeigncost($this->getVexrforeigncost());
        $copyObj->setVexrcostlastdate($this->getVexrcostlastdate());
        $copyObj->setVexrunitunit1($this->getVexrunitunit1());
        $copyObj->setVexrunitcost1($this->getVexrunitcost1());
        $copyObj->setVexrunitunit2($this->getVexrunitunit2());
        $copyObj->setVexrunitcost2($this->getVexrunitcost2());
        $copyObj->setVexrunitunit3($this->getVexrunitunit3());
        $copyObj->setVexrunitcost3($this->getVexrunitcost3());
        $copyObj->setVexrunitunit4($this->getVexrunitunit4());
        $copyObj->setVexrunitcost4($this->getVexrunitcost4());
        $copyObj->setVexrunitunit5($this->getVexrunitunit5());
        $copyObj->setVexrunitcost5($this->getVexrunitcost5());
        $copyObj->setVexrunitunit6($this->getVexrunitunit6());
        $copyObj->setVexrunitcost6($this->getVexrunitcost6());
        $copyObj->setVexrunitunit7($this->getVexrunitunit7());
        $copyObj->setVexrunitcost7($this->getVexrunitcost7());
        $copyObj->setVexrunitunit8($this->getVexrunitunit8());
        $copyObj->setVexrunitcost8($this->getVexrunitcost8());
        $copyObj->setVexrunitunit9($this->getVexrunitunit9());
        $copyObj->setVexrunitcost9($this->getVexrunitcost9());
        $copyObj->setVexrunitunit10($this->getVexrunitunit10());
        $copyObj->setVexrunitcost10($this->getVexrunitcost10());
        $copyObj->setVexraprvcode($this->getVexraprvcode());
        $copyObj->setVexrvenditemdesc($this->getVexrvenditemdesc());
        $copyObj->setVexrminbuyqty($this->getVexrminbuyqty());
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
     * @return \ItemXrefVendor Clone of current object.
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
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
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
            $v->addItemXrefVendor($this);
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
                ->filterByItemXrefVendor($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVendor->addItemXrefVendors($this);
             */
        }

        return $this->aVendor;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
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
            $v->addItemXrefVendor($this);
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
                $this->aItemMasterItem->addItemXrefVendors($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildUnitofMeasurePurchase object.
     *
     * @param  ChildUnitofMeasurePurchase $v
     * @return $this|\ItemXrefVendor The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUnitofMeasurePurchase(ChildUnitofMeasurePurchase $v = null)
    {
        if ($v === null) {
            $this->setIntbuompur(NULL);
        } else {
            $this->setIntbuompur($v->getIntbuompur());
        }

        $this->aUnitofMeasurePurchase = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUnitofMeasurePurchase object, it will not be re-added.
        if ($v !== null) {
            $v->addItemXrefVendor($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildUnitofMeasurePurchase object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildUnitofMeasurePurchase The associated ChildUnitofMeasurePurchase object.
     * @throws PropelException
     */
    public function getUnitofMeasurePurchase(ConnectionInterface $con = null)
    {
        if ($this->aUnitofMeasurePurchase === null && (($this->intbuompur !== "" && $this->intbuompur !== null))) {
            $this->aUnitofMeasurePurchase = ChildUnitofMeasurePurchaseQuery::create()->findPk($this->intbuompur, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUnitofMeasurePurchase->addItemXrefVendors($this);
             */
        }

        return $this->aUnitofMeasurePurchase;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aVendor) {
            $this->aVendor->removeItemXrefVendor($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeItemXrefVendor($this);
        }
        if (null !== $this->aUnitofMeasurePurchase) {
            $this->aUnitofMeasurePurchase->removeItemXrefVendor($this);
        }
        $this->apvevendid = null;
        $this->vexrvenditemnbr = null;
        $this->inititemnbr = null;
        $this->vexrpoordercode = null;
        $this->vexroption1 = null;
        $this->intbuompur = null;
        $this->vexrcaseqty = null;
        $this->vexrprtkitdet = null;
        $this->vexrlistprice = null;
        $this->vexrunitcost = null;
        $this->vexrforeigncost = null;
        $this->vexrcostlastdate = null;
        $this->vexrunitunit1 = null;
        $this->vexrunitcost1 = null;
        $this->vexrunitunit2 = null;
        $this->vexrunitcost2 = null;
        $this->vexrunitunit3 = null;
        $this->vexrunitcost3 = null;
        $this->vexrunitunit4 = null;
        $this->vexrunitcost4 = null;
        $this->vexrunitunit5 = null;
        $this->vexrunitcost5 = null;
        $this->vexrunitunit6 = null;
        $this->vexrunitcost6 = null;
        $this->vexrunitunit7 = null;
        $this->vexrunitcost7 = null;
        $this->vexrunitunit8 = null;
        $this->vexrunitcost8 = null;
        $this->vexrunitunit9 = null;
        $this->vexrunitcost9 = null;
        $this->vexrunitunit10 = null;
        $this->vexrunitcost10 = null;
        $this->vexraprvcode = null;
        $this->vexrvenditemdesc = null;
        $this->vexrminbuyqty = null;
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

        $this->aVendor = null;
        $this->aItemMasterItem = null;
        $this->aUnitofMeasurePurchase = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItemXrefVendorTableMap::DEFAULT_STRING_FORMAT);
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
