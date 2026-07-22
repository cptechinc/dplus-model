<?php

namespace Map;

use \LostSalesCode;
use \LostSalesCodeQuery;
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
 * This class defines the structure of the 'so_lssl_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class LostSalesCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.LostSalesCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'so_lssl_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'LostSalesCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\LostSalesCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'LostSalesCode';

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
     * the column name for the OetbLsslCode field
     */
    public const COL_OETBLSSLCODE = 'so_lssl_code.OetbLsslCode';

    /**
     * the column name for the OetbLsslReasonDesc field
     */
    public const COL_OETBLSSLREASONDESC = 'so_lssl_code.OetbLsslReasonDesc';

    /**
     * the column name for the OetbLsslIwUpdate field
     */
    public const COL_OETBLSSLIWUPDATE = 'so_lssl_code.OetbLsslIwUpdate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'so_lssl_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'so_lssl_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'so_lssl_code.dummy';

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
        self::TYPE_PHPNAME       => ['Oetblsslcode', 'Oetblsslreasondesc', 'Oetblssliwupdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['oetblsslcode', 'oetblsslreasondesc', 'oetblssliwupdate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [LostSalesCodeTableMap::COL_OETBLSSLCODE, LostSalesCodeTableMap::COL_OETBLSSLREASONDESC, LostSalesCodeTableMap::COL_OETBLSSLIWUPDATE, LostSalesCodeTableMap::COL_DATEUPDTD, LostSalesCodeTableMap::COL_TIMEUPDTD, LostSalesCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['OetbLsslCode', 'OetbLsslReasonDesc', 'OetbLsslIwUpdate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Oetblsslcode' => 0, 'Oetblsslreasondesc' => 1, 'Oetblssliwupdate' => 2, 'Dateupdtd' => 3, 'Timeupdtd' => 4, 'Dummy' => 5, ],
        self::TYPE_CAMELNAME     => ['oetblsslcode' => 0, 'oetblsslreasondesc' => 1, 'oetblssliwupdate' => 2, 'dateupdtd' => 3, 'timeupdtd' => 4, 'dummy' => 5, ],
        self::TYPE_COLNAME       => [LostSalesCodeTableMap::COL_OETBLSSLCODE => 0, LostSalesCodeTableMap::COL_OETBLSSLREASONDESC => 1, LostSalesCodeTableMap::COL_OETBLSSLIWUPDATE => 2, LostSalesCodeTableMap::COL_DATEUPDTD => 3, LostSalesCodeTableMap::COL_TIMEUPDTD => 4, LostSalesCodeTableMap::COL_DUMMY => 5, ],
        self::TYPE_FIELDNAME     => ['OetbLsslCode' => 0, 'OetbLsslReasonDesc' => 1, 'OetbLsslIwUpdate' => 2, 'DateUpdtd' => 3, 'TimeUpdtd' => 4, 'dummy' => 5, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Oetblsslcode' => 'OETBLSSLCODE',
        'LostSalesCode.Oetblsslcode' => 'OETBLSSLCODE',
        'oetblsslcode' => 'OETBLSSLCODE',
        'lostSalesCode.oetblsslcode' => 'OETBLSSLCODE',
        'LostSalesCodeTableMap::COL_OETBLSSLCODE' => 'OETBLSSLCODE',
        'COL_OETBLSSLCODE' => 'OETBLSSLCODE',
        'OetbLsslCode' => 'OETBLSSLCODE',
        'so_lssl_code.OetbLsslCode' => 'OETBLSSLCODE',
        'Oetblsslreasondesc' => 'OETBLSSLREASONDESC',
        'LostSalesCode.Oetblsslreasondesc' => 'OETBLSSLREASONDESC',
        'oetblsslreasondesc' => 'OETBLSSLREASONDESC',
        'lostSalesCode.oetblsslreasondesc' => 'OETBLSSLREASONDESC',
        'LostSalesCodeTableMap::COL_OETBLSSLREASONDESC' => 'OETBLSSLREASONDESC',
        'COL_OETBLSSLREASONDESC' => 'OETBLSSLREASONDESC',
        'OetbLsslReasonDesc' => 'OETBLSSLREASONDESC',
        'so_lssl_code.OetbLsslReasonDesc' => 'OETBLSSLREASONDESC',
        'Oetblssliwupdate' => 'OETBLSSLIWUPDATE',
        'LostSalesCode.Oetblssliwupdate' => 'OETBLSSLIWUPDATE',
        'oetblssliwupdate' => 'OETBLSSLIWUPDATE',
        'lostSalesCode.oetblssliwupdate' => 'OETBLSSLIWUPDATE',
        'LostSalesCodeTableMap::COL_OETBLSSLIWUPDATE' => 'OETBLSSLIWUPDATE',
        'COL_OETBLSSLIWUPDATE' => 'OETBLSSLIWUPDATE',
        'OetbLsslIwUpdate' => 'OETBLSSLIWUPDATE',
        'so_lssl_code.OetbLsslIwUpdate' => 'OETBLSSLIWUPDATE',
        'Dateupdtd' => 'DATEUPDTD',
        'LostSalesCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'lostSalesCode.dateupdtd' => 'DATEUPDTD',
        'LostSalesCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'so_lssl_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'LostSalesCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'lostSalesCode.timeupdtd' => 'TIMEUPDTD',
        'LostSalesCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'so_lssl_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'LostSalesCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'lostSalesCode.dummy' => 'DUMMY',
        'LostSalesCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'so_lssl_code.dummy' => 'DUMMY',
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
        $this->setName('so_lssl_code');
        $this->setPhpName('LostSalesCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\LostSalesCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OetbLsslCode', 'Oetblsslcode', 'VARCHAR', true, 8, '');
        $this->addColumn('OetbLsslReasonDesc', 'Oetblsslreasondesc', 'VARCHAR', false, 20, null);
        $this->addColumn('OetbLsslIwUpdate', 'Oetblssliwupdate', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetblsslcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetblsslcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetblsslcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetblsslcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetblsslcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetblsslcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Oetblsslcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? LostSalesCodeTableMap::CLASS_DEFAULT : LostSalesCodeTableMap::OM_CLASS;
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
     * @return array (LostSalesCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = LostSalesCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = LostSalesCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + LostSalesCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LostSalesCodeTableMap::OM_CLASS;
            /** @var LostSalesCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            LostSalesCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = LostSalesCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = LostSalesCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var LostSalesCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LostSalesCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(LostSalesCodeTableMap::COL_OETBLSSLCODE);
            $criteria->addSelectColumn(LostSalesCodeTableMap::COL_OETBLSSLREASONDESC);
            $criteria->addSelectColumn(LostSalesCodeTableMap::COL_OETBLSSLIWUPDATE);
            $criteria->addSelectColumn(LostSalesCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(LostSalesCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(LostSalesCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OetbLsslCode');
            $criteria->addSelectColumn($alias . '.OetbLsslReasonDesc');
            $criteria->addSelectColumn($alias . '.OetbLsslIwUpdate');
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
            $criteria->removeSelectColumn(LostSalesCodeTableMap::COL_OETBLSSLCODE);
            $criteria->removeSelectColumn(LostSalesCodeTableMap::COL_OETBLSSLREASONDESC);
            $criteria->removeSelectColumn(LostSalesCodeTableMap::COL_OETBLSSLIWUPDATE);
            $criteria->removeSelectColumn(LostSalesCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(LostSalesCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(LostSalesCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.OetbLsslCode');
            $criteria->removeSelectColumn($alias . '.OetbLsslReasonDesc');
            $criteria->removeSelectColumn($alias . '.OetbLsslIwUpdate');
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
        return Propel::getServiceContainer()->getDatabaseMap(LostSalesCodeTableMap::DATABASE_NAME)->getTable(LostSalesCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a LostSalesCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or LostSalesCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(LostSalesCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \LostSalesCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LostSalesCodeTableMap::DATABASE_NAME);
            $criteria->add(LostSalesCodeTableMap::COL_OETBLSSLCODE, (array) $values, Criteria::IN);
        }

        $query = LostSalesCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            LostSalesCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                LostSalesCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_lssl_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return LostSalesCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a LostSalesCode or Criteria object.
     *
     * @param mixed $criteria Criteria or LostSalesCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(LostSalesCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from LostSalesCode object
        }


        // Set the correct dbName
        $query = LostSalesCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
