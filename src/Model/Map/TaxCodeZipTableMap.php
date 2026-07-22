<?php

namespace Map;

use \TaxCodeZip;
use \TaxCodeZipQuery;
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
 * This class defines the structure of the 'ar_cust_txzp' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class TaxCodeZipTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.TaxCodeZipTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ar_cust_txzp';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'TaxCodeZip';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\TaxCodeZip';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'TaxCodeZip';

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
     * the column name for the ArtbZipCode field
     */
    public const COL_ARTBZIPCODE = 'ar_cust_txzp.ArtbZipCode';

    /**
     * the column name for the ArtbTxzpTaxCode field
     */
    public const COL_ARTBTXZPTAXCODE = 'ar_cust_txzp.ArtbTxzpTaxCode';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ar_cust_txzp.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ar_cust_txzp.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ar_cust_txzp.dummy';

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
        self::TYPE_PHPNAME       => ['Artbzipcode', 'Artbtxzptaxcode', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['artbzipcode', 'artbtxzptaxcode', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [TaxCodeZipTableMap::COL_ARTBZIPCODE, TaxCodeZipTableMap::COL_ARTBTXZPTAXCODE, TaxCodeZipTableMap::COL_DATEUPDTD, TaxCodeZipTableMap::COL_TIMEUPDTD, TaxCodeZipTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ArtbZipCode', 'ArtbTxzpTaxCode', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Artbzipcode' => 0, 'Artbtxzptaxcode' => 1, 'Dateupdtd' => 2, 'Timeupdtd' => 3, 'Dummy' => 4, ],
        self::TYPE_CAMELNAME     => ['artbzipcode' => 0, 'artbtxzptaxcode' => 1, 'dateupdtd' => 2, 'timeupdtd' => 3, 'dummy' => 4, ],
        self::TYPE_COLNAME       => [TaxCodeZipTableMap::COL_ARTBZIPCODE => 0, TaxCodeZipTableMap::COL_ARTBTXZPTAXCODE => 1, TaxCodeZipTableMap::COL_DATEUPDTD => 2, TaxCodeZipTableMap::COL_TIMEUPDTD => 3, TaxCodeZipTableMap::COL_DUMMY => 4, ],
        self::TYPE_FIELDNAME     => ['ArtbZipCode' => 0, 'ArtbTxzpTaxCode' => 1, 'DateUpdtd' => 2, 'TimeUpdtd' => 3, 'dummy' => 4, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Artbzipcode' => 'ARTBZIPCODE',
        'TaxCodeZip.Artbzipcode' => 'ARTBZIPCODE',
        'artbzipcode' => 'ARTBZIPCODE',
        'taxCodeZip.artbzipcode' => 'ARTBZIPCODE',
        'TaxCodeZipTableMap::COL_ARTBZIPCODE' => 'ARTBZIPCODE',
        'COL_ARTBZIPCODE' => 'ARTBZIPCODE',
        'ArtbZipCode' => 'ARTBZIPCODE',
        'ar_cust_txzp.ArtbZipCode' => 'ARTBZIPCODE',
        'Artbtxzptaxcode' => 'ARTBTXZPTAXCODE',
        'TaxCodeZip.Artbtxzptaxcode' => 'ARTBTXZPTAXCODE',
        'artbtxzptaxcode' => 'ARTBTXZPTAXCODE',
        'taxCodeZip.artbtxzptaxcode' => 'ARTBTXZPTAXCODE',
        'TaxCodeZipTableMap::COL_ARTBTXZPTAXCODE' => 'ARTBTXZPTAXCODE',
        'COL_ARTBTXZPTAXCODE' => 'ARTBTXZPTAXCODE',
        'ArtbTxzpTaxCode' => 'ARTBTXZPTAXCODE',
        'ar_cust_txzp.ArtbTxzpTaxCode' => 'ARTBTXZPTAXCODE',
        'Dateupdtd' => 'DATEUPDTD',
        'TaxCodeZip.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'taxCodeZip.dateupdtd' => 'DATEUPDTD',
        'TaxCodeZipTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ar_cust_txzp.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'TaxCodeZip.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'taxCodeZip.timeupdtd' => 'TIMEUPDTD',
        'TaxCodeZipTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ar_cust_txzp.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'TaxCodeZip.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'taxCodeZip.dummy' => 'DUMMY',
        'TaxCodeZipTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ar_cust_txzp.dummy' => 'DUMMY',
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
        $this->setName('ar_cust_txzp');
        $this->setPhpName('TaxCodeZip');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TaxCodeZip');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArtbZipCode', 'Artbzipcode', 'VARCHAR', true, 8, '');
        $this->addColumn('ArtbTxzpTaxCode', 'Artbtxzptaxcode', 'VARCHAR', false, 6, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbzipcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbzipcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbzipcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbzipcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbzipcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbzipcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Artbzipcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TaxCodeZipTableMap::CLASS_DEFAULT : TaxCodeZipTableMap::OM_CLASS;
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
     * @return array (TaxCodeZip object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = TaxCodeZipTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TaxCodeZipTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TaxCodeZipTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TaxCodeZipTableMap::OM_CLASS;
            /** @var TaxCodeZip $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TaxCodeZipTableMap::addInstanceToPool($obj, $key);
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
            $key = TaxCodeZipTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TaxCodeZipTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TaxCodeZip $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TaxCodeZipTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TaxCodeZipTableMap::COL_ARTBZIPCODE);
            $criteria->addSelectColumn(TaxCodeZipTableMap::COL_ARTBTXZPTAXCODE);
            $criteria->addSelectColumn(TaxCodeZipTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(TaxCodeZipTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(TaxCodeZipTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArtbZipCode');
            $criteria->addSelectColumn($alias . '.ArtbTxzpTaxCode');
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
            $criteria->removeSelectColumn(TaxCodeZipTableMap::COL_ARTBZIPCODE);
            $criteria->removeSelectColumn(TaxCodeZipTableMap::COL_ARTBTXZPTAXCODE);
            $criteria->removeSelectColumn(TaxCodeZipTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(TaxCodeZipTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(TaxCodeZipTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ArtbZipCode');
            $criteria->removeSelectColumn($alias . '.ArtbTxzpTaxCode');
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
        return Propel::getServiceContainer()->getDatabaseMap(TaxCodeZipTableMap::DATABASE_NAME)->getTable(TaxCodeZipTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a TaxCodeZip or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or TaxCodeZip object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TaxCodeZipTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TaxCodeZip) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TaxCodeZipTableMap::DATABASE_NAME);
            $criteria->add(TaxCodeZipTableMap::COL_ARTBZIPCODE, (array) $values, Criteria::IN);
        }

        $query = TaxCodeZipQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TaxCodeZipTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TaxCodeZipTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cust_txzp table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return TaxCodeZipQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TaxCodeZip or Criteria object.
     *
     * @param mixed $criteria Criteria or TaxCodeZip object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TaxCodeZipTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TaxCodeZip object
        }


        // Set the correct dbName
        $query = TaxCodeZipQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
