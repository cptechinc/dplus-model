<?php

namespace Base;

use \DplusUser as ChildDplusUser;
use \DplusUserQuery as ChildDplusUserQuery;
use \UserPermissionsItmQuery as ChildUserPermissionsItmQuery;
use \Exception;
use \PDO;
use Map\UserPermissionsItmTableMap;
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
 * Base class that represents a row from the 'inv_itm_perm' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class UserPermissionsItm implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\UserPermissionsItmTableMap';


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
     * The value for the itmpuserid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $itmpuserid;

    /**
     * The value for the itmpwhse field.
     *
     * @var        string
     */
    protected $itmpwhse;

    /**
     * The value for the itmpprices field.
     *
     * @var        string
     */
    protected $itmpprices;

    /**
     * The value for the itmpcosts field.
     *
     * @var        string
     */
    protected $itmpcosts;

    /**
     * The value for the itmpxrefs field.
     *
     * @var        string
     */
    protected $itmpxrefs;

    /**
     * The value for the itmpmisc field.
     *
     * @var        string
     */
    protected $itmpmisc;

    /**
     * The value for the itmppkg field.
     *
     * @var        string
     */
    protected $itmppkg;

    /**
     * The value for the itmpoptions field.
     *
     * @var        string
     */
    protected $itmpoptions;

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
     * @var        ChildDplusUser
     */
    protected $aDplusUser;

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
        $this->itmpuserid = '';
    }

    /**
     * Initializes internal state of Base\UserPermissionsItm object.
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
     * Compares this with another <code>UserPermissionsItm</code> instance.  If
     * <code>obj</code> is an instance of <code>UserPermissionsItm</code>, delegates to
     * <code>equals(UserPermissionsItm)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|UserPermissionsItm The current object, for fluid interface
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
     * Get the [itmpuserid] column value.
     *
     * @return string
     */
    public function getItmpuserid()
    {
        return $this->itmpuserid;
    }

    /**
     * Get the [itmpwhse] column value.
     *
     * @return string
     */
    public function getItmpwhse()
    {
        return $this->itmpwhse;
    }

    /**
     * Get the [itmpprices] column value.
     *
     * @return string
     */
    public function getItmpprices()
    {
        return $this->itmpprices;
    }

    /**
     * Get the [itmpcosts] column value.
     *
     * @return string
     */
    public function getItmpcosts()
    {
        return $this->itmpcosts;
    }

    /**
     * Get the [itmpxrefs] column value.
     *
     * @return string
     */
    public function getItmpxrefs()
    {
        return $this->itmpxrefs;
    }

    /**
     * Get the [itmpmisc] column value.
     *
     * @return string
     */
    public function getItmpmisc()
    {
        return $this->itmpmisc;
    }

    /**
     * Get the [itmppkg] column value.
     *
     * @return string
     */
    public function getItmppkg()
    {
        return $this->itmppkg;
    }

    /**
     * Get the [itmpoptions] column value.
     *
     * @return string
     */
    public function getItmpoptions()
    {
        return $this->itmpoptions;
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
     * Set the value of [itmpuserid] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setItmpuserid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itmpuserid !== $v) {
            $this->itmpuserid = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_ITMPUSERID] = true;
        }

        if ($this->aDplusUser !== null && $this->aDplusUser->getUsrcid() !== $v) {
            $this->aDplusUser = null;
        }

        return $this;
    } // setItmpuserid()

    /**
     * Set the value of [itmpwhse] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setItmpwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itmpwhse !== $v) {
            $this->itmpwhse = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_ITMPWHSE] = true;
        }

        return $this;
    } // setItmpwhse()

    /**
     * Set the value of [itmpprices] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setItmpprices($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itmpprices !== $v) {
            $this->itmpprices = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_ITMPPRICES] = true;
        }

        return $this;
    } // setItmpprices()

    /**
     * Set the value of [itmpcosts] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setItmpcosts($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itmpcosts !== $v) {
            $this->itmpcosts = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_ITMPCOSTS] = true;
        }

        return $this;
    } // setItmpcosts()

    /**
     * Set the value of [itmpxrefs] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setItmpxrefs($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itmpxrefs !== $v) {
            $this->itmpxrefs = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_ITMPXREFS] = true;
        }

        return $this;
    } // setItmpxrefs()

    /**
     * Set the value of [itmpmisc] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setItmpmisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itmpmisc !== $v) {
            $this->itmpmisc = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_ITMPMISC] = true;
        }

        return $this;
    } // setItmpmisc()

    /**
     * Set the value of [itmppkg] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setItmppkg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itmppkg !== $v) {
            $this->itmppkg = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_ITMPPKG] = true;
        }

        return $this;
    } // setItmppkg()

    /**
     * Set the value of [itmpoptions] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setItmpoptions($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itmpoptions !== $v) {
            $this->itmpoptions = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_ITMPOPTIONS] = true;
        }

        return $this;
    } // setItmpoptions()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[UserPermissionsItmTableMap::COL_DUMMY] = true;
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
            if ($this->itmpuserid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : UserPermissionsItmTableMap::translateFieldName('Itmpuserid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itmpuserid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : UserPermissionsItmTableMap::translateFieldName('Itmpwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itmpwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : UserPermissionsItmTableMap::translateFieldName('Itmpprices', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itmpprices = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : UserPermissionsItmTableMap::translateFieldName('Itmpcosts', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itmpcosts = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : UserPermissionsItmTableMap::translateFieldName('Itmpxrefs', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itmpxrefs = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : UserPermissionsItmTableMap::translateFieldName('Itmpmisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itmpmisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : UserPermissionsItmTableMap::translateFieldName('Itmppkg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itmppkg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : UserPermissionsItmTableMap::translateFieldName('Itmpoptions', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itmpoptions = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : UserPermissionsItmTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : UserPermissionsItmTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : UserPermissionsItmTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 11; // 11 = UserPermissionsItmTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\UserPermissionsItm'), 0, $e);
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
        if ($this->aDplusUser !== null && $this->itmpuserid !== $this->aDplusUser->getUsrcid()) {
            $this->aDplusUser = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(UserPermissionsItmTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildUserPermissionsItmQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aDplusUser = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see UserPermissionsItm::setDeleted()
     * @see UserPermissionsItm::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(UserPermissionsItmTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildUserPermissionsItmQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(UserPermissionsItmTableMap::DATABASE_NAME);
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
                UserPermissionsItmTableMap::addInstanceToPool($this);
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

            if ($this->aDplusUser !== null) {
                if ($this->aDplusUser->isModified() || $this->aDplusUser->isNew()) {
                    $affectedRows += $this->aDplusUser->save($con);
                }
                $this->setDplusUser($this->aDplusUser);
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
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPUSERID)) {
            $modifiedColumns[':p' . $index++]  = 'ItmpUserId';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'ItmpWhse';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPPRICES)) {
            $modifiedColumns[':p' . $index++]  = 'ItmpPrices';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPCOSTS)) {
            $modifiedColumns[':p' . $index++]  = 'ItmpCosts';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPXREFS)) {
            $modifiedColumns[':p' . $index++]  = 'ItmpXrefs';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPMISC)) {
            $modifiedColumns[':p' . $index++]  = 'ItmpMisc';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPPKG)) {
            $modifiedColumns[':p' . $index++]  = 'ItmpPkg';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPOPTIONS)) {
            $modifiedColumns[':p' . $index++]  = 'ItmpOptions';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_itm_perm (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ItmpUserId':
                        $stmt->bindValue($identifier, $this->itmpuserid, PDO::PARAM_STR);
                        break;
                    case 'ItmpWhse':
                        $stmt->bindValue($identifier, $this->itmpwhse, PDO::PARAM_STR);
                        break;
                    case 'ItmpPrices':
                        $stmt->bindValue($identifier, $this->itmpprices, PDO::PARAM_STR);
                        break;
                    case 'ItmpCosts':
                        $stmt->bindValue($identifier, $this->itmpcosts, PDO::PARAM_STR);
                        break;
                    case 'ItmpXrefs':
                        $stmt->bindValue($identifier, $this->itmpxrefs, PDO::PARAM_STR);
                        break;
                    case 'ItmpMisc':
                        $stmt->bindValue($identifier, $this->itmpmisc, PDO::PARAM_STR);
                        break;
                    case 'ItmpPkg':
                        $stmt->bindValue($identifier, $this->itmppkg, PDO::PARAM_STR);
                        break;
                    case 'ItmpOptions':
                        $stmt->bindValue($identifier, $this->itmpoptions, PDO::PARAM_STR);
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
        $pos = UserPermissionsItmTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getItmpuserid();
                break;
            case 1:
                return $this->getItmpwhse();
                break;
            case 2:
                return $this->getItmpprices();
                break;
            case 3:
                return $this->getItmpcosts();
                break;
            case 4:
                return $this->getItmpxrefs();
                break;
            case 5:
                return $this->getItmpmisc();
                break;
            case 6:
                return $this->getItmppkg();
                break;
            case 7:
                return $this->getItmpoptions();
                break;
            case 8:
                return $this->getDateupdtd();
                break;
            case 9:
                return $this->getTimeupdtd();
                break;
            case 10:
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

        if (isset($alreadyDumpedObjects['UserPermissionsItm'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['UserPermissionsItm'][$this->hashCode()] = true;
        $keys = UserPermissionsItmTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getItmpuserid(),
            $keys[1] => $this->getItmpwhse(),
            $keys[2] => $this->getItmpprices(),
            $keys[3] => $this->getItmpcosts(),
            $keys[4] => $this->getItmpxrefs(),
            $keys[5] => $this->getItmpmisc(),
            $keys[6] => $this->getItmppkg(),
            $keys[7] => $this->getItmpoptions(),
            $keys[8] => $this->getDateupdtd(),
            $keys[9] => $this->getTimeupdtd(),
            $keys[10] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aDplusUser) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'dplusUser';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'sys_login';
                        break;
                    default:
                        $key = 'DplusUser';
                }

                $result[$key] = $this->aDplusUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\UserPermissionsItm
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = UserPermissionsItmTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\UserPermissionsItm
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setItmpuserid($value);
                break;
            case 1:
                $this->setItmpwhse($value);
                break;
            case 2:
                $this->setItmpprices($value);
                break;
            case 3:
                $this->setItmpcosts($value);
                break;
            case 4:
                $this->setItmpxrefs($value);
                break;
            case 5:
                $this->setItmpmisc($value);
                break;
            case 6:
                $this->setItmppkg($value);
                break;
            case 7:
                $this->setItmpoptions($value);
                break;
            case 8:
                $this->setDateupdtd($value);
                break;
            case 9:
                $this->setTimeupdtd($value);
                break;
            case 10:
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
        $keys = UserPermissionsItmTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setItmpuserid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setItmpwhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setItmpprices($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setItmpcosts($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setItmpxrefs($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setItmpmisc($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setItmppkg($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setItmpoptions($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setDateupdtd($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setTimeupdtd($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setDummy($arr[$keys[10]]);
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
     * @return $this|\UserPermissionsItm The current object, for fluid interface
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
        $criteria = new Criteria(UserPermissionsItmTableMap::DATABASE_NAME);

        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPUSERID)) {
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPUSERID, $this->itmpuserid);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPWHSE)) {
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPWHSE, $this->itmpwhse);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPPRICES)) {
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPPRICES, $this->itmpprices);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPCOSTS)) {
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPCOSTS, $this->itmpcosts);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPXREFS)) {
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPXREFS, $this->itmpxrefs);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPMISC)) {
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPMISC, $this->itmpmisc);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPPKG)) {
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPPKG, $this->itmppkg);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_ITMPOPTIONS)) {
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPOPTIONS, $this->itmpoptions);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_DATEUPDTD)) {
            $criteria->add(UserPermissionsItmTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_TIMEUPDTD)) {
            $criteria->add(UserPermissionsItmTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(UserPermissionsItmTableMap::COL_DUMMY)) {
            $criteria->add(UserPermissionsItmTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildUserPermissionsItmQuery::create();
        $criteria->add(UserPermissionsItmTableMap::COL_ITMPUSERID, $this->itmpuserid);

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
        $validPk = null !== $this->getItmpuserid();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation logm to table sys_login
        if ($this->aDplusUser && $hash = spl_object_hash($this->aDplusUser)) {
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
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getItmpuserid();
    }

    /**
     * Generic method to set the primary key (itmpuserid column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setItmpuserid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getItmpuserid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \UserPermissionsItm (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setItmpuserid($this->getItmpuserid());
        $copyObj->setItmpwhse($this->getItmpwhse());
        $copyObj->setItmpprices($this->getItmpprices());
        $copyObj->setItmpcosts($this->getItmpcosts());
        $copyObj->setItmpxrefs($this->getItmpxrefs());
        $copyObj->setItmpmisc($this->getItmpmisc());
        $copyObj->setItmppkg($this->getItmppkg());
        $copyObj->setItmpoptions($this->getItmpoptions());
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
     * @return \UserPermissionsItm Clone of current object.
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
     * Declares an association between this object and a ChildDplusUser object.
     *
     * @param  ChildDplusUser $v
     * @return $this|\UserPermissionsItm The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDplusUser(ChildDplusUser $v = null)
    {
        if ($v === null) {
            $this->setItmpuserid('');
        } else {
            $this->setItmpuserid($v->getUsrcid());
        }

        $this->aDplusUser = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setUserPermissionsItm($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildDplusUser object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildDplusUser The associated ChildDplusUser object.
     * @throws PropelException
     */
    public function getDplusUser(ConnectionInterface $con = null)
    {
        if ($this->aDplusUser === null && (($this->itmpuserid !== "" && $this->itmpuserid !== null))) {
            $this->aDplusUser = ChildDplusUserQuery::create()->findPk($this->itmpuserid, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aDplusUser->setUserPermissionsItm($this);
        }

        return $this->aDplusUser;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aDplusUser) {
            $this->aDplusUser->removeUserPermissionsItm($this);
        }
        $this->itmpuserid = null;
        $this->itmpwhse = null;
        $this->itmpprices = null;
        $this->itmpcosts = null;
        $this->itmpxrefs = null;
        $this->itmpmisc = null;
        $this->itmppkg = null;
        $this->itmpoptions = null;
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

        $this->aDplusUser = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UserPermissionsItmTableMap::DEFAULT_STRING_FORMAT);
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
