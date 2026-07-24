<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \RcyclReceipt as ChildRcyclReceipt;
use \RcyclReceiptDetail as ChildRcyclReceiptDetail;
use \RcyclReceiptDetailQuery as ChildRcyclReceiptDetailQuery;
use \RcyclReceiptLotQuery as ChildRcyclReceiptLotQuery;
use \RcyclReceiptQuery as ChildRcyclReceiptQuery;
use \Exception;
use \PDO;
use Map\RcyclReceiptLotTableMap;
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
 * Base class that represents a row from the 'rcycl_lot_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class RcyclReceiptLot implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = \Map\RcyclReceiptLotTableMap::class;


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
     * The value for the rcydtrcptline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $rcydtrcptline;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the rcysdwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcysdwhse;

    /**
     * The value for the rcysdlotnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcysdlotnbr;

    /**
     * The value for the rcysdbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcysdbin;

    /**
     * The value for the rcysdlotqty field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $rcysdlotqty;

    /**
     * The value for the rcysdlotdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcysdlotdate;

    /**
     * The value for the rcysdlotref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcysdlotref;

    /**
     * The value for the rcysdstatus field.
     *
     * Note: this column has a database default value of: 'O'
     * @var        string
     */
    protected $rcysdstatus;

    /**
     * The value for the rcysdclosedby field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcysdclosedby;

    /**
     * The value for the rcysdcloseddate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcysdcloseddate;

    /**
     * The value for the rcysdclosedtime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcysdclosedtime;

    /**
     * The value for the rcysdtarewght field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $rcysdtarewght;

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
     * @var        ChildRcyclReceiptDetail
     */
    protected $aRcyclReceiptDetail;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildRcyclReceipt
     */
    protected $aRcyclReceipt;

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
        $this->rcyhdrcptbulk = '';
        $this->rcyhdcntrlnbr = 0;
        $this->rcydtrcptline = 0;
        $this->inititemnbr = '';
        $this->rcysdwhse = '';
        $this->rcysdlotnbr = '';
        $this->rcysdbin = '';
        $this->rcysdlotqty = '0.00';
        $this->rcysdlotdate = '';
        $this->rcysdlotref = '';
        $this->rcysdstatus = 'O';
        $this->rcysdclosedby = '';
        $this->rcysdcloseddate = '';
        $this->rcysdclosedtime = '';
        $this->rcysdtarewght = '0.00';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\RcyclReceiptLot object.
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
     * Compares this with another <code>RcyclReceiptLot</code> instance.  If
     * <code>obj</code> is an instance of <code>RcyclReceiptLot</code>, delegates to
     * <code>equals(RcyclReceiptLot)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [rcydtrcptline] column value.
     *
     * @return int
     */
    public function getRcydtrcptline()
    {
        return $this->rcydtrcptline;
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
     * Get the [rcysdwhse] column value.
     *
     * @return string
     */
    public function getRcysdwhse()
    {
        return $this->rcysdwhse;
    }

    /**
     * Get the [rcysdlotnbr] column value.
     *
     * @return string
     */
    public function getRcysdlotnbr()
    {
        return $this->rcysdlotnbr;
    }

    /**
     * Get the [rcysdbin] column value.
     *
     * @return string
     */
    public function getRcysdbin()
    {
        return $this->rcysdbin;
    }

    /**
     * Get the [rcysdlotqty] column value.
     *
     * @return string
     */
    public function getRcysdlotqty()
    {
        return $this->rcysdlotqty;
    }

    /**
     * Get the [rcysdlotdate] column value.
     *
     * @return string
     */
    public function getRcysdlotdate()
    {
        return $this->rcysdlotdate;
    }

    /**
     * Get the [rcysdlotref] column value.
     *
     * @return string
     */
    public function getRcysdlotref()
    {
        return $this->rcysdlotref;
    }

    /**
     * Get the [rcysdstatus] column value.
     *
     * @return string
     */
    public function getRcysdstatus()
    {
        return $this->rcysdstatus;
    }

    /**
     * Get the [rcysdclosedby] column value.
     *
     * @return string
     */
    public function getRcysdclosedby()
    {
        return $this->rcysdclosedby;
    }

    /**
     * Get the [rcysdcloseddate] column value.
     *
     * @return string
     */
    public function getRcysdcloseddate()
    {
        return $this->rcysdcloseddate;
    }

    /**
     * Get the [rcysdclosedtime] column value.
     *
     * @return string
     */
    public function getRcysdclosedtime()
    {
        return $this->rcysdclosedtime;
    }

    /**
     * Get the [rcysdtarewght] column value.
     *
     * @return string
     */
    public function getRcysdtarewght()
    {
        return $this->rcysdtarewght;
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
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcyhdrcptbulk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcyhdrcptbulk !== $v) {
            $this->rcyhdrcptbulk = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK] = true;
        }

        if ($this->aRcyclReceiptDetail !== null && $this->aRcyclReceiptDetail->getRcyhdrcptbulk() !== $v) {
            $this->aRcyclReceiptDetail = null;
        }

        if ($this->aRcyclReceipt !== null && $this->aRcyclReceipt->getRcyhdrcptbulk() !== $v) {
            $this->aRcyclReceipt = null;
        }

        return $this;
    }

    /**
     * Set the value of [rcyhdcntrlnbr] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcyhdcntrlnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->rcyhdcntrlnbr !== $v) {
            $this->rcyhdcntrlnbr = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR] = true;
        }

        if ($this->aRcyclReceiptDetail !== null && $this->aRcyclReceiptDetail->getRcyhdcntrlnbr() !== $v) {
            $this->aRcyclReceiptDetail = null;
        }

        if ($this->aRcyclReceipt !== null && $this->aRcyclReceipt->getRcyhdcntrlnbr() !== $v) {
            $this->aRcyclReceipt = null;
        }

        return $this;
    }

    /**
     * Set the value of [rcydtrcptline] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcydtrcptline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->rcydtrcptline !== $v) {
            $this->rcydtrcptline = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE] = true;
        }

        if ($this->aRcyclReceiptDetail !== null && $this->aRcyclReceiptDetail->getRcydtrcptline() !== $v) {
            $this->aRcyclReceiptDetail = null;
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
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aRcyclReceiptDetail !== null && $this->aRcyclReceiptDetail->getInititemnbr() !== $v) {
            $this->aRcyclReceiptDetail = null;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdwhse] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdwhse !== $v) {
            $this->rcysdwhse = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDWHSE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdlotnbr] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdlotnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdlotnbr !== $v) {
            $this->rcysdlotnbr = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDLOTNBR] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdbin] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdbin !== $v) {
            $this->rcysdbin = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDBIN] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdlotqty] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdlotqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdlotqty !== $v) {
            $this->rcysdlotqty = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDLOTQTY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdlotdate] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdlotdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdlotdate !== $v) {
            $this->rcysdlotdate = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDLOTDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdlotref] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdlotref !== $v) {
            $this->rcysdlotref = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDLOTREF] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdstatus] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdstatus !== $v) {
            $this->rcysdstatus = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDSTATUS] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdclosedby] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdclosedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdclosedby !== $v) {
            $this->rcysdclosedby = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDCLOSEDBY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdcloseddate] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdcloseddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdcloseddate !== $v) {
            $this->rcysdcloseddate = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDCLOSEDDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdclosedtime] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdclosedtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdclosedtime !== $v) {
            $this->rcysdclosedtime = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDCLOSEDTIME] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcysdtarewght] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcysdtarewght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcysdtarewght !== $v) {
            $this->rcysdtarewght = $v;
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT] = true;
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
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_DATEUPDTD] = true;
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
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_TIMEUPDTD] = true;
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
            $this->modifiedColumns[RcyclReceiptLotTableMap::COL_DUMMY] = true;
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
            if ($this->rcyhdrcptbulk !== '') {
                return false;
            }

            if ($this->rcyhdcntrlnbr !== 0) {
                return false;
            }

            if ($this->rcydtrcptline !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->rcysdwhse !== '') {
                return false;
            }

            if ($this->rcysdlotnbr !== '') {
                return false;
            }

            if ($this->rcysdbin !== '') {
                return false;
            }

            if ($this->rcysdlotqty !== '0.00') {
                return false;
            }

            if ($this->rcysdlotdate !== '') {
                return false;
            }

            if ($this->rcysdlotref !== '') {
                return false;
            }

            if ($this->rcysdstatus !== 'O') {
                return false;
            }

            if ($this->rcysdclosedby !== '') {
                return false;
            }

            if ($this->rcysdcloseddate !== '') {
                return false;
            }

            if ($this->rcysdclosedtime !== '') {
                return false;
            }

            if ($this->rcysdtarewght !== '0.00') {
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

            $col = $row[TableMap::TYPE_NUM === $indexType ? $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdrcptbulk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 1 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdcntrlnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 2 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcydtrcptline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 3 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 4 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 5 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdlotnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdlotnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 6 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 7 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdlotqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdlotqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 8 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdlotdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdlotdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 9 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 10 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdstatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdstatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 11 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdclosedby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdclosedby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 12 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdcloseddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdcloseddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 13 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdclosedtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdclosedtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 14 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Rcysdtarewght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcysdtarewght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 15 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 16 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 17 + $startcol : RcyclReceiptLotTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 18; // 18 = RcyclReceiptLotTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\RcyclReceiptLot'), 0, $e);
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
        if ($this->aRcyclReceiptDetail !== null && $this->rcyhdrcptbulk !== $this->aRcyclReceiptDetail->getRcyhdrcptbulk()) {
            $this->aRcyclReceiptDetail = null;
        }
        if ($this->aRcyclReceipt !== null && $this->rcyhdrcptbulk !== $this->aRcyclReceipt->getRcyhdrcptbulk()) {
            $this->aRcyclReceipt = null;
        }
        if ($this->aRcyclReceiptDetail !== null && $this->rcyhdcntrlnbr !== $this->aRcyclReceiptDetail->getRcyhdcntrlnbr()) {
            $this->aRcyclReceiptDetail = null;
        }
        if ($this->aRcyclReceipt !== null && $this->rcyhdcntrlnbr !== $this->aRcyclReceipt->getRcyhdcntrlnbr()) {
            $this->aRcyclReceipt = null;
        }
        if ($this->aRcyclReceiptDetail !== null && $this->rcydtrcptline !== $this->aRcyclReceiptDetail->getRcydtrcptline()) {
            $this->aRcyclReceiptDetail = null;
        }
        if ($this->aRcyclReceiptDetail !== null && $this->inititemnbr !== $this->aRcyclReceiptDetail->getInititemnbr()) {
            $this->aRcyclReceiptDetail = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(RcyclReceiptLotTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildRcyclReceiptLotQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRcyclReceiptDetail = null;
            $this->aItemMasterItem = null;
            $this->aRcyclReceipt = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @throws \Propel\Runtime\Exception\PropelException
     * @see RcyclReceiptLot::setDeleted()
     * @see RcyclReceiptLot::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if (!$con instanceof \Propel\Runtime\Connection\ConnectionInterface) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptLotTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildRcyclReceiptLotQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptLotTableMap::DATABASE_NAME);
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
                RcyclReceiptLotTableMap::addInstanceToPool($this);
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

            if ($this->aRcyclReceiptDetail !== null) {
                if ($this->aRcyclReceiptDetail->isModified() || $this->aRcyclReceiptDetail->isNew()) {
                    $affectedRows += $this->aRcyclReceiptDetail->save($con);
                }
                $this->setRcyclReceiptDetail($this->aRcyclReceiptDetail);
            }

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aRcyclReceipt !== null) {
                if ($this->aRcyclReceipt->isModified() || $this->aRcyclReceipt->isNew()) {
                    $affectedRows += $this->aRcyclReceipt->save($con);
                }
                $this->setRcyclReceipt($this->aRcyclReceipt);
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
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdRcptBulk';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdCntrlNbr';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'RcydtRcptLine';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdWhse';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdLotNbr';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdBin';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDLOTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdLotQty';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDLOTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdLotDate';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdLotRef';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDSTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdStatus';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDBY)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdClosedBy';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdClosedDate';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDTIME)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdClosedTime';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'RcysdTareWght';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO rcycl_lot_det (%s) VALUES (%s)',
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
                    case 'RcydtRcptLine':
                        $stmt->bindValue($identifier, $this->rcydtrcptline, PDO::PARAM_INT);

                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);

                        break;
                    case 'RcysdWhse':
                        $stmt->bindValue($identifier, $this->rcysdwhse, PDO::PARAM_STR);

                        break;
                    case 'RcysdLotNbr':
                        $stmt->bindValue($identifier, $this->rcysdlotnbr, PDO::PARAM_STR);

                        break;
                    case 'RcysdBin':
                        $stmt->bindValue($identifier, $this->rcysdbin, PDO::PARAM_STR);

                        break;
                    case 'RcysdLotQty':
                        $stmt->bindValue($identifier, $this->rcysdlotqty, PDO::PARAM_STR);

                        break;
                    case 'RcysdLotDate':
                        $stmt->bindValue($identifier, $this->rcysdlotdate, PDO::PARAM_STR);

                        break;
                    case 'RcysdLotRef':
                        $stmt->bindValue($identifier, $this->rcysdlotref, PDO::PARAM_STR);

                        break;
                    case 'RcysdStatus':
                        $stmt->bindValue($identifier, $this->rcysdstatus, PDO::PARAM_STR);

                        break;
                    case 'RcysdClosedBy':
                        $stmt->bindValue($identifier, $this->rcysdclosedby, PDO::PARAM_STR);

                        break;
                    case 'RcysdClosedDate':
                        $stmt->bindValue($identifier, $this->rcysdcloseddate, PDO::PARAM_STR);

                        break;
                    case 'RcysdClosedTime':
                        $stmt->bindValue($identifier, $this->rcysdclosedtime, PDO::PARAM_STR);

                        break;
                    case 'RcysdTareWght':
                        $stmt->bindValue($identifier, $this->rcysdtarewght, PDO::PARAM_STR);

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
        $pos = RcyclReceiptLotTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                return $this->getRcyhdrcptbulk();

            case 1:
                return $this->getRcyhdcntrlnbr();

            case 2:
                return $this->getRcydtrcptline();

            case 3:
                return $this->getInititemnbr();

            case 4:
                return $this->getRcysdwhse();

            case 5:
                return $this->getRcysdlotnbr();

            case 6:
                return $this->getRcysdbin();

            case 7:
                return $this->getRcysdlotqty();

            case 8:
                return $this->getRcysdlotdate();

            case 9:
                return $this->getRcysdlotref();

            case 10:
                return $this->getRcysdstatus();

            case 11:
                return $this->getRcysdclosedby();

            case 12:
                return $this->getRcysdcloseddate();

            case 13:
                return $this->getRcysdclosedtime();

            case 14:
                return $this->getRcysdtarewght();

            case 15:
                return $this->getDateupdtd();

            case 16:
                return $this->getTimeupdtd();

            case 17:
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
        if (isset($alreadyDumpedObjects['RcyclReceiptLot'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['RcyclReceiptLot'][$this->hashCode()] = true;
        $keys = RcyclReceiptLotTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getRcyhdrcptbulk(),
            $keys[1] => $this->getRcyhdcntrlnbr(),
            $keys[2] => $this->getRcydtrcptline(),
            $keys[3] => $this->getInititemnbr(),
            $keys[4] => $this->getRcysdwhse(),
            $keys[5] => $this->getRcysdlotnbr(),
            $keys[6] => $this->getRcysdbin(),
            $keys[7] => $this->getRcysdlotqty(),
            $keys[8] => $this->getRcysdlotdate(),
            $keys[9] => $this->getRcysdlotref(),
            $keys[10] => $this->getRcysdstatus(),
            $keys[11] => $this->getRcysdclosedby(),
            $keys[12] => $this->getRcysdcloseddate(),
            $keys[13] => $this->getRcysdclosedtime(),
            $keys[14] => $this->getRcysdtarewght(),
            $keys[15] => $this->getDateupdtd(),
            $keys[16] => $this->getTimeupdtd(),
            $keys[17] => $this->getDummy(),
        ];
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRcyclReceiptDetail) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'rcyclReceiptDetail';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'rcycl_det';
                        break;
                    default:
                        $key = 'RcyclReceiptDetail';
                }

                $result[$key] = $this->aRcyclReceiptDetail->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->aRcyclReceipt) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'rcyclReceipt';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'rcycl_head';
                        break;
                    default:
                        $key = 'RcyclReceipt';
                }

                $result[$key] = $this->aRcyclReceipt->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = RcyclReceiptLotTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                $this->setRcyhdrcptbulk($value);
                break;
            case 1:
                $this->setRcyhdcntrlnbr($value);
                break;
            case 2:
                $this->setRcydtrcptline($value);
                break;
            case 3:
                $this->setInititemnbr($value);
                break;
            case 4:
                $this->setRcysdwhse($value);
                break;
            case 5:
                $this->setRcysdlotnbr($value);
                break;
            case 6:
                $this->setRcysdbin($value);
                break;
            case 7:
                $this->setRcysdlotqty($value);
                break;
            case 8:
                $this->setRcysdlotdate($value);
                break;
            case 9:
                $this->setRcysdlotref($value);
                break;
            case 10:
                $this->setRcysdstatus($value);
                break;
            case 11:
                $this->setRcysdclosedby($value);
                break;
            case 12:
                $this->setRcysdcloseddate($value);
                break;
            case 13:
                $this->setRcysdclosedtime($value);
                break;
            case 14:
                $this->setRcysdtarewght($value);
                break;
            case 15:
                $this->setDateupdtd($value);
                break;
            case 16:
                $this->setTimeupdtd($value);
                break;
            case 17:
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
        $keys = RcyclReceiptLotTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setRcyhdrcptbulk($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setRcyhdcntrlnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setRcydtrcptline($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInititemnbr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setRcysdwhse($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setRcysdlotnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setRcysdbin($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setRcysdlotqty($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setRcysdlotdate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setRcysdlotref($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setRcysdstatus($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setRcysdclosedby($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setRcysdcloseddate($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setRcysdclosedtime($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setRcysdtarewght($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setDateupdtd($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setTimeupdtd($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setDummy($arr[$keys[17]]);
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
        $criteria = new Criteria(RcyclReceiptLotTableMap::DATABASE_NAME);

        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, $this->rcyhdrcptbulk);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $this->rcyhdcntrlnbr);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $this->rcydtrcptline);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_INITITEMNBR)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDWHSE)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDWHSE, $this->rcysdwhse);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR, $this->rcysdlotnbr);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDBIN)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDBIN, $this->rcysdbin);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDLOTQTY)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDLOTQTY, $this->rcysdlotqty);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDLOTDATE)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDLOTDATE, $this->rcysdlotdate);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDLOTREF)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDLOTREF, $this->rcysdlotref);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDSTATUS)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDSTATUS, $this->rcysdstatus);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDBY)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDBY, $this->rcysdclosedby);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDDATE)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDDATE, $this->rcysdcloseddate);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDTIME)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDTIME, $this->rcysdclosedtime);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT, $this->rcysdtarewght);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_DATEUPDTD)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_TIMEUPDTD)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(RcyclReceiptLotTableMap::COL_DUMMY)) {
            $criteria->add(RcyclReceiptLotTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildRcyclReceiptLotQuery::create();
        $criteria->add(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, $this->rcyhdrcptbulk);
        $criteria->add(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $this->rcyhdcntrlnbr);
        $criteria->add(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $this->rcydtrcptline);
        $criteria->add(RcyclReceiptLotTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDWHSE, $this->rcysdwhse);
        $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR, $this->rcysdlotnbr);
        $criteria->add(RcyclReceiptLotTableMap::COL_RCYSDBIN, $this->rcysdbin);

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
        $validPk = !in_array(null, [$this->getRcyhdrcptbulk(), $this->getRcyhdcntrlnbr(), $this->getRcydtrcptline(), $this->getInititemnbr(), $this->getRcysdwhse(), $this->getRcysdlotnbr(), $this->getRcysdbin()], true);

        $validPrimaryKeyFKs = 7;
        $primaryKeyFKs = [];

        //relation rcycledet to table rcycl_det
        if ($this->aRcyclReceiptDetail && $hash = spl_object_hash($this->aRcyclReceiptDetail)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation item to table inv_item_mast
        if ($this->aItemMasterItem && $hash = spl_object_hash($this->aItemMasterItem)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation receipt to table rcycl_head
        if ($this->aRcyclReceipt && $hash = spl_object_hash($this->aRcyclReceipt)) {
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
        return [$this->getRcyhdrcptbulk(), $this->getRcyhdcntrlnbr(), $this->getRcydtrcptline(), $this->getInititemnbr(), $this->getRcysdwhse(), $this->getRcysdlotnbr(), $this->getRcysdbin()];
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     */
    public function setPrimaryKey(array $keys): void
    {
        $this->setRcyhdrcptbulk($keys[0]);
        $this->setRcyhdcntrlnbr($keys[1]);
        $this->setRcydtrcptline($keys[2]);
        $this->setInititemnbr($keys[3]);
        $this->setRcysdwhse($keys[4]);
        $this->setRcysdlotnbr($keys[5]);
        $this->setRcysdbin($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     */
    public function isPrimaryKeyNull(): bool
    {
        return (null === $this->getRcyhdrcptbulk()) && (null === $this->getRcyhdcntrlnbr()) && (null === $this->getRcydtrcptline()) && (null === $this->getInititemnbr()) && (null === $this->getRcysdwhse()) && (null === $this->getRcysdlotnbr()) && (null === $this->getRcysdbin());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \RcyclReceiptLot (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setRcyhdrcptbulk($this->getRcyhdrcptbulk());
        $copyObj->setRcyhdcntrlnbr($this->getRcyhdcntrlnbr());
        $copyObj->setRcydtrcptline($this->getRcydtrcptline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setRcysdwhse($this->getRcysdwhse());
        $copyObj->setRcysdlotnbr($this->getRcysdlotnbr());
        $copyObj->setRcysdbin($this->getRcysdbin());
        $copyObj->setRcysdlotqty($this->getRcysdlotqty());
        $copyObj->setRcysdlotdate($this->getRcysdlotdate());
        $copyObj->setRcysdlotref($this->getRcysdlotref());
        $copyObj->setRcysdstatus($this->getRcysdstatus());
        $copyObj->setRcysdclosedby($this->getRcysdclosedby());
        $copyObj->setRcysdcloseddate($this->getRcysdcloseddate());
        $copyObj->setRcysdclosedtime($this->getRcysdclosedtime());
        $copyObj->setRcysdtarewght($this->getRcysdtarewght());
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
     * @return \RcyclReceiptLot Clone of current object.
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
     * Declares an association between this object and a ChildRcyclReceiptDetail object.
     *
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setRcyclReceiptDetail(ChildRcyclReceiptDetail $v = null)
    {
        if (!$v instanceof \RcyclReceiptDetail) {
            $this->setRcyhdcntrlnbr(0);
        } else {
            $this->setRcyhdcntrlnbr($v->getRcyhdcntrlnbr());
        }

        if (!$v instanceof \RcyclReceiptDetail) {
            $this->setRcyhdrcptbulk('');
        } else {
            $this->setRcyhdrcptbulk($v->getRcyhdrcptbulk());
        }

        if (!$v instanceof \RcyclReceiptDetail) {
            $this->setRcydtrcptline(0);
        } else {
            $this->setRcydtrcptline($v->getRcydtrcptline());
        }

        if (!$v instanceof \RcyclReceiptDetail) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aRcyclReceiptDetail = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildRcyclReceiptDetail object, it will not be re-added.
        if ($v instanceof \RcyclReceiptDetail) {
            $v->addRcyclReceiptLot($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildRcyclReceiptDetail object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildRcyclReceiptDetail The associated ChildRcyclReceiptDetail object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getRcyclReceiptDetail(?ConnectionInterface $con = null)
    {
        if ($this->aRcyclReceiptDetail === null && ($this->rcyhdcntrlnbr != 0 && ($this->rcyhdrcptbulk !== "" && $this->rcyhdrcptbulk !== null) && $this->rcydtrcptline != 0 && ($this->inititemnbr !== "" && $this->inititemnbr !== null))) {
            $this->aRcyclReceiptDetail = ChildRcyclReceiptDetailQuery::create()->findPk([$this->rcyhdrcptbulk, $this->rcyhdcntrlnbr, $this->rcydtrcptline, $this->inititemnbr], $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRcyclReceiptDetail->addRcyclReceiptLots($this);
             */
        }

        return $this->aRcyclReceiptDetail;
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
            $v->addRcyclReceiptLot($this);
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
                $this->aItemMasterItem->addRcyclReceiptLots($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildRcyclReceipt object.
     *
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setRcyclReceipt(ChildRcyclReceipt $v = null)
    {
        if (!$v instanceof \RcyclReceipt) {
            $this->setRcyhdcntrlnbr(0);
        } else {
            $this->setRcyhdcntrlnbr($v->getRcyhdcntrlnbr());
        }

        if (!$v instanceof \RcyclReceipt) {
            $this->setRcyhdrcptbulk('');
        } else {
            $this->setRcyhdrcptbulk($v->getRcyhdrcptbulk());
        }

        $this->aRcyclReceipt = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildRcyclReceipt object, it will not be re-added.
        if ($v instanceof \RcyclReceipt) {
            $v->addRcyclReceiptLot($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildRcyclReceipt object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildRcyclReceipt The associated ChildRcyclReceipt object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getRcyclReceipt(?ConnectionInterface $con = null)
    {
        if ($this->aRcyclReceipt === null && ($this->rcyhdcntrlnbr != 0 && ($this->rcyhdrcptbulk !== "" && $this->rcyhdrcptbulk !== null))) {
            $this->aRcyclReceipt = ChildRcyclReceiptQuery::create()->findPk([$this->rcyhdrcptbulk, $this->rcyhdcntrlnbr], $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRcyclReceipt->addRcyclReceiptLots($this);
             */
        }

        return $this->aRcyclReceipt;
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
        if (null !== $this->aRcyclReceiptDetail) {
            $this->aRcyclReceiptDetail->removeRcyclReceiptLot($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeRcyclReceiptLot($this);
        }
        if (null !== $this->aRcyclReceipt) {
            $this->aRcyclReceipt->removeRcyclReceiptLot($this);
        }
        $this->rcyhdrcptbulk = null;
        $this->rcyhdcntrlnbr = null;
        $this->rcydtrcptline = null;
        $this->inititemnbr = null;
        $this->rcysdwhse = null;
        $this->rcysdlotnbr = null;
        $this->rcysdbin = null;
        $this->rcysdlotqty = null;
        $this->rcysdlotdate = null;
        $this->rcysdlotref = null;
        $this->rcysdstatus = null;
        $this->rcysdclosedby = null;
        $this->rcysdcloseddate = null;
        $this->rcysdclosedtime = null;
        $this->rcysdtarewght = null;
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

        $this->aRcyclReceiptDetail = null;
        $this->aItemMasterItem = null;
        $this->aRcyclReceipt = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return $this->exportTo(RcyclReceiptLotTableMap::DEFAULT_STRING_FORMAT);
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
