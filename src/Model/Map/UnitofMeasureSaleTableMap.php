<?php

namespace Map;

use \UnitofMeasureSale;
use \UnitofMeasureSaleQuery;
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
 * This class defines the structure of the 'inv_uom_sale' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class UnitofMeasureSaleTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.UnitofMeasureSaleTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_uom_sale';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'UnitofMeasureSale';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\UnitofMeasureSale';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'UnitofMeasureSale';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the IntbUomSale field
     */
    public const COL_INTBUOMSALE = 'inv_uom_sale.IntbUomSale';

    /**
     * the column name for the IntbUomDesc field
     */
    public const COL_INTBUOMDESC = 'inv_uom_sale.IntbUomDesc';

    /**
     * the column name for the IntbUomConv field
     */
    public const COL_INTBUOMCONV = 'inv_uom_sale.IntbUomConv';

    /**
     * the column name for the IntbUomPricByWght field
     */
    public const COL_INTBUOMPRICBYWGHT = 'inv_uom_sale.IntbUomPricByWght';

    /**
     * the column name for the IntbUomStockByCase field
     */
    public const COL_INTBUOMSTOCKBYCASE = 'inv_uom_sale.IntbUomStockByCase';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_uom_sale.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_uom_sale.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_uom_sale.dummy';

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
        self::TYPE_PHPNAME       => ['Intbuomsale', 'Intbuomdesc', 'Intbuomconv', 'Intbuompricbywght', 'IntbUomStockByCase', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['intbuomsale', 'intbuomdesc', 'intbuomconv', 'intbuompricbywght', 'intbUomStockByCase', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [UnitofMeasureSaleTableMap::COL_INTBUOMSALE, UnitofMeasureSaleTableMap::COL_INTBUOMDESC, UnitofMeasureSaleTableMap::COL_INTBUOMCONV, UnitofMeasureSaleTableMap::COL_INTBUOMPRICBYWGHT, UnitofMeasureSaleTableMap::COL_INTBUOMSTOCKBYCASE, UnitofMeasureSaleTableMap::COL_DATEUPDTD, UnitofMeasureSaleTableMap::COL_TIMEUPDTD, UnitofMeasureSaleTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['IntbUomSale', 'IntbUomDesc', 'IntbUomConv', 'IntbUomPricByWght', 'IntbUomStockByCase', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, ]
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
        self::TYPE_PHPNAME       => ['Intbuomsale' => 0, 'Intbuomdesc' => 1, 'Intbuomconv' => 2, 'Intbuompricbywght' => 3, 'IntbUomStockByCase' => 4, 'Dateupdtd' => 5, 'Timeupdtd' => 6, 'Dummy' => 7, ],
        self::TYPE_CAMELNAME     => ['intbuomsale' => 0, 'intbuomdesc' => 1, 'intbuomconv' => 2, 'intbuompricbywght' => 3, 'intbUomStockByCase' => 4, 'dateupdtd' => 5, 'timeupdtd' => 6, 'dummy' => 7, ],
        self::TYPE_COLNAME       => [UnitofMeasureSaleTableMap::COL_INTBUOMSALE => 0, UnitofMeasureSaleTableMap::COL_INTBUOMDESC => 1, UnitofMeasureSaleTableMap::COL_INTBUOMCONV => 2, UnitofMeasureSaleTableMap::COL_INTBUOMPRICBYWGHT => 3, UnitofMeasureSaleTableMap::COL_INTBUOMSTOCKBYCASE => 4, UnitofMeasureSaleTableMap::COL_DATEUPDTD => 5, UnitofMeasureSaleTableMap::COL_TIMEUPDTD => 6, UnitofMeasureSaleTableMap::COL_DUMMY => 7, ],
        self::TYPE_FIELDNAME     => ['IntbUomSale' => 0, 'IntbUomDesc' => 1, 'IntbUomConv' => 2, 'IntbUomPricByWght' => 3, 'IntbUomStockByCase' => 4, 'DateUpdtd' => 5, 'TimeUpdtd' => 6, 'dummy' => 7, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Intbuomsale' => 'INTBUOMSALE',
        'UnitofMeasureSale.Intbuomsale' => 'INTBUOMSALE',
        'intbuomsale' => 'INTBUOMSALE',
        'unitofMeasureSale.intbuomsale' => 'INTBUOMSALE',
        'UnitofMeasureSaleTableMap::COL_INTBUOMSALE' => 'INTBUOMSALE',
        'COL_INTBUOMSALE' => 'INTBUOMSALE',
        'IntbUomSale' => 'INTBUOMSALE',
        'inv_uom_sale.IntbUomSale' => 'INTBUOMSALE',
        'Intbuomdesc' => 'INTBUOMDESC',
        'UnitofMeasureSale.Intbuomdesc' => 'INTBUOMDESC',
        'intbuomdesc' => 'INTBUOMDESC',
        'unitofMeasureSale.intbuomdesc' => 'INTBUOMDESC',
        'UnitofMeasureSaleTableMap::COL_INTBUOMDESC' => 'INTBUOMDESC',
        'COL_INTBUOMDESC' => 'INTBUOMDESC',
        'IntbUomDesc' => 'INTBUOMDESC',
        'inv_uom_sale.IntbUomDesc' => 'INTBUOMDESC',
        'Intbuomconv' => 'INTBUOMCONV',
        'UnitofMeasureSale.Intbuomconv' => 'INTBUOMCONV',
        'intbuomconv' => 'INTBUOMCONV',
        'unitofMeasureSale.intbuomconv' => 'INTBUOMCONV',
        'UnitofMeasureSaleTableMap::COL_INTBUOMCONV' => 'INTBUOMCONV',
        'COL_INTBUOMCONV' => 'INTBUOMCONV',
        'IntbUomConv' => 'INTBUOMCONV',
        'inv_uom_sale.IntbUomConv' => 'INTBUOMCONV',
        'Intbuompricbywght' => 'INTBUOMPRICBYWGHT',
        'UnitofMeasureSale.Intbuompricbywght' => 'INTBUOMPRICBYWGHT',
        'intbuompricbywght' => 'INTBUOMPRICBYWGHT',
        'unitofMeasureSale.intbuompricbywght' => 'INTBUOMPRICBYWGHT',
        'UnitofMeasureSaleTableMap::COL_INTBUOMPRICBYWGHT' => 'INTBUOMPRICBYWGHT',
        'COL_INTBUOMPRICBYWGHT' => 'INTBUOMPRICBYWGHT',
        'IntbUomPricByWght' => 'INTBUOMPRICBYWGHT',
        'inv_uom_sale.IntbUomPricByWght' => 'INTBUOMPRICBYWGHT',
        'IntbUomStockByCase' => 'INTBUOMSTOCKBYCASE',
        'UnitofMeasureSale.IntbUomStockByCase' => 'INTBUOMSTOCKBYCASE',
        'intbUomStockByCase' => 'INTBUOMSTOCKBYCASE',
        'unitofMeasureSale.intbUomStockByCase' => 'INTBUOMSTOCKBYCASE',
        'UnitofMeasureSaleTableMap::COL_INTBUOMSTOCKBYCASE' => 'INTBUOMSTOCKBYCASE',
        'COL_INTBUOMSTOCKBYCASE' => 'INTBUOMSTOCKBYCASE',
        'inv_uom_sale.IntbUomStockByCase' => 'INTBUOMSTOCKBYCASE',
        'Dateupdtd' => 'DATEUPDTD',
        'UnitofMeasureSale.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'unitofMeasureSale.dateupdtd' => 'DATEUPDTD',
        'UnitofMeasureSaleTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_uom_sale.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'UnitofMeasureSale.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'unitofMeasureSale.timeupdtd' => 'TIMEUPDTD',
        'UnitofMeasureSaleTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_uom_sale.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'UnitofMeasureSale.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'unitofMeasureSale.dummy' => 'DUMMY',
        'UnitofMeasureSaleTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_uom_sale.dummy' => 'DUMMY',
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
        $this->setName('inv_uom_sale');
        $this->setPhpName('UnitofMeasureSale');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\UnitofMeasureSale');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbUomSale', 'Intbuomsale', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbUomDesc', 'Intbuomdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbUomConv', 'Intbuomconv', 'DECIMAL', false, 20, null);
        $this->addColumn('IntbUomPricByWght', 'Intbuompricbywght', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbUomStockByCase', 'IntbUomStockByCase', 'VARCHAR', false, 1, null);
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
    0 => ':IntbUomSale',
    1 => ':IntbUomSale',
  ),
), null, null, 'ItemMasterItems', false);
        $this->addRelation('PurchaseOrderDetailReceiving', '\\PurchaseOrderDetailReceiving', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbUomPur',
    1 => ':IntbUomSale',
  ),
), null, null, 'PurchaseOrderDetailReceivings', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? UnitofMeasureSaleTableMap::CLASS_DEFAULT : UnitofMeasureSaleTableMap::OM_CLASS;
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
     * @return array (UnitofMeasureSale object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = UnitofMeasureSaleTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = UnitofMeasureSaleTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + UnitofMeasureSaleTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UnitofMeasureSaleTableMap::OM_CLASS;
            /** @var UnitofMeasureSale $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            UnitofMeasureSaleTableMap::addInstanceToPool($obj, $key);
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
            $key = UnitofMeasureSaleTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = UnitofMeasureSaleTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var UnitofMeasureSale $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UnitofMeasureSaleTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMSALE);
            $criteria->addSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMDESC);
            $criteria->addSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMCONV);
            $criteria->addSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMPRICBYWGHT);
            $criteria->addSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMSTOCKBYCASE);
            $criteria->addSelectColumn(UnitofMeasureSaleTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(UnitofMeasureSaleTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(UnitofMeasureSaleTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbUomSale');
            $criteria->addSelectColumn($alias . '.IntbUomDesc');
            $criteria->addSelectColumn($alias . '.IntbUomConv');
            $criteria->addSelectColumn($alias . '.IntbUomPricByWght');
            $criteria->addSelectColumn($alias . '.IntbUomStockByCase');
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
            $criteria->removeSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMSALE);
            $criteria->removeSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMDESC);
            $criteria->removeSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMCONV);
            $criteria->removeSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMPRICBYWGHT);
            $criteria->removeSelectColumn(UnitofMeasureSaleTableMap::COL_INTBUOMSTOCKBYCASE);
            $criteria->removeSelectColumn(UnitofMeasureSaleTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(UnitofMeasureSaleTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(UnitofMeasureSaleTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.IntbUomSale');
            $criteria->removeSelectColumn($alias . '.IntbUomDesc');
            $criteria->removeSelectColumn($alias . '.IntbUomConv');
            $criteria->removeSelectColumn($alias . '.IntbUomPricByWght');
            $criteria->removeSelectColumn($alias . '.IntbUomStockByCase');
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
        return Propel::getServiceContainer()->getDatabaseMap(UnitofMeasureSaleTableMap::DATABASE_NAME)->getTable(UnitofMeasureSaleTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a UnitofMeasureSale or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or UnitofMeasureSale object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasureSaleTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \UnitofMeasureSale) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UnitofMeasureSaleTableMap::DATABASE_NAME);
            $criteria->add(UnitofMeasureSaleTableMap::COL_INTBUOMSALE, (array) $values, Criteria::IN);
        }

        $query = UnitofMeasureSaleQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            UnitofMeasureSaleTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                UnitofMeasureSaleTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_uom_sale table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return UnitofMeasureSaleQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a UnitofMeasureSale or Criteria object.
     *
     * @param mixed $criteria Criteria or UnitofMeasureSale object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasureSaleTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from UnitofMeasureSale object
        }


        // Set the correct dbName
        $query = UnitofMeasureSaleQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
