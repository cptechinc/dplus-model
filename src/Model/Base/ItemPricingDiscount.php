<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItemPricingDiscountQuery as ChildItemPricingDiscountQuery;
use \Exception;
use \PDO;
use Map\ItemPricingDiscountTableMap;
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
 * Base class that represents a row from the 'so_price_discount' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItemPricingDiscount implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Map\\ItemPricingDiscountTableMap';


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
     * The value for the oepctype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oepctype;

    /**
     * The value for the oepctbltype field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oepctbltype;

    /**
     * The value for the oepcstrtdate field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oepcstrtdate;

    /**
     * The value for the oepccustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oepccustid;

    /**
     * The value for the oepccustcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oepccustcode;

    /**
     * The value for the oepcitemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oepcitemnbr;

    /**
     * The value for the oepcitemgrup field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oepcitemgrup;

    /**
     * The value for the oepcsp field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oepcsp;

    /**
     * The value for the oepcmeth field.
     *
     * @var        string|null
     */
    protected $oepcmeth;

    /**
     * The value for the oepccode field.
     *
     * @var        string|null
     */
    protected $oepccode;

    /**
     * The value for the oepcpcnt field.
     *
     * @var        string|null
     */
    protected $oepcpcnt;

    /**
     * The value for the oepcpricbase field.
     *
     * @var        string|null
     */
    protected $oepcpricbase;

    /**
     * The value for the oepcpricunit1 field.
     *
     * @var        int|null
     */
    protected $oepcpricunit1;

    /**
     * The value for the oepcpricpric1 field.
     *
     * @var        string|null
     */
    protected $oepcpricpric1;

    /**
     * The value for the oepcpricuom1 field.
     *
     * @var        string|null
     */
    protected $oepcpricuom1;

    /**
     * The value for the oepcpricunit2 field.
     *
     * @var        int|null
     */
    protected $oepcpricunit2;

    /**
     * The value for the oepcpricpric2 field.
     *
     * @var        string|null
     */
    protected $oepcpricpric2;

    /**
     * The value for the oepcpricuom2 field.
     *
     * @var        string|null
     */
    protected $oepcpricuom2;

    /**
     * The value for the oepcpricunit3 field.
     *
     * @var        int|null
     */
    protected $oepcpricunit3;

    /**
     * The value for the oepcpricpric3 field.
     *
     * @var        string|null
     */
    protected $oepcpricpric3;

    /**
     * The value for the oepcpricuom3 field.
     *
     * @var        string|null
     */
    protected $oepcpricuom3;

    /**
     * The value for the oepcpricunit4 field.
     *
     * @var        int|null
     */
    protected $oepcpricunit4;

    /**
     * The value for the oepcpricpric4 field.
     *
     * @var        string|null
     */
    protected $oepcpricpric4;

    /**
     * The value for the oepcpricuom4 field.
     *
     * @var        string|null
     */
    protected $oepcpricuom4;

    /**
     * The value for the oepcpricunit5 field.
     *
     * @var        int|null
     */
    protected $oepcpricunit5;

    /**
     * The value for the oepcpricpric5 field.
     *
     * @var        string|null
     */
    protected $oepcpricpric5;

    /**
     * The value for the oepcpricuom5 field.
     *
     * @var        string|null
     */
    protected $oepcpricuom5;

    /**
     * The value for the oepcstancost field.
     *
     * @var        string|null
     */
    protected $oepcstancost;

    /**
     * The value for the oepcenddate field.
     *
     * @var        string|null
     */
    protected $oepcenddate;

    /**
     * The value for the oepcqtybrk field.
     *
     * @var        string|null
     */
    protected $oepcqtybrk;

    /**
     * The value for the oepccontcost field.
     *
     * @var        string|null
     */
    protected $oepccontcost;

    /**
     * The value for the oepclastchgdate field.
     *
     * @var        string|null
     */
    protected $oepclastchgdate;

    /**
     * The value for the dateupdtd field.
     *
     * @var        string|null
     */
    protected $dateupdtd;

    /**
     * The value for the timeupdtd field.
     *
     * @var        string|null
     */
    protected $timeupdtd;

    /**
     * The value for the dummy field.
     *
     * @var        string|null
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
        $this->oepctype = '';
        $this->oepctbltype = 0;
        $this->oepcstrtdate = 0;
        $this->oepccustid = '';
        $this->oepccustcode = '';
        $this->oepcitemnbr = '';
        $this->oepcitemgrup = '';
        $this->oepcsp = '';
    }

    /**
     * Initializes internal state of Base\ItemPricingDiscount object.
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
     * Compares this with another <code>ItemPricingDiscount</code> instance.  If
     * <code>obj</code> is an instance of <code>ItemPricingDiscount</code>, delegates to
     * <code>equals(ItemPricingDiscount)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [oepctype] column value.
     *
     * @return string
     */
    public function getOepctype()
    {
        return $this->oepctype;
    }

    /**
     * Get the [oepctbltype] column value.
     *
     * @return int
     */
    public function getOepctbltype()
    {
        return $this->oepctbltype;
    }

    /**
     * Get the [oepcstrtdate] column value.
     *
     * @return int
     */
    public function getOepcstrtdate()
    {
        return $this->oepcstrtdate;
    }

    /**
     * Get the [oepccustid] column value.
     *
     * @return string
     */
    public function getOepccustid()
    {
        return $this->oepccustid;
    }

    /**
     * Get the [oepccustcode] column value.
     *
     * @return string
     */
    public function getOepccustcode()
    {
        return $this->oepccustcode;
    }

    /**
     * Get the [oepcitemnbr] column value.
     *
     * @return string
     */
    public function getOepcitemnbr()
    {
        return $this->oepcitemnbr;
    }

    /**
     * Get the [oepcitemgrup] column value.
     *
     * @return string
     */
    public function getOepcitemgrup()
    {
        return $this->oepcitemgrup;
    }

    /**
     * Get the [oepcsp] column value.
     *
     * @return string
     */
    public function getOepcsp()
    {
        return $this->oepcsp;
    }

    /**
     * Get the [oepcmeth] column value.
     *
     * @return string|null
     */
    public function getOepcmeth()
    {
        return $this->oepcmeth;
    }

    /**
     * Get the [oepccode] column value.
     *
     * @return string|null
     */
    public function getOepccode()
    {
        return $this->oepccode;
    }

    /**
     * Get the [oepcpcnt] column value.
     *
     * @return string|null
     */
    public function getOepcpcnt()
    {
        return $this->oepcpcnt;
    }

    /**
     * Get the [oepcpricbase] column value.
     *
     * @return string|null
     */
    public function getOepcpricbase()
    {
        return $this->oepcpricbase;
    }

    /**
     * Get the [oepcpricunit1] column value.
     *
     * @return int|null
     */
    public function getOepcpricunit1()
    {
        return $this->oepcpricunit1;
    }

    /**
     * Get the [oepcpricpric1] column value.
     *
     * @return string|null
     */
    public function getOepcpricpric1()
    {
        return $this->oepcpricpric1;
    }

    /**
     * Get the [oepcpricuom1] column value.
     *
     * @return string|null
     */
    public function getOepcpricuom1()
    {
        return $this->oepcpricuom1;
    }

    /**
     * Get the [oepcpricunit2] column value.
     *
     * @return int|null
     */
    public function getOepcpricunit2()
    {
        return $this->oepcpricunit2;
    }

    /**
     * Get the [oepcpricpric2] column value.
     *
     * @return string|null
     */
    public function getOepcpricpric2()
    {
        return $this->oepcpricpric2;
    }

    /**
     * Get the [oepcpricuom2] column value.
     *
     * @return string|null
     */
    public function getOepcpricuom2()
    {
        return $this->oepcpricuom2;
    }

    /**
     * Get the [oepcpricunit3] column value.
     *
     * @return int|null
     */
    public function getOepcpricunit3()
    {
        return $this->oepcpricunit3;
    }

    /**
     * Get the [oepcpricpric3] column value.
     *
     * @return string|null
     */
    public function getOepcpricpric3()
    {
        return $this->oepcpricpric3;
    }

    /**
     * Get the [oepcpricuom3] column value.
     *
     * @return string|null
     */
    public function getOepcpricuom3()
    {
        return $this->oepcpricuom3;
    }

    /**
     * Get the [oepcpricunit4] column value.
     *
     * @return int|null
     */
    public function getOepcpricunit4()
    {
        return $this->oepcpricunit4;
    }

    /**
     * Get the [oepcpricpric4] column value.
     *
     * @return string|null
     */
    public function getOepcpricpric4()
    {
        return $this->oepcpricpric4;
    }

    /**
     * Get the [oepcpricuom4] column value.
     *
     * @return string|null
     */
    public function getOepcpricuom4()
    {
        return $this->oepcpricuom4;
    }

    /**
     * Get the [oepcpricunit5] column value.
     *
     * @return int|null
     */
    public function getOepcpricunit5()
    {
        return $this->oepcpricunit5;
    }

    /**
     * Get the [oepcpricpric5] column value.
     *
     * @return string|null
     */
    public function getOepcpricpric5()
    {
        return $this->oepcpricpric5;
    }

    /**
     * Get the [oepcpricuom5] column value.
     *
     * @return string|null
     */
    public function getOepcpricuom5()
    {
        return $this->oepcpricuom5;
    }

    /**
     * Get the [oepcstancost] column value.
     *
     * @return string|null
     */
    public function getOepcstancost()
    {
        return $this->oepcstancost;
    }

    /**
     * Get the [oepcenddate] column value.
     *
     * @return string|null
     */
    public function getOepcenddate()
    {
        return $this->oepcenddate;
    }

    /**
     * Get the [oepcqtybrk] column value.
     *
     * @return string|null
     */
    public function getOepcqtybrk()
    {
        return $this->oepcqtybrk;
    }

    /**
     * Get the [oepccontcost] column value.
     *
     * @return string|null
     */
    public function getOepccontcost()
    {
        return $this->oepccontcost;
    }

    /**
     * Get the [oepclastchgdate] column value.
     *
     * @return string|null
     */
    public function getOepclastchgdate()
    {
        return $this->oepclastchgdate;
    }

    /**
     * Get the [dateupdtd] column value.
     *
     * @return string|null
     */
    public function getDateupdtd()
    {
        return $this->dateupdtd;
    }

    /**
     * Get the [timeupdtd] column value.
     *
     * @return string|null
     */
    public function getTimeupdtd()
    {
        return $this->timeupdtd;
    }

    /**
     * Get the [dummy] column value.
     *
     * @return string|null
     */
    public function getDummy()
    {
        return $this->dummy;
    }

    /**
     * Set the value of [oepctype] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepctype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepctype !== $v) {
            $this->oepctype = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCTYPE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepctbltype] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepctbltype($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oepctbltype !== $v) {
            $this->oepctbltype = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCTBLTYPE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcstrtdate] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcstrtdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oepcstrtdate !== $v) {
            $this->oepcstrtdate = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCSTRTDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepccustid] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepccustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepccustid !== $v) {
            $this->oepccustid = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    }

    /**
     * Set the value of [oepccustcode] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepccustcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepccustcode !== $v) {
            $this->oepccustcode = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCCUSTCODE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcitemnbr] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcitemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcitemnbr !== $v) {
            $this->oepcitemnbr = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    }

    /**
     * Set the value of [oepcitemgrup] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcitemgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcitemgrup !== $v) {
            $this->oepcitemgrup = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCITEMGRUP] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcsp] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcsp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcsp !== $v) {
            $this->oepcsp = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCSP] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcmeth] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcmeth($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcmeth !== $v) {
            $this->oepcmeth = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCMETH] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepccode] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepccode !== $v) {
            $this->oepccode = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCCODE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpcnt] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpcnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpcnt !== $v) {
            $this->oepcpcnt = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPCNT] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricbase] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricbase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricbase !== $v) {
            $this->oepcpricbase = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICBASE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricunit1] column.
     *
     * @param int|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricunit1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oepcpricunit1 !== $v) {
            $this->oepcpricunit1 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricpric1] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricpric1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricpric1 !== $v) {
            $this->oepcpricpric1 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricuom1] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricuom1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricuom1 !== $v) {
            $this->oepcpricuom1 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUOM1] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricunit2] column.
     *
     * @param int|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricunit2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oepcpricunit2 !== $v) {
            $this->oepcpricunit2 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricpric2] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricpric2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricpric2 !== $v) {
            $this->oepcpricpric2 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricuom2] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricuom2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricuom2 !== $v) {
            $this->oepcpricuom2 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUOM2] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricunit3] column.
     *
     * @param int|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricunit3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oepcpricunit3 !== $v) {
            $this->oepcpricunit3 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricpric3] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricpric3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricpric3 !== $v) {
            $this->oepcpricpric3 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricuom3] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricuom3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricuom3 !== $v) {
            $this->oepcpricuom3 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUOM3] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricunit4] column.
     *
     * @param int|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricunit4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oepcpricunit4 !== $v) {
            $this->oepcpricunit4 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricpric4] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricpric4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricpric4 !== $v) {
            $this->oepcpricpric4 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricuom4] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricuom4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricuom4 !== $v) {
            $this->oepcpricuom4 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUOM4] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricunit5] column.
     *
     * @param int|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricunit5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oepcpricunit5 !== $v) {
            $this->oepcpricunit5 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricpric5] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricpric5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricpric5 !== $v) {
            $this->oepcpricpric5 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcpricuom5] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcpricuom5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcpricuom5 !== $v) {
            $this->oepcpricuom5 = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCPRICUOM5] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcstancost] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcstancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcstancost !== $v) {
            $this->oepcstancost = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCSTANCOST] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcenddate] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcenddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcenddate !== $v) {
            $this->oepcenddate = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCENDDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepcqtybrk] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepcqtybrk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepcqtybrk !== $v) {
            $this->oepcqtybrk = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCQTYBRK] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepccontcost] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepccontcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepccontcost !== $v) {
            $this->oepccontcost = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCCONTCOST] = true;
        }

        return $this;
    }

    /**
     * Set the value of [oepclastchgdate] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setOepclastchgdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oepclastchgdate !== $v) {
            $this->oepclastchgdate = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_OEPCLASTCHGDATE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    }

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    }

    /**
     * Set the value of [dummy] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItemPricingDiscountTableMap::COL_DUMMY] = true;
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
            if ($this->oepctype !== '') {
                return false;
            }

            if ($this->oepctbltype !== 0) {
                return false;
            }

            if ($this->oepcstrtdate !== 0) {
                return false;
            }

            if ($this->oepccustid !== '') {
                return false;
            }

            if ($this->oepccustcode !== '') {
                return false;
            }

            if ($this->oepcitemnbr !== '') {
                return false;
            }

            if ($this->oepcitemgrup !== '') {
                return false;
            }

            if ($this->oepcsp !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepctype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepctype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepctbltype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepctbltype = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcstrtdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcstrtdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepccustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepccustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepccustcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepccustcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcitemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcitemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcitemgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcitemgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcsp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcsp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcmeth', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcmeth = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepccode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepccode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpcnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpcnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricbase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricunit1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricunit1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricpric1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricpric1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricuom1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricuom1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricunit2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricunit2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricpric2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricpric2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricuom2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricuom2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricunit3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricunit3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricpric3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricpric3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricuom3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricuom3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricunit4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricunit4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricpric4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricpric4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricuom4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricuom4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricunit5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricunit5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricpric5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricpric5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcpricuom5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcpricuom5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcstancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcstancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcenddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcenddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepcqtybrk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepcqtybrk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepccontcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepccontcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Oepclastchgdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oepclastchgdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ItemPricingDiscountTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 35; // 35 = ItemPricingDiscountTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItemPricingDiscount'), 0, $e);
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
        if ($this->aCustomer !== null && $this->oepccustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
        if ($this->aItemMasterItem !== null && $this->oepcitemnbr !== $this->aItemMasterItem->getInititemnbr()) {
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
            $con = Propel::getServiceContainer()->getReadConnection(ItemPricingDiscountTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemPricingDiscountQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see ItemPricingDiscount::setDeleted()
     * @see ItemPricingDiscount::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingDiscountTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemPricingDiscountQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingDiscountTableMap::DATABASE_NAME);
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
                ItemPricingDiscountTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OepcType';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OepcTblType';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OepcStrtDate';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'OepcCustId';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OepcCustCode';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OepcItemNbr';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'OepcItemGrup';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCSP)) {
            $modifiedColumns[':p' . $index++]  = 'OepcSp';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCMETH)) {
            $modifiedColumns[':p' . $index++]  = 'OepcMeth';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OepcCode';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPCNT)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPcnt';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICBASE)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricBase';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUnit1';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricPric1';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM1)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUom1';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUnit2';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricPric2';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM2)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUom2';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUnit3';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricPric3';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM3)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUom3';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUnit4';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricPric4';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM4)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUom4';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUnit5';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricPric5';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM5)) {
            $modifiedColumns[':p' . $index++]  = 'OepcPricUom5';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCSTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OepcStanCost';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCENDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OepcEndDate';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCQTYBRK)) {
            $modifiedColumns[':p' . $index++]  = 'OepcQtyBrk';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCCONTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OepcContCost';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCLASTCHGDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OepcLastChgDate';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_price_discount (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OepcType':
                        $stmt->bindValue($identifier, $this->oepctype, PDO::PARAM_STR);

                        break;
                    case 'OepcTblType':
                        $stmt->bindValue($identifier, $this->oepctbltype, PDO::PARAM_INT);

                        break;
                    case 'OepcStrtDate':
                        $stmt->bindValue($identifier, $this->oepcstrtdate, PDO::PARAM_INT);

                        break;
                    case 'OepcCustId':
                        $stmt->bindValue($identifier, $this->oepccustid, PDO::PARAM_STR);

                        break;
                    case 'OepcCustCode':
                        $stmt->bindValue($identifier, $this->oepccustcode, PDO::PARAM_STR);

                        break;
                    case 'OepcItemNbr':
                        $stmt->bindValue($identifier, $this->oepcitemnbr, PDO::PARAM_STR);

                        break;
                    case 'OepcItemGrup':
                        $stmt->bindValue($identifier, $this->oepcitemgrup, PDO::PARAM_STR);

                        break;
                    case 'OepcSp':
                        $stmt->bindValue($identifier, $this->oepcsp, PDO::PARAM_STR);

                        break;
                    case 'OepcMeth':
                        $stmt->bindValue($identifier, $this->oepcmeth, PDO::PARAM_STR);

                        break;
                    case 'OepcCode':
                        $stmt->bindValue($identifier, $this->oepccode, PDO::PARAM_STR);

                        break;
                    case 'OepcPcnt':
                        $stmt->bindValue($identifier, $this->oepcpcnt, PDO::PARAM_STR);

                        break;
                    case 'OepcPricBase':
                        $stmt->bindValue($identifier, $this->oepcpricbase, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUnit1':
                        $stmt->bindValue($identifier, $this->oepcpricunit1, PDO::PARAM_INT);

                        break;
                    case 'OepcPricPric1':
                        $stmt->bindValue($identifier, $this->oepcpricpric1, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUom1':
                        $stmt->bindValue($identifier, $this->oepcpricuom1, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUnit2':
                        $stmt->bindValue($identifier, $this->oepcpricunit2, PDO::PARAM_INT);

                        break;
                    case 'OepcPricPric2':
                        $stmt->bindValue($identifier, $this->oepcpricpric2, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUom2':
                        $stmt->bindValue($identifier, $this->oepcpricuom2, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUnit3':
                        $stmt->bindValue($identifier, $this->oepcpricunit3, PDO::PARAM_INT);

                        break;
                    case 'OepcPricPric3':
                        $stmt->bindValue($identifier, $this->oepcpricpric3, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUom3':
                        $stmt->bindValue($identifier, $this->oepcpricuom3, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUnit4':
                        $stmt->bindValue($identifier, $this->oepcpricunit4, PDO::PARAM_INT);

                        break;
                    case 'OepcPricPric4':
                        $stmt->bindValue($identifier, $this->oepcpricpric4, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUom4':
                        $stmt->bindValue($identifier, $this->oepcpricuom4, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUnit5':
                        $stmt->bindValue($identifier, $this->oepcpricunit5, PDO::PARAM_INT);

                        break;
                    case 'OepcPricPric5':
                        $stmt->bindValue($identifier, $this->oepcpricpric5, PDO::PARAM_STR);

                        break;
                    case 'OepcPricUom5':
                        $stmt->bindValue($identifier, $this->oepcpricuom5, PDO::PARAM_STR);

                        break;
                    case 'OepcStanCost':
                        $stmt->bindValue($identifier, $this->oepcstancost, PDO::PARAM_STR);

                        break;
                    case 'OepcEndDate':
                        $stmt->bindValue($identifier, $this->oepcenddate, PDO::PARAM_STR);

                        break;
                    case 'OepcQtyBrk':
                        $stmt->bindValue($identifier, $this->oepcqtybrk, PDO::PARAM_STR);

                        break;
                    case 'OepcContCost':
                        $stmt->bindValue($identifier, $this->oepccontcost, PDO::PARAM_STR);

                        break;
                    case 'OepcLastChgDate':
                        $stmt->bindValue($identifier, $this->oepclastchgdate, PDO::PARAM_STR);

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
        $pos = ItemPricingDiscountTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOepctype();

            case 1:
                return $this->getOepctbltype();

            case 2:
                return $this->getOepcstrtdate();

            case 3:
                return $this->getOepccustid();

            case 4:
                return $this->getOepccustcode();

            case 5:
                return $this->getOepcitemnbr();

            case 6:
                return $this->getOepcitemgrup();

            case 7:
                return $this->getOepcsp();

            case 8:
                return $this->getOepcmeth();

            case 9:
                return $this->getOepccode();

            case 10:
                return $this->getOepcpcnt();

            case 11:
                return $this->getOepcpricbase();

            case 12:
                return $this->getOepcpricunit1();

            case 13:
                return $this->getOepcpricpric1();

            case 14:
                return $this->getOepcpricuom1();

            case 15:
                return $this->getOepcpricunit2();

            case 16:
                return $this->getOepcpricpric2();

            case 17:
                return $this->getOepcpricuom2();

            case 18:
                return $this->getOepcpricunit3();

            case 19:
                return $this->getOepcpricpric3();

            case 20:
                return $this->getOepcpricuom3();

            case 21:
                return $this->getOepcpricunit4();

            case 22:
                return $this->getOepcpricpric4();

            case 23:
                return $this->getOepcpricuom4();

            case 24:
                return $this->getOepcpricunit5();

            case 25:
                return $this->getOepcpricpric5();

            case 26:
                return $this->getOepcpricuom5();

            case 27:
                return $this->getOepcstancost();

            case 28:
                return $this->getOepcenddate();

            case 29:
                return $this->getOepcqtybrk();

            case 30:
                return $this->getOepccontcost();

            case 31:
                return $this->getOepclastchgdate();

            case 32:
                return $this->getDateupdtd();

            case 33:
                return $this->getTimeupdtd();

            case 34:
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
        if (isset($alreadyDumpedObjects['ItemPricingDiscount'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['ItemPricingDiscount'][$this->hashCode()] = true;
        $keys = ItemPricingDiscountTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getOepctype(),
            $keys[1] => $this->getOepctbltype(),
            $keys[2] => $this->getOepcstrtdate(),
            $keys[3] => $this->getOepccustid(),
            $keys[4] => $this->getOepccustcode(),
            $keys[5] => $this->getOepcitemnbr(),
            $keys[6] => $this->getOepcitemgrup(),
            $keys[7] => $this->getOepcsp(),
            $keys[8] => $this->getOepcmeth(),
            $keys[9] => $this->getOepccode(),
            $keys[10] => $this->getOepcpcnt(),
            $keys[11] => $this->getOepcpricbase(),
            $keys[12] => $this->getOepcpricunit1(),
            $keys[13] => $this->getOepcpricpric1(),
            $keys[14] => $this->getOepcpricuom1(),
            $keys[15] => $this->getOepcpricunit2(),
            $keys[16] => $this->getOepcpricpric2(),
            $keys[17] => $this->getOepcpricuom2(),
            $keys[18] => $this->getOepcpricunit3(),
            $keys[19] => $this->getOepcpricpric3(),
            $keys[20] => $this->getOepcpricuom3(),
            $keys[21] => $this->getOepcpricunit4(),
            $keys[22] => $this->getOepcpricpric4(),
            $keys[23] => $this->getOepcpricuom4(),
            $keys[24] => $this->getOepcpricunit5(),
            $keys[25] => $this->getOepcpricpric5(),
            $keys[26] => $this->getOepcpricuom5(),
            $keys[27] => $this->getOepcstancost(),
            $keys[28] => $this->getOepcenddate(),
            $keys[29] => $this->getOepcqtybrk(),
            $keys[30] => $this->getOepccontcost(),
            $keys[31] => $this->getOepclastchgdate(),
            $keys[32] => $this->getDateupdtd(),
            $keys[33] => $this->getTimeupdtd(),
            $keys[34] => $this->getDummy(),
        ];
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
        $pos = ItemPricingDiscountTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                $this->setOepctype($value);
                break;
            case 1:
                $this->setOepctbltype($value);
                break;
            case 2:
                $this->setOepcstrtdate($value);
                break;
            case 3:
                $this->setOepccustid($value);
                break;
            case 4:
                $this->setOepccustcode($value);
                break;
            case 5:
                $this->setOepcitemnbr($value);
                break;
            case 6:
                $this->setOepcitemgrup($value);
                break;
            case 7:
                $this->setOepcsp($value);
                break;
            case 8:
                $this->setOepcmeth($value);
                break;
            case 9:
                $this->setOepccode($value);
                break;
            case 10:
                $this->setOepcpcnt($value);
                break;
            case 11:
                $this->setOepcpricbase($value);
                break;
            case 12:
                $this->setOepcpricunit1($value);
                break;
            case 13:
                $this->setOepcpricpric1($value);
                break;
            case 14:
                $this->setOepcpricuom1($value);
                break;
            case 15:
                $this->setOepcpricunit2($value);
                break;
            case 16:
                $this->setOepcpricpric2($value);
                break;
            case 17:
                $this->setOepcpricuom2($value);
                break;
            case 18:
                $this->setOepcpricunit3($value);
                break;
            case 19:
                $this->setOepcpricpric3($value);
                break;
            case 20:
                $this->setOepcpricuom3($value);
                break;
            case 21:
                $this->setOepcpricunit4($value);
                break;
            case 22:
                $this->setOepcpricpric4($value);
                break;
            case 23:
                $this->setOepcpricuom4($value);
                break;
            case 24:
                $this->setOepcpricunit5($value);
                break;
            case 25:
                $this->setOepcpricpric5($value);
                break;
            case 26:
                $this->setOepcpricuom5($value);
                break;
            case 27:
                $this->setOepcstancost($value);
                break;
            case 28:
                $this->setOepcenddate($value);
                break;
            case 29:
                $this->setOepcqtybrk($value);
                break;
            case 30:
                $this->setOepccontcost($value);
                break;
            case 31:
                $this->setOepclastchgdate($value);
                break;
            case 32:
                $this->setDateupdtd($value);
                break;
            case 33:
                $this->setTimeupdtd($value);
                break;
            case 34:
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
        $keys = ItemPricingDiscountTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOepctype($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOepctbltype($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOepcstrtdate($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOepccustid($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOepccustcode($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOepcitemnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOepcitemgrup($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOepcsp($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOepcmeth($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOepccode($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOepcpcnt($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOepcpricbase($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOepcpricunit1($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOepcpricpric1($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOepcpricuom1($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOepcpricunit2($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOepcpricpric2($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOepcpricuom2($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setOepcpricunit3($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOepcpricpric3($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOepcpricuom3($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOepcpricunit4($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setOepcpricpric4($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setOepcpricuom4($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setOepcpricunit5($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setOepcpricpric5($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setOepcpricuom5($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setOepcstancost($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setOepcenddate($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setOepcqtybrk($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setOepccontcost($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setOepclastchgdate($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setDateupdtd($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setTimeupdtd($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setDummy($arr[$keys[34]]);
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
        $criteria = new Criteria(ItemPricingDiscountTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCTYPE)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCTYPE, $this->oepctype);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, $this->oepctbltype);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, $this->oepcstrtdate);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCCUSTID)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCCUSTID, $this->oepccustid);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE, $this->oepccustcode);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCITEMNBR)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCITEMNBR, $this->oepcitemnbr);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP, $this->oepcitemgrup);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCSP)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCSP, $this->oepcsp);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCMETH)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCMETH, $this->oepcmeth);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCCODE)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCCODE, $this->oepccode);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPCNT)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPCNT, $this->oepcpcnt);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICBASE)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICBASE, $this->oepcpricbase);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1, $this->oepcpricunit1);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1, $this->oepcpricpric1);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM1)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUOM1, $this->oepcpricuom1);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2, $this->oepcpricunit2);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2, $this->oepcpricpric2);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM2)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUOM2, $this->oepcpricuom2);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3, $this->oepcpricunit3);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3, $this->oepcpricpric3);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM3)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUOM3, $this->oepcpricuom3);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4, $this->oepcpricunit4);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4, $this->oepcpricpric4);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM4)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUOM4, $this->oepcpricuom4);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5, $this->oepcpricunit5);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5, $this->oepcpricpric5);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCPRICUOM5)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCPRICUOM5, $this->oepcpricuom5);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCSTANCOST)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCSTANCOST, $this->oepcstancost);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCENDDATE)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCENDDATE, $this->oepcenddate);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCQTYBRK)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCQTYBRK, $this->oepcqtybrk);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCCONTCOST)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCCONTCOST, $this->oepccontcost);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_OEPCLASTCHGDATE)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_OEPCLASTCHGDATE, $this->oepclastchgdate);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItemPricingDiscountTableMap::COL_DUMMY)) {
            $criteria->add(ItemPricingDiscountTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildItemPricingDiscountQuery::create();
        $criteria->add(ItemPricingDiscountTableMap::COL_OEPCTYPE, $this->oepctype);
        $criteria->add(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, $this->oepctbltype);
        $criteria->add(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, $this->oepcstrtdate);
        $criteria->add(ItemPricingDiscountTableMap::COL_OEPCCUSTID, $this->oepccustid);
        $criteria->add(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE, $this->oepccustcode);
        $criteria->add(ItemPricingDiscountTableMap::COL_OEPCITEMNBR, $this->oepcitemnbr);
        $criteria->add(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP, $this->oepcitemgrup);
        $criteria->add(ItemPricingDiscountTableMap::COL_OEPCSP, $this->oepcsp);

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
        $validPk = null !== $this->getOepctype() &&
            null !== $this->getOepctbltype() &&
            null !== $this->getOepcstrtdate() &&
            null !== $this->getOepccustid() &&
            null !== $this->getOepccustcode() &&
            null !== $this->getOepcitemnbr() &&
            null !== $this->getOepcitemgrup() &&
            null !== $this->getOepcsp();

        $validPrimaryKeyFKs = 2;
        $primaryKeyFKs = [];

        //relation item to table inv_item_mast
        if ($this->aItemMasterItem && $hash = spl_object_hash($this->aItemMasterItem)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

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
        $pks = [];
        $pks[0] = $this->getOepctype();
        $pks[1] = $this->getOepctbltype();
        $pks[2] = $this->getOepcstrtdate();
        $pks[3] = $this->getOepccustid();
        $pks[4] = $this->getOepccustcode();
        $pks[5] = $this->getOepcitemnbr();
        $pks[6] = $this->getOepcitemgrup();
        $pks[7] = $this->getOepcsp();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey(array $keys): void
    {
        $this->setOepctype($keys[0]);
        $this->setOepctbltype($keys[1]);
        $this->setOepcstrtdate($keys[2]);
        $this->setOepccustid($keys[3]);
        $this->setOepccustcode($keys[4]);
        $this->setOepcitemnbr($keys[5]);
        $this->setOepcitemgrup($keys[6]);
        $this->setOepcsp($keys[7]);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return (null === $this->getOepctype()) && (null === $this->getOepctbltype()) && (null === $this->getOepcstrtdate()) && (null === $this->getOepccustid()) && (null === $this->getOepccustcode()) && (null === $this->getOepcitemnbr()) && (null === $this->getOepcitemgrup()) && (null === $this->getOepcsp());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \ItemPricingDiscount (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setOepctype($this->getOepctype());
        $copyObj->setOepctbltype($this->getOepctbltype());
        $copyObj->setOepcstrtdate($this->getOepcstrtdate());
        $copyObj->setOepccustid($this->getOepccustid());
        $copyObj->setOepccustcode($this->getOepccustcode());
        $copyObj->setOepcitemnbr($this->getOepcitemnbr());
        $copyObj->setOepcitemgrup($this->getOepcitemgrup());
        $copyObj->setOepcsp($this->getOepcsp());
        $copyObj->setOepcmeth($this->getOepcmeth());
        $copyObj->setOepccode($this->getOepccode());
        $copyObj->setOepcpcnt($this->getOepcpcnt());
        $copyObj->setOepcpricbase($this->getOepcpricbase());
        $copyObj->setOepcpricunit1($this->getOepcpricunit1());
        $copyObj->setOepcpricpric1($this->getOepcpricpric1());
        $copyObj->setOepcpricuom1($this->getOepcpricuom1());
        $copyObj->setOepcpricunit2($this->getOepcpricunit2());
        $copyObj->setOepcpricpric2($this->getOepcpricpric2());
        $copyObj->setOepcpricuom2($this->getOepcpricuom2());
        $copyObj->setOepcpricunit3($this->getOepcpricunit3());
        $copyObj->setOepcpricpric3($this->getOepcpricpric3());
        $copyObj->setOepcpricuom3($this->getOepcpricuom3());
        $copyObj->setOepcpricunit4($this->getOepcpricunit4());
        $copyObj->setOepcpricpric4($this->getOepcpricpric4());
        $copyObj->setOepcpricuom4($this->getOepcpricuom4());
        $copyObj->setOepcpricunit5($this->getOepcpricunit5());
        $copyObj->setOepcpricpric5($this->getOepcpricpric5());
        $copyObj->setOepcpricuom5($this->getOepcpricuom5());
        $copyObj->setOepcstancost($this->getOepcstancost());
        $copyObj->setOepcenddate($this->getOepcenddate());
        $copyObj->setOepcqtybrk($this->getOepcqtybrk());
        $copyObj->setOepccontcost($this->getOepccontcost());
        $copyObj->setOepclastchgdate($this->getOepclastchgdate());
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
     * @return \ItemPricingDiscount Clone of current object.
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
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param ChildItemMasterItem $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if ($v === null) {
            $this->setOepcitemnbr('');
        } else {
            $this->setOepcitemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v !== null) {
            $v->addItemPricingDiscount($this);
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
        if ($this->aItemMasterItem === null && (($this->oepcitemnbr !== "" && $this->oepcitemnbr !== null))) {
            $this->aItemMasterItem = ChildItemMasterItemQuery::create()->findPk($this->oepcitemnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aItemMasterItem->addItemPricingDiscounts($this);
             */
        }

        return $this->aItemMasterItem;
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
            $this->setOepccustid('');
        } else {
            $this->setOepccustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addItemPricingDiscount($this);
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
        if ($this->aCustomer === null && (($this->oepccustid !== "" && $this->oepccustid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->oepccustid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addItemPricingDiscounts($this);
             */
        }

        return $this->aCustomer;
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
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeItemPricingDiscount($this);
        }
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeItemPricingDiscount($this);
        }
        $this->oepctype = null;
        $this->oepctbltype = null;
        $this->oepcstrtdate = null;
        $this->oepccustid = null;
        $this->oepccustcode = null;
        $this->oepcitemnbr = null;
        $this->oepcitemgrup = null;
        $this->oepcsp = null;
        $this->oepcmeth = null;
        $this->oepccode = null;
        $this->oepcpcnt = null;
        $this->oepcpricbase = null;
        $this->oepcpricunit1 = null;
        $this->oepcpricpric1 = null;
        $this->oepcpricuom1 = null;
        $this->oepcpricunit2 = null;
        $this->oepcpricpric2 = null;
        $this->oepcpricuom2 = null;
        $this->oepcpricunit3 = null;
        $this->oepcpricpric3 = null;
        $this->oepcpricuom3 = null;
        $this->oepcpricunit4 = null;
        $this->oepcpricpric4 = null;
        $this->oepcpricuom4 = null;
        $this->oepcpricunit5 = null;
        $this->oepcpricpric5 = null;
        $this->oepcpricuom5 = null;
        $this->oepcstancost = null;
        $this->oepcenddate = null;
        $this->oepcqtybrk = null;
        $this->oepccontcost = null;
        $this->oepclastchgdate = null;
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
        } // if ($deep)

        $this->aItemMasterItem = null;
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
        return (string) $this->exportTo(ItemPricingDiscountTableMap::DEFAULT_STRING_FORMAT);
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
