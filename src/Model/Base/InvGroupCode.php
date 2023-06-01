<?php

namespace Base;

use \InvGroupCode as ChildInvGroupCode;
use \InvGroupCodeQuery as ChildInvGroupCodeQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\InvGroupCodeTableMap;
use Map\ItemMasterItemTableMap;
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
 * Base class that represents a row from the 'inv_grup_code' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvGroupCode implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvGroupCodeTableMap';


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
     * The value for the intbgrup field.
     *
     * @var        string
     */
    protected $intbgrup;

    /**
     * The value for the intbgrupdesc field.
     *
     * @var        string
     */
    protected $intbgrupdesc;

    /**
     * The value for the intbgrupsaleacct field.
     *
     * @var        string
     */
    protected $intbgrupsaleacct;

    /**
     * The value for the intbgrupivtyacct field.
     *
     * @var        string
     */
    protected $intbgrupivtyacct;

    /**
     * The value for the intbgrupcogsacct field.
     *
     * @var        string
     */
    protected $intbgrupcogsacct;

    /**
     * The value for the intbgrupcredacct field.
     *
     * @var        string
     */
    protected $intbgrupcredacct;

    /**
     * The value for the intbgrupwebgrup field.
     *
     * @var        string
     */
    protected $intbgrupwebgrup;

    /**
     * The value for the intbgrupdropacct field.
     *
     * @var        string
     */
    protected $intbgrupdropacct;

    /**
     * The value for the intbgrupsaleprog field.
     *
     * @var        string
     */
    protected $intbgrupsaleprog;

    /**
     * The value for the intbgrupcostpct field.
     *
     * @var        string
     */
    protected $intbgrupcostpct;

    /**
     * The value for the intbgrupcoop field.
     *
     * @var        string
     */
    protected $intbgrupcoop;

    /**
     * The value for the intbgrupusesurchg field.
     *
     * @var        string
     */
    protected $intbgrupusesurchg;

    /**
     * The value for the intbgrupsurchgdollorpct field.
     *
     * @var        string
     */
    protected $intbgrupsurchgdollorpct;

    /**
     * The value for the intbgrupsurchgdollamt field.
     *
     * @var        string
     */
    protected $intbgrupsurchgdollamt;

    /**
     * The value for the intbgrupsurchgpct field.
     *
     * @var        string
     */
    protected $intbgrupsurchgpct;

    /**
     * The value for the intbgrupfrtgrup field.
     *
     * @var        string
     */
    protected $intbgrupfrtgrup;

    /**
     * The value for the intbgrupprodline field.
     *
     * @var        string
     */
    protected $intbgrupprodline;

    /**
     * The value for the intbgruplmecommdesc field.
     *
     * @var        string
     */
    protected $intbgruplmecommdesc;

    /**
     * The value for the intbgruplmmaxqtylrg field.
     *
     * @var        int
     */
    protected $intbgruplmmaxqtylrg;

    /**
     * The value for the intbgruplmmaxqtymed field.
     *
     * @var        int
     */
    protected $intbgruplmmaxqtymed;

    /**
     * The value for the intbgruplmmaxqtysml field.
     *
     * @var        int
     */
    protected $intbgruplmmaxqtysml;

    /**
     * The value for the intbgrupacdisc1 field.
     *
     * @var        string
     */
    protected $intbgrupacdisc1;

    /**
     * The value for the intbgrupacdisc2 field.
     *
     * @var        string
     */
    protected $intbgrupacdisc2;

    /**
     * The value for the intbgrupacdisc3 field.
     *
     * @var        string
     */
    protected $intbgrupacdisc3;

    /**
     * The value for the intbgrupacdisc4 field.
     *
     * @var        string
     */
    protected $intbgrupacdisc4;

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
     * @var        ObjectCollection|ChildItemMasterItem[] Collection to store aggregation of ChildItemMasterItem objects.
     */
    protected $collItemMasterItems;
    protected $collItemMasterItemsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemMasterItem[]
     */
    protected $itemMasterItemsScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\InvGroupCode object.
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
     * Compares this with another <code>InvGroupCode</code> instance.  If
     * <code>obj</code> is an instance of <code>InvGroupCode</code>, delegates to
     * <code>equals(InvGroupCode)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvGroupCode The current object, for fluid interface
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
     * Get the [intbgrup] column value.
     *
     * @return string
     */
    public function getIntbgrup()
    {
        return $this->intbgrup;
    }

    /**
     * Get the [intbgrupdesc] column value.
     *
     * @return string
     */
    public function getIntbgrupdesc()
    {
        return $this->intbgrupdesc;
    }

    /**
     * Get the [intbgrupsaleacct] column value.
     *
     * @return string
     */
    public function getIntbgrupsaleacct()
    {
        return $this->intbgrupsaleacct;
    }

    /**
     * Get the [intbgrupivtyacct] column value.
     *
     * @return string
     */
    public function getIntbgrupivtyacct()
    {
        return $this->intbgrupivtyacct;
    }

    /**
     * Get the [intbgrupcogsacct] column value.
     *
     * @return string
     */
    public function getIntbgrupcogsacct()
    {
        return $this->intbgrupcogsacct;
    }

    /**
     * Get the [intbgrupcredacct] column value.
     *
     * @return string
     */
    public function getIntbgrupcredacct()
    {
        return $this->intbgrupcredacct;
    }

    /**
     * Get the [intbgrupwebgrup] column value.
     *
     * @return string
     */
    public function getIntbgrupwebgrup()
    {
        return $this->intbgrupwebgrup;
    }

    /**
     * Get the [intbgrupdropacct] column value.
     *
     * @return string
     */
    public function getIntbgrupdropacct()
    {
        return $this->intbgrupdropacct;
    }

    /**
     * Get the [intbgrupsaleprog] column value.
     *
     * @return string
     */
    public function getIntbgrupsaleprog()
    {
        return $this->intbgrupsaleprog;
    }

    /**
     * Get the [intbgrupcostpct] column value.
     *
     * @return string
     */
    public function getIntbgrupcostpct()
    {
        return $this->intbgrupcostpct;
    }

    /**
     * Get the [intbgrupcoop] column value.
     *
     * @return string
     */
    public function getIntbgrupcoop()
    {
        return $this->intbgrupcoop;
    }

    /**
     * Get the [intbgrupusesurchg] column value.
     *
     * @return string
     */
    public function getIntbgrupusesurchg()
    {
        return $this->intbgrupusesurchg;
    }

    /**
     * Get the [intbgrupsurchgdollorpct] column value.
     *
     * @return string
     */
    public function getIntbgrupsurchgdollorpct()
    {
        return $this->intbgrupsurchgdollorpct;
    }

    /**
     * Get the [intbgrupsurchgdollamt] column value.
     *
     * @return string
     */
    public function getIntbgrupsurchgdollamt()
    {
        return $this->intbgrupsurchgdollamt;
    }

    /**
     * Get the [intbgrupsurchgpct] column value.
     *
     * @return string
     */
    public function getIntbgrupsurchgpct()
    {
        return $this->intbgrupsurchgpct;
    }

    /**
     * Get the [intbgrupfrtgrup] column value.
     *
     * @return string
     */
    public function getIntbgrupfrtgrup()
    {
        return $this->intbgrupfrtgrup;
    }

    /**
     * Get the [intbgrupprodline] column value.
     *
     * @return string
     */
    public function getIntbgrupprodline()
    {
        return $this->intbgrupprodline;
    }

    /**
     * Get the [intbgruplmecommdesc] column value.
     *
     * @return string
     */
    public function getIntbgruplmecommdesc()
    {
        return $this->intbgruplmecommdesc;
    }

    /**
     * Get the [intbgruplmmaxqtylrg] column value.
     *
     * @return int
     */
    public function getIntbgruplmmaxqtylrg()
    {
        return $this->intbgruplmmaxqtylrg;
    }

    /**
     * Get the [intbgruplmmaxqtymed] column value.
     *
     * @return int
     */
    public function getIntbgruplmmaxqtymed()
    {
        return $this->intbgruplmmaxqtymed;
    }

    /**
     * Get the [intbgruplmmaxqtysml] column value.
     *
     * @return int
     */
    public function getIntbgruplmmaxqtysml()
    {
        return $this->intbgruplmmaxqtysml;
    }

    /**
     * Get the [intbgrupacdisc1] column value.
     *
     * @return string
     */
    public function getIntbgrupacdisc1()
    {
        return $this->intbgrupacdisc1;
    }

    /**
     * Get the [intbgrupacdisc2] column value.
     *
     * @return string
     */
    public function getIntbgrupacdisc2()
    {
        return $this->intbgrupacdisc2;
    }

    /**
     * Get the [intbgrupacdisc3] column value.
     *
     * @return string
     */
    public function getIntbgrupacdisc3()
    {
        return $this->intbgrupacdisc3;
    }

    /**
     * Get the [intbgrupacdisc4] column value.
     *
     * @return string
     */
    public function getIntbgrupacdisc4()
    {
        return $this->intbgrupacdisc4;
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
     * Set the value of [intbgrup] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrup !== $v) {
            $this->intbgrup = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUP] = true;
        }

        return $this;
    } // setIntbgrup()

    /**
     * Set the value of [intbgrupdesc] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupdesc !== $v) {
            $this->intbgrupdesc = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPDESC] = true;
        }

        return $this;
    } // setIntbgrupdesc()

    /**
     * Set the value of [intbgrupsaleacct] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupsaleacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupsaleacct !== $v) {
            $this->intbgrupsaleacct = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPSALEACCT] = true;
        }

        return $this;
    } // setIntbgrupsaleacct()

    /**
     * Set the value of [intbgrupivtyacct] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupivtyacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupivtyacct !== $v) {
            $this->intbgrupivtyacct = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT] = true;
        }

        return $this;
    } // setIntbgrupivtyacct()

    /**
     * Set the value of [intbgrupcogsacct] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupcogsacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupcogsacct !== $v) {
            $this->intbgrupcogsacct = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT] = true;
        }

        return $this;
    } // setIntbgrupcogsacct()

    /**
     * Set the value of [intbgrupcredacct] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupcredacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupcredacct !== $v) {
            $this->intbgrupcredacct = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPCREDACCT] = true;
        }

        return $this;
    } // setIntbgrupcredacct()

    /**
     * Set the value of [intbgrupwebgrup] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupwebgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupwebgrup !== $v) {
            $this->intbgrupwebgrup = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP] = true;
        }

        return $this;
    } // setIntbgrupwebgrup()

    /**
     * Set the value of [intbgrupdropacct] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupdropacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupdropacct !== $v) {
            $this->intbgrupdropacct = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPDROPACCT] = true;
        }

        return $this;
    } // setIntbgrupdropacct()

    /**
     * Set the value of [intbgrupsaleprog] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupsaleprog($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupsaleprog !== $v) {
            $this->intbgrupsaleprog = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPSALEPROG] = true;
        }

        return $this;
    } // setIntbgrupsaleprog()

    /**
     * Set the value of [intbgrupcostpct] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupcostpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupcostpct !== $v) {
            $this->intbgrupcostpct = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT] = true;
        }

        return $this;
    } // setIntbgrupcostpct()

    /**
     * Set the value of [intbgrupcoop] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupcoop($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupcoop !== $v) {
            $this->intbgrupcoop = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPCOOP] = true;
        }

        return $this;
    } // setIntbgrupcoop()

    /**
     * Set the value of [intbgrupusesurchg] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupusesurchg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupusesurchg !== $v) {
            $this->intbgrupusesurchg = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG] = true;
        }

        return $this;
    } // setIntbgrupusesurchg()

    /**
     * Set the value of [intbgrupsurchgdollorpct] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupsurchgdollorpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupsurchgdollorpct !== $v) {
            $this->intbgrupsurchgdollorpct = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT] = true;
        }

        return $this;
    } // setIntbgrupsurchgdollorpct()

    /**
     * Set the value of [intbgrupsurchgdollamt] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupsurchgdollamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupsurchgdollamt !== $v) {
            $this->intbgrupsurchgdollamt = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT] = true;
        }

        return $this;
    } // setIntbgrupsurchgdollamt()

    /**
     * Set the value of [intbgrupsurchgpct] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupsurchgpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupsurchgpct !== $v) {
            $this->intbgrupsurchgpct = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT] = true;
        }

        return $this;
    } // setIntbgrupsurchgpct()

    /**
     * Set the value of [intbgrupfrtgrup] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupfrtgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupfrtgrup !== $v) {
            $this->intbgrupfrtgrup = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP] = true;
        }

        return $this;
    } // setIntbgrupfrtgrup()

    /**
     * Set the value of [intbgrupprodline] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupprodline($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupprodline !== $v) {
            $this->intbgrupprodline = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPPRODLINE] = true;
        }

        return $this;
    } // setIntbgrupprodline()

    /**
     * Set the value of [intbgruplmecommdesc] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgruplmecommdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgruplmecommdesc !== $v) {
            $this->intbgruplmecommdesc = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC] = true;
        }

        return $this;
    } // setIntbgruplmecommdesc()

    /**
     * Set the value of [intbgruplmmaxqtylrg] column.
     *
     * @param int $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgruplmmaxqtylrg($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbgruplmmaxqtylrg !== $v) {
            $this->intbgruplmmaxqtylrg = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG] = true;
        }

        return $this;
    } // setIntbgruplmmaxqtylrg()

    /**
     * Set the value of [intbgruplmmaxqtymed] column.
     *
     * @param int $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgruplmmaxqtymed($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbgruplmmaxqtymed !== $v) {
            $this->intbgruplmmaxqtymed = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED] = true;
        }

        return $this;
    } // setIntbgruplmmaxqtymed()

    /**
     * Set the value of [intbgruplmmaxqtysml] column.
     *
     * @param int $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgruplmmaxqtysml($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbgruplmmaxqtysml !== $v) {
            $this->intbgruplmmaxqtysml = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML] = true;
        }

        return $this;
    } // setIntbgruplmmaxqtysml()

    /**
     * Set the value of [intbgrupacdisc1] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupacdisc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupacdisc1 !== $v) {
            $this->intbgrupacdisc1 = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPACDISC1] = true;
        }

        return $this;
    } // setIntbgrupacdisc1()

    /**
     * Set the value of [intbgrupacdisc2] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupacdisc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupacdisc2 !== $v) {
            $this->intbgrupacdisc2 = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPACDISC2] = true;
        }

        return $this;
    } // setIntbgrupacdisc2()

    /**
     * Set the value of [intbgrupacdisc3] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupacdisc3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupacdisc3 !== $v) {
            $this->intbgrupacdisc3 = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPACDISC3] = true;
        }

        return $this;
    } // setIntbgrupacdisc3()

    /**
     * Set the value of [intbgrupacdisc4] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setIntbgrupacdisc4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrupacdisc4 !== $v) {
            $this->intbgrupacdisc4 = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_INTBGRUPACDISC4] = true;
        }

        return $this;
    } // setIntbgrupacdisc4()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvGroupCodeTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupsaleacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupsaleacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupivtyacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupivtyacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupcogsacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupcogsacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupcredacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupcredacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupwebgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupwebgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupdropacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupdropacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupsaleprog', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupsaleprog = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupcostpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupcostpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupcoop', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupcoop = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupusesurchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupusesurchg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupsurchgdollorpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupsurchgdollorpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupsurchgdollamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupsurchgdollamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupsurchgpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupsurchgpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupfrtgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupfrtgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupprodline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupprodline = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgruplmecommdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgruplmecommdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgruplmmaxqtylrg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgruplmmaxqtylrg = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgruplmmaxqtymed', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgruplmmaxqtymed = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgruplmmaxqtysml', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgruplmmaxqtysml = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupacdisc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupacdisc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupacdisc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupacdisc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupacdisc3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupacdisc3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvGroupCodeTableMap::translateFieldName('Intbgrupacdisc4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrupacdisc4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : InvGroupCodeTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : InvGroupCodeTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : InvGroupCodeTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 28; // 28 = InvGroupCodeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvGroupCode'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(InvGroupCodeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvGroupCodeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collItemMasterItems = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvGroupCode::setDeleted()
     * @see InvGroupCode::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvGroupCodeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvGroupCodeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvGroupCodeTableMap::DATABASE_NAME);
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
                InvGroupCodeTableMap::addInstanceToPool($this);
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

            if ($this->itemMasterItemsScheduledForDeletion !== null) {
                if (!$this->itemMasterItemsScheduledForDeletion->isEmpty()) {
                    foreach ($this->itemMasterItemsScheduledForDeletion as $itemMasterItem) {
                        // need to save related object because we set the relation to null
                        $itemMasterItem->save($con);
                    }
                    $this->itemMasterItemsScheduledForDeletion = null;
                }
            }

            if ($this->collItemMasterItems !== null) {
                foreach ($this->collItemMasterItems as $referrerFK) {
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
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrup';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPDESC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupDesc';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSALEACCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupSaleAcct';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupIvtyAcct';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupCogsAcct';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPCREDACCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupCredAcct';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupWebGrup';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPDROPACCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupDropAcct';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSALEPROG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupSaleProg';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupCostPct';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPCOOP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupCoop';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupUseSurchg';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupSurchgDollOrPct';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupSurchgDollAmt';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupSurchgPct';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupFrtGrup';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPPRODLINE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupProdLine';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupLmEcommDesc';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupLmMaxQtyLrg';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupLmMaxQtyMed';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupLmMaxQtySml';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPACDISC1)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupAcDisc1';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPACDISC2)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupAcDisc2';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPACDISC3)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupAcDisc3';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPACDISC4)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrupAcDisc4';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_grup_code (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'IntbGrup':
                        $stmt->bindValue($identifier, $this->intbgrup, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupDesc':
                        $stmt->bindValue($identifier, $this->intbgrupdesc, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupSaleAcct':
                        $stmt->bindValue($identifier, $this->intbgrupsaleacct, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupIvtyAcct':
                        $stmt->bindValue($identifier, $this->intbgrupivtyacct, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupCogsAcct':
                        $stmt->bindValue($identifier, $this->intbgrupcogsacct, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupCredAcct':
                        $stmt->bindValue($identifier, $this->intbgrupcredacct, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupWebGrup':
                        $stmt->bindValue($identifier, $this->intbgrupwebgrup, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupDropAcct':
                        $stmt->bindValue($identifier, $this->intbgrupdropacct, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupSaleProg':
                        $stmt->bindValue($identifier, $this->intbgrupsaleprog, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupCostPct':
                        $stmt->bindValue($identifier, $this->intbgrupcostpct, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupCoop':
                        $stmt->bindValue($identifier, $this->intbgrupcoop, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupUseSurchg':
                        $stmt->bindValue($identifier, $this->intbgrupusesurchg, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupSurchgDollOrPct':
                        $stmt->bindValue($identifier, $this->intbgrupsurchgdollorpct, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupSurchgDollAmt':
                        $stmt->bindValue($identifier, $this->intbgrupsurchgdollamt, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupSurchgPct':
                        $stmt->bindValue($identifier, $this->intbgrupsurchgpct, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupFrtGrup':
                        $stmt->bindValue($identifier, $this->intbgrupfrtgrup, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupProdLine':
                        $stmt->bindValue($identifier, $this->intbgrupprodline, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupLmEcommDesc':
                        $stmt->bindValue($identifier, $this->intbgruplmecommdesc, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupLmMaxQtyLrg':
                        $stmt->bindValue($identifier, $this->intbgruplmmaxqtylrg, PDO::PARAM_INT);
                        break;
                    case 'IntbGrupLmMaxQtyMed':
                        $stmt->bindValue($identifier, $this->intbgruplmmaxqtymed, PDO::PARAM_INT);
                        break;
                    case 'IntbGrupLmMaxQtySml':
                        $stmt->bindValue($identifier, $this->intbgruplmmaxqtysml, PDO::PARAM_INT);
                        break;
                    case 'IntbGrupAcDisc1':
                        $stmt->bindValue($identifier, $this->intbgrupacdisc1, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupAcDisc2':
                        $stmt->bindValue($identifier, $this->intbgrupacdisc2, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupAcDisc3':
                        $stmt->bindValue($identifier, $this->intbgrupacdisc3, PDO::PARAM_STR);
                        break;
                    case 'IntbGrupAcDisc4':
                        $stmt->bindValue($identifier, $this->intbgrupacdisc4, PDO::PARAM_STR);
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
        $pos = InvGroupCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIntbgrup();
                break;
            case 1:
                return $this->getIntbgrupdesc();
                break;
            case 2:
                return $this->getIntbgrupsaleacct();
                break;
            case 3:
                return $this->getIntbgrupivtyacct();
                break;
            case 4:
                return $this->getIntbgrupcogsacct();
                break;
            case 5:
                return $this->getIntbgrupcredacct();
                break;
            case 6:
                return $this->getIntbgrupwebgrup();
                break;
            case 7:
                return $this->getIntbgrupdropacct();
                break;
            case 8:
                return $this->getIntbgrupsaleprog();
                break;
            case 9:
                return $this->getIntbgrupcostpct();
                break;
            case 10:
                return $this->getIntbgrupcoop();
                break;
            case 11:
                return $this->getIntbgrupusesurchg();
                break;
            case 12:
                return $this->getIntbgrupsurchgdollorpct();
                break;
            case 13:
                return $this->getIntbgrupsurchgdollamt();
                break;
            case 14:
                return $this->getIntbgrupsurchgpct();
                break;
            case 15:
                return $this->getIntbgrupfrtgrup();
                break;
            case 16:
                return $this->getIntbgrupprodline();
                break;
            case 17:
                return $this->getIntbgruplmecommdesc();
                break;
            case 18:
                return $this->getIntbgruplmmaxqtylrg();
                break;
            case 19:
                return $this->getIntbgruplmmaxqtymed();
                break;
            case 20:
                return $this->getIntbgruplmmaxqtysml();
                break;
            case 21:
                return $this->getIntbgrupacdisc1();
                break;
            case 22:
                return $this->getIntbgrupacdisc2();
                break;
            case 23:
                return $this->getIntbgrupacdisc3();
                break;
            case 24:
                return $this->getIntbgrupacdisc4();
                break;
            case 25:
                return $this->getDateupdtd();
                break;
            case 26:
                return $this->getTimeupdtd();
                break;
            case 27:
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

        if (isset($alreadyDumpedObjects['InvGroupCode'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvGroupCode'][$this->hashCode()] = true;
        $keys = InvGroupCodeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIntbgrup(),
            $keys[1] => $this->getIntbgrupdesc(),
            $keys[2] => $this->getIntbgrupsaleacct(),
            $keys[3] => $this->getIntbgrupivtyacct(),
            $keys[4] => $this->getIntbgrupcogsacct(),
            $keys[5] => $this->getIntbgrupcredacct(),
            $keys[6] => $this->getIntbgrupwebgrup(),
            $keys[7] => $this->getIntbgrupdropacct(),
            $keys[8] => $this->getIntbgrupsaleprog(),
            $keys[9] => $this->getIntbgrupcostpct(),
            $keys[10] => $this->getIntbgrupcoop(),
            $keys[11] => $this->getIntbgrupusesurchg(),
            $keys[12] => $this->getIntbgrupsurchgdollorpct(),
            $keys[13] => $this->getIntbgrupsurchgdollamt(),
            $keys[14] => $this->getIntbgrupsurchgpct(),
            $keys[15] => $this->getIntbgrupfrtgrup(),
            $keys[16] => $this->getIntbgrupprodline(),
            $keys[17] => $this->getIntbgruplmecommdesc(),
            $keys[18] => $this->getIntbgruplmmaxqtylrg(),
            $keys[19] => $this->getIntbgruplmmaxqtymed(),
            $keys[20] => $this->getIntbgruplmmaxqtysml(),
            $keys[21] => $this->getIntbgrupacdisc1(),
            $keys[22] => $this->getIntbgrupacdisc2(),
            $keys[23] => $this->getIntbgrupacdisc3(),
            $keys[24] => $this->getIntbgrupacdisc4(),
            $keys[25] => $this->getDateupdtd(),
            $keys[26] => $this->getTimeupdtd(),
            $keys[27] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collItemMasterItems) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemMasterItems';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_item_masts';
                        break;
                    default:
                        $key = 'ItemMasterItems';
                }

                $result[$key] = $this->collItemMasterItems->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\InvGroupCode
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvGroupCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvGroupCode
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIntbgrup($value);
                break;
            case 1:
                $this->setIntbgrupdesc($value);
                break;
            case 2:
                $this->setIntbgrupsaleacct($value);
                break;
            case 3:
                $this->setIntbgrupivtyacct($value);
                break;
            case 4:
                $this->setIntbgrupcogsacct($value);
                break;
            case 5:
                $this->setIntbgrupcredacct($value);
                break;
            case 6:
                $this->setIntbgrupwebgrup($value);
                break;
            case 7:
                $this->setIntbgrupdropacct($value);
                break;
            case 8:
                $this->setIntbgrupsaleprog($value);
                break;
            case 9:
                $this->setIntbgrupcostpct($value);
                break;
            case 10:
                $this->setIntbgrupcoop($value);
                break;
            case 11:
                $this->setIntbgrupusesurchg($value);
                break;
            case 12:
                $this->setIntbgrupsurchgdollorpct($value);
                break;
            case 13:
                $this->setIntbgrupsurchgdollamt($value);
                break;
            case 14:
                $this->setIntbgrupsurchgpct($value);
                break;
            case 15:
                $this->setIntbgrupfrtgrup($value);
                break;
            case 16:
                $this->setIntbgrupprodline($value);
                break;
            case 17:
                $this->setIntbgruplmecommdesc($value);
                break;
            case 18:
                $this->setIntbgruplmmaxqtylrg($value);
                break;
            case 19:
                $this->setIntbgruplmmaxqtymed($value);
                break;
            case 20:
                $this->setIntbgruplmmaxqtysml($value);
                break;
            case 21:
                $this->setIntbgrupacdisc1($value);
                break;
            case 22:
                $this->setIntbgrupacdisc2($value);
                break;
            case 23:
                $this->setIntbgrupacdisc3($value);
                break;
            case 24:
                $this->setIntbgrupacdisc4($value);
                break;
            case 25:
                $this->setDateupdtd($value);
                break;
            case 26:
                $this->setTimeupdtd($value);
                break;
            case 27:
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
        $keys = InvGroupCodeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIntbgrup($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbgrupdesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIntbgrupsaleacct($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIntbgrupivtyacct($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIntbgrupcogsacct($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIntbgrupcredacct($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIntbgrupwebgrup($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIntbgrupdropacct($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIntbgrupsaleprog($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIntbgrupcostpct($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIntbgrupcoop($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setIntbgrupusesurchg($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setIntbgrupsurchgdollorpct($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setIntbgrupsurchgdollamt($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setIntbgrupsurchgpct($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setIntbgrupfrtgrup($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIntbgrupprodline($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setIntbgruplmecommdesc($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setIntbgruplmmaxqtylrg($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIntbgruplmmaxqtymed($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setIntbgruplmmaxqtysml($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setIntbgrupacdisc1($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setIntbgrupacdisc2($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setIntbgrupacdisc3($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setIntbgrupacdisc4($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setDateupdtd($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setTimeupdtd($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setDummy($arr[$keys[27]]);
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
     * @return $this|\InvGroupCode The current object, for fluid interface
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
        $criteria = new Criteria(InvGroupCodeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUP)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUP, $this->intbgrup);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPDESC)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPDESC, $this->intbgrupdesc);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSALEACCT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPSALEACCT, $this->intbgrupsaleacct);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT, $this->intbgrupivtyacct);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT, $this->intbgrupcogsacct);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPCREDACCT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPCREDACCT, $this->intbgrupcredacct);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP, $this->intbgrupwebgrup);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPDROPACCT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPDROPACCT, $this->intbgrupdropacct);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSALEPROG)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPSALEPROG, $this->intbgrupsaleprog);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT, $this->intbgrupcostpct);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPCOOP)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPCOOP, $this->intbgrupcoop);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG, $this->intbgrupusesurchg);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT, $this->intbgrupsurchgdollorpct);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, $this->intbgrupsurchgdollamt);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, $this->intbgrupsurchgpct);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP, $this->intbgrupfrtgrup);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPPRODLINE)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPPRODLINE, $this->intbgrupprodline);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC, $this->intbgruplmecommdesc);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, $this->intbgruplmmaxqtylrg);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, $this->intbgruplmmaxqtymed);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, $this->intbgruplmmaxqtysml);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPACDISC1)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPACDISC1, $this->intbgrupacdisc1);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPACDISC2)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPACDISC2, $this->intbgrupacdisc2);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPACDISC3)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPACDISC3, $this->intbgrupacdisc3);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_INTBGRUPACDISC4)) {
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUPACDISC4, $this->intbgrupacdisc4);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvGroupCodeTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvGroupCodeTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvGroupCodeTableMap::COL_DUMMY)) {
            $criteria->add(InvGroupCodeTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvGroupCodeQuery::create();
        $criteria->add(InvGroupCodeTableMap::COL_INTBGRUP, $this->intbgrup);

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
        $validPk = null !== $this->getIntbgrup();

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
        return $this->getIntbgrup();
    }

    /**
     * Generic method to set the primary key (intbgrup column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIntbgrup($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIntbgrup();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvGroupCode (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntbgrup($this->getIntbgrup());
        $copyObj->setIntbgrupdesc($this->getIntbgrupdesc());
        $copyObj->setIntbgrupsaleacct($this->getIntbgrupsaleacct());
        $copyObj->setIntbgrupivtyacct($this->getIntbgrupivtyacct());
        $copyObj->setIntbgrupcogsacct($this->getIntbgrupcogsacct());
        $copyObj->setIntbgrupcredacct($this->getIntbgrupcredacct());
        $copyObj->setIntbgrupwebgrup($this->getIntbgrupwebgrup());
        $copyObj->setIntbgrupdropacct($this->getIntbgrupdropacct());
        $copyObj->setIntbgrupsaleprog($this->getIntbgrupsaleprog());
        $copyObj->setIntbgrupcostpct($this->getIntbgrupcostpct());
        $copyObj->setIntbgrupcoop($this->getIntbgrupcoop());
        $copyObj->setIntbgrupusesurchg($this->getIntbgrupusesurchg());
        $copyObj->setIntbgrupsurchgdollorpct($this->getIntbgrupsurchgdollorpct());
        $copyObj->setIntbgrupsurchgdollamt($this->getIntbgrupsurchgdollamt());
        $copyObj->setIntbgrupsurchgpct($this->getIntbgrupsurchgpct());
        $copyObj->setIntbgrupfrtgrup($this->getIntbgrupfrtgrup());
        $copyObj->setIntbgrupprodline($this->getIntbgrupprodline());
        $copyObj->setIntbgruplmecommdesc($this->getIntbgruplmecommdesc());
        $copyObj->setIntbgruplmmaxqtylrg($this->getIntbgruplmmaxqtylrg());
        $copyObj->setIntbgruplmmaxqtymed($this->getIntbgruplmmaxqtymed());
        $copyObj->setIntbgruplmmaxqtysml($this->getIntbgruplmmaxqtysml());
        $copyObj->setIntbgrupacdisc1($this->getIntbgrupacdisc1());
        $copyObj->setIntbgrupacdisc2($this->getIntbgrupacdisc2());
        $copyObj->setIntbgrupacdisc3($this->getIntbgrupacdisc3());
        $copyObj->setIntbgrupacdisc4($this->getIntbgrupacdisc4());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getItemMasterItems() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemMasterItem($relObj->copy($deepCopy));
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
     * @return \InvGroupCode Clone of current object.
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
        if ('ItemMasterItem' == $relationName) {
            $this->initItemMasterItems();
            return;
        }
    }

    /**
     * Clears out the collItemMasterItems collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemMasterItems()
     */
    public function clearItemMasterItems()
    {
        $this->collItemMasterItems = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemMasterItems collection loaded partially.
     */
    public function resetPartialItemMasterItems($v = true)
    {
        $this->collItemMasterItemsPartial = $v;
    }

    /**
     * Initializes the collItemMasterItems collection.
     *
     * By default this just sets the collItemMasterItems collection to an empty array (like clearcollItemMasterItems());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemMasterItems($overrideExisting = true)
    {
        if (null !== $this->collItemMasterItems && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemMasterItemTableMap::getTableMap()->getCollectionClassName();

        $this->collItemMasterItems = new $collectionClassName;
        $this->collItemMasterItems->setModel('\ItemMasterItem');
    }

    /**
     * Gets an array of ChildItemMasterItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvGroupCode is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemMasterItem[] List of ChildItemMasterItem objects
     * @throws PropelException
     */
    public function getItemMasterItems(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemMasterItemsPartial && !$this->isNew();
        if (null === $this->collItemMasterItems || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemMasterItems) {
                // return empty collection
                $this->initItemMasterItems();
            } else {
                $collItemMasterItems = ChildItemMasterItemQuery::create(null, $criteria)
                    ->filterByInvGroupCode($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemMasterItemsPartial && count($collItemMasterItems)) {
                        $this->initItemMasterItems(false);

                        foreach ($collItemMasterItems as $obj) {
                            if (false == $this->collItemMasterItems->contains($obj)) {
                                $this->collItemMasterItems->append($obj);
                            }
                        }

                        $this->collItemMasterItemsPartial = true;
                    }

                    return $collItemMasterItems;
                }

                if ($partial && $this->collItemMasterItems) {
                    foreach ($this->collItemMasterItems as $obj) {
                        if ($obj->isNew()) {
                            $collItemMasterItems[] = $obj;
                        }
                    }
                }

                $this->collItemMasterItems = $collItemMasterItems;
                $this->collItemMasterItemsPartial = false;
            }
        }

        return $this->collItemMasterItems;
    }

    /**
     * Sets a collection of ChildItemMasterItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemMasterItems A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvGroupCode The current object (for fluent API support)
     */
    public function setItemMasterItems(Collection $itemMasterItems, ConnectionInterface $con = null)
    {
        /** @var ChildItemMasterItem[] $itemMasterItemsToDelete */
        $itemMasterItemsToDelete = $this->getItemMasterItems(new Criteria(), $con)->diff($itemMasterItems);


        $this->itemMasterItemsScheduledForDeletion = $itemMasterItemsToDelete;

        foreach ($itemMasterItemsToDelete as $itemMasterItemRemoved) {
            $itemMasterItemRemoved->setInvGroupCode(null);
        }

        $this->collItemMasterItems = null;
        foreach ($itemMasterItems as $itemMasterItem) {
            $this->addItemMasterItem($itemMasterItem);
        }

        $this->collItemMasterItems = $itemMasterItems;
        $this->collItemMasterItemsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemMasterItem objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemMasterItem objects.
     * @throws PropelException
     */
    public function countItemMasterItems(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemMasterItemsPartial && !$this->isNew();
        if (null === $this->collItemMasterItems || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemMasterItems) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemMasterItems());
            }

            $query = ChildItemMasterItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvGroupCode($this)
                ->count($con);
        }

        return count($this->collItemMasterItems);
    }

    /**
     * Method called to associate a ChildItemMasterItem object to this object
     * through the ChildItemMasterItem foreign key attribute.
     *
     * @param  ChildItemMasterItem $l ChildItemMasterItem
     * @return $this|\InvGroupCode The current object (for fluent API support)
     */
    public function addItemMasterItem(ChildItemMasterItem $l)
    {
        if ($this->collItemMasterItems === null) {
            $this->initItemMasterItems();
            $this->collItemMasterItemsPartial = true;
        }

        if (!$this->collItemMasterItems->contains($l)) {
            $this->doAddItemMasterItem($l);

            if ($this->itemMasterItemsScheduledForDeletion and $this->itemMasterItemsScheduledForDeletion->contains($l)) {
                $this->itemMasterItemsScheduledForDeletion->remove($this->itemMasterItemsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemMasterItem $itemMasterItem The ChildItemMasterItem object to add.
     */
    protected function doAddItemMasterItem(ChildItemMasterItem $itemMasterItem)
    {
        $this->collItemMasterItems[]= $itemMasterItem;
        $itemMasterItem->setInvGroupCode($this);
    }

    /**
     * @param  ChildItemMasterItem $itemMasterItem The ChildItemMasterItem object to remove.
     * @return $this|ChildInvGroupCode The current object (for fluent API support)
     */
    public function removeItemMasterItem(ChildItemMasterItem $itemMasterItem)
    {
        if ($this->getItemMasterItems()->contains($itemMasterItem)) {
            $pos = $this->collItemMasterItems->search($itemMasterItem);
            $this->collItemMasterItems->remove($pos);
            if (null === $this->itemMasterItemsScheduledForDeletion) {
                $this->itemMasterItemsScheduledForDeletion = clone $this->collItemMasterItems;
                $this->itemMasterItemsScheduledForDeletion->clear();
            }
            $this->itemMasterItemsScheduledForDeletion[]= $itemMasterItem;
            $itemMasterItem->setInvGroupCode(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvGroupCode is new, it will return
     * an empty collection; or if this InvGroupCode has previously
     * been saved, it will retrieve related ItemMasterItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvGroupCode.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemMasterItem[] List of ChildItemMasterItem objects
     */
    public function getItemMasterItemsJoinUnitofMeasureSale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemMasterItemQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasureSale', $joinBehavior);

        return $this->getItemMasterItems($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvGroupCode is new, it will return
     * an empty collection; or if this InvGroupCode has previously
     * been saved, it will retrieve related ItemMasterItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvGroupCode.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemMasterItem[] List of ChildItemMasterItem objects
     */
    public function getItemMasterItemsJoinUnitofMeasurePurchase(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemMasterItemQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasurePurchase', $joinBehavior);

        return $this->getItemMasterItems($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvGroupCode is new, it will return
     * an empty collection; or if this InvGroupCode has previously
     * been saved, it will retrieve related ItemMasterItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvGroupCode.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemMasterItem[] List of ChildItemMasterItem objects
     */
    public function getItemMasterItemsJoinInvPriceCode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemMasterItemQuery::create(null, $criteria);
        $query->joinWith('InvPriceCode', $joinBehavior);

        return $this->getItemMasterItems($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvGroupCode is new, it will return
     * an empty collection; or if this InvGroupCode has previously
     * been saved, it will retrieve related ItemMasterItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvGroupCode.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemMasterItem[] List of ChildItemMasterItem objects
     */
    public function getItemMasterItemsJoinInvCommissionCode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemMasterItemQuery::create(null, $criteria);
        $query->joinWith('InvCommissionCode', $joinBehavior);

        return $this->getItemMasterItems($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->intbgrup = null;
        $this->intbgrupdesc = null;
        $this->intbgrupsaleacct = null;
        $this->intbgrupivtyacct = null;
        $this->intbgrupcogsacct = null;
        $this->intbgrupcredacct = null;
        $this->intbgrupwebgrup = null;
        $this->intbgrupdropacct = null;
        $this->intbgrupsaleprog = null;
        $this->intbgrupcostpct = null;
        $this->intbgrupcoop = null;
        $this->intbgrupusesurchg = null;
        $this->intbgrupsurchgdollorpct = null;
        $this->intbgrupsurchgdollamt = null;
        $this->intbgrupsurchgpct = null;
        $this->intbgrupfrtgrup = null;
        $this->intbgrupprodline = null;
        $this->intbgruplmecommdesc = null;
        $this->intbgruplmmaxqtylrg = null;
        $this->intbgruplmmaxqtymed = null;
        $this->intbgruplmmaxqtysml = null;
        $this->intbgrupacdisc1 = null;
        $this->intbgrupacdisc2 = null;
        $this->intbgrupacdisc3 = null;
        $this->intbgrupacdisc4 = null;
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
            if ($this->collItemMasterItems) {
                foreach ($this->collItemMasterItems as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collItemMasterItems = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvGroupCodeTableMap::DEFAULT_STRING_FORMAT);
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
