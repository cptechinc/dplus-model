<?php

namespace Base;

use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \InvSerialMaster as ChildInvSerialMaster;
use \InvSerialMasterQuery as ChildInvSerialMasterQuery;
use \InvTransferDetail as ChildInvTransferDetail;
use \InvTransferDetailQuery as ChildInvTransferDetailQuery;
use \InvTransferOrder as ChildInvTransferOrder;
use \InvTransferOrderQuery as ChildInvTransferOrderQuery;
use \InvTransferPickedLotserialQuery as ChildInvTransferPickedLotserialQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\InvTransferPickedLotserialTableMap;
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
 * Base class that represents a row from the 'inv_trans_pulled' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvTransferPickedLotserial implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvTransferPickedLotserialTableMap';


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
     * The value for the indtline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $indtline;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the inpdlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdlotser;

    /**
     * The value for the inpdbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdbin;

    /**
     * The value for the inpdplltnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inpdplltnbr;

    /**
     * The value for the inpdcrtnnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inpdcrtnnbr;

    /**
     * The value for the inpdqtyresv field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inpdqtyresv;

    /**
     * The value for the inpdqtyship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inpdqtyship;

    /**
     * The value for the inpdqtynotpost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inpdqtynotpost;

    /**
     * The value for the inpdunitcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inpdunitcost;

    /**
     * The value for the inpdlotserfrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdlotserfrom;

    /**
     * The value for the inpdbinfrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdbinfrom;

    /**
     * The value for the inpdcases field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inpdcases;

    /**
     * The value for the inpdtag field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inpdtag;

    /**
     * The value for the inpdinspctlvl field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdinspctlvl;

    /**
     * The value for the inpdlotref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdlotref;

    /**
     * The value for the inpdcrtnqty field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $inpdcrtnqty;

    /**
     * The value for the inpdlblprtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdlblprtd;

    /**
     * The value for the inpdbatch field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdbatch;

    /**
     * The value for the inpdcuredate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdcuredate;

    /**
     * The value for the inpdbinto field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inpdbinto;

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
     * @var        ChildInvTransferOrder
     */
    protected $aInvTransferOrder;

    /**
     * @var        ChildInvTransferDetail
     */
    protected $aInvTransferDetail;

    /**
     * @var        ChildInvLotMaster
     */
    protected $aInvLotMaster;

    /**
     * @var        ChildInvSerialMaster
     */
    protected $aInvSerialMaster;

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
        $this->inhdnbr = 0;
        $this->indtline = 0;
        $this->inititemnbr = '';
        $this->inpdlotser = '';
        $this->inpdbin = '';
        $this->inpdplltnbr = 0;
        $this->inpdcrtnnbr = 0;
        $this->inpdqtyresv = '0.0000000';
        $this->inpdqtyship = '0.0000000';
        $this->inpdqtynotpost = '0.0000000';
        $this->inpdunitcost = '0.0000000';
        $this->inpdlotserfrom = '';
        $this->inpdbinfrom = '';
        $this->inpdcases = 0;
        $this->inpdtag = 0;
        $this->inpdinspctlvl = '';
        $this->inpdlotref = '';
        $this->inpdcrtnqty = '0';
        $this->inpdlblprtd = '';
        $this->inpdbatch = '';
        $this->inpdcuredate = '';
        $this->inpdbinto = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvTransferPickedLotserial object.
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
     * Compares this with another <code>InvTransferPickedLotserial</code> instance.  If
     * <code>obj</code> is an instance of <code>InvTransferPickedLotserial</code>, delegates to
     * <code>equals(InvTransferPickedLotserial)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvTransferPickedLotserial The current object, for fluid interface
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
     * Get the [indtline] column value.
     *
     * @return int
     */
    public function getIndtline()
    {
        return $this->indtline;
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
     * Get the [inpdlotser] column value.
     *
     * @return string
     */
    public function getInpdlotser()
    {
        return $this->inpdlotser;
    }

    /**
     * Get the [inpdbin] column value.
     *
     * @return string
     */
    public function getInpdbin()
    {
        return $this->inpdbin;
    }

    /**
     * Get the [inpdplltnbr] column value.
     *
     * @return int
     */
    public function getInpdplltnbr()
    {
        return $this->inpdplltnbr;
    }

    /**
     * Get the [inpdcrtnnbr] column value.
     *
     * @return int
     */
    public function getInpdcrtnnbr()
    {
        return $this->inpdcrtnnbr;
    }

    /**
     * Get the [inpdqtyresv] column value.
     *
     * @return string
     */
    public function getInpdqtyresv()
    {
        return $this->inpdqtyresv;
    }

    /**
     * Get the [inpdqtyship] column value.
     *
     * @return string
     */
    public function getInpdqtyship()
    {
        return $this->inpdqtyship;
    }

    /**
     * Get the [inpdqtynotpost] column value.
     *
     * @return string
     */
    public function getInpdqtynotpost()
    {
        return $this->inpdqtynotpost;
    }

    /**
     * Get the [inpdunitcost] column value.
     *
     * @return string
     */
    public function getInpdunitcost()
    {
        return $this->inpdunitcost;
    }

    /**
     * Get the [inpdlotserfrom] column value.
     *
     * @return string
     */
    public function getInpdlotserfrom()
    {
        return $this->inpdlotserfrom;
    }

    /**
     * Get the [inpdbinfrom] column value.
     *
     * @return string
     */
    public function getInpdbinfrom()
    {
        return $this->inpdbinfrom;
    }

    /**
     * Get the [inpdcases] column value.
     *
     * @return int
     */
    public function getInpdcases()
    {
        return $this->inpdcases;
    }

    /**
     * Get the [inpdtag] column value.
     *
     * @return int
     */
    public function getInpdtag()
    {
        return $this->inpdtag;
    }

    /**
     * Get the [inpdinspctlvl] column value.
     *
     * @return string
     */
    public function getInpdinspctlvl()
    {
        return $this->inpdinspctlvl;
    }

    /**
     * Get the [inpdlotref] column value.
     *
     * @return string
     */
    public function getInpdlotref()
    {
        return $this->inpdlotref;
    }

    /**
     * Get the [inpdcrtnqty] column value.
     *
     * @return string
     */
    public function getInpdcrtnqty()
    {
        return $this->inpdcrtnqty;
    }

    /**
     * Get the [inpdlblprtd] column value.
     *
     * @return string
     */
    public function getInpdlblprtd()
    {
        return $this->inpdlblprtd;
    }

    /**
     * Get the [inpdbatch] column value.
     *
     * @return string
     */
    public function getInpdbatch()
    {
        return $this->inpdbatch;
    }

    /**
     * Get the [inpdcuredate] column value.
     *
     * @return string
     */
    public function getInpdcuredate()
    {
        return $this->inpdcuredate;
    }

    /**
     * Get the [inpdbinto] column value.
     *
     * @return string
     */
    public function getInpdbinto()
    {
        return $this->inpdbinto;
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
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInhdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inhdnbr !== $v) {
            $this->inhdnbr = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INHDNBR] = true;
        }

        if ($this->aInvTransferOrder !== null && $this->aInvTransferOrder->getInhdnbr() !== $v) {
            $this->aInvTransferOrder = null;
        }

        if ($this->aInvTransferDetail !== null && $this->aInvTransferDetail->getInhdnbr() !== $v) {
            $this->aInvTransferDetail = null;
        }

        return $this;
    } // setInhdnbr()

    /**
     * Set the value of [indtline] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setIndtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->indtline !== $v) {
            $this->indtline = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INDTLINE] = true;
        }

        if ($this->aInvTransferDetail !== null && $this->aInvTransferDetail->getIndtline() !== $v) {
            $this->aInvTransferDetail = null;
        }

        return $this;
    } // setIndtline()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        if ($this->aInvLotMaster !== null && $this->aInvLotMaster->getInititemnbr() !== $v) {
            $this->aInvLotMaster = null;
        }

        if ($this->aInvSerialMaster !== null && $this->aInvSerialMaster->getInititemnbr() !== $v) {
            $this->aInvSerialMaster = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [inpdlotser] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdlotser !== $v) {
            $this->inpdlotser = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDLOTSER] = true;
        }

        if ($this->aInvLotMaster !== null && $this->aInvLotMaster->getLotmlotnbr() !== $v) {
            $this->aInvLotMaster = null;
        }

        if ($this->aInvSerialMaster !== null && $this->aInvSerialMaster->getSermsernbr() !== $v) {
            $this->aInvSerialMaster = null;
        }

        return $this;
    } // setInpdlotser()

    /**
     * Set the value of [inpdbin] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdbin !== $v) {
            $this->inpdbin = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDBIN] = true;
        }

        return $this;
    } // setInpdbin()

    /**
     * Set the value of [inpdplltnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdplltnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inpdplltnbr !== $v) {
            $this->inpdplltnbr = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR] = true;
        }

        return $this;
    } // setInpdplltnbr()

    /**
     * Set the value of [inpdcrtnnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdcrtnnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inpdcrtnnbr !== $v) {
            $this->inpdcrtnnbr = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR] = true;
        }

        return $this;
    } // setInpdcrtnnbr()

    /**
     * Set the value of [inpdqtyresv] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdqtyresv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdqtyresv !== $v) {
            $this->inpdqtyresv = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDQTYRESV] = true;
        }

        return $this;
    } // setInpdqtyresv()

    /**
     * Set the value of [inpdqtyship] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdqtyship !== $v) {
            $this->inpdqtyship = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP] = true;
        }

        return $this;
    } // setInpdqtyship()

    /**
     * Set the value of [inpdqtynotpost] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdqtynotpost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdqtynotpost !== $v) {
            $this->inpdqtynotpost = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST] = true;
        }

        return $this;
    } // setInpdqtynotpost()

    /**
     * Set the value of [inpdunitcost] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdunitcost !== $v) {
            $this->inpdunitcost = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDUNITCOST] = true;
        }

        return $this;
    } // setInpdunitcost()

    /**
     * Set the value of [inpdlotserfrom] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdlotserfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdlotserfrom !== $v) {
            $this->inpdlotserfrom = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM] = true;
        }

        return $this;
    } // setInpdlotserfrom()

    /**
     * Set the value of [inpdbinfrom] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdbinfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdbinfrom !== $v) {
            $this->inpdbinfrom = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDBINFROM] = true;
        }

        return $this;
    } // setInpdbinfrom()

    /**
     * Set the value of [inpdcases] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdcases($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inpdcases !== $v) {
            $this->inpdcases = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDCASES] = true;
        }

        return $this;
    } // setInpdcases()

    /**
     * Set the value of [inpdtag] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdtag($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inpdtag !== $v) {
            $this->inpdtag = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDTAG] = true;
        }

        return $this;
    } // setInpdtag()

    /**
     * Set the value of [inpdinspctlvl] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdinspctlvl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdinspctlvl !== $v) {
            $this->inpdinspctlvl = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL] = true;
        }

        return $this;
    } // setInpdinspctlvl()

    /**
     * Set the value of [inpdlotref] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdlotref !== $v) {
            $this->inpdlotref = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDLOTREF] = true;
        }

        return $this;
    } // setInpdlotref()

    /**
     * Set the value of [inpdcrtnqty] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdcrtnqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdcrtnqty !== $v) {
            $this->inpdcrtnqty = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY] = true;
        }

        return $this;
    } // setInpdcrtnqty()

    /**
     * Set the value of [inpdlblprtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdlblprtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdlblprtd !== $v) {
            $this->inpdlblprtd = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD] = true;
        }

        return $this;
    } // setInpdlblprtd()

    /**
     * Set the value of [inpdbatch] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdbatch !== $v) {
            $this->inpdbatch = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDBATCH] = true;
        }

        return $this;
    } // setInpdbatch()

    /**
     * Set the value of [inpdcuredate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdcuredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdcuredate !== $v) {
            $this->inpdcuredate = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDCUREDATE] = true;
        }

        return $this;
    } // setInpdcuredate()

    /**
     * Set the value of [inpdbinto] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setInpdbinto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inpdbinto !== $v) {
            $this->inpdbinto = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_INPDBINTO] = true;
        }

        return $this;
    } // setInpdbinto()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvTransferPickedLotserialTableMap::COL_DUMMY] = true;
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

            if ($this->indtline !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->inpdlotser !== '') {
                return false;
            }

            if ($this->inpdbin !== '') {
                return false;
            }

            if ($this->inpdplltnbr !== 0) {
                return false;
            }

            if ($this->inpdcrtnnbr !== 0) {
                return false;
            }

            if ($this->inpdqtyresv !== '0.0000000') {
                return false;
            }

            if ($this->inpdqtyship !== '0.0000000') {
                return false;
            }

            if ($this->inpdqtynotpost !== '0.0000000') {
                return false;
            }

            if ($this->inpdunitcost !== '0.0000000') {
                return false;
            }

            if ($this->inpdlotserfrom !== '') {
                return false;
            }

            if ($this->inpdbinfrom !== '') {
                return false;
            }

            if ($this->inpdcases !== 0) {
                return false;
            }

            if ($this->inpdtag !== 0) {
                return false;
            }

            if ($this->inpdinspctlvl !== '') {
                return false;
            }

            if ($this->inpdlotref !== '') {
                return false;
            }

            if ($this->inpdcrtnqty !== '0') {
                return false;
            }

            if ($this->inpdlblprtd !== '') {
                return false;
            }

            if ($this->inpdbatch !== '') {
                return false;
            }

            if ($this->inpdcuredate !== '') {
                return false;
            }

            if ($this->inpdbinto !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdplltnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdplltnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdcrtnnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdqtyresv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdqtyresv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdqtynotpost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdqtynotpost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdlotserfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdlotserfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdbinfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdbinfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdcases', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdcases = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdtag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdtag = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdinspctlvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdinspctlvl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdcrtnqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdcrtnqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdlblprtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdlblprtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdcuredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdcuredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Inpdbinto', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inpdbinto = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvTransferPickedLotserialTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 25; // 25 = InvTransferPickedLotserialTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvTransferPickedLotserial'), 0, $e);
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
        if ($this->aInvTransferOrder !== null && $this->inhdnbr !== $this->aInvTransferOrder->getInhdnbr()) {
            $this->aInvTransferOrder = null;
        }
        if ($this->aInvTransferDetail !== null && $this->inhdnbr !== $this->aInvTransferDetail->getInhdnbr()) {
            $this->aInvTransferDetail = null;
        }
        if ($this->aInvTransferDetail !== null && $this->indtline !== $this->aInvTransferDetail->getIndtline()) {
            $this->aInvTransferDetail = null;
        }
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aInvLotMaster !== null && $this->inititemnbr !== $this->aInvLotMaster->getInititemnbr()) {
            $this->aInvLotMaster = null;
        }
        if ($this->aInvSerialMaster !== null && $this->inititemnbr !== $this->aInvSerialMaster->getInititemnbr()) {
            $this->aInvSerialMaster = null;
        }
        if ($this->aInvLotMaster !== null && $this->inpdlotser !== $this->aInvLotMaster->getLotmlotnbr()) {
            $this->aInvLotMaster = null;
        }
        if ($this->aInvSerialMaster !== null && $this->inpdlotser !== $this->aInvSerialMaster->getSermsernbr()) {
            $this->aInvSerialMaster = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferPickedLotserialTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvTransferPickedLotserialQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
            $this->aInvTransferOrder = null;
            $this->aInvTransferDetail = null;
            $this->aInvLotMaster = null;
            $this->aInvSerialMaster = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvTransferPickedLotserial::setDeleted()
     * @see InvTransferPickedLotserial::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPickedLotserialTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvTransferPickedLotserialQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPickedLotserialTableMap::DATABASE_NAME);
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
                InvTransferPickedLotserialTableMap::addInstanceToPool($this);
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

            if ($this->aInvTransferOrder !== null) {
                if ($this->aInvTransferOrder->isModified() || $this->aInvTransferOrder->isNew()) {
                    $affectedRows += $this->aInvTransferOrder->save($con);
                }
                $this->setInvTransferOrder($this->aInvTransferOrder);
            }

            if ($this->aInvTransferDetail !== null) {
                if ($this->aInvTransferDetail->isModified() || $this->aInvTransferDetail->isNew()) {
                    $affectedRows += $this->aInvTransferDetail->save($con);
                }
                $this->setInvTransferDetail($this->aInvTransferDetail);
            }

            if ($this->aInvLotMaster !== null) {
                if ($this->aInvLotMaster->isModified() || $this->aInvLotMaster->isNew()) {
                    $affectedRows += $this->aInvLotMaster->save($con);
                }
                $this->setInvLotMaster($this->aInvLotMaster);
            }

            if ($this->aInvSerialMaster !== null) {
                if ($this->aInvSerialMaster->isModified() || $this->aInvSerialMaster->isNew()) {
                    $affectedRows += $this->aInvSerialMaster->save($con);
                }
                $this->setInvSerialMaster($this->aInvSerialMaster);
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
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InhdNbr';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'IndtLine';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'InpdLotSer';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InpdBin';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InpdPlltNbr';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InpdCrtnNbr';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDQTYRESV)) {
            $modifiedColumns[':p' . $index++]  = 'InpdQtyResv';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'InpdQtyShip';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST)) {
            $modifiedColumns[':p' . $index++]  = 'InpdQtyNotPost';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InpdUnitCost';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM)) {
            $modifiedColumns[':p' . $index++]  = 'InpdLotSerFrom';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDBINFROM)) {
            $modifiedColumns[':p' . $index++]  = 'InpdBinFrom';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDCASES)) {
            $modifiedColumns[':p' . $index++]  = 'InpdCases';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDTAG)) {
            $modifiedColumns[':p' . $index++]  = 'InpdTag';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL)) {
            $modifiedColumns[':p' . $index++]  = 'InpdInspctLvl';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'InpdLotRef';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InpdCrtnQty';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD)) {
            $modifiedColumns[':p' . $index++]  = 'InpdLblPrtd';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'InpdBatch';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDCUREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InpdCureDate';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDBINTO)) {
            $modifiedColumns[':p' . $index++]  = 'InpdBinTo';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_trans_pulled (%s) VALUES (%s)',
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
                    case 'IndtLine':
                        $stmt->bindValue($identifier, $this->indtline, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'InpdLotSer':
                        $stmt->bindValue($identifier, $this->inpdlotser, PDO::PARAM_STR);
                        break;
                    case 'InpdBin':
                        $stmt->bindValue($identifier, $this->inpdbin, PDO::PARAM_STR);
                        break;
                    case 'InpdPlltNbr':
                        $stmt->bindValue($identifier, $this->inpdplltnbr, PDO::PARAM_INT);
                        break;
                    case 'InpdCrtnNbr':
                        $stmt->bindValue($identifier, $this->inpdcrtnnbr, PDO::PARAM_INT);
                        break;
                    case 'InpdQtyResv':
                        $stmt->bindValue($identifier, $this->inpdqtyresv, PDO::PARAM_STR);
                        break;
                    case 'InpdQtyShip':
                        $stmt->bindValue($identifier, $this->inpdqtyship, PDO::PARAM_STR);
                        break;
                    case 'InpdQtyNotPost':
                        $stmt->bindValue($identifier, $this->inpdqtynotpost, PDO::PARAM_STR);
                        break;
                    case 'InpdUnitCost':
                        $stmt->bindValue($identifier, $this->inpdunitcost, PDO::PARAM_STR);
                        break;
                    case 'InpdLotSerFrom':
                        $stmt->bindValue($identifier, $this->inpdlotserfrom, PDO::PARAM_STR);
                        break;
                    case 'InpdBinFrom':
                        $stmt->bindValue($identifier, $this->inpdbinfrom, PDO::PARAM_STR);
                        break;
                    case 'InpdCases':
                        $stmt->bindValue($identifier, $this->inpdcases, PDO::PARAM_INT);
                        break;
                    case 'InpdTag':
                        $stmt->bindValue($identifier, $this->inpdtag, PDO::PARAM_INT);
                        break;
                    case 'InpdInspctLvl':
                        $stmt->bindValue($identifier, $this->inpdinspctlvl, PDO::PARAM_STR);
                        break;
                    case 'InpdLotRef':
                        $stmt->bindValue($identifier, $this->inpdlotref, PDO::PARAM_STR);
                        break;
                    case 'InpdCrtnQty':
                        $stmt->bindValue($identifier, $this->inpdcrtnqty, PDO::PARAM_STR);
                        break;
                    case 'InpdLblPrtd':
                        $stmt->bindValue($identifier, $this->inpdlblprtd, PDO::PARAM_STR);
                        break;
                    case 'InpdBatch':
                        $stmt->bindValue($identifier, $this->inpdbatch, PDO::PARAM_STR);
                        break;
                    case 'InpdCureDate':
                        $stmt->bindValue($identifier, $this->inpdcuredate, PDO::PARAM_STR);
                        break;
                    case 'InpdBinTo':
                        $stmt->bindValue($identifier, $this->inpdbinto, PDO::PARAM_STR);
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
        $pos = InvTransferPickedLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIndtline();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getInpdlotser();
                break;
            case 4:
                return $this->getInpdbin();
                break;
            case 5:
                return $this->getInpdplltnbr();
                break;
            case 6:
                return $this->getInpdcrtnnbr();
                break;
            case 7:
                return $this->getInpdqtyresv();
                break;
            case 8:
                return $this->getInpdqtyship();
                break;
            case 9:
                return $this->getInpdqtynotpost();
                break;
            case 10:
                return $this->getInpdunitcost();
                break;
            case 11:
                return $this->getInpdlotserfrom();
                break;
            case 12:
                return $this->getInpdbinfrom();
                break;
            case 13:
                return $this->getInpdcases();
                break;
            case 14:
                return $this->getInpdtag();
                break;
            case 15:
                return $this->getInpdinspctlvl();
                break;
            case 16:
                return $this->getInpdlotref();
                break;
            case 17:
                return $this->getInpdcrtnqty();
                break;
            case 18:
                return $this->getInpdlblprtd();
                break;
            case 19:
                return $this->getInpdbatch();
                break;
            case 20:
                return $this->getInpdcuredate();
                break;
            case 21:
                return $this->getInpdbinto();
                break;
            case 22:
                return $this->getDateupdtd();
                break;
            case 23:
                return $this->getTimeupdtd();
                break;
            case 24:
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

        if (isset($alreadyDumpedObjects['InvTransferPickedLotserial'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvTransferPickedLotserial'][$this->hashCode()] = true;
        $keys = InvTransferPickedLotserialTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInhdnbr(),
            $keys[1] => $this->getIndtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getInpdlotser(),
            $keys[4] => $this->getInpdbin(),
            $keys[5] => $this->getInpdplltnbr(),
            $keys[6] => $this->getInpdcrtnnbr(),
            $keys[7] => $this->getInpdqtyresv(),
            $keys[8] => $this->getInpdqtyship(),
            $keys[9] => $this->getInpdqtynotpost(),
            $keys[10] => $this->getInpdunitcost(),
            $keys[11] => $this->getInpdlotserfrom(),
            $keys[12] => $this->getInpdbinfrom(),
            $keys[13] => $this->getInpdcases(),
            $keys[14] => $this->getInpdtag(),
            $keys[15] => $this->getInpdinspctlvl(),
            $keys[16] => $this->getInpdlotref(),
            $keys[17] => $this->getInpdcrtnqty(),
            $keys[18] => $this->getInpdlblprtd(),
            $keys[19] => $this->getInpdbatch(),
            $keys[20] => $this->getInpdcuredate(),
            $keys[21] => $this->getInpdbinto(),
            $keys[22] => $this->getDateupdtd(),
            $keys[23] => $this->getTimeupdtd(),
            $keys[24] => $this->getDummy(),
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
            if (null !== $this->aInvTransferOrder) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferOrder';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_head';
                        break;
                    default:
                        $key = 'InvTransferOrder';
                }

                $result[$key] = $this->aInvTransferOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvTransferDetail) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferDetail';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_det';
                        break;
                    default:
                        $key = 'InvTransferDetail';
                }

                $result[$key] = $this->aInvTransferDetail->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->aInvSerialMaster) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invSerialMaster';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_ser_mast';
                        break;
                    default:
                        $key = 'InvSerialMaster';
                }

                $result[$key] = $this->aInvSerialMaster->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\InvTransferPickedLotserial
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvTransferPickedLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvTransferPickedLotserial
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInhdnbr($value);
                break;
            case 1:
                $this->setIndtline($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setInpdlotser($value);
                break;
            case 4:
                $this->setInpdbin($value);
                break;
            case 5:
                $this->setInpdplltnbr($value);
                break;
            case 6:
                $this->setInpdcrtnnbr($value);
                break;
            case 7:
                $this->setInpdqtyresv($value);
                break;
            case 8:
                $this->setInpdqtyship($value);
                break;
            case 9:
                $this->setInpdqtynotpost($value);
                break;
            case 10:
                $this->setInpdunitcost($value);
                break;
            case 11:
                $this->setInpdlotserfrom($value);
                break;
            case 12:
                $this->setInpdbinfrom($value);
                break;
            case 13:
                $this->setInpdcases($value);
                break;
            case 14:
                $this->setInpdtag($value);
                break;
            case 15:
                $this->setInpdinspctlvl($value);
                break;
            case 16:
                $this->setInpdlotref($value);
                break;
            case 17:
                $this->setInpdcrtnqty($value);
                break;
            case 18:
                $this->setInpdlblprtd($value);
                break;
            case 19:
                $this->setInpdbatch($value);
                break;
            case 20:
                $this->setInpdcuredate($value);
                break;
            case 21:
                $this->setInpdbinto($value);
                break;
            case 22:
                $this->setDateupdtd($value);
                break;
            case 23:
                $this->setTimeupdtd($value);
                break;
            case 24:
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
        $keys = InvTransferPickedLotserialTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInhdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIndtline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInpdlotser($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInpdbin($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInpdplltnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInpdcrtnnbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInpdqtyresv($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setInpdqtyship($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setInpdqtynotpost($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInpdunitcost($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInpdlotserfrom($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInpdbinfrom($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInpdcases($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInpdtag($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInpdinspctlvl($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInpdlotref($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInpdcrtnqty($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInpdlblprtd($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInpdbatch($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setInpdcuredate($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setInpdbinto($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setDateupdtd($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setTimeupdtd($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setDummy($arr[$keys[24]]);
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
     * @return $this|\InvTransferPickedLotserial The current object, for fluid interface
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
        $criteria = new Criteria(InvTransferPickedLotserialTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INHDNBR)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INHDNBR, $this->inhdnbr);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INDTLINE)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INDTLINE, $this->indtline);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDLOTSER)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDLOTSER, $this->inpdlotser);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDBIN)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDBIN, $this->inpdbin);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, $this->inpdplltnbr);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, $this->inpdcrtnnbr);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDQTYRESV)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDQTYRESV, $this->inpdqtyresv);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP, $this->inpdqtyship);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST, $this->inpdqtynotpost);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDUNITCOST)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDUNITCOST, $this->inpdunitcost);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM, $this->inpdlotserfrom);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDBINFROM)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDBINFROM, $this->inpdbinfrom);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDCASES)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDCASES, $this->inpdcases);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDTAG)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDTAG, $this->inpdtag);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL, $this->inpdinspctlvl);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDLOTREF)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDLOTREF, $this->inpdlotref);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY, $this->inpdcrtnqty);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD, $this->inpdlblprtd);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDBATCH)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDBATCH, $this->inpdbatch);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDCUREDATE)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDCUREDATE, $this->inpdcuredate);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_INPDBINTO)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDBINTO, $this->inpdbinto);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvTransferPickedLotserialTableMap::COL_DUMMY)) {
            $criteria->add(InvTransferPickedLotserialTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvTransferPickedLotserialQuery::create();
        $criteria->add(InvTransferPickedLotserialTableMap::COL_INHDNBR, $this->inhdnbr);
        $criteria->add(InvTransferPickedLotserialTableMap::COL_INDTLINE, $this->indtline);
        $criteria->add(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDLOTSER, $this->inpdlotser);
        $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDBIN, $this->inpdbin);
        $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, $this->inpdplltnbr);
        $criteria->add(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, $this->inpdcrtnnbr);

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
        $validPk = null !== $this->getInhdnbr() &&
            null !== $this->getIndtline() &&
            null !== $this->getInititemnbr() &&
            null !== $this->getInpdlotser() &&
            null !== $this->getInpdbin() &&
            null !== $this->getInpdplltnbr() &&
            null !== $this->getInpdcrtnnbr();

        $validPrimaryKeyFKs = 8;
        $primaryKeyFKs = [];

        //relation item to table inv_item_mast
        if ($this->aItemMasterItem && $hash = spl_object_hash($this->aItemMasterItem)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation transferOrder to table inv_trans_head
        if ($this->aInvTransferOrder && $hash = spl_object_hash($this->aInvTransferOrder)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation transferDetail to table inv_trans_det
        if ($this->aInvTransferDetail && $hash = spl_object_hash($this->aInvTransferDetail)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation lot to table inv_lot_mast
        if ($this->aInvLotMaster && $hash = spl_object_hash($this->aInvLotMaster)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation serial to table inv_ser_mast
        if ($this->aInvSerialMaster && $hash = spl_object_hash($this->aInvSerialMaster)) {
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
        $pks[0] = $this->getInhdnbr();
        $pks[1] = $this->getIndtline();
        $pks[2] = $this->getInititemnbr();
        $pks[3] = $this->getInpdlotser();
        $pks[4] = $this->getInpdbin();
        $pks[5] = $this->getInpdplltnbr();
        $pks[6] = $this->getInpdcrtnnbr();

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
        $this->setInhdnbr($keys[0]);
        $this->setIndtline($keys[1]);
        $this->setInititemnbr($keys[2]);
        $this->setInpdlotser($keys[3]);
        $this->setInpdbin($keys[4]);
        $this->setInpdplltnbr($keys[5]);
        $this->setInpdcrtnnbr($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInhdnbr()) && (null === $this->getIndtline()) && (null === $this->getInititemnbr()) && (null === $this->getInpdlotser()) && (null === $this->getInpdbin()) && (null === $this->getInpdplltnbr()) && (null === $this->getInpdcrtnnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvTransferPickedLotserial (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInhdnbr($this->getInhdnbr());
        $copyObj->setIndtline($this->getIndtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setInpdlotser($this->getInpdlotser());
        $copyObj->setInpdbin($this->getInpdbin());
        $copyObj->setInpdplltnbr($this->getInpdplltnbr());
        $copyObj->setInpdcrtnnbr($this->getInpdcrtnnbr());
        $copyObj->setInpdqtyresv($this->getInpdqtyresv());
        $copyObj->setInpdqtyship($this->getInpdqtyship());
        $copyObj->setInpdqtynotpost($this->getInpdqtynotpost());
        $copyObj->setInpdunitcost($this->getInpdunitcost());
        $copyObj->setInpdlotserfrom($this->getInpdlotserfrom());
        $copyObj->setInpdbinfrom($this->getInpdbinfrom());
        $copyObj->setInpdcases($this->getInpdcases());
        $copyObj->setInpdtag($this->getInpdtag());
        $copyObj->setInpdinspctlvl($this->getInpdinspctlvl());
        $copyObj->setInpdlotref($this->getInpdlotref());
        $copyObj->setInpdcrtnqty($this->getInpdcrtnqty());
        $copyObj->setInpdlblprtd($this->getInpdlblprtd());
        $copyObj->setInpdbatch($this->getInpdbatch());
        $copyObj->setInpdcuredate($this->getInpdcuredate());
        $copyObj->setInpdbinto($this->getInpdbinto());
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
     * @return \InvTransferPickedLotserial Clone of current object.
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
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
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
            $v->addInvTransferPickedLotserial($this);
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
                $this->aItemMasterItem->addInvTransferPickedLotserials($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildInvTransferOrder object.
     *
     * @param  ChildInvTransferOrder $v
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvTransferOrder(ChildInvTransferOrder $v = null)
    {
        if ($v === null) {
            $this->setInhdnbr(0);
        } else {
            $this->setInhdnbr($v->getInhdnbr());
        }

        $this->aInvTransferOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvTransferOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferPickedLotserial($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvTransferOrder object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvTransferOrder The associated ChildInvTransferOrder object.
     * @throws PropelException
     */
    public function getInvTransferOrder(ConnectionInterface $con = null)
    {
        if ($this->aInvTransferOrder === null && ($this->inhdnbr != 0)) {
            $this->aInvTransferOrder = ChildInvTransferOrderQuery::create()->findPk($this->inhdnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvTransferOrder->addInvTransferPickedLotserials($this);
             */
        }

        return $this->aInvTransferOrder;
    }

    /**
     * Declares an association between this object and a ChildInvTransferDetail object.
     *
     * @param  ChildInvTransferDetail $v
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvTransferDetail(ChildInvTransferDetail $v = null)
    {
        if ($v === null) {
            $this->setInhdnbr(0);
        } else {
            $this->setInhdnbr($v->getInhdnbr());
        }

        if ($v === null) {
            $this->setIndtline(0);
        } else {
            $this->setIndtline($v->getIndtline());
        }

        $this->aInvTransferDetail = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvTransferDetail object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferPickedLotserial($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvTransferDetail object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvTransferDetail The associated ChildInvTransferDetail object.
     * @throws PropelException
     */
    public function getInvTransferDetail(ConnectionInterface $con = null)
    {
        if ($this->aInvTransferDetail === null && ($this->inhdnbr != 0 && $this->indtline != 0)) {
            $this->aInvTransferDetail = ChildInvTransferDetailQuery::create()->findPk(array($this->inhdnbr, $this->indtline), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvTransferDetail->addInvTransferPickedLotserials($this);
             */
        }

        return $this->aInvTransferDetail;
    }

    /**
     * Declares an association between this object and a ChildInvLotMaster object.
     *
     * @param  ChildInvLotMaster $v
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
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
            $this->setInpdlotser('');
        } else {
            $this->setInpdlotser($v->getLotmlotnbr());
        }

        $this->aInvLotMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvLotMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferPickedLotserial($this);
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
        if ($this->aInvLotMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->inpdlotser !== "" && $this->inpdlotser !== null))) {
            $this->aInvLotMaster = ChildInvLotMasterQuery::create()->findPk(array($this->inititemnbr, $this->inpdlotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvLotMaster->addInvTransferPickedLotserials($this);
             */
        }

        return $this->aInvLotMaster;
    }

    /**
     * Declares an association between this object and a ChildInvSerialMaster object.
     *
     * @param  ChildInvSerialMaster $v
     * @return $this|\InvTransferPickedLotserial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvSerialMaster(ChildInvSerialMaster $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        if ($v === null) {
            $this->setInpdlotser('');
        } else {
            $this->setInpdlotser($v->getSermsernbr());
        }

        $this->aInvSerialMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvSerialMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferPickedLotserial($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvSerialMaster object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvSerialMaster The associated ChildInvSerialMaster object.
     * @throws PropelException
     */
    public function getInvSerialMaster(ConnectionInterface $con = null)
    {
        if ($this->aInvSerialMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->inpdlotser !== "" && $this->inpdlotser !== null))) {
            $this->aInvSerialMaster = ChildInvSerialMasterQuery::create()->findPk(array($this->inititemnbr, $this->inpdlotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvSerialMaster->addInvTransferPickedLotserials($this);
             */
        }

        return $this->aInvSerialMaster;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeInvTransferPickedLotserial($this);
        }
        if (null !== $this->aInvTransferOrder) {
            $this->aInvTransferOrder->removeInvTransferPickedLotserial($this);
        }
        if (null !== $this->aInvTransferDetail) {
            $this->aInvTransferDetail->removeInvTransferPickedLotserial($this);
        }
        if (null !== $this->aInvLotMaster) {
            $this->aInvLotMaster->removeInvTransferPickedLotserial($this);
        }
        if (null !== $this->aInvSerialMaster) {
            $this->aInvSerialMaster->removeInvTransferPickedLotserial($this);
        }
        $this->inhdnbr = null;
        $this->indtline = null;
        $this->inititemnbr = null;
        $this->inpdlotser = null;
        $this->inpdbin = null;
        $this->inpdplltnbr = null;
        $this->inpdcrtnnbr = null;
        $this->inpdqtyresv = null;
        $this->inpdqtyship = null;
        $this->inpdqtynotpost = null;
        $this->inpdunitcost = null;
        $this->inpdlotserfrom = null;
        $this->inpdbinfrom = null;
        $this->inpdcases = null;
        $this->inpdtag = null;
        $this->inpdinspctlvl = null;
        $this->inpdlotref = null;
        $this->inpdcrtnqty = null;
        $this->inpdlblprtd = null;
        $this->inpdbatch = null;
        $this->inpdcuredate = null;
        $this->inpdbinto = null;
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
        $this->aInvTransferOrder = null;
        $this->aInvTransferDetail = null;
        $this->aInvLotMaster = null;
        $this->aInvSerialMaster = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvTransferPickedLotserialTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preSave')) {
        //     return parent::preSave($con);
        // }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postSave')) {
        //     parent::postSave($con);
        // }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preInsert')) {
        //     return parent::preInsert($con);
        // }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postInsert')) {
        //     parent::postInsert($con);
        // }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preUpdate')) {
        //     return parent::preUpdate($con);
        // }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postUpdate')) {
        //     parent::postUpdate($con);
        // }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preDelete')) {
        //     return parent::preDelete($con);
        // }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postDelete')) {
        //     parent::postDelete($con);
        // }
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
