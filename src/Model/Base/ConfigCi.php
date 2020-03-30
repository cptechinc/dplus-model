<?php

namespace Base;

use \ConfigCiQuery as ChildConfigCiQuery;
use \Exception;
use \PDO;
use Map\ConfigCiTableMap;
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
 * Base class that represents a row from the 'ci_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigCi implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigCiTableMap';


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
     * The value for the citbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $citbconfkey;

    /**
     * The value for the citbconfytdstrtmo field.
     *
     * @var        int
     */
    protected $citbconfytdstrtmo;

    /**
     * The value for the citbconfpaysort field.
     *
     * @var        string
     */
    protected $citbconfpaysort;

    /**
     * The value for the citbconfshistby field.
     *
     * @var        string
     */
    protected $citbconfshistby;

    /**
     * The value for the citbconfshistdate field.
     *
     * @var        string
     */
    protected $citbconfshistdate;

    /**
     * The value for the citbconfshistdays field.
     *
     * @var        int
     */
    protected $citbconfshistdays;

    /**
     * The value for the citbconfshowzerohist field.
     *
     * @var        string
     */
    protected $citbconfshowzerohist;

    /**
     * The value for the citbconfshistnotes field.
     *
     * @var        string
     */
    protected $citbconfshistnotes;

    /**
     * The value for the citbconfordernotes field.
     *
     * @var        string
     */
    protected $citbconfordernotes;

    /**
     * The value for the citbconfquotenotes field.
     *
     * @var        string
     */
    protected $citbconfquotenotes;

    /**
     * The value for the citbconfconsolget field.
     *
     * @var        string
     */
    protected $citbconfconsolget;

    /**
     * The value for the citbconfssndays field.
     *
     * @var        int
     */
    protected $citbconfssndays;

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
        $this->citbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigCi object.
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
     * Compares this with another <code>ConfigCi</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigCi</code>, delegates to
     * <code>equals(ConfigCi)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigCi The current object, for fluid interface
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
     * Get the [citbconfkey] column value.
     *
     * @return int
     */
    public function getCitbconfkey()
    {
        return $this->citbconfkey;
    }

    /**
     * Get the [citbconfytdstrtmo] column value.
     *
     * @return int
     */
    public function getCitbconfytdstrtmo()
    {
        return $this->citbconfytdstrtmo;
    }

    /**
     * Get the [citbconfpaysort] column value.
     *
     * @return string
     */
    public function getCitbconfpaysort()
    {
        return $this->citbconfpaysort;
    }

    /**
     * Get the [citbconfshistby] column value.
     *
     * @return string
     */
    public function getCitbconfshistby()
    {
        return $this->citbconfshistby;
    }

    /**
     * Get the [citbconfshistdate] column value.
     *
     * @return string
     */
    public function getCitbconfshistdate()
    {
        return $this->citbconfshistdate;
    }

    /**
     * Get the [citbconfshistdays] column value.
     *
     * @return int
     */
    public function getCitbconfshistdays()
    {
        return $this->citbconfshistdays;
    }

    /**
     * Get the [citbconfshowzerohist] column value.
     *
     * @return string
     */
    public function getCitbconfshowzerohist()
    {
        return $this->citbconfshowzerohist;
    }

    /**
     * Get the [citbconfshistnotes] column value.
     *
     * @return string
     */
    public function getCitbconfshistnotes()
    {
        return $this->citbconfshistnotes;
    }

    /**
     * Get the [citbconfordernotes] column value.
     *
     * @return string
     */
    public function getCitbconfordernotes()
    {
        return $this->citbconfordernotes;
    }

    /**
     * Get the [citbconfquotenotes] column value.
     *
     * @return string
     */
    public function getCitbconfquotenotes()
    {
        return $this->citbconfquotenotes;
    }

    /**
     * Get the [citbconfconsolget] column value.
     *
     * @return string
     */
    public function getCitbconfconsolget()
    {
        return $this->citbconfconsolget;
    }

    /**
     * Get the [citbconfssndays] column value.
     *
     * @return int
     */
    public function getCitbconfssndays()
    {
        return $this->citbconfssndays;
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
     * Set the value of [citbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->citbconfkey !== $v) {
            $this->citbconfkey = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFKEY] = true;
        }

        return $this;
    } // setCitbconfkey()

    /**
     * Set the value of [citbconfytdstrtmo] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfytdstrtmo($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->citbconfytdstrtmo !== $v) {
            $this->citbconfytdstrtmo = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFYTDSTRTMO] = true;
        }

        return $this;
    } // setCitbconfytdstrtmo()

    /**
     * Set the value of [citbconfpaysort] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfpaysort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citbconfpaysort !== $v) {
            $this->citbconfpaysort = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFPAYSORT] = true;
        }

        return $this;
    } // setCitbconfpaysort()

    /**
     * Set the value of [citbconfshistby] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfshistby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citbconfshistby !== $v) {
            $this->citbconfshistby = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFSHISTBY] = true;
        }

        return $this;
    } // setCitbconfshistby()

    /**
     * Set the value of [citbconfshistdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfshistdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citbconfshistdate !== $v) {
            $this->citbconfshistdate = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFSHISTDATE] = true;
        }

        return $this;
    } // setCitbconfshistdate()

    /**
     * Set the value of [citbconfshistdays] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfshistdays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->citbconfshistdays !== $v) {
            $this->citbconfshistdays = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFSHISTDAYS] = true;
        }

        return $this;
    } // setCitbconfshistdays()

    /**
     * Set the value of [citbconfshowzerohist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfshowzerohist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citbconfshowzerohist !== $v) {
            $this->citbconfshowzerohist = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST] = true;
        }

        return $this;
    } // setCitbconfshowzerohist()

    /**
     * Set the value of [citbconfshistnotes] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfshistnotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citbconfshistnotes !== $v) {
            $this->citbconfshistnotes = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFSHISTNOTES] = true;
        }

        return $this;
    } // setCitbconfshistnotes()

    /**
     * Set the value of [citbconfordernotes] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfordernotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citbconfordernotes !== $v) {
            $this->citbconfordernotes = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFORDERNOTES] = true;
        }

        return $this;
    } // setCitbconfordernotes()

    /**
     * Set the value of [citbconfquotenotes] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfquotenotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citbconfquotenotes !== $v) {
            $this->citbconfquotenotes = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFQUOTENOTES] = true;
        }

        return $this;
    } // setCitbconfquotenotes()

    /**
     * Set the value of [citbconfconsolget] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfconsolget($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citbconfconsolget !== $v) {
            $this->citbconfconsolget = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFCONSOLGET] = true;
        }

        return $this;
    } // setCitbconfconsolget()

    /**
     * Set the value of [citbconfssndays] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setCitbconfssndays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->citbconfssndays !== $v) {
            $this->citbconfssndays = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_CITBCONFSSNDAYS] = true;
        }

        return $this;
    } // setCitbconfssndays()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCi The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigCiTableMap::COL_DUMMY] = true;
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
            if ($this->citbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfytdstrtmo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfytdstrtmo = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfpaysort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfpaysort = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfshistby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfshistby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfshistdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfshistdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfshistdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfshistdays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfshowzerohist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfshowzerohist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfshistnotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfshistnotes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfordernotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfordernotes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfquotenotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfquotenotes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfconsolget', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfconsolget = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigCiTableMap::translateFieldName('Citbconfssndays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citbconfssndays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigCiTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigCiTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigCiTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 15; // 15 = ConfigCiTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigCi'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigCiTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigCiQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigCi::setDeleted()
     * @see ConfigCi::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCiTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigCiQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCiTableMap::DATABASE_NAME);
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
                ConfigCiTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfKey';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFYTDSTRTMO)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfYtdStrtMo';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFPAYSORT)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfPaySort';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHISTBY)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfShistBy';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHISTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfShistDate';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHISTDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfShistDays';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfShowZeroHist';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHISTNOTES)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfShistNotes';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFORDERNOTES)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfOrderNotes';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFQUOTENOTES)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfQuoteNotes';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFCONSOLGET)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfConsolGet';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSSNDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'CitbConfSsnDays';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ci_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'CitbConfKey':
                        $stmt->bindValue($identifier, $this->citbconfkey, PDO::PARAM_INT);
                        break;
                    case 'CitbConfYtdStrtMo':
                        $stmt->bindValue($identifier, $this->citbconfytdstrtmo, PDO::PARAM_INT);
                        break;
                    case 'CitbConfPaySort':
                        $stmt->bindValue($identifier, $this->citbconfpaysort, PDO::PARAM_STR);
                        break;
                    case 'CitbConfShistBy':
                        $stmt->bindValue($identifier, $this->citbconfshistby, PDO::PARAM_STR);
                        break;
                    case 'CitbConfShistDate':
                        $stmt->bindValue($identifier, $this->citbconfshistdate, PDO::PARAM_STR);
                        break;
                    case 'CitbConfShistDays':
                        $stmt->bindValue($identifier, $this->citbconfshistdays, PDO::PARAM_INT);
                        break;
                    case 'CitbConfShowZeroHist':
                        $stmt->bindValue($identifier, $this->citbconfshowzerohist, PDO::PARAM_STR);
                        break;
                    case 'CitbConfShistNotes':
                        $stmt->bindValue($identifier, $this->citbconfshistnotes, PDO::PARAM_STR);
                        break;
                    case 'CitbConfOrderNotes':
                        $stmt->bindValue($identifier, $this->citbconfordernotes, PDO::PARAM_STR);
                        break;
                    case 'CitbConfQuoteNotes':
                        $stmt->bindValue($identifier, $this->citbconfquotenotes, PDO::PARAM_STR);
                        break;
                    case 'CitbConfConsolGet':
                        $stmt->bindValue($identifier, $this->citbconfconsolget, PDO::PARAM_STR);
                        break;
                    case 'CitbConfSsnDays':
                        $stmt->bindValue($identifier, $this->citbconfssndays, PDO::PARAM_INT);
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
        $pos = ConfigCiTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getCitbconfkey();
                break;
            case 1:
                return $this->getCitbconfytdstrtmo();
                break;
            case 2:
                return $this->getCitbconfpaysort();
                break;
            case 3:
                return $this->getCitbconfshistby();
                break;
            case 4:
                return $this->getCitbconfshistdate();
                break;
            case 5:
                return $this->getCitbconfshistdays();
                break;
            case 6:
                return $this->getCitbconfshowzerohist();
                break;
            case 7:
                return $this->getCitbconfshistnotes();
                break;
            case 8:
                return $this->getCitbconfordernotes();
                break;
            case 9:
                return $this->getCitbconfquotenotes();
                break;
            case 10:
                return $this->getCitbconfconsolget();
                break;
            case 11:
                return $this->getCitbconfssndays();
                break;
            case 12:
                return $this->getDateupdtd();
                break;
            case 13:
                return $this->getTimeupdtd();
                break;
            case 14:
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

        if (isset($alreadyDumpedObjects['ConfigCi'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigCi'][$this->hashCode()] = true;
        $keys = ConfigCiTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCitbconfkey(),
            $keys[1] => $this->getCitbconfytdstrtmo(),
            $keys[2] => $this->getCitbconfpaysort(),
            $keys[3] => $this->getCitbconfshistby(),
            $keys[4] => $this->getCitbconfshistdate(),
            $keys[5] => $this->getCitbconfshistdays(),
            $keys[6] => $this->getCitbconfshowzerohist(),
            $keys[7] => $this->getCitbconfshistnotes(),
            $keys[8] => $this->getCitbconfordernotes(),
            $keys[9] => $this->getCitbconfquotenotes(),
            $keys[10] => $this->getCitbconfconsolget(),
            $keys[11] => $this->getCitbconfssndays(),
            $keys[12] => $this->getDateupdtd(),
            $keys[13] => $this->getTimeupdtd(),
            $keys[14] => $this->getDummy(),
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
     * @return $this|\ConfigCi
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigCiTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigCi
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCitbconfkey($value);
                break;
            case 1:
                $this->setCitbconfytdstrtmo($value);
                break;
            case 2:
                $this->setCitbconfpaysort($value);
                break;
            case 3:
                $this->setCitbconfshistby($value);
                break;
            case 4:
                $this->setCitbconfshistdate($value);
                break;
            case 5:
                $this->setCitbconfshistdays($value);
                break;
            case 6:
                $this->setCitbconfshowzerohist($value);
                break;
            case 7:
                $this->setCitbconfshistnotes($value);
                break;
            case 8:
                $this->setCitbconfordernotes($value);
                break;
            case 9:
                $this->setCitbconfquotenotes($value);
                break;
            case 10:
                $this->setCitbconfconsolget($value);
                break;
            case 11:
                $this->setCitbconfssndays($value);
                break;
            case 12:
                $this->setDateupdtd($value);
                break;
            case 13:
                $this->setTimeupdtd($value);
                break;
            case 14:
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
        $keys = ConfigCiTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCitbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setCitbconfytdstrtmo($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCitbconfpaysort($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCitbconfshistby($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCitbconfshistdate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCitbconfshistdays($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCitbconfshowzerohist($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setCitbconfshistnotes($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCitbconfordernotes($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCitbconfquotenotes($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setCitbconfconsolget($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setCitbconfssndays($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDateupdtd($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setTimeupdtd($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setDummy($arr[$keys[14]]);
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
     * @return $this|\ConfigCi The current object, for fluid interface
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
        $criteria = new Criteria(ConfigCiTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFKEY)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFKEY, $this->citbconfkey);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFYTDSTRTMO)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFYTDSTRTMO, $this->citbconfytdstrtmo);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFPAYSORT)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFPAYSORT, $this->citbconfpaysort);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHISTBY)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFSHISTBY, $this->citbconfshistby);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHISTDATE)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFSHISTDATE, $this->citbconfshistdate);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHISTDAYS)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFSHISTDAYS, $this->citbconfshistdays);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST, $this->citbconfshowzerohist);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSHISTNOTES)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFSHISTNOTES, $this->citbconfshistnotes);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFORDERNOTES)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFORDERNOTES, $this->citbconfordernotes);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFQUOTENOTES)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFQUOTENOTES, $this->citbconfquotenotes);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFCONSOLGET)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFCONSOLGET, $this->citbconfconsolget);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_CITBCONFSSNDAYS)) {
            $criteria->add(ConfigCiTableMap::COL_CITBCONFSSNDAYS, $this->citbconfssndays);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigCiTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigCiTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigCiTableMap::COL_DUMMY)) {
            $criteria->add(ConfigCiTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigCiQuery::create();
        $criteria->add(ConfigCiTableMap::COL_CITBCONFKEY, $this->citbconfkey);

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
        $validPk = null !== $this->getCitbconfkey();

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
        return $this->getCitbconfkey();
    }

    /**
     * Generic method to set the primary key (citbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCitbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCitbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigCi (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCitbconfkey($this->getCitbconfkey());
        $copyObj->setCitbconfytdstrtmo($this->getCitbconfytdstrtmo());
        $copyObj->setCitbconfpaysort($this->getCitbconfpaysort());
        $copyObj->setCitbconfshistby($this->getCitbconfshistby());
        $copyObj->setCitbconfshistdate($this->getCitbconfshistdate());
        $copyObj->setCitbconfshistdays($this->getCitbconfshistdays());
        $copyObj->setCitbconfshowzerohist($this->getCitbconfshowzerohist());
        $copyObj->setCitbconfshistnotes($this->getCitbconfshistnotes());
        $copyObj->setCitbconfordernotes($this->getCitbconfordernotes());
        $copyObj->setCitbconfquotenotes($this->getCitbconfquotenotes());
        $copyObj->setCitbconfconsolget($this->getCitbconfconsolget());
        $copyObj->setCitbconfssndays($this->getCitbconfssndays());
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
     * @return \ConfigCi Clone of current object.
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
        $this->citbconfkey = null;
        $this->citbconfytdstrtmo = null;
        $this->citbconfpaysort = null;
        $this->citbconfshistby = null;
        $this->citbconfshistdate = null;
        $this->citbconfshistdays = null;
        $this->citbconfshowzerohist = null;
        $this->citbconfshistnotes = null;
        $this->citbconfordernotes = null;
        $this->citbconfquotenotes = null;
        $this->citbconfconsolget = null;
        $this->citbconfssndays = null;
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
        return (string) $this->exportTo(ConfigCiTableMap::DEFAULT_STRING_FORMAT);
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
