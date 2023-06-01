<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderDetail as ChildPurchaseOrderDetail;
use \PurchaseOrderDetailQuery as ChildPurchaseOrderDetailQuery;
use \PurchaseOrderDetailReceiptQuery as ChildPurchaseOrderDetailReceiptQuery;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailReceiptTableMap;
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
 * Base class that represents a row from the 'po_receipt_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class PurchaseOrderDetailReceipt implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\PurchaseOrderDetailReceiptTableMap';


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
     * The value for the pohdnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pohdnbr;

    /**
     * The value for the podtline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $podtline;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the pordseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pordseq;

    /**
     * The value for the pordref field.
     *
     * @var        string
     */
    protected $pordref;

    /**
     * The value for the pordtrandate field.
     *
     * @var        string
     */
    protected $pordtrandate;

    /**
     * The value for the pordglpd field.
     *
     * @var        int
     */
    protected $pordglpd;

    /**
     * The value for the pordqtyrec field.
     *
     * @var        string
     */
    protected $pordqtyrec;

    /**
     * The value for the pordcosttot field.
     *
     * @var        string
     */
    protected $pordcosttot;

    /**
     * The value for the pordlandunitcost field.
     *
     * @var        string
     */
    protected $pordlandunitcost;

    /**
     * The value for the pordtariffcost field.
     *
     * @var        string
     */
    protected $pordtariffcost;

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
        $this->pohdnbr = '';
        $this->podtline = 0;
        $this->inititemnbr = '';
        $this->pordseq = 0;
    }

    /**
     * Initializes internal state of Base\PurchaseOrderDetailReceipt object.
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
     * Compares this with another <code>PurchaseOrderDetailReceipt</code> instance.  If
     * <code>obj</code> is an instance of <code>PurchaseOrderDetailReceipt</code>, delegates to
     * <code>equals(PurchaseOrderDetailReceipt)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|PurchaseOrderDetailReceipt The current object, for fluid interface
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
     * Get the [pohdnbr] column value.
     *
     * @return string
     */
    public function getPohdnbr()
    {
        return $this->pohdnbr;
    }

    /**
     * Get the [podtline] column value.
     *
     * @return int
     */
    public function getPodtline()
    {
        return $this->podtline;
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
     * Get the [pordseq] column value.
     *
     * @return int
     */
    public function getPordseq()
    {
        return $this->pordseq;
    }

    /**
     * Get the [pordref] column value.
     *
     * @return string
     */
    public function getPordref()
    {
        return $this->pordref;
    }

    /**
     * Get the [pordtrandate] column value.
     *
     * @return string
     */
    public function getPordtrandate()
    {
        return $this->pordtrandate;
    }

    /**
     * Get the [pordglpd] column value.
     *
     * @return int
     */
    public function getPordglpd()
    {
        return $this->pordglpd;
    }

    /**
     * Get the [pordqtyrec] column value.
     *
     * @return string
     */
    public function getPordqtyrec()
    {
        return $this->pordqtyrec;
    }

    /**
     * Get the [pordcosttot] column value.
     *
     * @return string
     */
    public function getPordcosttot()
    {
        return $this->pordcosttot;
    }

    /**
     * Get the [pordlandunitcost] column value.
     *
     * @return string
     */
    public function getPordlandunitcost()
    {
        return $this->pordlandunitcost;
    }

    /**
     * Get the [pordtariffcost] column value.
     *
     * @return string
     */
    public function getPordtariffcost()
    {
        return $this->pordtariffcost;
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
     * Set the value of [pohdnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPohdnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdnbr !== $v) {
            $this->pohdnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_POHDNBR] = true;
        }

        if ($this->aPurchaseOrder !== null && $this->aPurchaseOrder->getPohdnbr() !== $v) {
            $this->aPurchaseOrder = null;
        }

        if ($this->aPurchaseOrderDetail !== null && $this->aPurchaseOrderDetail->getPohdnbr() !== $v) {
            $this->aPurchaseOrderDetail = null;
        }

        return $this;
    } // setPohdnbr()

    /**
     * Set the value of [podtline] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPodtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->podtline !== $v) {
            $this->podtline = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PODTLINE] = true;
        }

        if ($this->aPurchaseOrderDetail !== null && $this->aPurchaseOrderDetail->getPodtline() !== $v) {
            $this->aPurchaseOrderDetail = null;
        }

        return $this;
    } // setPodtline()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [pordseq] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPordseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pordseq !== $v) {
            $this->pordseq = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ] = true;
        }

        return $this;
    } // setPordseq()

    /**
     * Set the value of [pordref] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPordref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pordref !== $v) {
            $this->pordref = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PORDREF] = true;
        }

        return $this;
    } // setPordref()

    /**
     * Set the value of [pordtrandate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPordtrandate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pordtrandate !== $v) {
            $this->pordtrandate = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PORDTRANDATE] = true;
        }

        return $this;
    } // setPordtrandate()

    /**
     * Set the value of [pordglpd] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPordglpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pordglpd !== $v) {
            $this->pordglpd = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD] = true;
        }

        return $this;
    } // setPordglpd()

    /**
     * Set the value of [pordqtyrec] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPordqtyrec($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pordqtyrec !== $v) {
            $this->pordqtyrec = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC] = true;
        }

        return $this;
    } // setPordqtyrec()

    /**
     * Set the value of [pordcosttot] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPordcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pordcosttot !== $v) {
            $this->pordcosttot = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT] = true;
        }

        return $this;
    } // setPordcosttot()

    /**
     * Set the value of [pordlandunitcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPordlandunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pordlandunitcost !== $v) {
            $this->pordlandunitcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST] = true;
        }

        return $this;
    } // setPordlandunitcost()

    /**
     * Set the value of [pordtariffcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setPordtariffcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pordtariffcost !== $v) {
            $this->pordtariffcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST] = true;
        }

        return $this;
    } // setPordtariffcost()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[PurchaseOrderDetailReceiptTableMap::COL_DUMMY] = true;
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
            if ($this->pohdnbr !== '') {
                return false;
            }

            if ($this->podtline !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->pordseq !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pordseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pordseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pordref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pordref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pordtrandate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pordtrandate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pordglpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pordglpd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pordqtyrec', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pordqtyrec = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pordcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pordcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pordlandunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pordlandunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Pordtariffcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pordtariffcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : PurchaseOrderDetailReceiptTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 14; // 14 = PurchaseOrderDetailReceiptTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\PurchaseOrderDetailReceipt'), 0, $e);
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
        if ($this->aPurchaseOrder !== null && $this->pohdnbr !== $this->aPurchaseOrder->getPohdnbr()) {
            $this->aPurchaseOrder = null;
        }
        if ($this->aPurchaseOrderDetail !== null && $this->pohdnbr !== $this->aPurchaseOrderDetail->getPohdnbr()) {
            $this->aPurchaseOrderDetail = null;
        }
        if ($this->aPurchaseOrderDetail !== null && $this->podtline !== $this->aPurchaseOrderDetail->getPodtline()) {
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
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildPurchaseOrderDetailReceiptQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPurchaseOrder = null;
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
     * @see PurchaseOrderDetailReceipt::setDeleted()
     * @see PurchaseOrderDetailReceipt::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildPurchaseOrderDetailReceiptQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
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
                PurchaseOrderDetailReceiptTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PohdNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtLine';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'PordSeq';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDREF)) {
            $modifiedColumns[':p' . $index++]  = 'PordRef';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDTRANDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PordTranDate';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD)) {
            $modifiedColumns[':p' . $index++]  = 'PordGlPd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC)) {
            $modifiedColumns[':p' . $index++]  = 'PordQtyRec';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'PordCostTot';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PordLandUnitCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PordTariffCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO po_receipt_det (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'PohdNbr':
                        $stmt->bindValue($identifier, $this->pohdnbr, PDO::PARAM_STR);
                        break;
                    case 'PodtLine':
                        $stmt->bindValue($identifier, $this->podtline, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'PordSeq':
                        $stmt->bindValue($identifier, $this->pordseq, PDO::PARAM_INT);
                        break;
                    case 'PordRef':
                        $stmt->bindValue($identifier, $this->pordref, PDO::PARAM_STR);
                        break;
                    case 'PordTranDate':
                        $stmt->bindValue($identifier, $this->pordtrandate, PDO::PARAM_STR);
                        break;
                    case 'PordGlPd':
                        $stmt->bindValue($identifier, $this->pordglpd, PDO::PARAM_INT);
                        break;
                    case 'PordQtyRec':
                        $stmt->bindValue($identifier, $this->pordqtyrec, PDO::PARAM_STR);
                        break;
                    case 'PordCostTot':
                        $stmt->bindValue($identifier, $this->pordcosttot, PDO::PARAM_STR);
                        break;
                    case 'PordLandUnitCost':
                        $stmt->bindValue($identifier, $this->pordlandunitcost, PDO::PARAM_STR);
                        break;
                    case 'PordTariffCost':
                        $stmt->bindValue($identifier, $this->pordtariffcost, PDO::PARAM_STR);
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
        $pos = PurchaseOrderDetailReceiptTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPohdnbr();
                break;
            case 1:
                return $this->getPodtline();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getPordseq();
                break;
            case 4:
                return $this->getPordref();
                break;
            case 5:
                return $this->getPordtrandate();
                break;
            case 6:
                return $this->getPordglpd();
                break;
            case 7:
                return $this->getPordqtyrec();
                break;
            case 8:
                return $this->getPordcosttot();
                break;
            case 9:
                return $this->getPordlandunitcost();
                break;
            case 10:
                return $this->getPordtariffcost();
                break;
            case 11:
                return $this->getDateupdtd();
                break;
            case 12:
                return $this->getTimeupdtd();
                break;
            case 13:
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

        if (isset($alreadyDumpedObjects['PurchaseOrderDetailReceipt'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PurchaseOrderDetailReceipt'][$this->hashCode()] = true;
        $keys = PurchaseOrderDetailReceiptTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPohdnbr(),
            $keys[1] => $this->getPodtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getPordseq(),
            $keys[4] => $this->getPordref(),
            $keys[5] => $this->getPordtrandate(),
            $keys[6] => $this->getPordglpd(),
            $keys[7] => $this->getPordqtyrec(),
            $keys[8] => $this->getPordcosttot(),
            $keys[9] => $this->getPordlandunitcost(),
            $keys[10] => $this->getPordtariffcost(),
            $keys[11] => $this->getDateupdtd(),
            $keys[12] => $this->getTimeupdtd(),
            $keys[13] => $this->getDummy(),
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
     * @return $this|\PurchaseOrderDetailReceipt
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = PurchaseOrderDetailReceiptTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\PurchaseOrderDetailReceipt
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPohdnbr($value);
                break;
            case 1:
                $this->setPodtline($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setPordseq($value);
                break;
            case 4:
                $this->setPordref($value);
                break;
            case 5:
                $this->setPordtrandate($value);
                break;
            case 6:
                $this->setPordglpd($value);
                break;
            case 7:
                $this->setPordqtyrec($value);
                break;
            case 8:
                $this->setPordcosttot($value);
                break;
            case 9:
                $this->setPordlandunitcost($value);
                break;
            case 10:
                $this->setPordtariffcost($value);
                break;
            case 11:
                $this->setDateupdtd($value);
                break;
            case 12:
                $this->setTimeupdtd($value);
                break;
            case 13:
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
        $keys = PurchaseOrderDetailReceiptTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPohdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPodtline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setPordseq($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPordref($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPordtrandate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPordglpd($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPordqtyrec($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPordcosttot($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPordlandunitcost($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPordtariffcost($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setDateupdtd($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setTimeupdtd($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setDummy($arr[$keys[13]]);
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
     * @return $this|\PurchaseOrderDetailReceipt The current object, for fluid interface
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
        $criteria = new Criteria(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);

        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $this->pohdnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $this->podtline);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, $this->pordseq);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDREF)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDREF, $this->pordref);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDTRANDATE)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDTRANDATE, $this->pordtrandate);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD, $this->pordglpd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC, $this->pordqtyrec);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT, $this->pordcosttot);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST, $this->pordlandunitcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST, $this->pordtariffcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_DATEUPDTD)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_TIMEUPDTD)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailReceiptTableMap::COL_DUMMY)) {
            $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildPurchaseOrderDetailReceiptQuery::create();
        $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $this->pohdnbr);
        $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $this->podtline);
        $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, $this->pordseq);

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
        $validPk = null !== $this->getPohdnbr() &&
            null !== $this->getPodtline() &&
            null !== $this->getInititemnbr() &&
            null !== $this->getPordseq();

        $validPrimaryKeyFKs = 4;
        $primaryKeyFKs = [];

        //relation purchaseorder to table po_head
        if ($this->aPurchaseOrder && $hash = spl_object_hash($this->aPurchaseOrder)) {
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
        $pks[0] = $this->getPohdnbr();
        $pks[1] = $this->getPodtline();
        $pks[2] = $this->getInititemnbr();
        $pks[3] = $this->getPordseq();

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
        $this->setPohdnbr($keys[0]);
        $this->setPodtline($keys[1]);
        $this->setInititemnbr($keys[2]);
        $this->setPordseq($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getPohdnbr()) && (null === $this->getPodtline()) && (null === $this->getInititemnbr()) && (null === $this->getPordseq());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \PurchaseOrderDetailReceipt (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPohdnbr($this->getPohdnbr());
        $copyObj->setPodtline($this->getPodtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setPordseq($this->getPordseq());
        $copyObj->setPordref($this->getPordref());
        $copyObj->setPordtrandate($this->getPordtrandate());
        $copyObj->setPordglpd($this->getPordglpd());
        $copyObj->setPordqtyrec($this->getPordqtyrec());
        $copyObj->setPordcosttot($this->getPordcosttot());
        $copyObj->setPordlandunitcost($this->getPordlandunitcost());
        $copyObj->setPordtariffcost($this->getPordtariffcost());
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
     * @return \PurchaseOrderDetailReceipt Clone of current object.
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
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPurchaseOrder(ChildPurchaseOrder $v = null)
    {
        if ($v === null) {
            $this->setPohdnbr('');
        } else {
            $this->setPohdnbr($v->getPohdnbr());
        }

        $this->aPurchaseOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildPurchaseOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetailReceipt($this);
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
        if ($this->aPurchaseOrder === null && (($this->pohdnbr !== "" && $this->pohdnbr !== null))) {
            $this->aPurchaseOrder = ChildPurchaseOrderQuery::create()->findPk($this->pohdnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPurchaseOrder->addPurchaseOrderDetailReceipts($this);
             */
        }

        return $this->aPurchaseOrder;
    }

    /**
     * Declares an association between this object and a ChildPurchaseOrderDetail object.
     *
     * @param  ChildPurchaseOrderDetail $v
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPurchaseOrderDetail(ChildPurchaseOrderDetail $v = null)
    {
        if ($v === null) {
            $this->setPohdnbr('');
        } else {
            $this->setPohdnbr($v->getPohdnbr());
        }

        if ($v === null) {
            $this->setPodtline(0);
        } else {
            $this->setPodtline($v->getPodtline());
        }

        $this->aPurchaseOrderDetail = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildPurchaseOrderDetail object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetailReceipt($this);
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
        if ($this->aPurchaseOrderDetail === null && (($this->pohdnbr !== "" && $this->pohdnbr !== null) && $this->podtline != 0)) {
            $this->aPurchaseOrderDetail = ChildPurchaseOrderDetailQuery::create()->findPk(array($this->pohdnbr, $this->podtline), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPurchaseOrderDetail->addPurchaseOrderDetailReceipts($this);
             */
        }

        return $this->aPurchaseOrderDetail;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\PurchaseOrderDetailReceipt The current object (for fluent API support)
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
            $v->addPurchaseOrderDetailReceipt($this);
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
                $this->aItemMasterItem->addPurchaseOrderDetailReceipts($this);
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
            $this->aPurchaseOrder->removePurchaseOrderDetailReceipt($this);
        }
        if (null !== $this->aPurchaseOrderDetail) {
            $this->aPurchaseOrderDetail->removePurchaseOrderDetailReceipt($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removePurchaseOrderDetailReceipt($this);
        }
        $this->pohdnbr = null;
        $this->podtline = null;
        $this->inititemnbr = null;
        $this->pordseq = null;
        $this->pordref = null;
        $this->pordtrandate = null;
        $this->pordglpd = null;
        $this->pordqtyrec = null;
        $this->pordcosttot = null;
        $this->pordlandunitcost = null;
        $this->pordtariffcost = null;
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
        return (string) $this->exportTo(PurchaseOrderDetailReceiptTableMap::DEFAULT_STRING_FORMAT);
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
