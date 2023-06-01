<?php

namespace Base;

use \ConfigCcQuery as ChildConfigCcQuery;
use \Exception;
use \PDO;
use Map\ConfigCcTableMap;
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
 * Base class that represents a row from the 'cc_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigCc implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigCcTableMap';


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
     * The value for the cctbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $cctbconfkey;

    /**
     * The value for the cctbconfcredline field.
     *
     * @var        int
     */
    protected $cctbconfcredline;

    /**
     * The value for the cctbconfcredcols field.
     *
     * @var        int
     */
    protected $cctbconfcredcols;

    /**
     * The value for the cctbconfnotestoredays field.
     *
     * @var        int
     */
    protected $cctbconfnotestoredays;

    /**
     * The value for the cctbconfavgmonths field.
     *
     * @var        int
     */
    protected $cctbconfavgmonths;

    /**
     * The value for the cctbconfavgfinchrg field.
     *
     * @var        string
     */
    protected $cctbconfavgfinchrg;

    /**
     * The value for the cctbconfallterms field.
     *
     * @var        string
     */
    protected $cctbconfallterms;

    /**
     * The value for the cctbconfterms01 field.
     *
     * @var        string
     */
    protected $cctbconfterms01;

    /**
     * The value for the cctbconfterms02 field.
     *
     * @var        string
     */
    protected $cctbconfterms02;

    /**
     * The value for the cctbconfterms03 field.
     *
     * @var        string
     */
    protected $cctbconfterms03;

    /**
     * The value for the cctbconfterms04 field.
     *
     * @var        string
     */
    protected $cctbconfterms04;

    /**
     * The value for the cctbconfterms05 field.
     *
     * @var        string
     */
    protected $cctbconfterms05;

    /**
     * The value for the cctbconfterms06 field.
     *
     * @var        string
     */
    protected $cctbconfterms06;

    /**
     * The value for the cctbconfterms07 field.
     *
     * @var        string
     */
    protected $cctbconfterms07;

    /**
     * The value for the cctbconfterms08 field.
     *
     * @var        string
     */
    protected $cctbconfterms08;

    /**
     * The value for the cctbconfterms09 field.
     *
     * @var        string
     */
    protected $cctbconfterms09;

    /**
     * The value for the cctbconfterms10 field.
     *
     * @var        string
     */
    protected $cctbconfterms10;

    /**
     * The value for the cctbconfterms11 field.
     *
     * @var        string
     */
    protected $cctbconfterms11;

    /**
     * The value for the cctbconfterms12 field.
     *
     * @var        string
     */
    protected $cctbconfterms12;

    /**
     * The value for the cctbconffutordrs field.
     *
     * @var        string
     */
    protected $cctbconffutordrs;

    /**
     * The value for the cctbconfpickticket field.
     *
     * @var        string
     */
    protected $cctbconfpickticket;

    /**
     * The value for the cctbconfpickalt field.
     *
     * @var        string
     */
    protected $cctbconfpickalt;

    /**
     * The value for the cctbconfpickrel field.
     *
     * @var        string
     */
    protected $cctbconfpickrel;

    /**
     * The value for the cctbconfuseodue field.
     *
     * @var        string
     */
    protected $cctbconfuseodue;

    /**
     * The value for the cctbconfagelevlhold field.
     *
     * @var        int
     */
    protected $cctbconfagelevlhold;

    /**
     * The value for the cctbconflevlamt field.
     *
     * @var        int
     */
    protected $cctbconflevlamt;

    /**
     * The value for the cctbconfusecredlmt field.
     *
     * @var        string
     */
    protected $cctbconfusecredlmt;

    /**
     * The value for the cctbconfpcttohold field.
     *
     * @var        string
     */
    protected $cctbconfpcttohold;

    /**
     * The value for the cctbconfaddcurr field.
     *
     * @var        string
     */
    protected $cctbconfaddcurr;

    /**
     * The value for the cctbconfminmarghold field.
     *
     * @var        string
     */
    protected $cctbconfminmarghold;

    /**
     * The value for the cctbconfminmargbase field.
     *
     * @var        string
     */
    protected $cctbconfminmargbase;

    /**
     * The value for the cctbconfhighlevlhold field.
     *
     * @var        string
     */
    protected $cctbconfhighlevlhold;

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
        $this->cctbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigCc object.
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
     * Compares this with another <code>ConfigCc</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigCc</code>, delegates to
     * <code>equals(ConfigCc)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigCc The current object, for fluid interface
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
     * Get the [cctbconfkey] column value.
     *
     * @return int
     */
    public function getCctbconfkey()
    {
        return $this->cctbconfkey;
    }

    /**
     * Get the [cctbconfcredline] column value.
     *
     * @return int
     */
    public function getCctbconfcredline()
    {
        return $this->cctbconfcredline;
    }

    /**
     * Get the [cctbconfcredcols] column value.
     *
     * @return int
     */
    public function getCctbconfcredcols()
    {
        return $this->cctbconfcredcols;
    }

    /**
     * Get the [cctbconfnotestoredays] column value.
     *
     * @return int
     */
    public function getCctbconfnotestoredays()
    {
        return $this->cctbconfnotestoredays;
    }

    /**
     * Get the [cctbconfavgmonths] column value.
     *
     * @return int
     */
    public function getCctbconfavgmonths()
    {
        return $this->cctbconfavgmonths;
    }

    /**
     * Get the [cctbconfavgfinchrg] column value.
     *
     * @return string
     */
    public function getCctbconfavgfinchrg()
    {
        return $this->cctbconfavgfinchrg;
    }

    /**
     * Get the [cctbconfallterms] column value.
     *
     * @return string
     */
    public function getCctbconfallterms()
    {
        return $this->cctbconfallterms;
    }

    /**
     * Get the [cctbconfterms01] column value.
     *
     * @return string
     */
    public function getCctbconfterms01()
    {
        return $this->cctbconfterms01;
    }

    /**
     * Get the [cctbconfterms02] column value.
     *
     * @return string
     */
    public function getCctbconfterms02()
    {
        return $this->cctbconfterms02;
    }

    /**
     * Get the [cctbconfterms03] column value.
     *
     * @return string
     */
    public function getCctbconfterms03()
    {
        return $this->cctbconfterms03;
    }

    /**
     * Get the [cctbconfterms04] column value.
     *
     * @return string
     */
    public function getCctbconfterms04()
    {
        return $this->cctbconfterms04;
    }

    /**
     * Get the [cctbconfterms05] column value.
     *
     * @return string
     */
    public function getCctbconfterms05()
    {
        return $this->cctbconfterms05;
    }

    /**
     * Get the [cctbconfterms06] column value.
     *
     * @return string
     */
    public function getCctbconfterms06()
    {
        return $this->cctbconfterms06;
    }

    /**
     * Get the [cctbconfterms07] column value.
     *
     * @return string
     */
    public function getCctbconfterms07()
    {
        return $this->cctbconfterms07;
    }

    /**
     * Get the [cctbconfterms08] column value.
     *
     * @return string
     */
    public function getCctbconfterms08()
    {
        return $this->cctbconfterms08;
    }

    /**
     * Get the [cctbconfterms09] column value.
     *
     * @return string
     */
    public function getCctbconfterms09()
    {
        return $this->cctbconfterms09;
    }

    /**
     * Get the [cctbconfterms10] column value.
     *
     * @return string
     */
    public function getCctbconfterms10()
    {
        return $this->cctbconfterms10;
    }

    /**
     * Get the [cctbconfterms11] column value.
     *
     * @return string
     */
    public function getCctbconfterms11()
    {
        return $this->cctbconfterms11;
    }

    /**
     * Get the [cctbconfterms12] column value.
     *
     * @return string
     */
    public function getCctbconfterms12()
    {
        return $this->cctbconfterms12;
    }

    /**
     * Get the [cctbconffutordrs] column value.
     *
     * @return string
     */
    public function getCctbconffutordrs()
    {
        return $this->cctbconffutordrs;
    }

    /**
     * Get the [cctbconfpickticket] column value.
     *
     * @return string
     */
    public function getCctbconfpickticket()
    {
        return $this->cctbconfpickticket;
    }

    /**
     * Get the [cctbconfpickalt] column value.
     *
     * @return string
     */
    public function getCctbconfpickalt()
    {
        return $this->cctbconfpickalt;
    }

    /**
     * Get the [cctbconfpickrel] column value.
     *
     * @return string
     */
    public function getCctbconfpickrel()
    {
        return $this->cctbconfpickrel;
    }

    /**
     * Get the [cctbconfuseodue] column value.
     *
     * @return string
     */
    public function getCctbconfuseodue()
    {
        return $this->cctbconfuseodue;
    }

    /**
     * Get the [cctbconfagelevlhold] column value.
     *
     * @return int
     */
    public function getCctbconfagelevlhold()
    {
        return $this->cctbconfagelevlhold;
    }

    /**
     * Get the [cctbconflevlamt] column value.
     *
     * @return int
     */
    public function getCctbconflevlamt()
    {
        return $this->cctbconflevlamt;
    }

    /**
     * Get the [cctbconfusecredlmt] column value.
     *
     * @return string
     */
    public function getCctbconfusecredlmt()
    {
        return $this->cctbconfusecredlmt;
    }

    /**
     * Get the [cctbconfpcttohold] column value.
     *
     * @return string
     */
    public function getCctbconfpcttohold()
    {
        return $this->cctbconfpcttohold;
    }

    /**
     * Get the [cctbconfaddcurr] column value.
     *
     * @return string
     */
    public function getCctbconfaddcurr()
    {
        return $this->cctbconfaddcurr;
    }

    /**
     * Get the [cctbconfminmarghold] column value.
     *
     * @return string
     */
    public function getCctbconfminmarghold()
    {
        return $this->cctbconfminmarghold;
    }

    /**
     * Get the [cctbconfminmargbase] column value.
     *
     * @return string
     */
    public function getCctbconfminmargbase()
    {
        return $this->cctbconfminmargbase;
    }

    /**
     * Get the [cctbconfhighlevlhold] column value.
     *
     * @return string
     */
    public function getCctbconfhighlevlhold()
    {
        return $this->cctbconfhighlevlhold;
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
     * Set the value of [cctbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cctbconfkey !== $v) {
            $this->cctbconfkey = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFKEY] = true;
        }

        return $this;
    } // setCctbconfkey()

    /**
     * Set the value of [cctbconfcredline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfcredline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cctbconfcredline !== $v) {
            $this->cctbconfcredline = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFCREDLINE] = true;
        }

        return $this;
    } // setCctbconfcredline()

    /**
     * Set the value of [cctbconfcredcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfcredcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cctbconfcredcols !== $v) {
            $this->cctbconfcredcols = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFCREDCOLS] = true;
        }

        return $this;
    } // setCctbconfcredcols()

    /**
     * Set the value of [cctbconfnotestoredays] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfnotestoredays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cctbconfnotestoredays !== $v) {
            $this->cctbconfnotestoredays = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS] = true;
        }

        return $this;
    } // setCctbconfnotestoredays()

    /**
     * Set the value of [cctbconfavgmonths] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfavgmonths($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cctbconfavgmonths !== $v) {
            $this->cctbconfavgmonths = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFAVGMONTHS] = true;
        }

        return $this;
    } // setCctbconfavgmonths()

    /**
     * Set the value of [cctbconfavgfinchrg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfavgfinchrg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfavgfinchrg !== $v) {
            $this->cctbconfavgfinchrg = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG] = true;
        }

        return $this;
    } // setCctbconfavgfinchrg()

    /**
     * Set the value of [cctbconfallterms] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfallterms($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfallterms !== $v) {
            $this->cctbconfallterms = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFALLTERMS] = true;
        }

        return $this;
    } // setCctbconfallterms()

    /**
     * Set the value of [cctbconfterms01] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms01 !== $v) {
            $this->cctbconfterms01 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS01] = true;
        }

        return $this;
    } // setCctbconfterms01()

    /**
     * Set the value of [cctbconfterms02] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms02 !== $v) {
            $this->cctbconfterms02 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS02] = true;
        }

        return $this;
    } // setCctbconfterms02()

    /**
     * Set the value of [cctbconfterms03] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms03 !== $v) {
            $this->cctbconfterms03 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS03] = true;
        }

        return $this;
    } // setCctbconfterms03()

    /**
     * Set the value of [cctbconfterms04] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms04 !== $v) {
            $this->cctbconfterms04 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS04] = true;
        }

        return $this;
    } // setCctbconfterms04()

    /**
     * Set the value of [cctbconfterms05] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms05 !== $v) {
            $this->cctbconfterms05 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS05] = true;
        }

        return $this;
    } // setCctbconfterms05()

    /**
     * Set the value of [cctbconfterms06] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms06 !== $v) {
            $this->cctbconfterms06 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS06] = true;
        }

        return $this;
    } // setCctbconfterms06()

    /**
     * Set the value of [cctbconfterms07] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms07 !== $v) {
            $this->cctbconfterms07 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS07] = true;
        }

        return $this;
    } // setCctbconfterms07()

    /**
     * Set the value of [cctbconfterms08] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms08 !== $v) {
            $this->cctbconfterms08 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS08] = true;
        }

        return $this;
    } // setCctbconfterms08()

    /**
     * Set the value of [cctbconfterms09] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms09 !== $v) {
            $this->cctbconfterms09 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS09] = true;
        }

        return $this;
    } // setCctbconfterms09()

    /**
     * Set the value of [cctbconfterms10] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms10 !== $v) {
            $this->cctbconfterms10 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS10] = true;
        }

        return $this;
    } // setCctbconfterms10()

    /**
     * Set the value of [cctbconfterms11] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms11 !== $v) {
            $this->cctbconfterms11 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS11] = true;
        }

        return $this;
    } // setCctbconfterms11()

    /**
     * Set the value of [cctbconfterms12] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfterms12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfterms12 !== $v) {
            $this->cctbconfterms12 = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFTERMS12] = true;
        }

        return $this;
    } // setCctbconfterms12()

    /**
     * Set the value of [cctbconffutordrs] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconffutordrs($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconffutordrs !== $v) {
            $this->cctbconffutordrs = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFFUTORDRS] = true;
        }

        return $this;
    } // setCctbconffutordrs()

    /**
     * Set the value of [cctbconfpickticket] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfpickticket($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfpickticket !== $v) {
            $this->cctbconfpickticket = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFPICKTICKET] = true;
        }

        return $this;
    } // setCctbconfpickticket()

    /**
     * Set the value of [cctbconfpickalt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfpickalt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfpickalt !== $v) {
            $this->cctbconfpickalt = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFPICKALT] = true;
        }

        return $this;
    } // setCctbconfpickalt()

    /**
     * Set the value of [cctbconfpickrel] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfpickrel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfpickrel !== $v) {
            $this->cctbconfpickrel = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFPICKREL] = true;
        }

        return $this;
    } // setCctbconfpickrel()

    /**
     * Set the value of [cctbconfuseodue] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfuseodue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfuseodue !== $v) {
            $this->cctbconfuseodue = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFUSEODUE] = true;
        }

        return $this;
    } // setCctbconfuseodue()

    /**
     * Set the value of [cctbconfagelevlhold] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfagelevlhold($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cctbconfagelevlhold !== $v) {
            $this->cctbconfagelevlhold = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD] = true;
        }

        return $this;
    } // setCctbconfagelevlhold()

    /**
     * Set the value of [cctbconflevlamt] column.
     *
     * @param int $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconflevlamt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cctbconflevlamt !== $v) {
            $this->cctbconflevlamt = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFLEVLAMT] = true;
        }

        return $this;
    } // setCctbconflevlamt()

    /**
     * Set the value of [cctbconfusecredlmt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfusecredlmt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfusecredlmt !== $v) {
            $this->cctbconfusecredlmt = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFUSECREDLMT] = true;
        }

        return $this;
    } // setCctbconfusecredlmt()

    /**
     * Set the value of [cctbconfpcttohold] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfpcttohold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfpcttohold !== $v) {
            $this->cctbconfpcttohold = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD] = true;
        }

        return $this;
    } // setCctbconfpcttohold()

    /**
     * Set the value of [cctbconfaddcurr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfaddcurr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfaddcurr !== $v) {
            $this->cctbconfaddcurr = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFADDCURR] = true;
        }

        return $this;
    } // setCctbconfaddcurr()

    /**
     * Set the value of [cctbconfminmarghold] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfminmarghold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfminmarghold !== $v) {
            $this->cctbconfminmarghold = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD] = true;
        }

        return $this;
    } // setCctbconfminmarghold()

    /**
     * Set the value of [cctbconfminmargbase] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfminmargbase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfminmargbase !== $v) {
            $this->cctbconfminmargbase = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFMINMARGBASE] = true;
        }

        return $this;
    } // setCctbconfminmargbase()

    /**
     * Set the value of [cctbconfhighlevlhold] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setCctbconfhighlevlhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cctbconfhighlevlhold !== $v) {
            $this->cctbconfhighlevlhold = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD] = true;
        }

        return $this;
    } // setCctbconfhighlevlhold()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigCc The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigCcTableMap::COL_DUMMY] = true;
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
            if ($this->cctbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfcredline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfcredline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfcredcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfcredcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfnotestoredays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfnotestoredays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfavgmonths', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfavgmonths = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfavgfinchrg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfavgfinchrg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfallterms', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfallterms = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfterms12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfterms12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconffutordrs', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconffutordrs = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfpickticket', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfpickticket = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfpickalt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfpickalt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfpickrel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfpickrel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfuseodue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfuseodue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfagelevlhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfagelevlhold = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconflevlamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconflevlamt = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfusecredlmt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfusecredlmt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfpcttohold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfpcttohold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfaddcurr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfaddcurr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfminmarghold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfminmarghold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfminmargbase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfminmargbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ConfigCcTableMap::translateFieldName('Cctbconfhighlevlhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cctbconfhighlevlhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ConfigCcTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ConfigCcTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ConfigCcTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 35; // 35 = ConfigCcTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigCc'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigCcTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigCcQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigCc::setDeleted()
     * @see ConfigCc::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCcTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigCcQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCcTableMap::DATABASE_NAME);
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
                ConfigCcTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfKey';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFCREDLINE)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfCredLine';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFCREDCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfCredCols';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfNoteStoreDays';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFAVGMONTHS)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfAvgMonths';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfAvgFinChrg';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFALLTERMS)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfAllTerms';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS01)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms01';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS02)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms02';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS03)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms03';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS04)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms04';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS05)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms05';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS06)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms06';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS07)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms07';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS08)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms08';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS09)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms09';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS10)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms10';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS11)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms11';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS12)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfTerms12';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFFUTORDRS)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfFutOrdrs';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFPICKTICKET)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfPickTicket';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFPICKALT)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfPickAlt';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFPICKREL)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfPickRel';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFUSEODUE)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfUseOdue';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfAgeLevlHold';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFLEVLAMT)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfLevlAmt';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFUSECREDLMT)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfUseCredLmt';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfPctToHold';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFADDCURR)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfAddCurr';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfMinMargHold';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFMINMARGBASE)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfMinMargBase';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'CctbConfHighLevlHold';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO cc_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'CctbConfKey':
                        $stmt->bindValue($identifier, $this->cctbconfkey, PDO::PARAM_INT);
                        break;
                    case 'CctbConfCredLine':
                        $stmt->bindValue($identifier, $this->cctbconfcredline, PDO::PARAM_INT);
                        break;
                    case 'CctbConfCredCols':
                        $stmt->bindValue($identifier, $this->cctbconfcredcols, PDO::PARAM_INT);
                        break;
                    case 'CctbConfNoteStoreDays':
                        $stmt->bindValue($identifier, $this->cctbconfnotestoredays, PDO::PARAM_INT);
                        break;
                    case 'CctbConfAvgMonths':
                        $stmt->bindValue($identifier, $this->cctbconfavgmonths, PDO::PARAM_INT);
                        break;
                    case 'CctbConfAvgFinChrg':
                        $stmt->bindValue($identifier, $this->cctbconfavgfinchrg, PDO::PARAM_STR);
                        break;
                    case 'CctbConfAllTerms':
                        $stmt->bindValue($identifier, $this->cctbconfallterms, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms01':
                        $stmt->bindValue($identifier, $this->cctbconfterms01, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms02':
                        $stmt->bindValue($identifier, $this->cctbconfterms02, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms03':
                        $stmt->bindValue($identifier, $this->cctbconfterms03, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms04':
                        $stmt->bindValue($identifier, $this->cctbconfterms04, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms05':
                        $stmt->bindValue($identifier, $this->cctbconfterms05, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms06':
                        $stmt->bindValue($identifier, $this->cctbconfterms06, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms07':
                        $stmt->bindValue($identifier, $this->cctbconfterms07, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms08':
                        $stmt->bindValue($identifier, $this->cctbconfterms08, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms09':
                        $stmt->bindValue($identifier, $this->cctbconfterms09, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms10':
                        $stmt->bindValue($identifier, $this->cctbconfterms10, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms11':
                        $stmt->bindValue($identifier, $this->cctbconfterms11, PDO::PARAM_STR);
                        break;
                    case 'CctbConfTerms12':
                        $stmt->bindValue($identifier, $this->cctbconfterms12, PDO::PARAM_STR);
                        break;
                    case 'CctbConfFutOrdrs':
                        $stmt->bindValue($identifier, $this->cctbconffutordrs, PDO::PARAM_STR);
                        break;
                    case 'CctbConfPickTicket':
                        $stmt->bindValue($identifier, $this->cctbconfpickticket, PDO::PARAM_STR);
                        break;
                    case 'CctbConfPickAlt':
                        $stmt->bindValue($identifier, $this->cctbconfpickalt, PDO::PARAM_STR);
                        break;
                    case 'CctbConfPickRel':
                        $stmt->bindValue($identifier, $this->cctbconfpickrel, PDO::PARAM_STR);
                        break;
                    case 'CctbConfUseOdue':
                        $stmt->bindValue($identifier, $this->cctbconfuseodue, PDO::PARAM_STR);
                        break;
                    case 'CctbConfAgeLevlHold':
                        $stmt->bindValue($identifier, $this->cctbconfagelevlhold, PDO::PARAM_INT);
                        break;
                    case 'CctbConfLevlAmt':
                        $stmt->bindValue($identifier, $this->cctbconflevlamt, PDO::PARAM_INT);
                        break;
                    case 'CctbConfUseCredLmt':
                        $stmt->bindValue($identifier, $this->cctbconfusecredlmt, PDO::PARAM_STR);
                        break;
                    case 'CctbConfPctToHold':
                        $stmt->bindValue($identifier, $this->cctbconfpcttohold, PDO::PARAM_STR);
                        break;
                    case 'CctbConfAddCurr':
                        $stmt->bindValue($identifier, $this->cctbconfaddcurr, PDO::PARAM_STR);
                        break;
                    case 'CctbConfMinMargHold':
                        $stmt->bindValue($identifier, $this->cctbconfminmarghold, PDO::PARAM_STR);
                        break;
                    case 'CctbConfMinMargBase':
                        $stmt->bindValue($identifier, $this->cctbconfminmargbase, PDO::PARAM_STR);
                        break;
                    case 'CctbConfHighLevlHold':
                        $stmt->bindValue($identifier, $this->cctbconfhighlevlhold, PDO::PARAM_STR);
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
        $pos = ConfigCcTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getCctbconfkey();
                break;
            case 1:
                return $this->getCctbconfcredline();
                break;
            case 2:
                return $this->getCctbconfcredcols();
                break;
            case 3:
                return $this->getCctbconfnotestoredays();
                break;
            case 4:
                return $this->getCctbconfavgmonths();
                break;
            case 5:
                return $this->getCctbconfavgfinchrg();
                break;
            case 6:
                return $this->getCctbconfallterms();
                break;
            case 7:
                return $this->getCctbconfterms01();
                break;
            case 8:
                return $this->getCctbconfterms02();
                break;
            case 9:
                return $this->getCctbconfterms03();
                break;
            case 10:
                return $this->getCctbconfterms04();
                break;
            case 11:
                return $this->getCctbconfterms05();
                break;
            case 12:
                return $this->getCctbconfterms06();
                break;
            case 13:
                return $this->getCctbconfterms07();
                break;
            case 14:
                return $this->getCctbconfterms08();
                break;
            case 15:
                return $this->getCctbconfterms09();
                break;
            case 16:
                return $this->getCctbconfterms10();
                break;
            case 17:
                return $this->getCctbconfterms11();
                break;
            case 18:
                return $this->getCctbconfterms12();
                break;
            case 19:
                return $this->getCctbconffutordrs();
                break;
            case 20:
                return $this->getCctbconfpickticket();
                break;
            case 21:
                return $this->getCctbconfpickalt();
                break;
            case 22:
                return $this->getCctbconfpickrel();
                break;
            case 23:
                return $this->getCctbconfuseodue();
                break;
            case 24:
                return $this->getCctbconfagelevlhold();
                break;
            case 25:
                return $this->getCctbconflevlamt();
                break;
            case 26:
                return $this->getCctbconfusecredlmt();
                break;
            case 27:
                return $this->getCctbconfpcttohold();
                break;
            case 28:
                return $this->getCctbconfaddcurr();
                break;
            case 29:
                return $this->getCctbconfminmarghold();
                break;
            case 30:
                return $this->getCctbconfminmargbase();
                break;
            case 31:
                return $this->getCctbconfhighlevlhold();
                break;
            case 32:
                return $this->getDateupdtd();
                break;
            case 33:
                return $this->getTimeupdtd();
                break;
            case 34:
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

        if (isset($alreadyDumpedObjects['ConfigCc'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigCc'][$this->hashCode()] = true;
        $keys = ConfigCcTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCctbconfkey(),
            $keys[1] => $this->getCctbconfcredline(),
            $keys[2] => $this->getCctbconfcredcols(),
            $keys[3] => $this->getCctbconfnotestoredays(),
            $keys[4] => $this->getCctbconfavgmonths(),
            $keys[5] => $this->getCctbconfavgfinchrg(),
            $keys[6] => $this->getCctbconfallterms(),
            $keys[7] => $this->getCctbconfterms01(),
            $keys[8] => $this->getCctbconfterms02(),
            $keys[9] => $this->getCctbconfterms03(),
            $keys[10] => $this->getCctbconfterms04(),
            $keys[11] => $this->getCctbconfterms05(),
            $keys[12] => $this->getCctbconfterms06(),
            $keys[13] => $this->getCctbconfterms07(),
            $keys[14] => $this->getCctbconfterms08(),
            $keys[15] => $this->getCctbconfterms09(),
            $keys[16] => $this->getCctbconfterms10(),
            $keys[17] => $this->getCctbconfterms11(),
            $keys[18] => $this->getCctbconfterms12(),
            $keys[19] => $this->getCctbconffutordrs(),
            $keys[20] => $this->getCctbconfpickticket(),
            $keys[21] => $this->getCctbconfpickalt(),
            $keys[22] => $this->getCctbconfpickrel(),
            $keys[23] => $this->getCctbconfuseodue(),
            $keys[24] => $this->getCctbconfagelevlhold(),
            $keys[25] => $this->getCctbconflevlamt(),
            $keys[26] => $this->getCctbconfusecredlmt(),
            $keys[27] => $this->getCctbconfpcttohold(),
            $keys[28] => $this->getCctbconfaddcurr(),
            $keys[29] => $this->getCctbconfminmarghold(),
            $keys[30] => $this->getCctbconfminmargbase(),
            $keys[31] => $this->getCctbconfhighlevlhold(),
            $keys[32] => $this->getDateupdtd(),
            $keys[33] => $this->getTimeupdtd(),
            $keys[34] => $this->getDummy(),
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
     * @return $this|\ConfigCc
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigCcTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigCc
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCctbconfkey($value);
                break;
            case 1:
                $this->setCctbconfcredline($value);
                break;
            case 2:
                $this->setCctbconfcredcols($value);
                break;
            case 3:
                $this->setCctbconfnotestoredays($value);
                break;
            case 4:
                $this->setCctbconfavgmonths($value);
                break;
            case 5:
                $this->setCctbconfavgfinchrg($value);
                break;
            case 6:
                $this->setCctbconfallterms($value);
                break;
            case 7:
                $this->setCctbconfterms01($value);
                break;
            case 8:
                $this->setCctbconfterms02($value);
                break;
            case 9:
                $this->setCctbconfterms03($value);
                break;
            case 10:
                $this->setCctbconfterms04($value);
                break;
            case 11:
                $this->setCctbconfterms05($value);
                break;
            case 12:
                $this->setCctbconfterms06($value);
                break;
            case 13:
                $this->setCctbconfterms07($value);
                break;
            case 14:
                $this->setCctbconfterms08($value);
                break;
            case 15:
                $this->setCctbconfterms09($value);
                break;
            case 16:
                $this->setCctbconfterms10($value);
                break;
            case 17:
                $this->setCctbconfterms11($value);
                break;
            case 18:
                $this->setCctbconfterms12($value);
                break;
            case 19:
                $this->setCctbconffutordrs($value);
                break;
            case 20:
                $this->setCctbconfpickticket($value);
                break;
            case 21:
                $this->setCctbconfpickalt($value);
                break;
            case 22:
                $this->setCctbconfpickrel($value);
                break;
            case 23:
                $this->setCctbconfuseodue($value);
                break;
            case 24:
                $this->setCctbconfagelevlhold($value);
                break;
            case 25:
                $this->setCctbconflevlamt($value);
                break;
            case 26:
                $this->setCctbconfusecredlmt($value);
                break;
            case 27:
                $this->setCctbconfpcttohold($value);
                break;
            case 28:
                $this->setCctbconfaddcurr($value);
                break;
            case 29:
                $this->setCctbconfminmarghold($value);
                break;
            case 30:
                $this->setCctbconfminmargbase($value);
                break;
            case 31:
                $this->setCctbconfhighlevlhold($value);
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
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = ConfigCcTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCctbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setCctbconfcredline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCctbconfcredcols($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCctbconfnotestoredays($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCctbconfavgmonths($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCctbconfavgfinchrg($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCctbconfallterms($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setCctbconfterms01($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCctbconfterms02($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCctbconfterms03($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setCctbconfterms04($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setCctbconfterms05($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setCctbconfterms06($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setCctbconfterms07($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setCctbconfterms08($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCctbconfterms09($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setCctbconfterms10($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setCctbconfterms11($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setCctbconfterms12($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setCctbconffutordrs($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setCctbconfpickticket($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setCctbconfpickalt($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setCctbconfpickrel($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setCctbconfuseodue($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setCctbconfagelevlhold($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setCctbconflevlamt($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setCctbconfusecredlmt($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setCctbconfpcttohold($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setCctbconfaddcurr($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setCctbconfminmarghold($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setCctbconfminmargbase($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setCctbconfhighlevlhold($arr[$keys[31]]);
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
     * @return $this|\ConfigCc The current object, for fluid interface
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
        $criteria = new Criteria(ConfigCcTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFKEY)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFKEY, $this->cctbconfkey);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFCREDLINE)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFCREDLINE, $this->cctbconfcredline);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFCREDCOLS)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFCREDCOLS, $this->cctbconfcredcols);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS, $this->cctbconfnotestoredays);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFAVGMONTHS)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFAVGMONTHS, $this->cctbconfavgmonths);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG, $this->cctbconfavgfinchrg);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFALLTERMS)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFALLTERMS, $this->cctbconfallterms);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS01)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS01, $this->cctbconfterms01);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS02)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS02, $this->cctbconfterms02);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS03)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS03, $this->cctbconfterms03);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS04)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS04, $this->cctbconfterms04);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS05)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS05, $this->cctbconfterms05);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS06)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS06, $this->cctbconfterms06);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS07)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS07, $this->cctbconfterms07);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS08)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS08, $this->cctbconfterms08);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS09)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS09, $this->cctbconfterms09);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS10)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS10, $this->cctbconfterms10);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS11)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS11, $this->cctbconfterms11);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFTERMS12)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFTERMS12, $this->cctbconfterms12);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFFUTORDRS)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFFUTORDRS, $this->cctbconffutordrs);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFPICKTICKET)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFPICKTICKET, $this->cctbconfpickticket);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFPICKALT)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFPICKALT, $this->cctbconfpickalt);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFPICKREL)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFPICKREL, $this->cctbconfpickrel);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFUSEODUE)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFUSEODUE, $this->cctbconfuseodue);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD, $this->cctbconfagelevlhold);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFLEVLAMT)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFLEVLAMT, $this->cctbconflevlamt);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFUSECREDLMT)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFUSECREDLMT, $this->cctbconfusecredlmt);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD, $this->cctbconfpcttohold);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFADDCURR)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFADDCURR, $this->cctbconfaddcurr);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD, $this->cctbconfminmarghold);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFMINMARGBASE)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFMINMARGBASE, $this->cctbconfminmargbase);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD)) {
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD, $this->cctbconfhighlevlhold);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigCcTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigCcTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigCcTableMap::COL_DUMMY)) {
            $criteria->add(ConfigCcTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigCcQuery::create();
        $criteria->add(ConfigCcTableMap::COL_CCTBCONFKEY, $this->cctbconfkey);

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
        $validPk = null !== $this->getCctbconfkey();

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
        return $this->getCctbconfkey();
    }

    /**
     * Generic method to set the primary key (cctbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCctbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCctbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigCc (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCctbconfkey($this->getCctbconfkey());
        $copyObj->setCctbconfcredline($this->getCctbconfcredline());
        $copyObj->setCctbconfcredcols($this->getCctbconfcredcols());
        $copyObj->setCctbconfnotestoredays($this->getCctbconfnotestoredays());
        $copyObj->setCctbconfavgmonths($this->getCctbconfavgmonths());
        $copyObj->setCctbconfavgfinchrg($this->getCctbconfavgfinchrg());
        $copyObj->setCctbconfallterms($this->getCctbconfallterms());
        $copyObj->setCctbconfterms01($this->getCctbconfterms01());
        $copyObj->setCctbconfterms02($this->getCctbconfterms02());
        $copyObj->setCctbconfterms03($this->getCctbconfterms03());
        $copyObj->setCctbconfterms04($this->getCctbconfterms04());
        $copyObj->setCctbconfterms05($this->getCctbconfterms05());
        $copyObj->setCctbconfterms06($this->getCctbconfterms06());
        $copyObj->setCctbconfterms07($this->getCctbconfterms07());
        $copyObj->setCctbconfterms08($this->getCctbconfterms08());
        $copyObj->setCctbconfterms09($this->getCctbconfterms09());
        $copyObj->setCctbconfterms10($this->getCctbconfterms10());
        $copyObj->setCctbconfterms11($this->getCctbconfterms11());
        $copyObj->setCctbconfterms12($this->getCctbconfterms12());
        $copyObj->setCctbconffutordrs($this->getCctbconffutordrs());
        $copyObj->setCctbconfpickticket($this->getCctbconfpickticket());
        $copyObj->setCctbconfpickalt($this->getCctbconfpickalt());
        $copyObj->setCctbconfpickrel($this->getCctbconfpickrel());
        $copyObj->setCctbconfuseodue($this->getCctbconfuseodue());
        $copyObj->setCctbconfagelevlhold($this->getCctbconfagelevlhold());
        $copyObj->setCctbconflevlamt($this->getCctbconflevlamt());
        $copyObj->setCctbconfusecredlmt($this->getCctbconfusecredlmt());
        $copyObj->setCctbconfpcttohold($this->getCctbconfpcttohold());
        $copyObj->setCctbconfaddcurr($this->getCctbconfaddcurr());
        $copyObj->setCctbconfminmarghold($this->getCctbconfminmarghold());
        $copyObj->setCctbconfminmargbase($this->getCctbconfminmargbase());
        $copyObj->setCctbconfhighlevlhold($this->getCctbconfhighlevlhold());
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
     * @return \ConfigCc Clone of current object.
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
        $this->cctbconfkey = null;
        $this->cctbconfcredline = null;
        $this->cctbconfcredcols = null;
        $this->cctbconfnotestoredays = null;
        $this->cctbconfavgmonths = null;
        $this->cctbconfavgfinchrg = null;
        $this->cctbconfallterms = null;
        $this->cctbconfterms01 = null;
        $this->cctbconfterms02 = null;
        $this->cctbconfterms03 = null;
        $this->cctbconfterms04 = null;
        $this->cctbconfterms05 = null;
        $this->cctbconfterms06 = null;
        $this->cctbconfterms07 = null;
        $this->cctbconfterms08 = null;
        $this->cctbconfterms09 = null;
        $this->cctbconfterms10 = null;
        $this->cctbconfterms11 = null;
        $this->cctbconfterms12 = null;
        $this->cctbconffutordrs = null;
        $this->cctbconfpickticket = null;
        $this->cctbconfpickalt = null;
        $this->cctbconfpickrel = null;
        $this->cctbconfuseodue = null;
        $this->cctbconfagelevlhold = null;
        $this->cctbconflevlamt = null;
        $this->cctbconfusecredlmt = null;
        $this->cctbconfpcttohold = null;
        $this->cctbconfaddcurr = null;
        $this->cctbconfminmarghold = null;
        $this->cctbconfminmargbase = null;
        $this->cctbconfhighlevlhold = null;
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
        return (string) $this->exportTo(ConfigCcTableMap::DEFAULT_STRING_FORMAT);
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
