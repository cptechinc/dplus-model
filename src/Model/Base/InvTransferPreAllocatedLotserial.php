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
use \InvTransferPreAllocatedLotserialQuery as ChildInvTransferPreAllocatedLotserialQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\InvTransferPreAllocatedLotserialTableMap;
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
 * Base class that represents a row from the 'inv_trans_pre_allo' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvTransferPreAllocatedLotserial implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvTransferPreAllocatedLotserialTableMap';


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
     * The value for the inidlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inidlotser;

    /**
     * The value for the inidbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inidbin;

    /**
     * The value for the inidplltnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inidplltnbr;

    /**
     * The value for the inidcrtnnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inidcrtnnbr;

    /**
     * The value for the inidqtyresv field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inidqtyresv;

    /**
     * The value for the inidqtyship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inidqtyship;

    /**
     * The value for the inidqtynotpost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inidqtynotpost;

    /**
     * The value for the inidunitcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $inidunitcost;

    /**
     * The value for the inidlotserfrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inidlotserfrom;

    /**
     * The value for the inidbinfrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inidbinfrom;

    /**
     * The value for the inidcases field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inidcases;

    /**
     * The value for the inidtag field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inidtag;

    /**
     * The value for the inidinspctlvl field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inidinspctlvl;

    /**
     * The value for the inidlotref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inidlotref;

    /**
     * The value for the inidcrtnqty field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $inidcrtnqty;

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
        $this->inidlotser = '';
        $this->inidbin = '';
        $this->inidplltnbr = 0;
        $this->inidcrtnnbr = 0;
        $this->inidqtyresv = '0.0000000';
        $this->inidqtyship = '0.0000000';
        $this->inidqtynotpost = '0.0000000';
        $this->inidunitcost = '0.0000000';
        $this->inidlotserfrom = '';
        $this->inidbinfrom = '';
        $this->inidcases = 0;
        $this->inidtag = 0;
        $this->inidinspctlvl = '';
        $this->inidlotref = '';
        $this->inidcrtnqty = '0';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvTransferPreAllocatedLotserial object.
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
     * Compares this with another <code>InvTransferPreAllocatedLotserial</code> instance.  If
     * <code>obj</code> is an instance of <code>InvTransferPreAllocatedLotserial</code>, delegates to
     * <code>equals(InvTransferPreAllocatedLotserial)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvTransferPreAllocatedLotserial The current object, for fluid interface
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
     * Get the [inidlotser] column value.
     *
     * @return string
     */
    public function getInidlotser()
    {
        return $this->inidlotser;
    }

    /**
     * Get the [inidbin] column value.
     *
     * @return string
     */
    public function getInidbin()
    {
        return $this->inidbin;
    }

    /**
     * Get the [inidplltnbr] column value.
     *
     * @return int
     */
    public function getInidplltnbr()
    {
        return $this->inidplltnbr;
    }

    /**
     * Get the [inidcrtnnbr] column value.
     *
     * @return int
     */
    public function getInidcrtnnbr()
    {
        return $this->inidcrtnnbr;
    }

    /**
     * Get the [inidqtyresv] column value.
     *
     * @return string
     */
    public function getInidqtyresv()
    {
        return $this->inidqtyresv;
    }

    /**
     * Get the [inidqtyship] column value.
     *
     * @return string
     */
    public function getInidqtyship()
    {
        return $this->inidqtyship;
    }

    /**
     * Get the [inidqtynotpost] column value.
     *
     * @return string
     */
    public function getInidqtynotpost()
    {
        return $this->inidqtynotpost;
    }

    /**
     * Get the [inidunitcost] column value.
     *
     * @return string
     */
    public function getInidunitcost()
    {
        return $this->inidunitcost;
    }

    /**
     * Get the [inidlotserfrom] column value.
     *
     * @return string
     */
    public function getInidlotserfrom()
    {
        return $this->inidlotserfrom;
    }

    /**
     * Get the [inidbinfrom] column value.
     *
     * @return string
     */
    public function getInidbinfrom()
    {
        return $this->inidbinfrom;
    }

    /**
     * Get the [inidcases] column value.
     *
     * @return int
     */
    public function getInidcases()
    {
        return $this->inidcases;
    }

    /**
     * Get the [inidtag] column value.
     *
     * @return int
     */
    public function getInidtag()
    {
        return $this->inidtag;
    }

    /**
     * Get the [inidinspctlvl] column value.
     *
     * @return string
     */
    public function getInidinspctlvl()
    {
        return $this->inidinspctlvl;
    }

    /**
     * Get the [inidlotref] column value.
     *
     * @return string
     */
    public function getInidlotref()
    {
        return $this->inidlotref;
    }

    /**
     * Get the [inidcrtnqty] column value.
     *
     * @return string
     */
    public function getInidcrtnqty()
    {
        return $this->inidcrtnqty;
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
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInhdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inhdnbr !== $v) {
            $this->inhdnbr = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR] = true;
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
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setIndtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->indtline !== $v) {
            $this->indtline = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE] = true;
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
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR] = true;
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
     * Set the value of [inidlotser] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidlotser !== $v) {
            $this->inidlotser = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER] = true;
        }

        if ($this->aInvLotMaster !== null && $this->aInvLotMaster->getLotmlotnbr() !== $v) {
            $this->aInvLotMaster = null;
        }

        if ($this->aInvSerialMaster !== null && $this->aInvSerialMaster->getSermsernbr() !== $v) {
            $this->aInvSerialMaster = null;
        }

        return $this;
    } // setInidlotser()

    /**
     * Set the value of [inidbin] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidbin !== $v) {
            $this->inidbin = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN] = true;
        }

        return $this;
    } // setInidbin()

    /**
     * Set the value of [inidplltnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidplltnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inidplltnbr !== $v) {
            $this->inidplltnbr = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR] = true;
        }

        return $this;
    } // setInidplltnbr()

    /**
     * Set the value of [inidcrtnnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidcrtnnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inidcrtnnbr !== $v) {
            $this->inidcrtnnbr = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR] = true;
        }

        return $this;
    } // setInidcrtnnbr()

    /**
     * Set the value of [inidqtyresv] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidqtyresv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidqtyresv !== $v) {
            $this->inidqtyresv = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV] = true;
        }

        return $this;
    } // setInidqtyresv()

    /**
     * Set the value of [inidqtyship] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidqtyship !== $v) {
            $this->inidqtyship = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP] = true;
        }

        return $this;
    } // setInidqtyship()

    /**
     * Set the value of [inidqtynotpost] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidqtynotpost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidqtynotpost !== $v) {
            $this->inidqtynotpost = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST] = true;
        }

        return $this;
    } // setInidqtynotpost()

    /**
     * Set the value of [inidunitcost] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidunitcost !== $v) {
            $this->inidunitcost = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST] = true;
        }

        return $this;
    } // setInidunitcost()

    /**
     * Set the value of [inidlotserfrom] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidlotserfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidlotserfrom !== $v) {
            $this->inidlotserfrom = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM] = true;
        }

        return $this;
    } // setInidlotserfrom()

    /**
     * Set the value of [inidbinfrom] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidbinfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidbinfrom !== $v) {
            $this->inidbinfrom = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM] = true;
        }

        return $this;
    } // setInidbinfrom()

    /**
     * Set the value of [inidcases] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidcases($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inidcases !== $v) {
            $this->inidcases = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES] = true;
        }

        return $this;
    } // setInidcases()

    /**
     * Set the value of [inidtag] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidtag($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inidtag !== $v) {
            $this->inidtag = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG] = true;
        }

        return $this;
    } // setInidtag()

    /**
     * Set the value of [inidinspctlvl] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidinspctlvl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidinspctlvl !== $v) {
            $this->inidinspctlvl = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL] = true;
        }

        return $this;
    } // setInidinspctlvl()

    /**
     * Set the value of [inidlotref] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidlotref !== $v) {
            $this->inidlotref = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF] = true;
        }

        return $this;
    } // setInidlotref()

    /**
     * Set the value of [inidcrtnqty] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setInidcrtnqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inidcrtnqty !== $v) {
            $this->inidcrtnqty = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY] = true;
        }

        return $this;
    } // setInidcrtnqty()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvTransferPreAllocatedLotserialTableMap::COL_DUMMY] = true;
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

            if ($this->inidlotser !== '') {
                return false;
            }

            if ($this->inidbin !== '') {
                return false;
            }

            if ($this->inidplltnbr !== 0) {
                return false;
            }

            if ($this->inidcrtnnbr !== 0) {
                return false;
            }

            if ($this->inidqtyresv !== '0.0000000') {
                return false;
            }

            if ($this->inidqtyship !== '0.0000000') {
                return false;
            }

            if ($this->inidqtynotpost !== '0.0000000') {
                return false;
            }

            if ($this->inidunitcost !== '0.0000000') {
                return false;
            }

            if ($this->inidlotserfrom !== '') {
                return false;
            }

            if ($this->inidbinfrom !== '') {
                return false;
            }

            if ($this->inidcases !== 0) {
                return false;
            }

            if ($this->inidtag !== 0) {
                return false;
            }

            if ($this->inidinspctlvl !== '') {
                return false;
            }

            if ($this->inidlotref !== '') {
                return false;
            }

            if ($this->inidcrtnqty !== '0') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidplltnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidplltnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidcrtnnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidqtyresv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidqtyresv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidqtynotpost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidqtynotpost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidlotserfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidlotserfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidbinfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidbinfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidcases', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidcases = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidtag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidtag = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidinspctlvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidinspctlvl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Inidcrtnqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inidcrtnqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvTransferPreAllocatedLotserialTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 21; // 21 = InvTransferPreAllocatedLotserialTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvTransferPreAllocatedLotserial'), 0, $e);
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
        if ($this->aInvLotMaster !== null && $this->inidlotser !== $this->aInvLotMaster->getLotmlotnbr()) {
            $this->aInvLotMaster = null;
        }
        if ($this->aInvSerialMaster !== null && $this->inidlotser !== $this->aInvSerialMaster->getSermsernbr()) {
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
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvTransferPreAllocatedLotserialQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see InvTransferPreAllocatedLotserial::setDeleted()
     * @see InvTransferPreAllocatedLotserial::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvTransferPreAllocatedLotserialQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
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
                InvTransferPreAllocatedLotserialTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InhdNbr';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'IndtLine';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'InidLotSer';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InidBin';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InidPlltNbr';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InidCrtnNbr';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV)) {
            $modifiedColumns[':p' . $index++]  = 'InidQtyResv';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'InidQtyShip';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST)) {
            $modifiedColumns[':p' . $index++]  = 'InidQtyNotPost';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InidUnitCost';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM)) {
            $modifiedColumns[':p' . $index++]  = 'InidLotSerFrom';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM)) {
            $modifiedColumns[':p' . $index++]  = 'InidBinFrom';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES)) {
            $modifiedColumns[':p' . $index++]  = 'InidCases';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG)) {
            $modifiedColumns[':p' . $index++]  = 'InidTag';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL)) {
            $modifiedColumns[':p' . $index++]  = 'InidInspctLvl';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'InidLotRef';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InidCrtnQty';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_trans_pre_allo (%s) VALUES (%s)',
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
                    case 'InidLotSer':
                        $stmt->bindValue($identifier, $this->inidlotser, PDO::PARAM_STR);
                        break;
                    case 'InidBin':
                        $stmt->bindValue($identifier, $this->inidbin, PDO::PARAM_STR);
                        break;
                    case 'InidPlltNbr':
                        $stmt->bindValue($identifier, $this->inidplltnbr, PDO::PARAM_INT);
                        break;
                    case 'InidCrtnNbr':
                        $stmt->bindValue($identifier, $this->inidcrtnnbr, PDO::PARAM_INT);
                        break;
                    case 'InidQtyResv':
                        $stmt->bindValue($identifier, $this->inidqtyresv, PDO::PARAM_STR);
                        break;
                    case 'InidQtyShip':
                        $stmt->bindValue($identifier, $this->inidqtyship, PDO::PARAM_STR);
                        break;
                    case 'InidQtyNotPost':
                        $stmt->bindValue($identifier, $this->inidqtynotpost, PDO::PARAM_STR);
                        break;
                    case 'InidUnitCost':
                        $stmt->bindValue($identifier, $this->inidunitcost, PDO::PARAM_STR);
                        break;
                    case 'InidLotSerFrom':
                        $stmt->bindValue($identifier, $this->inidlotserfrom, PDO::PARAM_STR);
                        break;
                    case 'InidBinFrom':
                        $stmt->bindValue($identifier, $this->inidbinfrom, PDO::PARAM_STR);
                        break;
                    case 'InidCases':
                        $stmt->bindValue($identifier, $this->inidcases, PDO::PARAM_INT);
                        break;
                    case 'InidTag':
                        $stmt->bindValue($identifier, $this->inidtag, PDO::PARAM_INT);
                        break;
                    case 'InidInspctLvl':
                        $stmt->bindValue($identifier, $this->inidinspctlvl, PDO::PARAM_STR);
                        break;
                    case 'InidLotRef':
                        $stmt->bindValue($identifier, $this->inidlotref, PDO::PARAM_STR);
                        break;
                    case 'InidCrtnQty':
                        $stmt->bindValue($identifier, $this->inidcrtnqty, PDO::PARAM_STR);
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
        $pos = InvTransferPreAllocatedLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInidlotser();
                break;
            case 4:
                return $this->getInidbin();
                break;
            case 5:
                return $this->getInidplltnbr();
                break;
            case 6:
                return $this->getInidcrtnnbr();
                break;
            case 7:
                return $this->getInidqtyresv();
                break;
            case 8:
                return $this->getInidqtyship();
                break;
            case 9:
                return $this->getInidqtynotpost();
                break;
            case 10:
                return $this->getInidunitcost();
                break;
            case 11:
                return $this->getInidlotserfrom();
                break;
            case 12:
                return $this->getInidbinfrom();
                break;
            case 13:
                return $this->getInidcases();
                break;
            case 14:
                return $this->getInidtag();
                break;
            case 15:
                return $this->getInidinspctlvl();
                break;
            case 16:
                return $this->getInidlotref();
                break;
            case 17:
                return $this->getInidcrtnqty();
                break;
            case 18:
                return $this->getDateupdtd();
                break;
            case 19:
                return $this->getTimeupdtd();
                break;
            case 20:
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

        if (isset($alreadyDumpedObjects['InvTransferPreAllocatedLotserial'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvTransferPreAllocatedLotserial'][$this->hashCode()] = true;
        $keys = InvTransferPreAllocatedLotserialTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInhdnbr(),
            $keys[1] => $this->getIndtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getInidlotser(),
            $keys[4] => $this->getInidbin(),
            $keys[5] => $this->getInidplltnbr(),
            $keys[6] => $this->getInidcrtnnbr(),
            $keys[7] => $this->getInidqtyresv(),
            $keys[8] => $this->getInidqtyship(),
            $keys[9] => $this->getInidqtynotpost(),
            $keys[10] => $this->getInidunitcost(),
            $keys[11] => $this->getInidlotserfrom(),
            $keys[12] => $this->getInidbinfrom(),
            $keys[13] => $this->getInidcases(),
            $keys[14] => $this->getInidtag(),
            $keys[15] => $this->getInidinspctlvl(),
            $keys[16] => $this->getInidlotref(),
            $keys[17] => $this->getInidcrtnqty(),
            $keys[18] => $this->getDateupdtd(),
            $keys[19] => $this->getTimeupdtd(),
            $keys[20] => $this->getDummy(),
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
     * @return $this|\InvTransferPreAllocatedLotserial
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvTransferPreAllocatedLotserialTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvTransferPreAllocatedLotserial
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
                $this->setInidlotser($value);
                break;
            case 4:
                $this->setInidbin($value);
                break;
            case 5:
                $this->setInidplltnbr($value);
                break;
            case 6:
                $this->setInidcrtnnbr($value);
                break;
            case 7:
                $this->setInidqtyresv($value);
                break;
            case 8:
                $this->setInidqtyship($value);
                break;
            case 9:
                $this->setInidqtynotpost($value);
                break;
            case 10:
                $this->setInidunitcost($value);
                break;
            case 11:
                $this->setInidlotserfrom($value);
                break;
            case 12:
                $this->setInidbinfrom($value);
                break;
            case 13:
                $this->setInidcases($value);
                break;
            case 14:
                $this->setInidtag($value);
                break;
            case 15:
                $this->setInidinspctlvl($value);
                break;
            case 16:
                $this->setInidlotref($value);
                break;
            case 17:
                $this->setInidcrtnqty($value);
                break;
            case 18:
                $this->setDateupdtd($value);
                break;
            case 19:
                $this->setTimeupdtd($value);
                break;
            case 20:
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
        $keys = InvTransferPreAllocatedLotserialTableMap::getFieldNames($keyType);

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
            $this->setInidlotser($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInidbin($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInidplltnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInidcrtnnbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInidqtyresv($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setInidqtyship($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setInidqtynotpost($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInidunitcost($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInidlotserfrom($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInidbinfrom($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInidcases($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInidtag($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInidinspctlvl($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInidlotref($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInidcrtnqty($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setDateupdtd($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setTimeupdtd($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDummy($arr[$keys[20]]);
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
     * @return $this|\InvTransferPreAllocatedLotserial The current object, for fluid interface
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
        $criteria = new Criteria(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $this->inhdnbr);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $this->indtline);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, $this->inidlotser);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN, $this->inidbin);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, $this->inidplltnbr);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, $this->inidcrtnnbr);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV, $this->inidqtyresv);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP, $this->inidqtyship);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST, $this->inidqtynotpost);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST, $this->inidunitcost);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM, $this->inidlotserfrom);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM, $this->inidbinfrom);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES, $this->inidcases);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG, $this->inidtag);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL, $this->inidinspctlvl);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF, $this->inidlotref);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY, $this->inidcrtnqty);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvTransferPreAllocatedLotserialTableMap::COL_DUMMY)) {
            $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvTransferPreAllocatedLotserialQuery::create();
        $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $this->inhdnbr);
        $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $this->indtline);
        $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, $this->inidlotser);
        $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN, $this->inidbin);
        $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, $this->inidplltnbr);
        $criteria->add(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, $this->inidcrtnnbr);

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
            null !== $this->getInidlotser() &&
            null !== $this->getInidbin() &&
            null !== $this->getInidplltnbr() &&
            null !== $this->getInidcrtnnbr();

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
        $pks[3] = $this->getInidlotser();
        $pks[4] = $this->getInidbin();
        $pks[5] = $this->getInidplltnbr();
        $pks[6] = $this->getInidcrtnnbr();

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
        $this->setInidlotser($keys[3]);
        $this->setInidbin($keys[4]);
        $this->setInidplltnbr($keys[5]);
        $this->setInidcrtnnbr($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInhdnbr()) && (null === $this->getIndtline()) && (null === $this->getInititemnbr()) && (null === $this->getInidlotser()) && (null === $this->getInidbin()) && (null === $this->getInidplltnbr()) && (null === $this->getInidcrtnnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvTransferPreAllocatedLotserial (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInhdnbr($this->getInhdnbr());
        $copyObj->setIndtline($this->getIndtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setInidlotser($this->getInidlotser());
        $copyObj->setInidbin($this->getInidbin());
        $copyObj->setInidplltnbr($this->getInidplltnbr());
        $copyObj->setInidcrtnnbr($this->getInidcrtnnbr());
        $copyObj->setInidqtyresv($this->getInidqtyresv());
        $copyObj->setInidqtyship($this->getInidqtyship());
        $copyObj->setInidqtynotpost($this->getInidqtynotpost());
        $copyObj->setInidunitcost($this->getInidunitcost());
        $copyObj->setInidlotserfrom($this->getInidlotserfrom());
        $copyObj->setInidbinfrom($this->getInidbinfrom());
        $copyObj->setInidcases($this->getInidcases());
        $copyObj->setInidtag($this->getInidtag());
        $copyObj->setInidinspctlvl($this->getInidinspctlvl());
        $copyObj->setInidlotref($this->getInidlotref());
        $copyObj->setInidcrtnqty($this->getInidcrtnqty());
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
     * @return \InvTransferPreAllocatedLotserial Clone of current object.
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
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
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
            $v->addInvTransferPreAllocatedLotserial($this);
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
                $this->aItemMasterItem->addInvTransferPreAllocatedLotserials($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildInvTransferOrder object.
     *
     * @param  ChildInvTransferOrder $v
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
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
            $v->addInvTransferPreAllocatedLotserial($this);
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
                $this->aInvTransferOrder->addInvTransferPreAllocatedLotserials($this);
             */
        }

        return $this->aInvTransferOrder;
    }

    /**
     * Declares an association between this object and a ChildInvTransferDetail object.
     *
     * @param  ChildInvTransferDetail $v
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
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
            $v->addInvTransferPreAllocatedLotserial($this);
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
                $this->aInvTransferDetail->addInvTransferPreAllocatedLotserials($this);
             */
        }

        return $this->aInvTransferDetail;
    }

    /**
     * Declares an association between this object and a ChildInvLotMaster object.
     *
     * @param  ChildInvLotMaster $v
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
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
            $this->setInidlotser('');
        } else {
            $this->setInidlotser($v->getLotmlotnbr());
        }

        $this->aInvLotMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvLotMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferPreAllocatedLotserial($this);
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
        if ($this->aInvLotMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->inidlotser !== "" && $this->inidlotser !== null))) {
            $this->aInvLotMaster = ChildInvLotMasterQuery::create()->findPk(array($this->inititemnbr, $this->inidlotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvLotMaster->addInvTransferPreAllocatedLotserials($this);
             */
        }

        return $this->aInvLotMaster;
    }

    /**
     * Declares an association between this object and a ChildInvSerialMaster object.
     *
     * @param  ChildInvSerialMaster $v
     * @return $this|\InvTransferPreAllocatedLotserial The current object (for fluent API support)
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
            $this->setInidlotser('');
        } else {
            $this->setInidlotser($v->getSermsernbr());
        }

        $this->aInvSerialMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvSerialMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferPreAllocatedLotserial($this);
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
        if ($this->aInvSerialMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->inidlotser !== "" && $this->inidlotser !== null))) {
            $this->aInvSerialMaster = ChildInvSerialMasterQuery::create()->findPk(array($this->inititemnbr, $this->inidlotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvSerialMaster->addInvTransferPreAllocatedLotserials($this);
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
            $this->aItemMasterItem->removeInvTransferPreAllocatedLotserial($this);
        }
        if (null !== $this->aInvTransferOrder) {
            $this->aInvTransferOrder->removeInvTransferPreAllocatedLotserial($this);
        }
        if (null !== $this->aInvTransferDetail) {
            $this->aInvTransferDetail->removeInvTransferPreAllocatedLotserial($this);
        }
        if (null !== $this->aInvLotMaster) {
            $this->aInvLotMaster->removeInvTransferPreAllocatedLotserial($this);
        }
        if (null !== $this->aInvSerialMaster) {
            $this->aInvSerialMaster->removeInvTransferPreAllocatedLotserial($this);
        }
        $this->inhdnbr = null;
        $this->indtline = null;
        $this->inititemnbr = null;
        $this->inidlotser = null;
        $this->inidbin = null;
        $this->inidplltnbr = null;
        $this->inidcrtnnbr = null;
        $this->inidqtyresv = null;
        $this->inidqtyship = null;
        $this->inidqtynotpost = null;
        $this->inidunitcost = null;
        $this->inidlotserfrom = null;
        $this->inidbinfrom = null;
        $this->inidcases = null;
        $this->inidtag = null;
        $this->inidinspctlvl = null;
        $this->inidlotref = null;
        $this->inidcrtnqty = null;
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
        return (string) $this->exportTo(InvTransferPreAllocatedLotserialTableMap::DEFAULT_STRING_FORMAT);
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
