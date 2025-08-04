<?php

namespace Map;

use \PrWorkCenter;
use \PrWorkCenterQuery;
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
 * This class defines the structure of the 'pr_work_center_cd' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class PrWorkCenterTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.PrWorkCenterTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'pr_work_center_cd';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'PrWorkCenter';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\PrWorkCenter';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'PrWorkCenter';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the PmtbDeptId field
     */
    public const COL_PMTBDEPTID = 'pr_work_center_cd.PmtbDeptId';

    /**
     * the column name for the PmtbDeptDesc field
     */
    public const COL_PMTBDEPTDESC = 'pr_work_center_cd.PmtbDeptDesc';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'pr_work_center_cd.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'pr_work_center_cd.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'pr_work_center_cd.dummy';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['Pmtbdeptid', 'Pmtbdeptdesc', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['pmtbdeptid', 'pmtbdeptdesc', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [PrWorkCenterTableMap::COL_PMTBDEPTID, PrWorkCenterTableMap::COL_PMTBDEPTDESC, PrWorkCenterTableMap::COL_DATEUPDTD, PrWorkCenterTableMap::COL_TIMEUPDTD, PrWorkCenterTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['PmtbDeptId', 'PmtbDeptDesc', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['Pmtbdeptid' => 0, 'Pmtbdeptdesc' => 1, 'Dateupdtd' => 2, 'Timeupdtd' => 3, 'Dummy' => 4, ],
        self::TYPE_CAMELNAME     => ['pmtbdeptid' => 0, 'pmtbdeptdesc' => 1, 'dateupdtd' => 2, 'timeupdtd' => 3, 'dummy' => 4, ],
        self::TYPE_COLNAME       => [PrWorkCenterTableMap::COL_PMTBDEPTID => 0, PrWorkCenterTableMap::COL_PMTBDEPTDESC => 1, PrWorkCenterTableMap::COL_DATEUPDTD => 2, PrWorkCenterTableMap::COL_TIMEUPDTD => 3, PrWorkCenterTableMap::COL_DUMMY => 4, ],
        self::TYPE_FIELDNAME     => ['PmtbDeptId' => 0, 'PmtbDeptDesc' => 1, 'DateUpdtd' => 2, 'TimeUpdtd' => 3, 'dummy' => 4, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Pmtbdeptid' => 'PMTBDEPTID',
        'PrWorkCenter.Pmtbdeptid' => 'PMTBDEPTID',
        'pmtbdeptid' => 'PMTBDEPTID',
        'prWorkCenter.pmtbdeptid' => 'PMTBDEPTID',
        'PrWorkCenterTableMap::COL_PMTBDEPTID' => 'PMTBDEPTID',
        'COL_PMTBDEPTID' => 'PMTBDEPTID',
        'PmtbDeptId' => 'PMTBDEPTID',
        'pr_work_center_cd.PmtbDeptId' => 'PMTBDEPTID',
        'Pmtbdeptdesc' => 'PMTBDEPTDESC',
        'PrWorkCenter.Pmtbdeptdesc' => 'PMTBDEPTDESC',
        'pmtbdeptdesc' => 'PMTBDEPTDESC',
        'prWorkCenter.pmtbdeptdesc' => 'PMTBDEPTDESC',
        'PrWorkCenterTableMap::COL_PMTBDEPTDESC' => 'PMTBDEPTDESC',
        'COL_PMTBDEPTDESC' => 'PMTBDEPTDESC',
        'PmtbDeptDesc' => 'PMTBDEPTDESC',
        'pr_work_center_cd.PmtbDeptDesc' => 'PMTBDEPTDESC',
        'Dateupdtd' => 'DATEUPDTD',
        'PrWorkCenter.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'prWorkCenter.dateupdtd' => 'DATEUPDTD',
        'PrWorkCenterTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'pr_work_center_cd.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'PrWorkCenter.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'prWorkCenter.timeupdtd' => 'TIMEUPDTD',
        'PrWorkCenterTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'pr_work_center_cd.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'PrWorkCenter.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'prWorkCenter.dummy' => 'DUMMY',
        'PrWorkCenterTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'pr_work_center_cd.dummy' => 'DUMMY',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('pr_work_center_cd');
        $this->setPhpName('PrWorkCenter');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PrWorkCenter');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PmtbDeptId', 'Pmtbdeptid', 'VARCHAR', true, 10, '');
        $this->addColumn('PmtbDeptDesc', 'Pmtbdeptdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('PrResource', '\\PrResource', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':PmtbDeptId',
    1 => ':PmtbDeptId',
  ),
), null, null, 'PrResources', false);
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbdeptid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbdeptid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbdeptid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbdeptid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbdeptid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbdeptid', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Pmtbdeptid', TableMap::TYPE_PHPNAME, $indexType)
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
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? PrWorkCenterTableMap::CLASS_DEFAULT : PrWorkCenterTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (PrWorkCenter object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = PrWorkCenterTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PrWorkCenterTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PrWorkCenterTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PrWorkCenterTableMap::OM_CLASS;
            /** @var PrWorkCenter $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PrWorkCenterTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = PrWorkCenterTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PrWorkCenterTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PrWorkCenter $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PrWorkCenterTableMap::addInstanceToPool($obj, $key);
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
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(PrWorkCenterTableMap::COL_PMTBDEPTID);
            $criteria->addSelectColumn(PrWorkCenterTableMap::COL_PMTBDEPTDESC);
            $criteria->addSelectColumn(PrWorkCenterTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PrWorkCenterTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PrWorkCenterTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PmtbDeptId');
            $criteria->addSelectColumn($alias . '.PmtbDeptDesc');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(PrWorkCenterTableMap::COL_PMTBDEPTID);
            $criteria->removeSelectColumn(PrWorkCenterTableMap::COL_PMTBDEPTDESC);
            $criteria->removeSelectColumn(PrWorkCenterTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(PrWorkCenterTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(PrWorkCenterTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.PmtbDeptId');
            $criteria->removeSelectColumn($alias . '.PmtbDeptDesc');
            $criteria->removeSelectColumn($alias . '.DateUpdtd');
            $criteria->removeSelectColumn($alias . '.TimeUpdtd');
            $criteria->removeSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(PrWorkCenterTableMap::DATABASE_NAME)->getTable(PrWorkCenterTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a PrWorkCenter or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or PrWorkCenter object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PrWorkCenterTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PrWorkCenter) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PrWorkCenterTableMap::DATABASE_NAME);
            $criteria->add(PrWorkCenterTableMap::COL_PMTBDEPTID, (array) $values, Criteria::IN);
        }

        $query = PrWorkCenterQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PrWorkCenterTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PrWorkCenterTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the pr_work_center_cd table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return PrWorkCenterQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PrWorkCenter or Criteria object.
     *
     * @param mixed $criteria Criteria or PrWorkCenter object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PrWorkCenterTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PrWorkCenter object
        }


        // Set the correct dbName
        $query = PrWorkCenterQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
