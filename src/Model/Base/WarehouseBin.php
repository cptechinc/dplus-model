<?php

namespace Base;

use \InvBinAreaCode as ChildInvBinAreaCode;
use \InvBinAreaCodeQuery as ChildInvBinAreaCodeQuery;
use \Warehouse as ChildWarehouse;
use \WarehouseBinQuery as ChildWarehouseBinQuery;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\WarehouseBinTableMap;
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
 * Base class that represents a row from the 'inv_bin_cntrl' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class WarehouseBin implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\WarehouseBinTableMap';


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
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the bnctbinfrom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $bnctbinfrom;

    /**
     * The value for the bnctbinthru field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $bnctbinthru;

    /**
     * The value for the bncttypedesc field.
     *
     * @var        string
     */
    protected $bncttypedesc;

    /**
     * The value for the bnctbinarea field.
     *
     * @var        string
     */
    protected $bnctbinarea;

    /**
     * The value for the bnctbindesc field.
     *
     * @var        string
     */
    protected $bnctbindesc;

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
     * @var        ChildWarehouse
     */
    protected $aWarehouse;

    /**
     * @var        ChildInvBinAreaCode
     */
    protected $aInvBinAreaCode;

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
        $this->intbwhse = '';
        $this->bnctbinfrom = '';
        $this->bnctbinthru = '';
    }

    /**
     * Initializes internal state of Base\WarehouseBin object.
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
     * Compares this with another <code>WarehouseBin</code> instance.  If
     * <code>obj</code> is an instance of <code>WarehouseBin</code>, delegates to
     * <code>equals(WarehouseBin)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|WarehouseBin The current object, for fluid interface
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
     * Get the [intbwhse] column value.
     *
     * @return string
     */
    public function getIntbwhse()
    {
        return $this->intbwhse;
    }

    /**
     * Get the [bnctbinfrom] column value.
     *
     * @return string
     */
    public function getBnctbinfrom()
    {
        return $this->bnctbinfrom;
    }

    /**
     * Get the [bnctbinthru] column value.
     *
     * @return string
     */
    public function getBnctbinthru()
    {
        return $this->bnctbinthru;
    }

    /**
     * Get the [bncttypedesc] column value.
     *
     * @return string
     */
    public function getBncttypedesc()
    {
        return $this->bncttypedesc;
    }

    /**
     * Get the [bnctbinarea] column value.
     *
     * @return string
     */
    public function getBnctbinarea()
    {
        return $this->bnctbinarea;
    }

    /**
     * Get the [bnctbindesc] column value.
     *
     * @return string
     */
    public function getBnctbindesc()
    {
        return $this->bnctbindesc;
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
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_INTBWHSE] = true;
        }

        if ($this->aWarehouse !== null && $this->aWarehouse->getIntbwhse() !== $v) {
            $this->aWarehouse = null;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [bnctbinfrom] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setBnctbinfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bnctbinfrom !== $v) {
            $this->bnctbinfrom = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_BNCTBINFROM] = true;
        }

        return $this;
    } // setBnctbinfrom()

    /**
     * Set the value of [bnctbinthru] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setBnctbinthru($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bnctbinthru !== $v) {
            $this->bnctbinthru = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_BNCTBINTHRU] = true;
        }

        return $this;
    } // setBnctbinthru()

    /**
     * Set the value of [bncttypedesc] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setBncttypedesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bncttypedesc !== $v) {
            $this->bncttypedesc = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_BNCTTYPEDESC] = true;
        }

        return $this;
    } // setBncttypedesc()

    /**
     * Set the value of [bnctbinarea] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setBnctbinarea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bnctbinarea !== $v) {
            $this->bnctbinarea = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_BNCTBINAREA] = true;
        }

        if ($this->aInvBinAreaCode !== null && $this->aInvBinAreaCode->getIntbbinacode() !== $v) {
            $this->aInvBinAreaCode = null;
        }

        return $this;
    } // setBnctbinarea()

    /**
     * Set the value of [bnctbindesc] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setBnctbindesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bnctbindesc !== $v) {
            $this->bnctbindesc = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_BNCTBINDESC] = true;
        }

        return $this;
    } // setBnctbindesc()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\WarehouseBin The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[WarehouseBinTableMap::COL_DUMMY] = true;
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
            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->bnctbinfrom !== '') {
                return false;
            }

            if ($this->bnctbinthru !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : WarehouseBinTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : WarehouseBinTableMap::translateFieldName('Bnctbinfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bnctbinfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : WarehouseBinTableMap::translateFieldName('Bnctbinthru', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bnctbinthru = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : WarehouseBinTableMap::translateFieldName('Bncttypedesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bncttypedesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : WarehouseBinTableMap::translateFieldName('Bnctbinarea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bnctbinarea = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : WarehouseBinTableMap::translateFieldName('Bnctbindesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->bnctbindesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : WarehouseBinTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : WarehouseBinTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : WarehouseBinTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 9; // 9 = WarehouseBinTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\WarehouseBin'), 0, $e);
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
        if ($this->aWarehouse !== null && $this->intbwhse !== $this->aWarehouse->getIntbwhse()) {
            $this->aWarehouse = null;
        }
        if ($this->aInvBinAreaCode !== null && $this->bnctbinarea !== $this->aInvBinAreaCode->getIntbbinacode()) {
            $this->aInvBinAreaCode = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(WarehouseBinTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildWarehouseBinQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aWarehouse = null;
            $this->aInvBinAreaCode = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see WarehouseBin::setDeleted()
     * @see WarehouseBin::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseBinTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildWarehouseBinQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseBinTableMap::DATABASE_NAME);
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
                WarehouseBinTableMap::addInstanceToPool($this);
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

            if ($this->aWarehouse !== null) {
                if ($this->aWarehouse->isModified() || $this->aWarehouse->isNew()) {
                    $affectedRows += $this->aWarehouse->save($con);
                }
                $this->setWarehouse($this->aWarehouse);
            }

            if ($this->aInvBinAreaCode !== null) {
                if ($this->aInvBinAreaCode->isModified() || $this->aInvBinAreaCode->isNew()) {
                    $affectedRows += $this->aInvBinAreaCode->save($con);
                }
                $this->setInvBinAreaCode($this->aInvBinAreaCode);
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
        if ($this->isColumnModified(WarehouseBinTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTBINFROM)) {
            $modifiedColumns[':p' . $index++]  = 'BnctBinFrom';
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTBINTHRU)) {
            $modifiedColumns[':p' . $index++]  = 'BnctBinThru';
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTTYPEDESC)) {
            $modifiedColumns[':p' . $index++]  = 'BnctTypeDesc';
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTBINAREA)) {
            $modifiedColumns[':p' . $index++]  = 'BnctBinArea';
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTBINDESC)) {
            $modifiedColumns[':p' . $index++]  = 'BnctBinDesc';
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_bin_cntrl (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'BnctBinFrom':
                        $stmt->bindValue($identifier, $this->bnctbinfrom, PDO::PARAM_STR);
                        break;
                    case 'BnctBinThru':
                        $stmt->bindValue($identifier, $this->bnctbinthru, PDO::PARAM_STR);
                        break;
                    case 'BnctTypeDesc':
                        $stmt->bindValue($identifier, $this->bncttypedesc, PDO::PARAM_STR);
                        break;
                    case 'BnctBinArea':
                        $stmt->bindValue($identifier, $this->bnctbinarea, PDO::PARAM_STR);
                        break;
                    case 'BnctBinDesc':
                        $stmt->bindValue($identifier, $this->bnctbindesc, PDO::PARAM_STR);
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
        $pos = WarehouseBinTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIntbwhse();
                break;
            case 1:
                return $this->getBnctbinfrom();
                break;
            case 2:
                return $this->getBnctbinthru();
                break;
            case 3:
                return $this->getBncttypedesc();
                break;
            case 4:
                return $this->getBnctbinarea();
                break;
            case 5:
                return $this->getBnctbindesc();
                break;
            case 6:
                return $this->getDateupdtd();
                break;
            case 7:
                return $this->getTimeupdtd();
                break;
            case 8:
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

        if (isset($alreadyDumpedObjects['WarehouseBin'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['WarehouseBin'][$this->hashCode()] = true;
        $keys = WarehouseBinTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIntbwhse(),
            $keys[1] => $this->getBnctbinfrom(),
            $keys[2] => $this->getBnctbinthru(),
            $keys[3] => $this->getBncttypedesc(),
            $keys[4] => $this->getBnctbinarea(),
            $keys[5] => $this->getBnctbindesc(),
            $keys[6] => $this->getDateupdtd(),
            $keys[7] => $this->getTimeupdtd(),
            $keys[8] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aWarehouse) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'warehouse';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_whse_code';
                        break;
                    default:
                        $key = 'Warehouse';
                }

                $result[$key] = $this->aWarehouse->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvBinAreaCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invBinAreaCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_bina_code';
                        break;
                    default:
                        $key = 'InvBinAreaCode';
                }

                $result[$key] = $this->aInvBinAreaCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\WarehouseBin
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = WarehouseBinTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\WarehouseBin
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIntbwhse($value);
                break;
            case 1:
                $this->setBnctbinfrom($value);
                break;
            case 2:
                $this->setBnctbinthru($value);
                break;
            case 3:
                $this->setBncttypedesc($value);
                break;
            case 4:
                $this->setBnctbinarea($value);
                break;
            case 5:
                $this->setBnctbindesc($value);
                break;
            case 6:
                $this->setDateupdtd($value);
                break;
            case 7:
                $this->setTimeupdtd($value);
                break;
            case 8:
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
        $keys = WarehouseBinTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIntbwhse($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setBnctbinfrom($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setBnctbinthru($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setBncttypedesc($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setBnctbinarea($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setBnctbindesc($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDateupdtd($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setTimeupdtd($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setDummy($arr[$keys[8]]);
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
     * @return $this|\WarehouseBin The current object, for fluid interface
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
        $criteria = new Criteria(WarehouseBinTableMap::DATABASE_NAME);

        if ($this->isColumnModified(WarehouseBinTableMap::COL_INTBWHSE)) {
            $criteria->add(WarehouseBinTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTBINFROM)) {
            $criteria->add(WarehouseBinTableMap::COL_BNCTBINFROM, $this->bnctbinfrom);
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTBINTHRU)) {
            $criteria->add(WarehouseBinTableMap::COL_BNCTBINTHRU, $this->bnctbinthru);
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTTYPEDESC)) {
            $criteria->add(WarehouseBinTableMap::COL_BNCTTYPEDESC, $this->bncttypedesc);
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTBINAREA)) {
            $criteria->add(WarehouseBinTableMap::COL_BNCTBINAREA, $this->bnctbinarea);
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_BNCTBINDESC)) {
            $criteria->add(WarehouseBinTableMap::COL_BNCTBINDESC, $this->bnctbindesc);
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_DATEUPDTD)) {
            $criteria->add(WarehouseBinTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_TIMEUPDTD)) {
            $criteria->add(WarehouseBinTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(WarehouseBinTableMap::COL_DUMMY)) {
            $criteria->add(WarehouseBinTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildWarehouseBinQuery::create();
        $criteria->add(WarehouseBinTableMap::COL_INTBWHSE, $this->intbwhse);
        $criteria->add(WarehouseBinTableMap::COL_BNCTBINFROM, $this->bnctbinfrom);
        $criteria->add(WarehouseBinTableMap::COL_BNCTBINTHRU, $this->bnctbinthru);

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
        $validPk = null !== $this->getIntbwhse() &&
            null !== $this->getBnctbinfrom() &&
            null !== $this->getBnctbinthru();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation warehouse to table inv_whse_code
        if ($this->aWarehouse && $hash = spl_object_hash($this->aWarehouse)) {
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
        $pks[0] = $this->getIntbwhse();
        $pks[1] = $this->getBnctbinfrom();
        $pks[2] = $this->getBnctbinthru();

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
        $this->setIntbwhse($keys[0]);
        $this->setBnctbinfrom($keys[1]);
        $this->setBnctbinthru($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getIntbwhse()) && (null === $this->getBnctbinfrom()) && (null === $this->getBnctbinthru());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \WarehouseBin (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setBnctbinfrom($this->getBnctbinfrom());
        $copyObj->setBnctbinthru($this->getBnctbinthru());
        $copyObj->setBncttypedesc($this->getBncttypedesc());
        $copyObj->setBnctbinarea($this->getBnctbinarea());
        $copyObj->setBnctbindesc($this->getBnctbindesc());
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
     * @return \WarehouseBin Clone of current object.
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
     * Declares an association between this object and a ChildWarehouse object.
     *
     * @param  ChildWarehouse $v
     * @return $this|\WarehouseBin The current object (for fluent API support)
     * @throws PropelException
     */
    public function setWarehouse(ChildWarehouse $v = null)
    {
        if ($v === null) {
            $this->setIntbwhse('');
        } else {
            $this->setIntbwhse($v->getIntbwhse());
        }

        $this->aWarehouse = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildWarehouse object, it will not be re-added.
        if ($v !== null) {
            $v->addWarehouseBin($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildWarehouse object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildWarehouse The associated ChildWarehouse object.
     * @throws PropelException
     */
    public function getWarehouse(ConnectionInterface $con = null)
    {
        if ($this->aWarehouse === null && (($this->intbwhse !== "" && $this->intbwhse !== null))) {
            $this->aWarehouse = ChildWarehouseQuery::create()->findPk($this->intbwhse, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aWarehouse->addWarehouseBins($this);
             */
        }

        return $this->aWarehouse;
    }

    /**
     * Declares an association between this object and a ChildInvBinAreaCode object.
     *
     * @param  ChildInvBinAreaCode $v
     * @return $this|\WarehouseBin The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvBinAreaCode(ChildInvBinAreaCode $v = null)
    {
        if ($v === null) {
            $this->setBnctbinarea(NULL);
        } else {
            $this->setBnctbinarea($v->getIntbbinacode());
        }

        $this->aInvBinAreaCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvBinAreaCode object, it will not be re-added.
        if ($v !== null) {
            $v->addWarehouseBin($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvBinAreaCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvBinAreaCode The associated ChildInvBinAreaCode object.
     * @throws PropelException
     */
    public function getInvBinAreaCode(ConnectionInterface $con = null)
    {
        if ($this->aInvBinAreaCode === null && (($this->bnctbinarea !== "" && $this->bnctbinarea !== null))) {
            $this->aInvBinAreaCode = ChildInvBinAreaCodeQuery::create()->findPk($this->bnctbinarea, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvBinAreaCode->addWarehouseBins($this);
             */
        }

        return $this->aInvBinAreaCode;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aWarehouse) {
            $this->aWarehouse->removeWarehouseBin($this);
        }
        if (null !== $this->aInvBinAreaCode) {
            $this->aInvBinAreaCode->removeWarehouseBin($this);
        }
        $this->intbwhse = null;
        $this->bnctbinfrom = null;
        $this->bnctbinthru = null;
        $this->bncttypedesc = null;
        $this->bnctbinarea = null;
        $this->bnctbindesc = null;
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

        $this->aWarehouse = null;
        $this->aInvBinAreaCode = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(WarehouseBinTableMap::DEFAULT_STRING_FORMAT);
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
