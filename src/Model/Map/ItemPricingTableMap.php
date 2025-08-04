<?php

namespace Map;

use \ItemPricing;
use \ItemPricingQuery;
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
 * This class defines the structure of the 'inv_item_price' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ItemPricingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ItemPricingTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_item_price';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ItemPricing';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ItemPricing';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ItemPricing';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 26;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 26;

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'inv_item_price.InitItemNbr';

    /**
     * the column name for the InprPricBase field
     */
    public const COL_INPRPRICBASE = 'inv_item_price.InprPricBase';

    /**
     * the column name for the InprPricUnit1 field
     */
    public const COL_INPRPRICUNIT1 = 'inv_item_price.InprPricUnit1';

    /**
     * the column name for the InprPricPric1 field
     */
    public const COL_INPRPRICPRIC1 = 'inv_item_price.InprPricPric1';

    /**
     * the column name for the InprPricUnit2 field
     */
    public const COL_INPRPRICUNIT2 = 'inv_item_price.InprPricUnit2';

    /**
     * the column name for the InprPricPric2 field
     */
    public const COL_INPRPRICPRIC2 = 'inv_item_price.InprPricPric2';

    /**
     * the column name for the InprPricUnit3 field
     */
    public const COL_INPRPRICUNIT3 = 'inv_item_price.InprPricUnit3';

    /**
     * the column name for the InprPricPric3 field
     */
    public const COL_INPRPRICPRIC3 = 'inv_item_price.InprPricPric3';

    /**
     * the column name for the InprPricUnit4 field
     */
    public const COL_INPRPRICUNIT4 = 'inv_item_price.InprPricUnit4';

    /**
     * the column name for the InprPricPric4 field
     */
    public const COL_INPRPRICPRIC4 = 'inv_item_price.InprPricPric4';

    /**
     * the column name for the InprPricUnit5 field
     */
    public const COL_INPRPRICUNIT5 = 'inv_item_price.InprPricUnit5';

    /**
     * the column name for the InprPricPric5 field
     */
    public const COL_INPRPRICPRIC5 = 'inv_item_price.InprPricPric5';

    /**
     * the column name for the InprPricUnit6 field
     */
    public const COL_INPRPRICUNIT6 = 'inv_item_price.InprPricUnit6';

    /**
     * the column name for the InprPricPric6 field
     */
    public const COL_INPRPRICPRIC6 = 'inv_item_price.InprPricPric6';

    /**
     * the column name for the InprPricUnit7 field
     */
    public const COL_INPRPRICUNIT7 = 'inv_item_price.InprPricUnit7';

    /**
     * the column name for the InprPricPric7 field
     */
    public const COL_INPRPRICPRIC7 = 'inv_item_price.InprPricPric7';

    /**
     * the column name for the InprPricUnit8 field
     */
    public const COL_INPRPRICUNIT8 = 'inv_item_price.InprPricUnit8';

    /**
     * the column name for the InprPricPric8 field
     */
    public const COL_INPRPRICPRIC8 = 'inv_item_price.InprPricPric8';

    /**
     * the column name for the InprPricUnit9 field
     */
    public const COL_INPRPRICUNIT9 = 'inv_item_price.InprPricUnit9';

    /**
     * the column name for the InprPricPric9 field
     */
    public const COL_INPRPRICPRIC9 = 'inv_item_price.InprPricPric9';

    /**
     * the column name for the InprPricUnit10 field
     */
    public const COL_INPRPRICUNIT10 = 'inv_item_price.InprPricUnit10';

    /**
     * the column name for the InprPricPric10 field
     */
    public const COL_INPRPRICPRIC10 = 'inv_item_price.InprPricPric10';

    /**
     * the column name for the InprPricLastDate field
     */
    public const COL_INPRPRICLASTDATE = 'inv_item_price.InprPricLastDate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_item_price.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_item_price.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_item_price.dummy';

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
        self::TYPE_PHPNAME       => ['Inititemnbr', 'Inprpricbase', 'Inprpricunit1', 'Inprpricpric1', 'Inprpricunit2', 'Inprpricpric2', 'Inprpricunit3', 'Inprpricpric3', 'Inprpricunit4', 'Inprpricpric4', 'Inprpricunit5', 'Inprpricpric5', 'Inprpricunit6', 'Inprpricpric6', 'Inprpricunit7', 'Inprpricpric7', 'Inprpricunit8', 'Inprpricpric8', 'Inprpricunit9', 'Inprpricpric9', 'Inprpricunit10', 'Inprpricpric10', 'Inprpriclastdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['inititemnbr', 'inprpricbase', 'inprpricunit1', 'inprpricpric1', 'inprpricunit2', 'inprpricpric2', 'inprpricunit3', 'inprpricpric3', 'inprpricunit4', 'inprpricpric4', 'inprpricunit5', 'inprpricpric5', 'inprpricunit6', 'inprpricpric6', 'inprpricunit7', 'inprpricpric7', 'inprpricunit8', 'inprpricpric8', 'inprpricunit9', 'inprpricpric9', 'inprpricunit10', 'inprpricpric10', 'inprpriclastdate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ItemPricingTableMap::COL_INITITEMNBR, ItemPricingTableMap::COL_INPRPRICBASE, ItemPricingTableMap::COL_INPRPRICUNIT1, ItemPricingTableMap::COL_INPRPRICPRIC1, ItemPricingTableMap::COL_INPRPRICUNIT2, ItemPricingTableMap::COL_INPRPRICPRIC2, ItemPricingTableMap::COL_INPRPRICUNIT3, ItemPricingTableMap::COL_INPRPRICPRIC3, ItemPricingTableMap::COL_INPRPRICUNIT4, ItemPricingTableMap::COL_INPRPRICPRIC4, ItemPricingTableMap::COL_INPRPRICUNIT5, ItemPricingTableMap::COL_INPRPRICPRIC5, ItemPricingTableMap::COL_INPRPRICUNIT6, ItemPricingTableMap::COL_INPRPRICPRIC6, ItemPricingTableMap::COL_INPRPRICUNIT7, ItemPricingTableMap::COL_INPRPRICPRIC7, ItemPricingTableMap::COL_INPRPRICUNIT8, ItemPricingTableMap::COL_INPRPRICPRIC8, ItemPricingTableMap::COL_INPRPRICUNIT9, ItemPricingTableMap::COL_INPRPRICPRIC9, ItemPricingTableMap::COL_INPRPRICUNIT10, ItemPricingTableMap::COL_INPRPRICPRIC10, ItemPricingTableMap::COL_INPRPRICLASTDATE, ItemPricingTableMap::COL_DATEUPDTD, ItemPricingTableMap::COL_TIMEUPDTD, ItemPricingTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['InitItemNbr', 'InprPricBase', 'InprPricUnit1', 'InprPricPric1', 'InprPricUnit2', 'InprPricPric2', 'InprPricUnit3', 'InprPricPric3', 'InprPricUnit4', 'InprPricPric4', 'InprPricUnit5', 'InprPricPric5', 'InprPricUnit6', 'InprPricPric6', 'InprPricUnit7', 'InprPricPric7', 'InprPricUnit8', 'InprPricPric8', 'InprPricUnit9', 'InprPricPric9', 'InprPricUnit10', 'InprPricPric10', 'InprPricLastDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, ]
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
        self::TYPE_PHPNAME       => ['Inititemnbr' => 0, 'Inprpricbase' => 1, 'Inprpricunit1' => 2, 'Inprpricpric1' => 3, 'Inprpricunit2' => 4, 'Inprpricpric2' => 5, 'Inprpricunit3' => 6, 'Inprpricpric3' => 7, 'Inprpricunit4' => 8, 'Inprpricpric4' => 9, 'Inprpricunit5' => 10, 'Inprpricpric5' => 11, 'Inprpricunit6' => 12, 'Inprpricpric6' => 13, 'Inprpricunit7' => 14, 'Inprpricpric7' => 15, 'Inprpricunit8' => 16, 'Inprpricpric8' => 17, 'Inprpricunit9' => 18, 'Inprpricpric9' => 19, 'Inprpricunit10' => 20, 'Inprpricpric10' => 21, 'Inprpriclastdate' => 22, 'Dateupdtd' => 23, 'Timeupdtd' => 24, 'Dummy' => 25, ],
        self::TYPE_CAMELNAME     => ['inititemnbr' => 0, 'inprpricbase' => 1, 'inprpricunit1' => 2, 'inprpricpric1' => 3, 'inprpricunit2' => 4, 'inprpricpric2' => 5, 'inprpricunit3' => 6, 'inprpricpric3' => 7, 'inprpricunit4' => 8, 'inprpricpric4' => 9, 'inprpricunit5' => 10, 'inprpricpric5' => 11, 'inprpricunit6' => 12, 'inprpricpric6' => 13, 'inprpricunit7' => 14, 'inprpricpric7' => 15, 'inprpricunit8' => 16, 'inprpricpric8' => 17, 'inprpricunit9' => 18, 'inprpricpric9' => 19, 'inprpricunit10' => 20, 'inprpricpric10' => 21, 'inprpriclastdate' => 22, 'dateupdtd' => 23, 'timeupdtd' => 24, 'dummy' => 25, ],
        self::TYPE_COLNAME       => [ItemPricingTableMap::COL_INITITEMNBR => 0, ItemPricingTableMap::COL_INPRPRICBASE => 1, ItemPricingTableMap::COL_INPRPRICUNIT1 => 2, ItemPricingTableMap::COL_INPRPRICPRIC1 => 3, ItemPricingTableMap::COL_INPRPRICUNIT2 => 4, ItemPricingTableMap::COL_INPRPRICPRIC2 => 5, ItemPricingTableMap::COL_INPRPRICUNIT3 => 6, ItemPricingTableMap::COL_INPRPRICPRIC3 => 7, ItemPricingTableMap::COL_INPRPRICUNIT4 => 8, ItemPricingTableMap::COL_INPRPRICPRIC4 => 9, ItemPricingTableMap::COL_INPRPRICUNIT5 => 10, ItemPricingTableMap::COL_INPRPRICPRIC5 => 11, ItemPricingTableMap::COL_INPRPRICUNIT6 => 12, ItemPricingTableMap::COL_INPRPRICPRIC6 => 13, ItemPricingTableMap::COL_INPRPRICUNIT7 => 14, ItemPricingTableMap::COL_INPRPRICPRIC7 => 15, ItemPricingTableMap::COL_INPRPRICUNIT8 => 16, ItemPricingTableMap::COL_INPRPRICPRIC8 => 17, ItemPricingTableMap::COL_INPRPRICUNIT9 => 18, ItemPricingTableMap::COL_INPRPRICPRIC9 => 19, ItemPricingTableMap::COL_INPRPRICUNIT10 => 20, ItemPricingTableMap::COL_INPRPRICPRIC10 => 21, ItemPricingTableMap::COL_INPRPRICLASTDATE => 22, ItemPricingTableMap::COL_DATEUPDTD => 23, ItemPricingTableMap::COL_TIMEUPDTD => 24, ItemPricingTableMap::COL_DUMMY => 25, ],
        self::TYPE_FIELDNAME     => ['InitItemNbr' => 0, 'InprPricBase' => 1, 'InprPricUnit1' => 2, 'InprPricPric1' => 3, 'InprPricUnit2' => 4, 'InprPricPric2' => 5, 'InprPricUnit3' => 6, 'InprPricPric3' => 7, 'InprPricUnit4' => 8, 'InprPricPric4' => 9, 'InprPricUnit5' => 10, 'InprPricPric5' => 11, 'InprPricUnit6' => 12, 'InprPricPric6' => 13, 'InprPricUnit7' => 14, 'InprPricPric7' => 15, 'InprPricUnit8' => 16, 'InprPricPric8' => 17, 'InprPricUnit9' => 18, 'InprPricPric9' => 19, 'InprPricUnit10' => 20, 'InprPricPric10' => 21, 'InprPricLastDate' => 22, 'DateUpdtd' => 23, 'TimeUpdtd' => 24, 'dummy' => 25, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Inititemnbr' => 'INITITEMNBR',
        'ItemPricing.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'itemPricing.inititemnbr' => 'INITITEMNBR',
        'ItemPricingTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'inv_item_price.InitItemNbr' => 'INITITEMNBR',
        'Inprpricbase' => 'INPRPRICBASE',
        'ItemPricing.Inprpricbase' => 'INPRPRICBASE',
        'inprpricbase' => 'INPRPRICBASE',
        'itemPricing.inprpricbase' => 'INPRPRICBASE',
        'ItemPricingTableMap::COL_INPRPRICBASE' => 'INPRPRICBASE',
        'COL_INPRPRICBASE' => 'INPRPRICBASE',
        'InprPricBase' => 'INPRPRICBASE',
        'inv_item_price.InprPricBase' => 'INPRPRICBASE',
        'Inprpricunit1' => 'INPRPRICUNIT1',
        'ItemPricing.Inprpricunit1' => 'INPRPRICUNIT1',
        'inprpricunit1' => 'INPRPRICUNIT1',
        'itemPricing.inprpricunit1' => 'INPRPRICUNIT1',
        'ItemPricingTableMap::COL_INPRPRICUNIT1' => 'INPRPRICUNIT1',
        'COL_INPRPRICUNIT1' => 'INPRPRICUNIT1',
        'InprPricUnit1' => 'INPRPRICUNIT1',
        'inv_item_price.InprPricUnit1' => 'INPRPRICUNIT1',
        'Inprpricpric1' => 'INPRPRICPRIC1',
        'ItemPricing.Inprpricpric1' => 'INPRPRICPRIC1',
        'inprpricpric1' => 'INPRPRICPRIC1',
        'itemPricing.inprpricpric1' => 'INPRPRICPRIC1',
        'ItemPricingTableMap::COL_INPRPRICPRIC1' => 'INPRPRICPRIC1',
        'COL_INPRPRICPRIC1' => 'INPRPRICPRIC1',
        'InprPricPric1' => 'INPRPRICPRIC1',
        'inv_item_price.InprPricPric1' => 'INPRPRICPRIC1',
        'Inprpricunit2' => 'INPRPRICUNIT2',
        'ItemPricing.Inprpricunit2' => 'INPRPRICUNIT2',
        'inprpricunit2' => 'INPRPRICUNIT2',
        'itemPricing.inprpricunit2' => 'INPRPRICUNIT2',
        'ItemPricingTableMap::COL_INPRPRICUNIT2' => 'INPRPRICUNIT2',
        'COL_INPRPRICUNIT2' => 'INPRPRICUNIT2',
        'InprPricUnit2' => 'INPRPRICUNIT2',
        'inv_item_price.InprPricUnit2' => 'INPRPRICUNIT2',
        'Inprpricpric2' => 'INPRPRICPRIC2',
        'ItemPricing.Inprpricpric2' => 'INPRPRICPRIC2',
        'inprpricpric2' => 'INPRPRICPRIC2',
        'itemPricing.inprpricpric2' => 'INPRPRICPRIC2',
        'ItemPricingTableMap::COL_INPRPRICPRIC2' => 'INPRPRICPRIC2',
        'COL_INPRPRICPRIC2' => 'INPRPRICPRIC2',
        'InprPricPric2' => 'INPRPRICPRIC2',
        'inv_item_price.InprPricPric2' => 'INPRPRICPRIC2',
        'Inprpricunit3' => 'INPRPRICUNIT3',
        'ItemPricing.Inprpricunit3' => 'INPRPRICUNIT3',
        'inprpricunit3' => 'INPRPRICUNIT3',
        'itemPricing.inprpricunit3' => 'INPRPRICUNIT3',
        'ItemPricingTableMap::COL_INPRPRICUNIT3' => 'INPRPRICUNIT3',
        'COL_INPRPRICUNIT3' => 'INPRPRICUNIT3',
        'InprPricUnit3' => 'INPRPRICUNIT3',
        'inv_item_price.InprPricUnit3' => 'INPRPRICUNIT3',
        'Inprpricpric3' => 'INPRPRICPRIC3',
        'ItemPricing.Inprpricpric3' => 'INPRPRICPRIC3',
        'inprpricpric3' => 'INPRPRICPRIC3',
        'itemPricing.inprpricpric3' => 'INPRPRICPRIC3',
        'ItemPricingTableMap::COL_INPRPRICPRIC3' => 'INPRPRICPRIC3',
        'COL_INPRPRICPRIC3' => 'INPRPRICPRIC3',
        'InprPricPric3' => 'INPRPRICPRIC3',
        'inv_item_price.InprPricPric3' => 'INPRPRICPRIC3',
        'Inprpricunit4' => 'INPRPRICUNIT4',
        'ItemPricing.Inprpricunit4' => 'INPRPRICUNIT4',
        'inprpricunit4' => 'INPRPRICUNIT4',
        'itemPricing.inprpricunit4' => 'INPRPRICUNIT4',
        'ItemPricingTableMap::COL_INPRPRICUNIT4' => 'INPRPRICUNIT4',
        'COL_INPRPRICUNIT4' => 'INPRPRICUNIT4',
        'InprPricUnit4' => 'INPRPRICUNIT4',
        'inv_item_price.InprPricUnit4' => 'INPRPRICUNIT4',
        'Inprpricpric4' => 'INPRPRICPRIC4',
        'ItemPricing.Inprpricpric4' => 'INPRPRICPRIC4',
        'inprpricpric4' => 'INPRPRICPRIC4',
        'itemPricing.inprpricpric4' => 'INPRPRICPRIC4',
        'ItemPricingTableMap::COL_INPRPRICPRIC4' => 'INPRPRICPRIC4',
        'COL_INPRPRICPRIC4' => 'INPRPRICPRIC4',
        'InprPricPric4' => 'INPRPRICPRIC4',
        'inv_item_price.InprPricPric4' => 'INPRPRICPRIC4',
        'Inprpricunit5' => 'INPRPRICUNIT5',
        'ItemPricing.Inprpricunit5' => 'INPRPRICUNIT5',
        'inprpricunit5' => 'INPRPRICUNIT5',
        'itemPricing.inprpricunit5' => 'INPRPRICUNIT5',
        'ItemPricingTableMap::COL_INPRPRICUNIT5' => 'INPRPRICUNIT5',
        'COL_INPRPRICUNIT5' => 'INPRPRICUNIT5',
        'InprPricUnit5' => 'INPRPRICUNIT5',
        'inv_item_price.InprPricUnit5' => 'INPRPRICUNIT5',
        'Inprpricpric5' => 'INPRPRICPRIC5',
        'ItemPricing.Inprpricpric5' => 'INPRPRICPRIC5',
        'inprpricpric5' => 'INPRPRICPRIC5',
        'itemPricing.inprpricpric5' => 'INPRPRICPRIC5',
        'ItemPricingTableMap::COL_INPRPRICPRIC5' => 'INPRPRICPRIC5',
        'COL_INPRPRICPRIC5' => 'INPRPRICPRIC5',
        'InprPricPric5' => 'INPRPRICPRIC5',
        'inv_item_price.InprPricPric5' => 'INPRPRICPRIC5',
        'Inprpricunit6' => 'INPRPRICUNIT6',
        'ItemPricing.Inprpricunit6' => 'INPRPRICUNIT6',
        'inprpricunit6' => 'INPRPRICUNIT6',
        'itemPricing.inprpricunit6' => 'INPRPRICUNIT6',
        'ItemPricingTableMap::COL_INPRPRICUNIT6' => 'INPRPRICUNIT6',
        'COL_INPRPRICUNIT6' => 'INPRPRICUNIT6',
        'InprPricUnit6' => 'INPRPRICUNIT6',
        'inv_item_price.InprPricUnit6' => 'INPRPRICUNIT6',
        'Inprpricpric6' => 'INPRPRICPRIC6',
        'ItemPricing.Inprpricpric6' => 'INPRPRICPRIC6',
        'inprpricpric6' => 'INPRPRICPRIC6',
        'itemPricing.inprpricpric6' => 'INPRPRICPRIC6',
        'ItemPricingTableMap::COL_INPRPRICPRIC6' => 'INPRPRICPRIC6',
        'COL_INPRPRICPRIC6' => 'INPRPRICPRIC6',
        'InprPricPric6' => 'INPRPRICPRIC6',
        'inv_item_price.InprPricPric6' => 'INPRPRICPRIC6',
        'Inprpricunit7' => 'INPRPRICUNIT7',
        'ItemPricing.Inprpricunit7' => 'INPRPRICUNIT7',
        'inprpricunit7' => 'INPRPRICUNIT7',
        'itemPricing.inprpricunit7' => 'INPRPRICUNIT7',
        'ItemPricingTableMap::COL_INPRPRICUNIT7' => 'INPRPRICUNIT7',
        'COL_INPRPRICUNIT7' => 'INPRPRICUNIT7',
        'InprPricUnit7' => 'INPRPRICUNIT7',
        'inv_item_price.InprPricUnit7' => 'INPRPRICUNIT7',
        'Inprpricpric7' => 'INPRPRICPRIC7',
        'ItemPricing.Inprpricpric7' => 'INPRPRICPRIC7',
        'inprpricpric7' => 'INPRPRICPRIC7',
        'itemPricing.inprpricpric7' => 'INPRPRICPRIC7',
        'ItemPricingTableMap::COL_INPRPRICPRIC7' => 'INPRPRICPRIC7',
        'COL_INPRPRICPRIC7' => 'INPRPRICPRIC7',
        'InprPricPric7' => 'INPRPRICPRIC7',
        'inv_item_price.InprPricPric7' => 'INPRPRICPRIC7',
        'Inprpricunit8' => 'INPRPRICUNIT8',
        'ItemPricing.Inprpricunit8' => 'INPRPRICUNIT8',
        'inprpricunit8' => 'INPRPRICUNIT8',
        'itemPricing.inprpricunit8' => 'INPRPRICUNIT8',
        'ItemPricingTableMap::COL_INPRPRICUNIT8' => 'INPRPRICUNIT8',
        'COL_INPRPRICUNIT8' => 'INPRPRICUNIT8',
        'InprPricUnit8' => 'INPRPRICUNIT8',
        'inv_item_price.InprPricUnit8' => 'INPRPRICUNIT8',
        'Inprpricpric8' => 'INPRPRICPRIC8',
        'ItemPricing.Inprpricpric8' => 'INPRPRICPRIC8',
        'inprpricpric8' => 'INPRPRICPRIC8',
        'itemPricing.inprpricpric8' => 'INPRPRICPRIC8',
        'ItemPricingTableMap::COL_INPRPRICPRIC8' => 'INPRPRICPRIC8',
        'COL_INPRPRICPRIC8' => 'INPRPRICPRIC8',
        'InprPricPric8' => 'INPRPRICPRIC8',
        'inv_item_price.InprPricPric8' => 'INPRPRICPRIC8',
        'Inprpricunit9' => 'INPRPRICUNIT9',
        'ItemPricing.Inprpricunit9' => 'INPRPRICUNIT9',
        'inprpricunit9' => 'INPRPRICUNIT9',
        'itemPricing.inprpricunit9' => 'INPRPRICUNIT9',
        'ItemPricingTableMap::COL_INPRPRICUNIT9' => 'INPRPRICUNIT9',
        'COL_INPRPRICUNIT9' => 'INPRPRICUNIT9',
        'InprPricUnit9' => 'INPRPRICUNIT9',
        'inv_item_price.InprPricUnit9' => 'INPRPRICUNIT9',
        'Inprpricpric9' => 'INPRPRICPRIC9',
        'ItemPricing.Inprpricpric9' => 'INPRPRICPRIC9',
        'inprpricpric9' => 'INPRPRICPRIC9',
        'itemPricing.inprpricpric9' => 'INPRPRICPRIC9',
        'ItemPricingTableMap::COL_INPRPRICPRIC9' => 'INPRPRICPRIC9',
        'COL_INPRPRICPRIC9' => 'INPRPRICPRIC9',
        'InprPricPric9' => 'INPRPRICPRIC9',
        'inv_item_price.InprPricPric9' => 'INPRPRICPRIC9',
        'Inprpricunit10' => 'INPRPRICUNIT10',
        'ItemPricing.Inprpricunit10' => 'INPRPRICUNIT10',
        'inprpricunit10' => 'INPRPRICUNIT10',
        'itemPricing.inprpricunit10' => 'INPRPRICUNIT10',
        'ItemPricingTableMap::COL_INPRPRICUNIT10' => 'INPRPRICUNIT10',
        'COL_INPRPRICUNIT10' => 'INPRPRICUNIT10',
        'InprPricUnit10' => 'INPRPRICUNIT10',
        'inv_item_price.InprPricUnit10' => 'INPRPRICUNIT10',
        'Inprpricpric10' => 'INPRPRICPRIC10',
        'ItemPricing.Inprpricpric10' => 'INPRPRICPRIC10',
        'inprpricpric10' => 'INPRPRICPRIC10',
        'itemPricing.inprpricpric10' => 'INPRPRICPRIC10',
        'ItemPricingTableMap::COL_INPRPRICPRIC10' => 'INPRPRICPRIC10',
        'COL_INPRPRICPRIC10' => 'INPRPRICPRIC10',
        'InprPricPric10' => 'INPRPRICPRIC10',
        'inv_item_price.InprPricPric10' => 'INPRPRICPRIC10',
        'Inprpriclastdate' => 'INPRPRICLASTDATE',
        'ItemPricing.Inprpriclastdate' => 'INPRPRICLASTDATE',
        'inprpriclastdate' => 'INPRPRICLASTDATE',
        'itemPricing.inprpriclastdate' => 'INPRPRICLASTDATE',
        'ItemPricingTableMap::COL_INPRPRICLASTDATE' => 'INPRPRICLASTDATE',
        'COL_INPRPRICLASTDATE' => 'INPRPRICLASTDATE',
        'InprPricLastDate' => 'INPRPRICLASTDATE',
        'inv_item_price.InprPricLastDate' => 'INPRPRICLASTDATE',
        'Dateupdtd' => 'DATEUPDTD',
        'ItemPricing.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'itemPricing.dateupdtd' => 'DATEUPDTD',
        'ItemPricingTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_item_price.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ItemPricing.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'itemPricing.timeupdtd' => 'TIMEUPDTD',
        'ItemPricingTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_item_price.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ItemPricing.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'itemPricing.dummy' => 'DUMMY',
        'ItemPricingTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_item_price.dummy' => 'DUMMY',
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
        $this->setName('inv_item_price');
        $this->setPhpName('ItemPricing');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemPricing');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('InprPricBase', 'Inprpricbase', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit1', 'Inprpricunit1', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric1', 'Inprpricpric1', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit2', 'Inprpricunit2', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric2', 'Inprpricpric2', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit3', 'Inprpricunit3', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric3', 'Inprpricpric3', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit4', 'Inprpricunit4', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric4', 'Inprpricpric4', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit5', 'Inprpricunit5', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric5', 'Inprpricpric5', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit6', 'Inprpricunit6', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric6', 'Inprpricpric6', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit7', 'Inprpricunit7', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric7', 'Inprpricpric7', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit8', 'Inprpricunit8', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric8', 'Inprpricpric8', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit9', 'Inprpricunit9', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric9', 'Inprpricpric9', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit10', 'Inprpricunit10', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric10', 'Inprpricpric10', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricLastDate', 'Inprpriclastdate', 'VARCHAR', false, 8, null);
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
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItemPricingTableMap::CLASS_DEFAULT : ItemPricingTableMap::OM_CLASS;
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
     * @return array (ItemPricing object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ItemPricingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemPricingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemPricingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemPricingTableMap::OM_CLASS;
            /** @var ItemPricing $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemPricingTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemPricingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemPricingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemPricing $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemPricingTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICBASE);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT1);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC1);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT2);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC2);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT3);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC3);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT4);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC4);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT5);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC5);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT6);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC6);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT7);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC7);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT8);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC8);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT9);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC9);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT10);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC10);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICLASTDATE);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InprPricBase');
            $criteria->addSelectColumn($alias . '.InprPricUnit1');
            $criteria->addSelectColumn($alias . '.InprPricPric1');
            $criteria->addSelectColumn($alias . '.InprPricUnit2');
            $criteria->addSelectColumn($alias . '.InprPricPric2');
            $criteria->addSelectColumn($alias . '.InprPricUnit3');
            $criteria->addSelectColumn($alias . '.InprPricPric3');
            $criteria->addSelectColumn($alias . '.InprPricUnit4');
            $criteria->addSelectColumn($alias . '.InprPricPric4');
            $criteria->addSelectColumn($alias . '.InprPricUnit5');
            $criteria->addSelectColumn($alias . '.InprPricPric5');
            $criteria->addSelectColumn($alias . '.InprPricUnit6');
            $criteria->addSelectColumn($alias . '.InprPricPric6');
            $criteria->addSelectColumn($alias . '.InprPricUnit7');
            $criteria->addSelectColumn($alias . '.InprPricPric7');
            $criteria->addSelectColumn($alias . '.InprPricUnit8');
            $criteria->addSelectColumn($alias . '.InprPricPric8');
            $criteria->addSelectColumn($alias . '.InprPricUnit9');
            $criteria->addSelectColumn($alias . '.InprPricPric9');
            $criteria->addSelectColumn($alias . '.InprPricUnit10');
            $criteria->addSelectColumn($alias . '.InprPricPric10');
            $criteria->addSelectColumn($alias . '.InprPricLastDate');
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
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICBASE);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT1);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC1);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT2);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC2);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT3);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC3);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT4);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC4);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT5);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC5);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT6);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC6);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT7);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC7);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT8);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC8);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT9);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC9);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT10);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC10);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_INPRPRICLASTDATE);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ItemPricingTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.InprPricBase');
            $criteria->removeSelectColumn($alias . '.InprPricUnit1');
            $criteria->removeSelectColumn($alias . '.InprPricPric1');
            $criteria->removeSelectColumn($alias . '.InprPricUnit2');
            $criteria->removeSelectColumn($alias . '.InprPricPric2');
            $criteria->removeSelectColumn($alias . '.InprPricUnit3');
            $criteria->removeSelectColumn($alias . '.InprPricPric3');
            $criteria->removeSelectColumn($alias . '.InprPricUnit4');
            $criteria->removeSelectColumn($alias . '.InprPricPric4');
            $criteria->removeSelectColumn($alias . '.InprPricUnit5');
            $criteria->removeSelectColumn($alias . '.InprPricPric5');
            $criteria->removeSelectColumn($alias . '.InprPricUnit6');
            $criteria->removeSelectColumn($alias . '.InprPricPric6');
            $criteria->removeSelectColumn($alias . '.InprPricUnit7');
            $criteria->removeSelectColumn($alias . '.InprPricPric7');
            $criteria->removeSelectColumn($alias . '.InprPricUnit8');
            $criteria->removeSelectColumn($alias . '.InprPricPric8');
            $criteria->removeSelectColumn($alias . '.InprPricUnit9');
            $criteria->removeSelectColumn($alias . '.InprPricPric9');
            $criteria->removeSelectColumn($alias . '.InprPricUnit10');
            $criteria->removeSelectColumn($alias . '.InprPricPric10');
            $criteria->removeSelectColumn($alias . '.InprPricLastDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemPricingTableMap::DATABASE_NAME)->getTable(ItemPricingTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ItemPricing or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ItemPricing object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemPricing) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemPricingTableMap::DATABASE_NAME);
            $criteria->add(ItemPricingTableMap::COL_INITITEMNBR, (array) $values, Criteria::IN);
        }

        $query = ItemPricingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemPricingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemPricingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_item_price table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ItemPricingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemPricing or Criteria object.
     *
     * @param mixed $criteria Criteria or ItemPricing object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemPricing object
        }


        // Set the correct dbName
        $query = ItemPricingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
