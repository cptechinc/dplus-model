<?php

namespace Base;

use \ApInvoice as ChildApInvoice;
use \ApInvoiceDetail as ChildApInvoiceDetail;
use \ApInvoiceDetailQuery as ChildApInvoiceDetailQuery;
use \ApInvoiceQuery as ChildApInvoiceQuery;
use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \Vendor as ChildVendor;
use \VendorQuery as ChildVendorQuery;
use \Exception;
use \PDO;
use Map\ApInvoiceDetailTableMap;
use Map\ApInvoiceTableMap;
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
 * Base class that represents a row from the 'ap_invoice_head' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ApInvoice implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ApInvoiceTableMap';


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
     * The value for the apvevendid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apvevendid;

    /**
     * The value for the apihpaytokey field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apihpaytokey;

    /**
     * The value for the apihptname field.
     *
     * @var        string
     */
    protected $apihptname;

    /**
     * The value for the apihptadr1 field.
     *
     * @var        string
     */
    protected $apihptadr1;

    /**
     * The value for the apihptadr2 field.
     *
     * @var        string
     */
    protected $apihptadr2;

    /**
     * The value for the apihptadr3 field.
     *
     * @var        string
     */
    protected $apihptadr3;

    /**
     * The value for the apihptctry field.
     *
     * @var        string
     */
    protected $apihptctry;

    /**
     * The value for the apihptcity field.
     *
     * @var        string
     */
    protected $apihptcity;

    /**
     * The value for the apihptstat field.
     *
     * @var        string
     */
    protected $apihptstat;

    /**
     * The value for the apihptzipcode field.
     *
     * @var        string
     */
    protected $apihptzipcode;

    /**
     * The value for the apihponbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apihponbr;

    /**
     * The value for the apihctrlnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apihctrlnbr;

    /**
     * The value for the apihinvnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apihinvnbr;

    /**
     * The value for the apihseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $apihseq;

    /**
     * The value for the apihstat field.
     *
     * @var        string
     */
    protected $apihstat;

    /**
     * The value for the apihinvdate field.
     *
     * @var        string
     */
    protected $apihinvdate;

    /**
     * The value for the apihdiscdate field.
     *
     * @var        string
     */
    protected $apihdiscdate;

    /**
     * The value for the apihduedate field.
     *
     * @var        string
     */
    protected $apihduedate;

    /**
     * The value for the apihtotamt field.
     *
     * @var        string
     */
    protected $apihtotamt;

    /**
     * The value for the apihdiscamt field.
     *
     * @var        string
     */
    protected $apihdiscamt;

    /**
     * The value for the apihppchknbr field.
     *
     * @var        int
     */
    protected $apihppchknbr;

    /**
     * The value for the apihglpd field.
     *
     * @var        int
     */
    protected $apihglpd;

    /**
     * The value for the apihchknbr field.
     *
     * @var        int
     */
    protected $apihchknbr;

    /**
     * The value for the apihchkdate field.
     *
     * @var        string
     */
    protected $apihchkdate;

    /**
     * The value for the apihchkamt field.
     *
     * @var        string
     */
    protected $apihchkamt;

    /**
     * The value for the apihchkglacct field.
     *
     * @var        string
     */
    protected $apihchkglacct;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the aptmtermcode field.
     *
     * @var        string
     */
    protected $aptmtermcode;

    /**
     * The value for the apihvenddisc field.
     *
     * @var        string
     */
    protected $apihvenddisc;

    /**
     * The value for the apihinvref field.
     *
     * @var        string
     */
    protected $apihinvref;

    /**
     * The value for the apihcenbeeformatid field.
     *
     * @var        string
     */
    protected $apihcenbeeformatid;

    /**
     * The value for the apihcenbeeponbr field.
     *
     * @var        string
     */
    protected $apihcenbeeponbr;

    /**
     * The value for the apihtakeexpired field.
     *
     * @var        string
     */
    protected $apihtakeexpired;

    /**
     * The value for the apihexchctry field.
     *
     * @var        string
     */
    protected $apihexchctry;

    /**
     * The value for the apihexchrate field.
     *
     * @var        string
     */
    protected $apihexchrate;

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
     * @var        ChildVendor
     */
    protected $aVendor;

    /**
     * @var        ChildPurchaseOrder
     */
    protected $aPurchaseOrder;

    /**
     * @var        ObjectCollection|ChildApInvoiceDetail[] Collection to store aggregation of ChildApInvoiceDetail objects.
     */
    protected $collApInvoiceDetails;
    protected $collApInvoiceDetailsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildApInvoiceDetail[]
     */
    protected $apInvoiceDetailsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->apvevendid = '';
        $this->apihpaytokey = '';
        $this->apihponbr = '';
        $this->apihctrlnbr = '';
        $this->apihinvnbr = '';
        $this->apihseq = 0;
    }

    /**
     * Initializes internal state of Base\ApInvoice object.
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
     * Compares this with another <code>ApInvoice</code> instance.  If
     * <code>obj</code> is an instance of <code>ApInvoice</code>, delegates to
     * <code>equals(ApInvoice)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ApInvoice The current object, for fluid interface
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
     * Get the [apvevendid] column value.
     *
     * @return string
     */
    public function getApvevendid()
    {
        return $this->apvevendid;
    }

    /**
     * Get the [apihpaytokey] column value.
     *
     * @return string
     */
    public function getApihpaytokey()
    {
        return $this->apihpaytokey;
    }

    /**
     * Get the [apihptname] column value.
     *
     * @return string
     */
    public function getApihptname()
    {
        return $this->apihptname;
    }

    /**
     * Get the [apihptadr1] column value.
     *
     * @return string
     */
    public function getApihptadr1()
    {
        return $this->apihptadr1;
    }

    /**
     * Get the [apihptadr2] column value.
     *
     * @return string
     */
    public function getApihptadr2()
    {
        return $this->apihptadr2;
    }

    /**
     * Get the [apihptadr3] column value.
     *
     * @return string
     */
    public function getApihptadr3()
    {
        return $this->apihptadr3;
    }

    /**
     * Get the [apihptctry] column value.
     *
     * @return string
     */
    public function getApihptctry()
    {
        return $this->apihptctry;
    }

    /**
     * Get the [apihptcity] column value.
     *
     * @return string
     */
    public function getApihptcity()
    {
        return $this->apihptcity;
    }

    /**
     * Get the [apihptstat] column value.
     *
     * @return string
     */
    public function getApihptstat()
    {
        return $this->apihptstat;
    }

    /**
     * Get the [apihptzipcode] column value.
     *
     * @return string
     */
    public function getApihptzipcode()
    {
        return $this->apihptzipcode;
    }

    /**
     * Get the [apihponbr] column value.
     *
     * @return string
     */
    public function getApihponbr()
    {
        return $this->apihponbr;
    }

    /**
     * Get the [apihctrlnbr] column value.
     *
     * @return string
     */
    public function getApihctrlnbr()
    {
        return $this->apihctrlnbr;
    }

    /**
     * Get the [apihinvnbr] column value.
     *
     * @return string
     */
    public function getApihinvnbr()
    {
        return $this->apihinvnbr;
    }

    /**
     * Get the [apihseq] column value.
     *
     * @return int
     */
    public function getApihseq()
    {
        return $this->apihseq;
    }

    /**
     * Get the [apihstat] column value.
     *
     * @return string
     */
    public function getApihstat()
    {
        return $this->apihstat;
    }

    /**
     * Get the [apihinvdate] column value.
     *
     * @return string
     */
    public function getApihinvdate()
    {
        return $this->apihinvdate;
    }

    /**
     * Get the [apihdiscdate] column value.
     *
     * @return string
     */
    public function getApihdiscdate()
    {
        return $this->apihdiscdate;
    }

    /**
     * Get the [apihduedate] column value.
     *
     * @return string
     */
    public function getApihduedate()
    {
        return $this->apihduedate;
    }

    /**
     * Get the [apihtotamt] column value.
     *
     * @return string
     */
    public function getApihtotamt()
    {
        return $this->apihtotamt;
    }

    /**
     * Get the [apihdiscamt] column value.
     *
     * @return string
     */
    public function getApihdiscamt()
    {
        return $this->apihdiscamt;
    }

    /**
     * Get the [apihppchknbr] column value.
     *
     * @return int
     */
    public function getApihppchknbr()
    {
        return $this->apihppchknbr;
    }

    /**
     * Get the [apihglpd] column value.
     *
     * @return int
     */
    public function getApihglpd()
    {
        return $this->apihglpd;
    }

    /**
     * Get the [apihchknbr] column value.
     *
     * @return int
     */
    public function getApihchknbr()
    {
        return $this->apihchknbr;
    }

    /**
     * Get the [apihchkdate] column value.
     *
     * @return string
     */
    public function getApihchkdate()
    {
        return $this->apihchkdate;
    }

    /**
     * Get the [apihchkamt] column value.
     *
     * @return string
     */
    public function getApihchkamt()
    {
        return $this->apihchkamt;
    }

    /**
     * Get the [apihchkglacct] column value.
     *
     * @return string
     */
    public function getApihchkglacct()
    {
        return $this->apihchkglacct;
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
     * Get the [aptmtermcode] column value.
     *
     * @return string
     */
    public function getAptmtermcode()
    {
        return $this->aptmtermcode;
    }

    /**
     * Get the [apihvenddisc] column value.
     *
     * @return string
     */
    public function getApihvenddisc()
    {
        return $this->apihvenddisc;
    }

    /**
     * Get the [apihinvref] column value.
     *
     * @return string
     */
    public function getApihinvref()
    {
        return $this->apihinvref;
    }

    /**
     * Get the [apihcenbeeformatid] column value.
     *
     * @return string
     */
    public function getApihcenbeeformatid()
    {
        return $this->apihcenbeeformatid;
    }

    /**
     * Get the [apihcenbeeponbr] column value.
     *
     * @return string
     */
    public function getApihcenbeeponbr()
    {
        return $this->apihcenbeeponbr;
    }

    /**
     * Get the [apihtakeexpired] column value.
     *
     * @return string
     */
    public function getApihtakeexpired()
    {
        return $this->apihtakeexpired;
    }

    /**
     * Get the [apihexchctry] column value.
     *
     * @return string
     */
    public function getApihexchctry()
    {
        return $this->apihexchctry;
    }

    /**
     * Get the [apihexchrate] column value.
     *
     * @return string
     */
    public function getApihexchrate()
    {
        return $this->apihexchrate;
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
     * Set the value of [apvevendid] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APVEVENDID] = true;
        }

        if ($this->aVendor !== null && $this->aVendor->getApvevendid() !== $v) {
            $this->aVendor = null;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [apihpaytokey] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihpaytokey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihpaytokey !== $v) {
            $this->apihpaytokey = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPAYTOKEY] = true;
        }

        return $this;
    } // setApihpaytokey()

    /**
     * Set the value of [apihptname] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihptname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihptname !== $v) {
            $this->apihptname = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPTNAME] = true;
        }

        return $this;
    } // setApihptname()

    /**
     * Set the value of [apihptadr1] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihptadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihptadr1 !== $v) {
            $this->apihptadr1 = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPTADR1] = true;
        }

        return $this;
    } // setApihptadr1()

    /**
     * Set the value of [apihptadr2] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihptadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihptadr2 !== $v) {
            $this->apihptadr2 = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPTADR2] = true;
        }

        return $this;
    } // setApihptadr2()

    /**
     * Set the value of [apihptadr3] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihptadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihptadr3 !== $v) {
            $this->apihptadr3 = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPTADR3] = true;
        }

        return $this;
    } // setApihptadr3()

    /**
     * Set the value of [apihptctry] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihptctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihptctry !== $v) {
            $this->apihptctry = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPTCTRY] = true;
        }

        return $this;
    } // setApihptctry()

    /**
     * Set the value of [apihptcity] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihptcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihptcity !== $v) {
            $this->apihptcity = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPTCITY] = true;
        }

        return $this;
    } // setApihptcity()

    /**
     * Set the value of [apihptstat] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihptstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihptstat !== $v) {
            $this->apihptstat = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPTSTAT] = true;
        }

        return $this;
    } // setApihptstat()

    /**
     * Set the value of [apihptzipcode] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihptzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihptzipcode !== $v) {
            $this->apihptzipcode = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPTZIPCODE] = true;
        }

        return $this;
    } // setApihptzipcode()

    /**
     * Set the value of [apihponbr] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihponbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihponbr !== $v) {
            $this->apihponbr = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPONBR] = true;
        }

        if ($this->aPurchaseOrder !== null && $this->aPurchaseOrder->getPohdnbr() !== $v) {
            $this->aPurchaseOrder = null;
        }

        return $this;
    } // setApihponbr()

    /**
     * Set the value of [apihctrlnbr] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihctrlnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihctrlnbr !== $v) {
            $this->apihctrlnbr = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHCTRLNBR] = true;
        }

        return $this;
    } // setApihctrlnbr()

    /**
     * Set the value of [apihinvnbr] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihinvnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihinvnbr !== $v) {
            $this->apihinvnbr = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHINVNBR] = true;
        }

        return $this;
    } // setApihinvnbr()

    /**
     * Set the value of [apihseq] column.
     *
     * @param int $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apihseq !== $v) {
            $this->apihseq = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHSEQ] = true;
        }

        return $this;
    } // setApihseq()

    /**
     * Set the value of [apihstat] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihstat !== $v) {
            $this->apihstat = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHSTAT] = true;
        }

        return $this;
    } // setApihstat()

    /**
     * Set the value of [apihinvdate] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihinvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihinvdate !== $v) {
            $this->apihinvdate = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHINVDATE] = true;
        }

        return $this;
    } // setApihinvdate()

    /**
     * Set the value of [apihdiscdate] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihdiscdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihdiscdate !== $v) {
            $this->apihdiscdate = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHDISCDATE] = true;
        }

        return $this;
    } // setApihdiscdate()

    /**
     * Set the value of [apihduedate] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihduedate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihduedate !== $v) {
            $this->apihduedate = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHDUEDATE] = true;
        }

        return $this;
    } // setApihduedate()

    /**
     * Set the value of [apihtotamt] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihtotamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihtotamt !== $v) {
            $this->apihtotamt = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHTOTAMT] = true;
        }

        return $this;
    } // setApihtotamt()

    /**
     * Set the value of [apihdiscamt] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihdiscamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihdiscamt !== $v) {
            $this->apihdiscamt = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHDISCAMT] = true;
        }

        return $this;
    } // setApihdiscamt()

    /**
     * Set the value of [apihppchknbr] column.
     *
     * @param int $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihppchknbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apihppchknbr !== $v) {
            $this->apihppchknbr = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHPPCHKNBR] = true;
        }

        return $this;
    } // setApihppchknbr()

    /**
     * Set the value of [apihglpd] column.
     *
     * @param int $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihglpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apihglpd !== $v) {
            $this->apihglpd = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHGLPD] = true;
        }

        return $this;
    } // setApihglpd()

    /**
     * Set the value of [apihchknbr] column.
     *
     * @param int $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihchknbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apihchknbr !== $v) {
            $this->apihchknbr = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHCHKNBR] = true;
        }

        return $this;
    } // setApihchknbr()

    /**
     * Set the value of [apihchkdate] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihchkdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihchkdate !== $v) {
            $this->apihchkdate = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHCHKDATE] = true;
        }

        return $this;
    } // setApihchkdate()

    /**
     * Set the value of [apihchkamt] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihchkamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihchkamt !== $v) {
            $this->apihchkamt = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHCHKAMT] = true;
        }

        return $this;
    } // setApihchkamt()

    /**
     * Set the value of [apihchkglacct] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihchkglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihchkglacct !== $v) {
            $this->apihchkglacct = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHCHKGLACCT] = true;
        }

        return $this;
    } // setApihchkglacct()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [aptmtermcode] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setAptmtermcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmtermcode !== $v) {
            $this->aptmtermcode = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APTMTERMCODE] = true;
        }

        return $this;
    } // setAptmtermcode()

    /**
     * Set the value of [apihvenddisc] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihvenddisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihvenddisc !== $v) {
            $this->apihvenddisc = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHVENDDISC] = true;
        }

        return $this;
    } // setApihvenddisc()

    /**
     * Set the value of [apihinvref] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihinvref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihinvref !== $v) {
            $this->apihinvref = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHINVREF] = true;
        }

        return $this;
    } // setApihinvref()

    /**
     * Set the value of [apihcenbeeformatid] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihcenbeeformatid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihcenbeeformatid !== $v) {
            $this->apihcenbeeformatid = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHCENBEEFORMATID] = true;
        }

        return $this;
    } // setApihcenbeeformatid()

    /**
     * Set the value of [apihcenbeeponbr] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihcenbeeponbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihcenbeeponbr !== $v) {
            $this->apihcenbeeponbr = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHCENBEEPONBR] = true;
        }

        return $this;
    } // setApihcenbeeponbr()

    /**
     * Set the value of [apihtakeexpired] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihtakeexpired($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihtakeexpired !== $v) {
            $this->apihtakeexpired = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHTAKEEXPIRED] = true;
        }

        return $this;
    } // setApihtakeexpired()

    /**
     * Set the value of [apihexchctry] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihexchctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihexchctry !== $v) {
            $this->apihexchctry = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHEXCHCTRY] = true;
        }

        return $this;
    } // setApihexchctry()

    /**
     * Set the value of [apihexchrate] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setApihexchrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apihexchrate !== $v) {
            $this->apihexchrate = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_APIHEXCHRATE] = true;
        }

        return $this;
    } // setApihexchrate()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ApInvoiceTableMap::COL_DUMMY] = true;
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
            if ($this->apvevendid !== '') {
                return false;
            }

            if ($this->apihpaytokey !== '') {
                return false;
            }

            if ($this->apihponbr !== '') {
                return false;
            }

            if ($this->apihctrlnbr !== '') {
                return false;
            }

            if ($this->apihinvnbr !== '') {
                return false;
            }

            if ($this->apihseq !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ApInvoiceTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ApInvoiceTableMap::translateFieldName('Apihpaytokey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihpaytokey = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ApInvoiceTableMap::translateFieldName('Apihptname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihptname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ApInvoiceTableMap::translateFieldName('Apihptadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihptadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ApInvoiceTableMap::translateFieldName('Apihptadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihptadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ApInvoiceTableMap::translateFieldName('Apihptadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihptadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ApInvoiceTableMap::translateFieldName('Apihptctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihptctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ApInvoiceTableMap::translateFieldName('Apihptcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihptcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ApInvoiceTableMap::translateFieldName('Apihptstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihptstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ApInvoiceTableMap::translateFieldName('Apihptzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihptzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ApInvoiceTableMap::translateFieldName('Apihponbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihponbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ApInvoiceTableMap::translateFieldName('Apihctrlnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihctrlnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ApInvoiceTableMap::translateFieldName('Apihinvnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihinvnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ApInvoiceTableMap::translateFieldName('Apihseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ApInvoiceTableMap::translateFieldName('Apihstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ApInvoiceTableMap::translateFieldName('Apihinvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihinvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ApInvoiceTableMap::translateFieldName('Apihdiscdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihdiscdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ApInvoiceTableMap::translateFieldName('Apihduedate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihduedate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ApInvoiceTableMap::translateFieldName('Apihtotamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihtotamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ApInvoiceTableMap::translateFieldName('Apihdiscamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihdiscamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ApInvoiceTableMap::translateFieldName('Apihppchknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihppchknbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ApInvoiceTableMap::translateFieldName('Apihglpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihglpd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ApInvoiceTableMap::translateFieldName('Apihchknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihchknbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ApInvoiceTableMap::translateFieldName('Apihchkdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihchkdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ApInvoiceTableMap::translateFieldName('Apihchkamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihchkamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ApInvoiceTableMap::translateFieldName('Apihchkglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihchkglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ApInvoiceTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ApInvoiceTableMap::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmtermcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ApInvoiceTableMap::translateFieldName('Apihvenddisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihvenddisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ApInvoiceTableMap::translateFieldName('Apihinvref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihinvref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ApInvoiceTableMap::translateFieldName('Apihcenbeeformatid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihcenbeeformatid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ApInvoiceTableMap::translateFieldName('Apihcenbeeponbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihcenbeeponbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ApInvoiceTableMap::translateFieldName('Apihtakeexpired', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihtakeexpired = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ApInvoiceTableMap::translateFieldName('Apihexchctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihexchctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ApInvoiceTableMap::translateFieldName('Apihexchrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apihexchrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ApInvoiceTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ApInvoiceTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ApInvoiceTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 38; // 38 = ApInvoiceTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ApInvoice'), 0, $e);
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
        if ($this->aVendor !== null && $this->apvevendid !== $this->aVendor->getApvevendid()) {
            $this->aVendor = null;
        }
        if ($this->aPurchaseOrder !== null && $this->apihponbr !== $this->aPurchaseOrder->getPohdnbr()) {
            $this->aPurchaseOrder = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(ApInvoiceTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildApInvoiceQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aVendor = null;
            $this->aPurchaseOrder = null;
            $this->collApInvoiceDetails = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ApInvoice::setDeleted()
     * @see ApInvoice::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildApInvoiceQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceTableMap::DATABASE_NAME);
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
                ApInvoiceTableMap::addInstanceToPool($this);
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

            if ($this->aVendor !== null) {
                if ($this->aVendor->isModified() || $this->aVendor->isNew()) {
                    $affectedRows += $this->aVendor->save($con);
                }
                $this->setVendor($this->aVendor);
            }

            if ($this->aPurchaseOrder !== null) {
                if ($this->aPurchaseOrder->isModified() || $this->aPurchaseOrder->isNew()) {
                    $affectedRows += $this->aPurchaseOrder->save($con);
                }
                $this->setPurchaseOrder($this->aPurchaseOrder);
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

            if ($this->apInvoiceDetailsScheduledForDeletion !== null) {
                if (!$this->apInvoiceDetailsScheduledForDeletion->isEmpty()) {
                    \ApInvoiceDetailQuery::create()
                        ->filterByPrimaryKeys($this->apInvoiceDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->apInvoiceDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collApInvoiceDetails !== null) {
                foreach ($this->collApInvoiceDetails as $referrerFK) {
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
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPAYTOKEY)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPayToKey';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPtName';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPtAdr1';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPtAdr2';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPtAdr3';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPtCtry';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPtCity';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPtStat';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPtZipCode';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPONBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPoNbr';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCTRLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApihCtrlNbr';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHINVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApihInvNbr';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ApihSeq';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ApihStat';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHINVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ApihInvDate';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHDISCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ApihDiscDate';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHDUEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ApihDueDate';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHTOTAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ApihTotAmt';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHDISCAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ApihDiscAmt';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPPCHKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApihPpChkNbr';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHGLPD)) {
            $modifiedColumns[':p' . $index++]  = 'ApihGlPd';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCHKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApihChkNbr';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCHKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ApihChkDate';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCHKAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ApihChkAmt';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCHKGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ApihChkGlAcct';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APTMTERMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptmTermCode';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHVENDDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ApihVendDisc';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHINVREF)) {
            $modifiedColumns[':p' . $index++]  = 'ApihInvRef';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCENBEEFORMATID)) {
            $modifiedColumns[':p' . $index++]  = 'ApihCenbeeFormatId';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCENBEEPONBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApihCenbeePoNbr';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHTAKEEXPIRED)) {
            $modifiedColumns[':p' . $index++]  = 'ApihTakeExpired';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHEXCHCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ApihExchCtry';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHEXCHRATE)) {
            $modifiedColumns[':p' . $index++]  = 'ApihExchRate';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ap_invoice_head (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ApveVendId':
                        $stmt->bindValue($identifier, $this->apvevendid, PDO::PARAM_STR);
                        break;
                    case 'ApihPayToKey':
                        $stmt->bindValue($identifier, $this->apihpaytokey, PDO::PARAM_STR);
                        break;
                    case 'ApihPtName':
                        $stmt->bindValue($identifier, $this->apihptname, PDO::PARAM_STR);
                        break;
                    case 'ApihPtAdr1':
                        $stmt->bindValue($identifier, $this->apihptadr1, PDO::PARAM_STR);
                        break;
                    case 'ApihPtAdr2':
                        $stmt->bindValue($identifier, $this->apihptadr2, PDO::PARAM_STR);
                        break;
                    case 'ApihPtAdr3':
                        $stmt->bindValue($identifier, $this->apihptadr3, PDO::PARAM_STR);
                        break;
                    case 'ApihPtCtry':
                        $stmt->bindValue($identifier, $this->apihptctry, PDO::PARAM_STR);
                        break;
                    case 'ApihPtCity':
                        $stmt->bindValue($identifier, $this->apihptcity, PDO::PARAM_STR);
                        break;
                    case 'ApihPtStat':
                        $stmt->bindValue($identifier, $this->apihptstat, PDO::PARAM_STR);
                        break;
                    case 'ApihPtZipCode':
                        $stmt->bindValue($identifier, $this->apihptzipcode, PDO::PARAM_STR);
                        break;
                    case 'ApihPoNbr':
                        $stmt->bindValue($identifier, $this->apihponbr, PDO::PARAM_STR);
                        break;
                    case 'ApihCtrlNbr':
                        $stmt->bindValue($identifier, $this->apihctrlnbr, PDO::PARAM_STR);
                        break;
                    case 'ApihInvNbr':
                        $stmt->bindValue($identifier, $this->apihinvnbr, PDO::PARAM_STR);
                        break;
                    case 'ApihSeq':
                        $stmt->bindValue($identifier, $this->apihseq, PDO::PARAM_INT);
                        break;
                    case 'ApihStat':
                        $stmt->bindValue($identifier, $this->apihstat, PDO::PARAM_STR);
                        break;
                    case 'ApihInvDate':
                        $stmt->bindValue($identifier, $this->apihinvdate, PDO::PARAM_STR);
                        break;
                    case 'ApihDiscDate':
                        $stmt->bindValue($identifier, $this->apihdiscdate, PDO::PARAM_STR);
                        break;
                    case 'ApihDueDate':
                        $stmt->bindValue($identifier, $this->apihduedate, PDO::PARAM_STR);
                        break;
                    case 'ApihTotAmt':
                        $stmt->bindValue($identifier, $this->apihtotamt, PDO::PARAM_STR);
                        break;
                    case 'ApihDiscAmt':
                        $stmt->bindValue($identifier, $this->apihdiscamt, PDO::PARAM_STR);
                        break;
                    case 'ApihPpChkNbr':
                        $stmt->bindValue($identifier, $this->apihppchknbr, PDO::PARAM_INT);
                        break;
                    case 'ApihGlPd':
                        $stmt->bindValue($identifier, $this->apihglpd, PDO::PARAM_INT);
                        break;
                    case 'ApihChkNbr':
                        $stmt->bindValue($identifier, $this->apihchknbr, PDO::PARAM_INT);
                        break;
                    case 'ApihChkDate':
                        $stmt->bindValue($identifier, $this->apihchkdate, PDO::PARAM_STR);
                        break;
                    case 'ApihChkAmt':
                        $stmt->bindValue($identifier, $this->apihchkamt, PDO::PARAM_STR);
                        break;
                    case 'ApihChkGlAcct':
                        $stmt->bindValue($identifier, $this->apihchkglacct, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'AptmTermCode':
                        $stmt->bindValue($identifier, $this->aptmtermcode, PDO::PARAM_STR);
                        break;
                    case 'ApihVendDisc':
                        $stmt->bindValue($identifier, $this->apihvenddisc, PDO::PARAM_STR);
                        break;
                    case 'ApihInvRef':
                        $stmt->bindValue($identifier, $this->apihinvref, PDO::PARAM_STR);
                        break;
                    case 'ApihCenbeeFormatId':
                        $stmt->bindValue($identifier, $this->apihcenbeeformatid, PDO::PARAM_STR);
                        break;
                    case 'ApihCenbeePoNbr':
                        $stmt->bindValue($identifier, $this->apihcenbeeponbr, PDO::PARAM_STR);
                        break;
                    case 'ApihTakeExpired':
                        $stmt->bindValue($identifier, $this->apihtakeexpired, PDO::PARAM_STR);
                        break;
                    case 'ApihExchCtry':
                        $stmt->bindValue($identifier, $this->apihexchctry, PDO::PARAM_STR);
                        break;
                    case 'ApihExchRate':
                        $stmt->bindValue($identifier, $this->apihexchrate, PDO::PARAM_STR);
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
        $pos = ApInvoiceTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getApvevendid();
                break;
            case 1:
                return $this->getApihpaytokey();
                break;
            case 2:
                return $this->getApihptname();
                break;
            case 3:
                return $this->getApihptadr1();
                break;
            case 4:
                return $this->getApihptadr2();
                break;
            case 5:
                return $this->getApihptadr3();
                break;
            case 6:
                return $this->getApihptctry();
                break;
            case 7:
                return $this->getApihptcity();
                break;
            case 8:
                return $this->getApihptstat();
                break;
            case 9:
                return $this->getApihptzipcode();
                break;
            case 10:
                return $this->getApihponbr();
                break;
            case 11:
                return $this->getApihctrlnbr();
                break;
            case 12:
                return $this->getApihinvnbr();
                break;
            case 13:
                return $this->getApihseq();
                break;
            case 14:
                return $this->getApihstat();
                break;
            case 15:
                return $this->getApihinvdate();
                break;
            case 16:
                return $this->getApihdiscdate();
                break;
            case 17:
                return $this->getApihduedate();
                break;
            case 18:
                return $this->getApihtotamt();
                break;
            case 19:
                return $this->getApihdiscamt();
                break;
            case 20:
                return $this->getApihppchknbr();
                break;
            case 21:
                return $this->getApihglpd();
                break;
            case 22:
                return $this->getApihchknbr();
                break;
            case 23:
                return $this->getApihchkdate();
                break;
            case 24:
                return $this->getApihchkamt();
                break;
            case 25:
                return $this->getApihchkglacct();
                break;
            case 26:
                return $this->getIntbwhse();
                break;
            case 27:
                return $this->getAptmtermcode();
                break;
            case 28:
                return $this->getApihvenddisc();
                break;
            case 29:
                return $this->getApihinvref();
                break;
            case 30:
                return $this->getApihcenbeeformatid();
                break;
            case 31:
                return $this->getApihcenbeeponbr();
                break;
            case 32:
                return $this->getApihtakeexpired();
                break;
            case 33:
                return $this->getApihexchctry();
                break;
            case 34:
                return $this->getApihexchrate();
                break;
            case 35:
                return $this->getDateupdtd();
                break;
            case 36:
                return $this->getTimeupdtd();
                break;
            case 37:
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

        if (isset($alreadyDumpedObjects['ApInvoice'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ApInvoice'][$this->hashCode()] = true;
        $keys = ApInvoiceTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getApvevendid(),
            $keys[1] => $this->getApihpaytokey(),
            $keys[2] => $this->getApihptname(),
            $keys[3] => $this->getApihptadr1(),
            $keys[4] => $this->getApihptadr2(),
            $keys[5] => $this->getApihptadr3(),
            $keys[6] => $this->getApihptctry(),
            $keys[7] => $this->getApihptcity(),
            $keys[8] => $this->getApihptstat(),
            $keys[9] => $this->getApihptzipcode(),
            $keys[10] => $this->getApihponbr(),
            $keys[11] => $this->getApihctrlnbr(),
            $keys[12] => $this->getApihinvnbr(),
            $keys[13] => $this->getApihseq(),
            $keys[14] => $this->getApihstat(),
            $keys[15] => $this->getApihinvdate(),
            $keys[16] => $this->getApihdiscdate(),
            $keys[17] => $this->getApihduedate(),
            $keys[18] => $this->getApihtotamt(),
            $keys[19] => $this->getApihdiscamt(),
            $keys[20] => $this->getApihppchknbr(),
            $keys[21] => $this->getApihglpd(),
            $keys[22] => $this->getApihchknbr(),
            $keys[23] => $this->getApihchkdate(),
            $keys[24] => $this->getApihchkamt(),
            $keys[25] => $this->getApihchkglacct(),
            $keys[26] => $this->getIntbwhse(),
            $keys[27] => $this->getAptmtermcode(),
            $keys[28] => $this->getApihvenddisc(),
            $keys[29] => $this->getApihinvref(),
            $keys[30] => $this->getApihcenbeeformatid(),
            $keys[31] => $this->getApihcenbeeponbr(),
            $keys[32] => $this->getApihtakeexpired(),
            $keys[33] => $this->getApihexchctry(),
            $keys[34] => $this->getApihexchrate(),
            $keys[35] => $this->getDateupdtd(),
            $keys[36] => $this->getTimeupdtd(),
            $keys[37] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aVendor) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'vendor';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_vend_mast';
                        break;
                    default:
                        $key = 'Vendor';
                }

                $result[$key] = $this->aVendor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
            if (null !== $this->collApInvoiceDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'apInvoiceDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_invoice_dets';
                        break;
                    default:
                        $key = 'ApInvoiceDetails';
                }

                $result[$key] = $this->collApInvoiceDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\ApInvoice
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ApInvoiceTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ApInvoice
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setApvevendid($value);
                break;
            case 1:
                $this->setApihpaytokey($value);
                break;
            case 2:
                $this->setApihptname($value);
                break;
            case 3:
                $this->setApihptadr1($value);
                break;
            case 4:
                $this->setApihptadr2($value);
                break;
            case 5:
                $this->setApihptadr3($value);
                break;
            case 6:
                $this->setApihptctry($value);
                break;
            case 7:
                $this->setApihptcity($value);
                break;
            case 8:
                $this->setApihptstat($value);
                break;
            case 9:
                $this->setApihptzipcode($value);
                break;
            case 10:
                $this->setApihponbr($value);
                break;
            case 11:
                $this->setApihctrlnbr($value);
                break;
            case 12:
                $this->setApihinvnbr($value);
                break;
            case 13:
                $this->setApihseq($value);
                break;
            case 14:
                $this->setApihstat($value);
                break;
            case 15:
                $this->setApihinvdate($value);
                break;
            case 16:
                $this->setApihdiscdate($value);
                break;
            case 17:
                $this->setApihduedate($value);
                break;
            case 18:
                $this->setApihtotamt($value);
                break;
            case 19:
                $this->setApihdiscamt($value);
                break;
            case 20:
                $this->setApihppchknbr($value);
                break;
            case 21:
                $this->setApihglpd($value);
                break;
            case 22:
                $this->setApihchknbr($value);
                break;
            case 23:
                $this->setApihchkdate($value);
                break;
            case 24:
                $this->setApihchkamt($value);
                break;
            case 25:
                $this->setApihchkglacct($value);
                break;
            case 26:
                $this->setIntbwhse($value);
                break;
            case 27:
                $this->setAptmtermcode($value);
                break;
            case 28:
                $this->setApihvenddisc($value);
                break;
            case 29:
                $this->setApihinvref($value);
                break;
            case 30:
                $this->setApihcenbeeformatid($value);
                break;
            case 31:
                $this->setApihcenbeeponbr($value);
                break;
            case 32:
                $this->setApihtakeexpired($value);
                break;
            case 33:
                $this->setApihexchctry($value);
                break;
            case 34:
                $this->setApihexchrate($value);
                break;
            case 35:
                $this->setDateupdtd($value);
                break;
            case 36:
                $this->setTimeupdtd($value);
                break;
            case 37:
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
        $keys = ApInvoiceTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setApvevendid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setApihpaytokey($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setApihptname($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setApihptadr1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setApihptadr2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setApihptadr3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setApihptctry($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setApihptcity($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setApihptstat($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setApihptzipcode($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setApihponbr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setApihctrlnbr($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setApihinvnbr($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setApihseq($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setApihstat($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setApihinvdate($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setApihdiscdate($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setApihduedate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setApihtotamt($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setApihdiscamt($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setApihppchknbr($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setApihglpd($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setApihchknbr($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setApihchkdate($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setApihchkamt($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setApihchkglacct($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setIntbwhse($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setAptmtermcode($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setApihvenddisc($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setApihinvref($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setApihcenbeeformatid($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setApihcenbeeponbr($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setApihtakeexpired($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setApihexchctry($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setApihexchrate($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setDateupdtd($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setTimeupdtd($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setDummy($arr[$keys[37]]);
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
     * @return $this|\ApInvoice The current object, for fluid interface
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
        $criteria = new Criteria(ApInvoiceTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ApInvoiceTableMap::COL_APVEVENDID)) {
            $criteria->add(ApInvoiceTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPAYTOKEY)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPAYTOKEY, $this->apihpaytokey);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTNAME)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPTNAME, $this->apihptname);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTADR1)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPTADR1, $this->apihptadr1);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTADR2)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPTADR2, $this->apihptadr2);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTADR3)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPTADR3, $this->apihptadr3);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTCTRY)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPTCTRY, $this->apihptctry);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTCITY)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPTCITY, $this->apihptcity);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTSTAT)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPTSTAT, $this->apihptstat);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPTZIPCODE)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPTZIPCODE, $this->apihptzipcode);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPONBR)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPONBR, $this->apihponbr);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCTRLNBR)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHCTRLNBR, $this->apihctrlnbr);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHINVNBR)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHINVNBR, $this->apihinvnbr);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHSEQ)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHSEQ, $this->apihseq);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHSTAT)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHSTAT, $this->apihstat);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHINVDATE)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHINVDATE, $this->apihinvdate);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHDISCDATE)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHDISCDATE, $this->apihdiscdate);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHDUEDATE)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHDUEDATE, $this->apihduedate);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHTOTAMT)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHTOTAMT, $this->apihtotamt);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHDISCAMT)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHDISCAMT, $this->apihdiscamt);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHPPCHKNBR)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHPPCHKNBR, $this->apihppchknbr);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHGLPD)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHGLPD, $this->apihglpd);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCHKNBR)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHCHKNBR, $this->apihchknbr);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCHKDATE)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHCHKDATE, $this->apihchkdate);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCHKAMT)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHCHKAMT, $this->apihchkamt);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCHKGLACCT)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHCHKGLACCT, $this->apihchkglacct);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_INTBWHSE)) {
            $criteria->add(ApInvoiceTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APTMTERMCODE)) {
            $criteria->add(ApInvoiceTableMap::COL_APTMTERMCODE, $this->aptmtermcode);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHVENDDISC)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHVENDDISC, $this->apihvenddisc);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHINVREF)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHINVREF, $this->apihinvref);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCENBEEFORMATID)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHCENBEEFORMATID, $this->apihcenbeeformatid);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHCENBEEPONBR)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHCENBEEPONBR, $this->apihcenbeeponbr);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHTAKEEXPIRED)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHTAKEEXPIRED, $this->apihtakeexpired);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHEXCHCTRY)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHEXCHCTRY, $this->apihexchctry);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_APIHEXCHRATE)) {
            $criteria->add(ApInvoiceTableMap::COL_APIHEXCHRATE, $this->apihexchrate);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_DATEUPDTD)) {
            $criteria->add(ApInvoiceTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ApInvoiceTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ApInvoiceTableMap::COL_DUMMY)) {
            $criteria->add(ApInvoiceTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildApInvoiceQuery::create();
        $criteria->add(ApInvoiceTableMap::COL_APVEVENDID, $this->apvevendid);
        $criteria->add(ApInvoiceTableMap::COL_APIHPAYTOKEY, $this->apihpaytokey);
        $criteria->add(ApInvoiceTableMap::COL_APIHPONBR, $this->apihponbr);
        $criteria->add(ApInvoiceTableMap::COL_APIHCTRLNBR, $this->apihctrlnbr);
        $criteria->add(ApInvoiceTableMap::COL_APIHINVNBR, $this->apihinvnbr);
        $criteria->add(ApInvoiceTableMap::COL_APIHSEQ, $this->apihseq);

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
        $validPk = null !== $this->getApvevendid() &&
            null !== $this->getApihpaytokey() &&
            null !== $this->getApihponbr() &&
            null !== $this->getApihctrlnbr() &&
            null !== $this->getApihinvnbr() &&
            null !== $this->getApihseq();

        $validPrimaryKeyFKs = 2;
        $primaryKeyFKs = [];

        //relation vendor to table ap_vend_mast
        if ($this->aVendor && $hash = spl_object_hash($this->aVendor)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

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
        $pks[0] = $this->getApvevendid();
        $pks[1] = $this->getApihpaytokey();
        $pks[2] = $this->getApihponbr();
        $pks[3] = $this->getApihctrlnbr();
        $pks[4] = $this->getApihinvnbr();
        $pks[5] = $this->getApihseq();

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
        $this->setApvevendid($keys[0]);
        $this->setApihpaytokey($keys[1]);
        $this->setApihponbr($keys[2]);
        $this->setApihctrlnbr($keys[3]);
        $this->setApihinvnbr($keys[4]);
        $this->setApihseq($keys[5]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getApvevendid()) && (null === $this->getApihpaytokey()) && (null === $this->getApihponbr()) && (null === $this->getApihctrlnbr()) && (null === $this->getApihinvnbr()) && (null === $this->getApihseq());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ApInvoice (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setApihpaytokey($this->getApihpaytokey());
        $copyObj->setApihptname($this->getApihptname());
        $copyObj->setApihptadr1($this->getApihptadr1());
        $copyObj->setApihptadr2($this->getApihptadr2());
        $copyObj->setApihptadr3($this->getApihptadr3());
        $copyObj->setApihptctry($this->getApihptctry());
        $copyObj->setApihptcity($this->getApihptcity());
        $copyObj->setApihptstat($this->getApihptstat());
        $copyObj->setApihptzipcode($this->getApihptzipcode());
        $copyObj->setApihponbr($this->getApihponbr());
        $copyObj->setApihctrlnbr($this->getApihctrlnbr());
        $copyObj->setApihinvnbr($this->getApihinvnbr());
        $copyObj->setApihseq($this->getApihseq());
        $copyObj->setApihstat($this->getApihstat());
        $copyObj->setApihinvdate($this->getApihinvdate());
        $copyObj->setApihdiscdate($this->getApihdiscdate());
        $copyObj->setApihduedate($this->getApihduedate());
        $copyObj->setApihtotamt($this->getApihtotamt());
        $copyObj->setApihdiscamt($this->getApihdiscamt());
        $copyObj->setApihppchknbr($this->getApihppchknbr());
        $copyObj->setApihglpd($this->getApihglpd());
        $copyObj->setApihchknbr($this->getApihchknbr());
        $copyObj->setApihchkdate($this->getApihchkdate());
        $copyObj->setApihchkamt($this->getApihchkamt());
        $copyObj->setApihchkglacct($this->getApihchkglacct());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setAptmtermcode($this->getAptmtermcode());
        $copyObj->setApihvenddisc($this->getApihvenddisc());
        $copyObj->setApihinvref($this->getApihinvref());
        $copyObj->setApihcenbeeformatid($this->getApihcenbeeformatid());
        $copyObj->setApihcenbeeponbr($this->getApihcenbeeponbr());
        $copyObj->setApihtakeexpired($this->getApihtakeexpired());
        $copyObj->setApihexchctry($this->getApihexchctry());
        $copyObj->setApihexchrate($this->getApihexchrate());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getApInvoiceDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addApInvoiceDetail($relObj->copy($deepCopy));
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
     * @return \ApInvoice Clone of current object.
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
     * Declares an association between this object and a ChildVendor object.
     *
     * @param  ChildVendor $v
     * @return $this|\ApInvoice The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVendor(ChildVendor $v = null)
    {
        if ($v === null) {
            $this->setApvevendid('');
        } else {
            $this->setApvevendid($v->getApvevendid());
        }

        $this->aVendor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildVendor object, it will not be re-added.
        if ($v !== null) {
            $v->addApInvoice($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildVendor object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildVendor The associated ChildVendor object.
     * @throws PropelException
     */
    public function getVendor(ConnectionInterface $con = null)
    {
        if ($this->aVendor === null && (($this->apvevendid !== "" && $this->apvevendid !== null))) {
            $this->aVendor = ChildVendorQuery::create()->findPk($this->apvevendid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVendor->addApInvoices($this);
             */
        }

        return $this->aVendor;
    }

    /**
     * Declares an association between this object and a ChildPurchaseOrder object.
     *
     * @param  ChildPurchaseOrder $v
     * @return $this|\ApInvoice The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPurchaseOrder(ChildPurchaseOrder $v = null)
    {
        if ($v === null) {
            $this->setApihponbr('');
        } else {
            $this->setApihponbr($v->getPohdnbr());
        }

        $this->aPurchaseOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildPurchaseOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addApInvoice($this);
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
        if ($this->aPurchaseOrder === null && (($this->apihponbr !== "" && $this->apihponbr !== null))) {
            $this->aPurchaseOrder = ChildPurchaseOrderQuery::create()->findPk($this->apihponbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPurchaseOrder->addApInvoices($this);
             */
        }

        return $this->aPurchaseOrder;
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
        if ('ApInvoiceDetail' == $relationName) {
            $this->initApInvoiceDetails();
            return;
        }
    }

    /**
     * Clears out the collApInvoiceDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addApInvoiceDetails()
     */
    public function clearApInvoiceDetails()
    {
        $this->collApInvoiceDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collApInvoiceDetails collection loaded partially.
     */
    public function resetPartialApInvoiceDetails($v = true)
    {
        $this->collApInvoiceDetailsPartial = $v;
    }

    /**
     * Initializes the collApInvoiceDetails collection.
     *
     * By default this just sets the collApInvoiceDetails collection to an empty array (like clearcollApInvoiceDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initApInvoiceDetails($overrideExisting = true)
    {
        if (null !== $this->collApInvoiceDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = ApInvoiceDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collApInvoiceDetails = new $collectionClassName;
        $this->collApInvoiceDetails->setModel('\ApInvoiceDetail');
    }

    /**
     * Gets an array of ChildApInvoiceDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildApInvoice is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildApInvoiceDetail[] List of ChildApInvoiceDetail objects
     * @throws PropelException
     */
    public function getApInvoiceDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collApInvoiceDetailsPartial && !$this->isNew();
        if (null === $this->collApInvoiceDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collApInvoiceDetails) {
                // return empty collection
                $this->initApInvoiceDetails();
            } else {
                $collApInvoiceDetails = ChildApInvoiceDetailQuery::create(null, $criteria)
                    ->filterByApInvoice($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collApInvoiceDetailsPartial && count($collApInvoiceDetails)) {
                        $this->initApInvoiceDetails(false);

                        foreach ($collApInvoiceDetails as $obj) {
                            if (false == $this->collApInvoiceDetails->contains($obj)) {
                                $this->collApInvoiceDetails->append($obj);
                            }
                        }

                        $this->collApInvoiceDetailsPartial = true;
                    }

                    return $collApInvoiceDetails;
                }

                if ($partial && $this->collApInvoiceDetails) {
                    foreach ($this->collApInvoiceDetails as $obj) {
                        if ($obj->isNew()) {
                            $collApInvoiceDetails[] = $obj;
                        }
                    }
                }

                $this->collApInvoiceDetails = $collApInvoiceDetails;
                $this->collApInvoiceDetailsPartial = false;
            }
        }

        return $this->collApInvoiceDetails;
    }

    /**
     * Sets a collection of ChildApInvoiceDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $apInvoiceDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildApInvoice The current object (for fluent API support)
     */
    public function setApInvoiceDetails(Collection $apInvoiceDetails, ConnectionInterface $con = null)
    {
        /** @var ChildApInvoiceDetail[] $apInvoiceDetailsToDelete */
        $apInvoiceDetailsToDelete = $this->getApInvoiceDetails(new Criteria(), $con)->diff($apInvoiceDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->apInvoiceDetailsScheduledForDeletion = clone $apInvoiceDetailsToDelete;

        foreach ($apInvoiceDetailsToDelete as $apInvoiceDetailRemoved) {
            $apInvoiceDetailRemoved->setApInvoice(null);
        }

        $this->collApInvoiceDetails = null;
        foreach ($apInvoiceDetails as $apInvoiceDetail) {
            $this->addApInvoiceDetail($apInvoiceDetail);
        }

        $this->collApInvoiceDetails = $apInvoiceDetails;
        $this->collApInvoiceDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ApInvoiceDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ApInvoiceDetail objects.
     * @throws PropelException
     */
    public function countApInvoiceDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collApInvoiceDetailsPartial && !$this->isNew();
        if (null === $this->collApInvoiceDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collApInvoiceDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getApInvoiceDetails());
            }

            $query = ChildApInvoiceDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByApInvoice($this)
                ->count($con);
        }

        return count($this->collApInvoiceDetails);
    }

    /**
     * Method called to associate a ChildApInvoiceDetail object to this object
     * through the ChildApInvoiceDetail foreign key attribute.
     *
     * @param  ChildApInvoiceDetail $l ChildApInvoiceDetail
     * @return $this|\ApInvoice The current object (for fluent API support)
     */
    public function addApInvoiceDetail(ChildApInvoiceDetail $l)
    {
        if ($this->collApInvoiceDetails === null) {
            $this->initApInvoiceDetails();
            $this->collApInvoiceDetailsPartial = true;
        }

        if (!$this->collApInvoiceDetails->contains($l)) {
            $this->doAddApInvoiceDetail($l);

            if ($this->apInvoiceDetailsScheduledForDeletion and $this->apInvoiceDetailsScheduledForDeletion->contains($l)) {
                $this->apInvoiceDetailsScheduledForDeletion->remove($this->apInvoiceDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildApInvoiceDetail $apInvoiceDetail The ChildApInvoiceDetail object to add.
     */
    protected function doAddApInvoiceDetail(ChildApInvoiceDetail $apInvoiceDetail)
    {
        $this->collApInvoiceDetails[]= $apInvoiceDetail;
        $apInvoiceDetail->setApInvoice($this);
    }

    /**
     * @param  ChildApInvoiceDetail $apInvoiceDetail The ChildApInvoiceDetail object to remove.
     * @return $this|ChildApInvoice The current object (for fluent API support)
     */
    public function removeApInvoiceDetail(ChildApInvoiceDetail $apInvoiceDetail)
    {
        if ($this->getApInvoiceDetails()->contains($apInvoiceDetail)) {
            $pos = $this->collApInvoiceDetails->search($apInvoiceDetail);
            $this->collApInvoiceDetails->remove($pos);
            if (null === $this->apInvoiceDetailsScheduledForDeletion) {
                $this->apInvoiceDetailsScheduledForDeletion = clone $this->collApInvoiceDetails;
                $this->apInvoiceDetailsScheduledForDeletion->clear();
            }
            $this->apInvoiceDetailsScheduledForDeletion[]= clone $apInvoiceDetail;
            $apInvoiceDetail->setApInvoice(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ApInvoice is new, it will return
     * an empty collection; or if this ApInvoice has previously
     * been saved, it will retrieve related ApInvoiceDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ApInvoice.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildApInvoiceDetail[] List of ChildApInvoiceDetail objects
     */
    public function getApInvoiceDetailsJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildApInvoiceDetailQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getApInvoiceDetails($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aVendor) {
            $this->aVendor->removeApInvoice($this);
        }
        if (null !== $this->aPurchaseOrder) {
            $this->aPurchaseOrder->removeApInvoice($this);
        }
        $this->apvevendid = null;
        $this->apihpaytokey = null;
        $this->apihptname = null;
        $this->apihptadr1 = null;
        $this->apihptadr2 = null;
        $this->apihptadr3 = null;
        $this->apihptctry = null;
        $this->apihptcity = null;
        $this->apihptstat = null;
        $this->apihptzipcode = null;
        $this->apihponbr = null;
        $this->apihctrlnbr = null;
        $this->apihinvnbr = null;
        $this->apihseq = null;
        $this->apihstat = null;
        $this->apihinvdate = null;
        $this->apihdiscdate = null;
        $this->apihduedate = null;
        $this->apihtotamt = null;
        $this->apihdiscamt = null;
        $this->apihppchknbr = null;
        $this->apihglpd = null;
        $this->apihchknbr = null;
        $this->apihchkdate = null;
        $this->apihchkamt = null;
        $this->apihchkglacct = null;
        $this->intbwhse = null;
        $this->aptmtermcode = null;
        $this->apihvenddisc = null;
        $this->apihinvref = null;
        $this->apihcenbeeformatid = null;
        $this->apihcenbeeponbr = null;
        $this->apihtakeexpired = null;
        $this->apihexchctry = null;
        $this->apihexchrate = null;
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
            if ($this->collApInvoiceDetails) {
                foreach ($this->collApInvoiceDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collApInvoiceDetails = null;
        $this->aVendor = null;
        $this->aPurchaseOrder = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ApInvoiceTableMap::DEFAULT_STRING_FORMAT);
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
