<?php

namespace Base;

use \WarehouseInventoryQuery as ChildWarehouseInventoryQuery;
use \Exception;
use \PDO;
use Map\WarehouseInventoryTableMap;
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
 * Base class that represents a row from the 'inv_whse_mast' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class WarehouseInventory implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\WarehouseInventoryTableMap';


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
     * The value for the inwhbin field.
     *
     * @var        string
     */
    protected $inwhbin;

    /**
     * The value for the inwhcycl field.
     *
     * @var        string
     */
    protected $inwhcycl;

    /**
     * The value for the inwhcntdate field.
     *
     * @var        string
     */
    protected $inwhcntdate;

    /**
     * The value for the inwhstat field.
     *
     * @var        string
     */
    protected $inwhstat;

    /**
     * The value for the inwhabc field.
     *
     * @var        string
     */
    protected $inwhabc;

    /**
     * The value for the inwhordrpnt field.
     *
     * @var        string
     */
    protected $inwhordrpnt;

    /**
     * The value for the inwhmax field.
     *
     * @var        string
     */
    protected $inwhmax;

    /**
     * The value for the inwhordrqty field.
     *
     * @var        string
     */
    protected $inwhordrqty;

    /**
     * The value for the inwhspecordr field.
     *
     * @var        string
     */
    protected $inwhspecordr;

    /**
     * The value for the inwhavail field.
     *
     * @var        string
     */
    protected $inwhavail;

    /**
     * The value for the inwh12motimessold field.
     *
     * @var        int
     */
    protected $inwh12motimessold;

    /**
     * The value for the inwhfrtin field.
     *
     * @var        string
     */
    protected $inwhfrtin;

    /**
     * The value for the inwhmaxordrqty field.
     *
     * @var        string
     */
    protected $inwhmaxordrqty;

    /**
     * The value for the inwhcrtedate field.
     *
     * @var        string
     */
    protected $inwhcrtedate;

    /**
     * The value for the inwhshipbin field.
     *
     * @var        string
     */
    protected $inwhshipbin;

    /**
     * The value for the inwhlastpurchponbr field.
     *
     * @var        string
     */
    protected $inwhlastpurchponbr;

    /**
     * The value for the inwhlastpurchinvnbr field.
     *
     * @var        string
     */
    protected $inwhlastpurchinvnbr;

    /**
     * The value for the inwhsupplywhse field.
     *
     * @var        string
     */
    protected $inwhsupplywhse;

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
    }

    /**
     * Initializes internal state of Base\WarehouseInventory object.
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
     * Compares this with another <code>WarehouseInventory</code> instance.  If
     * <code>obj</code> is an instance of <code>WarehouseInventory</code>, delegates to
     * <code>equals(WarehouseInventory)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|WarehouseInventory The current object, for fluid interface
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
     * Get the [inwhbin] column value.
     *
     * @return string
     */
    public function getInwhbin()
    {
        return $this->inwhbin;
    }

    /**
     * Get the [inwhcycl] column value.
     *
     * @return string
     */
    public function getInwhcycl()
    {
        return $this->inwhcycl;
    }

    /**
     * Get the [inwhcntdate] column value.
     *
     * @return string
     */
    public function getInwhcntdate()
    {
        return $this->inwhcntdate;
    }

    /**
     * Get the [inwhstat] column value.
     *
     * @return string
     */
    public function getInwhstat()
    {
        return $this->inwhstat;
    }

    /**
     * Get the [inwhabc] column value.
     *
     * @return string
     */
    public function getInwhabc()
    {
        return $this->inwhabc;
    }

    /**
     * Get the [inwhordrpnt] column value.
     *
     * @return string
     */
    public function getInwhordrpnt()
    {
        return $this->inwhordrpnt;
    }

    /**
     * Get the [inwhmax] column value.
     *
     * @return string
     */
    public function getInwhmax()
    {
        return $this->inwhmax;
    }

    /**
     * Get the [inwhordrqty] column value.
     *
     * @return string
     */
    public function getInwhordrqty()
    {
        return $this->inwhordrqty;
    }

    /**
     * Get the [inwhspecordr] column value.
     *
     * @return string
     */
    public function getInwhspecordr()
    {
        return $this->inwhspecordr;
    }

    /**
     * Get the [inwhavail] column value.
     *
     * @return string
     */
    public function getInwhavail()
    {
        return $this->inwhavail;
    }

    /**
     * Get the [inwh12motimessold] column value.
     *
     * @return int
     */
    public function getInwh12motimessold()
    {
        return $this->inwh12motimessold;
    }

    /**
     * Get the [inwhfrtin] column value.
     *
     * @return string
     */
    public function getInwhfrtin()
    {
        return $this->inwhfrtin;
    }

    /**
     * Get the [inwhmaxordrqty] column value.
     *
     * @return string
     */
    public function getInwhmaxordrqty()
    {
        return $this->inwhmaxordrqty;
    }

    /**
     * Get the [inwhcrtedate] column value.
     *
     * @return string
     */
    public function getInwhcrtedate()
    {
        return $this->inwhcrtedate;
    }

    /**
     * Get the [inwhshipbin] column value.
     *
     * @return string
     */
    public function getInwhshipbin()
    {
        return $this->inwhshipbin;
    }

    /**
     * Get the [inwhlastpurchponbr] column value.
     *
     * @return string
     */
    public function getInwhlastpurchponbr()
    {
        return $this->inwhlastpurchponbr;
    }

    /**
     * Get the [inwhlastpurchinvnbr] column value.
     *
     * @return string
     */
    public function getInwhlastpurchinvnbr()
    {
        return $this->inwhlastpurchinvnbr;
    }

    /**
     * Get the [inwhsupplywhse] column value.
     *
     * @return string
     */
    public function getInwhsupplywhse()
    {
        return $this->inwhsupplywhse;
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
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [inwhbin] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhbin !== $v) {
            $this->inwhbin = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHBIN] = true;
        }

        return $this;
    } // setInwhbin()

    /**
     * Set the value of [inwhcycl] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhcycl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhcycl !== $v) {
            $this->inwhcycl = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHCYCL] = true;
        }

        return $this;
    } // setInwhcycl()

    /**
     * Set the value of [inwhcntdate] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhcntdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhcntdate !== $v) {
            $this->inwhcntdate = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHCNTDATE] = true;
        }

        return $this;
    } // setInwhcntdate()

    /**
     * Set the value of [inwhstat] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhstat !== $v) {
            $this->inwhstat = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHSTAT] = true;
        }

        return $this;
    } // setInwhstat()

    /**
     * Set the value of [inwhabc] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhabc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhabc !== $v) {
            $this->inwhabc = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHABC] = true;
        }

        return $this;
    } // setInwhabc()

    /**
     * Set the value of [inwhordrpnt] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhordrpnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhordrpnt !== $v) {
            $this->inwhordrpnt = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHORDRPNT] = true;
        }

        return $this;
    } // setInwhordrpnt()

    /**
     * Set the value of [inwhmax] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhmax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhmax !== $v) {
            $this->inwhmax = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHMAX] = true;
        }

        return $this;
    } // setInwhmax()

    /**
     * Set the value of [inwhordrqty] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhordrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhordrqty !== $v) {
            $this->inwhordrqty = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHORDRQTY] = true;
        }

        return $this;
    } // setInwhordrqty()

    /**
     * Set the value of [inwhspecordr] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhspecordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhspecordr !== $v) {
            $this->inwhspecordr = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHSPECORDR] = true;
        }

        return $this;
    } // setInwhspecordr()

    /**
     * Set the value of [inwhavail] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhavail !== $v) {
            $this->inwhavail = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHAVAIL] = true;
        }

        return $this;
    } // setInwhavail()

    /**
     * Set the value of [inwh12motimessold] column.
     *
     * @param int $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwh12motimessold($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inwh12motimessold !== $v) {
            $this->inwh12motimessold = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD] = true;
        }

        return $this;
    } // setInwh12motimessold()

    /**
     * Set the value of [inwhfrtin] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhfrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhfrtin !== $v) {
            $this->inwhfrtin = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHFRTIN] = true;
        }

        return $this;
    } // setInwhfrtin()

    /**
     * Set the value of [inwhmaxordrqty] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhmaxordrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhmaxordrqty !== $v) {
            $this->inwhmaxordrqty = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHMAXORDRQTY] = true;
        }

        return $this;
    } // setInwhmaxordrqty()

    /**
     * Set the value of [inwhcrtedate] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhcrtedate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhcrtedate !== $v) {
            $this->inwhcrtedate = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHCRTEDATE] = true;
        }

        return $this;
    } // setInwhcrtedate()

    /**
     * Set the value of [inwhshipbin] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhshipbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhshipbin !== $v) {
            $this->inwhshipbin = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHSHIPBIN] = true;
        }

        return $this;
    } // setInwhshipbin()

    /**
     * Set the value of [inwhlastpurchponbr] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhlastpurchponbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhlastpurchponbr !== $v) {
            $this->inwhlastpurchponbr = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR] = true;
        }

        return $this;
    } // setInwhlastpurchponbr()

    /**
     * Set the value of [inwhlastpurchinvnbr] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhlastpurchinvnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhlastpurchinvnbr !== $v) {
            $this->inwhlastpurchinvnbr = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHLASTPURCHINVNBR] = true;
        }

        return $this;
    } // setInwhlastpurchinvnbr()

    /**
     * Set the value of [inwhsupplywhse] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setInwhsupplywhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inwhsupplywhse !== $v) {
            $this->inwhsupplywhse = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE] = true;
        }

        return $this;
    } // setInwhsupplywhse()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseInventory The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[WarehouseInventoryTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : WarehouseInventoryTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhcycl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhcycl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhcntdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhcntdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhabc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhabc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhordrpnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhordrpnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhmax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhmax = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhordrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhordrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhspecordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhspecordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwh12motimessold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwh12motimessold = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhfrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhfrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhmaxordrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhmaxordrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhcrtedate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhcrtedate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhshipbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhshipbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhlastpurchponbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhlastpurchponbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhlastpurchinvnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhlastpurchinvnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : WarehouseInventoryTableMap::translateFieldName('Inwhsupplywhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inwhsupplywhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : WarehouseInventoryTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : WarehouseInventoryTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : WarehouseInventoryTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = WarehouseInventoryTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\WarehouseInventory'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildWarehouseInventoryQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see WarehouseInventory::setDeleted()
     * @see WarehouseInventory::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildWarehouseInventoryQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseInventoryTableMap::DATABASE_NAME);
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
                WarehouseInventoryTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InwhBin';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHCYCL)) {
            $modifiedColumns[':p' . $index++]  = 'InwhCycl';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHCNTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InwhCntDate';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'InwhStat';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHABC)) {
            $modifiedColumns[':p' . $index++]  = 'InwhAbc';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHORDRPNT)) {
            $modifiedColumns[':p' . $index++]  = 'InwhOrdrPnt';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHMAX)) {
            $modifiedColumns[':p' . $index++]  = 'InwhMax';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHORDRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InwhOrdrQty';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHSPECORDR)) {
            $modifiedColumns[':p' . $index++]  = 'InwhSpecOrdr';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'InwhAvail';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD)) {
            $modifiedColumns[':p' . $index++]  = 'Inwh12moTimesSold';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'InwhFrtIn';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InwhMaxOrdrQty';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHCRTEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InwhCrteDate';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHSHIPBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InwhShipBin';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR)) {
            $modifiedColumns[':p' . $index++]  = 'InwhLastPurchPoNbr';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHLASTPURCHINVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InwhLastPurchInvNbr';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'InwhSupplyWhse';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_whse_mast (%s) VALUES (%s)',
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
                    case 'InwhBin':
                        $stmt->bindValue($identifier, $this->inwhbin, PDO::PARAM_STR);
                        break;
                    case 'InwhCycl':
                        $stmt->bindValue($identifier, $this->inwhcycl, PDO::PARAM_STR);
                        break;
                    case 'InwhCntDate':
                        $stmt->bindValue($identifier, $this->inwhcntdate, PDO::PARAM_STR);
                        break;
                    case 'InwhStat':
                        $stmt->bindValue($identifier, $this->inwhstat, PDO::PARAM_STR);
                        break;
                    case 'InwhAbc':
                        $stmt->bindValue($identifier, $this->inwhabc, PDO::PARAM_STR);
                        break;
                    case 'InwhOrdrPnt':
                        $stmt->bindValue($identifier, $this->inwhordrpnt, PDO::PARAM_STR);
                        break;
                    case 'InwhMax':
                        $stmt->bindValue($identifier, $this->inwhmax, PDO::PARAM_STR);
                        break;
                    case 'InwhOrdrQty':
                        $stmt->bindValue($identifier, $this->inwhordrqty, PDO::PARAM_STR);
                        break;
                    case 'InwhSpecOrdr':
                        $stmt->bindValue($identifier, $this->inwhspecordr, PDO::PARAM_STR);
                        break;
                    case 'InwhAvail':
                        $stmt->bindValue($identifier, $this->inwhavail, PDO::PARAM_STR);
                        break;
                    case 'Inwh12moTimesSold':
                        $stmt->bindValue($identifier, $this->inwh12motimessold, PDO::PARAM_INT);
                        break;
                    case 'InwhFrtIn':
                        $stmt->bindValue($identifier, $this->inwhfrtin, PDO::PARAM_STR);
                        break;
                    case 'InwhMaxOrdrQty':
                        $stmt->bindValue($identifier, $this->inwhmaxordrqty, PDO::PARAM_STR);
                        break;
                    case 'InwhCrteDate':
                        $stmt->bindValue($identifier, $this->inwhcrtedate, PDO::PARAM_STR);
                        break;
                    case 'InwhShipBin':
                        $stmt->bindValue($identifier, $this->inwhshipbin, PDO::PARAM_STR);
                        break;
                    case 'InwhLastPurchPoNbr':
                        $stmt->bindValue($identifier, $this->inwhlastpurchponbr, PDO::PARAM_STR);
                        break;
                    case 'InwhLastPurchInvNbr':
                        $stmt->bindValue($identifier, $this->inwhlastpurchinvnbr, PDO::PARAM_STR);
                        break;
                    case 'InwhSupplyWhse':
                        $stmt->bindValue($identifier, $this->inwhsupplywhse, PDO::PARAM_STR);
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
        $pos = WarehouseInventoryTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInwhbin();
                break;
            case 3:
                return $this->getInwhcycl();
                break;
            case 4:
                return $this->getInwhcntdate();
                break;
            case 5:
                return $this->getInwhstat();
                break;
            case 6:
                return $this->getInwhabc();
                break;
            case 7:
                return $this->getInwhordrpnt();
                break;
            case 8:
                return $this->getInwhmax();
                break;
            case 9:
                return $this->getInwhordrqty();
                break;
            case 10:
                return $this->getInwhspecordr();
                break;
            case 11:
                return $this->getInwhavail();
                break;
            case 12:
                return $this->getInwh12motimessold();
                break;
            case 13:
                return $this->getInwhfrtin();
                break;
            case 14:
                return $this->getInwhmaxordrqty();
                break;
            case 15:
                return $this->getInwhcrtedate();
                break;
            case 16:
                return $this->getInwhshipbin();
                break;
            case 17:
                return $this->getInwhlastpurchponbr();
                break;
            case 18:
                return $this->getInwhlastpurchinvnbr();
                break;
            case 19:
                return $this->getInwhsupplywhse();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['WarehouseInventory'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['WarehouseInventory'][$this->hashCode()] = true;
        $keys = WarehouseInventoryTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getIntbwhse(),
            $keys[2] => $this->getInwhbin(),
            $keys[3] => $this->getInwhcycl(),
            $keys[4] => $this->getInwhcntdate(),
            $keys[5] => $this->getInwhstat(),
            $keys[6] => $this->getInwhabc(),
            $keys[7] => $this->getInwhordrpnt(),
            $keys[8] => $this->getInwhmax(),
            $keys[9] => $this->getInwhordrqty(),
            $keys[10] => $this->getInwhspecordr(),
            $keys[11] => $this->getInwhavail(),
            $keys[12] => $this->getInwh12motimessold(),
            $keys[13] => $this->getInwhfrtin(),
            $keys[14] => $this->getInwhmaxordrqty(),
            $keys[15] => $this->getInwhcrtedate(),
            $keys[16] => $this->getInwhshipbin(),
            $keys[17] => $this->getInwhlastpurchponbr(),
            $keys[18] => $this->getInwhlastpurchinvnbr(),
            $keys[19] => $this->getInwhsupplywhse(),
            $keys[20] => $this->getDateupdtd(),
            $keys[21] => $this->getTimeupdtd(),
            $keys[22] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
     * @return $this|\WarehouseInventory
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = WarehouseInventoryTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\WarehouseInventory
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
                $this->setInwhbin($value);
                break;
            case 3:
                $this->setInwhcycl($value);
                break;
            case 4:
                $this->setInwhcntdate($value);
                break;
            case 5:
                $this->setInwhstat($value);
                break;
            case 6:
                $this->setInwhabc($value);
                break;
            case 7:
                $this->setInwhordrpnt($value);
                break;
            case 8:
                $this->setInwhmax($value);
                break;
            case 9:
                $this->setInwhordrqty($value);
                break;
            case 10:
                $this->setInwhspecordr($value);
                break;
            case 11:
                $this->setInwhavail($value);
                break;
            case 12:
                $this->setInwh12motimessold($value);
                break;
            case 13:
                $this->setInwhfrtin($value);
                break;
            case 14:
                $this->setInwhmaxordrqty($value);
                break;
            case 15:
                $this->setInwhcrtedate($value);
                break;
            case 16:
                $this->setInwhshipbin($value);
                break;
            case 17:
                $this->setInwhlastpurchponbr($value);
                break;
            case 18:
                $this->setInwhlastpurchinvnbr($value);
                break;
            case 19:
                $this->setInwhsupplywhse($value);
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
        $keys = WarehouseInventoryTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbwhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInwhbin($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInwhcycl($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInwhcntdate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInwhstat($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInwhabc($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInwhordrpnt($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setInwhmax($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setInwhordrqty($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInwhspecordr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInwhavail($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInwh12motimessold($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInwhfrtin($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInwhmaxordrqty($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInwhcrtedate($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInwhshipbin($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInwhlastpurchponbr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInwhlastpurchinvnbr($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInwhsupplywhse($arr[$keys[19]]);
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
     * @return $this|\WarehouseInventory The current object, for fluid interface
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
        $criteria = new Criteria(WarehouseInventoryTableMap::DATABASE_NAME);

        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INITITEMNBR)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INTBWHSE)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHBIN)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHBIN, $this->inwhbin);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHCYCL)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHCYCL, $this->inwhcycl);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHCNTDATE)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHCNTDATE, $this->inwhcntdate);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHSTAT)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHSTAT, $this->inwhstat);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHABC)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHABC, $this->inwhabc);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHORDRPNT)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHORDRPNT, $this->inwhordrpnt);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHMAX)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHMAX, $this->inwhmax);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHORDRQTY)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHORDRQTY, $this->inwhordrqty);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHSPECORDR)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHSPECORDR, $this->inwhspecordr);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHAVAIL)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHAVAIL, $this->inwhavail);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD, $this->inwh12motimessold);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHFRTIN)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHFRTIN, $this->inwhfrtin);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY, $this->inwhmaxordrqty);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHCRTEDATE)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHCRTEDATE, $this->inwhcrtedate);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHSHIPBIN)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHSHIPBIN, $this->inwhshipbin);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR, $this->inwhlastpurchponbr);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHLASTPURCHINVNBR)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHLASTPURCHINVNBR, $this->inwhlastpurchinvnbr);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE)) {
            $criteria->add(WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE, $this->inwhsupplywhse);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_DATEUPDTD)) {
            $criteria->add(WarehouseInventoryTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_TIMEUPDTD)) {
            $criteria->add(WarehouseInventoryTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(WarehouseInventoryTableMap::COL_DUMMY)) {
            $criteria->add(WarehouseInventoryTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildWarehouseInventoryQuery::create();
        $criteria->add(WarehouseInventoryTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(WarehouseInventoryTableMap::COL_INTBWHSE, $this->intbwhse);

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
            null !== $this->getIntbwhse();

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
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getInititemnbr();
        $pks[1] = $this->getIntbwhse();

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
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInititemnbr()) && (null === $this->getIntbwhse());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \WarehouseInventory (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setInwhbin($this->getInwhbin());
        $copyObj->setInwhcycl($this->getInwhcycl());
        $copyObj->setInwhcntdate($this->getInwhcntdate());
        $copyObj->setInwhstat($this->getInwhstat());
        $copyObj->setInwhabc($this->getInwhabc());
        $copyObj->setInwhordrpnt($this->getInwhordrpnt());
        $copyObj->setInwhmax($this->getInwhmax());
        $copyObj->setInwhordrqty($this->getInwhordrqty());
        $copyObj->setInwhspecordr($this->getInwhspecordr());
        $copyObj->setInwhavail($this->getInwhavail());
        $copyObj->setInwh12motimessold($this->getInwh12motimessold());
        $copyObj->setInwhfrtin($this->getInwhfrtin());
        $copyObj->setInwhmaxordrqty($this->getInwhmaxordrqty());
        $copyObj->setInwhcrtedate($this->getInwhcrtedate());
        $copyObj->setInwhshipbin($this->getInwhshipbin());
        $copyObj->setInwhlastpurchponbr($this->getInwhlastpurchponbr());
        $copyObj->setInwhlastpurchinvnbr($this->getInwhlastpurchinvnbr());
        $copyObj->setInwhsupplywhse($this->getInwhsupplywhse());
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
     * @return \WarehouseInventory Clone of current object.
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
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->inititemnbr = null;
        $this->intbwhse = null;
        $this->inwhbin = null;
        $this->inwhcycl = null;
        $this->inwhcntdate = null;
        $this->inwhstat = null;
        $this->inwhabc = null;
        $this->inwhordrpnt = null;
        $this->inwhmax = null;
        $this->inwhordrqty = null;
        $this->inwhspecordr = null;
        $this->inwhavail = null;
        $this->inwh12motimessold = null;
        $this->inwhfrtin = null;
        $this->inwhmaxordrqty = null;
        $this->inwhcrtedate = null;
        $this->inwhshipbin = null;
        $this->inwhlastpurchponbr = null;
        $this->inwhlastpurchinvnbr = null;
        $this->inwhsupplywhse = null;
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

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(WarehouseInventoryTableMap::DEFAULT_STRING_FORMAT);
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
