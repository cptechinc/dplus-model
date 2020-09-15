<?php

namespace Map;

use \BomComponent;
use \BomComponentQuery;
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
 * This class defines the structure of the 'pr_bmat_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class BomComponentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.BomComponentTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'pr_bmat_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\BomComponent';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'BomComponent';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the BomhProdItem field
     */
    const COL_BOMHPRODITEM = 'pr_bmat_det.BomhProdItem';

    /**
     * the column name for the BomdLine field
     */
    const COL_BOMDLINE = 'pr_bmat_det.BomdLine';

    /**
     * the column name for the BomdUsagItem field
     */
    const COL_BOMDUSAGITEM = 'pr_bmat_det.BomdUsagItem';

    /**
     * the column name for the BomdUsagQty field
     */
    const COL_BOMDUSAGQTY = 'pr_bmat_det.BomdUsagQty';

    /**
     * the column name for the BomdScrap field
     */
    const COL_BOMDSCRAP = 'pr_bmat_det.BomdScrap';

    /**
     * the column name for the BomdSerialBase field
     */
    const COL_BOMDSERIALBASE = 'pr_bmat_det.BomdSerialBase';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'pr_bmat_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'pr_bmat_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'pr_bmat_det.dummy';

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
        self::TYPE_PHPNAME       => array('Bomhproditem', 'Bomdline', 'Bomdusagitem', 'Bomdusagqty', 'Bomdscrap', 'Bomdserialbase', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('bomhproditem', 'bomdline', 'bomdusagitem', 'bomdusagqty', 'bomdscrap', 'bomdserialbase', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(BomComponentTableMap::COL_BOMHPRODITEM, BomComponentTableMap::COL_BOMDLINE, BomComponentTableMap::COL_BOMDUSAGITEM, BomComponentTableMap::COL_BOMDUSAGQTY, BomComponentTableMap::COL_BOMDSCRAP, BomComponentTableMap::COL_BOMDSERIALBASE, BomComponentTableMap::COL_DATEUPDTD, BomComponentTableMap::COL_TIMEUPDTD, BomComponentTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('BomhProdItem', 'BomdLine', 'BomdUsagItem', 'BomdUsagQty', 'BomdScrap', 'BomdSerialBase', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Bomhproditem' => 0, 'Bomdline' => 1, 'Bomdusagitem' => 2, 'Bomdusagqty' => 3, 'Bomdscrap' => 4, 'Bomdserialbase' => 5, 'Dateupdtd' => 6, 'Timeupdtd' => 7, 'Dummy' => 8, ),
        self::TYPE_CAMELNAME     => array('bomhproditem' => 0, 'bomdline' => 1, 'bomdusagitem' => 2, 'bomdusagqty' => 3, 'bomdscrap' => 4, 'bomdserialbase' => 5, 'dateupdtd' => 6, 'timeupdtd' => 7, 'dummy' => 8, ),
        self::TYPE_COLNAME       => array(BomComponentTableMap::COL_BOMHPRODITEM => 0, BomComponentTableMap::COL_BOMDLINE => 1, BomComponentTableMap::COL_BOMDUSAGITEM => 2, BomComponentTableMap::COL_BOMDUSAGQTY => 3, BomComponentTableMap::COL_BOMDSCRAP => 4, BomComponentTableMap::COL_BOMDSERIALBASE => 5, BomComponentTableMap::COL_DATEUPDTD => 6, BomComponentTableMap::COL_TIMEUPDTD => 7, BomComponentTableMap::COL_DUMMY => 8, ),
        self::TYPE_FIELDNAME     => array('BomhProdItem' => 0, 'BomdLine' => 1, 'BomdUsagItem' => 2, 'BomdUsagQty' => 3, 'BomdScrap' => 4, 'BomdSerialBase' => 5, 'DateUpdtd' => 6, 'TimeUpdtd' => 7, 'dummy' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('pr_bmat_det');
        $this->setPhpName('BomComponent');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\BomComponent');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('BomhProdItem', 'Bomhproditem', 'VARCHAR' , 'pr_bmat_head', 'BomhProdItem', true, 30, '');
        $this->addPrimaryKey('BomdLine', 'Bomdline', 'INTEGER', true, 6, 0);
        $this->addForeignPrimaryKey('BomdUsagItem', 'Bomdusagitem', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('BomdUsagQty', 'Bomdusagqty', 'DECIMAL', false, 20, null);
        $this->addColumn('BomdScrap', 'Bomdscrap', 'VARCHAR', false, 1, null);
        $this->addColumn('BomdSerialBase', 'Bomdserialbase', 'VARCHAR', false, 1, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('BomItem', '\\BomItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':BomhProdItem',
    1 => ':BomhProdItem',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':BomdUsagItem',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \BomComponent $obj A \BomComponent object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getBomhproditem() || is_scalar($obj->getBomhproditem()) || is_callable([$obj->getBomhproditem(), '__toString']) ? (string) $obj->getBomhproditem() : $obj->getBomhproditem()), (null === $obj->getBomdline() || is_scalar($obj->getBomdline()) || is_callable([$obj->getBomdline(), '__toString']) ? (string) $obj->getBomdline() : $obj->getBomdline()), (null === $obj->getBomdusagitem() || is_scalar($obj->getBomdusagitem()) || is_callable([$obj->getBomdusagitem(), '__toString']) ? (string) $obj->getBomdusagitem() : $obj->getBomdusagitem())]);
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
     * @param mixed $value A \BomComponent object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \BomComponent) {
                $key = serialize([(null === $value->getBomhproditem() || is_scalar($value->getBomhproditem()) || is_callable([$value->getBomhproditem(), '__toString']) ? (string) $value->getBomhproditem() : $value->getBomhproditem()), (null === $value->getBomdline() || is_scalar($value->getBomdline()) || is_callable([$value->getBomdline(), '__toString']) ? (string) $value->getBomdline() : $value->getBomdline()), (null === $value->getBomdusagitem() || is_scalar($value->getBomdusagitem()) || is_callable([$value->getBomdusagitem(), '__toString']) ? (string) $value->getBomdusagitem() : $value->getBomdusagitem())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \BomComponent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bomhproditem', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bomdline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bomdusagitem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bomhproditem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bomhproditem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bomhproditem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bomhproditem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bomhproditem', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bomdline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bomdline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bomdline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bomdline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bomdline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bomdusagitem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bomdusagitem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bomdusagitem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bomdusagitem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bomdusagitem', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Bomhproditem', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Bomdline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Bomdusagitem', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? BomComponentTableMap::CLASS_DEFAULT : BomComponentTableMap::OM_CLASS;
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
     * @return array           (BomComponent object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = BomComponentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BomComponentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BomComponentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BomComponentTableMap::OM_CLASS;
            /** @var BomComponent $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BomComponentTableMap::addInstanceToPool($obj, $key);
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
            $key = BomComponentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BomComponentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var BomComponent $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BomComponentTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(BomComponentTableMap::COL_BOMHPRODITEM);
            $criteria->addSelectColumn(BomComponentTableMap::COL_BOMDLINE);
            $criteria->addSelectColumn(BomComponentTableMap::COL_BOMDUSAGITEM);
            $criteria->addSelectColumn(BomComponentTableMap::COL_BOMDUSAGQTY);
            $criteria->addSelectColumn(BomComponentTableMap::COL_BOMDSCRAP);
            $criteria->addSelectColumn(BomComponentTableMap::COL_BOMDSERIALBASE);
            $criteria->addSelectColumn(BomComponentTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(BomComponentTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(BomComponentTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.BomhProdItem');
            $criteria->addSelectColumn($alias . '.BomdLine');
            $criteria->addSelectColumn($alias . '.BomdUsagItem');
            $criteria->addSelectColumn($alias . '.BomdUsagQty');
            $criteria->addSelectColumn($alias . '.BomdScrap');
            $criteria->addSelectColumn($alias . '.BomdSerialBase');
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
        return Propel::getServiceContainer()->getDatabaseMap(BomComponentTableMap::DATABASE_NAME)->getTable(BomComponentTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(BomComponentTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(BomComponentTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new BomComponentTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a BomComponent or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or BomComponent object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(BomComponentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \BomComponent) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BomComponentTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(BomComponentTableMap::COL_BOMHPRODITEM, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(BomComponentTableMap::COL_BOMDLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(BomComponentTableMap::COL_BOMDUSAGITEM, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = BomComponentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BomComponentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BomComponentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the pr_bmat_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return BomComponentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a BomComponent or Criteria object.
     *
     * @param mixed               $criteria Criteria or BomComponent object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BomComponentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from BomComponent object
        }


        // Set the correct dbName
        $query = BomComponentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // BomComponentTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BomComponentTableMap::buildTableMap();
