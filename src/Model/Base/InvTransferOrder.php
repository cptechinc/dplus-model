<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \InvTransferDetail as ChildInvTransferDetail;
use \InvTransferDetailQuery as ChildInvTransferDetailQuery;
use \InvTransferLotserial as ChildInvTransferLotserial;
use \InvTransferLotserialQuery as ChildInvTransferLotserialQuery;
use \InvTransferOrder as ChildInvTransferOrder;
use \InvTransferOrderQuery as ChildInvTransferOrderQuery;
use \InvTransferPickedLotserial as ChildInvTransferPickedLotserial;
use \InvTransferPickedLotserialQuery as ChildInvTransferPickedLotserialQuery;
use \InvTransferPreAllocatedLotserial as ChildInvTransferPreAllocatedLotserial;
use \InvTransferPreAllocatedLotserialQuery as ChildInvTransferPreAllocatedLotserialQuery;
use \Vendor as ChildVendor;
use \VendorQuery as ChildVendorQuery;
use \Warehouse as ChildWarehouse;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\InvTransferDetailTableMap;
use Map\InvTransferLotserialTableMap;
use Map\InvTransferOrderTableMap;
use Map\InvTransferPickedLotserialTableMap;
use Map\InvTransferPreAllocatedLotserialTableMap;
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
 * Base class that represents a row from the 'inv_trans_head' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvTransferOrder implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvTransferOrderTableMap';


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
     * The value for the inhdnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inhdnbr;

    /**
     * The value for the inhdstat field.
     *
     * Note: this column has a database default value of: 'S'
     * @var        string
     */
    protected $inhdstat;

    /**
     * The value for the intbwhsefrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsefrom;

    /**
     * The value for the intbwhseto field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseto;

    /**
     * The value for the artbshipvia field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the inhdentdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdentdate;

    /**
     * The value for the inhdref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdref;

    /**
     * The value for the inhdpickdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdpickdate;

    /**
     * The value for the inhdpicktime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdpicktime;

    /**
     * The value for the inhdtimespick field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inhdtimespick;

    /**
     * The value for the inhdcrntuser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdcrntuser;

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
     * The value for the inhddept field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhddept;

    /**
     * The value for the inhdpllt field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdpllt;

    /**
     * The value for the inhdcntrqty field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inhdcntrqty;

    /**
     * The value for the inhdwghttot field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inhdwghttot;

    /**
     * The value for the inhdtracknbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdtracknbr;

    /**
     * The value for the inhdpickqueue field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $inhdpickqueue;

    /**
     * The value for the inhdshipqueue field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $inhdshipqueue;

    /**
     * The value for the apvevendid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apvevendid;

    /**
     * The value for the inhdftvend field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdftvend;

    /**
     * The value for the inhdtrantype field.
     *
     * Note: this column has a database default value of: 'S'
     * @var        string
     */
    protected $inhdtrantype;

    /**
     * The value for the inhdfrtcost field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $inhdfrtcost;

    /**
     * The value for the inhdpickcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdpickcode;

    /**
     * The value for the inhdpackcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdpackcode;

    /**
     * The value for the inhdhold field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $inhdhold;

    /**
     * The value for the inhdlabel1prtfmt field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdlabel1prtfmt;

    /**
     * The value for the inhdenteredby field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdenteredby;

    /**
     * The value for the inhdentereddate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdentereddate;

    /**
     * The value for the inhdenteredtime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inhdenteredtime;

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
     * @var        ChildWarehouse
     */
    protected $aWarehouseRelatedByIntbwhsefrom;

    /**
     * @var        ChildWarehouse
     */
    protected $aWarehouseRelatedByIntbwhseto;

    /**
     * @var        ChildCustomer
     */
    protected $aCustomer;

    /**
     * @var        ChildCustomerShipto
     */
    protected $aCustomerShipto;

    /**
     * @var        ChildVendor
     */
    protected $aVendor;

    /**
     * @var        ObjectCollection|ChildInvTransferDetail[] Collection to store aggregation of ChildInvTransferDetail objects.
     */
    protected $collInvTransferDetails;
    protected $collInvTransferDetailsPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferLotserial[] Collection to store aggregation of ChildInvTransferLotserial objects.
     */
    protected $collInvTransferLotserials;
    protected $collInvTransferLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferPreAllocatedLotserial[] Collection to store aggregation of ChildInvTransferPreAllocatedLotserial objects.
     */
    protected $collInvTransferPreAllocatedLotserials;
    protected $collInvTransferPreAllocatedLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferPickedLotserial[] Collection to store aggregation of ChildInvTransferPickedLotserial objects.
     */
    protected $collInvTransferPickedLotserials;
    protected $collInvTransferPickedLotserialsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferDetail[]
     */
    protected $invTransferDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferLotserial[]
     */
    protected $invTransferLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferPreAllocatedLotserial[]
     */
    protected $invTransferPreAllocatedLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferPickedLotserial[]
     */
    protected $invTransferPickedLotserialsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->inhdnbr = 0;
        $this->inhdstat = 'S';
        $this->intbwhsefrom = '';
        $this->intbwhseto = '';
        $this->artbshipvia = '';
        $this->inhdentdate = '';
        $this->inhdref = '';
        $this->inhdpickdate = '';
        $this->inhdpicktime = '';
        $this->inhdtimespick = 0;
        $this->inhdcrntuser = '';
        $this->arcucustid = '';
        $this->arstshipid = '';
        $this->inhddept = '';
        $this->inhdpllt = '';
        $this->inhdcntrqty = 0;
        $this->inhdwghttot = 0;
        $this->inhdtracknbr = '';
        $this->inhdpickqueue = 'N';
        $this->inhdshipqueue = 'N';
        $this->apvevendid = '';
        $this->inhdftvend = '';
        $this->inhdtrantype = 'S';
        $this->inhdfrtcost = '0.00';
        $this->inhdpickcode = '';
        $this->inhdpackcode = '';
        $this->inhdhold = 'N';
        $this->inhdlabel1prtfmt = '';
        $this->inhdenteredby = '';
        $this->inhdentereddate = '';
        $this->inhdenteredtime = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvTransferOrder object.
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
     * Compares this with another <code>InvTransferOrder</code> instance.  If
     * <code>obj</code> is an instance of <code>InvTransferOrder</code>, delegates to
     * <code>equals(InvTransferOrder)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvTransferOrder The current object, for fluid interface
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
     * Get the [inhdnbr] column value.
     *
     * @return int
     */
    public function getInhdnbr()
    {
        return $this->inhdnbr;
    }

    /**
     * Get the [inhdstat] column value.
     *
     * @return string
     */
    public function getInhdstat()
    {
        return $this->inhdstat;
    }

    /**
     * Get the [intbwhsefrom] column value.
     *
     * @return string
     */
    public function getIntbwhsefrom()
    {
        return $this->intbwhsefrom;
    }

    /**
     * Get the [intbwhseto] column value.
     *
     * @return string
     */
    public function getIntbwhseto()
    {
        return $this->intbwhseto;
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
     * Get the [inhdentdate] column value.
     *
     * @return string
     */
    public function getInhdentdate()
    {
        return $this->inhdentdate;
    }

    /**
     * Get the [inhdref] column value.
     *
     * @return string
     */
    public function getInhdref()
    {
        return $this->inhdref;
    }

    /**
     * Get the [inhdpickdate] column value.
     *
     * @return string
     */
    public function getInhdpickdate()
    {
        return $this->inhdpickdate;
    }

    /**
     * Get the [inhdpicktime] column value.
     *
     * @return string
     */
    public function getInhdpicktime()
    {
        return $this->inhdpicktime;
    }

    /**
     * Get the [inhdtimespick] column value.
     *
     * @return int
     */
    public function getInhdtimespick()
    {
        return $this->inhdtimespick;
    }

    /**
     * Get the [inhdcrntuser] column value.
     *
     * @return string
     */
    public function getInhdcrntuser()
    {
        return $this->inhdcrntuser;
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
     * Get the [inhddept] column value.
     *
     * @return string
     */
    public function getInhddept()
    {
        return $this->inhddept;
    }

    /**
     * Get the [inhdpllt] column value.
     *
     * @return string
     */
    public function getInhdpllt()
    {
        return $this->inhdpllt;
    }

    /**
     * Get the [inhdcntrqty] column value.
     *
     * @return int
     */
    public function getInhdcntrqty()
    {
        return $this->inhdcntrqty;
    }

    /**
     * Get the [inhdwghttot] column value.
     *
     * @return int
     */
    public function getInhdwghttot()
    {
        return $this->inhdwghttot;
    }

    /**
     * Get the [inhdtracknbr] column value.
     *
     * @return string
     */
    public function getInhdtracknbr()
    {
        return $this->inhdtracknbr;
    }

    /**
     * Get the [inhdpickqueue] column value.
     *
     * @return string
     */
    public function getInhdpickqueue()
    {
        return $this->inhdpickqueue;
    }

    /**
     * Get the [inhdshipqueue] column value.
     *
     * @return string
     */
    public function getInhdshipqueue()
    {
        return $this->inhdshipqueue;
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
     * Get the [inhdftvend] column value.
     *
     * @return string
     */
    public function getInhdftvend()
    {
        return $this->inhdftvend;
    }

    /**
     * Get the [inhdtrantype] column value.
     *
     * @return string
     */
    public function getInhdtrantype()
    {
        return $this->inhdtrantype;
    }

    /**
     * Get the [inhdfrtcost] column value.
     *
     * @return string
     */
    public function getInhdfrtcost()
    {
        return $this->inhdfrtcost;
    }

    /**
     * Get the [inhdpickcode] column value.
     *
     * @return string
     */
    public function getInhdpickcode()
    {
        return $this->inhdpickcode;
    }

    /**
     * Get the [inhdpackcode] column value.
     *
     * @return string
     */
    public function getInhdpackcode()
    {
        return $this->inhdpackcode;
    }

    /**
     * Get the [inhdhold] column value.
     *
     * @return string
     */
    public function getInhdhold()
    {
        return $this->inhdhold;
    }

    /**
     * Get the [inhdlabel1prtfmt] column value.
     *
     * @return string
     */
    public function getInhdlabel1prtfmt()
    {
        return $this->inhdlabel1prtfmt;
    }

    /**
     * Get the [inhdenteredby] column value.
     *
     * @return string
     */
    public function getInhdenteredby()
    {
        return $this->inhdenteredby;
    }

    /**
     * Get the [inhdentereddate] column value.
     *
     * @return string
     */
    public function getInhdentereddate()
    {
        return $this->inhdentereddate;
    }

    /**
     * Get the [inhdenteredtime] column value.
     *
     * @return string
     */
    public function getInhdenteredtime()
    {
        return $this->inhdenteredtime;
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
     * Set the value of [inhdnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inhdnbr !== $v) {
            $this->inhdnbr = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDNBR] = true;
        }

        return $this;
    } // setInhdnbr()

    /**
     * Set the value of [inhdstat] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdstat !== $v) {
            $this->inhdstat = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDSTAT] = true;
        }

        return $this;
    } // setInhdstat()

    /**
     * Set the value of [intbwhsefrom] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setIntbwhsefrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsefrom !== $v) {
            $this->intbwhsefrom = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INTBWHSEFROM] = true;
        }

        if ($this->aWarehouseRelatedByIntbwhsefrom !== null && $this->aWarehouseRelatedByIntbwhsefrom->getIntbwhse() !== $v) {
            $this->aWarehouseRelatedByIntbwhsefrom = null;
        }

        return $this;
    } // setIntbwhsefrom()

    /**
     * Set the value of [intbwhseto] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setIntbwhseto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseto !== $v) {
            $this->intbwhseto = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INTBWHSETO] = true;
        }

        if ($this->aWarehouseRelatedByIntbwhseto !== null && $this->aWarehouseRelatedByIntbwhseto->getIntbwhse() !== $v) {
            $this->aWarehouseRelatedByIntbwhseto = null;
        }

        return $this;
    } // setIntbwhseto()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [inhdentdate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdentdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdentdate !== $v) {
            $this->inhdentdate = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDENTDATE] = true;
        }

        return $this;
    } // setInhdentdate()

    /**
     * Set the value of [inhdref] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdref !== $v) {
            $this->inhdref = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDREF] = true;
        }

        return $this;
    } // setInhdref()

    /**
     * Set the value of [inhdpickdate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdpickdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdpickdate !== $v) {
            $this->inhdpickdate = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDPICKDATE] = true;
        }

        return $this;
    } // setInhdpickdate()

    /**
     * Set the value of [inhdpicktime] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdpicktime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdpicktime !== $v) {
            $this->inhdpicktime = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDPICKTIME] = true;
        }

        return $this;
    } // setInhdpicktime()

    /**
     * Set the value of [inhdtimespick] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdtimespick($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inhdtimespick !== $v) {
            $this->inhdtimespick = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDTIMESPICK] = true;
        }

        return $this;
    } // setInhdtimespick()

    /**
     * Set the value of [inhdcrntuser] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdcrntuser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdcrntuser !== $v) {
            $this->inhdcrntuser = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDCRNTUSER] = true;
        }

        return $this;
    } // setInhdcrntuser()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArcucustid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arstshipid] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_ARSTSHIPID] = true;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArstshipid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [inhddept] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhddept($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhddept !== $v) {
            $this->inhddept = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDDEPT] = true;
        }

        return $this;
    } // setInhddept()

    /**
     * Set the value of [inhdpllt] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdpllt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdpllt !== $v) {
            $this->inhdpllt = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDPLLT] = true;
        }

        return $this;
    } // setInhdpllt()

    /**
     * Set the value of [inhdcntrqty] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdcntrqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inhdcntrqty !== $v) {
            $this->inhdcntrqty = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDCNTRQTY] = true;
        }

        return $this;
    } // setInhdcntrqty()

    /**
     * Set the value of [inhdwghttot] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdwghttot($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inhdwghttot !== $v) {
            $this->inhdwghttot = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDWGHTTOT] = true;
        }

        return $this;
    } // setInhdwghttot()

    /**
     * Set the value of [inhdtracknbr] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdtracknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdtracknbr !== $v) {
            $this->inhdtracknbr = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDTRACKNBR] = true;
        }

        return $this;
    } // setInhdtracknbr()

    /**
     * Set the value of [inhdpickqueue] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdpickqueue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdpickqueue !== $v) {
            $this->inhdpickqueue = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDPICKQUEUE] = true;
        }

        return $this;
    } // setInhdpickqueue()

    /**
     * Set the value of [inhdshipqueue] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdshipqueue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdshipqueue !== $v) {
            $this->inhdshipqueue = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDSHIPQUEUE] = true;
        }

        return $this;
    } // setInhdshipqueue()

    /**
     * Set the value of [apvevendid] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_APVEVENDID] = true;
        }

        if ($this->aVendor !== null && $this->aVendor->getApvevendid() !== $v) {
            $this->aVendor = null;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [inhdftvend] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdftvend($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdftvend !== $v) {
            $this->inhdftvend = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDFTVEND] = true;
        }

        return $this;
    } // setInhdftvend()

    /**
     * Set the value of [inhdtrantype] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdtrantype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdtrantype !== $v) {
            $this->inhdtrantype = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDTRANTYPE] = true;
        }

        return $this;
    } // setInhdtrantype()

    /**
     * Set the value of [inhdfrtcost] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdfrtcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdfrtcost !== $v) {
            $this->inhdfrtcost = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDFRTCOST] = true;
        }

        return $this;
    } // setInhdfrtcost()

    /**
     * Set the value of [inhdpickcode] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdpickcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdpickcode !== $v) {
            $this->inhdpickcode = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDPICKCODE] = true;
        }

        return $this;
    } // setInhdpickcode()

    /**
     * Set the value of [inhdpackcode] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdpackcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdpackcode !== $v) {
            $this->inhdpackcode = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDPACKCODE] = true;
        }

        return $this;
    } // setInhdpackcode()

    /**
     * Set the value of [inhdhold] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdhold !== $v) {
            $this->inhdhold = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDHOLD] = true;
        }

        return $this;
    } // setInhdhold()

    /**
     * Set the value of [inhdlabel1prtfmt] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdlabel1prtfmt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdlabel1prtfmt !== $v) {
            $this->inhdlabel1prtfmt = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT] = true;
        }

        return $this;
    } // setInhdlabel1prtfmt()

    /**
     * Set the value of [inhdenteredby] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdenteredby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdenteredby !== $v) {
            $this->inhdenteredby = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDENTEREDBY] = true;
        }

        return $this;
    } // setInhdenteredby()

    /**
     * Set the value of [inhdentereddate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdentereddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdentereddate !== $v) {
            $this->inhdentereddate = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDENTEREDDATE] = true;
        }

        return $this;
    } // setInhdentereddate()

    /**
     * Set the value of [inhdenteredtime] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setInhdenteredtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inhdenteredtime !== $v) {
            $this->inhdenteredtime = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_INHDENTEREDTIME] = true;
        }

        return $this;
    } // setInhdenteredtime()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvTransferOrderTableMap::COL_DUMMY] = true;
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
            if ($this->inhdnbr !== 0) {
                return false;
            }

            if ($this->inhdstat !== 'S') {
                return false;
            }

            if ($this->intbwhsefrom !== '') {
                return false;
            }

            if ($this->intbwhseto !== '') {
                return false;
            }

            if ($this->artbshipvia !== '') {
                return false;
            }

            if ($this->inhdentdate !== '') {
                return false;
            }

            if ($this->inhdref !== '') {
                return false;
            }

            if ($this->inhdpickdate !== '') {
                return false;
            }

            if ($this->inhdpicktime !== '') {
                return false;
            }

            if ($this->inhdtimespick !== 0) {
                return false;
            }

            if ($this->inhdcrntuser !== '') {
                return false;
            }

            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->arstshipid !== '') {
                return false;
            }

            if ($this->inhddept !== '') {
                return false;
            }

            if ($this->inhdpllt !== '') {
                return false;
            }

            if ($this->inhdcntrqty !== 0) {
                return false;
            }

            if ($this->inhdwghttot !== 0) {
                return false;
            }

            if ($this->inhdtracknbr !== '') {
                return false;
            }

            if ($this->inhdpickqueue !== 'N') {
                return false;
            }

            if ($this->inhdshipqueue !== 'N') {
                return false;
            }

            if ($this->apvevendid !== '') {
                return false;
            }

            if ($this->inhdftvend !== '') {
                return false;
            }

            if ($this->inhdtrantype !== 'S') {
                return false;
            }

            if ($this->inhdfrtcost !== '0.00') {
                return false;
            }

            if ($this->inhdpickcode !== '') {
                return false;
            }

            if ($this->inhdpackcode !== '') {
                return false;
            }

            if ($this->inhdhold !== 'N') {
                return false;
            }

            if ($this->inhdlabel1prtfmt !== '') {
                return false;
            }

            if ($this->inhdenteredby !== '') {
                return false;
            }

            if ($this->inhdentereddate !== '') {
                return false;
            }

            if ($this->inhdenteredtime !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvTransferOrderTableMap::translateFieldName('Intbwhsefrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsefrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvTransferOrderTableMap::translateFieldName('Intbwhseto', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseto = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvTransferOrderTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdentdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdentdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdpickdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdpickdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdpicktime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdpicktime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdtimespick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdtimespick = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdcrntuser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdcrntuser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvTransferOrderTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvTransferOrderTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhddept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhddept = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdpllt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdpllt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdcntrqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdwghttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdwghttot = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdtracknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdtracknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdpickqueue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdpickqueue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdshipqueue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdshipqueue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvTransferOrderTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdftvend', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdftvend = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdtrantype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdtrantype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdfrtcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdfrtcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdpickcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdpickcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdpackcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdpackcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdlabel1prtfmt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdlabel1prtfmt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdenteredby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdenteredby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdentereddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdentereddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : InvTransferOrderTableMap::translateFieldName('Inhdenteredtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdenteredtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : InvTransferOrderTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : InvTransferOrderTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : InvTransferOrderTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 34; // 34 = InvTransferOrderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvTransferOrder'), 0, $e);
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
        if ($this->aWarehouseRelatedByIntbwhsefrom !== null && $this->intbwhsefrom !== $this->aWarehouseRelatedByIntbwhsefrom->getIntbwhse()) {
            $this->aWarehouseRelatedByIntbwhsefrom = null;
        }
        if ($this->aWarehouseRelatedByIntbwhseto !== null && $this->intbwhseto !== $this->aWarehouseRelatedByIntbwhseto->getIntbwhse()) {
            $this->aWarehouseRelatedByIntbwhseto = null;
        }
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
        if ($this->aCustomerShipto !== null && $this->arcucustid !== $this->aCustomerShipto->getArcucustid()) {
            $this->aCustomerShipto = null;
        }
        if ($this->aCustomerShipto !== null && $this->arstshipid !== $this->aCustomerShipto->getArstshipid()) {
            $this->aCustomerShipto = null;
        }
        if ($this->aVendor !== null && $this->apvevendid !== $this->aVendor->getApvevendid()) {
            $this->aVendor = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferOrderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvTransferOrderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aWarehouseRelatedByIntbwhsefrom = null;
            $this->aWarehouseRelatedByIntbwhseto = null;
            $this->aCustomer = null;
            $this->aCustomerShipto = null;
            $this->aVendor = null;
            $this->collInvTransferDetails = null;

            $this->collInvTransferLotserials = null;

            $this->collInvTransferPreAllocatedLotserials = null;

            $this->collInvTransferPickedLotserials = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvTransferOrder::setDeleted()
     * @see InvTransferOrder::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferOrderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvTransferOrderQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferOrderTableMap::DATABASE_NAME);
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
                InvTransferOrderTableMap::addInstanceToPool($this);
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

            if ($this->aWarehouseRelatedByIntbwhsefrom !== null) {
                if ($this->aWarehouseRelatedByIntbwhsefrom->isModified() || $this->aWarehouseRelatedByIntbwhsefrom->isNew()) {
                    $affectedRows += $this->aWarehouseRelatedByIntbwhsefrom->save($con);
                }
                $this->setWarehouseRelatedByIntbwhsefrom($this->aWarehouseRelatedByIntbwhsefrom);
            }

            if ($this->aWarehouseRelatedByIntbwhseto !== null) {
                if ($this->aWarehouseRelatedByIntbwhseto->isModified() || $this->aWarehouseRelatedByIntbwhseto->isNew()) {
                    $affectedRows += $this->aWarehouseRelatedByIntbwhseto->save($con);
                }
                $this->setWarehouseRelatedByIntbwhseto($this->aWarehouseRelatedByIntbwhseto);
            }

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

            if ($this->aCustomerShipto !== null) {
                if ($this->aCustomerShipto->isModified() || $this->aCustomerShipto->isNew()) {
                    $affectedRows += $this->aCustomerShipto->save($con);
                }
                $this->setCustomerShipto($this->aCustomerShipto);
            }

            if ($this->aVendor !== null) {
                if ($this->aVendor->isModified() || $this->aVendor->isNew()) {
                    $affectedRows += $this->aVendor->save($con);
                }
                $this->setVendor($this->aVendor);
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

            if ($this->invTransferDetailsScheduledForDeletion !== null) {
                if (!$this->invTransferDetailsScheduledForDeletion->isEmpty()) {
                    \InvTransferDetailQuery::create()
                        ->filterByPrimaryKeys($this->invTransferDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferDetails !== null) {
                foreach ($this->collInvTransferDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferLotserialsScheduledForDeletion !== null) {
                if (!$this->invTransferLotserialsScheduledForDeletion->isEmpty()) {
                    \InvTransferLotserialQuery::create()
                        ->filterByPrimaryKeys($this->invTransferLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferLotserials !== null) {
                foreach ($this->collInvTransferLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferPreAllocatedLotserialsScheduledForDeletion !== null) {
                if (!$this->invTransferPreAllocatedLotserialsScheduledForDeletion->isEmpty()) {
                    \InvTransferPreAllocatedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->invTransferPreAllocatedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferPreAllocatedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferPreAllocatedLotserials !== null) {
                foreach ($this->collInvTransferPreAllocatedLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferPickedLotserialsScheduledForDeletion !== null) {
                if (!$this->invTransferPickedLotserialsScheduledForDeletion->isEmpty()) {
                    \InvTransferPickedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->invTransferPickedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferPickedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferPickedLotserials !== null) {
                foreach ($this->collInvTransferPickedLotserials as $referrerFK) {
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
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InhdNbr';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'InhdStat';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INTBWHSEFROM)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseFrom';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INTBWHSETO)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseTo';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDENTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InhdEntDate';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDREF)) {
            $modifiedColumns[':p' . $index++]  = 'InhdRef';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPICKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InhdPickDate';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPICKTIME)) {
            $modifiedColumns[':p' . $index++]  = 'InhdPickTime';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDTIMESPICK)) {
            $modifiedColumns[':p' . $index++]  = 'InhdTimesPick';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDCRNTUSER)) {
            $modifiedColumns[':p' . $index++]  = 'InhdCrntUser';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDDEPT)) {
            $modifiedColumns[':p' . $index++]  = 'InhdDept';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPLLT)) {
            $modifiedColumns[':p' . $index++]  = 'InhdPllt';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InhdCntrQty';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDWGHTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'InhdWghtTot';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDTRACKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InhdTrackNbr';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPICKQUEUE)) {
            $modifiedColumns[':p' . $index++]  = 'InhdPickQueue';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDSHIPQUEUE)) {
            $modifiedColumns[':p' . $index++]  = 'InhdShipQueue';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDFTVEND)) {
            $modifiedColumns[':p' . $index++]  = 'InhdFTVend';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDTRANTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'InhdTranType';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDFRTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InhdFrtCost';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPICKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InhdPickCode';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPACKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InhdPackCode';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'InhdHold';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT)) {
            $modifiedColumns[':p' . $index++]  = 'InhdLabel1PrtFmt';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDENTEREDBY)) {
            $modifiedColumns[':p' . $index++]  = 'InhdEnteredBy';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDENTEREDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InhdEnteredDate';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDENTEREDTIME)) {
            $modifiedColumns[':p' . $index++]  = 'InhdEnteredTime';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_trans_head (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'InhdNbr':
                        $stmt->bindValue($identifier, $this->inhdnbr, PDO::PARAM_INT);
                        break;
                    case 'InhdStat':
                        $stmt->bindValue($identifier, $this->inhdstat, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseFrom':
                        $stmt->bindValue($identifier, $this->intbwhsefrom, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseTo':
                        $stmt->bindValue($identifier, $this->intbwhseto, PDO::PARAM_STR);
                        break;
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'InhdEntDate':
                        $stmt->bindValue($identifier, $this->inhdentdate, PDO::PARAM_STR);
                        break;
                    case 'InhdRef':
                        $stmt->bindValue($identifier, $this->inhdref, PDO::PARAM_STR);
                        break;
                    case 'InhdPickDate':
                        $stmt->bindValue($identifier, $this->inhdpickdate, PDO::PARAM_STR);
                        break;
                    case 'InhdPickTime':
                        $stmt->bindValue($identifier, $this->inhdpicktime, PDO::PARAM_STR);
                        break;
                    case 'InhdTimesPick':
                        $stmt->bindValue($identifier, $this->inhdtimespick, PDO::PARAM_INT);
                        break;
                    case 'InhdCrntUser':
                        $stmt->bindValue($identifier, $this->inhdcrntuser, PDO::PARAM_STR);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);
                        break;
                    case 'InhdDept':
                        $stmt->bindValue($identifier, $this->inhddept, PDO::PARAM_STR);
                        break;
                    case 'InhdPllt':
                        $stmt->bindValue($identifier, $this->inhdpllt, PDO::PARAM_STR);
                        break;
                    case 'InhdCntrQty':
                        $stmt->bindValue($identifier, $this->inhdcntrqty, PDO::PARAM_INT);
                        break;
                    case 'InhdWghtTot':
                        $stmt->bindValue($identifier, $this->inhdwghttot, PDO::PARAM_INT);
                        break;
                    case 'InhdTrackNbr':
                        $stmt->bindValue($identifier, $this->inhdtracknbr, PDO::PARAM_STR);
                        break;
                    case 'InhdPickQueue':
                        $stmt->bindValue($identifier, $this->inhdpickqueue, PDO::PARAM_STR);
                        break;
                    case 'InhdShipQueue':
                        $stmt->bindValue($identifier, $this->inhdshipqueue, PDO::PARAM_STR);
                        break;
                    case 'ApveVendId':
                        $stmt->bindValue($identifier, $this->apvevendid, PDO::PARAM_STR);
                        break;
                    case 'InhdFTVend':
                        $stmt->bindValue($identifier, $this->inhdftvend, PDO::PARAM_STR);
                        break;
                    case 'InhdTranType':
                        $stmt->bindValue($identifier, $this->inhdtrantype, PDO::PARAM_STR);
                        break;
                    case 'InhdFrtCost':
                        $stmt->bindValue($identifier, $this->inhdfrtcost, PDO::PARAM_STR);
                        break;
                    case 'InhdPickCode':
                        $stmt->bindValue($identifier, $this->inhdpickcode, PDO::PARAM_STR);
                        break;
                    case 'InhdPackCode':
                        $stmt->bindValue($identifier, $this->inhdpackcode, PDO::PARAM_STR);
                        break;
                    case 'InhdHold':
                        $stmt->bindValue($identifier, $this->inhdhold, PDO::PARAM_STR);
                        break;
                    case 'InhdLabel1PrtFmt':
                        $stmt->bindValue($identifier, $this->inhdlabel1prtfmt, PDO::PARAM_STR);
                        break;
                    case 'InhdEnteredBy':
                        $stmt->bindValue($identifier, $this->inhdenteredby, PDO::PARAM_STR);
                        break;
                    case 'InhdEnteredDate':
                        $stmt->bindValue($identifier, $this->inhdentereddate, PDO::PARAM_STR);
                        break;
                    case 'InhdEnteredTime':
                        $stmt->bindValue($identifier, $this->inhdenteredtime, PDO::PARAM_STR);
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
        $pos = InvTransferOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInhdnbr();
                break;
            case 1:
                return $this->getInhdstat();
                break;
            case 2:
                return $this->getIntbwhsefrom();
                break;
            case 3:
                return $this->getIntbwhseto();
                break;
            case 4:
                return $this->getArtbshipvia();
                break;
            case 5:
                return $this->getInhdentdate();
                break;
            case 6:
                return $this->getInhdref();
                break;
            case 7:
                return $this->getInhdpickdate();
                break;
            case 8:
                return $this->getInhdpicktime();
                break;
            case 9:
                return $this->getInhdtimespick();
                break;
            case 10:
                return $this->getInhdcrntuser();
                break;
            case 11:
                return $this->getArcucustid();
                break;
            case 12:
                return $this->getArstshipid();
                break;
            case 13:
                return $this->getInhddept();
                break;
            case 14:
                return $this->getInhdpllt();
                break;
            case 15:
                return $this->getInhdcntrqty();
                break;
            case 16:
                return $this->getInhdwghttot();
                break;
            case 17:
                return $this->getInhdtracknbr();
                break;
            case 18:
                return $this->getInhdpickqueue();
                break;
            case 19:
                return $this->getInhdshipqueue();
                break;
            case 20:
                return $this->getApvevendid();
                break;
            case 21:
                return $this->getInhdftvend();
                break;
            case 22:
                return $this->getInhdtrantype();
                break;
            case 23:
                return $this->getInhdfrtcost();
                break;
            case 24:
                return $this->getInhdpickcode();
                break;
            case 25:
                return $this->getInhdpackcode();
                break;
            case 26:
                return $this->getInhdhold();
                break;
            case 27:
                return $this->getInhdlabel1prtfmt();
                break;
            case 28:
                return $this->getInhdenteredby();
                break;
            case 29:
                return $this->getInhdentereddate();
                break;
            case 30:
                return $this->getInhdenteredtime();
                break;
            case 31:
                return $this->getDateupdtd();
                break;
            case 32:
                return $this->getTimeupdtd();
                break;
            case 33:
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

        if (isset($alreadyDumpedObjects['InvTransferOrder'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvTransferOrder'][$this->hashCode()] = true;
        $keys = InvTransferOrderTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInhdnbr(),
            $keys[1] => $this->getInhdstat(),
            $keys[2] => $this->getIntbwhsefrom(),
            $keys[3] => $this->getIntbwhseto(),
            $keys[4] => $this->getArtbshipvia(),
            $keys[5] => $this->getInhdentdate(),
            $keys[6] => $this->getInhdref(),
            $keys[7] => $this->getInhdpickdate(),
            $keys[8] => $this->getInhdpicktime(),
            $keys[9] => $this->getInhdtimespick(),
            $keys[10] => $this->getInhdcrntuser(),
            $keys[11] => $this->getArcucustid(),
            $keys[12] => $this->getArstshipid(),
            $keys[13] => $this->getInhddept(),
            $keys[14] => $this->getInhdpllt(),
            $keys[15] => $this->getInhdcntrqty(),
            $keys[16] => $this->getInhdwghttot(),
            $keys[17] => $this->getInhdtracknbr(),
            $keys[18] => $this->getInhdpickqueue(),
            $keys[19] => $this->getInhdshipqueue(),
            $keys[20] => $this->getApvevendid(),
            $keys[21] => $this->getInhdftvend(),
            $keys[22] => $this->getInhdtrantype(),
            $keys[23] => $this->getInhdfrtcost(),
            $keys[24] => $this->getInhdpickcode(),
            $keys[25] => $this->getInhdpackcode(),
            $keys[26] => $this->getInhdhold(),
            $keys[27] => $this->getInhdlabel1prtfmt(),
            $keys[28] => $this->getInhdenteredby(),
            $keys[29] => $this->getInhdentereddate(),
            $keys[30] => $this->getInhdenteredtime(),
            $keys[31] => $this->getDateupdtd(),
            $keys[32] => $this->getTimeupdtd(),
            $keys[33] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aWarehouseRelatedByIntbwhsefrom) {

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

                $result[$key] = $this->aWarehouseRelatedByIntbwhsefrom->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aWarehouseRelatedByIntbwhseto) {

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

                $result[$key] = $this->aWarehouseRelatedByIntbwhseto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
            if (null !== $this->aCustomerShipto) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customerShipto';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_ship_to';
                        break;
                    default:
                        $key = 'CustomerShipto';
                }

                $result[$key] = $this->aCustomerShipto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
            if (null !== $this->collInvTransferDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_dets';
                        break;
                    default:
                        $key = 'InvTransferDetails';
                }

                $result[$key] = $this->collInvTransferDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_lotsers';
                        break;
                    default:
                        $key = 'InvTransferLotserials';
                }

                $result[$key] = $this->collInvTransferLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferPreAllocatedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferPreAllocatedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_pre_allos';
                        break;
                    default:
                        $key = 'InvTransferPreAllocatedLotserials';
                }

                $result[$key] = $this->collInvTransferPreAllocatedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferPickedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferPickedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_pulleds';
                        break;
                    default:
                        $key = 'InvTransferPickedLotserials';
                }

                $result[$key] = $this->collInvTransferPickedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\InvTransferOrder
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvTransferOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvTransferOrder
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInhdnbr($value);
                break;
            case 1:
                $this->setInhdstat($value);
                break;
            case 2:
                $this->setIntbwhsefrom($value);
                break;
            case 3:
                $this->setIntbwhseto($value);
                break;
            case 4:
                $this->setArtbshipvia($value);
                break;
            case 5:
                $this->setInhdentdate($value);
                break;
            case 6:
                $this->setInhdref($value);
                break;
            case 7:
                $this->setInhdpickdate($value);
                break;
            case 8:
                $this->setInhdpicktime($value);
                break;
            case 9:
                $this->setInhdtimespick($value);
                break;
            case 10:
                $this->setInhdcrntuser($value);
                break;
            case 11:
                $this->setArcucustid($value);
                break;
            case 12:
                $this->setArstshipid($value);
                break;
            case 13:
                $this->setInhddept($value);
                break;
            case 14:
                $this->setInhdpllt($value);
                break;
            case 15:
                $this->setInhdcntrqty($value);
                break;
            case 16:
                $this->setInhdwghttot($value);
                break;
            case 17:
                $this->setInhdtracknbr($value);
                break;
            case 18:
                $this->setInhdpickqueue($value);
                break;
            case 19:
                $this->setInhdshipqueue($value);
                break;
            case 20:
                $this->setApvevendid($value);
                break;
            case 21:
                $this->setInhdftvend($value);
                break;
            case 22:
                $this->setInhdtrantype($value);
                break;
            case 23:
                $this->setInhdfrtcost($value);
                break;
            case 24:
                $this->setInhdpickcode($value);
                break;
            case 25:
                $this->setInhdpackcode($value);
                break;
            case 26:
                $this->setInhdhold($value);
                break;
            case 27:
                $this->setInhdlabel1prtfmt($value);
                break;
            case 28:
                $this->setInhdenteredby($value);
                break;
            case 29:
                $this->setInhdentereddate($value);
                break;
            case 30:
                $this->setInhdenteredtime($value);
                break;
            case 31:
                $this->setDateupdtd($value);
                break;
            case 32:
                $this->setTimeupdtd($value);
                break;
            case 33:
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
        $keys = InvTransferOrderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInhdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setInhdstat($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIntbwhsefrom($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIntbwhseto($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArtbshipvia($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInhdentdate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInhdref($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInhdpickdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setInhdpicktime($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setInhdtimespick($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInhdcrntuser($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArcucustid($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArstshipid($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInhddept($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInhdpllt($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInhdcntrqty($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInhdwghttot($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInhdtracknbr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInhdpickqueue($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInhdshipqueue($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setApvevendid($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setInhdftvend($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setInhdtrantype($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setInhdfrtcost($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setInhdpickcode($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setInhdpackcode($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setInhdhold($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setInhdlabel1prtfmt($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setInhdenteredby($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setInhdentereddate($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setInhdenteredtime($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setDateupdtd($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setTimeupdtd($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setDummy($arr[$keys[33]]);
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
     * @return $this|\InvTransferOrder The current object, for fluid interface
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
        $criteria = new Criteria(InvTransferOrderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDNBR)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDNBR, $this->inhdnbr);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDSTAT)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDSTAT, $this->inhdstat);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INTBWHSEFROM)) {
            $criteria->add(InvTransferOrderTableMap::COL_INTBWHSEFROM, $this->intbwhsefrom);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INTBWHSETO)) {
            $criteria->add(InvTransferOrderTableMap::COL_INTBWHSETO, $this->intbwhseto);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(InvTransferOrderTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDENTDATE)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDENTDATE, $this->inhdentdate);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDREF)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDREF, $this->inhdref);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPICKDATE)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDPICKDATE, $this->inhdpickdate);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPICKTIME)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDPICKTIME, $this->inhdpicktime);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDTIMESPICK)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDTIMESPICK, $this->inhdtimespick);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDCRNTUSER)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDCRNTUSER, $this->inhdcrntuser);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_ARCUCUSTID)) {
            $criteria->add(InvTransferOrderTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_ARSTSHIPID)) {
            $criteria->add(InvTransferOrderTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDDEPT)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDDEPT, $this->inhddept);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPLLT)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDPLLT, $this->inhdpllt);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDCNTRQTY)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDCNTRQTY, $this->inhdcntrqty);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDWGHTTOT)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDWGHTTOT, $this->inhdwghttot);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDTRACKNBR)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDTRACKNBR, $this->inhdtracknbr);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPICKQUEUE)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDPICKQUEUE, $this->inhdpickqueue);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDSHIPQUEUE)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDSHIPQUEUE, $this->inhdshipqueue);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_APVEVENDID)) {
            $criteria->add(InvTransferOrderTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDFTVEND)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDFTVEND, $this->inhdftvend);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDTRANTYPE)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDTRANTYPE, $this->inhdtrantype);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDFRTCOST)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDFRTCOST, $this->inhdfrtcost);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPICKCODE)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDPICKCODE, $this->inhdpickcode);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDPACKCODE)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDPACKCODE, $this->inhdpackcode);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDHOLD)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDHOLD, $this->inhdhold);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT, $this->inhdlabel1prtfmt);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDENTEREDBY)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDENTEREDBY, $this->inhdenteredby);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDENTEREDDATE)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDENTEREDDATE, $this->inhdentereddate);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_INHDENTEREDTIME)) {
            $criteria->add(InvTransferOrderTableMap::COL_INHDENTEREDTIME, $this->inhdenteredtime);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvTransferOrderTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvTransferOrderTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvTransferOrderTableMap::COL_DUMMY)) {
            $criteria->add(InvTransferOrderTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvTransferOrderQuery::create();
        $criteria->add(InvTransferOrderTableMap::COL_INHDNBR, $this->inhdnbr);

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
        $validPk = null !== $this->getInhdnbr();

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
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getInhdnbr();
    }

    /**
     * Generic method to set the primary key (inhdnbr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setInhdnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getInhdnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvTransferOrder (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInhdnbr($this->getInhdnbr());
        $copyObj->setInhdstat($this->getInhdstat());
        $copyObj->setIntbwhsefrom($this->getIntbwhsefrom());
        $copyObj->setIntbwhseto($this->getIntbwhseto());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setInhdentdate($this->getInhdentdate());
        $copyObj->setInhdref($this->getInhdref());
        $copyObj->setInhdpickdate($this->getInhdpickdate());
        $copyObj->setInhdpicktime($this->getInhdpicktime());
        $copyObj->setInhdtimespick($this->getInhdtimespick());
        $copyObj->setInhdcrntuser($this->getInhdcrntuser());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setInhddept($this->getInhddept());
        $copyObj->setInhdpllt($this->getInhdpllt());
        $copyObj->setInhdcntrqty($this->getInhdcntrqty());
        $copyObj->setInhdwghttot($this->getInhdwghttot());
        $copyObj->setInhdtracknbr($this->getInhdtracknbr());
        $copyObj->setInhdpickqueue($this->getInhdpickqueue());
        $copyObj->setInhdshipqueue($this->getInhdshipqueue());
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setInhdftvend($this->getInhdftvend());
        $copyObj->setInhdtrantype($this->getInhdtrantype());
        $copyObj->setInhdfrtcost($this->getInhdfrtcost());
        $copyObj->setInhdpickcode($this->getInhdpickcode());
        $copyObj->setInhdpackcode($this->getInhdpackcode());
        $copyObj->setInhdhold($this->getInhdhold());
        $copyObj->setInhdlabel1prtfmt($this->getInhdlabel1prtfmt());
        $copyObj->setInhdenteredby($this->getInhdenteredby());
        $copyObj->setInhdentereddate($this->getInhdentereddate());
        $copyObj->setInhdenteredtime($this->getInhdenteredtime());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getInvTransferDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferPreAllocatedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferPreAllocatedLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferPickedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferPickedLotserial($relObj->copy($deepCopy));
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
     * @return \InvTransferOrder Clone of current object.
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
     * Declares an association between this object and a ChildWarehouse object.
     *
     * @param  ChildWarehouse $v
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setWarehouseRelatedByIntbwhsefrom(ChildWarehouse $v = null)
    {
        if ($v === null) {
            $this->setIntbwhsefrom('');
        } else {
            $this->setIntbwhsefrom($v->getIntbwhse());
        }

        $this->aWarehouseRelatedByIntbwhsefrom = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildWarehouse object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferOrderRelatedByIntbwhsefrom($this);
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
    public function getWarehouseRelatedByIntbwhsefrom(ConnectionInterface $con = null)
    {
        if ($this->aWarehouseRelatedByIntbwhsefrom === null && (($this->intbwhsefrom !== "" && $this->intbwhsefrom !== null))) {
            $this->aWarehouseRelatedByIntbwhsefrom = ChildWarehouseQuery::create()->findPk($this->intbwhsefrom, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aWarehouseRelatedByIntbwhsefrom->addInvTransferOrdersRelatedByIntbwhsefrom($this);
             */
        }

        return $this->aWarehouseRelatedByIntbwhsefrom;
    }

    /**
     * Declares an association between this object and a ChildWarehouse object.
     *
     * @param  ChildWarehouse $v
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setWarehouseRelatedByIntbwhseto(ChildWarehouse $v = null)
    {
        if ($v === null) {
            $this->setIntbwhseto('');
        } else {
            $this->setIntbwhseto($v->getIntbwhse());
        }

        $this->aWarehouseRelatedByIntbwhseto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildWarehouse object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferOrderRelatedByIntbwhseto($this);
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
    public function getWarehouseRelatedByIntbwhseto(ConnectionInterface $con = null)
    {
        if ($this->aWarehouseRelatedByIntbwhseto === null && (($this->intbwhseto !== "" && $this->intbwhseto !== null))) {
            $this->aWarehouseRelatedByIntbwhseto = ChildWarehouseQuery::create()->findPk($this->intbwhseto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aWarehouseRelatedByIntbwhseto->addInvTransferOrdersRelatedByIntbwhseto($this);
             */
        }

        return $this->aWarehouseRelatedByIntbwhseto;
    }

    /**
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\InvTransferOrder The current object (for fluent API support)
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
            $v->addInvTransferOrder($this);
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
                $this->aCustomer->addInvTransferOrders($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a ChildCustomerShipto object.
     *
     * @param  ChildCustomerShipto $v
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomerShipto(ChildCustomerShipto $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        if ($v === null) {
            $this->setArstshipid('');
        } else {
            $this->setArstshipid($v->getArstshipid());
        }

        $this->aCustomerShipto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomerShipto object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferOrder($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomerShipto object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCustomerShipto The associated ChildCustomerShipto object.
     * @throws PropelException
     */
    public function getCustomerShipto(ConnectionInterface $con = null)
    {
        if ($this->aCustomerShipto === null && (($this->arcucustid !== "" && $this->arcucustid !== null) && ($this->arstshipid !== "" && $this->arstshipid !== null))) {
            $this->aCustomerShipto = ChildCustomerShiptoQuery::create()->findPk(array($this->arcucustid, $this->arstshipid), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomerShipto->addInvTransferOrders($this);
             */
        }

        return $this->aCustomerShipto;
    }

    /**
     * Declares an association between this object and a ChildVendor object.
     *
     * @param  ChildVendor $v
     * @return $this|\InvTransferOrder The current object (for fluent API support)
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
            $v->addInvTransferOrder($this);
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
            $this->aVendor = ChildVendorQuery::create()->findPk($this->apvevendid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVendor->addInvTransferOrders($this);
             */
        }

        return $this->aVendor;
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
        if ('InvTransferDetail' == $relationName) {
            $this->initInvTransferDetails();
            return;
        }
        if ('InvTransferLotserial' == $relationName) {
            $this->initInvTransferLotserials();
            return;
        }
        if ('InvTransferPreAllocatedLotserial' == $relationName) {
            $this->initInvTransferPreAllocatedLotserials();
            return;
        }
        if ('InvTransferPickedLotserial' == $relationName) {
            $this->initInvTransferPickedLotserials();
            return;
        }
    }

    /**
     * Clears out the collInvTransferDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferDetails()
     */
    public function clearInvTransferDetails()
    {
        $this->collInvTransferDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferDetails collection loaded partially.
     */
    public function resetPartialInvTransferDetails($v = true)
    {
        $this->collInvTransferDetailsPartial = $v;
    }

    /**
     * Initializes the collInvTransferDetails collection.
     *
     * By default this just sets the collInvTransferDetails collection to an empty array (like clearcollInvTransferDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferDetails($overrideExisting = true)
    {
        if (null !== $this->collInvTransferDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferDetails = new $collectionClassName;
        $this->collInvTransferDetails->setModel('\InvTransferDetail');
    }

    /**
     * Gets an array of ChildInvTransferDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvTransferOrder is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferDetail[] List of ChildInvTransferDetail objects
     * @throws PropelException
     */
    public function getInvTransferDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferDetailsPartial && !$this->isNew();
        if (null === $this->collInvTransferDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferDetails) {
                // return empty collection
                $this->initInvTransferDetails();
            } else {
                $collInvTransferDetails = ChildInvTransferDetailQuery::create(null, $criteria)
                    ->filterByInvTransferOrder($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferDetailsPartial && count($collInvTransferDetails)) {
                        $this->initInvTransferDetails(false);

                        foreach ($collInvTransferDetails as $obj) {
                            if (false == $this->collInvTransferDetails->contains($obj)) {
                                $this->collInvTransferDetails->append($obj);
                            }
                        }

                        $this->collInvTransferDetailsPartial = true;
                    }

                    return $collInvTransferDetails;
                }

                if ($partial && $this->collInvTransferDetails) {
                    foreach ($this->collInvTransferDetails as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferDetails[] = $obj;
                        }
                    }
                }

                $this->collInvTransferDetails = $collInvTransferDetails;
                $this->collInvTransferDetailsPartial = false;
            }
        }

        return $this->collInvTransferDetails;
    }

    /**
     * Sets a collection of ChildInvTransferDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvTransferOrder The current object (for fluent API support)
     */
    public function setInvTransferDetails(Collection $invTransferDetails, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferDetail[] $invTransferDetailsToDelete */
        $invTransferDetailsToDelete = $this->getInvTransferDetails(new Criteria(), $con)->diff($invTransferDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferDetailsScheduledForDeletion = clone $invTransferDetailsToDelete;

        foreach ($invTransferDetailsToDelete as $invTransferDetailRemoved) {
            $invTransferDetailRemoved->setInvTransferOrder(null);
        }

        $this->collInvTransferDetails = null;
        foreach ($invTransferDetails as $invTransferDetail) {
            $this->addInvTransferDetail($invTransferDetail);
        }

        $this->collInvTransferDetails = $invTransferDetails;
        $this->collInvTransferDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferDetail objects.
     * @throws PropelException
     */
    public function countInvTransferDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferDetailsPartial && !$this->isNew();
        if (null === $this->collInvTransferDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferDetails());
            }

            $query = ChildInvTransferDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvTransferOrder($this)
                ->count($con);
        }

        return count($this->collInvTransferDetails);
    }

    /**
     * Method called to associate a ChildInvTransferDetail object to this object
     * through the ChildInvTransferDetail foreign key attribute.
     *
     * @param  ChildInvTransferDetail $l ChildInvTransferDetail
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function addInvTransferDetail(ChildInvTransferDetail $l)
    {
        if ($this->collInvTransferDetails === null) {
            $this->initInvTransferDetails();
            $this->collInvTransferDetailsPartial = true;
        }

        if (!$this->collInvTransferDetails->contains($l)) {
            $this->doAddInvTransferDetail($l);

            if ($this->invTransferDetailsScheduledForDeletion and $this->invTransferDetailsScheduledForDeletion->contains($l)) {
                $this->invTransferDetailsScheduledForDeletion->remove($this->invTransferDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferDetail $invTransferDetail The ChildInvTransferDetail object to add.
     */
    protected function doAddInvTransferDetail(ChildInvTransferDetail $invTransferDetail)
    {
        $this->collInvTransferDetails[]= $invTransferDetail;
        $invTransferDetail->setInvTransferOrder($this);
    }

    /**
     * @param  ChildInvTransferDetail $invTransferDetail The ChildInvTransferDetail object to remove.
     * @return $this|ChildInvTransferOrder The current object (for fluent API support)
     */
    public function removeInvTransferDetail(ChildInvTransferDetail $invTransferDetail)
    {
        if ($this->getInvTransferDetails()->contains($invTransferDetail)) {
            $pos = $this->collInvTransferDetails->search($invTransferDetail);
            $this->collInvTransferDetails->remove($pos);
            if (null === $this->invTransferDetailsScheduledForDeletion) {
                $this->invTransferDetailsScheduledForDeletion = clone $this->collInvTransferDetails;
                $this->invTransferDetailsScheduledForDeletion->clear();
            }
            $this->invTransferDetailsScheduledForDeletion[]= clone $invTransferDetail;
            $invTransferDetail->setInvTransferOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferDetail[] List of ChildInvTransferDetail objects
     */
    public function getInvTransferDetailsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferDetailQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvTransferDetails($query, $con);
    }

    /**
     * Clears out the collInvTransferLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferLotserials()
     */
    public function clearInvTransferLotserials()
    {
        $this->collInvTransferLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferLotserials collection loaded partially.
     */
    public function resetPartialInvTransferLotserials($v = true)
    {
        $this->collInvTransferLotserialsPartial = $v;
    }

    /**
     * Initializes the collInvTransferLotserials collection.
     *
     * By default this just sets the collInvTransferLotserials collection to an empty array (like clearcollInvTransferLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferLotserials($overrideExisting = true)
    {
        if (null !== $this->collInvTransferLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferLotserials = new $collectionClassName;
        $this->collInvTransferLotserials->setModel('\InvTransferLotserial');
    }

    /**
     * Gets an array of ChildInvTransferLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvTransferOrder is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     * @throws PropelException
     */
    public function getInvTransferLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferLotserials) {
                // return empty collection
                $this->initInvTransferLotserials();
            } else {
                $collInvTransferLotserials = ChildInvTransferLotserialQuery::create(null, $criteria)
                    ->filterByInvTransferOrder($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferLotserialsPartial && count($collInvTransferLotserials)) {
                        $this->initInvTransferLotserials(false);

                        foreach ($collInvTransferLotserials as $obj) {
                            if (false == $this->collInvTransferLotserials->contains($obj)) {
                                $this->collInvTransferLotserials->append($obj);
                            }
                        }

                        $this->collInvTransferLotserialsPartial = true;
                    }

                    return $collInvTransferLotserials;
                }

                if ($partial && $this->collInvTransferLotserials) {
                    foreach ($this->collInvTransferLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferLotserials[] = $obj;
                        }
                    }
                }

                $this->collInvTransferLotserials = $collInvTransferLotserials;
                $this->collInvTransferLotserialsPartial = false;
            }
        }

        return $this->collInvTransferLotserials;
    }

    /**
     * Sets a collection of ChildInvTransferLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvTransferOrder The current object (for fluent API support)
     */
    public function setInvTransferLotserials(Collection $invTransferLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferLotserial[] $invTransferLotserialsToDelete */
        $invTransferLotserialsToDelete = $this->getInvTransferLotserials(new Criteria(), $con)->diff($invTransferLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferLotserialsScheduledForDeletion = clone $invTransferLotserialsToDelete;

        foreach ($invTransferLotserialsToDelete as $invTransferLotserialRemoved) {
            $invTransferLotserialRemoved->setInvTransferOrder(null);
        }

        $this->collInvTransferLotserials = null;
        foreach ($invTransferLotserials as $invTransferLotserial) {
            $this->addInvTransferLotserial($invTransferLotserial);
        }

        $this->collInvTransferLotserials = $invTransferLotserials;
        $this->collInvTransferLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferLotserial objects.
     * @throws PropelException
     */
    public function countInvTransferLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferLotserials());
            }

            $query = ChildInvTransferLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvTransferOrder($this)
                ->count($con);
        }

        return count($this->collInvTransferLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferLotserial object to this object
     * through the ChildInvTransferLotserial foreign key attribute.
     *
     * @param  ChildInvTransferLotserial $l ChildInvTransferLotserial
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function addInvTransferLotserial(ChildInvTransferLotserial $l)
    {
        if ($this->collInvTransferLotserials === null) {
            $this->initInvTransferLotserials();
            $this->collInvTransferLotserialsPartial = true;
        }

        if (!$this->collInvTransferLotserials->contains($l)) {
            $this->doAddInvTransferLotserial($l);

            if ($this->invTransferLotserialsScheduledForDeletion and $this->invTransferLotserialsScheduledForDeletion->contains($l)) {
                $this->invTransferLotserialsScheduledForDeletion->remove($this->invTransferLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferLotserial $invTransferLotserial The ChildInvTransferLotserial object to add.
     */
    protected function doAddInvTransferLotserial(ChildInvTransferLotserial $invTransferLotserial)
    {
        $this->collInvTransferLotserials[]= $invTransferLotserial;
        $invTransferLotserial->setInvTransferOrder($this);
    }

    /**
     * @param  ChildInvTransferLotserial $invTransferLotserial The ChildInvTransferLotserial object to remove.
     * @return $this|ChildInvTransferOrder The current object (for fluent API support)
     */
    public function removeInvTransferLotserial(ChildInvTransferLotserial $invTransferLotserial)
    {
        if ($this->getInvTransferLotserials()->contains($invTransferLotserial)) {
            $pos = $this->collInvTransferLotserials->search($invTransferLotserial);
            $this->collInvTransferLotserials->remove($pos);
            if (null === $this->invTransferLotserialsScheduledForDeletion) {
                $this->invTransferLotserialsScheduledForDeletion = clone $this->collInvTransferLotserials;
                $this->invTransferLotserialsScheduledForDeletion->clear();
            }
            $this->invTransferLotserialsScheduledForDeletion[]= clone $invTransferLotserial;
            $invTransferLotserial->setInvTransferOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvTransferDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferDetail', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }

    /**
     * Clears out the collInvTransferPreAllocatedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferPreAllocatedLotserials()
     */
    public function clearInvTransferPreAllocatedLotserials()
    {
        $this->collInvTransferPreAllocatedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferPreAllocatedLotserials collection loaded partially.
     */
    public function resetPartialInvTransferPreAllocatedLotserials($v = true)
    {
        $this->collInvTransferPreAllocatedLotserialsPartial = $v;
    }

    /**
     * Initializes the collInvTransferPreAllocatedLotserials collection.
     *
     * By default this just sets the collInvTransferPreAllocatedLotserials collection to an empty array (like clearcollInvTransferPreAllocatedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferPreAllocatedLotserials($overrideExisting = true)
    {
        if (null !== $this->collInvTransferPreAllocatedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferPreAllocatedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferPreAllocatedLotserials = new $collectionClassName;
        $this->collInvTransferPreAllocatedLotserials->setModel('\InvTransferPreAllocatedLotserial');
    }

    /**
     * Gets an array of ChildInvTransferPreAllocatedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvTransferOrder is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     * @throws PropelException
     */
    public function getInvTransferPreAllocatedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPreAllocatedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPreAllocatedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPreAllocatedLotserials) {
                // return empty collection
                $this->initInvTransferPreAllocatedLotserials();
            } else {
                $collInvTransferPreAllocatedLotserials = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria)
                    ->filterByInvTransferOrder($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferPreAllocatedLotserialsPartial && count($collInvTransferPreAllocatedLotserials)) {
                        $this->initInvTransferPreAllocatedLotserials(false);

                        foreach ($collInvTransferPreAllocatedLotserials as $obj) {
                            if (false == $this->collInvTransferPreAllocatedLotserials->contains($obj)) {
                                $this->collInvTransferPreAllocatedLotserials->append($obj);
                            }
                        }

                        $this->collInvTransferPreAllocatedLotserialsPartial = true;
                    }

                    return $collInvTransferPreAllocatedLotserials;
                }

                if ($partial && $this->collInvTransferPreAllocatedLotserials) {
                    foreach ($this->collInvTransferPreAllocatedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferPreAllocatedLotserials[] = $obj;
                        }
                    }
                }

                $this->collInvTransferPreAllocatedLotserials = $collInvTransferPreAllocatedLotserials;
                $this->collInvTransferPreAllocatedLotserialsPartial = false;
            }
        }

        return $this->collInvTransferPreAllocatedLotserials;
    }

    /**
     * Sets a collection of ChildInvTransferPreAllocatedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferPreAllocatedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvTransferOrder The current object (for fluent API support)
     */
    public function setInvTransferPreAllocatedLotserials(Collection $invTransferPreAllocatedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferPreAllocatedLotserial[] $invTransferPreAllocatedLotserialsToDelete */
        $invTransferPreAllocatedLotserialsToDelete = $this->getInvTransferPreAllocatedLotserials(new Criteria(), $con)->diff($invTransferPreAllocatedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferPreAllocatedLotserialsScheduledForDeletion = clone $invTransferPreAllocatedLotserialsToDelete;

        foreach ($invTransferPreAllocatedLotserialsToDelete as $invTransferPreAllocatedLotserialRemoved) {
            $invTransferPreAllocatedLotserialRemoved->setInvTransferOrder(null);
        }

        $this->collInvTransferPreAllocatedLotserials = null;
        foreach ($invTransferPreAllocatedLotserials as $invTransferPreAllocatedLotserial) {
            $this->addInvTransferPreAllocatedLotserial($invTransferPreAllocatedLotserial);
        }

        $this->collInvTransferPreAllocatedLotserials = $invTransferPreAllocatedLotserials;
        $this->collInvTransferPreAllocatedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferPreAllocatedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferPreAllocatedLotserial objects.
     * @throws PropelException
     */
    public function countInvTransferPreAllocatedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPreAllocatedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPreAllocatedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPreAllocatedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferPreAllocatedLotserials());
            }

            $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvTransferOrder($this)
                ->count($con);
        }

        return count($this->collInvTransferPreAllocatedLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferPreAllocatedLotserial object to this object
     * through the ChildInvTransferPreAllocatedLotserial foreign key attribute.
     *
     * @param  ChildInvTransferPreAllocatedLotserial $l ChildInvTransferPreAllocatedLotserial
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function addInvTransferPreAllocatedLotserial(ChildInvTransferPreAllocatedLotserial $l)
    {
        if ($this->collInvTransferPreAllocatedLotserials === null) {
            $this->initInvTransferPreAllocatedLotserials();
            $this->collInvTransferPreAllocatedLotserialsPartial = true;
        }

        if (!$this->collInvTransferPreAllocatedLotserials->contains($l)) {
            $this->doAddInvTransferPreAllocatedLotserial($l);

            if ($this->invTransferPreAllocatedLotserialsScheduledForDeletion and $this->invTransferPreAllocatedLotserialsScheduledForDeletion->contains($l)) {
                $this->invTransferPreAllocatedLotserialsScheduledForDeletion->remove($this->invTransferPreAllocatedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial The ChildInvTransferPreAllocatedLotserial object to add.
     */
    protected function doAddInvTransferPreAllocatedLotserial(ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial)
    {
        $this->collInvTransferPreAllocatedLotserials[]= $invTransferPreAllocatedLotserial;
        $invTransferPreAllocatedLotserial->setInvTransferOrder($this);
    }

    /**
     * @param  ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial The ChildInvTransferPreAllocatedLotserial object to remove.
     * @return $this|ChildInvTransferOrder The current object (for fluent API support)
     */
    public function removeInvTransferPreAllocatedLotserial(ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial)
    {
        if ($this->getInvTransferPreAllocatedLotserials()->contains($invTransferPreAllocatedLotserial)) {
            $pos = $this->collInvTransferPreAllocatedLotserials->search($invTransferPreAllocatedLotserial);
            $this->collInvTransferPreAllocatedLotserials->remove($pos);
            if (null === $this->invTransferPreAllocatedLotserialsScheduledForDeletion) {
                $this->invTransferPreAllocatedLotserialsScheduledForDeletion = clone $this->collInvTransferPreAllocatedLotserials;
                $this->invTransferPreAllocatedLotserialsScheduledForDeletion->clear();
            }
            $this->invTransferPreAllocatedLotserialsScheduledForDeletion[]= clone $invTransferPreAllocatedLotserial;
            $invTransferPreAllocatedLotserial->setInvTransferOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinInvTransferDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferDetail', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }

    /**
     * Clears out the collInvTransferPickedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferPickedLotserials()
     */
    public function clearInvTransferPickedLotserials()
    {
        $this->collInvTransferPickedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferPickedLotserials collection loaded partially.
     */
    public function resetPartialInvTransferPickedLotserials($v = true)
    {
        $this->collInvTransferPickedLotserialsPartial = $v;
    }

    /**
     * Initializes the collInvTransferPickedLotserials collection.
     *
     * By default this just sets the collInvTransferPickedLotserials collection to an empty array (like clearcollInvTransferPickedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferPickedLotserials($overrideExisting = true)
    {
        if (null !== $this->collInvTransferPickedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferPickedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferPickedLotserials = new $collectionClassName;
        $this->collInvTransferPickedLotserials->setModel('\InvTransferPickedLotserial');
    }

    /**
     * Gets an array of ChildInvTransferPickedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvTransferOrder is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     * @throws PropelException
     */
    public function getInvTransferPickedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPickedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPickedLotserials) {
                // return empty collection
                $this->initInvTransferPickedLotserials();
            } else {
                $collInvTransferPickedLotserials = ChildInvTransferPickedLotserialQuery::create(null, $criteria)
                    ->filterByInvTransferOrder($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferPickedLotserialsPartial && count($collInvTransferPickedLotserials)) {
                        $this->initInvTransferPickedLotserials(false);

                        foreach ($collInvTransferPickedLotserials as $obj) {
                            if (false == $this->collInvTransferPickedLotserials->contains($obj)) {
                                $this->collInvTransferPickedLotserials->append($obj);
                            }
                        }

                        $this->collInvTransferPickedLotserialsPartial = true;
                    }

                    return $collInvTransferPickedLotserials;
                }

                if ($partial && $this->collInvTransferPickedLotserials) {
                    foreach ($this->collInvTransferPickedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferPickedLotserials[] = $obj;
                        }
                    }
                }

                $this->collInvTransferPickedLotserials = $collInvTransferPickedLotserials;
                $this->collInvTransferPickedLotserialsPartial = false;
            }
        }

        return $this->collInvTransferPickedLotserials;
    }

    /**
     * Sets a collection of ChildInvTransferPickedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferPickedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvTransferOrder The current object (for fluent API support)
     */
    public function setInvTransferPickedLotserials(Collection $invTransferPickedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferPickedLotserial[] $invTransferPickedLotserialsToDelete */
        $invTransferPickedLotserialsToDelete = $this->getInvTransferPickedLotserials(new Criteria(), $con)->diff($invTransferPickedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferPickedLotserialsScheduledForDeletion = clone $invTransferPickedLotserialsToDelete;

        foreach ($invTransferPickedLotserialsToDelete as $invTransferPickedLotserialRemoved) {
            $invTransferPickedLotserialRemoved->setInvTransferOrder(null);
        }

        $this->collInvTransferPickedLotserials = null;
        foreach ($invTransferPickedLotserials as $invTransferPickedLotserial) {
            $this->addInvTransferPickedLotserial($invTransferPickedLotserial);
        }

        $this->collInvTransferPickedLotserials = $invTransferPickedLotserials;
        $this->collInvTransferPickedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferPickedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferPickedLotserial objects.
     * @throws PropelException
     */
    public function countInvTransferPickedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPickedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPickedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferPickedLotserials());
            }

            $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvTransferOrder($this)
                ->count($con);
        }

        return count($this->collInvTransferPickedLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferPickedLotserial object to this object
     * through the ChildInvTransferPickedLotserial foreign key attribute.
     *
     * @param  ChildInvTransferPickedLotserial $l ChildInvTransferPickedLotserial
     * @return $this|\InvTransferOrder The current object (for fluent API support)
     */
    public function addInvTransferPickedLotserial(ChildInvTransferPickedLotserial $l)
    {
        if ($this->collInvTransferPickedLotserials === null) {
            $this->initInvTransferPickedLotserials();
            $this->collInvTransferPickedLotserialsPartial = true;
        }

        if (!$this->collInvTransferPickedLotserials->contains($l)) {
            $this->doAddInvTransferPickedLotserial($l);

            if ($this->invTransferPickedLotserialsScheduledForDeletion and $this->invTransferPickedLotserialsScheduledForDeletion->contains($l)) {
                $this->invTransferPickedLotserialsScheduledForDeletion->remove($this->invTransferPickedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferPickedLotserial $invTransferPickedLotserial The ChildInvTransferPickedLotserial object to add.
     */
    protected function doAddInvTransferPickedLotserial(ChildInvTransferPickedLotserial $invTransferPickedLotserial)
    {
        $this->collInvTransferPickedLotserials[]= $invTransferPickedLotserial;
        $invTransferPickedLotserial->setInvTransferOrder($this);
    }

    /**
     * @param  ChildInvTransferPickedLotserial $invTransferPickedLotserial The ChildInvTransferPickedLotserial object to remove.
     * @return $this|ChildInvTransferOrder The current object (for fluent API support)
     */
    public function removeInvTransferPickedLotserial(ChildInvTransferPickedLotserial $invTransferPickedLotserial)
    {
        if ($this->getInvTransferPickedLotserials()->contains($invTransferPickedLotserial)) {
            $pos = $this->collInvTransferPickedLotserials->search($invTransferPickedLotserial);
            $this->collInvTransferPickedLotserials->remove($pos);
            if (null === $this->invTransferPickedLotserialsScheduledForDeletion) {
                $this->invTransferPickedLotserialsScheduledForDeletion = clone $this->collInvTransferPickedLotserials;
                $this->invTransferPickedLotserialsScheduledForDeletion->clear();
            }
            $this->invTransferPickedLotserialsScheduledForDeletion[]= clone $invTransferPickedLotserial;
            $invTransferPickedLotserial->setInvTransferOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvTransferDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferDetail', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferOrder is new, it will return
     * an empty collection; or if this InvTransferOrder has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aWarehouseRelatedByIntbwhsefrom) {
            $this->aWarehouseRelatedByIntbwhsefrom->removeInvTransferOrderRelatedByIntbwhsefrom($this);
        }
        if (null !== $this->aWarehouseRelatedByIntbwhseto) {
            $this->aWarehouseRelatedByIntbwhseto->removeInvTransferOrderRelatedByIntbwhseto($this);
        }
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeInvTransferOrder($this);
        }
        if (null !== $this->aCustomerShipto) {
            $this->aCustomerShipto->removeInvTransferOrder($this);
        }
        if (null !== $this->aVendor) {
            $this->aVendor->removeInvTransferOrder($this);
        }
        $this->inhdnbr = null;
        $this->inhdstat = null;
        $this->intbwhsefrom = null;
        $this->intbwhseto = null;
        $this->artbshipvia = null;
        $this->inhdentdate = null;
        $this->inhdref = null;
        $this->inhdpickdate = null;
        $this->inhdpicktime = null;
        $this->inhdtimespick = null;
        $this->inhdcrntuser = null;
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->inhddept = null;
        $this->inhdpllt = null;
        $this->inhdcntrqty = null;
        $this->inhdwghttot = null;
        $this->inhdtracknbr = null;
        $this->inhdpickqueue = null;
        $this->inhdshipqueue = null;
        $this->apvevendid = null;
        $this->inhdftvend = null;
        $this->inhdtrantype = null;
        $this->inhdfrtcost = null;
        $this->inhdpickcode = null;
        $this->inhdpackcode = null;
        $this->inhdhold = null;
        $this->inhdlabel1prtfmt = null;
        $this->inhdenteredby = null;
        $this->inhdentereddate = null;
        $this->inhdenteredtime = null;
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
            if ($this->collInvTransferDetails) {
                foreach ($this->collInvTransferDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferLotserials) {
                foreach ($this->collInvTransferLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferPreAllocatedLotserials) {
                foreach ($this->collInvTransferPreAllocatedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferPickedLotserials) {
                foreach ($this->collInvTransferPickedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collInvTransferDetails = null;
        $this->collInvTransferLotserials = null;
        $this->collInvTransferPreAllocatedLotserials = null;
        $this->collInvTransferPickedLotserials = null;
        $this->aWarehouseRelatedByIntbwhsefrom = null;
        $this->aWarehouseRelatedByIntbwhseto = null;
        $this->aCustomer = null;
        $this->aCustomerShipto = null;
        $this->aVendor = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvTransferOrderTableMap::DEFAULT_STRING_FORMAT);
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
