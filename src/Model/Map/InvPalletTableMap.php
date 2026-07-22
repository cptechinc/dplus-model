<?php

namespace Map;

use \InvPallet;
use \InvPalletQuery;
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
 * This class defines the structure of the 'pallet_header' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvPalletTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvPalletTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'pallet_header';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvPallet';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvPallet';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvPallet';

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
     * the column name for the PlthPalletId field
     */
    public const COL_PLTHPALLETID = 'pallet_header.PlthPalletId';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'pallet_header.InitItemNbr';

    /**
     * the column name for the PlthBin field
     */
    public const COL_PLTHBIN = 'pallet_header.PlthBin';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'pallet_header.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'pallet_header.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'pallet_header.dummy';

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
        self::TYPE_PHPNAME       => ['Plthpalletid', 'Inititemnbr', 'Plthbin', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['plthpalletid', 'inititemnbr', 'plthbin', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvPalletTableMap::COL_PLTHPALLETID, InvPalletTableMap::COL_INITITEMNBR, InvPalletTableMap::COL_PLTHBIN, InvPalletTableMap::COL_DATEUPDTD, InvPalletTableMap::COL_TIMEUPDTD, InvPalletTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['PlthPalletId', 'InitItemNbr', 'PlthBin', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Plthpalletid' => 0, 'Inititemnbr' => 1, 'Plthbin' => 2, 'Dateupdtd' => 3, 'Timeupdtd' => 4, 'Dummy' => 5, ],
        self::TYPE_CAMELNAME     => ['plthpalletid' => 0, 'inititemnbr' => 1, 'plthbin' => 2, 'dateupdtd' => 3, 'timeupdtd' => 4, 'dummy' => 5, ],
        self::TYPE_COLNAME       => [InvPalletTableMap::COL_PLTHPALLETID => 0, InvPalletTableMap::COL_INITITEMNBR => 1, InvPalletTableMap::COL_PLTHBIN => 2, InvPalletTableMap::COL_DATEUPDTD => 3, InvPalletTableMap::COL_TIMEUPDTD => 4, InvPalletTableMap::COL_DUMMY => 5, ],
        self::TYPE_FIELDNAME     => ['PlthPalletId' => 0, 'InitItemNbr' => 1, 'PlthBin' => 2, 'DateUpdtd' => 3, 'TimeUpdtd' => 4, 'dummy' => 5, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Plthpalletid' => 'PLTHPALLETID',
        'InvPallet.Plthpalletid' => 'PLTHPALLETID',
        'plthpalletid' => 'PLTHPALLETID',
        'invPallet.plthpalletid' => 'PLTHPALLETID',
        'InvPalletTableMap::COL_PLTHPALLETID' => 'PLTHPALLETID',
        'COL_PLTHPALLETID' => 'PLTHPALLETID',
        'PlthPalletId' => 'PLTHPALLETID',
        'pallet_header.PlthPalletId' => 'PLTHPALLETID',
        'Inititemnbr' => 'INITITEMNBR',
        'InvPallet.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'invPallet.inititemnbr' => 'INITITEMNBR',
        'InvPalletTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'pallet_header.InitItemNbr' => 'INITITEMNBR',
        'Plthbin' => 'PLTHBIN',
        'InvPallet.Plthbin' => 'PLTHBIN',
        'plthbin' => 'PLTHBIN',
        'invPallet.plthbin' => 'PLTHBIN',
        'InvPalletTableMap::COL_PLTHBIN' => 'PLTHBIN',
        'COL_PLTHBIN' => 'PLTHBIN',
        'PlthBin' => 'PLTHBIN',
        'pallet_header.PlthBin' => 'PLTHBIN',
        'Dateupdtd' => 'DATEUPDTD',
        'InvPallet.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invPallet.dateupdtd' => 'DATEUPDTD',
        'InvPalletTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'pallet_header.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvPallet.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invPallet.timeupdtd' => 'TIMEUPDTD',
        'InvPalletTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'pallet_header.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvPallet.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invPallet.dummy' => 'DUMMY',
        'InvPalletTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'pallet_header.dummy' => 'DUMMY',
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
        $this->setName('pallet_header');
        $this->setPhpName('InvPallet');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvPallet');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PlthPalletId', 'Plthpalletid', 'VARCHAR', true, 12, '');
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('PlthBin', 'Plthbin', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvPalletLot', '\\InvPalletLot', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':PlthPalletId',
    1 => ':PlthPalletId',
  ),
), null, null, 'InvPalletLots', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Plthpalletid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Plthpalletid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Plthpalletid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Plthpalletid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Plthpalletid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Plthpalletid', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Plthpalletid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvPalletTableMap::CLASS_DEFAULT : InvPalletTableMap::OM_CLASS;
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
     * @return array (InvPallet object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvPalletTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvPalletTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvPalletTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvPalletTableMap::OM_CLASS;
            /** @var InvPallet $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvPalletTableMap::addInstanceToPool($obj, $key);
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
            $key = InvPalletTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvPalletTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvPallet $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvPalletTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvPalletTableMap::COL_PLTHPALLETID);
            $criteria->addSelectColumn(InvPalletTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvPalletTableMap::COL_PLTHBIN);
            $criteria->addSelectColumn(InvPalletTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvPalletTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvPalletTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PlthPalletId');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.PlthBin');
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
            $criteria->removeSelectColumn(InvPalletTableMap::COL_PLTHPALLETID);
            $criteria->removeSelectColumn(InvPalletTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(InvPalletTableMap::COL_PLTHBIN);
            $criteria->removeSelectColumn(InvPalletTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvPalletTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvPalletTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.PlthPalletId');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.PlthBin');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvPalletTableMap::DATABASE_NAME)->getTable(InvPalletTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvPallet or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvPallet object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvPalletTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvPallet) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvPalletTableMap::DATABASE_NAME);
            $criteria->add(InvPalletTableMap::COL_PLTHPALLETID, (array) $values, Criteria::IN);
        }

        $query = InvPalletQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvPalletTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvPalletTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the pallet_header table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvPalletQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvPallet or Criteria object.
     *
     * @param mixed $criteria Criteria or InvPallet object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvPalletTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvPallet object
        }


        // Set the correct dbName
        $query = InvPalletQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
