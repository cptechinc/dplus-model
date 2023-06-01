<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItmDimensionQuery as ChildItmDimensionQuery;
use \Exception;
use \PDO;
use Map\ItmDimensionTableMap;
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
 * Base class that represents a row from the 'inv_inv_dimen' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItmDimension implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItmDimensionTableMap';


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
     * The value for the indminside field.
     *
     * @var        string
     */
    protected $indminside;

    /**
     * The value for the indmoutside field.
     *
     * @var        string
     */
    protected $indmoutside;

    /**
     * The value for the indmcross field.
     *
     * @var        string
     */
    protected $indmcross;

    /**
     * The value for the indmthick field.
     *
     * @var        string
     */
    protected $indmthick;

    /**
     * The value for the indmlength field.
     *
     * @var        string
     */
    protected $indmlength;

    /**
     * The value for the indmwidth field.
     *
     * @var        string
     */
    protected $indmwidth;

    /**
     * The value for the indmthickness field.
     *
     * @var        string
     */
    protected $indmthickness;

    /**
     * The value for the indmsqft field.
     *
     * @var        string
     */
    protected $indmsqft;

    /**
     * The value for the indmbagqty field.
     *
     * @var        int
     */
    protected $indmbagqty;

    /**
     * The value for the indmbulkqty field.
     *
     * @var        int
     */
    protected $indmbulkqty;

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
    }

    /**
     * Initializes internal state of Base\ItmDimension object.
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
     * Compares this with another <code>ItmDimension</code> instance.  If
     * <code>obj</code> is an instance of <code>ItmDimension</code>, delegates to
     * <code>equals(ItmDimension)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ItmDimension The current object, for fluid interface
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
     * Get the [indminside] column value.
     *
     * @return string
     */
    public function getIndminside()
    {
        return $this->indminside;
    }

    /**
     * Get the [indmoutside] column value.
     *
     * @return string
     */
    public function getIndmoutside()
    {
        return $this->indmoutside;
    }

    /**
     * Get the [indmcross] column value.
     *
     * @return string
     */
    public function getIndmcross()
    {
        return $this->indmcross;
    }

    /**
     * Get the [indmthick] column value.
     *
     * @return string
     */
    public function getIndmthick()
    {
        return $this->indmthick;
    }

    /**
     * Get the [indmlength] column value.
     *
     * @return string
     */
    public function getIndmlength()
    {
        return $this->indmlength;
    }

    /**
     * Get the [indmwidth] column value.
     *
     * @return string
     */
    public function getIndmwidth()
    {
        return $this->indmwidth;
    }

    /**
     * Get the [indmthickness] column value.
     *
     * @return string
     */
    public function getIndmthickness()
    {
        return $this->indmthickness;
    }

    /**
     * Get the [indmsqft] column value.
     *
     * @return string
     */
    public function getIndmsqft()
    {
        return $this->indmsqft;
    }

    /**
     * Get the [indmbagqty] column value.
     *
     * @return int
     */
    public function getIndmbagqty()
    {
        return $this->indmbagqty;
    }

    /**
     * Get the [indmbulkqty] column value.
     *
     * @return int
     */
    public function getIndmbulkqty()
    {
        return $this->indmbulkqty;
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
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [indminside] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndminside($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indminside !== $v) {
            $this->indminside = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMINSIDE] = true;
        }

        return $this;
    } // setIndminside()

    /**
     * Set the value of [indmoutside] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmoutside($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indmoutside !== $v) {
            $this->indmoutside = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMOUTSIDE] = true;
        }

        return $this;
    } // setIndmoutside()

    /**
     * Set the value of [indmcross] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmcross($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indmcross !== $v) {
            $this->indmcross = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMCROSS] = true;
        }

        return $this;
    } // setIndmcross()

    /**
     * Set the value of [indmthick] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmthick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indmthick !== $v) {
            $this->indmthick = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMTHICK] = true;
        }

        return $this;
    } // setIndmthick()

    /**
     * Set the value of [indmlength] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmlength($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indmlength !== $v) {
            $this->indmlength = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMLENGTH] = true;
        }

        return $this;
    } // setIndmlength()

    /**
     * Set the value of [indmwidth] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmwidth($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indmwidth !== $v) {
            $this->indmwidth = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMWIDTH] = true;
        }

        return $this;
    } // setIndmwidth()

    /**
     * Set the value of [indmthickness] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmthickness($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indmthickness !== $v) {
            $this->indmthickness = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMTHICKNESS] = true;
        }

        return $this;
    } // setIndmthickness()

    /**
     * Set the value of [indmsqft] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmsqft($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indmsqft !== $v) {
            $this->indmsqft = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMSQFT] = true;
        }

        return $this;
    } // setIndmsqft()

    /**
     * Set the value of [indmbagqty] column.
     *
     * @param int $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmbagqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->indmbagqty !== $v) {
            $this->indmbagqty = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMBAGQTY] = true;
        }

        return $this;
    } // setIndmbagqty()

    /**
     * Set the value of [indmbulkqty] column.
     *
     * @param int $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setIndmbulkqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->indmbulkqty !== $v) {
            $this->indmbulkqty = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_INDMBULKQTY] = true;
        }

        return $this;
    } // setIndmbulkqty()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ItmDimension The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItmDimensionTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItmDimensionTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItmDimensionTableMap::translateFieldName('Indminside', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indminside = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItmDimensionTableMap::translateFieldName('Indmoutside', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmoutside = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItmDimensionTableMap::translateFieldName('Indmcross', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmcross = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItmDimensionTableMap::translateFieldName('Indmthick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmthick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItmDimensionTableMap::translateFieldName('Indmlength', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmlength = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItmDimensionTableMap::translateFieldName('Indmwidth', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmwidth = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItmDimensionTableMap::translateFieldName('Indmthickness', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmthickness = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItmDimensionTableMap::translateFieldName('Indmsqft', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmsqft = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItmDimensionTableMap::translateFieldName('Indmbagqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmbagqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItmDimensionTableMap::translateFieldName('Indmbulkqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indmbulkqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItmDimensionTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ItmDimensionTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ItmDimensionTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 14; // 14 = ItmDimensionTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItmDimension'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ItmDimensionTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItmDimensionQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ItmDimension::setDeleted()
     * @see ItmDimension::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItmDimensionTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItmDimensionQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItmDimensionTableMap::DATABASE_NAME);
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
                ItmDimensionTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMINSIDE)) {
            $modifiedColumns[':p' . $index++]  = 'IndmInside';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMOUTSIDE)) {
            $modifiedColumns[':p' . $index++]  = 'IndmOutside';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMCROSS)) {
            $modifiedColumns[':p' . $index++]  = 'IndmCross';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMTHICK)) {
            $modifiedColumns[':p' . $index++]  = 'IndmThick';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMLENGTH)) {
            $modifiedColumns[':p' . $index++]  = 'IndmLength';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMWIDTH)) {
            $modifiedColumns[':p' . $index++]  = 'IndmWidth';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMTHICKNESS)) {
            $modifiedColumns[':p' . $index++]  = 'IndmThickness';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMSQFT)) {
            $modifiedColumns[':p' . $index++]  = 'IndmSqft';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMBAGQTY)) {
            $modifiedColumns[':p' . $index++]  = 'IndmBagQty';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMBULKQTY)) {
            $modifiedColumns[':p' . $index++]  = 'IndmBulkQty';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_inv_dimen (%s) VALUES (%s)',
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
                    case 'IndmInside':
                        $stmt->bindValue($identifier, $this->indminside, PDO::PARAM_STR);
                        break;
                    case 'IndmOutside':
                        $stmt->bindValue($identifier, $this->indmoutside, PDO::PARAM_STR);
                        break;
                    case 'IndmCross':
                        $stmt->bindValue($identifier, $this->indmcross, PDO::PARAM_STR);
                        break;
                    case 'IndmThick':
                        $stmt->bindValue($identifier, $this->indmthick, PDO::PARAM_STR);
                        break;
                    case 'IndmLength':
                        $stmt->bindValue($identifier, $this->indmlength, PDO::PARAM_STR);
                        break;
                    case 'IndmWidth':
                        $stmt->bindValue($identifier, $this->indmwidth, PDO::PARAM_STR);
                        break;
                    case 'IndmThickness':
                        $stmt->bindValue($identifier, $this->indmthickness, PDO::PARAM_STR);
                        break;
                    case 'IndmSqft':
                        $stmt->bindValue($identifier, $this->indmsqft, PDO::PARAM_STR);
                        break;
                    case 'IndmBagQty':
                        $stmt->bindValue($identifier, $this->indmbagqty, PDO::PARAM_INT);
                        break;
                    case 'IndmBulkQty':
                        $stmt->bindValue($identifier, $this->indmbulkqty, PDO::PARAM_INT);
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
        $pos = ItmDimensionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIndminside();
                break;
            case 2:
                return $this->getIndmoutside();
                break;
            case 3:
                return $this->getIndmcross();
                break;
            case 4:
                return $this->getIndmthick();
                break;
            case 5:
                return $this->getIndmlength();
                break;
            case 6:
                return $this->getIndmwidth();
                break;
            case 7:
                return $this->getIndmthickness();
                break;
            case 8:
                return $this->getIndmsqft();
                break;
            case 9:
                return $this->getIndmbagqty();
                break;
            case 10:
                return $this->getIndmbulkqty();
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

        if (isset($alreadyDumpedObjects['ItmDimension'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ItmDimension'][$this->hashCode()] = true;
        $keys = ItmDimensionTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getIndminside(),
            $keys[2] => $this->getIndmoutside(),
            $keys[3] => $this->getIndmcross(),
            $keys[4] => $this->getIndmthick(),
            $keys[5] => $this->getIndmlength(),
            $keys[6] => $this->getIndmwidth(),
            $keys[7] => $this->getIndmthickness(),
            $keys[8] => $this->getIndmsqft(),
            $keys[9] => $this->getIndmbagqty(),
            $keys[10] => $this->getIndmbulkqty(),
            $keys[11] => $this->getDateupdtd(),
            $keys[12] => $this->getTimeupdtd(),
            $keys[13] => $this->getDummy(),
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
     * @return $this|\ItmDimension
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItmDimensionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ItmDimension
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setIndminside($value);
                break;
            case 2:
                $this->setIndmoutside($value);
                break;
            case 3:
                $this->setIndmcross($value);
                break;
            case 4:
                $this->setIndmthick($value);
                break;
            case 5:
                $this->setIndmlength($value);
                break;
            case 6:
                $this->setIndmwidth($value);
                break;
            case 7:
                $this->setIndmthickness($value);
                break;
            case 8:
                $this->setIndmsqft($value);
                break;
            case 9:
                $this->setIndmbagqty($value);
                break;
            case 10:
                $this->setIndmbulkqty($value);
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
        $keys = ItmDimensionTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIndminside($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIndmoutside($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIndmcross($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIndmthick($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIndmlength($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIndmwidth($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIndmthickness($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIndmsqft($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIndmbagqty($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIndmbulkqty($arr[$keys[10]]);
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
     * @return $this|\ItmDimension The current object, for fluid interface
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
        $criteria = new Criteria(ItmDimensionTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItmDimensionTableMap::COL_INITITEMNBR)) {
            $criteria->add(ItmDimensionTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMINSIDE)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMINSIDE, $this->indminside);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMOUTSIDE)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMOUTSIDE, $this->indmoutside);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMCROSS)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMCROSS, $this->indmcross);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMTHICK)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMTHICK, $this->indmthick);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMLENGTH)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMLENGTH, $this->indmlength);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMWIDTH)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMWIDTH, $this->indmwidth);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMTHICKNESS)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMTHICKNESS, $this->indmthickness);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMSQFT)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMSQFT, $this->indmsqft);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMBAGQTY)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMBAGQTY, $this->indmbagqty);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_INDMBULKQTY)) {
            $criteria->add(ItmDimensionTableMap::COL_INDMBULKQTY, $this->indmbulkqty);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItmDimensionTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItmDimensionTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItmDimensionTableMap::COL_DUMMY)) {
            $criteria->add(ItmDimensionTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildItmDimensionQuery::create();
        $criteria->add(ItmDimensionTableMap::COL_INITITEMNBR, $this->inititemnbr);

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
        $validPk = null !== $this->getInititemnbr();

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
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getInititemnbr();
    }

    /**
     * Generic method to set the primary key (inititemnbr column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setInititemnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getInititemnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ItmDimension (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setIndminside($this->getIndminside());
        $copyObj->setIndmoutside($this->getIndmoutside());
        $copyObj->setIndmcross($this->getIndmcross());
        $copyObj->setIndmthick($this->getIndmthick());
        $copyObj->setIndmlength($this->getIndmlength());
        $copyObj->setIndmwidth($this->getIndmwidth());
        $copyObj->setIndmthickness($this->getIndmthickness());
        $copyObj->setIndmsqft($this->getIndmsqft());
        $copyObj->setIndmbagqty($this->getIndmbagqty());
        $copyObj->setIndmbulkqty($this->getIndmbulkqty());
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
     * @return \ItmDimension Clone of current object.
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
     * @return $this|\ItmDimension The current object (for fluent API support)
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

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setItmDimension($this);
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
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aItemMasterItem->setItmDimension($this);
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
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeItmDimension($this);
        }
        $this->inititemnbr = null;
        $this->indminside = null;
        $this->indmoutside = null;
        $this->indmcross = null;
        $this->indmthick = null;
        $this->indmlength = null;
        $this->indmwidth = null;
        $this->indmthickness = null;
        $this->indmsqft = null;
        $this->indmbagqty = null;
        $this->indmbulkqty = null;
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
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItmDimensionTableMap::DEFAULT_STRING_FORMAT);
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
