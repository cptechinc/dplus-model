<?php

namespace Map;

use \ItmDimension;
use \ItmDimensionQuery;
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
 * This class defines the structure of the 'inv_inv_dimen' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItmDimensionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItmDimensionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_inv_dimen';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItmDimension';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItmDimension';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_inv_dimen.InitItemNbr';

    /**
     * the column name for the IndmInside field
     */
    const COL_INDMINSIDE = 'inv_inv_dimen.IndmInside';

    /**
     * the column name for the IndmOutside field
     */
    const COL_INDMOUTSIDE = 'inv_inv_dimen.IndmOutside';

    /**
     * the column name for the IndmCross field
     */
    const COL_INDMCROSS = 'inv_inv_dimen.IndmCross';

    /**
     * the column name for the IndmThick field
     */
    const COL_INDMTHICK = 'inv_inv_dimen.IndmThick';

    /**
     * the column name for the IndmLength field
     */
    const COL_INDMLENGTH = 'inv_inv_dimen.IndmLength';

    /**
     * the column name for the IndmWidth field
     */
    const COL_INDMWIDTH = 'inv_inv_dimen.IndmWidth';

    /**
     * the column name for the IndmThickness field
     */
    const COL_INDMTHICKNESS = 'inv_inv_dimen.IndmThickness';

    /**
     * the column name for the IndmSqft field
     */
    const COL_INDMSQFT = 'inv_inv_dimen.IndmSqft';

    /**
     * the column name for the IndmBagQty field
     */
    const COL_INDMBAGQTY = 'inv_inv_dimen.IndmBagQty';

    /**
     * the column name for the IndmBulkQty field
     */
    const COL_INDMBULKQTY = 'inv_inv_dimen.IndmBulkQty';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_inv_dimen.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_inv_dimen.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_inv_dimen.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Indminside', 'Indmoutside', 'Indmcross', 'Indmthick', 'Indmlength', 'Indmwidth', 'Indmthickness', 'Indmsqft', 'Indmbagqty', 'Indmbulkqty', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'indminside', 'indmoutside', 'indmcross', 'indmthick', 'indmlength', 'indmwidth', 'indmthickness', 'indmsqft', 'indmbagqty', 'indmbulkqty', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItmDimensionTableMap::COL_INITITEMNBR, ItmDimensionTableMap::COL_INDMINSIDE, ItmDimensionTableMap::COL_INDMOUTSIDE, ItmDimensionTableMap::COL_INDMCROSS, ItmDimensionTableMap::COL_INDMTHICK, ItmDimensionTableMap::COL_INDMLENGTH, ItmDimensionTableMap::COL_INDMWIDTH, ItmDimensionTableMap::COL_INDMTHICKNESS, ItmDimensionTableMap::COL_INDMSQFT, ItmDimensionTableMap::COL_INDMBAGQTY, ItmDimensionTableMap::COL_INDMBULKQTY, ItmDimensionTableMap::COL_DATEUPDTD, ItmDimensionTableMap::COL_TIMEUPDTD, ItmDimensionTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'IndmInside', 'IndmOutside', 'IndmCross', 'IndmThick', 'IndmLength', 'IndmWidth', 'IndmThickness', 'IndmSqft', 'IndmBagQty', 'IndmBulkQty', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Indminside' => 1, 'Indmoutside' => 2, 'Indmcross' => 3, 'Indmthick' => 4, 'Indmlength' => 5, 'Indmwidth' => 6, 'Indmthickness' => 7, 'Indmsqft' => 8, 'Indmbagqty' => 9, 'Indmbulkqty' => 10, 'Dateupdtd' => 11, 'Timeupdtd' => 12, 'Dummy' => 13, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'indminside' => 1, 'indmoutside' => 2, 'indmcross' => 3, 'indmthick' => 4, 'indmlength' => 5, 'indmwidth' => 6, 'indmthickness' => 7, 'indmsqft' => 8, 'indmbagqty' => 9, 'indmbulkqty' => 10, 'dateupdtd' => 11, 'timeupdtd' => 12, 'dummy' => 13, ),
        self::TYPE_COLNAME       => array(ItmDimensionTableMap::COL_INITITEMNBR => 0, ItmDimensionTableMap::COL_INDMINSIDE => 1, ItmDimensionTableMap::COL_INDMOUTSIDE => 2, ItmDimensionTableMap::COL_INDMCROSS => 3, ItmDimensionTableMap::COL_INDMTHICK => 4, ItmDimensionTableMap::COL_INDMLENGTH => 5, ItmDimensionTableMap::COL_INDMWIDTH => 6, ItmDimensionTableMap::COL_INDMTHICKNESS => 7, ItmDimensionTableMap::COL_INDMSQFT => 8, ItmDimensionTableMap::COL_INDMBAGQTY => 9, ItmDimensionTableMap::COL_INDMBULKQTY => 10, ItmDimensionTableMap::COL_DATEUPDTD => 11, ItmDimensionTableMap::COL_TIMEUPDTD => 12, ItmDimensionTableMap::COL_DUMMY => 13, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'IndmInside' => 1, 'IndmOutside' => 2, 'IndmCross' => 3, 'IndmThick' => 4, 'IndmLength' => 5, 'IndmWidth' => 6, 'IndmThickness' => 7, 'IndmSqft' => 8, 'IndmBagQty' => 9, 'IndmBulkQty' => 10, 'DateUpdtd' => 11, 'TimeUpdtd' => 12, 'dummy' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('inv_inv_dimen');
        $this->setPhpName('ItmDimension');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItmDimension');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('IndmInside', 'Indminside', 'DECIMAL', false, 20, null);
        $this->addColumn('IndmOutside', 'Indmoutside', 'DECIMAL', false, 20, null);
        $this->addColumn('IndmCross', 'Indmcross', 'DECIMAL', false, 20, null);
        $this->addColumn('IndmThick', 'Indmthick', 'DECIMAL', false, 20, null);
        $this->addColumn('IndmLength', 'Indmlength', 'DECIMAL', false, 20, null);
        $this->addColumn('IndmWidth', 'Indmwidth', 'DECIMAL', false, 20, null);
        $this->addColumn('IndmThickness', 'Indmthickness', 'DECIMAL', false, 20, null);
        $this->addColumn('IndmSqft', 'Indmsqft', 'DECIMAL', false, 20, null);
        $this->addColumn('IndmBagQty', 'Indmbagqty', 'INTEGER', false, 7, null);
        $this->addColumn('IndmBulkQty', 'Indmbulkqty', 'INTEGER', false, 7, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItmDimensionTableMap::CLASS_DEFAULT : ItmDimensionTableMap::OM_CLASS;
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
     * @return array           (ItmDimension object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItmDimensionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItmDimensionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItmDimensionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItmDimensionTableMap::OM_CLASS;
            /** @var ItmDimension $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItmDimensionTableMap::addInstanceToPool($obj, $key);
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
            $key = ItmDimensionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItmDimensionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItmDimension $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItmDimensionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMINSIDE);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMOUTSIDE);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMCROSS);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMTHICK);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMLENGTH);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMWIDTH);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMTHICKNESS);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMSQFT);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMBAGQTY);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_INDMBULKQTY);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItmDimensionTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IndmInside');
            $criteria->addSelectColumn($alias . '.IndmOutside');
            $criteria->addSelectColumn($alias . '.IndmCross');
            $criteria->addSelectColumn($alias . '.IndmThick');
            $criteria->addSelectColumn($alias . '.IndmLength');
            $criteria->addSelectColumn($alias . '.IndmWidth');
            $criteria->addSelectColumn($alias . '.IndmThickness');
            $criteria->addSelectColumn($alias . '.IndmSqft');
            $criteria->addSelectColumn($alias . '.IndmBagQty');
            $criteria->addSelectColumn($alias . '.IndmBulkQty');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItmDimensionTableMap::DATABASE_NAME)->getTable(ItmDimensionTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItmDimensionTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItmDimensionTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItmDimensionTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItmDimension or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItmDimension object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItmDimensionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItmDimension) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItmDimensionTableMap::DATABASE_NAME);
            $criteria->add(ItmDimensionTableMap::COL_INITITEMNBR, (array) $values, Criteria::IN);
        }

        $query = ItmDimensionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItmDimensionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItmDimensionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_inv_dimen table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItmDimensionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItmDimension or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItmDimension object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItmDimensionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItmDimension object
        }


        // Set the correct dbName
        $query = ItmDimensionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItmDimensionTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItmDimensionTableMap::buildTableMap();
