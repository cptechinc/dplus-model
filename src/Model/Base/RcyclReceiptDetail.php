<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \RcyclReceipt as ChildRcyclReceipt;
use \RcyclReceiptDetail as ChildRcyclReceiptDetail;
use \RcyclReceiptDetailQuery as ChildRcyclReceiptDetailQuery;
use \RcyclReceiptLot as ChildRcyclReceiptLot;
use \RcyclReceiptLotQuery as ChildRcyclReceiptLotQuery;
use \RcyclReceiptQuery as ChildRcyclReceiptQuery;
use \UnitofMeasureSale as ChildUnitofMeasureSale;
use \UnitofMeasureSaleQuery as ChildUnitofMeasureSaleQuery;
use \Exception;
use \PDO;
use Map\RcyclReceiptDetailTableMap;
use Map\RcyclReceiptLotTableMap;
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
 * Base class that represents a row from the 'rcycl_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class RcyclReceiptDetail implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = \Map\RcyclReceiptDetailTableMap::class;


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
     * The value for the intbuomsale field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbuomsale;

    /**
     * The value for the rcydtrcptqty field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $rcydtrcptqty;

    /**
     * The value for the rcydtstatus field.
     *
     * Note: this column has a database default value of: 'O'
     * @var        string
     */
    protected $rcydtstatus;

    /**
     * The value for the rcydtclosedby field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcydtclosedby;

    /**
     * The value for the rcydtcloseddate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcydtcloseddate;

    /**
     * The value for the rcydtclosedtime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $rcydtclosedtime;

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
     * @var        ChildRcyclReceipt
     */
    protected $aRcyclReceipt;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildUnitofMeasureSale
     */
    protected $aUnitofMeasureSale;

    /**
     * @var        ObjectCollection|ChildRcyclReceiptLot[] Collection to store aggregation of ChildRcyclReceiptLot objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildRcyclReceiptLot> Collection to store aggregation of ChildRcyclReceiptLot objects.
     */
    protected $collRcyclReceiptLots;
    protected $collRcyclReceiptLotsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildRcyclReceiptLot[]
     * @phpstan-var ObjectCollection&\Traversable<ChildRcyclReceiptLot>
     */
    protected $rcyclReceiptLotsScheduledForDeletion;

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
        $this->intbuomsale = '';
        $this->rcydtrcptqty = '0.00';
        $this->rcydtstatus = 'O';
        $this->rcydtclosedby = '';
        $this->rcydtcloseddate = '';
        $this->rcydtclosedtime = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\RcyclReceiptDetail object.
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
     * Compares this with another <code>RcyclReceiptDetail</code> instance.  If
     * <code>obj</code> is an instance of <code>RcyclReceiptDetail</code>, delegates to
     * <code>equals(RcyclReceiptDetail)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [intbuomsale] column value.
     *
     * @return string
     */
    public function getIntbuomsale()
    {
        return $this->intbuomsale;
    }

    /**
     * Get the [rcydtrcptqty] column value.
     *
     * @return string
     */
    public function getRcydtrcptqty()
    {
        return $this->rcydtrcptqty;
    }

    /**
     * Get the [rcydtstatus] column value.
     *
     * @return string
     */
    public function getRcydtstatus()
    {
        return $this->rcydtstatus;
    }

    /**
     * Get the [rcydtclosedby] column value.
     *
     * @return string
     */
    public function getRcydtclosedby()
    {
        return $this->rcydtclosedby;
    }

    /**
     * Get the [rcydtcloseddate] column value.
     *
     * @return string
     */
    public function getRcydtcloseddate()
    {
        return $this->rcydtcloseddate;
    }

    /**
     * Get the [rcydtclosedtime] column value.
     *
     * @return string
     */
    public function getRcydtclosedtime()
    {
        return $this->rcydtclosedtime;
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
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK] = true;
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
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR] = true;
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
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE] = true;
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
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    }

    /**
     * Set the value of [intbuomsale] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setIntbuomsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuomsale !== $v) {
            $this->intbuomsale = $v;
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_INTBUOMSALE] = true;
        }

        if ($this->aUnitofMeasureSale !== null && $this->aUnitofMeasureSale->getIntbuomsale() !== $v) {
            $this->aUnitofMeasureSale = null;
        }

        return $this;
    }

    /**
     * Set the value of [rcydtrcptqty] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcydtrcptqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcydtrcptqty !== $v) {
            $this->rcydtrcptqty = $v;
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcydtstatus] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcydtstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcydtstatus !== $v) {
            $this->rcydtstatus = $v;
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_RCYDTSTATUS] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcydtclosedby] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcydtclosedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcydtclosedby !== $v) {
            $this->rcydtclosedby = $v;
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcydtcloseddate] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcydtcloseddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcydtcloseddate !== $v) {
            $this->rcydtcloseddate = $v;
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [rcydtclosedtime] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRcydtclosedtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rcydtclosedtime !== $v) {
            $this->rcydtclosedtime = $v;
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME] = true;
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
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_DATEUPDTD] = true;
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
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_TIMEUPDTD] = true;
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
            $this->modifiedColumns[RcyclReceiptDetailTableMap::COL_DUMMY] = true;
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

            if ($this->intbuomsale !== '') {
                return false;
            }

            if ($this->rcydtrcptqty !== '0.00') {
                return false;
            }

            if ($this->rcydtstatus !== 'O') {
                return false;
            }

            if ($this->rcydtclosedby !== '') {
                return false;
            }

            if ($this->rcydtcloseddate !== '') {
                return false;
            }

            if ($this->rcydtclosedtime !== '') {
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

            $col = $row[TableMap::TYPE_NUM === $indexType ? $startcol : RcyclReceiptDetailTableMap::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdrcptbulk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 1 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcyhdcntrlnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 2 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcydtrcptline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 3 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 4 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuomsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 5 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Rcydtrcptqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcydtrcptqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 6 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Rcydtstatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcydtstatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 7 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Rcydtclosedby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcydtclosedby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 8 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Rcydtcloseddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcydtcloseddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 9 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Rcydtclosedtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->rcydtclosedtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 10 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 11 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM === $indexType ? 12 + $startcol : RcyclReceiptDetailTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 13; // 13 = RcyclReceiptDetailTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\RcyclReceiptDetail'), 0, $e);
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
        if ($this->aRcyclReceipt !== null && $this->rcyhdrcptbulk !== $this->aRcyclReceipt->getRcyhdrcptbulk()) {
            $this->aRcyclReceipt = null;
        }
        if ($this->aRcyclReceipt !== null && $this->rcyhdcntrlnbr !== $this->aRcyclReceipt->getRcyhdcntrlnbr()) {
            $this->aRcyclReceipt = null;
        }
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aUnitofMeasureSale !== null && $this->intbuomsale !== $this->aUnitofMeasureSale->getIntbuomsale()) {
            $this->aUnitofMeasureSale = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(RcyclReceiptDetailTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildRcyclReceiptDetailQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRcyclReceipt = null;
            $this->aItemMasterItem = null;
            $this->aUnitofMeasureSale = null;
            $this->collRcyclReceiptLots = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @throws \Propel\Runtime\Exception\PropelException
     * @see RcyclReceiptDetail::setDeleted()
     * @see RcyclReceiptDetail::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if (!$con instanceof \Propel\Runtime\Connection\ConnectionInterface) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptDetailTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildRcyclReceiptDetailQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptDetailTableMap::DATABASE_NAME);
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
                RcyclReceiptDetailTableMap::addInstanceToPool($this);
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

            if ($this->aRcyclReceipt !== null) {
                if ($this->aRcyclReceipt->isModified() || $this->aRcyclReceipt->isNew()) {
                    $affectedRows += $this->aRcyclReceipt->save($con);
                }
                $this->setRcyclReceipt($this->aRcyclReceipt);
            }

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aUnitofMeasureSale !== null) {
                if ($this->aUnitofMeasureSale->isModified() || $this->aUnitofMeasureSale->isNew()) {
                    $affectedRows += $this->aUnitofMeasureSale->save($con);
                }
                $this->setUnitofMeasureSale($this->aUnitofMeasureSale);
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

            if ($this->rcyclReceiptLotsScheduledForDeletion !== null && !$this->rcyclReceiptLotsScheduledForDeletion->isEmpty()) {
                \RcyclReceiptLotQuery::create()
                    ->filterByPrimaryKeys($this->rcyclReceiptLotsScheduledForDeletion->getPrimaryKeys(false))
                    ->delete($con);
                $this->rcyclReceiptLotsScheduledForDeletion = null;
            }

            if ($this->collRcyclReceiptLots !== null) {
                foreach ($this->collRcyclReceiptLots as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdRcptBulk';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'RcyhdCntrlNbr';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'RcydtRcptLine';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_INTBUOMSALE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomSale';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'RcydtRcptQty';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTSTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'RcydtStatus';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY)) {
            $modifiedColumns[':p' . $index++]  = 'RcydtClosedBy';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'RcydtClosedDate';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME)) {
            $modifiedColumns[':p' . $index++]  = 'RcydtClosedTime';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO rcycl_det (%s) VALUES (%s)',
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
                    case 'IntbUomSale':
                        $stmt->bindValue($identifier, $this->intbuomsale, PDO::PARAM_STR);

                        break;
                    case 'RcydtRcptQty':
                        $stmt->bindValue($identifier, $this->rcydtrcptqty, PDO::PARAM_STR);

                        break;
                    case 'RcydtStatus':
                        $stmt->bindValue($identifier, $this->rcydtstatus, PDO::PARAM_STR);

                        break;
                    case 'RcydtClosedBy':
                        $stmt->bindValue($identifier, $this->rcydtclosedby, PDO::PARAM_STR);

                        break;
                    case 'RcydtClosedDate':
                        $stmt->bindValue($identifier, $this->rcydtcloseddate, PDO::PARAM_STR);

                        break;
                    case 'RcydtClosedTime':
                        $stmt->bindValue($identifier, $this->rcydtclosedtime, PDO::PARAM_STR);

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
        $pos = RcyclReceiptDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                return $this->getIntbuomsale();

            case 5:
                return $this->getRcydtrcptqty();

            case 6:
                return $this->getRcydtstatus();

            case 7:
                return $this->getRcydtclosedby();

            case 8:
                return $this->getRcydtcloseddate();

            case 9:
                return $this->getRcydtclosedtime();

            case 10:
                return $this->getDateupdtd();

            case 11:
                return $this->getTimeupdtd();

            case 12:
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
        if (isset($alreadyDumpedObjects['RcyclReceiptDetail'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['RcyclReceiptDetail'][$this->hashCode()] = true;
        $keys = RcyclReceiptDetailTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getRcyhdrcptbulk(),
            $keys[1] => $this->getRcyhdcntrlnbr(),
            $keys[2] => $this->getRcydtrcptline(),
            $keys[3] => $this->getInititemnbr(),
            $keys[4] => $this->getIntbuomsale(),
            $keys[5] => $this->getRcydtrcptqty(),
            $keys[6] => $this->getRcydtstatus(),
            $keys[7] => $this->getRcydtclosedby(),
            $keys[8] => $this->getRcydtcloseddate(),
            $keys[9] => $this->getRcydtclosedtime(),
            $keys[10] => $this->getDateupdtd(),
            $keys[11] => $this->getTimeupdtd(),
            $keys[12] => $this->getDummy(),
        ];
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
            if (null !== $this->aUnitofMeasureSale) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'unitofMeasureSale';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_uom_sale';
                        break;
                    default:
                        $key = 'UnitofMeasureSale';
                }

                $result[$key] = $this->aUnitofMeasureSale->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collRcyclReceiptLots) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'rcyclReceiptLots';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'rcycl_lot_dets';
                        break;
                    default:
                        $key = 'RcyclReceiptLots';
                }

                $result[$key] = $this->collRcyclReceiptLots->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RcyclReceiptDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                $this->setIntbuomsale($value);
                break;
            case 5:
                $this->setRcydtrcptqty($value);
                break;
            case 6:
                $this->setRcydtstatus($value);
                break;
            case 7:
                $this->setRcydtclosedby($value);
                break;
            case 8:
                $this->setRcydtcloseddate($value);
                break;
            case 9:
                $this->setRcydtclosedtime($value);
                break;
            case 10:
                $this->setDateupdtd($value);
                break;
            case 11:
                $this->setTimeupdtd($value);
                break;
            case 12:
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
        $keys = RcyclReceiptDetailTableMap::getFieldNames($keyType);

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
            $this->setIntbuomsale($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setRcydtrcptqty($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setRcydtstatus($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setRcydtclosedby($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setRcydtcloseddate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setRcydtclosedtime($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setDateupdtd($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setTimeupdtd($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDummy($arr[$keys[12]]);
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
        $criteria = new Criteria(RcyclReceiptDetailTableMap::DATABASE_NAME);

        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, $this->rcyhdrcptbulk);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $this->rcyhdcntrlnbr);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $this->rcydtrcptline);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_INITITEMNBR)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_INTBUOMSALE)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_INTBUOMSALE, $this->intbuomsale);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY, $this->rcydtrcptqty);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTSTATUS)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_RCYDTSTATUS, $this->rcydtstatus);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY, $this->rcydtclosedby);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE, $this->rcydtcloseddate);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME, $this->rcydtclosedtime);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_DATEUPDTD)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_TIMEUPDTD)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(RcyclReceiptDetailTableMap::COL_DUMMY)) {
            $criteria->add(RcyclReceiptDetailTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildRcyclReceiptDetailQuery::create();
        $criteria->add(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, $this->rcyhdrcptbulk);
        $criteria->add(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $this->rcyhdcntrlnbr);
        $criteria->add(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $this->rcydtrcptline);
        $criteria->add(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $this->inititemnbr);

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
        $validPk = !in_array(null, [$this->getRcyhdrcptbulk(), $this->getRcyhdcntrlnbr(), $this->getRcydtrcptline(), $this->getInititemnbr()], true);

        $validPrimaryKeyFKs = 3;
        $primaryKeyFKs = [];

        //relation receipt to table rcycl_head
        if ($this->aRcyclReceipt && $hash = spl_object_hash($this->aRcyclReceipt)) {
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
        return [$this->getRcyhdrcptbulk(), $this->getRcyhdcntrlnbr(), $this->getRcydtrcptline(), $this->getInititemnbr()];
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
    }

    /**
     * Returns true if the primary key for this object is null.
     */
    public function isPrimaryKeyNull(): bool
    {
        return (null === $this->getRcyhdrcptbulk()) && (null === $this->getRcyhdcntrlnbr()) && (null === $this->getRcydtrcptline()) && (null === $this->getInititemnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \RcyclReceiptDetail (or compatible) type.
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
        $copyObj->setIntbuomsale($this->getIntbuomsale());
        $copyObj->setRcydtrcptqty($this->getRcydtrcptqty());
        $copyObj->setRcydtstatus($this->getRcydtstatus());
        $copyObj->setRcydtclosedby($this->getRcydtclosedby());
        $copyObj->setRcydtcloseddate($this->getRcydtcloseddate());
        $copyObj->setRcydtclosedtime($this->getRcydtclosedtime());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getRcyclReceiptLots() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRcyclReceiptLot($relObj->copy($deepCopy));
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
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \RcyclReceiptDetail Clone of current object.
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
            $v->addRcyclReceiptDetail($this);
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
                $this->aRcyclReceipt->addRcyclReceiptDetails($this);
             */
        }

        return $this->aRcyclReceipt;
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
            $v->addRcyclReceiptDetail($this);
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
                $this->aItemMasterItem->addRcyclReceiptDetails($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildUnitofMeasureSale object.
     *
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setUnitofMeasureSale(ChildUnitofMeasureSale $v = null)
    {
        if (!$v instanceof \UnitofMeasureSale) {
            $this->setIntbuomsale('');
        } else {
            $this->setIntbuomsale($v->getIntbuomsale());
        }

        $this->aUnitofMeasureSale = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUnitofMeasureSale object, it will not be re-added.
        if ($v instanceof \UnitofMeasureSale) {
            $v->addRcyclReceiptDetail($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildUnitofMeasureSale object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildUnitofMeasureSale The associated ChildUnitofMeasureSale object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getUnitofMeasureSale(?ConnectionInterface $con = null)
    {
        if ($this->aUnitofMeasureSale === null && (($this->intbuomsale !== "" && $this->intbuomsale !== null))) {
            $this->aUnitofMeasureSale = ChildUnitofMeasureSaleQuery::create()->findPk($this->intbuomsale, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUnitofMeasureSale->addRcyclReceiptDetails($this);
             */
        }

        return $this->aUnitofMeasureSale;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     */
    public function initRelation($relationName): void
    {
        if ('RcyclReceiptLot' === $relationName) {
            $this->initRcyclReceiptLots();
            return;
        }
    }

    /**
     * Clears out the collRcyclReceiptLots collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addRcyclReceiptLots()
     */
    public function clearRcyclReceiptLots()
    {
        $this->collRcyclReceiptLots = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collRcyclReceiptLots collection loaded partially.
     */
    public function resetPartialRcyclReceiptLots($v = true): void
    {
        $this->collRcyclReceiptLotsPartial = $v;
    }

    /**
     * Initializes the collRcyclReceiptLots collection.
     *
     * By default this just sets the collRcyclReceiptLots collection to an empty array (like clearcollRcyclReceiptLots());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     */
    public function initRcyclReceiptLots(bool $overrideExisting = true): void
    {
        if (null !== $this->collRcyclReceiptLots && !$overrideExisting) {
            return;
        }

        $collectionClassName = RcyclReceiptLotTableMap::getTableMap()->getCollectionClassName();

        $this->collRcyclReceiptLots = new $collectionClassName;
        $this->collRcyclReceiptLots->setModel('\RcyclReceiptLot');
    }

    /**
     * Gets an array of ChildRcyclReceiptLot objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildRcyclReceiptDetail is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildRcyclReceiptLot[] List of ChildRcyclReceiptLot objects
     * @phpstan-return ObjectCollection&\Traversable<ChildRcyclReceiptLot> List of ChildRcyclReceiptLot objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getRcyclReceiptLots(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collRcyclReceiptLotsPartial && !$this->isNew();
        if (null === $this->collRcyclReceiptLots || $criteria instanceof \Propel\Runtime\ActiveQuery\Criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collRcyclReceiptLots) {
                    $this->initRcyclReceiptLots();
                } else {
                    $collectionClassName = RcyclReceiptLotTableMap::getTableMap()->getCollectionClassName();

                    $collRcyclReceiptLots = new $collectionClassName;
                    $collRcyclReceiptLots->setModel('\RcyclReceiptLot');

                    return $collRcyclReceiptLots;
                }
            } else {
                $collRcyclReceiptLots = ChildRcyclReceiptLotQuery::create(null, $criteria)
                    ->filterByRcyclReceiptDetail($this)
                    ->find($con);

                if ($criteria instanceof \Propel\Runtime\ActiveQuery\Criteria) {
                    if (false !== $this->collRcyclReceiptLotsPartial && count($collRcyclReceiptLots)) {
                        $this->initRcyclReceiptLots(false);

                        foreach ($collRcyclReceiptLots as $obj) {
                            if (false == $this->collRcyclReceiptLots->contains($obj)) {
                                $this->collRcyclReceiptLots->append($obj);
                            }
                        }

                        $this->collRcyclReceiptLotsPartial = true;
                    }

                    return $collRcyclReceiptLots;
                }

                if ($partial && $this->collRcyclReceiptLots) {
                    foreach ($this->collRcyclReceiptLots as $obj) {
                        if ($obj->isNew()) {
                            $collRcyclReceiptLots[] = $obj;
                        }
                    }
                }

                $this->collRcyclReceiptLots = $collRcyclReceiptLots;
                $this->collRcyclReceiptLotsPartial = false;
            }
        }

        return $this->collRcyclReceiptLots;
    }

    /**
     * Sets a collection of ChildRcyclReceiptLot objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $rcyclReceiptLots A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setRcyclReceiptLots(Collection $rcyclReceiptLots, ?ConnectionInterface $con = null)
    {
        /** @var ChildRcyclReceiptLot[] $rcyclReceiptLotsToDelete */
        $rcyclReceiptLotsToDelete = $this->getRcyclReceiptLots(new Criteria(), $con)->diff($rcyclReceiptLots);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->rcyclReceiptLotsScheduledForDeletion = clone $rcyclReceiptLotsToDelete;

        foreach ($rcyclReceiptLotsToDelete as $rcyclReceiptLotRemoved) {
            $rcyclReceiptLotRemoved->setRcyclReceiptDetail();
        }

        $this->collRcyclReceiptLots = null;
        foreach ($rcyclReceiptLots as $rcyclReceiptLot) {
            $this->addRcyclReceiptLot($rcyclReceiptLot);
        }

        $this->collRcyclReceiptLots = $rcyclReceiptLots;
        $this->collRcyclReceiptLotsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RcyclReceiptLot objects.
     *
     * @param Criteria $criteria
     * @param ConnectionInterface $con
     * @return int Count of related RcyclReceiptLot objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countRcyclReceiptLots(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collRcyclReceiptLotsPartial && !$this->isNew();
        if (null === $this->collRcyclReceiptLots || $criteria instanceof \Propel\Runtime\ActiveQuery\Criteria || $partial) {
            if ($this->isNew() && null === $this->collRcyclReceiptLots) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRcyclReceiptLots());
            }

            $query = ChildRcyclReceiptLotQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRcyclReceiptDetail($this)
                ->count($con);
        }

        return count($this->collRcyclReceiptLots);
    }

    /**
     * Method called to associate a ChildRcyclReceiptLot object to this object
     * through the ChildRcyclReceiptLot foreign key attribute.
     *
     * @param ChildRcyclReceiptLot $l ChildRcyclReceiptLot
     * @return $this The current object (for fluent API support)
     */
    public function addRcyclReceiptLot(ChildRcyclReceiptLot $l)
    {
        if ($this->collRcyclReceiptLots === null) {
            $this->initRcyclReceiptLots();
            $this->collRcyclReceiptLotsPartial = true;
        }

        if (!$this->collRcyclReceiptLots->contains($l)) {
            $this->doAddRcyclReceiptLot($l);

            if ($this->rcyclReceiptLotsScheduledForDeletion && $this->rcyclReceiptLotsScheduledForDeletion->contains($l)) {
                $this->rcyclReceiptLotsScheduledForDeletion->remove($this->rcyclReceiptLotsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildRcyclReceiptLot $rcyclReceiptLot The ChildRcyclReceiptLot object to add.
     */
    protected function doAddRcyclReceiptLot(ChildRcyclReceiptLot $rcyclReceiptLot): void
    {
        $this->collRcyclReceiptLots[]= $rcyclReceiptLot;
        $rcyclReceiptLot->setRcyclReceiptDetail($this);
    }

    /**
     * @param ChildRcyclReceiptLot $rcyclReceiptLot The ChildRcyclReceiptLot object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeRcyclReceiptLot(ChildRcyclReceiptLot $rcyclReceiptLot)
    {
        if ($this->getRcyclReceiptLots()->contains($rcyclReceiptLot)) {
            $pos = $this->collRcyclReceiptLots->search($rcyclReceiptLot);
            $this->collRcyclReceiptLots->remove($pos);
            if (null === $this->rcyclReceiptLotsScheduledForDeletion) {
                $this->rcyclReceiptLotsScheduledForDeletion = clone $this->collRcyclReceiptLots;
                $this->rcyclReceiptLotsScheduledForDeletion->clear();
            }
            $this->rcyclReceiptLotsScheduledForDeletion[]= clone $rcyclReceiptLot;
            $rcyclReceiptLot->setRcyclReceiptDetail();
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RcyclReceiptDetail is new, it will return
     * an empty collection; or if this RcyclReceiptDetail has previously
     * been saved, it will retrieve related RcyclReceiptLots from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RcyclReceiptDetail.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @param string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildRcyclReceiptLot[] List of ChildRcyclReceiptLot objects
     * @phpstan-return ObjectCollection&\Traversable<ChildRcyclReceiptLot}> List of ChildRcyclReceiptLot objects
     */
    public function getRcyclReceiptLotsJoinItemMasterItem(?Criteria $criteria = null, ?ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildRcyclReceiptLotQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getRcyclReceiptLots($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RcyclReceiptDetail is new, it will return
     * an empty collection; or if this RcyclReceiptDetail has previously
     * been saved, it will retrieve related RcyclReceiptLots from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RcyclReceiptDetail.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @param string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildRcyclReceiptLot[] List of ChildRcyclReceiptLot objects
     * @phpstan-return ObjectCollection&\Traversable<ChildRcyclReceiptLot}> List of ChildRcyclReceiptLot objects
     */
    public function getRcyclReceiptLotsJoinRcyclReceipt(?Criteria $criteria = null, ?ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildRcyclReceiptLotQuery::create(null, $criteria);
        $query->joinWith('RcyclReceipt', $joinBehavior);

        return $this->getRcyclReceiptLots($query, $con);
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
        if (null !== $this->aRcyclReceipt) {
            $this->aRcyclReceipt->removeRcyclReceiptDetail($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeRcyclReceiptDetail($this);
        }
        if (null !== $this->aUnitofMeasureSale) {
            $this->aUnitofMeasureSale->removeRcyclReceiptDetail($this);
        }
        $this->rcyhdrcptbulk = null;
        $this->rcyhdcntrlnbr = null;
        $this->rcydtrcptline = null;
        $this->inititemnbr = null;
        $this->intbuomsale = null;
        $this->rcydtrcptqty = null;
        $this->rcydtstatus = null;
        $this->rcydtclosedby = null;
        $this->rcydtcloseddate = null;
        $this->rcydtclosedtime = null;
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
        if ($deep && $this->collRcyclReceiptLots) {
            foreach ($this->collRcyclReceiptLots as $o) {
                $o->clearAllReferences($deep);
            }
        } // if ($deep)

        $this->collRcyclReceiptLots = null;
        $this->aRcyclReceipt = null;
        $this->aItemMasterItem = null;
        $this->aUnitofMeasureSale = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return $this->exportTo(RcyclReceiptDetailTableMap::DEFAULT_STRING_FORMAT);
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
