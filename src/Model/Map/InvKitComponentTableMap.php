<?php

namespace Map;

use \InvKitComponent;
use \InvKitComponentQuery;
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
 * This class defines the structure of the 'inv_kit_detail' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvKitComponentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvKitComponentTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_kit_detail';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvKitComponent';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvKitComponent';

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
     * the column name for the KtdtKey1 field
     */
    const COL_KTDTKEY1 = 'inv_kit_detail.KtdtKey1';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_kit_detail.InitItemNbr';

    /**
     * the column name for the KtdtUom field
     */
    const COL_KTDTUOM = 'inv_kit_detail.KtdtUom';

    /**
     * the column name for the KtdtUsagRate field
     */
    const COL_KTDTUSAGRATE = 'inv_kit_detail.KtdtUsagRate';

    /**
     * the column name for the KtdtVendSupply field
     */
    const COL_KTDTVENDSUPPLY = 'inv_kit_detail.KtdtVendSupply';

    /**
     * the column name for the KtdtFreeGoods field
     */
    const COL_KTDTFREEGOODS = 'inv_kit_detail.KtdtFreeGoods';

    /**
     * the column name for the KtdtPrntSeq field
     */
    const COL_KTDTPRNTSEQ = 'inv_kit_detail.KtdtPrntSeq';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_kit_detail.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_kit_detail.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_kit_detail.dummy';

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
        self::TYPE_PHPNAME       => array('Ktdtkey1', 'Inititemnbr', 'Ktdtuom', 'Ktdtusagrate', 'Ktdtvendsupply', 'Ktdtfreegoods', 'Ktdtprntseq', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('ktdtkey1', 'inititemnbr', 'ktdtuom', 'ktdtusagrate', 'ktdtvendsupply', 'ktdtfreegoods', 'ktdtprntseq', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvKitComponentTableMap::COL_KTDTKEY1, InvKitComponentTableMap::COL_INITITEMNBR, InvKitComponentTableMap::COL_KTDTUOM, InvKitComponentTableMap::COL_KTDTUSAGRATE, InvKitComponentTableMap::COL_KTDTVENDSUPPLY, InvKitComponentTableMap::COL_KTDTFREEGOODS, InvKitComponentTableMap::COL_KTDTPRNTSEQ, InvKitComponentTableMap::COL_DATEUPDTD, InvKitComponentTableMap::COL_TIMEUPDTD, InvKitComponentTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('KtdtKey1', 'InitItemNbr', 'KtdtUom', 'KtdtUsagRate', 'KtdtVendSupply', 'KtdtFreeGoods', 'KtdtPrntSeq', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Ktdtkey1' => 0, 'Inititemnbr' => 1, 'Ktdtuom' => 2, 'Ktdtusagrate' => 3, 'Ktdtvendsupply' => 4, 'Ktdtfreegoods' => 5, 'Ktdtprntseq' => 6, 'Dateupdtd' => 7, 'Timeupdtd' => 8, 'Dummy' => 9, ),
        self::TYPE_CAMELNAME     => array('ktdtkey1' => 0, 'inititemnbr' => 1, 'ktdtuom' => 2, 'ktdtusagrate' => 3, 'ktdtvendsupply' => 4, 'ktdtfreegoods' => 5, 'ktdtprntseq' => 6, 'dateupdtd' => 7, 'timeupdtd' => 8, 'dummy' => 9, ),
        self::TYPE_COLNAME       => array(InvKitComponentTableMap::COL_KTDTKEY1 => 0, InvKitComponentTableMap::COL_INITITEMNBR => 1, InvKitComponentTableMap::COL_KTDTUOM => 2, InvKitComponentTableMap::COL_KTDTUSAGRATE => 3, InvKitComponentTableMap::COL_KTDTVENDSUPPLY => 4, InvKitComponentTableMap::COL_KTDTFREEGOODS => 5, InvKitComponentTableMap::COL_KTDTPRNTSEQ => 6, InvKitComponentTableMap::COL_DATEUPDTD => 7, InvKitComponentTableMap::COL_TIMEUPDTD => 8, InvKitComponentTableMap::COL_DUMMY => 9, ),
        self::TYPE_FIELDNAME     => array('KtdtKey1' => 0, 'InitItemNbr' => 1, 'KtdtUom' => 2, 'KtdtUsagRate' => 3, 'KtdtVendSupply' => 4, 'KtdtFreeGoods' => 5, 'KtdtPrntSeq' => 6, 'DateUpdtd' => 7, 'TimeUpdtd' => 8, 'dummy' => 9, ),
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
        $this->setName('inv_kit_detail');
        $this->setPhpName('InvKitComponent');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvKitComponent');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('KtdtKey1', 'Ktdtkey1', 'VARCHAR' , 'inv_kit_head', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('KtdtUom', 'Ktdtuom', 'VARCHAR', false, 4, null);
        $this->addColumn('KtdtUsagRate', 'Ktdtusagrate', 'DECIMAL', false, 20, null);
        $this->addColumn('KtdtVendSupply', 'Ktdtvendsupply', 'VARCHAR', false, 1, null);
        $this->addColumn('KtdtFreeGoods', 'Ktdtfreegoods', 'VARCHAR', false, 1, null);
        $this->addColumn('KtdtPrntSeq', 'Ktdtprntseq', 'INTEGER', false, 4, null);
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
        $this->addRelation('InvKit', '\\InvKit', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':KtdtKey1',
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
     * @param \InvKitComponent $obj A \InvKitComponent object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getKtdtkey1() || is_scalar($obj->getKtdtkey1()) || is_callable([$obj->getKtdtkey1(), '__toString']) ? (string) $obj->getKtdtkey1() : $obj->getKtdtkey1()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr())]);
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
     * @param mixed $value A \InvKitComponent object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvKitComponent) {
                $key = serialize([(null === $value->getKtdtkey1() || is_scalar($value->getKtdtkey1()) || is_callable([$value->getKtdtkey1(), '__toString']) ? (string) $value->getKtdtkey1() : $value->getKtdtkey1()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvKitComponent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ktdtkey1', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ktdtkey1', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ktdtkey1', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ktdtkey1', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ktdtkey1', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ktdtkey1', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Ktdtkey1', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvKitComponentTableMap::CLASS_DEFAULT : InvKitComponentTableMap::OM_CLASS;
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
     * @return array           (InvKitComponent object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvKitComponentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvKitComponentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvKitComponentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvKitComponentTableMap::OM_CLASS;
            /** @var InvKitComponent $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvKitComponentTableMap::addInstanceToPool($obj, $key);
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
            $key = InvKitComponentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvKitComponentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvKitComponent $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvKitComponentTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_KTDTKEY1);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_KTDTUOM);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_KTDTUSAGRATE);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_KTDTVENDSUPPLY);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_KTDTFREEGOODS);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_KTDTPRNTSEQ);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvKitComponentTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.KtdtKey1');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.KtdtUom');
            $criteria->addSelectColumn($alias . '.KtdtUsagRate');
            $criteria->addSelectColumn($alias . '.KtdtVendSupply');
            $criteria->addSelectColumn($alias . '.KtdtFreeGoods');
            $criteria->addSelectColumn($alias . '.KtdtPrntSeq');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvKitComponentTableMap::DATABASE_NAME)->getTable(InvKitComponentTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvKitComponentTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvKitComponentTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvKitComponentTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvKitComponent or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvKitComponent object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvKitComponentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvKitComponent) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvKitComponentTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvKitComponentTableMap::COL_KTDTKEY1, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvKitComponentTableMap::COL_INITITEMNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvKitComponentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvKitComponentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvKitComponentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_kit_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvKitComponentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvKitComponent or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvKitComponent object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvKitComponentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvKitComponent object
        }


        // Set the correct dbName
        $query = InvKitComponentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvKitComponentTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvKitComponentTableMap::buildTableMap();
