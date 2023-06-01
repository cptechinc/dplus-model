<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItemXrefCustomerQuery as ChildItemXrefCustomerQuery;
use \Exception;
use \PDO;
use Map\ItemXrefCustomerTableMap;
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
 * Base class that represents a row from the 'cust_item_xref' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItemXrefCustomer implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItemXrefCustomerTableMap';


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
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the oexrcustitemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oexrcustitemnbr;

    /**
     * The value for the inititemnbr field.
     *
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the oexrretprice field.
     *
     * @var        string
     */
    protected $oexrretprice;

    /**
     * The value for the oexrcustprice field.
     *
     * @var        string
     */
    protected $oexrcustprice;

    /**
     * The value for the oexrqtypercase field.
     *
     * @var        int
     */
    protected $oexrqtypercase;

    /**
     * The value for the oexrinnerpackqty field.
     *
     * @var        int
     */
    protected $oexrinnerpackqty;

    /**
     * The value for the oexrouterpackqty field.
     *
     * @var        int
     */
    protected $oexrouterpackqty;

    /**
     * The value for the oexrrounding field.
     *
     * @var        string
     */
    protected $oexrrounding;

    /**
     * The value for the oexrshiptareqty field.
     *
     * @var        int
     */
    protected $oexrshiptareqty;

    /**
     * The value for the oexrcustitemdesc field.
     *
     * @var        string
     */
    protected $oexrcustitemdesc;

    /**
     * The value for the oexrconvert field.
     *
     * @var        string
     */
    protected $oexrconvert;

    /**
     * The value for the oexrcustitemdesc2 field.
     *
     * @var        string
     */
    protected $oexrcustitemdesc2;

    /**
     * The value for the oexrrevision field.
     *
     * @var        string
     */
    protected $oexrrevision;

    /**
     * The value for the oexrpurchqty field.
     *
     * @var        int
     */
    protected $oexrpurchqty;

    /**
     * The value for the oexrcustpricuom field.
     *
     * @var        string
     */
    protected $oexrcustpricuom;

    /**
     * The value for the oexrlabel1prtfmt field.
     *
     * @var        string
     */
    protected $oexrlabel1prtfmt;

    /**
     * The value for the oexrlabel2prtfmt field.
     *
     * @var        string
     */
    protected $oexrlabel2prtfmt;

    /**
     * The value for the oexrwght field.
     *
     * @var        string
     */
    protected $oexrwght;

    /**
     * The value for the oexrcustuom field.
     *
     * @var        string
     */
    protected $oexrcustuom;

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
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildCustomer
     */
    protected $aCustomer;

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
        $this->arcucustid = '';
        $this->oexrcustitemnbr = '';
    }

    /**
     * Initializes internal state of Base\ItemXrefCustomer object.
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
     * Compares this with another <code>ItemXrefCustomer</code> instance.  If
     * <code>obj</code> is an instance of <code>ItemXrefCustomer</code>, delegates to
     * <code>equals(ItemXrefCustomer)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ItemXrefCustomer The current object, for fluid interface
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [oexrcustitemnbr] column value.
     *
     * @return string
     */
    public function getOexrcustitemnbr()
    {
        return $this->oexrcustitemnbr;
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
     * Get the [oexrretprice] column value.
     *
     * @return string
     */
    public function getOexrretprice()
    {
        return $this->oexrretprice;
    }

    /**
     * Get the [oexrcustprice] column value.
     *
     * @return string
     */
    public function getOexrcustprice()
    {
        return $this->oexrcustprice;
    }

    /**
     * Get the [oexrqtypercase] column value.
     *
     * @return int
     */
    public function getOexrqtypercase()
    {
        return $this->oexrqtypercase;
    }

    /**
     * Get the [oexrinnerpackqty] column value.
     *
     * @return int
     */
    public function getOexrinnerpackqty()
    {
        return $this->oexrinnerpackqty;
    }

    /**
     * Get the [oexrouterpackqty] column value.
     *
     * @return int
     */
    public function getOexrouterpackqty()
    {
        return $this->oexrouterpackqty;
    }

    /**
     * Get the [oexrrounding] column value.
     *
     * @return string
     */
    public function getOexrrounding()
    {
        return $this->oexrrounding;
    }

    /**
     * Get the [oexrshiptareqty] column value.
     *
     * @return int
     */
    public function getOexrshiptareqty()
    {
        return $this->oexrshiptareqty;
    }

    /**
     * Get the [oexrcustitemdesc] column value.
     *
     * @return string
     */
    public function getOexrcustitemdesc()
    {
        return $this->oexrcustitemdesc;
    }

    /**
     * Get the [oexrconvert] column value.
     *
     * @return string
     */
    public function getOexrconvert()
    {
        return $this->oexrconvert;
    }

    /**
     * Get the [oexrcustitemdesc2] column value.
     *
     * @return string
     */
    public function getOexrcustitemdesc2()
    {
        return $this->oexrcustitemdesc2;
    }

    /**
     * Get the [oexrrevision] column value.
     *
     * @return string
     */
    public function getOexrrevision()
    {
        return $this->oexrrevision;
    }

    /**
     * Get the [oexrpurchqty] column value.
     *
     * @return int
     */
    public function getOexrpurchqty()
    {
        return $this->oexrpurchqty;
    }

    /**
     * Get the [oexrcustpricuom] column value.
     *
     * @return string
     */
    public function getOexrcustpricuom()
    {
        return $this->oexrcustpricuom;
    }

    /**
     * Get the [oexrlabel1prtfmt] column value.
     *
     * @return string
     */
    public function getOexrlabel1prtfmt()
    {
        return $this->oexrlabel1prtfmt;
    }

    /**
     * Get the [oexrlabel2prtfmt] column value.
     *
     * @return string
     */
    public function getOexrlabel2prtfmt()
    {
        return $this->oexrlabel2prtfmt;
    }

    /**
     * Get the [oexrwght] column value.
     *
     * @return string
     */
    public function getOexrwght()
    {
        return $this->oexrwght;
    }

    /**
     * Get the [oexrcustuom] column value.
     *
     * @return string
     */
    public function getOexrcustuom()
    {
        return $this->oexrcustuom;
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
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [oexrcustitemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrcustitemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrcustitemnbr !== $v) {
            $this->oexrcustitemnbr = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR] = true;
        }

        return $this;
    } // setOexrcustitemnbr()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [oexrretprice] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrretprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrretprice !== $v) {
            $this->oexrretprice = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRRETPRICE] = true;
        }

        return $this;
    } // setOexrretprice()

    /**
     * Set the value of [oexrcustprice] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrcustprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrcustprice !== $v) {
            $this->oexrcustprice = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE] = true;
        }

        return $this;
    } // setOexrcustprice()

    /**
     * Set the value of [oexrqtypercase] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrqtypercase($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oexrqtypercase !== $v) {
            $this->oexrqtypercase = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE] = true;
        }

        return $this;
    } // setOexrqtypercase()

    /**
     * Set the value of [oexrinnerpackqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrinnerpackqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oexrinnerpackqty !== $v) {
            $this->oexrinnerpackqty = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY] = true;
        }

        return $this;
    } // setOexrinnerpackqty()

    /**
     * Set the value of [oexrouterpackqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrouterpackqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oexrouterpackqty !== $v) {
            $this->oexrouterpackqty = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY] = true;
        }

        return $this;
    } // setOexrouterpackqty()

    /**
     * Set the value of [oexrrounding] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrrounding($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrrounding !== $v) {
            $this->oexrrounding = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRROUNDING] = true;
        }

        return $this;
    } // setOexrrounding()

    /**
     * Set the value of [oexrshiptareqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrshiptareqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oexrshiptareqty !== $v) {
            $this->oexrshiptareqty = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY] = true;
        }

        return $this;
    } // setOexrshiptareqty()

    /**
     * Set the value of [oexrcustitemdesc] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrcustitemdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrcustitemdesc !== $v) {
            $this->oexrcustitemdesc = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC] = true;
        }

        return $this;
    } // setOexrcustitemdesc()

    /**
     * Set the value of [oexrconvert] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrconvert($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrconvert !== $v) {
            $this->oexrconvert = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRCONVERT] = true;
        }

        return $this;
    } // setOexrconvert()

    /**
     * Set the value of [oexrcustitemdesc2] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrcustitemdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrcustitemdesc2 !== $v) {
            $this->oexrcustitemdesc2 = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2] = true;
        }

        return $this;
    } // setOexrcustitemdesc2()

    /**
     * Set the value of [oexrrevision] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrrevision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrrevision !== $v) {
            $this->oexrrevision = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRREVISION] = true;
        }

        return $this;
    } // setOexrrevision()

    /**
     * Set the value of [oexrpurchqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrpurchqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oexrpurchqty !== $v) {
            $this->oexrpurchqty = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRPURCHQTY] = true;
        }

        return $this;
    } // setOexrpurchqty()

    /**
     * Set the value of [oexrcustpricuom] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrcustpricuom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrcustpricuom !== $v) {
            $this->oexrcustpricuom = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM] = true;
        }

        return $this;
    } // setOexrcustpricuom()

    /**
     * Set the value of [oexrlabel1prtfmt] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrlabel1prtfmt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrlabel1prtfmt !== $v) {
            $this->oexrlabel1prtfmt = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT] = true;
        }

        return $this;
    } // setOexrlabel1prtfmt()

    /**
     * Set the value of [oexrlabel2prtfmt] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrlabel2prtfmt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrlabel2prtfmt !== $v) {
            $this->oexrlabel2prtfmt = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT] = true;
        }

        return $this;
    } // setOexrlabel2prtfmt()

    /**
     * Set the value of [oexrwght] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrwght !== $v) {
            $this->oexrwght = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRWGHT] = true;
        }

        return $this;
    } // setOexrwght()

    /**
     * Set the value of [oexrcustuom] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setOexrcustuom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oexrcustuom !== $v) {
            $this->oexrcustuom = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_OEXRCUSTUOM] = true;
        }

        return $this;
    } // setOexrcustuom()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItemXrefCustomerTableMap::COL_DUMMY] = true;
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
            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->oexrcustitemnbr !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrcustitemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrretprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrretprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrcustprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrcustprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrqtypercase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrqtypercase = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrinnerpackqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrinnerpackqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrouterpackqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrouterpackqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrrounding', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrrounding = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrshiptareqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrshiptareqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrcustitemdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrcustitemdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrconvert', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrconvert = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrcustitemdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrcustitemdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrrevision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrrevision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrpurchqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrpurchqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrcustpricuom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrcustpricuom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrlabel1prtfmt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrlabel1prtfmt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrlabel2prtfmt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrlabel2prtfmt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Oexrcustuom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oexrcustuom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ItemXrefCustomerTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = ItemXrefCustomerTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItemXrefCustomer'), 0, $e);
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
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemXrefCustomerQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
            $this->aCustomer = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ItemXrefCustomer::setDeleted()
     * @see ItemXrefCustomer::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemXrefCustomerQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
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
                ItemXrefCustomerTableMap::addInstanceToPool($this);
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

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
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
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OexrCustItemNbr';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRRETPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'OexrRetPrice';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'OexrCustPrice';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE)) {
            $modifiedColumns[':p' . $index++]  = 'OexrQtyPerCase';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OexrInnerPackQty';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OexrOuterPackQty';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRROUNDING)) {
            $modifiedColumns[':p' . $index++]  = 'OexrRounding';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OexrShipTareQty';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC)) {
            $modifiedColumns[':p' . $index++]  = 'OexrCustItemDesc';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCONVERT)) {
            $modifiedColumns[':p' . $index++]  = 'OexrConvert';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'OexrCustItemDesc2';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRREVISION)) {
            $modifiedColumns[':p' . $index++]  = 'OexrRevision';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OexrPurchQty';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM)) {
            $modifiedColumns[':p' . $index++]  = 'OexrCustPricUom';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT)) {
            $modifiedColumns[':p' . $index++]  = 'OexrLabel1PrtFmt';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT)) {
            $modifiedColumns[':p' . $index++]  = 'OexrLabel2PrtFmt';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'OexrWght';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTUOM)) {
            $modifiedColumns[':p' . $index++]  = 'OexrCustUom';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO cust_item_xref (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'OexrCustItemNbr':
                        $stmt->bindValue($identifier, $this->oexrcustitemnbr, PDO::PARAM_STR);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'OexrRetPrice':
                        $stmt->bindValue($identifier, $this->oexrretprice, PDO::PARAM_STR);
                        break;
                    case 'OexrCustPrice':
                        $stmt->bindValue($identifier, $this->oexrcustprice, PDO::PARAM_STR);
                        break;
                    case 'OexrQtyPerCase':
                        $stmt->bindValue($identifier, $this->oexrqtypercase, PDO::PARAM_INT);
                        break;
                    case 'OexrInnerPackQty':
                        $stmt->bindValue($identifier, $this->oexrinnerpackqty, PDO::PARAM_INT);
                        break;
                    case 'OexrOuterPackQty':
                        $stmt->bindValue($identifier, $this->oexrouterpackqty, PDO::PARAM_INT);
                        break;
                    case 'OexrRounding':
                        $stmt->bindValue($identifier, $this->oexrrounding, PDO::PARAM_STR);
                        break;
                    case 'OexrShipTareQty':
                        $stmt->bindValue($identifier, $this->oexrshiptareqty, PDO::PARAM_INT);
                        break;
                    case 'OexrCustItemDesc':
                        $stmt->bindValue($identifier, $this->oexrcustitemdesc, PDO::PARAM_STR);
                        break;
                    case 'OexrConvert':
                        $stmt->bindValue($identifier, $this->oexrconvert, PDO::PARAM_STR);
                        break;
                    case 'OexrCustItemDesc2':
                        $stmt->bindValue($identifier, $this->oexrcustitemdesc2, PDO::PARAM_STR);
                        break;
                    case 'OexrRevision':
                        $stmt->bindValue($identifier, $this->oexrrevision, PDO::PARAM_STR);
                        break;
                    case 'OexrPurchQty':
                        $stmt->bindValue($identifier, $this->oexrpurchqty, PDO::PARAM_INT);
                        break;
                    case 'OexrCustPricUom':
                        $stmt->bindValue($identifier, $this->oexrcustpricuom, PDO::PARAM_STR);
                        break;
                    case 'OexrLabel1PrtFmt':
                        $stmt->bindValue($identifier, $this->oexrlabel1prtfmt, PDO::PARAM_STR);
                        break;
                    case 'OexrLabel2PrtFmt':
                        $stmt->bindValue($identifier, $this->oexrlabel2prtfmt, PDO::PARAM_STR);
                        break;
                    case 'OexrWght':
                        $stmt->bindValue($identifier, $this->oexrwght, PDO::PARAM_STR);
                        break;
                    case 'OexrCustUom':
                        $stmt->bindValue($identifier, $this->oexrcustuom, PDO::PARAM_STR);
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
        $pos = ItemXrefCustomerTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArcucustid();
                break;
            case 1:
                return $this->getOexrcustitemnbr();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getOexrretprice();
                break;
            case 4:
                return $this->getOexrcustprice();
                break;
            case 5:
                return $this->getOexrqtypercase();
                break;
            case 6:
                return $this->getOexrinnerpackqty();
                break;
            case 7:
                return $this->getOexrouterpackqty();
                break;
            case 8:
                return $this->getOexrrounding();
                break;
            case 9:
                return $this->getOexrshiptareqty();
                break;
            case 10:
                return $this->getOexrcustitemdesc();
                break;
            case 11:
                return $this->getOexrconvert();
                break;
            case 12:
                return $this->getOexrcustitemdesc2();
                break;
            case 13:
                return $this->getOexrrevision();
                break;
            case 14:
                return $this->getOexrpurchqty();
                break;
            case 15:
                return $this->getOexrcustpricuom();
                break;
            case 16:
                return $this->getOexrlabel1prtfmt();
                break;
            case 17:
                return $this->getOexrlabel2prtfmt();
                break;
            case 18:
                return $this->getOexrwght();
                break;
            case 19:
                return $this->getOexrcustuom();
                break;
            case 20:
                return $this->getDateupdtd();
                break;
            case 21:
                return $this->getTimeupdtd();
                break;
            case 22:
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

        if (isset($alreadyDumpedObjects['ItemXrefCustomer'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ItemXrefCustomer'][$this->hashCode()] = true;
        $keys = ItemXrefCustomerTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getOexrcustitemnbr(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getOexrretprice(),
            $keys[4] => $this->getOexrcustprice(),
            $keys[5] => $this->getOexrqtypercase(),
            $keys[6] => $this->getOexrinnerpackqty(),
            $keys[7] => $this->getOexrouterpackqty(),
            $keys[8] => $this->getOexrrounding(),
            $keys[9] => $this->getOexrshiptareqty(),
            $keys[10] => $this->getOexrcustitemdesc(),
            $keys[11] => $this->getOexrconvert(),
            $keys[12] => $this->getOexrcustitemdesc2(),
            $keys[13] => $this->getOexrrevision(),
            $keys[14] => $this->getOexrpurchqty(),
            $keys[15] => $this->getOexrcustpricuom(),
            $keys[16] => $this->getOexrlabel1prtfmt(),
            $keys[17] => $this->getOexrlabel2prtfmt(),
            $keys[18] => $this->getOexrwght(),
            $keys[19] => $this->getOexrcustuom(),
            $keys[20] => $this->getDateupdtd(),
            $keys[21] => $this->getTimeupdtd(),
            $keys[22] => $this->getDummy(),
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
     * @return $this|\ItemXrefCustomer
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemXrefCustomerTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ItemXrefCustomer
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setOexrcustitemnbr($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setOexrretprice($value);
                break;
            case 4:
                $this->setOexrcustprice($value);
                break;
            case 5:
                $this->setOexrqtypercase($value);
                break;
            case 6:
                $this->setOexrinnerpackqty($value);
                break;
            case 7:
                $this->setOexrouterpackqty($value);
                break;
            case 8:
                $this->setOexrrounding($value);
                break;
            case 9:
                $this->setOexrshiptareqty($value);
                break;
            case 10:
                $this->setOexrcustitemdesc($value);
                break;
            case 11:
                $this->setOexrconvert($value);
                break;
            case 12:
                $this->setOexrcustitemdesc2($value);
                break;
            case 13:
                $this->setOexrrevision($value);
                break;
            case 14:
                $this->setOexrpurchqty($value);
                break;
            case 15:
                $this->setOexrcustpricuom($value);
                break;
            case 16:
                $this->setOexrlabel1prtfmt($value);
                break;
            case 17:
                $this->setOexrlabel2prtfmt($value);
                break;
            case 18:
                $this->setOexrwght($value);
                break;
            case 19:
                $this->setOexrcustuom($value);
                break;
            case 20:
                $this->setDateupdtd($value);
                break;
            case 21:
                $this->setTimeupdtd($value);
                break;
            case 22:
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
        $keys = ItemXrefCustomerTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOexrcustitemnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOexrretprice($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOexrcustprice($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOexrqtypercase($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOexrinnerpackqty($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOexrouterpackqty($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOexrrounding($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOexrshiptareqty($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOexrcustitemdesc($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOexrconvert($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOexrcustitemdesc2($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOexrrevision($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOexrpurchqty($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOexrcustpricuom($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOexrlabel1prtfmt($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOexrlabel2prtfmt($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setOexrwght($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOexrcustuom($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDateupdtd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setTimeupdtd($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setDummy($arr[$keys[22]]);
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
     * @return $this|\ItemXrefCustomer The current object, for fluid interface
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
        $criteria = new Criteria(ItemXrefCustomerTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_ARCUCUSTID)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $this->oexrcustitemnbr);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_INITITEMNBR)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRRETPRICE)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRRETPRICE, $this->oexrretprice);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE, $this->oexrcustprice);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE, $this->oexrqtypercase);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY, $this->oexrinnerpackqty);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY, $this->oexrouterpackqty);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRROUNDING)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRROUNDING, $this->oexrrounding);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY, $this->oexrshiptareqty);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC, $this->oexrcustitemdesc);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCONVERT)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRCONVERT, $this->oexrconvert);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2, $this->oexrcustitemdesc2);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRREVISION)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRREVISION, $this->oexrrevision);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY, $this->oexrpurchqty);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM, $this->oexrcustpricuom);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT, $this->oexrlabel1prtfmt);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT, $this->oexrlabel2prtfmt);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRWGHT)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRWGHT, $this->oexrwght);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_OEXRCUSTUOM)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_OEXRCUSTUOM, $this->oexrcustuom);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItemXrefCustomerTableMap::COL_DUMMY)) {
            $criteria->add(ItemXrefCustomerTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildItemXrefCustomerQuery::create();
        $criteria->add(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $this->arcucustid);
        $criteria->add(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $this->oexrcustitemnbr);

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
        $validPk = null !== $this->getArcucustid() &&
            null !== $this->getOexrcustitemnbr();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation customer to table ar_cust_mast
        if ($this->aCustomer && $hash = spl_object_hash($this->aCustomer)) {
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
        $pks[0] = $this->getArcucustid();
        $pks[1] = $this->getOexrcustitemnbr();

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
        $this->setArcucustid($keys[0]);
        $this->setOexrcustitemnbr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getArcucustid()) && (null === $this->getOexrcustitemnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ItemXrefCustomer (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setOexrcustitemnbr($this->getOexrcustitemnbr());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setOexrretprice($this->getOexrretprice());
        $copyObj->setOexrcustprice($this->getOexrcustprice());
        $copyObj->setOexrqtypercase($this->getOexrqtypercase());
        $copyObj->setOexrinnerpackqty($this->getOexrinnerpackqty());
        $copyObj->setOexrouterpackqty($this->getOexrouterpackqty());
        $copyObj->setOexrrounding($this->getOexrrounding());
        $copyObj->setOexrshiptareqty($this->getOexrshiptareqty());
        $copyObj->setOexrcustitemdesc($this->getOexrcustitemdesc());
        $copyObj->setOexrconvert($this->getOexrconvert());
        $copyObj->setOexrcustitemdesc2($this->getOexrcustitemdesc2());
        $copyObj->setOexrrevision($this->getOexrrevision());
        $copyObj->setOexrpurchqty($this->getOexrpurchqty());
        $copyObj->setOexrcustpricuom($this->getOexrcustpricuom());
        $copyObj->setOexrlabel1prtfmt($this->getOexrlabel1prtfmt());
        $copyObj->setOexrlabel2prtfmt($this->getOexrlabel2prtfmt());
        $copyObj->setOexrwght($this->getOexrwght());
        $copyObj->setOexrcustuom($this->getOexrcustuom());
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
     * @return \ItemXrefCustomer Clone of current object.
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
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr(NULL);
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v !== null) {
            $v->addItemXrefCustomer($this);
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
                $this->aItemMasterItem->addItemXrefCustomers($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\ItemXrefCustomer The current object (for fluent API support)
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
            $v->addItemXrefCustomer($this);
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
                $this->aCustomer->addItemXrefCustomers($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeItemXrefCustomer($this);
        }
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeItemXrefCustomer($this);
        }
        $this->arcucustid = null;
        $this->oexrcustitemnbr = null;
        $this->inititemnbr = null;
        $this->oexrretprice = null;
        $this->oexrcustprice = null;
        $this->oexrqtypercase = null;
        $this->oexrinnerpackqty = null;
        $this->oexrouterpackqty = null;
        $this->oexrrounding = null;
        $this->oexrshiptareqty = null;
        $this->oexrcustitemdesc = null;
        $this->oexrconvert = null;
        $this->oexrcustitemdesc2 = null;
        $this->oexrrevision = null;
        $this->oexrpurchqty = null;
        $this->oexrcustpricuom = null;
        $this->oexrlabel1prtfmt = null;
        $this->oexrlabel2prtfmt = null;
        $this->oexrwght = null;
        $this->oexrcustuom = null;
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
        $this->aCustomer = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItemXrefCustomerTableMap::DEFAULT_STRING_FORMAT);
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
