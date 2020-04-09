<?php

namespace Base;

use \CustomerTermsCodeQuery as ChildCustomerTermsCodeQuery;
use \Exception;
use \PDO;
use Map\CustomerTermsCodeTableMap;
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
 * Base class that represents a row from the 'ar_term_code' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class CustomerTermsCode implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\CustomerTermsCodeTableMap';


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
     * The value for the artmtermcd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artmtermcd;

    /**
     * The value for the artmtermdesc field.
     *
     * @var        string
     */
    protected $artmtermdesc;

    /**
     * The value for the artmmethod field.
     *
     * @var        string
     */
    protected $artmmethod;

    /**
     * The value for the artmtype field.
     *
     * @var        string
     */
    protected $artmtype;

    /**
     * The value for the artmhold field.
     *
     * @var        string
     */
    protected $artmhold;

    /**
     * The value for the artmexpiredate field.
     *
     * @var        string
     */
    protected $artmexpiredate;

    /**
     * The value for the artmfrtallow field.
     *
     * @var        string
     */
    protected $artmfrtallow;

    /**
     * The value for the artmccprefix field.
     *
     * @var        string
     */
    protected $artmccprefix;

    /**
     * The value for the artmsplit1 field.
     *
     * @var        string
     */
    protected $artmsplit1;

    /**
     * The value for the artmorderpct1 field.
     *
     * @var        string
     */
    protected $artmorderpct1;

    /**
     * The value for the artmdiscpct1 field.
     *
     * @var        string
     */
    protected $artmdiscpct1;

    /**
     * The value for the artmdiscdays1 field.
     *
     * @var        int
     */
    protected $artmdiscdays1;

    /**
     * The value for the artmdiscday1 field.
     *
     * @var        string
     */
    protected $artmdiscday1;

    /**
     * The value for the artmdiscdate1 field.
     *
     * @var        string
     */
    protected $artmdiscdate1;

    /**
     * The value for the artmduedays1 field.
     *
     * @var        int
     */
    protected $artmduedays1;

    /**
     * The value for the artmdueday1 field.
     *
     * @var        string
     */
    protected $artmdueday1;

    /**
     * The value for the artmplusmonths1 field.
     *
     * @var        int
     */
    protected $artmplusmonths1;

    /**
     * The value for the artmduedate1 field.
     *
     * @var        string
     */
    protected $artmduedate1;

    /**
     * The value for the artmplusyear1 field.
     *
     * @var        string
     */
    protected $artmplusyear1;

    /**
     * The value for the artmsplit2 field.
     *
     * @var        string
     */
    protected $artmsplit2;

    /**
     * The value for the artmorderpct2 field.
     *
     * @var        string
     */
    protected $artmorderpct2;

    /**
     * The value for the artmdiscpct2 field.
     *
     * @var        string
     */
    protected $artmdiscpct2;

    /**
     * The value for the artmdiscdays2 field.
     *
     * @var        int
     */
    protected $artmdiscdays2;

    /**
     * The value for the artmdiscday2 field.
     *
     * @var        string
     */
    protected $artmdiscday2;

    /**
     * The value for the artmdiscdate2 field.
     *
     * @var        string
     */
    protected $artmdiscdate2;

    /**
     * The value for the artmduedays2 field.
     *
     * @var        int
     */
    protected $artmduedays2;

    /**
     * The value for the artmdueday2 field.
     *
     * @var        string
     */
    protected $artmdueday2;

    /**
     * The value for the artmplusmonths2 field.
     *
     * @var        int
     */
    protected $artmplusmonths2;

    /**
     * The value for the artmduedate2 field.
     *
     * @var        string
     */
    protected $artmduedate2;

    /**
     * The value for the artmplusyear2 field.
     *
     * @var        string
     */
    protected $artmplusyear2;

    /**
     * The value for the artmsplit3 field.
     *
     * @var        string
     */
    protected $artmsplit3;

    /**
     * The value for the artmorderpct3 field.
     *
     * @var        string
     */
    protected $artmorderpct3;

    /**
     * The value for the artmdiscpct3 field.
     *
     * @var        string
     */
    protected $artmdiscpct3;

    /**
     * The value for the artmdiscdays3 field.
     *
     * @var        int
     */
    protected $artmdiscdays3;

    /**
     * The value for the artmdiscday3 field.
     *
     * @var        string
     */
    protected $artmdiscday3;

    /**
     * The value for the artmdiscdate3 field.
     *
     * @var        string
     */
    protected $artmdiscdate3;

    /**
     * The value for the artmduedays3 field.
     *
     * @var        int
     */
    protected $artmduedays3;

    /**
     * The value for the artmdueday3 field.
     *
     * @var        string
     */
    protected $artmdueday3;

    /**
     * The value for the artmplusmonths3 field.
     *
     * @var        int
     */
    protected $artmplusmonths3;

    /**
     * The value for the artmduedate3 field.
     *
     * @var        string
     */
    protected $artmduedate3;

    /**
     * The value for the artmplusyear3 field.
     *
     * @var        string
     */
    protected $artmplusyear3;

    /**
     * The value for the artmsplit4 field.
     *
     * @var        string
     */
    protected $artmsplit4;

    /**
     * The value for the artmorderpct4 field.
     *
     * @var        string
     */
    protected $artmorderpct4;

    /**
     * The value for the artmdiscpct4 field.
     *
     * @var        string
     */
    protected $artmdiscpct4;

    /**
     * The value for the artmdiscdays4 field.
     *
     * @var        int
     */
    protected $artmdiscdays4;

    /**
     * The value for the artmdiscday4 field.
     *
     * @var        string
     */
    protected $artmdiscday4;

    /**
     * The value for the artmdiscdate4 field.
     *
     * @var        string
     */
    protected $artmdiscdate4;

    /**
     * The value for the artmduedays4 field.
     *
     * @var        int
     */
    protected $artmduedays4;

    /**
     * The value for the artmdueday4 field.
     *
     * @var        string
     */
    protected $artmdueday4;

    /**
     * The value for the artmplusmonths4 field.
     *
     * @var        int
     */
    protected $artmplusmonths4;

    /**
     * The value for the artmduedate4 field.
     *
     * @var        string
     */
    protected $artmduedate4;

    /**
     * The value for the artmplusyear4 field.
     *
     * @var        string
     */
    protected $artmplusyear4;

    /**
     * The value for the artmsplit5 field.
     *
     * @var        string
     */
    protected $artmsplit5;

    /**
     * The value for the artmorderpct5 field.
     *
     * @var        string
     */
    protected $artmorderpct5;

    /**
     * The value for the artmdiscpct5 field.
     *
     * @var        string
     */
    protected $artmdiscpct5;

    /**
     * The value for the artmdiscdays5 field.
     *
     * @var        int
     */
    protected $artmdiscdays5;

    /**
     * The value for the artmdiscday5 field.
     *
     * @var        string
     */
    protected $artmdiscday5;

    /**
     * The value for the artmdiscdate5 field.
     *
     * @var        string
     */
    protected $artmdiscdate5;

    /**
     * The value for the artmduedays5 field.
     *
     * @var        int
     */
    protected $artmduedays5;

    /**
     * The value for the artmdueday5 field.
     *
     * @var        string
     */
    protected $artmdueday5;

    /**
     * The value for the artmplusmonths5 field.
     *
     * @var        int
     */
    protected $artmplusmonths5;

    /**
     * The value for the artmduedate5 field.
     *
     * @var        string
     */
    protected $artmduedate5;

    /**
     * The value for the artmplusyear5 field.
     *
     * @var        string
     */
    protected $artmplusyear5;

    /**
     * The value for the artmsplit6 field.
     *
     * @var        string
     */
    protected $artmsplit6;

    /**
     * The value for the artmorderpct6 field.
     *
     * @var        string
     */
    protected $artmorderpct6;

    /**
     * The value for the artmdiscpct6 field.
     *
     * @var        string
     */
    protected $artmdiscpct6;

    /**
     * The value for the artmdiscdays6 field.
     *
     * @var        int
     */
    protected $artmdiscdays6;

    /**
     * The value for the artmdiscday6 field.
     *
     * @var        string
     */
    protected $artmdiscday6;

    /**
     * The value for the artmdiscdate6 field.
     *
     * @var        string
     */
    protected $artmdiscdate6;

    /**
     * The value for the artmduedays6 field.
     *
     * @var        int
     */
    protected $artmduedays6;

    /**
     * The value for the artmdueday6 field.
     *
     * @var        string
     */
    protected $artmdueday6;

    /**
     * The value for the artmplusmonths6 field.
     *
     * @var        int
     */
    protected $artmplusmonths6;

    /**
     * The value for the artmduedate6 field.
     *
     * @var        string
     */
    protected $artmduedate6;

    /**
     * The value for the artmplusyear6 field.
     *
     * @var        string
     */
    protected $artmplusyear6;

    /**
     * The value for the artmdayfrom1 field.
     *
     * @var        int
     */
    protected $artmdayfrom1;

    /**
     * The value for the artmdaythru1 field.
     *
     * @var        int
     */
    protected $artmdaythru1;

    /**
     * The value for the artmeomdiscpct1 field.
     *
     * @var        string
     */
    protected $artmeomdiscpct1;

    /**
     * The value for the artmeomdiscday1 field.
     *
     * @var        int
     */
    protected $artmeomdiscday1;

    /**
     * The value for the artmeomdiscmonths1 field.
     *
     * @var        int
     */
    protected $artmeomdiscmonths1;

    /**
     * The value for the artmeomdueday1 field.
     *
     * @var        int
     */
    protected $artmeomdueday1;

    /**
     * The value for the artmeomplusmonths1 field.
     *
     * @var        int
     */
    protected $artmeomplusmonths1;

    /**
     * The value for the artmdayfrom2 field.
     *
     * @var        int
     */
    protected $artmdayfrom2;

    /**
     * The value for the artmdaythru2 field.
     *
     * @var        int
     */
    protected $artmdaythru2;

    /**
     * The value for the artmeomdiscpct2 field.
     *
     * @var        string
     */
    protected $artmeomdiscpct2;

    /**
     * The value for the artmeomdiscday2 field.
     *
     * @var        int
     */
    protected $artmeomdiscday2;

    /**
     * The value for the artmeomdiscmonths2 field.
     *
     * @var        int
     */
    protected $artmeomdiscmonths2;

    /**
     * The value for the artmeomdueday2 field.
     *
     * @var        int
     */
    protected $artmeomdueday2;

    /**
     * The value for the artmeomplusmonths2 field.
     *
     * @var        int
     */
    protected $artmeomplusmonths2;

    /**
     * The value for the artmdayfrom3 field.
     *
     * @var        int
     */
    protected $artmdayfrom3;

    /**
     * The value for the artmdaythru3 field.
     *
     * @var        int
     */
    protected $artmdaythru3;

    /**
     * The value for the artmeomdiscpct3 field.
     *
     * @var        string
     */
    protected $artmeomdiscpct3;

    /**
     * The value for the artmeomdiscday3 field.
     *
     * @var        int
     */
    protected $artmeomdiscday3;

    /**
     * The value for the artmeomdiscmonths3 field.
     *
     * @var        int
     */
    protected $artmeomdiscmonths3;

    /**
     * The value for the artmeomdueday3 field.
     *
     * @var        int
     */
    protected $artmeomdueday3;

    /**
     * The value for the artmeomplusmonths3 field.
     *
     * @var        int
     */
    protected $artmeomplusmonths3;

    /**
     * The value for the artmctry field.
     *
     * @var        string
     */
    protected $artmctry;

    /**
     * The value for the artmtermgrup field.
     *
     * @var        string
     */
    protected $artmtermgrup;

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
        $this->artmtermcd = '';
    }

    /**
     * Initializes internal state of Base\CustomerTermsCode object.
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
     * Compares this with another <code>CustomerTermsCode</code> instance.  If
     * <code>obj</code> is an instance of <code>CustomerTermsCode</code>, delegates to
     * <code>equals(CustomerTermsCode)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|CustomerTermsCode The current object, for fluid interface
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
     * Get the [artmtermcd] column value.
     *
     * @return string
     */
    public function getArtmtermcd()
    {
        return $this->artmtermcd;
    }

    /**
     * Get the [artmtermdesc] column value.
     *
     * @return string
     */
    public function getArtmtermdesc()
    {
        return $this->artmtermdesc;
    }

    /**
     * Get the [artmmethod] column value.
     *
     * @return string
     */
    public function getArtmmethod()
    {
        return $this->artmmethod;
    }

    /**
     * Get the [artmtype] column value.
     *
     * @return string
     */
    public function getArtmtype()
    {
        return $this->artmtype;
    }

    /**
     * Get the [artmhold] column value.
     *
     * @return string
     */
    public function getArtmhold()
    {
        return $this->artmhold;
    }

    /**
     * Get the [artmexpiredate] column value.
     *
     * @return string
     */
    public function getArtmexpiredate()
    {
        return $this->artmexpiredate;
    }

    /**
     * Get the [artmfrtallow] column value.
     *
     * @return string
     */
    public function getArtmfrtallow()
    {
        return $this->artmfrtallow;
    }

    /**
     * Get the [artmccprefix] column value.
     *
     * @return string
     */
    public function getArtmccprefix()
    {
        return $this->artmccprefix;
    }

    /**
     * Get the [artmsplit1] column value.
     *
     * @return string
     */
    public function getArtmsplit1()
    {
        return $this->artmsplit1;
    }

    /**
     * Get the [artmorderpct1] column value.
     *
     * @return string
     */
    public function getArtmorderpct1()
    {
        return $this->artmorderpct1;
    }

    /**
     * Get the [artmdiscpct1] column value.
     *
     * @return string
     */
    public function getArtmdiscpct1()
    {
        return $this->artmdiscpct1;
    }

    /**
     * Get the [artmdiscdays1] column value.
     *
     * @return int
     */
    public function getArtmdiscdays1()
    {
        return $this->artmdiscdays1;
    }

    /**
     * Get the [artmdiscday1] column value.
     *
     * @return string
     */
    public function getArtmdiscday1()
    {
        return $this->artmdiscday1;
    }

    /**
     * Get the [artmdiscdate1] column value.
     *
     * @return string
     */
    public function getArtmdiscdate1()
    {
        return $this->artmdiscdate1;
    }

    /**
     * Get the [artmduedays1] column value.
     *
     * @return int
     */
    public function getArtmduedays1()
    {
        return $this->artmduedays1;
    }

    /**
     * Get the [artmdueday1] column value.
     *
     * @return string
     */
    public function getArtmdueday1()
    {
        return $this->artmdueday1;
    }

    /**
     * Get the [artmplusmonths1] column value.
     *
     * @return int
     */
    public function getArtmplusmonths1()
    {
        return $this->artmplusmonths1;
    }

    /**
     * Get the [artmduedate1] column value.
     *
     * @return string
     */
    public function getArtmduedate1()
    {
        return $this->artmduedate1;
    }

    /**
     * Get the [artmplusyear1] column value.
     *
     * @return string
     */
    public function getArtmplusyear1()
    {
        return $this->artmplusyear1;
    }

    /**
     * Get the [artmsplit2] column value.
     *
     * @return string
     */
    public function getArtmsplit2()
    {
        return $this->artmsplit2;
    }

    /**
     * Get the [artmorderpct2] column value.
     *
     * @return string
     */
    public function getArtmorderpct2()
    {
        return $this->artmorderpct2;
    }

    /**
     * Get the [artmdiscpct2] column value.
     *
     * @return string
     */
    public function getArtmdiscpct2()
    {
        return $this->artmdiscpct2;
    }

    /**
     * Get the [artmdiscdays2] column value.
     *
     * @return int
     */
    public function getArtmdiscdays2()
    {
        return $this->artmdiscdays2;
    }

    /**
     * Get the [artmdiscday2] column value.
     *
     * @return string
     */
    public function getArtmdiscday2()
    {
        return $this->artmdiscday2;
    }

    /**
     * Get the [artmdiscdate2] column value.
     *
     * @return string
     */
    public function getArtmdiscdate2()
    {
        return $this->artmdiscdate2;
    }

    /**
     * Get the [artmduedays2] column value.
     *
     * @return int
     */
    public function getArtmduedays2()
    {
        return $this->artmduedays2;
    }

    /**
     * Get the [artmdueday2] column value.
     *
     * @return string
     */
    public function getArtmdueday2()
    {
        return $this->artmdueday2;
    }

    /**
     * Get the [artmplusmonths2] column value.
     *
     * @return int
     */
    public function getArtmplusmonths2()
    {
        return $this->artmplusmonths2;
    }

    /**
     * Get the [artmduedate2] column value.
     *
     * @return string
     */
    public function getArtmduedate2()
    {
        return $this->artmduedate2;
    }

    /**
     * Get the [artmplusyear2] column value.
     *
     * @return string
     */
    public function getArtmplusyear2()
    {
        return $this->artmplusyear2;
    }

    /**
     * Get the [artmsplit3] column value.
     *
     * @return string
     */
    public function getArtmsplit3()
    {
        return $this->artmsplit3;
    }

    /**
     * Get the [artmorderpct3] column value.
     *
     * @return string
     */
    public function getArtmorderpct3()
    {
        return $this->artmorderpct3;
    }

    /**
     * Get the [artmdiscpct3] column value.
     *
     * @return string
     */
    public function getArtmdiscpct3()
    {
        return $this->artmdiscpct3;
    }

    /**
     * Get the [artmdiscdays3] column value.
     *
     * @return int
     */
    public function getArtmdiscdays3()
    {
        return $this->artmdiscdays3;
    }

    /**
     * Get the [artmdiscday3] column value.
     *
     * @return string
     */
    public function getArtmdiscday3()
    {
        return $this->artmdiscday3;
    }

    /**
     * Get the [artmdiscdate3] column value.
     *
     * @return string
     */
    public function getArtmdiscdate3()
    {
        return $this->artmdiscdate3;
    }

    /**
     * Get the [artmduedays3] column value.
     *
     * @return int
     */
    public function getArtmduedays3()
    {
        return $this->artmduedays3;
    }

    /**
     * Get the [artmdueday3] column value.
     *
     * @return string
     */
    public function getArtmdueday3()
    {
        return $this->artmdueday3;
    }

    /**
     * Get the [artmplusmonths3] column value.
     *
     * @return int
     */
    public function getArtmplusmonths3()
    {
        return $this->artmplusmonths3;
    }

    /**
     * Get the [artmduedate3] column value.
     *
     * @return string
     */
    public function getArtmduedate3()
    {
        return $this->artmduedate3;
    }

    /**
     * Get the [artmplusyear3] column value.
     *
     * @return string
     */
    public function getArtmplusyear3()
    {
        return $this->artmplusyear3;
    }

    /**
     * Get the [artmsplit4] column value.
     *
     * @return string
     */
    public function getArtmsplit4()
    {
        return $this->artmsplit4;
    }

    /**
     * Get the [artmorderpct4] column value.
     *
     * @return string
     */
    public function getArtmorderpct4()
    {
        return $this->artmorderpct4;
    }

    /**
     * Get the [artmdiscpct4] column value.
     *
     * @return string
     */
    public function getArtmdiscpct4()
    {
        return $this->artmdiscpct4;
    }

    /**
     * Get the [artmdiscdays4] column value.
     *
     * @return int
     */
    public function getArtmdiscdays4()
    {
        return $this->artmdiscdays4;
    }

    /**
     * Get the [artmdiscday4] column value.
     *
     * @return string
     */
    public function getArtmdiscday4()
    {
        return $this->artmdiscday4;
    }

    /**
     * Get the [artmdiscdate4] column value.
     *
     * @return string
     */
    public function getArtmdiscdate4()
    {
        return $this->artmdiscdate4;
    }

    /**
     * Get the [artmduedays4] column value.
     *
     * @return int
     */
    public function getArtmduedays4()
    {
        return $this->artmduedays4;
    }

    /**
     * Get the [artmdueday4] column value.
     *
     * @return string
     */
    public function getArtmdueday4()
    {
        return $this->artmdueday4;
    }

    /**
     * Get the [artmplusmonths4] column value.
     *
     * @return int
     */
    public function getArtmplusmonths4()
    {
        return $this->artmplusmonths4;
    }

    /**
     * Get the [artmduedate4] column value.
     *
     * @return string
     */
    public function getArtmduedate4()
    {
        return $this->artmduedate4;
    }

    /**
     * Get the [artmplusyear4] column value.
     *
     * @return string
     */
    public function getArtmplusyear4()
    {
        return $this->artmplusyear4;
    }

    /**
     * Get the [artmsplit5] column value.
     *
     * @return string
     */
    public function getArtmsplit5()
    {
        return $this->artmsplit5;
    }

    /**
     * Get the [artmorderpct5] column value.
     *
     * @return string
     */
    public function getArtmorderpct5()
    {
        return $this->artmorderpct5;
    }

    /**
     * Get the [artmdiscpct5] column value.
     *
     * @return string
     */
    public function getArtmdiscpct5()
    {
        return $this->artmdiscpct5;
    }

    /**
     * Get the [artmdiscdays5] column value.
     *
     * @return int
     */
    public function getArtmdiscdays5()
    {
        return $this->artmdiscdays5;
    }

    /**
     * Get the [artmdiscday5] column value.
     *
     * @return string
     */
    public function getArtmdiscday5()
    {
        return $this->artmdiscday5;
    }

    /**
     * Get the [artmdiscdate5] column value.
     *
     * @return string
     */
    public function getArtmdiscdate5()
    {
        return $this->artmdiscdate5;
    }

    /**
     * Get the [artmduedays5] column value.
     *
     * @return int
     */
    public function getArtmduedays5()
    {
        return $this->artmduedays5;
    }

    /**
     * Get the [artmdueday5] column value.
     *
     * @return string
     */
    public function getArtmdueday5()
    {
        return $this->artmdueday5;
    }

    /**
     * Get the [artmplusmonths5] column value.
     *
     * @return int
     */
    public function getArtmplusmonths5()
    {
        return $this->artmplusmonths5;
    }

    /**
     * Get the [artmduedate5] column value.
     *
     * @return string
     */
    public function getArtmduedate5()
    {
        return $this->artmduedate5;
    }

    /**
     * Get the [artmplusyear5] column value.
     *
     * @return string
     */
    public function getArtmplusyear5()
    {
        return $this->artmplusyear5;
    }

    /**
     * Get the [artmsplit6] column value.
     *
     * @return string
     */
    public function getArtmsplit6()
    {
        return $this->artmsplit6;
    }

    /**
     * Get the [artmorderpct6] column value.
     *
     * @return string
     */
    public function getArtmorderpct6()
    {
        return $this->artmorderpct6;
    }

    /**
     * Get the [artmdiscpct6] column value.
     *
     * @return string
     */
    public function getArtmdiscpct6()
    {
        return $this->artmdiscpct6;
    }

    /**
     * Get the [artmdiscdays6] column value.
     *
     * @return int
     */
    public function getArtmdiscdays6()
    {
        return $this->artmdiscdays6;
    }

    /**
     * Get the [artmdiscday6] column value.
     *
     * @return string
     */
    public function getArtmdiscday6()
    {
        return $this->artmdiscday6;
    }

    /**
     * Get the [artmdiscdate6] column value.
     *
     * @return string
     */
    public function getArtmdiscdate6()
    {
        return $this->artmdiscdate6;
    }

    /**
     * Get the [artmduedays6] column value.
     *
     * @return int
     */
    public function getArtmduedays6()
    {
        return $this->artmduedays6;
    }

    /**
     * Get the [artmdueday6] column value.
     *
     * @return string
     */
    public function getArtmdueday6()
    {
        return $this->artmdueday6;
    }

    /**
     * Get the [artmplusmonths6] column value.
     *
     * @return int
     */
    public function getArtmplusmonths6()
    {
        return $this->artmplusmonths6;
    }

    /**
     * Get the [artmduedate6] column value.
     *
     * @return string
     */
    public function getArtmduedate6()
    {
        return $this->artmduedate6;
    }

    /**
     * Get the [artmplusyear6] column value.
     *
     * @return string
     */
    public function getArtmplusyear6()
    {
        return $this->artmplusyear6;
    }

    /**
     * Get the [artmdayfrom1] column value.
     *
     * @return int
     */
    public function getArtmdayfrom1()
    {
        return $this->artmdayfrom1;
    }

    /**
     * Get the [artmdaythru1] column value.
     *
     * @return int
     */
    public function getArtmdaythru1()
    {
        return $this->artmdaythru1;
    }

    /**
     * Get the [artmeomdiscpct1] column value.
     *
     * @return string
     */
    public function getArtmeomdiscpct1()
    {
        return $this->artmeomdiscpct1;
    }

    /**
     * Get the [artmeomdiscday1] column value.
     *
     * @return int
     */
    public function getArtmeomdiscday1()
    {
        return $this->artmeomdiscday1;
    }

    /**
     * Get the [artmeomdiscmonths1] column value.
     *
     * @return int
     */
    public function getArtmeomdiscmonths1()
    {
        return $this->artmeomdiscmonths1;
    }

    /**
     * Get the [artmeomdueday1] column value.
     *
     * @return int
     */
    public function getArtmeomdueday1()
    {
        return $this->artmeomdueday1;
    }

    /**
     * Get the [artmeomplusmonths1] column value.
     *
     * @return int
     */
    public function getArtmeomplusmonths1()
    {
        return $this->artmeomplusmonths1;
    }

    /**
     * Get the [artmdayfrom2] column value.
     *
     * @return int
     */
    public function getArtmdayfrom2()
    {
        return $this->artmdayfrom2;
    }

    /**
     * Get the [artmdaythru2] column value.
     *
     * @return int
     */
    public function getArtmdaythru2()
    {
        return $this->artmdaythru2;
    }

    /**
     * Get the [artmeomdiscpct2] column value.
     *
     * @return string
     */
    public function getArtmeomdiscpct2()
    {
        return $this->artmeomdiscpct2;
    }

    /**
     * Get the [artmeomdiscday2] column value.
     *
     * @return int
     */
    public function getArtmeomdiscday2()
    {
        return $this->artmeomdiscday2;
    }

    /**
     * Get the [artmeomdiscmonths2] column value.
     *
     * @return int
     */
    public function getArtmeomdiscmonths2()
    {
        return $this->artmeomdiscmonths2;
    }

    /**
     * Get the [artmeomdueday2] column value.
     *
     * @return int
     */
    public function getArtmeomdueday2()
    {
        return $this->artmeomdueday2;
    }

    /**
     * Get the [artmeomplusmonths2] column value.
     *
     * @return int
     */
    public function getArtmeomplusmonths2()
    {
        return $this->artmeomplusmonths2;
    }

    /**
     * Get the [artmdayfrom3] column value.
     *
     * @return int
     */
    public function getArtmdayfrom3()
    {
        return $this->artmdayfrom3;
    }

    /**
     * Get the [artmdaythru3] column value.
     *
     * @return int
     */
    public function getArtmdaythru3()
    {
        return $this->artmdaythru3;
    }

    /**
     * Get the [artmeomdiscpct3] column value.
     *
     * @return string
     */
    public function getArtmeomdiscpct3()
    {
        return $this->artmeomdiscpct3;
    }

    /**
     * Get the [artmeomdiscday3] column value.
     *
     * @return int
     */
    public function getArtmeomdiscday3()
    {
        return $this->artmeomdiscday3;
    }

    /**
     * Get the [artmeomdiscmonths3] column value.
     *
     * @return int
     */
    public function getArtmeomdiscmonths3()
    {
        return $this->artmeomdiscmonths3;
    }

    /**
     * Get the [artmeomdueday3] column value.
     *
     * @return int
     */
    public function getArtmeomdueday3()
    {
        return $this->artmeomdueday3;
    }

    /**
     * Get the [artmeomplusmonths3] column value.
     *
     * @return int
     */
    public function getArtmeomplusmonths3()
    {
        return $this->artmeomplusmonths3;
    }

    /**
     * Get the [artmctry] column value.
     *
     * @return string
     */
    public function getArtmctry()
    {
        return $this->artmctry;
    }

    /**
     * Get the [artmtermgrup] column value.
     *
     * @return string
     */
    public function getArtmtermgrup()
    {
        return $this->artmtermgrup;
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
     * Set the value of [artmtermcd] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmtermcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermcd !== $v) {
            $this->artmtermcd = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMTERMCD] = true;
        }

        return $this;
    } // setArtmtermcd()

    /**
     * Set the value of [artmtermdesc] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmtermdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermdesc !== $v) {
            $this->artmtermdesc = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMTERMDESC] = true;
        }

        return $this;
    } // setArtmtermdesc()

    /**
     * Set the value of [artmmethod] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmmethod($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmmethod !== $v) {
            $this->artmmethod = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMMETHOD] = true;
        }

        return $this;
    } // setArtmmethod()

    /**
     * Set the value of [artmtype] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmtype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtype !== $v) {
            $this->artmtype = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMTYPE] = true;
        }

        return $this;
    } // setArtmtype()

    /**
     * Set the value of [artmhold] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmhold !== $v) {
            $this->artmhold = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMHOLD] = true;
        }

        return $this;
    } // setArtmhold()

    /**
     * Set the value of [artmexpiredate] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmexpiredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmexpiredate !== $v) {
            $this->artmexpiredate = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEXPIREDATE] = true;
        }

        return $this;
    } // setArtmexpiredate()

    /**
     * Set the value of [artmfrtallow] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmfrtallow($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmfrtallow !== $v) {
            $this->artmfrtallow = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMFRTALLOW] = true;
        }

        return $this;
    } // setArtmfrtallow()

    /**
     * Set the value of [artmccprefix] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmccprefix($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmccprefix !== $v) {
            $this->artmccprefix = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMCCPREFIX] = true;
        }

        return $this;
    } // setArtmccprefix()

    /**
     * Set the value of [artmsplit1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmsplit1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmsplit1 !== $v) {
            $this->artmsplit1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMSPLIT1] = true;
        }

        return $this;
    } // setArtmsplit1()

    /**
     * Set the value of [artmorderpct1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmorderpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmorderpct1 !== $v) {
            $this->artmorderpct1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMORDERPCT1] = true;
        }

        return $this;
    } // setArtmorderpct1()

    /**
     * Set the value of [artmdiscpct1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscpct1 !== $v) {
            $this->artmdiscpct1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCPCT1] = true;
        }

        return $this;
    } // setArtmdiscpct1()

    /**
     * Set the value of [artmdiscdays1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdays1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdiscdays1 !== $v) {
            $this->artmdiscdays1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAYS1] = true;
        }

        return $this;
    } // setArtmdiscdays1()

    /**
     * Set the value of [artmdiscday1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscday1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscday1 !== $v) {
            $this->artmdiscday1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAY1] = true;
        }

        return $this;
    } // setArtmdiscday1()

    /**
     * Set the value of [artmdiscdate1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdate1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscdate1 !== $v) {
            $this->artmdiscdate1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDATE1] = true;
        }

        return $this;
    } // setArtmdiscdate1()

    /**
     * Set the value of [artmduedays1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedays1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmduedays1 !== $v) {
            $this->artmduedays1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAYS1] = true;
        }

        return $this;
    } // setArtmduedays1()

    /**
     * Set the value of [artmdueday1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdueday1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdueday1 !== $v) {
            $this->artmdueday1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAY1] = true;
        }

        return $this;
    } // setArtmdueday1()

    /**
     * Set the value of [artmplusmonths1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusmonths1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmplusmonths1 !== $v) {
            $this->artmplusmonths1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS1] = true;
        }

        return $this;
    } // setArtmplusmonths1()

    /**
     * Set the value of [artmduedate1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedate1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmduedate1 !== $v) {
            $this->artmduedate1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDATE1] = true;
        }

        return $this;
    } // setArtmduedate1()

    /**
     * Set the value of [artmplusyear1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusyear1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmplusyear1 !== $v) {
            $this->artmplusyear1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR1] = true;
        }

        return $this;
    } // setArtmplusyear1()

    /**
     * Set the value of [artmsplit2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmsplit2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmsplit2 !== $v) {
            $this->artmsplit2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMSPLIT2] = true;
        }

        return $this;
    } // setArtmsplit2()

    /**
     * Set the value of [artmorderpct2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmorderpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmorderpct2 !== $v) {
            $this->artmorderpct2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMORDERPCT2] = true;
        }

        return $this;
    } // setArtmorderpct2()

    /**
     * Set the value of [artmdiscpct2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscpct2 !== $v) {
            $this->artmdiscpct2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCPCT2] = true;
        }

        return $this;
    } // setArtmdiscpct2()

    /**
     * Set the value of [artmdiscdays2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdays2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdiscdays2 !== $v) {
            $this->artmdiscdays2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAYS2] = true;
        }

        return $this;
    } // setArtmdiscdays2()

    /**
     * Set the value of [artmdiscday2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscday2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscday2 !== $v) {
            $this->artmdiscday2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAY2] = true;
        }

        return $this;
    } // setArtmdiscday2()

    /**
     * Set the value of [artmdiscdate2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdate2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscdate2 !== $v) {
            $this->artmdiscdate2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDATE2] = true;
        }

        return $this;
    } // setArtmdiscdate2()

    /**
     * Set the value of [artmduedays2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedays2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmduedays2 !== $v) {
            $this->artmduedays2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAYS2] = true;
        }

        return $this;
    } // setArtmduedays2()

    /**
     * Set the value of [artmdueday2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdueday2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdueday2 !== $v) {
            $this->artmdueday2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAY2] = true;
        }

        return $this;
    } // setArtmdueday2()

    /**
     * Set the value of [artmplusmonths2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusmonths2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmplusmonths2 !== $v) {
            $this->artmplusmonths2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS2] = true;
        }

        return $this;
    } // setArtmplusmonths2()

    /**
     * Set the value of [artmduedate2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedate2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmduedate2 !== $v) {
            $this->artmduedate2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDATE2] = true;
        }

        return $this;
    } // setArtmduedate2()

    /**
     * Set the value of [artmplusyear2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusyear2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmplusyear2 !== $v) {
            $this->artmplusyear2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR2] = true;
        }

        return $this;
    } // setArtmplusyear2()

    /**
     * Set the value of [artmsplit3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmsplit3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmsplit3 !== $v) {
            $this->artmsplit3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMSPLIT3] = true;
        }

        return $this;
    } // setArtmsplit3()

    /**
     * Set the value of [artmorderpct3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmorderpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmorderpct3 !== $v) {
            $this->artmorderpct3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMORDERPCT3] = true;
        }

        return $this;
    } // setArtmorderpct3()

    /**
     * Set the value of [artmdiscpct3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscpct3 !== $v) {
            $this->artmdiscpct3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCPCT3] = true;
        }

        return $this;
    } // setArtmdiscpct3()

    /**
     * Set the value of [artmdiscdays3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdays3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdiscdays3 !== $v) {
            $this->artmdiscdays3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAYS3] = true;
        }

        return $this;
    } // setArtmdiscdays3()

    /**
     * Set the value of [artmdiscday3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscday3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscday3 !== $v) {
            $this->artmdiscday3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAY3] = true;
        }

        return $this;
    } // setArtmdiscday3()

    /**
     * Set the value of [artmdiscdate3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdate3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscdate3 !== $v) {
            $this->artmdiscdate3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDATE3] = true;
        }

        return $this;
    } // setArtmdiscdate3()

    /**
     * Set the value of [artmduedays3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedays3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmduedays3 !== $v) {
            $this->artmduedays3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAYS3] = true;
        }

        return $this;
    } // setArtmduedays3()

    /**
     * Set the value of [artmdueday3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdueday3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdueday3 !== $v) {
            $this->artmdueday3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAY3] = true;
        }

        return $this;
    } // setArtmdueday3()

    /**
     * Set the value of [artmplusmonths3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusmonths3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmplusmonths3 !== $v) {
            $this->artmplusmonths3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS3] = true;
        }

        return $this;
    } // setArtmplusmonths3()

    /**
     * Set the value of [artmduedate3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedate3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmduedate3 !== $v) {
            $this->artmduedate3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDATE3] = true;
        }

        return $this;
    } // setArtmduedate3()

    /**
     * Set the value of [artmplusyear3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusyear3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmplusyear3 !== $v) {
            $this->artmplusyear3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR3] = true;
        }

        return $this;
    } // setArtmplusyear3()

    /**
     * Set the value of [artmsplit4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmsplit4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmsplit4 !== $v) {
            $this->artmsplit4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMSPLIT4] = true;
        }

        return $this;
    } // setArtmsplit4()

    /**
     * Set the value of [artmorderpct4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmorderpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmorderpct4 !== $v) {
            $this->artmorderpct4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMORDERPCT4] = true;
        }

        return $this;
    } // setArtmorderpct4()

    /**
     * Set the value of [artmdiscpct4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscpct4 !== $v) {
            $this->artmdiscpct4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCPCT4] = true;
        }

        return $this;
    } // setArtmdiscpct4()

    /**
     * Set the value of [artmdiscdays4] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdays4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdiscdays4 !== $v) {
            $this->artmdiscdays4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAYS4] = true;
        }

        return $this;
    } // setArtmdiscdays4()

    /**
     * Set the value of [artmdiscday4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscday4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscday4 !== $v) {
            $this->artmdiscday4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAY4] = true;
        }

        return $this;
    } // setArtmdiscday4()

    /**
     * Set the value of [artmdiscdate4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdate4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscdate4 !== $v) {
            $this->artmdiscdate4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDATE4] = true;
        }

        return $this;
    } // setArtmdiscdate4()

    /**
     * Set the value of [artmduedays4] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedays4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmduedays4 !== $v) {
            $this->artmduedays4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAYS4] = true;
        }

        return $this;
    } // setArtmduedays4()

    /**
     * Set the value of [artmdueday4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdueday4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdueday4 !== $v) {
            $this->artmdueday4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAY4] = true;
        }

        return $this;
    } // setArtmdueday4()

    /**
     * Set the value of [artmplusmonths4] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusmonths4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmplusmonths4 !== $v) {
            $this->artmplusmonths4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS4] = true;
        }

        return $this;
    } // setArtmplusmonths4()

    /**
     * Set the value of [artmduedate4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedate4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmduedate4 !== $v) {
            $this->artmduedate4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDATE4] = true;
        }

        return $this;
    } // setArtmduedate4()

    /**
     * Set the value of [artmplusyear4] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusyear4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmplusyear4 !== $v) {
            $this->artmplusyear4 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR4] = true;
        }

        return $this;
    } // setArtmplusyear4()

    /**
     * Set the value of [artmsplit5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmsplit5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmsplit5 !== $v) {
            $this->artmsplit5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMSPLIT5] = true;
        }

        return $this;
    } // setArtmsplit5()

    /**
     * Set the value of [artmorderpct5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmorderpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmorderpct5 !== $v) {
            $this->artmorderpct5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMORDERPCT5] = true;
        }

        return $this;
    } // setArtmorderpct5()

    /**
     * Set the value of [artmdiscpct5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscpct5 !== $v) {
            $this->artmdiscpct5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCPCT5] = true;
        }

        return $this;
    } // setArtmdiscpct5()

    /**
     * Set the value of [artmdiscdays5] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdays5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdiscdays5 !== $v) {
            $this->artmdiscdays5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAYS5] = true;
        }

        return $this;
    } // setArtmdiscdays5()

    /**
     * Set the value of [artmdiscday5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscday5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscday5 !== $v) {
            $this->artmdiscday5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAY5] = true;
        }

        return $this;
    } // setArtmdiscday5()

    /**
     * Set the value of [artmdiscdate5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdate5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscdate5 !== $v) {
            $this->artmdiscdate5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDATE5] = true;
        }

        return $this;
    } // setArtmdiscdate5()

    /**
     * Set the value of [artmduedays5] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedays5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmduedays5 !== $v) {
            $this->artmduedays5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAYS5] = true;
        }

        return $this;
    } // setArtmduedays5()

    /**
     * Set the value of [artmdueday5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdueday5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdueday5 !== $v) {
            $this->artmdueday5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAY5] = true;
        }

        return $this;
    } // setArtmdueday5()

    /**
     * Set the value of [artmplusmonths5] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusmonths5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmplusmonths5 !== $v) {
            $this->artmplusmonths5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS5] = true;
        }

        return $this;
    } // setArtmplusmonths5()

    /**
     * Set the value of [artmduedate5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedate5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmduedate5 !== $v) {
            $this->artmduedate5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDATE5] = true;
        }

        return $this;
    } // setArtmduedate5()

    /**
     * Set the value of [artmplusyear5] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusyear5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmplusyear5 !== $v) {
            $this->artmplusyear5 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR5] = true;
        }

        return $this;
    } // setArtmplusyear5()

    /**
     * Set the value of [artmsplit6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmsplit6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmsplit6 !== $v) {
            $this->artmsplit6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMSPLIT6] = true;
        }

        return $this;
    } // setArtmsplit6()

    /**
     * Set the value of [artmorderpct6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmorderpct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmorderpct6 !== $v) {
            $this->artmorderpct6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMORDERPCT6] = true;
        }

        return $this;
    } // setArtmorderpct6()

    /**
     * Set the value of [artmdiscpct6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscpct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscpct6 !== $v) {
            $this->artmdiscpct6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCPCT6] = true;
        }

        return $this;
    } // setArtmdiscpct6()

    /**
     * Set the value of [artmdiscdays6] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdays6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdiscdays6 !== $v) {
            $this->artmdiscdays6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAYS6] = true;
        }

        return $this;
    } // setArtmdiscdays6()

    /**
     * Set the value of [artmdiscday6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscday6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscday6 !== $v) {
            $this->artmdiscday6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDAY6] = true;
        }

        return $this;
    } // setArtmdiscday6()

    /**
     * Set the value of [artmdiscdate6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdiscdate6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdiscdate6 !== $v) {
            $this->artmdiscdate6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDISCDATE6] = true;
        }

        return $this;
    } // setArtmdiscdate6()

    /**
     * Set the value of [artmduedays6] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedays6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmduedays6 !== $v) {
            $this->artmduedays6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAYS6] = true;
        }

        return $this;
    } // setArtmduedays6()

    /**
     * Set the value of [artmdueday6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdueday6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmdueday6 !== $v) {
            $this->artmdueday6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDAY6] = true;
        }

        return $this;
    } // setArtmdueday6()

    /**
     * Set the value of [artmplusmonths6] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusmonths6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmplusmonths6 !== $v) {
            $this->artmplusmonths6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS6] = true;
        }

        return $this;
    } // setArtmplusmonths6()

    /**
     * Set the value of [artmduedate6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmduedate6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmduedate6 !== $v) {
            $this->artmduedate6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDUEDATE6] = true;
        }

        return $this;
    } // setArtmduedate6()

    /**
     * Set the value of [artmplusyear6] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmplusyear6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmplusyear6 !== $v) {
            $this->artmplusyear6 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR6] = true;
        }

        return $this;
    } // setArtmplusyear6()

    /**
     * Set the value of [artmdayfrom1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdayfrom1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdayfrom1 !== $v) {
            $this->artmdayfrom1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDAYFROM1] = true;
        }

        return $this;
    } // setArtmdayfrom1()

    /**
     * Set the value of [artmdaythru1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdaythru1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdaythru1 !== $v) {
            $this->artmdaythru1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDAYTHRU1] = true;
        }

        return $this;
    } // setArtmdaythru1()

    /**
     * Set the value of [artmeomdiscpct1] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmeomdiscpct1 !== $v) {
            $this->artmeomdiscpct1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT1] = true;
        }

        return $this;
    } // setArtmeomdiscpct1()

    /**
     * Set the value of [artmeomdiscday1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscday1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdiscday1 !== $v) {
            $this->artmeomdiscday1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY1] = true;
        }

        return $this;
    } // setArtmeomdiscday1()

    /**
     * Set the value of [artmeomdiscmonths1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscmonths1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdiscmonths1 !== $v) {
            $this->artmeomdiscmonths1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1] = true;
        }

        return $this;
    } // setArtmeomdiscmonths1()

    /**
     * Set the value of [artmeomdueday1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdueday1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdueday1 !== $v) {
            $this->artmeomdueday1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY1] = true;
        }

        return $this;
    } // setArtmeomdueday1()

    /**
     * Set the value of [artmeomplusmonths1] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomplusmonths1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomplusmonths1 !== $v) {
            $this->artmeomplusmonths1 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1] = true;
        }

        return $this;
    } // setArtmeomplusmonths1()

    /**
     * Set the value of [artmdayfrom2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdayfrom2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdayfrom2 !== $v) {
            $this->artmdayfrom2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDAYFROM2] = true;
        }

        return $this;
    } // setArtmdayfrom2()

    /**
     * Set the value of [artmdaythru2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdaythru2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdaythru2 !== $v) {
            $this->artmdaythru2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDAYTHRU2] = true;
        }

        return $this;
    } // setArtmdaythru2()

    /**
     * Set the value of [artmeomdiscpct2] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmeomdiscpct2 !== $v) {
            $this->artmeomdiscpct2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT2] = true;
        }

        return $this;
    } // setArtmeomdiscpct2()

    /**
     * Set the value of [artmeomdiscday2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscday2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdiscday2 !== $v) {
            $this->artmeomdiscday2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY2] = true;
        }

        return $this;
    } // setArtmeomdiscday2()

    /**
     * Set the value of [artmeomdiscmonths2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscmonths2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdiscmonths2 !== $v) {
            $this->artmeomdiscmonths2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2] = true;
        }

        return $this;
    } // setArtmeomdiscmonths2()

    /**
     * Set the value of [artmeomdueday2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdueday2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdueday2 !== $v) {
            $this->artmeomdueday2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY2] = true;
        }

        return $this;
    } // setArtmeomdueday2()

    /**
     * Set the value of [artmeomplusmonths2] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomplusmonths2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomplusmonths2 !== $v) {
            $this->artmeomplusmonths2 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2] = true;
        }

        return $this;
    } // setArtmeomplusmonths2()

    /**
     * Set the value of [artmdayfrom3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdayfrom3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdayfrom3 !== $v) {
            $this->artmdayfrom3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDAYFROM3] = true;
        }

        return $this;
    } // setArtmdayfrom3()

    /**
     * Set the value of [artmdaythru3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmdaythru3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmdaythru3 !== $v) {
            $this->artmdaythru3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMDAYTHRU3] = true;
        }

        return $this;
    } // setArtmdaythru3()

    /**
     * Set the value of [artmeomdiscpct3] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmeomdiscpct3 !== $v) {
            $this->artmeomdiscpct3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT3] = true;
        }

        return $this;
    } // setArtmeomdiscpct3()

    /**
     * Set the value of [artmeomdiscday3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscday3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdiscday3 !== $v) {
            $this->artmeomdiscday3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY3] = true;
        }

        return $this;
    } // setArtmeomdiscday3()

    /**
     * Set the value of [artmeomdiscmonths3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdiscmonths3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdiscmonths3 !== $v) {
            $this->artmeomdiscmonths3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3] = true;
        }

        return $this;
    } // setArtmeomdiscmonths3()

    /**
     * Set the value of [artmeomdueday3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomdueday3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomdueday3 !== $v) {
            $this->artmeomdueday3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY3] = true;
        }

        return $this;
    } // setArtmeomdueday3()

    /**
     * Set the value of [artmeomplusmonths3] column.
     *
     * @param int $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmeomplusmonths3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artmeomplusmonths3 !== $v) {
            $this->artmeomplusmonths3 = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3] = true;
        }

        return $this;
    } // setArtmeomplusmonths3()

    /**
     * Set the value of [artmctry] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmctry !== $v) {
            $this->artmctry = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMCTRY] = true;
        }

        return $this;
    } // setArtmctry()

    /**
     * Set the value of [artmtermgrup] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setArtmtermgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermgrup !== $v) {
            $this->artmtermgrup = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_ARTMTERMGRUP] = true;
        }

        return $this;
    } // setArtmtermgrup()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\CustomerTermsCode The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[CustomerTermsCodeTableMap::COL_DUMMY] = true;
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
            if ($this->artmtermcd !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmtermdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmmethod', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmmethod = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmtype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmexpiredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmexpiredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmfrtallow', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmfrtallow = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmccprefix', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmccprefix = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmsplit1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmsplit1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmorderpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmorderpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdays1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdays1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscday1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscday1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdate1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedays1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedays1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdueday1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdueday1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusmonths1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusmonths1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedate1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusyear1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusyear1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmsplit2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmsplit2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmorderpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmorderpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdays2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdays2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscday2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscday2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdate2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedays2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedays2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdueday2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdueday2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusmonths2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusmonths2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedate2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusyear2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusyear2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmsplit3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmsplit3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmorderpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmorderpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdays3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdays3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscday3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscday3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdate3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedays3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedays3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdueday3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdueday3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusmonths3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusmonths3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedate3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusyear3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusyear3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmsplit4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmsplit4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmorderpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmorderpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdays4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdays4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscday4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscday4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdate4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedays4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedays4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdueday4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdueday4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusmonths4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusmonths4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedate4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusyear4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusyear4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmsplit5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmsplit5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmorderpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmorderpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdays5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdays5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscday5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscday5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdate5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedays5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedays5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdueday5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdueday5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusmonths5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusmonths5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedate5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusyear5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusyear5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmsplit6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmsplit6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmorderpct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmorderpct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscpct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscpct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdays6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdays6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscday6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscday6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdiscdate6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdiscdate6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedays6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedays6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdueday6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdueday6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusmonths6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusmonths6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmduedate6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmduedate6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmplusyear6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmplusyear6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdayfrom1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdayfrom1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdaythru1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdaythru1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscday1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscday1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscmonths1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscmonths1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdueday1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdueday1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomplusmonths1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomplusmonths1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdayfrom2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdayfrom2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdaythru2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdaythru2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscday2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscday2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscmonths2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscmonths2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdueday2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdueday2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomplusmonths2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomplusmonths2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdayfrom3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdayfrom3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmdaythru3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmdaythru3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscday3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscday3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdiscmonths3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdiscmonths3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomdueday3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomdueday3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmeomplusmonths3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmeomplusmonths3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Artmtermgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : CustomerTermsCodeTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 100; // 100 = CustomerTermsCodeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\CustomerTermsCode'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CustomerTermsCodeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCustomerTermsCodeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see CustomerTermsCode::setDeleted()
     * @see CustomerTermsCode::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTermsCodeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCustomerTermsCodeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTermsCodeTableMap::DATABASE_NAME);
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
                CustomerTermsCodeTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMTERMCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermCd';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMTERMDESC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermDesc';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMMETHOD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmMethod';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmType';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmHold';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEXPIREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmExpireDate';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMFRTALLOW)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmFrtAllow';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMCCPREFIX)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmCcPrefix';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmSplit1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmOrderPct1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscPct1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDays1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDay1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDate1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDays1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDay1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusMonths1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDate1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusYear1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmSplit2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmOrderPct2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscPct2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDays2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDay2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDate2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDays2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDay2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusMonths2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDate2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusYear2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmSplit3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmOrderPct3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscPct3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDays3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDay3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDate3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDays3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDay3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusMonths3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDate3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusYear3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmSplit4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmOrderPct4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscPct4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDays4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDay4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDate4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDays4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDay4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusMonths4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDate4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusYear4';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmSplit5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmOrderPct5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscPct5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDays5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDay5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDate5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDays5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDay5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusMonths5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDate5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR5)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusYear5';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmSplit6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmOrderPct6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscPct6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDays6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDay6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDiscDate6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDays6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDay6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusMonths6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDueDate6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR6)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmPlusYear6';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYFROM1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDayFrom1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDayThru1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscPct1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscDay1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscMonths1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDueDay1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomPlusMonths1';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYFROM2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDayFrom2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDayThru2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscPct2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscDay2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscMonths2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDueDay2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomPlusMonths2';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYFROM3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDayFrom3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmDayThru3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscPct3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscDay3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDiscMonths3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomDueDay3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmEomPlusMonths3';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmCtry';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMTERMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermGrup';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_term_code (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArtmTermCd':
                        $stmt->bindValue($identifier, $this->artmtermcd, PDO::PARAM_STR);
                        break;
                    case 'ArtmTermDesc':
                        $stmt->bindValue($identifier, $this->artmtermdesc, PDO::PARAM_STR);
                        break;
                    case 'ArtmMethod':
                        $stmt->bindValue($identifier, $this->artmmethod, PDO::PARAM_STR);
                        break;
                    case 'ArtmType':
                        $stmt->bindValue($identifier, $this->artmtype, PDO::PARAM_STR);
                        break;
                    case 'ArtmHold':
                        $stmt->bindValue($identifier, $this->artmhold, PDO::PARAM_STR);
                        break;
                    case 'ArtmExpireDate':
                        $stmt->bindValue($identifier, $this->artmexpiredate, PDO::PARAM_STR);
                        break;
                    case 'ArtmFrtAllow':
                        $stmt->bindValue($identifier, $this->artmfrtallow, PDO::PARAM_STR);
                        break;
                    case 'ArtmCcPrefix':
                        $stmt->bindValue($identifier, $this->artmccprefix, PDO::PARAM_STR);
                        break;
                    case 'ArtmSplit1':
                        $stmt->bindValue($identifier, $this->artmsplit1, PDO::PARAM_STR);
                        break;
                    case 'ArtmOrderPct1':
                        $stmt->bindValue($identifier, $this->artmorderpct1, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscPct1':
                        $stmt->bindValue($identifier, $this->artmdiscpct1, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDays1':
                        $stmt->bindValue($identifier, $this->artmdiscdays1, PDO::PARAM_INT);
                        break;
                    case 'ArtmDiscDay1':
                        $stmt->bindValue($identifier, $this->artmdiscday1, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDate1':
                        $stmt->bindValue($identifier, $this->artmdiscdate1, PDO::PARAM_STR);
                        break;
                    case 'ArtmDueDays1':
                        $stmt->bindValue($identifier, $this->artmduedays1, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDay1':
                        $stmt->bindValue($identifier, $this->artmdueday1, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusMonths1':
                        $stmt->bindValue($identifier, $this->artmplusmonths1, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDate1':
                        $stmt->bindValue($identifier, $this->artmduedate1, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusYear1':
                        $stmt->bindValue($identifier, $this->artmplusyear1, PDO::PARAM_STR);
                        break;
                    case 'ArtmSplit2':
                        $stmt->bindValue($identifier, $this->artmsplit2, PDO::PARAM_STR);
                        break;
                    case 'ArtmOrderPct2':
                        $stmt->bindValue($identifier, $this->artmorderpct2, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscPct2':
                        $stmt->bindValue($identifier, $this->artmdiscpct2, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDays2':
                        $stmt->bindValue($identifier, $this->artmdiscdays2, PDO::PARAM_INT);
                        break;
                    case 'ArtmDiscDay2':
                        $stmt->bindValue($identifier, $this->artmdiscday2, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDate2':
                        $stmt->bindValue($identifier, $this->artmdiscdate2, PDO::PARAM_STR);
                        break;
                    case 'ArtmDueDays2':
                        $stmt->bindValue($identifier, $this->artmduedays2, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDay2':
                        $stmt->bindValue($identifier, $this->artmdueday2, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusMonths2':
                        $stmt->bindValue($identifier, $this->artmplusmonths2, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDate2':
                        $stmt->bindValue($identifier, $this->artmduedate2, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusYear2':
                        $stmt->bindValue($identifier, $this->artmplusyear2, PDO::PARAM_STR);
                        break;
                    case 'ArtmSplit3':
                        $stmt->bindValue($identifier, $this->artmsplit3, PDO::PARAM_STR);
                        break;
                    case 'ArtmOrderPct3':
                        $stmt->bindValue($identifier, $this->artmorderpct3, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscPct3':
                        $stmt->bindValue($identifier, $this->artmdiscpct3, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDays3':
                        $stmt->bindValue($identifier, $this->artmdiscdays3, PDO::PARAM_INT);
                        break;
                    case 'ArtmDiscDay3':
                        $stmt->bindValue($identifier, $this->artmdiscday3, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDate3':
                        $stmt->bindValue($identifier, $this->artmdiscdate3, PDO::PARAM_STR);
                        break;
                    case 'ArtmDueDays3':
                        $stmt->bindValue($identifier, $this->artmduedays3, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDay3':
                        $stmt->bindValue($identifier, $this->artmdueday3, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusMonths3':
                        $stmt->bindValue($identifier, $this->artmplusmonths3, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDate3':
                        $stmt->bindValue($identifier, $this->artmduedate3, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusYear3':
                        $stmt->bindValue($identifier, $this->artmplusyear3, PDO::PARAM_STR);
                        break;
                    case 'ArtmSplit4':
                        $stmt->bindValue($identifier, $this->artmsplit4, PDO::PARAM_STR);
                        break;
                    case 'ArtmOrderPct4':
                        $stmt->bindValue($identifier, $this->artmorderpct4, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscPct4':
                        $stmt->bindValue($identifier, $this->artmdiscpct4, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDays4':
                        $stmt->bindValue($identifier, $this->artmdiscdays4, PDO::PARAM_INT);
                        break;
                    case 'ArtmDiscDay4':
                        $stmt->bindValue($identifier, $this->artmdiscday4, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDate4':
                        $stmt->bindValue($identifier, $this->artmdiscdate4, PDO::PARAM_STR);
                        break;
                    case 'ArtmDueDays4':
                        $stmt->bindValue($identifier, $this->artmduedays4, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDay4':
                        $stmt->bindValue($identifier, $this->artmdueday4, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusMonths4':
                        $stmt->bindValue($identifier, $this->artmplusmonths4, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDate4':
                        $stmt->bindValue($identifier, $this->artmduedate4, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusYear4':
                        $stmt->bindValue($identifier, $this->artmplusyear4, PDO::PARAM_STR);
                        break;
                    case 'ArtmSplit5':
                        $stmt->bindValue($identifier, $this->artmsplit5, PDO::PARAM_STR);
                        break;
                    case 'ArtmOrderPct5':
                        $stmt->bindValue($identifier, $this->artmorderpct5, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscPct5':
                        $stmt->bindValue($identifier, $this->artmdiscpct5, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDays5':
                        $stmt->bindValue($identifier, $this->artmdiscdays5, PDO::PARAM_INT);
                        break;
                    case 'ArtmDiscDay5':
                        $stmt->bindValue($identifier, $this->artmdiscday5, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDate5':
                        $stmt->bindValue($identifier, $this->artmdiscdate5, PDO::PARAM_STR);
                        break;
                    case 'ArtmDueDays5':
                        $stmt->bindValue($identifier, $this->artmduedays5, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDay5':
                        $stmt->bindValue($identifier, $this->artmdueday5, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusMonths5':
                        $stmt->bindValue($identifier, $this->artmplusmonths5, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDate5':
                        $stmt->bindValue($identifier, $this->artmduedate5, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusYear5':
                        $stmt->bindValue($identifier, $this->artmplusyear5, PDO::PARAM_STR);
                        break;
                    case 'ArtmSplit6':
                        $stmt->bindValue($identifier, $this->artmsplit6, PDO::PARAM_STR);
                        break;
                    case 'ArtmOrderPct6':
                        $stmt->bindValue($identifier, $this->artmorderpct6, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscPct6':
                        $stmt->bindValue($identifier, $this->artmdiscpct6, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDays6':
                        $stmt->bindValue($identifier, $this->artmdiscdays6, PDO::PARAM_INT);
                        break;
                    case 'ArtmDiscDay6':
                        $stmt->bindValue($identifier, $this->artmdiscday6, PDO::PARAM_STR);
                        break;
                    case 'ArtmDiscDate6':
                        $stmt->bindValue($identifier, $this->artmdiscdate6, PDO::PARAM_STR);
                        break;
                    case 'ArtmDueDays6':
                        $stmt->bindValue($identifier, $this->artmduedays6, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDay6':
                        $stmt->bindValue($identifier, $this->artmdueday6, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusMonths6':
                        $stmt->bindValue($identifier, $this->artmplusmonths6, PDO::PARAM_INT);
                        break;
                    case 'ArtmDueDate6':
                        $stmt->bindValue($identifier, $this->artmduedate6, PDO::PARAM_STR);
                        break;
                    case 'ArtmPlusYear6':
                        $stmt->bindValue($identifier, $this->artmplusyear6, PDO::PARAM_STR);
                        break;
                    case 'ArtmDayFrom1':
                        $stmt->bindValue($identifier, $this->artmdayfrom1, PDO::PARAM_INT);
                        break;
                    case 'ArtmDayThru1':
                        $stmt->bindValue($identifier, $this->artmdaythru1, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDiscPct1':
                        $stmt->bindValue($identifier, $this->artmeomdiscpct1, PDO::PARAM_STR);
                        break;
                    case 'ArtmEomDiscDay1':
                        $stmt->bindValue($identifier, $this->artmeomdiscday1, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDiscMonths1':
                        $stmt->bindValue($identifier, $this->artmeomdiscmonths1, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDueDay1':
                        $stmt->bindValue($identifier, $this->artmeomdueday1, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomPlusMonths1':
                        $stmt->bindValue($identifier, $this->artmeomplusmonths1, PDO::PARAM_INT);
                        break;
                    case 'ArtmDayFrom2':
                        $stmt->bindValue($identifier, $this->artmdayfrom2, PDO::PARAM_INT);
                        break;
                    case 'ArtmDayThru2':
                        $stmt->bindValue($identifier, $this->artmdaythru2, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDiscPct2':
                        $stmt->bindValue($identifier, $this->artmeomdiscpct2, PDO::PARAM_STR);
                        break;
                    case 'ArtmEomDiscDay2':
                        $stmt->bindValue($identifier, $this->artmeomdiscday2, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDiscMonths2':
                        $stmt->bindValue($identifier, $this->artmeomdiscmonths2, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDueDay2':
                        $stmt->bindValue($identifier, $this->artmeomdueday2, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomPlusMonths2':
                        $stmt->bindValue($identifier, $this->artmeomplusmonths2, PDO::PARAM_INT);
                        break;
                    case 'ArtmDayFrom3':
                        $stmt->bindValue($identifier, $this->artmdayfrom3, PDO::PARAM_INT);
                        break;
                    case 'ArtmDayThru3':
                        $stmt->bindValue($identifier, $this->artmdaythru3, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDiscPct3':
                        $stmt->bindValue($identifier, $this->artmeomdiscpct3, PDO::PARAM_STR);
                        break;
                    case 'ArtmEomDiscDay3':
                        $stmt->bindValue($identifier, $this->artmeomdiscday3, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDiscMonths3':
                        $stmt->bindValue($identifier, $this->artmeomdiscmonths3, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomDueDay3':
                        $stmt->bindValue($identifier, $this->artmeomdueday3, PDO::PARAM_INT);
                        break;
                    case 'ArtmEomPlusMonths3':
                        $stmt->bindValue($identifier, $this->artmeomplusmonths3, PDO::PARAM_INT);
                        break;
                    case 'ArtmCtry':
                        $stmt->bindValue($identifier, $this->artmctry, PDO::PARAM_STR);
                        break;
                    case 'ArtmTermGrup':
                        $stmt->bindValue($identifier, $this->artmtermgrup, PDO::PARAM_STR);
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
        $pos = CustomerTermsCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArtmtermcd();
                break;
            case 1:
                return $this->getArtmtermdesc();
                break;
            case 2:
                return $this->getArtmmethod();
                break;
            case 3:
                return $this->getArtmtype();
                break;
            case 4:
                return $this->getArtmhold();
                break;
            case 5:
                return $this->getArtmexpiredate();
                break;
            case 6:
                return $this->getArtmfrtallow();
                break;
            case 7:
                return $this->getArtmccprefix();
                break;
            case 8:
                return $this->getArtmsplit1();
                break;
            case 9:
                return $this->getArtmorderpct1();
                break;
            case 10:
                return $this->getArtmdiscpct1();
                break;
            case 11:
                return $this->getArtmdiscdays1();
                break;
            case 12:
                return $this->getArtmdiscday1();
                break;
            case 13:
                return $this->getArtmdiscdate1();
                break;
            case 14:
                return $this->getArtmduedays1();
                break;
            case 15:
                return $this->getArtmdueday1();
                break;
            case 16:
                return $this->getArtmplusmonths1();
                break;
            case 17:
                return $this->getArtmduedate1();
                break;
            case 18:
                return $this->getArtmplusyear1();
                break;
            case 19:
                return $this->getArtmsplit2();
                break;
            case 20:
                return $this->getArtmorderpct2();
                break;
            case 21:
                return $this->getArtmdiscpct2();
                break;
            case 22:
                return $this->getArtmdiscdays2();
                break;
            case 23:
                return $this->getArtmdiscday2();
                break;
            case 24:
                return $this->getArtmdiscdate2();
                break;
            case 25:
                return $this->getArtmduedays2();
                break;
            case 26:
                return $this->getArtmdueday2();
                break;
            case 27:
                return $this->getArtmplusmonths2();
                break;
            case 28:
                return $this->getArtmduedate2();
                break;
            case 29:
                return $this->getArtmplusyear2();
                break;
            case 30:
                return $this->getArtmsplit3();
                break;
            case 31:
                return $this->getArtmorderpct3();
                break;
            case 32:
                return $this->getArtmdiscpct3();
                break;
            case 33:
                return $this->getArtmdiscdays3();
                break;
            case 34:
                return $this->getArtmdiscday3();
                break;
            case 35:
                return $this->getArtmdiscdate3();
                break;
            case 36:
                return $this->getArtmduedays3();
                break;
            case 37:
                return $this->getArtmdueday3();
                break;
            case 38:
                return $this->getArtmplusmonths3();
                break;
            case 39:
                return $this->getArtmduedate3();
                break;
            case 40:
                return $this->getArtmplusyear3();
                break;
            case 41:
                return $this->getArtmsplit4();
                break;
            case 42:
                return $this->getArtmorderpct4();
                break;
            case 43:
                return $this->getArtmdiscpct4();
                break;
            case 44:
                return $this->getArtmdiscdays4();
                break;
            case 45:
                return $this->getArtmdiscday4();
                break;
            case 46:
                return $this->getArtmdiscdate4();
                break;
            case 47:
                return $this->getArtmduedays4();
                break;
            case 48:
                return $this->getArtmdueday4();
                break;
            case 49:
                return $this->getArtmplusmonths4();
                break;
            case 50:
                return $this->getArtmduedate4();
                break;
            case 51:
                return $this->getArtmplusyear4();
                break;
            case 52:
                return $this->getArtmsplit5();
                break;
            case 53:
                return $this->getArtmorderpct5();
                break;
            case 54:
                return $this->getArtmdiscpct5();
                break;
            case 55:
                return $this->getArtmdiscdays5();
                break;
            case 56:
                return $this->getArtmdiscday5();
                break;
            case 57:
                return $this->getArtmdiscdate5();
                break;
            case 58:
                return $this->getArtmduedays5();
                break;
            case 59:
                return $this->getArtmdueday5();
                break;
            case 60:
                return $this->getArtmplusmonths5();
                break;
            case 61:
                return $this->getArtmduedate5();
                break;
            case 62:
                return $this->getArtmplusyear5();
                break;
            case 63:
                return $this->getArtmsplit6();
                break;
            case 64:
                return $this->getArtmorderpct6();
                break;
            case 65:
                return $this->getArtmdiscpct6();
                break;
            case 66:
                return $this->getArtmdiscdays6();
                break;
            case 67:
                return $this->getArtmdiscday6();
                break;
            case 68:
                return $this->getArtmdiscdate6();
                break;
            case 69:
                return $this->getArtmduedays6();
                break;
            case 70:
                return $this->getArtmdueday6();
                break;
            case 71:
                return $this->getArtmplusmonths6();
                break;
            case 72:
                return $this->getArtmduedate6();
                break;
            case 73:
                return $this->getArtmplusyear6();
                break;
            case 74:
                return $this->getArtmdayfrom1();
                break;
            case 75:
                return $this->getArtmdaythru1();
                break;
            case 76:
                return $this->getArtmeomdiscpct1();
                break;
            case 77:
                return $this->getArtmeomdiscday1();
                break;
            case 78:
                return $this->getArtmeomdiscmonths1();
                break;
            case 79:
                return $this->getArtmeomdueday1();
                break;
            case 80:
                return $this->getArtmeomplusmonths1();
                break;
            case 81:
                return $this->getArtmdayfrom2();
                break;
            case 82:
                return $this->getArtmdaythru2();
                break;
            case 83:
                return $this->getArtmeomdiscpct2();
                break;
            case 84:
                return $this->getArtmeomdiscday2();
                break;
            case 85:
                return $this->getArtmeomdiscmonths2();
                break;
            case 86:
                return $this->getArtmeomdueday2();
                break;
            case 87:
                return $this->getArtmeomplusmonths2();
                break;
            case 88:
                return $this->getArtmdayfrom3();
                break;
            case 89:
                return $this->getArtmdaythru3();
                break;
            case 90:
                return $this->getArtmeomdiscpct3();
                break;
            case 91:
                return $this->getArtmeomdiscday3();
                break;
            case 92:
                return $this->getArtmeomdiscmonths3();
                break;
            case 93:
                return $this->getArtmeomdueday3();
                break;
            case 94:
                return $this->getArtmeomplusmonths3();
                break;
            case 95:
                return $this->getArtmctry();
                break;
            case 96:
                return $this->getArtmtermgrup();
                break;
            case 97:
                return $this->getDateupdtd();
                break;
            case 98:
                return $this->getTimeupdtd();
                break;
            case 99:
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

        if (isset($alreadyDumpedObjects['CustomerTermsCode'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CustomerTermsCode'][$this->hashCode()] = true;
        $keys = CustomerTermsCodeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArtmtermcd(),
            $keys[1] => $this->getArtmtermdesc(),
            $keys[2] => $this->getArtmmethod(),
            $keys[3] => $this->getArtmtype(),
            $keys[4] => $this->getArtmhold(),
            $keys[5] => $this->getArtmexpiredate(),
            $keys[6] => $this->getArtmfrtallow(),
            $keys[7] => $this->getArtmccprefix(),
            $keys[8] => $this->getArtmsplit1(),
            $keys[9] => $this->getArtmorderpct1(),
            $keys[10] => $this->getArtmdiscpct1(),
            $keys[11] => $this->getArtmdiscdays1(),
            $keys[12] => $this->getArtmdiscday1(),
            $keys[13] => $this->getArtmdiscdate1(),
            $keys[14] => $this->getArtmduedays1(),
            $keys[15] => $this->getArtmdueday1(),
            $keys[16] => $this->getArtmplusmonths1(),
            $keys[17] => $this->getArtmduedate1(),
            $keys[18] => $this->getArtmplusyear1(),
            $keys[19] => $this->getArtmsplit2(),
            $keys[20] => $this->getArtmorderpct2(),
            $keys[21] => $this->getArtmdiscpct2(),
            $keys[22] => $this->getArtmdiscdays2(),
            $keys[23] => $this->getArtmdiscday2(),
            $keys[24] => $this->getArtmdiscdate2(),
            $keys[25] => $this->getArtmduedays2(),
            $keys[26] => $this->getArtmdueday2(),
            $keys[27] => $this->getArtmplusmonths2(),
            $keys[28] => $this->getArtmduedate2(),
            $keys[29] => $this->getArtmplusyear2(),
            $keys[30] => $this->getArtmsplit3(),
            $keys[31] => $this->getArtmorderpct3(),
            $keys[32] => $this->getArtmdiscpct3(),
            $keys[33] => $this->getArtmdiscdays3(),
            $keys[34] => $this->getArtmdiscday3(),
            $keys[35] => $this->getArtmdiscdate3(),
            $keys[36] => $this->getArtmduedays3(),
            $keys[37] => $this->getArtmdueday3(),
            $keys[38] => $this->getArtmplusmonths3(),
            $keys[39] => $this->getArtmduedate3(),
            $keys[40] => $this->getArtmplusyear3(),
            $keys[41] => $this->getArtmsplit4(),
            $keys[42] => $this->getArtmorderpct4(),
            $keys[43] => $this->getArtmdiscpct4(),
            $keys[44] => $this->getArtmdiscdays4(),
            $keys[45] => $this->getArtmdiscday4(),
            $keys[46] => $this->getArtmdiscdate4(),
            $keys[47] => $this->getArtmduedays4(),
            $keys[48] => $this->getArtmdueday4(),
            $keys[49] => $this->getArtmplusmonths4(),
            $keys[50] => $this->getArtmduedate4(),
            $keys[51] => $this->getArtmplusyear4(),
            $keys[52] => $this->getArtmsplit5(),
            $keys[53] => $this->getArtmorderpct5(),
            $keys[54] => $this->getArtmdiscpct5(),
            $keys[55] => $this->getArtmdiscdays5(),
            $keys[56] => $this->getArtmdiscday5(),
            $keys[57] => $this->getArtmdiscdate5(),
            $keys[58] => $this->getArtmduedays5(),
            $keys[59] => $this->getArtmdueday5(),
            $keys[60] => $this->getArtmplusmonths5(),
            $keys[61] => $this->getArtmduedate5(),
            $keys[62] => $this->getArtmplusyear5(),
            $keys[63] => $this->getArtmsplit6(),
            $keys[64] => $this->getArtmorderpct6(),
            $keys[65] => $this->getArtmdiscpct6(),
            $keys[66] => $this->getArtmdiscdays6(),
            $keys[67] => $this->getArtmdiscday6(),
            $keys[68] => $this->getArtmdiscdate6(),
            $keys[69] => $this->getArtmduedays6(),
            $keys[70] => $this->getArtmdueday6(),
            $keys[71] => $this->getArtmplusmonths6(),
            $keys[72] => $this->getArtmduedate6(),
            $keys[73] => $this->getArtmplusyear6(),
            $keys[74] => $this->getArtmdayfrom1(),
            $keys[75] => $this->getArtmdaythru1(),
            $keys[76] => $this->getArtmeomdiscpct1(),
            $keys[77] => $this->getArtmeomdiscday1(),
            $keys[78] => $this->getArtmeomdiscmonths1(),
            $keys[79] => $this->getArtmeomdueday1(),
            $keys[80] => $this->getArtmeomplusmonths1(),
            $keys[81] => $this->getArtmdayfrom2(),
            $keys[82] => $this->getArtmdaythru2(),
            $keys[83] => $this->getArtmeomdiscpct2(),
            $keys[84] => $this->getArtmeomdiscday2(),
            $keys[85] => $this->getArtmeomdiscmonths2(),
            $keys[86] => $this->getArtmeomdueday2(),
            $keys[87] => $this->getArtmeomplusmonths2(),
            $keys[88] => $this->getArtmdayfrom3(),
            $keys[89] => $this->getArtmdaythru3(),
            $keys[90] => $this->getArtmeomdiscpct3(),
            $keys[91] => $this->getArtmeomdiscday3(),
            $keys[92] => $this->getArtmeomdiscmonths3(),
            $keys[93] => $this->getArtmeomdueday3(),
            $keys[94] => $this->getArtmeomplusmonths3(),
            $keys[95] => $this->getArtmctry(),
            $keys[96] => $this->getArtmtermgrup(),
            $keys[97] => $this->getDateupdtd(),
            $keys[98] => $this->getTimeupdtd(),
            $keys[99] => $this->getDummy(),
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
     * @return $this|\CustomerTermsCode
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CustomerTermsCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\CustomerTermsCode
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArtmtermcd($value);
                break;
            case 1:
                $this->setArtmtermdesc($value);
                break;
            case 2:
                $this->setArtmmethod($value);
                break;
            case 3:
                $this->setArtmtype($value);
                break;
            case 4:
                $this->setArtmhold($value);
                break;
            case 5:
                $this->setArtmexpiredate($value);
                break;
            case 6:
                $this->setArtmfrtallow($value);
                break;
            case 7:
                $this->setArtmccprefix($value);
                break;
            case 8:
                $this->setArtmsplit1($value);
                break;
            case 9:
                $this->setArtmorderpct1($value);
                break;
            case 10:
                $this->setArtmdiscpct1($value);
                break;
            case 11:
                $this->setArtmdiscdays1($value);
                break;
            case 12:
                $this->setArtmdiscday1($value);
                break;
            case 13:
                $this->setArtmdiscdate1($value);
                break;
            case 14:
                $this->setArtmduedays1($value);
                break;
            case 15:
                $this->setArtmdueday1($value);
                break;
            case 16:
                $this->setArtmplusmonths1($value);
                break;
            case 17:
                $this->setArtmduedate1($value);
                break;
            case 18:
                $this->setArtmplusyear1($value);
                break;
            case 19:
                $this->setArtmsplit2($value);
                break;
            case 20:
                $this->setArtmorderpct2($value);
                break;
            case 21:
                $this->setArtmdiscpct2($value);
                break;
            case 22:
                $this->setArtmdiscdays2($value);
                break;
            case 23:
                $this->setArtmdiscday2($value);
                break;
            case 24:
                $this->setArtmdiscdate2($value);
                break;
            case 25:
                $this->setArtmduedays2($value);
                break;
            case 26:
                $this->setArtmdueday2($value);
                break;
            case 27:
                $this->setArtmplusmonths2($value);
                break;
            case 28:
                $this->setArtmduedate2($value);
                break;
            case 29:
                $this->setArtmplusyear2($value);
                break;
            case 30:
                $this->setArtmsplit3($value);
                break;
            case 31:
                $this->setArtmorderpct3($value);
                break;
            case 32:
                $this->setArtmdiscpct3($value);
                break;
            case 33:
                $this->setArtmdiscdays3($value);
                break;
            case 34:
                $this->setArtmdiscday3($value);
                break;
            case 35:
                $this->setArtmdiscdate3($value);
                break;
            case 36:
                $this->setArtmduedays3($value);
                break;
            case 37:
                $this->setArtmdueday3($value);
                break;
            case 38:
                $this->setArtmplusmonths3($value);
                break;
            case 39:
                $this->setArtmduedate3($value);
                break;
            case 40:
                $this->setArtmplusyear3($value);
                break;
            case 41:
                $this->setArtmsplit4($value);
                break;
            case 42:
                $this->setArtmorderpct4($value);
                break;
            case 43:
                $this->setArtmdiscpct4($value);
                break;
            case 44:
                $this->setArtmdiscdays4($value);
                break;
            case 45:
                $this->setArtmdiscday4($value);
                break;
            case 46:
                $this->setArtmdiscdate4($value);
                break;
            case 47:
                $this->setArtmduedays4($value);
                break;
            case 48:
                $this->setArtmdueday4($value);
                break;
            case 49:
                $this->setArtmplusmonths4($value);
                break;
            case 50:
                $this->setArtmduedate4($value);
                break;
            case 51:
                $this->setArtmplusyear4($value);
                break;
            case 52:
                $this->setArtmsplit5($value);
                break;
            case 53:
                $this->setArtmorderpct5($value);
                break;
            case 54:
                $this->setArtmdiscpct5($value);
                break;
            case 55:
                $this->setArtmdiscdays5($value);
                break;
            case 56:
                $this->setArtmdiscday5($value);
                break;
            case 57:
                $this->setArtmdiscdate5($value);
                break;
            case 58:
                $this->setArtmduedays5($value);
                break;
            case 59:
                $this->setArtmdueday5($value);
                break;
            case 60:
                $this->setArtmplusmonths5($value);
                break;
            case 61:
                $this->setArtmduedate5($value);
                break;
            case 62:
                $this->setArtmplusyear5($value);
                break;
            case 63:
                $this->setArtmsplit6($value);
                break;
            case 64:
                $this->setArtmorderpct6($value);
                break;
            case 65:
                $this->setArtmdiscpct6($value);
                break;
            case 66:
                $this->setArtmdiscdays6($value);
                break;
            case 67:
                $this->setArtmdiscday6($value);
                break;
            case 68:
                $this->setArtmdiscdate6($value);
                break;
            case 69:
                $this->setArtmduedays6($value);
                break;
            case 70:
                $this->setArtmdueday6($value);
                break;
            case 71:
                $this->setArtmplusmonths6($value);
                break;
            case 72:
                $this->setArtmduedate6($value);
                break;
            case 73:
                $this->setArtmplusyear6($value);
                break;
            case 74:
                $this->setArtmdayfrom1($value);
                break;
            case 75:
                $this->setArtmdaythru1($value);
                break;
            case 76:
                $this->setArtmeomdiscpct1($value);
                break;
            case 77:
                $this->setArtmeomdiscday1($value);
                break;
            case 78:
                $this->setArtmeomdiscmonths1($value);
                break;
            case 79:
                $this->setArtmeomdueday1($value);
                break;
            case 80:
                $this->setArtmeomplusmonths1($value);
                break;
            case 81:
                $this->setArtmdayfrom2($value);
                break;
            case 82:
                $this->setArtmdaythru2($value);
                break;
            case 83:
                $this->setArtmeomdiscpct2($value);
                break;
            case 84:
                $this->setArtmeomdiscday2($value);
                break;
            case 85:
                $this->setArtmeomdiscmonths2($value);
                break;
            case 86:
                $this->setArtmeomdueday2($value);
                break;
            case 87:
                $this->setArtmeomplusmonths2($value);
                break;
            case 88:
                $this->setArtmdayfrom3($value);
                break;
            case 89:
                $this->setArtmdaythru3($value);
                break;
            case 90:
                $this->setArtmeomdiscpct3($value);
                break;
            case 91:
                $this->setArtmeomdiscday3($value);
                break;
            case 92:
                $this->setArtmeomdiscmonths3($value);
                break;
            case 93:
                $this->setArtmeomdueday3($value);
                break;
            case 94:
                $this->setArtmeomplusmonths3($value);
                break;
            case 95:
                $this->setArtmctry($value);
                break;
            case 96:
                $this->setArtmtermgrup($value);
                break;
            case 97:
                $this->setDateupdtd($value);
                break;
            case 98:
                $this->setTimeupdtd($value);
                break;
            case 99:
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
        $keys = CustomerTermsCodeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArtmtermcd($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArtmtermdesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArtmmethod($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArtmtype($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArtmhold($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArtmexpiredate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArtmfrtallow($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArtmccprefix($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArtmsplit1($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArtmorderpct1($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArtmdiscpct1($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArtmdiscdays1($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArtmdiscday1($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArtmdiscdate1($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArtmduedays1($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArtmdueday1($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArtmplusmonths1($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArtmduedate1($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArtmplusyear1($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArtmsplit2($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setArtmorderpct2($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setArtmdiscpct2($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setArtmdiscdays2($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArtmdiscday2($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArtmdiscdate2($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArtmduedays2($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setArtmdueday2($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setArtmplusmonths2($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setArtmduedate2($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setArtmplusyear2($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setArtmsplit3($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setArtmorderpct3($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setArtmdiscpct3($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setArtmdiscdays3($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setArtmdiscday3($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setArtmdiscdate3($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setArtmduedays3($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setArtmdueday3($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setArtmplusmonths3($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setArtmduedate3($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setArtmplusyear3($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setArtmsplit4($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setArtmorderpct4($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setArtmdiscpct4($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setArtmdiscdays4($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setArtmdiscday4($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setArtmdiscdate4($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setArtmduedays4($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setArtmdueday4($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setArtmplusmonths4($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setArtmduedate4($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setArtmplusyear4($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setArtmsplit5($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setArtmorderpct5($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setArtmdiscpct5($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setArtmdiscdays5($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setArtmdiscday5($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setArtmdiscdate5($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setArtmduedays5($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setArtmdueday5($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setArtmplusmonths5($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setArtmduedate5($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setArtmplusyear5($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setArtmsplit6($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setArtmorderpct6($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setArtmdiscpct6($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setArtmdiscdays6($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setArtmdiscday6($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setArtmdiscdate6($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setArtmduedays6($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setArtmdueday6($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setArtmplusmonths6($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setArtmduedate6($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setArtmplusyear6($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setArtmdayfrom1($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setArtmdaythru1($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setArtmeomdiscpct1($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setArtmeomdiscday1($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setArtmeomdiscmonths1($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setArtmeomdueday1($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setArtmeomplusmonths1($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setArtmdayfrom2($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setArtmdaythru2($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setArtmeomdiscpct2($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setArtmeomdiscday2($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setArtmeomdiscmonths2($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setArtmeomdueday2($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setArtmeomplusmonths2($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setArtmdayfrom3($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setArtmdaythru3($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setArtmeomdiscpct3($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setArtmeomdiscday3($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setArtmeomdiscmonths3($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setArtmeomdueday3($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setArtmeomplusmonths3($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setArtmctry($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setArtmtermgrup($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setDateupdtd($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setTimeupdtd($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setDummy($arr[$keys[99]]);
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
     * @return $this|\CustomerTermsCode The current object, for fluid interface
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
        $criteria = new Criteria(CustomerTermsCodeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMTERMCD)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMTERMCD, $this->artmtermcd);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMTERMDESC)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMTERMDESC, $this->artmtermdesc);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMMETHOD)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMMETHOD, $this->artmmethod);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMTYPE)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMTYPE, $this->artmtype);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMHOLD)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMHOLD, $this->artmhold);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEXPIREDATE)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEXPIREDATE, $this->artmexpiredate);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMFRTALLOW)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMFRTALLOW, $this->artmfrtallow);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMCCPREFIX)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMCCPREFIX, $this->artmccprefix);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMSPLIT1, $this->artmsplit1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMORDERPCT1, $this->artmorderpct1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCPCT1, $this->artmdiscpct1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS1, $this->artmdiscdays1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAY1, $this->artmdiscday1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDATE1, $this->artmdiscdate1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS1, $this->artmduedays1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAY1, $this->artmdueday1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS1, $this->artmplusmonths1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDATE1, $this->artmduedate1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR1, $this->artmplusyear1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMSPLIT2, $this->artmsplit2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMORDERPCT2, $this->artmorderpct2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCPCT2, $this->artmdiscpct2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS2, $this->artmdiscdays2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAY2, $this->artmdiscday2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDATE2, $this->artmdiscdate2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS2, $this->artmduedays2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAY2, $this->artmdueday2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS2, $this->artmplusmonths2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDATE2, $this->artmduedate2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR2, $this->artmplusyear2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMSPLIT3, $this->artmsplit3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMORDERPCT3, $this->artmorderpct3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCPCT3, $this->artmdiscpct3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS3, $this->artmdiscdays3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAY3, $this->artmdiscday3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDATE3, $this->artmdiscdate3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS3, $this->artmduedays3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAY3, $this->artmdueday3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS3, $this->artmplusmonths3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDATE3, $this->artmduedate3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR3, $this->artmplusyear3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMSPLIT4, $this->artmsplit4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMORDERPCT4, $this->artmorderpct4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCPCT4, $this->artmdiscpct4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS4, $this->artmdiscdays4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAY4, $this->artmdiscday4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDATE4, $this->artmdiscdate4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS4, $this->artmduedays4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAY4, $this->artmdueday4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS4, $this->artmplusmonths4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDATE4, $this->artmduedate4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR4)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR4, $this->artmplusyear4);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMSPLIT5, $this->artmsplit5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMORDERPCT5, $this->artmorderpct5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCPCT5, $this->artmdiscpct5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS5, $this->artmdiscdays5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAY5, $this->artmdiscday5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDATE5, $this->artmdiscdate5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS5, $this->artmduedays5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAY5, $this->artmdueday5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS5, $this->artmplusmonths5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDATE5, $this->artmduedate5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR5)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR5, $this->artmplusyear5);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMSPLIT6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMSPLIT6, $this->artmsplit6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMORDERPCT6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMORDERPCT6, $this->artmorderpct6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCPCT6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCPCT6, $this->artmdiscpct6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS6, $this->artmdiscdays6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDAY6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDAY6, $this->artmdiscday6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDISCDATE6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDISCDATE6, $this->artmdiscdate6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS6, $this->artmduedays6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDAY6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDAY6, $this->artmdueday6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS6, $this->artmplusmonths6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDUEDATE6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDUEDATE6, $this->artmduedate6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR6)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR6, $this->artmplusyear6);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYFROM1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDAYFROM1, $this->artmdayfrom1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU1, $this->artmdaythru1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT1, $this->artmeomdiscpct1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY1, $this->artmeomdiscday1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, $this->artmeomdiscmonths1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY1, $this->artmeomdueday1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, $this->artmeomplusmonths1);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYFROM2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDAYFROM2, $this->artmdayfrom2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU2, $this->artmdaythru2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT2, $this->artmeomdiscpct2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY2, $this->artmeomdiscday2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, $this->artmeomdiscmonths2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY2, $this->artmeomdueday2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, $this->artmeomplusmonths2);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYFROM3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDAYFROM3, $this->artmdayfrom3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU3, $this->artmdaythru3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT3, $this->artmeomdiscpct3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY3, $this->artmeomdiscday3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, $this->artmeomdiscmonths3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY3, $this->artmeomdueday3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, $this->artmeomplusmonths3);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMCTRY)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMCTRY, $this->artmctry);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_ARTMTERMGRUP)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_ARTMTERMGRUP, $this->artmtermgrup);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_DATEUPDTD)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_TIMEUPDTD)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(CustomerTermsCodeTableMap::COL_DUMMY)) {
            $criteria->add(CustomerTermsCodeTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildCustomerTermsCodeQuery::create();
        $criteria->add(CustomerTermsCodeTableMap::COL_ARTMTERMCD, $this->artmtermcd);

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
        $validPk = null !== $this->getArtmtermcd();

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
        return $this->getArtmtermcd();
    }

    /**
     * Generic method to set the primary key (artmtermcd column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArtmtermcd($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getArtmtermcd();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \CustomerTermsCode (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArtmtermcd($this->getArtmtermcd());
        $copyObj->setArtmtermdesc($this->getArtmtermdesc());
        $copyObj->setArtmmethod($this->getArtmmethod());
        $copyObj->setArtmtype($this->getArtmtype());
        $copyObj->setArtmhold($this->getArtmhold());
        $copyObj->setArtmexpiredate($this->getArtmexpiredate());
        $copyObj->setArtmfrtallow($this->getArtmfrtallow());
        $copyObj->setArtmccprefix($this->getArtmccprefix());
        $copyObj->setArtmsplit1($this->getArtmsplit1());
        $copyObj->setArtmorderpct1($this->getArtmorderpct1());
        $copyObj->setArtmdiscpct1($this->getArtmdiscpct1());
        $copyObj->setArtmdiscdays1($this->getArtmdiscdays1());
        $copyObj->setArtmdiscday1($this->getArtmdiscday1());
        $copyObj->setArtmdiscdate1($this->getArtmdiscdate1());
        $copyObj->setArtmduedays1($this->getArtmduedays1());
        $copyObj->setArtmdueday1($this->getArtmdueday1());
        $copyObj->setArtmplusmonths1($this->getArtmplusmonths1());
        $copyObj->setArtmduedate1($this->getArtmduedate1());
        $copyObj->setArtmplusyear1($this->getArtmplusyear1());
        $copyObj->setArtmsplit2($this->getArtmsplit2());
        $copyObj->setArtmorderpct2($this->getArtmorderpct2());
        $copyObj->setArtmdiscpct2($this->getArtmdiscpct2());
        $copyObj->setArtmdiscdays2($this->getArtmdiscdays2());
        $copyObj->setArtmdiscday2($this->getArtmdiscday2());
        $copyObj->setArtmdiscdate2($this->getArtmdiscdate2());
        $copyObj->setArtmduedays2($this->getArtmduedays2());
        $copyObj->setArtmdueday2($this->getArtmdueday2());
        $copyObj->setArtmplusmonths2($this->getArtmplusmonths2());
        $copyObj->setArtmduedate2($this->getArtmduedate2());
        $copyObj->setArtmplusyear2($this->getArtmplusyear2());
        $copyObj->setArtmsplit3($this->getArtmsplit3());
        $copyObj->setArtmorderpct3($this->getArtmorderpct3());
        $copyObj->setArtmdiscpct3($this->getArtmdiscpct3());
        $copyObj->setArtmdiscdays3($this->getArtmdiscdays3());
        $copyObj->setArtmdiscday3($this->getArtmdiscday3());
        $copyObj->setArtmdiscdate3($this->getArtmdiscdate3());
        $copyObj->setArtmduedays3($this->getArtmduedays3());
        $copyObj->setArtmdueday3($this->getArtmdueday3());
        $copyObj->setArtmplusmonths3($this->getArtmplusmonths3());
        $copyObj->setArtmduedate3($this->getArtmduedate3());
        $copyObj->setArtmplusyear3($this->getArtmplusyear3());
        $copyObj->setArtmsplit4($this->getArtmsplit4());
        $copyObj->setArtmorderpct4($this->getArtmorderpct4());
        $copyObj->setArtmdiscpct4($this->getArtmdiscpct4());
        $copyObj->setArtmdiscdays4($this->getArtmdiscdays4());
        $copyObj->setArtmdiscday4($this->getArtmdiscday4());
        $copyObj->setArtmdiscdate4($this->getArtmdiscdate4());
        $copyObj->setArtmduedays4($this->getArtmduedays4());
        $copyObj->setArtmdueday4($this->getArtmdueday4());
        $copyObj->setArtmplusmonths4($this->getArtmplusmonths4());
        $copyObj->setArtmduedate4($this->getArtmduedate4());
        $copyObj->setArtmplusyear4($this->getArtmplusyear4());
        $copyObj->setArtmsplit5($this->getArtmsplit5());
        $copyObj->setArtmorderpct5($this->getArtmorderpct5());
        $copyObj->setArtmdiscpct5($this->getArtmdiscpct5());
        $copyObj->setArtmdiscdays5($this->getArtmdiscdays5());
        $copyObj->setArtmdiscday5($this->getArtmdiscday5());
        $copyObj->setArtmdiscdate5($this->getArtmdiscdate5());
        $copyObj->setArtmduedays5($this->getArtmduedays5());
        $copyObj->setArtmdueday5($this->getArtmdueday5());
        $copyObj->setArtmplusmonths5($this->getArtmplusmonths5());
        $copyObj->setArtmduedate5($this->getArtmduedate5());
        $copyObj->setArtmplusyear5($this->getArtmplusyear5());
        $copyObj->setArtmsplit6($this->getArtmsplit6());
        $copyObj->setArtmorderpct6($this->getArtmorderpct6());
        $copyObj->setArtmdiscpct6($this->getArtmdiscpct6());
        $copyObj->setArtmdiscdays6($this->getArtmdiscdays6());
        $copyObj->setArtmdiscday6($this->getArtmdiscday6());
        $copyObj->setArtmdiscdate6($this->getArtmdiscdate6());
        $copyObj->setArtmduedays6($this->getArtmduedays6());
        $copyObj->setArtmdueday6($this->getArtmdueday6());
        $copyObj->setArtmplusmonths6($this->getArtmplusmonths6());
        $copyObj->setArtmduedate6($this->getArtmduedate6());
        $copyObj->setArtmplusyear6($this->getArtmplusyear6());
        $copyObj->setArtmdayfrom1($this->getArtmdayfrom1());
        $copyObj->setArtmdaythru1($this->getArtmdaythru1());
        $copyObj->setArtmeomdiscpct1($this->getArtmeomdiscpct1());
        $copyObj->setArtmeomdiscday1($this->getArtmeomdiscday1());
        $copyObj->setArtmeomdiscmonths1($this->getArtmeomdiscmonths1());
        $copyObj->setArtmeomdueday1($this->getArtmeomdueday1());
        $copyObj->setArtmeomplusmonths1($this->getArtmeomplusmonths1());
        $copyObj->setArtmdayfrom2($this->getArtmdayfrom2());
        $copyObj->setArtmdaythru2($this->getArtmdaythru2());
        $copyObj->setArtmeomdiscpct2($this->getArtmeomdiscpct2());
        $copyObj->setArtmeomdiscday2($this->getArtmeomdiscday2());
        $copyObj->setArtmeomdiscmonths2($this->getArtmeomdiscmonths2());
        $copyObj->setArtmeomdueday2($this->getArtmeomdueday2());
        $copyObj->setArtmeomplusmonths2($this->getArtmeomplusmonths2());
        $copyObj->setArtmdayfrom3($this->getArtmdayfrom3());
        $copyObj->setArtmdaythru3($this->getArtmdaythru3());
        $copyObj->setArtmeomdiscpct3($this->getArtmeomdiscpct3());
        $copyObj->setArtmeomdiscday3($this->getArtmeomdiscday3());
        $copyObj->setArtmeomdiscmonths3($this->getArtmeomdiscmonths3());
        $copyObj->setArtmeomdueday3($this->getArtmeomdueday3());
        $copyObj->setArtmeomplusmonths3($this->getArtmeomplusmonths3());
        $copyObj->setArtmctry($this->getArtmctry());
        $copyObj->setArtmtermgrup($this->getArtmtermgrup());
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
     * @return \CustomerTermsCode Clone of current object.
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
        $this->artmtermcd = null;
        $this->artmtermdesc = null;
        $this->artmmethod = null;
        $this->artmtype = null;
        $this->artmhold = null;
        $this->artmexpiredate = null;
        $this->artmfrtallow = null;
        $this->artmccprefix = null;
        $this->artmsplit1 = null;
        $this->artmorderpct1 = null;
        $this->artmdiscpct1 = null;
        $this->artmdiscdays1 = null;
        $this->artmdiscday1 = null;
        $this->artmdiscdate1 = null;
        $this->artmduedays1 = null;
        $this->artmdueday1 = null;
        $this->artmplusmonths1 = null;
        $this->artmduedate1 = null;
        $this->artmplusyear1 = null;
        $this->artmsplit2 = null;
        $this->artmorderpct2 = null;
        $this->artmdiscpct2 = null;
        $this->artmdiscdays2 = null;
        $this->artmdiscday2 = null;
        $this->artmdiscdate2 = null;
        $this->artmduedays2 = null;
        $this->artmdueday2 = null;
        $this->artmplusmonths2 = null;
        $this->artmduedate2 = null;
        $this->artmplusyear2 = null;
        $this->artmsplit3 = null;
        $this->artmorderpct3 = null;
        $this->artmdiscpct3 = null;
        $this->artmdiscdays3 = null;
        $this->artmdiscday3 = null;
        $this->artmdiscdate3 = null;
        $this->artmduedays3 = null;
        $this->artmdueday3 = null;
        $this->artmplusmonths3 = null;
        $this->artmduedate3 = null;
        $this->artmplusyear3 = null;
        $this->artmsplit4 = null;
        $this->artmorderpct4 = null;
        $this->artmdiscpct4 = null;
        $this->artmdiscdays4 = null;
        $this->artmdiscday4 = null;
        $this->artmdiscdate4 = null;
        $this->artmduedays4 = null;
        $this->artmdueday4 = null;
        $this->artmplusmonths4 = null;
        $this->artmduedate4 = null;
        $this->artmplusyear4 = null;
        $this->artmsplit5 = null;
        $this->artmorderpct5 = null;
        $this->artmdiscpct5 = null;
        $this->artmdiscdays5 = null;
        $this->artmdiscday5 = null;
        $this->artmdiscdate5 = null;
        $this->artmduedays5 = null;
        $this->artmdueday5 = null;
        $this->artmplusmonths5 = null;
        $this->artmduedate5 = null;
        $this->artmplusyear5 = null;
        $this->artmsplit6 = null;
        $this->artmorderpct6 = null;
        $this->artmdiscpct6 = null;
        $this->artmdiscdays6 = null;
        $this->artmdiscday6 = null;
        $this->artmdiscdate6 = null;
        $this->artmduedays6 = null;
        $this->artmdueday6 = null;
        $this->artmplusmonths6 = null;
        $this->artmduedate6 = null;
        $this->artmplusyear6 = null;
        $this->artmdayfrom1 = null;
        $this->artmdaythru1 = null;
        $this->artmeomdiscpct1 = null;
        $this->artmeomdiscday1 = null;
        $this->artmeomdiscmonths1 = null;
        $this->artmeomdueday1 = null;
        $this->artmeomplusmonths1 = null;
        $this->artmdayfrom2 = null;
        $this->artmdaythru2 = null;
        $this->artmeomdiscpct2 = null;
        $this->artmeomdiscday2 = null;
        $this->artmeomdiscmonths2 = null;
        $this->artmeomdueday2 = null;
        $this->artmeomplusmonths2 = null;
        $this->artmdayfrom3 = null;
        $this->artmdaythru3 = null;
        $this->artmeomdiscpct3 = null;
        $this->artmeomdiscday3 = null;
        $this->artmeomdiscmonths3 = null;
        $this->artmeomdueday3 = null;
        $this->artmeomplusmonths3 = null;
        $this->artmctry = null;
        $this->artmtermgrup = null;
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
        return (string) $this->exportTo(CustomerTermsCodeTableMap::DEFAULT_STRING_FORMAT);
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
