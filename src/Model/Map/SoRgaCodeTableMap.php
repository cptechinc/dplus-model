<?php

namespace Map;

use \SoRgaCode;
use \SoRgaCodeQuery;
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
 * This class defines the structure of the 'so_rgas_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SoRgaCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.SoRgaCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'so_rgas_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SoRgaCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\SoRgaCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'SoRgaCode';

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
     * the column name for the OetbRgasCode field
     */
    public const COL_OETBRGASCODE = 'so_rgas_code.OetbRgasCode';

    /**
     * the column name for the OetbRgasDesc field
     */
    public const COL_OETBRGASDESC = 'so_rgas_code.OetbRgasDesc';

    /**
     * the column name for the OetbRgasWhse field
     */
    public const COL_OETBRGASWHSE = 'so_rgas_code.OetbRgasWhse';

    /**
     * the column name for the OetbRgasShipAcctNbr field
     */
    public const COL_OETBRGASSHIPACCTNBR = 'so_rgas_code.OetbRgasShipAcctNbr';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'so_rgas_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'so_rgas_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'so_rgas_code.dummy';

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
        self::TYPE_PHPNAME       => ['Oetbrgascode', 'Oetbrgasdesc', 'Oetbrgaswhse', 'Oetbrgasshipacctnbr', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['oetbrgascode', 'oetbrgasdesc', 'oetbrgaswhse', 'oetbrgasshipacctnbr', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [SoRgaCodeTableMap::COL_OETBRGASCODE, SoRgaCodeTableMap::COL_OETBRGASDESC, SoRgaCodeTableMap::COL_OETBRGASWHSE, SoRgaCodeTableMap::COL_OETBRGASSHIPACCTNBR, SoRgaCodeTableMap::COL_DATEUPDTD, SoRgaCodeTableMap::COL_TIMEUPDTD, SoRgaCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['OetbRgasCode', 'OetbRgasDesc', 'OetbRgasWhse', 'OetbRgasShipAcctNbr', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Oetbrgascode' => 0, 'Oetbrgasdesc' => 1, 'Oetbrgaswhse' => 2, 'Oetbrgasshipacctnbr' => 3, 'Dateupdtd' => 4, 'Timeupdtd' => 5, 'Dummy' => 6, ],
        self::TYPE_CAMELNAME     => ['oetbrgascode' => 0, 'oetbrgasdesc' => 1, 'oetbrgaswhse' => 2, 'oetbrgasshipacctnbr' => 3, 'dateupdtd' => 4, 'timeupdtd' => 5, 'dummy' => 6, ],
        self::TYPE_COLNAME       => [SoRgaCodeTableMap::COL_OETBRGASCODE => 0, SoRgaCodeTableMap::COL_OETBRGASDESC => 1, SoRgaCodeTableMap::COL_OETBRGASWHSE => 2, SoRgaCodeTableMap::COL_OETBRGASSHIPACCTNBR => 3, SoRgaCodeTableMap::COL_DATEUPDTD => 4, SoRgaCodeTableMap::COL_TIMEUPDTD => 5, SoRgaCodeTableMap::COL_DUMMY => 6, ],
        self::TYPE_FIELDNAME     => ['OetbRgasCode' => 0, 'OetbRgasDesc' => 1, 'OetbRgasWhse' => 2, 'OetbRgasShipAcctNbr' => 3, 'DateUpdtd' => 4, 'TimeUpdtd' => 5, 'dummy' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Oetbrgascode' => 'OETBRGASCODE',
        'SoRgaCode.Oetbrgascode' => 'OETBRGASCODE',
        'oetbrgascode' => 'OETBRGASCODE',
        'soRgaCode.oetbrgascode' => 'OETBRGASCODE',
        'SoRgaCodeTableMap::COL_OETBRGASCODE' => 'OETBRGASCODE',
        'COL_OETBRGASCODE' => 'OETBRGASCODE',
        'OetbRgasCode' => 'OETBRGASCODE',
        'so_rgas_code.OetbRgasCode' => 'OETBRGASCODE',
        'Oetbrgasdesc' => 'OETBRGASDESC',
        'SoRgaCode.Oetbrgasdesc' => 'OETBRGASDESC',
        'oetbrgasdesc' => 'OETBRGASDESC',
        'soRgaCode.oetbrgasdesc' => 'OETBRGASDESC',
        'SoRgaCodeTableMap::COL_OETBRGASDESC' => 'OETBRGASDESC',
        'COL_OETBRGASDESC' => 'OETBRGASDESC',
        'OetbRgasDesc' => 'OETBRGASDESC',
        'so_rgas_code.OetbRgasDesc' => 'OETBRGASDESC',
        'Oetbrgaswhse' => 'OETBRGASWHSE',
        'SoRgaCode.Oetbrgaswhse' => 'OETBRGASWHSE',
        'oetbrgaswhse' => 'OETBRGASWHSE',
        'soRgaCode.oetbrgaswhse' => 'OETBRGASWHSE',
        'SoRgaCodeTableMap::COL_OETBRGASWHSE' => 'OETBRGASWHSE',
        'COL_OETBRGASWHSE' => 'OETBRGASWHSE',
        'OetbRgasWhse' => 'OETBRGASWHSE',
        'so_rgas_code.OetbRgasWhse' => 'OETBRGASWHSE',
        'Oetbrgasshipacctnbr' => 'OETBRGASSHIPACCTNBR',
        'SoRgaCode.Oetbrgasshipacctnbr' => 'OETBRGASSHIPACCTNBR',
        'oetbrgasshipacctnbr' => 'OETBRGASSHIPACCTNBR',
        'soRgaCode.oetbrgasshipacctnbr' => 'OETBRGASSHIPACCTNBR',
        'SoRgaCodeTableMap::COL_OETBRGASSHIPACCTNBR' => 'OETBRGASSHIPACCTNBR',
        'COL_OETBRGASSHIPACCTNBR' => 'OETBRGASSHIPACCTNBR',
        'OetbRgasShipAcctNbr' => 'OETBRGASSHIPACCTNBR',
        'so_rgas_code.OetbRgasShipAcctNbr' => 'OETBRGASSHIPACCTNBR',
        'Dateupdtd' => 'DATEUPDTD',
        'SoRgaCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'soRgaCode.dateupdtd' => 'DATEUPDTD',
        'SoRgaCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'so_rgas_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'SoRgaCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'soRgaCode.timeupdtd' => 'TIMEUPDTD',
        'SoRgaCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'so_rgas_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'SoRgaCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'soRgaCode.dummy' => 'DUMMY',
        'SoRgaCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'so_rgas_code.dummy' => 'DUMMY',
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
        $this->setName('so_rgas_code');
        $this->setPhpName('SoRgaCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoRgaCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OetbRgasCode', 'Oetbrgascode', 'VARCHAR', true, 8, '');
        $this->addColumn('OetbRgasDesc', 'Oetbrgasdesc', 'VARCHAR', false, 35, null);
        $this->addColumn('OetbRgasWhse', 'Oetbrgaswhse', 'VARCHAR', false, 2, null);
        $this->addColumn('OetbRgasShipAcctNbr', 'Oetbrgasshipacctnbr', 'VARCHAR', false, 10, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbrgascode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbrgascode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbrgascode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbrgascode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbrgascode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbrgascode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Oetbrgascode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SoRgaCodeTableMap::CLASS_DEFAULT : SoRgaCodeTableMap::OM_CLASS;
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
     * @return array (SoRgaCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SoRgaCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoRgaCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoRgaCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoRgaCodeTableMap::OM_CLASS;
            /** @var SoRgaCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoRgaCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = SoRgaCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoRgaCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoRgaCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoRgaCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoRgaCodeTableMap::COL_OETBRGASCODE);
            $criteria->addSelectColumn(SoRgaCodeTableMap::COL_OETBRGASDESC);
            $criteria->addSelectColumn(SoRgaCodeTableMap::COL_OETBRGASWHSE);
            $criteria->addSelectColumn(SoRgaCodeTableMap::COL_OETBRGASSHIPACCTNBR);
            $criteria->addSelectColumn(SoRgaCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoRgaCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoRgaCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OetbRgasCode');
            $criteria->addSelectColumn($alias . '.OetbRgasDesc');
            $criteria->addSelectColumn($alias . '.OetbRgasWhse');
            $criteria->addSelectColumn($alias . '.OetbRgasShipAcctNbr');
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
            $criteria->removeSelectColumn(SoRgaCodeTableMap::COL_OETBRGASCODE);
            $criteria->removeSelectColumn(SoRgaCodeTableMap::COL_OETBRGASDESC);
            $criteria->removeSelectColumn(SoRgaCodeTableMap::COL_OETBRGASWHSE);
            $criteria->removeSelectColumn(SoRgaCodeTableMap::COL_OETBRGASSHIPACCTNBR);
            $criteria->removeSelectColumn(SoRgaCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(SoRgaCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(SoRgaCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.OetbRgasCode');
            $criteria->removeSelectColumn($alias . '.OetbRgasDesc');
            $criteria->removeSelectColumn($alias . '.OetbRgasWhse');
            $criteria->removeSelectColumn($alias . '.OetbRgasShipAcctNbr');
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
        return Propel::getServiceContainer()->getDatabaseMap(SoRgaCodeTableMap::DATABASE_NAME)->getTable(SoRgaCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SoRgaCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SoRgaCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoRgaCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoRgaCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoRgaCodeTableMap::DATABASE_NAME);
            $criteria->add(SoRgaCodeTableMap::COL_OETBRGASCODE, (array) $values, Criteria::IN);
        }

        $query = SoRgaCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoRgaCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoRgaCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_rgas_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SoRgaCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoRgaCode or Criteria object.
     *
     * @param mixed $criteria Criteria or SoRgaCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoRgaCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoRgaCode object
        }


        // Set the correct dbName
        $query = SoRgaCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
