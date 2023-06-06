<?php

namespace Map;

use \ItemMasterItem;
use \ItemMasterItemQuery;
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
 * This class defines the structure of the 'inv_item_mast' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemMasterItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemMasterItemTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_item_mast';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemMasterItem';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemMasterItem';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 65;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 65;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_item_mast.InitItemNbr';

    /**
     * the column name for the InitDesc1 field
     */
    const COL_INITDESC1 = 'inv_item_mast.InitDesc1';

    /**
     * the column name for the InitDesc2 field
     */
    const COL_INITDESC2 = 'inv_item_mast.InitDesc2';

    /**
     * the column name for the IntbGrup field
     */
    const COL_INTBGRUP = 'inv_item_mast.IntbGrup';

    /**
     * the column name for the InitFormatCode field
     */
    const COL_INITFORMATCODE = 'inv_item_mast.InitFormatCode';

    /**
     * the column name for the InitSplit field
     */
    const COL_INITSPLIT = 'inv_item_mast.InitSplit';

    /**
     * the column name for the InitSherDateCd field
     */
    const COL_INITSHERDATECD = 'inv_item_mast.InitSherDateCd';

    /**
     * the column name for the InitCoreYN field
     */
    const COL_INITCOREYN = 'inv_item_mast.InitCoreYN';

    /**
     * the column name for the IntbUserCode1 field
     */
    const COL_INTBUSERCODE1 = 'inv_item_mast.IntbUserCode1';

    /**
     * the column name for the IntbUserCode2 field
     */
    const COL_INTBUSERCODE2 = 'inv_item_mast.IntbUserCode2';

    /**
     * the column name for the InitType field
     */
    const COL_INITTYPE = 'inv_item_mast.InitType';

    /**
     * the column name for the InitTax field
     */
    const COL_INITTAX = 'inv_item_mast.InitTax';

    /**
     * the column name for the InitRtlPric field
     */
    const COL_INITRTLPRIC = 'inv_item_mast.InitRtlPric';

    /**
     * the column name for the InitStatChgd field
     */
    const COL_INITSTATCHGD = 'inv_item_mast.InitStatChgd';

    /**
     * the column name for the InitSpecItemCd field
     */
    const COL_INITSPECITEMCD = 'inv_item_mast.InitSpecItemCd';

    /**
     * the column name for the InitWarrDays field
     */
    const COL_INITWARRDAYS = 'inv_item_mast.InitWarrDays';

    /**
     * the column name for the IntbUomSale field
     */
    const COL_INTBUOMSALE = 'inv_item_mast.IntbUomSale';

    /**
     * the column name for the InitWght field
     */
    const COL_INITWGHT = 'inv_item_mast.InitWght';

    /**
     * the column name for the InitBord field
     */
    const COL_INITBORD = 'inv_item_mast.InitBord';

    /**
     * the column name for the InitBaseItemId field
     */
    const COL_INITBASEITEMID = 'inv_item_mast.InitBaseItemId';

    /**
     * the column name for the InitSpecificCust field
     */
    const COL_INITSPECIFICCUST = 'inv_item_mast.InitSpecificCust';

    /**
     * the column name for the InitGiveDisc field
     */
    const COL_INITGIVEDISC = 'inv_item_mast.InitGiveDisc';

    /**
     * the column name for the InitAsstCode field
     */
    const COL_INITASSTCODE = 'inv_item_mast.InitAsstCode';

    /**
     * the column name for the InitPricLastDate field
     */
    const COL_INITPRICLASTDATE = 'inv_item_mast.InitPricLastDate';

    /**
     * the column name for the IntbUomPur field
     */
    const COL_INTBUOMPUR = 'inv_item_mast.IntbUomPur';

    /**
     * the column name for the InitStanCost field
     */
    const COL_INITSTANCOST = 'inv_item_mast.InitStanCost';

    /**
     * the column name for the InitStanCostBase field
     */
    const COL_INITSTANCOSTBASE = 'inv_item_mast.InitStanCostBase';

    /**
     * the column name for the InitStanCostLastDate field
     */
    const COL_INITSTANCOSTLASTDATE = 'inv_item_mast.InitStanCostLastDate';

    /**
     * the column name for the InitMinMarg field
     */
    const COL_INITMINMARG = 'inv_item_mast.InitMinMarg';

    /**
     * the column name for the InitVendId field
     */
    const COL_INITVENDID = 'inv_item_mast.InitVendId';

    /**
     * the column name for the InitInspect field
     */
    const COL_INITINSPECT = 'inv_item_mast.InitInspect';

    /**
     * the column name for the InitStockCode field
     */
    const COL_INITSTOCKCODE = 'inv_item_mast.InitStockCode';

    /**
     * the column name for the InitSuprItemNbr field
     */
    const COL_INITSUPRITEMNBR = 'inv_item_mast.InitSuprItemNbr';

    /**
     * the column name for the InitVendShipFrom field
     */
    const COL_INITVENDSHIPFROM = 'inv_item_mast.InitVendShipFrom';

    /**
     * the column name for the InitCntryOfOrigin field
     */
    const COL_INITCNTRYOFORIGIN = 'inv_item_mast.InitCntryOfOrigin';

    /**
     * the column name for the InitAsstQty field
     */
    const COL_INITASSTQTY = 'inv_item_mast.InitAsstQty';

    /**
     * the column name for the IntbTariffCode field
     */
    const COL_INTBTARIFFCODE = 'inv_item_mast.IntbTariffCode';

    /**
     * the column name for the InitPreference field
     */
    const COL_INITPREFERENCE = 'inv_item_mast.InitPreference';

    /**
     * the column name for the InitProducer field
     */
    const COL_INITPRODUCER = 'inv_item_mast.InitProducer';

    /**
     * the column name for the InitDocumentation field
     */
    const COL_INITDOCUMENTATION = 'inv_item_mast.InitDocumentation';

    /**
     * the column name for the InitPurchCrtnQty field
     */
    const COL_INITPURCHCRTNQTY = 'inv_item_mast.InitPurchCrtnQty';

    /**
     * the column name for the AptbBuyrCode field
     */
    const COL_APTBBUYRCODE = 'inv_item_mast.AptbBuyrCode';

    /**
     * the column name for the InitLastCost field
     */
    const COL_INITLASTCOST = 'inv_item_mast.InitLastCost';

    /**
     * the column name for the InitLiters field
     */
    const COL_INITLITERS = 'inv_item_mast.InitLiters';

    /**
     * the column name for the IntbMsdsCode field
     */
    const COL_INTBMSDSCODE = 'inv_item_mast.IntbMsdsCode';

    /**
     * the column name for the InitRequireFrt field
     */
    const COL_INITREQUIREFRT = 'inv_item_mast.InitRequireFrt';

    /**
     * the column name for the InitMfrtCode field
     */
    const COL_INITMFRTCODE = 'inv_item_mast.InitMfrtCode';

    /**
     * the column name for the InitInnerPackQty field
     */
    const COL_INITINNERPACKQTY = 'inv_item_mast.InitInnerPackQty';

    /**
     * the column name for the InitOuterPackQty field
     */
    const COL_INITOUTERPACKQTY = 'inv_item_mast.InitOuterPackQty';

    /**
     * the column name for the InitBaseStanCost field
     */
    const COL_INITBASESTANCOST = 'inv_item_mast.InitBaseStanCost';

    /**
     * the column name for the InitShipTareQty field
     */
    const COL_INITSHIPTAREQTY = 'inv_item_mast.InitShipTareQty';

    /**
     * the column name for the InitWgItem field
     */
    const COL_INITWGITEM = 'inv_item_mast.InitWgItem';

    /**
     * the column name for the IntbPricGrup field
     */
    const COL_INTBPRICGRUP = 'inv_item_mast.IntbPricGrup';

    /**
     * the column name for the IntbCommGrup field
     */
    const COL_INTBCOMMGRUP = 'inv_item_mast.IntbCommGrup';

    /**
     * the column name for the InitLastCostDate field
     */
    const COL_INITLASTCOSTDATE = 'inv_item_mast.InitLastCostDate';

    /**
     * the column name for the InitQtyPerCase field
     */
    const COL_INITQTYPERCASE = 'inv_item_mast.InitQtyPerCase';

    /**
     * the column name for the InitRevision field
     */
    const COL_INITREVISION = 'inv_item_mast.InitRevision';

    /**
     * the column name for the InitCommSaleQty field
     */
    const COL_INITCOMMSALEQTY = 'inv_item_mast.InitCommSaleQty';

    /**
     * the column name for the InitCubes field
     */
    const COL_INITCUBES = 'inv_item_mast.InitCubes';

    /**
     * the column name for the InitTimeFence field
     */
    const COL_INITTIMEFENCE = 'inv_item_mast.InitTimeFence';

    /**
     * the column name for the InitSrvcMinChrg field
     */
    const COL_INITSRVCMINCHRG = 'inv_item_mast.InitSrvcMinChrg';

    /**
     * the column name for the InitMinMargBase field
     */
    const COL_INITMINMARGBASE = 'inv_item_mast.InitMinMargBase';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_item_mast.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_item_mast.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_item_mast.dummy';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Initdesc1', 'Initdesc2', 'Intbgrup', 'Initformatcode', 'Initsplit', 'Initsherdatecd', 'Initcoreyn', 'Intbusercode1', 'Intbusercode2', 'Inittype', 'Inittax', 'Initrtlpric', 'Initstatchgd', 'Initspecitemcd', 'Initwarrdays', 'Intbuomsale', 'Initwght', 'Initbord', 'Initbaseitemid', 'Initspecificcust', 'Initgivedisc', 'Initasstcode', 'Initpriclastdate', 'Intbuompur', 'Initstancost', 'Initstancostbase', 'Initstancostlastdate', 'Initminmarg', 'Initvendid', 'Initinspect', 'Initstockcode', 'Initsupritemnbr', 'Initvendshipfrom', 'Initcntryoforigin', 'Initasstqty', 'Intbtariffcode', 'Initpreference', 'Initproducer', 'Initdocumentation', 'Initpurchcrtnqty', 'Aptbbuyrcode', 'Initlastcost', 'Initliters', 'Intbmsdscode', 'Initrequirefrt', 'Initmfrtcode', 'Initinnerpackqty', 'Initouterpackqty', 'Initbasestancost', 'Initshiptareqty', 'Initwgitem', 'Intbpricgrup', 'Intbcommgrup', 'Initlastcostdate', 'Initqtypercase', 'Initrevision', 'Initcommsaleqty', 'Initcubes', 'Inittimefence', 'Initsrvcminchrg', 'InitMinMargBase', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'initdesc1', 'initdesc2', 'intbgrup', 'initformatcode', 'initsplit', 'initsherdatecd', 'initcoreyn', 'intbusercode1', 'intbusercode2', 'inittype', 'inittax', 'initrtlpric', 'initstatchgd', 'initspecitemcd', 'initwarrdays', 'intbuomsale', 'initwght', 'initbord', 'initbaseitemid', 'initspecificcust', 'initgivedisc', 'initasstcode', 'initpriclastdate', 'intbuompur', 'initstancost', 'initstancostbase', 'initstancostlastdate', 'initminmarg', 'initvendid', 'initinspect', 'initstockcode', 'initsupritemnbr', 'initvendshipfrom', 'initcntryoforigin', 'initasstqty', 'intbtariffcode', 'initpreference', 'initproducer', 'initdocumentation', 'initpurchcrtnqty', 'aptbbuyrcode', 'initlastcost', 'initliters', 'intbmsdscode', 'initrequirefrt', 'initmfrtcode', 'initinnerpackqty', 'initouterpackqty', 'initbasestancost', 'initshiptareqty', 'initwgitem', 'intbpricgrup', 'intbcommgrup', 'initlastcostdate', 'initqtypercase', 'initrevision', 'initcommsaleqty', 'initcubes', 'inittimefence', 'initsrvcminchrg', 'initMinMargBase', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemMasterItemTableMap::COL_INITITEMNBR, ItemMasterItemTableMap::COL_INITDESC1, ItemMasterItemTableMap::COL_INITDESC2, ItemMasterItemTableMap::COL_INTBGRUP, ItemMasterItemTableMap::COL_INITFORMATCODE, ItemMasterItemTableMap::COL_INITSPLIT, ItemMasterItemTableMap::COL_INITSHERDATECD, ItemMasterItemTableMap::COL_INITCOREYN, ItemMasterItemTableMap::COL_INTBUSERCODE1, ItemMasterItemTableMap::COL_INTBUSERCODE2, ItemMasterItemTableMap::COL_INITTYPE, ItemMasterItemTableMap::COL_INITTAX, ItemMasterItemTableMap::COL_INITRTLPRIC, ItemMasterItemTableMap::COL_INITSTATCHGD, ItemMasterItemTableMap::COL_INITSPECITEMCD, ItemMasterItemTableMap::COL_INITWARRDAYS, ItemMasterItemTableMap::COL_INTBUOMSALE, ItemMasterItemTableMap::COL_INITWGHT, ItemMasterItemTableMap::COL_INITBORD, ItemMasterItemTableMap::COL_INITBASEITEMID, ItemMasterItemTableMap::COL_INITSPECIFICCUST, ItemMasterItemTableMap::COL_INITGIVEDISC, ItemMasterItemTableMap::COL_INITASSTCODE, ItemMasterItemTableMap::COL_INITPRICLASTDATE, ItemMasterItemTableMap::COL_INTBUOMPUR, ItemMasterItemTableMap::COL_INITSTANCOST, ItemMasterItemTableMap::COL_INITSTANCOSTBASE, ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE, ItemMasterItemTableMap::COL_INITMINMARG, ItemMasterItemTableMap::COL_INITVENDID, ItemMasterItemTableMap::COL_INITINSPECT, ItemMasterItemTableMap::COL_INITSTOCKCODE, ItemMasterItemTableMap::COL_INITSUPRITEMNBR, ItemMasterItemTableMap::COL_INITVENDSHIPFROM, ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN, ItemMasterItemTableMap::COL_INITASSTQTY, ItemMasterItemTableMap::COL_INTBTARIFFCODE, ItemMasterItemTableMap::COL_INITPREFERENCE, ItemMasterItemTableMap::COL_INITPRODUCER, ItemMasterItemTableMap::COL_INITDOCUMENTATION, ItemMasterItemTableMap::COL_INITPURCHCRTNQTY, ItemMasterItemTableMap::COL_APTBBUYRCODE, ItemMasterItemTableMap::COL_INITLASTCOST, ItemMasterItemTableMap::COL_INITLITERS, ItemMasterItemTableMap::COL_INTBMSDSCODE, ItemMasterItemTableMap::COL_INITREQUIREFRT, ItemMasterItemTableMap::COL_INITMFRTCODE, ItemMasterItemTableMap::COL_INITINNERPACKQTY, ItemMasterItemTableMap::COL_INITOUTERPACKQTY, ItemMasterItemTableMap::COL_INITBASESTANCOST, ItemMasterItemTableMap::COL_INITSHIPTAREQTY, ItemMasterItemTableMap::COL_INITWGITEM, ItemMasterItemTableMap::COL_INTBPRICGRUP, ItemMasterItemTableMap::COL_INTBCOMMGRUP, ItemMasterItemTableMap::COL_INITLASTCOSTDATE, ItemMasterItemTableMap::COL_INITQTYPERCASE, ItemMasterItemTableMap::COL_INITREVISION, ItemMasterItemTableMap::COL_INITCOMMSALEQTY, ItemMasterItemTableMap::COL_INITCUBES, ItemMasterItemTableMap::COL_INITTIMEFENCE, ItemMasterItemTableMap::COL_INITSRVCMINCHRG, ItemMasterItemTableMap::COL_INITMINMARGBASE, ItemMasterItemTableMap::COL_DATEUPDTD, ItemMasterItemTableMap::COL_TIMEUPDTD, ItemMasterItemTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'InitDesc1', 'InitDesc2', 'IntbGrup', 'InitFormatCode', 'InitSplit', 'InitSherDateCd', 'InitCoreYN', 'IntbUserCode1', 'IntbUserCode2', 'InitType', 'InitTax', 'InitRtlPric', 'InitStatChgd', 'InitSpecItemCd', 'InitWarrDays', 'IntbUomSale', 'InitWght', 'InitBord', 'InitBaseItemId', 'InitSpecificCust', 'InitGiveDisc', 'InitAsstCode', 'InitPricLastDate', 'IntbUomPur', 'InitStanCost', 'InitStanCostBase', 'InitStanCostLastDate', 'InitMinMarg', 'InitVendId', 'InitInspect', 'InitStockCode', 'InitSuprItemNbr', 'InitVendShipFrom', 'InitCntryOfOrigin', 'InitAsstQty', 'IntbTariffCode', 'InitPreference', 'InitProducer', 'InitDocumentation', 'InitPurchCrtnQty', 'AptbBuyrCode', 'InitLastCost', 'InitLiters', 'IntbMsdsCode', 'InitRequireFrt', 'InitMfrtCode', 'InitInnerPackQty', 'InitOuterPackQty', 'InitBaseStanCost', 'InitShipTareQty', 'InitWgItem', 'IntbPricGrup', 'IntbCommGrup', 'InitLastCostDate', 'InitQtyPerCase', 'InitRevision', 'InitCommSaleQty', 'InitCubes', 'InitTimeFence', 'InitSrvcMinChrg', 'InitMinMargBase', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Initdesc1' => 1, 'Initdesc2' => 2, 'Intbgrup' => 3, 'Initformatcode' => 4, 'Initsplit' => 5, 'Initsherdatecd' => 6, 'Initcoreyn' => 7, 'Intbusercode1' => 8, 'Intbusercode2' => 9, 'Inittype' => 10, 'Inittax' => 11, 'Initrtlpric' => 12, 'Initstatchgd' => 13, 'Initspecitemcd' => 14, 'Initwarrdays' => 15, 'Intbuomsale' => 16, 'Initwght' => 17, 'Initbord' => 18, 'Initbaseitemid' => 19, 'Initspecificcust' => 20, 'Initgivedisc' => 21, 'Initasstcode' => 22, 'Initpriclastdate' => 23, 'Intbuompur' => 24, 'Initstancost' => 25, 'Initstancostbase' => 26, 'Initstancostlastdate' => 27, 'Initminmarg' => 28, 'Initvendid' => 29, 'Initinspect' => 30, 'Initstockcode' => 31, 'Initsupritemnbr' => 32, 'Initvendshipfrom' => 33, 'Initcntryoforigin' => 34, 'Initasstqty' => 35, 'Intbtariffcode' => 36, 'Initpreference' => 37, 'Initproducer' => 38, 'Initdocumentation' => 39, 'Initpurchcrtnqty' => 40, 'Aptbbuyrcode' => 41, 'Initlastcost' => 42, 'Initliters' => 43, 'Intbmsdscode' => 44, 'Initrequirefrt' => 45, 'Initmfrtcode' => 46, 'Initinnerpackqty' => 47, 'Initouterpackqty' => 48, 'Initbasestancost' => 49, 'Initshiptareqty' => 50, 'Initwgitem' => 51, 'Intbpricgrup' => 52, 'Intbcommgrup' => 53, 'Initlastcostdate' => 54, 'Initqtypercase' => 55, 'Initrevision' => 56, 'Initcommsaleqty' => 57, 'Initcubes' => 58, 'Inittimefence' => 59, 'Initsrvcminchrg' => 60, 'InitMinMargBase' => 61, 'Dateupdtd' => 62, 'Timeupdtd' => 63, 'Dummy' => 64, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'initdesc1' => 1, 'initdesc2' => 2, 'intbgrup' => 3, 'initformatcode' => 4, 'initsplit' => 5, 'initsherdatecd' => 6, 'initcoreyn' => 7, 'intbusercode1' => 8, 'intbusercode2' => 9, 'inittype' => 10, 'inittax' => 11, 'initrtlpric' => 12, 'initstatchgd' => 13, 'initspecitemcd' => 14, 'initwarrdays' => 15, 'intbuomsale' => 16, 'initwght' => 17, 'initbord' => 18, 'initbaseitemid' => 19, 'initspecificcust' => 20, 'initgivedisc' => 21, 'initasstcode' => 22, 'initpriclastdate' => 23, 'intbuompur' => 24, 'initstancost' => 25, 'initstancostbase' => 26, 'initstancostlastdate' => 27, 'initminmarg' => 28, 'initvendid' => 29, 'initinspect' => 30, 'initstockcode' => 31, 'initsupritemnbr' => 32, 'initvendshipfrom' => 33, 'initcntryoforigin' => 34, 'initasstqty' => 35, 'intbtariffcode' => 36, 'initpreference' => 37, 'initproducer' => 38, 'initdocumentation' => 39, 'initpurchcrtnqty' => 40, 'aptbbuyrcode' => 41, 'initlastcost' => 42, 'initliters' => 43, 'intbmsdscode' => 44, 'initrequirefrt' => 45, 'initmfrtcode' => 46, 'initinnerpackqty' => 47, 'initouterpackqty' => 48, 'initbasestancost' => 49, 'initshiptareqty' => 50, 'initwgitem' => 51, 'intbpricgrup' => 52, 'intbcommgrup' => 53, 'initlastcostdate' => 54, 'initqtypercase' => 55, 'initrevision' => 56, 'initcommsaleqty' => 57, 'initcubes' => 58, 'inittimefence' => 59, 'initsrvcminchrg' => 60, 'initMinMargBase' => 61, 'dateupdtd' => 62, 'timeupdtd' => 63, 'dummy' => 64, ),
        self::TYPE_COLNAME       => array(ItemMasterItemTableMap::COL_INITITEMNBR => 0, ItemMasterItemTableMap::COL_INITDESC1 => 1, ItemMasterItemTableMap::COL_INITDESC2 => 2, ItemMasterItemTableMap::COL_INTBGRUP => 3, ItemMasterItemTableMap::COL_INITFORMATCODE => 4, ItemMasterItemTableMap::COL_INITSPLIT => 5, ItemMasterItemTableMap::COL_INITSHERDATECD => 6, ItemMasterItemTableMap::COL_INITCOREYN => 7, ItemMasterItemTableMap::COL_INTBUSERCODE1 => 8, ItemMasterItemTableMap::COL_INTBUSERCODE2 => 9, ItemMasterItemTableMap::COL_INITTYPE => 10, ItemMasterItemTableMap::COL_INITTAX => 11, ItemMasterItemTableMap::COL_INITRTLPRIC => 12, ItemMasterItemTableMap::COL_INITSTATCHGD => 13, ItemMasterItemTableMap::COL_INITSPECITEMCD => 14, ItemMasterItemTableMap::COL_INITWARRDAYS => 15, ItemMasterItemTableMap::COL_INTBUOMSALE => 16, ItemMasterItemTableMap::COL_INITWGHT => 17, ItemMasterItemTableMap::COL_INITBORD => 18, ItemMasterItemTableMap::COL_INITBASEITEMID => 19, ItemMasterItemTableMap::COL_INITSPECIFICCUST => 20, ItemMasterItemTableMap::COL_INITGIVEDISC => 21, ItemMasterItemTableMap::COL_INITASSTCODE => 22, ItemMasterItemTableMap::COL_INITPRICLASTDATE => 23, ItemMasterItemTableMap::COL_INTBUOMPUR => 24, ItemMasterItemTableMap::COL_INITSTANCOST => 25, ItemMasterItemTableMap::COL_INITSTANCOSTBASE => 26, ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE => 27, ItemMasterItemTableMap::COL_INITMINMARG => 28, ItemMasterItemTableMap::COL_INITVENDID => 29, ItemMasterItemTableMap::COL_INITINSPECT => 30, ItemMasterItemTableMap::COL_INITSTOCKCODE => 31, ItemMasterItemTableMap::COL_INITSUPRITEMNBR => 32, ItemMasterItemTableMap::COL_INITVENDSHIPFROM => 33, ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN => 34, ItemMasterItemTableMap::COL_INITASSTQTY => 35, ItemMasterItemTableMap::COL_INTBTARIFFCODE => 36, ItemMasterItemTableMap::COL_INITPREFERENCE => 37, ItemMasterItemTableMap::COL_INITPRODUCER => 38, ItemMasterItemTableMap::COL_INITDOCUMENTATION => 39, ItemMasterItemTableMap::COL_INITPURCHCRTNQTY => 40, ItemMasterItemTableMap::COL_APTBBUYRCODE => 41, ItemMasterItemTableMap::COL_INITLASTCOST => 42, ItemMasterItemTableMap::COL_INITLITERS => 43, ItemMasterItemTableMap::COL_INTBMSDSCODE => 44, ItemMasterItemTableMap::COL_INITREQUIREFRT => 45, ItemMasterItemTableMap::COL_INITMFRTCODE => 46, ItemMasterItemTableMap::COL_INITINNERPACKQTY => 47, ItemMasterItemTableMap::COL_INITOUTERPACKQTY => 48, ItemMasterItemTableMap::COL_INITBASESTANCOST => 49, ItemMasterItemTableMap::COL_INITSHIPTAREQTY => 50, ItemMasterItemTableMap::COL_INITWGITEM => 51, ItemMasterItemTableMap::COL_INTBPRICGRUP => 52, ItemMasterItemTableMap::COL_INTBCOMMGRUP => 53, ItemMasterItemTableMap::COL_INITLASTCOSTDATE => 54, ItemMasterItemTableMap::COL_INITQTYPERCASE => 55, ItemMasterItemTableMap::COL_INITREVISION => 56, ItemMasterItemTableMap::COL_INITCOMMSALEQTY => 57, ItemMasterItemTableMap::COL_INITCUBES => 58, ItemMasterItemTableMap::COL_INITTIMEFENCE => 59, ItemMasterItemTableMap::COL_INITSRVCMINCHRG => 60, ItemMasterItemTableMap::COL_INITMINMARGBASE => 61, ItemMasterItemTableMap::COL_DATEUPDTD => 62, ItemMasterItemTableMap::COL_TIMEUPDTD => 63, ItemMasterItemTableMap::COL_DUMMY => 64, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'InitDesc1' => 1, 'InitDesc2' => 2, 'IntbGrup' => 3, 'InitFormatCode' => 4, 'InitSplit' => 5, 'InitSherDateCd' => 6, 'InitCoreYN' => 7, 'IntbUserCode1' => 8, 'IntbUserCode2' => 9, 'InitType' => 10, 'InitTax' => 11, 'InitRtlPric' => 12, 'InitStatChgd' => 13, 'InitSpecItemCd' => 14, 'InitWarrDays' => 15, 'IntbUomSale' => 16, 'InitWght' => 17, 'InitBord' => 18, 'InitBaseItemId' => 19, 'InitSpecificCust' => 20, 'InitGiveDisc' => 21, 'InitAsstCode' => 22, 'InitPricLastDate' => 23, 'IntbUomPur' => 24, 'InitStanCost' => 25, 'InitStanCostBase' => 26, 'InitStanCostLastDate' => 27, 'InitMinMarg' => 28, 'InitVendId' => 29, 'InitInspect' => 30, 'InitStockCode' => 31, 'InitSuprItemNbr' => 32, 'InitVendShipFrom' => 33, 'InitCntryOfOrigin' => 34, 'InitAsstQty' => 35, 'IntbTariffCode' => 36, 'InitPreference' => 37, 'InitProducer' => 38, 'InitDocumentation' => 39, 'InitPurchCrtnQty' => 40, 'AptbBuyrCode' => 41, 'InitLastCost' => 42, 'InitLiters' => 43, 'IntbMsdsCode' => 44, 'InitRequireFrt' => 45, 'InitMfrtCode' => 46, 'InitInnerPackQty' => 47, 'InitOuterPackQty' => 48, 'InitBaseStanCost' => 49, 'InitShipTareQty' => 50, 'InitWgItem' => 51, 'IntbPricGrup' => 52, 'IntbCommGrup' => 53, 'InitLastCostDate' => 54, 'InitQtyPerCase' => 55, 'InitRevision' => 56, 'InitCommSaleQty' => 57, 'InitCubes' => 58, 'InitTimeFence' => 59, 'InitSrvcMinChrg' => 60, 'InitMinMargBase' => 61, 'DateUpdtd' => 62, 'TimeUpdtd' => 63, 'dummy' => 64, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('inv_item_mast');
        $this->setPhpName('ItemMasterItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemMasterItem');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_price', 'InitItemNbr', true, 30, '');
        $this->addColumn('InitDesc1', 'Initdesc1', 'VARCHAR', false, 35, null);
        $this->addColumn('InitDesc2', 'Initdesc2', 'VARCHAR', false, 35, null);
        $this->addForeignKey('IntbGrup', 'Intbgrup', 'VARCHAR', 'inv_grup_code', 'IntbGrup', false, 4, null);
        $this->addColumn('InitFormatCode', 'Initformatcode', 'VARCHAR', false, 2, null);
        $this->addColumn('InitSplit', 'Initsplit', 'VARCHAR', false, 1, null);
        $this->addColumn('InitSherDateCd', 'Initsherdatecd', 'VARCHAR', false, 1, null);
        $this->addColumn('InitCoreYN', 'Initcoreyn', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbUserCode1', 'Intbusercode1', 'VARCHAR', false, 6, null);
        $this->addColumn('IntbUserCode2', 'Intbusercode2', 'VARCHAR', false, 6, null);
        $this->addColumn('InitType', 'Inittype', 'VARCHAR', false, 1, null);
        $this->addColumn('InitTax', 'Inittax', 'VARCHAR', false, 1, null);
        $this->addColumn('InitRtlPric', 'Initrtlpric', 'DECIMAL', false, 20, null);
        $this->addColumn('InitStatChgd', 'Initstatchgd', 'VARCHAR', false, 1, null);
        $this->addColumn('InitSpecItemCd', 'Initspecitemcd', 'VARCHAR', false, 1, null);
        $this->addColumn('InitWarrDays', 'Initwarrdays', 'INTEGER', false, 5, null);
        $this->addForeignKey('IntbUomSale', 'Intbuomsale', 'VARCHAR', 'inv_uom_sale', 'IntbUomSale', false, 4, null);
        $this->addColumn('InitWght', 'Initwght', 'DECIMAL', false, 20, null);
        $this->addColumn('InitBord', 'Initbord', 'VARCHAR', false, 1, null);
        $this->addColumn('InitBaseItemId', 'Initbaseitemid', 'VARCHAR', false, 30, null);
        $this->addColumn('InitSpecificCust', 'Initspecificcust', 'VARCHAR', false, 6, null);
        $this->addColumn('InitGiveDisc', 'Initgivedisc', 'VARCHAR', false, 1, null);
        $this->addColumn('InitAsstCode', 'Initasstcode', 'VARCHAR', false, 3, null);
        $this->addColumn('InitPricLastDate', 'Initpriclastdate', 'VARCHAR', false, 8, null);
        $this->addForeignKey('IntbUomPur', 'Intbuompur', 'VARCHAR', 'inv_uom_pur', 'IntbUomPur', false, 4, null);
        $this->addColumn('InitStanCost', 'Initstancost', 'DECIMAL', false, 20, null);
        $this->addColumn('InitStanCostBase', 'Initstancostbase', 'VARCHAR', false, 1, null);
        $this->addColumn('InitStanCostLastDate', 'Initstancostlastdate', 'VARCHAR', false, 8, null);
        $this->addColumn('InitMinMarg', 'Initminmarg', 'DECIMAL', false, 20, null);
        $this->addColumn('InitVendId', 'Initvendid', 'VARCHAR', false, 6, null);
        $this->addColumn('InitInspect', 'Initinspect', 'VARCHAR', false, 1, null);
        $this->addColumn('InitStockCode', 'Initstockcode', 'VARCHAR', false, 4, null);
        $this->addColumn('InitSuprItemNbr', 'Initsupritemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('InitVendShipFrom', 'Initvendshipfrom', 'VARCHAR', false, 6, null);
        $this->addColumn('InitCntryOfOrigin', 'Initcntryoforigin', 'VARCHAR', false, 4, null);
        $this->addColumn('InitAsstQty', 'Initasstqty', 'DECIMAL', false, 20, null);
        $this->addColumn('IntbTariffCode', 'Intbtariffcode', 'VARCHAR', false, 3, null);
        $this->addColumn('InitPreference', 'Initpreference', 'VARCHAR', false, 1, null);
        $this->addColumn('InitProducer', 'Initproducer', 'VARCHAR', false, 1, null);
        $this->addColumn('InitDocumentation', 'Initdocumentation', 'VARCHAR', false, 1, null);
        $this->addColumn('InitPurchCrtnQty', 'Initpurchcrtnqty', 'INTEGER', false, 6, null);
        $this->addColumn('AptbBuyrCode', 'Aptbbuyrcode', 'VARCHAR', false, 6, null);
        $this->addColumn('InitLastCost', 'Initlastcost', 'DECIMAL', false, 20, null);
        $this->addColumn('InitLiters', 'Initliters', 'DECIMAL', false, 20, null);
        $this->addColumn('IntbMsdsCode', 'Intbmsdscode', 'VARCHAR', false, 8, null);
        $this->addColumn('InitRequireFrt', 'Initrequirefrt', 'VARCHAR', false, 1, null);
        $this->addColumn('InitMfrtCode', 'Initmfrtcode', 'VARCHAR', false, 20, null);
        $this->addColumn('InitInnerPackQty', 'Initinnerpackqty', 'INTEGER', false, 4, null);
        $this->addColumn('InitOuterPackQty', 'Initouterpackqty', 'INTEGER', false, 4, null);
        $this->addColumn('InitBaseStanCost', 'Initbasestancost', 'DECIMAL', false, 20, null);
        $this->addColumn('InitShipTareQty', 'Initshiptareqty', 'INTEGER', false, 4, null);
        $this->addColumn('InitWgItem', 'Initwgitem', 'VARCHAR', false, 20, null);
        $this->addForeignKey('IntbPricGrup', 'Intbpricgrup', 'VARCHAR', 'inv_pric_code', 'IntbPricGrup', false, 8, null);
        $this->addForeignKey('IntbCommGrup', 'Intbcommgrup', 'VARCHAR', 'inv_comm_code', 'IntbCommGrup', false, 8, null);
        $this->addColumn('InitLastCostDate', 'Initlastcostdate', 'VARCHAR', false, 8, null);
        $this->addColumn('InitQtyPerCase', 'Initqtypercase', 'INTEGER', false, 8, null);
        $this->addColumn('InitRevision', 'Initrevision', 'VARCHAR', false, 10, null);
        $this->addColumn('InitCommSaleQty', 'Initcommsaleqty', 'INTEGER', false, 8, null);
        $this->addColumn('InitCubes', 'Initcubes', 'DECIMAL', false, 20, null);
        $this->addColumn('InitTimeFence', 'Inittimefence', 'INTEGER', false, 5, null);
        $this->addColumn('InitSrvcMinChrg', 'Initsrvcminchrg', 'DECIMAL', false, 20, null);
        $this->addColumn('InitMinMargBase', 'InitMinMargBase', 'VARCHAR', false, 1, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UnitofMeasureSale', '\\UnitofMeasureSale', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbUomSale',
    1 => ':IntbUomSale',
  ),
), null, null, null, false);
        $this->addRelation('UnitofMeasurePurchase', '\\UnitofMeasurePurchase', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbUomPur',
    1 => ':IntbUomPur',
  ),
), null, null, null, false);
        $this->addRelation('InvGroupCode', '\\InvGroupCode', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbGrup',
    1 => ':IntbGrup',
  ),
), null, null, null, false);
        $this->addRelation('InvPriceCode', '\\InvPriceCode', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbPricGrup',
    1 => ':IntbPricGrup',
  ),
), null, null, null, false);
        $this->addRelation('InvCommissionCode', '\\InvCommissionCode', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbCommGrup',
    1 => ':IntbCommGrup',
  ),
), null, null, null, false);
        $this->addRelation('ItemPricing', '\\ItemPricing', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('ItemXrefCustomer', '\\ItemXrefCustomer', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemXrefCustomers', false);
        $this->addRelation('ItemAddonItemRelatedByInititemnbr', '\\ItemAddonItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemAddonItemsRelatedByInititemnbr', false);
        $this->addRelation('ItemAddonItemRelatedByAdonadditemnbr', '\\ItemAddonItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':AdonAddItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemAddonItemsRelatedByAdonadditemnbr', false);
        $this->addRelation('ItmDimension', '\\ItmDimension', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvHazmatItem', '\\InvHazmatItem', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvWhseLot', '\\InvWhseLot', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'InvWhseLots', false);
        $this->addRelation('ItemSubstituteRelatedByInititemnbr', '\\ItemSubstitute', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemSubstitutesRelatedByInititemnbr', false);
        $this->addRelation('ItemSubstituteRelatedByInsisubitemnbr', '\\ItemSubstitute', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InsiSubItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemSubstitutesRelatedByInsisubitemnbr', false);
        $this->addRelation('InvItem2ItemRelatedByI2imstritemid', '\\InvItem2Item', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':I2iMstrItemId',
    1 => ':InitItemNbr',
  ),
), null, null, 'InvItem2ItemsRelatedByI2imstritemid', false);
        $this->addRelation('InvItem2ItemRelatedByI2ichilditemid', '\\InvItem2Item', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':I2iChildItemId',
    1 => ':InitItemNbr',
  ),
), null, null, 'InvItem2ItemsRelatedByI2ichilditemid', false);
        $this->addRelation('InvKitComponent', '\\InvKitComponent', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'InvKitComponents', false);
        $this->addRelation('InvKit', '\\InvKit', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvLotMaster', '\\InvLotMaster', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'InvLotMasters', false);
        $this->addRelation('InvSerialMaster', '\\InvSerialMaster', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'InvSerialMasters', false);
        $this->addRelation('InvSerialWarranty', '\\InvSerialWarranty', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'InvSerialWarranties', false);
        $this->addRelation('WarehouseInventory', '\\WarehouseInventory', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'WarehouseInventories', false);
        $this->addRelation('ItemXrefManufacturer', '\\ItemXrefManufacturer', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemXrefManufacturers', false);
        $this->addRelation('ItemXrefCustomerNote', '\\ItemXrefCustomerNote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemXrefCustomerNotes', false);
        $this->addRelation('InvOptCodeNote', '\\InvOptCodeNote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'InvOptCodeNotes', false);
        $this->addRelation('ItemXrefVendorNoteDetail', '\\ItemXrefVendorNoteDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemXrefVendorNoteDetails', false);
        $this->addRelation('ItemXrefVendorNoteInternal', '\\ItemXrefVendorNoteInternal', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemXrefVendorNoteInternals', false);
        $this->addRelation('PurchaseOrderDetail', '\\PurchaseOrderDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'PurchaseOrderDetails', false);
        $this->addRelation('PurchaseOrderDetailReceipt', '\\PurchaseOrderDetailReceipt', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'PurchaseOrderDetailReceipts', false);
        $this->addRelation('PurchaseOrderDetailReceiving', '\\PurchaseOrderDetailReceiving', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'PurchaseOrderDetailReceivings', false);
        $this->addRelation('PurchaseOrderDetailLotReceiving', '\\PurchaseOrderDetailLotReceiving', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'PurchaseOrderDetailLotReceivings', false);
        $this->addRelation('BomComponent', '\\BomComponent', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':BomdUsagItem',
    1 => ':InitItemNbr',
  ),
), null, null, 'BomComponents', false);
        $this->addRelation('BomItem', '\\BomItem', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':BomhProdItem',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('BookingDetail', '\\BookingDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'BookingDetails', false);
        $this->addRelation('SalesHistoryDetail', '\\SalesHistoryDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'SalesHistoryDetails', false);
        $this->addRelation('SalesOrderDetail', '\\SalesOrderDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'SalesOrderDetails', false);
        $this->addRelation('SalesOrderLotserial', '\\SalesOrderLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'SalesOrderLotserials', false);
        $this->addRelation('SalesHistoryLotserial', '\\SalesHistoryLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'SalesHistoryLotserials', false);
        $this->addRelation('SoAllocatedLotserial', '\\SoAllocatedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'SoAllocatedLotserials', false);
        $this->addRelation('ItemPricingDiscount', '\\ItemPricingDiscount', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OepcItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemPricingDiscounts', false);
        $this->addRelation('SoPickedLotserial', '\\SoPickedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'SoPickedLotserials', false);
        $this->addRelation('SoStandingOrderDetail', '\\SoStandingOrderDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'SoStandingOrderDetails', false);
        $this->addRelation('ItemXrefUpc', '\\ItemXrefUpc', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemXrefUpcs', false);
        $this->addRelation('ItemXrefVendor', '\\ItemXrefVendor', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, 'ItemXrefVendors', false);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
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
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
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
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? ItemMasterItemTableMap::CLASS_DEFAULT : ItemMasterItemTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (ItemMasterItem object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemMasterItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemMasterItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemMasterItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemMasterItemTableMap::OM_CLASS;
            /** @var ItemMasterItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemMasterItemTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = ItemMasterItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemMasterItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemMasterItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemMasterItemTableMap::addInstanceToPool($obj, $key);
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
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITDESC1);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITDESC2);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBGRUP);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITFORMATCODE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSPLIT);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSHERDATECD);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITCOREYN);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBUSERCODE1);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBUSERCODE2);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITTYPE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITTAX);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITRTLPRIC);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSTATCHGD);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSPECITEMCD);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITWARRDAYS);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBUOMSALE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITWGHT);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITBORD);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITBASEITEMID);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSPECIFICCUST);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITGIVEDISC);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITASSTCODE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITPRICLASTDATE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBUOMPUR);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSTANCOST);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSTANCOSTBASE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITMINMARG);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITVENDID);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITINSPECT);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSTOCKCODE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSUPRITEMNBR);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITVENDSHIPFROM);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITASSTQTY);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBTARIFFCODE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITPREFERENCE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITPRODUCER);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITDOCUMENTATION);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_APTBBUYRCODE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITLASTCOST);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITLITERS);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBMSDSCODE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITREQUIREFRT);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITMFRTCODE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITINNERPACKQTY);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITOUTERPACKQTY);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITBASESTANCOST);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSHIPTAREQTY);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITWGITEM);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBPRICGRUP);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INTBCOMMGRUP);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITLASTCOSTDATE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITQTYPERCASE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITREVISION);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITCOMMSALEQTY);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITCUBES);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITTIMEFENCE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITSRVCMINCHRG);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_INITMINMARGBASE);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemMasterItemTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InitDesc1');
            $criteria->addSelectColumn($alias . '.InitDesc2');
            $criteria->addSelectColumn($alias . '.IntbGrup');
            $criteria->addSelectColumn($alias . '.InitFormatCode');
            $criteria->addSelectColumn($alias . '.InitSplit');
            $criteria->addSelectColumn($alias . '.InitSherDateCd');
            $criteria->addSelectColumn($alias . '.InitCoreYN');
            $criteria->addSelectColumn($alias . '.IntbUserCode1');
            $criteria->addSelectColumn($alias . '.IntbUserCode2');
            $criteria->addSelectColumn($alias . '.InitType');
            $criteria->addSelectColumn($alias . '.InitTax');
            $criteria->addSelectColumn($alias . '.InitRtlPric');
            $criteria->addSelectColumn($alias . '.InitStatChgd');
            $criteria->addSelectColumn($alias . '.InitSpecItemCd');
            $criteria->addSelectColumn($alias . '.InitWarrDays');
            $criteria->addSelectColumn($alias . '.IntbUomSale');
            $criteria->addSelectColumn($alias . '.InitWght');
            $criteria->addSelectColumn($alias . '.InitBord');
            $criteria->addSelectColumn($alias . '.InitBaseItemId');
            $criteria->addSelectColumn($alias . '.InitSpecificCust');
            $criteria->addSelectColumn($alias . '.InitGiveDisc');
            $criteria->addSelectColumn($alias . '.InitAsstCode');
            $criteria->addSelectColumn($alias . '.InitPricLastDate');
            $criteria->addSelectColumn($alias . '.IntbUomPur');
            $criteria->addSelectColumn($alias . '.InitStanCost');
            $criteria->addSelectColumn($alias . '.InitStanCostBase');
            $criteria->addSelectColumn($alias . '.InitStanCostLastDate');
            $criteria->addSelectColumn($alias . '.InitMinMarg');
            $criteria->addSelectColumn($alias . '.InitVendId');
            $criteria->addSelectColumn($alias . '.InitInspect');
            $criteria->addSelectColumn($alias . '.InitStockCode');
            $criteria->addSelectColumn($alias . '.InitSuprItemNbr');
            $criteria->addSelectColumn($alias . '.InitVendShipFrom');
            $criteria->addSelectColumn($alias . '.InitCntryOfOrigin');
            $criteria->addSelectColumn($alias . '.InitAsstQty');
            $criteria->addSelectColumn($alias . '.IntbTariffCode');
            $criteria->addSelectColumn($alias . '.InitPreference');
            $criteria->addSelectColumn($alias . '.InitProducer');
            $criteria->addSelectColumn($alias . '.InitDocumentation');
            $criteria->addSelectColumn($alias . '.InitPurchCrtnQty');
            $criteria->addSelectColumn($alias . '.AptbBuyrCode');
            $criteria->addSelectColumn($alias . '.InitLastCost');
            $criteria->addSelectColumn($alias . '.InitLiters');
            $criteria->addSelectColumn($alias . '.IntbMsdsCode');
            $criteria->addSelectColumn($alias . '.InitRequireFrt');
            $criteria->addSelectColumn($alias . '.InitMfrtCode');
            $criteria->addSelectColumn($alias . '.InitInnerPackQty');
            $criteria->addSelectColumn($alias . '.InitOuterPackQty');
            $criteria->addSelectColumn($alias . '.InitBaseStanCost');
            $criteria->addSelectColumn($alias . '.InitShipTareQty');
            $criteria->addSelectColumn($alias . '.InitWgItem');
            $criteria->addSelectColumn($alias . '.IntbPricGrup');
            $criteria->addSelectColumn($alias . '.IntbCommGrup');
            $criteria->addSelectColumn($alias . '.InitLastCostDate');
            $criteria->addSelectColumn($alias . '.InitQtyPerCase');
            $criteria->addSelectColumn($alias . '.InitRevision');
            $criteria->addSelectColumn($alias . '.InitCommSaleQty');
            $criteria->addSelectColumn($alias . '.InitCubes');
            $criteria->addSelectColumn($alias . '.InitTimeFence');
            $criteria->addSelectColumn($alias . '.InitSrvcMinChrg');
            $criteria->addSelectColumn($alias . '.InitMinMargBase');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(ItemMasterItemTableMap::DATABASE_NAME)->getTable(ItemMasterItemTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemMasterItemTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemMasterItemTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemMasterItemTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemMasterItem or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemMasterItem object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemMasterItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemMasterItemTableMap::DATABASE_NAME);
            $criteria->add(ItemMasterItemTableMap::COL_INITITEMNBR, (array) $values, Criteria::IN);
        }

        $query = ItemMasterItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemMasterItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemMasterItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_item_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemMasterItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemMasterItem or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemMasterItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemMasterItem object
        }


        // Set the correct dbName
        $query = ItemMasterItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemMasterItemTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemMasterItemTableMap::buildTableMap();
