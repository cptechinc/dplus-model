<?php

namespace Base;

use \ApTermsCode as ChildApTermsCode;
use \ApTermsCodeQuery as ChildApTermsCodeQuery;
use \Vendor as ChildVendor;
use \VendorQuery as ChildVendorQuery;
use \Exception;
use \PDO;
use Map\ApTermsCodeTableMap;
use Map\VendorTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'ap_term_code' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ApTermsCode implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ApTermsCodeTableMap';


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
     * The value for the aptmtermcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $aptmtermcode;

    /**
     * The value for the aptmtermdesc field.
     *
     * @var        string
     */
    protected $aptmtermdesc;

    /**
     * The value for the aptmmethod field.
     *
     * @var        string
     */
    protected $aptmmethod;

    /**
     * The value for the aptmexpiredate field.
     *
     * @var        string
     */
    protected $aptmexpiredate;

    /**
     * The value for the aptmsplit1 field.
     *
     * @var        string
     */
    protected $aptmsplit1;

    /**
     * The value for the aptmorderpct1 field.
     *
     * @var        string
     */
    protected $aptmorderpct1;

    /**
     * The value for the aptmdiscpct1 field.
     *
     * @var        string
     */
    protected $aptmdiscpct1;

    /**
     * The value for the aptmdiscdays1 field.
     *
     * @var        int
     */
    protected $aptmdiscdays1;

    /**
     * The value for the aptmdiscday1 field.
     *
     * @var        string
     */
    protected $aptmdiscday1;

    /**
     * The value for the aptmdiscdate1 field.
     *
     * @var        string
     */
    protected $aptmdiscdate1;

    /**
     * The value for the aptmduedays1 field.
     *
     * @var        int
     */
    protected $aptmduedays1;

    /**
     * The value for the aptmdueday1 field.
     *
     * @var        string
     */
    protected $aptmdueday1;

    /**
     * The value for the aptmplusmonths1 field.
     *
     * @var        int
     */
    protected $aptmplusmonths1;

    /**
     * The value for the aptmduedate1 field.
     *
     * @var        string
     */
    protected $aptmduedate1;

    /**
     * The value for the aptmplusyear1 field.
     *
     * @var        string
     */
    protected $aptmplusyear1;

    /**
     * The value for the aptmsplit2 field.
     *
     * @var        string
     */
    protected $aptmsplit2;

    /**
     * The value for the aptmorderpct2 field.
     *
     * @var        string
     */
    protected $aptmorderpct2;

    /**
     * The value for the aptmdiscpct2 field.
     *
     * @var        string
     */
    protected $aptmdiscpct2;

    /**
     * The value for the aptmdiscdays2 field.
     *
     * @var        int
     */
    protected $aptmdiscdays2;

    /**
     * The value for the aptmdiscday2 field.
     *
     * @var        string
     */
    protected $aptmdiscday2;

    /**
     * The value for the aptmdiscdate2 field.
     *
     * @var        string
     */
    protected $aptmdiscdate2;

    /**
     * The value for the aptmduedays2 field.
     *
     * @var        int
     */
    protected $aptmduedays2;

    /**
     * The value for the aptmdueday2 field.
     *
     * @var        string
     */
    protected $aptmdueday2;

    /**
     * The value for the aptmplusmonths2 field.
     *
     * @var        int
     */
    protected $aptmplusmonths2;

    /**
     * The value for the aptmduedate2 field.
     *
     * @var        string
     */
    protected $aptmduedate2;

    /**
     * The value for the aptmplusyear2 field.
     *
     * @var        string
     */
    protected $aptmplusyear2;

    /**
     * The value for the aptmsplit3 field.
     *
     * @var        string
     */
    protected $aptmsplit3;

    /**
     * The value for the aptmorderpct3 field.
     *
     * @var        string
     */
    protected $aptmorderpct3;

    /**
     * The value for the aptmdiscpct3 field.
     *
     * @var        string
     */
    protected $aptmdiscpct3;

    /**
     * The value for the aptmdiscdays3 field.
     *
     * @var        int
     */
    protected $aptmdiscdays3;

    /**
     * The value for the aptmdiscday3 field.
     *
     * @var        string
     */
    protected $aptmdiscday3;

    /**
     * The value for the aptmdiscdate3 field.
     *
     * @var        string
     */
    protected $aptmdiscdate3;

    /**
     * The value for the aptmduedays3 field.
     *
     * @var        int
     */
    protected $aptmduedays3;

    /**
     * The value for the aptmdueday3 field.
     *
     * @var        string
     */
    protected $aptmdueday3;

    /**
     * The value for the aptmplusmonths3 field.
     *
     * @var        int
     */
    protected $aptmplusmonths3;

    /**
     * The value for the aptmduedate3 field.
     *
     * @var        string
     */
    protected $aptmduedate3;

    /**
     * The value for the aptmplusyear3 field.
     *
     * @var        string
     */
    protected $aptmplusyear3;

    /**
     * The value for the aptmsplit4 field.
     *
     * @var        string
     */
    protected $aptmsplit4;

    /**
     * The value for the aptmorderpct4 field.
     *
     * @var        string
     */
    protected $aptmorderpct4;

    /**
     * The value for the aptmdiscpct4 field.
     *
     * @var        string
     */
    protected $aptmdiscpct4;

    /**
     * The value for the aptmdiscdays4 field.
     *
     * @var        int
     */
    protected $aptmdiscdays4;

    /**
     * The value for the aptmdiscday4 field.
     *
     * @var        string
     */
    protected $aptmdiscday4;

    /**
     * The value for the aptmdiscdate4 field.
     *
     * @var        string
     */
    protected $aptmdiscdate4;

    /**
     * The value for the aptmduedays4 field.
     *
     * @var        int
     */
    protected $aptmduedays4;

    /**
     * The value for the aptmdueday4 field.
     *
     * @var        string
     */
    protected $aptmdueday4;

    /**
     * The value for the aptmplusmonths4 field.
     *
     * @var        int
     */
    protected $aptmplusmonths4;

    /**
     * The value for the aptmduedate4 field.
     *
     * @var        string
     */
    protected $aptmduedate4;

    /**
     * The value for the aptmplusyear4 field.
     *
     * @var        string
     */
    protected $aptmplusyear4;

    /**
     * The value for the aptmsplit5 field.
     *
     * @var        string
     */
    protected $aptmsplit5;

    /**
     * The value for the aptmorderpct5 field.
     *
     * @var        string
     */
    protected $aptmorderpct5;

    /**
     * The value for the aptmdiscpct5 field.
     *
     * @var        string
     */
    protected $aptmdiscpct5;

    /**
     * The value for the aptmdiscdays5 field.
     *
     * @var        int
     */
    protected $aptmdiscdays5;

    /**
     * The value for the aptmdiscday5 field.
     *
     * @var        string
     */
    protected $aptmdiscday5;

    /**
     * The value for the aptmdiscdate5 field.
     *
     * @var        string
     */
    protected $aptmdiscdate5;

    /**
     * The value for the aptmduedays5 field.
     *
     * @var        int
     */
    protected $aptmduedays5;

    /**
     * The value for the aptmdueday5 field.
     *
     * @var        string
     */
    protected $aptmdueday5;

    /**
     * The value for the aptmplusmonths5 field.
     *
     * @var        int
     */
    protected $aptmplusmonths5;

    /**
     * The value for the aptmduedate5 field.
     *
     * @var        string
     */
    protected $aptmduedate5;

    /**
     * The value for the aptmplusyear5 field.
     *
     * @var        string
     */
    protected $aptmplusyear5;

    /**
     * The value for the aptmdayfrom1 field.
     *
     * @var        int
     */
    protected $aptmdayfrom1;

    /**
     * The value for the aptmdaythru1 field.
     *
     * @var        int
     */
    protected $aptmdaythru1;

    /**
     * The value for the aptmeomdiscpct1 field.
     *
     * @var        string
     */
    protected $aptmeomdiscpct1;

    /**
     * The value for the aptmeomdiscday1 field.
     *
     * @var        int
     */
    protected $aptmeomdiscday1;

    /**
     * The value for the aptmeomdiscmonths1 field.
     *
     * @var        int
     */
    protected $aptmeomdiscmonths1;

    /**
     * The value for the aptmeomdueday1 field.
     *
     * @var        int
     */
    protected $aptmeomdueday1;

    /**
     * The value for the aptmeomplusmonths1 field.
     *
     * @var        int
     */
    protected $aptmeomplusmonths1;

    /**
     * The value for the aptmdayfrom2 field.
     *
     * @var        int
     */
    protected $aptmdayfrom2;

    /**
     * The value for the aptmdaythru2 field.
     *
     * @var        int
     */
    protected $aptmdaythru2;

    /**
     * The value for the aptmeomdiscpct2 field.
     *
     * @var        string
     */
    protected $aptmeomdiscpct2;

    /**
     * The value for the aptmeomdiscday2 field.
     *
     * @var        int
     */
    protected $aptmeomdiscday2;

    /**
     * The value for the aptmeomdiscmonths2 field.
     *
     * @var        int
     */
    protected $aptmeomdiscmonths2;

    /**
     * The value for the aptmeomdueday2 field.
     *
     * @var        int
     */
    protected $aptmeomdueday2;

    /**
     * The value for the aptmeomplusmonths2 field.
     *
     * @var        int
     */
    protected $aptmeomplusmonths2;

    /**
     * The value for the aptmdayfrom3 field.
     *
     * @var        int
     */
    protected $aptmdayfrom3;

    /**
     * The value for the aptmdaythru3 field.
     *
     * @var        int
     */
    protected $aptmdaythru3;

    /**
     * The value for the aptmeomdiscpct3 field.
     *
     * @var        string
     */
    protected $aptmeomdiscpct3;

    /**
     * The value for the aptmeomdiscday3 field.
     *
     * @var        int
     */
    protected $aptmeomdiscday3;

    /**
     * The value for the aptmeomdiscmonths3 field.
     *
     * @var        int
     */
    protected $aptmeomdiscmonths3;

    /**
     * The value for the aptmeomdueday3 field.
     *
     * @var        int
     */
    protected $aptmeomdueday3;

    /**
     * The value for the aptmeomplusmonths3 field.
     *
     * @var        int
     */
    protected $aptmeomplusmonths3;

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
     * @var        ObjectCollection|ChildVendor[] Collection to store aggregation of ChildVendor objects.
     */
    protected $collVendors;
    protected $collVendorsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildVendor[]
     */
    protected $vendorsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->aptmtermcode = '';
    }

    /**
     * Initializes internal state of Base\ApTermsCode object.
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
     * Compares this with another <code>ApTermsCode</code> instance.  If
     * <code>obj</code> is an instance of <code>ApTermsCode</code>, delegates to
     * <code>equals(ApTermsCode)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ApTermsCode The current object, for fluid interface
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
     * Get the [aptmtermcode] column value.
     *
     * @return string
     */
    public function getAptmtermcode()
    {
        return $this->aptmtermcode;
    }

    /**
     * Get the [aptmtermdesc] column value.
     *
     * @return string
     */
    public function getAptmtermdesc()
    {
        return $this->aptmtermdesc;
    }

    /**
     * Get the [aptmmethod] column value.
     *
     * @return string
     */
    public function getAptmmethod()
    {
        return $this->aptmmethod;
    }

    /**
     * Get the [aptmexpiredate] column value.
     *
     * @return string
     */
    public function getAptmexpiredate()
    {
        return $this->aptmexpiredate;
    }

    /**
     * Get the [aptmsplit1] column value.
     *
     * @return string
     */
    public function getAptmsplit1()
    {
        return $this->aptmsplit1;
    }

    /**
     * Get the [aptmorderpct1] column value.
     *
     * @return string
     */
    public function getAptmorderpct1()
    {
        return $this->aptmorderpct1;
    }

    /**
     * Get the [aptmdiscpct1] column value.
     *
     * @return string
     */
    public function getAptmdiscpct1()
    {
        return $this->aptmdiscpct1;
    }

    /**
     * Get the [aptmdiscdays1] column value.
     *
     * @return int
     */
    public function getAptmdiscdays1()
    {
        return $this->aptmdiscdays1;
    }

    /**
     * Get the [aptmdiscday1] column value.
     *
     * @return string
     */
    public function getAptmdiscday1()
    {
        return $this->aptmdiscday1;
    }

    /**
     * Get the [aptmdiscdate1] column value.
     *
     * @return string
     */
    public function getAptmdiscdate1()
    {
        return $this->aptmdiscdate1;
    }

    /**
     * Get the [aptmduedays1] column value.
     *
     * @return int
     */
    public function getAptmduedays1()
    {
        return $this->aptmduedays1;
    }

    /**
     * Get the [aptmdueday1] column value.
     *
     * @return string
     */
    public function getAptmdueday1()
    {
        return $this->aptmdueday1;
    }

    /**
     * Get the [aptmplusmonths1] column value.
     *
     * @return int
     */
    public function getAptmplusmonths1()
    {
        return $this->aptmplusmonths1;
    }

    /**
     * Get the [aptmduedate1] column value.
     *
     * @return string
     */
    public function getAptmduedate1()
    {
        return $this->aptmduedate1;
    }

    /**
     * Get the [aptmplusyear1] column value.
     *
     * @return string
     */
    public function getAptmplusyear1()
    {
        return $this->aptmplusyear1;
    }

    /**
     * Get the [aptmsplit2] column value.
     *
     * @return string
     */
    public function getAptmsplit2()
    {
        return $this->aptmsplit2;
    }

    /**
     * Get the [aptmorderpct2] column value.
     *
     * @return string
     */
    public function getAptmorderpct2()
    {
        return $this->aptmorderpct2;
    }

    /**
     * Get the [aptmdiscpct2] column value.
     *
     * @return string
     */
    public function getAptmdiscpct2()
    {
        return $this->aptmdiscpct2;
    }

    /**
     * Get the [aptmdiscdays2] column value.
     *
     * @return int
     */
    public function getAptmdiscdays2()
    {
        return $this->aptmdiscdays2;
    }

    /**
     * Get the [aptmdiscday2] column value.
     *
     * @return string
     */
    public function getAptmdiscday2()
    {
        return $this->aptmdiscday2;
    }

    /**
     * Get the [aptmdiscdate2] column value.
     *
     * @return string
     */
    public function getAptmdiscdate2()
    {
        return $this->aptmdiscdate2;
    }

    /**
     * Get the [aptmduedays2] column value.
     *
     * @return int
     */
    public function getAptmduedays2()
    {
        return $this->aptmduedays2;
    }

    /**
     * Get the [aptmdueday2] column value.
     *
     * @return string
     */
    public function getAptmdueday2()
    {
        return $this->aptmdueday2;
    }

    /**
     * Get the [aptmplusmonths2] column value.
     *
     * @return int
     */
    public function getAptmplusmonths2()
    {
        return $this->aptmplusmonths2;
    }

    /**
     * Get the [aptmduedate2] column value.
     *
     * @return string
     */
    public function getAptmduedate2()
    {
        return $this->aptmduedate2;
    }

    /**
     * Get the [aptmplusyear2] column value.
     *
     * @return string
     */
    public function getAptmplusyear2()
    {
        return $this->aptmplusyear2;
    }

    /**
     * Get the [aptmsplit3] column value.
     *
     * @return string
     */
    public function getAptmsplit3()
    {
        return $this->aptmsplit3;
    }

    /**
     * Get the [aptmorderpct3] column value.
     *
     * @return string
     */
    public function getAptmorderpct3()
    {
        return $this->aptmorderpct3;
    }

    /**
     * Get the [aptmdiscpct3] column value.
     *
     * @return string
     */
    public function getAptmdiscpct3()
    {
        return $this->aptmdiscpct3;
    }

    /**
     * Get the [aptmdiscdays3] column value.
     *
     * @return int
     */
    public function getAptmdiscdays3()
    {
        return $this->aptmdiscdays3;
    }

    /**
     * Get the [aptmdiscday3] column value.
     *
     * @return string
     */
    public function getAptmdiscday3()
    {
        return $this->aptmdiscday3;
    }

    /**
     * Get the [aptmdiscdate3] column value.
     *
     * @return string
     */
    public function getAptmdiscdate3()
    {
        return $this->aptmdiscdate3;
    }

    /**
     * Get the [aptmduedays3] column value.
     *
     * @return int
     */
    public function getAptmduedays3()
    {
        return $this->aptmduedays3;
    }

    /**
     * Get the [aptmdueday3] column value.
     *
     * @return string
     */
    public function getAptmdueday3()
    {
        return $this->aptmdueday3;
    }

    /**
     * Get the [aptmplusmonths3] column value.
     *
     * @return int
     */
    public function getAptmplusmonths3()
    {
        return $this->aptmplusmonths3;
    }

    /**
     * Get the [aptmduedate3] column value.
     *
     * @return string
     */
    public function getAptmduedate3()
    {
        return $this->aptmduedate3;
    }

    /**
     * Get the [aptmplusyear3] column value.
     *
     * @return string
     */
    public function getAptmplusyear3()
    {
        return $this->aptmplusyear3;
    }

    /**
     * Get the [aptmsplit4] column value.
     *
     * @return string
     */
    public function getAptmsplit4()
    {
        return $this->aptmsplit4;
    }

    /**
     * Get the [aptmorderpct4] column value.
     *
     * @return string
     */
    public function getAptmorderpct4()
    {
        return $this->aptmorderpct4;
    }

    /**
     * Get the [aptmdiscpct4] column value.
     *
     * @return string
     */
    public function getAptmdiscpct4()
    {
        return $this->aptmdiscpct4;
    }

    /**
     * Get the [aptmdiscdays4] column value.
     *
     * @return int
     */
    public function getAptmdiscdays4()
    {
        return $this->aptmdiscdays4;
    }

    /**
     * Get the [aptmdiscday4] column value.
     *
     * @return string
     */
    public function getAptmdiscday4()
    {
        return $this->aptmdiscday4;
    }

    /**
     * Get the [aptmdiscdate4] column value.
     *
     * @return string
     */
    public function getAptmdiscdate4()
    {
        return $this->aptmdiscdate4;
    }

    /**
     * Get the [aptmduedays4] column value.
     *
     * @return int
     */
    public function getAptmduedays4()
    {
        return $this->aptmduedays4;
    }

    /**
     * Get the [aptmdueday4] column value.
     *
     * @return string
     */
    public function getAptmdueday4()
    {
        return $this->aptmdueday4;
    }

    /**
     * Get the [aptmplusmonths4] column value.
     *
     * @return int
     */
    public function getAptmplusmonths4()
    {
        return $this->aptmplusmonths4;
    }

    /**
     * Get the [aptmduedate4] column value.
     *
     * @return string
     */
    public function getAptmduedate4()
    {
        return $this->aptmduedate4;
    }

    /**
     * Get the [aptmplusyear4] column value.
     *
     * @return string
     */
    public function getAptmplusyear4()
    {
        return $this->aptmplusyear4;
    }

    /**
     * Get the [aptmsplit5] column value.
     *
     * @return string
     */
    public function getAptmsplit5()
    {
        return $this->aptmsplit5;
    }

    /**
     * Get the [aptmorderpct5] column value.
     *
     * @return string
     */
    public function getAptmorderpct5()
    {
        return $this->aptmorderpct5;
    }

    /**
     * Get the [aptmdiscpct5] column value.
     *
     * @return string
     */
    public function getAptmdiscpct5()
    {
        return $this->aptmdiscpct5;
    }

    /**
     * Get the [aptmdiscdays5] column value.
     *
     * @return int
     */
    public function getAptmdiscdays5()
    {
        return $this->aptmdiscdays5;
    }

    /**
     * Get the [aptmdiscday5] column value.
     *
     * @return string
     */
    public function getAptmdiscday5()
    {
        return $this->aptmdiscday5;
    }

    /**
     * Get the [aptmdiscdate5] column value.
     *
     * @return string
     */
    public function getAptmdiscdate5()
    {
        return $this->aptmdiscdate5;
    }

    /**
     * Get the [aptmduedays5] column value.
     *
     * @return int
     */
    public function getAptmduedays5()
    {
        return $this->aptmduedays5;
    }

    /**
     * Get the [aptmdueday5] column value.
     *
     * @return string
     */
    public function getAptmdueday5()
    {
        return $this->aptmdueday5;
    }

    /**
     * Get the [aptmplusmonths5] column value.
     *
     * @return int
     */
    public function getAptmplusmonths5()
    {
        return $this->aptmplusmonths5;
    }

    /**
     * Get the [aptmduedate5] column value.
     *
     * @return string
     */
    public function getAptmduedate5()
    {
        return $this->aptmduedate5;
    }

    /**
     * Get the [aptmplusyear5] column value.
     *
     * @return string
     */
    public function getAptmplusyear5()
    {
        return $this->aptmplusyear5;
    }

    /**
     * Get the [aptmdayfrom1] column value.
     *
     * @return int
     */
    public function getAptmdayfrom1()
    {
        return $this->aptmdayfrom1;
    }

    /**
     * Get the [aptmdaythru1] column value.
     *
     * @return int
     */
    public function getAptmdaythru1()
    {
        return $this->aptmdaythru1;
    }

    /**
     * Get the [aptmeomdiscpct1] column value.
     *
     * @return string
     */
    public function getAptmeomdiscpct1()
    {
        return $this->aptmeomdiscpct1;
    }

    /**
     * Get the [aptmeomdiscday1] column value.
     *
     * @return int
     */
    public function getAptmeomdiscday1()
    {
        return $this->aptmeomdiscday1;
    }

    /**
     * Get the [aptmeomdiscmonths1] column value.
     *
     * @return int
     */
    public function getAptmeomdiscmonths1()
    {
        return $this->aptmeomdiscmonths1;
    }

    /**
     * Get the [aptmeomdueday1] column value.
     *
     * @return int
     */
    public function getAptmeomdueday1()
    {
        return $this->aptmeomdueday1;
    }

    /**
     * Get the [aptmeomplusmonths1] column value.
     *
     * @return int
     */
    public function getAptmeomplusmonths1()
    {
        return $this->aptmeomplusmonths1;
    }

    /**
     * Get the [aptmdayfrom2] column value.
     *
     * @return int
     */
    public function getAptmdayfrom2()
    {
        return $this->aptmdayfrom2;
    }

    /**
     * Get the [aptmdaythru2] column value.
     *
     * @return int
     */
    public function getAptmdaythru2()
    {
        return $this->aptmdaythru2;
    }

    /**
     * Get the [aptmeomdiscpct2] column value.
     *
     * @return string
     */
    public function getAptmeomdiscpct2()
    {
        return $this->aptmeomdiscpct2;
    }

    /**
     * Get the [aptmeomdiscday2] column value.
     *
     * @return int
     */
    public function getAptmeomdiscday2()
    {
        return $this->aptmeomdiscday2;
    }

    /**
     * Get the [aptmeomdiscmonths2] column value.
     *
     * @return int
     */
    public function getAptmeomdiscmonths2()
    {
        return $this->aptmeomdiscmonths2;
    }

    /**
     * Get the [aptmeomdueday2] column value.
     *
     * @return int
     */
    public function getAptmeomdueday2()
    {
        return $this->aptmeomdueday2;
    }

    /**
     * Get the [aptmeomplusmonths2] column value.
     *
     * @return int
     */
    public function getAptmeomplusmonths2()
    {
        return $this->aptmeomplusmonths2;
    }

    /**
     * Get the [aptmdayfrom3] column value.
     *
     * @return int
     */
    public function getAptmdayfrom3()
    {
        return $this->aptmdayfrom3;
    }

    /**
     * Get the [aptmdaythru3] column value.
     *
     * @return int
     */
    public function getAptmdaythru3()
    {
        return $this->aptmdaythru3;
    }

    /**
     * Get the [aptmeomdiscpct3] column value.
     *
     * @return string
     */
    public function getAptmeomdiscpct3()
    {
        return $this->aptmeomdiscpct3;
    }

    /**
     * Get the [aptmeomdiscday3] column value.
     *
     * @return int
     */
    public function getAptmeomdiscday3()
    {
        return $this->aptmeomdiscday3;
    }

    /**
     * Get the [aptmeomdiscmonths3] column value.
     *
     * @return int
     */
    public function getAptmeomdiscmonths3()
    {
        return $this->aptmeomdiscmonths3;
    }

    /**
     * Get the [aptmeomdueday3] column value.
     *
     * @return int
     */
    public function getAptmeomdueday3()
    {
        return $this->aptmeomdueday3;
    }

    /**
     * Get the [aptmeomplusmonths3] column value.
     *
     * @return int
     */
    public function getAptmeomplusmonths3()
    {
        return $this->aptmeomplusmonths3;
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
     * Set the value of [aptmtermcode] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmtermcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmtermcode !== $v) {
            $this->aptmtermcode = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMTERMCODE] = true;
        }

        return $this;
    } // setAptmtermcode()

    /**
     * Set the value of [aptmtermdesc] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmtermdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmtermdesc !== $v) {
            $this->aptmtermdesc = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMTERMDESC] = true;
        }

        return $this;
    } // setAptmtermdesc()

    /**
     * Set the value of [aptmmethod] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmmethod($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmmethod !== $v) {
            $this->aptmmethod = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMMETHOD] = true;
        }

        return $this;
    } // setAptmmethod()

    /**
     * Set the value of [aptmexpiredate] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmexpiredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmexpiredate !== $v) {
            $this->aptmexpiredate = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEXPIREDATE] = true;
        }

        return $this;
    } // setAptmexpiredate()

    /**
     * Set the value of [aptmsplit1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmsplit1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmsplit1 !== $v) {
            $this->aptmsplit1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMSPLIT1] = true;
        }

        return $this;
    } // setAptmsplit1()

    /**
     * Set the value of [aptmorderpct1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmorderpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmorderpct1 !== $v) {
            $this->aptmorderpct1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMORDERPCT1] = true;
        }

        return $this;
    } // setAptmorderpct1()

    /**
     * Set the value of [aptmdiscpct1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscpct1 !== $v) {
            $this->aptmdiscpct1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCPCT1] = true;
        }

        return $this;
    } // setAptmdiscpct1()

    /**
     * Set the value of [aptmdiscdays1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdays1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdiscdays1 !== $v) {
            $this->aptmdiscdays1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAYS1] = true;
        }

        return $this;
    } // setAptmdiscdays1()

    /**
     * Set the value of [aptmdiscday1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscday1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscday1 !== $v) {
            $this->aptmdiscday1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAY1] = true;
        }

        return $this;
    } // setAptmdiscday1()

    /**
     * Set the value of [aptmdiscdate1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdate1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscdate1 !== $v) {
            $this->aptmdiscdate1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDATE1] = true;
        }

        return $this;
    } // setAptmdiscdate1()

    /**
     * Set the value of [aptmduedays1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedays1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmduedays1 !== $v) {
            $this->aptmduedays1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAYS1] = true;
        }

        return $this;
    } // setAptmduedays1()

    /**
     * Set the value of [aptmdueday1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdueday1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdueday1 !== $v) {
            $this->aptmdueday1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAY1] = true;
        }

        return $this;
    } // setAptmdueday1()

    /**
     * Set the value of [aptmplusmonths1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusmonths1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmplusmonths1 !== $v) {
            $this->aptmplusmonths1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSMONTHS1] = true;
        }

        return $this;
    } // setAptmplusmonths1()

    /**
     * Set the value of [aptmduedate1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedate1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmduedate1 !== $v) {
            $this->aptmduedate1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDATE1] = true;
        }

        return $this;
    } // setAptmduedate1()

    /**
     * Set the value of [aptmplusyear1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusyear1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmplusyear1 !== $v) {
            $this->aptmplusyear1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSYEAR1] = true;
        }

        return $this;
    } // setAptmplusyear1()

    /**
     * Set the value of [aptmsplit2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmsplit2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmsplit2 !== $v) {
            $this->aptmsplit2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMSPLIT2] = true;
        }

        return $this;
    } // setAptmsplit2()

    /**
     * Set the value of [aptmorderpct2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmorderpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmorderpct2 !== $v) {
            $this->aptmorderpct2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMORDERPCT2] = true;
        }

        return $this;
    } // setAptmorderpct2()

    /**
     * Set the value of [aptmdiscpct2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscpct2 !== $v) {
            $this->aptmdiscpct2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCPCT2] = true;
        }

        return $this;
    } // setAptmdiscpct2()

    /**
     * Set the value of [aptmdiscdays2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdays2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdiscdays2 !== $v) {
            $this->aptmdiscdays2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAYS2] = true;
        }

        return $this;
    } // setAptmdiscdays2()

    /**
     * Set the value of [aptmdiscday2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscday2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscday2 !== $v) {
            $this->aptmdiscday2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAY2] = true;
        }

        return $this;
    } // setAptmdiscday2()

    /**
     * Set the value of [aptmdiscdate2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdate2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscdate2 !== $v) {
            $this->aptmdiscdate2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDATE2] = true;
        }

        return $this;
    } // setAptmdiscdate2()

    /**
     * Set the value of [aptmduedays2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedays2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmduedays2 !== $v) {
            $this->aptmduedays2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAYS2] = true;
        }

        return $this;
    } // setAptmduedays2()

    /**
     * Set the value of [aptmdueday2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdueday2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdueday2 !== $v) {
            $this->aptmdueday2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAY2] = true;
        }

        return $this;
    } // setAptmdueday2()

    /**
     * Set the value of [aptmplusmonths2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusmonths2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmplusmonths2 !== $v) {
            $this->aptmplusmonths2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSMONTHS2] = true;
        }

        return $this;
    } // setAptmplusmonths2()

    /**
     * Set the value of [aptmduedate2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedate2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmduedate2 !== $v) {
            $this->aptmduedate2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDATE2] = true;
        }

        return $this;
    } // setAptmduedate2()

    /**
     * Set the value of [aptmplusyear2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusyear2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmplusyear2 !== $v) {
            $this->aptmplusyear2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSYEAR2] = true;
        }

        return $this;
    } // setAptmplusyear2()

    /**
     * Set the value of [aptmsplit3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmsplit3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmsplit3 !== $v) {
            $this->aptmsplit3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMSPLIT3] = true;
        }

        return $this;
    } // setAptmsplit3()

    /**
     * Set the value of [aptmorderpct3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmorderpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmorderpct3 !== $v) {
            $this->aptmorderpct3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMORDERPCT3] = true;
        }

        return $this;
    } // setAptmorderpct3()

    /**
     * Set the value of [aptmdiscpct3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscpct3 !== $v) {
            $this->aptmdiscpct3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCPCT3] = true;
        }

        return $this;
    } // setAptmdiscpct3()

    /**
     * Set the value of [aptmdiscdays3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdays3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdiscdays3 !== $v) {
            $this->aptmdiscdays3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAYS3] = true;
        }

        return $this;
    } // setAptmdiscdays3()

    /**
     * Set the value of [aptmdiscday3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscday3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscday3 !== $v) {
            $this->aptmdiscday3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAY3] = true;
        }

        return $this;
    } // setAptmdiscday3()

    /**
     * Set the value of [aptmdiscdate3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdate3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscdate3 !== $v) {
            $this->aptmdiscdate3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDATE3] = true;
        }

        return $this;
    } // setAptmdiscdate3()

    /**
     * Set the value of [aptmduedays3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedays3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmduedays3 !== $v) {
            $this->aptmduedays3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAYS3] = true;
        }

        return $this;
    } // setAptmduedays3()

    /**
     * Set the value of [aptmdueday3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdueday3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdueday3 !== $v) {
            $this->aptmdueday3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAY3] = true;
        }

        return $this;
    } // setAptmdueday3()

    /**
     * Set the value of [aptmplusmonths3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusmonths3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmplusmonths3 !== $v) {
            $this->aptmplusmonths3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSMONTHS3] = true;
        }

        return $this;
    } // setAptmplusmonths3()

    /**
     * Set the value of [aptmduedate3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedate3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmduedate3 !== $v) {
            $this->aptmduedate3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDATE3] = true;
        }

        return $this;
    } // setAptmduedate3()

    /**
     * Set the value of [aptmplusyear3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusyear3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmplusyear3 !== $v) {
            $this->aptmplusyear3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSYEAR3] = true;
        }

        return $this;
    } // setAptmplusyear3()

    /**
     * Set the value of [aptmsplit4] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmsplit4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmsplit4 !== $v) {
            $this->aptmsplit4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMSPLIT4] = true;
        }

        return $this;
    } // setAptmsplit4()

    /**
     * Set the value of [aptmorderpct4] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmorderpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmorderpct4 !== $v) {
            $this->aptmorderpct4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMORDERPCT4] = true;
        }

        return $this;
    } // setAptmorderpct4()

    /**
     * Set the value of [aptmdiscpct4] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscpct4 !== $v) {
            $this->aptmdiscpct4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCPCT4] = true;
        }

        return $this;
    } // setAptmdiscpct4()

    /**
     * Set the value of [aptmdiscdays4] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdays4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdiscdays4 !== $v) {
            $this->aptmdiscdays4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAYS4] = true;
        }

        return $this;
    } // setAptmdiscdays4()

    /**
     * Set the value of [aptmdiscday4] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscday4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscday4 !== $v) {
            $this->aptmdiscday4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAY4] = true;
        }

        return $this;
    } // setAptmdiscday4()

    /**
     * Set the value of [aptmdiscdate4] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdate4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscdate4 !== $v) {
            $this->aptmdiscdate4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDATE4] = true;
        }

        return $this;
    } // setAptmdiscdate4()

    /**
     * Set the value of [aptmduedays4] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedays4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmduedays4 !== $v) {
            $this->aptmduedays4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAYS4] = true;
        }

        return $this;
    } // setAptmduedays4()

    /**
     * Set the value of [aptmdueday4] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdueday4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdueday4 !== $v) {
            $this->aptmdueday4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAY4] = true;
        }

        return $this;
    } // setAptmdueday4()

    /**
     * Set the value of [aptmplusmonths4] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusmonths4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmplusmonths4 !== $v) {
            $this->aptmplusmonths4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSMONTHS4] = true;
        }

        return $this;
    } // setAptmplusmonths4()

    /**
     * Set the value of [aptmduedate4] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedate4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmduedate4 !== $v) {
            $this->aptmduedate4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDATE4] = true;
        }

        return $this;
    } // setAptmduedate4()

    /**
     * Set the value of [aptmplusyear4] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusyear4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmplusyear4 !== $v) {
            $this->aptmplusyear4 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSYEAR4] = true;
        }

        return $this;
    } // setAptmplusyear4()

    /**
     * Set the value of [aptmsplit5] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmsplit5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmsplit5 !== $v) {
            $this->aptmsplit5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMSPLIT5] = true;
        }

        return $this;
    } // setAptmsplit5()

    /**
     * Set the value of [aptmorderpct5] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmorderpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmorderpct5 !== $v) {
            $this->aptmorderpct5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMORDERPCT5] = true;
        }

        return $this;
    } // setAptmorderpct5()

    /**
     * Set the value of [aptmdiscpct5] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscpct5 !== $v) {
            $this->aptmdiscpct5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCPCT5] = true;
        }

        return $this;
    } // setAptmdiscpct5()

    /**
     * Set the value of [aptmdiscdays5] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdays5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdiscdays5 !== $v) {
            $this->aptmdiscdays5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAYS5] = true;
        }

        return $this;
    } // setAptmdiscdays5()

    /**
     * Set the value of [aptmdiscday5] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscday5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscday5 !== $v) {
            $this->aptmdiscday5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDAY5] = true;
        }

        return $this;
    } // setAptmdiscday5()

    /**
     * Set the value of [aptmdiscdate5] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdiscdate5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdiscdate5 !== $v) {
            $this->aptmdiscdate5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDISCDATE5] = true;
        }

        return $this;
    } // setAptmdiscdate5()

    /**
     * Set the value of [aptmduedays5] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedays5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmduedays5 !== $v) {
            $this->aptmduedays5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAYS5] = true;
        }

        return $this;
    } // setAptmduedays5()

    /**
     * Set the value of [aptmdueday5] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdueday5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmdueday5 !== $v) {
            $this->aptmdueday5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDAY5] = true;
        }

        return $this;
    } // setAptmdueday5()

    /**
     * Set the value of [aptmplusmonths5] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusmonths5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmplusmonths5 !== $v) {
            $this->aptmplusmonths5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSMONTHS5] = true;
        }

        return $this;
    } // setAptmplusmonths5()

    /**
     * Set the value of [aptmduedate5] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmduedate5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmduedate5 !== $v) {
            $this->aptmduedate5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDUEDATE5] = true;
        }

        return $this;
    } // setAptmduedate5()

    /**
     * Set the value of [aptmplusyear5] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmplusyear5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmplusyear5 !== $v) {
            $this->aptmplusyear5 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMPLUSYEAR5] = true;
        }

        return $this;
    } // setAptmplusyear5()

    /**
     * Set the value of [aptmdayfrom1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdayfrom1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdayfrom1 !== $v) {
            $this->aptmdayfrom1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDAYFROM1] = true;
        }

        return $this;
    } // setAptmdayfrom1()

    /**
     * Set the value of [aptmdaythru1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdaythru1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdaythru1 !== $v) {
            $this->aptmdaythru1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDAYTHRU1] = true;
        }

        return $this;
    } // setAptmdaythru1()

    /**
     * Set the value of [aptmeomdiscpct1] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmeomdiscpct1 !== $v) {
            $this->aptmeomdiscpct1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCPCT1] = true;
        }

        return $this;
    } // setAptmeomdiscpct1()

    /**
     * Set the value of [aptmeomdiscday1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscday1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdiscday1 !== $v) {
            $this->aptmeomdiscday1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCDAY1] = true;
        }

        return $this;
    } // setAptmeomdiscday1()

    /**
     * Set the value of [aptmeomdiscmonths1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscmonths1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdiscmonths1 !== $v) {
            $this->aptmeomdiscmonths1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1] = true;
        }

        return $this;
    } // setAptmeomdiscmonths1()

    /**
     * Set the value of [aptmeomdueday1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdueday1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdueday1 !== $v) {
            $this->aptmeomdueday1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDUEDAY1] = true;
        }

        return $this;
    } // setAptmeomdueday1()

    /**
     * Set the value of [aptmeomplusmonths1] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomplusmonths1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomplusmonths1 !== $v) {
            $this->aptmeomplusmonths1 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1] = true;
        }

        return $this;
    } // setAptmeomplusmonths1()

    /**
     * Set the value of [aptmdayfrom2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdayfrom2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdayfrom2 !== $v) {
            $this->aptmdayfrom2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDAYFROM2] = true;
        }

        return $this;
    } // setAptmdayfrom2()

    /**
     * Set the value of [aptmdaythru2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdaythru2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdaythru2 !== $v) {
            $this->aptmdaythru2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDAYTHRU2] = true;
        }

        return $this;
    } // setAptmdaythru2()

    /**
     * Set the value of [aptmeomdiscpct2] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmeomdiscpct2 !== $v) {
            $this->aptmeomdiscpct2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCPCT2] = true;
        }

        return $this;
    } // setAptmeomdiscpct2()

    /**
     * Set the value of [aptmeomdiscday2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscday2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdiscday2 !== $v) {
            $this->aptmeomdiscday2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCDAY2] = true;
        }

        return $this;
    } // setAptmeomdiscday2()

    /**
     * Set the value of [aptmeomdiscmonths2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscmonths2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdiscmonths2 !== $v) {
            $this->aptmeomdiscmonths2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2] = true;
        }

        return $this;
    } // setAptmeomdiscmonths2()

    /**
     * Set the value of [aptmeomdueday2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdueday2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdueday2 !== $v) {
            $this->aptmeomdueday2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDUEDAY2] = true;
        }

        return $this;
    } // setAptmeomdueday2()

    /**
     * Set the value of [aptmeomplusmonths2] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomplusmonths2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomplusmonths2 !== $v) {
            $this->aptmeomplusmonths2 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2] = true;
        }

        return $this;
    } // setAptmeomplusmonths2()

    /**
     * Set the value of [aptmdayfrom3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdayfrom3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdayfrom3 !== $v) {
            $this->aptmdayfrom3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDAYFROM3] = true;
        }

        return $this;
    } // setAptmdayfrom3()

    /**
     * Set the value of [aptmdaythru3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmdaythru3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmdaythru3 !== $v) {
            $this->aptmdaythru3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMDAYTHRU3] = true;
        }

        return $this;
    } // setAptmdaythru3()

    /**
     * Set the value of [aptmeomdiscpct3] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmeomdiscpct3 !== $v) {
            $this->aptmeomdiscpct3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCPCT3] = true;
        }

        return $this;
    } // setAptmeomdiscpct3()

    /**
     * Set the value of [aptmeomdiscday3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscday3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdiscday3 !== $v) {
            $this->aptmeomdiscday3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCDAY3] = true;
        }

        return $this;
    } // setAptmeomdiscday3()

    /**
     * Set the value of [aptmeomdiscmonths3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdiscmonths3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdiscmonths3 !== $v) {
            $this->aptmeomdiscmonths3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3] = true;
        }

        return $this;
    } // setAptmeomdiscmonths3()

    /**
     * Set the value of [aptmeomdueday3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomdueday3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomdueday3 !== $v) {
            $this->aptmeomdueday3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMDUEDAY3] = true;
        }

        return $this;
    } // setAptmeomdueday3()

    /**
     * Set the value of [aptmeomplusmonths3] column.
     *
     * @param int $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setAptmeomplusmonths3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->aptmeomplusmonths3 !== $v) {
            $this->aptmeomplusmonths3 = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3] = true;
        }

        return $this;
    } // setAptmeomplusmonths3()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ApTermsCodeTableMap::COL_DUMMY] = true;
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
            if ($this->aptmtermcode !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmtermcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmtermdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmtermdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmmethod', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmmethod = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmexpiredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmexpiredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmsplit1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmsplit1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmorderpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmorderpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdays1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdays1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscday1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscday1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdate1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedays1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedays1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdueday1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdueday1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusmonths1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusmonths1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedate1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusyear1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusyear1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmsplit2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmsplit2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmorderpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmorderpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdays2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdays2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscday2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscday2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdate2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedays2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedays2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdueday2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdueday2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusmonths2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusmonths2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedate2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusyear2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusyear2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmsplit3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmsplit3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmorderpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmorderpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdays3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdays3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscday3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscday3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdate3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedays3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedays3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdueday3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdueday3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusmonths3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusmonths3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedate3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusyear3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusyear3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmsplit4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmsplit4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmorderpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmorderpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdays4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdays4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscday4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscday4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdate4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedays4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedays4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdueday4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdueday4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusmonths4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusmonths4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedate4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusyear4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusyear4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmsplit5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmsplit5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmorderpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmorderpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdays5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdays5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscday5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscday5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdiscdate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdiscdate5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedays5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedays5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdueday5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdueday5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusmonths5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusmonths5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmduedate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmduedate5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmplusyear5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmplusyear5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdayfrom1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdayfrom1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdaythru1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdaythru1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscday1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscday1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscmonths1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscmonths1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdueday1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdueday1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomplusmonths1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomplusmonths1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdayfrom2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdayfrom2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdaythru2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdaythru2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscday2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscday2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscmonths2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscmonths2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdueday2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdueday2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomplusmonths2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomplusmonths2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdayfrom3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdayfrom3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmdaythru3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmdaythru3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscday3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscday3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdiscmonths3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdiscmonths3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomdueday3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomdueday3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : ApTermsCodeTableMap::translateFieldName('Aptmeomplusmonths3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmeomplusmonths3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : ApTermsCodeTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : ApTermsCodeTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : ApTermsCodeTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 83; // 83 = ApTermsCodeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ApTermsCode'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ApTermsCodeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildApTermsCodeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collVendors = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ApTermsCode::setDeleted()
     * @see ApTermsCode::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApTermsCodeTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildApTermsCodeQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApTermsCodeTableMap::DATABASE_NAME);
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
                ApTermsCodeTableMap::addInstanceToPool($this);
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

            if ($this->vendorsScheduledForDeletion !== null) {
                if (!$this->vendorsScheduledForDeletion->isEmpty()) {
                    foreach ($this->vendorsScheduledForDeletion as $vendor) {
                        // need to save related object because we set the relation to null
                        $vendor->save($con);
                    }
                    $this->vendorsScheduledForDeletion = null;
                }
            }

            if ($this->collVendors !== null) {
                foreach ($this->collVendors as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMTERMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptmTermCode';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMTERMDESC)) {
            $modifiedColumns[':p' . $index++]  = 'AptmTermDesc';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMMETHOD)) {
            $modifiedColumns[':p' . $index++]  = 'AptmMethod';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEXPIREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'AptmExpireDate';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmSplit1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmOrderPct1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscPct1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDays1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDay1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDate1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDays1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDay1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusMonths1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDate1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusYear1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmSplit2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmOrderPct2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscPct2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDays2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDay2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDate2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDays2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDay2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusMonths2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDate2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusYear2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmSplit3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmOrderPct3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscPct3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDays3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDay3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDate3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDays3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDay3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusMonths3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDate3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusYear3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmSplit4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmOrderPct4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscPct4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDays4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDay4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDate4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDays4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDay4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusMonths4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDate4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR4)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusYear4';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmSplit5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmOrderPct5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscPct5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDays5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDay5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDiscDate5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDays5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDay5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusMonths5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDueDate5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR5)) {
            $modifiedColumns[':p' . $index++]  = 'AptmPlusYear5';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYFROM1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDayFrom1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYTHRU1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDayThru1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscPct1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCDAY1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscDay1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscMonths1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDUEDAY1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDueDay1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomPlusMonths1';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYFROM2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDayFrom2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYTHRU2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDayThru2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscPct2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCDAY2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscDay2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscMonths2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDUEDAY2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDueDay2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomPlusMonths2';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYFROM3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDayFrom3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYTHRU3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmDayThru3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscPct3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCDAY3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscDay3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDiscMonths3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDUEDAY3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomDueDay3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3)) {
            $modifiedColumns[':p' . $index++]  = 'AptmEomPlusMonths3';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ap_term_code (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'AptmTermCode':
                        $stmt->bindValue($identifier, $this->aptmtermcode, PDO::PARAM_STR);
                        break;
                    case 'AptmTermDesc':
                        $stmt->bindValue($identifier, $this->aptmtermdesc, PDO::PARAM_STR);
                        break;
                    case 'AptmMethod':
                        $stmt->bindValue($identifier, $this->aptmmethod, PDO::PARAM_STR);
                        break;
                    case 'AptmExpireDate':
                        $stmt->bindValue($identifier, $this->aptmexpiredate, PDO::PARAM_STR);
                        break;
                    case 'AptmSplit1':
                        $stmt->bindValue($identifier, $this->aptmsplit1, PDO::PARAM_STR);
                        break;
                    case 'AptmOrderPct1':
                        $stmt->bindValue($identifier, $this->aptmorderpct1, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscPct1':
                        $stmt->bindValue($identifier, $this->aptmdiscpct1, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDays1':
                        $stmt->bindValue($identifier, $this->aptmdiscdays1, PDO::PARAM_INT);
                        break;
                    case 'AptmDiscDay1':
                        $stmt->bindValue($identifier, $this->aptmdiscday1, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDate1':
                        $stmt->bindValue($identifier, $this->aptmdiscdate1, PDO::PARAM_STR);
                        break;
                    case 'AptmDueDays1':
                        $stmt->bindValue($identifier, $this->aptmduedays1, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDay1':
                        $stmt->bindValue($identifier, $this->aptmdueday1, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusMonths1':
                        $stmt->bindValue($identifier, $this->aptmplusmonths1, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDate1':
                        $stmt->bindValue($identifier, $this->aptmduedate1, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusYear1':
                        $stmt->bindValue($identifier, $this->aptmplusyear1, PDO::PARAM_STR);
                        break;
                    case 'AptmSplit2':
                        $stmt->bindValue($identifier, $this->aptmsplit2, PDO::PARAM_STR);
                        break;
                    case 'AptmOrderPct2':
                        $stmt->bindValue($identifier, $this->aptmorderpct2, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscPct2':
                        $stmt->bindValue($identifier, $this->aptmdiscpct2, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDays2':
                        $stmt->bindValue($identifier, $this->aptmdiscdays2, PDO::PARAM_INT);
                        break;
                    case 'AptmDiscDay2':
                        $stmt->bindValue($identifier, $this->aptmdiscday2, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDate2':
                        $stmt->bindValue($identifier, $this->aptmdiscdate2, PDO::PARAM_STR);
                        break;
                    case 'AptmDueDays2':
                        $stmt->bindValue($identifier, $this->aptmduedays2, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDay2':
                        $stmt->bindValue($identifier, $this->aptmdueday2, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusMonths2':
                        $stmt->bindValue($identifier, $this->aptmplusmonths2, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDate2':
                        $stmt->bindValue($identifier, $this->aptmduedate2, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusYear2':
                        $stmt->bindValue($identifier, $this->aptmplusyear2, PDO::PARAM_STR);
                        break;
                    case 'AptmSplit3':
                        $stmt->bindValue($identifier, $this->aptmsplit3, PDO::PARAM_STR);
                        break;
                    case 'AptmOrderPct3':
                        $stmt->bindValue($identifier, $this->aptmorderpct3, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscPct3':
                        $stmt->bindValue($identifier, $this->aptmdiscpct3, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDays3':
                        $stmt->bindValue($identifier, $this->aptmdiscdays3, PDO::PARAM_INT);
                        break;
                    case 'AptmDiscDay3':
                        $stmt->bindValue($identifier, $this->aptmdiscday3, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDate3':
                        $stmt->bindValue($identifier, $this->aptmdiscdate3, PDO::PARAM_STR);
                        break;
                    case 'AptmDueDays3':
                        $stmt->bindValue($identifier, $this->aptmduedays3, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDay3':
                        $stmt->bindValue($identifier, $this->aptmdueday3, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusMonths3':
                        $stmt->bindValue($identifier, $this->aptmplusmonths3, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDate3':
                        $stmt->bindValue($identifier, $this->aptmduedate3, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusYear3':
                        $stmt->bindValue($identifier, $this->aptmplusyear3, PDO::PARAM_STR);
                        break;
                    case 'AptmSplit4':
                        $stmt->bindValue($identifier, $this->aptmsplit4, PDO::PARAM_STR);
                        break;
                    case 'AptmOrderPct4':
                        $stmt->bindValue($identifier, $this->aptmorderpct4, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscPct4':
                        $stmt->bindValue($identifier, $this->aptmdiscpct4, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDays4':
                        $stmt->bindValue($identifier, $this->aptmdiscdays4, PDO::PARAM_INT);
                        break;
                    case 'AptmDiscDay4':
                        $stmt->bindValue($identifier, $this->aptmdiscday4, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDate4':
                        $stmt->bindValue($identifier, $this->aptmdiscdate4, PDO::PARAM_STR);
                        break;
                    case 'AptmDueDays4':
                        $stmt->bindValue($identifier, $this->aptmduedays4, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDay4':
                        $stmt->bindValue($identifier, $this->aptmdueday4, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusMonths4':
                        $stmt->bindValue($identifier, $this->aptmplusmonths4, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDate4':
                        $stmt->bindValue($identifier, $this->aptmduedate4, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusYear4':
                        $stmt->bindValue($identifier, $this->aptmplusyear4, PDO::PARAM_STR);
                        break;
                    case 'AptmSplit5':
                        $stmt->bindValue($identifier, $this->aptmsplit5, PDO::PARAM_STR);
                        break;
                    case 'AptmOrderPct5':
                        $stmt->bindValue($identifier, $this->aptmorderpct5, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscPct5':
                        $stmt->bindValue($identifier, $this->aptmdiscpct5, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDays5':
                        $stmt->bindValue($identifier, $this->aptmdiscdays5, PDO::PARAM_INT);
                        break;
                    case 'AptmDiscDay5':
                        $stmt->bindValue($identifier, $this->aptmdiscday5, PDO::PARAM_STR);
                        break;
                    case 'AptmDiscDate5':
                        $stmt->bindValue($identifier, $this->aptmdiscdate5, PDO::PARAM_STR);
                        break;
                    case 'AptmDueDays5':
                        $stmt->bindValue($identifier, $this->aptmduedays5, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDay5':
                        $stmt->bindValue($identifier, $this->aptmdueday5, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusMonths5':
                        $stmt->bindValue($identifier, $this->aptmplusmonths5, PDO::PARAM_INT);
                        break;
                    case 'AptmDueDate5':
                        $stmt->bindValue($identifier, $this->aptmduedate5, PDO::PARAM_STR);
                        break;
                    case 'AptmPlusYear5':
                        $stmt->bindValue($identifier, $this->aptmplusyear5, PDO::PARAM_STR);
                        break;
                    case 'AptmDayFrom1':
                        $stmt->bindValue($identifier, $this->aptmdayfrom1, PDO::PARAM_INT);
                        break;
                    case 'AptmDayThru1':
                        $stmt->bindValue($identifier, $this->aptmdaythru1, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDiscPct1':
                        $stmt->bindValue($identifier, $this->aptmeomdiscpct1, PDO::PARAM_STR);
                        break;
                    case 'AptmEomDiscDay1':
                        $stmt->bindValue($identifier, $this->aptmeomdiscday1, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDiscMonths1':
                        $stmt->bindValue($identifier, $this->aptmeomdiscmonths1, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDueDay1':
                        $stmt->bindValue($identifier, $this->aptmeomdueday1, PDO::PARAM_INT);
                        break;
                    case 'AptmEomPlusMonths1':
                        $stmt->bindValue($identifier, $this->aptmeomplusmonths1, PDO::PARAM_INT);
                        break;
                    case 'AptmDayFrom2':
                        $stmt->bindValue($identifier, $this->aptmdayfrom2, PDO::PARAM_INT);
                        break;
                    case 'AptmDayThru2':
                        $stmt->bindValue($identifier, $this->aptmdaythru2, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDiscPct2':
                        $stmt->bindValue($identifier, $this->aptmeomdiscpct2, PDO::PARAM_STR);
                        break;
                    case 'AptmEomDiscDay2':
                        $stmt->bindValue($identifier, $this->aptmeomdiscday2, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDiscMonths2':
                        $stmt->bindValue($identifier, $this->aptmeomdiscmonths2, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDueDay2':
                        $stmt->bindValue($identifier, $this->aptmeomdueday2, PDO::PARAM_INT);
                        break;
                    case 'AptmEomPlusMonths2':
                        $stmt->bindValue($identifier, $this->aptmeomplusmonths2, PDO::PARAM_INT);
                        break;
                    case 'AptmDayFrom3':
                        $stmt->bindValue($identifier, $this->aptmdayfrom3, PDO::PARAM_INT);
                        break;
                    case 'AptmDayThru3':
                        $stmt->bindValue($identifier, $this->aptmdaythru3, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDiscPct3':
                        $stmt->bindValue($identifier, $this->aptmeomdiscpct3, PDO::PARAM_STR);
                        break;
                    case 'AptmEomDiscDay3':
                        $stmt->bindValue($identifier, $this->aptmeomdiscday3, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDiscMonths3':
                        $stmt->bindValue($identifier, $this->aptmeomdiscmonths3, PDO::PARAM_INT);
                        break;
                    case 'AptmEomDueDay3':
                        $stmt->bindValue($identifier, $this->aptmeomdueday3, PDO::PARAM_INT);
                        break;
                    case 'AptmEomPlusMonths3':
                        $stmt->bindValue($identifier, $this->aptmeomplusmonths3, PDO::PARAM_INT);
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
        $pos = ApTermsCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getAptmtermcode();
                break;
            case 1:
                return $this->getAptmtermdesc();
                break;
            case 2:
                return $this->getAptmmethod();
                break;
            case 3:
                return $this->getAptmexpiredate();
                break;
            case 4:
                return $this->getAptmsplit1();
                break;
            case 5:
                return $this->getAptmorderpct1();
                break;
            case 6:
                return $this->getAptmdiscpct1();
                break;
            case 7:
                return $this->getAptmdiscdays1();
                break;
            case 8:
                return $this->getAptmdiscday1();
                break;
            case 9:
                return $this->getAptmdiscdate1();
                break;
            case 10:
                return $this->getAptmduedays1();
                break;
            case 11:
                return $this->getAptmdueday1();
                break;
            case 12:
                return $this->getAptmplusmonths1();
                break;
            case 13:
                return $this->getAptmduedate1();
                break;
            case 14:
                return $this->getAptmplusyear1();
                break;
            case 15:
                return $this->getAptmsplit2();
                break;
            case 16:
                return $this->getAptmorderpct2();
                break;
            case 17:
                return $this->getAptmdiscpct2();
                break;
            case 18:
                return $this->getAptmdiscdays2();
                break;
            case 19:
                return $this->getAptmdiscday2();
                break;
            case 20:
                return $this->getAptmdiscdate2();
                break;
            case 21:
                return $this->getAptmduedays2();
                break;
            case 22:
                return $this->getAptmdueday2();
                break;
            case 23:
                return $this->getAptmplusmonths2();
                break;
            case 24:
                return $this->getAptmduedate2();
                break;
            case 25:
                return $this->getAptmplusyear2();
                break;
            case 26:
                return $this->getAptmsplit3();
                break;
            case 27:
                return $this->getAptmorderpct3();
                break;
            case 28:
                return $this->getAptmdiscpct3();
                break;
            case 29:
                return $this->getAptmdiscdays3();
                break;
            case 30:
                return $this->getAptmdiscday3();
                break;
            case 31:
                return $this->getAptmdiscdate3();
                break;
            case 32:
                return $this->getAptmduedays3();
                break;
            case 33:
                return $this->getAptmdueday3();
                break;
            case 34:
                return $this->getAptmplusmonths3();
                break;
            case 35:
                return $this->getAptmduedate3();
                break;
            case 36:
                return $this->getAptmplusyear3();
                break;
            case 37:
                return $this->getAptmsplit4();
                break;
            case 38:
                return $this->getAptmorderpct4();
                break;
            case 39:
                return $this->getAptmdiscpct4();
                break;
            case 40:
                return $this->getAptmdiscdays4();
                break;
            case 41:
                return $this->getAptmdiscday4();
                break;
            case 42:
                return $this->getAptmdiscdate4();
                break;
            case 43:
                return $this->getAptmduedays4();
                break;
            case 44:
                return $this->getAptmdueday4();
                break;
            case 45:
                return $this->getAptmplusmonths4();
                break;
            case 46:
                return $this->getAptmduedate4();
                break;
            case 47:
                return $this->getAptmplusyear4();
                break;
            case 48:
                return $this->getAptmsplit5();
                break;
            case 49:
                return $this->getAptmorderpct5();
                break;
            case 50:
                return $this->getAptmdiscpct5();
                break;
            case 51:
                return $this->getAptmdiscdays5();
                break;
            case 52:
                return $this->getAptmdiscday5();
                break;
            case 53:
                return $this->getAptmdiscdate5();
                break;
            case 54:
                return $this->getAptmduedays5();
                break;
            case 55:
                return $this->getAptmdueday5();
                break;
            case 56:
                return $this->getAptmplusmonths5();
                break;
            case 57:
                return $this->getAptmduedate5();
                break;
            case 58:
                return $this->getAptmplusyear5();
                break;
            case 59:
                return $this->getAptmdayfrom1();
                break;
            case 60:
                return $this->getAptmdaythru1();
                break;
            case 61:
                return $this->getAptmeomdiscpct1();
                break;
            case 62:
                return $this->getAptmeomdiscday1();
                break;
            case 63:
                return $this->getAptmeomdiscmonths1();
                break;
            case 64:
                return $this->getAptmeomdueday1();
                break;
            case 65:
                return $this->getAptmeomplusmonths1();
                break;
            case 66:
                return $this->getAptmdayfrom2();
                break;
            case 67:
                return $this->getAptmdaythru2();
                break;
            case 68:
                return $this->getAptmeomdiscpct2();
                break;
            case 69:
                return $this->getAptmeomdiscday2();
                break;
            case 70:
                return $this->getAptmeomdiscmonths2();
                break;
            case 71:
                return $this->getAptmeomdueday2();
                break;
            case 72:
                return $this->getAptmeomplusmonths2();
                break;
            case 73:
                return $this->getAptmdayfrom3();
                break;
            case 74:
                return $this->getAptmdaythru3();
                break;
            case 75:
                return $this->getAptmeomdiscpct3();
                break;
            case 76:
                return $this->getAptmeomdiscday3();
                break;
            case 77:
                return $this->getAptmeomdiscmonths3();
                break;
            case 78:
                return $this->getAptmeomdueday3();
                break;
            case 79:
                return $this->getAptmeomplusmonths3();
                break;
            case 80:
                return $this->getDateupdtd();
                break;
            case 81:
                return $this->getTimeupdtd();
                break;
            case 82:
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

        if (isset($alreadyDumpedObjects['ApTermsCode'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ApTermsCode'][$this->hashCode()] = true;
        $keys = ApTermsCodeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAptmtermcode(),
            $keys[1] => $this->getAptmtermdesc(),
            $keys[2] => $this->getAptmmethod(),
            $keys[3] => $this->getAptmexpiredate(),
            $keys[4] => $this->getAptmsplit1(),
            $keys[5] => $this->getAptmorderpct1(),
            $keys[6] => $this->getAptmdiscpct1(),
            $keys[7] => $this->getAptmdiscdays1(),
            $keys[8] => $this->getAptmdiscday1(),
            $keys[9] => $this->getAptmdiscdate1(),
            $keys[10] => $this->getAptmduedays1(),
            $keys[11] => $this->getAptmdueday1(),
            $keys[12] => $this->getAptmplusmonths1(),
            $keys[13] => $this->getAptmduedate1(),
            $keys[14] => $this->getAptmplusyear1(),
            $keys[15] => $this->getAptmsplit2(),
            $keys[16] => $this->getAptmorderpct2(),
            $keys[17] => $this->getAptmdiscpct2(),
            $keys[18] => $this->getAptmdiscdays2(),
            $keys[19] => $this->getAptmdiscday2(),
            $keys[20] => $this->getAptmdiscdate2(),
            $keys[21] => $this->getAptmduedays2(),
            $keys[22] => $this->getAptmdueday2(),
            $keys[23] => $this->getAptmplusmonths2(),
            $keys[24] => $this->getAptmduedate2(),
            $keys[25] => $this->getAptmplusyear2(),
            $keys[26] => $this->getAptmsplit3(),
            $keys[27] => $this->getAptmorderpct3(),
            $keys[28] => $this->getAptmdiscpct3(),
            $keys[29] => $this->getAptmdiscdays3(),
            $keys[30] => $this->getAptmdiscday3(),
            $keys[31] => $this->getAptmdiscdate3(),
            $keys[32] => $this->getAptmduedays3(),
            $keys[33] => $this->getAptmdueday3(),
            $keys[34] => $this->getAptmplusmonths3(),
            $keys[35] => $this->getAptmduedate3(),
            $keys[36] => $this->getAptmplusyear3(),
            $keys[37] => $this->getAptmsplit4(),
            $keys[38] => $this->getAptmorderpct4(),
            $keys[39] => $this->getAptmdiscpct4(),
            $keys[40] => $this->getAptmdiscdays4(),
            $keys[41] => $this->getAptmdiscday4(),
            $keys[42] => $this->getAptmdiscdate4(),
            $keys[43] => $this->getAptmduedays4(),
            $keys[44] => $this->getAptmdueday4(),
            $keys[45] => $this->getAptmplusmonths4(),
            $keys[46] => $this->getAptmduedate4(),
            $keys[47] => $this->getAptmplusyear4(),
            $keys[48] => $this->getAptmsplit5(),
            $keys[49] => $this->getAptmorderpct5(),
            $keys[50] => $this->getAptmdiscpct5(),
            $keys[51] => $this->getAptmdiscdays5(),
            $keys[52] => $this->getAptmdiscday5(),
            $keys[53] => $this->getAptmdiscdate5(),
            $keys[54] => $this->getAptmduedays5(),
            $keys[55] => $this->getAptmdueday5(),
            $keys[56] => $this->getAptmplusmonths5(),
            $keys[57] => $this->getAptmduedate5(),
            $keys[58] => $this->getAptmplusyear5(),
            $keys[59] => $this->getAptmdayfrom1(),
            $keys[60] => $this->getAptmdaythru1(),
            $keys[61] => $this->getAptmeomdiscpct1(),
            $keys[62] => $this->getAptmeomdiscday1(),
            $keys[63] => $this->getAptmeomdiscmonths1(),
            $keys[64] => $this->getAptmeomdueday1(),
            $keys[65] => $this->getAptmeomplusmonths1(),
            $keys[66] => $this->getAptmdayfrom2(),
            $keys[67] => $this->getAptmdaythru2(),
            $keys[68] => $this->getAptmeomdiscpct2(),
            $keys[69] => $this->getAptmeomdiscday2(),
            $keys[70] => $this->getAptmeomdiscmonths2(),
            $keys[71] => $this->getAptmeomdueday2(),
            $keys[72] => $this->getAptmeomplusmonths2(),
            $keys[73] => $this->getAptmdayfrom3(),
            $keys[74] => $this->getAptmdaythru3(),
            $keys[75] => $this->getAptmeomdiscpct3(),
            $keys[76] => $this->getAptmeomdiscday3(),
            $keys[77] => $this->getAptmeomdiscmonths3(),
            $keys[78] => $this->getAptmeomdueday3(),
            $keys[79] => $this->getAptmeomplusmonths3(),
            $keys[80] => $this->getDateupdtd(),
            $keys[81] => $this->getTimeupdtd(),
            $keys[82] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collVendors) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'vendors';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_vend_masts';
                        break;
                    default:
                        $key = 'Vendors';
                }

                $result[$key] = $this->collVendors->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\ApTermsCode
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ApTermsCodeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ApTermsCode
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setAptmtermcode($value);
                break;
            case 1:
                $this->setAptmtermdesc($value);
                break;
            case 2:
                $this->setAptmmethod($value);
                break;
            case 3:
                $this->setAptmexpiredate($value);
                break;
            case 4:
                $this->setAptmsplit1($value);
                break;
            case 5:
                $this->setAptmorderpct1($value);
                break;
            case 6:
                $this->setAptmdiscpct1($value);
                break;
            case 7:
                $this->setAptmdiscdays1($value);
                break;
            case 8:
                $this->setAptmdiscday1($value);
                break;
            case 9:
                $this->setAptmdiscdate1($value);
                break;
            case 10:
                $this->setAptmduedays1($value);
                break;
            case 11:
                $this->setAptmdueday1($value);
                break;
            case 12:
                $this->setAptmplusmonths1($value);
                break;
            case 13:
                $this->setAptmduedate1($value);
                break;
            case 14:
                $this->setAptmplusyear1($value);
                break;
            case 15:
                $this->setAptmsplit2($value);
                break;
            case 16:
                $this->setAptmorderpct2($value);
                break;
            case 17:
                $this->setAptmdiscpct2($value);
                break;
            case 18:
                $this->setAptmdiscdays2($value);
                break;
            case 19:
                $this->setAptmdiscday2($value);
                break;
            case 20:
                $this->setAptmdiscdate2($value);
                break;
            case 21:
                $this->setAptmduedays2($value);
                break;
            case 22:
                $this->setAptmdueday2($value);
                break;
            case 23:
                $this->setAptmplusmonths2($value);
                break;
            case 24:
                $this->setAptmduedate2($value);
                break;
            case 25:
                $this->setAptmplusyear2($value);
                break;
            case 26:
                $this->setAptmsplit3($value);
                break;
            case 27:
                $this->setAptmorderpct3($value);
                break;
            case 28:
                $this->setAptmdiscpct3($value);
                break;
            case 29:
                $this->setAptmdiscdays3($value);
                break;
            case 30:
                $this->setAptmdiscday3($value);
                break;
            case 31:
                $this->setAptmdiscdate3($value);
                break;
            case 32:
                $this->setAptmduedays3($value);
                break;
            case 33:
                $this->setAptmdueday3($value);
                break;
            case 34:
                $this->setAptmplusmonths3($value);
                break;
            case 35:
                $this->setAptmduedate3($value);
                break;
            case 36:
                $this->setAptmplusyear3($value);
                break;
            case 37:
                $this->setAptmsplit4($value);
                break;
            case 38:
                $this->setAptmorderpct4($value);
                break;
            case 39:
                $this->setAptmdiscpct4($value);
                break;
            case 40:
                $this->setAptmdiscdays4($value);
                break;
            case 41:
                $this->setAptmdiscday4($value);
                break;
            case 42:
                $this->setAptmdiscdate4($value);
                break;
            case 43:
                $this->setAptmduedays4($value);
                break;
            case 44:
                $this->setAptmdueday4($value);
                break;
            case 45:
                $this->setAptmplusmonths4($value);
                break;
            case 46:
                $this->setAptmduedate4($value);
                break;
            case 47:
                $this->setAptmplusyear4($value);
                break;
            case 48:
                $this->setAptmsplit5($value);
                break;
            case 49:
                $this->setAptmorderpct5($value);
                break;
            case 50:
                $this->setAptmdiscpct5($value);
                break;
            case 51:
                $this->setAptmdiscdays5($value);
                break;
            case 52:
                $this->setAptmdiscday5($value);
                break;
            case 53:
                $this->setAptmdiscdate5($value);
                break;
            case 54:
                $this->setAptmduedays5($value);
                break;
            case 55:
                $this->setAptmdueday5($value);
                break;
            case 56:
                $this->setAptmplusmonths5($value);
                break;
            case 57:
                $this->setAptmduedate5($value);
                break;
            case 58:
                $this->setAptmplusyear5($value);
                break;
            case 59:
                $this->setAptmdayfrom1($value);
                break;
            case 60:
                $this->setAptmdaythru1($value);
                break;
            case 61:
                $this->setAptmeomdiscpct1($value);
                break;
            case 62:
                $this->setAptmeomdiscday1($value);
                break;
            case 63:
                $this->setAptmeomdiscmonths1($value);
                break;
            case 64:
                $this->setAptmeomdueday1($value);
                break;
            case 65:
                $this->setAptmeomplusmonths1($value);
                break;
            case 66:
                $this->setAptmdayfrom2($value);
                break;
            case 67:
                $this->setAptmdaythru2($value);
                break;
            case 68:
                $this->setAptmeomdiscpct2($value);
                break;
            case 69:
                $this->setAptmeomdiscday2($value);
                break;
            case 70:
                $this->setAptmeomdiscmonths2($value);
                break;
            case 71:
                $this->setAptmeomdueday2($value);
                break;
            case 72:
                $this->setAptmeomplusmonths2($value);
                break;
            case 73:
                $this->setAptmdayfrom3($value);
                break;
            case 74:
                $this->setAptmdaythru3($value);
                break;
            case 75:
                $this->setAptmeomdiscpct3($value);
                break;
            case 76:
                $this->setAptmeomdiscday3($value);
                break;
            case 77:
                $this->setAptmeomdiscmonths3($value);
                break;
            case 78:
                $this->setAptmeomdueday3($value);
                break;
            case 79:
                $this->setAptmeomplusmonths3($value);
                break;
            case 80:
                $this->setDateupdtd($value);
                break;
            case 81:
                $this->setTimeupdtd($value);
                break;
            case 82:
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
        $keys = ApTermsCodeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setAptmtermcode($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setAptmtermdesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setAptmmethod($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setAptmexpiredate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setAptmsplit1($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setAptmorderpct1($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setAptmdiscpct1($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setAptmdiscdays1($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setAptmdiscday1($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setAptmdiscdate1($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setAptmduedays1($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setAptmdueday1($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setAptmplusmonths1($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setAptmduedate1($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setAptmplusyear1($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setAptmsplit2($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setAptmorderpct2($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setAptmdiscpct2($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setAptmdiscdays2($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setAptmdiscday2($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setAptmdiscdate2($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setAptmduedays2($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setAptmdueday2($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setAptmplusmonths2($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setAptmduedate2($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setAptmplusyear2($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setAptmsplit3($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setAptmorderpct3($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setAptmdiscpct3($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setAptmdiscdays3($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setAptmdiscday3($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setAptmdiscdate3($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setAptmduedays3($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setAptmdueday3($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setAptmplusmonths3($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setAptmduedate3($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setAptmplusyear3($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setAptmsplit4($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setAptmorderpct4($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setAptmdiscpct4($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setAptmdiscdays4($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setAptmdiscday4($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setAptmdiscdate4($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setAptmduedays4($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setAptmdueday4($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setAptmplusmonths4($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setAptmduedate4($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setAptmplusyear4($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setAptmsplit5($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setAptmorderpct5($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setAptmdiscpct5($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setAptmdiscdays5($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setAptmdiscday5($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setAptmdiscdate5($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setAptmduedays5($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setAptmdueday5($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setAptmplusmonths5($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setAptmduedate5($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setAptmplusyear5($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setAptmdayfrom1($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setAptmdaythru1($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setAptmeomdiscpct1($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setAptmeomdiscday1($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setAptmeomdiscmonths1($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setAptmeomdueday1($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setAptmeomplusmonths1($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setAptmdayfrom2($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setAptmdaythru2($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setAptmeomdiscpct2($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setAptmeomdiscday2($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setAptmeomdiscmonths2($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setAptmeomdueday2($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setAptmeomplusmonths2($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setAptmdayfrom3($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setAptmdaythru3($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setAptmeomdiscpct3($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setAptmeomdiscday3($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setAptmeomdiscmonths3($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setAptmeomdueday3($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setAptmeomplusmonths3($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setDateupdtd($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setTimeupdtd($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setDummy($arr[$keys[82]]);
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
     * @return $this|\ApTermsCode The current object, for fluid interface
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
        $criteria = new Criteria(ApTermsCodeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMTERMCODE)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMTERMCODE, $this->aptmtermcode);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMTERMDESC)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMTERMDESC, $this->aptmtermdesc);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMMETHOD)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMMETHOD, $this->aptmmethod);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEXPIREDATE)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEXPIREDATE, $this->aptmexpiredate);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMSPLIT1, $this->aptmsplit1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMORDERPCT1, $this->aptmorderpct1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCPCT1, $this->aptmdiscpct1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAYS1, $this->aptmdiscdays1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAY1, $this->aptmdiscday1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDATE1, $this->aptmdiscdate1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAYS1, $this->aptmduedays1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAY1, $this->aptmdueday1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSMONTHS1, $this->aptmplusmonths1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDATE1, $this->aptmduedate1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSYEAR1, $this->aptmplusyear1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMSPLIT2, $this->aptmsplit2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMORDERPCT2, $this->aptmorderpct2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCPCT2, $this->aptmdiscpct2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAYS2, $this->aptmdiscdays2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAY2, $this->aptmdiscday2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDATE2, $this->aptmdiscdate2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAYS2, $this->aptmduedays2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAY2, $this->aptmdueday2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSMONTHS2, $this->aptmplusmonths2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDATE2, $this->aptmduedate2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSYEAR2, $this->aptmplusyear2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMSPLIT3, $this->aptmsplit3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMORDERPCT3, $this->aptmorderpct3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCPCT3, $this->aptmdiscpct3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAYS3, $this->aptmdiscdays3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAY3, $this->aptmdiscday3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDATE3, $this->aptmdiscdate3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAYS3, $this->aptmduedays3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAY3, $this->aptmdueday3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSMONTHS3, $this->aptmplusmonths3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDATE3, $this->aptmduedate3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSYEAR3, $this->aptmplusyear3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMSPLIT4, $this->aptmsplit4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMORDERPCT4, $this->aptmorderpct4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCPCT4, $this->aptmdiscpct4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAYS4, $this->aptmdiscdays4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAY4, $this->aptmdiscday4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDATE4, $this->aptmdiscdate4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAYS4, $this->aptmduedays4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAY4, $this->aptmdueday4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSMONTHS4, $this->aptmplusmonths4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDATE4, $this->aptmduedate4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR4)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSYEAR4, $this->aptmplusyear4);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMSPLIT5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMSPLIT5, $this->aptmsplit5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMORDERPCT5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMORDERPCT5, $this->aptmorderpct5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCPCT5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCPCT5, $this->aptmdiscpct5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAYS5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAYS5, $this->aptmdiscdays5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDAY5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDAY5, $this->aptmdiscday5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDISCDATE5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDISCDATE5, $this->aptmdiscdate5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAYS5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAYS5, $this->aptmduedays5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDAY5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDAY5, $this->aptmdueday5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSMONTHS5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSMONTHS5, $this->aptmplusmonths5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDUEDATE5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDUEDATE5, $this->aptmduedate5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMPLUSYEAR5)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMPLUSYEAR5, $this->aptmplusyear5);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYFROM1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDAYFROM1, $this->aptmdayfrom1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYTHRU1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDAYTHRU1, $this->aptmdaythru1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCPCT1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCPCT1, $this->aptmeomdiscpct1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCDAY1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCDAY1, $this->aptmeomdiscday1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1, $this->aptmeomdiscmonths1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDUEDAY1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDUEDAY1, $this->aptmeomdueday1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1, $this->aptmeomplusmonths1);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYFROM2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDAYFROM2, $this->aptmdayfrom2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYTHRU2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDAYTHRU2, $this->aptmdaythru2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCPCT2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCPCT2, $this->aptmeomdiscpct2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCDAY2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCDAY2, $this->aptmeomdiscday2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2, $this->aptmeomdiscmonths2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDUEDAY2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDUEDAY2, $this->aptmeomdueday2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2, $this->aptmeomplusmonths2);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYFROM3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDAYFROM3, $this->aptmdayfrom3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMDAYTHRU3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMDAYTHRU3, $this->aptmdaythru3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCPCT3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCPCT3, $this->aptmeomdiscpct3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCDAY3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCDAY3, $this->aptmeomdiscday3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3, $this->aptmeomdiscmonths3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMDUEDAY3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMDUEDAY3, $this->aptmeomdueday3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3)) {
            $criteria->add(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3, $this->aptmeomplusmonths3);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_DATEUPDTD)) {
            $criteria->add(ApTermsCodeTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ApTermsCodeTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ApTermsCodeTableMap::COL_DUMMY)) {
            $criteria->add(ApTermsCodeTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildApTermsCodeQuery::create();
        $criteria->add(ApTermsCodeTableMap::COL_APTMTERMCODE, $this->aptmtermcode);

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
        $validPk = null !== $this->getAptmtermcode();

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
        return $this->getAptmtermcode();
    }

    /**
     * Generic method to set the primary key (aptmtermcode column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAptmtermcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getAptmtermcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ApTermsCode (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAptmtermcode($this->getAptmtermcode());
        $copyObj->setAptmtermdesc($this->getAptmtermdesc());
        $copyObj->setAptmmethod($this->getAptmmethod());
        $copyObj->setAptmexpiredate($this->getAptmexpiredate());
        $copyObj->setAptmsplit1($this->getAptmsplit1());
        $copyObj->setAptmorderpct1($this->getAptmorderpct1());
        $copyObj->setAptmdiscpct1($this->getAptmdiscpct1());
        $copyObj->setAptmdiscdays1($this->getAptmdiscdays1());
        $copyObj->setAptmdiscday1($this->getAptmdiscday1());
        $copyObj->setAptmdiscdate1($this->getAptmdiscdate1());
        $copyObj->setAptmduedays1($this->getAptmduedays1());
        $copyObj->setAptmdueday1($this->getAptmdueday1());
        $copyObj->setAptmplusmonths1($this->getAptmplusmonths1());
        $copyObj->setAptmduedate1($this->getAptmduedate1());
        $copyObj->setAptmplusyear1($this->getAptmplusyear1());
        $copyObj->setAptmsplit2($this->getAptmsplit2());
        $copyObj->setAptmorderpct2($this->getAptmorderpct2());
        $copyObj->setAptmdiscpct2($this->getAptmdiscpct2());
        $copyObj->setAptmdiscdays2($this->getAptmdiscdays2());
        $copyObj->setAptmdiscday2($this->getAptmdiscday2());
        $copyObj->setAptmdiscdate2($this->getAptmdiscdate2());
        $copyObj->setAptmduedays2($this->getAptmduedays2());
        $copyObj->setAptmdueday2($this->getAptmdueday2());
        $copyObj->setAptmplusmonths2($this->getAptmplusmonths2());
        $copyObj->setAptmduedate2($this->getAptmduedate2());
        $copyObj->setAptmplusyear2($this->getAptmplusyear2());
        $copyObj->setAptmsplit3($this->getAptmsplit3());
        $copyObj->setAptmorderpct3($this->getAptmorderpct3());
        $copyObj->setAptmdiscpct3($this->getAptmdiscpct3());
        $copyObj->setAptmdiscdays3($this->getAptmdiscdays3());
        $copyObj->setAptmdiscday3($this->getAptmdiscday3());
        $copyObj->setAptmdiscdate3($this->getAptmdiscdate3());
        $copyObj->setAptmduedays3($this->getAptmduedays3());
        $copyObj->setAptmdueday3($this->getAptmdueday3());
        $copyObj->setAptmplusmonths3($this->getAptmplusmonths3());
        $copyObj->setAptmduedate3($this->getAptmduedate3());
        $copyObj->setAptmplusyear3($this->getAptmplusyear3());
        $copyObj->setAptmsplit4($this->getAptmsplit4());
        $copyObj->setAptmorderpct4($this->getAptmorderpct4());
        $copyObj->setAptmdiscpct4($this->getAptmdiscpct4());
        $copyObj->setAptmdiscdays4($this->getAptmdiscdays4());
        $copyObj->setAptmdiscday4($this->getAptmdiscday4());
        $copyObj->setAptmdiscdate4($this->getAptmdiscdate4());
        $copyObj->setAptmduedays4($this->getAptmduedays4());
        $copyObj->setAptmdueday4($this->getAptmdueday4());
        $copyObj->setAptmplusmonths4($this->getAptmplusmonths4());
        $copyObj->setAptmduedate4($this->getAptmduedate4());
        $copyObj->setAptmplusyear4($this->getAptmplusyear4());
        $copyObj->setAptmsplit5($this->getAptmsplit5());
        $copyObj->setAptmorderpct5($this->getAptmorderpct5());
        $copyObj->setAptmdiscpct5($this->getAptmdiscpct5());
        $copyObj->setAptmdiscdays5($this->getAptmdiscdays5());
        $copyObj->setAptmdiscday5($this->getAptmdiscday5());
        $copyObj->setAptmdiscdate5($this->getAptmdiscdate5());
        $copyObj->setAptmduedays5($this->getAptmduedays5());
        $copyObj->setAptmdueday5($this->getAptmdueday5());
        $copyObj->setAptmplusmonths5($this->getAptmplusmonths5());
        $copyObj->setAptmduedate5($this->getAptmduedate5());
        $copyObj->setAptmplusyear5($this->getAptmplusyear5());
        $copyObj->setAptmdayfrom1($this->getAptmdayfrom1());
        $copyObj->setAptmdaythru1($this->getAptmdaythru1());
        $copyObj->setAptmeomdiscpct1($this->getAptmeomdiscpct1());
        $copyObj->setAptmeomdiscday1($this->getAptmeomdiscday1());
        $copyObj->setAptmeomdiscmonths1($this->getAptmeomdiscmonths1());
        $copyObj->setAptmeomdueday1($this->getAptmeomdueday1());
        $copyObj->setAptmeomplusmonths1($this->getAptmeomplusmonths1());
        $copyObj->setAptmdayfrom2($this->getAptmdayfrom2());
        $copyObj->setAptmdaythru2($this->getAptmdaythru2());
        $copyObj->setAptmeomdiscpct2($this->getAptmeomdiscpct2());
        $copyObj->setAptmeomdiscday2($this->getAptmeomdiscday2());
        $copyObj->setAptmeomdiscmonths2($this->getAptmeomdiscmonths2());
        $copyObj->setAptmeomdueday2($this->getAptmeomdueday2());
        $copyObj->setAptmeomplusmonths2($this->getAptmeomplusmonths2());
        $copyObj->setAptmdayfrom3($this->getAptmdayfrom3());
        $copyObj->setAptmdaythru3($this->getAptmdaythru3());
        $copyObj->setAptmeomdiscpct3($this->getAptmeomdiscpct3());
        $copyObj->setAptmeomdiscday3($this->getAptmeomdiscday3());
        $copyObj->setAptmeomdiscmonths3($this->getAptmeomdiscmonths3());
        $copyObj->setAptmeomdueday3($this->getAptmeomdueday3());
        $copyObj->setAptmeomplusmonths3($this->getAptmeomplusmonths3());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getVendors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVendor($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

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
     * @return \ApTermsCode Clone of current object.
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Vendor' == $relationName) {
            $this->initVendors();
            return;
        }
    }

    /**
     * Clears out the collVendors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addVendors()
     */
    public function clearVendors()
    {
        $this->collVendors = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collVendors collection loaded partially.
     */
    public function resetPartialVendors($v = true)
    {
        $this->collVendorsPartial = $v;
    }

    /**
     * Initializes the collVendors collection.
     *
     * By default this just sets the collVendors collection to an empty array (like clearcollVendors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVendors($overrideExisting = true)
    {
        if (null !== $this->collVendors && !$overrideExisting) {
            return;
        }

        $collectionClassName = VendorTableMap::getTableMap()->getCollectionClassName();

        $this->collVendors = new $collectionClassName;
        $this->collVendors->setModel('\Vendor');
    }

    /**
     * Gets an array of ChildVendor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildApTermsCode is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildVendor[] List of ChildVendor objects
     * @throws PropelException
     */
    public function getVendors(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collVendorsPartial && !$this->isNew();
        if (null === $this->collVendors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVendors) {
                // return empty collection
                $this->initVendors();
            } else {
                $collVendors = ChildVendorQuery::create(null, $criteria)
                    ->filterByApTermsCode($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collVendorsPartial && count($collVendors)) {
                        $this->initVendors(false);

                        foreach ($collVendors as $obj) {
                            if (false == $this->collVendors->contains($obj)) {
                                $this->collVendors->append($obj);
                            }
                        }

                        $this->collVendorsPartial = true;
                    }

                    return $collVendors;
                }

                if ($partial && $this->collVendors) {
                    foreach ($this->collVendors as $obj) {
                        if ($obj->isNew()) {
                            $collVendors[] = $obj;
                        }
                    }
                }

                $this->collVendors = $collVendors;
                $this->collVendorsPartial = false;
            }
        }

        return $this->collVendors;
    }

    /**
     * Sets a collection of ChildVendor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $vendors A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildApTermsCode The current object (for fluent API support)
     */
    public function setVendors(Collection $vendors, ConnectionInterface $con = null)
    {
        /** @var ChildVendor[] $vendorsToDelete */
        $vendorsToDelete = $this->getVendors(new Criteria(), $con)->diff($vendors);


        $this->vendorsScheduledForDeletion = $vendorsToDelete;

        foreach ($vendorsToDelete as $vendorRemoved) {
            $vendorRemoved->setApTermsCode(null);
        }

        $this->collVendors = null;
        foreach ($vendors as $vendor) {
            $this->addVendor($vendor);
        }

        $this->collVendors = $vendors;
        $this->collVendorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Vendor objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Vendor objects.
     * @throws PropelException
     */
    public function countVendors(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collVendorsPartial && !$this->isNew();
        if (null === $this->collVendors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVendors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVendors());
            }

            $query = ChildVendorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByApTermsCode($this)
                ->count($con);
        }

        return count($this->collVendors);
    }

    /**
     * Method called to associate a ChildVendor object to this object
     * through the ChildVendor foreign key attribute.
     *
     * @param  ChildVendor $l ChildVendor
     * @return $this|\ApTermsCode The current object (for fluent API support)
     */
    public function addVendor(ChildVendor $l)
    {
        if ($this->collVendors === null) {
            $this->initVendors();
            $this->collVendorsPartial = true;
        }

        if (!$this->collVendors->contains($l)) {
            $this->doAddVendor($l);

            if ($this->vendorsScheduledForDeletion and $this->vendorsScheduledForDeletion->contains($l)) {
                $this->vendorsScheduledForDeletion->remove($this->vendorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildVendor $vendor The ChildVendor object to add.
     */
    protected function doAddVendor(ChildVendor $vendor)
    {
        $this->collVendors[]= $vendor;
        $vendor->setApTermsCode($this);
    }

    /**
     * @param  ChildVendor $vendor The ChildVendor object to remove.
     * @return $this|ChildApTermsCode The current object (for fluent API support)
     */
    public function removeVendor(ChildVendor $vendor)
    {
        if ($this->getVendors()->contains($vendor)) {
            $pos = $this->collVendors->search($vendor);
            $this->collVendors->remove($pos);
            if (null === $this->vendorsScheduledForDeletion) {
                $this->vendorsScheduledForDeletion = clone $this->collVendors;
                $this->vendorsScheduledForDeletion->clear();
            }
            $this->vendorsScheduledForDeletion[]= $vendor;
            $vendor->setApTermsCode(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ApTermsCode is new, it will return
     * an empty collection; or if this ApTermsCode has previously
     * been saved, it will retrieve related Vendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ApTermsCode.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildVendor[] List of ChildVendor objects
     */
    public function getVendorsJoinApTypeCode(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildVendorQuery::create(null, $criteria);
        $query->joinWith('ApTypeCode', $joinBehavior);

        return $this->getVendors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ApTermsCode is new, it will return
     * an empty collection; or if this ApTermsCode has previously
     * been saved, it will retrieve related Vendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ApTermsCode.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildVendor[] List of ChildVendor objects
     */
    public function getVendorsJoinShipvia(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildVendorQuery::create(null, $criteria);
        $query->joinWith('Shipvia', $joinBehavior);

        return $this->getVendors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ApTermsCode is new, it will return
     * an empty collection; or if this ApTermsCode has previously
     * been saved, it will retrieve related Vendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ApTermsCode.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildVendor[] List of ChildVendor objects
     */
    public function getVendorsJoinApBuyer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildVendorQuery::create(null, $criteria);
        $query->joinWith('ApBuyer', $joinBehavior);

        return $this->getVendors($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->aptmtermcode = null;
        $this->aptmtermdesc = null;
        $this->aptmmethod = null;
        $this->aptmexpiredate = null;
        $this->aptmsplit1 = null;
        $this->aptmorderpct1 = null;
        $this->aptmdiscpct1 = null;
        $this->aptmdiscdays1 = null;
        $this->aptmdiscday1 = null;
        $this->aptmdiscdate1 = null;
        $this->aptmduedays1 = null;
        $this->aptmdueday1 = null;
        $this->aptmplusmonths1 = null;
        $this->aptmduedate1 = null;
        $this->aptmplusyear1 = null;
        $this->aptmsplit2 = null;
        $this->aptmorderpct2 = null;
        $this->aptmdiscpct2 = null;
        $this->aptmdiscdays2 = null;
        $this->aptmdiscday2 = null;
        $this->aptmdiscdate2 = null;
        $this->aptmduedays2 = null;
        $this->aptmdueday2 = null;
        $this->aptmplusmonths2 = null;
        $this->aptmduedate2 = null;
        $this->aptmplusyear2 = null;
        $this->aptmsplit3 = null;
        $this->aptmorderpct3 = null;
        $this->aptmdiscpct3 = null;
        $this->aptmdiscdays3 = null;
        $this->aptmdiscday3 = null;
        $this->aptmdiscdate3 = null;
        $this->aptmduedays3 = null;
        $this->aptmdueday3 = null;
        $this->aptmplusmonths3 = null;
        $this->aptmduedate3 = null;
        $this->aptmplusyear3 = null;
        $this->aptmsplit4 = null;
        $this->aptmorderpct4 = null;
        $this->aptmdiscpct4 = null;
        $this->aptmdiscdays4 = null;
        $this->aptmdiscday4 = null;
        $this->aptmdiscdate4 = null;
        $this->aptmduedays4 = null;
        $this->aptmdueday4 = null;
        $this->aptmplusmonths4 = null;
        $this->aptmduedate4 = null;
        $this->aptmplusyear4 = null;
        $this->aptmsplit5 = null;
        $this->aptmorderpct5 = null;
        $this->aptmdiscpct5 = null;
        $this->aptmdiscdays5 = null;
        $this->aptmdiscday5 = null;
        $this->aptmdiscdate5 = null;
        $this->aptmduedays5 = null;
        $this->aptmdueday5 = null;
        $this->aptmplusmonths5 = null;
        $this->aptmduedate5 = null;
        $this->aptmplusyear5 = null;
        $this->aptmdayfrom1 = null;
        $this->aptmdaythru1 = null;
        $this->aptmeomdiscpct1 = null;
        $this->aptmeomdiscday1 = null;
        $this->aptmeomdiscmonths1 = null;
        $this->aptmeomdueday1 = null;
        $this->aptmeomplusmonths1 = null;
        $this->aptmdayfrom2 = null;
        $this->aptmdaythru2 = null;
        $this->aptmeomdiscpct2 = null;
        $this->aptmeomdiscday2 = null;
        $this->aptmeomdiscmonths2 = null;
        $this->aptmeomdueday2 = null;
        $this->aptmeomplusmonths2 = null;
        $this->aptmdayfrom3 = null;
        $this->aptmdaythru3 = null;
        $this->aptmeomdiscpct3 = null;
        $this->aptmeomdiscday3 = null;
        $this->aptmeomdiscmonths3 = null;
        $this->aptmeomdueday3 = null;
        $this->aptmeomplusmonths3 = null;
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
            if ($this->collVendors) {
                foreach ($this->collVendors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collVendors = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ApTermsCodeTableMap::DEFAULT_STRING_FORMAT);
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
