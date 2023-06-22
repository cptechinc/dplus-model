<?php

namespace Base;

use \ConfigSoFreightQuery as ChildConfigSoFreightQuery;
use \Exception;
use \PDO;
use Map\ConfigSoFreightTableMap;
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
 * Base class that represents a row from the 'so_frt_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigSoFreight implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigSoFreightTableMap';


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
     * The value for the oetbconfkey field.
     *
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $oetbconfkey;

    /**
     * The value for the oetbconfusefrtcost field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oetbconfusefrtcost;

    /**
     * The value for the oetbcon2frtratetabl field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oetbcon2frtratetabl;

    /**
     * The value for the oetbcon2frtzonesorz field.
     *
     * Note: this column has a database default value of: 'Z'
     * @var        string
     */
    protected $oetbcon2frtzonesorz;

    /**
     * The value for the oetbcon2chrgactfrt field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $oetbcon2chrgactfrt;

    /**
     * The value for the oetbcon3usefrtgrup field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oetbcon3usefrtgrup;

    /**
     * The value for the oetbcon2frghtordramta field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtordramta;

    /**
     * The value for the oetbcon2frghtordramtb field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtordramtb;

    /**
     * The value for the oetbcon2frghtordramtc field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtordramtc;

    /**
     * The value for the oetbcon2frghtordramtd field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtordramtd;

    /**
     * The value for the oetbcon2frghtordramte field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtordramte;

    /**
     * The value for the oetbcon2chrgfrghtbkord field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oetbcon2chrgfrghtbkord;

    /**
     * The value for the oetbcon2frghtaddmeth field.
     *
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $oetbcon2frghtaddmeth;

    /**
     * The value for the oetbcon2frghtorder field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtorder;

    /**
     * The value for the oetbcon2frghtcntnr field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtcntnr;

    /**
     * The value for the oetbcon2frghtadd1 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtadd1;

    /**
     * The value for the oetbcon2frghtaddamt1 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtaddamt1;

    /**
     * The value for the oetbcon2frghtaddper field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtaddper;

    /**
     * The value for the oetbcon2frghtaddamtper field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtaddamtper;

    /**
     * The value for the oetbcon2frghtaddamtmax field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtaddamtmax;

    /**
     * The value for the oetbcon2frghtaddpct field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtaddpct;

    /**
     * The value for the oetbcon2frghtminchrg field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oetbcon2frghtminchrg;

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
        $this->oetbconfkey = 1;
        $this->oetbconfusefrtcost = 'N';
        $this->oetbcon2frtratetabl = 'N';
        $this->oetbcon2frtzonesorz = 'Z';
        $this->oetbcon2chrgactfrt = 'Y';
        $this->oetbcon3usefrtgrup = 'N';
        $this->oetbcon2frghtordramta = '0.00';
        $this->oetbcon2frghtordramtb = '0.00';
        $this->oetbcon2frghtordramtc = '0.00';
        $this->oetbcon2frghtordramtd = '0.00';
        $this->oetbcon2frghtordramte = '0.00';
        $this->oetbcon2chrgfrghtbkord = 'N';
        $this->oetbcon2frghtaddmeth = '1';
        $this->oetbcon2frghtorder = '0.00';
        $this->oetbcon2frghtcntnr = '0.00';
        $this->oetbcon2frghtadd1 = '0.00';
        $this->oetbcon2frghtaddamt1 = '0.00';
        $this->oetbcon2frghtaddper = '0.00';
        $this->oetbcon2frghtaddamtper = '0.00';
        $this->oetbcon2frghtaddamtmax = '0.00';
        $this->oetbcon2frghtaddpct = '0.00';
        $this->oetbcon2frghtminchrg = '0.00';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\ConfigSoFreight object.
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
     * Compares this with another <code>ConfigSoFreight</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigSoFreight</code>, delegates to
     * <code>equals(ConfigSoFreight)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigSoFreight The current object, for fluid interface
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
     * Get the [oetbconfkey] column value.
     *
     * @return int
     */
    public function getOetbconfkey()
    {
        return $this->oetbconfkey;
    }

    /**
     * Get the [oetbconfusefrtcost] column value.
     *
     * @return string
     */
    public function getOetbconfusefrtcost()
    {
        return $this->oetbconfusefrtcost;
    }

    /**
     * Get the [oetbcon2frtratetabl] column value.
     *
     * @return string
     */
    public function getOetbcon2frtratetabl()
    {
        return $this->oetbcon2frtratetabl;
    }

    /**
     * Get the [oetbcon2frtzonesorz] column value.
     *
     * @return string
     */
    public function getOetbcon2frtzonesorz()
    {
        return $this->oetbcon2frtzonesorz;
    }

    /**
     * Get the [oetbcon2chrgactfrt] column value.
     *
     * @return string
     */
    public function getOetbcon2chrgactfrt()
    {
        return $this->oetbcon2chrgactfrt;
    }

    /**
     * Get the [oetbcon3usefrtgrup] column value.
     *
     * @return string
     */
    public function getOetbcon3usefrtgrup()
    {
        return $this->oetbcon3usefrtgrup;
    }

    /**
     * Get the [oetbcon2frghtordramta] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtordramta()
    {
        return $this->oetbcon2frghtordramta;
    }

    /**
     * Get the [oetbcon2frghtordramtb] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtordramtb()
    {
        return $this->oetbcon2frghtordramtb;
    }

    /**
     * Get the [oetbcon2frghtordramtc] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtordramtc()
    {
        return $this->oetbcon2frghtordramtc;
    }

    /**
     * Get the [oetbcon2frghtordramtd] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtordramtd()
    {
        return $this->oetbcon2frghtordramtd;
    }

    /**
     * Get the [oetbcon2frghtordramte] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtordramte()
    {
        return $this->oetbcon2frghtordramte;
    }

    /**
     * Get the [oetbcon2chrgfrghtbkord] column value.
     *
     * @return string
     */
    public function getOetbcon2chrgfrghtbkord()
    {
        return $this->oetbcon2chrgfrghtbkord;
    }

    /**
     * Get the [oetbcon2frghtaddmeth] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtaddmeth()
    {
        return $this->oetbcon2frghtaddmeth;
    }

    /**
     * Get the [oetbcon2frghtorder] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtorder()
    {
        return $this->oetbcon2frghtorder;
    }

    /**
     * Get the [oetbcon2frghtcntnr] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtcntnr()
    {
        return $this->oetbcon2frghtcntnr;
    }

    /**
     * Get the [oetbcon2frghtadd1] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtadd1()
    {
        return $this->oetbcon2frghtadd1;
    }

    /**
     * Get the [oetbcon2frghtaddamt1] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtaddamt1()
    {
        return $this->oetbcon2frghtaddamt1;
    }

    /**
     * Get the [oetbcon2frghtaddper] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtaddper()
    {
        return $this->oetbcon2frghtaddper;
    }

    /**
     * Get the [oetbcon2frghtaddamtper] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtaddamtper()
    {
        return $this->oetbcon2frghtaddamtper;
    }

    /**
     * Get the [oetbcon2frghtaddamtmax] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtaddamtmax()
    {
        return $this->oetbcon2frghtaddamtmax;
    }

    /**
     * Get the [oetbcon2frghtaddpct] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtaddpct()
    {
        return $this->oetbcon2frghtaddpct;
    }

    /**
     * Get the [oetbcon2frghtminchrg] column value.
     *
     * @return string
     */
    public function getOetbcon2frghtminchrg()
    {
        return $this->oetbcon2frghtminchrg;
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
     * Set the value of [oetbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbconfkey !== $v) {
            $this->oetbconfkey = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCONFKEY] = true;
        }

        return $this;
    } // setOetbconfkey()

    /**
     * Set the value of [oetbconfusefrtcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbconfusefrtcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfusefrtcost !== $v) {
            $this->oetbconfusefrtcost = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCONFUSEFRTCOST] = true;
        }

        return $this;
    } // setOetbconfusefrtcost()

    /**
     * Set the value of [oetbcon2frtratetabl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frtratetabl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frtratetabl !== $v) {
            $this->oetbcon2frtratetabl = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRTRATETABL] = true;
        }

        return $this;
    } // setOetbcon2frtratetabl()

    /**
     * Set the value of [oetbcon2frtzonesorz] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frtzonesorz($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frtzonesorz !== $v) {
            $this->oetbcon2frtzonesorz = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRTZONESORZ] = true;
        }

        return $this;
    } // setOetbcon2frtzonesorz()

    /**
     * Set the value of [oetbcon2chrgactfrt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2chrgactfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2chrgactfrt !== $v) {
            $this->oetbcon2chrgactfrt = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2CHRGACTFRT] = true;
        }

        return $this;
    } // setOetbcon2chrgactfrt()

    /**
     * Set the value of [oetbcon3usefrtgrup] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon3usefrtgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3usefrtgrup !== $v) {
            $this->oetbcon3usefrtgrup = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON3USEFRTGRUP] = true;
        }

        return $this;
    } // setOetbcon3usefrtgrup()

    /**
     * Set the value of [oetbcon2frghtordramta] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtordramta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtordramta !== $v) {
            $this->oetbcon2frghtordramta = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA] = true;
        }

        return $this;
    } // setOetbcon2frghtordramta()

    /**
     * Set the value of [oetbcon2frghtordramtb] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtordramtb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtordramtb !== $v) {
            $this->oetbcon2frghtordramtb = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB] = true;
        }

        return $this;
    } // setOetbcon2frghtordramtb()

    /**
     * Set the value of [oetbcon2frghtordramtc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtordramtc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtordramtc !== $v) {
            $this->oetbcon2frghtordramtc = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC] = true;
        }

        return $this;
    } // setOetbcon2frghtordramtc()

    /**
     * Set the value of [oetbcon2frghtordramtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtordramtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtordramtd !== $v) {
            $this->oetbcon2frghtordramtd = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD] = true;
        }

        return $this;
    } // setOetbcon2frghtordramtd()

    /**
     * Set the value of [oetbcon2frghtordramte] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtordramte($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtordramte !== $v) {
            $this->oetbcon2frghtordramte = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE] = true;
        }

        return $this;
    } // setOetbcon2frghtordramte()

    /**
     * Set the value of [oetbcon2chrgfrghtbkord] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2chrgfrghtbkord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2chrgfrghtbkord !== $v) {
            $this->oetbcon2chrgfrghtbkord = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2CHRGFRGHTBKORD] = true;
        }

        return $this;
    } // setOetbcon2chrgfrghtbkord()

    /**
     * Set the value of [oetbcon2frghtaddmeth] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtaddmeth($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtaddmeth !== $v) {
            $this->oetbcon2frghtaddmeth = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDMETH] = true;
        }

        return $this;
    } // setOetbcon2frghtaddmeth()

    /**
     * Set the value of [oetbcon2frghtorder] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtorder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtorder !== $v) {
            $this->oetbcon2frghtorder = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER] = true;
        }

        return $this;
    } // setOetbcon2frghtorder()

    /**
     * Set the value of [oetbcon2frghtcntnr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtcntnr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtcntnr !== $v) {
            $this->oetbcon2frghtcntnr = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR] = true;
        }

        return $this;
    } // setOetbcon2frghtcntnr()

    /**
     * Set the value of [oetbcon2frghtadd1] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtadd1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtadd1 !== $v) {
            $this->oetbcon2frghtadd1 = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1] = true;
        }

        return $this;
    } // setOetbcon2frghtadd1()

    /**
     * Set the value of [oetbcon2frghtaddamt1] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtaddamt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtaddamt1 !== $v) {
            $this->oetbcon2frghtaddamt1 = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1] = true;
        }

        return $this;
    } // setOetbcon2frghtaddamt1()

    /**
     * Set the value of [oetbcon2frghtaddper] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtaddper($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtaddper !== $v) {
            $this->oetbcon2frghtaddper = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER] = true;
        }

        return $this;
    } // setOetbcon2frghtaddper()

    /**
     * Set the value of [oetbcon2frghtaddamtper] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtaddamtper($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtaddamtper !== $v) {
            $this->oetbcon2frghtaddamtper = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER] = true;
        }

        return $this;
    } // setOetbcon2frghtaddamtper()

    /**
     * Set the value of [oetbcon2frghtaddamtmax] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtaddamtmax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtaddamtmax !== $v) {
            $this->oetbcon2frghtaddamtmax = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX] = true;
        }

        return $this;
    } // setOetbcon2frghtaddamtmax()

    /**
     * Set the value of [oetbcon2frghtaddpct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtaddpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtaddpct !== $v) {
            $this->oetbcon2frghtaddpct = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT] = true;
        }

        return $this;
    } // setOetbcon2frghtaddpct()

    /**
     * Set the value of [oetbcon2frghtminchrg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setOetbcon2frghtminchrg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2frghtminchrg !== $v) {
            $this->oetbcon2frghtminchrg = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG] = true;
        }

        return $this;
    } // setOetbcon2frghtminchrg()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSoFreight The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigSoFreightTableMap::COL_DUMMY] = true;
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
            if ($this->oetbconfkey !== 1) {
                return false;
            }

            if ($this->oetbconfusefrtcost !== 'N') {
                return false;
            }

            if ($this->oetbcon2frtratetabl !== 'N') {
                return false;
            }

            if ($this->oetbcon2frtzonesorz !== 'Z') {
                return false;
            }

            if ($this->oetbcon2chrgactfrt !== 'Y') {
                return false;
            }

            if ($this->oetbcon3usefrtgrup !== 'N') {
                return false;
            }

            if ($this->oetbcon2frghtordramta !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtordramtb !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtordramtc !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtordramtd !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtordramte !== '0.00') {
                return false;
            }

            if ($this->oetbcon2chrgfrghtbkord !== 'N') {
                return false;
            }

            if ($this->oetbcon2frghtaddmeth !== '1') {
                return false;
            }

            if ($this->oetbcon2frghtorder !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtcntnr !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtadd1 !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtaddamt1 !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtaddper !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtaddamtper !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtaddamtmax !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtaddpct !== '0.00') {
                return false;
            }

            if ($this->oetbcon2frghtminchrg !== '0.00') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbconfusefrtcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfusefrtcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frtratetabl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frtratetabl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frtzonesorz', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frtzonesorz = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2chrgactfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2chrgactfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon3usefrtgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3usefrtgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtordramta', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtordramta = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtordramtb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtordramtb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtordramtc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtordramtc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtordramtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtordramtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtordramte', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtordramte = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2chrgfrghtbkord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2chrgfrghtbkord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtaddmeth', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtaddmeth = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtorder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtcntnr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtcntnr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtadd1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtadd1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtaddamt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtaddamt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtaddper', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtaddper = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtaddamtper', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtaddamtper = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtaddamtmax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtaddamtmax = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtaddpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtaddpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigSoFreightTableMap::translateFieldName('Oetbcon2frghtminchrg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frghtminchrg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigSoFreightTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigSoFreightTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigSoFreightTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 25; // 25 = ConfigSoFreightTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigSoFreight'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigSoFreightTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigSoFreightQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigSoFreight::setDeleted()
     * @see ConfigSoFreight::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSoFreightTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigSoFreightQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSoFreightTableMap::DATABASE_NAME);
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
                ConfigSoFreightTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfKey';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCONFUSEFRTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseFrtCost';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRTRATETABL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrtRateTabl';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRTZONESORZ)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrtZoneSorZ';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2CHRGACTFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ChrgActFrt';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON3USEFRTGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3UseFrtGrup';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtOrdrAmtA';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtOrdrAmtB';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtOrdrAmtC';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtOrdrAmtD';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtOrdrAmtE';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2CHRGFRGHTBKORD)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ChrgFrghtBkord';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDMETH)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtAddMeth';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtOrder';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtCntnr';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtAdd1';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtAddAmt1';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtAddPer';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtAddAmtPer';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtAddAmtMax';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtAddPct';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrghtMinChrg';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_frt_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OetbConfKey':
                        $stmt->bindValue($identifier, $this->oetbconfkey, PDO::PARAM_INT);
                        break;
                    case 'OetbConfUseFrtCost':
                        $stmt->bindValue($identifier, $this->oetbconfusefrtcost, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrtRateTabl':
                        $stmt->bindValue($identifier, $this->oetbcon2frtratetabl, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrtZoneSorZ':
                        $stmt->bindValue($identifier, $this->oetbcon2frtzonesorz, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ChrgActFrt':
                        $stmt->bindValue($identifier, $this->oetbcon2chrgactfrt, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3UseFrtGrup':
                        $stmt->bindValue($identifier, $this->oetbcon3usefrtgrup, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtOrdrAmtA':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtordramta, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtOrdrAmtB':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtordramtb, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtOrdrAmtC':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtordramtc, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtOrdrAmtD':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtordramtd, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtOrdrAmtE':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtordramte, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ChrgFrghtBkord':
                        $stmt->bindValue($identifier, $this->oetbcon2chrgfrghtbkord, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtAddMeth':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtaddmeth, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtOrder':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtorder, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtCntnr':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtcntnr, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtAdd1':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtadd1, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtAddAmt1':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtaddamt1, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtAddPer':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtaddper, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtAddAmtPer':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtaddamtper, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtAddAmtMax':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtaddamtmax, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtAddPct':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtaddpct, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrghtMinChrg':
                        $stmt->bindValue($identifier, $this->oetbcon2frghtminchrg, PDO::PARAM_STR);
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
        $pos = ConfigSoFreightTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOetbconfkey();
                break;
            case 1:
                return $this->getOetbconfusefrtcost();
                break;
            case 2:
                return $this->getOetbcon2frtratetabl();
                break;
            case 3:
                return $this->getOetbcon2frtzonesorz();
                break;
            case 4:
                return $this->getOetbcon2chrgactfrt();
                break;
            case 5:
                return $this->getOetbcon3usefrtgrup();
                break;
            case 6:
                return $this->getOetbcon2frghtordramta();
                break;
            case 7:
                return $this->getOetbcon2frghtordramtb();
                break;
            case 8:
                return $this->getOetbcon2frghtordramtc();
                break;
            case 9:
                return $this->getOetbcon2frghtordramtd();
                break;
            case 10:
                return $this->getOetbcon2frghtordramte();
                break;
            case 11:
                return $this->getOetbcon2chrgfrghtbkord();
                break;
            case 12:
                return $this->getOetbcon2frghtaddmeth();
                break;
            case 13:
                return $this->getOetbcon2frghtorder();
                break;
            case 14:
                return $this->getOetbcon2frghtcntnr();
                break;
            case 15:
                return $this->getOetbcon2frghtadd1();
                break;
            case 16:
                return $this->getOetbcon2frghtaddamt1();
                break;
            case 17:
                return $this->getOetbcon2frghtaddper();
                break;
            case 18:
                return $this->getOetbcon2frghtaddamtper();
                break;
            case 19:
                return $this->getOetbcon2frghtaddamtmax();
                break;
            case 20:
                return $this->getOetbcon2frghtaddpct();
                break;
            case 21:
                return $this->getOetbcon2frghtminchrg();
                break;
            case 22:
                return $this->getDateupdtd();
                break;
            case 23:
                return $this->getTimeupdtd();
                break;
            case 24:
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

        if (isset($alreadyDumpedObjects['ConfigSoFreight'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigSoFreight'][$this->hashCode()] = true;
        $keys = ConfigSoFreightTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOetbconfkey(),
            $keys[1] => $this->getOetbconfusefrtcost(),
            $keys[2] => $this->getOetbcon2frtratetabl(),
            $keys[3] => $this->getOetbcon2frtzonesorz(),
            $keys[4] => $this->getOetbcon2chrgactfrt(),
            $keys[5] => $this->getOetbcon3usefrtgrup(),
            $keys[6] => $this->getOetbcon2frghtordramta(),
            $keys[7] => $this->getOetbcon2frghtordramtb(),
            $keys[8] => $this->getOetbcon2frghtordramtc(),
            $keys[9] => $this->getOetbcon2frghtordramtd(),
            $keys[10] => $this->getOetbcon2frghtordramte(),
            $keys[11] => $this->getOetbcon2chrgfrghtbkord(),
            $keys[12] => $this->getOetbcon2frghtaddmeth(),
            $keys[13] => $this->getOetbcon2frghtorder(),
            $keys[14] => $this->getOetbcon2frghtcntnr(),
            $keys[15] => $this->getOetbcon2frghtadd1(),
            $keys[16] => $this->getOetbcon2frghtaddamt1(),
            $keys[17] => $this->getOetbcon2frghtaddper(),
            $keys[18] => $this->getOetbcon2frghtaddamtper(),
            $keys[19] => $this->getOetbcon2frghtaddamtmax(),
            $keys[20] => $this->getOetbcon2frghtaddpct(),
            $keys[21] => $this->getOetbcon2frghtminchrg(),
            $keys[22] => $this->getDateupdtd(),
            $keys[23] => $this->getTimeupdtd(),
            $keys[24] => $this->getDummy(),
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
     * @return $this|\ConfigSoFreight
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigSoFreightTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigSoFreight
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOetbconfkey($value);
                break;
            case 1:
                $this->setOetbconfusefrtcost($value);
                break;
            case 2:
                $this->setOetbcon2frtratetabl($value);
                break;
            case 3:
                $this->setOetbcon2frtzonesorz($value);
                break;
            case 4:
                $this->setOetbcon2chrgactfrt($value);
                break;
            case 5:
                $this->setOetbcon3usefrtgrup($value);
                break;
            case 6:
                $this->setOetbcon2frghtordramta($value);
                break;
            case 7:
                $this->setOetbcon2frghtordramtb($value);
                break;
            case 8:
                $this->setOetbcon2frghtordramtc($value);
                break;
            case 9:
                $this->setOetbcon2frghtordramtd($value);
                break;
            case 10:
                $this->setOetbcon2frghtordramte($value);
                break;
            case 11:
                $this->setOetbcon2chrgfrghtbkord($value);
                break;
            case 12:
                $this->setOetbcon2frghtaddmeth($value);
                break;
            case 13:
                $this->setOetbcon2frghtorder($value);
                break;
            case 14:
                $this->setOetbcon2frghtcntnr($value);
                break;
            case 15:
                $this->setOetbcon2frghtadd1($value);
                break;
            case 16:
                $this->setOetbcon2frghtaddamt1($value);
                break;
            case 17:
                $this->setOetbcon2frghtaddper($value);
                break;
            case 18:
                $this->setOetbcon2frghtaddamtper($value);
                break;
            case 19:
                $this->setOetbcon2frghtaddamtmax($value);
                break;
            case 20:
                $this->setOetbcon2frghtaddpct($value);
                break;
            case 21:
                $this->setOetbcon2frghtminchrg($value);
                break;
            case 22:
                $this->setDateupdtd($value);
                break;
            case 23:
                $this->setTimeupdtd($value);
                break;
            case 24:
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
        $keys = ConfigSoFreightTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOetbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOetbconfusefrtcost($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOetbcon2frtratetabl($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOetbcon2frtzonesorz($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOetbcon2chrgactfrt($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOetbcon3usefrtgrup($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOetbcon2frghtordramta($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOetbcon2frghtordramtb($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOetbcon2frghtordramtc($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOetbcon2frghtordramtd($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOetbcon2frghtordramte($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOetbcon2chrgfrghtbkord($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOetbcon2frghtaddmeth($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOetbcon2frghtorder($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOetbcon2frghtcntnr($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOetbcon2frghtadd1($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOetbcon2frghtaddamt1($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOetbcon2frghtaddper($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setOetbcon2frghtaddamtper($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOetbcon2frghtaddamtmax($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOetbcon2frghtaddpct($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOetbcon2frghtminchrg($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setDateupdtd($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setTimeupdtd($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setDummy($arr[$keys[24]]);
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
     * @return $this|\ConfigSoFreight The current object, for fluid interface
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
        $criteria = new Criteria(ConfigSoFreightTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCONFKEY)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCONFKEY, $this->oetbconfkey);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCONFUSEFRTCOST)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCONFUSEFRTCOST, $this->oetbconfusefrtcost);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRTRATETABL)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRTRATETABL, $this->oetbcon2frtratetabl);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRTZONESORZ)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRTZONESORZ, $this->oetbcon2frtzonesorz);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2CHRGACTFRT)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2CHRGACTFRT, $this->oetbcon2chrgactfrt);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON3USEFRTGRUP)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON3USEFRTGRUP, $this->oetbcon3usefrtgrup);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA, $this->oetbcon2frghtordramta);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB, $this->oetbcon2frghtordramtb);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC, $this->oetbcon2frghtordramtc);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD, $this->oetbcon2frghtordramtd);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE, $this->oetbcon2frghtordramte);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2CHRGFRGHTBKORD)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2CHRGFRGHTBKORD, $this->oetbcon2chrgfrghtbkord);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDMETH)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDMETH, $this->oetbcon2frghtaddmeth);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER, $this->oetbcon2frghtorder);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR, $this->oetbcon2frghtcntnr);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1, $this->oetbcon2frghtadd1);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1, $this->oetbcon2frghtaddamt1);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER, $this->oetbcon2frghtaddper);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER, $this->oetbcon2frghtaddamtper);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX, $this->oetbcon2frghtaddamtmax);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT, $this->oetbcon2frghtaddpct);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG)) {
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG, $this->oetbcon2frghtminchrg);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigSoFreightTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigSoFreightTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigSoFreightTableMap::COL_DUMMY)) {
            $criteria->add(ConfigSoFreightTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigSoFreightQuery::create();
        $criteria->add(ConfigSoFreightTableMap::COL_OETBCONFKEY, $this->oetbconfkey);

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
        $validPk = null !== $this->getOetbconfkey();

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
        return $this->getOetbconfkey();
    }

    /**
     * Generic method to set the primary key (oetbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOetbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getOetbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigSoFreight (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOetbconfkey($this->getOetbconfkey());
        $copyObj->setOetbconfusefrtcost($this->getOetbconfusefrtcost());
        $copyObj->setOetbcon2frtratetabl($this->getOetbcon2frtratetabl());
        $copyObj->setOetbcon2frtzonesorz($this->getOetbcon2frtzonesorz());
        $copyObj->setOetbcon2chrgactfrt($this->getOetbcon2chrgactfrt());
        $copyObj->setOetbcon3usefrtgrup($this->getOetbcon3usefrtgrup());
        $copyObj->setOetbcon2frghtordramta($this->getOetbcon2frghtordramta());
        $copyObj->setOetbcon2frghtordramtb($this->getOetbcon2frghtordramtb());
        $copyObj->setOetbcon2frghtordramtc($this->getOetbcon2frghtordramtc());
        $copyObj->setOetbcon2frghtordramtd($this->getOetbcon2frghtordramtd());
        $copyObj->setOetbcon2frghtordramte($this->getOetbcon2frghtordramte());
        $copyObj->setOetbcon2chrgfrghtbkord($this->getOetbcon2chrgfrghtbkord());
        $copyObj->setOetbcon2frghtaddmeth($this->getOetbcon2frghtaddmeth());
        $copyObj->setOetbcon2frghtorder($this->getOetbcon2frghtorder());
        $copyObj->setOetbcon2frghtcntnr($this->getOetbcon2frghtcntnr());
        $copyObj->setOetbcon2frghtadd1($this->getOetbcon2frghtadd1());
        $copyObj->setOetbcon2frghtaddamt1($this->getOetbcon2frghtaddamt1());
        $copyObj->setOetbcon2frghtaddper($this->getOetbcon2frghtaddper());
        $copyObj->setOetbcon2frghtaddamtper($this->getOetbcon2frghtaddamtper());
        $copyObj->setOetbcon2frghtaddamtmax($this->getOetbcon2frghtaddamtmax());
        $copyObj->setOetbcon2frghtaddpct($this->getOetbcon2frghtaddpct());
        $copyObj->setOetbcon2frghtminchrg($this->getOetbcon2frghtminchrg());
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
     * @return \ConfigSoFreight Clone of current object.
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
        $this->oetbconfkey = null;
        $this->oetbconfusefrtcost = null;
        $this->oetbcon2frtratetabl = null;
        $this->oetbcon2frtzonesorz = null;
        $this->oetbcon2chrgactfrt = null;
        $this->oetbcon3usefrtgrup = null;
        $this->oetbcon2frghtordramta = null;
        $this->oetbcon2frghtordramtb = null;
        $this->oetbcon2frghtordramtc = null;
        $this->oetbcon2frghtordramtd = null;
        $this->oetbcon2frghtordramte = null;
        $this->oetbcon2chrgfrghtbkord = null;
        $this->oetbcon2frghtaddmeth = null;
        $this->oetbcon2frghtorder = null;
        $this->oetbcon2frghtcntnr = null;
        $this->oetbcon2frghtadd1 = null;
        $this->oetbcon2frghtaddamt1 = null;
        $this->oetbcon2frghtaddper = null;
        $this->oetbcon2frghtaddamtper = null;
        $this->oetbcon2frghtaddamtmax = null;
        $this->oetbcon2frghtaddpct = null;
        $this->oetbcon2frghtminchrg = null;
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
        return (string) $this->exportTo(ConfigSoFreightTableMap::DEFAULT_STRING_FORMAT);
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
