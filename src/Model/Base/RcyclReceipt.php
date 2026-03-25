<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \RcyclGenerator as ChildRcyclGenerator;
use \RcyclGeneratorQuery as ChildRcyclGeneratorQuery;
use \RcyclReceipt as ChildRcyclReceipt;
use \RcyclReceiptDetail as ChildRcyclReceiptDetail;
use \RcyclReceiptDetailQuery as ChildRcyclReceiptDetailQuery;
use \RcyclReceiptQuery as ChildRcyclReceiptQuery;
use \Exception;
use \PDO;
use Map\RcyclReceiptDetailTableMap;
use Map\RcyclReceiptTableMap;
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
 * Base class that represents a row from the 'rcycl_head' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class RcyclReceipt implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\RcyclReceiptTableMap';


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
     * The value for the rcyhdrcptbulk field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdrcptbulk;

    /**
     * The value for the rcyhdcntrlnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $rcyhdcntrlnbr;

    /**
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the artbgenrid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbgenrid;

    /**
     * The value for the rcyhdbolnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdbolnbr;

    /**
     * The value for the rcyhdrcptdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdrcptdate;

    /**
     * The value for the rcyhdstatus field.
     *
     * Note: this column has a database default value of: 'O'
     * @var        string
     */
    protected $rcyhdstatus;

    /**
     * The value for the rcyhdenteredby field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdenteredby;

    /**
     * The value for the rcyhdentereddate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdentereddate;

    /**
     * The value for the rcyhdenteredtime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdenteredtime;

    /**
     * The value for the rcyhdclosedby field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdclosedby;

    /**
     * The value for the rcyhdcloseddate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdcloseddate;

    /**
     * The value for the rcyhdclosedtime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdclosedtime;

    /**
     * The value for the rcyhdwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcyhdwhse;

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
     * @var        ChildCustomer
     */
    protected $aCustomer;

    /**
     * @var        ChildRcyclGenerator
     */
    protected $aRcyclGenerator;

    /**
     * @var        ObjectCollection|ChildRcyclReceiptDetail[] Collection to store aggregation of ChildRcyclReceiptDetail objects.
     */
    protected $collRcyclReceiptDetails;
    protected $collRcyclReceiptDetailsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildRcyclReceiptDetail[]
     */
    protected $rcyclReceiptDetailsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->rcyhdrcptbulk = '';
        $this->rcyhdcntrlnbr = 0;
        $this->arcucustid = '';
        $this->artbgenrid = '';
        $this->rcyhdbolnbr = '';
        $this->rcyhdrcptdate = '';
        $this->rcyhdstatus = 'O';
        $this->rcyhdenteredby = '';
        $this->rcyhdentereddate = '';
        $this->rcyhdenteredtime = '';
        $this->rcyhdclosedby = '';
        $this->rcyhdcloseddate = '';
        $this->rcyhdclosedtime = '';
        $this->rcyhdwhse = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\RcyclReceipt object.
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
     * Compares this with another <code>RcyclReceipt</code> instance.  If
     * <code>obj</code> is an instance of <code>RcyclReceipt</code>, delegates to
     * <code>equals(RcyclReceipt)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|RcyclReceipt The current object, for fluid interface
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
     * Get the [rcyhdrcptbulk] column value.
     *
     * @return string
     */
    public function getRcyhdrcptbulk()
    {
        return $this->rcyhdrcptbulk;
    }

    /**
     * Get the [rcyhdcntrlnbr] column value.
     *
     * @return int
     */
    public function getRcyhdcntrlnbr()
    {
        return $this->rcyhdcntrlnbr;
    }

    /**
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [artbgenrid] column value.
     *
     * @return string
     */
    public function getArtbgenrid()
    {
        return $this->artbgenrid;
    }

    /**
     * Get the [rcyhdbolnbr] column value.
     *
     * @return string
     */
    public function getRcyhdbolnbr()
    {
        return $this->rcyhdbolnbr;
    }

    /**
     * Get the [rcyhdrcptdate] column value.
     *
     * @return string
     */
    public function getRcyhdrcptdate()
    {
        return $this->rcyhdrcptdate;
    }

    /**
     * Get the [rcyhdstatus] column value.
     *
     * @return string
     */
    public function getRcyhdstatus()
    {
        return $this->rcyhdstatus;
    }

    /**
     * Get the [rcyhdenteredby] column value.
     *
     * @return string
     */
    public function getRcyhdenteredby()
    {
        return $this->rcyhdenteredby;
    }

    /**
     * Get the [rcyhdentereddate] column value.
     *
     * @return string
     */
    public function getRcyhdentereddate()
    {
        return $this->rcyhdentereddate;
    }

    /**
     * Get the [rcyhdenteredtime] column value.
     *
     * @return string
     */
    public function getRcyhdenteredtime()
    {
        return $this->rcyhdenteredtime;
    }

    /**
     * Get the [rcyhdclosedby] column value.
     *
     * @return string
     */
    public function getRcyhdclosedby()
    {
        return $this->rcyhdclosedby;
    }

    /**
     * Get the [rcyhdcloseddate] column value.
     *
     * @return string
     */
    public function getRcyhdcloseddate()
    {
        return $this->rcyhdcloseddate;
    }

    /**
     * Get the [rcyhdclosedtime] column value.
     *
     * @return string
     */
    public function getRcyhdclosedtime()
    {
        return $this->rcyhdclosedtime;
    }

    /**
     * Get the [rcyhdwhse] column value.
     *
     * @return string
     */
    public function getRcyhdwhse()
    {
        return $this->rcyhdwhse;
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
     * Set the value of [rcyhdrcptbulk] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdrcptbulk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdrcptbulk !== $v) {
            $this->rcyhdrcptbulk = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDRCPTBULK] = true;
        }

        return $this;
    } // setRcyhdrcptbulk()

    /**
     * Set the value of [rcyhdcntrlnbr] column.
     *
     * @param int $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdcntrlnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->rcyhdcntrlnbr !== $v) {
            $this->rcyhdcntrlnbr = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDCNTRLNBR] = true;
        }

        return $this;
    } // setRcyhdcntrlnbr()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [artbgenrid] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setArtbgenrid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbgenrid !== $v) {
            $this->artbgenrid = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_ARTBGENRID] = true;
        }

        if ($this->aRcyclGenerator !== null && $this->aRcyclGenerator->getArtbgenrid() !== $v) {
            $this->aRcyclGenerator = null;
        }

        return $this;
    } // setArtbgenrid()

    /**
     * Set the value of [rcyhdbolnbr] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdbolnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdbolnbr !== $v) {
            $this->rcyhdbolnbr = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDBOLNBR] = true;
        }

        return $this;
    } // setRcyhdbolnbr()

    /**
     * Set the value of [rcyhdrcptdate] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdrcptdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdrcptdate !== $v) {
            $this->rcyhdrcptdate = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDRCPTDATE] = true;
        }

        return $this;
    } // setRcyhdrcptdate()

    /**
     * Set the value of [rcyhdstatus] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdstatus !== $v) {
            $this->rcyhdstatus = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDSTATUS] = true;
        }

        return $this;
    } // setRcyhdstatus()

    /**
     * Set the value of [rcyhdenteredby] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdenteredby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdenteredby !== $v) {
            $this->rcyhdenteredby = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDENTEREDBY] = true;
        }

        return $this;
    } // setRcyhdenteredby()

    /**
     * Set the value of [rcyhdentereddate] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdentereddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdentereddate !== $v) {
            $this->rcyhdentereddate = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDENTEREDDATE] = true;
        }

        return $this;
    } // setRcyhdentereddate()

    /**
     * Set the value of [rcyhdenteredtime] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdenteredtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdenteredtime !== $v) {
            $this->rcyhdenteredtime = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDENTEREDTIME] = true;
        }

        return $this;
    } // setRcyhdenteredtime()

    /**
     * Set the value of [rcyhdclosedby] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdclosedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdclosedby !== $v) {
            $this->rcyhdclosedby = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDCLOSEDBY] = true;
        }

        return $this;
    } // setRcyhdclosedby()

    /**
     * Set the value of [rcyhdcloseddate] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdcloseddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdcloseddate !== $v) {
            $this->rcyhdcloseddate = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE] = true;
        }

        return $this;
    } // setRcyhdcloseddate()

    /**
     * Set the value of [rcyhdclosedtime] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdclosedtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdclosedtime !== $v) {
            $this->rcyhdclosedtime = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME] = true;
        }

        return $this;
    } // setRcyhdclosedtime()

    /**
     * Set the value of [rcyhdwhse] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setRcyhdwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdwhse !== $v) {
            $this->rcyhdwhse = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_RCYHDWHSE] = true;
        }

        return $this;
    } // setRcyhdwhse()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[RcyclReceiptTableMap::COL_DUMMY] = true;
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
            if ($this->rcyhdrcptbulk !== '') {
                return false;
            }

            if ($this->rcyhdcntrlnbr !== 0) {
                return false;
            }

            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->artbgenrid !== '') {
                return false;
            }

            if ($this->rcyhdbolnbr !== '') {
                return false;
            }

            if ($this->rcyhdrcptdate !== '') {
                return false;
            }

            if ($this->rcyhdstatus !== 'O') {
                return false;
            }

            if ($this->rcyhdenteredby !== '') {
                return false;
            }

            if ($this->rcyhdentereddate !== '') {
                return false;
            }

            if ($this->rcyhdenteredtime !== '') {
                return false;
            }

            if ($this->rcyhdclosedby !== '') {
                return false;
            }

            if ($this->rcyhdcloseddate !== '') {
                return false;
            }

            if ($this->rcyhdclosedtime !== '') {
                return false;
            }

            if ($this->rcyhdwhse !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdrcptbulk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdcntrlnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : RcyclReceiptTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : RcyclReceiptTableMap::translateFieldName('Artbgenrid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbgenrid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdbolnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdbolnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdrcptdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdrcptdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdstatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdstatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdenteredby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdenteredby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdentereddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdentereddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdenteredtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdenteredtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdclosedby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdclosedby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdcloseddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdcloseddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdclosedtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdclosedtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : RcyclReceiptTableMap::translateFieldName('Rcyhdwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : RcyclReceiptTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : RcyclReceiptTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : RcyclReceiptTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = RcyclReceiptTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\RcyclReceipt'), 0, $e);
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
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
        if ($this->aRcyclGenerator !== null && $this->artbgenrid !== $this->aRcyclGenerator->getArtbgenrid()) {
            $this->aRcyclGenerator = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildRcyclReceiptQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->aRcyclGenerator = null;
            $this->collRcyclReceiptDetails = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see RcyclReceipt::setDeleted()
     * @see RcyclReceipt::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildRcyclReceiptQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptTableMap::DATABASE_NAME);
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
                RcyclReceiptTableMap::addInstanceToPool($this);
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

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

            if ($this->aRcyclGenerator !== null) {
                if ($this->aRcyclGenerator->isModified() || $this->aRcyclGenerator->isNew()) {
                    $affectedRows += $this->aRcyclGenerator->save($con);
                }
                $this->setRcyclGenerator($this->aRcyclGenerator);
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

            if ($this->rcyclReceiptDetailsScheduledForDeletion !== null) {
                if (!$this->rcyclReceiptDetailsScheduledForDeletion->isEmpty()) {
                    \RcyclReceiptDetailQuery::create()
                        ->filterByPrimaryKeys($this->rcyclReceiptDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->rcyclReceiptDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collRcyclReceiptDetails !== null) {
                foreach ($this->collRcyclReceiptDetails as $referrerFK) {
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
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDRCPTBULK)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdRcptBulk';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdCntrlNbr';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_ARTBGENRID)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbGenrId';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDBOLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdBolNbr';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDRCPTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdRcptDate';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDSTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdStatus';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDENTEREDBY)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdEnteredBy';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDENTEREDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdEnteredDate';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDENTEREDTIME)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdEnteredTime';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDCLOSEDBY)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdClosedBy';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdClosedDate';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdClosedTime';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdWhse';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO rcycl_head (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'RcyhdRcptBulk':
                        $stmt->bindValue($identifier, $this->rcyhdrcptbulk, PDO::PARAM_STR);
                        break;
                    case 'RcyhdCntrlNbr':
                        $stmt->bindValue($identifier, $this->rcyhdcntrlnbr, PDO::PARAM_INT);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArtbGenrId':
                        $stmt->bindValue($identifier, $this->artbgenrid, PDO::PARAM_STR);
                        break;
                    case 'RcyhdBolNbr':
                        $stmt->bindValue($identifier, $this->rcyhdbolnbr, PDO::PARAM_STR);
                        break;
                    case 'RcyhdRcptDate':
                        $stmt->bindValue($identifier, $this->rcyhdrcptdate, PDO::PARAM_STR);
                        break;
                    case 'RcyhdStatus':
                        $stmt->bindValue($identifier, $this->rcyhdstatus, PDO::PARAM_STR);
                        break;
                    case 'RcyhdEnteredBy':
                        $stmt->bindValue($identifier, $this->rcyhdenteredby, PDO::PARAM_STR);
                        break;
                    case 'RcyhdEnteredDate':
                        $stmt->bindValue($identifier, $this->rcyhdentereddate, PDO::PARAM_STR);
                        break;
                    case 'RcyhdEnteredTime':
                        $stmt->bindValue($identifier, $this->rcyhdenteredtime, PDO::PARAM_STR);
                        break;
                    case 'RcyhdClosedBy':
                        $stmt->bindValue($identifier, $this->rcyhdclosedby, PDO::PARAM_STR);
                        break;
                    case 'RcyhdClosedDate':
                        $stmt->bindValue($identifier, $this->rcyhdcloseddate, PDO::PARAM_STR);
                        break;
                    case 'RcyhdClosedTime':
                        $stmt->bindValue($identifier, $this->rcyhdclosedtime, PDO::PARAM_STR);
                        break;
                    case 'RcyhdWhse':
                        $stmt->bindValue($identifier, $this->rcyhdwhse, PDO::PARAM_STR);
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
        $pos = RcyclReceiptTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getRcyhdrcptbulk();
                break;
            case 1:
                return $this->getRcyhdcntrlnbr();
                break;
            case 2:
                return $this->getArcucustid();
                break;
            case 3:
                return $this->getArtbgenrid();
                break;
            case 4:
                return $this->getRcyhdbolnbr();
                break;
            case 5:
                return $this->getRcyhdrcptdate();
                break;
            case 6:
                return $this->getRcyhdstatus();
                break;
            case 7:
                return $this->getRcyhdenteredby();
                break;
            case 8:
                return $this->getRcyhdentereddate();
                break;
            case 9:
                return $this->getRcyhdenteredtime();
                break;
            case 10:
                return $this->getRcyhdclosedby();
                break;
            case 11:
                return $this->getRcyhdcloseddate();
                break;
            case 12:
                return $this->getRcyhdclosedtime();
                break;
            case 13:
                return $this->getRcyhdwhse();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['RcyclReceipt'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RcyclReceipt'][$this->hashCode()] = true;
        $keys = RcyclReceiptTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRcyhdrcptbulk(),
            $keys[1] => $this->getRcyhdcntrlnbr(),
            $keys[2] => $this->getArcucustid(),
            $keys[3] => $this->getArtbgenrid(),
            $keys[4] => $this->getRcyhdbolnbr(),
            $keys[5] => $this->getRcyhdrcptdate(),
            $keys[6] => $this->getRcyhdstatus(),
            $keys[7] => $this->getRcyhdenteredby(),
            $keys[8] => $this->getRcyhdentereddate(),
            $keys[9] => $this->getRcyhdenteredtime(),
            $keys[10] => $this->getRcyhdclosedby(),
            $keys[11] => $this->getRcyhdcloseddate(),
            $keys[12] => $this->getRcyhdclosedtime(),
            $keys[13] => $this->getRcyhdwhse(),
            $keys[14] => $this->getDateupdtd(),
            $keys[15] => $this->getTimeupdtd(),
            $keys[16] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCustomer) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customer';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cust_mast';
                        break;
                    default:
                        $key = 'Customer';
                }

                $result[$key] = $this->aCustomer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRcyclGenerator) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'rcyclGenerator';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'rcycl_generator';
                        break;
                    default:
                        $key = 'RcyclGenerator';
                }

                $result[$key] = $this->aRcyclGenerator->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collRcyclReceiptDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'rcyclReceiptDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'rcycl_dets';
                        break;
                    default:
                        $key = 'RcyclReceiptDetails';
                }

                $result[$key] = $this->collRcyclReceiptDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\RcyclReceipt
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = RcyclReceiptTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\RcyclReceipt
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setRcyhdrcptbulk($value);
                break;
            case 1:
                $this->setRcyhdcntrlnbr($value);
                break;
            case 2:
                $this->setArcucustid($value);
                break;
            case 3:
                $this->setArtbgenrid($value);
                break;
            case 4:
                $this->setRcyhdbolnbr($value);
                break;
            case 5:
                $this->setRcyhdrcptdate($value);
                break;
            case 6:
                $this->setRcyhdstatus($value);
                break;
            case 7:
                $this->setRcyhdenteredby($value);
                break;
            case 8:
                $this->setRcyhdentereddate($value);
                break;
            case 9:
                $this->setRcyhdenteredtime($value);
                break;
            case 10:
                $this->setRcyhdclosedby($value);
                break;
            case 11:
                $this->setRcyhdcloseddate($value);
                break;
            case 12:
                $this->setRcyhdclosedtime($value);
                break;
            case 13:
                $this->setRcyhdwhse($value);
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
        $keys = RcyclReceiptTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setRcyhdrcptbulk($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setRcyhdcntrlnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArcucustid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArtbgenrid($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setRcyhdbolnbr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setRcyhdrcptdate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setRcyhdstatus($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setRcyhdenteredby($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setRcyhdentereddate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setRcyhdenteredtime($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setRcyhdclosedby($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setRcyhdcloseddate($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setRcyhdclosedtime($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setRcyhdwhse($arr[$keys[13]]);
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
     * @return $this|\RcyclReceipt The current object, for fluid interface
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
        $criteria = new Criteria(RcyclReceiptTableMap::DATABASE_NAME);

        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDRCPTBULK)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDRCPTBULK, $this->rcyhdrcptbulk);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $this->rcyhdcntrlnbr);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_ARCUCUSTID)) {
            $criteria->add(RcyclReceiptTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_ARTBGENRID)) {
            $criteria->add(RcyclReceiptTableMap::COL_ARTBGENRID, $this->artbgenrid);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDBOLNBR)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDBOLNBR, $this->rcyhdbolnbr);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDRCPTDATE)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDRCPTDATE, $this->rcyhdrcptdate);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDSTATUS)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDSTATUS, $this->rcyhdstatus);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDENTEREDBY)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDENTEREDBY, $this->rcyhdenteredby);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDENTEREDDATE)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDENTEREDDATE, $this->rcyhdentereddate);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDENTEREDTIME)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDENTEREDTIME, $this->rcyhdenteredtime);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDCLOSEDBY)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDCLOSEDBY, $this->rcyhdclosedby);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE, $this->rcyhdcloseddate);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME, $this->rcyhdclosedtime);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_RCYHDWHSE)) {
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDWHSE, $this->rcyhdwhse);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_DATEUPDTD)) {
            $criteria->add(RcyclReceiptTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_TIMEUPDTD)) {
            $criteria->add(RcyclReceiptTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(RcyclReceiptTableMap::COL_DUMMY)) {
            $criteria->add(RcyclReceiptTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildRcyclReceiptQuery::create();
        $criteria->add(RcyclReceiptTableMap::COL_RCYHDRCPTBULK, $this->rcyhdrcptbulk);
        $criteria->add(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $this->rcyhdcntrlnbr);

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
        $validPk = null !== $this->getRcyhdrcptbulk() &&
            null !== $this->getRcyhdcntrlnbr();

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
        $pks[0] = $this->getRcyhdrcptbulk();
        $pks[1] = $this->getRcyhdcntrlnbr();

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
        $this->setRcyhdrcptbulk($keys[0]);
        $this->setRcyhdcntrlnbr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getRcyhdrcptbulk()) && (null === $this->getRcyhdcntrlnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \RcyclReceipt (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRcyhdrcptbulk($this->getRcyhdrcptbulk());
        $copyObj->setRcyhdcntrlnbr($this->getRcyhdcntrlnbr());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArtbgenrid($this->getArtbgenrid());
        $copyObj->setRcyhdbolnbr($this->getRcyhdbolnbr());
        $copyObj->setRcyhdrcptdate($this->getRcyhdrcptdate());
        $copyObj->setRcyhdstatus($this->getRcyhdstatus());
        $copyObj->setRcyhdenteredby($this->getRcyhdenteredby());
        $copyObj->setRcyhdentereddate($this->getRcyhdentereddate());
        $copyObj->setRcyhdenteredtime($this->getRcyhdenteredtime());
        $copyObj->setRcyhdclosedby($this->getRcyhdclosedby());
        $copyObj->setRcyhdcloseddate($this->getRcyhdcloseddate());
        $copyObj->setRcyhdclosedtime($this->getRcyhdclosedtime());
        $copyObj->setRcyhdwhse($this->getRcyhdwhse());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getRcyclReceiptDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRcyclReceiptDetail($relObj->copy($deepCopy));
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
     * @return \RcyclReceipt Clone of current object.
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
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addRcyclReceipt($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomer object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCustomer The associated ChildCustomer object.
     * @throws PropelException
     */
    public function getCustomer(ConnectionInterface $con = null)
    {
        if ($this->aCustomer === null && (($this->arcucustid !== "" && $this->arcucustid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->arcucustid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addRcyclReceipts($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a ChildRcyclGenerator object.
     *
     * @param  ChildRcyclGenerator $v
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRcyclGenerator(ChildRcyclGenerator $v = null)
    {
        if ($v === null) {
            $this->setArtbgenrid('');
        } else {
            $this->setArtbgenrid($v->getArtbgenrid());
        }

        $this->aRcyclGenerator = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildRcyclGenerator object, it will not be re-added.
        if ($v !== null) {
            $v->addRcyclReceipt($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildRcyclGenerator object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildRcyclGenerator The associated ChildRcyclGenerator object.
     * @throws PropelException
     */
    public function getRcyclGenerator(ConnectionInterface $con = null)
    {
        if ($this->aRcyclGenerator === null && (($this->artbgenrid !== "" && $this->artbgenrid !== null))) {
            $this->aRcyclGenerator = ChildRcyclGeneratorQuery::create()->findPk($this->artbgenrid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRcyclGenerator->addRcyclReceipts($this);
             */
        }

        return $this->aRcyclGenerator;
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
        if ('RcyclReceiptDetail' == $relationName) {
            $this->initRcyclReceiptDetails();
            return;
        }
    }

    /**
     * Clears out the collRcyclReceiptDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addRcyclReceiptDetails()
     */
    public function clearRcyclReceiptDetails()
    {
        $this->collRcyclReceiptDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collRcyclReceiptDetails collection loaded partially.
     */
    public function resetPartialRcyclReceiptDetails($v = true)
    {
        $this->collRcyclReceiptDetailsPartial = $v;
    }

    /**
     * Initializes the collRcyclReceiptDetails collection.
     *
     * By default this just sets the collRcyclReceiptDetails collection to an empty array (like clearcollRcyclReceiptDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRcyclReceiptDetails($overrideExisting = true)
    {
        if (null !== $this->collRcyclReceiptDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = RcyclReceiptDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collRcyclReceiptDetails = new $collectionClassName;
        $this->collRcyclReceiptDetails->setModel('\RcyclReceiptDetail');
    }

    /**
     * Gets an array of ChildRcyclReceiptDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildRcyclReceipt is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildRcyclReceiptDetail[] List of ChildRcyclReceiptDetail objects
     * @throws PropelException
     */
    public function getRcyclReceiptDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collRcyclReceiptDetailsPartial && !$this->isNew();
        if (null === $this->collRcyclReceiptDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRcyclReceiptDetails) {
                // return empty collection
                $this->initRcyclReceiptDetails();
            } else {
                $collRcyclReceiptDetails = ChildRcyclReceiptDetailQuery::create(null, $criteria)
                    ->filterByRcyclReceipt($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collRcyclReceiptDetailsPartial && count($collRcyclReceiptDetails)) {
                        $this->initRcyclReceiptDetails(false);

                        foreach ($collRcyclReceiptDetails as $obj) {
                            if (false == $this->collRcyclReceiptDetails->contains($obj)) {
                                $this->collRcyclReceiptDetails->append($obj);
                            }
                        }

                        $this->collRcyclReceiptDetailsPartial = true;
                    }

                    return $collRcyclReceiptDetails;
                }

                if ($partial && $this->collRcyclReceiptDetails) {
                    foreach ($this->collRcyclReceiptDetails as $obj) {
                        if ($obj->isNew()) {
                            $collRcyclReceiptDetails[] = $obj;
                        }
                    }
                }

                $this->collRcyclReceiptDetails = $collRcyclReceiptDetails;
                $this->collRcyclReceiptDetailsPartial = false;
            }
        }

        return $this->collRcyclReceiptDetails;
    }

    /**
     * Sets a collection of ChildRcyclReceiptDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $rcyclReceiptDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildRcyclReceipt The current object (for fluent API support)
     */
    public function setRcyclReceiptDetails(Collection $rcyclReceiptDetails, ConnectionInterface $con = null)
    {
        /** @var ChildRcyclReceiptDetail[] $rcyclReceiptDetailsToDelete */
        $rcyclReceiptDetailsToDelete = $this->getRcyclReceiptDetails(new Criteria(), $con)->diff($rcyclReceiptDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->rcyclReceiptDetailsScheduledForDeletion = clone $rcyclReceiptDetailsToDelete;

        foreach ($rcyclReceiptDetailsToDelete as $rcyclReceiptDetailRemoved) {
            $rcyclReceiptDetailRemoved->setRcyclReceipt(null);
        }

        $this->collRcyclReceiptDetails = null;
        foreach ($rcyclReceiptDetails as $rcyclReceiptDetail) {
            $this->addRcyclReceiptDetail($rcyclReceiptDetail);
        }

        $this->collRcyclReceiptDetails = $rcyclReceiptDetails;
        $this->collRcyclReceiptDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RcyclReceiptDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related RcyclReceiptDetail objects.
     * @throws PropelException
     */
    public function countRcyclReceiptDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collRcyclReceiptDetailsPartial && !$this->isNew();
        if (null === $this->collRcyclReceiptDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRcyclReceiptDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRcyclReceiptDetails());
            }

            $query = ChildRcyclReceiptDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRcyclReceipt($this)
                ->count($con);
        }

        return count($this->collRcyclReceiptDetails);
    }

    /**
     * Method called to associate a ChildRcyclReceiptDetail object to this object
     * through the ChildRcyclReceiptDetail foreign key attribute.
     *
     * @param  ChildRcyclReceiptDetail $l ChildRcyclReceiptDetail
     * @return $this|\RcyclReceipt The current object (for fluent API support)
     */
    public function addRcyclReceiptDetail(ChildRcyclReceiptDetail $l)
    {
        if ($this->collRcyclReceiptDetails === null) {
            $this->initRcyclReceiptDetails();
            $this->collRcyclReceiptDetailsPartial = true;
        }

        if (!$this->collRcyclReceiptDetails->contains($l)) {
            $this->doAddRcyclReceiptDetail($l);

            if ($this->rcyclReceiptDetailsScheduledForDeletion and $this->rcyclReceiptDetailsScheduledForDeletion->contains($l)) {
                $this->rcyclReceiptDetailsScheduledForDeletion->remove($this->rcyclReceiptDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildRcyclReceiptDetail $rcyclReceiptDetail The ChildRcyclReceiptDetail object to add.
     */
    protected function doAddRcyclReceiptDetail(ChildRcyclReceiptDetail $rcyclReceiptDetail)
    {
        $this->collRcyclReceiptDetails[]= $rcyclReceiptDetail;
        $rcyclReceiptDetail->setRcyclReceipt($this);
    }

    /**
     * @param  ChildRcyclReceiptDetail $rcyclReceiptDetail The ChildRcyclReceiptDetail object to remove.
     * @return $this|ChildRcyclReceipt The current object (for fluent API support)
     */
    public function removeRcyclReceiptDetail(ChildRcyclReceiptDetail $rcyclReceiptDetail)
    {
        if ($this->getRcyclReceiptDetails()->contains($rcyclReceiptDetail)) {
            $pos = $this->collRcyclReceiptDetails->search($rcyclReceiptDetail);
            $this->collRcyclReceiptDetails->remove($pos);
            if (null === $this->rcyclReceiptDetailsScheduledForDeletion) {
                $this->rcyclReceiptDetailsScheduledForDeletion = clone $this->collRcyclReceiptDetails;
                $this->rcyclReceiptDetailsScheduledForDeletion->clear();
            }
            $this->rcyclReceiptDetailsScheduledForDeletion[]= clone $rcyclReceiptDetail;
            $rcyclReceiptDetail->setRcyclReceipt(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RcyclReceipt is new, it will return
     * an empty collection; or if this RcyclReceipt has previously
     * been saved, it will retrieve related RcyclReceiptDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RcyclReceipt.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildRcyclReceiptDetail[] List of ChildRcyclReceiptDetail objects
     */
    public function getRcyclReceiptDetailsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildRcyclReceiptDetailQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getRcyclReceiptDetails($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RcyclReceipt is new, it will return
     * an empty collection; or if this RcyclReceipt has previously
     * been saved, it will retrieve related RcyclReceiptDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RcyclReceipt.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildRcyclReceiptDetail[] List of ChildRcyclReceiptDetail objects
     */
    public function getRcyclReceiptDetailsJoinUnitofMeasureSale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildRcyclReceiptDetailQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasureSale', $joinBehavior);

        return $this->getRcyclReceiptDetails($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeRcyclReceipt($this);
        }
        if (null !== $this->aRcyclGenerator) {
            $this->aRcyclGenerator->removeRcyclReceipt($this);
        }
        $this->rcyhdrcptbulk = null;
        $this->rcyhdcntrlnbr = null;
        $this->arcucustid = null;
        $this->artbgenrid = null;
        $this->rcyhdbolnbr = null;
        $this->rcyhdrcptdate = null;
        $this->rcyhdstatus = null;
        $this->rcyhdenteredby = null;
        $this->rcyhdentereddate = null;
        $this->rcyhdenteredtime = null;
        $this->rcyhdclosedby = null;
        $this->rcyhdcloseddate = null;
        $this->rcyhdclosedtime = null;
        $this->rcyhdwhse = null;
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
            if ($this->collRcyclReceiptDetails) {
                foreach ($this->collRcyclReceiptDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collRcyclReceiptDetails = null;
        $this->aCustomer = null;
        $this->aRcyclGenerator = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RcyclReceiptTableMap::DEFAULT_STRING_FORMAT);
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
