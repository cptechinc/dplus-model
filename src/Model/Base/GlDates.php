<?php

namespace Base;

use \GlDatesQuery as ChildGlDatesQuery;
use \Exception;
use \PDO;
use Map\GlDatesTableMap;
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
 * Base class that represents a row from the 'gl_dates' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class GlDates implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\GlDatesTableMap';


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
     * The value for the gldkey field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldkey;

    /**
     * The value for the gldfrom1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom1;

    /**
     * The value for the gldthru1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru1;

    /**
     * The value for the gldfrom2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom2;

    /**
     * The value for the gldthru2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru2;

    /**
     * The value for the gldfrom3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom3;

    /**
     * The value for the gldthru3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru3;

    /**
     * The value for the gldfrom4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom4;

    /**
     * The value for the gldthru4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru4;

    /**
     * The value for the gldfrom5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom5;

    /**
     * The value for the gldthru5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru5;

    /**
     * The value for the gldfrom6 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom6;

    /**
     * The value for the gldthru6 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru6;

    /**
     * The value for the gldfrom7 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom7;

    /**
     * The value for the gldthru7 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru7;

    /**
     * The value for the gldfrom8 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom8;

    /**
     * The value for the gldthru8 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru8;

    /**
     * The value for the gldfrom9 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom9;

    /**
     * The value for the gldthru9 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru9;

    /**
     * The value for the gldfrom10 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom10;

    /**
     * The value for the gldthru10 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru10;

    /**
     * The value for the gldfrom11 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom11;

    /**
     * The value for the gldthru11 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru11;

    /**
     * The value for the gldfrom12 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom12;

    /**
     * The value for the gldthru12 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru12;

    /**
     * The value for the gldfrom13 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom13;

    /**
     * The value for the gldthru13 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru13;

    /**
     * The value for the gldfrom14 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom14;

    /**
     * The value for the gldthru14 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru14;

    /**
     * The value for the gldfrom15 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom15;

    /**
     * The value for the gldthru15 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru15;

    /**
     * The value for the gldfrom16 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom16;

    /**
     * The value for the gldthru16 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru16;

    /**
     * The value for the gldfrom17 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom17;

    /**
     * The value for the gldthru17 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru17;

    /**
     * The value for the gldfrom18 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom18;

    /**
     * The value for the gldthru18 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru18;

    /**
     * The value for the gldfrom19 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldfrom19;

    /**
     * The value for the gldthru19 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $gldthru19;

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
        $this->gldkey = '';
        $this->gldfrom1 = '';
        $this->gldthru1 = '';
        $this->gldfrom2 = '';
        $this->gldthru2 = '';
        $this->gldfrom3 = '';
        $this->gldthru3 = '';
        $this->gldfrom4 = '';
        $this->gldthru4 = '';
        $this->gldfrom5 = '';
        $this->gldthru5 = '';
        $this->gldfrom6 = '';
        $this->gldthru6 = '';
        $this->gldfrom7 = '';
        $this->gldthru7 = '';
        $this->gldfrom8 = '';
        $this->gldthru8 = '';
        $this->gldfrom9 = '';
        $this->gldthru9 = '';
        $this->gldfrom10 = '';
        $this->gldthru10 = '';
        $this->gldfrom11 = '';
        $this->gldthru11 = '';
        $this->gldfrom12 = '';
        $this->gldthru12 = '';
        $this->gldfrom13 = '';
        $this->gldthru13 = '';
        $this->gldfrom14 = '';
        $this->gldthru14 = '';
        $this->gldfrom15 = '';
        $this->gldthru15 = '';
        $this->gldfrom16 = '';
        $this->gldthru16 = '';
        $this->gldfrom17 = '';
        $this->gldthru17 = '';
        $this->gldfrom18 = '';
        $this->gldthru18 = '';
        $this->gldfrom19 = '';
        $this->gldthru19 = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\GlDates object.
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
     * Compares this with another <code>GlDates</code> instance.  If
     * <code>obj</code> is an instance of <code>GlDates</code>, delegates to
     * <code>equals(GlDates)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|GlDates The current object, for fluid interface
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
     * Get the [gldkey] column value.
     *
     * @return string
     */
    public function getGldkey()
    {
        return $this->gldkey;
    }

    /**
     * Get the [gldfrom1] column value.
     *
     * @return string
     */
    public function getGldfrom1()
    {
        return $this->gldfrom1;
    }

    /**
     * Get the [gldthru1] column value.
     *
     * @return string
     */
    public function getGldthru1()
    {
        return $this->gldthru1;
    }

    /**
     * Get the [gldfrom2] column value.
     *
     * @return string
     */
    public function getGldfrom2()
    {
        return $this->gldfrom2;
    }

    /**
     * Get the [gldthru2] column value.
     *
     * @return string
     */
    public function getGldthru2()
    {
        return $this->gldthru2;
    }

    /**
     * Get the [gldfrom3] column value.
     *
     * @return string
     */
    public function getGldfrom3()
    {
        return $this->gldfrom3;
    }

    /**
     * Get the [gldthru3] column value.
     *
     * @return string
     */
    public function getGldthru3()
    {
        return $this->gldthru3;
    }

    /**
     * Get the [gldfrom4] column value.
     *
     * @return string
     */
    public function getGldfrom4()
    {
        return $this->gldfrom4;
    }

    /**
     * Get the [gldthru4] column value.
     *
     * @return string
     */
    public function getGldthru4()
    {
        return $this->gldthru4;
    }

    /**
     * Get the [gldfrom5] column value.
     *
     * @return string
     */
    public function getGldfrom5()
    {
        return $this->gldfrom5;
    }

    /**
     * Get the [gldthru5] column value.
     *
     * @return string
     */
    public function getGldthru5()
    {
        return $this->gldthru5;
    }

    /**
     * Get the [gldfrom6] column value.
     *
     * @return string
     */
    public function getGldfrom6()
    {
        return $this->gldfrom6;
    }

    /**
     * Get the [gldthru6] column value.
     *
     * @return string
     */
    public function getGldthru6()
    {
        return $this->gldthru6;
    }

    /**
     * Get the [gldfrom7] column value.
     *
     * @return string
     */
    public function getGldfrom7()
    {
        return $this->gldfrom7;
    }

    /**
     * Get the [gldthru7] column value.
     *
     * @return string
     */
    public function getGldthru7()
    {
        return $this->gldthru7;
    }

    /**
     * Get the [gldfrom8] column value.
     *
     * @return string
     */
    public function getGldfrom8()
    {
        return $this->gldfrom8;
    }

    /**
     * Get the [gldthru8] column value.
     *
     * @return string
     */
    public function getGldthru8()
    {
        return $this->gldthru8;
    }

    /**
     * Get the [gldfrom9] column value.
     *
     * @return string
     */
    public function getGldfrom9()
    {
        return $this->gldfrom9;
    }

    /**
     * Get the [gldthru9] column value.
     *
     * @return string
     */
    public function getGldthru9()
    {
        return $this->gldthru9;
    }

    /**
     * Get the [gldfrom10] column value.
     *
     * @return string
     */
    public function getGldfrom10()
    {
        return $this->gldfrom10;
    }

    /**
     * Get the [gldthru10] column value.
     *
     * @return string
     */
    public function getGldthru10()
    {
        return $this->gldthru10;
    }

    /**
     * Get the [gldfrom11] column value.
     *
     * @return string
     */
    public function getGldfrom11()
    {
        return $this->gldfrom11;
    }

    /**
     * Get the [gldthru11] column value.
     *
     * @return string
     */
    public function getGldthru11()
    {
        return $this->gldthru11;
    }

    /**
     * Get the [gldfrom12] column value.
     *
     * @return string
     */
    public function getGldfrom12()
    {
        return $this->gldfrom12;
    }

    /**
     * Get the [gldthru12] column value.
     *
     * @return string
     */
    public function getGldthru12()
    {
        return $this->gldthru12;
    }

    /**
     * Get the [gldfrom13] column value.
     *
     * @return string
     */
    public function getGldfrom13()
    {
        return $this->gldfrom13;
    }

    /**
     * Get the [gldthru13] column value.
     *
     * @return string
     */
    public function getGldthru13()
    {
        return $this->gldthru13;
    }

    /**
     * Get the [gldfrom14] column value.
     *
     * @return string
     */
    public function getGldfrom14()
    {
        return $this->gldfrom14;
    }

    /**
     * Get the [gldthru14] column value.
     *
     * @return string
     */
    public function getGldthru14()
    {
        return $this->gldthru14;
    }

    /**
     * Get the [gldfrom15] column value.
     *
     * @return string
     */
    public function getGldfrom15()
    {
        return $this->gldfrom15;
    }

    /**
     * Get the [gldthru15] column value.
     *
     * @return string
     */
    public function getGldthru15()
    {
        return $this->gldthru15;
    }

    /**
     * Get the [gldfrom16] column value.
     *
     * @return string
     */
    public function getGldfrom16()
    {
        return $this->gldfrom16;
    }

    /**
     * Get the [gldthru16] column value.
     *
     * @return string
     */
    public function getGldthru16()
    {
        return $this->gldthru16;
    }

    /**
     * Get the [gldfrom17] column value.
     *
     * @return string
     */
    public function getGldfrom17()
    {
        return $this->gldfrom17;
    }

    /**
     * Get the [gldthru17] column value.
     *
     * @return string
     */
    public function getGldthru17()
    {
        return $this->gldthru17;
    }

    /**
     * Get the [gldfrom18] column value.
     *
     * @return string
     */
    public function getGldfrom18()
    {
        return $this->gldfrom18;
    }

    /**
     * Get the [gldthru18] column value.
     *
     * @return string
     */
    public function getGldthru18()
    {
        return $this->gldthru18;
    }

    /**
     * Get the [gldfrom19] column value.
     *
     * @return string
     */
    public function getGldfrom19()
    {
        return $this->gldfrom19;
    }

    /**
     * Get the [gldthru19] column value.
     *
     * @return string
     */
    public function getGldthru19()
    {
        return $this->gldthru19;
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
     * Set the value of [gldkey] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldkey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldkey !== $v) {
            $this->gldkey = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDKEY] = true;
        }

        return $this;
    } // setGldkey()

    /**
     * Set the value of [gldfrom1] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom1 !== $v) {
            $this->gldfrom1 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM1] = true;
        }

        return $this;
    } // setGldfrom1()

    /**
     * Set the value of [gldthru1] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru1 !== $v) {
            $this->gldthru1 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU1] = true;
        }

        return $this;
    } // setGldthru1()

    /**
     * Set the value of [gldfrom2] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom2 !== $v) {
            $this->gldfrom2 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM2] = true;
        }

        return $this;
    } // setGldfrom2()

    /**
     * Set the value of [gldthru2] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru2 !== $v) {
            $this->gldthru2 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU2] = true;
        }

        return $this;
    } // setGldthru2()

    /**
     * Set the value of [gldfrom3] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom3 !== $v) {
            $this->gldfrom3 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM3] = true;
        }

        return $this;
    } // setGldfrom3()

    /**
     * Set the value of [gldthru3] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru3 !== $v) {
            $this->gldthru3 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU3] = true;
        }

        return $this;
    } // setGldthru3()

    /**
     * Set the value of [gldfrom4] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom4 !== $v) {
            $this->gldfrom4 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM4] = true;
        }

        return $this;
    } // setGldfrom4()

    /**
     * Set the value of [gldthru4] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru4 !== $v) {
            $this->gldthru4 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU4] = true;
        }

        return $this;
    } // setGldthru4()

    /**
     * Set the value of [gldfrom5] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom5 !== $v) {
            $this->gldfrom5 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM5] = true;
        }

        return $this;
    } // setGldfrom5()

    /**
     * Set the value of [gldthru5] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru5 !== $v) {
            $this->gldthru5 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU5] = true;
        }

        return $this;
    } // setGldthru5()

    /**
     * Set the value of [gldfrom6] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom6 !== $v) {
            $this->gldfrom6 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM6] = true;
        }

        return $this;
    } // setGldfrom6()

    /**
     * Set the value of [gldthru6] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru6 !== $v) {
            $this->gldthru6 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU6] = true;
        }

        return $this;
    } // setGldthru6()

    /**
     * Set the value of [gldfrom7] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom7 !== $v) {
            $this->gldfrom7 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM7] = true;
        }

        return $this;
    } // setGldfrom7()

    /**
     * Set the value of [gldthru7] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru7 !== $v) {
            $this->gldthru7 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU7] = true;
        }

        return $this;
    } // setGldthru7()

    /**
     * Set the value of [gldfrom8] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom8 !== $v) {
            $this->gldfrom8 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM8] = true;
        }

        return $this;
    } // setGldfrom8()

    /**
     * Set the value of [gldthru8] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru8 !== $v) {
            $this->gldthru8 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU8] = true;
        }

        return $this;
    } // setGldthru8()

    /**
     * Set the value of [gldfrom9] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom9 !== $v) {
            $this->gldfrom9 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM9] = true;
        }

        return $this;
    } // setGldfrom9()

    /**
     * Set the value of [gldthru9] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru9 !== $v) {
            $this->gldthru9 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU9] = true;
        }

        return $this;
    } // setGldthru9()

    /**
     * Set the value of [gldfrom10] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom10 !== $v) {
            $this->gldfrom10 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM10] = true;
        }

        return $this;
    } // setGldfrom10()

    /**
     * Set the value of [gldthru10] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru10 !== $v) {
            $this->gldthru10 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU10] = true;
        }

        return $this;
    } // setGldthru10()

    /**
     * Set the value of [gldfrom11] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom11 !== $v) {
            $this->gldfrom11 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM11] = true;
        }

        return $this;
    } // setGldfrom11()

    /**
     * Set the value of [gldthru11] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru11 !== $v) {
            $this->gldthru11 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU11] = true;
        }

        return $this;
    } // setGldthru11()

    /**
     * Set the value of [gldfrom12] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom12 !== $v) {
            $this->gldfrom12 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM12] = true;
        }

        return $this;
    } // setGldfrom12()

    /**
     * Set the value of [gldthru12] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru12 !== $v) {
            $this->gldthru12 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU12] = true;
        }

        return $this;
    } // setGldthru12()

    /**
     * Set the value of [gldfrom13] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom13 !== $v) {
            $this->gldfrom13 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM13] = true;
        }

        return $this;
    } // setGldfrom13()

    /**
     * Set the value of [gldthru13] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru13 !== $v) {
            $this->gldthru13 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU13] = true;
        }

        return $this;
    } // setGldthru13()

    /**
     * Set the value of [gldfrom14] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom14 !== $v) {
            $this->gldfrom14 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM14] = true;
        }

        return $this;
    } // setGldfrom14()

    /**
     * Set the value of [gldthru14] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru14 !== $v) {
            $this->gldthru14 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU14] = true;
        }

        return $this;
    } // setGldthru14()

    /**
     * Set the value of [gldfrom15] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom15 !== $v) {
            $this->gldfrom15 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM15] = true;
        }

        return $this;
    } // setGldfrom15()

    /**
     * Set the value of [gldthru15] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru15 !== $v) {
            $this->gldthru15 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU15] = true;
        }

        return $this;
    } // setGldthru15()

    /**
     * Set the value of [gldfrom16] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom16 !== $v) {
            $this->gldfrom16 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM16] = true;
        }

        return $this;
    } // setGldfrom16()

    /**
     * Set the value of [gldthru16] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru16 !== $v) {
            $this->gldthru16 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU16] = true;
        }

        return $this;
    } // setGldthru16()

    /**
     * Set the value of [gldfrom17] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom17 !== $v) {
            $this->gldfrom17 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM17] = true;
        }

        return $this;
    } // setGldfrom17()

    /**
     * Set the value of [gldthru17] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru17 !== $v) {
            $this->gldthru17 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU17] = true;
        }

        return $this;
    } // setGldthru17()

    /**
     * Set the value of [gldfrom18] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom18 !== $v) {
            $this->gldfrom18 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM18] = true;
        }

        return $this;
    } // setGldfrom18()

    /**
     * Set the value of [gldthru18] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru18 !== $v) {
            $this->gldthru18 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU18] = true;
        }

        return $this;
    } // setGldthru18()

    /**
     * Set the value of [gldfrom19] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldfrom19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldfrom19 !== $v) {
            $this->gldfrom19 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDFROM19] = true;
        }

        return $this;
    } // setGldfrom19()

    /**
     * Set the value of [gldthru19] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setGldthru19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gldthru19 !== $v) {
            $this->gldthru19 = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_GLDTHRU19] = true;
        }

        return $this;
    } // setGldthru19()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\GlDates The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[GlDatesTableMap::COL_DUMMY] = true;
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
            if ($this->gldkey !== '') {
                return false;
            }

            if ($this->gldfrom1 !== '') {
                return false;
            }

            if ($this->gldthru1 !== '') {
                return false;
            }

            if ($this->gldfrom2 !== '') {
                return false;
            }

            if ($this->gldthru2 !== '') {
                return false;
            }

            if ($this->gldfrom3 !== '') {
                return false;
            }

            if ($this->gldthru3 !== '') {
                return false;
            }

            if ($this->gldfrom4 !== '') {
                return false;
            }

            if ($this->gldthru4 !== '') {
                return false;
            }

            if ($this->gldfrom5 !== '') {
                return false;
            }

            if ($this->gldthru5 !== '') {
                return false;
            }

            if ($this->gldfrom6 !== '') {
                return false;
            }

            if ($this->gldthru6 !== '') {
                return false;
            }

            if ($this->gldfrom7 !== '') {
                return false;
            }

            if ($this->gldthru7 !== '') {
                return false;
            }

            if ($this->gldfrom8 !== '') {
                return false;
            }

            if ($this->gldthru8 !== '') {
                return false;
            }

            if ($this->gldfrom9 !== '') {
                return false;
            }

            if ($this->gldthru9 !== '') {
                return false;
            }

            if ($this->gldfrom10 !== '') {
                return false;
            }

            if ($this->gldthru10 !== '') {
                return false;
            }

            if ($this->gldfrom11 !== '') {
                return false;
            }

            if ($this->gldthru11 !== '') {
                return false;
            }

            if ($this->gldfrom12 !== '') {
                return false;
            }

            if ($this->gldthru12 !== '') {
                return false;
            }

            if ($this->gldfrom13 !== '') {
                return false;
            }

            if ($this->gldthru13 !== '') {
                return false;
            }

            if ($this->gldfrom14 !== '') {
                return false;
            }

            if ($this->gldthru14 !== '') {
                return false;
            }

            if ($this->gldfrom15 !== '') {
                return false;
            }

            if ($this->gldthru15 !== '') {
                return false;
            }

            if ($this->gldfrom16 !== '') {
                return false;
            }

            if ($this->gldthru16 !== '') {
                return false;
            }

            if ($this->gldfrom17 !== '') {
                return false;
            }

            if ($this->gldthru17 !== '') {
                return false;
            }

            if ($this->gldfrom18 !== '') {
                return false;
            }

            if ($this->gldthru18 !== '') {
                return false;
            }

            if ($this->gldfrom19 !== '') {
                return false;
            }

            if ($this->gldthru19 !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : GlDatesTableMap::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldkey = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : GlDatesTableMap::translateFieldName('Gldthru1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : GlDatesTableMap::translateFieldName('Gldthru2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : GlDatesTableMap::translateFieldName('Gldthru3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : GlDatesTableMap::translateFieldName('Gldthru4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : GlDatesTableMap::translateFieldName('Gldthru5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : GlDatesTableMap::translateFieldName('Gldthru6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : GlDatesTableMap::translateFieldName('Gldthru7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : GlDatesTableMap::translateFieldName('Gldthru8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : GlDatesTableMap::translateFieldName('Gldthru9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : GlDatesTableMap::translateFieldName('Gldthru10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : GlDatesTableMap::translateFieldName('Gldthru11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : GlDatesTableMap::translateFieldName('Gldthru12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : GlDatesTableMap::translateFieldName('Gldthru13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : GlDatesTableMap::translateFieldName('Gldthru14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : GlDatesTableMap::translateFieldName('Gldthru15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : GlDatesTableMap::translateFieldName('Gldthru16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : GlDatesTableMap::translateFieldName('Gldthru17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : GlDatesTableMap::translateFieldName('Gldthru18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : GlDatesTableMap::translateFieldName('Gldfrom19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldfrom19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : GlDatesTableMap::translateFieldName('Gldthru19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->gldthru19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : GlDatesTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : GlDatesTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : GlDatesTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 42; // 42 = GlDatesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\GlDates'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(GlDatesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildGlDatesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see GlDates::setDeleted()
     * @see GlDates::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlDatesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildGlDatesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(GlDatesTableMap::DATABASE_NAME);
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
                GlDatesTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDKEY)) {
            $modifiedColumns[':p' . $index++]  = 'GldKey';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM1)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom1';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU1)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru1';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM2)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom2';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU2)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru2';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM3)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom3';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU3)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru3';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM4)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom4';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU4)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru4';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM5)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom5';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU5)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru5';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM6)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom6';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU6)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru6';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM7)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom7';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU7)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru7';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM8)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom8';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU8)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru8';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM9)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom9';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU9)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru9';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM10)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom10';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU10)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru10';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM11)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom11';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU11)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru11';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM12)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom12';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU12)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru12';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM13)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom13';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU13)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru13';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM14)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom14';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU14)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru14';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM15)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom15';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU15)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru15';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM16)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom16';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU16)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru16';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM17)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom17';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU17)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru17';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM18)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom18';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU18)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru18';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM19)) {
            $modifiedColumns[':p' . $index++]  = 'GldFrom19';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU19)) {
            $modifiedColumns[':p' . $index++]  = 'GldThru19';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO gl_dates (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'GldKey':
                        $stmt->bindValue($identifier, $this->gldkey, PDO::PARAM_STR);
                        break;
                    case 'GldFrom1':
                        $stmt->bindValue($identifier, $this->gldfrom1, PDO::PARAM_STR);
                        break;
                    case 'GldThru1':
                        $stmt->bindValue($identifier, $this->gldthru1, PDO::PARAM_STR);
                        break;
                    case 'GldFrom2':
                        $stmt->bindValue($identifier, $this->gldfrom2, PDO::PARAM_STR);
                        break;
                    case 'GldThru2':
                        $stmt->bindValue($identifier, $this->gldthru2, PDO::PARAM_STR);
                        break;
                    case 'GldFrom3':
                        $stmt->bindValue($identifier, $this->gldfrom3, PDO::PARAM_STR);
                        break;
                    case 'GldThru3':
                        $stmt->bindValue($identifier, $this->gldthru3, PDO::PARAM_STR);
                        break;
                    case 'GldFrom4':
                        $stmt->bindValue($identifier, $this->gldfrom4, PDO::PARAM_STR);
                        break;
                    case 'GldThru4':
                        $stmt->bindValue($identifier, $this->gldthru4, PDO::PARAM_STR);
                        break;
                    case 'GldFrom5':
                        $stmt->bindValue($identifier, $this->gldfrom5, PDO::PARAM_STR);
                        break;
                    case 'GldThru5':
                        $stmt->bindValue($identifier, $this->gldthru5, PDO::PARAM_STR);
                        break;
                    case 'GldFrom6':
                        $stmt->bindValue($identifier, $this->gldfrom6, PDO::PARAM_STR);
                        break;
                    case 'GldThru6':
                        $stmt->bindValue($identifier, $this->gldthru6, PDO::PARAM_STR);
                        break;
                    case 'GldFrom7':
                        $stmt->bindValue($identifier, $this->gldfrom7, PDO::PARAM_STR);
                        break;
                    case 'GldThru7':
                        $stmt->bindValue($identifier, $this->gldthru7, PDO::PARAM_STR);
                        break;
                    case 'GldFrom8':
                        $stmt->bindValue($identifier, $this->gldfrom8, PDO::PARAM_STR);
                        break;
                    case 'GldThru8':
                        $stmt->bindValue($identifier, $this->gldthru8, PDO::PARAM_STR);
                        break;
                    case 'GldFrom9':
                        $stmt->bindValue($identifier, $this->gldfrom9, PDO::PARAM_STR);
                        break;
                    case 'GldThru9':
                        $stmt->bindValue($identifier, $this->gldthru9, PDO::PARAM_STR);
                        break;
                    case 'GldFrom10':
                        $stmt->bindValue($identifier, $this->gldfrom10, PDO::PARAM_STR);
                        break;
                    case 'GldThru10':
                        $stmt->bindValue($identifier, $this->gldthru10, PDO::PARAM_STR);
                        break;
                    case 'GldFrom11':
                        $stmt->bindValue($identifier, $this->gldfrom11, PDO::PARAM_STR);
                        break;
                    case 'GldThru11':
                        $stmt->bindValue($identifier, $this->gldthru11, PDO::PARAM_STR);
                        break;
                    case 'GldFrom12':
                        $stmt->bindValue($identifier, $this->gldfrom12, PDO::PARAM_STR);
                        break;
                    case 'GldThru12':
                        $stmt->bindValue($identifier, $this->gldthru12, PDO::PARAM_STR);
                        break;
                    case 'GldFrom13':
                        $stmt->bindValue($identifier, $this->gldfrom13, PDO::PARAM_STR);
                        break;
                    case 'GldThru13':
                        $stmt->bindValue($identifier, $this->gldthru13, PDO::PARAM_STR);
                        break;
                    case 'GldFrom14':
                        $stmt->bindValue($identifier, $this->gldfrom14, PDO::PARAM_STR);
                        break;
                    case 'GldThru14':
                        $stmt->bindValue($identifier, $this->gldthru14, PDO::PARAM_STR);
                        break;
                    case 'GldFrom15':
                        $stmt->bindValue($identifier, $this->gldfrom15, PDO::PARAM_STR);
                        break;
                    case 'GldThru15':
                        $stmt->bindValue($identifier, $this->gldthru15, PDO::PARAM_STR);
                        break;
                    case 'GldFrom16':
                        $stmt->bindValue($identifier, $this->gldfrom16, PDO::PARAM_STR);
                        break;
                    case 'GldThru16':
                        $stmt->bindValue($identifier, $this->gldthru16, PDO::PARAM_STR);
                        break;
                    case 'GldFrom17':
                        $stmt->bindValue($identifier, $this->gldfrom17, PDO::PARAM_STR);
                        break;
                    case 'GldThru17':
                        $stmt->bindValue($identifier, $this->gldthru17, PDO::PARAM_STR);
                        break;
                    case 'GldFrom18':
                        $stmt->bindValue($identifier, $this->gldfrom18, PDO::PARAM_STR);
                        break;
                    case 'GldThru18':
                        $stmt->bindValue($identifier, $this->gldthru18, PDO::PARAM_STR);
                        break;
                    case 'GldFrom19':
                        $stmt->bindValue($identifier, $this->gldfrom19, PDO::PARAM_STR);
                        break;
                    case 'GldThru19':
                        $stmt->bindValue($identifier, $this->gldthru19, PDO::PARAM_STR);
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
        $pos = GlDatesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getGldkey();
                break;
            case 1:
                return $this->getGldfrom1();
                break;
            case 2:
                return $this->getGldthru1();
                break;
            case 3:
                return $this->getGldfrom2();
                break;
            case 4:
                return $this->getGldthru2();
                break;
            case 5:
                return $this->getGldfrom3();
                break;
            case 6:
                return $this->getGldthru3();
                break;
            case 7:
                return $this->getGldfrom4();
                break;
            case 8:
                return $this->getGldthru4();
                break;
            case 9:
                return $this->getGldfrom5();
                break;
            case 10:
                return $this->getGldthru5();
                break;
            case 11:
                return $this->getGldfrom6();
                break;
            case 12:
                return $this->getGldthru6();
                break;
            case 13:
                return $this->getGldfrom7();
                break;
            case 14:
                return $this->getGldthru7();
                break;
            case 15:
                return $this->getGldfrom8();
                break;
            case 16:
                return $this->getGldthru8();
                break;
            case 17:
                return $this->getGldfrom9();
                break;
            case 18:
                return $this->getGldthru9();
                break;
            case 19:
                return $this->getGldfrom10();
                break;
            case 20:
                return $this->getGldthru10();
                break;
            case 21:
                return $this->getGldfrom11();
                break;
            case 22:
                return $this->getGldthru11();
                break;
            case 23:
                return $this->getGldfrom12();
                break;
            case 24:
                return $this->getGldthru12();
                break;
            case 25:
                return $this->getGldfrom13();
                break;
            case 26:
                return $this->getGldthru13();
                break;
            case 27:
                return $this->getGldfrom14();
                break;
            case 28:
                return $this->getGldthru14();
                break;
            case 29:
                return $this->getGldfrom15();
                break;
            case 30:
                return $this->getGldthru15();
                break;
            case 31:
                return $this->getGldfrom16();
                break;
            case 32:
                return $this->getGldthru16();
                break;
            case 33:
                return $this->getGldfrom17();
                break;
            case 34:
                return $this->getGldthru17();
                break;
            case 35:
                return $this->getGldfrom18();
                break;
            case 36:
                return $this->getGldthru18();
                break;
            case 37:
                return $this->getGldfrom19();
                break;
            case 38:
                return $this->getGldthru19();
                break;
            case 39:
                return $this->getDateupdtd();
                break;
            case 40:
                return $this->getTimeupdtd();
                break;
            case 41:
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

        if (isset($alreadyDumpedObjects['GlDates'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GlDates'][$this->hashCode()] = true;
        $keys = GlDatesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getGldkey(),
            $keys[1] => $this->getGldfrom1(),
            $keys[2] => $this->getGldthru1(),
            $keys[3] => $this->getGldfrom2(),
            $keys[4] => $this->getGldthru2(),
            $keys[5] => $this->getGldfrom3(),
            $keys[6] => $this->getGldthru3(),
            $keys[7] => $this->getGldfrom4(),
            $keys[8] => $this->getGldthru4(),
            $keys[9] => $this->getGldfrom5(),
            $keys[10] => $this->getGldthru5(),
            $keys[11] => $this->getGldfrom6(),
            $keys[12] => $this->getGldthru6(),
            $keys[13] => $this->getGldfrom7(),
            $keys[14] => $this->getGldthru7(),
            $keys[15] => $this->getGldfrom8(),
            $keys[16] => $this->getGldthru8(),
            $keys[17] => $this->getGldfrom9(),
            $keys[18] => $this->getGldthru9(),
            $keys[19] => $this->getGldfrom10(),
            $keys[20] => $this->getGldthru10(),
            $keys[21] => $this->getGldfrom11(),
            $keys[22] => $this->getGldthru11(),
            $keys[23] => $this->getGldfrom12(),
            $keys[24] => $this->getGldthru12(),
            $keys[25] => $this->getGldfrom13(),
            $keys[26] => $this->getGldthru13(),
            $keys[27] => $this->getGldfrom14(),
            $keys[28] => $this->getGldthru14(),
            $keys[29] => $this->getGldfrom15(),
            $keys[30] => $this->getGldthru15(),
            $keys[31] => $this->getGldfrom16(),
            $keys[32] => $this->getGldthru16(),
            $keys[33] => $this->getGldfrom17(),
            $keys[34] => $this->getGldthru17(),
            $keys[35] => $this->getGldfrom18(),
            $keys[36] => $this->getGldthru18(),
            $keys[37] => $this->getGldfrom19(),
            $keys[38] => $this->getGldthru19(),
            $keys[39] => $this->getDateupdtd(),
            $keys[40] => $this->getTimeupdtd(),
            $keys[41] => $this->getDummy(),
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
     * @return $this|\GlDates
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = GlDatesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\GlDates
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setGldkey($value);
                break;
            case 1:
                $this->setGldfrom1($value);
                break;
            case 2:
                $this->setGldthru1($value);
                break;
            case 3:
                $this->setGldfrom2($value);
                break;
            case 4:
                $this->setGldthru2($value);
                break;
            case 5:
                $this->setGldfrom3($value);
                break;
            case 6:
                $this->setGldthru3($value);
                break;
            case 7:
                $this->setGldfrom4($value);
                break;
            case 8:
                $this->setGldthru4($value);
                break;
            case 9:
                $this->setGldfrom5($value);
                break;
            case 10:
                $this->setGldthru5($value);
                break;
            case 11:
                $this->setGldfrom6($value);
                break;
            case 12:
                $this->setGldthru6($value);
                break;
            case 13:
                $this->setGldfrom7($value);
                break;
            case 14:
                $this->setGldthru7($value);
                break;
            case 15:
                $this->setGldfrom8($value);
                break;
            case 16:
                $this->setGldthru8($value);
                break;
            case 17:
                $this->setGldfrom9($value);
                break;
            case 18:
                $this->setGldthru9($value);
                break;
            case 19:
                $this->setGldfrom10($value);
                break;
            case 20:
                $this->setGldthru10($value);
                break;
            case 21:
                $this->setGldfrom11($value);
                break;
            case 22:
                $this->setGldthru11($value);
                break;
            case 23:
                $this->setGldfrom12($value);
                break;
            case 24:
                $this->setGldthru12($value);
                break;
            case 25:
                $this->setGldfrom13($value);
                break;
            case 26:
                $this->setGldthru13($value);
                break;
            case 27:
                $this->setGldfrom14($value);
                break;
            case 28:
                $this->setGldthru14($value);
                break;
            case 29:
                $this->setGldfrom15($value);
                break;
            case 30:
                $this->setGldthru15($value);
                break;
            case 31:
                $this->setGldfrom16($value);
                break;
            case 32:
                $this->setGldthru16($value);
                break;
            case 33:
                $this->setGldfrom17($value);
                break;
            case 34:
                $this->setGldthru17($value);
                break;
            case 35:
                $this->setGldfrom18($value);
                break;
            case 36:
                $this->setGldthru18($value);
                break;
            case 37:
                $this->setGldfrom19($value);
                break;
            case 38:
                $this->setGldthru19($value);
                break;
            case 39:
                $this->setDateupdtd($value);
                break;
            case 40:
                $this->setTimeupdtd($value);
                break;
            case 41:
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
        $keys = GlDatesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setGldkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setGldfrom1($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setGldthru1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setGldfrom2($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setGldthru2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setGldfrom3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setGldthru3($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setGldfrom4($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setGldthru4($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setGldfrom5($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setGldthru5($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setGldfrom6($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setGldthru6($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setGldfrom7($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setGldthru7($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setGldfrom8($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setGldthru8($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setGldfrom9($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setGldthru9($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setGldfrom10($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setGldthru10($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setGldfrom11($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setGldthru11($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setGldfrom12($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setGldthru12($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setGldfrom13($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setGldthru13($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setGldfrom14($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setGldthru14($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setGldfrom15($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setGldthru15($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setGldfrom16($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setGldthru16($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setGldfrom17($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setGldthru17($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setGldfrom18($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setGldthru18($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setGldfrom19($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setGldthru19($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setDateupdtd($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setTimeupdtd($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setDummy($arr[$keys[41]]);
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
     * @return $this|\GlDates The current object, for fluid interface
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
        $criteria = new Criteria(GlDatesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(GlDatesTableMap::COL_GLDKEY)) {
            $criteria->add(GlDatesTableMap::COL_GLDKEY, $this->gldkey);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM1)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM1, $this->gldfrom1);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU1)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU1, $this->gldthru1);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM2)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM2, $this->gldfrom2);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU2)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU2, $this->gldthru2);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM3)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM3, $this->gldfrom3);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU3)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU3, $this->gldthru3);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM4)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM4, $this->gldfrom4);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU4)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU4, $this->gldthru4);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM5)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM5, $this->gldfrom5);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU5)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU5, $this->gldthru5);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM6)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM6, $this->gldfrom6);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU6)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU6, $this->gldthru6);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM7)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM7, $this->gldfrom7);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU7)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU7, $this->gldthru7);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM8)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM8, $this->gldfrom8);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU8)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU8, $this->gldthru8);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM9)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM9, $this->gldfrom9);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU9)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU9, $this->gldthru9);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM10)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM10, $this->gldfrom10);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU10)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU10, $this->gldthru10);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM11)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM11, $this->gldfrom11);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU11)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU11, $this->gldthru11);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM12)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM12, $this->gldfrom12);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU12)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU12, $this->gldthru12);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM13)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM13, $this->gldfrom13);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU13)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU13, $this->gldthru13);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM14)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM14, $this->gldfrom14);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU14)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU14, $this->gldthru14);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM15)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM15, $this->gldfrom15);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU15)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU15, $this->gldthru15);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM16)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM16, $this->gldfrom16);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU16)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU16, $this->gldthru16);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM17)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM17, $this->gldfrom17);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU17)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU17, $this->gldthru17);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM18)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM18, $this->gldfrom18);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU18)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU18, $this->gldthru18);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDFROM19)) {
            $criteria->add(GlDatesTableMap::COL_GLDFROM19, $this->gldfrom19);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_GLDTHRU19)) {
            $criteria->add(GlDatesTableMap::COL_GLDTHRU19, $this->gldthru19);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_DATEUPDTD)) {
            $criteria->add(GlDatesTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_TIMEUPDTD)) {
            $criteria->add(GlDatesTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(GlDatesTableMap::COL_DUMMY)) {
            $criteria->add(GlDatesTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildGlDatesQuery::create();
        $criteria->add(GlDatesTableMap::COL_GLDKEY, $this->gldkey);

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
        $validPk = null !== $this->getGldkey();

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
        return $this->getGldkey();
    }

    /**
     * Generic method to set the primary key (gldkey column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setGldkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getGldkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \GlDates (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGldkey($this->getGldkey());
        $copyObj->setGldfrom1($this->getGldfrom1());
        $copyObj->setGldthru1($this->getGldthru1());
        $copyObj->setGldfrom2($this->getGldfrom2());
        $copyObj->setGldthru2($this->getGldthru2());
        $copyObj->setGldfrom3($this->getGldfrom3());
        $copyObj->setGldthru3($this->getGldthru3());
        $copyObj->setGldfrom4($this->getGldfrom4());
        $copyObj->setGldthru4($this->getGldthru4());
        $copyObj->setGldfrom5($this->getGldfrom5());
        $copyObj->setGldthru5($this->getGldthru5());
        $copyObj->setGldfrom6($this->getGldfrom6());
        $copyObj->setGldthru6($this->getGldthru6());
        $copyObj->setGldfrom7($this->getGldfrom7());
        $copyObj->setGldthru7($this->getGldthru7());
        $copyObj->setGldfrom8($this->getGldfrom8());
        $copyObj->setGldthru8($this->getGldthru8());
        $copyObj->setGldfrom9($this->getGldfrom9());
        $copyObj->setGldthru9($this->getGldthru9());
        $copyObj->setGldfrom10($this->getGldfrom10());
        $copyObj->setGldthru10($this->getGldthru10());
        $copyObj->setGldfrom11($this->getGldfrom11());
        $copyObj->setGldthru11($this->getGldthru11());
        $copyObj->setGldfrom12($this->getGldfrom12());
        $copyObj->setGldthru12($this->getGldthru12());
        $copyObj->setGldfrom13($this->getGldfrom13());
        $copyObj->setGldthru13($this->getGldthru13());
        $copyObj->setGldfrom14($this->getGldfrom14());
        $copyObj->setGldthru14($this->getGldthru14());
        $copyObj->setGldfrom15($this->getGldfrom15());
        $copyObj->setGldthru15($this->getGldthru15());
        $copyObj->setGldfrom16($this->getGldfrom16());
        $copyObj->setGldthru16($this->getGldthru16());
        $copyObj->setGldfrom17($this->getGldfrom17());
        $copyObj->setGldthru17($this->getGldthru17());
        $copyObj->setGldfrom18($this->getGldfrom18());
        $copyObj->setGldthru18($this->getGldthru18());
        $copyObj->setGldfrom19($this->getGldfrom19());
        $copyObj->setGldthru19($this->getGldthru19());
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
     * @return \GlDates Clone of current object.
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
        $this->gldkey = null;
        $this->gldfrom1 = null;
        $this->gldthru1 = null;
        $this->gldfrom2 = null;
        $this->gldthru2 = null;
        $this->gldfrom3 = null;
        $this->gldthru3 = null;
        $this->gldfrom4 = null;
        $this->gldthru4 = null;
        $this->gldfrom5 = null;
        $this->gldthru5 = null;
        $this->gldfrom6 = null;
        $this->gldthru6 = null;
        $this->gldfrom7 = null;
        $this->gldthru7 = null;
        $this->gldfrom8 = null;
        $this->gldthru8 = null;
        $this->gldfrom9 = null;
        $this->gldthru9 = null;
        $this->gldfrom10 = null;
        $this->gldthru10 = null;
        $this->gldfrom11 = null;
        $this->gldthru11 = null;
        $this->gldfrom12 = null;
        $this->gldthru12 = null;
        $this->gldfrom13 = null;
        $this->gldthru13 = null;
        $this->gldfrom14 = null;
        $this->gldthru14 = null;
        $this->gldfrom15 = null;
        $this->gldthru15 = null;
        $this->gldfrom16 = null;
        $this->gldthru16 = null;
        $this->gldfrom17 = null;
        $this->gldthru17 = null;
        $this->gldfrom18 = null;
        $this->gldthru18 = null;
        $this->gldfrom19 = null;
        $this->gldthru19 = null;
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
        return (string) $this->exportTo(GlDatesTableMap::DEFAULT_STRING_FORMAT);
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
