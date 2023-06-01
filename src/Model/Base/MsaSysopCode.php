<?php

namespace Base;

use \MsaSysopCodeQuery as ChildMsaSysopCodeQuery;
use \Exception;
use \PDO;
use Map\MsaSysopCodeTableMap;
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
 * Base class that represents a row from the 'sys_opt_options' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class MsaSysopCode implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\MsaSysopCodeTableMap';


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
     * The value for the optnsystem field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $optnsystem;

    /**
     * The value for the optncode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $optncode;

    /**
     * The value for the optndesc field.
     *
     * @var        string
     */
    protected $optndesc;

    /**
     * The value for the optnvalidate field.
     *
     * @var        string
     */
    protected $optnvalidate;

    /**
     * The value for the optnforce field.
     *
     * @var        string
     */
    protected $optnforce;

    /**
     * The value for the optnnotecode field.
     *
     * @var        string
     */
    protected $optnnotecode;

    /**
     * The value for the optnlistseq field.
     *
     * @var        int
     */
    protected $optnlistseq;

    /**
     * The value for the optnfilename field.
     *
     * @var        string
     */
    protected $optnfilename;

    /**
     * The value for the optnadvsrch field.
     *
     * @var        string
     */
    protected $optnadvsrch;

    /**
     * The value for the optnfieldtype field.
     *
     * @var        string
     */
    protected $optnfieldtype;

    /**
     * The value for the optndef1b4dec field.
     *
     * @var        int
     */
    protected $optndef1b4dec;

    /**
     * The value for the optndef2aftdec field.
     *
     * @var        int
     */
    protected $optndef2aftdec;

    /**
     * The value for the optndocstorfolder field.
     *
     * @var        string
     */
    protected $optndocstorfolder;

    /**
     * The value for the optnwebvalidate field.
     *
     * @var        string
     */
    protected $optnwebvalidate;

    /**
     * The value for the optnwebforce field.
     *
     * @var        string
     */
    protected $optnwebforce;

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
        $this->optnsystem = '';
        $this->optncode = '';
    }

    /**
     * Initializes internal state of Base\MsaSysopCode object.
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
     * Compares this with another <code>MsaSysopCode</code> instance.  If
     * <code>obj</code> is an instance of <code>MsaSysopCode</code>, delegates to
     * <code>equals(MsaSysopCode)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|MsaSysopCode The current object, for fluid interface
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
     * Get the [optnsystem] column value.
     *
     * @return string
     */
    public function getOptnsystem()
    {
        return $this->optnsystem;
    }

    /**
     * Get the [optncode] column value.
     *
     * @return string
     */
    public function getOptncode()
    {
        return $this->optncode;
    }

    /**
     * Get the [optndesc] column value.
     *
     * @return string
     */
    public function getOptndesc()
    {
        return $this->optndesc;
    }

    /**
     * Get the [optnvalidate] column value.
     *
     * @return string
     */
    public function getOptnvalidate()
    {
        return $this->optnvalidate;
    }

    /**
     * Get the [optnforce] column value.
     *
     * @return string
     */
    public function getOptnforce()
    {
        return $this->optnforce;
    }

    /**
     * Get the [optnnotecode] column value.
     *
     * @return string
     */
    public function getOptnnotecode()
    {
        return $this->optnnotecode;
    }

    /**
     * Get the [optnlistseq] column value.
     *
     * @return int
     */
    public function getOptnlistseq()
    {
        return $this->optnlistseq;
    }

    /**
     * Get the [optnfilename] column value.
     *
     * @return string
     */
    public function getOptnfilename()
    {
        return $this->optnfilename;
    }

    /**
     * Get the [optnadvsrch] column value.
     *
     * @return string
     */
    public function getOptnadvsrch()
    {
        return $this->optnadvsrch;
    }

    /**
     * Get the [optnfieldtype] column value.
     *
     * @return string
     */
    public function getOptnfieldtype()
    {
        return $this->optnfieldtype;
    }

    /**
     * Get the [optndef1b4dec] column value.
     *
     * @return int
     */
    public function getOptndef1b4dec()
    {
        return $this->optndef1b4dec;
    }

    /**
     * Get the [optndef2aftdec] column value.
     *
     * @return int
     */
    public function getOptndef2aftdec()
    {
        return $this->optndef2aftdec;
    }

    /**
     * Get the [optndocstorfolder] column value.
     *
     * @return string
     */
    public function getOptndocstorfolder()
    {
        return $this->optndocstorfolder;
    }

    /**
     * Get the [optnwebvalidate] column value.
     *
     * @return string
     */
    public function getOptnwebvalidate()
    {
        return $this->optnwebvalidate;
    }

    /**
     * Get the [optnwebforce] column value.
     *
     * @return string
     */
    public function getOptnwebforce()
    {
        return $this->optnwebforce;
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
     * Set the value of [optnsystem] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnsystem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnsystem !== $v) {
            $this->optnsystem = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNSYSTEM] = true;
        }

        return $this;
    } // setOptnsystem()

    /**
     * Set the value of [optncode] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptncode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optncode !== $v) {
            $this->optncode = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNCODE] = true;
        }

        return $this;
    } // setOptncode()

    /**
     * Set the value of [optndesc] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptndesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optndesc !== $v) {
            $this->optndesc = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNDESC] = true;
        }

        return $this;
    } // setOptndesc()

    /**
     * Set the value of [optnvalidate] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnvalidate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnvalidate !== $v) {
            $this->optnvalidate = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNVALIDATE] = true;
        }

        return $this;
    } // setOptnvalidate()

    /**
     * Set the value of [optnforce] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnforce($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnforce !== $v) {
            $this->optnforce = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNFORCE] = true;
        }

        return $this;
    } // setOptnforce()

    /**
     * Set the value of [optnnotecode] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnnotecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnnotecode !== $v) {
            $this->optnnotecode = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNNOTECODE] = true;
        }

        return $this;
    } // setOptnnotecode()

    /**
     * Set the value of [optnlistseq] column.
     *
     * @param int $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnlistseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->optnlistseq !== $v) {
            $this->optnlistseq = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNLISTSEQ] = true;
        }

        return $this;
    } // setOptnlistseq()

    /**
     * Set the value of [optnfilename] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnfilename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnfilename !== $v) {
            $this->optnfilename = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNFILENAME] = true;
        }

        return $this;
    } // setOptnfilename()

    /**
     * Set the value of [optnadvsrch] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnadvsrch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnadvsrch !== $v) {
            $this->optnadvsrch = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNADVSRCH] = true;
        }

        return $this;
    } // setOptnadvsrch()

    /**
     * Set the value of [optnfieldtype] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnfieldtype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnfieldtype !== $v) {
            $this->optnfieldtype = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNFIELDTYPE] = true;
        }

        return $this;
    } // setOptnfieldtype()

    /**
     * Set the value of [optndef1b4dec] column.
     *
     * @param int $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptndef1b4dec($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->optndef1b4dec !== $v) {
            $this->optndef1b4dec = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC] = true;
        }

        return $this;
    } // setOptndef1b4dec()

    /**
     * Set the value of [optndef2aftdec] column.
     *
     * @param int $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptndef2aftdec($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->optndef2aftdec !== $v) {
            $this->optndef2aftdec = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC] = true;
        }

        return $this;
    } // setOptndef2aftdec()

    /**
     * Set the value of [optndocstorfolder] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptndocstorfolder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optndocstorfolder !== $v) {
            $this->optndocstorfolder = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER] = true;
        }

        return $this;
    } // setOptndocstorfolder()

    /**
     * Set the value of [optnwebvalidate] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnwebvalidate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnwebvalidate !== $v) {
            $this->optnwebvalidate = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE] = true;
        }

        return $this;
    } // setOptnwebvalidate()

    /**
     * Set the value of [optnwebforce] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setOptnwebforce($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optnwebforce !== $v) {
            $this->optnwebforce = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_OPTNWEBFORCE] = true;
        }

        return $this;
    } // setOptnwebforce()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\MsaSysopCode The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[MsaSysopCodeTableMap::COL_DUMMY] = true;
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
            if ($this->optnsystem !== '') {
                return false;
            }

            if ($this->optncode !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnsystem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optncode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optndesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optndesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnvalidate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnvalidate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnforce', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnforce = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnnotecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnnotecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnlistseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnlistseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnfilename', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnfilename = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnadvsrch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnadvsrch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnfieldtype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnfieldtype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optndef1b4dec', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optndef1b4dec = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optndef2aftdec', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optndef2aftdec = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optndocstorfolder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optndocstorfolder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnwebvalidate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnwebvalidate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : MsaSysopCodeTableMap::translateFieldName('Optnwebforce', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optnwebforce = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : MsaSysopCodeTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : MsaSysopCodeTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : MsaSysopCodeTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 18; // 18 = MsaSysopCodeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\MsaSysopCode'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(MsaSysopCodeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildMsaSysopCodeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see MsaSysopCode::setDeleted()
     * @see MsaSysopCode::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(MsaSysopCodeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildMsaSysopCodeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(MsaSysopCodeTableMap::DATABASE_NAME);
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
                MsaSysopCodeTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNSYSTEM)) {
            $modifiedColumns[':p' . $index++]  = 'OptnSystem';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OptnCode';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNDESC)) {
            $modifiedColumns[':p' . $index++]  = 'OptnDesc';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNVALIDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OptnValidate';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNFORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OptnForce';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNNOTECODE)) {
            $modifiedColumns[':p' . $index++]  = 'OptnNoteCode';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNLISTSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'OptnListSeq';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNFILENAME)) {
            $modifiedColumns[':p' . $index++]  = 'OptnFileName';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNADVSRCH)) {
            $modifiedColumns[':p' . $index++]  = 'OptnAdvSrch';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNFIELDTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OptnFieldType';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC)) {
            $modifiedColumns[':p' . $index++]  = 'OptnDef1B4Dec';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC)) {
            $modifiedColumns[':p' . $index++]  = 'OptnDef2AftDec';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER)) {
            $modifiedColumns[':p' . $index++]  = 'OptnDocStorFolder';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OptnWebValidate';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNWEBFORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OptnWebForce';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO sys_opt_options (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OptnSystem':
                        $stmt->bindValue($identifier, $this->optnsystem, PDO::PARAM_STR);
                        break;
                    case 'OptnCode':
                        $stmt->bindValue($identifier, $this->optncode, PDO::PARAM_STR);
                        break;
                    case 'OptnDesc':
                        $stmt->bindValue($identifier, $this->optndesc, PDO::PARAM_STR);
                        break;
                    case 'OptnValidate':
                        $stmt->bindValue($identifier, $this->optnvalidate, PDO::PARAM_STR);
                        break;
                    case 'OptnForce':
                        $stmt->bindValue($identifier, $this->optnforce, PDO::PARAM_STR);
                        break;
                    case 'OptnNoteCode':
                        $stmt->bindValue($identifier, $this->optnnotecode, PDO::PARAM_STR);
                        break;
                    case 'OptnListSeq':
                        $stmt->bindValue($identifier, $this->optnlistseq, PDO::PARAM_INT);
                        break;
                    case 'OptnFileName':
                        $stmt->bindValue($identifier, $this->optnfilename, PDO::PARAM_STR);
                        break;
                    case 'OptnAdvSrch':
                        $stmt->bindValue($identifier, $this->optnadvsrch, PDO::PARAM_STR);
                        break;
                    case 'OptnFieldType':
                        $stmt->bindValue($identifier, $this->optnfieldtype, PDO::PARAM_STR);
                        break;
                    case 'OptnDef1B4Dec':
                        $stmt->bindValue($identifier, $this->optndef1b4dec, PDO::PARAM_INT);
                        break;
                    case 'OptnDef2AftDec':
                        $stmt->bindValue($identifier, $this->optndef2aftdec, PDO::PARAM_INT);
                        break;
                    case 'OptnDocStorFolder':
                        $stmt->bindValue($identifier, $this->optndocstorfolder, PDO::PARAM_STR);
                        break;
                    case 'OptnWebValidate':
                        $stmt->bindValue($identifier, $this->optnwebvalidate, PDO::PARAM_STR);
                        break;
                    case 'OptnWebForce':
                        $stmt->bindValue($identifier, $this->optnwebforce, PDO::PARAM_STR);
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
        $pos = MsaSysopCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOptnsystem();
                break;
            case 1:
                return $this->getOptncode();
                break;
            case 2:
                return $this->getOptndesc();
                break;
            case 3:
                return $this->getOptnvalidate();
                break;
            case 4:
                return $this->getOptnforce();
                break;
            case 5:
                return $this->getOptnnotecode();
                break;
            case 6:
                return $this->getOptnlistseq();
                break;
            case 7:
                return $this->getOptnfilename();
                break;
            case 8:
                return $this->getOptnadvsrch();
                break;
            case 9:
                return $this->getOptnfieldtype();
                break;
            case 10:
                return $this->getOptndef1b4dec();
                break;
            case 11:
                return $this->getOptndef2aftdec();
                break;
            case 12:
                return $this->getOptndocstorfolder();
                break;
            case 13:
                return $this->getOptnwebvalidate();
                break;
            case 14:
                return $this->getOptnwebforce();
                break;
            case 15:
                return $this->getDateupdtd();
                break;
            case 16:
                return $this->getTimeupdtd();
                break;
            case 17:
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

        if (isset($alreadyDumpedObjects['MsaSysopCode'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['MsaSysopCode'][$this->hashCode()] = true;
        $keys = MsaSysopCodeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOptnsystem(),
            $keys[1] => $this->getOptncode(),
            $keys[2] => $this->getOptndesc(),
            $keys[3] => $this->getOptnvalidate(),
            $keys[4] => $this->getOptnforce(),
            $keys[5] => $this->getOptnnotecode(),
            $keys[6] => $this->getOptnlistseq(),
            $keys[7] => $this->getOptnfilename(),
            $keys[8] => $this->getOptnadvsrch(),
            $keys[9] => $this->getOptnfieldtype(),
            $keys[10] => $this->getOptndef1b4dec(),
            $keys[11] => $this->getOptndef2aftdec(),
            $keys[12] => $this->getOptndocstorfolder(),
            $keys[13] => $this->getOptnwebvalidate(),
            $keys[14] => $this->getOptnwebforce(),
            $keys[15] => $this->getDateupdtd(),
            $keys[16] => $this->getTimeupdtd(),
            $keys[17] => $this->getDummy(),
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
     * @return $this|\MsaSysopCode
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = MsaSysopCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\MsaSysopCode
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOptnsystem($value);
                break;
            case 1:
                $this->setOptncode($value);
                break;
            case 2:
                $this->setOptndesc($value);
                break;
            case 3:
                $this->setOptnvalidate($value);
                break;
            case 4:
                $this->setOptnforce($value);
                break;
            case 5:
                $this->setOptnnotecode($value);
                break;
            case 6:
                $this->setOptnlistseq($value);
                break;
            case 7:
                $this->setOptnfilename($value);
                break;
            case 8:
                $this->setOptnadvsrch($value);
                break;
            case 9:
                $this->setOptnfieldtype($value);
                break;
            case 10:
                $this->setOptndef1b4dec($value);
                break;
            case 11:
                $this->setOptndef2aftdec($value);
                break;
            case 12:
                $this->setOptndocstorfolder($value);
                break;
            case 13:
                $this->setOptnwebvalidate($value);
                break;
            case 14:
                $this->setOptnwebforce($value);
                break;
            case 15:
                $this->setDateupdtd($value);
                break;
            case 16:
                $this->setTimeupdtd($value);
                break;
            case 17:
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
        $keys = MsaSysopCodeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOptnsystem($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOptncode($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOptndesc($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOptnvalidate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOptnforce($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOptnnotecode($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOptnlistseq($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOptnfilename($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOptnadvsrch($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOptnfieldtype($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOptndef1b4dec($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOptndef2aftdec($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOptndocstorfolder($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOptnwebvalidate($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOptnwebforce($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setDateupdtd($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setTimeupdtd($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setDummy($arr[$keys[17]]);
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
     * @return $this|\MsaSysopCode The current object, for fluid interface
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
        $criteria = new Criteria(MsaSysopCodeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNSYSTEM)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNSYSTEM, $this->optnsystem);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNCODE)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNCODE, $this->optncode);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNDESC)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNDESC, $this->optndesc);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNVALIDATE)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNVALIDATE, $this->optnvalidate);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNFORCE)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNFORCE, $this->optnforce);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNNOTECODE)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNNOTECODE, $this->optnnotecode);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNLISTSEQ)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNLISTSEQ, $this->optnlistseq);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNFILENAME)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNFILENAME, $this->optnfilename);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNADVSRCH)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNADVSRCH, $this->optnadvsrch);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNFIELDTYPE)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNFIELDTYPE, $this->optnfieldtype);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC, $this->optndef1b4dec);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC, $this->optndef2aftdec);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER, $this->optndocstorfolder);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE, $this->optnwebvalidate);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_OPTNWEBFORCE)) {
            $criteria->add(MsaSysopCodeTableMap::COL_OPTNWEBFORCE, $this->optnwebforce);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_DATEUPDTD)) {
            $criteria->add(MsaSysopCodeTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_TIMEUPDTD)) {
            $criteria->add(MsaSysopCodeTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(MsaSysopCodeTableMap::COL_DUMMY)) {
            $criteria->add(MsaSysopCodeTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildMsaSysopCodeQuery::create();
        $criteria->add(MsaSysopCodeTableMap::COL_OPTNSYSTEM, $this->optnsystem);
        $criteria->add(MsaSysopCodeTableMap::COL_OPTNCODE, $this->optncode);

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
        $validPk = null !== $this->getOptnsystem() &&
            null !== $this->getOptncode();

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
        $pks[0] = $this->getOptnsystem();
        $pks[1] = $this->getOptncode();

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
        $this->setOptnsystem($keys[0]);
        $this->setOptncode($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getOptnsystem()) && (null === $this->getOptncode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \MsaSysopCode (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOptnsystem($this->getOptnsystem());
        $copyObj->setOptncode($this->getOptncode());
        $copyObj->setOptndesc($this->getOptndesc());
        $copyObj->setOptnvalidate($this->getOptnvalidate());
        $copyObj->setOptnforce($this->getOptnforce());
        $copyObj->setOptnnotecode($this->getOptnnotecode());
        $copyObj->setOptnlistseq($this->getOptnlistseq());
        $copyObj->setOptnfilename($this->getOptnfilename());
        $copyObj->setOptnadvsrch($this->getOptnadvsrch());
        $copyObj->setOptnfieldtype($this->getOptnfieldtype());
        $copyObj->setOptndef1b4dec($this->getOptndef1b4dec());
        $copyObj->setOptndef2aftdec($this->getOptndef2aftdec());
        $copyObj->setOptndocstorfolder($this->getOptndocstorfolder());
        $copyObj->setOptnwebvalidate($this->getOptnwebvalidate());
        $copyObj->setOptnwebforce($this->getOptnwebforce());
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
     * @return \MsaSysopCode Clone of current object.
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
        $this->optnsystem = null;
        $this->optncode = null;
        $this->optndesc = null;
        $this->optnvalidate = null;
        $this->optnforce = null;
        $this->optnnotecode = null;
        $this->optnlistseq = null;
        $this->optnfilename = null;
        $this->optnadvsrch = null;
        $this->optnfieldtype = null;
        $this->optndef1b4dec = null;
        $this->optndef2aftdec = null;
        $this->optndocstorfolder = null;
        $this->optnwebvalidate = null;
        $this->optnwebforce = null;
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
        return (string) $this->exportTo(MsaSysopCodeTableMap::DEFAULT_STRING_FORMAT);
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
