<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \InvSerialMaster as ChildInvSerialMaster;
use \InvSerialMasterQuery as ChildInvSerialMasterQuery;
use \InvSerialWarrantyQuery as ChildInvSerialWarrantyQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\InvSerialWarrantyTableMap;
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
 * Base class that represents a row from the 'inv_war_mast' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvSerialWarranty implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvSerialWarrantyTableMap';


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
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the sermsernbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sermsernbr;

    /**
     * The value for the warmsaledate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmsaledate;

    /**
     * The value for the warmownfname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmownfname;

    /**
     * The value for the warmownmname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmownmname;

    /**
     * The value for the warmownlname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmownlname;

    /**
     * The value for the warmownadr1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmownadr1;

    /**
     * The value for the warmownadr2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmownadr2;

    /**
     * The value for the warmownadr3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmownadr3;

    /**
     * The value for the warmowncity field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmowncity;

    /**
     * The value for the warmownstat field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmownstat;

    /**
     * The value for the warmownzip field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmownzip;

    /**
     * The value for the warmsordnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmsordnbr;

    /**
     * The value for the warminvcdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warminvcdate;

    /**
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arspsaleper1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the warmentrydate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmentrydate;

    /**
     * The value for the warmengsernbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmengsernbr;

    /**
     * The value for the warmenghorse field.
     *
     * Note: this column has a database default value of: '0.0'
     * @var        string
     */
    protected $warmenghorse;

    /**
     * The value for the warmengmodelyear field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmengmodelyear;

    /**
     * The value for the warmengdesc field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmengdesc;

    /**
     * The value for the warmphone1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmphone1;

    /**
     * The value for the warmphone2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmphone2;

    /**
     * The value for the warmemail field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmemail;

    /**
     * The value for the warmacorigwarrdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $warmacorigwarrdate;

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
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ChildInvSerialMaster
     */
    protected $aInvSerialMaster;

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
        $this->inititemnbr = '';
        $this->sermsernbr = '';
        $this->warmsaledate = '';
        $this->warmownfname = '';
        $this->warmownmname = '';
        $this->warmownlname = '';
        $this->warmownadr1 = '';
        $this->warmownadr2 = '';
        $this->warmownadr3 = '';
        $this->warmowncity = '';
        $this->warmownstat = '';
        $this->warmownzip = '';
        $this->warmsordnbr = '';
        $this->warminvcdate = '';
        $this->arcucustid = '';
        $this->arspsaleper1 = '';
        $this->warmentrydate = '';
        $this->warmengsernbr = '';
        $this->warmenghorse = '0.0';
        $this->warmengmodelyear = '';
        $this->warmengdesc = '';
        $this->warmphone1 = '';
        $this->warmphone2 = '';
        $this->warmemail = '';
        $this->warmacorigwarrdate = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvSerialWarranty object.
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
     * Compares this with another <code>InvSerialWarranty</code> instance.  If
     * <code>obj</code> is an instance of <code>InvSerialWarranty</code>, delegates to
     * <code>equals(InvSerialWarranty)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvSerialWarranty The current object, for fluid interface
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
     * Get the [inititemnbr] column value.
     *
     * @return string
     */
    public function getInititemnbr()
    {
        return $this->inititemnbr;
    }

    /**
     * Get the [sermsernbr] column value.
     *
     * @return string
     */
    public function getSermsernbr()
    {
        return $this->sermsernbr;
    }

    /**
     * Get the [warmsaledate] column value.
     *
     * @return string
     */
    public function getWarmsaledate()
    {
        return $this->warmsaledate;
    }

    /**
     * Get the [warmownfname] column value.
     *
     * @return string
     */
    public function getWarmownfname()
    {
        return $this->warmownfname;
    }

    /**
     * Get the [warmownmname] column value.
     *
     * @return string
     */
    public function getWarmownmname()
    {
        return $this->warmownmname;
    }

    /**
     * Get the [warmownlname] column value.
     *
     * @return string
     */
    public function getWarmownlname()
    {
        return $this->warmownlname;
    }

    /**
     * Get the [warmownadr1] column value.
     *
     * @return string
     */
    public function getWarmownadr1()
    {
        return $this->warmownadr1;
    }

    /**
     * Get the [warmownadr2] column value.
     *
     * @return string
     */
    public function getWarmownadr2()
    {
        return $this->warmownadr2;
    }

    /**
     * Get the [warmownadr3] column value.
     *
     * @return string
     */
    public function getWarmownadr3()
    {
        return $this->warmownadr3;
    }

    /**
     * Get the [warmowncity] column value.
     *
     * @return string
     */
    public function getWarmowncity()
    {
        return $this->warmowncity;
    }

    /**
     * Get the [warmownstat] column value.
     *
     * @return string
     */
    public function getWarmownstat()
    {
        return $this->warmownstat;
    }

    /**
     * Get the [warmownzip] column value.
     *
     * @return string
     */
    public function getWarmownzip()
    {
        return $this->warmownzip;
    }

    /**
     * Get the [warmsordnbr] column value.
     *
     * @return string
     */
    public function getWarmsordnbr()
    {
        return $this->warmsordnbr;
    }

    /**
     * Get the [warminvcdate] column value.
     *
     * @return string
     */
    public function getWarminvcdate()
    {
        return $this->warminvcdate;
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
     * Get the [arspsaleper1] column value.
     *
     * @return string
     */
    public function getArspsaleper1()
    {
        return $this->arspsaleper1;
    }

    /**
     * Get the [warmentrydate] column value.
     *
     * @return string
     */
    public function getWarmentrydate()
    {
        return $this->warmentrydate;
    }

    /**
     * Get the [warmengsernbr] column value.
     *
     * @return string
     */
    public function getWarmengsernbr()
    {
        return $this->warmengsernbr;
    }

    /**
     * Get the [warmenghorse] column value.
     *
     * @return string
     */
    public function getWarmenghorse()
    {
        return $this->warmenghorse;
    }

    /**
     * Get the [warmengmodelyear] column value.
     *
     * @return string
     */
    public function getWarmengmodelyear()
    {
        return $this->warmengmodelyear;
    }

    /**
     * Get the [warmengdesc] column value.
     *
     * @return string
     */
    public function getWarmengdesc()
    {
        return $this->warmengdesc;
    }

    /**
     * Get the [warmphone1] column value.
     *
     * @return string
     */
    public function getWarmphone1()
    {
        return $this->warmphone1;
    }

    /**
     * Get the [warmphone2] column value.
     *
     * @return string
     */
    public function getWarmphone2()
    {
        return $this->warmphone2;
    }

    /**
     * Get the [warmemail] column value.
     *
     * @return string
     */
    public function getWarmemail()
    {
        return $this->warmemail;
    }

    /**
     * Get the [warmacorigwarrdate] column value.
     *
     * @return string
     */
    public function getWarmacorigwarrdate()
    {
        return $this->warmacorigwarrdate;
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
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        if ($this->aInvSerialMaster !== null && $this->aInvSerialMaster->getInititemnbr() !== $v) {
            $this->aInvSerialMaster = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [sermsernbr] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setSermsernbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermsernbr !== $v) {
            $this->sermsernbr = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_SERMSERNBR] = true;
        }

        if ($this->aInvSerialMaster !== null && $this->aInvSerialMaster->getSermsernbr() !== $v) {
            $this->aInvSerialMaster = null;
        }

        return $this;
    } // setSermsernbr()

    /**
     * Set the value of [warmsaledate] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmsaledate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmsaledate !== $v) {
            $this->warmsaledate = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMSALEDATE] = true;
        }

        return $this;
    } // setWarmsaledate()

    /**
     * Set the value of [warmownfname] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmownfname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownfname !== $v) {
            $this->warmownfname = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNFNAME] = true;
        }

        return $this;
    } // setWarmownfname()

    /**
     * Set the value of [warmownmname] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmownmname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownmname !== $v) {
            $this->warmownmname = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNMNAME] = true;
        }

        return $this;
    } // setWarmownmname()

    /**
     * Set the value of [warmownlname] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmownlname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownlname !== $v) {
            $this->warmownlname = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNLNAME] = true;
        }

        return $this;
    } // setWarmownlname()

    /**
     * Set the value of [warmownadr1] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmownadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownadr1 !== $v) {
            $this->warmownadr1 = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNADR1] = true;
        }

        return $this;
    } // setWarmownadr1()

    /**
     * Set the value of [warmownadr2] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmownadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownadr2 !== $v) {
            $this->warmownadr2 = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNADR2] = true;
        }

        return $this;
    } // setWarmownadr2()

    /**
     * Set the value of [warmownadr3] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmownadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownadr3 !== $v) {
            $this->warmownadr3 = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNADR3] = true;
        }

        return $this;
    } // setWarmownadr3()

    /**
     * Set the value of [warmowncity] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmowncity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmowncity !== $v) {
            $this->warmowncity = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNCITY] = true;
        }

        return $this;
    } // setWarmowncity()

    /**
     * Set the value of [warmownstat] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmownstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownstat !== $v) {
            $this->warmownstat = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNSTAT] = true;
        }

        return $this;
    } // setWarmownstat()

    /**
     * Set the value of [warmownzip] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmownzip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownzip !== $v) {
            $this->warmownzip = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMOWNZIP] = true;
        }

        return $this;
    } // setWarmownzip()

    /**
     * Set the value of [warmsordnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmsordnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmsordnbr !== $v) {
            $this->warmsordnbr = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMSORDNBR] = true;
        }

        return $this;
    } // setWarmsordnbr()

    /**
     * Set the value of [warminvcdate] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarminvcdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warminvcdate !== $v) {
            $this->warminvcdate = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMINVCDATE] = true;
        }

        return $this;
    } // setWarminvcdate()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [warmentrydate] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmentrydate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmentrydate !== $v) {
            $this->warmentrydate = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMENTRYDATE] = true;
        }

        return $this;
    } // setWarmentrydate()

    /**
     * Set the value of [warmengsernbr] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmengsernbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmengsernbr !== $v) {
            $this->warmengsernbr = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMENGSERNBR] = true;
        }

        return $this;
    } // setWarmengsernbr()

    /**
     * Set the value of [warmenghorse] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmenghorse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmenghorse !== $v) {
            $this->warmenghorse = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMENGHORSE] = true;
        }

        return $this;
    } // setWarmenghorse()

    /**
     * Set the value of [warmengmodelyear] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmengmodelyear($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmengmodelyear !== $v) {
            $this->warmengmodelyear = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMENGMODELYEAR] = true;
        }

        return $this;
    } // setWarmengmodelyear()

    /**
     * Set the value of [warmengdesc] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmengdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmengdesc !== $v) {
            $this->warmengdesc = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMENGDESC] = true;
        }

        return $this;
    } // setWarmengdesc()

    /**
     * Set the value of [warmphone1] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmphone1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmphone1 !== $v) {
            $this->warmphone1 = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMPHONE1] = true;
        }

        return $this;
    } // setWarmphone1()

    /**
     * Set the value of [warmphone2] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmphone2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmphone2 !== $v) {
            $this->warmphone2 = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMPHONE2] = true;
        }

        return $this;
    } // setWarmphone2()

    /**
     * Set the value of [warmemail] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmemail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmemail !== $v) {
            $this->warmemail = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMEMAIL] = true;
        }

        return $this;
    } // setWarmemail()

    /**
     * Set the value of [warmacorigwarrdate] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setWarmacorigwarrdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmacorigwarrdate !== $v) {
            $this->warmacorigwarrdate = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_WARMACORIGWARRDATE] = true;
        }

        return $this;
    } // setWarmacorigwarrdate()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvSerialWarrantyTableMap::COL_DUMMY] = true;
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
            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->sermsernbr !== '') {
                return false;
            }

            if ($this->warmsaledate !== '') {
                return false;
            }

            if ($this->warmownfname !== '') {
                return false;
            }

            if ($this->warmownmname !== '') {
                return false;
            }

            if ($this->warmownlname !== '') {
                return false;
            }

            if ($this->warmownadr1 !== '') {
                return false;
            }

            if ($this->warmownadr2 !== '') {
                return false;
            }

            if ($this->warmownadr3 !== '') {
                return false;
            }

            if ($this->warmowncity !== '') {
                return false;
            }

            if ($this->warmownstat !== '') {
                return false;
            }

            if ($this->warmownzip !== '') {
                return false;
            }

            if ($this->warmsordnbr !== '') {
                return false;
            }

            if ($this->warminvcdate !== '') {
                return false;
            }

            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->arspsaleper1 !== '') {
                return false;
            }

            if ($this->warmentrydate !== '') {
                return false;
            }

            if ($this->warmengsernbr !== '') {
                return false;
            }

            if ($this->warmenghorse !== '0.0') {
                return false;
            }

            if ($this->warmengmodelyear !== '') {
                return false;
            }

            if ($this->warmengdesc !== '') {
                return false;
            }

            if ($this->warmphone1 !== '') {
                return false;
            }

            if ($this->warmphone2 !== '') {
                return false;
            }

            if ($this->warmemail !== '') {
                return false;
            }

            if ($this->warmacorigwarrdate !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermsernbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmsaledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmsaledate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmownfname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownfname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmownmname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownmname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmownlname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownlname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmownadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmownadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmownadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmowncity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmowncity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmownstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmownzip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownzip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmsordnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmsordnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warminvcdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warminvcdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmentrydate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmentrydate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmengsernbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmengsernbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmenghorse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmenghorse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmengmodelyear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmengmodelyear = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmengdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmengdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmphone1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmphone1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmphone2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmphone2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmemail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmemail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Warmacorigwarrdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmacorigwarrdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : InvSerialWarrantyTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 28; // 28 = InvSerialWarrantyTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvSerialWarranty'), 0, $e);
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
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
        }
        if ($this->aInvSerialMaster !== null && $this->inititemnbr !== $this->aInvSerialMaster->getInititemnbr()) {
            $this->aInvSerialMaster = null;
        }
        if ($this->aInvSerialMaster !== null && $this->sermsernbr !== $this->aInvSerialMaster->getSermsernbr()) {
            $this->aInvSerialMaster = null;
        }
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
            $con = Propel::getServiceContainer()->getReadConnection(InvSerialWarrantyTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvSerialWarrantyQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aItemMasterItem = null;
            $this->aInvSerialMaster = null;
            $this->aCustomer = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvSerialWarranty::setDeleted()
     * @see InvSerialWarranty::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialWarrantyTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvSerialWarrantyQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialWarrantyTableMap::DATABASE_NAME);
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
                InvSerialWarrantyTableMap::addInstanceToPool($this);
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

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
            }

            if ($this->aInvSerialMaster !== null) {
                if ($this->aInvSerialMaster->isModified() || $this->aInvSerialMaster->isNew()) {
                    $affectedRows += $this->aInvSerialMaster->save($con);
                }
                $this->setInvSerialMaster($this->aInvSerialMaster);
            }

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
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_SERMSERNBR)) {
            $modifiedColumns[':p' . $index++]  = 'SermSerNbr';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMSALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmSaleDate';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNFNAME)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnFName';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNMNAME)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnMName';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNLNAME)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnLName';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNADR1)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnAdr1';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNADR2)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnAdr2';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNADR3)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnAdr3';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNCITY)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnCity';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnStat';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNZIP)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnZip';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMSORDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'WarmSordNbr';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMINVCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmInvcDate';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENTRYDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEntryDate';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENGSERNBR)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEngSerNbr';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENGHORSE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEngHorse';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENGMODELYEAR)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEngModelYear';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENGDESC)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEngDesc';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMPHONE1)) {
            $modifiedColumns[':p' . $index++]  = 'WarmPhone1';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMPHONE2)) {
            $modifiedColumns[':p' . $index++]  = 'WarmPhone2';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMEMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEmail';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMACORIGWARRDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmAcOrigWarrDate';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_war_mast (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'SermSerNbr':
                        $stmt->bindValue($identifier, $this->sermsernbr, PDO::PARAM_STR);
                        break;
                    case 'WarmSaleDate':
                        $stmt->bindValue($identifier, $this->warmsaledate, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnFName':
                        $stmt->bindValue($identifier, $this->warmownfname, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnMName':
                        $stmt->bindValue($identifier, $this->warmownmname, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnLName':
                        $stmt->bindValue($identifier, $this->warmownlname, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnAdr1':
                        $stmt->bindValue($identifier, $this->warmownadr1, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnAdr2':
                        $stmt->bindValue($identifier, $this->warmownadr2, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnAdr3':
                        $stmt->bindValue($identifier, $this->warmownadr3, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnCity':
                        $stmt->bindValue($identifier, $this->warmowncity, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnStat':
                        $stmt->bindValue($identifier, $this->warmownstat, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnZip':
                        $stmt->bindValue($identifier, $this->warmownzip, PDO::PARAM_STR);
                        break;
                    case 'WarmSordNbr':
                        $stmt->bindValue($identifier, $this->warmsordnbr, PDO::PARAM_STR);
                        break;
                    case 'WarmInvcDate':
                        $stmt->bindValue($identifier, $this->warminvcdate, PDO::PARAM_STR);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'WarmEntryDate':
                        $stmt->bindValue($identifier, $this->warmentrydate, PDO::PARAM_STR);
                        break;
                    case 'WarmEngSerNbr':
                        $stmt->bindValue($identifier, $this->warmengsernbr, PDO::PARAM_STR);
                        break;
                    case 'WarmEngHorse':
                        $stmt->bindValue($identifier, $this->warmenghorse, PDO::PARAM_STR);
                        break;
                    case 'WarmEngModelYear':
                        $stmt->bindValue($identifier, $this->warmengmodelyear, PDO::PARAM_STR);
                        break;
                    case 'WarmEngDesc':
                        $stmt->bindValue($identifier, $this->warmengdesc, PDO::PARAM_STR);
                        break;
                    case 'WarmPhone1':
                        $stmt->bindValue($identifier, $this->warmphone1, PDO::PARAM_STR);
                        break;
                    case 'WarmPhone2':
                        $stmt->bindValue($identifier, $this->warmphone2, PDO::PARAM_STR);
                        break;
                    case 'WarmEmail':
                        $stmt->bindValue($identifier, $this->warmemail, PDO::PARAM_STR);
                        break;
                    case 'WarmAcOrigWarrDate':
                        $stmt->bindValue($identifier, $this->warmacorigwarrdate, PDO::PARAM_STR);
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
        $pos = InvSerialWarrantyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInititemnbr();
                break;
            case 1:
                return $this->getSermsernbr();
                break;
            case 2:
                return $this->getWarmsaledate();
                break;
            case 3:
                return $this->getWarmownfname();
                break;
            case 4:
                return $this->getWarmownmname();
                break;
            case 5:
                return $this->getWarmownlname();
                break;
            case 6:
                return $this->getWarmownadr1();
                break;
            case 7:
                return $this->getWarmownadr2();
                break;
            case 8:
                return $this->getWarmownadr3();
                break;
            case 9:
                return $this->getWarmowncity();
                break;
            case 10:
                return $this->getWarmownstat();
                break;
            case 11:
                return $this->getWarmownzip();
                break;
            case 12:
                return $this->getWarmsordnbr();
                break;
            case 13:
                return $this->getWarminvcdate();
                break;
            case 14:
                return $this->getArcucustid();
                break;
            case 15:
                return $this->getArspsaleper1();
                break;
            case 16:
                return $this->getWarmentrydate();
                break;
            case 17:
                return $this->getWarmengsernbr();
                break;
            case 18:
                return $this->getWarmenghorse();
                break;
            case 19:
                return $this->getWarmengmodelyear();
                break;
            case 20:
                return $this->getWarmengdesc();
                break;
            case 21:
                return $this->getWarmphone1();
                break;
            case 22:
                return $this->getWarmphone2();
                break;
            case 23:
                return $this->getWarmemail();
                break;
            case 24:
                return $this->getWarmacorigwarrdate();
                break;
            case 25:
                return $this->getDateupdtd();
                break;
            case 26:
                return $this->getTimeupdtd();
                break;
            case 27:
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

        if (isset($alreadyDumpedObjects['InvSerialWarranty'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvSerialWarranty'][$this->hashCode()] = true;
        $keys = InvSerialWarrantyTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getSermsernbr(),
            $keys[2] => $this->getWarmsaledate(),
            $keys[3] => $this->getWarmownfname(),
            $keys[4] => $this->getWarmownmname(),
            $keys[5] => $this->getWarmownlname(),
            $keys[6] => $this->getWarmownadr1(),
            $keys[7] => $this->getWarmownadr2(),
            $keys[8] => $this->getWarmownadr3(),
            $keys[9] => $this->getWarmowncity(),
            $keys[10] => $this->getWarmownstat(),
            $keys[11] => $this->getWarmownzip(),
            $keys[12] => $this->getWarmsordnbr(),
            $keys[13] => $this->getWarminvcdate(),
            $keys[14] => $this->getArcucustid(),
            $keys[15] => $this->getArspsaleper1(),
            $keys[16] => $this->getWarmentrydate(),
            $keys[17] => $this->getWarmengsernbr(),
            $keys[18] => $this->getWarmenghorse(),
            $keys[19] => $this->getWarmengmodelyear(),
            $keys[20] => $this->getWarmengdesc(),
            $keys[21] => $this->getWarmphone1(),
            $keys[22] => $this->getWarmphone2(),
            $keys[23] => $this->getWarmemail(),
            $keys[24] => $this->getWarmacorigwarrdate(),
            $keys[25] => $this->getDateupdtd(),
            $keys[26] => $this->getTimeupdtd(),
            $keys[27] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aItemMasterItem) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemMasterItem';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_item_mast';
                        break;
                    default:
                        $key = 'ItemMasterItem';
                }

                $result[$key] = $this->aItemMasterItem->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvSerialMaster) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invSerialMaster';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_ser_mast';
                        break;
                    default:
                        $key = 'InvSerialMaster';
                }

                $result[$key] = $this->aInvSerialMaster->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
     * @return $this|\InvSerialWarranty
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvSerialWarrantyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvSerialWarranty
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setSermsernbr($value);
                break;
            case 2:
                $this->setWarmsaledate($value);
                break;
            case 3:
                $this->setWarmownfname($value);
                break;
            case 4:
                $this->setWarmownmname($value);
                break;
            case 5:
                $this->setWarmownlname($value);
                break;
            case 6:
                $this->setWarmownadr1($value);
                break;
            case 7:
                $this->setWarmownadr2($value);
                break;
            case 8:
                $this->setWarmownadr3($value);
                break;
            case 9:
                $this->setWarmowncity($value);
                break;
            case 10:
                $this->setWarmownstat($value);
                break;
            case 11:
                $this->setWarmownzip($value);
                break;
            case 12:
                $this->setWarmsordnbr($value);
                break;
            case 13:
                $this->setWarminvcdate($value);
                break;
            case 14:
                $this->setArcucustid($value);
                break;
            case 15:
                $this->setArspsaleper1($value);
                break;
            case 16:
                $this->setWarmentrydate($value);
                break;
            case 17:
                $this->setWarmengsernbr($value);
                break;
            case 18:
                $this->setWarmenghorse($value);
                break;
            case 19:
                $this->setWarmengmodelyear($value);
                break;
            case 20:
                $this->setWarmengdesc($value);
                break;
            case 21:
                $this->setWarmphone1($value);
                break;
            case 22:
                $this->setWarmphone2($value);
                break;
            case 23:
                $this->setWarmemail($value);
                break;
            case 24:
                $this->setWarmacorigwarrdate($value);
                break;
            case 25:
                $this->setDateupdtd($value);
                break;
            case 26:
                $this->setTimeupdtd($value);
                break;
            case 27:
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
        $keys = InvSerialWarrantyTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setSermsernbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setWarmsaledate($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setWarmownfname($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setWarmownmname($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setWarmownlname($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setWarmownadr1($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setWarmownadr2($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setWarmownadr3($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setWarmowncity($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setWarmownstat($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setWarmownzip($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setWarmsordnbr($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setWarminvcdate($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArcucustid($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArspsaleper1($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setWarmentrydate($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setWarmengsernbr($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setWarmenghorse($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setWarmengmodelyear($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setWarmengdesc($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setWarmphone1($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setWarmphone2($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setWarmemail($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setWarmacorigwarrdate($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setDateupdtd($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setTimeupdtd($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setDummy($arr[$keys[27]]);
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
     * @return $this|\InvSerialWarranty The current object, for fluid interface
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
        $criteria = new Criteria(InvSerialWarrantyTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_SERMSERNBR)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_SERMSERNBR, $this->sermsernbr);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMSALEDATE)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMSALEDATE, $this->warmsaledate);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNFNAME)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNFNAME, $this->warmownfname);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNMNAME)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNMNAME, $this->warmownmname);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNLNAME)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNLNAME, $this->warmownlname);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNADR1)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNADR1, $this->warmownadr1);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNADR2)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNADR2, $this->warmownadr2);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNADR3)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNADR3, $this->warmownadr3);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNCITY)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNCITY, $this->warmowncity);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNSTAT)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNSTAT, $this->warmownstat);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMOWNZIP)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMOWNZIP, $this->warmownzip);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMSORDNBR)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMSORDNBR, $this->warmsordnbr);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMINVCDATE)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMINVCDATE, $this->warminvcdate);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_ARCUCUSTID)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENTRYDATE)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMENTRYDATE, $this->warmentrydate);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENGSERNBR)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMENGSERNBR, $this->warmengsernbr);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENGHORSE)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMENGHORSE, $this->warmenghorse);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENGMODELYEAR)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMENGMODELYEAR, $this->warmengmodelyear);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMENGDESC)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMENGDESC, $this->warmengdesc);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMPHONE1)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMPHONE1, $this->warmphone1);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMPHONE2)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMPHONE2, $this->warmphone2);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMEMAIL)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMEMAIL, $this->warmemail);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_WARMACORIGWARRDATE)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_WARMACORIGWARRDATE, $this->warmacorigwarrdate);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvSerialWarrantyTableMap::COL_DUMMY)) {
            $criteria->add(InvSerialWarrantyTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvSerialWarrantyQuery::create();
        $criteria->add(InvSerialWarrantyTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvSerialWarrantyTableMap::COL_SERMSERNBR, $this->sermsernbr);

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
        $validPk = null !== $this->getInititemnbr() &&
            null !== $this->getSermsernbr();

        $validPrimaryKeyFKs = 3;
        $primaryKeyFKs = [];

        //relation item to table inv_item_mast
        if ($this->aItemMasterItem && $hash = spl_object_hash($this->aItemMasterItem)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation serial to table inv_ser_mast
        if ($this->aInvSerialMaster && $hash = spl_object_hash($this->aInvSerialMaster)) {
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
        $pks[0] = $this->getInititemnbr();
        $pks[1] = $this->getSermsernbr();

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
        $this->setInititemnbr($keys[0]);
        $this->setSermsernbr($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInititemnbr()) && (null === $this->getSermsernbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvSerialWarranty (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setSermsernbr($this->getSermsernbr());
        $copyObj->setWarmsaledate($this->getWarmsaledate());
        $copyObj->setWarmownfname($this->getWarmownfname());
        $copyObj->setWarmownmname($this->getWarmownmname());
        $copyObj->setWarmownlname($this->getWarmownlname());
        $copyObj->setWarmownadr1($this->getWarmownadr1());
        $copyObj->setWarmownadr2($this->getWarmownadr2());
        $copyObj->setWarmownadr3($this->getWarmownadr3());
        $copyObj->setWarmowncity($this->getWarmowncity());
        $copyObj->setWarmownstat($this->getWarmownstat());
        $copyObj->setWarmownzip($this->getWarmownzip());
        $copyObj->setWarmsordnbr($this->getWarmsordnbr());
        $copyObj->setWarminvcdate($this->getWarminvcdate());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setWarmentrydate($this->getWarmentrydate());
        $copyObj->setWarmengsernbr($this->getWarmengsernbr());
        $copyObj->setWarmenghorse($this->getWarmenghorse());
        $copyObj->setWarmengmodelyear($this->getWarmengmodelyear());
        $copyObj->setWarmengdesc($this->getWarmengdesc());
        $copyObj->setWarmphone1($this->getWarmphone1());
        $copyObj->setWarmphone2($this->getWarmphone2());
        $copyObj->setWarmemail($this->getWarmemail());
        $copyObj->setWarmacorigwarrdate($this->getWarmacorigwarrdate());
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
     * @return \InvSerialWarranty Clone of current object.
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
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v !== null) {
            $v->addInvSerialWarranty($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildItemMasterItem object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildItemMasterItem The associated ChildItemMasterItem object.
     * @throws PropelException
     */
    public function getItemMasterItem(ConnectionInterface $con = null)
    {
        if ($this->aItemMasterItem === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null))) {
            $this->aItemMasterItem = ChildItemMasterItemQuery::create()->findPk($this->inititemnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aItemMasterItem->addInvSerialWarranties($this);
             */
        }

        return $this->aItemMasterItem;
    }

    /**
     * Declares an association between this object and a ChildInvSerialMaster object.
     *
     * @param  ChildInvSerialMaster $v
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvSerialMaster(ChildInvSerialMaster $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        if ($v === null) {
            $this->setSermsernbr('');
        } else {
            $this->setSermsernbr($v->getSermsernbr());
        }

        $this->aInvSerialMaster = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setInvSerialWarranty($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvSerialMaster object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvSerialMaster The associated ChildInvSerialMaster object.
     * @throws PropelException
     */
    public function getInvSerialMaster(ConnectionInterface $con = null)
    {
        if ($this->aInvSerialMaster === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null) && ($this->sermsernbr !== "" && $this->sermsernbr !== null))) {
            $this->aInvSerialMaster = ChildInvSerialMasterQuery::create()->findPk(array($this->inititemnbr, $this->sermsernbr), $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aInvSerialMaster->setInvSerialWarranty($this);
        }

        return $this->aInvSerialMaster;
    }

    /**
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\InvSerialWarranty The current object (for fluent API support)
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
            $v->addInvSerialWarranty($this);
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
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->arcucustid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addInvSerialWarranties($this);
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
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeInvSerialWarranty($this);
        }
        if (null !== $this->aInvSerialMaster) {
            $this->aInvSerialMaster->removeInvSerialWarranty($this);
        }
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeInvSerialWarranty($this);
        }
        $this->inititemnbr = null;
        $this->sermsernbr = null;
        $this->warmsaledate = null;
        $this->warmownfname = null;
        $this->warmownmname = null;
        $this->warmownlname = null;
        $this->warmownadr1 = null;
        $this->warmownadr2 = null;
        $this->warmownadr3 = null;
        $this->warmowncity = null;
        $this->warmownstat = null;
        $this->warmownzip = null;
        $this->warmsordnbr = null;
        $this->warminvcdate = null;
        $this->arcucustid = null;
        $this->arspsaleper1 = null;
        $this->warmentrydate = null;
        $this->warmengsernbr = null;
        $this->warmenghorse = null;
        $this->warmengmodelyear = null;
        $this->warmengdesc = null;
        $this->warmphone1 = null;
        $this->warmphone2 = null;
        $this->warmemail = null;
        $this->warmacorigwarrdate = null;
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

        $this->aItemMasterItem = null;
        $this->aInvSerialMaster = null;
        $this->aCustomer = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvSerialWarrantyTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // return parent::preSave($con);
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
            // return parent::preInsert($con);
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
            // return parent::preUpdate($con);
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
            // return parent::preDelete($con);
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
