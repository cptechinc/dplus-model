<?php

namespace Base;

use \DplusUser as ChildDplusUser;
use \DplusUserQuery as ChildDplusUserQuery;
use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \InvLotTagQuery as ChildInvLotTagQuery;
use \InvSerialMaster as ChildInvSerialMaster;
use \InvSerialMasterQuery as ChildInvSerialMasterQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Warehouse as ChildWarehouse;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\InvLotTagTableMap;
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
 * Base class that represents a row from the 'inv_inv_tag' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvLotTag implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvLotTagTableMap';


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
     * The value for the intgworkid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intgworkid;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the intgtagnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $intgtagnbr;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the intglotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intglotser;

    /**
     * The value for the intgbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intgbin;

    /**
     * The value for the intgqty field.
     *
     * Note: this column has a database default value of: '0.00000'
     * @var        string
     */
    protected $intgqty;

    /**
     * The value for the intgunitcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $intgunitcost;

    /**
     * The value for the intgissue field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intgissue;

    /**
     * The value for the intguserid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intguserid;

    /**
     * The value for the intgentrdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intgentrdate;

    /**
     * The value for the intgentrtime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intgentrtime;

    /**
     * The value for the intgposted field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $intgposted;

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
     * @var        ChildInvSerialMaster
     */
    protected $aInvSerialMaster;

    /**
     * @var        ChildDplusUser
     */
    protected $aDplusUser;

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
        $this->intgworkid = '';
        $this->intbwhse = '';
        $this->intgtagnbr = 0;
        $this->inititemnbr = '';
        $this->intglotser = '';
        $this->intgbin = '';
        $this->intgqty = '0.00000';
        $this->intgunitcost = '0.0000000';
        $this->intgissue = '';
        $this->intguserid = '';
        $this->intgentrdate = '';
        $this->intgentrtime = '';
        $this->intgposted = 'N';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvLotTag object.
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
     * Compares this with another <code>InvLotTag</code> instance.  If
     * <code>obj</code> is an instance of <code>InvLotTag</code>, delegates to
     * <code>equals(InvLotTag)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvLotTag The current object, for fluid interface
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
     * Get the [intgworkid] column value.
     *
     * @return string
     */
    public function getIntgworkid()
    {
        return $this->intgworkid;
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
     * Get the [intgtagnbr] column value.
     *
     * @return int
     */
    public function getIntgtagnbr()
    {
        return $this->intgtagnbr;
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
     * Get the [intglotser] column value.
     *
     * @return string
     */
    public function getIntglotser()
    {
        return $this->intglotser;
    }

    /**
     * Get the [intgbin] column value.
     *
     * @return string
     */
    public function getIntgbin()
    {
        return $this->intgbin;
    }

    /**
     * Get the [intgqty] column value.
     *
     * @return string
     */
    public function getIntgqty()
    {
        return $this->intgqty;
    }

    /**
     * Get the [intgunitcost] column value.
     *
     * @return string
     */
    public function getIntgunitcost()
    {
        return $this->intgunitcost;
    }

    /**
     * Get the [intgissue] column value.
     *
     * @return string
     */
    public function getIntgissue()
    {
        return $this->intgissue;
    }

    /**
     * Get the [intguserid] column value.
     *
     * @return string
     */
    public function getIntguserid()
    {
        return $this->intguserid;
    }

    /**
     * Get the [intgentrdate] column value.
     *
     * @return string
     */
    public function getIntgentrdate()
    {
        return $this->intgentrdate;
    }

    /**
     * Get the [intgentrtime] column value.
     *
     * @return string
     */
    public function getIntgentrtime()
    {
        return $this->intgentrtime;
    }

    /**
     * Get the [intgposted] column value.
     *
     * @return string
     */
    public function getIntgposted()
    {
        return $this->intgposted;
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
     * Set the value of [intgworkid] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgworkid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intgworkid !== $v) {
            $this->intgworkid = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGWORKID] = true;
        }

        return $this;
    } // setIntgworkid()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTBWHSE] = true;
        }

        if ($this->aWarehouse !== null && $this->aWarehouse->getIntbwhse() !== $v) {
            $this->aWarehouse = null;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [intgtagnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgtagnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intgtagnbr !== $v) {
            $this->intgtagnbr = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGTAGNBR] = true;
        }

        return $this;
    } // setIntgtagnbr()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INITITEMNBR] = true;
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
     * Set the value of [intglotser] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntglotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intglotser !== $v) {
            $this->intglotser = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGLOTSER] = true;
        }

        if ($this->aInvLotMaster !== null && $this->aInvLotMaster->getLotmlotnbr() !== $v) {
            $this->aInvLotMaster = null;
        }

        if ($this->aInvSerialMaster !== null && $this->aInvSerialMaster->getSermsernbr() !== $v) {
            $this->aInvSerialMaster = null;
        }

        return $this;
    } // setIntglotser()

    /**
     * Set the value of [intgbin] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intgbin !== $v) {
            $this->intgbin = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGBIN] = true;
        }

        return $this;
    } // setIntgbin()

    /**
     * Set the value of [intgqty] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intgqty !== $v) {
            $this->intgqty = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGQTY] = true;
        }

        return $this;
    } // setIntgqty()

    /**
     * Set the value of [intgunitcost] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intgunitcost !== $v) {
            $this->intgunitcost = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGUNITCOST] = true;
        }

        return $this;
    } // setIntgunitcost()

    /**
     * Set the value of [intgissue] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgissue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intgissue !== $v) {
            $this->intgissue = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGISSUE] = true;
        }

        return $this;
    } // setIntgissue()

    /**
     * Set the value of [intguserid] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntguserid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intguserid !== $v) {
            $this->intguserid = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGUSERID] = true;
        }

        if ($this->aDplusUser !== null && $this->aDplusUser->getUsrcid() !== $v) {
            $this->aDplusUser = null;
        }

        return $this;
    } // setIntguserid()

    /**
     * Set the value of [intgentrdate] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgentrdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intgentrdate !== $v) {
            $this->intgentrdate = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGENTRDATE] = true;
        }

        return $this;
    } // setIntgentrdate()

    /**
     * Set the value of [intgentrtime] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgentrtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intgentrtime !== $v) {
            $this->intgentrtime = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGENTRTIME] = true;
        }

        return $this;
    } // setIntgentrtime()

    /**
     * Set the value of [intgposted] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setIntgposted($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intgposted !== $v) {
            $this->intgposted = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_INTGPOSTED] = true;
        }

        return $this;
    } // setIntgposted()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvLotTag The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvLotTagTableMap::COL_DUMMY] = true;
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
            if ($this->intgworkid !== '') {
                return false;
            }

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->intgtagnbr !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->intglotser !== '') {
                return false;
            }

            if ($this->intgbin !== '') {
                return false;
            }

            if ($this->intgqty !== '0.00000') {
                return false;
            }

            if ($this->intgunitcost !== '0.0000000') {
                return false;
            }

            if ($this->intgissue !== '') {
                return false;
            }

            if ($this->intguserid !== '') {
                return false;
            }

            if ($this->intgentrdate !== '') {
                return false;
            }

            if ($this->intgentrtime !== '') {
                return false;
            }

            if ($this->intgposted !== 'N') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvLotTagTableMap::translateFieldName('Intgworkid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgworkid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvLotTagTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvLotTagTableMap::translateFieldName('Intgtagnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgtagnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvLotTagTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvLotTagTableMap::translateFieldName('Intglotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intglotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvLotTagTableMap::translateFieldName('Intgbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvLotTagTableMap::translateFieldName('Intgqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvLotTagTableMap::translateFieldName('Intgunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvLotTagTableMap::translateFieldName('Intgissue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgissue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvLotTagTableMap::translateFieldName('Intguserid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intguserid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvLotTagTableMap::translateFieldName('Intgentrdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgentrdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvLotTagTableMap::translateFieldName('Intgentrtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgentrtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvLotTagTableMap::translateFieldName('Intgposted', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intgposted = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvLotTagTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvLotTagTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvLotTagTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = InvLotTagTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvLotTag'), 0, $e);
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
        if ($this->aWarehouse !== null && $this->intbwhse !== $this->aWarehouse->getIntbwhse()) {
            $this->aWarehouse = null;
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
        if ($this->aInvLotMaster !== null && $this->intglotser !== $this->aInvLotMaster->getLotmlotnbr()) {
            $this->aInvLotMaster = null;
        }
        if ($this->aInvSerialMaster !== null && $this->intglotser !== $this->aInvSerialMaster->getSermsernbr()) {
            $this->aInvSerialMaster = null;
        }
        if ($this->aDplusUser !== null && $this->intguserid !== $this->aDplusUser->getUsrcid()) {
            $this->aDplusUser = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(InvLotTagTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvLotTagQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
            $this->aInvSerialMaster = null;
            $this->aDplusUser = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvLotTag::setDeleted()
     * @see InvLotTag::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotTagTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvLotTagQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotTagTableMap::DATABASE_NAME);
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
                InvLotTagTableMap::addInstanceToPool($this);
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

            if ($this->aInvSerialMaster !== null) {
                if ($this->aInvSerialMaster->isModified() || $this->aInvSerialMaster->isNew()) {
                    $affectedRows += $this->aInvSerialMaster->save($con);
                }
                $this->setInvSerialMaster($this->aInvSerialMaster);
            }

            if ($this->aDplusUser !== null) {
                if ($this->aDplusUser->isModified() || $this->aDplusUser->isNew()) {
                    $affectedRows += $this->aDplusUser->save($con);
                }
                $this->setDplusUser($this->aDplusUser);
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
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGWORKID)) {
            $modifiedColumns[':p' . $index++]  = 'IntgWorkId';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGTAGNBR)) {
            $modifiedColumns[':p' . $index++]  = 'IntgTagNbr';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'IntgLotSer';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntgBin';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGQTY)) {
            $modifiedColumns[':p' . $index++]  = 'IntgQty';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'IntgUnitCost';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGISSUE)) {
            $modifiedColumns[':p' . $index++]  = 'IntgIssue';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGUSERID)) {
            $modifiedColumns[':p' . $index++]  = 'IntgUserId';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGENTRDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IntgEntrDate';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGENTRTIME)) {
            $modifiedColumns[':p' . $index++]  = 'IntgEntrTime';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGPOSTED)) {
            $modifiedColumns[':p' . $index++]  = 'IntgPosted';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_inv_tag (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'IntgWorkId':
                        $stmt->bindValue($identifier, $this->intgworkid, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'IntgTagNbr':
                        $stmt->bindValue($identifier, $this->intgtagnbr, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntgLotSer':
                        $stmt->bindValue($identifier, $this->intglotser, PDO::PARAM_STR);
                        break;
                    case 'IntgBin':
                        $stmt->bindValue($identifier, $this->intgbin, PDO::PARAM_STR);
                        break;
                    case 'IntgQty':
                        $stmt->bindValue($identifier, $this->intgqty, PDO::PARAM_STR);
                        break;
                    case 'IntgUnitCost':
                        $stmt->bindValue($identifier, $this->intgunitcost, PDO::PARAM_STR);
                        break;
                    case 'IntgIssue':
                        $stmt->bindValue($identifier, $this->intgissue, PDO::PARAM_STR);
                        break;
                    case 'IntgUserId':
                        $stmt->bindValue($identifier, $this->intguserid, PDO::PARAM_STR);
                        break;
                    case 'IntgEntrDate':
                        $stmt->bindValue($identifier, $this->intgentrdate, PDO::PARAM_STR);
                        break;
                    case 'IntgEntrTime':
                        $stmt->bindValue($identifier, $this->intgentrtime, PDO::PARAM_STR);
                        break;
                    case 'IntgPosted':
                        $stmt->bindValue($identifier, $this->intgposted, PDO::PARAM_STR);
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
        $pos = InvLotTagTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIntgworkid();
                break;
            case 1:
                return $this->getIntbwhse();
                break;
            case 2:
                return $this->getIntgtagnbr();
                break;
            case 3:
                return $this->getInititemnbr();
                break;
            case 4:
                return $this->getIntglotser();
                break;
            case 5:
                return $this->getIntgbin();
                break;
            case 6:
                return $this->getIntgqty();
                break;
            case 7:
                return $this->getIntgunitcost();
                break;
            case 8:
                return $this->getIntgissue();
                break;
            case 9:
                return $this->getIntguserid();
                break;
            case 10:
                return $this->getIntgentrdate();
                break;
            case 11:
                return $this->getIntgentrtime();
                break;
            case 12:
                return $this->getIntgposted();
                break;
            case 13:
                return $this->getDateupdtd();
                break;
            case 14:
                return $this->getTimeupdtd();
                break;
            case 15:
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

        if (isset($alreadyDumpedObjects['InvLotTag'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvLotTag'][$this->hashCode()] = true;
        $keys = InvLotTagTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIntgworkid(),
            $keys[1] => $this->getIntbwhse(),
            $keys[2] => $this->getIntgtagnbr(),
            $keys[3] => $this->getInititemnbr(),
            $keys[4] => $this->getIntglotser(),
            $keys[5] => $this->getIntgbin(),
            $keys[6] => $this->getIntgqty(),
            $keys[7] => $this->getIntgunitcost(),
            $keys[8] => $this->getIntgissue(),
            $keys[9] => $this->getIntguserid(),
            $keys[10] => $this->getIntgentrdate(),
            $keys[11] => $this->getIntgentrtime(),
            $keys[12] => $this->getIntgposted(),
            $keys[13] => $this->getDateupdtd(),
            $keys[14] => $this->getTimeupdtd(),
            $keys[15] => $this->getDummy(),
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
            if (null !== $this->aDplusUser) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'dplusUser';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'sys_login';
                        break;
                    default:
                        $key = 'DplusUser';
                }

                $result[$key] = $this->aDplusUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\InvLotTag
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvLotTagTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvLotTag
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIntgworkid($value);
                break;
            case 1:
                $this->setIntbwhse($value);
                break;
            case 2:
                $this->setIntgtagnbr($value);
                break;
            case 3:
                $this->setInititemnbr($value);
                break;
            case 4:
                $this->setIntglotser($value);
                break;
            case 5:
                $this->setIntgbin($value);
                break;
            case 6:
                $this->setIntgqty($value);
                break;
            case 7:
                $this->setIntgunitcost($value);
                break;
            case 8:
                $this->setIntgissue($value);
                break;
            case 9:
                $this->setIntguserid($value);
                break;
            case 10:
                $this->setIntgentrdate($value);
                break;
            case 11:
                $this->setIntgentrtime($value);
                break;
            case 12:
                $this->setIntgposted($value);
                break;
            case 13:
                $this->setDateupdtd($value);
                break;
            case 14:
                $this->setTimeupdtd($value);
                break;
            case 15:
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
        $keys = InvLotTagTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIntgworkid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbwhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIntgtagnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInititemnbr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIntglotser($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIntgbin($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIntgqty($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIntgunitcost($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIntgissue($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIntguserid($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIntgentrdate($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setIntgentrtime($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setIntgposted($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setDateupdtd($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setTimeupdtd($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setDummy($arr[$keys[15]]);
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
     * @return $this|\InvLotTag The current object, for fluid interface
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
        $criteria = new Criteria(InvLotTagTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGWORKID)) {
            $criteria->add(InvLotTagTableMap::COL_INTGWORKID, $this->intgworkid);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTBWHSE)) {
            $criteria->add(InvLotTagTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGTAGNBR)) {
            $criteria->add(InvLotTagTableMap::COL_INTGTAGNBR, $this->intgtagnbr);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvLotTagTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGLOTSER)) {
            $criteria->add(InvLotTagTableMap::COL_INTGLOTSER, $this->intglotser);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGBIN)) {
            $criteria->add(InvLotTagTableMap::COL_INTGBIN, $this->intgbin);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGQTY)) {
            $criteria->add(InvLotTagTableMap::COL_INTGQTY, $this->intgqty);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGUNITCOST)) {
            $criteria->add(InvLotTagTableMap::COL_INTGUNITCOST, $this->intgunitcost);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGISSUE)) {
            $criteria->add(InvLotTagTableMap::COL_INTGISSUE, $this->intgissue);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGUSERID)) {
            $criteria->add(InvLotTagTableMap::COL_INTGUSERID, $this->intguserid);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGENTRDATE)) {
            $criteria->add(InvLotTagTableMap::COL_INTGENTRDATE, $this->intgentrdate);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGENTRTIME)) {
            $criteria->add(InvLotTagTableMap::COL_INTGENTRTIME, $this->intgentrtime);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_INTGPOSTED)) {
            $criteria->add(InvLotTagTableMap::COL_INTGPOSTED, $this->intgposted);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvLotTagTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvLotTagTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvLotTagTableMap::COL_DUMMY)) {
            $criteria->add(InvLotTagTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvLotTagQuery::create();
        $criteria->add(InvLotTagTableMap::COL_INTGWORKID, $this->intgworkid);
        $criteria->add(InvLotTagTableMap::COL_INTBWHSE, $this->intbwhse);
        $criteria->add(InvLotTagTableMap::COL_INTGTAGNBR, $this->intgtagnbr);

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
        $validPk = null !== $this->getIntgworkid() &&
            null !== $this->getIntbwhse() &&
            null !== $this->getIntgtagnbr();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation warehouse to table inv_whse_code
        if ($this->aWarehouse && $hash = spl_object_hash($this->aWarehouse)) {
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
        $pks[0] = $this->getIntgworkid();
        $pks[1] = $this->getIntbwhse();
        $pks[2] = $this->getIntgtagnbr();

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
        $this->setIntgworkid($keys[0]);
        $this->setIntbwhse($keys[1]);
        $this->setIntgtagnbr($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getIntgworkid()) && (null === $this->getIntbwhse()) && (null === $this->getIntgtagnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvLotTag (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntgworkid($this->getIntgworkid());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setIntgtagnbr($this->getIntgtagnbr());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setIntglotser($this->getIntglotser());
        $copyObj->setIntgbin($this->getIntgbin());
        $copyObj->setIntgqty($this->getIntgqty());
        $copyObj->setIntgunitcost($this->getIntgunitcost());
        $copyObj->setIntgissue($this->getIntgissue());
        $copyObj->setIntguserid($this->getIntguserid());
        $copyObj->setIntgentrdate($this->getIntgentrdate());
        $copyObj->setIntgentrtime($this->getIntgentrtime());
        $copyObj->setIntgposted($this->getIntgposted());
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
     * @return \InvLotTag Clone of current object.
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
     * @return $this|\InvLotTag The current object (for fluent API support)
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
            $v->addInvLotTag($this);
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
                $this->aItemMasterItem->addInvLotTags($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildWarehouse object.
     *
     * @param  ChildWarehouse $v
     * @return $this|\InvLotTag The current object (for fluent API support)
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
            $v->addInvLotTag($this);
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
                $this->aWarehouse->addInvLotTags($this);
             */
        }

        return $this->aWarehouse;
    }

    /**
     * Declares an association between this object and a ChildInvLotMaster object.
     *
     * @param  ChildInvLotMaster $v
     * @return $this|\InvLotTag The current object (for fluent API support)
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
            $this->setIntglotser('');
        } else {
            $this->setIntglotser($v->getLotmlotnbr());
        }

        $this->aInvLotMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvLotMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvLotTag($this);
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
        if ($this->aInvLotMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->intglotser !== "" && $this->intglotser !== null))) {
            $this->aInvLotMaster = ChildInvLotMasterQuery::create()->findPk(array($this->inititemnbr, $this->intglotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvLotMaster->addInvLotTags($this);
             */
        }

        return $this->aInvLotMaster;
    }

    /**
     * Declares an association between this object and a ChildInvSerialMaster object.
     *
     * @param  ChildInvSerialMaster $v
     * @return $this|\InvLotTag The current object (for fluent API support)
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
            $this->setIntglotser('');
        } else {
            $this->setIntglotser($v->getSermsernbr());
        }

        $this->aInvSerialMaster = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvSerialMaster object, it will not be re-added.
        if ($v !== null) {
            $v->addInvLotTag($this);
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
        if ($this->aInvSerialMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->intglotser !== "" && $this->intglotser !== null))) {
            $this->aInvSerialMaster = ChildInvSerialMasterQuery::create()->findPk(array($this->inititemnbr, $this->intglotser), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvSerialMaster->addInvLotTags($this);
             */
        }

        return $this->aInvSerialMaster;
    }

    /**
     * Declares an association between this object and a ChildDplusUser object.
     *
     * @param  ChildDplusUser $v
     * @return $this|\InvLotTag The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDplusUser(ChildDplusUser $v = null)
    {
        if ($v === null) {
            $this->setIntguserid('');
        } else {
            $this->setIntguserid($v->getUsrcid());
        }

        $this->aDplusUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildDplusUser object, it will not be re-added.
        if ($v !== null) {
            $v->addInvLotTag($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildDplusUser object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildDplusUser The associated ChildDplusUser object.
     * @throws PropelException
     */
    public function getDplusUser(ConnectionInterface $con = null)
    {
        if ($this->aDplusUser === null && (($this->intguserid !== "" && $this->intguserid !== null))) {
            $this->aDplusUser = ChildDplusUserQuery::create()->findPk($this->intguserid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDplusUser->addInvLotTags($this);
             */
        }

        return $this->aDplusUser;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeInvLotTag($this);
        }
        if (null !== $this->aWarehouse) {
            $this->aWarehouse->removeInvLotTag($this);
        }
        if (null !== $this->aInvLotMaster) {
            $this->aInvLotMaster->removeInvLotTag($this);
        }
        if (null !== $this->aInvSerialMaster) {
            $this->aInvSerialMaster->removeInvLotTag($this);
        }
        if (null !== $this->aDplusUser) {
            $this->aDplusUser->removeInvLotTag($this);
        }
        $this->intgworkid = null;
        $this->intbwhse = null;
        $this->intgtagnbr = null;
        $this->inititemnbr = null;
        $this->intglotser = null;
        $this->intgbin = null;
        $this->intgqty = null;
        $this->intgunitcost = null;
        $this->intgissue = null;
        $this->intguserid = null;
        $this->intgentrdate = null;
        $this->intgentrtime = null;
        $this->intgposted = null;
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
        $this->aInvSerialMaster = null;
        $this->aDplusUser = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvLotTagTableMap::DEFAULT_STRING_FORMAT);
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
