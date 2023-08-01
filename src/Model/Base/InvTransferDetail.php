<?php

namespace Base;

use \InvTransferDetail as ChildInvTransferDetail;
use \InvTransferDetailQuery as ChildInvTransferDetailQuery;
use \InvTransferLotserial as ChildInvTransferLotserial;
use \InvTransferLotserialQuery as ChildInvTransferLotserialQuery;
use \InvTransferOrder as ChildInvTransferOrder;
use \InvTransferOrderQuery as ChildInvTransferOrderQuery;
use \InvTransferPickedLotserial as ChildInvTransferPickedLotserial;
use \InvTransferPickedLotserialQuery as ChildInvTransferPickedLotserialQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\InvTransferDetailTableMap;
use Map\InvTransferLotserialTableMap;
use Map\InvTransferPickedLotserialTableMap;
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
 * Base class that represents a row from the 'inv_trans_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvTransferDetail implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvTransferDetailTableMap';


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
     * The value for the inhdnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $inhdnbr;

    /**
     * The value for the indtline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $indtline;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the indtqtyrqst field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $indtqtyrqst;

    /**
     * The value for the indtqtyship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $indtqtyship;

    /**
     * The value for the indtrqstdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtrqstdate;

    /**
     * The value for the indtshipdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtshipdate;

    /**
     * The value for the indtpickflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $indtpickflag;

    /**
     * The value for the indtbordflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $indtbordflag;

    /**
     * The value for the indtqtyprev field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $indtqtyprev;

    /**
     * The value for the indtqtyrcvd field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $indtqtyrcvd;

    /**
     * The value for the indttobercvd field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $indttobercvd;

    /**
     * The value for the indtrcptdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtrcptdate;

    /**
     * The value for the indtsonbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $indtsonbr;

    /**
     * The value for the indtkitflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $indtkitflag;

    /**
     * The value for the indtuseitemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtuseitemnbr;

    /**
     * The value for the indtcustitemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtcustitemnbr;

    /**
     * The value for the indtcntrqty field.
     *
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $indtcntrqty;

    /**
     * The value for the indtcases field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $indtcases;

    /**
     * The value for the indtorigrqstdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtorigrqstdate;

    /**
     * The value for the indtordras field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtordras;

    /**
     * The value for the indtfreshfrozen field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtfreshfrozen;

    /**
     * The value for the indtprimbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $indtprimbin;

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
     * @var        ChildInvTransferOrder
     */
    protected $aInvTransferOrder;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

    /**
     * @var        ObjectCollection|ChildInvTransferLotserial[] Collection to store aggregation of ChildInvTransferLotserial objects.
     */
    protected $collInvTransferLotserials;
    protected $collInvTransferLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferPickedLotserial[] Collection to store aggregation of ChildInvTransferPickedLotserial objects.
     */
    protected $collInvTransferPickedLotserials;
    protected $collInvTransferPickedLotserialsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferLotserial[]
     */
    protected $invTransferLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferPickedLotserial[]
     */
    protected $invTransferPickedLotserialsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->inhdnbr = 0;
        $this->indtline = 0;
        $this->inititemnbr = '';
        $this->indtqtyrqst = '0.0000000';
        $this->indtqtyship = '0.0000000';
        $this->indtrqstdate = '';
        $this->indtshipdate = '';
        $this->indtpickflag = 'N';
        $this->indtbordflag = 'N';
        $this->indtqtyprev = '0.0000000';
        $this->indtqtyrcvd = '0.0000000';
        $this->indttobercvd = '0.0000000';
        $this->indtrcptdate = '';
        $this->indtsonbr = 0;
        $this->indtkitflag = 'N';
        $this->indtuseitemnbr = '';
        $this->indtcustitemnbr = '';
        $this->indtcntrqty = '0';
        $this->indtcases = '0.00';
        $this->indtorigrqstdate = '';
        $this->indtordras = '';
        $this->indtfreshfrozen = '';
        $this->indtprimbin = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\InvTransferDetail object.
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
     * Compares this with another <code>InvTransferDetail</code> instance.  If
     * <code>obj</code> is an instance of <code>InvTransferDetail</code>, delegates to
     * <code>equals(InvTransferDetail)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvTransferDetail The current object, for fluid interface
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
     * Get the [inhdnbr] column value.
     *
     * @return int
     */
    public function getInhdnbr()
    {
        return $this->inhdnbr;
    }

    /**
     * Get the [indtline] column value.
     *
     * @return int
     */
    public function getIndtline()
    {
        return $this->indtline;
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
     * Get the [indtqtyrqst] column value.
     *
     * @return string
     */
    public function getIndtqtyrqst()
    {
        return $this->indtqtyrqst;
    }

    /**
     * Get the [indtqtyship] column value.
     *
     * @return string
     */
    public function getIndtqtyship()
    {
        return $this->indtqtyship;
    }

    /**
     * Get the [indtrqstdate] column value.
     *
     * @return string
     */
    public function getIndtrqstdate()
    {
        return $this->indtrqstdate;
    }

    /**
     * Get the [indtshipdate] column value.
     *
     * @return string
     */
    public function getIndtshipdate()
    {
        return $this->indtshipdate;
    }

    /**
     * Get the [indtpickflag] column value.
     *
     * @return string
     */
    public function getIndtpickflag()
    {
        return $this->indtpickflag;
    }

    /**
     * Get the [indtbordflag] column value.
     *
     * @return string
     */
    public function getIndtbordflag()
    {
        return $this->indtbordflag;
    }

    /**
     * Get the [indtqtyprev] column value.
     *
     * @return string
     */
    public function getIndtqtyprev()
    {
        return $this->indtqtyprev;
    }

    /**
     * Get the [indtqtyrcvd] column value.
     *
     * @return string
     */
    public function getIndtqtyrcvd()
    {
        return $this->indtqtyrcvd;
    }

    /**
     * Get the [indttobercvd] column value.
     *
     * @return string
     */
    public function getIndttobercvd()
    {
        return $this->indttobercvd;
    }

    /**
     * Get the [indtrcptdate] column value.
     *
     * @return string
     */
    public function getIndtrcptdate()
    {
        return $this->indtrcptdate;
    }

    /**
     * Get the [indtsonbr] column value.
     *
     * @return int
     */
    public function getIndtsonbr()
    {
        return $this->indtsonbr;
    }

    /**
     * Get the [indtkitflag] column value.
     *
     * @return string
     */
    public function getIndtkitflag()
    {
        return $this->indtkitflag;
    }

    /**
     * Get the [indtuseitemnbr] column value.
     *
     * @return string
     */
    public function getIndtuseitemnbr()
    {
        return $this->indtuseitemnbr;
    }

    /**
     * Get the [indtcustitemnbr] column value.
     *
     * @return string
     */
    public function getIndtcustitemnbr()
    {
        return $this->indtcustitemnbr;
    }

    /**
     * Get the [indtcntrqty] column value.
     *
     * @return string
     */
    public function getIndtcntrqty()
    {
        return $this->indtcntrqty;
    }

    /**
     * Get the [indtcases] column value.
     *
     * @return string
     */
    public function getIndtcases()
    {
        return $this->indtcases;
    }

    /**
     * Get the [indtorigrqstdate] column value.
     *
     * @return string
     */
    public function getIndtorigrqstdate()
    {
        return $this->indtorigrqstdate;
    }

    /**
     * Get the [indtordras] column value.
     *
     * @return string
     */
    public function getIndtordras()
    {
        return $this->indtordras;
    }

    /**
     * Get the [indtfreshfrozen] column value.
     *
     * @return string
     */
    public function getIndtfreshfrozen()
    {
        return $this->indtfreshfrozen;
    }

    /**
     * Get the [indtprimbin] column value.
     *
     * @return string
     */
    public function getIndtprimbin()
    {
        return $this->indtprimbin;
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
     * Set the value of [inhdnbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setInhdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inhdnbr !== $v) {
            $this->inhdnbr = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INHDNBR] = true;
        }

        if ($this->aInvTransferOrder !== null && $this->aInvTransferOrder->getInhdnbr() !== $v) {
            $this->aInvTransferOrder = null;
        }

        return $this;
    } // setInhdnbr()

    /**
     * Set the value of [indtline] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->indtline !== $v) {
            $this->indtline = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTLINE] = true;
        }

        return $this;
    } // setIndtline()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [indtqtyrqst] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtqtyrqst($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtqtyrqst !== $v) {
            $this->indtqtyrqst = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTQTYRQST] = true;
        }

        return $this;
    } // setIndtqtyrqst()

    /**
     * Set the value of [indtqtyship] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtqtyship !== $v) {
            $this->indtqtyship = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTQTYSHIP] = true;
        }

        return $this;
    } // setIndtqtyship()

    /**
     * Set the value of [indtrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtrqstdate !== $v) {
            $this->indtrqstdate = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTRQSTDATE] = true;
        }

        return $this;
    } // setIndtrqstdate()

    /**
     * Set the value of [indtshipdate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtshipdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtshipdate !== $v) {
            $this->indtshipdate = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTSHIPDATE] = true;
        }

        return $this;
    } // setIndtshipdate()

    /**
     * Set the value of [indtpickflag] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtpickflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtpickflag !== $v) {
            $this->indtpickflag = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTPICKFLAG] = true;
        }

        return $this;
    } // setIndtpickflag()

    /**
     * Set the value of [indtbordflag] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtbordflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtbordflag !== $v) {
            $this->indtbordflag = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTBORDFLAG] = true;
        }

        return $this;
    } // setIndtbordflag()

    /**
     * Set the value of [indtqtyprev] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtqtyprev($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtqtyprev !== $v) {
            $this->indtqtyprev = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTQTYPREV] = true;
        }

        return $this;
    } // setIndtqtyprev()

    /**
     * Set the value of [indtqtyrcvd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtqtyrcvd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtqtyrcvd !== $v) {
            $this->indtqtyrcvd = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTQTYRCVD] = true;
        }

        return $this;
    } // setIndtqtyrcvd()

    /**
     * Set the value of [indttobercvd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndttobercvd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indttobercvd !== $v) {
            $this->indttobercvd = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTTOBERCVD] = true;
        }

        return $this;
    } // setIndttobercvd()

    /**
     * Set the value of [indtrcptdate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtrcptdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtrcptdate !== $v) {
            $this->indtrcptdate = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTRCPTDATE] = true;
        }

        return $this;
    } // setIndtrcptdate()

    /**
     * Set the value of [indtsonbr] column.
     *
     * @param int $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtsonbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->indtsonbr !== $v) {
            $this->indtsonbr = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTSONBR] = true;
        }

        return $this;
    } // setIndtsonbr()

    /**
     * Set the value of [indtkitflag] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtkitflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtkitflag !== $v) {
            $this->indtkitflag = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTKITFLAG] = true;
        }

        return $this;
    } // setIndtkitflag()

    /**
     * Set the value of [indtuseitemnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtuseitemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtuseitemnbr !== $v) {
            $this->indtuseitemnbr = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTUSEITEMNBR] = true;
        }

        return $this;
    } // setIndtuseitemnbr()

    /**
     * Set the value of [indtcustitemnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtcustitemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtcustitemnbr !== $v) {
            $this->indtcustitemnbr = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTCUSTITEMNBR] = true;
        }

        return $this;
    } // setIndtcustitemnbr()

    /**
     * Set the value of [indtcntrqty] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtcntrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtcntrqty !== $v) {
            $this->indtcntrqty = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTCNTRQTY] = true;
        }

        return $this;
    } // setIndtcntrqty()

    /**
     * Set the value of [indtcases] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtcases($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtcases !== $v) {
            $this->indtcases = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTCASES] = true;
        }

        return $this;
    } // setIndtcases()

    /**
     * Set the value of [indtorigrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtorigrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtorigrqstdate !== $v) {
            $this->indtorigrqstdate = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTORIGRQSTDATE] = true;
        }

        return $this;
    } // setIndtorigrqstdate()

    /**
     * Set the value of [indtordras] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtordras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtordras !== $v) {
            $this->indtordras = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTORDRAS] = true;
        }

        return $this;
    } // setIndtordras()

    /**
     * Set the value of [indtfreshfrozen] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtfreshfrozen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtfreshfrozen !== $v) {
            $this->indtfreshfrozen = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTFRESHFROZEN] = true;
        }

        return $this;
    } // setIndtfreshfrozen()

    /**
     * Set the value of [indtprimbin] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setIndtprimbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indtprimbin !== $v) {
            $this->indtprimbin = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_INDTPRIMBIN] = true;
        }

        return $this;
    } // setIndtprimbin()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvTransferDetailTableMap::COL_DUMMY] = true;
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
            if ($this->inhdnbr !== 0) {
                return false;
            }

            if ($this->indtline !== 0) {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->indtqtyrqst !== '0.0000000') {
                return false;
            }

            if ($this->indtqtyship !== '0.0000000') {
                return false;
            }

            if ($this->indtrqstdate !== '') {
                return false;
            }

            if ($this->indtshipdate !== '') {
                return false;
            }

            if ($this->indtpickflag !== 'N') {
                return false;
            }

            if ($this->indtbordflag !== 'N') {
                return false;
            }

            if ($this->indtqtyprev !== '0.0000000') {
                return false;
            }

            if ($this->indtqtyrcvd !== '0.0000000') {
                return false;
            }

            if ($this->indttobercvd !== '0.0000000') {
                return false;
            }

            if ($this->indtrcptdate !== '') {
                return false;
            }

            if ($this->indtsonbr !== 0) {
                return false;
            }

            if ($this->indtkitflag !== 'N') {
                return false;
            }

            if ($this->indtuseitemnbr !== '') {
                return false;
            }

            if ($this->indtcustitemnbr !== '') {
                return false;
            }

            if ($this->indtcntrqty !== '0') {
                return false;
            }

            if ($this->indtcases !== '0.00') {
                return false;
            }

            if ($this->indtorigrqstdate !== '') {
                return false;
            }

            if ($this->indtordras !== '') {
                return false;
            }

            if ($this->indtfreshfrozen !== '') {
                return false;
            }

            if ($this->indtprimbin !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvTransferDetailTableMap::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inhdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvTransferDetailTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtqtyrqst', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtqtyrqst = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtshipdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtshipdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtpickflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtpickflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtbordflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtbordflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtqtyprev', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtqtyprev = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtqtyrcvd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtqtyrcvd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvTransferDetailTableMap::translateFieldName('Indttobercvd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indttobercvd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtrcptdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtrcptdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtsonbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtsonbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtkitflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtkitflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtuseitemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtuseitemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtcustitemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtcntrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtcases', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtcases = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtorigrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtorigrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtordras', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtordras = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtfreshfrozen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtfreshfrozen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvTransferDetailTableMap::translateFieldName('Indtprimbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->indtprimbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvTransferDetailTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvTransferDetailTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : InvTransferDetailTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 26; // 26 = InvTransferDetailTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvTransferDetail'), 0, $e);
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
        if ($this->aInvTransferOrder !== null && $this->inhdnbr !== $this->aInvTransferOrder->getInhdnbr()) {
            $this->aInvTransferOrder = null;
        }
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferDetailTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvTransferDetailQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aInvTransferOrder = null;
            $this->aItemMasterItem = null;
            $this->collInvTransferLotserials = null;

            $this->collInvTransferPickedLotserials = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see InvTransferDetail::setDeleted()
     * @see InvTransferDetail::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferDetailTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvTransferDetailQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferDetailTableMap::DATABASE_NAME);
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
                InvTransferDetailTableMap::addInstanceToPool($this);
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

            if ($this->aInvTransferOrder !== null) {
                if ($this->aInvTransferOrder->isModified() || $this->aInvTransferOrder->isNew()) {
                    $affectedRows += $this->aInvTransferOrder->save($con);
                }
                $this->setInvTransferOrder($this->aInvTransferOrder);
            }

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
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

            if ($this->invTransferLotserialsScheduledForDeletion !== null) {
                if (!$this->invTransferLotserialsScheduledForDeletion->isEmpty()) {
                    \InvTransferLotserialQuery::create()
                        ->filterByPrimaryKeys($this->invTransferLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferLotserials !== null) {
                foreach ($this->collInvTransferLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferPickedLotserialsScheduledForDeletion !== null) {
                if (!$this->invTransferPickedLotserialsScheduledForDeletion->isEmpty()) {
                    \InvTransferPickedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->invTransferPickedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferPickedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferPickedLotserials !== null) {
                foreach ($this->collInvTransferPickedLotserials as $referrerFK) {
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
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InhdNbr';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'IndtLine';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTQTYRQST)) {
            $modifiedColumns[':p' . $index++]  = 'IndtQtyRqst';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'IndtQtyShip';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IndtRqstDate';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTSHIPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IndtShipDate';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTPICKFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'IndtPickFlag';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTBORDFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'IndtBordFlag';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTQTYPREV)) {
            $modifiedColumns[':p' . $index++]  = 'IndtQtyPrev';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTQTYRCVD)) {
            $modifiedColumns[':p' . $index++]  = 'IndtQtyRcvd';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTTOBERCVD)) {
            $modifiedColumns[':p' . $index++]  = 'IndtToBeRcvd';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTRCPTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IndtRcptDate';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTSONBR)) {
            $modifiedColumns[':p' . $index++]  = 'IndtSoNbr';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTKITFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'IndtKitFlag';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTUSEITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'IndtUseItemNbr';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTCUSTITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'IndtCustItemNbr';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'IndtCntrQty';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTCASES)) {
            $modifiedColumns[':p' . $index++]  = 'IndtCases';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTORIGRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IndtOrigRqstDate';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTORDRAS)) {
            $modifiedColumns[':p' . $index++]  = 'IndtOrdrAs';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTFRESHFROZEN)) {
            $modifiedColumns[':p' . $index++]  = 'IndtFreshFrozen';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTPRIMBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IndtPrimBin';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_trans_det (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'InhdNbr':
                        $stmt->bindValue($identifier, $this->inhdnbr, PDO::PARAM_INT);
                        break;
                    case 'IndtLine':
                        $stmt->bindValue($identifier, $this->indtline, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'IndtQtyRqst':
                        $stmt->bindValue($identifier, $this->indtqtyrqst, PDO::PARAM_STR);
                        break;
                    case 'IndtQtyShip':
                        $stmt->bindValue($identifier, $this->indtqtyship, PDO::PARAM_STR);
                        break;
                    case 'IndtRqstDate':
                        $stmt->bindValue($identifier, $this->indtrqstdate, PDO::PARAM_STR);
                        break;
                    case 'IndtShipDate':
                        $stmt->bindValue($identifier, $this->indtshipdate, PDO::PARAM_STR);
                        break;
                    case 'IndtPickFlag':
                        $stmt->bindValue($identifier, $this->indtpickflag, PDO::PARAM_STR);
                        break;
                    case 'IndtBordFlag':
                        $stmt->bindValue($identifier, $this->indtbordflag, PDO::PARAM_STR);
                        break;
                    case 'IndtQtyPrev':
                        $stmt->bindValue($identifier, $this->indtqtyprev, PDO::PARAM_STR);
                        break;
                    case 'IndtQtyRcvd':
                        $stmt->bindValue($identifier, $this->indtqtyrcvd, PDO::PARAM_STR);
                        break;
                    case 'IndtToBeRcvd':
                        $stmt->bindValue($identifier, $this->indttobercvd, PDO::PARAM_STR);
                        break;
                    case 'IndtRcptDate':
                        $stmt->bindValue($identifier, $this->indtrcptdate, PDO::PARAM_STR);
                        break;
                    case 'IndtSoNbr':
                        $stmt->bindValue($identifier, $this->indtsonbr, PDO::PARAM_INT);
                        break;
                    case 'IndtKitFlag':
                        $stmt->bindValue($identifier, $this->indtkitflag, PDO::PARAM_STR);
                        break;
                    case 'IndtUseItemNbr':
                        $stmt->bindValue($identifier, $this->indtuseitemnbr, PDO::PARAM_STR);
                        break;
                    case 'IndtCustItemNbr':
                        $stmt->bindValue($identifier, $this->indtcustitemnbr, PDO::PARAM_STR);
                        break;
                    case 'IndtCntrQty':
                        $stmt->bindValue($identifier, $this->indtcntrqty, PDO::PARAM_STR);
                        break;
                    case 'IndtCases':
                        $stmt->bindValue($identifier, $this->indtcases, PDO::PARAM_STR);
                        break;
                    case 'IndtOrigRqstDate':
                        $stmt->bindValue($identifier, $this->indtorigrqstdate, PDO::PARAM_STR);
                        break;
                    case 'IndtOrdrAs':
                        $stmt->bindValue($identifier, $this->indtordras, PDO::PARAM_STR);
                        break;
                    case 'IndtFreshFrozen':
                        $stmt->bindValue($identifier, $this->indtfreshfrozen, PDO::PARAM_STR);
                        break;
                    case 'IndtPrimBin':
                        $stmt->bindValue($identifier, $this->indtprimbin, PDO::PARAM_STR);
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
        $pos = InvTransferDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInhdnbr();
                break;
            case 1:
                return $this->getIndtline();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getIndtqtyrqst();
                break;
            case 4:
                return $this->getIndtqtyship();
                break;
            case 5:
                return $this->getIndtrqstdate();
                break;
            case 6:
                return $this->getIndtshipdate();
                break;
            case 7:
                return $this->getIndtpickflag();
                break;
            case 8:
                return $this->getIndtbordflag();
                break;
            case 9:
                return $this->getIndtqtyprev();
                break;
            case 10:
                return $this->getIndtqtyrcvd();
                break;
            case 11:
                return $this->getIndttobercvd();
                break;
            case 12:
                return $this->getIndtrcptdate();
                break;
            case 13:
                return $this->getIndtsonbr();
                break;
            case 14:
                return $this->getIndtkitflag();
                break;
            case 15:
                return $this->getIndtuseitemnbr();
                break;
            case 16:
                return $this->getIndtcustitemnbr();
                break;
            case 17:
                return $this->getIndtcntrqty();
                break;
            case 18:
                return $this->getIndtcases();
                break;
            case 19:
                return $this->getIndtorigrqstdate();
                break;
            case 20:
                return $this->getIndtordras();
                break;
            case 21:
                return $this->getIndtfreshfrozen();
                break;
            case 22:
                return $this->getIndtprimbin();
                break;
            case 23:
                return $this->getDateupdtd();
                break;
            case 24:
                return $this->getTimeupdtd();
                break;
            case 25:
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

        if (isset($alreadyDumpedObjects['InvTransferDetail'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvTransferDetail'][$this->hashCode()] = true;
        $keys = InvTransferDetailTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInhdnbr(),
            $keys[1] => $this->getIndtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getIndtqtyrqst(),
            $keys[4] => $this->getIndtqtyship(),
            $keys[5] => $this->getIndtrqstdate(),
            $keys[6] => $this->getIndtshipdate(),
            $keys[7] => $this->getIndtpickflag(),
            $keys[8] => $this->getIndtbordflag(),
            $keys[9] => $this->getIndtqtyprev(),
            $keys[10] => $this->getIndtqtyrcvd(),
            $keys[11] => $this->getIndttobercvd(),
            $keys[12] => $this->getIndtrcptdate(),
            $keys[13] => $this->getIndtsonbr(),
            $keys[14] => $this->getIndtkitflag(),
            $keys[15] => $this->getIndtuseitemnbr(),
            $keys[16] => $this->getIndtcustitemnbr(),
            $keys[17] => $this->getIndtcntrqty(),
            $keys[18] => $this->getIndtcases(),
            $keys[19] => $this->getIndtorigrqstdate(),
            $keys[20] => $this->getIndtordras(),
            $keys[21] => $this->getIndtfreshfrozen(),
            $keys[22] => $this->getIndtprimbin(),
            $keys[23] => $this->getDateupdtd(),
            $keys[24] => $this->getTimeupdtd(),
            $keys[25] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aInvTransferOrder) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferOrder';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_head';
                        break;
                    default:
                        $key = 'InvTransferOrder';
                }

                $result[$key] = $this->aInvTransferOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
            if (null !== $this->collInvTransferLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_lotsers';
                        break;
                    default:
                        $key = 'InvTransferLotserials';
                }

                $result[$key] = $this->collInvTransferLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferPickedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferPickedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_pulleds';
                        break;
                    default:
                        $key = 'InvTransferPickedLotserials';
                }

                $result[$key] = $this->collInvTransferPickedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\InvTransferDetail
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvTransferDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvTransferDetail
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInhdnbr($value);
                break;
            case 1:
                $this->setIndtline($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setIndtqtyrqst($value);
                break;
            case 4:
                $this->setIndtqtyship($value);
                break;
            case 5:
                $this->setIndtrqstdate($value);
                break;
            case 6:
                $this->setIndtshipdate($value);
                break;
            case 7:
                $this->setIndtpickflag($value);
                break;
            case 8:
                $this->setIndtbordflag($value);
                break;
            case 9:
                $this->setIndtqtyprev($value);
                break;
            case 10:
                $this->setIndtqtyrcvd($value);
                break;
            case 11:
                $this->setIndttobercvd($value);
                break;
            case 12:
                $this->setIndtrcptdate($value);
                break;
            case 13:
                $this->setIndtsonbr($value);
                break;
            case 14:
                $this->setIndtkitflag($value);
                break;
            case 15:
                $this->setIndtuseitemnbr($value);
                break;
            case 16:
                $this->setIndtcustitemnbr($value);
                break;
            case 17:
                $this->setIndtcntrqty($value);
                break;
            case 18:
                $this->setIndtcases($value);
                break;
            case 19:
                $this->setIndtorigrqstdate($value);
                break;
            case 20:
                $this->setIndtordras($value);
                break;
            case 21:
                $this->setIndtfreshfrozen($value);
                break;
            case 22:
                $this->setIndtprimbin($value);
                break;
            case 23:
                $this->setDateupdtd($value);
                break;
            case 24:
                $this->setTimeupdtd($value);
                break;
            case 25:
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
        $keys = InvTransferDetailTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInhdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIndtline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIndtqtyrqst($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIndtqtyship($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIndtrqstdate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIndtshipdate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIndtpickflag($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIndtbordflag($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIndtqtyprev($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIndtqtyrcvd($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setIndttobercvd($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setIndtrcptdate($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setIndtsonbr($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setIndtkitflag($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setIndtuseitemnbr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIndtcustitemnbr($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setIndtcntrqty($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setIndtcases($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIndtorigrqstdate($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setIndtordras($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setIndtfreshfrozen($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setIndtprimbin($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setDateupdtd($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setTimeupdtd($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setDummy($arr[$keys[25]]);
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
     * @return $this|\InvTransferDetail The current object, for fluid interface
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
        $criteria = new Criteria(InvTransferDetailTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INHDNBR)) {
            $criteria->add(InvTransferDetailTableMap::COL_INHDNBR, $this->inhdnbr);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTLINE)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTLINE, $this->indtline);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvTransferDetailTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTQTYRQST)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTQTYRQST, $this->indtqtyrqst);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTQTYSHIP)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTQTYSHIP, $this->indtqtyship);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTRQSTDATE)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTRQSTDATE, $this->indtrqstdate);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTSHIPDATE)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTSHIPDATE, $this->indtshipdate);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTPICKFLAG)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTPICKFLAG, $this->indtpickflag);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTBORDFLAG)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTBORDFLAG, $this->indtbordflag);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTQTYPREV)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTQTYPREV, $this->indtqtyprev);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTQTYRCVD)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTQTYRCVD, $this->indtqtyrcvd);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTTOBERCVD)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTTOBERCVD, $this->indttobercvd);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTRCPTDATE)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTRCPTDATE, $this->indtrcptdate);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTSONBR)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTSONBR, $this->indtsonbr);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTKITFLAG)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTKITFLAG, $this->indtkitflag);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTUSEITEMNBR)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTUSEITEMNBR, $this->indtuseitemnbr);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTCUSTITEMNBR)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTCUSTITEMNBR, $this->indtcustitemnbr);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTCNTRQTY)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTCNTRQTY, $this->indtcntrqty);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTCASES)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTCASES, $this->indtcases);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTORIGRQSTDATE)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTORIGRQSTDATE, $this->indtorigrqstdate);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTORDRAS)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTORDRAS, $this->indtordras);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTFRESHFROZEN)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTFRESHFROZEN, $this->indtfreshfrozen);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_INDTPRIMBIN)) {
            $criteria->add(InvTransferDetailTableMap::COL_INDTPRIMBIN, $this->indtprimbin);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvTransferDetailTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvTransferDetailTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvTransferDetailTableMap::COL_DUMMY)) {
            $criteria->add(InvTransferDetailTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvTransferDetailQuery::create();
        $criteria->add(InvTransferDetailTableMap::COL_INHDNBR, $this->inhdnbr);
        $criteria->add(InvTransferDetailTableMap::COL_INDTLINE, $this->indtline);

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
        $validPk = null !== $this->getInhdnbr() &&
            null !== $this->getIndtline();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation transferOrder to table inv_trans_head
        if ($this->aInvTransferOrder && $hash = spl_object_hash($this->aInvTransferOrder)) {
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
        $pks[0] = $this->getInhdnbr();
        $pks[1] = $this->getIndtline();

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
        $this->setInhdnbr($keys[0]);
        $this->setIndtline($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInhdnbr()) && (null === $this->getIndtline());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvTransferDetail (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInhdnbr($this->getInhdnbr());
        $copyObj->setIndtline($this->getIndtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setIndtqtyrqst($this->getIndtqtyrqst());
        $copyObj->setIndtqtyship($this->getIndtqtyship());
        $copyObj->setIndtrqstdate($this->getIndtrqstdate());
        $copyObj->setIndtshipdate($this->getIndtshipdate());
        $copyObj->setIndtpickflag($this->getIndtpickflag());
        $copyObj->setIndtbordflag($this->getIndtbordflag());
        $copyObj->setIndtqtyprev($this->getIndtqtyprev());
        $copyObj->setIndtqtyrcvd($this->getIndtqtyrcvd());
        $copyObj->setIndttobercvd($this->getIndttobercvd());
        $copyObj->setIndtrcptdate($this->getIndtrcptdate());
        $copyObj->setIndtsonbr($this->getIndtsonbr());
        $copyObj->setIndtkitflag($this->getIndtkitflag());
        $copyObj->setIndtuseitemnbr($this->getIndtuseitemnbr());
        $copyObj->setIndtcustitemnbr($this->getIndtcustitemnbr());
        $copyObj->setIndtcntrqty($this->getIndtcntrqty());
        $copyObj->setIndtcases($this->getIndtcases());
        $copyObj->setIndtorigrqstdate($this->getIndtorigrqstdate());
        $copyObj->setIndtordras($this->getIndtordras());
        $copyObj->setIndtfreshfrozen($this->getIndtfreshfrozen());
        $copyObj->setIndtprimbin($this->getIndtprimbin());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getInvTransferLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferPickedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferPickedLotserial($relObj->copy($deepCopy));
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
     * @return \InvTransferDetail Clone of current object.
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
     * Declares an association between this object and a ChildInvTransferOrder object.
     *
     * @param  ChildInvTransferOrder $v
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvTransferOrder(ChildInvTransferOrder $v = null)
    {
        if ($v === null) {
            $this->setInhdnbr(0);
        } else {
            $this->setInhdnbr($v->getInhdnbr());
        }

        $this->aInvTransferOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvTransferOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addInvTransferDetail($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvTransferOrder object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvTransferOrder The associated ChildInvTransferOrder object.
     * @throws PropelException
     */
    public function getInvTransferOrder(ConnectionInterface $con = null)
    {
        if ($this->aInvTransferOrder === null && ($this->inhdnbr != 0)) {
            $this->aInvTransferOrder = ChildInvTransferOrderQuery::create()->findPk($this->inhdnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvTransferOrder->addInvTransferDetails($this);
             */
        }

        return $this->aInvTransferOrder;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\InvTransferDetail The current object (for fluent API support)
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
            $v->addInvTransferDetail($this);
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
                $this->aItemMasterItem->addInvTransferDetails($this);
             */
        }

        return $this->aItemMasterItem;
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
        if ('InvTransferLotserial' == $relationName) {
            $this->initInvTransferLotserials();
            return;
        }
        if ('InvTransferPickedLotserial' == $relationName) {
            $this->initInvTransferPickedLotserials();
            return;
        }
    }

    /**
     * Clears out the collInvTransferLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferLotserials()
     */
    public function clearInvTransferLotserials()
    {
        $this->collInvTransferLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferLotserials collection loaded partially.
     */
    public function resetPartialInvTransferLotserials($v = true)
    {
        $this->collInvTransferLotserialsPartial = $v;
    }

    /**
     * Initializes the collInvTransferLotserials collection.
     *
     * By default this just sets the collInvTransferLotserials collection to an empty array (like clearcollInvTransferLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferLotserials($overrideExisting = true)
    {
        if (null !== $this->collInvTransferLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferLotserials = new $collectionClassName;
        $this->collInvTransferLotserials->setModel('\InvTransferLotserial');
    }

    /**
     * Gets an array of ChildInvTransferLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvTransferDetail is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     * @throws PropelException
     */
    public function getInvTransferLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferLotserials) {
                // return empty collection
                $this->initInvTransferLotserials();
            } else {
                $collInvTransferLotserials = ChildInvTransferLotserialQuery::create(null, $criteria)
                    ->filterByInvTransferDetail($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferLotserialsPartial && count($collInvTransferLotserials)) {
                        $this->initInvTransferLotserials(false);

                        foreach ($collInvTransferLotserials as $obj) {
                            if (false == $this->collInvTransferLotserials->contains($obj)) {
                                $this->collInvTransferLotserials->append($obj);
                            }
                        }

                        $this->collInvTransferLotserialsPartial = true;
                    }

                    return $collInvTransferLotserials;
                }

                if ($partial && $this->collInvTransferLotserials) {
                    foreach ($this->collInvTransferLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferLotserials[] = $obj;
                        }
                    }
                }

                $this->collInvTransferLotserials = $collInvTransferLotserials;
                $this->collInvTransferLotserialsPartial = false;
            }
        }

        return $this->collInvTransferLotserials;
    }

    /**
     * Sets a collection of ChildInvTransferLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvTransferDetail The current object (for fluent API support)
     */
    public function setInvTransferLotserials(Collection $invTransferLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferLotserial[] $invTransferLotserialsToDelete */
        $invTransferLotserialsToDelete = $this->getInvTransferLotserials(new Criteria(), $con)->diff($invTransferLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferLotserialsScheduledForDeletion = clone $invTransferLotserialsToDelete;

        foreach ($invTransferLotserialsToDelete as $invTransferLotserialRemoved) {
            $invTransferLotserialRemoved->setInvTransferDetail(null);
        }

        $this->collInvTransferLotserials = null;
        foreach ($invTransferLotserials as $invTransferLotserial) {
            $this->addInvTransferLotserial($invTransferLotserial);
        }

        $this->collInvTransferLotserials = $invTransferLotserials;
        $this->collInvTransferLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferLotserial objects.
     * @throws PropelException
     */
    public function countInvTransferLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferLotserials());
            }

            $query = ChildInvTransferLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvTransferDetail($this)
                ->count($con);
        }

        return count($this->collInvTransferLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferLotserial object to this object
     * through the ChildInvTransferLotserial foreign key attribute.
     *
     * @param  ChildInvTransferLotserial $l ChildInvTransferLotserial
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function addInvTransferLotserial(ChildInvTransferLotserial $l)
    {
        if ($this->collInvTransferLotserials === null) {
            $this->initInvTransferLotserials();
            $this->collInvTransferLotserialsPartial = true;
        }

        if (!$this->collInvTransferLotserials->contains($l)) {
            $this->doAddInvTransferLotserial($l);

            if ($this->invTransferLotserialsScheduledForDeletion and $this->invTransferLotserialsScheduledForDeletion->contains($l)) {
                $this->invTransferLotserialsScheduledForDeletion->remove($this->invTransferLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferLotserial $invTransferLotserial The ChildInvTransferLotserial object to add.
     */
    protected function doAddInvTransferLotserial(ChildInvTransferLotserial $invTransferLotserial)
    {
        $this->collInvTransferLotserials[]= $invTransferLotserial;
        $invTransferLotserial->setInvTransferDetail($this);
    }

    /**
     * @param  ChildInvTransferLotserial $invTransferLotserial The ChildInvTransferLotserial object to remove.
     * @return $this|ChildInvTransferDetail The current object (for fluent API support)
     */
    public function removeInvTransferLotserial(ChildInvTransferLotserial $invTransferLotserial)
    {
        if ($this->getInvTransferLotserials()->contains($invTransferLotserial)) {
            $pos = $this->collInvTransferLotserials->search($invTransferLotserial);
            $this->collInvTransferLotserials->remove($pos);
            if (null === $this->invTransferLotserialsScheduledForDeletion) {
                $this->invTransferLotserialsScheduledForDeletion = clone $this->collInvTransferLotserials;
                $this->invTransferLotserialsScheduledForDeletion->clear();
            }
            $this->invTransferLotserialsScheduledForDeletion[]= clone $invTransferLotserial;
            $invTransferLotserial->setInvTransferDetail(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferDetail is new, it will return
     * an empty collection; or if this InvTransferDetail has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferDetail is new, it will return
     * an empty collection; or if this InvTransferDetail has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferDetail is new, it will return
     * an empty collection; or if this InvTransferDetail has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferDetail is new, it will return
     * an empty collection; or if this InvTransferDetail has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }

    /**
     * Clears out the collInvTransferPickedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferPickedLotserials()
     */
    public function clearInvTransferPickedLotserials()
    {
        $this->collInvTransferPickedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferPickedLotserials collection loaded partially.
     */
    public function resetPartialInvTransferPickedLotserials($v = true)
    {
        $this->collInvTransferPickedLotserialsPartial = $v;
    }

    /**
     * Initializes the collInvTransferPickedLotserials collection.
     *
     * By default this just sets the collInvTransferPickedLotserials collection to an empty array (like clearcollInvTransferPickedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferPickedLotserials($overrideExisting = true)
    {
        if (null !== $this->collInvTransferPickedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferPickedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferPickedLotserials = new $collectionClassName;
        $this->collInvTransferPickedLotserials->setModel('\InvTransferPickedLotserial');
    }

    /**
     * Gets an array of ChildInvTransferPickedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildInvTransferDetail is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     * @throws PropelException
     */
    public function getInvTransferPickedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPickedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPickedLotserials) {
                // return empty collection
                $this->initInvTransferPickedLotserials();
            } else {
                $collInvTransferPickedLotserials = ChildInvTransferPickedLotserialQuery::create(null, $criteria)
                    ->filterByInvTransferDetail($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferPickedLotserialsPartial && count($collInvTransferPickedLotserials)) {
                        $this->initInvTransferPickedLotserials(false);

                        foreach ($collInvTransferPickedLotserials as $obj) {
                            if (false == $this->collInvTransferPickedLotserials->contains($obj)) {
                                $this->collInvTransferPickedLotserials->append($obj);
                            }
                        }

                        $this->collInvTransferPickedLotserialsPartial = true;
                    }

                    return $collInvTransferPickedLotserials;
                }

                if ($partial && $this->collInvTransferPickedLotserials) {
                    foreach ($this->collInvTransferPickedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferPickedLotserials[] = $obj;
                        }
                    }
                }

                $this->collInvTransferPickedLotserials = $collInvTransferPickedLotserials;
                $this->collInvTransferPickedLotserialsPartial = false;
            }
        }

        return $this->collInvTransferPickedLotserials;
    }

    /**
     * Sets a collection of ChildInvTransferPickedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferPickedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildInvTransferDetail The current object (for fluent API support)
     */
    public function setInvTransferPickedLotserials(Collection $invTransferPickedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferPickedLotserial[] $invTransferPickedLotserialsToDelete */
        $invTransferPickedLotserialsToDelete = $this->getInvTransferPickedLotserials(new Criteria(), $con)->diff($invTransferPickedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferPickedLotserialsScheduledForDeletion = clone $invTransferPickedLotserialsToDelete;

        foreach ($invTransferPickedLotserialsToDelete as $invTransferPickedLotserialRemoved) {
            $invTransferPickedLotserialRemoved->setInvTransferDetail(null);
        }

        $this->collInvTransferPickedLotserials = null;
        foreach ($invTransferPickedLotserials as $invTransferPickedLotserial) {
            $this->addInvTransferPickedLotserial($invTransferPickedLotserial);
        }

        $this->collInvTransferPickedLotserials = $invTransferPickedLotserials;
        $this->collInvTransferPickedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferPickedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferPickedLotserial objects.
     * @throws PropelException
     */
    public function countInvTransferPickedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPickedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPickedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferPickedLotserials());
            }

            $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvTransferDetail($this)
                ->count($con);
        }

        return count($this->collInvTransferPickedLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferPickedLotserial object to this object
     * through the ChildInvTransferPickedLotserial foreign key attribute.
     *
     * @param  ChildInvTransferPickedLotserial $l ChildInvTransferPickedLotserial
     * @return $this|\InvTransferDetail The current object (for fluent API support)
     */
    public function addInvTransferPickedLotserial(ChildInvTransferPickedLotserial $l)
    {
        if ($this->collInvTransferPickedLotserials === null) {
            $this->initInvTransferPickedLotserials();
            $this->collInvTransferPickedLotserialsPartial = true;
        }

        if (!$this->collInvTransferPickedLotserials->contains($l)) {
            $this->doAddInvTransferPickedLotserial($l);

            if ($this->invTransferPickedLotserialsScheduledForDeletion and $this->invTransferPickedLotserialsScheduledForDeletion->contains($l)) {
                $this->invTransferPickedLotserialsScheduledForDeletion->remove($this->invTransferPickedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferPickedLotserial $invTransferPickedLotserial The ChildInvTransferPickedLotserial object to add.
     */
    protected function doAddInvTransferPickedLotserial(ChildInvTransferPickedLotserial $invTransferPickedLotserial)
    {
        $this->collInvTransferPickedLotserials[]= $invTransferPickedLotserial;
        $invTransferPickedLotserial->setInvTransferDetail($this);
    }

    /**
     * @param  ChildInvTransferPickedLotserial $invTransferPickedLotserial The ChildInvTransferPickedLotserial object to remove.
     * @return $this|ChildInvTransferDetail The current object (for fluent API support)
     */
    public function removeInvTransferPickedLotserial(ChildInvTransferPickedLotserial $invTransferPickedLotserial)
    {
        if ($this->getInvTransferPickedLotserials()->contains($invTransferPickedLotserial)) {
            $pos = $this->collInvTransferPickedLotserials->search($invTransferPickedLotserial);
            $this->collInvTransferPickedLotserials->remove($pos);
            if (null === $this->invTransferPickedLotserialsScheduledForDeletion) {
                $this->invTransferPickedLotserialsScheduledForDeletion = clone $this->collInvTransferPickedLotserials;
                $this->invTransferPickedLotserialsScheduledForDeletion->clear();
            }
            $this->invTransferPickedLotserialsScheduledForDeletion[]= clone $invTransferPickedLotserial;
            $invTransferPickedLotserial->setInvTransferDetail(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferDetail is new, it will return
     * an empty collection; or if this InvTransferDetail has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferDetail is new, it will return
     * an empty collection; or if this InvTransferDetail has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferDetail is new, it will return
     * an empty collection; or if this InvTransferDetail has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this InvTransferDetail is new, it will return
     * an empty collection; or if this InvTransferDetail has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in InvTransferDetail.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aInvTransferOrder) {
            $this->aInvTransferOrder->removeInvTransferDetail($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeInvTransferDetail($this);
        }
        $this->inhdnbr = null;
        $this->indtline = null;
        $this->inititemnbr = null;
        $this->indtqtyrqst = null;
        $this->indtqtyship = null;
        $this->indtrqstdate = null;
        $this->indtshipdate = null;
        $this->indtpickflag = null;
        $this->indtbordflag = null;
        $this->indtqtyprev = null;
        $this->indtqtyrcvd = null;
        $this->indttobercvd = null;
        $this->indtrcptdate = null;
        $this->indtsonbr = null;
        $this->indtkitflag = null;
        $this->indtuseitemnbr = null;
        $this->indtcustitemnbr = null;
        $this->indtcntrqty = null;
        $this->indtcases = null;
        $this->indtorigrqstdate = null;
        $this->indtordras = null;
        $this->indtfreshfrozen = null;
        $this->indtprimbin = null;
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
            if ($this->collInvTransferLotserials) {
                foreach ($this->collInvTransferLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferPickedLotserials) {
                foreach ($this->collInvTransferPickedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collInvTransferLotserials = null;
        $this->collInvTransferPickedLotserials = null;
        $this->aInvTransferOrder = null;
        $this->aItemMasterItem = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InvTransferDetailTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preSave')) {
        //     // return parent::preSave($con);
        // }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postSave')) {
        //     // parent::postSave($con);
        // }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preInsert')) {
        //     // return parent::preInsert($con);
        // }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postInsert')) {
        //     // parent::postInsert($con);
        // }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preUpdate')) {
        //     // return parent::preUpdate($con);
        // }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postUpdate')) {
        //     // parent::postUpdate($con);
        // }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::preDelete')) {
        //     // return parent::preDelete($con);
        // }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        // if (is_callable('parent::postDelete')) {
        //     // parent::postDelete($con);
        // }
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
