<?php

namespace Base;

use \CpnLoad as ChildCpnLoad;
use \CpnLoadItem as ChildCpnLoadItem;
use \CpnLoadItemQuery as ChildCpnLoadItemQuery;
use \CpnLoadOrder as ChildCpnLoadOrder;
use \CpnLoadOrderQuery as ChildCpnLoadOrderQuery;
use \CpnLoadQuery as ChildCpnLoadQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \Exception;
use \PDO;
use Map\CpnLoadItemTableMap;
use Map\CpnLoadOrderTableMap;
use Map\CpnLoadTableMap;
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
 * Base class that represents a row from the 'load_cpn_header' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class CpnLoad implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Map\\CpnLoadTableMap';


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
     * The value for the lchdloadnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lchdloadnbr;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the lchdshipidfrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdshipidfrom;

    /**
     * The value for the lchdshipidthru field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdshipidthru;

    /**
     * The value for the lchdshipidthrusel field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdshipidthrusel;

    /**
     * The value for the lchdcustpofrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdcustpofrom;

    /**
     * The value for the lchdcustpothru field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdcustpothru;

    /**
     * The value for the lchdcustpothrusel field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdcustpothrusel;

    /**
     * The value for the lchdrqstdatefrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdrqstdatefrom;

    /**
     * The value for the lchdrqstdatethru field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdrqstdatethru;

    /**
     * The value for the lchdbol field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdbol;

    /**
     * The value for the lchdpronbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdpronbr;

    /**
     * The value for the lchdshipdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdshipdate;

    /**
     * The value for the lchdnbrofskids field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lchdnbrofskids;

    /**
     * The value for the lchdnbrofboxes field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lchdnbrofboxes;

    /**
     * The value for the lchdtotwght field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $lchdtotwght;

    /**
     * The value for the lchdslctnbrofboxes field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lchdslctnbrofboxes;

    /**
     * The value for the lchdslcttotwght field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $lchdslcttotwght;

    /**
     * The value for the lchdschdpickupdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdschdpickupdate;

    /**
     * The value for the lchdschdpickuptime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdschdpickuptime;

    /**
     * The value for the lchdexportdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdexportdate;

    /**
     * The value for the lchdexporttime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lchdexporttime;

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
     * @var        ObjectCollection|ChildCpnLoadItem[] Collection to store aggregation of ChildCpnLoadItem objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildCpnLoadItem> Collection to store aggregation of ChildCpnLoadItem objects.
     */
    protected $collCpnLoadItems;
    protected $collCpnLoadItemsPartial;

    /**
     * @var        ObjectCollection|ChildCpnLoadOrder[] Collection to store aggregation of ChildCpnLoadOrder objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildCpnLoadOrder> Collection to store aggregation of ChildCpnLoadOrder objects.
     */
    protected $collCpnLoadOrders;
    protected $collCpnLoadOrdersPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildCpnLoadItem[]
     * @phpstan-var ObjectCollection&\Traversable<ChildCpnLoadItem>
     */
    protected $cpnLoadItemsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildCpnLoadOrder[]
     * @phpstan-var ObjectCollection&\Traversable<ChildCpnLoadOrder>
     */
    protected $cpnLoadOrdersScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues(): void
    {
        $this->lchdloadnbr = 0;
        $this->intbwhse = '';
        $this->arcucustid = '';
        $this->lchdshipidfrom = '';
        $this->lchdshipidthru = '';
        $this->lchdshipidthrusel = '';
        $this->lchdcustpofrom = '';
        $this->lchdcustpothru = '';
        $this->lchdcustpothrusel = '';
        $this->lchdrqstdatefrom = '';
        $this->lchdrqstdatethru = '';
        $this->lchdbol = '';
        $this->lchdpronbr = '';
        $this->lchdshipdate = '';
        $this->lchdnbrofskids = 0;
        $this->lchdnbrofboxes = 0;
        $this->lchdtotwght = '0.00';
        $this->lchdslctnbrofboxes = 0;
        $this->lchdslcttotwght = '0.00';
        $this->lchdschdpickupdate = '';
        $this->lchdschdpickuptime = '';
        $this->lchdexportdate = '';
        $this->lchdexporttime = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\CpnLoad object.
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
        return !!$this->modifiedColumns;
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
     * @return void
     */
    public function setDeleted(bool $b): void
    {
        $this->deleted = $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param string $col If supplied, only the specified column is reset.
     * @return void
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
     * Compares this with another <code>CpnLoad</code> instance.  If
     * <code>obj</code> is an instance of <code>CpnLoad</code>, delegates to
     * <code>equals(CpnLoad)</code>.  Otherwise, returns <code>false</code>.
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
     *
     * @return array
     */
    public function getVirtualColumns(): array
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return bool
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
     * @param string $msg
     * @param int $priority One of the Propel::LOG_* logging levels
     * @return void
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

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, array(), true));
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
     * Get the [lchdloadnbr] column value.
     *
     * @return int
     */
    public function getLchdloadnbr()
    {
        return $this->lchdloadnbr;
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [lchdshipidfrom] column value.
     *
     * @return string
     */
    public function getLchdshipidfrom()
    {
        return $this->lchdshipidfrom;
    }

    /**
     * Get the [lchdshipidthru] column value.
     *
     * @return string
     */
    public function getLchdshipidthru()
    {
        return $this->lchdshipidthru;
    }

    /**
     * Get the [lchdshipidthrusel] column value.
     *
     * @return string
     */
    public function getLchdshipidthrusel()
    {
        return $this->lchdshipidthrusel;
    }

    /**
     * Get the [lchdcustpofrom] column value.
     *
     * @return string
     */
    public function getLchdcustpofrom()
    {
        return $this->lchdcustpofrom;
    }

    /**
     * Get the [lchdcustpothru] column value.
     *
     * @return string
     */
    public function getLchdcustpothru()
    {
        return $this->lchdcustpothru;
    }

    /**
     * Get the [lchdcustpothrusel] column value.
     *
     * @return string
     */
    public function getLchdcustpothrusel()
    {
        return $this->lchdcustpothrusel;
    }

    /**
     * Get the [lchdrqstdatefrom] column value.
     *
     * @return string
     */
    public function getLchdrqstdatefrom()
    {
        return $this->lchdrqstdatefrom;
    }

    /**
     * Get the [lchdrqstdatethru] column value.
     *
     * @return string
     */
    public function getLchdrqstdatethru()
    {
        return $this->lchdrqstdatethru;
    }

    /**
     * Get the [lchdbol] column value.
     *
     * @return string
     */
    public function getLchdbol()
    {
        return $this->lchdbol;
    }

    /**
     * Get the [lchdpronbr] column value.
     *
     * @return string
     */
    public function getLchdpronbr()
    {
        return $this->lchdpronbr;
    }

    /**
     * Get the [lchdshipdate] column value.
     *
     * @return string
     */
    public function getLchdshipdate()
    {
        return $this->lchdshipdate;
    }

    /**
     * Get the [lchdnbrofskids] column value.
     *
     * @return int
     */
    public function getLchdnbrofskids()
    {
        return $this->lchdnbrofskids;
    }

    /**
     * Get the [lchdnbrofboxes] column value.
     *
     * @return int
     */
    public function getLchdnbrofboxes()
    {
        return $this->lchdnbrofboxes;
    }

    /**
     * Get the [lchdtotwght] column value.
     *
     * @return string
     */
    public function getLchdtotwght()
    {
        return $this->lchdtotwght;
    }

    /**
     * Get the [lchdslctnbrofboxes] column value.
     *
     * @return int
     */
    public function getLchdslctnbrofboxes()
    {
        return $this->lchdslctnbrofboxes;
    }

    /**
     * Get the [lchdslcttotwght] column value.
     *
     * @return string
     */
    public function getLchdslcttotwght()
    {
        return $this->lchdslcttotwght;
    }

    /**
     * Get the [lchdschdpickupdate] column value.
     *
     * @return string
     */
    public function getLchdschdpickupdate()
    {
        return $this->lchdschdpickupdate;
    }

    /**
     * Get the [lchdschdpickuptime] column value.
     *
     * @return string
     */
    public function getLchdschdpickuptime()
    {
        return $this->lchdschdpickuptime;
    }

    /**
     * Get the [lchdexportdate] column value.
     *
     * @return string
     */
    public function getLchdexportdate()
    {
        return $this->lchdexportdate;
    }

    /**
     * Get the [lchdexporttime] column value.
     *
     * @return string
     */
    public function getLchdexporttime()
    {
        return $this->lchdexporttime;
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
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdloadnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lchdloadnbr !== $v) {
            $this->lchdloadnbr = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDLOADNBR] = true;
        }

        return $this;
    }

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_INTBWHSE] = true;
        }

        return $this;
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
            $this->modifiedColumns[CpnLoadTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    }

    /**
     * Set the value of [lchdshipidfrom] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdshipidfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdshipidfrom !== $v) {
            $this->lchdshipidfrom = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDSHIPIDFROM] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdshipidthru] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdshipidthru($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdshipidthru !== $v) {
            $this->lchdshipidthru = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDSHIPIDTHRU] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdshipidthrusel] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdshipidthrusel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdshipidthrusel !== $v) {
            $this->lchdshipidthrusel = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdcustpofrom] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdcustpofrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdcustpofrom !== $v) {
            $this->lchdcustpofrom = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDCUSTPOFROM] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdcustpothru] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdcustpothru($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdcustpothru !== $v) {
            $this->lchdcustpothru = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDCUSTPOTHRU] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdcustpothrusel] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdcustpothrusel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdcustpothrusel !== $v) {
            $this->lchdcustpothrusel = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdrqstdatefrom] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdrqstdatefrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdrqstdatefrom !== $v) {
            $this->lchdrqstdatefrom = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDRQSTDATEFROM] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdrqstdatethru] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdrqstdatethru($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdrqstdatethru !== $v) {
            $this->lchdrqstdatethru = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDRQSTDATETHRU] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdbol] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdbol($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdbol !== $v) {
            $this->lchdbol = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDBOL] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdpronbr] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdpronbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdpronbr !== $v) {
            $this->lchdpronbr = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDPRONBR] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdshipdate] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdshipdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdshipdate !== $v) {
            $this->lchdshipdate = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDSHIPDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdnbrofskids] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdnbrofskids($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lchdnbrofskids !== $v) {
            $this->lchdnbrofskids = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDNBROFSKIDS] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdnbrofboxes] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdnbrofboxes($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lchdnbrofboxes !== $v) {
            $this->lchdnbrofboxes = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDNBROFBOXES] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdtotwght] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdtotwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdtotwght !== $v) {
            $this->lchdtotwght = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDTOTWGHT] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdslctnbrofboxes] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdslctnbrofboxes($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->lchdslctnbrofboxes !== $v) {
            $this->lchdslctnbrofboxes = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdslcttotwght] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdslcttotwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdslcttotwght !== $v) {
            $this->lchdslcttotwght = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDSLCTTOTWGHT] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdschdpickupdate] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdschdpickupdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdschdpickupdate !== $v) {
            $this->lchdschdpickupdate = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdschdpickuptime] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdschdpickuptime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdschdpickuptime !== $v) {
            $this->lchdschdpickuptime = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdexportdate] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdexportdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdexportdate !== $v) {
            $this->lchdexportdate = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDEXPORTDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [lchdexporttime] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setLchdexporttime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lchdexporttime !== $v) {
            $this->lchdexporttime = $v;
            $this->modifiedColumns[CpnLoadTableMap::COL_LCHDEXPORTTIME] = true;
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
            $this->modifiedColumns[CpnLoadTableMap::COL_DATEUPDTD] = true;
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
            $this->modifiedColumns[CpnLoadTableMap::COL_TIMEUPDTD] = true;
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
            $this->modifiedColumns[CpnLoadTableMap::COL_DUMMY] = true;
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
            if ($this->lchdloadnbr !== 0) {
                return false;
            }

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->lchdshipidfrom !== '') {
                return false;
            }

            if ($this->lchdshipidthru !== '') {
                return false;
            }

            if ($this->lchdshipidthrusel !== '') {
                return false;
            }

            if ($this->lchdcustpofrom !== '') {
                return false;
            }

            if ($this->lchdcustpothru !== '') {
                return false;
            }

            if ($this->lchdcustpothrusel !== '') {
                return false;
            }

            if ($this->lchdrqstdatefrom !== '') {
                return false;
            }

            if ($this->lchdrqstdatethru !== '') {
                return false;
            }

            if ($this->lchdbol !== '') {
                return false;
            }

            if ($this->lchdpronbr !== '') {
                return false;
            }

            if ($this->lchdshipdate !== '') {
                return false;
            }

            if ($this->lchdnbrofskids !== 0) {
                return false;
            }

            if ($this->lchdnbrofboxes !== 0) {
                return false;
            }

            if ($this->lchdtotwght !== '0.00') {
                return false;
            }

            if ($this->lchdslctnbrofboxes !== 0) {
                return false;
            }

            if ($this->lchdslcttotwght !== '0.00') {
                return false;
            }

            if ($this->lchdschdpickupdate !== '') {
                return false;
            }

            if ($this->lchdschdpickuptime !== '') {
                return false;
            }

            if ($this->lchdexportdate !== '') {
                return false;
            }

            if ($this->lchdexporttime !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CpnLoadTableMap::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdloadnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CpnLoadTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CpnLoadTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CpnLoadTableMap::translateFieldName('Lchdshipidfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdshipidfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CpnLoadTableMap::translateFieldName('Lchdshipidthru', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdshipidthru = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CpnLoadTableMap::translateFieldName('Lchdshipidthrusel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdshipidthrusel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CpnLoadTableMap::translateFieldName('Lchdcustpofrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdcustpofrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CpnLoadTableMap::translateFieldName('Lchdcustpothru', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdcustpothru = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CpnLoadTableMap::translateFieldName('Lchdcustpothrusel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdcustpothrusel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CpnLoadTableMap::translateFieldName('Lchdrqstdatefrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdrqstdatefrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CpnLoadTableMap::translateFieldName('Lchdrqstdatethru', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdrqstdatethru = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CpnLoadTableMap::translateFieldName('Lchdbol', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdbol = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CpnLoadTableMap::translateFieldName('Lchdpronbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdpronbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CpnLoadTableMap::translateFieldName('Lchdshipdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdshipdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CpnLoadTableMap::translateFieldName('Lchdnbrofskids', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdnbrofskids = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CpnLoadTableMap::translateFieldName('Lchdnbrofboxes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdnbrofboxes = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CpnLoadTableMap::translateFieldName('Lchdtotwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdtotwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CpnLoadTableMap::translateFieldName('Lchdslctnbrofboxes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdslctnbrofboxes = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CpnLoadTableMap::translateFieldName('Lchdslcttotwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdslcttotwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CpnLoadTableMap::translateFieldName('Lchdschdpickupdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdschdpickupdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CpnLoadTableMap::translateFieldName('Lchdschdpickuptime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdschdpickuptime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CpnLoadTableMap::translateFieldName('Lchdexportdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdexportdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CpnLoadTableMap::translateFieldName('Lchdexporttime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lchdexporttime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CpnLoadTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CpnLoadTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CpnLoadTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 26; // 26 = CpnLoadTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CpnLoad'), 0, $e);
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
     * @return void
     */
    public function ensureConsistency(): void
    {
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
    }

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param bool $deep (optional) Whether to also de-associated any related objects.
     * @param ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
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

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CpnLoadTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCpnLoadQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->collCpnLoadItems = null;

            $this->collCpnLoadOrders = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see CpnLoad::setDeleted()
     * @see CpnLoad::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCpnLoadQuery::create()
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

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadTableMap::DATABASE_NAME);
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
                CpnLoadTableMap::addInstanceToPool($this);
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
     * @param ConnectionInterface $con
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

            if ($this->cpnLoadItemsScheduledForDeletion !== null) {
                if (!$this->cpnLoadItemsScheduledForDeletion->isEmpty()) {
                    \CpnLoadItemQuery::create()
                        ->filterByPrimaryKeys($this->cpnLoadItemsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cpnLoadItemsScheduledForDeletion = null;
                }
            }

            if ($this->collCpnLoadItems !== null) {
                foreach ($this->collCpnLoadItems as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->cpnLoadOrdersScheduledForDeletion !== null) {
                if (!$this->cpnLoadOrdersScheduledForDeletion->isEmpty()) {
                    \CpnLoadOrderQuery::create()
                        ->filterByPrimaryKeys($this->cpnLoadOrdersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cpnLoadOrdersScheduledForDeletion = null;
                }
            }

            if ($this->collCpnLoadOrders !== null) {
                foreach ($this->collCpnLoadOrders as $referrerFK) {
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
     * @param ConnectionInterface $con
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con): void
    {
        $modifiedColumns = [];
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDLOADNBR)) {
            $modifiedColumns[':p' . $index++]  = 'LchdLoadNbr';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSHIPIDFROM)) {
            $modifiedColumns[':p' . $index++]  = 'LchdShipIdFrom';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSHIPIDTHRU)) {
            $modifiedColumns[':p' . $index++]  = 'LchdShipIdThru';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL)) {
            $modifiedColumns[':p' . $index++]  = 'LchdShipIdThruSel';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDCUSTPOFROM)) {
            $modifiedColumns[':p' . $index++]  = 'LchdCustPoFrom';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDCUSTPOTHRU)) {
            $modifiedColumns[':p' . $index++]  = 'LchdCustPoThru';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL)) {
            $modifiedColumns[':p' . $index++]  = 'LchdCustPoThruSel';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDRQSTDATEFROM)) {
            $modifiedColumns[':p' . $index++]  = 'LchdRqstDateFrom';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDRQSTDATETHRU)) {
            $modifiedColumns[':p' . $index++]  = 'LchdRqstDateThru';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDBOL)) {
            $modifiedColumns[':p' . $index++]  = 'LchdBol';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDPRONBR)) {
            $modifiedColumns[':p' . $index++]  = 'LchdProNbr';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSHIPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'LchdShipDate';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDNBROFSKIDS)) {
            $modifiedColumns[':p' . $index++]  = 'LchdNbrOfSkids';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDNBROFBOXES)) {
            $modifiedColumns[':p' . $index++]  = 'LchdNbrOfBoxes';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDTOTWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'LchdTotWght';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES)) {
            $modifiedColumns[':p' . $index++]  = 'LchdSlctNbrOfBoxes';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'LchdSlctTotWght';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'LchdSchdPickupDate';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME)) {
            $modifiedColumns[':p' . $index++]  = 'LchdSchdPickupTime';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDEXPORTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'LchdExportDate';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDEXPORTTIME)) {
            $modifiedColumns[':p' . $index++]  = 'LchdExportTime';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO load_cpn_header (%s) VALUES (%s)',
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
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);

                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);

                        break;
                    case 'LchdShipIdFrom':
                        $stmt->bindValue($identifier, $this->lchdshipidfrom, PDO::PARAM_STR);

                        break;
                    case 'LchdShipIdThru':
                        $stmt->bindValue($identifier, $this->lchdshipidthru, PDO::PARAM_STR);

                        break;
                    case 'LchdShipIdThruSel':
                        $stmt->bindValue($identifier, $this->lchdshipidthrusel, PDO::PARAM_STR);

                        break;
                    case 'LchdCustPoFrom':
                        $stmt->bindValue($identifier, $this->lchdcustpofrom, PDO::PARAM_STR);

                        break;
                    case 'LchdCustPoThru':
                        $stmt->bindValue($identifier, $this->lchdcustpothru, PDO::PARAM_STR);

                        break;
                    case 'LchdCustPoThruSel':
                        $stmt->bindValue($identifier, $this->lchdcustpothrusel, PDO::PARAM_STR);

                        break;
                    case 'LchdRqstDateFrom':
                        $stmt->bindValue($identifier, $this->lchdrqstdatefrom, PDO::PARAM_STR);

                        break;
                    case 'LchdRqstDateThru':
                        $stmt->bindValue($identifier, $this->lchdrqstdatethru, PDO::PARAM_STR);

                        break;
                    case 'LchdBol':
                        $stmt->bindValue($identifier, $this->lchdbol, PDO::PARAM_STR);

                        break;
                    case 'LchdProNbr':
                        $stmt->bindValue($identifier, $this->lchdpronbr, PDO::PARAM_STR);

                        break;
                    case 'LchdShipDate':
                        $stmt->bindValue($identifier, $this->lchdshipdate, PDO::PARAM_STR);

                        break;
                    case 'LchdNbrOfSkids':
                        $stmt->bindValue($identifier, $this->lchdnbrofskids, PDO::PARAM_INT);

                        break;
                    case 'LchdNbrOfBoxes':
                        $stmt->bindValue($identifier, $this->lchdnbrofboxes, PDO::PARAM_INT);

                        break;
                    case 'LchdTotWght':
                        $stmt->bindValue($identifier, $this->lchdtotwght, PDO::PARAM_STR);

                        break;
                    case 'LchdSlctNbrOfBoxes':
                        $stmt->bindValue($identifier, $this->lchdslctnbrofboxes, PDO::PARAM_INT);

                        break;
                    case 'LchdSlctTotWght':
                        $stmt->bindValue($identifier, $this->lchdslcttotwght, PDO::PARAM_STR);

                        break;
                    case 'LchdSchdPickupDate':
                        $stmt->bindValue($identifier, $this->lchdschdpickupdate, PDO::PARAM_STR);

                        break;
                    case 'LchdSchdPickupTime':
                        $stmt->bindValue($identifier, $this->lchdschdpickuptime, PDO::PARAM_STR);

                        break;
                    case 'LchdExportDate':
                        $stmt->bindValue($identifier, $this->lchdexportdate, PDO::PARAM_STR);

                        break;
                    case 'LchdExportTime':
                        $stmt->bindValue($identifier, $this->lchdexporttime, PDO::PARAM_STR);

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
     * @param ConnectionInterface $con
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
        $pos = CpnLoadTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
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
                return $this->getLchdloadnbr();

            case 1:
                return $this->getIntbwhse();

            case 2:
                return $this->getArcucustid();

            case 3:
                return $this->getLchdshipidfrom();

            case 4:
                return $this->getLchdshipidthru();

            case 5:
                return $this->getLchdshipidthrusel();

            case 6:
                return $this->getLchdcustpofrom();

            case 7:
                return $this->getLchdcustpothru();

            case 8:
                return $this->getLchdcustpothrusel();

            case 9:
                return $this->getLchdrqstdatefrom();

            case 10:
                return $this->getLchdrqstdatethru();

            case 11:
                return $this->getLchdbol();

            case 12:
                return $this->getLchdpronbr();

            case 13:
                return $this->getLchdshipdate();

            case 14:
                return $this->getLchdnbrofskids();

            case 15:
                return $this->getLchdnbrofboxes();

            case 16:
                return $this->getLchdtotwght();

            case 17:
                return $this->getLchdslctnbrofboxes();

            case 18:
                return $this->getLchdslcttotwght();

            case 19:
                return $this->getLchdschdpickupdate();

            case 20:
                return $this->getLchdschdpickuptime();

            case 21:
                return $this->getLchdexportdate();

            case 22:
                return $this->getLchdexporttime();

            case 23:
                return $this->getDateupdtd();

            case 24:
                return $this->getTimeupdtd();

            case 25:
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
        if (isset($alreadyDumpedObjects['CpnLoad'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['CpnLoad'][$this->hashCode()] = true;
        $keys = CpnLoadTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getLchdloadnbr(),
            $keys[1] => $this->getIntbwhse(),
            $keys[2] => $this->getArcucustid(),
            $keys[3] => $this->getLchdshipidfrom(),
            $keys[4] => $this->getLchdshipidthru(),
            $keys[5] => $this->getLchdshipidthrusel(),
            $keys[6] => $this->getLchdcustpofrom(),
            $keys[7] => $this->getLchdcustpothru(),
            $keys[8] => $this->getLchdcustpothrusel(),
            $keys[9] => $this->getLchdrqstdatefrom(),
            $keys[10] => $this->getLchdrqstdatethru(),
            $keys[11] => $this->getLchdbol(),
            $keys[12] => $this->getLchdpronbr(),
            $keys[13] => $this->getLchdshipdate(),
            $keys[14] => $this->getLchdnbrofskids(),
            $keys[15] => $this->getLchdnbrofboxes(),
            $keys[16] => $this->getLchdtotwght(),
            $keys[17] => $this->getLchdslctnbrofboxes(),
            $keys[18] => $this->getLchdslcttotwght(),
            $keys[19] => $this->getLchdschdpickupdate(),
            $keys[20] => $this->getLchdschdpickuptime(),
            $keys[21] => $this->getLchdexportdate(),
            $keys[22] => $this->getLchdexporttime(),
            $keys[23] => $this->getDateupdtd(),
            $keys[24] => $this->getTimeupdtd(),
            $keys[25] => $this->getDummy(),
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
            if (null !== $this->collCpnLoadItems) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'cpnLoadItems';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'load_cpn_items';
                        break;
                    default:
                        $key = 'CpnLoadItems';
                }

                $result[$key] = $this->collCpnLoadItems->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCpnLoadOrders) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'cpnLoadOrders';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'load_cpn_orders';
                        break;
                    default:
                        $key = 'CpnLoadOrders';
                }

                $result[$key] = $this->collCpnLoadOrders->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this
     */
    public function setByName(string $name, $value, string $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CpnLoadTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                $this->setLchdloadnbr($value);
                break;
            case 1:
                $this->setIntbwhse($value);
                break;
            case 2:
                $this->setArcucustid($value);
                break;
            case 3:
                $this->setLchdshipidfrom($value);
                break;
            case 4:
                $this->setLchdshipidthru($value);
                break;
            case 5:
                $this->setLchdshipidthrusel($value);
                break;
            case 6:
                $this->setLchdcustpofrom($value);
                break;
            case 7:
                $this->setLchdcustpothru($value);
                break;
            case 8:
                $this->setLchdcustpothrusel($value);
                break;
            case 9:
                $this->setLchdrqstdatefrom($value);
                break;
            case 10:
                $this->setLchdrqstdatethru($value);
                break;
            case 11:
                $this->setLchdbol($value);
                break;
            case 12:
                $this->setLchdpronbr($value);
                break;
            case 13:
                $this->setLchdshipdate($value);
                break;
            case 14:
                $this->setLchdnbrofskids($value);
                break;
            case 15:
                $this->setLchdnbrofboxes($value);
                break;
            case 16:
                $this->setLchdtotwght($value);
                break;
            case 17:
                $this->setLchdslctnbrofboxes($value);
                break;
            case 18:
                $this->setLchdslcttotwght($value);
                break;
            case 19:
                $this->setLchdschdpickupdate($value);
                break;
            case 20:
                $this->setLchdschdpickuptime($value);
                break;
            case 21:
                $this->setLchdexportdate($value);
                break;
            case 22:
                $this->setLchdexporttime($value);
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
     * @param array $arr An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return $this
     */
    public function fromArray(array $arr, string $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = CpnLoadTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setLchdloadnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbwhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArcucustid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setLchdshipidfrom($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLchdshipidthru($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setLchdshipidthrusel($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setLchdcustpofrom($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setLchdcustpothru($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setLchdcustpothrusel($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setLchdrqstdatefrom($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setLchdrqstdatethru($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setLchdbol($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setLchdpronbr($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setLchdshipdate($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setLchdnbrofskids($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setLchdnbrofboxes($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setLchdtotwght($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setLchdslctnbrofboxes($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setLchdslcttotwght($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setLchdschdpickupdate($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setLchdschdpickuptime($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setLchdexportdate($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setLchdexporttime($arr[$keys[22]]);
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
        $criteria = new Criteria(CpnLoadTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDLOADNBR)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDLOADNBR, $this->lchdloadnbr);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_INTBWHSE)) {
            $criteria->add(CpnLoadTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_ARCUCUSTID)) {
            $criteria->add(CpnLoadTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSHIPIDFROM)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDSHIPIDFROM, $this->lchdshipidfrom);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSHIPIDTHRU)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDSHIPIDTHRU, $this->lchdshipidthru);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL, $this->lchdshipidthrusel);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDCUSTPOFROM)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDCUSTPOFROM, $this->lchdcustpofrom);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDCUSTPOTHRU)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDCUSTPOTHRU, $this->lchdcustpothru);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL, $this->lchdcustpothrusel);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDRQSTDATEFROM)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDRQSTDATEFROM, $this->lchdrqstdatefrom);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDRQSTDATETHRU)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDRQSTDATETHRU, $this->lchdrqstdatethru);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDBOL)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDBOL, $this->lchdbol);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDPRONBR)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDPRONBR, $this->lchdpronbr);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSHIPDATE)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDSHIPDATE, $this->lchdshipdate);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDNBROFSKIDS)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDNBROFSKIDS, $this->lchdnbrofskids);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDNBROFBOXES)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDNBROFBOXES, $this->lchdnbrofboxes);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDTOTWGHT)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDTOTWGHT, $this->lchdtotwght);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES, $this->lchdslctnbrofboxes);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT, $this->lchdslcttotwght);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE, $this->lchdschdpickupdate);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME, $this->lchdschdpickuptime);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDEXPORTDATE)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDEXPORTDATE, $this->lchdexportdate);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_LCHDEXPORTTIME)) {
            $criteria->add(CpnLoadTableMap::COL_LCHDEXPORTTIME, $this->lchdexporttime);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_DATEUPDTD)) {
            $criteria->add(CpnLoadTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_TIMEUPDTD)) {
            $criteria->add(CpnLoadTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(CpnLoadTableMap::COL_DUMMY)) {
            $criteria->add(CpnLoadTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildCpnLoadQuery::create();
        $criteria->add(CpnLoadTableMap::COL_LCHDLOADNBR, $this->lchdloadnbr);

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
        $validPk = null !== $this->getLchdloadnbr();

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
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getLchdloadnbr();
    }

    /**
     * Generic method to set the primary key (lchdloadnbr column).
     *
     * @param int|null $key Primary key.
     * @return void
     */
    public function setPrimaryKey(?int $key = null): void
    {
        $this->setLchdloadnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getLchdloadnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \CpnLoad (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setLchdloadnbr($this->getLchdloadnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setLchdshipidfrom($this->getLchdshipidfrom());
        $copyObj->setLchdshipidthru($this->getLchdshipidthru());
        $copyObj->setLchdshipidthrusel($this->getLchdshipidthrusel());
        $copyObj->setLchdcustpofrom($this->getLchdcustpofrom());
        $copyObj->setLchdcustpothru($this->getLchdcustpothru());
        $copyObj->setLchdcustpothrusel($this->getLchdcustpothrusel());
        $copyObj->setLchdrqstdatefrom($this->getLchdrqstdatefrom());
        $copyObj->setLchdrqstdatethru($this->getLchdrqstdatethru());
        $copyObj->setLchdbol($this->getLchdbol());
        $copyObj->setLchdpronbr($this->getLchdpronbr());
        $copyObj->setLchdshipdate($this->getLchdshipdate());
        $copyObj->setLchdnbrofskids($this->getLchdnbrofskids());
        $copyObj->setLchdnbrofboxes($this->getLchdnbrofboxes());
        $copyObj->setLchdtotwght($this->getLchdtotwght());
        $copyObj->setLchdslctnbrofboxes($this->getLchdslctnbrofboxes());
        $copyObj->setLchdslcttotwght($this->getLchdslcttotwght());
        $copyObj->setLchdschdpickupdate($this->getLchdschdpickupdate());
        $copyObj->setLchdschdpickuptime($this->getLchdschdpickuptime());
        $copyObj->setLchdexportdate($this->getLchdexportdate());
        $copyObj->setLchdexporttime($this->getLchdexporttime());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getCpnLoadItems() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCpnLoadItem($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCpnLoadOrders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCpnLoadOrder($relObj->copy($deepCopy));
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
     * @return \CpnLoad Clone of current object.
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
     * @param ChildCustomer $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
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
            $v->addCpnLoad($this);
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
                $this->aCustomer->addCpnLoads($this);
             */
        }

        return $this->aCustomer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName): void
    {
        if ('CpnLoadItem' === $relationName) {
            $this->initCpnLoadItems();
            return;
        }
        if ('CpnLoadOrder' === $relationName) {
            $this->initCpnLoadOrders();
            return;
        }
    }

    /**
     * Clears out the collCpnLoadItems collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addCpnLoadItems()
     */
    public function clearCpnLoadItems()
    {
        $this->collCpnLoadItems = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collCpnLoadItems collection loaded partially.
     *
     * @return void
     */
    public function resetPartialCpnLoadItems($v = true): void
    {
        $this->collCpnLoadItemsPartial = $v;
    }

    /**
     * Initializes the collCpnLoadItems collection.
     *
     * By default this just sets the collCpnLoadItems collection to an empty array (like clearcollCpnLoadItems());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCpnLoadItems(bool $overrideExisting = true): void
    {
        if (null !== $this->collCpnLoadItems && !$overrideExisting) {
            return;
        }

        $collectionClassName = CpnLoadItemTableMap::getTableMap()->getCollectionClassName();

        $this->collCpnLoadItems = new $collectionClassName;
        $this->collCpnLoadItems->setModel('\CpnLoadItem');
    }

    /**
     * Gets an array of ChildCpnLoadItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCpnLoad is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildCpnLoadItem[] List of ChildCpnLoadItem objects
     * @phpstan-return ObjectCollection&\Traversable<ChildCpnLoadItem> List of ChildCpnLoadItem objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getCpnLoadItems(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collCpnLoadItemsPartial && !$this->isNew();
        if (null === $this->collCpnLoadItems || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collCpnLoadItems) {
                    $this->initCpnLoadItems();
                } else {
                    $collectionClassName = CpnLoadItemTableMap::getTableMap()->getCollectionClassName();

                    $collCpnLoadItems = new $collectionClassName;
                    $collCpnLoadItems->setModel('\CpnLoadItem');

                    return $collCpnLoadItems;
                }
            } else {
                $collCpnLoadItems = ChildCpnLoadItemQuery::create(null, $criteria)
                    ->filterByCpnLoad($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCpnLoadItemsPartial && count($collCpnLoadItems)) {
                        $this->initCpnLoadItems(false);

                        foreach ($collCpnLoadItems as $obj) {
                            if (false == $this->collCpnLoadItems->contains($obj)) {
                                $this->collCpnLoadItems->append($obj);
                            }
                        }

                        $this->collCpnLoadItemsPartial = true;
                    }

                    return $collCpnLoadItems;
                }

                if ($partial && $this->collCpnLoadItems) {
                    foreach ($this->collCpnLoadItems as $obj) {
                        if ($obj->isNew()) {
                            $collCpnLoadItems[] = $obj;
                        }
                    }
                }

                $this->collCpnLoadItems = $collCpnLoadItems;
                $this->collCpnLoadItemsPartial = false;
            }
        }

        return $this->collCpnLoadItems;
    }

    /**
     * Sets a collection of ChildCpnLoadItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $cpnLoadItems A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setCpnLoadItems(Collection $cpnLoadItems, ?ConnectionInterface $con = null)
    {
        /** @var ChildCpnLoadItem[] $cpnLoadItemsToDelete */
        $cpnLoadItemsToDelete = $this->getCpnLoadItems(new Criteria(), $con)->diff($cpnLoadItems);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->cpnLoadItemsScheduledForDeletion = clone $cpnLoadItemsToDelete;

        foreach ($cpnLoadItemsToDelete as $cpnLoadItemRemoved) {
            $cpnLoadItemRemoved->setCpnLoad(null);
        }

        $this->collCpnLoadItems = null;
        foreach ($cpnLoadItems as $cpnLoadItem) {
            $this->addCpnLoadItem($cpnLoadItem);
        }

        $this->collCpnLoadItems = $cpnLoadItems;
        $this->collCpnLoadItemsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CpnLoadItem objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related CpnLoadItem objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countCpnLoadItems(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collCpnLoadItemsPartial && !$this->isNew();
        if (null === $this->collCpnLoadItems || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCpnLoadItems) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCpnLoadItems());
            }

            $query = ChildCpnLoadItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCpnLoad($this)
                ->count($con);
        }

        return count($this->collCpnLoadItems);
    }

    /**
     * Method called to associate a ChildCpnLoadItem object to this object
     * through the ChildCpnLoadItem foreign key attribute.
     *
     * @param ChildCpnLoadItem $l ChildCpnLoadItem
     * @return $this The current object (for fluent API support)
     */
    public function addCpnLoadItem(ChildCpnLoadItem $l)
    {
        if ($this->collCpnLoadItems === null) {
            $this->initCpnLoadItems();
            $this->collCpnLoadItemsPartial = true;
        }

        if (!$this->collCpnLoadItems->contains($l)) {
            $this->doAddCpnLoadItem($l);

            if ($this->cpnLoadItemsScheduledForDeletion and $this->cpnLoadItemsScheduledForDeletion->contains($l)) {
                $this->cpnLoadItemsScheduledForDeletion->remove($this->cpnLoadItemsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildCpnLoadItem $cpnLoadItem The ChildCpnLoadItem object to add.
     */
    protected function doAddCpnLoadItem(ChildCpnLoadItem $cpnLoadItem): void
    {
        $this->collCpnLoadItems[]= $cpnLoadItem;
        $cpnLoadItem->setCpnLoad($this);
    }

    /**
     * @param ChildCpnLoadItem $cpnLoadItem The ChildCpnLoadItem object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeCpnLoadItem(ChildCpnLoadItem $cpnLoadItem)
    {
        if ($this->getCpnLoadItems()->contains($cpnLoadItem)) {
            $pos = $this->collCpnLoadItems->search($cpnLoadItem);
            $this->collCpnLoadItems->remove($pos);
            if (null === $this->cpnLoadItemsScheduledForDeletion) {
                $this->cpnLoadItemsScheduledForDeletion = clone $this->collCpnLoadItems;
                $this->cpnLoadItemsScheduledForDeletion->clear();
            }
            $this->cpnLoadItemsScheduledForDeletion[]= clone $cpnLoadItem;
            $cpnLoadItem->setCpnLoad(null);
        }

        return $this;
    }

    /**
     * Clears out the collCpnLoadOrders collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addCpnLoadOrders()
     */
    public function clearCpnLoadOrders()
    {
        $this->collCpnLoadOrders = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collCpnLoadOrders collection loaded partially.
     *
     * @return void
     */
    public function resetPartialCpnLoadOrders($v = true): void
    {
        $this->collCpnLoadOrdersPartial = $v;
    }

    /**
     * Initializes the collCpnLoadOrders collection.
     *
     * By default this just sets the collCpnLoadOrders collection to an empty array (like clearcollCpnLoadOrders());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCpnLoadOrders(bool $overrideExisting = true): void
    {
        if (null !== $this->collCpnLoadOrders && !$overrideExisting) {
            return;
        }

        $collectionClassName = CpnLoadOrderTableMap::getTableMap()->getCollectionClassName();

        $this->collCpnLoadOrders = new $collectionClassName;
        $this->collCpnLoadOrders->setModel('\CpnLoadOrder');
    }

    /**
     * Gets an array of ChildCpnLoadOrder objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCpnLoad is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildCpnLoadOrder[] List of ChildCpnLoadOrder objects
     * @phpstan-return ObjectCollection&\Traversable<ChildCpnLoadOrder> List of ChildCpnLoadOrder objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getCpnLoadOrders(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collCpnLoadOrdersPartial && !$this->isNew();
        if (null === $this->collCpnLoadOrders || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collCpnLoadOrders) {
                    $this->initCpnLoadOrders();
                } else {
                    $collectionClassName = CpnLoadOrderTableMap::getTableMap()->getCollectionClassName();

                    $collCpnLoadOrders = new $collectionClassName;
                    $collCpnLoadOrders->setModel('\CpnLoadOrder');

                    return $collCpnLoadOrders;
                }
            } else {
                $collCpnLoadOrders = ChildCpnLoadOrderQuery::create(null, $criteria)
                    ->filterByCpnLoad($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCpnLoadOrdersPartial && count($collCpnLoadOrders)) {
                        $this->initCpnLoadOrders(false);

                        foreach ($collCpnLoadOrders as $obj) {
                            if (false == $this->collCpnLoadOrders->contains($obj)) {
                                $this->collCpnLoadOrders->append($obj);
                            }
                        }

                        $this->collCpnLoadOrdersPartial = true;
                    }

                    return $collCpnLoadOrders;
                }

                if ($partial && $this->collCpnLoadOrders) {
                    foreach ($this->collCpnLoadOrders as $obj) {
                        if ($obj->isNew()) {
                            $collCpnLoadOrders[] = $obj;
                        }
                    }
                }

                $this->collCpnLoadOrders = $collCpnLoadOrders;
                $this->collCpnLoadOrdersPartial = false;
            }
        }

        return $this->collCpnLoadOrders;
    }

    /**
     * Sets a collection of ChildCpnLoadOrder objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $cpnLoadOrders A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setCpnLoadOrders(Collection $cpnLoadOrders, ?ConnectionInterface $con = null)
    {
        /** @var ChildCpnLoadOrder[] $cpnLoadOrdersToDelete */
        $cpnLoadOrdersToDelete = $this->getCpnLoadOrders(new Criteria(), $con)->diff($cpnLoadOrders);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->cpnLoadOrdersScheduledForDeletion = clone $cpnLoadOrdersToDelete;

        foreach ($cpnLoadOrdersToDelete as $cpnLoadOrderRemoved) {
            $cpnLoadOrderRemoved->setCpnLoad(null);
        }

        $this->collCpnLoadOrders = null;
        foreach ($cpnLoadOrders as $cpnLoadOrder) {
            $this->addCpnLoadOrder($cpnLoadOrder);
        }

        $this->collCpnLoadOrders = $cpnLoadOrders;
        $this->collCpnLoadOrdersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CpnLoadOrder objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related CpnLoadOrder objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countCpnLoadOrders(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collCpnLoadOrdersPartial && !$this->isNew();
        if (null === $this->collCpnLoadOrders || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCpnLoadOrders) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCpnLoadOrders());
            }

            $query = ChildCpnLoadOrderQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCpnLoad($this)
                ->count($con);
        }

        return count($this->collCpnLoadOrders);
    }

    /**
     * Method called to associate a ChildCpnLoadOrder object to this object
     * through the ChildCpnLoadOrder foreign key attribute.
     *
     * @param ChildCpnLoadOrder $l ChildCpnLoadOrder
     * @return $this The current object (for fluent API support)
     */
    public function addCpnLoadOrder(ChildCpnLoadOrder $l)
    {
        if ($this->collCpnLoadOrders === null) {
            $this->initCpnLoadOrders();
            $this->collCpnLoadOrdersPartial = true;
        }

        if (!$this->collCpnLoadOrders->contains($l)) {
            $this->doAddCpnLoadOrder($l);

            if ($this->cpnLoadOrdersScheduledForDeletion and $this->cpnLoadOrdersScheduledForDeletion->contains($l)) {
                $this->cpnLoadOrdersScheduledForDeletion->remove($this->cpnLoadOrdersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildCpnLoadOrder $cpnLoadOrder The ChildCpnLoadOrder object to add.
     */
    protected function doAddCpnLoadOrder(ChildCpnLoadOrder $cpnLoadOrder): void
    {
        $this->collCpnLoadOrders[]= $cpnLoadOrder;
        $cpnLoadOrder->setCpnLoad($this);
    }

    /**
     * @param ChildCpnLoadOrder $cpnLoadOrder The ChildCpnLoadOrder object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeCpnLoadOrder(ChildCpnLoadOrder $cpnLoadOrder)
    {
        if ($this->getCpnLoadOrders()->contains($cpnLoadOrder)) {
            $pos = $this->collCpnLoadOrders->search($cpnLoadOrder);
            $this->collCpnLoadOrders->remove($pos);
            if (null === $this->cpnLoadOrdersScheduledForDeletion) {
                $this->cpnLoadOrdersScheduledForDeletion = clone $this->collCpnLoadOrders;
                $this->cpnLoadOrdersScheduledForDeletion->clear();
            }
            $this->cpnLoadOrdersScheduledForDeletion[]= clone $cpnLoadOrder;
            $cpnLoadOrder->setCpnLoad(null);
        }

        return $this;
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
            $this->aCustomer->removeCpnLoad($this);
        }
        $this->lchdloadnbr = null;
        $this->intbwhse = null;
        $this->arcucustid = null;
        $this->lchdshipidfrom = null;
        $this->lchdshipidthru = null;
        $this->lchdshipidthrusel = null;
        $this->lchdcustpofrom = null;
        $this->lchdcustpothru = null;
        $this->lchdcustpothrusel = null;
        $this->lchdrqstdatefrom = null;
        $this->lchdrqstdatethru = null;
        $this->lchdbol = null;
        $this->lchdpronbr = null;
        $this->lchdshipdate = null;
        $this->lchdnbrofskids = null;
        $this->lchdnbrofboxes = null;
        $this->lchdtotwght = null;
        $this->lchdslctnbrofboxes = null;
        $this->lchdslcttotwght = null;
        $this->lchdschdpickupdate = null;
        $this->lchdschdpickuptime = null;
        $this->lchdexportdate = null;
        $this->lchdexporttime = null;
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
        if ($deep) {
            if ($this->collCpnLoadItems) {
                foreach ($this->collCpnLoadItems as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCpnLoadOrders) {
                foreach ($this->collCpnLoadOrders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collCpnLoadItems = null;
        $this->collCpnLoadOrders = null;
        $this->aCustomer = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CpnLoadTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preSave(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postSave(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before inserting to database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preInsert(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postInsert(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before updating the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preUpdate(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postUpdate(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before deleting the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preDelete(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface|null $con
     * @return void
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
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
