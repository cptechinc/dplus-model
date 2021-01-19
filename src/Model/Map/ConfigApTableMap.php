<?php

namespace Map;

use \ConfigAp;
use \ConfigApQuery;
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
 * This class defines the structure of the 'ap_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigApTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigApTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ap_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigAp';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigAp';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 81;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 81;

    /**
     * the column name for the AptbConfKey field
     */
    const COL_APTBCONFKEY = 'ap_config.AptbConfKey';

    /**
     * the column name for the AptbConfGlIfac field
     */
    const COL_APTBCONFGLIFAC = 'ap_config.AptbConfGlIfac';

    /**
     * the column name for the AptbConfInIfac field
     */
    const COL_APTBCONFINIFAC = 'ap_config.AptbConfInIfac';

    /**
     * the column name for the AptbConfSoIfac field
     */
    const COL_APTBCONFSOIFAC = 'ap_config.AptbConfSoIfac';

    /**
     * the column name for the AptbConfPoIfac field
     */
    const COL_APTBCONFPOIFAC = 'ap_config.AptbConfPoIfac';

    /**
     * the column name for the AptbConfFrtAcct field
     */
    const COL_APTBCONFFRTACCT = 'ap_config.AptbConfFrtAcct';

    /**
     * the column name for the AptbConfMiscAcct field
     */
    const COL_APTBCONFMISCACCT = 'ap_config.AptbConfMiscAcct';

    /**
     * the column name for the AptbConfApAcct field
     */
    const COL_APTBCONFAPACCT = 'ap_config.AptbConfApAcct';

    /**
     * the column name for the AptbConfCashAcct field
     */
    const COL_APTBCONFCASHACCT = 'ap_config.AptbConfCashAcct';

    /**
     * the column name for the AptbConfDiscAcct field
     */
    const COL_APTBCONFDISCACCT = 'ap_config.AptbConfDiscAcct';

    /**
     * the column name for the AptbConfTaxAcct field
     */
    const COL_APTBCONFTAXACCT = 'ap_config.AptbConfTaxAcct';

    /**
     * the column name for the AptbConfPurAcct field
     */
    const COL_APTBCONFPURACCT = 'ap_config.AptbConfPurAcct';

    /**
     * the column name for the AptbConfVarAcct field
     */
    const COL_APTBCONFVARACCT = 'ap_config.AptbConfVarAcct';

    /**
     * the column name for the AptbConfVendDisc field
     */
    const COL_APTBCONFVENDDISC = 'ap_config.AptbConfVendDisc';

    /**
     * the column name for the AptbConfApInvVarAcct field
     */
    const COL_APTBCONFAPINVVARACCT = 'ap_config.AptbConfApInvVarAcct';

    /**
     * the column name for the AptbConfUseRoyal field
     */
    const COL_APTBCONFUSEROYAL = 'ap_config.AptbConfUseRoyal';

    /**
     * the column name for the AptbConfDefBuyrCode field
     */
    const COL_APTBCONFDEFBUYRCODE = 'ap_config.AptbConfDefBuyrCode';

    /**
     * the column name for the AptbConfDefTermCode field
     */
    const COL_APTBCONFDEFTERMCODE = 'ap_config.AptbConfDefTermCode';

    /**
     * the column name for the AptbConfDefSviaCode field
     */
    const COL_APTBCONFDEFSVIACODE = 'ap_config.AptbConfDefSviaCode';

    /**
     * the column name for the AptbConfDefTypeCode field
     */
    const COL_APTBCONFDEFTYPECODE = 'ap_config.AptbConfDefTypeCode';

    /**
     * the column name for the AptbConfVendLine field
     */
    const COL_APTBCONFVENDLINE = 'ap_config.AptbConfVendLine';

    /**
     * the column name for the AptbConfVendCols field
     */
    const COL_APTBCONFVENDCOLS = 'ap_config.AptbConfVendCols';

    /**
     * the column name for the AptbConfPoLine field
     */
    const COL_APTBCONFPOLINE = 'ap_config.AptbConfPoLine';

    /**
     * the column name for the AptbConfPoCols field
     */
    const COL_APTBCONFPOCOLS = 'ap_config.AptbConfPoCols';

    /**
     * the column name for the AptbConfVendGetOpt field
     */
    const COL_APTBCONFVENDGETOPT = 'ap_config.AptbConfVendGetOpt';

    /**
     * the column name for the AptbConfPaytoShipfr field
     */
    const COL_APTBCONFPAYTOSHIPFR = 'ap_config.AptbConfPaytoShipfr';

    /**
     * the column name for the AptbConfHoldStat field
     */
    const COL_APTBCONFHOLDSTAT = 'ap_config.AptbConfHoldStat';

    /**
     * the column name for the AptbConfDiscRet field
     */
    const COL_APTBCONFDISCRET = 'ap_config.AptbConfDiscRet';

    /**
     * the column name for the AptbConfStopVendChg field
     */
    const COL_APTBCONFSTOPVENDCHG = 'ap_config.AptbConfStopVendChg';

    /**
     * the column name for the AptbConfReqDate2 field
     */
    const COL_APTBCONFREQDATE2 = 'ap_config.AptbConfReqDate2';

    /**
     * the column name for the AptbConfReqDate3 field
     */
    const COL_APTBCONFREQDATE3 = 'ap_config.AptbConfReqDate3';

    /**
     * the column name for the AptbConfReqDate4 field
     */
    const COL_APTBCONFREQDATE4 = 'ap_config.AptbConfReqDate4';

    /**
     * the column name for the AptbConf1099Name field
     */
    const COL_APTBCONF1099NAME = 'ap_config.AptbConf1099Name';

    /**
     * the column name for the AptbConf1099Adr1 field
     */
    const COL_APTBCONF1099ADR1 = 'ap_config.AptbConf1099Adr1';

    /**
     * the column name for the AptbConf1099Adr2 field
     */
    const COL_APTBCONF1099ADR2 = 'ap_config.AptbConf1099Adr2';

    /**
     * the column name for the AptbConf1099Adr3 field
     */
    const COL_APTBCONF1099ADR3 = 'ap_config.AptbConf1099Adr3';

    /**
     * the column name for the AptbConf1099City field
     */
    const COL_APTBCONF1099CITY = 'ap_config.AptbConf1099City';

    /**
     * the column name for the AptbConf1099Stat field
     */
    const COL_APTBCONF1099STAT = 'ap_config.AptbConf1099Stat';

    /**
     * the column name for the AptbConf1099ZipCode field
     */
    const COL_APTBCONF1099ZIPCODE = 'ap_config.AptbConf1099ZipCode';

    /**
     * the column name for the AptbConf1099Id field
     */
    const COL_APTBCONF1099ID = 'ap_config.AptbConf1099Id';

    /**
     * the column name for the AptbConfStubSort field
     */
    const COL_APTBCONFSTUBSORT = 'ap_config.AptbConfStubSort';

    /**
     * the column name for the AptbConfUseAch field
     */
    const COL_APTBCONFUSEACH = 'ap_config.AptbConfUseAch';

    /**
     * the column name for the AptbConfOver1 field
     */
    const COL_APTBCONFOVER1 = 'ap_config.AptbConfOver1';

    /**
     * the column name for the AptbConfOver2 field
     */
    const COL_APTBCONFOVER2 = 'ap_config.AptbConfOver2';

    /**
     * the column name for the AptbConfPrtChk field
     */
    const COL_APTBCONFPRTCHK = 'ap_config.AptbConfPrtChk';

    /**
     * the column name for the AptbConfEiUnrecQty field
     */
    const COL_APTBCONFEIUNRECQTY = 'ap_config.AptbConfEiUnrecQty';

    /**
     * the column name for the AptbConfEiRecQtyAsk field
     */
    const COL_APTBCONFEIRECQTYASK = 'ap_config.AptbConfEiRecQtyAsk';

    /**
     * the column name for the AptbConfEiRecQtyDef field
     */
    const COL_APTBCONFEIRECQTYDEF = 'ap_config.AptbConfEiRecQtyDef';

    /**
     * the column name for the AptbConfAllowMultPos field
     */
    const COL_APTBCONFALLOWMULTPOS = 'ap_config.AptbConfAllowMultPos';

    /**
     * the column name for the AptbConfEiByClerk field
     */
    const COL_APTBCONFEIBYCLERK = 'ap_config.AptbConfEiByClerk';

    /**
     * the column name for the AptbConfEiBatchProc field
     */
    const COL_APTBCONFEIBATCHPROC = 'ap_config.AptbConfEiBatchProc';

    /**
     * the column name for the AptbConfEiDispStanCost field
     */
    const COL_APTBCONFEIDISPSTANCOST = 'ap_config.AptbConfEiDispStanCost';

    /**
     * the column name for the AptbConfEiAssetAcctChg field
     */
    const COL_APTBCONFEIASSETACCTCHG = 'ap_config.AptbConfEiAssetAcctChg';

    /**
     * the column name for the AptbConfAllowDupInvc field
     */
    const COL_APTBCONFALLOWDUPINVC = 'ap_config.AptbConfAllowDupInvc';

    /**
     * the column name for the AptbConfPrtSoRept field
     */
    const COL_APTBCONFPRTSOREPT = 'ap_config.AptbConfPrtSoRept';

    /**
     * the column name for the AptbConfEiCheckHist field
     */
    const COL_APTBCONFEICHECKHIST = 'ap_config.AptbConfEiCheckHist';

    /**
     * the column name for the AptbConfSummGl field
     */
    const COL_APTBCONFSUMMGL = 'ap_config.AptbConfSummGl';

    /**
     * the column name for the AptbConfVxmUserLabel field
     */
    const COL_APTBCONFVXMUSERLABEL = 'ap_config.AptbConfVxmUserLabel';

    /**
     * the column name for the AptbConfVendCostBreaks field
     */
    const COL_APTBCONFVENDCOSTBREAKS = 'ap_config.AptbConfVendCostBreaks';

    /**
     * the column name for the AptbConfMyeClrClosPo field
     */
    const COL_APTBCONFMYECLRCLOSPO = 'ap_config.AptbConfMyeClrClosPo';

    /**
     * the column name for the AptbConfMyeClrClosDate field
     */
    const COL_APTBCONFMYECLRCLOSDATE = 'ap_config.AptbConfMyeClrClosDate';

    /**
     * the column name for the AptbConfMyeClrPoHist field
     */
    const COL_APTBCONFMYECLRPOHIST = 'ap_config.AptbConfMyeClrPoHist';

    /**
     * the column name for the AptbConfMyeClrPoDate field
     */
    const COL_APTBCONFMYECLRPODATE = 'ap_config.AptbConfMyeClrPoDate';

    /**
     * the column name for the AptbConfMyeClrCkHist field
     */
    const COL_APTBCONFMYECLRCKHIST = 'ap_config.AptbConfMyeClrCkHist';

    /**
     * the column name for the AptbConfMyeClrCkDate field
     */
    const COL_APTBCONFMYECLRCKDATE = 'ap_config.AptbConfMyeClrCkDate';

    /**
     * the column name for the AptbConfMyeClrOpenCk field
     */
    const COL_APTBCONFMYECLROPENCK = 'ap_config.AptbConfMyeClrOpenCk';

    /**
     * the column name for the AptbConfLead field
     */
    const COL_APTBCONFLEAD = 'ap_config.AptbConfLead';

    /**
     * the column name for the AptbConfVrReworkItem field
     */
    const COL_APTBCONFVRREWORKITEM = 'ap_config.AptbConfVrReworkItem';

    /**
     * the column name for the AptbConfVrqcWhse field
     */
    const COL_APTBCONFVRQCWHSE = 'ap_config.AptbConfVrqcWhse';

    /**
     * the column name for the AptbConfVrGlAcct field
     */
    const COL_APTBCONFVRGLACCT = 'ap_config.AptbConfVrGlAcct';

    /**
     * the column name for the AptbConfVxmListPc field
     */
    const COL_APTBCONFVXMLISTPC = 'ap_config.AptbConfVxmListPc';

    /**
     * the column name for the AptbConfVxmListItemUpd field
     */
    const COL_APTBCONFVXMLISTITEMUPD = 'ap_config.AptbConfVxmListItemUpd';

    /**
     * the column name for the AptbConfVxmGrossLc field
     */
    const COL_APTBCONFVXMGROSSLC = 'ap_config.AptbConfVxmGrossLc';

    /**
     * the column name for the AptbConfVxmCostLp field
     */
    const COL_APTBCONFVXMCOSTLP = 'ap_config.AptbConfVxmCostLp';

    /**
     * the column name for the AptbConfVxmCostItemUpd field
     */
    const COL_APTBCONFVXMCOSTITEMUPD = 'ap_config.AptbConfVxmCostItemUpd';

    /**
     * the column name for the AptbConfVxmCostRMesg field
     */
    const COL_APTBCONFVXMCOSTRMESG = 'ap_config.AptbConfVxmCostRMesg';

    /**
     * the column name for the AptbConfVxmCostItemUpdM field
     */
    const COL_APTBCONFVXMCOSTITEMUPDM = 'ap_config.AptbConfVxmCostItemUpdM';

    /**
     * the column name for the AptbConfVxmCostMMesg field
     */
    const COL_APTBCONFVXMCOSTMMESG = 'ap_config.AptbConfVxmCostMMesg';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ap_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ap_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ap_config.dummy';

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
        self::TYPE_PHPNAME       => array('Aptbconfkey', 'Aptbconfglifac', 'Aptbconfinifac', 'Aptbconfsoifac', 'Aptbconfpoifac', 'Aptbconffrtacct', 'Aptbconfmiscacct', 'Aptbconfapacct', 'Aptbconfcashacct', 'Aptbconfdiscacct', 'Aptbconftaxacct', 'Aptbconfpuracct', 'Aptbconfvaracct', 'Aptbconfvenddisc', 'Aptbconfapinvvaracct', 'Aptbconfuseroyal', 'Aptbconfdefbuyrcode', 'Aptbconfdeftermcode', 'Aptbconfdefsviacode', 'Aptbconfdeftypecode', 'Aptbconfvendline', 'Aptbconfvendcols', 'Aptbconfpoline', 'Aptbconfpocols', 'Aptbconfvendgetopt', 'Aptbconfpaytoshipfr', 'Aptbconfholdstat', 'Aptbconfdiscret', 'Aptbconfstopvendchg', 'Aptbconfreqdate2', 'Aptbconfreqdate3', 'Aptbconfreqdate4', 'Aptbconf1099name', 'Aptbconf1099adr1', 'Aptbconf1099adr2', 'Aptbconf1099adr3', 'Aptbconf1099city', 'Aptbconf1099stat', 'Aptbconf1099zipcode', 'Aptbconf1099id', 'Aptbconfstubsort', 'AptbConfUseAch', 'Aptbconfover1', 'Aptbconfover2', 'Aptbconfprtchk', 'Aptbconfeiunrecqty', 'Aptbconfeirecqtyask', 'Aptbconfeirecqtydef', 'Aptbconfallowmultpos', 'Aptbconfeibyclerk', 'Aptbconfeibatchproc', 'Aptbconfeidispstancost', 'Aptbconfeiassetacctchg', 'Aptbconfallowdupinvc', 'Aptbconfprtsorept', 'Aptbconfeicheckhist', 'Aptbconfsummgl', 'Aptbconfvxmuserlabel', 'Aptbconfvendcostbreaks', 'Aptbconfmyeclrclospo', 'Aptbconfmyeclrclosdate', 'Aptbconfmyeclrpohist', 'Aptbconfmyeclrpodate', 'Aptbconfmyeclrckhist', 'Aptbconfmyeclrckdate', 'Aptbconfmyeclropenck', 'Aptbconflead', 'Aptbconfvrreworkitem', 'Aptbconfvrqcwhse', 'Aptbconfvrglacct', 'Aptbconfvxmlistpc', 'Aptbconfvxmlistitemupd', 'Aptbconfvxmgrosslc', 'Aptbconfvxmcostlp', 'Aptbconfvxmcostitemupd', 'Aptbconfvxmcostrmesg', 'Aptbconfvxmcostitemupdm', 'Aptbconfvxmcostmmesg', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('aptbconfkey', 'aptbconfglifac', 'aptbconfinifac', 'aptbconfsoifac', 'aptbconfpoifac', 'aptbconffrtacct', 'aptbconfmiscacct', 'aptbconfapacct', 'aptbconfcashacct', 'aptbconfdiscacct', 'aptbconftaxacct', 'aptbconfpuracct', 'aptbconfvaracct', 'aptbconfvenddisc', 'aptbconfapinvvaracct', 'aptbconfuseroyal', 'aptbconfdefbuyrcode', 'aptbconfdeftermcode', 'aptbconfdefsviacode', 'aptbconfdeftypecode', 'aptbconfvendline', 'aptbconfvendcols', 'aptbconfpoline', 'aptbconfpocols', 'aptbconfvendgetopt', 'aptbconfpaytoshipfr', 'aptbconfholdstat', 'aptbconfdiscret', 'aptbconfstopvendchg', 'aptbconfreqdate2', 'aptbconfreqdate3', 'aptbconfreqdate4', 'aptbconf1099name', 'aptbconf1099adr1', 'aptbconf1099adr2', 'aptbconf1099adr3', 'aptbconf1099city', 'aptbconf1099stat', 'aptbconf1099zipcode', 'aptbconf1099id', 'aptbconfstubsort', 'aptbConfUseAch', 'aptbconfover1', 'aptbconfover2', 'aptbconfprtchk', 'aptbconfeiunrecqty', 'aptbconfeirecqtyask', 'aptbconfeirecqtydef', 'aptbconfallowmultpos', 'aptbconfeibyclerk', 'aptbconfeibatchproc', 'aptbconfeidispstancost', 'aptbconfeiassetacctchg', 'aptbconfallowdupinvc', 'aptbconfprtsorept', 'aptbconfeicheckhist', 'aptbconfsummgl', 'aptbconfvxmuserlabel', 'aptbconfvendcostbreaks', 'aptbconfmyeclrclospo', 'aptbconfmyeclrclosdate', 'aptbconfmyeclrpohist', 'aptbconfmyeclrpodate', 'aptbconfmyeclrckhist', 'aptbconfmyeclrckdate', 'aptbconfmyeclropenck', 'aptbconflead', 'aptbconfvrreworkitem', 'aptbconfvrqcwhse', 'aptbconfvrglacct', 'aptbconfvxmlistpc', 'aptbconfvxmlistitemupd', 'aptbconfvxmgrosslc', 'aptbconfvxmcostlp', 'aptbconfvxmcostitemupd', 'aptbconfvxmcostrmesg', 'aptbconfvxmcostitemupdm', 'aptbconfvxmcostmmesg', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigApTableMap::COL_APTBCONFKEY, ConfigApTableMap::COL_APTBCONFGLIFAC, ConfigApTableMap::COL_APTBCONFINIFAC, ConfigApTableMap::COL_APTBCONFSOIFAC, ConfigApTableMap::COL_APTBCONFPOIFAC, ConfigApTableMap::COL_APTBCONFFRTACCT, ConfigApTableMap::COL_APTBCONFMISCACCT, ConfigApTableMap::COL_APTBCONFAPACCT, ConfigApTableMap::COL_APTBCONFCASHACCT, ConfigApTableMap::COL_APTBCONFDISCACCT, ConfigApTableMap::COL_APTBCONFTAXACCT, ConfigApTableMap::COL_APTBCONFPURACCT, ConfigApTableMap::COL_APTBCONFVARACCT, ConfigApTableMap::COL_APTBCONFVENDDISC, ConfigApTableMap::COL_APTBCONFAPINVVARACCT, ConfigApTableMap::COL_APTBCONFUSEROYAL, ConfigApTableMap::COL_APTBCONFDEFBUYRCODE, ConfigApTableMap::COL_APTBCONFDEFTERMCODE, ConfigApTableMap::COL_APTBCONFDEFSVIACODE, ConfigApTableMap::COL_APTBCONFDEFTYPECODE, ConfigApTableMap::COL_APTBCONFVENDLINE, ConfigApTableMap::COL_APTBCONFVENDCOLS, ConfigApTableMap::COL_APTBCONFPOLINE, ConfigApTableMap::COL_APTBCONFPOCOLS, ConfigApTableMap::COL_APTBCONFVENDGETOPT, ConfigApTableMap::COL_APTBCONFPAYTOSHIPFR, ConfigApTableMap::COL_APTBCONFHOLDSTAT, ConfigApTableMap::COL_APTBCONFDISCRET, ConfigApTableMap::COL_APTBCONFSTOPVENDCHG, ConfigApTableMap::COL_APTBCONFREQDATE2, ConfigApTableMap::COL_APTBCONFREQDATE3, ConfigApTableMap::COL_APTBCONFREQDATE4, ConfigApTableMap::COL_APTBCONF1099NAME, ConfigApTableMap::COL_APTBCONF1099ADR1, ConfigApTableMap::COL_APTBCONF1099ADR2, ConfigApTableMap::COL_APTBCONF1099ADR3, ConfigApTableMap::COL_APTBCONF1099CITY, ConfigApTableMap::COL_APTBCONF1099STAT, ConfigApTableMap::COL_APTBCONF1099ZIPCODE, ConfigApTableMap::COL_APTBCONF1099ID, ConfigApTableMap::COL_APTBCONFSTUBSORT, ConfigApTableMap::COL_APTBCONFUSEACH, ConfigApTableMap::COL_APTBCONFOVER1, ConfigApTableMap::COL_APTBCONFOVER2, ConfigApTableMap::COL_APTBCONFPRTCHK, ConfigApTableMap::COL_APTBCONFEIUNRECQTY, ConfigApTableMap::COL_APTBCONFEIRECQTYASK, ConfigApTableMap::COL_APTBCONFEIRECQTYDEF, ConfigApTableMap::COL_APTBCONFALLOWMULTPOS, ConfigApTableMap::COL_APTBCONFEIBYCLERK, ConfigApTableMap::COL_APTBCONFEIBATCHPROC, ConfigApTableMap::COL_APTBCONFEIDISPSTANCOST, ConfigApTableMap::COL_APTBCONFEIASSETACCTCHG, ConfigApTableMap::COL_APTBCONFALLOWDUPINVC, ConfigApTableMap::COL_APTBCONFPRTSOREPT, ConfigApTableMap::COL_APTBCONFEICHECKHIST, ConfigApTableMap::COL_APTBCONFSUMMGL, ConfigApTableMap::COL_APTBCONFVXMUSERLABEL, ConfigApTableMap::COL_APTBCONFVENDCOSTBREAKS, ConfigApTableMap::COL_APTBCONFMYECLRCLOSPO, ConfigApTableMap::COL_APTBCONFMYECLRCLOSDATE, ConfigApTableMap::COL_APTBCONFMYECLRPOHIST, ConfigApTableMap::COL_APTBCONFMYECLRPODATE, ConfigApTableMap::COL_APTBCONFMYECLRCKHIST, ConfigApTableMap::COL_APTBCONFMYECLRCKDATE, ConfigApTableMap::COL_APTBCONFMYECLROPENCK, ConfigApTableMap::COL_APTBCONFLEAD, ConfigApTableMap::COL_APTBCONFVRREWORKITEM, ConfigApTableMap::COL_APTBCONFVRQCWHSE, ConfigApTableMap::COL_APTBCONFVRGLACCT, ConfigApTableMap::COL_APTBCONFVXMLISTPC, ConfigApTableMap::COL_APTBCONFVXMLISTITEMUPD, ConfigApTableMap::COL_APTBCONFVXMGROSSLC, ConfigApTableMap::COL_APTBCONFVXMCOSTLP, ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPD, ConfigApTableMap::COL_APTBCONFVXMCOSTRMESG, ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPDM, ConfigApTableMap::COL_APTBCONFVXMCOSTMMESG, ConfigApTableMap::COL_DATEUPDTD, ConfigApTableMap::COL_TIMEUPDTD, ConfigApTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('AptbConfKey', 'AptbConfGlIfac', 'AptbConfInIfac', 'AptbConfSoIfac', 'AptbConfPoIfac', 'AptbConfFrtAcct', 'AptbConfMiscAcct', 'AptbConfApAcct', 'AptbConfCashAcct', 'AptbConfDiscAcct', 'AptbConfTaxAcct', 'AptbConfPurAcct', 'AptbConfVarAcct', 'AptbConfVendDisc', 'AptbConfApInvVarAcct', 'AptbConfUseRoyal', 'AptbConfDefBuyrCode', 'AptbConfDefTermCode', 'AptbConfDefSviaCode', 'AptbConfDefTypeCode', 'AptbConfVendLine', 'AptbConfVendCols', 'AptbConfPoLine', 'AptbConfPoCols', 'AptbConfVendGetOpt', 'AptbConfPaytoShipfr', 'AptbConfHoldStat', 'AptbConfDiscRet', 'AptbConfStopVendChg', 'AptbConfReqDate2', 'AptbConfReqDate3', 'AptbConfReqDate4', 'AptbConf1099Name', 'AptbConf1099Adr1', 'AptbConf1099Adr2', 'AptbConf1099Adr3', 'AptbConf1099City', 'AptbConf1099Stat', 'AptbConf1099ZipCode', 'AptbConf1099Id', 'AptbConfStubSort', 'AptbConfUseAch', 'AptbConfOver1', 'AptbConfOver2', 'AptbConfPrtChk', 'AptbConfEiUnrecQty', 'AptbConfEiRecQtyAsk', 'AptbConfEiRecQtyDef', 'AptbConfAllowMultPos', 'AptbConfEiByClerk', 'AptbConfEiBatchProc', 'AptbConfEiDispStanCost', 'AptbConfEiAssetAcctChg', 'AptbConfAllowDupInvc', 'AptbConfPrtSoRept', 'AptbConfEiCheckHist', 'AptbConfSummGl', 'AptbConfVxmUserLabel', 'AptbConfVendCostBreaks', 'AptbConfMyeClrClosPo', 'AptbConfMyeClrClosDate', 'AptbConfMyeClrPoHist', 'AptbConfMyeClrPoDate', 'AptbConfMyeClrCkHist', 'AptbConfMyeClrCkDate', 'AptbConfMyeClrOpenCk', 'AptbConfLead', 'AptbConfVrReworkItem', 'AptbConfVrqcWhse', 'AptbConfVrGlAcct', 'AptbConfVxmListPc', 'AptbConfVxmListItemUpd', 'AptbConfVxmGrossLc', 'AptbConfVxmCostLp', 'AptbConfVxmCostItemUpd', 'AptbConfVxmCostRMesg', 'AptbConfVxmCostItemUpdM', 'AptbConfVxmCostMMesg', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Aptbconfkey' => 0, 'Aptbconfglifac' => 1, 'Aptbconfinifac' => 2, 'Aptbconfsoifac' => 3, 'Aptbconfpoifac' => 4, 'Aptbconffrtacct' => 5, 'Aptbconfmiscacct' => 6, 'Aptbconfapacct' => 7, 'Aptbconfcashacct' => 8, 'Aptbconfdiscacct' => 9, 'Aptbconftaxacct' => 10, 'Aptbconfpuracct' => 11, 'Aptbconfvaracct' => 12, 'Aptbconfvenddisc' => 13, 'Aptbconfapinvvaracct' => 14, 'Aptbconfuseroyal' => 15, 'Aptbconfdefbuyrcode' => 16, 'Aptbconfdeftermcode' => 17, 'Aptbconfdefsviacode' => 18, 'Aptbconfdeftypecode' => 19, 'Aptbconfvendline' => 20, 'Aptbconfvendcols' => 21, 'Aptbconfpoline' => 22, 'Aptbconfpocols' => 23, 'Aptbconfvendgetopt' => 24, 'Aptbconfpaytoshipfr' => 25, 'Aptbconfholdstat' => 26, 'Aptbconfdiscret' => 27, 'Aptbconfstopvendchg' => 28, 'Aptbconfreqdate2' => 29, 'Aptbconfreqdate3' => 30, 'Aptbconfreqdate4' => 31, 'Aptbconf1099name' => 32, 'Aptbconf1099adr1' => 33, 'Aptbconf1099adr2' => 34, 'Aptbconf1099adr3' => 35, 'Aptbconf1099city' => 36, 'Aptbconf1099stat' => 37, 'Aptbconf1099zipcode' => 38, 'Aptbconf1099id' => 39, 'Aptbconfstubsort' => 40, 'AptbConfUseAch' => 41, 'Aptbconfover1' => 42, 'Aptbconfover2' => 43, 'Aptbconfprtchk' => 44, 'Aptbconfeiunrecqty' => 45, 'Aptbconfeirecqtyask' => 46, 'Aptbconfeirecqtydef' => 47, 'Aptbconfallowmultpos' => 48, 'Aptbconfeibyclerk' => 49, 'Aptbconfeibatchproc' => 50, 'Aptbconfeidispstancost' => 51, 'Aptbconfeiassetacctchg' => 52, 'Aptbconfallowdupinvc' => 53, 'Aptbconfprtsorept' => 54, 'Aptbconfeicheckhist' => 55, 'Aptbconfsummgl' => 56, 'Aptbconfvxmuserlabel' => 57, 'Aptbconfvendcostbreaks' => 58, 'Aptbconfmyeclrclospo' => 59, 'Aptbconfmyeclrclosdate' => 60, 'Aptbconfmyeclrpohist' => 61, 'Aptbconfmyeclrpodate' => 62, 'Aptbconfmyeclrckhist' => 63, 'Aptbconfmyeclrckdate' => 64, 'Aptbconfmyeclropenck' => 65, 'Aptbconflead' => 66, 'Aptbconfvrreworkitem' => 67, 'Aptbconfvrqcwhse' => 68, 'Aptbconfvrglacct' => 69, 'Aptbconfvxmlistpc' => 70, 'Aptbconfvxmlistitemupd' => 71, 'Aptbconfvxmgrosslc' => 72, 'Aptbconfvxmcostlp' => 73, 'Aptbconfvxmcostitemupd' => 74, 'Aptbconfvxmcostrmesg' => 75, 'Aptbconfvxmcostitemupdm' => 76, 'Aptbconfvxmcostmmesg' => 77, 'Dateupdtd' => 78, 'Timeupdtd' => 79, 'Dummy' => 80, ),
        self::TYPE_CAMELNAME     => array('aptbconfkey' => 0, 'aptbconfglifac' => 1, 'aptbconfinifac' => 2, 'aptbconfsoifac' => 3, 'aptbconfpoifac' => 4, 'aptbconffrtacct' => 5, 'aptbconfmiscacct' => 6, 'aptbconfapacct' => 7, 'aptbconfcashacct' => 8, 'aptbconfdiscacct' => 9, 'aptbconftaxacct' => 10, 'aptbconfpuracct' => 11, 'aptbconfvaracct' => 12, 'aptbconfvenddisc' => 13, 'aptbconfapinvvaracct' => 14, 'aptbconfuseroyal' => 15, 'aptbconfdefbuyrcode' => 16, 'aptbconfdeftermcode' => 17, 'aptbconfdefsviacode' => 18, 'aptbconfdeftypecode' => 19, 'aptbconfvendline' => 20, 'aptbconfvendcols' => 21, 'aptbconfpoline' => 22, 'aptbconfpocols' => 23, 'aptbconfvendgetopt' => 24, 'aptbconfpaytoshipfr' => 25, 'aptbconfholdstat' => 26, 'aptbconfdiscret' => 27, 'aptbconfstopvendchg' => 28, 'aptbconfreqdate2' => 29, 'aptbconfreqdate3' => 30, 'aptbconfreqdate4' => 31, 'aptbconf1099name' => 32, 'aptbconf1099adr1' => 33, 'aptbconf1099adr2' => 34, 'aptbconf1099adr3' => 35, 'aptbconf1099city' => 36, 'aptbconf1099stat' => 37, 'aptbconf1099zipcode' => 38, 'aptbconf1099id' => 39, 'aptbconfstubsort' => 40, 'aptbConfUseAch' => 41, 'aptbconfover1' => 42, 'aptbconfover2' => 43, 'aptbconfprtchk' => 44, 'aptbconfeiunrecqty' => 45, 'aptbconfeirecqtyask' => 46, 'aptbconfeirecqtydef' => 47, 'aptbconfallowmultpos' => 48, 'aptbconfeibyclerk' => 49, 'aptbconfeibatchproc' => 50, 'aptbconfeidispstancost' => 51, 'aptbconfeiassetacctchg' => 52, 'aptbconfallowdupinvc' => 53, 'aptbconfprtsorept' => 54, 'aptbconfeicheckhist' => 55, 'aptbconfsummgl' => 56, 'aptbconfvxmuserlabel' => 57, 'aptbconfvendcostbreaks' => 58, 'aptbconfmyeclrclospo' => 59, 'aptbconfmyeclrclosdate' => 60, 'aptbconfmyeclrpohist' => 61, 'aptbconfmyeclrpodate' => 62, 'aptbconfmyeclrckhist' => 63, 'aptbconfmyeclrckdate' => 64, 'aptbconfmyeclropenck' => 65, 'aptbconflead' => 66, 'aptbconfvrreworkitem' => 67, 'aptbconfvrqcwhse' => 68, 'aptbconfvrglacct' => 69, 'aptbconfvxmlistpc' => 70, 'aptbconfvxmlistitemupd' => 71, 'aptbconfvxmgrosslc' => 72, 'aptbconfvxmcostlp' => 73, 'aptbconfvxmcostitemupd' => 74, 'aptbconfvxmcostrmesg' => 75, 'aptbconfvxmcostitemupdm' => 76, 'aptbconfvxmcostmmesg' => 77, 'dateupdtd' => 78, 'timeupdtd' => 79, 'dummy' => 80, ),
        self::TYPE_COLNAME       => array(ConfigApTableMap::COL_APTBCONFKEY => 0, ConfigApTableMap::COL_APTBCONFGLIFAC => 1, ConfigApTableMap::COL_APTBCONFINIFAC => 2, ConfigApTableMap::COL_APTBCONFSOIFAC => 3, ConfigApTableMap::COL_APTBCONFPOIFAC => 4, ConfigApTableMap::COL_APTBCONFFRTACCT => 5, ConfigApTableMap::COL_APTBCONFMISCACCT => 6, ConfigApTableMap::COL_APTBCONFAPACCT => 7, ConfigApTableMap::COL_APTBCONFCASHACCT => 8, ConfigApTableMap::COL_APTBCONFDISCACCT => 9, ConfigApTableMap::COL_APTBCONFTAXACCT => 10, ConfigApTableMap::COL_APTBCONFPURACCT => 11, ConfigApTableMap::COL_APTBCONFVARACCT => 12, ConfigApTableMap::COL_APTBCONFVENDDISC => 13, ConfigApTableMap::COL_APTBCONFAPINVVARACCT => 14, ConfigApTableMap::COL_APTBCONFUSEROYAL => 15, ConfigApTableMap::COL_APTBCONFDEFBUYRCODE => 16, ConfigApTableMap::COL_APTBCONFDEFTERMCODE => 17, ConfigApTableMap::COL_APTBCONFDEFSVIACODE => 18, ConfigApTableMap::COL_APTBCONFDEFTYPECODE => 19, ConfigApTableMap::COL_APTBCONFVENDLINE => 20, ConfigApTableMap::COL_APTBCONFVENDCOLS => 21, ConfigApTableMap::COL_APTBCONFPOLINE => 22, ConfigApTableMap::COL_APTBCONFPOCOLS => 23, ConfigApTableMap::COL_APTBCONFVENDGETOPT => 24, ConfigApTableMap::COL_APTBCONFPAYTOSHIPFR => 25, ConfigApTableMap::COL_APTBCONFHOLDSTAT => 26, ConfigApTableMap::COL_APTBCONFDISCRET => 27, ConfigApTableMap::COL_APTBCONFSTOPVENDCHG => 28, ConfigApTableMap::COL_APTBCONFREQDATE2 => 29, ConfigApTableMap::COL_APTBCONFREQDATE3 => 30, ConfigApTableMap::COL_APTBCONFREQDATE4 => 31, ConfigApTableMap::COL_APTBCONF1099NAME => 32, ConfigApTableMap::COL_APTBCONF1099ADR1 => 33, ConfigApTableMap::COL_APTBCONF1099ADR2 => 34, ConfigApTableMap::COL_APTBCONF1099ADR3 => 35, ConfigApTableMap::COL_APTBCONF1099CITY => 36, ConfigApTableMap::COL_APTBCONF1099STAT => 37, ConfigApTableMap::COL_APTBCONF1099ZIPCODE => 38, ConfigApTableMap::COL_APTBCONF1099ID => 39, ConfigApTableMap::COL_APTBCONFSTUBSORT => 40, ConfigApTableMap::COL_APTBCONFUSEACH => 41, ConfigApTableMap::COL_APTBCONFOVER1 => 42, ConfigApTableMap::COL_APTBCONFOVER2 => 43, ConfigApTableMap::COL_APTBCONFPRTCHK => 44, ConfigApTableMap::COL_APTBCONFEIUNRECQTY => 45, ConfigApTableMap::COL_APTBCONFEIRECQTYASK => 46, ConfigApTableMap::COL_APTBCONFEIRECQTYDEF => 47, ConfigApTableMap::COL_APTBCONFALLOWMULTPOS => 48, ConfigApTableMap::COL_APTBCONFEIBYCLERK => 49, ConfigApTableMap::COL_APTBCONFEIBATCHPROC => 50, ConfigApTableMap::COL_APTBCONFEIDISPSTANCOST => 51, ConfigApTableMap::COL_APTBCONFEIASSETACCTCHG => 52, ConfigApTableMap::COL_APTBCONFALLOWDUPINVC => 53, ConfigApTableMap::COL_APTBCONFPRTSOREPT => 54, ConfigApTableMap::COL_APTBCONFEICHECKHIST => 55, ConfigApTableMap::COL_APTBCONFSUMMGL => 56, ConfigApTableMap::COL_APTBCONFVXMUSERLABEL => 57, ConfigApTableMap::COL_APTBCONFVENDCOSTBREAKS => 58, ConfigApTableMap::COL_APTBCONFMYECLRCLOSPO => 59, ConfigApTableMap::COL_APTBCONFMYECLRCLOSDATE => 60, ConfigApTableMap::COL_APTBCONFMYECLRPOHIST => 61, ConfigApTableMap::COL_APTBCONFMYECLRPODATE => 62, ConfigApTableMap::COL_APTBCONFMYECLRCKHIST => 63, ConfigApTableMap::COL_APTBCONFMYECLRCKDATE => 64, ConfigApTableMap::COL_APTBCONFMYECLROPENCK => 65, ConfigApTableMap::COL_APTBCONFLEAD => 66, ConfigApTableMap::COL_APTBCONFVRREWORKITEM => 67, ConfigApTableMap::COL_APTBCONFVRQCWHSE => 68, ConfigApTableMap::COL_APTBCONFVRGLACCT => 69, ConfigApTableMap::COL_APTBCONFVXMLISTPC => 70, ConfigApTableMap::COL_APTBCONFVXMLISTITEMUPD => 71, ConfigApTableMap::COL_APTBCONFVXMGROSSLC => 72, ConfigApTableMap::COL_APTBCONFVXMCOSTLP => 73, ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPD => 74, ConfigApTableMap::COL_APTBCONFVXMCOSTRMESG => 75, ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPDM => 76, ConfigApTableMap::COL_APTBCONFVXMCOSTMMESG => 77, ConfigApTableMap::COL_DATEUPDTD => 78, ConfigApTableMap::COL_TIMEUPDTD => 79, ConfigApTableMap::COL_DUMMY => 80, ),
        self::TYPE_FIELDNAME     => array('AptbConfKey' => 0, 'AptbConfGlIfac' => 1, 'AptbConfInIfac' => 2, 'AptbConfSoIfac' => 3, 'AptbConfPoIfac' => 4, 'AptbConfFrtAcct' => 5, 'AptbConfMiscAcct' => 6, 'AptbConfApAcct' => 7, 'AptbConfCashAcct' => 8, 'AptbConfDiscAcct' => 9, 'AptbConfTaxAcct' => 10, 'AptbConfPurAcct' => 11, 'AptbConfVarAcct' => 12, 'AptbConfVendDisc' => 13, 'AptbConfApInvVarAcct' => 14, 'AptbConfUseRoyal' => 15, 'AptbConfDefBuyrCode' => 16, 'AptbConfDefTermCode' => 17, 'AptbConfDefSviaCode' => 18, 'AptbConfDefTypeCode' => 19, 'AptbConfVendLine' => 20, 'AptbConfVendCols' => 21, 'AptbConfPoLine' => 22, 'AptbConfPoCols' => 23, 'AptbConfVendGetOpt' => 24, 'AptbConfPaytoShipfr' => 25, 'AptbConfHoldStat' => 26, 'AptbConfDiscRet' => 27, 'AptbConfStopVendChg' => 28, 'AptbConfReqDate2' => 29, 'AptbConfReqDate3' => 30, 'AptbConfReqDate4' => 31, 'AptbConf1099Name' => 32, 'AptbConf1099Adr1' => 33, 'AptbConf1099Adr2' => 34, 'AptbConf1099Adr3' => 35, 'AptbConf1099City' => 36, 'AptbConf1099Stat' => 37, 'AptbConf1099ZipCode' => 38, 'AptbConf1099Id' => 39, 'AptbConfStubSort' => 40, 'AptbConfUseAch' => 41, 'AptbConfOver1' => 42, 'AptbConfOver2' => 43, 'AptbConfPrtChk' => 44, 'AptbConfEiUnrecQty' => 45, 'AptbConfEiRecQtyAsk' => 46, 'AptbConfEiRecQtyDef' => 47, 'AptbConfAllowMultPos' => 48, 'AptbConfEiByClerk' => 49, 'AptbConfEiBatchProc' => 50, 'AptbConfEiDispStanCost' => 51, 'AptbConfEiAssetAcctChg' => 52, 'AptbConfAllowDupInvc' => 53, 'AptbConfPrtSoRept' => 54, 'AptbConfEiCheckHist' => 55, 'AptbConfSummGl' => 56, 'AptbConfVxmUserLabel' => 57, 'AptbConfVendCostBreaks' => 58, 'AptbConfMyeClrClosPo' => 59, 'AptbConfMyeClrClosDate' => 60, 'AptbConfMyeClrPoHist' => 61, 'AptbConfMyeClrPoDate' => 62, 'AptbConfMyeClrCkHist' => 63, 'AptbConfMyeClrCkDate' => 64, 'AptbConfMyeClrOpenCk' => 65, 'AptbConfLead' => 66, 'AptbConfVrReworkItem' => 67, 'AptbConfVrqcWhse' => 68, 'AptbConfVrGlAcct' => 69, 'AptbConfVxmListPc' => 70, 'AptbConfVxmListItemUpd' => 71, 'AptbConfVxmGrossLc' => 72, 'AptbConfVxmCostLp' => 73, 'AptbConfVxmCostItemUpd' => 74, 'AptbConfVxmCostRMesg' => 75, 'AptbConfVxmCostItemUpdM' => 76, 'AptbConfVxmCostMMesg' => 77, 'DateUpdtd' => 78, 'TimeUpdtd' => 79, 'dummy' => 80, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, )
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
        $this->setName('ap_config');
        $this->setPhpName('ConfigAp');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigAp');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('AptbConfKey', 'Aptbconfkey', 'INTEGER', true, 1, 0);
        $this->addColumn('AptbConfGlIfac', 'Aptbconfglifac', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfInIfac', 'Aptbconfinifac', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfSoIfac', 'Aptbconfsoifac', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfPoIfac', 'Aptbconfpoifac', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfFrtAcct', 'Aptbconffrtacct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfMiscAcct', 'Aptbconfmiscacct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfApAcct', 'Aptbconfapacct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfCashAcct', 'Aptbconfcashacct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfDiscAcct', 'Aptbconfdiscacct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfTaxAcct', 'Aptbconftaxacct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfPurAcct', 'Aptbconfpuracct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfVarAcct', 'Aptbconfvaracct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfVendDisc', 'Aptbconfvenddisc', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfApInvVarAcct', 'Aptbconfapinvvaracct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfUseRoyal', 'Aptbconfuseroyal', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfDefBuyrCode', 'Aptbconfdefbuyrcode', 'VARCHAR', false, 6, null);
        $this->addColumn('AptbConfDefTermCode', 'Aptbconfdeftermcode', 'VARCHAR', false, 4, null);
        $this->addColumn('AptbConfDefSviaCode', 'Aptbconfdefsviacode', 'VARCHAR', false, 4, null);
        $this->addColumn('AptbConfDefTypeCode', 'Aptbconfdeftypecode', 'VARCHAR', false, 4, null);
        $this->addColumn('AptbConfVendLine', 'Aptbconfvendline', 'INTEGER', false, 2, null);
        $this->addColumn('AptbConfVendCols', 'Aptbconfvendcols', 'INTEGER', false, 2, null);
        $this->addColumn('AptbConfPoLine', 'Aptbconfpoline', 'INTEGER', false, 2, null);
        $this->addColumn('AptbConfPoCols', 'Aptbconfpocols', 'INTEGER', false, 2, null);
        $this->addColumn('AptbConfVendGetOpt', 'Aptbconfvendgetopt', 'INTEGER', false, 1, null);
        $this->addColumn('AptbConfPaytoShipfr', 'Aptbconfpaytoshipfr', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfHoldStat', 'Aptbconfholdstat', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfDiscRet', 'Aptbconfdiscret', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfStopVendChg', 'Aptbconfstopvendchg', 'INTEGER', false, 4, null);
        $this->addColumn('AptbConfReqDate2', 'Aptbconfreqdate2', 'INTEGER', false, 3, null);
        $this->addColumn('AptbConfReqDate3', 'Aptbconfreqdate3', 'INTEGER', false, 3, null);
        $this->addColumn('AptbConfReqDate4', 'Aptbconfreqdate4', 'INTEGER', false, 3, null);
        $this->addColumn('AptbConf1099Name', 'Aptbconf1099name', 'VARCHAR', false, 30, null);
        $this->addColumn('AptbConf1099Adr1', 'Aptbconf1099adr1', 'VARCHAR', false, 30, null);
        $this->addColumn('AptbConf1099Adr2', 'Aptbconf1099adr2', 'VARCHAR', false, 30, null);
        $this->addColumn('AptbConf1099Adr3', 'Aptbconf1099adr3', 'VARCHAR', false, 30, null);
        $this->addColumn('AptbConf1099City', 'Aptbconf1099city', 'VARCHAR', false, 16, null);
        $this->addColumn('AptbConf1099Stat', 'Aptbconf1099stat', 'VARCHAR', false, 2, null);
        $this->addColumn('AptbConf1099ZipCode', 'Aptbconf1099zipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('AptbConf1099Id', 'Aptbconf1099id', 'VARCHAR', false, 15, null);
        $this->addColumn('AptbConfStubSort', 'Aptbconfstubsort', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfUseAch', 'AptbConfUseAch', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfOver1', 'Aptbconfover1', 'INTEGER', false, 3, null);
        $this->addColumn('AptbConfOver2', 'Aptbconfover2', 'INTEGER', false, 3, null);
        $this->addColumn('AptbConfPrtChk', 'Aptbconfprtchk', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfEiUnrecQty', 'Aptbconfeiunrecqty', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfEiRecQtyAsk', 'Aptbconfeirecqtyask', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfEiRecQtyDef', 'Aptbconfeirecqtydef', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfAllowMultPos', 'Aptbconfallowmultpos', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfEiByClerk', 'Aptbconfeibyclerk', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfEiBatchProc', 'Aptbconfeibatchproc', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfEiDispStanCost', 'Aptbconfeidispstancost', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfEiAssetAcctChg', 'Aptbconfeiassetacctchg', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfAllowDupInvc', 'Aptbconfallowdupinvc', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfPrtSoRept', 'Aptbconfprtsorept', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfEiCheckHist', 'Aptbconfeicheckhist', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfSummGl', 'Aptbconfsummgl', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVxmUserLabel', 'Aptbconfvxmuserlabel', 'VARCHAR', false, 8, null);
        $this->addColumn('AptbConfVendCostBreaks', 'Aptbconfvendcostbreaks', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfMyeClrClosPo', 'Aptbconfmyeclrclospo', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfMyeClrClosDate', 'Aptbconfmyeclrclosdate', 'VARCHAR', false, 8, null);
        $this->addColumn('AptbConfMyeClrPoHist', 'Aptbconfmyeclrpohist', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfMyeClrPoDate', 'Aptbconfmyeclrpodate', 'VARCHAR', false, 8, null);
        $this->addColumn('AptbConfMyeClrCkHist', 'Aptbconfmyeclrckhist', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfMyeClrCkDate', 'Aptbconfmyeclrckdate', 'VARCHAR', false, 8, null);
        $this->addColumn('AptbConfMyeClrOpenCk', 'Aptbconfmyeclropenck', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfLead', 'Aptbconflead', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVrReworkItem', 'Aptbconfvrreworkitem', 'VARCHAR', false, 30, null);
        $this->addColumn('AptbConfVrqcWhse', 'Aptbconfvrqcwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('AptbConfVrGlAcct', 'Aptbconfvrglacct', 'VARCHAR', false, 9, null);
        $this->addColumn('AptbConfVxmListPc', 'Aptbconfvxmlistpc', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVxmListItemUpd', 'Aptbconfvxmlistitemupd', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVxmGrossLc', 'Aptbconfvxmgrosslc', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVxmCostLp', 'Aptbconfvxmcostlp', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVxmCostItemUpd', 'Aptbconfvxmcostitemupd', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVxmCostRMesg', 'Aptbconfvxmcostrmesg', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVxmCostItemUpdM', 'Aptbconfvxmcostitemupdm', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbConfVxmCostMMesg', 'Aptbconfvxmcostmmesg', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Aptbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigApTableMap::CLASS_DEFAULT : ConfigApTableMap::OM_CLASS;
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
     * @return array           (ConfigAp object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigApTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigApTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigApTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigApTableMap::OM_CLASS;
            /** @var ConfigAp $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigApTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigApTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigApTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigAp $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigApTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFKEY);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFGLIFAC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFINIFAC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFSOIFAC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFPOIFAC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFFRTACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFMISCACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFAPACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFCASHACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFDISCACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFTAXACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFPURACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVARACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVENDDISC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFAPINVVARACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFUSEROYAL);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFDEFBUYRCODE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFDEFTERMCODE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFDEFSVIACODE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFDEFTYPECODE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVENDLINE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVENDCOLS);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFPOLINE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFPOCOLS);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVENDGETOPT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFPAYTOSHIPFR);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFHOLDSTAT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFDISCRET);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFSTOPVENDCHG);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFREQDATE2);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFREQDATE3);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFREQDATE4);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONF1099NAME);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONF1099ADR1);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONF1099ADR2);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONF1099ADR3);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONF1099CITY);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONF1099STAT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONF1099ZIPCODE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONF1099ID);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFSTUBSORT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFUSEACH);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFOVER1);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFOVER2);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFPRTCHK);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFEIUNRECQTY);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFEIRECQTYASK);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFEIRECQTYDEF);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFALLOWMULTPOS);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFEIBYCLERK);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFEIBATCHPROC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFEIDISPSTANCOST);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFEIASSETACCTCHG);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFALLOWDUPINVC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFPRTSOREPT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFEICHECKHIST);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFSUMMGL);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMUSERLABEL);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVENDCOSTBREAKS);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFMYECLRCLOSPO);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFMYECLRCLOSDATE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFMYECLRPOHIST);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFMYECLRPODATE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFMYECLRCKHIST);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFMYECLRCKDATE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFMYECLROPENCK);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFLEAD);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVRREWORKITEM);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVRQCWHSE);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVRGLACCT);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMLISTPC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMLISTITEMUPD);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMGROSSLC);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMCOSTLP);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPD);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMCOSTRMESG);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPDM);
            $criteria->addSelectColumn(ConfigApTableMap::COL_APTBCONFVXMCOSTMMESG);
            $criteria->addSelectColumn(ConfigApTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigApTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigApTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.AptbConfKey');
            $criteria->addSelectColumn($alias . '.AptbConfGlIfac');
            $criteria->addSelectColumn($alias . '.AptbConfInIfac');
            $criteria->addSelectColumn($alias . '.AptbConfSoIfac');
            $criteria->addSelectColumn($alias . '.AptbConfPoIfac');
            $criteria->addSelectColumn($alias . '.AptbConfFrtAcct');
            $criteria->addSelectColumn($alias . '.AptbConfMiscAcct');
            $criteria->addSelectColumn($alias . '.AptbConfApAcct');
            $criteria->addSelectColumn($alias . '.AptbConfCashAcct');
            $criteria->addSelectColumn($alias . '.AptbConfDiscAcct');
            $criteria->addSelectColumn($alias . '.AptbConfTaxAcct');
            $criteria->addSelectColumn($alias . '.AptbConfPurAcct');
            $criteria->addSelectColumn($alias . '.AptbConfVarAcct');
            $criteria->addSelectColumn($alias . '.AptbConfVendDisc');
            $criteria->addSelectColumn($alias . '.AptbConfApInvVarAcct');
            $criteria->addSelectColumn($alias . '.AptbConfUseRoyal');
            $criteria->addSelectColumn($alias . '.AptbConfDefBuyrCode');
            $criteria->addSelectColumn($alias . '.AptbConfDefTermCode');
            $criteria->addSelectColumn($alias . '.AptbConfDefSviaCode');
            $criteria->addSelectColumn($alias . '.AptbConfDefTypeCode');
            $criteria->addSelectColumn($alias . '.AptbConfVendLine');
            $criteria->addSelectColumn($alias . '.AptbConfVendCols');
            $criteria->addSelectColumn($alias . '.AptbConfPoLine');
            $criteria->addSelectColumn($alias . '.AptbConfPoCols');
            $criteria->addSelectColumn($alias . '.AptbConfVendGetOpt');
            $criteria->addSelectColumn($alias . '.AptbConfPaytoShipfr');
            $criteria->addSelectColumn($alias . '.AptbConfHoldStat');
            $criteria->addSelectColumn($alias . '.AptbConfDiscRet');
            $criteria->addSelectColumn($alias . '.AptbConfStopVendChg');
            $criteria->addSelectColumn($alias . '.AptbConfReqDate2');
            $criteria->addSelectColumn($alias . '.AptbConfReqDate3');
            $criteria->addSelectColumn($alias . '.AptbConfReqDate4');
            $criteria->addSelectColumn($alias . '.AptbConf1099Name');
            $criteria->addSelectColumn($alias . '.AptbConf1099Adr1');
            $criteria->addSelectColumn($alias . '.AptbConf1099Adr2');
            $criteria->addSelectColumn($alias . '.AptbConf1099Adr3');
            $criteria->addSelectColumn($alias . '.AptbConf1099City');
            $criteria->addSelectColumn($alias . '.AptbConf1099Stat');
            $criteria->addSelectColumn($alias . '.AptbConf1099ZipCode');
            $criteria->addSelectColumn($alias . '.AptbConf1099Id');
            $criteria->addSelectColumn($alias . '.AptbConfStubSort');
            $criteria->addSelectColumn($alias . '.AptbConfUseAch');
            $criteria->addSelectColumn($alias . '.AptbConfOver1');
            $criteria->addSelectColumn($alias . '.AptbConfOver2');
            $criteria->addSelectColumn($alias . '.AptbConfPrtChk');
            $criteria->addSelectColumn($alias . '.AptbConfEiUnrecQty');
            $criteria->addSelectColumn($alias . '.AptbConfEiRecQtyAsk');
            $criteria->addSelectColumn($alias . '.AptbConfEiRecQtyDef');
            $criteria->addSelectColumn($alias . '.AptbConfAllowMultPos');
            $criteria->addSelectColumn($alias . '.AptbConfEiByClerk');
            $criteria->addSelectColumn($alias . '.AptbConfEiBatchProc');
            $criteria->addSelectColumn($alias . '.AptbConfEiDispStanCost');
            $criteria->addSelectColumn($alias . '.AptbConfEiAssetAcctChg');
            $criteria->addSelectColumn($alias . '.AptbConfAllowDupInvc');
            $criteria->addSelectColumn($alias . '.AptbConfPrtSoRept');
            $criteria->addSelectColumn($alias . '.AptbConfEiCheckHist');
            $criteria->addSelectColumn($alias . '.AptbConfSummGl');
            $criteria->addSelectColumn($alias . '.AptbConfVxmUserLabel');
            $criteria->addSelectColumn($alias . '.AptbConfVendCostBreaks');
            $criteria->addSelectColumn($alias . '.AptbConfMyeClrClosPo');
            $criteria->addSelectColumn($alias . '.AptbConfMyeClrClosDate');
            $criteria->addSelectColumn($alias . '.AptbConfMyeClrPoHist');
            $criteria->addSelectColumn($alias . '.AptbConfMyeClrPoDate');
            $criteria->addSelectColumn($alias . '.AptbConfMyeClrCkHist');
            $criteria->addSelectColumn($alias . '.AptbConfMyeClrCkDate');
            $criteria->addSelectColumn($alias . '.AptbConfMyeClrOpenCk');
            $criteria->addSelectColumn($alias . '.AptbConfLead');
            $criteria->addSelectColumn($alias . '.AptbConfVrReworkItem');
            $criteria->addSelectColumn($alias . '.AptbConfVrqcWhse');
            $criteria->addSelectColumn($alias . '.AptbConfVrGlAcct');
            $criteria->addSelectColumn($alias . '.AptbConfVxmListPc');
            $criteria->addSelectColumn($alias . '.AptbConfVxmListItemUpd');
            $criteria->addSelectColumn($alias . '.AptbConfVxmGrossLc');
            $criteria->addSelectColumn($alias . '.AptbConfVxmCostLp');
            $criteria->addSelectColumn($alias . '.AptbConfVxmCostItemUpd');
            $criteria->addSelectColumn($alias . '.AptbConfVxmCostRMesg');
            $criteria->addSelectColumn($alias . '.AptbConfVxmCostItemUpdM');
            $criteria->addSelectColumn($alias . '.AptbConfVxmCostMMesg');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigApTableMap::DATABASE_NAME)->getTable(ConfigApTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigApTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigApTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigApTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigAp or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigAp object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigApTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigAp) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigApTableMap::DATABASE_NAME);
            $criteria->add(ConfigApTableMap::COL_APTBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigApQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigApTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigApTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ap_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigApQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigAp or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigAp object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigApTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigAp object
        }


        // Set the correct dbName
        $query = ConfigApQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigApTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigApTableMap::buildTableMap();
