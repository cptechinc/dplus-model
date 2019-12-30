<?php

namespace Map;

use \CountryCodes;
use \CountryCodesQuery;
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
 * This class defines the structure of the 'country_codes' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CountryCodesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CountryCodesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'country_codes';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CountryCodes';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CountryCodes';

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
     * the column name for the CtryIsoAlpha3 field
     */
    const COL_CTRYISOALPHA3 = 'country_codes.CtryIsoAlpha3';

    /**
     * the column name for the CtryDesc field
     */
    const COL_CTRYDESC = 'country_codes.CtryDesc';

    /**
     * the column name for the CtryIsoAlpha2 field
     */
    const COL_CTRYISOALPHA2 = 'country_codes.CtryIsoAlpha2';

    /**
     * the column name for the CtryIsoNumeric field
     */
    const COL_CTRYISONUMERIC = 'country_codes.CtryIsoNumeric';

    /**
     * the column name for the CtryCustomCode field
     */
    const COL_CTRYCUSTOMCODE = 'country_codes.CtryCustomCode';

    /**
     * the column name for the CtryExchRate field
     */
    const COL_CTRYEXCHRATE = 'country_codes.CtryExchRate';

    /**
     * the column name for the CtryDate field
     */
    const COL_CTRYDATE = 'country_codes.CtryDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'country_codes.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'country_codes.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'country_codes.dummy';

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
        self::TYPE_PHPNAME       => array('Ctryisoalpha3', 'Ctrydesc', 'Ctryisoalpha2', 'Ctryisonumeric', 'Ctrycustomcode', 'Ctryexchrate', 'Ctrydate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('ctryisoalpha3', 'ctrydesc', 'ctryisoalpha2', 'ctryisonumeric', 'ctrycustomcode', 'ctryexchrate', 'ctrydate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(CountryCodesTableMap::COL_CTRYISOALPHA3, CountryCodesTableMap::COL_CTRYDESC, CountryCodesTableMap::COL_CTRYISOALPHA2, CountryCodesTableMap::COL_CTRYISONUMERIC, CountryCodesTableMap::COL_CTRYCUSTOMCODE, CountryCodesTableMap::COL_CTRYEXCHRATE, CountryCodesTableMap::COL_CTRYDATE, CountryCodesTableMap::COL_DATEUPDTD, CountryCodesTableMap::COL_TIMEUPDTD, CountryCodesTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('CtryIsoAlpha3', 'CtryDesc', 'CtryIsoAlpha2', 'CtryIsoNumeric', 'CtryCustomCode', 'CtryExchRate', 'CtryDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Ctryisoalpha3' => 0, 'Ctrydesc' => 1, 'Ctryisoalpha2' => 2, 'Ctryisonumeric' => 3, 'Ctrycustomcode' => 4, 'Ctryexchrate' => 5, 'Ctrydate' => 6, 'Dateupdtd' => 7, 'Timeupdtd' => 8, 'Dummy' => 9, ),
        self::TYPE_CAMELNAME     => array('ctryisoalpha3' => 0, 'ctrydesc' => 1, 'ctryisoalpha2' => 2, 'ctryisonumeric' => 3, 'ctrycustomcode' => 4, 'ctryexchrate' => 5, 'ctrydate' => 6, 'dateupdtd' => 7, 'timeupdtd' => 8, 'dummy' => 9, ),
        self::TYPE_COLNAME       => array(CountryCodesTableMap::COL_CTRYISOALPHA3 => 0, CountryCodesTableMap::COL_CTRYDESC => 1, CountryCodesTableMap::COL_CTRYISOALPHA2 => 2, CountryCodesTableMap::COL_CTRYISONUMERIC => 3, CountryCodesTableMap::COL_CTRYCUSTOMCODE => 4, CountryCodesTableMap::COL_CTRYEXCHRATE => 5, CountryCodesTableMap::COL_CTRYDATE => 6, CountryCodesTableMap::COL_DATEUPDTD => 7, CountryCodesTableMap::COL_TIMEUPDTD => 8, CountryCodesTableMap::COL_DUMMY => 9, ),
        self::TYPE_FIELDNAME     => array('CtryIsoAlpha3' => 0, 'CtryDesc' => 1, 'CtryIsoAlpha2' => 2, 'CtryIsoNumeric' => 3, 'CtryCustomCode' => 4, 'CtryExchRate' => 5, 'CtryDate' => 6, 'DateUpdtd' => 7, 'TimeUpdtd' => 8, 'dummy' => 9, ),
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
        $this->setName('country_codes');
        $this->setPhpName('CountryCodes');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CountryCodes');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CtryIsoAlpha3', 'Ctryisoalpha3', 'VARCHAR', true, 3, '');
        $this->addColumn('CtryDesc', 'Ctrydesc', 'VARCHAR', false, 25, null);
        $this->addColumn('CtryIsoAlpha2', 'Ctryisoalpha2', 'VARCHAR', false, 2, null);
        $this->addColumn('CtryIsoNumeric', 'Ctryisonumeric', 'INTEGER', false, 3, null);
        $this->addColumn('CtryCustomCode', 'Ctrycustomcode', 'VARCHAR', false, 4, null);
        $this->addColumn('CtryExchRate', 'Ctryexchrate', 'DECIMAL', false, 20, null);
        $this->addColumn('CtryDate', 'Ctrydate', 'VARCHAR', false, 8, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ctryisoalpha3', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ctryisoalpha3', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ctryisoalpha3', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ctryisoalpha3', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ctryisoalpha3', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ctryisoalpha3', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Ctryisoalpha3', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CountryCodesTableMap::CLASS_DEFAULT : CountryCodesTableMap::OM_CLASS;
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
     * @return array           (CountryCodes object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CountryCodesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CountryCodesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CountryCodesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CountryCodesTableMap::OM_CLASS;
            /** @var CountryCodes $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CountryCodesTableMap::addInstanceToPool($obj, $key);
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
            $key = CountryCodesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CountryCodesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CountryCodes $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CountryCodesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CountryCodesTableMap::COL_CTRYISOALPHA3);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_CTRYDESC);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_CTRYISOALPHA2);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_CTRYISONUMERIC);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_CTRYCUSTOMCODE);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_CTRYEXCHRATE);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_CTRYDATE);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(CountryCodesTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.CtryIsoAlpha3');
            $criteria->addSelectColumn($alias . '.CtryDesc');
            $criteria->addSelectColumn($alias . '.CtryIsoAlpha2');
            $criteria->addSelectColumn($alias . '.CtryIsoNumeric');
            $criteria->addSelectColumn($alias . '.CtryCustomCode');
            $criteria->addSelectColumn($alias . '.CtryExchRate');
            $criteria->addSelectColumn($alias . '.CtryDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(CountryCodesTableMap::DATABASE_NAME)->getTable(CountryCodesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CountryCodesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CountryCodesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CountryCodesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CountryCodes or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CountryCodes object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CountryCodesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CountryCodes) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CountryCodesTableMap::DATABASE_NAME);
            $criteria->add(CountryCodesTableMap::COL_CTRYISOALPHA3, (array) $values, Criteria::IN);
        }

        $query = CountryCodesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CountryCodesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CountryCodesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the country_codes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CountryCodesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CountryCodes or Criteria object.
     *
     * @param mixed               $criteria Criteria or CountryCodes object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CountryCodesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CountryCodes object
        }


        // Set the correct dbName
        $query = CountryCodesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CountryCodesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CountryCodesTableMap::buildTableMap();
