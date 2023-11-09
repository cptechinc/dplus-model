<?php

namespace Base;

use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \InvSerialMaster as ChildInvSerialMaster;
use \InvSerialMasterQuery as ChildInvSerialMasterQuery;
use \InvTransferDetail as ChildInvTransferDetail;
use \InvTransferDetailQuery as ChildInvTransferDetailQuery;
use \InvTransferLotserialQuery as ChildInvTransferLotserialQuery;
use \InvTransferOrder as ChildInvTransferOrder;
use \InvTransferOrderQuery as ChildInvTransferOrderQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\InvTransferLotserialTableMap;
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
 * Base class that represents a row from the 'inv_trans_lotser' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvTransferLotserial implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvTransferLotserialTableMap';


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
     * The value for the insdlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdlotser;

    /**
     * The value for the insdbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdbin;

    /**
     * The value for the insdplltnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insdplltnbr;

    /**
     * The value for the insdcrtnnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insdcrtnnbr;

    /**
     * The value for the insdqtyresv field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $insdqtyresv;

    /**
     * The value for the insdqtyship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $insdqtyship;

    /**
     * The value for the insdqtynotpost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $insdqtynotpost;

    /**
     * The value for the insdunitcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $insdunitcost;

    /**
     * The value for the insdlotserfrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdlotserfrom;

    /**
     * The value for the insdbinfrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdbinfrom;

    /**
     * The value for the insdcases field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insdcases;

    /**
     * The value for the insdtag field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $insdtag;

    /**
     * The value for the insdinspctlvl field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdinspctlvl;

    /**
     * The value for the insdlotref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdlotref;

    /**
     * The value for the insdcrtnqty field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $insdcrtnqty;

    /**
     * The value for the insddateshipped field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insddateshipped;

    /**
     * The value for the insdtowhsebin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdtowhsebin;

    /**
     * The value for the insdlblprtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdlblprtd;

    /**
     * The value for the insdbatch field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdbatch;

    /**
     * The value for the insdcuredate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdcuredate;

    /**
     * The value for the insdbinto field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $insdbinto;

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
        $this->insdlotser = '';
        $this->insdbin = '';
        $this->insdplltnbr = 0;
        $this->insdcrtnnbr = 0;
        $this->insdqtyresv = '0.0000000';
        $this->insdqtyship = '0.0000000';
        $this->insdqtynotpost = '0.0000000';
        $this->insdunitcost = '0.0000000';
        $this->insdlotserfrom = '';
        $this->insdbinfrom = '';
        $this->insdcases = 0;
        $this->insdtag = 0;
        $this->insdinspctlvl = '';
        $this->insdlotref = '';
        $this->insdcrtnqty = '0';
        $this->insddateshipped = '';
        $this->insdtowhsebin = '';
        $this->insdlblprtd = '';
        $this->insdbatch = '';
        $this->insdcuredate = '';
        $this->insdbinto = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvTransferLotserial object.
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
     * Compares this with another <code>InvTransferLotserial</code> instance.  If
     * <code>obj</code> is an instance of <code>InvTransferLotserial</code>, delegates to
     * <code>equals(InvTransferLotserial)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvTransferLotserial The current object, for fluid interface
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
     * Get the [insdlotser] column value.
     *
     * @return string
     */
    public function getInsdlotser()
    {
        return $this->insdlotser;
    }

    /**
     * Get the [insdbin] column value.
     *
     * @return string
     */
    public function getInsdbin()
    {
        return $this->insdbin;
    }

    /**
     * Get the [insdplltnbr] column value.
     *
     * @return int
     */
    public function getInsdplltnbr()
    {
        return $this->insdplltnbr;
    }

    /**
     * Get the [insdcrtnnbr] column value.
     *
     * @return int
     */
    public function getInsdcrtnnbr()
    {
        return $this->insdcrtnnbr;
    }

    /**
     * Get the [insdqtyresv] column value.
     *
     * @return string
     */
    public function getInsdqtyresv()
    {
        return $this->insdqtyresv;
    }

    /**
     * Get the [insdqtyship] column value.
     *
     * @return string
     */
    public function getInsdqtyship()
    {
        return $this->insdqtyship;
    }

    /**
     * Get the [insdqtynotpost] column value.
     *
     * @return string
     */
    public function getInsdqtynotpost()
    {
        return $this->insdqtynotpost;
    }

    /**
     * Get the [insdunitcost] column value.
     *
     * @return string
     */
    public function getInsdunitcost()
    {
        return $this->insdunitcost;
    }

    /**
     * Get the [insdlotserfrom] column value.
     *
     * @return string
     */
    public function getInsdlotserfrom()
    {
        return $this->insdlotserfrom;
    }

    /**
     * Get the [insdbinfrom] column value.
     *
     * @return string
     */
    public function getInsdbinfrom()
    {
        return $this->insdbinfrom;
    }

    /**
     * Get the [insdcases] column value.
     *
     * @return int
     */
    public function getInsdcases()
    {
        return $this->insdcases;
    }

    /**
     * Get the [insdtag] column value.
     *
     * @return int
     */
    public function getInsdtag()
    {
        return $this->insdtag;
    }

    /**
     * Get the [insdinspctlvl] column value.
     *
     * @return string
     */
    public function getInsdinspctlvl()
    {
        return $this->insdinspctlvl;
    }

    /**
     * Get the [insdlotref] column value.
     *
     * @return string
     */
    public function getInsdlotref()
    {
        return $this->insdlotref;
    }

    /**
     * Get the [insdcrtnqty] column value.
     *
     * @return string
     */
    public function getInsdcrtnqty()
    {
        return $this->insdcrtnqty;
    }

    /**
     * Get the [insddateshipped] column value.
     *
     * @return string
     */
    public function getInsddateshipped()
    {
        return $this->insddateshipped;
    }

    /**
     * Get the [insdtowhsebin] column value.
     *
     * @return string
     */
    public function getInsdtowhsebin()
    {
        return $this->insdtowhsebin;
    }

    /**
     * Get the [insdlblprtd] column value.
     *
     * @return string
     */
    public function getInsdlblprtd()
    {
        return $this->insdlblprtd;
    }

    /**
     * Get the [insdbatch] column value.
     *
     * @return string
     */
    public function getInsdbatch()
    {
        return $this->insdbatch;
    }

    /**
     * Get the [insdcuredate] column value.
     *
     * @return string
     */
    public function getInsdcuredate()
    {
        return $this->insdcuredate;
    }

    /**
     * Get the [insdbinto] column value.
     *
     * @return string
     */
    public function getInsdbinto()
    {
        return $this->insdbinto;
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
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInhdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inhdnbr !== $v) {
            $this->inhdnbr = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INHDNBR] = true;
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
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setIndtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->indtline !== $v) {
            $this->indtline = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INDTLINE] = true;
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
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INITITEMNBR] = true;
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
     * Set the value of [insdlotser] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdlotser !== $v) {
            $this->insdlotser = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDLOTSER] = true;
        }

        if ($this->aInvLotMaster !== null && $this->aInvLotMaster->getLotmlotnbr() !== $v) {
            $this->aInvLotMaster = null;
        }

        if ($this->aInvSerialMaster !== null && $this->aInvSerialMaster->getSermsernbr() !== $v) {
            $this->aInvSerialMaster = null;
        }

        return $this;
    } // setInsdlotser()

    /**
     * Set the value of [insdbin] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdbin !== $v) {
            $this->insdbin = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDBIN] = true;
        }

        return $this;
    } // setInsdbin()

    /**
     * Set the value of [insdplltnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdplltnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insdplltnbr !== $v) {
            $this->insdplltnbr = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDPLLTNBR] = true;
        }

        return $this;
    } // setInsdplltnbr()

    /**
     * Set the value of [insdcrtnnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdcrtnnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insdcrtnnbr !== $v) {
            $this->insdcrtnnbr = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDCRTNNBR] = true;
        }

        return $this;
    } // setInsdcrtnnbr()

    /**
     * Set the value of [insdqtyresv] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdqtyresv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdqtyresv !== $v) {
            $this->insdqtyresv = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDQTYRESV] = true;
        }

        return $this;
    } // setInsdqtyresv()

    /**
     * Set the value of [insdqtyship] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdqtyship !== $v) {
            $this->insdqtyship = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDQTYSHIP] = true;
        }

        return $this;
    } // setInsdqtyship()

    /**
     * Set the value of [insdqtynotpost] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdqtynotpost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdqtynotpost !== $v) {
            $this->insdqtynotpost = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDQTYNOTPOST] = true;
        }

        return $this;
    } // setInsdqtynotpost()

    /**
     * Set the value of [insdunitcost] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdunitcost !== $v) {
            $this->insdunitcost = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDUNITCOST] = true;
        }

        return $this;
    } // setInsdunitcost()

    /**
     * Set the value of [insdlotserfrom] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdlotserfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdlotserfrom !== $v) {
            $this->insdlotserfrom = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDLOTSERFROM] = true;
        }

        return $this;
    } // setInsdlotserfrom()

    /**
     * Set the value of [insdbinfrom] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdbinfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdbinfrom !== $v) {
            $this->insdbinfrom = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDBINFROM] = true;
        }

        return $this;
    } // setInsdbinfrom()

    /**
     * Set the value of [insdcases] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdcases($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insdcases !== $v) {
            $this->insdcases = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDCASES] = true;
        }

        return $this;
    } // setInsdcases()

    /**
     * Set the value of [insdtag] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdtag($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->insdtag !== $v) {
            $this->insdtag = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDTAG] = true;
        }

        return $this;
    } // setInsdtag()

    /**
     * Set the value of [insdinspctlvl] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdinspctlvl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdinspctlvl !== $v) {
            $this->insdinspctlvl = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDINSPCTLVL] = true;
        }

        return $this;
    } // setInsdinspctlvl()

    /**
     * Set the value of [insdlotref] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdlotref !== $v) {
            $this->insdlotref = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDLOTREF] = true;
        }

        return $this;
    } // setInsdlotref()

    /**
     * Set the value of [insdcrtnqty] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdcrtnqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdcrtnqty !== $v) {
            $this->insdcrtnqty = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDCRTNQTY] = true;
        }

        return $this;
    } // setInsdcrtnqty()

    /**
     * Set the value of [insddateshipped] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsddateshipped($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insddateshipped !== $v) {
            $this->insddateshipped = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDDATESHIPPED] = true;
        }

        return $this;
    } // setInsddateshipped()

    /**
     * Set the value of [insdtowhsebin] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdtowhsebin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdtowhsebin !== $v) {
            $this->insdtowhsebin = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDTOWHSEBIN] = true;
        }

        return $this;
    } // setInsdtowhsebin()

    /**
     * Set the value of [insdlblprtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdlblprtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdlblprtd !== $v) {
            $this->insdlblprtd = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDLBLPRTD] = true;
        }

        return $this;
    } // setInsdlblprtd()

    /**
     * Set the value of [insdbatch] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdbatch !== $v) {
            $this->insdbatch = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDBATCH] = true;
        }

        return $this;
    } // setInsdbatch()

    /**
     * Set the value of [insdcuredate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdcuredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdcuredate !== $v) {
            $this->insdcuredate = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDCUREDATE] = true;
        }

        return $this;
    } // setInsdcuredate()

    /**
     * Set the value of [insdbinto] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setInsdbinto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->insdbinto !== $v) {
            $this->insdbinto = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_INSDBINTO] = true;
        }

        return $this;
    } // setInsdbinto()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvTransferLotserialTableMap::COL_DUMMY] = true;
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

            if ($this->insdlotser !== '') {
                return false;
            }

            if ($this->insdbin !== '') {
                return false;
            }

            if ($this->insdplltnbr !== 0) {
                return false;
            }

            if ($this->insdcrtnnbr !== 0) {
                return false;
            }

            if ($this->insdqtyresv !== '0.0000000') {
                return false;
            }

            if ($this->insdqtyship !== '0.0000000') {
                return false;
            }

            if ($this->insdqtynotpost !== '0.0000000') {
                return false;
            }

            if ($this->insdunitcost !== '0.0000000') {
                return false;
            }

            if ($this->insdlotserfrom !== '') {
                return false;
            }

            if ($this->insdbinfrom !== '') {
                return false;
            }

            if ($this->insdcases !== 0) {
                return false;
            }

            if ($this->insdtag !== 0) {
                return false;
            }

            if ($this->insdinspctlvl !== '') {
                return false;
            }

            if ($this->insdlotref !== '') {
                return false;
            }

            if ($this->insdcrtnqty !== '0') {
                return false;
            }

            if ($this->insddateshipped !== '') {
                return false;
            }

            if ($this->insdtowhsebin !== '') {
                return false;
            }

            if ($this->insdlblprtd !== '') {
                return false;
            }

            if ($this->insdbatch !== '') {
                return false;
            }

            if ($this->insdcuredate !== '') {
                return false;
            }

            if ($this->insdbinto !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvTransferLotserialTableMap::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvTransferLotserialTableMap::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvTransferLotserialTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdplltnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdplltnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdcrtnnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdqtyresv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdqtyresv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdqtynotpost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdqtynotpost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdlotserfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdlotserfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdbinfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdbinfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdcases', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdcases = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdtag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdtag = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdinspctlvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdinspctlvl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdcrtnqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdcrtnqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insddateshipped', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insddateshipped = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdtowhsebin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdtowhsebin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdlblprtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdlblprtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdcuredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdcuredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvTransferLotserialTableMap::translateFieldName('Insdbinto', TableMap::TYPE_PHPNAME, $indexType)];
            $this->insdbinto = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvTransferLotserialTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : InvTransferLotserialTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : InvTransferLotserialTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 27; // 27 = InvTransferLotserialTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvTransferLotserial'), 0, $e);
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
        if ($this->aInvLotMaster !== null && $this->insdlotser !== $this->aInvLotMaster->getLotmlotnbr()) {
            $this->aInvLotMaster = null;
        }
        if ($this->aInvSerialMaster !== null && $this->insdlotser !== $this->aInvSerialMaster->getSermsernbr()) {
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
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferLotserialTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvTransferLotserialQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see InvTransferLotserial::setDeleted()
     * @see InvTransferLotserial::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferLotserialTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvTransferLotserialQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferLotserialTableMap::DATABASE_NAME);
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
                InvTransferLotserialTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InhdNbr';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'IndtLine';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'InsdLotSer';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InsdBin';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDPLLTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InsdPlltNbr';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDCRTNNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InsdCrtnNbr';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDQTYRESV)) {
            $modifiedColumns[':p' . $index++]  = 'InsdQtyResv';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'InsdQtyShip';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDQTYNOTPOST)) {
            $modifiedColumns[':p' . $index++]  = 'InsdQtyNotPost';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InsdUnitCost';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDLOTSERFROM)) {
            $modifiedColumns[':p' . $index++]  = 'InsdLotSerFrom';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDBINFROM)) {
            $modifiedColumns[':p' . $index++]  = 'InsdBinFrom';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDCASES)) {
            $modifiedColumns[':p' . $index++]  = 'InsdCases';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDTAG)) {
            $modifiedColumns[':p' . $index++]  = 'InsdTag';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDINSPCTLVL)) {
            $modifiedColumns[':p' . $index++]  = 'InsdInspctLvl';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'InsdLotRef';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDCRTNQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InsdCrtnQty';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDDATESHIPPED)) {
            $modifiedColumns[':p' . $index++]  = 'InsdDateShipped';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDTOWHSEBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InsdToWhseBin';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDLBLPRTD)) {
            $modifiedColumns[':p' . $index++]  = 'InsdLblPrtd';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'InsdBatch';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDCUREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InsdCureDate';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDBINTO)) {
            $modifiedColumns[':p' . $index++]  = 'InsdBinTo';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_trans_lotser (%s) VALUES (%s)',
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
                    case 'InsdLotSer':
                        $stmt->bindValue($identifier, $this->insdlotser, PDO::PARAM_STR);
                        break;
                    case 'InsdBin':
                        $stmt->bindValue($identifier, $this->insdbin, PDO::PARAM_STR);
                        break;
                    case 'InsdPlltNbr':
                        $stmt->bindValue($identifier, $this->insdplltnbr, PDO::PARAM_INT);
                        break;
                    case 'InsdCrtnNbr':
                        $stmt->bindValue($identifier, $this->insdcrtnnbr, PDO::PARAM_INT);
                        break;
                    case 'InsdQtyResv':
                        $stmt->bindValue($identifier, $this->insdqtyresv, PDO::PARAM_STR);
                        break;
                    case 'InsdQtyShip':
                        $stmt->bindValue($identifier, $this->insdqtyship, PDO::PARAM_STR);
                        break;
                    case 'InsdQtyNotPost':
                        $stmt->bindValue($identifier, $this->insdqtynotpost, PDO::PARAM_STR);
                        break;
                    case 'InsdUnitCost':
                        $stmt->bindValue($identifier, $this->insdunitcost, PDO::PARAM_STR);
                        break;
                    case 'InsdLotSerFrom':
                        $stmt->bindValue($identifier, $this->insdlotserfrom, PDO::PARAM_STR);
                        break;
                    case 'InsdBinFrom':
                        $stmt->bindValue($identifier, $this->insdbinfrom, PDO::PARAM_STR);
                        break;
                    case 'InsdCases':
                        $stmt->bindValue($identifier, $this->insdcases, PDO::PARAM_INT);
                        break;
                    case 'InsdTag':
                        $stmt->bindValue($identifier, $this->insdtag, PDO::PARAM_INT);
                        break;
                    case 'InsdInspctLvl':
                        $stmt->bindValue($identifier, $this->insdinspctlvl, PDO::PARAM_STR);
                        break;
                    case 'InsdLotRef':
                        $stmt->bindValue($identifier, $this->insdlotref, PDO::PARAM_STR);
                        break;
                    case 'InsdCrtnQty':
                        $stmt->bindValue($identifier, $this->insdcrtnqty, PDO::PARAM_STR);
                        break;
                    case 'InsdDateShipped':
                        $stmt->bindValue($identifier, $this->insddateshipped, PDO::PARAM_STR);
                        break;
                    case 'InsdToWhseBin':
                        $stmt->bindValue($identifier, $this->insdtowhsebin, PDO::PARAM_STR);
                        break;
                    case 'InsdLblPrtd':
                        $stmt->bindValue($identifier, $this->insdlblprtd, PDO::PARAM_STR);
                        break;
                    case 'InsdBatch':
                        $stmt->bindValue($identifier, $this->insdbatch, PDO::PARAM_STR);
                        break;
                    case 'InsdCureDate':
                        $stmt->bindValue($identifier, $this->insdcuredate, PDO::PARAM_STR);
                        break;
                    case 'InsdBinTo':
                        $stmt->bindValue($identifier, $this->insdbinto, PDO::PARAM_STR);
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
        $pos = InvTransferLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInsdlotser();
                break;
            case 4:
                return $this->getInsdbin();
                break;
            case 5:
                return $this->getInsdplltnbr();
                break;
            case 6:
                return $this->getInsdcrtnnbr();
                break;
            case 7:
                return $this->getInsdqtyresv();
                break;
            case 8:
                return $this->getInsdqtyship();
                break;
            case 9:
                return $this->getInsdqtynotpost();
                break;
            case 10:
                return $this->getInsdunitcost();
                break;
            case 11:
                return $this->getInsdlotserfrom();
                break;
            case 12:
                return $this->getInsdbinfrom();
                break;
            case 13:
                return $this->getInsdcases();
                break;
            case 14:
                return $this->getInsdtag();
                break;
            case 15:
                return $this->getInsdinspctlvl();
                break;
            case 16:
                return $this->getInsdlotref();
                break;
            case 17:
                return $this->getInsdcrtnqty();
                break;
            case 18:
                return $this->getInsddateshipped();
                break;
            case 19:
                return $this->getInsdtowhsebin();
                break;
            case 20:
                return $this->getInsdlblprtd();
                break;
            case 21:
                return $this->getInsdbatch();
                break;
            case 22:
                return $this->getInsdcuredate();
                break;
            case 23:
                return $this->getInsdbinto();
                break;
            case 24:
                return $this->getDateupdtd();
                break;
            case 25:
                return $this->getTimeupdtd();
                break;
            case 26:
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

        if (isset($alreadyDumpedObjects['InvTransferLotserial'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvTransferLotserial'][$this->hashCode()] = true;
        $keys = InvTransferLotserialTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInhdnbr(),
            $keys[1] => $this->getIndtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getInsdlotser(),
            $keys[4] => $this->getInsdbin(),
            $keys[5] => $this->getInsdplltnbr(),
            $keys[6] => $this->getInsdcrtnnbr(),
            $keys[7] => $this->getInsdqtyresv(),
            $keys[8] => $this->getInsdqtyship(),
            $keys[9] => $this->getInsdqtynotpost(),
            $keys[10] => $this->getInsdunitcost(),
            $keys[11] => $this->getInsdlotserfrom(),
            $keys[12] => $this->getInsdbinfrom(),
            $keys[13] => $this->getInsdcases(),
            $keys[14] => $this->getInsdtag(),
            $keys[15] => $this->getInsdinspctlvl(),
            $keys[16] => $this->getInsdlotref(),
            $keys[17] => $this->getInsdcrtnqty(),
            $keys[18] => $this->getInsddateshipped(),
            $keys[19] => $this->getInsdtowhsebin(),
            $keys[20] => $this->getInsdlblprtd(),
            $keys[21] => $this->getInsdbatch(),
            $keys[22] => $this->getInsdcuredate(),
            $keys[23] => $this->getInsdbinto(),
            $keys[24] => $this->getDateupdtd(),
            $keys[25] => $this->getTimeupdtd(),
            $keys[26] => $this->getDummy(),
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
     * @return $this|\InvTransferLotserial
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvTransferLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvTransferLotserial
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
                $this->setInsdlotser($value);
                break;
            case 4:
                $this->setInsdbin($value);
                break;
            case 5:
                $this->setInsdplltnbr($value);
                break;
            case 6:
                $this->setInsdcrtnnbr($value);
                break;
            case 7:
                $this->setInsdqtyresv($value);
                break;
            case 8:
                $this->setInsdqtyship($value);
                break;
            case 9:
                $this->setInsdqtynotpost($value);
                break;
            case 10:
                $this->setInsdunitcost($value);
                break;
            case 11:
                $this->setInsdlotserfrom($value);
                break;
            case 12:
                $this->setInsdbinfrom($value);
                break;
            case 13:
                $this->setInsdcases($value);
                break;
            case 14:
                $this->setInsdtag($value);
                break;
            case 15:
                $this->setInsdinspctlvl($value);
                break;
            case 16:
                $this->setInsdlotref($value);
                break;
            case 17:
                $this->setInsdcrtnqty($value);
                break;
            case 18:
                $this->setInsddateshipped($value);
                break;
            case 19:
                $this->setInsdtowhsebin($value);
                break;
            case 20:
                $this->setInsdlblprtd($value);
                break;
            case 21:
                $this->setInsdbatch($value);
                break;
            case 22:
                $this->setInsdcuredate($value);
                break;
            case 23:
                $this->setInsdbinto($value);
                break;
            case 24:
                $this->setDateupdtd($value);
                break;
            case 25:
                $this->setTimeupdtd($value);
                break;
            case 26:
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
        $keys = InvTransferLotserialTableMap::getFieldNames($keyType);

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
            $this->setInsdlotser($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInsdbin($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInsdplltnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInsdcrtnnbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInsdqtyresv($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setInsdqtyship($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setInsdqtynotpost($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInsdunitcost($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInsdlotserfrom($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInsdbinfrom($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInsdcases($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInsdtag($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInsdinspctlvl($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInsdlotref($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInsdcrtnqty($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInsddateshipped($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInsdtowhsebin($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setInsdlblprtd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setInsdbatch($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setInsdcuredate($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setInsdbinto($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setDateupdtd($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setTimeupdtd($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setDummy($arr[$keys[26]]);
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
     * @return $this|\InvTransferLotserial The current object, for fluid interface
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
        $criteria = new Criteria(InvTransferLotserialTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INHDNBR)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INHDNBR, $this->inhdnbr);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INDTLINE)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INDTLINE, $this->indtline);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDLOTSER)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDLOTSER, $this->insdlotser);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDBIN)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDBIN, $this->insdbin);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDPLLTNBR)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDPLLTNBR, $this->insdplltnbr);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDCRTNNBR)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDCRTNNBR, $this->insdcrtnnbr);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDQTYRESV)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDQTYRESV, $this->insdqtyresv);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDQTYSHIP)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDQTYSHIP, $this->insdqtyship);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDQTYNOTPOST)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDQTYNOTPOST, $this->insdqtynotpost);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDUNITCOST)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDUNITCOST, $this->insdunitcost);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDLOTSERFROM)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDLOTSERFROM, $this->insdlotserfrom);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDBINFROM)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDBINFROM, $this->insdbinfrom);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDCASES)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDCASES, $this->insdcases);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDTAG)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDTAG, $this->insdtag);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDINSPCTLVL)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDINSPCTLVL, $this->insdinspctlvl);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDLOTREF)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDLOTREF, $this->insdlotref);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDCRTNQTY)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDCRTNQTY, $this->insdcrtnqty);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDDATESHIPPED)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDDATESHIPPED, $this->insddateshipped);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDTOWHSEBIN)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDTOWHSEBIN, $this->insdtowhsebin);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDLBLPRTD)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDLBLPRTD, $this->insdlblprtd);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDBATCH)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDBATCH, $this->insdbatch);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDCUREDATE)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDCUREDATE, $this->insdcuredate);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_INSDBINTO)) {
            $criteria->add(InvTransferLotserialTableMap::COL_INSDBINTO, $this->insdbinto);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvTransferLotserialTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvTransferLotserialTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvTransferLotserialTableMap::COL_DUMMY)) {
            $criteria->add(InvTransferLotserialTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvTransferLotserialQuery::create();
        $criteria->add(InvTransferLotserialTableMap::COL_INHDNBR, $this->inhdnbr);
        $criteria->add(InvTransferLotserialTableMap::COL_INDTLINE, $this->indtline);
        $criteria->add(InvTransferLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvTransferLotserialTableMap::COL_INSDLOTSER, $this->insdlotser);
        $criteria->add(InvTransferLotserialTableMap::COL_INSDBIN, $this->insdbin);
        $criteria->add(InvTransferLotserialTableMap::COL_INSDPLLTNBR, $this->insdplltnbr);
        $criteria->add(InvTransferLotserialTableMap::COL_INSDCRTNNBR, $this->insdcrtnnbr);

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
            null !== $this->getInsdlotser() &&
            null !== $this->getInsdbin() &&
            null !== $this->getInsdplltnbr() &&
            null !== $this->getInsdcrtnnbr();

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
        $pks[3] = $this->getInsdlotser();
        $pks[4] = $this->getInsdbin();
        $pks[5] = $this->getInsdplltnbr();
        $pks[6] = $this->getInsdcrtnnbr();

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
        $this->setInsdlotser($keys[3]);
        $this->setInsdbin($keys[4]);
        $this->setInsdplltnbr($keys[5]);
        $this->setInsdcrtnnbr($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInhdnbr()) && (null === $this->getIndtline()) && (null === $this->getInititemnbr()) && (null === $this->getInsdlotser()) && (null === $this->getInsdbin()) && (null === $this->getInsdplltnbr()) && (null === $this->getInsdcrtnnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvTransferLotserial (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInhdnbr($this->getInhdnbr());
        $copyObj->setIndtline($this->getIndtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setInsdlotser($this->getInsdlotser());
        $copyObj->setInsdbin($this->getInsdbin());
        $copyObj->setInsdplltnbr($this->getInsdplltnbr());
        $copyObj->setInsdcrtnnbr($this->getInsdcrtnnbr());
        $copyObj->setInsdqtyresv($this->getInsdqtyresv());
        $copyObj->setInsdqtyship($this->getInsdqtyship());
        $copyObj->setInsdqtynotpost($this->getInsdqtynotpost());
        $copyObj->setInsdunitcost($this->getInsdunitcost());
        $copyObj->setInsdlotserfrom($this->getInsdlotserfrom());
        $copyObj->setInsdbinfrom($this->getInsdbinfrom());
        $copyObj->setInsdcases($this->getInsdcases());
        $copyObj->setInsdtag($this->getInsdtag());
        $copyObj->setInsdinspctlvl($this->getInsdinspctlvl());
        $copyObj->setInsdlotref($this->getInsdlotref());
        $copyObj->setInsdcrtnqty($this->getInsdcrtnqty());
        $copyObj->setInsddateshipped($this->getInsddateshipped());
        $copyObj->setInsdtowhsebin($this->getInsdtowhsebin());
        $copyObj->setInsdlblprtd($this->getInsdlblprtd());
        $copyObj->setInsdbatch($this->getInsdbatch());
        $copyObj->setInsdcuredate($this->getInsdcuredate());
        $copyObj->setInsdbinto($this->getInsdbinto());
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
     * @return \InvTransferLotserial Clone of current object.
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
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
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
            $v->addInvTransferLotserial($this);
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
                $this->aItemMasterItem->addInvTransferLotserials($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildInvTransferOrder object.
     *
     * @param  ChildInvTransferOrder $v
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
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
            $v->addInvTransferLotserial($this);
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
                $this->aInvTransferOrder->addInvTransferLotserials($this);
             */
        }

        return $this->aInvTransferOrder;
    }

    /**
     * Declares an association between this object and a ChildInvTransferDetail object.
     *
     * @param  ChildInvTransferDetail $v
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
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
            $v->addInvTransferLotserial($this);
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
                $this->aInvTransferDetail->addInvTransferLotserials($this);
             */
        }

        return $this->aInvTransferDetail;
    }

    /**
     * Declares an association between this object and a ChildInvLotMaster object.
     *
     * @param  ChildInvLotMaster $v
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
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
            $this->setInsdlotser('');
        } else {
            $this->setInsdlotser($v->getLotmlotnbr());
        }

        $this->aInvLotMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvLotMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferLotserial($this);
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
        if ($this->aInvLotMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->insdlotser !== "" && $this->insdlotser !== null))) {
            $this->aInvLotMaster = ChildInvLotMasterQuery::create()->findPk(array($this->inititemnbr, $this->insdlotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvLotMaster->addInvTransferLotserials($this);
             */
        }

        return $this->aInvLotMaster;
    }

    /**
     * Declares an association between this object and a ChildInvSerialMaster object.
     *
     * @param  ChildInvSerialMaster $v
     * @return $this|\InvTransferLotserial The current object (for fluent API support)
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
            $this->setInsdlotser('');
        } else {
            $this->setInsdlotser($v->getSermsernbr());
        }

        $this->aInvSerialMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvSerialMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferLotserial($this);
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
        if ($this->aInvSerialMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->insdlotser !== "" && $this->insdlotser !== null))) {
            $this->aInvSerialMaster = ChildInvSerialMasterQuery::create()->findPk(array($this->inititemnbr, $this->insdlotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvSerialMaster->addInvTransferLotserials($this);
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
            $this->aItemMasterItem->removeInvTransferLotserial($this);
        }
        if (null !== $this->aInvTransferOrder) {
            $this->aInvTransferOrder->removeInvTransferLotserial($this);
        }
        if (null !== $this->aInvTransferDetail) {
            $this->aInvTransferDetail->removeInvTransferLotserial($this);
        }
        if (null !== $this->aInvLotMaster) {
            $this->aInvLotMaster->removeInvTransferLotserial($this);
        }
        if (null !== $this->aInvSerialMaster) {
            $this->aInvSerialMaster->removeInvTransferLotserial($this);
        }
        $this->inhdnbr = null;
        $this->indtline = null;
        $this->inititemnbr = null;
        $this->insdlotser = null;
        $this->insdbin = null;
        $this->insdplltnbr = null;
        $this->insdcrtnnbr = null;
        $this->insdqtyresv = null;
        $this->insdqtyship = null;
        $this->insdqtynotpost = null;
        $this->insdunitcost = null;
        $this->insdlotserfrom = null;
        $this->insdbinfrom = null;
        $this->insdcases = null;
        $this->insdtag = null;
        $this->insdinspctlvl = null;
        $this->insdlotref = null;
        $this->insdcrtnqty = null;
        $this->insddateshipped = null;
        $this->insdtowhsebin = null;
        $this->insdlblprtd = null;
        $this->insdbatch = null;
        $this->insdcuredate = null;
        $this->insdbinto = null;
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
        return (string) $this->exportTo(InvTransferLotserialTableMap::DEFAULT_STRING_FORMAT);
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
