<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItemXrefVendor as ChildItemXrefVendor;
use \ItemXrefVendorQuery as ChildItemXrefVendorQuery;
use \UnitofMeasurePurchase as ChildUnitofMeasurePurchase;
use \UnitofMeasurePurchaseQuery as ChildUnitofMeasurePurchaseQuery;
use \Exception;
use \PDO;
use Map\ItemMasterItemTableMap;
use Map\ItemXrefVendorTableMap;
use Map\UnitofMeasurePurchaseTableMap;
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
 * Base class that represents a row from the 'inv_uom_pur' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class UnitofMeasurePurchase implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\UnitofMeasurePurchaseTableMap';


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
     * The value for the intbuompur field.
     *
     * @var        string
     */
    protected $intbuompur;

    /**
     * The value for the intbuomdesc field.
     *
     * @var        string
     */
    protected $intbuomdesc;

    /**
     * The value for the intbuomconv field.
     *
     * @var        string
     */
    protected $intbuomconv;

    /**
     * The value for the intbuompricbywght field.
     *
     * @var        string
     */
    protected $intbuompricbywght;

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
     * @var        ObjectCollection|ChildItemMasterItem[] Collection to store aggregation of ChildItemMasterItem objects.
     */
    protected $collItemMasterItems;
    protected $collItemMasterItemsPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefVendor[] Collection to store aggregation of ChildItemXrefVendor objects.
     */
    protected $collItemXrefVendors;
    protected $collItemXrefVendorsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemMasterItem[]
     */
    protected $itemMasterItemsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefVendor[]
     */
    protected $itemXrefVendorsScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\UnitofMeasurePurchase object.
     */
    public function __construct()
    {
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
     * Compares this with another <code>UnitofMeasurePurchase</code> instance.  If
     * <code>obj</code> is an instance of <code>UnitofMeasurePurchase</code>, delegates to
     * <code>equals(UnitofMeasurePurchase)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|UnitofMeasurePurchase The current object, for fluid interface
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
     * Get the [intbuompur] column value.
     *
     * @return string
     */
    public function getIntbuompur()
    {
        return $this->intbuompur;
    }

    /**
     * Get the [intbuomdesc] column value.
     *
     * @return string
     */
    public function getIntbuomdesc()
    {
        return $this->intbuomdesc;
    }

    /**
     * Get the [intbuomconv] column value.
     *
     * @return string
     */
    public function getIntbuomconv()
    {
        return $this->intbuomconv;
    }

    /**
     * Get the [intbuompricbywght] column value.
     *
     * @return string
     */
    public function getIntbuompricbywght()
    {
        return $this->intbuompricbywght;
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
     * Set the value of [intbuompur] column.
     *
     * @param string $v new value
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setIntbuompur($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuompur !== $v) {
            $this->intbuompur = $v;
            $this->modifiedColumns[UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR] = true;
        }

        return $this;
    } // setIntbuompur()

    /**
     * Set the value of [intbuomdesc] column.
     *
     * @param string $v new value
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setIntbuomdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuomdesc !== $v) {
            $this->intbuomdesc = $v;
            $this->modifiedColumns[UnitofMeasurePurchaseTableMap::COL_INTBUOMDESC] = true;
        }

        return $this;
    } // setIntbuomdesc()

    /**
     * Set the value of [intbuomconv] column.
     *
     * @param string $v new value
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setIntbuomconv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuomconv !== $v) {
            $this->intbuomconv = $v;
            $this->modifiedColumns[UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV] = true;
        }

        return $this;
    } // setIntbuomconv()

    /**
     * Set the value of [intbuompricbywght] column.
     *
     * @param string $v new value
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setIntbuompricbywght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuompricbywght !== $v) {
            $this->intbuompricbywght = $v;
            $this->modifiedColumns[UnitofMeasurePurchaseTableMap::COL_INTBUOMPRICBYWGHT] = true;
        }

        return $this;
    } // setIntbuompricbywght()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[UnitofMeasurePurchaseTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[UnitofMeasurePurchaseTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[UnitofMeasurePurchaseTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : UnitofMeasurePurchaseTableMap::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuompur = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : UnitofMeasurePurchaseTableMap::translateFieldName('Intbuomdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuomdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : UnitofMeasurePurchaseTableMap::translateFieldName('Intbuomconv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuomconv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : UnitofMeasurePurchaseTableMap::translateFieldName('Intbuompricbywght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuompricbywght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : UnitofMeasurePurchaseTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : UnitofMeasurePurchaseTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : UnitofMeasurePurchaseTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 7; // 7 = UnitofMeasurePurchaseTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\UnitofMeasurePurchase'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildUnitofMeasurePurchaseQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collItemMasterItems = null;

            $this->collItemXrefVendors = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see UnitofMeasurePurchase::setDeleted()
     * @see UnitofMeasurePurchase::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildUnitofMeasurePurchaseQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
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
                UnitofMeasurePurchaseTableMap::addInstanceToPool($this);
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

            if ($this->itemMasterItemsScheduledForDeletion !== null) {
                if (!$this->itemMasterItemsScheduledForDeletion->isEmpty()) {
                    foreach ($this->itemMasterItemsScheduledForDeletion as $itemMasterItem) {
                        // need to save related object because we set the relation to null
                        $itemMasterItem->save($con);
                    }
                    $this->itemMasterItemsScheduledForDeletion = null;
                }
            }

            if ($this->collItemMasterItems !== null) {
                foreach ($this->collItemMasterItems as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefVendorsScheduledForDeletion !== null) {
                if (!$this->itemXrefVendorsScheduledForDeletion->isEmpty()) {
                    foreach ($this->itemXrefVendorsScheduledForDeletion as $itemXrefVendor) {
                        // need to save related object because we set the relation to null
                        $itemXrefVendor->save($con);
                    }
                    $this->itemXrefVendorsScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefVendors !== null) {
                foreach ($this->collItemXrefVendors as $referrerFK) {
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
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomPur';
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_INTBUOMDESC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomDesc';
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomConv';
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_INTBUOMPRICBYWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomPricByWght';
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_uom_pur (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'IntbUomPur':
                        $stmt->bindValue($identifier, $this->intbuompur, PDO::PARAM_STR);
                        break;
                    case 'IntbUomDesc':
                        $stmt->bindValue($identifier, $this->intbuomdesc, PDO::PARAM_STR);
                        break;
                    case 'IntbUomConv':
                        $stmt->bindValue($identifier, $this->intbuomconv, PDO::PARAM_STR);
                        break;
                    case 'IntbUomPricByWght':
                        $stmt->bindValue($identifier, $this->intbuompricbywght, PDO::PARAM_STR);
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
        $pos = UnitofMeasurePurchaseTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIntbuompur();
                break;
            case 1:
                return $this->getIntbuomdesc();
                break;
            case 2:
                return $this->getIntbuomconv();
                break;
            case 3:
                return $this->getIntbuompricbywght();
                break;
            case 4:
                return $this->getDateupdtd();
                break;
            case 5:
                return $this->getTimeupdtd();
                break;
            case 6:
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

        if (isset($alreadyDumpedObjects['UnitofMeasurePurchase'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['UnitofMeasurePurchase'][$this->hashCode()] = true;
        $keys = UnitofMeasurePurchaseTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIntbuompur(),
            $keys[1] => $this->getIntbuomdesc(),
            $keys[2] => $this->getIntbuomconv(),
            $keys[3] => $this->getIntbuompricbywght(),
            $keys[4] => $this->getDateupdtd(),
            $keys[5] => $this->getTimeupdtd(),
            $keys[6] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collItemMasterItems) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemMasterItems';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_item_masts';
                        break;
                    default:
                        $key = 'ItemMasterItems';
                }

                $result[$key] = $this->collItemMasterItems->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefVendors) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefVendors';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'vend_item_xrefs';
                        break;
                    default:
                        $key = 'ItemXrefVendors';
                }

                $result[$key] = $this->collItemXrefVendors->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\UnitofMeasurePurchase
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = UnitofMeasurePurchaseTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\UnitofMeasurePurchase
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIntbuompur($value);
                break;
            case 1:
                $this->setIntbuomdesc($value);
                break;
            case 2:
                $this->setIntbuomconv($value);
                break;
            case 3:
                $this->setIntbuompricbywght($value);
                break;
            case 4:
                $this->setDateupdtd($value);
                break;
            case 5:
                $this->setTimeupdtd($value);
                break;
            case 6:
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
        $keys = UnitofMeasurePurchaseTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIntbuompur($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbuomdesc($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIntbuomconv($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIntbuompricbywght($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setDateupdtd($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setTimeupdtd($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setDummy($arr[$keys[6]]);
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
     * @return $this|\UnitofMeasurePurchase The current object, for fluid interface
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
        $criteria = new Criteria(UnitofMeasurePurchaseTableMap::DATABASE_NAME);

        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR)) {
            $criteria->add(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, $this->intbuompur);
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_INTBUOMDESC)) {
            $criteria->add(UnitofMeasurePurchaseTableMap::COL_INTBUOMDESC, $this->intbuomdesc);
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV)) {
            $criteria->add(UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV, $this->intbuomconv);
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_INTBUOMPRICBYWGHT)) {
            $criteria->add(UnitofMeasurePurchaseTableMap::COL_INTBUOMPRICBYWGHT, $this->intbuompricbywght);
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_DATEUPDTD)) {
            $criteria->add(UnitofMeasurePurchaseTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_TIMEUPDTD)) {
            $criteria->add(UnitofMeasurePurchaseTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(UnitofMeasurePurchaseTableMap::COL_DUMMY)) {
            $criteria->add(UnitofMeasurePurchaseTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildUnitofMeasurePurchaseQuery::create();
        $criteria->add(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, $this->intbuompur);

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
        $validPk = null !== $this->getIntbuompur();

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
        return $this->getIntbuompur();
    }

    /**
     * Generic method to set the primary key (intbuompur column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIntbuompur($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIntbuompur();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \UnitofMeasurePurchase (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntbuompur($this->getIntbuompur());
        $copyObj->setIntbuomdesc($this->getIntbuomdesc());
        $copyObj->setIntbuomconv($this->getIntbuomconv());
        $copyObj->setIntbuompricbywght($this->getIntbuompricbywght());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getItemMasterItems() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemMasterItem($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefVendors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefVendor($relObj->copy($deepCopy));
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
     * @return \UnitofMeasurePurchase Clone of current object.
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
        if ('ItemMasterItem' == $relationName) {
            $this->initItemMasterItems();
            return;
        }
        if ('ItemXrefVendor' == $relationName) {
            $this->initItemXrefVendors();
            return;
        }
    }

    /**
     * Clears out the collItemMasterItems collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemMasterItems()
     */
    public function clearItemMasterItems()
    {
        $this->collItemMasterItems = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemMasterItems collection loaded partially.
     */
    public function resetPartialItemMasterItems($v = true)
    {
        $this->collItemMasterItemsPartial = $v;
    }

    /**
     * Initializes the collItemMasterItems collection.
     *
     * By default this just sets the collItemMasterItems collection to an empty array (like clearcollItemMasterItems());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemMasterItems($overrideExisting = true)
    {
        if (null !== $this->collItemMasterItems && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemMasterItemTableMap::getTableMap()->getCollectionClassName();

        $this->collItemMasterItems = new $collectionClassName;
        $this->collItemMasterItems->setModel('\ItemMasterItem');
    }

    /**
     * Gets an array of ChildItemMasterItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildUnitofMeasurePurchase is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemMasterItem[] List of ChildItemMasterItem objects
     * @throws PropelException
     */
    public function getItemMasterItems(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemMasterItemsPartial && !$this->isNew();
        if (null === $this->collItemMasterItems || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemMasterItems) {
                // return empty collection
                $this->initItemMasterItems();
            } else {
                $collItemMasterItems = ChildItemMasterItemQuery::create(null, $criteria)
                    ->filterByUnitofMeasurePurchase($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemMasterItemsPartial && count($collItemMasterItems)) {
                        $this->initItemMasterItems(false);

                        foreach ($collItemMasterItems as $obj) {
                            if (false == $this->collItemMasterItems->contains($obj)) {
                                $this->collItemMasterItems->append($obj);
                            }
                        }

                        $this->collItemMasterItemsPartial = true;
                    }

                    return $collItemMasterItems;
                }

                if ($partial && $this->collItemMasterItems) {
                    foreach ($this->collItemMasterItems as $obj) {
                        if ($obj->isNew()) {
                            $collItemMasterItems[] = $obj;
                        }
                    }
                }

                $this->collItemMasterItems = $collItemMasterItems;
                $this->collItemMasterItemsPartial = false;
            }
        }

        return $this->collItemMasterItems;
    }

    /**
     * Sets a collection of ChildItemMasterItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemMasterItems A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildUnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setItemMasterItems(Collection $itemMasterItems, ConnectionInterface $con = null)
    {
        /** @var ChildItemMasterItem[] $itemMasterItemsToDelete */
        $itemMasterItemsToDelete = $this->getItemMasterItems(new Criteria(), $con)->diff($itemMasterItems);


        $this->itemMasterItemsScheduledForDeletion = $itemMasterItemsToDelete;

        foreach ($itemMasterItemsToDelete as $itemMasterItemRemoved) {
            $itemMasterItemRemoved->setUnitofMeasurePurchase(null);
        }

        $this->collItemMasterItems = null;
        foreach ($itemMasterItems as $itemMasterItem) {
            $this->addItemMasterItem($itemMasterItem);
        }

        $this->collItemMasterItems = $itemMasterItems;
        $this->collItemMasterItemsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemMasterItem objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemMasterItem objects.
     * @throws PropelException
     */
    public function countItemMasterItems(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemMasterItemsPartial && !$this->isNew();
        if (null === $this->collItemMasterItems || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemMasterItems) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemMasterItems());
            }

            $query = ChildItemMasterItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUnitofMeasurePurchase($this)
                ->count($con);
        }

        return count($this->collItemMasterItems);
    }

    /**
     * Method called to associate a ChildItemMasterItem object to this object
     * through the ChildItemMasterItem foreign key attribute.
     *
     * @param  ChildItemMasterItem $l ChildItemMasterItem
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function addItemMasterItem(ChildItemMasterItem $l)
    {
        if ($this->collItemMasterItems === null) {
            $this->initItemMasterItems();
            $this->collItemMasterItemsPartial = true;
        }

        if (!$this->collItemMasterItems->contains($l)) {
            $this->doAddItemMasterItem($l);

            if ($this->itemMasterItemsScheduledForDeletion and $this->itemMasterItemsScheduledForDeletion->contains($l)) {
                $this->itemMasterItemsScheduledForDeletion->remove($this->itemMasterItemsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemMasterItem $itemMasterItem The ChildItemMasterItem object to add.
     */
    protected function doAddItemMasterItem(ChildItemMasterItem $itemMasterItem)
    {
        $this->collItemMasterItems[]= $itemMasterItem;
        $itemMasterItem->setUnitofMeasurePurchase($this);
    }

    /**
     * @param  ChildItemMasterItem $itemMasterItem The ChildItemMasterItem object to remove.
     * @return $this|ChildUnitofMeasurePurchase The current object (for fluent API support)
     */
    public function removeItemMasterItem(ChildItemMasterItem $itemMasterItem)
    {
        if ($this->getItemMasterItems()->contains($itemMasterItem)) {
            $pos = $this->collItemMasterItems->search($itemMasterItem);
            $this->collItemMasterItems->remove($pos);
            if (null === $this->itemMasterItemsScheduledForDeletion) {
                $this->itemMasterItemsScheduledForDeletion = clone $this->collItemMasterItems;
                $this->itemMasterItemsScheduledForDeletion->clear();
            }
            $this->itemMasterItemsScheduledForDeletion[]= $itemMasterItem;
            $itemMasterItem->setUnitofMeasurePurchase(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this UnitofMeasurePurchase is new, it will return
     * an empty collection; or if this UnitofMeasurePurchase has previously
     * been saved, it will retrieve related ItemMasterItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in UnitofMeasurePurchase.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemMasterItem[] List of ChildItemMasterItem objects
     */
    public function getItemMasterItemsJoinUnitofMeasureSale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemMasterItemQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasureSale', $joinBehavior);

        return $this->getItemMasterItems($query, $con);
    }

    /**
     * Clears out the collItemXrefVendors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefVendors()
     */
    public function clearItemXrefVendors()
    {
        $this->collItemXrefVendors = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefVendors collection loaded partially.
     */
    public function resetPartialItemXrefVendors($v = true)
    {
        $this->collItemXrefVendorsPartial = $v;
    }

    /**
     * Initializes the collItemXrefVendors collection.
     *
     * By default this just sets the collItemXrefVendors collection to an empty array (like clearcollItemXrefVendors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefVendors($overrideExisting = true)
    {
        if (null !== $this->collItemXrefVendors && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefVendorTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefVendors = new $collectionClassName;
        $this->collItemXrefVendors->setModel('\ItemXrefVendor');
    }

    /**
     * Gets an array of ChildItemXrefVendor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildUnitofMeasurePurchase is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     * @throws PropelException
     */
    public function getItemXrefVendors(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendors) {
                // return empty collection
                $this->initItemXrefVendors();
            } else {
                $collItemXrefVendors = ChildItemXrefVendorQuery::create(null, $criteria)
                    ->filterByUnitofMeasurePurchase($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefVendorsPartial && count($collItemXrefVendors)) {
                        $this->initItemXrefVendors(false);

                        foreach ($collItemXrefVendors as $obj) {
                            if (false == $this->collItemXrefVendors->contains($obj)) {
                                $this->collItemXrefVendors->append($obj);
                            }
                        }

                        $this->collItemXrefVendorsPartial = true;
                    }

                    return $collItemXrefVendors;
                }

                if ($partial && $this->collItemXrefVendors) {
                    foreach ($this->collItemXrefVendors as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefVendors[] = $obj;
                        }
                    }
                }

                $this->collItemXrefVendors = $collItemXrefVendors;
                $this->collItemXrefVendorsPartial = false;
            }
        }

        return $this->collItemXrefVendors;
    }

    /**
     * Sets a collection of ChildItemXrefVendor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefVendors A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildUnitofMeasurePurchase The current object (for fluent API support)
     */
    public function setItemXrefVendors(Collection $itemXrefVendors, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefVendor[] $itemXrefVendorsToDelete */
        $itemXrefVendorsToDelete = $this->getItemXrefVendors(new Criteria(), $con)->diff($itemXrefVendors);


        $this->itemXrefVendorsScheduledForDeletion = $itemXrefVendorsToDelete;

        foreach ($itemXrefVendorsToDelete as $itemXrefVendorRemoved) {
            $itemXrefVendorRemoved->setUnitofMeasurePurchase(null);
        }

        $this->collItemXrefVendors = null;
        foreach ($itemXrefVendors as $itemXrefVendor) {
            $this->addItemXrefVendor($itemXrefVendor);
        }

        $this->collItemXrefVendors = $itemXrefVendors;
        $this->collItemXrefVendorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefVendor objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefVendor objects.
     * @throws PropelException
     */
    public function countItemXrefVendors(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefVendors());
            }

            $query = ChildItemXrefVendorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUnitofMeasurePurchase($this)
                ->count($con);
        }

        return count($this->collItemXrefVendors);
    }

    /**
     * Method called to associate a ChildItemXrefVendor object to this object
     * through the ChildItemXrefVendor foreign key attribute.
     *
     * @param  ChildItemXrefVendor $l ChildItemXrefVendor
     * @return $this|\UnitofMeasurePurchase The current object (for fluent API support)
     */
    public function addItemXrefVendor(ChildItemXrefVendor $l)
    {
        if ($this->collItemXrefVendors === null) {
            $this->initItemXrefVendors();
            $this->collItemXrefVendorsPartial = true;
        }

        if (!$this->collItemXrefVendors->contains($l)) {
            $this->doAddItemXrefVendor($l);

            if ($this->itemXrefVendorsScheduledForDeletion and $this->itemXrefVendorsScheduledForDeletion->contains($l)) {
                $this->itemXrefVendorsScheduledForDeletion->remove($this->itemXrefVendorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefVendor $itemXrefVendor The ChildItemXrefVendor object to add.
     */
    protected function doAddItemXrefVendor(ChildItemXrefVendor $itemXrefVendor)
    {
        $this->collItemXrefVendors[]= $itemXrefVendor;
        $itemXrefVendor->setUnitofMeasurePurchase($this);
    }

    /**
     * @param  ChildItemXrefVendor $itemXrefVendor The ChildItemXrefVendor object to remove.
     * @return $this|ChildUnitofMeasurePurchase The current object (for fluent API support)
     */
    public function removeItemXrefVendor(ChildItemXrefVendor $itemXrefVendor)
    {
        if ($this->getItemXrefVendors()->contains($itemXrefVendor)) {
            $pos = $this->collItemXrefVendors->search($itemXrefVendor);
            $this->collItemXrefVendors->remove($pos);
            if (null === $this->itemXrefVendorsScheduledForDeletion) {
                $this->itemXrefVendorsScheduledForDeletion = clone $this->collItemXrefVendors;
                $this->itemXrefVendorsScheduledForDeletion->clear();
            }
            $this->itemXrefVendorsScheduledForDeletion[]= $itemXrefVendor;
            $itemXrefVendor->setUnitofMeasurePurchase(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this UnitofMeasurePurchase is new, it will return
     * an empty collection; or if this UnitofMeasurePurchase has previously
     * been saved, it will retrieve related ItemXrefVendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in UnitofMeasurePurchase.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     */
    public function getItemXrefVendorsJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefVendorQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getItemXrefVendors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this UnitofMeasurePurchase is new, it will return
     * an empty collection; or if this UnitofMeasurePurchase has previously
     * been saved, it will retrieve related ItemXrefVendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in UnitofMeasurePurchase.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     */
    public function getItemXrefVendorsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefVendorQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getItemXrefVendors($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->intbuompur = null;
        $this->intbuomdesc = null;
        $this->intbuomconv = null;
        $this->intbuompricbywght = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
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
            if ($this->collItemMasterItems) {
                foreach ($this->collItemMasterItems as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefVendors) {
                foreach ($this->collItemXrefVendors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collItemMasterItems = null;
        $this->collItemXrefVendors = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UnitofMeasurePurchaseTableMap::DEFAULT_STRING_FORMAT);
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
