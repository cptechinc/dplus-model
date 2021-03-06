<?php

namespace Map;

use \TariffCode;
use \TariffCodeQuery;
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
 * This class defines the structure of the 'inv_tari_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TariffCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TariffCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_tari_code';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TariffCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TariffCode';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the IntbTariCode field
     */
    const COL_INTBTARICODE = 'inv_tari_code.IntbTariCode';

    /**
     * the column name for the IntbTariNbr field
     */
    const COL_INTBTARINBR = 'inv_tari_code.IntbTariNbr';

    /**
     * the column name for the IntbTariDesc field
     */
    const COL_INTBTARIDESC = 'inv_tari_code.IntbTariDesc';

    /**
     * the column name for the IntbTariDutyRatePct field
     */
    const COL_INTBTARIDUTYRATEPCT = 'inv_tari_code.IntbTariDutyRatePct';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_tari_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_tari_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_tari_code.dummy';

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
        self::TYPE_PHPNAME       => array('Intbtaricode', 'Intbtarinbr', 'Intbtaridesc', 'Intbtaridutyratepct', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('intbtaricode', 'intbtarinbr', 'intbtaridesc', 'intbtaridutyratepct', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(TariffCodeTableMap::COL_INTBTARICODE, TariffCodeTableMap::COL_INTBTARINBR, TariffCodeTableMap::COL_INTBTARIDESC, TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT, TariffCodeTableMap::COL_DATEUPDTD, TariffCodeTableMap::COL_TIMEUPDTD, TariffCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('IntbTariCode', 'IntbTariNbr', 'IntbTariDesc', 'IntbTariDutyRatePct', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Intbtaricode' => 0, 'Intbtarinbr' => 1, 'Intbtaridesc' => 2, 'Intbtaridutyratepct' => 3, 'Dateupdtd' => 4, 'Timeupdtd' => 5, 'Dummy' => 6, ),
        self::TYPE_CAMELNAME     => array('intbtaricode' => 0, 'intbtarinbr' => 1, 'intbtaridesc' => 2, 'intbtaridutyratepct' => 3, 'dateupdtd' => 4, 'timeupdtd' => 5, 'dummy' => 6, ),
        self::TYPE_COLNAME       => array(TariffCodeTableMap::COL_INTBTARICODE => 0, TariffCodeTableMap::COL_INTBTARINBR => 1, TariffCodeTableMap::COL_INTBTARIDESC => 2, TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT => 3, TariffCodeTableMap::COL_DATEUPDTD => 4, TariffCodeTableMap::COL_TIMEUPDTD => 5, TariffCodeTableMap::COL_DUMMY => 6, ),
        self::TYPE_FIELDNAME     => array('IntbTariCode' => 0, 'IntbTariNbr' => 1, 'IntbTariDesc' => 2, 'IntbTariDutyRatePct' => 3, 'DateUpdtd' => 4, 'TimeUpdtd' => 5, 'dummy' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
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
        $this->setName('inv_tari_code');
        $this->setPhpName('TariffCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TariffCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbTariCode', 'Intbtaricode', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbTariNbr', 'Intbtarinbr', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbTariDesc', 'Intbtaridesc', 'VARCHAR', false, 30, null);
        $this->addColumn('IntbTariDutyRatePct', 'Intbtaridutyratepct', 'DECIMAL', false, 20, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TariffCodeTableMap::CLASS_DEFAULT : TariffCodeTableMap::OM_CLASS;
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
     * @return array           (TariffCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TariffCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TariffCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TariffCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TariffCodeTableMap::OM_CLASS;
            /** @var TariffCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TariffCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = TariffCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TariffCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TariffCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TariffCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TariffCodeTableMap::COL_INTBTARICODE);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_INTBTARINBR);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_INTBTARIDESC);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbTariCode');
            $criteria->addSelectColumn($alias . '.IntbTariNbr');
            $criteria->addSelectColumn($alias . '.IntbTariDesc');
            $criteria->addSelectColumn($alias . '.IntbTariDutyRatePct');
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
        return Propel::getServiceContainer()->getDatabaseMap(TariffCodeTableMap::DATABASE_NAME)->getTable(TariffCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TariffCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TariffCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TariffCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TariffCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TariffCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TariffCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TariffCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TariffCodeTableMap::DATABASE_NAME);
            $criteria->add(TariffCodeTableMap::COL_INTBTARICODE, (array) $values, Criteria::IN);
        }

        $query = TariffCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TariffCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TariffCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_tari_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TariffCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TariffCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or TariffCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TariffCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TariffCode object
        }


        // Set the correct dbName
        $query = TariffCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TariffCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TariffCodeTableMap::buildTableMap();
