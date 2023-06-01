<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \PoReceivingHead as ChildPoReceivingHead;
use \PoReceivingHeadQuery as ChildPoReceivingHeadQuery;
use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderDetail as ChildPurchaseOrderDetail;
use \PurchaseOrderDetailLotReceivingQuery as ChildPurchaseOrderDetailLotReceivingQuery;
use \PurchaseOrderDetailQuery as ChildPurchaseOrderDetailQuery;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailLotReceivingTableMap;
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
 * Base class that represents a row from the 'po_tran_lot_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class PurchaseOrderDetailLotReceiving implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\PurchaseOrderDetailLotReceivingTableMap';


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
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the potslotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $potslotser;

    /**
     * The value for the potsbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $potsbin;

    /**
     * The value for the potsqtyrec field.
     *
     * @var        string
     */
    protected $potsqtyrec;

    /**
     * The value for the potsqtyallo field.
     *
     * @var        string
     */
    protected $potsqtyallo;

    /**
     * The value for the potscases field.
     *
     * @var        int
     */
    protected $potscases;

    /**
     * The value for the potstag field.
     *
     * @var        int
     */
    protected $potstag;

    /**
     * The value for the potsinspctlvl field.
     *
     * @var        string
     */
    protected $potsinspctlvl;

    /**
     * The value for the potslotref field.
     *
     * @var        string
     */
    protected $potslotref;

    /**
     * The value for the potsputtake field.
     *
     * @var        string
     */
    protected $potsputtake;

    /**
     * The value for the potslandunitcost field.
     *
     * @var        string
     */
    protected $potslandunitcost;

    /**
     * The value for the potsfabcostvari field.
     *
     * @var        string
     */
    protected $potsfabcostvari;

    /**
     * The value for the potserbatch field.
     *
     * @var        string
     */
    protected $potserbatch;

    /**
     * The value for the potserbatchtime field.
     *
     * @var        string
     */
    protected $potserbatchtime;

    /**
     * The value for the potsexpiredatecd field.
     *
     * @var        string
     */
    protected $potsexpiredatecd;

    /**
     * The value for the potsexpiredate field.
     *
     * @var        string
     */
    protected $potsexpiredate;

    /**
     * The value for the potstariffcost field.
     *
     * @var        string
     */
    protected $potstariffcost;

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
        $this->inititemnbr = '';
        $this->potslotser = '';
        $this->potsbin = '';
    }

    /**
     * Initializes internal state of Base\PurchaseOrderDetailLotReceiving object.
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
     * Compares this with another <code>PurchaseOrderDetailLotReceiving</code> instance.  If
     * <code>obj</code> is an instance of <code>PurchaseOrderDetailLotReceiving</code>, delegates to
     * <code>equals(PurchaseOrderDetailLotReceiving)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|PurchaseOrderDetailLotReceiving The current object, for fluid interface
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
     * Get the [potslotser] column value.
     *
     * @return string
     */
    public function getPotslotser()
    {
        return $this->potslotser;
    }

    /**
     * Get the [potsbin] column value.
     *
     * @return string
     */
    public function getPotsbin()
    {
        return $this->potsbin;
    }

    /**
     * Get the [potsqtyrec] column value.
     *
     * @return string
     */
    public function getPotsqtyrec()
    {
        return $this->potsqtyrec;
    }

    /**
     * Get the [potsqtyallo] column value.
     *
     * @return string
     */
    public function getPotsqtyallo()
    {
        return $this->potsqtyallo;
    }

    /**
     * Get the [potscases] column value.
     *
     * @return int
     */
    public function getPotscases()
    {
        return $this->potscases;
    }

    /**
     * Get the [potstag] column value.
     *
     * @return int
     */
    public function getPotstag()
    {
        return $this->potstag;
    }

    /**
     * Get the [potsinspctlvl] column value.
     *
     * @return string
     */
    public function getPotsinspctlvl()
    {
        return $this->potsinspctlvl;
    }

    /**
     * Get the [potslotref] column value.
     *
     * @return string
     */
    public function getPotslotref()
    {
        return $this->potslotref;
    }

    /**
     * Get the [potsputtake] column value.
     *
     * @return string
     */
    public function getPotsputtake()
    {
        return $this->potsputtake;
    }

    /**
     * Get the [potslandunitcost] column value.
     *
     * @return string
     */
    public function getPotslandunitcost()
    {
        return $this->potslandunitcost;
    }

    /**
     * Get the [potsfabcostvari] column value.
     *
     * @return string
     */
    public function getPotsfabcostvari()
    {
        return $this->potsfabcostvari;
    }

    /**
     * Get the [potserbatch] column value.
     *
     * @return string
     */
    public function getPotserbatch()
    {
        return $this->potserbatch;
    }

    /**
     * Get the [potserbatchtime] column value.
     *
     * @return string
     */
    public function getPotserbatchtime()
    {
        return $this->potserbatchtime;
    }

    /**
     * Get the [potsexpiredatecd] column value.
     *
     * @return string
     */
    public function getPotsexpiredatecd()
    {
        return $this->potsexpiredatecd;
    }

    /**
     * Get the [potsexpiredate] column value.
     *
     * @return string
     */
    public function getPotsexpiredate()
    {
        return $this->potsexpiredate;
    }

    /**
     * Get the [potstariffcost] column value.
     *
     * @return string
     */
    public function getPotstariffcost()
    {
        return $this->potstariffcost;
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
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPothnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pothnbr !== $v) {
            $this->pothnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR] = true;
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
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotdline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potdline !== $v) {
            $this->potdline = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE] = true;
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
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotdseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potdseq !== $v) {
            $this->potdseq = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ] = true;
        }

        return $this;
    } // setPotdseq()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [potslotser] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotslotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potslotser !== $v) {
            $this->potslotser = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER] = true;
        }

        return $this;
    } // setPotslotser()

    /**
     * Set the value of [potsbin] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotsbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potsbin !== $v) {
            $this->potsbin = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN] = true;
        }

        return $this;
    } // setPotsbin()

    /**
     * Set the value of [potsqtyrec] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotsqtyrec($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potsqtyrec !== $v) {
            $this->potsqtyrec = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC] = true;
        }

        return $this;
    } // setPotsqtyrec()

    /**
     * Set the value of [potsqtyallo] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotsqtyallo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potsqtyallo !== $v) {
            $this->potsqtyallo = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO] = true;
        }

        return $this;
    } // setPotsqtyallo()

    /**
     * Set the value of [potscases] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotscases($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potscases !== $v) {
            $this->potscases = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES] = true;
        }

        return $this;
    } // setPotscases()

    /**
     * Set the value of [potstag] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotstag($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potstag !== $v) {
            $this->potstag = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG] = true;
        }

        return $this;
    } // setPotstag()

    /**
     * Set the value of [potsinspctlvl] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotsinspctlvl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potsinspctlvl !== $v) {
            $this->potsinspctlvl = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL] = true;
        }

        return $this;
    } // setPotsinspctlvl()

    /**
     * Set the value of [potslotref] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotslotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potslotref !== $v) {
            $this->potslotref = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF] = true;
        }

        return $this;
    } // setPotslotref()

    /**
     * Set the value of [potsputtake] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotsputtake($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potsputtake !== $v) {
            $this->potsputtake = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE] = true;
        }

        return $this;
    } // setPotsputtake()

    /**
     * Set the value of [potslandunitcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotslandunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potslandunitcost !== $v) {
            $this->potslandunitcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST] = true;
        }

        return $this;
    } // setPotslandunitcost()

    /**
     * Set the value of [potsfabcostvari] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotsfabcostvari($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potsfabcostvari !== $v) {
            $this->potsfabcostvari = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI] = true;
        }

        return $this;
    } // setPotsfabcostvari()

    /**
     * Set the value of [potserbatch] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotserbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potserbatch !== $v) {
            $this->potserbatch = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH] = true;
        }

        return $this;
    } // setPotserbatch()

    /**
     * Set the value of [potserbatchtime] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotserbatchtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potserbatchtime !== $v) {
            $this->potserbatchtime = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME] = true;
        }

        return $this;
    } // setPotserbatchtime()

    /**
     * Set the value of [potsexpiredatecd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotsexpiredatecd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potsexpiredatecd !== $v) {
            $this->potsexpiredatecd = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD] = true;
        }

        return $this;
    } // setPotsexpiredatecd()

    /**
     * Set the value of [potsexpiredate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotsexpiredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potsexpiredate !== $v) {
            $this->potsexpiredate = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE] = true;
        }

        return $this;
    } // setPotsexpiredate()

    /**
     * Set the value of [potstariffcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setPotstariffcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potstariffcost !== $v) {
            $this->potstariffcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST] = true;
        }

        return $this;
    } // setPotstariffcost()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY] = true;
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

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->potslotser !== '') {
                return false;
            }

            if ($this->potsbin !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pothnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potdseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potslotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potslotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potsbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potsbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potsqtyrec', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potsqtyrec = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potsqtyallo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potsqtyallo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potscases', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potscases = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potstag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potstag = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potsinspctlvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potsinspctlvl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potslotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potslotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potsputtake', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potsputtake = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potslandunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potslandunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potsfabcostvari', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potsfabcostvari = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potserbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potserbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potserbatchtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potserbatchtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potsexpiredatecd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potsexpiredatecd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potsexpiredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potsexpiredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Potstariffcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potstariffcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : PurchaseOrderDetailLotReceivingTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = PurchaseOrderDetailLotReceivingTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\PurchaseOrderDetailLotReceiving'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see PurchaseOrderDetailLotReceiving::setDeleted()
     * @see PurchaseOrderDetailLotReceiving::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildPurchaseOrderDetailLotReceivingQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
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
                PurchaseOrderDetailLotReceivingTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PothNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE)) {
            $modifiedColumns[':p' . $index++]  = 'PotdLine';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'PotdSeq';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'PotsLotSer';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN)) {
            $modifiedColumns[':p' . $index++]  = 'PotsBin';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC)) {
            $modifiedColumns[':p' . $index++]  = 'PotsQtyRec';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO)) {
            $modifiedColumns[':p' . $index++]  = 'PotsQtyAllo';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES)) {
            $modifiedColumns[':p' . $index++]  = 'PotsCases';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG)) {
            $modifiedColumns[':p' . $index++]  = 'PotsTag';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL)) {
            $modifiedColumns[':p' . $index++]  = 'PotsInspctLvl';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'PotsLotRef';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE)) {
            $modifiedColumns[':p' . $index++]  = 'PotsPutTake';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotsLandUnitCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI)) {
            $modifiedColumns[':p' . $index++]  = 'PotsFabCostVari';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'PotsErBatch';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME)) {
            $modifiedColumns[':p' . $index++]  = 'PotsErBatchTime';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD)) {
            $modifiedColumns[':p' . $index++]  = 'PotsExpireDateCd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotsExpireDate';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotsTariffCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO po_tran_lot_det (%s) VALUES (%s)',
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
                    case 'PotsLotSer':
                        $stmt->bindValue($identifier, $this->potslotser, PDO::PARAM_STR);
                        break;
                    case 'PotsBin':
                        $stmt->bindValue($identifier, $this->potsbin, PDO::PARAM_STR);
                        break;
                    case 'PotsQtyRec':
                        $stmt->bindValue($identifier, $this->potsqtyrec, PDO::PARAM_STR);
                        break;
                    case 'PotsQtyAllo':
                        $stmt->bindValue($identifier, $this->potsqtyallo, PDO::PARAM_STR);
                        break;
                    case 'PotsCases':
                        $stmt->bindValue($identifier, $this->potscases, PDO::PARAM_INT);
                        break;
                    case 'PotsTag':
                        $stmt->bindValue($identifier, $this->potstag, PDO::PARAM_INT);
                        break;
                    case 'PotsInspctLvl':
                        $stmt->bindValue($identifier, $this->potsinspctlvl, PDO::PARAM_STR);
                        break;
                    case 'PotsLotRef':
                        $stmt->bindValue($identifier, $this->potslotref, PDO::PARAM_STR);
                        break;
                    case 'PotsPutTake':
                        $stmt->bindValue($identifier, $this->potsputtake, PDO::PARAM_STR);
                        break;
                    case 'PotsLandUnitCost':
                        $stmt->bindValue($identifier, $this->potslandunitcost, PDO::PARAM_STR);
                        break;
                    case 'PotsFabCostVari':
                        $stmt->bindValue($identifier, $this->potsfabcostvari, PDO::PARAM_STR);
                        break;
                    case 'PotsErBatch':
                        $stmt->bindValue($identifier, $this->potserbatch, PDO::PARAM_STR);
                        break;
                    case 'PotsErBatchTime':
                        $stmt->bindValue($identifier, $this->potserbatchtime, PDO::PARAM_STR);
                        break;
                    case 'PotsExpireDateCd':
                        $stmt->bindValue($identifier, $this->potsexpiredatecd, PDO::PARAM_STR);
                        break;
                    case 'PotsExpireDate':
                        $stmt->bindValue($identifier, $this->potsexpiredate, PDO::PARAM_STR);
                        break;
                    case 'PotsTariffCost':
                        $stmt->bindValue($identifier, $this->potstariffcost, PDO::PARAM_STR);
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
        $pos = PurchaseOrderDetailLotReceivingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPotslotser();
                break;
            case 5:
                return $this->getPotsbin();
                break;
            case 6:
                return $this->getPotsqtyrec();
                break;
            case 7:
                return $this->getPotsqtyallo();
                break;
            case 8:
                return $this->getPotscases();
                break;
            case 9:
                return $this->getPotstag();
                break;
            case 10:
                return $this->getPotsinspctlvl();
                break;
            case 11:
                return $this->getPotslotref();
                break;
            case 12:
                return $this->getPotsputtake();
                break;
            case 13:
                return $this->getPotslandunitcost();
                break;
            case 14:
                return $this->getPotsfabcostvari();
                break;
            case 15:
                return $this->getPotserbatch();
                break;
            case 16:
                return $this->getPotserbatchtime();
                break;
            case 17:
                return $this->getPotsexpiredatecd();
                break;
            case 18:
                return $this->getPotsexpiredate();
                break;
            case 19:
                return $this->getPotstariffcost();
                break;
            case 20:
                return $this->getDateupdtd();
                break;
            case 21:
                return $this->getTimeupdtd();
                break;
            case 22:
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

        if (isset($alreadyDumpedObjects['PurchaseOrderDetailLotReceiving'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PurchaseOrderDetailLotReceiving'][$this->hashCode()] = true;
        $keys = PurchaseOrderDetailLotReceivingTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPothnbr(),
            $keys[1] => $this->getPotdline(),
            $keys[2] => $this->getPotdseq(),
            $keys[3] => $this->getInititemnbr(),
            $keys[4] => $this->getPotslotser(),
            $keys[5] => $this->getPotsbin(),
            $keys[6] => $this->getPotsqtyrec(),
            $keys[7] => $this->getPotsqtyallo(),
            $keys[8] => $this->getPotscases(),
            $keys[9] => $this->getPotstag(),
            $keys[10] => $this->getPotsinspctlvl(),
            $keys[11] => $this->getPotslotref(),
            $keys[12] => $this->getPotsputtake(),
            $keys[13] => $this->getPotslandunitcost(),
            $keys[14] => $this->getPotsfabcostvari(),
            $keys[15] => $this->getPotserbatch(),
            $keys[16] => $this->getPotserbatchtime(),
            $keys[17] => $this->getPotsexpiredatecd(),
            $keys[18] => $this->getPotsexpiredate(),
            $keys[19] => $this->getPotstariffcost(),
            $keys[20] => $this->getDateupdtd(),
            $keys[21] => $this->getTimeupdtd(),
            $keys[22] => $this->getDummy(),
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
     * @return $this|\PurchaseOrderDetailLotReceiving
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = PurchaseOrderDetailLotReceivingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\PurchaseOrderDetailLotReceiving
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
                $this->setPotslotser($value);
                break;
            case 5:
                $this->setPotsbin($value);
                break;
            case 6:
                $this->setPotsqtyrec($value);
                break;
            case 7:
                $this->setPotsqtyallo($value);
                break;
            case 8:
                $this->setPotscases($value);
                break;
            case 9:
                $this->setPotstag($value);
                break;
            case 10:
                $this->setPotsinspctlvl($value);
                break;
            case 11:
                $this->setPotslotref($value);
                break;
            case 12:
                $this->setPotsputtake($value);
                break;
            case 13:
                $this->setPotslandunitcost($value);
                break;
            case 14:
                $this->setPotsfabcostvari($value);
                break;
            case 15:
                $this->setPotserbatch($value);
                break;
            case 16:
                $this->setPotserbatchtime($value);
                break;
            case 17:
                $this->setPotsexpiredatecd($value);
                break;
            case 18:
                $this->setPotsexpiredate($value);
                break;
            case 19:
                $this->setPotstariffcost($value);
                break;
            case 20:
                $this->setDateupdtd($value);
                break;
            case 21:
                $this->setTimeupdtd($value);
                break;
            case 22:
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
        $keys = PurchaseOrderDetailLotReceivingTableMap::getFieldNames($keyType);

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
            $this->setPotslotser($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPotsbin($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPotsqtyrec($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPotsqtyallo($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPotscases($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPotstag($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPotsinspctlvl($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPotslotref($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPotsputtake($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPotslandunitcost($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPotsfabcostvari($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPotserbatch($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPotserbatchtime($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPotsexpiredatecd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPotsexpiredate($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setPotstariffcost($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDateupdtd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setTimeupdtd($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setDummy($arr[$keys[22]]);
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
     * @return $this|\PurchaseOrderDetailLotReceiving The current object, for fluid interface
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
        $criteria = new Criteria(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);

        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $this->pothnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $this->potdline);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $this->potdseq);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $this->potslotser);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $this->potsbin);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC, $this->potsqtyrec);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO, $this->potsqtyallo);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES, $this->potscases);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG, $this->potstag);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL, $this->potsinspctlvl);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF, $this->potslotref);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE, $this->potsputtake);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST, $this->potslandunitcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI, $this->potsfabcostvari);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH, $this->potserbatch);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME, $this->potserbatchtime);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD, $this->potsexpiredatecd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE, $this->potsexpiredate);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST, $this->potstariffcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY)) {
            $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildPurchaseOrderDetailLotReceivingQuery::create();
        $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $this->pothnbr);
        $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $this->potdline);
        $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $this->potdseq);
        $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $this->potslotser);
        $criteria->add(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $this->potsbin);

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
            null !== $this->getPotdseq() &&
            null !== $this->getInititemnbr() &&
            null !== $this->getPotslotser() &&
            null !== $this->getPotsbin();

        $validPrimaryKeyFKs = 5;
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
        $pks[0] = $this->getPothnbr();
        $pks[1] = $this->getPotdline();
        $pks[2] = $this->getPotdseq();
        $pks[3] = $this->getInititemnbr();
        $pks[4] = $this->getPotslotser();
        $pks[5] = $this->getPotsbin();

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
        $this->setInititemnbr($keys[3]);
        $this->setPotslotser($keys[4]);
        $this->setPotsbin($keys[5]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getPothnbr()) && (null === $this->getPotdline()) && (null === $this->getPotdseq()) && (null === $this->getInititemnbr()) && (null === $this->getPotslotser()) && (null === $this->getPotsbin());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \PurchaseOrderDetailLotReceiving (or compatible) type.
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
        $copyObj->setPotslotser($this->getPotslotser());
        $copyObj->setPotsbin($this->getPotsbin());
        $copyObj->setPotsqtyrec($this->getPotsqtyrec());
        $copyObj->setPotsqtyallo($this->getPotsqtyallo());
        $copyObj->setPotscases($this->getPotscases());
        $copyObj->setPotstag($this->getPotstag());
        $copyObj->setPotsinspctlvl($this->getPotsinspctlvl());
        $copyObj->setPotslotref($this->getPotslotref());
        $copyObj->setPotsputtake($this->getPotsputtake());
        $copyObj->setPotslandunitcost($this->getPotslandunitcost());
        $copyObj->setPotsfabcostvari($this->getPotsfabcostvari());
        $copyObj->setPotserbatch($this->getPotserbatch());
        $copyObj->setPotserbatchtime($this->getPotserbatchtime());
        $copyObj->setPotsexpiredatecd($this->getPotsexpiredatecd());
        $copyObj->setPotsexpiredate($this->getPotsexpiredate());
        $copyObj->setPotstariffcost($this->getPotstariffcost());
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
     * @return \PurchaseOrderDetailLotReceiving Clone of current object.
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
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
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
            $v->addPurchaseOrderDetailLotReceiving($this);
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
                $this->aPurchaseOrder->addPurchaseOrderDetailLotReceivings($this);
             */
        }

        return $this->aPurchaseOrder;
    }

    /**
     * Declares an association between this object and a ChildPoReceivingHead object.
     *
     * @param  ChildPoReceivingHead $v
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
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
            $v->addPurchaseOrderDetailLotReceiving($this);
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
                $this->aPoReceivingHead->addPurchaseOrderDetailLotReceivings($this);
             */
        }

        return $this->aPoReceivingHead;
    }

    /**
     * Declares an association between this object and a ChildPurchaseOrderDetail object.
     *
     * @param  ChildPurchaseOrderDetail $v
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
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
            $v->addPurchaseOrderDetailLotReceiving($this);
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
                $this->aPurchaseOrderDetail->addPurchaseOrderDetailLotReceivings($this);
             */
        }

        return $this->aPurchaseOrderDetail;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\PurchaseOrderDetailLotReceiving The current object (for fluent API support)
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
            $v->addPurchaseOrderDetailLotReceiving($this);
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
                $this->aItemMasterItem->addPurchaseOrderDetailLotReceivings($this);
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
        if (null !== $this->aPurchaseOrder) {
            $this->aPurchaseOrder->removePurchaseOrderDetailLotReceiving($this);
        }
        if (null !== $this->aPoReceivingHead) {
            $this->aPoReceivingHead->removePurchaseOrderDetailLotReceiving($this);
        }
        if (null !== $this->aPurchaseOrderDetail) {
            $this->aPurchaseOrderDetail->removePurchaseOrderDetailLotReceiving($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removePurchaseOrderDetailLotReceiving($this);
        }
        $this->pothnbr = null;
        $this->potdline = null;
        $this->potdseq = null;
        $this->inititemnbr = null;
        $this->potslotser = null;
        $this->potsbin = null;
        $this->potsqtyrec = null;
        $this->potsqtyallo = null;
        $this->potscases = null;
        $this->potstag = null;
        $this->potsinspctlvl = null;
        $this->potslotref = null;
        $this->potsputtake = null;
        $this->potslandunitcost = null;
        $this->potsfabcostvari = null;
        $this->potserbatch = null;
        $this->potserbatchtime = null;
        $this->potsexpiredatecd = null;
        $this->potsexpiredate = null;
        $this->potstariffcost = null;
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
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PurchaseOrderDetailLotReceivingTableMap::DEFAULT_STRING_FORMAT);
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
