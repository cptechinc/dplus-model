<?php

namespace Base;

use \QuoteNotesQuery as ChildQuoteNotesQuery;
use \Exception;
use \PDO;
use Map\QuoteNotesTableMap;
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
 * Base class that represents a row from the 'notes_qt_head_det' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class QuoteNotes implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\QuoteNotesTableMap';


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
     * The value for the qntype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qntype;

    /**
     * The value for the qntypedesc field.
     *
     * @var        string
     */
    protected $qntypedesc;

    /**
     * The value for the qthdid field.
     *
     * @var        string
     */
    protected $qthdid;

    /**
     * The value for the qtdtline field.
     *
     * @var        int
     */
    protected $qtdtline;

    /**
     * The value for the qnquotquote field.
     *
     * @var        string
     */
    protected $qnquotquote;

    /**
     * The value for the qnquotpickticket field.
     *
     * @var        string
     */
    protected $qnquotpickticket;

    /**
     * The value for the qnquotpackticket field.
     *
     * @var        string
     */
    protected $qnquotpackticket;

    /**
     * The value for the qnquotinvoice field.
     *
     * @var        string
     */
    protected $qnquotinvoice;

    /**
     * The value for the qnquotacknow field.
     *
     * @var        string
     */
    protected $qnquotacknow;

    /**
     * The value for the qnseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $qnseq;

    /**
     * The value for the qnnote field.
     *
     * @var        string
     */
    protected $qnnote;

    /**
     * The value for the qnkey2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qnkey2;

    /**
     * The value for the qnform field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qnform;

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
        $this->qntype = '';
        $this->qnseq = 0;
        $this->qnkey2 = '';
        $this->qnform = '';
    }

    /**
     * Initializes internal state of Base\QuoteNotes object.
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
     * Compares this with another <code>QuoteNotes</code> instance.  If
     * <code>obj</code> is an instance of <code>QuoteNotes</code>, delegates to
     * <code>equals(QuoteNotes)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|QuoteNotes The current object, for fluid interface
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
     * Get the [qntype] column value.
     *
     * @return string
     */
    public function getQntype()
    {
        return $this->qntype;
    }

    /**
     * Get the [qntypedesc] column value.
     *
     * @return string
     */
    public function getQntypedesc()
    {
        return $this->qntypedesc;
    }

    /**
     * Get the [qthdid] column value.
     *
     * @return string
     */
    public function getQthdid()
    {
        return $this->qthdid;
    }

    /**
     * Get the [qtdtline] column value.
     *
     * @return int
     */
    public function getQtdtline()
    {
        return $this->qtdtline;
    }

    /**
     * Get the [qnquotquote] column value.
     *
     * @return string
     */
    public function getQnquotquote()
    {
        return $this->qnquotquote;
    }

    /**
     * Get the [qnquotpickticket] column value.
     *
     * @return string
     */
    public function getQnquotpickticket()
    {
        return $this->qnquotpickticket;
    }

    /**
     * Get the [qnquotpackticket] column value.
     *
     * @return string
     */
    public function getQnquotpackticket()
    {
        return $this->qnquotpackticket;
    }

    /**
     * Get the [qnquotinvoice] column value.
     *
     * @return string
     */
    public function getQnquotinvoice()
    {
        return $this->qnquotinvoice;
    }

    /**
     * Get the [qnquotacknow] column value.
     *
     * @return string
     */
    public function getQnquotacknow()
    {
        return $this->qnquotacknow;
    }

    /**
     * Get the [qnseq] column value.
     *
     * @return int
     */
    public function getQnseq()
    {
        return $this->qnseq;
    }

    /**
     * Get the [qnnote] column value.
     *
     * @return string
     */
    public function getQnnote()
    {
        return $this->qnnote;
    }

    /**
     * Get the [qnkey2] column value.
     *
     * @return string
     */
    public function getQnkey2()
    {
        return $this->qnkey2;
    }

    /**
     * Get the [qnform] column value.
     *
     * @return string
     */
    public function getQnform()
    {
        return $this->qnform;
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
     * Set the value of [qntype] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQntype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qntype !== $v) {
            $this->qntype = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNTYPE] = true;
        }

        return $this;
    } // setQntype()

    /**
     * Set the value of [qntypedesc] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQntypedesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qntypedesc !== $v) {
            $this->qntypedesc = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNTYPEDESC] = true;
        }

        return $this;
    } // setQntypedesc()

    /**
     * Set the value of [qthdid] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQthdid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdid !== $v) {
            $this->qthdid = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QTHDID] = true;
        }

        return $this;
    } // setQthdid()

    /**
     * Set the value of [qtdtline] column.
     *
     * @param int $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQtdtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtline !== $v) {
            $this->qtdtline = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QTDTLINE] = true;
        }

        return $this;
    } // setQtdtline()

    /**
     * Set the value of [qnquotquote] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnquotquote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qnquotquote !== $v) {
            $this->qnquotquote = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNQUOTQUOTE] = true;
        }

        return $this;
    } // setQnquotquote()

    /**
     * Set the value of [qnquotpickticket] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnquotpickticket($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qnquotpickticket !== $v) {
            $this->qnquotpickticket = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNQUOTPICKTICKET] = true;
        }

        return $this;
    } // setQnquotpickticket()

    /**
     * Set the value of [qnquotpackticket] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnquotpackticket($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qnquotpackticket !== $v) {
            $this->qnquotpackticket = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNQUOTPACKTICKET] = true;
        }

        return $this;
    } // setQnquotpackticket()

    /**
     * Set the value of [qnquotinvoice] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnquotinvoice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qnquotinvoice !== $v) {
            $this->qnquotinvoice = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNQUOTINVOICE] = true;
        }

        return $this;
    } // setQnquotinvoice()

    /**
     * Set the value of [qnquotacknow] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnquotacknow($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qnquotacknow !== $v) {
            $this->qnquotacknow = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNQUOTACKNOW] = true;
        }

        return $this;
    } // setQnquotacknow()

    /**
     * Set the value of [qnseq] column.
     *
     * @param int $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qnseq !== $v) {
            $this->qnseq = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNSEQ] = true;
        }

        return $this;
    } // setQnseq()

    /**
     * Set the value of [qnnote] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnnote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qnnote !== $v) {
            $this->qnnote = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNNOTE] = true;
        }

        return $this;
    } // setQnnote()

    /**
     * Set the value of [qnkey2] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnkey2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qnkey2 !== $v) {
            $this->qnkey2 = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNKEY2] = true;
        }

        return $this;
    } // setQnkey2()

    /**
     * Set the value of [qnform] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setQnform($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qnform !== $v) {
            $this->qnform = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_QNFORM] = true;
        }

        return $this;
    } // setQnform()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\QuoteNotes The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[QuoteNotesTableMap::COL_DUMMY] = true;
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
            if ($this->qntype !== '') {
                return false;
            }

            if ($this->qnseq !== 0) {
                return false;
            }

            if ($this->qnkey2 !== '') {
                return false;
            }

            if ($this->qnform !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : QuoteNotesTableMap::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qntype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : QuoteNotesTableMap::translateFieldName('Qntypedesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qntypedesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : QuoteNotesTableMap::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : QuoteNotesTableMap::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : QuoteNotesTableMap::translateFieldName('Qnquotquote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnquotquote = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : QuoteNotesTableMap::translateFieldName('Qnquotpickticket', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnquotpickticket = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : QuoteNotesTableMap::translateFieldName('Qnquotpackticket', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnquotpackticket = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : QuoteNotesTableMap::translateFieldName('Qnquotinvoice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnquotinvoice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : QuoteNotesTableMap::translateFieldName('Qnquotacknow', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnquotacknow = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : QuoteNotesTableMap::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : QuoteNotesTableMap::translateFieldName('Qnnote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnnote = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : QuoteNotesTableMap::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnkey2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : QuoteNotesTableMap::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qnform = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : QuoteNotesTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : QuoteNotesTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : QuoteNotesTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = QuoteNotesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\QuoteNotes'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(QuoteNotesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildQuoteNotesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see QuoteNotes::setDeleted()
     * @see QuoteNotes::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteNotesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildQuoteNotesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteNotesTableMap::DATABASE_NAME);
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
                QuoteNotesTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'QnType';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNTYPEDESC)) {
            $modifiedColumns[':p' . $index++]  = 'QnTypeDesc';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QTHDID)) {
            $modifiedColumns[':p' . $index++]  = 'QthdId';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QTDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtLine';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTQUOTE)) {
            $modifiedColumns[':p' . $index++]  = 'QnQuotQuote';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTPICKTICKET)) {
            $modifiedColumns[':p' . $index++]  = 'QnQuotPickTicket';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTPACKTICKET)) {
            $modifiedColumns[':p' . $index++]  = 'QnQuotPackTicket';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTINVOICE)) {
            $modifiedColumns[':p' . $index++]  = 'QnQuotInvoice';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTACKNOW)) {
            $modifiedColumns[':p' . $index++]  = 'QnQuotAcknow';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'QnSeq';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNNOTE)) {
            $modifiedColumns[':p' . $index++]  = 'QnNote';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNKEY2)) {
            $modifiedColumns[':p' . $index++]  = 'QnKey2';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNFORM)) {
            $modifiedColumns[':p' . $index++]  = 'QnForm';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO notes_qt_head_det (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'QnType':
                        $stmt->bindValue($identifier, $this->qntype, PDO::PARAM_STR);
                        break;
                    case 'QnTypeDesc':
                        $stmt->bindValue($identifier, $this->qntypedesc, PDO::PARAM_STR);
                        break;
                    case 'QthdId':
                        $stmt->bindValue($identifier, $this->qthdid, PDO::PARAM_STR);
                        break;
                    case 'QtdtLine':
                        $stmt->bindValue($identifier, $this->qtdtline, PDO::PARAM_INT);
                        break;
                    case 'QnQuotQuote':
                        $stmt->bindValue($identifier, $this->qnquotquote, PDO::PARAM_STR);
                        break;
                    case 'QnQuotPickTicket':
                        $stmt->bindValue($identifier, $this->qnquotpickticket, PDO::PARAM_STR);
                        break;
                    case 'QnQuotPackTicket':
                        $stmt->bindValue($identifier, $this->qnquotpackticket, PDO::PARAM_STR);
                        break;
                    case 'QnQuotInvoice':
                        $stmt->bindValue($identifier, $this->qnquotinvoice, PDO::PARAM_STR);
                        break;
                    case 'QnQuotAcknow':
                        $stmt->bindValue($identifier, $this->qnquotacknow, PDO::PARAM_STR);
                        break;
                    case 'QnSeq':
                        $stmt->bindValue($identifier, $this->qnseq, PDO::PARAM_INT);
                        break;
                    case 'QnNote':
                        $stmt->bindValue($identifier, $this->qnnote, PDO::PARAM_STR);
                        break;
                    case 'QnKey2':
                        $stmt->bindValue($identifier, $this->qnkey2, PDO::PARAM_STR);
                        break;
                    case 'QnForm':
                        $stmt->bindValue($identifier, $this->qnform, PDO::PARAM_STR);
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
        $pos = QuoteNotesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getQntype();
                break;
            case 1:
                return $this->getQntypedesc();
                break;
            case 2:
                return $this->getQthdid();
                break;
            case 3:
                return $this->getQtdtline();
                break;
            case 4:
                return $this->getQnquotquote();
                break;
            case 5:
                return $this->getQnquotpickticket();
                break;
            case 6:
                return $this->getQnquotpackticket();
                break;
            case 7:
                return $this->getQnquotinvoice();
                break;
            case 8:
                return $this->getQnquotacknow();
                break;
            case 9:
                return $this->getQnseq();
                break;
            case 10:
                return $this->getQnnote();
                break;
            case 11:
                return $this->getQnkey2();
                break;
            case 12:
                return $this->getQnform();
                break;
            case 13:
                return $this->getDateupdtd();
                break;
            case 14:
                return $this->getTimeupdtd();
                break;
            case 15:
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

        if (isset($alreadyDumpedObjects['QuoteNotes'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QuoteNotes'][$this->hashCode()] = true;
        $keys = QuoteNotesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getQntype(),
            $keys[1] => $this->getQntypedesc(),
            $keys[2] => $this->getQthdid(),
            $keys[3] => $this->getQtdtline(),
            $keys[4] => $this->getQnquotquote(),
            $keys[5] => $this->getQnquotpickticket(),
            $keys[6] => $this->getQnquotpackticket(),
            $keys[7] => $this->getQnquotinvoice(),
            $keys[8] => $this->getQnquotacknow(),
            $keys[9] => $this->getQnseq(),
            $keys[10] => $this->getQnnote(),
            $keys[11] => $this->getQnkey2(),
            $keys[12] => $this->getQnform(),
            $keys[13] => $this->getDateupdtd(),
            $keys[14] => $this->getTimeupdtd(),
            $keys[15] => $this->getDummy(),
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
     * @return $this|\QuoteNotes
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = QuoteNotesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\QuoteNotes
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setQntype($value);
                break;
            case 1:
                $this->setQntypedesc($value);
                break;
            case 2:
                $this->setQthdid($value);
                break;
            case 3:
                $this->setQtdtline($value);
                break;
            case 4:
                $this->setQnquotquote($value);
                break;
            case 5:
                $this->setQnquotpickticket($value);
                break;
            case 6:
                $this->setQnquotpackticket($value);
                break;
            case 7:
                $this->setQnquotinvoice($value);
                break;
            case 8:
                $this->setQnquotacknow($value);
                break;
            case 9:
                $this->setQnseq($value);
                break;
            case 10:
                $this->setQnnote($value);
                break;
            case 11:
                $this->setQnkey2($value);
                break;
            case 12:
                $this->setQnform($value);
                break;
            case 13:
                $this->setDateupdtd($value);
                break;
            case 14:
                $this->setTimeupdtd($value);
                break;
            case 15:
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
        $keys = QuoteNotesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setQntype($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setQntypedesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setQthdid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setQtdtline($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setQnquotquote($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setQnquotpickticket($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setQnquotpackticket($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setQnquotinvoice($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setQnquotacknow($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setQnseq($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setQnnote($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setQnkey2($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setQnform($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setDateupdtd($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setTimeupdtd($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setDummy($arr[$keys[15]]);
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
     * @return $this|\QuoteNotes The current object, for fluid interface
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
        $criteria = new Criteria(QuoteNotesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNTYPE)) {
            $criteria->add(QuoteNotesTableMap::COL_QNTYPE, $this->qntype);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNTYPEDESC)) {
            $criteria->add(QuoteNotesTableMap::COL_QNTYPEDESC, $this->qntypedesc);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QTHDID)) {
            $criteria->add(QuoteNotesTableMap::COL_QTHDID, $this->qthdid);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QTDTLINE)) {
            $criteria->add(QuoteNotesTableMap::COL_QTDTLINE, $this->qtdtline);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTQUOTE)) {
            $criteria->add(QuoteNotesTableMap::COL_QNQUOTQUOTE, $this->qnquotquote);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTPICKTICKET)) {
            $criteria->add(QuoteNotesTableMap::COL_QNQUOTPICKTICKET, $this->qnquotpickticket);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTPACKTICKET)) {
            $criteria->add(QuoteNotesTableMap::COL_QNQUOTPACKTICKET, $this->qnquotpackticket);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTINVOICE)) {
            $criteria->add(QuoteNotesTableMap::COL_QNQUOTINVOICE, $this->qnquotinvoice);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNQUOTACKNOW)) {
            $criteria->add(QuoteNotesTableMap::COL_QNQUOTACKNOW, $this->qnquotacknow);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNSEQ)) {
            $criteria->add(QuoteNotesTableMap::COL_QNSEQ, $this->qnseq);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNNOTE)) {
            $criteria->add(QuoteNotesTableMap::COL_QNNOTE, $this->qnnote);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNKEY2)) {
            $criteria->add(QuoteNotesTableMap::COL_QNKEY2, $this->qnkey2);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_QNFORM)) {
            $criteria->add(QuoteNotesTableMap::COL_QNFORM, $this->qnform);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_DATEUPDTD)) {
            $criteria->add(QuoteNotesTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_TIMEUPDTD)) {
            $criteria->add(QuoteNotesTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(QuoteNotesTableMap::COL_DUMMY)) {
            $criteria->add(QuoteNotesTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildQuoteNotesQuery::create();
        $criteria->add(QuoteNotesTableMap::COL_QNTYPE, $this->qntype);
        $criteria->add(QuoteNotesTableMap::COL_QNSEQ, $this->qnseq);
        $criteria->add(QuoteNotesTableMap::COL_QNKEY2, $this->qnkey2);
        $criteria->add(QuoteNotesTableMap::COL_QNFORM, $this->qnform);

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
        $validPk = null !== $this->getQntype() &&
            null !== $this->getQnseq() &&
            null !== $this->getQnkey2() &&
            null !== $this->getQnform();

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
        $pks[0] = $this->getQntype();
        $pks[1] = $this->getQnseq();
        $pks[2] = $this->getQnkey2();
        $pks[3] = $this->getQnform();

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
        $this->setQntype($keys[0]);
        $this->setQnseq($keys[1]);
        $this->setQnkey2($keys[2]);
        $this->setQnform($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getQntype()) && (null === $this->getQnseq()) && (null === $this->getQnkey2()) && (null === $this->getQnform());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \QuoteNotes (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setQntype($this->getQntype());
        $copyObj->setQntypedesc($this->getQntypedesc());
        $copyObj->setQthdid($this->getQthdid());
        $copyObj->setQtdtline($this->getQtdtline());
        $copyObj->setQnquotquote($this->getQnquotquote());
        $copyObj->setQnquotpickticket($this->getQnquotpickticket());
        $copyObj->setQnquotpackticket($this->getQnquotpackticket());
        $copyObj->setQnquotinvoice($this->getQnquotinvoice());
        $copyObj->setQnquotacknow($this->getQnquotacknow());
        $copyObj->setQnseq($this->getQnseq());
        $copyObj->setQnnote($this->getQnnote());
        $copyObj->setQnkey2($this->getQnkey2());
        $copyObj->setQnform($this->getQnform());
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
     * @return \QuoteNotes Clone of current object.
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
        $this->qntype = null;
        $this->qntypedesc = null;
        $this->qthdid = null;
        $this->qtdtline = null;
        $this->qnquotquote = null;
        $this->qnquotpickticket = null;
        $this->qnquotpackticket = null;
        $this->qnquotinvoice = null;
        $this->qnquotacknow = null;
        $this->qnseq = null;
        $this->qnnote = null;
        $this->qnkey2 = null;
        $this->qnform = null;
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
        return (string) $this->exportTo(QuoteNotesTableMap::DEFAULT_STRING_FORMAT);
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
