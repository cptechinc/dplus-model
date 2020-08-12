<?php

namespace Map;

use \ConfigPo;
use \ConfigPoQuery;
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
 * This class defines the structure of the 'po_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigPoTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigPoTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'po_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigPo';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigPo';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 89;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 89;

    /**
     * the column name for the PotbConfKey field
     */
    const COL_POTBCONFKEY = 'po_config.PotbConfKey';

    /**
     * the column name for the PotbConfSortPo field
     */
    const COL_POTBCONFSORTPO = 'po_config.PotbConfSortPo';

    /**
     * the column name for the PotbConfCancOrRshpDate field
     */
    const COL_POTBCONFCANCORRSHPDATE = 'po_config.PotbConfCancOrRshpDate';

    /**
     * the column name for the PotbConfAckOrEtaDate field
     */
    const COL_POTBCONFACKORETADATE = 'po_config.PotbConfAckOrEtaDate';

    /**
     * the column name for the PotbConfEditShipDate field
     */
    const COL_POTBCONFEDITSHIPDATE = 'po_config.PotbConfEditShipDate';

    /**
     * the column name for the PotbConfEditExptDate field
     */
    const COL_POTBCONFEDITEXPTDATE = 'po_config.PotbConfEditExptDate';

    /**
     * the column name for the PotbConfEditCancDate field
     */
    const COL_POTBCONFEDITCANCDATE = 'po_config.PotbConfEditCancDate';

    /**
     * the column name for the PotbConfEditAckDate field
     */
    const COL_POTBCONFEDITACKDATE = 'po_config.PotbConfEditAckDate';

    /**
     * the column name for the PotbConfExptDateDef field
     */
    const COL_POTBCONFEXPTDATEDEF = 'po_config.PotbConfExptDateDef';

    /**
     * the column name for the PotbConfHeadGetDef field
     */
    const COL_POTBCONFHEADGETDEF = 'po_config.PotbConfHeadGetDef';

    /**
     * the column name for the PotbConfReseq field
     */
    const COL_POTBCONFRESEQ = 'po_config.PotbConfReseq';

    /**
     * the column name for the PotbConfForceVxref field
     */
    const COL_POTBCONFFORCEVXREF = 'po_config.PotbConfForceVxref';

    /**
     * the column name for the PotbConfQtyDue field
     */
    const COL_POTBCONFQTYDUE = 'po_config.PotbConfQtyDue';

    /**
     * the column name for the PotbConfWarnDup field
     */
    const COL_POTBCONFWARNDUP = 'po_config.PotbConfWarnDup';

    /**
     * the column name for the PotbConfForcePoRef field
     */
    const COL_POTBCONFFORCEPOREF = 'po_config.PotbConfForcePoRef';

    /**
     * the column name for the PotbConfDestWhse field
     */
    const COL_POTBCONFDESTWHSE = 'po_config.PotbConfDestWhse';

    /**
     * the column name for the PotbConfEditPoItemNotes field
     */
    const COL_POTBCONFEDITPOITEMNOTES = 'po_config.PotbConfEditPoItemNotes';

    /**
     * the column name for the PotbConfLoadPoVxmNotes field
     */
    const COL_POTBCONFLOADPOVXMNOTES = 'po_config.PotbConfLoadPoVxmNotes';

    /**
     * the column name for the PotbConfEpoUpdLastCost field
     */
    const COL_POTBCONFEPOUPDLASTCOST = 'po_config.PotbConfEpoUpdLastCost';

    /**
     * the column name for the PotbConfOneTwoLine field
     */
    const COL_POTBCONFONETWOLINE = 'po_config.PotbConfOneTwoLine';

    /**
     * the column name for the PotbConfUseOrdrAs field
     */
    const COL_POTBCONFUSEORDRAS = 'po_config.PotbConfUseOrdrAs';

    /**
     * the column name for the PotbConfAprvVendOnly field
     */
    const COL_POTBCONFAPRVVENDONLY = 'po_config.PotbConfAprvVendOnly';

    /**
     * the column name for the PotbConfRecAll field
     */
    const COL_POTBCONFRECALL = 'po_config.PotbConfRecAll';

    /**
     * the column name for the PotbConfRecAllAsk field
     */
    const COL_POTBCONFRECALLASK = 'po_config.PotbConfRecAllAsk';

    /**
     * the column name for the PotbConfReceiveCost field
     */
    const COL_POTBCONFRECEIVECOST = 'po_config.PotbConfReceiveCost';

    /**
     * the column name for the PotbConfProcVari field
     */
    const COL_POTBCONFPROCVARI = 'po_config.PotbConfProcVari';

    /**
     * the column name for the PotbConfCostRcvryAcct field
     */
    const COL_POTBCONFCOSTRCVRYACCT = 'po_config.PotbConfCostRcvryAcct';

    /**
     * the column name for the PotbConfInvtyVariAcct field
     */
    const COL_POTBCONFINVTYVARIACCT = 'po_config.PotbConfInvtyVariAcct';

    /**
     * the column name for the PotbConfAllowChgCost field
     */
    const COL_POTBCONFALLOWCHGCOST = 'po_config.PotbConfAllowChgCost';

    /**
     * the column name for the PotbConfWarnRcptQty field
     */
    const COL_POTBCONFWARNRCPTQTY = 'po_config.PotbConfWarnRcptQty';

    /**
     * the column name for the PotbConfErDispDate field
     */
    const COL_POTBCONFERDISPDATE = 'po_config.PotbConfErDispDate';

    /**
     * the column name for the PotbConfProvideLpo field
     */
    const COL_POTBCONFPROVIDELPO = 'po_config.PotbConfProvideLpo';

    /**
     * the column name for the PotbConfWarnDiffWhse field
     */
    const COL_POTBCONFWARNDIFFWHSE = 'po_config.PotbConfWarnDiffWhse';

    /**
     * the column name for the PotbConfAllocRcvd field
     */
    const COL_POTBCONFALLOCRCVD = 'po_config.PotbConfAllocRcvd';

    /**
     * the column name for the PotbConfAskClose field
     */
    const COL_POTBCONFASKCLOSE = 'po_config.PotbConfAskClose';

    /**
     * the column name for the PotbConfTariffGlAcct field
     */
    const COL_POTBCONFTARIFFGLACCT = 'po_config.PotbConfTariffGlAcct';

    /**
     * the column name for the PotbConfShopGlAcct field
     */
    const COL_POTBCONFSHOPGLACCT = 'po_config.PotbConfShopGlAcct';

    /**
     * the column name for the PotbConfShopRate field
     */
    const COL_POTBCONFSHOPRATE = 'po_config.PotbConfShopRate';

    /**
     * the column name for the PotbConfUsePrime field
     */
    const COL_POTBCONFUSEPRIME = 'po_config.PotbConfUsePrime';

    /**
     * the column name for the PotbConfUseWatch field
     */
    const COL_POTBCONFUSEWATCH = 'po_config.PotbConfUseWatch';

    /**
     * the column name for the PotbConfPrtPowSugg field
     */
    const COL_POTBCONFPRTPOWSUGG = 'po_config.PotbConfPrtPowSugg';

    /**
     * the column name for the PotbConfPowSlctYes field
     */
    const COL_POTBCONFPOWSLCTYES = 'po_config.PotbConfPowSlctYes';

    /**
     * the column name for the PotbConfPowgVendRpt field
     */
    const COL_POTBCONFPOWGVENDRPT = 'po_config.PotbConfPowgVendRpt';

    /**
     * the column name for the PotbConfPowgWipStatus field
     */
    const COL_POTBCONFPOWGWIPSTATUS = 'po_config.PotbConfPowgWipStatus';

    /**
     * the column name for the PotbConfPowgWipAutoGen field
     */
    const COL_POTBCONFPOWGWIPAUTOGEN = 'po_config.PotbConfPowgWipAutoGen';

    /**
     * the column name for the PotbConfBuyerControl field
     */
    const COL_POTBCONFBUYERCONTROL = 'po_config.PotbConfBuyerControl';

    /**
     * the column name for the PotbConfPowgOqMethod field
     */
    const COL_POTBCONFPOWGOQMETHOD = 'po_config.PotbConfPowgOqMethod';

    /**
     * the column name for the PotbConfFxPo field
     */
    const COL_POTBCONFFXPO = 'po_config.PotbConfFxPo';

    /**
     * the column name for the PotbConfFxInv field
     */
    const COL_POTBCONFFXINV = 'po_config.PotbConfFxInv';

    /**
     * the column name for the PotbConfUseLandCost field
     */
    const COL_POTBCONFUSELANDCOST = 'po_config.PotbConfUseLandCost';

    /**
     * the column name for the PotbConfBaseLandAmtQty field
     */
    const COL_POTBCONFBASELANDAMTQTY = 'po_config.PotbConfBaseLandAmtQty';

    /**
     * the column name for the PotbConfLandGlAcct field
     */
    const COL_POTBCONFLANDGLACCT = 'po_config.PotbConfLandGlAcct';

    /**
     * the column name for the PotbConfWarnLandInEr field
     */
    const COL_POTBCONFWARNLANDINER = 'po_config.PotbConfWarnLandInEr';

    /**
     * the column name for the PotbConfLandAmtMultWght field
     */
    const COL_POTBCONFLANDAMTMULTWGHT = 'po_config.PotbConfLandAmtMultWght';

    /**
     * the column name for the PotbConfLandErEdit field
     */
    const COL_POTBCONFLANDEREDIT = 'po_config.PotbConfLandErEdit';

    /**
     * the column name for the PotbConfHistCmplFab field
     */
    const COL_POTBCONFHISTCMPLFAB = 'po_config.PotbConfHistCmplFab';

    /**
     * the column name for the PotbConfUpDateVendCost field
     */
    const COL_POTBCONFUPDATEVENDCOST = 'po_config.PotbConfUpDateVendCost';

    /**
     * the column name for the PotbConfAskUpDate field
     */
    const COL_POTBCONFASKUPDATE = 'po_config.PotbConfAskUpDate';

    /**
     * the column name for the PotbConfVxmRoundPos field
     */
    const COL_POTBCONFVXMROUNDPOS = 'po_config.PotbConfVxmRoundPos';

    /**
     * the column name for the PotbConfXrefMaint field
     */
    const COL_POTBCONFXREFMAINT = 'po_config.PotbConfXrefMaint';

    /**
     * the column name for the PotbConfUseIdOpts field
     */
    const COL_POTBCONFUSEIDOPTS = 'po_config.PotbConfUseIdOpts';

    /**
     * the column name for the PotbConfSrchVxmFirst field
     */
    const COL_POTBCONFSRCHVXMFIRST = 'po_config.PotbConfSrchVxmFirst';

    /**
     * the column name for the PotbConfOpenLineOnly field
     */
    const COL_POTBCONFOPENLINEONLY = 'po_config.PotbConfOpenLineOnly';

    /**
     * the column name for the PotbConfItemDesc field
     */
    const COL_POTBCONFITEMDESC = 'po_config.PotbConfItemDesc';

    /**
     * the column name for the PotbConfOpenBalOnly field
     */
    const COL_POTBCONFOPENBALONLY = 'po_config.PotbConfOpenBalOnly';

    /**
     * the column name for the PotbConfPrtWhseDtl field
     */
    const COL_POTBCONFPRTWHSEDTL = 'po_config.PotbConfPrtWhseDtl';

    /**
     * the column name for the PotbConfAutoRcpt field
     */
    const COL_POTBCONFAUTORCPT = 'po_config.PotbConfAutoRcpt';

    /**
     * the column name for the PotbConfDispItemCost field
     */
    const COL_POTBCONFDISPITEMCOST = 'po_config.PotbConfDispItemCost';

    /**
     * the column name for the PotbConfDispCaseQty field
     */
    const COL_POTBCONFDISPCASEQTY = 'po_config.PotbConfDispCaseQty';

    /**
     * the column name for the PotbConfUseFab field
     */
    const COL_POTBCONFUSEFAB = 'po_config.PotbConfUseFab';

    /**
     * the column name for the PotbConfShowItem field
     */
    const COL_POTBCONFSHOWITEM = 'po_config.PotbConfShowItem';

    /**
     * the column name for the PotbConfScrapAcct field
     */
    const COL_POTBCONFSCRAPACCT = 'po_config.PotbConfScrapAcct';

    /**
     * the column name for the PotbConfScrapVariPct field
     */
    const COL_POTBCONFSCRAPVARIPCT = 'po_config.PotbConfScrapVariPct';

    /**
     * the column name for the PotbConfLifoFifo field
     */
    const COL_POTBCONFLIFOFIFO = 'po_config.PotbConfLifoFifo';

    /**
     * the column name for the PotbConfFabBomOrKit field
     */
    const COL_POTBCONFFABBOMORKIT = 'po_config.PotbConfFabBomOrKit';

    /**
     * the column name for the PotbConfAllocEpoEr field
     */
    const COL_POTBCONFALLOCEPOER = 'po_config.PotbConfAllocEpoEr';

    /**
     * the column name for the PotbConfFabPrealloc field
     */
    const COL_POTBCONFFABPREALLOC = 'po_config.PotbConfFabPrealloc';

    /**
     * the column name for the PotbConfForceFabEpo field
     */
    const COL_POTBCONFFORCEFABEPO = 'po_config.PotbConfForceFabEpo';

    /**
     * the column name for the PotbConfPreviewCompList field
     */
    const COL_POTBCONFPREVIEWCOMPLIST = 'po_config.PotbConfPreviewCompList';

    /**
     * the column name for the PotbConfNegCompUsage field
     */
    const COL_POTBCONFNEGCOMPUSAGE = 'po_config.PotbConfNegCompUsage';

    /**
     * the column name for the PotbConfAutoSelectComp field
     */
    const COL_POTBCONFAUTOSELECTCOMP = 'po_config.PotbConfAutoSelectComp';

    /**
     * the column name for the PotbConfBinFromVendor field
     */
    const COL_POTBCONFBINFROMVENDOR = 'po_config.PotbConfBinFromVendor';

    /**
     * the column name for the PotbConfDfltStckCd field
     */
    const COL_POTBCONFDFLTSTCKCD = 'po_config.PotbConfDfltStckCd';

    /**
     * the column name for the PotbConfUseRemain field
     */
    const COL_POTBCONFUSEREMAIN = 'po_config.PotbConfUseRemain';

    /**
     * the column name for the PotbConfSameCompCost field
     */
    const COL_POTBCONFSAMECOMPCOST = 'po_config.PotbConfSameCompCost';

    /**
     * the column name for the PotbConfPassCode field
     */
    const COL_POTBCONFPASSCODE = 'po_config.PotbConfPassCode';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'po_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'po_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'po_config.dummy';

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
        self::TYPE_PHPNAME       => array('Potbconfkey', 'Potbconfsortpo', 'Potbconfcancorrshpdate', 'Potbconfackoretadate', 'Potbconfeditshipdate', 'Potbconfeditexptdate', 'Potbconfeditcancdate', 'Potbconfeditackdate', 'Potbconfexptdatedef', 'Potbconfheadgetdef', 'Potbconfreseq', 'Potbconfforcevxref', 'Potbconfqtydue', 'Potbconfwarndup', 'Potbconfforceporef', 'Potbconfdestwhse', 'Potbconfeditpoitemnotes', 'Potbconfloadpovxmnotes', 'Potbconfepoupdlastcost', 'Potbconfonetwoline', 'Potbconfuseordras', 'Potbconfaprvvendonly', 'Potbconfrecall', 'Potbconfrecallask', 'Potbconfreceivecost', 'Potbconfprocvari', 'Potbconfcostrcvryacct', 'Potbconfinvtyvariacct', 'Potbconfallowchgcost', 'Potbconfwarnrcptqty', 'Potbconferdispdate', 'Potbconfprovidelpo', 'Potbconfwarndiffwhse', 'Potbconfallocrcvd', 'Potbconfaskclose', 'Potbconftariffglacct', 'Potbconfshopglacct', 'Potbconfshoprate', 'Potbconfuseprime', 'Potbconfusewatch', 'Potbconfprtpowsugg', 'Potbconfpowslctyes', 'Potbconfpowgvendrpt', 'Potbconfpowgwipstatus', 'Potbconfpowgwipautogen', 'Potbconfbuyercontrol', 'Potbconfpowgoqmethod', 'Potbconffxpo', 'Potbconffxinv', 'Potbconfuselandcost', 'Potbconfbaselandamtqty', 'Potbconflandglacct', 'Potbconfwarnlandiner', 'Potbconflandamtmultwght', 'Potbconflanderedit', 'Potbconfhistcmplfab', 'Potbconfupdatevendcost', 'Potbconfaskupdate', 'Potbconfvxmroundpos', 'Potbconfxrefmaint', 'Potbconfuseidopts', 'Potbconfsrchvxmfirst', 'Potbconfopenlineonly', 'Potbconfitemdesc', 'Potbconfopenbalonly', 'Potbconfprtwhsedtl', 'Potbconfautorcpt', 'Potbconfdispitemcost', 'Potbconfdispcaseqty', 'Potbconfusefab', 'Potbconfshowitem', 'Potbconfscrapacct', 'Potbconfscrapvaripct', 'Potbconflifofifo', 'Potbconffabbomorkit', 'Potbconfallocepoer', 'Potbconffabprealloc', 'Potbconfforcefabepo', 'Potbconfpreviewcomplist', 'Potbconfnegcompusage', 'Potbconfautoselectcomp', 'Potbconfbinfromvendor', 'Potbconfdfltstckcd', 'Potbconfuseremain', 'Potbconfsamecompcost', 'Potbconfpasscode', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('potbconfkey', 'potbconfsortpo', 'potbconfcancorrshpdate', 'potbconfackoretadate', 'potbconfeditshipdate', 'potbconfeditexptdate', 'potbconfeditcancdate', 'potbconfeditackdate', 'potbconfexptdatedef', 'potbconfheadgetdef', 'potbconfreseq', 'potbconfforcevxref', 'potbconfqtydue', 'potbconfwarndup', 'potbconfforceporef', 'potbconfdestwhse', 'potbconfeditpoitemnotes', 'potbconfloadpovxmnotes', 'potbconfepoupdlastcost', 'potbconfonetwoline', 'potbconfuseordras', 'potbconfaprvvendonly', 'potbconfrecall', 'potbconfrecallask', 'potbconfreceivecost', 'potbconfprocvari', 'potbconfcostrcvryacct', 'potbconfinvtyvariacct', 'potbconfallowchgcost', 'potbconfwarnrcptqty', 'potbconferdispdate', 'potbconfprovidelpo', 'potbconfwarndiffwhse', 'potbconfallocrcvd', 'potbconfaskclose', 'potbconftariffglacct', 'potbconfshopglacct', 'potbconfshoprate', 'potbconfuseprime', 'potbconfusewatch', 'potbconfprtpowsugg', 'potbconfpowslctyes', 'potbconfpowgvendrpt', 'potbconfpowgwipstatus', 'potbconfpowgwipautogen', 'potbconfbuyercontrol', 'potbconfpowgoqmethod', 'potbconffxpo', 'potbconffxinv', 'potbconfuselandcost', 'potbconfbaselandamtqty', 'potbconflandglacct', 'potbconfwarnlandiner', 'potbconflandamtmultwght', 'potbconflanderedit', 'potbconfhistcmplfab', 'potbconfupdatevendcost', 'potbconfaskupdate', 'potbconfvxmroundpos', 'potbconfxrefmaint', 'potbconfuseidopts', 'potbconfsrchvxmfirst', 'potbconfopenlineonly', 'potbconfitemdesc', 'potbconfopenbalonly', 'potbconfprtwhsedtl', 'potbconfautorcpt', 'potbconfdispitemcost', 'potbconfdispcaseqty', 'potbconfusefab', 'potbconfshowitem', 'potbconfscrapacct', 'potbconfscrapvaripct', 'potbconflifofifo', 'potbconffabbomorkit', 'potbconfallocepoer', 'potbconffabprealloc', 'potbconfforcefabepo', 'potbconfpreviewcomplist', 'potbconfnegcompusage', 'potbconfautoselectcomp', 'potbconfbinfromvendor', 'potbconfdfltstckcd', 'potbconfuseremain', 'potbconfsamecompcost', 'potbconfpasscode', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigPoTableMap::COL_POTBCONFKEY, ConfigPoTableMap::COL_POTBCONFSORTPO, ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE, ConfigPoTableMap::COL_POTBCONFACKORETADATE, ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE, ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE, ConfigPoTableMap::COL_POTBCONFEDITCANCDATE, ConfigPoTableMap::COL_POTBCONFEDITACKDATE, ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF, ConfigPoTableMap::COL_POTBCONFHEADGETDEF, ConfigPoTableMap::COL_POTBCONFRESEQ, ConfigPoTableMap::COL_POTBCONFFORCEVXREF, ConfigPoTableMap::COL_POTBCONFQTYDUE, ConfigPoTableMap::COL_POTBCONFWARNDUP, ConfigPoTableMap::COL_POTBCONFFORCEPOREF, ConfigPoTableMap::COL_POTBCONFDESTWHSE, ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES, ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES, ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST, ConfigPoTableMap::COL_POTBCONFONETWOLINE, ConfigPoTableMap::COL_POTBCONFUSEORDRAS, ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY, ConfigPoTableMap::COL_POTBCONFRECALL, ConfigPoTableMap::COL_POTBCONFRECALLASK, ConfigPoTableMap::COL_POTBCONFRECEIVECOST, ConfigPoTableMap::COL_POTBCONFPROCVARI, ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT, ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT, ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST, ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY, ConfigPoTableMap::COL_POTBCONFERDISPDATE, ConfigPoTableMap::COL_POTBCONFPROVIDELPO, ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE, ConfigPoTableMap::COL_POTBCONFALLOCRCVD, ConfigPoTableMap::COL_POTBCONFASKCLOSE, ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT, ConfigPoTableMap::COL_POTBCONFSHOPGLACCT, ConfigPoTableMap::COL_POTBCONFSHOPRATE, ConfigPoTableMap::COL_POTBCONFUSEPRIME, ConfigPoTableMap::COL_POTBCONFUSEWATCH, ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG, ConfigPoTableMap::COL_POTBCONFPOWSLCTYES, ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT, ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS, ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN, ConfigPoTableMap::COL_POTBCONFBUYERCONTROL, ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD, ConfigPoTableMap::COL_POTBCONFFXPO, ConfigPoTableMap::COL_POTBCONFFXINV, ConfigPoTableMap::COL_POTBCONFUSELANDCOST, ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY, ConfigPoTableMap::COL_POTBCONFLANDGLACCT, ConfigPoTableMap::COL_POTBCONFWARNLANDINER, ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT, ConfigPoTableMap::COL_POTBCONFLANDEREDIT, ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB, ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST, ConfigPoTableMap::COL_POTBCONFASKUPDATE, ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS, ConfigPoTableMap::COL_POTBCONFXREFMAINT, ConfigPoTableMap::COL_POTBCONFUSEIDOPTS, ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST, ConfigPoTableMap::COL_POTBCONFOPENLINEONLY, ConfigPoTableMap::COL_POTBCONFITEMDESC, ConfigPoTableMap::COL_POTBCONFOPENBALONLY, ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL, ConfigPoTableMap::COL_POTBCONFAUTORCPT, ConfigPoTableMap::COL_POTBCONFDISPITEMCOST, ConfigPoTableMap::COL_POTBCONFDISPCASEQTY, ConfigPoTableMap::COL_POTBCONFUSEFAB, ConfigPoTableMap::COL_POTBCONFSHOWITEM, ConfigPoTableMap::COL_POTBCONFSCRAPACCT, ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT, ConfigPoTableMap::COL_POTBCONFLIFOFIFO, ConfigPoTableMap::COL_POTBCONFFABBOMORKIT, ConfigPoTableMap::COL_POTBCONFALLOCEPOER, ConfigPoTableMap::COL_POTBCONFFABPREALLOC, ConfigPoTableMap::COL_POTBCONFFORCEFABEPO, ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST, ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE, ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP, ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR, ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD, ConfigPoTableMap::COL_POTBCONFUSEREMAIN, ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST, ConfigPoTableMap::COL_POTBCONFPASSCODE, ConfigPoTableMap::COL_DATEUPDTD, ConfigPoTableMap::COL_TIMEUPDTD, ConfigPoTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PotbConfKey', 'PotbConfSortPo', 'PotbConfCancOrRshpDate', 'PotbConfAckOrEtaDate', 'PotbConfEditShipDate', 'PotbConfEditExptDate', 'PotbConfEditCancDate', 'PotbConfEditAckDate', 'PotbConfExptDateDef', 'PotbConfHeadGetDef', 'PotbConfReseq', 'PotbConfForceVxref', 'PotbConfQtyDue', 'PotbConfWarnDup', 'PotbConfForcePoRef', 'PotbConfDestWhse', 'PotbConfEditPoItemNotes', 'PotbConfLoadPoVxmNotes', 'PotbConfEpoUpdLastCost', 'PotbConfOneTwoLine', 'PotbConfUseOrdrAs', 'PotbConfAprvVendOnly', 'PotbConfRecAll', 'PotbConfRecAllAsk', 'PotbConfReceiveCost', 'PotbConfProcVari', 'PotbConfCostRcvryAcct', 'PotbConfInvtyVariAcct', 'PotbConfAllowChgCost', 'PotbConfWarnRcptQty', 'PotbConfErDispDate', 'PotbConfProvideLpo', 'PotbConfWarnDiffWhse', 'PotbConfAllocRcvd', 'PotbConfAskClose', 'PotbConfTariffGlAcct', 'PotbConfShopGlAcct', 'PotbConfShopRate', 'PotbConfUsePrime', 'PotbConfUseWatch', 'PotbConfPrtPowSugg', 'PotbConfPowSlctYes', 'PotbConfPowgVendRpt', 'PotbConfPowgWipStatus', 'PotbConfPowgWipAutoGen', 'PotbConfBuyerControl', 'PotbConfPowgOqMethod', 'PotbConfFxPo', 'PotbConfFxInv', 'PotbConfUseLandCost', 'PotbConfBaseLandAmtQty', 'PotbConfLandGlAcct', 'PotbConfWarnLandInEr', 'PotbConfLandAmtMultWght', 'PotbConfLandErEdit', 'PotbConfHistCmplFab', 'PotbConfUpDateVendCost', 'PotbConfAskUpDate', 'PotbConfVxmRoundPos', 'PotbConfXrefMaint', 'PotbConfUseIdOpts', 'PotbConfSrchVxmFirst', 'PotbConfOpenLineOnly', 'PotbConfItemDesc', 'PotbConfOpenBalOnly', 'PotbConfPrtWhseDtl', 'PotbConfAutoRcpt', 'PotbConfDispItemCost', 'PotbConfDispCaseQty', 'PotbConfUseFab', 'PotbConfShowItem', 'PotbConfScrapAcct', 'PotbConfScrapVariPct', 'PotbConfLifoFifo', 'PotbConfFabBomOrKit', 'PotbConfAllocEpoEr', 'PotbConfFabPrealloc', 'PotbConfForceFabEpo', 'PotbConfPreviewCompList', 'PotbConfNegCompUsage', 'PotbConfAutoSelectComp', 'PotbConfBinFromVendor', 'PotbConfDfltStckCd', 'PotbConfUseRemain', 'PotbConfSameCompCost', 'PotbConfPassCode', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Potbconfkey' => 0, 'Potbconfsortpo' => 1, 'Potbconfcancorrshpdate' => 2, 'Potbconfackoretadate' => 3, 'Potbconfeditshipdate' => 4, 'Potbconfeditexptdate' => 5, 'Potbconfeditcancdate' => 6, 'Potbconfeditackdate' => 7, 'Potbconfexptdatedef' => 8, 'Potbconfheadgetdef' => 9, 'Potbconfreseq' => 10, 'Potbconfforcevxref' => 11, 'Potbconfqtydue' => 12, 'Potbconfwarndup' => 13, 'Potbconfforceporef' => 14, 'Potbconfdestwhse' => 15, 'Potbconfeditpoitemnotes' => 16, 'Potbconfloadpovxmnotes' => 17, 'Potbconfepoupdlastcost' => 18, 'Potbconfonetwoline' => 19, 'Potbconfuseordras' => 20, 'Potbconfaprvvendonly' => 21, 'Potbconfrecall' => 22, 'Potbconfrecallask' => 23, 'Potbconfreceivecost' => 24, 'Potbconfprocvari' => 25, 'Potbconfcostrcvryacct' => 26, 'Potbconfinvtyvariacct' => 27, 'Potbconfallowchgcost' => 28, 'Potbconfwarnrcptqty' => 29, 'Potbconferdispdate' => 30, 'Potbconfprovidelpo' => 31, 'Potbconfwarndiffwhse' => 32, 'Potbconfallocrcvd' => 33, 'Potbconfaskclose' => 34, 'Potbconftariffglacct' => 35, 'Potbconfshopglacct' => 36, 'Potbconfshoprate' => 37, 'Potbconfuseprime' => 38, 'Potbconfusewatch' => 39, 'Potbconfprtpowsugg' => 40, 'Potbconfpowslctyes' => 41, 'Potbconfpowgvendrpt' => 42, 'Potbconfpowgwipstatus' => 43, 'Potbconfpowgwipautogen' => 44, 'Potbconfbuyercontrol' => 45, 'Potbconfpowgoqmethod' => 46, 'Potbconffxpo' => 47, 'Potbconffxinv' => 48, 'Potbconfuselandcost' => 49, 'Potbconfbaselandamtqty' => 50, 'Potbconflandglacct' => 51, 'Potbconfwarnlandiner' => 52, 'Potbconflandamtmultwght' => 53, 'Potbconflanderedit' => 54, 'Potbconfhistcmplfab' => 55, 'Potbconfupdatevendcost' => 56, 'Potbconfaskupdate' => 57, 'Potbconfvxmroundpos' => 58, 'Potbconfxrefmaint' => 59, 'Potbconfuseidopts' => 60, 'Potbconfsrchvxmfirst' => 61, 'Potbconfopenlineonly' => 62, 'Potbconfitemdesc' => 63, 'Potbconfopenbalonly' => 64, 'Potbconfprtwhsedtl' => 65, 'Potbconfautorcpt' => 66, 'Potbconfdispitemcost' => 67, 'Potbconfdispcaseqty' => 68, 'Potbconfusefab' => 69, 'Potbconfshowitem' => 70, 'Potbconfscrapacct' => 71, 'Potbconfscrapvaripct' => 72, 'Potbconflifofifo' => 73, 'Potbconffabbomorkit' => 74, 'Potbconfallocepoer' => 75, 'Potbconffabprealloc' => 76, 'Potbconfforcefabepo' => 77, 'Potbconfpreviewcomplist' => 78, 'Potbconfnegcompusage' => 79, 'Potbconfautoselectcomp' => 80, 'Potbconfbinfromvendor' => 81, 'Potbconfdfltstckcd' => 82, 'Potbconfuseremain' => 83, 'Potbconfsamecompcost' => 84, 'Potbconfpasscode' => 85, 'Dateupdtd' => 86, 'Timeupdtd' => 87, 'Dummy' => 88, ),
        self::TYPE_CAMELNAME     => array('potbconfkey' => 0, 'potbconfsortpo' => 1, 'potbconfcancorrshpdate' => 2, 'potbconfackoretadate' => 3, 'potbconfeditshipdate' => 4, 'potbconfeditexptdate' => 5, 'potbconfeditcancdate' => 6, 'potbconfeditackdate' => 7, 'potbconfexptdatedef' => 8, 'potbconfheadgetdef' => 9, 'potbconfreseq' => 10, 'potbconfforcevxref' => 11, 'potbconfqtydue' => 12, 'potbconfwarndup' => 13, 'potbconfforceporef' => 14, 'potbconfdestwhse' => 15, 'potbconfeditpoitemnotes' => 16, 'potbconfloadpovxmnotes' => 17, 'potbconfepoupdlastcost' => 18, 'potbconfonetwoline' => 19, 'potbconfuseordras' => 20, 'potbconfaprvvendonly' => 21, 'potbconfrecall' => 22, 'potbconfrecallask' => 23, 'potbconfreceivecost' => 24, 'potbconfprocvari' => 25, 'potbconfcostrcvryacct' => 26, 'potbconfinvtyvariacct' => 27, 'potbconfallowchgcost' => 28, 'potbconfwarnrcptqty' => 29, 'potbconferdispdate' => 30, 'potbconfprovidelpo' => 31, 'potbconfwarndiffwhse' => 32, 'potbconfallocrcvd' => 33, 'potbconfaskclose' => 34, 'potbconftariffglacct' => 35, 'potbconfshopglacct' => 36, 'potbconfshoprate' => 37, 'potbconfuseprime' => 38, 'potbconfusewatch' => 39, 'potbconfprtpowsugg' => 40, 'potbconfpowslctyes' => 41, 'potbconfpowgvendrpt' => 42, 'potbconfpowgwipstatus' => 43, 'potbconfpowgwipautogen' => 44, 'potbconfbuyercontrol' => 45, 'potbconfpowgoqmethod' => 46, 'potbconffxpo' => 47, 'potbconffxinv' => 48, 'potbconfuselandcost' => 49, 'potbconfbaselandamtqty' => 50, 'potbconflandglacct' => 51, 'potbconfwarnlandiner' => 52, 'potbconflandamtmultwght' => 53, 'potbconflanderedit' => 54, 'potbconfhistcmplfab' => 55, 'potbconfupdatevendcost' => 56, 'potbconfaskupdate' => 57, 'potbconfvxmroundpos' => 58, 'potbconfxrefmaint' => 59, 'potbconfuseidopts' => 60, 'potbconfsrchvxmfirst' => 61, 'potbconfopenlineonly' => 62, 'potbconfitemdesc' => 63, 'potbconfopenbalonly' => 64, 'potbconfprtwhsedtl' => 65, 'potbconfautorcpt' => 66, 'potbconfdispitemcost' => 67, 'potbconfdispcaseqty' => 68, 'potbconfusefab' => 69, 'potbconfshowitem' => 70, 'potbconfscrapacct' => 71, 'potbconfscrapvaripct' => 72, 'potbconflifofifo' => 73, 'potbconffabbomorkit' => 74, 'potbconfallocepoer' => 75, 'potbconffabprealloc' => 76, 'potbconfforcefabepo' => 77, 'potbconfpreviewcomplist' => 78, 'potbconfnegcompusage' => 79, 'potbconfautoselectcomp' => 80, 'potbconfbinfromvendor' => 81, 'potbconfdfltstckcd' => 82, 'potbconfuseremain' => 83, 'potbconfsamecompcost' => 84, 'potbconfpasscode' => 85, 'dateupdtd' => 86, 'timeupdtd' => 87, 'dummy' => 88, ),
        self::TYPE_COLNAME       => array(ConfigPoTableMap::COL_POTBCONFKEY => 0, ConfigPoTableMap::COL_POTBCONFSORTPO => 1, ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE => 2, ConfigPoTableMap::COL_POTBCONFACKORETADATE => 3, ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE => 4, ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE => 5, ConfigPoTableMap::COL_POTBCONFEDITCANCDATE => 6, ConfigPoTableMap::COL_POTBCONFEDITACKDATE => 7, ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF => 8, ConfigPoTableMap::COL_POTBCONFHEADGETDEF => 9, ConfigPoTableMap::COL_POTBCONFRESEQ => 10, ConfigPoTableMap::COL_POTBCONFFORCEVXREF => 11, ConfigPoTableMap::COL_POTBCONFQTYDUE => 12, ConfigPoTableMap::COL_POTBCONFWARNDUP => 13, ConfigPoTableMap::COL_POTBCONFFORCEPOREF => 14, ConfigPoTableMap::COL_POTBCONFDESTWHSE => 15, ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES => 16, ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES => 17, ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST => 18, ConfigPoTableMap::COL_POTBCONFONETWOLINE => 19, ConfigPoTableMap::COL_POTBCONFUSEORDRAS => 20, ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY => 21, ConfigPoTableMap::COL_POTBCONFRECALL => 22, ConfigPoTableMap::COL_POTBCONFRECALLASK => 23, ConfigPoTableMap::COL_POTBCONFRECEIVECOST => 24, ConfigPoTableMap::COL_POTBCONFPROCVARI => 25, ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT => 26, ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT => 27, ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST => 28, ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY => 29, ConfigPoTableMap::COL_POTBCONFERDISPDATE => 30, ConfigPoTableMap::COL_POTBCONFPROVIDELPO => 31, ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE => 32, ConfigPoTableMap::COL_POTBCONFALLOCRCVD => 33, ConfigPoTableMap::COL_POTBCONFASKCLOSE => 34, ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT => 35, ConfigPoTableMap::COL_POTBCONFSHOPGLACCT => 36, ConfigPoTableMap::COL_POTBCONFSHOPRATE => 37, ConfigPoTableMap::COL_POTBCONFUSEPRIME => 38, ConfigPoTableMap::COL_POTBCONFUSEWATCH => 39, ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG => 40, ConfigPoTableMap::COL_POTBCONFPOWSLCTYES => 41, ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT => 42, ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS => 43, ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN => 44, ConfigPoTableMap::COL_POTBCONFBUYERCONTROL => 45, ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD => 46, ConfigPoTableMap::COL_POTBCONFFXPO => 47, ConfigPoTableMap::COL_POTBCONFFXINV => 48, ConfigPoTableMap::COL_POTBCONFUSELANDCOST => 49, ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY => 50, ConfigPoTableMap::COL_POTBCONFLANDGLACCT => 51, ConfigPoTableMap::COL_POTBCONFWARNLANDINER => 52, ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT => 53, ConfigPoTableMap::COL_POTBCONFLANDEREDIT => 54, ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB => 55, ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST => 56, ConfigPoTableMap::COL_POTBCONFASKUPDATE => 57, ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS => 58, ConfigPoTableMap::COL_POTBCONFXREFMAINT => 59, ConfigPoTableMap::COL_POTBCONFUSEIDOPTS => 60, ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST => 61, ConfigPoTableMap::COL_POTBCONFOPENLINEONLY => 62, ConfigPoTableMap::COL_POTBCONFITEMDESC => 63, ConfigPoTableMap::COL_POTBCONFOPENBALONLY => 64, ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL => 65, ConfigPoTableMap::COL_POTBCONFAUTORCPT => 66, ConfigPoTableMap::COL_POTBCONFDISPITEMCOST => 67, ConfigPoTableMap::COL_POTBCONFDISPCASEQTY => 68, ConfigPoTableMap::COL_POTBCONFUSEFAB => 69, ConfigPoTableMap::COL_POTBCONFSHOWITEM => 70, ConfigPoTableMap::COL_POTBCONFSCRAPACCT => 71, ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT => 72, ConfigPoTableMap::COL_POTBCONFLIFOFIFO => 73, ConfigPoTableMap::COL_POTBCONFFABBOMORKIT => 74, ConfigPoTableMap::COL_POTBCONFALLOCEPOER => 75, ConfigPoTableMap::COL_POTBCONFFABPREALLOC => 76, ConfigPoTableMap::COL_POTBCONFFORCEFABEPO => 77, ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST => 78, ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE => 79, ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP => 80, ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR => 81, ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD => 82, ConfigPoTableMap::COL_POTBCONFUSEREMAIN => 83, ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST => 84, ConfigPoTableMap::COL_POTBCONFPASSCODE => 85, ConfigPoTableMap::COL_DATEUPDTD => 86, ConfigPoTableMap::COL_TIMEUPDTD => 87, ConfigPoTableMap::COL_DUMMY => 88, ),
        self::TYPE_FIELDNAME     => array('PotbConfKey' => 0, 'PotbConfSortPo' => 1, 'PotbConfCancOrRshpDate' => 2, 'PotbConfAckOrEtaDate' => 3, 'PotbConfEditShipDate' => 4, 'PotbConfEditExptDate' => 5, 'PotbConfEditCancDate' => 6, 'PotbConfEditAckDate' => 7, 'PotbConfExptDateDef' => 8, 'PotbConfHeadGetDef' => 9, 'PotbConfReseq' => 10, 'PotbConfForceVxref' => 11, 'PotbConfQtyDue' => 12, 'PotbConfWarnDup' => 13, 'PotbConfForcePoRef' => 14, 'PotbConfDestWhse' => 15, 'PotbConfEditPoItemNotes' => 16, 'PotbConfLoadPoVxmNotes' => 17, 'PotbConfEpoUpdLastCost' => 18, 'PotbConfOneTwoLine' => 19, 'PotbConfUseOrdrAs' => 20, 'PotbConfAprvVendOnly' => 21, 'PotbConfRecAll' => 22, 'PotbConfRecAllAsk' => 23, 'PotbConfReceiveCost' => 24, 'PotbConfProcVari' => 25, 'PotbConfCostRcvryAcct' => 26, 'PotbConfInvtyVariAcct' => 27, 'PotbConfAllowChgCost' => 28, 'PotbConfWarnRcptQty' => 29, 'PotbConfErDispDate' => 30, 'PotbConfProvideLpo' => 31, 'PotbConfWarnDiffWhse' => 32, 'PotbConfAllocRcvd' => 33, 'PotbConfAskClose' => 34, 'PotbConfTariffGlAcct' => 35, 'PotbConfShopGlAcct' => 36, 'PotbConfShopRate' => 37, 'PotbConfUsePrime' => 38, 'PotbConfUseWatch' => 39, 'PotbConfPrtPowSugg' => 40, 'PotbConfPowSlctYes' => 41, 'PotbConfPowgVendRpt' => 42, 'PotbConfPowgWipStatus' => 43, 'PotbConfPowgWipAutoGen' => 44, 'PotbConfBuyerControl' => 45, 'PotbConfPowgOqMethod' => 46, 'PotbConfFxPo' => 47, 'PotbConfFxInv' => 48, 'PotbConfUseLandCost' => 49, 'PotbConfBaseLandAmtQty' => 50, 'PotbConfLandGlAcct' => 51, 'PotbConfWarnLandInEr' => 52, 'PotbConfLandAmtMultWght' => 53, 'PotbConfLandErEdit' => 54, 'PotbConfHistCmplFab' => 55, 'PotbConfUpDateVendCost' => 56, 'PotbConfAskUpDate' => 57, 'PotbConfVxmRoundPos' => 58, 'PotbConfXrefMaint' => 59, 'PotbConfUseIdOpts' => 60, 'PotbConfSrchVxmFirst' => 61, 'PotbConfOpenLineOnly' => 62, 'PotbConfItemDesc' => 63, 'PotbConfOpenBalOnly' => 64, 'PotbConfPrtWhseDtl' => 65, 'PotbConfAutoRcpt' => 66, 'PotbConfDispItemCost' => 67, 'PotbConfDispCaseQty' => 68, 'PotbConfUseFab' => 69, 'PotbConfShowItem' => 70, 'PotbConfScrapAcct' => 71, 'PotbConfScrapVariPct' => 72, 'PotbConfLifoFifo' => 73, 'PotbConfFabBomOrKit' => 74, 'PotbConfAllocEpoEr' => 75, 'PotbConfFabPrealloc' => 76, 'PotbConfForceFabEpo' => 77, 'PotbConfPreviewCompList' => 78, 'PotbConfNegCompUsage' => 79, 'PotbConfAutoSelectComp' => 80, 'PotbConfBinFromVendor' => 81, 'PotbConfDfltStckCd' => 82, 'PotbConfUseRemain' => 83, 'PotbConfSameCompCost' => 84, 'PotbConfPassCode' => 85, 'DateUpdtd' => 86, 'TimeUpdtd' => 87, 'dummy' => 88, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
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
        $this->setName('po_config');
        $this->setPhpName('ConfigPo');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigPo');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PotbConfKey', 'Potbconfkey', 'INTEGER', true, 1, 0);
        $this->addColumn('PotbConfSortPo', 'Potbconfsortpo', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfCancOrRshpDate', 'Potbconfcancorrshpdate', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfAckOrEtaDate', 'Potbconfackoretadate', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfEditShipDate', 'Potbconfeditshipdate', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfEditExptDate', 'Potbconfeditexptdate', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfEditCancDate', 'Potbconfeditcancdate', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfEditAckDate', 'Potbconfeditackdate', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfExptDateDef', 'Potbconfexptdatedef', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfHeadGetDef', 'Potbconfheadgetdef', 'INTEGER', false, 1, null);
        $this->addColumn('PotbConfReseq', 'Potbconfreseq', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfForceVxref', 'Potbconfforcevxref', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfQtyDue', 'Potbconfqtydue', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfWarnDup', 'Potbconfwarndup', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfForcePoRef', 'Potbconfforceporef', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfDestWhse', 'Potbconfdestwhse', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfEditPoItemNotes', 'Potbconfeditpoitemnotes', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfLoadPoVxmNotes', 'Potbconfloadpovxmnotes', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfEpoUpdLastCost', 'Potbconfepoupdlastcost', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfOneTwoLine', 'Potbconfonetwoline', 'INTEGER', false, 1, null);
        $this->addColumn('PotbConfUseOrdrAs', 'Potbconfuseordras', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfAprvVendOnly', 'Potbconfaprvvendonly', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfRecAll', 'Potbconfrecall', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfRecAllAsk', 'Potbconfrecallask', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfReceiveCost', 'Potbconfreceivecost', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfProcVari', 'Potbconfprocvari', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfCostRcvryAcct', 'Potbconfcostrcvryacct', 'VARCHAR', false, 9, null);
        $this->addColumn('PotbConfInvtyVariAcct', 'Potbconfinvtyvariacct', 'VARCHAR', false, 9, null);
        $this->addColumn('PotbConfAllowChgCost', 'Potbconfallowchgcost', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfWarnRcptQty', 'Potbconfwarnrcptqty', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfErDispDate', 'Potbconferdispdate', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfProvideLpo', 'Potbconfprovidelpo', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfWarnDiffWhse', 'Potbconfwarndiffwhse', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfAllocRcvd', 'Potbconfallocrcvd', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfAskClose', 'Potbconfaskclose', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfTariffGlAcct', 'Potbconftariffglacct', 'VARCHAR', false, 9, null);
        $this->addColumn('PotbConfShopGlAcct', 'Potbconfshopglacct', 'VARCHAR', false, 9, null);
        $this->addColumn('PotbConfShopRate', 'Potbconfshoprate', 'DECIMAL', false, 20, null);
        $this->addColumn('PotbConfUsePrime', 'Potbconfuseprime', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfUseWatch', 'Potbconfusewatch', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPrtPowSugg', 'Potbconfprtpowsugg', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPowSlctYes', 'Potbconfpowslctyes', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPowgVendRpt', 'Potbconfpowgvendrpt', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPowgWipStatus', 'Potbconfpowgwipstatus', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPowgWipAutoGen', 'Potbconfpowgwipautogen', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfBuyerControl', 'Potbconfbuyercontrol', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPowgOqMethod', 'Potbconfpowgoqmethod', 'INTEGER', false, 1, null);
        $this->addColumn('PotbConfFxPo', 'Potbconffxpo', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfFxInv', 'Potbconffxinv', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfUseLandCost', 'Potbconfuselandcost', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfBaseLandAmtQty', 'Potbconfbaselandamtqty', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfLandGlAcct', 'Potbconflandglacct', 'VARCHAR', false, 9, null);
        $this->addColumn('PotbConfWarnLandInEr', 'Potbconfwarnlandiner', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfLandAmtMultWght', 'Potbconflandamtmultwght', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfLandErEdit', 'Potbconflanderedit', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfHistCmplFab', 'Potbconfhistcmplfab', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfUpDateVendCost', 'Potbconfupdatevendcost', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfAskUpDate', 'Potbconfaskupdate', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfVxmRoundPos', 'Potbconfvxmroundpos', 'INTEGER', false, 1, null);
        $this->addColumn('PotbConfXrefMaint', 'Potbconfxrefmaint', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfUseIdOpts', 'Potbconfuseidopts', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfSrchVxmFirst', 'Potbconfsrchvxmfirst', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfOpenLineOnly', 'Potbconfopenlineonly', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfItemDesc', 'Potbconfitemdesc', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfOpenBalOnly', 'Potbconfopenbalonly', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPrtWhseDtl', 'Potbconfprtwhsedtl', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfAutoRcpt', 'Potbconfautorcpt', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfDispItemCost', 'Potbconfdispitemcost', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfDispCaseQty', 'Potbconfdispcaseqty', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfUseFab', 'Potbconfusefab', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfShowItem', 'Potbconfshowitem', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfScrapAcct', 'Potbconfscrapacct', 'VARCHAR', false, 9, null);
        $this->addColumn('PotbConfScrapVariPct', 'Potbconfscrapvaripct', 'DECIMAL', false, 20, null);
        $this->addColumn('PotbConfLifoFifo', 'Potbconflifofifo', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfFabBomOrKit', 'Potbconffabbomorkit', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfAllocEpoEr', 'Potbconfallocepoer', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfFabPrealloc', 'Potbconffabprealloc', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfForceFabEpo', 'Potbconfforcefabepo', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPreviewCompList', 'Potbconfpreviewcomplist', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfNegCompUsage', 'Potbconfnegcompusage', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfAutoSelectComp', 'Potbconfautoselectcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfBinFromVendor', 'Potbconfbinfromvendor', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfDfltStckCd', 'Potbconfdfltstckcd', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfUseRemain', 'Potbconfuseremain', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfSameCompCost', 'Potbconfsamecompcost', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbConfPassCode', 'Potbconfpasscode', 'VARCHAR', false, 6, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Potbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Potbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Potbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Potbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Potbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Potbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Potbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigPoTableMap::CLASS_DEFAULT : ConfigPoTableMap::OM_CLASS;
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
     * @return array           (ConfigPo object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigPoTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigPoTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigPoTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigPoTableMap::OM_CLASS;
            /** @var ConfigPo $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigPoTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigPoTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigPoTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigPo $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigPoTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFKEY);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFSORTPO);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFACKORETADATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFEDITCANCDATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFEDITACKDATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFHEADGETDEF);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFRESEQ);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFFORCEVXREF);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFQTYDUE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFWARNDUP);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFFORCEPOREF);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFDESTWHSE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFONETWOLINE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSEORDRAS);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFRECALL);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFRECALLASK);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFRECEIVECOST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPROCVARI);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFERDISPDATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPROVIDELPO);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFALLOCRCVD);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFASKCLOSE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFSHOPGLACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFSHOPRATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSEPRIME);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSEWATCH);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPOWSLCTYES);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFBUYERCONTROL);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFFXPO);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFFXINV);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSELANDCOST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFLANDGLACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFWARNLANDINER);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFLANDEREDIT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFASKUPDATE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFXREFMAINT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSEIDOPTS);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFOPENLINEONLY);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFITEMDESC);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFOPENBALONLY);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFAUTORCPT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFDISPITEMCOST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFDISPCASEQTY);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSEFAB);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFSHOWITEM);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFSCRAPACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFLIFOFIFO);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFFABBOMORKIT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFALLOCEPOER);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFFABPREALLOC);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFFORCEFABEPO);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSEREMAIN);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFPASSCODE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PotbConfKey');
            $criteria->addSelectColumn($alias . '.PotbConfSortPo');
            $criteria->addSelectColumn($alias . '.PotbConfCancOrRshpDate');
            $criteria->addSelectColumn($alias . '.PotbConfAckOrEtaDate');
            $criteria->addSelectColumn($alias . '.PotbConfEditShipDate');
            $criteria->addSelectColumn($alias . '.PotbConfEditExptDate');
            $criteria->addSelectColumn($alias . '.PotbConfEditCancDate');
            $criteria->addSelectColumn($alias . '.PotbConfEditAckDate');
            $criteria->addSelectColumn($alias . '.PotbConfExptDateDef');
            $criteria->addSelectColumn($alias . '.PotbConfHeadGetDef');
            $criteria->addSelectColumn($alias . '.PotbConfReseq');
            $criteria->addSelectColumn($alias . '.PotbConfForceVxref');
            $criteria->addSelectColumn($alias . '.PotbConfQtyDue');
            $criteria->addSelectColumn($alias . '.PotbConfWarnDup');
            $criteria->addSelectColumn($alias . '.PotbConfForcePoRef');
            $criteria->addSelectColumn($alias . '.PotbConfDestWhse');
            $criteria->addSelectColumn($alias . '.PotbConfEditPoItemNotes');
            $criteria->addSelectColumn($alias . '.PotbConfLoadPoVxmNotes');
            $criteria->addSelectColumn($alias . '.PotbConfEpoUpdLastCost');
            $criteria->addSelectColumn($alias . '.PotbConfOneTwoLine');
            $criteria->addSelectColumn($alias . '.PotbConfUseOrdrAs');
            $criteria->addSelectColumn($alias . '.PotbConfAprvVendOnly');
            $criteria->addSelectColumn($alias . '.PotbConfRecAll');
            $criteria->addSelectColumn($alias . '.PotbConfRecAllAsk');
            $criteria->addSelectColumn($alias . '.PotbConfReceiveCost');
            $criteria->addSelectColumn($alias . '.PotbConfProcVari');
            $criteria->addSelectColumn($alias . '.PotbConfCostRcvryAcct');
            $criteria->addSelectColumn($alias . '.PotbConfInvtyVariAcct');
            $criteria->addSelectColumn($alias . '.PotbConfAllowChgCost');
            $criteria->addSelectColumn($alias . '.PotbConfWarnRcptQty');
            $criteria->addSelectColumn($alias . '.PotbConfErDispDate');
            $criteria->addSelectColumn($alias . '.PotbConfProvideLpo');
            $criteria->addSelectColumn($alias . '.PotbConfWarnDiffWhse');
            $criteria->addSelectColumn($alias . '.PotbConfAllocRcvd');
            $criteria->addSelectColumn($alias . '.PotbConfAskClose');
            $criteria->addSelectColumn($alias . '.PotbConfTariffGlAcct');
            $criteria->addSelectColumn($alias . '.PotbConfShopGlAcct');
            $criteria->addSelectColumn($alias . '.PotbConfShopRate');
            $criteria->addSelectColumn($alias . '.PotbConfUsePrime');
            $criteria->addSelectColumn($alias . '.PotbConfUseWatch');
            $criteria->addSelectColumn($alias . '.PotbConfPrtPowSugg');
            $criteria->addSelectColumn($alias . '.PotbConfPowSlctYes');
            $criteria->addSelectColumn($alias . '.PotbConfPowgVendRpt');
            $criteria->addSelectColumn($alias . '.PotbConfPowgWipStatus');
            $criteria->addSelectColumn($alias . '.PotbConfPowgWipAutoGen');
            $criteria->addSelectColumn($alias . '.PotbConfBuyerControl');
            $criteria->addSelectColumn($alias . '.PotbConfPowgOqMethod');
            $criteria->addSelectColumn($alias . '.PotbConfFxPo');
            $criteria->addSelectColumn($alias . '.PotbConfFxInv');
            $criteria->addSelectColumn($alias . '.PotbConfUseLandCost');
            $criteria->addSelectColumn($alias . '.PotbConfBaseLandAmtQty');
            $criteria->addSelectColumn($alias . '.PotbConfLandGlAcct');
            $criteria->addSelectColumn($alias . '.PotbConfWarnLandInEr');
            $criteria->addSelectColumn($alias . '.PotbConfLandAmtMultWght');
            $criteria->addSelectColumn($alias . '.PotbConfLandErEdit');
            $criteria->addSelectColumn($alias . '.PotbConfHistCmplFab');
            $criteria->addSelectColumn($alias . '.PotbConfUpDateVendCost');
            $criteria->addSelectColumn($alias . '.PotbConfAskUpDate');
            $criteria->addSelectColumn($alias . '.PotbConfVxmRoundPos');
            $criteria->addSelectColumn($alias . '.PotbConfXrefMaint');
            $criteria->addSelectColumn($alias . '.PotbConfUseIdOpts');
            $criteria->addSelectColumn($alias . '.PotbConfSrchVxmFirst');
            $criteria->addSelectColumn($alias . '.PotbConfOpenLineOnly');
            $criteria->addSelectColumn($alias . '.PotbConfItemDesc');
            $criteria->addSelectColumn($alias . '.PotbConfOpenBalOnly');
            $criteria->addSelectColumn($alias . '.PotbConfPrtWhseDtl');
            $criteria->addSelectColumn($alias . '.PotbConfAutoRcpt');
            $criteria->addSelectColumn($alias . '.PotbConfDispItemCost');
            $criteria->addSelectColumn($alias . '.PotbConfDispCaseQty');
            $criteria->addSelectColumn($alias . '.PotbConfUseFab');
            $criteria->addSelectColumn($alias . '.PotbConfShowItem');
            $criteria->addSelectColumn($alias . '.PotbConfScrapAcct');
            $criteria->addSelectColumn($alias . '.PotbConfScrapVariPct');
            $criteria->addSelectColumn($alias . '.PotbConfLifoFifo');
            $criteria->addSelectColumn($alias . '.PotbConfFabBomOrKit');
            $criteria->addSelectColumn($alias . '.PotbConfAllocEpoEr');
            $criteria->addSelectColumn($alias . '.PotbConfFabPrealloc');
            $criteria->addSelectColumn($alias . '.PotbConfForceFabEpo');
            $criteria->addSelectColumn($alias . '.PotbConfPreviewCompList');
            $criteria->addSelectColumn($alias . '.PotbConfNegCompUsage');
            $criteria->addSelectColumn($alias . '.PotbConfAutoSelectComp');
            $criteria->addSelectColumn($alias . '.PotbConfBinFromVendor');
            $criteria->addSelectColumn($alias . '.PotbConfDfltStckCd');
            $criteria->addSelectColumn($alias . '.PotbConfUseRemain');
            $criteria->addSelectColumn($alias . '.PotbConfSameCompCost');
            $criteria->addSelectColumn($alias . '.PotbConfPassCode');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigPoTableMap::DATABASE_NAME)->getTable(ConfigPoTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigPoTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigPoTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigPoTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigPo or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigPo object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPoTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigPo) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigPoTableMap::DATABASE_NAME);
            $criteria->add(ConfigPoTableMap::COL_POTBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigPoQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigPoTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigPoTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the po_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigPoQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigPo or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigPo object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPoTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigPo object
        }


        // Set the correct dbName
        $query = ConfigPoQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigPoTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigPoTableMap::buildTableMap();
