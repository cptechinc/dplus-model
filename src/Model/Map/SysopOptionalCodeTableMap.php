<?php

namespace Map;

use \SysopOptionalCode;
use \SysopOptionalCodeQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'sys_opt_optcode' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SysopOptionalCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SysopOptionalCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'sys_opt_optcode';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SysopOptionalCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SysopOptionalCode';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the OptnSystem field
     */
    const COL_OPTNSYSTEM = 'sys_opt_optcode.OptnSystem';

    /**
     * the column name for the OptnCode field
     */
    const COL_OPTNCODE = 'sys_opt_optcode.OptnCode';

    /**
     * the column name for the OptcId field
     */
    const COL_OPTCID = 'sys_opt_optcode.OptcId';

    /**
     * the column name for the OptcDesc field
     */
    const COL_OPTCDESC = 'sys_opt_optcode.OptcDesc';

    /**
     * the column name for the OptcDesc2 field
     */
    const COL_OPTCDESC2 = 'sys_opt_optcode.OptcDesc2';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'sys_opt_optcode.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'sys_opt_optcode.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'sys_opt_optcode.dummy';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Optnsystem', 'Optncode', 'Optcid', 'Optcdesc', 'Optcdesc2', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('optnsystem', 'optncode', 'optcid', 'optcdesc', 'optcdesc2', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SysopOptionalCodeTableMap::COL_OPTNSYSTEM, SysopOptionalCodeTableMap::COL_OPTNCODE, SysopOptionalCodeTableMap::COL_OPTCID, SysopOptionalCodeTableMap::COL_OPTCDESC, SysopOptionalCodeTableMap::COL_OPTCDESC2, SysopOptionalCodeTableMap::COL_DATEUPDTD, SysopOptionalCodeTableMap::COL_TIMEUPDTD, SysopOptionalCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OptnSystem', 'OptnCode', 'OptcId', 'OptcDesc', 'OptcDesc2', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Optnsystem' => 0, 'Optncode' => 1, 'Optcid' => 2, 'Optcdesc' => 3, 'Optcdesc2' => 4, 'Dateupdtd' => 5, 'Timeupdtd' => 6, 'Dummy' => 7, ),
        self::TYPE_CAMELNAME     => array('optnsystem' => 0, 'optncode' => 1, 'optcid' => 2, 'optcdesc' => 3, 'optcdesc2' => 4, 'dateupdtd' => 5, 'timeupdtd' => 6, 'dummy' => 7, ),
        self::TYPE_COLNAME       => array(SysopOptionalCodeTableMap::COL_OPTNSYSTEM => 0, SysopOptionalCodeTableMap::COL_OPTNCODE => 1, SysopOptionalCodeTableMap::COL_OPTCID => 2, SysopOptionalCodeTableMap::COL_OPTCDESC => 3, SysopOptionalCodeTableMap::COL_OPTCDESC2 => 4, SysopOptionalCodeTableMap::COL_DATEUPDTD => 5, SysopOptionalCodeTableMap::COL_TIMEUPDTD => 6, SysopOptionalCodeTableMap::COL_DUMMY => 7, ),
        self::TYPE_FIELDNAME     => array('OptnSystem' => 0, 'OptnCode' => 1, 'OptcId' => 2, 'OptcDesc' => 3, 'OptcDesc2' => 4, 'DateUpdtd' => 5, 'TimeUpdtd' => 6, 'dummy' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('sys_opt_optcode');
        $this->setPhpName('SysopOptionalCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SysopOptionalCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OptnSystem', 'Optnsystem', 'VARCHAR', true, 2, '');
        $this->addPrimaryKey('OptnCode', 'Optncode', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('OptcId', 'Optcid', 'VARCHAR', true, 30, '');
        $this->addColumn('OptcDesc', 'Optcdesc', 'VARCHAR', false, 30, null);
        $this->addColumn('OptcDesc2', 'Optcdesc2', 'VARCHAR', false, 30, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \SysopOptionalCode $obj A \SysopOptionalCode object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOptnsystem() || is_scalar($obj->getOptnsystem()) || is_callable([$obj->getOptnsystem(), '__toString']) ? (string) $obj->getOptnsystem() : $obj->getOptnsystem()), (null === $obj->getOptncode() || is_scalar($obj->getOptncode()) || is_callable([$obj->getOptncode(), '__toString']) ? (string) $obj->getOptncode() : $obj->getOptncode()), (null === $obj->getOptcid() || is_scalar($obj->getOptcid()) || is_callable([$obj->getOptcid(), '__toString']) ? (string) $obj->getOptcid() : $obj->getOptcid())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \SysopOptionalCode object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SysopOptionalCode) {
                $key = serialize([(null === $value->getOptnsystem() || is_scalar($value->getOptnsystem()) || is_callable([$value->getOptnsystem(), '__toString']) ? (string) $value->getOptnsystem() : $value->getOptnsystem()), (null === $value->getOptncode() || is_scalar($value->getOptncode()) || is_callable([$value->getOptncode(), '__toString']) ? (string) $value->getOptncode() : $value->getOptncode()), (null === $value->getOptcid() || is_scalar($value->getOptcid()) || is_callable([$value->getOptcid(), '__toString']) ? (string) $value->getOptcid() : $value->getOptcid())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SysopOptionalCode object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Optcid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Optcid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Optcid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Optcid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Optcid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Optcid', TableMap::TYPE_PHPNAME, $indexType)])]);
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Optcid', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? SysopOptionalCodeTableMap::CLASS_DEFAULT : SysopOptionalCodeTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (SysopOptionalCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SysopOptionalCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SysopOptionalCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SysopOptionalCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SysopOptionalCodeTableMap::OM_CLASS;
            /** @var SysopOptionalCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SysopOptionalCodeTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SysopOptionalCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SysopOptionalCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SysopOptionalCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SysopOptionalCodeTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SysopOptionalCodeTableMap::COL_OPTNSYSTEM);
            $criteria->addSelectColumn(SysopOptionalCodeTableMap::COL_OPTNCODE);
            $criteria->addSelectColumn(SysopOptionalCodeTableMap::COL_OPTCID);
            $criteria->addSelectColumn(SysopOptionalCodeTableMap::COL_OPTCDESC);
            $criteria->addSelectColumn(SysopOptionalCodeTableMap::COL_OPTCDESC2);
            $criteria->addSelectColumn(SysopOptionalCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SysopOptionalCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SysopOptionalCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OptnSystem');
            $criteria->addSelectColumn($alias . '.OptnCode');
            $criteria->addSelectColumn($alias . '.OptcId');
            $criteria->addSelectColumn($alias . '.OptcDesc');
            $criteria->addSelectColumn($alias . '.OptcDesc2');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(SysopOptionalCodeTableMap::DATABASE_NAME)->getTable(SysopOptionalCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SysopOptionalCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SysopOptionalCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SysopOptionalCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SysopOptionalCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SysopOptionalCode object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SysopOptionalCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SysopOptionalCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SysopOptionalCodeTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SysopOptionalCodeTableMap::COL_OPTNSYSTEM, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SysopOptionalCodeTableMap::COL_OPTNCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SysopOptionalCodeTableMap::COL_OPTCID, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = SysopOptionalCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SysopOptionalCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SysopOptionalCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the sys_opt_optcode table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SysopOptionalCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SysopOptionalCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or SysopOptionalCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SysopOptionalCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SysopOptionalCode object
        }


        // Set the correct dbName
        $query = SysopOptionalCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SysopOptionalCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SysopOptionalCodeTableMap::buildTableMap();
