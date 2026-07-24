<?php

namespace Base;

use \CstkItemQuery as ChildCstkItemQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\CstkItemTableMap;
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
 * Base class that represents a row from the 'cust_stock_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class CstkItem implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = \Map\CstkItemTableMap::class;


    /**
     * attribute to determine if this object has previously been saved.
     * @var bool
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var bool
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = [];

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = [];

    /**
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arstshipid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arstshipid;

    /**
     * The value for the cskhcell field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cskhcell;

    /**
     * The value for the cskdline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $cskdline;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the cskdcustitem field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cskdcustitem;

    /**
     * The value for the cskdbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cskdbin;

    /**
     * The value for the cskdenterdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cskdenterdate;

    /**
     * The value for the cskdonhand field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $cskdonhand;

    /**
     * The value for the cskdunitprice field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $cskdunitprice;

    /**
     * The value for the cskdestusag field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $cskdestusag;

    /**
     * The value for the cskdordpnt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $cskdordpnt;

    /**
     * The value for the cskdordqty field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $cskdordqty;

    /**
     * The value for the cskdmaxqty field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $cskdmaxqty;

    /**
     * The value for the cskdcountdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cskdcountdate;

    /**
     * The value for the cskdusaglast12 field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $cskdusaglast12;

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
     * @var        ChildCustomerShipto
     */
    protected $aCustomerShipto;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues(): void
    {
        $this->arcucustid = '';
        $this->arstshipid = '';
        $this->cskhcell = '';
        $this->cskdline = 0;
        $this->inititemnbr = '';
        $this->cskdcustitem = '';
        $this->cskdbin = '';
        $this->cskdenterdate = '';
        $this->cskdonhand = '0.00';
        $this->cskdunitprice = '0.00';
        $this->cskdestusag = '0.00';
        $this->cskdordpnt = '0.00';
        $this->cskdordqty = '0.00';
        $this->cskdmaxqty = '0.00';
        $this->cskdcountdate = '';
        $this->cskdusaglast12 = '0';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\CstkItem object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return bool True if the object has been modified.
     */
    public function isModified(): bool
    {
        return (bool) $this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param string $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return bool True if $col has been modified.
     */
    public function isColumnModified(string $col): bool
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns(): array
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return bool True, if the object has never been persisted.
     */
    public function isNew(): bool
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param bool $b the state of the object.
     */
    public function setNew(bool $b): void
    {
        $this->new = $b;
    }

    /**
     * Whether this object has been deleted.
     * @return bool The deleted state of this object.
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param bool $b The deleted state of this object.
     */
    public function setDeleted(bool $b): void
    {
        $this->deleted = $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param string $col If supplied, only the specified column is reset.
     */
    public function resetModified(?string $col = null): void
    {
        if (null !== $col) {
            unset($this->modifiedColumns[$col]);
        } else {
            $this->modifiedColumns = [];
        }
    }

    /**
     * Compares this with another <code>CstkItem</code> instance.  If
     * <code>obj</code> is an instance of <code>CstkItem</code>, delegates to
     * <code>equals(CstkItem)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param mixed $obj The object to compare to.
     * @return bool Whether equal to the object specified.
     */
    public function equals($obj): bool
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
     */
    public function getVirtualColumns(): array
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param string $name The virtual column name
     */
    public function hasVirtualColumn(string $name): bool
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return mixed
     *
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getVirtualColumn(string $name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of nonexistent virtual column `%s`.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @param mixed $value The value to give to the virtual column
     *
     * @return $this The current object, for fluid interface
     */
    public function setVirtualColumn(string $name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param int $priority One of the Propel::LOG_* logging levels
     */
    protected function log(string $msg, int $priority = Propel::LOG_INFO): void
    {
        Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param \Propel\Runtime\Parser\AbstractParser|string $parser An AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME, TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM. Defaults to TableMap::TYPE_PHPNAME.
     * @return string The exported data
     */
    public function exportTo($parser, bool $includeLazyLoadColumns = true, string $keyType = TableMap::TYPE_PHPNAME): string
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, [], true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     *
     * @return array<string>
     */
    public function __sleep(): array
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
     * Get the [arstshipid] column value.
     *
     * @return string
     */
    public function getArstshipid()
    {
        return $this->arstshipid;
    }

    /**
     * Get the [cskhcell] column value.
     *
     * @return string
     */
    public function getCskhcell()
    {
        return $this->cskhcell;
    }

    /**
     * Get the [cskdline] column value.
     *
     * @return int
     */
    public function getCskdline()
    {
        return $this->cskdline;
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
     * Get the [cskdcustitem] column value.
     *
     * @return string
     */
    public function getCskdcustitem()
    {
        return $this->cskdcustitem;
    }

    /**
     * Get the [cskdbin] column value.
     *
     * @return string
     */
    public function getCskdbin()
    {
        return $this->cskdbin;
    }

    /**
     * Get the [cskdenterdate] column value.
     *
     * @return string
     */
    public function getCskdenterdate()
    {
        return $this->cskdenterdate;
    }

    /**
     * Get the [cskdonhand] column value.
     *
     * @return string
     */
    public function getCskdonhand()
    {
        return $this->cskdonhand;
    }

    /**
     * Get the [cskdunitprice] column value.
     *
     * @return string
     */
    public function getCskdunitprice()
    {
        return $this->cskdunitprice;
    }

    /**
     * Get the [cskdestusag] column value.
     *
     * @return string
     */
    public function getCskdestusag()
    {
        return $this->cskdestusag;
    }

    /**
     * Get the [cskdordpnt] column value.
     *
     * @return string
     */
    public function getCskdordpnt()
    {
        return $this->cskdordpnt;
    }

    /**
     * Get the [cskdordqty] column value.
     *
     * @return string
     */
    public function getCskdordqty()
    {
        return $this->cskdordqty;
    }

    /**
     * Get the [cskdmaxqty] column value.
     *
     * @return string
     */
    public function getCskdmaxqty()
    {
        return $this->cskdmaxqty;
    }

    /**
     * Get the [cskdcountdate] column value.
     *
     * @return string
     */
    public function getCskdcountdate()
    {
        return $this->cskdcountdate;
    }

    /**
     * Get the [cskdusaglast12] column value.
     *
     * @return string
     */
    public function getCskdusaglast12()
    {
        return $this->cskdusaglast12;
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
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArcucustid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    }

    /**
     * Set the value of [arstshipid] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_ARSTSHIPID] = true;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArstshipid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    }

    /**
     * Set the value of [cskhcell] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskhcell($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskhcell !== $v) {
            $this->cskhcell = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKHCELL] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdline] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cskdline !== $v) {
            $this->cskdline = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDLINE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    }

    /**
     * Set the value of [cskdcustitem] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdcustitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdcustitem !== $v) {
            $this->cskdcustitem = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDCUSTITEM] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdbin] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdbin !== $v) {
            $this->cskdbin = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDBIN] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdenterdate] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdenterdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdenterdate !== $v) {
            $this->cskdenterdate = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDENTERDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdonhand] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdonhand($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdonhand !== $v) {
            $this->cskdonhand = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDONHAND] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdunitprice] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdunitprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdunitprice !== $v) {
            $this->cskdunitprice = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDUNITPRICE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdestusag] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdestusag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdestusag !== $v) {
            $this->cskdestusag = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDESTUSAG] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdordpnt] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdordpnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdordpnt !== $v) {
            $this->cskdordpnt = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDORDPNT] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdordqty] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdordqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdordqty !== $v) {
            $this->cskdordqty = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDORDQTY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdmaxqty] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdmaxqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdmaxqty !== $v) {
            $this->cskdmaxqty = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDMAXQTY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdcountdate] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdcountdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdcountdate !== $v) {
            $this->cskdcountdate = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDCOUNTDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [cskdusaglast12] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setCskdusaglast12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cskdusaglast12 !== $v) {
            $this->cskdusaglast12 = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_CSKDUSAGLAST12] = true;
        }

        return $this;
    }

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    }

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    }

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[CstkItemTableMap::COL_DUMMY] = true;
        }

        return $this;
    }

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return bool Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues(): bool
    {
            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->arstshipid !== '') {
                return false;
            }

            if ($this->cskhcell !== '') {
                return false;
            }

            if ($this->cskdline !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->cskdcustitem !== '') {
                return false;
            }

            if ($this->cskdbin !== '') {
                return false;
            }

            if ($this->cskdenterdate !== '') {
                return false;
            }

            if ($this->cskdonhand !== '0.00') {
                return false;
            }

            if ($this->cskdunitprice !== '0.00') {
                return false;
            }

            if ($this->cskdestusag !== '0.00') {
                return false;
            }

            if ($this->cskdordpnt !== '0.00') {
                return false;
            }

            if ($this->cskdordqty !== '0.00') {
                return false;
            }

            if ($this->cskdmaxqty !== '0.00') {
                return false;
            }

            if ($this->cskdcountdate !== '') {
                return false;
            }

            if ($this->cskdusaglast12 !== '0') {
                return false;
            }

            if ($this->dateupdtd !== '') {
                return false;
            }

            if ($this->timeupdtd !== '') {
                return false;
            }
            // otherwise, everything was equal, so return TRUE
            return $this->dummy === 'P';
    }

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by DataFetcher->fetch().
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param bool $rehydrate Whether this object is being re-hydrated from the database.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int next starting column
     * @throws \Propel\Runtime\Exception\PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(array $row, int $startcol = 0, bool $rehydrate = false, string $indexType = TableMap::TYPE_NUM): int
    {
        try {

            $col = $row[TableMap::TYPE_NUM === $indexType ? $startcol : CstkItemTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 1 + $startcol : CstkItemTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 2 + $startcol : CstkItemTableMap::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskhcell = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 3 + $startcol : CstkItemTableMap::translateFieldName('Cskdline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 4 + $startcol : CstkItemTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 5 + $startcol : CstkItemTableMap::translateFieldName('Cskdcustitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdcustitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 6 + $startcol : CstkItemTableMap::translateFieldName('Cskdbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 7 + $startcol : CstkItemTableMap::translateFieldName('Cskdenterdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdenterdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 8 + $startcol : CstkItemTableMap::translateFieldName('Cskdonhand', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdonhand = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 9 + $startcol : CstkItemTableMap::translateFieldName('Cskdunitprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdunitprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 10 + $startcol : CstkItemTableMap::translateFieldName('Cskdestusag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdestusag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 11 + $startcol : CstkItemTableMap::translateFieldName('Cskdordpnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdordpnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 12 + $startcol : CstkItemTableMap::translateFieldName('Cskdordqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdordqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 13 + $startcol : CstkItemTableMap::translateFieldName('Cskdmaxqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdmaxqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 14 + $startcol : CstkItemTableMap::translateFieldName('Cskdcountdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdcountdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 15 + $startcol : CstkItemTableMap::translateFieldName('Cskdusaglast12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cskdusaglast12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 16 + $startcol : CstkItemTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 17 + $startcol : CstkItemTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 18 + $startcol : CstkItemTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 19; // 19 = CstkItemTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CstkItem'), 0, $e);
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
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function ensureConsistency(): void
    {
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
        if ($this->aCustomerShipto !== null && $this->arcucustid !== $this->aCustomerShipto->getArcucustid()) {
            $this->aCustomerShipto = null;
        }
        if ($this->aCustomerShipto !== null && $this->arstshipid !== $this->aCustomerShipto->getArstshipid()) {
            $this->aCustomerShipto = null;
        }
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
    }

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param bool $deep (optional) Whether to also de-associated any related objects.
     * @param ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @throws \Propel\Runtime\Exception\PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload(bool $deep = false, ?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if (!$con instanceof \Propel\Runtime\Connection\ConnectionInterface) {
            $con = Propel::getServiceContainer()->getReadConnection(CstkItemTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCstkItemQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->aCustomerShipto = null;
            $this->aItemMasterItem = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @throws \Propel\Runtime\Exception\PropelException
     * @see CstkItem::setDeleted()
     * @see CstkItem::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if (!$con instanceof \Propel\Runtime\Connection\ConnectionInterface) {
            $con = Propel::getServiceContainer()->getWriteConnection(CstkItemTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCstkItemQuery::create()
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
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    public function save(?ConnectionInterface $con = null): int
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if (!$con instanceof \Propel\Runtime\Connection\ConnectionInterface) {
            $con = Propel::getServiceContainer()->getWriteConnection(CstkItemTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            $ret = $isInsert ? $ret && $this->preInsert($con) : $ret && $this->preUpdate($con);
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CstkItemTableMap::addInstanceToPool($this);
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
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con): int
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

            if ($this->aCustomerShipto !== null) {
                if ($this->aCustomerShipto->isModified() || $this->aCustomerShipto->isNew()) {
                    $affectedRows += $this->aCustomerShipto->save($con);
                }
                $this->setCustomerShipto($this->aCustomerShipto);
            }

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
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
    }

    /**
     * Insert the row in the database.
     *
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con): void
    {
        $modifiedColumns = [];
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CstkItemTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKHCELL)) {
            $modifiedColumns[':p' . $index++]  = 'CskhCell';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDLINE)) {
            $modifiedColumns[':p' . $index++]  = 'CskdLine';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDCUSTITEM)) {
            $modifiedColumns[':p' . $index++]  = 'CskdCustItem';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'CskdBin';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDENTERDATE)) {
            $modifiedColumns[':p' . $index++]  = 'CskdEnterDate';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDONHAND)) {
            $modifiedColumns[':p' . $index++]  = 'CskdOnHand';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDUNITPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'CskdUnitPrice';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDESTUSAG)) {
            $modifiedColumns[':p' . $index++]  = 'CskdEstUsag';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDORDPNT)) {
            $modifiedColumns[':p' . $index++]  = 'CskdOrdPnt';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDORDQTY)) {
            $modifiedColumns[':p' . $index++]  = 'CskdOrdQty';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDMAXQTY)) {
            $modifiedColumns[':p' . $index++]  = 'CskdMaxQty';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDCOUNTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'CskdCountDate';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDUSAGLAST12)) {
            $modifiedColumns[':p' . $index++]  = 'CskdUsagLast12';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO cust_stock_det (%s) VALUES (%s)',
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
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);

                        break;
                    case 'CskhCell':
                        $stmt->bindValue($identifier, $this->cskhcell, PDO::PARAM_STR);

                        break;
                    case 'CskdLine':
                        $stmt->bindValue($identifier, $this->cskdline, PDO::PARAM_INT);

                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);

                        break;
                    case 'CskdCustItem':
                        $stmt->bindValue($identifier, $this->cskdcustitem, PDO::PARAM_STR);

                        break;
                    case 'CskdBin':
                        $stmt->bindValue($identifier, $this->cskdbin, PDO::PARAM_STR);

                        break;
                    case 'CskdEnterDate':
                        $stmt->bindValue($identifier, $this->cskdenterdate, PDO::PARAM_STR);

                        break;
                    case 'CskdOnHand':
                        $stmt->bindValue($identifier, $this->cskdonhand, PDO::PARAM_STR);

                        break;
                    case 'CskdUnitPrice':
                        $stmt->bindValue($identifier, $this->cskdunitprice, PDO::PARAM_STR);

                        break;
                    case 'CskdEstUsag':
                        $stmt->bindValue($identifier, $this->cskdestusag, PDO::PARAM_STR);

                        break;
                    case 'CskdOrdPnt':
                        $stmt->bindValue($identifier, $this->cskdordpnt, PDO::PARAM_STR);

                        break;
                    case 'CskdOrdQty':
                        $stmt->bindValue($identifier, $this->cskdordqty, PDO::PARAM_STR);

                        break;
                    case 'CskdMaxQty':
                        $stmt->bindValue($identifier, $this->cskdmaxqty, PDO::PARAM_STR);

                        break;
                    case 'CskdCountDate':
                        $stmt->bindValue($identifier, $this->cskdcountdate, PDO::PARAM_STR);

                        break;
                    case 'CskdUsagLast12':
                        $stmt->bindValue($identifier, $this->cskdusaglast12, PDO::PARAM_STR);

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
     *
     * @return int Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con): int
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName(string $name, string $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CstkItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->getByPosition($pos);
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos Position in XML schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition(int $pos)
    {
        switch ($pos) {
            case 0:
                return $this->getArcucustid();

            case 1:
                return $this->getArstshipid();

            case 2:
                return $this->getCskhcell();

            case 3:
                return $this->getCskdline();

            case 4:
                return $this->getInititemnbr();

            case 5:
                return $this->getCskdcustitem();

            case 6:
                return $this->getCskdbin();

            case 7:
                return $this->getCskdenterdate();

            case 8:
                return $this->getCskdonhand();

            case 9:
                return $this->getCskdunitprice();

            case 10:
                return $this->getCskdestusag();

            case 11:
                return $this->getCskdordpnt();

            case 12:
                return $this->getCskdordqty();

            case 13:
                return $this->getCskdmaxqty();

            case 14:
                return $this->getCskdcountdate();

            case 15:
                return $this->getCskdusaglast12();

            case 16:
                return $this->getDateupdtd();

            case 17:
                return $this->getTimeupdtd();

            case 18:
                return $this->getDummy();

            default:
                return null;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param bool $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array An associative array containing the field names (as keys) and field values
     */
    public function toArray(string $keyType = TableMap::TYPE_PHPNAME, bool $includeLazyLoadColumns = true, array $alreadyDumpedObjects = [], bool $includeForeignObjects = false): array
    {
        if (isset($alreadyDumpedObjects['CstkItem'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['CstkItem'][$this->hashCode()] = true;
        $keys = CstkItemTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArstshipid(),
            $keys[2] => $this->getCskhcell(),
            $keys[3] => $this->getCskdline(),
            $keys[4] => $this->getInititemnbr(),
            $keys[5] => $this->getCskdcustitem(),
            $keys[6] => $this->getCskdbin(),
            $keys[7] => $this->getCskdenterdate(),
            $keys[8] => $this->getCskdonhand(),
            $keys[9] => $this->getCskdunitprice(),
            $keys[10] => $this->getCskdestusag(),
            $keys[11] => $this->getCskdordpnt(),
            $keys[12] => $this->getCskdordqty(),
            $keys[13] => $this->getCskdmaxqty(),
            $keys[14] => $this->getCskdcountdate(),
            $keys[15] => $this->getCskdusaglast12(),
            $keys[16] => $this->getDateupdtd(),
            $keys[17] => $this->getTimeupdtd(),
            $keys[18] => $this->getDummy(),
        ];
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
            if (null !== $this->aCustomerShipto) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customerShipto';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_ship_to';
                        break;
                    default:
                        $key = 'CustomerShipto';
                }

                $result[$key] = $this->aCustomerShipto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this
     */
    public function setByName(string $name, $value, string $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CstkItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        $this->setByPosition($pos, $value);

        return $this;
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return $this
     */
    public function setByPosition(int $pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setArstshipid($value);
                break;
            case 2:
                $this->setCskhcell($value);
                break;
            case 3:
                $this->setCskdline($value);
                break;
            case 4:
                $this->setInititemnbr($value);
                break;
            case 5:
                $this->setCskdcustitem($value);
                break;
            case 6:
                $this->setCskdbin($value);
                break;
            case 7:
                $this->setCskdenterdate($value);
                break;
            case 8:
                $this->setCskdonhand($value);
                break;
            case 9:
                $this->setCskdunitprice($value);
                break;
            case 10:
                $this->setCskdestusag($value);
                break;
            case 11:
                $this->setCskdordpnt($value);
                break;
            case 12:
                $this->setCskdordqty($value);
                break;
            case 13:
                $this->setCskdmaxqty($value);
                break;
            case 14:
                $this->setCskdcountdate($value);
                break;
            case 15:
                $this->setCskdusaglast12($value);
                break;
            case 16:
                $this->setDateupdtd($value);
                break;
            case 17:
                $this->setTimeupdtd($value);
                break;
            case 18:
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
     * @param array $arr An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return $this
     */
    public function fromArray(array $arr, string $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = CstkItemTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArstshipid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCskhcell($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCskdline($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInititemnbr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCskdcustitem($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCskdbin($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setCskdenterdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCskdonhand($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCskdunitprice($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setCskdestusag($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setCskdordpnt($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setCskdordqty($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setCskdmaxqty($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setCskdcountdate($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCskdusaglast12($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDateupdtd($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setTimeupdtd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setDummy($arr[$keys[18]]);
        }

        return $this;
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
     * @return $this The current object, for fluid interface
     */
    public function importFrom($parser, string $data, string $keyType = TableMap::TYPE_PHPNAME)
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
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria(): Criteria
    {
        $criteria = new Criteria(CstkItemTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CstkItemTableMap::COL_ARCUCUSTID)) {
            $criteria->add(CstkItemTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_ARSTSHIPID)) {
            $criteria->add(CstkItemTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKHCELL)) {
            $criteria->add(CstkItemTableMap::COL_CSKHCELL, $this->cskhcell);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDLINE)) {
            $criteria->add(CstkItemTableMap::COL_CSKDLINE, $this->cskdline);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_INITITEMNBR)) {
            $criteria->add(CstkItemTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDCUSTITEM)) {
            $criteria->add(CstkItemTableMap::COL_CSKDCUSTITEM, $this->cskdcustitem);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDBIN)) {
            $criteria->add(CstkItemTableMap::COL_CSKDBIN, $this->cskdbin);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDENTERDATE)) {
            $criteria->add(CstkItemTableMap::COL_CSKDENTERDATE, $this->cskdenterdate);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDONHAND)) {
            $criteria->add(CstkItemTableMap::COL_CSKDONHAND, $this->cskdonhand);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDUNITPRICE)) {
            $criteria->add(CstkItemTableMap::COL_CSKDUNITPRICE, $this->cskdunitprice);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDESTUSAG)) {
            $criteria->add(CstkItemTableMap::COL_CSKDESTUSAG, $this->cskdestusag);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDORDPNT)) {
            $criteria->add(CstkItemTableMap::COL_CSKDORDPNT, $this->cskdordpnt);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDORDQTY)) {
            $criteria->add(CstkItemTableMap::COL_CSKDORDQTY, $this->cskdordqty);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDMAXQTY)) {
            $criteria->add(CstkItemTableMap::COL_CSKDMAXQTY, $this->cskdmaxqty);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDCOUNTDATE)) {
            $criteria->add(CstkItemTableMap::COL_CSKDCOUNTDATE, $this->cskdcountdate);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_CSKDUSAGLAST12)) {
            $criteria->add(CstkItemTableMap::COL_CSKDUSAGLAST12, $this->cskdusaglast12);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_DATEUPDTD)) {
            $criteria->add(CstkItemTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_TIMEUPDTD)) {
            $criteria->add(CstkItemTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(CstkItemTableMap::COL_DUMMY)) {
            $criteria->add(CstkItemTableMap::COL_DUMMY, $this->dummy);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria(): Criteria
    {
        $criteria = ChildCstkItemQuery::create();
        $criteria->add(CstkItemTableMap::COL_ARCUCUSTID, $this->arcucustid);
        $criteria->add(CstkItemTableMap::COL_ARSTSHIPID, $this->arstshipid);
        $criteria->add(CstkItemTableMap::COL_CSKHCELL, $this->cskhcell);
        $criteria->add(CstkItemTableMap::COL_CSKDLINE, $this->cskdline);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int|string Hashcode
     */
    public function hashCode()
    {
        $validPk = !in_array(null, [$this->getArcucustid(), $this->getArstshipid(), $this->getCskhcell(), $this->getCskdline()], true);

        $validPrimaryKeyFKs = 3;
        $primaryKeyFKs = [];

        //relation customer to table ar_cust_mast
        if ($this->aCustomer && $hash = spl_object_hash($this->aCustomer)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation shipto to table ar_ship_to
        if ($this->aCustomerShipto && $hash = spl_object_hash($this->aCustomerShipto)) {
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
        return [$this->getArcucustid(), $this->getArstshipid(), $this->getCskhcell(), $this->getCskdline()];
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     */
    public function setPrimaryKey(array $keys): void
    {
        $this->setArcucustid($keys[0]);
        $this->setArstshipid($keys[1]);
        $this->setCskhcell($keys[2]);
        $this->setCskdline($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     */
    public function isPrimaryKeyNull(): bool
    {
        return (null === $this->getArcucustid()) && (null === $this->getArstshipid()) && (null === $this->getCskhcell()) && (null === $this->getCskdline());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \CstkItem (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setCskhcell($this->getCskhcell());
        $copyObj->setCskdline($this->getCskdline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setCskdcustitem($this->getCskdcustitem());
        $copyObj->setCskdbin($this->getCskdbin());
        $copyObj->setCskdenterdate($this->getCskdenterdate());
        $copyObj->setCskdonhand($this->getCskdonhand());
        $copyObj->setCskdunitprice($this->getCskdunitprice());
        $copyObj->setCskdestusag($this->getCskdestusag());
        $copyObj->setCskdordpnt($this->getCskdordpnt());
        $copyObj->setCskdordqty($this->getCskdordqty());
        $copyObj->setCskdmaxqty($this->getCskdmaxqty());
        $copyObj->setCskdcountdate($this->getCskdcountdate());
        $copyObj->setCskdusaglast12($this->getCskdusaglast12());
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
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \CstkItem Clone of current object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function copy(bool $deepCopy = false)
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
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if (!$v instanceof \Customer) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v instanceof \Customer) {
            $v->addCstkItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomer object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildCustomer The associated ChildCustomer object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getCustomer(?ConnectionInterface $con = null)
    {
        if ($this->aCustomer === null && (($this->arcucustid !== "" && $this->arcucustid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->arcucustid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addCstkItems($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a ChildCustomerShipto object.
     *
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setCustomerShipto(ChildCustomerShipto $v = null)
    {
        if (!$v instanceof \CustomerShipto) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        if (!$v instanceof \CustomerShipto) {
            $this->setArstshipid('');
        } else {
            $this->setArstshipid($v->getArstshipid());
        }

        $this->aCustomerShipto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomerShipto object, it will not be re-added.
        if ($v instanceof \CustomerShipto) {
            $v->addCstkItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomerShipto object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildCustomerShipto The associated ChildCustomerShipto object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getCustomerShipto(?ConnectionInterface $con = null)
    {
        if ($this->aCustomerShipto === null && (($this->arcucustid !== "" && $this->arcucustid !== null) && ($this->arstshipid !== "" && $this->arstshipid !== null))) {
            $this->aCustomerShipto = ChildCustomerShiptoQuery::create()->findPk([$this->arcucustid, $this->arstshipid], $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomerShipto->addCstkItems($this);
             */
        }

        return $this->aCustomerShipto;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if (!$v instanceof \ItemMasterItem) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v instanceof \ItemMasterItem) {
            $v->addCstkItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildItemMasterItem object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildItemMasterItem The associated ChildItemMasterItem object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getItemMasterItem(?ConnectionInterface $con = null)
    {
        if ($this->aItemMasterItem === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null))) {
            $this->aItemMasterItem = ChildItemMasterItemQuery::create()->findPk($this->inititemnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aItemMasterItem->addCstkItems($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     *
     * @return $this
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeCstkItem($this);
        }
        if (null !== $this->aCustomerShipto) {
            $this->aCustomerShipto->removeCstkItem($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeCstkItem($this);
        }
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->cskhcell = null;
        $this->cskdline = null;
        $this->inititemnbr = null;
        $this->cskdcustitem = null;
        $this->cskdbin = null;
        $this->cskdenterdate = null;
        $this->cskdonhand = null;
        $this->cskdunitprice = null;
        $this->cskdestusag = null;
        $this->cskdordpnt = null;
        $this->cskdordqty = null;
        $this->cskdmaxqty = null;
        $this->cskdcountdate = null;
        $this->cskdusaglast12 = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);

        return $this;
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param bool $deep Whether to also clear the references on all referrer objects.
     * @return $this
     */
    public function clearAllReferences(bool $deep = false)
    {
        // if ($deep)

        $this->aCustomer = null;
        $this->aCustomerShipto = null;
        $this->aItemMasterItem = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return $this->exportTo(CstkItemTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     */
    public function preSave(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after persisting the object
     */
    public function postSave(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before inserting to database
     */
    public function preInsert(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     */
    public function postInsert(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before updating the object in database
     */
    public function preUpdate(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after updating the object in database
     */
    public function postUpdate(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before deleting the object in database
     */
    public function preDelete(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after deleting the object in database
     */
    public function postDelete(?ConnectionInterface $con = null): void
    {
            }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (str_starts_with($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (str_starts_with($name, 'from')) {
            $format = substr($name, 4);
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (str_starts_with($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
