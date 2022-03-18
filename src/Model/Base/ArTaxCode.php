<?php

namespace Base;

use \ArTaxCodeQuery as ChildArTaxCodeQuery;
use \Exception;
use \PDO;
use Map\ArTaxCodeTableMap;
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
 * Base class that represents a row from the 'ar_cust_mtax' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ArTaxCode implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ArTaxCodeTableMap';


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
     * The value for the artbmtaxcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbmtaxcode;

    /**
     * The value for the artbmtaxdesc field.
     *
     * @var        string
     */
    protected $artbmtaxdesc;

    /**
     * The value for the artbmtaxpct field.
     *
     * @var        string
     */
    protected $artbmtaxpct;

    /**
     * The value for the artbmtaxglacct field.
     *
     * @var        string
     */
    protected $artbmtaxglacct;

    /**
     * The value for the artbmtaxnote1 field.
     *
     * @var        string
     */
    protected $artbmtaxnote1;

    /**
     * The value for the artbmtaxnote2 field.
     *
     * @var        string
     */
    protected $artbmtaxnote2;

    /**
     * The value for the artbmtaxnote3 field.
     *
     * @var        string
     */
    protected $artbmtaxnote3;

    /**
     * The value for the artbmtaxnote4 field.
     *
     * @var        string
     */
    protected $artbmtaxnote4;

    /**
     * The value for the artbmtaxmaxcost field.
     *
     * @var        string
     */
    protected $artbmtaxmaxcost;

    /**
     * The value for the artbmtaxpercigar field.
     *
     * @var        string
     */
    protected $artbmtaxpercigar;

    /**
     * The value for the artbmtaxtaxtype field.
     *
     * @var        string
     */
    protected $artbmtaxtaxtype;

    /**
     * The value for the artbmtaxtaxfrt field.
     *
     * @var        string
     */
    protected $artbmtaxtaxfrt;

    /**
     * The value for the artbmtaxfrttax field.
     *
     * @var        string
     */
    protected $artbmtaxfrttax;

    /**
     * The value for the artbmtaxlimit field.
     *
     * @var        int
     */
    protected $artbmtaxlimit;

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
        $this->artbmtaxcode = '';
    }

    /**
     * Initializes internal state of Base\ArTaxCode object.
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
     * Compares this with another <code>ArTaxCode</code> instance.  If
     * <code>obj</code> is an instance of <code>ArTaxCode</code>, delegates to
     * <code>equals(ArTaxCode)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ArTaxCode The current object, for fluid interface
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
     * Get the [artbmtaxcode] column value.
     *
     * @return string
     */
    public function getArtbmtaxcode()
    {
        return $this->artbmtaxcode;
    }

    /**
     * Get the [artbmtaxdesc] column value.
     *
     * @return string
     */
    public function getArtbmtaxdesc()
    {
        return $this->artbmtaxdesc;
    }

    /**
     * Get the [artbmtaxpct] column value.
     *
     * @return string
     */
    public function getArtbmtaxpct()
    {
        return $this->artbmtaxpct;
    }

    /**
     * Get the [artbmtaxglacct] column value.
     *
     * @return string
     */
    public function getArtbmtaxglacct()
    {
        return $this->artbmtaxglacct;
    }

    /**
     * Get the [artbmtaxnote1] column value.
     *
     * @return string
     */
    public function getArtbmtaxnote1()
    {
        return $this->artbmtaxnote1;
    }

    /**
     * Get the [artbmtaxnote2] column value.
     *
     * @return string
     */
    public function getArtbmtaxnote2()
    {
        return $this->artbmtaxnote2;
    }

    /**
     * Get the [artbmtaxnote3] column value.
     *
     * @return string
     */
    public function getArtbmtaxnote3()
    {
        return $this->artbmtaxnote3;
    }

    /**
     * Get the [artbmtaxnote4] column value.
     *
     * @return string
     */
    public function getArtbmtaxnote4()
    {
        return $this->artbmtaxnote4;
    }

    /**
     * Get the [artbmtaxmaxcost] column value.
     *
     * @return string
     */
    public function getArtbmtaxmaxcost()
    {
        return $this->artbmtaxmaxcost;
    }

    /**
     * Get the [artbmtaxpercigar] column value.
     *
     * @return string
     */
    public function getArtbmtaxpercigar()
    {
        return $this->artbmtaxpercigar;
    }

    /**
     * Get the [artbmtaxtaxtype] column value.
     *
     * @return string
     */
    public function getArtbmtaxtaxtype()
    {
        return $this->artbmtaxtaxtype;
    }

    /**
     * Get the [artbmtaxtaxfrt] column value.
     *
     * @return string
     */
    public function getArtbmtaxtaxfrt()
    {
        return $this->artbmtaxtaxfrt;
    }

    /**
     * Get the [artbmtaxfrttax] column value.
     *
     * @return string
     */
    public function getArtbmtaxfrttax()
    {
        return $this->artbmtaxfrttax;
    }

    /**
     * Get the [artbmtaxlimit] column value.
     *
     * @return int
     */
    public function getArtbmtaxlimit()
    {
        return $this->artbmtaxlimit;
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
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [artbmtaxdesc] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxdesc !== $v) {
            $this->artbmtaxdesc = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXDESC] = true;
        }

        return $this;
    } // setArtbmtaxdesc()

    /**
     * Set the value of [artbmtaxpct] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxpct !== $v) {
            $this->artbmtaxpct = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXPCT] = true;
        }

        return $this;
    } // setArtbmtaxpct()

    /**
     * Set the value of [artbmtaxglacct] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxglacct !== $v) {
            $this->artbmtaxglacct = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXGLACCT] = true;
        }

        return $this;
    } // setArtbmtaxglacct()

    /**
     * Set the value of [artbmtaxnote1] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxnote1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxnote1 !== $v) {
            $this->artbmtaxnote1 = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXNOTE1] = true;
        }

        return $this;
    } // setArtbmtaxnote1()

    /**
     * Set the value of [artbmtaxnote2] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxnote2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxnote2 !== $v) {
            $this->artbmtaxnote2 = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXNOTE2] = true;
        }

        return $this;
    } // setArtbmtaxnote2()

    /**
     * Set the value of [artbmtaxnote3] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxnote3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxnote3 !== $v) {
            $this->artbmtaxnote3 = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXNOTE3] = true;
        }

        return $this;
    } // setArtbmtaxnote3()

    /**
     * Set the value of [artbmtaxnote4] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxnote4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxnote4 !== $v) {
            $this->artbmtaxnote4 = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXNOTE4] = true;
        }

        return $this;
    } // setArtbmtaxnote4()

    /**
     * Set the value of [artbmtaxmaxcost] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxmaxcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxmaxcost !== $v) {
            $this->artbmtaxmaxcost = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST] = true;
        }

        return $this;
    } // setArtbmtaxmaxcost()

    /**
     * Set the value of [artbmtaxpercigar] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxpercigar($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxpercigar !== $v) {
            $this->artbmtaxpercigar = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR] = true;
        }

        return $this;
    } // setArtbmtaxpercigar()

    /**
     * Set the value of [artbmtaxtaxtype] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxtaxtype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxtaxtype !== $v) {
            $this->artbmtaxtaxtype = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXTAXTYPE] = true;
        }

        return $this;
    } // setArtbmtaxtaxtype()

    /**
     * Set the value of [artbmtaxtaxfrt] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxtaxfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxtaxfrt !== $v) {
            $this->artbmtaxtaxfrt = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXTAXFRT] = true;
        }

        return $this;
    } // setArtbmtaxtaxfrt()

    /**
     * Set the value of [artbmtaxfrttax] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxfrttax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxfrttax !== $v) {
            $this->artbmtaxfrttax = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXFRTTAX] = true;
        }

        return $this;
    } // setArtbmtaxfrttax()

    /**
     * Set the value of [artbmtaxlimit] column.
     *
     * @param int $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setArtbmtaxlimit($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbmtaxlimit !== $v) {
            $this->artbmtaxlimit = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_ARTBMTAXLIMIT] = true;
        }

        return $this;
    } // setArtbmtaxlimit()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ArTaxCode The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ArTaxCodeTableMap::COL_DUMMY] = true;
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
            if ($this->artbmtaxcode !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxnote1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxnote1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxnote2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxnote2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxnote3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxnote3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxnote4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxnote4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxmaxcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxmaxcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxpercigar', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxpercigar = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxtaxtype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxtaxtype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxtaxfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxtaxfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxfrttax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxfrttax = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ArTaxCodeTableMap::translateFieldName('Artbmtaxlimit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxlimit = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ArTaxCodeTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ArTaxCodeTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ArTaxCodeTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = ArTaxCodeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ArTaxCode'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ArTaxCodeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildArTaxCodeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ArTaxCode::setDeleted()
     * @see ArTaxCode::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArTaxCodeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildArTaxCodeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArTaxCodeTableMap::DATABASE_NAME);
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
                ArTaxCodeTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxCode';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXDESC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxDesc';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXPCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxPct';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxGlAcct';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXNOTE1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxNote1';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXNOTE2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxNote2';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXNOTE3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxNote3';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXNOTE4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxNote4';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxMaxCost';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxPerCigar';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXTAXTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxTaxType';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXTAXFRT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxTaxFrt';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXFRTTAX)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxFrtTax';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXLIMIT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxLimit';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_cust_mtax (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArtbMtaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxDesc':
                        $stmt->bindValue($identifier, $this->artbmtaxdesc, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxPct':
                        $stmt->bindValue($identifier, $this->artbmtaxpct, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxGlAcct':
                        $stmt->bindValue($identifier, $this->artbmtaxglacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxNote1':
                        $stmt->bindValue($identifier, $this->artbmtaxnote1, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxNote2':
                        $stmt->bindValue($identifier, $this->artbmtaxnote2, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxNote3':
                        $stmt->bindValue($identifier, $this->artbmtaxnote3, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxNote4':
                        $stmt->bindValue($identifier, $this->artbmtaxnote4, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxMaxCost':
                        $stmt->bindValue($identifier, $this->artbmtaxmaxcost, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxPerCigar':
                        $stmt->bindValue($identifier, $this->artbmtaxpercigar, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxTaxType':
                        $stmt->bindValue($identifier, $this->artbmtaxtaxtype, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxTaxFrt':
                        $stmt->bindValue($identifier, $this->artbmtaxtaxfrt, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxFrtTax':
                        $stmt->bindValue($identifier, $this->artbmtaxfrttax, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxLimit':
                        $stmt->bindValue($identifier, $this->artbmtaxlimit, PDO::PARAM_INT);
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
        $pos = ArTaxCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArtbmtaxcode();
                break;
            case 1:
                return $this->getArtbmtaxdesc();
                break;
            case 2:
                return $this->getArtbmtaxpct();
                break;
            case 3:
                return $this->getArtbmtaxglacct();
                break;
            case 4:
                return $this->getArtbmtaxnote1();
                break;
            case 5:
                return $this->getArtbmtaxnote2();
                break;
            case 6:
                return $this->getArtbmtaxnote3();
                break;
            case 7:
                return $this->getArtbmtaxnote4();
                break;
            case 8:
                return $this->getArtbmtaxmaxcost();
                break;
            case 9:
                return $this->getArtbmtaxpercigar();
                break;
            case 10:
                return $this->getArtbmtaxtaxtype();
                break;
            case 11:
                return $this->getArtbmtaxtaxfrt();
                break;
            case 12:
                return $this->getArtbmtaxfrttax();
                break;
            case 13:
                return $this->getArtbmtaxlimit();
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

        if (isset($alreadyDumpedObjects['ArTaxCode'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ArTaxCode'][$this->hashCode()] = true;
        $keys = ArTaxCodeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArtbmtaxcode(),
            $keys[1] => $this->getArtbmtaxdesc(),
            $keys[2] => $this->getArtbmtaxpct(),
            $keys[3] => $this->getArtbmtaxglacct(),
            $keys[4] => $this->getArtbmtaxnote1(),
            $keys[5] => $this->getArtbmtaxnote2(),
            $keys[6] => $this->getArtbmtaxnote3(),
            $keys[7] => $this->getArtbmtaxnote4(),
            $keys[8] => $this->getArtbmtaxmaxcost(),
            $keys[9] => $this->getArtbmtaxpercigar(),
            $keys[10] => $this->getArtbmtaxtaxtype(),
            $keys[11] => $this->getArtbmtaxtaxfrt(),
            $keys[12] => $this->getArtbmtaxfrttax(),
            $keys[13] => $this->getArtbmtaxlimit(),
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
     * @return $this|\ArTaxCode
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ArTaxCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ArTaxCode
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArtbmtaxcode($value);
                break;
            case 1:
                $this->setArtbmtaxdesc($value);
                break;
            case 2:
                $this->setArtbmtaxpct($value);
                break;
            case 3:
                $this->setArtbmtaxglacct($value);
                break;
            case 4:
                $this->setArtbmtaxnote1($value);
                break;
            case 5:
                $this->setArtbmtaxnote2($value);
                break;
            case 6:
                $this->setArtbmtaxnote3($value);
                break;
            case 7:
                $this->setArtbmtaxnote4($value);
                break;
            case 8:
                $this->setArtbmtaxmaxcost($value);
                break;
            case 9:
                $this->setArtbmtaxpercigar($value);
                break;
            case 10:
                $this->setArtbmtaxtaxtype($value);
                break;
            case 11:
                $this->setArtbmtaxtaxfrt($value);
                break;
            case 12:
                $this->setArtbmtaxfrttax($value);
                break;
            case 13:
                $this->setArtbmtaxlimit($value);
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
        $keys = ArTaxCodeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArtbmtaxdesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArtbmtaxpct($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArtbmtaxglacct($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArtbmtaxnote1($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArtbmtaxnote2($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArtbmtaxnote3($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArtbmtaxnote4($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArtbmtaxmaxcost($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArtbmtaxpercigar($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArtbmtaxtaxtype($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArtbmtaxtaxfrt($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArtbmtaxfrttax($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArtbmtaxlimit($arr[$keys[13]]);
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
     * @return $this|\ArTaxCode The current object, for fluid interface
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
        $criteria = new Criteria(ArTaxCodeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXDESC)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXDESC, $this->artbmtaxdesc);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXPCT)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXPCT, $this->artbmtaxpct);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXGLACCT)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXGLACCT, $this->artbmtaxglacct);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXNOTE1)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXNOTE1, $this->artbmtaxnote1);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXNOTE2)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXNOTE2, $this->artbmtaxnote2);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXNOTE3)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXNOTE3, $this->artbmtaxnote3);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXNOTE4)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXNOTE4, $this->artbmtaxnote4);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST, $this->artbmtaxmaxcost);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR, $this->artbmtaxpercigar);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXTAXTYPE)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXTAXTYPE, $this->artbmtaxtaxtype);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXTAXFRT)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXTAXFRT, $this->artbmtaxtaxfrt);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXFRTTAX)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXFRTTAX, $this->artbmtaxfrttax);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_ARTBMTAXLIMIT)) {
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXLIMIT, $this->artbmtaxlimit);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_DATEUPDTD)) {
            $criteria->add(ArTaxCodeTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ArTaxCodeTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ArTaxCodeTableMap::COL_DUMMY)) {
            $criteria->add(ArTaxCodeTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildArTaxCodeQuery::create();
        $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);

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
        $validPk = null !== $this->getArtbmtaxcode();

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
        return $this->getArtbmtaxcode();
    }

    /**
     * Generic method to set the primary key (artbmtaxcode column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArtbmtaxcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getArtbmtaxcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ArTaxCode (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setArtbmtaxdesc($this->getArtbmtaxdesc());
        $copyObj->setArtbmtaxpct($this->getArtbmtaxpct());
        $copyObj->setArtbmtaxglacct($this->getArtbmtaxglacct());
        $copyObj->setArtbmtaxnote1($this->getArtbmtaxnote1());
        $copyObj->setArtbmtaxnote2($this->getArtbmtaxnote2());
        $copyObj->setArtbmtaxnote3($this->getArtbmtaxnote3());
        $copyObj->setArtbmtaxnote4($this->getArtbmtaxnote4());
        $copyObj->setArtbmtaxmaxcost($this->getArtbmtaxmaxcost());
        $copyObj->setArtbmtaxpercigar($this->getArtbmtaxpercigar());
        $copyObj->setArtbmtaxtaxtype($this->getArtbmtaxtaxtype());
        $copyObj->setArtbmtaxtaxfrt($this->getArtbmtaxtaxfrt());
        $copyObj->setArtbmtaxfrttax($this->getArtbmtaxfrttax());
        $copyObj->setArtbmtaxlimit($this->getArtbmtaxlimit());
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
     * @return \ArTaxCode Clone of current object.
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
        $this->artbmtaxcode = null;
        $this->artbmtaxdesc = null;
        $this->artbmtaxpct = null;
        $this->artbmtaxglacct = null;
        $this->artbmtaxnote1 = null;
        $this->artbmtaxnote2 = null;
        $this->artbmtaxnote3 = null;
        $this->artbmtaxnote4 = null;
        $this->artbmtaxmaxcost = null;
        $this->artbmtaxpercigar = null;
        $this->artbmtaxtaxtype = null;
        $this->artbmtaxtaxfrt = null;
        $this->artbmtaxfrttax = null;
        $this->artbmtaxlimit = null;
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
        return (string) $this->exportTo(ArTaxCodeTableMap::DEFAULT_STRING_FORMAT);
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
