<?php

namespace Base;

use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \InvWhseLot as ChildInvWhseLot;
use \InvWhseLotQuery as ChildInvWhseLotQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \SoAllocatedLotserial as ChildSoAllocatedLotserial;
use \SoAllocatedLotserialQuery as ChildSoAllocatedLotserialQuery;
use \SoPickedLotserial as ChildSoPickedLotserial;
use \SoPickedLotserialQuery as ChildSoPickedLotserialQuery;
use \Exception;
use \PDO;
use Map\InvLotMasterTableMap;
use Map\InvWhseLotTableMap;
use Map\SoAllocatedLotserialTableMap;
use Map\SoPickedLotserialTableMap;
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
 * Base class that represents a row from the 'inv_lot_mast' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvLotMaster implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvLotMasterTableMap';


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
     * The value for the lotmlotnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lotmlotnbr;

    /**
     * The value for the lotmlotref field.
     *
     * @var        string
     */
    protected $lotmlotref;

    /**
     * The value for the lotmfrstactdate field.
     *
     * @var        string
     */
    protected $lotmfrstactdate;

    /**
     * The value for the lotmimagyn field.
     *
     * @var        string
     */
    protected $lotmimagyn;

    /**
     * The value for the lotmunitwght field.
     *
     * @var        string
     */
    protected $lotmunitwght;

    /**
     * The value for the lotmrevision field.
     *
     * @var        string
     */
    protected $lotmrevision;

    /**
     * The value for the lotmctry field.
     *
     * @var        string
     */
    protected $lotmctry;

    /**
     * The value for the lotmcofc field.
     *
     * @var        string
     */
    protected $lotmcofc;

    /**
     * The value for the lotmcreatedate field.
     *
     * @var        string
     */
    protected $lotmcreatedate;

    /**
     * The value for the lotmcreatetime field.
     *
     * @var        string
     */
    protected $lotmcreatetime;

    /**
     * The value for the lotmvendid field.
     *
     * @var        string
     */
    protected $lotmvendid;

    /**
     * The value for the lotmexpiredate field.
     *
     * @var        string
     */
    protected $lotmexpiredate;

    /**
     * The value for the lotmunitcost field.
     *
     * @var        string
     */
    protected $lotmunitcost;

    /**
     * The value for the lotmcntrqty field.
     *
     * @var        string
     */
    protected $lotmcntrqty;

    /**
     * The value for the lotmsrccd field.
     *
     * @var        string
     */
    protected $lotmsrccd;

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
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ObjectCollection|ChildInvWhseLot[] Collection to store aggregation of ChildInvWhseLot objects.
     */
    protected $collInvWhseLots;
    protected $collInvWhseLotsPartial;

    /**
     * @var        ObjectCollection|ChildSoAllocatedLotserial[] Collection to store aggregation of ChildSoAllocatedLotserial objects.
     */
    protected $collSoAllocatedLotserials;
    protected $collSoAllocatedLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildSoPickedLotserial[] Collection to store aggregation of ChildSoPickedLotserial objects.
     */
    protected $collSoPickedLotserials;
    protected $collSoPickedLotserialsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvWhseLot[]
     */
    protected $invWhseLotsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSoAllocatedLotserial[]
     */
    protected $soAllocatedLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSoPickedLotserial[]
     */
    protected $soPickedLotserialsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->inititemnbr = '';
        $this->lotmlotnbr = '';
    }

    /**
     * Initializes internal state of Base\InvLotMaster object.
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
     * Compares this with another <code>InvLotMaster</code> instance.  If
     * <code>obj</code> is an instance of <code>InvLotMaster</code>, delegates to
     * <code>equals(InvLotMaster)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvLotMaster The current object, for fluid interface
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
     * Get the [lotmlotnbr] column value.
     *
     * @return string
     */
    public function getLotmlotnbr()
    {
        return $this->lotmlotnbr;
    }

    /**
     * Get the [lotmlotref] column value.
     *
     * @return string
     */
    public function getLotmlotref()
    {
        return $this->lotmlotref;
    }

    /**
     * Get the [lotmfrstactdate] column value.
     *
     * @return string
     */
    public function getLotmfrstactdate()
    {
        return $this->lotmfrstactdate;
    }

    /**
     * Get the [lotmimagyn] column value.
     *
     * @return string
     */
    public function getLotmimagyn()
    {
        return $this->lotmimagyn;
    }

    /**
     * Get the [lotmunitwght] column value.
     *
     * @return string
     */
    public function getLotmunitwght()
    {
        return $this->lotmunitwght;
    }

    /**
     * Get the [lotmrevision] column value.
     *
     * @return string
     */
    public function getLotmrevision()
    {
        return $this->lotmrevision;
    }

    /**
     * Get the [lotmctry] column value.
     *
     * @return string
     */
    public function getLotmctry()
    {
        return $this->lotmctry;
    }

    /**
     * Get the [lotmcofc] column value.
     *
     * @return string
     */
    public function getLotmcofc()
    {
        return $this->lotmcofc;
    }

    /**
     * Get the [lotmcreatedate] column value.
     *
     * @return string
     */
    public function getLotmcreatedate()
    {
        return $this->lotmcreatedate;
    }

    /**
     * Get the [lotmcreatetime] column value.
     *
     * @return string
     */
    public function getLotmcreatetime()
    {
        return $this->lotmcreatetime;
    }

    /**
     * Get the [lotmvendid] column value.
     *
     * @return string
     */
    public function getLotmvendid()
    {
        return $this->lotmvendid;
    }

    /**
     * Get the [lotmexpiredate] column value.
     *
     * @return string
     */
    public function getLotmexpiredate()
    {
        return $this->lotmexpiredate;
    }

    /**
     * Get the [lotmunitcost] column value.
     *
     * @return string
     */
    public function getLotmunitcost()
    {
        return $this->lotmunitcost;
    }

    /**
     * Get the [lotmcntrqty] column value.
     *
     * @return string
     */
    public function getLotmcntrqty()
    {
        return $this->lotmcntrqty;
    }

    /**
     * Get the [lotmsrccd] column value.
     *
     * @return string
     */
    public function getLotmsrccd()
    {
        return $this->lotmsrccd;
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
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [lotmlotnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmlotnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmlotnbr !== $v) {
            $this->lotmlotnbr = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMLOTNBR] = true;
        }

        return $this;
    } // setLotmlotnbr()

    /**
     * Set the value of [lotmlotref] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmlotref !== $v) {
            $this->lotmlotref = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMLOTREF] = true;
        }

        return $this;
    } // setLotmlotref()

    /**
     * Set the value of [lotmfrstactdate] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmfrstactdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmfrstactdate !== $v) {
            $this->lotmfrstactdate = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMFRSTACTDATE] = true;
        }

        return $this;
    } // setLotmfrstactdate()

    /**
     * Set the value of [lotmimagyn] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmimagyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmimagyn !== $v) {
            $this->lotmimagyn = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMIMAGYN] = true;
        }

        return $this;
    } // setLotmimagyn()

    /**
     * Set the value of [lotmunitwght] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmunitwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmunitwght !== $v) {
            $this->lotmunitwght = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMUNITWGHT] = true;
        }

        return $this;
    } // setLotmunitwght()

    /**
     * Set the value of [lotmrevision] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmrevision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmrevision !== $v) {
            $this->lotmrevision = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMREVISION] = true;
        }

        return $this;
    } // setLotmrevision()

    /**
     * Set the value of [lotmctry] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmctry !== $v) {
            $this->lotmctry = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMCTRY] = true;
        }

        return $this;
    } // setLotmctry()

    /**
     * Set the value of [lotmcofc] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmcofc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmcofc !== $v) {
            $this->lotmcofc = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMCOFC] = true;
        }

        return $this;
    } // setLotmcofc()

    /**
     * Set the value of [lotmcreatedate] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmcreatedate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmcreatedate !== $v) {
            $this->lotmcreatedate = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMCREATEDATE] = true;
        }

        return $this;
    } // setLotmcreatedate()

    /**
     * Set the value of [lotmcreatetime] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmcreatetime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmcreatetime !== $v) {
            $this->lotmcreatetime = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMCREATETIME] = true;
        }

        return $this;
    } // setLotmcreatetime()

    /**
     * Set the value of [lotmvendid] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmvendid !== $v) {
            $this->lotmvendid = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMVENDID] = true;
        }

        return $this;
    } // setLotmvendid()

    /**
     * Set the value of [lotmexpiredate] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmexpiredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmexpiredate !== $v) {
            $this->lotmexpiredate = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMEXPIREDATE] = true;
        }

        return $this;
    } // setLotmexpiredate()

    /**
     * Set the value of [lotmunitcost] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmunitcost !== $v) {
            $this->lotmunitcost = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMUNITCOST] = true;
        }

        return $this;
    } // setLotmunitcost()

    /**
     * Set the value of [lotmcntrqty] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmcntrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmcntrqty !== $v) {
            $this->lotmcntrqty = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMCNTRQTY] = true;
        }

        return $this;
    } // setLotmcntrqty()

    /**
     * Set the value of [lotmsrccd] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setLotmsrccd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lotmsrccd !== $v) {
            $this->lotmsrccd = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_LOTMSRCCD] = true;
        }

        return $this;
    } // setLotmsrccd()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvLotMasterTableMap::COL_DUMMY] = true;
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

            if ($this->lotmlotnbr !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvLotMasterTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmlotnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmlotnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmfrstactdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmfrstactdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmimagyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmimagyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmunitwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmunitwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmrevision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmrevision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmcofc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmcofc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmcreatedate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmcreatedate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmcreatetime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmcreatetime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmexpiredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmexpiredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmcntrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvLotMasterTableMap::translateFieldName('Lotmsrccd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lotmsrccd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvLotMasterTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvLotMasterTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvLotMasterTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 19; // 19 = InvLotMasterTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvLotMaster'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(InvLotMasterTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvLotMasterQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
            $this->collInvWhseLots = null;

            $this->collSoAllocatedLotserials = null;

            $this->collSoPickedLotserials = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvLotMaster::setDeleted()
     * @see InvLotMaster::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotMasterTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvLotMasterQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotMasterTableMap::DATABASE_NAME);
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
                InvLotMasterTableMap::addInstanceToPool($this);
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

            if ($this->invWhseLotsScheduledForDeletion !== null) {
                if (!$this->invWhseLotsScheduledForDeletion->isEmpty()) {
                    \InvWhseLotQuery::create()
                        ->filterByPrimaryKeys($this->invWhseLotsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invWhseLotsScheduledForDeletion = null;
                }
            }

            if ($this->collInvWhseLots !== null) {
                foreach ($this->collInvWhseLots as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->soAllocatedLotserialsScheduledForDeletion !== null) {
                if (!$this->soAllocatedLotserialsScheduledForDeletion->isEmpty()) {
                    \SoAllocatedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->soAllocatedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->soAllocatedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collSoAllocatedLotserials !== null) {
                foreach ($this->collSoAllocatedLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->soPickedLotserialsScheduledForDeletion !== null) {
                if (!$this->soPickedLotserialsScheduledForDeletion->isEmpty()) {
                    \SoPickedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->soPickedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->soPickedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collSoPickedLotserials !== null) {
                foreach ($this->collSoPickedLotserials as $referrerFK) {
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
        if ($this->isColumnModified(InvLotMasterTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMLOTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'LotmLotNbr';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'LotmLotRef';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMFRSTACTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'LotmFrstActDate';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMIMAGYN)) {
            $modifiedColumns[':p' . $index++]  = 'LotmImagYn';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMUNITWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'LotmUnitWght';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMREVISION)) {
            $modifiedColumns[':p' . $index++]  = 'LotmRevision';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'LotmCtry';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCOFC)) {
            $modifiedColumns[':p' . $index++]  = 'LotmCOfC';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCREATEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'LotmCreateDate';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCREATETIME)) {
            $modifiedColumns[':p' . $index++]  = 'LotmCreateTime';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'LotmVendId';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMEXPIREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'LotmExpireDate';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'LotmUnitCost';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'LotmCntrQty';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMSRCCD)) {
            $modifiedColumns[':p' . $index++]  = 'LotmSrcCd';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_lot_mast (%s) VALUES (%s)',
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
                    case 'LotmLotNbr':
                        $stmt->bindValue($identifier, $this->lotmlotnbr, PDO::PARAM_STR);
                        break;
                    case 'LotmLotRef':
                        $stmt->bindValue($identifier, $this->lotmlotref, PDO::PARAM_STR);
                        break;
                    case 'LotmFrstActDate':
                        $stmt->bindValue($identifier, $this->lotmfrstactdate, PDO::PARAM_STR);
                        break;
                    case 'LotmImagYn':
                        $stmt->bindValue($identifier, $this->lotmimagyn, PDO::PARAM_STR);
                        break;
                    case 'LotmUnitWght':
                        $stmt->bindValue($identifier, $this->lotmunitwght, PDO::PARAM_STR);
                        break;
                    case 'LotmRevision':
                        $stmt->bindValue($identifier, $this->lotmrevision, PDO::PARAM_STR);
                        break;
                    case 'LotmCtry':
                        $stmt->bindValue($identifier, $this->lotmctry, PDO::PARAM_STR);
                        break;
                    case 'LotmCOfC':
                        $stmt->bindValue($identifier, $this->lotmcofc, PDO::PARAM_STR);
                        break;
                    case 'LotmCreateDate':
                        $stmt->bindValue($identifier, $this->lotmcreatedate, PDO::PARAM_STR);
                        break;
                    case 'LotmCreateTime':
                        $stmt->bindValue($identifier, $this->lotmcreatetime, PDO::PARAM_STR);
                        break;
                    case 'LotmVendId':
                        $stmt->bindValue($identifier, $this->lotmvendid, PDO::PARAM_STR);
                        break;
                    case 'LotmExpireDate':
                        $stmt->bindValue($identifier, $this->lotmexpiredate, PDO::PARAM_STR);
                        break;
                    case 'LotmUnitCost':
                        $stmt->bindValue($identifier, $this->lotmunitcost, PDO::PARAM_STR);
                        break;
                    case 'LotmCntrQty':
                        $stmt->bindValue($identifier, $this->lotmcntrqty, PDO::PARAM_STR);
                        break;
                    case 'LotmSrcCd':
                        $stmt->bindValue($identifier, $this->lotmsrccd, PDO::PARAM_STR);
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
        $pos = InvLotMasterTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getLotmlotnbr();
                break;
            case 2:
                return $this->getLotmlotref();
                break;
            case 3:
                return $this->getLotmfrstactdate();
                break;
            case 4:
                return $this->getLotmimagyn();
                break;
            case 5:
                return $this->getLotmunitwght();
                break;
            case 6:
                return $this->getLotmrevision();
                break;
            case 7:
                return $this->getLotmctry();
                break;
            case 8:
                return $this->getLotmcofc();
                break;
            case 9:
                return $this->getLotmcreatedate();
                break;
            case 10:
                return $this->getLotmcreatetime();
                break;
            case 11:
                return $this->getLotmvendid();
                break;
            case 12:
                return $this->getLotmexpiredate();
                break;
            case 13:
                return $this->getLotmunitcost();
                break;
            case 14:
                return $this->getLotmcntrqty();
                break;
            case 15:
                return $this->getLotmsrccd();
                break;
            case 16:
                return $this->getDateupdtd();
                break;
            case 17:
                return $this->getTimeupdtd();
                break;
            case 18:
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

        if (isset($alreadyDumpedObjects['InvLotMaster'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvLotMaster'][$this->hashCode()] = true;
        $keys = InvLotMasterTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getLotmlotnbr(),
            $keys[2] => $this->getLotmlotref(),
            $keys[3] => $this->getLotmfrstactdate(),
            $keys[4] => $this->getLotmimagyn(),
            $keys[5] => $this->getLotmunitwght(),
            $keys[6] => $this->getLotmrevision(),
            $keys[7] => $this->getLotmctry(),
            $keys[8] => $this->getLotmcofc(),
            $keys[9] => $this->getLotmcreatedate(),
            $keys[10] => $this->getLotmcreatetime(),
            $keys[11] => $this->getLotmvendid(),
            $keys[12] => $this->getLotmexpiredate(),
            $keys[13] => $this->getLotmunitcost(),
            $keys[14] => $this->getLotmcntrqty(),
            $keys[15] => $this->getLotmsrccd(),
            $keys[16] => $this->getDateupdtd(),
            $keys[17] => $this->getTimeupdtd(),
            $keys[18] => $this->getDummy(),
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
            if (null !== $this->collInvWhseLots) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invWhseLots';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_lots';
                        break;
                    default:
                        $key = 'InvWhseLots';
                }

                $result[$key] = $this->collInvWhseLots->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSoAllocatedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soAllocatedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_pre_allos';
                        break;
                    default:
                        $key = 'SoAllocatedLotserials';
                }

                $result[$key] = $this->collSoAllocatedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSoPickedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soPickedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_pulleds';
                        break;
                    default:
                        $key = 'SoPickedLotserials';
                }

                $result[$key] = $this->collSoPickedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\InvLotMaster
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvLotMasterTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvLotMaster
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setLotmlotnbr($value);
                break;
            case 2:
                $this->setLotmlotref($value);
                break;
            case 3:
                $this->setLotmfrstactdate($value);
                break;
            case 4:
                $this->setLotmimagyn($value);
                break;
            case 5:
                $this->setLotmunitwght($value);
                break;
            case 6:
                $this->setLotmrevision($value);
                break;
            case 7:
                $this->setLotmctry($value);
                break;
            case 8:
                $this->setLotmcofc($value);
                break;
            case 9:
                $this->setLotmcreatedate($value);
                break;
            case 10:
                $this->setLotmcreatetime($value);
                break;
            case 11:
                $this->setLotmvendid($value);
                break;
            case 12:
                $this->setLotmexpiredate($value);
                break;
            case 13:
                $this->setLotmunitcost($value);
                break;
            case 14:
                $this->setLotmcntrqty($value);
                break;
            case 15:
                $this->setLotmsrccd($value);
                break;
            case 16:
                $this->setDateupdtd($value);
                break;
            case 17:
                $this->setTimeupdtd($value);
                break;
            case 18:
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
        $keys = InvLotMasterTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setLotmlotnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setLotmlotref($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setLotmfrstactdate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLotmimagyn($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setLotmunitwght($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setLotmrevision($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setLotmctry($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setLotmcofc($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setLotmcreatedate($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setLotmcreatetime($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setLotmvendid($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setLotmexpiredate($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setLotmunitcost($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setLotmcntrqty($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setLotmsrccd($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDateupdtd($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setTimeupdtd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setDummy($arr[$keys[18]]);
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
     * @return $this|\InvLotMaster The current object, for fluid interface
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
        $criteria = new Criteria(InvLotMasterTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvLotMasterTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvLotMasterTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMLOTNBR)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMLOTNBR, $this->lotmlotnbr);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMLOTREF)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMLOTREF, $this->lotmlotref);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMFRSTACTDATE)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMFRSTACTDATE, $this->lotmfrstactdate);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMIMAGYN)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMIMAGYN, $this->lotmimagyn);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMUNITWGHT)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMUNITWGHT, $this->lotmunitwght);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMREVISION)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMREVISION, $this->lotmrevision);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCTRY)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMCTRY, $this->lotmctry);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCOFC)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMCOFC, $this->lotmcofc);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCREATEDATE)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMCREATEDATE, $this->lotmcreatedate);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCREATETIME)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMCREATETIME, $this->lotmcreatetime);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMVENDID)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMVENDID, $this->lotmvendid);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMEXPIREDATE)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMEXPIREDATE, $this->lotmexpiredate);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMUNITCOST)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMUNITCOST, $this->lotmunitcost);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMCNTRQTY)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMCNTRQTY, $this->lotmcntrqty);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_LOTMSRCCD)) {
            $criteria->add(InvLotMasterTableMap::COL_LOTMSRCCD, $this->lotmsrccd);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvLotMasterTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvLotMasterTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvLotMasterTableMap::COL_DUMMY)) {
            $criteria->add(InvLotMasterTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvLotMasterQuery::create();
        $criteria->add(InvLotMasterTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvLotMasterTableMap::COL_LOTMLOTNBR, $this->lotmlotnbr);

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
            null !== $this->getLotmlotnbr();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

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
        $pks[0] = $this->getInititemnbr();
        $pks[1] = $this->getLotmlotnbr();

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
        $this->setLotmlotnbr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInititemnbr()) && (null === $this->getLotmlotnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvLotMaster (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setLotmlotnbr($this->getLotmlotnbr());
        $copyObj->setLotmlotref($this->getLotmlotref());
        $copyObj->setLotmfrstactdate($this->getLotmfrstactdate());
        $copyObj->setLotmimagyn($this->getLotmimagyn());
        $copyObj->setLotmunitwght($this->getLotmunitwght());
        $copyObj->setLotmrevision($this->getLotmrevision());
        $copyObj->setLotmctry($this->getLotmctry());
        $copyObj->setLotmcofc($this->getLotmcofc());
        $copyObj->setLotmcreatedate($this->getLotmcreatedate());
        $copyObj->setLotmcreatetime($this->getLotmcreatetime());
        $copyObj->setLotmvendid($this->getLotmvendid());
        $copyObj->setLotmexpiredate($this->getLotmexpiredate());
        $copyObj->setLotmunitcost($this->getLotmunitcost());
        $copyObj->setLotmcntrqty($this->getLotmcntrqty());
        $copyObj->setLotmsrccd($this->getLotmsrccd());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getInvWhseLots() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvWhseLot($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSoAllocatedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSoAllocatedLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSoPickedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSoPickedLotserial($relObj->copy($deepCopy));
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
     * @return \InvLotMaster Clone of current object.
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
     * @return $this|\InvLotMaster The current object (for fluent API support)
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
            $v->addInvLotMaster($this);
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
                $this->aItemMasterItem->addInvLotMasters($this);
             */
        }

        return $this->aItemMasterItem;
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
        if ('InvWhseLot' == $relationName) {
            $this->initInvWhseLots();
            return;
        }
        if ('SoAllocatedLotserial' == $relationName) {
            $this->initSoAllocatedLotserials();
            return;
        }
        if ('SoPickedLotserial' == $relationName) {
            $this->initSoPickedLotserials();
            return;
        }
    }

    /**
     * Clears out the collInvWhseLots collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvWhseLots()
     */
    public function clearInvWhseLots()
    {
        $this->collInvWhseLots = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvWhseLots collection loaded partially.
     */
    public function resetPartialInvWhseLots($v = true)
    {
        $this->collInvWhseLotsPartial = $v;
    }

    /**
     * Initializes the collInvWhseLots collection.
     *
     * By default this just sets the collInvWhseLots collection to an empty array (like clearcollInvWhseLots());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvWhseLots($overrideExisting = true)
    {
        if (null !== $this->collInvWhseLots && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvWhseLotTableMap::getTableMap()->getCollectionClassName();

        $this->collInvWhseLots = new $collectionClassName;
        $this->collInvWhseLots->setModel('\InvWhseLot');
    }

    /**
     * Gets an array of ChildInvWhseLot objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvLotMaster is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     * @throws PropelException
     */
    public function getInvWhseLots(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseLotsPartial && !$this->isNew();
        if (null === $this->collInvWhseLots || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvWhseLots) {
                // return empty collection
                $this->initInvWhseLots();
            } else {
                $collInvWhseLots = ChildInvWhseLotQuery::create(null, $criteria)
                    ->filterByInvLotMaster($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvWhseLotsPartial && count($collInvWhseLots)) {
                        $this->initInvWhseLots(false);

                        foreach ($collInvWhseLots as $obj) {
                            if (false == $this->collInvWhseLots->contains($obj)) {
                                $this->collInvWhseLots->append($obj);
                            }
                        }

                        $this->collInvWhseLotsPartial = true;
                    }

                    return $collInvWhseLots;
                }

                if ($partial && $this->collInvWhseLots) {
                    foreach ($this->collInvWhseLots as $obj) {
                        if ($obj->isNew()) {
                            $collInvWhseLots[] = $obj;
                        }
                    }
                }

                $this->collInvWhseLots = $collInvWhseLots;
                $this->collInvWhseLotsPartial = false;
            }
        }

        return $this->collInvWhseLots;
    }

    /**
     * Sets a collection of ChildInvWhseLot objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invWhseLots A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvLotMaster The current object (for fluent API support)
     */
    public function setInvWhseLots(Collection $invWhseLots, ConnectionInterface $con = null)
    {
        /** @var ChildInvWhseLot[] $invWhseLotsToDelete */
        $invWhseLotsToDelete = $this->getInvWhseLots(new Criteria(), $con)->diff($invWhseLots);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invWhseLotsScheduledForDeletion = clone $invWhseLotsToDelete;

        foreach ($invWhseLotsToDelete as $invWhseLotRemoved) {
            $invWhseLotRemoved->setInvLotMaster(null);
        }

        $this->collInvWhseLots = null;
        foreach ($invWhseLots as $invWhseLot) {
            $this->addInvWhseLot($invWhseLot);
        }

        $this->collInvWhseLots = $invWhseLots;
        $this->collInvWhseLotsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvWhseLot objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvWhseLot objects.
     * @throws PropelException
     */
    public function countInvWhseLots(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseLotsPartial && !$this->isNew();
        if (null === $this->collInvWhseLots || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvWhseLots) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvWhseLots());
            }

            $query = ChildInvWhseLotQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvLotMaster($this)
                ->count($con);
        }

        return count($this->collInvWhseLots);
    }

    /**
     * Method called to associate a ChildInvWhseLot object to this object
     * through the ChildInvWhseLot foreign key attribute.
     *
     * @param  ChildInvWhseLot $l ChildInvWhseLot
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function addInvWhseLot(ChildInvWhseLot $l)
    {
        if ($this->collInvWhseLots === null) {
            $this->initInvWhseLots();
            $this->collInvWhseLotsPartial = true;
        }

        if (!$this->collInvWhseLots->contains($l)) {
            $this->doAddInvWhseLot($l);

            if ($this->invWhseLotsScheduledForDeletion and $this->invWhseLotsScheduledForDeletion->contains($l)) {
                $this->invWhseLotsScheduledForDeletion->remove($this->invWhseLotsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvWhseLot $invWhseLot The ChildInvWhseLot object to add.
     */
    protected function doAddInvWhseLot(ChildInvWhseLot $invWhseLot)
    {
        $this->collInvWhseLots[]= $invWhseLot;
        $invWhseLot->setInvLotMaster($this);
    }

    /**
     * @param  ChildInvWhseLot $invWhseLot The ChildInvWhseLot object to remove.
     * @return $this|ChildInvLotMaster The current object (for fluent API support)
     */
    public function removeInvWhseLot(ChildInvWhseLot $invWhseLot)
    {
        if ($this->getInvWhseLots()->contains($invWhseLot)) {
            $pos = $this->collInvWhseLots->search($invWhseLot);
            $this->collInvWhseLots->remove($pos);
            if (null === $this->invWhseLotsScheduledForDeletion) {
                $this->invWhseLotsScheduledForDeletion = clone $this->collInvWhseLots;
                $this->invWhseLotsScheduledForDeletion->clear();
            }
            $this->invWhseLotsScheduledForDeletion[]= clone $invWhseLot;
            $invWhseLot->setInvLotMaster(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvLotMaster is new, it will return
     * an empty collection; or if this InvLotMaster has previously
     * been saved, it will retrieve related InvWhseLots from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvLotMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     */
    public function getInvWhseLotsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseLotQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvWhseLots($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvLotMaster is new, it will return
     * an empty collection; or if this InvLotMaster has previously
     * been saved, it will retrieve related InvWhseLots from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvLotMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     */
    public function getInvWhseLotsJoinWarehouse(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseLotQuery::create(null, $criteria);
        $query->joinWith('Warehouse', $joinBehavior);

        return $this->getInvWhseLots($query, $con);
    }

    /**
     * Clears out the collSoAllocatedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSoAllocatedLotserials()
     */
    public function clearSoAllocatedLotserials()
    {
        $this->collSoAllocatedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSoAllocatedLotserials collection loaded partially.
     */
    public function resetPartialSoAllocatedLotserials($v = true)
    {
        $this->collSoAllocatedLotserialsPartial = $v;
    }

    /**
     * Initializes the collSoAllocatedLotserials collection.
     *
     * By default this just sets the collSoAllocatedLotserials collection to an empty array (like clearcollSoAllocatedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSoAllocatedLotserials($overrideExisting = true)
    {
        if (null !== $this->collSoAllocatedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = SoAllocatedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collSoAllocatedLotserials = new $collectionClassName;
        $this->collSoAllocatedLotserials->setModel('\SoAllocatedLotserial');
    }

    /**
     * Gets an array of ChildSoAllocatedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvLotMaster is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     * @throws PropelException
     */
    public function getSoAllocatedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSoAllocatedLotserialsPartial && !$this->isNew();
        if (null === $this->collSoAllocatedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSoAllocatedLotserials) {
                // return empty collection
                $this->initSoAllocatedLotserials();
            } else {
                $collSoAllocatedLotserials = ChildSoAllocatedLotserialQuery::create(null, $criteria)
                    ->filterByInvLotMaster($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSoAllocatedLotserialsPartial && count($collSoAllocatedLotserials)) {
                        $this->initSoAllocatedLotserials(false);

                        foreach ($collSoAllocatedLotserials as $obj) {
                            if (false == $this->collSoAllocatedLotserials->contains($obj)) {
                                $this->collSoAllocatedLotserials->append($obj);
                            }
                        }

                        $this->collSoAllocatedLotserialsPartial = true;
                    }

                    return $collSoAllocatedLotserials;
                }

                if ($partial && $this->collSoAllocatedLotserials) {
                    foreach ($this->collSoAllocatedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collSoAllocatedLotserials[] = $obj;
                        }
                    }
                }

                $this->collSoAllocatedLotserials = $collSoAllocatedLotserials;
                $this->collSoAllocatedLotserialsPartial = false;
            }
        }

        return $this->collSoAllocatedLotserials;
    }

    /**
     * Sets a collection of ChildSoAllocatedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $soAllocatedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvLotMaster The current object (for fluent API support)
     */
    public function setSoAllocatedLotserials(Collection $soAllocatedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildSoAllocatedLotserial[] $soAllocatedLotserialsToDelete */
        $soAllocatedLotserialsToDelete = $this->getSoAllocatedLotserials(new Criteria(), $con)->diff($soAllocatedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->soAllocatedLotserialsScheduledForDeletion = clone $soAllocatedLotserialsToDelete;

        foreach ($soAllocatedLotserialsToDelete as $soAllocatedLotserialRemoved) {
            $soAllocatedLotserialRemoved->setInvLotMaster(null);
        }

        $this->collSoAllocatedLotserials = null;
        foreach ($soAllocatedLotserials as $soAllocatedLotserial) {
            $this->addSoAllocatedLotserial($soAllocatedLotserial);
        }

        $this->collSoAllocatedLotserials = $soAllocatedLotserials;
        $this->collSoAllocatedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SoAllocatedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SoAllocatedLotserial objects.
     * @throws PropelException
     */
    public function countSoAllocatedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSoAllocatedLotserialsPartial && !$this->isNew();
        if (null === $this->collSoAllocatedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSoAllocatedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSoAllocatedLotserials());
            }

            $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvLotMaster($this)
                ->count($con);
        }

        return count($this->collSoAllocatedLotserials);
    }

    /**
     * Method called to associate a ChildSoAllocatedLotserial object to this object
     * through the ChildSoAllocatedLotserial foreign key attribute.
     *
     * @param  ChildSoAllocatedLotserial $l ChildSoAllocatedLotserial
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function addSoAllocatedLotserial(ChildSoAllocatedLotserial $l)
    {
        if ($this->collSoAllocatedLotserials === null) {
            $this->initSoAllocatedLotserials();
            $this->collSoAllocatedLotserialsPartial = true;
        }

        if (!$this->collSoAllocatedLotserials->contains($l)) {
            $this->doAddSoAllocatedLotserial($l);

            if ($this->soAllocatedLotserialsScheduledForDeletion and $this->soAllocatedLotserialsScheduledForDeletion->contains($l)) {
                $this->soAllocatedLotserialsScheduledForDeletion->remove($this->soAllocatedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSoAllocatedLotserial $soAllocatedLotserial The ChildSoAllocatedLotserial object to add.
     */
    protected function doAddSoAllocatedLotserial(ChildSoAllocatedLotserial $soAllocatedLotserial)
    {
        $this->collSoAllocatedLotserials[]= $soAllocatedLotserial;
        $soAllocatedLotserial->setInvLotMaster($this);
    }

    /**
     * @param  ChildSoAllocatedLotserial $soAllocatedLotserial The ChildSoAllocatedLotserial object to remove.
     * @return $this|ChildInvLotMaster The current object (for fluent API support)
     */
    public function removeSoAllocatedLotserial(ChildSoAllocatedLotserial $soAllocatedLotserial)
    {
        if ($this->getSoAllocatedLotserials()->contains($soAllocatedLotserial)) {
            $pos = $this->collSoAllocatedLotserials->search($soAllocatedLotserial);
            $this->collSoAllocatedLotserials->remove($pos);
            if (null === $this->soAllocatedLotserialsScheduledForDeletion) {
                $this->soAllocatedLotserialsScheduledForDeletion = clone $this->collSoAllocatedLotserials;
                $this->soAllocatedLotserialsScheduledForDeletion->clear();
            }
            $this->soAllocatedLotserialsScheduledForDeletion[]= clone $soAllocatedLotserial;
            $soAllocatedLotserial->setInvLotMaster(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvLotMaster is new, it will return
     * an empty collection; or if this InvLotMaster has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvLotMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     */
    public function getSoAllocatedLotserialsJoinSalesOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrder', $joinBehavior);

        return $this->getSoAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvLotMaster is new, it will return
     * an empty collection; or if this InvLotMaster has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvLotMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     */
    public function getSoAllocatedLotserialsJoinSalesOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrderDetail', $joinBehavior);

        return $this->getSoAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvLotMaster is new, it will return
     * an empty collection; or if this InvLotMaster has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvLotMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     */
    public function getSoAllocatedLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getSoAllocatedLotserials($query, $con);
    }

    /**
     * Clears out the collSoPickedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSoPickedLotserials()
     */
    public function clearSoPickedLotserials()
    {
        $this->collSoPickedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSoPickedLotserials collection loaded partially.
     */
    public function resetPartialSoPickedLotserials($v = true)
    {
        $this->collSoPickedLotserialsPartial = $v;
    }

    /**
     * Initializes the collSoPickedLotserials collection.
     *
     * By default this just sets the collSoPickedLotserials collection to an empty array (like clearcollSoPickedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSoPickedLotserials($overrideExisting = true)
    {
        if (null !== $this->collSoPickedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = SoPickedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collSoPickedLotserials = new $collectionClassName;
        $this->collSoPickedLotserials->setModel('\SoPickedLotserial');
    }

    /**
     * Gets an array of ChildSoPickedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvLotMaster is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSoPickedLotserial[] List of ChildSoPickedLotserial objects
     * @throws PropelException
     */
    public function getSoPickedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSoPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collSoPickedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSoPickedLotserials) {
                // return empty collection
                $this->initSoPickedLotserials();
            } else {
                $collSoPickedLotserials = ChildSoPickedLotserialQuery::create(null, $criteria)
                    ->filterByInvLotMaster($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSoPickedLotserialsPartial && count($collSoPickedLotserials)) {
                        $this->initSoPickedLotserials(false);

                        foreach ($collSoPickedLotserials as $obj) {
                            if (false == $this->collSoPickedLotserials->contains($obj)) {
                                $this->collSoPickedLotserials->append($obj);
                            }
                        }

                        $this->collSoPickedLotserialsPartial = true;
                    }

                    return $collSoPickedLotserials;
                }

                if ($partial && $this->collSoPickedLotserials) {
                    foreach ($this->collSoPickedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collSoPickedLotserials[] = $obj;
                        }
                    }
                }

                $this->collSoPickedLotserials = $collSoPickedLotserials;
                $this->collSoPickedLotserialsPartial = false;
            }
        }

        return $this->collSoPickedLotserials;
    }

    /**
     * Sets a collection of ChildSoPickedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $soPickedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvLotMaster The current object (for fluent API support)
     */
    public function setSoPickedLotserials(Collection $soPickedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildSoPickedLotserial[] $soPickedLotserialsToDelete */
        $soPickedLotserialsToDelete = $this->getSoPickedLotserials(new Criteria(), $con)->diff($soPickedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->soPickedLotserialsScheduledForDeletion = clone $soPickedLotserialsToDelete;

        foreach ($soPickedLotserialsToDelete as $soPickedLotserialRemoved) {
            $soPickedLotserialRemoved->setInvLotMaster(null);
        }

        $this->collSoPickedLotserials = null;
        foreach ($soPickedLotserials as $soPickedLotserial) {
            $this->addSoPickedLotserial($soPickedLotserial);
        }

        $this->collSoPickedLotserials = $soPickedLotserials;
        $this->collSoPickedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SoPickedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SoPickedLotserial objects.
     * @throws PropelException
     */
    public function countSoPickedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSoPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collSoPickedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSoPickedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSoPickedLotserials());
            }

            $query = ChildSoPickedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvLotMaster($this)
                ->count($con);
        }

        return count($this->collSoPickedLotserials);
    }

    /**
     * Method called to associate a ChildSoPickedLotserial object to this object
     * through the ChildSoPickedLotserial foreign key attribute.
     *
     * @param  ChildSoPickedLotserial $l ChildSoPickedLotserial
     * @return $this|\InvLotMaster The current object (for fluent API support)
     */
    public function addSoPickedLotserial(ChildSoPickedLotserial $l)
    {
        if ($this->collSoPickedLotserials === null) {
            $this->initSoPickedLotserials();
            $this->collSoPickedLotserialsPartial = true;
        }

        if (!$this->collSoPickedLotserials->contains($l)) {
            $this->doAddSoPickedLotserial($l);

            if ($this->soPickedLotserialsScheduledForDeletion and $this->soPickedLotserialsScheduledForDeletion->contains($l)) {
                $this->soPickedLotserialsScheduledForDeletion->remove($this->soPickedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSoPickedLotserial $soPickedLotserial The ChildSoPickedLotserial object to add.
     */
    protected function doAddSoPickedLotserial(ChildSoPickedLotserial $soPickedLotserial)
    {
        $this->collSoPickedLotserials[]= $soPickedLotserial;
        $soPickedLotserial->setInvLotMaster($this);
    }

    /**
     * @param  ChildSoPickedLotserial $soPickedLotserial The ChildSoPickedLotserial object to remove.
     * @return $this|ChildInvLotMaster The current object (for fluent API support)
     */
    public function removeSoPickedLotserial(ChildSoPickedLotserial $soPickedLotserial)
    {
        if ($this->getSoPickedLotserials()->contains($soPickedLotserial)) {
            $pos = $this->collSoPickedLotserials->search($soPickedLotserial);
            $this->collSoPickedLotserials->remove($pos);
            if (null === $this->soPickedLotserialsScheduledForDeletion) {
                $this->soPickedLotserialsScheduledForDeletion = clone $this->collSoPickedLotserials;
                $this->soPickedLotserialsScheduledForDeletion->clear();
            }
            $this->soPickedLotserialsScheduledForDeletion[]= clone $soPickedLotserial;
            $soPickedLotserial->setInvLotMaster(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvLotMaster is new, it will return
     * an empty collection; or if this InvLotMaster has previously
     * been saved, it will retrieve related SoPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvLotMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoPickedLotserial[] List of ChildSoPickedLotserial objects
     */
    public function getSoPickedLotserialsJoinSalesOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrder', $joinBehavior);

        return $this->getSoPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvLotMaster is new, it will return
     * an empty collection; or if this InvLotMaster has previously
     * been saved, it will retrieve related SoPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvLotMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoPickedLotserial[] List of ChildSoPickedLotserial objects
     */
    public function getSoPickedLotserialsJoinSalesOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrderDetail', $joinBehavior);

        return $this->getSoPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvLotMaster is new, it will return
     * an empty collection; or if this InvLotMaster has previously
     * been saved, it will retrieve related SoPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvLotMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoPickedLotserial[] List of ChildSoPickedLotserial objects
     */
    public function getSoPickedLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getSoPickedLotserials($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeInvLotMaster($this);
        }
        $this->inititemnbr = null;
        $this->lotmlotnbr = null;
        $this->lotmlotref = null;
        $this->lotmfrstactdate = null;
        $this->lotmimagyn = null;
        $this->lotmunitwght = null;
        $this->lotmrevision = null;
        $this->lotmctry = null;
        $this->lotmcofc = null;
        $this->lotmcreatedate = null;
        $this->lotmcreatetime = null;
        $this->lotmvendid = null;
        $this->lotmexpiredate = null;
        $this->lotmunitcost = null;
        $this->lotmcntrqty = null;
        $this->lotmsrccd = null;
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
            if ($this->collInvWhseLots) {
                foreach ($this->collInvWhseLots as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSoAllocatedLotserials) {
                foreach ($this->collSoAllocatedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSoPickedLotserials) {
                foreach ($this->collSoPickedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collInvWhseLots = null;
        $this->collSoAllocatedLotserials = null;
        $this->collSoPickedLotserials = null;
        $this->aItemMasterItem = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvLotMasterTableMap::DEFAULT_STRING_FORMAT);
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
