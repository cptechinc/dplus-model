<?php

namespace Base;

use \InvLotTag as ChildInvLotTag;
use \InvLotTagQuery as ChildInvLotTagQuery;
use \InvSerialMaster as ChildInvSerialMaster;
use \InvSerialMasterQuery as ChildInvSerialMasterQuery;
use \InvSerialWarranty as ChildInvSerialWarranty;
use \InvSerialWarrantyQuery as ChildInvSerialWarrantyQuery;
use \InvTransferLotserial as ChildInvTransferLotserial;
use \InvTransferLotserialQuery as ChildInvTransferLotserialQuery;
use \InvTransferPickedLotserial as ChildInvTransferPickedLotserial;
use \InvTransferPickedLotserialQuery as ChildInvTransferPickedLotserialQuery;
use \InvTransferPreAllocatedLotserial as ChildInvTransferPreAllocatedLotserial;
use \InvTransferPreAllocatedLotserialQuery as ChildInvTransferPreAllocatedLotserialQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\InvLotTagTableMap;
use Map\InvSerialMasterTableMap;
use Map\InvTransferLotserialTableMap;
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
 * Base class that represents a row from the 'inv_ser_mast' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvSerialMaster implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvSerialMasterTableMap';


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
     * The value for the sermsernbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sermsernbr;

    /**
     * The value for the sermproddate field.
     *
     * @var        string
     */
    protected $sermproddate;

    /**
     * The value for the sermprntcnt field.
     *
     * @var        int
     */
    protected $sermprntcnt;

    /**
     * The value for the sermsordnbr field.
     *
     * @var        string
     */
    protected $sermsordnbr;

    /**
     * The value for the serminvcdate field.
     *
     * @var        string
     */
    protected $serminvcdate;

    /**
     * The value for the sermrevision field.
     *
     * @var        string
     */
    protected $sermrevision;

    /**
     * The value for the sermctry field.
     *
     * @var        string
     */
    protected $sermctry;

    /**
     * The value for the sermacallocordr field.
     *
     * @var        string
     */
    protected $sermacallocordr;

    /**
     * The value for the sermrefsernbr field.
     *
     * @var        string
     */
    protected $sermrefsernbr;

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
     * @var        ObjectCollection|ChildInvLotTag[] Collection to store aggregation of ChildInvLotTag objects.
     */
    protected $collInvLotTags;
    protected $collInvLotTagsPartial;

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
     * @var        ChildInvSerialWarranty one-to-one related ChildInvSerialWarranty object
     */
    protected $singleInvSerialWarranty;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvLotTag[]
     */
    protected $invLotTagsScheduledForDeletion = null;

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
        $this->inititemnbr = '';
        $this->sermsernbr = '';
    }

    /**
     * Initializes internal state of Base\InvSerialMaster object.
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
     * Compares this with another <code>InvSerialMaster</code> instance.  If
     * <code>obj</code> is an instance of <code>InvSerialMaster</code>, delegates to
     * <code>equals(InvSerialMaster)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvSerialMaster The current object, for fluid interface
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
     * Get the [sermsernbr] column value.
     *
     * @return string
     */
    public function getSermsernbr()
    {
        return $this->sermsernbr;
    }

    /**
     * Get the [sermproddate] column value.
     *
     * @return string
     */
    public function getSermproddate()
    {
        return $this->sermproddate;
    }

    /**
     * Get the [sermprntcnt] column value.
     *
     * @return int
     */
    public function getSermprntcnt()
    {
        return $this->sermprntcnt;
    }

    /**
     * Get the [sermsordnbr] column value.
     *
     * @return string
     */
    public function getSermsordnbr()
    {
        return $this->sermsordnbr;
    }

    /**
     * Get the [serminvcdate] column value.
     *
     * @return string
     */
    public function getSerminvcdate()
    {
        return $this->serminvcdate;
    }

    /**
     * Get the [sermrevision] column value.
     *
     * @return string
     */
    public function getSermrevision()
    {
        return $this->sermrevision;
    }

    /**
     * Get the [sermctry] column value.
     *
     * @return string
     */
    public function getSermctry()
    {
        return $this->sermctry;
    }

    /**
     * Get the [sermacallocordr] column value.
     *
     * @return string
     */
    public function getSermacallocordr()
    {
        return $this->sermacallocordr;
    }

    /**
     * Get the [sermrefsernbr] column value.
     *
     * @return string
     */
    public function getSermrefsernbr()
    {
        return $this->sermrefsernbr;
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
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [sermsernbr] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSermsernbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermsernbr !== $v) {
            $this->sermsernbr = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMSERNBR] = true;
        }

        return $this;
    } // setSermsernbr()

    /**
     * Set the value of [sermproddate] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSermproddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermproddate !== $v) {
            $this->sermproddate = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMPRODDATE] = true;
        }

        return $this;
    } // setSermproddate()

    /**
     * Set the value of [sermprntcnt] column.
     *
     * @param int $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSermprntcnt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->sermprntcnt !== $v) {
            $this->sermprntcnt = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMPRNTCNT] = true;
        }

        return $this;
    } // setSermprntcnt()

    /**
     * Set the value of [sermsordnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSermsordnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermsordnbr !== $v) {
            $this->sermsordnbr = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMSORDNBR] = true;
        }

        return $this;
    } // setSermsordnbr()

    /**
     * Set the value of [serminvcdate] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSerminvcdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->serminvcdate !== $v) {
            $this->serminvcdate = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMINVCDATE] = true;
        }

        return $this;
    } // setSerminvcdate()

    /**
     * Set the value of [sermrevision] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSermrevision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermrevision !== $v) {
            $this->sermrevision = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMREVISION] = true;
        }

        return $this;
    } // setSermrevision()

    /**
     * Set the value of [sermctry] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSermctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermctry !== $v) {
            $this->sermctry = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMCTRY] = true;
        }

        return $this;
    } // setSermctry()

    /**
     * Set the value of [sermacallocordr] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSermacallocordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermacallocordr !== $v) {
            $this->sermacallocordr = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMACALLOCORDR] = true;
        }

        return $this;
    } // setSermacallocordr()

    /**
     * Set the value of [sermrefsernbr] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setSermrefsernbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermrefsernbr !== $v) {
            $this->sermrefsernbr = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_SERMREFSERNBR] = true;
        }

        return $this;
    } // setSermrefsernbr()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvSerialMasterTableMap::COL_DUMMY] = true;
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

            if ($this->sermsernbr !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvSerialMasterTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvSerialMasterTableMap::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermsernbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvSerialMasterTableMap::translateFieldName('Sermproddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermproddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvSerialMasterTableMap::translateFieldName('Sermprntcnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermprntcnt = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvSerialMasterTableMap::translateFieldName('Sermsordnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermsordnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvSerialMasterTableMap::translateFieldName('Serminvcdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->serminvcdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvSerialMasterTableMap::translateFieldName('Sermrevision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermrevision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvSerialMasterTableMap::translateFieldName('Sermctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvSerialMasterTableMap::translateFieldName('Sermacallocordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermacallocordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvSerialMasterTableMap::translateFieldName('Sermrefsernbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermrefsernbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvSerialMasterTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvSerialMasterTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvSerialMasterTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 13; // 13 = InvSerialMasterTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvSerialMaster'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvSerialMasterQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
            $this->collInvLotTags = null;

            $this->collInvTransferLotserials = null;

            $this->collInvTransferPreAllocatedLotserials = null;

            $this->collInvTransferPickedLotserials = null;

            $this->singleInvSerialWarranty = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvSerialMaster::setDeleted()
     * @see InvSerialMaster::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvSerialMasterQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialMasterTableMap::DATABASE_NAME);
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
                InvSerialMasterTableMap::addInstanceToPool($this);
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

            if ($this->invLotTagsScheduledForDeletion !== null) {
                if (!$this->invLotTagsScheduledForDeletion->isEmpty()) {
                    \InvLotTagQuery::create()
                        ->filterByPrimaryKeys($this->invLotTagsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invLotTagsScheduledForDeletion = null;
                }
            }

            if ($this->collInvLotTags !== null) {
                foreach ($this->collInvLotTags as $referrerFK) {
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

            if ($this->singleInvSerialWarranty !== null) {
                if (!$this->singleInvSerialWarranty->isDeleted() && ($this->singleInvSerialWarranty->isNew() || $this->singleInvSerialWarranty->isModified())) {
                    $affectedRows += $this->singleInvSerialWarranty->save($con);
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
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMSERNBR)) {
            $modifiedColumns[':p' . $index++]  = 'SermSerNbr';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMPRODDATE)) {
            $modifiedColumns[':p' . $index++]  = 'SermProdDate';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMPRNTCNT)) {
            $modifiedColumns[':p' . $index++]  = 'SermPrntCnt';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMSORDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'SermSordNbr';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMINVCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'SermInvcDate';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMREVISION)) {
            $modifiedColumns[':p' . $index++]  = 'SermRevision';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'SermCtry';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMACALLOCORDR)) {
            $modifiedColumns[':p' . $index++]  = 'SermAcAllocOrdr';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMREFSERNBR)) {
            $modifiedColumns[':p' . $index++]  = 'SermRefSerNbr';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_ser_mast (%s) VALUES (%s)',
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
                    case 'SermSerNbr':
                        $stmt->bindValue($identifier, $this->sermsernbr, PDO::PARAM_STR);
                        break;
                    case 'SermProdDate':
                        $stmt->bindValue($identifier, $this->sermproddate, PDO::PARAM_STR);
                        break;
                    case 'SermPrntCnt':
                        $stmt->bindValue($identifier, $this->sermprntcnt, PDO::PARAM_INT);
                        break;
                    case 'SermSordNbr':
                        $stmt->bindValue($identifier, $this->sermsordnbr, PDO::PARAM_STR);
                        break;
                    case 'SermInvcDate':
                        $stmt->bindValue($identifier, $this->serminvcdate, PDO::PARAM_STR);
                        break;
                    case 'SermRevision':
                        $stmt->bindValue($identifier, $this->sermrevision, PDO::PARAM_STR);
                        break;
                    case 'SermCtry':
                        $stmt->bindValue($identifier, $this->sermctry, PDO::PARAM_STR);
                        break;
                    case 'SermAcAllocOrdr':
                        $stmt->bindValue($identifier, $this->sermacallocordr, PDO::PARAM_STR);
                        break;
                    case 'SermRefSerNbr':
                        $stmt->bindValue($identifier, $this->sermrefsernbr, PDO::PARAM_STR);
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
        $pos = InvSerialMasterTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getSermsernbr();
                break;
            case 2:
                return $this->getSermproddate();
                break;
            case 3:
                return $this->getSermprntcnt();
                break;
            case 4:
                return $this->getSermsordnbr();
                break;
            case 5:
                return $this->getSerminvcdate();
                break;
            case 6:
                return $this->getSermrevision();
                break;
            case 7:
                return $this->getSermctry();
                break;
            case 8:
                return $this->getSermacallocordr();
                break;
            case 9:
                return $this->getSermrefsernbr();
                break;
            case 10:
                return $this->getDateupdtd();
                break;
            case 11:
                return $this->getTimeupdtd();
                break;
            case 12:
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

        if (isset($alreadyDumpedObjects['InvSerialMaster'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvSerialMaster'][$this->hashCode()] = true;
        $keys = InvSerialMasterTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getSermsernbr(),
            $keys[2] => $this->getSermproddate(),
            $keys[3] => $this->getSermprntcnt(),
            $keys[4] => $this->getSermsordnbr(),
            $keys[5] => $this->getSerminvcdate(),
            $keys[6] => $this->getSermrevision(),
            $keys[7] => $this->getSermctry(),
            $keys[8] => $this->getSermacallocordr(),
            $keys[9] => $this->getSermrefsernbr(),
            $keys[10] => $this->getDateupdtd(),
            $keys[11] => $this->getTimeupdtd(),
            $keys[12] => $this->getDummy(),
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
            if (null !== $this->collInvLotTags) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invLotTags';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_tags';
                        break;
                    default:
                        $key = 'InvLotTags';
                }

                $result[$key] = $this->collInvLotTags->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
            if (null !== $this->singleInvSerialWarranty) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invSerialWarranty';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_war_mast';
                        break;
                    default:
                        $key = 'InvSerialWarranty';
                }

                $result[$key] = $this->singleInvSerialWarranty->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
     * @return $this|\InvSerialMaster
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvSerialMasterTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvSerialMaster
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setSermsernbr($value);
                break;
            case 2:
                $this->setSermproddate($value);
                break;
            case 3:
                $this->setSermprntcnt($value);
                break;
            case 4:
                $this->setSermsordnbr($value);
                break;
            case 5:
                $this->setSerminvcdate($value);
                break;
            case 6:
                $this->setSermrevision($value);
                break;
            case 7:
                $this->setSermctry($value);
                break;
            case 8:
                $this->setSermacallocordr($value);
                break;
            case 9:
                $this->setSermrefsernbr($value);
                break;
            case 10:
                $this->setDateupdtd($value);
                break;
            case 11:
                $this->setTimeupdtd($value);
                break;
            case 12:
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
        $keys = InvSerialMasterTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setSermsernbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setSermproddate($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setSermprntcnt($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setSermsordnbr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setSerminvcdate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setSermrevision($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setSermctry($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setSermacallocordr($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setSermrefsernbr($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setDateupdtd($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setTimeupdtd($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDummy($arr[$keys[12]]);
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
     * @return $this|\InvSerialMaster The current object, for fluid interface
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
        $criteria = new Criteria(InvSerialMasterTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvSerialMasterTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvSerialMasterTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMSERNBR)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMSERNBR, $this->sermsernbr);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMPRODDATE)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMPRODDATE, $this->sermproddate);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMPRNTCNT)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMPRNTCNT, $this->sermprntcnt);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMSORDNBR)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMSORDNBR, $this->sermsordnbr);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMINVCDATE)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMINVCDATE, $this->serminvcdate);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMREVISION)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMREVISION, $this->sermrevision);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMCTRY)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMCTRY, $this->sermctry);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMACALLOCORDR)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMACALLOCORDR, $this->sermacallocordr);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_SERMREFSERNBR)) {
            $criteria->add(InvSerialMasterTableMap::COL_SERMREFSERNBR, $this->sermrefsernbr);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvSerialMasterTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvSerialMasterTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvSerialMasterTableMap::COL_DUMMY)) {
            $criteria->add(InvSerialMasterTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvSerialMasterQuery::create();
        $criteria->add(InvSerialMasterTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvSerialMasterTableMap::COL_SERMSERNBR, $this->sermsernbr);

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
            null !== $this->getSermsernbr();

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
        $pks[1] = $this->getSermsernbr();

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
        $this->setSermsernbr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInititemnbr()) && (null === $this->getSermsernbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvSerialMaster (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setSermsernbr($this->getSermsernbr());
        $copyObj->setSermproddate($this->getSermproddate());
        $copyObj->setSermprntcnt($this->getSermprntcnt());
        $copyObj->setSermsordnbr($this->getSermsordnbr());
        $copyObj->setSerminvcdate($this->getSerminvcdate());
        $copyObj->setSermrevision($this->getSermrevision());
        $copyObj->setSermctry($this->getSermctry());
        $copyObj->setSermacallocordr($this->getSermacallocordr());
        $copyObj->setSermrefsernbr($this->getSermrefsernbr());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getInvLotTags() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvLotTag($relObj->copy($deepCopy));
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

            $relObj = $this->getInvSerialWarranty();
            if ($relObj) {
                $copyObj->setInvSerialWarranty($relObj->copy($deepCopy));
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
     * @return \InvSerialMaster Clone of current object.
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
     * @return $this|\InvSerialMaster The current object (for fluent API support)
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
            $v->addInvSerialMaster($this);
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
                $this->aItemMasterItem->addInvSerialMasters($this);
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
        if ('InvLotTag' == $relationName) {
            $this->initInvLotTags();
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
     * Clears out the collInvLotTags collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvLotTags()
     */
    public function clearInvLotTags()
    {
        $this->collInvLotTags = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvLotTags collection loaded partially.
     */
    public function resetPartialInvLotTags($v = true)
    {
        $this->collInvLotTagsPartial = $v;
    }

    /**
     * Initializes the collInvLotTags collection.
     *
     * By default this just sets the collInvLotTags collection to an empty array (like clearcollInvLotTags());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvLotTags($overrideExisting = true)
    {
        if (null !== $this->collInvLotTags && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvLotTagTableMap::getTableMap()->getCollectionClassName();

        $this->collInvLotTags = new $collectionClassName;
        $this->collInvLotTags->setModel('\InvLotTag');
    }

    /**
     * Gets an array of ChildInvLotTag objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvSerialMaster is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     * @throws PropelException
     */
    public function getInvLotTags(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvLotTagsPartial && !$this->isNew();
        if (null === $this->collInvLotTags || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvLotTags) {
                // return empty collection
                $this->initInvLotTags();
            } else {
                $collInvLotTags = ChildInvLotTagQuery::create(null, $criteria)
                    ->filterByInvSerialMaster($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvLotTagsPartial && count($collInvLotTags)) {
                        $this->initInvLotTags(false);

                        foreach ($collInvLotTags as $obj) {
                            if (false == $this->collInvLotTags->contains($obj)) {
                                $this->collInvLotTags->append($obj);
                            }
                        }

                        $this->collInvLotTagsPartial = true;
                    }

                    return $collInvLotTags;
                }

                if ($partial && $this->collInvLotTags) {
                    foreach ($this->collInvLotTags as $obj) {
                        if ($obj->isNew()) {
                            $collInvLotTags[] = $obj;
                        }
                    }
                }

                $this->collInvLotTags = $collInvLotTags;
                $this->collInvLotTagsPartial = false;
            }
        }

        return $this->collInvLotTags;
    }

    /**
     * Sets a collection of ChildInvLotTag objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invLotTags A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvSerialMaster The current object (for fluent API support)
     */
    public function setInvLotTags(Collection $invLotTags, ConnectionInterface $con = null)
    {
        /** @var ChildInvLotTag[] $invLotTagsToDelete */
        $invLotTagsToDelete = $this->getInvLotTags(new Criteria(), $con)->diff($invLotTags);


        $this->invLotTagsScheduledForDeletion = $invLotTagsToDelete;

        foreach ($invLotTagsToDelete as $invLotTagRemoved) {
            $invLotTagRemoved->setInvSerialMaster(null);
        }

        $this->collInvLotTags = null;
        foreach ($invLotTags as $invLotTag) {
            $this->addInvLotTag($invLotTag);
        }

        $this->collInvLotTags = $invLotTags;
        $this->collInvLotTagsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvLotTag objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvLotTag objects.
     * @throws PropelException
     */
    public function countInvLotTags(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvLotTagsPartial && !$this->isNew();
        if (null === $this->collInvLotTags || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvLotTags) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvLotTags());
            }

            $query = ChildInvLotTagQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvSerialMaster($this)
                ->count($con);
        }

        return count($this->collInvLotTags);
    }

    /**
     * Method called to associate a ChildInvLotTag object to this object
     * through the ChildInvLotTag foreign key attribute.
     *
     * @param  ChildInvLotTag $l ChildInvLotTag
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     */
    public function addInvLotTag(ChildInvLotTag $l)
    {
        if ($this->collInvLotTags === null) {
            $this->initInvLotTags();
            $this->collInvLotTagsPartial = true;
        }

        if (!$this->collInvLotTags->contains($l)) {
            $this->doAddInvLotTag($l);

            if ($this->invLotTagsScheduledForDeletion and $this->invLotTagsScheduledForDeletion->contains($l)) {
                $this->invLotTagsScheduledForDeletion->remove($this->invLotTagsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvLotTag $invLotTag The ChildInvLotTag object to add.
     */
    protected function doAddInvLotTag(ChildInvLotTag $invLotTag)
    {
        $this->collInvLotTags[]= $invLotTag;
        $invLotTag->setInvSerialMaster($this);
    }

    /**
     * @param  ChildInvLotTag $invLotTag The ChildInvLotTag object to remove.
     * @return $this|ChildInvSerialMaster The current object (for fluent API support)
     */
    public function removeInvLotTag(ChildInvLotTag $invLotTag)
    {
        if ($this->getInvLotTags()->contains($invLotTag)) {
            $pos = $this->collInvLotTags->search($invLotTag);
            $this->collInvLotTags->remove($pos);
            if (null === $this->invLotTagsScheduledForDeletion) {
                $this->invLotTagsScheduledForDeletion = clone $this->collInvLotTags;
                $this->invLotTagsScheduledForDeletion->clear();
            }
            $this->invLotTagsScheduledForDeletion[]= clone $invLotTag;
            $invLotTag->setInvSerialMaster(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinWarehouse(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('Warehouse', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinDplusUser(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('DplusUser', $joinBehavior);

        return $this->getInvLotTags($query, $con);
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
     * If this ChildInvSerialMaster is new, it will return
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
                    ->filterByInvSerialMaster($this)
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
     * @return $this|ChildInvSerialMaster The current object (for fluent API support)
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
            $invTransferLotserialRemoved->setInvSerialMaster(null);
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
                ->filterByInvSerialMaster($this)
                ->count($con);
        }

        return count($this->collInvTransferLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferLotserial object to this object
     * through the ChildInvTransferLotserial foreign key attribute.
     *
     * @param  ChildInvTransferLotserial $l ChildInvTransferLotserial
     * @return $this|\InvSerialMaster The current object (for fluent API support)
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
        $invTransferLotserial->setInvSerialMaster($this);
    }

    /**
     * @param  ChildInvTransferLotserial $invTransferLotserial The ChildInvTransferLotserial object to remove.
     * @return $this|ChildInvSerialMaster The current object (for fluent API support)
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
            $invTransferLotserial->setInvSerialMaster(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * If this ChildInvSerialMaster is new, it will return
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
                    ->filterByInvSerialMaster($this)
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
     * @return $this|ChildInvSerialMaster The current object (for fluent API support)
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
            $invTransferPreAllocatedLotserialRemoved->setInvSerialMaster(null);
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
                ->filterByInvSerialMaster($this)
                ->count($con);
        }

        return count($this->collInvTransferPreAllocatedLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferPreAllocatedLotserial object to this object
     * through the ChildInvTransferPreAllocatedLotserial foreign key attribute.
     *
     * @param  ChildInvTransferPreAllocatedLotserial $l ChildInvTransferPreAllocatedLotserial
     * @return $this|\InvSerialMaster The current object (for fluent API support)
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
        $invTransferPreAllocatedLotserial->setInvSerialMaster($this);
    }

    /**
     * @param  ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial The ChildInvTransferPreAllocatedLotserial object to remove.
     * @return $this|ChildInvSerialMaster The current object (for fluent API support)
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
            $invTransferPreAllocatedLotserial->setInvSerialMaster(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * If this ChildInvSerialMaster is new, it will return
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
                    ->filterByInvSerialMaster($this)
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
     * @return $this|ChildInvSerialMaster The current object (for fluent API support)
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
            $invTransferPickedLotserialRemoved->setInvSerialMaster(null);
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
                ->filterByInvSerialMaster($this)
                ->count($con);
        }

        return count($this->collInvTransferPickedLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferPickedLotserial object to this object
     * through the ChildInvTransferPickedLotserial foreign key attribute.
     *
     * @param  ChildInvTransferPickedLotserial $l ChildInvTransferPickedLotserial
     * @return $this|\InvSerialMaster The current object (for fluent API support)
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
        $invTransferPickedLotserial->setInvSerialMaster($this);
    }

    /**
     * @param  ChildInvTransferPickedLotserial $invTransferPickedLotserial The ChildInvTransferPickedLotserial object to remove.
     * @return $this|ChildInvSerialMaster The current object (for fluent API support)
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
            $invTransferPickedLotserial->setInvSerialMaster(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * Otherwise if this InvSerialMaster is new, it will return
     * an empty collection; or if this InvSerialMaster has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvSerialMaster.
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
     * Gets a single ChildInvSerialWarranty object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildInvSerialWarranty
     * @throws PropelException
     */
    public function getInvSerialWarranty(ConnectionInterface $con = null)
    {

        if ($this->singleInvSerialWarranty === null && !$this->isNew()) {
            $this->singleInvSerialWarranty = ChildInvSerialWarrantyQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleInvSerialWarranty;
    }

    /**
     * Sets a single ChildInvSerialWarranty object as related to this object by a one-to-one relationship.
     *
     * @param  ChildInvSerialWarranty $v ChildInvSerialWarranty
     * @return $this|\InvSerialMaster The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvSerialWarranty(ChildInvSerialWarranty $v = null)
    {
        $this->singleInvSerialWarranty = $v;

        // Make sure that that the passed-in ChildInvSerialWarranty isn't already associated with this object
        if ($v !== null && $v->getInvSerialMaster(null, false) === null) {
            $v->setInvSerialMaster($this);
        }

        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeInvSerialMaster($this);
        }
        $this->inititemnbr = null;
        $this->sermsernbr = null;
        $this->sermproddate = null;
        $this->sermprntcnt = null;
        $this->sermsordnbr = null;
        $this->serminvcdate = null;
        $this->sermrevision = null;
        $this->sermctry = null;
        $this->sermacallocordr = null;
        $this->sermrefsernbr = null;
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
            if ($this->collInvLotTags) {
                foreach ($this->collInvLotTags as $o) {
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
            if ($this->singleInvSerialWarranty) {
                $this->singleInvSerialWarranty->clearAllReferences($deep);
            }
        } // if ($deep)

        $this->collInvLotTags = null;
        $this->collInvTransferLotserials = null;
        $this->collInvTransferPreAllocatedLotserials = null;
        $this->collInvTransferPickedLotserials = null;
        $this->singleInvSerialWarranty = null;
        $this->aItemMasterItem = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvSerialMasterTableMap::DEFAULT_STRING_FORMAT);
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
