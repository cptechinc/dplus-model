<?php

namespace Map;

use \InvPriceCode;
use \InvPriceCodeQuery;
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
 * This class defines the structure of the 'inv_pric_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvPriceCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvPriceCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_pric_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvPriceCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvPriceCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvPriceCode';

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
     * the column name for the IntbPricGrup field
     */
    public const COL_INTBPRICGRUP = 'inv_pric_code.IntbPricGrup';

    /**
     * the column name for the IntbPricDesc field
     */
    public const COL_INTBPRICDESC = 'inv_pric_code.IntbPricDesc';

    /**
     * the column name for the IntbPricSaleProg field
     */
    public const COL_INTBPRICSALEPROG = 'inv_pric_code.IntbPricSaleProg';

    /**
     * the column name for the IntbPricCostPct field
     */
    public const COL_INTBPRICCOSTPCT = 'inv_pric_code.IntbPricCostPct';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_pric_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_pric_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_pric_code.dummy';

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
        self::TYPE_PHPNAME       => ['Intbpricgrup', 'Intbpricdesc', 'Intbpricsaleprog', 'Intbpriccostpct', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['intbpricgrup', 'intbpricdesc', 'intbpricsaleprog', 'intbpriccostpct', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvPriceCodeTableMap::COL_INTBPRICGRUP, InvPriceCodeTableMap::COL_INTBPRICDESC, InvPriceCodeTableMap::COL_INTBPRICSALEPROG, InvPriceCodeTableMap::COL_INTBPRICCOSTPCT, InvPriceCodeTableMap::COL_DATEUPDTD, InvPriceCodeTableMap::COL_TIMEUPDTD, InvPriceCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['IntbPricGrup', 'IntbPricDesc', 'IntbPricSaleProg', 'IntbPricCostPct', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Intbpricgrup' => 0, 'Intbpricdesc' => 1, 'Intbpricsaleprog' => 2, 'Intbpriccostpct' => 3, 'Dateupdtd' => 4, 'Timeupdtd' => 5, 'Dummy' => 6, ],
        self::TYPE_CAMELNAME     => ['intbpricgrup' => 0, 'intbpricdesc' => 1, 'intbpricsaleprog' => 2, 'intbpriccostpct' => 3, 'dateupdtd' => 4, 'timeupdtd' => 5, 'dummy' => 6, ],
        self::TYPE_COLNAME       => [InvPriceCodeTableMap::COL_INTBPRICGRUP => 0, InvPriceCodeTableMap::COL_INTBPRICDESC => 1, InvPriceCodeTableMap::COL_INTBPRICSALEPROG => 2, InvPriceCodeTableMap::COL_INTBPRICCOSTPCT => 3, InvPriceCodeTableMap::COL_DATEUPDTD => 4, InvPriceCodeTableMap::COL_TIMEUPDTD => 5, InvPriceCodeTableMap::COL_DUMMY => 6, ],
        self::TYPE_FIELDNAME     => ['IntbPricGrup' => 0, 'IntbPricDesc' => 1, 'IntbPricSaleProg' => 2, 'IntbPricCostPct' => 3, 'DateUpdtd' => 4, 'TimeUpdtd' => 5, 'dummy' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Intbpricgrup' => 'INTBPRICGRUP',
        'InvPriceCode.Intbpricgrup' => 'INTBPRICGRUP',
        'intbpricgrup' => 'INTBPRICGRUP',
        'invPriceCode.intbpricgrup' => 'INTBPRICGRUP',
        'InvPriceCodeTableMap::COL_INTBPRICGRUP' => 'INTBPRICGRUP',
        'COL_INTBPRICGRUP' => 'INTBPRICGRUP',
        'IntbPricGrup' => 'INTBPRICGRUP',
        'inv_pric_code.IntbPricGrup' => 'INTBPRICGRUP',
        'Intbpricdesc' => 'INTBPRICDESC',
        'InvPriceCode.Intbpricdesc' => 'INTBPRICDESC',
        'intbpricdesc' => 'INTBPRICDESC',
        'invPriceCode.intbpricdesc' => 'INTBPRICDESC',
        'InvPriceCodeTableMap::COL_INTBPRICDESC' => 'INTBPRICDESC',
        'COL_INTBPRICDESC' => 'INTBPRICDESC',
        'IntbPricDesc' => 'INTBPRICDESC',
        'inv_pric_code.IntbPricDesc' => 'INTBPRICDESC',
        'Intbpricsaleprog' => 'INTBPRICSALEPROG',
        'InvPriceCode.Intbpricsaleprog' => 'INTBPRICSALEPROG',
        'intbpricsaleprog' => 'INTBPRICSALEPROG',
        'invPriceCode.intbpricsaleprog' => 'INTBPRICSALEPROG',
        'InvPriceCodeTableMap::COL_INTBPRICSALEPROG' => 'INTBPRICSALEPROG',
        'COL_INTBPRICSALEPROG' => 'INTBPRICSALEPROG',
        'IntbPricSaleProg' => 'INTBPRICSALEPROG',
        'inv_pric_code.IntbPricSaleProg' => 'INTBPRICSALEPROG',
        'Intbpriccostpct' => 'INTBPRICCOSTPCT',
        'InvPriceCode.Intbpriccostpct' => 'INTBPRICCOSTPCT',
        'intbpriccostpct' => 'INTBPRICCOSTPCT',
        'invPriceCode.intbpriccostpct' => 'INTBPRICCOSTPCT',
        'InvPriceCodeTableMap::COL_INTBPRICCOSTPCT' => 'INTBPRICCOSTPCT',
        'COL_INTBPRICCOSTPCT' => 'INTBPRICCOSTPCT',
        'IntbPricCostPct' => 'INTBPRICCOSTPCT',
        'inv_pric_code.IntbPricCostPct' => 'INTBPRICCOSTPCT',
        'Dateupdtd' => 'DATEUPDTD',
        'InvPriceCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invPriceCode.dateupdtd' => 'DATEUPDTD',
        'InvPriceCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_pric_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvPriceCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invPriceCode.timeupdtd' => 'TIMEUPDTD',
        'InvPriceCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_pric_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvPriceCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invPriceCode.dummy' => 'DUMMY',
        'InvPriceCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_pric_code.dummy' => 'DUMMY',
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
        $this->setName('inv_pric_code');
        $this->setPhpName('InvPriceCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvPriceCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbPricGrup', 'Intbpricgrup', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbPricDesc', 'Intbpricdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbPricSaleProg', 'Intbpricsaleprog', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbPricCostPct', 'Intbpriccostpct', 'DECIMAL', false, 20, null);
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
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbPricGrup',
    1 => ':IntbPricGrup',
  ),
), null, null, 'ItemMasterItems', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvPriceCodeTableMap::CLASS_DEFAULT : InvPriceCodeTableMap::OM_CLASS;
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
     * @return array (InvPriceCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvPriceCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvPriceCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvPriceCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvPriceCodeTableMap::OM_CLASS;
            /** @var InvPriceCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvPriceCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = InvPriceCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvPriceCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvPriceCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvPriceCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvPriceCodeTableMap::COL_INTBPRICGRUP);
            $criteria->addSelectColumn(InvPriceCodeTableMap::COL_INTBPRICDESC);
            $criteria->addSelectColumn(InvPriceCodeTableMap::COL_INTBPRICSALEPROG);
            $criteria->addSelectColumn(InvPriceCodeTableMap::COL_INTBPRICCOSTPCT);
            $criteria->addSelectColumn(InvPriceCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvPriceCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvPriceCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbPricGrup');
            $criteria->addSelectColumn($alias . '.IntbPricDesc');
            $criteria->addSelectColumn($alias . '.IntbPricSaleProg');
            $criteria->addSelectColumn($alias . '.IntbPricCostPct');
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
            $criteria->removeSelectColumn(InvPriceCodeTableMap::COL_INTBPRICGRUP);
            $criteria->removeSelectColumn(InvPriceCodeTableMap::COL_INTBPRICDESC);
            $criteria->removeSelectColumn(InvPriceCodeTableMap::COL_INTBPRICSALEPROG);
            $criteria->removeSelectColumn(InvPriceCodeTableMap::COL_INTBPRICCOSTPCT);
            $criteria->removeSelectColumn(InvPriceCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvPriceCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvPriceCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.IntbPricGrup');
            $criteria->removeSelectColumn($alias . '.IntbPricDesc');
            $criteria->removeSelectColumn($alias . '.IntbPricSaleProg');
            $criteria->removeSelectColumn($alias . '.IntbPricCostPct');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvPriceCodeTableMap::DATABASE_NAME)->getTable(InvPriceCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvPriceCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvPriceCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvPriceCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvPriceCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvPriceCodeTableMap::DATABASE_NAME);
            $criteria->add(InvPriceCodeTableMap::COL_INTBPRICGRUP, (array) $values, Criteria::IN);
        }

        $query = InvPriceCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvPriceCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvPriceCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_pric_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvPriceCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvPriceCode or Criteria object.
     *
     * @param mixed $criteria Criteria or InvPriceCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvPriceCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvPriceCode object
        }


        // Set the correct dbName
        $query = InvPriceCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
