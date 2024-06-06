<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderDetail as ChildPurchaseOrderDetail;
use \PurchaseOrderDetailLotReceiving as ChildPurchaseOrderDetailLotReceiving;
use \PurchaseOrderDetailLotReceivingQuery as ChildPurchaseOrderDetailLotReceivingQuery;
use \PurchaseOrderDetailQuery as ChildPurchaseOrderDetailQuery;
use \PurchaseOrderDetailReceipt as ChildPurchaseOrderDetailReceipt;
use \PurchaseOrderDetailReceiptQuery as ChildPurchaseOrderDetailReceiptQuery;
use \PurchaseOrderDetailReceiving as ChildPurchaseOrderDetailReceiving;
use \PurchaseOrderDetailReceivingQuery as ChildPurchaseOrderDetailReceivingQuery;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailLotReceivingTableMap;
use Map\PurchaseOrderDetailReceiptTableMap;
use Map\PurchaseOrderDetailReceivingTableMap;
use Map\PurchaseOrderDetailTableMap;
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
 * Base class that represents a row from the 'po_detail' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class PurchaseOrderDetail implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\PurchaseOrderDetailTableMap';


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
     * The value for the pohdnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pohdnbr;

    /**
     * The value for the podtline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $podtline;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the podtdesc1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtdesc1;

    /**
     * The value for the podtdesc2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtdesc2;

    /**
     * The value for the podtvenditemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtvenditemnbr;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the podtshipdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtshipdate;

    /**
     * The value for the podtexptdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtexptdate;

    /**
     * The value for the podtcancdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtcancdate;

    /**
     * The value for the intbuompur field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbuompur;

    /**
     * The value for the podtqtyord field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $podtqtyord;

    /**
     * The value for the podtcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $podtcost;

    /**
     * The value for the podtcosttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $podtcosttot;

    /**
     * The value for the podtrel field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $podtrel;

    /**
     * The value for the podtspecordr field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $podtspecordr;

    /**
     * The value for the podtglacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtglacct;

    /**
     * The value for the podtsonbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $podtsonbr;

    /**
     * The value for the podtstat field.
     *
     * Note: this column has a database default value of: 'O'
     * @var        string
     */
    protected $podtstat;

    /**
     * The value for the podtorigsoline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $podtorigsoline;

    /**
     * The value for the podtqtyduein field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $podtqtyduein;

    /**
     * The value for the podttype field.
     *
     * Note: this column has a database default value of: 'S'
     * @var        string
     */
    protected $podttype;

    /**
     * The value for the podtwghttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $podtwghttot;

    /**
     * The value for the podtforeigncost field.
     *
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $podtforeigncost;

    /**
     * The value for the podtforeigncosttot field.
     *
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $podtforeigncosttot;

    /**
     * The value for the podtstanunitcost field.
     *
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $podtstanunitcost;

    /**
     * The value for the podtackdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtackdate;

    /**
     * The value for the podtinvcclearflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $podtinvcclearflag;

    /**
     * The value for the podtprtkitdet field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $podtprtkitdet;

    /**
     * The value for the podtdestwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtdestwhse;

    /**
     * The value for the podtrevision field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtrevision;

    /**
     * The value for the podtprtpoeoru field.
     *
     * Note: this column has a database default value of: 'E'
     * @var        string
     */
    protected $podtprtpoeoru;

    /**
     * The value for the potbcnfmcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $potbcnfmcode;

    /**
     * The value for the podtrcptnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $podtrcptnbr;

    /**
     * The value for the podtwipnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $podtwipnbr;

    /**
     * The value for the podtordras field.
     *
     * Note: this column has a database default value of: 'C'
     * @var        string
     */
    protected $podtordras;

    /**
     * The value for the podtboldate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtboldate;

    /**
     * The value for the podtlistpric field.
     *
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $podtlistpric;

    /**
     * The value for the podtdelivereddate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $podtdelivereddate;

    /**
     * The value for the podtlandcost field.
     *
     * Note: this column has a database default value of: '0.00000'
     * @var        string
     */
    protected $podtlandcost;

    /**
     * The value for the podtcasesord field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $podtcasesord;

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
     * @var        ChildPurchaseOrder
     */
    protected $aPurchaseOrder;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetailReceipt[] Collection to store aggregation of ChildPurchaseOrderDetailReceipt objects.
     */
    protected $collPurchaseOrderDetailReceipts;
    protected $collPurchaseOrderDetailReceiptsPartial;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetailReceiving[] Collection to store aggregation of ChildPurchaseOrderDetailReceiving objects.
     */
    protected $collPurchaseOrderDetailReceivings;
    protected $collPurchaseOrderDetailReceivingsPartial;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] Collection to store aggregation of ChildPurchaseOrderDetailLotReceiving objects.
     */
    protected $collPurchaseOrderDetailLotReceivings;
    protected $collPurchaseOrderDetailLotReceivingsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetailReceipt[]
     */
    protected $purchaseOrderDetailReceiptsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetailReceiving[]
     */
    protected $purchaseOrderDetailReceivingsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetailLotReceiving[]
     */
    protected $purchaseOrderDetailLotReceivingsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->pohdnbr = 0;
        $this->podtline = 0;
        $this->inititemnbr = '';
        $this->podtdesc1 = '';
        $this->podtdesc2 = '';
        $this->podtvenditemnbr = '';
        $this->intbwhse = '';
        $this->podtshipdate = '';
        $this->podtexptdate = '';
        $this->podtcancdate = '';
        $this->intbuompur = '';
        $this->podtqtyord = '0.0000000';
        $this->podtcost = '0.0000000';
        $this->podtcosttot = '0.0000000';
        $this->podtrel = 'Y';
        $this->podtspecordr = 'N';
        $this->podtglacct = '';
        $this->podtsonbr = 0;
        $this->podtstat = 'O';
        $this->podtorigsoline = 0;
        $this->podtqtyduein = '0.00';
        $this->podttype = 'S';
        $this->podtwghttot = '0.0000000';
        $this->podtforeigncost = '0.0000';
        $this->podtforeigncosttot = '0.0000';
        $this->podtstanunitcost = '0.0000';
        $this->podtackdate = '';
        $this->podtinvcclearflag = 'N';
        $this->podtprtkitdet = 'N';
        $this->podtdestwhse = '';
        $this->podtrevision = '';
        $this->podtprtpoeoru = 'E';
        $this->potbcnfmcode = '';
        $this->podtrcptnbr = 0;
        $this->podtwipnbr = 0;
        $this->podtordras = 'C';
        $this->podtboldate = '';
        $this->podtlistpric = '0.0000';
        $this->podtdelivereddate = '';
        $this->podtlandcost = '0.00000';
        $this->podtcasesord = 0;
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\PurchaseOrderDetail object.
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
     * Compares this with another <code>PurchaseOrderDetail</code> instance.  If
     * <code>obj</code> is an instance of <code>PurchaseOrderDetail</code>, delegates to
     * <code>equals(PurchaseOrderDetail)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|PurchaseOrderDetail The current object, for fluid interface
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
     * Get the [pohdnbr] column value.
     *
     * @return int
     */
    public function getPohdnbr()
    {
        return $this->pohdnbr;
    }

    /**
     * Get the [podtline] column value.
     *
     * @return int
     */
    public function getPodtline()
    {
        return $this->podtline;
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
     * Get the [podtdesc1] column value.
     *
     * @return string
     */
    public function getPodtdesc1()
    {
        return $this->podtdesc1;
    }

    /**
     * Get the [podtdesc2] column value.
     *
     * @return string
     */
    public function getPodtdesc2()
    {
        return $this->podtdesc2;
    }

    /**
     * Get the [podtvenditemnbr] column value.
     *
     * @return string
     */
    public function getPodtvenditemnbr()
    {
        return $this->podtvenditemnbr;
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
     * Get the [podtshipdate] column value.
     *
     * @return string
     */
    public function getPodtshipdate()
    {
        return $this->podtshipdate;
    }

    /**
     * Get the [podtexptdate] column value.
     *
     * @return string
     */
    public function getPodtexptdate()
    {
        return $this->podtexptdate;
    }

    /**
     * Get the [podtcancdate] column value.
     *
     * @return string
     */
    public function getPodtcancdate()
    {
        return $this->podtcancdate;
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
     * Get the [podtqtyord] column value.
     *
     * @return string
     */
    public function getPodtqtyord()
    {
        return $this->podtqtyord;
    }

    /**
     * Get the [podtcost] column value.
     *
     * @return string
     */
    public function getPodtcost()
    {
        return $this->podtcost;
    }

    /**
     * Get the [podtcosttot] column value.
     *
     * @return string
     */
    public function getPodtcosttot()
    {
        return $this->podtcosttot;
    }

    /**
     * Get the [podtrel] column value.
     *
     * @return string
     */
    public function getPodtrel()
    {
        return $this->podtrel;
    }

    /**
     * Get the [podtspecordr] column value.
     *
     * @return string
     */
    public function getPodtspecordr()
    {
        return $this->podtspecordr;
    }

    /**
     * Get the [podtglacct] column value.
     *
     * @return string
     */
    public function getPodtglacct()
    {
        return $this->podtglacct;
    }

    /**
     * Get the [podtsonbr] column value.
     *
     * @return int
     */
    public function getPodtsonbr()
    {
        return $this->podtsonbr;
    }

    /**
     * Get the [podtstat] column value.
     *
     * @return string
     */
    public function getPodtstat()
    {
        return $this->podtstat;
    }

    /**
     * Get the [podtorigsoline] column value.
     *
     * @return int
     */
    public function getPodtorigsoline()
    {
        return $this->podtorigsoline;
    }

    /**
     * Get the [podtqtyduein] column value.
     *
     * @return string
     */
    public function getPodtqtyduein()
    {
        return $this->podtqtyduein;
    }

    /**
     * Get the [podttype] column value.
     *
     * @return string
     */
    public function getPodttype()
    {
        return $this->podttype;
    }

    /**
     * Get the [podtwghttot] column value.
     *
     * @return string
     */
    public function getPodtwghttot()
    {
        return $this->podtwghttot;
    }

    /**
     * Get the [podtforeigncost] column value.
     *
     * @return string
     */
    public function getPodtforeigncost()
    {
        return $this->podtforeigncost;
    }

    /**
     * Get the [podtforeigncosttot] column value.
     *
     * @return string
     */
    public function getPodtforeigncosttot()
    {
        return $this->podtforeigncosttot;
    }

    /**
     * Get the [podtstanunitcost] column value.
     *
     * @return string
     */
    public function getPodtstanunitcost()
    {
        return $this->podtstanunitcost;
    }

    /**
     * Get the [podtackdate] column value.
     *
     * @return string
     */
    public function getPodtackdate()
    {
        return $this->podtackdate;
    }

    /**
     * Get the [podtinvcclearflag] column value.
     *
     * @return string
     */
    public function getPodtinvcclearflag()
    {
        return $this->podtinvcclearflag;
    }

    /**
     * Get the [podtprtkitdet] column value.
     *
     * @return string
     */
    public function getPodtprtkitdet()
    {
        return $this->podtprtkitdet;
    }

    /**
     * Get the [podtdestwhse] column value.
     *
     * @return string
     */
    public function getPodtdestwhse()
    {
        return $this->podtdestwhse;
    }

    /**
     * Get the [podtrevision] column value.
     *
     * @return string
     */
    public function getPodtrevision()
    {
        return $this->podtrevision;
    }

    /**
     * Get the [podtprtpoeoru] column value.
     *
     * @return string
     */
    public function getPodtprtpoeoru()
    {
        return $this->podtprtpoeoru;
    }

    /**
     * Get the [potbcnfmcode] column value.
     *
     * @return string
     */
    public function getPotbcnfmcode()
    {
        return $this->potbcnfmcode;
    }

    /**
     * Get the [podtrcptnbr] column value.
     *
     * @return int
     */
    public function getPodtrcptnbr()
    {
        return $this->podtrcptnbr;
    }

    /**
     * Get the [podtwipnbr] column value.
     *
     * @return int
     */
    public function getPodtwipnbr()
    {
        return $this->podtwipnbr;
    }

    /**
     * Get the [podtordras] column value.
     *
     * @return string
     */
    public function getPodtordras()
    {
        return $this->podtordras;
    }

    /**
     * Get the [podtboldate] column value.
     *
     * @return string
     */
    public function getPodtboldate()
    {
        return $this->podtboldate;
    }

    /**
     * Get the [podtlistpric] column value.
     *
     * @return string
     */
    public function getPodtlistpric()
    {
        return $this->podtlistpric;
    }

    /**
     * Get the [podtdelivereddate] column value.
     *
     * @return string
     */
    public function getPodtdelivereddate()
    {
        return $this->podtdelivereddate;
    }

    /**
     * Get the [podtlandcost] column value.
     *
     * @return string
     */
    public function getPodtlandcost()
    {
        return $this->podtlandcost;
    }

    /**
     * Get the [podtcasesord] column value.
     *
     * @return int
     */
    public function getPodtcasesord()
    {
        return $this->podtcasesord;
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
     * Set the value of [pohdnbr] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPohdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pohdnbr !== $v) {
            $this->pohdnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_POHDNBR] = true;
        }

        if ($this->aPurchaseOrder !== null && $this->aPurchaseOrder->getPohdnbr() !== $v) {
            $this->aPurchaseOrder = null;
        }

        return $this;
    } // setPohdnbr()

    /**
     * Set the value of [podtline] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->podtline !== $v) {
            $this->podtline = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTLINE] = true;
        }

        return $this;
    } // setPodtline()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [podtdesc1] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtdesc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtdesc1 !== $v) {
            $this->podtdesc1 = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTDESC1] = true;
        }

        return $this;
    } // setPodtdesc1()

    /**
     * Set the value of [podtdesc2] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtdesc2 !== $v) {
            $this->podtdesc2 = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTDESC2] = true;
        }

        return $this;
    } // setPodtdesc2()

    /**
     * Set the value of [podtvenditemnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtvenditemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtvenditemnbr !== $v) {
            $this->podtvenditemnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR] = true;
        }

        return $this;
    } // setPodtvenditemnbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [podtshipdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtshipdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtshipdate !== $v) {
            $this->podtshipdate = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTSHIPDATE] = true;
        }

        return $this;
    } // setPodtshipdate()

    /**
     * Set the value of [podtexptdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtexptdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtexptdate !== $v) {
            $this->podtexptdate = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTEXPTDATE] = true;
        }

        return $this;
    } // setPodtexptdate()

    /**
     * Set the value of [podtcancdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtcancdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtcancdate !== $v) {
            $this->podtcancdate = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTCANCDATE] = true;
        }

        return $this;
    } // setPodtcancdate()

    /**
     * Set the value of [intbuompur] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setIntbuompur($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuompur !== $v) {
            $this->intbuompur = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_INTBUOMPUR] = true;
        }

        return $this;
    } // setIntbuompur()

    /**
     * Set the value of [podtqtyord] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtqtyord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtqtyord !== $v) {
            $this->podtqtyord = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTQTYORD] = true;
        }

        return $this;
    } // setPodtqtyord()

    /**
     * Set the value of [podtcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtcost !== $v) {
            $this->podtcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTCOST] = true;
        }

        return $this;
    } // setPodtcost()

    /**
     * Set the value of [podtcosttot] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtcosttot !== $v) {
            $this->podtcosttot = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTCOSTTOT] = true;
        }

        return $this;
    } // setPodtcosttot()

    /**
     * Set the value of [podtrel] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtrel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtrel !== $v) {
            $this->podtrel = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTREL] = true;
        }

        return $this;
    } // setPodtrel()

    /**
     * Set the value of [podtspecordr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtspecordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtspecordr !== $v) {
            $this->podtspecordr = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTSPECORDR] = true;
        }

        return $this;
    } // setPodtspecordr()

    /**
     * Set the value of [podtglacct] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtglacct !== $v) {
            $this->podtglacct = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTGLACCT] = true;
        }

        return $this;
    } // setPodtglacct()

    /**
     * Set the value of [podtsonbr] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtsonbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->podtsonbr !== $v) {
            $this->podtsonbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTSONBR] = true;
        }

        return $this;
    } // setPodtsonbr()

    /**
     * Set the value of [podtstat] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtstat !== $v) {
            $this->podtstat = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTSTAT] = true;
        }

        return $this;
    } // setPodtstat()

    /**
     * Set the value of [podtorigsoline] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtorigsoline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->podtorigsoline !== $v) {
            $this->podtorigsoline = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE] = true;
        }

        return $this;
    } // setPodtorigsoline()

    /**
     * Set the value of [podtqtyduein] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtqtyduein($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtqtyduein !== $v) {
            $this->podtqtyduein = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN] = true;
        }

        return $this;
    } // setPodtqtyduein()

    /**
     * Set the value of [podttype] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodttype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podttype !== $v) {
            $this->podttype = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTTYPE] = true;
        }

        return $this;
    } // setPodttype()

    /**
     * Set the value of [podtwghttot] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtwghttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtwghttot !== $v) {
            $this->podtwghttot = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTWGHTTOT] = true;
        }

        return $this;
    } // setPodtwghttot()

    /**
     * Set the value of [podtforeigncost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtforeigncost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtforeigncost !== $v) {
            $this->podtforeigncost = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST] = true;
        }

        return $this;
    } // setPodtforeigncost()

    /**
     * Set the value of [podtforeigncosttot] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtforeigncosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtforeigncosttot !== $v) {
            $this->podtforeigncosttot = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT] = true;
        }

        return $this;
    } // setPodtforeigncosttot()

    /**
     * Set the value of [podtstanunitcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtstanunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtstanunitcost !== $v) {
            $this->podtstanunitcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST] = true;
        }

        return $this;
    } // setPodtstanunitcost()

    /**
     * Set the value of [podtackdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtackdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtackdate !== $v) {
            $this->podtackdate = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTACKDATE] = true;
        }

        return $this;
    } // setPodtackdate()

    /**
     * Set the value of [podtinvcclearflag] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtinvcclearflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtinvcclearflag !== $v) {
            $this->podtinvcclearflag = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG] = true;
        }

        return $this;
    } // setPodtinvcclearflag()

    /**
     * Set the value of [podtprtkitdet] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtprtkitdet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtprtkitdet !== $v) {
            $this->podtprtkitdet = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTPRTKITDET] = true;
        }

        return $this;
    } // setPodtprtkitdet()

    /**
     * Set the value of [podtdestwhse] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtdestwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtdestwhse !== $v) {
            $this->podtdestwhse = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTDESTWHSE] = true;
        }

        return $this;
    } // setPodtdestwhse()

    /**
     * Set the value of [podtrevision] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtrevision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtrevision !== $v) {
            $this->podtrevision = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTREVISION] = true;
        }

        return $this;
    } // setPodtrevision()

    /**
     * Set the value of [podtprtpoeoru] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtprtpoeoru($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtprtpoeoru !== $v) {
            $this->podtprtpoeoru = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU] = true;
        }

        return $this;
    } // setPodtprtpoeoru()

    /**
     * Set the value of [potbcnfmcode] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPotbcnfmcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->potbcnfmcode !== $v) {
            $this->potbcnfmcode = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_POTBCNFMCODE] = true;
        }

        return $this;
    } // setPotbcnfmcode()

    /**
     * Set the value of [podtrcptnbr] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtrcptnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->podtrcptnbr !== $v) {
            $this->podtrcptnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTRCPTNBR] = true;
        }

        return $this;
    } // setPodtrcptnbr()

    /**
     * Set the value of [podtwipnbr] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtwipnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->podtwipnbr !== $v) {
            $this->podtwipnbr = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTWIPNBR] = true;
        }

        return $this;
    } // setPodtwipnbr()

    /**
     * Set the value of [podtordras] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtordras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtordras !== $v) {
            $this->podtordras = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTORDRAS] = true;
        }

        return $this;
    } // setPodtordras()

    /**
     * Set the value of [podtboldate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtboldate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtboldate !== $v) {
            $this->podtboldate = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTBOLDATE] = true;
        }

        return $this;
    } // setPodtboldate()

    /**
     * Set the value of [podtlistpric] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtlistpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtlistpric !== $v) {
            $this->podtlistpric = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTLISTPRIC] = true;
        }

        return $this;
    } // setPodtlistpric()

    /**
     * Set the value of [podtdelivereddate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtdelivereddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtdelivereddate !== $v) {
            $this->podtdelivereddate = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE] = true;
        }

        return $this;
    } // setPodtdelivereddate()

    /**
     * Set the value of [podtlandcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtlandcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->podtlandcost !== $v) {
            $this->podtlandcost = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTLANDCOST] = true;
        }

        return $this;
    } // setPodtlandcost()

    /**
     * Set the value of [podtcasesord] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPodtcasesord($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->podtcasesord !== $v) {
            $this->podtcasesord = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_PODTCASESORD] = true;
        }

        return $this;
    } // setPodtcasesord()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[PurchaseOrderDetailTableMap::COL_DUMMY] = true;
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
            if ($this->pohdnbr !== 0) {
                return false;
            }

            if ($this->podtline !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->podtdesc1 !== '') {
                return false;
            }

            if ($this->podtdesc2 !== '') {
                return false;
            }

            if ($this->podtvenditemnbr !== '') {
                return false;
            }

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->podtshipdate !== '') {
                return false;
            }

            if ($this->podtexptdate !== '') {
                return false;
            }

            if ($this->podtcancdate !== '') {
                return false;
            }

            if ($this->intbuompur !== '') {
                return false;
            }

            if ($this->podtqtyord !== '0.0000000') {
                return false;
            }

            if ($this->podtcost !== '0.0000000') {
                return false;
            }

            if ($this->podtcosttot !== '0.0000000') {
                return false;
            }

            if ($this->podtrel !== 'Y') {
                return false;
            }

            if ($this->podtspecordr !== 'N') {
                return false;
            }

            if ($this->podtglacct !== '') {
                return false;
            }

            if ($this->podtsonbr !== 0) {
                return false;
            }

            if ($this->podtstat !== 'O') {
                return false;
            }

            if ($this->podtorigsoline !== 0) {
                return false;
            }

            if ($this->podtqtyduein !== '0.00') {
                return false;
            }

            if ($this->podttype !== 'S') {
                return false;
            }

            if ($this->podtwghttot !== '0.0000000') {
                return false;
            }

            if ($this->podtforeigncost !== '0.0000') {
                return false;
            }

            if ($this->podtforeigncosttot !== '0.0000') {
                return false;
            }

            if ($this->podtstanunitcost !== '0.0000') {
                return false;
            }

            if ($this->podtackdate !== '') {
                return false;
            }

            if ($this->podtinvcclearflag !== 'N') {
                return false;
            }

            if ($this->podtprtkitdet !== 'N') {
                return false;
            }

            if ($this->podtdestwhse !== '') {
                return false;
            }

            if ($this->podtrevision !== '') {
                return false;
            }

            if ($this->podtprtpoeoru !== 'E') {
                return false;
            }

            if ($this->potbcnfmcode !== '') {
                return false;
            }

            if ($this->podtrcptnbr !== 0) {
                return false;
            }

            if ($this->podtwipnbr !== 0) {
                return false;
            }

            if ($this->podtordras !== 'C') {
                return false;
            }

            if ($this->podtboldate !== '') {
                return false;
            }

            if ($this->podtlistpric !== '0.0000') {
                return false;
            }

            if ($this->podtdelivereddate !== '') {
                return false;
            }

            if ($this->podtlandcost !== '0.00000') {
                return false;
            }

            if ($this->podtcasesord !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtdesc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtdesc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtvenditemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtshipdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtshipdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtexptdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtexptdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtcancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtcancdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuompur = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtqtyord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtqtyord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtrel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtrel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtspecordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtspecordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtsonbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtsonbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtorigsoline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtorigsoline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtqtyduein', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtqtyduein = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podttype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podttype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtwghttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtwghttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtforeigncost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtforeigncost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtforeigncosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtforeigncosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtstanunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtstanunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtackdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtackdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtinvcclearflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtinvcclearflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtprtkitdet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtprtkitdet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtdestwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtdestwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtrevision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtrevision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtprtpoeoru', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtprtpoeoru = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Potbcnfmcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->potbcnfmcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtrcptnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtrcptnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtwipnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtwipnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtordras', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtordras = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtboldate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtboldate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtlistpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtlistpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtdelivereddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtdelivereddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtlandcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtlandcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Podtcasesord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->podtcasesord = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : PurchaseOrderDetailTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 44; // 44 = PurchaseOrderDetailTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\PurchaseOrderDetail'), 0, $e);
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
        if ($this->aPurchaseOrder !== null && $this->pohdnbr !== $this->aPurchaseOrder->getPohdnbr()) {
            $this->aPurchaseOrder = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildPurchaseOrderDetailQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPurchaseOrder = null;
            $this->aItemMasterItem = null;
            $this->collPurchaseOrderDetailReceipts = null;

            $this->collPurchaseOrderDetailReceivings = null;

            $this->collPurchaseOrderDetailLotReceivings = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see PurchaseOrderDetail::setDeleted()
     * @see PurchaseOrderDetail::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildPurchaseOrderDetailQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailTableMap::DATABASE_NAME);
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
                PurchaseOrderDetailTableMap::addInstanceToPool($this);
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

            if ($this->aPurchaseOrder !== null) {
                if ($this->aPurchaseOrder->isModified() || $this->aPurchaseOrder->isNew()) {
                    $affectedRows += $this->aPurchaseOrder->save($con);
                }
                $this->setPurchaseOrder($this->aPurchaseOrder);
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

            if ($this->purchaseOrderDetailReceiptsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailReceiptsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailReceiptQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailReceiptsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailReceiptsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetailReceipts !== null) {
                foreach ($this->collPurchaseOrderDetailReceipts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->purchaseOrderDetailReceivingsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailReceivingsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailReceivingQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailReceivingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailReceivingsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetailReceivings !== null) {
                foreach ($this->collPurchaseOrderDetailReceivings as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->purchaseOrderDetailLotReceivingsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailLotReceivingsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailLotReceivingQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailLotReceivingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetailLotReceivings !== null) {
                foreach ($this->collPurchaseOrderDetailLotReceivings as $referrerFK) {
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
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_POHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PohdNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtLine';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTDESC1)) {
            $modifiedColumns[':p' . $index++]  = 'PodtDesc1';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'PodtDesc2';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PodtVendItemNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSHIPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtShipDate';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTEXPTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtExptDate';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTCANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtCancDate';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_INTBUOMPUR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomPur';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTQTYORD)) {
            $modifiedColumns[':p' . $index++]  = 'PodtQtyOrd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PodtCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'PodtCostTot';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTREL)) {
            $modifiedColumns[':p' . $index++]  = 'PodtRel';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSPECORDR)) {
            $modifiedColumns[':p' . $index++]  = 'PodtSpecOrdr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'PodtGlAcct';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSONBR)) {
            $modifiedColumns[':p' . $index++]  = 'PodtSoNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'PodtStat';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtOrigSoLine';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN)) {
            $modifiedColumns[':p' . $index++]  = 'PodtQtyDueIn';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtType';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTWGHTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'PodtWghtTot';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PodtForeignCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'PodtForeignCostTot';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PodtStanUnitCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTACKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtAckDate';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'PodtInvcClearFlag';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTPRTKITDET)) {
            $modifiedColumns[':p' . $index++]  = 'PodtPrtKitDet';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTDESTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtDestWhse';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTREVISION)) {
            $modifiedColumns[':p' . $index++]  = 'PodtRevision';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU)) {
            $modifiedColumns[':p' . $index++]  = 'PodtPrtPoEOrU';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_POTBCNFMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'PotbCnfmCode';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTRCPTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PodtRcptNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTWIPNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PodtWipNbr';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTORDRAS)) {
            $modifiedColumns[':p' . $index++]  = 'PodtOrdrAs';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTBOLDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtBolDate';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTLISTPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'PodtListPric';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PodtDeliveredDate';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTLANDCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PodtLandCost';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTCASESORD)) {
            $modifiedColumns[':p' . $index++]  = 'PodtCasesOrd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO po_detail (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'PohdNbr':
                        $stmt->bindValue($identifier, $this->pohdnbr, PDO::PARAM_INT);
                        break;
                    case 'PodtLine':
                        $stmt->bindValue($identifier, $this->podtline, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'PodtDesc1':
                        $stmt->bindValue($identifier, $this->podtdesc1, PDO::PARAM_STR);
                        break;
                    case 'PodtDesc2':
                        $stmt->bindValue($identifier, $this->podtdesc2, PDO::PARAM_STR);
                        break;
                    case 'PodtVendItemNbr':
                        $stmt->bindValue($identifier, $this->podtvenditemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'PodtShipDate':
                        $stmt->bindValue($identifier, $this->podtshipdate, PDO::PARAM_STR);
                        break;
                    case 'PodtExptDate':
                        $stmt->bindValue($identifier, $this->podtexptdate, PDO::PARAM_STR);
                        break;
                    case 'PodtCancDate':
                        $stmt->bindValue($identifier, $this->podtcancdate, PDO::PARAM_STR);
                        break;
                    case 'IntbUomPur':
                        $stmt->bindValue($identifier, $this->intbuompur, PDO::PARAM_STR);
                        break;
                    case 'PodtQtyOrd':
                        $stmt->bindValue($identifier, $this->podtqtyord, PDO::PARAM_STR);
                        break;
                    case 'PodtCost':
                        $stmt->bindValue($identifier, $this->podtcost, PDO::PARAM_STR);
                        break;
                    case 'PodtCostTot':
                        $stmt->bindValue($identifier, $this->podtcosttot, PDO::PARAM_STR);
                        break;
                    case 'PodtRel':
                        $stmt->bindValue($identifier, $this->podtrel, PDO::PARAM_STR);
                        break;
                    case 'PodtSpecOrdr':
                        $stmt->bindValue($identifier, $this->podtspecordr, PDO::PARAM_STR);
                        break;
                    case 'PodtGlAcct':
                        $stmt->bindValue($identifier, $this->podtglacct, PDO::PARAM_STR);
                        break;
                    case 'PodtSoNbr':
                        $stmt->bindValue($identifier, $this->podtsonbr, PDO::PARAM_INT);
                        break;
                    case 'PodtStat':
                        $stmt->bindValue($identifier, $this->podtstat, PDO::PARAM_STR);
                        break;
                    case 'PodtOrigSoLine':
                        $stmt->bindValue($identifier, $this->podtorigsoline, PDO::PARAM_INT);
                        break;
                    case 'PodtQtyDueIn':
                        $stmt->bindValue($identifier, $this->podtqtyduein, PDO::PARAM_STR);
                        break;
                    case 'PodtType':
                        $stmt->bindValue($identifier, $this->podttype, PDO::PARAM_STR);
                        break;
                    case 'PodtWghtTot':
                        $stmt->bindValue($identifier, $this->podtwghttot, PDO::PARAM_STR);
                        break;
                    case 'PodtForeignCost':
                        $stmt->bindValue($identifier, $this->podtforeigncost, PDO::PARAM_STR);
                        break;
                    case 'PodtForeignCostTot':
                        $stmt->bindValue($identifier, $this->podtforeigncosttot, PDO::PARAM_STR);
                        break;
                    case 'PodtStanUnitCost':
                        $stmt->bindValue($identifier, $this->podtstanunitcost, PDO::PARAM_STR);
                        break;
                    case 'PodtAckDate':
                        $stmt->bindValue($identifier, $this->podtackdate, PDO::PARAM_STR);
                        break;
                    case 'PodtInvcClearFlag':
                        $stmt->bindValue($identifier, $this->podtinvcclearflag, PDO::PARAM_STR);
                        break;
                    case 'PodtPrtKitDet':
                        $stmt->bindValue($identifier, $this->podtprtkitdet, PDO::PARAM_STR);
                        break;
                    case 'PodtDestWhse':
                        $stmt->bindValue($identifier, $this->podtdestwhse, PDO::PARAM_STR);
                        break;
                    case 'PodtRevision':
                        $stmt->bindValue($identifier, $this->podtrevision, PDO::PARAM_STR);
                        break;
                    case 'PodtPrtPoEOrU':
                        $stmt->bindValue($identifier, $this->podtprtpoeoru, PDO::PARAM_STR);
                        break;
                    case 'PotbCnfmCode':
                        $stmt->bindValue($identifier, $this->potbcnfmcode, PDO::PARAM_STR);
                        break;
                    case 'PodtRcptNbr':
                        $stmt->bindValue($identifier, $this->podtrcptnbr, PDO::PARAM_INT);
                        break;
                    case 'PodtWipNbr':
                        $stmt->bindValue($identifier, $this->podtwipnbr, PDO::PARAM_INT);
                        break;
                    case 'PodtOrdrAs':
                        $stmt->bindValue($identifier, $this->podtordras, PDO::PARAM_STR);
                        break;
                    case 'PodtBolDate':
                        $stmt->bindValue($identifier, $this->podtboldate, PDO::PARAM_STR);
                        break;
                    case 'PodtListPric':
                        $stmt->bindValue($identifier, $this->podtlistpric, PDO::PARAM_STR);
                        break;
                    case 'PodtDeliveredDate':
                        $stmt->bindValue($identifier, $this->podtdelivereddate, PDO::PARAM_STR);
                        break;
                    case 'PodtLandCost':
                        $stmt->bindValue($identifier, $this->podtlandcost, PDO::PARAM_STR);
                        break;
                    case 'PodtCasesOrd':
                        $stmt->bindValue($identifier, $this->podtcasesord, PDO::PARAM_INT);
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
        $pos = PurchaseOrderDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPohdnbr();
                break;
            case 1:
                return $this->getPodtline();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getPodtdesc1();
                break;
            case 4:
                return $this->getPodtdesc2();
                break;
            case 5:
                return $this->getPodtvenditemnbr();
                break;
            case 6:
                return $this->getIntbwhse();
                break;
            case 7:
                return $this->getPodtshipdate();
                break;
            case 8:
                return $this->getPodtexptdate();
                break;
            case 9:
                return $this->getPodtcancdate();
                break;
            case 10:
                return $this->getIntbuompur();
                break;
            case 11:
                return $this->getPodtqtyord();
                break;
            case 12:
                return $this->getPodtcost();
                break;
            case 13:
                return $this->getPodtcosttot();
                break;
            case 14:
                return $this->getPodtrel();
                break;
            case 15:
                return $this->getPodtspecordr();
                break;
            case 16:
                return $this->getPodtglacct();
                break;
            case 17:
                return $this->getPodtsonbr();
                break;
            case 18:
                return $this->getPodtstat();
                break;
            case 19:
                return $this->getPodtorigsoline();
                break;
            case 20:
                return $this->getPodtqtyduein();
                break;
            case 21:
                return $this->getPodttype();
                break;
            case 22:
                return $this->getPodtwghttot();
                break;
            case 23:
                return $this->getPodtforeigncost();
                break;
            case 24:
                return $this->getPodtforeigncosttot();
                break;
            case 25:
                return $this->getPodtstanunitcost();
                break;
            case 26:
                return $this->getPodtackdate();
                break;
            case 27:
                return $this->getPodtinvcclearflag();
                break;
            case 28:
                return $this->getPodtprtkitdet();
                break;
            case 29:
                return $this->getPodtdestwhse();
                break;
            case 30:
                return $this->getPodtrevision();
                break;
            case 31:
                return $this->getPodtprtpoeoru();
                break;
            case 32:
                return $this->getPotbcnfmcode();
                break;
            case 33:
                return $this->getPodtrcptnbr();
                break;
            case 34:
                return $this->getPodtwipnbr();
                break;
            case 35:
                return $this->getPodtordras();
                break;
            case 36:
                return $this->getPodtboldate();
                break;
            case 37:
                return $this->getPodtlistpric();
                break;
            case 38:
                return $this->getPodtdelivereddate();
                break;
            case 39:
                return $this->getPodtlandcost();
                break;
            case 40:
                return $this->getPodtcasesord();
                break;
            case 41:
                return $this->getDateupdtd();
                break;
            case 42:
                return $this->getTimeupdtd();
                break;
            case 43:
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

        if (isset($alreadyDumpedObjects['PurchaseOrderDetail'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PurchaseOrderDetail'][$this->hashCode()] = true;
        $keys = PurchaseOrderDetailTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPohdnbr(),
            $keys[1] => $this->getPodtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getPodtdesc1(),
            $keys[4] => $this->getPodtdesc2(),
            $keys[5] => $this->getPodtvenditemnbr(),
            $keys[6] => $this->getIntbwhse(),
            $keys[7] => $this->getPodtshipdate(),
            $keys[8] => $this->getPodtexptdate(),
            $keys[9] => $this->getPodtcancdate(),
            $keys[10] => $this->getIntbuompur(),
            $keys[11] => $this->getPodtqtyord(),
            $keys[12] => $this->getPodtcost(),
            $keys[13] => $this->getPodtcosttot(),
            $keys[14] => $this->getPodtrel(),
            $keys[15] => $this->getPodtspecordr(),
            $keys[16] => $this->getPodtglacct(),
            $keys[17] => $this->getPodtsonbr(),
            $keys[18] => $this->getPodtstat(),
            $keys[19] => $this->getPodtorigsoline(),
            $keys[20] => $this->getPodtqtyduein(),
            $keys[21] => $this->getPodttype(),
            $keys[22] => $this->getPodtwghttot(),
            $keys[23] => $this->getPodtforeigncost(),
            $keys[24] => $this->getPodtforeigncosttot(),
            $keys[25] => $this->getPodtstanunitcost(),
            $keys[26] => $this->getPodtackdate(),
            $keys[27] => $this->getPodtinvcclearflag(),
            $keys[28] => $this->getPodtprtkitdet(),
            $keys[29] => $this->getPodtdestwhse(),
            $keys[30] => $this->getPodtrevision(),
            $keys[31] => $this->getPodtprtpoeoru(),
            $keys[32] => $this->getPotbcnfmcode(),
            $keys[33] => $this->getPodtrcptnbr(),
            $keys[34] => $this->getPodtwipnbr(),
            $keys[35] => $this->getPodtordras(),
            $keys[36] => $this->getPodtboldate(),
            $keys[37] => $this->getPodtlistpric(),
            $keys[38] => $this->getPodtdelivereddate(),
            $keys[39] => $this->getPodtlandcost(),
            $keys[40] => $this->getPodtcasesord(),
            $keys[41] => $this->getDateupdtd(),
            $keys[42] => $this->getTimeupdtd(),
            $keys[43] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPurchaseOrder) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrder';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_head';
                        break;
                    default:
                        $key = 'PurchaseOrder';
                }

                $result[$key] = $this->aPurchaseOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->collPurchaseOrderDetailReceipts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetailReceipts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_receipt_dets';
                        break;
                    default:
                        $key = 'PurchaseOrderDetailReceipts';
                }

                $result[$key] = $this->collPurchaseOrderDetailReceipts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPurchaseOrderDetailReceivings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetailReceivings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_tran_dets';
                        break;
                    default:
                        $key = 'PurchaseOrderDetailReceivings';
                }

                $result[$key] = $this->collPurchaseOrderDetailReceivings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPurchaseOrderDetailLotReceivings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetailLotReceivings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_tran_lot_dets';
                        break;
                    default:
                        $key = 'PurchaseOrderDetailLotReceivings';
                }

                $result[$key] = $this->collPurchaseOrderDetailLotReceivings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\PurchaseOrderDetail
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = PurchaseOrderDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\PurchaseOrderDetail
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPohdnbr($value);
                break;
            case 1:
                $this->setPodtline($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setPodtdesc1($value);
                break;
            case 4:
                $this->setPodtdesc2($value);
                break;
            case 5:
                $this->setPodtvenditemnbr($value);
                break;
            case 6:
                $this->setIntbwhse($value);
                break;
            case 7:
                $this->setPodtshipdate($value);
                break;
            case 8:
                $this->setPodtexptdate($value);
                break;
            case 9:
                $this->setPodtcancdate($value);
                break;
            case 10:
                $this->setIntbuompur($value);
                break;
            case 11:
                $this->setPodtqtyord($value);
                break;
            case 12:
                $this->setPodtcost($value);
                break;
            case 13:
                $this->setPodtcosttot($value);
                break;
            case 14:
                $this->setPodtrel($value);
                break;
            case 15:
                $this->setPodtspecordr($value);
                break;
            case 16:
                $this->setPodtglacct($value);
                break;
            case 17:
                $this->setPodtsonbr($value);
                break;
            case 18:
                $this->setPodtstat($value);
                break;
            case 19:
                $this->setPodtorigsoline($value);
                break;
            case 20:
                $this->setPodtqtyduein($value);
                break;
            case 21:
                $this->setPodttype($value);
                break;
            case 22:
                $this->setPodtwghttot($value);
                break;
            case 23:
                $this->setPodtforeigncost($value);
                break;
            case 24:
                $this->setPodtforeigncosttot($value);
                break;
            case 25:
                $this->setPodtstanunitcost($value);
                break;
            case 26:
                $this->setPodtackdate($value);
                break;
            case 27:
                $this->setPodtinvcclearflag($value);
                break;
            case 28:
                $this->setPodtprtkitdet($value);
                break;
            case 29:
                $this->setPodtdestwhse($value);
                break;
            case 30:
                $this->setPodtrevision($value);
                break;
            case 31:
                $this->setPodtprtpoeoru($value);
                break;
            case 32:
                $this->setPotbcnfmcode($value);
                break;
            case 33:
                $this->setPodtrcptnbr($value);
                break;
            case 34:
                $this->setPodtwipnbr($value);
                break;
            case 35:
                $this->setPodtordras($value);
                break;
            case 36:
                $this->setPodtboldate($value);
                break;
            case 37:
                $this->setPodtlistpric($value);
                break;
            case 38:
                $this->setPodtdelivereddate($value);
                break;
            case 39:
                $this->setPodtlandcost($value);
                break;
            case 40:
                $this->setPodtcasesord($value);
                break;
            case 41:
                $this->setDateupdtd($value);
                break;
            case 42:
                $this->setTimeupdtd($value);
                break;
            case 43:
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
        $keys = PurchaseOrderDetailTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPohdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPodtline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setPodtdesc1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPodtdesc2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPodtvenditemnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIntbwhse($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPodtshipdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPodtexptdate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPodtcancdate($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIntbuompur($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPodtqtyord($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPodtcost($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPodtcosttot($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPodtrel($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPodtspecordr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPodtglacct($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPodtsonbr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPodtstat($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setPodtorigsoline($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setPodtqtyduein($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setPodttype($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setPodtwghttot($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setPodtforeigncost($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setPodtforeigncosttot($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setPodtstanunitcost($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setPodtackdate($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setPodtinvcclearflag($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setPodtprtkitdet($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setPodtdestwhse($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setPodtrevision($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setPodtprtpoeoru($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setPotbcnfmcode($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setPodtrcptnbr($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setPodtwipnbr($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setPodtordras($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setPodtboldate($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setPodtlistpric($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setPodtdelivereddate($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setPodtlandcost($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setPodtcasesord($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setDateupdtd($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setTimeupdtd($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setDummy($arr[$keys[43]]);
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
     * @return $this|\PurchaseOrderDetail The current object, for fluid interface
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
        $criteria = new Criteria(PurchaseOrderDetailTableMap::DATABASE_NAME);

        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_POHDNBR)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_POHDNBR, $this->pohdnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTLINE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTLINE, $this->podtline);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_INITITEMNBR)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTDESC1)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTDESC1, $this->podtdesc1);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTDESC2)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTDESC2, $this->podtdesc2);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR, $this->podtvenditemnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_INTBWHSE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSHIPDATE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTSHIPDATE, $this->podtshipdate);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTEXPTDATE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTEXPTDATE, $this->podtexptdate);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTCANCDATE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTCANCDATE, $this->podtcancdate);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_INTBUOMPUR)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_INTBUOMPUR, $this->intbuompur);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTQTYORD)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTQTYORD, $this->podtqtyord);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTCOST)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTCOST, $this->podtcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTCOSTTOT)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTCOSTTOT, $this->podtcosttot);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTREL)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTREL, $this->podtrel);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSPECORDR)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTSPECORDR, $this->podtspecordr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTGLACCT)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTGLACCT, $this->podtglacct);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSONBR)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTSONBR, $this->podtsonbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSTAT)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTSTAT, $this->podtstat);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE, $this->podtorigsoline);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN, $this->podtqtyduein);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTTYPE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTTYPE, $this->podttype);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTWGHTTOT)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTWGHTTOT, $this->podtwghttot);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST, $this->podtforeigncost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT, $this->podtforeigncosttot);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST, $this->podtstanunitcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTACKDATE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTACKDATE, $this->podtackdate);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG, $this->podtinvcclearflag);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTPRTKITDET)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTPRTKITDET, $this->podtprtkitdet);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTDESTWHSE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTDESTWHSE, $this->podtdestwhse);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTREVISION)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTREVISION, $this->podtrevision);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU, $this->podtprtpoeoru);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_POTBCNFMCODE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_POTBCNFMCODE, $this->potbcnfmcode);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTRCPTNBR)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTRCPTNBR, $this->podtrcptnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTWIPNBR)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTWIPNBR, $this->podtwipnbr);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTORDRAS)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTORDRAS, $this->podtordras);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTBOLDATE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTBOLDATE, $this->podtboldate);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTLISTPRIC)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTLISTPRIC, $this->podtlistpric);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE, $this->podtdelivereddate);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTLANDCOST)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTLANDCOST, $this->podtlandcost);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_PODTCASESORD)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_PODTCASESORD, $this->podtcasesord);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_DATEUPDTD)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_TIMEUPDTD)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderDetailTableMap::COL_DUMMY)) {
            $criteria->add(PurchaseOrderDetailTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildPurchaseOrderDetailQuery::create();
        $criteria->add(PurchaseOrderDetailTableMap::COL_POHDNBR, $this->pohdnbr);
        $criteria->add(PurchaseOrderDetailTableMap::COL_PODTLINE, $this->podtline);

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
        $validPk = null !== $this->getPohdnbr() &&
            null !== $this->getPodtline();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation purchaseorder to table po_head
        if ($this->aPurchaseOrder && $hash = spl_object_hash($this->aPurchaseOrder)) {
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
        $pks[0] = $this->getPohdnbr();
        $pks[1] = $this->getPodtline();

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
        $this->setPohdnbr($keys[0]);
        $this->setPodtline($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getPohdnbr()) && (null === $this->getPodtline());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \PurchaseOrderDetail (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPohdnbr($this->getPohdnbr());
        $copyObj->setPodtline($this->getPodtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setPodtdesc1($this->getPodtdesc1());
        $copyObj->setPodtdesc2($this->getPodtdesc2());
        $copyObj->setPodtvenditemnbr($this->getPodtvenditemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setPodtshipdate($this->getPodtshipdate());
        $copyObj->setPodtexptdate($this->getPodtexptdate());
        $copyObj->setPodtcancdate($this->getPodtcancdate());
        $copyObj->setIntbuompur($this->getIntbuompur());
        $copyObj->setPodtqtyord($this->getPodtqtyord());
        $copyObj->setPodtcost($this->getPodtcost());
        $copyObj->setPodtcosttot($this->getPodtcosttot());
        $copyObj->setPodtrel($this->getPodtrel());
        $copyObj->setPodtspecordr($this->getPodtspecordr());
        $copyObj->setPodtglacct($this->getPodtglacct());
        $copyObj->setPodtsonbr($this->getPodtsonbr());
        $copyObj->setPodtstat($this->getPodtstat());
        $copyObj->setPodtorigsoline($this->getPodtorigsoline());
        $copyObj->setPodtqtyduein($this->getPodtqtyduein());
        $copyObj->setPodttype($this->getPodttype());
        $copyObj->setPodtwghttot($this->getPodtwghttot());
        $copyObj->setPodtforeigncost($this->getPodtforeigncost());
        $copyObj->setPodtforeigncosttot($this->getPodtforeigncosttot());
        $copyObj->setPodtstanunitcost($this->getPodtstanunitcost());
        $copyObj->setPodtackdate($this->getPodtackdate());
        $copyObj->setPodtinvcclearflag($this->getPodtinvcclearflag());
        $copyObj->setPodtprtkitdet($this->getPodtprtkitdet());
        $copyObj->setPodtdestwhse($this->getPodtdestwhse());
        $copyObj->setPodtrevision($this->getPodtrevision());
        $copyObj->setPodtprtpoeoru($this->getPodtprtpoeoru());
        $copyObj->setPotbcnfmcode($this->getPotbcnfmcode());
        $copyObj->setPodtrcptnbr($this->getPodtrcptnbr());
        $copyObj->setPodtwipnbr($this->getPodtwipnbr());
        $copyObj->setPodtordras($this->getPodtordras());
        $copyObj->setPodtboldate($this->getPodtboldate());
        $copyObj->setPodtlistpric($this->getPodtlistpric());
        $copyObj->setPodtdelivereddate($this->getPodtdelivereddate());
        $copyObj->setPodtlandcost($this->getPodtlandcost());
        $copyObj->setPodtcasesord($this->getPodtcasesord());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getPurchaseOrderDetailReceipts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetailReceipt($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPurchaseOrderDetailReceivings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetailReceiving($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPurchaseOrderDetailLotReceivings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetailLotReceiving($relObj->copy($deepCopy));
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
     * @return \PurchaseOrderDetail Clone of current object.
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
     * Declares an association between this object and a ChildPurchaseOrder object.
     *
     * @param  ChildPurchaseOrder $v
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPurchaseOrder(ChildPurchaseOrder $v = null)
    {
        if ($v === null) {
            $this->setPohdnbr(0);
        } else {
            $this->setPohdnbr($v->getPohdnbr());
        }

        $this->aPurchaseOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildPurchaseOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetail($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildPurchaseOrder object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildPurchaseOrder The associated ChildPurchaseOrder object.
     * @throws PropelException
     */
    public function getPurchaseOrder(ConnectionInterface $con = null)
    {
        if ($this->aPurchaseOrder === null && ($this->pohdnbr != 0)) {
            $this->aPurchaseOrder = ChildPurchaseOrderQuery::create()->findPk($this->pohdnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPurchaseOrder->addPurchaseOrderDetails($this);
             */
        }

        return $this->aPurchaseOrder;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrderDetail($this);
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
                $this->aItemMasterItem->addPurchaseOrderDetails($this);
             */
        }

        return $this->aItemMasterItem;
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
        if ('PurchaseOrderDetailReceipt' == $relationName) {
            $this->initPurchaseOrderDetailReceipts();
            return;
        }
        if ('PurchaseOrderDetailReceiving' == $relationName) {
            $this->initPurchaseOrderDetailReceivings();
            return;
        }
        if ('PurchaseOrderDetailLotReceiving' == $relationName) {
            $this->initPurchaseOrderDetailLotReceivings();
            return;
        }
    }

    /**
     * Clears out the collPurchaseOrderDetailReceipts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetailReceipts()
     */
    public function clearPurchaseOrderDetailReceipts()
    {
        $this->collPurchaseOrderDetailReceipts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetailReceipts collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetailReceipts($v = true)
    {
        $this->collPurchaseOrderDetailReceiptsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetailReceipts collection.
     *
     * By default this just sets the collPurchaseOrderDetailReceipts collection to an empty array (like clearcollPurchaseOrderDetailReceipts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetailReceipts($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetailReceipts && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailReceiptTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetailReceipts = new $collectionClassName;
        $this->collPurchaseOrderDetailReceipts->setModel('\PurchaseOrderDetailReceipt');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetailReceipt objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildPurchaseOrderDetail is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetailReceipt[] List of ChildPurchaseOrderDetailReceipt objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetailReceipts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceiptsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceipts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceipts) {
                // return empty collection
                $this->initPurchaseOrderDetailReceipts();
            } else {
                $collPurchaseOrderDetailReceipts = ChildPurchaseOrderDetailReceiptQuery::create(null, $criteria)
                    ->filterByPurchaseOrderDetail($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailReceiptsPartial && count($collPurchaseOrderDetailReceipts)) {
                        $this->initPurchaseOrderDetailReceipts(false);

                        foreach ($collPurchaseOrderDetailReceipts as $obj) {
                            if (false == $this->collPurchaseOrderDetailReceipts->contains($obj)) {
                                $this->collPurchaseOrderDetailReceipts->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailReceiptsPartial = true;
                    }

                    return $collPurchaseOrderDetailReceipts;
                }

                if ($partial && $this->collPurchaseOrderDetailReceipts) {
                    foreach ($this->collPurchaseOrderDetailReceipts as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetailReceipts[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetailReceipts = $collPurchaseOrderDetailReceipts;
                $this->collPurchaseOrderDetailReceiptsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetailReceipts;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetailReceipt objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetailReceipts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildPurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPurchaseOrderDetailReceipts(Collection $purchaseOrderDetailReceipts, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetailReceipt[] $purchaseOrderDetailReceiptsToDelete */
        $purchaseOrderDetailReceiptsToDelete = $this->getPurchaseOrderDetailReceipts(new Criteria(), $con)->diff($purchaseOrderDetailReceipts);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->purchaseOrderDetailReceiptsScheduledForDeletion = clone $purchaseOrderDetailReceiptsToDelete;

        foreach ($purchaseOrderDetailReceiptsToDelete as $purchaseOrderDetailReceiptRemoved) {
            $purchaseOrderDetailReceiptRemoved->setPurchaseOrderDetail(null);
        }

        $this->collPurchaseOrderDetailReceipts = null;
        foreach ($purchaseOrderDetailReceipts as $purchaseOrderDetailReceipt) {
            $this->addPurchaseOrderDetailReceipt($purchaseOrderDetailReceipt);
        }

        $this->collPurchaseOrderDetailReceipts = $purchaseOrderDetailReceipts;
        $this->collPurchaseOrderDetailReceiptsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetailReceipt objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetailReceipt objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetailReceipts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceiptsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceipts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceipts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetailReceipts());
            }

            $query = ChildPurchaseOrderDetailReceiptQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPurchaseOrderDetail($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetailReceipts);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetailReceipt object to this object
     * through the ChildPurchaseOrderDetailReceipt foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetailReceipt $l ChildPurchaseOrderDetailReceipt
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function addPurchaseOrderDetailReceipt(ChildPurchaseOrderDetailReceipt $l)
    {
        if ($this->collPurchaseOrderDetailReceipts === null) {
            $this->initPurchaseOrderDetailReceipts();
            $this->collPurchaseOrderDetailReceiptsPartial = true;
        }

        if (!$this->collPurchaseOrderDetailReceipts->contains($l)) {
            $this->doAddPurchaseOrderDetailReceipt($l);

            if ($this->purchaseOrderDetailReceiptsScheduledForDeletion and $this->purchaseOrderDetailReceiptsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailReceiptsScheduledForDeletion->remove($this->purchaseOrderDetailReceiptsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt The ChildPurchaseOrderDetailReceipt object to add.
     */
    protected function doAddPurchaseOrderDetailReceipt(ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt)
    {
        $this->collPurchaseOrderDetailReceipts[]= $purchaseOrderDetailReceipt;
        $purchaseOrderDetailReceipt->setPurchaseOrderDetail($this);
    }

    /**
     * @param  ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt The ChildPurchaseOrderDetailReceipt object to remove.
     * @return $this|ChildPurchaseOrderDetail The current object (for fluent API support)
     */
    public function removePurchaseOrderDetailReceipt(ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt)
    {
        if ($this->getPurchaseOrderDetailReceipts()->contains($purchaseOrderDetailReceipt)) {
            $pos = $this->collPurchaseOrderDetailReceipts->search($purchaseOrderDetailReceipt);
            $this->collPurchaseOrderDetailReceipts->remove($pos);
            if (null === $this->purchaseOrderDetailReceiptsScheduledForDeletion) {
                $this->purchaseOrderDetailReceiptsScheduledForDeletion = clone $this->collPurchaseOrderDetailReceipts;
                $this->purchaseOrderDetailReceiptsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailReceiptsScheduledForDeletion[]= clone $purchaseOrderDetailReceipt;
            $purchaseOrderDetailReceipt->setPurchaseOrderDetail(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceipts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceipt[] List of ChildPurchaseOrderDetailReceipt objects
     */
    public function getPurchaseOrderDetailReceiptsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceiptQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetailReceipts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceipts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceipt[] List of ChildPurchaseOrderDetailReceipt objects
     */
    public function getPurchaseOrderDetailReceiptsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceiptQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getPurchaseOrderDetailReceipts($query, $con);
    }

    /**
     * Clears out the collPurchaseOrderDetailReceivings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetailReceivings()
     */
    public function clearPurchaseOrderDetailReceivings()
    {
        $this->collPurchaseOrderDetailReceivings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetailReceivings collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetailReceivings($v = true)
    {
        $this->collPurchaseOrderDetailReceivingsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetailReceivings collection.
     *
     * By default this just sets the collPurchaseOrderDetailReceivings collection to an empty array (like clearcollPurchaseOrderDetailReceivings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetailReceivings($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetailReceivings && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailReceivingTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetailReceivings = new $collectionClassName;
        $this->collPurchaseOrderDetailReceivings->setModel('\PurchaseOrderDetailReceiving');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetailReceiving objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildPurchaseOrderDetail is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetailReceivings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceivings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceivings) {
                // return empty collection
                $this->initPurchaseOrderDetailReceivings();
            } else {
                $collPurchaseOrderDetailReceivings = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria)
                    ->filterByPurchaseOrderDetail($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailReceivingsPartial && count($collPurchaseOrderDetailReceivings)) {
                        $this->initPurchaseOrderDetailReceivings(false);

                        foreach ($collPurchaseOrderDetailReceivings as $obj) {
                            if (false == $this->collPurchaseOrderDetailReceivings->contains($obj)) {
                                $this->collPurchaseOrderDetailReceivings->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailReceivingsPartial = true;
                    }

                    return $collPurchaseOrderDetailReceivings;
                }

                if ($partial && $this->collPurchaseOrderDetailReceivings) {
                    foreach ($this->collPurchaseOrderDetailReceivings as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetailReceivings[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetailReceivings = $collPurchaseOrderDetailReceivings;
                $this->collPurchaseOrderDetailReceivingsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetailReceivings;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetailReceiving objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetailReceivings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildPurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPurchaseOrderDetailReceivings(Collection $purchaseOrderDetailReceivings, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetailReceiving[] $purchaseOrderDetailReceivingsToDelete */
        $purchaseOrderDetailReceivingsToDelete = $this->getPurchaseOrderDetailReceivings(new Criteria(), $con)->diff($purchaseOrderDetailReceivings);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->purchaseOrderDetailReceivingsScheduledForDeletion = clone $purchaseOrderDetailReceivingsToDelete;

        foreach ($purchaseOrderDetailReceivingsToDelete as $purchaseOrderDetailReceivingRemoved) {
            $purchaseOrderDetailReceivingRemoved->setPurchaseOrderDetail(null);
        }

        $this->collPurchaseOrderDetailReceivings = null;
        foreach ($purchaseOrderDetailReceivings as $purchaseOrderDetailReceiving) {
            $this->addPurchaseOrderDetailReceiving($purchaseOrderDetailReceiving);
        }

        $this->collPurchaseOrderDetailReceivings = $purchaseOrderDetailReceivings;
        $this->collPurchaseOrderDetailReceivingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetailReceiving objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetailReceiving objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetailReceivings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceivings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceivings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetailReceivings());
            }

            $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPurchaseOrderDetail($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetailReceivings);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetailReceiving object to this object
     * through the ChildPurchaseOrderDetailReceiving foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetailReceiving $l ChildPurchaseOrderDetailReceiving
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function addPurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $l)
    {
        if ($this->collPurchaseOrderDetailReceivings === null) {
            $this->initPurchaseOrderDetailReceivings();
            $this->collPurchaseOrderDetailReceivingsPartial = true;
        }

        if (!$this->collPurchaseOrderDetailReceivings->contains($l)) {
            $this->doAddPurchaseOrderDetailReceiving($l);

            if ($this->purchaseOrderDetailReceivingsScheduledForDeletion and $this->purchaseOrderDetailReceivingsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailReceivingsScheduledForDeletion->remove($this->purchaseOrderDetailReceivingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving The ChildPurchaseOrderDetailReceiving object to add.
     */
    protected function doAddPurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving)
    {
        $this->collPurchaseOrderDetailReceivings[]= $purchaseOrderDetailReceiving;
        $purchaseOrderDetailReceiving->setPurchaseOrderDetail($this);
    }

    /**
     * @param  ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving The ChildPurchaseOrderDetailReceiving object to remove.
     * @return $this|ChildPurchaseOrderDetail The current object (for fluent API support)
     */
    public function removePurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving)
    {
        if ($this->getPurchaseOrderDetailReceivings()->contains($purchaseOrderDetailReceiving)) {
            $pos = $this->collPurchaseOrderDetailReceivings->search($purchaseOrderDetailReceiving);
            $this->collPurchaseOrderDetailReceivings->remove($pos);
            if (null === $this->purchaseOrderDetailReceivingsScheduledForDeletion) {
                $this->purchaseOrderDetailReceivingsScheduledForDeletion = clone $this->collPurchaseOrderDetailReceivings;
                $this->purchaseOrderDetailReceivingsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailReceivingsScheduledForDeletion[]= clone $purchaseOrderDetailReceiving;
            $purchaseOrderDetailReceiving->setPurchaseOrderDetail(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinPoReceivingHead(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('PoReceivingHead', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinUnitofMeasureSale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasureSale', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }

    /**
     * Clears out the collPurchaseOrderDetailLotReceivings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetailLotReceivings()
     */
    public function clearPurchaseOrderDetailLotReceivings()
    {
        $this->collPurchaseOrderDetailLotReceivings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetailLotReceivings collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetailLotReceivings($v = true)
    {
        $this->collPurchaseOrderDetailLotReceivingsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetailLotReceivings collection.
     *
     * By default this just sets the collPurchaseOrderDetailLotReceivings collection to an empty array (like clearcollPurchaseOrderDetailLotReceivings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetailLotReceivings($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetailLotReceivings && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailLotReceivingTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetailLotReceivings = new $collectionClassName;
        $this->collPurchaseOrderDetailLotReceivings->setModel('\PurchaseOrderDetailLotReceiving');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetailLotReceiving objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildPurchaseOrderDetail is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetailLotReceivings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailLotReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailLotReceivings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailLotReceivings) {
                // return empty collection
                $this->initPurchaseOrderDetailLotReceivings();
            } else {
                $collPurchaseOrderDetailLotReceivings = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria)
                    ->filterByPurchaseOrderDetail($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailLotReceivingsPartial && count($collPurchaseOrderDetailLotReceivings)) {
                        $this->initPurchaseOrderDetailLotReceivings(false);

                        foreach ($collPurchaseOrderDetailLotReceivings as $obj) {
                            if (false == $this->collPurchaseOrderDetailLotReceivings->contains($obj)) {
                                $this->collPurchaseOrderDetailLotReceivings->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailLotReceivingsPartial = true;
                    }

                    return $collPurchaseOrderDetailLotReceivings;
                }

                if ($partial && $this->collPurchaseOrderDetailLotReceivings) {
                    foreach ($this->collPurchaseOrderDetailLotReceivings as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetailLotReceivings[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetailLotReceivings = $collPurchaseOrderDetailLotReceivings;
                $this->collPurchaseOrderDetailLotReceivingsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetailLotReceivings;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetailLotReceiving objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetailLotReceivings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildPurchaseOrderDetail The current object (for fluent API support)
     */
    public function setPurchaseOrderDetailLotReceivings(Collection $purchaseOrderDetailLotReceivings, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetailLotReceiving[] $purchaseOrderDetailLotReceivingsToDelete */
        $purchaseOrderDetailLotReceivingsToDelete = $this->getPurchaseOrderDetailLotReceivings(new Criteria(), $con)->diff($purchaseOrderDetailLotReceivings);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = clone $purchaseOrderDetailLotReceivingsToDelete;

        foreach ($purchaseOrderDetailLotReceivingsToDelete as $purchaseOrderDetailLotReceivingRemoved) {
            $purchaseOrderDetailLotReceivingRemoved->setPurchaseOrderDetail(null);
        }

        $this->collPurchaseOrderDetailLotReceivings = null;
        foreach ($purchaseOrderDetailLotReceivings as $purchaseOrderDetailLotReceiving) {
            $this->addPurchaseOrderDetailLotReceiving($purchaseOrderDetailLotReceiving);
        }

        $this->collPurchaseOrderDetailLotReceivings = $purchaseOrderDetailLotReceivings;
        $this->collPurchaseOrderDetailLotReceivingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetailLotReceiving objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetailLotReceiving objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetailLotReceivings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailLotReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailLotReceivings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailLotReceivings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetailLotReceivings());
            }

            $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPurchaseOrderDetail($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetailLotReceivings);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetailLotReceiving object to this object
     * through the ChildPurchaseOrderDetailLotReceiving foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetailLotReceiving $l ChildPurchaseOrderDetailLotReceiving
     * @return $this|\PurchaseOrderDetail The current object (for fluent API support)
     */
    public function addPurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $l)
    {
        if ($this->collPurchaseOrderDetailLotReceivings === null) {
            $this->initPurchaseOrderDetailLotReceivings();
            $this->collPurchaseOrderDetailLotReceivingsPartial = true;
        }

        if (!$this->collPurchaseOrderDetailLotReceivings->contains($l)) {
            $this->doAddPurchaseOrderDetailLotReceiving($l);

            if ($this->purchaseOrderDetailLotReceivingsScheduledForDeletion and $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->remove($this->purchaseOrderDetailLotReceivingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving The ChildPurchaseOrderDetailLotReceiving object to add.
     */
    protected function doAddPurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving)
    {
        $this->collPurchaseOrderDetailLotReceivings[]= $purchaseOrderDetailLotReceiving;
        $purchaseOrderDetailLotReceiving->setPurchaseOrderDetail($this);
    }

    /**
     * @param  ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving The ChildPurchaseOrderDetailLotReceiving object to remove.
     * @return $this|ChildPurchaseOrderDetail The current object (for fluent API support)
     */
    public function removePurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving)
    {
        if ($this->getPurchaseOrderDetailLotReceivings()->contains($purchaseOrderDetailLotReceiving)) {
            $pos = $this->collPurchaseOrderDetailLotReceivings->search($purchaseOrderDetailLotReceiving);
            $this->collPurchaseOrderDetailLotReceivings->remove($pos);
            if (null === $this->purchaseOrderDetailLotReceivingsScheduledForDeletion) {
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = clone $this->collPurchaseOrderDetailLotReceivings;
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailLotReceivingsScheduledForDeletion[]= clone $purchaseOrderDetailLotReceiving;
            $purchaseOrderDetailLotReceiving->setPurchaseOrderDetail(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinPoReceivingHead(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('PoReceivingHead', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrderDetail is new, it will return
     * an empty collection; or if this PurchaseOrderDetail has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrderDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aPurchaseOrder) {
            $this->aPurchaseOrder->removePurchaseOrderDetail($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removePurchaseOrderDetail($this);
        }
        $this->pohdnbr = null;
        $this->podtline = null;
        $this->inititemnbr = null;
        $this->podtdesc1 = null;
        $this->podtdesc2 = null;
        $this->podtvenditemnbr = null;
        $this->intbwhse = null;
        $this->podtshipdate = null;
        $this->podtexptdate = null;
        $this->podtcancdate = null;
        $this->intbuompur = null;
        $this->podtqtyord = null;
        $this->podtcost = null;
        $this->podtcosttot = null;
        $this->podtrel = null;
        $this->podtspecordr = null;
        $this->podtglacct = null;
        $this->podtsonbr = null;
        $this->podtstat = null;
        $this->podtorigsoline = null;
        $this->podtqtyduein = null;
        $this->podttype = null;
        $this->podtwghttot = null;
        $this->podtforeigncost = null;
        $this->podtforeigncosttot = null;
        $this->podtstanunitcost = null;
        $this->podtackdate = null;
        $this->podtinvcclearflag = null;
        $this->podtprtkitdet = null;
        $this->podtdestwhse = null;
        $this->podtrevision = null;
        $this->podtprtpoeoru = null;
        $this->potbcnfmcode = null;
        $this->podtrcptnbr = null;
        $this->podtwipnbr = null;
        $this->podtordras = null;
        $this->podtboldate = null;
        $this->podtlistpric = null;
        $this->podtdelivereddate = null;
        $this->podtlandcost = null;
        $this->podtcasesord = null;
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
            if ($this->collPurchaseOrderDetailReceipts) {
                foreach ($this->collPurchaseOrderDetailReceipts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrderDetailReceivings) {
                foreach ($this->collPurchaseOrderDetailReceivings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrderDetailLotReceivings) {
                foreach ($this->collPurchaseOrderDetailLotReceivings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collPurchaseOrderDetailReceipts = null;
        $this->collPurchaseOrderDetailReceivings = null;
        $this->collPurchaseOrderDetailLotReceivings = null;
        $this->aPurchaseOrder = null;
        $this->aItemMasterItem = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PurchaseOrderDetailTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // return parent::preSave($con);
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
            // return parent::preInsert($con);
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
            // return parent::preUpdate($con);
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
            // return parent::preDelete($con);
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
