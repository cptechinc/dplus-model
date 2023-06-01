<?php

namespace Base;

use \PhoneBookQuery as ChildPhoneBookQuery;
use \Exception;
use \PDO;
use Map\PhoneBookTableMap;
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
 * Base class that represents a row from the 'phoneadr' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class PhoneBook implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\PhoneBookTableMap';


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
     * The value for the phadtype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $phadtype;

    /**
     * The value for the phadid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $phadid;

    /**
     * The value for the phadsubid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $phadsubid;

    /**
     * The value for the phadsubidseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $phadsubidseq;

    /**
     * The value for the phadcont field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $phadcont;

    /**
     * The value for the phadintl field.
     *
     * @var        string
     */
    protected $phadintl;

    /**
     * The value for the phadtelenbr field.
     *
     * @var        string
     */
    protected $phadtelenbr;

    /**
     * The value for the phadteleext field.
     *
     * @var        string
     */
    protected $phadteleext;

    /**
     * The value for the phadintlnbr field.
     *
     * @var        string
     */
    protected $phadintlnbr;

    /**
     * The value for the phadintlext field.
     *
     * @var        string
     */
    protected $phadintlext;

    /**
     * The value for the phadfaxnbr field.
     *
     * @var        string
     */
    protected $phadfaxnbr;

    /**
     * The value for the phadifaxnbr field.
     *
     * @var        string
     */
    protected $phadifaxnbr;

    /**
     * The value for the phadcellnbr field.
     *
     * @var        string
     */
    protected $phadcellnbr;

    /**
     * The value for the phadicellnbr field.
     *
     * @var        string
     */
    protected $phadicellnbr;

    /**
     * The value for the phadhomenbr field.
     *
     * @var        string
     */
    protected $phadhomenbr;

    /**
     * The value for the phadihomenbr field.
     *
     * @var        string
     */
    protected $phadihomenbr;

    /**
     * The value for the phadwebaddr field.
     *
     * @var        string
     */
    protected $phadwebaddr;

    /**
     * The value for the phademailaddr field.
     *
     * @var        string
     */
    protected $phademailaddr;

    /**
     * The value for the phadname field.
     *
     * @var        string
     */
    protected $phadname;

    /**
     * The value for the phadcontname field.
     *
     * @var        string
     */
    protected $phadcontname;

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
        $this->phadtype = '';
        $this->phadid = '';
        $this->phadsubid = '';
        $this->phadsubidseq = 0;
        $this->phadcont = '';
    }

    /**
     * Initializes internal state of Base\PhoneBook object.
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
     * Compares this with another <code>PhoneBook</code> instance.  If
     * <code>obj</code> is an instance of <code>PhoneBook</code>, delegates to
     * <code>equals(PhoneBook)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|PhoneBook The current object, for fluid interface
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
     * Get the [phadtype] column value.
     *
     * @return string
     */
    public function getPhadtype()
    {
        return $this->phadtype;
    }

    /**
     * Get the [phadid] column value.
     *
     * @return string
     */
    public function getPhadid()
    {
        return $this->phadid;
    }

    /**
     * Get the [phadsubid] column value.
     *
     * @return string
     */
    public function getPhadsubid()
    {
        return $this->phadsubid;
    }

    /**
     * Get the [phadsubidseq] column value.
     *
     * @return int
     */
    public function getPhadsubidseq()
    {
        return $this->phadsubidseq;
    }

    /**
     * Get the [phadcont] column value.
     *
     * @return string
     */
    public function getPhadcont()
    {
        return $this->phadcont;
    }

    /**
     * Get the [phadintl] column value.
     *
     * @return string
     */
    public function getPhadintl()
    {
        return $this->phadintl;
    }

    /**
     * Get the [phadtelenbr] column value.
     *
     * @return string
     */
    public function getPhadtelenbr()
    {
        return $this->phadtelenbr;
    }

    /**
     * Get the [phadteleext] column value.
     *
     * @return string
     */
    public function getPhadteleext()
    {
        return $this->phadteleext;
    }

    /**
     * Get the [phadintlnbr] column value.
     *
     * @return string
     */
    public function getPhadintlnbr()
    {
        return $this->phadintlnbr;
    }

    /**
     * Get the [phadintlext] column value.
     *
     * @return string
     */
    public function getPhadintlext()
    {
        return $this->phadintlext;
    }

    /**
     * Get the [phadfaxnbr] column value.
     *
     * @return string
     */
    public function getPhadfaxnbr()
    {
        return $this->phadfaxnbr;
    }

    /**
     * Get the [phadifaxnbr] column value.
     *
     * @return string
     */
    public function getPhadifaxnbr()
    {
        return $this->phadifaxnbr;
    }

    /**
     * Get the [phadcellnbr] column value.
     *
     * @return string
     */
    public function getPhadcellnbr()
    {
        return $this->phadcellnbr;
    }

    /**
     * Get the [phadicellnbr] column value.
     *
     * @return string
     */
    public function getPhadicellnbr()
    {
        return $this->phadicellnbr;
    }

    /**
     * Get the [phadhomenbr] column value.
     *
     * @return string
     */
    public function getPhadhomenbr()
    {
        return $this->phadhomenbr;
    }

    /**
     * Get the [phadihomenbr] column value.
     *
     * @return string
     */
    public function getPhadihomenbr()
    {
        return $this->phadihomenbr;
    }

    /**
     * Get the [phadwebaddr] column value.
     *
     * @return string
     */
    public function getPhadwebaddr()
    {
        return $this->phadwebaddr;
    }

    /**
     * Get the [phademailaddr] column value.
     *
     * @return string
     */
    public function getPhademailaddr()
    {
        return $this->phademailaddr;
    }

    /**
     * Get the [phadname] column value.
     *
     * @return string
     */
    public function getPhadname()
    {
        return $this->phadname;
    }

    /**
     * Get the [phadcontname] column value.
     *
     * @return string
     */
    public function getPhadcontname()
    {
        return $this->phadcontname;
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
     * Set the value of [phadtype] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadtype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadtype !== $v) {
            $this->phadtype = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADTYPE] = true;
        }

        return $this;
    } // setPhadtype()

    /**
     * Set the value of [phadid] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadid !== $v) {
            $this->phadid = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADID] = true;
        }

        return $this;
    } // setPhadid()

    /**
     * Set the value of [phadsubid] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadsubid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadsubid !== $v) {
            $this->phadsubid = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADSUBID] = true;
        }

        return $this;
    } // setPhadsubid()

    /**
     * Set the value of [phadsubidseq] column.
     *
     * @param int $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadsubidseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->phadsubidseq !== $v) {
            $this->phadsubidseq = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADSUBIDSEQ] = true;
        }

        return $this;
    } // setPhadsubidseq()

    /**
     * Set the value of [phadcont] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadcont($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadcont !== $v) {
            $this->phadcont = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADCONT] = true;
        }

        return $this;
    } // setPhadcont()

    /**
     * Set the value of [phadintl] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadintl !== $v) {
            $this->phadintl = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADINTL] = true;
        }

        return $this;
    } // setPhadintl()

    /**
     * Set the value of [phadtelenbr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadtelenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadtelenbr !== $v) {
            $this->phadtelenbr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADTELENBR] = true;
        }

        return $this;
    } // setPhadtelenbr()

    /**
     * Set the value of [phadteleext] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadteleext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadteleext !== $v) {
            $this->phadteleext = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADTELEEXT] = true;
        }

        return $this;
    } // setPhadteleext()

    /**
     * Set the value of [phadintlnbr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadintlnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadintlnbr !== $v) {
            $this->phadintlnbr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADINTLNBR] = true;
        }

        return $this;
    } // setPhadintlnbr()

    /**
     * Set the value of [phadintlext] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadintlext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadintlext !== $v) {
            $this->phadintlext = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADINTLEXT] = true;
        }

        return $this;
    } // setPhadintlext()

    /**
     * Set the value of [phadfaxnbr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadfaxnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadfaxnbr !== $v) {
            $this->phadfaxnbr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADFAXNBR] = true;
        }

        return $this;
    } // setPhadfaxnbr()

    /**
     * Set the value of [phadifaxnbr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadifaxnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadifaxnbr !== $v) {
            $this->phadifaxnbr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADIFAXNBR] = true;
        }

        return $this;
    } // setPhadifaxnbr()

    /**
     * Set the value of [phadcellnbr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadcellnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadcellnbr !== $v) {
            $this->phadcellnbr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADCELLNBR] = true;
        }

        return $this;
    } // setPhadcellnbr()

    /**
     * Set the value of [phadicellnbr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadicellnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadicellnbr !== $v) {
            $this->phadicellnbr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADICELLNBR] = true;
        }

        return $this;
    } // setPhadicellnbr()

    /**
     * Set the value of [phadhomenbr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadhomenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadhomenbr !== $v) {
            $this->phadhomenbr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADHOMENBR] = true;
        }

        return $this;
    } // setPhadhomenbr()

    /**
     * Set the value of [phadihomenbr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadihomenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadihomenbr !== $v) {
            $this->phadihomenbr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADIHOMENBR] = true;
        }

        return $this;
    } // setPhadihomenbr()

    /**
     * Set the value of [phadwebaddr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadwebaddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadwebaddr !== $v) {
            $this->phadwebaddr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADWEBADDR] = true;
        }

        return $this;
    } // setPhadwebaddr()

    /**
     * Set the value of [phademailaddr] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhademailaddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phademailaddr !== $v) {
            $this->phademailaddr = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADEMAILADDR] = true;
        }

        return $this;
    } // setPhademailaddr()

    /**
     * Set the value of [phadname] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadname !== $v) {
            $this->phadname = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADNAME] = true;
        }

        return $this;
    } // setPhadname()

    /**
     * Set the value of [phadcontname] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setPhadcontname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phadcontname !== $v) {
            $this->phadcontname = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_PHADCONTNAME] = true;
        }

        return $this;
    } // setPhadcontname()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\PhoneBook The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[PhoneBookTableMap::COL_DUMMY] = true;
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
            if ($this->phadtype !== '') {
                return false;
            }

            if ($this->phadid !== '') {
                return false;
            }

            if ($this->phadsubid !== '') {
                return false;
            }

            if ($this->phadsubidseq !== 0) {
                return false;
            }

            if ($this->phadcont !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : PhoneBookTableMap::translateFieldName('Phadtype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadtype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : PhoneBookTableMap::translateFieldName('Phadid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : PhoneBookTableMap::translateFieldName('Phadsubid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadsubid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : PhoneBookTableMap::translateFieldName('Phadsubidseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadsubidseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : PhoneBookTableMap::translateFieldName('Phadcont', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadcont = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : PhoneBookTableMap::translateFieldName('Phadintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : PhoneBookTableMap::translateFieldName('Phadtelenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadtelenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : PhoneBookTableMap::translateFieldName('Phadteleext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadteleext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : PhoneBookTableMap::translateFieldName('Phadintlnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadintlnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : PhoneBookTableMap::translateFieldName('Phadintlext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadintlext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : PhoneBookTableMap::translateFieldName('Phadfaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadfaxnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : PhoneBookTableMap::translateFieldName('Phadifaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadifaxnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : PhoneBookTableMap::translateFieldName('Phadcellnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadcellnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : PhoneBookTableMap::translateFieldName('Phadicellnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadicellnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : PhoneBookTableMap::translateFieldName('Phadhomenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadhomenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : PhoneBookTableMap::translateFieldName('Phadihomenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadihomenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : PhoneBookTableMap::translateFieldName('Phadwebaddr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadwebaddr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : PhoneBookTableMap::translateFieldName('Phademailaddr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phademailaddr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : PhoneBookTableMap::translateFieldName('Phadname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : PhoneBookTableMap::translateFieldName('Phadcontname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phadcontname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : PhoneBookTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : PhoneBookTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : PhoneBookTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = PhoneBookTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\PhoneBook'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(PhoneBookTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildPhoneBookQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see PhoneBook::setDeleted()
     * @see PhoneBook::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(PhoneBookTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildPhoneBookQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(PhoneBookTableMap::DATABASE_NAME);
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
                PhoneBookTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'PhadType';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADID)) {
            $modifiedColumns[':p' . $index++]  = 'PhadId';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADSUBID)) {
            $modifiedColumns[':p' . $index++]  = 'PhadSubId';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADSUBIDSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'PhadSubIdSeq';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADCONT)) {
            $modifiedColumns[':p' . $index++]  = 'PhadCont';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADINTL)) {
            $modifiedColumns[':p' . $index++]  = 'PhadIntl';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADTELENBR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadTeleNbr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADTELEEXT)) {
            $modifiedColumns[':p' . $index++]  = 'PhadTeleExt';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADINTLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadIntlNbr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADINTLEXT)) {
            $modifiedColumns[':p' . $index++]  = 'PhadIntlExt';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadFaxNbr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADIFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadIfaxNbr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADCELLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadCellNbr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADICELLNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadIcellNbr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADHOMENBR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadHomeNbr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADIHOMENBR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadIhomeNbr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADWEBADDR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadWebAddr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADEMAILADDR)) {
            $modifiedColumns[':p' . $index++]  = 'PhadEmailAddr';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADNAME)) {
            $modifiedColumns[':p' . $index++]  = 'PhadName';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADCONTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'PhadContName';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO phoneadr (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'PhadType':
                        $stmt->bindValue($identifier, $this->phadtype, PDO::PARAM_STR);
                        break;
                    case 'PhadId':
                        $stmt->bindValue($identifier, $this->phadid, PDO::PARAM_STR);
                        break;
                    case 'PhadSubId':
                        $stmt->bindValue($identifier, $this->phadsubid, PDO::PARAM_STR);
                        break;
                    case 'PhadSubIdSeq':
                        $stmt->bindValue($identifier, $this->phadsubidseq, PDO::PARAM_INT);
                        break;
                    case 'PhadCont':
                        $stmt->bindValue($identifier, $this->phadcont, PDO::PARAM_STR);
                        break;
                    case 'PhadIntl':
                        $stmt->bindValue($identifier, $this->phadintl, PDO::PARAM_STR);
                        break;
                    case 'PhadTeleNbr':
                        $stmt->bindValue($identifier, $this->phadtelenbr, PDO::PARAM_STR);
                        break;
                    case 'PhadTeleExt':
                        $stmt->bindValue($identifier, $this->phadteleext, PDO::PARAM_STR);
                        break;
                    case 'PhadIntlNbr':
                        $stmt->bindValue($identifier, $this->phadintlnbr, PDO::PARAM_STR);
                        break;
                    case 'PhadIntlExt':
                        $stmt->bindValue($identifier, $this->phadintlext, PDO::PARAM_STR);
                        break;
                    case 'PhadFaxNbr':
                        $stmt->bindValue($identifier, $this->phadfaxnbr, PDO::PARAM_STR);
                        break;
                    case 'PhadIfaxNbr':
                        $stmt->bindValue($identifier, $this->phadifaxnbr, PDO::PARAM_STR);
                        break;
                    case 'PhadCellNbr':
                        $stmt->bindValue($identifier, $this->phadcellnbr, PDO::PARAM_STR);
                        break;
                    case 'PhadIcellNbr':
                        $stmt->bindValue($identifier, $this->phadicellnbr, PDO::PARAM_STR);
                        break;
                    case 'PhadHomeNbr':
                        $stmt->bindValue($identifier, $this->phadhomenbr, PDO::PARAM_STR);
                        break;
                    case 'PhadIhomeNbr':
                        $stmt->bindValue($identifier, $this->phadihomenbr, PDO::PARAM_STR);
                        break;
                    case 'PhadWebAddr':
                        $stmt->bindValue($identifier, $this->phadwebaddr, PDO::PARAM_STR);
                        break;
                    case 'PhadEmailAddr':
                        $stmt->bindValue($identifier, $this->phademailaddr, PDO::PARAM_STR);
                        break;
                    case 'PhadName':
                        $stmt->bindValue($identifier, $this->phadname, PDO::PARAM_STR);
                        break;
                    case 'PhadContName':
                        $stmt->bindValue($identifier, $this->phadcontname, PDO::PARAM_STR);
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
        $pos = PhoneBookTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPhadtype();
                break;
            case 1:
                return $this->getPhadid();
                break;
            case 2:
                return $this->getPhadsubid();
                break;
            case 3:
                return $this->getPhadsubidseq();
                break;
            case 4:
                return $this->getPhadcont();
                break;
            case 5:
                return $this->getPhadintl();
                break;
            case 6:
                return $this->getPhadtelenbr();
                break;
            case 7:
                return $this->getPhadteleext();
                break;
            case 8:
                return $this->getPhadintlnbr();
                break;
            case 9:
                return $this->getPhadintlext();
                break;
            case 10:
                return $this->getPhadfaxnbr();
                break;
            case 11:
                return $this->getPhadifaxnbr();
                break;
            case 12:
                return $this->getPhadcellnbr();
                break;
            case 13:
                return $this->getPhadicellnbr();
                break;
            case 14:
                return $this->getPhadhomenbr();
                break;
            case 15:
                return $this->getPhadihomenbr();
                break;
            case 16:
                return $this->getPhadwebaddr();
                break;
            case 17:
                return $this->getPhademailaddr();
                break;
            case 18:
                return $this->getPhadname();
                break;
            case 19:
                return $this->getPhadcontname();
                break;
            case 20:
                return $this->getDateupdtd();
                break;
            case 21:
                return $this->getTimeupdtd();
                break;
            case 22:
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

        if (isset($alreadyDumpedObjects['PhoneBook'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PhoneBook'][$this->hashCode()] = true;
        $keys = PhoneBookTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPhadtype(),
            $keys[1] => $this->getPhadid(),
            $keys[2] => $this->getPhadsubid(),
            $keys[3] => $this->getPhadsubidseq(),
            $keys[4] => $this->getPhadcont(),
            $keys[5] => $this->getPhadintl(),
            $keys[6] => $this->getPhadtelenbr(),
            $keys[7] => $this->getPhadteleext(),
            $keys[8] => $this->getPhadintlnbr(),
            $keys[9] => $this->getPhadintlext(),
            $keys[10] => $this->getPhadfaxnbr(),
            $keys[11] => $this->getPhadifaxnbr(),
            $keys[12] => $this->getPhadcellnbr(),
            $keys[13] => $this->getPhadicellnbr(),
            $keys[14] => $this->getPhadhomenbr(),
            $keys[15] => $this->getPhadihomenbr(),
            $keys[16] => $this->getPhadwebaddr(),
            $keys[17] => $this->getPhademailaddr(),
            $keys[18] => $this->getPhadname(),
            $keys[19] => $this->getPhadcontname(),
            $keys[20] => $this->getDateupdtd(),
            $keys[21] => $this->getTimeupdtd(),
            $keys[22] => $this->getDummy(),
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
     * @return $this|\PhoneBook
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = PhoneBookTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\PhoneBook
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPhadtype($value);
                break;
            case 1:
                $this->setPhadid($value);
                break;
            case 2:
                $this->setPhadsubid($value);
                break;
            case 3:
                $this->setPhadsubidseq($value);
                break;
            case 4:
                $this->setPhadcont($value);
                break;
            case 5:
                $this->setPhadintl($value);
                break;
            case 6:
                $this->setPhadtelenbr($value);
                break;
            case 7:
                $this->setPhadteleext($value);
                break;
            case 8:
                $this->setPhadintlnbr($value);
                break;
            case 9:
                $this->setPhadintlext($value);
                break;
            case 10:
                $this->setPhadfaxnbr($value);
                break;
            case 11:
                $this->setPhadifaxnbr($value);
                break;
            case 12:
                $this->setPhadcellnbr($value);
                break;
            case 13:
                $this->setPhadicellnbr($value);
                break;
            case 14:
                $this->setPhadhomenbr($value);
                break;
            case 15:
                $this->setPhadihomenbr($value);
                break;
            case 16:
                $this->setPhadwebaddr($value);
                break;
            case 17:
                $this->setPhademailaddr($value);
                break;
            case 18:
                $this->setPhadname($value);
                break;
            case 19:
                $this->setPhadcontname($value);
                break;
            case 20:
                $this->setDateupdtd($value);
                break;
            case 21:
                $this->setTimeupdtd($value);
                break;
            case 22:
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
        $keys = PhoneBookTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPhadtype($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPhadid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPhadsubid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setPhadsubidseq($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setPhadcont($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPhadintl($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPhadtelenbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPhadteleext($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPhadintlnbr($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPhadintlext($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPhadfaxnbr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPhadifaxnbr($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPhadcellnbr($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPhadicellnbr($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPhadhomenbr($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPhadihomenbr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPhadwebaddr($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPhademailaddr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPhadname($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setPhadcontname($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setDateupdtd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setTimeupdtd($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setDummy($arr[$keys[22]]);
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
     * @return $this|\PhoneBook The current object, for fluid interface
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
        $criteria = new Criteria(PhoneBookTableMap::DATABASE_NAME);

        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADTYPE)) {
            $criteria->add(PhoneBookTableMap::COL_PHADTYPE, $this->phadtype);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADID)) {
            $criteria->add(PhoneBookTableMap::COL_PHADID, $this->phadid);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADSUBID)) {
            $criteria->add(PhoneBookTableMap::COL_PHADSUBID, $this->phadsubid);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADSUBIDSEQ)) {
            $criteria->add(PhoneBookTableMap::COL_PHADSUBIDSEQ, $this->phadsubidseq);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADCONT)) {
            $criteria->add(PhoneBookTableMap::COL_PHADCONT, $this->phadcont);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADINTL)) {
            $criteria->add(PhoneBookTableMap::COL_PHADINTL, $this->phadintl);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADTELENBR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADTELENBR, $this->phadtelenbr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADTELEEXT)) {
            $criteria->add(PhoneBookTableMap::COL_PHADTELEEXT, $this->phadteleext);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADINTLNBR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADINTLNBR, $this->phadintlnbr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADINTLEXT)) {
            $criteria->add(PhoneBookTableMap::COL_PHADINTLEXT, $this->phadintlext);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADFAXNBR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADFAXNBR, $this->phadfaxnbr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADIFAXNBR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADIFAXNBR, $this->phadifaxnbr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADCELLNBR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADCELLNBR, $this->phadcellnbr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADICELLNBR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADICELLNBR, $this->phadicellnbr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADHOMENBR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADHOMENBR, $this->phadhomenbr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADIHOMENBR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADIHOMENBR, $this->phadihomenbr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADWEBADDR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADWEBADDR, $this->phadwebaddr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADEMAILADDR)) {
            $criteria->add(PhoneBookTableMap::COL_PHADEMAILADDR, $this->phademailaddr);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADNAME)) {
            $criteria->add(PhoneBookTableMap::COL_PHADNAME, $this->phadname);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_PHADCONTNAME)) {
            $criteria->add(PhoneBookTableMap::COL_PHADCONTNAME, $this->phadcontname);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_DATEUPDTD)) {
            $criteria->add(PhoneBookTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_TIMEUPDTD)) {
            $criteria->add(PhoneBookTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(PhoneBookTableMap::COL_DUMMY)) {
            $criteria->add(PhoneBookTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildPhoneBookQuery::create();
        $criteria->add(PhoneBookTableMap::COL_PHADTYPE, $this->phadtype);
        $criteria->add(PhoneBookTableMap::COL_PHADID, $this->phadid);
        $criteria->add(PhoneBookTableMap::COL_PHADSUBID, $this->phadsubid);
        $criteria->add(PhoneBookTableMap::COL_PHADSUBIDSEQ, $this->phadsubidseq);
        $criteria->add(PhoneBookTableMap::COL_PHADCONT, $this->phadcont);

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
        $validPk = null !== $this->getPhadtype() &&
            null !== $this->getPhadid() &&
            null !== $this->getPhadsubid() &&
            null !== $this->getPhadsubidseq() &&
            null !== $this->getPhadcont();

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
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getPhadtype();
        $pks[1] = $this->getPhadid();
        $pks[2] = $this->getPhadsubid();
        $pks[3] = $this->getPhadsubidseq();
        $pks[4] = $this->getPhadcont();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param      array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setPhadtype($keys[0]);
        $this->setPhadid($keys[1]);
        $this->setPhadsubid($keys[2]);
        $this->setPhadsubidseq($keys[3]);
        $this->setPhadcont($keys[4]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getPhadtype()) && (null === $this->getPhadid()) && (null === $this->getPhadsubid()) && (null === $this->getPhadsubidseq()) && (null === $this->getPhadcont());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \PhoneBook (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPhadtype($this->getPhadtype());
        $copyObj->setPhadid($this->getPhadid());
        $copyObj->setPhadsubid($this->getPhadsubid());
        $copyObj->setPhadsubidseq($this->getPhadsubidseq());
        $copyObj->setPhadcont($this->getPhadcont());
        $copyObj->setPhadintl($this->getPhadintl());
        $copyObj->setPhadtelenbr($this->getPhadtelenbr());
        $copyObj->setPhadteleext($this->getPhadteleext());
        $copyObj->setPhadintlnbr($this->getPhadintlnbr());
        $copyObj->setPhadintlext($this->getPhadintlext());
        $copyObj->setPhadfaxnbr($this->getPhadfaxnbr());
        $copyObj->setPhadifaxnbr($this->getPhadifaxnbr());
        $copyObj->setPhadcellnbr($this->getPhadcellnbr());
        $copyObj->setPhadicellnbr($this->getPhadicellnbr());
        $copyObj->setPhadhomenbr($this->getPhadhomenbr());
        $copyObj->setPhadihomenbr($this->getPhadihomenbr());
        $copyObj->setPhadwebaddr($this->getPhadwebaddr());
        $copyObj->setPhademailaddr($this->getPhademailaddr());
        $copyObj->setPhadname($this->getPhadname());
        $copyObj->setPhadcontname($this->getPhadcontname());
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
     * @return \PhoneBook Clone of current object.
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
        $this->phadtype = null;
        $this->phadid = null;
        $this->phadsubid = null;
        $this->phadsubidseq = null;
        $this->phadcont = null;
        $this->phadintl = null;
        $this->phadtelenbr = null;
        $this->phadteleext = null;
        $this->phadintlnbr = null;
        $this->phadintlext = null;
        $this->phadfaxnbr = null;
        $this->phadifaxnbr = null;
        $this->phadcellnbr = null;
        $this->phadicellnbr = null;
        $this->phadhomenbr = null;
        $this->phadihomenbr = null;
        $this->phadwebaddr = null;
        $this->phademailaddr = null;
        $this->phadname = null;
        $this->phadcontname = null;
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
        return (string) $this->exportTo(PhoneBookTableMap::DEFAULT_STRING_FORMAT);
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
