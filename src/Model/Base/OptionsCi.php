<?php

namespace Base;

use \OptionsCiQuery as ChildOptionsCiQuery;
use \Exception;
use \PDO;
use Map\OptionsCiTableMap;
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
 * Base class that represents a row from the 'ci_options' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class OptionsCi implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\OptionsCiTableMap';


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
     * The value for the citboptncode field.
     *
     * @var        string
     */
    protected $citboptncode;

    /**
     * The value for the citboptnnoteavail field.
     *
     * @var        string
     */
    protected $citboptnnoteavail;

    /**
     * The value for the citboptngenavail field.
     *
     * @var        string
     */
    protected $citboptngenavail;

    /**
     * The value for the citboptnpayavail field.
     *
     * @var        string
     */
    protected $citboptnpayavail;

    /**
     * The value for the citboptncoreavail field.
     *
     * @var        string
     */
    protected $citboptncoreavail;

    /**
     * The value for the citboptncredavail field.
     *
     * @var        string
     */
    protected $citboptncredavail;

    /**
     * The value for the citboptncstkavail field.
     *
     * @var        string
     */
    protected $citboptncstkavail;

    /**
     * The value for the citboptnpricavail field.
     *
     * @var        string
     */
    protected $citboptnpricavail;

    /**
     * The value for the citboptnstndavail field.
     *
     * @var        string
     */
    protected $citboptnstndavail;

    /**
     * The value for the citboptnsoavail field.
     *
     * @var        string
     */
    protected $citboptnsoavail;

    /**
     * The value for the citboptnquotavail field.
     *
     * @var        string
     */
    protected $citboptnquotavail;

    /**
     * The value for the citboptnopenavail field.
     *
     * @var        string
     */
    protected $citboptnopenavail;

    /**
     * The value for the citboptnpoavail field.
     *
     * @var        string
     */
    protected $citboptnpoavail;

    /**
     * The value for the citboptnpodaysback field.
     *
     * @var        int
     */
    protected $citboptnpodaysback;

    /**
     * The value for the citboptnpostrtdate field.
     *
     * @var        string
     */
    protected $citboptnpostrtdate;

    /**
     * The value for the citboptnshavail field.
     *
     * @var        string
     */
    protected $citboptnshavail;

    /**
     * The value for the citboptnshdaysback field.
     *
     * @var        int
     */
    protected $citboptnshdaysback;

    /**
     * The value for the citboptnshstrtdate field.
     *
     * @var        string
     */
    protected $citboptnshstrtdate;

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
     * Initializes internal state of Base\OptionsCi object.
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
     * Compares this with another <code>OptionsCi</code> instance.  If
     * <code>obj</code> is an instance of <code>OptionsCi</code>, delegates to
     * <code>equals(OptionsCi)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|OptionsCi The current object, for fluid interface
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
     * Get the [citboptncode] column value.
     *
     * @return string
     */
    public function getCitboptncode()
    {
        return $this->citboptncode;
    }

    /**
     * Get the [citboptnnoteavail] column value.
     *
     * @return string
     */
    public function getCitboptnnoteavail()
    {
        return $this->citboptnnoteavail;
    }

    /**
     * Get the [citboptngenavail] column value.
     *
     * @return string
     */
    public function getCitboptngenavail()
    {
        return $this->citboptngenavail;
    }

    /**
     * Get the [citboptnpayavail] column value.
     *
     * @return string
     */
    public function getCitboptnpayavail()
    {
        return $this->citboptnpayavail;
    }

    /**
     * Get the [citboptncoreavail] column value.
     *
     * @return string
     */
    public function getCitboptncoreavail()
    {
        return $this->citboptncoreavail;
    }

    /**
     * Get the [citboptncredavail] column value.
     *
     * @return string
     */
    public function getCitboptncredavail()
    {
        return $this->citboptncredavail;
    }

    /**
     * Get the [citboptncstkavail] column value.
     *
     * @return string
     */
    public function getCitboptncstkavail()
    {
        return $this->citboptncstkavail;
    }

    /**
     * Get the [citboptnpricavail] column value.
     *
     * @return string
     */
    public function getCitboptnpricavail()
    {
        return $this->citboptnpricavail;
    }

    /**
     * Get the [citboptnstndavail] column value.
     *
     * @return string
     */
    public function getCitboptnstndavail()
    {
        return $this->citboptnstndavail;
    }

    /**
     * Get the [citboptnsoavail] column value.
     *
     * @return string
     */
    public function getCitboptnsoavail()
    {
        return $this->citboptnsoavail;
    }

    /**
     * Get the [citboptnquotavail] column value.
     *
     * @return string
     */
    public function getCitboptnquotavail()
    {
        return $this->citboptnquotavail;
    }

    /**
     * Get the [citboptnopenavail] column value.
     *
     * @return string
     */
    public function getCitboptnopenavail()
    {
        return $this->citboptnopenavail;
    }

    /**
     * Get the [citboptnpoavail] column value.
     *
     * @return string
     */
    public function getCitboptnpoavail()
    {
        return $this->citboptnpoavail;
    }

    /**
     * Get the [citboptnpodaysback] column value.
     *
     * @return int
     */
    public function getCitboptnpodaysback()
    {
        return $this->citboptnpodaysback;
    }

    /**
     * Get the [citboptnpostrtdate] column value.
     *
     * @return string
     */
    public function getCitboptnpostrtdate()
    {
        return $this->citboptnpostrtdate;
    }

    /**
     * Get the [citboptnshavail] column value.
     *
     * @return string
     */
    public function getCitboptnshavail()
    {
        return $this->citboptnshavail;
    }

    /**
     * Get the [citboptnshdaysback] column value.
     *
     * @return int
     */
    public function getCitboptnshdaysback()
    {
        return $this->citboptnshdaysback;
    }

    /**
     * Get the [citboptnshstrtdate] column value.
     *
     * @return string
     */
    public function getCitboptnshstrtdate()
    {
        return $this->citboptnshstrtdate;
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
     * Set the value of [citboptncode] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptncode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptncode !== $v) {
            $this->citboptncode = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNCODE] = true;
        }

        return $this;
    } // setCitboptncode()

    /**
     * Set the value of [citboptnnoteavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnnoteavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnnoteavail !== $v) {
            $this->citboptnnoteavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL] = true;
        }

        return $this;
    } // setCitboptnnoteavail()

    /**
     * Set the value of [citboptngenavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptngenavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptngenavail !== $v) {
            $this->citboptngenavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNGENAVAIL] = true;
        }

        return $this;
    } // setCitboptngenavail()

    /**
     * Set the value of [citboptnpayavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnpayavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnpayavail !== $v) {
            $this->citboptnpayavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNPAYAVAIL] = true;
        }

        return $this;
    } // setCitboptnpayavail()

    /**
     * Set the value of [citboptncoreavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptncoreavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptncoreavail !== $v) {
            $this->citboptncoreavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNCOREAVAIL] = true;
        }

        return $this;
    } // setCitboptncoreavail()

    /**
     * Set the value of [citboptncredavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptncredavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptncredavail !== $v) {
            $this->citboptncredavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNCREDAVAIL] = true;
        }

        return $this;
    } // setCitboptncredavail()

    /**
     * Set the value of [citboptncstkavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptncstkavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptncstkavail !== $v) {
            $this->citboptncstkavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL] = true;
        }

        return $this;
    } // setCitboptncstkavail()

    /**
     * Set the value of [citboptnpricavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnpricavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnpricavail !== $v) {
            $this->citboptnpricavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNPRICAVAIL] = true;
        }

        return $this;
    } // setCitboptnpricavail()

    /**
     * Set the value of [citboptnstndavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnstndavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnstndavail !== $v) {
            $this->citboptnstndavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL] = true;
        }

        return $this;
    } // setCitboptnstndavail()

    /**
     * Set the value of [citboptnsoavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnsoavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnsoavail !== $v) {
            $this->citboptnsoavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNSOAVAIL] = true;
        }

        return $this;
    } // setCitboptnsoavail()

    /**
     * Set the value of [citboptnquotavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnquotavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnquotavail !== $v) {
            $this->citboptnquotavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL] = true;
        }

        return $this;
    } // setCitboptnquotavail()

    /**
     * Set the value of [citboptnopenavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnopenavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnopenavail !== $v) {
            $this->citboptnopenavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNOPENAVAIL] = true;
        }

        return $this;
    } // setCitboptnopenavail()

    /**
     * Set the value of [citboptnpoavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnpoavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnpoavail !== $v) {
            $this->citboptnpoavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNPOAVAIL] = true;
        }

        return $this;
    } // setCitboptnpoavail()

    /**
     * Set the value of [citboptnpodaysback] column.
     *
     * @param int $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnpodaysback($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->citboptnpodaysback !== $v) {
            $this->citboptnpodaysback = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNPODAYSBACK] = true;
        }

        return $this;
    } // setCitboptnpodaysback()

    /**
     * Set the value of [citboptnpostrtdate] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnpostrtdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnpostrtdate !== $v) {
            $this->citboptnpostrtdate = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE] = true;
        }

        return $this;
    } // setCitboptnpostrtdate()

    /**
     * Set the value of [citboptnshavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnshavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnshavail !== $v) {
            $this->citboptnshavail = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNSHAVAIL] = true;
        }

        return $this;
    } // setCitboptnshavail()

    /**
     * Set the value of [citboptnshdaysback] column.
     *
     * @param int $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnshdaysback($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->citboptnshdaysback !== $v) {
            $this->citboptnshdaysback = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK] = true;
        }

        return $this;
    } // setCitboptnshdaysback()

    /**
     * Set the value of [citboptnshstrtdate] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setCitboptnshstrtdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citboptnshstrtdate !== $v) {
            $this->citboptnshstrtdate = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE] = true;
        }

        return $this;
    } // setCitboptnshstrtdate()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\OptionsCi The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[OptionsCiTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : OptionsCiTableMap::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptncode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnnoteavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnnoteavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : OptionsCiTableMap::translateFieldName('Citboptngenavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptngenavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnpayavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnpayavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : OptionsCiTableMap::translateFieldName('Citboptncoreavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptncoreavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : OptionsCiTableMap::translateFieldName('Citboptncredavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptncredavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : OptionsCiTableMap::translateFieldName('Citboptncstkavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptncstkavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnpricavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnpricavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnstndavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnstndavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnsoavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnsoavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnquotavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnquotavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnopenavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnopenavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnpoavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnpoavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnpodaysback', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnpodaysback = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnpostrtdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnpostrtdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnshavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnshavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnshdaysback', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnshdaysback = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : OptionsCiTableMap::translateFieldName('Citboptnshstrtdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->citboptnshstrtdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : OptionsCiTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : OptionsCiTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : OptionsCiTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 21; // 21 = OptionsCiTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\OptionsCi'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildOptionsCiQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see OptionsCi::setDeleted()
     * @see OptionsCi::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildOptionsCiQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsCiTableMap::DATABASE_NAME);
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
                OptionsCiTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNCODE)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnCode';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnNoteAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNGENAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnGenAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPAYAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnPayAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNCOREAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnCoreAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNCREDAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnCredAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnCstkAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPRICAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnPricAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnStndAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSOAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnSoAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnQuotAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNOPENAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnOpenAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPOAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnPoAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnPoDaysBack';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnPoStrtDate';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSHAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnShAvail';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnShDaysBack';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'CitbOptnShStrtDate';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ci_options (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'CitbOptnCode':
                        $stmt->bindValue($identifier, $this->citboptncode, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnNoteAvail':
                        $stmt->bindValue($identifier, $this->citboptnnoteavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnGenAvail':
                        $stmt->bindValue($identifier, $this->citboptngenavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnPayAvail':
                        $stmt->bindValue($identifier, $this->citboptnpayavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnCoreAvail':
                        $stmt->bindValue($identifier, $this->citboptncoreavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnCredAvail':
                        $stmt->bindValue($identifier, $this->citboptncredavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnCstkAvail':
                        $stmt->bindValue($identifier, $this->citboptncstkavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnPricAvail':
                        $stmt->bindValue($identifier, $this->citboptnpricavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnStndAvail':
                        $stmt->bindValue($identifier, $this->citboptnstndavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnSoAvail':
                        $stmt->bindValue($identifier, $this->citboptnsoavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnQuotAvail':
                        $stmt->bindValue($identifier, $this->citboptnquotavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnOpenAvail':
                        $stmt->bindValue($identifier, $this->citboptnopenavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnPoAvail':
                        $stmt->bindValue($identifier, $this->citboptnpoavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnPoDaysBack':
                        $stmt->bindValue($identifier, $this->citboptnpodaysback, PDO::PARAM_INT);
                        break;
                    case 'CitbOptnPoStrtDate':
                        $stmt->bindValue($identifier, $this->citboptnpostrtdate, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnShAvail':
                        $stmt->bindValue($identifier, $this->citboptnshavail, PDO::PARAM_STR);
                        break;
                    case 'CitbOptnShDaysBack':
                        $stmt->bindValue($identifier, $this->citboptnshdaysback, PDO::PARAM_INT);
                        break;
                    case 'CitbOptnShStrtDate':
                        $stmt->bindValue($identifier, $this->citboptnshstrtdate, PDO::PARAM_STR);
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
        $pos = OptionsCiTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getCitboptncode();
                break;
            case 1:
                return $this->getCitboptnnoteavail();
                break;
            case 2:
                return $this->getCitboptngenavail();
                break;
            case 3:
                return $this->getCitboptnpayavail();
                break;
            case 4:
                return $this->getCitboptncoreavail();
                break;
            case 5:
                return $this->getCitboptncredavail();
                break;
            case 6:
                return $this->getCitboptncstkavail();
                break;
            case 7:
                return $this->getCitboptnpricavail();
                break;
            case 8:
                return $this->getCitboptnstndavail();
                break;
            case 9:
                return $this->getCitboptnsoavail();
                break;
            case 10:
                return $this->getCitboptnquotavail();
                break;
            case 11:
                return $this->getCitboptnopenavail();
                break;
            case 12:
                return $this->getCitboptnpoavail();
                break;
            case 13:
                return $this->getCitboptnpodaysback();
                break;
            case 14:
                return $this->getCitboptnpostrtdate();
                break;
            case 15:
                return $this->getCitboptnshavail();
                break;
            case 16:
                return $this->getCitboptnshdaysback();
                break;
            case 17:
                return $this->getCitboptnshstrtdate();
                break;
            case 18:
                return $this->getDateupdtd();
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

        if (isset($alreadyDumpedObjects['OptionsCi'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OptionsCi'][$this->hashCode()] = true;
        $keys = OptionsCiTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCitboptncode(),
            $keys[1] => $this->getCitboptnnoteavail(),
            $keys[2] => $this->getCitboptngenavail(),
            $keys[3] => $this->getCitboptnpayavail(),
            $keys[4] => $this->getCitboptncoreavail(),
            $keys[5] => $this->getCitboptncredavail(),
            $keys[6] => $this->getCitboptncstkavail(),
            $keys[7] => $this->getCitboptnpricavail(),
            $keys[8] => $this->getCitboptnstndavail(),
            $keys[9] => $this->getCitboptnsoavail(),
            $keys[10] => $this->getCitboptnquotavail(),
            $keys[11] => $this->getCitboptnopenavail(),
            $keys[12] => $this->getCitboptnpoavail(),
            $keys[13] => $this->getCitboptnpodaysback(),
            $keys[14] => $this->getCitboptnpostrtdate(),
            $keys[15] => $this->getCitboptnshavail(),
            $keys[16] => $this->getCitboptnshdaysback(),
            $keys[17] => $this->getCitboptnshstrtdate(),
            $keys[18] => $this->getDateupdtd(),
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
     * @return $this|\OptionsCi
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = OptionsCiTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\OptionsCi
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCitboptncode($value);
                break;
            case 1:
                $this->setCitboptnnoteavail($value);
                break;
            case 2:
                $this->setCitboptngenavail($value);
                break;
            case 3:
                $this->setCitboptnpayavail($value);
                break;
            case 4:
                $this->setCitboptncoreavail($value);
                break;
            case 5:
                $this->setCitboptncredavail($value);
                break;
            case 6:
                $this->setCitboptncstkavail($value);
                break;
            case 7:
                $this->setCitboptnpricavail($value);
                break;
            case 8:
                $this->setCitboptnstndavail($value);
                break;
            case 9:
                $this->setCitboptnsoavail($value);
                break;
            case 10:
                $this->setCitboptnquotavail($value);
                break;
            case 11:
                $this->setCitboptnopenavail($value);
                break;
            case 12:
                $this->setCitboptnpoavail($value);
                break;
            case 13:
                $this->setCitboptnpodaysback($value);
                break;
            case 14:
                $this->setCitboptnpostrtdate($value);
                break;
            case 15:
                $this->setCitboptnshavail($value);
                break;
            case 16:
                $this->setCitboptnshdaysback($value);
                break;
            case 17:
                $this->setCitboptnshstrtdate($value);
                break;
            case 18:
                $this->setDateupdtd($value);
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
        $keys = OptionsCiTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCitboptncode($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setCitboptnnoteavail($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCitboptngenavail($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCitboptnpayavail($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setCitboptncoreavail($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCitboptncredavail($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCitboptncstkavail($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setCitboptnpricavail($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCitboptnstndavail($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCitboptnsoavail($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setCitboptnquotavail($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setCitboptnopenavail($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setCitboptnpoavail($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setCitboptnpodaysback($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setCitboptnpostrtdate($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCitboptnshavail($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setCitboptnshdaysback($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setCitboptnshstrtdate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setDateupdtd($arr[$keys[18]]);
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
     * @return $this|\OptionsCi The current object, for fluid interface
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
        $criteria = new Criteria(OptionsCiTableMap::DATABASE_NAME);

        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNCODE)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNCODE, $this->citboptncode);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL, $this->citboptnnoteavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNGENAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNGENAVAIL, $this->citboptngenavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPAYAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNPAYAVAIL, $this->citboptnpayavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNCOREAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNCOREAVAIL, $this->citboptncoreavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNCREDAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNCREDAVAIL, $this->citboptncredavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL, $this->citboptncstkavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPRICAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNPRICAVAIL, $this->citboptnpricavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL, $this->citboptnstndavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSOAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNSOAVAIL, $this->citboptnsoavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL, $this->citboptnquotavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNOPENAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNOPENAVAIL, $this->citboptnopenavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPOAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNPOAVAIL, $this->citboptnpoavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK, $this->citboptnpodaysback);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE, $this->citboptnpostrtdate);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSHAVAIL)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNSHAVAIL, $this->citboptnshavail);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK, $this->citboptnshdaysback);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE)) {
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE, $this->citboptnshstrtdate);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_DATEUPDTD)) {
            $criteria->add(OptionsCiTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_TIMEUPDTD)) {
            $criteria->add(OptionsCiTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(OptionsCiTableMap::COL_DUMMY)) {
            $criteria->add(OptionsCiTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildOptionsCiQuery::create();
        $criteria->add(OptionsCiTableMap::COL_CITBOPTNCODE, $this->citboptncode);

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
        $validPk = null !== $this->getCitboptncode();

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
        return $this->getCitboptncode();
    }

    /**
     * Generic method to set the primary key (citboptncode column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCitboptncode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCitboptncode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \OptionsCi (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCitboptncode($this->getCitboptncode());
        $copyObj->setCitboptnnoteavail($this->getCitboptnnoteavail());
        $copyObj->setCitboptngenavail($this->getCitboptngenavail());
        $copyObj->setCitboptnpayavail($this->getCitboptnpayavail());
        $copyObj->setCitboptncoreavail($this->getCitboptncoreavail());
        $copyObj->setCitboptncredavail($this->getCitboptncredavail());
        $copyObj->setCitboptncstkavail($this->getCitboptncstkavail());
        $copyObj->setCitboptnpricavail($this->getCitboptnpricavail());
        $copyObj->setCitboptnstndavail($this->getCitboptnstndavail());
        $copyObj->setCitboptnsoavail($this->getCitboptnsoavail());
        $copyObj->setCitboptnquotavail($this->getCitboptnquotavail());
        $copyObj->setCitboptnopenavail($this->getCitboptnopenavail());
        $copyObj->setCitboptnpoavail($this->getCitboptnpoavail());
        $copyObj->setCitboptnpodaysback($this->getCitboptnpodaysback());
        $copyObj->setCitboptnpostrtdate($this->getCitboptnpostrtdate());
        $copyObj->setCitboptnshavail($this->getCitboptnshavail());
        $copyObj->setCitboptnshdaysback($this->getCitboptnshdaysback());
        $copyObj->setCitboptnshstrtdate($this->getCitboptnshstrtdate());
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
     * @return \OptionsCi Clone of current object.
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
        $this->citboptncode = null;
        $this->citboptnnoteavail = null;
        $this->citboptngenavail = null;
        $this->citboptnpayavail = null;
        $this->citboptncoreavail = null;
        $this->citboptncredavail = null;
        $this->citboptncstkavail = null;
        $this->citboptnpricavail = null;
        $this->citboptnstndavail = null;
        $this->citboptnsoavail = null;
        $this->citboptnquotavail = null;
        $this->citboptnopenavail = null;
        $this->citboptnpoavail = null;
        $this->citboptnpodaysback = null;
        $this->citboptnpostrtdate = null;
        $this->citboptnshavail = null;
        $this->citboptnshdaysback = null;
        $this->citboptnshstrtdate = null;
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
        return (string) $this->exportTo(OptionsCiTableMap::DEFAULT_STRING_FORMAT);
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
