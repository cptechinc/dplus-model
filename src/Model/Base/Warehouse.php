<?php

namespace Base;

use \InvLotTag as ChildInvLotTag;
use \InvLotTagQuery as ChildInvLotTagQuery;
use \InvTransferOrder as ChildInvTransferOrder;
use \InvTransferOrderQuery as ChildInvTransferOrderQuery;
use \InvWhseItemBin as ChildInvWhseItemBin;
use \InvWhseItemBinQuery as ChildInvWhseItemBinQuery;
use \InvWhseLot as ChildInvWhseLot;
use \InvWhseLotQuery as ChildInvWhseLotQuery;
use \PoReceivingHead as ChildPoReceivingHead;
use \PoReceivingHeadQuery as ChildPoReceivingHeadQuery;
use \Warehouse as ChildWarehouse;
use \WarehouseBin as ChildWarehouseBin;
use \WarehouseBinQuery as ChildWarehouseBinQuery;
use \WarehouseInventory as ChildWarehouseInventory;
use \WarehouseInventoryQuery as ChildWarehouseInventoryQuery;
use \WarehouseNote as ChildWarehouseNote;
use \WarehouseNoteQuery as ChildWarehouseNoteQuery;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\InvLotTagTableMap;
use Map\InvTransferOrderTableMap;
use Map\InvWhseItemBinTableMap;
use Map\InvWhseLotTableMap;
use Map\PoReceivingHeadTableMap;
use Map\WarehouseBinTableMap;
use Map\WarehouseInventoryTableMap;
use Map\WarehouseNoteTableMap;
use Map\WarehouseTableMap;
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
 * Base class that represents a row from the 'inv_whse_code' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Warehouse implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\WarehouseTableMap';


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
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the intbwhsename field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsename;

    /**
     * The value for the intbwhseadr1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseadr1;

    /**
     * The value for the intbwhseadr2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseadr2;

    /**
     * The value for the intbwhsecity field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsecity;

    /**
     * The value for the intbwhsestat field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsestat;

    /**
     * The value for the intbwhsezipcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsezipcode;

    /**
     * The value for the intbwhsectry field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsectry;

    /**
     * The value for the intbwhseusehandheld field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $intbwhseusehandheld;

    /**
     * The value for the intbwhsecashcust field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsecashcust;

    /**
     * The value for the intbwhsepickdtl field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $intbwhsepickdtl;

    /**
     * The value for the intbwhseprodbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseprodbin;

    /**
     * The value for the intbwhsepharea field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsepharea;

    /**
     * The value for the intbwhsephfrst3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsephfrst3;

    /**
     * The value for the intbwhsephlast4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsephlast4;

    /**
     * The value for the intbwhsephext field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsephext;

    /**
     * The value for the intbwhsefaxarea field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsefaxarea;

    /**
     * The value for the intbwhsefaxfrst3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsefaxfrst3;

    /**
     * The value for the intbwhsefaxlast4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsefaxlast4;

    /**
     * The value for the intbwhseemailadr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseemailadr;

    /**
     * The value for the intbwhseqcrgabin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseqcrgabin;

    /**
     * The value for the intbwhserfprinter1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhserfprinter1;

    /**
     * The value for the intbwhserfprinter2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhserfprinter2;

    /**
     * The value for the intbwhserfprinter3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhserfprinter3;

    /**
     * The value for the intbwhserfprinter4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhserfprinter4;

    /**
     * The value for the intbwhserfprinter5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhserfprinter5;

    /**
     * The value for the intbwhseprofwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseprofwhse;

    /**
     * The value for the intbwhseasetwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseasetwhse;

    /**
     * The value for the intbwhseconsignwhse field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $intbwhseconsignwhse;

    /**
     * The value for the intbwhsebinrangelist field.
     *
     * Note: this column has a database default value of: 'R'
     * @var        string
     */
    protected $intbwhsebinrangelist;

    /**
     * The value for the intbwhsesupplywhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsesupplywhse;

    /**
     * The value for the intbwhseareasplit field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $intbwhseareasplit;

    /**
     * The value for the intbwhsercvbincode field.
     *
     * Note: this column has a database default value of: 'S'
     * @var        string
     */
    protected $intbwhsercvbincode;

    /**
     * The value for the intbwhsercvbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhsercvbin;

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
     * @var        ObjectCollection|ChildInvWhseItemBin[] Collection to store aggregation of ChildInvWhseItemBin objects.
     */
    protected $collInvWhseItemBins;
    protected $collInvWhseItemBinsPartial;

    /**
     * @var        ObjectCollection|ChildWarehouseBin[] Collection to store aggregation of ChildWarehouseBin objects.
     */
    protected $collWarehouseBins;
    protected $collWarehouseBinsPartial;

    /**
     * @var        ObjectCollection|ChildInvWhseLot[] Collection to store aggregation of ChildInvWhseLot objects.
     */
    protected $collInvWhseLots;
    protected $collInvWhseLotsPartial;

    /**
     * @var        ObjectCollection|ChildInvLotTag[] Collection to store aggregation of ChildInvLotTag objects.
     */
    protected $collInvLotTags;
    protected $collInvLotTagsPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferOrder[] Collection to store aggregation of ChildInvTransferOrder objects.
     */
    protected $collInvTransferOrdersRelatedByIntbwhsefrom;
    protected $collInvTransferOrdersRelatedByIntbwhsefromPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferOrder[] Collection to store aggregation of ChildInvTransferOrder objects.
     */
    protected $collInvTransferOrdersRelatedByIntbwhseto;
    protected $collInvTransferOrdersRelatedByIntbwhsetoPartial;

    /**
     * @var        ObjectCollection|ChildWarehouseInventory[] Collection to store aggregation of ChildWarehouseInventory objects.
     */
    protected $collWarehouseInventories;
    protected $collWarehouseInventoriesPartial;

    /**
     * @var        ObjectCollection|ChildWarehouseNote[] Collection to store aggregation of ChildWarehouseNote objects.
     */
    protected $collWarehouseNotes;
    protected $collWarehouseNotesPartial;

    /**
     * @var        ObjectCollection|ChildPoReceivingHead[] Collection to store aggregation of ChildPoReceivingHead objects.
     */
    protected $collPoReceivingHeads;
    protected $collPoReceivingHeadsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvWhseItemBin[]
     */
    protected $invWhseItemBinsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildWarehouseBin[]
     */
    protected $warehouseBinsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvWhseLot[]
     */
    protected $invWhseLotsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvLotTag[]
     */
    protected $invLotTagsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferOrder[]
     */
    protected $invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferOrder[]
     */
    protected $invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildWarehouseInventory[]
     */
    protected $warehouseInventoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildWarehouseNote[]
     */
    protected $warehouseNotesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPoReceivingHead[]
     */
    protected $poReceivingHeadsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->intbwhse = '';
        $this->intbwhsename = '';
        $this->intbwhseadr1 = '';
        $this->intbwhseadr2 = '';
        $this->intbwhsecity = '';
        $this->intbwhsestat = '';
        $this->intbwhsezipcode = '';
        $this->intbwhsectry = '';
        $this->intbwhseusehandheld = 'N';
        $this->intbwhsecashcust = '';
        $this->intbwhsepickdtl = 'N';
        $this->intbwhseprodbin = '';
        $this->intbwhsepharea = '';
        $this->intbwhsephfrst3 = '';
        $this->intbwhsephlast4 = '';
        $this->intbwhsephext = '';
        $this->intbwhsefaxarea = '';
        $this->intbwhsefaxfrst3 = '';
        $this->intbwhsefaxlast4 = '';
        $this->intbwhseemailadr = '';
        $this->intbwhseqcrgabin = '';
        $this->intbwhserfprinter1 = '';
        $this->intbwhserfprinter2 = '';
        $this->intbwhserfprinter3 = '';
        $this->intbwhserfprinter4 = '';
        $this->intbwhserfprinter5 = '';
        $this->intbwhseprofwhse = '';
        $this->intbwhseasetwhse = '';
        $this->intbwhseconsignwhse = 'N';
        $this->intbwhsebinrangelist = 'R';
        $this->intbwhsesupplywhse = '';
        $this->intbwhseareasplit = 'N';
        $this->intbwhsercvbincode = 'S';
        $this->intbwhsercvbin = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\Warehouse object.
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
     * Compares this with another <code>Warehouse</code> instance.  If
     * <code>obj</code> is an instance of <code>Warehouse</code>, delegates to
     * <code>equals(Warehouse)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Warehouse The current object, for fluid interface
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
     * Get the [intbwhse] column value.
     *
     * @return string
     */
    public function getIntbwhse()
    {
        return $this->intbwhse;
    }

    /**
     * Get the [intbwhsename] column value.
     *
     * @return string
     */
    public function getIntbwhsename()
    {
        return $this->intbwhsename;
    }

    /**
     * Get the [intbwhseadr1] column value.
     *
     * @return string
     */
    public function getIntbwhseadr1()
    {
        return $this->intbwhseadr1;
    }

    /**
     * Get the [intbwhseadr2] column value.
     *
     * @return string
     */
    public function getIntbwhseadr2()
    {
        return $this->intbwhseadr2;
    }

    /**
     * Get the [intbwhsecity] column value.
     *
     * @return string
     */
    public function getIntbwhsecity()
    {
        return $this->intbwhsecity;
    }

    /**
     * Get the [intbwhsestat] column value.
     *
     * @return string
     */
    public function getIntbwhsestat()
    {
        return $this->intbwhsestat;
    }

    /**
     * Get the [intbwhsezipcode] column value.
     *
     * @return string
     */
    public function getIntbwhsezipcode()
    {
        return $this->intbwhsezipcode;
    }

    /**
     * Get the [intbwhsectry] column value.
     *
     * @return string
     */
    public function getIntbwhsectry()
    {
        return $this->intbwhsectry;
    }

    /**
     * Get the [intbwhseusehandheld] column value.
     *
     * @return string
     */
    public function getIntbwhseusehandheld()
    {
        return $this->intbwhseusehandheld;
    }

    /**
     * Get the [intbwhsecashcust] column value.
     *
     * @return string
     */
    public function getIntbwhsecashcust()
    {
        return $this->intbwhsecashcust;
    }

    /**
     * Get the [intbwhsepickdtl] column value.
     *
     * @return string
     */
    public function getIntbwhsepickdtl()
    {
        return $this->intbwhsepickdtl;
    }

    /**
     * Get the [intbwhseprodbin] column value.
     *
     * @return string
     */
    public function getIntbwhseprodbin()
    {
        return $this->intbwhseprodbin;
    }

    /**
     * Get the [intbwhsepharea] column value.
     *
     * @return string
     */
    public function getIntbwhsepharea()
    {
        return $this->intbwhsepharea;
    }

    /**
     * Get the [intbwhsephfrst3] column value.
     *
     * @return string
     */
    public function getIntbwhsephfrst3()
    {
        return $this->intbwhsephfrst3;
    }

    /**
     * Get the [intbwhsephlast4] column value.
     *
     * @return string
     */
    public function getIntbwhsephlast4()
    {
        return $this->intbwhsephlast4;
    }

    /**
     * Get the [intbwhsephext] column value.
     *
     * @return string
     */
    public function getIntbwhsephext()
    {
        return $this->intbwhsephext;
    }

    /**
     * Get the [intbwhsefaxarea] column value.
     *
     * @return string
     */
    public function getIntbwhsefaxarea()
    {
        return $this->intbwhsefaxarea;
    }

    /**
     * Get the [intbwhsefaxfrst3] column value.
     *
     * @return string
     */
    public function getIntbwhsefaxfrst3()
    {
        return $this->intbwhsefaxfrst3;
    }

    /**
     * Get the [intbwhsefaxlast4] column value.
     *
     * @return string
     */
    public function getIntbwhsefaxlast4()
    {
        return $this->intbwhsefaxlast4;
    }

    /**
     * Get the [intbwhseemailadr] column value.
     *
     * @return string
     */
    public function getIntbwhseemailadr()
    {
        return $this->intbwhseemailadr;
    }

    /**
     * Get the [intbwhseqcrgabin] column value.
     *
     * @return string
     */
    public function getIntbwhseqcrgabin()
    {
        return $this->intbwhseqcrgabin;
    }

    /**
     * Get the [intbwhserfprinter1] column value.
     *
     * @return string
     */
    public function getIntbwhserfprinter1()
    {
        return $this->intbwhserfprinter1;
    }

    /**
     * Get the [intbwhserfprinter2] column value.
     *
     * @return string
     */
    public function getIntbwhserfprinter2()
    {
        return $this->intbwhserfprinter2;
    }

    /**
     * Get the [intbwhserfprinter3] column value.
     *
     * @return string
     */
    public function getIntbwhserfprinter3()
    {
        return $this->intbwhserfprinter3;
    }

    /**
     * Get the [intbwhserfprinter4] column value.
     *
     * @return string
     */
    public function getIntbwhserfprinter4()
    {
        return $this->intbwhserfprinter4;
    }

    /**
     * Get the [intbwhserfprinter5] column value.
     *
     * @return string
     */
    public function getIntbwhserfprinter5()
    {
        return $this->intbwhserfprinter5;
    }

    /**
     * Get the [intbwhseprofwhse] column value.
     *
     * @return string
     */
    public function getIntbwhseprofwhse()
    {
        return $this->intbwhseprofwhse;
    }

    /**
     * Get the [intbwhseasetwhse] column value.
     *
     * @return string
     */
    public function getIntbwhseasetwhse()
    {
        return $this->intbwhseasetwhse;
    }

    /**
     * Get the [intbwhseconsignwhse] column value.
     *
     * @return string
     */
    public function getIntbwhseconsignwhse()
    {
        return $this->intbwhseconsignwhse;
    }

    /**
     * Get the [intbwhsebinrangelist] column value.
     *
     * @return string
     */
    public function getIntbwhsebinrangelist()
    {
        return $this->intbwhsebinrangelist;
    }

    /**
     * Get the [intbwhsesupplywhse] column value.
     *
     * @return string
     */
    public function getIntbwhsesupplywhse()
    {
        return $this->intbwhsesupplywhse;
    }

    /**
     * Get the [intbwhseareasplit] column value.
     *
     * @return string
     */
    public function getIntbwhseareasplit()
    {
        return $this->intbwhseareasplit;
    }

    /**
     * Get the [intbwhsercvbincode] column value.
     *
     * @return string
     */
    public function getIntbwhsercvbincode()
    {
        return $this->intbwhsercvbincode;
    }

    /**
     * Get the [intbwhsercvbin] column value.
     *
     * @return string
     */
    public function getIntbwhsercvbin()
    {
        return $this->intbwhsercvbin;
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
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [intbwhsename] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsename !== $v) {
            $this->intbwhsename = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSENAME] = true;
        }

        return $this;
    } // setIntbwhsename()

    /**
     * Set the value of [intbwhseadr1] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseadr1 !== $v) {
            $this->intbwhseadr1 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEADR1] = true;
        }

        return $this;
    } // setIntbwhseadr1()

    /**
     * Set the value of [intbwhseadr2] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseadr2 !== $v) {
            $this->intbwhseadr2 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEADR2] = true;
        }

        return $this;
    } // setIntbwhseadr2()

    /**
     * Set the value of [intbwhsecity] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsecity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsecity !== $v) {
            $this->intbwhsecity = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSECITY] = true;
        }

        return $this;
    } // setIntbwhsecity()

    /**
     * Set the value of [intbwhsestat] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsestat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsestat !== $v) {
            $this->intbwhsestat = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSESTAT] = true;
        }

        return $this;
    } // setIntbwhsestat()

    /**
     * Set the value of [intbwhsezipcode] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsezipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsezipcode !== $v) {
            $this->intbwhsezipcode = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEZIPCODE] = true;
        }

        return $this;
    } // setIntbwhsezipcode()

    /**
     * Set the value of [intbwhsectry] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsectry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsectry !== $v) {
            $this->intbwhsectry = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSECTRY] = true;
        }

        return $this;
    } // setIntbwhsectry()

    /**
     * Set the value of [intbwhseusehandheld] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseusehandheld($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseusehandheld !== $v) {
            $this->intbwhseusehandheld = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEUSEHANDHELD] = true;
        }

        return $this;
    } // setIntbwhseusehandheld()

    /**
     * Set the value of [intbwhsecashcust] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsecashcust($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsecashcust !== $v) {
            $this->intbwhsecashcust = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSECASHCUST] = true;
        }

        return $this;
    } // setIntbwhsecashcust()

    /**
     * Set the value of [intbwhsepickdtl] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsepickdtl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsepickdtl !== $v) {
            $this->intbwhsepickdtl = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEPICKDTL] = true;
        }

        return $this;
    } // setIntbwhsepickdtl()

    /**
     * Set the value of [intbwhseprodbin] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseprodbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseprodbin !== $v) {
            $this->intbwhseprodbin = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEPRODBIN] = true;
        }

        return $this;
    } // setIntbwhseprodbin()

    /**
     * Set the value of [intbwhsepharea] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsepharea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsepharea !== $v) {
            $this->intbwhsepharea = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEPHAREA] = true;
        }

        return $this;
    } // setIntbwhsepharea()

    /**
     * Set the value of [intbwhsephfrst3] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsephfrst3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsephfrst3 !== $v) {
            $this->intbwhsephfrst3 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEPHFRST3] = true;
        }

        return $this;
    } // setIntbwhsephfrst3()

    /**
     * Set the value of [intbwhsephlast4] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsephlast4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsephlast4 !== $v) {
            $this->intbwhsephlast4 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEPHLAST4] = true;
        }

        return $this;
    } // setIntbwhsephlast4()

    /**
     * Set the value of [intbwhsephext] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsephext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsephext !== $v) {
            $this->intbwhsephext = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEPHEXT] = true;
        }

        return $this;
    } // setIntbwhsephext()

    /**
     * Set the value of [intbwhsefaxarea] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsefaxarea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsefaxarea !== $v) {
            $this->intbwhsefaxarea = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEFAXAREA] = true;
        }

        return $this;
    } // setIntbwhsefaxarea()

    /**
     * Set the value of [intbwhsefaxfrst3] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsefaxfrst3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsefaxfrst3 !== $v) {
            $this->intbwhsefaxfrst3 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEFAXFRST3] = true;
        }

        return $this;
    } // setIntbwhsefaxfrst3()

    /**
     * Set the value of [intbwhsefaxlast4] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsefaxlast4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsefaxlast4 !== $v) {
            $this->intbwhsefaxlast4 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEFAXLAST4] = true;
        }

        return $this;
    } // setIntbwhsefaxlast4()

    /**
     * Set the value of [intbwhseemailadr] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseemailadr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseemailadr !== $v) {
            $this->intbwhseemailadr = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEEMAILADR] = true;
        }

        return $this;
    } // setIntbwhseemailadr()

    /**
     * Set the value of [intbwhseqcrgabin] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseqcrgabin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseqcrgabin !== $v) {
            $this->intbwhseqcrgabin = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEQCRGABIN] = true;
        }

        return $this;
    } // setIntbwhseqcrgabin()

    /**
     * Set the value of [intbwhserfprinter1] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhserfprinter1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhserfprinter1 !== $v) {
            $this->intbwhserfprinter1 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSERFPRINTER1] = true;
        }

        return $this;
    } // setIntbwhserfprinter1()

    /**
     * Set the value of [intbwhserfprinter2] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhserfprinter2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhserfprinter2 !== $v) {
            $this->intbwhserfprinter2 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSERFPRINTER2] = true;
        }

        return $this;
    } // setIntbwhserfprinter2()

    /**
     * Set the value of [intbwhserfprinter3] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhserfprinter3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhserfprinter3 !== $v) {
            $this->intbwhserfprinter3 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSERFPRINTER3] = true;
        }

        return $this;
    } // setIntbwhserfprinter3()

    /**
     * Set the value of [intbwhserfprinter4] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhserfprinter4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhserfprinter4 !== $v) {
            $this->intbwhserfprinter4 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSERFPRINTER4] = true;
        }

        return $this;
    } // setIntbwhserfprinter4()

    /**
     * Set the value of [intbwhserfprinter5] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhserfprinter5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhserfprinter5 !== $v) {
            $this->intbwhserfprinter5 = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSERFPRINTER5] = true;
        }

        return $this;
    } // setIntbwhserfprinter5()

    /**
     * Set the value of [intbwhseprofwhse] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseprofwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseprofwhse !== $v) {
            $this->intbwhseprofwhse = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEPROFWHSE] = true;
        }

        return $this;
    } // setIntbwhseprofwhse()

    /**
     * Set the value of [intbwhseasetwhse] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseasetwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseasetwhse !== $v) {
            $this->intbwhseasetwhse = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEASETWHSE] = true;
        }

        return $this;
    } // setIntbwhseasetwhse()

    /**
     * Set the value of [intbwhseconsignwhse] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseconsignwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseconsignwhse !== $v) {
            $this->intbwhseconsignwhse = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSECONSIGNWHSE] = true;
        }

        return $this;
    } // setIntbwhseconsignwhse()

    /**
     * Set the value of [intbwhsebinrangelist] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsebinrangelist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsebinrangelist !== $v) {
            $this->intbwhsebinrangelist = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEBINRANGELIST] = true;
        }

        return $this;
    } // setIntbwhsebinrangelist()

    /**
     * Set the value of [intbwhsesupplywhse] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsesupplywhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsesupplywhse !== $v) {
            $this->intbwhsesupplywhse = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSESUPPLYWHSE] = true;
        }

        return $this;
    } // setIntbwhsesupplywhse()

    /**
     * Set the value of [intbwhseareasplit] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhseareasplit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseareasplit !== $v) {
            $this->intbwhseareasplit = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSEAREASPLIT] = true;
        }

        return $this;
    } // setIntbwhseareasplit()

    /**
     * Set the value of [intbwhsercvbincode] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsercvbincode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsercvbincode !== $v) {
            $this->intbwhsercvbincode = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSERCVBINCODE] = true;
        }

        return $this;
    } // setIntbwhsercvbincode()

    /**
     * Set the value of [intbwhsercvbin] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setIntbwhsercvbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhsercvbin !== $v) {
            $this->intbwhsercvbin = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_INTBWHSERCVBIN] = true;
        }

        return $this;
    } // setIntbwhsercvbin()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[WarehouseTableMap::COL_DUMMY] = true;
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
            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->intbwhsename !== '') {
                return false;
            }

            if ($this->intbwhseadr1 !== '') {
                return false;
            }

            if ($this->intbwhseadr2 !== '') {
                return false;
            }

            if ($this->intbwhsecity !== '') {
                return false;
            }

            if ($this->intbwhsestat !== '') {
                return false;
            }

            if ($this->intbwhsezipcode !== '') {
                return false;
            }

            if ($this->intbwhsectry !== '') {
                return false;
            }

            if ($this->intbwhseusehandheld !== 'N') {
                return false;
            }

            if ($this->intbwhsecashcust !== '') {
                return false;
            }

            if ($this->intbwhsepickdtl !== 'N') {
                return false;
            }

            if ($this->intbwhseprodbin !== '') {
                return false;
            }

            if ($this->intbwhsepharea !== '') {
                return false;
            }

            if ($this->intbwhsephfrst3 !== '') {
                return false;
            }

            if ($this->intbwhsephlast4 !== '') {
                return false;
            }

            if ($this->intbwhsephext !== '') {
                return false;
            }

            if ($this->intbwhsefaxarea !== '') {
                return false;
            }

            if ($this->intbwhsefaxfrst3 !== '') {
                return false;
            }

            if ($this->intbwhsefaxlast4 !== '') {
                return false;
            }

            if ($this->intbwhseemailadr !== '') {
                return false;
            }

            if ($this->intbwhseqcrgabin !== '') {
                return false;
            }

            if ($this->intbwhserfprinter1 !== '') {
                return false;
            }

            if ($this->intbwhserfprinter2 !== '') {
                return false;
            }

            if ($this->intbwhserfprinter3 !== '') {
                return false;
            }

            if ($this->intbwhserfprinter4 !== '') {
                return false;
            }

            if ($this->intbwhserfprinter5 !== '') {
                return false;
            }

            if ($this->intbwhseprofwhse !== '') {
                return false;
            }

            if ($this->intbwhseasetwhse !== '') {
                return false;
            }

            if ($this->intbwhseconsignwhse !== 'N') {
                return false;
            }

            if ($this->intbwhsebinrangelist !== 'R') {
                return false;
            }

            if ($this->intbwhsesupplywhse !== '') {
                return false;
            }

            if ($this->intbwhseareasplit !== 'N') {
                return false;
            }

            if ($this->intbwhsercvbincode !== 'S') {
                return false;
            }

            if ($this->intbwhsercvbin !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : WarehouseTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsename', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsename = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsecity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsecity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsestat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsestat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsezipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsezipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsectry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsectry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseusehandheld', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseusehandheld = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsecashcust', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsecashcust = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsepickdtl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsepickdtl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseprodbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseprodbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsepharea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsepharea = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsephfrst3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsephfrst3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsephlast4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsephlast4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsephext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsephext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsefaxarea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsefaxarea = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsefaxfrst3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsefaxfrst3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsefaxlast4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsefaxlast4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseemailadr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseemailadr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseqcrgabin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseqcrgabin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : WarehouseTableMap::translateFieldName('Intbwhserfprinter1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhserfprinter1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : WarehouseTableMap::translateFieldName('Intbwhserfprinter2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhserfprinter2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : WarehouseTableMap::translateFieldName('Intbwhserfprinter3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhserfprinter3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : WarehouseTableMap::translateFieldName('Intbwhserfprinter4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhserfprinter4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : WarehouseTableMap::translateFieldName('Intbwhserfprinter5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhserfprinter5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseprofwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseprofwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseasetwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseasetwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseconsignwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseconsignwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsebinrangelist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsebinrangelist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsesupplywhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsesupplywhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : WarehouseTableMap::translateFieldName('Intbwhseareasplit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseareasplit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsercvbincode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsercvbincode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : WarehouseTableMap::translateFieldName('Intbwhsercvbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhsercvbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : WarehouseTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : WarehouseTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : WarehouseTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 37; // 37 = WarehouseTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Warehouse'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(WarehouseTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildWarehouseQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collInvWhseItemBins = null;

            $this->collWarehouseBins = null;

            $this->collInvWhseLots = null;

            $this->collInvLotTags = null;

            $this->collInvTransferOrdersRelatedByIntbwhsefrom = null;

            $this->collInvTransferOrdersRelatedByIntbwhseto = null;

            $this->collWarehouseInventories = null;

            $this->collWarehouseNotes = null;

            $this->collPoReceivingHeads = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Warehouse::setDeleted()
     * @see Warehouse::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildWarehouseQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseTableMap::DATABASE_NAME);
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
                WarehouseTableMap::addInstanceToPool($this);
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

            if ($this->invWhseItemBinsScheduledForDeletion !== null) {
                if (!$this->invWhseItemBinsScheduledForDeletion->isEmpty()) {
                    \InvWhseItemBinQuery::create()
                        ->filterByPrimaryKeys($this->invWhseItemBinsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invWhseItemBinsScheduledForDeletion = null;
                }
            }

            if ($this->collInvWhseItemBins !== null) {
                foreach ($this->collInvWhseItemBins as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->warehouseBinsScheduledForDeletion !== null) {
                if (!$this->warehouseBinsScheduledForDeletion->isEmpty()) {
                    \WarehouseBinQuery::create()
                        ->filterByPrimaryKeys($this->warehouseBinsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->warehouseBinsScheduledForDeletion = null;
                }
            }

            if ($this->collWarehouseBins !== null) {
                foreach ($this->collWarehouseBins as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invWhseLotsScheduledForDeletion !== null) {
                if (!$this->invWhseLotsScheduledForDeletion->isEmpty()) {
                    \InvWhseLotQuery::create()
                        ->filterByPrimaryKeys($this->invWhseLotsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invWhseLotsScheduledForDeletion = null;
                }
            }

            if ($this->collInvWhseLots !== null) {
                foreach ($this->collInvWhseLots as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invLotTagsScheduledForDeletion !== null) {
                if (!$this->invLotTagsScheduledForDeletion->isEmpty()) {
                    \InvLotTagQuery::create()
                        ->filterByPrimaryKeys($this->invLotTagsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invLotTagsScheduledForDeletion = null;
                }
            }

            if ($this->collInvLotTags !== null) {
                foreach ($this->collInvLotTags as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion !== null) {
                if (!$this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion->isEmpty()) {
                    \InvTransferOrderQuery::create()
                        ->filterByPrimaryKeys($this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferOrdersRelatedByIntbwhsefrom !== null) {
                foreach ($this->collInvTransferOrdersRelatedByIntbwhsefrom as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion !== null) {
                if (!$this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion->isEmpty()) {
                    \InvTransferOrderQuery::create()
                        ->filterByPrimaryKeys($this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferOrdersRelatedByIntbwhseto !== null) {
                foreach ($this->collInvTransferOrdersRelatedByIntbwhseto as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->warehouseInventoriesScheduledForDeletion !== null) {
                if (!$this->warehouseInventoriesScheduledForDeletion->isEmpty()) {
                    \WarehouseInventoryQuery::create()
                        ->filterByPrimaryKeys($this->warehouseInventoriesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->warehouseInventoriesScheduledForDeletion = null;
                }
            }

            if ($this->collWarehouseInventories !== null) {
                foreach ($this->collWarehouseInventories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->warehouseNotesScheduledForDeletion !== null) {
                if (!$this->warehouseNotesScheduledForDeletion->isEmpty()) {
                    foreach ($this->warehouseNotesScheduledForDeletion as $warehouseNote) {
                        // need to save related object because we set the relation to null
                        $warehouseNote->save($con);
                    }
                    $this->warehouseNotesScheduledForDeletion = null;
                }
            }

            if ($this->collWarehouseNotes !== null) {
                foreach ($this->collWarehouseNotes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->poReceivingHeadsScheduledForDeletion !== null) {
                if (!$this->poReceivingHeadsScheduledForDeletion->isEmpty()) {
                    \PoReceivingHeadQuery::create()
                        ->filterByPrimaryKeys($this->poReceivingHeadsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->poReceivingHeadsScheduledForDeletion = null;
                }
            }

            if ($this->collPoReceivingHeads !== null) {
                foreach ($this->collPoReceivingHeads as $referrerFK) {
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
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSENAME)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseName';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEADR1)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseAdr1';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEADR2)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseAdr2';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSECITY)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseCity';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSESTAT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseStat';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseZipCode';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSECTRY)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseCtry';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEUSEHANDHELD)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseUseHandheld';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSECASHCUST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseCashCust';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPICKDTL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhsePickDtl';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPRODBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseProdBin';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPHAREA)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhsePhArea';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPHFRST3)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhsePhFrst3';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPHLAST4)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhsePhLast4';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPHEXT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhsePhExt';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEFAXAREA)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseFaxArea';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEFAXFRST3)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseFaxFrst3';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEFAXLAST4)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseFaxLast4';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEEMAILADR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseEmailAdr';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEQCRGABIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseQcRgaBin';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER1)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseRfPrinter1';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER2)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseRfPrinter2';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER3)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseRfPrinter3';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER4)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseRfPrinter4';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER5)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseRfPrinter5';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPROFWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseProfWhse';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEASETWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseAsetWhse';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSECONSIGNWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseConsignWhse';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEBINRANGELIST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseBinRangeList';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSESUPPLYWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseSupplyWhse';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEAREASPLIT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseAreaSplit';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERCVBINCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseRcvBinCode';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERCVBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseRcvBin';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_whse_code (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseName':
                        $stmt->bindValue($identifier, $this->intbwhsename, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseAdr1':
                        $stmt->bindValue($identifier, $this->intbwhseadr1, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseAdr2':
                        $stmt->bindValue($identifier, $this->intbwhseadr2, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseCity':
                        $stmt->bindValue($identifier, $this->intbwhsecity, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseStat':
                        $stmt->bindValue($identifier, $this->intbwhsestat, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseZipCode':
                        $stmt->bindValue($identifier, $this->intbwhsezipcode, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseCtry':
                        $stmt->bindValue($identifier, $this->intbwhsectry, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseUseHandheld':
                        $stmt->bindValue($identifier, $this->intbwhseusehandheld, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseCashCust':
                        $stmt->bindValue($identifier, $this->intbwhsecashcust, PDO::PARAM_STR);
                        break;
                    case 'IntbWhsePickDtl':
                        $stmt->bindValue($identifier, $this->intbwhsepickdtl, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseProdBin':
                        $stmt->bindValue($identifier, $this->intbwhseprodbin, PDO::PARAM_STR);
                        break;
                    case 'IntbWhsePhArea':
                        $stmt->bindValue($identifier, $this->intbwhsepharea, PDO::PARAM_STR);
                        break;
                    case 'IntbWhsePhFrst3':
                        $stmt->bindValue($identifier, $this->intbwhsephfrst3, PDO::PARAM_STR);
                        break;
                    case 'IntbWhsePhLast4':
                        $stmt->bindValue($identifier, $this->intbwhsephlast4, PDO::PARAM_STR);
                        break;
                    case 'IntbWhsePhExt':
                        $stmt->bindValue($identifier, $this->intbwhsephext, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseFaxArea':
                        $stmt->bindValue($identifier, $this->intbwhsefaxarea, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseFaxFrst3':
                        $stmt->bindValue($identifier, $this->intbwhsefaxfrst3, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseFaxLast4':
                        $stmt->bindValue($identifier, $this->intbwhsefaxlast4, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseEmailAdr':
                        $stmt->bindValue($identifier, $this->intbwhseemailadr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseQcRgaBin':
                        $stmt->bindValue($identifier, $this->intbwhseqcrgabin, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseRfPrinter1':
                        $stmt->bindValue($identifier, $this->intbwhserfprinter1, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseRfPrinter2':
                        $stmt->bindValue($identifier, $this->intbwhserfprinter2, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseRfPrinter3':
                        $stmt->bindValue($identifier, $this->intbwhserfprinter3, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseRfPrinter4':
                        $stmt->bindValue($identifier, $this->intbwhserfprinter4, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseRfPrinter5':
                        $stmt->bindValue($identifier, $this->intbwhserfprinter5, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseProfWhse':
                        $stmt->bindValue($identifier, $this->intbwhseprofwhse, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseAsetWhse':
                        $stmt->bindValue($identifier, $this->intbwhseasetwhse, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseConsignWhse':
                        $stmt->bindValue($identifier, $this->intbwhseconsignwhse, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseBinRangeList':
                        $stmt->bindValue($identifier, $this->intbwhsebinrangelist, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseSupplyWhse':
                        $stmt->bindValue($identifier, $this->intbwhsesupplywhse, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseAreaSplit':
                        $stmt->bindValue($identifier, $this->intbwhseareasplit, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseRcvBinCode':
                        $stmt->bindValue($identifier, $this->intbwhsercvbincode, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseRcvBin':
                        $stmt->bindValue($identifier, $this->intbwhsercvbin, PDO::PARAM_STR);
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
        $pos = WarehouseTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIntbwhse();
                break;
            case 1:
                return $this->getIntbwhsename();
                break;
            case 2:
                return $this->getIntbwhseadr1();
                break;
            case 3:
                return $this->getIntbwhseadr2();
                break;
            case 4:
                return $this->getIntbwhsecity();
                break;
            case 5:
                return $this->getIntbwhsestat();
                break;
            case 6:
                return $this->getIntbwhsezipcode();
                break;
            case 7:
                return $this->getIntbwhsectry();
                break;
            case 8:
                return $this->getIntbwhseusehandheld();
                break;
            case 9:
                return $this->getIntbwhsecashcust();
                break;
            case 10:
                return $this->getIntbwhsepickdtl();
                break;
            case 11:
                return $this->getIntbwhseprodbin();
                break;
            case 12:
                return $this->getIntbwhsepharea();
                break;
            case 13:
                return $this->getIntbwhsephfrst3();
                break;
            case 14:
                return $this->getIntbwhsephlast4();
                break;
            case 15:
                return $this->getIntbwhsephext();
                break;
            case 16:
                return $this->getIntbwhsefaxarea();
                break;
            case 17:
                return $this->getIntbwhsefaxfrst3();
                break;
            case 18:
                return $this->getIntbwhsefaxlast4();
                break;
            case 19:
                return $this->getIntbwhseemailadr();
                break;
            case 20:
                return $this->getIntbwhseqcrgabin();
                break;
            case 21:
                return $this->getIntbwhserfprinter1();
                break;
            case 22:
                return $this->getIntbwhserfprinter2();
                break;
            case 23:
                return $this->getIntbwhserfprinter3();
                break;
            case 24:
                return $this->getIntbwhserfprinter4();
                break;
            case 25:
                return $this->getIntbwhserfprinter5();
                break;
            case 26:
                return $this->getIntbwhseprofwhse();
                break;
            case 27:
                return $this->getIntbwhseasetwhse();
                break;
            case 28:
                return $this->getIntbwhseconsignwhse();
                break;
            case 29:
                return $this->getIntbwhsebinrangelist();
                break;
            case 30:
                return $this->getIntbwhsesupplywhse();
                break;
            case 31:
                return $this->getIntbwhseareasplit();
                break;
            case 32:
                return $this->getIntbwhsercvbincode();
                break;
            case 33:
                return $this->getIntbwhsercvbin();
                break;
            case 34:
                return $this->getDateupdtd();
                break;
            case 35:
                return $this->getTimeupdtd();
                break;
            case 36:
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

        if (isset($alreadyDumpedObjects['Warehouse'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Warehouse'][$this->hashCode()] = true;
        $keys = WarehouseTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIntbwhse(),
            $keys[1] => $this->getIntbwhsename(),
            $keys[2] => $this->getIntbwhseadr1(),
            $keys[3] => $this->getIntbwhseadr2(),
            $keys[4] => $this->getIntbwhsecity(),
            $keys[5] => $this->getIntbwhsestat(),
            $keys[6] => $this->getIntbwhsezipcode(),
            $keys[7] => $this->getIntbwhsectry(),
            $keys[8] => $this->getIntbwhseusehandheld(),
            $keys[9] => $this->getIntbwhsecashcust(),
            $keys[10] => $this->getIntbwhsepickdtl(),
            $keys[11] => $this->getIntbwhseprodbin(),
            $keys[12] => $this->getIntbwhsepharea(),
            $keys[13] => $this->getIntbwhsephfrst3(),
            $keys[14] => $this->getIntbwhsephlast4(),
            $keys[15] => $this->getIntbwhsephext(),
            $keys[16] => $this->getIntbwhsefaxarea(),
            $keys[17] => $this->getIntbwhsefaxfrst3(),
            $keys[18] => $this->getIntbwhsefaxlast4(),
            $keys[19] => $this->getIntbwhseemailadr(),
            $keys[20] => $this->getIntbwhseqcrgabin(),
            $keys[21] => $this->getIntbwhserfprinter1(),
            $keys[22] => $this->getIntbwhserfprinter2(),
            $keys[23] => $this->getIntbwhserfprinter3(),
            $keys[24] => $this->getIntbwhserfprinter4(),
            $keys[25] => $this->getIntbwhserfprinter5(),
            $keys[26] => $this->getIntbwhseprofwhse(),
            $keys[27] => $this->getIntbwhseasetwhse(),
            $keys[28] => $this->getIntbwhseconsignwhse(),
            $keys[29] => $this->getIntbwhsebinrangelist(),
            $keys[30] => $this->getIntbwhsesupplywhse(),
            $keys[31] => $this->getIntbwhseareasplit(),
            $keys[32] => $this->getIntbwhsercvbincode(),
            $keys[33] => $this->getIntbwhsercvbin(),
            $keys[34] => $this->getDateupdtd(),
            $keys[35] => $this->getTimeupdtd(),
            $keys[36] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collInvWhseItemBins) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invWhseItemBins';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_bin_areas';
                        break;
                    default:
                        $key = 'InvWhseItemBins';
                }

                $result[$key] = $this->collInvWhseItemBins->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collWarehouseBins) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'warehouseBins';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_bin_cntrls';
                        break;
                    default:
                        $key = 'WarehouseBins';
                }

                $result[$key] = $this->collWarehouseBins->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvWhseLots) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invWhseLots';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_lots';
                        break;
                    default:
                        $key = 'InvWhseLots';
                }

                $result[$key] = $this->collInvWhseLots->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvLotTags) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invLotTags';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_tags';
                        break;
                    default:
                        $key = 'InvLotTags';
                }

                $result[$key] = $this->collInvLotTags->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferOrdersRelatedByIntbwhsefrom) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferOrders';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_heads';
                        break;
                    default:
                        $key = 'InvTransferOrders';
                }

                $result[$key] = $this->collInvTransferOrdersRelatedByIntbwhsefrom->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferOrdersRelatedByIntbwhseto) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferOrders';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_heads';
                        break;
                    default:
                        $key = 'InvTransferOrders';
                }

                $result[$key] = $this->collInvTransferOrdersRelatedByIntbwhseto->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collWarehouseInventories) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'warehouseInventories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_whse_masts';
                        break;
                    default:
                        $key = 'WarehouseInventories';
                }

                $result[$key] = $this->collWarehouseInventories->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collWarehouseNotes) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'warehouseNotes';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'notes_whse_invc_stmts';
                        break;
                    default:
                        $key = 'WarehouseNotes';
                }

                $result[$key] = $this->collWarehouseNotes->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPoReceivingHeads) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'poReceivingHeads';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_tran_heads';
                        break;
                    default:
                        $key = 'PoReceivingHeads';
                }

                $result[$key] = $this->collPoReceivingHeads->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Warehouse
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = WarehouseTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Warehouse
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIntbwhse($value);
                break;
            case 1:
                $this->setIntbwhsename($value);
                break;
            case 2:
                $this->setIntbwhseadr1($value);
                break;
            case 3:
                $this->setIntbwhseadr2($value);
                break;
            case 4:
                $this->setIntbwhsecity($value);
                break;
            case 5:
                $this->setIntbwhsestat($value);
                break;
            case 6:
                $this->setIntbwhsezipcode($value);
                break;
            case 7:
                $this->setIntbwhsectry($value);
                break;
            case 8:
                $this->setIntbwhseusehandheld($value);
                break;
            case 9:
                $this->setIntbwhsecashcust($value);
                break;
            case 10:
                $this->setIntbwhsepickdtl($value);
                break;
            case 11:
                $this->setIntbwhseprodbin($value);
                break;
            case 12:
                $this->setIntbwhsepharea($value);
                break;
            case 13:
                $this->setIntbwhsephfrst3($value);
                break;
            case 14:
                $this->setIntbwhsephlast4($value);
                break;
            case 15:
                $this->setIntbwhsephext($value);
                break;
            case 16:
                $this->setIntbwhsefaxarea($value);
                break;
            case 17:
                $this->setIntbwhsefaxfrst3($value);
                break;
            case 18:
                $this->setIntbwhsefaxlast4($value);
                break;
            case 19:
                $this->setIntbwhseemailadr($value);
                break;
            case 20:
                $this->setIntbwhseqcrgabin($value);
                break;
            case 21:
                $this->setIntbwhserfprinter1($value);
                break;
            case 22:
                $this->setIntbwhserfprinter2($value);
                break;
            case 23:
                $this->setIntbwhserfprinter3($value);
                break;
            case 24:
                $this->setIntbwhserfprinter4($value);
                break;
            case 25:
                $this->setIntbwhserfprinter5($value);
                break;
            case 26:
                $this->setIntbwhseprofwhse($value);
                break;
            case 27:
                $this->setIntbwhseasetwhse($value);
                break;
            case 28:
                $this->setIntbwhseconsignwhse($value);
                break;
            case 29:
                $this->setIntbwhsebinrangelist($value);
                break;
            case 30:
                $this->setIntbwhsesupplywhse($value);
                break;
            case 31:
                $this->setIntbwhseareasplit($value);
                break;
            case 32:
                $this->setIntbwhsercvbincode($value);
                break;
            case 33:
                $this->setIntbwhsercvbin($value);
                break;
            case 34:
                $this->setDateupdtd($value);
                break;
            case 35:
                $this->setTimeupdtd($value);
                break;
            case 36:
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
        $keys = WarehouseTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIntbwhse($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbwhsename($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIntbwhseadr1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIntbwhseadr2($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIntbwhsecity($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIntbwhsestat($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIntbwhsezipcode($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIntbwhsectry($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIntbwhseusehandheld($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIntbwhsecashcust($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIntbwhsepickdtl($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setIntbwhseprodbin($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setIntbwhsepharea($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setIntbwhsephfrst3($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setIntbwhsephlast4($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setIntbwhsephext($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIntbwhsefaxarea($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setIntbwhsefaxfrst3($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setIntbwhsefaxlast4($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIntbwhseemailadr($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setIntbwhseqcrgabin($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setIntbwhserfprinter1($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setIntbwhserfprinter2($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setIntbwhserfprinter3($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setIntbwhserfprinter4($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setIntbwhserfprinter5($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setIntbwhseprofwhse($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setIntbwhseasetwhse($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setIntbwhseconsignwhse($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setIntbwhsebinrangelist($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setIntbwhsesupplywhse($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setIntbwhseareasplit($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setIntbwhsercvbincode($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setIntbwhsercvbin($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setDateupdtd($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setTimeupdtd($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setDummy($arr[$keys[36]]);
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
     * @return $this|\Warehouse The current object, for fluid interface
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
        $criteria = new Criteria(WarehouseTableMap::DATABASE_NAME);

        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSE)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSENAME)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSENAME, $this->intbwhsename);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEADR1)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEADR1, $this->intbwhseadr1);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEADR2)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEADR2, $this->intbwhseadr2);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSECITY)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSECITY, $this->intbwhsecity);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSESTAT)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSESTAT, $this->intbwhsestat);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEZIPCODE)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEZIPCODE, $this->intbwhsezipcode);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSECTRY)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSECTRY, $this->intbwhsectry);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEUSEHANDHELD)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEUSEHANDHELD, $this->intbwhseusehandheld);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSECASHCUST)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSECASHCUST, $this->intbwhsecashcust);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPICKDTL)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEPICKDTL, $this->intbwhsepickdtl);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPRODBIN)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEPRODBIN, $this->intbwhseprodbin);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPHAREA)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEPHAREA, $this->intbwhsepharea);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPHFRST3)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEPHFRST3, $this->intbwhsephfrst3);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPHLAST4)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEPHLAST4, $this->intbwhsephlast4);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPHEXT)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEPHEXT, $this->intbwhsephext);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEFAXAREA)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEFAXAREA, $this->intbwhsefaxarea);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEFAXFRST3)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEFAXFRST3, $this->intbwhsefaxfrst3);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEFAXLAST4)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEFAXLAST4, $this->intbwhsefaxlast4);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEEMAILADR)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEEMAILADR, $this->intbwhseemailadr);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEQCRGABIN)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEQCRGABIN, $this->intbwhseqcrgabin);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER1)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSERFPRINTER1, $this->intbwhserfprinter1);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER2)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSERFPRINTER2, $this->intbwhserfprinter2);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER3)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSERFPRINTER3, $this->intbwhserfprinter3);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER4)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSERFPRINTER4, $this->intbwhserfprinter4);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERFPRINTER5)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSERFPRINTER5, $this->intbwhserfprinter5);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEPROFWHSE)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEPROFWHSE, $this->intbwhseprofwhse);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEASETWHSE)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEASETWHSE, $this->intbwhseasetwhse);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSECONSIGNWHSE)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSECONSIGNWHSE, $this->intbwhseconsignwhse);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEBINRANGELIST)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEBINRANGELIST, $this->intbwhsebinrangelist);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSESUPPLYWHSE)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSESUPPLYWHSE, $this->intbwhsesupplywhse);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSEAREASPLIT)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSEAREASPLIT, $this->intbwhseareasplit);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERCVBINCODE)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSERCVBINCODE, $this->intbwhsercvbincode);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_INTBWHSERCVBIN)) {
            $criteria->add(WarehouseTableMap::COL_INTBWHSERCVBIN, $this->intbwhsercvbin);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_DATEUPDTD)) {
            $criteria->add(WarehouseTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_TIMEUPDTD)) {
            $criteria->add(WarehouseTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(WarehouseTableMap::COL_DUMMY)) {
            $criteria->add(WarehouseTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildWarehouseQuery::create();
        $criteria->add(WarehouseTableMap::COL_INTBWHSE, $this->intbwhse);

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
        $validPk = null !== $this->getIntbwhse();

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
        return $this->getIntbwhse();
    }

    /**
     * Generic method to set the primary key (intbwhse column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIntbwhse($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIntbwhse();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Warehouse (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setIntbwhsename($this->getIntbwhsename());
        $copyObj->setIntbwhseadr1($this->getIntbwhseadr1());
        $copyObj->setIntbwhseadr2($this->getIntbwhseadr2());
        $copyObj->setIntbwhsecity($this->getIntbwhsecity());
        $copyObj->setIntbwhsestat($this->getIntbwhsestat());
        $copyObj->setIntbwhsezipcode($this->getIntbwhsezipcode());
        $copyObj->setIntbwhsectry($this->getIntbwhsectry());
        $copyObj->setIntbwhseusehandheld($this->getIntbwhseusehandheld());
        $copyObj->setIntbwhsecashcust($this->getIntbwhsecashcust());
        $copyObj->setIntbwhsepickdtl($this->getIntbwhsepickdtl());
        $copyObj->setIntbwhseprodbin($this->getIntbwhseprodbin());
        $copyObj->setIntbwhsepharea($this->getIntbwhsepharea());
        $copyObj->setIntbwhsephfrst3($this->getIntbwhsephfrst3());
        $copyObj->setIntbwhsephlast4($this->getIntbwhsephlast4());
        $copyObj->setIntbwhsephext($this->getIntbwhsephext());
        $copyObj->setIntbwhsefaxarea($this->getIntbwhsefaxarea());
        $copyObj->setIntbwhsefaxfrst3($this->getIntbwhsefaxfrst3());
        $copyObj->setIntbwhsefaxlast4($this->getIntbwhsefaxlast4());
        $copyObj->setIntbwhseemailadr($this->getIntbwhseemailadr());
        $copyObj->setIntbwhseqcrgabin($this->getIntbwhseqcrgabin());
        $copyObj->setIntbwhserfprinter1($this->getIntbwhserfprinter1());
        $copyObj->setIntbwhserfprinter2($this->getIntbwhserfprinter2());
        $copyObj->setIntbwhserfprinter3($this->getIntbwhserfprinter3());
        $copyObj->setIntbwhserfprinter4($this->getIntbwhserfprinter4());
        $copyObj->setIntbwhserfprinter5($this->getIntbwhserfprinter5());
        $copyObj->setIntbwhseprofwhse($this->getIntbwhseprofwhse());
        $copyObj->setIntbwhseasetwhse($this->getIntbwhseasetwhse());
        $copyObj->setIntbwhseconsignwhse($this->getIntbwhseconsignwhse());
        $copyObj->setIntbwhsebinrangelist($this->getIntbwhsebinrangelist());
        $copyObj->setIntbwhsesupplywhse($this->getIntbwhsesupplywhse());
        $copyObj->setIntbwhseareasplit($this->getIntbwhseareasplit());
        $copyObj->setIntbwhsercvbincode($this->getIntbwhsercvbincode());
        $copyObj->setIntbwhsercvbin($this->getIntbwhsercvbin());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getInvWhseItemBins() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvWhseItemBin($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getWarehouseBins() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addWarehouseBin($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvWhseLots() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvWhseLot($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvLotTags() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvLotTag($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferOrdersRelatedByIntbwhsefrom() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferOrderRelatedByIntbwhsefrom($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferOrdersRelatedByIntbwhseto() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferOrderRelatedByIntbwhseto($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getWarehouseInventories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addWarehouseInventory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getWarehouseNotes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addWarehouseNote($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPoReceivingHeads() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPoReceivingHead($relObj->copy($deepCopy));
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
     * @return \Warehouse Clone of current object.
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
        if ('InvWhseItemBin' == $relationName) {
            $this->initInvWhseItemBins();
            return;
        }
        if ('WarehouseBin' == $relationName) {
            $this->initWarehouseBins();
            return;
        }
        if ('InvWhseLot' == $relationName) {
            $this->initInvWhseLots();
            return;
        }
        if ('InvLotTag' == $relationName) {
            $this->initInvLotTags();
            return;
        }
        if ('InvTransferOrderRelatedByIntbwhsefrom' == $relationName) {
            $this->initInvTransferOrdersRelatedByIntbwhsefrom();
            return;
        }
        if ('InvTransferOrderRelatedByIntbwhseto' == $relationName) {
            $this->initInvTransferOrdersRelatedByIntbwhseto();
            return;
        }
        if ('WarehouseInventory' == $relationName) {
            $this->initWarehouseInventories();
            return;
        }
        if ('WarehouseNote' == $relationName) {
            $this->initWarehouseNotes();
            return;
        }
        if ('PoReceivingHead' == $relationName) {
            $this->initPoReceivingHeads();
            return;
        }
    }

    /**
     * Clears out the collInvWhseItemBins collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvWhseItemBins()
     */
    public function clearInvWhseItemBins()
    {
        $this->collInvWhseItemBins = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvWhseItemBins collection loaded partially.
     */
    public function resetPartialInvWhseItemBins($v = true)
    {
        $this->collInvWhseItemBinsPartial = $v;
    }

    /**
     * Initializes the collInvWhseItemBins collection.
     *
     * By default this just sets the collInvWhseItemBins collection to an empty array (like clearcollInvWhseItemBins());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvWhseItemBins($overrideExisting = true)
    {
        if (null !== $this->collInvWhseItemBins && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvWhseItemBinTableMap::getTableMap()->getCollectionClassName();

        $this->collInvWhseItemBins = new $collectionClassName;
        $this->collInvWhseItemBins->setModel('\InvWhseItemBin');
    }

    /**
     * Gets an array of ChildInvWhseItemBin objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvWhseItemBin[] List of ChildInvWhseItemBin objects
     * @throws PropelException
     */
    public function getInvWhseItemBins(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseItemBinsPartial && !$this->isNew();
        if (null === $this->collInvWhseItemBins || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvWhseItemBins) {
                // return empty collection
                $this->initInvWhseItemBins();
            } else {
                $collInvWhseItemBins = ChildInvWhseItemBinQuery::create(null, $criteria)
                    ->filterByWarehouse($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvWhseItemBinsPartial && count($collInvWhseItemBins)) {
                        $this->initInvWhseItemBins(false);

                        foreach ($collInvWhseItemBins as $obj) {
                            if (false == $this->collInvWhseItemBins->contains($obj)) {
                                $this->collInvWhseItemBins->append($obj);
                            }
                        }

                        $this->collInvWhseItemBinsPartial = true;
                    }

                    return $collInvWhseItemBins;
                }

                if ($partial && $this->collInvWhseItemBins) {
                    foreach ($this->collInvWhseItemBins as $obj) {
                        if ($obj->isNew()) {
                            $collInvWhseItemBins[] = $obj;
                        }
                    }
                }

                $this->collInvWhseItemBins = $collInvWhseItemBins;
                $this->collInvWhseItemBinsPartial = false;
            }
        }

        return $this->collInvWhseItemBins;
    }

    /**
     * Sets a collection of ChildInvWhseItemBin objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invWhseItemBins A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setInvWhseItemBins(Collection $invWhseItemBins, ConnectionInterface $con = null)
    {
        /** @var ChildInvWhseItemBin[] $invWhseItemBinsToDelete */
        $invWhseItemBinsToDelete = $this->getInvWhseItemBins(new Criteria(), $con)->diff($invWhseItemBins);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invWhseItemBinsScheduledForDeletion = clone $invWhseItemBinsToDelete;

        foreach ($invWhseItemBinsToDelete as $invWhseItemBinRemoved) {
            $invWhseItemBinRemoved->setWarehouse(null);
        }

        $this->collInvWhseItemBins = null;
        foreach ($invWhseItemBins as $invWhseItemBin) {
            $this->addInvWhseItemBin($invWhseItemBin);
        }

        $this->collInvWhseItemBins = $invWhseItemBins;
        $this->collInvWhseItemBinsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvWhseItemBin objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvWhseItemBin objects.
     * @throws PropelException
     */
    public function countInvWhseItemBins(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseItemBinsPartial && !$this->isNew();
        if (null === $this->collInvWhseItemBins || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvWhseItemBins) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvWhseItemBins());
            }

            $query = ChildInvWhseItemBinQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouse($this)
                ->count($con);
        }

        return count($this->collInvWhseItemBins);
    }

    /**
     * Method called to associate a ChildInvWhseItemBin object to this object
     * through the ChildInvWhseItemBin foreign key attribute.
     *
     * @param  ChildInvWhseItemBin $l ChildInvWhseItemBin
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addInvWhseItemBin(ChildInvWhseItemBin $l)
    {
        if ($this->collInvWhseItemBins === null) {
            $this->initInvWhseItemBins();
            $this->collInvWhseItemBinsPartial = true;
        }

        if (!$this->collInvWhseItemBins->contains($l)) {
            $this->doAddInvWhseItemBin($l);

            if ($this->invWhseItemBinsScheduledForDeletion and $this->invWhseItemBinsScheduledForDeletion->contains($l)) {
                $this->invWhseItemBinsScheduledForDeletion->remove($this->invWhseItemBinsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvWhseItemBin $invWhseItemBin The ChildInvWhseItemBin object to add.
     */
    protected function doAddInvWhseItemBin(ChildInvWhseItemBin $invWhseItemBin)
    {
        $this->collInvWhseItemBins[]= $invWhseItemBin;
        $invWhseItemBin->setWarehouse($this);
    }

    /**
     * @param  ChildInvWhseItemBin $invWhseItemBin The ChildInvWhseItemBin object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removeInvWhseItemBin(ChildInvWhseItemBin $invWhseItemBin)
    {
        if ($this->getInvWhseItemBins()->contains($invWhseItemBin)) {
            $pos = $this->collInvWhseItemBins->search($invWhseItemBin);
            $this->collInvWhseItemBins->remove($pos);
            if (null === $this->invWhseItemBinsScheduledForDeletion) {
                $this->invWhseItemBinsScheduledForDeletion = clone $this->collInvWhseItemBins;
                $this->invWhseItemBinsScheduledForDeletion->clear();
            }
            $this->invWhseItemBinsScheduledForDeletion[]= clone $invWhseItemBin;
            $invWhseItemBin->setWarehouse(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvWhseItemBins from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseItemBin[] List of ChildInvWhseItemBin objects
     */
    public function getInvWhseItemBinsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseItemBinQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvWhseItemBins($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvWhseItemBins from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseItemBin[] List of ChildInvWhseItemBin objects
     */
    public function getInvWhseItemBinsJoinWarehouseInventory(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseItemBinQuery::create(null, $criteria);
        $query->joinWith('WarehouseInventory', $joinBehavior);

        return $this->getInvWhseItemBins($query, $con);
    }

    /**
     * Clears out the collWarehouseBins collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addWarehouseBins()
     */
    public function clearWarehouseBins()
    {
        $this->collWarehouseBins = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collWarehouseBins collection loaded partially.
     */
    public function resetPartialWarehouseBins($v = true)
    {
        $this->collWarehouseBinsPartial = $v;
    }

    /**
     * Initializes the collWarehouseBins collection.
     *
     * By default this just sets the collWarehouseBins collection to an empty array (like clearcollWarehouseBins());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initWarehouseBins($overrideExisting = true)
    {
        if (null !== $this->collWarehouseBins && !$overrideExisting) {
            return;
        }

        $collectionClassName = WarehouseBinTableMap::getTableMap()->getCollectionClassName();

        $this->collWarehouseBins = new $collectionClassName;
        $this->collWarehouseBins->setModel('\WarehouseBin');
    }

    /**
     * Gets an array of ChildWarehouseBin objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildWarehouseBin[] List of ChildWarehouseBin objects
     * @throws PropelException
     */
    public function getWarehouseBins(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collWarehouseBinsPartial && !$this->isNew();
        if (null === $this->collWarehouseBins || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collWarehouseBins) {
                // return empty collection
                $this->initWarehouseBins();
            } else {
                $collWarehouseBins = ChildWarehouseBinQuery::create(null, $criteria)
                    ->filterByWarehouse($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collWarehouseBinsPartial && count($collWarehouseBins)) {
                        $this->initWarehouseBins(false);

                        foreach ($collWarehouseBins as $obj) {
                            if (false == $this->collWarehouseBins->contains($obj)) {
                                $this->collWarehouseBins->append($obj);
                            }
                        }

                        $this->collWarehouseBinsPartial = true;
                    }

                    return $collWarehouseBins;
                }

                if ($partial && $this->collWarehouseBins) {
                    foreach ($this->collWarehouseBins as $obj) {
                        if ($obj->isNew()) {
                            $collWarehouseBins[] = $obj;
                        }
                    }
                }

                $this->collWarehouseBins = $collWarehouseBins;
                $this->collWarehouseBinsPartial = false;
            }
        }

        return $this->collWarehouseBins;
    }

    /**
     * Sets a collection of ChildWarehouseBin objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $warehouseBins A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setWarehouseBins(Collection $warehouseBins, ConnectionInterface $con = null)
    {
        /** @var ChildWarehouseBin[] $warehouseBinsToDelete */
        $warehouseBinsToDelete = $this->getWarehouseBins(new Criteria(), $con)->diff($warehouseBins);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->warehouseBinsScheduledForDeletion = clone $warehouseBinsToDelete;

        foreach ($warehouseBinsToDelete as $warehouseBinRemoved) {
            $warehouseBinRemoved->setWarehouse(null);
        }

        $this->collWarehouseBins = null;
        foreach ($warehouseBins as $warehouseBin) {
            $this->addWarehouseBin($warehouseBin);
        }

        $this->collWarehouseBins = $warehouseBins;
        $this->collWarehouseBinsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related WarehouseBin objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related WarehouseBin objects.
     * @throws PropelException
     */
    public function countWarehouseBins(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collWarehouseBinsPartial && !$this->isNew();
        if (null === $this->collWarehouseBins || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collWarehouseBins) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getWarehouseBins());
            }

            $query = ChildWarehouseBinQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouse($this)
                ->count($con);
        }

        return count($this->collWarehouseBins);
    }

    /**
     * Method called to associate a ChildWarehouseBin object to this object
     * through the ChildWarehouseBin foreign key attribute.
     *
     * @param  ChildWarehouseBin $l ChildWarehouseBin
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addWarehouseBin(ChildWarehouseBin $l)
    {
        if ($this->collWarehouseBins === null) {
            $this->initWarehouseBins();
            $this->collWarehouseBinsPartial = true;
        }

        if (!$this->collWarehouseBins->contains($l)) {
            $this->doAddWarehouseBin($l);

            if ($this->warehouseBinsScheduledForDeletion and $this->warehouseBinsScheduledForDeletion->contains($l)) {
                $this->warehouseBinsScheduledForDeletion->remove($this->warehouseBinsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildWarehouseBin $warehouseBin The ChildWarehouseBin object to add.
     */
    protected function doAddWarehouseBin(ChildWarehouseBin $warehouseBin)
    {
        $this->collWarehouseBins[]= $warehouseBin;
        $warehouseBin->setWarehouse($this);
    }

    /**
     * @param  ChildWarehouseBin $warehouseBin The ChildWarehouseBin object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removeWarehouseBin(ChildWarehouseBin $warehouseBin)
    {
        if ($this->getWarehouseBins()->contains($warehouseBin)) {
            $pos = $this->collWarehouseBins->search($warehouseBin);
            $this->collWarehouseBins->remove($pos);
            if (null === $this->warehouseBinsScheduledForDeletion) {
                $this->warehouseBinsScheduledForDeletion = clone $this->collWarehouseBins;
                $this->warehouseBinsScheduledForDeletion->clear();
            }
            $this->warehouseBinsScheduledForDeletion[]= clone $warehouseBin;
            $warehouseBin->setWarehouse(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related WarehouseBins from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildWarehouseBin[] List of ChildWarehouseBin objects
     */
    public function getWarehouseBinsJoinInvBinAreaCode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildWarehouseBinQuery::create(null, $criteria);
        $query->joinWith('InvBinAreaCode', $joinBehavior);

        return $this->getWarehouseBins($query, $con);
    }

    /**
     * Clears out the collInvWhseLots collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvWhseLots()
     */
    public function clearInvWhseLots()
    {
        $this->collInvWhseLots = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvWhseLots collection loaded partially.
     */
    public function resetPartialInvWhseLots($v = true)
    {
        $this->collInvWhseLotsPartial = $v;
    }

    /**
     * Initializes the collInvWhseLots collection.
     *
     * By default this just sets the collInvWhseLots collection to an empty array (like clearcollInvWhseLots());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvWhseLots($overrideExisting = true)
    {
        if (null !== $this->collInvWhseLots && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvWhseLotTableMap::getTableMap()->getCollectionClassName();

        $this->collInvWhseLots = new $collectionClassName;
        $this->collInvWhseLots->setModel('\InvWhseLot');
    }

    /**
     * Gets an array of ChildInvWhseLot objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     * @throws PropelException
     */
    public function getInvWhseLots(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseLotsPartial && !$this->isNew();
        if (null === $this->collInvWhseLots || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvWhseLots) {
                // return empty collection
                $this->initInvWhseLots();
            } else {
                $collInvWhseLots = ChildInvWhseLotQuery::create(null, $criteria)
                    ->filterByWarehouse($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvWhseLotsPartial && count($collInvWhseLots)) {
                        $this->initInvWhseLots(false);

                        foreach ($collInvWhseLots as $obj) {
                            if (false == $this->collInvWhseLots->contains($obj)) {
                                $this->collInvWhseLots->append($obj);
                            }
                        }

                        $this->collInvWhseLotsPartial = true;
                    }

                    return $collInvWhseLots;
                }

                if ($partial && $this->collInvWhseLots) {
                    foreach ($this->collInvWhseLots as $obj) {
                        if ($obj->isNew()) {
                            $collInvWhseLots[] = $obj;
                        }
                    }
                }

                $this->collInvWhseLots = $collInvWhseLots;
                $this->collInvWhseLotsPartial = false;
            }
        }

        return $this->collInvWhseLots;
    }

    /**
     * Sets a collection of ChildInvWhseLot objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invWhseLots A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setInvWhseLots(Collection $invWhseLots, ConnectionInterface $con = null)
    {
        /** @var ChildInvWhseLot[] $invWhseLotsToDelete */
        $invWhseLotsToDelete = $this->getInvWhseLots(new Criteria(), $con)->diff($invWhseLots);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invWhseLotsScheduledForDeletion = clone $invWhseLotsToDelete;

        foreach ($invWhseLotsToDelete as $invWhseLotRemoved) {
            $invWhseLotRemoved->setWarehouse(null);
        }

        $this->collInvWhseLots = null;
        foreach ($invWhseLots as $invWhseLot) {
            $this->addInvWhseLot($invWhseLot);
        }

        $this->collInvWhseLots = $invWhseLots;
        $this->collInvWhseLotsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvWhseLot objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvWhseLot objects.
     * @throws PropelException
     */
    public function countInvWhseLots(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseLotsPartial && !$this->isNew();
        if (null === $this->collInvWhseLots || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvWhseLots) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvWhseLots());
            }

            $query = ChildInvWhseLotQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouse($this)
                ->count($con);
        }

        return count($this->collInvWhseLots);
    }

    /**
     * Method called to associate a ChildInvWhseLot object to this object
     * through the ChildInvWhseLot foreign key attribute.
     *
     * @param  ChildInvWhseLot $l ChildInvWhseLot
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addInvWhseLot(ChildInvWhseLot $l)
    {
        if ($this->collInvWhseLots === null) {
            $this->initInvWhseLots();
            $this->collInvWhseLotsPartial = true;
        }

        if (!$this->collInvWhseLots->contains($l)) {
            $this->doAddInvWhseLot($l);

            if ($this->invWhseLotsScheduledForDeletion and $this->invWhseLotsScheduledForDeletion->contains($l)) {
                $this->invWhseLotsScheduledForDeletion->remove($this->invWhseLotsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvWhseLot $invWhseLot The ChildInvWhseLot object to add.
     */
    protected function doAddInvWhseLot(ChildInvWhseLot $invWhseLot)
    {
        $this->collInvWhseLots[]= $invWhseLot;
        $invWhseLot->setWarehouse($this);
    }

    /**
     * @param  ChildInvWhseLot $invWhseLot The ChildInvWhseLot object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removeInvWhseLot(ChildInvWhseLot $invWhseLot)
    {
        if ($this->getInvWhseLots()->contains($invWhseLot)) {
            $pos = $this->collInvWhseLots->search($invWhseLot);
            $this->collInvWhseLots->remove($pos);
            if (null === $this->invWhseLotsScheduledForDeletion) {
                $this->invWhseLotsScheduledForDeletion = clone $this->collInvWhseLots;
                $this->invWhseLotsScheduledForDeletion->clear();
            }
            $this->invWhseLotsScheduledForDeletion[]= clone $invWhseLot;
            $invWhseLot->setWarehouse(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvWhseLots from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     */
    public function getInvWhseLotsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseLotQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvWhseLots($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvWhseLots from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     */
    public function getInvWhseLotsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseLotQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvWhseLots($query, $con);
    }

    /**
     * Clears out the collInvLotTags collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvLotTags()
     */
    public function clearInvLotTags()
    {
        $this->collInvLotTags = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvLotTags collection loaded partially.
     */
    public function resetPartialInvLotTags($v = true)
    {
        $this->collInvLotTagsPartial = $v;
    }

    /**
     * Initializes the collInvLotTags collection.
     *
     * By default this just sets the collInvLotTags collection to an empty array (like clearcollInvLotTags());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvLotTags($overrideExisting = true)
    {
        if (null !== $this->collInvLotTags && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvLotTagTableMap::getTableMap()->getCollectionClassName();

        $this->collInvLotTags = new $collectionClassName;
        $this->collInvLotTags->setModel('\InvLotTag');
    }

    /**
     * Gets an array of ChildInvLotTag objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     * @throws PropelException
     */
    public function getInvLotTags(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvLotTagsPartial && !$this->isNew();
        if (null === $this->collInvLotTags || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvLotTags) {
                // return empty collection
                $this->initInvLotTags();
            } else {
                $collInvLotTags = ChildInvLotTagQuery::create(null, $criteria)
                    ->filterByWarehouse($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvLotTagsPartial && count($collInvLotTags)) {
                        $this->initInvLotTags(false);

                        foreach ($collInvLotTags as $obj) {
                            if (false == $this->collInvLotTags->contains($obj)) {
                                $this->collInvLotTags->append($obj);
                            }
                        }

                        $this->collInvLotTagsPartial = true;
                    }

                    return $collInvLotTags;
                }

                if ($partial && $this->collInvLotTags) {
                    foreach ($this->collInvLotTags as $obj) {
                        if ($obj->isNew()) {
                            $collInvLotTags[] = $obj;
                        }
                    }
                }

                $this->collInvLotTags = $collInvLotTags;
                $this->collInvLotTagsPartial = false;
            }
        }

        return $this->collInvLotTags;
    }

    /**
     * Sets a collection of ChildInvLotTag objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invLotTags A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setInvLotTags(Collection $invLotTags, ConnectionInterface $con = null)
    {
        /** @var ChildInvLotTag[] $invLotTagsToDelete */
        $invLotTagsToDelete = $this->getInvLotTags(new Criteria(), $con)->diff($invLotTags);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invLotTagsScheduledForDeletion = clone $invLotTagsToDelete;

        foreach ($invLotTagsToDelete as $invLotTagRemoved) {
            $invLotTagRemoved->setWarehouse(null);
        }

        $this->collInvLotTags = null;
        foreach ($invLotTags as $invLotTag) {
            $this->addInvLotTag($invLotTag);
        }

        $this->collInvLotTags = $invLotTags;
        $this->collInvLotTagsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvLotTag objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvLotTag objects.
     * @throws PropelException
     */
    public function countInvLotTags(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvLotTagsPartial && !$this->isNew();
        if (null === $this->collInvLotTags || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvLotTags) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvLotTags());
            }

            $query = ChildInvLotTagQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouse($this)
                ->count($con);
        }

        return count($this->collInvLotTags);
    }

    /**
     * Method called to associate a ChildInvLotTag object to this object
     * through the ChildInvLotTag foreign key attribute.
     *
     * @param  ChildInvLotTag $l ChildInvLotTag
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addInvLotTag(ChildInvLotTag $l)
    {
        if ($this->collInvLotTags === null) {
            $this->initInvLotTags();
            $this->collInvLotTagsPartial = true;
        }

        if (!$this->collInvLotTags->contains($l)) {
            $this->doAddInvLotTag($l);

            if ($this->invLotTagsScheduledForDeletion and $this->invLotTagsScheduledForDeletion->contains($l)) {
                $this->invLotTagsScheduledForDeletion->remove($this->invLotTagsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvLotTag $invLotTag The ChildInvLotTag object to add.
     */
    protected function doAddInvLotTag(ChildInvLotTag $invLotTag)
    {
        $this->collInvLotTags[]= $invLotTag;
        $invLotTag->setWarehouse($this);
    }

    /**
     * @param  ChildInvLotTag $invLotTag The ChildInvLotTag object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removeInvLotTag(ChildInvLotTag $invLotTag)
    {
        if ($this->getInvLotTags()->contains($invLotTag)) {
            $pos = $this->collInvLotTags->search($invLotTag);
            $this->collInvLotTags->remove($pos);
            if (null === $this->invLotTagsScheduledForDeletion) {
                $this->invLotTagsScheduledForDeletion = clone $this->collInvLotTags;
                $this->invLotTagsScheduledForDeletion->clear();
            }
            $this->invLotTagsScheduledForDeletion[]= clone $invLotTag;
            $invLotTag->setWarehouse(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinDplusUser(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('DplusUser', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }

    /**
     * Clears out the collInvTransferOrdersRelatedByIntbwhsefrom collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferOrdersRelatedByIntbwhsefrom()
     */
    public function clearInvTransferOrdersRelatedByIntbwhsefrom()
    {
        $this->collInvTransferOrdersRelatedByIntbwhsefrom = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferOrdersRelatedByIntbwhsefrom collection loaded partially.
     */
    public function resetPartialInvTransferOrdersRelatedByIntbwhsefrom($v = true)
    {
        $this->collInvTransferOrdersRelatedByIntbwhsefromPartial = $v;
    }

    /**
     * Initializes the collInvTransferOrdersRelatedByIntbwhsefrom collection.
     *
     * By default this just sets the collInvTransferOrdersRelatedByIntbwhsefrom collection to an empty array (like clearcollInvTransferOrdersRelatedByIntbwhsefrom());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferOrdersRelatedByIntbwhsefrom($overrideExisting = true)
    {
        if (null !== $this->collInvTransferOrdersRelatedByIntbwhsefrom && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferOrderTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferOrdersRelatedByIntbwhsefrom = new $collectionClassName;
        $this->collInvTransferOrdersRelatedByIntbwhsefrom->setModel('\InvTransferOrder');
    }

    /**
     * Gets an array of ChildInvTransferOrder objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferOrder[] List of ChildInvTransferOrder objects
     * @throws PropelException
     */
    public function getInvTransferOrdersRelatedByIntbwhsefrom(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferOrdersRelatedByIntbwhsefromPartial && !$this->isNew();
        if (null === $this->collInvTransferOrdersRelatedByIntbwhsefrom || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferOrdersRelatedByIntbwhsefrom) {
                // return empty collection
                $this->initInvTransferOrdersRelatedByIntbwhsefrom();
            } else {
                $collInvTransferOrdersRelatedByIntbwhsefrom = ChildInvTransferOrderQuery::create(null, $criteria)
                    ->filterByWarehouseRelatedByIntbwhsefrom($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferOrdersRelatedByIntbwhsefromPartial && count($collInvTransferOrdersRelatedByIntbwhsefrom)) {
                        $this->initInvTransferOrdersRelatedByIntbwhsefrom(false);

                        foreach ($collInvTransferOrdersRelatedByIntbwhsefrom as $obj) {
                            if (false == $this->collInvTransferOrdersRelatedByIntbwhsefrom->contains($obj)) {
                                $this->collInvTransferOrdersRelatedByIntbwhsefrom->append($obj);
                            }
                        }

                        $this->collInvTransferOrdersRelatedByIntbwhsefromPartial = true;
                    }

                    return $collInvTransferOrdersRelatedByIntbwhsefrom;
                }

                if ($partial && $this->collInvTransferOrdersRelatedByIntbwhsefrom) {
                    foreach ($this->collInvTransferOrdersRelatedByIntbwhsefrom as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferOrdersRelatedByIntbwhsefrom[] = $obj;
                        }
                    }
                }

                $this->collInvTransferOrdersRelatedByIntbwhsefrom = $collInvTransferOrdersRelatedByIntbwhsefrom;
                $this->collInvTransferOrdersRelatedByIntbwhsefromPartial = false;
            }
        }

        return $this->collInvTransferOrdersRelatedByIntbwhsefrom;
    }

    /**
     * Sets a collection of ChildInvTransferOrder objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferOrdersRelatedByIntbwhsefrom A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setInvTransferOrdersRelatedByIntbwhsefrom(Collection $invTransferOrdersRelatedByIntbwhsefrom, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferOrder[] $invTransferOrdersRelatedByIntbwhsefromToDelete */
        $invTransferOrdersRelatedByIntbwhsefromToDelete = $this->getInvTransferOrdersRelatedByIntbwhsefrom(new Criteria(), $con)->diff($invTransferOrdersRelatedByIntbwhsefrom);


        $this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion = $invTransferOrdersRelatedByIntbwhsefromToDelete;

        foreach ($invTransferOrdersRelatedByIntbwhsefromToDelete as $invTransferOrderRelatedByIntbwhsefromRemoved) {
            $invTransferOrderRelatedByIntbwhsefromRemoved->setWarehouseRelatedByIntbwhsefrom(null);
        }

        $this->collInvTransferOrdersRelatedByIntbwhsefrom = null;
        foreach ($invTransferOrdersRelatedByIntbwhsefrom as $invTransferOrderRelatedByIntbwhsefrom) {
            $this->addInvTransferOrderRelatedByIntbwhsefrom($invTransferOrderRelatedByIntbwhsefrom);
        }

        $this->collInvTransferOrdersRelatedByIntbwhsefrom = $invTransferOrdersRelatedByIntbwhsefrom;
        $this->collInvTransferOrdersRelatedByIntbwhsefromPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferOrder objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferOrder objects.
     * @throws PropelException
     */
    public function countInvTransferOrdersRelatedByIntbwhsefrom(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferOrdersRelatedByIntbwhsefromPartial && !$this->isNew();
        if (null === $this->collInvTransferOrdersRelatedByIntbwhsefrom || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferOrdersRelatedByIntbwhsefrom) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferOrdersRelatedByIntbwhsefrom());
            }

            $query = ChildInvTransferOrderQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouseRelatedByIntbwhsefrom($this)
                ->count($con);
        }

        return count($this->collInvTransferOrdersRelatedByIntbwhsefrom);
    }

    /**
     * Method called to associate a ChildInvTransferOrder object to this object
     * through the ChildInvTransferOrder foreign key attribute.
     *
     * @param  ChildInvTransferOrder $l ChildInvTransferOrder
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addInvTransferOrderRelatedByIntbwhsefrom(ChildInvTransferOrder $l)
    {
        if ($this->collInvTransferOrdersRelatedByIntbwhsefrom === null) {
            $this->initInvTransferOrdersRelatedByIntbwhsefrom();
            $this->collInvTransferOrdersRelatedByIntbwhsefromPartial = true;
        }

        if (!$this->collInvTransferOrdersRelatedByIntbwhsefrom->contains($l)) {
            $this->doAddInvTransferOrderRelatedByIntbwhsefrom($l);

            if ($this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion and $this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion->contains($l)) {
                $this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion->remove($this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferOrder $invTransferOrderRelatedByIntbwhsefrom The ChildInvTransferOrder object to add.
     */
    protected function doAddInvTransferOrderRelatedByIntbwhsefrom(ChildInvTransferOrder $invTransferOrderRelatedByIntbwhsefrom)
    {
        $this->collInvTransferOrdersRelatedByIntbwhsefrom[]= $invTransferOrderRelatedByIntbwhsefrom;
        $invTransferOrderRelatedByIntbwhsefrom->setWarehouseRelatedByIntbwhsefrom($this);
    }

    /**
     * @param  ChildInvTransferOrder $invTransferOrderRelatedByIntbwhsefrom The ChildInvTransferOrder object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removeInvTransferOrderRelatedByIntbwhsefrom(ChildInvTransferOrder $invTransferOrderRelatedByIntbwhsefrom)
    {
        if ($this->getInvTransferOrdersRelatedByIntbwhsefrom()->contains($invTransferOrderRelatedByIntbwhsefrom)) {
            $pos = $this->collInvTransferOrdersRelatedByIntbwhsefrom->search($invTransferOrderRelatedByIntbwhsefrom);
            $this->collInvTransferOrdersRelatedByIntbwhsefrom->remove($pos);
            if (null === $this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion) {
                $this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion = clone $this->collInvTransferOrdersRelatedByIntbwhsefrom;
                $this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion->clear();
            }
            $this->invTransferOrdersRelatedByIntbwhsefromScheduledForDeletion[]= clone $invTransferOrderRelatedByIntbwhsefrom;
            $invTransferOrderRelatedByIntbwhsefrom->setWarehouseRelatedByIntbwhsefrom(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvTransferOrdersRelatedByIntbwhsefrom from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferOrder[] List of ChildInvTransferOrder objects
     */
    public function getInvTransferOrdersRelatedByIntbwhsefromJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferOrderQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getInvTransferOrdersRelatedByIntbwhsefrom($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvTransferOrdersRelatedByIntbwhsefrom from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferOrder[] List of ChildInvTransferOrder objects
     */
    public function getInvTransferOrdersRelatedByIntbwhsefromJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferOrderQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getInvTransferOrdersRelatedByIntbwhsefrom($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvTransferOrdersRelatedByIntbwhsefrom from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferOrder[] List of ChildInvTransferOrder objects
     */
    public function getInvTransferOrdersRelatedByIntbwhsefromJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferOrderQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getInvTransferOrdersRelatedByIntbwhsefrom($query, $con);
    }

    /**
     * Clears out the collInvTransferOrdersRelatedByIntbwhseto collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferOrdersRelatedByIntbwhseto()
     */
    public function clearInvTransferOrdersRelatedByIntbwhseto()
    {
        $this->collInvTransferOrdersRelatedByIntbwhseto = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferOrdersRelatedByIntbwhseto collection loaded partially.
     */
    public function resetPartialInvTransferOrdersRelatedByIntbwhseto($v = true)
    {
        $this->collInvTransferOrdersRelatedByIntbwhsetoPartial = $v;
    }

    /**
     * Initializes the collInvTransferOrdersRelatedByIntbwhseto collection.
     *
     * By default this just sets the collInvTransferOrdersRelatedByIntbwhseto collection to an empty array (like clearcollInvTransferOrdersRelatedByIntbwhseto());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferOrdersRelatedByIntbwhseto($overrideExisting = true)
    {
        if (null !== $this->collInvTransferOrdersRelatedByIntbwhseto && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferOrderTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferOrdersRelatedByIntbwhseto = new $collectionClassName;
        $this->collInvTransferOrdersRelatedByIntbwhseto->setModel('\InvTransferOrder');
    }

    /**
     * Gets an array of ChildInvTransferOrder objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferOrder[] List of ChildInvTransferOrder objects
     * @throws PropelException
     */
    public function getInvTransferOrdersRelatedByIntbwhseto(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferOrdersRelatedByIntbwhsetoPartial && !$this->isNew();
        if (null === $this->collInvTransferOrdersRelatedByIntbwhseto || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferOrdersRelatedByIntbwhseto) {
                // return empty collection
                $this->initInvTransferOrdersRelatedByIntbwhseto();
            } else {
                $collInvTransferOrdersRelatedByIntbwhseto = ChildInvTransferOrderQuery::create(null, $criteria)
                    ->filterByWarehouseRelatedByIntbwhseto($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferOrdersRelatedByIntbwhsetoPartial && count($collInvTransferOrdersRelatedByIntbwhseto)) {
                        $this->initInvTransferOrdersRelatedByIntbwhseto(false);

                        foreach ($collInvTransferOrdersRelatedByIntbwhseto as $obj) {
                            if (false == $this->collInvTransferOrdersRelatedByIntbwhseto->contains($obj)) {
                                $this->collInvTransferOrdersRelatedByIntbwhseto->append($obj);
                            }
                        }

                        $this->collInvTransferOrdersRelatedByIntbwhsetoPartial = true;
                    }

                    return $collInvTransferOrdersRelatedByIntbwhseto;
                }

                if ($partial && $this->collInvTransferOrdersRelatedByIntbwhseto) {
                    foreach ($this->collInvTransferOrdersRelatedByIntbwhseto as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferOrdersRelatedByIntbwhseto[] = $obj;
                        }
                    }
                }

                $this->collInvTransferOrdersRelatedByIntbwhseto = $collInvTransferOrdersRelatedByIntbwhseto;
                $this->collInvTransferOrdersRelatedByIntbwhsetoPartial = false;
            }
        }

        return $this->collInvTransferOrdersRelatedByIntbwhseto;
    }

    /**
     * Sets a collection of ChildInvTransferOrder objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferOrdersRelatedByIntbwhseto A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setInvTransferOrdersRelatedByIntbwhseto(Collection $invTransferOrdersRelatedByIntbwhseto, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferOrder[] $invTransferOrdersRelatedByIntbwhsetoToDelete */
        $invTransferOrdersRelatedByIntbwhsetoToDelete = $this->getInvTransferOrdersRelatedByIntbwhseto(new Criteria(), $con)->diff($invTransferOrdersRelatedByIntbwhseto);


        $this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion = $invTransferOrdersRelatedByIntbwhsetoToDelete;

        foreach ($invTransferOrdersRelatedByIntbwhsetoToDelete as $invTransferOrderRelatedByIntbwhsetoRemoved) {
            $invTransferOrderRelatedByIntbwhsetoRemoved->setWarehouseRelatedByIntbwhseto(null);
        }

        $this->collInvTransferOrdersRelatedByIntbwhseto = null;
        foreach ($invTransferOrdersRelatedByIntbwhseto as $invTransferOrderRelatedByIntbwhseto) {
            $this->addInvTransferOrderRelatedByIntbwhseto($invTransferOrderRelatedByIntbwhseto);
        }

        $this->collInvTransferOrdersRelatedByIntbwhseto = $invTransferOrdersRelatedByIntbwhseto;
        $this->collInvTransferOrdersRelatedByIntbwhsetoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferOrder objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferOrder objects.
     * @throws PropelException
     */
    public function countInvTransferOrdersRelatedByIntbwhseto(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferOrdersRelatedByIntbwhsetoPartial && !$this->isNew();
        if (null === $this->collInvTransferOrdersRelatedByIntbwhseto || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferOrdersRelatedByIntbwhseto) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferOrdersRelatedByIntbwhseto());
            }

            $query = ChildInvTransferOrderQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouseRelatedByIntbwhseto($this)
                ->count($con);
        }

        return count($this->collInvTransferOrdersRelatedByIntbwhseto);
    }

    /**
     * Method called to associate a ChildInvTransferOrder object to this object
     * through the ChildInvTransferOrder foreign key attribute.
     *
     * @param  ChildInvTransferOrder $l ChildInvTransferOrder
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addInvTransferOrderRelatedByIntbwhseto(ChildInvTransferOrder $l)
    {
        if ($this->collInvTransferOrdersRelatedByIntbwhseto === null) {
            $this->initInvTransferOrdersRelatedByIntbwhseto();
            $this->collInvTransferOrdersRelatedByIntbwhsetoPartial = true;
        }

        if (!$this->collInvTransferOrdersRelatedByIntbwhseto->contains($l)) {
            $this->doAddInvTransferOrderRelatedByIntbwhseto($l);

            if ($this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion and $this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion->contains($l)) {
                $this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion->remove($this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferOrder $invTransferOrderRelatedByIntbwhseto The ChildInvTransferOrder object to add.
     */
    protected function doAddInvTransferOrderRelatedByIntbwhseto(ChildInvTransferOrder $invTransferOrderRelatedByIntbwhseto)
    {
        $this->collInvTransferOrdersRelatedByIntbwhseto[]= $invTransferOrderRelatedByIntbwhseto;
        $invTransferOrderRelatedByIntbwhseto->setWarehouseRelatedByIntbwhseto($this);
    }

    /**
     * @param  ChildInvTransferOrder $invTransferOrderRelatedByIntbwhseto The ChildInvTransferOrder object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removeInvTransferOrderRelatedByIntbwhseto(ChildInvTransferOrder $invTransferOrderRelatedByIntbwhseto)
    {
        if ($this->getInvTransferOrdersRelatedByIntbwhseto()->contains($invTransferOrderRelatedByIntbwhseto)) {
            $pos = $this->collInvTransferOrdersRelatedByIntbwhseto->search($invTransferOrderRelatedByIntbwhseto);
            $this->collInvTransferOrdersRelatedByIntbwhseto->remove($pos);
            if (null === $this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion) {
                $this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion = clone $this->collInvTransferOrdersRelatedByIntbwhseto;
                $this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion->clear();
            }
            $this->invTransferOrdersRelatedByIntbwhsetoScheduledForDeletion[]= clone $invTransferOrderRelatedByIntbwhseto;
            $invTransferOrderRelatedByIntbwhseto->setWarehouseRelatedByIntbwhseto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvTransferOrdersRelatedByIntbwhseto from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferOrder[] List of ChildInvTransferOrder objects
     */
    public function getInvTransferOrdersRelatedByIntbwhsetoJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferOrderQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getInvTransferOrdersRelatedByIntbwhseto($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvTransferOrdersRelatedByIntbwhseto from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferOrder[] List of ChildInvTransferOrder objects
     */
    public function getInvTransferOrdersRelatedByIntbwhsetoJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferOrderQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getInvTransferOrdersRelatedByIntbwhseto($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related InvTransferOrdersRelatedByIntbwhseto from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferOrder[] List of ChildInvTransferOrder objects
     */
    public function getInvTransferOrdersRelatedByIntbwhsetoJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferOrderQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getInvTransferOrdersRelatedByIntbwhseto($query, $con);
    }

    /**
     * Clears out the collWarehouseInventories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addWarehouseInventories()
     */
    public function clearWarehouseInventories()
    {
        $this->collWarehouseInventories = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collWarehouseInventories collection loaded partially.
     */
    public function resetPartialWarehouseInventories($v = true)
    {
        $this->collWarehouseInventoriesPartial = $v;
    }

    /**
     * Initializes the collWarehouseInventories collection.
     *
     * By default this just sets the collWarehouseInventories collection to an empty array (like clearcollWarehouseInventories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initWarehouseInventories($overrideExisting = true)
    {
        if (null !== $this->collWarehouseInventories && !$overrideExisting) {
            return;
        }

        $collectionClassName = WarehouseInventoryTableMap::getTableMap()->getCollectionClassName();

        $this->collWarehouseInventories = new $collectionClassName;
        $this->collWarehouseInventories->setModel('\WarehouseInventory');
    }

    /**
     * Gets an array of ChildWarehouseInventory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildWarehouseInventory[] List of ChildWarehouseInventory objects
     * @throws PropelException
     */
    public function getWarehouseInventories(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collWarehouseInventoriesPartial && !$this->isNew();
        if (null === $this->collWarehouseInventories || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collWarehouseInventories) {
                // return empty collection
                $this->initWarehouseInventories();
            } else {
                $collWarehouseInventories = ChildWarehouseInventoryQuery::create(null, $criteria)
                    ->filterByWarehouse($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collWarehouseInventoriesPartial && count($collWarehouseInventories)) {
                        $this->initWarehouseInventories(false);

                        foreach ($collWarehouseInventories as $obj) {
                            if (false == $this->collWarehouseInventories->contains($obj)) {
                                $this->collWarehouseInventories->append($obj);
                            }
                        }

                        $this->collWarehouseInventoriesPartial = true;
                    }

                    return $collWarehouseInventories;
                }

                if ($partial && $this->collWarehouseInventories) {
                    foreach ($this->collWarehouseInventories as $obj) {
                        if ($obj->isNew()) {
                            $collWarehouseInventories[] = $obj;
                        }
                    }
                }

                $this->collWarehouseInventories = $collWarehouseInventories;
                $this->collWarehouseInventoriesPartial = false;
            }
        }

        return $this->collWarehouseInventories;
    }

    /**
     * Sets a collection of ChildWarehouseInventory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $warehouseInventories A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setWarehouseInventories(Collection $warehouseInventories, ConnectionInterface $con = null)
    {
        /** @var ChildWarehouseInventory[] $warehouseInventoriesToDelete */
        $warehouseInventoriesToDelete = $this->getWarehouseInventories(new Criteria(), $con)->diff($warehouseInventories);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->warehouseInventoriesScheduledForDeletion = clone $warehouseInventoriesToDelete;

        foreach ($warehouseInventoriesToDelete as $warehouseInventoryRemoved) {
            $warehouseInventoryRemoved->setWarehouse(null);
        }

        $this->collWarehouseInventories = null;
        foreach ($warehouseInventories as $warehouseInventory) {
            $this->addWarehouseInventory($warehouseInventory);
        }

        $this->collWarehouseInventories = $warehouseInventories;
        $this->collWarehouseInventoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related WarehouseInventory objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related WarehouseInventory objects.
     * @throws PropelException
     */
    public function countWarehouseInventories(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collWarehouseInventoriesPartial && !$this->isNew();
        if (null === $this->collWarehouseInventories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collWarehouseInventories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getWarehouseInventories());
            }

            $query = ChildWarehouseInventoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouse($this)
                ->count($con);
        }

        return count($this->collWarehouseInventories);
    }

    /**
     * Method called to associate a ChildWarehouseInventory object to this object
     * through the ChildWarehouseInventory foreign key attribute.
     *
     * @param  ChildWarehouseInventory $l ChildWarehouseInventory
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addWarehouseInventory(ChildWarehouseInventory $l)
    {
        if ($this->collWarehouseInventories === null) {
            $this->initWarehouseInventories();
            $this->collWarehouseInventoriesPartial = true;
        }

        if (!$this->collWarehouseInventories->contains($l)) {
            $this->doAddWarehouseInventory($l);

            if ($this->warehouseInventoriesScheduledForDeletion and $this->warehouseInventoriesScheduledForDeletion->contains($l)) {
                $this->warehouseInventoriesScheduledForDeletion->remove($this->warehouseInventoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildWarehouseInventory $warehouseInventory The ChildWarehouseInventory object to add.
     */
    protected function doAddWarehouseInventory(ChildWarehouseInventory $warehouseInventory)
    {
        $this->collWarehouseInventories[]= $warehouseInventory;
        $warehouseInventory->setWarehouse($this);
    }

    /**
     * @param  ChildWarehouseInventory $warehouseInventory The ChildWarehouseInventory object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removeWarehouseInventory(ChildWarehouseInventory $warehouseInventory)
    {
        if ($this->getWarehouseInventories()->contains($warehouseInventory)) {
            $pos = $this->collWarehouseInventories->search($warehouseInventory);
            $this->collWarehouseInventories->remove($pos);
            if (null === $this->warehouseInventoriesScheduledForDeletion) {
                $this->warehouseInventoriesScheduledForDeletion = clone $this->collWarehouseInventories;
                $this->warehouseInventoriesScheduledForDeletion->clear();
            }
            $this->warehouseInventoriesScheduledForDeletion[]= clone $warehouseInventory;
            $warehouseInventory->setWarehouse(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related WarehouseInventories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildWarehouseInventory[] List of ChildWarehouseInventory objects
     */
    public function getWarehouseInventoriesJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildWarehouseInventoryQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getWarehouseInventories($query, $con);
    }

    /**
     * Clears out the collWarehouseNotes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addWarehouseNotes()
     */
    public function clearWarehouseNotes()
    {
        $this->collWarehouseNotes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collWarehouseNotes collection loaded partially.
     */
    public function resetPartialWarehouseNotes($v = true)
    {
        $this->collWarehouseNotesPartial = $v;
    }

    /**
     * Initializes the collWarehouseNotes collection.
     *
     * By default this just sets the collWarehouseNotes collection to an empty array (like clearcollWarehouseNotes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initWarehouseNotes($overrideExisting = true)
    {
        if (null !== $this->collWarehouseNotes && !$overrideExisting) {
            return;
        }

        $collectionClassName = WarehouseNoteTableMap::getTableMap()->getCollectionClassName();

        $this->collWarehouseNotes = new $collectionClassName;
        $this->collWarehouseNotes->setModel('\WarehouseNote');
    }

    /**
     * Gets an array of ChildWarehouseNote objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildWarehouseNote[] List of ChildWarehouseNote objects
     * @throws PropelException
     */
    public function getWarehouseNotes(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collWarehouseNotesPartial && !$this->isNew();
        if (null === $this->collWarehouseNotes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collWarehouseNotes) {
                // return empty collection
                $this->initWarehouseNotes();
            } else {
                $collWarehouseNotes = ChildWarehouseNoteQuery::create(null, $criteria)
                    ->filterByWarehouse($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collWarehouseNotesPartial && count($collWarehouseNotes)) {
                        $this->initWarehouseNotes(false);

                        foreach ($collWarehouseNotes as $obj) {
                            if (false == $this->collWarehouseNotes->contains($obj)) {
                                $this->collWarehouseNotes->append($obj);
                            }
                        }

                        $this->collWarehouseNotesPartial = true;
                    }

                    return $collWarehouseNotes;
                }

                if ($partial && $this->collWarehouseNotes) {
                    foreach ($this->collWarehouseNotes as $obj) {
                        if ($obj->isNew()) {
                            $collWarehouseNotes[] = $obj;
                        }
                    }
                }

                $this->collWarehouseNotes = $collWarehouseNotes;
                $this->collWarehouseNotesPartial = false;
            }
        }

        return $this->collWarehouseNotes;
    }

    /**
     * Sets a collection of ChildWarehouseNote objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $warehouseNotes A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setWarehouseNotes(Collection $warehouseNotes, ConnectionInterface $con = null)
    {
        /** @var ChildWarehouseNote[] $warehouseNotesToDelete */
        $warehouseNotesToDelete = $this->getWarehouseNotes(new Criteria(), $con)->diff($warehouseNotes);


        $this->warehouseNotesScheduledForDeletion = $warehouseNotesToDelete;

        foreach ($warehouseNotesToDelete as $warehouseNoteRemoved) {
            $warehouseNoteRemoved->setWarehouse(null);
        }

        $this->collWarehouseNotes = null;
        foreach ($warehouseNotes as $warehouseNote) {
            $this->addWarehouseNote($warehouseNote);
        }

        $this->collWarehouseNotes = $warehouseNotes;
        $this->collWarehouseNotesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related WarehouseNote objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related WarehouseNote objects.
     * @throws PropelException
     */
    public function countWarehouseNotes(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collWarehouseNotesPartial && !$this->isNew();
        if (null === $this->collWarehouseNotes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collWarehouseNotes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getWarehouseNotes());
            }

            $query = ChildWarehouseNoteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouse($this)
                ->count($con);
        }

        return count($this->collWarehouseNotes);
    }

    /**
     * Method called to associate a ChildWarehouseNote object to this object
     * through the ChildWarehouseNote foreign key attribute.
     *
     * @param  ChildWarehouseNote $l ChildWarehouseNote
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addWarehouseNote(ChildWarehouseNote $l)
    {
        if ($this->collWarehouseNotes === null) {
            $this->initWarehouseNotes();
            $this->collWarehouseNotesPartial = true;
        }

        if (!$this->collWarehouseNotes->contains($l)) {
            $this->doAddWarehouseNote($l);

            if ($this->warehouseNotesScheduledForDeletion and $this->warehouseNotesScheduledForDeletion->contains($l)) {
                $this->warehouseNotesScheduledForDeletion->remove($this->warehouseNotesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildWarehouseNote $warehouseNote The ChildWarehouseNote object to add.
     */
    protected function doAddWarehouseNote(ChildWarehouseNote $warehouseNote)
    {
        $this->collWarehouseNotes[]= $warehouseNote;
        $warehouseNote->setWarehouse($this);
    }

    /**
     * @param  ChildWarehouseNote $warehouseNote The ChildWarehouseNote object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removeWarehouseNote(ChildWarehouseNote $warehouseNote)
    {
        if ($this->getWarehouseNotes()->contains($warehouseNote)) {
            $pos = $this->collWarehouseNotes->search($warehouseNote);
            $this->collWarehouseNotes->remove($pos);
            if (null === $this->warehouseNotesScheduledForDeletion) {
                $this->warehouseNotesScheduledForDeletion = clone $this->collWarehouseNotes;
                $this->warehouseNotesScheduledForDeletion->clear();
            }
            $this->warehouseNotesScheduledForDeletion[]= $warehouseNote;
            $warehouseNote->setWarehouse(null);
        }

        return $this;
    }

    /**
     * Clears out the collPoReceivingHeads collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPoReceivingHeads()
     */
    public function clearPoReceivingHeads()
    {
        $this->collPoReceivingHeads = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPoReceivingHeads collection loaded partially.
     */
    public function resetPartialPoReceivingHeads($v = true)
    {
        $this->collPoReceivingHeadsPartial = $v;
    }

    /**
     * Initializes the collPoReceivingHeads collection.
     *
     * By default this just sets the collPoReceivingHeads collection to an empty array (like clearcollPoReceivingHeads());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPoReceivingHeads($overrideExisting = true)
    {
        if (null !== $this->collPoReceivingHeads && !$overrideExisting) {
            return;
        }

        $collectionClassName = PoReceivingHeadTableMap::getTableMap()->getCollectionClassName();

        $this->collPoReceivingHeads = new $collectionClassName;
        $this->collPoReceivingHeads->setModel('\PoReceivingHead');
    }

    /**
     * Gets an array of ChildPoReceivingHead objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildWarehouse is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPoReceivingHead[] List of ChildPoReceivingHead objects
     * @throws PropelException
     */
    public function getPoReceivingHeads(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPoReceivingHeadsPartial && !$this->isNew();
        if (null === $this->collPoReceivingHeads || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPoReceivingHeads) {
                // return empty collection
                $this->initPoReceivingHeads();
            } else {
                $collPoReceivingHeads = ChildPoReceivingHeadQuery::create(null, $criteria)
                    ->filterByWarehouse($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPoReceivingHeadsPartial && count($collPoReceivingHeads)) {
                        $this->initPoReceivingHeads(false);

                        foreach ($collPoReceivingHeads as $obj) {
                            if (false == $this->collPoReceivingHeads->contains($obj)) {
                                $this->collPoReceivingHeads->append($obj);
                            }
                        }

                        $this->collPoReceivingHeadsPartial = true;
                    }

                    return $collPoReceivingHeads;
                }

                if ($partial && $this->collPoReceivingHeads) {
                    foreach ($this->collPoReceivingHeads as $obj) {
                        if ($obj->isNew()) {
                            $collPoReceivingHeads[] = $obj;
                        }
                    }
                }

                $this->collPoReceivingHeads = $collPoReceivingHeads;
                $this->collPoReceivingHeadsPartial = false;
            }
        }

        return $this->collPoReceivingHeads;
    }

    /**
     * Sets a collection of ChildPoReceivingHead objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $poReceivingHeads A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function setPoReceivingHeads(Collection $poReceivingHeads, ConnectionInterface $con = null)
    {
        /** @var ChildPoReceivingHead[] $poReceivingHeadsToDelete */
        $poReceivingHeadsToDelete = $this->getPoReceivingHeads(new Criteria(), $con)->diff($poReceivingHeads);


        $this->poReceivingHeadsScheduledForDeletion = $poReceivingHeadsToDelete;

        foreach ($poReceivingHeadsToDelete as $poReceivingHeadRemoved) {
            $poReceivingHeadRemoved->setWarehouse(null);
        }

        $this->collPoReceivingHeads = null;
        foreach ($poReceivingHeads as $poReceivingHead) {
            $this->addPoReceivingHead($poReceivingHead);
        }

        $this->collPoReceivingHeads = $poReceivingHeads;
        $this->collPoReceivingHeadsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PoReceivingHead objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PoReceivingHead objects.
     * @throws PropelException
     */
    public function countPoReceivingHeads(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPoReceivingHeadsPartial && !$this->isNew();
        if (null === $this->collPoReceivingHeads || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPoReceivingHeads) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPoReceivingHeads());
            }

            $query = ChildPoReceivingHeadQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByWarehouse($this)
                ->count($con);
        }

        return count($this->collPoReceivingHeads);
    }

    /**
     * Method called to associate a ChildPoReceivingHead object to this object
     * through the ChildPoReceivingHead foreign key attribute.
     *
     * @param  ChildPoReceivingHead $l ChildPoReceivingHead
     * @return $this|\Warehouse The current object (for fluent API support)
     */
    public function addPoReceivingHead(ChildPoReceivingHead $l)
    {
        if ($this->collPoReceivingHeads === null) {
            $this->initPoReceivingHeads();
            $this->collPoReceivingHeadsPartial = true;
        }

        if (!$this->collPoReceivingHeads->contains($l)) {
            $this->doAddPoReceivingHead($l);

            if ($this->poReceivingHeadsScheduledForDeletion and $this->poReceivingHeadsScheduledForDeletion->contains($l)) {
                $this->poReceivingHeadsScheduledForDeletion->remove($this->poReceivingHeadsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPoReceivingHead $poReceivingHead The ChildPoReceivingHead object to add.
     */
    protected function doAddPoReceivingHead(ChildPoReceivingHead $poReceivingHead)
    {
        $this->collPoReceivingHeads[]= $poReceivingHead;
        $poReceivingHead->setWarehouse($this);
    }

    /**
     * @param  ChildPoReceivingHead $poReceivingHead The ChildPoReceivingHead object to remove.
     * @return $this|ChildWarehouse The current object (for fluent API support)
     */
    public function removePoReceivingHead(ChildPoReceivingHead $poReceivingHead)
    {
        if ($this->getPoReceivingHeads()->contains($poReceivingHead)) {
            $pos = $this->collPoReceivingHeads->search($poReceivingHead);
            $this->collPoReceivingHeads->remove($pos);
            if (null === $this->poReceivingHeadsScheduledForDeletion) {
                $this->poReceivingHeadsScheduledForDeletion = clone $this->collPoReceivingHeads;
                $this->poReceivingHeadsScheduledForDeletion->clear();
            }
            $this->poReceivingHeadsScheduledForDeletion[]= clone $poReceivingHead;
            $poReceivingHead->setWarehouse(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Warehouse is new, it will return
     * an empty collection; or if this Warehouse has previously
     * been saved, it will retrieve related PoReceivingHeads from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Warehouse.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPoReceivingHead[] List of ChildPoReceivingHead objects
     */
    public function getPoReceivingHeadsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPoReceivingHeadQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPoReceivingHeads($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->intbwhse = null;
        $this->intbwhsename = null;
        $this->intbwhseadr1 = null;
        $this->intbwhseadr2 = null;
        $this->intbwhsecity = null;
        $this->intbwhsestat = null;
        $this->intbwhsezipcode = null;
        $this->intbwhsectry = null;
        $this->intbwhseusehandheld = null;
        $this->intbwhsecashcust = null;
        $this->intbwhsepickdtl = null;
        $this->intbwhseprodbin = null;
        $this->intbwhsepharea = null;
        $this->intbwhsephfrst3 = null;
        $this->intbwhsephlast4 = null;
        $this->intbwhsephext = null;
        $this->intbwhsefaxarea = null;
        $this->intbwhsefaxfrst3 = null;
        $this->intbwhsefaxlast4 = null;
        $this->intbwhseemailadr = null;
        $this->intbwhseqcrgabin = null;
        $this->intbwhserfprinter1 = null;
        $this->intbwhserfprinter2 = null;
        $this->intbwhserfprinter3 = null;
        $this->intbwhserfprinter4 = null;
        $this->intbwhserfprinter5 = null;
        $this->intbwhseprofwhse = null;
        $this->intbwhseasetwhse = null;
        $this->intbwhseconsignwhse = null;
        $this->intbwhsebinrangelist = null;
        $this->intbwhsesupplywhse = null;
        $this->intbwhseareasplit = null;
        $this->intbwhsercvbincode = null;
        $this->intbwhsercvbin = null;
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
            if ($this->collInvWhseItemBins) {
                foreach ($this->collInvWhseItemBins as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collWarehouseBins) {
                foreach ($this->collWarehouseBins as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvWhseLots) {
                foreach ($this->collInvWhseLots as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvLotTags) {
                foreach ($this->collInvLotTags as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferOrdersRelatedByIntbwhsefrom) {
                foreach ($this->collInvTransferOrdersRelatedByIntbwhsefrom as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferOrdersRelatedByIntbwhseto) {
                foreach ($this->collInvTransferOrdersRelatedByIntbwhseto as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collWarehouseInventories) {
                foreach ($this->collWarehouseInventories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collWarehouseNotes) {
                foreach ($this->collWarehouseNotes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPoReceivingHeads) {
                foreach ($this->collPoReceivingHeads as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collInvWhseItemBins = null;
        $this->collWarehouseBins = null;
        $this->collInvWhseLots = null;
        $this->collInvLotTags = null;
        $this->collInvTransferOrdersRelatedByIntbwhsefrom = null;
        $this->collInvTransferOrdersRelatedByIntbwhseto = null;
        $this->collWarehouseInventories = null;
        $this->collWarehouseNotes = null;
        $this->collPoReceivingHeads = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(WarehouseTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preSave')) {
        //     return parent::preSave($con);
        // }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postSave')) {
        //     parent::postSave($con);
        // }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preInsert')) {
        //     return parent::preInsert($con);
        // }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postInsert')) {
        //     parent::postInsert($con);
        // }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preUpdate')) {
        //     return parent::preUpdate($con);
        // }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postUpdate')) {
        //     parent::postUpdate($con);
        // }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preDelete')) {
        //     return parent::preDelete($con);
        // }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postDelete')) {
        //     parent::postDelete($con);
        // }
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
