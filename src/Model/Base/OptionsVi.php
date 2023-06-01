<?php

namespace Base;

use \OptionsViQuery as ChildOptionsViQuery;
use \Exception;
use \PDO;
use Map\OptionsViTableMap;
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
 * Base class that represents a row from the 'vi_options' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class OptionsVi implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\OptionsViTableMap';


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
     * The value for the vitboptncode field.
     *
     * @var        string
     */
    protected $vitboptncode;

    /**
     * The value for the vitboptngenavail field.
     *
     * @var        string
     */
    protected $vitboptngenavail;

    /**
     * The value for the vitboptnpayavail field.
     *
     * @var        string
     */
    protected $vitboptnpayavail;

    /**
     * The value for the vitboptncostavail field.
     *
     * @var        string
     */
    protected $vitboptncostavail;

    /**
     * The value for the vitboptnpoavail field.
     *
     * @var        string
     */
    protected $vitboptnpoavail;

    /**
     * The value for the vitboptnopenavail field.
     *
     * @var        string
     */
    protected $vitboptnopenavail;

    /**
     * The value for the vitboptnphavail field.
     *
     * @var        string
     */
    protected $vitboptnphavail;

    /**
     * The value for the vitboptnunrlavail field.
     *
     * @var        string
     */
    protected $vitboptnunrlavail;

    /**
     * The value for the vitboptnunivavail field.
     *
     * @var        string
     */
    protected $vitboptnunivavail;

    /**
     * The value for the vitboptnnoteavail field.
     *
     * @var        string
     */
    protected $vitboptnnoteavail;

    /**
     * The value for the vitboptn24moavail field.
     *
     * @var        string
     */
    protected $vitboptn24moavail;

    /**
     * The value for the vitboptnmisc1 field.
     *
     * @var        string
     */
    protected $vitboptnmisc1;

    /**
     * The value for the vitboptnmisc2 field.
     *
     * @var        string
     */
    protected $vitboptnmisc2;

    /**
     * The value for the vitboptnmisc3 field.
     *
     * @var        string
     */
    protected $vitboptnmisc3;

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
     * Initializes internal state of Base\OptionsVi object.
     */
    public function __construct()
    {
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
     * Compares this with another <code>OptionsVi</code> instance.  If
     * <code>obj</code> is an instance of <code>OptionsVi</code>, delegates to
     * <code>equals(OptionsVi)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|OptionsVi The current object, for fluid interface
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
     * Get the [vitboptncode] column value.
     *
     * @return string
     */
    public function getVitboptncode()
    {
        return $this->vitboptncode;
    }

    /**
     * Get the [vitboptngenavail] column value.
     *
     * @return string
     */
    public function getVitboptngenavail()
    {
        return $this->vitboptngenavail;
    }

    /**
     * Get the [vitboptnpayavail] column value.
     *
     * @return string
     */
    public function getVitboptnpayavail()
    {
        return $this->vitboptnpayavail;
    }

    /**
     * Get the [vitboptncostavail] column value.
     *
     * @return string
     */
    public function getVitboptncostavail()
    {
        return $this->vitboptncostavail;
    }

    /**
     * Get the [vitboptnpoavail] column value.
     *
     * @return string
     */
    public function getVitboptnpoavail()
    {
        return $this->vitboptnpoavail;
    }

    /**
     * Get the [vitboptnopenavail] column value.
     *
     * @return string
     */
    public function getVitboptnopenavail()
    {
        return $this->vitboptnopenavail;
    }

    /**
     * Get the [vitboptnphavail] column value.
     *
     * @return string
     */
    public function getVitboptnphavail()
    {
        return $this->vitboptnphavail;
    }

    /**
     * Get the [vitboptnunrlavail] column value.
     *
     * @return string
     */
    public function getVitboptnunrlavail()
    {
        return $this->vitboptnunrlavail;
    }

    /**
     * Get the [vitboptnunivavail] column value.
     *
     * @return string
     */
    public function getVitboptnunivavail()
    {
        return $this->vitboptnunivavail;
    }

    /**
     * Get the [vitboptnnoteavail] column value.
     *
     * @return string
     */
    public function getVitboptnnoteavail()
    {
        return $this->vitboptnnoteavail;
    }

    /**
     * Get the [vitboptn24moavail] column value.
     *
     * @return string
     */
    public function getVitboptn24moavail()
    {
        return $this->vitboptn24moavail;
    }

    /**
     * Get the [vitboptnmisc1] column value.
     *
     * @return string
     */
    public function getVitboptnmisc1()
    {
        return $this->vitboptnmisc1;
    }

    /**
     * Get the [vitboptnmisc2] column value.
     *
     * @return string
     */
    public function getVitboptnmisc2()
    {
        return $this->vitboptnmisc2;
    }

    /**
     * Get the [vitboptnmisc3] column value.
     *
     * @return string
     */
    public function getVitboptnmisc3()
    {
        return $this->vitboptnmisc3;
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
     * Set the value of [vitboptncode] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptncode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptncode !== $v) {
            $this->vitboptncode = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNCODE] = true;
        }

        return $this;
    } // setVitboptncode()

    /**
     * Set the value of [vitboptngenavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptngenavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptngenavail !== $v) {
            $this->vitboptngenavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNGENAVAIL] = true;
        }

        return $this;
    } // setVitboptngenavail()

    /**
     * Set the value of [vitboptnpayavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnpayavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnpayavail !== $v) {
            $this->vitboptnpayavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNPAYAVAIL] = true;
        }

        return $this;
    } // setVitboptnpayavail()

    /**
     * Set the value of [vitboptncostavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptncostavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptncostavail !== $v) {
            $this->vitboptncostavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNCOSTAVAIL] = true;
        }

        return $this;
    } // setVitboptncostavail()

    /**
     * Set the value of [vitboptnpoavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnpoavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnpoavail !== $v) {
            $this->vitboptnpoavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNPOAVAIL] = true;
        }

        return $this;
    } // setVitboptnpoavail()

    /**
     * Set the value of [vitboptnopenavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnopenavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnopenavail !== $v) {
            $this->vitboptnopenavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNOPENAVAIL] = true;
        }

        return $this;
    } // setVitboptnopenavail()

    /**
     * Set the value of [vitboptnphavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnphavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnphavail !== $v) {
            $this->vitboptnphavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNPHAVAIL] = true;
        }

        return $this;
    } // setVitboptnphavail()

    /**
     * Set the value of [vitboptnunrlavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnunrlavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnunrlavail !== $v) {
            $this->vitboptnunrlavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNUNRLAVAIL] = true;
        }

        return $this;
    } // setVitboptnunrlavail()

    /**
     * Set the value of [vitboptnunivavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnunivavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnunivavail !== $v) {
            $this->vitboptnunivavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNUNIVAVAIL] = true;
        }

        return $this;
    } // setVitboptnunivavail()

    /**
     * Set the value of [vitboptnnoteavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnnoteavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnnoteavail !== $v) {
            $this->vitboptnnoteavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNNOTEAVAIL] = true;
        }

        return $this;
    } // setVitboptnnoteavail()

    /**
     * Set the value of [vitboptn24moavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptn24moavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptn24moavail !== $v) {
            $this->vitboptn24moavail = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTN24MOAVAIL] = true;
        }

        return $this;
    } // setVitboptn24moavail()

    /**
     * Set the value of [vitboptnmisc1] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnmisc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnmisc1 !== $v) {
            $this->vitboptnmisc1 = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNMISC1] = true;
        }

        return $this;
    } // setVitboptnmisc1()

    /**
     * Set the value of [vitboptnmisc2] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnmisc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnmisc2 !== $v) {
            $this->vitboptnmisc2 = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNMISC2] = true;
        }

        return $this;
    } // setVitboptnmisc2()

    /**
     * Set the value of [vitboptnmisc3] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setVitboptnmisc3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->vitboptnmisc3 !== $v) {
            $this->vitboptnmisc3 = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_VITBOPTNMISC3] = true;
        }

        return $this;
    } // setVitboptnmisc3()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\OptionsVi The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[OptionsViTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : OptionsViTableMap::translateFieldName('Vitboptncode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptncode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : OptionsViTableMap::translateFieldName('Vitboptngenavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptngenavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnpayavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnpayavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : OptionsViTableMap::translateFieldName('Vitboptncostavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptncostavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnpoavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnpoavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnopenavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnopenavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnphavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnphavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnunrlavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnunrlavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnunivavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnunivavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnnoteavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnnoteavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : OptionsViTableMap::translateFieldName('Vitboptn24moavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptn24moavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnmisc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnmisc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnmisc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnmisc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : OptionsViTableMap::translateFieldName('Vitboptnmisc3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->vitboptnmisc3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : OptionsViTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : OptionsViTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : OptionsViTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = OptionsViTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\OptionsVi'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(OptionsViTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildOptionsViQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see OptionsVi::setDeleted()
     * @see OptionsVi::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsViTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildOptionsViQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsViTableMap::DATABASE_NAME);
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
                OptionsViTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNCODE)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnCode';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNGENAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnGenAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNPAYAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnPayAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNCOSTAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnCostAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNPOAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnPoAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNOPENAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnOpenAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNPHAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnPhAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNUNRLAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnUnrlAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNUNIVAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnUnivAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNNOTEAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnNoteAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTN24MOAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptn24moAvail';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNMISC1)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnMisc1';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNMISC2)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnMisc2';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNMISC3)) {
            $modifiedColumns[':p' . $index++]  = 'VitbOptnMisc3';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO vi_options (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'VitbOptnCode':
                        $stmt->bindValue($identifier, $this->vitboptncode, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnGenAvail':
                        $stmt->bindValue($identifier, $this->vitboptngenavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnPayAvail':
                        $stmt->bindValue($identifier, $this->vitboptnpayavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnCostAvail':
                        $stmt->bindValue($identifier, $this->vitboptncostavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnPoAvail':
                        $stmt->bindValue($identifier, $this->vitboptnpoavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnOpenAvail':
                        $stmt->bindValue($identifier, $this->vitboptnopenavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnPhAvail':
                        $stmt->bindValue($identifier, $this->vitboptnphavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnUnrlAvail':
                        $stmt->bindValue($identifier, $this->vitboptnunrlavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnUnivAvail':
                        $stmt->bindValue($identifier, $this->vitboptnunivavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnNoteAvail':
                        $stmt->bindValue($identifier, $this->vitboptnnoteavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptn24moAvail':
                        $stmt->bindValue($identifier, $this->vitboptn24moavail, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnMisc1':
                        $stmt->bindValue($identifier, $this->vitboptnmisc1, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnMisc2':
                        $stmt->bindValue($identifier, $this->vitboptnmisc2, PDO::PARAM_STR);
                        break;
                    case 'VitbOptnMisc3':
                        $stmt->bindValue($identifier, $this->vitboptnmisc3, PDO::PARAM_STR);
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
        $pos = OptionsViTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getVitboptncode();
                break;
            case 1:
                return $this->getVitboptngenavail();
                break;
            case 2:
                return $this->getVitboptnpayavail();
                break;
            case 3:
                return $this->getVitboptncostavail();
                break;
            case 4:
                return $this->getVitboptnpoavail();
                break;
            case 5:
                return $this->getVitboptnopenavail();
                break;
            case 6:
                return $this->getVitboptnphavail();
                break;
            case 7:
                return $this->getVitboptnunrlavail();
                break;
            case 8:
                return $this->getVitboptnunivavail();
                break;
            case 9:
                return $this->getVitboptnnoteavail();
                break;
            case 10:
                return $this->getVitboptn24moavail();
                break;
            case 11:
                return $this->getVitboptnmisc1();
                break;
            case 12:
                return $this->getVitboptnmisc2();
                break;
            case 13:
                return $this->getVitboptnmisc3();
                break;
            case 14:
                return $this->getDateupdtd();
                break;
            case 15:
                return $this->getTimeupdtd();
                break;
            case 16:
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

        if (isset($alreadyDumpedObjects['OptionsVi'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OptionsVi'][$this->hashCode()] = true;
        $keys = OptionsViTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getVitboptncode(),
            $keys[1] => $this->getVitboptngenavail(),
            $keys[2] => $this->getVitboptnpayavail(),
            $keys[3] => $this->getVitboptncostavail(),
            $keys[4] => $this->getVitboptnpoavail(),
            $keys[5] => $this->getVitboptnopenavail(),
            $keys[6] => $this->getVitboptnphavail(),
            $keys[7] => $this->getVitboptnunrlavail(),
            $keys[8] => $this->getVitboptnunivavail(),
            $keys[9] => $this->getVitboptnnoteavail(),
            $keys[10] => $this->getVitboptn24moavail(),
            $keys[11] => $this->getVitboptnmisc1(),
            $keys[12] => $this->getVitboptnmisc2(),
            $keys[13] => $this->getVitboptnmisc3(),
            $keys[14] => $this->getDateupdtd(),
            $keys[15] => $this->getTimeupdtd(),
            $keys[16] => $this->getDummy(),
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
     * @return $this|\OptionsVi
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = OptionsViTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\OptionsVi
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setVitboptncode($value);
                break;
            case 1:
                $this->setVitboptngenavail($value);
                break;
            case 2:
                $this->setVitboptnpayavail($value);
                break;
            case 3:
                $this->setVitboptncostavail($value);
                break;
            case 4:
                $this->setVitboptnpoavail($value);
                break;
            case 5:
                $this->setVitboptnopenavail($value);
                break;
            case 6:
                $this->setVitboptnphavail($value);
                break;
            case 7:
                $this->setVitboptnunrlavail($value);
                break;
            case 8:
                $this->setVitboptnunivavail($value);
                break;
            case 9:
                $this->setVitboptnnoteavail($value);
                break;
            case 10:
                $this->setVitboptn24moavail($value);
                break;
            case 11:
                $this->setVitboptnmisc1($value);
                break;
            case 12:
                $this->setVitboptnmisc2($value);
                break;
            case 13:
                $this->setVitboptnmisc3($value);
                break;
            case 14:
                $this->setDateupdtd($value);
                break;
            case 15:
                $this->setTimeupdtd($value);
                break;
            case 16:
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
        $keys = OptionsViTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setVitboptncode($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setVitboptngenavail($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setVitboptnpayavail($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setVitboptncostavail($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setVitboptnpoavail($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setVitboptnopenavail($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setVitboptnphavail($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setVitboptnunrlavail($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setVitboptnunivavail($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setVitboptnnoteavail($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setVitboptn24moavail($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setVitboptnmisc1($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setVitboptnmisc2($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setVitboptnmisc3($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setDateupdtd($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setTimeupdtd($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDummy($arr[$keys[16]]);
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
     * @return $this|\OptionsVi The current object, for fluid interface
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
        $criteria = new Criteria(OptionsViTableMap::DATABASE_NAME);

        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNCODE)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNCODE, $this->vitboptncode);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNGENAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNGENAVAIL, $this->vitboptngenavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNPAYAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNPAYAVAIL, $this->vitboptnpayavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNCOSTAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNCOSTAVAIL, $this->vitboptncostavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNPOAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNPOAVAIL, $this->vitboptnpoavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNOPENAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNOPENAVAIL, $this->vitboptnopenavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNPHAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNPHAVAIL, $this->vitboptnphavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNUNRLAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNUNRLAVAIL, $this->vitboptnunrlavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNUNIVAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNUNIVAVAIL, $this->vitboptnunivavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNNOTEAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNNOTEAVAIL, $this->vitboptnnoteavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTN24MOAVAIL)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTN24MOAVAIL, $this->vitboptn24moavail);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNMISC1)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNMISC1, $this->vitboptnmisc1);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNMISC2)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNMISC2, $this->vitboptnmisc2);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_VITBOPTNMISC3)) {
            $criteria->add(OptionsViTableMap::COL_VITBOPTNMISC3, $this->vitboptnmisc3);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_DATEUPDTD)) {
            $criteria->add(OptionsViTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_TIMEUPDTD)) {
            $criteria->add(OptionsViTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(OptionsViTableMap::COL_DUMMY)) {
            $criteria->add(OptionsViTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildOptionsViQuery::create();
        $criteria->add(OptionsViTableMap::COL_VITBOPTNCODE, $this->vitboptncode);

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
        $validPk = null !== $this->getVitboptncode();

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
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getVitboptncode();
    }

    /**
     * Generic method to set the primary key (vitboptncode column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setVitboptncode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getVitboptncode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \OptionsVi (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setVitboptncode($this->getVitboptncode());
        $copyObj->setVitboptngenavail($this->getVitboptngenavail());
        $copyObj->setVitboptnpayavail($this->getVitboptnpayavail());
        $copyObj->setVitboptncostavail($this->getVitboptncostavail());
        $copyObj->setVitboptnpoavail($this->getVitboptnpoavail());
        $copyObj->setVitboptnopenavail($this->getVitboptnopenavail());
        $copyObj->setVitboptnphavail($this->getVitboptnphavail());
        $copyObj->setVitboptnunrlavail($this->getVitboptnunrlavail());
        $copyObj->setVitboptnunivavail($this->getVitboptnunivavail());
        $copyObj->setVitboptnnoteavail($this->getVitboptnnoteavail());
        $copyObj->setVitboptn24moavail($this->getVitboptn24moavail());
        $copyObj->setVitboptnmisc1($this->getVitboptnmisc1());
        $copyObj->setVitboptnmisc2($this->getVitboptnmisc2());
        $copyObj->setVitboptnmisc3($this->getVitboptnmisc3());
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
     * @return \OptionsVi Clone of current object.
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
        $this->vitboptncode = null;
        $this->vitboptngenavail = null;
        $this->vitboptnpayavail = null;
        $this->vitboptncostavail = null;
        $this->vitboptnpoavail = null;
        $this->vitboptnopenavail = null;
        $this->vitboptnphavail = null;
        $this->vitboptnunrlavail = null;
        $this->vitboptnunivavail = null;
        $this->vitboptnnoteavail = null;
        $this->vitboptn24moavail = null;
        $this->vitboptnmisc1 = null;
        $this->vitboptnmisc2 = null;
        $this->vitboptnmisc3 = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(OptionsViTableMap::DEFAULT_STRING_FORMAT);
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
