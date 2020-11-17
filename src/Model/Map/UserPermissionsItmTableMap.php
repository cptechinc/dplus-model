<?php

namespace Map;

use \UserPermissionsItm;
use \UserPermissionsItmQuery;
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
 * This class defines the structure of the 'inv_itm_perm' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class UserPermissionsItmTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.UserPermissionsItmTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_itm_perm';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\UserPermissionsItm';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'UserPermissionsItm';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the ItmpUserId field
     */
    const COL_ITMPUSERID = 'inv_itm_perm.ItmpUserId';

    /**
     * the column name for the ItmpWhse field
     */
    const COL_ITMPWHSE = 'inv_itm_perm.ItmpWhse';

    /**
     * the column name for the ItmpPrices field
     */
    const COL_ITMPPRICES = 'inv_itm_perm.ItmpPrices';

    /**
     * the column name for the ItmpCosts field
     */
    const COL_ITMPCOSTS = 'inv_itm_perm.ItmpCosts';

    /**
     * the column name for the ItmpXrefs field
     */
    const COL_ITMPXREFS = 'inv_itm_perm.ItmpXrefs';

    /**
     * the column name for the ItmpMisc field
     */
    const COL_ITMPMISC = 'inv_itm_perm.ItmpMisc';

    /**
     * the column name for the ItmpPkg field
     */
    const COL_ITMPPKG = 'inv_itm_perm.ItmpPkg';

    /**
     * the column name for the ItmpOptions field
     */
    const COL_ITMPOPTIONS = 'inv_itm_perm.ItmpOptions';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_itm_perm.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_itm_perm.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_itm_perm.dummy';

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
        self::TYPE_PHPNAME       => array('Itmpuserid', 'Itmpwhse', 'Itmpprices', 'Itmpcosts', 'Itmpxrefs', 'Itmpmisc', 'Itmppkg', 'Itmpoptions', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('itmpuserid', 'itmpwhse', 'itmpprices', 'itmpcosts', 'itmpxrefs', 'itmpmisc', 'itmppkg', 'itmpoptions', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(UserPermissionsItmTableMap::COL_ITMPUSERID, UserPermissionsItmTableMap::COL_ITMPWHSE, UserPermissionsItmTableMap::COL_ITMPPRICES, UserPermissionsItmTableMap::COL_ITMPCOSTS, UserPermissionsItmTableMap::COL_ITMPXREFS, UserPermissionsItmTableMap::COL_ITMPMISC, UserPermissionsItmTableMap::COL_ITMPPKG, UserPermissionsItmTableMap::COL_ITMPOPTIONS, UserPermissionsItmTableMap::COL_DATEUPDTD, UserPermissionsItmTableMap::COL_TIMEUPDTD, UserPermissionsItmTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ItmpUserId', 'ItmpWhse', 'ItmpPrices', 'ItmpCosts', 'ItmpXrefs', 'ItmpMisc', 'ItmpPkg', 'ItmpOptions', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Itmpuserid' => 0, 'Itmpwhse' => 1, 'Itmpprices' => 2, 'Itmpcosts' => 3, 'Itmpxrefs' => 4, 'Itmpmisc' => 5, 'Itmppkg' => 6, 'Itmpoptions' => 7, 'Dateupdtd' => 8, 'Timeupdtd' => 9, 'Dummy' => 10, ),
        self::TYPE_CAMELNAME     => array('itmpuserid' => 0, 'itmpwhse' => 1, 'itmpprices' => 2, 'itmpcosts' => 3, 'itmpxrefs' => 4, 'itmpmisc' => 5, 'itmppkg' => 6, 'itmpoptions' => 7, 'dateupdtd' => 8, 'timeupdtd' => 9, 'dummy' => 10, ),
        self::TYPE_COLNAME       => array(UserPermissionsItmTableMap::COL_ITMPUSERID => 0, UserPermissionsItmTableMap::COL_ITMPWHSE => 1, UserPermissionsItmTableMap::COL_ITMPPRICES => 2, UserPermissionsItmTableMap::COL_ITMPCOSTS => 3, UserPermissionsItmTableMap::COL_ITMPXREFS => 4, UserPermissionsItmTableMap::COL_ITMPMISC => 5, UserPermissionsItmTableMap::COL_ITMPPKG => 6, UserPermissionsItmTableMap::COL_ITMPOPTIONS => 7, UserPermissionsItmTableMap::COL_DATEUPDTD => 8, UserPermissionsItmTableMap::COL_TIMEUPDTD => 9, UserPermissionsItmTableMap::COL_DUMMY => 10, ),
        self::TYPE_FIELDNAME     => array('ItmpUserId' => 0, 'ItmpWhse' => 1, 'ItmpPrices' => 2, 'ItmpCosts' => 3, 'ItmpXrefs' => 4, 'ItmpMisc' => 5, 'ItmpPkg' => 6, 'ItmpOptions' => 7, 'DateUpdtd' => 8, 'TimeUpdtd' => 9, 'dummy' => 10, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $this->setName('inv_itm_perm');
        $this->setPhpName('UserPermissionsItm');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\UserPermissionsItm');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ItmpUserId', 'Itmpuserid', 'VARCHAR' , 'sys_login', 'UsrcId', true, 8, '');
        $this->addColumn('ItmpWhse', 'Itmpwhse', 'VARCHAR', false, 1, null);
        $this->addColumn('ItmpPrices', 'Itmpprices', 'VARCHAR', false, 1, null);
        $this->addColumn('ItmpCosts', 'Itmpcosts', 'VARCHAR', false, 1, null);
        $this->addColumn('ItmpXrefs', 'Itmpxrefs', 'VARCHAR', false, 1, null);
        $this->addColumn('ItmpMisc', 'Itmpmisc', 'VARCHAR', false, 1, null);
        $this->addColumn('ItmpPkg', 'Itmppkg', 'VARCHAR', false, 1, null);
        $this->addColumn('ItmpOptions', 'Itmpoptions', 'VARCHAR', false, 1, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('DplusUser', '\\DplusUser', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ItmpUserId',
    1 => ':UsrcId',
  ),
), null, null, null, false);
    } // buildRelations()

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itmpuserid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itmpuserid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itmpuserid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itmpuserid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itmpuserid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itmpuserid', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Itmpuserid', TableMap::TYPE_PHPNAME, $indexType)
        ];
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
        return $withPrefix ? UserPermissionsItmTableMap::CLASS_DEFAULT : UserPermissionsItmTableMap::OM_CLASS;
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
     * @return array           (UserPermissionsItm object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = UserPermissionsItmTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = UserPermissionsItmTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + UserPermissionsItmTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UserPermissionsItmTableMap::OM_CLASS;
            /** @var UserPermissionsItm $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            UserPermissionsItmTableMap::addInstanceToPool($obj, $key);
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
            $key = UserPermissionsItmTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = UserPermissionsItmTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var UserPermissionsItm $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UserPermissionsItmTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_ITMPUSERID);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_ITMPWHSE);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_ITMPPRICES);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_ITMPCOSTS);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_ITMPXREFS);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_ITMPMISC);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_ITMPPKG);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_ITMPOPTIONS);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(UserPermissionsItmTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ItmpUserId');
            $criteria->addSelectColumn($alias . '.ItmpWhse');
            $criteria->addSelectColumn($alias . '.ItmpPrices');
            $criteria->addSelectColumn($alias . '.ItmpCosts');
            $criteria->addSelectColumn($alias . '.ItmpXrefs');
            $criteria->addSelectColumn($alias . '.ItmpMisc');
            $criteria->addSelectColumn($alias . '.ItmpPkg');
            $criteria->addSelectColumn($alias . '.ItmpOptions');
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
        return Propel::getServiceContainer()->getDatabaseMap(UserPermissionsItmTableMap::DATABASE_NAME)->getTable(UserPermissionsItmTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(UserPermissionsItmTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(UserPermissionsItmTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new UserPermissionsItmTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a UserPermissionsItm or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or UserPermissionsItm object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(UserPermissionsItmTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \UserPermissionsItm) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UserPermissionsItmTableMap::DATABASE_NAME);
            $criteria->add(UserPermissionsItmTableMap::COL_ITMPUSERID, (array) $values, Criteria::IN);
        }

        $query = UserPermissionsItmQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            UserPermissionsItmTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                UserPermissionsItmTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_itm_perm table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return UserPermissionsItmQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a UserPermissionsItm or Criteria object.
     *
     * @param mixed               $criteria Criteria or UserPermissionsItm object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UserPermissionsItmTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from UserPermissionsItm object
        }


        // Set the correct dbName
        $query = UserPermissionsItmQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // UserPermissionsItmTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
UserPermissionsItmTableMap::buildTableMap();
