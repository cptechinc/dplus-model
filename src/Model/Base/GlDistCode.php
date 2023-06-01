<?php

namespace Base;

use \GlDistCodeQuery as ChildGlDistCodeQuery;
use \Exception;
use \PDO;
use Map\GlDistCodeTableMap;
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
 * Base class that represents a row from the 'gl_dist_code' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class GlDistCode implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\GlDistCodeTableMap';


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
     * The value for the gltbdistcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gltbdistcode;

    /**
     * The value for the gltbdistdesc field.
     *
     * @var        string
     */
    protected $gltbdistdesc;

    /**
     * The value for the gltbdistacctnbr01 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr01;

    /**
     * The value for the gltbdistacctpct01 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct01;

    /**
     * The value for the gltbdistacctnbr02 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr02;

    /**
     * The value for the gltbdistacctpct02 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct02;

    /**
     * The value for the gltbdistacctnbr03 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr03;

    /**
     * The value for the gltbdistacctpct03 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct03;

    /**
     * The value for the gltbdistacctnbr04 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr04;

    /**
     * The value for the gltbdistacctpct04 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct04;

    /**
     * The value for the gltbdistacctnbr05 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr05;

    /**
     * The value for the gltbdistacctpct05 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct05;

    /**
     * The value for the gltbdistacctnbr06 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr06;

    /**
     * The value for the gltbdistacctpct06 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct06;

    /**
     * The value for the gltbdistacctnbr07 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr07;

    /**
     * The value for the gltbdistacctpct07 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct07;

    /**
     * The value for the gltbdistacctnbr08 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr08;

    /**
     * The value for the gltbdistacctpct08 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct08;

    /**
     * The value for the gltbdistacctnbr09 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr09;

    /**
     * The value for the gltbdistacctpct09 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct09;

    /**
     * The value for the gltbdistacctnbr10 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr10;

    /**
     * The value for the gltbdistacctpct10 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct10;

    /**
     * The value for the gltbdistacctnbr11 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr11;

    /**
     * The value for the gltbdistacctpct11 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct11;

    /**
     * The value for the gltbdistacctnbr12 field.
     *
     * @var        string
     */
    protected $gltbdistacctnbr12;

    /**
     * The value for the gltbdistacctpct12 field.
     *
     * @var        string
     */
    protected $gltbdistacctpct12;

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
        $this->gltbdistcode = '';
    }

    /**
     * Initializes internal state of Base\GlDistCode object.
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
     * Compares this with another <code>GlDistCode</code> instance.  If
     * <code>obj</code> is an instance of <code>GlDistCode</code>, delegates to
     * <code>equals(GlDistCode)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|GlDistCode The current object, for fluid interface
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
     * Get the [gltbdistcode] column value.
     *
     * @return string
     */
    public function getGltbdistcode()
    {
        return $this->gltbdistcode;
    }

    /**
     * Get the [gltbdistdesc] column value.
     *
     * @return string
     */
    public function getGltbdistdesc()
    {
        return $this->gltbdistdesc;
    }

    /**
     * Get the [gltbdistacctnbr01] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr01()
    {
        return $this->gltbdistacctnbr01;
    }

    /**
     * Get the [gltbdistacctpct01] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct01()
    {
        return $this->gltbdistacctpct01;
    }

    /**
     * Get the [gltbdistacctnbr02] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr02()
    {
        return $this->gltbdistacctnbr02;
    }

    /**
     * Get the [gltbdistacctpct02] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct02()
    {
        return $this->gltbdistacctpct02;
    }

    /**
     * Get the [gltbdistacctnbr03] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr03()
    {
        return $this->gltbdistacctnbr03;
    }

    /**
     * Get the [gltbdistacctpct03] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct03()
    {
        return $this->gltbdistacctpct03;
    }

    /**
     * Get the [gltbdistacctnbr04] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr04()
    {
        return $this->gltbdistacctnbr04;
    }

    /**
     * Get the [gltbdistacctpct04] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct04()
    {
        return $this->gltbdistacctpct04;
    }

    /**
     * Get the [gltbdistacctnbr05] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr05()
    {
        return $this->gltbdistacctnbr05;
    }

    /**
     * Get the [gltbdistacctpct05] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct05()
    {
        return $this->gltbdistacctpct05;
    }

    /**
     * Get the [gltbdistacctnbr06] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr06()
    {
        return $this->gltbdistacctnbr06;
    }

    /**
     * Get the [gltbdistacctpct06] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct06()
    {
        return $this->gltbdistacctpct06;
    }

    /**
     * Get the [gltbdistacctnbr07] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr07()
    {
        return $this->gltbdistacctnbr07;
    }

    /**
     * Get the [gltbdistacctpct07] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct07()
    {
        return $this->gltbdistacctpct07;
    }

    /**
     * Get the [gltbdistacctnbr08] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr08()
    {
        return $this->gltbdistacctnbr08;
    }

    /**
     * Get the [gltbdistacctpct08] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct08()
    {
        return $this->gltbdistacctpct08;
    }

    /**
     * Get the [gltbdistacctnbr09] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr09()
    {
        return $this->gltbdistacctnbr09;
    }

    /**
     * Get the [gltbdistacctpct09] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct09()
    {
        return $this->gltbdistacctpct09;
    }

    /**
     * Get the [gltbdistacctnbr10] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr10()
    {
        return $this->gltbdistacctnbr10;
    }

    /**
     * Get the [gltbdistacctpct10] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct10()
    {
        return $this->gltbdistacctpct10;
    }

    /**
     * Get the [gltbdistacctnbr11] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr11()
    {
        return $this->gltbdistacctnbr11;
    }

    /**
     * Get the [gltbdistacctpct11] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct11()
    {
        return $this->gltbdistacctpct11;
    }

    /**
     * Get the [gltbdistacctnbr12] column value.
     *
     * @return string
     */
    public function getGltbdistacctnbr12()
    {
        return $this->gltbdistacctnbr12;
    }

    /**
     * Get the [gltbdistacctpct12] column value.
     *
     * @return string
     */
    public function getGltbdistacctpct12()
    {
        return $this->gltbdistacctpct12;
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
     * Set the value of [gltbdistcode] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistcode !== $v) {
            $this->gltbdistcode = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTCODE] = true;
        }

        return $this;
    } // setGltbdistcode()

    /**
     * Set the value of [gltbdistdesc] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistdesc !== $v) {
            $this->gltbdistdesc = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTDESC] = true;
        }

        return $this;
    } // setGltbdistdesc()

    /**
     * Set the value of [gltbdistacctnbr01] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr01 !== $v) {
            $this->gltbdistacctnbr01 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR01] = true;
        }

        return $this;
    } // setGltbdistacctnbr01()

    /**
     * Set the value of [gltbdistacctpct01] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct01 !== $v) {
            $this->gltbdistacctpct01 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT01] = true;
        }

        return $this;
    } // setGltbdistacctpct01()

    /**
     * Set the value of [gltbdistacctnbr02] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr02 !== $v) {
            $this->gltbdistacctnbr02 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR02] = true;
        }

        return $this;
    } // setGltbdistacctnbr02()

    /**
     * Set the value of [gltbdistacctpct02] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct02 !== $v) {
            $this->gltbdistacctpct02 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT02] = true;
        }

        return $this;
    } // setGltbdistacctpct02()

    /**
     * Set the value of [gltbdistacctnbr03] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr03 !== $v) {
            $this->gltbdistacctnbr03 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR03] = true;
        }

        return $this;
    } // setGltbdistacctnbr03()

    /**
     * Set the value of [gltbdistacctpct03] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct03 !== $v) {
            $this->gltbdistacctpct03 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT03] = true;
        }

        return $this;
    } // setGltbdistacctpct03()

    /**
     * Set the value of [gltbdistacctnbr04] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr04 !== $v) {
            $this->gltbdistacctnbr04 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR04] = true;
        }

        return $this;
    } // setGltbdistacctnbr04()

    /**
     * Set the value of [gltbdistacctpct04] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct04 !== $v) {
            $this->gltbdistacctpct04 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT04] = true;
        }

        return $this;
    } // setGltbdistacctpct04()

    /**
     * Set the value of [gltbdistacctnbr05] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr05 !== $v) {
            $this->gltbdistacctnbr05 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR05] = true;
        }

        return $this;
    } // setGltbdistacctnbr05()

    /**
     * Set the value of [gltbdistacctpct05] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct05 !== $v) {
            $this->gltbdistacctpct05 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT05] = true;
        }

        return $this;
    } // setGltbdistacctpct05()

    /**
     * Set the value of [gltbdistacctnbr06] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr06 !== $v) {
            $this->gltbdistacctnbr06 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR06] = true;
        }

        return $this;
    } // setGltbdistacctnbr06()

    /**
     * Set the value of [gltbdistacctpct06] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct06 !== $v) {
            $this->gltbdistacctpct06 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT06] = true;
        }

        return $this;
    } // setGltbdistacctpct06()

    /**
     * Set the value of [gltbdistacctnbr07] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr07 !== $v) {
            $this->gltbdistacctnbr07 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR07] = true;
        }

        return $this;
    } // setGltbdistacctnbr07()

    /**
     * Set the value of [gltbdistacctpct07] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct07 !== $v) {
            $this->gltbdistacctpct07 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT07] = true;
        }

        return $this;
    } // setGltbdistacctpct07()

    /**
     * Set the value of [gltbdistacctnbr08] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr08 !== $v) {
            $this->gltbdistacctnbr08 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR08] = true;
        }

        return $this;
    } // setGltbdistacctnbr08()

    /**
     * Set the value of [gltbdistacctpct08] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct08 !== $v) {
            $this->gltbdistacctpct08 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT08] = true;
        }

        return $this;
    } // setGltbdistacctpct08()

    /**
     * Set the value of [gltbdistacctnbr09] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr09 !== $v) {
            $this->gltbdistacctnbr09 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR09] = true;
        }

        return $this;
    } // setGltbdistacctnbr09()

    /**
     * Set the value of [gltbdistacctpct09] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct09 !== $v) {
            $this->gltbdistacctpct09 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT09] = true;
        }

        return $this;
    } // setGltbdistacctpct09()

    /**
     * Set the value of [gltbdistacctnbr10] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr10 !== $v) {
            $this->gltbdistacctnbr10 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR10] = true;
        }

        return $this;
    } // setGltbdistacctnbr10()

    /**
     * Set the value of [gltbdistacctpct10] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct10 !== $v) {
            $this->gltbdistacctpct10 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT10] = true;
        }

        return $this;
    } // setGltbdistacctpct10()

    /**
     * Set the value of [gltbdistacctnbr11] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr11 !== $v) {
            $this->gltbdistacctnbr11 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR11] = true;
        }

        return $this;
    } // setGltbdistacctnbr11()

    /**
     * Set the value of [gltbdistacctpct11] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct11 !== $v) {
            $this->gltbdistacctpct11 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT11] = true;
        }

        return $this;
    } // setGltbdistacctpct11()

    /**
     * Set the value of [gltbdistacctnbr12] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctnbr12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctnbr12 !== $v) {
            $this->gltbdistacctnbr12 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTNBR12] = true;
        }

        return $this;
    } // setGltbdistacctnbr12()

    /**
     * Set the value of [gltbdistacctpct12] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setGltbdistacctpct12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gltbdistacctpct12 !== $v) {
            $this->gltbdistacctpct12 = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_GLTBDISTACCTPCT12] = true;
        }

        return $this;
    } // setGltbdistacctpct12()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\GlDistCode The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[GlDistCodeTableMap::COL_DUMMY] = true;
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
            if ($this->gltbdistcode !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctnbr12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctnbr12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : GlDistCodeTableMap::translateFieldName('Gltbdistacctpct12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gltbdistacctpct12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : GlDistCodeTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : GlDistCodeTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : GlDistCodeTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 29; // 29 = GlDistCodeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\GlDistCode'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(GlDistCodeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildGlDistCodeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see GlDistCode::setDeleted()
     * @see GlDistCode::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlDistCodeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildGlDistCodeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(GlDistCodeTableMap::DATABASE_NAME);
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
                GlDistCodeTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistCode';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTDESC)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistDesc';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR01)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr01';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT01)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct01';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR02)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr02';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT02)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct02';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR03)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr03';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT03)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct03';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR04)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr04';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT04)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct04';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR05)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr05';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT05)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct05';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR06)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr06';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT06)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct06';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR07)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr07';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT07)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct07';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR08)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr08';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT08)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct08';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR09)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr09';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT09)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct09';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR10)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr10';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT10)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct10';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR11)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr11';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT11)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct11';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR12)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctNbr12';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT12)) {
            $modifiedColumns[':p' . $index++]  = 'GltbDistAcctPct12';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO gl_dist_code (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'GltbDistCode':
                        $stmt->bindValue($identifier, $this->gltbdistcode, PDO::PARAM_STR);
                        break;
                    case 'GltbDistDesc':
                        $stmt->bindValue($identifier, $this->gltbdistdesc, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr01':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr01, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct01':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct01, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr02':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr02, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct02':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct02, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr03':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr03, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct03':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct03, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr04':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr04, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct04':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct04, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr05':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr05, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct05':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct05, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr06':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr06, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct06':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct06, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr07':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr07, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct07':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct07, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr08':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr08, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct08':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct08, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr09':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr09, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct09':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct09, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr10':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr10, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct10':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct10, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr11':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr11, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct11':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct11, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctNbr12':
                        $stmt->bindValue($identifier, $this->gltbdistacctnbr12, PDO::PARAM_STR);
                        break;
                    case 'GltbDistAcctPct12':
                        $stmt->bindValue($identifier, $this->gltbdistacctpct12, PDO::PARAM_STR);
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
        $pos = GlDistCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getGltbdistcode();
                break;
            case 1:
                return $this->getGltbdistdesc();
                break;
            case 2:
                return $this->getGltbdistacctnbr01();
                break;
            case 3:
                return $this->getGltbdistacctpct01();
                break;
            case 4:
                return $this->getGltbdistacctnbr02();
                break;
            case 5:
                return $this->getGltbdistacctpct02();
                break;
            case 6:
                return $this->getGltbdistacctnbr03();
                break;
            case 7:
                return $this->getGltbdistacctpct03();
                break;
            case 8:
                return $this->getGltbdistacctnbr04();
                break;
            case 9:
                return $this->getGltbdistacctpct04();
                break;
            case 10:
                return $this->getGltbdistacctnbr05();
                break;
            case 11:
                return $this->getGltbdistacctpct05();
                break;
            case 12:
                return $this->getGltbdistacctnbr06();
                break;
            case 13:
                return $this->getGltbdistacctpct06();
                break;
            case 14:
                return $this->getGltbdistacctnbr07();
                break;
            case 15:
                return $this->getGltbdistacctpct07();
                break;
            case 16:
                return $this->getGltbdistacctnbr08();
                break;
            case 17:
                return $this->getGltbdistacctpct08();
                break;
            case 18:
                return $this->getGltbdistacctnbr09();
                break;
            case 19:
                return $this->getGltbdistacctpct09();
                break;
            case 20:
                return $this->getGltbdistacctnbr10();
                break;
            case 21:
                return $this->getGltbdistacctpct10();
                break;
            case 22:
                return $this->getGltbdistacctnbr11();
                break;
            case 23:
                return $this->getGltbdistacctpct11();
                break;
            case 24:
                return $this->getGltbdistacctnbr12();
                break;
            case 25:
                return $this->getGltbdistacctpct12();
                break;
            case 26:
                return $this->getDateupdtd();
                break;
            case 27:
                return $this->getTimeupdtd();
                break;
            case 28:
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

        if (isset($alreadyDumpedObjects['GlDistCode'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GlDistCode'][$this->hashCode()] = true;
        $keys = GlDistCodeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getGltbdistcode(),
            $keys[1] => $this->getGltbdistdesc(),
            $keys[2] => $this->getGltbdistacctnbr01(),
            $keys[3] => $this->getGltbdistacctpct01(),
            $keys[4] => $this->getGltbdistacctnbr02(),
            $keys[5] => $this->getGltbdistacctpct02(),
            $keys[6] => $this->getGltbdistacctnbr03(),
            $keys[7] => $this->getGltbdistacctpct03(),
            $keys[8] => $this->getGltbdistacctnbr04(),
            $keys[9] => $this->getGltbdistacctpct04(),
            $keys[10] => $this->getGltbdistacctnbr05(),
            $keys[11] => $this->getGltbdistacctpct05(),
            $keys[12] => $this->getGltbdistacctnbr06(),
            $keys[13] => $this->getGltbdistacctpct06(),
            $keys[14] => $this->getGltbdistacctnbr07(),
            $keys[15] => $this->getGltbdistacctpct07(),
            $keys[16] => $this->getGltbdistacctnbr08(),
            $keys[17] => $this->getGltbdistacctpct08(),
            $keys[18] => $this->getGltbdistacctnbr09(),
            $keys[19] => $this->getGltbdistacctpct09(),
            $keys[20] => $this->getGltbdistacctnbr10(),
            $keys[21] => $this->getGltbdistacctpct10(),
            $keys[22] => $this->getGltbdistacctnbr11(),
            $keys[23] => $this->getGltbdistacctpct11(),
            $keys[24] => $this->getGltbdistacctnbr12(),
            $keys[25] => $this->getGltbdistacctpct12(),
            $keys[26] => $this->getDateupdtd(),
            $keys[27] => $this->getTimeupdtd(),
            $keys[28] => $this->getDummy(),
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
     * @return $this|\GlDistCode
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = GlDistCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\GlDistCode
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setGltbdistcode($value);
                break;
            case 1:
                $this->setGltbdistdesc($value);
                break;
            case 2:
                $this->setGltbdistacctnbr01($value);
                break;
            case 3:
                $this->setGltbdistacctpct01($value);
                break;
            case 4:
                $this->setGltbdistacctnbr02($value);
                break;
            case 5:
                $this->setGltbdistacctpct02($value);
                break;
            case 6:
                $this->setGltbdistacctnbr03($value);
                break;
            case 7:
                $this->setGltbdistacctpct03($value);
                break;
            case 8:
                $this->setGltbdistacctnbr04($value);
                break;
            case 9:
                $this->setGltbdistacctpct04($value);
                break;
            case 10:
                $this->setGltbdistacctnbr05($value);
                break;
            case 11:
                $this->setGltbdistacctpct05($value);
                break;
            case 12:
                $this->setGltbdistacctnbr06($value);
                break;
            case 13:
                $this->setGltbdistacctpct06($value);
                break;
            case 14:
                $this->setGltbdistacctnbr07($value);
                break;
            case 15:
                $this->setGltbdistacctpct07($value);
                break;
            case 16:
                $this->setGltbdistacctnbr08($value);
                break;
            case 17:
                $this->setGltbdistacctpct08($value);
                break;
            case 18:
                $this->setGltbdistacctnbr09($value);
                break;
            case 19:
                $this->setGltbdistacctpct09($value);
                break;
            case 20:
                $this->setGltbdistacctnbr10($value);
                break;
            case 21:
                $this->setGltbdistacctpct10($value);
                break;
            case 22:
                $this->setGltbdistacctnbr11($value);
                break;
            case 23:
                $this->setGltbdistacctpct11($value);
                break;
            case 24:
                $this->setGltbdistacctnbr12($value);
                break;
            case 25:
                $this->setGltbdistacctpct12($value);
                break;
            case 26:
                $this->setDateupdtd($value);
                break;
            case 27:
                $this->setTimeupdtd($value);
                break;
            case 28:
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
        $keys = GlDistCodeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setGltbdistcode($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setGltbdistdesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setGltbdistacctnbr01($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setGltbdistacctpct01($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setGltbdistacctnbr02($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setGltbdistacctpct02($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setGltbdistacctnbr03($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setGltbdistacctpct03($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setGltbdistacctnbr04($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setGltbdistacctpct04($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setGltbdistacctnbr05($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setGltbdistacctpct05($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setGltbdistacctnbr06($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setGltbdistacctpct06($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setGltbdistacctnbr07($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setGltbdistacctpct07($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setGltbdistacctnbr08($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setGltbdistacctpct08($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setGltbdistacctnbr09($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setGltbdistacctpct09($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setGltbdistacctnbr10($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setGltbdistacctpct10($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setGltbdistacctnbr11($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setGltbdistacctpct11($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setGltbdistacctnbr12($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setGltbdistacctpct12($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setDateupdtd($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setTimeupdtd($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setDummy($arr[$keys[28]]);
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
     * @return $this|\GlDistCode The current object, for fluid interface
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
        $criteria = new Criteria(GlDistCodeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTCODE)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTCODE, $this->gltbdistcode);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTDESC)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTDESC, $this->gltbdistdesc);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR01)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR01, $this->gltbdistacctnbr01);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT01)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT01, $this->gltbdistacctpct01);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR02)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR02, $this->gltbdistacctnbr02);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT02)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT02, $this->gltbdistacctpct02);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR03)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR03, $this->gltbdistacctnbr03);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT03)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT03, $this->gltbdistacctpct03);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR04)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR04, $this->gltbdistacctnbr04);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT04)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT04, $this->gltbdistacctpct04);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR05)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR05, $this->gltbdistacctnbr05);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT05)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT05, $this->gltbdistacctpct05);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR06)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR06, $this->gltbdistacctnbr06);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT06)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT06, $this->gltbdistacctpct06);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR07)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR07, $this->gltbdistacctnbr07);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT07)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT07, $this->gltbdistacctpct07);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR08)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR08, $this->gltbdistacctnbr08);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT08)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT08, $this->gltbdistacctpct08);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR09)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR09, $this->gltbdistacctnbr09);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT09)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT09, $this->gltbdistacctpct09);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR10)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR10, $this->gltbdistacctnbr10);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT10)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT10, $this->gltbdistacctpct10);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR11)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR11, $this->gltbdistacctnbr11);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT11)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT11, $this->gltbdistacctpct11);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTNBR12)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTNBR12, $this->gltbdistacctnbr12);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_GLTBDISTACCTPCT12)) {
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTACCTPCT12, $this->gltbdistacctpct12);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_DATEUPDTD)) {
            $criteria->add(GlDistCodeTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_TIMEUPDTD)) {
            $criteria->add(GlDistCodeTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(GlDistCodeTableMap::COL_DUMMY)) {
            $criteria->add(GlDistCodeTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildGlDistCodeQuery::create();
        $criteria->add(GlDistCodeTableMap::COL_GLTBDISTCODE, $this->gltbdistcode);

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
        $validPk = null !== $this->getGltbdistcode();

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
        return $this->getGltbdistcode();
    }

    /**
     * Generic method to set the primary key (gltbdistcode column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setGltbdistcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getGltbdistcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \GlDistCode (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGltbdistcode($this->getGltbdistcode());
        $copyObj->setGltbdistdesc($this->getGltbdistdesc());
        $copyObj->setGltbdistacctnbr01($this->getGltbdistacctnbr01());
        $copyObj->setGltbdistacctpct01($this->getGltbdistacctpct01());
        $copyObj->setGltbdistacctnbr02($this->getGltbdistacctnbr02());
        $copyObj->setGltbdistacctpct02($this->getGltbdistacctpct02());
        $copyObj->setGltbdistacctnbr03($this->getGltbdistacctnbr03());
        $copyObj->setGltbdistacctpct03($this->getGltbdistacctpct03());
        $copyObj->setGltbdistacctnbr04($this->getGltbdistacctnbr04());
        $copyObj->setGltbdistacctpct04($this->getGltbdistacctpct04());
        $copyObj->setGltbdistacctnbr05($this->getGltbdistacctnbr05());
        $copyObj->setGltbdistacctpct05($this->getGltbdistacctpct05());
        $copyObj->setGltbdistacctnbr06($this->getGltbdistacctnbr06());
        $copyObj->setGltbdistacctpct06($this->getGltbdistacctpct06());
        $copyObj->setGltbdistacctnbr07($this->getGltbdistacctnbr07());
        $copyObj->setGltbdistacctpct07($this->getGltbdistacctpct07());
        $copyObj->setGltbdistacctnbr08($this->getGltbdistacctnbr08());
        $copyObj->setGltbdistacctpct08($this->getGltbdistacctpct08());
        $copyObj->setGltbdistacctnbr09($this->getGltbdistacctnbr09());
        $copyObj->setGltbdistacctpct09($this->getGltbdistacctpct09());
        $copyObj->setGltbdistacctnbr10($this->getGltbdistacctnbr10());
        $copyObj->setGltbdistacctpct10($this->getGltbdistacctpct10());
        $copyObj->setGltbdistacctnbr11($this->getGltbdistacctnbr11());
        $copyObj->setGltbdistacctpct11($this->getGltbdistacctpct11());
        $copyObj->setGltbdistacctnbr12($this->getGltbdistacctnbr12());
        $copyObj->setGltbdistacctpct12($this->getGltbdistacctpct12());
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
     * @return \GlDistCode Clone of current object.
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
        $this->gltbdistcode = null;
        $this->gltbdistdesc = null;
        $this->gltbdistacctnbr01 = null;
        $this->gltbdistacctpct01 = null;
        $this->gltbdistacctnbr02 = null;
        $this->gltbdistacctpct02 = null;
        $this->gltbdistacctnbr03 = null;
        $this->gltbdistacctpct03 = null;
        $this->gltbdistacctnbr04 = null;
        $this->gltbdistacctpct04 = null;
        $this->gltbdistacctnbr05 = null;
        $this->gltbdistacctpct05 = null;
        $this->gltbdistacctnbr06 = null;
        $this->gltbdistacctpct06 = null;
        $this->gltbdistacctnbr07 = null;
        $this->gltbdistacctpct07 = null;
        $this->gltbdistacctnbr08 = null;
        $this->gltbdistacctpct08 = null;
        $this->gltbdistacctnbr09 = null;
        $this->gltbdistacctpct09 = null;
        $this->gltbdistacctnbr10 = null;
        $this->gltbdistacctpct10 = null;
        $this->gltbdistacctnbr11 = null;
        $this->gltbdistacctpct11 = null;
        $this->gltbdistacctnbr12 = null;
        $this->gltbdistacctpct12 = null;
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
        return (string) $this->exportTo(GlDistCodeTableMap::DEFAULT_STRING_FORMAT);
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
