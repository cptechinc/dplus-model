<?php

namespace Base;

use \ApInvoiceDetailQuery as ChildApInvoiceDetailQuery;
use \Exception;
use \PDO;
use Map\ApInvoiceDetailTableMap;
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
 * Base class that represents a row from the 'ap_invoice_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ApInvoiceDetail implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ApInvoiceDetailTableMap';


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
     * The value for the apidpaytokey field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apidpaytokey;

    /**
     * The value for the apidptname field.
     *
     * @var        string
     */
    protected $apidptname;

    /**
     * The value for the apidptadr1 field.
     *
     * @var        string
     */
    protected $apidptadr1;

    /**
     * The value for the apidptadr2 field.
     *
     * @var        string
     */
    protected $apidptadr2;

    /**
     * The value for the apidptadr3 field.
     *
     * @var        string
     */
    protected $apidptadr3;

    /**
     * The value for the apidptctry field.
     *
     * @var        string
     */
    protected $apidptctry;

    /**
     * The value for the apidptcity field.
     *
     * @var        string
     */
    protected $apidptcity;

    /**
     * The value for the apidptstat field.
     *
     * @var        string
     */
    protected $apidptstat;

    /**
     * The value for the apidptzipcode field.
     *
     * @var        string
     */
    protected $apidptzipcode;

    /**
     * The value for the apidponbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apidponbr;

    /**
     * The value for the apidctrlnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apidctrlnbr;

    /**
     * The value for the apidinvnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apidinvnbr;

    /**
     * The value for the apidseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $apidseq;

    /**
     * The value for the apidline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $apidline;

    /**
     * The value for the apidamt field.
     *
     * @var        string
     */
    protected $apidamt;

    /**
     * The value for the apidglacct field.
     *
     * @var        string
     */
    protected $apidglacct;

    /**
     * The value for the inititemnbr field.
     *
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the apidqtyrec field.
     *
     * @var        string
     */
    protected $apidqtyrec;

    /**
     * The value for the apiddesc field.
     *
     * @var        string
     */
    protected $apiddesc;

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
        $this->apvevendid = '';
        $this->apidpaytokey = '';
        $this->apidponbr = '';
        $this->apidctrlnbr = '';
        $this->apidinvnbr = '';
        $this->apidseq = 0;
        $this->apidline = 0;
    }

    /**
     * Initializes internal state of Base\ApInvoiceDetail object.
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
     * Compares this with another <code>ApInvoiceDetail</code> instance.  If
     * <code>obj</code> is an instance of <code>ApInvoiceDetail</code>, delegates to
     * <code>equals(ApInvoiceDetail)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ApInvoiceDetail The current object, for fluid interface
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
     * Get the [apidpaytokey] column value.
     *
     * @return string
     */
    public function getApidpaytokey()
    {
        return $this->apidpaytokey;
    }

    /**
     * Get the [apidptname] column value.
     *
     * @return string
     */
    public function getApidptname()
    {
        return $this->apidptname;
    }

    /**
     * Get the [apidptadr1] column value.
     *
     * @return string
     */
    public function getApidptadr1()
    {
        return $this->apidptadr1;
    }

    /**
     * Get the [apidptadr2] column value.
     *
     * @return string
     */
    public function getApidptadr2()
    {
        return $this->apidptadr2;
    }

    /**
     * Get the [apidptadr3] column value.
     *
     * @return string
     */
    public function getApidptadr3()
    {
        return $this->apidptadr3;
    }

    /**
     * Get the [apidptctry] column value.
     *
     * @return string
     */
    public function getApidptctry()
    {
        return $this->apidptctry;
    }

    /**
     * Get the [apidptcity] column value.
     *
     * @return string
     */
    public function getApidptcity()
    {
        return $this->apidptcity;
    }

    /**
     * Get the [apidptstat] column value.
     *
     * @return string
     */
    public function getApidptstat()
    {
        return $this->apidptstat;
    }

    /**
     * Get the [apidptzipcode] column value.
     *
     * @return string
     */
    public function getApidptzipcode()
    {
        return $this->apidptzipcode;
    }

    /**
     * Get the [apidponbr] column value.
     *
     * @return string
     */
    public function getApidponbr()
    {
        return $this->apidponbr;
    }

    /**
     * Get the [apidctrlnbr] column value.
     *
     * @return string
     */
    public function getApidctrlnbr()
    {
        return $this->apidctrlnbr;
    }

    /**
     * Get the [apidinvnbr] column value.
     *
     * @return string
     */
    public function getApidinvnbr()
    {
        return $this->apidinvnbr;
    }

    /**
     * Get the [apidseq] column value.
     *
     * @return int
     */
    public function getApidseq()
    {
        return $this->apidseq;
    }

    /**
     * Get the [apidline] column value.
     *
     * @return int
     */
    public function getApidline()
    {
        return $this->apidline;
    }

    /**
     * Get the [apidamt] column value.
     *
     * @return string
     */
    public function getApidamt()
    {
        return $this->apidamt;
    }

    /**
     * Get the [apidglacct] column value.
     *
     * @return string
     */
    public function getApidglacct()
    {
        return $this->apidglacct;
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
     * Get the [apidqtyrec] column value.
     *
     * @return string
     */
    public function getApidqtyrec()
    {
        return $this->apidqtyrec;
    }

    /**
     * Get the [apiddesc] column value.
     *
     * @return string
     */
    public function getApiddesc()
    {
        return $this->apiddesc;
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
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APVEVENDID] = true;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [apidpaytokey] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidpaytokey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidpaytokey !== $v) {
            $this->apidpaytokey = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPAYTOKEY] = true;
        }

        return $this;
    } // setApidpaytokey()

    /**
     * Set the value of [apidptname] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidptname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidptname !== $v) {
            $this->apidptname = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPTNAME] = true;
        }

        return $this;
    } // setApidptname()

    /**
     * Set the value of [apidptadr1] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidptadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidptadr1 !== $v) {
            $this->apidptadr1 = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPTADR1] = true;
        }

        return $this;
    } // setApidptadr1()

    /**
     * Set the value of [apidptadr2] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidptadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidptadr2 !== $v) {
            $this->apidptadr2 = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPTADR2] = true;
        }

        return $this;
    } // setApidptadr2()

    /**
     * Set the value of [apidptadr3] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidptadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidptadr3 !== $v) {
            $this->apidptadr3 = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPTADR3] = true;
        }

        return $this;
    } // setApidptadr3()

    /**
     * Set the value of [apidptctry] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidptctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidptctry !== $v) {
            $this->apidptctry = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPTCTRY] = true;
        }

        return $this;
    } // setApidptctry()

    /**
     * Set the value of [apidptcity] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidptcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidptcity !== $v) {
            $this->apidptcity = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPTCITY] = true;
        }

        return $this;
    } // setApidptcity()

    /**
     * Set the value of [apidptstat] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidptstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidptstat !== $v) {
            $this->apidptstat = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPTSTAT] = true;
        }

        return $this;
    } // setApidptstat()

    /**
     * Set the value of [apidptzipcode] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidptzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidptzipcode !== $v) {
            $this->apidptzipcode = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPTZIPCODE] = true;
        }

        return $this;
    } // setApidptzipcode()

    /**
     * Set the value of [apidponbr] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidponbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidponbr !== $v) {
            $this->apidponbr = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDPONBR] = true;
        }

        return $this;
    } // setApidponbr()

    /**
     * Set the value of [apidctrlnbr] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidctrlnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidctrlnbr !== $v) {
            $this->apidctrlnbr = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDCTRLNBR] = true;
        }

        return $this;
    } // setApidctrlnbr()

    /**
     * Set the value of [apidinvnbr] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidinvnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidinvnbr !== $v) {
            $this->apidinvnbr = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDINVNBR] = true;
        }

        return $this;
    } // setApidinvnbr()

    /**
     * Set the value of [apidseq] column.
     *
     * @param int $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apidseq !== $v) {
            $this->apidseq = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDSEQ] = true;
        }

        return $this;
    } // setApidseq()

    /**
     * Set the value of [apidline] column.
     *
     * @param int $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apidline !== $v) {
            $this->apidline = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDLINE] = true;
        }

        return $this;
    } // setApidline()

    /**
     * Set the value of [apidamt] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidamt !== $v) {
            $this->apidamt = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDAMT] = true;
        }

        return $this;
    } // setApidamt()

    /**
     * Set the value of [apidglacct] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidglacct !== $v) {
            $this->apidglacct = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDGLACCT] = true;
        }

        return $this;
    } // setApidglacct()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [apidqtyrec] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApidqtyrec($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apidqtyrec !== $v) {
            $this->apidqtyrec = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDQTYREC] = true;
        }

        return $this;
    } // setApidqtyrec()

    /**
     * Set the value of [apiddesc] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setApiddesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apiddesc !== $v) {
            $this->apiddesc = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_APIDDESC] = true;
        }

        return $this;
    } // setApiddesc()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ApInvoiceDetail The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ApInvoiceDetailTableMap::COL_DUMMY] = true;
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

            if ($this->apidpaytokey !== '') {
                return false;
            }

            if ($this->apidponbr !== '') {
                return false;
            }

            if ($this->apidctrlnbr !== '') {
                return false;
            }

            if ($this->apidinvnbr !== '') {
                return false;
            }

            if ($this->apidseq !== 0) {
                return false;
            }

            if ($this->apidline !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidpaytokey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidpaytokey = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidptname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidptname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidptadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidptadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidptadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidptadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidptadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidptadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidptctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidptctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidptcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidptcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidptstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidptstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidptzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidptzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidponbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidponbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidctrlnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidctrlnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidinvnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidinvnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apidqtyrec', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apidqtyrec = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Apiddesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apiddesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ApInvoiceDetailTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = ApInvoiceDetailTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ApInvoiceDetail'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildApInvoiceDetailQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ApInvoiceDetail::setDeleted()
     * @see ApInvoiceDetail::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildApInvoiceDetailQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
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
                ApInvoiceDetailTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPayToKey';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPtName';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPtAdr1';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPtAdr2';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPtAdr3';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPtCtry';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPtCity';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPtStat';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPtZipCode';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPONBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApidPoNbr';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDCTRLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApidCtrlNbr';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDINVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApidInvNbr';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ApidSeq';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDLINE)) {
            $modifiedColumns[':p' . $index++]  = 'ApidLine';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ApidAmt';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ApidGlAcct';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDQTYREC)) {
            $modifiedColumns[':p' . $index++]  = 'ApidQtyRec';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDDESC)) {
            $modifiedColumns[':p' . $index++]  = 'ApidDesc';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ap_invoice_det (%s) VALUES (%s)',
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
                    case 'ApidPayToKey':
                        $stmt->bindValue($identifier, $this->apidpaytokey, PDO::PARAM_STR);
                        break;
                    case 'ApidPtName':
                        $stmt->bindValue($identifier, $this->apidptname, PDO::PARAM_STR);
                        break;
                    case 'ApidPtAdr1':
                        $stmt->bindValue($identifier, $this->apidptadr1, PDO::PARAM_STR);
                        break;
                    case 'ApidPtAdr2':
                        $stmt->bindValue($identifier, $this->apidptadr2, PDO::PARAM_STR);
                        break;
                    case 'ApidPtAdr3':
                        $stmt->bindValue($identifier, $this->apidptadr3, PDO::PARAM_STR);
                        break;
                    case 'ApidPtCtry':
                        $stmt->bindValue($identifier, $this->apidptctry, PDO::PARAM_STR);
                        break;
                    case 'ApidPtCity':
                        $stmt->bindValue($identifier, $this->apidptcity, PDO::PARAM_STR);
                        break;
                    case 'ApidPtStat':
                        $stmt->bindValue($identifier, $this->apidptstat, PDO::PARAM_STR);
                        break;
                    case 'ApidPtZipCode':
                        $stmt->bindValue($identifier, $this->apidptzipcode, PDO::PARAM_STR);
                        break;
                    case 'ApidPoNbr':
                        $stmt->bindValue($identifier, $this->apidponbr, PDO::PARAM_STR);
                        break;
                    case 'ApidCtrlNbr':
                        $stmt->bindValue($identifier, $this->apidctrlnbr, PDO::PARAM_STR);
                        break;
                    case 'ApidInvNbr':
                        $stmt->bindValue($identifier, $this->apidinvnbr, PDO::PARAM_STR);
                        break;
                    case 'ApidSeq':
                        $stmt->bindValue($identifier, $this->apidseq, PDO::PARAM_INT);
                        break;
                    case 'ApidLine':
                        $stmt->bindValue($identifier, $this->apidline, PDO::PARAM_INT);
                        break;
                    case 'ApidAmt':
                        $stmt->bindValue($identifier, $this->apidamt, PDO::PARAM_STR);
                        break;
                    case 'ApidGlAcct':
                        $stmt->bindValue($identifier, $this->apidglacct, PDO::PARAM_STR);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'ApidQtyRec':
                        $stmt->bindValue($identifier, $this->apidqtyrec, PDO::PARAM_STR);
                        break;
                    case 'ApidDesc':
                        $stmt->bindValue($identifier, $this->apiddesc, PDO::PARAM_STR);
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
        $pos = ApInvoiceDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getApidpaytokey();
                break;
            case 2:
                return $this->getApidptname();
                break;
            case 3:
                return $this->getApidptadr1();
                break;
            case 4:
                return $this->getApidptadr2();
                break;
            case 5:
                return $this->getApidptadr3();
                break;
            case 6:
                return $this->getApidptctry();
                break;
            case 7:
                return $this->getApidptcity();
                break;
            case 8:
                return $this->getApidptstat();
                break;
            case 9:
                return $this->getApidptzipcode();
                break;
            case 10:
                return $this->getApidponbr();
                break;
            case 11:
                return $this->getApidctrlnbr();
                break;
            case 12:
                return $this->getApidinvnbr();
                break;
            case 13:
                return $this->getApidseq();
                break;
            case 14:
                return $this->getApidline();
                break;
            case 15:
                return $this->getApidamt();
                break;
            case 16:
                return $this->getApidglacct();
                break;
            case 17:
                return $this->getInititemnbr();
                break;
            case 18:
                return $this->getApidqtyrec();
                break;
            case 19:
                return $this->getApiddesc();
                break;
            case 20:
                return $this->getDateupdtd();
                break;
            case 21:
                return $this->getTimeupdtd();
                break;
            case 22:
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

        if (isset($alreadyDumpedObjects['ApInvoiceDetail'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ApInvoiceDetail'][$this->hashCode()] = true;
        $keys = ApInvoiceDetailTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getApvevendid(),
            $keys[1] => $this->getApidpaytokey(),
            $keys[2] => $this->getApidptname(),
            $keys[3] => $this->getApidptadr1(),
            $keys[4] => $this->getApidptadr2(),
            $keys[5] => $this->getApidptadr3(),
            $keys[6] => $this->getApidptctry(),
            $keys[7] => $this->getApidptcity(),
            $keys[8] => $this->getApidptstat(),
            $keys[9] => $this->getApidptzipcode(),
            $keys[10] => $this->getApidponbr(),
            $keys[11] => $this->getApidctrlnbr(),
            $keys[12] => $this->getApidinvnbr(),
            $keys[13] => $this->getApidseq(),
            $keys[14] => $this->getApidline(),
            $keys[15] => $this->getApidamt(),
            $keys[16] => $this->getApidglacct(),
            $keys[17] => $this->getInititemnbr(),
            $keys[18] => $this->getApidqtyrec(),
            $keys[19] => $this->getApiddesc(),
            $keys[20] => $this->getDateupdtd(),
            $keys[21] => $this->getTimeupdtd(),
            $keys[22] => $this->getDummy(),
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
     * @return $this|\ApInvoiceDetail
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ApInvoiceDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ApInvoiceDetail
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setApvevendid($value);
                break;
            case 1:
                $this->setApidpaytokey($value);
                break;
            case 2:
                $this->setApidptname($value);
                break;
            case 3:
                $this->setApidptadr1($value);
                break;
            case 4:
                $this->setApidptadr2($value);
                break;
            case 5:
                $this->setApidptadr3($value);
                break;
            case 6:
                $this->setApidptctry($value);
                break;
            case 7:
                $this->setApidptcity($value);
                break;
            case 8:
                $this->setApidptstat($value);
                break;
            case 9:
                $this->setApidptzipcode($value);
                break;
            case 10:
                $this->setApidponbr($value);
                break;
            case 11:
                $this->setApidctrlnbr($value);
                break;
            case 12:
                $this->setApidinvnbr($value);
                break;
            case 13:
                $this->setApidseq($value);
                break;
            case 14:
                $this->setApidline($value);
                break;
            case 15:
                $this->setApidamt($value);
                break;
            case 16:
                $this->setApidglacct($value);
                break;
            case 17:
                $this->setInititemnbr($value);
                break;
            case 18:
                $this->setApidqtyrec($value);
                break;
            case 19:
                $this->setApiddesc($value);
                break;
            case 20:
                $this->setDateupdtd($value);
                break;
            case 21:
                $this->setTimeupdtd($value);
                break;
            case 22:
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
        $keys = ApInvoiceDetailTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setApvevendid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setApidpaytokey($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setApidptname($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setApidptadr1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setApidptadr2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setApidptadr3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setApidptctry($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setApidptcity($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setApidptstat($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setApidptzipcode($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setApidponbr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setApidctrlnbr($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setApidinvnbr($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setApidseq($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setApidline($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setApidamt($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setApidglacct($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInititemnbr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setApidqtyrec($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setApiddesc($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDateupdtd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setTimeupdtd($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setDummy($arr[$keys[22]]);
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
     * @return $this|\ApInvoiceDetail The current object, for fluid interface
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
        $criteria = new Criteria(ApInvoiceDetailTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APVEVENDID)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $this->apidpaytokey);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTNAME)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPTNAME, $this->apidptname);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTADR1)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPTADR1, $this->apidptadr1);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTADR2)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPTADR2, $this->apidptadr2);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTADR3)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPTADR3, $this->apidptadr3);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTCTRY)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPTCTRY, $this->apidptctry);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTCITY)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPTCITY, $this->apidptcity);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTSTAT)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPTSTAT, $this->apidptstat);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPTZIPCODE)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPTZIPCODE, $this->apidptzipcode);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDPONBR)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDPONBR, $this->apidponbr);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDCTRLNBR)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $this->apidctrlnbr);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDINVNBR)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDINVNBR, $this->apidinvnbr);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDSEQ)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDSEQ, $this->apidseq);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDLINE)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDLINE, $this->apidline);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDAMT)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDAMT, $this->apidamt);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDGLACCT)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDGLACCT, $this->apidglacct);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_INITITEMNBR)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDQTYREC)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDQTYREC, $this->apidqtyrec);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_APIDDESC)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_APIDDESC, $this->apiddesc);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_DATEUPDTD)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ApInvoiceDetailTableMap::COL_DUMMY)) {
            $criteria->add(ApInvoiceDetailTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildApInvoiceDetailQuery::create();
        $criteria->add(ApInvoiceDetailTableMap::COL_APVEVENDID, $this->apvevendid);
        $criteria->add(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $this->apidpaytokey);
        $criteria->add(ApInvoiceDetailTableMap::COL_APIDPONBR, $this->apidponbr);
        $criteria->add(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $this->apidctrlnbr);
        $criteria->add(ApInvoiceDetailTableMap::COL_APIDINVNBR, $this->apidinvnbr);
        $criteria->add(ApInvoiceDetailTableMap::COL_APIDSEQ, $this->apidseq);
        $criteria->add(ApInvoiceDetailTableMap::COL_APIDLINE, $this->apidline);

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
            null !== $this->getApidpaytokey() &&
            null !== $this->getApidponbr() &&
            null !== $this->getApidctrlnbr() &&
            null !== $this->getApidinvnbr() &&
            null !== $this->getApidseq() &&
            null !== $this->getApidline();

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
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getApvevendid();
        $pks[1] = $this->getApidpaytokey();
        $pks[2] = $this->getApidponbr();
        $pks[3] = $this->getApidctrlnbr();
        $pks[4] = $this->getApidinvnbr();
        $pks[5] = $this->getApidseq();
        $pks[6] = $this->getApidline();

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
        $this->setApidpaytokey($keys[1]);
        $this->setApidponbr($keys[2]);
        $this->setApidctrlnbr($keys[3]);
        $this->setApidinvnbr($keys[4]);
        $this->setApidseq($keys[5]);
        $this->setApidline($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getApvevendid()) && (null === $this->getApidpaytokey()) && (null === $this->getApidponbr()) && (null === $this->getApidctrlnbr()) && (null === $this->getApidinvnbr()) && (null === $this->getApidseq()) && (null === $this->getApidline());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ApInvoiceDetail (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setApidpaytokey($this->getApidpaytokey());
        $copyObj->setApidptname($this->getApidptname());
        $copyObj->setApidptadr1($this->getApidptadr1());
        $copyObj->setApidptadr2($this->getApidptadr2());
        $copyObj->setApidptadr3($this->getApidptadr3());
        $copyObj->setApidptctry($this->getApidptctry());
        $copyObj->setApidptcity($this->getApidptcity());
        $copyObj->setApidptstat($this->getApidptstat());
        $copyObj->setApidptzipcode($this->getApidptzipcode());
        $copyObj->setApidponbr($this->getApidponbr());
        $copyObj->setApidctrlnbr($this->getApidctrlnbr());
        $copyObj->setApidinvnbr($this->getApidinvnbr());
        $copyObj->setApidseq($this->getApidseq());
        $copyObj->setApidline($this->getApidline());
        $copyObj->setApidamt($this->getApidamt());
        $copyObj->setApidglacct($this->getApidglacct());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setApidqtyrec($this->getApidqtyrec());
        $copyObj->setApiddesc($this->getApiddesc());
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
     * @return \ApInvoiceDetail Clone of current object.
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
        $this->apvevendid = null;
        $this->apidpaytokey = null;
        $this->apidptname = null;
        $this->apidptadr1 = null;
        $this->apidptadr2 = null;
        $this->apidptadr3 = null;
        $this->apidptctry = null;
        $this->apidptcity = null;
        $this->apidptstat = null;
        $this->apidptzipcode = null;
        $this->apidponbr = null;
        $this->apidctrlnbr = null;
        $this->apidinvnbr = null;
        $this->apidseq = null;
        $this->apidline = null;
        $this->apidamt = null;
        $this->apidglacct = null;
        $this->inititemnbr = null;
        $this->apidqtyrec = null;
        $this->apiddesc = null;
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
        return (string) $this->exportTo(ApInvoiceDetailTableMap::DEFAULT_STRING_FORMAT);
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
