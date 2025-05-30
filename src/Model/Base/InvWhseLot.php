<?php

namespace Base;

use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \InvWhseLotQuery as ChildInvWhseLotQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Warehouse as ChildWarehouse;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\InvWhseLotTableMap;
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
 * Base class that represents a row from the 'inv_inv_lot' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvWhseLot implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvWhseLotTableMap';


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
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the inltlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltlotser;

    /**
     * The value for the inltbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltbin;

    /**
     * The value for the inltdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltdate;

    /**
     * The value for the inltdatewrit field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltdatewrit;

    /**
     * The value for the inltcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltcost;

    /**
     * The value for the inltonhand field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltonhand;

    /**
     * The value for the inltresv field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltresv;

    /**
     * The value for the inltship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltship;

    /**
     * The value for the inltallo field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltallo;

    /**
     * The value for the inltfaballo field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltfaballo;

    /**
     * The value for the inltintran field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltintran;

    /**
     * The value for the inltinship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltinship;

    /**
     * The value for the inltlotref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltlotref;

    /**
     * The value for the inltbatch field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltbatch;

    /**
     * The value for the inltlandcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltlandcost;

    /**
     * The value for the inltmpfunitcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltmpfunitcost;

    /**
     * The value for the inlthmfunitcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inlthmfunitcost;

    /**
     * The value for the inltdsetunitcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltdsetunitcost;

    /**
     * The value for the inltnumericfiller field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltnumericfiller;

    /**
     * The value for the inlttariffcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inlttariffcost;

    /**
     * The value for the inltshopcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltshopcost;

    /**
     * The value for the inltisscodfsqty field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltisscodfsqty;

    /**
     * The value for the inltheadmark field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltheadmark;

    /**
     * The value for the inltctry field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltctry;

    /**
     * The value for the inltrvalorigcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltrvalorigcost;

    /**
     * The value for the inltrvalpct field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $inltrvalpct;

    /**
     * The value for the inltunitwght field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inltunitwght;

    /**
     * The value for the inltdestwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltdestwhse;

    /**
     * The value for the inltcntrqty field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $inltcntrqty;

    /**
     * The value for the inltqtyperroll field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $inltqtyperroll;

    /**
     * The value for the inlttarewght field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $inlttarewght;

    /**
     * The value for the inltqcreasoncd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltqcreasoncd;

    /**
     * The value for the inltcert field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltcert;

    /**
     * The value for the inltcuredate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltcuredate;

    /**
     * The value for the inltexpiredatecd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltexpiredatecd;

    /**
     * The value for the inltexpiredate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltexpiredate;

    /**
     * The value for the inltorigbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltorigbin;

    /**
     * The value for the inltshopitem field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltshopitem;

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
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildWarehouse
     */
    protected $aWarehouse;

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
        $this->inititemnbr = '';
        $this->intbwhse = '';
        $this->inltlotser = '';
        $this->inltbin = '';
        $this->inltdate = '';
        $this->inltdatewrit = '';
        $this->inltcost = '0.0000000';
        $this->inltonhand = '0.0000000';
        $this->inltresv = '0.0000000';
        $this->inltship = '0.0000000';
        $this->inltallo = '0.0000000';
        $this->inltfaballo = '0.0000000';
        $this->inltintran = '0.0000000';
        $this->inltinship = '0.0000000';
        $this->inltlotref = '';
        $this->inltbatch = '';
        $this->inltlandcost = '0.0000000';
        $this->inltmpfunitcost = '0.0000000';
        $this->inlthmfunitcost = '0.0000000';
        $this->inltdsetunitcost = '0.0000000';
        $this->inltnumericfiller = '0.0000000';
        $this->inlttariffcost = '0.0000000';
        $this->inltshopcost = '0.0000000';
        $this->inltisscodfsqty = '0.0000000';
        $this->inltheadmark = '';
        $this->inltctry = '';
        $this->inltrvalorigcost = '0.0000000';
        $this->inltrvalpct = '0.00';
        $this->inltunitwght = '0.0000000';
        $this->inltdestwhse = '';
        $this->inltcntrqty = '0';
        $this->inltqtyperroll = '0.000';
        $this->inlttarewght = '0.000';
        $this->inltqcreasoncd = '';
        $this->inltcert = '';
        $this->inltcuredate = '';
        $this->inltexpiredatecd = '';
        $this->inltexpiredate = '';
        $this->inltorigbin = '';
        $this->inltshopitem = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvWhseLot object.
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
     * Compares this with another <code>InvWhseLot</code> instance.  If
     * <code>obj</code> is an instance of <code>InvWhseLot</code>, delegates to
     * <code>equals(InvWhseLot)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvWhseLot The current object, for fluid interface
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
     * Get the [inititemnbr] column value.
     *
     * @return string
     */
    public function getInititemnbr()
    {
        return $this->inititemnbr;
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
     * Get the [inltlotser] column value.
     *
     * @return string
     */
    public function getInltlotser()
    {
        return $this->inltlotser;
    }

    /**
     * Get the [inltbin] column value.
     *
     * @return string
     */
    public function getInltbin()
    {
        return $this->inltbin;
    }

    /**
     * Get the [inltdate] column value.
     *
     * @return string
     */
    public function getInltdate()
    {
        return $this->inltdate;
    }

    /**
     * Get the [inltdatewrit] column value.
     *
     * @return string
     */
    public function getInltdatewrit()
    {
        return $this->inltdatewrit;
    }

    /**
     * Get the [inltcost] column value.
     *
     * @return string
     */
    public function getInltcost()
    {
        return $this->inltcost;
    }

    /**
     * Get the [inltonhand] column value.
     *
     * @return string
     */
    public function getInltonhand()
    {
        return $this->inltonhand;
    }

    /**
     * Get the [inltresv] column value.
     *
     * @return string
     */
    public function getInltresv()
    {
        return $this->inltresv;
    }

    /**
     * Get the [inltship] column value.
     *
     * @return string
     */
    public function getInltship()
    {
        return $this->inltship;
    }

    /**
     * Get the [inltallo] column value.
     *
     * @return string
     */
    public function getInltallo()
    {
        return $this->inltallo;
    }

    /**
     * Get the [inltfaballo] column value.
     *
     * @return string
     */
    public function getInltfaballo()
    {
        return $this->inltfaballo;
    }

    /**
     * Get the [inltintran] column value.
     *
     * @return string
     */
    public function getInltintran()
    {
        return $this->inltintran;
    }

    /**
     * Get the [inltinship] column value.
     *
     * @return string
     */
    public function getInltinship()
    {
        return $this->inltinship;
    }

    /**
     * Get the [inltlotref] column value.
     *
     * @return string
     */
    public function getInltlotref()
    {
        return $this->inltlotref;
    }

    /**
     * Get the [inltbatch] column value.
     *
     * @return string
     */
    public function getInltbatch()
    {
        return $this->inltbatch;
    }

    /**
     * Get the [inltlandcost] column value.
     *
     * @return string
     */
    public function getInltlandcost()
    {
        return $this->inltlandcost;
    }

    /**
     * Get the [inltmpfunitcost] column value.
     *
     * @return string
     */
    public function getInltmpfunitcost()
    {
        return $this->inltmpfunitcost;
    }

    /**
     * Get the [inlthmfunitcost] column value.
     *
     * @return string
     */
    public function getInlthmfunitcost()
    {
        return $this->inlthmfunitcost;
    }

    /**
     * Get the [inltdsetunitcost] column value.
     *
     * @return string
     */
    public function getInltdsetunitcost()
    {
        return $this->inltdsetunitcost;
    }

    /**
     * Get the [inltnumericfiller] column value.
     *
     * @return string
     */
    public function getInltnumericfiller()
    {
        return $this->inltnumericfiller;
    }

    /**
     * Get the [inlttariffcost] column value.
     *
     * @return string
     */
    public function getInlttariffcost()
    {
        return $this->inlttariffcost;
    }

    /**
     * Get the [inltshopcost] column value.
     *
     * @return string
     */
    public function getInltshopcost()
    {
        return $this->inltshopcost;
    }

    /**
     * Get the [inltisscodfsqty] column value.
     *
     * @return string
     */
    public function getInltisscodfsqty()
    {
        return $this->inltisscodfsqty;
    }

    /**
     * Get the [inltheadmark] column value.
     *
     * @return string
     */
    public function getInltheadmark()
    {
        return $this->inltheadmark;
    }

    /**
     * Get the [inltctry] column value.
     *
     * @return string
     */
    public function getInltctry()
    {
        return $this->inltctry;
    }

    /**
     * Get the [inltrvalorigcost] column value.
     *
     * @return string
     */
    public function getInltrvalorigcost()
    {
        return $this->inltrvalorigcost;
    }

    /**
     * Get the [inltrvalpct] column value.
     *
     * @return string
     */
    public function getInltrvalpct()
    {
        return $this->inltrvalpct;
    }

    /**
     * Get the [inltunitwght] column value.
     *
     * @return string
     */
    public function getInltunitwght()
    {
        return $this->inltunitwght;
    }

    /**
     * Get the [inltdestwhse] column value.
     *
     * @return string
     */
    public function getInltdestwhse()
    {
        return $this->inltdestwhse;
    }

    /**
     * Get the [inltcntrqty] column value.
     *
     * @return string
     */
    public function getInltcntrqty()
    {
        return $this->inltcntrqty;
    }

    /**
     * Get the [inltqtyperroll] column value.
     *
     * @return string
     */
    public function getInltqtyperroll()
    {
        return $this->inltqtyperroll;
    }

    /**
     * Get the [inlttarewght] column value.
     *
     * @return string
     */
    public function getInlttarewght()
    {
        return $this->inlttarewght;
    }

    /**
     * Get the [inltqcreasoncd] column value.
     *
     * @return string
     */
    public function getInltqcreasoncd()
    {
        return $this->inltqcreasoncd;
    }

    /**
     * Get the [inltcert] column value.
     *
     * @return string
     */
    public function getInltcert()
    {
        return $this->inltcert;
    }

    /**
     * Get the [inltcuredate] column value.
     *
     * @return string
     */
    public function getInltcuredate()
    {
        return $this->inltcuredate;
    }

    /**
     * Get the [inltexpiredatecd] column value.
     *
     * @return string
     */
    public function getInltexpiredatecd()
    {
        return $this->inltexpiredatecd;
    }

    /**
     * Get the [inltexpiredate] column value.
     *
     * @return string
     */
    public function getInltexpiredate()
    {
        return $this->inltexpiredate;
    }

    /**
     * Get the [inltorigbin] column value.
     *
     * @return string
     */
    public function getInltorigbin()
    {
        return $this->inltorigbin;
    }

    /**
     * Get the [inltshopitem] column value.
     *
     * @return string
     */
    public function getInltshopitem()
    {
        return $this->inltshopitem;
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
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INITITEMNBR] = true;
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
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INTBWHSE] = true;
        }

        if ($this->aWarehouse !== null && $this->aWarehouse->getIntbwhse() !== $v) {
            $this->aWarehouse = null;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [inltlotser] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlotser !== $v) {
            $this->inltlotser = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTLOTSER] = true;
        }

        if ($this->aInvLotMaster !== null && $this->aInvLotMaster->getLotmlotnbr() !== $v) {
            $this->aInvLotMaster = null;
        }

        return $this;
    } // setInltlotser()

    /**
     * Set the value of [inltbin] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltbin !== $v) {
            $this->inltbin = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTBIN] = true;
        }

        return $this;
    } // setInltbin()

    /**
     * Set the value of [inltdate] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltdate !== $v) {
            $this->inltdate = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTDATE] = true;
        }

        return $this;
    } // setInltdate()

    /**
     * Set the value of [inltdatewrit] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltdatewrit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltdatewrit !== $v) {
            $this->inltdatewrit = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTDATEWRIT] = true;
        }

        return $this;
    } // setInltdatewrit()

    /**
     * Set the value of [inltcost] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltcost !== $v) {
            $this->inltcost = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTCOST] = true;
        }

        return $this;
    } // setInltcost()

    /**
     * Set the value of [inltonhand] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltonhand($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltonhand !== $v) {
            $this->inltonhand = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTONHAND] = true;
        }

        return $this;
    } // setInltonhand()

    /**
     * Set the value of [inltresv] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltresv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltresv !== $v) {
            $this->inltresv = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTRESV] = true;
        }

        return $this;
    } // setInltresv()

    /**
     * Set the value of [inltship] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltship !== $v) {
            $this->inltship = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTSHIP] = true;
        }

        return $this;
    } // setInltship()

    /**
     * Set the value of [inltallo] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltallo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltallo !== $v) {
            $this->inltallo = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTALLO] = true;
        }

        return $this;
    } // setInltallo()

    /**
     * Set the value of [inltfaballo] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltfaballo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltfaballo !== $v) {
            $this->inltfaballo = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTFABALLO] = true;
        }

        return $this;
    } // setInltfaballo()

    /**
     * Set the value of [inltintran] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltintran($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltintran !== $v) {
            $this->inltintran = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTINTRAN] = true;
        }

        return $this;
    } // setInltintran()

    /**
     * Set the value of [inltinship] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltinship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltinship !== $v) {
            $this->inltinship = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTINSHIP] = true;
        }

        return $this;
    } // setInltinship()

    /**
     * Set the value of [inltlotref] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlotref !== $v) {
            $this->inltlotref = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTLOTREF] = true;
        }

        return $this;
    } // setInltlotref()

    /**
     * Set the value of [inltbatch] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltbatch !== $v) {
            $this->inltbatch = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTBATCH] = true;
        }

        return $this;
    } // setInltbatch()

    /**
     * Set the value of [inltlandcost] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltlandcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlandcost !== $v) {
            $this->inltlandcost = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTLANDCOST] = true;
        }

        return $this;
    } // setInltlandcost()

    /**
     * Set the value of [inltmpfunitcost] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltmpfunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltmpfunitcost !== $v) {
            $this->inltmpfunitcost = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTMPFUNITCOST] = true;
        }

        return $this;
    } // setInltmpfunitcost()

    /**
     * Set the value of [inlthmfunitcost] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInlthmfunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inlthmfunitcost !== $v) {
            $this->inlthmfunitcost = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTHMFUNITCOST] = true;
        }

        return $this;
    } // setInlthmfunitcost()

    /**
     * Set the value of [inltdsetunitcost] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltdsetunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltdsetunitcost !== $v) {
            $this->inltdsetunitcost = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTDSETUNITCOST] = true;
        }

        return $this;
    } // setInltdsetunitcost()

    /**
     * Set the value of [inltnumericfiller] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltnumericfiller($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltnumericfiller !== $v) {
            $this->inltnumericfiller = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTNUMERICFILLER] = true;
        }

        return $this;
    } // setInltnumericfiller()

    /**
     * Set the value of [inlttariffcost] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInlttariffcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inlttariffcost !== $v) {
            $this->inlttariffcost = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTTARIFFCOST] = true;
        }

        return $this;
    } // setInlttariffcost()

    /**
     * Set the value of [inltshopcost] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltshopcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltshopcost !== $v) {
            $this->inltshopcost = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTSHOPCOST] = true;
        }

        return $this;
    } // setInltshopcost()

    /**
     * Set the value of [inltisscodfsqty] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltisscodfsqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltisscodfsqty !== $v) {
            $this->inltisscodfsqty = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTISSCODFSQTY] = true;
        }

        return $this;
    } // setInltisscodfsqty()

    /**
     * Set the value of [inltheadmark] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltheadmark($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltheadmark !== $v) {
            $this->inltheadmark = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTHEADMARK] = true;
        }

        return $this;
    } // setInltheadmark()

    /**
     * Set the value of [inltctry] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltctry !== $v) {
            $this->inltctry = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTCTRY] = true;
        }

        return $this;
    } // setInltctry()

    /**
     * Set the value of [inltrvalorigcost] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltrvalorigcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltrvalorigcost !== $v) {
            $this->inltrvalorigcost = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTRVALORIGCOST] = true;
        }

        return $this;
    } // setInltrvalorigcost()

    /**
     * Set the value of [inltrvalpct] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltrvalpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltrvalpct !== $v) {
            $this->inltrvalpct = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTRVALPCT] = true;
        }

        return $this;
    } // setInltrvalpct()

    /**
     * Set the value of [inltunitwght] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltunitwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltunitwght !== $v) {
            $this->inltunitwght = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTUNITWGHT] = true;
        }

        return $this;
    } // setInltunitwght()

    /**
     * Set the value of [inltdestwhse] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltdestwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltdestwhse !== $v) {
            $this->inltdestwhse = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTDESTWHSE] = true;
        }

        return $this;
    } // setInltdestwhse()

    /**
     * Set the value of [inltcntrqty] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltcntrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltcntrqty !== $v) {
            $this->inltcntrqty = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTCNTRQTY] = true;
        }

        return $this;
    } // setInltcntrqty()

    /**
     * Set the value of [inltqtyperroll] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltqtyperroll($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltqtyperroll !== $v) {
            $this->inltqtyperroll = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTQTYPERROLL] = true;
        }

        return $this;
    } // setInltqtyperroll()

    /**
     * Set the value of [inlttarewght] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInlttarewght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inlttarewght !== $v) {
            $this->inlttarewght = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTTAREWGHT] = true;
        }

        return $this;
    } // setInlttarewght()

    /**
     * Set the value of [inltqcreasoncd] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltqcreasoncd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltqcreasoncd !== $v) {
            $this->inltqcreasoncd = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTQCREASONCD] = true;
        }

        return $this;
    } // setInltqcreasoncd()

    /**
     * Set the value of [inltcert] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltcert($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltcert !== $v) {
            $this->inltcert = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTCERT] = true;
        }

        return $this;
    } // setInltcert()

    /**
     * Set the value of [inltcuredate] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltcuredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltcuredate !== $v) {
            $this->inltcuredate = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTCUREDATE] = true;
        }

        return $this;
    } // setInltcuredate()

    /**
     * Set the value of [inltexpiredatecd] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltexpiredatecd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltexpiredatecd !== $v) {
            $this->inltexpiredatecd = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTEXPIREDATECD] = true;
        }

        return $this;
    } // setInltexpiredatecd()

    /**
     * Set the value of [inltexpiredate] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltexpiredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltexpiredate !== $v) {
            $this->inltexpiredate = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTEXPIREDATE] = true;
        }

        return $this;
    } // setInltexpiredate()

    /**
     * Set the value of [inltorigbin] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltorigbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltorigbin !== $v) {
            $this->inltorigbin = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTORIGBIN] = true;
        }

        return $this;
    } // setInltorigbin()

    /**
     * Set the value of [inltshopitem] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setInltshopitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltshopitem !== $v) {
            $this->inltshopitem = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_INLTSHOPITEM] = true;
        }

        return $this;
    } // setInltshopitem()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseLot The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvWhseLotTableMap::COL_DUMMY] = true;
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
            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->inltlotser !== '') {
                return false;
            }

            if ($this->inltbin !== '') {
                return false;
            }

            if ($this->inltdate !== '') {
                return false;
            }

            if ($this->inltdatewrit !== '') {
                return false;
            }

            if ($this->inltcost !== '0.0000000') {
                return false;
            }

            if ($this->inltonhand !== '0.0000000') {
                return false;
            }

            if ($this->inltresv !== '0.0000000') {
                return false;
            }

            if ($this->inltship !== '0.0000000') {
                return false;
            }

            if ($this->inltallo !== '0.0000000') {
                return false;
            }

            if ($this->inltfaballo !== '0.0000000') {
                return false;
            }

            if ($this->inltintran !== '0.0000000') {
                return false;
            }

            if ($this->inltinship !== '0.0000000') {
                return false;
            }

            if ($this->inltlotref !== '') {
                return false;
            }

            if ($this->inltbatch !== '') {
                return false;
            }

            if ($this->inltlandcost !== '0.0000000') {
                return false;
            }

            if ($this->inltmpfunitcost !== '0.0000000') {
                return false;
            }

            if ($this->inlthmfunitcost !== '0.0000000') {
                return false;
            }

            if ($this->inltdsetunitcost !== '0.0000000') {
                return false;
            }

            if ($this->inltnumericfiller !== '0.0000000') {
                return false;
            }

            if ($this->inlttariffcost !== '0.0000000') {
                return false;
            }

            if ($this->inltshopcost !== '0.0000000') {
                return false;
            }

            if ($this->inltisscodfsqty !== '0.0000000') {
                return false;
            }

            if ($this->inltheadmark !== '') {
                return false;
            }

            if ($this->inltctry !== '') {
                return false;
            }

            if ($this->inltrvalorigcost !== '0.0000000') {
                return false;
            }

            if ($this->inltrvalpct !== '0.00') {
                return false;
            }

            if ($this->inltunitwght !== '0.0000000') {
                return false;
            }

            if ($this->inltdestwhse !== '') {
                return false;
            }

            if ($this->inltcntrqty !== '0') {
                return false;
            }

            if ($this->inltqtyperroll !== '0.000') {
                return false;
            }

            if ($this->inlttarewght !== '0.000') {
                return false;
            }

            if ($this->inltqcreasoncd !== '') {
                return false;
            }

            if ($this->inltcert !== '') {
                return false;
            }

            if ($this->inltcuredate !== '') {
                return false;
            }

            if ($this->inltexpiredatecd !== '') {
                return false;
            }

            if ($this->inltexpiredate !== '') {
                return false;
            }

            if ($this->inltorigbin !== '') {
                return false;
            }

            if ($this->inltshopitem !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvWhseLotTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvWhseLotTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvWhseLotTableMap::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvWhseLotTableMap::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvWhseLotTableMap::translateFieldName('Inltdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvWhseLotTableMap::translateFieldName('Inltdatewrit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltdatewrit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvWhseLotTableMap::translateFieldName('Inltcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvWhseLotTableMap::translateFieldName('Inltonhand', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltonhand = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvWhseLotTableMap::translateFieldName('Inltresv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltresv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvWhseLotTableMap::translateFieldName('Inltship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvWhseLotTableMap::translateFieldName('Inltallo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltallo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvWhseLotTableMap::translateFieldName('Inltfaballo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltfaballo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvWhseLotTableMap::translateFieldName('Inltintran', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltintran = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvWhseLotTableMap::translateFieldName('Inltinship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltinship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvWhseLotTableMap::translateFieldName('Inltlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvWhseLotTableMap::translateFieldName('Inltbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvWhseLotTableMap::translateFieldName('Inltlandcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlandcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvWhseLotTableMap::translateFieldName('Inltmpfunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltmpfunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvWhseLotTableMap::translateFieldName('Inlthmfunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inlthmfunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvWhseLotTableMap::translateFieldName('Inltdsetunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltdsetunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvWhseLotTableMap::translateFieldName('Inltnumericfiller', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltnumericfiller = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvWhseLotTableMap::translateFieldName('Inlttariffcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inlttariffcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvWhseLotTableMap::translateFieldName('Inltshopcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltshopcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvWhseLotTableMap::translateFieldName('Inltisscodfsqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltisscodfsqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvWhseLotTableMap::translateFieldName('Inltheadmark', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltheadmark = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : InvWhseLotTableMap::translateFieldName('Inltctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : InvWhseLotTableMap::translateFieldName('Inltrvalorigcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltrvalorigcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : InvWhseLotTableMap::translateFieldName('Inltrvalpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltrvalpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : InvWhseLotTableMap::translateFieldName('Inltunitwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltunitwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : InvWhseLotTableMap::translateFieldName('Inltdestwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltdestwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : InvWhseLotTableMap::translateFieldName('Inltcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltcntrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : InvWhseLotTableMap::translateFieldName('Inltqtyperroll', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltqtyperroll = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : InvWhseLotTableMap::translateFieldName('Inlttarewght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inlttarewght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : InvWhseLotTableMap::translateFieldName('Inltqcreasoncd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltqcreasoncd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : InvWhseLotTableMap::translateFieldName('Inltcert', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltcert = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : InvWhseLotTableMap::translateFieldName('Inltcuredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltcuredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : InvWhseLotTableMap::translateFieldName('Inltexpiredatecd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltexpiredatecd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : InvWhseLotTableMap::translateFieldName('Inltexpiredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltexpiredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : InvWhseLotTableMap::translateFieldName('Inltorigbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltorigbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : InvWhseLotTableMap::translateFieldName('Inltshopitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltshopitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : InvWhseLotTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : InvWhseLotTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : InvWhseLotTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 43; // 43 = InvWhseLotTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvWhseLot'), 0, $e);
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
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aInvLotMaster !== null && $this->inititemnbr !== $this->aInvLotMaster->getInititemnbr()) {
            $this->aInvLotMaster = null;
        }
        if ($this->aWarehouse !== null && $this->intbwhse !== $this->aWarehouse->getIntbwhse()) {
            $this->aWarehouse = null;
        }
        if ($this->aInvLotMaster !== null && $this->inltlotser !== $this->aInvLotMaster->getLotmlotnbr()) {
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
            $con = Propel::getServiceContainer()->getReadConnection(InvWhseLotTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvWhseLotQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
            $this->aWarehouse = null;
            $this->aInvLotMaster = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvWhseLot::setDeleted()
     * @see InvWhseLot::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseLotTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvWhseLotQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseLotTableMap::DATABASE_NAME);
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
                InvWhseLotTableMap::addInstanceToPool($this);
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

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aWarehouse !== null) {
                if ($this->aWarehouse->isModified() || $this->aWarehouse->isNew()) {
                    $affectedRows += $this->aWarehouse->save($con);
                }
                $this->setWarehouse($this->aWarehouse);
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
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'InltLotSer';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InltBin';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InltDate';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTDATEWRIT)) {
            $modifiedColumns[':p' . $index++]  = 'InltDateWrit';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltCost';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTONHAND)) {
            $modifiedColumns[':p' . $index++]  = 'InltOnHand';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTRESV)) {
            $modifiedColumns[':p' . $index++]  = 'InltResv';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'InltShip';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTALLO)) {
            $modifiedColumns[':p' . $index++]  = 'InltAllo';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTFABALLO)) {
            $modifiedColumns[':p' . $index++]  = 'InltFabAllo';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTINTRAN)) {
            $modifiedColumns[':p' . $index++]  = 'InltInTran';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTINSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'InltInShip';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'InltLotRef';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'InltBatch';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTLANDCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltLandCost';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTMPFUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltMpfUnitCost';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTHMFUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltHmfUnitCost';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTDSETUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltDsetUnitCost';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTNUMERICFILLER)) {
            $modifiedColumns[':p' . $index++]  = 'InltNumericFiller';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTTARIFFCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltTariffCost';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTSHOPCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltShopCost';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTISSCODFSQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InltIsscoDfsQty';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTHEADMARK)) {
            $modifiedColumns[':p' . $index++]  = 'InltHeadMark';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'InltCtry';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTRVALORIGCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltRvalOrigCost';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTRVALPCT)) {
            $modifiedColumns[':p' . $index++]  = 'InltRvalPct';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTUNITWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'InltUnitWght';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTDESTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'InltDestWhse';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InltCntrQty';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTQTYPERROLL)) {
            $modifiedColumns[':p' . $index++]  = 'InltQtyPerRoll';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTTAREWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'InltTareWght';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTQCREASONCD)) {
            $modifiedColumns[':p' . $index++]  = 'InltQcReasonCd';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCERT)) {
            $modifiedColumns[':p' . $index++]  = 'InltCert';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCUREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InltCureDate';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTEXPIREDATECD)) {
            $modifiedColumns[':p' . $index++]  = 'InltExpireDateCd';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTEXPIREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InltExpireDate';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTORIGBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InltOrigBin';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTSHOPITEM)) {
            $modifiedColumns[':p' . $index++]  = 'InltShopItem';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_inv_lot (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'InltLotSer':
                        $stmt->bindValue($identifier, $this->inltlotser, PDO::PARAM_STR);
                        break;
                    case 'InltBin':
                        $stmt->bindValue($identifier, $this->inltbin, PDO::PARAM_STR);
                        break;
                    case 'InltDate':
                        $stmt->bindValue($identifier, $this->inltdate, PDO::PARAM_STR);
                        break;
                    case 'InltDateWrit':
                        $stmt->bindValue($identifier, $this->inltdatewrit, PDO::PARAM_STR);
                        break;
                    case 'InltCost':
                        $stmt->bindValue($identifier, $this->inltcost, PDO::PARAM_STR);
                        break;
                    case 'InltOnHand':
                        $stmt->bindValue($identifier, $this->inltonhand, PDO::PARAM_STR);
                        break;
                    case 'InltResv':
                        $stmt->bindValue($identifier, $this->inltresv, PDO::PARAM_STR);
                        break;
                    case 'InltShip':
                        $stmt->bindValue($identifier, $this->inltship, PDO::PARAM_STR);
                        break;
                    case 'InltAllo':
                        $stmt->bindValue($identifier, $this->inltallo, PDO::PARAM_STR);
                        break;
                    case 'InltFabAllo':
                        $stmt->bindValue($identifier, $this->inltfaballo, PDO::PARAM_STR);
                        break;
                    case 'InltInTran':
                        $stmt->bindValue($identifier, $this->inltintran, PDO::PARAM_STR);
                        break;
                    case 'InltInShip':
                        $stmt->bindValue($identifier, $this->inltinship, PDO::PARAM_STR);
                        break;
                    case 'InltLotRef':
                        $stmt->bindValue($identifier, $this->inltlotref, PDO::PARAM_STR);
                        break;
                    case 'InltBatch':
                        $stmt->bindValue($identifier, $this->inltbatch, PDO::PARAM_STR);
                        break;
                    case 'InltLandCost':
                        $stmt->bindValue($identifier, $this->inltlandcost, PDO::PARAM_STR);
                        break;
                    case 'InltMpfUnitCost':
                        $stmt->bindValue($identifier, $this->inltmpfunitcost, PDO::PARAM_STR);
                        break;
                    case 'InltHmfUnitCost':
                        $stmt->bindValue($identifier, $this->inlthmfunitcost, PDO::PARAM_STR);
                        break;
                    case 'InltDsetUnitCost':
                        $stmt->bindValue($identifier, $this->inltdsetunitcost, PDO::PARAM_STR);
                        break;
                    case 'InltNumericFiller':
                        $stmt->bindValue($identifier, $this->inltnumericfiller, PDO::PARAM_STR);
                        break;
                    case 'InltTariffCost':
                        $stmt->bindValue($identifier, $this->inlttariffcost, PDO::PARAM_STR);
                        break;
                    case 'InltShopCost':
                        $stmt->bindValue($identifier, $this->inltshopcost, PDO::PARAM_STR);
                        break;
                    case 'InltIsscoDfsQty':
                        $stmt->bindValue($identifier, $this->inltisscodfsqty, PDO::PARAM_STR);
                        break;
                    case 'InltHeadMark':
                        $stmt->bindValue($identifier, $this->inltheadmark, PDO::PARAM_STR);
                        break;
                    case 'InltCtry':
                        $stmt->bindValue($identifier, $this->inltctry, PDO::PARAM_STR);
                        break;
                    case 'InltRvalOrigCost':
                        $stmt->bindValue($identifier, $this->inltrvalorigcost, PDO::PARAM_STR);
                        break;
                    case 'InltRvalPct':
                        $stmt->bindValue($identifier, $this->inltrvalpct, PDO::PARAM_STR);
                        break;
                    case 'InltUnitWght':
                        $stmt->bindValue($identifier, $this->inltunitwght, PDO::PARAM_STR);
                        break;
                    case 'InltDestWhse':
                        $stmt->bindValue($identifier, $this->inltdestwhse, PDO::PARAM_STR);
                        break;
                    case 'InltCntrQty':
                        $stmt->bindValue($identifier, $this->inltcntrqty, PDO::PARAM_STR);
                        break;
                    case 'InltQtyPerRoll':
                        $stmt->bindValue($identifier, $this->inltqtyperroll, PDO::PARAM_STR);
                        break;
                    case 'InltTareWght':
                        $stmt->bindValue($identifier, $this->inlttarewght, PDO::PARAM_STR);
                        break;
                    case 'InltQcReasonCd':
                        $stmt->bindValue($identifier, $this->inltqcreasoncd, PDO::PARAM_STR);
                        break;
                    case 'InltCert':
                        $stmt->bindValue($identifier, $this->inltcert, PDO::PARAM_STR);
                        break;
                    case 'InltCureDate':
                        $stmt->bindValue($identifier, $this->inltcuredate, PDO::PARAM_STR);
                        break;
                    case 'InltExpireDateCd':
                        $stmt->bindValue($identifier, $this->inltexpiredatecd, PDO::PARAM_STR);
                        break;
                    case 'InltExpireDate':
                        $stmt->bindValue($identifier, $this->inltexpiredate, PDO::PARAM_STR);
                        break;
                    case 'InltOrigBin':
                        $stmt->bindValue($identifier, $this->inltorigbin, PDO::PARAM_STR);
                        break;
                    case 'InltShopItem':
                        $stmt->bindValue($identifier, $this->inltshopitem, PDO::PARAM_STR);
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
        $pos = InvWhseLotTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInititemnbr();
                break;
            case 1:
                return $this->getIntbwhse();
                break;
            case 2:
                return $this->getInltlotser();
                break;
            case 3:
                return $this->getInltbin();
                break;
            case 4:
                return $this->getInltdate();
                break;
            case 5:
                return $this->getInltdatewrit();
                break;
            case 6:
                return $this->getInltcost();
                break;
            case 7:
                return $this->getInltonhand();
                break;
            case 8:
                return $this->getInltresv();
                break;
            case 9:
                return $this->getInltship();
                break;
            case 10:
                return $this->getInltallo();
                break;
            case 11:
                return $this->getInltfaballo();
                break;
            case 12:
                return $this->getInltintran();
                break;
            case 13:
                return $this->getInltinship();
                break;
            case 14:
                return $this->getInltlotref();
                break;
            case 15:
                return $this->getInltbatch();
                break;
            case 16:
                return $this->getInltlandcost();
                break;
            case 17:
                return $this->getInltmpfunitcost();
                break;
            case 18:
                return $this->getInlthmfunitcost();
                break;
            case 19:
                return $this->getInltdsetunitcost();
                break;
            case 20:
                return $this->getInltnumericfiller();
                break;
            case 21:
                return $this->getInlttariffcost();
                break;
            case 22:
                return $this->getInltshopcost();
                break;
            case 23:
                return $this->getInltisscodfsqty();
                break;
            case 24:
                return $this->getInltheadmark();
                break;
            case 25:
                return $this->getInltctry();
                break;
            case 26:
                return $this->getInltrvalorigcost();
                break;
            case 27:
                return $this->getInltrvalpct();
                break;
            case 28:
                return $this->getInltunitwght();
                break;
            case 29:
                return $this->getInltdestwhse();
                break;
            case 30:
                return $this->getInltcntrqty();
                break;
            case 31:
                return $this->getInltqtyperroll();
                break;
            case 32:
                return $this->getInlttarewght();
                break;
            case 33:
                return $this->getInltqcreasoncd();
                break;
            case 34:
                return $this->getInltcert();
                break;
            case 35:
                return $this->getInltcuredate();
                break;
            case 36:
                return $this->getInltexpiredatecd();
                break;
            case 37:
                return $this->getInltexpiredate();
                break;
            case 38:
                return $this->getInltorigbin();
                break;
            case 39:
                return $this->getInltshopitem();
                break;
            case 40:
                return $this->getDateupdtd();
                break;
            case 41:
                return $this->getTimeupdtd();
                break;
            case 42:
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

        if (isset($alreadyDumpedObjects['InvWhseLot'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvWhseLot'][$this->hashCode()] = true;
        $keys = InvWhseLotTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getIntbwhse(),
            $keys[2] => $this->getInltlotser(),
            $keys[3] => $this->getInltbin(),
            $keys[4] => $this->getInltdate(),
            $keys[5] => $this->getInltdatewrit(),
            $keys[6] => $this->getInltcost(),
            $keys[7] => $this->getInltonhand(),
            $keys[8] => $this->getInltresv(),
            $keys[9] => $this->getInltship(),
            $keys[10] => $this->getInltallo(),
            $keys[11] => $this->getInltfaballo(),
            $keys[12] => $this->getInltintran(),
            $keys[13] => $this->getInltinship(),
            $keys[14] => $this->getInltlotref(),
            $keys[15] => $this->getInltbatch(),
            $keys[16] => $this->getInltlandcost(),
            $keys[17] => $this->getInltmpfunitcost(),
            $keys[18] => $this->getInlthmfunitcost(),
            $keys[19] => $this->getInltdsetunitcost(),
            $keys[20] => $this->getInltnumericfiller(),
            $keys[21] => $this->getInlttariffcost(),
            $keys[22] => $this->getInltshopcost(),
            $keys[23] => $this->getInltisscodfsqty(),
            $keys[24] => $this->getInltheadmark(),
            $keys[25] => $this->getInltctry(),
            $keys[26] => $this->getInltrvalorigcost(),
            $keys[27] => $this->getInltrvalpct(),
            $keys[28] => $this->getInltunitwght(),
            $keys[29] => $this->getInltdestwhse(),
            $keys[30] => $this->getInltcntrqty(),
            $keys[31] => $this->getInltqtyperroll(),
            $keys[32] => $this->getInlttarewght(),
            $keys[33] => $this->getInltqcreasoncd(),
            $keys[34] => $this->getInltcert(),
            $keys[35] => $this->getInltcuredate(),
            $keys[36] => $this->getInltexpiredatecd(),
            $keys[37] => $this->getInltexpiredate(),
            $keys[38] => $this->getInltorigbin(),
            $keys[39] => $this->getInltshopitem(),
            $keys[40] => $this->getDateupdtd(),
            $keys[41] => $this->getTimeupdtd(),
            $keys[42] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
            if (null !== $this->aWarehouse) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'warehouse';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_whse_code';
                        break;
                    default:
                        $key = 'Warehouse';
                }

                $result[$key] = $this->aWarehouse->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\InvWhseLot
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvWhseLotTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvWhseLot
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setIntbwhse($value);
                break;
            case 2:
                $this->setInltlotser($value);
                break;
            case 3:
                $this->setInltbin($value);
                break;
            case 4:
                $this->setInltdate($value);
                break;
            case 5:
                $this->setInltdatewrit($value);
                break;
            case 6:
                $this->setInltcost($value);
                break;
            case 7:
                $this->setInltonhand($value);
                break;
            case 8:
                $this->setInltresv($value);
                break;
            case 9:
                $this->setInltship($value);
                break;
            case 10:
                $this->setInltallo($value);
                break;
            case 11:
                $this->setInltfaballo($value);
                break;
            case 12:
                $this->setInltintran($value);
                break;
            case 13:
                $this->setInltinship($value);
                break;
            case 14:
                $this->setInltlotref($value);
                break;
            case 15:
                $this->setInltbatch($value);
                break;
            case 16:
                $this->setInltlandcost($value);
                break;
            case 17:
                $this->setInltmpfunitcost($value);
                break;
            case 18:
                $this->setInlthmfunitcost($value);
                break;
            case 19:
                $this->setInltdsetunitcost($value);
                break;
            case 20:
                $this->setInltnumericfiller($value);
                break;
            case 21:
                $this->setInlttariffcost($value);
                break;
            case 22:
                $this->setInltshopcost($value);
                break;
            case 23:
                $this->setInltisscodfsqty($value);
                break;
            case 24:
                $this->setInltheadmark($value);
                break;
            case 25:
                $this->setInltctry($value);
                break;
            case 26:
                $this->setInltrvalorigcost($value);
                break;
            case 27:
                $this->setInltrvalpct($value);
                break;
            case 28:
                $this->setInltunitwght($value);
                break;
            case 29:
                $this->setInltdestwhse($value);
                break;
            case 30:
                $this->setInltcntrqty($value);
                break;
            case 31:
                $this->setInltqtyperroll($value);
                break;
            case 32:
                $this->setInlttarewght($value);
                break;
            case 33:
                $this->setInltqcreasoncd($value);
                break;
            case 34:
                $this->setInltcert($value);
                break;
            case 35:
                $this->setInltcuredate($value);
                break;
            case 36:
                $this->setInltexpiredatecd($value);
                break;
            case 37:
                $this->setInltexpiredate($value);
                break;
            case 38:
                $this->setInltorigbin($value);
                break;
            case 39:
                $this->setInltshopitem($value);
                break;
            case 40:
                $this->setDateupdtd($value);
                break;
            case 41:
                $this->setTimeupdtd($value);
                break;
            case 42:
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
        $keys = InvWhseLotTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbwhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInltlotser($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInltbin($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInltdate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInltdatewrit($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInltcost($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInltonhand($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setInltresv($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setInltship($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInltallo($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInltfaballo($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInltintran($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInltinship($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInltlotref($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInltbatch($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInltlandcost($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInltmpfunitcost($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInlthmfunitcost($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInltdsetunitcost($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setInltnumericfiller($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setInlttariffcost($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setInltshopcost($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setInltisscodfsqty($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setInltheadmark($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setInltctry($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setInltrvalorigcost($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setInltrvalpct($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setInltunitwght($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setInltdestwhse($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setInltcntrqty($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setInltqtyperroll($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setInlttarewght($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setInltqcreasoncd($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setInltcert($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setInltcuredate($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setInltexpiredatecd($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setInltexpiredate($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setInltorigbin($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setInltshopitem($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setDateupdtd($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setTimeupdtd($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setDummy($arr[$keys[42]]);
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
     * @return $this|\InvWhseLot The current object, for fluid interface
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
        $criteria = new Criteria(InvWhseLotTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvWhseLotTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvWhseLotTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INTBWHSE)) {
            $criteria->add(InvWhseLotTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTLOTSER)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTLOTSER, $this->inltlotser);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTBIN)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTBIN, $this->inltbin);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTDATE)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTDATE, $this->inltdate);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTDATEWRIT)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTDATEWRIT, $this->inltdatewrit);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCOST)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTCOST, $this->inltcost);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTONHAND)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTONHAND, $this->inltonhand);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTRESV)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTRESV, $this->inltresv);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTSHIP)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTSHIP, $this->inltship);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTALLO)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTALLO, $this->inltallo);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTFABALLO)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTFABALLO, $this->inltfaballo);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTINTRAN)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTINTRAN, $this->inltintran);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTINSHIP)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTINSHIP, $this->inltinship);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTLOTREF)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTLOTREF, $this->inltlotref);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTBATCH)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTBATCH, $this->inltbatch);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTLANDCOST)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTLANDCOST, $this->inltlandcost);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTMPFUNITCOST)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTMPFUNITCOST, $this->inltmpfunitcost);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTHMFUNITCOST)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTHMFUNITCOST, $this->inlthmfunitcost);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTDSETUNITCOST)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTDSETUNITCOST, $this->inltdsetunitcost);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTNUMERICFILLER)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTNUMERICFILLER, $this->inltnumericfiller);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTTARIFFCOST)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTTARIFFCOST, $this->inlttariffcost);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTSHOPCOST)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTSHOPCOST, $this->inltshopcost);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTISSCODFSQTY)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTISSCODFSQTY, $this->inltisscodfsqty);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTHEADMARK)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTHEADMARK, $this->inltheadmark);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCTRY)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTCTRY, $this->inltctry);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTRVALORIGCOST)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTRVALORIGCOST, $this->inltrvalorigcost);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTRVALPCT)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTRVALPCT, $this->inltrvalpct);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTUNITWGHT)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTUNITWGHT, $this->inltunitwght);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTDESTWHSE)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTDESTWHSE, $this->inltdestwhse);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCNTRQTY)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTCNTRQTY, $this->inltcntrqty);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTQTYPERROLL)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTQTYPERROLL, $this->inltqtyperroll);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTTAREWGHT)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTTAREWGHT, $this->inlttarewght);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTQCREASONCD)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTQCREASONCD, $this->inltqcreasoncd);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCERT)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTCERT, $this->inltcert);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTCUREDATE)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTCUREDATE, $this->inltcuredate);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTEXPIREDATECD)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTEXPIREDATECD, $this->inltexpiredatecd);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTEXPIREDATE)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTEXPIREDATE, $this->inltexpiredate);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTORIGBIN)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTORIGBIN, $this->inltorigbin);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_INLTSHOPITEM)) {
            $criteria->add(InvWhseLotTableMap::COL_INLTSHOPITEM, $this->inltshopitem);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvWhseLotTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvWhseLotTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvWhseLotTableMap::COL_DUMMY)) {
            $criteria->add(InvWhseLotTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvWhseLotQuery::create();
        $criteria->add(InvWhseLotTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvWhseLotTableMap::COL_INTBWHSE, $this->intbwhse);
        $criteria->add(InvWhseLotTableMap::COL_INLTLOTSER, $this->inltlotser);
        $criteria->add(InvWhseLotTableMap::COL_INLTBIN, $this->inltbin);

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
        $validPk = null !== $this->getInititemnbr() &&
            null !== $this->getIntbwhse() &&
            null !== $this->getInltlotser() &&
            null !== $this->getInltbin();

        $validPrimaryKeyFKs = 4;
        $primaryKeyFKs = [];

        //relation item to table inv_item_mast
        if ($this->aItemMasterItem && $hash = spl_object_hash($this->aItemMasterItem)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation warehouse to table inv_whse_code
        if ($this->aWarehouse && $hash = spl_object_hash($this->aWarehouse)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation lotm to table inv_lot_mast
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
        $pks[0] = $this->getInititemnbr();
        $pks[1] = $this->getIntbwhse();
        $pks[2] = $this->getInltlotser();
        $pks[3] = $this->getInltbin();

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
        $this->setInititemnbr($keys[0]);
        $this->setIntbwhse($keys[1]);
        $this->setInltlotser($keys[2]);
        $this->setInltbin($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInititemnbr()) && (null === $this->getIntbwhse()) && (null === $this->getInltlotser()) && (null === $this->getInltbin());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvWhseLot (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setInltlotser($this->getInltlotser());
        $copyObj->setInltbin($this->getInltbin());
        $copyObj->setInltdate($this->getInltdate());
        $copyObj->setInltdatewrit($this->getInltdatewrit());
        $copyObj->setInltcost($this->getInltcost());
        $copyObj->setInltonhand($this->getInltonhand());
        $copyObj->setInltresv($this->getInltresv());
        $copyObj->setInltship($this->getInltship());
        $copyObj->setInltallo($this->getInltallo());
        $copyObj->setInltfaballo($this->getInltfaballo());
        $copyObj->setInltintran($this->getInltintran());
        $copyObj->setInltinship($this->getInltinship());
        $copyObj->setInltlotref($this->getInltlotref());
        $copyObj->setInltbatch($this->getInltbatch());
        $copyObj->setInltlandcost($this->getInltlandcost());
        $copyObj->setInltmpfunitcost($this->getInltmpfunitcost());
        $copyObj->setInlthmfunitcost($this->getInlthmfunitcost());
        $copyObj->setInltdsetunitcost($this->getInltdsetunitcost());
        $copyObj->setInltnumericfiller($this->getInltnumericfiller());
        $copyObj->setInlttariffcost($this->getInlttariffcost());
        $copyObj->setInltshopcost($this->getInltshopcost());
        $copyObj->setInltisscodfsqty($this->getInltisscodfsqty());
        $copyObj->setInltheadmark($this->getInltheadmark());
        $copyObj->setInltctry($this->getInltctry());
        $copyObj->setInltrvalorigcost($this->getInltrvalorigcost());
        $copyObj->setInltrvalpct($this->getInltrvalpct());
        $copyObj->setInltunitwght($this->getInltunitwght());
        $copyObj->setInltdestwhse($this->getInltdestwhse());
        $copyObj->setInltcntrqty($this->getInltcntrqty());
        $copyObj->setInltqtyperroll($this->getInltqtyperroll());
        $copyObj->setInlttarewght($this->getInlttarewght());
        $copyObj->setInltqcreasoncd($this->getInltqcreasoncd());
        $copyObj->setInltcert($this->getInltcert());
        $copyObj->setInltcuredate($this->getInltcuredate());
        $copyObj->setInltexpiredatecd($this->getInltexpiredatecd());
        $copyObj->setInltexpiredate($this->getInltexpiredate());
        $copyObj->setInltorigbin($this->getInltorigbin());
        $copyObj->setInltshopitem($this->getInltshopitem());
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
     * @return \InvWhseLot Clone of current object.
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
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\InvWhseLot The current object (for fluent API support)
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
            $v->addInvWhseLot($this);
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
                $this->aItemMasterItem->addInvWhseLots($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildWarehouse object.
     *
     * @param  ChildWarehouse $v
     * @return $this|\InvWhseLot The current object (for fluent API support)
     * @throws PropelException
     */
    public function setWarehouse(ChildWarehouse $v = null)
    {
        if ($v === null) {
            $this->setIntbwhse('');
        } else {
            $this->setIntbwhse($v->getIntbwhse());
        }

        $this->aWarehouse = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildWarehouse object, it will not be re-added.
        if ($v !== null) {
            $v->addInvWhseLot($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildWarehouse object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildWarehouse The associated ChildWarehouse object.
     * @throws PropelException
     */
    public function getWarehouse(ConnectionInterface $con = null)
    {
        if ($this->aWarehouse === null && (($this->intbwhse !== "" && $this->intbwhse !== null))) {
            $this->aWarehouse = ChildWarehouseQuery::create()->findPk($this->intbwhse, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aWarehouse->addInvWhseLots($this);
             */
        }

        return $this->aWarehouse;
    }

    /**
     * Declares an association between this object and a ChildInvLotMaster object.
     *
     * @param  ChildInvLotMaster $v
     * @return $this|\InvWhseLot The current object (for fluent API support)
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
            $this->setInltlotser('');
        } else {
            $this->setInltlotser($v->getLotmlotnbr());
        }

        $this->aInvLotMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvLotMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvWhseLot($this);
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
        if ($this->aInvLotMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->inltlotser !== "" && $this->inltlotser !== null))) {
            $this->aInvLotMaster = ChildInvLotMasterQuery::create()->findPk(array($this->inititemnbr, $this->inltlotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvLotMaster->addInvWhseLots($this);
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
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeInvWhseLot($this);
        }
        if (null !== $this->aWarehouse) {
            $this->aWarehouse->removeInvWhseLot($this);
        }
        if (null !== $this->aInvLotMaster) {
            $this->aInvLotMaster->removeInvWhseLot($this);
        }
        $this->inititemnbr = null;
        $this->intbwhse = null;
        $this->inltlotser = null;
        $this->inltbin = null;
        $this->inltdate = null;
        $this->inltdatewrit = null;
        $this->inltcost = null;
        $this->inltonhand = null;
        $this->inltresv = null;
        $this->inltship = null;
        $this->inltallo = null;
        $this->inltfaballo = null;
        $this->inltintran = null;
        $this->inltinship = null;
        $this->inltlotref = null;
        $this->inltbatch = null;
        $this->inltlandcost = null;
        $this->inltmpfunitcost = null;
        $this->inlthmfunitcost = null;
        $this->inltdsetunitcost = null;
        $this->inltnumericfiller = null;
        $this->inlttariffcost = null;
        $this->inltshopcost = null;
        $this->inltisscodfsqty = null;
        $this->inltheadmark = null;
        $this->inltctry = null;
        $this->inltrvalorigcost = null;
        $this->inltrvalpct = null;
        $this->inltunitwght = null;
        $this->inltdestwhse = null;
        $this->inltcntrqty = null;
        $this->inltqtyperroll = null;
        $this->inlttarewght = null;
        $this->inltqcreasoncd = null;
        $this->inltcert = null;
        $this->inltcuredate = null;
        $this->inltexpiredatecd = null;
        $this->inltexpiredate = null;
        $this->inltorigbin = null;
        $this->inltshopitem = null;
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

        $this->aItemMasterItem = null;
        $this->aWarehouse = null;
        $this->aInvLotMaster = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvWhseLotTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // return parent::preSave($con);
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
            // return parent::preInsert($con);
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
            // return parent::preUpdate($con);
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
            // return parent::preDelete($con);
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
