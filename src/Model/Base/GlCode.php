<?php

namespace Base;

use \GlCodeQuery as ChildGlCodeQuery;
use \Exception;
use \PDO;
use Map\GlCodeTableMap;
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
 * Base class that represents a row from the 'gl_master' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class GlCode implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\GlCodeTableMap';


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
     * The value for the glmaacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $glmaacct;

    /**
     * The value for the glmadesc field.
     *
     * @var        string
     */
    protected $glmadesc;

    /**
     * The value for the glmadrcr field.
     *
     * @var        string
     */
    protected $glmadrcr;

    /**
     * The value for the glmaclosacct field.
     *
     * @var        string
     */
    protected $glmaclosacct;

    /**
     * The value for the glmapackpost field.
     *
     * @var        string
     */
    protected $glmapackpost;

    /**
     * The value for the glmavald field.
     *
     * @var        string
     */
    protected $glmavald;

    /**
     * The value for the glmaco01 field.
     *
     * @var        string
     */
    protected $glmaco01;

    /**
     * The value for the glmaco02 field.
     *
     * @var        string
     */
    protected $glmaco02;

    /**
     * The value for the glmaco03 field.
     *
     * @var        string
     */
    protected $glmaco03;

    /**
     * The value for the glmaco04 field.
     *
     * @var        string
     */
    protected $glmaco04;

    /**
     * The value for the glmaco05 field.
     *
     * @var        string
     */
    protected $glmaco05;

    /**
     * The value for the glmaco06 field.
     *
     * @var        string
     */
    protected $glmaco06;

    /**
     * The value for the glmaco07 field.
     *
     * @var        string
     */
    protected $glmaco07;

    /**
     * The value for the glmaco08 field.
     *
     * @var        string
     */
    protected $glmaco08;

    /**
     * The value for the glmaco09 field.
     *
     * @var        string
     */
    protected $glmaco09;

    /**
     * The value for the glmaco10 field.
     *
     * @var        string
     */
    protected $glmaco10;

    /**
     * The value for the dateupdtd field.
     *
     * @var        string
     */
    protected $dateupdtd;

    /**
     * The value for the glmaacwhseappendpos field.
     *
     * @var        int
     */
    protected $glmaacwhseappendpos;

    /**
     * The value for the glmaachacct field.
     *
     * @var        string
     */
    protected $glmaachacct;

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
        $this->glmaacct = '';
    }

    /**
     * Initializes internal state of Base\GlCode object.
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
     * Compares this with another <code>GlCode</code> instance.  If
     * <code>obj</code> is an instance of <code>GlCode</code>, delegates to
     * <code>equals(GlCode)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|GlCode The current object, for fluid interface
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
     * Get the [glmaacct] column value.
     *
     * @return string
     */
    public function getGlmaacct()
    {
        return $this->glmaacct;
    }

    /**
     * Get the [glmadesc] column value.
     *
     * @return string
     */
    public function getGlmadesc()
    {
        return $this->glmadesc;
    }

    /**
     * Get the [glmadrcr] column value.
     *
     * @return string
     */
    public function getGlmadrcr()
    {
        return $this->glmadrcr;
    }

    /**
     * Get the [glmaclosacct] column value.
     *
     * @return string
     */
    public function getGlmaclosacct()
    {
        return $this->glmaclosacct;
    }

    /**
     * Get the [glmapackpost] column value.
     *
     * @return string
     */
    public function getGlmapackpost()
    {
        return $this->glmapackpost;
    }

    /**
     * Get the [glmavald] column value.
     *
     * @return string
     */
    public function getGlmavald()
    {
        return $this->glmavald;
    }

    /**
     * Get the [glmaco01] column value.
     *
     * @return string
     */
    public function getGlmaco01()
    {
        return $this->glmaco01;
    }

    /**
     * Get the [glmaco02] column value.
     *
     * @return string
     */
    public function getGlmaco02()
    {
        return $this->glmaco02;
    }

    /**
     * Get the [glmaco03] column value.
     *
     * @return string
     */
    public function getGlmaco03()
    {
        return $this->glmaco03;
    }

    /**
     * Get the [glmaco04] column value.
     *
     * @return string
     */
    public function getGlmaco04()
    {
        return $this->glmaco04;
    }

    /**
     * Get the [glmaco05] column value.
     *
     * @return string
     */
    public function getGlmaco05()
    {
        return $this->glmaco05;
    }

    /**
     * Get the [glmaco06] column value.
     *
     * @return string
     */
    public function getGlmaco06()
    {
        return $this->glmaco06;
    }

    /**
     * Get the [glmaco07] column value.
     *
     * @return string
     */
    public function getGlmaco07()
    {
        return $this->glmaco07;
    }

    /**
     * Get the [glmaco08] column value.
     *
     * @return string
     */
    public function getGlmaco08()
    {
        return $this->glmaco08;
    }

    /**
     * Get the [glmaco09] column value.
     *
     * @return string
     */
    public function getGlmaco09()
    {
        return $this->glmaco09;
    }

    /**
     * Get the [glmaco10] column value.
     *
     * @return string
     */
    public function getGlmaco10()
    {
        return $this->glmaco10;
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
     * Get the [glmaacwhseappendpos] column value.
     *
     * @return int
     */
    public function getGlmaAcWhseAppendPos()
    {
        return $this->glmaacwhseappendpos;
    }

    /**
     * Get the [glmaachacct] column value.
     *
     * @return string
     */
    public function getGlmaAchAcct()
    {
        return $this->glmaachacct;
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
     * Set the value of [glmaacct] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaacct !== $v) {
            $this->glmaacct = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMAACCT] = true;
        }

        return $this;
    } // setGlmaacct()

    /**
     * Set the value of [glmadesc] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmadesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmadesc !== $v) {
            $this->glmadesc = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMADESC] = true;
        }

        return $this;
    } // setGlmadesc()

    /**
     * Set the value of [glmadrcr] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmadrcr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmadrcr !== $v) {
            $this->glmadrcr = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMADRCR] = true;
        }

        return $this;
    } // setGlmadrcr()

    /**
     * Set the value of [glmaclosacct] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaclosacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaclosacct !== $v) {
            $this->glmaclosacct = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACLOSACCT] = true;
        }

        return $this;
    } // setGlmaclosacct()

    /**
     * Set the value of [glmapackpost] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmapackpost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmapackpost !== $v) {
            $this->glmapackpost = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMAPACKPOST] = true;
        }

        return $this;
    } // setGlmapackpost()

    /**
     * Set the value of [glmavald] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmavald($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmavald !== $v) {
            $this->glmavald = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMAVALD] = true;
        }

        return $this;
    } // setGlmavald()

    /**
     * Set the value of [glmaco01] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco01 !== $v) {
            $this->glmaco01 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO01] = true;
        }

        return $this;
    } // setGlmaco01()

    /**
     * Set the value of [glmaco02] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco02 !== $v) {
            $this->glmaco02 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO02] = true;
        }

        return $this;
    } // setGlmaco02()

    /**
     * Set the value of [glmaco03] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco03 !== $v) {
            $this->glmaco03 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO03] = true;
        }

        return $this;
    } // setGlmaco03()

    /**
     * Set the value of [glmaco04] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco04 !== $v) {
            $this->glmaco04 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO04] = true;
        }

        return $this;
    } // setGlmaco04()

    /**
     * Set the value of [glmaco05] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco05 !== $v) {
            $this->glmaco05 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO05] = true;
        }

        return $this;
    } // setGlmaco05()

    /**
     * Set the value of [glmaco06] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco06 !== $v) {
            $this->glmaco06 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO06] = true;
        }

        return $this;
    } // setGlmaco06()

    /**
     * Set the value of [glmaco07] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco07 !== $v) {
            $this->glmaco07 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO07] = true;
        }

        return $this;
    } // setGlmaco07()

    /**
     * Set the value of [glmaco08] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco08 !== $v) {
            $this->glmaco08 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO08] = true;
        }

        return $this;
    } // setGlmaco08()

    /**
     * Set the value of [glmaco09] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco09 !== $v) {
            $this->glmaco09 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO09] = true;
        }

        return $this;
    } // setGlmaco09()

    /**
     * Set the value of [glmaco10] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaco10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaco10 !== $v) {
            $this->glmaco10 = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMACO10] = true;
        }

        return $this;
    } // setGlmaco10()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [glmaacwhseappendpos] column.
     *
     * @param int $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaAcWhseAppendPos($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->glmaacwhseappendpos !== $v) {
            $this->glmaacwhseappendpos = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS] = true;
        }

        return $this;
    } // setGlmaAcWhseAppendPos()

    /**
     * Set the value of [glmaachacct] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setGlmaAchAcct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->glmaachacct !== $v) {
            $this->glmaachacct = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_GLMAACHACCT] = true;
        }

        return $this;
    } // setGlmaAchAcct()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\GlCode The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[GlCodeTableMap::COL_DUMMY] = true;
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
            if ($this->glmaacct !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : GlCodeTableMap::translateFieldName('Glmaacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : GlCodeTableMap::translateFieldName('Glmadesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmadesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : GlCodeTableMap::translateFieldName('Glmadrcr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmadrcr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : GlCodeTableMap::translateFieldName('Glmaclosacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaclosacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : GlCodeTableMap::translateFieldName('Glmapackpost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmapackpost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : GlCodeTableMap::translateFieldName('Glmavald', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmavald = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : GlCodeTableMap::translateFieldName('Glmaco01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : GlCodeTableMap::translateFieldName('Glmaco02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : GlCodeTableMap::translateFieldName('Glmaco03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : GlCodeTableMap::translateFieldName('Glmaco04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : GlCodeTableMap::translateFieldName('Glmaco05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : GlCodeTableMap::translateFieldName('Glmaco06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : GlCodeTableMap::translateFieldName('Glmaco07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : GlCodeTableMap::translateFieldName('Glmaco08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : GlCodeTableMap::translateFieldName('Glmaco09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : GlCodeTableMap::translateFieldName('Glmaco10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaco10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : GlCodeTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : GlCodeTableMap::translateFieldName('GlmaAcWhseAppendPos', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaacwhseappendpos = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : GlCodeTableMap::translateFieldName('GlmaAchAcct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->glmaachacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : GlCodeTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : GlCodeTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 21; // 21 = GlCodeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\GlCode'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(GlCodeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildGlCodeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see GlCode::setDeleted()
     * @see GlCode::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlCodeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildGlCodeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(GlCodeTableMap::DATABASE_NAME);
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
                GlCodeTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAACCT)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaAcct';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMADESC)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaDesc';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMADRCR)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaDrCr';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACLOSACCT)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaClosAcct';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAPACKPOST)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaPackPost';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAVALD)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaVald';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO01)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo01';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO02)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo02';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO03)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo03';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO04)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo04';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO05)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo05';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO06)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo06';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO07)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo07';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO08)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo08';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO09)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo09';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO10)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaCo10';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaAcWhseAppendPos';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAACHACCT)) {
            $modifiedColumns[':p' . $index++]  = 'GlmaAchAcct';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO gl_master (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'GlmaAcct':
                        $stmt->bindValue($identifier, $this->glmaacct, PDO::PARAM_STR);
                        break;
                    case 'GlmaDesc':
                        $stmt->bindValue($identifier, $this->glmadesc, PDO::PARAM_STR);
                        break;
                    case 'GlmaDrCr':
                        $stmt->bindValue($identifier, $this->glmadrcr, PDO::PARAM_STR);
                        break;
                    case 'GlmaClosAcct':
                        $stmt->bindValue($identifier, $this->glmaclosacct, PDO::PARAM_STR);
                        break;
                    case 'GlmaPackPost':
                        $stmt->bindValue($identifier, $this->glmapackpost, PDO::PARAM_STR);
                        break;
                    case 'GlmaVald':
                        $stmt->bindValue($identifier, $this->glmavald, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo01':
                        $stmt->bindValue($identifier, $this->glmaco01, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo02':
                        $stmt->bindValue($identifier, $this->glmaco02, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo03':
                        $stmt->bindValue($identifier, $this->glmaco03, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo04':
                        $stmt->bindValue($identifier, $this->glmaco04, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo05':
                        $stmt->bindValue($identifier, $this->glmaco05, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo06':
                        $stmt->bindValue($identifier, $this->glmaco06, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo07':
                        $stmt->bindValue($identifier, $this->glmaco07, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo08':
                        $stmt->bindValue($identifier, $this->glmaco08, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo09':
                        $stmt->bindValue($identifier, $this->glmaco09, PDO::PARAM_STR);
                        break;
                    case 'GlmaCo10':
                        $stmt->bindValue($identifier, $this->glmaco10, PDO::PARAM_STR);
                        break;
                    case 'DateUpdtd':
                        $stmt->bindValue($identifier, $this->dateupdtd, PDO::PARAM_STR);
                        break;
                    case 'GlmaAcWhseAppendPos':
                        $stmt->bindValue($identifier, $this->glmaacwhseappendpos, PDO::PARAM_INT);
                        break;
                    case 'GlmaAchAcct':
                        $stmt->bindValue($identifier, $this->glmaachacct, PDO::PARAM_STR);
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
        $pos = GlCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getGlmaacct();
                break;
            case 1:
                return $this->getGlmadesc();
                break;
            case 2:
                return $this->getGlmadrcr();
                break;
            case 3:
                return $this->getGlmaclosacct();
                break;
            case 4:
                return $this->getGlmapackpost();
                break;
            case 5:
                return $this->getGlmavald();
                break;
            case 6:
                return $this->getGlmaco01();
                break;
            case 7:
                return $this->getGlmaco02();
                break;
            case 8:
                return $this->getGlmaco03();
                break;
            case 9:
                return $this->getGlmaco04();
                break;
            case 10:
                return $this->getGlmaco05();
                break;
            case 11:
                return $this->getGlmaco06();
                break;
            case 12:
                return $this->getGlmaco07();
                break;
            case 13:
                return $this->getGlmaco08();
                break;
            case 14:
                return $this->getGlmaco09();
                break;
            case 15:
                return $this->getGlmaco10();
                break;
            case 16:
                return $this->getDateupdtd();
                break;
            case 17:
                return $this->getGlmaAcWhseAppendPos();
                break;
            case 18:
                return $this->getGlmaAchAcct();
                break;
            case 19:
                return $this->getTimeupdtd();
                break;
            case 20:
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

        if (isset($alreadyDumpedObjects['GlCode'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GlCode'][$this->hashCode()] = true;
        $keys = GlCodeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getGlmaacct(),
            $keys[1] => $this->getGlmadesc(),
            $keys[2] => $this->getGlmadrcr(),
            $keys[3] => $this->getGlmaclosacct(),
            $keys[4] => $this->getGlmapackpost(),
            $keys[5] => $this->getGlmavald(),
            $keys[6] => $this->getGlmaco01(),
            $keys[7] => $this->getGlmaco02(),
            $keys[8] => $this->getGlmaco03(),
            $keys[9] => $this->getGlmaco04(),
            $keys[10] => $this->getGlmaco05(),
            $keys[11] => $this->getGlmaco06(),
            $keys[12] => $this->getGlmaco07(),
            $keys[13] => $this->getGlmaco08(),
            $keys[14] => $this->getGlmaco09(),
            $keys[15] => $this->getGlmaco10(),
            $keys[16] => $this->getDateupdtd(),
            $keys[17] => $this->getGlmaAcWhseAppendPos(),
            $keys[18] => $this->getGlmaAchAcct(),
            $keys[19] => $this->getTimeupdtd(),
            $keys[20] => $this->getDummy(),
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
     * @return $this|\GlCode
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = GlCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\GlCode
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setGlmaacct($value);
                break;
            case 1:
                $this->setGlmadesc($value);
                break;
            case 2:
                $this->setGlmadrcr($value);
                break;
            case 3:
                $this->setGlmaclosacct($value);
                break;
            case 4:
                $this->setGlmapackpost($value);
                break;
            case 5:
                $this->setGlmavald($value);
                break;
            case 6:
                $this->setGlmaco01($value);
                break;
            case 7:
                $this->setGlmaco02($value);
                break;
            case 8:
                $this->setGlmaco03($value);
                break;
            case 9:
                $this->setGlmaco04($value);
                break;
            case 10:
                $this->setGlmaco05($value);
                break;
            case 11:
                $this->setGlmaco06($value);
                break;
            case 12:
                $this->setGlmaco07($value);
                break;
            case 13:
                $this->setGlmaco08($value);
                break;
            case 14:
                $this->setGlmaco09($value);
                break;
            case 15:
                $this->setGlmaco10($value);
                break;
            case 16:
                $this->setDateupdtd($value);
                break;
            case 17:
                $this->setGlmaAcWhseAppendPos($value);
                break;
            case 18:
                $this->setGlmaAchAcct($value);
                break;
            case 19:
                $this->setTimeupdtd($value);
                break;
            case 20:
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
        $keys = GlCodeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setGlmaacct($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setGlmadesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setGlmadrcr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setGlmaclosacct($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setGlmapackpost($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setGlmavald($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setGlmaco01($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setGlmaco02($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setGlmaco03($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setGlmaco04($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setGlmaco05($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setGlmaco06($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setGlmaco07($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setGlmaco08($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setGlmaco09($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setGlmaco10($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDateupdtd($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setGlmaAcWhseAppendPos($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setGlmaAchAcct($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setTimeupdtd($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDummy($arr[$keys[20]]);
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
     * @return $this|\GlCode The current object, for fluid interface
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
        $criteria = new Criteria(GlCodeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAACCT)) {
            $criteria->add(GlCodeTableMap::COL_GLMAACCT, $this->glmaacct);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMADESC)) {
            $criteria->add(GlCodeTableMap::COL_GLMADESC, $this->glmadesc);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMADRCR)) {
            $criteria->add(GlCodeTableMap::COL_GLMADRCR, $this->glmadrcr);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACLOSACCT)) {
            $criteria->add(GlCodeTableMap::COL_GLMACLOSACCT, $this->glmaclosacct);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAPACKPOST)) {
            $criteria->add(GlCodeTableMap::COL_GLMAPACKPOST, $this->glmapackpost);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAVALD)) {
            $criteria->add(GlCodeTableMap::COL_GLMAVALD, $this->glmavald);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO01)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO01, $this->glmaco01);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO02)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO02, $this->glmaco02);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO03)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO03, $this->glmaco03);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO04)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO04, $this->glmaco04);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO05)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO05, $this->glmaco05);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO06)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO06, $this->glmaco06);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO07)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO07, $this->glmaco07);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO08)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO08, $this->glmaco08);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO09)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO09, $this->glmaco09);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMACO10)) {
            $criteria->add(GlCodeTableMap::COL_GLMACO10, $this->glmaco10);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_DATEUPDTD)) {
            $criteria->add(GlCodeTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS)) {
            $criteria->add(GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS, $this->glmaacwhseappendpos);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_GLMAACHACCT)) {
            $criteria->add(GlCodeTableMap::COL_GLMAACHACCT, $this->glmaachacct);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_TIMEUPDTD)) {
            $criteria->add(GlCodeTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(GlCodeTableMap::COL_DUMMY)) {
            $criteria->add(GlCodeTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildGlCodeQuery::create();
        $criteria->add(GlCodeTableMap::COL_GLMAACCT, $this->glmaacct);

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
        $validPk = null !== $this->getGlmaacct();

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
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getGlmaacct();
    }

    /**
     * Generic method to set the primary key (glmaacct column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setGlmaacct($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getGlmaacct();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \GlCode (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGlmaacct($this->getGlmaacct());
        $copyObj->setGlmadesc($this->getGlmadesc());
        $copyObj->setGlmadrcr($this->getGlmadrcr());
        $copyObj->setGlmaclosacct($this->getGlmaclosacct());
        $copyObj->setGlmapackpost($this->getGlmapackpost());
        $copyObj->setGlmavald($this->getGlmavald());
        $copyObj->setGlmaco01($this->getGlmaco01());
        $copyObj->setGlmaco02($this->getGlmaco02());
        $copyObj->setGlmaco03($this->getGlmaco03());
        $copyObj->setGlmaco04($this->getGlmaco04());
        $copyObj->setGlmaco05($this->getGlmaco05());
        $copyObj->setGlmaco06($this->getGlmaco06());
        $copyObj->setGlmaco07($this->getGlmaco07());
        $copyObj->setGlmaco08($this->getGlmaco08());
        $copyObj->setGlmaco09($this->getGlmaco09());
        $copyObj->setGlmaco10($this->getGlmaco10());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setGlmaAcWhseAppendPos($this->getGlmaAcWhseAppendPos());
        $copyObj->setGlmaAchAcct($this->getGlmaAchAcct());
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
     * @return \GlCode Clone of current object.
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
        $this->glmaacct = null;
        $this->glmadesc = null;
        $this->glmadrcr = null;
        $this->glmaclosacct = null;
        $this->glmapackpost = null;
        $this->glmavald = null;
        $this->glmaco01 = null;
        $this->glmaco02 = null;
        $this->glmaco03 = null;
        $this->glmaco04 = null;
        $this->glmaco05 = null;
        $this->glmaco06 = null;
        $this->glmaco07 = null;
        $this->glmaco08 = null;
        $this->glmaco09 = null;
        $this->glmaco10 = null;
        $this->dateupdtd = null;
        $this->glmaacwhseappendpos = null;
        $this->glmaachacct = null;
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
        return (string) $this->exportTo(GlCodeTableMap::DEFAULT_STRING_FORMAT);
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
