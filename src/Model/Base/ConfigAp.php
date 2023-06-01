<?php

namespace Base;

use \ConfigApQuery as ChildConfigApQuery;
use \Exception;
use \PDO;
use Map\ConfigApTableMap;
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
 * Base class that represents a row from the 'ap_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigAp implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigApTableMap';


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
     * The value for the aptbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $aptbconfkey;

    /**
     * The value for the aptbconfglifac field.
     *
     * @var        string
     */
    protected $aptbconfglifac;

    /**
     * The value for the aptbconfinifac field.
     *
     * @var        string
     */
    protected $aptbconfinifac;

    /**
     * The value for the aptbconfsoifac field.
     *
     * @var        string
     */
    protected $aptbconfsoifac;

    /**
     * The value for the aptbconfpoifac field.
     *
     * @var        string
     */
    protected $aptbconfpoifac;

    /**
     * The value for the aptbconffrtacct field.
     *
     * @var        string
     */
    protected $aptbconffrtacct;

    /**
     * The value for the aptbconfmiscacct field.
     *
     * @var        string
     */
    protected $aptbconfmiscacct;

    /**
     * The value for the aptbconfapacct field.
     *
     * @var        string
     */
    protected $aptbconfapacct;

    /**
     * The value for the aptbconfcashacct field.
     *
     * @var        string
     */
    protected $aptbconfcashacct;

    /**
     * The value for the aptbconfdiscacct field.
     *
     * @var        string
     */
    protected $aptbconfdiscacct;

    /**
     * The value for the aptbconftaxacct field.
     *
     * @var        string
     */
    protected $aptbconftaxacct;

    /**
     * The value for the aptbconfpuracct field.
     *
     * @var        string
     */
    protected $aptbconfpuracct;

    /**
     * The value for the aptbconfvaracct field.
     *
     * @var        string
     */
    protected $aptbconfvaracct;

    /**
     * The value for the aptbconfvenddisc field.
     *
     * @var        string
     */
    protected $aptbconfvenddisc;

    /**
     * The value for the aptbconfapinvvaracct field.
     *
     * @var        string
     */
    protected $aptbconfapinvvaracct;

    /**
     * The value for the aptbconfuseroyal field.
     *
     * @var        string
     */
    protected $aptbconfuseroyal;

    /**
     * The value for the aptbconfdefbuyrcode field.
     *
     * @var        string
     */
    protected $aptbconfdefbuyrcode;

    /**
     * The value for the aptbconfdeftermcode field.
     *
     * @var        string
     */
    protected $aptbconfdeftermcode;

    /**
     * The value for the aptbconfdefsviacode field.
     *
     * @var        string
     */
    protected $aptbconfdefsviacode;

    /**
     * The value for the aptbconfdeftypecode field.
     *
     * @var        string
     */
    protected $aptbconfdeftypecode;

    /**
     * The value for the aptbconfvendline field.
     *
     * @var        int
     */
    protected $aptbconfvendline;

    /**
     * The value for the aptbconfvendcols field.
     *
     * @var        int
     */
    protected $aptbconfvendcols;

    /**
     * The value for the aptbconfpoline field.
     *
     * @var        int
     */
    protected $aptbconfpoline;

    /**
     * The value for the aptbconfpocols field.
     *
     * @var        int
     */
    protected $aptbconfpocols;

    /**
     * The value for the aptbconfvendgetopt field.
     *
     * @var        int
     */
    protected $aptbconfvendgetopt;

    /**
     * The value for the aptbconfpaytoshipfr field.
     *
     * @var        string
     */
    protected $aptbconfpaytoshipfr;

    /**
     * The value for the aptbconfholdstat field.
     *
     * @var        string
     */
    protected $aptbconfholdstat;

    /**
     * The value for the aptbconfdiscret field.
     *
     * @var        string
     */
    protected $aptbconfdiscret;

    /**
     * The value for the aptbconfstopvendchg field.
     *
     * @var        int
     */
    protected $aptbconfstopvendchg;

    /**
     * The value for the aptbconfreqdate2 field.
     *
     * @var        int
     */
    protected $aptbconfreqdate2;

    /**
     * The value for the aptbconfreqdate3 field.
     *
     * @var        int
     */
    protected $aptbconfreqdate3;

    /**
     * The value for the aptbconfreqdate4 field.
     *
     * @var        int
     */
    protected $aptbconfreqdate4;

    /**
     * The value for the aptbconf1099name field.
     *
     * @var        string
     */
    protected $aptbconf1099name;

    /**
     * The value for the aptbconf1099adr1 field.
     *
     * @var        string
     */
    protected $aptbconf1099adr1;

    /**
     * The value for the aptbconf1099adr2 field.
     *
     * @var        string
     */
    protected $aptbconf1099adr2;

    /**
     * The value for the aptbconf1099adr3 field.
     *
     * @var        string
     */
    protected $aptbconf1099adr3;

    /**
     * The value for the aptbconf1099city field.
     *
     * @var        string
     */
    protected $aptbconf1099city;

    /**
     * The value for the aptbconf1099stat field.
     *
     * @var        string
     */
    protected $aptbconf1099stat;

    /**
     * The value for the aptbconf1099zipcode field.
     *
     * @var        string
     */
    protected $aptbconf1099zipcode;

    /**
     * The value for the aptbconf1099id field.
     *
     * @var        string
     */
    protected $aptbconf1099id;

    /**
     * The value for the aptbconfstubsort field.
     *
     * @var        string
     */
    protected $aptbconfstubsort;

    /**
     * The value for the aptbconfuseach field.
     *
     * @var        string
     */
    protected $aptbconfuseach;

    /**
     * The value for the aptbconfover1 field.
     *
     * @var        int
     */
    protected $aptbconfover1;

    /**
     * The value for the aptbconfover2 field.
     *
     * @var        int
     */
    protected $aptbconfover2;

    /**
     * The value for the aptbconfprtchk field.
     *
     * @var        string
     */
    protected $aptbconfprtchk;

    /**
     * The value for the aptbconfeiunrecqty field.
     *
     * @var        string
     */
    protected $aptbconfeiunrecqty;

    /**
     * The value for the aptbconfeirecqtyask field.
     *
     * @var        string
     */
    protected $aptbconfeirecqtyask;

    /**
     * The value for the aptbconfeirecqtydef field.
     *
     * @var        string
     */
    protected $aptbconfeirecqtydef;

    /**
     * The value for the aptbconfallowmultpos field.
     *
     * @var        string
     */
    protected $aptbconfallowmultpos;

    /**
     * The value for the aptbconfeibyclerk field.
     *
     * @var        string
     */
    protected $aptbconfeibyclerk;

    /**
     * The value for the aptbconfeibatchproc field.
     *
     * @var        string
     */
    protected $aptbconfeibatchproc;

    /**
     * The value for the aptbconfeidispstancost field.
     *
     * @var        string
     */
    protected $aptbconfeidispstancost;

    /**
     * The value for the aptbconfeiassetacctchg field.
     *
     * @var        string
     */
    protected $aptbconfeiassetacctchg;

    /**
     * The value for the aptbconfallowdupinvc field.
     *
     * @var        string
     */
    protected $aptbconfallowdupinvc;

    /**
     * The value for the aptbconfprtsorept field.
     *
     * @var        string
     */
    protected $aptbconfprtsorept;

    /**
     * The value for the aptbconfeicheckhist field.
     *
     * @var        string
     */
    protected $aptbconfeicheckhist;

    /**
     * The value for the aptbconfsummgl field.
     *
     * @var        string
     */
    protected $aptbconfsummgl;

    /**
     * The value for the aptbconfvxmuserlabel field.
     *
     * @var        string
     */
    protected $aptbconfvxmuserlabel;

    /**
     * The value for the aptbconfvendcostbreaks field.
     *
     * @var        string
     */
    protected $aptbconfvendcostbreaks;

    /**
     * The value for the aptbconfmyeclrclospo field.
     *
     * @var        string
     */
    protected $aptbconfmyeclrclospo;

    /**
     * The value for the aptbconfmyeclrclosdate field.
     *
     * @var        string
     */
    protected $aptbconfmyeclrclosdate;

    /**
     * The value for the aptbconfmyeclrpohist field.
     *
     * @var        string
     */
    protected $aptbconfmyeclrpohist;

    /**
     * The value for the aptbconfmyeclrpodate field.
     *
     * @var        string
     */
    protected $aptbconfmyeclrpodate;

    /**
     * The value for the aptbconfmyeclrckhist field.
     *
     * @var        string
     */
    protected $aptbconfmyeclrckhist;

    /**
     * The value for the aptbconfmyeclrckdate field.
     *
     * @var        string
     */
    protected $aptbconfmyeclrckdate;

    /**
     * The value for the aptbconfmyeclropenck field.
     *
     * @var        string
     */
    protected $aptbconfmyeclropenck;

    /**
     * The value for the aptbconflead field.
     *
     * @var        string
     */
    protected $aptbconflead;

    /**
     * The value for the aptbconfvrreworkitem field.
     *
     * @var        string
     */
    protected $aptbconfvrreworkitem;

    /**
     * The value for the aptbconfvrqcwhse field.
     *
     * @var        string
     */
    protected $aptbconfvrqcwhse;

    /**
     * The value for the aptbconfvrglacct field.
     *
     * @var        string
     */
    protected $aptbconfvrglacct;

    /**
     * The value for the aptbconfvxmlistpc field.
     *
     * @var        string
     */
    protected $aptbconfvxmlistpc;

    /**
     * The value for the aptbconfvxmlistitemupd field.
     *
     * @var        string
     */
    protected $aptbconfvxmlistitemupd;

    /**
     * The value for the aptbconfvxmgrosslc field.
     *
     * @var        string
     */
    protected $aptbconfvxmgrosslc;

    /**
     * The value for the aptbconfvxmcostlp field.
     *
     * @var        string
     */
    protected $aptbconfvxmcostlp;

    /**
     * The value for the aptbconfvxmcostitemupd field.
     *
     * @var        string
     */
    protected $aptbconfvxmcostitemupd;

    /**
     * The value for the aptbconfvxmcostrmesg field.
     *
     * @var        string
     */
    protected $aptbconfvxmcostrmesg;

    /**
     * The value for the aptbconfvxmcostitemupdm field.
     *
     * @var        string
     */
    protected $aptbconfvxmcostitemupdm;

    /**
     * The value for the aptbconfvxmcostmmesg field.
     *
     * @var        string
     */
    protected $aptbconfvxmcostmmesg;

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
        $this->aptbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigAp object.
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
     * Compares this with another <code>ConfigAp</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigAp</code>, delegates to
     * <code>equals(ConfigAp)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigAp The current object, for fluid interface
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
     * Get the [aptbconfkey] column value.
     *
     * @return int
     */
    public function getAptbconfkey()
    {
        return $this->aptbconfkey;
    }

    /**
     * Get the [aptbconfglifac] column value.
     *
     * @return string
     */
    public function getAptbconfglifac()
    {
        return $this->aptbconfglifac;
    }

    /**
     * Get the [aptbconfinifac] column value.
     *
     * @return string
     */
    public function getAptbconfinifac()
    {
        return $this->aptbconfinifac;
    }

    /**
     * Get the [aptbconfsoifac] column value.
     *
     * @return string
     */
    public function getAptbconfsoifac()
    {
        return $this->aptbconfsoifac;
    }

    /**
     * Get the [aptbconfpoifac] column value.
     *
     * @return string
     */
    public function getAptbconfpoifac()
    {
        return $this->aptbconfpoifac;
    }

    /**
     * Get the [aptbconffrtacct] column value.
     *
     * @return string
     */
    public function getAptbconffrtacct()
    {
        return $this->aptbconffrtacct;
    }

    /**
     * Get the [aptbconfmiscacct] column value.
     *
     * @return string
     */
    public function getAptbconfmiscacct()
    {
        return $this->aptbconfmiscacct;
    }

    /**
     * Get the [aptbconfapacct] column value.
     *
     * @return string
     */
    public function getAptbconfapacct()
    {
        return $this->aptbconfapacct;
    }

    /**
     * Get the [aptbconfcashacct] column value.
     *
     * @return string
     */
    public function getAptbconfcashacct()
    {
        return $this->aptbconfcashacct;
    }

    /**
     * Get the [aptbconfdiscacct] column value.
     *
     * @return string
     */
    public function getAptbconfdiscacct()
    {
        return $this->aptbconfdiscacct;
    }

    /**
     * Get the [aptbconftaxacct] column value.
     *
     * @return string
     */
    public function getAptbconftaxacct()
    {
        return $this->aptbconftaxacct;
    }

    /**
     * Get the [aptbconfpuracct] column value.
     *
     * @return string
     */
    public function getAptbconfpuracct()
    {
        return $this->aptbconfpuracct;
    }

    /**
     * Get the [aptbconfvaracct] column value.
     *
     * @return string
     */
    public function getAptbconfvaracct()
    {
        return $this->aptbconfvaracct;
    }

    /**
     * Get the [aptbconfvenddisc] column value.
     *
     * @return string
     */
    public function getAptbconfvenddisc()
    {
        return $this->aptbconfvenddisc;
    }

    /**
     * Get the [aptbconfapinvvaracct] column value.
     *
     * @return string
     */
    public function getAptbconfapinvvaracct()
    {
        return $this->aptbconfapinvvaracct;
    }

    /**
     * Get the [aptbconfuseroyal] column value.
     *
     * @return string
     */
    public function getAptbconfuseroyal()
    {
        return $this->aptbconfuseroyal;
    }

    /**
     * Get the [aptbconfdefbuyrcode] column value.
     *
     * @return string
     */
    public function getAptbconfdefbuyrcode()
    {
        return $this->aptbconfdefbuyrcode;
    }

    /**
     * Get the [aptbconfdeftermcode] column value.
     *
     * @return string
     */
    public function getAptbconfdeftermcode()
    {
        return $this->aptbconfdeftermcode;
    }

    /**
     * Get the [aptbconfdefsviacode] column value.
     *
     * @return string
     */
    public function getAptbconfdefsviacode()
    {
        return $this->aptbconfdefsviacode;
    }

    /**
     * Get the [aptbconfdeftypecode] column value.
     *
     * @return string
     */
    public function getAptbconfdeftypecode()
    {
        return $this->aptbconfdeftypecode;
    }

    /**
     * Get the [aptbconfvendline] column value.
     *
     * @return int
     */
    public function getAptbconfvendline()
    {
        return $this->aptbconfvendline;
    }

    /**
     * Get the [aptbconfvendcols] column value.
     *
     * @return int
     */
    public function getAptbconfvendcols()
    {
        return $this->aptbconfvendcols;
    }

    /**
     * Get the [aptbconfpoline] column value.
     *
     * @return int
     */
    public function getAptbconfpoline()
    {
        return $this->aptbconfpoline;
    }

    /**
     * Get the [aptbconfpocols] column value.
     *
     * @return int
     */
    public function getAptbconfpocols()
    {
        return $this->aptbconfpocols;
    }

    /**
     * Get the [aptbconfvendgetopt] column value.
     *
     * @return int
     */
    public function getAptbconfvendgetopt()
    {
        return $this->aptbconfvendgetopt;
    }

    /**
     * Get the [aptbconfpaytoshipfr] column value.
     *
     * @return string
     */
    public function getAptbconfpaytoshipfr()
    {
        return $this->aptbconfpaytoshipfr;
    }

    /**
     * Get the [aptbconfholdstat] column value.
     *
     * @return string
     */
    public function getAptbconfholdstat()
    {
        return $this->aptbconfholdstat;
    }

    /**
     * Get the [aptbconfdiscret] column value.
     *
     * @return string
     */
    public function getAptbconfdiscret()
    {
        return $this->aptbconfdiscret;
    }

    /**
     * Get the [aptbconfstopvendchg] column value.
     *
     * @return int
     */
    public function getAptbconfstopvendchg()
    {
        return $this->aptbconfstopvendchg;
    }

    /**
     * Get the [aptbconfreqdate2] column value.
     *
     * @return int
     */
    public function getAptbconfreqdate2()
    {
        return $this->aptbconfreqdate2;
    }

    /**
     * Get the [aptbconfreqdate3] column value.
     *
     * @return int
     */
    public function getAptbconfreqdate3()
    {
        return $this->aptbconfreqdate3;
    }

    /**
     * Get the [aptbconfreqdate4] column value.
     *
     * @return int
     */
    public function getAptbconfreqdate4()
    {
        return $this->aptbconfreqdate4;
    }

    /**
     * Get the [aptbconf1099name] column value.
     *
     * @return string
     */
    public function getAptbconf1099name()
    {
        return $this->aptbconf1099name;
    }

    /**
     * Get the [aptbconf1099adr1] column value.
     *
     * @return string
     */
    public function getAptbconf1099adr1()
    {
        return $this->aptbconf1099adr1;
    }

    /**
     * Get the [aptbconf1099adr2] column value.
     *
     * @return string
     */
    public function getAptbconf1099adr2()
    {
        return $this->aptbconf1099adr2;
    }

    /**
     * Get the [aptbconf1099adr3] column value.
     *
     * @return string
     */
    public function getAptbconf1099adr3()
    {
        return $this->aptbconf1099adr3;
    }

    /**
     * Get the [aptbconf1099city] column value.
     *
     * @return string
     */
    public function getAptbconf1099city()
    {
        return $this->aptbconf1099city;
    }

    /**
     * Get the [aptbconf1099stat] column value.
     *
     * @return string
     */
    public function getAptbconf1099stat()
    {
        return $this->aptbconf1099stat;
    }

    /**
     * Get the [aptbconf1099zipcode] column value.
     *
     * @return string
     */
    public function getAptbconf1099zipcode()
    {
        return $this->aptbconf1099zipcode;
    }

    /**
     * Get the [aptbconf1099id] column value.
     *
     * @return string
     */
    public function getAptbconf1099id()
    {
        return $this->aptbconf1099id;
    }

    /**
     * Get the [aptbconfstubsort] column value.
     *
     * @return string
     */
    public function getAptbconfstubsort()
    {
        return $this->aptbconfstubsort;
    }

    /**
     * Get the [aptbconfuseach] column value.
     *
     * @return string
     */
    public function getAptbConfUseAch()
    {
        return $this->aptbconfuseach;
    }

    /**
     * Get the [aptbconfover1] column value.
     *
     * @return int
     */
    public function getAptbconfover1()
    {
        return $this->aptbconfover1;
    }

    /**
     * Get the [aptbconfover2] column value.
     *
     * @return int
     */
    public function getAptbconfover2()
    {
        return $this->aptbconfover2;
    }

    /**
     * Get the [aptbconfprtchk] column value.
     *
     * @return string
     */
    public function getAptbconfprtchk()
    {
        return $this->aptbconfprtchk;
    }

    /**
     * Get the [aptbconfeiunrecqty] column value.
     *
     * @return string
     */
    public function getAptbconfeiunrecqty()
    {
        return $this->aptbconfeiunrecqty;
    }

    /**
     * Get the [aptbconfeirecqtyask] column value.
     *
     * @return string
     */
    public function getAptbconfeirecqtyask()
    {
        return $this->aptbconfeirecqtyask;
    }

    /**
     * Get the [aptbconfeirecqtydef] column value.
     *
     * @return string
     */
    public function getAptbconfeirecqtydef()
    {
        return $this->aptbconfeirecqtydef;
    }

    /**
     * Get the [aptbconfallowmultpos] column value.
     *
     * @return string
     */
    public function getAptbconfallowmultpos()
    {
        return $this->aptbconfallowmultpos;
    }

    /**
     * Get the [aptbconfeibyclerk] column value.
     *
     * @return string
     */
    public function getAptbconfeibyclerk()
    {
        return $this->aptbconfeibyclerk;
    }

    /**
     * Get the [aptbconfeibatchproc] column value.
     *
     * @return string
     */
    public function getAptbconfeibatchproc()
    {
        return $this->aptbconfeibatchproc;
    }

    /**
     * Get the [aptbconfeidispstancost] column value.
     *
     * @return string
     */
    public function getAptbconfeidispstancost()
    {
        return $this->aptbconfeidispstancost;
    }

    /**
     * Get the [aptbconfeiassetacctchg] column value.
     *
     * @return string
     */
    public function getAptbconfeiassetacctchg()
    {
        return $this->aptbconfeiassetacctchg;
    }

    /**
     * Get the [aptbconfallowdupinvc] column value.
     *
     * @return string
     */
    public function getAptbconfallowdupinvc()
    {
        return $this->aptbconfallowdupinvc;
    }

    /**
     * Get the [aptbconfprtsorept] column value.
     *
     * @return string
     */
    public function getAptbconfprtsorept()
    {
        return $this->aptbconfprtsorept;
    }

    /**
     * Get the [aptbconfeicheckhist] column value.
     *
     * @return string
     */
    public function getAptbconfeicheckhist()
    {
        return $this->aptbconfeicheckhist;
    }

    /**
     * Get the [aptbconfsummgl] column value.
     *
     * @return string
     */
    public function getAptbconfsummgl()
    {
        return $this->aptbconfsummgl;
    }

    /**
     * Get the [aptbconfvxmuserlabel] column value.
     *
     * @return string
     */
    public function getAptbconfvxmuserlabel()
    {
        return $this->aptbconfvxmuserlabel;
    }

    /**
     * Get the [aptbconfvendcostbreaks] column value.
     *
     * @return string
     */
    public function getAptbconfvendcostbreaks()
    {
        return $this->aptbconfvendcostbreaks;
    }

    /**
     * Get the [aptbconfmyeclrclospo] column value.
     *
     * @return string
     */
    public function getAptbconfmyeclrclospo()
    {
        return $this->aptbconfmyeclrclospo;
    }

    /**
     * Get the [aptbconfmyeclrclosdate] column value.
     *
     * @return string
     */
    public function getAptbconfmyeclrclosdate()
    {
        return $this->aptbconfmyeclrclosdate;
    }

    /**
     * Get the [aptbconfmyeclrpohist] column value.
     *
     * @return string
     */
    public function getAptbconfmyeclrpohist()
    {
        return $this->aptbconfmyeclrpohist;
    }

    /**
     * Get the [aptbconfmyeclrpodate] column value.
     *
     * @return string
     */
    public function getAptbconfmyeclrpodate()
    {
        return $this->aptbconfmyeclrpodate;
    }

    /**
     * Get the [aptbconfmyeclrckhist] column value.
     *
     * @return string
     */
    public function getAptbconfmyeclrckhist()
    {
        return $this->aptbconfmyeclrckhist;
    }

    /**
     * Get the [aptbconfmyeclrckdate] column value.
     *
     * @return string
     */
    public function getAptbconfmyeclrckdate()
    {
        return $this->aptbconfmyeclrckdate;
    }

    /**
     * Get the [aptbconfmyeclropenck] column value.
     *
     * @return string
     */
    public function getAptbconfmyeclropenck()
    {
        return $this->aptbconfmyeclropenck;
    }

    /**
     * Get the [aptbconflead] column value.
     *
     * @return string
     */
    public function getAptbconflead()
    {
        return $this->aptbconflead;
    }

    /**
     * Get the [aptbconfvrreworkitem] column value.
     *
     * @return string
     */
    public function getAptbconfvrreworkitem()
    {
        return $this->aptbconfvrreworkitem;
    }

    /**
     * Get the [aptbconfvrqcwhse] column value.
     *
     * @return string
     */
    public function getAptbconfvrqcwhse()
    {
        return $this->aptbconfvrqcwhse;
    }

    /**
     * Get the [aptbconfvrglacct] column value.
     *
     * @return string
     */
    public function getAptbconfvrglacct()
    {
        return $this->aptbconfvrglacct;
    }

    /**
     * Get the [aptbconfvxmlistpc] column value.
     *
     * @return string
     */
    public function getAptbconfvxmlistpc()
    {
        return $this->aptbconfvxmlistpc;
    }

    /**
     * Get the [aptbconfvxmlistitemupd] column value.
     *
     * @return string
     */
    public function getAptbconfvxmlistitemupd()
    {
        return $this->aptbconfvxmlistitemupd;
    }

    /**
     * Get the [aptbconfvxmgrosslc] column value.
     *
     * @return string
     */
    public function getAptbconfvxmgrosslc()
    {
        return $this->aptbconfvxmgrosslc;
    }

    /**
     * Get the [aptbconfvxmcostlp] column value.
     *
     * @return string
     */
    public function getAptbconfvxmcostlp()
    {
        return $this->aptbconfvxmcostlp;
    }

    /**
     * Get the [aptbconfvxmcostitemupd] column value.
     *
     * @return string
     */
    public function getAptbconfvxmcostitemupd()
    {
        return $this->aptbconfvxmcostitemupd;
    }

    /**
     * Get the [aptbconfvxmcostrmesg] column value.
     *
     * @return string
     */
    public function getAptbconfvxmcostrmesg()
    {
        return $this->aptbconfvxmcostrmesg;
    }

    /**
     * Get the [aptbconfvxmcostitemupdm] column value.
     *
     * @return string
     */
    public function getAptbconfvxmcostitemupdm()
    {
        return $this->aptbconfvxmcostitemupdm;
    }

    /**
     * Get the [aptbconfvxmcostmmesg] column value.
     *
     * @return string
     */
    public function getAptbconfvxmcostmmesg()
    {
        return $this->aptbconfvxmcostmmesg;
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
     * Set the value of [aptbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfkey !== $v) {
            $this->aptbconfkey = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFKEY] = true;
        }

        return $this;
    } // setAptbconfkey()

    /**
     * Set the value of [aptbconfglifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfglifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfglifac !== $v) {
            $this->aptbconfglifac = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFGLIFAC] = true;
        }

        return $this;
    } // setAptbconfglifac()

    /**
     * Set the value of [aptbconfinifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfinifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfinifac !== $v) {
            $this->aptbconfinifac = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFINIFAC] = true;
        }

        return $this;
    } // setAptbconfinifac()

    /**
     * Set the value of [aptbconfsoifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfsoifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfsoifac !== $v) {
            $this->aptbconfsoifac = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFSOIFAC] = true;
        }

        return $this;
    } // setAptbconfsoifac()

    /**
     * Set the value of [aptbconfpoifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfpoifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfpoifac !== $v) {
            $this->aptbconfpoifac = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFPOIFAC] = true;
        }

        return $this;
    } // setAptbconfpoifac()

    /**
     * Set the value of [aptbconffrtacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconffrtacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconffrtacct !== $v) {
            $this->aptbconffrtacct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFFRTACCT] = true;
        }

        return $this;
    } // setAptbconffrtacct()

    /**
     * Set the value of [aptbconfmiscacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfmiscacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfmiscacct !== $v) {
            $this->aptbconfmiscacct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFMISCACCT] = true;
        }

        return $this;
    } // setAptbconfmiscacct()

    /**
     * Set the value of [aptbconfapacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfapacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfapacct !== $v) {
            $this->aptbconfapacct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFAPACCT] = true;
        }

        return $this;
    } // setAptbconfapacct()

    /**
     * Set the value of [aptbconfcashacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfcashacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfcashacct !== $v) {
            $this->aptbconfcashacct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFCASHACCT] = true;
        }

        return $this;
    } // setAptbconfcashacct()

    /**
     * Set the value of [aptbconfdiscacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfdiscacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfdiscacct !== $v) {
            $this->aptbconfdiscacct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFDISCACCT] = true;
        }

        return $this;
    } // setAptbconfdiscacct()

    /**
     * Set the value of [aptbconftaxacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconftaxacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconftaxacct !== $v) {
            $this->aptbconftaxacct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFTAXACCT] = true;
        }

        return $this;
    } // setAptbconftaxacct()

    /**
     * Set the value of [aptbconfpuracct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfpuracct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfpuracct !== $v) {
            $this->aptbconfpuracct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFPURACCT] = true;
        }

        return $this;
    } // setAptbconfpuracct()

    /**
     * Set the value of [aptbconfvaracct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvaracct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvaracct !== $v) {
            $this->aptbconfvaracct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVARACCT] = true;
        }

        return $this;
    } // setAptbconfvaracct()

    /**
     * Set the value of [aptbconfvenddisc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvenddisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvenddisc !== $v) {
            $this->aptbconfvenddisc = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVENDDISC] = true;
        }

        return $this;
    } // setAptbconfvenddisc()

    /**
     * Set the value of [aptbconfapinvvaracct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfapinvvaracct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfapinvvaracct !== $v) {
            $this->aptbconfapinvvaracct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFAPINVVARACCT] = true;
        }

        return $this;
    } // setAptbconfapinvvaracct()

    /**
     * Set the value of [aptbconfuseroyal] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfuseroyal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfuseroyal !== $v) {
            $this->aptbconfuseroyal = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFUSEROYAL] = true;
        }

        return $this;
    } // setAptbconfuseroyal()

    /**
     * Set the value of [aptbconfdefbuyrcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfdefbuyrcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfdefbuyrcode !== $v) {
            $this->aptbconfdefbuyrcode = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFDEFBUYRCODE] = true;
        }

        return $this;
    } // setAptbconfdefbuyrcode()

    /**
     * Set the value of [aptbconfdeftermcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfdeftermcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfdeftermcode !== $v) {
            $this->aptbconfdeftermcode = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFDEFTERMCODE] = true;
        }

        return $this;
    } // setAptbconfdeftermcode()

    /**
     * Set the value of [aptbconfdefsviacode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfdefsviacode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfdefsviacode !== $v) {
            $this->aptbconfdefsviacode = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFDEFSVIACODE] = true;
        }

        return $this;
    } // setAptbconfdefsviacode()

    /**
     * Set the value of [aptbconfdeftypecode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfdeftypecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfdeftypecode !== $v) {
            $this->aptbconfdeftypecode = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFDEFTYPECODE] = true;
        }

        return $this;
    } // setAptbconfdeftypecode()

    /**
     * Set the value of [aptbconfvendline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvendline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfvendline !== $v) {
            $this->aptbconfvendline = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVENDLINE] = true;
        }

        return $this;
    } // setAptbconfvendline()

    /**
     * Set the value of [aptbconfvendcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvendcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfvendcols !== $v) {
            $this->aptbconfvendcols = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVENDCOLS] = true;
        }

        return $this;
    } // setAptbconfvendcols()

    /**
     * Set the value of [aptbconfpoline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfpoline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfpoline !== $v) {
            $this->aptbconfpoline = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFPOLINE] = true;
        }

        return $this;
    } // setAptbconfpoline()

    /**
     * Set the value of [aptbconfpocols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfpocols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfpocols !== $v) {
            $this->aptbconfpocols = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFPOCOLS] = true;
        }

        return $this;
    } // setAptbconfpocols()

    /**
     * Set the value of [aptbconfvendgetopt] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvendgetopt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfvendgetopt !== $v) {
            $this->aptbconfvendgetopt = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVENDGETOPT] = true;
        }

        return $this;
    } // setAptbconfvendgetopt()

    /**
     * Set the value of [aptbconfpaytoshipfr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfpaytoshipfr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfpaytoshipfr !== $v) {
            $this->aptbconfpaytoshipfr = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFPAYTOSHIPFR] = true;
        }

        return $this;
    } // setAptbconfpaytoshipfr()

    /**
     * Set the value of [aptbconfholdstat] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfholdstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfholdstat !== $v) {
            $this->aptbconfholdstat = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFHOLDSTAT] = true;
        }

        return $this;
    } // setAptbconfholdstat()

    /**
     * Set the value of [aptbconfdiscret] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfdiscret($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfdiscret !== $v) {
            $this->aptbconfdiscret = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFDISCRET] = true;
        }

        return $this;
    } // setAptbconfdiscret()

    /**
     * Set the value of [aptbconfstopvendchg] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfstopvendchg($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfstopvendchg !== $v) {
            $this->aptbconfstopvendchg = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFSTOPVENDCHG] = true;
        }

        return $this;
    } // setAptbconfstopvendchg()

    /**
     * Set the value of [aptbconfreqdate2] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfreqdate2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfreqdate2 !== $v) {
            $this->aptbconfreqdate2 = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFREQDATE2] = true;
        }

        return $this;
    } // setAptbconfreqdate2()

    /**
     * Set the value of [aptbconfreqdate3] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfreqdate3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfreqdate3 !== $v) {
            $this->aptbconfreqdate3 = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFREQDATE3] = true;
        }

        return $this;
    } // setAptbconfreqdate3()

    /**
     * Set the value of [aptbconfreqdate4] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfreqdate4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfreqdate4 !== $v) {
            $this->aptbconfreqdate4 = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFREQDATE4] = true;
        }

        return $this;
    } // setAptbconfreqdate4()

    /**
     * Set the value of [aptbconf1099name] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconf1099name($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconf1099name !== $v) {
            $this->aptbconf1099name = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONF1099NAME] = true;
        }

        return $this;
    } // setAptbconf1099name()

    /**
     * Set the value of [aptbconf1099adr1] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconf1099adr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconf1099adr1 !== $v) {
            $this->aptbconf1099adr1 = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONF1099ADR1] = true;
        }

        return $this;
    } // setAptbconf1099adr1()

    /**
     * Set the value of [aptbconf1099adr2] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconf1099adr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconf1099adr2 !== $v) {
            $this->aptbconf1099adr2 = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONF1099ADR2] = true;
        }

        return $this;
    } // setAptbconf1099adr2()

    /**
     * Set the value of [aptbconf1099adr3] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconf1099adr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconf1099adr3 !== $v) {
            $this->aptbconf1099adr3 = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONF1099ADR3] = true;
        }

        return $this;
    } // setAptbconf1099adr3()

    /**
     * Set the value of [aptbconf1099city] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconf1099city($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconf1099city !== $v) {
            $this->aptbconf1099city = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONF1099CITY] = true;
        }

        return $this;
    } // setAptbconf1099city()

    /**
     * Set the value of [aptbconf1099stat] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconf1099stat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconf1099stat !== $v) {
            $this->aptbconf1099stat = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONF1099STAT] = true;
        }

        return $this;
    } // setAptbconf1099stat()

    /**
     * Set the value of [aptbconf1099zipcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconf1099zipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconf1099zipcode !== $v) {
            $this->aptbconf1099zipcode = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONF1099ZIPCODE] = true;
        }

        return $this;
    } // setAptbconf1099zipcode()

    /**
     * Set the value of [aptbconf1099id] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconf1099id($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconf1099id !== $v) {
            $this->aptbconf1099id = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONF1099ID] = true;
        }

        return $this;
    } // setAptbconf1099id()

    /**
     * Set the value of [aptbconfstubsort] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfstubsort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfstubsort !== $v) {
            $this->aptbconfstubsort = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFSTUBSORT] = true;
        }

        return $this;
    } // setAptbconfstubsort()

    /**
     * Set the value of [aptbconfuseach] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbConfUseAch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfuseach !== $v) {
            $this->aptbconfuseach = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFUSEACH] = true;
        }

        return $this;
    } // setAptbConfUseAch()

    /**
     * Set the value of [aptbconfover1] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfover1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfover1 !== $v) {
            $this->aptbconfover1 = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFOVER1] = true;
        }

        return $this;
    } // setAptbconfover1()

    /**
     * Set the value of [aptbconfover2] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfover2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptbconfover2 !== $v) {
            $this->aptbconfover2 = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFOVER2] = true;
        }

        return $this;
    } // setAptbconfover2()

    /**
     * Set the value of [aptbconfprtchk] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfprtchk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfprtchk !== $v) {
            $this->aptbconfprtchk = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFPRTCHK] = true;
        }

        return $this;
    } // setAptbconfprtchk()

    /**
     * Set the value of [aptbconfeiunrecqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfeiunrecqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfeiunrecqty !== $v) {
            $this->aptbconfeiunrecqty = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFEIUNRECQTY] = true;
        }

        return $this;
    } // setAptbconfeiunrecqty()

    /**
     * Set the value of [aptbconfeirecqtyask] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfeirecqtyask($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfeirecqtyask !== $v) {
            $this->aptbconfeirecqtyask = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFEIRECQTYASK] = true;
        }

        return $this;
    } // setAptbconfeirecqtyask()

    /**
     * Set the value of [aptbconfeirecqtydef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfeirecqtydef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfeirecqtydef !== $v) {
            $this->aptbconfeirecqtydef = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFEIRECQTYDEF] = true;
        }

        return $this;
    } // setAptbconfeirecqtydef()

    /**
     * Set the value of [aptbconfallowmultpos] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfallowmultpos($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfallowmultpos !== $v) {
            $this->aptbconfallowmultpos = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFALLOWMULTPOS] = true;
        }

        return $this;
    } // setAptbconfallowmultpos()

    /**
     * Set the value of [aptbconfeibyclerk] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfeibyclerk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfeibyclerk !== $v) {
            $this->aptbconfeibyclerk = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFEIBYCLERK] = true;
        }

        return $this;
    } // setAptbconfeibyclerk()

    /**
     * Set the value of [aptbconfeibatchproc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfeibatchproc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfeibatchproc !== $v) {
            $this->aptbconfeibatchproc = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFEIBATCHPROC] = true;
        }

        return $this;
    } // setAptbconfeibatchproc()

    /**
     * Set the value of [aptbconfeidispstancost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfeidispstancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfeidispstancost !== $v) {
            $this->aptbconfeidispstancost = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFEIDISPSTANCOST] = true;
        }

        return $this;
    } // setAptbconfeidispstancost()

    /**
     * Set the value of [aptbconfeiassetacctchg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfeiassetacctchg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfeiassetacctchg !== $v) {
            $this->aptbconfeiassetacctchg = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFEIASSETACCTCHG] = true;
        }

        return $this;
    } // setAptbconfeiassetacctchg()

    /**
     * Set the value of [aptbconfallowdupinvc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfallowdupinvc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfallowdupinvc !== $v) {
            $this->aptbconfallowdupinvc = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFALLOWDUPINVC] = true;
        }

        return $this;
    } // setAptbconfallowdupinvc()

    /**
     * Set the value of [aptbconfprtsorept] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfprtsorept($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfprtsorept !== $v) {
            $this->aptbconfprtsorept = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFPRTSOREPT] = true;
        }

        return $this;
    } // setAptbconfprtsorept()

    /**
     * Set the value of [aptbconfeicheckhist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfeicheckhist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfeicheckhist !== $v) {
            $this->aptbconfeicheckhist = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFEICHECKHIST] = true;
        }

        return $this;
    } // setAptbconfeicheckhist()

    /**
     * Set the value of [aptbconfsummgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfsummgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfsummgl !== $v) {
            $this->aptbconfsummgl = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFSUMMGL] = true;
        }

        return $this;
    } // setAptbconfsummgl()

    /**
     * Set the value of [aptbconfvxmuserlabel] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmuserlabel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmuserlabel !== $v) {
            $this->aptbconfvxmuserlabel = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMUSERLABEL] = true;
        }

        return $this;
    } // setAptbconfvxmuserlabel()

    /**
     * Set the value of [aptbconfvendcostbreaks] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvendcostbreaks($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvendcostbreaks !== $v) {
            $this->aptbconfvendcostbreaks = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVENDCOSTBREAKS] = true;
        }

        return $this;
    } // setAptbconfvendcostbreaks()

    /**
     * Set the value of [aptbconfmyeclrclospo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfmyeclrclospo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfmyeclrclospo !== $v) {
            $this->aptbconfmyeclrclospo = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFMYECLRCLOSPO] = true;
        }

        return $this;
    } // setAptbconfmyeclrclospo()

    /**
     * Set the value of [aptbconfmyeclrclosdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfmyeclrclosdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfmyeclrclosdate !== $v) {
            $this->aptbconfmyeclrclosdate = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFMYECLRCLOSDATE] = true;
        }

        return $this;
    } // setAptbconfmyeclrclosdate()

    /**
     * Set the value of [aptbconfmyeclrpohist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfmyeclrpohist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfmyeclrpohist !== $v) {
            $this->aptbconfmyeclrpohist = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFMYECLRPOHIST] = true;
        }

        return $this;
    } // setAptbconfmyeclrpohist()

    /**
     * Set the value of [aptbconfmyeclrpodate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfmyeclrpodate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfmyeclrpodate !== $v) {
            $this->aptbconfmyeclrpodate = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFMYECLRPODATE] = true;
        }

        return $this;
    } // setAptbconfmyeclrpodate()

    /**
     * Set the value of [aptbconfmyeclrckhist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfmyeclrckhist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfmyeclrckhist !== $v) {
            $this->aptbconfmyeclrckhist = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFMYECLRCKHIST] = true;
        }

        return $this;
    } // setAptbconfmyeclrckhist()

    /**
     * Set the value of [aptbconfmyeclrckdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfmyeclrckdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfmyeclrckdate !== $v) {
            $this->aptbconfmyeclrckdate = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFMYECLRCKDATE] = true;
        }

        return $this;
    } // setAptbconfmyeclrckdate()

    /**
     * Set the value of [aptbconfmyeclropenck] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfmyeclropenck($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfmyeclropenck !== $v) {
            $this->aptbconfmyeclropenck = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFMYECLROPENCK] = true;
        }

        return $this;
    } // setAptbconfmyeclropenck()

    /**
     * Set the value of [aptbconflead] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconflead($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconflead !== $v) {
            $this->aptbconflead = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFLEAD] = true;
        }

        return $this;
    } // setAptbconflead()

    /**
     * Set the value of [aptbconfvrreworkitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvrreworkitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvrreworkitem !== $v) {
            $this->aptbconfvrreworkitem = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVRREWORKITEM] = true;
        }

        return $this;
    } // setAptbconfvrreworkitem()

    /**
     * Set the value of [aptbconfvrqcwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvrqcwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvrqcwhse !== $v) {
            $this->aptbconfvrqcwhse = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVRQCWHSE] = true;
        }

        return $this;
    } // setAptbconfvrqcwhse()

    /**
     * Set the value of [aptbconfvrglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvrglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvrglacct !== $v) {
            $this->aptbconfvrglacct = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVRGLACCT] = true;
        }

        return $this;
    } // setAptbconfvrglacct()

    /**
     * Set the value of [aptbconfvxmlistpc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmlistpc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmlistpc !== $v) {
            $this->aptbconfvxmlistpc = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMLISTPC] = true;
        }

        return $this;
    } // setAptbconfvxmlistpc()

    /**
     * Set the value of [aptbconfvxmlistitemupd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmlistitemupd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmlistitemupd !== $v) {
            $this->aptbconfvxmlistitemupd = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMLISTITEMUPD] = true;
        }

        return $this;
    } // setAptbconfvxmlistitemupd()

    /**
     * Set the value of [aptbconfvxmgrosslc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmgrosslc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmgrosslc !== $v) {
            $this->aptbconfvxmgrosslc = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMGROSSLC] = true;
        }

        return $this;
    } // setAptbconfvxmgrosslc()

    /**
     * Set the value of [aptbconfvxmcostlp] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmcostlp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmcostlp !== $v) {
            $this->aptbconfvxmcostlp = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMCOSTLP] = true;
        }

        return $this;
    } // setAptbconfvxmcostlp()

    /**
     * Set the value of [aptbconfvxmcostitemupd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmcostitemupd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmcostitemupd !== $v) {
            $this->aptbconfvxmcostitemupd = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPD] = true;
        }

        return $this;
    } // setAptbconfvxmcostitemupd()

    /**
     * Set the value of [aptbconfvxmcostrmesg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmcostrmesg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmcostrmesg !== $v) {
            $this->aptbconfvxmcostrmesg = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMCOSTRMESG] = true;
        }

        return $this;
    } // setAptbconfvxmcostrmesg()

    /**
     * Set the value of [aptbconfvxmcostitemupdm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmcostitemupdm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmcostitemupdm !== $v) {
            $this->aptbconfvxmcostitemupdm = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPDM] = true;
        }

        return $this;
    } // setAptbconfvxmcostitemupdm()

    /**
     * Set the value of [aptbconfvxmcostmmesg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setAptbconfvxmcostmmesg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbconfvxmcostmmesg !== $v) {
            $this->aptbconfvxmcostmmesg = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_APTBCONFVXMCOSTMMESG] = true;
        }

        return $this;
    } // setAptbconfvxmcostmmesg()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAp The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigApTableMap::COL_DUMMY] = true;
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
            if ($this->aptbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfglifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfglifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfinifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfinifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfsoifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfsoifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfpoifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfpoifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigApTableMap::translateFieldName('Aptbconffrtacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconffrtacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfmiscacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfmiscacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfapacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfapacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfcashacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfcashacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfdiscacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfdiscacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigApTableMap::translateFieldName('Aptbconftaxacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconftaxacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfpuracct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfpuracct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvaracct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvaracct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvenddisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvenddisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfapinvvaracct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfapinvvaracct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfuseroyal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfuseroyal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfdefbuyrcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfdefbuyrcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfdeftermcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfdeftermcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfdefsviacode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfdefsviacode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfdeftypecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfdeftypecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvendline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvendline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvendcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvendcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfpoline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfpoline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfpocols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfpocols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvendgetopt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvendgetopt = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfpaytoshipfr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfpaytoshipfr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfholdstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfholdstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfdiscret', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfdiscret = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfstopvendchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfstopvendchg = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfreqdate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfreqdate2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfreqdate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfreqdate3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfreqdate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfreqdate4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ConfigApTableMap::translateFieldName('Aptbconf1099name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconf1099name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ConfigApTableMap::translateFieldName('Aptbconf1099adr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconf1099adr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ConfigApTableMap::translateFieldName('Aptbconf1099adr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconf1099adr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ConfigApTableMap::translateFieldName('Aptbconf1099adr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconf1099adr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ConfigApTableMap::translateFieldName('Aptbconf1099city', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconf1099city = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ConfigApTableMap::translateFieldName('Aptbconf1099stat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconf1099stat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ConfigApTableMap::translateFieldName('Aptbconf1099zipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconf1099zipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ConfigApTableMap::translateFieldName('Aptbconf1099id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconf1099id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfstubsort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfstubsort = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ConfigApTableMap::translateFieldName('AptbConfUseAch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfuseach = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfover1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfover1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfover2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfover2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfprtchk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfprtchk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfeiunrecqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfeiunrecqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfeirecqtyask', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfeirecqtyask = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfeirecqtydef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfeirecqtydef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfallowmultpos', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfallowmultpos = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfeibyclerk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfeibyclerk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfeibatchproc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfeibatchproc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfeidispstancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfeidispstancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfeiassetacctchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfeiassetacctchg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfallowdupinvc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfallowdupinvc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfprtsorept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfprtsorept = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfeicheckhist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfeicheckhist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfsummgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfsummgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmuserlabel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmuserlabel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvendcostbreaks', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvendcostbreaks = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfmyeclrclospo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfmyeclrclospo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfmyeclrclosdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfmyeclrclosdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfmyeclrpohist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfmyeclrpohist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfmyeclrpodate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfmyeclrpodate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfmyeclrckhist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfmyeclrckhist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfmyeclrckdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfmyeclrckdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfmyeclropenck', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfmyeclropenck = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : ConfigApTableMap::translateFieldName('Aptbconflead', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconflead = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvrreworkitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvrreworkitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvrqcwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvrqcwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvrglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvrglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmlistpc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmlistpc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmlistitemupd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmlistitemupd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmgrosslc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmgrosslc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmcostlp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmcostlp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmcostitemupd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmcostitemupd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmcostrmesg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmcostrmesg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmcostitemupdm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmcostitemupdm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : ConfigApTableMap::translateFieldName('Aptbconfvxmcostmmesg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbconfvxmcostmmesg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : ConfigApTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : ConfigApTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : ConfigApTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 81; // 81 = ConfigApTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigAp'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigApTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigApQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ConfigAp::setDeleted()
     * @see ConfigAp::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigApTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigApQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigApTableMap::DATABASE_NAME);
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
                ConfigApTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfKey';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFGLIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfGlIfac';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFINIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfInIfac';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFSOIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfSoIfac';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPOIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfPoIfac';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFFRTACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfFrtAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMISCACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfMiscAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFAPACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfApAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFCASHACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfCashAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDISCACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfDiscAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFTAXACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfTaxAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPURACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfPurAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVARACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVarAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDDISC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVendDisc';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFAPINVVARACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfApInvVarAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFUSEROYAL)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfUseRoyal';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDEFBUYRCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfDefBuyrCode';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDEFTERMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfDefTermCode';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDEFSVIACODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfDefSviaCode';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDEFTYPECODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfDefTypeCode';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDLINE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVendLine';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVendCols';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPOLINE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfPoLine';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPOCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfPoCols';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDGETOPT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVendGetOpt';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPAYTOSHIPFR)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfPaytoShipfr';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFHOLDSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfHoldStat';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDISCRET)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfDiscRet';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFSTOPVENDCHG)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfStopVendChg';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFREQDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfReqDate2';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFREQDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfReqDate3';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFREQDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfReqDate4';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099NAME)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConf1099Name';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ADR1)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConf1099Adr1';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ADR2)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConf1099Adr2';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ADR3)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConf1099Adr3';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099CITY)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConf1099City';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099STAT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConf1099Stat';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConf1099ZipCode';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ID)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConf1099Id';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFSTUBSORT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfStubSort';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFUSEACH)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfUseAch';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFOVER1)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfOver1';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFOVER2)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfOver2';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPRTCHK)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfPrtChk';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIUNRECQTY)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfEiUnrecQty';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIRECQTYASK)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfEiRecQtyAsk';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIRECQTYDEF)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfEiRecQtyDef';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFALLOWMULTPOS)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfAllowMultPos';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIBYCLERK)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfEiByClerk';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIBATCHPROC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfEiBatchProc';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIDISPSTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfEiDispStanCost';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIASSETACCTCHG)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfEiAssetAcctChg';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFALLOWDUPINVC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfAllowDupInvc';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPRTSOREPT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfPrtSoRept';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEICHECKHIST)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfEiCheckHist';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFSUMMGL)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfSummGl';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMUSERLABEL)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmUserLabel';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDCOSTBREAKS)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVendCostBreaks';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRCLOSPO)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfMyeClrClosPo';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRCLOSDATE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfMyeClrClosDate';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRPOHIST)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfMyeClrPoHist';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRPODATE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfMyeClrPoDate';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRCKHIST)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfMyeClrCkHist';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRCKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfMyeClrCkDate';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLROPENCK)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfMyeClrOpenCk';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFLEAD)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfLead';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVRREWORKITEM)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVrReworkItem';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVRQCWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVrqcWhse';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVRGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVrGlAcct';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMLISTPC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmListPc';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMLISTITEMUPD)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmListItemUpd';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMGROSSLC)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmGrossLc';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTLP)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmCostLp';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPD)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmCostItemUpd';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTRMESG)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmCostRMesg';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPDM)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmCostItemUpdM';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTMMESG)) {
            $modifiedColumns[':p' . $index++]  = 'AptbConfVxmCostMMesg';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ap_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'AptbConfKey':
                        $stmt->bindValue($identifier, $this->aptbconfkey, PDO::PARAM_INT);
                        break;
                    case 'AptbConfGlIfac':
                        $stmt->bindValue($identifier, $this->aptbconfglifac, PDO::PARAM_STR);
                        break;
                    case 'AptbConfInIfac':
                        $stmt->bindValue($identifier, $this->aptbconfinifac, PDO::PARAM_STR);
                        break;
                    case 'AptbConfSoIfac':
                        $stmt->bindValue($identifier, $this->aptbconfsoifac, PDO::PARAM_STR);
                        break;
                    case 'AptbConfPoIfac':
                        $stmt->bindValue($identifier, $this->aptbconfpoifac, PDO::PARAM_STR);
                        break;
                    case 'AptbConfFrtAcct':
                        $stmt->bindValue($identifier, $this->aptbconffrtacct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfMiscAcct':
                        $stmt->bindValue($identifier, $this->aptbconfmiscacct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfApAcct':
                        $stmt->bindValue($identifier, $this->aptbconfapacct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfCashAcct':
                        $stmt->bindValue($identifier, $this->aptbconfcashacct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfDiscAcct':
                        $stmt->bindValue($identifier, $this->aptbconfdiscacct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfTaxAcct':
                        $stmt->bindValue($identifier, $this->aptbconftaxacct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfPurAcct':
                        $stmt->bindValue($identifier, $this->aptbconfpuracct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVarAcct':
                        $stmt->bindValue($identifier, $this->aptbconfvaracct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVendDisc':
                        $stmt->bindValue($identifier, $this->aptbconfvenddisc, PDO::PARAM_STR);
                        break;
                    case 'AptbConfApInvVarAcct':
                        $stmt->bindValue($identifier, $this->aptbconfapinvvaracct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfUseRoyal':
                        $stmt->bindValue($identifier, $this->aptbconfuseroyal, PDO::PARAM_STR);
                        break;
                    case 'AptbConfDefBuyrCode':
                        $stmt->bindValue($identifier, $this->aptbconfdefbuyrcode, PDO::PARAM_STR);
                        break;
                    case 'AptbConfDefTermCode':
                        $stmt->bindValue($identifier, $this->aptbconfdeftermcode, PDO::PARAM_STR);
                        break;
                    case 'AptbConfDefSviaCode':
                        $stmt->bindValue($identifier, $this->aptbconfdefsviacode, PDO::PARAM_STR);
                        break;
                    case 'AptbConfDefTypeCode':
                        $stmt->bindValue($identifier, $this->aptbconfdeftypecode, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVendLine':
                        $stmt->bindValue($identifier, $this->aptbconfvendline, PDO::PARAM_INT);
                        break;
                    case 'AptbConfVendCols':
                        $stmt->bindValue($identifier, $this->aptbconfvendcols, PDO::PARAM_INT);
                        break;
                    case 'AptbConfPoLine':
                        $stmt->bindValue($identifier, $this->aptbconfpoline, PDO::PARAM_INT);
                        break;
                    case 'AptbConfPoCols':
                        $stmt->bindValue($identifier, $this->aptbconfpocols, PDO::PARAM_INT);
                        break;
                    case 'AptbConfVendGetOpt':
                        $stmt->bindValue($identifier, $this->aptbconfvendgetopt, PDO::PARAM_INT);
                        break;
                    case 'AptbConfPaytoShipfr':
                        $stmt->bindValue($identifier, $this->aptbconfpaytoshipfr, PDO::PARAM_STR);
                        break;
                    case 'AptbConfHoldStat':
                        $stmt->bindValue($identifier, $this->aptbconfholdstat, PDO::PARAM_STR);
                        break;
                    case 'AptbConfDiscRet':
                        $stmt->bindValue($identifier, $this->aptbconfdiscret, PDO::PARAM_STR);
                        break;
                    case 'AptbConfStopVendChg':
                        $stmt->bindValue($identifier, $this->aptbconfstopvendchg, PDO::PARAM_INT);
                        break;
                    case 'AptbConfReqDate2':
                        $stmt->bindValue($identifier, $this->aptbconfreqdate2, PDO::PARAM_INT);
                        break;
                    case 'AptbConfReqDate3':
                        $stmt->bindValue($identifier, $this->aptbconfreqdate3, PDO::PARAM_INT);
                        break;
                    case 'AptbConfReqDate4':
                        $stmt->bindValue($identifier, $this->aptbconfreqdate4, PDO::PARAM_INT);
                        break;
                    case 'AptbConf1099Name':
                        $stmt->bindValue($identifier, $this->aptbconf1099name, PDO::PARAM_STR);
                        break;
                    case 'AptbConf1099Adr1':
                        $stmt->bindValue($identifier, $this->aptbconf1099adr1, PDO::PARAM_STR);
                        break;
                    case 'AptbConf1099Adr2':
                        $stmt->bindValue($identifier, $this->aptbconf1099adr2, PDO::PARAM_STR);
                        break;
                    case 'AptbConf1099Adr3':
                        $stmt->bindValue($identifier, $this->aptbconf1099adr3, PDO::PARAM_STR);
                        break;
                    case 'AptbConf1099City':
                        $stmt->bindValue($identifier, $this->aptbconf1099city, PDO::PARAM_STR);
                        break;
                    case 'AptbConf1099Stat':
                        $stmt->bindValue($identifier, $this->aptbconf1099stat, PDO::PARAM_STR);
                        break;
                    case 'AptbConf1099ZipCode':
                        $stmt->bindValue($identifier, $this->aptbconf1099zipcode, PDO::PARAM_STR);
                        break;
                    case 'AptbConf1099Id':
                        $stmt->bindValue($identifier, $this->aptbconf1099id, PDO::PARAM_STR);
                        break;
                    case 'AptbConfStubSort':
                        $stmt->bindValue($identifier, $this->aptbconfstubsort, PDO::PARAM_STR);
                        break;
                    case 'AptbConfUseAch':
                        $stmt->bindValue($identifier, $this->aptbconfuseach, PDO::PARAM_STR);
                        break;
                    case 'AptbConfOver1':
                        $stmt->bindValue($identifier, $this->aptbconfover1, PDO::PARAM_INT);
                        break;
                    case 'AptbConfOver2':
                        $stmt->bindValue($identifier, $this->aptbconfover2, PDO::PARAM_INT);
                        break;
                    case 'AptbConfPrtChk':
                        $stmt->bindValue($identifier, $this->aptbconfprtchk, PDO::PARAM_STR);
                        break;
                    case 'AptbConfEiUnrecQty':
                        $stmt->bindValue($identifier, $this->aptbconfeiunrecqty, PDO::PARAM_STR);
                        break;
                    case 'AptbConfEiRecQtyAsk':
                        $stmt->bindValue($identifier, $this->aptbconfeirecqtyask, PDO::PARAM_STR);
                        break;
                    case 'AptbConfEiRecQtyDef':
                        $stmt->bindValue($identifier, $this->aptbconfeirecqtydef, PDO::PARAM_STR);
                        break;
                    case 'AptbConfAllowMultPos':
                        $stmt->bindValue($identifier, $this->aptbconfallowmultpos, PDO::PARAM_STR);
                        break;
                    case 'AptbConfEiByClerk':
                        $stmt->bindValue($identifier, $this->aptbconfeibyclerk, PDO::PARAM_STR);
                        break;
                    case 'AptbConfEiBatchProc':
                        $stmt->bindValue($identifier, $this->aptbconfeibatchproc, PDO::PARAM_STR);
                        break;
                    case 'AptbConfEiDispStanCost':
                        $stmt->bindValue($identifier, $this->aptbconfeidispstancost, PDO::PARAM_STR);
                        break;
                    case 'AptbConfEiAssetAcctChg':
                        $stmt->bindValue($identifier, $this->aptbconfeiassetacctchg, PDO::PARAM_STR);
                        break;
                    case 'AptbConfAllowDupInvc':
                        $stmt->bindValue($identifier, $this->aptbconfallowdupinvc, PDO::PARAM_STR);
                        break;
                    case 'AptbConfPrtSoRept':
                        $stmt->bindValue($identifier, $this->aptbconfprtsorept, PDO::PARAM_STR);
                        break;
                    case 'AptbConfEiCheckHist':
                        $stmt->bindValue($identifier, $this->aptbconfeicheckhist, PDO::PARAM_STR);
                        break;
                    case 'AptbConfSummGl':
                        $stmt->bindValue($identifier, $this->aptbconfsummgl, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmUserLabel':
                        $stmt->bindValue($identifier, $this->aptbconfvxmuserlabel, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVendCostBreaks':
                        $stmt->bindValue($identifier, $this->aptbconfvendcostbreaks, PDO::PARAM_STR);
                        break;
                    case 'AptbConfMyeClrClosPo':
                        $stmt->bindValue($identifier, $this->aptbconfmyeclrclospo, PDO::PARAM_STR);
                        break;
                    case 'AptbConfMyeClrClosDate':
                        $stmt->bindValue($identifier, $this->aptbconfmyeclrclosdate, PDO::PARAM_STR);
                        break;
                    case 'AptbConfMyeClrPoHist':
                        $stmt->bindValue($identifier, $this->aptbconfmyeclrpohist, PDO::PARAM_STR);
                        break;
                    case 'AptbConfMyeClrPoDate':
                        $stmt->bindValue($identifier, $this->aptbconfmyeclrpodate, PDO::PARAM_STR);
                        break;
                    case 'AptbConfMyeClrCkHist':
                        $stmt->bindValue($identifier, $this->aptbconfmyeclrckhist, PDO::PARAM_STR);
                        break;
                    case 'AptbConfMyeClrCkDate':
                        $stmt->bindValue($identifier, $this->aptbconfmyeclrckdate, PDO::PARAM_STR);
                        break;
                    case 'AptbConfMyeClrOpenCk':
                        $stmt->bindValue($identifier, $this->aptbconfmyeclropenck, PDO::PARAM_STR);
                        break;
                    case 'AptbConfLead':
                        $stmt->bindValue($identifier, $this->aptbconflead, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVrReworkItem':
                        $stmt->bindValue($identifier, $this->aptbconfvrreworkitem, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVrqcWhse':
                        $stmt->bindValue($identifier, $this->aptbconfvrqcwhse, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVrGlAcct':
                        $stmt->bindValue($identifier, $this->aptbconfvrglacct, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmListPc':
                        $stmt->bindValue($identifier, $this->aptbconfvxmlistpc, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmListItemUpd':
                        $stmt->bindValue($identifier, $this->aptbconfvxmlistitemupd, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmGrossLc':
                        $stmt->bindValue($identifier, $this->aptbconfvxmgrosslc, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmCostLp':
                        $stmt->bindValue($identifier, $this->aptbconfvxmcostlp, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmCostItemUpd':
                        $stmt->bindValue($identifier, $this->aptbconfvxmcostitemupd, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmCostRMesg':
                        $stmt->bindValue($identifier, $this->aptbconfvxmcostrmesg, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmCostItemUpdM':
                        $stmt->bindValue($identifier, $this->aptbconfvxmcostitemupdm, PDO::PARAM_STR);
                        break;
                    case 'AptbConfVxmCostMMesg':
                        $stmt->bindValue($identifier, $this->aptbconfvxmcostmmesg, PDO::PARAM_STR);
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
        $pos = ConfigApTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getAptbconfkey();
                break;
            case 1:
                return $this->getAptbconfglifac();
                break;
            case 2:
                return $this->getAptbconfinifac();
                break;
            case 3:
                return $this->getAptbconfsoifac();
                break;
            case 4:
                return $this->getAptbconfpoifac();
                break;
            case 5:
                return $this->getAptbconffrtacct();
                break;
            case 6:
                return $this->getAptbconfmiscacct();
                break;
            case 7:
                return $this->getAptbconfapacct();
                break;
            case 8:
                return $this->getAptbconfcashacct();
                break;
            case 9:
                return $this->getAptbconfdiscacct();
                break;
            case 10:
                return $this->getAptbconftaxacct();
                break;
            case 11:
                return $this->getAptbconfpuracct();
                break;
            case 12:
                return $this->getAptbconfvaracct();
                break;
            case 13:
                return $this->getAptbconfvenddisc();
                break;
            case 14:
                return $this->getAptbconfapinvvaracct();
                break;
            case 15:
                return $this->getAptbconfuseroyal();
                break;
            case 16:
                return $this->getAptbconfdefbuyrcode();
                break;
            case 17:
                return $this->getAptbconfdeftermcode();
                break;
            case 18:
                return $this->getAptbconfdefsviacode();
                break;
            case 19:
                return $this->getAptbconfdeftypecode();
                break;
            case 20:
                return $this->getAptbconfvendline();
                break;
            case 21:
                return $this->getAptbconfvendcols();
                break;
            case 22:
                return $this->getAptbconfpoline();
                break;
            case 23:
                return $this->getAptbconfpocols();
                break;
            case 24:
                return $this->getAptbconfvendgetopt();
                break;
            case 25:
                return $this->getAptbconfpaytoshipfr();
                break;
            case 26:
                return $this->getAptbconfholdstat();
                break;
            case 27:
                return $this->getAptbconfdiscret();
                break;
            case 28:
                return $this->getAptbconfstopvendchg();
                break;
            case 29:
                return $this->getAptbconfreqdate2();
                break;
            case 30:
                return $this->getAptbconfreqdate3();
                break;
            case 31:
                return $this->getAptbconfreqdate4();
                break;
            case 32:
                return $this->getAptbconf1099name();
                break;
            case 33:
                return $this->getAptbconf1099adr1();
                break;
            case 34:
                return $this->getAptbconf1099adr2();
                break;
            case 35:
                return $this->getAptbconf1099adr3();
                break;
            case 36:
                return $this->getAptbconf1099city();
                break;
            case 37:
                return $this->getAptbconf1099stat();
                break;
            case 38:
                return $this->getAptbconf1099zipcode();
                break;
            case 39:
                return $this->getAptbconf1099id();
                break;
            case 40:
                return $this->getAptbconfstubsort();
                break;
            case 41:
                return $this->getAptbConfUseAch();
                break;
            case 42:
                return $this->getAptbconfover1();
                break;
            case 43:
                return $this->getAptbconfover2();
                break;
            case 44:
                return $this->getAptbconfprtchk();
                break;
            case 45:
                return $this->getAptbconfeiunrecqty();
                break;
            case 46:
                return $this->getAptbconfeirecqtyask();
                break;
            case 47:
                return $this->getAptbconfeirecqtydef();
                break;
            case 48:
                return $this->getAptbconfallowmultpos();
                break;
            case 49:
                return $this->getAptbconfeibyclerk();
                break;
            case 50:
                return $this->getAptbconfeibatchproc();
                break;
            case 51:
                return $this->getAptbconfeidispstancost();
                break;
            case 52:
                return $this->getAptbconfeiassetacctchg();
                break;
            case 53:
                return $this->getAptbconfallowdupinvc();
                break;
            case 54:
                return $this->getAptbconfprtsorept();
                break;
            case 55:
                return $this->getAptbconfeicheckhist();
                break;
            case 56:
                return $this->getAptbconfsummgl();
                break;
            case 57:
                return $this->getAptbconfvxmuserlabel();
                break;
            case 58:
                return $this->getAptbconfvendcostbreaks();
                break;
            case 59:
                return $this->getAptbconfmyeclrclospo();
                break;
            case 60:
                return $this->getAptbconfmyeclrclosdate();
                break;
            case 61:
                return $this->getAptbconfmyeclrpohist();
                break;
            case 62:
                return $this->getAptbconfmyeclrpodate();
                break;
            case 63:
                return $this->getAptbconfmyeclrckhist();
                break;
            case 64:
                return $this->getAptbconfmyeclrckdate();
                break;
            case 65:
                return $this->getAptbconfmyeclropenck();
                break;
            case 66:
                return $this->getAptbconflead();
                break;
            case 67:
                return $this->getAptbconfvrreworkitem();
                break;
            case 68:
                return $this->getAptbconfvrqcwhse();
                break;
            case 69:
                return $this->getAptbconfvrglacct();
                break;
            case 70:
                return $this->getAptbconfvxmlistpc();
                break;
            case 71:
                return $this->getAptbconfvxmlistitemupd();
                break;
            case 72:
                return $this->getAptbconfvxmgrosslc();
                break;
            case 73:
                return $this->getAptbconfvxmcostlp();
                break;
            case 74:
                return $this->getAptbconfvxmcostitemupd();
                break;
            case 75:
                return $this->getAptbconfvxmcostrmesg();
                break;
            case 76:
                return $this->getAptbconfvxmcostitemupdm();
                break;
            case 77:
                return $this->getAptbconfvxmcostmmesg();
                break;
            case 78:
                return $this->getDateupdtd();
                break;
            case 79:
                return $this->getTimeupdtd();
                break;
            case 80:
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['ConfigAp'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigAp'][$this->hashCode()] = true;
        $keys = ConfigApTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAptbconfkey(),
            $keys[1] => $this->getAptbconfglifac(),
            $keys[2] => $this->getAptbconfinifac(),
            $keys[3] => $this->getAptbconfsoifac(),
            $keys[4] => $this->getAptbconfpoifac(),
            $keys[5] => $this->getAptbconffrtacct(),
            $keys[6] => $this->getAptbconfmiscacct(),
            $keys[7] => $this->getAptbconfapacct(),
            $keys[8] => $this->getAptbconfcashacct(),
            $keys[9] => $this->getAptbconfdiscacct(),
            $keys[10] => $this->getAptbconftaxacct(),
            $keys[11] => $this->getAptbconfpuracct(),
            $keys[12] => $this->getAptbconfvaracct(),
            $keys[13] => $this->getAptbconfvenddisc(),
            $keys[14] => $this->getAptbconfapinvvaracct(),
            $keys[15] => $this->getAptbconfuseroyal(),
            $keys[16] => $this->getAptbconfdefbuyrcode(),
            $keys[17] => $this->getAptbconfdeftermcode(),
            $keys[18] => $this->getAptbconfdefsviacode(),
            $keys[19] => $this->getAptbconfdeftypecode(),
            $keys[20] => $this->getAptbconfvendline(),
            $keys[21] => $this->getAptbconfvendcols(),
            $keys[22] => $this->getAptbconfpoline(),
            $keys[23] => $this->getAptbconfpocols(),
            $keys[24] => $this->getAptbconfvendgetopt(),
            $keys[25] => $this->getAptbconfpaytoshipfr(),
            $keys[26] => $this->getAptbconfholdstat(),
            $keys[27] => $this->getAptbconfdiscret(),
            $keys[28] => $this->getAptbconfstopvendchg(),
            $keys[29] => $this->getAptbconfreqdate2(),
            $keys[30] => $this->getAptbconfreqdate3(),
            $keys[31] => $this->getAptbconfreqdate4(),
            $keys[32] => $this->getAptbconf1099name(),
            $keys[33] => $this->getAptbconf1099adr1(),
            $keys[34] => $this->getAptbconf1099adr2(),
            $keys[35] => $this->getAptbconf1099adr3(),
            $keys[36] => $this->getAptbconf1099city(),
            $keys[37] => $this->getAptbconf1099stat(),
            $keys[38] => $this->getAptbconf1099zipcode(),
            $keys[39] => $this->getAptbconf1099id(),
            $keys[40] => $this->getAptbconfstubsort(),
            $keys[41] => $this->getAptbConfUseAch(),
            $keys[42] => $this->getAptbconfover1(),
            $keys[43] => $this->getAptbconfover2(),
            $keys[44] => $this->getAptbconfprtchk(),
            $keys[45] => $this->getAptbconfeiunrecqty(),
            $keys[46] => $this->getAptbconfeirecqtyask(),
            $keys[47] => $this->getAptbconfeirecqtydef(),
            $keys[48] => $this->getAptbconfallowmultpos(),
            $keys[49] => $this->getAptbconfeibyclerk(),
            $keys[50] => $this->getAptbconfeibatchproc(),
            $keys[51] => $this->getAptbconfeidispstancost(),
            $keys[52] => $this->getAptbconfeiassetacctchg(),
            $keys[53] => $this->getAptbconfallowdupinvc(),
            $keys[54] => $this->getAptbconfprtsorept(),
            $keys[55] => $this->getAptbconfeicheckhist(),
            $keys[56] => $this->getAptbconfsummgl(),
            $keys[57] => $this->getAptbconfvxmuserlabel(),
            $keys[58] => $this->getAptbconfvendcostbreaks(),
            $keys[59] => $this->getAptbconfmyeclrclospo(),
            $keys[60] => $this->getAptbconfmyeclrclosdate(),
            $keys[61] => $this->getAptbconfmyeclrpohist(),
            $keys[62] => $this->getAptbconfmyeclrpodate(),
            $keys[63] => $this->getAptbconfmyeclrckhist(),
            $keys[64] => $this->getAptbconfmyeclrckdate(),
            $keys[65] => $this->getAptbconfmyeclropenck(),
            $keys[66] => $this->getAptbconflead(),
            $keys[67] => $this->getAptbconfvrreworkitem(),
            $keys[68] => $this->getAptbconfvrqcwhse(),
            $keys[69] => $this->getAptbconfvrglacct(),
            $keys[70] => $this->getAptbconfvxmlistpc(),
            $keys[71] => $this->getAptbconfvxmlistitemupd(),
            $keys[72] => $this->getAptbconfvxmgrosslc(),
            $keys[73] => $this->getAptbconfvxmcostlp(),
            $keys[74] => $this->getAptbconfvxmcostitemupd(),
            $keys[75] => $this->getAptbconfvxmcostrmesg(),
            $keys[76] => $this->getAptbconfvxmcostitemupdm(),
            $keys[77] => $this->getAptbconfvxmcostmmesg(),
            $keys[78] => $this->getDateupdtd(),
            $keys[79] => $this->getTimeupdtd(),
            $keys[80] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
     * @return $this|\ConfigAp
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigApTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigAp
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setAptbconfkey($value);
                break;
            case 1:
                $this->setAptbconfglifac($value);
                break;
            case 2:
                $this->setAptbconfinifac($value);
                break;
            case 3:
                $this->setAptbconfsoifac($value);
                break;
            case 4:
                $this->setAptbconfpoifac($value);
                break;
            case 5:
                $this->setAptbconffrtacct($value);
                break;
            case 6:
                $this->setAptbconfmiscacct($value);
                break;
            case 7:
                $this->setAptbconfapacct($value);
                break;
            case 8:
                $this->setAptbconfcashacct($value);
                break;
            case 9:
                $this->setAptbconfdiscacct($value);
                break;
            case 10:
                $this->setAptbconftaxacct($value);
                break;
            case 11:
                $this->setAptbconfpuracct($value);
                break;
            case 12:
                $this->setAptbconfvaracct($value);
                break;
            case 13:
                $this->setAptbconfvenddisc($value);
                break;
            case 14:
                $this->setAptbconfapinvvaracct($value);
                break;
            case 15:
                $this->setAptbconfuseroyal($value);
                break;
            case 16:
                $this->setAptbconfdefbuyrcode($value);
                break;
            case 17:
                $this->setAptbconfdeftermcode($value);
                break;
            case 18:
                $this->setAptbconfdefsviacode($value);
                break;
            case 19:
                $this->setAptbconfdeftypecode($value);
                break;
            case 20:
                $this->setAptbconfvendline($value);
                break;
            case 21:
                $this->setAptbconfvendcols($value);
                break;
            case 22:
                $this->setAptbconfpoline($value);
                break;
            case 23:
                $this->setAptbconfpocols($value);
                break;
            case 24:
                $this->setAptbconfvendgetopt($value);
                break;
            case 25:
                $this->setAptbconfpaytoshipfr($value);
                break;
            case 26:
                $this->setAptbconfholdstat($value);
                break;
            case 27:
                $this->setAptbconfdiscret($value);
                break;
            case 28:
                $this->setAptbconfstopvendchg($value);
                break;
            case 29:
                $this->setAptbconfreqdate2($value);
                break;
            case 30:
                $this->setAptbconfreqdate3($value);
                break;
            case 31:
                $this->setAptbconfreqdate4($value);
                break;
            case 32:
                $this->setAptbconf1099name($value);
                break;
            case 33:
                $this->setAptbconf1099adr1($value);
                break;
            case 34:
                $this->setAptbconf1099adr2($value);
                break;
            case 35:
                $this->setAptbconf1099adr3($value);
                break;
            case 36:
                $this->setAptbconf1099city($value);
                break;
            case 37:
                $this->setAptbconf1099stat($value);
                break;
            case 38:
                $this->setAptbconf1099zipcode($value);
                break;
            case 39:
                $this->setAptbconf1099id($value);
                break;
            case 40:
                $this->setAptbconfstubsort($value);
                break;
            case 41:
                $this->setAptbConfUseAch($value);
                break;
            case 42:
                $this->setAptbconfover1($value);
                break;
            case 43:
                $this->setAptbconfover2($value);
                break;
            case 44:
                $this->setAptbconfprtchk($value);
                break;
            case 45:
                $this->setAptbconfeiunrecqty($value);
                break;
            case 46:
                $this->setAptbconfeirecqtyask($value);
                break;
            case 47:
                $this->setAptbconfeirecqtydef($value);
                break;
            case 48:
                $this->setAptbconfallowmultpos($value);
                break;
            case 49:
                $this->setAptbconfeibyclerk($value);
                break;
            case 50:
                $this->setAptbconfeibatchproc($value);
                break;
            case 51:
                $this->setAptbconfeidispstancost($value);
                break;
            case 52:
                $this->setAptbconfeiassetacctchg($value);
                break;
            case 53:
                $this->setAptbconfallowdupinvc($value);
                break;
            case 54:
                $this->setAptbconfprtsorept($value);
                break;
            case 55:
                $this->setAptbconfeicheckhist($value);
                break;
            case 56:
                $this->setAptbconfsummgl($value);
                break;
            case 57:
                $this->setAptbconfvxmuserlabel($value);
                break;
            case 58:
                $this->setAptbconfvendcostbreaks($value);
                break;
            case 59:
                $this->setAptbconfmyeclrclospo($value);
                break;
            case 60:
                $this->setAptbconfmyeclrclosdate($value);
                break;
            case 61:
                $this->setAptbconfmyeclrpohist($value);
                break;
            case 62:
                $this->setAptbconfmyeclrpodate($value);
                break;
            case 63:
                $this->setAptbconfmyeclrckhist($value);
                break;
            case 64:
                $this->setAptbconfmyeclrckdate($value);
                break;
            case 65:
                $this->setAptbconfmyeclropenck($value);
                break;
            case 66:
                $this->setAptbconflead($value);
                break;
            case 67:
                $this->setAptbconfvrreworkitem($value);
                break;
            case 68:
                $this->setAptbconfvrqcwhse($value);
                break;
            case 69:
                $this->setAptbconfvrglacct($value);
                break;
            case 70:
                $this->setAptbconfvxmlistpc($value);
                break;
            case 71:
                $this->setAptbconfvxmlistitemupd($value);
                break;
            case 72:
                $this->setAptbconfvxmgrosslc($value);
                break;
            case 73:
                $this->setAptbconfvxmcostlp($value);
                break;
            case 74:
                $this->setAptbconfvxmcostitemupd($value);
                break;
            case 75:
                $this->setAptbconfvxmcostrmesg($value);
                break;
            case 76:
                $this->setAptbconfvxmcostitemupdm($value);
                break;
            case 77:
                $this->setAptbconfvxmcostmmesg($value);
                break;
            case 78:
                $this->setDateupdtd($value);
                break;
            case 79:
                $this->setTimeupdtd($value);
                break;
            case 80:
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
        $keys = ConfigApTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setAptbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setAptbconfglifac($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setAptbconfinifac($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setAptbconfsoifac($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setAptbconfpoifac($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setAptbconffrtacct($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setAptbconfmiscacct($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setAptbconfapacct($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setAptbconfcashacct($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setAptbconfdiscacct($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setAptbconftaxacct($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setAptbconfpuracct($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setAptbconfvaracct($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setAptbconfvenddisc($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setAptbconfapinvvaracct($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setAptbconfuseroyal($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setAptbconfdefbuyrcode($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setAptbconfdeftermcode($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setAptbconfdefsviacode($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setAptbconfdeftypecode($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setAptbconfvendline($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setAptbconfvendcols($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setAptbconfpoline($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setAptbconfpocols($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setAptbconfvendgetopt($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setAptbconfpaytoshipfr($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setAptbconfholdstat($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setAptbconfdiscret($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setAptbconfstopvendchg($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setAptbconfreqdate2($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setAptbconfreqdate3($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setAptbconfreqdate4($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setAptbconf1099name($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setAptbconf1099adr1($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setAptbconf1099adr2($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setAptbconf1099adr3($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setAptbconf1099city($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setAptbconf1099stat($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setAptbconf1099zipcode($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setAptbconf1099id($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setAptbconfstubsort($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setAptbConfUseAch($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setAptbconfover1($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setAptbconfover2($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setAptbconfprtchk($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setAptbconfeiunrecqty($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setAptbconfeirecqtyask($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setAptbconfeirecqtydef($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setAptbconfallowmultpos($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setAptbconfeibyclerk($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setAptbconfeibatchproc($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setAptbconfeidispstancost($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setAptbconfeiassetacctchg($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setAptbconfallowdupinvc($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setAptbconfprtsorept($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setAptbconfeicheckhist($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setAptbconfsummgl($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setAptbconfvxmuserlabel($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setAptbconfvendcostbreaks($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setAptbconfmyeclrclospo($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setAptbconfmyeclrclosdate($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setAptbconfmyeclrpohist($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setAptbconfmyeclrpodate($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setAptbconfmyeclrckhist($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setAptbconfmyeclrckdate($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setAptbconfmyeclropenck($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setAptbconflead($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setAptbconfvrreworkitem($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setAptbconfvrqcwhse($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setAptbconfvrglacct($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setAptbconfvxmlistpc($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setAptbconfvxmlistitemupd($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setAptbconfvxmgrosslc($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setAptbconfvxmcostlp($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setAptbconfvxmcostitemupd($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setAptbconfvxmcostrmesg($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setAptbconfvxmcostitemupdm($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setAptbconfvxmcostmmesg($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setDateupdtd($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setTimeupdtd($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setDummy($arr[$keys[80]]);
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
     * @return $this|\ConfigAp The current object, for fluid interface
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
        $criteria = new Criteria(ConfigApTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFKEY)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFKEY, $this->aptbconfkey);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFGLIFAC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFGLIFAC, $this->aptbconfglifac);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFINIFAC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFINIFAC, $this->aptbconfinifac);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFSOIFAC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFSOIFAC, $this->aptbconfsoifac);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPOIFAC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFPOIFAC, $this->aptbconfpoifac);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFFRTACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFFRTACCT, $this->aptbconffrtacct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMISCACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFMISCACCT, $this->aptbconfmiscacct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFAPACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFAPACCT, $this->aptbconfapacct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFCASHACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFCASHACCT, $this->aptbconfcashacct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDISCACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFDISCACCT, $this->aptbconfdiscacct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFTAXACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFTAXACCT, $this->aptbconftaxacct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPURACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFPURACCT, $this->aptbconfpuracct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVARACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVARACCT, $this->aptbconfvaracct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDDISC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVENDDISC, $this->aptbconfvenddisc);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFAPINVVARACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFAPINVVARACCT, $this->aptbconfapinvvaracct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFUSEROYAL)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFUSEROYAL, $this->aptbconfuseroyal);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDEFBUYRCODE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFDEFBUYRCODE, $this->aptbconfdefbuyrcode);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDEFTERMCODE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFDEFTERMCODE, $this->aptbconfdeftermcode);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDEFSVIACODE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFDEFSVIACODE, $this->aptbconfdefsviacode);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDEFTYPECODE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFDEFTYPECODE, $this->aptbconfdeftypecode);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDLINE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVENDLINE, $this->aptbconfvendline);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDCOLS)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVENDCOLS, $this->aptbconfvendcols);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPOLINE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFPOLINE, $this->aptbconfpoline);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPOCOLS)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFPOCOLS, $this->aptbconfpocols);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDGETOPT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVENDGETOPT, $this->aptbconfvendgetopt);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPAYTOSHIPFR)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFPAYTOSHIPFR, $this->aptbconfpaytoshipfr);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFHOLDSTAT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFHOLDSTAT, $this->aptbconfholdstat);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFDISCRET)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFDISCRET, $this->aptbconfdiscret);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFSTOPVENDCHG)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFSTOPVENDCHG, $this->aptbconfstopvendchg);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFREQDATE2)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFREQDATE2, $this->aptbconfreqdate2);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFREQDATE3)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFREQDATE3, $this->aptbconfreqdate3);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFREQDATE4)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFREQDATE4, $this->aptbconfreqdate4);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099NAME)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONF1099NAME, $this->aptbconf1099name);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ADR1)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONF1099ADR1, $this->aptbconf1099adr1);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ADR2)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONF1099ADR2, $this->aptbconf1099adr2);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ADR3)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONF1099ADR3, $this->aptbconf1099adr3);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099CITY)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONF1099CITY, $this->aptbconf1099city);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099STAT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONF1099STAT, $this->aptbconf1099stat);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ZIPCODE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONF1099ZIPCODE, $this->aptbconf1099zipcode);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONF1099ID)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONF1099ID, $this->aptbconf1099id);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFSTUBSORT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFSTUBSORT, $this->aptbconfstubsort);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFUSEACH)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFUSEACH, $this->aptbconfuseach);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFOVER1)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFOVER1, $this->aptbconfover1);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFOVER2)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFOVER2, $this->aptbconfover2);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPRTCHK)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFPRTCHK, $this->aptbconfprtchk);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIUNRECQTY)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFEIUNRECQTY, $this->aptbconfeiunrecqty);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIRECQTYASK)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFEIRECQTYASK, $this->aptbconfeirecqtyask);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIRECQTYDEF)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFEIRECQTYDEF, $this->aptbconfeirecqtydef);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFALLOWMULTPOS)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFALLOWMULTPOS, $this->aptbconfallowmultpos);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIBYCLERK)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFEIBYCLERK, $this->aptbconfeibyclerk);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIBATCHPROC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFEIBATCHPROC, $this->aptbconfeibatchproc);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIDISPSTANCOST)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFEIDISPSTANCOST, $this->aptbconfeidispstancost);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEIASSETACCTCHG)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFEIASSETACCTCHG, $this->aptbconfeiassetacctchg);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFALLOWDUPINVC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFALLOWDUPINVC, $this->aptbconfallowdupinvc);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFPRTSOREPT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFPRTSOREPT, $this->aptbconfprtsorept);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFEICHECKHIST)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFEICHECKHIST, $this->aptbconfeicheckhist);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFSUMMGL)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFSUMMGL, $this->aptbconfsummgl);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMUSERLABEL)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMUSERLABEL, $this->aptbconfvxmuserlabel);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVENDCOSTBREAKS)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVENDCOSTBREAKS, $this->aptbconfvendcostbreaks);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRCLOSPO)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFMYECLRCLOSPO, $this->aptbconfmyeclrclospo);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRCLOSDATE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFMYECLRCLOSDATE, $this->aptbconfmyeclrclosdate);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRPOHIST)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFMYECLRPOHIST, $this->aptbconfmyeclrpohist);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRPODATE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFMYECLRPODATE, $this->aptbconfmyeclrpodate);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRCKHIST)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFMYECLRCKHIST, $this->aptbconfmyeclrckhist);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLRCKDATE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFMYECLRCKDATE, $this->aptbconfmyeclrckdate);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFMYECLROPENCK)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFMYECLROPENCK, $this->aptbconfmyeclropenck);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFLEAD)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFLEAD, $this->aptbconflead);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVRREWORKITEM)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVRREWORKITEM, $this->aptbconfvrreworkitem);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVRQCWHSE)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVRQCWHSE, $this->aptbconfvrqcwhse);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVRGLACCT)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVRGLACCT, $this->aptbconfvrglacct);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMLISTPC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMLISTPC, $this->aptbconfvxmlistpc);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMLISTITEMUPD)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMLISTITEMUPD, $this->aptbconfvxmlistitemupd);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMGROSSLC)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMGROSSLC, $this->aptbconfvxmgrosslc);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTLP)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMCOSTLP, $this->aptbconfvxmcostlp);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPD)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPD, $this->aptbconfvxmcostitemupd);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTRMESG)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMCOSTRMESG, $this->aptbconfvxmcostrmesg);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPDM)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPDM, $this->aptbconfvxmcostitemupdm);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_APTBCONFVXMCOSTMMESG)) {
            $criteria->add(ConfigApTableMap::COL_APTBCONFVXMCOSTMMESG, $this->aptbconfvxmcostmmesg);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigApTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigApTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigApTableMap::COL_DUMMY)) {
            $criteria->add(ConfigApTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigApQuery::create();
        $criteria->add(ConfigApTableMap::COL_APTBCONFKEY, $this->aptbconfkey);

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
        $validPk = null !== $this->getAptbconfkey();

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
        return $this->getAptbconfkey();
    }

    /**
     * Generic method to set the primary key (aptbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAptbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getAptbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigAp (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAptbconfkey($this->getAptbconfkey());
        $copyObj->setAptbconfglifac($this->getAptbconfglifac());
        $copyObj->setAptbconfinifac($this->getAptbconfinifac());
        $copyObj->setAptbconfsoifac($this->getAptbconfsoifac());
        $copyObj->setAptbconfpoifac($this->getAptbconfpoifac());
        $copyObj->setAptbconffrtacct($this->getAptbconffrtacct());
        $copyObj->setAptbconfmiscacct($this->getAptbconfmiscacct());
        $copyObj->setAptbconfapacct($this->getAptbconfapacct());
        $copyObj->setAptbconfcashacct($this->getAptbconfcashacct());
        $copyObj->setAptbconfdiscacct($this->getAptbconfdiscacct());
        $copyObj->setAptbconftaxacct($this->getAptbconftaxacct());
        $copyObj->setAptbconfpuracct($this->getAptbconfpuracct());
        $copyObj->setAptbconfvaracct($this->getAptbconfvaracct());
        $copyObj->setAptbconfvenddisc($this->getAptbconfvenddisc());
        $copyObj->setAptbconfapinvvaracct($this->getAptbconfapinvvaracct());
        $copyObj->setAptbconfuseroyal($this->getAptbconfuseroyal());
        $copyObj->setAptbconfdefbuyrcode($this->getAptbconfdefbuyrcode());
        $copyObj->setAptbconfdeftermcode($this->getAptbconfdeftermcode());
        $copyObj->setAptbconfdefsviacode($this->getAptbconfdefsviacode());
        $copyObj->setAptbconfdeftypecode($this->getAptbconfdeftypecode());
        $copyObj->setAptbconfvendline($this->getAptbconfvendline());
        $copyObj->setAptbconfvendcols($this->getAptbconfvendcols());
        $copyObj->setAptbconfpoline($this->getAptbconfpoline());
        $copyObj->setAptbconfpocols($this->getAptbconfpocols());
        $copyObj->setAptbconfvendgetopt($this->getAptbconfvendgetopt());
        $copyObj->setAptbconfpaytoshipfr($this->getAptbconfpaytoshipfr());
        $copyObj->setAptbconfholdstat($this->getAptbconfholdstat());
        $copyObj->setAptbconfdiscret($this->getAptbconfdiscret());
        $copyObj->setAptbconfstopvendchg($this->getAptbconfstopvendchg());
        $copyObj->setAptbconfreqdate2($this->getAptbconfreqdate2());
        $copyObj->setAptbconfreqdate3($this->getAptbconfreqdate3());
        $copyObj->setAptbconfreqdate4($this->getAptbconfreqdate4());
        $copyObj->setAptbconf1099name($this->getAptbconf1099name());
        $copyObj->setAptbconf1099adr1($this->getAptbconf1099adr1());
        $copyObj->setAptbconf1099adr2($this->getAptbconf1099adr2());
        $copyObj->setAptbconf1099adr3($this->getAptbconf1099adr3());
        $copyObj->setAptbconf1099city($this->getAptbconf1099city());
        $copyObj->setAptbconf1099stat($this->getAptbconf1099stat());
        $copyObj->setAptbconf1099zipcode($this->getAptbconf1099zipcode());
        $copyObj->setAptbconf1099id($this->getAptbconf1099id());
        $copyObj->setAptbconfstubsort($this->getAptbconfstubsort());
        $copyObj->setAptbConfUseAch($this->getAptbConfUseAch());
        $copyObj->setAptbconfover1($this->getAptbconfover1());
        $copyObj->setAptbconfover2($this->getAptbconfover2());
        $copyObj->setAptbconfprtchk($this->getAptbconfprtchk());
        $copyObj->setAptbconfeiunrecqty($this->getAptbconfeiunrecqty());
        $copyObj->setAptbconfeirecqtyask($this->getAptbconfeirecqtyask());
        $copyObj->setAptbconfeirecqtydef($this->getAptbconfeirecqtydef());
        $copyObj->setAptbconfallowmultpos($this->getAptbconfallowmultpos());
        $copyObj->setAptbconfeibyclerk($this->getAptbconfeibyclerk());
        $copyObj->setAptbconfeibatchproc($this->getAptbconfeibatchproc());
        $copyObj->setAptbconfeidispstancost($this->getAptbconfeidispstancost());
        $copyObj->setAptbconfeiassetacctchg($this->getAptbconfeiassetacctchg());
        $copyObj->setAptbconfallowdupinvc($this->getAptbconfallowdupinvc());
        $copyObj->setAptbconfprtsorept($this->getAptbconfprtsorept());
        $copyObj->setAptbconfeicheckhist($this->getAptbconfeicheckhist());
        $copyObj->setAptbconfsummgl($this->getAptbconfsummgl());
        $copyObj->setAptbconfvxmuserlabel($this->getAptbconfvxmuserlabel());
        $copyObj->setAptbconfvendcostbreaks($this->getAptbconfvendcostbreaks());
        $copyObj->setAptbconfmyeclrclospo($this->getAptbconfmyeclrclospo());
        $copyObj->setAptbconfmyeclrclosdate($this->getAptbconfmyeclrclosdate());
        $copyObj->setAptbconfmyeclrpohist($this->getAptbconfmyeclrpohist());
        $copyObj->setAptbconfmyeclrpodate($this->getAptbconfmyeclrpodate());
        $copyObj->setAptbconfmyeclrckhist($this->getAptbconfmyeclrckhist());
        $copyObj->setAptbconfmyeclrckdate($this->getAptbconfmyeclrckdate());
        $copyObj->setAptbconfmyeclropenck($this->getAptbconfmyeclropenck());
        $copyObj->setAptbconflead($this->getAptbconflead());
        $copyObj->setAptbconfvrreworkitem($this->getAptbconfvrreworkitem());
        $copyObj->setAptbconfvrqcwhse($this->getAptbconfvrqcwhse());
        $copyObj->setAptbconfvrglacct($this->getAptbconfvrglacct());
        $copyObj->setAptbconfvxmlistpc($this->getAptbconfvxmlistpc());
        $copyObj->setAptbconfvxmlistitemupd($this->getAptbconfvxmlistitemupd());
        $copyObj->setAptbconfvxmgrosslc($this->getAptbconfvxmgrosslc());
        $copyObj->setAptbconfvxmcostlp($this->getAptbconfvxmcostlp());
        $copyObj->setAptbconfvxmcostitemupd($this->getAptbconfvxmcostitemupd());
        $copyObj->setAptbconfvxmcostrmesg($this->getAptbconfvxmcostrmesg());
        $copyObj->setAptbconfvxmcostitemupdm($this->getAptbconfvxmcostitemupdm());
        $copyObj->setAptbconfvxmcostmmesg($this->getAptbconfvxmcostmmesg());
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
     * @return \ConfigAp Clone of current object.
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
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->aptbconfkey = null;
        $this->aptbconfglifac = null;
        $this->aptbconfinifac = null;
        $this->aptbconfsoifac = null;
        $this->aptbconfpoifac = null;
        $this->aptbconffrtacct = null;
        $this->aptbconfmiscacct = null;
        $this->aptbconfapacct = null;
        $this->aptbconfcashacct = null;
        $this->aptbconfdiscacct = null;
        $this->aptbconftaxacct = null;
        $this->aptbconfpuracct = null;
        $this->aptbconfvaracct = null;
        $this->aptbconfvenddisc = null;
        $this->aptbconfapinvvaracct = null;
        $this->aptbconfuseroyal = null;
        $this->aptbconfdefbuyrcode = null;
        $this->aptbconfdeftermcode = null;
        $this->aptbconfdefsviacode = null;
        $this->aptbconfdeftypecode = null;
        $this->aptbconfvendline = null;
        $this->aptbconfvendcols = null;
        $this->aptbconfpoline = null;
        $this->aptbconfpocols = null;
        $this->aptbconfvendgetopt = null;
        $this->aptbconfpaytoshipfr = null;
        $this->aptbconfholdstat = null;
        $this->aptbconfdiscret = null;
        $this->aptbconfstopvendchg = null;
        $this->aptbconfreqdate2 = null;
        $this->aptbconfreqdate3 = null;
        $this->aptbconfreqdate4 = null;
        $this->aptbconf1099name = null;
        $this->aptbconf1099adr1 = null;
        $this->aptbconf1099adr2 = null;
        $this->aptbconf1099adr3 = null;
        $this->aptbconf1099city = null;
        $this->aptbconf1099stat = null;
        $this->aptbconf1099zipcode = null;
        $this->aptbconf1099id = null;
        $this->aptbconfstubsort = null;
        $this->aptbconfuseach = null;
        $this->aptbconfover1 = null;
        $this->aptbconfover2 = null;
        $this->aptbconfprtchk = null;
        $this->aptbconfeiunrecqty = null;
        $this->aptbconfeirecqtyask = null;
        $this->aptbconfeirecqtydef = null;
        $this->aptbconfallowmultpos = null;
        $this->aptbconfeibyclerk = null;
        $this->aptbconfeibatchproc = null;
        $this->aptbconfeidispstancost = null;
        $this->aptbconfeiassetacctchg = null;
        $this->aptbconfallowdupinvc = null;
        $this->aptbconfprtsorept = null;
        $this->aptbconfeicheckhist = null;
        $this->aptbconfsummgl = null;
        $this->aptbconfvxmuserlabel = null;
        $this->aptbconfvendcostbreaks = null;
        $this->aptbconfmyeclrclospo = null;
        $this->aptbconfmyeclrclosdate = null;
        $this->aptbconfmyeclrpohist = null;
        $this->aptbconfmyeclrpodate = null;
        $this->aptbconfmyeclrckhist = null;
        $this->aptbconfmyeclrckdate = null;
        $this->aptbconfmyeclropenck = null;
        $this->aptbconflead = null;
        $this->aptbconfvrreworkitem = null;
        $this->aptbconfvrqcwhse = null;
        $this->aptbconfvrglacct = null;
        $this->aptbconfvxmlistpc = null;
        $this->aptbconfvxmlistitemupd = null;
        $this->aptbconfvxmgrosslc = null;
        $this->aptbconfvxmcostlp = null;
        $this->aptbconfvxmcostitemupd = null;
        $this->aptbconfvxmcostrmesg = null;
        $this->aptbconfvxmcostitemupdm = null;
        $this->aptbconfvxmcostmmesg = null;
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

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ConfigApTableMap::DEFAULT_STRING_FORMAT);
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
