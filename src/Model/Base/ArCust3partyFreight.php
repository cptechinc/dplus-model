<?php

namespace Base;

use \ArCust3partyFreightQuery as ChildArCust3partyFreightQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \Exception;
use \PDO;
use Map\ArCust3partyFreightTableMap;
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
 * Base class that represents a row from the 'ar_3party' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ArCust3partyFreight implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ArCust3partyFreightTableMap';


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
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the ar3pacctnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pacctnbr;

    /**
     * The value for the ar3pname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pname;

    /**
     * The value for the ar3padr1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3padr1;

    /**
     * The value for the ar3padr2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3padr2;

    /**
     * The value for the ar3padr3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3padr3;

    /**
     * The value for the ar3pctry field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pctry;

    /**
     * The value for the ar3pcity field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pcity;

    /**
     * The value for the ar3pstat field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pstat;

    /**
     * The value for the ar3pzipcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pzipcode;

    /**
     * The value for the ar3pintl field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $ar3pintl;

    /**
     * The value for the ar3ptelenbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3ptelenbr;

    /**
     * The value for the ar3pteleext field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pteleext;

    /**
     * The value for the ar3pitelnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pitelnbr;

    /**
     * The value for the ar3pitelext field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pitelext;

    /**
     * The value for the ar3pfaxnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pfaxnbr;

    /**
     * The value for the ar3pifaxnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ar3pifaxnbr;

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
     * @var        ChildCustomer
     */
    protected $aCustomer;

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
        $this->arcucustid = '';
        $this->ar3pacctnbr = '';
        $this->ar3pname = '';
        $this->ar3padr1 = '';
        $this->ar3padr2 = '';
        $this->ar3padr3 = '';
        $this->ar3pctry = '';
        $this->ar3pcity = '';
        $this->ar3pstat = '';
        $this->ar3pzipcode = '';
        $this->ar3pintl = 'N';
        $this->ar3ptelenbr = '';
        $this->ar3pteleext = '';
        $this->ar3pitelnbr = '';
        $this->ar3pitelext = '';
        $this->ar3pfaxnbr = '';
        $this->ar3pifaxnbr = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\ArCust3partyFreight object.
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
     * Compares this with another <code>ArCust3partyFreight</code> instance.  If
     * <code>obj</code> is an instance of <code>ArCust3partyFreight</code>, delegates to
     * <code>equals(ArCust3partyFreight)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ArCust3partyFreight The current object, for fluid interface
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [ar3pacctnbr] column value.
     *
     * @return string
     */
    public function getAr3pacctnbr()
    {
        return $this->ar3pacctnbr;
    }

    /**
     * Get the [ar3pname] column value.
     *
     * @return string
     */
    public function getAr3pname()
    {
        return $this->ar3pname;
    }

    /**
     * Get the [ar3padr1] column value.
     *
     * @return string
     */
    public function getAr3padr1()
    {
        return $this->ar3padr1;
    }

    /**
     * Get the [ar3padr2] column value.
     *
     * @return string
     */
    public function getAr3padr2()
    {
        return $this->ar3padr2;
    }

    /**
     * Get the [ar3padr3] column value.
     *
     * @return string
     */
    public function getAr3padr3()
    {
        return $this->ar3padr3;
    }

    /**
     * Get the [ar3pctry] column value.
     *
     * @return string
     */
    public function getAr3pctry()
    {
        return $this->ar3pctry;
    }

    /**
     * Get the [ar3pcity] column value.
     *
     * @return string
     */
    public function getAr3pcity()
    {
        return $this->ar3pcity;
    }

    /**
     * Get the [ar3pstat] column value.
     *
     * @return string
     */
    public function getAr3pstat()
    {
        return $this->ar3pstat;
    }

    /**
     * Get the [ar3pzipcode] column value.
     *
     * @return string
     */
    public function getAr3pzipcode()
    {
        return $this->ar3pzipcode;
    }

    /**
     * Get the [ar3pintl] column value.
     *
     * @return string
     */
    public function getAr3pintl()
    {
        return $this->ar3pintl;
    }

    /**
     * Get the [ar3ptelenbr] column value.
     *
     * @return string
     */
    public function getAr3ptelenbr()
    {
        return $this->ar3ptelenbr;
    }

    /**
     * Get the [ar3pteleext] column value.
     *
     * @return string
     */
    public function getAr3pteleext()
    {
        return $this->ar3pteleext;
    }

    /**
     * Get the [ar3pitelnbr] column value.
     *
     * @return string
     */
    public function getAr3pitelnbr()
    {
        return $this->ar3pitelnbr;
    }

    /**
     * Get the [ar3pitelext] column value.
     *
     * @return string
     */
    public function getAr3pitelext()
    {
        return $this->ar3pitelext;
    }

    /**
     * Get the [ar3pfaxnbr] column value.
     *
     * @return string
     */
    public function getAr3pfaxnbr()
    {
        return $this->ar3pfaxnbr;
    }

    /**
     * Get the [ar3pifaxnbr] column value.
     *
     * @return string
     */
    public function getAr3pifaxnbr()
    {
        return $this->ar3pifaxnbr;
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
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [ar3pacctnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pacctnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pacctnbr !== $v) {
            $this->ar3pacctnbr = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PACCTNBR] = true;
        }

        return $this;
    } // setAr3pacctnbr()

    /**
     * Set the value of [ar3pname] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pname !== $v) {
            $this->ar3pname = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PNAME] = true;
        }

        return $this;
    } // setAr3pname()

    /**
     * Set the value of [ar3padr1] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3padr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3padr1 !== $v) {
            $this->ar3padr1 = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PADR1] = true;
        }

        return $this;
    } // setAr3padr1()

    /**
     * Set the value of [ar3padr2] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3padr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3padr2 !== $v) {
            $this->ar3padr2 = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PADR2] = true;
        }

        return $this;
    } // setAr3padr2()

    /**
     * Set the value of [ar3padr3] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3padr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3padr3 !== $v) {
            $this->ar3padr3 = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PADR3] = true;
        }

        return $this;
    } // setAr3padr3()

    /**
     * Set the value of [ar3pctry] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pctry !== $v) {
            $this->ar3pctry = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PCTRY] = true;
        }

        return $this;
    } // setAr3pctry()

    /**
     * Set the value of [ar3pcity] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pcity !== $v) {
            $this->ar3pcity = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PCITY] = true;
        }

        return $this;
    } // setAr3pcity()

    /**
     * Set the value of [ar3pstat] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pstat !== $v) {
            $this->ar3pstat = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PSTAT] = true;
        }

        return $this;
    } // setAr3pstat()

    /**
     * Set the value of [ar3pzipcode] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pzipcode !== $v) {
            $this->ar3pzipcode = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PZIPCODE] = true;
        }

        return $this;
    } // setAr3pzipcode()

    /**
     * Set the value of [ar3pintl] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pintl !== $v) {
            $this->ar3pintl = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PINTL] = true;
        }

        return $this;
    } // setAr3pintl()

    /**
     * Set the value of [ar3ptelenbr] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3ptelenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3ptelenbr !== $v) {
            $this->ar3ptelenbr = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PTELENBR] = true;
        }

        return $this;
    } // setAr3ptelenbr()

    /**
     * Set the value of [ar3pteleext] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pteleext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pteleext !== $v) {
            $this->ar3pteleext = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PTELEEXT] = true;
        }

        return $this;
    } // setAr3pteleext()

    /**
     * Set the value of [ar3pitelnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pitelnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pitelnbr !== $v) {
            $this->ar3pitelnbr = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PITELNBR] = true;
        }

        return $this;
    } // setAr3pitelnbr()

    /**
     * Set the value of [ar3pitelext] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pitelext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pitelext !== $v) {
            $this->ar3pitelext = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PITELEXT] = true;
        }

        return $this;
    } // setAr3pitelext()

    /**
     * Set the value of [ar3pfaxnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pfaxnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pfaxnbr !== $v) {
            $this->ar3pfaxnbr = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PFAXNBR] = true;
        }

        return $this;
    } // setAr3pfaxnbr()

    /**
     * Set the value of [ar3pifaxnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setAr3pifaxnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ar3pifaxnbr !== $v) {
            $this->ar3pifaxnbr = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_AR3PIFAXNBR] = true;
        }

        return $this;
    } // setAr3pifaxnbr()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ArCust3partyFreightTableMap::COL_DUMMY] = true;
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
            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->ar3pacctnbr !== '') {
                return false;
            }

            if ($this->ar3pname !== '') {
                return false;
            }

            if ($this->ar3padr1 !== '') {
                return false;
            }

            if ($this->ar3padr2 !== '') {
                return false;
            }

            if ($this->ar3padr3 !== '') {
                return false;
            }

            if ($this->ar3pctry !== '') {
                return false;
            }

            if ($this->ar3pcity !== '') {
                return false;
            }

            if ($this->ar3pstat !== '') {
                return false;
            }

            if ($this->ar3pzipcode !== '') {
                return false;
            }

            if ($this->ar3pintl !== 'N') {
                return false;
            }

            if ($this->ar3ptelenbr !== '') {
                return false;
            }

            if ($this->ar3pteleext !== '') {
                return false;
            }

            if ($this->ar3pitelnbr !== '') {
                return false;
            }

            if ($this->ar3pitelext !== '') {
                return false;
            }

            if ($this->ar3pfaxnbr !== '') {
                return false;
            }

            if ($this->ar3pifaxnbr !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pacctnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pacctnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3padr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3padr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3padr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3padr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3padr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3padr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3ptelenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3ptelenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pteleext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pteleext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pitelnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pitelnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pitelext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pitelext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pfaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pfaxnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Ar3pifaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ar3pifaxnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ArCust3partyFreightTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 20; // 20 = ArCust3partyFreightTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ArCust3partyFreight'), 0, $e);
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
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
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
            $con = Propel::getServiceContainer()->getReadConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildArCust3partyFreightQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ArCust3partyFreight::setDeleted()
     * @see ArCust3partyFreight::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildArCust3partyFreightQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
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
                ArCust3partyFreightTableMap::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

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
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PACCTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pAcctNbr';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PNAME)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pName';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PADR1)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pAdr1';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PADR2)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pAdr2';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PADR3)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pAdr3';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pCtry';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PCITY)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pCity';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pStat';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pZipCode';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PINTL)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pIntl';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PTELENBR)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pTeleNbr';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PTELEEXT)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pTeleExt';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PITELNBR)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pItelNbr';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PITELEXT)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pItelExt';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pFaxNbr';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PIFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'Ar3pIfaxNbr';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_3party (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'Ar3pAcctNbr':
                        $stmt->bindValue($identifier, $this->ar3pacctnbr, PDO::PARAM_STR);
                        break;
                    case 'Ar3pName':
                        $stmt->bindValue($identifier, $this->ar3pname, PDO::PARAM_STR);
                        break;
                    case 'Ar3pAdr1':
                        $stmt->bindValue($identifier, $this->ar3padr1, PDO::PARAM_STR);
                        break;
                    case 'Ar3pAdr2':
                        $stmt->bindValue($identifier, $this->ar3padr2, PDO::PARAM_STR);
                        break;
                    case 'Ar3pAdr3':
                        $stmt->bindValue($identifier, $this->ar3padr3, PDO::PARAM_STR);
                        break;
                    case 'Ar3pCtry':
                        $stmt->bindValue($identifier, $this->ar3pctry, PDO::PARAM_STR);
                        break;
                    case 'Ar3pCity':
                        $stmt->bindValue($identifier, $this->ar3pcity, PDO::PARAM_STR);
                        break;
                    case 'Ar3pStat':
                        $stmt->bindValue($identifier, $this->ar3pstat, PDO::PARAM_STR);
                        break;
                    case 'Ar3pZipCode':
                        $stmt->bindValue($identifier, $this->ar3pzipcode, PDO::PARAM_STR);
                        break;
                    case 'Ar3pIntl':
                        $stmt->bindValue($identifier, $this->ar3pintl, PDO::PARAM_STR);
                        break;
                    case 'Ar3pTeleNbr':
                        $stmt->bindValue($identifier, $this->ar3ptelenbr, PDO::PARAM_STR);
                        break;
                    case 'Ar3pTeleExt':
                        $stmt->bindValue($identifier, $this->ar3pteleext, PDO::PARAM_STR);
                        break;
                    case 'Ar3pItelNbr':
                        $stmt->bindValue($identifier, $this->ar3pitelnbr, PDO::PARAM_STR);
                        break;
                    case 'Ar3pItelExt':
                        $stmt->bindValue($identifier, $this->ar3pitelext, PDO::PARAM_STR);
                        break;
                    case 'Ar3pFaxNbr':
                        $stmt->bindValue($identifier, $this->ar3pfaxnbr, PDO::PARAM_STR);
                        break;
                    case 'Ar3pIfaxNbr':
                        $stmt->bindValue($identifier, $this->ar3pifaxnbr, PDO::PARAM_STR);
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
        $pos = ArCust3partyFreightTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArcucustid();
                break;
            case 1:
                return $this->getAr3pacctnbr();
                break;
            case 2:
                return $this->getAr3pname();
                break;
            case 3:
                return $this->getAr3padr1();
                break;
            case 4:
                return $this->getAr3padr2();
                break;
            case 5:
                return $this->getAr3padr3();
                break;
            case 6:
                return $this->getAr3pctry();
                break;
            case 7:
                return $this->getAr3pcity();
                break;
            case 8:
                return $this->getAr3pstat();
                break;
            case 9:
                return $this->getAr3pzipcode();
                break;
            case 10:
                return $this->getAr3pintl();
                break;
            case 11:
                return $this->getAr3ptelenbr();
                break;
            case 12:
                return $this->getAr3pteleext();
                break;
            case 13:
                return $this->getAr3pitelnbr();
                break;
            case 14:
                return $this->getAr3pitelext();
                break;
            case 15:
                return $this->getAr3pfaxnbr();
                break;
            case 16:
                return $this->getAr3pifaxnbr();
                break;
            case 17:
                return $this->getDateupdtd();
                break;
            case 18:
                return $this->getTimeupdtd();
                break;
            case 19:
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['ArCust3partyFreight'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ArCust3partyFreight'][$this->hashCode()] = true;
        $keys = ArCust3partyFreightTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getAr3pacctnbr(),
            $keys[2] => $this->getAr3pname(),
            $keys[3] => $this->getAr3padr1(),
            $keys[4] => $this->getAr3padr2(),
            $keys[5] => $this->getAr3padr3(),
            $keys[6] => $this->getAr3pctry(),
            $keys[7] => $this->getAr3pcity(),
            $keys[8] => $this->getAr3pstat(),
            $keys[9] => $this->getAr3pzipcode(),
            $keys[10] => $this->getAr3pintl(),
            $keys[11] => $this->getAr3ptelenbr(),
            $keys[12] => $this->getAr3pteleext(),
            $keys[13] => $this->getAr3pitelnbr(),
            $keys[14] => $this->getAr3pitelext(),
            $keys[15] => $this->getAr3pfaxnbr(),
            $keys[16] => $this->getAr3pifaxnbr(),
            $keys[17] => $this->getDateupdtd(),
            $keys[18] => $this->getTimeupdtd(),
            $keys[19] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCustomer) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customer';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cust_mast';
                        break;
                    default:
                        $key = 'Customer';
                }

                $result[$key] = $this->aCustomer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
     * @return $this|\ArCust3partyFreight
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ArCust3partyFreightTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ArCust3partyFreight
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setAr3pacctnbr($value);
                break;
            case 2:
                $this->setAr3pname($value);
                break;
            case 3:
                $this->setAr3padr1($value);
                break;
            case 4:
                $this->setAr3padr2($value);
                break;
            case 5:
                $this->setAr3padr3($value);
                break;
            case 6:
                $this->setAr3pctry($value);
                break;
            case 7:
                $this->setAr3pcity($value);
                break;
            case 8:
                $this->setAr3pstat($value);
                break;
            case 9:
                $this->setAr3pzipcode($value);
                break;
            case 10:
                $this->setAr3pintl($value);
                break;
            case 11:
                $this->setAr3ptelenbr($value);
                break;
            case 12:
                $this->setAr3pteleext($value);
                break;
            case 13:
                $this->setAr3pitelnbr($value);
                break;
            case 14:
                $this->setAr3pitelext($value);
                break;
            case 15:
                $this->setAr3pfaxnbr($value);
                break;
            case 16:
                $this->setAr3pifaxnbr($value);
                break;
            case 17:
                $this->setDateupdtd($value);
                break;
            case 18:
                $this->setTimeupdtd($value);
                break;
            case 19:
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
        $keys = ArCust3partyFreightTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setAr3pacctnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setAr3pname($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setAr3padr1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setAr3padr2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setAr3padr3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setAr3pctry($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setAr3pcity($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setAr3pstat($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setAr3pzipcode($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setAr3pintl($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setAr3ptelenbr($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setAr3pteleext($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setAr3pitelnbr($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setAr3pitelext($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setAr3pfaxnbr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setAr3pifaxnbr($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setDateupdtd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setTimeupdtd($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setDummy($arr[$keys[19]]);
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
     * @return $this|\ArCust3partyFreight The current object, for fluid interface
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
        $criteria = new Criteria(ArCust3partyFreightTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_ARCUCUSTID)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PACCTNBR)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $this->ar3pacctnbr);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PNAME)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PNAME, $this->ar3pname);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PADR1)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PADR1, $this->ar3padr1);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PADR2)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PADR2, $this->ar3padr2);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PADR3)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PADR3, $this->ar3padr3);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PCTRY)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PCTRY, $this->ar3pctry);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PCITY)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PCITY, $this->ar3pcity);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PSTAT)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PSTAT, $this->ar3pstat);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PZIPCODE)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PZIPCODE, $this->ar3pzipcode);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PINTL)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PINTL, $this->ar3pintl);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PTELENBR)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PTELENBR, $this->ar3ptelenbr);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PTELEEXT)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PTELEEXT, $this->ar3pteleext);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PITELNBR)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PITELNBR, $this->ar3pitelnbr);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PITELEXT)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PITELEXT, $this->ar3pitelext);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PFAXNBR)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PFAXNBR, $this->ar3pfaxnbr);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_AR3PIFAXNBR)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_AR3PIFAXNBR, $this->ar3pifaxnbr);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_DATEUPDTD)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ArCust3partyFreightTableMap::COL_DUMMY)) {
            $criteria->add(ArCust3partyFreightTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildArCust3partyFreightQuery::create();
        $criteria->add(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $this->arcucustid);
        $criteria->add(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $this->ar3pacctnbr);

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
        $validPk = null !== $this->getArcucustid() &&
            null !== $this->getAr3pacctnbr();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation customer to table ar_cust_mast
        if ($this->aCustomer && $hash = spl_object_hash($this->aCustomer)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

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
        $pks[0] = $this->getArcucustid();
        $pks[1] = $this->getAr3pacctnbr();

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
        $this->setArcucustid($keys[0]);
        $this->setAr3pacctnbr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getArcucustid()) && (null === $this->getAr3pacctnbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ArCust3partyFreight (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setAr3pacctnbr($this->getAr3pacctnbr());
        $copyObj->setAr3pname($this->getAr3pname());
        $copyObj->setAr3padr1($this->getAr3padr1());
        $copyObj->setAr3padr2($this->getAr3padr2());
        $copyObj->setAr3padr3($this->getAr3padr3());
        $copyObj->setAr3pctry($this->getAr3pctry());
        $copyObj->setAr3pcity($this->getAr3pcity());
        $copyObj->setAr3pstat($this->getAr3pstat());
        $copyObj->setAr3pzipcode($this->getAr3pzipcode());
        $copyObj->setAr3pintl($this->getAr3pintl());
        $copyObj->setAr3ptelenbr($this->getAr3ptelenbr());
        $copyObj->setAr3pteleext($this->getAr3pteleext());
        $copyObj->setAr3pitelnbr($this->getAr3pitelnbr());
        $copyObj->setAr3pitelext($this->getAr3pitelext());
        $copyObj->setAr3pfaxnbr($this->getAr3pfaxnbr());
        $copyObj->setAr3pifaxnbr($this->getAr3pifaxnbr());
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
     * @return \ArCust3partyFreight Clone of current object.
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
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\ArCust3partyFreight The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addArCust3partyFreight($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomer object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCustomer The associated ChildCustomer object.
     * @throws PropelException
     */
    public function getCustomer(ConnectionInterface $con = null)
    {
        if ($this->aCustomer === null && (($this->arcucustid !== "" && $this->arcucustid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()
                ->filterByArCust3partyFreight($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addArCust3partyFreights($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeArCust3partyFreight($this);
        }
        $this->arcucustid = null;
        $this->ar3pacctnbr = null;
        $this->ar3pname = null;
        $this->ar3padr1 = null;
        $this->ar3padr2 = null;
        $this->ar3padr3 = null;
        $this->ar3pctry = null;
        $this->ar3pcity = null;
        $this->ar3pstat = null;
        $this->ar3pzipcode = null;
        $this->ar3pintl = null;
        $this->ar3ptelenbr = null;
        $this->ar3pteleext = null;
        $this->ar3pitelnbr = null;
        $this->ar3pitelext = null;
        $this->ar3pfaxnbr = null;
        $this->ar3pifaxnbr = null;
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

        $this->aCustomer = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArCust3partyFreightTableMap::DEFAULT_STRING_FORMAT);
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
