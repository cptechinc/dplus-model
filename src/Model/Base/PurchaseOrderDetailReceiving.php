<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \PoReceivingHead as ChildPoReceivingHead;
use \PoReceivingHeadQuery as ChildPoReceivingHeadQuery;
use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderDetail as ChildPurchaseOrderDetail;
use \PurchaseOrderDetailQuery as ChildPurchaseOrderDetailQuery;
use \PurchaseOrderDetailReceivingQuery as ChildPurchaseOrderDetailReceivingQuery;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \UnitofMeasureSale as ChildUnitofMeasureSale;
use \UnitofMeasureSaleQuery as ChildUnitofMeasureSaleQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailReceivingTableMap;
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
 * Base class that represents a row from the 'po_tran_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class PurchaseOrderDetailReceiving implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\PurchaseOrderDetailReceivingTableMap';


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
     * The value for the potdline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $potdline;

    /**
     * The value for the potdseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $potdseq;

    /**
     * The value for the inititemnbr field.
     *
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the potddesc1 field.
     *
     * @var        string
     */
    protected $potddesc1;

    /**
     * The value for the potddesc2 field.
     *
     * @var        string
     */
    protected $potddesc2;

    /**
     * The value for the potdvenditemnbr field.
     *
     * @var        string
     */
    protected $potdvenditemnbr;

    /**
     * The value for the intbuompur field.
     *
     * @var        string
     */
    protected $intbuompur;

    /**
     * The value for the potdref field.
     *
     * @var        string
     */
    protected $potdref;

    /**
     * The value for the potdqtyord field.
     *
     * @var        string
     */
    protected $potdqtyord;

    /**
     * The value for the potdqtyrec field.
     *
     * @var        string
     */
    protected $potdqtyrec;

    /**
     * The value for the potdpurchunitcost field.
     *
     * @var        string
     */
    protected $potdpurchunitcost;

    /**
     * The value for the potdpurchtotcost field.
     *
     * @var        string
     */
    protected $potdpurchtotcost;

    /**
     * The value for the potdglacct field.
     *
     * @var        string
     */
    protected $potdglacct;

    /**
     * The value for the potdclos field.
     *
     * @var        string
     */
    protected $potdclos;

    /**
     * The value for the potdshopminutes field.
     *
     * @var        int
     */
    protected $potdshopminutes;

    /**
     * The value for the potdtype field.
     *
     * @var        string
     */
    protected $potdtype;

    /**
     * The value for the potdforeigncost field.
     *
     * @var        string
     */
    protected $potdforeigncost;

    /**
     * The value for the potdforeigncosttot field.
     *
     * @var        string
     */
    protected $potdforeigncosttot;

    /**
     * The value for the potdspecordr field.
     *
     * @var        string
     */
    protected $potdspecordr;

    /**
     * The value for the potdprodunitcost field.
     *
     * @var        string
     */
    protected $potdprodunitcost;

    /**
     * The value for the potdbaseunitcost field.
     *
     * @var        string
     */
    protected $potdbaseunitcost;

    /**
     * The value for the potdbin field.
     *
     * @var        string
     */
    protected $potdbin;

    /**
     * The value for the potdfabreturnscrap field.
     *
     * @var        string
     */
    protected $potdfabreturnscrap;

    /**
     * The value for the potdrfbatch field.
     *
     * @var        string
     */
    protected $potdrfbatch;

    /**
     * The value for the potdrevision field.
     *
     * @var        string
     */
    protected $potdrevision;

    /**
     * The value for the potdlandunitcost field.
     *
     * @var        string
     */
    protected $potdlandunitcost;

    /**
     * The value for the potdnbrofcases field.
     *
     * @var        string
     */
    protected $potdnbrofcases;

    /**
     * The value for the potdtariffcost field.
     *
     * @var        string
     */
    protected $potdtariffcost;

    /**
     * The value for the potdshopcost field.
     *
     * @var        string
     */
    protected $potdshopcost;

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
     * @var        ChildPurchaseOrder
     */
    protected $aPurchaseOrder;

    /**
     * @var        ChildPoReceivingHead
     */
    protected $aPoReceivingHead;

    /**
     * @var        ChildPurchaseOrderDetail
     */
    protected $aPurchaseOrderDetail;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildUnitofMeasureSale
     */
    protected $aUnitofMeasureSale;

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
        $this->pothnbr = '';
        $this->potdline = 0;
        $this->potdseq = 0;
    }

    /**
     * Initializes internal state of Base\PurchaseOrderDetailReceiving object.
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
     * Compares this with another <code>PurchaseOrderDetailReceiving</code> instance.  If
     * <code>obj</code> is an instance of <code>PurchaseOrderDetailReceiving</code>, delegates to
     * <code>equals(PurchaseOrderDetailReceiving)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|PurchaseOrderDetailReceiving The current object, for fluid interface
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
     * Get the [potdline] column value.
     *
     * @return int
     */
    public function getPotdline()
    {
        return $this->potdline;
    }

    /**
     * Get the [potdseq] column value.
     *
     * @return int
     */
    public function getPotdseq()
    {
        return $this->potdseq;
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
     * Get the [potddesc1] column value.
     *
     * @return string
     */
    public function getPotddesc1()
    {
        return $this->potddesc1;
    }

    /**
     * Get the [potddesc2] column value.
     *
     * @return string
     */
    public function getPotddesc2()
    {
        return $this->potddesc2;
    }

    /**
     * Get the [potdvenditemnbr] column value.
     *
     * @return string
     */
    public function getPotdvenditemnbr()
    {
        return $this->potdvenditemnbr;
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
     * Get the [potdref] column value.
     *
     * @return string
     */
    public function getPotdref()
    {
        return $this->potdref;
    }

    /**
     * Get the [potdqtyord] column value.
     *
     * @return string
     */
    public function getPotdqtyord()
    {
        return $this->potdqtyord;
    }

    /**
     * Get the [potdqtyrec] column value.
     *
     * @return string
     */
    public function getPotdqtyrec()
    {
        return $this->potdqtyrec;
    }

    /**
     * Get the [potdpurchunitcost] column value.
     *
     * @return string
     */
    public function getPotdpurchunitcost()
    {
        return $this->potdpurchunitcost;
    }

    /**
     * Get the [potdpurchtotcost] column value.
     *
     * @return string
     */
    public function getPotdpurchtotcost()
    {
        return $this->potdpurchtotcost;
    }

    /**
     * Get the [potdglacct] column value.
     *
     * @return string
     */
    public function getPotdglacct()
    {
        return $this->potdglacct;
    }

    /**
     * Get the [potdclos] column value.
     *
     * @return string
     */
    public function getPotdclos()
    {
        return $this->potdclos;
    }

    /**
     * Get the [potdshopminutes] column value.
     *
     * @return int
     */
    public function getPotdshopminutes()
    {
        return $this->potdshopminutes;
    }

    /**
     * Get the [potdtype] column value.
     *
     * @return string
     */
    public function getPotdtype()
    {
        return $this->potdtype;
    }

    /**
     * Get the [potdforeigncost] column value.
     *
     * @return string
     */
    public function getPotdforeigncost()
    {
        return $this->potdforeigncost;
    }

    /**
     * Get the [potdforeigncosttot] column value.
     *
     * @return string
     */
    public function getPotdforeigncosttot()
    {
        return $this->potdforeigncosttot;
    }

    /**
     * Get the [potdspecordr] column value.
     *
     * @return string
     */
    public function getPotdspecordr()
    {
        return $this->potdspecordr;
    }

    /**
     * Get the [potdprodunitcost] column value.
     *
     * @return string
     */
    public function getPotdprodunitcost()
    {
        return $this->potdprodunitcost;
    }

    /**
     * Get the [potdbaseunitcost] column value.
     *
     * @return string
     */
    public function getPotdbaseunitcost()
    {
        return $this->potdbaseunitcost;
    }

    /**
     * Get the [potdbin] column value.
     *
     * @return string
     */
    public function getPotdbin()
    {
        return $this->potdbin;
    }

    /**
     * Get the [potdfabreturnscrap] column value.
     *
     * @return string
     */
    public function getPotdfabreturnscrap()
    {
        return $this->potdfabreturnscrap;
    }

    /**
     * Get the [potdrfbatch] column value.
     *
     * @return string
     */
    public function getPotdrfbatch()
    {
        return $this->potdrfbatch;
    }

    /**
     * Get the [potdrevision] column value.
     *
     * @return string
     */
    public function getPotdrevision()
    {
        return $this->potdrevision;
    }

    /**
     * Get the [potdlandunitcost] column value.
     *
     * @return string
     */
    public function getPotdlandunitcost()
    {
        return $this->potdlandunitcost;
    }

    /**
     * Get the [potdnbrofcases] column value.
     *
     * @return string
     */
    public function getPotdnbrofcases()
    {
        return $this->potdnbrofcases;
    }

    /**
     * Get the [potdtariffcost] column value.
     *
     * @return string
     */
    public function getPotdtariffcost()
    {
        return $this->potdtariffcost;
    }

    /**
     * Get the [potdshopcost] column value.
     *
     * @return string
     */
    public function getPotdshopcost()
    {
        return $this->potdshopcost;
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
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPothnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothnbr !== $v) {
            $this->pothnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTHNBR] = true;
        }

        if ($this->aPurchaseOrder !== null && $this->aPurchaseOrder->getPohdnbr() !== $v) {
            $this->aPurchaseOrder = null;
        }

        if ($this->aPoReceivingHead !== null && $this->aPoReceivingHead->getPothnbr() !== $v) {
            $this->aPoReceivingHead = null;
        }

        if ($this->aPurchaseOrderDetail !== null && $this->aPurchaseOrderDetail->getPohdnbr() !== $v) {
            $this->aPurchaseOrderDetail = null;
        }

        return $this;
    } // setPothnbr()

    /**
     * Set the value of [potdline] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potdline !== $v) {
            $this->potdline = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDLINE] = true;
        }

        if ($this->aPurchaseOrderDetail !== null && $this->aPurchaseOrderDetail->getPodtline() !== $v) {
            $this->aPurchaseOrderDetail = null;
        }

        return $this;
    } // setPotdline()

    /**
     * Set the value of [potdseq] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potdseq !== $v) {
            $this->potdseq = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ] = true;
        }

        return $this;
    } // setPotdseq()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [potddesc1] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotddesc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potddesc1 !== $v) {
            $this->potddesc1 = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDDESC1] = true;
        }

        return $this;
    } // setPotddesc1()

    /**
     * Set the value of [potddesc2] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotddesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potddesc2 !== $v) {
            $this->potddesc2 = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDDESC2] = true;
        }

        return $this;
    } // setPotddesc2()

    /**
     * Set the value of [potdvenditemnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdvenditemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdvenditemnbr !== $v) {
            $this->potdvenditemnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDVENDITEMNBR] = true;
        }

        return $this;
    } // setPotdvenditemnbr()

    /**
     * Set the value of [intbuompur] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setIntbuompur($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuompur !== $v) {
            $this->intbuompur = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR] = true;
        }

        if ($this->aUnitofMeasureSale !== null && $this->aUnitofMeasureSale->getIntbuomsale() !== $v) {
            $this->aUnitofMeasureSale = null;
        }

        return $this;
    } // setIntbuompur()

    /**
     * Set the value of [potdref] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdref !== $v) {
            $this->potdref = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDREF] = true;
        }

        return $this;
    } // setPotdref()

    /**
     * Set the value of [potdqtyord] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdqtyord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdqtyord !== $v) {
            $this->potdqtyord = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD] = true;
        }

        return $this;
    } // setPotdqtyord()

    /**
     * Set the value of [potdqtyrec] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdqtyrec($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdqtyrec !== $v) {
            $this->potdqtyrec = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC] = true;
        }

        return $this;
    } // setPotdqtyrec()

    /**
     * Set the value of [potdpurchunitcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdpurchunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdpurchunitcost !== $v) {
            $this->potdpurchunitcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST] = true;
        }

        return $this;
    } // setPotdpurchunitcost()

    /**
     * Set the value of [potdpurchtotcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdpurchtotcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdpurchtotcost !== $v) {
            $this->potdpurchtotcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST] = true;
        }

        return $this;
    } // setPotdpurchtotcost()

    /**
     * Set the value of [potdglacct] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdglacct !== $v) {
            $this->potdglacct = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDGLACCT] = true;
        }

        return $this;
    } // setPotdglacct()

    /**
     * Set the value of [potdclos] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdclos($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdclos !== $v) {
            $this->potdclos = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDCLOS] = true;
        }

        return $this;
    } // setPotdclos()

    /**
     * Set the value of [potdshopminutes] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdshopminutes($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potdshopminutes !== $v) {
            $this->potdshopminutes = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES] = true;
        }

        return $this;
    } // setPotdshopminutes()

    /**
     * Set the value of [potdtype] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdtype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdtype !== $v) {
            $this->potdtype = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDTYPE] = true;
        }

        return $this;
    } // setPotdtype()

    /**
     * Set the value of [potdforeigncost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdforeigncost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdforeigncost !== $v) {
            $this->potdforeigncost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST] = true;
        }

        return $this;
    } // setPotdforeigncost()

    /**
     * Set the value of [potdforeigncosttot] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdforeigncosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdforeigncosttot !== $v) {
            $this->potdforeigncosttot = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT] = true;
        }

        return $this;
    } // setPotdforeigncosttot()

    /**
     * Set the value of [potdspecordr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdspecordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdspecordr !== $v) {
            $this->potdspecordr = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDSPECORDR] = true;
        }

        return $this;
    } // setPotdspecordr()

    /**
     * Set the value of [potdprodunitcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdprodunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdprodunitcost !== $v) {
            $this->potdprodunitcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST] = true;
        }

        return $this;
    } // setPotdprodunitcost()

    /**
     * Set the value of [potdbaseunitcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdbaseunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdbaseunitcost !== $v) {
            $this->potdbaseunitcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST] = true;
        }

        return $this;
    } // setPotdbaseunitcost()

    /**
     * Set the value of [potdbin] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdbin !== $v) {
            $this->potdbin = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDBIN] = true;
        }

        return $this;
    } // setPotdbin()

    /**
     * Set the value of [potdfabreturnscrap] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdfabreturnscrap($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdfabreturnscrap !== $v) {
            $this->potdfabreturnscrap = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDFABRETURNSCRAP] = true;
        }

        return $this;
    } // setPotdfabreturnscrap()

    /**
     * Set the value of [potdrfbatch] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdrfbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdrfbatch !== $v) {
            $this->potdrfbatch = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDRFBATCH] = true;
        }

        return $this;
    } // setPotdrfbatch()

    /**
     * Set the value of [potdrevision] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdrevision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdrevision !== $v) {
            $this->potdrevision = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDREVISION] = true;
        }

        return $this;
    } // setPotdrevision()

    /**
     * Set the value of [potdlandunitcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdlandunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdlandunitcost !== $v) {
            $this->potdlandunitcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST] = true;
        }

        return $this;
    } // setPotdlandunitcost()

    /**
     * Set the value of [potdnbrofcases] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdnbrofcases($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdnbrofcases !== $v) {
            $this->potdnbrofcases = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES] = true;
        }

        return $this;
    } // setPotdnbrofcases()

    /**
     * Set the value of [potdtariffcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdtariffcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdtariffcost !== $v) {
            $this->potdtariffcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST] = true;
        }

        return $this;
    } // setPotdtariffcost()

    /**
     * Set the value of [potdshopcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setPotdshopcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potdshopcost !== $v) {
            $this->potdshopcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST] = true;
        }

        return $this;
    } // setPotdshopcost()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceivingTableMap::COL_DUMMY] = true;
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

            if ($this->potdline !== 0) {
                return false;
            }

            if ($this->potdseq !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potddesc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potddesc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potddesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potddesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdvenditemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuompur = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdqtyord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdqtyord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdqtyrec', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdqtyrec = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdpurchunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdpurchunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdpurchtotcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdpurchtotcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdclos', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdclos = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdshopminutes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdshopminutes = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdtype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdtype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdforeigncost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdforeigncost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdforeigncosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdforeigncosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdspecordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdspecordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdprodunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdprodunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdbaseunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdbaseunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdfabreturnscrap', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdfabreturnscrap = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdrfbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdrfbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdrevision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdrevision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdlandunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdlandunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdnbrofcases', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdnbrofcases = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdtariffcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdtariffcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Potdshopcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdshopcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : PurchaseOrderDetailReceivingTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 33; // 33 = PurchaseOrderDetailReceivingTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\PurchaseOrderDetailReceiving'), 0, $e);
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
        if ($this->aPoReceivingHead !== null && $this->pothnbr !== $this->aPoReceivingHead->getPothnbr()) {
            $this->aPoReceivingHead = null;
        }
        if ($this->aPurchaseOrderDetail !== null && $this->pothnbr !== $this->aPurchaseOrderDetail->getPohdnbr()) {
            $this->aPurchaseOrderDetail = null;
        }
        if ($this->aPurchaseOrderDetail !== null && $this->potdline !== $this->aPurchaseOrderDetail->getPodtline()) {
            $this->aPurchaseOrderDetail = null;
        }
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aUnitofMeasureSale !== null && $this->intbuompur !== $this->aUnitofMeasureSale->getIntbuomsale()) {
            $this->aUnitofMeasureSale = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildPurchaseOrderDetailReceivingQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPurchaseOrder = null;
            $this->aPoReceivingHead = null;
            $this->aPurchaseOrderDetail = null;
            $this->aItemMasterItem = null;
            $this->aUnitofMeasureSale = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see PurchaseOrderDetailReceiving::setDeleted()
     * @see PurchaseOrderDetailReceiving::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildPurchaseOrderDetailReceivingQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
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
                PurchaseOrderDetailReceivingTableMap::addInstanceToPool($this);
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

            if ($this->aPoReceivingHead !== null) {
                if ($this->aPoReceivingHead->isModified() || $this->aPoReceivingHead->isNew()) {
                    $affectedRows += $this->aPoReceivingHead->save($con);
                }
                $this->setPoReceivingHead($this->aPoReceivingHead);
            }

            if ($this->aPurchaseOrderDetail !== null) {
                if ($this->aPurchaseOrderDetail->isModified() || $this->aPurchaseOrderDetail->isNew()) {
                    $affectedRows += $this->aPurchaseOrderDetail->save($con);
                }
                $this->setPurchaseOrderDetail($this->aPurchaseOrderDetail);
            }

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aUnitofMeasureSale !== null) {
                if ($this->aUnitofMeasureSale->isModified() || $this->aUnitofMeasureSale->isNew()) {
                    $affectedRows += $this->aUnitofMeasureSale->save($con);
                }
                $this->setUnitofMeasureSale($this->aUnitofMeasureSale);
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
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PothNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE)) {
            $modifiedColumns[':p' . $index++]  = 'PotdLine';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'PotdSeq';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC1)) {
            $modifiedColumns[':p' . $index++]  = 'PotdDesc1';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'PotdDesc2';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDVENDITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PotdVendItemNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomPur';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDREF)) {
            $modifiedColumns[':p' . $index++]  = 'PotdRef';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD)) {
            $modifiedColumns[':p' . $index++]  = 'PotdQtyOrd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC)) {
            $modifiedColumns[':p' . $index++]  = 'PotdQtyRec';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotdPurchUnitCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotdPurchTotCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'PotdGlAcct';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDCLOS)) {
            $modifiedColumns[':p' . $index++]  = 'PotdClos';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES)) {
            $modifiedColumns[':p' . $index++]  = 'PotdShopMinutes';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'PotdType';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotdForeignCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'PotdForeignCostTot';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDSPECORDR)) {
            $modifiedColumns[':p' . $index++]  = 'PotdSpecOrdr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotdProdUnitCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotdBaseUnitCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'PotdBin';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDFABRETURNSCRAP)) {
            $modifiedColumns[':p' . $index++]  = 'PotdFabReturnScrap';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDRFBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'PotdRfBatch';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDREVISION)) {
            $modifiedColumns[':p' . $index++]  = 'PotdRevision';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotdLandUnitCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES)) {
            $modifiedColumns[':p' . $index++]  = 'PotdNbrOfCases';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotdTariffCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotdShopCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO po_tran_det (%s) VALUES (%s)',
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
                    case 'PotdLine':
                        $stmt->bindValue($identifier, $this->potdline, PDO::PARAM_INT);
                        break;
                    case 'PotdSeq':
                        $stmt->bindValue($identifier, $this->potdseq, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'PotdDesc1':
                        $stmt->bindValue($identifier, $this->potddesc1, PDO::PARAM_STR);
                        break;
                    case 'PotdDesc2':
                        $stmt->bindValue($identifier, $this->potddesc2, PDO::PARAM_STR);
                        break;
                    case 'PotdVendItemNbr':
                        $stmt->bindValue($identifier, $this->potdvenditemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntbUomPur':
                        $stmt->bindValue($identifier, $this->intbuompur, PDO::PARAM_STR);
                        break;
                    case 'PotdRef':
                        $stmt->bindValue($identifier, $this->potdref, PDO::PARAM_STR);
                        break;
                    case 'PotdQtyOrd':
                        $stmt->bindValue($identifier, $this->potdqtyord, PDO::PARAM_STR);
                        break;
                    case 'PotdQtyRec':
                        $stmt->bindValue($identifier, $this->potdqtyrec, PDO::PARAM_STR);
                        break;
                    case 'PotdPurchUnitCost':
                        $stmt->bindValue($identifier, $this->potdpurchunitcost, PDO::PARAM_STR);
                        break;
                    case 'PotdPurchTotCost':
                        $stmt->bindValue($identifier, $this->potdpurchtotcost, PDO::PARAM_STR);
                        break;
                    case 'PotdGlAcct':
                        $stmt->bindValue($identifier, $this->potdglacct, PDO::PARAM_STR);
                        break;
                    case 'PotdClos':
                        $stmt->bindValue($identifier, $this->potdclos, PDO::PARAM_STR);
                        break;
                    case 'PotdShopMinutes':
                        $stmt->bindValue($identifier, $this->potdshopminutes, PDO::PARAM_INT);
                        break;
                    case 'PotdType':
                        $stmt->bindValue($identifier, $this->potdtype, PDO::PARAM_STR);
                        break;
                    case 'PotdForeignCost':
                        $stmt->bindValue($identifier, $this->potdforeigncost, PDO::PARAM_STR);
                        break;
                    case 'PotdForeignCostTot':
                        $stmt->bindValue($identifier, $this->potdforeigncosttot, PDO::PARAM_STR);
                        break;
                    case 'PotdSpecOrdr':
                        $stmt->bindValue($identifier, $this->potdspecordr, PDO::PARAM_STR);
                        break;
                    case 'PotdProdUnitCost':
                        $stmt->bindValue($identifier, $this->potdprodunitcost, PDO::PARAM_STR);
                        break;
                    case 'PotdBaseUnitCost':
                        $stmt->bindValue($identifier, $this->potdbaseunitcost, PDO::PARAM_STR);
                        break;
                    case 'PotdBin':
                        $stmt->bindValue($identifier, $this->potdbin, PDO::PARAM_STR);
                        break;
                    case 'PotdFabReturnScrap':
                        $stmt->bindValue($identifier, $this->potdfabreturnscrap, PDO::PARAM_STR);
                        break;
                    case 'PotdRfBatch':
                        $stmt->bindValue($identifier, $this->potdrfbatch, PDO::PARAM_STR);
                        break;
                    case 'PotdRevision':
                        $stmt->bindValue($identifier, $this->potdrevision, PDO::PARAM_STR);
                        break;
                    case 'PotdLandUnitCost':
                        $stmt->bindValue($identifier, $this->potdlandunitcost, PDO::PARAM_STR);
                        break;
                    case 'PotdNbrOfCases':
                        $stmt->bindValue($identifier, $this->potdnbrofcases, PDO::PARAM_STR);
                        break;
                    case 'PotdTariffCost':
                        $stmt->bindValue($identifier, $this->potdtariffcost, PDO::PARAM_STR);
                        break;
                    case 'PotdShopCost':
                        $stmt->bindValue($identifier, $this->potdshopcost, PDO::PARAM_STR);
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
        $pos = PurchaseOrderDetailReceivingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPotdline();
                break;
            case 2:
                return $this->getPotdseq();
                break;
            case 3:
                return $this->getInititemnbr();
                break;
            case 4:
                return $this->getPotddesc1();
                break;
            case 5:
                return $this->getPotddesc2();
                break;
            case 6:
                return $this->getPotdvenditemnbr();
                break;
            case 7:
                return $this->getIntbuompur();
                break;
            case 8:
                return $this->getPotdref();
                break;
            case 9:
                return $this->getPotdqtyord();
                break;
            case 10:
                return $this->getPotdqtyrec();
                break;
            case 11:
                return $this->getPotdpurchunitcost();
                break;
            case 12:
                return $this->getPotdpurchtotcost();
                break;
            case 13:
                return $this->getPotdglacct();
                break;
            case 14:
                return $this->getPotdclos();
                break;
            case 15:
                return $this->getPotdshopminutes();
                break;
            case 16:
                return $this->getPotdtype();
                break;
            case 17:
                return $this->getPotdforeigncost();
                break;
            case 18:
                return $this->getPotdforeigncosttot();
                break;
            case 19:
                return $this->getPotdspecordr();
                break;
            case 20:
                return $this->getPotdprodunitcost();
                break;
            case 21:
                return $this->getPotdbaseunitcost();
                break;
            case 22:
                return $this->getPotdbin();
                break;
            case 23:
                return $this->getPotdfabreturnscrap();
                break;
            case 24:
                return $this->getPotdrfbatch();
                break;
            case 25:
                return $this->getPotdrevision();
                break;
            case 26:
                return $this->getPotdlandunitcost();
                break;
            case 27:
                return $this->getPotdnbrofcases();
                break;
            case 28:
                return $this->getPotdtariffcost();
                break;
            case 29:
                return $this->getPotdshopcost();
                break;
            case 30:
                return $this->getDateupdtd();
                break;
            case 31:
                return $this->getTimeupdtd();
                break;
            case 32:
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

        if (isset($alreadyDumpedObjects['PurchaseOrderDetailReceiving'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PurchaseOrderDetailReceiving'][$this->hashCode()] = true;
        $keys = PurchaseOrderDetailReceivingTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPothnbr(),
            $keys[1] => $this->getPotdline(),
            $keys[2] => $this->getPotdseq(),
            $keys[3] => $this->getInititemnbr(),
            $keys[4] => $this->getPotddesc1(),
            $keys[5] => $this->getPotddesc2(),
            $keys[6] => $this->getPotdvenditemnbr(),
            $keys[7] => $this->getIntbuompur(),
            $keys[8] => $this->getPotdref(),
            $keys[9] => $this->getPotdqtyord(),
            $keys[10] => $this->getPotdqtyrec(),
            $keys[11] => $this->getPotdpurchunitcost(),
            $keys[12] => $this->getPotdpurchtotcost(),
            $keys[13] => $this->getPotdglacct(),
            $keys[14] => $this->getPotdclos(),
            $keys[15] => $this->getPotdshopminutes(),
            $keys[16] => $this->getPotdtype(),
            $keys[17] => $this->getPotdforeigncost(),
            $keys[18] => $this->getPotdforeigncosttot(),
            $keys[19] => $this->getPotdspecordr(),
            $keys[20] => $this->getPotdprodunitcost(),
            $keys[21] => $this->getPotdbaseunitcost(),
            $keys[22] => $this->getPotdbin(),
            $keys[23] => $this->getPotdfabreturnscrap(),
            $keys[24] => $this->getPotdrfbatch(),
            $keys[25] => $this->getPotdrevision(),
            $keys[26] => $this->getPotdlandunitcost(),
            $keys[27] => $this->getPotdnbrofcases(),
            $keys[28] => $this->getPotdtariffcost(),
            $keys[29] => $this->getPotdshopcost(),
            $keys[30] => $this->getDateupdtd(),
            $keys[31] => $this->getTimeupdtd(),
            $keys[32] => $this->getDummy(),
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
            if (null !== $this->aPoReceivingHead) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'poReceivingHead';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_tran_head';
                        break;
                    default:
                        $key = 'PoReceivingHead';
                }

                $result[$key] = $this->aPoReceivingHead->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPurchaseOrderDetail) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetail';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_detail';
                        break;
                    default:
                        $key = 'PurchaseOrderDetail';
                }

                $result[$key] = $this->aPurchaseOrderDetail->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->aUnitofMeasureSale) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'unitofMeasureSale';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_uom_sale';
                        break;
                    default:
                        $key = 'UnitofMeasureSale';
                }

                $result[$key] = $this->aUnitofMeasureSale->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\PurchaseOrderDetailReceiving
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = PurchaseOrderDetailReceivingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\PurchaseOrderDetailReceiving
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPothnbr($value);
                break;
            case 1:
                $this->setPotdline($value);
                break;
            case 2:
                $this->setPotdseq($value);
                break;
            case 3:
                $this->setInititemnbr($value);
                break;
            case 4:
                $this->setPotddesc1($value);
                break;
            case 5:
                $this->setPotddesc2($value);
                break;
            case 6:
                $this->setPotdvenditemnbr($value);
                break;
            case 7:
                $this->setIntbuompur($value);
                break;
            case 8:
                $this->setPotdref($value);
                break;
            case 9:
                $this->setPotdqtyord($value);
                break;
            case 10:
                $this->setPotdqtyrec($value);
                break;
            case 11:
                $this->setPotdpurchunitcost($value);
                break;
            case 12:
                $this->setPotdpurchtotcost($value);
                break;
            case 13:
                $this->setPotdglacct($value);
                break;
            case 14:
                $this->setPotdclos($value);
                break;
            case 15:
                $this->setPotdshopminutes($value);
                break;
            case 16:
                $this->setPotdtype($value);
                break;
            case 17:
                $this->setPotdforeigncost($value);
                break;
            case 18:
                $this->setPotdforeigncosttot($value);
                break;
            case 19:
                $this->setPotdspecordr($value);
                break;
            case 20:
                $this->setPotdprodunitcost($value);
                break;
            case 21:
                $this->setPotdbaseunitcost($value);
                break;
            case 22:
                $this->setPotdbin($value);
                break;
            case 23:
                $this->setPotdfabreturnscrap($value);
                break;
            case 24:
                $this->setPotdrfbatch($value);
                break;
            case 25:
                $this->setPotdrevision($value);
                break;
            case 26:
                $this->setPotdlandunitcost($value);
                break;
            case 27:
                $this->setPotdnbrofcases($value);
                break;
            case 28:
                $this->setPotdtariffcost($value);
                break;
            case 29:
                $this->setPotdshopcost($value);
                break;
            case 30:
                $this->setDateupdtd($value);
                break;
            case 31:
                $this->setTimeupdtd($value);
                break;
            case 32:
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
        $keys = PurchaseOrderDetailReceivingTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPothnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPotdline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPotdseq($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInititemnbr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPotddesc1($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPotddesc2($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPotdvenditemnbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIntbuompur($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPotdref($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPotdqtyord($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPotdqtyrec($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPotdpurchunitcost($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPotdpurchtotcost($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPotdglacct($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPotdclos($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPotdshopminutes($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPotdtype($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPotdforeigncost($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPotdforeigncosttot($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setPotdspecordr($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setPotdprodunitcost($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setPotdbaseunitcost($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setPotdbin($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setPotdfabreturnscrap($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setPotdrfbatch($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setPotdrevision($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setPotdlandunitcost($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setPotdnbrofcases($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setPotdtariffcost($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setPotdshopcost($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setDateupdtd($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setTimeupdtd($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setDummy($arr[$keys[32]]);
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
     * @return $this|\PurchaseOrderDetailReceiving The current object, for fluid interface
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
        $criteria = new Criteria(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);

        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $this->pothnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $this->potdline);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, $this->potdseq);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC1)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC1, $this->potddesc1);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC2)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC2, $this->potddesc2);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDVENDITEMNBR)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDVENDITEMNBR, $this->potdvenditemnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR, $this->intbuompur);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDREF)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDREF, $this->potdref);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD, $this->potdqtyord);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC, $this->potdqtyrec);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST, $this->potdpurchunitcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST, $this->potdpurchtotcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDGLACCT)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDGLACCT, $this->potdglacct);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDCLOS)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDCLOS, $this->potdclos);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES, $this->potdshopminutes);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDTYPE)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDTYPE, $this->potdtype);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST, $this->potdforeigncost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT, $this->potdforeigncosttot);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDSPECORDR)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDSPECORDR, $this->potdspecordr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST, $this->potdprodunitcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST, $this->potdbaseunitcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDBIN)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDBIN, $this->potdbin);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDFABRETURNSCRAP)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDFABRETURNSCRAP, $this->potdfabreturnscrap);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDRFBATCH)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDRFBATCH, $this->potdrfbatch);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDREVISION)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDREVISION, $this->potdrevision);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST, $this->potdlandunitcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES, $this->potdnbrofcases);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST, $this->potdtariffcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST, $this->potdshopcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_DATEUPDTD)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_TIMEUPDTD)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceivingTableMap::COL_DUMMY)) {
            $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildPurchaseOrderDetailReceivingQuery::create();
        $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $this->pothnbr);
        $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $this->potdline);
        $criteria->add(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, $this->potdseq);

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
        $validPk = null !== $this->getPothnbr() &&
            null !== $this->getPotdline() &&
            null !== $this->getPotdseq();

        $validPrimaryKeyFKs = 4;
        $primaryKeyFKs = [];

        //relation purchaseorder to table po_head
        if ($this->aPurchaseOrder && $hash = spl_object_hash($this->aPurchaseOrder)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation poreceiving to table po_tran_head
        if ($this->aPoReceivingHead && $hash = spl_object_hash($this->aPoReceivingHead)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation podetail to table po_detail
        if ($this->aPurchaseOrderDetail && $hash = spl_object_hash($this->aPurchaseOrderDetail)) {
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
        $pks[0] = $this->getPothnbr();
        $pks[1] = $this->getPotdline();
        $pks[2] = $this->getPotdseq();

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
        $this->setPothnbr($keys[0]);
        $this->setPotdline($keys[1]);
        $this->setPotdseq($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getPothnbr()) && (null === $this->getPotdline()) && (null === $this->getPotdseq());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \PurchaseOrderDetailReceiving (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPothnbr($this->getPothnbr());
        $copyObj->setPotdline($this->getPotdline());
        $copyObj->setPotdseq($this->getPotdseq());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setPotddesc1($this->getPotddesc1());
        $copyObj->setPotddesc2($this->getPotddesc2());
        $copyObj->setPotdvenditemnbr($this->getPotdvenditemnbr());
        $copyObj->setIntbuompur($this->getIntbuompur());
        $copyObj->setPotdref($this->getPotdref());
        $copyObj->setPotdqtyord($this->getPotdqtyord());
        $copyObj->setPotdqtyrec($this->getPotdqtyrec());
        $copyObj->setPotdpurchunitcost($this->getPotdpurchunitcost());
        $copyObj->setPotdpurchtotcost($this->getPotdpurchtotcost());
        $copyObj->setPotdglacct($this->getPotdglacct());
        $copyObj->setPotdclos($this->getPotdclos());
        $copyObj->setPotdshopminutes($this->getPotdshopminutes());
        $copyObj->setPotdtype($this->getPotdtype());
        $copyObj->setPotdforeigncost($this->getPotdforeigncost());
        $copyObj->setPotdforeigncosttot($this->getPotdforeigncosttot());
        $copyObj->setPotdspecordr($this->getPotdspecordr());
        $copyObj->setPotdprodunitcost($this->getPotdprodunitcost());
        $copyObj->setPotdbaseunitcost($this->getPotdbaseunitcost());
        $copyObj->setPotdbin($this->getPotdbin());
        $copyObj->setPotdfabreturnscrap($this->getPotdfabreturnscrap());
        $copyObj->setPotdrfbatch($this->getPotdrfbatch());
        $copyObj->setPotdrevision($this->getPotdrevision());
        $copyObj->setPotdlandunitcost($this->getPotdlandunitcost());
        $copyObj->setPotdnbrofcases($this->getPotdnbrofcases());
        $copyObj->setPotdtariffcost($this->getPotdtariffcost());
        $copyObj->setPotdshopcost($this->getPotdshopcost());
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
     * @return \PurchaseOrderDetailReceiving Clone of current object.
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
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
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

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildPurchaseOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetailReceiving($this);
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
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPurchaseOrder->addPurchaseOrderDetailReceivings($this);
             */
        }

        return $this->aPurchaseOrder;
    }

    /**
     * Declares an association between this object and a ChildPoReceivingHead object.
     *
     * @param  ChildPoReceivingHead $v
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPoReceivingHead(ChildPoReceivingHead $v = null)
    {
        if ($v === null) {
            $this->setPothnbr('');
        } else {
            $this->setPothnbr($v->getPothnbr());
        }

        $this->aPoReceivingHead = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildPoReceivingHead object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetailReceiving($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildPoReceivingHead object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildPoReceivingHead The associated ChildPoReceivingHead object.
     * @throws PropelException
     */
    public function getPoReceivingHead(ConnectionInterface $con = null)
    {
        if ($this->aPoReceivingHead === null && (($this->pothnbr !== "" && $this->pothnbr !== null))) {
            $this->aPoReceivingHead = ChildPoReceivingHeadQuery::create()->findPk($this->pothnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPoReceivingHead->addPurchaseOrderDetailReceivings($this);
             */
        }

        return $this->aPoReceivingHead;
    }

    /**
     * Declares an association between this object and a ChildPurchaseOrderDetail object.
     *
     * @param  ChildPurchaseOrderDetail $v
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPurchaseOrderDetail(ChildPurchaseOrderDetail $v = null)
    {
        if ($v === null) {
            $this->setPothnbr('');
        } else {
            $this->setPothnbr($v->getPohdnbr());
        }

        if ($v === null) {
            $this->setPotdline(0);
        } else {
            $this->setPotdline($v->getPodtline());
        }

        $this->aPurchaseOrderDetail = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildPurchaseOrderDetail object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetailReceiving($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildPurchaseOrderDetail object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildPurchaseOrderDetail The associated ChildPurchaseOrderDetail object.
     * @throws PropelException
     */
    public function getPurchaseOrderDetail(ConnectionInterface $con = null)
    {
        if ($this->aPurchaseOrderDetail === null && (($this->pothnbr !== "" && $this->pothnbr !== null) && $this->potdline != 0)) {
            $this->aPurchaseOrderDetail = ChildPurchaseOrderDetailQuery::create()->findPk(array($this->pothnbr, $this->potdline), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPurchaseOrderDetail->addPurchaseOrderDetailReceivings($this);
             */
        }

        return $this->aPurchaseOrderDetail;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr(NULL);
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetailReceiving($this);
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
                $this->aItemMasterItem->addPurchaseOrderDetailReceivings($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildUnitofMeasureSale object.
     *
     * @param  ChildUnitofMeasureSale $v
     * @return $this|\PurchaseOrderDetailReceiving The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUnitofMeasureSale(ChildUnitofMeasureSale $v = null)
    {
        if ($v === null) {
            $this->setIntbuompur(NULL);
        } else {
            $this->setIntbuompur($v->getIntbuomsale());
        }

        $this->aUnitofMeasureSale = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUnitofMeasureSale object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetailReceiving($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildUnitofMeasureSale object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildUnitofMeasureSale The associated ChildUnitofMeasureSale object.
     * @throws PropelException
     */
    public function getUnitofMeasureSale(ConnectionInterface $con = null)
    {
        if ($this->aUnitofMeasureSale === null && (($this->intbuompur !== "" && $this->intbuompur !== null))) {
            $this->aUnitofMeasureSale = ChildUnitofMeasureSaleQuery::create()->findPk($this->intbuompur, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUnitofMeasureSale->addPurchaseOrderDetailReceivings($this);
             */
        }

        return $this->aUnitofMeasureSale;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aPurchaseOrder) {
            $this->aPurchaseOrder->removePurchaseOrderDetailReceiving($this);
        }
        if (null !== $this->aPoReceivingHead) {
            $this->aPoReceivingHead->removePurchaseOrderDetailReceiving($this);
        }
        if (null !== $this->aPurchaseOrderDetail) {
            $this->aPurchaseOrderDetail->removePurchaseOrderDetailReceiving($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removePurchaseOrderDetailReceiving($this);
        }
        if (null !== $this->aUnitofMeasureSale) {
            $this->aUnitofMeasureSale->removePurchaseOrderDetailReceiving($this);
        }
        $this->pothnbr = null;
        $this->potdline = null;
        $this->potdseq = null;
        $this->inititemnbr = null;
        $this->potddesc1 = null;
        $this->potddesc2 = null;
        $this->potdvenditemnbr = null;
        $this->intbuompur = null;
        $this->potdref = null;
        $this->potdqtyord = null;
        $this->potdqtyrec = null;
        $this->potdpurchunitcost = null;
        $this->potdpurchtotcost = null;
        $this->potdglacct = null;
        $this->potdclos = null;
        $this->potdshopminutes = null;
        $this->potdtype = null;
        $this->potdforeigncost = null;
        $this->potdforeigncosttot = null;
        $this->potdspecordr = null;
        $this->potdprodunitcost = null;
        $this->potdbaseunitcost = null;
        $this->potdbin = null;
        $this->potdfabreturnscrap = null;
        $this->potdrfbatch = null;
        $this->potdrevision = null;
        $this->potdlandunitcost = null;
        $this->potdnbrofcases = null;
        $this->potdtariffcost = null;
        $this->potdshopcost = null;
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

        $this->aPurchaseOrder = null;
        $this->aPoReceivingHead = null;
        $this->aPurchaseOrderDetail = null;
        $this->aItemMasterItem = null;
        $this->aUnitofMeasureSale = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PurchaseOrderDetailReceivingTableMap::DEFAULT_STRING_FORMAT);
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
