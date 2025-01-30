<?php

namespace Map;

use \ConfigSalesOrder;
use \ConfigSalesOrderQuery;
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
 * This class defines the structure of the 'so_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigSalesOrderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigSalesOrderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigSalesOrder';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigSalesOrder';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 227;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 227;

    /**
     * the column name for the OetbConfKey field
     */
    const COL_OETBCONFKEY = 'so_config.OetbConfKey';

    /**
     * the column name for the OetbConfGlIfac field
     */
    const COL_OETBCONFGLIFAC = 'so_config.OetbConfGlIfac';

    /**
     * the column name for the OetbConfInIfac field
     */
    const COL_OETBCONFINIFAC = 'so_config.OetbConfInIfac';

    /**
     * the column name for the OetbConfRelIvty field
     */
    const COL_OETBCONFRELIVTY = 'so_config.OetbConfRelIvty';

    /**
     * the column name for the OetbConfUseOrdrNbr field
     */
    const COL_OETBCONFUSEORDRNBR = 'so_config.OetbConfUseOrdrNbr';

    /**
     * the column name for the OetbConfDefRqstDate field
     */
    const COL_OETBCONFDEFRQSTDATE = 'so_config.OetbConfDefRqstDate';

    /**
     * the column name for the OetbConfUseCancDate field
     */
    const COL_OETBCONFUSECANCDATE = 'so_config.OetbConfUseCancDate';

    /**
     * the column name for the OetbConfShowSp field
     */
    const COL_OETBCONFSHOWSP = 'so_config.OetbConfShowSp';

    /**
     * the column name for the OetbConfJrnlSort field
     */
    const COL_OETBCONFJRNLSORT = 'so_config.OetbConfJrnlSort';

    /**
     * the column name for the OetbConfUsePrepSoOpt field
     */
    const COL_OETBCONFUSEPREPSOOPT = 'so_config.OetbConfUsePrepSoOpt';

    /**
     * the column name for the OetbConfDispBillTo field
     */
    const COL_OETBCONFDISPBILLTO = 'so_config.OetbConfDispBillTo';

    /**
     * the column name for the OetbConfSlctFlm field
     */
    const COL_OETBCONFSLCTFLM = 'so_config.OetbConfSlctFlm';

    /**
     * the column name for the OetbCon3UseStockPull field
     */
    const COL_OETBCON3USESTOCKPULL = 'so_config.OetbCon3UseStockPull';

    /**
     * the column name for the OetbConfQtyToShip field
     */
    const COL_OETBCONFQTYTOSHIP = 'so_config.OetbConfQtyToShip';

    /**
     * the column name for the OetbConfQtyToShipDef field
     */
    const COL_OETBCONFQTYTOSHIPDEF = 'so_config.OetbConfQtyToShipDef';

    /**
     * the column name for the OetbConfDfltOrdrQty field
     */
    const COL_OETBCONFDFLTORDRQTY = 'so_config.OetbConfDfltOrdrQty';

    /**
     * the column name for the OetbConfAllocQtyToShip field
     */
    const COL_OETBCONFALLOCQTYTOSHIP = 'so_config.OetbConfAllocQtyToShip';

    /**
     * the column name for the OetbConfOverAllocQts field
     */
    const COL_OETBCONFOVERALLOCQTS = 'so_config.OetbConfOverAllocQts';

    /**
     * the column name for the OetbCon3CompleteLotBin field
     */
    const COL_OETBCON3COMPLETELOTBIN = 'so_config.OetbCon3CompleteLotBin';

    /**
     * the column name for the OetbCon3RqtsOpt field
     */
    const COL_OETBCON3RQTSOPT = 'so_config.OetbCon3RqtsOpt';

    /**
     * the column name for the OetbCon2ShipCompHold field
     */
    const COL_OETBCON2SHIPCOMPHOLD = 'so_config.OetbCon2ShipCompHold';

    /**
     * the column name for the OetbCon3UseSaleForecast field
     */
    const COL_OETBCON3USESALEFORECAST = 'so_config.OetbCon3UseSaleForecast';

    /**
     * the column name for the OetbConfVerfStopNeg field
     */
    const COL_OETBCONFVERFSTOPNEG = 'so_config.OetbConfVerfStopNeg';

    /**
     * the column name for the OetbConfVerfAudtRept field
     */
    const COL_OETBCONFVERFAUDTREPT = 'so_config.OetbConfVerfAudtRept';

    /**
     * the column name for the OetbConfAgeLevlDisp field
     */
    const COL_OETBCONFAGELEVLDISP = 'so_config.OetbConfAgeLevlDisp';

    /**
     * the column name for the OetbConfAgeAllTime field
     */
    const COL_OETBCONFAGEALLTIME = 'so_config.OetbConfAgeAllTime';

    /**
     * the column name for the OetbConfAgeAtHold field
     */
    const COL_OETBCONFAGEATHOLD = 'so_config.OetbConfAgeAtHold';

    /**
     * the column name for the OetbConfShowAtLevl field
     */
    const COL_OETBCONFSHOWATLEVL = 'so_config.OetbConfShowAtLevl';

    /**
     * the column name for the OetbConfShowItem field
     */
    const COL_OETBCONFSHOWITEM = 'so_config.OetbConfShowItem';

    /**
     * the column name for the OetbConfStopPnt field
     */
    const COL_OETBCONFSTOPPNT = 'so_config.OetbConfStopPnt';

    /**
     * the column name for the OetbConfPricWind field
     */
    const COL_OETBCONFPRICWIND = 'so_config.OetbConfPricWind';

    /**
     * the column name for the OetbConfShowCost field
     */
    const COL_OETBCONFSHOWCOST = 'so_config.OetbConfShowCost';

    /**
     * the column name for the OetbConfCostToUse field
     */
    const COL_OETBCONFCOSTTOUSE = 'so_config.OetbConfCostToUse';

    /**
     * the column name for the OetbConfShowMarg field
     */
    const COL_OETBCONFSHOWMARG = 'so_config.OetbConfShowMarg';

    /**
     * the column name for the OetbConfFxOe field
     */
    const COL_OETBCONFFXOE = 'so_config.OetbConfFxOe';

    /**
     * the column name for the OetbConfFxInv field
     */
    const COL_OETBCONFFXINV = 'so_config.OetbConfFxInv';

    /**
     * the column name for the OetbConfDispVia field
     */
    const COL_OETBCONFDISPVIA = 'so_config.OetbConfDispVia';

    /**
     * the column name for the OetbConfDispCaseQty field
     */
    const COL_OETBCONFDISPCASEQTY = 'so_config.OetbConfDispCaseQty';

    /**
     * the column name for the OetbConfFrtIn field
     */
    const COL_OETBCONFFRTIN = 'so_config.OetbConfFrtIn';

    /**
     * the column name for the OetbConfFrtInGlAcct field
     */
    const COL_OETBCONFFRTINGLACCT = 'so_config.OetbConfFrtInGlAcct';

    /**
     * the column name for the OetbConfMinCharge field
     */
    const COL_OETBCONFMINCHARGE = 'so_config.OetbConfMinCharge';

    /**
     * the column name for the OetbConfMinChrgGlAcct field
     */
    const COL_OETBCONFMINCHRGGLACCT = 'so_config.OetbConfMinChrgGlAcct';

    /**
     * the column name for the OetbConfDropShipChrg field
     */
    const COL_OETBCONFDROPSHIPCHRG = 'so_config.OetbConfDropShipChrg';

    /**
     * the column name for the OetbConfDropShpGlAcct field
     */
    const COL_OETBCONFDROPSHPGLACCT = 'so_config.OetbConfDropShpGlAcct';

    /**
     * the column name for the OetbConfNonTaxCustCode field
     */
    const COL_OETBCONFNONTAXCUSTCODE = 'so_config.OetbConfNonTaxCustCode';

    /**
     * the column name for the OetbConfHsTaxId field
     */
    const COL_OETBCONFHSTAXID = 'so_config.OetbConfHsTaxId';

    /**
     * the column name for the OetbConfHsFrtId field
     */
    const COL_OETBCONFHSFRTID = 'so_config.OetbConfHsFrtId';

    /**
     * the column name for the OetbConfHsMiscId field
     */
    const COL_OETBCONFHSMISCID = 'so_config.OetbConfHsMiscId';

    /**
     * the column name for the OetbCon2HsCusdId field
     */
    const COL_OETBCON2HSCUSDID = 'so_config.OetbCon2HsCusdId';

    /**
     * the column name for the OetbCon3HsFrtInId field
     */
    const COL_OETBCON3HSFRTINID = 'so_config.OetbCon3HsFrtInId';

    /**
     * the column name for the OetbCon3HsDropId field
     */
    const COL_OETBCON3HSDROPID = 'so_config.OetbCon3HsDropId';

    /**
     * the column name for the OetbCon3HsMinordId field
     */
    const COL_OETBCON3HSMINORDID = 'so_config.OetbCon3HsMinordId';

    /**
     * the column name for the OetbConfHeadGetDef field
     */
    const COL_OETBCONFHEADGETDEF = 'so_config.OetbConfHeadGetDef';

    /**
     * the column name for the OetbConfItemGetDef field
     */
    const COL_OETBCONFITEMGETDEF = 'so_config.OetbConfItemGetDef';

    /**
     * the column name for the OetbConfAutoGetCust field
     */
    const COL_OETBCONFAUTOGETCUST = 'so_config.OetbConfAutoGetCust';

    /**
     * the column name for the OetbCon3AutoGetItem field
     */
    const COL_OETBCON3AUTOGETITEM = 'so_config.OetbCon3AutoGetItem';

    /**
     * the column name for the OetbConfRqstHeadDtl field
     */
    const COL_OETBCONFRQSTHEADDTL = 'so_config.OetbConfRqstHeadDtl';

    /**
     * the column name for the OetbConfCancHeadDtl field
     */
    const COL_OETBCONFCANCHEADDTL = 'so_config.OetbConfCancHeadDtl';

    /**
     * the column name for the OetbConfUseInvcAsShip field
     */
    const COL_OETBCONFUSEINVCASSHIP = 'so_config.OetbConfUseInvcAsShip';

    /**
     * the column name for the OetbCon3UseArrvDate field
     */
    const COL_OETBCON3USEARRVDATE = 'so_config.OetbCon3UseArrvDate';

    /**
     * the column name for the OetbConfSeparateCred field
     */
    const COL_OETBCONFSEPARATECRED = 'so_config.OetbConfSeparateCred';

    /**
     * the column name for the OetbCon3ApplyCredits field
     */
    const COL_OETBCON3APPLYCREDITS = 'so_config.OetbCon3ApplyCredits';

    /**
     * the column name for the OetbConfWarnNotNew field
     */
    const COL_OETBCONFWARNNOTNEW = 'so_config.OetbConfWarnNotNew';

    /**
     * the column name for the OetbConfWarnBoToZero field
     */
    const COL_OETBCONFWARNBOTOZERO = 'so_config.OetbConfWarnBoToZero';

    /**
     * the column name for the OetbCon2ProvideRouting field
     */
    const COL_OETBCON2PROVIDEROUTING = 'so_config.OetbCon2ProvideRouting';

    /**
     * the column name for the OetbCon2SrtRtByRqstDte field
     */
    const COL_OETBCON2SRTRTBYRQSTDTE = 'so_config.OetbCon2SrtRtByRqstDte';

    /**
     * the column name for the OetbConfUseSoReview field
     */
    const COL_OETBCONFUSESOREVIEW = 'so_config.OetbConfUseSoReview';

    /**
     * the column name for the OetbConfPickNoteDef field
     */
    const COL_OETBCONFPICKNOTEDEF = 'so_config.OetbConfPickNoteDef';

    /**
     * the column name for the OetbConfPackNoteDef field
     */
    const COL_OETBCONFPACKNOTEDEF = 'so_config.OetbConfPackNoteDef';

    /**
     * the column name for the OetbConfPickSort field
     */
    const COL_OETBCONFPICKSORT = 'so_config.OetbConfPickSort';

    /**
     * the column name for the OetbConfPackSort field
     */
    const COL_OETBCONFPACKSORT = 'so_config.OetbConfPackSort';

    /**
     * the column name for the OetbConfPrtPricOnly field
     */
    const COL_OETBCONFPRTPRICONLY = 'so_config.OetbConfPrtPricOnly';

    /**
     * the column name for the OetbConfPrtNeg field
     */
    const COL_OETBCONFPRTNEG = 'so_config.OetbConfPrtNeg';

    /**
     * the column name for the OetbCon2PrtPackageInfo field
     */
    const COL_OETBCON2PRTPACKAGEINFO = 'so_config.OetbCon2PrtPackageInfo';

    /**
     * the column name for the OetbCon2InnerPackLabel field
     */
    const COL_OETBCON2INNERPACKLABEL = 'so_config.OetbCon2InnerPackLabel';

    /**
     * the column name for the OetbCon2OuterPackLabel field
     */
    const COL_OETBCON2OUTERPACKLABEL = 'so_config.OetbCon2OuterPackLabel';

    /**
     * the column name for the OetbCon2ShipTareLabel field
     */
    const COL_OETBCON2SHIPTARELABEL = 'so_config.OetbCon2ShipTareLabel';

    /**
     * the column name for the OetbConfPrtPick field
     */
    const COL_OETBCONFPRTPICK = 'so_config.OetbConfPrtPick';

    /**
     * the column name for the OetbConfPicPrioSeq field
     */
    const COL_OETBCONFPICPRIOSEQ = 'so_config.OetbConfPicPrioSeq';

    /**
     * the column name for the OetbConfPrtPack field
     */
    const COL_OETBCONFPRTPACK = 'so_config.OetbConfPrtPack';

    /**
     * the column name for the OetbConfPrtInv field
     */
    const COL_OETBCONFPRTINV = 'so_config.OetbConfPrtInv';

    /**
     * the column name for the OetbCon2PrtCredMemo field
     */
    const COL_OETBCON2PRTCREDMEMO = 'so_config.OetbCon2PrtCredMemo';

    /**
     * the column name for the OetbConfCrntDate field
     */
    const COL_OETBCONFCRNTDATE = 'so_config.OetbConfCrntDate';

    /**
     * the column name for the OetbConfMarkPicked field
     */
    const COL_OETBCONFMARKPICKED = 'so_config.OetbConfMarkPicked';

    /**
     * the column name for the OetbConfShowUnavail field
     */
    const COL_OETBCONFSHOWUNAVAIL = 'so_config.OetbConfShowUnavail';

    /**
     * the column name for the OetbConfDecPlaces field
     */
    const COL_OETBCONFDECPLACES = 'so_config.OetbConfDecPlaces';

    /**
     * the column name for the OetbConfWarnDup field
     */
    const COL_OETBCONFWARNDUP = 'so_config.OetbConfWarnDup';

    /**
     * the column name for the OetbConfDefPick field
     */
    const COL_OETBCONFDEFPICK = 'so_config.OetbConfDefPick';

    /**
     * the column name for the OetbConfDefPack field
     */
    const COL_OETBCONFDEFPACK = 'so_config.OetbConfDefPack';

    /**
     * the column name for the OetbConfDefInvc field
     */
    const COL_OETBCONFDEFINVC = 'so_config.OetbConfDefInvc';

    /**
     * the column name for the OetbConfDefAck field
     */
    const COL_OETBCONFDEFACK = 'so_config.OetbConfDefAck';

    /**
     * the column name for the OetbConfAckSortOpt field
     */
    const COL_OETBCONFACKSORTOPT = 'so_config.OetbConfAckSortOpt';

    /**
     * the column name for the OetbConfReleaseNbr field
     */
    const COL_OETBCONFRELEASENBR = 'so_config.OetbConfReleaseNbr';

    /**
     * the column name for the OetbConfPoDetLineNbr field
     */
    const COL_OETBCONFPODETLINENBR = 'so_config.OetbConfPoDetLineNbr';

    /**
     * the column name for the OetbConfDetLineBinNbr field
     */
    const COL_OETBCONFDETLINEBINNBR = 'so_config.OetbConfDetLineBinNbr';

    /**
     * the column name for the OetbConfSplitByWhse field
     */
    const COL_OETBCONFSPLITBYWHSE = 'so_config.OetbConfSplitByWhse';

    /**
     * the column name for the OetbCon3AllowMultWhse field
     */
    const COL_OETBCON3ALLOWMULTWHSE = 'so_config.OetbCon3AllowMultWhse';

    /**
     * the column name for the OetbConfUseOrigWhse field
     */
    const COL_OETBCONFUSEORIGWHSE = 'so_config.OetbConfUseOrigWhse';

    /**
     * the column name for the OetbConfUseEsoSingle field
     */
    const COL_OETBCONFUSEESOSINGLE = 'so_config.OetbConfUseEsoSingle';

    /**
     * the column name for the OetbConfCreatePo field
     */
    const COL_OETBCONFCREATEPO = 'so_config.OetbConfCreatePo';

    /**
     * the column name for the OetbConfBestPrice field
     */
    const COL_OETBCONFBESTPRICE = 'so_config.OetbConfBestPrice';

    /**
     * the column name for the OetbConfEsoBackToNew field
     */
    const COL_OETBCONFESOBACKTONEW = 'so_config.OetbConfEsoBackToNew';

    /**
     * the column name for the OetbConfPickPrintDrop field
     */
    const COL_OETBCONFPICKPRINTDROP = 'so_config.OetbConfPickPrintDrop';

    /**
     * the column name for the OetbConfWarnMultPo field
     */
    const COL_OETBCONFWARNMULTPO = 'so_config.OetbConfWarnMultPo';

    /**
     * the column name for the OetbConfAlertItemQuote field
     */
    const COL_OETBCONFALERTITEMQUOTE = 'so_config.OetbConfAlertItemQuote';

    /**
     * the column name for the OetbCon3AskChgPrcWQty field
     */
    const COL_OETBCON3ASKCHGPRCWQTY = 'so_config.OetbCon3AskChgPrcWQty';

    /**
     * the column name for the OetbCon3TenQtyBrks field
     */
    const COL_OETBCON3TENQTYBRKS = 'so_config.OetbCon3TenQtyBrks';

    /**
     * the column name for the OetbConfDecOrdrPric field
     */
    const COL_OETBCONFDECORDRPRIC = 'so_config.OetbConfDecOrdrPric';

    /**
     * the column name for the OetbCon2ProvLostSales field
     */
    const COL_OETBCON2PROVLOSTSALES = 'so_config.OetbCon2ProvLostSales';

    /**
     * the column name for the OetbCon2AskReasonCode field
     */
    const COL_OETBCON2ASKREASONCODE = 'so_config.OetbCon2AskReasonCode';

    /**
     * the column name for the OetbCon2DefReasonCode field
     */
    const COL_OETBCON2DEFREASONCODE = 'so_config.OetbCon2DefReasonCode';

    /**
     * the column name for the OetbCon2BordCntl field
     */
    const COL_OETBCON2BORDCNTL = 'so_config.OetbCon2BordCntl';

    /**
     * the column name for the OetbCon2DefReaBoCode field
     */
    const COL_OETBCON2DEFREABOCODE = 'so_config.OetbCon2DefReaBoCode';

    /**
     * the column name for the OetbCon2NumDaysSavLs field
     */
    const COL_OETBCON2NUMDAYSSAVLS = 'so_config.OetbCon2NumDaysSavLs';

    /**
     * the column name for the OetbCon2CallBackNotif field
     */
    const COL_OETBCON2CALLBACKNOTIF = 'so_config.OetbCon2CallBackNotif';

    /**
     * the column name for the OetbCon2DefDaysWhenIn field
     */
    const COL_OETBCON2DEFDAYSWHENIN = 'so_config.OetbCon2DefDaysWhenIn';

    /**
     * the column name for the OetbCon2AddSubsLs field
     */
    const COL_OETBCON2ADDSUBSLS = 'so_config.OetbCon2AddSubsLs';

    /**
     * the column name for the OetbCon2DefReaSubsCode field
     */
    const COL_OETBCON2DEFREASUBSCODE = 'so_config.OetbCon2DefReaSubsCode';

    /**
     * the column name for the OetbCon2OrdTypNorm field
     */
    const COL_OETBCON2ORDTYPNORM = 'so_config.OetbCon2OrdTypNorm';

    /**
     * the column name for the OetbCon2OrdTypRep field
     */
    const COL_OETBCON2ORDTYPREP = 'so_config.OetbCon2OrdTypRep';

    /**
     * the column name for the OetbCon2OrdTypServ field
     */
    const COL_OETBCON2ORDTYPSERV = 'so_config.OetbCon2OrdTypServ';

    /**
     * the column name for the OetbCon2DefOrdTyp field
     */
    const COL_OETBCON2DEFORDTYP = 'so_config.OetbCon2DefOrdTyp';

    /**
     * the column name for the OetbConfChgPric field
     */
    const COL_OETBCONFCHGPRIC = 'so_config.OetbConfChgPric';

    /**
     * the column name for the OetbCon2SpordPriceZero field
     */
    const COL_OETBCON2SPORDPRICEZERO = 'so_config.OetbCon2SpordPriceZero';

    /**
     * the column name for the OetbConfInactPriceZero field
     */
    const COL_OETBCONFINACTPRICEZERO = 'so_config.OetbConfInactPriceZero';

    /**
     * the column name for the OetbCon2Reseq field
     */
    const COL_OETBCON2RESEQ = 'so_config.OetbCon2Reseq';

    /**
     * the column name for the OetbCon2ReseqBy field
     */
    const COL_OETBCON2RESEQBY = 'so_config.OetbCon2ReseqBy';

    /**
     * the column name for the OetbCon2MinQtySales field
     */
    const COL_OETBCON2MINQTYSALES = 'so_config.OetbCon2MinQtySales';

    /**
     * the column name for the OetbCon2ChgOrder field
     */
    const COL_OETBCON2CHGORDER = 'so_config.OetbCon2ChgOrder';

    /**
     * the column name for the OetbCon2VerComp field
     */
    const COL_OETBCON2VERCOMP = 'so_config.OetbCon2VerComp';

    /**
     * the column name for the OetbCon2PrtInv field
     */
    const COL_OETBCON2PRTINV = 'so_config.OetbCon2PrtInv';

    /**
     * the column name for the OetbCon2DynamicPickTick field
     */
    const COL_OETBCON2DYNAMICPICKTICK = 'so_config.OetbCon2DynamicPickTick';

    /**
     * the column name for the OetbCon2DynamicInvoice field
     */
    const COL_OETBCON2DYNAMICINVOICE = 'so_config.OetbCon2DynamicInvoice';

    /**
     * the column name for the OetbCon2EdiDefInvoice field
     */
    const COL_OETBCON2EDIDEFINVOICE = 'so_config.OetbCon2EdiDefInvoice';

    /**
     * the column name for the OetbCon2AllowCcPick field
     */
    const COL_OETBCON2ALLOWCCPICK = 'so_config.OetbCon2AllowCcPick';

    /**
     * the column name for the OetbCon2AutoCcWind field
     */
    const COL_OETBCON2AUTOCCWIND = 'so_config.OetbCon2AutoCcWind';

    /**
     * the column name for the OetbCon2AutoCcUpdate field
     */
    const COL_OETBCON2AUTOCCUPDATE = 'so_config.OetbCon2AutoCcUpdate';

    /**
     * the column name for the OetbCon2AllowApvdCcChg field
     */
    const COL_OETBCON2ALLOWAPVDCCCHG = 'so_config.OetbCon2AllowApvdCcChg';

    /**
     * the column name for the OetbCon3ApvdBckordClear field
     */
    const COL_OETBCON3APVDBCKORDCLEAR = 'so_config.OetbCon3ApvdBckordClear';

    /**
     * the column name for the OetbCon2PolWhichCost field
     */
    const COL_OETBCON2POLWHICHCOST = 'so_config.OetbCon2PolWhichCost';

    /**
     * the column name for the OetbCon2RevHazard field
     */
    const COL_OETBCON2REVHAZARD = 'so_config.OetbCon2RevHazard';

    /**
     * the column name for the OetbCon2ShowDiscList field
     */
    const COL_OETBCON2SHOWDISCLIST = 'so_config.OetbCon2ShowDiscList';

    /**
     * the column name for the OetbCon2ChgList field
     */
    const COL_OETBCON2CHGLIST = 'so_config.OetbCon2ChgList';

    /**
     * the column name for the OetbCon2MailList field
     */
    const COL_OETBCON2MAILLIST = 'so_config.OetbCon2MailList';

    /**
     * the column name for the OetbCon2NameFormat field
     */
    const COL_OETBCON2NAMEFORMAT = 'so_config.OetbCon2NameFormat';

    /**
     * the column name for the OetbCon2MailIdType field
     */
    const COL_OETBCON2MAILIDTYPE = 'so_config.OetbCon2MailIdType';

    /**
     * the column name for the OetbCon2CashDrawerPswd field
     */
    const COL_OETBCON2CASHDRAWERPSWD = 'so_config.OetbCon2CashDrawerPswd';

    /**
     * the column name for the OetbCon2UpsOnline field
     */
    const COL_OETBCON2UPSONLINE = 'so_config.OetbCon2UpsOnline';

    /**
     * the column name for the OetbCon2PicOrVer field
     */
    const COL_OETBCON2PICORVER = 'so_config.OetbCon2PicOrVer';

    /**
     * the column name for the OetbCon2CombBack field
     */
    const COL_OETBCON2COMBBACK = 'so_config.OetbCon2CombBack';

    /**
     * the column name for the OetbCon2FrtAllowAmt field
     */
    const COL_OETBCON2FRTALLOWAMT = 'so_config.OetbCon2FrtAllowAmt';

    /**
     * the column name for the OetbCon3ShipMoreOrdered field
     */
    const COL_OETBCON3SHIPMOREORDERED = 'so_config.OetbCon3ShipMoreOrdered';

    /**
     * the column name for the OetbCon3WarnShipMore field
     */
    const COL_OETBCON3WARNSHIPMORE = 'so_config.OetbCon3WarnShipMore';

    /**
     * the column name for the OetbCon3ProformaFromEso field
     */
    const COL_OETBCON3PROFORMAFROMESO = 'so_config.OetbCon3ProformaFromEso';

    /**
     * the column name for the OetbCon3PickPackCode field
     */
    const COL_OETBCON3PICKPACKCODE = 'so_config.OetbCon3PickPackCode';

    /**
     * the column name for the OetbCon2UseDept field
     */
    const COL_OETBCON2USEDEPT = 'so_config.OetbCon2UseDept';

    /**
     * the column name for the OetbCon2UseDivision field
     */
    const COL_OETBCON2USEDIVISION = 'so_config.OetbCon2UseDivision';

    /**
     * the column name for the OetbCon2DefMfeCode field
     */
    const COL_OETBCON2DEFMFECODE = 'so_config.OetbCon2DefMfeCode';

    /**
     * the column name for the OetbCon2ShowAvgCost field
     */
    const COL_OETBCON2SHOWAVGCOST = 'so_config.OetbCon2ShowAvgCost';

    /**
     * the column name for the OetbCon2FedEx field
     */
    const COL_OETBCON2FEDEX = 'so_config.OetbCon2FedEx';

    /**
     * the column name for the OetbCon3DefFrghtGrup field
     */
    const COL_OETBCON3DEFFRGHTGRUP = 'so_config.OetbCon3DefFrghtGrup';

    /**
     * the column name for the OetbCon3UpsMysqlDbname field
     */
    const COL_OETBCON3UPSMYSQLDBNAME = 'so_config.OetbCon3UpsMysqlDbname';

    /**
     * the column name for the OetbConfUseOptCode field
     */
    const COL_OETBCONFUSEOPTCODE = 'so_config.OetbConfUseOptCode';

    /**
     * the column name for the OetbConfScn4Opt field
     */
    const COL_OETBCONFSCN4OPT = 'so_config.OetbConfScn4Opt';

    /**
     * the column name for the OetbCon2TakenByUse field
     */
    const COL_OETBCON2TAKENBYUSE = 'so_config.OetbCon2TakenByUse';

    /**
     * the column name for the OetbCon2TakenByLogin field
     */
    const COL_OETBCON2TAKENBYLOGIN = 'so_config.OetbCon2TakenByLogin';

    /**
     * the column name for the OetbCon2TakenByForce field
     */
    const COL_OETBCON2TAKENBYFORCE = 'so_config.OetbCon2TakenByForce';

    /**
     * the column name for the OetbCon2PickedByUse field
     */
    const COL_OETBCON2PICKEDBYUSE = 'so_config.OetbCon2PickedByUse';

    /**
     * the column name for the OetbCon2PickedByForce field
     */
    const COL_OETBCON2PICKEDBYFORCE = 'so_config.OetbCon2PickedByForce';

    /**
     * the column name for the OetbCon2PickedByProc field
     */
    const COL_OETBCON2PICKEDBYPROC = 'so_config.OetbCon2PickedByProc';

    /**
     * the column name for the OetbCon2PackedByUse field
     */
    const COL_OETBCON2PACKEDBYUSE = 'so_config.OetbCon2PackedByUse';

    /**
     * the column name for the OetbCon2PackedByForce field
     */
    const COL_OETBCON2PACKEDBYFORCE = 'so_config.OetbCon2PackedByForce';

    /**
     * the column name for the OetbCon2VerifiedByUse field
     */
    const COL_OETBCON2VERIFIEDBYUSE = 'so_config.OetbCon2VerifiedByUse';

    /**
     * the column name for the OetbCon2VerifiedByLogin field
     */
    const COL_OETBCON2VERIFIEDBYLOGIN = 'so_config.OetbCon2VerifiedByLogin';

    /**
     * the column name for the OetbCon2VerifiedByForce field
     */
    const COL_OETBCON2VERIFIEDBYFORCE = 'so_config.OetbCon2VerifiedByForce';

    /**
     * the column name for the OetbConfOptLabl1 field
     */
    const COL_OETBCONFOPTLABL1 = 'so_config.OetbConfOptLabl1';

    /**
     * the column name for the OetbCon2Ucode1Force field
     */
    const COL_OETBCON2UCODE1FORCE = 'so_config.OetbCon2Ucode1Force';

    /**
     * the column name for the OetbConfOptLabl2 field
     */
    const COL_OETBCONFOPTLABL2 = 'so_config.OetbConfOptLabl2';

    /**
     * the column name for the OetbCon2Ucode2Force field
     */
    const COL_OETBCON2UCODE2FORCE = 'so_config.OetbCon2Ucode2Force';

    /**
     * the column name for the OetbConfOptLabl3 field
     */
    const COL_OETBCONFOPTLABL3 = 'so_config.OetbConfOptLabl3';

    /**
     * the column name for the OetbCon2Ucode3Force field
     */
    const COL_OETBCON2UCODE3FORCE = 'so_config.OetbCon2Ucode3Force';

    /**
     * the column name for the OetbConfOptLabl4 field
     */
    const COL_OETBCONFOPTLABL4 = 'so_config.OetbConfOptLabl4';

    /**
     * the column name for the OetbCon2Ucode4Force field
     */
    const COL_OETBCON2UCODE4FORCE = 'so_config.OetbCon2Ucode4Force';

    /**
     * the column name for the OetbConfVerifyAfterPack field
     */
    const COL_OETBCONFVERIFYAFTERPACK = 'so_config.OetbConfVerifyAfterPack';

    /**
     * the column name for the OetbConfHistYrsBack field
     */
    const COL_OETBCONFHISTYRSBACK = 'so_config.OetbConfHistYrsBack';

    /**
     * the column name for the OetbConfRqstCatlg field
     */
    const COL_OETBCONFRQSTCATLG = 'so_config.OetbConfRqstCatlg';

    /**
     * the column name for the OetbCon2ConPick field
     */
    const COL_OETBCON2CONPICK = 'so_config.OetbCon2ConPick';

    /**
     * the column name for the OetbCon2AllowPick field
     */
    const COL_OETBCON2ALLOWPICK = 'so_config.OetbCon2AllowPick';

    /**
     * the column name for the OetbCon2CombineSame field
     */
    const COL_OETBCON2COMBINESAME = 'so_config.OetbCon2CombineSame';

    /**
     * the column name for the OetbCon3AutoVerNItems field
     */
    const COL_OETBCON3AUTOVERNITEMS = 'so_config.OetbCon3AutoVerNItems';

    /**
     * the column name for the OetbCon2AllowZeroQty field
     */
    const COL_OETBCON2ALLOWZEROQTY = 'so_config.OetbCon2AllowZeroQty';

    /**
     * the column name for the OetbCon2AllowInvalidWhse field
     */
    const COL_OETBCON2ALLOWINVALIDWHSE = 'so_config.OetbCon2AllowInvalidWhse';

    /**
     * the column name for the OetbCon2ShowEdiInfo field
     */
    const COL_OETBCON2SHOWEDIINFO = 'so_config.OetbCon2ShowEdiInfo';

    /**
     * the column name for the OetbCon3EsoShowQuotLink field
     */
    const COL_OETBCON3ESOSHOWQUOTLINK = 'so_config.OetbCon3EsoShowQuotLink';

    /**
     * the column name for the OetbCon3EsoShowWipLink field
     */
    const COL_OETBCON3ESOSHOWWIPLINK = 'so_config.OetbCon3EsoShowWipLink';

    /**
     * the column name for the OetbCon2AddOnSales field
     */
    const COL_OETBCON2ADDONSALES = 'so_config.OetbCon2AddOnSales';

    /**
     * the column name for the OetbCon2ForcedBkord field
     */
    const COL_OETBCON2FORCEDBKORD = 'so_config.OetbCon2ForcedBkord';

    /**
     * the column name for the OetbCon2UpdtPrcDisc field
     */
    const COL_OETBCON2UPDTPRCDISC = 'so_config.OetbCon2UpdtPrcDisc';

    /**
     * the column name for the OetbCon2AutoPack field
     */
    const COL_OETBCON2AUTOPACK = 'so_config.OetbCon2AutoPack';

    /**
     * the column name for the OetbCon2PickBoPrtZqts field
     */
    const COL_OETBCON2PICKBOPRTZQTS = 'so_config.OetbCon2PickBoPrtZqts';

    /**
     * the column name for the OetbCon3Pick00NoShip field
     */
    const COL_OETBCON3PICK00NOSHIP = 'so_config.OetbCon3Pick00NoShip';

    /**
     * the column name for the OetbCon2StandOrdLead field
     */
    const COL_OETBCON2STANDORDLEAD = 'so_config.OetbCon2StandOrdLead';

    /**
     * the column name for the OetbCon2StandOrdAmnt field
     */
    const COL_OETBCON2STANDORDAMNT = 'so_config.OetbCon2StandOrdAmnt';

    /**
     * the column name for the OetbCon2InactItemCntrl field
     */
    const COL_OETBCON2INACTITEMCNTRL = 'so_config.OetbCon2InactItemCntrl';

    /**
     * the column name for the OetbCon2UseItemRef field
     */
    const COL_OETBCON2USEITEMREF = 'so_config.OetbCon2UseItemRef';

    /**
     * the column name for the OetbCon3UpsNaftaRecords field
     */
    const COL_OETBCON3UPSNAFTARECORDS = 'so_config.OetbCon3UpsNaftaRecords';

    /**
     * the column name for the OetbCon3SopLotLikeNorm field
     */
    const COL_OETBCON3SOPLOTLIKENORM = 'so_config.OetbCon3SopLotLikeNorm';

    /**
     * the column name for the OetbConfDfltShipWhse field
     */
    const COL_OETBCONFDFLTSHIPWHSE = 'so_config.OetbConfDfltShipWhse';

    /**
     * the column name for the OetbConfDfltOrigWhse field
     */
    const COL_OETBCONFDFLTORIGWHSE = 'so_config.OetbConfDfltOrigWhse';

    /**
     * the column name for the OetbConfInvcWithPack field
     */
    const COL_OETBCONFINVCWITHPACK = 'so_config.OetbConfInvcWithPack';

    /**
     * the column name for the OetbConfCarryCntrQty field
     */
    const COL_OETBCONFCARRYCNTRQTY = 'so_config.OetbConfCarryCntrQty';

    /**
     * the column name for the OetbCon3UseOrdrAs field
     */
    const COL_OETBCON3USEORDRAS = 'so_config.OetbCon3UseOrdrAs';

    /**
     * the column name for the OetbConfUseOrdrSource field
     */
    const COL_OETBCONFUSEORDRSOURCE = 'so_config.OetbConfUseOrdrSource';

    /**
     * the column name for the OetbCon3CcProcessor field
     */
    const COL_OETBCON3CCPROCESSOR = 'so_config.OetbCon3CcProcessor';

    /**
     * the column name for the OetbCon3CreditCardCap field
     */
    const COL_OETBCON3CREDITCARDCAP = 'so_config.OetbCon3CreditCardCap';

    /**
     * the column name for the OetbCon3KeyOrCcCap field
     */
    const COL_OETBCON3KEYORCCCAP = 'so_config.OetbCon3KeyOrCcCap';

    /**
     * the column name for the OetbCon3CcXOverlay field
     */
    const COL_OETBCON3CCXOVERLAY = 'so_config.OetbCon3CcXOverlay';

    /**
     * the column name for the OetbCon3CcTimeOut field
     */
    const COL_OETBCON3CCTIMEOUT = 'so_config.OetbCon3CcTimeOut';

    /**
     * the column name for the OetbCon3SignatureCapture field
     */
    const COL_OETBCON3SIGNATURECAPTURE = 'so_config.OetbCon3SignatureCapture';

    /**
     * the column name for the OetbCon3CcPreapproval field
     */
    const COL_OETBCON3CCPREAPPROVAL = 'so_config.OetbCon3CcPreapproval';

    /**
     * the column name for the OetbCon3ForceCcNbrEntry field
     */
    const COL_OETBCON3FORCECCNBRENTRY = 'so_config.OetbCon3ForceCcNbrEntry';

    /**
     * the column name for the OetbCon3IntrItemNotes field
     */
    const COL_OETBCON3INTRITEMNOTES = 'so_config.OetbCon3IntrItemNotes';

    /**
     * the column name for the OetbCon3MtrCert field
     */
    const COL_OETBCON3MTRCERT = 'so_config.OetbCon3MtrCert';

    /**
     * the column name for the OetbCon3CofcCert field
     */
    const COL_OETBCON3COFCCERT = 'so_config.OetbCon3CofcCert';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_config.dummy';

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
        self::TYPE_PHPNAME       => array('Oetbconfkey', 'Oetbconfglifac', 'Oetbconfinifac', 'Oetbconfrelivty', 'Oetbconfuseordrnbr', 'Oetbconfdefrqstdate', 'Oetbconfusecancdate', 'Oetbconfshowsp', 'Oetbconfjrnlsort', 'Oetbconfuseprepsoopt', 'Oetbconfdispbillto', 'Oetbconfslctflm', 'Oetbcon3usestockpull', 'Oetbconfqtytoship', 'Oetbconfqtytoshipdef', 'Oetbconfdfltordrqty', 'Oetbconfallocqtytoship', 'Oetbconfoverallocqts', 'Oetbcon3completelotbin', 'Oetbcon3rqtsopt', 'Oetbcon2shipcomphold', 'Oetbcon3usesaleforecast', 'Oetbconfverfstopneg', 'Oetbconfverfaudtrept', 'Oetbconfagelevldisp', 'Oetbconfagealltime', 'Oetbconfageathold', 'Oetbconfshowatlevl', 'Oetbconfshowitem', 'Oetbconfstoppnt', 'Oetbconfpricwind', 'Oetbconfshowcost', 'Oetbconfcosttouse', 'Oetbconfshowmarg', 'Oetbconffxoe', 'Oetbconffxinv', 'Oetbconfdispvia', 'Oetbconfdispcaseqty', 'Oetbconffrtin', 'Oetbconffrtinglacct', 'Oetbconfmincharge', 'Oetbconfminchrgglacct', 'Oetbconfdropshipchrg', 'Oetbconfdropshpglacct', 'Oetbconfnontaxcustcode', 'Oetbconfhstaxid', 'Oetbconfhsfrtid', 'Oetbconfhsmiscid', 'Oetbcon2hscusdid', 'Oetbcon3hsfrtinid', 'Oetbcon3hsdropid', 'Oetbcon3hsminordid', 'Oetbconfheadgetdef', 'Oetbconfitemgetdef', 'Oetbconfautogetcust', 'Oetbcon3autogetitem', 'Oetbconfrqstheaddtl', 'Oetbconfcancheaddtl', 'Oetbconfuseinvcasship', 'Oetbcon3usearrvdate', 'Oetbconfseparatecred', 'Oetbcon3applycredits', 'Oetbconfwarnnotnew', 'Oetbconfwarnbotozero', 'Oetbcon2providerouting', 'Oetbcon2srtrtbyrqstdte', 'Oetbconfusesoreview', 'Oetbconfpicknotedef', 'Oetbconfpacknotedef', 'Oetbconfpicksort', 'Oetbconfpacksort', 'Oetbconfprtpriconly', 'Oetbconfprtneg', 'Oetbcon2prtpackageinfo', 'Oetbcon2innerpacklabel', 'Oetbcon2outerpacklabel', 'Oetbcon2shiptarelabel', 'Oetbconfprtpick', 'Oetbconfpicprioseq', 'Oetbconfprtpack', 'Oetbconfprtinv', 'Oetbcon2prtcredmemo', 'Oetbconfcrntdate', 'Oetbconfmarkpicked', 'Oetbconfshowunavail', 'Oetbconfdecplaces', 'Oetbconfwarndup', 'Oetbconfdefpick', 'Oetbconfdefpack', 'Oetbconfdefinvc', 'Oetbconfdefack', 'Oetbconfacksortopt', 'Oetbconfreleasenbr', 'Oetbconfpodetlinenbr', 'Oetbconfdetlinebinnbr', 'Oetbconfsplitbywhse', 'Oetbcon3allowmultwhse', 'Oetbconfuseorigwhse', 'Oetbconfuseesosingle', 'Oetbconfcreatepo', 'Oetbconfbestprice', 'Oetbconfesobacktonew', 'Oetbconfpickprintdrop', 'Oetbconfwarnmultpo', 'Oetbconfalertitemquote', 'Oetbcon3askchgprcwqty', 'Oetbcon3tenqtybrks', 'Oetbconfdecordrpric', 'Oetbcon2provlostsales', 'Oetbcon2askreasoncode', 'Oetbcon2defreasoncode', 'Oetbcon2bordcntl', 'Oetbcon2defreabocode', 'Oetbcon2numdayssavls', 'Oetbcon2callbacknotif', 'Oetbcon2defdayswhenin', 'Oetbcon2addsubsls', 'Oetbcon2defreasubscode', 'Oetbcon2ordtypnorm', 'Oetbcon2ordtyprep', 'Oetbcon2ordtypserv', 'Oetbcon2defordtyp', 'Oetbconfchgpric', 'Oetbcon2spordpricezero', 'Oetbconfinactpricezero', 'Oetbcon2reseq', 'Oetbcon2reseqby', 'Oetbcon2minqtysales', 'Oetbcon2chgorder', 'Oetbcon2vercomp', 'Oetbcon2prtinv', 'Oetbcon2dynamicpicktick', 'Oetbcon2dynamicinvoice', 'Oetbcon2edidefinvoice', 'Oetbcon2allowccpick', 'Oetbcon2autoccwind', 'Oetbcon2autoccupdate', 'Oetbcon2allowapvdccchg', 'Oetbcon3apvdbckordclear', 'Oetbcon2polwhichcost', 'Oetbcon2revhazard', 'Oetbcon2showdisclist', 'Oetbcon2chglist', 'Oetbcon2maillist', 'Oetbcon2nameformat', 'Oetbcon2mailidtype', 'Oetbcon2cashdrawerpswd', 'Oetbcon2upsonline', 'Oetbcon2picorver', 'Oetbcon2combback', 'Oetbcon2frtallowamt', 'Oetbcon3shipmoreordered', 'Oetbcon3warnshipmore', 'Oetbcon3proformafromeso', 'Oetbcon3pickpackcode', 'Oetbcon2usedept', 'Oetbcon2usedivision', 'Oetbcon2defmfecode', 'Oetbcon2showavgcost', 'Oetbcon2fedex', 'Oetbcon3deffrghtgrup', 'Oetbcon3upsmysqldbname', 'Oetbconfuseoptcode', 'Oetbconfscn4opt', 'Oetbcon2takenbyuse', 'Oetbcon2takenbylogin', 'Oetbcon2takenbyforce', 'Oetbcon2pickedbyuse', 'Oetbcon2pickedbyforce', 'Oetbcon2pickedbyproc', 'Oetbcon2packedbyuse', 'Oetbcon2packedbyforce', 'Oetbcon2verifiedbyuse', 'Oetbcon2verifiedbylogin', 'Oetbcon2verifiedbyforce', 'Oetbconfoptlabl1', 'Oetbcon2ucode1force', 'Oetbconfoptlabl2', 'Oetbcon2ucode2force', 'Oetbconfoptlabl3', 'Oetbcon2ucode3force', 'Oetbconfoptlabl4', 'Oetbcon2ucode4force', 'Oetbconfverifyafterpack', 'Oetbconfhistyrsback', 'Oetbconfrqstcatlg', 'Oetbcon2conpick', 'Oetbcon2allowpick', 'Oetbcon2combinesame', 'Oetbcon3autovernitems', 'Oetbcon2allowzeroqty', 'Oetbcon2allowinvalidwhse', 'Oetbcon2showediinfo', 'Oetbcon3esoshowquotlink', 'Oetbcon3esoshowwiplink', 'Oetbcon2addonsales', 'Oetbcon2forcedbkord', 'Oetbcon2updtprcdisc', 'Oetbcon2autopack', 'Oetbcon2pickboprtzqts', 'Oetbcon3pick00noship', 'Oetbcon2standordlead', 'Oetbcon2standordamnt', 'Oetbcon2inactitemcntrl', 'Oetbcon2useitemref', 'Oetbcon3upsnaftarecords', 'Oetbcon3soplotlikenorm', 'Oetbconfdfltshipwhse', 'Oetbconfdfltorigwhse', 'Oetbconfinvcwithpack', 'Oetbconfcarrycntrqty', 'Oetbcon3useordras', 'Oetbconfuseordrsource', 'Oetbcon3ccprocessor', 'Oetbcon3creditcardcap', 'Oetbcon3keyorcccap', 'Oetbcon3ccxoverlay', 'Oetbcon3cctimeout', 'Oetbcon3signaturecapture', 'Oetbcon3ccpreapproval', 'Oetbcon3forceccnbrentry', 'Oetbcon3intritemnotes', 'Oetbcon3mtrcert', 'Oetbcon3cofccert', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oetbconfkey', 'oetbconfglifac', 'oetbconfinifac', 'oetbconfrelivty', 'oetbconfuseordrnbr', 'oetbconfdefrqstdate', 'oetbconfusecancdate', 'oetbconfshowsp', 'oetbconfjrnlsort', 'oetbconfuseprepsoopt', 'oetbconfdispbillto', 'oetbconfslctflm', 'oetbcon3usestockpull', 'oetbconfqtytoship', 'oetbconfqtytoshipdef', 'oetbconfdfltordrqty', 'oetbconfallocqtytoship', 'oetbconfoverallocqts', 'oetbcon3completelotbin', 'oetbcon3rqtsopt', 'oetbcon2shipcomphold', 'oetbcon3usesaleforecast', 'oetbconfverfstopneg', 'oetbconfverfaudtrept', 'oetbconfagelevldisp', 'oetbconfagealltime', 'oetbconfageathold', 'oetbconfshowatlevl', 'oetbconfshowitem', 'oetbconfstoppnt', 'oetbconfpricwind', 'oetbconfshowcost', 'oetbconfcosttouse', 'oetbconfshowmarg', 'oetbconffxoe', 'oetbconffxinv', 'oetbconfdispvia', 'oetbconfdispcaseqty', 'oetbconffrtin', 'oetbconffrtinglacct', 'oetbconfmincharge', 'oetbconfminchrgglacct', 'oetbconfdropshipchrg', 'oetbconfdropshpglacct', 'oetbconfnontaxcustcode', 'oetbconfhstaxid', 'oetbconfhsfrtid', 'oetbconfhsmiscid', 'oetbcon2hscusdid', 'oetbcon3hsfrtinid', 'oetbcon3hsdropid', 'oetbcon3hsminordid', 'oetbconfheadgetdef', 'oetbconfitemgetdef', 'oetbconfautogetcust', 'oetbcon3autogetitem', 'oetbconfrqstheaddtl', 'oetbconfcancheaddtl', 'oetbconfuseinvcasship', 'oetbcon3usearrvdate', 'oetbconfseparatecred', 'oetbcon3applycredits', 'oetbconfwarnnotnew', 'oetbconfwarnbotozero', 'oetbcon2providerouting', 'oetbcon2srtrtbyrqstdte', 'oetbconfusesoreview', 'oetbconfpicknotedef', 'oetbconfpacknotedef', 'oetbconfpicksort', 'oetbconfpacksort', 'oetbconfprtpriconly', 'oetbconfprtneg', 'oetbcon2prtpackageinfo', 'oetbcon2innerpacklabel', 'oetbcon2outerpacklabel', 'oetbcon2shiptarelabel', 'oetbconfprtpick', 'oetbconfpicprioseq', 'oetbconfprtpack', 'oetbconfprtinv', 'oetbcon2prtcredmemo', 'oetbconfcrntdate', 'oetbconfmarkpicked', 'oetbconfshowunavail', 'oetbconfdecplaces', 'oetbconfwarndup', 'oetbconfdefpick', 'oetbconfdefpack', 'oetbconfdefinvc', 'oetbconfdefack', 'oetbconfacksortopt', 'oetbconfreleasenbr', 'oetbconfpodetlinenbr', 'oetbconfdetlinebinnbr', 'oetbconfsplitbywhse', 'oetbcon3allowmultwhse', 'oetbconfuseorigwhse', 'oetbconfuseesosingle', 'oetbconfcreatepo', 'oetbconfbestprice', 'oetbconfesobacktonew', 'oetbconfpickprintdrop', 'oetbconfwarnmultpo', 'oetbconfalertitemquote', 'oetbcon3askchgprcwqty', 'oetbcon3tenqtybrks', 'oetbconfdecordrpric', 'oetbcon2provlostsales', 'oetbcon2askreasoncode', 'oetbcon2defreasoncode', 'oetbcon2bordcntl', 'oetbcon2defreabocode', 'oetbcon2numdayssavls', 'oetbcon2callbacknotif', 'oetbcon2defdayswhenin', 'oetbcon2addsubsls', 'oetbcon2defreasubscode', 'oetbcon2ordtypnorm', 'oetbcon2ordtyprep', 'oetbcon2ordtypserv', 'oetbcon2defordtyp', 'oetbconfchgpric', 'oetbcon2spordpricezero', 'oetbconfinactpricezero', 'oetbcon2reseq', 'oetbcon2reseqby', 'oetbcon2minqtysales', 'oetbcon2chgorder', 'oetbcon2vercomp', 'oetbcon2prtinv', 'oetbcon2dynamicpicktick', 'oetbcon2dynamicinvoice', 'oetbcon2edidefinvoice', 'oetbcon2allowccpick', 'oetbcon2autoccwind', 'oetbcon2autoccupdate', 'oetbcon2allowapvdccchg', 'oetbcon3apvdbckordclear', 'oetbcon2polwhichcost', 'oetbcon2revhazard', 'oetbcon2showdisclist', 'oetbcon2chglist', 'oetbcon2maillist', 'oetbcon2nameformat', 'oetbcon2mailidtype', 'oetbcon2cashdrawerpswd', 'oetbcon2upsonline', 'oetbcon2picorver', 'oetbcon2combback', 'oetbcon2frtallowamt', 'oetbcon3shipmoreordered', 'oetbcon3warnshipmore', 'oetbcon3proformafromeso', 'oetbcon3pickpackcode', 'oetbcon2usedept', 'oetbcon2usedivision', 'oetbcon2defmfecode', 'oetbcon2showavgcost', 'oetbcon2fedex', 'oetbcon3deffrghtgrup', 'oetbcon3upsmysqldbname', 'oetbconfuseoptcode', 'oetbconfscn4opt', 'oetbcon2takenbyuse', 'oetbcon2takenbylogin', 'oetbcon2takenbyforce', 'oetbcon2pickedbyuse', 'oetbcon2pickedbyforce', 'oetbcon2pickedbyproc', 'oetbcon2packedbyuse', 'oetbcon2packedbyforce', 'oetbcon2verifiedbyuse', 'oetbcon2verifiedbylogin', 'oetbcon2verifiedbyforce', 'oetbconfoptlabl1', 'oetbcon2ucode1force', 'oetbconfoptlabl2', 'oetbcon2ucode2force', 'oetbconfoptlabl3', 'oetbcon2ucode3force', 'oetbconfoptlabl4', 'oetbcon2ucode4force', 'oetbconfverifyafterpack', 'oetbconfhistyrsback', 'oetbconfrqstcatlg', 'oetbcon2conpick', 'oetbcon2allowpick', 'oetbcon2combinesame', 'oetbcon3autovernitems', 'oetbcon2allowzeroqty', 'oetbcon2allowinvalidwhse', 'oetbcon2showediinfo', 'oetbcon3esoshowquotlink', 'oetbcon3esoshowwiplink', 'oetbcon2addonsales', 'oetbcon2forcedbkord', 'oetbcon2updtprcdisc', 'oetbcon2autopack', 'oetbcon2pickboprtzqts', 'oetbcon3pick00noship', 'oetbcon2standordlead', 'oetbcon2standordamnt', 'oetbcon2inactitemcntrl', 'oetbcon2useitemref', 'oetbcon3upsnaftarecords', 'oetbcon3soplotlikenorm', 'oetbconfdfltshipwhse', 'oetbconfdfltorigwhse', 'oetbconfinvcwithpack', 'oetbconfcarrycntrqty', 'oetbcon3useordras', 'oetbconfuseordrsource', 'oetbcon3ccprocessor', 'oetbcon3creditcardcap', 'oetbcon3keyorcccap', 'oetbcon3ccxoverlay', 'oetbcon3cctimeout', 'oetbcon3signaturecapture', 'oetbcon3ccpreapproval', 'oetbcon3forceccnbrentry', 'oetbcon3intritemnotes', 'oetbcon3mtrcert', 'oetbcon3cofccert', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigSalesOrderTableMap::COL_OETBCONFKEY, ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC, ConfigSalesOrderTableMap::COL_OETBCONFINIFAC, ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY, ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR, ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE, ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE, ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP, ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT, ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT, ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO, ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM, ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL, ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP, ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF, ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY, ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP, ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS, ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN, ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT, ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD, ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST, ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG, ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT, ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP, ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME, ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD, ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL, ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM, ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT, ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND, ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST, ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE, ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG, ConfigSalesOrderTableMap::COL_OETBCONFFXOE, ConfigSalesOrderTableMap::COL_OETBCONFFXINV, ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA, ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY, ConfigSalesOrderTableMap::COL_OETBCONFFRTIN, ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT, ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE, ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT, ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG, ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT, ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE, ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID, ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID, ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID, ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID, ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID, ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID, ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID, ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF, ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF, ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST, ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM, ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL, ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL, ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP, ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE, ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED, ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS, ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW, ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO, ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING, ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE, ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW, ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF, ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF, ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT, ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT, ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY, ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG, ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO, ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL, ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL, ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL, ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK, ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ, ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK, ConfigSalesOrderTableMap::COL_OETBCONFPRTINV, ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO, ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE, ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED, ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL, ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES, ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP, ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK, ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK, ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC, ConfigSalesOrderTableMap::COL_OETBCONFDEFACK, ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT, ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR, ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR, ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR, ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE, ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE, ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE, ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE, ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO, ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE, ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW, ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP, ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO, ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE, ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY, ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS, ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC, ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES, ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE, ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE, ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL, ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE, ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS, ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF, ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN, ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS, ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE, ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM, ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP, ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV, ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP, ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC, ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO, ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO, ConfigSalesOrderTableMap::COL_OETBCON2RESEQ, ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY, ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES, ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER, ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP, ConfigSalesOrderTableMap::COL_OETBCON2PRTINV, ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK, ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE, ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK, ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND, ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG, ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR, ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST, ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD, ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST, ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST, ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST, ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT, ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE, ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD, ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE, ConfigSalesOrderTableMap::COL_OETBCON2PICORVER, ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK, ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT, ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED, ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE, ConfigSalesOrderTableMap::COL_OETBCON3PROFORMAFROMESO, ConfigSalesOrderTableMap::COL_OETBCON3PICKPACKCODE, ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT, ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION, ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE, ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST, ConfigSalesOrderTableMap::COL_OETBCON2FEDEX, ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP, ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME, ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE, ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT, ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE, ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN, ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE, ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE, ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE, ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC, ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE, ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE, ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE, ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN, ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE, ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1, ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE, ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2, ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE, ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3, ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE, ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4, ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE, ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK, ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK, ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG, ConfigSalesOrderTableMap::COL_OETBCON2CONPICK, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK, ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME, ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE, ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO, ConfigSalesOrderTableMap::COL_OETBCON3ESOSHOWQUOTLINK, ConfigSalesOrderTableMap::COL_OETBCON3ESOSHOWWIPLINK, ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES, ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD, ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC, ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK, ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS, ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP, ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD, ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT, ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL, ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF, ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS, ConfigSalesOrderTableMap::COL_OETBCON3SOPLOTLIKENORM, ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE, ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE, ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK, ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY, ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS, ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE, ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR, ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP, ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP, ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY, ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT, ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE, ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL, ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY, ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES, ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT, ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT, ConfigSalesOrderTableMap::COL_DATEUPDTD, ConfigSalesOrderTableMap::COL_TIMEUPDTD, ConfigSalesOrderTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OetbConfKey', 'OetbConfGlIfac', 'OetbConfInIfac', 'OetbConfRelIvty', 'OetbConfUseOrdrNbr', 'OetbConfDefRqstDate', 'OetbConfUseCancDate', 'OetbConfShowSp', 'OetbConfJrnlSort', 'OetbConfUsePrepSoOpt', 'OetbConfDispBillTo', 'OetbConfSlctFlm', 'OetbCon3UseStockPull', 'OetbConfQtyToShip', 'OetbConfQtyToShipDef', 'OetbConfDfltOrdrQty', 'OetbConfAllocQtyToShip', 'OetbConfOverAllocQts', 'OetbCon3CompleteLotBin', 'OetbCon3RqtsOpt', 'OetbCon2ShipCompHold', 'OetbCon3UseSaleForecast', 'OetbConfVerfStopNeg', 'OetbConfVerfAudtRept', 'OetbConfAgeLevlDisp', 'OetbConfAgeAllTime', 'OetbConfAgeAtHold', 'OetbConfShowAtLevl', 'OetbConfShowItem', 'OetbConfStopPnt', 'OetbConfPricWind', 'OetbConfShowCost', 'OetbConfCostToUse', 'OetbConfShowMarg', 'OetbConfFxOe', 'OetbConfFxInv', 'OetbConfDispVia', 'OetbConfDispCaseQty', 'OetbConfFrtIn', 'OetbConfFrtInGlAcct', 'OetbConfMinCharge', 'OetbConfMinChrgGlAcct', 'OetbConfDropShipChrg', 'OetbConfDropShpGlAcct', 'OetbConfNonTaxCustCode', 'OetbConfHsTaxId', 'OetbConfHsFrtId', 'OetbConfHsMiscId', 'OetbCon2HsCusdId', 'OetbCon3HsFrtInId', 'OetbCon3HsDropId', 'OetbCon3HsMinordId', 'OetbConfHeadGetDef', 'OetbConfItemGetDef', 'OetbConfAutoGetCust', 'OetbCon3AutoGetItem', 'OetbConfRqstHeadDtl', 'OetbConfCancHeadDtl', 'OetbConfUseInvcAsShip', 'OetbCon3UseArrvDate', 'OetbConfSeparateCred', 'OetbCon3ApplyCredits', 'OetbConfWarnNotNew', 'OetbConfWarnBoToZero', 'OetbCon2ProvideRouting', 'OetbCon2SrtRtByRqstDte', 'OetbConfUseSoReview', 'OetbConfPickNoteDef', 'OetbConfPackNoteDef', 'OetbConfPickSort', 'OetbConfPackSort', 'OetbConfPrtPricOnly', 'OetbConfPrtNeg', 'OetbCon2PrtPackageInfo', 'OetbCon2InnerPackLabel', 'OetbCon2OuterPackLabel', 'OetbCon2ShipTareLabel', 'OetbConfPrtPick', 'OetbConfPicPrioSeq', 'OetbConfPrtPack', 'OetbConfPrtInv', 'OetbCon2PrtCredMemo', 'OetbConfCrntDate', 'OetbConfMarkPicked', 'OetbConfShowUnavail', 'OetbConfDecPlaces', 'OetbConfWarnDup', 'OetbConfDefPick', 'OetbConfDefPack', 'OetbConfDefInvc', 'OetbConfDefAck', 'OetbConfAckSortOpt', 'OetbConfReleaseNbr', 'OetbConfPoDetLineNbr', 'OetbConfDetLineBinNbr', 'OetbConfSplitByWhse', 'OetbCon3AllowMultWhse', 'OetbConfUseOrigWhse', 'OetbConfUseEsoSingle', 'OetbConfCreatePo', 'OetbConfBestPrice', 'OetbConfEsoBackToNew', 'OetbConfPickPrintDrop', 'OetbConfWarnMultPo', 'OetbConfAlertItemQuote', 'OetbCon3AskChgPrcWQty', 'OetbCon3TenQtyBrks', 'OetbConfDecOrdrPric', 'OetbCon2ProvLostSales', 'OetbCon2AskReasonCode', 'OetbCon2DefReasonCode', 'OetbCon2BordCntl', 'OetbCon2DefReaBoCode', 'OetbCon2NumDaysSavLs', 'OetbCon2CallBackNotif', 'OetbCon2DefDaysWhenIn', 'OetbCon2AddSubsLs', 'OetbCon2DefReaSubsCode', 'OetbCon2OrdTypNorm', 'OetbCon2OrdTypRep', 'OetbCon2OrdTypServ', 'OetbCon2DefOrdTyp', 'OetbConfChgPric', 'OetbCon2SpordPriceZero', 'OetbConfInactPriceZero', 'OetbCon2Reseq', 'OetbCon2ReseqBy', 'OetbCon2MinQtySales', 'OetbCon2ChgOrder', 'OetbCon2VerComp', 'OetbCon2PrtInv', 'OetbCon2DynamicPickTick', 'OetbCon2DynamicInvoice', 'OetbCon2EdiDefInvoice', 'OetbCon2AllowCcPick', 'OetbCon2AutoCcWind', 'OetbCon2AutoCcUpdate', 'OetbCon2AllowApvdCcChg', 'OetbCon3ApvdBckordClear', 'OetbCon2PolWhichCost', 'OetbCon2RevHazard', 'OetbCon2ShowDiscList', 'OetbCon2ChgList', 'OetbCon2MailList', 'OetbCon2NameFormat', 'OetbCon2MailIdType', 'OetbCon2CashDrawerPswd', 'OetbCon2UpsOnline', 'OetbCon2PicOrVer', 'OetbCon2CombBack', 'OetbCon2FrtAllowAmt', 'OetbCon3ShipMoreOrdered', 'OetbCon3WarnShipMore', 'OetbCon3ProformaFromEso', 'OetbCon3PickPackCode', 'OetbCon2UseDept', 'OetbCon2UseDivision', 'OetbCon2DefMfeCode', 'OetbCon2ShowAvgCost', 'OetbCon2FedEx', 'OetbCon3DefFrghtGrup', 'OetbCon3UpsMysqlDbname', 'OetbConfUseOptCode', 'OetbConfScn4Opt', 'OetbCon2TakenByUse', 'OetbCon2TakenByLogin', 'OetbCon2TakenByForce', 'OetbCon2PickedByUse', 'OetbCon2PickedByForce', 'OetbCon2PickedByProc', 'OetbCon2PackedByUse', 'OetbCon2PackedByForce', 'OetbCon2VerifiedByUse', 'OetbCon2VerifiedByLogin', 'OetbCon2VerifiedByForce', 'OetbConfOptLabl1', 'OetbCon2Ucode1Force', 'OetbConfOptLabl2', 'OetbCon2Ucode2Force', 'OetbConfOptLabl3', 'OetbCon2Ucode3Force', 'OetbConfOptLabl4', 'OetbCon2Ucode4Force', 'OetbConfVerifyAfterPack', 'OetbConfHistYrsBack', 'OetbConfRqstCatlg', 'OetbCon2ConPick', 'OetbCon2AllowPick', 'OetbCon2CombineSame', 'OetbCon3AutoVerNItems', 'OetbCon2AllowZeroQty', 'OetbCon2AllowInvalidWhse', 'OetbCon2ShowEdiInfo', 'OetbCon3EsoShowQuotLink', 'OetbCon3EsoShowWipLink', 'OetbCon2AddOnSales', 'OetbCon2ForcedBkord', 'OetbCon2UpdtPrcDisc', 'OetbCon2AutoPack', 'OetbCon2PickBoPrtZqts', 'OetbCon3Pick00NoShip', 'OetbCon2StandOrdLead', 'OetbCon2StandOrdAmnt', 'OetbCon2InactItemCntrl', 'OetbCon2UseItemRef', 'OetbCon3UpsNaftaRecords', 'OetbCon3SopLotLikeNorm', 'OetbConfDfltShipWhse', 'OetbConfDfltOrigWhse', 'OetbConfInvcWithPack', 'OetbConfCarryCntrQty', 'OetbCon3UseOrdrAs', 'OetbConfUseOrdrSource', 'OetbCon3CcProcessor', 'OetbCon3CreditCardCap', 'OetbCon3KeyOrCcCap', 'OetbCon3CcXOverlay', 'OetbCon3CcTimeOut', 'OetbCon3SignatureCapture', 'OetbCon3CcPreapproval', 'OetbCon3ForceCcNbrEntry', 'OetbCon3IntrItemNotes', 'OetbCon3MtrCert', 'OetbCon3CofcCert', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oetbconfkey' => 0, 'Oetbconfglifac' => 1, 'Oetbconfinifac' => 2, 'Oetbconfrelivty' => 3, 'Oetbconfuseordrnbr' => 4, 'Oetbconfdefrqstdate' => 5, 'Oetbconfusecancdate' => 6, 'Oetbconfshowsp' => 7, 'Oetbconfjrnlsort' => 8, 'Oetbconfuseprepsoopt' => 9, 'Oetbconfdispbillto' => 10, 'Oetbconfslctflm' => 11, 'Oetbcon3usestockpull' => 12, 'Oetbconfqtytoship' => 13, 'Oetbconfqtytoshipdef' => 14, 'Oetbconfdfltordrqty' => 15, 'Oetbconfallocqtytoship' => 16, 'Oetbconfoverallocqts' => 17, 'Oetbcon3completelotbin' => 18, 'Oetbcon3rqtsopt' => 19, 'Oetbcon2shipcomphold' => 20, 'Oetbcon3usesaleforecast' => 21, 'Oetbconfverfstopneg' => 22, 'Oetbconfverfaudtrept' => 23, 'Oetbconfagelevldisp' => 24, 'Oetbconfagealltime' => 25, 'Oetbconfageathold' => 26, 'Oetbconfshowatlevl' => 27, 'Oetbconfshowitem' => 28, 'Oetbconfstoppnt' => 29, 'Oetbconfpricwind' => 30, 'Oetbconfshowcost' => 31, 'Oetbconfcosttouse' => 32, 'Oetbconfshowmarg' => 33, 'Oetbconffxoe' => 34, 'Oetbconffxinv' => 35, 'Oetbconfdispvia' => 36, 'Oetbconfdispcaseqty' => 37, 'Oetbconffrtin' => 38, 'Oetbconffrtinglacct' => 39, 'Oetbconfmincharge' => 40, 'Oetbconfminchrgglacct' => 41, 'Oetbconfdropshipchrg' => 42, 'Oetbconfdropshpglacct' => 43, 'Oetbconfnontaxcustcode' => 44, 'Oetbconfhstaxid' => 45, 'Oetbconfhsfrtid' => 46, 'Oetbconfhsmiscid' => 47, 'Oetbcon2hscusdid' => 48, 'Oetbcon3hsfrtinid' => 49, 'Oetbcon3hsdropid' => 50, 'Oetbcon3hsminordid' => 51, 'Oetbconfheadgetdef' => 52, 'Oetbconfitemgetdef' => 53, 'Oetbconfautogetcust' => 54, 'Oetbcon3autogetitem' => 55, 'Oetbconfrqstheaddtl' => 56, 'Oetbconfcancheaddtl' => 57, 'Oetbconfuseinvcasship' => 58, 'Oetbcon3usearrvdate' => 59, 'Oetbconfseparatecred' => 60, 'Oetbcon3applycredits' => 61, 'Oetbconfwarnnotnew' => 62, 'Oetbconfwarnbotozero' => 63, 'Oetbcon2providerouting' => 64, 'Oetbcon2srtrtbyrqstdte' => 65, 'Oetbconfusesoreview' => 66, 'Oetbconfpicknotedef' => 67, 'Oetbconfpacknotedef' => 68, 'Oetbconfpicksort' => 69, 'Oetbconfpacksort' => 70, 'Oetbconfprtpriconly' => 71, 'Oetbconfprtneg' => 72, 'Oetbcon2prtpackageinfo' => 73, 'Oetbcon2innerpacklabel' => 74, 'Oetbcon2outerpacklabel' => 75, 'Oetbcon2shiptarelabel' => 76, 'Oetbconfprtpick' => 77, 'Oetbconfpicprioseq' => 78, 'Oetbconfprtpack' => 79, 'Oetbconfprtinv' => 80, 'Oetbcon2prtcredmemo' => 81, 'Oetbconfcrntdate' => 82, 'Oetbconfmarkpicked' => 83, 'Oetbconfshowunavail' => 84, 'Oetbconfdecplaces' => 85, 'Oetbconfwarndup' => 86, 'Oetbconfdefpick' => 87, 'Oetbconfdefpack' => 88, 'Oetbconfdefinvc' => 89, 'Oetbconfdefack' => 90, 'Oetbconfacksortopt' => 91, 'Oetbconfreleasenbr' => 92, 'Oetbconfpodetlinenbr' => 93, 'Oetbconfdetlinebinnbr' => 94, 'Oetbconfsplitbywhse' => 95, 'Oetbcon3allowmultwhse' => 96, 'Oetbconfuseorigwhse' => 97, 'Oetbconfuseesosingle' => 98, 'Oetbconfcreatepo' => 99, 'Oetbconfbestprice' => 100, 'Oetbconfesobacktonew' => 101, 'Oetbconfpickprintdrop' => 102, 'Oetbconfwarnmultpo' => 103, 'Oetbconfalertitemquote' => 104, 'Oetbcon3askchgprcwqty' => 105, 'Oetbcon3tenqtybrks' => 106, 'Oetbconfdecordrpric' => 107, 'Oetbcon2provlostsales' => 108, 'Oetbcon2askreasoncode' => 109, 'Oetbcon2defreasoncode' => 110, 'Oetbcon2bordcntl' => 111, 'Oetbcon2defreabocode' => 112, 'Oetbcon2numdayssavls' => 113, 'Oetbcon2callbacknotif' => 114, 'Oetbcon2defdayswhenin' => 115, 'Oetbcon2addsubsls' => 116, 'Oetbcon2defreasubscode' => 117, 'Oetbcon2ordtypnorm' => 118, 'Oetbcon2ordtyprep' => 119, 'Oetbcon2ordtypserv' => 120, 'Oetbcon2defordtyp' => 121, 'Oetbconfchgpric' => 122, 'Oetbcon2spordpricezero' => 123, 'Oetbconfinactpricezero' => 124, 'Oetbcon2reseq' => 125, 'Oetbcon2reseqby' => 126, 'Oetbcon2minqtysales' => 127, 'Oetbcon2chgorder' => 128, 'Oetbcon2vercomp' => 129, 'Oetbcon2prtinv' => 130, 'Oetbcon2dynamicpicktick' => 131, 'Oetbcon2dynamicinvoice' => 132, 'Oetbcon2edidefinvoice' => 133, 'Oetbcon2allowccpick' => 134, 'Oetbcon2autoccwind' => 135, 'Oetbcon2autoccupdate' => 136, 'Oetbcon2allowapvdccchg' => 137, 'Oetbcon3apvdbckordclear' => 138, 'Oetbcon2polwhichcost' => 139, 'Oetbcon2revhazard' => 140, 'Oetbcon2showdisclist' => 141, 'Oetbcon2chglist' => 142, 'Oetbcon2maillist' => 143, 'Oetbcon2nameformat' => 144, 'Oetbcon2mailidtype' => 145, 'Oetbcon2cashdrawerpswd' => 146, 'Oetbcon2upsonline' => 147, 'Oetbcon2picorver' => 148, 'Oetbcon2combback' => 149, 'Oetbcon2frtallowamt' => 150, 'Oetbcon3shipmoreordered' => 151, 'Oetbcon3warnshipmore' => 152, 'Oetbcon3proformafromeso' => 153, 'Oetbcon3pickpackcode' => 154, 'Oetbcon2usedept' => 155, 'Oetbcon2usedivision' => 156, 'Oetbcon2defmfecode' => 157, 'Oetbcon2showavgcost' => 158, 'Oetbcon2fedex' => 159, 'Oetbcon3deffrghtgrup' => 160, 'Oetbcon3upsmysqldbname' => 161, 'Oetbconfuseoptcode' => 162, 'Oetbconfscn4opt' => 163, 'Oetbcon2takenbyuse' => 164, 'Oetbcon2takenbylogin' => 165, 'Oetbcon2takenbyforce' => 166, 'Oetbcon2pickedbyuse' => 167, 'Oetbcon2pickedbyforce' => 168, 'Oetbcon2pickedbyproc' => 169, 'Oetbcon2packedbyuse' => 170, 'Oetbcon2packedbyforce' => 171, 'Oetbcon2verifiedbyuse' => 172, 'Oetbcon2verifiedbylogin' => 173, 'Oetbcon2verifiedbyforce' => 174, 'Oetbconfoptlabl1' => 175, 'Oetbcon2ucode1force' => 176, 'Oetbconfoptlabl2' => 177, 'Oetbcon2ucode2force' => 178, 'Oetbconfoptlabl3' => 179, 'Oetbcon2ucode3force' => 180, 'Oetbconfoptlabl4' => 181, 'Oetbcon2ucode4force' => 182, 'Oetbconfverifyafterpack' => 183, 'Oetbconfhistyrsback' => 184, 'Oetbconfrqstcatlg' => 185, 'Oetbcon2conpick' => 186, 'Oetbcon2allowpick' => 187, 'Oetbcon2combinesame' => 188, 'Oetbcon3autovernitems' => 189, 'Oetbcon2allowzeroqty' => 190, 'Oetbcon2allowinvalidwhse' => 191, 'Oetbcon2showediinfo' => 192, 'Oetbcon3esoshowquotlink' => 193, 'Oetbcon3esoshowwiplink' => 194, 'Oetbcon2addonsales' => 195, 'Oetbcon2forcedbkord' => 196, 'Oetbcon2updtprcdisc' => 197, 'Oetbcon2autopack' => 198, 'Oetbcon2pickboprtzqts' => 199, 'Oetbcon3pick00noship' => 200, 'Oetbcon2standordlead' => 201, 'Oetbcon2standordamnt' => 202, 'Oetbcon2inactitemcntrl' => 203, 'Oetbcon2useitemref' => 204, 'Oetbcon3upsnaftarecords' => 205, 'Oetbcon3soplotlikenorm' => 206, 'Oetbconfdfltshipwhse' => 207, 'Oetbconfdfltorigwhse' => 208, 'Oetbconfinvcwithpack' => 209, 'Oetbconfcarrycntrqty' => 210, 'Oetbcon3useordras' => 211, 'Oetbconfuseordrsource' => 212, 'Oetbcon3ccprocessor' => 213, 'Oetbcon3creditcardcap' => 214, 'Oetbcon3keyorcccap' => 215, 'Oetbcon3ccxoverlay' => 216, 'Oetbcon3cctimeout' => 217, 'Oetbcon3signaturecapture' => 218, 'Oetbcon3ccpreapproval' => 219, 'Oetbcon3forceccnbrentry' => 220, 'Oetbcon3intritemnotes' => 221, 'Oetbcon3mtrcert' => 222, 'Oetbcon3cofccert' => 223, 'Dateupdtd' => 224, 'Timeupdtd' => 225, 'Dummy' => 226, ),
        self::TYPE_CAMELNAME     => array('oetbconfkey' => 0, 'oetbconfglifac' => 1, 'oetbconfinifac' => 2, 'oetbconfrelivty' => 3, 'oetbconfuseordrnbr' => 4, 'oetbconfdefrqstdate' => 5, 'oetbconfusecancdate' => 6, 'oetbconfshowsp' => 7, 'oetbconfjrnlsort' => 8, 'oetbconfuseprepsoopt' => 9, 'oetbconfdispbillto' => 10, 'oetbconfslctflm' => 11, 'oetbcon3usestockpull' => 12, 'oetbconfqtytoship' => 13, 'oetbconfqtytoshipdef' => 14, 'oetbconfdfltordrqty' => 15, 'oetbconfallocqtytoship' => 16, 'oetbconfoverallocqts' => 17, 'oetbcon3completelotbin' => 18, 'oetbcon3rqtsopt' => 19, 'oetbcon2shipcomphold' => 20, 'oetbcon3usesaleforecast' => 21, 'oetbconfverfstopneg' => 22, 'oetbconfverfaudtrept' => 23, 'oetbconfagelevldisp' => 24, 'oetbconfagealltime' => 25, 'oetbconfageathold' => 26, 'oetbconfshowatlevl' => 27, 'oetbconfshowitem' => 28, 'oetbconfstoppnt' => 29, 'oetbconfpricwind' => 30, 'oetbconfshowcost' => 31, 'oetbconfcosttouse' => 32, 'oetbconfshowmarg' => 33, 'oetbconffxoe' => 34, 'oetbconffxinv' => 35, 'oetbconfdispvia' => 36, 'oetbconfdispcaseqty' => 37, 'oetbconffrtin' => 38, 'oetbconffrtinglacct' => 39, 'oetbconfmincharge' => 40, 'oetbconfminchrgglacct' => 41, 'oetbconfdropshipchrg' => 42, 'oetbconfdropshpglacct' => 43, 'oetbconfnontaxcustcode' => 44, 'oetbconfhstaxid' => 45, 'oetbconfhsfrtid' => 46, 'oetbconfhsmiscid' => 47, 'oetbcon2hscusdid' => 48, 'oetbcon3hsfrtinid' => 49, 'oetbcon3hsdropid' => 50, 'oetbcon3hsminordid' => 51, 'oetbconfheadgetdef' => 52, 'oetbconfitemgetdef' => 53, 'oetbconfautogetcust' => 54, 'oetbcon3autogetitem' => 55, 'oetbconfrqstheaddtl' => 56, 'oetbconfcancheaddtl' => 57, 'oetbconfuseinvcasship' => 58, 'oetbcon3usearrvdate' => 59, 'oetbconfseparatecred' => 60, 'oetbcon3applycredits' => 61, 'oetbconfwarnnotnew' => 62, 'oetbconfwarnbotozero' => 63, 'oetbcon2providerouting' => 64, 'oetbcon2srtrtbyrqstdte' => 65, 'oetbconfusesoreview' => 66, 'oetbconfpicknotedef' => 67, 'oetbconfpacknotedef' => 68, 'oetbconfpicksort' => 69, 'oetbconfpacksort' => 70, 'oetbconfprtpriconly' => 71, 'oetbconfprtneg' => 72, 'oetbcon2prtpackageinfo' => 73, 'oetbcon2innerpacklabel' => 74, 'oetbcon2outerpacklabel' => 75, 'oetbcon2shiptarelabel' => 76, 'oetbconfprtpick' => 77, 'oetbconfpicprioseq' => 78, 'oetbconfprtpack' => 79, 'oetbconfprtinv' => 80, 'oetbcon2prtcredmemo' => 81, 'oetbconfcrntdate' => 82, 'oetbconfmarkpicked' => 83, 'oetbconfshowunavail' => 84, 'oetbconfdecplaces' => 85, 'oetbconfwarndup' => 86, 'oetbconfdefpick' => 87, 'oetbconfdefpack' => 88, 'oetbconfdefinvc' => 89, 'oetbconfdefack' => 90, 'oetbconfacksortopt' => 91, 'oetbconfreleasenbr' => 92, 'oetbconfpodetlinenbr' => 93, 'oetbconfdetlinebinnbr' => 94, 'oetbconfsplitbywhse' => 95, 'oetbcon3allowmultwhse' => 96, 'oetbconfuseorigwhse' => 97, 'oetbconfuseesosingle' => 98, 'oetbconfcreatepo' => 99, 'oetbconfbestprice' => 100, 'oetbconfesobacktonew' => 101, 'oetbconfpickprintdrop' => 102, 'oetbconfwarnmultpo' => 103, 'oetbconfalertitemquote' => 104, 'oetbcon3askchgprcwqty' => 105, 'oetbcon3tenqtybrks' => 106, 'oetbconfdecordrpric' => 107, 'oetbcon2provlostsales' => 108, 'oetbcon2askreasoncode' => 109, 'oetbcon2defreasoncode' => 110, 'oetbcon2bordcntl' => 111, 'oetbcon2defreabocode' => 112, 'oetbcon2numdayssavls' => 113, 'oetbcon2callbacknotif' => 114, 'oetbcon2defdayswhenin' => 115, 'oetbcon2addsubsls' => 116, 'oetbcon2defreasubscode' => 117, 'oetbcon2ordtypnorm' => 118, 'oetbcon2ordtyprep' => 119, 'oetbcon2ordtypserv' => 120, 'oetbcon2defordtyp' => 121, 'oetbconfchgpric' => 122, 'oetbcon2spordpricezero' => 123, 'oetbconfinactpricezero' => 124, 'oetbcon2reseq' => 125, 'oetbcon2reseqby' => 126, 'oetbcon2minqtysales' => 127, 'oetbcon2chgorder' => 128, 'oetbcon2vercomp' => 129, 'oetbcon2prtinv' => 130, 'oetbcon2dynamicpicktick' => 131, 'oetbcon2dynamicinvoice' => 132, 'oetbcon2edidefinvoice' => 133, 'oetbcon2allowccpick' => 134, 'oetbcon2autoccwind' => 135, 'oetbcon2autoccupdate' => 136, 'oetbcon2allowapvdccchg' => 137, 'oetbcon3apvdbckordclear' => 138, 'oetbcon2polwhichcost' => 139, 'oetbcon2revhazard' => 140, 'oetbcon2showdisclist' => 141, 'oetbcon2chglist' => 142, 'oetbcon2maillist' => 143, 'oetbcon2nameformat' => 144, 'oetbcon2mailidtype' => 145, 'oetbcon2cashdrawerpswd' => 146, 'oetbcon2upsonline' => 147, 'oetbcon2picorver' => 148, 'oetbcon2combback' => 149, 'oetbcon2frtallowamt' => 150, 'oetbcon3shipmoreordered' => 151, 'oetbcon3warnshipmore' => 152, 'oetbcon3proformafromeso' => 153, 'oetbcon3pickpackcode' => 154, 'oetbcon2usedept' => 155, 'oetbcon2usedivision' => 156, 'oetbcon2defmfecode' => 157, 'oetbcon2showavgcost' => 158, 'oetbcon2fedex' => 159, 'oetbcon3deffrghtgrup' => 160, 'oetbcon3upsmysqldbname' => 161, 'oetbconfuseoptcode' => 162, 'oetbconfscn4opt' => 163, 'oetbcon2takenbyuse' => 164, 'oetbcon2takenbylogin' => 165, 'oetbcon2takenbyforce' => 166, 'oetbcon2pickedbyuse' => 167, 'oetbcon2pickedbyforce' => 168, 'oetbcon2pickedbyproc' => 169, 'oetbcon2packedbyuse' => 170, 'oetbcon2packedbyforce' => 171, 'oetbcon2verifiedbyuse' => 172, 'oetbcon2verifiedbylogin' => 173, 'oetbcon2verifiedbyforce' => 174, 'oetbconfoptlabl1' => 175, 'oetbcon2ucode1force' => 176, 'oetbconfoptlabl2' => 177, 'oetbcon2ucode2force' => 178, 'oetbconfoptlabl3' => 179, 'oetbcon2ucode3force' => 180, 'oetbconfoptlabl4' => 181, 'oetbcon2ucode4force' => 182, 'oetbconfverifyafterpack' => 183, 'oetbconfhistyrsback' => 184, 'oetbconfrqstcatlg' => 185, 'oetbcon2conpick' => 186, 'oetbcon2allowpick' => 187, 'oetbcon2combinesame' => 188, 'oetbcon3autovernitems' => 189, 'oetbcon2allowzeroqty' => 190, 'oetbcon2allowinvalidwhse' => 191, 'oetbcon2showediinfo' => 192, 'oetbcon3esoshowquotlink' => 193, 'oetbcon3esoshowwiplink' => 194, 'oetbcon2addonsales' => 195, 'oetbcon2forcedbkord' => 196, 'oetbcon2updtprcdisc' => 197, 'oetbcon2autopack' => 198, 'oetbcon2pickboprtzqts' => 199, 'oetbcon3pick00noship' => 200, 'oetbcon2standordlead' => 201, 'oetbcon2standordamnt' => 202, 'oetbcon2inactitemcntrl' => 203, 'oetbcon2useitemref' => 204, 'oetbcon3upsnaftarecords' => 205, 'oetbcon3soplotlikenorm' => 206, 'oetbconfdfltshipwhse' => 207, 'oetbconfdfltorigwhse' => 208, 'oetbconfinvcwithpack' => 209, 'oetbconfcarrycntrqty' => 210, 'oetbcon3useordras' => 211, 'oetbconfuseordrsource' => 212, 'oetbcon3ccprocessor' => 213, 'oetbcon3creditcardcap' => 214, 'oetbcon3keyorcccap' => 215, 'oetbcon3ccxoverlay' => 216, 'oetbcon3cctimeout' => 217, 'oetbcon3signaturecapture' => 218, 'oetbcon3ccpreapproval' => 219, 'oetbcon3forceccnbrentry' => 220, 'oetbcon3intritemnotes' => 221, 'oetbcon3mtrcert' => 222, 'oetbcon3cofccert' => 223, 'dateupdtd' => 224, 'timeupdtd' => 225, 'dummy' => 226, ),
        self::TYPE_COLNAME       => array(ConfigSalesOrderTableMap::COL_OETBCONFKEY => 0, ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC => 1, ConfigSalesOrderTableMap::COL_OETBCONFINIFAC => 2, ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY => 3, ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR => 4, ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE => 5, ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE => 6, ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP => 7, ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT => 8, ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT => 9, ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO => 10, ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM => 11, ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL => 12, ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP => 13, ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF => 14, ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY => 15, ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP => 16, ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS => 17, ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN => 18, ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT => 19, ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD => 20, ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST => 21, ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG => 22, ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT => 23, ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP => 24, ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME => 25, ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD => 26, ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL => 27, ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM => 28, ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT => 29, ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND => 30, ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST => 31, ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE => 32, ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG => 33, ConfigSalesOrderTableMap::COL_OETBCONFFXOE => 34, ConfigSalesOrderTableMap::COL_OETBCONFFXINV => 35, ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA => 36, ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY => 37, ConfigSalesOrderTableMap::COL_OETBCONFFRTIN => 38, ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT => 39, ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE => 40, ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT => 41, ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG => 42, ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT => 43, ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE => 44, ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID => 45, ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID => 46, ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID => 47, ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID => 48, ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID => 49, ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID => 50, ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID => 51, ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF => 52, ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF => 53, ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST => 54, ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM => 55, ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL => 56, ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL => 57, ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP => 58, ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE => 59, ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED => 60, ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS => 61, ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW => 62, ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO => 63, ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING => 64, ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE => 65, ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW => 66, ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF => 67, ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF => 68, ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT => 69, ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT => 70, ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY => 71, ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG => 72, ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO => 73, ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL => 74, ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL => 75, ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL => 76, ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK => 77, ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ => 78, ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK => 79, ConfigSalesOrderTableMap::COL_OETBCONFPRTINV => 80, ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO => 81, ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE => 82, ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED => 83, ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL => 84, ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES => 85, ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP => 86, ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK => 87, ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK => 88, ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC => 89, ConfigSalesOrderTableMap::COL_OETBCONFDEFACK => 90, ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT => 91, ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR => 92, ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR => 93, ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR => 94, ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE => 95, ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE => 96, ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE => 97, ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE => 98, ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO => 99, ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE => 100, ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW => 101, ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP => 102, ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO => 103, ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE => 104, ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY => 105, ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS => 106, ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC => 107, ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES => 108, ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE => 109, ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE => 110, ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL => 111, ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE => 112, ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS => 113, ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF => 114, ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN => 115, ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS => 116, ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE => 117, ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM => 118, ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP => 119, ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV => 120, ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP => 121, ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC => 122, ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO => 123, ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO => 124, ConfigSalesOrderTableMap::COL_OETBCON2RESEQ => 125, ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY => 126, ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES => 127, ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER => 128, ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP => 129, ConfigSalesOrderTableMap::COL_OETBCON2PRTINV => 130, ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK => 131, ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE => 132, ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE => 133, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK => 134, ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND => 135, ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE => 136, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG => 137, ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR => 138, ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST => 139, ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD => 140, ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST => 141, ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST => 142, ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST => 143, ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT => 144, ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE => 145, ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD => 146, ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE => 147, ConfigSalesOrderTableMap::COL_OETBCON2PICORVER => 148, ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK => 149, ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT => 150, ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED => 151, ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE => 152, ConfigSalesOrderTableMap::COL_OETBCON3PROFORMAFROMESO => 153, ConfigSalesOrderTableMap::COL_OETBCON3PICKPACKCODE => 154, ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT => 155, ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION => 156, ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE => 157, ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST => 158, ConfigSalesOrderTableMap::COL_OETBCON2FEDEX => 159, ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP => 160, ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME => 161, ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE => 162, ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT => 163, ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE => 164, ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN => 165, ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE => 166, ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE => 167, ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE => 168, ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC => 169, ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE => 170, ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE => 171, ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE => 172, ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN => 173, ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE => 174, ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1 => 175, ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE => 176, ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2 => 177, ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE => 178, ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3 => 179, ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE => 180, ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4 => 181, ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE => 182, ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK => 183, ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK => 184, ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG => 185, ConfigSalesOrderTableMap::COL_OETBCON2CONPICK => 186, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK => 187, ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME => 188, ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS => 189, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY => 190, ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE => 191, ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO => 192, ConfigSalesOrderTableMap::COL_OETBCON3ESOSHOWQUOTLINK => 193, ConfigSalesOrderTableMap::COL_OETBCON3ESOSHOWWIPLINK => 194, ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES => 195, ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD => 196, ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC => 197, ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK => 198, ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS => 199, ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP => 200, ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD => 201, ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT => 202, ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL => 203, ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF => 204, ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS => 205, ConfigSalesOrderTableMap::COL_OETBCON3SOPLOTLIKENORM => 206, ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE => 207, ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE => 208, ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK => 209, ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY => 210, ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS => 211, ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE => 212, ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR => 213, ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP => 214, ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP => 215, ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY => 216, ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT => 217, ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE => 218, ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL => 219, ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY => 220, ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES => 221, ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT => 222, ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT => 223, ConfigSalesOrderTableMap::COL_DATEUPDTD => 224, ConfigSalesOrderTableMap::COL_TIMEUPDTD => 225, ConfigSalesOrderTableMap::COL_DUMMY => 226, ),
        self::TYPE_FIELDNAME     => array('OetbConfKey' => 0, 'OetbConfGlIfac' => 1, 'OetbConfInIfac' => 2, 'OetbConfRelIvty' => 3, 'OetbConfUseOrdrNbr' => 4, 'OetbConfDefRqstDate' => 5, 'OetbConfUseCancDate' => 6, 'OetbConfShowSp' => 7, 'OetbConfJrnlSort' => 8, 'OetbConfUsePrepSoOpt' => 9, 'OetbConfDispBillTo' => 10, 'OetbConfSlctFlm' => 11, 'OetbCon3UseStockPull' => 12, 'OetbConfQtyToShip' => 13, 'OetbConfQtyToShipDef' => 14, 'OetbConfDfltOrdrQty' => 15, 'OetbConfAllocQtyToShip' => 16, 'OetbConfOverAllocQts' => 17, 'OetbCon3CompleteLotBin' => 18, 'OetbCon3RqtsOpt' => 19, 'OetbCon2ShipCompHold' => 20, 'OetbCon3UseSaleForecast' => 21, 'OetbConfVerfStopNeg' => 22, 'OetbConfVerfAudtRept' => 23, 'OetbConfAgeLevlDisp' => 24, 'OetbConfAgeAllTime' => 25, 'OetbConfAgeAtHold' => 26, 'OetbConfShowAtLevl' => 27, 'OetbConfShowItem' => 28, 'OetbConfStopPnt' => 29, 'OetbConfPricWind' => 30, 'OetbConfShowCost' => 31, 'OetbConfCostToUse' => 32, 'OetbConfShowMarg' => 33, 'OetbConfFxOe' => 34, 'OetbConfFxInv' => 35, 'OetbConfDispVia' => 36, 'OetbConfDispCaseQty' => 37, 'OetbConfFrtIn' => 38, 'OetbConfFrtInGlAcct' => 39, 'OetbConfMinCharge' => 40, 'OetbConfMinChrgGlAcct' => 41, 'OetbConfDropShipChrg' => 42, 'OetbConfDropShpGlAcct' => 43, 'OetbConfNonTaxCustCode' => 44, 'OetbConfHsTaxId' => 45, 'OetbConfHsFrtId' => 46, 'OetbConfHsMiscId' => 47, 'OetbCon2HsCusdId' => 48, 'OetbCon3HsFrtInId' => 49, 'OetbCon3HsDropId' => 50, 'OetbCon3HsMinordId' => 51, 'OetbConfHeadGetDef' => 52, 'OetbConfItemGetDef' => 53, 'OetbConfAutoGetCust' => 54, 'OetbCon3AutoGetItem' => 55, 'OetbConfRqstHeadDtl' => 56, 'OetbConfCancHeadDtl' => 57, 'OetbConfUseInvcAsShip' => 58, 'OetbCon3UseArrvDate' => 59, 'OetbConfSeparateCred' => 60, 'OetbCon3ApplyCredits' => 61, 'OetbConfWarnNotNew' => 62, 'OetbConfWarnBoToZero' => 63, 'OetbCon2ProvideRouting' => 64, 'OetbCon2SrtRtByRqstDte' => 65, 'OetbConfUseSoReview' => 66, 'OetbConfPickNoteDef' => 67, 'OetbConfPackNoteDef' => 68, 'OetbConfPickSort' => 69, 'OetbConfPackSort' => 70, 'OetbConfPrtPricOnly' => 71, 'OetbConfPrtNeg' => 72, 'OetbCon2PrtPackageInfo' => 73, 'OetbCon2InnerPackLabel' => 74, 'OetbCon2OuterPackLabel' => 75, 'OetbCon2ShipTareLabel' => 76, 'OetbConfPrtPick' => 77, 'OetbConfPicPrioSeq' => 78, 'OetbConfPrtPack' => 79, 'OetbConfPrtInv' => 80, 'OetbCon2PrtCredMemo' => 81, 'OetbConfCrntDate' => 82, 'OetbConfMarkPicked' => 83, 'OetbConfShowUnavail' => 84, 'OetbConfDecPlaces' => 85, 'OetbConfWarnDup' => 86, 'OetbConfDefPick' => 87, 'OetbConfDefPack' => 88, 'OetbConfDefInvc' => 89, 'OetbConfDefAck' => 90, 'OetbConfAckSortOpt' => 91, 'OetbConfReleaseNbr' => 92, 'OetbConfPoDetLineNbr' => 93, 'OetbConfDetLineBinNbr' => 94, 'OetbConfSplitByWhse' => 95, 'OetbCon3AllowMultWhse' => 96, 'OetbConfUseOrigWhse' => 97, 'OetbConfUseEsoSingle' => 98, 'OetbConfCreatePo' => 99, 'OetbConfBestPrice' => 100, 'OetbConfEsoBackToNew' => 101, 'OetbConfPickPrintDrop' => 102, 'OetbConfWarnMultPo' => 103, 'OetbConfAlertItemQuote' => 104, 'OetbCon3AskChgPrcWQty' => 105, 'OetbCon3TenQtyBrks' => 106, 'OetbConfDecOrdrPric' => 107, 'OetbCon2ProvLostSales' => 108, 'OetbCon2AskReasonCode' => 109, 'OetbCon2DefReasonCode' => 110, 'OetbCon2BordCntl' => 111, 'OetbCon2DefReaBoCode' => 112, 'OetbCon2NumDaysSavLs' => 113, 'OetbCon2CallBackNotif' => 114, 'OetbCon2DefDaysWhenIn' => 115, 'OetbCon2AddSubsLs' => 116, 'OetbCon2DefReaSubsCode' => 117, 'OetbCon2OrdTypNorm' => 118, 'OetbCon2OrdTypRep' => 119, 'OetbCon2OrdTypServ' => 120, 'OetbCon2DefOrdTyp' => 121, 'OetbConfChgPric' => 122, 'OetbCon2SpordPriceZero' => 123, 'OetbConfInactPriceZero' => 124, 'OetbCon2Reseq' => 125, 'OetbCon2ReseqBy' => 126, 'OetbCon2MinQtySales' => 127, 'OetbCon2ChgOrder' => 128, 'OetbCon2VerComp' => 129, 'OetbCon2PrtInv' => 130, 'OetbCon2DynamicPickTick' => 131, 'OetbCon2DynamicInvoice' => 132, 'OetbCon2EdiDefInvoice' => 133, 'OetbCon2AllowCcPick' => 134, 'OetbCon2AutoCcWind' => 135, 'OetbCon2AutoCcUpdate' => 136, 'OetbCon2AllowApvdCcChg' => 137, 'OetbCon3ApvdBckordClear' => 138, 'OetbCon2PolWhichCost' => 139, 'OetbCon2RevHazard' => 140, 'OetbCon2ShowDiscList' => 141, 'OetbCon2ChgList' => 142, 'OetbCon2MailList' => 143, 'OetbCon2NameFormat' => 144, 'OetbCon2MailIdType' => 145, 'OetbCon2CashDrawerPswd' => 146, 'OetbCon2UpsOnline' => 147, 'OetbCon2PicOrVer' => 148, 'OetbCon2CombBack' => 149, 'OetbCon2FrtAllowAmt' => 150, 'OetbCon3ShipMoreOrdered' => 151, 'OetbCon3WarnShipMore' => 152, 'OetbCon3ProformaFromEso' => 153, 'OetbCon3PickPackCode' => 154, 'OetbCon2UseDept' => 155, 'OetbCon2UseDivision' => 156, 'OetbCon2DefMfeCode' => 157, 'OetbCon2ShowAvgCost' => 158, 'OetbCon2FedEx' => 159, 'OetbCon3DefFrghtGrup' => 160, 'OetbCon3UpsMysqlDbname' => 161, 'OetbConfUseOptCode' => 162, 'OetbConfScn4Opt' => 163, 'OetbCon2TakenByUse' => 164, 'OetbCon2TakenByLogin' => 165, 'OetbCon2TakenByForce' => 166, 'OetbCon2PickedByUse' => 167, 'OetbCon2PickedByForce' => 168, 'OetbCon2PickedByProc' => 169, 'OetbCon2PackedByUse' => 170, 'OetbCon2PackedByForce' => 171, 'OetbCon2VerifiedByUse' => 172, 'OetbCon2VerifiedByLogin' => 173, 'OetbCon2VerifiedByForce' => 174, 'OetbConfOptLabl1' => 175, 'OetbCon2Ucode1Force' => 176, 'OetbConfOptLabl2' => 177, 'OetbCon2Ucode2Force' => 178, 'OetbConfOptLabl3' => 179, 'OetbCon2Ucode3Force' => 180, 'OetbConfOptLabl4' => 181, 'OetbCon2Ucode4Force' => 182, 'OetbConfVerifyAfterPack' => 183, 'OetbConfHistYrsBack' => 184, 'OetbConfRqstCatlg' => 185, 'OetbCon2ConPick' => 186, 'OetbCon2AllowPick' => 187, 'OetbCon2CombineSame' => 188, 'OetbCon3AutoVerNItems' => 189, 'OetbCon2AllowZeroQty' => 190, 'OetbCon2AllowInvalidWhse' => 191, 'OetbCon2ShowEdiInfo' => 192, 'OetbCon3EsoShowQuotLink' => 193, 'OetbCon3EsoShowWipLink' => 194, 'OetbCon2AddOnSales' => 195, 'OetbCon2ForcedBkord' => 196, 'OetbCon2UpdtPrcDisc' => 197, 'OetbCon2AutoPack' => 198, 'OetbCon2PickBoPrtZqts' => 199, 'OetbCon3Pick00NoShip' => 200, 'OetbCon2StandOrdLead' => 201, 'OetbCon2StandOrdAmnt' => 202, 'OetbCon2InactItemCntrl' => 203, 'OetbCon2UseItemRef' => 204, 'OetbCon3UpsNaftaRecords' => 205, 'OetbCon3SopLotLikeNorm' => 206, 'OetbConfDfltShipWhse' => 207, 'OetbConfDfltOrigWhse' => 208, 'OetbConfInvcWithPack' => 209, 'OetbConfCarryCntrQty' => 210, 'OetbCon3UseOrdrAs' => 211, 'OetbConfUseOrdrSource' => 212, 'OetbCon3CcProcessor' => 213, 'OetbCon3CreditCardCap' => 214, 'OetbCon3KeyOrCcCap' => 215, 'OetbCon3CcXOverlay' => 216, 'OetbCon3CcTimeOut' => 217, 'OetbCon3SignatureCapture' => 218, 'OetbCon3CcPreapproval' => 219, 'OetbCon3ForceCcNbrEntry' => 220, 'OetbCon3IntrItemNotes' => 221, 'OetbCon3MtrCert' => 222, 'OetbCon3CofcCert' => 223, 'DateUpdtd' => 224, 'TimeUpdtd' => 225, 'dummy' => 226, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, )
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
        $this->setName('so_config');
        $this->setPhpName('ConfigSalesOrder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigSalesOrder');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OetbConfKey', 'Oetbconfkey', 'INTEGER', true, 1, 1);
        $this->addColumn('OetbConfGlIfac', 'Oetbconfglifac', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfInIfac', 'Oetbconfinifac', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfRelIvty', 'Oetbconfrelivty', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfUseOrdrNbr', 'Oetbconfuseordrnbr', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfDefRqstDate', 'Oetbconfdefrqstdate', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfUseCancDate', 'Oetbconfusecancdate', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfShowSp', 'Oetbconfshowsp', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfJrnlSort', 'Oetbconfjrnlsort', 'INTEGER', true, 1, 1);
        $this->addColumn('OetbConfUsePrepSoOpt', 'Oetbconfuseprepsoopt', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDispBillTo', 'Oetbconfdispbillto', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfSlctFlm', 'Oetbconfslctflm', 'CHAR', true, null, 'M');
        $this->addColumn('OetbCon3UseStockPull', 'Oetbcon3usestockpull', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfQtyToShip', 'Oetbconfqtytoship', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfQtyToShipDef', 'Oetbconfqtytoshipdef', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDfltOrdrQty', 'Oetbconfdfltordrqty', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfAllocQtyToShip', 'Oetbconfallocqtytoship', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfOverAllocQts', 'Oetbconfoverallocqts', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon3CompleteLotBin', 'Oetbcon3completelotbin', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3RqtsOpt', 'Oetbcon3rqtsopt', 'CHAR', true, null, 'B');
        $this->addColumn('OetbCon2ShipCompHold', 'Oetbcon2shipcomphold', 'INTEGER', true, 7, 0);
        $this->addColumn('OetbCon3UseSaleForecast', 'Oetbcon3usesaleforecast', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfVerfStopNeg', 'Oetbconfverfstopneg', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfVerfAudtRept', 'Oetbconfverfaudtrept', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfAgeLevlDisp', 'Oetbconfagelevldisp', 'CHAR', true, null, 'G');
        $this->addColumn('OetbConfAgeAllTime', 'Oetbconfagealltime', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfAgeAtHold', 'Oetbconfageathold', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfShowAtLevl', 'Oetbconfshowatlevl', 'CHAR', true, null, '2');
        $this->addColumn('OetbConfShowItem', 'Oetbconfshowitem', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfStopPnt', 'Oetbconfstoppnt', 'CHAR', true, null, 'Q');
        $this->addColumn('OetbConfPricWind', 'Oetbconfpricwind', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfShowCost', 'Oetbconfshowcost', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfCostToUse', 'Oetbconfcosttouse', 'CHAR', true, null, 'L');
        $this->addColumn('OetbConfShowMarg', 'Oetbconfshowmarg', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfFxOe', 'Oetbconffxoe', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfFxInv', 'Oetbconffxinv', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDispVia', 'Oetbconfdispvia', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDispCaseQty', 'Oetbconfdispcaseqty', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfFrtIn', 'Oetbconffrtin', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfFrtInGlAcct', 'Oetbconffrtinglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('OetbConfMinCharge', 'Oetbconfmincharge', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbConfMinChrgGlAcct', 'Oetbconfminchrgglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('OetbConfDropShipChrg', 'Oetbconfdropshipchrg', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbConfDropShpGlAcct', 'Oetbconfdropshpglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('OetbConfNonTaxCustCode', 'Oetbconfnontaxcustcode', 'VARCHAR', true, 6, '');
        $this->addColumn('OetbConfHsTaxId', 'Oetbconfhstaxid', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbConfHsFrtId', 'Oetbconfhsfrtid', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbConfHsMiscId', 'Oetbconfhsmiscid', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbCon2HsCusdId', 'Oetbcon2hscusdid', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbCon3HsFrtInId', 'Oetbcon3hsfrtinid', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbCon3HsDropId', 'Oetbcon3hsdropid', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbCon3HsMinordId', 'Oetbcon3hsminordid', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbConfHeadGetDef', 'Oetbconfheadgetdef', 'CHAR', true, null, '1');
        $this->addColumn('OetbConfItemGetDef', 'Oetbconfitemgetdef', 'CHAR', true, null, '1');
        $this->addColumn('OetbConfAutoGetCust', 'Oetbconfautogetcust', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3AutoGetItem', 'Oetbcon3autogetitem', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfRqstHeadDtl', 'Oetbconfrqstheaddtl', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfCancHeadDtl', 'Oetbconfcancheaddtl', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfUseInvcAsShip', 'Oetbconfuseinvcasship', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3UseArrvDate', 'Oetbcon3usearrvdate', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfSeparateCred', 'Oetbconfseparatecred', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3ApplyCredits', 'Oetbcon3applycredits', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfWarnNotNew', 'Oetbconfwarnnotnew', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfWarnBoToZero', 'Oetbconfwarnbotozero', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2ProvideRouting', 'Oetbcon2providerouting', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2SrtRtByRqstDte', 'Oetbcon2srtrtbyrqstdte', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfUseSoReview', 'Oetbconfusesoreview', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfPickNoteDef', 'Oetbconfpicknotedef', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfPackNoteDef', 'Oetbconfpacknotedef', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfPickSort', 'Oetbconfpicksort', 'CHAR', true, null, 'L');
        $this->addColumn('OetbConfPackSort', 'Oetbconfpacksort', 'CHAR', true, null, 'L');
        $this->addColumn('OetbConfPrtPricOnly', 'Oetbconfprtpriconly', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfPrtNeg', 'Oetbconfprtneg', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon2PrtPackageInfo', 'Oetbcon2prtpackageinfo', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2InnerPackLabel', 'Oetbcon2innerpacklabel', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbCon2OuterPackLabel', 'Oetbcon2outerpacklabel', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbCon2ShipTareLabel', 'Oetbcon2shiptarelabel', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbConfPrtPick', 'Oetbconfprtpick', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfPicPrioSeq', 'Oetbconfpicprioseq', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfPrtPack', 'Oetbconfprtpack', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfPrtInv', 'Oetbconfprtinv', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon2PrtCredMemo', 'Oetbcon2prtcredmemo', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfCrntDate', 'Oetbconfcrntdate', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfMarkPicked', 'Oetbconfmarkpicked', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfShowUnavail', 'Oetbconfshowunavail', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDecPlaces', 'Oetbconfdecplaces', 'INTEGER', true, 1, 2);
        $this->addColumn('OetbConfWarnDup', 'Oetbconfwarndup', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDefPick', 'Oetbconfdefpick', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDefPack', 'Oetbconfdefpack', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDefInvc', 'Oetbconfdefinvc', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDefAck', 'Oetbconfdefack', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfAckSortOpt', 'Oetbconfacksortopt', 'CHAR', true, null, 'L');
        $this->addColumn('OetbConfReleaseNbr', 'Oetbconfreleasenbr', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfPoDetLineNbr', 'Oetbconfpodetlinenbr', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDetLineBinNbr', 'Oetbconfdetlinebinnbr', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfSplitByWhse', 'Oetbconfsplitbywhse', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3AllowMultWhse', 'Oetbcon3allowmultwhse', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfUseOrigWhse', 'Oetbconfuseorigwhse', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfUseEsoSingle', 'Oetbconfuseesosingle', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfCreatePo', 'Oetbconfcreatepo', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfBestPrice', 'Oetbconfbestprice', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfEsoBackToNew', 'Oetbconfesobacktonew', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfPickPrintDrop', 'Oetbconfpickprintdrop', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfWarnMultPo', 'Oetbconfwarnmultpo', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfAlertItemQuote', 'Oetbconfalertitemquote', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3AskChgPrcWQty', 'Oetbcon3askchgprcwqty', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3TenQtyBrks', 'Oetbcon3tenqtybrks', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDecOrdrPric', 'Oetbconfdecordrpric', 'INTEGER', true, 1, 2);
        $this->addColumn('OetbCon2ProvLostSales', 'Oetbcon2provlostsales', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2AskReasonCode', 'Oetbcon2askreasoncode', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2DefReasonCode', 'Oetbcon2defreasoncode', 'VARCHAR', true, 4, '');
        $this->addColumn('OetbCon2BordCntl', 'Oetbcon2bordcntl', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2DefReaBoCode', 'Oetbcon2defreabocode', 'VARCHAR', true, 4, '');
        $this->addColumn('OetbCon2NumDaysSavLs', 'Oetbcon2numdayssavls', 'INTEGER', true, 4, 31);
        $this->addColumn('OetbCon2CallBackNotif', 'Oetbcon2callbacknotif', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2DefDaysWhenIn', 'Oetbcon2defdayswhenin', 'INTEGER', true, 4, 0);
        $this->addColumn('OetbCon2AddSubsLs', 'Oetbcon2addsubsls', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2DefReaSubsCode', 'Oetbcon2defreasubscode', 'VARCHAR', true, 4, '');
        $this->addColumn('OetbCon2OrdTypNorm', 'Oetbcon2ordtypnorm', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon2OrdTypRep', 'Oetbcon2ordtyprep', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2OrdTypServ', 'Oetbcon2ordtypserv', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2DefOrdTyp', 'Oetbcon2defordtyp', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfChgPric', 'Oetbconfchgpric', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon2SpordPriceZero', 'Oetbcon2spordpricezero', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfInactPriceZero', 'Oetbconfinactpricezero', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2Reseq', 'Oetbcon2reseq', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2ReseqBy', 'Oetbcon2reseqby', 'CHAR', true, null, 'I');
        $this->addColumn('OetbCon2MinQtySales', 'Oetbcon2minqtysales', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon2ChgOrder', 'Oetbcon2chgorder', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2VerComp', 'Oetbcon2vercomp', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2PrtInv', 'Oetbcon2prtinv', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2DynamicPickTick', 'Oetbcon2dynamicpicktick', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2DynamicInvoice', 'Oetbcon2dynamicinvoice', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2EdiDefInvoice', 'Oetbcon2edidefinvoice', 'CHAR', true, null, 'E');
        $this->addColumn('OetbCon2AllowCcPick', 'Oetbcon2allowccpick', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2AutoCcWind', 'Oetbcon2autoccwind', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2AutoCcUpdate', 'Oetbcon2autoccupdate', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2AllowApvdCcChg', 'Oetbcon2allowapvdccchg', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3ApvdBckordClear', 'Oetbcon3apvdbckordclear', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2PolWhichCost', 'Oetbcon2polwhichcost', 'CHAR', true, null, 'R');
        $this->addColumn('OetbCon2RevHazard', 'Oetbcon2revhazard', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2ShowDiscList', 'Oetbcon2showdisclist', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2ChgList', 'Oetbcon2chglist', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2MailList', 'Oetbcon2maillist', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2NameFormat', 'Oetbcon2nameformat', 'CHAR', true, null, 'C');
        $this->addColumn('OetbCon2MailIdType', 'Oetbcon2mailidtype', 'CHAR', true, null, 'P');
        $this->addColumn('OetbCon2CashDrawerPswd', 'Oetbcon2cashdrawerpswd', 'VARCHAR', true, 3, '');
        $this->addColumn('OetbCon2UpsOnline', 'Oetbcon2upsonline', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2PicOrVer', 'Oetbcon2picorver', 'CHAR', true, null, 'P');
        $this->addColumn('OetbCon2CombBack', 'Oetbcon2combback', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2FrtAllowAmt', 'Oetbcon2frtallowamt', 'INTEGER', true, 7, 0);
        $this->addColumn('OetbCon3ShipMoreOrdered', 'Oetbcon3shipmoreordered', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon3WarnShipMore', 'Oetbcon3warnshipmore', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon3ProformaFromEso', 'Oetbcon3proformafromeso', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3PickPackCode', 'Oetbcon3pickpackcode', 'CHAR', true, null, 'I');
        $this->addColumn('OetbCon2UseDept', 'Oetbcon2usedept', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2UseDivision', 'Oetbcon2usedivision', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2DefMfeCode', 'Oetbcon2defmfecode', 'CHAR', true, null, 'P');
        $this->addColumn('OetbCon2ShowAvgCost', 'Oetbcon2showavgcost', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2FedEx', 'Oetbcon2fedex', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3DefFrghtGrup', 'Oetbcon3deffrghtgrup', 'VARCHAR', true, 2, '');
        $this->addColumn('OetbCon3UpsMysqlDbname', 'Oetbcon3upsmysqldbname', 'VARCHAR', true, 10, '');
        $this->addColumn('OetbConfUseOptCode', 'Oetbconfuseoptcode', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbConfScn4Opt', 'Oetbconfscn4opt', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2TakenByUse', 'Oetbcon2takenbyuse', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2TakenByLogin', 'Oetbcon2takenbylogin', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2TakenByForce', 'Oetbcon2takenbyforce', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2PickedByUse', 'Oetbcon2pickedbyuse', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2PickedByForce', 'Oetbcon2pickedbyforce', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2PickedByProc', 'Oetbcon2pickedbyproc', 'CHAR', true, null, 'K');
        $this->addColumn('OetbCon2PackedByUse', 'Oetbcon2packedbyuse', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2PackedByForce', 'Oetbcon2packedbyforce', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2VerifiedByUse', 'Oetbcon2verifiedbyuse', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2VerifiedByLogin', 'Oetbcon2verifiedbylogin', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2VerifiedByForce', 'Oetbcon2verifiedbyforce', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfOptLabl1', 'Oetbconfoptlabl1', 'VARCHAR', true, 20, '');
        $this->addColumn('OetbCon2Ucode1Force', 'Oetbcon2ucode1force', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfOptLabl2', 'Oetbconfoptlabl2', 'VARCHAR', true, 20, '');
        $this->addColumn('OetbCon2Ucode2Force', 'Oetbcon2ucode2force', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfOptLabl3', 'Oetbconfoptlabl3', 'VARCHAR', true, 20, '');
        $this->addColumn('OetbCon2Ucode3Force', 'Oetbcon2ucode3force', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfOptLabl4', 'Oetbconfoptlabl4', 'VARCHAR', true, 20, '');
        $this->addColumn('OetbCon2Ucode4Force', 'Oetbcon2ucode4force', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfVerifyAfterPack', 'Oetbconfverifyafterpack', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfHistYrsBack', 'Oetbconfhistyrsback', 'INTEGER', true, 2, 5);
        $this->addColumn('OetbConfRqstCatlg', 'Oetbconfrqstcatlg', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2ConPick', 'Oetbcon2conpick', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2AllowPick', 'Oetbcon2allowpick', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2CombineSame', 'Oetbcon2combinesame', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3AutoVerNItems', 'Oetbcon3autovernitems', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2AllowZeroQty', 'Oetbcon2allowzeroqty', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon2AllowInvalidWhse', 'Oetbcon2allowinvalidwhse', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon2ShowEdiInfo', 'Oetbcon2showediinfo', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3EsoShowQuotLink', 'Oetbcon3esoshowquotlink', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3EsoShowWipLink', 'Oetbcon3esoshowwiplink', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2AddOnSales', 'Oetbcon2addonsales', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2ForcedBkord', 'Oetbcon2forcedbkord', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2UpdtPrcDisc', 'Oetbcon2updtprcdisc', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2AutoPack', 'Oetbcon2autopack', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2PickBoPrtZqts', 'Oetbcon2pickboprtzqts', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon3Pick00NoShip', 'Oetbcon3pick00noship', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2StandOrdLead', 'Oetbcon2standordlead', 'CHAR', true, null, 'D');
        $this->addColumn('OetbCon2StandOrdAmnt', 'Oetbcon2standordamnt', 'INTEGER', true, 3, 0);
        $this->addColumn('OetbCon2InactItemCntrl', 'Oetbcon2inactitemcntrl', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2UseItemRef', 'Oetbcon2useitemref', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3UpsNaftaRecords', 'Oetbcon3upsnaftarecords', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3SopLotLikeNorm', 'Oetbcon3soplotlikenorm', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfDfltShipWhse', 'Oetbconfdfltshipwhse', 'CHAR', true, null, 'C');
        $this->addColumn('OetbConfDfltOrigWhse', 'Oetbconfdfltorigwhse', 'CHAR', true, null, 'B');
        $this->addColumn('OetbConfInvcWithPack', 'Oetbconfinvcwithpack', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfCarryCntrQty', 'Oetbconfcarrycntrqty', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3UseOrdrAs', 'Oetbcon3useordras', 'CHAR', true, null, 'N');
        $this->addColumn('OetbConfUseOrdrSource', 'Oetbconfuseordrsource', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3CcProcessor', 'Oetbcon3ccprocessor', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3CreditCardCap', 'Oetbcon3creditcardcap', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3KeyOrCcCap', 'Oetbcon3keyorcccap', 'CHAR', true, null, 'C');
        $this->addColumn('OetbCon3CcXOverlay', 'Oetbcon3ccxoverlay', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon3CcTimeOut', 'Oetbcon3cctimeout', 'INTEGER', true, 3, 60);
        $this->addColumn('OetbCon3SignatureCapture', 'Oetbcon3signaturecapture', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon3CcPreapproval', 'Oetbcon3ccpreapproval', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3ForceCcNbrEntry', 'Oetbcon3forceccnbrentry', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon3IntrItemNotes', 'Oetbcon3intritemnotes', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3MtrCert', 'Oetbcon3mtrcert', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon3CofcCert', 'Oetbcon3cofccert', 'CHAR', true, null, 'N');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigSalesOrderTableMap::CLASS_DEFAULT : ConfigSalesOrderTableMap::OM_CLASS;
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
     * @return array           (ConfigSalesOrder object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigSalesOrderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigSalesOrderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigSalesOrderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigSalesOrderTableMap::OM_CLASS;
            /** @var ConfigSalesOrder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigSalesOrderTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigSalesOrderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigSalesOrderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigSalesOrder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigSalesOrderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFKEY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFINIFAC);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFFXOE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFFXINV);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFFRTIN);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPRTINV);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDEFACK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2RESEQ);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PRTINV);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PICORVER);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3PROFORMAFROMESO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3PICKPACKCODE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2FEDEX);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2CONPICK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3ESOSHOWQUOTLINK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3ESOSHOWWIPLINK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3SOPLOTLIKENORM);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigSalesOrderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OetbConfKey');
            $criteria->addSelectColumn($alias . '.OetbConfGlIfac');
            $criteria->addSelectColumn($alias . '.OetbConfInIfac');
            $criteria->addSelectColumn($alias . '.OetbConfRelIvty');
            $criteria->addSelectColumn($alias . '.OetbConfUseOrdrNbr');
            $criteria->addSelectColumn($alias . '.OetbConfDefRqstDate');
            $criteria->addSelectColumn($alias . '.OetbConfUseCancDate');
            $criteria->addSelectColumn($alias . '.OetbConfShowSp');
            $criteria->addSelectColumn($alias . '.OetbConfJrnlSort');
            $criteria->addSelectColumn($alias . '.OetbConfUsePrepSoOpt');
            $criteria->addSelectColumn($alias . '.OetbConfDispBillTo');
            $criteria->addSelectColumn($alias . '.OetbConfSlctFlm');
            $criteria->addSelectColumn($alias . '.OetbCon3UseStockPull');
            $criteria->addSelectColumn($alias . '.OetbConfQtyToShip');
            $criteria->addSelectColumn($alias . '.OetbConfQtyToShipDef');
            $criteria->addSelectColumn($alias . '.OetbConfDfltOrdrQty');
            $criteria->addSelectColumn($alias . '.OetbConfAllocQtyToShip');
            $criteria->addSelectColumn($alias . '.OetbConfOverAllocQts');
            $criteria->addSelectColumn($alias . '.OetbCon3CompleteLotBin');
            $criteria->addSelectColumn($alias . '.OetbCon3RqtsOpt');
            $criteria->addSelectColumn($alias . '.OetbCon2ShipCompHold');
            $criteria->addSelectColumn($alias . '.OetbCon3UseSaleForecast');
            $criteria->addSelectColumn($alias . '.OetbConfVerfStopNeg');
            $criteria->addSelectColumn($alias . '.OetbConfVerfAudtRept');
            $criteria->addSelectColumn($alias . '.OetbConfAgeLevlDisp');
            $criteria->addSelectColumn($alias . '.OetbConfAgeAllTime');
            $criteria->addSelectColumn($alias . '.OetbConfAgeAtHold');
            $criteria->addSelectColumn($alias . '.OetbConfShowAtLevl');
            $criteria->addSelectColumn($alias . '.OetbConfShowItem');
            $criteria->addSelectColumn($alias . '.OetbConfStopPnt');
            $criteria->addSelectColumn($alias . '.OetbConfPricWind');
            $criteria->addSelectColumn($alias . '.OetbConfShowCost');
            $criteria->addSelectColumn($alias . '.OetbConfCostToUse');
            $criteria->addSelectColumn($alias . '.OetbConfShowMarg');
            $criteria->addSelectColumn($alias . '.OetbConfFxOe');
            $criteria->addSelectColumn($alias . '.OetbConfFxInv');
            $criteria->addSelectColumn($alias . '.OetbConfDispVia');
            $criteria->addSelectColumn($alias . '.OetbConfDispCaseQty');
            $criteria->addSelectColumn($alias . '.OetbConfFrtIn');
            $criteria->addSelectColumn($alias . '.OetbConfFrtInGlAcct');
            $criteria->addSelectColumn($alias . '.OetbConfMinCharge');
            $criteria->addSelectColumn($alias . '.OetbConfMinChrgGlAcct');
            $criteria->addSelectColumn($alias . '.OetbConfDropShipChrg');
            $criteria->addSelectColumn($alias . '.OetbConfDropShpGlAcct');
            $criteria->addSelectColumn($alias . '.OetbConfNonTaxCustCode');
            $criteria->addSelectColumn($alias . '.OetbConfHsTaxId');
            $criteria->addSelectColumn($alias . '.OetbConfHsFrtId');
            $criteria->addSelectColumn($alias . '.OetbConfHsMiscId');
            $criteria->addSelectColumn($alias . '.OetbCon2HsCusdId');
            $criteria->addSelectColumn($alias . '.OetbCon3HsFrtInId');
            $criteria->addSelectColumn($alias . '.OetbCon3HsDropId');
            $criteria->addSelectColumn($alias . '.OetbCon3HsMinordId');
            $criteria->addSelectColumn($alias . '.OetbConfHeadGetDef');
            $criteria->addSelectColumn($alias . '.OetbConfItemGetDef');
            $criteria->addSelectColumn($alias . '.OetbConfAutoGetCust');
            $criteria->addSelectColumn($alias . '.OetbCon3AutoGetItem');
            $criteria->addSelectColumn($alias . '.OetbConfRqstHeadDtl');
            $criteria->addSelectColumn($alias . '.OetbConfCancHeadDtl');
            $criteria->addSelectColumn($alias . '.OetbConfUseInvcAsShip');
            $criteria->addSelectColumn($alias . '.OetbCon3UseArrvDate');
            $criteria->addSelectColumn($alias . '.OetbConfSeparateCred');
            $criteria->addSelectColumn($alias . '.OetbCon3ApplyCredits');
            $criteria->addSelectColumn($alias . '.OetbConfWarnNotNew');
            $criteria->addSelectColumn($alias . '.OetbConfWarnBoToZero');
            $criteria->addSelectColumn($alias . '.OetbCon2ProvideRouting');
            $criteria->addSelectColumn($alias . '.OetbCon2SrtRtByRqstDte');
            $criteria->addSelectColumn($alias . '.OetbConfUseSoReview');
            $criteria->addSelectColumn($alias . '.OetbConfPickNoteDef');
            $criteria->addSelectColumn($alias . '.OetbConfPackNoteDef');
            $criteria->addSelectColumn($alias . '.OetbConfPickSort');
            $criteria->addSelectColumn($alias . '.OetbConfPackSort');
            $criteria->addSelectColumn($alias . '.OetbConfPrtPricOnly');
            $criteria->addSelectColumn($alias . '.OetbConfPrtNeg');
            $criteria->addSelectColumn($alias . '.OetbCon2PrtPackageInfo');
            $criteria->addSelectColumn($alias . '.OetbCon2InnerPackLabel');
            $criteria->addSelectColumn($alias . '.OetbCon2OuterPackLabel');
            $criteria->addSelectColumn($alias . '.OetbCon2ShipTareLabel');
            $criteria->addSelectColumn($alias . '.OetbConfPrtPick');
            $criteria->addSelectColumn($alias . '.OetbConfPicPrioSeq');
            $criteria->addSelectColumn($alias . '.OetbConfPrtPack');
            $criteria->addSelectColumn($alias . '.OetbConfPrtInv');
            $criteria->addSelectColumn($alias . '.OetbCon2PrtCredMemo');
            $criteria->addSelectColumn($alias . '.OetbConfCrntDate');
            $criteria->addSelectColumn($alias . '.OetbConfMarkPicked');
            $criteria->addSelectColumn($alias . '.OetbConfShowUnavail');
            $criteria->addSelectColumn($alias . '.OetbConfDecPlaces');
            $criteria->addSelectColumn($alias . '.OetbConfWarnDup');
            $criteria->addSelectColumn($alias . '.OetbConfDefPick');
            $criteria->addSelectColumn($alias . '.OetbConfDefPack');
            $criteria->addSelectColumn($alias . '.OetbConfDefInvc');
            $criteria->addSelectColumn($alias . '.OetbConfDefAck');
            $criteria->addSelectColumn($alias . '.OetbConfAckSortOpt');
            $criteria->addSelectColumn($alias . '.OetbConfReleaseNbr');
            $criteria->addSelectColumn($alias . '.OetbConfPoDetLineNbr');
            $criteria->addSelectColumn($alias . '.OetbConfDetLineBinNbr');
            $criteria->addSelectColumn($alias . '.OetbConfSplitByWhse');
            $criteria->addSelectColumn($alias . '.OetbCon3AllowMultWhse');
            $criteria->addSelectColumn($alias . '.OetbConfUseOrigWhse');
            $criteria->addSelectColumn($alias . '.OetbConfUseEsoSingle');
            $criteria->addSelectColumn($alias . '.OetbConfCreatePo');
            $criteria->addSelectColumn($alias . '.OetbConfBestPrice');
            $criteria->addSelectColumn($alias . '.OetbConfEsoBackToNew');
            $criteria->addSelectColumn($alias . '.OetbConfPickPrintDrop');
            $criteria->addSelectColumn($alias . '.OetbConfWarnMultPo');
            $criteria->addSelectColumn($alias . '.OetbConfAlertItemQuote');
            $criteria->addSelectColumn($alias . '.OetbCon3AskChgPrcWQty');
            $criteria->addSelectColumn($alias . '.OetbCon3TenQtyBrks');
            $criteria->addSelectColumn($alias . '.OetbConfDecOrdrPric');
            $criteria->addSelectColumn($alias . '.OetbCon2ProvLostSales');
            $criteria->addSelectColumn($alias . '.OetbCon2AskReasonCode');
            $criteria->addSelectColumn($alias . '.OetbCon2DefReasonCode');
            $criteria->addSelectColumn($alias . '.OetbCon2BordCntl');
            $criteria->addSelectColumn($alias . '.OetbCon2DefReaBoCode');
            $criteria->addSelectColumn($alias . '.OetbCon2NumDaysSavLs');
            $criteria->addSelectColumn($alias . '.OetbCon2CallBackNotif');
            $criteria->addSelectColumn($alias . '.OetbCon2DefDaysWhenIn');
            $criteria->addSelectColumn($alias . '.OetbCon2AddSubsLs');
            $criteria->addSelectColumn($alias . '.OetbCon2DefReaSubsCode');
            $criteria->addSelectColumn($alias . '.OetbCon2OrdTypNorm');
            $criteria->addSelectColumn($alias . '.OetbCon2OrdTypRep');
            $criteria->addSelectColumn($alias . '.OetbCon2OrdTypServ');
            $criteria->addSelectColumn($alias . '.OetbCon2DefOrdTyp');
            $criteria->addSelectColumn($alias . '.OetbConfChgPric');
            $criteria->addSelectColumn($alias . '.OetbCon2SpordPriceZero');
            $criteria->addSelectColumn($alias . '.OetbConfInactPriceZero');
            $criteria->addSelectColumn($alias . '.OetbCon2Reseq');
            $criteria->addSelectColumn($alias . '.OetbCon2ReseqBy');
            $criteria->addSelectColumn($alias . '.OetbCon2MinQtySales');
            $criteria->addSelectColumn($alias . '.OetbCon2ChgOrder');
            $criteria->addSelectColumn($alias . '.OetbCon2VerComp');
            $criteria->addSelectColumn($alias . '.OetbCon2PrtInv');
            $criteria->addSelectColumn($alias . '.OetbCon2DynamicPickTick');
            $criteria->addSelectColumn($alias . '.OetbCon2DynamicInvoice');
            $criteria->addSelectColumn($alias . '.OetbCon2EdiDefInvoice');
            $criteria->addSelectColumn($alias . '.OetbCon2AllowCcPick');
            $criteria->addSelectColumn($alias . '.OetbCon2AutoCcWind');
            $criteria->addSelectColumn($alias . '.OetbCon2AutoCcUpdate');
            $criteria->addSelectColumn($alias . '.OetbCon2AllowApvdCcChg');
            $criteria->addSelectColumn($alias . '.OetbCon3ApvdBckordClear');
            $criteria->addSelectColumn($alias . '.OetbCon2PolWhichCost');
            $criteria->addSelectColumn($alias . '.OetbCon2RevHazard');
            $criteria->addSelectColumn($alias . '.OetbCon2ShowDiscList');
            $criteria->addSelectColumn($alias . '.OetbCon2ChgList');
            $criteria->addSelectColumn($alias . '.OetbCon2MailList');
            $criteria->addSelectColumn($alias . '.OetbCon2NameFormat');
            $criteria->addSelectColumn($alias . '.OetbCon2MailIdType');
            $criteria->addSelectColumn($alias . '.OetbCon2CashDrawerPswd');
            $criteria->addSelectColumn($alias . '.OetbCon2UpsOnline');
            $criteria->addSelectColumn($alias . '.OetbCon2PicOrVer');
            $criteria->addSelectColumn($alias . '.OetbCon2CombBack');
            $criteria->addSelectColumn($alias . '.OetbCon2FrtAllowAmt');
            $criteria->addSelectColumn($alias . '.OetbCon3ShipMoreOrdered');
            $criteria->addSelectColumn($alias . '.OetbCon3WarnShipMore');
            $criteria->addSelectColumn($alias . '.OetbCon3ProformaFromEso');
            $criteria->addSelectColumn($alias . '.OetbCon3PickPackCode');
            $criteria->addSelectColumn($alias . '.OetbCon2UseDept');
            $criteria->addSelectColumn($alias . '.OetbCon2UseDivision');
            $criteria->addSelectColumn($alias . '.OetbCon2DefMfeCode');
            $criteria->addSelectColumn($alias . '.OetbCon2ShowAvgCost');
            $criteria->addSelectColumn($alias . '.OetbCon2FedEx');
            $criteria->addSelectColumn($alias . '.OetbCon3DefFrghtGrup');
            $criteria->addSelectColumn($alias . '.OetbCon3UpsMysqlDbname');
            $criteria->addSelectColumn($alias . '.OetbConfUseOptCode');
            $criteria->addSelectColumn($alias . '.OetbConfScn4Opt');
            $criteria->addSelectColumn($alias . '.OetbCon2TakenByUse');
            $criteria->addSelectColumn($alias . '.OetbCon2TakenByLogin');
            $criteria->addSelectColumn($alias . '.OetbCon2TakenByForce');
            $criteria->addSelectColumn($alias . '.OetbCon2PickedByUse');
            $criteria->addSelectColumn($alias . '.OetbCon2PickedByForce');
            $criteria->addSelectColumn($alias . '.OetbCon2PickedByProc');
            $criteria->addSelectColumn($alias . '.OetbCon2PackedByUse');
            $criteria->addSelectColumn($alias . '.OetbCon2PackedByForce');
            $criteria->addSelectColumn($alias . '.OetbCon2VerifiedByUse');
            $criteria->addSelectColumn($alias . '.OetbCon2VerifiedByLogin');
            $criteria->addSelectColumn($alias . '.OetbCon2VerifiedByForce');
            $criteria->addSelectColumn($alias . '.OetbConfOptLabl1');
            $criteria->addSelectColumn($alias . '.OetbCon2Ucode1Force');
            $criteria->addSelectColumn($alias . '.OetbConfOptLabl2');
            $criteria->addSelectColumn($alias . '.OetbCon2Ucode2Force');
            $criteria->addSelectColumn($alias . '.OetbConfOptLabl3');
            $criteria->addSelectColumn($alias . '.OetbCon2Ucode3Force');
            $criteria->addSelectColumn($alias . '.OetbConfOptLabl4');
            $criteria->addSelectColumn($alias . '.OetbCon2Ucode4Force');
            $criteria->addSelectColumn($alias . '.OetbConfVerifyAfterPack');
            $criteria->addSelectColumn($alias . '.OetbConfHistYrsBack');
            $criteria->addSelectColumn($alias . '.OetbConfRqstCatlg');
            $criteria->addSelectColumn($alias . '.OetbCon2ConPick');
            $criteria->addSelectColumn($alias . '.OetbCon2AllowPick');
            $criteria->addSelectColumn($alias . '.OetbCon2CombineSame');
            $criteria->addSelectColumn($alias . '.OetbCon3AutoVerNItems');
            $criteria->addSelectColumn($alias . '.OetbCon2AllowZeroQty');
            $criteria->addSelectColumn($alias . '.OetbCon2AllowInvalidWhse');
            $criteria->addSelectColumn($alias . '.OetbCon2ShowEdiInfo');
            $criteria->addSelectColumn($alias . '.OetbCon3EsoShowQuotLink');
            $criteria->addSelectColumn($alias . '.OetbCon3EsoShowWipLink');
            $criteria->addSelectColumn($alias . '.OetbCon2AddOnSales');
            $criteria->addSelectColumn($alias . '.OetbCon2ForcedBkord');
            $criteria->addSelectColumn($alias . '.OetbCon2UpdtPrcDisc');
            $criteria->addSelectColumn($alias . '.OetbCon2AutoPack');
            $criteria->addSelectColumn($alias . '.OetbCon2PickBoPrtZqts');
            $criteria->addSelectColumn($alias . '.OetbCon3Pick00NoShip');
            $criteria->addSelectColumn($alias . '.OetbCon2StandOrdLead');
            $criteria->addSelectColumn($alias . '.OetbCon2StandOrdAmnt');
            $criteria->addSelectColumn($alias . '.OetbCon2InactItemCntrl');
            $criteria->addSelectColumn($alias . '.OetbCon2UseItemRef');
            $criteria->addSelectColumn($alias . '.OetbCon3UpsNaftaRecords');
            $criteria->addSelectColumn($alias . '.OetbCon3SopLotLikeNorm');
            $criteria->addSelectColumn($alias . '.OetbConfDfltShipWhse');
            $criteria->addSelectColumn($alias . '.OetbConfDfltOrigWhse');
            $criteria->addSelectColumn($alias . '.OetbConfInvcWithPack');
            $criteria->addSelectColumn($alias . '.OetbConfCarryCntrQty');
            $criteria->addSelectColumn($alias . '.OetbCon3UseOrdrAs');
            $criteria->addSelectColumn($alias . '.OetbConfUseOrdrSource');
            $criteria->addSelectColumn($alias . '.OetbCon3CcProcessor');
            $criteria->addSelectColumn($alias . '.OetbCon3CreditCardCap');
            $criteria->addSelectColumn($alias . '.OetbCon3KeyOrCcCap');
            $criteria->addSelectColumn($alias . '.OetbCon3CcXOverlay');
            $criteria->addSelectColumn($alias . '.OetbCon3CcTimeOut');
            $criteria->addSelectColumn($alias . '.OetbCon3SignatureCapture');
            $criteria->addSelectColumn($alias . '.OetbCon3CcPreapproval');
            $criteria->addSelectColumn($alias . '.OetbCon3ForceCcNbrEntry');
            $criteria->addSelectColumn($alias . '.OetbCon3IntrItemNotes');
            $criteria->addSelectColumn($alias . '.OetbCon3MtrCert');
            $criteria->addSelectColumn($alias . '.OetbCon3CofcCert');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigSalesOrderTableMap::DATABASE_NAME)->getTable(ConfigSalesOrderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigSalesOrderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigSalesOrderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigSalesOrderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigSalesOrder or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigSalesOrder object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSalesOrderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigSalesOrder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigSalesOrderTableMap::DATABASE_NAME);
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigSalesOrderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigSalesOrderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigSalesOrderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigSalesOrderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigSalesOrder or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigSalesOrder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSalesOrderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigSalesOrder object
        }


        // Set the correct dbName
        $query = ConfigSalesOrderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigSalesOrderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigSalesOrderTableMap::buildTableMap();
