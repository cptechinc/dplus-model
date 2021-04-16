<?php

namespace Map;

use \UnitofMeasurePurchase;
use \UnitofMeasurePurchaseQuery;
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
 * This class defines the structure of the 'inv_uom_pur' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class UnitofMeasurePurchaseTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.UnitofMeasurePurchaseTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_uom_pur';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\UnitofMeasurePurchase';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'UnitofMeasurePurchase';

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
     * the column name for the IntbUomPur field
     */
    const COL_INTBUOMPUR = 'inv_uom_pur.IntbUomPur';

    /**
     * the column name for the IntbUomDesc field
     */
    const COL_INTBUOMDESC = 'inv_uom_pur.IntbUomDesc';

    /**
     * the column name for the IntbUomConv field
     */
    const COL_INTBUOMCONV = 'inv_uom_pur.IntbUomConv';

    /**
     * the column name for the IntbUomPricByWght field
     */
    const COL_INTBUOMPRICBYWGHT = 'inv_uom_pur.IntbUomPricByWght';

    /**
     * the column name for the IntbUomStockByCase field
     */
    const COL_INTBUOMSTOCKBYCASE = 'inv_uom_pur.IntbUomStockByCase';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_uom_pur.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_uom_pur.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_uom_pur.dummy';

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
        self::TYPE_PHPNAME       => array('Intbuompur', 'Intbuomdesc', 'Intbuomconv', 'Intbuompricbywght', 'IntbUomStockByCase', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('intbuompur', 'intbuomdesc', 'intbuomconv', 'intbuompricbywght', 'intbUomStockByCase', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, UnitofMeasurePurchaseTableMap::COL_INTBUOMDESC, UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV, UnitofMeasurePurchaseTableMap::COL_INTBUOMPRICBYWGHT, UnitofMeasurePurchaseTableMap::COL_INTBUOMSTOCKBYCASE, UnitofMeasurePurchaseTableMap::COL_DATEUPDTD, UnitofMeasurePurchaseTableMap::COL_TIMEUPDTD, UnitofMeasurePurchaseTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('IntbUomPur', 'IntbUomDesc', 'IntbUomConv', 'IntbUomPricByWght', 'IntbUomStockByCase', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Intbuompur' => 0, 'Intbuomdesc' => 1, 'Intbuomconv' => 2, 'Intbuompricbywght' => 3, 'IntbUomStockByCase' => 4, 'Dateupdtd' => 5, 'Timeupdtd' => 6, 'Dummy' => 7, ),
        self::TYPE_CAMELNAME     => array('intbuompur' => 0, 'intbuomdesc' => 1, 'intbuomconv' => 2, 'intbuompricbywght' => 3, 'intbUomStockByCase' => 4, 'dateupdtd' => 5, 'timeupdtd' => 6, 'dummy' => 7, ),
        self::TYPE_COLNAME       => array(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR => 0, UnitofMeasurePurchaseTableMap::COL_INTBUOMDESC => 1, UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV => 2, UnitofMeasurePurchaseTableMap::COL_INTBUOMPRICBYWGHT => 3, UnitofMeasurePurchaseTableMap::COL_INTBUOMSTOCKBYCASE => 4, UnitofMeasurePurchaseTableMap::COL_DATEUPDTD => 5, UnitofMeasurePurchaseTableMap::COL_TIMEUPDTD => 6, UnitofMeasurePurchaseTableMap::COL_DUMMY => 7, ),
        self::TYPE_FIELDNAME     => array('IntbUomPur' => 0, 'IntbUomDesc' => 1, 'IntbUomConv' => 2, 'IntbUomPricByWght' => 3, 'IntbUomStockByCase' => 4, 'DateUpdtd' => 5, 'TimeUpdtd' => 6, 'dummy' => 7, ),
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
        $this->setName('inv_uom_pur');
        $this->setPhpName('UnitofMeasurePurchase');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\UnitofMeasurePurchase');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbUomPur', 'Intbuompur', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbUomDesc', 'Intbuomdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbUomConv', 'Intbuomconv', 'DECIMAL', false, 20, null);
        $this->addColumn('IntbUomPricByWght', 'Intbuompricbywght', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbUomStockByCase', 'IntbUomStockByCase', 'VARCHAR', false, 1, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbUomPur',
    1 => ':IntbUomPur',
  ),
), null, null, 'ItemMasterItems', false);
        $this->addRelation('ItemXrefVendor', '\\ItemXrefVendor', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbUomPur',
    1 => ':IntbUomPur',
  ),
), null, null, 'ItemXrefVendors', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? UnitofMeasurePurchaseTableMap::CLASS_DEFAULT : UnitofMeasurePurchaseTableMap::OM_CLASS;
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
     * @return array           (UnitofMeasurePurchase object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = UnitofMeasurePurchaseTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = UnitofMeasurePurchaseTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + UnitofMeasurePurchaseTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UnitofMeasurePurchaseTableMap::OM_CLASS;
            /** @var UnitofMeasurePurchase $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            UnitofMeasurePurchaseTableMap::addInstanceToPool($obj, $key);
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
            $key = UnitofMeasurePurchaseTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = UnitofMeasurePurchaseTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var UnitofMeasurePurchase $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UnitofMeasurePurchaseTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR);
            $criteria->addSelectColumn(UnitofMeasurePurchaseTableMap::COL_INTBUOMDESC);
            $criteria->addSelectColumn(UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV);
            $criteria->addSelectColumn(UnitofMeasurePurchaseTableMap::COL_INTBUOMPRICBYWGHT);
            $criteria->addSelectColumn(UnitofMeasurePurchaseTableMap::COL_INTBUOMSTOCKBYCASE);
            $criteria->addSelectColumn(UnitofMeasurePurchaseTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(UnitofMeasurePurchaseTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(UnitofMeasurePurchaseTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbUomPur');
            $criteria->addSelectColumn($alias . '.IntbUomDesc');
            $criteria->addSelectColumn($alias . '.IntbUomConv');
            $criteria->addSelectColumn($alias . '.IntbUomPricByWght');
            $criteria->addSelectColumn($alias . '.IntbUomStockByCase');
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
        return Propel::getServiceContainer()->getDatabaseMap(UnitofMeasurePurchaseTableMap::DATABASE_NAME)->getTable(UnitofMeasurePurchaseTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(UnitofMeasurePurchaseTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new UnitofMeasurePurchaseTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a UnitofMeasurePurchase or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or UnitofMeasurePurchase object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \UnitofMeasurePurchase) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
            $criteria->add(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, (array) $values, Criteria::IN);
        }

        $query = UnitofMeasurePurchaseQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            UnitofMeasurePurchaseTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                UnitofMeasurePurchaseTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_uom_pur table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return UnitofMeasurePurchaseQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a UnitofMeasurePurchase or Criteria object.
     *
     * @param mixed               $criteria Criteria or UnitofMeasurePurchase object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from UnitofMeasurePurchase object
        }


        // Set the correct dbName
        $query = UnitofMeasurePurchaseQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // UnitofMeasurePurchaseTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
UnitofMeasurePurchaseTableMap::buildTableMap();
