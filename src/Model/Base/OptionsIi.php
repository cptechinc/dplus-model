<?php

namespace Base;

use \OptionsIiQuery as ChildOptionsIiQuery;
use \Exception;
use \PDO;
use Map\OptionsIiTableMap;
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
 * Base class that represents a row from the 'ii_options' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class OptionsIi implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\OptionsIiTableMap';


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
     * The value for the iitboptncode field.
     *
     * @var        string
     */
    protected $iitboptncode;

    /**
     * The value for the iitboptnactavail field.
     *
     * @var        string
     */
    protected $iitboptnactavail;

    /**
     * The value for the iitboptnactwhse field.
     *
     * @var        string
     */
    protected $iitboptnactwhse;

    /**
     * The value for the iitboptnactdet field.
     *
     * @var        string
     */
    protected $iitboptnactdet;

    /**
     * The value for the iitboptnactdaysback field.
     *
     * @var        int
     */
    protected $iitboptnactdaysback;

    /**
     * The value for the iitboptnactstrtdate field.
     *
     * @var        string
     */
    protected $iitboptnactstrtdate;

    /**
     * The value for the iitboptncostavail field.
     *
     * @var        string
     */
    protected $iitboptncostavail;

    /**
     * The value for the iitboptncostwhse field.
     *
     * @var        string
     */
    protected $iitboptncostwhse;

    /**
     * The value for the iitboptncostdet field.
     *
     * @var        string
     */
    protected $iitboptncostdet;

    /**
     * The value for the iitboptngenavail field.
     *
     * @var        string
     */
    protected $iitboptngenavail;

    /**
     * The value for the iitboptnktavail field.
     *
     * @var        string
     */
    protected $iitboptnktavail;

    /**
     * The value for the iitboptnpricavail field.
     *
     * @var        string
     */
    protected $iitboptnpricavail;

    /**
     * The value for the iitboptnphavail field.
     *
     * @var        string
     */
    protected $iitboptnphavail;

    /**
     * The value for the iitboptnphwhse field.
     *
     * @var        string
     */
    protected $iitboptnphwhse;

    /**
     * The value for the iitboptnphdet field.
     *
     * @var        string
     */
    protected $iitboptnphdet;

    /**
     * The value for the iitboptnphdaysback field.
     *
     * @var        int
     */
    protected $iitboptnphdaysback;

    /**
     * The value for the iitboptnphstrtdate field.
     *
     * @var        string
     */
    protected $iitboptnphstrtdate;

    /**
     * The value for the iitboptnpoavail field.
     *
     * @var        string
     */
    protected $iitboptnpoavail;

    /**
     * The value for the iitboptnpowhse field.
     *
     * @var        string
     */
    protected $iitboptnpowhse;

    /**
     * The value for the iitboptnreqravail field.
     *
     * @var        string
     */
    protected $iitboptnreqravail;

    /**
     * The value for the iitboptnreqrwhse field.
     *
     * @var        string
     */
    protected $iitboptnreqrwhse;

    /**
     * The value for the iitboptnreqrview field.
     *
     * @var        string
     */
    protected $iitboptnreqrview;

    /**
     * The value for the iitboptnshavail field.
     *
     * @var        string
     */
    protected $iitboptnshavail;

    /**
     * The value for the iitboptnshwhse field.
     *
     * @var        string
     */
    protected $iitboptnshwhse;

    /**
     * The value for the iitboptnshdet field.
     *
     * @var        string
     */
    protected $iitboptnshdet;

    /**
     * The value for the iitboptnshdaysback field.
     *
     * @var        int
     */
    protected $iitboptnshdaysback;

    /**
     * The value for the iitboptnshstrtdate field.
     *
     * @var        string
     */
    protected $iitboptnshstrtdate;

    /**
     * The value for the iitboptnsoavail field.
     *
     * @var        string
     */
    protected $iitboptnsoavail;

    /**
     * The value for the iitboptnsowhse field.
     *
     * @var        string
     */
    protected $iitboptnsowhse;

    /**
     * The value for the iitboptnserlotavail field.
     *
     * @var        string
     */
    protected $iitboptnserlotavail;

    /**
     * The value for the iitboptnstckavail field.
     *
     * @var        string
     */
    protected $iitboptnstckavail;

    /**
     * The value for the iitboptnstckwhse field.
     *
     * @var        string
     */
    protected $iitboptnstckwhse;

    /**
     * The value for the iitboptnstckdet field.
     *
     * @var        string
     */
    protected $iitboptnstckdet;

    /**
     * The value for the iitboptnsubsupavail field.
     *
     * @var        string
     */
    protected $iitboptnsubsupavail;

    /**
     * The value for the iitboptnsubsupwhse field.
     *
     * @var        string
     */
    protected $iitboptnsubsupwhse;

    /**
     * The value for the iitboptnlsavail field.
     *
     * @var        string
     */
    protected $iitboptnlsavail;

    /**
     * The value for the iitboptnlswhse field.
     *
     * @var        string
     */
    protected $iitboptnlswhse;

    /**
     * The value for the iitboptndesc1or2 field.
     *
     * @var        string
     */
    protected $iitboptndesc1or2;

    /**
     * The value for the iitboptndelcerts field.
     *
     * @var        string
     */
    protected $iitboptndelcerts;

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
     * Initializes internal state of Base\OptionsIi object.
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
     * Compares this with another <code>OptionsIi</code> instance.  If
     * <code>obj</code> is an instance of <code>OptionsIi</code>, delegates to
     * <code>equals(OptionsIi)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|OptionsIi The current object, for fluid interface
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
     * Get the [iitboptncode] column value.
     *
     * @return string
     */
    public function getIitboptncode()
    {
        return $this->iitboptncode;
    }

    /**
     * Get the [iitboptnactavail] column value.
     *
     * @return string
     */
    public function getIitboptnactavail()
    {
        return $this->iitboptnactavail;
    }

    /**
     * Get the [iitboptnactwhse] column value.
     *
     * @return string
     */
    public function getIitboptnactwhse()
    {
        return $this->iitboptnactwhse;
    }

    /**
     * Get the [iitboptnactdet] column value.
     *
     * @return string
     */
    public function getIitboptnactdet()
    {
        return $this->iitboptnactdet;
    }

    /**
     * Get the [iitboptnactdaysback] column value.
     *
     * @return int
     */
    public function getIitboptnactdaysback()
    {
        return $this->iitboptnactdaysback;
    }

    /**
     * Get the [iitboptnactstrtdate] column value.
     *
     * @return string
     */
    public function getIitboptnactstrtdate()
    {
        return $this->iitboptnactstrtdate;
    }

    /**
     * Get the [iitboptncostavail] column value.
     *
     * @return string
     */
    public function getIitboptncostavail()
    {
        return $this->iitboptncostavail;
    }

    /**
     * Get the [iitboptncostwhse] column value.
     *
     * @return string
     */
    public function getIitboptncostwhse()
    {
        return $this->iitboptncostwhse;
    }

    /**
     * Get the [iitboptncostdet] column value.
     *
     * @return string
     */
    public function getIitboptncostdet()
    {
        return $this->iitboptncostdet;
    }

    /**
     * Get the [iitboptngenavail] column value.
     *
     * @return string
     */
    public function getIitboptngenavail()
    {
        return $this->iitboptngenavail;
    }

    /**
     * Get the [iitboptnktavail] column value.
     *
     * @return string
     */
    public function getIitboptnktavail()
    {
        return $this->iitboptnktavail;
    }

    /**
     * Get the [iitboptnpricavail] column value.
     *
     * @return string
     */
    public function getIitboptnpricavail()
    {
        return $this->iitboptnpricavail;
    }

    /**
     * Get the [iitboptnphavail] column value.
     *
     * @return string
     */
    public function getIitboptnphavail()
    {
        return $this->iitboptnphavail;
    }

    /**
     * Get the [iitboptnphwhse] column value.
     *
     * @return string
     */
    public function getIitboptnphwhse()
    {
        return $this->iitboptnphwhse;
    }

    /**
     * Get the [iitboptnphdet] column value.
     *
     * @return string
     */
    public function getIitboptnphdet()
    {
        return $this->iitboptnphdet;
    }

    /**
     * Get the [iitboptnphdaysback] column value.
     *
     * @return int
     */
    public function getIitboptnphdaysback()
    {
        return $this->iitboptnphdaysback;
    }

    /**
     * Get the [iitboptnphstrtdate] column value.
     *
     * @return string
     */
    public function getIitboptnphstrtdate()
    {
        return $this->iitboptnphstrtdate;
    }

    /**
     * Get the [iitboptnpoavail] column value.
     *
     * @return string
     */
    public function getIitboptnpoavail()
    {
        return $this->iitboptnpoavail;
    }

    /**
     * Get the [iitboptnpowhse] column value.
     *
     * @return string
     */
    public function getIitboptnpowhse()
    {
        return $this->iitboptnpowhse;
    }

    /**
     * Get the [iitboptnreqravail] column value.
     *
     * @return string
     */
    public function getIitboptnreqravail()
    {
        return $this->iitboptnreqravail;
    }

    /**
     * Get the [iitboptnreqrwhse] column value.
     *
     * @return string
     */
    public function getIitboptnreqrwhse()
    {
        return $this->iitboptnreqrwhse;
    }

    /**
     * Get the [iitboptnreqrview] column value.
     *
     * @return string
     */
    public function getIitboptnreqrview()
    {
        return $this->iitboptnreqrview;
    }

    /**
     * Get the [iitboptnshavail] column value.
     *
     * @return string
     */
    public function getIitboptnshavail()
    {
        return $this->iitboptnshavail;
    }

    /**
     * Get the [iitboptnshwhse] column value.
     *
     * @return string
     */
    public function getIitboptnshwhse()
    {
        return $this->iitboptnshwhse;
    }

    /**
     * Get the [iitboptnshdet] column value.
     *
     * @return string
     */
    public function getIitboptnshdet()
    {
        return $this->iitboptnshdet;
    }

    /**
     * Get the [iitboptnshdaysback] column value.
     *
     * @return int
     */
    public function getIitboptnshdaysback()
    {
        return $this->iitboptnshdaysback;
    }

    /**
     * Get the [iitboptnshstrtdate] column value.
     *
     * @return string
     */
    public function getIitboptnshstrtdate()
    {
        return $this->iitboptnshstrtdate;
    }

    /**
     * Get the [iitboptnsoavail] column value.
     *
     * @return string
     */
    public function getIitboptnsoavail()
    {
        return $this->iitboptnsoavail;
    }

    /**
     * Get the [iitboptnsowhse] column value.
     *
     * @return string
     */
    public function getIitboptnsowhse()
    {
        return $this->iitboptnsowhse;
    }

    /**
     * Get the [iitboptnserlotavail] column value.
     *
     * @return string
     */
    public function getIitboptnserlotavail()
    {
        return $this->iitboptnserlotavail;
    }

    /**
     * Get the [iitboptnstckavail] column value.
     *
     * @return string
     */
    public function getIitboptnstckavail()
    {
        return $this->iitboptnstckavail;
    }

    /**
     * Get the [iitboptnstckwhse] column value.
     *
     * @return string
     */
    public function getIitboptnstckwhse()
    {
        return $this->iitboptnstckwhse;
    }

    /**
     * Get the [iitboptnstckdet] column value.
     *
     * @return string
     */
    public function getIitboptnstckdet()
    {
        return $this->iitboptnstckdet;
    }

    /**
     * Get the [iitboptnsubsupavail] column value.
     *
     * @return string
     */
    public function getIitboptnsubsupavail()
    {
        return $this->iitboptnsubsupavail;
    }

    /**
     * Get the [iitboptnsubsupwhse] column value.
     *
     * @return string
     */
    public function getIitboptnsubsupwhse()
    {
        return $this->iitboptnsubsupwhse;
    }

    /**
     * Get the [iitboptnlsavail] column value.
     *
     * @return string
     */
    public function getIitboptnlsavail()
    {
        return $this->iitboptnlsavail;
    }

    /**
     * Get the [iitboptnlswhse] column value.
     *
     * @return string
     */
    public function getIitboptnlswhse()
    {
        return $this->iitboptnlswhse;
    }

    /**
     * Get the [iitboptndesc1or2] column value.
     *
     * @return string
     */
    public function getIitboptndesc1or2()
    {
        return $this->iitboptndesc1or2;
    }

    /**
     * Get the [iitboptndelcerts] column value.
     *
     * @return string
     */
    public function getIitboptndelcerts()
    {
        return $this->iitboptndelcerts;
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
     * Set the value of [iitboptncode] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptncode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptncode !== $v) {
            $this->iitboptncode = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNCODE] = true;
        }

        return $this;
    } // setIitboptncode()

    /**
     * Set the value of [iitboptnactavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnactavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnactavail !== $v) {
            $this->iitboptnactavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNACTAVAIL] = true;
        }

        return $this;
    } // setIitboptnactavail()

    /**
     * Set the value of [iitboptnactwhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnactwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnactwhse !== $v) {
            $this->iitboptnactwhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNACTWHSE] = true;
        }

        return $this;
    } // setIitboptnactwhse()

    /**
     * Set the value of [iitboptnactdet] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnactdet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnactdet !== $v) {
            $this->iitboptnactdet = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNACTDET] = true;
        }

        return $this;
    } // setIitboptnactdet()

    /**
     * Set the value of [iitboptnactdaysback] column.
     *
     * @param int $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnactdaysback($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->iitboptnactdaysback !== $v) {
            $this->iitboptnactdaysback = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK] = true;
        }

        return $this;
    } // setIitboptnactdaysback()

    /**
     * Set the value of [iitboptnactstrtdate] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnactstrtdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnactstrtdate !== $v) {
            $this->iitboptnactstrtdate = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE] = true;
        }

        return $this;
    } // setIitboptnactstrtdate()

    /**
     * Set the value of [iitboptncostavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptncostavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptncostavail !== $v) {
            $this->iitboptncostavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL] = true;
        }

        return $this;
    } // setIitboptncostavail()

    /**
     * Set the value of [iitboptncostwhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptncostwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptncostwhse !== $v) {
            $this->iitboptncostwhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNCOSTWHSE] = true;
        }

        return $this;
    } // setIitboptncostwhse()

    /**
     * Set the value of [iitboptncostdet] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptncostdet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptncostdet !== $v) {
            $this->iitboptncostdet = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNCOSTDET] = true;
        }

        return $this;
    } // setIitboptncostdet()

    /**
     * Set the value of [iitboptngenavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptngenavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptngenavail !== $v) {
            $this->iitboptngenavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNGENAVAIL] = true;
        }

        return $this;
    } // setIitboptngenavail()

    /**
     * Set the value of [iitboptnktavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnktavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnktavail !== $v) {
            $this->iitboptnktavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNKTAVAIL] = true;
        }

        return $this;
    } // setIitboptnktavail()

    /**
     * Set the value of [iitboptnpricavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnpricavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnpricavail !== $v) {
            $this->iitboptnpricavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNPRICAVAIL] = true;
        }

        return $this;
    } // setIitboptnpricavail()

    /**
     * Set the value of [iitboptnphavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnphavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnphavail !== $v) {
            $this->iitboptnphavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNPHAVAIL] = true;
        }

        return $this;
    } // setIitboptnphavail()

    /**
     * Set the value of [iitboptnphwhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnphwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnphwhse !== $v) {
            $this->iitboptnphwhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNPHWHSE] = true;
        }

        return $this;
    } // setIitboptnphwhse()

    /**
     * Set the value of [iitboptnphdet] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnphdet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnphdet !== $v) {
            $this->iitboptnphdet = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNPHDET] = true;
        }

        return $this;
    } // setIitboptnphdet()

    /**
     * Set the value of [iitboptnphdaysback] column.
     *
     * @param int $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnphdaysback($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->iitboptnphdaysback !== $v) {
            $this->iitboptnphdaysback = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK] = true;
        }

        return $this;
    } // setIitboptnphdaysback()

    /**
     * Set the value of [iitboptnphstrtdate] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnphstrtdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnphstrtdate !== $v) {
            $this->iitboptnphstrtdate = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE] = true;
        }

        return $this;
    } // setIitboptnphstrtdate()

    /**
     * Set the value of [iitboptnpoavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnpoavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnpoavail !== $v) {
            $this->iitboptnpoavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNPOAVAIL] = true;
        }

        return $this;
    } // setIitboptnpoavail()

    /**
     * Set the value of [iitboptnpowhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnpowhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnpowhse !== $v) {
            $this->iitboptnpowhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNPOWHSE] = true;
        }

        return $this;
    } // setIitboptnpowhse()

    /**
     * Set the value of [iitboptnreqravail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnreqravail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnreqravail !== $v) {
            $this->iitboptnreqravail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNREQRAVAIL] = true;
        }

        return $this;
    } // setIitboptnreqravail()

    /**
     * Set the value of [iitboptnreqrwhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnreqrwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnreqrwhse !== $v) {
            $this->iitboptnreqrwhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNREQRWHSE] = true;
        }

        return $this;
    } // setIitboptnreqrwhse()

    /**
     * Set the value of [iitboptnreqrview] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnreqrview($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnreqrview !== $v) {
            $this->iitboptnreqrview = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNREQRVIEW] = true;
        }

        return $this;
    } // setIitboptnreqrview()

    /**
     * Set the value of [iitboptnshavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnshavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnshavail !== $v) {
            $this->iitboptnshavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSHAVAIL] = true;
        }

        return $this;
    } // setIitboptnshavail()

    /**
     * Set the value of [iitboptnshwhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnshwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnshwhse !== $v) {
            $this->iitboptnshwhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSHWHSE] = true;
        }

        return $this;
    } // setIitboptnshwhse()

    /**
     * Set the value of [iitboptnshdet] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnshdet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnshdet !== $v) {
            $this->iitboptnshdet = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSHDET] = true;
        }

        return $this;
    } // setIitboptnshdet()

    /**
     * Set the value of [iitboptnshdaysback] column.
     *
     * @param int $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnshdaysback($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->iitboptnshdaysback !== $v) {
            $this->iitboptnshdaysback = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK] = true;
        }

        return $this;
    } // setIitboptnshdaysback()

    /**
     * Set the value of [iitboptnshstrtdate] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnshstrtdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnshstrtdate !== $v) {
            $this->iitboptnshstrtdate = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE] = true;
        }

        return $this;
    } // setIitboptnshstrtdate()

    /**
     * Set the value of [iitboptnsoavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnsoavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnsoavail !== $v) {
            $this->iitboptnsoavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSOAVAIL] = true;
        }

        return $this;
    } // setIitboptnsoavail()

    /**
     * Set the value of [iitboptnsowhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnsowhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnsowhse !== $v) {
            $this->iitboptnsowhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSOWHSE] = true;
        }

        return $this;
    } // setIitboptnsowhse()

    /**
     * Set the value of [iitboptnserlotavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnserlotavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnserlotavail !== $v) {
            $this->iitboptnserlotavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL] = true;
        }

        return $this;
    } // setIitboptnserlotavail()

    /**
     * Set the value of [iitboptnstckavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnstckavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnstckavail !== $v) {
            $this->iitboptnstckavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL] = true;
        }

        return $this;
    } // setIitboptnstckavail()

    /**
     * Set the value of [iitboptnstckwhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnstckwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnstckwhse !== $v) {
            $this->iitboptnstckwhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSTCKWHSE] = true;
        }

        return $this;
    } // setIitboptnstckwhse()

    /**
     * Set the value of [iitboptnstckdet] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnstckdet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnstckdet !== $v) {
            $this->iitboptnstckdet = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSTCKDET] = true;
        }

        return $this;
    } // setIitboptnstckdet()

    /**
     * Set the value of [iitboptnsubsupavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnsubsupavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnsubsupavail !== $v) {
            $this->iitboptnsubsupavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL] = true;
        }

        return $this;
    } // setIitboptnsubsupavail()

    /**
     * Set the value of [iitboptnsubsupwhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnsubsupwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnsubsupwhse !== $v) {
            $this->iitboptnsubsupwhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE] = true;
        }

        return $this;
    } // setIitboptnsubsupwhse()

    /**
     * Set the value of [iitboptnlsavail] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnlsavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnlsavail !== $v) {
            $this->iitboptnlsavail = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNLSAVAIL] = true;
        }

        return $this;
    } // setIitboptnlsavail()

    /**
     * Set the value of [iitboptnlswhse] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptnlswhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptnlswhse !== $v) {
            $this->iitboptnlswhse = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNLSWHSE] = true;
        }

        return $this;
    } // setIitboptnlswhse()

    /**
     * Set the value of [iitboptndesc1or2] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptndesc1or2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptndesc1or2 !== $v) {
            $this->iitboptndesc1or2 = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNDESC1OR2] = true;
        }

        return $this;
    } // setIitboptndesc1or2()

    /**
     * Set the value of [iitboptndelcerts] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setIitboptndelcerts($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->iitboptndelcerts !== $v) {
            $this->iitboptndelcerts = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_IITBOPTNDELCERTS] = true;
        }

        return $this;
    } // setIitboptndelcerts()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\OptionsIi The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[OptionsIiTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptncode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptncode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnactavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnactavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnactwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnactwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnactdet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnactdet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnactdaysback', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnactdaysback = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnactstrtdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnactstrtdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptncostavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptncostavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptncostwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptncostwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptncostdet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptncostdet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptngenavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptngenavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnktavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnktavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnpricavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnpricavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnphavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnphavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnphwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnphwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnphdet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnphdet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnphdaysback', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnphdaysback = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnphstrtdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnphstrtdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnpoavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnpoavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnpowhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnpowhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnreqravail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnreqravail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnreqrwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnreqrwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnreqrview', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnreqrview = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnshavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnshavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnshwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnshwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnshdet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnshdet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnshdaysback', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnshdaysback = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnshstrtdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnshstrtdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnsoavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnsoavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnsowhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnsowhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnserlotavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnserlotavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnstckavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnstckavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnstckwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnstckwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnstckdet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnstckdet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnsubsupavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnsubsupavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnsubsupwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnsubsupwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnlsavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnlsavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptnlswhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptnlswhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptndesc1or2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptndesc1or2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : OptionsIiTableMap::translateFieldName('Iitboptndelcerts', TableMap::TYPE_PHPNAME, $indexType)];
            $this->iitboptndelcerts = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : OptionsIiTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : OptionsIiTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : OptionsIiTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 42; // 42 = OptionsIiTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\OptionsIi'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(OptionsIiTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildOptionsIiQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see OptionsIi::setDeleted()
     * @see OptionsIi::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsIiTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildOptionsIiQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsIiTableMap::DATABASE_NAME);
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
                OptionsIiTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnCode';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnActAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnActWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTDET)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnActDet';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnActDaysBack';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnActStrtDate';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnCostAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNCOSTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnCostWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNCOSTDET)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnCostDet';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNGENAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnGenAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNKTAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnKtAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPRICAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnPricAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnPhAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnPhWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHDET)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnPhDet';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnPhDaysBack';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnPhStrtDate';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPOAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnPoAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPOWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnPoWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNREQRAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnReqrAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNREQRWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnReqrWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNREQRVIEW)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnReqrView';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnShAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnShWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHDET)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnShDet';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnShDaysBack';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnShStrtDate';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSOAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnSoAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSOWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnSoWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnSerlotAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnStckAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSTCKWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnStckWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSTCKDET)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnStckDet';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnSubsupAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnSubsupWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNLSAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnLsAvail';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNLSWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnLsWhse';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNDESC1OR2)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnDesc1Or2';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNDELCERTS)) {
            $modifiedColumns[':p' . $index++]  = 'IitbOptnDelCerts';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ii_options (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'IitbOptnCode':
                        $stmt->bindValue($identifier, $this->iitboptncode, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnActAvail':
                        $stmt->bindValue($identifier, $this->iitboptnactavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnActWhse':
                        $stmt->bindValue($identifier, $this->iitboptnactwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnActDet':
                        $stmt->bindValue($identifier, $this->iitboptnactdet, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnActDaysBack':
                        $stmt->bindValue($identifier, $this->iitboptnactdaysback, PDO::PARAM_INT);
                        break;
                    case 'IitbOptnActStrtDate':
                        $stmt->bindValue($identifier, $this->iitboptnactstrtdate, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnCostAvail':
                        $stmt->bindValue($identifier, $this->iitboptncostavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnCostWhse':
                        $stmt->bindValue($identifier, $this->iitboptncostwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnCostDet':
                        $stmt->bindValue($identifier, $this->iitboptncostdet, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnGenAvail':
                        $stmt->bindValue($identifier, $this->iitboptngenavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnKtAvail':
                        $stmt->bindValue($identifier, $this->iitboptnktavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnPricAvail':
                        $stmt->bindValue($identifier, $this->iitboptnpricavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnPhAvail':
                        $stmt->bindValue($identifier, $this->iitboptnphavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnPhWhse':
                        $stmt->bindValue($identifier, $this->iitboptnphwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnPhDet':
                        $stmt->bindValue($identifier, $this->iitboptnphdet, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnPhDaysBack':
                        $stmt->bindValue($identifier, $this->iitboptnphdaysback, PDO::PARAM_INT);
                        break;
                    case 'IitbOptnPhStrtDate':
                        $stmt->bindValue($identifier, $this->iitboptnphstrtdate, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnPoAvail':
                        $stmt->bindValue($identifier, $this->iitboptnpoavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnPoWhse':
                        $stmt->bindValue($identifier, $this->iitboptnpowhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnReqrAvail':
                        $stmt->bindValue($identifier, $this->iitboptnreqravail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnReqrWhse':
                        $stmt->bindValue($identifier, $this->iitboptnreqrwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnReqrView':
                        $stmt->bindValue($identifier, $this->iitboptnreqrview, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnShAvail':
                        $stmt->bindValue($identifier, $this->iitboptnshavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnShWhse':
                        $stmt->bindValue($identifier, $this->iitboptnshwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnShDet':
                        $stmt->bindValue($identifier, $this->iitboptnshdet, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnShDaysBack':
                        $stmt->bindValue($identifier, $this->iitboptnshdaysback, PDO::PARAM_INT);
                        break;
                    case 'IitbOptnShStrtDate':
                        $stmt->bindValue($identifier, $this->iitboptnshstrtdate, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnSoAvail':
                        $stmt->bindValue($identifier, $this->iitboptnsoavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnSoWhse':
                        $stmt->bindValue($identifier, $this->iitboptnsowhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnSerlotAvail':
                        $stmt->bindValue($identifier, $this->iitboptnserlotavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnStckAvail':
                        $stmt->bindValue($identifier, $this->iitboptnstckavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnStckWhse':
                        $stmt->bindValue($identifier, $this->iitboptnstckwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnStckDet':
                        $stmt->bindValue($identifier, $this->iitboptnstckdet, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnSubsupAvail':
                        $stmt->bindValue($identifier, $this->iitboptnsubsupavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnSubsupWhse':
                        $stmt->bindValue($identifier, $this->iitboptnsubsupwhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnLsAvail':
                        $stmt->bindValue($identifier, $this->iitboptnlsavail, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnLsWhse':
                        $stmt->bindValue($identifier, $this->iitboptnlswhse, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnDesc1Or2':
                        $stmt->bindValue($identifier, $this->iitboptndesc1or2, PDO::PARAM_STR);
                        break;
                    case 'IitbOptnDelCerts':
                        $stmt->bindValue($identifier, $this->iitboptndelcerts, PDO::PARAM_STR);
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
        $pos = OptionsIiTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIitboptncode();
                break;
            case 1:
                return $this->getIitboptnactavail();
                break;
            case 2:
                return $this->getIitboptnactwhse();
                break;
            case 3:
                return $this->getIitboptnactdet();
                break;
            case 4:
                return $this->getIitboptnactdaysback();
                break;
            case 5:
                return $this->getIitboptnactstrtdate();
                break;
            case 6:
                return $this->getIitboptncostavail();
                break;
            case 7:
                return $this->getIitboptncostwhse();
                break;
            case 8:
                return $this->getIitboptncostdet();
                break;
            case 9:
                return $this->getIitboptngenavail();
                break;
            case 10:
                return $this->getIitboptnktavail();
                break;
            case 11:
                return $this->getIitboptnpricavail();
                break;
            case 12:
                return $this->getIitboptnphavail();
                break;
            case 13:
                return $this->getIitboptnphwhse();
                break;
            case 14:
                return $this->getIitboptnphdet();
                break;
            case 15:
                return $this->getIitboptnphdaysback();
                break;
            case 16:
                return $this->getIitboptnphstrtdate();
                break;
            case 17:
                return $this->getIitboptnpoavail();
                break;
            case 18:
                return $this->getIitboptnpowhse();
                break;
            case 19:
                return $this->getIitboptnreqravail();
                break;
            case 20:
                return $this->getIitboptnreqrwhse();
                break;
            case 21:
                return $this->getIitboptnreqrview();
                break;
            case 22:
                return $this->getIitboptnshavail();
                break;
            case 23:
                return $this->getIitboptnshwhse();
                break;
            case 24:
                return $this->getIitboptnshdet();
                break;
            case 25:
                return $this->getIitboptnshdaysback();
                break;
            case 26:
                return $this->getIitboptnshstrtdate();
                break;
            case 27:
                return $this->getIitboptnsoavail();
                break;
            case 28:
                return $this->getIitboptnsowhse();
                break;
            case 29:
                return $this->getIitboptnserlotavail();
                break;
            case 30:
                return $this->getIitboptnstckavail();
                break;
            case 31:
                return $this->getIitboptnstckwhse();
                break;
            case 32:
                return $this->getIitboptnstckdet();
                break;
            case 33:
                return $this->getIitboptnsubsupavail();
                break;
            case 34:
                return $this->getIitboptnsubsupwhse();
                break;
            case 35:
                return $this->getIitboptnlsavail();
                break;
            case 36:
                return $this->getIitboptnlswhse();
                break;
            case 37:
                return $this->getIitboptndesc1or2();
                break;
            case 38:
                return $this->getIitboptndelcerts();
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

        if (isset($alreadyDumpedObjects['OptionsIi'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OptionsIi'][$this->hashCode()] = true;
        $keys = OptionsIiTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIitboptncode(),
            $keys[1] => $this->getIitboptnactavail(),
            $keys[2] => $this->getIitboptnactwhse(),
            $keys[3] => $this->getIitboptnactdet(),
            $keys[4] => $this->getIitboptnactdaysback(),
            $keys[5] => $this->getIitboptnactstrtdate(),
            $keys[6] => $this->getIitboptncostavail(),
            $keys[7] => $this->getIitboptncostwhse(),
            $keys[8] => $this->getIitboptncostdet(),
            $keys[9] => $this->getIitboptngenavail(),
            $keys[10] => $this->getIitboptnktavail(),
            $keys[11] => $this->getIitboptnpricavail(),
            $keys[12] => $this->getIitboptnphavail(),
            $keys[13] => $this->getIitboptnphwhse(),
            $keys[14] => $this->getIitboptnphdet(),
            $keys[15] => $this->getIitboptnphdaysback(),
            $keys[16] => $this->getIitboptnphstrtdate(),
            $keys[17] => $this->getIitboptnpoavail(),
            $keys[18] => $this->getIitboptnpowhse(),
            $keys[19] => $this->getIitboptnreqravail(),
            $keys[20] => $this->getIitboptnreqrwhse(),
            $keys[21] => $this->getIitboptnreqrview(),
            $keys[22] => $this->getIitboptnshavail(),
            $keys[23] => $this->getIitboptnshwhse(),
            $keys[24] => $this->getIitboptnshdet(),
            $keys[25] => $this->getIitboptnshdaysback(),
            $keys[26] => $this->getIitboptnshstrtdate(),
            $keys[27] => $this->getIitboptnsoavail(),
            $keys[28] => $this->getIitboptnsowhse(),
            $keys[29] => $this->getIitboptnserlotavail(),
            $keys[30] => $this->getIitboptnstckavail(),
            $keys[31] => $this->getIitboptnstckwhse(),
            $keys[32] => $this->getIitboptnstckdet(),
            $keys[33] => $this->getIitboptnsubsupavail(),
            $keys[34] => $this->getIitboptnsubsupwhse(),
            $keys[35] => $this->getIitboptnlsavail(),
            $keys[36] => $this->getIitboptnlswhse(),
            $keys[37] => $this->getIitboptndesc1or2(),
            $keys[38] => $this->getIitboptndelcerts(),
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
     * @return $this|\OptionsIi
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = OptionsIiTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\OptionsIi
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIitboptncode($value);
                break;
            case 1:
                $this->setIitboptnactavail($value);
                break;
            case 2:
                $this->setIitboptnactwhse($value);
                break;
            case 3:
                $this->setIitboptnactdet($value);
                break;
            case 4:
                $this->setIitboptnactdaysback($value);
                break;
            case 5:
                $this->setIitboptnactstrtdate($value);
                break;
            case 6:
                $this->setIitboptncostavail($value);
                break;
            case 7:
                $this->setIitboptncostwhse($value);
                break;
            case 8:
                $this->setIitboptncostdet($value);
                break;
            case 9:
                $this->setIitboptngenavail($value);
                break;
            case 10:
                $this->setIitboptnktavail($value);
                break;
            case 11:
                $this->setIitboptnpricavail($value);
                break;
            case 12:
                $this->setIitboptnphavail($value);
                break;
            case 13:
                $this->setIitboptnphwhse($value);
                break;
            case 14:
                $this->setIitboptnphdet($value);
                break;
            case 15:
                $this->setIitboptnphdaysback($value);
                break;
            case 16:
                $this->setIitboptnphstrtdate($value);
                break;
            case 17:
                $this->setIitboptnpoavail($value);
                break;
            case 18:
                $this->setIitboptnpowhse($value);
                break;
            case 19:
                $this->setIitboptnreqravail($value);
                break;
            case 20:
                $this->setIitboptnreqrwhse($value);
                break;
            case 21:
                $this->setIitboptnreqrview($value);
                break;
            case 22:
                $this->setIitboptnshavail($value);
                break;
            case 23:
                $this->setIitboptnshwhse($value);
                break;
            case 24:
                $this->setIitboptnshdet($value);
                break;
            case 25:
                $this->setIitboptnshdaysback($value);
                break;
            case 26:
                $this->setIitboptnshstrtdate($value);
                break;
            case 27:
                $this->setIitboptnsoavail($value);
                break;
            case 28:
                $this->setIitboptnsowhse($value);
                break;
            case 29:
                $this->setIitboptnserlotavail($value);
                break;
            case 30:
                $this->setIitboptnstckavail($value);
                break;
            case 31:
                $this->setIitboptnstckwhse($value);
                break;
            case 32:
                $this->setIitboptnstckdet($value);
                break;
            case 33:
                $this->setIitboptnsubsupavail($value);
                break;
            case 34:
                $this->setIitboptnsubsupwhse($value);
                break;
            case 35:
                $this->setIitboptnlsavail($value);
                break;
            case 36:
                $this->setIitboptnlswhse($value);
                break;
            case 37:
                $this->setIitboptndesc1or2($value);
                break;
            case 38:
                $this->setIitboptndelcerts($value);
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
        $keys = OptionsIiTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIitboptncode($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIitboptnactavail($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIitboptnactwhse($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIitboptnactdet($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIitboptnactdaysback($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIitboptnactstrtdate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIitboptncostavail($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIitboptncostwhse($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIitboptncostdet($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIitboptngenavail($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIitboptnktavail($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setIitboptnpricavail($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setIitboptnphavail($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setIitboptnphwhse($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setIitboptnphdet($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setIitboptnphdaysback($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIitboptnphstrtdate($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setIitboptnpoavail($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setIitboptnpowhse($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIitboptnreqravail($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setIitboptnreqrwhse($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setIitboptnreqrview($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setIitboptnshavail($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setIitboptnshwhse($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setIitboptnshdet($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setIitboptnshdaysback($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setIitboptnshstrtdate($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setIitboptnsoavail($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setIitboptnsowhse($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setIitboptnserlotavail($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setIitboptnstckavail($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setIitboptnstckwhse($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setIitboptnstckdet($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setIitboptnsubsupavail($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setIitboptnsubsupwhse($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setIitboptnlsavail($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setIitboptnlswhse($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setIitboptndesc1or2($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setIitboptndelcerts($arr[$keys[38]]);
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
     * @return $this|\OptionsIi The current object, for fluid interface
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
        $criteria = new Criteria(OptionsIiTableMap::DATABASE_NAME);

        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNCODE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNCODE, $this->iitboptncode);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNACTAVAIL, $this->iitboptnactavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNACTWHSE, $this->iitboptnactwhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTDET)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNACTDET, $this->iitboptnactdet);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK, $this->iitboptnactdaysback);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE, $this->iitboptnactstrtdate);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL, $this->iitboptncostavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNCOSTWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNCOSTWHSE, $this->iitboptncostwhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNCOSTDET)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNCOSTDET, $this->iitboptncostdet);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNGENAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNGENAVAIL, $this->iitboptngenavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNKTAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNKTAVAIL, $this->iitboptnktavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPRICAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNPRICAVAIL, $this->iitboptnpricavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNPHAVAIL, $this->iitboptnphavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNPHWHSE, $this->iitboptnphwhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHDET)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNPHDET, $this->iitboptnphdet);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK, $this->iitboptnphdaysback);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE, $this->iitboptnphstrtdate);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPOAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNPOAVAIL, $this->iitboptnpoavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNPOWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNPOWHSE, $this->iitboptnpowhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNREQRAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNREQRAVAIL, $this->iitboptnreqravail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNREQRWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNREQRWHSE, $this->iitboptnreqrwhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNREQRVIEW)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNREQRVIEW, $this->iitboptnreqrview);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSHAVAIL, $this->iitboptnshavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSHWHSE, $this->iitboptnshwhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHDET)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSHDET, $this->iitboptnshdet);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK, $this->iitboptnshdaysback);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE, $this->iitboptnshstrtdate);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSOAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSOAVAIL, $this->iitboptnsoavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSOWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSOWHSE, $this->iitboptnsowhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL, $this->iitboptnserlotavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL, $this->iitboptnstckavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSTCKWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSTCKWHSE, $this->iitboptnstckwhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSTCKDET)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSTCKDET, $this->iitboptnstckdet);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL, $this->iitboptnsubsupavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE, $this->iitboptnsubsupwhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNLSAVAIL)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNLSAVAIL, $this->iitboptnlsavail);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNLSWHSE)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNLSWHSE, $this->iitboptnlswhse);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNDESC1OR2)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNDESC1OR2, $this->iitboptndesc1or2);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_IITBOPTNDELCERTS)) {
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNDELCERTS, $this->iitboptndelcerts);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_DATEUPDTD)) {
            $criteria->add(OptionsIiTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_TIMEUPDTD)) {
            $criteria->add(OptionsIiTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(OptionsIiTableMap::COL_DUMMY)) {
            $criteria->add(OptionsIiTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildOptionsIiQuery::create();
        $criteria->add(OptionsIiTableMap::COL_IITBOPTNCODE, $this->iitboptncode);

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
        $validPk = null !== $this->getIitboptncode();

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
        return $this->getIitboptncode();
    }

    /**
     * Generic method to set the primary key (iitboptncode column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIitboptncode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIitboptncode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \OptionsIi (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIitboptncode($this->getIitboptncode());
        $copyObj->setIitboptnactavail($this->getIitboptnactavail());
        $copyObj->setIitboptnactwhse($this->getIitboptnactwhse());
        $copyObj->setIitboptnactdet($this->getIitboptnactdet());
        $copyObj->setIitboptnactdaysback($this->getIitboptnactdaysback());
        $copyObj->setIitboptnactstrtdate($this->getIitboptnactstrtdate());
        $copyObj->setIitboptncostavail($this->getIitboptncostavail());
        $copyObj->setIitboptncostwhse($this->getIitboptncostwhse());
        $copyObj->setIitboptncostdet($this->getIitboptncostdet());
        $copyObj->setIitboptngenavail($this->getIitboptngenavail());
        $copyObj->setIitboptnktavail($this->getIitboptnktavail());
        $copyObj->setIitboptnpricavail($this->getIitboptnpricavail());
        $copyObj->setIitboptnphavail($this->getIitboptnphavail());
        $copyObj->setIitboptnphwhse($this->getIitboptnphwhse());
        $copyObj->setIitboptnphdet($this->getIitboptnphdet());
        $copyObj->setIitboptnphdaysback($this->getIitboptnphdaysback());
        $copyObj->setIitboptnphstrtdate($this->getIitboptnphstrtdate());
        $copyObj->setIitboptnpoavail($this->getIitboptnpoavail());
        $copyObj->setIitboptnpowhse($this->getIitboptnpowhse());
        $copyObj->setIitboptnreqravail($this->getIitboptnreqravail());
        $copyObj->setIitboptnreqrwhse($this->getIitboptnreqrwhse());
        $copyObj->setIitboptnreqrview($this->getIitboptnreqrview());
        $copyObj->setIitboptnshavail($this->getIitboptnshavail());
        $copyObj->setIitboptnshwhse($this->getIitboptnshwhse());
        $copyObj->setIitboptnshdet($this->getIitboptnshdet());
        $copyObj->setIitboptnshdaysback($this->getIitboptnshdaysback());
        $copyObj->setIitboptnshstrtdate($this->getIitboptnshstrtdate());
        $copyObj->setIitboptnsoavail($this->getIitboptnsoavail());
        $copyObj->setIitboptnsowhse($this->getIitboptnsowhse());
        $copyObj->setIitboptnserlotavail($this->getIitboptnserlotavail());
        $copyObj->setIitboptnstckavail($this->getIitboptnstckavail());
        $copyObj->setIitboptnstckwhse($this->getIitboptnstckwhse());
        $copyObj->setIitboptnstckdet($this->getIitboptnstckdet());
        $copyObj->setIitboptnsubsupavail($this->getIitboptnsubsupavail());
        $copyObj->setIitboptnsubsupwhse($this->getIitboptnsubsupwhse());
        $copyObj->setIitboptnlsavail($this->getIitboptnlsavail());
        $copyObj->setIitboptnlswhse($this->getIitboptnlswhse());
        $copyObj->setIitboptndesc1or2($this->getIitboptndesc1or2());
        $copyObj->setIitboptndelcerts($this->getIitboptndelcerts());
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
     * @return \OptionsIi Clone of current object.
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
        $this->iitboptncode = null;
        $this->iitboptnactavail = null;
        $this->iitboptnactwhse = null;
        $this->iitboptnactdet = null;
        $this->iitboptnactdaysback = null;
        $this->iitboptnactstrtdate = null;
        $this->iitboptncostavail = null;
        $this->iitboptncostwhse = null;
        $this->iitboptncostdet = null;
        $this->iitboptngenavail = null;
        $this->iitboptnktavail = null;
        $this->iitboptnpricavail = null;
        $this->iitboptnphavail = null;
        $this->iitboptnphwhse = null;
        $this->iitboptnphdet = null;
        $this->iitboptnphdaysback = null;
        $this->iitboptnphstrtdate = null;
        $this->iitboptnpoavail = null;
        $this->iitboptnpowhse = null;
        $this->iitboptnreqravail = null;
        $this->iitboptnreqrwhse = null;
        $this->iitboptnreqrview = null;
        $this->iitboptnshavail = null;
        $this->iitboptnshwhse = null;
        $this->iitboptnshdet = null;
        $this->iitboptnshdaysback = null;
        $this->iitboptnshstrtdate = null;
        $this->iitboptnsoavail = null;
        $this->iitboptnsowhse = null;
        $this->iitboptnserlotavail = null;
        $this->iitboptnstckavail = null;
        $this->iitboptnstckwhse = null;
        $this->iitboptnstckdet = null;
        $this->iitboptnsubsupavail = null;
        $this->iitboptnsubsupwhse = null;
        $this->iitboptnlsavail = null;
        $this->iitboptnlswhse = null;
        $this->iitboptndesc1or2 = null;
        $this->iitboptndelcerts = null;
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
        return (string) $this->exportTo(OptionsIiTableMap::DEFAULT_STRING_FORMAT);
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
