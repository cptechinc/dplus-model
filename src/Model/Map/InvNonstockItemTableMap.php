<?php

namespace Map;

use \InvNonstockItem;
use \InvNonstockItemQuery;
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
 * This class defines the structure of the 'inv_nonstock_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvNonstockItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvNonstockItemTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_nonstock_item';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvNonstockItem';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvNonstockItem';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvNonstockItem';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the NsitItemNbr field
     */
    public const COL_NSITITEMNBR = 'inv_nonstock_item.NsitItemNbr';

    /**
     * the column name for the NsitMnfrId field
     */
    public const COL_NSITMNFRID = 'inv_nonstock_item.NsitMnfrId';

    /**
     * the column name for the NsitDesc1 field
     */
    public const COL_NSITDESC1 = 'inv_nonstock_item.NsitDesc1';

    /**
     * the column name for the NsitDesc2 field
     */
    public const COL_NSITDESC2 = 'inv_nonstock_item.NsitDesc2';

    /**
     * the column name for the NsitCost field
     */
    public const COL_NSITCOST = 'inv_nonstock_item.NsitCost';

    /**
     * the column name for the NsitAvail field
     */
    public const COL_NSITAVAIL = 'inv_nonstock_item.NsitAvail';

    /**
     * the column name for the NsitUom field
     */
    public const COL_NSITUOM = 'inv_nonstock_item.NsitUom';

    /**
     * the column name for the NsitPrice field
     */
    public const COL_NSITPRICE = 'inv_nonstock_item.NsitPrice';

    /**
     * the column name for the NsitChgDate field
     */
    public const COL_NSITCHGDATE = 'inv_nonstock_item.NsitChgDate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_nonstock_item.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_nonstock_item.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_nonstock_item.dummy';

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
        self::TYPE_PHPNAME       => ['Nsititemnbr', 'Nsitmnfrid', 'Nsitdesc1', 'Nsitdesc2', 'Nsitcost', 'Nsitavail', 'Nsituom', 'Nsitprice', 'Nsitchgdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['nsititemnbr', 'nsitmnfrid', 'nsitdesc1', 'nsitdesc2', 'nsitcost', 'nsitavail', 'nsituom', 'nsitprice', 'nsitchgdate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvNonstockItemTableMap::COL_NSITITEMNBR, InvNonstockItemTableMap::COL_NSITMNFRID, InvNonstockItemTableMap::COL_NSITDESC1, InvNonstockItemTableMap::COL_NSITDESC2, InvNonstockItemTableMap::COL_NSITCOST, InvNonstockItemTableMap::COL_NSITAVAIL, InvNonstockItemTableMap::COL_NSITUOM, InvNonstockItemTableMap::COL_NSITPRICE, InvNonstockItemTableMap::COL_NSITCHGDATE, InvNonstockItemTableMap::COL_DATEUPDTD, InvNonstockItemTableMap::COL_TIMEUPDTD, InvNonstockItemTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['NsitItemNbr', 'NsitMnfrId', 'NsitDesc1', 'NsitDesc2', 'NsitCost', 'NsitAvail', 'NsitUom', 'NsitPrice', 'NsitChgDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, ]
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
        self::TYPE_PHPNAME       => ['Nsititemnbr' => 0, 'Nsitmnfrid' => 1, 'Nsitdesc1' => 2, 'Nsitdesc2' => 3, 'Nsitcost' => 4, 'Nsitavail' => 5, 'Nsituom' => 6, 'Nsitprice' => 7, 'Nsitchgdate' => 8, 'Dateupdtd' => 9, 'Timeupdtd' => 10, 'Dummy' => 11, ],
        self::TYPE_CAMELNAME     => ['nsititemnbr' => 0, 'nsitmnfrid' => 1, 'nsitdesc1' => 2, 'nsitdesc2' => 3, 'nsitcost' => 4, 'nsitavail' => 5, 'nsituom' => 6, 'nsitprice' => 7, 'nsitchgdate' => 8, 'dateupdtd' => 9, 'timeupdtd' => 10, 'dummy' => 11, ],
        self::TYPE_COLNAME       => [InvNonstockItemTableMap::COL_NSITITEMNBR => 0, InvNonstockItemTableMap::COL_NSITMNFRID => 1, InvNonstockItemTableMap::COL_NSITDESC1 => 2, InvNonstockItemTableMap::COL_NSITDESC2 => 3, InvNonstockItemTableMap::COL_NSITCOST => 4, InvNonstockItemTableMap::COL_NSITAVAIL => 5, InvNonstockItemTableMap::COL_NSITUOM => 6, InvNonstockItemTableMap::COL_NSITPRICE => 7, InvNonstockItemTableMap::COL_NSITCHGDATE => 8, InvNonstockItemTableMap::COL_DATEUPDTD => 9, InvNonstockItemTableMap::COL_TIMEUPDTD => 10, InvNonstockItemTableMap::COL_DUMMY => 11, ],
        self::TYPE_FIELDNAME     => ['NsitItemNbr' => 0, 'NsitMnfrId' => 1, 'NsitDesc1' => 2, 'NsitDesc2' => 3, 'NsitCost' => 4, 'NsitAvail' => 5, 'NsitUom' => 6, 'NsitPrice' => 7, 'NsitChgDate' => 8, 'DateUpdtd' => 9, 'TimeUpdtd' => 10, 'dummy' => 11, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Nsititemnbr' => 'NSITITEMNBR',
        'InvNonstockItem.Nsititemnbr' => 'NSITITEMNBR',
        'nsititemnbr' => 'NSITITEMNBR',
        'invNonstockItem.nsititemnbr' => 'NSITITEMNBR',
        'InvNonstockItemTableMap::COL_NSITITEMNBR' => 'NSITITEMNBR',
        'COL_NSITITEMNBR' => 'NSITITEMNBR',
        'NsitItemNbr' => 'NSITITEMNBR',
        'inv_nonstock_item.NsitItemNbr' => 'NSITITEMNBR',
        'Nsitmnfrid' => 'NSITMNFRID',
        'InvNonstockItem.Nsitmnfrid' => 'NSITMNFRID',
        'nsitmnfrid' => 'NSITMNFRID',
        'invNonstockItem.nsitmnfrid' => 'NSITMNFRID',
        'InvNonstockItemTableMap::COL_NSITMNFRID' => 'NSITMNFRID',
        'COL_NSITMNFRID' => 'NSITMNFRID',
        'NsitMnfrId' => 'NSITMNFRID',
        'inv_nonstock_item.NsitMnfrId' => 'NSITMNFRID',
        'Nsitdesc1' => 'NSITDESC1',
        'InvNonstockItem.Nsitdesc1' => 'NSITDESC1',
        'nsitdesc1' => 'NSITDESC1',
        'invNonstockItem.nsitdesc1' => 'NSITDESC1',
        'InvNonstockItemTableMap::COL_NSITDESC1' => 'NSITDESC1',
        'COL_NSITDESC1' => 'NSITDESC1',
        'NsitDesc1' => 'NSITDESC1',
        'inv_nonstock_item.NsitDesc1' => 'NSITDESC1',
        'Nsitdesc2' => 'NSITDESC2',
        'InvNonstockItem.Nsitdesc2' => 'NSITDESC2',
        'nsitdesc2' => 'NSITDESC2',
        'invNonstockItem.nsitdesc2' => 'NSITDESC2',
        'InvNonstockItemTableMap::COL_NSITDESC2' => 'NSITDESC2',
        'COL_NSITDESC2' => 'NSITDESC2',
        'NsitDesc2' => 'NSITDESC2',
        'inv_nonstock_item.NsitDesc2' => 'NSITDESC2',
        'Nsitcost' => 'NSITCOST',
        'InvNonstockItem.Nsitcost' => 'NSITCOST',
        'nsitcost' => 'NSITCOST',
        'invNonstockItem.nsitcost' => 'NSITCOST',
        'InvNonstockItemTableMap::COL_NSITCOST' => 'NSITCOST',
        'COL_NSITCOST' => 'NSITCOST',
        'NsitCost' => 'NSITCOST',
        'inv_nonstock_item.NsitCost' => 'NSITCOST',
        'Nsitavail' => 'NSITAVAIL',
        'InvNonstockItem.Nsitavail' => 'NSITAVAIL',
        'nsitavail' => 'NSITAVAIL',
        'invNonstockItem.nsitavail' => 'NSITAVAIL',
        'InvNonstockItemTableMap::COL_NSITAVAIL' => 'NSITAVAIL',
        'COL_NSITAVAIL' => 'NSITAVAIL',
        'NsitAvail' => 'NSITAVAIL',
        'inv_nonstock_item.NsitAvail' => 'NSITAVAIL',
        'Nsituom' => 'NSITUOM',
        'InvNonstockItem.Nsituom' => 'NSITUOM',
        'nsituom' => 'NSITUOM',
        'invNonstockItem.nsituom' => 'NSITUOM',
        'InvNonstockItemTableMap::COL_NSITUOM' => 'NSITUOM',
        'COL_NSITUOM' => 'NSITUOM',
        'NsitUom' => 'NSITUOM',
        'inv_nonstock_item.NsitUom' => 'NSITUOM',
        'Nsitprice' => 'NSITPRICE',
        'InvNonstockItem.Nsitprice' => 'NSITPRICE',
        'nsitprice' => 'NSITPRICE',
        'invNonstockItem.nsitprice' => 'NSITPRICE',
        'InvNonstockItemTableMap::COL_NSITPRICE' => 'NSITPRICE',
        'COL_NSITPRICE' => 'NSITPRICE',
        'NsitPrice' => 'NSITPRICE',
        'inv_nonstock_item.NsitPrice' => 'NSITPRICE',
        'Nsitchgdate' => 'NSITCHGDATE',
        'InvNonstockItem.Nsitchgdate' => 'NSITCHGDATE',
        'nsitchgdate' => 'NSITCHGDATE',
        'invNonstockItem.nsitchgdate' => 'NSITCHGDATE',
        'InvNonstockItemTableMap::COL_NSITCHGDATE' => 'NSITCHGDATE',
        'COL_NSITCHGDATE' => 'NSITCHGDATE',
        'NsitChgDate' => 'NSITCHGDATE',
        'inv_nonstock_item.NsitChgDate' => 'NSITCHGDATE',
        'Dateupdtd' => 'DATEUPDTD',
        'InvNonstockItem.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invNonstockItem.dateupdtd' => 'DATEUPDTD',
        'InvNonstockItemTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_nonstock_item.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvNonstockItem.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invNonstockItem.timeupdtd' => 'TIMEUPDTD',
        'InvNonstockItemTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_nonstock_item.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvNonstockItem.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invNonstockItem.dummy' => 'DUMMY',
        'InvNonstockItemTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_nonstock_item.dummy' => 'DUMMY',
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
        $this->setName('inv_nonstock_item');
        $this->setPhpName('InvNonstockItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvNonstockItem');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('NsitItemNbr', 'Nsititemnbr', 'VARCHAR', true, 30, '');
        $this->addForeignPrimaryKey('NsitMnfrId', 'Nsitmnfrid', 'VARCHAR' , 'ap_vend_mast', 'ApveVendId', true, 6, '');
        $this->addColumn('NsitDesc1', 'Nsitdesc1', 'VARCHAR', true, 35, '');
        $this->addColumn('NsitDesc2', 'Nsitdesc2', 'VARCHAR', true, 35, '');
        $this->addColumn('NsitCost', 'Nsitcost', 'DECIMAL', true, 20, 0.00000);
        $this->addColumn('NsitAvail', 'Nsitavail', 'DECIMAL', true, 20, 0.00000);
        $this->addColumn('NsitUom', 'Nsituom', 'VARCHAR', true, 4, '');
        $this->addColumn('NsitPrice', 'Nsitprice', 'DECIMAL', true, 20, 0.00000);
        $this->addColumn('NsitChgDate', 'Nsitchgdate', 'CHAR', true, 8, '');
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
        $this->addRelation('Vendor', '\\Vendor', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':NsitMnfrId',
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
     * @param \InvNonstockItem $obj A \InvNonstockItem object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(InvNonstockItem $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getNsititemnbr() || is_scalar($obj->getNsititemnbr()) || is_callable([$obj->getNsititemnbr(), '__toString']) ? (string) $obj->getNsititemnbr() : $obj->getNsititemnbr()), (null === $obj->getNsitmnfrid() || is_scalar($obj->getNsitmnfrid()) || is_callable([$obj->getNsitmnfrid(), '__toString']) ? (string) $obj->getNsitmnfrid() : $obj->getNsitmnfrid())]);
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
     * @param mixed $value A \InvNonstockItem object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvNonstockItem) {
                $key = serialize([(null === $value->getNsititemnbr() || is_scalar($value->getNsititemnbr()) || is_callable([$value->getNsititemnbr(), '__toString']) ? (string) $value->getNsititemnbr() : $value->getNsititemnbr()), (null === $value->getNsitmnfrid() || is_scalar($value->getNsitmnfrid()) || is_callable([$value->getNsitmnfrid(), '__toString']) ? (string) $value->getNsitmnfrid() : $value->getNsitmnfrid())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvNonstockItem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nsititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Nsitmnfrid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nsititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nsititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nsititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nsititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nsititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Nsitmnfrid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Nsitmnfrid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Nsitmnfrid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Nsitmnfrid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Nsitmnfrid', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Nsititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Nsitmnfrid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvNonstockItemTableMap::CLASS_DEFAULT : InvNonstockItemTableMap::OM_CLASS;
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
     * @return array (InvNonstockItem object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvNonstockItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvNonstockItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvNonstockItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvNonstockItemTableMap::OM_CLASS;
            /** @var InvNonstockItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvNonstockItemTableMap::addInstanceToPool($obj, $key);
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
            $key = InvNonstockItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvNonstockItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvNonstockItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvNonstockItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITITEMNBR);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITMNFRID);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITDESC1);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITDESC2);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITCOST);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITAVAIL);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITUOM);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITPRICE);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_NSITCHGDATE);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvNonstockItemTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.NsitItemNbr');
            $criteria->addSelectColumn($alias . '.NsitMnfrId');
            $criteria->addSelectColumn($alias . '.NsitDesc1');
            $criteria->addSelectColumn($alias . '.NsitDesc2');
            $criteria->addSelectColumn($alias . '.NsitCost');
            $criteria->addSelectColumn($alias . '.NsitAvail');
            $criteria->addSelectColumn($alias . '.NsitUom');
            $criteria->addSelectColumn($alias . '.NsitPrice');
            $criteria->addSelectColumn($alias . '.NsitChgDate');
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
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITITEMNBR);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITMNFRID);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITDESC1);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITDESC2);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITCOST);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITAVAIL);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITUOM);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITPRICE);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_NSITCHGDATE);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvNonstockItemTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.NsitItemNbr');
            $criteria->removeSelectColumn($alias . '.NsitMnfrId');
            $criteria->removeSelectColumn($alias . '.NsitDesc1');
            $criteria->removeSelectColumn($alias . '.NsitDesc2');
            $criteria->removeSelectColumn($alias . '.NsitCost');
            $criteria->removeSelectColumn($alias . '.NsitAvail');
            $criteria->removeSelectColumn($alias . '.NsitUom');
            $criteria->removeSelectColumn($alias . '.NsitPrice');
            $criteria->removeSelectColumn($alias . '.NsitChgDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvNonstockItemTableMap::DATABASE_NAME)->getTable(InvNonstockItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvNonstockItem or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvNonstockItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvNonstockItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvNonstockItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvNonstockItemTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvNonstockItemTableMap::COL_NSITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvNonstockItemTableMap::COL_NSITMNFRID, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvNonstockItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvNonstockItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvNonstockItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_nonstock_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvNonstockItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvNonstockItem or Criteria object.
     *
     * @param mixed $criteria Criteria or InvNonstockItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvNonstockItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvNonstockItem object
        }


        // Set the correct dbName
        $query = InvNonstockItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
