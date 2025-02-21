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
    const NUM_COLUMNS = 93;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 93;

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
     * the column name for the PotbConfErAdd2Po field
     */
    const COL_POTBCONFERADD2PO = 'po_config.PotbConfErAdd2Po';

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
     * the column name for the PotbConfUseLandCost field
     */
    const COL_POTBCONFUSELANDCOST = 'po_config.PotbConfUseLandCost';

    /**
     * the column name for the PotbConfBaseLandAmtQty field
     */
    const COL_POTBCONFBASELANDAMTQTY = 'po_config.PotbConfBaseLandAmtQty';

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
     * the column name for the PotbConfLandGlAcct field
     */
    const COL_POTBCONFLANDGLACCT = 'po_config.PotbConfLandGlAcct';

    /**
     * the column name for the PotbLandMpfGlAcct field
     */
    const COL_POTBLANDMPFGLACCT = 'po_config.PotbLandMpfGlAcct';

    /**
     * the column name for the PotbLandHmfGlAcct field
     */
    const COL_POTBLANDHMFGLACCT = 'po_config.PotbLandHmfGlAcct';

    /**
     * the column name for the PotbLandDsetGlAcct field
     */
    const COL_POTBLANDDSETGLACCT = 'po_config.PotbLandDsetGlAcct';

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
        self::TYPE_PHPNAME       => array('Potbconfkey', 'Potbconfsortpo', 'Potbconfcancorrshpdate', 'Potbconfackoretadate', 'Potbconfeditshipdate', 'Potbconfeditexptdate', 'Potbconfeditcancdate', 'Potbconfeditackdate', 'Potbconfexptdatedef', 'Potbconfheadgetdef', 'Potbconfreseq', 'Potbconfforcevxref', 'Potbconfqtydue', 'Potbconfwarndup', 'Potbconfforceporef', 'Potbconfdestwhse', 'Potbconfeditpoitemnotes', 'Potbconfloadpovxmnotes', 'Potbconfepoupdlastcost', 'Potbconfrecall', 'Potbconfrecallask', 'Potbconfreceivecost', 'Potbconfprocvari', 'Potbconfcostrcvryacct', 'Potbconfinvtyvariacct', 'Potbconfallowchgcost', 'Potbconfwarnrcptqty', 'Potbconferdispdate', 'Potbconfprovidelpo', 'Potbconfwarndiffwhse', 'Potbconfallocrcvd', 'Potbconfaskclose', 'Potbconferadd2po', 'Potbconftariffglacct', 'Potbconfshopglacct', 'Potbconfshoprate', 'Potbconfuseprime', 'Potbconfusewatch', 'Potbconfprtpowsugg', 'Potbconfpowslctyes', 'Potbconfpowgvendrpt', 'Potbconfpowgwipstatus', 'Potbconfpowgwipautogen', 'Potbconfbuyercontrol', 'Potbconfpowgoqmethod', 'Potbconffxpo', 'Potbconffxinv', 'Potbconfupdatevendcost', 'Potbconfaskupdate', 'Potbconfvxmroundpos', 'Potbconfxrefmaint', 'Potbconfuseidopts', 'Potbconfsrchvxmfirst', 'Potbconfopenlineonly', 'Potbconfitemdesc', 'Potbconfopenbalonly', 'Potbconfprtwhsedtl', 'Potbconfautorcpt', 'Potbconfdispitemcost', 'Potbconfdispcaseqty', 'Potbconfonetwoline', 'Potbconfuseordras', 'Potbconfaprvvendonly', 'Potbconfusefab', 'Potbconfshowitem', 'Potbconfscrapacct', 'Potbconfscrapvaripct', 'Potbconflifofifo', 'Potbconffabbomorkit', 'Potbconfallocepoer', 'Potbconffabprealloc', 'Potbconfforcefabepo', 'Potbconfpreviewcomplist', 'Potbconfnegcompusage', 'Potbconfautoselectcomp', 'Potbconfbinfromvendor', 'Potbconfdfltstckcd', 'Potbconfuseremain', 'Potbconfsamecompcost', 'Potbconfpasscode', 'Potbconfuselandcost', 'Potbconfbaselandamtqty', 'Potbconfwarnlandiner', 'Potbconflandamtmultwght', 'Potbconflanderedit', 'Potbconfhistcmplfab', 'Potbconflandglacct', 'Potblandmpfglacct', 'Potblandhmfglacct', 'Potblanddsetglacct', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('potbconfkey', 'potbconfsortpo', 'potbconfcancorrshpdate', 'potbconfackoretadate', 'potbconfeditshipdate', 'potbconfeditexptdate', 'potbconfeditcancdate', 'potbconfeditackdate', 'potbconfexptdatedef', 'potbconfheadgetdef', 'potbconfreseq', 'potbconfforcevxref', 'potbconfqtydue', 'potbconfwarndup', 'potbconfforceporef', 'potbconfdestwhse', 'potbconfeditpoitemnotes', 'potbconfloadpovxmnotes', 'potbconfepoupdlastcost', 'potbconfrecall', 'potbconfrecallask', 'potbconfreceivecost', 'potbconfprocvari', 'potbconfcostrcvryacct', 'potbconfinvtyvariacct', 'potbconfallowchgcost', 'potbconfwarnrcptqty', 'potbconferdispdate', 'potbconfprovidelpo', 'potbconfwarndiffwhse', 'potbconfallocrcvd', 'potbconfaskclose', 'potbconferadd2po', 'potbconftariffglacct', 'potbconfshopglacct', 'potbconfshoprate', 'potbconfuseprime', 'potbconfusewatch', 'potbconfprtpowsugg', 'potbconfpowslctyes', 'potbconfpowgvendrpt', 'potbconfpowgwipstatus', 'potbconfpowgwipautogen', 'potbconfbuyercontrol', 'potbconfpowgoqmethod', 'potbconffxpo', 'potbconffxinv', 'potbconfupdatevendcost', 'potbconfaskupdate', 'potbconfvxmroundpos', 'potbconfxrefmaint', 'potbconfuseidopts', 'potbconfsrchvxmfirst', 'potbconfopenlineonly', 'potbconfitemdesc', 'potbconfopenbalonly', 'potbconfprtwhsedtl', 'potbconfautorcpt', 'potbconfdispitemcost', 'potbconfdispcaseqty', 'potbconfonetwoline', 'potbconfuseordras', 'potbconfaprvvendonly', 'potbconfusefab', 'potbconfshowitem', 'potbconfscrapacct', 'potbconfscrapvaripct', 'potbconflifofifo', 'potbconffabbomorkit', 'potbconfallocepoer', 'potbconffabprealloc', 'potbconfforcefabepo', 'potbconfpreviewcomplist', 'potbconfnegcompusage', 'potbconfautoselectcomp', 'potbconfbinfromvendor', 'potbconfdfltstckcd', 'potbconfuseremain', 'potbconfsamecompcost', 'potbconfpasscode', 'potbconfuselandcost', 'potbconfbaselandamtqty', 'potbconfwarnlandiner', 'potbconflandamtmultwght', 'potbconflanderedit', 'potbconfhistcmplfab', 'potbconflandglacct', 'potblandmpfglacct', 'potblandhmfglacct', 'potblanddsetglacct', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigPoTableMap::COL_POTBCONFKEY, ConfigPoTableMap::COL_POTBCONFSORTPO, ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE, ConfigPoTableMap::COL_POTBCONFACKORETADATE, ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE, ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE, ConfigPoTableMap::COL_POTBCONFEDITCANCDATE, ConfigPoTableMap::COL_POTBCONFEDITACKDATE, ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF, ConfigPoTableMap::COL_POTBCONFHEADGETDEF, ConfigPoTableMap::COL_POTBCONFRESEQ, ConfigPoTableMap::COL_POTBCONFFORCEVXREF, ConfigPoTableMap::COL_POTBCONFQTYDUE, ConfigPoTableMap::COL_POTBCONFWARNDUP, ConfigPoTableMap::COL_POTBCONFFORCEPOREF, ConfigPoTableMap::COL_POTBCONFDESTWHSE, ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES, ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES, ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST, ConfigPoTableMap::COL_POTBCONFRECALL, ConfigPoTableMap::COL_POTBCONFRECALLASK, ConfigPoTableMap::COL_POTBCONFRECEIVECOST, ConfigPoTableMap::COL_POTBCONFPROCVARI, ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT, ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT, ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST, ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY, ConfigPoTableMap::COL_POTBCONFERDISPDATE, ConfigPoTableMap::COL_POTBCONFPROVIDELPO, ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE, ConfigPoTableMap::COL_POTBCONFALLOCRCVD, ConfigPoTableMap::COL_POTBCONFASKCLOSE, ConfigPoTableMap::COL_POTBCONFERADD2PO, ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT, ConfigPoTableMap::COL_POTBCONFSHOPGLACCT, ConfigPoTableMap::COL_POTBCONFSHOPRATE, ConfigPoTableMap::COL_POTBCONFUSEPRIME, ConfigPoTableMap::COL_POTBCONFUSEWATCH, ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG, ConfigPoTableMap::COL_POTBCONFPOWSLCTYES, ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT, ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS, ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN, ConfigPoTableMap::COL_POTBCONFBUYERCONTROL, ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD, ConfigPoTableMap::COL_POTBCONFFXPO, ConfigPoTableMap::COL_POTBCONFFXINV, ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST, ConfigPoTableMap::COL_POTBCONFASKUPDATE, ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS, ConfigPoTableMap::COL_POTBCONFXREFMAINT, ConfigPoTableMap::COL_POTBCONFUSEIDOPTS, ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST, ConfigPoTableMap::COL_POTBCONFOPENLINEONLY, ConfigPoTableMap::COL_POTBCONFITEMDESC, ConfigPoTableMap::COL_POTBCONFOPENBALONLY, ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL, ConfigPoTableMap::COL_POTBCONFAUTORCPT, ConfigPoTableMap::COL_POTBCONFDISPITEMCOST, ConfigPoTableMap::COL_POTBCONFDISPCASEQTY, ConfigPoTableMap::COL_POTBCONFONETWOLINE, ConfigPoTableMap::COL_POTBCONFUSEORDRAS, ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY, ConfigPoTableMap::COL_POTBCONFUSEFAB, ConfigPoTableMap::COL_POTBCONFSHOWITEM, ConfigPoTableMap::COL_POTBCONFSCRAPACCT, ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT, ConfigPoTableMap::COL_POTBCONFLIFOFIFO, ConfigPoTableMap::COL_POTBCONFFABBOMORKIT, ConfigPoTableMap::COL_POTBCONFALLOCEPOER, ConfigPoTableMap::COL_POTBCONFFABPREALLOC, ConfigPoTableMap::COL_POTBCONFFORCEFABEPO, ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST, ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE, ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP, ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR, ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD, ConfigPoTableMap::COL_POTBCONFUSEREMAIN, ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST, ConfigPoTableMap::COL_POTBCONFPASSCODE, ConfigPoTableMap::COL_POTBCONFUSELANDCOST, ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY, ConfigPoTableMap::COL_POTBCONFWARNLANDINER, ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT, ConfigPoTableMap::COL_POTBCONFLANDEREDIT, ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB, ConfigPoTableMap::COL_POTBCONFLANDGLACCT, ConfigPoTableMap::COL_POTBLANDMPFGLACCT, ConfigPoTableMap::COL_POTBLANDHMFGLACCT, ConfigPoTableMap::COL_POTBLANDDSETGLACCT, ConfigPoTableMap::COL_DATEUPDTD, ConfigPoTableMap::COL_TIMEUPDTD, ConfigPoTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PotbConfKey', 'PotbConfSortPo', 'PotbConfCancOrRshpDate', 'PotbConfAckOrEtaDate', 'PotbConfEditShipDate', 'PotbConfEditExptDate', 'PotbConfEditCancDate', 'PotbConfEditAckDate', 'PotbConfExptDateDef', 'PotbConfHeadGetDef', 'PotbConfReseq', 'PotbConfForceVxref', 'PotbConfQtyDue', 'PotbConfWarnDup', 'PotbConfForcePoRef', 'PotbConfDestWhse', 'PotbConfEditPoItemNotes', 'PotbConfLoadPoVxmNotes', 'PotbConfEpoUpdLastCost', 'PotbConfRecAll', 'PotbConfRecAllAsk', 'PotbConfReceiveCost', 'PotbConfProcVari', 'PotbConfCostRcvryAcct', 'PotbConfInvtyVariAcct', 'PotbConfAllowChgCost', 'PotbConfWarnRcptQty', 'PotbConfErDispDate', 'PotbConfProvideLpo', 'PotbConfWarnDiffWhse', 'PotbConfAllocRcvd', 'PotbConfAskClose', 'PotbConfErAdd2Po', 'PotbConfTariffGlAcct', 'PotbConfShopGlAcct', 'PotbConfShopRate', 'PotbConfUsePrime', 'PotbConfUseWatch', 'PotbConfPrtPowSugg', 'PotbConfPowSlctYes', 'PotbConfPowgVendRpt', 'PotbConfPowgWipStatus', 'PotbConfPowgWipAutoGen', 'PotbConfBuyerControl', 'PotbConfPowgOqMethod', 'PotbConfFxPo', 'PotbConfFxInv', 'PotbConfUpDateVendCost', 'PotbConfAskUpDate', 'PotbConfVxmRoundPos', 'PotbConfXrefMaint', 'PotbConfUseIdOpts', 'PotbConfSrchVxmFirst', 'PotbConfOpenLineOnly', 'PotbConfItemDesc', 'PotbConfOpenBalOnly', 'PotbConfPrtWhseDtl', 'PotbConfAutoRcpt', 'PotbConfDispItemCost', 'PotbConfDispCaseQty', 'PotbConfOneTwoLine', 'PotbConfUseOrdrAs', 'PotbConfAprvVendOnly', 'PotbConfUseFab', 'PotbConfShowItem', 'PotbConfScrapAcct', 'PotbConfScrapVariPct', 'PotbConfLifoFifo', 'PotbConfFabBomOrKit', 'PotbConfAllocEpoEr', 'PotbConfFabPrealloc', 'PotbConfForceFabEpo', 'PotbConfPreviewCompList', 'PotbConfNegCompUsage', 'PotbConfAutoSelectComp', 'PotbConfBinFromVendor', 'PotbConfDfltStckCd', 'PotbConfUseRemain', 'PotbConfSameCompCost', 'PotbConfPassCode', 'PotbConfUseLandCost', 'PotbConfBaseLandAmtQty', 'PotbConfWarnLandInEr', 'PotbConfLandAmtMultWght', 'PotbConfLandErEdit', 'PotbConfHistCmplFab', 'PotbConfLandGlAcct', 'PotbLandMpfGlAcct', 'PotbLandHmfGlAcct', 'PotbLandDsetGlAcct', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Potbconfkey' => 0, 'Potbconfsortpo' => 1, 'Potbconfcancorrshpdate' => 2, 'Potbconfackoretadate' => 3, 'Potbconfeditshipdate' => 4, 'Potbconfeditexptdate' => 5, 'Potbconfeditcancdate' => 6, 'Potbconfeditackdate' => 7, 'Potbconfexptdatedef' => 8, 'Potbconfheadgetdef' => 9, 'Potbconfreseq' => 10, 'Potbconfforcevxref' => 11, 'Potbconfqtydue' => 12, 'Potbconfwarndup' => 13, 'Potbconfforceporef' => 14, 'Potbconfdestwhse' => 15, 'Potbconfeditpoitemnotes' => 16, 'Potbconfloadpovxmnotes' => 17, 'Potbconfepoupdlastcost' => 18, 'Potbconfrecall' => 19, 'Potbconfrecallask' => 20, 'Potbconfreceivecost' => 21, 'Potbconfprocvari' => 22, 'Potbconfcostrcvryacct' => 23, 'Potbconfinvtyvariacct' => 24, 'Potbconfallowchgcost' => 25, 'Potbconfwarnrcptqty' => 26, 'Potbconferdispdate' => 27, 'Potbconfprovidelpo' => 28, 'Potbconfwarndiffwhse' => 29, 'Potbconfallocrcvd' => 30, 'Potbconfaskclose' => 31, 'Potbconferadd2po' => 32, 'Potbconftariffglacct' => 33, 'Potbconfshopglacct' => 34, 'Potbconfshoprate' => 35, 'Potbconfuseprime' => 36, 'Potbconfusewatch' => 37, 'Potbconfprtpowsugg' => 38, 'Potbconfpowslctyes' => 39, 'Potbconfpowgvendrpt' => 40, 'Potbconfpowgwipstatus' => 41, 'Potbconfpowgwipautogen' => 42, 'Potbconfbuyercontrol' => 43, 'Potbconfpowgoqmethod' => 44, 'Potbconffxpo' => 45, 'Potbconffxinv' => 46, 'Potbconfupdatevendcost' => 47, 'Potbconfaskupdate' => 48, 'Potbconfvxmroundpos' => 49, 'Potbconfxrefmaint' => 50, 'Potbconfuseidopts' => 51, 'Potbconfsrchvxmfirst' => 52, 'Potbconfopenlineonly' => 53, 'Potbconfitemdesc' => 54, 'Potbconfopenbalonly' => 55, 'Potbconfprtwhsedtl' => 56, 'Potbconfautorcpt' => 57, 'Potbconfdispitemcost' => 58, 'Potbconfdispcaseqty' => 59, 'Potbconfonetwoline' => 60, 'Potbconfuseordras' => 61, 'Potbconfaprvvendonly' => 62, 'Potbconfusefab' => 63, 'Potbconfshowitem' => 64, 'Potbconfscrapacct' => 65, 'Potbconfscrapvaripct' => 66, 'Potbconflifofifo' => 67, 'Potbconffabbomorkit' => 68, 'Potbconfallocepoer' => 69, 'Potbconffabprealloc' => 70, 'Potbconfforcefabepo' => 71, 'Potbconfpreviewcomplist' => 72, 'Potbconfnegcompusage' => 73, 'Potbconfautoselectcomp' => 74, 'Potbconfbinfromvendor' => 75, 'Potbconfdfltstckcd' => 76, 'Potbconfuseremain' => 77, 'Potbconfsamecompcost' => 78, 'Potbconfpasscode' => 79, 'Potbconfuselandcost' => 80, 'Potbconfbaselandamtqty' => 81, 'Potbconfwarnlandiner' => 82, 'Potbconflandamtmultwght' => 83, 'Potbconflanderedit' => 84, 'Potbconfhistcmplfab' => 85, 'Potbconflandglacct' => 86, 'Potblandmpfglacct' => 87, 'Potblandhmfglacct' => 88, 'Potblanddsetglacct' => 89, 'Dateupdtd' => 90, 'Timeupdtd' => 91, 'Dummy' => 92, ),
        self::TYPE_CAMELNAME     => array('potbconfkey' => 0, 'potbconfsortpo' => 1, 'potbconfcancorrshpdate' => 2, 'potbconfackoretadate' => 3, 'potbconfeditshipdate' => 4, 'potbconfeditexptdate' => 5, 'potbconfeditcancdate' => 6, 'potbconfeditackdate' => 7, 'potbconfexptdatedef' => 8, 'potbconfheadgetdef' => 9, 'potbconfreseq' => 10, 'potbconfforcevxref' => 11, 'potbconfqtydue' => 12, 'potbconfwarndup' => 13, 'potbconfforceporef' => 14, 'potbconfdestwhse' => 15, 'potbconfeditpoitemnotes' => 16, 'potbconfloadpovxmnotes' => 17, 'potbconfepoupdlastcost' => 18, 'potbconfrecall' => 19, 'potbconfrecallask' => 20, 'potbconfreceivecost' => 21, 'potbconfprocvari' => 22, 'potbconfcostrcvryacct' => 23, 'potbconfinvtyvariacct' => 24, 'potbconfallowchgcost' => 25, 'potbconfwarnrcptqty' => 26, 'potbconferdispdate' => 27, 'potbconfprovidelpo' => 28, 'potbconfwarndiffwhse' => 29, 'potbconfallocrcvd' => 30, 'potbconfaskclose' => 31, 'potbconferadd2po' => 32, 'potbconftariffglacct' => 33, 'potbconfshopglacct' => 34, 'potbconfshoprate' => 35, 'potbconfuseprime' => 36, 'potbconfusewatch' => 37, 'potbconfprtpowsugg' => 38, 'potbconfpowslctyes' => 39, 'potbconfpowgvendrpt' => 40, 'potbconfpowgwipstatus' => 41, 'potbconfpowgwipautogen' => 42, 'potbconfbuyercontrol' => 43, 'potbconfpowgoqmethod' => 44, 'potbconffxpo' => 45, 'potbconffxinv' => 46, 'potbconfupdatevendcost' => 47, 'potbconfaskupdate' => 48, 'potbconfvxmroundpos' => 49, 'potbconfxrefmaint' => 50, 'potbconfuseidopts' => 51, 'potbconfsrchvxmfirst' => 52, 'potbconfopenlineonly' => 53, 'potbconfitemdesc' => 54, 'potbconfopenbalonly' => 55, 'potbconfprtwhsedtl' => 56, 'potbconfautorcpt' => 57, 'potbconfdispitemcost' => 58, 'potbconfdispcaseqty' => 59, 'potbconfonetwoline' => 60, 'potbconfuseordras' => 61, 'potbconfaprvvendonly' => 62, 'potbconfusefab' => 63, 'potbconfshowitem' => 64, 'potbconfscrapacct' => 65, 'potbconfscrapvaripct' => 66, 'potbconflifofifo' => 67, 'potbconffabbomorkit' => 68, 'potbconfallocepoer' => 69, 'potbconffabprealloc' => 70, 'potbconfforcefabepo' => 71, 'potbconfpreviewcomplist' => 72, 'potbconfnegcompusage' => 73, 'potbconfautoselectcomp' => 74, 'potbconfbinfromvendor' => 75, 'potbconfdfltstckcd' => 76, 'potbconfuseremain' => 77, 'potbconfsamecompcost' => 78, 'potbconfpasscode' => 79, 'potbconfuselandcost' => 80, 'potbconfbaselandamtqty' => 81, 'potbconfwarnlandiner' => 82, 'potbconflandamtmultwght' => 83, 'potbconflanderedit' => 84, 'potbconfhistcmplfab' => 85, 'potbconflandglacct' => 86, 'potblandmpfglacct' => 87, 'potblandhmfglacct' => 88, 'potblanddsetglacct' => 89, 'dateupdtd' => 90, 'timeupdtd' => 91, 'dummy' => 92, ),
        self::TYPE_COLNAME       => array(ConfigPoTableMap::COL_POTBCONFKEY => 0, ConfigPoTableMap::COL_POTBCONFSORTPO => 1, ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE => 2, ConfigPoTableMap::COL_POTBCONFACKORETADATE => 3, ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE => 4, ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE => 5, ConfigPoTableMap::COL_POTBCONFEDITCANCDATE => 6, ConfigPoTableMap::COL_POTBCONFEDITACKDATE => 7, ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF => 8, ConfigPoTableMap::COL_POTBCONFHEADGETDEF => 9, ConfigPoTableMap::COL_POTBCONFRESEQ => 10, ConfigPoTableMap::COL_POTBCONFFORCEVXREF => 11, ConfigPoTableMap::COL_POTBCONFQTYDUE => 12, ConfigPoTableMap::COL_POTBCONFWARNDUP => 13, ConfigPoTableMap::COL_POTBCONFFORCEPOREF => 14, ConfigPoTableMap::COL_POTBCONFDESTWHSE => 15, ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES => 16, ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES => 17, ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST => 18, ConfigPoTableMap::COL_POTBCONFRECALL => 19, ConfigPoTableMap::COL_POTBCONFRECALLASK => 20, ConfigPoTableMap::COL_POTBCONFRECEIVECOST => 21, ConfigPoTableMap::COL_POTBCONFPROCVARI => 22, ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT => 23, ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT => 24, ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST => 25, ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY => 26, ConfigPoTableMap::COL_POTBCONFERDISPDATE => 27, ConfigPoTableMap::COL_POTBCONFPROVIDELPO => 28, ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE => 29, ConfigPoTableMap::COL_POTBCONFALLOCRCVD => 30, ConfigPoTableMap::COL_POTBCONFASKCLOSE => 31, ConfigPoTableMap::COL_POTBCONFERADD2PO => 32, ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT => 33, ConfigPoTableMap::COL_POTBCONFSHOPGLACCT => 34, ConfigPoTableMap::COL_POTBCONFSHOPRATE => 35, ConfigPoTableMap::COL_POTBCONFUSEPRIME => 36, ConfigPoTableMap::COL_POTBCONFUSEWATCH => 37, ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG => 38, ConfigPoTableMap::COL_POTBCONFPOWSLCTYES => 39, ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT => 40, ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS => 41, ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN => 42, ConfigPoTableMap::COL_POTBCONFBUYERCONTROL => 43, ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD => 44, ConfigPoTableMap::COL_POTBCONFFXPO => 45, ConfigPoTableMap::COL_POTBCONFFXINV => 46, ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST => 47, ConfigPoTableMap::COL_POTBCONFASKUPDATE => 48, ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS => 49, ConfigPoTableMap::COL_POTBCONFXREFMAINT => 50, ConfigPoTableMap::COL_POTBCONFUSEIDOPTS => 51, ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST => 52, ConfigPoTableMap::COL_POTBCONFOPENLINEONLY => 53, ConfigPoTableMap::COL_POTBCONFITEMDESC => 54, ConfigPoTableMap::COL_POTBCONFOPENBALONLY => 55, ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL => 56, ConfigPoTableMap::COL_POTBCONFAUTORCPT => 57, ConfigPoTableMap::COL_POTBCONFDISPITEMCOST => 58, ConfigPoTableMap::COL_POTBCONFDISPCASEQTY => 59, ConfigPoTableMap::COL_POTBCONFONETWOLINE => 60, ConfigPoTableMap::COL_POTBCONFUSEORDRAS => 61, ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY => 62, ConfigPoTableMap::COL_POTBCONFUSEFAB => 63, ConfigPoTableMap::COL_POTBCONFSHOWITEM => 64, ConfigPoTableMap::COL_POTBCONFSCRAPACCT => 65, ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT => 66, ConfigPoTableMap::COL_POTBCONFLIFOFIFO => 67, ConfigPoTableMap::COL_POTBCONFFABBOMORKIT => 68, ConfigPoTableMap::COL_POTBCONFALLOCEPOER => 69, ConfigPoTableMap::COL_POTBCONFFABPREALLOC => 70, ConfigPoTableMap::COL_POTBCONFFORCEFABEPO => 71, ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST => 72, ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE => 73, ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP => 74, ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR => 75, ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD => 76, ConfigPoTableMap::COL_POTBCONFUSEREMAIN => 77, ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST => 78, ConfigPoTableMap::COL_POTBCONFPASSCODE => 79, ConfigPoTableMap::COL_POTBCONFUSELANDCOST => 80, ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY => 81, ConfigPoTableMap::COL_POTBCONFWARNLANDINER => 82, ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT => 83, ConfigPoTableMap::COL_POTBCONFLANDEREDIT => 84, ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB => 85, ConfigPoTableMap::COL_POTBCONFLANDGLACCT => 86, ConfigPoTableMap::COL_POTBLANDMPFGLACCT => 87, ConfigPoTableMap::COL_POTBLANDHMFGLACCT => 88, ConfigPoTableMap::COL_POTBLANDDSETGLACCT => 89, ConfigPoTableMap::COL_DATEUPDTD => 90, ConfigPoTableMap::COL_TIMEUPDTD => 91, ConfigPoTableMap::COL_DUMMY => 92, ),
        self::TYPE_FIELDNAME     => array('PotbConfKey' => 0, 'PotbConfSortPo' => 1, 'PotbConfCancOrRshpDate' => 2, 'PotbConfAckOrEtaDate' => 3, 'PotbConfEditShipDate' => 4, 'PotbConfEditExptDate' => 5, 'PotbConfEditCancDate' => 6, 'PotbConfEditAckDate' => 7, 'PotbConfExptDateDef' => 8, 'PotbConfHeadGetDef' => 9, 'PotbConfReseq' => 10, 'PotbConfForceVxref' => 11, 'PotbConfQtyDue' => 12, 'PotbConfWarnDup' => 13, 'PotbConfForcePoRef' => 14, 'PotbConfDestWhse' => 15, 'PotbConfEditPoItemNotes' => 16, 'PotbConfLoadPoVxmNotes' => 17, 'PotbConfEpoUpdLastCost' => 18, 'PotbConfRecAll' => 19, 'PotbConfRecAllAsk' => 20, 'PotbConfReceiveCost' => 21, 'PotbConfProcVari' => 22, 'PotbConfCostRcvryAcct' => 23, 'PotbConfInvtyVariAcct' => 24, 'PotbConfAllowChgCost' => 25, 'PotbConfWarnRcptQty' => 26, 'PotbConfErDispDate' => 27, 'PotbConfProvideLpo' => 28, 'PotbConfWarnDiffWhse' => 29, 'PotbConfAllocRcvd' => 30, 'PotbConfAskClose' => 31, 'PotbConfErAdd2Po' => 32, 'PotbConfTariffGlAcct' => 33, 'PotbConfShopGlAcct' => 34, 'PotbConfShopRate' => 35, 'PotbConfUsePrime' => 36, 'PotbConfUseWatch' => 37, 'PotbConfPrtPowSugg' => 38, 'PotbConfPowSlctYes' => 39, 'PotbConfPowgVendRpt' => 40, 'PotbConfPowgWipStatus' => 41, 'PotbConfPowgWipAutoGen' => 42, 'PotbConfBuyerControl' => 43, 'PotbConfPowgOqMethod' => 44, 'PotbConfFxPo' => 45, 'PotbConfFxInv' => 46, 'PotbConfUpDateVendCost' => 47, 'PotbConfAskUpDate' => 48, 'PotbConfVxmRoundPos' => 49, 'PotbConfXrefMaint' => 50, 'PotbConfUseIdOpts' => 51, 'PotbConfSrchVxmFirst' => 52, 'PotbConfOpenLineOnly' => 53, 'PotbConfItemDesc' => 54, 'PotbConfOpenBalOnly' => 55, 'PotbConfPrtWhseDtl' => 56, 'PotbConfAutoRcpt' => 57, 'PotbConfDispItemCost' => 58, 'PotbConfDispCaseQty' => 59, 'PotbConfOneTwoLine' => 60, 'PotbConfUseOrdrAs' => 61, 'PotbConfAprvVendOnly' => 62, 'PotbConfUseFab' => 63, 'PotbConfShowItem' => 64, 'PotbConfScrapAcct' => 65, 'PotbConfScrapVariPct' => 66, 'PotbConfLifoFifo' => 67, 'PotbConfFabBomOrKit' => 68, 'PotbConfAllocEpoEr' => 69, 'PotbConfFabPrealloc' => 70, 'PotbConfForceFabEpo' => 71, 'PotbConfPreviewCompList' => 72, 'PotbConfNegCompUsage' => 73, 'PotbConfAutoSelectComp' => 74, 'PotbConfBinFromVendor' => 75, 'PotbConfDfltStckCd' => 76, 'PotbConfUseRemain' => 77, 'PotbConfSameCompCost' => 78, 'PotbConfPassCode' => 79, 'PotbConfUseLandCost' => 80, 'PotbConfBaseLandAmtQty' => 81, 'PotbConfWarnLandInEr' => 82, 'PotbConfLandAmtMultWght' => 83, 'PotbConfLandErEdit' => 84, 'PotbConfHistCmplFab' => 85, 'PotbConfLandGlAcct' => 86, 'PotbLandMpfGlAcct' => 87, 'PotbLandHmfGlAcct' => 88, 'PotbLandDsetGlAcct' => 89, 'DateUpdtd' => 90, 'TimeUpdtd' => 91, 'dummy' => 92, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, )
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
        $this->addPrimaryKey('PotbConfKey', 'Potbconfkey', 'INTEGER', true, 1, 1);
        $this->addColumn('PotbConfSortPo', 'Potbconfsortpo', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfCancOrRshpDate', 'Potbconfcancorrshpdate', 'CHAR', true, null, 'C');
        $this->addColumn('PotbConfAckOrEtaDate', 'Potbconfackoretadate', 'CHAR', true, null, 'A');
        $this->addColumn('PotbConfEditShipDate', 'Potbconfeditshipdate', 'CHAR', true, null, 'D');
        $this->addColumn('PotbConfEditExptDate', 'Potbconfeditexptdate', 'CHAR', true, null, 'H');
        $this->addColumn('PotbConfEditCancDate', 'Potbconfeditcancdate', 'CHAR', true, null, 'H');
        $this->addColumn('PotbConfEditAckDate', 'Potbconfeditackdate', 'CHAR', true, null, 'D');
        $this->addColumn('PotbConfExptDateDef', 'Potbconfexptdatedef', 'CHAR', true, null, 'P');
        $this->addColumn('PotbConfHeadGetDef', 'Potbconfheadgetdef', 'INTEGER', true, 1, 1);
        $this->addColumn('PotbConfReseq', 'Potbconfreseq', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfForceVxref', 'Potbconfforcevxref', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfQtyDue', 'Potbconfqtydue', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfWarnDup', 'Potbconfwarndup', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfForcePoRef', 'Potbconfforceporef', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfDestWhse', 'Potbconfdestwhse', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfEditPoItemNotes', 'Potbconfeditpoitemnotes', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfLoadPoVxmNotes', 'Potbconfloadpovxmnotes', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfEpoUpdLastCost', 'Potbconfepoupdlastcost', 'CHAR', true, null, 'Y');
        $this->addColumn('PotbConfRecAll', 'Potbconfrecall', 'CHAR', true, null, 'Y');
        $this->addColumn('PotbConfRecAllAsk', 'Potbconfrecallask', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfReceiveCost', 'Potbconfreceivecost', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfProcVari', 'Potbconfprocvari', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfCostRcvryAcct', 'Potbconfcostrcvryacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotbConfInvtyVariAcct', 'Potbconfinvtyvariacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotbConfAllowChgCost', 'Potbconfallowchgcost', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfWarnRcptQty', 'Potbconfwarnrcptqty', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfErDispDate', 'Potbconferdispdate', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfProvideLpo', 'Potbconfprovidelpo', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfWarnDiffWhse', 'Potbconfwarndiffwhse', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfAllocRcvd', 'Potbconfallocrcvd', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfAskClose', 'Potbconfaskclose', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfErAdd2Po', 'Potbconferadd2po', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfTariffGlAcct', 'Potbconftariffglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotbConfShopGlAcct', 'Potbconfshopglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotbConfShopRate', 'Potbconfshoprate', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotbConfUsePrime', 'Potbconfuseprime', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfUseWatch', 'Potbconfusewatch', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfPrtPowSugg', 'Potbconfprtpowsugg', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfPowSlctYes', 'Potbconfpowslctyes', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfPowgVendRpt', 'Potbconfpowgvendrpt', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfPowgWipStatus', 'Potbconfpowgwipstatus', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfPowgWipAutoGen', 'Potbconfpowgwipautogen', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfBuyerControl', 'Potbconfbuyercontrol', 'CHAR', true, null, 'V');
        $this->addColumn('PotbConfPowgOqMethod', 'Potbconfpowgoqmethod', 'INTEGER', true, 1, 1);
        $this->addColumn('PotbConfFxPo', 'Potbconffxpo', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfFxInv', 'Potbconffxinv', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfUpDateVendCost', 'Potbconfupdatevendcost', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfAskUpDate', 'Potbconfaskupdate', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfVxmRoundPos', 'Potbconfvxmroundpos', 'INTEGER', true, 1, 3);
        $this->addColumn('PotbConfXrefMaint', 'Potbconfxrefmaint', 'CHAR', true, null, 'O');
        $this->addColumn('PotbConfUseIdOpts', 'Potbconfuseidopts', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfSrchVxmFirst', 'Potbconfsrchvxmfirst', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfOpenLineOnly', 'Potbconfopenlineonly', 'CHAR', true, null, 'Y');
        $this->addColumn('PotbConfItemDesc', 'Potbconfitemdesc', 'CHAR', true, null, 'Y');
        $this->addColumn('PotbConfOpenBalOnly', 'Potbconfopenbalonly', 'CHAR', true, null, 'Y');
        $this->addColumn('PotbConfPrtWhseDtl', 'Potbconfprtwhsedtl', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfAutoRcpt', 'Potbconfautorcpt', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfDispItemCost', 'Potbconfdispitemcost', 'CHAR', true, null, 'Y');
        $this->addColumn('PotbConfDispCaseQty', 'Potbconfdispcaseqty', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfOneTwoLine', 'Potbconfonetwoline', 'INTEGER', true, 1, 1);
        $this->addColumn('PotbConfUseOrdrAs', 'Potbconfuseordras', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfAprvVendOnly', 'Potbconfaprvvendonly', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfUseFab', 'Potbconfusefab', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfShowItem', 'Potbconfshowitem', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfScrapAcct', 'Potbconfscrapacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotbConfScrapVariPct', 'Potbconfscrapvaripct', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotbConfLifoFifo', 'Potbconflifofifo', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfFabBomOrKit', 'Potbconffabbomorkit', 'CHAR', true, null, 'K');
        $this->addColumn('PotbConfAllocEpoEr', 'Potbconfallocepoer', 'CHAR', true, null, 'P');
        $this->addColumn('PotbConfFabPrealloc', 'Potbconffabprealloc', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfForceFabEpo', 'Potbconfforcefabepo', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfPreviewCompList', 'Potbconfpreviewcomplist', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfNegCompUsage', 'Potbconfnegcompusage', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfAutoSelectComp', 'Potbconfautoselectcomp', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfBinFromVendor', 'Potbconfbinfromvendor', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfDfltStckCd', 'Potbconfdfltstckcd', 'CHAR', true, null, 'S');
        $this->addColumn('PotbConfUseRemain', 'Potbconfuseremain', 'CHAR', true, null, 'Y');
        $this->addColumn('PotbConfSameCompCost', 'Potbconfsamecompcost', 'CHAR', true, null, 'K');
        $this->addColumn('PotbConfPassCode', 'Potbconfpasscode', 'VARCHAR', true, 6, '');
        $this->addColumn('PotbConfUseLandCost', 'Potbconfuselandcost', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfBaseLandAmtQty', 'Potbconfbaselandamtqty', 'CHAR', true, null, 'A');
        $this->addColumn('PotbConfWarnLandInEr', 'Potbconfwarnlandiner', 'CHAR', true, null, 'N');
        $this->addColumn('PotbConfLandAmtMultWght', 'Potbconflandamtmultwght', 'CHAR', true, null, 'A');
        $this->addColumn('PotbConfLandErEdit', 'Potbconflanderedit', 'CHAR', true, null, 'Y');
        $this->addColumn('PotbConfHistCmplFab', 'Potbconfhistcmplfab', 'CHAR', true, null, 'C');
        $this->addColumn('PotbConfLandGlAcct', 'Potbconflandglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotbLandMpfGlAcct', 'Potblandmpfglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotbLandHmfGlAcct', 'Potblandhmfglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotbLandDsetGlAcct', 'Potblanddsetglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
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
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFERADD2PO);
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
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFONETWOLINE);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSEORDRAS);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY);
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
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFUSELANDCOST);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFWARNLANDINER);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFLANDEREDIT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBCONFLANDGLACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBLANDMPFGLACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBLANDHMFGLACCT);
            $criteria->addSelectColumn(ConfigPoTableMap::COL_POTBLANDDSETGLACCT);
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
            $criteria->addSelectColumn($alias . '.PotbConfErAdd2Po');
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
            $criteria->addSelectColumn($alias . '.PotbConfOneTwoLine');
            $criteria->addSelectColumn($alias . '.PotbConfUseOrdrAs');
            $criteria->addSelectColumn($alias . '.PotbConfAprvVendOnly');
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
            $criteria->addSelectColumn($alias . '.PotbConfUseLandCost');
            $criteria->addSelectColumn($alias . '.PotbConfBaseLandAmtQty');
            $criteria->addSelectColumn($alias . '.PotbConfWarnLandInEr');
            $criteria->addSelectColumn($alias . '.PotbConfLandAmtMultWght');
            $criteria->addSelectColumn($alias . '.PotbConfLandErEdit');
            $criteria->addSelectColumn($alias . '.PotbConfHistCmplFab');
            $criteria->addSelectColumn($alias . '.PotbConfLandGlAcct');
            $criteria->addSelectColumn($alias . '.PotbLandMpfGlAcct');
            $criteria->addSelectColumn($alias . '.PotbLandHmfGlAcct');
            $criteria->addSelectColumn($alias . '.PotbLandDsetGlAcct');
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
