<?php

namespace Base;

use \CpnLoad as ChildCpnLoad;
use \CpnLoadOrderQuery as ChildCpnLoadOrderQuery;
use \CpnLoadQuery as ChildCpnLoadQuery;
use \Exception;
use \PDO;
use Map\CpnLoadOrderTableMap;
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
 * Base class that represents a row from the 'load_cpn_order' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class CpnLoadOrder implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\CpnLoadOrderTableMap';


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
     * The value for the lchdloadnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lchdloadnbr;

    /**
     * The value for the lcorordrnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lcorordrnbr;

    /**
     * The value for the lcorshipid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lcorshipid;

    /**
     * The value for the lcorcustpo field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lcorcustpo;

    /**
     * The value for the lcorrqstdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lcorrqstdate;

    /**
     * The value for the lcornbrofboxes field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lcornbrofboxes;

    /**
     * The value for the lcortotwght field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $lcortotwght;

    /**
     * The value for the lcorordrtype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lcorordrtype;

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
     * @var        ChildCpnLoad
     */
    protected $aCpnLoad;

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
        $this->lchdloadnbr = 0;
        $this->lcorordrnbr = 0;
        $this->lcorshipid = '';
        $this->lcorcustpo = '';
        $this->lcorrqstdate = '';
        $this->lcornbrofboxes = 0;
        $this->lcortotwght = '0.00';
        $this->lcorordrtype = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\CpnLoadOrder object.
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
     * Compares this with another <code>CpnLoadOrder</code> instance.  If
     * <code>obj</code> is an instance of <code>CpnLoadOrder</code>, delegates to
     * <code>equals(CpnLoadOrder)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CpnLoadOrder The current object, for fluid interface
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
     * Get the [lchdloadnbr] column value.
     *
     * @return int
     */
    public function getLchdloadnbr()
    {
        return $this->lchdloadnbr;
    }

    /**
     * Get the [lcorordrnbr] column value.
     *
     * @return int
     */
    public function getLcorordrnbr()
    {
        return $this->lcorordrnbr;
    }

    /**
     * Get the [lcorshipid] column value.
     *
     * @return string
     */
    public function getLcorshipid()
    {
        return $this->lcorshipid;
    }

    /**
     * Get the [lcorcustpo] column value.
     *
     * @return string
     */
    public function getLcorcustpo()
    {
        return $this->lcorcustpo;
    }

    /**
     * Get the [lcorrqstdate] column value.
     *
     * @return string
     */
    public function getLcorrqstdate()
    {
        return $this->lcorrqstdate;
    }

    /**
     * Get the [lcornbrofboxes] column value.
     *
     * @return int
     */
    public function getLcornbrofboxes()
    {
        return $this->lcornbrofboxes;
    }

    /**
     * Get the [lcortotwght] column value.
     *
     * @return string
     */
    public function getLcortotwght()
    {
        return $this->lcortotwght;
    }

    /**
     * Get the [lcorordrtype] column value.
     *
     * @return string
     */
    public function getLcorordrtype()
    {
        return $this->lcorordrtype;
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
     * Set the value of [lchdloadnbr] column.
     *
     * @param int $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setLchdloadnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lchdloadnbr !== $v) {
            $this->lchdloadnbr = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_LCHDLOADNBR] = true;
        }

        if ($this->aCpnLoad !== null && $this->aCpnLoad->getLchdloadnbr() !== $v) {
            $this->aCpnLoad = null;
        }

        return $this;
    } // setLchdloadnbr()

    /**
     * Set the value of [lcorordrnbr] column.
     *
     * @param int $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setLcorordrnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lcorordrnbr !== $v) {
            $this->lcorordrnbr = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_LCORORDRNBR] = true;
        }

        return $this;
    } // setLcorordrnbr()

    /**
     * Set the value of [lcorshipid] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setLcorshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcorshipid !== $v) {
            $this->lcorshipid = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_LCORSHIPID] = true;
        }

        return $this;
    } // setLcorshipid()

    /**
     * Set the value of [lcorcustpo] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setLcorcustpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcorcustpo !== $v) {
            $this->lcorcustpo = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_LCORCUSTPO] = true;
        }

        return $this;
    } // setLcorcustpo()

    /**
     * Set the value of [lcorrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setLcorrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcorrqstdate !== $v) {
            $this->lcorrqstdate = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_LCORRQSTDATE] = true;
        }

        return $this;
    } // setLcorrqstdate()

    /**
     * Set the value of [lcornbrofboxes] column.
     *
     * @param int $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setLcornbrofboxes($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lcornbrofboxes !== $v) {
            $this->lcornbrofboxes = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_LCORNBROFBOXES] = true;
        }

        return $this;
    } // setLcornbrofboxes()

    /**
     * Set the value of [lcortotwght] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setLcortotwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcortotwght !== $v) {
            $this->lcortotwght = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_LCORTOTWGHT] = true;
        }

        return $this;
    } // setLcortotwght()

    /**
     * Set the value of [lcorordrtype] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setLcorordrtype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcorordrtype !== $v) {
            $this->lcorordrtype = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_LCORORDRTYPE] = true;
        }

        return $this;
    } // setLcorordrtype()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[CpnLoadOrderTableMap::COL_DUMMY] = true;
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
            if ($this->lchdloadnbr !== 0) {
                return false;
            }

            if ($this->lcorordrnbr !== 0) {
                return false;
            }

            if ($this->lcorshipid !== '') {
                return false;
            }

            if ($this->lcorcustpo !== '') {
                return false;
            }

            if ($this->lcorrqstdate !== '') {
                return false;
            }

            if ($this->lcornbrofboxes !== 0) {
                return false;
            }

            if ($this->lcortotwght !== '0.00') {
                return false;
            }

            if ($this->lcorordrtype !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CpnLoadOrderTableMap::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdloadnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CpnLoadOrderTableMap::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcorordrnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CpnLoadOrderTableMap::translateFieldName('Lcorshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcorshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CpnLoadOrderTableMap::translateFieldName('Lcorcustpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcorcustpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CpnLoadOrderTableMap::translateFieldName('Lcorrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcorrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CpnLoadOrderTableMap::translateFieldName('Lcornbrofboxes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcornbrofboxes = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CpnLoadOrderTableMap::translateFieldName('Lcortotwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcortotwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CpnLoadOrderTableMap::translateFieldName('Lcorordrtype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcorordrtype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CpnLoadOrderTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CpnLoadOrderTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CpnLoadOrderTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 11; // 11 = CpnLoadOrderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CpnLoadOrder'), 0, $e);
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
        if ($this->aCpnLoad !== null && $this->lchdloadnbr !== $this->aCpnLoad->getLchdloadnbr()) {
            $this->aCpnLoad = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(CpnLoadOrderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCpnLoadOrderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCpnLoad = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see CpnLoadOrder::setDeleted()
     * @see CpnLoadOrder::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadOrderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCpnLoadOrderQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadOrderTableMap::DATABASE_NAME);
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
                CpnLoadOrderTableMap::addInstanceToPool($this);
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

            if ($this->aCpnLoad !== null) {
                if ($this->aCpnLoad->isModified() || $this->aCpnLoad->isNew()) {
                    $affectedRows += $this->aCpnLoad->save($con);
                }
                $this->setCpnLoad($this->aCpnLoad);
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
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCHDLOADNBR)) {
            $modifiedColumns[':p' . $index++]  = 'LchdLoadNbr';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'LcorOrdrNbr';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'LcorShipId';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORCUSTPO)) {
            $modifiedColumns[':p' . $index++]  = 'LcorCustPo';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'LcorRqstDate';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORNBROFBOXES)) {
            $modifiedColumns[':p' . $index++]  = 'LcorNbrOfBoxes';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORTOTWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'LcorTotWght';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORORDRTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'LcorOrdrType';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO load_cpn_order (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'LchdLoadNbr':
                        $stmt->bindValue($identifier, $this->lchdloadnbr, PDO::PARAM_INT);
                        break;
                    case 'LcorOrdrNbr':
                        $stmt->bindValue($identifier, $this->lcorordrnbr, PDO::PARAM_INT);
                        break;
                    case 'LcorShipId':
                        $stmt->bindValue($identifier, $this->lcorshipid, PDO::PARAM_STR);
                        break;
                    case 'LcorCustPo':
                        $stmt->bindValue($identifier, $this->lcorcustpo, PDO::PARAM_STR);
                        break;
                    case 'LcorRqstDate':
                        $stmt->bindValue($identifier, $this->lcorrqstdate, PDO::PARAM_STR);
                        break;
                    case 'LcorNbrOfBoxes':
                        $stmt->bindValue($identifier, $this->lcornbrofboxes, PDO::PARAM_INT);
                        break;
                    case 'LcorTotWght':
                        $stmt->bindValue($identifier, $this->lcortotwght, PDO::PARAM_STR);
                        break;
                    case 'LcorOrdrType':
                        $stmt->bindValue($identifier, $this->lcorordrtype, PDO::PARAM_STR);
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
        $pos = CpnLoadOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getLchdloadnbr();
                break;
            case 1:
                return $this->getLcorordrnbr();
                break;
            case 2:
                return $this->getLcorshipid();
                break;
            case 3:
                return $this->getLcorcustpo();
                break;
            case 4:
                return $this->getLcorrqstdate();
                break;
            case 5:
                return $this->getLcornbrofboxes();
                break;
            case 6:
                return $this->getLcortotwght();
                break;
            case 7:
                return $this->getLcorordrtype();
                break;
            case 8:
                return $this->getDateupdtd();
                break;
            case 9:
                return $this->getTimeupdtd();
                break;
            case 10:
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

        if (isset($alreadyDumpedObjects['CpnLoadOrder'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CpnLoadOrder'][$this->hashCode()] = true;
        $keys = CpnLoadOrderTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLchdloadnbr(),
            $keys[1] => $this->getLcorordrnbr(),
            $keys[2] => $this->getLcorshipid(),
            $keys[3] => $this->getLcorcustpo(),
            $keys[4] => $this->getLcorrqstdate(),
            $keys[5] => $this->getLcornbrofboxes(),
            $keys[6] => $this->getLcortotwght(),
            $keys[7] => $this->getLcorordrtype(),
            $keys[8] => $this->getDateupdtd(),
            $keys[9] => $this->getTimeupdtd(),
            $keys[10] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCpnLoad) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'cpnLoad';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'load_cpn_header';
                        break;
                    default:
                        $key = 'CpnLoad';
                }

                $result[$key] = $this->aCpnLoad->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\CpnLoadOrder
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CpnLoadOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CpnLoadOrder
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setLchdloadnbr($value);
                break;
            case 1:
                $this->setLcorordrnbr($value);
                break;
            case 2:
                $this->setLcorshipid($value);
                break;
            case 3:
                $this->setLcorcustpo($value);
                break;
            case 4:
                $this->setLcorrqstdate($value);
                break;
            case 5:
                $this->setLcornbrofboxes($value);
                break;
            case 6:
                $this->setLcortotwght($value);
                break;
            case 7:
                $this->setLcorordrtype($value);
                break;
            case 8:
                $this->setDateupdtd($value);
                break;
            case 9:
                $this->setTimeupdtd($value);
                break;
            case 10:
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
        $keys = CpnLoadOrderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setLchdloadnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setLcorordrnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setLcorshipid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setLcorcustpo($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLcorrqstdate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setLcornbrofboxes($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setLcortotwght($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setLcorordrtype($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setDateupdtd($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setTimeupdtd($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setDummy($arr[$keys[10]]);
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
     * @return $this|\CpnLoadOrder The current object, for fluid interface
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
        $criteria = new Criteria(CpnLoadOrderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCHDLOADNBR)) {
            $criteria->add(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $this->lchdloadnbr);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORORDRNBR)) {
            $criteria->add(CpnLoadOrderTableMap::COL_LCORORDRNBR, $this->lcorordrnbr);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORSHIPID)) {
            $criteria->add(CpnLoadOrderTableMap::COL_LCORSHIPID, $this->lcorshipid);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORCUSTPO)) {
            $criteria->add(CpnLoadOrderTableMap::COL_LCORCUSTPO, $this->lcorcustpo);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORRQSTDATE)) {
            $criteria->add(CpnLoadOrderTableMap::COL_LCORRQSTDATE, $this->lcorrqstdate);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORNBROFBOXES)) {
            $criteria->add(CpnLoadOrderTableMap::COL_LCORNBROFBOXES, $this->lcornbrofboxes);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORTOTWGHT)) {
            $criteria->add(CpnLoadOrderTableMap::COL_LCORTOTWGHT, $this->lcortotwght);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_LCORORDRTYPE)) {
            $criteria->add(CpnLoadOrderTableMap::COL_LCORORDRTYPE, $this->lcorordrtype);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_DATEUPDTD)) {
            $criteria->add(CpnLoadOrderTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_TIMEUPDTD)) {
            $criteria->add(CpnLoadOrderTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(CpnLoadOrderTableMap::COL_DUMMY)) {
            $criteria->add(CpnLoadOrderTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildCpnLoadOrderQuery::create();
        $criteria->add(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $this->lchdloadnbr);
        $criteria->add(CpnLoadOrderTableMap::COL_LCORORDRNBR, $this->lcorordrnbr);

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
        $validPk = null !== $this->getLchdloadnbr() &&
            null !== $this->getLcorordrnbr();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation load to table load_cpn_header
        if ($this->aCpnLoad && $hash = spl_object_hash($this->aCpnLoad)) {
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
        $pks[0] = $this->getLchdloadnbr();
        $pks[1] = $this->getLcorordrnbr();

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
        $this->setLchdloadnbr($keys[0]);
        $this->setLcorordrnbr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getLchdloadnbr()) && (null === $this->getLcorordrnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CpnLoadOrder (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLchdloadnbr($this->getLchdloadnbr());
        $copyObj->setLcorordrnbr($this->getLcorordrnbr());
        $copyObj->setLcorshipid($this->getLcorshipid());
        $copyObj->setLcorcustpo($this->getLcorcustpo());
        $copyObj->setLcorrqstdate($this->getLcorrqstdate());
        $copyObj->setLcornbrofboxes($this->getLcornbrofboxes());
        $copyObj->setLcortotwght($this->getLcortotwght());
        $copyObj->setLcorordrtype($this->getLcorordrtype());
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
     * @return \CpnLoadOrder Clone of current object.
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
     * Declares an association between this object and a ChildCpnLoad object.
     *
     * @param  ChildCpnLoad $v
     * @return $this|\CpnLoadOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCpnLoad(ChildCpnLoad $v = null)
    {
        if ($v === null) {
            $this->setLchdloadnbr(0);
        } else {
            $this->setLchdloadnbr($v->getLchdloadnbr());
        }

        $this->aCpnLoad = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCpnLoad object, it will not be re-added.
        if ($v !== null) {
            $v->addCpnLoadOrder($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCpnLoad object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCpnLoad The associated ChildCpnLoad object.
     * @throws PropelException
     */
    public function getCpnLoad(ConnectionInterface $con = null)
    {
        if ($this->aCpnLoad === null && ($this->lchdloadnbr != 0)) {
            $this->aCpnLoad = ChildCpnLoadQuery::create()->findPk($this->lchdloadnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCpnLoad->addCpnLoadOrders($this);
             */
        }

        return $this->aCpnLoad;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCpnLoad) {
            $this->aCpnLoad->removeCpnLoadOrder($this);
        }
        $this->lchdloadnbr = null;
        $this->lcorordrnbr = null;
        $this->lcorshipid = null;
        $this->lcorcustpo = null;
        $this->lcorrqstdate = null;
        $this->lcornbrofboxes = null;
        $this->lcortotwght = null;
        $this->lcorordrtype = null;
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

        $this->aCpnLoad = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CpnLoadOrderTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        
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
