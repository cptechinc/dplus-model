<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItemPricingQuery as ChildItemPricingQuery;
use \Exception;
use \PDO;
use Map\ItemPricingTableMap;
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
 * Base class that represents a row from the 'inv_item_price' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItemPricing implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItemPricingTableMap';


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
     * The value for the inprpricbase field.
     *
     * @var        string
     */
    protected $inprpricbase;

    /**
     * The value for the inprpricunit1 field.
     *
     * @var        int
     */
    protected $inprpricunit1;

    /**
     * The value for the inprpricpric1 field.
     *
     * @var        string
     */
    protected $inprpricpric1;

    /**
     * The value for the inprpricunit2 field.
     *
     * @var        int
     */
    protected $inprpricunit2;

    /**
     * The value for the inprpricpric2 field.
     *
     * @var        string
     */
    protected $inprpricpric2;

    /**
     * The value for the inprpricunit3 field.
     *
     * @var        int
     */
    protected $inprpricunit3;

    /**
     * The value for the inprpricpric3 field.
     *
     * @var        string
     */
    protected $inprpricpric3;

    /**
     * The value for the inprpricunit4 field.
     *
     * @var        int
     */
    protected $inprpricunit4;

    /**
     * The value for the inprpricpric4 field.
     *
     * @var        string
     */
    protected $inprpricpric4;

    /**
     * The value for the inprpricunit5 field.
     *
     * @var        int
     */
    protected $inprpricunit5;

    /**
     * The value for the inprpricpric5 field.
     *
     * @var        string
     */
    protected $inprpricpric5;

    /**
     * The value for the inprpricunit6 field.
     *
     * @var        int
     */
    protected $inprpricunit6;

    /**
     * The value for the inprpricpric6 field.
     *
     * @var        string
     */
    protected $inprpricpric6;

    /**
     * The value for the inprpricunit7 field.
     *
     * @var        int
     */
    protected $inprpricunit7;

    /**
     * The value for the inprpricpric7 field.
     *
     * @var        string
     */
    protected $inprpricpric7;

    /**
     * The value for the inprpricunit8 field.
     *
     * @var        int
     */
    protected $inprpricunit8;

    /**
     * The value for the inprpricpric8 field.
     *
     * @var        string
     */
    protected $inprpricpric8;

    /**
     * The value for the inprpricunit9 field.
     *
     * @var        int
     */
    protected $inprpricunit9;

    /**
     * The value for the inprpricpric9 field.
     *
     * @var        string
     */
    protected $inprpricpric9;

    /**
     * The value for the inprpricunit10 field.
     *
     * @var        int
     */
    protected $inprpricunit10;

    /**
     * The value for the inprpricpric10 field.
     *
     * @var        string
     */
    protected $inprpricpric10;

    /**
     * The value for the inprpriclastdate field.
     *
     * @var        string
     */
    protected $inprpriclastdate;

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
     * @var        ChildItemMasterItem one-to-one related ChildItemMasterItem object
     */
    protected $singleItemMasterItem;

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
     * Initializes internal state of Base\ItemPricing object.
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
     * Compares this with another <code>ItemPricing</code> instance.  If
     * <code>obj</code> is an instance of <code>ItemPricing</code>, delegates to
     * <code>equals(ItemPricing)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ItemPricing The current object, for fluid interface
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
     * Get the [inprpricbase] column value.
     *
     * @return string
     */
    public function getInprpricbase()
    {
        return $this->inprpricbase;
    }

    /**
     * Get the [inprpricunit1] column value.
     *
     * @return int
     */
    public function getInprpricunit1()
    {
        return $this->inprpricunit1;
    }

    /**
     * Get the [inprpricpric1] column value.
     *
     * @return string
     */
    public function getInprpricpric1()
    {
        return $this->inprpricpric1;
    }

    /**
     * Get the [inprpricunit2] column value.
     *
     * @return int
     */
    public function getInprpricunit2()
    {
        return $this->inprpricunit2;
    }

    /**
     * Get the [inprpricpric2] column value.
     *
     * @return string
     */
    public function getInprpricpric2()
    {
        return $this->inprpricpric2;
    }

    /**
     * Get the [inprpricunit3] column value.
     *
     * @return int
     */
    public function getInprpricunit3()
    {
        return $this->inprpricunit3;
    }

    /**
     * Get the [inprpricpric3] column value.
     *
     * @return string
     */
    public function getInprpricpric3()
    {
        return $this->inprpricpric3;
    }

    /**
     * Get the [inprpricunit4] column value.
     *
     * @return int
     */
    public function getInprpricunit4()
    {
        return $this->inprpricunit4;
    }

    /**
     * Get the [inprpricpric4] column value.
     *
     * @return string
     */
    public function getInprpricpric4()
    {
        return $this->inprpricpric4;
    }

    /**
     * Get the [inprpricunit5] column value.
     *
     * @return int
     */
    public function getInprpricunit5()
    {
        return $this->inprpricunit5;
    }

    /**
     * Get the [inprpricpric5] column value.
     *
     * @return string
     */
    public function getInprpricpric5()
    {
        return $this->inprpricpric5;
    }

    /**
     * Get the [inprpricunit6] column value.
     *
     * @return int
     */
    public function getInprpricunit6()
    {
        return $this->inprpricunit6;
    }

    /**
     * Get the [inprpricpric6] column value.
     *
     * @return string
     */
    public function getInprpricpric6()
    {
        return $this->inprpricpric6;
    }

    /**
     * Get the [inprpricunit7] column value.
     *
     * @return int
     */
    public function getInprpricunit7()
    {
        return $this->inprpricunit7;
    }

    /**
     * Get the [inprpricpric7] column value.
     *
     * @return string
     */
    public function getInprpricpric7()
    {
        return $this->inprpricpric7;
    }

    /**
     * Get the [inprpricunit8] column value.
     *
     * @return int
     */
    public function getInprpricunit8()
    {
        return $this->inprpricunit8;
    }

    /**
     * Get the [inprpricpric8] column value.
     *
     * @return string
     */
    public function getInprpricpric8()
    {
        return $this->inprpricpric8;
    }

    /**
     * Get the [inprpricunit9] column value.
     *
     * @return int
     */
    public function getInprpricunit9()
    {
        return $this->inprpricunit9;
    }

    /**
     * Get the [inprpricpric9] column value.
     *
     * @return string
     */
    public function getInprpricpric9()
    {
        return $this->inprpricpric9;
    }

    /**
     * Get the [inprpricunit10] column value.
     *
     * @return int
     */
    public function getInprpricunit10()
    {
        return $this->inprpricunit10;
    }

    /**
     * Get the [inprpricpric10] column value.
     *
     * @return string
     */
    public function getInprpricpric10()
    {
        return $this->inprpricpric10;
    }

    /**
     * Get the [inprpriclastdate] column value.
     *
     * @return string
     */
    public function getInprpriclastdate()
    {
        return $this->inprpriclastdate;
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
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [inprpricbase] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricbase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricbase !== $v) {
            $this->inprpricbase = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICBASE] = true;
        }

        return $this;
    } // setInprpricbase()

    /**
     * Set the value of [inprpricunit1] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit1 !== $v) {
            $this->inprpricunit1 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT1] = true;
        }

        return $this;
    } // setInprpricunit1()

    /**
     * Set the value of [inprpricpric1] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric1 !== $v) {
            $this->inprpricpric1 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC1] = true;
        }

        return $this;
    } // setInprpricpric1()

    /**
     * Set the value of [inprpricunit2] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit2 !== $v) {
            $this->inprpricunit2 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT2] = true;
        }

        return $this;
    } // setInprpricunit2()

    /**
     * Set the value of [inprpricpric2] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric2 !== $v) {
            $this->inprpricpric2 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC2] = true;
        }

        return $this;
    } // setInprpricpric2()

    /**
     * Set the value of [inprpricunit3] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit3 !== $v) {
            $this->inprpricunit3 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT3] = true;
        }

        return $this;
    } // setInprpricunit3()

    /**
     * Set the value of [inprpricpric3] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric3 !== $v) {
            $this->inprpricpric3 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC3] = true;
        }

        return $this;
    } // setInprpricpric3()

    /**
     * Set the value of [inprpricunit4] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit4 !== $v) {
            $this->inprpricunit4 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT4] = true;
        }

        return $this;
    } // setInprpricunit4()

    /**
     * Set the value of [inprpricpric4] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric4 !== $v) {
            $this->inprpricpric4 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC4] = true;
        }

        return $this;
    } // setInprpricpric4()

    /**
     * Set the value of [inprpricunit5] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit5 !== $v) {
            $this->inprpricunit5 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT5] = true;
        }

        return $this;
    } // setInprpricunit5()

    /**
     * Set the value of [inprpricpric5] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric5 !== $v) {
            $this->inprpricpric5 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC5] = true;
        }

        return $this;
    } // setInprpricpric5()

    /**
     * Set the value of [inprpricunit6] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit6 !== $v) {
            $this->inprpricunit6 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT6] = true;
        }

        return $this;
    } // setInprpricunit6()

    /**
     * Set the value of [inprpricpric6] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric6 !== $v) {
            $this->inprpricpric6 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC6] = true;
        }

        return $this;
    } // setInprpricpric6()

    /**
     * Set the value of [inprpricunit7] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit7($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit7 !== $v) {
            $this->inprpricunit7 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT7] = true;
        }

        return $this;
    } // setInprpricunit7()

    /**
     * Set the value of [inprpricpric7] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric7 !== $v) {
            $this->inprpricpric7 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC7] = true;
        }

        return $this;
    } // setInprpricpric7()

    /**
     * Set the value of [inprpricunit8] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit8($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit8 !== $v) {
            $this->inprpricunit8 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT8] = true;
        }

        return $this;
    } // setInprpricunit8()

    /**
     * Set the value of [inprpricpric8] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric8 !== $v) {
            $this->inprpricpric8 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC8] = true;
        }

        return $this;
    } // setInprpricpric8()

    /**
     * Set the value of [inprpricunit9] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit9($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit9 !== $v) {
            $this->inprpricunit9 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT9] = true;
        }

        return $this;
    } // setInprpricunit9()

    /**
     * Set the value of [inprpricpric9] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric9 !== $v) {
            $this->inprpricpric9 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC9] = true;
        }

        return $this;
    } // setInprpricpric9()

    /**
     * Set the value of [inprpricunit10] column.
     *
     * @param int $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricunit10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inprpricunit10 !== $v) {
            $this->inprpricunit10 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICUNIT10] = true;
        }

        return $this;
    } // setInprpricunit10()

    /**
     * Set the value of [inprpricpric10] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpricpric10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpricpric10 !== $v) {
            $this->inprpricpric10 = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICPRIC10] = true;
        }

        return $this;
    } // setInprpricpric10()

    /**
     * Set the value of [inprpriclastdate] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setInprpriclastdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inprpriclastdate !== $v) {
            $this->inprpriclastdate = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_INPRPRICLASTDATE] = true;
        }

        return $this;
    } // setInprpriclastdate()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ItemPricing The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItemPricingTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemPricingTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricbase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit7 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit8 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit9 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricunit10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricunit10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ItemPricingTableMap::translateFieldName('Inprpricpric10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpricpric10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ItemPricingTableMap::translateFieldName('Inprpriclastdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inprpriclastdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ItemPricingTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ItemPricingTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ItemPricingTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 26; // 26 = ItemPricingTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItemPricing'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemPricingQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->singleItemMasterItem = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ItemPricing::setDeleted()
     * @see ItemPricing::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemPricingQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingTableMap::DATABASE_NAME);
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
                ItemPricingTableMap::addInstanceToPool($this);
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

            if ($this->singleItemMasterItem !== null) {
                if (!$this->singleItemMasterItem->isDeleted() && ($this->singleItemMasterItem->isNew() || $this->singleItemMasterItem->isModified())) {
                    $affectedRows += $this->singleItemMasterItem->save($con);
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
        if ($this->isColumnModified(ItemPricingTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICBASE)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricBase';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT1)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit1';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC1)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric1';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT2)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit2';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC2)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric2';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT3)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit3';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC3)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric3';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT4)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit4';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC4)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric4';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT5)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit5';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC5)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric5';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT6)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit6';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC6)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric6';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT7)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit7';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC7)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric7';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT8)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit8';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC8)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric8';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT9)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit9';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC9)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric9';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT10)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricUnit10';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC10)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricPric10';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICLASTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InprPricLastDate';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_item_price (%s) VALUES (%s)',
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
                    case 'InprPricBase':
                        $stmt->bindValue($identifier, $this->inprpricbase, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit1':
                        $stmt->bindValue($identifier, $this->inprpricunit1, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric1':
                        $stmt->bindValue($identifier, $this->inprpricpric1, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit2':
                        $stmt->bindValue($identifier, $this->inprpricunit2, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric2':
                        $stmt->bindValue($identifier, $this->inprpricpric2, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit3':
                        $stmt->bindValue($identifier, $this->inprpricunit3, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric3':
                        $stmt->bindValue($identifier, $this->inprpricpric3, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit4':
                        $stmt->bindValue($identifier, $this->inprpricunit4, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric4':
                        $stmt->bindValue($identifier, $this->inprpricpric4, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit5':
                        $stmt->bindValue($identifier, $this->inprpricunit5, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric5':
                        $stmt->bindValue($identifier, $this->inprpricpric5, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit6':
                        $stmt->bindValue($identifier, $this->inprpricunit6, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric6':
                        $stmt->bindValue($identifier, $this->inprpricpric6, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit7':
                        $stmt->bindValue($identifier, $this->inprpricunit7, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric7':
                        $stmt->bindValue($identifier, $this->inprpricpric7, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit8':
                        $stmt->bindValue($identifier, $this->inprpricunit8, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric8':
                        $stmt->bindValue($identifier, $this->inprpricpric8, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit9':
                        $stmt->bindValue($identifier, $this->inprpricunit9, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric9':
                        $stmt->bindValue($identifier, $this->inprpricpric9, PDO::PARAM_STR);
                        break;
                    case 'InprPricUnit10':
                        $stmt->bindValue($identifier, $this->inprpricunit10, PDO::PARAM_INT);
                        break;
                    case 'InprPricPric10':
                        $stmt->bindValue($identifier, $this->inprpricpric10, PDO::PARAM_STR);
                        break;
                    case 'InprPricLastDate':
                        $stmt->bindValue($identifier, $this->inprpriclastdate, PDO::PARAM_STR);
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
        $pos = ItemPricingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInprpricbase();
                break;
            case 2:
                return $this->getInprpricunit1();
                break;
            case 3:
                return $this->getInprpricpric1();
                break;
            case 4:
                return $this->getInprpricunit2();
                break;
            case 5:
                return $this->getInprpricpric2();
                break;
            case 6:
                return $this->getInprpricunit3();
                break;
            case 7:
                return $this->getInprpricpric3();
                break;
            case 8:
                return $this->getInprpricunit4();
                break;
            case 9:
                return $this->getInprpricpric4();
                break;
            case 10:
                return $this->getInprpricunit5();
                break;
            case 11:
                return $this->getInprpricpric5();
                break;
            case 12:
                return $this->getInprpricunit6();
                break;
            case 13:
                return $this->getInprpricpric6();
                break;
            case 14:
                return $this->getInprpricunit7();
                break;
            case 15:
                return $this->getInprpricpric7();
                break;
            case 16:
                return $this->getInprpricunit8();
                break;
            case 17:
                return $this->getInprpricpric8();
                break;
            case 18:
                return $this->getInprpricunit9();
                break;
            case 19:
                return $this->getInprpricpric9();
                break;
            case 20:
                return $this->getInprpricunit10();
                break;
            case 21:
                return $this->getInprpricpric10();
                break;
            case 22:
                return $this->getInprpriclastdate();
                break;
            case 23:
                return $this->getDateupdtd();
                break;
            case 24:
                return $this->getTimeupdtd();
                break;
            case 25:
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

        if (isset($alreadyDumpedObjects['ItemPricing'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ItemPricing'][$this->hashCode()] = true;
        $keys = ItemPricingTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getInprpricbase(),
            $keys[2] => $this->getInprpricunit1(),
            $keys[3] => $this->getInprpricpric1(),
            $keys[4] => $this->getInprpricunit2(),
            $keys[5] => $this->getInprpricpric2(),
            $keys[6] => $this->getInprpricunit3(),
            $keys[7] => $this->getInprpricpric3(),
            $keys[8] => $this->getInprpricunit4(),
            $keys[9] => $this->getInprpricpric4(),
            $keys[10] => $this->getInprpricunit5(),
            $keys[11] => $this->getInprpricpric5(),
            $keys[12] => $this->getInprpricunit6(),
            $keys[13] => $this->getInprpricpric6(),
            $keys[14] => $this->getInprpricunit7(),
            $keys[15] => $this->getInprpricpric7(),
            $keys[16] => $this->getInprpricunit8(),
            $keys[17] => $this->getInprpricpric8(),
            $keys[18] => $this->getInprpricunit9(),
            $keys[19] => $this->getInprpricpric9(),
            $keys[20] => $this->getInprpricunit10(),
            $keys[21] => $this->getInprpricpric10(),
            $keys[22] => $this->getInprpriclastdate(),
            $keys[23] => $this->getDateupdtd(),
            $keys[24] => $this->getTimeupdtd(),
            $keys[25] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->singleItemMasterItem) {

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

                $result[$key] = $this->singleItemMasterItem->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
     * @return $this|\ItemPricing
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemPricingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ItemPricing
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setInprpricbase($value);
                break;
            case 2:
                $this->setInprpricunit1($value);
                break;
            case 3:
                $this->setInprpricpric1($value);
                break;
            case 4:
                $this->setInprpricunit2($value);
                break;
            case 5:
                $this->setInprpricpric2($value);
                break;
            case 6:
                $this->setInprpricunit3($value);
                break;
            case 7:
                $this->setInprpricpric3($value);
                break;
            case 8:
                $this->setInprpricunit4($value);
                break;
            case 9:
                $this->setInprpricpric4($value);
                break;
            case 10:
                $this->setInprpricunit5($value);
                break;
            case 11:
                $this->setInprpricpric5($value);
                break;
            case 12:
                $this->setInprpricunit6($value);
                break;
            case 13:
                $this->setInprpricpric6($value);
                break;
            case 14:
                $this->setInprpricunit7($value);
                break;
            case 15:
                $this->setInprpricpric7($value);
                break;
            case 16:
                $this->setInprpricunit8($value);
                break;
            case 17:
                $this->setInprpricpric8($value);
                break;
            case 18:
                $this->setInprpricunit9($value);
                break;
            case 19:
                $this->setInprpricpric9($value);
                break;
            case 20:
                $this->setInprpricunit10($value);
                break;
            case 21:
                $this->setInprpricpric10($value);
                break;
            case 22:
                $this->setInprpriclastdate($value);
                break;
            case 23:
                $this->setDateupdtd($value);
                break;
            case 24:
                $this->setTimeupdtd($value);
                break;
            case 25:
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
        $keys = ItemPricingTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setInprpricbase($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInprpricunit1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInprpricpric1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInprpricunit2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInprpricpric2($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInprpricunit3($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInprpricpric3($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setInprpricunit4($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setInprpricpric4($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInprpricunit5($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInprpricpric5($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInprpricunit6($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInprpricpric6($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInprpricunit7($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInprpricpric7($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInprpricunit8($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInprpricpric8($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInprpricunit9($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInprpricpric9($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setInprpricunit10($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setInprpricpric10($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setInprpriclastdate($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setDateupdtd($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setTimeupdtd($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setDummy($arr[$keys[25]]);
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
     * @return $this|\ItemPricing The current object, for fluid interface
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
        $criteria = new Criteria(ItemPricingTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemPricingTableMap::COL_INITITEMNBR)) {
            $criteria->add(ItemPricingTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICBASE)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICBASE, $this->inprpricbase);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT1)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT1, $this->inprpricunit1);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC1)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC1, $this->inprpricpric1);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT2)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT2, $this->inprpricunit2);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC2)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC2, $this->inprpricpric2);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT3)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT3, $this->inprpricunit3);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC3)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC3, $this->inprpricpric3);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT4)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT4, $this->inprpricunit4);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC4)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC4, $this->inprpricpric4);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT5)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT5, $this->inprpricunit5);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC5)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC5, $this->inprpricpric5);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT6)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT6, $this->inprpricunit6);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC6)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC6, $this->inprpricpric6);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT7)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT7, $this->inprpricunit7);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC7)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC7, $this->inprpricpric7);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT8)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT8, $this->inprpricunit8);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC8)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC8, $this->inprpricpric8);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT9)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT9, $this->inprpricunit9);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC9)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC9, $this->inprpricpric9);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICUNIT10)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICUNIT10, $this->inprpricunit10);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICPRIC10)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICPRIC10, $this->inprpricpric10);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_INPRPRICLASTDATE)) {
            $criteria->add(ItemPricingTableMap::COL_INPRPRICLASTDATE, $this->inprpriclastdate);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItemPricingTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItemPricingTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItemPricingTableMap::COL_DUMMY)) {
            $criteria->add(ItemPricingTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildItemPricingQuery::create();
        $criteria->add(ItemPricingTableMap::COL_INITITEMNBR, $this->inititemnbr);

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
     * @param      object $copyObj An object of \ItemPricing (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setInprpricbase($this->getInprpricbase());
        $copyObj->setInprpricunit1($this->getInprpricunit1());
        $copyObj->setInprpricpric1($this->getInprpricpric1());
        $copyObj->setInprpricunit2($this->getInprpricunit2());
        $copyObj->setInprpricpric2($this->getInprpricpric2());
        $copyObj->setInprpricunit3($this->getInprpricunit3());
        $copyObj->setInprpricpric3($this->getInprpricpric3());
        $copyObj->setInprpricunit4($this->getInprpricunit4());
        $copyObj->setInprpricpric4($this->getInprpricpric4());
        $copyObj->setInprpricunit5($this->getInprpricunit5());
        $copyObj->setInprpricpric5($this->getInprpricpric5());
        $copyObj->setInprpricunit6($this->getInprpricunit6());
        $copyObj->setInprpricpric6($this->getInprpricpric6());
        $copyObj->setInprpricunit7($this->getInprpricunit7());
        $copyObj->setInprpricpric7($this->getInprpricpric7());
        $copyObj->setInprpricunit8($this->getInprpricunit8());
        $copyObj->setInprpricpric8($this->getInprpricpric8());
        $copyObj->setInprpricunit9($this->getInprpricunit9());
        $copyObj->setInprpricpric9($this->getInprpricpric9());
        $copyObj->setInprpricunit10($this->getInprpricunit10());
        $copyObj->setInprpricpric10($this->getInprpricpric10());
        $copyObj->setInprpriclastdate($this->getInprpriclastdate());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            $relObj = $this->getItemMasterItem();
            if ($relObj) {
                $copyObj->setItemMasterItem($relObj->copy($deepCopy));
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
     * @return \ItemPricing Clone of current object.
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
    }

    /**
     * Gets a single ChildItemMasterItem object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildItemMasterItem
     * @throws PropelException
     */
    public function getItemMasterItem(ConnectionInterface $con = null)
    {

        if ($this->singleItemMasterItem === null && !$this->isNew()) {
            $this->singleItemMasterItem = ChildItemMasterItemQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleItemMasterItem;
    }

    /**
     * Sets a single ChildItemMasterItem object as related to this object by a one-to-one relationship.
     *
     * @param  ChildItemMasterItem $v ChildItemMasterItem
     * @return $this|\ItemPricing The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        $this->singleItemMasterItem = $v;

        // Make sure that that the passed-in ChildItemMasterItem isn't already associated with this object
        if ($v !== null && $v->getItemPricing(null, false) === null) {
            $v->setItemPricing($this);
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
        $this->inititemnbr = null;
        $this->inprpricbase = null;
        $this->inprpricunit1 = null;
        $this->inprpricpric1 = null;
        $this->inprpricunit2 = null;
        $this->inprpricpric2 = null;
        $this->inprpricunit3 = null;
        $this->inprpricpric3 = null;
        $this->inprpricunit4 = null;
        $this->inprpricpric4 = null;
        $this->inprpricunit5 = null;
        $this->inprpricpric5 = null;
        $this->inprpricunit6 = null;
        $this->inprpricpric6 = null;
        $this->inprpricunit7 = null;
        $this->inprpricpric7 = null;
        $this->inprpricunit8 = null;
        $this->inprpricpric8 = null;
        $this->inprpricunit9 = null;
        $this->inprpricpric9 = null;
        $this->inprpricunit10 = null;
        $this->inprpricpric10 = null;
        $this->inprpriclastdate = null;
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
            if ($this->singleItemMasterItem) {
                $this->singleItemMasterItem->clearAllReferences($deep);
            }
        } // if ($deep)

        $this->singleItemMasterItem = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItemPricingTableMap::DEFAULT_STRING_FORMAT);
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
