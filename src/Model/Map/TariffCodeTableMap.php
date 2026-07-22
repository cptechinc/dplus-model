<?php

namespace Map;

use \TariffCode;
use \TariffCodeQuery;
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
 * This class defines the structure of the 'inv_tari_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class TariffCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.TariffCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_tari_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'TariffCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\TariffCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'TariffCode';

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
     * the column name for the IntbTariCode field
     */
    public const COL_INTBTARICODE = 'inv_tari_code.IntbTariCode';

    /**
     * the column name for the IntbTariNbr field
     */
    public const COL_INTBTARINBR = 'inv_tari_code.IntbTariNbr';

    /**
     * the column name for the IntbTariDesc field
     */
    public const COL_INTBTARIDESC = 'inv_tari_code.IntbTariDesc';

    /**
     * the column name for the IntbTariDutyRatePct field
     */
    public const COL_INTBTARIDUTYRATEPCT = 'inv_tari_code.IntbTariDutyRatePct';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_tari_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_tari_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_tari_code.dummy';

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
        self::TYPE_PHPNAME       => ['Intbtaricode', 'Intbtarinbr', 'Intbtaridesc', 'Intbtaridutyratepct', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['intbtaricode', 'intbtarinbr', 'intbtaridesc', 'intbtaridutyratepct', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [TariffCodeTableMap::COL_INTBTARICODE, TariffCodeTableMap::COL_INTBTARINBR, TariffCodeTableMap::COL_INTBTARIDESC, TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT, TariffCodeTableMap::COL_DATEUPDTD, TariffCodeTableMap::COL_TIMEUPDTD, TariffCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['IntbTariCode', 'IntbTariNbr', 'IntbTariDesc', 'IntbTariDutyRatePct', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Intbtaricode' => 0, 'Intbtarinbr' => 1, 'Intbtaridesc' => 2, 'Intbtaridutyratepct' => 3, 'Dateupdtd' => 4, 'Timeupdtd' => 5, 'Dummy' => 6, ],
        self::TYPE_CAMELNAME     => ['intbtaricode' => 0, 'intbtarinbr' => 1, 'intbtaridesc' => 2, 'intbtaridutyratepct' => 3, 'dateupdtd' => 4, 'timeupdtd' => 5, 'dummy' => 6, ],
        self::TYPE_COLNAME       => [TariffCodeTableMap::COL_INTBTARICODE => 0, TariffCodeTableMap::COL_INTBTARINBR => 1, TariffCodeTableMap::COL_INTBTARIDESC => 2, TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT => 3, TariffCodeTableMap::COL_DATEUPDTD => 4, TariffCodeTableMap::COL_TIMEUPDTD => 5, TariffCodeTableMap::COL_DUMMY => 6, ],
        self::TYPE_FIELDNAME     => ['IntbTariCode' => 0, 'IntbTariNbr' => 1, 'IntbTariDesc' => 2, 'IntbTariDutyRatePct' => 3, 'DateUpdtd' => 4, 'TimeUpdtd' => 5, 'dummy' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Intbtaricode' => 'INTBTARICODE',
        'TariffCode.Intbtaricode' => 'INTBTARICODE',
        'intbtaricode' => 'INTBTARICODE',
        'tariffCode.intbtaricode' => 'INTBTARICODE',
        'TariffCodeTableMap::COL_INTBTARICODE' => 'INTBTARICODE',
        'COL_INTBTARICODE' => 'INTBTARICODE',
        'IntbTariCode' => 'INTBTARICODE',
        'inv_tari_code.IntbTariCode' => 'INTBTARICODE',
        'Intbtarinbr' => 'INTBTARINBR',
        'TariffCode.Intbtarinbr' => 'INTBTARINBR',
        'intbtarinbr' => 'INTBTARINBR',
        'tariffCode.intbtarinbr' => 'INTBTARINBR',
        'TariffCodeTableMap::COL_INTBTARINBR' => 'INTBTARINBR',
        'COL_INTBTARINBR' => 'INTBTARINBR',
        'IntbTariNbr' => 'INTBTARINBR',
        'inv_tari_code.IntbTariNbr' => 'INTBTARINBR',
        'Intbtaridesc' => 'INTBTARIDESC',
        'TariffCode.Intbtaridesc' => 'INTBTARIDESC',
        'intbtaridesc' => 'INTBTARIDESC',
        'tariffCode.intbtaridesc' => 'INTBTARIDESC',
        'TariffCodeTableMap::COL_INTBTARIDESC' => 'INTBTARIDESC',
        'COL_INTBTARIDESC' => 'INTBTARIDESC',
        'IntbTariDesc' => 'INTBTARIDESC',
        'inv_tari_code.IntbTariDesc' => 'INTBTARIDESC',
        'Intbtaridutyratepct' => 'INTBTARIDUTYRATEPCT',
        'TariffCode.Intbtaridutyratepct' => 'INTBTARIDUTYRATEPCT',
        'intbtaridutyratepct' => 'INTBTARIDUTYRATEPCT',
        'tariffCode.intbtaridutyratepct' => 'INTBTARIDUTYRATEPCT',
        'TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT' => 'INTBTARIDUTYRATEPCT',
        'COL_INTBTARIDUTYRATEPCT' => 'INTBTARIDUTYRATEPCT',
        'IntbTariDutyRatePct' => 'INTBTARIDUTYRATEPCT',
        'inv_tari_code.IntbTariDutyRatePct' => 'INTBTARIDUTYRATEPCT',
        'Dateupdtd' => 'DATEUPDTD',
        'TariffCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'tariffCode.dateupdtd' => 'DATEUPDTD',
        'TariffCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_tari_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'TariffCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'tariffCode.timeupdtd' => 'TIMEUPDTD',
        'TariffCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_tari_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'TariffCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'tariffCode.dummy' => 'DUMMY',
        'TariffCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_tari_code.dummy' => 'DUMMY',
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
        $this->setName('inv_tari_code');
        $this->setPhpName('TariffCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TariffCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbTariCode', 'Intbtaricode', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbTariNbr', 'Intbtarinbr', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbTariDesc', 'Intbtaridesc', 'VARCHAR', false, 30, null);
        $this->addColumn('IntbTariDutyRatePct', 'Intbtaridutyratepct', 'DECIMAL', false, 20, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbtaricode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TariffCodeTableMap::CLASS_DEFAULT : TariffCodeTableMap::OM_CLASS;
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
     * @return array (TariffCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = TariffCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TariffCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TariffCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TariffCodeTableMap::OM_CLASS;
            /** @var TariffCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TariffCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = TariffCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TariffCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TariffCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TariffCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TariffCodeTableMap::COL_INTBTARICODE);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_INTBTARINBR);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_INTBTARIDESC);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(TariffCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbTariCode');
            $criteria->addSelectColumn($alias . '.IntbTariNbr');
            $criteria->addSelectColumn($alias . '.IntbTariDesc');
            $criteria->addSelectColumn($alias . '.IntbTariDutyRatePct');
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
            $criteria->removeSelectColumn(TariffCodeTableMap::COL_INTBTARICODE);
            $criteria->removeSelectColumn(TariffCodeTableMap::COL_INTBTARINBR);
            $criteria->removeSelectColumn(TariffCodeTableMap::COL_INTBTARIDESC);
            $criteria->removeSelectColumn(TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT);
            $criteria->removeSelectColumn(TariffCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(TariffCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(TariffCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.IntbTariCode');
            $criteria->removeSelectColumn($alias . '.IntbTariNbr');
            $criteria->removeSelectColumn($alias . '.IntbTariDesc');
            $criteria->removeSelectColumn($alias . '.IntbTariDutyRatePct');
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
        return Propel::getServiceContainer()->getDatabaseMap(TariffCodeTableMap::DATABASE_NAME)->getTable(TariffCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a TariffCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or TariffCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TariffCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TariffCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TariffCodeTableMap::DATABASE_NAME);
            $criteria->add(TariffCodeTableMap::COL_INTBTARICODE, (array) $values, Criteria::IN);
        }

        $query = TariffCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TariffCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TariffCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_tari_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return TariffCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TariffCode or Criteria object.
     *
     * @param mixed $criteria Criteria or TariffCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TariffCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TariffCode object
        }


        // Set the correct dbName
        $query = TariffCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
