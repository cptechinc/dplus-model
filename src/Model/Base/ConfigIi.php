<?php

namespace Base;

use \ConfigIiQuery as ChildConfigIiQuery;
use \Exception;
use \PDO;
use Map\ConfigIiTableMap;
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
 * Base class that represents a row from the 'ii_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigIi implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigIiTableMap';


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
     * The value for the iitbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $iitbconfkey;

    /**
     * The value for the iitbconfonewhse field.
     *
     * @var        string
     */
    protected $iitbconfonewhse;

    /**
     * The value for the iitbconfdefwhse field.
     *
     * @var        string
     */
    protected $iitbconfdefwhse;

    /**
     * The value for the iitbconfytdstrtmo field.
     *
     * @var        int
     */
    protected $iitbconfytdstrtmo;

    /**
     * The value for the iitbconfusecustwhse field.
     *
     * @var        string
     */
    protected $iitbconfusecustwhse;

    /**
     * The value for the iitbconfwuorvqw field.
     *
     * @var        string
     */
    protected $iitbconfwuorvqw;

    /**
     * The value for the iitbconfqorls field.
     *
     * @var        string
     */
    protected $iitbconfqorls;

    /**
     * The value for the iitbconfinqcode field.
     *
     * @var        string
     */
    protected $iitbconfinqcode;

    /**
     * The value for the iitbconfpricsect field.
     *
     * @var        string
     */
    protected $iitbconfpricsect;

    /**
     * The value for the iitbconfsrchupcalias field.
     *
     * @var        string
     */
    protected $iitbconfsrchupcalias;

    /**
     * The value for the iitbconflotbin field.
     *
     * @var        string
     */
    protected $iitbconflotbin;

    /**
     * The value for the iitbconfoneitem field.
     *
     * @var        string
     */
    protected $iitbconfoneitem;

    /**
     * The value for the iitbconfitemtotals field.
     *
     * @var        string
     */
    protected $iitbconfitemtotals;

    /**
     * The value for the iitbconfmonthsusage field.
     *
     * @var        int
     */
    protected $iitbconfmonthsusage;

    /**
     * The value for the iitbconftora field.
     *
     * @var        string
     */
    protected $iitbconftora;

    /**
     * The value for the iitbconfunitcost field.
     *
     * @var        string
     */
    protected $iitbconfunitcost;

    /**
     * The value for the iitbconfformulaoption field.
     *
     * @var        int
     */
    protected $iitbconfformulaoption;

    /**
     * The value for the iitbconftranssep field.
     *
     * @var        string
     */
    protected $iitbconftranssep;

    /**
     * The value for the iitbconfdispbindet field.
     *
     * @var        string
     */
    protected $iitbconfdispbindet;

    /**
     * The value for the iitbconfshdateorcust field.
     *
     * @var        string
     */
    protected $iitbconfshdateorcust;

    /**
     * The value for the iitbconfshzeroship field.
     *
     * @var        string
     */
    protected $iitbconfshzeroship;

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
        $this->iitbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigIi object.
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
     * Compares this with another <code>ConfigIi</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigIi</code>, delegates to
     * <code>equals(ConfigIi)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigIi The current object, for fluid interface
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
     * Get the [iitbconfkey] column value.
     *
     * @return int
     */
    public function getIitbconfkey()
    {
        return $this->iitbconfkey;
    }

    /**
     * Get the [iitbconfonewhse] column value.
     *
     * @return string
     */
    public function getIitbconfonewhse()
    {
        return $this->iitbconfonewhse;
    }

    /**
     * Get the [iitbconfdefwhse] column value.
     *
     * @return string
     */
    public function getIitbconfdefwhse()
    {
        return $this->iitbconfdefwhse;
    }

    /**
     * Get the [iitbconfytdstrtmo] column value.
     *
     * @return int
     */
    public function getIitbconfytdstrtmo()
    {
        return $this->iitbconfytdstrtmo;
    }

    /**
     * Get the [iitbconfusecustwhse] column value.
     *
     * @return string
     */
    public function getIitbconfusecustwhse()
    {
        return $this->iitbconfusecustwhse;
    }

    /**
     * Get the [iitbconfwuorvqw] column value.
     *
     * @return string
     */
    public function getIitbconfwuorvqw()
    {
        return $this->iitbconfwuorvqw;
    }

    /**
     * Get the [iitbconfqorls] column value.
     *
     * @return string
     */
    public function getIitbconfqorls()
    {
        return $this->iitbconfqorls;
    }

    /**
     * Get the [iitbconfinqcode] column value.
     *
     * @return string
     */
    public function getIitbconfinqcode()
    {
        return $this->iitbconfinqcode;
    }

    /**
     * Get the [iitbconfpricsect] column value.
     *
     * @return string
     */
    public function getIitbconfpricsect()
    {
        return $this->iitbconfpricsect;
    }

    /**
     * Get the [iitbconfsrchupcalias] column value.
     *
     * @return string
     */
    public function getIitbconfsrchupcalias()
    {
        return $this->iitbconfsrchupcalias;
    }

    /**
     * Get the [iitbconflotbin] column value.
     *
     * @return string
     */
    public function getIitbconflotbin()
    {
        return $this->iitbconflotbin;
    }

    /**
     * Get the [iitbconfoneitem] column value.
     *
     * @return string
     */
    public function getIitbconfoneitem()
    {
        return $this->iitbconfoneitem;
    }

    /**
     * Get the [iitbconfitemtotals] column value.
     *
     * @return string
     */
    public function getIitbconfitemtotals()
    {
        return $this->iitbconfitemtotals;
    }

    /**
     * Get the [iitbconfmonthsusage] column value.
     *
     * @return int
     */
    public function getIitbconfmonthsusage()
    {
        return $this->iitbconfmonthsusage;
    }

    /**
     * Get the [iitbconftora] column value.
     *
     * @return string
     */
    public function getIitbconftora()
    {
        return $this->iitbconftora;
    }

    /**
     * Get the [iitbconfunitcost] column value.
     *
     * @return string
     */
    public function getIitbconfunitcost()
    {
        return $this->iitbconfunitcost;
    }

    /**
     * Get the [iitbconfformulaoption] column value.
     *
     * @return int
     */
    public function getIitbconfformulaoption()
    {
        return $this->iitbconfformulaoption;
    }

    /**
     * Get the [iitbconftranssep] column value.
     *
     * @return string
     */
    public function getIitbconftranssep()
    {
        return $this->iitbconftranssep;
    }

    /**
     * Get the [iitbconfdispbindet] column value.
     *
     * @return string
     */
    public function getIitbconfdispbindet()
    {
        return $this->iitbconfdispbindet;
    }

    /**
     * Get the [iitbconfshdateorcust] column value.
     *
     * @return string
     */
    public function getIitbconfshdateorcust()
    {
        return $this->iitbconfshdateorcust;
    }

    /**
     * Get the [iitbconfshzeroship] column value.
     *
     * @return string
     */
    public function getIitbconfshzeroship()
    {
        return $this->iitbconfshzeroship;
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
     * Set the value of [iitbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->iitbconfkey !== $v) {
            $this->iitbconfkey = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFKEY] = true;
        }

        return $this;
    } // setIitbconfkey()

    /**
     * Set the value of [iitbconfonewhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfonewhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfonewhse !== $v) {
            $this->iitbconfonewhse = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFONEWHSE] = true;
        }

        return $this;
    } // setIitbconfonewhse()

    /**
     * Set the value of [iitbconfdefwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfdefwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfdefwhse !== $v) {
            $this->iitbconfdefwhse = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFDEFWHSE] = true;
        }

        return $this;
    } // setIitbconfdefwhse()

    /**
     * Set the value of [iitbconfytdstrtmo] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfytdstrtmo($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->iitbconfytdstrtmo !== $v) {
            $this->iitbconfytdstrtmo = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFYTDSTRTMO] = true;
        }

        return $this;
    } // setIitbconfytdstrtmo()

    /**
     * Set the value of [iitbconfusecustwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfusecustwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfusecustwhse !== $v) {
            $this->iitbconfusecustwhse = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE] = true;
        }

        return $this;
    } // setIitbconfusecustwhse()

    /**
     * Set the value of [iitbconfwuorvqw] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfwuorvqw($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfwuorvqw !== $v) {
            $this->iitbconfwuorvqw = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFWUORVQW] = true;
        }

        return $this;
    } // setIitbconfwuorvqw()

    /**
     * Set the value of [iitbconfqorls] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfqorls($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfqorls !== $v) {
            $this->iitbconfqorls = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFQORLS] = true;
        }

        return $this;
    } // setIitbconfqorls()

    /**
     * Set the value of [iitbconfinqcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfinqcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfinqcode !== $v) {
            $this->iitbconfinqcode = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFINQCODE] = true;
        }

        return $this;
    } // setIitbconfinqcode()

    /**
     * Set the value of [iitbconfpricsect] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfpricsect($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfpricsect !== $v) {
            $this->iitbconfpricsect = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFPRICSECT] = true;
        }

        return $this;
    } // setIitbconfpricsect()

    /**
     * Set the value of [iitbconfsrchupcalias] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfsrchupcalias($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfsrchupcalias !== $v) {
            $this->iitbconfsrchupcalias = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS] = true;
        }

        return $this;
    } // setIitbconfsrchupcalias()

    /**
     * Set the value of [iitbconflotbin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconflotbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconflotbin !== $v) {
            $this->iitbconflotbin = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFLOTBIN] = true;
        }

        return $this;
    } // setIitbconflotbin()

    /**
     * Set the value of [iitbconfoneitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfoneitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfoneitem !== $v) {
            $this->iitbconfoneitem = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFONEITEM] = true;
        }

        return $this;
    } // setIitbconfoneitem()

    /**
     * Set the value of [iitbconfitemtotals] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfitemtotals($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfitemtotals !== $v) {
            $this->iitbconfitemtotals = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFITEMTOTALS] = true;
        }

        return $this;
    } // setIitbconfitemtotals()

    /**
     * Set the value of [iitbconfmonthsusage] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfmonthsusage($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->iitbconfmonthsusage !== $v) {
            $this->iitbconfmonthsusage = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE] = true;
        }

        return $this;
    } // setIitbconfmonthsusage()

    /**
     * Set the value of [iitbconftora] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconftora($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconftora !== $v) {
            $this->iitbconftora = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFTORA] = true;
        }

        return $this;
    } // setIitbconftora()

    /**
     * Set the value of [iitbconfunitcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfunitcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfunitcost !== $v) {
            $this->iitbconfunitcost = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFUNITCOST] = true;
        }

        return $this;
    } // setIitbconfunitcost()

    /**
     * Set the value of [iitbconfformulaoption] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfformulaoption($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->iitbconfformulaoption !== $v) {
            $this->iitbconfformulaoption = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFFORMULAOPTION] = true;
        }

        return $this;
    } // setIitbconfformulaoption()

    /**
     * Set the value of [iitbconftranssep] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconftranssep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconftranssep !== $v) {
            $this->iitbconftranssep = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFTRANSSEP] = true;
        }

        return $this;
    } // setIitbconftranssep()

    /**
     * Set the value of [iitbconfdispbindet] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfdispbindet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfdispbindet !== $v) {
            $this->iitbconfdispbindet = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFDISPBINDET] = true;
        }

        return $this;
    } // setIitbconfdispbindet()

    /**
     * Set the value of [iitbconfshdateorcust] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfshdateorcust($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfshdateorcust !== $v) {
            $this->iitbconfshdateorcust = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFSHDATEORCUST] = true;
        }

        return $this;
    } // setIitbconfshdateorcust()

    /**
     * Set the value of [iitbconfshzeroship] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setIitbconfshzeroship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitbconfshzeroship !== $v) {
            $this->iitbconfshzeroship = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_IITBCONFSHZEROSHIP] = true;
        }

        return $this;
    } // setIitbconfshzeroship()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIi The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigIiTableMap::COL_DUMMY] = true;
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
            if ($this->iitbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfonewhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfonewhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfdefwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfdefwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfytdstrtmo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfytdstrtmo = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfusecustwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfusecustwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfwuorvqw', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfwuorvqw = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfqorls', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfqorls = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfinqcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfinqcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfpricsect', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfpricsect = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfsrchupcalias', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfsrchupcalias = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconflotbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconflotbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfoneitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfoneitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfitemtotals', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfitemtotals = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfmonthsusage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfmonthsusage = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconftora', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconftora = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfunitcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfunitcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfformulaoption', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfformulaoption = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconftranssep', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconftranssep = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfdispbindet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfdispbindet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfshdateorcust', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfshdateorcust = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigIiTableMap::translateFieldName('Iitbconfshzeroship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitbconfshzeroship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigIiTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigIiTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigIiTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 24; // 24 = ConfigIiTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigIi'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigIiQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigIi::setDeleted()
     * @see ConfigIi::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigIiQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigIiTableMap::DATABASE_NAME);
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
                ConfigIiTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfKey';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFONEWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfOneWhse';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFDEFWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfDefWhse';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFYTDSTRTMO)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfYtdStrtMo';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfUseCustWhse';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFWUORVQW)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfWuOrVqw';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFQORLS)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfQOrLs';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFINQCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfInqCode';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFPRICSECT)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfPricSect';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfSrchUpcAlias';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFLOTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfLotBin';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFONEITEM)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfOneItem';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFITEMTOTALS)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfItemTotals';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfMonthsUsage';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFTORA)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfTOrA';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFUNITCOST)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfUnitCost';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFFORMULAOPTION)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfFormulaOption';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFTRANSSEP)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfTransSep';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFDISPBINDET)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfDispBinDet';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFSHDATEORCUST)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfShDateOrCust';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFSHZEROSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'IitbConfShZeroShip';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ii_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'IitbConfKey':
                        $stmt->bindValue($identifier, $this->iitbconfkey, PDO::PARAM_INT);
                        break;
                    case 'IitbConfOneWhse':
                        $stmt->bindValue($identifier, $this->iitbconfonewhse, PDO::PARAM_STR);
                        break;
                    case 'IitbConfDefWhse':
                        $stmt->bindValue($identifier, $this->iitbconfdefwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbConfYtdStrtMo':
                        $stmt->bindValue($identifier, $this->iitbconfytdstrtmo, PDO::PARAM_INT);
                        break;
                    case 'IitbConfUseCustWhse':
                        $stmt->bindValue($identifier, $this->iitbconfusecustwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbConfWuOrVqw':
                        $stmt->bindValue($identifier, $this->iitbconfwuorvqw, PDO::PARAM_STR);
                        break;
                    case 'IitbConfQOrLs':
                        $stmt->bindValue($identifier, $this->iitbconfqorls, PDO::PARAM_STR);
                        break;
                    case 'IitbConfInqCode':
                        $stmt->bindValue($identifier, $this->iitbconfinqcode, PDO::PARAM_STR);
                        break;
                    case 'IitbConfPricSect':
                        $stmt->bindValue($identifier, $this->iitbconfpricsect, PDO::PARAM_STR);
                        break;
                    case 'IitbConfSrchUpcAlias':
                        $stmt->bindValue($identifier, $this->iitbconfsrchupcalias, PDO::PARAM_STR);
                        break;
                    case 'IitbConfLotBin':
                        $stmt->bindValue($identifier, $this->iitbconflotbin, PDO::PARAM_STR);
                        break;
                    case 'IitbConfOneItem':
                        $stmt->bindValue($identifier, $this->iitbconfoneitem, PDO::PARAM_STR);
                        break;
                    case 'IitbConfItemTotals':
                        $stmt->bindValue($identifier, $this->iitbconfitemtotals, PDO::PARAM_STR);
                        break;
                    case 'IitbConfMonthsUsage':
                        $stmt->bindValue($identifier, $this->iitbconfmonthsusage, PDO::PARAM_INT);
                        break;
                    case 'IitbConfTOrA':
                        $stmt->bindValue($identifier, $this->iitbconftora, PDO::PARAM_STR);
                        break;
                    case 'IitbConfUnitCost':
                        $stmt->bindValue($identifier, $this->iitbconfunitcost, PDO::PARAM_STR);
                        break;
                    case 'IitbConfFormulaOption':
                        $stmt->bindValue($identifier, $this->iitbconfformulaoption, PDO::PARAM_INT);
                        break;
                    case 'IitbConfTransSep':
                        $stmt->bindValue($identifier, $this->iitbconftranssep, PDO::PARAM_STR);
                        break;
                    case 'IitbConfDispBinDet':
                        $stmt->bindValue($identifier, $this->iitbconfdispbindet, PDO::PARAM_STR);
                        break;
                    case 'IitbConfShDateOrCust':
                        $stmt->bindValue($identifier, $this->iitbconfshdateorcust, PDO::PARAM_STR);
                        break;
                    case 'IitbConfShZeroShip':
                        $stmt->bindValue($identifier, $this->iitbconfshzeroship, PDO::PARAM_STR);
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
        $pos = ConfigIiTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIitbconfkey();
                break;
            case 1:
                return $this->getIitbconfonewhse();
                break;
            case 2:
                return $this->getIitbconfdefwhse();
                break;
            case 3:
                return $this->getIitbconfytdstrtmo();
                break;
            case 4:
                return $this->getIitbconfusecustwhse();
                break;
            case 5:
                return $this->getIitbconfwuorvqw();
                break;
            case 6:
                return $this->getIitbconfqorls();
                break;
            case 7:
                return $this->getIitbconfinqcode();
                break;
            case 8:
                return $this->getIitbconfpricsect();
                break;
            case 9:
                return $this->getIitbconfsrchupcalias();
                break;
            case 10:
                return $this->getIitbconflotbin();
                break;
            case 11:
                return $this->getIitbconfoneitem();
                break;
            case 12:
                return $this->getIitbconfitemtotals();
                break;
            case 13:
                return $this->getIitbconfmonthsusage();
                break;
            case 14:
                return $this->getIitbconftora();
                break;
            case 15:
                return $this->getIitbconfunitcost();
                break;
            case 16:
                return $this->getIitbconfformulaoption();
                break;
            case 17:
                return $this->getIitbconftranssep();
                break;
            case 18:
                return $this->getIitbconfdispbindet();
                break;
            case 19:
                return $this->getIitbconfshdateorcust();
                break;
            case 20:
                return $this->getIitbconfshzeroship();
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

        if (isset($alreadyDumpedObjects['ConfigIi'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigIi'][$this->hashCode()] = true;
        $keys = ConfigIiTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIitbconfkey(),
            $keys[1] => $this->getIitbconfonewhse(),
            $keys[2] => $this->getIitbconfdefwhse(),
            $keys[3] => $this->getIitbconfytdstrtmo(),
            $keys[4] => $this->getIitbconfusecustwhse(),
            $keys[5] => $this->getIitbconfwuorvqw(),
            $keys[6] => $this->getIitbconfqorls(),
            $keys[7] => $this->getIitbconfinqcode(),
            $keys[8] => $this->getIitbconfpricsect(),
            $keys[9] => $this->getIitbconfsrchupcalias(),
            $keys[10] => $this->getIitbconflotbin(),
            $keys[11] => $this->getIitbconfoneitem(),
            $keys[12] => $this->getIitbconfitemtotals(),
            $keys[13] => $this->getIitbconfmonthsusage(),
            $keys[14] => $this->getIitbconftora(),
            $keys[15] => $this->getIitbconfunitcost(),
            $keys[16] => $this->getIitbconfformulaoption(),
            $keys[17] => $this->getIitbconftranssep(),
            $keys[18] => $this->getIitbconfdispbindet(),
            $keys[19] => $this->getIitbconfshdateorcust(),
            $keys[20] => $this->getIitbconfshzeroship(),
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
     * @return $this|\ConfigIi
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigIiTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigIi
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIitbconfkey($value);
                break;
            case 1:
                $this->setIitbconfonewhse($value);
                break;
            case 2:
                $this->setIitbconfdefwhse($value);
                break;
            case 3:
                $this->setIitbconfytdstrtmo($value);
                break;
            case 4:
                $this->setIitbconfusecustwhse($value);
                break;
            case 5:
                $this->setIitbconfwuorvqw($value);
                break;
            case 6:
                $this->setIitbconfqorls($value);
                break;
            case 7:
                $this->setIitbconfinqcode($value);
                break;
            case 8:
                $this->setIitbconfpricsect($value);
                break;
            case 9:
                $this->setIitbconfsrchupcalias($value);
                break;
            case 10:
                $this->setIitbconflotbin($value);
                break;
            case 11:
                $this->setIitbconfoneitem($value);
                break;
            case 12:
                $this->setIitbconfitemtotals($value);
                break;
            case 13:
                $this->setIitbconfmonthsusage($value);
                break;
            case 14:
                $this->setIitbconftora($value);
                break;
            case 15:
                $this->setIitbconfunitcost($value);
                break;
            case 16:
                $this->setIitbconfformulaoption($value);
                break;
            case 17:
                $this->setIitbconftranssep($value);
                break;
            case 18:
                $this->setIitbconfdispbindet($value);
                break;
            case 19:
                $this->setIitbconfshdateorcust($value);
                break;
            case 20:
                $this->setIitbconfshzeroship($value);
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
        $keys = ConfigIiTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIitbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIitbconfonewhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIitbconfdefwhse($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIitbconfytdstrtmo($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIitbconfusecustwhse($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIitbconfwuorvqw($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIitbconfqorls($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIitbconfinqcode($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIitbconfpricsect($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIitbconfsrchupcalias($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIitbconflotbin($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setIitbconfoneitem($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setIitbconfitemtotals($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setIitbconfmonthsusage($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setIitbconftora($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setIitbconfunitcost($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIitbconfformulaoption($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setIitbconftranssep($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setIitbconfdispbindet($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIitbconfshdateorcust($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setIitbconfshzeroship($arr[$keys[20]]);
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
     * @return $this|\ConfigIi The current object, for fluid interface
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
        $criteria = new Criteria(ConfigIiTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFKEY)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFKEY, $this->iitbconfkey);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFONEWHSE)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFONEWHSE, $this->iitbconfonewhse);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFDEFWHSE)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFDEFWHSE, $this->iitbconfdefwhse);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFYTDSTRTMO)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFYTDSTRTMO, $this->iitbconfytdstrtmo);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE, $this->iitbconfusecustwhse);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFWUORVQW)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFWUORVQW, $this->iitbconfwuorvqw);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFQORLS)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFQORLS, $this->iitbconfqorls);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFINQCODE)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFINQCODE, $this->iitbconfinqcode);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFPRICSECT)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFPRICSECT, $this->iitbconfpricsect);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS, $this->iitbconfsrchupcalias);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFLOTBIN)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFLOTBIN, $this->iitbconflotbin);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFONEITEM)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFONEITEM, $this->iitbconfoneitem);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFITEMTOTALS)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFITEMTOTALS, $this->iitbconfitemtotals);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE, $this->iitbconfmonthsusage);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFTORA)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFTORA, $this->iitbconftora);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFUNITCOST)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFUNITCOST, $this->iitbconfunitcost);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFFORMULAOPTION)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFFORMULAOPTION, $this->iitbconfformulaoption);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFTRANSSEP)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFTRANSSEP, $this->iitbconftranssep);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFDISPBINDET)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFDISPBINDET, $this->iitbconfdispbindet);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFSHDATEORCUST)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFSHDATEORCUST, $this->iitbconfshdateorcust);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_IITBCONFSHZEROSHIP)) {
            $criteria->add(ConfigIiTableMap::COL_IITBCONFSHZEROSHIP, $this->iitbconfshzeroship);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigIiTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigIiTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigIiTableMap::COL_DUMMY)) {
            $criteria->add(ConfigIiTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigIiQuery::create();
        $criteria->add(ConfigIiTableMap::COL_IITBCONFKEY, $this->iitbconfkey);

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
        $validPk = null !== $this->getIitbconfkey();

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
        return $this->getIitbconfkey();
    }

    /**
     * Generic method to set the primary key (iitbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIitbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIitbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigIi (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIitbconfkey($this->getIitbconfkey());
        $copyObj->setIitbconfonewhse($this->getIitbconfonewhse());
        $copyObj->setIitbconfdefwhse($this->getIitbconfdefwhse());
        $copyObj->setIitbconfytdstrtmo($this->getIitbconfytdstrtmo());
        $copyObj->setIitbconfusecustwhse($this->getIitbconfusecustwhse());
        $copyObj->setIitbconfwuorvqw($this->getIitbconfwuorvqw());
        $copyObj->setIitbconfqorls($this->getIitbconfqorls());
        $copyObj->setIitbconfinqcode($this->getIitbconfinqcode());
        $copyObj->setIitbconfpricsect($this->getIitbconfpricsect());
        $copyObj->setIitbconfsrchupcalias($this->getIitbconfsrchupcalias());
        $copyObj->setIitbconflotbin($this->getIitbconflotbin());
        $copyObj->setIitbconfoneitem($this->getIitbconfoneitem());
        $copyObj->setIitbconfitemtotals($this->getIitbconfitemtotals());
        $copyObj->setIitbconfmonthsusage($this->getIitbconfmonthsusage());
        $copyObj->setIitbconftora($this->getIitbconftora());
        $copyObj->setIitbconfunitcost($this->getIitbconfunitcost());
        $copyObj->setIitbconfformulaoption($this->getIitbconfformulaoption());
        $copyObj->setIitbconftranssep($this->getIitbconftranssep());
        $copyObj->setIitbconfdispbindet($this->getIitbconfdispbindet());
        $copyObj->setIitbconfshdateorcust($this->getIitbconfshdateorcust());
        $copyObj->setIitbconfshzeroship($this->getIitbconfshzeroship());
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
     * @return \ConfigIi Clone of current object.
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
        $this->iitbconfkey = null;
        $this->iitbconfonewhse = null;
        $this->iitbconfdefwhse = null;
        $this->iitbconfytdstrtmo = null;
        $this->iitbconfusecustwhse = null;
        $this->iitbconfwuorvqw = null;
        $this->iitbconfqorls = null;
        $this->iitbconfinqcode = null;
        $this->iitbconfpricsect = null;
        $this->iitbconfsrchupcalias = null;
        $this->iitbconflotbin = null;
        $this->iitbconfoneitem = null;
        $this->iitbconfitemtotals = null;
        $this->iitbconfmonthsusage = null;
        $this->iitbconftora = null;
        $this->iitbconfunitcost = null;
        $this->iitbconfformulaoption = null;
        $this->iitbconftranssep = null;
        $this->iitbconfdispbindet = null;
        $this->iitbconfshdateorcust = null;
        $this->iitbconfshzeroship = null;
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
        return (string) $this->exportTo(ConfigIiTableMap::DEFAULT_STRING_FORMAT);
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
