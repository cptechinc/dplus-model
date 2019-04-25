<?php

namespace Base;

use \ArInvoiceQuery as ChildArInvoiceQuery;
use \Exception;
use \PDO;
use Map\ArInvoiceTableMap;
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
 * Base class that represents a row from the 'ar_inv' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ArInvoice implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ArInvoiceTableMap';


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
     * The value for the arininvnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arininvnbr;

    /**
     * The value for the arininvseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $arininvseq;

    /**
     * The value for the arintype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arintype;

    /**
     * The value for the arinseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $arinseq;

    /**
     * The value for the arinhold field.
     *
     * @var        string
     */
    protected $arinhold;

    /**
     * The value for the arininvdate field.
     *
     * @var        string
     */
    protected $arininvdate;

    /**
     * The value for the arindiscdate field.
     *
     * @var        string
     */
    protected $arindiscdate;

    /**
     * The value for the arinduedate field.
     *
     * @var        string
     */
    protected $arinduedate;

    /**
     * The value for the arintotamt field.
     *
     * @var        string
     */
    protected $arintotamt;

    /**
     * The value for the arindiscamt field.
     *
     * @var        string
     */
    protected $arindiscamt;

    /**
     * The value for the arinchknbr field.
     *
     * @var        string
     */
    protected $arinchknbr;

    /**
     * The value for the arincustpo field.
     *
     * @var        string
     */
    protected $arincustpo;

    /**
     * The value for the arintermcode field.
     *
     * @var        string
     */
    protected $arintermcode;

    /**
     * The value for the arinfrtallow field.
     *
     * @var        string
     */
    protected $arinfrtallow;

    /**
     * The value for the arinordrnbr field.
     *
     * @var        string
     */
    protected $arinordrnbr;

    /**
     * The value for the arincomrate field.
     *
     * @var        string
     */
    protected $arincomrate;

    /**
     * The value for the arinsalesamt field.
     *
     * @var        string
     */
    protected $arinsalesamt;

    /**
     * The value for the arinorigwhse field.
     *
     * @var        string
     */
    protected $arinorigwhse;

    /**
     * The value for the arinwriteoffdate field.
     *
     * @var        string
     */
    protected $arinwriteoffdate;

    /**
     * The value for the arinwriteoffamt field.
     *
     * @var        string
     */
    protected $arinwriteoffamt;

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
        $this->arcucustid = '';
        $this->arininvnbr = '';
        $this->arininvseq = 0;
        $this->arintype = '';
        $this->arinseq = 0;
    }

    /**
     * Initializes internal state of Base\ArInvoice object.
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
     * Compares this with another <code>ArInvoice</code> instance.  If
     * <code>obj</code> is an instance of <code>ArInvoice</code>, delegates to
     * <code>equals(ArInvoice)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ArInvoice The current object, for fluid interface
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
     * Get the [arininvnbr] column value.
     *
     * @return string
     */
    public function getArininvnbr()
    {
        return $this->arininvnbr;
    }

    /**
     * Get the [arininvseq] column value.
     *
     * @return int
     */
    public function getArininvseq()
    {
        return $this->arininvseq;
    }

    /**
     * Get the [arintype] column value.
     *
     * @return string
     */
    public function getArintype()
    {
        return $this->arintype;
    }

    /**
     * Get the [arinseq] column value.
     *
     * @return int
     */
    public function getArinseq()
    {
        return $this->arinseq;
    }

    /**
     * Get the [arinhold] column value.
     *
     * @return string
     */
    public function getArinhold()
    {
        return $this->arinhold;
    }

    /**
     * Get the [arininvdate] column value.
     *
     * @return string
     */
    public function getArininvdate()
    {
        return $this->arininvdate;
    }

    /**
     * Get the [arindiscdate] column value.
     *
     * @return string
     */
    public function getArindiscdate()
    {
        return $this->arindiscdate;
    }

    /**
     * Get the [arinduedate] column value.
     *
     * @return string
     */
    public function getArinduedate()
    {
        return $this->arinduedate;
    }

    /**
     * Get the [arintotamt] column value.
     *
     * @return string
     */
    public function getArintotamt()
    {
        return $this->arintotamt;
    }

    /**
     * Get the [arindiscamt] column value.
     *
     * @return string
     */
    public function getArindiscamt()
    {
        return $this->arindiscamt;
    }

    /**
     * Get the [arinchknbr] column value.
     *
     * @return string
     */
    public function getArinchknbr()
    {
        return $this->arinchknbr;
    }

    /**
     * Get the [arincustpo] column value.
     *
     * @return string
     */
    public function getArincustpo()
    {
        return $this->arincustpo;
    }

    /**
     * Get the [arintermcode] column value.
     *
     * @return string
     */
    public function getArintermcode()
    {
        return $this->arintermcode;
    }

    /**
     * Get the [arinfrtallow] column value.
     *
     * @return string
     */
    public function getArinfrtallow()
    {
        return $this->arinfrtallow;
    }

    /**
     * Get the [arinordrnbr] column value.
     *
     * @return string
     */
    public function getArinordrnbr()
    {
        return $this->arinordrnbr;
    }

    /**
     * Get the [arincomrate] column value.
     *
     * @return string
     */
    public function getArincomrate()
    {
        return $this->arincomrate;
    }

    /**
     * Get the [arinsalesamt] column value.
     *
     * @return string
     */
    public function getArinsalesamt()
    {
        return $this->arinsalesamt;
    }

    /**
     * Get the [arinorigwhse] column value.
     *
     * @return string
     */
    public function getArinorigwhse()
    {
        return $this->arinorigwhse;
    }

    /**
     * Get the [arinwriteoffdate] column value.
     *
     * @return string
     */
    public function getArinwriteoffdate()
    {
        return $this->arinwriteoffdate;
    }

    /**
     * Get the [arinwriteoffamt] column value.
     *
     * @return string
     */
    public function getArinwriteoffamt()
    {
        return $this->arinwriteoffamt;
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
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARCUCUSTID] = true;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arininvnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArininvnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arininvnbr !== $v) {
            $this->arininvnbr = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARININVNBR] = true;
        }

        return $this;
    } // setArininvnbr()

    /**
     * Set the value of [arininvseq] column.
     *
     * @param int $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArininvseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arininvseq !== $v) {
            $this->arininvseq = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARININVSEQ] = true;
        }

        return $this;
    } // setArininvseq()

    /**
     * Set the value of [arintype] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArintype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arintype !== $v) {
            $this->arintype = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINTYPE] = true;
        }

        return $this;
    } // setArintype()

    /**
     * Set the value of [arinseq] column.
     *
     * @param int $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arinseq !== $v) {
            $this->arinseq = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINSEQ] = true;
        }

        return $this;
    } // setArinseq()

    /**
     * Set the value of [arinhold] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinhold !== $v) {
            $this->arinhold = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINHOLD] = true;
        }

        return $this;
    } // setArinhold()

    /**
     * Set the value of [arininvdate] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArininvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arininvdate !== $v) {
            $this->arininvdate = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARININVDATE] = true;
        }

        return $this;
    } // setArininvdate()

    /**
     * Set the value of [arindiscdate] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArindiscdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arindiscdate !== $v) {
            $this->arindiscdate = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINDISCDATE] = true;
        }

        return $this;
    } // setArindiscdate()

    /**
     * Set the value of [arinduedate] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinduedate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinduedate !== $v) {
            $this->arinduedate = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINDUEDATE] = true;
        }

        return $this;
    } // setArinduedate()

    /**
     * Set the value of [arintotamt] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArintotamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arintotamt !== $v) {
            $this->arintotamt = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINTOTAMT] = true;
        }

        return $this;
    } // setArintotamt()

    /**
     * Set the value of [arindiscamt] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArindiscamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arindiscamt !== $v) {
            $this->arindiscamt = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINDISCAMT] = true;
        }

        return $this;
    } // setArindiscamt()

    /**
     * Set the value of [arinchknbr] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinchknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinchknbr !== $v) {
            $this->arinchknbr = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINCHKNBR] = true;
        }

        return $this;
    } // setArinchknbr()

    /**
     * Set the value of [arincustpo] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArincustpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arincustpo !== $v) {
            $this->arincustpo = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINCUSTPO] = true;
        }

        return $this;
    } // setArincustpo()

    /**
     * Set the value of [arintermcode] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArintermcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arintermcode !== $v) {
            $this->arintermcode = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINTERMCODE] = true;
        }

        return $this;
    } // setArintermcode()

    /**
     * Set the value of [arinfrtallow] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinfrtallow($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinfrtallow !== $v) {
            $this->arinfrtallow = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINFRTALLOW] = true;
        }

        return $this;
    } // setArinfrtallow()

    /**
     * Set the value of [arinordrnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinordrnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinordrnbr !== $v) {
            $this->arinordrnbr = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINORDRNBR] = true;
        }

        return $this;
    } // setArinordrnbr()

    /**
     * Set the value of [arincomrate] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArincomrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arincomrate !== $v) {
            $this->arincomrate = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINCOMRATE] = true;
        }

        return $this;
    } // setArincomrate()

    /**
     * Set the value of [arinsalesamt] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinsalesamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinsalesamt !== $v) {
            $this->arinsalesamt = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINSALESAMT] = true;
        }

        return $this;
    } // setArinsalesamt()

    /**
     * Set the value of [arinorigwhse] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinorigwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinorigwhse !== $v) {
            $this->arinorigwhse = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINORIGWHSE] = true;
        }

        return $this;
    } // setArinorigwhse()

    /**
     * Set the value of [arinwriteoffdate] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinwriteoffdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinwriteoffdate !== $v) {
            $this->arinwriteoffdate = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINWRITEOFFDATE] = true;
        }

        return $this;
    } // setArinwriteoffdate()

    /**
     * Set the value of [arinwriteoffamt] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setArinwriteoffamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arinwriteoffamt !== $v) {
            $this->arinwriteoffamt = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_ARINWRITEOFFAMT] = true;
        }

        return $this;
    } // setArinwriteoffamt()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ArInvoice The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ArInvoiceTableMap::COL_DUMMY] = true;
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

            if ($this->arininvnbr !== '') {
                return false;
            }

            if ($this->arininvseq !== 0) {
                return false;
            }

            if ($this->arintype !== '') {
                return false;
            }

            if ($this->arinseq !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ArInvoiceTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ArInvoiceTableMap::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arininvnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ArInvoiceTableMap::translateFieldName('Arininvseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arininvseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ArInvoiceTableMap::translateFieldName('Arintype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arintype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ArInvoiceTableMap::translateFieldName('Arinseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ArInvoiceTableMap::translateFieldName('Arinhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ArInvoiceTableMap::translateFieldName('Arininvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arininvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ArInvoiceTableMap::translateFieldName('Arindiscdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arindiscdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ArInvoiceTableMap::translateFieldName('Arinduedate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinduedate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ArInvoiceTableMap::translateFieldName('Arintotamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arintotamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ArInvoiceTableMap::translateFieldName('Arindiscamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arindiscamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ArInvoiceTableMap::translateFieldName('Arinchknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinchknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ArInvoiceTableMap::translateFieldName('Arincustpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arincustpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ArInvoiceTableMap::translateFieldName('Arintermcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arintermcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ArInvoiceTableMap::translateFieldName('Arinfrtallow', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinfrtallow = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ArInvoiceTableMap::translateFieldName('Arinordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinordrnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ArInvoiceTableMap::translateFieldName('Arincomrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arincomrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ArInvoiceTableMap::translateFieldName('Arinsalesamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinsalesamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ArInvoiceTableMap::translateFieldName('Arinorigwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinorigwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ArInvoiceTableMap::translateFieldName('Arinwriteoffdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinwriteoffdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ArInvoiceTableMap::translateFieldName('Arinwriteoffamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arinwriteoffamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ArInvoiceTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ArInvoiceTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ArInvoiceTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 24; // 24 = ArInvoiceTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ArInvoice'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ArInvoiceTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildArInvoiceQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ArInvoice::setDeleted()
     * @see ArInvoice::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArInvoiceTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildArInvoiceQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArInvoiceTableMap::DATABASE_NAME);
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
                ArInvoiceTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARININVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArinInvNbr';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARININVSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArinInvSeq';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'ArinType';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArinSeq';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'ArinHold';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARININVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArinInvDate';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINDISCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArinDiscDate';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINDUEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArinDueDate';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINTOTAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArinTotAmt';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINDISCAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArinDiscAmt';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINCHKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArinChkNbr';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINCUSTPO)) {
            $modifiedColumns[':p' . $index++]  = 'ArinCustPo';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINTERMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArinTermCode';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINFRTALLOW)) {
            $modifiedColumns[':p' . $index++]  = 'ArinFrtAllow';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArinOrdrNbr';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINCOMRATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArinComRate';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINSALESAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArinSalesAmt';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINORIGWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'ArinOrigWhse';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINWRITEOFFDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArinWriteOffDate';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINWRITEOFFAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArinWriteOffAmt';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_inv (%s) VALUES (%s)',
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
                    case 'ArinInvNbr':
                        $stmt->bindValue($identifier, $this->arininvnbr, PDO::PARAM_STR);
                        break;
                    case 'ArinInvSeq':
                        $stmt->bindValue($identifier, $this->arininvseq, PDO::PARAM_INT);
                        break;
                    case 'ArinType':
                        $stmt->bindValue($identifier, $this->arintype, PDO::PARAM_STR);
                        break;
                    case 'ArinSeq':
                        $stmt->bindValue($identifier, $this->arinseq, PDO::PARAM_INT);
                        break;
                    case 'ArinHold':
                        $stmt->bindValue($identifier, $this->arinhold, PDO::PARAM_STR);
                        break;
                    case 'ArinInvDate':
                        $stmt->bindValue($identifier, $this->arininvdate, PDO::PARAM_STR);
                        break;
                    case 'ArinDiscDate':
                        $stmt->bindValue($identifier, $this->arindiscdate, PDO::PARAM_STR);
                        break;
                    case 'ArinDueDate':
                        $stmt->bindValue($identifier, $this->arinduedate, PDO::PARAM_STR);
                        break;
                    case 'ArinTotAmt':
                        $stmt->bindValue($identifier, $this->arintotamt, PDO::PARAM_STR);
                        break;
                    case 'ArinDiscAmt':
                        $stmt->bindValue($identifier, $this->arindiscamt, PDO::PARAM_STR);
                        break;
                    case 'ArinChkNbr':
                        $stmt->bindValue($identifier, $this->arinchknbr, PDO::PARAM_STR);
                        break;
                    case 'ArinCustPo':
                        $stmt->bindValue($identifier, $this->arincustpo, PDO::PARAM_STR);
                        break;
                    case 'ArinTermCode':
                        $stmt->bindValue($identifier, $this->arintermcode, PDO::PARAM_STR);
                        break;
                    case 'ArinFrtAllow':
                        $stmt->bindValue($identifier, $this->arinfrtallow, PDO::PARAM_STR);
                        break;
                    case 'ArinOrdrNbr':
                        $stmt->bindValue($identifier, $this->arinordrnbr, PDO::PARAM_STR);
                        break;
                    case 'ArinComRate':
                        $stmt->bindValue($identifier, $this->arincomrate, PDO::PARAM_STR);
                        break;
                    case 'ArinSalesAmt':
                        $stmt->bindValue($identifier, $this->arinsalesamt, PDO::PARAM_STR);
                        break;
                    case 'ArinOrigWhse':
                        $stmt->bindValue($identifier, $this->arinorigwhse, PDO::PARAM_STR);
                        break;
                    case 'ArinWriteOffDate':
                        $stmt->bindValue($identifier, $this->arinwriteoffdate, PDO::PARAM_STR);
                        break;
                    case 'ArinWriteOffAmt':
                        $stmt->bindValue($identifier, $this->arinwriteoffamt, PDO::PARAM_STR);
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
        $pos = ArInvoiceTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArininvnbr();
                break;
            case 2:
                return $this->getArininvseq();
                break;
            case 3:
                return $this->getArintype();
                break;
            case 4:
                return $this->getArinseq();
                break;
            case 5:
                return $this->getArinhold();
                break;
            case 6:
                return $this->getArininvdate();
                break;
            case 7:
                return $this->getArindiscdate();
                break;
            case 8:
                return $this->getArinduedate();
                break;
            case 9:
                return $this->getArintotamt();
                break;
            case 10:
                return $this->getArindiscamt();
                break;
            case 11:
                return $this->getArinchknbr();
                break;
            case 12:
                return $this->getArincustpo();
                break;
            case 13:
                return $this->getArintermcode();
                break;
            case 14:
                return $this->getArinfrtallow();
                break;
            case 15:
                return $this->getArinordrnbr();
                break;
            case 16:
                return $this->getArincomrate();
                break;
            case 17:
                return $this->getArinsalesamt();
                break;
            case 18:
                return $this->getArinorigwhse();
                break;
            case 19:
                return $this->getArinwriteoffdate();
                break;
            case 20:
                return $this->getArinwriteoffamt();
                break;
            case 21:
                return $this->getDateupdtd();
                break;
            case 22:
                return $this->getTimeupdtd();
                break;
            case 23:
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

        if (isset($alreadyDumpedObjects['ArInvoice'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ArInvoice'][$this->hashCode()] = true;
        $keys = ArInvoiceTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArininvnbr(),
            $keys[2] => $this->getArininvseq(),
            $keys[3] => $this->getArintype(),
            $keys[4] => $this->getArinseq(),
            $keys[5] => $this->getArinhold(),
            $keys[6] => $this->getArininvdate(),
            $keys[7] => $this->getArindiscdate(),
            $keys[8] => $this->getArinduedate(),
            $keys[9] => $this->getArintotamt(),
            $keys[10] => $this->getArindiscamt(),
            $keys[11] => $this->getArinchknbr(),
            $keys[12] => $this->getArincustpo(),
            $keys[13] => $this->getArintermcode(),
            $keys[14] => $this->getArinfrtallow(),
            $keys[15] => $this->getArinordrnbr(),
            $keys[16] => $this->getArincomrate(),
            $keys[17] => $this->getArinsalesamt(),
            $keys[18] => $this->getArinorigwhse(),
            $keys[19] => $this->getArinwriteoffdate(),
            $keys[20] => $this->getArinwriteoffamt(),
            $keys[21] => $this->getDateupdtd(),
            $keys[22] => $this->getTimeupdtd(),
            $keys[23] => $this->getDummy(),
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
     * @return $this|\ArInvoice
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ArInvoiceTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ArInvoice
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setArininvnbr($value);
                break;
            case 2:
                $this->setArininvseq($value);
                break;
            case 3:
                $this->setArintype($value);
                break;
            case 4:
                $this->setArinseq($value);
                break;
            case 5:
                $this->setArinhold($value);
                break;
            case 6:
                $this->setArininvdate($value);
                break;
            case 7:
                $this->setArindiscdate($value);
                break;
            case 8:
                $this->setArinduedate($value);
                break;
            case 9:
                $this->setArintotamt($value);
                break;
            case 10:
                $this->setArindiscamt($value);
                break;
            case 11:
                $this->setArinchknbr($value);
                break;
            case 12:
                $this->setArincustpo($value);
                break;
            case 13:
                $this->setArintermcode($value);
                break;
            case 14:
                $this->setArinfrtallow($value);
                break;
            case 15:
                $this->setArinordrnbr($value);
                break;
            case 16:
                $this->setArincomrate($value);
                break;
            case 17:
                $this->setArinsalesamt($value);
                break;
            case 18:
                $this->setArinorigwhse($value);
                break;
            case 19:
                $this->setArinwriteoffdate($value);
                break;
            case 20:
                $this->setArinwriteoffamt($value);
                break;
            case 21:
                $this->setDateupdtd($value);
                break;
            case 22:
                $this->setTimeupdtd($value);
                break;
            case 23:
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
        $keys = ArInvoiceTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArininvnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArininvseq($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArintype($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArinseq($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArinhold($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArininvdate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArindiscdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArinduedate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArintotamt($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArindiscamt($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArinchknbr($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArincustpo($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArintermcode($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArinfrtallow($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArinordrnbr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArincomrate($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArinsalesamt($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArinorigwhse($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArinwriteoffdate($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setArinwriteoffamt($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setDateupdtd($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setTimeupdtd($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setDummy($arr[$keys[23]]);
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
     * @return $this|\ArInvoice The current object, for fluid interface
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
        $criteria = new Criteria(ArInvoiceTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARCUCUSTID)) {
            $criteria->add(ArInvoiceTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARININVNBR)) {
            $criteria->add(ArInvoiceTableMap::COL_ARININVNBR, $this->arininvnbr);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARININVSEQ)) {
            $criteria->add(ArInvoiceTableMap::COL_ARININVSEQ, $this->arininvseq);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINTYPE)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINTYPE, $this->arintype);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINSEQ)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINSEQ, $this->arinseq);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINHOLD)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINHOLD, $this->arinhold);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARININVDATE)) {
            $criteria->add(ArInvoiceTableMap::COL_ARININVDATE, $this->arininvdate);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINDISCDATE)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINDISCDATE, $this->arindiscdate);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINDUEDATE)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINDUEDATE, $this->arinduedate);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINTOTAMT)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINTOTAMT, $this->arintotamt);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINDISCAMT)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINDISCAMT, $this->arindiscamt);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINCHKNBR)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINCHKNBR, $this->arinchknbr);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINCUSTPO)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINCUSTPO, $this->arincustpo);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINTERMCODE)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINTERMCODE, $this->arintermcode);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINFRTALLOW)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINFRTALLOW, $this->arinfrtallow);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINORDRNBR)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINORDRNBR, $this->arinordrnbr);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINCOMRATE)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINCOMRATE, $this->arincomrate);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINSALESAMT)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINSALESAMT, $this->arinsalesamt);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINORIGWHSE)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINORIGWHSE, $this->arinorigwhse);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINWRITEOFFDATE)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINWRITEOFFDATE, $this->arinwriteoffdate);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_ARINWRITEOFFAMT)) {
            $criteria->add(ArInvoiceTableMap::COL_ARINWRITEOFFAMT, $this->arinwriteoffamt);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_DATEUPDTD)) {
            $criteria->add(ArInvoiceTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ArInvoiceTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ArInvoiceTableMap::COL_DUMMY)) {
            $criteria->add(ArInvoiceTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildArInvoiceQuery::create();
        $criteria->add(ArInvoiceTableMap::COL_ARCUCUSTID, $this->arcucustid);
        $criteria->add(ArInvoiceTableMap::COL_ARININVNBR, $this->arininvnbr);
        $criteria->add(ArInvoiceTableMap::COL_ARININVSEQ, $this->arininvseq);
        $criteria->add(ArInvoiceTableMap::COL_ARINTYPE, $this->arintype);
        $criteria->add(ArInvoiceTableMap::COL_ARINSEQ, $this->arinseq);

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
            null !== $this->getArininvnbr() &&
            null !== $this->getArininvseq() &&
            null !== $this->getArintype() &&
            null !== $this->getArinseq();

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
        $pks[0] = $this->getArcucustid();
        $pks[1] = $this->getArininvnbr();
        $pks[2] = $this->getArininvseq();
        $pks[3] = $this->getArintype();
        $pks[4] = $this->getArinseq();

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
        $this->setArininvnbr($keys[1]);
        $this->setArininvseq($keys[2]);
        $this->setArintype($keys[3]);
        $this->setArinseq($keys[4]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getArcucustid()) && (null === $this->getArininvnbr()) && (null === $this->getArininvseq()) && (null === $this->getArintype()) && (null === $this->getArinseq());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ArInvoice (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArininvnbr($this->getArininvnbr());
        $copyObj->setArininvseq($this->getArininvseq());
        $copyObj->setArintype($this->getArintype());
        $copyObj->setArinseq($this->getArinseq());
        $copyObj->setArinhold($this->getArinhold());
        $copyObj->setArininvdate($this->getArininvdate());
        $copyObj->setArindiscdate($this->getArindiscdate());
        $copyObj->setArinduedate($this->getArinduedate());
        $copyObj->setArintotamt($this->getArintotamt());
        $copyObj->setArindiscamt($this->getArindiscamt());
        $copyObj->setArinchknbr($this->getArinchknbr());
        $copyObj->setArincustpo($this->getArincustpo());
        $copyObj->setArintermcode($this->getArintermcode());
        $copyObj->setArinfrtallow($this->getArinfrtallow());
        $copyObj->setArinordrnbr($this->getArinordrnbr());
        $copyObj->setArincomrate($this->getArincomrate());
        $copyObj->setArinsalesamt($this->getArinsalesamt());
        $copyObj->setArinorigwhse($this->getArinorigwhse());
        $copyObj->setArinwriteoffdate($this->getArinwriteoffdate());
        $copyObj->setArinwriteoffamt($this->getArinwriteoffamt());
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
     * @return \ArInvoice Clone of current object.
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
        $this->arcucustid = null;
        $this->arininvnbr = null;
        $this->arininvseq = null;
        $this->arintype = null;
        $this->arinseq = null;
        $this->arinhold = null;
        $this->arininvdate = null;
        $this->arindiscdate = null;
        $this->arinduedate = null;
        $this->arintotamt = null;
        $this->arindiscamt = null;
        $this->arinchknbr = null;
        $this->arincustpo = null;
        $this->arintermcode = null;
        $this->arinfrtallow = null;
        $this->arinordrnbr = null;
        $this->arincomrate = null;
        $this->arinsalesamt = null;
        $this->arinorigwhse = null;
        $this->arinwriteoffdate = null;
        $this->arinwriteoffamt = null;
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
        return (string) $this->exportTo(ArInvoiceTableMap::DEFAULT_STRING_FORMAT);
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
