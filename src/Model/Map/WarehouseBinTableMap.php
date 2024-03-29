<?php

namespace Map;

use \WarehouseBin;
use \WarehouseBinQuery;
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
 * This class defines the structure of the 'inv_bin_cntrl' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class WarehouseBinTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.WarehouseBinTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_bin_cntrl';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\WarehouseBin';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'WarehouseBin';

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
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'inv_bin_cntrl.IntbWhse';

    /**
     * the column name for the BnctBinFrom field
     */
    const COL_BNCTBINFROM = 'inv_bin_cntrl.BnctBinFrom';

    /**
     * the column name for the BnctBinThru field
     */
    const COL_BNCTBINTHRU = 'inv_bin_cntrl.BnctBinThru';

    /**
     * the column name for the BnctTypeDesc field
     */
    const COL_BNCTTYPEDESC = 'inv_bin_cntrl.BnctTypeDesc';

    /**
     * the column name for the BnctBinArea field
     */
    const COL_BNCTBINAREA = 'inv_bin_cntrl.BnctBinArea';

    /**
     * the column name for the BnctBinDesc field
     */
    const COL_BNCTBINDESC = 'inv_bin_cntrl.BnctBinDesc';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_bin_cntrl.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_bin_cntrl.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_bin_cntrl.dummy';

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
        self::TYPE_PHPNAME       => array('Intbwhse', 'Bnctbinfrom', 'Bnctbinthru', 'Bncttypedesc', 'Bnctbinarea', 'Bnctbindesc', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('intbwhse', 'bnctbinfrom', 'bnctbinthru', 'bncttypedesc', 'bnctbinarea', 'bnctbindesc', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(WarehouseBinTableMap::COL_INTBWHSE, WarehouseBinTableMap::COL_BNCTBINFROM, WarehouseBinTableMap::COL_BNCTBINTHRU, WarehouseBinTableMap::COL_BNCTTYPEDESC, WarehouseBinTableMap::COL_BNCTBINAREA, WarehouseBinTableMap::COL_BNCTBINDESC, WarehouseBinTableMap::COL_DATEUPDTD, WarehouseBinTableMap::COL_TIMEUPDTD, WarehouseBinTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('IntbWhse', 'BnctBinFrom', 'BnctBinThru', 'BnctTypeDesc', 'BnctBinArea', 'BnctBinDesc', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Intbwhse' => 0, 'Bnctbinfrom' => 1, 'Bnctbinthru' => 2, 'Bncttypedesc' => 3, 'Bnctbinarea' => 4, 'Bnctbindesc' => 5, 'Dateupdtd' => 6, 'Timeupdtd' => 7, 'Dummy' => 8, ),
        self::TYPE_CAMELNAME     => array('intbwhse' => 0, 'bnctbinfrom' => 1, 'bnctbinthru' => 2, 'bncttypedesc' => 3, 'bnctbinarea' => 4, 'bnctbindesc' => 5, 'dateupdtd' => 6, 'timeupdtd' => 7, 'dummy' => 8, ),
        self::TYPE_COLNAME       => array(WarehouseBinTableMap::COL_INTBWHSE => 0, WarehouseBinTableMap::COL_BNCTBINFROM => 1, WarehouseBinTableMap::COL_BNCTBINTHRU => 2, WarehouseBinTableMap::COL_BNCTTYPEDESC => 3, WarehouseBinTableMap::COL_BNCTBINAREA => 4, WarehouseBinTableMap::COL_BNCTBINDESC => 5, WarehouseBinTableMap::COL_DATEUPDTD => 6, WarehouseBinTableMap::COL_TIMEUPDTD => 7, WarehouseBinTableMap::COL_DUMMY => 8, ),
        self::TYPE_FIELDNAME     => array('IntbWhse' => 0, 'BnctBinFrom' => 1, 'BnctBinThru' => 2, 'BnctTypeDesc' => 3, 'BnctBinArea' => 4, 'BnctBinDesc' => 5, 'DateUpdtd' => 6, 'TimeUpdtd' => 7, 'dummy' => 8, ),
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
        $this->setName('inv_bin_cntrl');
        $this->setPhpName('WarehouseBin');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\WarehouseBin');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR' , 'inv_whse_code', 'IntbWhse', true, 2, '');
        $this->addPrimaryKey('BnctBinFrom', 'Bnctbinfrom', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('BnctBinThru', 'Bnctbinthru', 'VARCHAR', true, 8, '');
        $this->addColumn('BnctTypeDesc', 'Bncttypedesc', 'VARCHAR', false, 1, null);
        $this->addForeignKey('BnctBinArea', 'Bnctbinarea', 'VARCHAR', 'inv_bina_code', 'IntbBinaCode', false, 2, null);
        $this->addColumn('BnctBinDesc', 'Bnctbindesc', 'VARCHAR', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Warehouse', '\\Warehouse', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, null, false);
        $this->addRelation('InvBinAreaCode', '\\InvBinAreaCode', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':BnctBinArea',
    1 => ':IntbBinaCode',
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
     * @param \WarehouseBin $obj A \WarehouseBin object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getIntbwhse() || is_scalar($obj->getIntbwhse()) || is_callable([$obj->getIntbwhse(), '__toString']) ? (string) $obj->getIntbwhse() : $obj->getIntbwhse()), (null === $obj->getBnctbinfrom() || is_scalar($obj->getBnctbinfrom()) || is_callable([$obj->getBnctbinfrom(), '__toString']) ? (string) $obj->getBnctbinfrom() : $obj->getBnctbinfrom()), (null === $obj->getBnctbinthru() || is_scalar($obj->getBnctbinthru()) || is_callable([$obj->getBnctbinthru(), '__toString']) ? (string) $obj->getBnctbinthru() : $obj->getBnctbinthru())]);
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
     * @param mixed $value A \WarehouseBin object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \WarehouseBin) {
                $key = serialize([(null === $value->getIntbwhse() || is_scalar($value->getIntbwhse()) || is_callable([$value->getIntbwhse(), '__toString']) ? (string) $value->getIntbwhse() : $value->getIntbwhse()), (null === $value->getBnctbinfrom() || is_scalar($value->getBnctbinfrom()) || is_callable([$value->getBnctbinfrom(), '__toString']) ? (string) $value->getBnctbinfrom() : $value->getBnctbinfrom()), (null === $value->getBnctbinthru() || is_scalar($value->getBnctbinthru()) || is_callable([$value->getBnctbinthru(), '__toString']) ? (string) $value->getBnctbinthru() : $value->getBnctbinthru())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \WarehouseBin object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bnctbinfrom', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bnctbinthru', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bnctbinfrom', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bnctbinfrom', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bnctbinfrom', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bnctbinfrom', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bnctbinfrom', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bnctbinthru', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bnctbinthru', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bnctbinthru', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bnctbinthru', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bnctbinthru', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Bnctbinfrom', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Bnctbinthru', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? WarehouseBinTableMap::CLASS_DEFAULT : WarehouseBinTableMap::OM_CLASS;
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
     * @return array           (WarehouseBin object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = WarehouseBinTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = WarehouseBinTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + WarehouseBinTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WarehouseBinTableMap::OM_CLASS;
            /** @var WarehouseBin $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            WarehouseBinTableMap::addInstanceToPool($obj, $key);
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
            $key = WarehouseBinTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = WarehouseBinTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var WarehouseBin $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WarehouseBinTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_BNCTBINFROM);
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_BNCTBINTHRU);
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_BNCTTYPEDESC);
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_BNCTBINAREA);
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_BNCTBINDESC);
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(WarehouseBinTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.BnctBinFrom');
            $criteria->addSelectColumn($alias . '.BnctBinThru');
            $criteria->addSelectColumn($alias . '.BnctTypeDesc');
            $criteria->addSelectColumn($alias . '.BnctBinArea');
            $criteria->addSelectColumn($alias . '.BnctBinDesc');
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
        return Propel::getServiceContainer()->getDatabaseMap(WarehouseBinTableMap::DATABASE_NAME)->getTable(WarehouseBinTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(WarehouseBinTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(WarehouseBinTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new WarehouseBinTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a WarehouseBin or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or WarehouseBin object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseBinTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \WarehouseBin) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WarehouseBinTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(WarehouseBinTableMap::COL_INTBWHSE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(WarehouseBinTableMap::COL_BNCTBINFROM, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(WarehouseBinTableMap::COL_BNCTBINTHRU, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = WarehouseBinQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            WarehouseBinTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                WarehouseBinTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_bin_cntrl table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return WarehouseBinQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a WarehouseBin or Criteria object.
     *
     * @param mixed               $criteria Criteria or WarehouseBin object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseBinTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from WarehouseBin object
        }


        // Set the correct dbName
        $query = WarehouseBinQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // WarehouseBinTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
WarehouseBinTableMap::buildTableMap();
