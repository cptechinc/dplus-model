<?php

namespace Base;

use \ConfigPmQuery as ChildConfigPmQuery;
use \Exception;
use \PDO;
use Map\ConfigPmTableMap;
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
 * Base class that represents a row from the 'pm_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigPm implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigPmTableMap';


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
     * The value for the pmtbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pmtbconfkey;

    /**
     * The value for the pmtbconfbasesystem field.
     *
     * @var        string
     */
    protected $pmtbconfbasesystem;

    /**
     * The value for the pmtbconfadvancedsystem field.
     *
     * @var        string
     */
    protected $pmtbconfadvancedsystem;

    /**
     * The value for the pmtbconfallowneguse field.
     *
     * @var        string
     */
    protected $pmtbconfallowneguse;

    /**
     * The value for the pmtbconfscrapunused field.
     *
     * @var        string
     */
    protected $pmtbconfscrapunused;

    /**
     * The value for the pmtbconfscrapgl field.
     *
     * @var        string
     */
    protected $pmtbconfscrapgl;

    /**
     * The value for the pmtbconfwarnqtytozero field.
     *
     * @var        string
     */
    protected $pmtbconfwarnqtytozero;

    /**
     * The value for the pmtbconfvargl field.
     *
     * @var        string
     */
    protected $pmtbconfvargl;

    /**
     * The value for the pmtbconfputbincode field.
     *
     * @var        string
     */
    protected $pmtbconfputbincode;

    /**
     * The value for the pmtbconfputbindflt field.
     *
     * @var        string
     */
    protected $pmtbconfputbindflt;

    /**
     * The value for the pmtbconfserialbase field.
     *
     * @var        string
     */
    protected $pmtbconfserialbase;

    /**
     * The value for the pmtbconffgatstan field.
     *
     * @var        string
     */
    protected $pmtbconffgatstan;

    /**
     * The value for the pmtbconfglfgtomat field.
     *
     * @var        string
     */
    protected $pmtbconfglfgtomat;

    /**
     * The value for the pmtbconfpostdetsum field.
     *
     * @var        string
     */
    protected $pmtbconfpostdetsum;

    /**
     * The value for the pmtbconfsort field.
     *
     * @var        string
     */
    protected $pmtbconfsort;

    /**
     * The value for the pmtbconflastcost field.
     *
     * @var        string
     */
    protected $pmtbconflastcost;

    /**
     * The value for the pmtbconfaskbom field.
     *
     * @var        string
     */
    protected $pmtbconfaskbom;

    /**
     * The value for the pmtbconfdefbom field.
     *
     * @var        string
     */
    protected $pmtbconfdefbom;

    /**
     * The value for the pmtbconfautoselectlots field.
     *
     * @var        string
     */
    protected $pmtbconfautoselectlots;

    /**
     * The value for the pmtbconfallocwhenic field.
     *
     * @var        string
     */
    protected $pmtbconfallocwhenic;

    /**
     * The value for the pmtbconfusewpc field.
     *
     * @var        string
     */
    protected $pmtbconfusewpc;

    /**
     * The value for the pmtbconfpowgwipinproc field.
     *
     * @var        string
     */
    protected $pmtbconfpowgwipinproc;

    /**
     * The value for the pmtbconflrscost field.
     *
     * @var        string
     */
    protected $pmtbconflrscost;

    /**
     * The value for the pmtbconfvariacctg field.
     *
     * @var        string
     */
    protected $pmtbconfvariacctg;

    /**
     * The value for the pmtbconftakebincode field.
     *
     * @var        string
     */
    protected $pmtbconftakebincode;

    /**
     * The value for the pmtbconfusefguom field.
     *
     * @var        string
     */
    protected $pmtbconfusefguom;

    /**
     * The value for the pmtbconfusenc field.
     *
     * @var        string
     */
    protected $pmtbconfusenc;

    /**
     * The value for the pmtbconfusenegwip field.
     *
     * @var        string
     */
    protected $pmtbconfusenegwip;

    /**
     * The value for the pmtbcon2advwipactentry field.
     *
     * @var        string
     */
    protected $pmtbcon2advwipactentry;

    /**
     * The value for the pmtbcon2machlaborgl field.
     *
     * @var        string
     */
    protected $pmtbcon2machlaborgl;

    /**
     * The value for the pmtbcon2machsetupgl field.
     *
     * @var        string
     */
    protected $pmtbcon2machsetupgl;

    /**
     * The value for the pmtbcon2burdenlaborgl field.
     *
     * @var        string
     */
    protected $pmtbcon2burdenlaborgl;

    /**
     * The value for the pmtbcon2burdenmachgl field.
     *
     * @var        string
     */
    protected $pmtbcon2burdenmachgl;

    /**
     * The value for the pmtbcon2burdenadmingl field.
     *
     * @var        string
     */
    protected $pmtbcon2burdenadmingl;

    /**
     * The value for the pmtbcon2setupasoper field.
     *
     * @var        string
     */
    protected $pmtbcon2setupasoper;

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
        $this->pmtbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigPm object.
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
     * Compares this with another <code>ConfigPm</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigPm</code>, delegates to
     * <code>equals(ConfigPm)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigPm The current object, for fluid interface
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
     * Get the [pmtbconfkey] column value.
     *
     * @return int
     */
    public function getPmtbconfkey()
    {
        return $this->pmtbconfkey;
    }

    /**
     * Get the [pmtbconfbasesystem] column value.
     *
     * @return string
     */
    public function getPmtbconfbasesystem()
    {
        return $this->pmtbconfbasesystem;
    }

    /**
     * Get the [pmtbconfadvancedsystem] column value.
     *
     * @return string
     */
    public function getPmtbconfadvancedsystem()
    {
        return $this->pmtbconfadvancedsystem;
    }

    /**
     * Get the [pmtbconfallowneguse] column value.
     *
     * @return string
     */
    public function getPmtbconfallowneguse()
    {
        return $this->pmtbconfallowneguse;
    }

    /**
     * Get the [pmtbconfscrapunused] column value.
     *
     * @return string
     */
    public function getPmtbconfscrapunused()
    {
        return $this->pmtbconfscrapunused;
    }

    /**
     * Get the [pmtbconfscrapgl] column value.
     *
     * @return string
     */
    public function getPmtbconfscrapgl()
    {
        return $this->pmtbconfscrapgl;
    }

    /**
     * Get the [pmtbconfwarnqtytozero] column value.
     *
     * @return string
     */
    public function getPmtbconfwarnqtytozero()
    {
        return $this->pmtbconfwarnqtytozero;
    }

    /**
     * Get the [pmtbconfvargl] column value.
     *
     * @return string
     */
    public function getPmtbconfvargl()
    {
        return $this->pmtbconfvargl;
    }

    /**
     * Get the [pmtbconfputbincode] column value.
     *
     * @return string
     */
    public function getPmtbconfputbincode()
    {
        return $this->pmtbconfputbincode;
    }

    /**
     * Get the [pmtbconfputbindflt] column value.
     *
     * @return string
     */
    public function getPmtbconfputbindflt()
    {
        return $this->pmtbconfputbindflt;
    }

    /**
     * Get the [pmtbconfserialbase] column value.
     *
     * @return string
     */
    public function getPmtbconfserialbase()
    {
        return $this->pmtbconfserialbase;
    }

    /**
     * Get the [pmtbconffgatstan] column value.
     *
     * @return string
     */
    public function getPmtbconffgatstan()
    {
        return $this->pmtbconffgatstan;
    }

    /**
     * Get the [pmtbconfglfgtomat] column value.
     *
     * @return string
     */
    public function getPmtbconfglfgtomat()
    {
        return $this->pmtbconfglfgtomat;
    }

    /**
     * Get the [pmtbconfpostdetsum] column value.
     *
     * @return string
     */
    public function getPmtbconfpostdetsum()
    {
        return $this->pmtbconfpostdetsum;
    }

    /**
     * Get the [pmtbconfsort] column value.
     *
     * @return string
     */
    public function getPmtbconfsort()
    {
        return $this->pmtbconfsort;
    }

    /**
     * Get the [pmtbconflastcost] column value.
     *
     * @return string
     */
    public function getPmtbconflastcost()
    {
        return $this->pmtbconflastcost;
    }

    /**
     * Get the [pmtbconfaskbom] column value.
     *
     * @return string
     */
    public function getPmtbconfaskbom()
    {
        return $this->pmtbconfaskbom;
    }

    /**
     * Get the [pmtbconfdefbom] column value.
     *
     * @return string
     */
    public function getPmtbconfdefbom()
    {
        return $this->pmtbconfdefbom;
    }

    /**
     * Get the [pmtbconfautoselectlots] column value.
     *
     * @return string
     */
    public function getPmtbconfautoselectlots()
    {
        return $this->pmtbconfautoselectlots;
    }

    /**
     * Get the [pmtbconfallocwhenic] column value.
     *
     * @return string
     */
    public function getPmtbconfallocwhenic()
    {
        return $this->pmtbconfallocwhenic;
    }

    /**
     * Get the [pmtbconfusewpc] column value.
     *
     * @return string
     */
    public function getPmtbconfusewpc()
    {
        return $this->pmtbconfusewpc;
    }

    /**
     * Get the [pmtbconfpowgwipinproc] column value.
     *
     * @return string
     */
    public function getPmtbconfpowgwipinproc()
    {
        return $this->pmtbconfpowgwipinproc;
    }

    /**
     * Get the [pmtbconflrscost] column value.
     *
     * @return string
     */
    public function getPmtbconflrscost()
    {
        return $this->pmtbconflrscost;
    }

    /**
     * Get the [pmtbconfvariacctg] column value.
     *
     * @return string
     */
    public function getPmtbconfvariacctg()
    {
        return $this->pmtbconfvariacctg;
    }

    /**
     * Get the [pmtbconftakebincode] column value.
     *
     * @return string
     */
    public function getPmtbconftakebincode()
    {
        return $this->pmtbconftakebincode;
    }

    /**
     * Get the [pmtbconfusefguom] column value.
     *
     * @return string
     */
    public function getPmtbconfusefguom()
    {
        return $this->pmtbconfusefguom;
    }

    /**
     * Get the [pmtbconfusenc] column value.
     *
     * @return string
     */
    public function getPmtbconfusenc()
    {
        return $this->pmtbconfusenc;
    }

    /**
     * Get the [pmtbconfusenegwip] column value.
     *
     * @return string
     */
    public function getPmtbconfusenegwip()
    {
        return $this->pmtbconfusenegwip;
    }

    /**
     * Get the [pmtbcon2advwipactentry] column value.
     *
     * @return string
     */
    public function getPmtbcon2advwipactentry()
    {
        return $this->pmtbcon2advwipactentry;
    }

    /**
     * Get the [pmtbcon2machlaborgl] column value.
     *
     * @return string
     */
    public function getPmtbcon2machlaborgl()
    {
        return $this->pmtbcon2machlaborgl;
    }

    /**
     * Get the [pmtbcon2machsetupgl] column value.
     *
     * @return string
     */
    public function getPmtbcon2machsetupgl()
    {
        return $this->pmtbcon2machsetupgl;
    }

    /**
     * Get the [pmtbcon2burdenlaborgl] column value.
     *
     * @return string
     */
    public function getPmtbcon2burdenlaborgl()
    {
        return $this->pmtbcon2burdenlaborgl;
    }

    /**
     * Get the [pmtbcon2burdenmachgl] column value.
     *
     * @return string
     */
    public function getPmtbcon2burdenmachgl()
    {
        return $this->pmtbcon2burdenmachgl;
    }

    /**
     * Get the [pmtbcon2burdenadmingl] column value.
     *
     * @return string
     */
    public function getPmtbcon2burdenadmingl()
    {
        return $this->pmtbcon2burdenadmingl;
    }

    /**
     * Get the [pmtbcon2setupasoper] column value.
     *
     * @return string
     */
    public function getPmtbcon2setupasoper()
    {
        return $this->pmtbcon2setupasoper;
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
     * Set the value of [pmtbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pmtbconfkey !== $v) {
            $this->pmtbconfkey = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFKEY] = true;
        }

        return $this;
    } // setPmtbconfkey()

    /**
     * Set the value of [pmtbconfbasesystem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfbasesystem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfbasesystem !== $v) {
            $this->pmtbconfbasesystem = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFBASESYSTEM] = true;
        }

        return $this;
    } // setPmtbconfbasesystem()

    /**
     * Set the value of [pmtbconfadvancedsystem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfadvancedsystem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfadvancedsystem !== $v) {
            $this->pmtbconfadvancedsystem = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM] = true;
        }

        return $this;
    } // setPmtbconfadvancedsystem()

    /**
     * Set the value of [pmtbconfallowneguse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfallowneguse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfallowneguse !== $v) {
            $this->pmtbconfallowneguse = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE] = true;
        }

        return $this;
    } // setPmtbconfallowneguse()

    /**
     * Set the value of [pmtbconfscrapunused] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfscrapunused($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfscrapunused !== $v) {
            $this->pmtbconfscrapunused = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED] = true;
        }

        return $this;
    } // setPmtbconfscrapunused()

    /**
     * Set the value of [pmtbconfscrapgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfscrapgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfscrapgl !== $v) {
            $this->pmtbconfscrapgl = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFSCRAPGL] = true;
        }

        return $this;
    } // setPmtbconfscrapgl()

    /**
     * Set the value of [pmtbconfwarnqtytozero] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfwarnqtytozero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfwarnqtytozero !== $v) {
            $this->pmtbconfwarnqtytozero = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO] = true;
        }

        return $this;
    } // setPmtbconfwarnqtytozero()

    /**
     * Set the value of [pmtbconfvargl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfvargl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfvargl !== $v) {
            $this->pmtbconfvargl = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFVARGL] = true;
        }

        return $this;
    } // setPmtbconfvargl()

    /**
     * Set the value of [pmtbconfputbincode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfputbincode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfputbincode !== $v) {
            $this->pmtbconfputbincode = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFPUTBINCODE] = true;
        }

        return $this;
    } // setPmtbconfputbincode()

    /**
     * Set the value of [pmtbconfputbindflt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfputbindflt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfputbindflt !== $v) {
            $this->pmtbconfputbindflt = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT] = true;
        }

        return $this;
    } // setPmtbconfputbindflt()

    /**
     * Set the value of [pmtbconfserialbase] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfserialbase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfserialbase !== $v) {
            $this->pmtbconfserialbase = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFSERIALBASE] = true;
        }

        return $this;
    } // setPmtbconfserialbase()

    /**
     * Set the value of [pmtbconffgatstan] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconffgatstan($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconffgatstan !== $v) {
            $this->pmtbconffgatstan = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFFGATSTAN] = true;
        }

        return $this;
    } // setPmtbconffgatstan()

    /**
     * Set the value of [pmtbconfglfgtomat] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfglfgtomat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfglfgtomat !== $v) {
            $this->pmtbconfglfgtomat = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT] = true;
        }

        return $this;
    } // setPmtbconfglfgtomat()

    /**
     * Set the value of [pmtbconfpostdetsum] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfpostdetsum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfpostdetsum !== $v) {
            $this->pmtbconfpostdetsum = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM] = true;
        }

        return $this;
    } // setPmtbconfpostdetsum()

    /**
     * Set the value of [pmtbconfsort] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfsort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfsort !== $v) {
            $this->pmtbconfsort = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFSORT] = true;
        }

        return $this;
    } // setPmtbconfsort()

    /**
     * Set the value of [pmtbconflastcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconflastcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconflastcost !== $v) {
            $this->pmtbconflastcost = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFLASTCOST] = true;
        }

        return $this;
    } // setPmtbconflastcost()

    /**
     * Set the value of [pmtbconfaskbom] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfaskbom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfaskbom !== $v) {
            $this->pmtbconfaskbom = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFASKBOM] = true;
        }

        return $this;
    } // setPmtbconfaskbom()

    /**
     * Set the value of [pmtbconfdefbom] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfdefbom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfdefbom !== $v) {
            $this->pmtbconfdefbom = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFDEFBOM] = true;
        }

        return $this;
    } // setPmtbconfdefbom()

    /**
     * Set the value of [pmtbconfautoselectlots] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfautoselectlots($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfautoselectlots !== $v) {
            $this->pmtbconfautoselectlots = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS] = true;
        }

        return $this;
    } // setPmtbconfautoselectlots()

    /**
     * Set the value of [pmtbconfallocwhenic] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfallocwhenic($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfallocwhenic !== $v) {
            $this->pmtbconfallocwhenic = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC] = true;
        }

        return $this;
    } // setPmtbconfallocwhenic()

    /**
     * Set the value of [pmtbconfusewpc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfusewpc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfusewpc !== $v) {
            $this->pmtbconfusewpc = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFUSEWPC] = true;
        }

        return $this;
    } // setPmtbconfusewpc()

    /**
     * Set the value of [pmtbconfpowgwipinproc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfpowgwipinproc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfpowgwipinproc !== $v) {
            $this->pmtbconfpowgwipinproc = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC] = true;
        }

        return $this;
    } // setPmtbconfpowgwipinproc()

    /**
     * Set the value of [pmtbconflrscost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconflrscost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconflrscost !== $v) {
            $this->pmtbconflrscost = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFLRSCOST] = true;
        }

        return $this;
    } // setPmtbconflrscost()

    /**
     * Set the value of [pmtbconfvariacctg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfvariacctg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfvariacctg !== $v) {
            $this->pmtbconfvariacctg = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFVARIACCTG] = true;
        }

        return $this;
    } // setPmtbconfvariacctg()

    /**
     * Set the value of [pmtbconftakebincode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconftakebincode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconftakebincode !== $v) {
            $this->pmtbconftakebincode = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE] = true;
        }

        return $this;
    } // setPmtbconftakebincode()

    /**
     * Set the value of [pmtbconfusefguom] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfusefguom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfusefguom !== $v) {
            $this->pmtbconfusefguom = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFUSEFGUOM] = true;
        }

        return $this;
    } // setPmtbconfusefguom()

    /**
     * Set the value of [pmtbconfusenc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfusenc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfusenc !== $v) {
            $this->pmtbconfusenc = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFUSENC] = true;
        }

        return $this;
    } // setPmtbconfusenc()

    /**
     * Set the value of [pmtbconfusenegwip] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbconfusenegwip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbconfusenegwip !== $v) {
            $this->pmtbconfusenegwip = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCONFUSENEGWIP] = true;
        }

        return $this;
    } // setPmtbconfusenegwip()

    /**
     * Set the value of [pmtbcon2advwipactentry] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbcon2advwipactentry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbcon2advwipactentry !== $v) {
            $this->pmtbcon2advwipactentry = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY] = true;
        }

        return $this;
    } // setPmtbcon2advwipactentry()

    /**
     * Set the value of [pmtbcon2machlaborgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbcon2machlaborgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbcon2machlaborgl !== $v) {
            $this->pmtbcon2machlaborgl = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCON2MACHLABORGL] = true;
        }

        return $this;
    } // setPmtbcon2machlaborgl()

    /**
     * Set the value of [pmtbcon2machsetupgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbcon2machsetupgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbcon2machsetupgl !== $v) {
            $this->pmtbcon2machsetupgl = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL] = true;
        }

        return $this;
    } // setPmtbcon2machsetupgl()

    /**
     * Set the value of [pmtbcon2burdenlaborgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbcon2burdenlaborgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbcon2burdenlaborgl !== $v) {
            $this->pmtbcon2burdenlaborgl = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL] = true;
        }

        return $this;
    } // setPmtbcon2burdenlaborgl()

    /**
     * Set the value of [pmtbcon2burdenmachgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbcon2burdenmachgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbcon2burdenmachgl !== $v) {
            $this->pmtbcon2burdenmachgl = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL] = true;
        }

        return $this;
    } // setPmtbcon2burdenmachgl()

    /**
     * Set the value of [pmtbcon2burdenadmingl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbcon2burdenadmingl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbcon2burdenadmingl !== $v) {
            $this->pmtbcon2burdenadmingl = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL] = true;
        }

        return $this;
    } // setPmtbcon2burdenadmingl()

    /**
     * Set the value of [pmtbcon2setupasoper] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setPmtbcon2setupasoper($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pmtbcon2setupasoper !== $v) {
            $this->pmtbcon2setupasoper = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_PMTBCON2SETUPASOPER] = true;
        }

        return $this;
    } // setPmtbcon2setupasoper()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigPm The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigPmTableMap::COL_DUMMY] = true;
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
            if ($this->pmtbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfbasesystem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfbasesystem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfadvancedsystem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfadvancedsystem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfallowneguse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfallowneguse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfscrapunused', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfscrapunused = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfscrapgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfscrapgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfwarnqtytozero', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfwarnqtytozero = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfvargl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfvargl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfputbincode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfputbincode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfputbindflt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfputbindflt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfserialbase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfserialbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconffgatstan', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconffgatstan = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfglfgtomat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfglfgtomat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfpostdetsum', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfpostdetsum = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfsort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfsort = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconflastcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconflastcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfaskbom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfaskbom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfdefbom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfdefbom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfautoselectlots', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfautoselectlots = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfallocwhenic', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfallocwhenic = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfusewpc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfusewpc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfpowgwipinproc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfpowgwipinproc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconflrscost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconflrscost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfvariacctg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfvariacctg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconftakebincode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconftakebincode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfusefguom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfusefguom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfusenc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfusenc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbconfusenegwip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbconfusenegwip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbcon2advwipactentry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbcon2advwipactentry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbcon2machlaborgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbcon2machlaborgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbcon2machsetupgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbcon2machsetupgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbcon2burdenlaborgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbcon2burdenlaborgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbcon2burdenmachgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbcon2burdenmachgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbcon2burdenadmingl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbcon2burdenadmingl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ConfigPmTableMap::translateFieldName('Pmtbcon2setupasoper', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pmtbcon2setupasoper = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ConfigPmTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ConfigPmTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ConfigPmTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 38; // 38 = ConfigPmTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigPm'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigPmTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigPmQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigPm::setDeleted()
     * @see ConfigPm::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPmTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigPmQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPmTableMap::DATABASE_NAME);
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
                ConfigPmTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfKey';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFBASESYSTEM)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfBaseSystem';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfAdvancedSystem';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfAllowNegUse';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfScrapUnused';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFSCRAPGL)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfScrapGl';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfWarnQtyToZero';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFVARGL)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfVarGl';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFPUTBINCODE)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfPutBinCode';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfPutBinDflt';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFSERIALBASE)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfSerialBase';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFFGATSTAN)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfFgAtStan';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfGlFgToMat';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfPostDetSum';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFSORT)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfSort';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFLASTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfLastCost';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFASKBOM)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfAskBom';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFDEFBOM)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfDefBom';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfAutoSelectLots';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfAllocWhenIC';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFUSEWPC)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfUseWpc';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfPowgWipInProc';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFLRSCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfLrsCost';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFVARIACCTG)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfVariAcctg';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfTakeBinCode';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFUSEFGUOM)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfUseFgUom';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFUSENC)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfUseNc';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFUSENEGWIP)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbConfUseNegWip';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbCon2AdvWipActEntry';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2MACHLABORGL)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbCon2MachLaborGl';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbCon2MachSetupGl';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbCon2BurdenLaborGl';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbCon2BurdenMachGl';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbCon2BurdenAdminGl';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2SETUPASOPER)) {
            $modifiedColumns[':p' . $index++]  = 'PmtbCon2SetupAsOper';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO pm_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'PmtbConfKey':
                        $stmt->bindValue($identifier, $this->pmtbconfkey, PDO::PARAM_INT);
                        break;
                    case 'PmtbConfBaseSystem':
                        $stmt->bindValue($identifier, $this->pmtbconfbasesystem, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfAdvancedSystem':
                        $stmt->bindValue($identifier, $this->pmtbconfadvancedsystem, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfAllowNegUse':
                        $stmt->bindValue($identifier, $this->pmtbconfallowneguse, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfScrapUnused':
                        $stmt->bindValue($identifier, $this->pmtbconfscrapunused, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfScrapGl':
                        $stmt->bindValue($identifier, $this->pmtbconfscrapgl, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfWarnQtyToZero':
                        $stmt->bindValue($identifier, $this->pmtbconfwarnqtytozero, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfVarGl':
                        $stmt->bindValue($identifier, $this->pmtbconfvargl, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfPutBinCode':
                        $stmt->bindValue($identifier, $this->pmtbconfputbincode, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfPutBinDflt':
                        $stmt->bindValue($identifier, $this->pmtbconfputbindflt, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfSerialBase':
                        $stmt->bindValue($identifier, $this->pmtbconfserialbase, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfFgAtStan':
                        $stmt->bindValue($identifier, $this->pmtbconffgatstan, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfGlFgToMat':
                        $stmt->bindValue($identifier, $this->pmtbconfglfgtomat, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfPostDetSum':
                        $stmt->bindValue($identifier, $this->pmtbconfpostdetsum, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfSort':
                        $stmt->bindValue($identifier, $this->pmtbconfsort, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfLastCost':
                        $stmt->bindValue($identifier, $this->pmtbconflastcost, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfAskBom':
                        $stmt->bindValue($identifier, $this->pmtbconfaskbom, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfDefBom':
                        $stmt->bindValue($identifier, $this->pmtbconfdefbom, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfAutoSelectLots':
                        $stmt->bindValue($identifier, $this->pmtbconfautoselectlots, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfAllocWhenIC':
                        $stmt->bindValue($identifier, $this->pmtbconfallocwhenic, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfUseWpc':
                        $stmt->bindValue($identifier, $this->pmtbconfusewpc, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfPowgWipInProc':
                        $stmt->bindValue($identifier, $this->pmtbconfpowgwipinproc, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfLrsCost':
                        $stmt->bindValue($identifier, $this->pmtbconflrscost, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfVariAcctg':
                        $stmt->bindValue($identifier, $this->pmtbconfvariacctg, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfTakeBinCode':
                        $stmt->bindValue($identifier, $this->pmtbconftakebincode, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfUseFgUom':
                        $stmt->bindValue($identifier, $this->pmtbconfusefguom, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfUseNc':
                        $stmt->bindValue($identifier, $this->pmtbconfusenc, PDO::PARAM_STR);
                        break;
                    case 'PmtbConfUseNegWip':
                        $stmt->bindValue($identifier, $this->pmtbconfusenegwip, PDO::PARAM_STR);
                        break;
                    case 'PmtbCon2AdvWipActEntry':
                        $stmt->bindValue($identifier, $this->pmtbcon2advwipactentry, PDO::PARAM_STR);
                        break;
                    case 'PmtbCon2MachLaborGl':
                        $stmt->bindValue($identifier, $this->pmtbcon2machlaborgl, PDO::PARAM_STR);
                        break;
                    case 'PmtbCon2MachSetupGl':
                        $stmt->bindValue($identifier, $this->pmtbcon2machsetupgl, PDO::PARAM_STR);
                        break;
                    case 'PmtbCon2BurdenLaborGl':
                        $stmt->bindValue($identifier, $this->pmtbcon2burdenlaborgl, PDO::PARAM_STR);
                        break;
                    case 'PmtbCon2BurdenMachGl':
                        $stmt->bindValue($identifier, $this->pmtbcon2burdenmachgl, PDO::PARAM_STR);
                        break;
                    case 'PmtbCon2BurdenAdminGl':
                        $stmt->bindValue($identifier, $this->pmtbcon2burdenadmingl, PDO::PARAM_STR);
                        break;
                    case 'PmtbCon2SetupAsOper':
                        $stmt->bindValue($identifier, $this->pmtbcon2setupasoper, PDO::PARAM_STR);
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
        $pos = ConfigPmTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPmtbconfkey();
                break;
            case 1:
                return $this->getPmtbconfbasesystem();
                break;
            case 2:
                return $this->getPmtbconfadvancedsystem();
                break;
            case 3:
                return $this->getPmtbconfallowneguse();
                break;
            case 4:
                return $this->getPmtbconfscrapunused();
                break;
            case 5:
                return $this->getPmtbconfscrapgl();
                break;
            case 6:
                return $this->getPmtbconfwarnqtytozero();
                break;
            case 7:
                return $this->getPmtbconfvargl();
                break;
            case 8:
                return $this->getPmtbconfputbincode();
                break;
            case 9:
                return $this->getPmtbconfputbindflt();
                break;
            case 10:
                return $this->getPmtbconfserialbase();
                break;
            case 11:
                return $this->getPmtbconffgatstan();
                break;
            case 12:
                return $this->getPmtbconfglfgtomat();
                break;
            case 13:
                return $this->getPmtbconfpostdetsum();
                break;
            case 14:
                return $this->getPmtbconfsort();
                break;
            case 15:
                return $this->getPmtbconflastcost();
                break;
            case 16:
                return $this->getPmtbconfaskbom();
                break;
            case 17:
                return $this->getPmtbconfdefbom();
                break;
            case 18:
                return $this->getPmtbconfautoselectlots();
                break;
            case 19:
                return $this->getPmtbconfallocwhenic();
                break;
            case 20:
                return $this->getPmtbconfusewpc();
                break;
            case 21:
                return $this->getPmtbconfpowgwipinproc();
                break;
            case 22:
                return $this->getPmtbconflrscost();
                break;
            case 23:
                return $this->getPmtbconfvariacctg();
                break;
            case 24:
                return $this->getPmtbconftakebincode();
                break;
            case 25:
                return $this->getPmtbconfusefguom();
                break;
            case 26:
                return $this->getPmtbconfusenc();
                break;
            case 27:
                return $this->getPmtbconfusenegwip();
                break;
            case 28:
                return $this->getPmtbcon2advwipactentry();
                break;
            case 29:
                return $this->getPmtbcon2machlaborgl();
                break;
            case 30:
                return $this->getPmtbcon2machsetupgl();
                break;
            case 31:
                return $this->getPmtbcon2burdenlaborgl();
                break;
            case 32:
                return $this->getPmtbcon2burdenmachgl();
                break;
            case 33:
                return $this->getPmtbcon2burdenadmingl();
                break;
            case 34:
                return $this->getPmtbcon2setupasoper();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['ConfigPm'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigPm'][$this->hashCode()] = true;
        $keys = ConfigPmTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPmtbconfkey(),
            $keys[1] => $this->getPmtbconfbasesystem(),
            $keys[2] => $this->getPmtbconfadvancedsystem(),
            $keys[3] => $this->getPmtbconfallowneguse(),
            $keys[4] => $this->getPmtbconfscrapunused(),
            $keys[5] => $this->getPmtbconfscrapgl(),
            $keys[6] => $this->getPmtbconfwarnqtytozero(),
            $keys[7] => $this->getPmtbconfvargl(),
            $keys[8] => $this->getPmtbconfputbincode(),
            $keys[9] => $this->getPmtbconfputbindflt(),
            $keys[10] => $this->getPmtbconfserialbase(),
            $keys[11] => $this->getPmtbconffgatstan(),
            $keys[12] => $this->getPmtbconfglfgtomat(),
            $keys[13] => $this->getPmtbconfpostdetsum(),
            $keys[14] => $this->getPmtbconfsort(),
            $keys[15] => $this->getPmtbconflastcost(),
            $keys[16] => $this->getPmtbconfaskbom(),
            $keys[17] => $this->getPmtbconfdefbom(),
            $keys[18] => $this->getPmtbconfautoselectlots(),
            $keys[19] => $this->getPmtbconfallocwhenic(),
            $keys[20] => $this->getPmtbconfusewpc(),
            $keys[21] => $this->getPmtbconfpowgwipinproc(),
            $keys[22] => $this->getPmtbconflrscost(),
            $keys[23] => $this->getPmtbconfvariacctg(),
            $keys[24] => $this->getPmtbconftakebincode(),
            $keys[25] => $this->getPmtbconfusefguom(),
            $keys[26] => $this->getPmtbconfusenc(),
            $keys[27] => $this->getPmtbconfusenegwip(),
            $keys[28] => $this->getPmtbcon2advwipactentry(),
            $keys[29] => $this->getPmtbcon2machlaborgl(),
            $keys[30] => $this->getPmtbcon2machsetupgl(),
            $keys[31] => $this->getPmtbcon2burdenlaborgl(),
            $keys[32] => $this->getPmtbcon2burdenmachgl(),
            $keys[33] => $this->getPmtbcon2burdenadmingl(),
            $keys[34] => $this->getPmtbcon2setupasoper(),
            $keys[35] => $this->getDateupdtd(),
            $keys[36] => $this->getTimeupdtd(),
            $keys[37] => $this->getDummy(),
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
     * @return $this|\ConfigPm
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigPmTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigPm
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPmtbconfkey($value);
                break;
            case 1:
                $this->setPmtbconfbasesystem($value);
                break;
            case 2:
                $this->setPmtbconfadvancedsystem($value);
                break;
            case 3:
                $this->setPmtbconfallowneguse($value);
                break;
            case 4:
                $this->setPmtbconfscrapunused($value);
                break;
            case 5:
                $this->setPmtbconfscrapgl($value);
                break;
            case 6:
                $this->setPmtbconfwarnqtytozero($value);
                break;
            case 7:
                $this->setPmtbconfvargl($value);
                break;
            case 8:
                $this->setPmtbconfputbincode($value);
                break;
            case 9:
                $this->setPmtbconfputbindflt($value);
                break;
            case 10:
                $this->setPmtbconfserialbase($value);
                break;
            case 11:
                $this->setPmtbconffgatstan($value);
                break;
            case 12:
                $this->setPmtbconfglfgtomat($value);
                break;
            case 13:
                $this->setPmtbconfpostdetsum($value);
                break;
            case 14:
                $this->setPmtbconfsort($value);
                break;
            case 15:
                $this->setPmtbconflastcost($value);
                break;
            case 16:
                $this->setPmtbconfaskbom($value);
                break;
            case 17:
                $this->setPmtbconfdefbom($value);
                break;
            case 18:
                $this->setPmtbconfautoselectlots($value);
                break;
            case 19:
                $this->setPmtbconfallocwhenic($value);
                break;
            case 20:
                $this->setPmtbconfusewpc($value);
                break;
            case 21:
                $this->setPmtbconfpowgwipinproc($value);
                break;
            case 22:
                $this->setPmtbconflrscost($value);
                break;
            case 23:
                $this->setPmtbconfvariacctg($value);
                break;
            case 24:
                $this->setPmtbconftakebincode($value);
                break;
            case 25:
                $this->setPmtbconfusefguom($value);
                break;
            case 26:
                $this->setPmtbconfusenc($value);
                break;
            case 27:
                $this->setPmtbconfusenegwip($value);
                break;
            case 28:
                $this->setPmtbcon2advwipactentry($value);
                break;
            case 29:
                $this->setPmtbcon2machlaborgl($value);
                break;
            case 30:
                $this->setPmtbcon2machsetupgl($value);
                break;
            case 31:
                $this->setPmtbcon2burdenlaborgl($value);
                break;
            case 32:
                $this->setPmtbcon2burdenmachgl($value);
                break;
            case 33:
                $this->setPmtbcon2burdenadmingl($value);
                break;
            case 34:
                $this->setPmtbcon2setupasoper($value);
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
        $keys = ConfigPmTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPmtbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPmtbconfbasesystem($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPmtbconfadvancedsystem($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setPmtbconfallowneguse($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPmtbconfscrapunused($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPmtbconfscrapgl($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPmtbconfwarnqtytozero($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPmtbconfvargl($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPmtbconfputbincode($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPmtbconfputbindflt($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPmtbconfserialbase($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPmtbconffgatstan($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPmtbconfglfgtomat($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPmtbconfpostdetsum($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPmtbconfsort($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPmtbconflastcost($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPmtbconfaskbom($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPmtbconfdefbom($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPmtbconfautoselectlots($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setPmtbconfallocwhenic($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setPmtbconfusewpc($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setPmtbconfpowgwipinproc($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setPmtbconflrscost($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setPmtbconfvariacctg($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setPmtbconftakebincode($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setPmtbconfusefguom($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setPmtbconfusenc($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setPmtbconfusenegwip($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setPmtbcon2advwipactentry($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setPmtbcon2machlaborgl($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setPmtbcon2machsetupgl($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setPmtbcon2burdenlaborgl($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setPmtbcon2burdenmachgl($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setPmtbcon2burdenadmingl($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setPmtbcon2setupasoper($arr[$keys[34]]);
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
     * @return $this|\ConfigPm The current object, for fluid interface
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
        $criteria = new Criteria(ConfigPmTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFKEY)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFKEY, $this->pmtbconfkey);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFBASESYSTEM)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFBASESYSTEM, $this->pmtbconfbasesystem);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM, $this->pmtbconfadvancedsystem);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE, $this->pmtbconfallowneguse);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED, $this->pmtbconfscrapunused);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFSCRAPGL)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFSCRAPGL, $this->pmtbconfscrapgl);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO, $this->pmtbconfwarnqtytozero);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFVARGL)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFVARGL, $this->pmtbconfvargl);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFPUTBINCODE)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFPUTBINCODE, $this->pmtbconfputbincode);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT, $this->pmtbconfputbindflt);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFSERIALBASE)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFSERIALBASE, $this->pmtbconfserialbase);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFFGATSTAN)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFFGATSTAN, $this->pmtbconffgatstan);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT, $this->pmtbconfglfgtomat);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM, $this->pmtbconfpostdetsum);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFSORT)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFSORT, $this->pmtbconfsort);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFLASTCOST)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFLASTCOST, $this->pmtbconflastcost);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFASKBOM)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFASKBOM, $this->pmtbconfaskbom);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFDEFBOM)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFDEFBOM, $this->pmtbconfdefbom);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS, $this->pmtbconfautoselectlots);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC, $this->pmtbconfallocwhenic);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFUSEWPC)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFUSEWPC, $this->pmtbconfusewpc);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC, $this->pmtbconfpowgwipinproc);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFLRSCOST)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFLRSCOST, $this->pmtbconflrscost);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFVARIACCTG)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFVARIACCTG, $this->pmtbconfvariacctg);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE, $this->pmtbconftakebincode);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFUSEFGUOM)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFUSEFGUOM, $this->pmtbconfusefguom);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFUSENC)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFUSENC, $this->pmtbconfusenc);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCONFUSENEGWIP)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFUSENEGWIP, $this->pmtbconfusenegwip);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY, $this->pmtbcon2advwipactentry);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2MACHLABORGL)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCON2MACHLABORGL, $this->pmtbcon2machlaborgl);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL, $this->pmtbcon2machsetupgl);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL, $this->pmtbcon2burdenlaborgl);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL, $this->pmtbcon2burdenmachgl);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL, $this->pmtbcon2burdenadmingl);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_PMTBCON2SETUPASOPER)) {
            $criteria->add(ConfigPmTableMap::COL_PMTBCON2SETUPASOPER, $this->pmtbcon2setupasoper);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigPmTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigPmTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigPmTableMap::COL_DUMMY)) {
            $criteria->add(ConfigPmTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigPmQuery::create();
        $criteria->add(ConfigPmTableMap::COL_PMTBCONFKEY, $this->pmtbconfkey);

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
        $validPk = null !== $this->getPmtbconfkey();

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
        return $this->getPmtbconfkey();
    }

    /**
     * Generic method to set the primary key (pmtbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPmtbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getPmtbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigPm (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPmtbconfkey($this->getPmtbconfkey());
        $copyObj->setPmtbconfbasesystem($this->getPmtbconfbasesystem());
        $copyObj->setPmtbconfadvancedsystem($this->getPmtbconfadvancedsystem());
        $copyObj->setPmtbconfallowneguse($this->getPmtbconfallowneguse());
        $copyObj->setPmtbconfscrapunused($this->getPmtbconfscrapunused());
        $copyObj->setPmtbconfscrapgl($this->getPmtbconfscrapgl());
        $copyObj->setPmtbconfwarnqtytozero($this->getPmtbconfwarnqtytozero());
        $copyObj->setPmtbconfvargl($this->getPmtbconfvargl());
        $copyObj->setPmtbconfputbincode($this->getPmtbconfputbincode());
        $copyObj->setPmtbconfputbindflt($this->getPmtbconfputbindflt());
        $copyObj->setPmtbconfserialbase($this->getPmtbconfserialbase());
        $copyObj->setPmtbconffgatstan($this->getPmtbconffgatstan());
        $copyObj->setPmtbconfglfgtomat($this->getPmtbconfglfgtomat());
        $copyObj->setPmtbconfpostdetsum($this->getPmtbconfpostdetsum());
        $copyObj->setPmtbconfsort($this->getPmtbconfsort());
        $copyObj->setPmtbconflastcost($this->getPmtbconflastcost());
        $copyObj->setPmtbconfaskbom($this->getPmtbconfaskbom());
        $copyObj->setPmtbconfdefbom($this->getPmtbconfdefbom());
        $copyObj->setPmtbconfautoselectlots($this->getPmtbconfautoselectlots());
        $copyObj->setPmtbconfallocwhenic($this->getPmtbconfallocwhenic());
        $copyObj->setPmtbconfusewpc($this->getPmtbconfusewpc());
        $copyObj->setPmtbconfpowgwipinproc($this->getPmtbconfpowgwipinproc());
        $copyObj->setPmtbconflrscost($this->getPmtbconflrscost());
        $copyObj->setPmtbconfvariacctg($this->getPmtbconfvariacctg());
        $copyObj->setPmtbconftakebincode($this->getPmtbconftakebincode());
        $copyObj->setPmtbconfusefguom($this->getPmtbconfusefguom());
        $copyObj->setPmtbconfusenc($this->getPmtbconfusenc());
        $copyObj->setPmtbconfusenegwip($this->getPmtbconfusenegwip());
        $copyObj->setPmtbcon2advwipactentry($this->getPmtbcon2advwipactentry());
        $copyObj->setPmtbcon2machlaborgl($this->getPmtbcon2machlaborgl());
        $copyObj->setPmtbcon2machsetupgl($this->getPmtbcon2machsetupgl());
        $copyObj->setPmtbcon2burdenlaborgl($this->getPmtbcon2burdenlaborgl());
        $copyObj->setPmtbcon2burdenmachgl($this->getPmtbcon2burdenmachgl());
        $copyObj->setPmtbcon2burdenadmingl($this->getPmtbcon2burdenadmingl());
        $copyObj->setPmtbcon2setupasoper($this->getPmtbcon2setupasoper());
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
     * @return \ConfigPm Clone of current object.
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
        $this->pmtbconfkey = null;
        $this->pmtbconfbasesystem = null;
        $this->pmtbconfadvancedsystem = null;
        $this->pmtbconfallowneguse = null;
        $this->pmtbconfscrapunused = null;
        $this->pmtbconfscrapgl = null;
        $this->pmtbconfwarnqtytozero = null;
        $this->pmtbconfvargl = null;
        $this->pmtbconfputbincode = null;
        $this->pmtbconfputbindflt = null;
        $this->pmtbconfserialbase = null;
        $this->pmtbconffgatstan = null;
        $this->pmtbconfglfgtomat = null;
        $this->pmtbconfpostdetsum = null;
        $this->pmtbconfsort = null;
        $this->pmtbconflastcost = null;
        $this->pmtbconfaskbom = null;
        $this->pmtbconfdefbom = null;
        $this->pmtbconfautoselectlots = null;
        $this->pmtbconfallocwhenic = null;
        $this->pmtbconfusewpc = null;
        $this->pmtbconfpowgwipinproc = null;
        $this->pmtbconflrscost = null;
        $this->pmtbconfvariacctg = null;
        $this->pmtbconftakebincode = null;
        $this->pmtbconfusefguom = null;
        $this->pmtbconfusenc = null;
        $this->pmtbconfusenegwip = null;
        $this->pmtbcon2advwipactentry = null;
        $this->pmtbcon2machlaborgl = null;
        $this->pmtbcon2machsetupgl = null;
        $this->pmtbcon2burdenlaborgl = null;
        $this->pmtbcon2burdenmachgl = null;
        $this->pmtbcon2burdenadmingl = null;
        $this->pmtbcon2setupasoper = null;
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
        return (string) $this->exportTo(ConfigPmTableMap::DEFAULT_STRING_FORMAT);
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
