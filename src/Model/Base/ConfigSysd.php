<?php

namespace Base;

use \ConfigSysdQuery as ChildConfigSysdQuery;
use \Exception;
use \PDO;
use Map\ConfigSysdTableMap;
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
 * Base class that represents a row from the 'sys_definition' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigSysd implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigSysdTableMap';


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
     * The value for the cscpcompnbr field.
     *
     * @var        int
     */
    protected $cscpcompnbr;

    /**
     * The value for the cscpcompid field.
     *
     * @var        string
     */
    protected $cscpcompid;

    /**
     * The value for the cscpcompname field.
     *
     * @var        string
     */
    protected $cscpcompname;

    /**
     * The value for the cscpdspermission field.
     *
     * @var        string
     */
    protected $cscpdspermission;

    /**
     * The value for the cscprapermission field.
     *
     * @var        string
     */
    protected $cscprapermission;

    /**
     * The value for the cscpsrppermission field.
     *
     * @var        string
     */
    protected $cscpsrppermission;

    /**
     * The value for the cscpemailtype field.
     *
     * @var        string
     */
    protected $cscpemailtype;

    /**
     * The value for the cscpfaxdir field.
     *
     * @var        string
     */
    protected $cscpfaxdir;

    /**
     * The value for the cscpprgdir field.
     *
     * @var        string
     */
    protected $cscpprgdir;

    /**
     * The value for the cscpfile1dir field.
     *
     * @var        string
     */
    protected $cscpfile1dir;

    /**
     * The value for the cscpfile2dir field.
     *
     * @var        string
     */
    protected $cscpfile2dir;

    /**
     * The value for the cscpfile3dir field.
     *
     * @var        string
     */
    protected $cscpfile3dir;

    /**
     * The value for the cscptempdir field.
     *
     * @var        string
     */
    protected $cscptempdir;

    /**
     * The value for the cscpworkdir field.
     *
     * @var        string
     */
    protected $cscpworkdir;

    /**
     * The value for the cscpreptarchdir field.
     *
     * @var        string
     */
    protected $cscpreptarchdir;

    /**
     * The value for the cscpdocinboxdir field.
     *
     * @var        string
     */
    protected $cscpdocinboxdir;

    /**
     * The value for the cscpdocautodir field.
     *
     * @var        string
     */
    protected $cscpdocautodir;

    /**
     * The value for the cscpcertsdir field.
     *
     * @var        string
     */
    protected $cscpcertsdir;

    /**
     * The value for the cscpimgproduct field.
     *
     * @var        string
     */
    protected $cscpimgproduct;

    /**
     * The value for the cscpimgdrawings field.
     *
     * @var        string
     */
    protected $cscpimgdrawings;

    /**
     * The value for the cscpimgschematic field.
     *
     * @var        string
     */
    protected $cscpimgschematic;

    /**
     * The value for the cscpimgconfirm field.
     *
     * @var        string
     */
    protected $cscpimgconfirm;

    /**
     * The value for the cscppcchargedir field.
     *
     * @var        string
     */
    protected $cscppcchargedir;

    /**
     * The value for the cscpdevicedir field.
     *
     * @var        string
     */
    protected $cscpdevicedir;

    /**
     * The value for the cscpecommdir field.
     *
     * @var        string
     */
    protected $cscpecommdir;

    /**
     * The value for the cscpbrwzbaseip field.
     *
     * @var        string
     */
    protected $cscpbrwzbaseip;

    /**
     * The value for the cscpdatabasename field.
     *
     * @var        string
     */
    protected $cscpdatabasename;

    /**
     * The value for the cscpcompdatabasename field.
     *
     * @var        string
     */
    protected $cscpcompdatabasename;

    /**
     * The value for the cscpfgrndcolor field.
     *
     * @var        int
     */
    protected $cscpfgrndcolor;

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
     * Initializes internal state of Base\ConfigSysd object.
     */
    public function __construct()
    {
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
     * Compares this with another <code>ConfigSysd</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigSysd</code>, delegates to
     * <code>equals(ConfigSysd)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigSysd The current object, for fluid interface
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
     * Get the [cscpcompnbr] column value.
     *
     * @return int
     */
    public function getCscpcompnbr()
    {
        return $this->cscpcompnbr;
    }

    /**
     * Get the [cscpcompid] column value.
     *
     * @return string
     */
    public function getCscpcompid()
    {
        return $this->cscpcompid;
    }

    /**
     * Get the [cscpcompname] column value.
     *
     * @return string
     */
    public function getCscpcompname()
    {
        return $this->cscpcompname;
    }

    /**
     * Get the [cscpdspermission] column value.
     *
     * @return string
     */
    public function getCscpdspermission()
    {
        return $this->cscpdspermission;
    }

    /**
     * Get the [cscprapermission] column value.
     *
     * @return string
     */
    public function getCscprapermission()
    {
        return $this->cscprapermission;
    }

    /**
     * Get the [cscpsrppermission] column value.
     *
     * @return string
     */
    public function getCscpsrppermission()
    {
        return $this->cscpsrppermission;
    }

    /**
     * Get the [cscpemailtype] column value.
     *
     * @return string
     */
    public function getCscpemailtype()
    {
        return $this->cscpemailtype;
    }

    /**
     * Get the [cscpfaxdir] column value.
     *
     * @return string
     */
    public function getCscpfaxdir()
    {
        return $this->cscpfaxdir;
    }

    /**
     * Get the [cscpprgdir] column value.
     *
     * @return string
     */
    public function getCscpprgdir()
    {
        return $this->cscpprgdir;
    }

    /**
     * Get the [cscpfile1dir] column value.
     *
     * @return string
     */
    public function getCscpfile1dir()
    {
        return $this->cscpfile1dir;
    }

    /**
     * Get the [cscpfile2dir] column value.
     *
     * @return string
     */
    public function getCscpfile2dir()
    {
        return $this->cscpfile2dir;
    }

    /**
     * Get the [cscpfile3dir] column value.
     *
     * @return string
     */
    public function getCscpfile3dir()
    {
        return $this->cscpfile3dir;
    }

    /**
     * Get the [cscptempdir] column value.
     *
     * @return string
     */
    public function getCscptempdir()
    {
        return $this->cscptempdir;
    }

    /**
     * Get the [cscpworkdir] column value.
     *
     * @return string
     */
    public function getCscpworkdir()
    {
        return $this->cscpworkdir;
    }

    /**
     * Get the [cscpreptarchdir] column value.
     *
     * @return string
     */
    public function getCscpreptarchdir()
    {
        return $this->cscpreptarchdir;
    }

    /**
     * Get the [cscpdocinboxdir] column value.
     *
     * @return string
     */
    public function getCscpdocinboxdir()
    {
        return $this->cscpdocinboxdir;
    }

    /**
     * Get the [cscpdocautodir] column value.
     *
     * @return string
     */
    public function getCscpdocautodir()
    {
        return $this->cscpdocautodir;
    }

    /**
     * Get the [cscpcertsdir] column value.
     *
     * @return string
     */
    public function getCscpcertsdir()
    {
        return $this->cscpcertsdir;
    }

    /**
     * Get the [cscpimgproduct] column value.
     *
     * @return string
     */
    public function getCscpimgproduct()
    {
        return $this->cscpimgproduct;
    }

    /**
     * Get the [cscpimgdrawings] column value.
     *
     * @return string
     */
    public function getCscpimgdrawings()
    {
        return $this->cscpimgdrawings;
    }

    /**
     * Get the [cscpimgschematic] column value.
     *
     * @return string
     */
    public function getCscpimgschematic()
    {
        return $this->cscpimgschematic;
    }

    /**
     * Get the [cscpimgconfirm] column value.
     *
     * @return string
     */
    public function getCscpimgconfirm()
    {
        return $this->cscpimgconfirm;
    }

    /**
     * Get the [cscppcchargedir] column value.
     *
     * @return string
     */
    public function getCscppcchargedir()
    {
        return $this->cscppcchargedir;
    }

    /**
     * Get the [cscpdevicedir] column value.
     *
     * @return string
     */
    public function getCscpdevicedir()
    {
        return $this->cscpdevicedir;
    }

    /**
     * Get the [cscpecommdir] column value.
     *
     * @return string
     */
    public function getCscpecommdir()
    {
        return $this->cscpecommdir;
    }

    /**
     * Get the [cscpbrwzbaseip] column value.
     *
     * @return string
     */
    public function getCscpbrwzbaseip()
    {
        return $this->cscpbrwzbaseip;
    }

    /**
     * Get the [cscpdatabasename] column value.
     *
     * @return string
     */
    public function getCscpdatabasename()
    {
        return $this->cscpdatabasename;
    }

    /**
     * Get the [cscpcompdatabasename] column value.
     *
     * @return string
     */
    public function getCscpcompdatabasename()
    {
        return $this->cscpcompdatabasename;
    }

    /**
     * Get the [cscpfgrndcolor] column value.
     *
     * @return int
     */
    public function getCscpfgrndcolor()
    {
        return $this->cscpfgrndcolor;
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
     * Set the value of [cscpcompnbr] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpcompnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cscpcompnbr !== $v) {
            $this->cscpcompnbr = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPCOMPNBR] = true;
        }

        return $this;
    } // setCscpcompnbr()

    /**
     * Set the value of [cscpcompid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpcompid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpcompid !== $v) {
            $this->cscpcompid = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPCOMPID] = true;
        }

        return $this;
    } // setCscpcompid()

    /**
     * Set the value of [cscpcompname] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpcompname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpcompname !== $v) {
            $this->cscpcompname = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPCOMPNAME] = true;
        }

        return $this;
    } // setCscpcompname()

    /**
     * Set the value of [cscpdspermission] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpdspermission($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpdspermission !== $v) {
            $this->cscpdspermission = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPDSPERMISSION] = true;
        }

        return $this;
    } // setCscpdspermission()

    /**
     * Set the value of [cscprapermission] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscprapermission($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscprapermission !== $v) {
            $this->cscprapermission = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPRAPERMISSION] = true;
        }

        return $this;
    } // setCscprapermission()

    /**
     * Set the value of [cscpsrppermission] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpsrppermission($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpsrppermission !== $v) {
            $this->cscpsrppermission = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPSRPPERMISSION] = true;
        }

        return $this;
    } // setCscpsrppermission()

    /**
     * Set the value of [cscpemailtype] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpemailtype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpemailtype !== $v) {
            $this->cscpemailtype = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPEMAILTYPE] = true;
        }

        return $this;
    } // setCscpemailtype()

    /**
     * Set the value of [cscpfaxdir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpfaxdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpfaxdir !== $v) {
            $this->cscpfaxdir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPFAXDIR] = true;
        }

        return $this;
    } // setCscpfaxdir()

    /**
     * Set the value of [cscpprgdir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpprgdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpprgdir !== $v) {
            $this->cscpprgdir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPPRGDIR] = true;
        }

        return $this;
    } // setCscpprgdir()

    /**
     * Set the value of [cscpfile1dir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpfile1dir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpfile1dir !== $v) {
            $this->cscpfile1dir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPFILE1DIR] = true;
        }

        return $this;
    } // setCscpfile1dir()

    /**
     * Set the value of [cscpfile2dir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpfile2dir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpfile2dir !== $v) {
            $this->cscpfile2dir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPFILE2DIR] = true;
        }

        return $this;
    } // setCscpfile2dir()

    /**
     * Set the value of [cscpfile3dir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpfile3dir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpfile3dir !== $v) {
            $this->cscpfile3dir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPFILE3DIR] = true;
        }

        return $this;
    } // setCscpfile3dir()

    /**
     * Set the value of [cscptempdir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscptempdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscptempdir !== $v) {
            $this->cscptempdir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPTEMPDIR] = true;
        }

        return $this;
    } // setCscptempdir()

    /**
     * Set the value of [cscpworkdir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpworkdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpworkdir !== $v) {
            $this->cscpworkdir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPWORKDIR] = true;
        }

        return $this;
    } // setCscpworkdir()

    /**
     * Set the value of [cscpreptarchdir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpreptarchdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpreptarchdir !== $v) {
            $this->cscpreptarchdir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPREPTARCHDIR] = true;
        }

        return $this;
    } // setCscpreptarchdir()

    /**
     * Set the value of [cscpdocinboxdir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpdocinboxdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpdocinboxdir !== $v) {
            $this->cscpdocinboxdir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPDOCINBOXDIR] = true;
        }

        return $this;
    } // setCscpdocinboxdir()

    /**
     * Set the value of [cscpdocautodir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpdocautodir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpdocautodir !== $v) {
            $this->cscpdocautodir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPDOCAUTODIR] = true;
        }

        return $this;
    } // setCscpdocautodir()

    /**
     * Set the value of [cscpcertsdir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpcertsdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpcertsdir !== $v) {
            $this->cscpcertsdir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPCERTSDIR] = true;
        }

        return $this;
    } // setCscpcertsdir()

    /**
     * Set the value of [cscpimgproduct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpimgproduct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpimgproduct !== $v) {
            $this->cscpimgproduct = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPIMGPRODUCT] = true;
        }

        return $this;
    } // setCscpimgproduct()

    /**
     * Set the value of [cscpimgdrawings] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpimgdrawings($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpimgdrawings !== $v) {
            $this->cscpimgdrawings = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPIMGDRAWINGS] = true;
        }

        return $this;
    } // setCscpimgdrawings()

    /**
     * Set the value of [cscpimgschematic] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpimgschematic($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpimgschematic !== $v) {
            $this->cscpimgschematic = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC] = true;
        }

        return $this;
    } // setCscpimgschematic()

    /**
     * Set the value of [cscpimgconfirm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpimgconfirm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpimgconfirm !== $v) {
            $this->cscpimgconfirm = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPIMGCONFIRM] = true;
        }

        return $this;
    } // setCscpimgconfirm()

    /**
     * Set the value of [cscppcchargedir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscppcchargedir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscppcchargedir !== $v) {
            $this->cscppcchargedir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPPCCHARGEDIR] = true;
        }

        return $this;
    } // setCscppcchargedir()

    /**
     * Set the value of [cscpdevicedir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpdevicedir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpdevicedir !== $v) {
            $this->cscpdevicedir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPDEVICEDIR] = true;
        }

        return $this;
    } // setCscpdevicedir()

    /**
     * Set the value of [cscpecommdir] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpecommdir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpecommdir !== $v) {
            $this->cscpecommdir = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPECOMMDIR] = true;
        }

        return $this;
    } // setCscpecommdir()

    /**
     * Set the value of [cscpbrwzbaseip] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpbrwzbaseip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpbrwzbaseip !== $v) {
            $this->cscpbrwzbaseip = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPBRWZBASEIP] = true;
        }

        return $this;
    } // setCscpbrwzbaseip()

    /**
     * Set the value of [cscpdatabasename] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpdatabasename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpdatabasename !== $v) {
            $this->cscpdatabasename = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPDATABASENAME] = true;
        }

        return $this;
    } // setCscpdatabasename()

    /**
     * Set the value of [cscpcompdatabasename] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpcompdatabasename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cscpcompdatabasename !== $v) {
            $this->cscpcompdatabasename = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME] = true;
        }

        return $this;
    } // setCscpcompdatabasename()

    /**
     * Set the value of [cscpfgrndcolor] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setCscpfgrndcolor($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cscpfgrndcolor !== $v) {
            $this->cscpfgrndcolor = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_CSCPFGRNDCOLOR] = true;
        }

        return $this;
    } // setCscpfgrndcolor()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSysd The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigSysdTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpcompnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpcompnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpcompid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpcompid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpcompname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpcompname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpdspermission', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpdspermission = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigSysdTableMap::translateFieldName('Cscprapermission', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscprapermission = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpsrppermission', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpsrppermission = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpemailtype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpemailtype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpfaxdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpfaxdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpprgdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpprgdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpfile1dir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpfile1dir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpfile2dir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpfile2dir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpfile3dir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpfile3dir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigSysdTableMap::translateFieldName('Cscptempdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscptempdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpworkdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpworkdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpreptarchdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpreptarchdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpdocinboxdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpdocinboxdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpdocautodir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpdocautodir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpcertsdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpcertsdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpimgproduct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpimgproduct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpimgdrawings', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpimgdrawings = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpimgschematic', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpimgschematic = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpimgconfirm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpimgconfirm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigSysdTableMap::translateFieldName('Cscppcchargedir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscppcchargedir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpdevicedir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpdevicedir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpecommdir', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpecommdir = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpbrwzbaseip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpbrwzbaseip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpdatabasename', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpdatabasename = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpcompdatabasename', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpcompdatabasename = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigSysdTableMap::translateFieldName('Cscpfgrndcolor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cscpfgrndcolor = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigSysdTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ConfigSysdTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ConfigSysdTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 32; // 32 = ConfigSysdTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigSysd'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigSysdTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigSysdQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigSysd::setDeleted()
     * @see ConfigSysd::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSysdTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigSysdQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSysdTableMap::DATABASE_NAME);
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
                ConfigSysdTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCOMPNBR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpCompNbr';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCOMPID)) {
            $modifiedColumns[':p' . $index++]  = 'CscpCompId';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCOMPNAME)) {
            $modifiedColumns[':p' . $index++]  = 'CscpCompName';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDSPERMISSION)) {
            $modifiedColumns[':p' . $index++]  = 'CscpDsPermission';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPRAPERMISSION)) {
            $modifiedColumns[':p' . $index++]  = 'CscpRaPermission';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPSRPPERMISSION)) {
            $modifiedColumns[':p' . $index++]  = 'CscpSrpPermission';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPEMAILTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'CscpEmailType';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFAXDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpFaxDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPPRGDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpPrgDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFILE1DIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpFile1Dir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFILE2DIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpFile2Dir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFILE3DIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpFile3Dir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPTEMPDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpTempDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPWORKDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpWorkDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPREPTARCHDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpReptArchDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDOCINBOXDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpDocInboxDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDOCAUTODIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpDocAutoDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCERTSDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpCertsDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPIMGPRODUCT)) {
            $modifiedColumns[':p' . $index++]  = 'CscpImgProduct';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPIMGDRAWINGS)) {
            $modifiedColumns[':p' . $index++]  = 'CscpImgDrawings';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC)) {
            $modifiedColumns[':p' . $index++]  = 'CscpImgSchematic';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPIMGCONFIRM)) {
            $modifiedColumns[':p' . $index++]  = 'CscpImgConfirm';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPPCCHARGEDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpPcchargeDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDEVICEDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpDeviceDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPECOMMDIR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpEcommDir';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPBRWZBASEIP)) {
            $modifiedColumns[':p' . $index++]  = 'CscpBrwzBaseIp';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDATABASENAME)) {
            $modifiedColumns[':p' . $index++]  = 'CscpDataBaseName';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME)) {
            $modifiedColumns[':p' . $index++]  = 'CscpCompDataBaseName';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFGRNDCOLOR)) {
            $modifiedColumns[':p' . $index++]  = 'CscpFgrndColor';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO sys_definition (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'CscpCompNbr':
                        $stmt->bindValue($identifier, $this->cscpcompnbr, PDO::PARAM_INT);
                        break;
                    case 'CscpCompId':
                        $stmt->bindValue($identifier, $this->cscpcompid, PDO::PARAM_STR);
                        break;
                    case 'CscpCompName':
                        $stmt->bindValue($identifier, $this->cscpcompname, PDO::PARAM_STR);
                        break;
                    case 'CscpDsPermission':
                        $stmt->bindValue($identifier, $this->cscpdspermission, PDO::PARAM_STR);
                        break;
                    case 'CscpRaPermission':
                        $stmt->bindValue($identifier, $this->cscprapermission, PDO::PARAM_STR);
                        break;
                    case 'CscpSrpPermission':
                        $stmt->bindValue($identifier, $this->cscpsrppermission, PDO::PARAM_STR);
                        break;
                    case 'CscpEmailType':
                        $stmt->bindValue($identifier, $this->cscpemailtype, PDO::PARAM_STR);
                        break;
                    case 'CscpFaxDir':
                        $stmt->bindValue($identifier, $this->cscpfaxdir, PDO::PARAM_STR);
                        break;
                    case 'CscpPrgDir':
                        $stmt->bindValue($identifier, $this->cscpprgdir, PDO::PARAM_STR);
                        break;
                    case 'CscpFile1Dir':
                        $stmt->bindValue($identifier, $this->cscpfile1dir, PDO::PARAM_STR);
                        break;
                    case 'CscpFile2Dir':
                        $stmt->bindValue($identifier, $this->cscpfile2dir, PDO::PARAM_STR);
                        break;
                    case 'CscpFile3Dir':
                        $stmt->bindValue($identifier, $this->cscpfile3dir, PDO::PARAM_STR);
                        break;
                    case 'CscpTempDir':
                        $stmt->bindValue($identifier, $this->cscptempdir, PDO::PARAM_STR);
                        break;
                    case 'CscpWorkDir':
                        $stmt->bindValue($identifier, $this->cscpworkdir, PDO::PARAM_STR);
                        break;
                    case 'CscpReptArchDir':
                        $stmt->bindValue($identifier, $this->cscpreptarchdir, PDO::PARAM_STR);
                        break;
                    case 'CscpDocInboxDir':
                        $stmt->bindValue($identifier, $this->cscpdocinboxdir, PDO::PARAM_STR);
                        break;
                    case 'CscpDocAutoDir':
                        $stmt->bindValue($identifier, $this->cscpdocautodir, PDO::PARAM_STR);
                        break;
                    case 'CscpCertsDir':
                        $stmt->bindValue($identifier, $this->cscpcertsdir, PDO::PARAM_STR);
                        break;
                    case 'CscpImgProduct':
                        $stmt->bindValue($identifier, $this->cscpimgproduct, PDO::PARAM_STR);
                        break;
                    case 'CscpImgDrawings':
                        $stmt->bindValue($identifier, $this->cscpimgdrawings, PDO::PARAM_STR);
                        break;
                    case 'CscpImgSchematic':
                        $stmt->bindValue($identifier, $this->cscpimgschematic, PDO::PARAM_STR);
                        break;
                    case 'CscpImgConfirm':
                        $stmt->bindValue($identifier, $this->cscpimgconfirm, PDO::PARAM_STR);
                        break;
                    case 'CscpPcchargeDir':
                        $stmt->bindValue($identifier, $this->cscppcchargedir, PDO::PARAM_STR);
                        break;
                    case 'CscpDeviceDir':
                        $stmt->bindValue($identifier, $this->cscpdevicedir, PDO::PARAM_STR);
                        break;
                    case 'CscpEcommDir':
                        $stmt->bindValue($identifier, $this->cscpecommdir, PDO::PARAM_STR);
                        break;
                    case 'CscpBrwzBaseIp':
                        $stmt->bindValue($identifier, $this->cscpbrwzbaseip, PDO::PARAM_STR);
                        break;
                    case 'CscpDataBaseName':
                        $stmt->bindValue($identifier, $this->cscpdatabasename, PDO::PARAM_STR);
                        break;
                    case 'CscpCompDataBaseName':
                        $stmt->bindValue($identifier, $this->cscpcompdatabasename, PDO::PARAM_STR);
                        break;
                    case 'CscpFgrndColor':
                        $stmt->bindValue($identifier, $this->cscpfgrndcolor, PDO::PARAM_INT);
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
        $pos = ConfigSysdTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getCscpcompnbr();
                break;
            case 1:
                return $this->getCscpcompid();
                break;
            case 2:
                return $this->getCscpcompname();
                break;
            case 3:
                return $this->getCscpdspermission();
                break;
            case 4:
                return $this->getCscprapermission();
                break;
            case 5:
                return $this->getCscpsrppermission();
                break;
            case 6:
                return $this->getCscpemailtype();
                break;
            case 7:
                return $this->getCscpfaxdir();
                break;
            case 8:
                return $this->getCscpprgdir();
                break;
            case 9:
                return $this->getCscpfile1dir();
                break;
            case 10:
                return $this->getCscpfile2dir();
                break;
            case 11:
                return $this->getCscpfile3dir();
                break;
            case 12:
                return $this->getCscptempdir();
                break;
            case 13:
                return $this->getCscpworkdir();
                break;
            case 14:
                return $this->getCscpreptarchdir();
                break;
            case 15:
                return $this->getCscpdocinboxdir();
                break;
            case 16:
                return $this->getCscpdocautodir();
                break;
            case 17:
                return $this->getCscpcertsdir();
                break;
            case 18:
                return $this->getCscpimgproduct();
                break;
            case 19:
                return $this->getCscpimgdrawings();
                break;
            case 20:
                return $this->getCscpimgschematic();
                break;
            case 21:
                return $this->getCscpimgconfirm();
                break;
            case 22:
                return $this->getCscppcchargedir();
                break;
            case 23:
                return $this->getCscpdevicedir();
                break;
            case 24:
                return $this->getCscpecommdir();
                break;
            case 25:
                return $this->getCscpbrwzbaseip();
                break;
            case 26:
                return $this->getCscpdatabasename();
                break;
            case 27:
                return $this->getCscpcompdatabasename();
                break;
            case 28:
                return $this->getCscpfgrndcolor();
                break;
            case 29:
                return $this->getDateupdtd();
                break;
            case 30:
                return $this->getTimeupdtd();
                break;
            case 31:
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

        if (isset($alreadyDumpedObjects['ConfigSysd'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigSysd'][$this->hashCode()] = true;
        $keys = ConfigSysdTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCscpcompnbr(),
            $keys[1] => $this->getCscpcompid(),
            $keys[2] => $this->getCscpcompname(),
            $keys[3] => $this->getCscpdspermission(),
            $keys[4] => $this->getCscprapermission(),
            $keys[5] => $this->getCscpsrppermission(),
            $keys[6] => $this->getCscpemailtype(),
            $keys[7] => $this->getCscpfaxdir(),
            $keys[8] => $this->getCscpprgdir(),
            $keys[9] => $this->getCscpfile1dir(),
            $keys[10] => $this->getCscpfile2dir(),
            $keys[11] => $this->getCscpfile3dir(),
            $keys[12] => $this->getCscptempdir(),
            $keys[13] => $this->getCscpworkdir(),
            $keys[14] => $this->getCscpreptarchdir(),
            $keys[15] => $this->getCscpdocinboxdir(),
            $keys[16] => $this->getCscpdocautodir(),
            $keys[17] => $this->getCscpcertsdir(),
            $keys[18] => $this->getCscpimgproduct(),
            $keys[19] => $this->getCscpimgdrawings(),
            $keys[20] => $this->getCscpimgschematic(),
            $keys[21] => $this->getCscpimgconfirm(),
            $keys[22] => $this->getCscppcchargedir(),
            $keys[23] => $this->getCscpdevicedir(),
            $keys[24] => $this->getCscpecommdir(),
            $keys[25] => $this->getCscpbrwzbaseip(),
            $keys[26] => $this->getCscpdatabasename(),
            $keys[27] => $this->getCscpcompdatabasename(),
            $keys[28] => $this->getCscpfgrndcolor(),
            $keys[29] => $this->getDateupdtd(),
            $keys[30] => $this->getTimeupdtd(),
            $keys[31] => $this->getDummy(),
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
     * @return $this|\ConfigSysd
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigSysdTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigSysd
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCscpcompnbr($value);
                break;
            case 1:
                $this->setCscpcompid($value);
                break;
            case 2:
                $this->setCscpcompname($value);
                break;
            case 3:
                $this->setCscpdspermission($value);
                break;
            case 4:
                $this->setCscprapermission($value);
                break;
            case 5:
                $this->setCscpsrppermission($value);
                break;
            case 6:
                $this->setCscpemailtype($value);
                break;
            case 7:
                $this->setCscpfaxdir($value);
                break;
            case 8:
                $this->setCscpprgdir($value);
                break;
            case 9:
                $this->setCscpfile1dir($value);
                break;
            case 10:
                $this->setCscpfile2dir($value);
                break;
            case 11:
                $this->setCscpfile3dir($value);
                break;
            case 12:
                $this->setCscptempdir($value);
                break;
            case 13:
                $this->setCscpworkdir($value);
                break;
            case 14:
                $this->setCscpreptarchdir($value);
                break;
            case 15:
                $this->setCscpdocinboxdir($value);
                break;
            case 16:
                $this->setCscpdocautodir($value);
                break;
            case 17:
                $this->setCscpcertsdir($value);
                break;
            case 18:
                $this->setCscpimgproduct($value);
                break;
            case 19:
                $this->setCscpimgdrawings($value);
                break;
            case 20:
                $this->setCscpimgschematic($value);
                break;
            case 21:
                $this->setCscpimgconfirm($value);
                break;
            case 22:
                $this->setCscppcchargedir($value);
                break;
            case 23:
                $this->setCscpdevicedir($value);
                break;
            case 24:
                $this->setCscpecommdir($value);
                break;
            case 25:
                $this->setCscpbrwzbaseip($value);
                break;
            case 26:
                $this->setCscpdatabasename($value);
                break;
            case 27:
                $this->setCscpcompdatabasename($value);
                break;
            case 28:
                $this->setCscpfgrndcolor($value);
                break;
            case 29:
                $this->setDateupdtd($value);
                break;
            case 30:
                $this->setTimeupdtd($value);
                break;
            case 31:
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
        $keys = ConfigSysdTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCscpcompnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setCscpcompid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCscpcompname($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCscpdspermission($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCscprapermission($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCscpsrppermission($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCscpemailtype($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setCscpfaxdir($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCscpprgdir($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCscpfile1dir($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setCscpfile2dir($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setCscpfile3dir($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setCscptempdir($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setCscpworkdir($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setCscpreptarchdir($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCscpdocinboxdir($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setCscpdocautodir($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setCscpcertsdir($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setCscpimgproduct($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setCscpimgdrawings($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setCscpimgschematic($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setCscpimgconfirm($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setCscppcchargedir($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setCscpdevicedir($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setCscpecommdir($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setCscpbrwzbaseip($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setCscpdatabasename($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setCscpcompdatabasename($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setCscpfgrndcolor($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setDateupdtd($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setTimeupdtd($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setDummy($arr[$keys[31]]);
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
     * @return $this|\ConfigSysd The current object, for fluid interface
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
        $criteria = new Criteria(ConfigSysdTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCOMPNBR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPCOMPNBR, $this->cscpcompnbr);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCOMPID)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPCOMPID, $this->cscpcompid);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCOMPNAME)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPCOMPNAME, $this->cscpcompname);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDSPERMISSION)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPDSPERMISSION, $this->cscpdspermission);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPRAPERMISSION)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPRAPERMISSION, $this->cscprapermission);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPSRPPERMISSION)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPSRPPERMISSION, $this->cscpsrppermission);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPEMAILTYPE)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPEMAILTYPE, $this->cscpemailtype);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFAXDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPFAXDIR, $this->cscpfaxdir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPPRGDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPPRGDIR, $this->cscpprgdir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFILE1DIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPFILE1DIR, $this->cscpfile1dir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFILE2DIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPFILE2DIR, $this->cscpfile2dir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFILE3DIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPFILE3DIR, $this->cscpfile3dir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPTEMPDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPTEMPDIR, $this->cscptempdir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPWORKDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPWORKDIR, $this->cscpworkdir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPREPTARCHDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPREPTARCHDIR, $this->cscpreptarchdir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDOCINBOXDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPDOCINBOXDIR, $this->cscpdocinboxdir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDOCAUTODIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPDOCAUTODIR, $this->cscpdocautodir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCERTSDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPCERTSDIR, $this->cscpcertsdir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPIMGPRODUCT)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPIMGPRODUCT, $this->cscpimgproduct);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPIMGDRAWINGS)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPIMGDRAWINGS, $this->cscpimgdrawings);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC, $this->cscpimgschematic);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPIMGCONFIRM)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPIMGCONFIRM, $this->cscpimgconfirm);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPPCCHARGEDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPPCCHARGEDIR, $this->cscppcchargedir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDEVICEDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPDEVICEDIR, $this->cscpdevicedir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPECOMMDIR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPECOMMDIR, $this->cscpecommdir);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPBRWZBASEIP)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPBRWZBASEIP, $this->cscpbrwzbaseip);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPDATABASENAME)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPDATABASENAME, $this->cscpdatabasename);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME, $this->cscpcompdatabasename);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_CSCPFGRNDCOLOR)) {
            $criteria->add(ConfigSysdTableMap::COL_CSCPFGRNDCOLOR, $this->cscpfgrndcolor);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigSysdTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigSysdTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigSysdTableMap::COL_DUMMY)) {
            $criteria->add(ConfigSysdTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigSysdQuery::create();
        $criteria->add(ConfigSysdTableMap::COL_CSCPCOMPNBR, $this->cscpcompnbr);

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
        $validPk = null !== $this->getCscpcompnbr();

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
        return $this->getCscpcompnbr();
    }

    /**
     * Generic method to set the primary key (cscpcompnbr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCscpcompnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCscpcompnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigSysd (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCscpcompnbr($this->getCscpcompnbr());
        $copyObj->setCscpcompid($this->getCscpcompid());
        $copyObj->setCscpcompname($this->getCscpcompname());
        $copyObj->setCscpdspermission($this->getCscpdspermission());
        $copyObj->setCscprapermission($this->getCscprapermission());
        $copyObj->setCscpsrppermission($this->getCscpsrppermission());
        $copyObj->setCscpemailtype($this->getCscpemailtype());
        $copyObj->setCscpfaxdir($this->getCscpfaxdir());
        $copyObj->setCscpprgdir($this->getCscpprgdir());
        $copyObj->setCscpfile1dir($this->getCscpfile1dir());
        $copyObj->setCscpfile2dir($this->getCscpfile2dir());
        $copyObj->setCscpfile3dir($this->getCscpfile3dir());
        $copyObj->setCscptempdir($this->getCscptempdir());
        $copyObj->setCscpworkdir($this->getCscpworkdir());
        $copyObj->setCscpreptarchdir($this->getCscpreptarchdir());
        $copyObj->setCscpdocinboxdir($this->getCscpdocinboxdir());
        $copyObj->setCscpdocautodir($this->getCscpdocautodir());
        $copyObj->setCscpcertsdir($this->getCscpcertsdir());
        $copyObj->setCscpimgproduct($this->getCscpimgproduct());
        $copyObj->setCscpimgdrawings($this->getCscpimgdrawings());
        $copyObj->setCscpimgschematic($this->getCscpimgschematic());
        $copyObj->setCscpimgconfirm($this->getCscpimgconfirm());
        $copyObj->setCscppcchargedir($this->getCscppcchargedir());
        $copyObj->setCscpdevicedir($this->getCscpdevicedir());
        $copyObj->setCscpecommdir($this->getCscpecommdir());
        $copyObj->setCscpbrwzbaseip($this->getCscpbrwzbaseip());
        $copyObj->setCscpdatabasename($this->getCscpdatabasename());
        $copyObj->setCscpcompdatabasename($this->getCscpcompdatabasename());
        $copyObj->setCscpfgrndcolor($this->getCscpfgrndcolor());
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
     * @return \ConfigSysd Clone of current object.
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
        $this->cscpcompnbr = null;
        $this->cscpcompid = null;
        $this->cscpcompname = null;
        $this->cscpdspermission = null;
        $this->cscprapermission = null;
        $this->cscpsrppermission = null;
        $this->cscpemailtype = null;
        $this->cscpfaxdir = null;
        $this->cscpprgdir = null;
        $this->cscpfile1dir = null;
        $this->cscpfile2dir = null;
        $this->cscpfile3dir = null;
        $this->cscptempdir = null;
        $this->cscpworkdir = null;
        $this->cscpreptarchdir = null;
        $this->cscpdocinboxdir = null;
        $this->cscpdocautodir = null;
        $this->cscpcertsdir = null;
        $this->cscpimgproduct = null;
        $this->cscpimgdrawings = null;
        $this->cscpimgschematic = null;
        $this->cscpimgconfirm = null;
        $this->cscppcchargedir = null;
        $this->cscpdevicedir = null;
        $this->cscpecommdir = null;
        $this->cscpbrwzbaseip = null;
        $this->cscpdatabasename = null;
        $this->cscpcompdatabasename = null;
        $this->cscpfgrndcolor = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(ConfigSysdTableMap::DEFAULT_STRING_FORMAT);
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
