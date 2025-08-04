<?php

namespace Map;

use \ItemXrefManufacturer;
use \ItemXrefManufacturerQuery;
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
 * This class defines the structure of the 'mfcp_item_xref' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ItemXrefManufacturerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ItemXrefManufacturerTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'mfcp_item_xref';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ItemXrefManufacturer';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ItemXrefManufacturer';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ItemXrefManufacturer';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the ApveVendId field
     */
    public const COL_APVEVENDID = 'mfcp_item_xref.ApveVendId';

    /**
     * the column name for the McxrVendItemNbr field
     */
    public const COL_MCXRVENDITEMNBR = 'mfcp_item_xref.McxrVendItemNbr';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'mfcp_item_xref.InitItemNbr';

    /**
     * the column name for the McxrUom field
     */
    public const COL_MCXRUOM = 'mfcp_item_xref.McxrUom';

    /**
     * the column name for the McxrPrice field
     */
    public const COL_MCXRPRICE = 'mfcp_item_xref.McxrPrice';

    /**
     * the column name for the McxrCost field
     */
    public const COL_MCXRCOST = 'mfcp_item_xref.McxrCost';

    /**
     * the column name for the McxrAvail field
     */
    public const COL_MCXRAVAIL = 'mfcp_item_xref.McxrAvail';

    /**
     * the column name for the McxrChgDate field
     */
    public const COL_MCXRCHGDATE = 'mfcp_item_xref.McxrChgDate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'mfcp_item_xref.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'mfcp_item_xref.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'mfcp_item_xref.dummy';

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
        self::TYPE_PHPNAME       => ['Apvevendid', 'Mcxrvenditemnbr', 'Inititemnbr', 'Mcxruom', 'Mcxrprice', 'Mcxrcost', 'Mcxravail', 'Mcxrchgdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['apvevendid', 'mcxrvenditemnbr', 'inititemnbr', 'mcxruom', 'mcxrprice', 'mcxrcost', 'mcxravail', 'mcxrchgdate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ItemXrefManufacturerTableMap::COL_APVEVENDID, ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR, ItemXrefManufacturerTableMap::COL_INITITEMNBR, ItemXrefManufacturerTableMap::COL_MCXRUOM, ItemXrefManufacturerTableMap::COL_MCXRPRICE, ItemXrefManufacturerTableMap::COL_MCXRCOST, ItemXrefManufacturerTableMap::COL_MCXRAVAIL, ItemXrefManufacturerTableMap::COL_MCXRCHGDATE, ItemXrefManufacturerTableMap::COL_DATEUPDTD, ItemXrefManufacturerTableMap::COL_TIMEUPDTD, ItemXrefManufacturerTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ApveVendId', 'McxrVendItemNbr', 'InitItemNbr', 'McxrUom', 'McxrPrice', 'McxrCost', 'McxrAvail', 'McxrChgDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ]
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
        self::TYPE_PHPNAME       => ['Apvevendid' => 0, 'Mcxrvenditemnbr' => 1, 'Inititemnbr' => 2, 'Mcxruom' => 3, 'Mcxrprice' => 4, 'Mcxrcost' => 5, 'Mcxravail' => 6, 'Mcxrchgdate' => 7, 'Dateupdtd' => 8, 'Timeupdtd' => 9, 'Dummy' => 10, ],
        self::TYPE_CAMELNAME     => ['apvevendid' => 0, 'mcxrvenditemnbr' => 1, 'inititemnbr' => 2, 'mcxruom' => 3, 'mcxrprice' => 4, 'mcxrcost' => 5, 'mcxravail' => 6, 'mcxrchgdate' => 7, 'dateupdtd' => 8, 'timeupdtd' => 9, 'dummy' => 10, ],
        self::TYPE_COLNAME       => [ItemXrefManufacturerTableMap::COL_APVEVENDID => 0, ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR => 1, ItemXrefManufacturerTableMap::COL_INITITEMNBR => 2, ItemXrefManufacturerTableMap::COL_MCXRUOM => 3, ItemXrefManufacturerTableMap::COL_MCXRPRICE => 4, ItemXrefManufacturerTableMap::COL_MCXRCOST => 5, ItemXrefManufacturerTableMap::COL_MCXRAVAIL => 6, ItemXrefManufacturerTableMap::COL_MCXRCHGDATE => 7, ItemXrefManufacturerTableMap::COL_DATEUPDTD => 8, ItemXrefManufacturerTableMap::COL_TIMEUPDTD => 9, ItemXrefManufacturerTableMap::COL_DUMMY => 10, ],
        self::TYPE_FIELDNAME     => ['ApveVendId' => 0, 'McxrVendItemNbr' => 1, 'InitItemNbr' => 2, 'McxrUom' => 3, 'McxrPrice' => 4, 'McxrCost' => 5, 'McxrAvail' => 6, 'McxrChgDate' => 7, 'DateUpdtd' => 8, 'TimeUpdtd' => 9, 'dummy' => 10, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Apvevendid' => 'APVEVENDID',
        'ItemXrefManufacturer.Apvevendid' => 'APVEVENDID',
        'apvevendid' => 'APVEVENDID',
        'itemXrefManufacturer.apvevendid' => 'APVEVENDID',
        'ItemXrefManufacturerTableMap::COL_APVEVENDID' => 'APVEVENDID',
        'COL_APVEVENDID' => 'APVEVENDID',
        'ApveVendId' => 'APVEVENDID',
        'mfcp_item_xref.ApveVendId' => 'APVEVENDID',
        'Mcxrvenditemnbr' => 'MCXRVENDITEMNBR',
        'ItemXrefManufacturer.Mcxrvenditemnbr' => 'MCXRVENDITEMNBR',
        'mcxrvenditemnbr' => 'MCXRVENDITEMNBR',
        'itemXrefManufacturer.mcxrvenditemnbr' => 'MCXRVENDITEMNBR',
        'ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR' => 'MCXRVENDITEMNBR',
        'COL_MCXRVENDITEMNBR' => 'MCXRVENDITEMNBR',
        'McxrVendItemNbr' => 'MCXRVENDITEMNBR',
        'mfcp_item_xref.McxrVendItemNbr' => 'MCXRVENDITEMNBR',
        'Inititemnbr' => 'INITITEMNBR',
        'ItemXrefManufacturer.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'itemXrefManufacturer.inititemnbr' => 'INITITEMNBR',
        'ItemXrefManufacturerTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'mfcp_item_xref.InitItemNbr' => 'INITITEMNBR',
        'Mcxruom' => 'MCXRUOM',
        'ItemXrefManufacturer.Mcxruom' => 'MCXRUOM',
        'mcxruom' => 'MCXRUOM',
        'itemXrefManufacturer.mcxruom' => 'MCXRUOM',
        'ItemXrefManufacturerTableMap::COL_MCXRUOM' => 'MCXRUOM',
        'COL_MCXRUOM' => 'MCXRUOM',
        'McxrUom' => 'MCXRUOM',
        'mfcp_item_xref.McxrUom' => 'MCXRUOM',
        'Mcxrprice' => 'MCXRPRICE',
        'ItemXrefManufacturer.Mcxrprice' => 'MCXRPRICE',
        'mcxrprice' => 'MCXRPRICE',
        'itemXrefManufacturer.mcxrprice' => 'MCXRPRICE',
        'ItemXrefManufacturerTableMap::COL_MCXRPRICE' => 'MCXRPRICE',
        'COL_MCXRPRICE' => 'MCXRPRICE',
        'McxrPrice' => 'MCXRPRICE',
        'mfcp_item_xref.McxrPrice' => 'MCXRPRICE',
        'Mcxrcost' => 'MCXRCOST',
        'ItemXrefManufacturer.Mcxrcost' => 'MCXRCOST',
        'mcxrcost' => 'MCXRCOST',
        'itemXrefManufacturer.mcxrcost' => 'MCXRCOST',
        'ItemXrefManufacturerTableMap::COL_MCXRCOST' => 'MCXRCOST',
        'COL_MCXRCOST' => 'MCXRCOST',
        'McxrCost' => 'MCXRCOST',
        'mfcp_item_xref.McxrCost' => 'MCXRCOST',
        'Mcxravail' => 'MCXRAVAIL',
        'ItemXrefManufacturer.Mcxravail' => 'MCXRAVAIL',
        'mcxravail' => 'MCXRAVAIL',
        'itemXrefManufacturer.mcxravail' => 'MCXRAVAIL',
        'ItemXrefManufacturerTableMap::COL_MCXRAVAIL' => 'MCXRAVAIL',
        'COL_MCXRAVAIL' => 'MCXRAVAIL',
        'McxrAvail' => 'MCXRAVAIL',
        'mfcp_item_xref.McxrAvail' => 'MCXRAVAIL',
        'Mcxrchgdate' => 'MCXRCHGDATE',
        'ItemXrefManufacturer.Mcxrchgdate' => 'MCXRCHGDATE',
        'mcxrchgdate' => 'MCXRCHGDATE',
        'itemXrefManufacturer.mcxrchgdate' => 'MCXRCHGDATE',
        'ItemXrefManufacturerTableMap::COL_MCXRCHGDATE' => 'MCXRCHGDATE',
        'COL_MCXRCHGDATE' => 'MCXRCHGDATE',
        'McxrChgDate' => 'MCXRCHGDATE',
        'mfcp_item_xref.McxrChgDate' => 'MCXRCHGDATE',
        'Dateupdtd' => 'DATEUPDTD',
        'ItemXrefManufacturer.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'itemXrefManufacturer.dateupdtd' => 'DATEUPDTD',
        'ItemXrefManufacturerTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'mfcp_item_xref.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ItemXrefManufacturer.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'itemXrefManufacturer.timeupdtd' => 'TIMEUPDTD',
        'ItemXrefManufacturerTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'mfcp_item_xref.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ItemXrefManufacturer.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'itemXrefManufacturer.dummy' => 'DUMMY',
        'ItemXrefManufacturerTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'mfcp_item_xref.dummy' => 'DUMMY',
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
        $this->setName('mfcp_item_xref');
        $this->setPhpName('ItemXrefManufacturer');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemXrefManufacturer');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ApveVendId', 'Apvevendid', 'VARCHAR' , 'ap_vend_mast', 'ApveVendId', true, 6, '');
        $this->addPrimaryKey('McxrVendItemNbr', 'Mcxrvenditemnbr', 'VARCHAR', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('McxrUom', 'Mcxruom', 'VARCHAR', false, 4, null);
        $this->addColumn('McxrPrice', 'Mcxrprice', 'DECIMAL', false, 20, null);
        $this->addColumn('McxrCost', 'Mcxrcost', 'DECIMAL', false, 20, null);
        $this->addColumn('McxrAvail', 'Mcxravail', 'DECIMAL', false, 20, null);
        $this->addColumn('McxrChgDate', 'Mcxrchgdate', 'VARCHAR', false, 8, null);
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
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('Vendor', '\\Vendor', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ),
), null, null, null, false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ItemXrefManufacturer $obj A \ItemXrefManufacturer object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(ItemXrefManufacturer $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getApvevendid() || is_scalar($obj->getApvevendid()) || is_callable([$obj->getApvevendid(), '__toString']) ? (string) $obj->getApvevendid() : $obj->getApvevendid()), (null === $obj->getMcxrvenditemnbr() || is_scalar($obj->getMcxrvenditemnbr()) || is_callable([$obj->getMcxrvenditemnbr(), '__toString']) ? (string) $obj->getMcxrvenditemnbr() : $obj->getMcxrvenditemnbr()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \ItemXrefManufacturer object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemXrefManufacturer) {
                $key = serialize([(null === $value->getApvevendid() || is_scalar($value->getApvevendid()) || is_callable([$value->getApvevendid(), '__toString']) ? (string) $value->getApvevendid() : $value->getApvevendid()), (null === $value->getMcxrvenditemnbr() || is_scalar($value->getMcxrvenditemnbr()) || is_callable([$value->getMcxrvenditemnbr(), '__toString']) ? (string) $value->getMcxrvenditemnbr() : $value->getMcxrvenditemnbr()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemXrefManufacturer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Mcxrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Mcxrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Mcxrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Mcxrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Mcxrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Mcxrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Mcxrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? ItemXrefManufacturerTableMap::CLASS_DEFAULT : ItemXrefManufacturerTableMap::OM_CLASS;
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
     * @return array (ItemXrefManufacturer object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ItemXrefManufacturerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemXrefManufacturerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemXrefManufacturerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemXrefManufacturerTableMap::OM_CLASS;
            /** @var ItemXrefManufacturer $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemXrefManufacturerTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemXrefManufacturerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemXrefManufacturerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemXrefManufacturer $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemXrefManufacturerTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRUOM);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRPRICE);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRCOST);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRAVAIL);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRCHGDATE);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemXrefManufacturerTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.McxrVendItemNbr');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.McxrUom');
            $criteria->addSelectColumn($alias . '.McxrPrice');
            $criteria->addSelectColumn($alias . '.McxrCost');
            $criteria->addSelectColumn($alias . '.McxrAvail');
            $criteria->addSelectColumn($alias . '.McxrChgDate');
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
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_APVEVENDID);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRUOM);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRPRICE);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRCOST);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRAVAIL);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_MCXRCHGDATE);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ItemXrefManufacturerTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ApveVendId');
            $criteria->removeSelectColumn($alias . '.McxrVendItemNbr');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.McxrUom');
            $criteria->removeSelectColumn($alias . '.McxrPrice');
            $criteria->removeSelectColumn($alias . '.McxrCost');
            $criteria->removeSelectColumn($alias . '.McxrAvail');
            $criteria->removeSelectColumn($alias . '.McxrChgDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemXrefManufacturerTableMap::DATABASE_NAME)->getTable(ItemXrefManufacturerTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ItemXrefManufacturer or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ItemXrefManufacturer object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefManufacturerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemXrefManufacturer) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemXrefManufacturerTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemXrefManufacturerTableMap::COL_APVEVENDID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefManufacturerTableMap::COL_INITITEMNBR, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemXrefManufacturerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemXrefManufacturerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemXrefManufacturerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the mfcp_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ItemXrefManufacturerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemXrefManufacturer or Criteria object.
     *
     * @param mixed $criteria Criteria or ItemXrefManufacturer object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefManufacturerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemXrefManufacturer object
        }


        // Set the correct dbName
        $query = ItemXrefManufacturerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
