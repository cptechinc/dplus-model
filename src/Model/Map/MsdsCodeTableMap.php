<?php

namespace Map;

use \MsdsCode;
use \MsdsCodeQuery;
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
 * This class defines the structure of the 'inv_msds_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class MsdsCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.MsdsCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_msds_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'MsdsCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\MsdsCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'MsdsCode';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the IntbMsdsCode field
     */
    public const COL_INTBMSDSCODE = 'inv_msds_code.IntbMsdsCode';

    /**
     * the column name for the IntbMsdsDesc field
     */
    public const COL_INTBMSDSDESC = 'inv_msds_code.IntbMsdsDesc';

    /**
     * the column name for the IntbMsdsEfftDate field
     */
    public const COL_INTBMSDSEFFTDATE = 'inv_msds_code.IntbMsdsEfftDate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_msds_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_msds_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_msds_code.dummy';

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
        self::TYPE_PHPNAME       => ['Intbmsdscode', 'Intbmsdsdesc', 'Intbmsdsefftdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['intbmsdscode', 'intbmsdsdesc', 'intbmsdsefftdate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [MsdsCodeTableMap::COL_INTBMSDSCODE, MsdsCodeTableMap::COL_INTBMSDSDESC, MsdsCodeTableMap::COL_INTBMSDSEFFTDATE, MsdsCodeTableMap::COL_DATEUPDTD, MsdsCodeTableMap::COL_TIMEUPDTD, MsdsCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['IntbMsdsCode', 'IntbMsdsDesc', 'IntbMsdsEfftDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
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
        self::TYPE_PHPNAME       => ['Intbmsdscode' => 0, 'Intbmsdsdesc' => 1, 'Intbmsdsefftdate' => 2, 'Dateupdtd' => 3, 'Timeupdtd' => 4, 'Dummy' => 5, ],
        self::TYPE_CAMELNAME     => ['intbmsdscode' => 0, 'intbmsdsdesc' => 1, 'intbmsdsefftdate' => 2, 'dateupdtd' => 3, 'timeupdtd' => 4, 'dummy' => 5, ],
        self::TYPE_COLNAME       => [MsdsCodeTableMap::COL_INTBMSDSCODE => 0, MsdsCodeTableMap::COL_INTBMSDSDESC => 1, MsdsCodeTableMap::COL_INTBMSDSEFFTDATE => 2, MsdsCodeTableMap::COL_DATEUPDTD => 3, MsdsCodeTableMap::COL_TIMEUPDTD => 4, MsdsCodeTableMap::COL_DUMMY => 5, ],
        self::TYPE_FIELDNAME     => ['IntbMsdsCode' => 0, 'IntbMsdsDesc' => 1, 'IntbMsdsEfftDate' => 2, 'DateUpdtd' => 3, 'TimeUpdtd' => 4, 'dummy' => 5, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Intbmsdscode' => 'INTBMSDSCODE',
        'MsdsCode.Intbmsdscode' => 'INTBMSDSCODE',
        'intbmsdscode' => 'INTBMSDSCODE',
        'msdsCode.intbmsdscode' => 'INTBMSDSCODE',
        'MsdsCodeTableMap::COL_INTBMSDSCODE' => 'INTBMSDSCODE',
        'COL_INTBMSDSCODE' => 'INTBMSDSCODE',
        'IntbMsdsCode' => 'INTBMSDSCODE',
        'inv_msds_code.IntbMsdsCode' => 'INTBMSDSCODE',
        'Intbmsdsdesc' => 'INTBMSDSDESC',
        'MsdsCode.Intbmsdsdesc' => 'INTBMSDSDESC',
        'intbmsdsdesc' => 'INTBMSDSDESC',
        'msdsCode.intbmsdsdesc' => 'INTBMSDSDESC',
        'MsdsCodeTableMap::COL_INTBMSDSDESC' => 'INTBMSDSDESC',
        'COL_INTBMSDSDESC' => 'INTBMSDSDESC',
        'IntbMsdsDesc' => 'INTBMSDSDESC',
        'inv_msds_code.IntbMsdsDesc' => 'INTBMSDSDESC',
        'Intbmsdsefftdate' => 'INTBMSDSEFFTDATE',
        'MsdsCode.Intbmsdsefftdate' => 'INTBMSDSEFFTDATE',
        'intbmsdsefftdate' => 'INTBMSDSEFFTDATE',
        'msdsCode.intbmsdsefftdate' => 'INTBMSDSEFFTDATE',
        'MsdsCodeTableMap::COL_INTBMSDSEFFTDATE' => 'INTBMSDSEFFTDATE',
        'COL_INTBMSDSEFFTDATE' => 'INTBMSDSEFFTDATE',
        'IntbMsdsEfftDate' => 'INTBMSDSEFFTDATE',
        'inv_msds_code.IntbMsdsEfftDate' => 'INTBMSDSEFFTDATE',
        'Dateupdtd' => 'DATEUPDTD',
        'MsdsCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'msdsCode.dateupdtd' => 'DATEUPDTD',
        'MsdsCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_msds_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'MsdsCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'msdsCode.timeupdtd' => 'TIMEUPDTD',
        'MsdsCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_msds_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'MsdsCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'msdsCode.dummy' => 'DUMMY',
        'MsdsCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_msds_code.dummy' => 'DUMMY',
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
        $this->setName('inv_msds_code');
        $this->setPhpName('MsdsCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\MsdsCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbMsdsCode', 'Intbmsdscode', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbMsdsDesc', 'Intbmsdsdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbMsdsEfftDate', 'Intbmsdsefftdate', 'VARCHAR', false, 8, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? MsdsCodeTableMap::CLASS_DEFAULT : MsdsCodeTableMap::OM_CLASS;
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
     * @return array (MsdsCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = MsdsCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = MsdsCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + MsdsCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MsdsCodeTableMap::OM_CLASS;
            /** @var MsdsCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            MsdsCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = MsdsCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = MsdsCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var MsdsCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MsdsCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(MsdsCodeTableMap::COL_INTBMSDSCODE);
            $criteria->addSelectColumn(MsdsCodeTableMap::COL_INTBMSDSDESC);
            $criteria->addSelectColumn(MsdsCodeTableMap::COL_INTBMSDSEFFTDATE);
            $criteria->addSelectColumn(MsdsCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(MsdsCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(MsdsCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbMsdsCode');
            $criteria->addSelectColumn($alias . '.IntbMsdsDesc');
            $criteria->addSelectColumn($alias . '.IntbMsdsEfftDate');
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
            $criteria->removeSelectColumn(MsdsCodeTableMap::COL_INTBMSDSCODE);
            $criteria->removeSelectColumn(MsdsCodeTableMap::COL_INTBMSDSDESC);
            $criteria->removeSelectColumn(MsdsCodeTableMap::COL_INTBMSDSEFFTDATE);
            $criteria->removeSelectColumn(MsdsCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(MsdsCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(MsdsCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.IntbMsdsCode');
            $criteria->removeSelectColumn($alias . '.IntbMsdsDesc');
            $criteria->removeSelectColumn($alias . '.IntbMsdsEfftDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(MsdsCodeTableMap::DATABASE_NAME)->getTable(MsdsCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a MsdsCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or MsdsCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(MsdsCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \MsdsCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MsdsCodeTableMap::DATABASE_NAME);
            $criteria->add(MsdsCodeTableMap::COL_INTBMSDSCODE, (array) $values, Criteria::IN);
        }

        $query = MsdsCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            MsdsCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                MsdsCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_msds_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return MsdsCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a MsdsCode or Criteria object.
     *
     * @param mixed $criteria Criteria or MsdsCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MsdsCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from MsdsCode object
        }


        // Set the correct dbName
        $query = MsdsCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
