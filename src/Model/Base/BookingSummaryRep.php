<?php

namespace Base;

use \BookingSummaryRepQuery as ChildBookingSummaryRepQuery;
use \SalesPerson as ChildSalesPerson;
use \SalesPersonQuery as ChildSalesPersonQuery;
use \Exception;
use \PDO;
use Map\BookingSummaryRepTableMap;
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
 * Base class that represents a row from the 'so_book_by_rep_sumry' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class BookingSummaryRep implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\BookingSummaryRepTableMap';


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
     * The value for the arspsaleper1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the bkrptoday field.
     *
     * @var        string
     */
    protected $bkrptoday;

    /**
     * The value for the bkrpweektodate field.
     *
     * @var        string
     */
    protected $bkrpweektodate;

    /**
     * The value for the bkrpmonthtodate field.
     *
     * @var        string
     */
    protected $bkrpmonthtodate;

    /**
     * The value for the bkrp12moamt1 field.
     *
     * @var        string
     */
    protected $bkrp12moamt1;

    /**
     * The value for the bkrp12moamt2 field.
     *
     * @var        string
     */
    protected $bkrp12moamt2;

    /**
     * The value for the bkrp12moamt3 field.
     *
     * @var        string
     */
    protected $bkrp12moamt3;

    /**
     * The value for the bkrp12moamt4 field.
     *
     * @var        string
     */
    protected $bkrp12moamt4;

    /**
     * The value for the bkrp12moamt5 field.
     *
     * @var        string
     */
    protected $bkrp12moamt5;

    /**
     * The value for the bkrp12moamt6 field.
     *
     * @var        string
     */
    protected $bkrp12moamt6;

    /**
     * The value for the bkrp12moamt7 field.
     *
     * @var        string
     */
    protected $bkrp12moamt7;

    /**
     * The value for the bkrp12moamt8 field.
     *
     * @var        string
     */
    protected $bkrp12moamt8;

    /**
     * The value for the bkrp12moamt9 field.
     *
     * @var        string
     */
    protected $bkrp12moamt9;

    /**
     * The value for the bkrp12moamt10 field.
     *
     * @var        string
     */
    protected $bkrp12moamt10;

    /**
     * The value for the bkrp12moamt11 field.
     *
     * @var        string
     */
    protected $bkrp12moamt11;

    /**
     * The value for the bkrp12moamt12 field.
     *
     * @var        string
     */
    protected $bkrp12moamt12;

    /**
     * The value for the bkrplastdate field.
     *
     * @var        string
     */
    protected $bkrplastdate;

    /**
     * The value for the bkrplasttime field.
     *
     * @var        string
     */
    protected $bkrplasttime;

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
     * @var        ChildSalesPerson
     */
    protected $aSalesPerson;

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
        $this->arspsaleper1 = '';
        $this->intbwhse = '';
    }

    /**
     * Initializes internal state of Base\BookingSummaryRep object.
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
     * Compares this with another <code>BookingSummaryRep</code> instance.  If
     * <code>obj</code> is an instance of <code>BookingSummaryRep</code>, delegates to
     * <code>equals(BookingSummaryRep)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|BookingSummaryRep The current object, for fluid interface
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
     * Get the [arspsaleper1] column value.
     *
     * @return string
     */
    public function getArspsaleper1()
    {
        return $this->arspsaleper1;
    }

    /**
     * Get the [intbwhse] column value.
     *
     * @return string
     */
    public function getIntbwhse()
    {
        return $this->intbwhse;
    }

    /**
     * Get the [bkrptoday] column value.
     *
     * @return string
     */
    public function getBkrptoday()
    {
        return $this->bkrptoday;
    }

    /**
     * Get the [bkrpweektodate] column value.
     *
     * @return string
     */
    public function getBkrpweektodate()
    {
        return $this->bkrpweektodate;
    }

    /**
     * Get the [bkrpmonthtodate] column value.
     *
     * @return string
     */
    public function getBkrpmonthtodate()
    {
        return $this->bkrpmonthtodate;
    }

    /**
     * Get the [bkrp12moamt1] column value.
     *
     * @return string
     */
    public function getBkrp12moamt1()
    {
        return $this->bkrp12moamt1;
    }

    /**
     * Get the [bkrp12moamt2] column value.
     *
     * @return string
     */
    public function getBkrp12moamt2()
    {
        return $this->bkrp12moamt2;
    }

    /**
     * Get the [bkrp12moamt3] column value.
     *
     * @return string
     */
    public function getBkrp12moamt3()
    {
        return $this->bkrp12moamt3;
    }

    /**
     * Get the [bkrp12moamt4] column value.
     *
     * @return string
     */
    public function getBkrp12moamt4()
    {
        return $this->bkrp12moamt4;
    }

    /**
     * Get the [bkrp12moamt5] column value.
     *
     * @return string
     */
    public function getBkrp12moamt5()
    {
        return $this->bkrp12moamt5;
    }

    /**
     * Get the [bkrp12moamt6] column value.
     *
     * @return string
     */
    public function getBkrp12moamt6()
    {
        return $this->bkrp12moamt6;
    }

    /**
     * Get the [bkrp12moamt7] column value.
     *
     * @return string
     */
    public function getBkrp12moamt7()
    {
        return $this->bkrp12moamt7;
    }

    /**
     * Get the [bkrp12moamt8] column value.
     *
     * @return string
     */
    public function getBkrp12moamt8()
    {
        return $this->bkrp12moamt8;
    }

    /**
     * Get the [bkrp12moamt9] column value.
     *
     * @return string
     */
    public function getBkrp12moamt9()
    {
        return $this->bkrp12moamt9;
    }

    /**
     * Get the [bkrp12moamt10] column value.
     *
     * @return string
     */
    public function getBkrp12moamt10()
    {
        return $this->bkrp12moamt10;
    }

    /**
     * Get the [bkrp12moamt11] column value.
     *
     * @return string
     */
    public function getBkrp12moamt11()
    {
        return $this->bkrp12moamt11;
    }

    /**
     * Get the [bkrp12moamt12] column value.
     *
     * @return string
     */
    public function getBkrp12moamt12()
    {
        return $this->bkrp12moamt12;
    }

    /**
     * Get the [bkrplastdate] column value.
     *
     * @return string
     */
    public function getBkrplastdate()
    {
        return $this->bkrplastdate;
    }

    /**
     * Get the [bkrplasttime] column value.
     *
     * @return string
     */
    public function getBkrplasttime()
    {
        return $this->bkrplasttime;
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
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_ARSPSALEPER1] = true;
        }

        if ($this->aSalesPerson !== null && $this->aSalesPerson->getArspsaleper1() !== $v) {
            $this->aSalesPerson = null;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [bkrptoday] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrptoday($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrptoday !== $v) {
            $this->bkrptoday = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRPTODAY] = true;
        }

        return $this;
    } // setBkrptoday()

    /**
     * Set the value of [bkrpweektodate] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrpweektodate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrpweektodate !== $v) {
            $this->bkrpweektodate = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRPWEEKTODATE] = true;
        }

        return $this;
    } // setBkrpweektodate()

    /**
     * Set the value of [bkrpmonthtodate] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrpmonthtodate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrpmonthtodate !== $v) {
            $this->bkrpmonthtodate = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRPMONTHTODATE] = true;
        }

        return $this;
    } // setBkrpmonthtodate()

    /**
     * Set the value of [bkrp12moamt1] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt1 !== $v) {
            $this->bkrp12moamt1 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT1] = true;
        }

        return $this;
    } // setBkrp12moamt1()

    /**
     * Set the value of [bkrp12moamt2] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt2 !== $v) {
            $this->bkrp12moamt2 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT2] = true;
        }

        return $this;
    } // setBkrp12moamt2()

    /**
     * Set the value of [bkrp12moamt3] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt3 !== $v) {
            $this->bkrp12moamt3 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT3] = true;
        }

        return $this;
    } // setBkrp12moamt3()

    /**
     * Set the value of [bkrp12moamt4] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt4 !== $v) {
            $this->bkrp12moamt4 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT4] = true;
        }

        return $this;
    } // setBkrp12moamt4()

    /**
     * Set the value of [bkrp12moamt5] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt5 !== $v) {
            $this->bkrp12moamt5 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT5] = true;
        }

        return $this;
    } // setBkrp12moamt5()

    /**
     * Set the value of [bkrp12moamt6] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt6 !== $v) {
            $this->bkrp12moamt6 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT6] = true;
        }

        return $this;
    } // setBkrp12moamt6()

    /**
     * Set the value of [bkrp12moamt7] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt7 !== $v) {
            $this->bkrp12moamt7 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT7] = true;
        }

        return $this;
    } // setBkrp12moamt7()

    /**
     * Set the value of [bkrp12moamt8] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt8 !== $v) {
            $this->bkrp12moamt8 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT8] = true;
        }

        return $this;
    } // setBkrp12moamt8()

    /**
     * Set the value of [bkrp12moamt9] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt9 !== $v) {
            $this->bkrp12moamt9 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT9] = true;
        }

        return $this;
    } // setBkrp12moamt9()

    /**
     * Set the value of [bkrp12moamt10] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt10 !== $v) {
            $this->bkrp12moamt10 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT10] = true;
        }

        return $this;
    } // setBkrp12moamt10()

    /**
     * Set the value of [bkrp12moamt11] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt11 !== $v) {
            $this->bkrp12moamt11 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT11] = true;
        }

        return $this;
    } // setBkrp12moamt11()

    /**
     * Set the value of [bkrp12moamt12] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrp12moamt12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrp12moamt12 !== $v) {
            $this->bkrp12moamt12 = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRP12MOAMT12] = true;
        }

        return $this;
    } // setBkrp12moamt12()

    /**
     * Set the value of [bkrplastdate] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrplastdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrplastdate !== $v) {
            $this->bkrplastdate = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRPLASTDATE] = true;
        }

        return $this;
    } // setBkrplastdate()

    /**
     * Set the value of [bkrplasttime] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setBkrplasttime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bkrplasttime !== $v) {
            $this->bkrplasttime = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_BKRPLASTTIME] = true;
        }

        return $this;
    } // setBkrplasttime()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[BookingSummaryRepTableMap::COL_DUMMY] = true;
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
            if ($this->arspsaleper1 !== '') {
                return false;
            }

            if ($this->intbwhse !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : BookingSummaryRepTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : BookingSummaryRepTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrptoday', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrptoday = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrpweektodate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrpweektodate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrpmonthtodate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrpmonthtodate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrp12moamt12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrp12moamt12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrplastdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrplastdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : BookingSummaryRepTableMap::translateFieldName('Bkrplasttime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bkrplasttime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : BookingSummaryRepTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : BookingSummaryRepTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : BookingSummaryRepTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 22; // 22 = BookingSummaryRepTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\BookingSummaryRep'), 0, $e);
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
        if ($this->aSalesPerson !== null && $this->arspsaleper1 !== $this->aSalesPerson->getArspsaleper1()) {
            $this->aSalesPerson = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(BookingSummaryRepTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildBookingSummaryRepQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSalesPerson = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see BookingSummaryRep::setDeleted()
     * @see BookingSummaryRep::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingSummaryRepTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildBookingSummaryRepQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingSummaryRepTableMap::DATABASE_NAME);
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
                BookingSummaryRepTableMap::addInstanceToPool($this);
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

            if ($this->aSalesPerson !== null) {
                if ($this->aSalesPerson->isModified() || $this->aSalesPerson->isNew()) {
                    $affectedRows += $this->aSalesPerson->save($con);
                }
                $this->setSalesPerson($this->aSalesPerson);
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
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPTODAY)) {
            $modifiedColumns[':p' . $index++]  = 'BkrpToday';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPWEEKTODATE)) {
            $modifiedColumns[':p' . $index++]  = 'BkrpWeekToDate';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPMONTHTODATE)) {
            $modifiedColumns[':p' . $index++]  = 'BkrpMonthToDate';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT1)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt1';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT2)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt2';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT3)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt3';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT4)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt4';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT5)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt5';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT6)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt6';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT7)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt7';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT8)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt8';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT9)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt9';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT10)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt10';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT11)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt11';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT12)) {
            $modifiedColumns[':p' . $index++]  = 'Bkrp12moAmt12';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPLASTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'BkrpLastDate';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPLASTTIME)) {
            $modifiedColumns[':p' . $index++]  = 'BkrpLastTime';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_book_by_rep_sumry (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'BkrpToday':
                        $stmt->bindValue($identifier, $this->bkrptoday, PDO::PARAM_STR);
                        break;
                    case 'BkrpWeekToDate':
                        $stmt->bindValue($identifier, $this->bkrpweektodate, PDO::PARAM_STR);
                        break;
                    case 'BkrpMonthToDate':
                        $stmt->bindValue($identifier, $this->bkrpmonthtodate, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt1':
                        $stmt->bindValue($identifier, $this->bkrp12moamt1, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt2':
                        $stmt->bindValue($identifier, $this->bkrp12moamt2, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt3':
                        $stmt->bindValue($identifier, $this->bkrp12moamt3, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt4':
                        $stmt->bindValue($identifier, $this->bkrp12moamt4, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt5':
                        $stmt->bindValue($identifier, $this->bkrp12moamt5, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt6':
                        $stmt->bindValue($identifier, $this->bkrp12moamt6, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt7':
                        $stmt->bindValue($identifier, $this->bkrp12moamt7, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt8':
                        $stmt->bindValue($identifier, $this->bkrp12moamt8, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt9':
                        $stmt->bindValue($identifier, $this->bkrp12moamt9, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt10':
                        $stmt->bindValue($identifier, $this->bkrp12moamt10, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt11':
                        $stmt->bindValue($identifier, $this->bkrp12moamt11, PDO::PARAM_STR);
                        break;
                    case 'Bkrp12moAmt12':
                        $stmt->bindValue($identifier, $this->bkrp12moamt12, PDO::PARAM_STR);
                        break;
                    case 'BkrpLastDate':
                        $stmt->bindValue($identifier, $this->bkrplastdate, PDO::PARAM_STR);
                        break;
                    case 'BkrpLastTime':
                        $stmt->bindValue($identifier, $this->bkrplasttime, PDO::PARAM_STR);
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
        $pos = BookingSummaryRepTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArspsaleper1();
                break;
            case 1:
                return $this->getIntbwhse();
                break;
            case 2:
                return $this->getBkrptoday();
                break;
            case 3:
                return $this->getBkrpweektodate();
                break;
            case 4:
                return $this->getBkrpmonthtodate();
                break;
            case 5:
                return $this->getBkrp12moamt1();
                break;
            case 6:
                return $this->getBkrp12moamt2();
                break;
            case 7:
                return $this->getBkrp12moamt3();
                break;
            case 8:
                return $this->getBkrp12moamt4();
                break;
            case 9:
                return $this->getBkrp12moamt5();
                break;
            case 10:
                return $this->getBkrp12moamt6();
                break;
            case 11:
                return $this->getBkrp12moamt7();
                break;
            case 12:
                return $this->getBkrp12moamt8();
                break;
            case 13:
                return $this->getBkrp12moamt9();
                break;
            case 14:
                return $this->getBkrp12moamt10();
                break;
            case 15:
                return $this->getBkrp12moamt11();
                break;
            case 16:
                return $this->getBkrp12moamt12();
                break;
            case 17:
                return $this->getBkrplastdate();
                break;
            case 18:
                return $this->getBkrplasttime();
                break;
            case 19:
                return $this->getDateupdtd();
                break;
            case 20:
                return $this->getTimeupdtd();
                break;
            case 21:
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

        if (isset($alreadyDumpedObjects['BookingSummaryRep'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['BookingSummaryRep'][$this->hashCode()] = true;
        $keys = BookingSummaryRepTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArspsaleper1(),
            $keys[1] => $this->getIntbwhse(),
            $keys[2] => $this->getBkrptoday(),
            $keys[3] => $this->getBkrpweektodate(),
            $keys[4] => $this->getBkrpmonthtodate(),
            $keys[5] => $this->getBkrp12moamt1(),
            $keys[6] => $this->getBkrp12moamt2(),
            $keys[7] => $this->getBkrp12moamt3(),
            $keys[8] => $this->getBkrp12moamt4(),
            $keys[9] => $this->getBkrp12moamt5(),
            $keys[10] => $this->getBkrp12moamt6(),
            $keys[11] => $this->getBkrp12moamt7(),
            $keys[12] => $this->getBkrp12moamt8(),
            $keys[13] => $this->getBkrp12moamt9(),
            $keys[14] => $this->getBkrp12moamt10(),
            $keys[15] => $this->getBkrp12moamt11(),
            $keys[16] => $this->getBkrp12moamt12(),
            $keys[17] => $this->getBkrplastdate(),
            $keys[18] => $this->getBkrplasttime(),
            $keys[19] => $this->getDateupdtd(),
            $keys[20] => $this->getTimeupdtd(),
            $keys[21] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSalesPerson) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesPerson';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_saleper1';
                        break;
                    default:
                        $key = 'SalesPerson';
                }

                $result[$key] = $this->aSalesPerson->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\BookingSummaryRep
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = BookingSummaryRepTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\BookingSummaryRep
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArspsaleper1($value);
                break;
            case 1:
                $this->setIntbwhse($value);
                break;
            case 2:
                $this->setBkrptoday($value);
                break;
            case 3:
                $this->setBkrpweektodate($value);
                break;
            case 4:
                $this->setBkrpmonthtodate($value);
                break;
            case 5:
                $this->setBkrp12moamt1($value);
                break;
            case 6:
                $this->setBkrp12moamt2($value);
                break;
            case 7:
                $this->setBkrp12moamt3($value);
                break;
            case 8:
                $this->setBkrp12moamt4($value);
                break;
            case 9:
                $this->setBkrp12moamt5($value);
                break;
            case 10:
                $this->setBkrp12moamt6($value);
                break;
            case 11:
                $this->setBkrp12moamt7($value);
                break;
            case 12:
                $this->setBkrp12moamt8($value);
                break;
            case 13:
                $this->setBkrp12moamt9($value);
                break;
            case 14:
                $this->setBkrp12moamt10($value);
                break;
            case 15:
                $this->setBkrp12moamt11($value);
                break;
            case 16:
                $this->setBkrp12moamt12($value);
                break;
            case 17:
                $this->setBkrplastdate($value);
                break;
            case 18:
                $this->setBkrplasttime($value);
                break;
            case 19:
                $this->setDateupdtd($value);
                break;
            case 20:
                $this->setTimeupdtd($value);
                break;
            case 21:
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
        $keys = BookingSummaryRepTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArspsaleper1($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbwhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setBkrptoday($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setBkrpweektodate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setBkrpmonthtodate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setBkrp12moamt1($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setBkrp12moamt2($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setBkrp12moamt3($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setBkrp12moamt4($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setBkrp12moamt5($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setBkrp12moamt6($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setBkrp12moamt7($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setBkrp12moamt8($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setBkrp12moamt9($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setBkrp12moamt10($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setBkrp12moamt11($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setBkrp12moamt12($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setBkrplastdate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setBkrplasttime($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setDateupdtd($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setTimeupdtd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setDummy($arr[$keys[21]]);
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
     * @return $this|\BookingSummaryRep The current object, for fluid interface
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
        $criteria = new Criteria(BookingSummaryRepTableMap::DATABASE_NAME);

        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(BookingSummaryRepTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_INTBWHSE)) {
            $criteria->add(BookingSummaryRepTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPTODAY)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRPTODAY, $this->bkrptoday);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPWEEKTODATE)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRPWEEKTODATE, $this->bkrpweektodate);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPMONTHTODATE)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRPMONTHTODATE, $this->bkrpmonthtodate);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT1)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT1, $this->bkrp12moamt1);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT2)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT2, $this->bkrp12moamt2);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT3)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT3, $this->bkrp12moamt3);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT4)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT4, $this->bkrp12moamt4);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT5)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT5, $this->bkrp12moamt5);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT6)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT6, $this->bkrp12moamt6);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT7)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT7, $this->bkrp12moamt7);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT8)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT8, $this->bkrp12moamt8);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT9)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT9, $this->bkrp12moamt9);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT10)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT10, $this->bkrp12moamt10);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT11)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT11, $this->bkrp12moamt11);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRP12MOAMT12)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRP12MOAMT12, $this->bkrp12moamt12);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPLASTDATE)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRPLASTDATE, $this->bkrplastdate);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_BKRPLASTTIME)) {
            $criteria->add(BookingSummaryRepTableMap::COL_BKRPLASTTIME, $this->bkrplasttime);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_DATEUPDTD)) {
            $criteria->add(BookingSummaryRepTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_TIMEUPDTD)) {
            $criteria->add(BookingSummaryRepTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(BookingSummaryRepTableMap::COL_DUMMY)) {
            $criteria->add(BookingSummaryRepTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildBookingSummaryRepQuery::create();
        $criteria->add(BookingSummaryRepTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        $criteria->add(BookingSummaryRepTableMap::COL_INTBWHSE, $this->intbwhse);

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
        $validPk = null !== $this->getArspsaleper1() &&
            null !== $this->getIntbwhse();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation salesperson to table ar_saleper1
        if ($this->aSalesPerson && $hash = spl_object_hash($this->aSalesPerson)) {
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
        $pks[0] = $this->getArspsaleper1();
        $pks[1] = $this->getIntbwhse();

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
        $this->setArspsaleper1($keys[0]);
        $this->setIntbwhse($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getArspsaleper1()) && (null === $this->getIntbwhse());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \BookingSummaryRep (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setBkrptoday($this->getBkrptoday());
        $copyObj->setBkrpweektodate($this->getBkrpweektodate());
        $copyObj->setBkrpmonthtodate($this->getBkrpmonthtodate());
        $copyObj->setBkrp12moamt1($this->getBkrp12moamt1());
        $copyObj->setBkrp12moamt2($this->getBkrp12moamt2());
        $copyObj->setBkrp12moamt3($this->getBkrp12moamt3());
        $copyObj->setBkrp12moamt4($this->getBkrp12moamt4());
        $copyObj->setBkrp12moamt5($this->getBkrp12moamt5());
        $copyObj->setBkrp12moamt6($this->getBkrp12moamt6());
        $copyObj->setBkrp12moamt7($this->getBkrp12moamt7());
        $copyObj->setBkrp12moamt8($this->getBkrp12moamt8());
        $copyObj->setBkrp12moamt9($this->getBkrp12moamt9());
        $copyObj->setBkrp12moamt10($this->getBkrp12moamt10());
        $copyObj->setBkrp12moamt11($this->getBkrp12moamt11());
        $copyObj->setBkrp12moamt12($this->getBkrp12moamt12());
        $copyObj->setBkrplastdate($this->getBkrplastdate());
        $copyObj->setBkrplasttime($this->getBkrplasttime());
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
     * @return \BookingSummaryRep Clone of current object.
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
     * Declares an association between this object and a ChildSalesPerson object.
     *
     * @param  ChildSalesPerson $v
     * @return $this|\BookingSummaryRep The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesPerson(ChildSalesPerson $v = null)
    {
        if ($v === null) {
            $this->setArspsaleper1('');
        } else {
            $this->setArspsaleper1($v->getArspsaleper1());
        }

        $this->aSalesPerson = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSalesPerson object, it will not be re-added.
        if ($v !== null) {
            $v->addBookingSummaryRep($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSalesPerson object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSalesPerson The associated ChildSalesPerson object.
     * @throws PropelException
     */
    public function getSalesPerson(ConnectionInterface $con = null)
    {
        if ($this->aSalesPerson === null && (($this->arspsaleper1 !== "" && $this->arspsaleper1 !== null))) {
            $this->aSalesPerson = ChildSalesPersonQuery::create()->findPk($this->arspsaleper1, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesPerson->addBookingSummaryReps($this);
             */
        }

        return $this->aSalesPerson;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSalesPerson) {
            $this->aSalesPerson->removeBookingSummaryRep($this);
        }
        $this->arspsaleper1 = null;
        $this->intbwhse = null;
        $this->bkrptoday = null;
        $this->bkrpweektodate = null;
        $this->bkrpmonthtodate = null;
        $this->bkrp12moamt1 = null;
        $this->bkrp12moamt2 = null;
        $this->bkrp12moamt3 = null;
        $this->bkrp12moamt4 = null;
        $this->bkrp12moamt5 = null;
        $this->bkrp12moamt6 = null;
        $this->bkrp12moamt7 = null;
        $this->bkrp12moamt8 = null;
        $this->bkrp12moamt9 = null;
        $this->bkrp12moamt10 = null;
        $this->bkrp12moamt11 = null;
        $this->bkrp12moamt12 = null;
        $this->bkrplastdate = null;
        $this->bkrplasttime = null;
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

        $this->aSalesPerson = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BookingSummaryRepTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return // parent::preSave($con);
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
            return // parent::preInsert($con);
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
            return // parent::preUpdate($con);
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
            return // parent::preDelete($con);
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
