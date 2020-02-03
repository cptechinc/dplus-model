<?php

namespace Base;

use \InvCommissionCode as ChildInvCommissionCode;
use \InvCommissionCodeQuery as ChildInvCommissionCodeQuery;
use \InvGroupCode as ChildInvGroupCode;
use \InvGroupCodeQuery as ChildInvGroupCodeQuery;
use \InvPriceCode as ChildInvPriceCode;
use \InvPriceCodeQuery as ChildInvPriceCodeQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItemXrefUpc as ChildItemXrefUpc;
use \ItemXrefUpcQuery as ChildItemXrefUpcQuery;
use \ItemXrefVendor as ChildItemXrefVendor;
use \ItemXrefVendorQuery as ChildItemXrefVendorQuery;
use \UnitofMeasurePurchase as ChildUnitofMeasurePurchase;
use \UnitofMeasurePurchaseQuery as ChildUnitofMeasurePurchaseQuery;
use \UnitofMeasureSale as ChildUnitofMeasureSale;
use \UnitofMeasureSaleQuery as ChildUnitofMeasureSaleQuery;
use \Exception;
use \PDO;
use Map\ItemMasterItemTableMap;
use Map\ItemXrefUpcTableMap;
use Map\ItemXrefVendorTableMap;
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
 * Base class that represents a row from the 'inv_item_mast' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItemMasterItem implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItemMasterItemTableMap';


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
     * The value for the initdesc1 field.
     *
     * @var        string
     */
    protected $initdesc1;

    /**
     * The value for the initdesc2 field.
     *
     * @var        string
     */
    protected $initdesc2;

    /**
     * The value for the intbgrup field.
     *
     * @var        string
     */
    protected $intbgrup;

    /**
     * The value for the initformatcode field.
     *
     * @var        string
     */
    protected $initformatcode;

    /**
     * The value for the initsplit field.
     *
     * @var        string
     */
    protected $initsplit;

    /**
     * The value for the initsherdatecd field.
     *
     * @var        string
     */
    protected $initsherdatecd;

    /**
     * The value for the initcoreyn field.
     *
     * @var        string
     */
    protected $initcoreyn;

    /**
     * The value for the intbusercode1 field.
     *
     * @var        string
     */
    protected $intbusercode1;

    /**
     * The value for the intbusercode2 field.
     *
     * @var        string
     */
    protected $intbusercode2;

    /**
     * The value for the inittype field.
     *
     * @var        string
     */
    protected $inittype;

    /**
     * The value for the inittax field.
     *
     * @var        string
     */
    protected $inittax;

    /**
     * The value for the initrtlpric field.
     *
     * @var        string
     */
    protected $initrtlpric;

    /**
     * The value for the initstatchgd field.
     *
     * @var        string
     */
    protected $initstatchgd;

    /**
     * The value for the initspecitemcd field.
     *
     * @var        string
     */
    protected $initspecitemcd;

    /**
     * The value for the initwarrdays field.
     *
     * @var        int
     */
    protected $initwarrdays;

    /**
     * The value for the intbuomsale field.
     *
     * @var        string
     */
    protected $intbuomsale;

    /**
     * The value for the initwght field.
     *
     * @var        string
     */
    protected $initwght;

    /**
     * The value for the initbord field.
     *
     * @var        string
     */
    protected $initbord;

    /**
     * The value for the initbaseitemid field.
     *
     * @var        string
     */
    protected $initbaseitemid;

    /**
     * The value for the initspecificcust field.
     *
     * @var        string
     */
    protected $initspecificcust;

    /**
     * The value for the initgivedisc field.
     *
     * @var        string
     */
    protected $initgivedisc;

    /**
     * The value for the initasstcode field.
     *
     * @var        string
     */
    protected $initasstcode;

    /**
     * The value for the initpriclastdate field.
     *
     * @var        string
     */
    protected $initpriclastdate;

    /**
     * The value for the intbuompur field.
     *
     * @var        string
     */
    protected $intbuompur;

    /**
     * The value for the initstancost field.
     *
     * @var        string
     */
    protected $initstancost;

    /**
     * The value for the initstancostbase field.
     *
     * @var        string
     */
    protected $initstancostbase;

    /**
     * The value for the initstancostlastdate field.
     *
     * @var        string
     */
    protected $initstancostlastdate;

    /**
     * The value for the initminmarg field.
     *
     * @var        string
     */
    protected $initminmarg;

    /**
     * The value for the initvendid field.
     *
     * @var        string
     */
    protected $initvendid;

    /**
     * The value for the initinspect field.
     *
     * @var        string
     */
    protected $initinspect;

    /**
     * The value for the initstockcode field.
     *
     * @var        string
     */
    protected $initstockcode;

    /**
     * The value for the initsupritemnbr field.
     *
     * @var        string
     */
    protected $initsupritemnbr;

    /**
     * The value for the initvendshipfrom field.
     *
     * @var        string
     */
    protected $initvendshipfrom;

    /**
     * The value for the initcntryoforigin field.
     *
     * @var        string
     */
    protected $initcntryoforigin;

    /**
     * The value for the initasstqty field.
     *
     * @var        string
     */
    protected $initasstqty;

    /**
     * The value for the intbtariffcode field.
     *
     * @var        string
     */
    protected $intbtariffcode;

    /**
     * The value for the initpreference field.
     *
     * @var        string
     */
    protected $initpreference;

    /**
     * The value for the initproducer field.
     *
     * @var        string
     */
    protected $initproducer;

    /**
     * The value for the initdocumentation field.
     *
     * @var        string
     */
    protected $initdocumentation;

    /**
     * The value for the initpurchcrtnqty field.
     *
     * @var        int
     */
    protected $initpurchcrtnqty;

    /**
     * The value for the aptbbuyrcode field.
     *
     * @var        string
     */
    protected $aptbbuyrcode;

    /**
     * The value for the initlastcost field.
     *
     * @var        string
     */
    protected $initlastcost;

    /**
     * The value for the initliters field.
     *
     * @var        string
     */
    protected $initliters;

    /**
     * The value for the intbmsdscode field.
     *
     * @var        string
     */
    protected $intbmsdscode;

    /**
     * The value for the initrequirefrt field.
     *
     * @var        string
     */
    protected $initrequirefrt;

    /**
     * The value for the initmfrtcode field.
     *
     * @var        string
     */
    protected $initmfrtcode;

    /**
     * The value for the initinnerpackqty field.
     *
     * @var        int
     */
    protected $initinnerpackqty;

    /**
     * The value for the initouterpackqty field.
     *
     * @var        int
     */
    protected $initouterpackqty;

    /**
     * The value for the initbasestancost field.
     *
     * @var        string
     */
    protected $initbasestancost;

    /**
     * The value for the initshiptareqty field.
     *
     * @var        int
     */
    protected $initshiptareqty;

    /**
     * The value for the initwgitem field.
     *
     * @var        string
     */
    protected $initwgitem;

    /**
     * The value for the intbpricgrup field.
     *
     * @var        string
     */
    protected $intbpricgrup;

    /**
     * The value for the intbcommgrup field.
     *
     * @var        string
     */
    protected $intbcommgrup;

    /**
     * The value for the initlastcostdate field.
     *
     * @var        string
     */
    protected $initlastcostdate;

    /**
     * The value for the initqtypercase field.
     *
     * @var        int
     */
    protected $initqtypercase;

    /**
     * The value for the initrevision field.
     *
     * @var        string
     */
    protected $initrevision;

    /**
     * The value for the initcommsaleqty field.
     *
     * @var        int
     */
    protected $initcommsaleqty;

    /**
     * The value for the initcubes field.
     *
     * @var        string
     */
    protected $initcubes;

    /**
     * The value for the inittimefence field.
     *
     * @var        int
     */
    protected $inittimefence;

    /**
     * The value for the initsrvcminchrg field.
     *
     * @var        string
     */
    protected $initsrvcminchrg;

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
     * @var        ChildUnitofMeasureSale
     */
    protected $aUnitofMeasureSale;

    /**
     * @var        ChildUnitofMeasurePurchase
     */
    protected $aUnitofMeasurePurchase;

    /**
     * @var        ChildInvGroupCode
     */
    protected $aInvGroupCode;

    /**
     * @var        ChildInvPriceCode
     */
    protected $aInvPriceCode;

    /**
     * @var        ChildInvCommissionCode
     */
    protected $aInvCommissionCode;

    /**
     * @var        ObjectCollection|ChildItemXrefUpc[] Collection to store aggregation of ChildItemXrefUpc objects.
     */
    protected $collItemXrefUpcs;
    protected $collItemXrefUpcsPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefVendor[] Collection to store aggregation of ChildItemXrefVendor objects.
     */
    protected $collItemXrefVendors;
    protected $collItemXrefVendorsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefUpc[]
     */
    protected $itemXrefUpcsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefVendor[]
     */
    protected $itemXrefVendorsScheduledForDeletion = null;

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
     * Initializes internal state of Base\ItemMasterItem object.
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
     * Compares this with another <code>ItemMasterItem</code> instance.  If
     * <code>obj</code> is an instance of <code>ItemMasterItem</code>, delegates to
     * <code>equals(ItemMasterItem)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ItemMasterItem The current object, for fluid interface
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
     * Get the [initdesc1] column value.
     *
     * @return string
     */
    public function getInitdesc1()
    {
        return $this->initdesc1;
    }

    /**
     * Get the [initdesc2] column value.
     *
     * @return string
     */
    public function getInitdesc2()
    {
        return $this->initdesc2;
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
     * Get the [initformatcode] column value.
     *
     * @return string
     */
    public function getInitformatcode()
    {
        return $this->initformatcode;
    }

    /**
     * Get the [initsplit] column value.
     *
     * @return string
     */
    public function getInitsplit()
    {
        return $this->initsplit;
    }

    /**
     * Get the [initsherdatecd] column value.
     *
     * @return string
     */
    public function getInitsherdatecd()
    {
        return $this->initsherdatecd;
    }

    /**
     * Get the [initcoreyn] column value.
     *
     * @return string
     */
    public function getInitcoreyn()
    {
        return $this->initcoreyn;
    }

    /**
     * Get the [intbusercode1] column value.
     *
     * @return string
     */
    public function getIntbusercode1()
    {
        return $this->intbusercode1;
    }

    /**
     * Get the [intbusercode2] column value.
     *
     * @return string
     */
    public function getIntbusercode2()
    {
        return $this->intbusercode2;
    }

    /**
     * Get the [inittype] column value.
     *
     * @return string
     */
    public function getInittype()
    {
        return $this->inittype;
    }

    /**
     * Get the [inittax] column value.
     *
     * @return string
     */
    public function getInittax()
    {
        return $this->inittax;
    }

    /**
     * Get the [initrtlpric] column value.
     *
     * @return string
     */
    public function getInitrtlpric()
    {
        return $this->initrtlpric;
    }

    /**
     * Get the [initstatchgd] column value.
     *
     * @return string
     */
    public function getInitstatchgd()
    {
        return $this->initstatchgd;
    }

    /**
     * Get the [initspecitemcd] column value.
     *
     * @return string
     */
    public function getInitspecitemcd()
    {
        return $this->initspecitemcd;
    }

    /**
     * Get the [initwarrdays] column value.
     *
     * @return int
     */
    public function getInitwarrdays()
    {
        return $this->initwarrdays;
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
     * Get the [initwght] column value.
     *
     * @return string
     */
    public function getInitwght()
    {
        return $this->initwght;
    }

    /**
     * Get the [initbord] column value.
     *
     * @return string
     */
    public function getInitbord()
    {
        return $this->initbord;
    }

    /**
     * Get the [initbaseitemid] column value.
     *
     * @return string
     */
    public function getInitbaseitemid()
    {
        return $this->initbaseitemid;
    }

    /**
     * Get the [initspecificcust] column value.
     *
     * @return string
     */
    public function getInitspecificcust()
    {
        return $this->initspecificcust;
    }

    /**
     * Get the [initgivedisc] column value.
     *
     * @return string
     */
    public function getInitgivedisc()
    {
        return $this->initgivedisc;
    }

    /**
     * Get the [initasstcode] column value.
     *
     * @return string
     */
    public function getInitasstcode()
    {
        return $this->initasstcode;
    }

    /**
     * Get the [initpriclastdate] column value.
     *
     * @return string
     */
    public function getInitpriclastdate()
    {
        return $this->initpriclastdate;
    }

    /**
     * Get the [intbuompur] column value.
     *
     * @return string
     */
    public function getIntbuompur()
    {
        return $this->intbuompur;
    }

    /**
     * Get the [initstancost] column value.
     *
     * @return string
     */
    public function getInitstancost()
    {
        return $this->initstancost;
    }

    /**
     * Get the [initstancostbase] column value.
     *
     * @return string
     */
    public function getInitstancostbase()
    {
        return $this->initstancostbase;
    }

    /**
     * Get the [initstancostlastdate] column value.
     *
     * @return string
     */
    public function getInitstancostlastdate()
    {
        return $this->initstancostlastdate;
    }

    /**
     * Get the [initminmarg] column value.
     *
     * @return string
     */
    public function getInitminmarg()
    {
        return $this->initminmarg;
    }

    /**
     * Get the [initvendid] column value.
     *
     * @return string
     */
    public function getInitvendid()
    {
        return $this->initvendid;
    }

    /**
     * Get the [initinspect] column value.
     *
     * @return string
     */
    public function getInitinspect()
    {
        return $this->initinspect;
    }

    /**
     * Get the [initstockcode] column value.
     *
     * @return string
     */
    public function getInitstockcode()
    {
        return $this->initstockcode;
    }

    /**
     * Get the [initsupritemnbr] column value.
     *
     * @return string
     */
    public function getInitsupritemnbr()
    {
        return $this->initsupritemnbr;
    }

    /**
     * Get the [initvendshipfrom] column value.
     *
     * @return string
     */
    public function getInitvendshipfrom()
    {
        return $this->initvendshipfrom;
    }

    /**
     * Get the [initcntryoforigin] column value.
     *
     * @return string
     */
    public function getInitcntryoforigin()
    {
        return $this->initcntryoforigin;
    }

    /**
     * Get the [initasstqty] column value.
     *
     * @return string
     */
    public function getInitasstqty()
    {
        return $this->initasstqty;
    }

    /**
     * Get the [intbtariffcode] column value.
     *
     * @return string
     */
    public function getIntbtariffcode()
    {
        return $this->intbtariffcode;
    }

    /**
     * Get the [initpreference] column value.
     *
     * @return string
     */
    public function getInitpreference()
    {
        return $this->initpreference;
    }

    /**
     * Get the [initproducer] column value.
     *
     * @return string
     */
    public function getInitproducer()
    {
        return $this->initproducer;
    }

    /**
     * Get the [initdocumentation] column value.
     *
     * @return string
     */
    public function getInitdocumentation()
    {
        return $this->initdocumentation;
    }

    /**
     * Get the [initpurchcrtnqty] column value.
     *
     * @return int
     */
    public function getInitpurchcrtnqty()
    {
        return $this->initpurchcrtnqty;
    }

    /**
     * Get the [aptbbuyrcode] column value.
     *
     * @return string
     */
    public function getAptbbuyrcode()
    {
        return $this->aptbbuyrcode;
    }

    /**
     * Get the [initlastcost] column value.
     *
     * @return string
     */
    public function getInitlastcost()
    {
        return $this->initlastcost;
    }

    /**
     * Get the [initliters] column value.
     *
     * @return string
     */
    public function getInitliters()
    {
        return $this->initliters;
    }

    /**
     * Get the [intbmsdscode] column value.
     *
     * @return string
     */
    public function getIntbmsdscode()
    {
        return $this->intbmsdscode;
    }

    /**
     * Get the [initrequirefrt] column value.
     *
     * @return string
     */
    public function getInitrequirefrt()
    {
        return $this->initrequirefrt;
    }

    /**
     * Get the [initmfrtcode] column value.
     *
     * @return string
     */
    public function getInitmfrtcode()
    {
        return $this->initmfrtcode;
    }

    /**
     * Get the [initinnerpackqty] column value.
     *
     * @return int
     */
    public function getInitinnerpackqty()
    {
        return $this->initinnerpackqty;
    }

    /**
     * Get the [initouterpackqty] column value.
     *
     * @return int
     */
    public function getInitouterpackqty()
    {
        return $this->initouterpackqty;
    }

    /**
     * Get the [initbasestancost] column value.
     *
     * @return string
     */
    public function getInitbasestancost()
    {
        return $this->initbasestancost;
    }

    /**
     * Get the [initshiptareqty] column value.
     *
     * @return int
     */
    public function getInitshiptareqty()
    {
        return $this->initshiptareqty;
    }

    /**
     * Get the [initwgitem] column value.
     *
     * @return string
     */
    public function getInitwgitem()
    {
        return $this->initwgitem;
    }

    /**
     * Get the [intbpricgrup] column value.
     *
     * @return string
     */
    public function getIntbpricgrup()
    {
        return $this->intbpricgrup;
    }

    /**
     * Get the [intbcommgrup] column value.
     *
     * @return string
     */
    public function getIntbcommgrup()
    {
        return $this->intbcommgrup;
    }

    /**
     * Get the [initlastcostdate] column value.
     *
     * @return string
     */
    public function getInitlastcostdate()
    {
        return $this->initlastcostdate;
    }

    /**
     * Get the [initqtypercase] column value.
     *
     * @return int
     */
    public function getInitqtypercase()
    {
        return $this->initqtypercase;
    }

    /**
     * Get the [initrevision] column value.
     *
     * @return string
     */
    public function getInitrevision()
    {
        return $this->initrevision;
    }

    /**
     * Get the [initcommsaleqty] column value.
     *
     * @return int
     */
    public function getInitcommsaleqty()
    {
        return $this->initcommsaleqty;
    }

    /**
     * Get the [initcubes] column value.
     *
     * @return string
     */
    public function getInitcubes()
    {
        return $this->initcubes;
    }

    /**
     * Get the [inittimefence] column value.
     *
     * @return int
     */
    public function getInittimefence()
    {
        return $this->inittimefence;
    }

    /**
     * Get the [initsrvcminchrg] column value.
     *
     * @return string
     */
    public function getInitsrvcminchrg()
    {
        return $this->initsrvcminchrg;
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
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [initdesc1] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitdesc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initdesc1 !== $v) {
            $this->initdesc1 = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITDESC1] = true;
        }

        return $this;
    } // setInitdesc1()

    /**
     * Set the value of [initdesc2] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initdesc2 !== $v) {
            $this->initdesc2 = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITDESC2] = true;
        }

        return $this;
    } // setInitdesc2()

    /**
     * Set the value of [intbgrup] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrup !== $v) {
            $this->intbgrup = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBGRUP] = true;
        }

        if ($this->aInvGroupCode !== null && $this->aInvGroupCode->getIntbgrup() !== $v) {
            $this->aInvGroupCode = null;
        }

        return $this;
    } // setIntbgrup()

    /**
     * Set the value of [initformatcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitformatcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initformatcode !== $v) {
            $this->initformatcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITFORMATCODE] = true;
        }

        return $this;
    } // setInitformatcode()

    /**
     * Set the value of [initsplit] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitsplit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initsplit !== $v) {
            $this->initsplit = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSPLIT] = true;
        }

        return $this;
    } // setInitsplit()

    /**
     * Set the value of [initsherdatecd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitsherdatecd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initsherdatecd !== $v) {
            $this->initsherdatecd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSHERDATECD] = true;
        }

        return $this;
    } // setInitsherdatecd()

    /**
     * Set the value of [initcoreyn] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitcoreyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initcoreyn !== $v) {
            $this->initcoreyn = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITCOREYN] = true;
        }

        return $this;
    } // setInitcoreyn()

    /**
     * Set the value of [intbusercode1] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbusercode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbusercode1 !== $v) {
            $this->intbusercode1 = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBUSERCODE1] = true;
        }

        return $this;
    } // setIntbusercode1()

    /**
     * Set the value of [intbusercode2] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbusercode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbusercode2 !== $v) {
            $this->intbusercode2 = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBUSERCODE2] = true;
        }

        return $this;
    } // setIntbusercode2()

    /**
     * Set the value of [inittype] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInittype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inittype !== $v) {
            $this->inittype = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITTYPE] = true;
        }

        return $this;
    } // setInittype()

    /**
     * Set the value of [inittax] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInittax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inittax !== $v) {
            $this->inittax = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITTAX] = true;
        }

        return $this;
    } // setInittax()

    /**
     * Set the value of [initrtlpric] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitrtlpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initrtlpric !== $v) {
            $this->initrtlpric = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITRTLPRIC] = true;
        }

        return $this;
    } // setInitrtlpric()

    /**
     * Set the value of [initstatchgd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstatchgd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstatchgd !== $v) {
            $this->initstatchgd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTATCHGD] = true;
        }

        return $this;
    } // setInitstatchgd()

    /**
     * Set the value of [initspecitemcd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitspecitemcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initspecitemcd !== $v) {
            $this->initspecitemcd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSPECITEMCD] = true;
        }

        return $this;
    } // setInitspecitemcd()

    /**
     * Set the value of [initwarrdays] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitwarrdays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initwarrdays !== $v) {
            $this->initwarrdays = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITWARRDAYS] = true;
        }

        return $this;
    } // setInitwarrdays()

    /**
     * Set the value of [intbuomsale] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbuomsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuomsale !== $v) {
            $this->intbuomsale = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBUOMSALE] = true;
        }

        if ($this->aUnitofMeasureSale !== null && $this->aUnitofMeasureSale->getIntbuomsale() !== $v) {
            $this->aUnitofMeasureSale = null;
        }

        return $this;
    } // setIntbuomsale()

    /**
     * Set the value of [initwght] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initwght !== $v) {
            $this->initwght = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITWGHT] = true;
        }

        return $this;
    } // setInitwght()

    /**
     * Set the value of [initbord] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitbord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initbord !== $v) {
            $this->initbord = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITBORD] = true;
        }

        return $this;
    } // setInitbord()

    /**
     * Set the value of [initbaseitemid] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitbaseitemid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initbaseitemid !== $v) {
            $this->initbaseitemid = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITBASEITEMID] = true;
        }

        return $this;
    } // setInitbaseitemid()

    /**
     * Set the value of [initspecificcust] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitspecificcust($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initspecificcust !== $v) {
            $this->initspecificcust = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSPECIFICCUST] = true;
        }

        return $this;
    } // setInitspecificcust()

    /**
     * Set the value of [initgivedisc] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitgivedisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initgivedisc !== $v) {
            $this->initgivedisc = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITGIVEDISC] = true;
        }

        return $this;
    } // setInitgivedisc()

    /**
     * Set the value of [initasstcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitasstcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initasstcode !== $v) {
            $this->initasstcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITASSTCODE] = true;
        }

        return $this;
    } // setInitasstcode()

    /**
     * Set the value of [initpriclastdate] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitpriclastdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initpriclastdate !== $v) {
            $this->initpriclastdate = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITPRICLASTDATE] = true;
        }

        return $this;
    } // setInitpriclastdate()

    /**
     * Set the value of [intbuompur] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbuompur($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuompur !== $v) {
            $this->intbuompur = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBUOMPUR] = true;
        }

        if ($this->aUnitofMeasurePurchase !== null && $this->aUnitofMeasurePurchase->getIntbuompur() !== $v) {
            $this->aUnitofMeasurePurchase = null;
        }

        return $this;
    } // setIntbuompur()

    /**
     * Set the value of [initstancost] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstancost !== $v) {
            $this->initstancost = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTANCOST] = true;
        }

        return $this;
    } // setInitstancost()

    /**
     * Set the value of [initstancostbase] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstancostbase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstancostbase !== $v) {
            $this->initstancostbase = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTANCOSTBASE] = true;
        }

        return $this;
    } // setInitstancostbase()

    /**
     * Set the value of [initstancostlastdate] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstancostlastdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstancostlastdate !== $v) {
            $this->initstancostlastdate = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE] = true;
        }

        return $this;
    } // setInitstancostlastdate()

    /**
     * Set the value of [initminmarg] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitminmarg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initminmarg !== $v) {
            $this->initminmarg = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITMINMARG] = true;
        }

        return $this;
    } // setInitminmarg()

    /**
     * Set the value of [initvendid] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initvendid !== $v) {
            $this->initvendid = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITVENDID] = true;
        }

        return $this;
    } // setInitvendid()

    /**
     * Set the value of [initinspect] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitinspect($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initinspect !== $v) {
            $this->initinspect = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITINSPECT] = true;
        }

        return $this;
    } // setInitinspect()

    /**
     * Set the value of [initstockcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstockcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstockcode !== $v) {
            $this->initstockcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTOCKCODE] = true;
        }

        return $this;
    } // setInitstockcode()

    /**
     * Set the value of [initsupritemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitsupritemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initsupritemnbr !== $v) {
            $this->initsupritemnbr = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSUPRITEMNBR] = true;
        }

        return $this;
    } // setInitsupritemnbr()

    /**
     * Set the value of [initvendshipfrom] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitvendshipfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initvendshipfrom !== $v) {
            $this->initvendshipfrom = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITVENDSHIPFROM] = true;
        }

        return $this;
    } // setInitvendshipfrom()

    /**
     * Set the value of [initcntryoforigin] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitcntryoforigin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initcntryoforigin !== $v) {
            $this->initcntryoforigin = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN] = true;
        }

        return $this;
    } // setInitcntryoforigin()

    /**
     * Set the value of [initasstqty] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitasstqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initasstqty !== $v) {
            $this->initasstqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITASSTQTY] = true;
        }

        return $this;
    } // setInitasstqty()

    /**
     * Set the value of [intbtariffcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbtariffcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbtariffcode !== $v) {
            $this->intbtariffcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBTARIFFCODE] = true;
        }

        return $this;
    } // setIntbtariffcode()

    /**
     * Set the value of [initpreference] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitpreference($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initpreference !== $v) {
            $this->initpreference = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITPREFERENCE] = true;
        }

        return $this;
    } // setInitpreference()

    /**
     * Set the value of [initproducer] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitproducer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initproducer !== $v) {
            $this->initproducer = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITPRODUCER] = true;
        }

        return $this;
    } // setInitproducer()

    /**
     * Set the value of [initdocumentation] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitdocumentation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initdocumentation !== $v) {
            $this->initdocumentation = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITDOCUMENTATION] = true;
        }

        return $this;
    } // setInitdocumentation()

    /**
     * Set the value of [initpurchcrtnqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitpurchcrtnqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initpurchcrtnqty !== $v) {
            $this->initpurchcrtnqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITPURCHCRTNQTY] = true;
        }

        return $this;
    } // setInitpurchcrtnqty()

    /**
     * Set the value of [aptbbuyrcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setAptbbuyrcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbbuyrcode !== $v) {
            $this->aptbbuyrcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_APTBBUYRCODE] = true;
        }

        return $this;
    } // setAptbbuyrcode()

    /**
     * Set the value of [initlastcost] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitlastcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initlastcost !== $v) {
            $this->initlastcost = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITLASTCOST] = true;
        }

        return $this;
    } // setInitlastcost()

    /**
     * Set the value of [initliters] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitliters($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initliters !== $v) {
            $this->initliters = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITLITERS] = true;
        }

        return $this;
    } // setInitliters()

    /**
     * Set the value of [intbmsdscode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbmsdscode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbmsdscode !== $v) {
            $this->intbmsdscode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBMSDSCODE] = true;
        }

        return $this;
    } // setIntbmsdscode()

    /**
     * Set the value of [initrequirefrt] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitrequirefrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initrequirefrt !== $v) {
            $this->initrequirefrt = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITREQUIREFRT] = true;
        }

        return $this;
    } // setInitrequirefrt()

    /**
     * Set the value of [initmfrtcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitmfrtcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initmfrtcode !== $v) {
            $this->initmfrtcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITMFRTCODE] = true;
        }

        return $this;
    } // setInitmfrtcode()

    /**
     * Set the value of [initinnerpackqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitinnerpackqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initinnerpackqty !== $v) {
            $this->initinnerpackqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITINNERPACKQTY] = true;
        }

        return $this;
    } // setInitinnerpackqty()

    /**
     * Set the value of [initouterpackqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitouterpackqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initouterpackqty !== $v) {
            $this->initouterpackqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITOUTERPACKQTY] = true;
        }

        return $this;
    } // setInitouterpackqty()

    /**
     * Set the value of [initbasestancost] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitbasestancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initbasestancost !== $v) {
            $this->initbasestancost = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITBASESTANCOST] = true;
        }

        return $this;
    } // setInitbasestancost()

    /**
     * Set the value of [initshiptareqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitshiptareqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initshiptareqty !== $v) {
            $this->initshiptareqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSHIPTAREQTY] = true;
        }

        return $this;
    } // setInitshiptareqty()

    /**
     * Set the value of [initwgitem] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitwgitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initwgitem !== $v) {
            $this->initwgitem = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITWGITEM] = true;
        }

        return $this;
    } // setInitwgitem()

    /**
     * Set the value of [intbpricgrup] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbpricgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbpricgrup !== $v) {
            $this->intbpricgrup = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBPRICGRUP] = true;
        }

        if ($this->aInvPriceCode !== null && $this->aInvPriceCode->getIntbpricgrup() !== $v) {
            $this->aInvPriceCode = null;
        }

        return $this;
    } // setIntbpricgrup()

    /**
     * Set the value of [intbcommgrup] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbcommgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcommgrup !== $v) {
            $this->intbcommgrup = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBCOMMGRUP] = true;
        }

        if ($this->aInvCommissionCode !== null && $this->aInvCommissionCode->getIntbcommgrup() !== $v) {
            $this->aInvCommissionCode = null;
        }

        return $this;
    } // setIntbcommgrup()

    /**
     * Set the value of [initlastcostdate] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitlastcostdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initlastcostdate !== $v) {
            $this->initlastcostdate = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITLASTCOSTDATE] = true;
        }

        return $this;
    } // setInitlastcostdate()

    /**
     * Set the value of [initqtypercase] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitqtypercase($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initqtypercase !== $v) {
            $this->initqtypercase = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITQTYPERCASE] = true;
        }

        return $this;
    } // setInitqtypercase()

    /**
     * Set the value of [initrevision] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitrevision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initrevision !== $v) {
            $this->initrevision = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITREVISION] = true;
        }

        return $this;
    } // setInitrevision()

    /**
     * Set the value of [initcommsaleqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitcommsaleqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initcommsaleqty !== $v) {
            $this->initcommsaleqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITCOMMSALEQTY] = true;
        }

        return $this;
    } // setInitcommsaleqty()

    /**
     * Set the value of [initcubes] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitcubes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initcubes !== $v) {
            $this->initcubes = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITCUBES] = true;
        }

        return $this;
    } // setInitcubes()

    /**
     * Set the value of [inittimefence] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInittimefence($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inittimefence !== $v) {
            $this->inittimefence = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITTIMEFENCE] = true;
        }

        return $this;
    } // setInittimefence()

    /**
     * Set the value of [initsrvcminchrg] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitsrvcminchrg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initsrvcminchrg !== $v) {
            $this->initsrvcminchrg = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSRVCMINCHRG] = true;
        }

        return $this;
    } // setInitsrvcminchrg()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemMasterItemTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemMasterItemTableMap::translateFieldName('Initdesc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initdesc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemMasterItemTableMap::translateFieldName('Initdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemMasterItemTableMap::translateFieldName('Initformatcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initformatcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemMasterItemTableMap::translateFieldName('Initsplit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initsplit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemMasterItemTableMap::translateFieldName('Initsherdatecd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initsherdatecd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemMasterItemTableMap::translateFieldName('Initcoreyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initcoreyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbusercode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbusercode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbusercode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbusercode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItemMasterItemTableMap::translateFieldName('Inittype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inittype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItemMasterItemTableMap::translateFieldName('Inittax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inittax = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ItemMasterItemTableMap::translateFieldName('Initrtlpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initrtlpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstatchgd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstatchgd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ItemMasterItemTableMap::translateFieldName('Initspecitemcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initspecitemcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ItemMasterItemTableMap::translateFieldName('Initwarrdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initwarrdays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuomsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ItemMasterItemTableMap::translateFieldName('Initwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ItemMasterItemTableMap::translateFieldName('Initbord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initbord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ItemMasterItemTableMap::translateFieldName('Initbaseitemid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initbaseitemid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ItemMasterItemTableMap::translateFieldName('Initspecificcust', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initspecificcust = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ItemMasterItemTableMap::translateFieldName('Initgivedisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initgivedisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ItemMasterItemTableMap::translateFieldName('Initasstcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initasstcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ItemMasterItemTableMap::translateFieldName('Initpriclastdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initpriclastdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuompur = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstancostbase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstancostbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstancostlastdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstancostlastdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ItemMasterItemTableMap::translateFieldName('Initminmarg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initminmarg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ItemMasterItemTableMap::translateFieldName('Initvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ItemMasterItemTableMap::translateFieldName('Initinspect', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initinspect = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstockcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstockcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ItemMasterItemTableMap::translateFieldName('Initsupritemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initsupritemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ItemMasterItemTableMap::translateFieldName('Initvendshipfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initvendshipfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ItemMasterItemTableMap::translateFieldName('Initcntryoforigin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initcntryoforigin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ItemMasterItemTableMap::translateFieldName('Initasstqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initasstqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbtariffcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbtariffcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ItemMasterItemTableMap::translateFieldName('Initpreference', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initpreference = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ItemMasterItemTableMap::translateFieldName('Initproducer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initproducer = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ItemMasterItemTableMap::translateFieldName('Initdocumentation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initdocumentation = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ItemMasterItemTableMap::translateFieldName('Initpurchcrtnqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initpurchcrtnqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ItemMasterItemTableMap::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbbuyrcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ItemMasterItemTableMap::translateFieldName('Initlastcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initlastcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ItemMasterItemTableMap::translateFieldName('Initliters', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initliters = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbmsdscode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ItemMasterItemTableMap::translateFieldName('Initrequirefrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initrequirefrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ItemMasterItemTableMap::translateFieldName('Initmfrtcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initmfrtcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ItemMasterItemTableMap::translateFieldName('Initinnerpackqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initinnerpackqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ItemMasterItemTableMap::translateFieldName('Initouterpackqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initouterpackqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ItemMasterItemTableMap::translateFieldName('Initbasestancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initbasestancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ItemMasterItemTableMap::translateFieldName('Initshiptareqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initshiptareqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ItemMasterItemTableMap::translateFieldName('Initwgitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initwgitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbpricgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbcommgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcommgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ItemMasterItemTableMap::translateFieldName('Initlastcostdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initlastcostdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ItemMasterItemTableMap::translateFieldName('Initqtypercase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initqtypercase = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ItemMasterItemTableMap::translateFieldName('Initrevision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initrevision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ItemMasterItemTableMap::translateFieldName('Initcommsaleqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initcommsaleqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ItemMasterItemTableMap::translateFieldName('Initcubes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initcubes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ItemMasterItemTableMap::translateFieldName('Inittimefence', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inittimefence = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ItemMasterItemTableMap::translateFieldName('Initsrvcminchrg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initsrvcminchrg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ItemMasterItemTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ItemMasterItemTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ItemMasterItemTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 64; // 64 = ItemMasterItemTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItemMasterItem'), 0, $e);
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
        if ($this->aInvGroupCode !== null && $this->intbgrup !== $this->aInvGroupCode->getIntbgrup()) {
            $this->aInvGroupCode = null;
        }
        if ($this->aUnitofMeasureSale !== null && $this->intbuomsale !== $this->aUnitofMeasureSale->getIntbuomsale()) {
            $this->aUnitofMeasureSale = null;
        }
        if ($this->aUnitofMeasurePurchase !== null && $this->intbuompur !== $this->aUnitofMeasurePurchase->getIntbuompur()) {
            $this->aUnitofMeasurePurchase = null;
        }
        if ($this->aInvPriceCode !== null && $this->intbpricgrup !== $this->aInvPriceCode->getIntbpricgrup()) {
            $this->aInvPriceCode = null;
        }
        if ($this->aInvCommissionCode !== null && $this->intbcommgrup !== $this->aInvCommissionCode->getIntbcommgrup()) {
            $this->aInvCommissionCode = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemMasterItemQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUnitofMeasureSale = null;
            $this->aUnitofMeasurePurchase = null;
            $this->aInvGroupCode = null;
            $this->aInvPriceCode = null;
            $this->aInvCommissionCode = null;
            $this->collItemXrefUpcs = null;

            $this->collItemXrefVendors = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ItemMasterItem::setDeleted()
     * @see ItemMasterItem::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemMasterItemQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemMasterItemTableMap::DATABASE_NAME);
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
                ItemMasterItemTableMap::addInstanceToPool($this);
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

            if ($this->aUnitofMeasureSale !== null) {
                if ($this->aUnitofMeasureSale->isModified() || $this->aUnitofMeasureSale->isNew()) {
                    $affectedRows += $this->aUnitofMeasureSale->save($con);
                }
                $this->setUnitofMeasureSale($this->aUnitofMeasureSale);
            }

            if ($this->aUnitofMeasurePurchase !== null) {
                if ($this->aUnitofMeasurePurchase->isModified() || $this->aUnitofMeasurePurchase->isNew()) {
                    $affectedRows += $this->aUnitofMeasurePurchase->save($con);
                }
                $this->setUnitofMeasurePurchase($this->aUnitofMeasurePurchase);
            }

            if ($this->aInvGroupCode !== null) {
                if ($this->aInvGroupCode->isModified() || $this->aInvGroupCode->isNew()) {
                    $affectedRows += $this->aInvGroupCode->save($con);
                }
                $this->setInvGroupCode($this->aInvGroupCode);
            }

            if ($this->aInvPriceCode !== null) {
                if ($this->aInvPriceCode->isModified() || $this->aInvPriceCode->isNew()) {
                    $affectedRows += $this->aInvPriceCode->save($con);
                }
                $this->setInvPriceCode($this->aInvPriceCode);
            }

            if ($this->aInvCommissionCode !== null) {
                if ($this->aInvCommissionCode->isModified() || $this->aInvCommissionCode->isNew()) {
                    $affectedRows += $this->aInvCommissionCode->save($con);
                }
                $this->setInvCommissionCode($this->aInvCommissionCode);
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

            if ($this->itemXrefUpcsScheduledForDeletion !== null) {
                if (!$this->itemXrefUpcsScheduledForDeletion->isEmpty()) {
                    \ItemXrefUpcQuery::create()
                        ->filterByPrimaryKeys($this->itemXrefUpcsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemXrefUpcsScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefUpcs !== null) {
                foreach ($this->collItemXrefUpcs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefVendorsScheduledForDeletion !== null) {
                if (!$this->itemXrefVendorsScheduledForDeletion->isEmpty()) {
                    \ItemXrefVendorQuery::create()
                        ->filterByPrimaryKeys($this->itemXrefVendorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemXrefVendorsScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefVendors !== null) {
                foreach ($this->collItemXrefVendors as $referrerFK) {
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
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDESC1)) {
            $modifiedColumns[':p' . $index++]  = 'InitDesc1';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'InitDesc2';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrup';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITFORMATCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InitFormatCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPLIT)) {
            $modifiedColumns[':p' . $index++]  = 'InitSplit';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSHERDATECD)) {
            $modifiedColumns[':p' . $index++]  = 'InitSherDateCd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCOREYN)) {
            $modifiedColumns[':p' . $index++]  = 'InitCoreYN';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUSERCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUserCode1';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUSERCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUserCode2';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'InitType';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTAX)) {
            $modifiedColumns[':p' . $index++]  = 'InitTax';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITRTLPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'InitRtlPric';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTATCHGD)) {
            $modifiedColumns[':p' . $index++]  = 'InitStatChgd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPECITEMCD)) {
            $modifiedColumns[':p' . $index++]  = 'InitSpecItemCd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWARRDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'InitWarrDays';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUOMSALE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomSale';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'InitWght';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBORD)) {
            $modifiedColumns[':p' . $index++]  = 'InitBord';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBASEITEMID)) {
            $modifiedColumns[':p' . $index++]  = 'InitBaseItemId';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPECIFICCUST)) {
            $modifiedColumns[':p' . $index++]  = 'InitSpecificCust';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITGIVEDISC)) {
            $modifiedColumns[':p' . $index++]  = 'InitGiveDisc';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITASSTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InitAsstCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPRICLASTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InitPricLastDate';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUOMPUR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomPur';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InitStanCost';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOSTBASE)) {
            $modifiedColumns[':p' . $index++]  = 'InitStanCostBase';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InitStanCostLastDate';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMINMARG)) {
            $modifiedColumns[':p' . $index++]  = 'InitMinMarg';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'InitVendId';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITINSPECT)) {
            $modifiedColumns[':p' . $index++]  = 'InitInspect';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InitStockCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSUPRITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitSuprItemNbr';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITVENDSHIPFROM)) {
            $modifiedColumns[':p' . $index++]  = 'InitVendShipFrom';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN)) {
            $modifiedColumns[':p' . $index++]  = 'InitCntryOfOrigin';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITASSTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitAsstQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBTARIFFCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbTariffCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = 'InitPreference';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPRODUCER)) {
            $modifiedColumns[':p' . $index++]  = 'InitProducer';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDOCUMENTATION)) {
            $modifiedColumns[':p' . $index++]  = 'InitDocumentation';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitPurchCrtnQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_APTBBUYRCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbBuyrCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLASTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InitLastCost';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLITERS)) {
            $modifiedColumns[':p' . $index++]  = 'InitLiters';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBMSDSCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbMsdsCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITREQUIREFRT)) {
            $modifiedColumns[':p' . $index++]  = 'InitRequireFrt';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMFRTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InitMfrtCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITINNERPACKQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitInnerPackQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITOUTERPACKQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitOuterPackQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBASESTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InitBaseStanCost';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSHIPTAREQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitShipTareQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWGITEM)) {
            $modifiedColumns[':p' . $index++]  = 'InitWgItem';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBPRICGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbPricGrup';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBCOMMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCommGrup';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLASTCOSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InitLastCostDate';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITQTYPERCASE)) {
            $modifiedColumns[':p' . $index++]  = 'InitQtyPerCase';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITREVISION)) {
            $modifiedColumns[':p' . $index++]  = 'InitRevision';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCOMMSALEQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitCommSaleQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCUBES)) {
            $modifiedColumns[':p' . $index++]  = 'InitCubes';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTIMEFENCE)) {
            $modifiedColumns[':p' . $index++]  = 'InitTimeFence';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSRVCMINCHRG)) {
            $modifiedColumns[':p' . $index++]  = 'InitSrvcMinChrg';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_item_mast (%s) VALUES (%s)',
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
                    case 'InitDesc1':
                        $stmt->bindValue($identifier, $this->initdesc1, PDO::PARAM_STR);
                        break;
                    case 'InitDesc2':
                        $stmt->bindValue($identifier, $this->initdesc2, PDO::PARAM_STR);
                        break;
                    case 'IntbGrup':
                        $stmt->bindValue($identifier, $this->intbgrup, PDO::PARAM_STR);
                        break;
                    case 'InitFormatCode':
                        $stmt->bindValue($identifier, $this->initformatcode, PDO::PARAM_STR);
                        break;
                    case 'InitSplit':
                        $stmt->bindValue($identifier, $this->initsplit, PDO::PARAM_STR);
                        break;
                    case 'InitSherDateCd':
                        $stmt->bindValue($identifier, $this->initsherdatecd, PDO::PARAM_STR);
                        break;
                    case 'InitCoreYN':
                        $stmt->bindValue($identifier, $this->initcoreyn, PDO::PARAM_STR);
                        break;
                    case 'IntbUserCode1':
                        $stmt->bindValue($identifier, $this->intbusercode1, PDO::PARAM_STR);
                        break;
                    case 'IntbUserCode2':
                        $stmt->bindValue($identifier, $this->intbusercode2, PDO::PARAM_STR);
                        break;
                    case 'InitType':
                        $stmt->bindValue($identifier, $this->inittype, PDO::PARAM_STR);
                        break;
                    case 'InitTax':
                        $stmt->bindValue($identifier, $this->inittax, PDO::PARAM_STR);
                        break;
                    case 'InitRtlPric':
                        $stmt->bindValue($identifier, $this->initrtlpric, PDO::PARAM_STR);
                        break;
                    case 'InitStatChgd':
                        $stmt->bindValue($identifier, $this->initstatchgd, PDO::PARAM_STR);
                        break;
                    case 'InitSpecItemCd':
                        $stmt->bindValue($identifier, $this->initspecitemcd, PDO::PARAM_STR);
                        break;
                    case 'InitWarrDays':
                        $stmt->bindValue($identifier, $this->initwarrdays, PDO::PARAM_INT);
                        break;
                    case 'IntbUomSale':
                        $stmt->bindValue($identifier, $this->intbuomsale, PDO::PARAM_STR);
                        break;
                    case 'InitWght':
                        $stmt->bindValue($identifier, $this->initwght, PDO::PARAM_STR);
                        break;
                    case 'InitBord':
                        $stmt->bindValue($identifier, $this->initbord, PDO::PARAM_STR);
                        break;
                    case 'InitBaseItemId':
                        $stmt->bindValue($identifier, $this->initbaseitemid, PDO::PARAM_STR);
                        break;
                    case 'InitSpecificCust':
                        $stmt->bindValue($identifier, $this->initspecificcust, PDO::PARAM_STR);
                        break;
                    case 'InitGiveDisc':
                        $stmt->bindValue($identifier, $this->initgivedisc, PDO::PARAM_STR);
                        break;
                    case 'InitAsstCode':
                        $stmt->bindValue($identifier, $this->initasstcode, PDO::PARAM_STR);
                        break;
                    case 'InitPricLastDate':
                        $stmt->bindValue($identifier, $this->initpriclastdate, PDO::PARAM_STR);
                        break;
                    case 'IntbUomPur':
                        $stmt->bindValue($identifier, $this->intbuompur, PDO::PARAM_STR);
                        break;
                    case 'InitStanCost':
                        $stmt->bindValue($identifier, $this->initstancost, PDO::PARAM_STR);
                        break;
                    case 'InitStanCostBase':
                        $stmt->bindValue($identifier, $this->initstancostbase, PDO::PARAM_STR);
                        break;
                    case 'InitStanCostLastDate':
                        $stmt->bindValue($identifier, $this->initstancostlastdate, PDO::PARAM_STR);
                        break;
                    case 'InitMinMarg':
                        $stmt->bindValue($identifier, $this->initminmarg, PDO::PARAM_STR);
                        break;
                    case 'InitVendId':
                        $stmt->bindValue($identifier, $this->initvendid, PDO::PARAM_STR);
                        break;
                    case 'InitInspect':
                        $stmt->bindValue($identifier, $this->initinspect, PDO::PARAM_STR);
                        break;
                    case 'InitStockCode':
                        $stmt->bindValue($identifier, $this->initstockcode, PDO::PARAM_STR);
                        break;
                    case 'InitSuprItemNbr':
                        $stmt->bindValue($identifier, $this->initsupritemnbr, PDO::PARAM_STR);
                        break;
                    case 'InitVendShipFrom':
                        $stmt->bindValue($identifier, $this->initvendshipfrom, PDO::PARAM_STR);
                        break;
                    case 'InitCntryOfOrigin':
                        $stmt->bindValue($identifier, $this->initcntryoforigin, PDO::PARAM_STR);
                        break;
                    case 'InitAsstQty':
                        $stmt->bindValue($identifier, $this->initasstqty, PDO::PARAM_STR);
                        break;
                    case 'IntbTariffCode':
                        $stmt->bindValue($identifier, $this->intbtariffcode, PDO::PARAM_STR);
                        break;
                    case 'InitPreference':
                        $stmt->bindValue($identifier, $this->initpreference, PDO::PARAM_STR);
                        break;
                    case 'InitProducer':
                        $stmt->bindValue($identifier, $this->initproducer, PDO::PARAM_STR);
                        break;
                    case 'InitDocumentation':
                        $stmt->bindValue($identifier, $this->initdocumentation, PDO::PARAM_STR);
                        break;
                    case 'InitPurchCrtnQty':
                        $stmt->bindValue($identifier, $this->initpurchcrtnqty, PDO::PARAM_INT);
                        break;
                    case 'AptbBuyrCode':
                        $stmt->bindValue($identifier, $this->aptbbuyrcode, PDO::PARAM_STR);
                        break;
                    case 'InitLastCost':
                        $stmt->bindValue($identifier, $this->initlastcost, PDO::PARAM_STR);
                        break;
                    case 'InitLiters':
                        $stmt->bindValue($identifier, $this->initliters, PDO::PARAM_STR);
                        break;
                    case 'IntbMsdsCode':
                        $stmt->bindValue($identifier, $this->intbmsdscode, PDO::PARAM_STR);
                        break;
                    case 'InitRequireFrt':
                        $stmt->bindValue($identifier, $this->initrequirefrt, PDO::PARAM_STR);
                        break;
                    case 'InitMfrtCode':
                        $stmt->bindValue($identifier, $this->initmfrtcode, PDO::PARAM_STR);
                        break;
                    case 'InitInnerPackQty':
                        $stmt->bindValue($identifier, $this->initinnerpackqty, PDO::PARAM_INT);
                        break;
                    case 'InitOuterPackQty':
                        $stmt->bindValue($identifier, $this->initouterpackqty, PDO::PARAM_INT);
                        break;
                    case 'InitBaseStanCost':
                        $stmt->bindValue($identifier, $this->initbasestancost, PDO::PARAM_STR);
                        break;
                    case 'InitShipTareQty':
                        $stmt->bindValue($identifier, $this->initshiptareqty, PDO::PARAM_INT);
                        break;
                    case 'InitWgItem':
                        $stmt->bindValue($identifier, $this->initwgitem, PDO::PARAM_STR);
                        break;
                    case 'IntbPricGrup':
                        $stmt->bindValue($identifier, $this->intbpricgrup, PDO::PARAM_STR);
                        break;
                    case 'IntbCommGrup':
                        $stmt->bindValue($identifier, $this->intbcommgrup, PDO::PARAM_STR);
                        break;
                    case 'InitLastCostDate':
                        $stmt->bindValue($identifier, $this->initlastcostdate, PDO::PARAM_STR);
                        break;
                    case 'InitQtyPerCase':
                        $stmt->bindValue($identifier, $this->initqtypercase, PDO::PARAM_INT);
                        break;
                    case 'InitRevision':
                        $stmt->bindValue($identifier, $this->initrevision, PDO::PARAM_STR);
                        break;
                    case 'InitCommSaleQty':
                        $stmt->bindValue($identifier, $this->initcommsaleqty, PDO::PARAM_INT);
                        break;
                    case 'InitCubes':
                        $stmt->bindValue($identifier, $this->initcubes, PDO::PARAM_STR);
                        break;
                    case 'InitTimeFence':
                        $stmt->bindValue($identifier, $this->inittimefence, PDO::PARAM_INT);
                        break;
                    case 'InitSrvcMinChrg':
                        $stmt->bindValue($identifier, $this->initsrvcminchrg, PDO::PARAM_STR);
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
        $pos = ItemMasterItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInitdesc1();
                break;
            case 2:
                return $this->getInitdesc2();
                break;
            case 3:
                return $this->getIntbgrup();
                break;
            case 4:
                return $this->getInitformatcode();
                break;
            case 5:
                return $this->getInitsplit();
                break;
            case 6:
                return $this->getInitsherdatecd();
                break;
            case 7:
                return $this->getInitcoreyn();
                break;
            case 8:
                return $this->getIntbusercode1();
                break;
            case 9:
                return $this->getIntbusercode2();
                break;
            case 10:
                return $this->getInittype();
                break;
            case 11:
                return $this->getInittax();
                break;
            case 12:
                return $this->getInitrtlpric();
                break;
            case 13:
                return $this->getInitstatchgd();
                break;
            case 14:
                return $this->getInitspecitemcd();
                break;
            case 15:
                return $this->getInitwarrdays();
                break;
            case 16:
                return $this->getIntbuomsale();
                break;
            case 17:
                return $this->getInitwght();
                break;
            case 18:
                return $this->getInitbord();
                break;
            case 19:
                return $this->getInitbaseitemid();
                break;
            case 20:
                return $this->getInitspecificcust();
                break;
            case 21:
                return $this->getInitgivedisc();
                break;
            case 22:
                return $this->getInitasstcode();
                break;
            case 23:
                return $this->getInitpriclastdate();
                break;
            case 24:
                return $this->getIntbuompur();
                break;
            case 25:
                return $this->getInitstancost();
                break;
            case 26:
                return $this->getInitstancostbase();
                break;
            case 27:
                return $this->getInitstancostlastdate();
                break;
            case 28:
                return $this->getInitminmarg();
                break;
            case 29:
                return $this->getInitvendid();
                break;
            case 30:
                return $this->getInitinspect();
                break;
            case 31:
                return $this->getInitstockcode();
                break;
            case 32:
                return $this->getInitsupritemnbr();
                break;
            case 33:
                return $this->getInitvendshipfrom();
                break;
            case 34:
                return $this->getInitcntryoforigin();
                break;
            case 35:
                return $this->getInitasstqty();
                break;
            case 36:
                return $this->getIntbtariffcode();
                break;
            case 37:
                return $this->getInitpreference();
                break;
            case 38:
                return $this->getInitproducer();
                break;
            case 39:
                return $this->getInitdocumentation();
                break;
            case 40:
                return $this->getInitpurchcrtnqty();
                break;
            case 41:
                return $this->getAptbbuyrcode();
                break;
            case 42:
                return $this->getInitlastcost();
                break;
            case 43:
                return $this->getInitliters();
                break;
            case 44:
                return $this->getIntbmsdscode();
                break;
            case 45:
                return $this->getInitrequirefrt();
                break;
            case 46:
                return $this->getInitmfrtcode();
                break;
            case 47:
                return $this->getInitinnerpackqty();
                break;
            case 48:
                return $this->getInitouterpackqty();
                break;
            case 49:
                return $this->getInitbasestancost();
                break;
            case 50:
                return $this->getInitshiptareqty();
                break;
            case 51:
                return $this->getInitwgitem();
                break;
            case 52:
                return $this->getIntbpricgrup();
                break;
            case 53:
                return $this->getIntbcommgrup();
                break;
            case 54:
                return $this->getInitlastcostdate();
                break;
            case 55:
                return $this->getInitqtypercase();
                break;
            case 56:
                return $this->getInitrevision();
                break;
            case 57:
                return $this->getInitcommsaleqty();
                break;
            case 58:
                return $this->getInitcubes();
                break;
            case 59:
                return $this->getInittimefence();
                break;
            case 60:
                return $this->getInitsrvcminchrg();
                break;
            case 61:
                return $this->getDateupdtd();
                break;
            case 62:
                return $this->getTimeupdtd();
                break;
            case 63:
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

        if (isset($alreadyDumpedObjects['ItemMasterItem'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ItemMasterItem'][$this->hashCode()] = true;
        $keys = ItemMasterItemTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getInitdesc1(),
            $keys[2] => $this->getInitdesc2(),
            $keys[3] => $this->getIntbgrup(),
            $keys[4] => $this->getInitformatcode(),
            $keys[5] => $this->getInitsplit(),
            $keys[6] => $this->getInitsherdatecd(),
            $keys[7] => $this->getInitcoreyn(),
            $keys[8] => $this->getIntbusercode1(),
            $keys[9] => $this->getIntbusercode2(),
            $keys[10] => $this->getInittype(),
            $keys[11] => $this->getInittax(),
            $keys[12] => $this->getInitrtlpric(),
            $keys[13] => $this->getInitstatchgd(),
            $keys[14] => $this->getInitspecitemcd(),
            $keys[15] => $this->getInitwarrdays(),
            $keys[16] => $this->getIntbuomsale(),
            $keys[17] => $this->getInitwght(),
            $keys[18] => $this->getInitbord(),
            $keys[19] => $this->getInitbaseitemid(),
            $keys[20] => $this->getInitspecificcust(),
            $keys[21] => $this->getInitgivedisc(),
            $keys[22] => $this->getInitasstcode(),
            $keys[23] => $this->getInitpriclastdate(),
            $keys[24] => $this->getIntbuompur(),
            $keys[25] => $this->getInitstancost(),
            $keys[26] => $this->getInitstancostbase(),
            $keys[27] => $this->getInitstancostlastdate(),
            $keys[28] => $this->getInitminmarg(),
            $keys[29] => $this->getInitvendid(),
            $keys[30] => $this->getInitinspect(),
            $keys[31] => $this->getInitstockcode(),
            $keys[32] => $this->getInitsupritemnbr(),
            $keys[33] => $this->getInitvendshipfrom(),
            $keys[34] => $this->getInitcntryoforigin(),
            $keys[35] => $this->getInitasstqty(),
            $keys[36] => $this->getIntbtariffcode(),
            $keys[37] => $this->getInitpreference(),
            $keys[38] => $this->getInitproducer(),
            $keys[39] => $this->getInitdocumentation(),
            $keys[40] => $this->getInitpurchcrtnqty(),
            $keys[41] => $this->getAptbbuyrcode(),
            $keys[42] => $this->getInitlastcost(),
            $keys[43] => $this->getInitliters(),
            $keys[44] => $this->getIntbmsdscode(),
            $keys[45] => $this->getInitrequirefrt(),
            $keys[46] => $this->getInitmfrtcode(),
            $keys[47] => $this->getInitinnerpackqty(),
            $keys[48] => $this->getInitouterpackqty(),
            $keys[49] => $this->getInitbasestancost(),
            $keys[50] => $this->getInitshiptareqty(),
            $keys[51] => $this->getInitwgitem(),
            $keys[52] => $this->getIntbpricgrup(),
            $keys[53] => $this->getIntbcommgrup(),
            $keys[54] => $this->getInitlastcostdate(),
            $keys[55] => $this->getInitqtypercase(),
            $keys[56] => $this->getInitrevision(),
            $keys[57] => $this->getInitcommsaleqty(),
            $keys[58] => $this->getInitcubes(),
            $keys[59] => $this->getInittimefence(),
            $keys[60] => $this->getInitsrvcminchrg(),
            $keys[61] => $this->getDateupdtd(),
            $keys[62] => $this->getTimeupdtd(),
            $keys[63] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
            if (null !== $this->aUnitofMeasurePurchase) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'unitofMeasurePurchase';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_uom_pur';
                        break;
                    default:
                        $key = 'UnitofMeasurePurchase';
                }

                $result[$key] = $this->aUnitofMeasurePurchase->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvGroupCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invGroupCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_grup_code';
                        break;
                    default:
                        $key = 'InvGroupCode';
                }

                $result[$key] = $this->aInvGroupCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvPriceCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invPriceCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_pric_code';
                        break;
                    default:
                        $key = 'InvPriceCode';
                }

                $result[$key] = $this->aInvPriceCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvCommissionCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invCommissionCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_comm_code';
                        break;
                    default:
                        $key = 'InvCommissionCode';
                }

                $result[$key] = $this->aInvCommissionCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collItemXrefUpcs) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefUpcs';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'upc_item_xrefs';
                        break;
                    default:
                        $key = 'ItemXrefUpcs';
                }

                $result[$key] = $this->collItemXrefUpcs->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefVendors) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefVendors';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'vend_item_xrefs';
                        break;
                    default:
                        $key = 'ItemXrefVendors';
                }

                $result[$key] = $this->collItemXrefVendors->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\ItemMasterItem
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemMasterItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ItemMasterItem
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setInitdesc1($value);
                break;
            case 2:
                $this->setInitdesc2($value);
                break;
            case 3:
                $this->setIntbgrup($value);
                break;
            case 4:
                $this->setInitformatcode($value);
                break;
            case 5:
                $this->setInitsplit($value);
                break;
            case 6:
                $this->setInitsherdatecd($value);
                break;
            case 7:
                $this->setInitcoreyn($value);
                break;
            case 8:
                $this->setIntbusercode1($value);
                break;
            case 9:
                $this->setIntbusercode2($value);
                break;
            case 10:
                $this->setInittype($value);
                break;
            case 11:
                $this->setInittax($value);
                break;
            case 12:
                $this->setInitrtlpric($value);
                break;
            case 13:
                $this->setInitstatchgd($value);
                break;
            case 14:
                $this->setInitspecitemcd($value);
                break;
            case 15:
                $this->setInitwarrdays($value);
                break;
            case 16:
                $this->setIntbuomsale($value);
                break;
            case 17:
                $this->setInitwght($value);
                break;
            case 18:
                $this->setInitbord($value);
                break;
            case 19:
                $this->setInitbaseitemid($value);
                break;
            case 20:
                $this->setInitspecificcust($value);
                break;
            case 21:
                $this->setInitgivedisc($value);
                break;
            case 22:
                $this->setInitasstcode($value);
                break;
            case 23:
                $this->setInitpriclastdate($value);
                break;
            case 24:
                $this->setIntbuompur($value);
                break;
            case 25:
                $this->setInitstancost($value);
                break;
            case 26:
                $this->setInitstancostbase($value);
                break;
            case 27:
                $this->setInitstancostlastdate($value);
                break;
            case 28:
                $this->setInitminmarg($value);
                break;
            case 29:
                $this->setInitvendid($value);
                break;
            case 30:
                $this->setInitinspect($value);
                break;
            case 31:
                $this->setInitstockcode($value);
                break;
            case 32:
                $this->setInitsupritemnbr($value);
                break;
            case 33:
                $this->setInitvendshipfrom($value);
                break;
            case 34:
                $this->setInitcntryoforigin($value);
                break;
            case 35:
                $this->setInitasstqty($value);
                break;
            case 36:
                $this->setIntbtariffcode($value);
                break;
            case 37:
                $this->setInitpreference($value);
                break;
            case 38:
                $this->setInitproducer($value);
                break;
            case 39:
                $this->setInitdocumentation($value);
                break;
            case 40:
                $this->setInitpurchcrtnqty($value);
                break;
            case 41:
                $this->setAptbbuyrcode($value);
                break;
            case 42:
                $this->setInitlastcost($value);
                break;
            case 43:
                $this->setInitliters($value);
                break;
            case 44:
                $this->setIntbmsdscode($value);
                break;
            case 45:
                $this->setInitrequirefrt($value);
                break;
            case 46:
                $this->setInitmfrtcode($value);
                break;
            case 47:
                $this->setInitinnerpackqty($value);
                break;
            case 48:
                $this->setInitouterpackqty($value);
                break;
            case 49:
                $this->setInitbasestancost($value);
                break;
            case 50:
                $this->setInitshiptareqty($value);
                break;
            case 51:
                $this->setInitwgitem($value);
                break;
            case 52:
                $this->setIntbpricgrup($value);
                break;
            case 53:
                $this->setIntbcommgrup($value);
                break;
            case 54:
                $this->setInitlastcostdate($value);
                break;
            case 55:
                $this->setInitqtypercase($value);
                break;
            case 56:
                $this->setInitrevision($value);
                break;
            case 57:
                $this->setInitcommsaleqty($value);
                break;
            case 58:
                $this->setInitcubes($value);
                break;
            case 59:
                $this->setInittimefence($value);
                break;
            case 60:
                $this->setInitsrvcminchrg($value);
                break;
            case 61:
                $this->setDateupdtd($value);
                break;
            case 62:
                $this->setTimeupdtd($value);
                break;
            case 63:
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
        $keys = ItemMasterItemTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setInitdesc1($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInitdesc2($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIntbgrup($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInitformatcode($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInitsplit($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInitsherdatecd($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInitcoreyn($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIntbusercode1($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIntbusercode2($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInittype($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInittax($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInitrtlpric($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInitstatchgd($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInitspecitemcd($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInitwarrdays($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIntbuomsale($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInitwght($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInitbord($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInitbaseitemid($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setInitspecificcust($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setInitgivedisc($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setInitasstcode($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setInitpriclastdate($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setIntbuompur($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setInitstancost($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setInitstancostbase($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setInitstancostlastdate($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setInitminmarg($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setInitvendid($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setInitinspect($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setInitstockcode($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setInitsupritemnbr($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setInitvendshipfrom($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setInitcntryoforigin($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setInitasstqty($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setIntbtariffcode($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setInitpreference($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setInitproducer($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setInitdocumentation($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setInitpurchcrtnqty($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setAptbbuyrcode($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setInitlastcost($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setInitliters($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setIntbmsdscode($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setInitrequirefrt($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setInitmfrtcode($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setInitinnerpackqty($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setInitouterpackqty($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setInitbasestancost($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setInitshiptareqty($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setInitwgitem($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setIntbpricgrup($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setIntbcommgrup($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setInitlastcostdate($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setInitqtypercase($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setInitrevision($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setInitcommsaleqty($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setInitcubes($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setInittimefence($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setInitsrvcminchrg($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setDateupdtd($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setTimeupdtd($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setDummy($arr[$keys[63]]);
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
     * @return $this|\ItemMasterItem The current object, for fluid interface
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
        $criteria = new Criteria(ItemMasterItemTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITITEMNBR)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDESC1)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITDESC1, $this->initdesc1);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDESC2)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITDESC2, $this->initdesc2);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBGRUP)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBGRUP, $this->intbgrup);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITFORMATCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITFORMATCODE, $this->initformatcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPLIT)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSPLIT, $this->initsplit);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSHERDATECD)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSHERDATECD, $this->initsherdatecd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCOREYN)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITCOREYN, $this->initcoreyn);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUSERCODE1)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBUSERCODE1, $this->intbusercode1);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUSERCODE2)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBUSERCODE2, $this->intbusercode2);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTYPE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITTYPE, $this->inittype);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTAX)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITTAX, $this->inittax);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITRTLPRIC)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITRTLPRIC, $this->initrtlpric);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTATCHGD)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTATCHGD, $this->initstatchgd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPECITEMCD)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSPECITEMCD, $this->initspecitemcd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWARRDAYS)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITWARRDAYS, $this->initwarrdays);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUOMSALE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBUOMSALE, $this->intbuomsale);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWGHT)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITWGHT, $this->initwght);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBORD)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITBORD, $this->initbord);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBASEITEMID)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITBASEITEMID, $this->initbaseitemid);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPECIFICCUST)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSPECIFICCUST, $this->initspecificcust);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITGIVEDISC)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITGIVEDISC, $this->initgivedisc);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITASSTCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITASSTCODE, $this->initasstcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPRICLASTDATE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITPRICLASTDATE, $this->initpriclastdate);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUOMPUR)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBUOMPUR, $this->intbuompur);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOST)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTANCOST, $this->initstancost);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOSTBASE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTANCOSTBASE, $this->initstancostbase);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE, $this->initstancostlastdate);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMINMARG)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITMINMARG, $this->initminmarg);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITVENDID)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITVENDID, $this->initvendid);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITINSPECT)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITINSPECT, $this->initinspect);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTOCKCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTOCKCODE, $this->initstockcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSUPRITEMNBR)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSUPRITEMNBR, $this->initsupritemnbr);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITVENDSHIPFROM)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITVENDSHIPFROM, $this->initvendshipfrom);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN, $this->initcntryoforigin);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITASSTQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITASSTQTY, $this->initasstqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBTARIFFCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBTARIFFCODE, $this->intbtariffcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPREFERENCE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITPREFERENCE, $this->initpreference);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPRODUCER)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITPRODUCER, $this->initproducer);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDOCUMENTATION)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITDOCUMENTATION, $this->initdocumentation);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY, $this->initpurchcrtnqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_APTBBUYRCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_APTBBUYRCODE, $this->aptbbuyrcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLASTCOST)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITLASTCOST, $this->initlastcost);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLITERS)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITLITERS, $this->initliters);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBMSDSCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBMSDSCODE, $this->intbmsdscode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITREQUIREFRT)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITREQUIREFRT, $this->initrequirefrt);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMFRTCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITMFRTCODE, $this->initmfrtcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITINNERPACKQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITINNERPACKQTY, $this->initinnerpackqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITOUTERPACKQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITOUTERPACKQTY, $this->initouterpackqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBASESTANCOST)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITBASESTANCOST, $this->initbasestancost);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSHIPTAREQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSHIPTAREQTY, $this->initshiptareqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWGITEM)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITWGITEM, $this->initwgitem);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBPRICGRUP)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBPRICGRUP, $this->intbpricgrup);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBCOMMGRUP)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBCOMMGRUP, $this->intbcommgrup);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLASTCOSTDATE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITLASTCOSTDATE, $this->initlastcostdate);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITQTYPERCASE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITQTYPERCASE, $this->initqtypercase);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITREVISION)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITREVISION, $this->initrevision);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCOMMSALEQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITCOMMSALEQTY, $this->initcommsaleqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCUBES)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITCUBES, $this->initcubes);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTIMEFENCE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITTIMEFENCE, $this->inittimefence);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSRVCMINCHRG)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSRVCMINCHRG, $this->initsrvcminchrg);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItemMasterItemTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItemMasterItemTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_DUMMY)) {
            $criteria->add(ItemMasterItemTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildItemMasterItemQuery::create();
        $criteria->add(ItemMasterItemTableMap::COL_INITITEMNBR, $this->inititemnbr);

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
     * @param      object $copyObj An object of \ItemMasterItem (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setInitdesc1($this->getInitdesc1());
        $copyObj->setInitdesc2($this->getInitdesc2());
        $copyObj->setIntbgrup($this->getIntbgrup());
        $copyObj->setInitformatcode($this->getInitformatcode());
        $copyObj->setInitsplit($this->getInitsplit());
        $copyObj->setInitsherdatecd($this->getInitsherdatecd());
        $copyObj->setInitcoreyn($this->getInitcoreyn());
        $copyObj->setIntbusercode1($this->getIntbusercode1());
        $copyObj->setIntbusercode2($this->getIntbusercode2());
        $copyObj->setInittype($this->getInittype());
        $copyObj->setInittax($this->getInittax());
        $copyObj->setInitrtlpric($this->getInitrtlpric());
        $copyObj->setInitstatchgd($this->getInitstatchgd());
        $copyObj->setInitspecitemcd($this->getInitspecitemcd());
        $copyObj->setInitwarrdays($this->getInitwarrdays());
        $copyObj->setIntbuomsale($this->getIntbuomsale());
        $copyObj->setInitwght($this->getInitwght());
        $copyObj->setInitbord($this->getInitbord());
        $copyObj->setInitbaseitemid($this->getInitbaseitemid());
        $copyObj->setInitspecificcust($this->getInitspecificcust());
        $copyObj->setInitgivedisc($this->getInitgivedisc());
        $copyObj->setInitasstcode($this->getInitasstcode());
        $copyObj->setInitpriclastdate($this->getInitpriclastdate());
        $copyObj->setIntbuompur($this->getIntbuompur());
        $copyObj->setInitstancost($this->getInitstancost());
        $copyObj->setInitstancostbase($this->getInitstancostbase());
        $copyObj->setInitstancostlastdate($this->getInitstancostlastdate());
        $copyObj->setInitminmarg($this->getInitminmarg());
        $copyObj->setInitvendid($this->getInitvendid());
        $copyObj->setInitinspect($this->getInitinspect());
        $copyObj->setInitstockcode($this->getInitstockcode());
        $copyObj->setInitsupritemnbr($this->getInitsupritemnbr());
        $copyObj->setInitvendshipfrom($this->getInitvendshipfrom());
        $copyObj->setInitcntryoforigin($this->getInitcntryoforigin());
        $copyObj->setInitasstqty($this->getInitasstqty());
        $copyObj->setIntbtariffcode($this->getIntbtariffcode());
        $copyObj->setInitpreference($this->getInitpreference());
        $copyObj->setInitproducer($this->getInitproducer());
        $copyObj->setInitdocumentation($this->getInitdocumentation());
        $copyObj->setInitpurchcrtnqty($this->getInitpurchcrtnqty());
        $copyObj->setAptbbuyrcode($this->getAptbbuyrcode());
        $copyObj->setInitlastcost($this->getInitlastcost());
        $copyObj->setInitliters($this->getInitliters());
        $copyObj->setIntbmsdscode($this->getIntbmsdscode());
        $copyObj->setInitrequirefrt($this->getInitrequirefrt());
        $copyObj->setInitmfrtcode($this->getInitmfrtcode());
        $copyObj->setInitinnerpackqty($this->getInitinnerpackqty());
        $copyObj->setInitouterpackqty($this->getInitouterpackqty());
        $copyObj->setInitbasestancost($this->getInitbasestancost());
        $copyObj->setInitshiptareqty($this->getInitshiptareqty());
        $copyObj->setInitwgitem($this->getInitwgitem());
        $copyObj->setIntbpricgrup($this->getIntbpricgrup());
        $copyObj->setIntbcommgrup($this->getIntbcommgrup());
        $copyObj->setInitlastcostdate($this->getInitlastcostdate());
        $copyObj->setInitqtypercase($this->getInitqtypercase());
        $copyObj->setInitrevision($this->getInitrevision());
        $copyObj->setInitcommsaleqty($this->getInitcommsaleqty());
        $copyObj->setInitcubes($this->getInitcubes());
        $copyObj->setInittimefence($this->getInittimefence());
        $copyObj->setInitsrvcminchrg($this->getInitsrvcminchrg());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getItemXrefUpcs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefUpc($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefVendors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefVendor($relObj->copy($deepCopy));
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
     * @return \ItemMasterItem Clone of current object.
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
     * Declares an association between this object and a ChildUnitofMeasureSale object.
     *
     * @param  ChildUnitofMeasureSale $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUnitofMeasureSale(ChildUnitofMeasureSale $v = null)
    {
        if ($v === null) {
            $this->setIntbuomsale(NULL);
        } else {
            $this->setIntbuomsale($v->getIntbuomsale());
        }

        $this->aUnitofMeasureSale = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUnitofMeasureSale object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildUnitofMeasureSale object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildUnitofMeasureSale The associated ChildUnitofMeasureSale object.
     * @throws PropelException
     */
    public function getUnitofMeasureSale(ConnectionInterface $con = null)
    {
        if ($this->aUnitofMeasureSale === null && (($this->intbuomsale !== "" && $this->intbuomsale !== null))) {
            $this->aUnitofMeasureSale = ChildUnitofMeasureSaleQuery::create()->findPk($this->intbuomsale, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUnitofMeasureSale->addItemMasterItems($this);
             */
        }

        return $this->aUnitofMeasureSale;
    }

    /**
     * Declares an association between this object and a ChildUnitofMeasurePurchase object.
     *
     * @param  ChildUnitofMeasurePurchase $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUnitofMeasurePurchase(ChildUnitofMeasurePurchase $v = null)
    {
        if ($v === null) {
            $this->setIntbuompur(NULL);
        } else {
            $this->setIntbuompur($v->getIntbuompur());
        }

        $this->aUnitofMeasurePurchase = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUnitofMeasurePurchase object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildUnitofMeasurePurchase object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildUnitofMeasurePurchase The associated ChildUnitofMeasurePurchase object.
     * @throws PropelException
     */
    public function getUnitofMeasurePurchase(ConnectionInterface $con = null)
    {
        if ($this->aUnitofMeasurePurchase === null && (($this->intbuompur !== "" && $this->intbuompur !== null))) {
            $this->aUnitofMeasurePurchase = ChildUnitofMeasurePurchaseQuery::create()->findPk($this->intbuompur, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUnitofMeasurePurchase->addItemMasterItems($this);
             */
        }

        return $this->aUnitofMeasurePurchase;
    }

    /**
     * Declares an association between this object and a ChildInvGroupCode object.
     *
     * @param  ChildInvGroupCode $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvGroupCode(ChildInvGroupCode $v = null)
    {
        if ($v === null) {
            $this->setIntbgrup(NULL);
        } else {
            $this->setIntbgrup($v->getIntbgrup());
        }

        $this->aInvGroupCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvGroupCode object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvGroupCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvGroupCode The associated ChildInvGroupCode object.
     * @throws PropelException
     */
    public function getInvGroupCode(ConnectionInterface $con = null)
    {
        if ($this->aInvGroupCode === null && (($this->intbgrup !== "" && $this->intbgrup !== null))) {
            $this->aInvGroupCode = ChildInvGroupCodeQuery::create()->findPk($this->intbgrup, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvGroupCode->addItemMasterItems($this);
             */
        }

        return $this->aInvGroupCode;
    }

    /**
     * Declares an association between this object and a ChildInvPriceCode object.
     *
     * @param  ChildInvPriceCode $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvPriceCode(ChildInvPriceCode $v = null)
    {
        if ($v === null) {
            $this->setIntbpricgrup(NULL);
        } else {
            $this->setIntbpricgrup($v->getIntbpricgrup());
        }

        $this->aInvPriceCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvPriceCode object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvPriceCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvPriceCode The associated ChildInvPriceCode object.
     * @throws PropelException
     */
    public function getInvPriceCode(ConnectionInterface $con = null)
    {
        if ($this->aInvPriceCode === null && (($this->intbpricgrup !== "" && $this->intbpricgrup !== null))) {
            $this->aInvPriceCode = ChildInvPriceCodeQuery::create()->findPk($this->intbpricgrup, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvPriceCode->addItemMasterItems($this);
             */
        }

        return $this->aInvPriceCode;
    }

    /**
     * Declares an association between this object and a ChildInvCommissionCode object.
     *
     * @param  ChildInvCommissionCode $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvCommissionCode(ChildInvCommissionCode $v = null)
    {
        if ($v === null) {
            $this->setIntbcommgrup(NULL);
        } else {
            $this->setIntbcommgrup($v->getIntbcommgrup());
        }

        $this->aInvCommissionCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvCommissionCode object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvCommissionCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvCommissionCode The associated ChildInvCommissionCode object.
     * @throws PropelException
     */
    public function getInvCommissionCode(ConnectionInterface $con = null)
    {
        if ($this->aInvCommissionCode === null && (($this->intbcommgrup !== "" && $this->intbcommgrup !== null))) {
            $this->aInvCommissionCode = ChildInvCommissionCodeQuery::create()->findPk($this->intbcommgrup, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvCommissionCode->addItemMasterItems($this);
             */
        }

        return $this->aInvCommissionCode;
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
        if ('ItemXrefUpc' == $relationName) {
            $this->initItemXrefUpcs();
            return;
        }
        if ('ItemXrefVendor' == $relationName) {
            $this->initItemXrefVendors();
            return;
        }
    }

    /**
     * Clears out the collItemXrefUpcs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefUpcs()
     */
    public function clearItemXrefUpcs()
    {
        $this->collItemXrefUpcs = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefUpcs collection loaded partially.
     */
    public function resetPartialItemXrefUpcs($v = true)
    {
        $this->collItemXrefUpcsPartial = $v;
    }

    /**
     * Initializes the collItemXrefUpcs collection.
     *
     * By default this just sets the collItemXrefUpcs collection to an empty array (like clearcollItemXrefUpcs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefUpcs($overrideExisting = true)
    {
        if (null !== $this->collItemXrefUpcs && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefUpcTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefUpcs = new $collectionClassName;
        $this->collItemXrefUpcs->setModel('\ItemXrefUpc');
    }

    /**
     * Gets an array of ChildItemXrefUpc objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefUpc[] List of ChildItemXrefUpc objects
     * @throws PropelException
     */
    public function getItemXrefUpcs(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefUpcsPartial && !$this->isNew();
        if (null === $this->collItemXrefUpcs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefUpcs) {
                // return empty collection
                $this->initItemXrefUpcs();
            } else {
                $collItemXrefUpcs = ChildItemXrefUpcQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefUpcsPartial && count($collItemXrefUpcs)) {
                        $this->initItemXrefUpcs(false);

                        foreach ($collItemXrefUpcs as $obj) {
                            if (false == $this->collItemXrefUpcs->contains($obj)) {
                                $this->collItemXrefUpcs->append($obj);
                            }
                        }

                        $this->collItemXrefUpcsPartial = true;
                    }

                    return $collItemXrefUpcs;
                }

                if ($partial && $this->collItemXrefUpcs) {
                    foreach ($this->collItemXrefUpcs as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefUpcs[] = $obj;
                        }
                    }
                }

                $this->collItemXrefUpcs = $collItemXrefUpcs;
                $this->collItemXrefUpcsPartial = false;
            }
        }

        return $this->collItemXrefUpcs;
    }

    /**
     * Sets a collection of ChildItemXrefUpc objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefUpcs A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefUpcs(Collection $itemXrefUpcs, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefUpc[] $itemXrefUpcsToDelete */
        $itemXrefUpcsToDelete = $this->getItemXrefUpcs(new Criteria(), $con)->diff($itemXrefUpcs);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemXrefUpcsScheduledForDeletion = clone $itemXrefUpcsToDelete;

        foreach ($itemXrefUpcsToDelete as $itemXrefUpcRemoved) {
            $itemXrefUpcRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefUpcs = null;
        foreach ($itemXrefUpcs as $itemXrefUpc) {
            $this->addItemXrefUpc($itemXrefUpc);
        }

        $this->collItemXrefUpcs = $itemXrefUpcs;
        $this->collItemXrefUpcsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefUpc objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefUpc objects.
     * @throws PropelException
     */
    public function countItemXrefUpcs(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefUpcsPartial && !$this->isNew();
        if (null === $this->collItemXrefUpcs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefUpcs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefUpcs());
            }

            $query = ChildItemXrefUpcQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefUpcs);
    }

    /**
     * Method called to associate a ChildItemXrefUpc object to this object
     * through the ChildItemXrefUpc foreign key attribute.
     *
     * @param  ChildItemXrefUpc $l ChildItemXrefUpc
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefUpc(ChildItemXrefUpc $l)
    {
        if ($this->collItemXrefUpcs === null) {
            $this->initItemXrefUpcs();
            $this->collItemXrefUpcsPartial = true;
        }

        if (!$this->collItemXrefUpcs->contains($l)) {
            $this->doAddItemXrefUpc($l);

            if ($this->itemXrefUpcsScheduledForDeletion and $this->itemXrefUpcsScheduledForDeletion->contains($l)) {
                $this->itemXrefUpcsScheduledForDeletion->remove($this->itemXrefUpcsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefUpc $itemXrefUpc The ChildItemXrefUpc object to add.
     */
    protected function doAddItemXrefUpc(ChildItemXrefUpc $itemXrefUpc)
    {
        $this->collItemXrefUpcs[]= $itemXrefUpc;
        $itemXrefUpc->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefUpc $itemXrefUpc The ChildItemXrefUpc object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefUpc(ChildItemXrefUpc $itemXrefUpc)
    {
        if ($this->getItemXrefUpcs()->contains($itemXrefUpc)) {
            $pos = $this->collItemXrefUpcs->search($itemXrefUpc);
            $this->collItemXrefUpcs->remove($pos);
            if (null === $this->itemXrefUpcsScheduledForDeletion) {
                $this->itemXrefUpcsScheduledForDeletion = clone $this->collItemXrefUpcs;
                $this->itemXrefUpcsScheduledForDeletion->clear();
            }
            $this->itemXrefUpcsScheduledForDeletion[]= clone $itemXrefUpc;
            $itemXrefUpc->setItemMasterItem(null);
        }

        return $this;
    }

    /**
     * Clears out the collItemXrefVendors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefVendors()
     */
    public function clearItemXrefVendors()
    {
        $this->collItemXrefVendors = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefVendors collection loaded partially.
     */
    public function resetPartialItemXrefVendors($v = true)
    {
        $this->collItemXrefVendorsPartial = $v;
    }

    /**
     * Initializes the collItemXrefVendors collection.
     *
     * By default this just sets the collItemXrefVendors collection to an empty array (like clearcollItemXrefVendors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefVendors($overrideExisting = true)
    {
        if (null !== $this->collItemXrefVendors && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefVendorTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefVendors = new $collectionClassName;
        $this->collItemXrefVendors->setModel('\ItemXrefVendor');
    }

    /**
     * Gets an array of ChildItemXrefVendor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     * @throws PropelException
     */
    public function getItemXrefVendors(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendors) {
                // return empty collection
                $this->initItemXrefVendors();
            } else {
                $collItemXrefVendors = ChildItemXrefVendorQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefVendorsPartial && count($collItemXrefVendors)) {
                        $this->initItemXrefVendors(false);

                        foreach ($collItemXrefVendors as $obj) {
                            if (false == $this->collItemXrefVendors->contains($obj)) {
                                $this->collItemXrefVendors->append($obj);
                            }
                        }

                        $this->collItemXrefVendorsPartial = true;
                    }

                    return $collItemXrefVendors;
                }

                if ($partial && $this->collItemXrefVendors) {
                    foreach ($this->collItemXrefVendors as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefVendors[] = $obj;
                        }
                    }
                }

                $this->collItemXrefVendors = $collItemXrefVendors;
                $this->collItemXrefVendorsPartial = false;
            }
        }

        return $this->collItemXrefVendors;
    }

    /**
     * Sets a collection of ChildItemXrefVendor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefVendors A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefVendors(Collection $itemXrefVendors, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefVendor[] $itemXrefVendorsToDelete */
        $itemXrefVendorsToDelete = $this->getItemXrefVendors(new Criteria(), $con)->diff($itemXrefVendors);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemXrefVendorsScheduledForDeletion = clone $itemXrefVendorsToDelete;

        foreach ($itemXrefVendorsToDelete as $itemXrefVendorRemoved) {
            $itemXrefVendorRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefVendors = null;
        foreach ($itemXrefVendors as $itemXrefVendor) {
            $this->addItemXrefVendor($itemXrefVendor);
        }

        $this->collItemXrefVendors = $itemXrefVendors;
        $this->collItemXrefVendorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefVendor objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefVendor objects.
     * @throws PropelException
     */
    public function countItemXrefVendors(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefVendors());
            }

            $query = ChildItemXrefVendorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefVendors);
    }

    /**
     * Method called to associate a ChildItemXrefVendor object to this object
     * through the ChildItemXrefVendor foreign key attribute.
     *
     * @param  ChildItemXrefVendor $l ChildItemXrefVendor
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefVendor(ChildItemXrefVendor $l)
    {
        if ($this->collItemXrefVendors === null) {
            $this->initItemXrefVendors();
            $this->collItemXrefVendorsPartial = true;
        }

        if (!$this->collItemXrefVendors->contains($l)) {
            $this->doAddItemXrefVendor($l);

            if ($this->itemXrefVendorsScheduledForDeletion and $this->itemXrefVendorsScheduledForDeletion->contains($l)) {
                $this->itemXrefVendorsScheduledForDeletion->remove($this->itemXrefVendorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefVendor $itemXrefVendor The ChildItemXrefVendor object to add.
     */
    protected function doAddItemXrefVendor(ChildItemXrefVendor $itemXrefVendor)
    {
        $this->collItemXrefVendors[]= $itemXrefVendor;
        $itemXrefVendor->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefVendor $itemXrefVendor The ChildItemXrefVendor object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefVendor(ChildItemXrefVendor $itemXrefVendor)
    {
        if ($this->getItemXrefVendors()->contains($itemXrefVendor)) {
            $pos = $this->collItemXrefVendors->search($itemXrefVendor);
            $this->collItemXrefVendors->remove($pos);
            if (null === $this->itemXrefVendorsScheduledForDeletion) {
                $this->itemXrefVendorsScheduledForDeletion = clone $this->collItemXrefVendors;
                $this->itemXrefVendorsScheduledForDeletion->clear();
            }
            $this->itemXrefVendorsScheduledForDeletion[]= clone $itemXrefVendor;
            $itemXrefVendor->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefVendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     */
    public function getItemXrefVendorsJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefVendorQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getItemXrefVendors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefVendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     */
    public function getItemXrefVendorsJoinUnitofMeasurePurchase(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefVendorQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasurePurchase', $joinBehavior);

        return $this->getItemXrefVendors($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aUnitofMeasureSale) {
            $this->aUnitofMeasureSale->removeItemMasterItem($this);
        }
        if (null !== $this->aUnitofMeasurePurchase) {
            $this->aUnitofMeasurePurchase->removeItemMasterItem($this);
        }
        if (null !== $this->aInvGroupCode) {
            $this->aInvGroupCode->removeItemMasterItem($this);
        }
        if (null !== $this->aInvPriceCode) {
            $this->aInvPriceCode->removeItemMasterItem($this);
        }
        if (null !== $this->aInvCommissionCode) {
            $this->aInvCommissionCode->removeItemMasterItem($this);
        }
        $this->inititemnbr = null;
        $this->initdesc1 = null;
        $this->initdesc2 = null;
        $this->intbgrup = null;
        $this->initformatcode = null;
        $this->initsplit = null;
        $this->initsherdatecd = null;
        $this->initcoreyn = null;
        $this->intbusercode1 = null;
        $this->intbusercode2 = null;
        $this->inittype = null;
        $this->inittax = null;
        $this->initrtlpric = null;
        $this->initstatchgd = null;
        $this->initspecitemcd = null;
        $this->initwarrdays = null;
        $this->intbuomsale = null;
        $this->initwght = null;
        $this->initbord = null;
        $this->initbaseitemid = null;
        $this->initspecificcust = null;
        $this->initgivedisc = null;
        $this->initasstcode = null;
        $this->initpriclastdate = null;
        $this->intbuompur = null;
        $this->initstancost = null;
        $this->initstancostbase = null;
        $this->initstancostlastdate = null;
        $this->initminmarg = null;
        $this->initvendid = null;
        $this->initinspect = null;
        $this->initstockcode = null;
        $this->initsupritemnbr = null;
        $this->initvendshipfrom = null;
        $this->initcntryoforigin = null;
        $this->initasstqty = null;
        $this->intbtariffcode = null;
        $this->initpreference = null;
        $this->initproducer = null;
        $this->initdocumentation = null;
        $this->initpurchcrtnqty = null;
        $this->aptbbuyrcode = null;
        $this->initlastcost = null;
        $this->initliters = null;
        $this->intbmsdscode = null;
        $this->initrequirefrt = null;
        $this->initmfrtcode = null;
        $this->initinnerpackqty = null;
        $this->initouterpackqty = null;
        $this->initbasestancost = null;
        $this->initshiptareqty = null;
        $this->initwgitem = null;
        $this->intbpricgrup = null;
        $this->intbcommgrup = null;
        $this->initlastcostdate = null;
        $this->initqtypercase = null;
        $this->initrevision = null;
        $this->initcommsaleqty = null;
        $this->initcubes = null;
        $this->inittimefence = null;
        $this->initsrvcminchrg = null;
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
            if ($this->collItemXrefUpcs) {
                foreach ($this->collItemXrefUpcs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefVendors) {
                foreach ($this->collItemXrefVendors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collItemXrefUpcs = null;
        $this->collItemXrefVendors = null;
        $this->aUnitofMeasureSale = null;
        $this->aUnitofMeasurePurchase = null;
        $this->aInvGroupCode = null;
        $this->aInvPriceCode = null;
        $this->aInvCommissionCode = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItemMasterItemTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
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
            parent::postSave($con);
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
            return parent::preInsert($con);
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
            parent::postInsert($con);
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
            return parent::preUpdate($con);
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
            parent::postUpdate($con);
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
            return parent::preDelete($con);
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
            parent::postDelete($con);
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
