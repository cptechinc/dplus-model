<?php

namespace Map;

use \SoFreightRate;
use \SoFreightRateQuery;
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
 * This class defines the structure of the 'so_frtrate' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SoFreightRateTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.SoFreightRateTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'so_frtrate';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SoFreightRate';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\SoFreightRate';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'SoFreightRate';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the SfrtRateCode field
     */
    public const COL_SFRTRATECODE = 'so_frtrate.SfrtRateCode';

    /**
     * the column name for the SfrtRateDesc field
     */
    public const COL_SFRTRATEDESC = 'so_frtrate.SfrtRateDesc';

    /**
     * the column name for the SfrtAddOn field
     */
    public const COL_SFRTADDON = 'so_frtrate.SfrtAddOn';

    /**
     * the column name for the SfrtTripChrg field
     */
    public const COL_SFRTTRIPCHRG = 'so_frtrate.SfrtTripChrg';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'so_frtrate.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'so_frtrate.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'so_frtrate.dummy';

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
        self::TYPE_PHPNAME       => ['Sfrtratecode', 'Sfrtratedesc', 'Sfrtaddon', 'Sfrttripchrg', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['sfrtratecode', 'sfrtratedesc', 'sfrtaddon', 'sfrttripchrg', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [SoFreightRateTableMap::COL_SFRTRATECODE, SoFreightRateTableMap::COL_SFRTRATEDESC, SoFreightRateTableMap::COL_SFRTADDON, SoFreightRateTableMap::COL_SFRTTRIPCHRG, SoFreightRateTableMap::COL_DATEUPDTD, SoFreightRateTableMap::COL_TIMEUPDTD, SoFreightRateTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['SfrtRateCode', 'SfrtRateDesc', 'SfrtAddOn', 'SfrtTripChrg', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
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
        self::TYPE_PHPNAME       => ['Sfrtratecode' => 0, 'Sfrtratedesc' => 1, 'Sfrtaddon' => 2, 'Sfrttripchrg' => 3, 'Dateupdtd' => 4, 'Timeupdtd' => 5, 'Dummy' => 6, ],
        self::TYPE_CAMELNAME     => ['sfrtratecode' => 0, 'sfrtratedesc' => 1, 'sfrtaddon' => 2, 'sfrttripchrg' => 3, 'dateupdtd' => 4, 'timeupdtd' => 5, 'dummy' => 6, ],
        self::TYPE_COLNAME       => [SoFreightRateTableMap::COL_SFRTRATECODE => 0, SoFreightRateTableMap::COL_SFRTRATEDESC => 1, SoFreightRateTableMap::COL_SFRTADDON => 2, SoFreightRateTableMap::COL_SFRTTRIPCHRG => 3, SoFreightRateTableMap::COL_DATEUPDTD => 4, SoFreightRateTableMap::COL_TIMEUPDTD => 5, SoFreightRateTableMap::COL_DUMMY => 6, ],
        self::TYPE_FIELDNAME     => ['SfrtRateCode' => 0, 'SfrtRateDesc' => 1, 'SfrtAddOn' => 2, 'SfrtTripChrg' => 3, 'DateUpdtd' => 4, 'TimeUpdtd' => 5, 'dummy' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Sfrtratecode' => 'SFRTRATECODE',
        'SoFreightRate.Sfrtratecode' => 'SFRTRATECODE',
        'sfrtratecode' => 'SFRTRATECODE',
        'soFreightRate.sfrtratecode' => 'SFRTRATECODE',
        'SoFreightRateTableMap::COL_SFRTRATECODE' => 'SFRTRATECODE',
        'COL_SFRTRATECODE' => 'SFRTRATECODE',
        'SfrtRateCode' => 'SFRTRATECODE',
        'so_frtrate.SfrtRateCode' => 'SFRTRATECODE',
        'Sfrtratedesc' => 'SFRTRATEDESC',
        'SoFreightRate.Sfrtratedesc' => 'SFRTRATEDESC',
        'sfrtratedesc' => 'SFRTRATEDESC',
        'soFreightRate.sfrtratedesc' => 'SFRTRATEDESC',
        'SoFreightRateTableMap::COL_SFRTRATEDESC' => 'SFRTRATEDESC',
        'COL_SFRTRATEDESC' => 'SFRTRATEDESC',
        'SfrtRateDesc' => 'SFRTRATEDESC',
        'so_frtrate.SfrtRateDesc' => 'SFRTRATEDESC',
        'Sfrtaddon' => 'SFRTADDON',
        'SoFreightRate.Sfrtaddon' => 'SFRTADDON',
        'sfrtaddon' => 'SFRTADDON',
        'soFreightRate.sfrtaddon' => 'SFRTADDON',
        'SoFreightRateTableMap::COL_SFRTADDON' => 'SFRTADDON',
        'COL_SFRTADDON' => 'SFRTADDON',
        'SfrtAddOn' => 'SFRTADDON',
        'so_frtrate.SfrtAddOn' => 'SFRTADDON',
        'Sfrttripchrg' => 'SFRTTRIPCHRG',
        'SoFreightRate.Sfrttripchrg' => 'SFRTTRIPCHRG',
        'sfrttripchrg' => 'SFRTTRIPCHRG',
        'soFreightRate.sfrttripchrg' => 'SFRTTRIPCHRG',
        'SoFreightRateTableMap::COL_SFRTTRIPCHRG' => 'SFRTTRIPCHRG',
        'COL_SFRTTRIPCHRG' => 'SFRTTRIPCHRG',
        'SfrtTripChrg' => 'SFRTTRIPCHRG',
        'so_frtrate.SfrtTripChrg' => 'SFRTTRIPCHRG',
        'Dateupdtd' => 'DATEUPDTD',
        'SoFreightRate.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'soFreightRate.dateupdtd' => 'DATEUPDTD',
        'SoFreightRateTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'so_frtrate.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'SoFreightRate.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'soFreightRate.timeupdtd' => 'TIMEUPDTD',
        'SoFreightRateTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'so_frtrate.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'SoFreightRate.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'soFreightRate.dummy' => 'DUMMY',
        'SoFreightRateTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'so_frtrate.dummy' => 'DUMMY',
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
        $this->setName('so_frtrate');
        $this->setPhpName('SoFreightRate');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoFreightRate');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('SfrtRateCode', 'Sfrtratecode', 'VARCHAR', true, 1, '');
        $this->addColumn('SfrtRateDesc', 'Sfrtratedesc', 'VARCHAR', true, 30, '');
        $this->addColumn('SfrtAddOn', 'Sfrtaddon', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('SfrtTripChrg', 'Sfrttripchrg', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', true, 1, 'P');
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('Customer', '\\Customer', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuChrgFrt',
    1 => ':SfrtRateCode',
  ),
), null, null, 'Customers', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sfrtratecode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sfrtratecode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sfrtratecode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sfrtratecode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sfrtratecode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sfrtratecode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Sfrtratecode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SoFreightRateTableMap::CLASS_DEFAULT : SoFreightRateTableMap::OM_CLASS;
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
     * @return array (SoFreightRate object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SoFreightRateTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoFreightRateTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoFreightRateTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoFreightRateTableMap::OM_CLASS;
            /** @var SoFreightRate $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoFreightRateTableMap::addInstanceToPool($obj, $key);
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
            $key = SoFreightRateTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoFreightRateTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoFreightRate $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoFreightRateTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoFreightRateTableMap::COL_SFRTRATECODE);
            $criteria->addSelectColumn(SoFreightRateTableMap::COL_SFRTRATEDESC);
            $criteria->addSelectColumn(SoFreightRateTableMap::COL_SFRTADDON);
            $criteria->addSelectColumn(SoFreightRateTableMap::COL_SFRTTRIPCHRG);
            $criteria->addSelectColumn(SoFreightRateTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoFreightRateTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoFreightRateTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.SfrtRateCode');
            $criteria->addSelectColumn($alias . '.SfrtRateDesc');
            $criteria->addSelectColumn($alias . '.SfrtAddOn');
            $criteria->addSelectColumn($alias . '.SfrtTripChrg');
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
            $criteria->removeSelectColumn(SoFreightRateTableMap::COL_SFRTRATECODE);
            $criteria->removeSelectColumn(SoFreightRateTableMap::COL_SFRTRATEDESC);
            $criteria->removeSelectColumn(SoFreightRateTableMap::COL_SFRTADDON);
            $criteria->removeSelectColumn(SoFreightRateTableMap::COL_SFRTTRIPCHRG);
            $criteria->removeSelectColumn(SoFreightRateTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(SoFreightRateTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(SoFreightRateTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.SfrtRateCode');
            $criteria->removeSelectColumn($alias . '.SfrtRateDesc');
            $criteria->removeSelectColumn($alias . '.SfrtAddOn');
            $criteria->removeSelectColumn($alias . '.SfrtTripChrg');
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
        return Propel::getServiceContainer()->getDatabaseMap(SoFreightRateTableMap::DATABASE_NAME)->getTable(SoFreightRateTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SoFreightRate or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SoFreightRate object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoFreightRateTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoFreightRate) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoFreightRateTableMap::DATABASE_NAME);
            $criteria->add(SoFreightRateTableMap::COL_SFRTRATECODE, (array) $values, Criteria::IN);
        }

        $query = SoFreightRateQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoFreightRateTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoFreightRateTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_frtrate table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SoFreightRateQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoFreightRate or Criteria object.
     *
     * @param mixed $criteria Criteria or SoFreightRate object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoFreightRateTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoFreightRate object
        }


        // Set the correct dbName
        $query = SoFreightRateQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
