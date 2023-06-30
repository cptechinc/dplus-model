<?php

namespace Base;

use \InvWhseItemBinQuery as ChildInvWhseItemBinQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Warehouse as ChildWarehouse;
use \WarehouseInventory as ChildWarehouseInventory;
use \WarehouseInventoryQuery as ChildWarehouseInventoryQuery;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\InvWhseItemBinTableMap;
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
 * Base class that represents a row from the 'inv_bin_area' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvWhseItemBin implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvWhseItemBinTableMap';


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
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the binabin1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin1;

    /**
     * The value for the binamin1 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin1;

    /**
     * The value for the binamax1 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax1;

    /**
     * The value for the binabin2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin2;

    /**
     * The value for the binamin2 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin2;

    /**
     * The value for the binamax2 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax2;

    /**
     * The value for the binabin3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin3;

    /**
     * The value for the binamin3 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin3;

    /**
     * The value for the binamax3 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax3;

    /**
     * The value for the binabin4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin4;

    /**
     * The value for the binamin4 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin4;

    /**
     * The value for the binamax4 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax4;

    /**
     * The value for the binabin5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin5;

    /**
     * The value for the binamin5 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin5;

    /**
     * The value for the binamax5 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax5;

    /**
     * The value for the binabin6 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin6;

    /**
     * The value for the binamin6 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin6;

    /**
     * The value for the binamax6 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax6;

    /**
     * The value for the binabin7 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin7;

    /**
     * The value for the binamin7 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin7;

    /**
     * The value for the binamax7 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax7;

    /**
     * The value for the binabin8 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin8;

    /**
     * The value for the binamin8 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin8;

    /**
     * The value for the binamax8 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax8;

    /**
     * The value for the binabin9 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $binabin9;

    /**
     * The value for the binamin9 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamin9;

    /**
     * The value for the binamax9 field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $binamax9;

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
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildWarehouse
     */
    protected $aWarehouse;

    /**
     * @var        ChildWarehouseInventory
     */
    protected $aWarehouseInventory;

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
        $this->intbwhse = '';
        $this->binabin1 = '';
        $this->binamin1 = 0;
        $this->binamax1 = 0;
        $this->binabin2 = '';
        $this->binamin2 = 0;
        $this->binamax2 = 0;
        $this->binabin3 = '';
        $this->binamin3 = 0;
        $this->binamax3 = 0;
        $this->binabin4 = '';
        $this->binamin4 = 0;
        $this->binamax4 = 0;
        $this->binabin5 = '';
        $this->binamin5 = 0;
        $this->binamax5 = 0;
        $this->binabin6 = '';
        $this->binamin6 = 0;
        $this->binamax6 = 0;
        $this->binabin7 = '';
        $this->binamin7 = 0;
        $this->binamax7 = 0;
        $this->binabin8 = '';
        $this->binamin8 = 0;
        $this->binamax8 = 0;
        $this->binabin9 = '';
        $this->binamin9 = 0;
        $this->binamax9 = 0;
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvWhseItemBin object.
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
     * Compares this with another <code>InvWhseItemBin</code> instance.  If
     * <code>obj</code> is an instance of <code>InvWhseItemBin</code>, delegates to
     * <code>equals(InvWhseItemBin)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvWhseItemBin The current object, for fluid interface
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
     * Get the [intbwhse] column value.
     *
     * @return string
     */
    public function getIntbwhse()
    {
        return $this->intbwhse;
    }

    /**
     * Get the [binabin1] column value.
     *
     * @return string
     */
    public function getBinabin1()
    {
        return $this->binabin1;
    }

    /**
     * Get the [binamin1] column value.
     *
     * @return int
     */
    public function getBinamin1()
    {
        return $this->binamin1;
    }

    /**
     * Get the [binamax1] column value.
     *
     * @return int
     */
    public function getBinamax1()
    {
        return $this->binamax1;
    }

    /**
     * Get the [binabin2] column value.
     *
     * @return string
     */
    public function getBinabin2()
    {
        return $this->binabin2;
    }

    /**
     * Get the [binamin2] column value.
     *
     * @return int
     */
    public function getBinamin2()
    {
        return $this->binamin2;
    }

    /**
     * Get the [binamax2] column value.
     *
     * @return int
     */
    public function getBinamax2()
    {
        return $this->binamax2;
    }

    /**
     * Get the [binabin3] column value.
     *
     * @return string
     */
    public function getBinabin3()
    {
        return $this->binabin3;
    }

    /**
     * Get the [binamin3] column value.
     *
     * @return int
     */
    public function getBinamin3()
    {
        return $this->binamin3;
    }

    /**
     * Get the [binamax3] column value.
     *
     * @return int
     */
    public function getBinamax3()
    {
        return $this->binamax3;
    }

    /**
     * Get the [binabin4] column value.
     *
     * @return string
     */
    public function getBinabin4()
    {
        return $this->binabin4;
    }

    /**
     * Get the [binamin4] column value.
     *
     * @return int
     */
    public function getBinamin4()
    {
        return $this->binamin4;
    }

    /**
     * Get the [binamax4] column value.
     *
     * @return int
     */
    public function getBinamax4()
    {
        return $this->binamax4;
    }

    /**
     * Get the [binabin5] column value.
     *
     * @return string
     */
    public function getBinabin5()
    {
        return $this->binabin5;
    }

    /**
     * Get the [binamin5] column value.
     *
     * @return int
     */
    public function getBinamin5()
    {
        return $this->binamin5;
    }

    /**
     * Get the [binamax5] column value.
     *
     * @return int
     */
    public function getBinamax5()
    {
        return $this->binamax5;
    }

    /**
     * Get the [binabin6] column value.
     *
     * @return string
     */
    public function getBinabin6()
    {
        return $this->binabin6;
    }

    /**
     * Get the [binamin6] column value.
     *
     * @return int
     */
    public function getBinamin6()
    {
        return $this->binamin6;
    }

    /**
     * Get the [binamax6] column value.
     *
     * @return int
     */
    public function getBinamax6()
    {
        return $this->binamax6;
    }

    /**
     * Get the [binabin7] column value.
     *
     * @return string
     */
    public function getBinabin7()
    {
        return $this->binabin7;
    }

    /**
     * Get the [binamin7] column value.
     *
     * @return int
     */
    public function getBinamin7()
    {
        return $this->binamin7;
    }

    /**
     * Get the [binamax7] column value.
     *
     * @return int
     */
    public function getBinamax7()
    {
        return $this->binamax7;
    }

    /**
     * Get the [binabin8] column value.
     *
     * @return string
     */
    public function getBinabin8()
    {
        return $this->binabin8;
    }

    /**
     * Get the [binamin8] column value.
     *
     * @return int
     */
    public function getBinamin8()
    {
        return $this->binamin8;
    }

    /**
     * Get the [binamax8] column value.
     *
     * @return int
     */
    public function getBinamax8()
    {
        return $this->binamax8;
    }

    /**
     * Get the [binabin9] column value.
     *
     * @return string
     */
    public function getBinabin9()
    {
        return $this->binabin9;
    }

    /**
     * Get the [binamin9] column value.
     *
     * @return int
     */
    public function getBinamin9()
    {
        return $this->binamin9;
    }

    /**
     * Get the [binamax9] column value.
     *
     * @return int
     */
    public function getBinamax9()
    {
        return $this->binamax9;
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
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        if ($this->aWarehouseInventory !== null && $this->aWarehouseInventory->getInititemnbr() !== $v) {
            $this->aWarehouseInventory = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_INTBWHSE] = true;
        }

        if ($this->aWarehouse !== null && $this->aWarehouse->getIntbwhse() !== $v) {
            $this->aWarehouse = null;
        }

        if ($this->aWarehouseInventory !== null && $this->aWarehouseInventory->getIntbwhse() !== $v) {
            $this->aWarehouseInventory = null;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [binabin1] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin1 !== $v) {
            $this->binabin1 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN1] = true;
        }

        return $this;
    } // setBinabin1()

    /**
     * Set the value of [binamin1] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin1 !== $v) {
            $this->binamin1 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN1] = true;
        }

        return $this;
    } // setBinamin1()

    /**
     * Set the value of [binamax1] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax1 !== $v) {
            $this->binamax1 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX1] = true;
        }

        return $this;
    } // setBinamax1()

    /**
     * Set the value of [binabin2] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin2 !== $v) {
            $this->binabin2 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN2] = true;
        }

        return $this;
    } // setBinabin2()

    /**
     * Set the value of [binamin2] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin2 !== $v) {
            $this->binamin2 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN2] = true;
        }

        return $this;
    } // setBinamin2()

    /**
     * Set the value of [binamax2] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax2 !== $v) {
            $this->binamax2 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX2] = true;
        }

        return $this;
    } // setBinamax2()

    /**
     * Set the value of [binabin3] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin3 !== $v) {
            $this->binabin3 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN3] = true;
        }

        return $this;
    } // setBinabin3()

    /**
     * Set the value of [binamin3] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin3 !== $v) {
            $this->binamin3 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN3] = true;
        }

        return $this;
    } // setBinamin3()

    /**
     * Set the value of [binamax3] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax3 !== $v) {
            $this->binamax3 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX3] = true;
        }

        return $this;
    } // setBinamax3()

    /**
     * Set the value of [binabin4] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin4 !== $v) {
            $this->binabin4 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN4] = true;
        }

        return $this;
    } // setBinabin4()

    /**
     * Set the value of [binamin4] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin4 !== $v) {
            $this->binamin4 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN4] = true;
        }

        return $this;
    } // setBinamin4()

    /**
     * Set the value of [binamax4] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax4 !== $v) {
            $this->binamax4 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX4] = true;
        }

        return $this;
    } // setBinamax4()

    /**
     * Set the value of [binabin5] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin5 !== $v) {
            $this->binabin5 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN5] = true;
        }

        return $this;
    } // setBinabin5()

    /**
     * Set the value of [binamin5] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin5 !== $v) {
            $this->binamin5 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN5] = true;
        }

        return $this;
    } // setBinamin5()

    /**
     * Set the value of [binamax5] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax5 !== $v) {
            $this->binamax5 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX5] = true;
        }

        return $this;
    } // setBinamax5()

    /**
     * Set the value of [binabin6] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin6 !== $v) {
            $this->binabin6 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN6] = true;
        }

        return $this;
    } // setBinabin6()

    /**
     * Set the value of [binamin6] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin6 !== $v) {
            $this->binamin6 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN6] = true;
        }

        return $this;
    } // setBinamin6()

    /**
     * Set the value of [binamax6] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax6 !== $v) {
            $this->binamax6 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX6] = true;
        }

        return $this;
    } // setBinamax6()

    /**
     * Set the value of [binabin7] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin7 !== $v) {
            $this->binabin7 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN7] = true;
        }

        return $this;
    } // setBinabin7()

    /**
     * Set the value of [binamin7] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin7($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin7 !== $v) {
            $this->binamin7 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN7] = true;
        }

        return $this;
    } // setBinamin7()

    /**
     * Set the value of [binamax7] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax7($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax7 !== $v) {
            $this->binamax7 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX7] = true;
        }

        return $this;
    } // setBinamax7()

    /**
     * Set the value of [binabin8] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin8 !== $v) {
            $this->binabin8 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN8] = true;
        }

        return $this;
    } // setBinabin8()

    /**
     * Set the value of [binamin8] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin8($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin8 !== $v) {
            $this->binamin8 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN8] = true;
        }

        return $this;
    } // setBinamin8()

    /**
     * Set the value of [binamax8] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax8($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax8 !== $v) {
            $this->binamax8 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX8] = true;
        }

        return $this;
    } // setBinamax8()

    /**
     * Set the value of [binabin9] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinabin9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->binabin9 !== $v) {
            $this->binabin9 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINABIN9] = true;
        }

        return $this;
    } // setBinabin9()

    /**
     * Set the value of [binamin9] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamin9($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamin9 !== $v) {
            $this->binamin9 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMIN9] = true;
        }

        return $this;
    } // setBinamin9()

    /**
     * Set the value of [binamax9] column.
     *
     * @param int $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setBinamax9($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->binamax9 !== $v) {
            $this->binamax9 = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_BINAMAX9] = true;
        }

        return $this;
    } // setBinamax9()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvWhseItemBinTableMap::COL_DUMMY] = true;
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

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->binabin1 !== '') {
                return false;
            }

            if ($this->binamin1 !== 0) {
                return false;
            }

            if ($this->binamax1 !== 0) {
                return false;
            }

            if ($this->binabin2 !== '') {
                return false;
            }

            if ($this->binamin2 !== 0) {
                return false;
            }

            if ($this->binamax2 !== 0) {
                return false;
            }

            if ($this->binabin3 !== '') {
                return false;
            }

            if ($this->binamin3 !== 0) {
                return false;
            }

            if ($this->binamax3 !== 0) {
                return false;
            }

            if ($this->binabin4 !== '') {
                return false;
            }

            if ($this->binamin4 !== 0) {
                return false;
            }

            if ($this->binamax4 !== 0) {
                return false;
            }

            if ($this->binabin5 !== '') {
                return false;
            }

            if ($this->binamin5 !== 0) {
                return false;
            }

            if ($this->binamax5 !== 0) {
                return false;
            }

            if ($this->binabin6 !== '') {
                return false;
            }

            if ($this->binamin6 !== 0) {
                return false;
            }

            if ($this->binamax6 !== 0) {
                return false;
            }

            if ($this->binabin7 !== '') {
                return false;
            }

            if ($this->binamin7 !== 0) {
                return false;
            }

            if ($this->binamax7 !== 0) {
                return false;
            }

            if ($this->binabin8 !== '') {
                return false;
            }

            if ($this->binamin8 !== 0) {
                return false;
            }

            if ($this->binamax8 !== 0) {
                return false;
            }

            if ($this->binabin9 !== '') {
                return false;
            }

            if ($this->binamin9 !== 0) {
                return false;
            }

            if ($this->binamax9 !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvWhseItemBinTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvWhseItemBinTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin7 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax7 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin8 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax8 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binabin9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binabin9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamin9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamin9 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : InvWhseItemBinTableMap::translateFieldName('Binamax9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->binamax9 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : InvWhseItemBinTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : InvWhseItemBinTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : InvWhseItemBinTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 32; // 32 = InvWhseItemBinTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvWhseItemBin'), 0, $e);
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
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aWarehouseInventory !== null && $this->inititemnbr !== $this->aWarehouseInventory->getInititemnbr()) {
            $this->aWarehouseInventory = null;
        }
        if ($this->aWarehouse !== null && $this->intbwhse !== $this->aWarehouse->getIntbwhse()) {
            $this->aWarehouse = null;
        }
        if ($this->aWarehouseInventory !== null && $this->intbwhse !== $this->aWarehouseInventory->getIntbwhse()) {
            $this->aWarehouseInventory = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(InvWhseItemBinTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvWhseItemBinQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
            $this->aWarehouse = null;
            $this->aWarehouseInventory = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvWhseItemBin::setDeleted()
     * @see InvWhseItemBin::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseItemBinTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvWhseItemBinQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseItemBinTableMap::DATABASE_NAME);
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
                InvWhseItemBinTableMap::addInstanceToPool($this);
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

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aWarehouse !== null) {
                if ($this->aWarehouse->isModified() || $this->aWarehouse->isNew()) {
                    $affectedRows += $this->aWarehouse->save($con);
                }
                $this->setWarehouse($this->aWarehouse);
            }

            if ($this->aWarehouseInventory !== null) {
                if ($this->aWarehouseInventory->isModified() || $this->aWarehouseInventory->isNew()) {
                    $affectedRows += $this->aWarehouseInventory->save($con);
                }
                $this->setWarehouseInventory($this->aWarehouseInventory);
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
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN1)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin1';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN1)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin1';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX1)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax1';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN2)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin2';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN2)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin2';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX2)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax2';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN3)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin3';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN3)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin3';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX3)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax3';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN4)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin4';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN4)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin4';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX4)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax4';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN5)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin5';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN5)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin5';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX5)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax5';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN6)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin6';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN6)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin6';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX6)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax6';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN7)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin7';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN7)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin7';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX7)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax7';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN8)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin8';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN8)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin8';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX8)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax8';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN9)) {
            $modifiedColumns[':p' . $index++]  = 'BinaBin9';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN9)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMin9';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX9)) {
            $modifiedColumns[':p' . $index++]  = 'BinaMax9';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_bin_area (%s) VALUES (%s)',
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
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'BinaBin1':
                        $stmt->bindValue($identifier, $this->binabin1, PDO::PARAM_STR);
                        break;
                    case 'BinaMin1':
                        $stmt->bindValue($identifier, $this->binamin1, PDO::PARAM_INT);
                        break;
                    case 'BinaMax1':
                        $stmt->bindValue($identifier, $this->binamax1, PDO::PARAM_INT);
                        break;
                    case 'BinaBin2':
                        $stmt->bindValue($identifier, $this->binabin2, PDO::PARAM_STR);
                        break;
                    case 'BinaMin2':
                        $stmt->bindValue($identifier, $this->binamin2, PDO::PARAM_INT);
                        break;
                    case 'BinaMax2':
                        $stmt->bindValue($identifier, $this->binamax2, PDO::PARAM_INT);
                        break;
                    case 'BinaBin3':
                        $stmt->bindValue($identifier, $this->binabin3, PDO::PARAM_STR);
                        break;
                    case 'BinaMin3':
                        $stmt->bindValue($identifier, $this->binamin3, PDO::PARAM_INT);
                        break;
                    case 'BinaMax3':
                        $stmt->bindValue($identifier, $this->binamax3, PDO::PARAM_INT);
                        break;
                    case 'BinaBin4':
                        $stmt->bindValue($identifier, $this->binabin4, PDO::PARAM_STR);
                        break;
                    case 'BinaMin4':
                        $stmt->bindValue($identifier, $this->binamin4, PDO::PARAM_INT);
                        break;
                    case 'BinaMax4':
                        $stmt->bindValue($identifier, $this->binamax4, PDO::PARAM_INT);
                        break;
                    case 'BinaBin5':
                        $stmt->bindValue($identifier, $this->binabin5, PDO::PARAM_STR);
                        break;
                    case 'BinaMin5':
                        $stmt->bindValue($identifier, $this->binamin5, PDO::PARAM_INT);
                        break;
                    case 'BinaMax5':
                        $stmt->bindValue($identifier, $this->binamax5, PDO::PARAM_INT);
                        break;
                    case 'BinaBin6':
                        $stmt->bindValue($identifier, $this->binabin6, PDO::PARAM_STR);
                        break;
                    case 'BinaMin6':
                        $stmt->bindValue($identifier, $this->binamin6, PDO::PARAM_INT);
                        break;
                    case 'BinaMax6':
                        $stmt->bindValue($identifier, $this->binamax6, PDO::PARAM_INT);
                        break;
                    case 'BinaBin7':
                        $stmt->bindValue($identifier, $this->binabin7, PDO::PARAM_STR);
                        break;
                    case 'BinaMin7':
                        $stmt->bindValue($identifier, $this->binamin7, PDO::PARAM_INT);
                        break;
                    case 'BinaMax7':
                        $stmt->bindValue($identifier, $this->binamax7, PDO::PARAM_INT);
                        break;
                    case 'BinaBin8':
                        $stmt->bindValue($identifier, $this->binabin8, PDO::PARAM_STR);
                        break;
                    case 'BinaMin8':
                        $stmt->bindValue($identifier, $this->binamin8, PDO::PARAM_INT);
                        break;
                    case 'BinaMax8':
                        $stmt->bindValue($identifier, $this->binamax8, PDO::PARAM_INT);
                        break;
                    case 'BinaBin9':
                        $stmt->bindValue($identifier, $this->binabin9, PDO::PARAM_STR);
                        break;
                    case 'BinaMin9':
                        $stmt->bindValue($identifier, $this->binamin9, PDO::PARAM_INT);
                        break;
                    case 'BinaMax9':
                        $stmt->bindValue($identifier, $this->binamax9, PDO::PARAM_INT);
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
        $pos = InvWhseItemBinTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIntbwhse();
                break;
            case 2:
                return $this->getBinabin1();
                break;
            case 3:
                return $this->getBinamin1();
                break;
            case 4:
                return $this->getBinamax1();
                break;
            case 5:
                return $this->getBinabin2();
                break;
            case 6:
                return $this->getBinamin2();
                break;
            case 7:
                return $this->getBinamax2();
                break;
            case 8:
                return $this->getBinabin3();
                break;
            case 9:
                return $this->getBinamin3();
                break;
            case 10:
                return $this->getBinamax3();
                break;
            case 11:
                return $this->getBinabin4();
                break;
            case 12:
                return $this->getBinamin4();
                break;
            case 13:
                return $this->getBinamax4();
                break;
            case 14:
                return $this->getBinabin5();
                break;
            case 15:
                return $this->getBinamin5();
                break;
            case 16:
                return $this->getBinamax5();
                break;
            case 17:
                return $this->getBinabin6();
                break;
            case 18:
                return $this->getBinamin6();
                break;
            case 19:
                return $this->getBinamax6();
                break;
            case 20:
                return $this->getBinabin7();
                break;
            case 21:
                return $this->getBinamin7();
                break;
            case 22:
                return $this->getBinamax7();
                break;
            case 23:
                return $this->getBinabin8();
                break;
            case 24:
                return $this->getBinamin8();
                break;
            case 25:
                return $this->getBinamax8();
                break;
            case 26:
                return $this->getBinabin9();
                break;
            case 27:
                return $this->getBinamin9();
                break;
            case 28:
                return $this->getBinamax9();
                break;
            case 29:
                return $this->getDateupdtd();
                break;
            case 30:
                return $this->getTimeupdtd();
                break;
            case 31:
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

        if (isset($alreadyDumpedObjects['InvWhseItemBin'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvWhseItemBin'][$this->hashCode()] = true;
        $keys = InvWhseItemBinTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getIntbwhse(),
            $keys[2] => $this->getBinabin1(),
            $keys[3] => $this->getBinamin1(),
            $keys[4] => $this->getBinamax1(),
            $keys[5] => $this->getBinabin2(),
            $keys[6] => $this->getBinamin2(),
            $keys[7] => $this->getBinamax2(),
            $keys[8] => $this->getBinabin3(),
            $keys[9] => $this->getBinamin3(),
            $keys[10] => $this->getBinamax3(),
            $keys[11] => $this->getBinabin4(),
            $keys[12] => $this->getBinamin4(),
            $keys[13] => $this->getBinamax4(),
            $keys[14] => $this->getBinabin5(),
            $keys[15] => $this->getBinamin5(),
            $keys[16] => $this->getBinamax5(),
            $keys[17] => $this->getBinabin6(),
            $keys[18] => $this->getBinamin6(),
            $keys[19] => $this->getBinamax6(),
            $keys[20] => $this->getBinabin7(),
            $keys[21] => $this->getBinamin7(),
            $keys[22] => $this->getBinamax7(),
            $keys[23] => $this->getBinabin8(),
            $keys[24] => $this->getBinamin8(),
            $keys[25] => $this->getBinamax8(),
            $keys[26] => $this->getBinabin9(),
            $keys[27] => $this->getBinamin9(),
            $keys[28] => $this->getBinamax9(),
            $keys[29] => $this->getDateupdtd(),
            $keys[30] => $this->getTimeupdtd(),
            $keys[31] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aItemMasterItem) {

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

                $result[$key] = $this->aItemMasterItem->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aWarehouse) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'warehouse';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_whse_code';
                        break;
                    default:
                        $key = 'Warehouse';
                }

                $result[$key] = $this->aWarehouse->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aWarehouseInventory) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'warehouseInventory';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_whse_mast';
                        break;
                    default:
                        $key = 'WarehouseInventory';
                }

                $result[$key] = $this->aWarehouseInventory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\InvWhseItemBin
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvWhseItemBinTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvWhseItemBin
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setIntbwhse($value);
                break;
            case 2:
                $this->setBinabin1($value);
                break;
            case 3:
                $this->setBinamin1($value);
                break;
            case 4:
                $this->setBinamax1($value);
                break;
            case 5:
                $this->setBinabin2($value);
                break;
            case 6:
                $this->setBinamin2($value);
                break;
            case 7:
                $this->setBinamax2($value);
                break;
            case 8:
                $this->setBinabin3($value);
                break;
            case 9:
                $this->setBinamin3($value);
                break;
            case 10:
                $this->setBinamax3($value);
                break;
            case 11:
                $this->setBinabin4($value);
                break;
            case 12:
                $this->setBinamin4($value);
                break;
            case 13:
                $this->setBinamax4($value);
                break;
            case 14:
                $this->setBinabin5($value);
                break;
            case 15:
                $this->setBinamin5($value);
                break;
            case 16:
                $this->setBinamax5($value);
                break;
            case 17:
                $this->setBinabin6($value);
                break;
            case 18:
                $this->setBinamin6($value);
                break;
            case 19:
                $this->setBinamax6($value);
                break;
            case 20:
                $this->setBinabin7($value);
                break;
            case 21:
                $this->setBinamin7($value);
                break;
            case 22:
                $this->setBinamax7($value);
                break;
            case 23:
                $this->setBinabin8($value);
                break;
            case 24:
                $this->setBinamin8($value);
                break;
            case 25:
                $this->setBinamax8($value);
                break;
            case 26:
                $this->setBinabin9($value);
                break;
            case 27:
                $this->setBinamin9($value);
                break;
            case 28:
                $this->setBinamax9($value);
                break;
            case 29:
                $this->setDateupdtd($value);
                break;
            case 30:
                $this->setTimeupdtd($value);
                break;
            case 31:
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
        $keys = InvWhseItemBinTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbwhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setBinabin1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setBinamin1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setBinamax1($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setBinabin2($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setBinamin2($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setBinamax2($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setBinabin3($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setBinamin3($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setBinamax3($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setBinabin4($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setBinamin4($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setBinamax4($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setBinabin5($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setBinamin5($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setBinamax5($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setBinabin6($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setBinamin6($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setBinamax6($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setBinabin7($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setBinamin7($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setBinamax7($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setBinabin8($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setBinamin8($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setBinamax8($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setBinabin9($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setBinamin9($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setBinamax9($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setDateupdtd($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setTimeupdtd($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setDummy($arr[$keys[31]]);
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
     * @return $this|\InvWhseItemBin The current object, for fluid interface
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
        $criteria = new Criteria(InvWhseItemBinTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvWhseItemBinTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_INTBWHSE)) {
            $criteria->add(InvWhseItemBinTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN1)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN1, $this->binabin1);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN1)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN1, $this->binamin1);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX1)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX1, $this->binamax1);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN2)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN2, $this->binabin2);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN2)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN2, $this->binamin2);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX2)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX2, $this->binamax2);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN3)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN3, $this->binabin3);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN3)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN3, $this->binamin3);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX3)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX3, $this->binamax3);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN4)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN4, $this->binabin4);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN4)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN4, $this->binamin4);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX4)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX4, $this->binamax4);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN5)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN5, $this->binabin5);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN5)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN5, $this->binamin5);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX5)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX5, $this->binamax5);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN6)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN6, $this->binabin6);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN6)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN6, $this->binamin6);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX6)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX6, $this->binamax6);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN7)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN7, $this->binabin7);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN7)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN7, $this->binamin7);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX7)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX7, $this->binamax7);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN8)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN8, $this->binabin8);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN8)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN8, $this->binamin8);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX8)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX8, $this->binamax8);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINABIN9)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINABIN9, $this->binabin9);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMIN9)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMIN9, $this->binamin9);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_BINAMAX9)) {
            $criteria->add(InvWhseItemBinTableMap::COL_BINAMAX9, $this->binamax9);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvWhseItemBinTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvWhseItemBinTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvWhseItemBinTableMap::COL_DUMMY)) {
            $criteria->add(InvWhseItemBinTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvWhseItemBinQuery::create();
        $criteria->add(InvWhseItemBinTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvWhseItemBinTableMap::COL_INTBWHSE, $this->intbwhse);

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
        $validPk = null !== $this->getInititemnbr() &&
            null !== $this->getIntbwhse();

        $validPrimaryKeyFKs = 4;
        $primaryKeyFKs = [];

        //relation item to table inv_item_mast
        if ($this->aItemMasterItem && $hash = spl_object_hash($this->aItemMasterItem)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation warehouse to table inv_whse_code
        if ($this->aWarehouse && $hash = spl_object_hash($this->aWarehouse)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation warehouseitem to table inv_whse_mast
        if ($this->aWarehouseInventory && $hash = spl_object_hash($this->aWarehouseInventory)) {
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
        $pks[0] = $this->getInititemnbr();
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
        $this->setInititemnbr($keys[0]);
        $this->setIntbwhse($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInititemnbr()) && (null === $this->getIntbwhse());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvWhseItemBin (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setBinabin1($this->getBinabin1());
        $copyObj->setBinamin1($this->getBinamin1());
        $copyObj->setBinamax1($this->getBinamax1());
        $copyObj->setBinabin2($this->getBinabin2());
        $copyObj->setBinamin2($this->getBinamin2());
        $copyObj->setBinamax2($this->getBinamax2());
        $copyObj->setBinabin3($this->getBinabin3());
        $copyObj->setBinamin3($this->getBinamin3());
        $copyObj->setBinamax3($this->getBinamax3());
        $copyObj->setBinabin4($this->getBinabin4());
        $copyObj->setBinamin4($this->getBinamin4());
        $copyObj->setBinamax4($this->getBinamax4());
        $copyObj->setBinabin5($this->getBinabin5());
        $copyObj->setBinamin5($this->getBinamin5());
        $copyObj->setBinamax5($this->getBinamax5());
        $copyObj->setBinabin6($this->getBinabin6());
        $copyObj->setBinamin6($this->getBinamin6());
        $copyObj->setBinamax6($this->getBinamax6());
        $copyObj->setBinabin7($this->getBinabin7());
        $copyObj->setBinamin7($this->getBinamin7());
        $copyObj->setBinamax7($this->getBinamax7());
        $copyObj->setBinabin8($this->getBinabin8());
        $copyObj->setBinamin8($this->getBinamin8());
        $copyObj->setBinamax8($this->getBinamax8());
        $copyObj->setBinabin9($this->getBinabin9());
        $copyObj->setBinamin9($this->getBinamin9());
        $copyObj->setBinamax9($this->getBinamax9());
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
     * @return \InvWhseItemBin Clone of current object.
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
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v !== null) {
            $v->addInvWhseItemBin($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildItemMasterItem object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildItemMasterItem The associated ChildItemMasterItem object.
     * @throws PropelException
     */
    public function getItemMasterItem(ConnectionInterface $con = null)
    {
        if ($this->aItemMasterItem === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null))) {
            $this->aItemMasterItem = ChildItemMasterItemQuery::create()->findPk($this->inititemnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aItemMasterItem->addInvWhseItemBins($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildWarehouse object.
     *
     * @param  ChildWarehouse $v
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     * @throws PropelException
     */
    public function setWarehouse(ChildWarehouse $v = null)
    {
        if ($v === null) {
            $this->setIntbwhse('');
        } else {
            $this->setIntbwhse($v->getIntbwhse());
        }

        $this->aWarehouse = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildWarehouse object, it will not be re-added.
        if ($v !== null) {
            $v->addInvWhseItemBin($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildWarehouse object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildWarehouse The associated ChildWarehouse object.
     * @throws PropelException
     */
    public function getWarehouse(ConnectionInterface $con = null)
    {
        if ($this->aWarehouse === null && (($this->intbwhse !== "" && $this->intbwhse !== null))) {
            $this->aWarehouse = ChildWarehouseQuery::create()->findPk($this->intbwhse, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aWarehouse->addInvWhseItemBins($this);
             */
        }

        return $this->aWarehouse;
    }

    /**
     * Declares an association between this object and a ChildWarehouseInventory object.
     *
     * @param  ChildWarehouseInventory $v
     * @return $this|\InvWhseItemBin The current object (for fluent API support)
     * @throws PropelException
     */
    public function setWarehouseInventory(ChildWarehouseInventory $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        if ($v === null) {
            $this->setIntbwhse('');
        } else {
            $this->setIntbwhse($v->getIntbwhse());
        }

        $this->aWarehouseInventory = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setInvWhseItemBin($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildWarehouseInventory object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildWarehouseInventory The associated ChildWarehouseInventory object.
     * @throws PropelException
     */
    public function getWarehouseInventory(ConnectionInterface $con = null)
    {
        if ($this->aWarehouseInventory === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->intbwhse !== "" && $this->intbwhse !== null))) {
            $this->aWarehouseInventory = ChildWarehouseInventoryQuery::create()->findPk(array($this->inititemnbr, $this->intbwhse), $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aWarehouseInventory->setInvWhseItemBin($this);
        }

        return $this->aWarehouseInventory;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeInvWhseItemBin($this);
        }
        if (null !== $this->aWarehouse) {
            $this->aWarehouse->removeInvWhseItemBin($this);
        }
        if (null !== $this->aWarehouseInventory) {
            $this->aWarehouseInventory->removeInvWhseItemBin($this);
        }
        $this->inititemnbr = null;
        $this->intbwhse = null;
        $this->binabin1 = null;
        $this->binamin1 = null;
        $this->binamax1 = null;
        $this->binabin2 = null;
        $this->binamin2 = null;
        $this->binamax2 = null;
        $this->binabin3 = null;
        $this->binamin3 = null;
        $this->binamax3 = null;
        $this->binabin4 = null;
        $this->binamin4 = null;
        $this->binamax4 = null;
        $this->binabin5 = null;
        $this->binamin5 = null;
        $this->binamax5 = null;
        $this->binabin6 = null;
        $this->binamin6 = null;
        $this->binamax6 = null;
        $this->binabin7 = null;
        $this->binamin7 = null;
        $this->binamax7 = null;
        $this->binabin8 = null;
        $this->binamin8 = null;
        $this->binamax8 = null;
        $this->binabin9 = null;
        $this->binamin9 = null;
        $this->binamax9 = null;
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

        $this->aItemMasterItem = null;
        $this->aWarehouse = null;
        $this->aWarehouseInventory = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvWhseItemBinTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // return parent::preSave($con);
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
            // return parent::preInsert($con);
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
            // return parent::preUpdate($con);
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
            // return parent::preDelete($con);
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
