<?php

namespace Base;

use \ConfigQtQuery as ChildConfigQtQuery;
use \Exception;
use \PDO;
use Map\ConfigQtTableMap;
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
 * Base class that represents a row from the 'qt_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigQt implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigQtTableMap';


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
     * The value for the qttbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $qttbconfkey;

    /**
     * The value for the qttbconfautogen field.
     *
     * @var        string
     */
    protected $qttbconfautogen;

    /**
     * The value for the qttbconfvendline field.
     *
     * @var        int
     */
    protected $qttbconfvendline;

    /**
     * The value for the qttbconfvendcols field.
     *
     * @var        int
     */
    protected $qttbconfvendcols;

    /**
     * The value for the qttbconfexpdays field.
     *
     * @var        int
     */
    protected $qttbconfexpdays;

    /**
     * The value for the qttbconfpricwind field.
     *
     * @var        string
     */
    protected $qttbconfpricwind;

    /**
     * The value for the qttbconfdispnotes field.
     *
     * @var        string
     */
    protected $qttbconfdispnotes;

    /**
     * The value for the qttbconfheadgetdef field.
     *
     * @var        int
     */
    protected $qttbconfheadgetdef;

    /**
     * The value for the qttbconfshowmarg field.
     *
     * @var        string
     */
    protected $qttbconfshowmarg;

    /**
     * The value for the qttbconfshowsp field.
     *
     * @var        string
     */
    protected $qttbconfshowsp;

    /**
     * The value for the qttbconfloadpric field.
     *
     * @var        string
     */
    protected $qttbconfloadpric;

    /**
     * The value for the qttbconfpricfromqty field.
     *
     * @var        string
     */
    protected $qttbconfpricfromqty;

    /**
     * The value for the qttbconfloadcost field.
     *
     * @var        string
     */
    protected $qttbconfloadcost;

    /**
     * The value for the qttbconfdfltcontactinfo field.
     *
     * @var        string
     */
    protected $qttbconfdfltcontactinfo;

    /**
     * The value for the qttbconfenteruom field.
     *
     * @var        string
     */
    protected $qttbconfenteruom;

    /**
     * The value for the qttbconfreviewdays field.
     *
     * @var        int
     */
    protected $qttbconfreviewdays;

    /**
     * The value for the qttbconfcrteslsordr field.
     *
     * @var        string
     */
    protected $qttbconfcrteslsordr;

    /**
     * The value for the qttbconfcrteqtyzero field.
     *
     * @var        string
     */
    protected $qttbconfcrteqtyzero;

    /**
     * The value for the qttbconfautononstock field.
     *
     * @var        string
     */
    protected $qttbconfautononstock;

    /**
     * The value for the qttbconfmarkupmargin field.
     *
     * @var        string
     */
    protected $qttbconfmarkupmargin;

    /**
     * The value for the qttbconfuseqtybrks field.
     *
     * @var        string
     */
    protected $qttbconfuseqtybrks;

    /**
     * The value for the qttbconfwghtentercalc field.
     *
     * @var        string
     */
    protected $qttbconfwghtentercalc;

    /**
     * The value for the qttbconfdefquot field.
     *
     * @var        string
     */
    protected $qttbconfdefquot;

    /**
     * The value for the qttbconfdefpick field.
     *
     * @var        string
     */
    protected $qttbconfdefpick;

    /**
     * The value for the qttbconfdefpack field.
     *
     * @var        string
     */
    protected $qttbconfdefpack;

    /**
     * The value for the qttbconfdefinvc field.
     *
     * @var        string
     */
    protected $qttbconfdefinvc;

    /**
     * The value for the qttbconfdefack field.
     *
     * @var        string
     */
    protected $qttbconfdefack;

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
        $this->qttbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigQt object.
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
     * Compares this with another <code>ConfigQt</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigQt</code>, delegates to
     * <code>equals(ConfigQt)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigQt The current object, for fluid interface
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
     * Get the [qttbconfkey] column value.
     *
     * @return int
     */
    public function getQttbconfkey()
    {
        return $this->qttbconfkey;
    }

    /**
     * Get the [qttbconfautogen] column value.
     *
     * @return string
     */
    public function getQttbconfautogen()
    {
        return $this->qttbconfautogen;
    }

    /**
     * Get the [qttbconfvendline] column value.
     *
     * @return int
     */
    public function getQttbconfvendline()
    {
        return $this->qttbconfvendline;
    }

    /**
     * Get the [qttbconfvendcols] column value.
     *
     * @return int
     */
    public function getQttbconfvendcols()
    {
        return $this->qttbconfvendcols;
    }

    /**
     * Get the [qttbconfexpdays] column value.
     *
     * @return int
     */
    public function getQttbconfexpdays()
    {
        return $this->qttbconfexpdays;
    }

    /**
     * Get the [qttbconfpricwind] column value.
     *
     * @return string
     */
    public function getQttbconfpricwind()
    {
        return $this->qttbconfpricwind;
    }

    /**
     * Get the [qttbconfdispnotes] column value.
     *
     * @return string
     */
    public function getQttbconfdispnotes()
    {
        return $this->qttbconfdispnotes;
    }

    /**
     * Get the [qttbconfheadgetdef] column value.
     *
     * @return int
     */
    public function getQttbconfheadgetdef()
    {
        return $this->qttbconfheadgetdef;
    }

    /**
     * Get the [qttbconfshowmarg] column value.
     *
     * @return string
     */
    public function getQttbconfshowmarg()
    {
        return $this->qttbconfshowmarg;
    }

    /**
     * Get the [qttbconfshowsp] column value.
     *
     * @return string
     */
    public function getQttbconfshowsp()
    {
        return $this->qttbconfshowsp;
    }

    /**
     * Get the [qttbconfloadpric] column value.
     *
     * @return string
     */
    public function getQttbconfloadpric()
    {
        return $this->qttbconfloadpric;
    }

    /**
     * Get the [qttbconfpricfromqty] column value.
     *
     * @return string
     */
    public function getQttbconfpricfromqty()
    {
        return $this->qttbconfpricfromqty;
    }

    /**
     * Get the [qttbconfloadcost] column value.
     *
     * @return string
     */
    public function getQttbconfloadcost()
    {
        return $this->qttbconfloadcost;
    }

    /**
     * Get the [qttbconfdfltcontactinfo] column value.
     *
     * @return string
     */
    public function getQttbconfdfltcontactinfo()
    {
        return $this->qttbconfdfltcontactinfo;
    }

    /**
     * Get the [qttbconfenteruom] column value.
     *
     * @return string
     */
    public function getQttbconfenteruom()
    {
        return $this->qttbconfenteruom;
    }

    /**
     * Get the [qttbconfreviewdays] column value.
     *
     * @return int
     */
    public function getQttbconfreviewdays()
    {
        return $this->qttbconfreviewdays;
    }

    /**
     * Get the [qttbconfcrteslsordr] column value.
     *
     * @return string
     */
    public function getQttbconfcrteslsordr()
    {
        return $this->qttbconfcrteslsordr;
    }

    /**
     * Get the [qttbconfcrteqtyzero] column value.
     *
     * @return string
     */
    public function getQttbconfcrteqtyzero()
    {
        return $this->qttbconfcrteqtyzero;
    }

    /**
     * Get the [qttbconfautononstock] column value.
     *
     * @return string
     */
    public function getQttbconfautononstock()
    {
        return $this->qttbconfautononstock;
    }

    /**
     * Get the [qttbconfmarkupmargin] column value.
     *
     * @return string
     */
    public function getQttbconfmarkupmargin()
    {
        return $this->qttbconfmarkupmargin;
    }

    /**
     * Get the [qttbconfuseqtybrks] column value.
     *
     * @return string
     */
    public function getQttbconfuseqtybrks()
    {
        return $this->qttbconfuseqtybrks;
    }

    /**
     * Get the [qttbconfwghtentercalc] column value.
     *
     * @return string
     */
    public function getQttbconfwghtentercalc()
    {
        return $this->qttbconfwghtentercalc;
    }

    /**
     * Get the [qttbconfdefquot] column value.
     *
     * @return string
     */
    public function getQttbconfdefquot()
    {
        return $this->qttbconfdefquot;
    }

    /**
     * Get the [qttbconfdefpick] column value.
     *
     * @return string
     */
    public function getQttbconfdefpick()
    {
        return $this->qttbconfdefpick;
    }

    /**
     * Get the [qttbconfdefpack] column value.
     *
     * @return string
     */
    public function getQttbconfdefpack()
    {
        return $this->qttbconfdefpack;
    }

    /**
     * Get the [qttbconfdefinvc] column value.
     *
     * @return string
     */
    public function getQttbconfdefinvc()
    {
        return $this->qttbconfdefinvc;
    }

    /**
     * Get the [qttbconfdefack] column value.
     *
     * @return string
     */
    public function getQttbconfdefack()
    {
        return $this->qttbconfdefack;
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
     * Set the value of [qttbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qttbconfkey !== $v) {
            $this->qttbconfkey = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFKEY] = true;
        }

        return $this;
    } // setQttbconfkey()

    /**
     * Set the value of [qttbconfautogen] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfautogen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfautogen !== $v) {
            $this->qttbconfautogen = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFAUTOGEN] = true;
        }

        return $this;
    } // setQttbconfautogen()

    /**
     * Set the value of [qttbconfvendline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfvendline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qttbconfvendline !== $v) {
            $this->qttbconfvendline = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFVENDLINE] = true;
        }

        return $this;
    } // setQttbconfvendline()

    /**
     * Set the value of [qttbconfvendcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfvendcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qttbconfvendcols !== $v) {
            $this->qttbconfvendcols = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFVENDCOLS] = true;
        }

        return $this;
    } // setQttbconfvendcols()

    /**
     * Set the value of [qttbconfexpdays] column.
     *
     * @param int $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfexpdays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qttbconfexpdays !== $v) {
            $this->qttbconfexpdays = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFEXPDAYS] = true;
        }

        return $this;
    } // setQttbconfexpdays()

    /**
     * Set the value of [qttbconfpricwind] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfpricwind($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfpricwind !== $v) {
            $this->qttbconfpricwind = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFPRICWIND] = true;
        }

        return $this;
    } // setQttbconfpricwind()

    /**
     * Set the value of [qttbconfdispnotes] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfdispnotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfdispnotes !== $v) {
            $this->qttbconfdispnotes = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFDISPNOTES] = true;
        }

        return $this;
    } // setQttbconfdispnotes()

    /**
     * Set the value of [qttbconfheadgetdef] column.
     *
     * @param int $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfheadgetdef($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qttbconfheadgetdef !== $v) {
            $this->qttbconfheadgetdef = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFHEADGETDEF] = true;
        }

        return $this;
    } // setQttbconfheadgetdef()

    /**
     * Set the value of [qttbconfshowmarg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfshowmarg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfshowmarg !== $v) {
            $this->qttbconfshowmarg = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFSHOWMARG] = true;
        }

        return $this;
    } // setQttbconfshowmarg()

    /**
     * Set the value of [qttbconfshowsp] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfshowsp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfshowsp !== $v) {
            $this->qttbconfshowsp = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFSHOWSP] = true;
        }

        return $this;
    } // setQttbconfshowsp()

    /**
     * Set the value of [qttbconfloadpric] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfloadpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfloadpric !== $v) {
            $this->qttbconfloadpric = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFLOADPRIC] = true;
        }

        return $this;
    } // setQttbconfloadpric()

    /**
     * Set the value of [qttbconfpricfromqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfpricfromqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfpricfromqty !== $v) {
            $this->qttbconfpricfromqty = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFPRICFROMQTY] = true;
        }

        return $this;
    } // setQttbconfpricfromqty()

    /**
     * Set the value of [qttbconfloadcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfloadcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfloadcost !== $v) {
            $this->qttbconfloadcost = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFLOADCOST] = true;
        }

        return $this;
    } // setQttbconfloadcost()

    /**
     * Set the value of [qttbconfdfltcontactinfo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfdfltcontactinfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfdfltcontactinfo !== $v) {
            $this->qttbconfdfltcontactinfo = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFDFLTCONTACTINFO] = true;
        }

        return $this;
    } // setQttbconfdfltcontactinfo()

    /**
     * Set the value of [qttbconfenteruom] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfenteruom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfenteruom !== $v) {
            $this->qttbconfenteruom = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFENTERUOM] = true;
        }

        return $this;
    } // setQttbconfenteruom()

    /**
     * Set the value of [qttbconfreviewdays] column.
     *
     * @param int $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfreviewdays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qttbconfreviewdays !== $v) {
            $this->qttbconfreviewdays = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS] = true;
        }

        return $this;
    } // setQttbconfreviewdays()

    /**
     * Set the value of [qttbconfcrteslsordr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfcrteslsordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfcrteslsordr !== $v) {
            $this->qttbconfcrteslsordr = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFCRTESLSORDR] = true;
        }

        return $this;
    } // setQttbconfcrteslsordr()

    /**
     * Set the value of [qttbconfcrteqtyzero] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfcrteqtyzero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfcrteqtyzero !== $v) {
            $this->qttbconfcrteqtyzero = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFCRTEQTYZERO] = true;
        }

        return $this;
    } // setQttbconfcrteqtyzero()

    /**
     * Set the value of [qttbconfautononstock] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfautononstock($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfautononstock !== $v) {
            $this->qttbconfautononstock = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFAUTONONSTOCK] = true;
        }

        return $this;
    } // setQttbconfautononstock()

    /**
     * Set the value of [qttbconfmarkupmargin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfmarkupmargin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfmarkupmargin !== $v) {
            $this->qttbconfmarkupmargin = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFMARKUPMARGIN] = true;
        }

        return $this;
    } // setQttbconfmarkupmargin()

    /**
     * Set the value of [qttbconfuseqtybrks] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfuseqtybrks($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfuseqtybrks !== $v) {
            $this->qttbconfuseqtybrks = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFUSEQTYBRKS] = true;
        }

        return $this;
    } // setQttbconfuseqtybrks()

    /**
     * Set the value of [qttbconfwghtentercalc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfwghtentercalc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfwghtentercalc !== $v) {
            $this->qttbconfwghtentercalc = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFWGHTENTERCALC] = true;
        }

        return $this;
    } // setQttbconfwghtentercalc()

    /**
     * Set the value of [qttbconfdefquot] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfdefquot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfdefquot !== $v) {
            $this->qttbconfdefquot = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFDEFQUOT] = true;
        }

        return $this;
    } // setQttbconfdefquot()

    /**
     * Set the value of [qttbconfdefpick] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfdefpick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfdefpick !== $v) {
            $this->qttbconfdefpick = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFDEFPICK] = true;
        }

        return $this;
    } // setQttbconfdefpick()

    /**
     * Set the value of [qttbconfdefpack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfdefpack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfdefpack !== $v) {
            $this->qttbconfdefpack = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFDEFPACK] = true;
        }

        return $this;
    } // setQttbconfdefpack()

    /**
     * Set the value of [qttbconfdefinvc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfdefinvc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfdefinvc !== $v) {
            $this->qttbconfdefinvc = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFDEFINVC] = true;
        }

        return $this;
    } // setQttbconfdefinvc()

    /**
     * Set the value of [qttbconfdefack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setQttbconfdefack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qttbconfdefack !== $v) {
            $this->qttbconfdefack = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_QTTBCONFDEFACK] = true;
        }

        return $this;
    } // setQttbconfdefack()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigQt The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigQtTableMap::COL_DUMMY] = true;
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
            if ($this->qttbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfautogen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfautogen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfvendline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfvendline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfvendcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfvendcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfexpdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfexpdays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfpricwind', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfpricwind = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfdispnotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfdispnotes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfheadgetdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfheadgetdef = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfshowmarg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfshowmarg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfshowsp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfshowsp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfloadpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfloadpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfpricfromqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfpricfromqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfloadcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfloadcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfdfltcontactinfo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfdfltcontactinfo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfenteruom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfenteruom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfreviewdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfreviewdays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfcrteslsordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfcrteslsordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfcrteqtyzero', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfcrteqtyzero = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfautononstock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfautononstock = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfmarkupmargin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfmarkupmargin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfuseqtybrks', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfuseqtybrks = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfwghtentercalc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfwghtentercalc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfdefquot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfdefquot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfdefpick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfdefpick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfdefpack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfdefpack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfdefinvc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfdefinvc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigQtTableMap::translateFieldName('Qttbconfdefack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qttbconfdefack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigQtTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigQtTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigQtTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 30; // 30 = ConfigQtTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigQt'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigQtTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigQtQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigQt::setDeleted()
     * @see ConfigQt::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigQtTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigQtQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigQtTableMap::DATABASE_NAME);
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
                ConfigQtTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfKey';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFAUTOGEN)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfAutoGen';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFVENDLINE)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfVendLine';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFVENDCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfVendCols';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFEXPDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfExpDays';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFPRICWIND)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfPricWind';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDISPNOTES)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfDispNotes';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFHEADGETDEF)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfHeadGetDef';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFSHOWMARG)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfShowMarg';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFSHOWSP)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfShowSp';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFLOADPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfLoadPric';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFPRICFROMQTY)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfPricFromQty';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFLOADCOST)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfLoadCost';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDFLTCONTACTINFO)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfDfltContactInfo';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFENTERUOM)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfEnterUom';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfReviewDays';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFCRTESLSORDR)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfCrteSlsOrdr';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFCRTEQTYZERO)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfCrteQtyZero';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFAUTONONSTOCK)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfAutoNonStock';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFMARKUPMARGIN)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfMarkupMargin';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFUSEQTYBRKS)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfUseQtyBrks';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFWGHTENTERCALC)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfWghtEnterCalc';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFQUOT)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfDefQuot';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFPICK)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfDefPick';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFPACK)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfDefPack';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFINVC)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfDefInvc';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFACK)) {
            $modifiedColumns[':p' . $index++]  = 'QttbConfDefAck';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO qt_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'QttbConfKey':
                        $stmt->bindValue($identifier, $this->qttbconfkey, PDO::PARAM_INT);
                        break;
                    case 'QttbConfAutoGen':
                        $stmt->bindValue($identifier, $this->qttbconfautogen, PDO::PARAM_STR);
                        break;
                    case 'QttbConfVendLine':
                        $stmt->bindValue($identifier, $this->qttbconfvendline, PDO::PARAM_INT);
                        break;
                    case 'QttbConfVendCols':
                        $stmt->bindValue($identifier, $this->qttbconfvendcols, PDO::PARAM_INT);
                        break;
                    case 'QttbConfExpDays':
                        $stmt->bindValue($identifier, $this->qttbconfexpdays, PDO::PARAM_INT);
                        break;
                    case 'QttbConfPricWind':
                        $stmt->bindValue($identifier, $this->qttbconfpricwind, PDO::PARAM_STR);
                        break;
                    case 'QttbConfDispNotes':
                        $stmt->bindValue($identifier, $this->qttbconfdispnotes, PDO::PARAM_STR);
                        break;
                    case 'QttbConfHeadGetDef':
                        $stmt->bindValue($identifier, $this->qttbconfheadgetdef, PDO::PARAM_INT);
                        break;
                    case 'QttbConfShowMarg':
                        $stmt->bindValue($identifier, $this->qttbconfshowmarg, PDO::PARAM_STR);
                        break;
                    case 'QttbConfShowSp':
                        $stmt->bindValue($identifier, $this->qttbconfshowsp, PDO::PARAM_STR);
                        break;
                    case 'QttbConfLoadPric':
                        $stmt->bindValue($identifier, $this->qttbconfloadpric, PDO::PARAM_STR);
                        break;
                    case 'QttbConfPricFromQty':
                        $stmt->bindValue($identifier, $this->qttbconfpricfromqty, PDO::PARAM_STR);
                        break;
                    case 'QttbConfLoadCost':
                        $stmt->bindValue($identifier, $this->qttbconfloadcost, PDO::PARAM_STR);
                        break;
                    case 'QttbConfDfltContactInfo':
                        $stmt->bindValue($identifier, $this->qttbconfdfltcontactinfo, PDO::PARAM_STR);
                        break;
                    case 'QttbConfEnterUom':
                        $stmt->bindValue($identifier, $this->qttbconfenteruom, PDO::PARAM_STR);
                        break;
                    case 'QttbConfReviewDays':
                        $stmt->bindValue($identifier, $this->qttbconfreviewdays, PDO::PARAM_INT);
                        break;
                    case 'QttbConfCrteSlsOrdr':
                        $stmt->bindValue($identifier, $this->qttbconfcrteslsordr, PDO::PARAM_STR);
                        break;
                    case 'QttbConfCrteQtyZero':
                        $stmt->bindValue($identifier, $this->qttbconfcrteqtyzero, PDO::PARAM_STR);
                        break;
                    case 'QttbConfAutoNonStock':
                        $stmt->bindValue($identifier, $this->qttbconfautononstock, PDO::PARAM_STR);
                        break;
                    case 'QttbConfMarkupMargin':
                        $stmt->bindValue($identifier, $this->qttbconfmarkupmargin, PDO::PARAM_STR);
                        break;
                    case 'QttbConfUseQtyBrks':
                        $stmt->bindValue($identifier, $this->qttbconfuseqtybrks, PDO::PARAM_STR);
                        break;
                    case 'QttbConfWghtEnterCalc':
                        $stmt->bindValue($identifier, $this->qttbconfwghtentercalc, PDO::PARAM_STR);
                        break;
                    case 'QttbConfDefQuot':
                        $stmt->bindValue($identifier, $this->qttbconfdefquot, PDO::PARAM_STR);
                        break;
                    case 'QttbConfDefPick':
                        $stmt->bindValue($identifier, $this->qttbconfdefpick, PDO::PARAM_STR);
                        break;
                    case 'QttbConfDefPack':
                        $stmt->bindValue($identifier, $this->qttbconfdefpack, PDO::PARAM_STR);
                        break;
                    case 'QttbConfDefInvc':
                        $stmt->bindValue($identifier, $this->qttbconfdefinvc, PDO::PARAM_STR);
                        break;
                    case 'QttbConfDefAck':
                        $stmt->bindValue($identifier, $this->qttbconfdefack, PDO::PARAM_STR);
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
        $pos = ConfigQtTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getQttbconfkey();
                break;
            case 1:
                return $this->getQttbconfautogen();
                break;
            case 2:
                return $this->getQttbconfvendline();
                break;
            case 3:
                return $this->getQttbconfvendcols();
                break;
            case 4:
                return $this->getQttbconfexpdays();
                break;
            case 5:
                return $this->getQttbconfpricwind();
                break;
            case 6:
                return $this->getQttbconfdispnotes();
                break;
            case 7:
                return $this->getQttbconfheadgetdef();
                break;
            case 8:
                return $this->getQttbconfshowmarg();
                break;
            case 9:
                return $this->getQttbconfshowsp();
                break;
            case 10:
                return $this->getQttbconfloadpric();
                break;
            case 11:
                return $this->getQttbconfpricfromqty();
                break;
            case 12:
                return $this->getQttbconfloadcost();
                break;
            case 13:
                return $this->getQttbconfdfltcontactinfo();
                break;
            case 14:
                return $this->getQttbconfenteruom();
                break;
            case 15:
                return $this->getQttbconfreviewdays();
                break;
            case 16:
                return $this->getQttbconfcrteslsordr();
                break;
            case 17:
                return $this->getQttbconfcrteqtyzero();
                break;
            case 18:
                return $this->getQttbconfautononstock();
                break;
            case 19:
                return $this->getQttbconfmarkupmargin();
                break;
            case 20:
                return $this->getQttbconfuseqtybrks();
                break;
            case 21:
                return $this->getQttbconfwghtentercalc();
                break;
            case 22:
                return $this->getQttbconfdefquot();
                break;
            case 23:
                return $this->getQttbconfdefpick();
                break;
            case 24:
                return $this->getQttbconfdefpack();
                break;
            case 25:
                return $this->getQttbconfdefinvc();
                break;
            case 26:
                return $this->getQttbconfdefack();
                break;
            case 27:
                return $this->getDateupdtd();
                break;
            case 28:
                return $this->getTimeupdtd();
                break;
            case 29:
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

        if (isset($alreadyDumpedObjects['ConfigQt'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigQt'][$this->hashCode()] = true;
        $keys = ConfigQtTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getQttbconfkey(),
            $keys[1] => $this->getQttbconfautogen(),
            $keys[2] => $this->getQttbconfvendline(),
            $keys[3] => $this->getQttbconfvendcols(),
            $keys[4] => $this->getQttbconfexpdays(),
            $keys[5] => $this->getQttbconfpricwind(),
            $keys[6] => $this->getQttbconfdispnotes(),
            $keys[7] => $this->getQttbconfheadgetdef(),
            $keys[8] => $this->getQttbconfshowmarg(),
            $keys[9] => $this->getQttbconfshowsp(),
            $keys[10] => $this->getQttbconfloadpric(),
            $keys[11] => $this->getQttbconfpricfromqty(),
            $keys[12] => $this->getQttbconfloadcost(),
            $keys[13] => $this->getQttbconfdfltcontactinfo(),
            $keys[14] => $this->getQttbconfenteruom(),
            $keys[15] => $this->getQttbconfreviewdays(),
            $keys[16] => $this->getQttbconfcrteslsordr(),
            $keys[17] => $this->getQttbconfcrteqtyzero(),
            $keys[18] => $this->getQttbconfautononstock(),
            $keys[19] => $this->getQttbconfmarkupmargin(),
            $keys[20] => $this->getQttbconfuseqtybrks(),
            $keys[21] => $this->getQttbconfwghtentercalc(),
            $keys[22] => $this->getQttbconfdefquot(),
            $keys[23] => $this->getQttbconfdefpick(),
            $keys[24] => $this->getQttbconfdefpack(),
            $keys[25] => $this->getQttbconfdefinvc(),
            $keys[26] => $this->getQttbconfdefack(),
            $keys[27] => $this->getDateupdtd(),
            $keys[28] => $this->getTimeupdtd(),
            $keys[29] => $this->getDummy(),
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
     * @return $this|\ConfigQt
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigQtTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigQt
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setQttbconfkey($value);
                break;
            case 1:
                $this->setQttbconfautogen($value);
                break;
            case 2:
                $this->setQttbconfvendline($value);
                break;
            case 3:
                $this->setQttbconfvendcols($value);
                break;
            case 4:
                $this->setQttbconfexpdays($value);
                break;
            case 5:
                $this->setQttbconfpricwind($value);
                break;
            case 6:
                $this->setQttbconfdispnotes($value);
                break;
            case 7:
                $this->setQttbconfheadgetdef($value);
                break;
            case 8:
                $this->setQttbconfshowmarg($value);
                break;
            case 9:
                $this->setQttbconfshowsp($value);
                break;
            case 10:
                $this->setQttbconfloadpric($value);
                break;
            case 11:
                $this->setQttbconfpricfromqty($value);
                break;
            case 12:
                $this->setQttbconfloadcost($value);
                break;
            case 13:
                $this->setQttbconfdfltcontactinfo($value);
                break;
            case 14:
                $this->setQttbconfenteruom($value);
                break;
            case 15:
                $this->setQttbconfreviewdays($value);
                break;
            case 16:
                $this->setQttbconfcrteslsordr($value);
                break;
            case 17:
                $this->setQttbconfcrteqtyzero($value);
                break;
            case 18:
                $this->setQttbconfautononstock($value);
                break;
            case 19:
                $this->setQttbconfmarkupmargin($value);
                break;
            case 20:
                $this->setQttbconfuseqtybrks($value);
                break;
            case 21:
                $this->setQttbconfwghtentercalc($value);
                break;
            case 22:
                $this->setQttbconfdefquot($value);
                break;
            case 23:
                $this->setQttbconfdefpick($value);
                break;
            case 24:
                $this->setQttbconfdefpack($value);
                break;
            case 25:
                $this->setQttbconfdefinvc($value);
                break;
            case 26:
                $this->setQttbconfdefack($value);
                break;
            case 27:
                $this->setDateupdtd($value);
                break;
            case 28:
                $this->setTimeupdtd($value);
                break;
            case 29:
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
        $keys = ConfigQtTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setQttbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setQttbconfautogen($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setQttbconfvendline($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setQttbconfvendcols($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setQttbconfexpdays($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setQttbconfpricwind($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setQttbconfdispnotes($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setQttbconfheadgetdef($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setQttbconfshowmarg($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setQttbconfshowsp($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setQttbconfloadpric($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setQttbconfpricfromqty($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setQttbconfloadcost($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setQttbconfdfltcontactinfo($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setQttbconfenteruom($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setQttbconfreviewdays($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setQttbconfcrteslsordr($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setQttbconfcrteqtyzero($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setQttbconfautononstock($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setQttbconfmarkupmargin($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setQttbconfuseqtybrks($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setQttbconfwghtentercalc($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setQttbconfdefquot($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setQttbconfdefpick($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setQttbconfdefpack($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setQttbconfdefinvc($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setQttbconfdefack($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setDateupdtd($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setTimeupdtd($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setDummy($arr[$keys[29]]);
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
     * @return $this|\ConfigQt The current object, for fluid interface
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
        $criteria = new Criteria(ConfigQtTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFKEY)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFKEY, $this->qttbconfkey);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFAUTOGEN)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFAUTOGEN, $this->qttbconfautogen);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFVENDLINE)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFVENDLINE, $this->qttbconfvendline);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFVENDCOLS)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFVENDCOLS, $this->qttbconfvendcols);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFEXPDAYS)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFEXPDAYS, $this->qttbconfexpdays);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFPRICWIND)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFPRICWIND, $this->qttbconfpricwind);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDISPNOTES)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFDISPNOTES, $this->qttbconfdispnotes);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFHEADGETDEF)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFHEADGETDEF, $this->qttbconfheadgetdef);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFSHOWMARG)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFSHOWMARG, $this->qttbconfshowmarg);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFSHOWSP)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFSHOWSP, $this->qttbconfshowsp);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFLOADPRIC)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFLOADPRIC, $this->qttbconfloadpric);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFPRICFROMQTY)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFPRICFROMQTY, $this->qttbconfpricfromqty);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFLOADCOST)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFLOADCOST, $this->qttbconfloadcost);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDFLTCONTACTINFO)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFDFLTCONTACTINFO, $this->qttbconfdfltcontactinfo);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFENTERUOM)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFENTERUOM, $this->qttbconfenteruom);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS, $this->qttbconfreviewdays);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFCRTESLSORDR)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFCRTESLSORDR, $this->qttbconfcrteslsordr);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFCRTEQTYZERO)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFCRTEQTYZERO, $this->qttbconfcrteqtyzero);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFAUTONONSTOCK)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFAUTONONSTOCK, $this->qttbconfautononstock);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFMARKUPMARGIN)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFMARKUPMARGIN, $this->qttbconfmarkupmargin);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFUSEQTYBRKS)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFUSEQTYBRKS, $this->qttbconfuseqtybrks);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFWGHTENTERCALC)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFWGHTENTERCALC, $this->qttbconfwghtentercalc);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFQUOT)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFDEFQUOT, $this->qttbconfdefquot);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFPICK)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFDEFPICK, $this->qttbconfdefpick);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFPACK)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFDEFPACK, $this->qttbconfdefpack);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFINVC)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFDEFINVC, $this->qttbconfdefinvc);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_QTTBCONFDEFACK)) {
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFDEFACK, $this->qttbconfdefack);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigQtTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigQtTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigQtTableMap::COL_DUMMY)) {
            $criteria->add(ConfigQtTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigQtQuery::create();
        $criteria->add(ConfigQtTableMap::COL_QTTBCONFKEY, $this->qttbconfkey);

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
        $validPk = null !== $this->getQttbconfkey();

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
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getQttbconfkey();
    }

    /**
     * Generic method to set the primary key (qttbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setQttbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getQttbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigQt (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setQttbconfkey($this->getQttbconfkey());
        $copyObj->setQttbconfautogen($this->getQttbconfautogen());
        $copyObj->setQttbconfvendline($this->getQttbconfvendline());
        $copyObj->setQttbconfvendcols($this->getQttbconfvendcols());
        $copyObj->setQttbconfexpdays($this->getQttbconfexpdays());
        $copyObj->setQttbconfpricwind($this->getQttbconfpricwind());
        $copyObj->setQttbconfdispnotes($this->getQttbconfdispnotes());
        $copyObj->setQttbconfheadgetdef($this->getQttbconfheadgetdef());
        $copyObj->setQttbconfshowmarg($this->getQttbconfshowmarg());
        $copyObj->setQttbconfshowsp($this->getQttbconfshowsp());
        $copyObj->setQttbconfloadpric($this->getQttbconfloadpric());
        $copyObj->setQttbconfpricfromqty($this->getQttbconfpricfromqty());
        $copyObj->setQttbconfloadcost($this->getQttbconfloadcost());
        $copyObj->setQttbconfdfltcontactinfo($this->getQttbconfdfltcontactinfo());
        $copyObj->setQttbconfenteruom($this->getQttbconfenteruom());
        $copyObj->setQttbconfreviewdays($this->getQttbconfreviewdays());
        $copyObj->setQttbconfcrteslsordr($this->getQttbconfcrteslsordr());
        $copyObj->setQttbconfcrteqtyzero($this->getQttbconfcrteqtyzero());
        $copyObj->setQttbconfautononstock($this->getQttbconfautononstock());
        $copyObj->setQttbconfmarkupmargin($this->getQttbconfmarkupmargin());
        $copyObj->setQttbconfuseqtybrks($this->getQttbconfuseqtybrks());
        $copyObj->setQttbconfwghtentercalc($this->getQttbconfwghtentercalc());
        $copyObj->setQttbconfdefquot($this->getQttbconfdefquot());
        $copyObj->setQttbconfdefpick($this->getQttbconfdefpick());
        $copyObj->setQttbconfdefpack($this->getQttbconfdefpack());
        $copyObj->setQttbconfdefinvc($this->getQttbconfdefinvc());
        $copyObj->setQttbconfdefack($this->getQttbconfdefack());
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
     * @return \ConfigQt Clone of current object.
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
        $this->qttbconfkey = null;
        $this->qttbconfautogen = null;
        $this->qttbconfvendline = null;
        $this->qttbconfvendcols = null;
        $this->qttbconfexpdays = null;
        $this->qttbconfpricwind = null;
        $this->qttbconfdispnotes = null;
        $this->qttbconfheadgetdef = null;
        $this->qttbconfshowmarg = null;
        $this->qttbconfshowsp = null;
        $this->qttbconfloadpric = null;
        $this->qttbconfpricfromqty = null;
        $this->qttbconfloadcost = null;
        $this->qttbconfdfltcontactinfo = null;
        $this->qttbconfenteruom = null;
        $this->qttbconfreviewdays = null;
        $this->qttbconfcrteslsordr = null;
        $this->qttbconfcrteqtyzero = null;
        $this->qttbconfautononstock = null;
        $this->qttbconfmarkupmargin = null;
        $this->qttbconfuseqtybrks = null;
        $this->qttbconfwghtentercalc = null;
        $this->qttbconfdefquot = null;
        $this->qttbconfdefpick = null;
        $this->qttbconfdefpack = null;
        $this->qttbconfdefinvc = null;
        $this->qttbconfdefack = null;
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
        return (string) $this->exportTo(ConfigQtTableMap::DEFAULT_STRING_FORMAT);
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
