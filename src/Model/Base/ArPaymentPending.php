<?php

namespace Base;

use \ArCashHead as ChildArCashHead;
use \ArCashHeadQuery as ChildArCashHeadQuery;
use \ArPaymentPendingQuery as ChildArPaymentPendingQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \Exception;
use \PDO;
use Map\ArPaymentPendingTableMap;
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
 * Base class that represents a row from the 'ar_cash_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ArPaymentPending implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ArPaymentPendingTableMap';


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
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arcdinvnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcdinvnbr;

    /**
     * The value for the arcdinvseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $arcdinvseq;

    /**
     * The value for the arcdpaid field.
     *
     * @var        string
     */
    protected $arcdpaid;

    /**
     * The value for the arcdinvdate field.
     *
     * @var        string
     */
    protected $arcdinvdate;

    /**
     * The value for the arcdduedate field.
     *
     * @var        string
     */
    protected $arcdduedate;

    /**
     * The value for the arcdchknbr field.
     *
     * @var        string
     */
    protected $arcdchknbr;

    /**
     * The value for the arcdamtdue field.
     *
     * @var        string
     */
    protected $arcdamtdue;

    /**
     * The value for the arcdamtpaid field.
     *
     * @var        string
     */
    protected $arcdamtpaid;

    /**
     * The value for the arcddiscpaid field.
     *
     * @var        string
     */
    protected $arcddiscpaid;

    /**
     * The value for the arcdcashacct field.
     *
     * @var        string
     */
    protected $arcdcashacct;

    /**
     * The value for the arcdcredacct field.
     *
     * @var        string
     */
    protected $arcdcredacct;

    /**
     * The value for the arcdtermcode field.
     *
     * @var        string
     */
    protected $arcdtermcode;

    /**
     * The value for the arcdfrtallow field.
     *
     * @var        string
     */
    protected $arcdfrtallow;

    /**
     * The value for the arcdcustpo field.
     *
     * @var        string
     */
    protected $arcdcustpo;

    /**
     * The value for the arcdordrnbr field.
     *
     * @var        string
     */
    protected $arcdordrnbr;

    /**
     * The value for the arcdtaxcode1 field.
     *
     * @var        string
     */
    protected $arcdtaxcode1;

    /**
     * The value for the arcdtaxallow1 field.
     *
     * @var        string
     */
    protected $arcdtaxallow1;

    /**
     * The value for the arcdtaxcode2 field.
     *
     * @var        string
     */
    protected $arcdtaxcode2;

    /**
     * The value for the arcdtaxallow2 field.
     *
     * @var        string
     */
    protected $arcdtaxallow2;

    /**
     * The value for the arcdtaxcode3 field.
     *
     * @var        string
     */
    protected $arcdtaxcode3;

    /**
     * The value for the arcdtaxallow3 field.
     *
     * @var        string
     */
    protected $arcdtaxallow3;

    /**
     * The value for the arcdtaxcode4 field.
     *
     * @var        string
     */
    protected $arcdtaxcode4;

    /**
     * The value for the arcdtaxallow4 field.
     *
     * @var        string
     */
    protected $arcdtaxallow4;

    /**
     * The value for the arcdtaxcode5 field.
     *
     * @var        string
     */
    protected $arcdtaxcode5;

    /**
     * The value for the arcdtaxallow5 field.
     *
     * @var        string
     */
    protected $arcdtaxallow5;

    /**
     * The value for the arcdtaxcode6 field.
     *
     * @var        string
     */
    protected $arcdtaxcode6;

    /**
     * The value for the arcdtaxallow6 field.
     *
     * @var        string
     */
    protected $arcdtaxallow6;

    /**
     * The value for the arcdtaxcode7 field.
     *
     * @var        string
     */
    protected $arcdtaxcode7;

    /**
     * The value for the arcdtaxallow7 field.
     *
     * @var        string
     */
    protected $arcdtaxallow7;

    /**
     * The value for the arcdtaxcode8 field.
     *
     * @var        string
     */
    protected $arcdtaxcode8;

    /**
     * The value for the arcdtaxallow8 field.
     *
     * @var        string
     */
    protected $arcdtaxallow8;

    /**
     * The value for the arcdtaxcode9 field.
     *
     * @var        string
     */
    protected $arcdtaxcode9;

    /**
     * The value for the arcdtaxallow9 field.
     *
     * @var        string
     */
    protected $arcdtaxallow9;

    /**
     * The value for the arcdwriteoff field.
     *
     * @var        string
     */
    protected $arcdwriteoff;

    /**
     * The value for the arcdwriteoffreas field.
     *
     * @var        string
     */
    protected $arcdwriteoffreas;

    /**
     * The value for the arcdcomrate field.
     *
     * @var        string
     */
    protected $arcdcomrate;

    /**
     * The value for the arcdsalesamt field.
     *
     * @var        string
     */
    protected $arcdsalesamt;

    /**
     * The value for the arcdpaydate field.
     *
     * @var        string
     */
    protected $arcdpaydate;

    /**
     * The value for the arcdglpd field.
     *
     * @var        int
     */
    protected $arcdglpd;

    /**
     * The value for the arcdref field.
     *
     * @var        string
     */
    protected $arcdref;

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
     * @var        ChildCustomer
     */
    protected $aCustomer;

    /**
     * @var        ChildArCashHead
     */
    protected $aArCashHead;

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
        $this->arcucustid = '';
        $this->arcdinvnbr = '';
        $this->arcdinvseq = 0;
    }

    /**
     * Initializes internal state of Base\ArPaymentPending object.
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
     * Compares this with another <code>ArPaymentPending</code> instance.  If
     * <code>obj</code> is an instance of <code>ArPaymentPending</code>, delegates to
     * <code>equals(ArPaymentPending)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ArPaymentPending The current object, for fluid interface
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [arcdinvnbr] column value.
     *
     * @return string
     */
    public function getArcdinvnbr()
    {
        return $this->arcdinvnbr;
    }

    /**
     * Get the [arcdinvseq] column value.
     *
     * @return int
     */
    public function getArcdinvseq()
    {
        return $this->arcdinvseq;
    }

    /**
     * Get the [arcdpaid] column value.
     *
     * @return string
     */
    public function getArcdpaid()
    {
        return $this->arcdpaid;
    }

    /**
     * Get the [arcdinvdate] column value.
     *
     * @return string
     */
    public function getArcdinvdate()
    {
        return $this->arcdinvdate;
    }

    /**
     * Get the [arcdduedate] column value.
     *
     * @return string
     */
    public function getArcdduedate()
    {
        return $this->arcdduedate;
    }

    /**
     * Get the [arcdchknbr] column value.
     *
     * @return string
     */
    public function getArcdchknbr()
    {
        return $this->arcdchknbr;
    }

    /**
     * Get the [arcdamtdue] column value.
     *
     * @return string
     */
    public function getArcdamtdue()
    {
        return $this->arcdamtdue;
    }

    /**
     * Get the [arcdamtpaid] column value.
     *
     * @return string
     */
    public function getArcdamtpaid()
    {
        return $this->arcdamtpaid;
    }

    /**
     * Get the [arcddiscpaid] column value.
     *
     * @return string
     */
    public function getArcddiscpaid()
    {
        return $this->arcddiscpaid;
    }

    /**
     * Get the [arcdcashacct] column value.
     *
     * @return string
     */
    public function getArcdcashacct()
    {
        return $this->arcdcashacct;
    }

    /**
     * Get the [arcdcredacct] column value.
     *
     * @return string
     */
    public function getArcdcredacct()
    {
        return $this->arcdcredacct;
    }

    /**
     * Get the [arcdtermcode] column value.
     *
     * @return string
     */
    public function getArcdtermcode()
    {
        return $this->arcdtermcode;
    }

    /**
     * Get the [arcdfrtallow] column value.
     *
     * @return string
     */
    public function getArcdfrtallow()
    {
        return $this->arcdfrtallow;
    }

    /**
     * Get the [arcdcustpo] column value.
     *
     * @return string
     */
    public function getArcdcustpo()
    {
        return $this->arcdcustpo;
    }

    /**
     * Get the [arcdordrnbr] column value.
     *
     * @return string
     */
    public function getArcdordrnbr()
    {
        return $this->arcdordrnbr;
    }

    /**
     * Get the [arcdtaxcode1] column value.
     *
     * @return string
     */
    public function getArcdtaxcode1()
    {
        return $this->arcdtaxcode1;
    }

    /**
     * Get the [arcdtaxallow1] column value.
     *
     * @return string
     */
    public function getArcdtaxallow1()
    {
        return $this->arcdtaxallow1;
    }

    /**
     * Get the [arcdtaxcode2] column value.
     *
     * @return string
     */
    public function getArcdtaxcode2()
    {
        return $this->arcdtaxcode2;
    }

    /**
     * Get the [arcdtaxallow2] column value.
     *
     * @return string
     */
    public function getArcdtaxallow2()
    {
        return $this->arcdtaxallow2;
    }

    /**
     * Get the [arcdtaxcode3] column value.
     *
     * @return string
     */
    public function getArcdtaxcode3()
    {
        return $this->arcdtaxcode3;
    }

    /**
     * Get the [arcdtaxallow3] column value.
     *
     * @return string
     */
    public function getArcdtaxallow3()
    {
        return $this->arcdtaxallow3;
    }

    /**
     * Get the [arcdtaxcode4] column value.
     *
     * @return string
     */
    public function getArcdtaxcode4()
    {
        return $this->arcdtaxcode4;
    }

    /**
     * Get the [arcdtaxallow4] column value.
     *
     * @return string
     */
    public function getArcdtaxallow4()
    {
        return $this->arcdtaxallow4;
    }

    /**
     * Get the [arcdtaxcode5] column value.
     *
     * @return string
     */
    public function getArcdtaxcode5()
    {
        return $this->arcdtaxcode5;
    }

    /**
     * Get the [arcdtaxallow5] column value.
     *
     * @return string
     */
    public function getArcdtaxallow5()
    {
        return $this->arcdtaxallow5;
    }

    /**
     * Get the [arcdtaxcode6] column value.
     *
     * @return string
     */
    public function getArcdtaxcode6()
    {
        return $this->arcdtaxcode6;
    }

    /**
     * Get the [arcdtaxallow6] column value.
     *
     * @return string
     */
    public function getArcdtaxallow6()
    {
        return $this->arcdtaxallow6;
    }

    /**
     * Get the [arcdtaxcode7] column value.
     *
     * @return string
     */
    public function getArcdtaxcode7()
    {
        return $this->arcdtaxcode7;
    }

    /**
     * Get the [arcdtaxallow7] column value.
     *
     * @return string
     */
    public function getArcdtaxallow7()
    {
        return $this->arcdtaxallow7;
    }

    /**
     * Get the [arcdtaxcode8] column value.
     *
     * @return string
     */
    public function getArcdtaxcode8()
    {
        return $this->arcdtaxcode8;
    }

    /**
     * Get the [arcdtaxallow8] column value.
     *
     * @return string
     */
    public function getArcdtaxallow8()
    {
        return $this->arcdtaxallow8;
    }

    /**
     * Get the [arcdtaxcode9] column value.
     *
     * @return string
     */
    public function getArcdtaxcode9()
    {
        return $this->arcdtaxcode9;
    }

    /**
     * Get the [arcdtaxallow9] column value.
     *
     * @return string
     */
    public function getArcdtaxallow9()
    {
        return $this->arcdtaxallow9;
    }

    /**
     * Get the [arcdwriteoff] column value.
     *
     * @return string
     */
    public function getArcdwriteoff()
    {
        return $this->arcdwriteoff;
    }

    /**
     * Get the [arcdwriteoffreas] column value.
     *
     * @return string
     */
    public function getArcdwriteoffreas()
    {
        return $this->arcdwriteoffreas;
    }

    /**
     * Get the [arcdcomrate] column value.
     *
     * @return string
     */
    public function getArcdcomrate()
    {
        return $this->arcdcomrate;
    }

    /**
     * Get the [arcdsalesamt] column value.
     *
     * @return string
     */
    public function getArcdsalesamt()
    {
        return $this->arcdsalesamt;
    }

    /**
     * Get the [arcdpaydate] column value.
     *
     * @return string
     */
    public function getArcdpaydate()
    {
        return $this->arcdpaydate;
    }

    /**
     * Get the [arcdglpd] column value.
     *
     * @return int
     */
    public function getArcdglpd()
    {
        return $this->arcdglpd;
    }

    /**
     * Get the [arcdref] column value.
     *
     * @return string
     */
    public function getArcdref()
    {
        return $this->arcdref;
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
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        if ($this->aArCashHead !== null && $this->aArCashHead->getArcucustid() !== $v) {
            $this->aArCashHead = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arcdinvnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdinvnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdinvnbr !== $v) {
            $this->arcdinvnbr = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDINVNBR] = true;
        }

        return $this;
    } // setArcdinvnbr()

    /**
     * Set the value of [arcdinvseq] column.
     *
     * @param int $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdinvseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcdinvseq !== $v) {
            $this->arcdinvseq = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDINVSEQ] = true;
        }

        return $this;
    } // setArcdinvseq()

    /**
     * Set the value of [arcdpaid] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdpaid !== $v) {
            $this->arcdpaid = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDPAID] = true;
        }

        return $this;
    } // setArcdpaid()

    /**
     * Set the value of [arcdinvdate] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdinvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdinvdate !== $v) {
            $this->arcdinvdate = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDINVDATE] = true;
        }

        return $this;
    } // setArcdinvdate()

    /**
     * Set the value of [arcdduedate] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdduedate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdduedate !== $v) {
            $this->arcdduedate = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDDUEDATE] = true;
        }

        return $this;
    } // setArcdduedate()

    /**
     * Set the value of [arcdchknbr] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdchknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdchknbr !== $v) {
            $this->arcdchknbr = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDCHKNBR] = true;
        }

        return $this;
    } // setArcdchknbr()

    /**
     * Set the value of [arcdamtdue] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdamtdue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdamtdue !== $v) {
            $this->arcdamtdue = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDAMTDUE] = true;
        }

        return $this;
    } // setArcdamtdue()

    /**
     * Set the value of [arcdamtpaid] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdamtpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdamtpaid !== $v) {
            $this->arcdamtpaid = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDAMTPAID] = true;
        }

        return $this;
    } // setArcdamtpaid()

    /**
     * Set the value of [arcddiscpaid] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcddiscpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcddiscpaid !== $v) {
            $this->arcddiscpaid = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDDISCPAID] = true;
        }

        return $this;
    } // setArcddiscpaid()

    /**
     * Set the value of [arcdcashacct] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdcashacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdcashacct !== $v) {
            $this->arcdcashacct = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDCASHACCT] = true;
        }

        return $this;
    } // setArcdcashacct()

    /**
     * Set the value of [arcdcredacct] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdcredacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdcredacct !== $v) {
            $this->arcdcredacct = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDCREDACCT] = true;
        }

        return $this;
    } // setArcdcredacct()

    /**
     * Set the value of [arcdtermcode] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtermcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtermcode !== $v) {
            $this->arcdtermcode = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTERMCODE] = true;
        }

        return $this;
    } // setArcdtermcode()

    /**
     * Set the value of [arcdfrtallow] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdfrtallow($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdfrtallow !== $v) {
            $this->arcdfrtallow = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDFRTALLOW] = true;
        }

        return $this;
    } // setArcdfrtallow()

    /**
     * Set the value of [arcdcustpo] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdcustpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdcustpo !== $v) {
            $this->arcdcustpo = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDCUSTPO] = true;
        }

        return $this;
    } // setArcdcustpo()

    /**
     * Set the value of [arcdordrnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdordrnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdordrnbr !== $v) {
            $this->arcdordrnbr = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDORDRNBR] = true;
        }

        return $this;
    } // setArcdordrnbr()

    /**
     * Set the value of [arcdtaxcode1] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode1 !== $v) {
            $this->arcdtaxcode1 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE1] = true;
        }

        return $this;
    } // setArcdtaxcode1()

    /**
     * Set the value of [arcdtaxallow1] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow1 !== $v) {
            $this->arcdtaxallow1 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW1] = true;
        }

        return $this;
    } // setArcdtaxallow1()

    /**
     * Set the value of [arcdtaxcode2] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode2 !== $v) {
            $this->arcdtaxcode2 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE2] = true;
        }

        return $this;
    } // setArcdtaxcode2()

    /**
     * Set the value of [arcdtaxallow2] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow2 !== $v) {
            $this->arcdtaxallow2 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW2] = true;
        }

        return $this;
    } // setArcdtaxallow2()

    /**
     * Set the value of [arcdtaxcode3] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode3 !== $v) {
            $this->arcdtaxcode3 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE3] = true;
        }

        return $this;
    } // setArcdtaxcode3()

    /**
     * Set the value of [arcdtaxallow3] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow3 !== $v) {
            $this->arcdtaxallow3 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW3] = true;
        }

        return $this;
    } // setArcdtaxallow3()

    /**
     * Set the value of [arcdtaxcode4] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode4 !== $v) {
            $this->arcdtaxcode4 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE4] = true;
        }

        return $this;
    } // setArcdtaxcode4()

    /**
     * Set the value of [arcdtaxallow4] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow4 !== $v) {
            $this->arcdtaxallow4 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW4] = true;
        }

        return $this;
    } // setArcdtaxallow4()

    /**
     * Set the value of [arcdtaxcode5] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode5 !== $v) {
            $this->arcdtaxcode5 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE5] = true;
        }

        return $this;
    } // setArcdtaxcode5()

    /**
     * Set the value of [arcdtaxallow5] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow5 !== $v) {
            $this->arcdtaxallow5 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW5] = true;
        }

        return $this;
    } // setArcdtaxallow5()

    /**
     * Set the value of [arcdtaxcode6] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode6 !== $v) {
            $this->arcdtaxcode6 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE6] = true;
        }

        return $this;
    } // setArcdtaxcode6()

    /**
     * Set the value of [arcdtaxallow6] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow6 !== $v) {
            $this->arcdtaxallow6 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW6] = true;
        }

        return $this;
    } // setArcdtaxallow6()

    /**
     * Set the value of [arcdtaxcode7] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode7 !== $v) {
            $this->arcdtaxcode7 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE7] = true;
        }

        return $this;
    } // setArcdtaxcode7()

    /**
     * Set the value of [arcdtaxallow7] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow7 !== $v) {
            $this->arcdtaxallow7 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW7] = true;
        }

        return $this;
    } // setArcdtaxallow7()

    /**
     * Set the value of [arcdtaxcode8] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode8 !== $v) {
            $this->arcdtaxcode8 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE8] = true;
        }

        return $this;
    } // setArcdtaxcode8()

    /**
     * Set the value of [arcdtaxallow8] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow8 !== $v) {
            $this->arcdtaxallow8 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW8] = true;
        }

        return $this;
    } // setArcdtaxallow8()

    /**
     * Set the value of [arcdtaxcode9] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxcode9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxcode9 !== $v) {
            $this->arcdtaxcode9 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXCODE9] = true;
        }

        return $this;
    } // setArcdtaxcode9()

    /**
     * Set the value of [arcdtaxallow9] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdtaxallow9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdtaxallow9 !== $v) {
            $this->arcdtaxallow9 = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDTAXALLOW9] = true;
        }

        return $this;
    } // setArcdtaxallow9()

    /**
     * Set the value of [arcdwriteoff] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdwriteoff($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdwriteoff !== $v) {
            $this->arcdwriteoff = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDWRITEOFF] = true;
        }

        return $this;
    } // setArcdwriteoff()

    /**
     * Set the value of [arcdwriteoffreas] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdwriteoffreas($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdwriteoffreas !== $v) {
            $this->arcdwriteoffreas = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS] = true;
        }

        return $this;
    } // setArcdwriteoffreas()

    /**
     * Set the value of [arcdcomrate] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdcomrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdcomrate !== $v) {
            $this->arcdcomrate = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDCOMRATE] = true;
        }

        return $this;
    } // setArcdcomrate()

    /**
     * Set the value of [arcdsalesamt] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdsalesamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdsalesamt !== $v) {
            $this->arcdsalesamt = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDSALESAMT] = true;
        }

        return $this;
    } // setArcdsalesamt()

    /**
     * Set the value of [arcdpaydate] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdpaydate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdpaydate !== $v) {
            $this->arcdpaydate = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDPAYDATE] = true;
        }

        return $this;
    } // setArcdpaydate()

    /**
     * Set the value of [arcdglpd] column.
     *
     * @param int $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdglpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcdglpd !== $v) {
            $this->arcdglpd = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDGLPD] = true;
        }

        return $this;
    } // setArcdglpd()

    /**
     * Set the value of [arcdref] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setArcdref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcdref !== $v) {
            $this->arcdref = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_ARCDREF] = true;
        }

        return $this;
    } // setArcdref()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ArPaymentPendingTableMap::COL_DUMMY] = true;
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
            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->arcdinvnbr !== '') {
                return false;
            }

            if ($this->arcdinvseq !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdinvnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdinvnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdinvseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdinvseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdinvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdinvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdduedate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdduedate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdchknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdchknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdamtdue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdamtdue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdamtpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdamtpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcddiscpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcddiscpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdcashacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdcashacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdcredacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdcredacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtermcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtermcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdfrtallow', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdfrtallow = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdcustpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdcustpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdordrnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxcode9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxcode9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdtaxallow9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdtaxallow9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdwriteoff', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdwriteoff = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdwriteoffreas', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdwriteoffreas = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdcomrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdcomrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdsalesamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdsalesamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdpaydate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdpaydate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdglpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdglpd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ArPaymentPendingTableMap::translateFieldName('Arcdref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcdref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ArPaymentPendingTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ArPaymentPendingTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ArPaymentPendingTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 44; // 44 = ArPaymentPendingTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ArPaymentPending'), 0, $e);
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
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
        if ($this->aArCashHead !== null && $this->arcucustid !== $this->aArCashHead->getArcucustid()) {
            $this->aArCashHead = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(ArPaymentPendingTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildArPaymentPendingQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->aArCashHead = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ArPaymentPending::setDeleted()
     * @see ArPaymentPending::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArPaymentPendingTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildArPaymentPendingQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArPaymentPendingTableMap::DATABASE_NAME);
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
                ArPaymentPendingTableMap::addInstanceToPool($this);
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

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

            if ($this->aArCashHead !== null) {
                if ($this->aArCashHead->isModified() || $this->aArCashHead->isNew()) {
                    $affectedRows += $this->aArCashHead->save($con);
                }
                $this->setArCashHead($this->aArCashHead);
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
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDINVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdInvNbr';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDINVSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdInvSeq';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdPaid';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDINVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdInvDate';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDDUEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdDueDate';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCHKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdChkNbr';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDAMTDUE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdAmtDue';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDAMTPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdAmtPaid';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDDISCPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdDiscPaid';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCASHACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdCashAcct';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCREDACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdCredAcct';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTERMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTermCode';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDFRTALLOW)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdFrtAllow';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCUSTPO)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdCustPo';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdOrdrNbr';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode1';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow1';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode2';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow2';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode3';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow3';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode4';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW4)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow4';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode5';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW5)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow5';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE6)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode6';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW6)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow6';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE7)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode7';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW7)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow7';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE8)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode8';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW8)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow8';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE9)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxCode9';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW9)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdTaxAllow9';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDWRITEOFF)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdWriteOff';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdWriteOffReas';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCOMRATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdComRate';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDSALESAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdSalesAmt';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDPAYDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdPayDate';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDGLPD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdGlPd';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDREF)) {
            $modifiedColumns[':p' . $index++]  = 'ArcdRef';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_cash_det (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArcdInvNbr':
                        $stmt->bindValue($identifier, $this->arcdinvnbr, PDO::PARAM_STR);
                        break;
                    case 'ArcdInvSeq':
                        $stmt->bindValue($identifier, $this->arcdinvseq, PDO::PARAM_INT);
                        break;
                    case 'ArcdPaid':
                        $stmt->bindValue($identifier, $this->arcdpaid, PDO::PARAM_STR);
                        break;
                    case 'ArcdInvDate':
                        $stmt->bindValue($identifier, $this->arcdinvdate, PDO::PARAM_STR);
                        break;
                    case 'ArcdDueDate':
                        $stmt->bindValue($identifier, $this->arcdduedate, PDO::PARAM_STR);
                        break;
                    case 'ArcdChkNbr':
                        $stmt->bindValue($identifier, $this->arcdchknbr, PDO::PARAM_STR);
                        break;
                    case 'ArcdAmtDue':
                        $stmt->bindValue($identifier, $this->arcdamtdue, PDO::PARAM_STR);
                        break;
                    case 'ArcdAmtPaid':
                        $stmt->bindValue($identifier, $this->arcdamtpaid, PDO::PARAM_STR);
                        break;
                    case 'ArcdDiscPaid':
                        $stmt->bindValue($identifier, $this->arcddiscpaid, PDO::PARAM_STR);
                        break;
                    case 'ArcdCashAcct':
                        $stmt->bindValue($identifier, $this->arcdcashacct, PDO::PARAM_STR);
                        break;
                    case 'ArcdCredAcct':
                        $stmt->bindValue($identifier, $this->arcdcredacct, PDO::PARAM_STR);
                        break;
                    case 'ArcdTermCode':
                        $stmt->bindValue($identifier, $this->arcdtermcode, PDO::PARAM_STR);
                        break;
                    case 'ArcdFrtAllow':
                        $stmt->bindValue($identifier, $this->arcdfrtallow, PDO::PARAM_STR);
                        break;
                    case 'ArcdCustPo':
                        $stmt->bindValue($identifier, $this->arcdcustpo, PDO::PARAM_STR);
                        break;
                    case 'ArcdOrdrNbr':
                        $stmt->bindValue($identifier, $this->arcdordrnbr, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode1':
                        $stmt->bindValue($identifier, $this->arcdtaxcode1, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow1':
                        $stmt->bindValue($identifier, $this->arcdtaxallow1, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode2':
                        $stmt->bindValue($identifier, $this->arcdtaxcode2, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow2':
                        $stmt->bindValue($identifier, $this->arcdtaxallow2, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode3':
                        $stmt->bindValue($identifier, $this->arcdtaxcode3, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow3':
                        $stmt->bindValue($identifier, $this->arcdtaxallow3, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode4':
                        $stmt->bindValue($identifier, $this->arcdtaxcode4, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow4':
                        $stmt->bindValue($identifier, $this->arcdtaxallow4, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode5':
                        $stmt->bindValue($identifier, $this->arcdtaxcode5, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow5':
                        $stmt->bindValue($identifier, $this->arcdtaxallow5, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode6':
                        $stmt->bindValue($identifier, $this->arcdtaxcode6, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow6':
                        $stmt->bindValue($identifier, $this->arcdtaxallow6, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode7':
                        $stmt->bindValue($identifier, $this->arcdtaxcode7, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow7':
                        $stmt->bindValue($identifier, $this->arcdtaxallow7, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode8':
                        $stmt->bindValue($identifier, $this->arcdtaxcode8, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow8':
                        $stmt->bindValue($identifier, $this->arcdtaxallow8, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxCode9':
                        $stmt->bindValue($identifier, $this->arcdtaxcode9, PDO::PARAM_STR);
                        break;
                    case 'ArcdTaxAllow9':
                        $stmt->bindValue($identifier, $this->arcdtaxallow9, PDO::PARAM_STR);
                        break;
                    case 'ArcdWriteOff':
                        $stmt->bindValue($identifier, $this->arcdwriteoff, PDO::PARAM_STR);
                        break;
                    case 'ArcdWriteOffReas':
                        $stmt->bindValue($identifier, $this->arcdwriteoffreas, PDO::PARAM_STR);
                        break;
                    case 'ArcdComRate':
                        $stmt->bindValue($identifier, $this->arcdcomrate, PDO::PARAM_STR);
                        break;
                    case 'ArcdSalesAmt':
                        $stmt->bindValue($identifier, $this->arcdsalesamt, PDO::PARAM_STR);
                        break;
                    case 'ArcdPayDate':
                        $stmt->bindValue($identifier, $this->arcdpaydate, PDO::PARAM_STR);
                        break;
                    case 'ArcdGlPd':
                        $stmt->bindValue($identifier, $this->arcdglpd, PDO::PARAM_INT);
                        break;
                    case 'ArcdRef':
                        $stmt->bindValue($identifier, $this->arcdref, PDO::PARAM_STR);
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
        $pos = ArPaymentPendingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArcucustid();
                break;
            case 1:
                return $this->getArcdinvnbr();
                break;
            case 2:
                return $this->getArcdinvseq();
                break;
            case 3:
                return $this->getArcdpaid();
                break;
            case 4:
                return $this->getArcdinvdate();
                break;
            case 5:
                return $this->getArcdduedate();
                break;
            case 6:
                return $this->getArcdchknbr();
                break;
            case 7:
                return $this->getArcdamtdue();
                break;
            case 8:
                return $this->getArcdamtpaid();
                break;
            case 9:
                return $this->getArcddiscpaid();
                break;
            case 10:
                return $this->getArcdcashacct();
                break;
            case 11:
                return $this->getArcdcredacct();
                break;
            case 12:
                return $this->getArcdtermcode();
                break;
            case 13:
                return $this->getArcdfrtallow();
                break;
            case 14:
                return $this->getArcdcustpo();
                break;
            case 15:
                return $this->getArcdordrnbr();
                break;
            case 16:
                return $this->getArcdtaxcode1();
                break;
            case 17:
                return $this->getArcdtaxallow1();
                break;
            case 18:
                return $this->getArcdtaxcode2();
                break;
            case 19:
                return $this->getArcdtaxallow2();
                break;
            case 20:
                return $this->getArcdtaxcode3();
                break;
            case 21:
                return $this->getArcdtaxallow3();
                break;
            case 22:
                return $this->getArcdtaxcode4();
                break;
            case 23:
                return $this->getArcdtaxallow4();
                break;
            case 24:
                return $this->getArcdtaxcode5();
                break;
            case 25:
                return $this->getArcdtaxallow5();
                break;
            case 26:
                return $this->getArcdtaxcode6();
                break;
            case 27:
                return $this->getArcdtaxallow6();
                break;
            case 28:
                return $this->getArcdtaxcode7();
                break;
            case 29:
                return $this->getArcdtaxallow7();
                break;
            case 30:
                return $this->getArcdtaxcode8();
                break;
            case 31:
                return $this->getArcdtaxallow8();
                break;
            case 32:
                return $this->getArcdtaxcode9();
                break;
            case 33:
                return $this->getArcdtaxallow9();
                break;
            case 34:
                return $this->getArcdwriteoff();
                break;
            case 35:
                return $this->getArcdwriteoffreas();
                break;
            case 36:
                return $this->getArcdcomrate();
                break;
            case 37:
                return $this->getArcdsalesamt();
                break;
            case 38:
                return $this->getArcdpaydate();
                break;
            case 39:
                return $this->getArcdglpd();
                break;
            case 40:
                return $this->getArcdref();
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

        if (isset($alreadyDumpedObjects['ArPaymentPending'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ArPaymentPending'][$this->hashCode()] = true;
        $keys = ArPaymentPendingTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArcdinvnbr(),
            $keys[2] => $this->getArcdinvseq(),
            $keys[3] => $this->getArcdpaid(),
            $keys[4] => $this->getArcdinvdate(),
            $keys[5] => $this->getArcdduedate(),
            $keys[6] => $this->getArcdchknbr(),
            $keys[7] => $this->getArcdamtdue(),
            $keys[8] => $this->getArcdamtpaid(),
            $keys[9] => $this->getArcddiscpaid(),
            $keys[10] => $this->getArcdcashacct(),
            $keys[11] => $this->getArcdcredacct(),
            $keys[12] => $this->getArcdtermcode(),
            $keys[13] => $this->getArcdfrtallow(),
            $keys[14] => $this->getArcdcustpo(),
            $keys[15] => $this->getArcdordrnbr(),
            $keys[16] => $this->getArcdtaxcode1(),
            $keys[17] => $this->getArcdtaxallow1(),
            $keys[18] => $this->getArcdtaxcode2(),
            $keys[19] => $this->getArcdtaxallow2(),
            $keys[20] => $this->getArcdtaxcode3(),
            $keys[21] => $this->getArcdtaxallow3(),
            $keys[22] => $this->getArcdtaxcode4(),
            $keys[23] => $this->getArcdtaxallow4(),
            $keys[24] => $this->getArcdtaxcode5(),
            $keys[25] => $this->getArcdtaxallow5(),
            $keys[26] => $this->getArcdtaxcode6(),
            $keys[27] => $this->getArcdtaxallow6(),
            $keys[28] => $this->getArcdtaxcode7(),
            $keys[29] => $this->getArcdtaxallow7(),
            $keys[30] => $this->getArcdtaxcode8(),
            $keys[31] => $this->getArcdtaxallow8(),
            $keys[32] => $this->getArcdtaxcode9(),
            $keys[33] => $this->getArcdtaxallow9(),
            $keys[34] => $this->getArcdwriteoff(),
            $keys[35] => $this->getArcdwriteoffreas(),
            $keys[36] => $this->getArcdcomrate(),
            $keys[37] => $this->getArcdsalesamt(),
            $keys[38] => $this->getArcdpaydate(),
            $keys[39] => $this->getArcdglpd(),
            $keys[40] => $this->getArcdref(),
            $keys[41] => $this->getDateupdtd(),
            $keys[42] => $this->getTimeupdtd(),
            $keys[43] => $this->getDummy(),
        );
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
            if (null !== $this->aArCashHead) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'arCashHead';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cash_head';
                        break;
                    default:
                        $key = 'ArCashHead';
                }

                $result[$key] = $this->aArCashHead->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\ArPaymentPending
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ArPaymentPendingTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ArPaymentPending
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setArcdinvnbr($value);
                break;
            case 2:
                $this->setArcdinvseq($value);
                break;
            case 3:
                $this->setArcdpaid($value);
                break;
            case 4:
                $this->setArcdinvdate($value);
                break;
            case 5:
                $this->setArcdduedate($value);
                break;
            case 6:
                $this->setArcdchknbr($value);
                break;
            case 7:
                $this->setArcdamtdue($value);
                break;
            case 8:
                $this->setArcdamtpaid($value);
                break;
            case 9:
                $this->setArcddiscpaid($value);
                break;
            case 10:
                $this->setArcdcashacct($value);
                break;
            case 11:
                $this->setArcdcredacct($value);
                break;
            case 12:
                $this->setArcdtermcode($value);
                break;
            case 13:
                $this->setArcdfrtallow($value);
                break;
            case 14:
                $this->setArcdcustpo($value);
                break;
            case 15:
                $this->setArcdordrnbr($value);
                break;
            case 16:
                $this->setArcdtaxcode1($value);
                break;
            case 17:
                $this->setArcdtaxallow1($value);
                break;
            case 18:
                $this->setArcdtaxcode2($value);
                break;
            case 19:
                $this->setArcdtaxallow2($value);
                break;
            case 20:
                $this->setArcdtaxcode3($value);
                break;
            case 21:
                $this->setArcdtaxallow3($value);
                break;
            case 22:
                $this->setArcdtaxcode4($value);
                break;
            case 23:
                $this->setArcdtaxallow4($value);
                break;
            case 24:
                $this->setArcdtaxcode5($value);
                break;
            case 25:
                $this->setArcdtaxallow5($value);
                break;
            case 26:
                $this->setArcdtaxcode6($value);
                break;
            case 27:
                $this->setArcdtaxallow6($value);
                break;
            case 28:
                $this->setArcdtaxcode7($value);
                break;
            case 29:
                $this->setArcdtaxallow7($value);
                break;
            case 30:
                $this->setArcdtaxcode8($value);
                break;
            case 31:
                $this->setArcdtaxallow8($value);
                break;
            case 32:
                $this->setArcdtaxcode9($value);
                break;
            case 33:
                $this->setArcdtaxallow9($value);
                break;
            case 34:
                $this->setArcdwriteoff($value);
                break;
            case 35:
                $this->setArcdwriteoffreas($value);
                break;
            case 36:
                $this->setArcdcomrate($value);
                break;
            case 37:
                $this->setArcdsalesamt($value);
                break;
            case 38:
                $this->setArcdpaydate($value);
                break;
            case 39:
                $this->setArcdglpd($value);
                break;
            case 40:
                $this->setArcdref($value);
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
        $keys = ArPaymentPendingTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArcdinvnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArcdinvseq($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArcdpaid($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArcdinvdate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArcdduedate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArcdchknbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArcdamtdue($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArcdamtpaid($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArcddiscpaid($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArcdcashacct($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArcdcredacct($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArcdtermcode($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArcdfrtallow($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArcdcustpo($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArcdordrnbr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArcdtaxcode1($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArcdtaxallow1($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArcdtaxcode2($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArcdtaxallow2($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setArcdtaxcode3($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setArcdtaxallow3($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setArcdtaxcode4($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArcdtaxallow4($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArcdtaxcode5($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArcdtaxallow5($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setArcdtaxcode6($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setArcdtaxallow6($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setArcdtaxcode7($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setArcdtaxallow7($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setArcdtaxcode8($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setArcdtaxallow8($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setArcdtaxcode9($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setArcdtaxallow9($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setArcdwriteoff($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setArcdwriteoffreas($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setArcdcomrate($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setArcdsalesamt($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setArcdpaydate($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setArcdglpd($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setArcdref($arr[$keys[40]]);
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
     * @return $this|\ArPaymentPending The current object, for fluid interface
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
        $criteria = new Criteria(ArPaymentPendingTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCUCUSTID)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDINVNBR)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDINVNBR, $this->arcdinvnbr);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDINVSEQ)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $this->arcdinvseq);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDPAID)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDPAID, $this->arcdpaid);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDINVDATE)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDINVDATE, $this->arcdinvdate);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDDUEDATE)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDDUEDATE, $this->arcdduedate);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCHKNBR)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDCHKNBR, $this->arcdchknbr);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDAMTDUE)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDAMTDUE, $this->arcdamtdue);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDAMTPAID)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDAMTPAID, $this->arcdamtpaid);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDDISCPAID)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDDISCPAID, $this->arcddiscpaid);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCASHACCT)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDCASHACCT, $this->arcdcashacct);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCREDACCT)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDCREDACCT, $this->arcdcredacct);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTERMCODE)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTERMCODE, $this->arcdtermcode);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDFRTALLOW)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDFRTALLOW, $this->arcdfrtallow);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCUSTPO)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDCUSTPO, $this->arcdcustpo);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDORDRNBR)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDORDRNBR, $this->arcdordrnbr);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE1)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE1, $this->arcdtaxcode1);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW1)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW1, $this->arcdtaxallow1);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE2)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE2, $this->arcdtaxcode2);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW2)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW2, $this->arcdtaxallow2);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE3)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE3, $this->arcdtaxcode3);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW3)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW3, $this->arcdtaxallow3);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE4)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE4, $this->arcdtaxcode4);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW4)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW4, $this->arcdtaxallow4);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE5)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE5, $this->arcdtaxcode5);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW5)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW5, $this->arcdtaxallow5);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE6)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE6, $this->arcdtaxcode6);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW6)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW6, $this->arcdtaxallow6);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE7)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE7, $this->arcdtaxcode7);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW7)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW7, $this->arcdtaxallow7);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE8)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE8, $this->arcdtaxcode8);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW8)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW8, $this->arcdtaxallow8);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXCODE9)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXCODE9, $this->arcdtaxcode9);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDTAXALLOW9)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDTAXALLOW9, $this->arcdtaxallow9);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDWRITEOFF)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDWRITEOFF, $this->arcdwriteoff);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS, $this->arcdwriteoffreas);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDCOMRATE)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDCOMRATE, $this->arcdcomrate);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDSALESAMT)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDSALESAMT, $this->arcdsalesamt);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDPAYDATE)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDPAYDATE, $this->arcdpaydate);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDGLPD)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDGLPD, $this->arcdglpd);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_ARCDREF)) {
            $criteria->add(ArPaymentPendingTableMap::COL_ARCDREF, $this->arcdref);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_DATEUPDTD)) {
            $criteria->add(ArPaymentPendingTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ArPaymentPendingTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ArPaymentPendingTableMap::COL_DUMMY)) {
            $criteria->add(ArPaymentPendingTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildArPaymentPendingQuery::create();
        $criteria->add(ArPaymentPendingTableMap::COL_ARCUCUSTID, $this->arcucustid);
        $criteria->add(ArPaymentPendingTableMap::COL_ARCDINVNBR, $this->arcdinvnbr);
        $criteria->add(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $this->arcdinvseq);

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
        $validPk = null !== $this->getArcucustid() &&
            null !== $this->getArcdinvnbr() &&
            null !== $this->getArcdinvseq();

        $validPrimaryKeyFKs = 2;
        $primaryKeyFKs = [];

        //relation customer to table ar_cust_mast
        if ($this->aCustomer && $hash = spl_object_hash($this->aCustomer)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation header to table ar_cash_head
        if ($this->aArCashHead && $hash = spl_object_hash($this->aArCashHead)) {
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
        $pks[0] = $this->getArcucustid();
        $pks[1] = $this->getArcdinvnbr();
        $pks[2] = $this->getArcdinvseq();

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
        $this->setArcucustid($keys[0]);
        $this->setArcdinvnbr($keys[1]);
        $this->setArcdinvseq($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getArcucustid()) && (null === $this->getArcdinvnbr()) && (null === $this->getArcdinvseq());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ArPaymentPending (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArcdinvnbr($this->getArcdinvnbr());
        $copyObj->setArcdinvseq($this->getArcdinvseq());
        $copyObj->setArcdpaid($this->getArcdpaid());
        $copyObj->setArcdinvdate($this->getArcdinvdate());
        $copyObj->setArcdduedate($this->getArcdduedate());
        $copyObj->setArcdchknbr($this->getArcdchknbr());
        $copyObj->setArcdamtdue($this->getArcdamtdue());
        $copyObj->setArcdamtpaid($this->getArcdamtpaid());
        $copyObj->setArcddiscpaid($this->getArcddiscpaid());
        $copyObj->setArcdcashacct($this->getArcdcashacct());
        $copyObj->setArcdcredacct($this->getArcdcredacct());
        $copyObj->setArcdtermcode($this->getArcdtermcode());
        $copyObj->setArcdfrtallow($this->getArcdfrtallow());
        $copyObj->setArcdcustpo($this->getArcdcustpo());
        $copyObj->setArcdordrnbr($this->getArcdordrnbr());
        $copyObj->setArcdtaxcode1($this->getArcdtaxcode1());
        $copyObj->setArcdtaxallow1($this->getArcdtaxallow1());
        $copyObj->setArcdtaxcode2($this->getArcdtaxcode2());
        $copyObj->setArcdtaxallow2($this->getArcdtaxallow2());
        $copyObj->setArcdtaxcode3($this->getArcdtaxcode3());
        $copyObj->setArcdtaxallow3($this->getArcdtaxallow3());
        $copyObj->setArcdtaxcode4($this->getArcdtaxcode4());
        $copyObj->setArcdtaxallow4($this->getArcdtaxallow4());
        $copyObj->setArcdtaxcode5($this->getArcdtaxcode5());
        $copyObj->setArcdtaxallow5($this->getArcdtaxallow5());
        $copyObj->setArcdtaxcode6($this->getArcdtaxcode6());
        $copyObj->setArcdtaxallow6($this->getArcdtaxallow6());
        $copyObj->setArcdtaxcode7($this->getArcdtaxcode7());
        $copyObj->setArcdtaxallow7($this->getArcdtaxallow7());
        $copyObj->setArcdtaxcode8($this->getArcdtaxcode8());
        $copyObj->setArcdtaxallow8($this->getArcdtaxallow8());
        $copyObj->setArcdtaxcode9($this->getArcdtaxcode9());
        $copyObj->setArcdtaxallow9($this->getArcdtaxallow9());
        $copyObj->setArcdwriteoff($this->getArcdwriteoff());
        $copyObj->setArcdwriteoffreas($this->getArcdwriteoffreas());
        $copyObj->setArcdcomrate($this->getArcdcomrate());
        $copyObj->setArcdsalesamt($this->getArcdsalesamt());
        $copyObj->setArcdpaydate($this->getArcdpaydate());
        $copyObj->setArcdglpd($this->getArcdglpd());
        $copyObj->setArcdref($this->getArcdref());
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
     * @return \ArPaymentPending Clone of current object.
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
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     * @throws PropelException
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
            $v->addArPaymentPending($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomer object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCustomer The associated ChildCustomer object.
     * @throws PropelException
     */
    public function getCustomer(ConnectionInterface $con = null)
    {
        if ($this->aCustomer === null && (($this->arcucustid !== "" && $this->arcucustid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->arcucustid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addArPaymentPendings($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a ChildArCashHead object.
     *
     * @param  ChildArCashHead $v
     * @return $this|\ArPaymentPending The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArCashHead(ChildArCashHead $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aArCashHead = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildArCashHead object, it will not be re-added.
        if ($v !== null) {
            $v->addArPaymentPending($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildArCashHead object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildArCashHead The associated ChildArCashHead object.
     * @throws PropelException
     */
    public function getArCashHead(ConnectionInterface $con = null)
    {
        if ($this->aArCashHead === null && (($this->arcucustid !== "" && $this->arcucustid !== null))) {
            $this->aArCashHead = ChildArCashHeadQuery::create()->findPk($this->arcucustid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArCashHead->addArPaymentPendings($this);
             */
        }

        return $this->aArCashHead;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeArPaymentPending($this);
        }
        if (null !== $this->aArCashHead) {
            $this->aArCashHead->removeArPaymentPending($this);
        }
        $this->arcucustid = null;
        $this->arcdinvnbr = null;
        $this->arcdinvseq = null;
        $this->arcdpaid = null;
        $this->arcdinvdate = null;
        $this->arcdduedate = null;
        $this->arcdchknbr = null;
        $this->arcdamtdue = null;
        $this->arcdamtpaid = null;
        $this->arcddiscpaid = null;
        $this->arcdcashacct = null;
        $this->arcdcredacct = null;
        $this->arcdtermcode = null;
        $this->arcdfrtallow = null;
        $this->arcdcustpo = null;
        $this->arcdordrnbr = null;
        $this->arcdtaxcode1 = null;
        $this->arcdtaxallow1 = null;
        $this->arcdtaxcode2 = null;
        $this->arcdtaxallow2 = null;
        $this->arcdtaxcode3 = null;
        $this->arcdtaxallow3 = null;
        $this->arcdtaxcode4 = null;
        $this->arcdtaxallow4 = null;
        $this->arcdtaxcode5 = null;
        $this->arcdtaxallow5 = null;
        $this->arcdtaxcode6 = null;
        $this->arcdtaxallow6 = null;
        $this->arcdtaxcode7 = null;
        $this->arcdtaxallow7 = null;
        $this->arcdtaxcode8 = null;
        $this->arcdtaxallow8 = null;
        $this->arcdtaxcode9 = null;
        $this->arcdtaxallow9 = null;
        $this->arcdwriteoff = null;
        $this->arcdwriteoffreas = null;
        $this->arcdcomrate = null;
        $this->arcdsalesamt = null;
        $this->arcdpaydate = null;
        $this->arcdglpd = null;
        $this->arcdref = null;
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

        $this->aCustomer = null;
        $this->aArCashHead = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArPaymentPendingTableMap::DEFAULT_STRING_FORMAT);
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
