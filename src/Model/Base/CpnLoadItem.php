<?php

namespace Base;

use \CpnLoad as ChildCpnLoad;
use \CpnLoadItemQuery as ChildCpnLoadItemQuery;
use \CpnLoadQuery as ChildCpnLoadQuery;
use \Exception;
use \PDO;
use Map\CpnLoadItemTableMap;
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
 * Base class that represents a row from the 'load_cpn_item' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class CpnLoadItem implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\CpnLoadItemTableMap';


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
     * The value for the lcitlinenbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lcitlinenbr;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the lcitlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lcitlotser;

    /**
     * The value for the lcitskidnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lcitskidnbr;

    /**
     * The value for the lcitqtyord field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $lcitqtyord;

    /**
     * The value for the lcitrqstdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lcitrqstdate;

    /**
     * The value for the lcitqtyperbox field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lcitqtyperbox;

    /**
     * The value for the lcitnbrofboxes field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lcitnbrofboxes;

    /**
     * The value for the lcittotwght field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $lcittotwght;

    /**
     * The value for the lcituom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lcituom;

    /**
     * The value for the lcitqtyship field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $lcitqtyship;

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
        $this->lcitlinenbr = 0;
        $this->inititemnbr = '';
        $this->lcitlotser = '';
        $this->lcitskidnbr = 0;
        $this->lcitqtyord = '0.0000000';
        $this->lcitrqstdate = '';
        $this->lcitqtyperbox = 0;
        $this->lcitnbrofboxes = 0;
        $this->lcittotwght = '0.00';
        $this->lcituom = '';
        $this->lcitqtyship = '0.00';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\CpnLoadItem object.
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
     * Compares this with another <code>CpnLoadItem</code> instance.  If
     * <code>obj</code> is an instance of <code>CpnLoadItem</code>, delegates to
     * <code>equals(CpnLoadItem)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CpnLoadItem The current object, for fluid interface
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
     * Get the [lcitlinenbr] column value.
     *
     * @return int
     */
    public function getLcitlinenbr()
    {
        return $this->lcitlinenbr;
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
     * Get the [lcitlotser] column value.
     *
     * @return string
     */
    public function getLcitlotser()
    {
        return $this->lcitlotser;
    }

    /**
     * Get the [lcitskidnbr] column value.
     *
     * @return int
     */
    public function getLcitskidnbr()
    {
        return $this->lcitskidnbr;
    }

    /**
     * Get the [lcitqtyord] column value.
     *
     * @return string
     */
    public function getLcitqtyord()
    {
        return $this->lcitqtyord;
    }

    /**
     * Get the [lcitrqstdate] column value.
     *
     * @return string
     */
    public function getLcitrqstdate()
    {
        return $this->lcitrqstdate;
    }

    /**
     * Get the [lcitqtyperbox] column value.
     *
     * @return int
     */
    public function getLcitqtyperbox()
    {
        return $this->lcitqtyperbox;
    }

    /**
     * Get the [lcitnbrofboxes] column value.
     *
     * @return int
     */
    public function getLcitnbrofboxes()
    {
        return $this->lcitnbrofboxes;
    }

    /**
     * Get the [lcittotwght] column value.
     *
     * @return string
     */
    public function getLcittotwght()
    {
        return $this->lcittotwght;
    }

    /**
     * Get the [lcituom] column value.
     *
     * @return string
     */
    public function getLcituom()
    {
        return $this->lcituom;
    }

    /**
     * Get the [lcitqtyship] column value.
     *
     * @return string
     */
    public function getLcitqtyship()
    {
        return $this->lcitqtyship;
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
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLchdloadnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lchdloadnbr !== $v) {
            $this->lchdloadnbr = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCHDLOADNBR] = true;
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
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcorordrnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lcorordrnbr !== $v) {
            $this->lcorordrnbr = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCORORDRNBR] = true;
        }

        return $this;
    } // setLcorordrnbr()

    /**
     * Set the value of [lcitlinenbr] column.
     *
     * @param int $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcitlinenbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lcitlinenbr !== $v) {
            $this->lcitlinenbr = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITLINENBR] = true;
        }

        return $this;
    } // setLcitlinenbr()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [lcitlotser] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcitlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcitlotser !== $v) {
            $this->lcitlotser = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITLOTSER] = true;
        }

        return $this;
    } // setLcitlotser()

    /**
     * Set the value of [lcitskidnbr] column.
     *
     * @param int $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcitskidnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lcitskidnbr !== $v) {
            $this->lcitskidnbr = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITSKIDNBR] = true;
        }

        return $this;
    } // setLcitskidnbr()

    /**
     * Set the value of [lcitqtyord] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcitqtyord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcitqtyord !== $v) {
            $this->lcitqtyord = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITQTYORD] = true;
        }

        return $this;
    } // setLcitqtyord()

    /**
     * Set the value of [lcitrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcitrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcitrqstdate !== $v) {
            $this->lcitrqstdate = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITRQSTDATE] = true;
        }

        return $this;
    } // setLcitrqstdate()

    /**
     * Set the value of [lcitqtyperbox] column.
     *
     * @param int $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcitqtyperbox($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lcitqtyperbox !== $v) {
            $this->lcitqtyperbox = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITQTYPERBOX] = true;
        }

        return $this;
    } // setLcitqtyperbox()

    /**
     * Set the value of [lcitnbrofboxes] column.
     *
     * @param int $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcitnbrofboxes($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lcitnbrofboxes !== $v) {
            $this->lcitnbrofboxes = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITNBROFBOXES] = true;
        }

        return $this;
    } // setLcitnbrofboxes()

    /**
     * Set the value of [lcittotwght] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcittotwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcittotwght !== $v) {
            $this->lcittotwght = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITTOTWGHT] = true;
        }

        return $this;
    } // setLcittotwght()

    /**
     * Set the value of [lcituom] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcituom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcituom !== $v) {
            $this->lcituom = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITUOM] = true;
        }

        return $this;
    } // setLcituom()

    /**
     * Set the value of [lcitqtyship] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setLcitqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lcitqtyship !== $v) {
            $this->lcitqtyship = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_LCITQTYSHIP] = true;
        }

        return $this;
    } // setLcitqtyship()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\CpnLoadItem The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[CpnLoadItemTableMap::COL_DUMMY] = true;
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

            if ($this->lcitlinenbr !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->lcitlotser !== '') {
                return false;
            }

            if ($this->lcitskidnbr !== 0) {
                return false;
            }

            if ($this->lcitqtyord !== '0.0000000') {
                return false;
            }

            if ($this->lcitrqstdate !== '') {
                return false;
            }

            if ($this->lcitqtyperbox !== 0) {
                return false;
            }

            if ($this->lcitnbrofboxes !== 0) {
                return false;
            }

            if ($this->lcittotwght !== '0.00') {
                return false;
            }

            if ($this->lcituom !== '') {
                return false;
            }

            if ($this->lcitqtyship !== '0.00') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CpnLoadItemTableMap::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdloadnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcorordrnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcitlinenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcitlinenbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CpnLoadItemTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcitlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcitlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcitskidnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcitskidnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcitqtyord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcitqtyord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcitrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcitrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcitqtyperbox', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcitqtyperbox = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcitnbrofboxes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcitnbrofboxes = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcittotwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcittotwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcituom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcituom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CpnLoadItemTableMap::translateFieldName('Lcitqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lcitqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CpnLoadItemTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CpnLoadItemTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CpnLoadItemTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = CpnLoadItemTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CpnLoadItem'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CpnLoadItemTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCpnLoadItemQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CpnLoadItem::setDeleted()
     * @see CpnLoadItem::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadItemTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCpnLoadItemQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadItemTableMap::DATABASE_NAME);
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
                CpnLoadItemTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCHDLOADNBR)) {
            $modifiedColumns[':p' . $index++]  = 'LchdLoadNbr';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCORORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'LcorOrdrNbr';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITLINENBR)) {
            $modifiedColumns[':p' . $index++]  = 'LcitLineNbr';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'LcitLotSer';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITSKIDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'LcitSkidNbr';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITQTYORD)) {
            $modifiedColumns[':p' . $index++]  = 'LcitQtyOrd';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'LcitRqstDate';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITQTYPERBOX)) {
            $modifiedColumns[':p' . $index++]  = 'LcitQtyPerBox';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITNBROFBOXES)) {
            $modifiedColumns[':p' . $index++]  = 'LcitNbrOfBoxes';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITTOTWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'LcitTotWght';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITUOM)) {
            $modifiedColumns[':p' . $index++]  = 'LcitUom';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'LcitQtyShip';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO load_cpn_item (%s) VALUES (%s)',
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
                    case 'LcitLineNbr':
                        $stmt->bindValue($identifier, $this->lcitlinenbr, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'LcitLotSer':
                        $stmt->bindValue($identifier, $this->lcitlotser, PDO::PARAM_STR);
                        break;
                    case 'LcitSkidNbr':
                        $stmt->bindValue($identifier, $this->lcitskidnbr, PDO::PARAM_INT);
                        break;
                    case 'LcitQtyOrd':
                        $stmt->bindValue($identifier, $this->lcitqtyord, PDO::PARAM_STR);
                        break;
                    case 'LcitRqstDate':
                        $stmt->bindValue($identifier, $this->lcitrqstdate, PDO::PARAM_STR);
                        break;
                    case 'LcitQtyPerBox':
                        $stmt->bindValue($identifier, $this->lcitqtyperbox, PDO::PARAM_INT);
                        break;
                    case 'LcitNbrOfBoxes':
                        $stmt->bindValue($identifier, $this->lcitnbrofboxes, PDO::PARAM_INT);
                        break;
                    case 'LcitTotWght':
                        $stmt->bindValue($identifier, $this->lcittotwght, PDO::PARAM_STR);
                        break;
                    case 'LcitUom':
                        $stmt->bindValue($identifier, $this->lcituom, PDO::PARAM_STR);
                        break;
                    case 'LcitQtyShip':
                        $stmt->bindValue($identifier, $this->lcitqtyship, PDO::PARAM_STR);
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
        $pos = CpnLoadItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getLcitlinenbr();
                break;
            case 3:
                return $this->getInititemnbr();
                break;
            case 4:
                return $this->getLcitlotser();
                break;
            case 5:
                return $this->getLcitskidnbr();
                break;
            case 6:
                return $this->getLcitqtyord();
                break;
            case 7:
                return $this->getLcitrqstdate();
                break;
            case 8:
                return $this->getLcitqtyperbox();
                break;
            case 9:
                return $this->getLcitnbrofboxes();
                break;
            case 10:
                return $this->getLcittotwght();
                break;
            case 11:
                return $this->getLcituom();
                break;
            case 12:
                return $this->getLcitqtyship();
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

        if (isset($alreadyDumpedObjects['CpnLoadItem'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CpnLoadItem'][$this->hashCode()] = true;
        $keys = CpnLoadItemTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLchdloadnbr(),
            $keys[1] => $this->getLcorordrnbr(),
            $keys[2] => $this->getLcitlinenbr(),
            $keys[3] => $this->getInititemnbr(),
            $keys[4] => $this->getLcitlotser(),
            $keys[5] => $this->getLcitskidnbr(),
            $keys[6] => $this->getLcitqtyord(),
            $keys[7] => $this->getLcitrqstdate(),
            $keys[8] => $this->getLcitqtyperbox(),
            $keys[9] => $this->getLcitnbrofboxes(),
            $keys[10] => $this->getLcittotwght(),
            $keys[11] => $this->getLcituom(),
            $keys[12] => $this->getLcitqtyship(),
            $keys[13] => $this->getDateupdtd(),
            $keys[14] => $this->getTimeupdtd(),
            $keys[15] => $this->getDummy(),
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
     * @return $this|\CpnLoadItem
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CpnLoadItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CpnLoadItem
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
                $this->setLcitlinenbr($value);
                break;
            case 3:
                $this->setInititemnbr($value);
                break;
            case 4:
                $this->setLcitlotser($value);
                break;
            case 5:
                $this->setLcitskidnbr($value);
                break;
            case 6:
                $this->setLcitqtyord($value);
                break;
            case 7:
                $this->setLcitrqstdate($value);
                break;
            case 8:
                $this->setLcitqtyperbox($value);
                break;
            case 9:
                $this->setLcitnbrofboxes($value);
                break;
            case 10:
                $this->setLcittotwght($value);
                break;
            case 11:
                $this->setLcituom($value);
                break;
            case 12:
                $this->setLcitqtyship($value);
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
        $keys = CpnLoadItemTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setLchdloadnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setLcorordrnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setLcitlinenbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInititemnbr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLcitlotser($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setLcitskidnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setLcitqtyord($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setLcitrqstdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setLcitqtyperbox($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setLcitnbrofboxes($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setLcittotwght($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setLcituom($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setLcitqtyship($arr[$keys[12]]);
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
     * @return $this|\CpnLoadItem The current object, for fluid interface
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
        $criteria = new Criteria(CpnLoadItemTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCHDLOADNBR)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCHDLOADNBR, $this->lchdloadnbr);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCORORDRNBR)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCORORDRNBR, $this->lcorordrnbr);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITLINENBR)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITLINENBR, $this->lcitlinenbr);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_INITITEMNBR)) {
            $criteria->add(CpnLoadItemTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITLOTSER)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITLOTSER, $this->lcitlotser);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITSKIDNBR)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITSKIDNBR, $this->lcitskidnbr);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITQTYORD)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITQTYORD, $this->lcitqtyord);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITRQSTDATE)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITRQSTDATE, $this->lcitrqstdate);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITQTYPERBOX)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITQTYPERBOX, $this->lcitqtyperbox);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITNBROFBOXES)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITNBROFBOXES, $this->lcitnbrofboxes);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITTOTWGHT)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITTOTWGHT, $this->lcittotwght);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITUOM)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITUOM, $this->lcituom);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_LCITQTYSHIP)) {
            $criteria->add(CpnLoadItemTableMap::COL_LCITQTYSHIP, $this->lcitqtyship);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_DATEUPDTD)) {
            $criteria->add(CpnLoadItemTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_TIMEUPDTD)) {
            $criteria->add(CpnLoadItemTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(CpnLoadItemTableMap::COL_DUMMY)) {
            $criteria->add(CpnLoadItemTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildCpnLoadItemQuery::create();
        $criteria->add(CpnLoadItemTableMap::COL_LCHDLOADNBR, $this->lchdloadnbr);
        $criteria->add(CpnLoadItemTableMap::COL_LCORORDRNBR, $this->lcorordrnbr);
        $criteria->add(CpnLoadItemTableMap::COL_LCITLINENBR, $this->lcitlinenbr);
        $criteria->add(CpnLoadItemTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(CpnLoadItemTableMap::COL_LCITLOTSER, $this->lcitlotser);
        $criteria->add(CpnLoadItemTableMap::COL_LCITSKIDNBR, $this->lcitskidnbr);

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
            null !== $this->getLcorordrnbr() &&
            null !== $this->getLcitlinenbr() &&
            null !== $this->getInititemnbr() &&
            null !== $this->getLcitlotser() &&
            null !== $this->getLcitskidnbr();

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
        $pks[2] = $this->getLcitlinenbr();
        $pks[3] = $this->getInititemnbr();
        $pks[4] = $this->getLcitlotser();
        $pks[5] = $this->getLcitskidnbr();

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
        $this->setLcitlinenbr($keys[2]);
        $this->setInititemnbr($keys[3]);
        $this->setLcitlotser($keys[4]);
        $this->setLcitskidnbr($keys[5]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getLchdloadnbr()) && (null === $this->getLcorordrnbr()) && (null === $this->getLcitlinenbr()) && (null === $this->getInititemnbr()) && (null === $this->getLcitlotser()) && (null === $this->getLcitskidnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CpnLoadItem (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLchdloadnbr($this->getLchdloadnbr());
        $copyObj->setLcorordrnbr($this->getLcorordrnbr());
        $copyObj->setLcitlinenbr($this->getLcitlinenbr());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setLcitlotser($this->getLcitlotser());
        $copyObj->setLcitskidnbr($this->getLcitskidnbr());
        $copyObj->setLcitqtyord($this->getLcitqtyord());
        $copyObj->setLcitrqstdate($this->getLcitrqstdate());
        $copyObj->setLcitqtyperbox($this->getLcitqtyperbox());
        $copyObj->setLcitnbrofboxes($this->getLcitnbrofboxes());
        $copyObj->setLcittotwght($this->getLcittotwght());
        $copyObj->setLcituom($this->getLcituom());
        $copyObj->setLcitqtyship($this->getLcitqtyship());
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
     * @return \CpnLoadItem Clone of current object.
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
     * @return $this|\CpnLoadItem The current object (for fluent API support)
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
            $v->addCpnLoadItem($this);
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
                $this->aCpnLoad->addCpnLoadItems($this);
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
            $this->aCpnLoad->removeCpnLoadItem($this);
        }
        $this->lchdloadnbr = null;
        $this->lcorordrnbr = null;
        $this->lcitlinenbr = null;
        $this->inititemnbr = null;
        $this->lcitlotser = null;
        $this->lcitskidnbr = null;
        $this->lcitqtyord = null;
        $this->lcitrqstdate = null;
        $this->lcitqtyperbox = null;
        $this->lcitnbrofboxes = null;
        $this->lcittotwght = null;
        $this->lcituom = null;
        $this->lcitqtyship = null;
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
        return (string) $this->exportTo(CpnLoadItemTableMap::DEFAULT_STRING_FORMAT);
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
