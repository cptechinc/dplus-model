<?php

namespace Base;

use \PoReceivingHead as ChildPoReceivingHead;
use \PoReceivingHeadQuery as ChildPoReceivingHeadQuery;
use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderDetailLotReceiving as ChildPurchaseOrderDetailLotReceiving;
use \PurchaseOrderDetailLotReceivingQuery as ChildPurchaseOrderDetailLotReceivingQuery;
use \PurchaseOrderDetailReceiving as ChildPurchaseOrderDetailReceiving;
use \PurchaseOrderDetailReceivingQuery as ChildPurchaseOrderDetailReceivingQuery;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \Warehouse as ChildWarehouse;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\PoReceivingHeadTableMap;
use Map\PurchaseOrderDetailLotReceivingTableMap;
use Map\PurchaseOrderDetailReceivingTableMap;
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
 * Base class that represents a row from the 'po_tran_head' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class PoReceivingHead implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\PoReceivingHeadTableMap';


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
     * The value for the pothnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pothnbr;

    /**
     * The value for the pothstat field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $pothstat;

    /**
     * The value for the pothrcptdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pothrcptdate;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the pothglpd field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pothglpd;

    /**
     * The value for the pothairship field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $pothairship;

    /**
     * The value for the potherinreview field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $potherinreview;

    /**
     * The value for the pothexchctry field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pothexchctry;

    /**
     * The value for the pothexchrate field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $pothexchrate;

    /**
     * The value for the intbwhseorig field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseorig;

    /**
     * The value for the pothlandcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $pothlandcost;

    /**
     * The value for the pothrcptnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pothrcptnbr;

    /**
     * The value for the pothlandbasedon field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pothlandbasedon;

    /**
     * The value for the pothinvcnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pothinvcnbr;

    /**
     * The value for the pothinvcdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pothinvcdate;

    /**
     * The value for the pothfrtamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $pothfrtamt;

    /**
     * The value for the pothmiscamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $pothmiscamt;

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
     * @var        ChildPurchaseOrder
     */
    protected $aPurchaseOrder;

    /**
     * @var        ChildWarehouse
     */
    protected $aWarehouse;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetailReceiving[] Collection to store aggregation of ChildPurchaseOrderDetailReceiving objects.
     */
    protected $collPurchaseOrderDetailReceivings;
    protected $collPurchaseOrderDetailReceivingsPartial;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] Collection to store aggregation of ChildPurchaseOrderDetailLotReceiving objects.
     */
    protected $collPurchaseOrderDetailLotReceivings;
    protected $collPurchaseOrderDetailLotReceivingsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetailReceiving[]
     */
    protected $purchaseOrderDetailReceivingsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetailLotReceiving[]
     */
    protected $purchaseOrderDetailLotReceivingsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->pothnbr = '';
        $this->pothstat = 'N';
        $this->pothrcptdate = '';
        $this->intbwhse = '';
        $this->pothglpd = 0;
        $this->pothairship = 'N';
        $this->potherinreview = 'N';
        $this->pothexchctry = '';
        $this->pothexchrate = '0.0000000';
        $this->intbwhseorig = '';
        $this->pothlandcost = '0.0000000';
        $this->pothrcptnbr = 0;
        $this->pothlandbasedon = '';
        $this->pothinvcnbr = '';
        $this->pothinvcdate = '';
        $this->pothfrtamt = '0.00';
        $this->pothmiscamt = '0.00';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\PoReceivingHead object.
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
     * Compares this with another <code>PoReceivingHead</code> instance.  If
     * <code>obj</code> is an instance of <code>PoReceivingHead</code>, delegates to
     * <code>equals(PoReceivingHead)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|PoReceivingHead The current object, for fluid interface
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
     * Get the [pothnbr] column value.
     *
     * @return string
     */
    public function getPothnbr()
    {
        return $this->pothnbr;
    }

    /**
     * Get the [pothstat] column value.
     *
     * @return string
     */
    public function getPothstat()
    {
        return $this->pothstat;
    }

    /**
     * Get the [pothrcptdate] column value.
     *
     * @return string
     */
    public function getPothrcptdate()
    {
        return $this->pothrcptdate;
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
     * Get the [pothglpd] column value.
     *
     * @return int
     */
    public function getPothglpd()
    {
        return $this->pothglpd;
    }

    /**
     * Get the [pothairship] column value.
     *
     * @return string
     */
    public function getPothairship()
    {
        return $this->pothairship;
    }

    /**
     * Get the [potherinreview] column value.
     *
     * @return string
     */
    public function getPotherinreview()
    {
        return $this->potherinreview;
    }

    /**
     * Get the [pothexchctry] column value.
     *
     * @return string
     */
    public function getPothexchctry()
    {
        return $this->pothexchctry;
    }

    /**
     * Get the [pothexchrate] column value.
     *
     * @return string
     */
    public function getPothexchrate()
    {
        return $this->pothexchrate;
    }

    /**
     * Get the [intbwhseorig] column value.
     *
     * @return string
     */
    public function getIntbwhseorig()
    {
        return $this->intbwhseorig;
    }

    /**
     * Get the [pothlandcost] column value.
     *
     * @return string
     */
    public function getPothlandcost()
    {
        return $this->pothlandcost;
    }

    /**
     * Get the [pothrcptnbr] column value.
     *
     * @return int
     */
    public function getPothrcptnbr()
    {
        return $this->pothrcptnbr;
    }

    /**
     * Get the [pothlandbasedon] column value.
     *
     * @return string
     */
    public function getPothlandbasedon()
    {
        return $this->pothlandbasedon;
    }

    /**
     * Get the [pothinvcnbr] column value.
     *
     * @return string
     */
    public function getPothinvcnbr()
    {
        return $this->pothinvcnbr;
    }

    /**
     * Get the [pothinvcdate] column value.
     *
     * @return string
     */
    public function getPothinvcdate()
    {
        return $this->pothinvcdate;
    }

    /**
     * Get the [pothfrtamt] column value.
     *
     * @return string
     */
    public function getPothfrtamt()
    {
        return $this->pothfrtamt;
    }

    /**
     * Get the [pothmiscamt] column value.
     *
     * @return string
     */
    public function getPothmiscamt()
    {
        return $this->pothmiscamt;
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
     * Set the value of [pothnbr] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothnbr !== $v) {
            $this->pothnbr = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHNBR] = true;
        }

        if ($this->aPurchaseOrder !== null && $this->aPurchaseOrder->getPohdnbr() !== $v) {
            $this->aPurchaseOrder = null;
        }

        return $this;
    } // setPothnbr()

    /**
     * Set the value of [pothstat] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothstat !== $v) {
            $this->pothstat = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHSTAT] = true;
        }

        return $this;
    } // setPothstat()

    /**
     * Set the value of [pothrcptdate] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothrcptdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothrcptdate !== $v) {
            $this->pothrcptdate = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHRCPTDATE] = true;
        }

        return $this;
    } // setPothrcptdate()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_INTBWHSE] = true;
        }

        if ($this->aWarehouse !== null && $this->aWarehouse->getIntbwhse() !== $v) {
            $this->aWarehouse = null;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [pothglpd] column.
     *
     * @param int $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothglpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pothglpd !== $v) {
            $this->pothglpd = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHGLPD] = true;
        }

        return $this;
    } // setPothglpd()

    /**
     * Set the value of [pothairship] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothairship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothairship !== $v) {
            $this->pothairship = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHAIRSHIP] = true;
        }

        return $this;
    } // setPothairship()

    /**
     * Set the value of [potherinreview] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPotherinreview($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potherinreview !== $v) {
            $this->potherinreview = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHERINREVIEW] = true;
        }

        return $this;
    } // setPotherinreview()

    /**
     * Set the value of [pothexchctry] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothexchctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothexchctry !== $v) {
            $this->pothexchctry = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHEXCHCTRY] = true;
        }

        return $this;
    } // setPothexchctry()

    /**
     * Set the value of [pothexchrate] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothexchrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothexchrate !== $v) {
            $this->pothexchrate = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHEXCHRATE] = true;
        }

        return $this;
    } // setPothexchrate()

    /**
     * Set the value of [intbwhseorig] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setIntbwhseorig($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseorig !== $v) {
            $this->intbwhseorig = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_INTBWHSEORIG] = true;
        }

        return $this;
    } // setIntbwhseorig()

    /**
     * Set the value of [pothlandcost] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothlandcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothlandcost !== $v) {
            $this->pothlandcost = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHLANDCOST] = true;
        }

        return $this;
    } // setPothlandcost()

    /**
     * Set the value of [pothrcptnbr] column.
     *
     * @param int $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothrcptnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pothrcptnbr !== $v) {
            $this->pothrcptnbr = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHRCPTNBR] = true;
        }

        return $this;
    } // setPothrcptnbr()

    /**
     * Set the value of [pothlandbasedon] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothlandbasedon($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothlandbasedon !== $v) {
            $this->pothlandbasedon = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHLANDBASEDON] = true;
        }

        return $this;
    } // setPothlandbasedon()

    /**
     * Set the value of [pothinvcnbr] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothinvcnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothinvcnbr !== $v) {
            $this->pothinvcnbr = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHINVCNBR] = true;
        }

        return $this;
    } // setPothinvcnbr()

    /**
     * Set the value of [pothinvcdate] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothinvcdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothinvcdate !== $v) {
            $this->pothinvcdate = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHINVCDATE] = true;
        }

        return $this;
    } // setPothinvcdate()

    /**
     * Set the value of [pothfrtamt] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothfrtamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothfrtamt !== $v) {
            $this->pothfrtamt = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHFRTAMT] = true;
        }

        return $this;
    } // setPothfrtamt()

    /**
     * Set the value of [pothmiscamt] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setPothmiscamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothmiscamt !== $v) {
            $this->pothmiscamt = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_POTHMISCAMT] = true;
        }

        return $this;
    } // setPothmiscamt()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[PoReceivingHeadTableMap::COL_DUMMY] = true;
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
            if ($this->pothnbr !== '') {
                return false;
            }

            if ($this->pothstat !== 'N') {
                return false;
            }

            if ($this->pothrcptdate !== '') {
                return false;
            }

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->pothglpd !== 0) {
                return false;
            }

            if ($this->pothairship !== 'N') {
                return false;
            }

            if ($this->potherinreview !== 'N') {
                return false;
            }

            if ($this->pothexchctry !== '') {
                return false;
            }

            if ($this->pothexchrate !== '0.0000000') {
                return false;
            }

            if ($this->intbwhseorig !== '') {
                return false;
            }

            if ($this->pothlandcost !== '0.0000000') {
                return false;
            }

            if ($this->pothrcptnbr !== 0) {
                return false;
            }

            if ($this->pothlandbasedon !== '') {
                return false;
            }

            if ($this->pothinvcnbr !== '') {
                return false;
            }

            if ($this->pothinvcdate !== '') {
                return false;
            }

            if ($this->pothfrtamt !== '0.00') {
                return false;
            }

            if ($this->pothmiscamt !== '0.00') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothrcptdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothrcptdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : PoReceivingHeadTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothglpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothglpd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothairship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothairship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : PoReceivingHeadTableMap::translateFieldName('Potherinreview', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potherinreview = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothexchctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothexchctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothexchrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothexchrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : PoReceivingHeadTableMap::translateFieldName('Intbwhseorig', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseorig = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothlandcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothlandcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothrcptnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothrcptnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothlandbasedon', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothlandbasedon = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothinvcnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothinvcnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothinvcdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothinvcdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothfrtamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothfrtamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : PoReceivingHeadTableMap::translateFieldName('Pothmiscamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothmiscamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : PoReceivingHeadTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : PoReceivingHeadTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : PoReceivingHeadTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 20; // 20 = PoReceivingHeadTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\PoReceivingHead'), 0, $e);
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
        if ($this->aPurchaseOrder !== null && $this->pothnbr !== $this->aPurchaseOrder->getPohdnbr()) {
            $this->aPurchaseOrder = null;
        }
        if ($this->aWarehouse !== null && $this->intbwhse !== $this->aWarehouse->getIntbwhse()) {
            $this->aWarehouse = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildPoReceivingHeadQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPurchaseOrder = null;
            $this->aWarehouse = null;
            $this->collPurchaseOrderDetailReceivings = null;

            $this->collPurchaseOrderDetailLotReceivings = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see PoReceivingHead::setDeleted()
     * @see PoReceivingHead::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildPoReceivingHeadQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(PoReceivingHeadTableMap::DATABASE_NAME);
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
                PoReceivingHeadTableMap::addInstanceToPool($this);
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

            if ($this->aPurchaseOrder !== null) {
                if ($this->aPurchaseOrder->isModified() || $this->aPurchaseOrder->isNew()) {
                    $affectedRows += $this->aPurchaseOrder->save($con);
                }
                $this->setPurchaseOrder($this->aPurchaseOrder);
            }

            if ($this->aWarehouse !== null) {
                if ($this->aWarehouse->isModified() || $this->aWarehouse->isNew()) {
                    $affectedRows += $this->aWarehouse->save($con);
                }
                $this->setWarehouse($this->aWarehouse);
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

            if ($this->purchaseOrderDetailReceivingsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailReceivingsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailReceivingQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailReceivingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailReceivingsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetailReceivings !== null) {
                foreach ($this->collPurchaseOrderDetailReceivings as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->purchaseOrderDetailLotReceivingsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailLotReceivingsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailLotReceivingQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailLotReceivingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetailLotReceivings !== null) {
                foreach ($this->collPurchaseOrderDetailLotReceivings as $referrerFK) {
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
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PothNbr';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'PothStat';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHRCPTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PothRcptDate';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHGLPD)) {
            $modifiedColumns[':p' . $index++]  = 'PothGlPd';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHAIRSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'PothAirShip';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHERINREVIEW)) {
            $modifiedColumns[':p' . $index++]  = 'PothErInReview';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHEXCHCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'PothExchCtry';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHEXCHRATE)) {
            $modifiedColumns[':p' . $index++]  = 'PothExchRate';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_INTBWHSEORIG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseOrig';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHLANDCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PothLandCost';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHRCPTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PothRcptNbr';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHLANDBASEDON)) {
            $modifiedColumns[':p' . $index++]  = 'PothLandBasedOn';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHINVCNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PothInvcNbr';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHINVCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PothInvcDate';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHFRTAMT)) {
            $modifiedColumns[':p' . $index++]  = 'PothFrtAmt';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHMISCAMT)) {
            $modifiedColumns[':p' . $index++]  = 'PothMiscAmt';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO po_tran_head (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'PothNbr':
                        $stmt->bindValue($identifier, $this->pothnbr, PDO::PARAM_STR);
                        break;
                    case 'PothStat':
                        $stmt->bindValue($identifier, $this->pothstat, PDO::PARAM_STR);
                        break;
                    case 'PothRcptDate':
                        $stmt->bindValue($identifier, $this->pothrcptdate, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'PothGlPd':
                        $stmt->bindValue($identifier, $this->pothglpd, PDO::PARAM_INT);
                        break;
                    case 'PothAirShip':
                        $stmt->bindValue($identifier, $this->pothairship, PDO::PARAM_STR);
                        break;
                    case 'PothErInReview':
                        $stmt->bindValue($identifier, $this->potherinreview, PDO::PARAM_STR);
                        break;
                    case 'PothExchCtry':
                        $stmt->bindValue($identifier, $this->pothexchctry, PDO::PARAM_STR);
                        break;
                    case 'PothExchRate':
                        $stmt->bindValue($identifier, $this->pothexchrate, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseOrig':
                        $stmt->bindValue($identifier, $this->intbwhseorig, PDO::PARAM_STR);
                        break;
                    case 'PothLandCost':
                        $stmt->bindValue($identifier, $this->pothlandcost, PDO::PARAM_STR);
                        break;
                    case 'PothRcptNbr':
                        $stmt->bindValue($identifier, $this->pothrcptnbr, PDO::PARAM_INT);
                        break;
                    case 'PothLandBasedOn':
                        $stmt->bindValue($identifier, $this->pothlandbasedon, PDO::PARAM_STR);
                        break;
                    case 'PothInvcNbr':
                        $stmt->bindValue($identifier, $this->pothinvcnbr, PDO::PARAM_STR);
                        break;
                    case 'PothInvcDate':
                        $stmt->bindValue($identifier, $this->pothinvcdate, PDO::PARAM_STR);
                        break;
                    case 'PothFrtAmt':
                        $stmt->bindValue($identifier, $this->pothfrtamt, PDO::PARAM_STR);
                        break;
                    case 'PothMiscAmt':
                        $stmt->bindValue($identifier, $this->pothmiscamt, PDO::PARAM_STR);
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
        $pos = PoReceivingHeadTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPothnbr();
                break;
            case 1:
                return $this->getPothstat();
                break;
            case 2:
                return $this->getPothrcptdate();
                break;
            case 3:
                return $this->getIntbwhse();
                break;
            case 4:
                return $this->getPothglpd();
                break;
            case 5:
                return $this->getPothairship();
                break;
            case 6:
                return $this->getPotherinreview();
                break;
            case 7:
                return $this->getPothexchctry();
                break;
            case 8:
                return $this->getPothexchrate();
                break;
            case 9:
                return $this->getIntbwhseorig();
                break;
            case 10:
                return $this->getPothlandcost();
                break;
            case 11:
                return $this->getPothrcptnbr();
                break;
            case 12:
                return $this->getPothlandbasedon();
                break;
            case 13:
                return $this->getPothinvcnbr();
                break;
            case 14:
                return $this->getPothinvcdate();
                break;
            case 15:
                return $this->getPothfrtamt();
                break;
            case 16:
                return $this->getPothmiscamt();
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

        if (isset($alreadyDumpedObjects['PoReceivingHead'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PoReceivingHead'][$this->hashCode()] = true;
        $keys = PoReceivingHeadTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPothnbr(),
            $keys[1] => $this->getPothstat(),
            $keys[2] => $this->getPothrcptdate(),
            $keys[3] => $this->getIntbwhse(),
            $keys[4] => $this->getPothglpd(),
            $keys[5] => $this->getPothairship(),
            $keys[6] => $this->getPotherinreview(),
            $keys[7] => $this->getPothexchctry(),
            $keys[8] => $this->getPothexchrate(),
            $keys[9] => $this->getIntbwhseorig(),
            $keys[10] => $this->getPothlandcost(),
            $keys[11] => $this->getPothrcptnbr(),
            $keys[12] => $this->getPothlandbasedon(),
            $keys[13] => $this->getPothinvcnbr(),
            $keys[14] => $this->getPothinvcdate(),
            $keys[15] => $this->getPothfrtamt(),
            $keys[16] => $this->getPothmiscamt(),
            $keys[17] => $this->getDateupdtd(),
            $keys[18] => $this->getTimeupdtd(),
            $keys[19] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPurchaseOrder) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrder';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_head';
                        break;
                    default:
                        $key = 'PurchaseOrder';
                }

                $result[$key] = $this->aPurchaseOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->collPurchaseOrderDetailReceivings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetailReceivings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_tran_dets';
                        break;
                    default:
                        $key = 'PurchaseOrderDetailReceivings';
                }

                $result[$key] = $this->collPurchaseOrderDetailReceivings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPurchaseOrderDetailLotReceivings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetailLotReceivings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_tran_lot_dets';
                        break;
                    default:
                        $key = 'PurchaseOrderDetailLotReceivings';
                }

                $result[$key] = $this->collPurchaseOrderDetailLotReceivings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\PoReceivingHead
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = PoReceivingHeadTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\PoReceivingHead
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPothnbr($value);
                break;
            case 1:
                $this->setPothstat($value);
                break;
            case 2:
                $this->setPothrcptdate($value);
                break;
            case 3:
                $this->setIntbwhse($value);
                break;
            case 4:
                $this->setPothglpd($value);
                break;
            case 5:
                $this->setPothairship($value);
                break;
            case 6:
                $this->setPotherinreview($value);
                break;
            case 7:
                $this->setPothexchctry($value);
                break;
            case 8:
                $this->setPothexchrate($value);
                break;
            case 9:
                $this->setIntbwhseorig($value);
                break;
            case 10:
                $this->setPothlandcost($value);
                break;
            case 11:
                $this->setPothrcptnbr($value);
                break;
            case 12:
                $this->setPothlandbasedon($value);
                break;
            case 13:
                $this->setPothinvcnbr($value);
                break;
            case 14:
                $this->setPothinvcdate($value);
                break;
            case 15:
                $this->setPothfrtamt($value);
                break;
            case 16:
                $this->setPothmiscamt($value);
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
        $keys = PoReceivingHeadTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPothnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPothstat($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPothrcptdate($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIntbwhse($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPothglpd($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPothairship($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPotherinreview($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPothexchctry($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPothexchrate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIntbwhseorig($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPothlandcost($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPothrcptnbr($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPothlandbasedon($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPothinvcnbr($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPothinvcdate($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPothfrtamt($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPothmiscamt($arr[$keys[16]]);
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
     * @return $this|\PoReceivingHead The current object, for fluid interface
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
        $criteria = new Criteria(PoReceivingHeadTableMap::DATABASE_NAME);

        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHNBR)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHNBR, $this->pothnbr);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHSTAT)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHSTAT, $this->pothstat);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHRCPTDATE)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHRCPTDATE, $this->pothrcptdate);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_INTBWHSE)) {
            $criteria->add(PoReceivingHeadTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHGLPD)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHGLPD, $this->pothglpd);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHAIRSHIP)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHAIRSHIP, $this->pothairship);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHERINREVIEW)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHERINREVIEW, $this->potherinreview);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHEXCHCTRY)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHEXCHCTRY, $this->pothexchctry);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHEXCHRATE)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHEXCHRATE, $this->pothexchrate);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_INTBWHSEORIG)) {
            $criteria->add(PoReceivingHeadTableMap::COL_INTBWHSEORIG, $this->intbwhseorig);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHLANDCOST)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHLANDCOST, $this->pothlandcost);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHRCPTNBR)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHRCPTNBR, $this->pothrcptnbr);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHLANDBASEDON)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHLANDBASEDON, $this->pothlandbasedon);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHINVCNBR)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHINVCNBR, $this->pothinvcnbr);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHINVCDATE)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHINVCDATE, $this->pothinvcdate);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHFRTAMT)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHFRTAMT, $this->pothfrtamt);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_POTHMISCAMT)) {
            $criteria->add(PoReceivingHeadTableMap::COL_POTHMISCAMT, $this->pothmiscamt);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_DATEUPDTD)) {
            $criteria->add(PoReceivingHeadTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_TIMEUPDTD)) {
            $criteria->add(PoReceivingHeadTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(PoReceivingHeadTableMap::COL_DUMMY)) {
            $criteria->add(PoReceivingHeadTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildPoReceivingHeadQuery::create();
        $criteria->add(PoReceivingHeadTableMap::COL_POTHNBR, $this->pothnbr);

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
        $validPk = null !== $this->getPothnbr();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation purchaseorder to table po_head
        if ($this->aPurchaseOrder && $hash = spl_object_hash($this->aPurchaseOrder)) {
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
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getPothnbr();
    }

    /**
     * Generic method to set the primary key (pothnbr column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPothnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getPothnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \PoReceivingHead (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPothnbr($this->getPothnbr());
        $copyObj->setPothstat($this->getPothstat());
        $copyObj->setPothrcptdate($this->getPothrcptdate());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setPothglpd($this->getPothglpd());
        $copyObj->setPothairship($this->getPothairship());
        $copyObj->setPotherinreview($this->getPotherinreview());
        $copyObj->setPothexchctry($this->getPothexchctry());
        $copyObj->setPothexchrate($this->getPothexchrate());
        $copyObj->setIntbwhseorig($this->getIntbwhseorig());
        $copyObj->setPothlandcost($this->getPothlandcost());
        $copyObj->setPothrcptnbr($this->getPothrcptnbr());
        $copyObj->setPothlandbasedon($this->getPothlandbasedon());
        $copyObj->setPothinvcnbr($this->getPothinvcnbr());
        $copyObj->setPothinvcdate($this->getPothinvcdate());
        $copyObj->setPothfrtamt($this->getPothfrtamt());
        $copyObj->setPothmiscamt($this->getPothmiscamt());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getPurchaseOrderDetailReceivings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetailReceiving($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPurchaseOrderDetailLotReceivings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetailLotReceiving($relObj->copy($deepCopy));
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
     * @return \PoReceivingHead Clone of current object.
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
     * Declares an association between this object and a ChildPurchaseOrder object.
     *
     * @param  ChildPurchaseOrder $v
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPurchaseOrder(ChildPurchaseOrder $v = null)
    {
        if ($v === null) {
            $this->setPothnbr('');
        } else {
            $this->setPothnbr($v->getPohdnbr());
        }

        $this->aPurchaseOrder = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setPoReceivingHead($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildPurchaseOrder object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildPurchaseOrder The associated ChildPurchaseOrder object.
     * @throws PropelException
     */
    public function getPurchaseOrder(ConnectionInterface $con = null)
    {
        if ($this->aPurchaseOrder === null && (($this->pothnbr !== "" && $this->pothnbr !== null))) {
            $this->aPurchaseOrder = ChildPurchaseOrderQuery::create()->findPk($this->pothnbr, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aPurchaseOrder->setPoReceivingHead($this);
        }

        return $this->aPurchaseOrder;
    }

    /**
     * Declares an association between this object and a ChildWarehouse object.
     *
     * @param  ChildWarehouse $v
     * @return $this|\PoReceivingHead The current object (for fluent API support)
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
            $v->addPoReceivingHead($this);
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
                $this->aWarehouse->addPoReceivingHeads($this);
             */
        }

        return $this->aWarehouse;
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
        if ('PurchaseOrderDetailReceiving' == $relationName) {
            $this->initPurchaseOrderDetailReceivings();
            return;
        }
        if ('PurchaseOrderDetailLotReceiving' == $relationName) {
            $this->initPurchaseOrderDetailLotReceivings();
            return;
        }
    }

    /**
     * Clears out the collPurchaseOrderDetailReceivings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetailReceivings()
     */
    public function clearPurchaseOrderDetailReceivings()
    {
        $this->collPurchaseOrderDetailReceivings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetailReceivings collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetailReceivings($v = true)
    {
        $this->collPurchaseOrderDetailReceivingsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetailReceivings collection.
     *
     * By default this just sets the collPurchaseOrderDetailReceivings collection to an empty array (like clearcollPurchaseOrderDetailReceivings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetailReceivings($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetailReceivings && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailReceivingTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetailReceivings = new $collectionClassName;
        $this->collPurchaseOrderDetailReceivings->setModel('\PurchaseOrderDetailReceiving');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetailReceiving objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildPoReceivingHead is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetailReceivings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceivings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceivings) {
                // return empty collection
                $this->initPurchaseOrderDetailReceivings();
            } else {
                $collPurchaseOrderDetailReceivings = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria)
                    ->filterByPoReceivingHead($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailReceivingsPartial && count($collPurchaseOrderDetailReceivings)) {
                        $this->initPurchaseOrderDetailReceivings(false);

                        foreach ($collPurchaseOrderDetailReceivings as $obj) {
                            if (false == $this->collPurchaseOrderDetailReceivings->contains($obj)) {
                                $this->collPurchaseOrderDetailReceivings->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailReceivingsPartial = true;
                    }

                    return $collPurchaseOrderDetailReceivings;
                }

                if ($partial && $this->collPurchaseOrderDetailReceivings) {
                    foreach ($this->collPurchaseOrderDetailReceivings as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetailReceivings[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetailReceivings = $collPurchaseOrderDetailReceivings;
                $this->collPurchaseOrderDetailReceivingsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetailReceivings;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetailReceiving objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetailReceivings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildPoReceivingHead The current object (for fluent API support)
     */
    public function setPurchaseOrderDetailReceivings(Collection $purchaseOrderDetailReceivings, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetailReceiving[] $purchaseOrderDetailReceivingsToDelete */
        $purchaseOrderDetailReceivingsToDelete = $this->getPurchaseOrderDetailReceivings(new Criteria(), $con)->diff($purchaseOrderDetailReceivings);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->purchaseOrderDetailReceivingsScheduledForDeletion = clone $purchaseOrderDetailReceivingsToDelete;

        foreach ($purchaseOrderDetailReceivingsToDelete as $purchaseOrderDetailReceivingRemoved) {
            $purchaseOrderDetailReceivingRemoved->setPoReceivingHead(null);
        }

        $this->collPurchaseOrderDetailReceivings = null;
        foreach ($purchaseOrderDetailReceivings as $purchaseOrderDetailReceiving) {
            $this->addPurchaseOrderDetailReceiving($purchaseOrderDetailReceiving);
        }

        $this->collPurchaseOrderDetailReceivings = $purchaseOrderDetailReceivings;
        $this->collPurchaseOrderDetailReceivingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetailReceiving objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetailReceiving objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetailReceivings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceivings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceivings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetailReceivings());
            }

            $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPoReceivingHead($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetailReceivings);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetailReceiving object to this object
     * through the ChildPurchaseOrderDetailReceiving foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetailReceiving $l ChildPurchaseOrderDetailReceiving
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function addPurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $l)
    {
        if ($this->collPurchaseOrderDetailReceivings === null) {
            $this->initPurchaseOrderDetailReceivings();
            $this->collPurchaseOrderDetailReceivingsPartial = true;
        }

        if (!$this->collPurchaseOrderDetailReceivings->contains($l)) {
            $this->doAddPurchaseOrderDetailReceiving($l);

            if ($this->purchaseOrderDetailReceivingsScheduledForDeletion and $this->purchaseOrderDetailReceivingsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailReceivingsScheduledForDeletion->remove($this->purchaseOrderDetailReceivingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving The ChildPurchaseOrderDetailReceiving object to add.
     */
    protected function doAddPurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving)
    {
        $this->collPurchaseOrderDetailReceivings[]= $purchaseOrderDetailReceiving;
        $purchaseOrderDetailReceiving->setPoReceivingHead($this);
    }

    /**
     * @param  ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving The ChildPurchaseOrderDetailReceiving object to remove.
     * @return $this|ChildPoReceivingHead The current object (for fluent API support)
     */
    public function removePurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving)
    {
        if ($this->getPurchaseOrderDetailReceivings()->contains($purchaseOrderDetailReceiving)) {
            $pos = $this->collPurchaseOrderDetailReceivings->search($purchaseOrderDetailReceiving);
            $this->collPurchaseOrderDetailReceivings->remove($pos);
            if (null === $this->purchaseOrderDetailReceivingsScheduledForDeletion) {
                $this->purchaseOrderDetailReceivingsScheduledForDeletion = clone $this->collPurchaseOrderDetailReceivings;
                $this->purchaseOrderDetailReceivingsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailReceivingsScheduledForDeletion[]= clone $purchaseOrderDetailReceiving;
            $purchaseOrderDetailReceiving->setPoReceivingHead(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PoReceivingHead is new, it will return
     * an empty collection; or if this PoReceivingHead has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PoReceivingHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PoReceivingHead is new, it will return
     * an empty collection; or if this PoReceivingHead has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PoReceivingHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinPurchaseOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrderDetail', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PoReceivingHead is new, it will return
     * an empty collection; or if this PoReceivingHead has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PoReceivingHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PoReceivingHead is new, it will return
     * an empty collection; or if this PoReceivingHead has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PoReceivingHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinUnitofMeasureSale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasureSale', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }

    /**
     * Clears out the collPurchaseOrderDetailLotReceivings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetailLotReceivings()
     */
    public function clearPurchaseOrderDetailLotReceivings()
    {
        $this->collPurchaseOrderDetailLotReceivings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetailLotReceivings collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetailLotReceivings($v = true)
    {
        $this->collPurchaseOrderDetailLotReceivingsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetailLotReceivings collection.
     *
     * By default this just sets the collPurchaseOrderDetailLotReceivings collection to an empty array (like clearcollPurchaseOrderDetailLotReceivings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetailLotReceivings($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetailLotReceivings && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailLotReceivingTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetailLotReceivings = new $collectionClassName;
        $this->collPurchaseOrderDetailLotReceivings->setModel('\PurchaseOrderDetailLotReceiving');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetailLotReceiving objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildPoReceivingHead is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetailLotReceivings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailLotReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailLotReceivings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailLotReceivings) {
                // return empty collection
                $this->initPurchaseOrderDetailLotReceivings();
            } else {
                $collPurchaseOrderDetailLotReceivings = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria)
                    ->filterByPoReceivingHead($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailLotReceivingsPartial && count($collPurchaseOrderDetailLotReceivings)) {
                        $this->initPurchaseOrderDetailLotReceivings(false);

                        foreach ($collPurchaseOrderDetailLotReceivings as $obj) {
                            if (false == $this->collPurchaseOrderDetailLotReceivings->contains($obj)) {
                                $this->collPurchaseOrderDetailLotReceivings->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailLotReceivingsPartial = true;
                    }

                    return $collPurchaseOrderDetailLotReceivings;
                }

                if ($partial && $this->collPurchaseOrderDetailLotReceivings) {
                    foreach ($this->collPurchaseOrderDetailLotReceivings as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetailLotReceivings[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetailLotReceivings = $collPurchaseOrderDetailLotReceivings;
                $this->collPurchaseOrderDetailLotReceivingsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetailLotReceivings;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetailLotReceiving objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetailLotReceivings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildPoReceivingHead The current object (for fluent API support)
     */
    public function setPurchaseOrderDetailLotReceivings(Collection $purchaseOrderDetailLotReceivings, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetailLotReceiving[] $purchaseOrderDetailLotReceivingsToDelete */
        $purchaseOrderDetailLotReceivingsToDelete = $this->getPurchaseOrderDetailLotReceivings(new Criteria(), $con)->diff($purchaseOrderDetailLotReceivings);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = clone $purchaseOrderDetailLotReceivingsToDelete;

        foreach ($purchaseOrderDetailLotReceivingsToDelete as $purchaseOrderDetailLotReceivingRemoved) {
            $purchaseOrderDetailLotReceivingRemoved->setPoReceivingHead(null);
        }

        $this->collPurchaseOrderDetailLotReceivings = null;
        foreach ($purchaseOrderDetailLotReceivings as $purchaseOrderDetailLotReceiving) {
            $this->addPurchaseOrderDetailLotReceiving($purchaseOrderDetailLotReceiving);
        }

        $this->collPurchaseOrderDetailLotReceivings = $purchaseOrderDetailLotReceivings;
        $this->collPurchaseOrderDetailLotReceivingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetailLotReceiving objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetailLotReceiving objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetailLotReceivings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailLotReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailLotReceivings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailLotReceivings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetailLotReceivings());
            }

            $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPoReceivingHead($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetailLotReceivings);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetailLotReceiving object to this object
     * through the ChildPurchaseOrderDetailLotReceiving foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetailLotReceiving $l ChildPurchaseOrderDetailLotReceiving
     * @return $this|\PoReceivingHead The current object (for fluent API support)
     */
    public function addPurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $l)
    {
        if ($this->collPurchaseOrderDetailLotReceivings === null) {
            $this->initPurchaseOrderDetailLotReceivings();
            $this->collPurchaseOrderDetailLotReceivingsPartial = true;
        }

        if (!$this->collPurchaseOrderDetailLotReceivings->contains($l)) {
            $this->doAddPurchaseOrderDetailLotReceiving($l);

            if ($this->purchaseOrderDetailLotReceivingsScheduledForDeletion and $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->remove($this->purchaseOrderDetailLotReceivingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving The ChildPurchaseOrderDetailLotReceiving object to add.
     */
    protected function doAddPurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving)
    {
        $this->collPurchaseOrderDetailLotReceivings[]= $purchaseOrderDetailLotReceiving;
        $purchaseOrderDetailLotReceiving->setPoReceivingHead($this);
    }

    /**
     * @param  ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving The ChildPurchaseOrderDetailLotReceiving object to remove.
     * @return $this|ChildPoReceivingHead The current object (for fluent API support)
     */
    public function removePurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving)
    {
        if ($this->getPurchaseOrderDetailLotReceivings()->contains($purchaseOrderDetailLotReceiving)) {
            $pos = $this->collPurchaseOrderDetailLotReceivings->search($purchaseOrderDetailLotReceiving);
            $this->collPurchaseOrderDetailLotReceivings->remove($pos);
            if (null === $this->purchaseOrderDetailLotReceivingsScheduledForDeletion) {
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = clone $this->collPurchaseOrderDetailLotReceivings;
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailLotReceivingsScheduledForDeletion[]= clone $purchaseOrderDetailLotReceiving;
            $purchaseOrderDetailLotReceiving->setPoReceivingHead(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PoReceivingHead is new, it will return
     * an empty collection; or if this PoReceivingHead has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PoReceivingHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PoReceivingHead is new, it will return
     * an empty collection; or if this PoReceivingHead has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PoReceivingHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinPurchaseOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrderDetail', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PoReceivingHead is new, it will return
     * an empty collection; or if this PoReceivingHead has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PoReceivingHead.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aPurchaseOrder) {
            $this->aPurchaseOrder->removePoReceivingHead($this);
        }
        if (null !== $this->aWarehouse) {
            $this->aWarehouse->removePoReceivingHead($this);
        }
        $this->pothnbr = null;
        $this->pothstat = null;
        $this->pothrcptdate = null;
        $this->intbwhse = null;
        $this->pothglpd = null;
        $this->pothairship = null;
        $this->potherinreview = null;
        $this->pothexchctry = null;
        $this->pothexchrate = null;
        $this->intbwhseorig = null;
        $this->pothlandcost = null;
        $this->pothrcptnbr = null;
        $this->pothlandbasedon = null;
        $this->pothinvcnbr = null;
        $this->pothinvcdate = null;
        $this->pothfrtamt = null;
        $this->pothmiscamt = null;
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
            if ($this->collPurchaseOrderDetailReceivings) {
                foreach ($this->collPurchaseOrderDetailReceivings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrderDetailLotReceivings) {
                foreach ($this->collPurchaseOrderDetailLotReceivings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collPurchaseOrderDetailReceivings = null;
        $this->collPurchaseOrderDetailLotReceivings = null;
        $this->aPurchaseOrder = null;
        $this->aWarehouse = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PoReceivingHeadTableMap::DEFAULT_STRING_FORMAT);
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
