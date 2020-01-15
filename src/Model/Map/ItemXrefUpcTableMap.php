<?php

namespace Map;

use \ItemXrefUpc;
use \ItemXrefUpcQuery;
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
 * This class defines the structure of the 'upc_item_xref' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemXrefUpcTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemXrefUpcTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'upc_item_xref';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemXrefUpc';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemXrefUpc';

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
     * the column name for the UpcxCode field
     */
    const COL_UPCXCODE = 'upc_item_xref.UpcxCode';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'upc_item_xref.InitItemNbr';

    /**
     * the column name for the UpcxPrim field
     */
    const COL_UPCXPRIM = 'upc_item_xref.UpcxPrim';

    /**
     * the column name for the UpcxQtyEachesPerUpc field
     */
    const COL_UPCXQTYEACHESPERUPC = 'upc_item_xref.UpcxQtyEachesPerUpc';

    /**
     * the column name for the UpcxUom field
     */
    const COL_UPCXUOM = 'upc_item_xref.UpcxUom';

    /**
     * the column name for the UpcxMstrCase field
     */
    const COL_UPCXMSTRCASE = 'upc_item_xref.UpcxMstrCase';

    /**
     * the column name for the UpcxLabel field
     */
    const COL_UPCXLABEL = 'upc_item_xref.UpcxLabel';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'upc_item_xref.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'upc_item_xref.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'upc_item_xref.dummy';

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
        self::TYPE_PHPNAME       => array('Upcxcode', 'Inititemnbr', 'Upcxprim', 'Upcxqtyeachesperupc', 'Upcxuom', 'Upcxmstrcase', 'Upcxlabel', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('upcxcode', 'inititemnbr', 'upcxprim', 'upcxqtyeachesperupc', 'upcxuom', 'upcxmstrcase', 'upcxlabel', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemXrefUpcTableMap::COL_UPCXCODE, ItemXrefUpcTableMap::COL_INITITEMNBR, ItemXrefUpcTableMap::COL_UPCXPRIM, ItemXrefUpcTableMap::COL_UPCXQTYEACHESPERUPC, ItemXrefUpcTableMap::COL_UPCXUOM, ItemXrefUpcTableMap::COL_UPCXMSTRCASE, ItemXrefUpcTableMap::COL_UPCXLABEL, ItemXrefUpcTableMap::COL_DATEUPDTD, ItemXrefUpcTableMap::COL_TIMEUPDTD, ItemXrefUpcTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('UpcxCode', 'InitItemNbr', 'UpcxPrim', 'UpcxQtyEachesPerUpc', 'UpcxUom', 'UpcxMstrCase', 'UpcxLabel', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Upcxcode' => 0, 'Inititemnbr' => 1, 'Upcxprim' => 2, 'Upcxqtyeachesperupc' => 3, 'Upcxuom' => 4, 'Upcxmstrcase' => 5, 'Upcxlabel' => 6, 'Dateupdtd' => 7, 'Timeupdtd' => 8, 'Dummy' => 9, ),
        self::TYPE_CAMELNAME     => array('upcxcode' => 0, 'inititemnbr' => 1, 'upcxprim' => 2, 'upcxqtyeachesperupc' => 3, 'upcxuom' => 4, 'upcxmstrcase' => 5, 'upcxlabel' => 6, 'dateupdtd' => 7, 'timeupdtd' => 8, 'dummy' => 9, ),
        self::TYPE_COLNAME       => array(ItemXrefUpcTableMap::COL_UPCXCODE => 0, ItemXrefUpcTableMap::COL_INITITEMNBR => 1, ItemXrefUpcTableMap::COL_UPCXPRIM => 2, ItemXrefUpcTableMap::COL_UPCXQTYEACHESPERUPC => 3, ItemXrefUpcTableMap::COL_UPCXUOM => 4, ItemXrefUpcTableMap::COL_UPCXMSTRCASE => 5, ItemXrefUpcTableMap::COL_UPCXLABEL => 6, ItemXrefUpcTableMap::COL_DATEUPDTD => 7, ItemXrefUpcTableMap::COL_TIMEUPDTD => 8, ItemXrefUpcTableMap::COL_DUMMY => 9, ),
        self::TYPE_FIELDNAME     => array('UpcxCode' => 0, 'InitItemNbr' => 1, 'UpcxPrim' => 2, 'UpcxQtyEachesPerUpc' => 3, 'UpcxUom' => 4, 'UpcxMstrCase' => 5, 'UpcxLabel' => 6, 'DateUpdtd' => 7, 'TimeUpdtd' => 8, 'dummy' => 9, ),
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
        $this->setName('upc_item_xref');
        $this->setPhpName('ItemXrefUpc');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemXrefUpc');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('UpcxCode', 'Upcxcode', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('UpcxPrim', 'Upcxprim', 'VARCHAR', false, 1, null);
        $this->addColumn('UpcxQtyEachesPerUpc', 'Upcxqtyeachesperupc', 'INTEGER', false, 8, null);
        $this->addColumn('UpcxUom', 'Upcxuom', 'VARCHAR', false, 4, null);
        $this->addColumn('UpcxMstrCase', 'Upcxmstrcase', 'VARCHAR', false, 1, null);
        $this->addColumn('UpcxLabel', 'Upcxlabel', 'VARCHAR', false, 1, null);
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
     * @param \ItemXrefUpc $obj A \ItemXrefUpc object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getUpcxcode() || is_scalar($obj->getUpcxcode()) || is_callable([$obj->getUpcxcode(), '__toString']) ? (string) $obj->getUpcxcode() : $obj->getUpcxcode()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr())]);
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
     * @param mixed $value A \ItemXrefUpc object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemXrefUpc) {
                $key = serialize([(null === $value->getUpcxcode() || is_scalar($value->getUpcxcode()) || is_callable([$value->getUpcxcode(), '__toString']) ? (string) $value->getUpcxcode() : $value->getUpcxcode()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemXrefUpc object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Upcxcode', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Upcxcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Upcxcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Upcxcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Upcxcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Upcxcode', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Upcxcode', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItemXrefUpcTableMap::CLASS_DEFAULT : ItemXrefUpcTableMap::OM_CLASS;
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
     * @return array           (ItemXrefUpc object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemXrefUpcTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemXrefUpcTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemXrefUpcTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemXrefUpcTableMap::OM_CLASS;
            /** @var ItemXrefUpc $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemXrefUpcTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemXrefUpcTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemXrefUpcTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemXrefUpc $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemXrefUpcTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_UPCXCODE);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_UPCXPRIM);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_UPCXQTYEACHESPERUPC);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_UPCXUOM);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_UPCXMSTRCASE);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_UPCXLABEL);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemXrefUpcTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.UpcxCode');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.UpcxPrim');
            $criteria->addSelectColumn($alias . '.UpcxQtyEachesPerUpc');
            $criteria->addSelectColumn($alias . '.UpcxUom');
            $criteria->addSelectColumn($alias . '.UpcxMstrCase');
            $criteria->addSelectColumn($alias . '.UpcxLabel');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemXrefUpcTableMap::DATABASE_NAME)->getTable(ItemXrefUpcTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemXrefUpcTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemXrefUpcTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemXrefUpcTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemXrefUpc or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemXrefUpc object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefUpcTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemXrefUpc) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemXrefUpcTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemXrefUpcTableMap::COL_UPCXCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefUpcTableMap::COL_INITITEMNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemXrefUpcQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemXrefUpcTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemXrefUpcTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the upc_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemXrefUpcQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemXrefUpc or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemXrefUpc object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefUpcTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemXrefUpc object
        }


        // Set the correct dbName
        $query = ItemXrefUpcQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemXrefUpcTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemXrefUpcTableMap::buildTableMap();
