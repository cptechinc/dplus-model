<?php

namespace Map;

use \ConfigKt;
use \ConfigKtQuery;
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
 * This class defines the structure of the 'kt_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigKtTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigKtTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'kt_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigKt';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigKt';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the KttbConfKey field
     */
    const COL_KTTBCONFKEY = 'kt_config.KttbConfKey';

    /**
     * the column name for the KttbConfEditSo field
     */
    const COL_KTTBCONFEDITSO = 'kt_config.KttbConfEditSo';

    /**
     * the column name for the KttbConfValu field
     */
    const COL_KTTBCONFVALU = 'kt_config.KttbConfValu';

    /**
     * the column name for the KttbConfEntryDecPos field
     */
    const COL_KTTBCONFENTRYDECPOS = 'kt_config.KttbConfEntryDecPos';

    /**
     * the column name for the KttbConfAllowKitInKit field
     */
    const COL_KTTBCONFALLOWKITINKIT = 'kt_config.KttbConfAllowKitInKit';

    /**
     * the column name for the KttbConfBackordrKitComp field
     */
    const COL_KTTBCONFBACKORDRKITCOMP = 'kt_config.KttbConfBackordrKitComp';

    /**
     * the column name for the KttbConfFreeOrTag field
     */
    const COL_KTTBCONFFREEORTAG = 'kt_config.KttbConfFreeOrTag';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'kt_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'kt_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'kt_config.dummy';

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
        self::TYPE_PHPNAME       => array('Kttbconfkey', 'Kttbconfeditso', 'Kttbconfvalu', 'Kttbconfentrydecpos', 'Kttbconfallowkitinkit', 'Kttbconfbackordrkitcomp', 'Kttbconffreeortag', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('kttbconfkey', 'kttbconfeditso', 'kttbconfvalu', 'kttbconfentrydecpos', 'kttbconfallowkitinkit', 'kttbconfbackordrkitcomp', 'kttbconffreeortag', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigKtTableMap::COL_KTTBCONFKEY, ConfigKtTableMap::COL_KTTBCONFEDITSO, ConfigKtTableMap::COL_KTTBCONFVALU, ConfigKtTableMap::COL_KTTBCONFENTRYDECPOS, ConfigKtTableMap::COL_KTTBCONFALLOWKITINKIT, ConfigKtTableMap::COL_KTTBCONFBACKORDRKITCOMP, ConfigKtTableMap::COL_KTTBCONFFREEORTAG, ConfigKtTableMap::COL_DATEUPDTD, ConfigKtTableMap::COL_TIMEUPDTD, ConfigKtTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('KttbConfKey', 'KttbConfEditSo', 'KttbConfValu', 'KttbConfEntryDecPos', 'KttbConfAllowKitInKit', 'KttbConfBackordrKitComp', 'KttbConfFreeOrTag', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Kttbconfkey' => 0, 'Kttbconfeditso' => 1, 'Kttbconfvalu' => 2, 'Kttbconfentrydecpos' => 3, 'Kttbconfallowkitinkit' => 4, 'Kttbconfbackordrkitcomp' => 5, 'Kttbconffreeortag' => 6, 'Dateupdtd' => 7, 'Timeupdtd' => 8, 'Dummy' => 9, ),
        self::TYPE_CAMELNAME     => array('kttbconfkey' => 0, 'kttbconfeditso' => 1, 'kttbconfvalu' => 2, 'kttbconfentrydecpos' => 3, 'kttbconfallowkitinkit' => 4, 'kttbconfbackordrkitcomp' => 5, 'kttbconffreeortag' => 6, 'dateupdtd' => 7, 'timeupdtd' => 8, 'dummy' => 9, ),
        self::TYPE_COLNAME       => array(ConfigKtTableMap::COL_KTTBCONFKEY => 0, ConfigKtTableMap::COL_KTTBCONFEDITSO => 1, ConfigKtTableMap::COL_KTTBCONFVALU => 2, ConfigKtTableMap::COL_KTTBCONFENTRYDECPOS => 3, ConfigKtTableMap::COL_KTTBCONFALLOWKITINKIT => 4, ConfigKtTableMap::COL_KTTBCONFBACKORDRKITCOMP => 5, ConfigKtTableMap::COL_KTTBCONFFREEORTAG => 6, ConfigKtTableMap::COL_DATEUPDTD => 7, ConfigKtTableMap::COL_TIMEUPDTD => 8, ConfigKtTableMap::COL_DUMMY => 9, ),
        self::TYPE_FIELDNAME     => array('KttbConfKey' => 0, 'KttbConfEditSo' => 1, 'KttbConfValu' => 2, 'KttbConfEntryDecPos' => 3, 'KttbConfAllowKitInKit' => 4, 'KttbConfBackordrKitComp' => 5, 'KttbConfFreeOrTag' => 6, 'DateUpdtd' => 7, 'TimeUpdtd' => 8, 'dummy' => 9, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $this->setName('kt_config');
        $this->setPhpName('ConfigKt');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigKt');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('KttbConfKey', 'Kttbconfkey', 'INTEGER', true, 1, 0);
        $this->addColumn('KttbConfEditSo', 'Kttbconfeditso', 'VARCHAR', false, 1, null);
        $this->addColumn('KttbConfValu', 'Kttbconfvalu', 'VARCHAR', false, 1, null);
        $this->addColumn('KttbConfEntryDecPos', 'Kttbconfentrydecpos', 'INTEGER', false, 1, null);
        $this->addColumn('KttbConfAllowKitInKit', 'Kttbconfallowkitinkit', 'VARCHAR', false, 1, null);
        $this->addColumn('KttbConfBackordrKitComp', 'Kttbconfbackordrkitcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('KttbConfFreeOrTag', 'Kttbconffreeortag', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Kttbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Kttbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Kttbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Kttbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Kttbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Kttbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Kttbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigKtTableMap::CLASS_DEFAULT : ConfigKtTableMap::OM_CLASS;
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
     * @return array           (ConfigKt object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigKtTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigKtTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigKtTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigKtTableMap::OM_CLASS;
            /** @var ConfigKt $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigKtTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigKtTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigKtTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigKt $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigKtTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigKtTableMap::COL_KTTBCONFKEY);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_KTTBCONFEDITSO);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_KTTBCONFVALU);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_KTTBCONFENTRYDECPOS);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_KTTBCONFALLOWKITINKIT);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_KTTBCONFBACKORDRKITCOMP);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_KTTBCONFFREEORTAG);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigKtTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.KttbConfKey');
            $criteria->addSelectColumn($alias . '.KttbConfEditSo');
            $criteria->addSelectColumn($alias . '.KttbConfValu');
            $criteria->addSelectColumn($alias . '.KttbConfEntryDecPos');
            $criteria->addSelectColumn($alias . '.KttbConfAllowKitInKit');
            $criteria->addSelectColumn($alias . '.KttbConfBackordrKitComp');
            $criteria->addSelectColumn($alias . '.KttbConfFreeOrTag');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigKtTableMap::DATABASE_NAME)->getTable(ConfigKtTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigKtTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigKtTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigKtTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigKt or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigKt object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigKtTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigKt) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigKtTableMap::DATABASE_NAME);
            $criteria->add(ConfigKtTableMap::COL_KTTBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigKtQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigKtTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigKtTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the kt_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigKtQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigKt or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigKt object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigKtTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigKt object
        }


        // Set the correct dbName
        $query = ConfigKtQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigKtTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigKtTableMap::buildTableMap();
