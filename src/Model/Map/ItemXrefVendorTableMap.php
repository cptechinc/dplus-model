<?php

namespace Map;

use \ItemXrefVendor;
use \ItemXrefVendorQuery;
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
 * This class defines the structure of the 'vend_item_xref' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ItemXrefVendorTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ItemXrefVendorTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'vend_item_xref';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ItemXrefVendor';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ItemXrefVendor';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ItemXrefVendor';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 37;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 37;

    /**
     * the column name for the ApveVendId field
     */
    public const COL_APVEVENDID = 'vend_item_xref.ApveVendId';

    /**
     * the column name for the VexrVendItemNbr field
     */
    public const COL_VEXRVENDITEMNBR = 'vend_item_xref.VexrVendItemNbr';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'vend_item_xref.InitItemNbr';

    /**
     * the column name for the VexrPoOrderCode field
     */
    public const COL_VEXRPOORDERCODE = 'vend_item_xref.VexrPoOrderCode';

    /**
     * the column name for the VexrOption1 field
     */
    public const COL_VEXROPTION1 = 'vend_item_xref.VexrOption1';

    /**
     * the column name for the IntbUomPur field
     */
    public const COL_INTBUOMPUR = 'vend_item_xref.IntbUomPur';

    /**
     * the column name for the VexrCaseQty field
     */
    public const COL_VEXRCASEQTY = 'vend_item_xref.VexrCaseQty';

    /**
     * the column name for the VexrPrtKitDet field
     */
    public const COL_VEXRPRTKITDET = 'vend_item_xref.VexrPrtKitDet';

    /**
     * the column name for the VexrListPrice field
     */
    public const COL_VEXRLISTPRICE = 'vend_item_xref.VexrListPrice';

    /**
     * the column name for the VexrUnitCost field
     */
    public const COL_VEXRUNITCOST = 'vend_item_xref.VexrUnitCost';

    /**
     * the column name for the VexrForeignCost field
     */
    public const COL_VEXRFOREIGNCOST = 'vend_item_xref.VexrForeignCost';

    /**
     * the column name for the VexrCostLastDate field
     */
    public const COL_VEXRCOSTLASTDATE = 'vend_item_xref.VexrCostLastDate';

    /**
     * the column name for the VexrUnitUnit1 field
     */
    public const COL_VEXRUNITUNIT1 = 'vend_item_xref.VexrUnitUnit1';

    /**
     * the column name for the VexrUnitCost1 field
     */
    public const COL_VEXRUNITCOST1 = 'vend_item_xref.VexrUnitCost1';

    /**
     * the column name for the VexrUnitUnit2 field
     */
    public const COL_VEXRUNITUNIT2 = 'vend_item_xref.VexrUnitUnit2';

    /**
     * the column name for the VexrUnitCost2 field
     */
    public const COL_VEXRUNITCOST2 = 'vend_item_xref.VexrUnitCost2';

    /**
     * the column name for the VexrUnitUnit3 field
     */
    public const COL_VEXRUNITUNIT3 = 'vend_item_xref.VexrUnitUnit3';

    /**
     * the column name for the VexrUnitCost3 field
     */
    public const COL_VEXRUNITCOST3 = 'vend_item_xref.VexrUnitCost3';

    /**
     * the column name for the VexrUnitUnit4 field
     */
    public const COL_VEXRUNITUNIT4 = 'vend_item_xref.VexrUnitUnit4';

    /**
     * the column name for the VexrUnitCost4 field
     */
    public const COL_VEXRUNITCOST4 = 'vend_item_xref.VexrUnitCost4';

    /**
     * the column name for the VexrUnitUnit5 field
     */
    public const COL_VEXRUNITUNIT5 = 'vend_item_xref.VexrUnitUnit5';

    /**
     * the column name for the VexrUnitCost5 field
     */
    public const COL_VEXRUNITCOST5 = 'vend_item_xref.VexrUnitCost5';

    /**
     * the column name for the VexrUnitUnit6 field
     */
    public const COL_VEXRUNITUNIT6 = 'vend_item_xref.VexrUnitUnit6';

    /**
     * the column name for the VexrUnitCost6 field
     */
    public const COL_VEXRUNITCOST6 = 'vend_item_xref.VexrUnitCost6';

    /**
     * the column name for the VexrUnitUnit7 field
     */
    public const COL_VEXRUNITUNIT7 = 'vend_item_xref.VexrUnitUnit7';

    /**
     * the column name for the VexrUnitCost7 field
     */
    public const COL_VEXRUNITCOST7 = 'vend_item_xref.VexrUnitCost7';

    /**
     * the column name for the VexrUnitUnit8 field
     */
    public const COL_VEXRUNITUNIT8 = 'vend_item_xref.VexrUnitUnit8';

    /**
     * the column name for the VexrUnitCost8 field
     */
    public const COL_VEXRUNITCOST8 = 'vend_item_xref.VexrUnitCost8';

    /**
     * the column name for the VexrUnitUnit9 field
     */
    public const COL_VEXRUNITUNIT9 = 'vend_item_xref.VexrUnitUnit9';

    /**
     * the column name for the VexrUnitCost9 field
     */
    public const COL_VEXRUNITCOST9 = 'vend_item_xref.VexrUnitCost9';

    /**
     * the column name for the VexrUnitUnit10 field
     */
    public const COL_VEXRUNITUNIT10 = 'vend_item_xref.VexrUnitUnit10';

    /**
     * the column name for the VexrUnitCost10 field
     */
    public const COL_VEXRUNITCOST10 = 'vend_item_xref.VexrUnitCost10';

    /**
     * the column name for the VexrAprvCode field
     */
    public const COL_VEXRAPRVCODE = 'vend_item_xref.VexrAprvCode';

    /**
     * the column name for the VexrMinBuyQty field
     */
    public const COL_VEXRMINBUYQTY = 'vend_item_xref.VexrMinBuyQty';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'vend_item_xref.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'vend_item_xref.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'vend_item_xref.dummy';

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
        self::TYPE_PHPNAME       => ['Apvevendid', 'Vexrvenditemnbr', 'Inititemnbr', 'Vexrpoordercode', 'Vexroption1', 'Intbuompur', 'Vexrcaseqty', 'Vexrprtkitdet', 'Vexrlistprice', 'Vexrunitcost', 'Vexrforeigncost', 'Vexrcostlastdate', 'Vexrunitunit1', 'Vexrunitcost1', 'Vexrunitunit2', 'Vexrunitcost2', 'Vexrunitunit3', 'Vexrunitcost3', 'Vexrunitunit4', 'Vexrunitcost4', 'Vexrunitunit5', 'Vexrunitcost5', 'Vexrunitunit6', 'Vexrunitcost6', 'Vexrunitunit7', 'Vexrunitcost7', 'Vexrunitunit8', 'Vexrunitcost8', 'Vexrunitunit9', 'Vexrunitcost9', 'Vexrunitunit10', 'Vexrunitcost10', 'Vexraprvcode', 'Vexrminbuyqty', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['apvevendid', 'vexrvenditemnbr', 'inititemnbr', 'vexrpoordercode', 'vexroption1', 'intbuompur', 'vexrcaseqty', 'vexrprtkitdet', 'vexrlistprice', 'vexrunitcost', 'vexrforeigncost', 'vexrcostlastdate', 'vexrunitunit1', 'vexrunitcost1', 'vexrunitunit2', 'vexrunitcost2', 'vexrunitunit3', 'vexrunitcost3', 'vexrunitunit4', 'vexrunitcost4', 'vexrunitunit5', 'vexrunitcost5', 'vexrunitunit6', 'vexrunitcost6', 'vexrunitunit7', 'vexrunitcost7', 'vexrunitunit8', 'vexrunitcost8', 'vexrunitunit9', 'vexrunitcost9', 'vexrunitunit10', 'vexrunitcost10', 'vexraprvcode', 'vexrminbuyqty', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ItemXrefVendorTableMap::COL_APVEVENDID, ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR, ItemXrefVendorTableMap::COL_INITITEMNBR, ItemXrefVendorTableMap::COL_VEXRPOORDERCODE, ItemXrefVendorTableMap::COL_VEXROPTION1, ItemXrefVendorTableMap::COL_INTBUOMPUR, ItemXrefVendorTableMap::COL_VEXRCASEQTY, ItemXrefVendorTableMap::COL_VEXRPRTKITDET, ItemXrefVendorTableMap::COL_VEXRLISTPRICE, ItemXrefVendorTableMap::COL_VEXRUNITCOST, ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST, ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE, ItemXrefVendorTableMap::COL_VEXRUNITUNIT1, ItemXrefVendorTableMap::COL_VEXRUNITCOST1, ItemXrefVendorTableMap::COL_VEXRUNITUNIT2, ItemXrefVendorTableMap::COL_VEXRUNITCOST2, ItemXrefVendorTableMap::COL_VEXRUNITUNIT3, ItemXrefVendorTableMap::COL_VEXRUNITCOST3, ItemXrefVendorTableMap::COL_VEXRUNITUNIT4, ItemXrefVendorTableMap::COL_VEXRUNITCOST4, ItemXrefVendorTableMap::COL_VEXRUNITUNIT5, ItemXrefVendorTableMap::COL_VEXRUNITCOST5, ItemXrefVendorTableMap::COL_VEXRUNITUNIT6, ItemXrefVendorTableMap::COL_VEXRUNITCOST6, ItemXrefVendorTableMap::COL_VEXRUNITUNIT7, ItemXrefVendorTableMap::COL_VEXRUNITCOST7, ItemXrefVendorTableMap::COL_VEXRUNITUNIT8, ItemXrefVendorTableMap::COL_VEXRUNITCOST8, ItemXrefVendorTableMap::COL_VEXRUNITUNIT9, ItemXrefVendorTableMap::COL_VEXRUNITCOST9, ItemXrefVendorTableMap::COL_VEXRUNITUNIT10, ItemXrefVendorTableMap::COL_VEXRUNITCOST10, ItemXrefVendorTableMap::COL_VEXRAPRVCODE, ItemXrefVendorTableMap::COL_VEXRMINBUYQTY, ItemXrefVendorTableMap::COL_DATEUPDTD, ItemXrefVendorTableMap::COL_TIMEUPDTD, ItemXrefVendorTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ApveVendId', 'VexrVendItemNbr', 'InitItemNbr', 'VexrPoOrderCode', 'VexrOption1', 'IntbUomPur', 'VexrCaseQty', 'VexrPrtKitDet', 'VexrListPrice', 'VexrUnitCost', 'VexrForeignCost', 'VexrCostLastDate', 'VexrUnitUnit1', 'VexrUnitCost1', 'VexrUnitUnit2', 'VexrUnitCost2', 'VexrUnitUnit3', 'VexrUnitCost3', 'VexrUnitUnit4', 'VexrUnitCost4', 'VexrUnitUnit5', 'VexrUnitCost5', 'VexrUnitUnit6', 'VexrUnitCost6', 'VexrUnitUnit7', 'VexrUnitCost7', 'VexrUnitUnit8', 'VexrUnitCost8', 'VexrUnitUnit9', 'VexrUnitCost9', 'VexrUnitUnit10', 'VexrUnitCost10', 'VexrAprvCode', 'VexrMinBuyQty', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, ]
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
        self::TYPE_PHPNAME       => ['Apvevendid' => 0, 'Vexrvenditemnbr' => 1, 'Inititemnbr' => 2, 'Vexrpoordercode' => 3, 'Vexroption1' => 4, 'Intbuompur' => 5, 'Vexrcaseqty' => 6, 'Vexrprtkitdet' => 7, 'Vexrlistprice' => 8, 'Vexrunitcost' => 9, 'Vexrforeigncost' => 10, 'Vexrcostlastdate' => 11, 'Vexrunitunit1' => 12, 'Vexrunitcost1' => 13, 'Vexrunitunit2' => 14, 'Vexrunitcost2' => 15, 'Vexrunitunit3' => 16, 'Vexrunitcost3' => 17, 'Vexrunitunit4' => 18, 'Vexrunitcost4' => 19, 'Vexrunitunit5' => 20, 'Vexrunitcost5' => 21, 'Vexrunitunit6' => 22, 'Vexrunitcost6' => 23, 'Vexrunitunit7' => 24, 'Vexrunitcost7' => 25, 'Vexrunitunit8' => 26, 'Vexrunitcost8' => 27, 'Vexrunitunit9' => 28, 'Vexrunitcost9' => 29, 'Vexrunitunit10' => 30, 'Vexrunitcost10' => 31, 'Vexraprvcode' => 32, 'Vexrminbuyqty' => 33, 'Dateupdtd' => 34, 'Timeupdtd' => 35, 'Dummy' => 36, ],
        self::TYPE_CAMELNAME     => ['apvevendid' => 0, 'vexrvenditemnbr' => 1, 'inititemnbr' => 2, 'vexrpoordercode' => 3, 'vexroption1' => 4, 'intbuompur' => 5, 'vexrcaseqty' => 6, 'vexrprtkitdet' => 7, 'vexrlistprice' => 8, 'vexrunitcost' => 9, 'vexrforeigncost' => 10, 'vexrcostlastdate' => 11, 'vexrunitunit1' => 12, 'vexrunitcost1' => 13, 'vexrunitunit2' => 14, 'vexrunitcost2' => 15, 'vexrunitunit3' => 16, 'vexrunitcost3' => 17, 'vexrunitunit4' => 18, 'vexrunitcost4' => 19, 'vexrunitunit5' => 20, 'vexrunitcost5' => 21, 'vexrunitunit6' => 22, 'vexrunitcost6' => 23, 'vexrunitunit7' => 24, 'vexrunitcost7' => 25, 'vexrunitunit8' => 26, 'vexrunitcost8' => 27, 'vexrunitunit9' => 28, 'vexrunitcost9' => 29, 'vexrunitunit10' => 30, 'vexrunitcost10' => 31, 'vexraprvcode' => 32, 'vexrminbuyqty' => 33, 'dateupdtd' => 34, 'timeupdtd' => 35, 'dummy' => 36, ],
        self::TYPE_COLNAME       => [ItemXrefVendorTableMap::COL_APVEVENDID => 0, ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR => 1, ItemXrefVendorTableMap::COL_INITITEMNBR => 2, ItemXrefVendorTableMap::COL_VEXRPOORDERCODE => 3, ItemXrefVendorTableMap::COL_VEXROPTION1 => 4, ItemXrefVendorTableMap::COL_INTBUOMPUR => 5, ItemXrefVendorTableMap::COL_VEXRCASEQTY => 6, ItemXrefVendorTableMap::COL_VEXRPRTKITDET => 7, ItemXrefVendorTableMap::COL_VEXRLISTPRICE => 8, ItemXrefVendorTableMap::COL_VEXRUNITCOST => 9, ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST => 10, ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE => 11, ItemXrefVendorTableMap::COL_VEXRUNITUNIT1 => 12, ItemXrefVendorTableMap::COL_VEXRUNITCOST1 => 13, ItemXrefVendorTableMap::COL_VEXRUNITUNIT2 => 14, ItemXrefVendorTableMap::COL_VEXRUNITCOST2 => 15, ItemXrefVendorTableMap::COL_VEXRUNITUNIT3 => 16, ItemXrefVendorTableMap::COL_VEXRUNITCOST3 => 17, ItemXrefVendorTableMap::COL_VEXRUNITUNIT4 => 18, ItemXrefVendorTableMap::COL_VEXRUNITCOST4 => 19, ItemXrefVendorTableMap::COL_VEXRUNITUNIT5 => 20, ItemXrefVendorTableMap::COL_VEXRUNITCOST5 => 21, ItemXrefVendorTableMap::COL_VEXRUNITUNIT6 => 22, ItemXrefVendorTableMap::COL_VEXRUNITCOST6 => 23, ItemXrefVendorTableMap::COL_VEXRUNITUNIT7 => 24, ItemXrefVendorTableMap::COL_VEXRUNITCOST7 => 25, ItemXrefVendorTableMap::COL_VEXRUNITUNIT8 => 26, ItemXrefVendorTableMap::COL_VEXRUNITCOST8 => 27, ItemXrefVendorTableMap::COL_VEXRUNITUNIT9 => 28, ItemXrefVendorTableMap::COL_VEXRUNITCOST9 => 29, ItemXrefVendorTableMap::COL_VEXRUNITUNIT10 => 30, ItemXrefVendorTableMap::COL_VEXRUNITCOST10 => 31, ItemXrefVendorTableMap::COL_VEXRAPRVCODE => 32, ItemXrefVendorTableMap::COL_VEXRMINBUYQTY => 33, ItemXrefVendorTableMap::COL_DATEUPDTD => 34, ItemXrefVendorTableMap::COL_TIMEUPDTD => 35, ItemXrefVendorTableMap::COL_DUMMY => 36, ],
        self::TYPE_FIELDNAME     => ['ApveVendId' => 0, 'VexrVendItemNbr' => 1, 'InitItemNbr' => 2, 'VexrPoOrderCode' => 3, 'VexrOption1' => 4, 'IntbUomPur' => 5, 'VexrCaseQty' => 6, 'VexrPrtKitDet' => 7, 'VexrListPrice' => 8, 'VexrUnitCost' => 9, 'VexrForeignCost' => 10, 'VexrCostLastDate' => 11, 'VexrUnitUnit1' => 12, 'VexrUnitCost1' => 13, 'VexrUnitUnit2' => 14, 'VexrUnitCost2' => 15, 'VexrUnitUnit3' => 16, 'VexrUnitCost3' => 17, 'VexrUnitUnit4' => 18, 'VexrUnitCost4' => 19, 'VexrUnitUnit5' => 20, 'VexrUnitCost5' => 21, 'VexrUnitUnit6' => 22, 'VexrUnitCost6' => 23, 'VexrUnitUnit7' => 24, 'VexrUnitCost7' => 25, 'VexrUnitUnit8' => 26, 'VexrUnitCost8' => 27, 'VexrUnitUnit9' => 28, 'VexrUnitCost9' => 29, 'VexrUnitUnit10' => 30, 'VexrUnitCost10' => 31, 'VexrAprvCode' => 32, 'VexrMinBuyQty' => 33, 'DateUpdtd' => 34, 'TimeUpdtd' => 35, 'dummy' => 36, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Apvevendid' => 'APVEVENDID',
        'ItemXrefVendor.Apvevendid' => 'APVEVENDID',
        'apvevendid' => 'APVEVENDID',
        'itemXrefVendor.apvevendid' => 'APVEVENDID',
        'ItemXrefVendorTableMap::COL_APVEVENDID' => 'APVEVENDID',
        'COL_APVEVENDID' => 'APVEVENDID',
        'ApveVendId' => 'APVEVENDID',
        'vend_item_xref.ApveVendId' => 'APVEVENDID',
        'Vexrvenditemnbr' => 'VEXRVENDITEMNBR',
        'ItemXrefVendor.Vexrvenditemnbr' => 'VEXRVENDITEMNBR',
        'vexrvenditemnbr' => 'VEXRVENDITEMNBR',
        'itemXrefVendor.vexrvenditemnbr' => 'VEXRVENDITEMNBR',
        'ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR' => 'VEXRVENDITEMNBR',
        'COL_VEXRVENDITEMNBR' => 'VEXRVENDITEMNBR',
        'VexrVendItemNbr' => 'VEXRVENDITEMNBR',
        'vend_item_xref.VexrVendItemNbr' => 'VEXRVENDITEMNBR',
        'Inititemnbr' => 'INITITEMNBR',
        'ItemXrefVendor.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'itemXrefVendor.inititemnbr' => 'INITITEMNBR',
        'ItemXrefVendorTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'vend_item_xref.InitItemNbr' => 'INITITEMNBR',
        'Vexrpoordercode' => 'VEXRPOORDERCODE',
        'ItemXrefVendor.Vexrpoordercode' => 'VEXRPOORDERCODE',
        'vexrpoordercode' => 'VEXRPOORDERCODE',
        'itemXrefVendor.vexrpoordercode' => 'VEXRPOORDERCODE',
        'ItemXrefVendorTableMap::COL_VEXRPOORDERCODE' => 'VEXRPOORDERCODE',
        'COL_VEXRPOORDERCODE' => 'VEXRPOORDERCODE',
        'VexrPoOrderCode' => 'VEXRPOORDERCODE',
        'vend_item_xref.VexrPoOrderCode' => 'VEXRPOORDERCODE',
        'Vexroption1' => 'VEXROPTION1',
        'ItemXrefVendor.Vexroption1' => 'VEXROPTION1',
        'vexroption1' => 'VEXROPTION1',
        'itemXrefVendor.vexroption1' => 'VEXROPTION1',
        'ItemXrefVendorTableMap::COL_VEXROPTION1' => 'VEXROPTION1',
        'COL_VEXROPTION1' => 'VEXROPTION1',
        'VexrOption1' => 'VEXROPTION1',
        'vend_item_xref.VexrOption1' => 'VEXROPTION1',
        'Intbuompur' => 'INTBUOMPUR',
        'ItemXrefVendor.Intbuompur' => 'INTBUOMPUR',
        'intbuompur' => 'INTBUOMPUR',
        'itemXrefVendor.intbuompur' => 'INTBUOMPUR',
        'ItemXrefVendorTableMap::COL_INTBUOMPUR' => 'INTBUOMPUR',
        'COL_INTBUOMPUR' => 'INTBUOMPUR',
        'IntbUomPur' => 'INTBUOMPUR',
        'vend_item_xref.IntbUomPur' => 'INTBUOMPUR',
        'Vexrcaseqty' => 'VEXRCASEQTY',
        'ItemXrefVendor.Vexrcaseqty' => 'VEXRCASEQTY',
        'vexrcaseqty' => 'VEXRCASEQTY',
        'itemXrefVendor.vexrcaseqty' => 'VEXRCASEQTY',
        'ItemXrefVendorTableMap::COL_VEXRCASEQTY' => 'VEXRCASEQTY',
        'COL_VEXRCASEQTY' => 'VEXRCASEQTY',
        'VexrCaseQty' => 'VEXRCASEQTY',
        'vend_item_xref.VexrCaseQty' => 'VEXRCASEQTY',
        'Vexrprtkitdet' => 'VEXRPRTKITDET',
        'ItemXrefVendor.Vexrprtkitdet' => 'VEXRPRTKITDET',
        'vexrprtkitdet' => 'VEXRPRTKITDET',
        'itemXrefVendor.vexrprtkitdet' => 'VEXRPRTKITDET',
        'ItemXrefVendorTableMap::COL_VEXRPRTKITDET' => 'VEXRPRTKITDET',
        'COL_VEXRPRTKITDET' => 'VEXRPRTKITDET',
        'VexrPrtKitDet' => 'VEXRPRTKITDET',
        'vend_item_xref.VexrPrtKitDet' => 'VEXRPRTKITDET',
        'Vexrlistprice' => 'VEXRLISTPRICE',
        'ItemXrefVendor.Vexrlistprice' => 'VEXRLISTPRICE',
        'vexrlistprice' => 'VEXRLISTPRICE',
        'itemXrefVendor.vexrlistprice' => 'VEXRLISTPRICE',
        'ItemXrefVendorTableMap::COL_VEXRLISTPRICE' => 'VEXRLISTPRICE',
        'COL_VEXRLISTPRICE' => 'VEXRLISTPRICE',
        'VexrListPrice' => 'VEXRLISTPRICE',
        'vend_item_xref.VexrListPrice' => 'VEXRLISTPRICE',
        'Vexrunitcost' => 'VEXRUNITCOST',
        'ItemXrefVendor.Vexrunitcost' => 'VEXRUNITCOST',
        'vexrunitcost' => 'VEXRUNITCOST',
        'itemXrefVendor.vexrunitcost' => 'VEXRUNITCOST',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST' => 'VEXRUNITCOST',
        'COL_VEXRUNITCOST' => 'VEXRUNITCOST',
        'VexrUnitCost' => 'VEXRUNITCOST',
        'vend_item_xref.VexrUnitCost' => 'VEXRUNITCOST',
        'Vexrforeigncost' => 'VEXRFOREIGNCOST',
        'ItemXrefVendor.Vexrforeigncost' => 'VEXRFOREIGNCOST',
        'vexrforeigncost' => 'VEXRFOREIGNCOST',
        'itemXrefVendor.vexrforeigncost' => 'VEXRFOREIGNCOST',
        'ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST' => 'VEXRFOREIGNCOST',
        'COL_VEXRFOREIGNCOST' => 'VEXRFOREIGNCOST',
        'VexrForeignCost' => 'VEXRFOREIGNCOST',
        'vend_item_xref.VexrForeignCost' => 'VEXRFOREIGNCOST',
        'Vexrcostlastdate' => 'VEXRCOSTLASTDATE',
        'ItemXrefVendor.Vexrcostlastdate' => 'VEXRCOSTLASTDATE',
        'vexrcostlastdate' => 'VEXRCOSTLASTDATE',
        'itemXrefVendor.vexrcostlastdate' => 'VEXRCOSTLASTDATE',
        'ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE' => 'VEXRCOSTLASTDATE',
        'COL_VEXRCOSTLASTDATE' => 'VEXRCOSTLASTDATE',
        'VexrCostLastDate' => 'VEXRCOSTLASTDATE',
        'vend_item_xref.VexrCostLastDate' => 'VEXRCOSTLASTDATE',
        'Vexrunitunit1' => 'VEXRUNITUNIT1',
        'ItemXrefVendor.Vexrunitunit1' => 'VEXRUNITUNIT1',
        'vexrunitunit1' => 'VEXRUNITUNIT1',
        'itemXrefVendor.vexrunitunit1' => 'VEXRUNITUNIT1',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT1' => 'VEXRUNITUNIT1',
        'COL_VEXRUNITUNIT1' => 'VEXRUNITUNIT1',
        'VexrUnitUnit1' => 'VEXRUNITUNIT1',
        'vend_item_xref.VexrUnitUnit1' => 'VEXRUNITUNIT1',
        'Vexrunitcost1' => 'VEXRUNITCOST1',
        'ItemXrefVendor.Vexrunitcost1' => 'VEXRUNITCOST1',
        'vexrunitcost1' => 'VEXRUNITCOST1',
        'itemXrefVendor.vexrunitcost1' => 'VEXRUNITCOST1',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST1' => 'VEXRUNITCOST1',
        'COL_VEXRUNITCOST1' => 'VEXRUNITCOST1',
        'VexrUnitCost1' => 'VEXRUNITCOST1',
        'vend_item_xref.VexrUnitCost1' => 'VEXRUNITCOST1',
        'Vexrunitunit2' => 'VEXRUNITUNIT2',
        'ItemXrefVendor.Vexrunitunit2' => 'VEXRUNITUNIT2',
        'vexrunitunit2' => 'VEXRUNITUNIT2',
        'itemXrefVendor.vexrunitunit2' => 'VEXRUNITUNIT2',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT2' => 'VEXRUNITUNIT2',
        'COL_VEXRUNITUNIT2' => 'VEXRUNITUNIT2',
        'VexrUnitUnit2' => 'VEXRUNITUNIT2',
        'vend_item_xref.VexrUnitUnit2' => 'VEXRUNITUNIT2',
        'Vexrunitcost2' => 'VEXRUNITCOST2',
        'ItemXrefVendor.Vexrunitcost2' => 'VEXRUNITCOST2',
        'vexrunitcost2' => 'VEXRUNITCOST2',
        'itemXrefVendor.vexrunitcost2' => 'VEXRUNITCOST2',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST2' => 'VEXRUNITCOST2',
        'COL_VEXRUNITCOST2' => 'VEXRUNITCOST2',
        'VexrUnitCost2' => 'VEXRUNITCOST2',
        'vend_item_xref.VexrUnitCost2' => 'VEXRUNITCOST2',
        'Vexrunitunit3' => 'VEXRUNITUNIT3',
        'ItemXrefVendor.Vexrunitunit3' => 'VEXRUNITUNIT3',
        'vexrunitunit3' => 'VEXRUNITUNIT3',
        'itemXrefVendor.vexrunitunit3' => 'VEXRUNITUNIT3',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT3' => 'VEXRUNITUNIT3',
        'COL_VEXRUNITUNIT3' => 'VEXRUNITUNIT3',
        'VexrUnitUnit3' => 'VEXRUNITUNIT3',
        'vend_item_xref.VexrUnitUnit3' => 'VEXRUNITUNIT3',
        'Vexrunitcost3' => 'VEXRUNITCOST3',
        'ItemXrefVendor.Vexrunitcost3' => 'VEXRUNITCOST3',
        'vexrunitcost3' => 'VEXRUNITCOST3',
        'itemXrefVendor.vexrunitcost3' => 'VEXRUNITCOST3',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST3' => 'VEXRUNITCOST3',
        'COL_VEXRUNITCOST3' => 'VEXRUNITCOST3',
        'VexrUnitCost3' => 'VEXRUNITCOST3',
        'vend_item_xref.VexrUnitCost3' => 'VEXRUNITCOST3',
        'Vexrunitunit4' => 'VEXRUNITUNIT4',
        'ItemXrefVendor.Vexrunitunit4' => 'VEXRUNITUNIT4',
        'vexrunitunit4' => 'VEXRUNITUNIT4',
        'itemXrefVendor.vexrunitunit4' => 'VEXRUNITUNIT4',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT4' => 'VEXRUNITUNIT4',
        'COL_VEXRUNITUNIT4' => 'VEXRUNITUNIT4',
        'VexrUnitUnit4' => 'VEXRUNITUNIT4',
        'vend_item_xref.VexrUnitUnit4' => 'VEXRUNITUNIT4',
        'Vexrunitcost4' => 'VEXRUNITCOST4',
        'ItemXrefVendor.Vexrunitcost4' => 'VEXRUNITCOST4',
        'vexrunitcost4' => 'VEXRUNITCOST4',
        'itemXrefVendor.vexrunitcost4' => 'VEXRUNITCOST4',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST4' => 'VEXRUNITCOST4',
        'COL_VEXRUNITCOST4' => 'VEXRUNITCOST4',
        'VexrUnitCost4' => 'VEXRUNITCOST4',
        'vend_item_xref.VexrUnitCost4' => 'VEXRUNITCOST4',
        'Vexrunitunit5' => 'VEXRUNITUNIT5',
        'ItemXrefVendor.Vexrunitunit5' => 'VEXRUNITUNIT5',
        'vexrunitunit5' => 'VEXRUNITUNIT5',
        'itemXrefVendor.vexrunitunit5' => 'VEXRUNITUNIT5',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT5' => 'VEXRUNITUNIT5',
        'COL_VEXRUNITUNIT5' => 'VEXRUNITUNIT5',
        'VexrUnitUnit5' => 'VEXRUNITUNIT5',
        'vend_item_xref.VexrUnitUnit5' => 'VEXRUNITUNIT5',
        'Vexrunitcost5' => 'VEXRUNITCOST5',
        'ItemXrefVendor.Vexrunitcost5' => 'VEXRUNITCOST5',
        'vexrunitcost5' => 'VEXRUNITCOST5',
        'itemXrefVendor.vexrunitcost5' => 'VEXRUNITCOST5',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST5' => 'VEXRUNITCOST5',
        'COL_VEXRUNITCOST5' => 'VEXRUNITCOST5',
        'VexrUnitCost5' => 'VEXRUNITCOST5',
        'vend_item_xref.VexrUnitCost5' => 'VEXRUNITCOST5',
        'Vexrunitunit6' => 'VEXRUNITUNIT6',
        'ItemXrefVendor.Vexrunitunit6' => 'VEXRUNITUNIT6',
        'vexrunitunit6' => 'VEXRUNITUNIT6',
        'itemXrefVendor.vexrunitunit6' => 'VEXRUNITUNIT6',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT6' => 'VEXRUNITUNIT6',
        'COL_VEXRUNITUNIT6' => 'VEXRUNITUNIT6',
        'VexrUnitUnit6' => 'VEXRUNITUNIT6',
        'vend_item_xref.VexrUnitUnit6' => 'VEXRUNITUNIT6',
        'Vexrunitcost6' => 'VEXRUNITCOST6',
        'ItemXrefVendor.Vexrunitcost6' => 'VEXRUNITCOST6',
        'vexrunitcost6' => 'VEXRUNITCOST6',
        'itemXrefVendor.vexrunitcost6' => 'VEXRUNITCOST6',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST6' => 'VEXRUNITCOST6',
        'COL_VEXRUNITCOST6' => 'VEXRUNITCOST6',
        'VexrUnitCost6' => 'VEXRUNITCOST6',
        'vend_item_xref.VexrUnitCost6' => 'VEXRUNITCOST6',
        'Vexrunitunit7' => 'VEXRUNITUNIT7',
        'ItemXrefVendor.Vexrunitunit7' => 'VEXRUNITUNIT7',
        'vexrunitunit7' => 'VEXRUNITUNIT7',
        'itemXrefVendor.vexrunitunit7' => 'VEXRUNITUNIT7',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT7' => 'VEXRUNITUNIT7',
        'COL_VEXRUNITUNIT7' => 'VEXRUNITUNIT7',
        'VexrUnitUnit7' => 'VEXRUNITUNIT7',
        'vend_item_xref.VexrUnitUnit7' => 'VEXRUNITUNIT7',
        'Vexrunitcost7' => 'VEXRUNITCOST7',
        'ItemXrefVendor.Vexrunitcost7' => 'VEXRUNITCOST7',
        'vexrunitcost7' => 'VEXRUNITCOST7',
        'itemXrefVendor.vexrunitcost7' => 'VEXRUNITCOST7',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST7' => 'VEXRUNITCOST7',
        'COL_VEXRUNITCOST7' => 'VEXRUNITCOST7',
        'VexrUnitCost7' => 'VEXRUNITCOST7',
        'vend_item_xref.VexrUnitCost7' => 'VEXRUNITCOST7',
        'Vexrunitunit8' => 'VEXRUNITUNIT8',
        'ItemXrefVendor.Vexrunitunit8' => 'VEXRUNITUNIT8',
        'vexrunitunit8' => 'VEXRUNITUNIT8',
        'itemXrefVendor.vexrunitunit8' => 'VEXRUNITUNIT8',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT8' => 'VEXRUNITUNIT8',
        'COL_VEXRUNITUNIT8' => 'VEXRUNITUNIT8',
        'VexrUnitUnit8' => 'VEXRUNITUNIT8',
        'vend_item_xref.VexrUnitUnit8' => 'VEXRUNITUNIT8',
        'Vexrunitcost8' => 'VEXRUNITCOST8',
        'ItemXrefVendor.Vexrunitcost8' => 'VEXRUNITCOST8',
        'vexrunitcost8' => 'VEXRUNITCOST8',
        'itemXrefVendor.vexrunitcost8' => 'VEXRUNITCOST8',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST8' => 'VEXRUNITCOST8',
        'COL_VEXRUNITCOST8' => 'VEXRUNITCOST8',
        'VexrUnitCost8' => 'VEXRUNITCOST8',
        'vend_item_xref.VexrUnitCost8' => 'VEXRUNITCOST8',
        'Vexrunitunit9' => 'VEXRUNITUNIT9',
        'ItemXrefVendor.Vexrunitunit9' => 'VEXRUNITUNIT9',
        'vexrunitunit9' => 'VEXRUNITUNIT9',
        'itemXrefVendor.vexrunitunit9' => 'VEXRUNITUNIT9',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT9' => 'VEXRUNITUNIT9',
        'COL_VEXRUNITUNIT9' => 'VEXRUNITUNIT9',
        'VexrUnitUnit9' => 'VEXRUNITUNIT9',
        'vend_item_xref.VexrUnitUnit9' => 'VEXRUNITUNIT9',
        'Vexrunitcost9' => 'VEXRUNITCOST9',
        'ItemXrefVendor.Vexrunitcost9' => 'VEXRUNITCOST9',
        'vexrunitcost9' => 'VEXRUNITCOST9',
        'itemXrefVendor.vexrunitcost9' => 'VEXRUNITCOST9',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST9' => 'VEXRUNITCOST9',
        'COL_VEXRUNITCOST9' => 'VEXRUNITCOST9',
        'VexrUnitCost9' => 'VEXRUNITCOST9',
        'vend_item_xref.VexrUnitCost9' => 'VEXRUNITCOST9',
        'Vexrunitunit10' => 'VEXRUNITUNIT10',
        'ItemXrefVendor.Vexrunitunit10' => 'VEXRUNITUNIT10',
        'vexrunitunit10' => 'VEXRUNITUNIT10',
        'itemXrefVendor.vexrunitunit10' => 'VEXRUNITUNIT10',
        'ItemXrefVendorTableMap::COL_VEXRUNITUNIT10' => 'VEXRUNITUNIT10',
        'COL_VEXRUNITUNIT10' => 'VEXRUNITUNIT10',
        'VexrUnitUnit10' => 'VEXRUNITUNIT10',
        'vend_item_xref.VexrUnitUnit10' => 'VEXRUNITUNIT10',
        'Vexrunitcost10' => 'VEXRUNITCOST10',
        'ItemXrefVendor.Vexrunitcost10' => 'VEXRUNITCOST10',
        'vexrunitcost10' => 'VEXRUNITCOST10',
        'itemXrefVendor.vexrunitcost10' => 'VEXRUNITCOST10',
        'ItemXrefVendorTableMap::COL_VEXRUNITCOST10' => 'VEXRUNITCOST10',
        'COL_VEXRUNITCOST10' => 'VEXRUNITCOST10',
        'VexrUnitCost10' => 'VEXRUNITCOST10',
        'vend_item_xref.VexrUnitCost10' => 'VEXRUNITCOST10',
        'Vexraprvcode' => 'VEXRAPRVCODE',
        'ItemXrefVendor.Vexraprvcode' => 'VEXRAPRVCODE',
        'vexraprvcode' => 'VEXRAPRVCODE',
        'itemXrefVendor.vexraprvcode' => 'VEXRAPRVCODE',
        'ItemXrefVendorTableMap::COL_VEXRAPRVCODE' => 'VEXRAPRVCODE',
        'COL_VEXRAPRVCODE' => 'VEXRAPRVCODE',
        'VexrAprvCode' => 'VEXRAPRVCODE',
        'vend_item_xref.VexrAprvCode' => 'VEXRAPRVCODE',
        'Vexrminbuyqty' => 'VEXRMINBUYQTY',
        'ItemXrefVendor.Vexrminbuyqty' => 'VEXRMINBUYQTY',
        'vexrminbuyqty' => 'VEXRMINBUYQTY',
        'itemXrefVendor.vexrminbuyqty' => 'VEXRMINBUYQTY',
        'ItemXrefVendorTableMap::COL_VEXRMINBUYQTY' => 'VEXRMINBUYQTY',
        'COL_VEXRMINBUYQTY' => 'VEXRMINBUYQTY',
        'VexrMinBuyQty' => 'VEXRMINBUYQTY',
        'vend_item_xref.VexrMinBuyQty' => 'VEXRMINBUYQTY',
        'Dateupdtd' => 'DATEUPDTD',
        'ItemXrefVendor.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'itemXrefVendor.dateupdtd' => 'DATEUPDTD',
        'ItemXrefVendorTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'vend_item_xref.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ItemXrefVendor.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'itemXrefVendor.timeupdtd' => 'TIMEUPDTD',
        'ItemXrefVendorTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'vend_item_xref.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ItemXrefVendor.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'itemXrefVendor.dummy' => 'DUMMY',
        'ItemXrefVendorTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'vend_item_xref.dummy' => 'DUMMY',
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
        $this->setName('vend_item_xref');
        $this->setPhpName('ItemXrefVendor');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemXrefVendor');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ApveVendId', 'Apvevendid', 'VARCHAR' , 'ap_vend_mast', 'ApveVendId', true, 6, '');
        $this->addPrimaryKey('VexrVendItemNbr', 'Vexrvenditemnbr', 'VARCHAR', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('VexrPoOrderCode', 'Vexrpoordercode', 'CHAR', true, null, '');
        $this->addColumn('VexrOption1', 'Vexroption1', 'VARCHAR', true, 8, '');
        $this->addForeignKey('IntbUomPur', 'Intbuompur', 'VARCHAR', 'inv_uom_pur', 'IntbUomPur', true, 4, '');
        $this->addColumn('VexrCaseQty', 'Vexrcaseqty', 'DECIMAL', true, 20, 1.00);
        $this->addColumn('VexrPrtKitDet', 'Vexrprtkitdet', 'CHAR', true, null, 'N');
        $this->addColumn('VexrListPrice', 'Vexrlistprice', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitCost', 'Vexrunitcost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrForeignCost', 'Vexrforeigncost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrCostLastDate', 'Vexrcostlastdate', 'CHAR', true, 8, '');
        $this->addColumn('VexrUnitUnit1', 'Vexrunitunit1', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost1', 'Vexrunitcost1', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit2', 'Vexrunitunit2', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost2', 'Vexrunitcost2', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit3', 'Vexrunitunit3', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost3', 'Vexrunitcost3', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit4', 'Vexrunitunit4', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost4', 'Vexrunitcost4', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit5', 'Vexrunitunit5', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost5', 'Vexrunitcost5', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit6', 'Vexrunitunit6', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost6', 'Vexrunitcost6', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit7', 'Vexrunitunit7', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost7', 'Vexrunitcost7', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit8', 'Vexrunitunit8', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost8', 'Vexrunitcost8', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit9', 'Vexrunitunit9', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost9', 'Vexrunitcost9', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrUnitUnit10', 'Vexrunitunit10', 'INTEGER', true, 9, 0);
        $this->addColumn('VexrUnitCost10', 'Vexrunitcost10', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('VexrAprvCode', 'Vexraprvcode', 'CHAR', true, null, 'A');
        $this->addColumn('VexrMinBuyQty', 'Vexrminbuyqty', 'INTEGER', true, 8, 0);
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
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('UnitofMeasurePurchase', '\\UnitofMeasurePurchase', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbUomPur',
    1 => ':IntbUomPur',
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
     * @param \ItemXrefVendor $obj A \ItemXrefVendor object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(ItemXrefVendor $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getApvevendid() || is_scalar($obj->getApvevendid()) || is_callable([$obj->getApvevendid(), '__toString']) ? (string) $obj->getApvevendid() : $obj->getApvevendid()), (null === $obj->getVexrvenditemnbr() || is_scalar($obj->getVexrvenditemnbr()) || is_callable([$obj->getVexrvenditemnbr(), '__toString']) ? (string) $obj->getVexrvenditemnbr() : $obj->getVexrvenditemnbr()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr())]);
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
     * @param mixed $value A \ItemXrefVendor object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemXrefVendor) {
                $key = serialize([(null === $value->getApvevendid() || is_scalar($value->getApvevendid()) || is_callable([$value->getApvevendid(), '__toString']) ? (string) $value->getApvevendid() : $value->getApvevendid()), (null === $value->getVexrvenditemnbr() || is_scalar($value->getVexrvenditemnbr()) || is_callable([$value->getVexrvenditemnbr(), '__toString']) ? (string) $value->getVexrvenditemnbr() : $value->getVexrvenditemnbr()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemXrefVendor object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Vexrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Vexrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Vexrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Vexrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Vexrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Vexrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Vexrvenditemnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItemXrefVendorTableMap::CLASS_DEFAULT : ItemXrefVendorTableMap::OM_CLASS;
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
     * @return array (ItemXrefVendor object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ItemXrefVendorTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemXrefVendorTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemXrefVendorTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemXrefVendorTableMap::OM_CLASS;
            /** @var ItemXrefVendor $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemXrefVendorTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemXrefVendorTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemXrefVendorTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemXrefVendor $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemXrefVendorTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRPOORDERCODE);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXROPTION1);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_INTBUOMPUR);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRCASEQTY);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRPRTKITDET);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRLISTPRICE);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT1);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST1);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT2);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST2);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT3);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST3);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT4);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST4);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT5);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST5);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT6);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST6);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT7);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST7);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT8);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST8);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT9);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST9);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT10);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST10);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRAPRVCODE);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_VEXRMINBUYQTY);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemXrefVendorTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.VexrVendItemNbr');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.VexrPoOrderCode');
            $criteria->addSelectColumn($alias . '.VexrOption1');
            $criteria->addSelectColumn($alias . '.IntbUomPur');
            $criteria->addSelectColumn($alias . '.VexrCaseQty');
            $criteria->addSelectColumn($alias . '.VexrPrtKitDet');
            $criteria->addSelectColumn($alias . '.VexrListPrice');
            $criteria->addSelectColumn($alias . '.VexrUnitCost');
            $criteria->addSelectColumn($alias . '.VexrForeignCost');
            $criteria->addSelectColumn($alias . '.VexrCostLastDate');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit1');
            $criteria->addSelectColumn($alias . '.VexrUnitCost1');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit2');
            $criteria->addSelectColumn($alias . '.VexrUnitCost2');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit3');
            $criteria->addSelectColumn($alias . '.VexrUnitCost3');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit4');
            $criteria->addSelectColumn($alias . '.VexrUnitCost4');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit5');
            $criteria->addSelectColumn($alias . '.VexrUnitCost5');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit6');
            $criteria->addSelectColumn($alias . '.VexrUnitCost6');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit7');
            $criteria->addSelectColumn($alias . '.VexrUnitCost7');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit8');
            $criteria->addSelectColumn($alias . '.VexrUnitCost8');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit9');
            $criteria->addSelectColumn($alias . '.VexrUnitCost9');
            $criteria->addSelectColumn($alias . '.VexrUnitUnit10');
            $criteria->addSelectColumn($alias . '.VexrUnitCost10');
            $criteria->addSelectColumn($alias . '.VexrAprvCode');
            $criteria->addSelectColumn($alias . '.VexrMinBuyQty');
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
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_APVEVENDID);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRPOORDERCODE);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXROPTION1);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_INTBUOMPUR);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRCASEQTY);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRPRTKITDET);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRLISTPRICE);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT1);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST1);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT2);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST2);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT3);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST3);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT4);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST4);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT5);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST5);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT6);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST6);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT7);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST7);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT8);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST8);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT9);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST9);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITUNIT10);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRUNITCOST10);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRAPRVCODE);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_VEXRMINBUYQTY);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ItemXrefVendorTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ApveVendId');
            $criteria->removeSelectColumn($alias . '.VexrVendItemNbr');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.VexrPoOrderCode');
            $criteria->removeSelectColumn($alias . '.VexrOption1');
            $criteria->removeSelectColumn($alias . '.IntbUomPur');
            $criteria->removeSelectColumn($alias . '.VexrCaseQty');
            $criteria->removeSelectColumn($alias . '.VexrPrtKitDet');
            $criteria->removeSelectColumn($alias . '.VexrListPrice');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost');
            $criteria->removeSelectColumn($alias . '.VexrForeignCost');
            $criteria->removeSelectColumn($alias . '.VexrCostLastDate');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit1');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost1');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit2');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost2');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit3');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost3');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit4');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost4');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit5');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost5');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit6');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost6');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit7');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost7');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit8');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost8');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit9');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost9');
            $criteria->removeSelectColumn($alias . '.VexrUnitUnit10');
            $criteria->removeSelectColumn($alias . '.VexrUnitCost10');
            $criteria->removeSelectColumn($alias . '.VexrAprvCode');
            $criteria->removeSelectColumn($alias . '.VexrMinBuyQty');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemXrefVendorTableMap::DATABASE_NAME)->getTable(ItemXrefVendorTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ItemXrefVendor or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ItemXrefVendor object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemXrefVendor) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemXrefVendorTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemXrefVendorTableMap::COL_APVEVENDID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefVendorTableMap::COL_INITITEMNBR, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemXrefVendorQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemXrefVendorTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemXrefVendorTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the vend_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ItemXrefVendorQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemXrefVendor or Criteria object.
     *
     * @param mixed $criteria Criteria or ItemXrefVendor object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemXrefVendor object
        }


        // Set the correct dbName
        $query = ItemXrefVendorQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
