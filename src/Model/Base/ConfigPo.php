<?php

namespace Base;

use \ConfigPoQuery as ChildConfigPoQuery;
use \Exception;
use \PDO;
use Map\ConfigPoTableMap;
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
 * Base class that represents a row from the 'po_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigPo implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigPoTableMap';


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
     * The value for the potbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $potbconfkey;

    /**
     * The value for the potbconfsortpo field.
     *
     * @var        string
     */
    protected $potbconfsortpo;

    /**
     * The value for the potbconfcancorrshpdate field.
     *
     * @var        string
     */
    protected $potbconfcancorrshpdate;

    /**
     * The value for the potbconfackoretadate field.
     *
     * @var        string
     */
    protected $potbconfackoretadate;

    /**
     * The value for the potbconfeditshipdate field.
     *
     * @var        string
     */
    protected $potbconfeditshipdate;

    /**
     * The value for the potbconfeditexptdate field.
     *
     * @var        string
     */
    protected $potbconfeditexptdate;

    /**
     * The value for the potbconfeditcancdate field.
     *
     * @var        string
     */
    protected $potbconfeditcancdate;

    /**
     * The value for the potbconfeditackdate field.
     *
     * @var        string
     */
    protected $potbconfeditackdate;

    /**
     * The value for the potbconfexptdatedef field.
     *
     * @var        string
     */
    protected $potbconfexptdatedef;

    /**
     * The value for the potbconfheadgetdef field.
     *
     * @var        int
     */
    protected $potbconfheadgetdef;

    /**
     * The value for the potbconfreseq field.
     *
     * @var        string
     */
    protected $potbconfreseq;

    /**
     * The value for the potbconfforcevxref field.
     *
     * @var        string
     */
    protected $potbconfforcevxref;

    /**
     * The value for the potbconfqtydue field.
     *
     * @var        string
     */
    protected $potbconfqtydue;

    /**
     * The value for the potbconfwarndup field.
     *
     * @var        string
     */
    protected $potbconfwarndup;

    /**
     * The value for the potbconfforceporef field.
     *
     * @var        string
     */
    protected $potbconfforceporef;

    /**
     * The value for the potbconfdestwhse field.
     *
     * @var        string
     */
    protected $potbconfdestwhse;

    /**
     * The value for the potbconfeditpoitemnotes field.
     *
     * @var        string
     */
    protected $potbconfeditpoitemnotes;

    /**
     * The value for the potbconfloadpovxmnotes field.
     *
     * @var        string
     */
    protected $potbconfloadpovxmnotes;

    /**
     * The value for the potbconfepoupdlastcost field.
     *
     * @var        string
     */
    protected $potbconfepoupdlastcost;

    /**
     * The value for the potbconfonetwoline field.
     *
     * @var        int
     */
    protected $potbconfonetwoline;

    /**
     * The value for the potbconfuseordras field.
     *
     * @var        string
     */
    protected $potbconfuseordras;

    /**
     * The value for the potbconfaprvvendonly field.
     *
     * @var        string
     */
    protected $potbconfaprvvendonly;

    /**
     * The value for the potbconfrecall field.
     *
     * @var        string
     */
    protected $potbconfrecall;

    /**
     * The value for the potbconfrecallask field.
     *
     * @var        string
     */
    protected $potbconfrecallask;

    /**
     * The value for the potbconfreceivecost field.
     *
     * @var        string
     */
    protected $potbconfreceivecost;

    /**
     * The value for the potbconfprocvari field.
     *
     * @var        string
     */
    protected $potbconfprocvari;

    /**
     * The value for the potbconfcostrcvryacct field.
     *
     * @var        string
     */
    protected $potbconfcostrcvryacct;

    /**
     * The value for the potbconfinvtyvariacct field.
     *
     * @var        string
     */
    protected $potbconfinvtyvariacct;

    /**
     * The value for the potbconfallowchgcost field.
     *
     * @var        string
     */
    protected $potbconfallowchgcost;

    /**
     * The value for the potbconfwarnrcptqty field.
     *
     * @var        string
     */
    protected $potbconfwarnrcptqty;

    /**
     * The value for the potbconferdispdate field.
     *
     * @var        string
     */
    protected $potbconferdispdate;

    /**
     * The value for the potbconfprovidelpo field.
     *
     * @var        string
     */
    protected $potbconfprovidelpo;

    /**
     * The value for the potbconfwarndiffwhse field.
     *
     * @var        string
     */
    protected $potbconfwarndiffwhse;

    /**
     * The value for the potbconfallocrcvd field.
     *
     * @var        string
     */
    protected $potbconfallocrcvd;

    /**
     * The value for the potbconfaskclose field.
     *
     * @var        string
     */
    protected $potbconfaskclose;

    /**
     * The value for the potbconftariffglacct field.
     *
     * @var        string
     */
    protected $potbconftariffglacct;

    /**
     * The value for the potbconfshopglacct field.
     *
     * @var        string
     */
    protected $potbconfshopglacct;

    /**
     * The value for the potbconfshoprate field.
     *
     * @var        string
     */
    protected $potbconfshoprate;

    /**
     * The value for the potbconfuseprime field.
     *
     * @var        string
     */
    protected $potbconfuseprime;

    /**
     * The value for the potbconfusewatch field.
     *
     * @var        string
     */
    protected $potbconfusewatch;

    /**
     * The value for the potbconfprtpowsugg field.
     *
     * @var        string
     */
    protected $potbconfprtpowsugg;

    /**
     * The value for the potbconfpowslctyes field.
     *
     * @var        string
     */
    protected $potbconfpowslctyes;

    /**
     * The value for the potbconfpowgvendrpt field.
     *
     * @var        string
     */
    protected $potbconfpowgvendrpt;

    /**
     * The value for the potbconfpowgwipstatus field.
     *
     * @var        string
     */
    protected $potbconfpowgwipstatus;

    /**
     * The value for the potbconfpowgwipautogen field.
     *
     * @var        string
     */
    protected $potbconfpowgwipautogen;

    /**
     * The value for the potbconfbuyercontrol field.
     *
     * @var        string
     */
    protected $potbconfbuyercontrol;

    /**
     * The value for the potbconfpowgoqmethod field.
     *
     * @var        int
     */
    protected $potbconfpowgoqmethod;

    /**
     * The value for the potbconffxpo field.
     *
     * @var        string
     */
    protected $potbconffxpo;

    /**
     * The value for the potbconffxinv field.
     *
     * @var        string
     */
    protected $potbconffxinv;

    /**
     * The value for the potbconfuselandcost field.
     *
     * @var        string
     */
    protected $potbconfuselandcost;

    /**
     * The value for the potbconfbaselandamtqty field.
     *
     * @var        string
     */
    protected $potbconfbaselandamtqty;

    /**
     * The value for the potbconflandglacct field.
     *
     * @var        string
     */
    protected $potbconflandglacct;

    /**
     * The value for the potbconfwarnlandiner field.
     *
     * @var        string
     */
    protected $potbconfwarnlandiner;

    /**
     * The value for the potbconflandamtmultwght field.
     *
     * @var        string
     */
    protected $potbconflandamtmultwght;

    /**
     * The value for the potbconflanderedit field.
     *
     * @var        string
     */
    protected $potbconflanderedit;

    /**
     * The value for the potbconfhistcmplfab field.
     *
     * @var        string
     */
    protected $potbconfhistcmplfab;

    /**
     * The value for the potbconfupdatevendcost field.
     *
     * @var        string
     */
    protected $potbconfupdatevendcost;

    /**
     * The value for the potbconfaskupdate field.
     *
     * @var        string
     */
    protected $potbconfaskupdate;

    /**
     * The value for the potbconfvxmroundpos field.
     *
     * @var        int
     */
    protected $potbconfvxmroundpos;

    /**
     * The value for the potbconfxrefmaint field.
     *
     * @var        string
     */
    protected $potbconfxrefmaint;

    /**
     * The value for the potbconfuseidopts field.
     *
     * @var        string
     */
    protected $potbconfuseidopts;

    /**
     * The value for the potbconfsrchvxmfirst field.
     *
     * @var        string
     */
    protected $potbconfsrchvxmfirst;

    /**
     * The value for the potbconfopenlineonly field.
     *
     * @var        string
     */
    protected $potbconfopenlineonly;

    /**
     * The value for the potbconfitemdesc field.
     *
     * @var        string
     */
    protected $potbconfitemdesc;

    /**
     * The value for the potbconfopenbalonly field.
     *
     * @var        string
     */
    protected $potbconfopenbalonly;

    /**
     * The value for the potbconfprtwhsedtl field.
     *
     * @var        string
     */
    protected $potbconfprtwhsedtl;

    /**
     * The value for the potbconfautorcpt field.
     *
     * @var        string
     */
    protected $potbconfautorcpt;

    /**
     * The value for the potbconfdispitemcost field.
     *
     * @var        string
     */
    protected $potbconfdispitemcost;

    /**
     * The value for the potbconfdispcaseqty field.
     *
     * @var        string
     */
    protected $potbconfdispcaseqty;

    /**
     * The value for the potbconfusefab field.
     *
     * @var        string
     */
    protected $potbconfusefab;

    /**
     * The value for the potbconfshowitem field.
     *
     * @var        string
     */
    protected $potbconfshowitem;

    /**
     * The value for the potbconfscrapacct field.
     *
     * @var        string
     */
    protected $potbconfscrapacct;

    /**
     * The value for the potbconfscrapvaripct field.
     *
     * @var        string
     */
    protected $potbconfscrapvaripct;

    /**
     * The value for the potbconflifofifo field.
     *
     * @var        string
     */
    protected $potbconflifofifo;

    /**
     * The value for the potbconffabbomorkit field.
     *
     * @var        string
     */
    protected $potbconffabbomorkit;

    /**
     * The value for the potbconfallocepoer field.
     *
     * @var        string
     */
    protected $potbconfallocepoer;

    /**
     * The value for the potbconffabprealloc field.
     *
     * @var        string
     */
    protected $potbconffabprealloc;

    /**
     * The value for the potbconfforcefabepo field.
     *
     * @var        string
     */
    protected $potbconfforcefabepo;

    /**
     * The value for the potbconfpreviewcomplist field.
     *
     * @var        string
     */
    protected $potbconfpreviewcomplist;

    /**
     * The value for the potbconfnegcompusage field.
     *
     * @var        string
     */
    protected $potbconfnegcompusage;

    /**
     * The value for the potbconfautoselectcomp field.
     *
     * @var        string
     */
    protected $potbconfautoselectcomp;

    /**
     * The value for the potbconfbinfromvendor field.
     *
     * @var        string
     */
    protected $potbconfbinfromvendor;

    /**
     * The value for the potbconfdfltstckcd field.
     *
     * @var        string
     */
    protected $potbconfdfltstckcd;

    /**
     * The value for the potbconfuseremain field.
     *
     * @var        string
     */
    protected $potbconfuseremain;

    /**
     * The value for the potbconfsamecompcost field.
     *
     * @var        string
     */
    protected $potbconfsamecompcost;

    /**
     * The value for the potbconfpasscode field.
     *
     * @var        string
     */
    protected $potbconfpasscode;

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
        $this->potbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigPo object.
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
     * Compares this with another <code>ConfigPo</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigPo</code>, delegates to
     * <code>equals(ConfigPo)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigPo The current object, for fluid interface
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
     * Get the [potbconfkey] column value.
     *
     * @return int
     */
    public function getPotbconfkey()
    {
        return $this->potbconfkey;
    }

    /**
     * Get the [potbconfsortpo] column value.
     *
     * @return string
     */
    public function getPotbconfsortpo()
    {
        return $this->potbconfsortpo;
    }

    /**
     * Get the [potbconfcancorrshpdate] column value.
     *
     * @return string
     */
    public function getPotbconfcancorrshpdate()
    {
        return $this->potbconfcancorrshpdate;
    }

    /**
     * Get the [potbconfackoretadate] column value.
     *
     * @return string
     */
    public function getPotbconfackoretadate()
    {
        return $this->potbconfackoretadate;
    }

    /**
     * Get the [potbconfeditshipdate] column value.
     *
     * @return string
     */
    public function getPotbconfeditshipdate()
    {
        return $this->potbconfeditshipdate;
    }

    /**
     * Get the [potbconfeditexptdate] column value.
     *
     * @return string
     */
    public function getPotbconfeditexptdate()
    {
        return $this->potbconfeditexptdate;
    }

    /**
     * Get the [potbconfeditcancdate] column value.
     *
     * @return string
     */
    public function getPotbconfeditcancdate()
    {
        return $this->potbconfeditcancdate;
    }

    /**
     * Get the [potbconfeditackdate] column value.
     *
     * @return string
     */
    public function getPotbconfeditackdate()
    {
        return $this->potbconfeditackdate;
    }

    /**
     * Get the [potbconfexptdatedef] column value.
     *
     * @return string
     */
    public function getPotbconfexptdatedef()
    {
        return $this->potbconfexptdatedef;
    }

    /**
     * Get the [potbconfheadgetdef] column value.
     *
     * @return int
     */
    public function getPotbconfheadgetdef()
    {
        return $this->potbconfheadgetdef;
    }

    /**
     * Get the [potbconfreseq] column value.
     *
     * @return string
     */
    public function getPotbconfreseq()
    {
        return $this->potbconfreseq;
    }

    /**
     * Get the [potbconfforcevxref] column value.
     *
     * @return string
     */
    public function getPotbconfforcevxref()
    {
        return $this->potbconfforcevxref;
    }

    /**
     * Get the [potbconfqtydue] column value.
     *
     * @return string
     */
    public function getPotbconfqtydue()
    {
        return $this->potbconfqtydue;
    }

    /**
     * Get the [potbconfwarndup] column value.
     *
     * @return string
     */
    public function getPotbconfwarndup()
    {
        return $this->potbconfwarndup;
    }

    /**
     * Get the [potbconfforceporef] column value.
     *
     * @return string
     */
    public function getPotbconfforceporef()
    {
        return $this->potbconfforceporef;
    }

    /**
     * Get the [potbconfdestwhse] column value.
     *
     * @return string
     */
    public function getPotbconfdestwhse()
    {
        return $this->potbconfdestwhse;
    }

    /**
     * Get the [potbconfeditpoitemnotes] column value.
     *
     * @return string
     */
    public function getPotbconfeditpoitemnotes()
    {
        return $this->potbconfeditpoitemnotes;
    }

    /**
     * Get the [potbconfloadpovxmnotes] column value.
     *
     * @return string
     */
    public function getPotbconfloadpovxmnotes()
    {
        return $this->potbconfloadpovxmnotes;
    }

    /**
     * Get the [potbconfepoupdlastcost] column value.
     *
     * @return string
     */
    public function getPotbconfepoupdlastcost()
    {
        return $this->potbconfepoupdlastcost;
    }

    /**
     * Get the [potbconfonetwoline] column value.
     *
     * @return int
     */
    public function getPotbconfonetwoline()
    {
        return $this->potbconfonetwoline;
    }

    /**
     * Get the [potbconfuseordras] column value.
     *
     * @return string
     */
    public function getPotbconfuseordras()
    {
        return $this->potbconfuseordras;
    }

    /**
     * Get the [potbconfaprvvendonly] column value.
     *
     * @return string
     */
    public function getPotbconfaprvvendonly()
    {
        return $this->potbconfaprvvendonly;
    }

    /**
     * Get the [potbconfrecall] column value.
     *
     * @return string
     */
    public function getPotbconfrecall()
    {
        return $this->potbconfrecall;
    }

    /**
     * Get the [potbconfrecallask] column value.
     *
     * @return string
     */
    public function getPotbconfrecallask()
    {
        return $this->potbconfrecallask;
    }

    /**
     * Get the [potbconfreceivecost] column value.
     *
     * @return string
     */
    public function getPotbconfreceivecost()
    {
        return $this->potbconfreceivecost;
    }

    /**
     * Get the [potbconfprocvari] column value.
     *
     * @return string
     */
    public function getPotbconfprocvari()
    {
        return $this->potbconfprocvari;
    }

    /**
     * Get the [potbconfcostrcvryacct] column value.
     *
     * @return string
     */
    public function getPotbconfcostrcvryacct()
    {
        return $this->potbconfcostrcvryacct;
    }

    /**
     * Get the [potbconfinvtyvariacct] column value.
     *
     * @return string
     */
    public function getPotbconfinvtyvariacct()
    {
        return $this->potbconfinvtyvariacct;
    }

    /**
     * Get the [potbconfallowchgcost] column value.
     *
     * @return string
     */
    public function getPotbconfallowchgcost()
    {
        return $this->potbconfallowchgcost;
    }

    /**
     * Get the [potbconfwarnrcptqty] column value.
     *
     * @return string
     */
    public function getPotbconfwarnrcptqty()
    {
        return $this->potbconfwarnrcptqty;
    }

    /**
     * Get the [potbconferdispdate] column value.
     *
     * @return string
     */
    public function getPotbconferdispdate()
    {
        return $this->potbconferdispdate;
    }

    /**
     * Get the [potbconfprovidelpo] column value.
     *
     * @return string
     */
    public function getPotbconfprovidelpo()
    {
        return $this->potbconfprovidelpo;
    }

    /**
     * Get the [potbconfwarndiffwhse] column value.
     *
     * @return string
     */
    public function getPotbconfwarndiffwhse()
    {
        return $this->potbconfwarndiffwhse;
    }

    /**
     * Get the [potbconfallocrcvd] column value.
     *
     * @return string
     */
    public function getPotbconfallocrcvd()
    {
        return $this->potbconfallocrcvd;
    }

    /**
     * Get the [potbconfaskclose] column value.
     *
     * @return string
     */
    public function getPotbconfaskclose()
    {
        return $this->potbconfaskclose;
    }

    /**
     * Get the [potbconftariffglacct] column value.
     *
     * @return string
     */
    public function getPotbconftariffglacct()
    {
        return $this->potbconftariffglacct;
    }

    /**
     * Get the [potbconfshopglacct] column value.
     *
     * @return string
     */
    public function getPotbconfshopglacct()
    {
        return $this->potbconfshopglacct;
    }

    /**
     * Get the [potbconfshoprate] column value.
     *
     * @return string
     */
    public function getPotbconfshoprate()
    {
        return $this->potbconfshoprate;
    }

    /**
     * Get the [potbconfuseprime] column value.
     *
     * @return string
     */
    public function getPotbconfuseprime()
    {
        return $this->potbconfuseprime;
    }

    /**
     * Get the [potbconfusewatch] column value.
     *
     * @return string
     */
    public function getPotbconfusewatch()
    {
        return $this->potbconfusewatch;
    }

    /**
     * Get the [potbconfprtpowsugg] column value.
     *
     * @return string
     */
    public function getPotbconfprtpowsugg()
    {
        return $this->potbconfprtpowsugg;
    }

    /**
     * Get the [potbconfpowslctyes] column value.
     *
     * @return string
     */
    public function getPotbconfpowslctyes()
    {
        return $this->potbconfpowslctyes;
    }

    /**
     * Get the [potbconfpowgvendrpt] column value.
     *
     * @return string
     */
    public function getPotbconfpowgvendrpt()
    {
        return $this->potbconfpowgvendrpt;
    }

    /**
     * Get the [potbconfpowgwipstatus] column value.
     *
     * @return string
     */
    public function getPotbconfpowgwipstatus()
    {
        return $this->potbconfpowgwipstatus;
    }

    /**
     * Get the [potbconfpowgwipautogen] column value.
     *
     * @return string
     */
    public function getPotbconfpowgwipautogen()
    {
        return $this->potbconfpowgwipautogen;
    }

    /**
     * Get the [potbconfbuyercontrol] column value.
     *
     * @return string
     */
    public function getPotbconfbuyercontrol()
    {
        return $this->potbconfbuyercontrol;
    }

    /**
     * Get the [potbconfpowgoqmethod] column value.
     *
     * @return int
     */
    public function getPotbconfpowgoqmethod()
    {
        return $this->potbconfpowgoqmethod;
    }

    /**
     * Get the [potbconffxpo] column value.
     *
     * @return string
     */
    public function getPotbconffxpo()
    {
        return $this->potbconffxpo;
    }

    /**
     * Get the [potbconffxinv] column value.
     *
     * @return string
     */
    public function getPotbconffxinv()
    {
        return $this->potbconffxinv;
    }

    /**
     * Get the [potbconfuselandcost] column value.
     *
     * @return string
     */
    public function getPotbconfuselandcost()
    {
        return $this->potbconfuselandcost;
    }

    /**
     * Get the [potbconfbaselandamtqty] column value.
     *
     * @return string
     */
    public function getPotbconfbaselandamtqty()
    {
        return $this->potbconfbaselandamtqty;
    }

    /**
     * Get the [potbconflandglacct] column value.
     *
     * @return string
     */
    public function getPotbconflandglacct()
    {
        return $this->potbconflandglacct;
    }

    /**
     * Get the [potbconfwarnlandiner] column value.
     *
     * @return string
     */
    public function getPotbconfwarnlandiner()
    {
        return $this->potbconfwarnlandiner;
    }

    /**
     * Get the [potbconflandamtmultwght] column value.
     *
     * @return string
     */
    public function getPotbconflandamtmultwght()
    {
        return $this->potbconflandamtmultwght;
    }

    /**
     * Get the [potbconflanderedit] column value.
     *
     * @return string
     */
    public function getPotbconflanderedit()
    {
        return $this->potbconflanderedit;
    }

    /**
     * Get the [potbconfhistcmplfab] column value.
     *
     * @return string
     */
    public function getPotbconfhistcmplfab()
    {
        return $this->potbconfhistcmplfab;
    }

    /**
     * Get the [potbconfupdatevendcost] column value.
     *
     * @return string
     */
    public function getPotbconfupdatevendcost()
    {
        return $this->potbconfupdatevendcost;
    }

    /**
     * Get the [potbconfaskupdate] column value.
     *
     * @return string
     */
    public function getPotbconfaskupdate()
    {
        return $this->potbconfaskupdate;
    }

    /**
     * Get the [potbconfvxmroundpos] column value.
     *
     * @return int
     */
    public function getPotbconfvxmroundpos()
    {
        return $this->potbconfvxmroundpos;
    }

    /**
     * Get the [potbconfxrefmaint] column value.
     *
     * @return string
     */
    public function getPotbconfxrefmaint()
    {
        return $this->potbconfxrefmaint;
    }

    /**
     * Get the [potbconfuseidopts] column value.
     *
     * @return string
     */
    public function getPotbconfuseidopts()
    {
        return $this->potbconfuseidopts;
    }

    /**
     * Get the [potbconfsrchvxmfirst] column value.
     *
     * @return string
     */
    public function getPotbconfsrchvxmfirst()
    {
        return $this->potbconfsrchvxmfirst;
    }

    /**
     * Get the [potbconfopenlineonly] column value.
     *
     * @return string
     */
    public function getPotbconfopenlineonly()
    {
        return $this->potbconfopenlineonly;
    }

    /**
     * Get the [potbconfitemdesc] column value.
     *
     * @return string
     */
    public function getPotbconfitemdesc()
    {
        return $this->potbconfitemdesc;
    }

    /**
     * Get the [potbconfopenbalonly] column value.
     *
     * @return string
     */
    public function getPotbconfopenbalonly()
    {
        return $this->potbconfopenbalonly;
    }

    /**
     * Get the [potbconfprtwhsedtl] column value.
     *
     * @return string
     */
    public function getPotbconfprtwhsedtl()
    {
        return $this->potbconfprtwhsedtl;
    }

    /**
     * Get the [potbconfautorcpt] column value.
     *
     * @return string
     */
    public function getPotbconfautorcpt()
    {
        return $this->potbconfautorcpt;
    }

    /**
     * Get the [potbconfdispitemcost] column value.
     *
     * @return string
     */
    public function getPotbconfdispitemcost()
    {
        return $this->potbconfdispitemcost;
    }

    /**
     * Get the [potbconfdispcaseqty] column value.
     *
     * @return string
     */
    public function getPotbconfdispcaseqty()
    {
        return $this->potbconfdispcaseqty;
    }

    /**
     * Get the [potbconfusefab] column value.
     *
     * @return string
     */
    public function getPotbconfusefab()
    {
        return $this->potbconfusefab;
    }

    /**
     * Get the [potbconfshowitem] column value.
     *
     * @return string
     */
    public function getPotbconfshowitem()
    {
        return $this->potbconfshowitem;
    }

    /**
     * Get the [potbconfscrapacct] column value.
     *
     * @return string
     */
    public function getPotbconfscrapacct()
    {
        return $this->potbconfscrapacct;
    }

    /**
     * Get the [potbconfscrapvaripct] column value.
     *
     * @return string
     */
    public function getPotbconfscrapvaripct()
    {
        return $this->potbconfscrapvaripct;
    }

    /**
     * Get the [potbconflifofifo] column value.
     *
     * @return string
     */
    public function getPotbconflifofifo()
    {
        return $this->potbconflifofifo;
    }

    /**
     * Get the [potbconffabbomorkit] column value.
     *
     * @return string
     */
    public function getPotbconffabbomorkit()
    {
        return $this->potbconffabbomorkit;
    }

    /**
     * Get the [potbconfallocepoer] column value.
     *
     * @return string
     */
    public function getPotbconfallocepoer()
    {
        return $this->potbconfallocepoer;
    }

    /**
     * Get the [potbconffabprealloc] column value.
     *
     * @return string
     */
    public function getPotbconffabprealloc()
    {
        return $this->potbconffabprealloc;
    }

    /**
     * Get the [potbconfforcefabepo] column value.
     *
     * @return string
     */
    public function getPotbconfforcefabepo()
    {
        return $this->potbconfforcefabepo;
    }

    /**
     * Get the [potbconfpreviewcomplist] column value.
     *
     * @return string
     */
    public function getPotbconfpreviewcomplist()
    {
        return $this->potbconfpreviewcomplist;
    }

    /**
     * Get the [potbconfnegcompusage] column value.
     *
     * @return string
     */
    public function getPotbconfnegcompusage()
    {
        return $this->potbconfnegcompusage;
    }

    /**
     * Get the [potbconfautoselectcomp] column value.
     *
     * @return string
     */
    public function getPotbconfautoselectcomp()
    {
        return $this->potbconfautoselectcomp;
    }

    /**
     * Get the [potbconfbinfromvendor] column value.
     *
     * @return string
     */
    public function getPotbconfbinfromvendor()
    {
        return $this->potbconfbinfromvendor;
    }

    /**
     * Get the [potbconfdfltstckcd] column value.
     *
     * @return string
     */
    public function getPotbconfdfltstckcd()
    {
        return $this->potbconfdfltstckcd;
    }

    /**
     * Get the [potbconfuseremain] column value.
     *
     * @return string
     */
    public function getPotbconfuseremain()
    {
        return $this->potbconfuseremain;
    }

    /**
     * Get the [potbconfsamecompcost] column value.
     *
     * @return string
     */
    public function getPotbconfsamecompcost()
    {
        return $this->potbconfsamecompcost;
    }

    /**
     * Get the [potbconfpasscode] column value.
     *
     * @return string
     */
    public function getPotbconfpasscode()
    {
        return $this->potbconfpasscode;
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
     * Set the value of [potbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potbconfkey !== $v) {
            $this->potbconfkey = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFKEY] = true;
        }

        return $this;
    } // setPotbconfkey()

    /**
     * Set the value of [potbconfsortpo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfsortpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfsortpo !== $v) {
            $this->potbconfsortpo = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFSORTPO] = true;
        }

        return $this;
    } // setPotbconfsortpo()

    /**
     * Set the value of [potbconfcancorrshpdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfcancorrshpdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfcancorrshpdate !== $v) {
            $this->potbconfcancorrshpdate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE] = true;
        }

        return $this;
    } // setPotbconfcancorrshpdate()

    /**
     * Set the value of [potbconfackoretadate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfackoretadate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfackoretadate !== $v) {
            $this->potbconfackoretadate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFACKORETADATE] = true;
        }

        return $this;
    } // setPotbconfackoretadate()

    /**
     * Set the value of [potbconfeditshipdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfeditshipdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfeditshipdate !== $v) {
            $this->potbconfeditshipdate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE] = true;
        }

        return $this;
    } // setPotbconfeditshipdate()

    /**
     * Set the value of [potbconfeditexptdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfeditexptdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfeditexptdate !== $v) {
            $this->potbconfeditexptdate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE] = true;
        }

        return $this;
    } // setPotbconfeditexptdate()

    /**
     * Set the value of [potbconfeditcancdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfeditcancdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfeditcancdate !== $v) {
            $this->potbconfeditcancdate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFEDITCANCDATE] = true;
        }

        return $this;
    } // setPotbconfeditcancdate()

    /**
     * Set the value of [potbconfeditackdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfeditackdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfeditackdate !== $v) {
            $this->potbconfeditackdate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFEDITACKDATE] = true;
        }

        return $this;
    } // setPotbconfeditackdate()

    /**
     * Set the value of [potbconfexptdatedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfexptdatedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfexptdatedef !== $v) {
            $this->potbconfexptdatedef = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF] = true;
        }

        return $this;
    } // setPotbconfexptdatedef()

    /**
     * Set the value of [potbconfheadgetdef] column.
     *
     * @param int $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfheadgetdef($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potbconfheadgetdef !== $v) {
            $this->potbconfheadgetdef = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFHEADGETDEF] = true;
        }

        return $this;
    } // setPotbconfheadgetdef()

    /**
     * Set the value of [potbconfreseq] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfreseq($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfreseq !== $v) {
            $this->potbconfreseq = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFRESEQ] = true;
        }

        return $this;
    } // setPotbconfreseq()

    /**
     * Set the value of [potbconfforcevxref] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfforcevxref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfforcevxref !== $v) {
            $this->potbconfforcevxref = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFFORCEVXREF] = true;
        }

        return $this;
    } // setPotbconfforcevxref()

    /**
     * Set the value of [potbconfqtydue] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfqtydue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfqtydue !== $v) {
            $this->potbconfqtydue = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFQTYDUE] = true;
        }

        return $this;
    } // setPotbconfqtydue()

    /**
     * Set the value of [potbconfwarndup] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfwarndup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfwarndup !== $v) {
            $this->potbconfwarndup = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFWARNDUP] = true;
        }

        return $this;
    } // setPotbconfwarndup()

    /**
     * Set the value of [potbconfforceporef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfforceporef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfforceporef !== $v) {
            $this->potbconfforceporef = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFFORCEPOREF] = true;
        }

        return $this;
    } // setPotbconfforceporef()

    /**
     * Set the value of [potbconfdestwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfdestwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfdestwhse !== $v) {
            $this->potbconfdestwhse = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFDESTWHSE] = true;
        }

        return $this;
    } // setPotbconfdestwhse()

    /**
     * Set the value of [potbconfeditpoitemnotes] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfeditpoitemnotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfeditpoitemnotes !== $v) {
            $this->potbconfeditpoitemnotes = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES] = true;
        }

        return $this;
    } // setPotbconfeditpoitemnotes()

    /**
     * Set the value of [potbconfloadpovxmnotes] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfloadpovxmnotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfloadpovxmnotes !== $v) {
            $this->potbconfloadpovxmnotes = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES] = true;
        }

        return $this;
    } // setPotbconfloadpovxmnotes()

    /**
     * Set the value of [potbconfepoupdlastcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfepoupdlastcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfepoupdlastcost !== $v) {
            $this->potbconfepoupdlastcost = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST] = true;
        }

        return $this;
    } // setPotbconfepoupdlastcost()

    /**
     * Set the value of [potbconfonetwoline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfonetwoline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potbconfonetwoline !== $v) {
            $this->potbconfonetwoline = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFONETWOLINE] = true;
        }

        return $this;
    } // setPotbconfonetwoline()

    /**
     * Set the value of [potbconfuseordras] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfuseordras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfuseordras !== $v) {
            $this->potbconfuseordras = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFUSEORDRAS] = true;
        }

        return $this;
    } // setPotbconfuseordras()

    /**
     * Set the value of [potbconfaprvvendonly] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfaprvvendonly($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfaprvvendonly !== $v) {
            $this->potbconfaprvvendonly = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY] = true;
        }

        return $this;
    } // setPotbconfaprvvendonly()

    /**
     * Set the value of [potbconfrecall] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfrecall($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfrecall !== $v) {
            $this->potbconfrecall = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFRECALL] = true;
        }

        return $this;
    } // setPotbconfrecall()

    /**
     * Set the value of [potbconfrecallask] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfrecallask($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfrecallask !== $v) {
            $this->potbconfrecallask = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFRECALLASK] = true;
        }

        return $this;
    } // setPotbconfrecallask()

    /**
     * Set the value of [potbconfreceivecost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfreceivecost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfreceivecost !== $v) {
            $this->potbconfreceivecost = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFRECEIVECOST] = true;
        }

        return $this;
    } // setPotbconfreceivecost()

    /**
     * Set the value of [potbconfprocvari] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfprocvari($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfprocvari !== $v) {
            $this->potbconfprocvari = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPROCVARI] = true;
        }

        return $this;
    } // setPotbconfprocvari()

    /**
     * Set the value of [potbconfcostrcvryacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfcostrcvryacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfcostrcvryacct !== $v) {
            $this->potbconfcostrcvryacct = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT] = true;
        }

        return $this;
    } // setPotbconfcostrcvryacct()

    /**
     * Set the value of [potbconfinvtyvariacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfinvtyvariacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfinvtyvariacct !== $v) {
            $this->potbconfinvtyvariacct = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT] = true;
        }

        return $this;
    } // setPotbconfinvtyvariacct()

    /**
     * Set the value of [potbconfallowchgcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfallowchgcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfallowchgcost !== $v) {
            $this->potbconfallowchgcost = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST] = true;
        }

        return $this;
    } // setPotbconfallowchgcost()

    /**
     * Set the value of [potbconfwarnrcptqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfwarnrcptqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfwarnrcptqty !== $v) {
            $this->potbconfwarnrcptqty = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY] = true;
        }

        return $this;
    } // setPotbconfwarnrcptqty()

    /**
     * Set the value of [potbconferdispdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconferdispdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconferdispdate !== $v) {
            $this->potbconferdispdate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFERDISPDATE] = true;
        }

        return $this;
    } // setPotbconferdispdate()

    /**
     * Set the value of [potbconfprovidelpo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfprovidelpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfprovidelpo !== $v) {
            $this->potbconfprovidelpo = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPROVIDELPO] = true;
        }

        return $this;
    } // setPotbconfprovidelpo()

    /**
     * Set the value of [potbconfwarndiffwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfwarndiffwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfwarndiffwhse !== $v) {
            $this->potbconfwarndiffwhse = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE] = true;
        }

        return $this;
    } // setPotbconfwarndiffwhse()

    /**
     * Set the value of [potbconfallocrcvd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfallocrcvd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfallocrcvd !== $v) {
            $this->potbconfallocrcvd = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFALLOCRCVD] = true;
        }

        return $this;
    } // setPotbconfallocrcvd()

    /**
     * Set the value of [potbconfaskclose] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfaskclose($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfaskclose !== $v) {
            $this->potbconfaskclose = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFASKCLOSE] = true;
        }

        return $this;
    } // setPotbconfaskclose()

    /**
     * Set the value of [potbconftariffglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconftariffglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconftariffglacct !== $v) {
            $this->potbconftariffglacct = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT] = true;
        }

        return $this;
    } // setPotbconftariffglacct()

    /**
     * Set the value of [potbconfshopglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfshopglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfshopglacct !== $v) {
            $this->potbconfshopglacct = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFSHOPGLACCT] = true;
        }

        return $this;
    } // setPotbconfshopglacct()

    /**
     * Set the value of [potbconfshoprate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfshoprate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfshoprate !== $v) {
            $this->potbconfshoprate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFSHOPRATE] = true;
        }

        return $this;
    } // setPotbconfshoprate()

    /**
     * Set the value of [potbconfuseprime] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfuseprime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfuseprime !== $v) {
            $this->potbconfuseprime = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFUSEPRIME] = true;
        }

        return $this;
    } // setPotbconfuseprime()

    /**
     * Set the value of [potbconfusewatch] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfusewatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfusewatch !== $v) {
            $this->potbconfusewatch = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFUSEWATCH] = true;
        }

        return $this;
    } // setPotbconfusewatch()

    /**
     * Set the value of [potbconfprtpowsugg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfprtpowsugg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfprtpowsugg !== $v) {
            $this->potbconfprtpowsugg = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG] = true;
        }

        return $this;
    } // setPotbconfprtpowsugg()

    /**
     * Set the value of [potbconfpowslctyes] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfpowslctyes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfpowslctyes !== $v) {
            $this->potbconfpowslctyes = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPOWSLCTYES] = true;
        }

        return $this;
    } // setPotbconfpowslctyes()

    /**
     * Set the value of [potbconfpowgvendrpt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfpowgvendrpt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfpowgvendrpt !== $v) {
            $this->potbconfpowgvendrpt = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT] = true;
        }

        return $this;
    } // setPotbconfpowgvendrpt()

    /**
     * Set the value of [potbconfpowgwipstatus] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfpowgwipstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfpowgwipstatus !== $v) {
            $this->potbconfpowgwipstatus = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS] = true;
        }

        return $this;
    } // setPotbconfpowgwipstatus()

    /**
     * Set the value of [potbconfpowgwipautogen] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfpowgwipautogen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfpowgwipautogen !== $v) {
            $this->potbconfpowgwipautogen = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN] = true;
        }

        return $this;
    } // setPotbconfpowgwipautogen()

    /**
     * Set the value of [potbconfbuyercontrol] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfbuyercontrol($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfbuyercontrol !== $v) {
            $this->potbconfbuyercontrol = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFBUYERCONTROL] = true;
        }

        return $this;
    } // setPotbconfbuyercontrol()

    /**
     * Set the value of [potbconfpowgoqmethod] column.
     *
     * @param int $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfpowgoqmethod($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potbconfpowgoqmethod !== $v) {
            $this->potbconfpowgoqmethod = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD] = true;
        }

        return $this;
    } // setPotbconfpowgoqmethod()

    /**
     * Set the value of [potbconffxpo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconffxpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconffxpo !== $v) {
            $this->potbconffxpo = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFFXPO] = true;
        }

        return $this;
    } // setPotbconffxpo()

    /**
     * Set the value of [potbconffxinv] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconffxinv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconffxinv !== $v) {
            $this->potbconffxinv = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFFXINV] = true;
        }

        return $this;
    } // setPotbconffxinv()

    /**
     * Set the value of [potbconfuselandcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfuselandcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfuselandcost !== $v) {
            $this->potbconfuselandcost = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFUSELANDCOST] = true;
        }

        return $this;
    } // setPotbconfuselandcost()

    /**
     * Set the value of [potbconfbaselandamtqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfbaselandamtqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfbaselandamtqty !== $v) {
            $this->potbconfbaselandamtqty = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY] = true;
        }

        return $this;
    } // setPotbconfbaselandamtqty()

    /**
     * Set the value of [potbconflandglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconflandglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconflandglacct !== $v) {
            $this->potbconflandglacct = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFLANDGLACCT] = true;
        }

        return $this;
    } // setPotbconflandglacct()

    /**
     * Set the value of [potbconfwarnlandiner] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfwarnlandiner($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfwarnlandiner !== $v) {
            $this->potbconfwarnlandiner = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFWARNLANDINER] = true;
        }

        return $this;
    } // setPotbconfwarnlandiner()

    /**
     * Set the value of [potbconflandamtmultwght] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconflandamtmultwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconflandamtmultwght !== $v) {
            $this->potbconflandamtmultwght = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT] = true;
        }

        return $this;
    } // setPotbconflandamtmultwght()

    /**
     * Set the value of [potbconflanderedit] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconflanderedit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconflanderedit !== $v) {
            $this->potbconflanderedit = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFLANDEREDIT] = true;
        }

        return $this;
    } // setPotbconflanderedit()

    /**
     * Set the value of [potbconfhistcmplfab] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfhistcmplfab($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfhistcmplfab !== $v) {
            $this->potbconfhistcmplfab = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB] = true;
        }

        return $this;
    } // setPotbconfhistcmplfab()

    /**
     * Set the value of [potbconfupdatevendcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfupdatevendcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfupdatevendcost !== $v) {
            $this->potbconfupdatevendcost = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST] = true;
        }

        return $this;
    } // setPotbconfupdatevendcost()

    /**
     * Set the value of [potbconfaskupdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfaskupdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfaskupdate !== $v) {
            $this->potbconfaskupdate = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFASKUPDATE] = true;
        }

        return $this;
    } // setPotbconfaskupdate()

    /**
     * Set the value of [potbconfvxmroundpos] column.
     *
     * @param int $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfvxmroundpos($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->potbconfvxmroundpos !== $v) {
            $this->potbconfvxmroundpos = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS] = true;
        }

        return $this;
    } // setPotbconfvxmroundpos()

    /**
     * Set the value of [potbconfxrefmaint] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfxrefmaint($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfxrefmaint !== $v) {
            $this->potbconfxrefmaint = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFXREFMAINT] = true;
        }

        return $this;
    } // setPotbconfxrefmaint()

    /**
     * Set the value of [potbconfuseidopts] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfuseidopts($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfuseidopts !== $v) {
            $this->potbconfuseidopts = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFUSEIDOPTS] = true;
        }

        return $this;
    } // setPotbconfuseidopts()

    /**
     * Set the value of [potbconfsrchvxmfirst] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfsrchvxmfirst($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfsrchvxmfirst !== $v) {
            $this->potbconfsrchvxmfirst = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST] = true;
        }

        return $this;
    } // setPotbconfsrchvxmfirst()

    /**
     * Set the value of [potbconfopenlineonly] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfopenlineonly($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfopenlineonly !== $v) {
            $this->potbconfopenlineonly = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFOPENLINEONLY] = true;
        }

        return $this;
    } // setPotbconfopenlineonly()

    /**
     * Set the value of [potbconfitemdesc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfitemdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfitemdesc !== $v) {
            $this->potbconfitemdesc = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFITEMDESC] = true;
        }

        return $this;
    } // setPotbconfitemdesc()

    /**
     * Set the value of [potbconfopenbalonly] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfopenbalonly($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfopenbalonly !== $v) {
            $this->potbconfopenbalonly = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFOPENBALONLY] = true;
        }

        return $this;
    } // setPotbconfopenbalonly()

    /**
     * Set the value of [potbconfprtwhsedtl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfprtwhsedtl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfprtwhsedtl !== $v) {
            $this->potbconfprtwhsedtl = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL] = true;
        }

        return $this;
    } // setPotbconfprtwhsedtl()

    /**
     * Set the value of [potbconfautorcpt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfautorcpt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfautorcpt !== $v) {
            $this->potbconfautorcpt = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFAUTORCPT] = true;
        }

        return $this;
    } // setPotbconfautorcpt()

    /**
     * Set the value of [potbconfdispitemcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfdispitemcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfdispitemcost !== $v) {
            $this->potbconfdispitemcost = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFDISPITEMCOST] = true;
        }

        return $this;
    } // setPotbconfdispitemcost()

    /**
     * Set the value of [potbconfdispcaseqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfdispcaseqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfdispcaseqty !== $v) {
            $this->potbconfdispcaseqty = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFDISPCASEQTY] = true;
        }

        return $this;
    } // setPotbconfdispcaseqty()

    /**
     * Set the value of [potbconfusefab] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfusefab($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfusefab !== $v) {
            $this->potbconfusefab = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFUSEFAB] = true;
        }

        return $this;
    } // setPotbconfusefab()

    /**
     * Set the value of [potbconfshowitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfshowitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfshowitem !== $v) {
            $this->potbconfshowitem = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFSHOWITEM] = true;
        }

        return $this;
    } // setPotbconfshowitem()

    /**
     * Set the value of [potbconfscrapacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfscrapacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfscrapacct !== $v) {
            $this->potbconfscrapacct = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFSCRAPACCT] = true;
        }

        return $this;
    } // setPotbconfscrapacct()

    /**
     * Set the value of [potbconfscrapvaripct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfscrapvaripct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfscrapvaripct !== $v) {
            $this->potbconfscrapvaripct = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT] = true;
        }

        return $this;
    } // setPotbconfscrapvaripct()

    /**
     * Set the value of [potbconflifofifo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconflifofifo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconflifofifo !== $v) {
            $this->potbconflifofifo = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFLIFOFIFO] = true;
        }

        return $this;
    } // setPotbconflifofifo()

    /**
     * Set the value of [potbconffabbomorkit] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconffabbomorkit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconffabbomorkit !== $v) {
            $this->potbconffabbomorkit = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFFABBOMORKIT] = true;
        }

        return $this;
    } // setPotbconffabbomorkit()

    /**
     * Set the value of [potbconfallocepoer] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfallocepoer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfallocepoer !== $v) {
            $this->potbconfallocepoer = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFALLOCEPOER] = true;
        }

        return $this;
    } // setPotbconfallocepoer()

    /**
     * Set the value of [potbconffabprealloc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconffabprealloc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconffabprealloc !== $v) {
            $this->potbconffabprealloc = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFFABPREALLOC] = true;
        }

        return $this;
    } // setPotbconffabprealloc()

    /**
     * Set the value of [potbconfforcefabepo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfforcefabepo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfforcefabepo !== $v) {
            $this->potbconfforcefabepo = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFFORCEFABEPO] = true;
        }

        return $this;
    } // setPotbconfforcefabepo()

    /**
     * Set the value of [potbconfpreviewcomplist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfpreviewcomplist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfpreviewcomplist !== $v) {
            $this->potbconfpreviewcomplist = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST] = true;
        }

        return $this;
    } // setPotbconfpreviewcomplist()

    /**
     * Set the value of [potbconfnegcompusage] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfnegcompusage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfnegcompusage !== $v) {
            $this->potbconfnegcompusage = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE] = true;
        }

        return $this;
    } // setPotbconfnegcompusage()

    /**
     * Set the value of [potbconfautoselectcomp] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfautoselectcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfautoselectcomp !== $v) {
            $this->potbconfautoselectcomp = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP] = true;
        }

        return $this;
    } // setPotbconfautoselectcomp()

    /**
     * Set the value of [potbconfbinfromvendor] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfbinfromvendor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfbinfromvendor !== $v) {
            $this->potbconfbinfromvendor = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR] = true;
        }

        return $this;
    } // setPotbconfbinfromvendor()

    /**
     * Set the value of [potbconfdfltstckcd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfdfltstckcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfdfltstckcd !== $v) {
            $this->potbconfdfltstckcd = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD] = true;
        }

        return $this;
    } // setPotbconfdfltstckcd()

    /**
     * Set the value of [potbconfuseremain] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfuseremain($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfuseremain !== $v) {
            $this->potbconfuseremain = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFUSEREMAIN] = true;
        }

        return $this;
    } // setPotbconfuseremain()

    /**
     * Set the value of [potbconfsamecompcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfsamecompcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfsamecompcost !== $v) {
            $this->potbconfsamecompcost = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST] = true;
        }

        return $this;
    } // setPotbconfsamecompcost()

    /**
     * Set the value of [potbconfpasscode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setPotbconfpasscode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbconfpasscode !== $v) {
            $this->potbconfpasscode = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_POTBCONFPASSCODE] = true;
        }

        return $this;
    } // setPotbconfpasscode()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPo The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigPoTableMap::COL_DUMMY] = true;
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
            if ($this->potbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfsortpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfsortpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfcancorrshpdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfcancorrshpdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfackoretadate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfackoretadate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfeditshipdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfeditshipdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfeditexptdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfeditexptdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfeditcancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfeditcancdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfeditackdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfeditackdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfexptdatedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfexptdatedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfheadgetdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfheadgetdef = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfreseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfreseq = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfforcevxref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfforcevxref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfqtydue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfqtydue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfwarndup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfwarndup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfforceporef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfforceporef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfdestwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfdestwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfeditpoitemnotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfeditpoitemnotes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfloadpovxmnotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfloadpovxmnotes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfepoupdlastcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfepoupdlastcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfonetwoline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfonetwoline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfuseordras', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfuseordras = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfaprvvendonly', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfaprvvendonly = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfrecall', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfrecall = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfrecallask', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfrecallask = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfreceivecost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfreceivecost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfprocvari', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfprocvari = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfcostrcvryacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfcostrcvryacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfinvtyvariacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfinvtyvariacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfallowchgcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfallowchgcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfwarnrcptqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfwarnrcptqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ConfigPoTableMap::translateFieldName('Potbconferdispdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconferdispdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfprovidelpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfprovidelpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfwarndiffwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfwarndiffwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfallocrcvd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfallocrcvd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfaskclose', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfaskclose = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ConfigPoTableMap::translateFieldName('Potbconftariffglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconftariffglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfshopglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfshopglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfshoprate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfshoprate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfuseprime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfuseprime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfusewatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfusewatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfprtpowsugg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfprtpowsugg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfpowslctyes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfpowslctyes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfpowgvendrpt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfpowgvendrpt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfpowgwipstatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfpowgwipstatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfpowgwipautogen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfpowgwipautogen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfbuyercontrol', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfbuyercontrol = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfpowgoqmethod', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfpowgoqmethod = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ConfigPoTableMap::translateFieldName('Potbconffxpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconffxpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ConfigPoTableMap::translateFieldName('Potbconffxinv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconffxinv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfuselandcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfuselandcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfbaselandamtqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfbaselandamtqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ConfigPoTableMap::translateFieldName('Potbconflandglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconflandglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfwarnlandiner', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfwarnlandiner = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ConfigPoTableMap::translateFieldName('Potbconflandamtmultwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconflandamtmultwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ConfigPoTableMap::translateFieldName('Potbconflanderedit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconflanderedit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfhistcmplfab', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfhistcmplfab = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfupdatevendcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfupdatevendcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfaskupdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfaskupdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfvxmroundpos', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfvxmroundpos = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfxrefmaint', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfxrefmaint = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfuseidopts', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfuseidopts = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfsrchvxmfirst', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfsrchvxmfirst = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfopenlineonly', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfopenlineonly = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfitemdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfitemdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfopenbalonly', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfopenbalonly = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfprtwhsedtl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfprtwhsedtl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfautorcpt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfautorcpt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfdispitemcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfdispitemcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfdispcaseqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfdispcaseqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfusefab', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfusefab = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfshowitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfshowitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfscrapacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfscrapacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfscrapvaripct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfscrapvaripct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : ConfigPoTableMap::translateFieldName('Potbconflifofifo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconflifofifo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : ConfigPoTableMap::translateFieldName('Potbconffabbomorkit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconffabbomorkit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfallocepoer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfallocepoer = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : ConfigPoTableMap::translateFieldName('Potbconffabprealloc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconffabprealloc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfforcefabepo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfforcefabepo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfpreviewcomplist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfpreviewcomplist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfnegcompusage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfnegcompusage = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfautoselectcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfautoselectcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfbinfromvendor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfbinfromvendor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfdfltstckcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfdfltstckcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfuseremain', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfuseremain = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfsamecompcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfsamecompcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : ConfigPoTableMap::translateFieldName('Potbconfpasscode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbconfpasscode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : ConfigPoTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : ConfigPoTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : ConfigPoTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 89; // 89 = ConfigPoTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigPo'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigPoTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigPoQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigPo::setDeleted()
     * @see ConfigPo::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPoTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigPoQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPoTableMap::DATABASE_NAME);
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
                ConfigPoTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfKey';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSORTPO)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfSortPo';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfCancOrRshpDate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFACKORETADATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAckOrEtaDate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfEditShipDate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfEditExptDate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITCANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfEditCancDate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITACKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfEditAckDate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfExptDateDef';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFHEADGETDEF)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfHeadGetDef';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFRESEQ)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfReseq';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFORCEVXREF)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfForceVxref';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFQTYDUE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfQtyDue';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFWARNDUP)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfWarnDup';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFORCEPOREF)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfForcePoRef';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFDESTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfDestWhse';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfEditPoItemNotes';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfLoadPoVxmNotes';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfEpoUpdLastCost';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFONETWOLINE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfOneTwoLine';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEORDRAS)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfUseOrdrAs';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAprvVendOnly';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFRECALL)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfRecAll';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFRECALLASK)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfRecAllAsk';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFRECEIVECOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfReceiveCost';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPROCVARI)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfProcVari';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfCostRcvryAcct';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfInvtyVariAcct';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAllowChgCost';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfWarnRcptQty';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFERDISPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfErDispDate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPROVIDELPO)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfProvideLpo';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfWarnDiffWhse';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFALLOCRCVD)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAllocRcvd';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFASKCLOSE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAskClose';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfTariffGlAcct';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSHOPGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfShopGlAcct';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSHOPRATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfShopRate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEPRIME)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfUsePrime';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEWATCH)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfUseWatch';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPrtPowSugg';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWSLCTYES)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPowSlctYes';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPowgVendRpt';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPowgWipStatus';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPowgWipAutoGen';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFBUYERCONTROL)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfBuyerControl';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPowgOqMethod';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFXPO)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfFxPo';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFXINV)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfFxInv';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSELANDCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfUseLandCost';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfBaseLandAmtQty';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLANDGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfLandGlAcct';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFWARNLANDINER)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfWarnLandInEr';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfLandAmtMultWght';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLANDEREDIT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfLandErEdit';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfHistCmplFab';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfUpDateVendCost';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFASKUPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAskUpDate';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfVxmRoundPos';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFXREFMAINT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfXrefMaint';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEIDOPTS)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfUseIdOpts';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfSrchVxmFirst';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFOPENLINEONLY)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfOpenLineOnly';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFITEMDESC)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfItemDesc';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFOPENBALONLY)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfOpenBalOnly';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPrtWhseDtl';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFAUTORCPT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAutoRcpt';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFDISPITEMCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfDispItemCost';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFDISPCASEQTY)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfDispCaseQty';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEFAB)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfUseFab';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSHOWITEM)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfShowItem';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSCRAPACCT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfScrapAcct';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfScrapVariPct';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLIFOFIFO)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfLifoFifo';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFABBOMORKIT)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfFabBomOrKit';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFALLOCEPOER)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAllocEpoEr';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFABPREALLOC)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfFabPrealloc';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFORCEFABEPO)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfForceFabEpo';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPreviewCompList';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfNegCompUsage';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfAutoSelectComp';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfBinFromVendor';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfDfltStckCd';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEREMAIN)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfUseRemain';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfSameCompCost';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPASSCODE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbConfPassCode';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO po_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'PotbConfKey':
                        $stmt->bindValue($identifier, $this->potbconfkey, PDO::PARAM_INT);
                        break;
                    case 'PotbConfSortPo':
                        $stmt->bindValue($identifier, $this->potbconfsortpo, PDO::PARAM_STR);
                        break;
                    case 'PotbConfCancOrRshpDate':
                        $stmt->bindValue($identifier, $this->potbconfcancorrshpdate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAckOrEtaDate':
                        $stmt->bindValue($identifier, $this->potbconfackoretadate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfEditShipDate':
                        $stmt->bindValue($identifier, $this->potbconfeditshipdate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfEditExptDate':
                        $stmt->bindValue($identifier, $this->potbconfeditexptdate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfEditCancDate':
                        $stmt->bindValue($identifier, $this->potbconfeditcancdate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfEditAckDate':
                        $stmt->bindValue($identifier, $this->potbconfeditackdate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfExptDateDef':
                        $stmt->bindValue($identifier, $this->potbconfexptdatedef, PDO::PARAM_STR);
                        break;
                    case 'PotbConfHeadGetDef':
                        $stmt->bindValue($identifier, $this->potbconfheadgetdef, PDO::PARAM_INT);
                        break;
                    case 'PotbConfReseq':
                        $stmt->bindValue($identifier, $this->potbconfreseq, PDO::PARAM_STR);
                        break;
                    case 'PotbConfForceVxref':
                        $stmt->bindValue($identifier, $this->potbconfforcevxref, PDO::PARAM_STR);
                        break;
                    case 'PotbConfQtyDue':
                        $stmt->bindValue($identifier, $this->potbconfqtydue, PDO::PARAM_STR);
                        break;
                    case 'PotbConfWarnDup':
                        $stmt->bindValue($identifier, $this->potbconfwarndup, PDO::PARAM_STR);
                        break;
                    case 'PotbConfForcePoRef':
                        $stmt->bindValue($identifier, $this->potbconfforceporef, PDO::PARAM_STR);
                        break;
                    case 'PotbConfDestWhse':
                        $stmt->bindValue($identifier, $this->potbconfdestwhse, PDO::PARAM_STR);
                        break;
                    case 'PotbConfEditPoItemNotes':
                        $stmt->bindValue($identifier, $this->potbconfeditpoitemnotes, PDO::PARAM_STR);
                        break;
                    case 'PotbConfLoadPoVxmNotes':
                        $stmt->bindValue($identifier, $this->potbconfloadpovxmnotes, PDO::PARAM_STR);
                        break;
                    case 'PotbConfEpoUpdLastCost':
                        $stmt->bindValue($identifier, $this->potbconfepoupdlastcost, PDO::PARAM_STR);
                        break;
                    case 'PotbConfOneTwoLine':
                        $stmt->bindValue($identifier, $this->potbconfonetwoline, PDO::PARAM_INT);
                        break;
                    case 'PotbConfUseOrdrAs':
                        $stmt->bindValue($identifier, $this->potbconfuseordras, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAprvVendOnly':
                        $stmt->bindValue($identifier, $this->potbconfaprvvendonly, PDO::PARAM_STR);
                        break;
                    case 'PotbConfRecAll':
                        $stmt->bindValue($identifier, $this->potbconfrecall, PDO::PARAM_STR);
                        break;
                    case 'PotbConfRecAllAsk':
                        $stmt->bindValue($identifier, $this->potbconfrecallask, PDO::PARAM_STR);
                        break;
                    case 'PotbConfReceiveCost':
                        $stmt->bindValue($identifier, $this->potbconfreceivecost, PDO::PARAM_STR);
                        break;
                    case 'PotbConfProcVari':
                        $stmt->bindValue($identifier, $this->potbconfprocvari, PDO::PARAM_STR);
                        break;
                    case 'PotbConfCostRcvryAcct':
                        $stmt->bindValue($identifier, $this->potbconfcostrcvryacct, PDO::PARAM_STR);
                        break;
                    case 'PotbConfInvtyVariAcct':
                        $stmt->bindValue($identifier, $this->potbconfinvtyvariacct, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAllowChgCost':
                        $stmt->bindValue($identifier, $this->potbconfallowchgcost, PDO::PARAM_STR);
                        break;
                    case 'PotbConfWarnRcptQty':
                        $stmt->bindValue($identifier, $this->potbconfwarnrcptqty, PDO::PARAM_STR);
                        break;
                    case 'PotbConfErDispDate':
                        $stmt->bindValue($identifier, $this->potbconferdispdate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfProvideLpo':
                        $stmt->bindValue($identifier, $this->potbconfprovidelpo, PDO::PARAM_STR);
                        break;
                    case 'PotbConfWarnDiffWhse':
                        $stmt->bindValue($identifier, $this->potbconfwarndiffwhse, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAllocRcvd':
                        $stmt->bindValue($identifier, $this->potbconfallocrcvd, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAskClose':
                        $stmt->bindValue($identifier, $this->potbconfaskclose, PDO::PARAM_STR);
                        break;
                    case 'PotbConfTariffGlAcct':
                        $stmt->bindValue($identifier, $this->potbconftariffglacct, PDO::PARAM_STR);
                        break;
                    case 'PotbConfShopGlAcct':
                        $stmt->bindValue($identifier, $this->potbconfshopglacct, PDO::PARAM_STR);
                        break;
                    case 'PotbConfShopRate':
                        $stmt->bindValue($identifier, $this->potbconfshoprate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfUsePrime':
                        $stmt->bindValue($identifier, $this->potbconfuseprime, PDO::PARAM_STR);
                        break;
                    case 'PotbConfUseWatch':
                        $stmt->bindValue($identifier, $this->potbconfusewatch, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPrtPowSugg':
                        $stmt->bindValue($identifier, $this->potbconfprtpowsugg, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPowSlctYes':
                        $stmt->bindValue($identifier, $this->potbconfpowslctyes, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPowgVendRpt':
                        $stmt->bindValue($identifier, $this->potbconfpowgvendrpt, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPowgWipStatus':
                        $stmt->bindValue($identifier, $this->potbconfpowgwipstatus, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPowgWipAutoGen':
                        $stmt->bindValue($identifier, $this->potbconfpowgwipautogen, PDO::PARAM_STR);
                        break;
                    case 'PotbConfBuyerControl':
                        $stmt->bindValue($identifier, $this->potbconfbuyercontrol, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPowgOqMethod':
                        $stmt->bindValue($identifier, $this->potbconfpowgoqmethod, PDO::PARAM_INT);
                        break;
                    case 'PotbConfFxPo':
                        $stmt->bindValue($identifier, $this->potbconffxpo, PDO::PARAM_STR);
                        break;
                    case 'PotbConfFxInv':
                        $stmt->bindValue($identifier, $this->potbconffxinv, PDO::PARAM_STR);
                        break;
                    case 'PotbConfUseLandCost':
                        $stmt->bindValue($identifier, $this->potbconfuselandcost, PDO::PARAM_STR);
                        break;
                    case 'PotbConfBaseLandAmtQty':
                        $stmt->bindValue($identifier, $this->potbconfbaselandamtqty, PDO::PARAM_STR);
                        break;
                    case 'PotbConfLandGlAcct':
                        $stmt->bindValue($identifier, $this->potbconflandglacct, PDO::PARAM_STR);
                        break;
                    case 'PotbConfWarnLandInEr':
                        $stmt->bindValue($identifier, $this->potbconfwarnlandiner, PDO::PARAM_STR);
                        break;
                    case 'PotbConfLandAmtMultWght':
                        $stmt->bindValue($identifier, $this->potbconflandamtmultwght, PDO::PARAM_STR);
                        break;
                    case 'PotbConfLandErEdit':
                        $stmt->bindValue($identifier, $this->potbconflanderedit, PDO::PARAM_STR);
                        break;
                    case 'PotbConfHistCmplFab':
                        $stmt->bindValue($identifier, $this->potbconfhistcmplfab, PDO::PARAM_STR);
                        break;
                    case 'PotbConfUpDateVendCost':
                        $stmt->bindValue($identifier, $this->potbconfupdatevendcost, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAskUpDate':
                        $stmt->bindValue($identifier, $this->potbconfaskupdate, PDO::PARAM_STR);
                        break;
                    case 'PotbConfVxmRoundPos':
                        $stmt->bindValue($identifier, $this->potbconfvxmroundpos, PDO::PARAM_INT);
                        break;
                    case 'PotbConfXrefMaint':
                        $stmt->bindValue($identifier, $this->potbconfxrefmaint, PDO::PARAM_STR);
                        break;
                    case 'PotbConfUseIdOpts':
                        $stmt->bindValue($identifier, $this->potbconfuseidopts, PDO::PARAM_STR);
                        break;
                    case 'PotbConfSrchVxmFirst':
                        $stmt->bindValue($identifier, $this->potbconfsrchvxmfirst, PDO::PARAM_STR);
                        break;
                    case 'PotbConfOpenLineOnly':
                        $stmt->bindValue($identifier, $this->potbconfopenlineonly, PDO::PARAM_STR);
                        break;
                    case 'PotbConfItemDesc':
                        $stmt->bindValue($identifier, $this->potbconfitemdesc, PDO::PARAM_STR);
                        break;
                    case 'PotbConfOpenBalOnly':
                        $stmt->bindValue($identifier, $this->potbconfopenbalonly, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPrtWhseDtl':
                        $stmt->bindValue($identifier, $this->potbconfprtwhsedtl, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAutoRcpt':
                        $stmt->bindValue($identifier, $this->potbconfautorcpt, PDO::PARAM_STR);
                        break;
                    case 'PotbConfDispItemCost':
                        $stmt->bindValue($identifier, $this->potbconfdispitemcost, PDO::PARAM_STR);
                        break;
                    case 'PotbConfDispCaseQty':
                        $stmt->bindValue($identifier, $this->potbconfdispcaseqty, PDO::PARAM_STR);
                        break;
                    case 'PotbConfUseFab':
                        $stmt->bindValue($identifier, $this->potbconfusefab, PDO::PARAM_STR);
                        break;
                    case 'PotbConfShowItem':
                        $stmt->bindValue($identifier, $this->potbconfshowitem, PDO::PARAM_STR);
                        break;
                    case 'PotbConfScrapAcct':
                        $stmt->bindValue($identifier, $this->potbconfscrapacct, PDO::PARAM_STR);
                        break;
                    case 'PotbConfScrapVariPct':
                        $stmt->bindValue($identifier, $this->potbconfscrapvaripct, PDO::PARAM_STR);
                        break;
                    case 'PotbConfLifoFifo':
                        $stmt->bindValue($identifier, $this->potbconflifofifo, PDO::PARAM_STR);
                        break;
                    case 'PotbConfFabBomOrKit':
                        $stmt->bindValue($identifier, $this->potbconffabbomorkit, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAllocEpoEr':
                        $stmt->bindValue($identifier, $this->potbconfallocepoer, PDO::PARAM_STR);
                        break;
                    case 'PotbConfFabPrealloc':
                        $stmt->bindValue($identifier, $this->potbconffabprealloc, PDO::PARAM_STR);
                        break;
                    case 'PotbConfForceFabEpo':
                        $stmt->bindValue($identifier, $this->potbconfforcefabepo, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPreviewCompList':
                        $stmt->bindValue($identifier, $this->potbconfpreviewcomplist, PDO::PARAM_STR);
                        break;
                    case 'PotbConfNegCompUsage':
                        $stmt->bindValue($identifier, $this->potbconfnegcompusage, PDO::PARAM_STR);
                        break;
                    case 'PotbConfAutoSelectComp':
                        $stmt->bindValue($identifier, $this->potbconfautoselectcomp, PDO::PARAM_STR);
                        break;
                    case 'PotbConfBinFromVendor':
                        $stmt->bindValue($identifier, $this->potbconfbinfromvendor, PDO::PARAM_STR);
                        break;
                    case 'PotbConfDfltStckCd':
                        $stmt->bindValue($identifier, $this->potbconfdfltstckcd, PDO::PARAM_STR);
                        break;
                    case 'PotbConfUseRemain':
                        $stmt->bindValue($identifier, $this->potbconfuseremain, PDO::PARAM_STR);
                        break;
                    case 'PotbConfSameCompCost':
                        $stmt->bindValue($identifier, $this->potbconfsamecompcost, PDO::PARAM_STR);
                        break;
                    case 'PotbConfPassCode':
                        $stmt->bindValue($identifier, $this->potbconfpasscode, PDO::PARAM_STR);
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
        $pos = ConfigPoTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPotbconfkey();
                break;
            case 1:
                return $this->getPotbconfsortpo();
                break;
            case 2:
                return $this->getPotbconfcancorrshpdate();
                break;
            case 3:
                return $this->getPotbconfackoretadate();
                break;
            case 4:
                return $this->getPotbconfeditshipdate();
                break;
            case 5:
                return $this->getPotbconfeditexptdate();
                break;
            case 6:
                return $this->getPotbconfeditcancdate();
                break;
            case 7:
                return $this->getPotbconfeditackdate();
                break;
            case 8:
                return $this->getPotbconfexptdatedef();
                break;
            case 9:
                return $this->getPotbconfheadgetdef();
                break;
            case 10:
                return $this->getPotbconfreseq();
                break;
            case 11:
                return $this->getPotbconfforcevxref();
                break;
            case 12:
                return $this->getPotbconfqtydue();
                break;
            case 13:
                return $this->getPotbconfwarndup();
                break;
            case 14:
                return $this->getPotbconfforceporef();
                break;
            case 15:
                return $this->getPotbconfdestwhse();
                break;
            case 16:
                return $this->getPotbconfeditpoitemnotes();
                break;
            case 17:
                return $this->getPotbconfloadpovxmnotes();
                break;
            case 18:
                return $this->getPotbconfepoupdlastcost();
                break;
            case 19:
                return $this->getPotbconfonetwoline();
                break;
            case 20:
                return $this->getPotbconfuseordras();
                break;
            case 21:
                return $this->getPotbconfaprvvendonly();
                break;
            case 22:
                return $this->getPotbconfrecall();
                break;
            case 23:
                return $this->getPotbconfrecallask();
                break;
            case 24:
                return $this->getPotbconfreceivecost();
                break;
            case 25:
                return $this->getPotbconfprocvari();
                break;
            case 26:
                return $this->getPotbconfcostrcvryacct();
                break;
            case 27:
                return $this->getPotbconfinvtyvariacct();
                break;
            case 28:
                return $this->getPotbconfallowchgcost();
                break;
            case 29:
                return $this->getPotbconfwarnrcptqty();
                break;
            case 30:
                return $this->getPotbconferdispdate();
                break;
            case 31:
                return $this->getPotbconfprovidelpo();
                break;
            case 32:
                return $this->getPotbconfwarndiffwhse();
                break;
            case 33:
                return $this->getPotbconfallocrcvd();
                break;
            case 34:
                return $this->getPotbconfaskclose();
                break;
            case 35:
                return $this->getPotbconftariffglacct();
                break;
            case 36:
                return $this->getPotbconfshopglacct();
                break;
            case 37:
                return $this->getPotbconfshoprate();
                break;
            case 38:
                return $this->getPotbconfuseprime();
                break;
            case 39:
                return $this->getPotbconfusewatch();
                break;
            case 40:
                return $this->getPotbconfprtpowsugg();
                break;
            case 41:
                return $this->getPotbconfpowslctyes();
                break;
            case 42:
                return $this->getPotbconfpowgvendrpt();
                break;
            case 43:
                return $this->getPotbconfpowgwipstatus();
                break;
            case 44:
                return $this->getPotbconfpowgwipautogen();
                break;
            case 45:
                return $this->getPotbconfbuyercontrol();
                break;
            case 46:
                return $this->getPotbconfpowgoqmethod();
                break;
            case 47:
                return $this->getPotbconffxpo();
                break;
            case 48:
                return $this->getPotbconffxinv();
                break;
            case 49:
                return $this->getPotbconfuselandcost();
                break;
            case 50:
                return $this->getPotbconfbaselandamtqty();
                break;
            case 51:
                return $this->getPotbconflandglacct();
                break;
            case 52:
                return $this->getPotbconfwarnlandiner();
                break;
            case 53:
                return $this->getPotbconflandamtmultwght();
                break;
            case 54:
                return $this->getPotbconflanderedit();
                break;
            case 55:
                return $this->getPotbconfhistcmplfab();
                break;
            case 56:
                return $this->getPotbconfupdatevendcost();
                break;
            case 57:
                return $this->getPotbconfaskupdate();
                break;
            case 58:
                return $this->getPotbconfvxmroundpos();
                break;
            case 59:
                return $this->getPotbconfxrefmaint();
                break;
            case 60:
                return $this->getPotbconfuseidopts();
                break;
            case 61:
                return $this->getPotbconfsrchvxmfirst();
                break;
            case 62:
                return $this->getPotbconfopenlineonly();
                break;
            case 63:
                return $this->getPotbconfitemdesc();
                break;
            case 64:
                return $this->getPotbconfopenbalonly();
                break;
            case 65:
                return $this->getPotbconfprtwhsedtl();
                break;
            case 66:
                return $this->getPotbconfautorcpt();
                break;
            case 67:
                return $this->getPotbconfdispitemcost();
                break;
            case 68:
                return $this->getPotbconfdispcaseqty();
                break;
            case 69:
                return $this->getPotbconfusefab();
                break;
            case 70:
                return $this->getPotbconfshowitem();
                break;
            case 71:
                return $this->getPotbconfscrapacct();
                break;
            case 72:
                return $this->getPotbconfscrapvaripct();
                break;
            case 73:
                return $this->getPotbconflifofifo();
                break;
            case 74:
                return $this->getPotbconffabbomorkit();
                break;
            case 75:
                return $this->getPotbconfallocepoer();
                break;
            case 76:
                return $this->getPotbconffabprealloc();
                break;
            case 77:
                return $this->getPotbconfforcefabepo();
                break;
            case 78:
                return $this->getPotbconfpreviewcomplist();
                break;
            case 79:
                return $this->getPotbconfnegcompusage();
                break;
            case 80:
                return $this->getPotbconfautoselectcomp();
                break;
            case 81:
                return $this->getPotbconfbinfromvendor();
                break;
            case 82:
                return $this->getPotbconfdfltstckcd();
                break;
            case 83:
                return $this->getPotbconfuseremain();
                break;
            case 84:
                return $this->getPotbconfsamecompcost();
                break;
            case 85:
                return $this->getPotbconfpasscode();
                break;
            case 86:
                return $this->getDateupdtd();
                break;
            case 87:
                return $this->getTimeupdtd();
                break;
            case 88:
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

        if (isset($alreadyDumpedObjects['ConfigPo'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigPo'][$this->hashCode()] = true;
        $keys = ConfigPoTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPotbconfkey(),
            $keys[1] => $this->getPotbconfsortpo(),
            $keys[2] => $this->getPotbconfcancorrshpdate(),
            $keys[3] => $this->getPotbconfackoretadate(),
            $keys[4] => $this->getPotbconfeditshipdate(),
            $keys[5] => $this->getPotbconfeditexptdate(),
            $keys[6] => $this->getPotbconfeditcancdate(),
            $keys[7] => $this->getPotbconfeditackdate(),
            $keys[8] => $this->getPotbconfexptdatedef(),
            $keys[9] => $this->getPotbconfheadgetdef(),
            $keys[10] => $this->getPotbconfreseq(),
            $keys[11] => $this->getPotbconfforcevxref(),
            $keys[12] => $this->getPotbconfqtydue(),
            $keys[13] => $this->getPotbconfwarndup(),
            $keys[14] => $this->getPotbconfforceporef(),
            $keys[15] => $this->getPotbconfdestwhse(),
            $keys[16] => $this->getPotbconfeditpoitemnotes(),
            $keys[17] => $this->getPotbconfloadpovxmnotes(),
            $keys[18] => $this->getPotbconfepoupdlastcost(),
            $keys[19] => $this->getPotbconfonetwoline(),
            $keys[20] => $this->getPotbconfuseordras(),
            $keys[21] => $this->getPotbconfaprvvendonly(),
            $keys[22] => $this->getPotbconfrecall(),
            $keys[23] => $this->getPotbconfrecallask(),
            $keys[24] => $this->getPotbconfreceivecost(),
            $keys[25] => $this->getPotbconfprocvari(),
            $keys[26] => $this->getPotbconfcostrcvryacct(),
            $keys[27] => $this->getPotbconfinvtyvariacct(),
            $keys[28] => $this->getPotbconfallowchgcost(),
            $keys[29] => $this->getPotbconfwarnrcptqty(),
            $keys[30] => $this->getPotbconferdispdate(),
            $keys[31] => $this->getPotbconfprovidelpo(),
            $keys[32] => $this->getPotbconfwarndiffwhse(),
            $keys[33] => $this->getPotbconfallocrcvd(),
            $keys[34] => $this->getPotbconfaskclose(),
            $keys[35] => $this->getPotbconftariffglacct(),
            $keys[36] => $this->getPotbconfshopglacct(),
            $keys[37] => $this->getPotbconfshoprate(),
            $keys[38] => $this->getPotbconfuseprime(),
            $keys[39] => $this->getPotbconfusewatch(),
            $keys[40] => $this->getPotbconfprtpowsugg(),
            $keys[41] => $this->getPotbconfpowslctyes(),
            $keys[42] => $this->getPotbconfpowgvendrpt(),
            $keys[43] => $this->getPotbconfpowgwipstatus(),
            $keys[44] => $this->getPotbconfpowgwipautogen(),
            $keys[45] => $this->getPotbconfbuyercontrol(),
            $keys[46] => $this->getPotbconfpowgoqmethod(),
            $keys[47] => $this->getPotbconffxpo(),
            $keys[48] => $this->getPotbconffxinv(),
            $keys[49] => $this->getPotbconfuselandcost(),
            $keys[50] => $this->getPotbconfbaselandamtqty(),
            $keys[51] => $this->getPotbconflandglacct(),
            $keys[52] => $this->getPotbconfwarnlandiner(),
            $keys[53] => $this->getPotbconflandamtmultwght(),
            $keys[54] => $this->getPotbconflanderedit(),
            $keys[55] => $this->getPotbconfhistcmplfab(),
            $keys[56] => $this->getPotbconfupdatevendcost(),
            $keys[57] => $this->getPotbconfaskupdate(),
            $keys[58] => $this->getPotbconfvxmroundpos(),
            $keys[59] => $this->getPotbconfxrefmaint(),
            $keys[60] => $this->getPotbconfuseidopts(),
            $keys[61] => $this->getPotbconfsrchvxmfirst(),
            $keys[62] => $this->getPotbconfopenlineonly(),
            $keys[63] => $this->getPotbconfitemdesc(),
            $keys[64] => $this->getPotbconfopenbalonly(),
            $keys[65] => $this->getPotbconfprtwhsedtl(),
            $keys[66] => $this->getPotbconfautorcpt(),
            $keys[67] => $this->getPotbconfdispitemcost(),
            $keys[68] => $this->getPotbconfdispcaseqty(),
            $keys[69] => $this->getPotbconfusefab(),
            $keys[70] => $this->getPotbconfshowitem(),
            $keys[71] => $this->getPotbconfscrapacct(),
            $keys[72] => $this->getPotbconfscrapvaripct(),
            $keys[73] => $this->getPotbconflifofifo(),
            $keys[74] => $this->getPotbconffabbomorkit(),
            $keys[75] => $this->getPotbconfallocepoer(),
            $keys[76] => $this->getPotbconffabprealloc(),
            $keys[77] => $this->getPotbconfforcefabepo(),
            $keys[78] => $this->getPotbconfpreviewcomplist(),
            $keys[79] => $this->getPotbconfnegcompusage(),
            $keys[80] => $this->getPotbconfautoselectcomp(),
            $keys[81] => $this->getPotbconfbinfromvendor(),
            $keys[82] => $this->getPotbconfdfltstckcd(),
            $keys[83] => $this->getPotbconfuseremain(),
            $keys[84] => $this->getPotbconfsamecompcost(),
            $keys[85] => $this->getPotbconfpasscode(),
            $keys[86] => $this->getDateupdtd(),
            $keys[87] => $this->getTimeupdtd(),
            $keys[88] => $this->getDummy(),
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
     * @return $this|\ConfigPo
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigPoTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigPo
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPotbconfkey($value);
                break;
            case 1:
                $this->setPotbconfsortpo($value);
                break;
            case 2:
                $this->setPotbconfcancorrshpdate($value);
                break;
            case 3:
                $this->setPotbconfackoretadate($value);
                break;
            case 4:
                $this->setPotbconfeditshipdate($value);
                break;
            case 5:
                $this->setPotbconfeditexptdate($value);
                break;
            case 6:
                $this->setPotbconfeditcancdate($value);
                break;
            case 7:
                $this->setPotbconfeditackdate($value);
                break;
            case 8:
                $this->setPotbconfexptdatedef($value);
                break;
            case 9:
                $this->setPotbconfheadgetdef($value);
                break;
            case 10:
                $this->setPotbconfreseq($value);
                break;
            case 11:
                $this->setPotbconfforcevxref($value);
                break;
            case 12:
                $this->setPotbconfqtydue($value);
                break;
            case 13:
                $this->setPotbconfwarndup($value);
                break;
            case 14:
                $this->setPotbconfforceporef($value);
                break;
            case 15:
                $this->setPotbconfdestwhse($value);
                break;
            case 16:
                $this->setPotbconfeditpoitemnotes($value);
                break;
            case 17:
                $this->setPotbconfloadpovxmnotes($value);
                break;
            case 18:
                $this->setPotbconfepoupdlastcost($value);
                break;
            case 19:
                $this->setPotbconfonetwoline($value);
                break;
            case 20:
                $this->setPotbconfuseordras($value);
                break;
            case 21:
                $this->setPotbconfaprvvendonly($value);
                break;
            case 22:
                $this->setPotbconfrecall($value);
                break;
            case 23:
                $this->setPotbconfrecallask($value);
                break;
            case 24:
                $this->setPotbconfreceivecost($value);
                break;
            case 25:
                $this->setPotbconfprocvari($value);
                break;
            case 26:
                $this->setPotbconfcostrcvryacct($value);
                break;
            case 27:
                $this->setPotbconfinvtyvariacct($value);
                break;
            case 28:
                $this->setPotbconfallowchgcost($value);
                break;
            case 29:
                $this->setPotbconfwarnrcptqty($value);
                break;
            case 30:
                $this->setPotbconferdispdate($value);
                break;
            case 31:
                $this->setPotbconfprovidelpo($value);
                break;
            case 32:
                $this->setPotbconfwarndiffwhse($value);
                break;
            case 33:
                $this->setPotbconfallocrcvd($value);
                break;
            case 34:
                $this->setPotbconfaskclose($value);
                break;
            case 35:
                $this->setPotbconftariffglacct($value);
                break;
            case 36:
                $this->setPotbconfshopglacct($value);
                break;
            case 37:
                $this->setPotbconfshoprate($value);
                break;
            case 38:
                $this->setPotbconfuseprime($value);
                break;
            case 39:
                $this->setPotbconfusewatch($value);
                break;
            case 40:
                $this->setPotbconfprtpowsugg($value);
                break;
            case 41:
                $this->setPotbconfpowslctyes($value);
                break;
            case 42:
                $this->setPotbconfpowgvendrpt($value);
                break;
            case 43:
                $this->setPotbconfpowgwipstatus($value);
                break;
            case 44:
                $this->setPotbconfpowgwipautogen($value);
                break;
            case 45:
                $this->setPotbconfbuyercontrol($value);
                break;
            case 46:
                $this->setPotbconfpowgoqmethod($value);
                break;
            case 47:
                $this->setPotbconffxpo($value);
                break;
            case 48:
                $this->setPotbconffxinv($value);
                break;
            case 49:
                $this->setPotbconfuselandcost($value);
                break;
            case 50:
                $this->setPotbconfbaselandamtqty($value);
                break;
            case 51:
                $this->setPotbconflandglacct($value);
                break;
            case 52:
                $this->setPotbconfwarnlandiner($value);
                break;
            case 53:
                $this->setPotbconflandamtmultwght($value);
                break;
            case 54:
                $this->setPotbconflanderedit($value);
                break;
            case 55:
                $this->setPotbconfhistcmplfab($value);
                break;
            case 56:
                $this->setPotbconfupdatevendcost($value);
                break;
            case 57:
                $this->setPotbconfaskupdate($value);
                break;
            case 58:
                $this->setPotbconfvxmroundpos($value);
                break;
            case 59:
                $this->setPotbconfxrefmaint($value);
                break;
            case 60:
                $this->setPotbconfuseidopts($value);
                break;
            case 61:
                $this->setPotbconfsrchvxmfirst($value);
                break;
            case 62:
                $this->setPotbconfopenlineonly($value);
                break;
            case 63:
                $this->setPotbconfitemdesc($value);
                break;
            case 64:
                $this->setPotbconfopenbalonly($value);
                break;
            case 65:
                $this->setPotbconfprtwhsedtl($value);
                break;
            case 66:
                $this->setPotbconfautorcpt($value);
                break;
            case 67:
                $this->setPotbconfdispitemcost($value);
                break;
            case 68:
                $this->setPotbconfdispcaseqty($value);
                break;
            case 69:
                $this->setPotbconfusefab($value);
                break;
            case 70:
                $this->setPotbconfshowitem($value);
                break;
            case 71:
                $this->setPotbconfscrapacct($value);
                break;
            case 72:
                $this->setPotbconfscrapvaripct($value);
                break;
            case 73:
                $this->setPotbconflifofifo($value);
                break;
            case 74:
                $this->setPotbconffabbomorkit($value);
                break;
            case 75:
                $this->setPotbconfallocepoer($value);
                break;
            case 76:
                $this->setPotbconffabprealloc($value);
                break;
            case 77:
                $this->setPotbconfforcefabepo($value);
                break;
            case 78:
                $this->setPotbconfpreviewcomplist($value);
                break;
            case 79:
                $this->setPotbconfnegcompusage($value);
                break;
            case 80:
                $this->setPotbconfautoselectcomp($value);
                break;
            case 81:
                $this->setPotbconfbinfromvendor($value);
                break;
            case 82:
                $this->setPotbconfdfltstckcd($value);
                break;
            case 83:
                $this->setPotbconfuseremain($value);
                break;
            case 84:
                $this->setPotbconfsamecompcost($value);
                break;
            case 85:
                $this->setPotbconfpasscode($value);
                break;
            case 86:
                $this->setDateupdtd($value);
                break;
            case 87:
                $this->setTimeupdtd($value);
                break;
            case 88:
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
        $keys = ConfigPoTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPotbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPotbconfsortpo($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPotbconfcancorrshpdate($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setPotbconfackoretadate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPotbconfeditshipdate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPotbconfeditexptdate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPotbconfeditcancdate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPotbconfeditackdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPotbconfexptdatedef($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPotbconfheadgetdef($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPotbconfreseq($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPotbconfforcevxref($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPotbconfqtydue($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPotbconfwarndup($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPotbconfforceporef($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPotbconfdestwhse($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPotbconfeditpoitemnotes($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPotbconfloadpovxmnotes($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPotbconfepoupdlastcost($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setPotbconfonetwoline($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setPotbconfuseordras($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setPotbconfaprvvendonly($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setPotbconfrecall($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setPotbconfrecallask($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setPotbconfreceivecost($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setPotbconfprocvari($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setPotbconfcostrcvryacct($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setPotbconfinvtyvariacct($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setPotbconfallowchgcost($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setPotbconfwarnrcptqty($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setPotbconferdispdate($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setPotbconfprovidelpo($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setPotbconfwarndiffwhse($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setPotbconfallocrcvd($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setPotbconfaskclose($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setPotbconftariffglacct($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setPotbconfshopglacct($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setPotbconfshoprate($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setPotbconfuseprime($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setPotbconfusewatch($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setPotbconfprtpowsugg($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setPotbconfpowslctyes($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setPotbconfpowgvendrpt($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setPotbconfpowgwipstatus($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setPotbconfpowgwipautogen($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setPotbconfbuyercontrol($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setPotbconfpowgoqmethod($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setPotbconffxpo($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setPotbconffxinv($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setPotbconfuselandcost($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setPotbconfbaselandamtqty($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setPotbconflandglacct($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setPotbconfwarnlandiner($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setPotbconflandamtmultwght($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setPotbconflanderedit($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setPotbconfhistcmplfab($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setPotbconfupdatevendcost($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setPotbconfaskupdate($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setPotbconfvxmroundpos($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setPotbconfxrefmaint($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setPotbconfuseidopts($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setPotbconfsrchvxmfirst($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setPotbconfopenlineonly($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setPotbconfitemdesc($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setPotbconfopenbalonly($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setPotbconfprtwhsedtl($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setPotbconfautorcpt($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setPotbconfdispitemcost($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setPotbconfdispcaseqty($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setPotbconfusefab($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setPotbconfshowitem($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setPotbconfscrapacct($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setPotbconfscrapvaripct($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setPotbconflifofifo($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setPotbconffabbomorkit($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setPotbconfallocepoer($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setPotbconffabprealloc($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setPotbconfforcefabepo($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setPotbconfpreviewcomplist($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setPotbconfnegcompusage($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setPotbconfautoselectcomp($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setPotbconfbinfromvendor($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setPotbconfdfltstckcd($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setPotbconfuseremain($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setPotbconfsamecompcost($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setPotbconfpasscode($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setDateupdtd($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setTimeupdtd($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setDummy($arr[$keys[88]]);
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
     * @return $this|\ConfigPo The current object, for fluid interface
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
        $criteria = new Criteria(ConfigPoTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFKEY)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFKEY, $this->potbconfkey);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSORTPO)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFSORTPO, $this->potbconfsortpo);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE, $this->potbconfcancorrshpdate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFACKORETADATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFACKORETADATE, $this->potbconfackoretadate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE, $this->potbconfeditshipdate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE, $this->potbconfeditexptdate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITCANCDATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFEDITCANCDATE, $this->potbconfeditcancdate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITACKDATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFEDITACKDATE, $this->potbconfeditackdate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF, $this->potbconfexptdatedef);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFHEADGETDEF)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFHEADGETDEF, $this->potbconfheadgetdef);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFRESEQ)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFRESEQ, $this->potbconfreseq);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFORCEVXREF)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFFORCEVXREF, $this->potbconfforcevxref);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFQTYDUE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFQTYDUE, $this->potbconfqtydue);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFWARNDUP)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFWARNDUP, $this->potbconfwarndup);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFORCEPOREF)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFFORCEPOREF, $this->potbconfforceporef);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFDESTWHSE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFDESTWHSE, $this->potbconfdestwhse);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES, $this->potbconfeditpoitemnotes);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES, $this->potbconfloadpovxmnotes);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST, $this->potbconfepoupdlastcost);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFONETWOLINE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFONETWOLINE, $this->potbconfonetwoline);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEORDRAS)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFUSEORDRAS, $this->potbconfuseordras);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY, $this->potbconfaprvvendonly);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFRECALL)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFRECALL, $this->potbconfrecall);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFRECALLASK)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFRECALLASK, $this->potbconfrecallask);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFRECEIVECOST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFRECEIVECOST, $this->potbconfreceivecost);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPROCVARI)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPROCVARI, $this->potbconfprocvari);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT, $this->potbconfcostrcvryacct);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT, $this->potbconfinvtyvariacct);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST, $this->potbconfallowchgcost);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY, $this->potbconfwarnrcptqty);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFERDISPDATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFERDISPDATE, $this->potbconferdispdate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPROVIDELPO)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPROVIDELPO, $this->potbconfprovidelpo);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE, $this->potbconfwarndiffwhse);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFALLOCRCVD)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFALLOCRCVD, $this->potbconfallocrcvd);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFASKCLOSE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFASKCLOSE, $this->potbconfaskclose);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT, $this->potbconftariffglacct);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSHOPGLACCT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFSHOPGLACCT, $this->potbconfshopglacct);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSHOPRATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFSHOPRATE, $this->potbconfshoprate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEPRIME)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFUSEPRIME, $this->potbconfuseprime);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEWATCH)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFUSEWATCH, $this->potbconfusewatch);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG, $this->potbconfprtpowsugg);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWSLCTYES)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPOWSLCTYES, $this->potbconfpowslctyes);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT, $this->potbconfpowgvendrpt);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS, $this->potbconfpowgwipstatus);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN, $this->potbconfpowgwipautogen);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFBUYERCONTROL)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFBUYERCONTROL, $this->potbconfbuyercontrol);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD, $this->potbconfpowgoqmethod);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFXPO)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFFXPO, $this->potbconffxpo);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFXINV)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFFXINV, $this->potbconffxinv);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSELANDCOST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFUSELANDCOST, $this->potbconfuselandcost);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY, $this->potbconfbaselandamtqty);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLANDGLACCT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFLANDGLACCT, $this->potbconflandglacct);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFWARNLANDINER)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFWARNLANDINER, $this->potbconfwarnlandiner);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT, $this->potbconflandamtmultwght);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLANDEREDIT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFLANDEREDIT, $this->potbconflanderedit);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB, $this->potbconfhistcmplfab);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST, $this->potbconfupdatevendcost);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFASKUPDATE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFASKUPDATE, $this->potbconfaskupdate);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS, $this->potbconfvxmroundpos);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFXREFMAINT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFXREFMAINT, $this->potbconfxrefmaint);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEIDOPTS)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFUSEIDOPTS, $this->potbconfuseidopts);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST, $this->potbconfsrchvxmfirst);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFOPENLINEONLY)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFOPENLINEONLY, $this->potbconfopenlineonly);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFITEMDESC)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFITEMDESC, $this->potbconfitemdesc);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFOPENBALONLY)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFOPENBALONLY, $this->potbconfopenbalonly);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL, $this->potbconfprtwhsedtl);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFAUTORCPT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFAUTORCPT, $this->potbconfautorcpt);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFDISPITEMCOST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFDISPITEMCOST, $this->potbconfdispitemcost);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFDISPCASEQTY)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFDISPCASEQTY, $this->potbconfdispcaseqty);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEFAB)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFUSEFAB, $this->potbconfusefab);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSHOWITEM)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFSHOWITEM, $this->potbconfshowitem);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSCRAPACCT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFSCRAPACCT, $this->potbconfscrapacct);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT, $this->potbconfscrapvaripct);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFLIFOFIFO)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFLIFOFIFO, $this->potbconflifofifo);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFABBOMORKIT)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFFABBOMORKIT, $this->potbconffabbomorkit);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFALLOCEPOER)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFALLOCEPOER, $this->potbconfallocepoer);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFABPREALLOC)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFFABPREALLOC, $this->potbconffabprealloc);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFFORCEFABEPO)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFFORCEFABEPO, $this->potbconfforcefabepo);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST, $this->potbconfpreviewcomplist);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE, $this->potbconfnegcompusage);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP, $this->potbconfautoselectcomp);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR, $this->potbconfbinfromvendor);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD, $this->potbconfdfltstckcd);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFUSEREMAIN)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFUSEREMAIN, $this->potbconfuseremain);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST, $this->potbconfsamecompcost);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_POTBCONFPASSCODE)) {
            $criteria->add(ConfigPoTableMap::COL_POTBCONFPASSCODE, $this->potbconfpasscode);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigPoTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigPoTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigPoTableMap::COL_DUMMY)) {
            $criteria->add(ConfigPoTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigPoQuery::create();
        $criteria->add(ConfigPoTableMap::COL_POTBCONFKEY, $this->potbconfkey);

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
        $validPk = null !== $this->getPotbconfkey();

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
        return $this->getPotbconfkey();
    }

    /**
     * Generic method to set the primary key (potbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPotbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getPotbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigPo (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPotbconfkey($this->getPotbconfkey());
        $copyObj->setPotbconfsortpo($this->getPotbconfsortpo());
        $copyObj->setPotbconfcancorrshpdate($this->getPotbconfcancorrshpdate());
        $copyObj->setPotbconfackoretadate($this->getPotbconfackoretadate());
        $copyObj->setPotbconfeditshipdate($this->getPotbconfeditshipdate());
        $copyObj->setPotbconfeditexptdate($this->getPotbconfeditexptdate());
        $copyObj->setPotbconfeditcancdate($this->getPotbconfeditcancdate());
        $copyObj->setPotbconfeditackdate($this->getPotbconfeditackdate());
        $copyObj->setPotbconfexptdatedef($this->getPotbconfexptdatedef());
        $copyObj->setPotbconfheadgetdef($this->getPotbconfheadgetdef());
        $copyObj->setPotbconfreseq($this->getPotbconfreseq());
        $copyObj->setPotbconfforcevxref($this->getPotbconfforcevxref());
        $copyObj->setPotbconfqtydue($this->getPotbconfqtydue());
        $copyObj->setPotbconfwarndup($this->getPotbconfwarndup());
        $copyObj->setPotbconfforceporef($this->getPotbconfforceporef());
        $copyObj->setPotbconfdestwhse($this->getPotbconfdestwhse());
        $copyObj->setPotbconfeditpoitemnotes($this->getPotbconfeditpoitemnotes());
        $copyObj->setPotbconfloadpovxmnotes($this->getPotbconfloadpovxmnotes());
        $copyObj->setPotbconfepoupdlastcost($this->getPotbconfepoupdlastcost());
        $copyObj->setPotbconfonetwoline($this->getPotbconfonetwoline());
        $copyObj->setPotbconfuseordras($this->getPotbconfuseordras());
        $copyObj->setPotbconfaprvvendonly($this->getPotbconfaprvvendonly());
        $copyObj->setPotbconfrecall($this->getPotbconfrecall());
        $copyObj->setPotbconfrecallask($this->getPotbconfrecallask());
        $copyObj->setPotbconfreceivecost($this->getPotbconfreceivecost());
        $copyObj->setPotbconfprocvari($this->getPotbconfprocvari());
        $copyObj->setPotbconfcostrcvryacct($this->getPotbconfcostrcvryacct());
        $copyObj->setPotbconfinvtyvariacct($this->getPotbconfinvtyvariacct());
        $copyObj->setPotbconfallowchgcost($this->getPotbconfallowchgcost());
        $copyObj->setPotbconfwarnrcptqty($this->getPotbconfwarnrcptqty());
        $copyObj->setPotbconferdispdate($this->getPotbconferdispdate());
        $copyObj->setPotbconfprovidelpo($this->getPotbconfprovidelpo());
        $copyObj->setPotbconfwarndiffwhse($this->getPotbconfwarndiffwhse());
        $copyObj->setPotbconfallocrcvd($this->getPotbconfallocrcvd());
        $copyObj->setPotbconfaskclose($this->getPotbconfaskclose());
        $copyObj->setPotbconftariffglacct($this->getPotbconftariffglacct());
        $copyObj->setPotbconfshopglacct($this->getPotbconfshopglacct());
        $copyObj->setPotbconfshoprate($this->getPotbconfshoprate());
        $copyObj->setPotbconfuseprime($this->getPotbconfuseprime());
        $copyObj->setPotbconfusewatch($this->getPotbconfusewatch());
        $copyObj->setPotbconfprtpowsugg($this->getPotbconfprtpowsugg());
        $copyObj->setPotbconfpowslctyes($this->getPotbconfpowslctyes());
        $copyObj->setPotbconfpowgvendrpt($this->getPotbconfpowgvendrpt());
        $copyObj->setPotbconfpowgwipstatus($this->getPotbconfpowgwipstatus());
        $copyObj->setPotbconfpowgwipautogen($this->getPotbconfpowgwipautogen());
        $copyObj->setPotbconfbuyercontrol($this->getPotbconfbuyercontrol());
        $copyObj->setPotbconfpowgoqmethod($this->getPotbconfpowgoqmethod());
        $copyObj->setPotbconffxpo($this->getPotbconffxpo());
        $copyObj->setPotbconffxinv($this->getPotbconffxinv());
        $copyObj->setPotbconfuselandcost($this->getPotbconfuselandcost());
        $copyObj->setPotbconfbaselandamtqty($this->getPotbconfbaselandamtqty());
        $copyObj->setPotbconflandglacct($this->getPotbconflandglacct());
        $copyObj->setPotbconfwarnlandiner($this->getPotbconfwarnlandiner());
        $copyObj->setPotbconflandamtmultwght($this->getPotbconflandamtmultwght());
        $copyObj->setPotbconflanderedit($this->getPotbconflanderedit());
        $copyObj->setPotbconfhistcmplfab($this->getPotbconfhistcmplfab());
        $copyObj->setPotbconfupdatevendcost($this->getPotbconfupdatevendcost());
        $copyObj->setPotbconfaskupdate($this->getPotbconfaskupdate());
        $copyObj->setPotbconfvxmroundpos($this->getPotbconfvxmroundpos());
        $copyObj->setPotbconfxrefmaint($this->getPotbconfxrefmaint());
        $copyObj->setPotbconfuseidopts($this->getPotbconfuseidopts());
        $copyObj->setPotbconfsrchvxmfirst($this->getPotbconfsrchvxmfirst());
        $copyObj->setPotbconfopenlineonly($this->getPotbconfopenlineonly());
        $copyObj->setPotbconfitemdesc($this->getPotbconfitemdesc());
        $copyObj->setPotbconfopenbalonly($this->getPotbconfopenbalonly());
        $copyObj->setPotbconfprtwhsedtl($this->getPotbconfprtwhsedtl());
        $copyObj->setPotbconfautorcpt($this->getPotbconfautorcpt());
        $copyObj->setPotbconfdispitemcost($this->getPotbconfdispitemcost());
        $copyObj->setPotbconfdispcaseqty($this->getPotbconfdispcaseqty());
        $copyObj->setPotbconfusefab($this->getPotbconfusefab());
        $copyObj->setPotbconfshowitem($this->getPotbconfshowitem());
        $copyObj->setPotbconfscrapacct($this->getPotbconfscrapacct());
        $copyObj->setPotbconfscrapvaripct($this->getPotbconfscrapvaripct());
        $copyObj->setPotbconflifofifo($this->getPotbconflifofifo());
        $copyObj->setPotbconffabbomorkit($this->getPotbconffabbomorkit());
        $copyObj->setPotbconfallocepoer($this->getPotbconfallocepoer());
        $copyObj->setPotbconffabprealloc($this->getPotbconffabprealloc());
        $copyObj->setPotbconfforcefabepo($this->getPotbconfforcefabepo());
        $copyObj->setPotbconfpreviewcomplist($this->getPotbconfpreviewcomplist());
        $copyObj->setPotbconfnegcompusage($this->getPotbconfnegcompusage());
        $copyObj->setPotbconfautoselectcomp($this->getPotbconfautoselectcomp());
        $copyObj->setPotbconfbinfromvendor($this->getPotbconfbinfromvendor());
        $copyObj->setPotbconfdfltstckcd($this->getPotbconfdfltstckcd());
        $copyObj->setPotbconfuseremain($this->getPotbconfuseremain());
        $copyObj->setPotbconfsamecompcost($this->getPotbconfsamecompcost());
        $copyObj->setPotbconfpasscode($this->getPotbconfpasscode());
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
     * @return \ConfigPo Clone of current object.
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
        $this->potbconfkey = null;
        $this->potbconfsortpo = null;
        $this->potbconfcancorrshpdate = null;
        $this->potbconfackoretadate = null;
        $this->potbconfeditshipdate = null;
        $this->potbconfeditexptdate = null;
        $this->potbconfeditcancdate = null;
        $this->potbconfeditackdate = null;
        $this->potbconfexptdatedef = null;
        $this->potbconfheadgetdef = null;
        $this->potbconfreseq = null;
        $this->potbconfforcevxref = null;
        $this->potbconfqtydue = null;
        $this->potbconfwarndup = null;
        $this->potbconfforceporef = null;
        $this->potbconfdestwhse = null;
        $this->potbconfeditpoitemnotes = null;
        $this->potbconfloadpovxmnotes = null;
        $this->potbconfepoupdlastcost = null;
        $this->potbconfonetwoline = null;
        $this->potbconfuseordras = null;
        $this->potbconfaprvvendonly = null;
        $this->potbconfrecall = null;
        $this->potbconfrecallask = null;
        $this->potbconfreceivecost = null;
        $this->potbconfprocvari = null;
        $this->potbconfcostrcvryacct = null;
        $this->potbconfinvtyvariacct = null;
        $this->potbconfallowchgcost = null;
        $this->potbconfwarnrcptqty = null;
        $this->potbconferdispdate = null;
        $this->potbconfprovidelpo = null;
        $this->potbconfwarndiffwhse = null;
        $this->potbconfallocrcvd = null;
        $this->potbconfaskclose = null;
        $this->potbconftariffglacct = null;
        $this->potbconfshopglacct = null;
        $this->potbconfshoprate = null;
        $this->potbconfuseprime = null;
        $this->potbconfusewatch = null;
        $this->potbconfprtpowsugg = null;
        $this->potbconfpowslctyes = null;
        $this->potbconfpowgvendrpt = null;
        $this->potbconfpowgwipstatus = null;
        $this->potbconfpowgwipautogen = null;
        $this->potbconfbuyercontrol = null;
        $this->potbconfpowgoqmethod = null;
        $this->potbconffxpo = null;
        $this->potbconffxinv = null;
        $this->potbconfuselandcost = null;
        $this->potbconfbaselandamtqty = null;
        $this->potbconflandglacct = null;
        $this->potbconfwarnlandiner = null;
        $this->potbconflandamtmultwght = null;
        $this->potbconflanderedit = null;
        $this->potbconfhistcmplfab = null;
        $this->potbconfupdatevendcost = null;
        $this->potbconfaskupdate = null;
        $this->potbconfvxmroundpos = null;
        $this->potbconfxrefmaint = null;
        $this->potbconfuseidopts = null;
        $this->potbconfsrchvxmfirst = null;
        $this->potbconfopenlineonly = null;
        $this->potbconfitemdesc = null;
        $this->potbconfopenbalonly = null;
        $this->potbconfprtwhsedtl = null;
        $this->potbconfautorcpt = null;
        $this->potbconfdispitemcost = null;
        $this->potbconfdispcaseqty = null;
        $this->potbconfusefab = null;
        $this->potbconfshowitem = null;
        $this->potbconfscrapacct = null;
        $this->potbconfscrapvaripct = null;
        $this->potbconflifofifo = null;
        $this->potbconffabbomorkit = null;
        $this->potbconfallocepoer = null;
        $this->potbconffabprealloc = null;
        $this->potbconfforcefabepo = null;
        $this->potbconfpreviewcomplist = null;
        $this->potbconfnegcompusage = null;
        $this->potbconfautoselectcomp = null;
        $this->potbconfbinfromvendor = null;
        $this->potbconfdfltstckcd = null;
        $this->potbconfuseremain = null;
        $this->potbconfsamecompcost = null;
        $this->potbconfpasscode = null;
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
        return (string) $this->exportTo(ConfigPoTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // parent::preSave($con);
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
            // parent::preInsert($con);
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
            // parent::preUpdate($con);
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
            // parent::preDelete($con);
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
