<?php

namespace Base;

use \SalesHistoryNotesQuery as ChildSalesHistoryNotesQuery;
use \Exception;
use \PDO;
use Map\SalesHistoryNotesTableMap;
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
 * Base class that represents a row from the 'notes_sh_head_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SalesHistoryNotes implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SalesHistoryNotesTableMap';


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
     * The value for the shnttype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $shnttype;

    /**
     * The value for the shnttypedesc field.
     *
     * @var        string
     */
    protected $shnttypedesc;

    /**
     * The value for the oehhnbr field.
     *
     * @var        string
     */
    protected $oehhnbr;

    /**
     * The value for the shntyear field.
     *
     * @var        string
     */
    protected $shntyear;

    /**
     * The value for the oedhline field.
     *
     * @var        int
     */
    protected $oedhline;

    /**
     * The value for the shntlotser field.
     *
     * @var        string
     */
    protected $shntlotser;

    /**
     * The value for the shntpickticket field.
     *
     * @var        string
     */
    protected $shntpickticket;

    /**
     * The value for the shntpackticket field.
     *
     * @var        string
     */
    protected $shntpackticket;

    /**
     * The value for the shntinvoice field.
     *
     * @var        string
     */
    protected $shntinvoice;

    /**
     * The value for the shntacknow field.
     *
     * @var        string
     */
    protected $shntacknow;

    /**
     * The value for the shntseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $shntseq;

    /**
     * The value for the shntnote field.
     *
     * @var        string
     */
    protected $shntnote;

    /**
     * The value for the shntkey2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $shntkey2;

    /**
     * The value for the shntform field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $shntform;

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
        $this->shnttype = '';
        $this->shntseq = 0;
        $this->shntkey2 = '';
        $this->shntform = '';
    }

    /**
     * Initializes internal state of Base\SalesHistoryNotes object.
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
     * Compares this with another <code>SalesHistoryNotes</code> instance.  If
     * <code>obj</code> is an instance of <code>SalesHistoryNotes</code>, delegates to
     * <code>equals(SalesHistoryNotes)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SalesHistoryNotes The current object, for fluid interface
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
     * Get the [shnttype] column value.
     *
     * @return string
     */
    public function getShnttype()
    {
        return $this->shnttype;
    }

    /**
     * Get the [shnttypedesc] column value.
     *
     * @return string
     */
    public function getShnttypedesc()
    {
        return $this->shnttypedesc;
    }

    /**
     * Get the [oehhnbr] column value.
     *
     * @return string
     */
    public function getOehhnbr()
    {
        return $this->oehhnbr;
    }

    /**
     * Get the [shntyear] column value.
     *
     * @return string
     */
    public function getShntyear()
    {
        return $this->shntyear;
    }

    /**
     * Get the [oedhline] column value.
     *
     * @return int
     */
    public function getOedhline()
    {
        return $this->oedhline;
    }

    /**
     * Get the [shntlotser] column value.
     *
     * @return string
     */
    public function getShntlotser()
    {
        return $this->shntlotser;
    }

    /**
     * Get the [shntpickticket] column value.
     *
     * @return string
     */
    public function getShntpickticket()
    {
        return $this->shntpickticket;
    }

    /**
     * Get the [shntpackticket] column value.
     *
     * @return string
     */
    public function getShntpackticket()
    {
        return $this->shntpackticket;
    }

    /**
     * Get the [shntinvoice] column value.
     *
     * @return string
     */
    public function getShntinvoice()
    {
        return $this->shntinvoice;
    }

    /**
     * Get the [shntacknow] column value.
     *
     * @return string
     */
    public function getShntacknow()
    {
        return $this->shntacknow;
    }

    /**
     * Get the [shntseq] column value.
     *
     * @return int
     */
    public function getShntseq()
    {
        return $this->shntseq;
    }

    /**
     * Get the [shntnote] column value.
     *
     * @return string
     */
    public function getShntnote()
    {
        return $this->shntnote;
    }

    /**
     * Get the [shntkey2] column value.
     *
     * @return string
     */
    public function getShntkey2()
    {
        return $this->shntkey2;
    }

    /**
     * Get the [shntform] column value.
     *
     * @return string
     */
    public function getShntform()
    {
        return $this->shntform;
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
     * Set the value of [shnttype] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShnttype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shnttype !== $v) {
            $this->shnttype = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTTYPE] = true;
        }

        return $this;
    } // setShnttype()

    /**
     * Set the value of [shnttypedesc] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShnttypedesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shnttypedesc !== $v) {
            $this->shnttypedesc = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTTYPEDESC] = true;
        }

        return $this;
    } // setShnttypedesc()

    /**
     * Set the value of [oehhnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setOehhnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhnbr !== $v) {
            $this->oehhnbr = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_OEHHNBR] = true;
        }

        return $this;
    } // setOehhnbr()

    /**
     * Set the value of [shntyear] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntyear($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntyear !== $v) {
            $this->shntyear = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTYEAR] = true;
        }

        return $this;
    } // setShntyear()

    /**
     * Set the value of [oedhline] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setOedhline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhline !== $v) {
            $this->oedhline = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_OEDHLINE] = true;
        }

        return $this;
    } // setOedhline()

    /**
     * Set the value of [shntlotser] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntlotser !== $v) {
            $this->shntlotser = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTLOTSER] = true;
        }

        return $this;
    } // setShntlotser()

    /**
     * Set the value of [shntpickticket] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntpickticket($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntpickticket !== $v) {
            $this->shntpickticket = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTPICKTICKET] = true;
        }

        return $this;
    } // setShntpickticket()

    /**
     * Set the value of [shntpackticket] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntpackticket($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntpackticket !== $v) {
            $this->shntpackticket = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTPACKTICKET] = true;
        }

        return $this;
    } // setShntpackticket()

    /**
     * Set the value of [shntinvoice] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntinvoice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntinvoice !== $v) {
            $this->shntinvoice = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTINVOICE] = true;
        }

        return $this;
    } // setShntinvoice()

    /**
     * Set the value of [shntacknow] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntacknow($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntacknow !== $v) {
            $this->shntacknow = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTACKNOW] = true;
        }

        return $this;
    } // setShntacknow()

    /**
     * Set the value of [shntseq] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->shntseq !== $v) {
            $this->shntseq = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTSEQ] = true;
        }

        return $this;
    } // setShntseq()

    /**
     * Set the value of [shntnote] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntnote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntnote !== $v) {
            $this->shntnote = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTNOTE] = true;
        }

        return $this;
    } // setShntnote()

    /**
     * Set the value of [shntkey2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntkey2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntkey2 !== $v) {
            $this->shntkey2 = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTKEY2] = true;
        }

        return $this;
    } // setShntkey2()

    /**
     * Set the value of [shntform] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setShntform($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shntform !== $v) {
            $this->shntform = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_SHNTFORM] = true;
        }

        return $this;
    } // setShntform()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryNotes The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SalesHistoryNotesTableMap::COL_DUMMY] = true;
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
            if ($this->shnttype !== '') {
                return false;
            }

            if ($this->shntseq !== 0) {
                return false;
            }

            if ($this->shntkey2 !== '') {
                return false;
            }

            if ($this->shntform !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shnttype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shnttype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shnttypedesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shnttypedesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntyear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntyear = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntpickticket', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntpickticket = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntpackticket', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntpackticket = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntinvoice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntinvoice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntacknow', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntacknow = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntnote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntnote = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntkey2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntkey2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Shntform', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shntform = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SalesHistoryNotesTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = SalesHistoryNotesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SalesHistoryNotes'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SalesHistoryNotesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSalesHistoryNotesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see SalesHistoryNotes::setDeleted()
     * @see SalesHistoryNotes::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryNotesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSalesHistoryNotesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryNotesTableMap::DATABASE_NAME);
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
                SalesHistoryNotesTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'ShntType';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTTYPEDESC)) {
            $modifiedColumns[':p' . $index++]  = 'ShntTypeDesc';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_OEHHNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhNbr';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTYEAR)) {
            $modifiedColumns[':p' . $index++]  = 'ShntYear';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_OEDHLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLine';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'ShntLotSer';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTPICKTICKET)) {
            $modifiedColumns[':p' . $index++]  = 'ShntPickTicket';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTPACKTICKET)) {
            $modifiedColumns[':p' . $index++]  = 'ShntPackTicket';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTINVOICE)) {
            $modifiedColumns[':p' . $index++]  = 'ShntInvoice';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTACKNOW)) {
            $modifiedColumns[':p' . $index++]  = 'ShntAcknow';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ShntSeq';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTNOTE)) {
            $modifiedColumns[':p' . $index++]  = 'ShntNote';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTKEY2)) {
            $modifiedColumns[':p' . $index++]  = 'ShntKey2';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTFORM)) {
            $modifiedColumns[':p' . $index++]  = 'ShntForm';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO notes_sh_head_det (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ShntType':
                        $stmt->bindValue($identifier, $this->shnttype, PDO::PARAM_STR);
                        break;
                    case 'ShntTypeDesc':
                        $stmt->bindValue($identifier, $this->shnttypedesc, PDO::PARAM_STR);
                        break;
                    case 'OehhNbr':
                        $stmt->bindValue($identifier, $this->oehhnbr, PDO::PARAM_STR);
                        break;
                    case 'ShntYear':
                        $stmt->bindValue($identifier, $this->shntyear, PDO::PARAM_STR);
                        break;
                    case 'OedhLine':
                        $stmt->bindValue($identifier, $this->oedhline, PDO::PARAM_INT);
                        break;
                    case 'ShntLotSer':
                        $stmt->bindValue($identifier, $this->shntlotser, PDO::PARAM_STR);
                        break;
                    case 'ShntPickTicket':
                        $stmt->bindValue($identifier, $this->shntpickticket, PDO::PARAM_STR);
                        break;
                    case 'ShntPackTicket':
                        $stmt->bindValue($identifier, $this->shntpackticket, PDO::PARAM_STR);
                        break;
                    case 'ShntInvoice':
                        $stmt->bindValue($identifier, $this->shntinvoice, PDO::PARAM_STR);
                        break;
                    case 'ShntAcknow':
                        $stmt->bindValue($identifier, $this->shntacknow, PDO::PARAM_STR);
                        break;
                    case 'ShntSeq':
                        $stmt->bindValue($identifier, $this->shntseq, PDO::PARAM_INT);
                        break;
                    case 'ShntNote':
                        $stmt->bindValue($identifier, $this->shntnote, PDO::PARAM_STR);
                        break;
                    case 'ShntKey2':
                        $stmt->bindValue($identifier, $this->shntkey2, PDO::PARAM_STR);
                        break;
                    case 'ShntForm':
                        $stmt->bindValue($identifier, $this->shntform, PDO::PARAM_STR);
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
        $pos = SalesHistoryNotesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getShnttype();
                break;
            case 1:
                return $this->getShnttypedesc();
                break;
            case 2:
                return $this->getOehhnbr();
                break;
            case 3:
                return $this->getShntyear();
                break;
            case 4:
                return $this->getOedhline();
                break;
            case 5:
                return $this->getShntlotser();
                break;
            case 6:
                return $this->getShntpickticket();
                break;
            case 7:
                return $this->getShntpackticket();
                break;
            case 8:
                return $this->getShntinvoice();
                break;
            case 9:
                return $this->getShntacknow();
                break;
            case 10:
                return $this->getShntseq();
                break;
            case 11:
                return $this->getShntnote();
                break;
            case 12:
                return $this->getShntkey2();
                break;
            case 13:
                return $this->getShntform();
                break;
            case 14:
                return $this->getDateupdtd();
                break;
            case 15:
                return $this->getTimeupdtd();
                break;
            case 16:
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

        if (isset($alreadyDumpedObjects['SalesHistoryNotes'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesHistoryNotes'][$this->hashCode()] = true;
        $keys = SalesHistoryNotesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getShnttype(),
            $keys[1] => $this->getShnttypedesc(),
            $keys[2] => $this->getOehhnbr(),
            $keys[3] => $this->getShntyear(),
            $keys[4] => $this->getOedhline(),
            $keys[5] => $this->getShntlotser(),
            $keys[6] => $this->getShntpickticket(),
            $keys[7] => $this->getShntpackticket(),
            $keys[8] => $this->getShntinvoice(),
            $keys[9] => $this->getShntacknow(),
            $keys[10] => $this->getShntseq(),
            $keys[11] => $this->getShntnote(),
            $keys[12] => $this->getShntkey2(),
            $keys[13] => $this->getShntform(),
            $keys[14] => $this->getDateupdtd(),
            $keys[15] => $this->getTimeupdtd(),
            $keys[16] => $this->getDummy(),
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
     * @return $this|\SalesHistoryNotes
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SalesHistoryNotesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SalesHistoryNotes
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setShnttype($value);
                break;
            case 1:
                $this->setShnttypedesc($value);
                break;
            case 2:
                $this->setOehhnbr($value);
                break;
            case 3:
                $this->setShntyear($value);
                break;
            case 4:
                $this->setOedhline($value);
                break;
            case 5:
                $this->setShntlotser($value);
                break;
            case 6:
                $this->setShntpickticket($value);
                break;
            case 7:
                $this->setShntpackticket($value);
                break;
            case 8:
                $this->setShntinvoice($value);
                break;
            case 9:
                $this->setShntacknow($value);
                break;
            case 10:
                $this->setShntseq($value);
                break;
            case 11:
                $this->setShntnote($value);
                break;
            case 12:
                $this->setShntkey2($value);
                break;
            case 13:
                $this->setShntform($value);
                break;
            case 14:
                $this->setDateupdtd($value);
                break;
            case 15:
                $this->setTimeupdtd($value);
                break;
            case 16:
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
        $keys = SalesHistoryNotesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setShnttype($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setShnttypedesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOehhnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setShntyear($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOedhline($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setShntlotser($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setShntpickticket($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setShntpackticket($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setShntinvoice($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setShntacknow($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setShntseq($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setShntnote($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setShntkey2($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setShntform($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setDateupdtd($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setTimeupdtd($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDummy($arr[$keys[16]]);
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
     * @return $this|\SalesHistoryNotes The current object, for fluid interface
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
        $criteria = new Criteria(SalesHistoryNotesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTTYPE)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTTYPE, $this->shnttype);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTTYPEDESC)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTTYPEDESC, $this->shnttypedesc);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_OEHHNBR)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_OEHHNBR, $this->oehhnbr);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTYEAR)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTYEAR, $this->shntyear);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_OEDHLINE)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_OEDHLINE, $this->oedhline);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTLOTSER)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTLOTSER, $this->shntlotser);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTPICKTICKET)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTPICKTICKET, $this->shntpickticket);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTPACKTICKET)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTPACKTICKET, $this->shntpackticket);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTINVOICE)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTINVOICE, $this->shntinvoice);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTACKNOW)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTACKNOW, $this->shntacknow);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTSEQ)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTSEQ, $this->shntseq);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTNOTE)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTNOTE, $this->shntnote);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTKEY2)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTKEY2, $this->shntkey2);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_SHNTFORM)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_SHNTFORM, $this->shntform);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_DATEUPDTD)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SalesHistoryNotesTableMap::COL_DUMMY)) {
            $criteria->add(SalesHistoryNotesTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSalesHistoryNotesQuery::create();
        $criteria->add(SalesHistoryNotesTableMap::COL_SHNTTYPE, $this->shnttype);
        $criteria->add(SalesHistoryNotesTableMap::COL_SHNTSEQ, $this->shntseq);
        $criteria->add(SalesHistoryNotesTableMap::COL_SHNTKEY2, $this->shntkey2);
        $criteria->add(SalesHistoryNotesTableMap::COL_SHNTFORM, $this->shntform);

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
        $validPk = null !== $this->getShnttype() &&
            null !== $this->getShntseq() &&
            null !== $this->getShntkey2() &&
            null !== $this->getShntform();

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
        $pks[0] = $this->getShnttype();
        $pks[1] = $this->getShntseq();
        $pks[2] = $this->getShntkey2();
        $pks[3] = $this->getShntform();

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
        $this->setShnttype($keys[0]);
        $this->setShntseq($keys[1]);
        $this->setShntkey2($keys[2]);
        $this->setShntform($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getShnttype()) && (null === $this->getShntseq()) && (null === $this->getShntkey2()) && (null === $this->getShntform());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SalesHistoryNotes (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setShnttype($this->getShnttype());
        $copyObj->setShnttypedesc($this->getShnttypedesc());
        $copyObj->setOehhnbr($this->getOehhnbr());
        $copyObj->setShntyear($this->getShntyear());
        $copyObj->setOedhline($this->getOedhline());
        $copyObj->setShntlotser($this->getShntlotser());
        $copyObj->setShntpickticket($this->getShntpickticket());
        $copyObj->setShntpackticket($this->getShntpackticket());
        $copyObj->setShntinvoice($this->getShntinvoice());
        $copyObj->setShntacknow($this->getShntacknow());
        $copyObj->setShntseq($this->getShntseq());
        $copyObj->setShntnote($this->getShntnote());
        $copyObj->setShntkey2($this->getShntkey2());
        $copyObj->setShntform($this->getShntform());
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
     * @return \SalesHistoryNotes Clone of current object.
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
        $this->shnttype = null;
        $this->shnttypedesc = null;
        $this->oehhnbr = null;
        $this->shntyear = null;
        $this->oedhline = null;
        $this->shntlotser = null;
        $this->shntpickticket = null;
        $this->shntpackticket = null;
        $this->shntinvoice = null;
        $this->shntacknow = null;
        $this->shntseq = null;
        $this->shntnote = null;
        $this->shntkey2 = null;
        $this->shntform = null;
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
        return (string) $this->exportTo(SalesHistoryNotesTableMap::DEFAULT_STRING_FORMAT);
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
