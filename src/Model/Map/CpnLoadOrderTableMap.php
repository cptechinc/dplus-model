<?php

namespace Map;

use \CpnLoadOrder;
use \CpnLoadOrderQuery;
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
 * This class defines the structure of the 'load_cpn_order' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CpnLoadOrderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CpnLoadOrderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'load_cpn_order';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CpnLoadOrder';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CpnLoadOrder';

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
     * the column name for the LchdLoadNbr field
     */
    const COL_LCHDLOADNBR = 'load_cpn_order.LchdLoadNbr';

    /**
     * the column name for the LcorOrdrNbr field
     */
    const COL_LCORORDRNBR = 'load_cpn_order.LcorOrdrNbr';

    /**
     * the column name for the LcorShipId field
     */
    const COL_LCORSHIPID = 'load_cpn_order.LcorShipId';

    /**
     * the column name for the LcorCustPo field
     */
    const COL_LCORCUSTPO = 'load_cpn_order.LcorCustPo';

    /**
     * the column name for the LcorRqstDate field
     */
    const COL_LCORRQSTDATE = 'load_cpn_order.LcorRqstDate';

    /**
     * the column name for the LcorNbrOfBoxes field
     */
    const COL_LCORNBROFBOXES = 'load_cpn_order.LcorNbrOfBoxes';

    /**
     * the column name for the LcorTotWght field
     */
    const COL_LCORTOTWGHT = 'load_cpn_order.LcorTotWght';

    /**
     * the column name for the LcorOrdrType field
     */
    const COL_LCORORDRTYPE = 'load_cpn_order.LcorOrdrType';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'load_cpn_order.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'load_cpn_order.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'load_cpn_order.dummy';

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
        self::TYPE_PHPNAME       => array('Lchdloadnbr', 'Lcorordrnbr', 'Lcorshipid', 'Lcorcustpo', 'Lcorrqstdate', 'Lcornbrofboxes', 'Lcortotwght', 'Lcorordrtype', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('lchdloadnbr', 'lcorordrnbr', 'lcorshipid', 'lcorcustpo', 'lcorrqstdate', 'lcornbrofboxes', 'lcortotwght', 'lcorordrtype', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(CpnLoadOrderTableMap::COL_LCHDLOADNBR, CpnLoadOrderTableMap::COL_LCORORDRNBR, CpnLoadOrderTableMap::COL_LCORSHIPID, CpnLoadOrderTableMap::COL_LCORCUSTPO, CpnLoadOrderTableMap::COL_LCORRQSTDATE, CpnLoadOrderTableMap::COL_LCORNBROFBOXES, CpnLoadOrderTableMap::COL_LCORTOTWGHT, CpnLoadOrderTableMap::COL_LCORORDRTYPE, CpnLoadOrderTableMap::COL_DATEUPDTD, CpnLoadOrderTableMap::COL_TIMEUPDTD, CpnLoadOrderTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('LchdLoadNbr', 'LcorOrdrNbr', 'LcorShipId', 'LcorCustPo', 'LcorRqstDate', 'LcorNbrOfBoxes', 'LcorTotWght', 'LcorOrdrType', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Lchdloadnbr' => 0, 'Lcorordrnbr' => 1, 'Lcorshipid' => 2, 'Lcorcustpo' => 3, 'Lcorrqstdate' => 4, 'Lcornbrofboxes' => 5, 'Lcortotwght' => 6, 'Lcorordrtype' => 7, 'Dateupdtd' => 8, 'Timeupdtd' => 9, 'Dummy' => 10, ),
        self::TYPE_CAMELNAME     => array('lchdloadnbr' => 0, 'lcorordrnbr' => 1, 'lcorshipid' => 2, 'lcorcustpo' => 3, 'lcorrqstdate' => 4, 'lcornbrofboxes' => 5, 'lcortotwght' => 6, 'lcorordrtype' => 7, 'dateupdtd' => 8, 'timeupdtd' => 9, 'dummy' => 10, ),
        self::TYPE_COLNAME       => array(CpnLoadOrderTableMap::COL_LCHDLOADNBR => 0, CpnLoadOrderTableMap::COL_LCORORDRNBR => 1, CpnLoadOrderTableMap::COL_LCORSHIPID => 2, CpnLoadOrderTableMap::COL_LCORCUSTPO => 3, CpnLoadOrderTableMap::COL_LCORRQSTDATE => 4, CpnLoadOrderTableMap::COL_LCORNBROFBOXES => 5, CpnLoadOrderTableMap::COL_LCORTOTWGHT => 6, CpnLoadOrderTableMap::COL_LCORORDRTYPE => 7, CpnLoadOrderTableMap::COL_DATEUPDTD => 8, CpnLoadOrderTableMap::COL_TIMEUPDTD => 9, CpnLoadOrderTableMap::COL_DUMMY => 10, ),
        self::TYPE_FIELDNAME     => array('LchdLoadNbr' => 0, 'LcorOrdrNbr' => 1, 'LcorShipId' => 2, 'LcorCustPo' => 3, 'LcorRqstDate' => 4, 'LcorNbrOfBoxes' => 5, 'LcorTotWght' => 6, 'LcorOrdrType' => 7, 'DateUpdtd' => 8, 'TimeUpdtd' => 9, 'dummy' => 10, ),
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
        $this->setName('load_cpn_order');
        $this->setPhpName('CpnLoadOrder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CpnLoadOrder');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('LchdLoadNbr', 'Lchdloadnbr', 'INTEGER' , 'load_cpn_header', 'LchdLoadNbr', true, 8, 0);
        $this->addPrimaryKey('LcorOrdrNbr', 'Lcorordrnbr', 'INTEGER', true, 10, 0);
        $this->addColumn('LcorShipId', 'Lcorshipid', 'VARCHAR', true, 6, '');
        $this->addColumn('LcorCustPo', 'Lcorcustpo', 'VARCHAR', true, 20, '');
        $this->addColumn('LcorRqstDate', 'Lcorrqstdate', 'CHAR', true, 8, '');
        $this->addColumn('LcorNbrOfBoxes', 'Lcornbrofboxes', 'INTEGER', true, 8, 0);
        $this->addColumn('LcorTotWght', 'Lcortotwght', 'DECIMAL', true, 20, 0);
        $this->addColumn('LcorOrdrType', 'Lcorordrtype', 'CHAR', true, null, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CpnLoad', '\\CpnLoad', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':LchdLoadNbr',
    1 => ':LchdLoadNbr',
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
     * @param \CpnLoadOrder $obj A \CpnLoadOrder object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getLchdloadnbr() || is_scalar($obj->getLchdloadnbr()) || is_callable([$obj->getLchdloadnbr(), '__toString']) ? (string) $obj->getLchdloadnbr() : $obj->getLchdloadnbr()), (null === $obj->getLcorordrnbr() || is_scalar($obj->getLcorordrnbr()) || is_callable([$obj->getLcorordrnbr(), '__toString']) ? (string) $obj->getLcorordrnbr() : $obj->getLcorordrnbr())]);
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
     * @param mixed $value A \CpnLoadOrder object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CpnLoadOrder) {
                $key = serialize([(null === $value->getLchdloadnbr() || is_scalar($value->getLchdloadnbr()) || is_callable([$value->getLchdloadnbr(), '__toString']) ? (string) $value->getLchdloadnbr() : $value->getLchdloadnbr()), (null === $value->getLcorordrnbr() || is_scalar($value->getLcorordrnbr()) || is_callable([$value->getLcorordrnbr(), '__toString']) ? (string) $value->getLcorordrnbr() : $value->getLcorordrnbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CpnLoadOrder object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CpnLoadOrderTableMap::CLASS_DEFAULT : CpnLoadOrderTableMap::OM_CLASS;
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
     * @return array           (CpnLoadOrder object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CpnLoadOrderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CpnLoadOrderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CpnLoadOrderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CpnLoadOrderTableMap::OM_CLASS;
            /** @var CpnLoadOrder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CpnLoadOrderTableMap::addInstanceToPool($obj, $key);
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
            $key = CpnLoadOrderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CpnLoadOrderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CpnLoadOrder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CpnLoadOrderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_LCHDLOADNBR);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_LCORORDRNBR);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_LCORSHIPID);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_LCORCUSTPO);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_LCORRQSTDATE);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_LCORNBROFBOXES);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_LCORTOTWGHT);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_LCORORDRTYPE);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(CpnLoadOrderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.LchdLoadNbr');
            $criteria->addSelectColumn($alias . '.LcorOrdrNbr');
            $criteria->addSelectColumn($alias . '.LcorShipId');
            $criteria->addSelectColumn($alias . '.LcorCustPo');
            $criteria->addSelectColumn($alias . '.LcorRqstDate');
            $criteria->addSelectColumn($alias . '.LcorNbrOfBoxes');
            $criteria->addSelectColumn($alias . '.LcorTotWght');
            $criteria->addSelectColumn($alias . '.LcorOrdrType');
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
        return Propel::getServiceContainer()->getDatabaseMap(CpnLoadOrderTableMap::DATABASE_NAME)->getTable(CpnLoadOrderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CpnLoadOrderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CpnLoadOrderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CpnLoadOrderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CpnLoadOrder or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CpnLoadOrder object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadOrderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CpnLoadOrder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CpnLoadOrderTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CpnLoadOrderTableMap::COL_LCORORDRNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CpnLoadOrderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CpnLoadOrderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CpnLoadOrderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the load_cpn_order table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CpnLoadOrderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CpnLoadOrder or Criteria object.
     *
     * @param mixed               $criteria Criteria or CpnLoadOrder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadOrderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CpnLoadOrder object
        }


        // Set the correct dbName
        $query = CpnLoadOrderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CpnLoadOrderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CpnLoadOrderTableMap::buildTableMap();
