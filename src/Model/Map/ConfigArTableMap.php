<?php

namespace Map;

use \ConfigAr;
use \ConfigArQuery;
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
 * This class defines the structure of the 'ar_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigArTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigArTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigAr';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigAr';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 117;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 117;

    /**
     * the column name for the ArtbConfKey field
     */
    const COL_ARTBCONFKEY = 'ar_config.ArtbConfKey';

    /**
     * the column name for the ArtbConfGlIfac field
     */
    const COL_ARTBCONFGLIFAC = 'ar_config.ArtbConfGlIfac';

    /**
     * the column name for the ArtbConfInIfac field
     */
    const COL_ARTBCONFINIFAC = 'ar_config.ArtbConfInIfac';

    /**
     * the column name for the ArtbConfPcIfac field
     */
    const COL_ARTBCONFPCIFAC = 'ar_config.ArtbConfPcIfac';

    /**
     * the column name for the ArtbConfCcIfac field
     */
    const COL_ARTBCONFCCIFAC = 'ar_config.ArtbConfCcIfac';

    /**
     * the column name for the ArtbConfInvCustGl field
     */
    const COL_ARTBCONFINVCUSTGL = 'ar_config.ArtbConfInvCustGl';

    /**
     * the column name for the ArtbConfFrtAcct field
     */
    const COL_ARTBCONFFRTACCT = 'ar_config.ArtbConfFrtAcct';

    /**
     * the column name for the ArtbConfMiscAcct field
     */
    const COL_ARTBCONFMISCACCT = 'ar_config.ArtbConfMiscAcct';

    /**
     * the column name for the ArtbConfArAcct field
     */
    const COL_ARTBCONFARACCT = 'ar_config.ArtbConfArAcct';

    /**
     * the column name for the ArtbConfCashAcct field
     */
    const COL_ARTBCONFCASHACCT = 'ar_config.ArtbConfCashAcct';

    /**
     * the column name for the ArtbCon2CcCashAcct field
     */
    const COL_ARTBCON2CCCASHACCT = 'ar_config.ArtbCon2CcCashAcct';

    /**
     * the column name for the ArtbConfFincAcct field
     */
    const COL_ARTBCONFFINCACCT = 'ar_config.ArtbConfFincAcct';

    /**
     * the column name for the ArtbConfDiscAcct field
     */
    const COL_ARTBCONFDISCACCT = 'ar_config.ArtbConfDiscAcct';

    /**
     * the column name for the ArtbConfRgaCogsAcct field
     */
    const COL_ARTBCONFRGACOGSACCT = 'ar_config.ArtbConfRgaCogsAcct';

    /**
     * the column name for the ArtbConfCusdAcct field
     */
    const COL_ARTBCONFCUSDACCT = 'ar_config.ArtbConfCusdAcct';

    /**
     * the column name for the ArtbConfDpstAcct field
     */
    const COL_ARTBCONFDPSTACCT = 'ar_config.ArtbConfDpstAcct';

    /**
     * the column name for the ArtbConfWriteOffAcct field
     */
    const COL_ARTBCONFWRITEOFFACCT = 'ar_config.ArtbConfWriteOffAcct';

    /**
     * the column name for the ArtbCon2PresalIvtyAcct field
     */
    const COL_ARTBCON2PRESALIVTYACCT = 'ar_config.ArtbCon2PresalIvtyAcct';

    /**
     * the column name for the ArtbConfFincPct field
     */
    const COL_ARTBCONFFINCPCT = 'ar_config.ArtbConfFincPct';

    /**
     * the column name for the ArtbConfFincDays field
     */
    const COL_ARTBCONFFINCDAYS = 'ar_config.ArtbConfFincDays';

    /**
     * the column name for the ArtbConfFincMinChg field
     */
    const COL_ARTBCONFFINCMINCHG = 'ar_config.ArtbConfFincMinChg';

    /**
     * the column name for the ArtbConfFincTerm field
     */
    const COL_ARTBCONFFINCTERM = 'ar_config.ArtbConfFincTerm';

    /**
     * the column name for the ArtbConfOver1 field
     */
    const COL_ARTBCONFOVER1 = 'ar_config.ArtbConfOver1';

    /**
     * the column name for the ArtbConfOver2 field
     */
    const COL_ARTBCONFOVER2 = 'ar_config.ArtbConfOver2';

    /**
     * the column name for the ArtbConfStmtLine field
     */
    const COL_ARTBCONFSTMTLINE = 'ar_config.ArtbConfStmtLine';

    /**
     * the column name for the ArtbConfStmtCols field
     */
    const COL_ARTBCONFSTMTCOLS = 'ar_config.ArtbConfStmtCols';

    /**
     * the column name for the ArtbConfStmtNoteDef field
     */
    const COL_ARTBCONFSTMTNOTEDEF = 'ar_config.ArtbConfStmtNoteDef';

    /**
     * the column name for the ArtbConfStmtNote1 field
     */
    const COL_ARTBCONFSTMTNOTE1 = 'ar_config.ArtbConfStmtNote1';

    /**
     * the column name for the ArtbConfStmtNote2 field
     */
    const COL_ARTBCONFSTMTNOTE2 = 'ar_config.ArtbConfStmtNote2';

    /**
     * the column name for the ArtbConfStmtNote3 field
     */
    const COL_ARTBCONFSTMTNOTE3 = 'ar_config.ArtbConfStmtNote3';

    /**
     * the column name for the ArtbConfInvLine field
     */
    const COL_ARTBCONFINVLINE = 'ar_config.ArtbConfInvLine';

    /**
     * the column name for the ArtbConfInvCols field
     */
    const COL_ARTBCONFINVCOLS = 'ar_config.ArtbConfInvCols';

    /**
     * the column name for the ArtbConfInvNoteDef field
     */
    const COL_ARTBCONFINVNOTEDEF = 'ar_config.ArtbConfInvNoteDef';

    /**
     * the column name for the ArtbConfCustLine field
     */
    const COL_ARTBCONFCUSTLINE = 'ar_config.ArtbConfCustLine';

    /**
     * the column name for the ArtbConfCustCols field
     */
    const COL_ARTBCONFCUSTCOLS = 'ar_config.ArtbConfCustCols';

    /**
     * the column name for the ArtbConfInvSort field
     */
    const COL_ARTBCONFINVSORT = 'ar_config.ArtbConfInvSort';

    /**
     * the column name for the ArtbConfInvNc field
     */
    const COL_ARTBCONFINVNC = 'ar_config.ArtbConfInvNc';

    /**
     * the column name for the ArtbConfStmtSort field
     */
    const COL_ARTBCONFSTMTSORT = 'ar_config.ArtbConfStmtSort';

    /**
     * the column name for the ArtbConfStmt0OrLess field
     */
    const COL_ARTBCONFSTMT0ORLESS = 'ar_config.ArtbConfStmt0OrLess';

    /**
     * the column name for the ArtbConfSpDef field
     */
    const COL_ARTBCONFSPDEF = 'ar_config.ArtbConfSpDef';

    /**
     * the column name for the ArtbConfWhse field
     */
    const COL_ARTBCONFWHSE = 'ar_config.ArtbConfWhse';

    /**
     * the column name for the ArtbConfTypeDef field
     */
    const COL_ARTBCONFTYPEDEF = 'ar_config.ArtbConfTypeDef';

    /**
     * the column name for the ArtbConfSviaDef field
     */
    const COL_ARTBCONFSVIADEF = 'ar_config.ArtbConfSviaDef';

    /**
     * the column name for the ArtbConfTermDef field
     */
    const COL_ARTBCONFTERMDEF = 'ar_config.ArtbConfTermDef';

    /**
     * the column name for the ArtbConfTaxDef field
     */
    const COL_ARTBCONFTAXDEF = 'ar_config.ArtbConfTaxDef';

    /**
     * the column name for the ArtbConfStmtDef field
     */
    const COL_ARTBCONFSTMTDEF = 'ar_config.ArtbConfStmtDef';

    /**
     * the column name for the ArtbConfAllowBo field
     */
    const COL_ARTBCONFALLOWBO = 'ar_config.ArtbConfAllowBo';

    /**
     * the column name for the ArtbConfAllowFc field
     */
    const COL_ARTBCONFALLOWFC = 'ar_config.ArtbConfAllowFc';

    /**
     * the column name for the ArtbConfUsePricCode field
     */
    const COL_ARTBCONFUSEPRICCODE = 'ar_config.ArtbConfUsePricCode';

    /**
     * the column name for the ArtbConfPricDef field
     */
    const COL_ARTBCONFPRICDEF = 'ar_config.ArtbConfPricDef';

    /**
     * the column name for the ArtbConfUseCommCode field
     */
    const COL_ARTBCONFUSECOMMCODE = 'ar_config.ArtbConfUseCommCode';

    /**
     * the column name for the ArtbConfCommDef field
     */
    const COL_ARTBCONFCOMMDEF = 'ar_config.ArtbConfCommDef';

    /**
     * the column name for the ArtbConfCustLabl field
     */
    const COL_ARTBCONFCUSTLABL = 'ar_config.ArtbConfCustLabl';

    /**
     * the column name for the ArtbConfCustReq field
     */
    const COL_ARTBCONFCUSTREQ = 'ar_config.ArtbConfCustReq';

    /**
     * the column name for the ArtbConfCustDef field
     */
    const COL_ARTBCONFCUSTDEF = 'ar_config.ArtbConfCustDef';

    /**
     * the column name for the ArtbConfShipLabl field
     */
    const COL_ARTBCONFSHIPLABL = 'ar_config.ArtbConfShipLabl';

    /**
     * the column name for the ArtbConfShipReq field
     */
    const COL_ARTBCONFSHIPREQ = 'ar_config.ArtbConfShipReq';

    /**
     * the column name for the ArtbConfShipDef field
     */
    const COL_ARTBCONFSHIPDEF = 'ar_config.ArtbConfShipDef';

    /**
     * the column name for the ArtbConfUseIdLink field
     */
    const COL_ARTBCONFUSEIDLINK = 'ar_config.ArtbConfUseIdLink';

    /**
     * the column name for the ArtbConfReqDate2 field
     */
    const COL_ARTBCONFREQDATE2 = 'ar_config.ArtbConfReqDate2';

    /**
     * the column name for the ArtbConfReqDate3 field
     */
    const COL_ARTBCONFREQDATE3 = 'ar_config.ArtbConfReqDate3';

    /**
     * the column name for the ArtbConfReqDate4 field
     */
    const COL_ARTBCONFREQDATE4 = 'ar_config.ArtbConfReqDate4';

    /**
     * the column name for the ArtbConfUseWeb field
     */
    const COL_ARTBCONFUSEWEB = 'ar_config.ArtbConfUseWeb';

    /**
     * the column name for the ArtbConfPayhStoreDays field
     */
    const COL_ARTBCONFPAYHSTOREDAYS = 'ar_config.ArtbConfPayhStoreDays';

    /**
     * the column name for the ArtbConfByClerk field
     */
    const COL_ARTBCONFBYCLERK = 'ar_config.ArtbConfByClerk';

    /**
     * the column name for the ArtbCon2EcrWhse field
     */
    const COL_ARTBCON2ECRWHSE = 'ar_config.ArtbCon2EcrWhse';

    /**
     * the column name for the ArtbConfZeroTermDisc field
     */
    const COL_ARTBCONFZEROTERMDISC = 'ar_config.ArtbConfZeroTermDisc';

    /**
     * the column name for the ArtbConfUseAutoCidGen field
     */
    const COL_ARTBCONFUSEAUTOCIDGEN = 'ar_config.ArtbConfUseAutoCidGen';

    /**
     * the column name for the ArtbConfPrefixLen field
     */
    const COL_ARTBCONFPREFIXLEN = 'ar_config.ArtbConfPrefixLen';

    /**
     * the column name for the ArtbConfParAgeCredLast field
     */
    const COL_ARTBCONFPARAGECREDLAST = 'ar_config.ArtbConfParAgeCredLast';

    /**
     * the column name for the ArtbConfIncludeCod field
     */
    const COL_ARTBCONFINCLUDECOD = 'ar_config.ArtbConfIncludeCod';

    /**
     * the column name for the ArtbConfAddlPricDisc field
     */
    const COL_ARTBCONFADDLPRICDISC = 'ar_config.ArtbConfAddlPricDisc';

    /**
     * the column name for the ArtbConfApdOnOehd field
     */
    const COL_ARTBCONFAPDONOEHD = 'ar_config.ArtbConfApdOnOehd';

    /**
     * the column name for the ArtbConfNbrSp field
     */
    const COL_ARTBCONFNBRSP = 'ar_config.ArtbConfNbrSp';

    /**
     * the column name for the ArtbConfForceSpLvl field
     */
    const COL_ARTBCONFFORCESPLVL = 'ar_config.ArtbConfForceSpLvl';

    /**
     * the column name for the ArtbConfCustGetOpt field
     */
    const COL_ARTBCONFCUSTGETOPT = 'ar_config.ArtbConfCustGetOpt';

    /**
     * the column name for the ArtbConfAddICmnt field
     */
    const COL_ARTBCONFADDICMNT = 'ar_config.ArtbConfAddICmnt';

    /**
     * the column name for the ArtbCon2AppAddiscItmPdm field
     */
    const COL_ARTBCON2APPADDISCITMPDM = 'ar_config.ArtbCon2AppAddiscItmPdm';

    /**
     * the column name for the ArtbCon2RfndSelectAmt field
     */
    const COL_ARTBCON2RFNDSELECTAMT = 'ar_config.ArtbCon2RfndSelectAmt';

    /**
     * the column name for the ArtbCon2RfndGlAcct field
     */
    const COL_ARTBCON2RFNDGLACCT = 'ar_config.ArtbCon2RfndGlAcct';

    /**
     * the column name for the ArtbCon2RfndApTerm field
     */
    const COL_ARTBCON2RFNDAPTERM = 'ar_config.ArtbCon2RfndApTerm';

    /**
     * the column name for the ArtbCon2RfndArTerm field
     */
    const COL_ARTBCON2RFNDARTERM = 'ar_config.ArtbCon2RfndArTerm';

    /**
     * the column name for the ArtbCon2CwoTerm field
     */
    const COL_ARTBCON2CWOTERM = 'ar_config.ArtbCon2CwoTerm';

    /**
     * the column name for the ArtbCon2CcTerm field
     */
    const COL_ARTBCON2CCTERM = 'ar_config.ArtbCon2CcTerm';

    /**
     * the column name for the ArtbCon2CcSave field
     */
    const COL_ARTBCON2CCSAVE = 'ar_config.ArtbCon2CcSave';

    /**
     * the column name for the ArtbCon2CcBatch field
     */
    const COL_ARTBCON2CCBATCH = 'ar_config.ArtbCon2CcBatch';

    /**
     * the column name for the ArtbCon2CcSaveDays field
     */
    const COL_ARTBCON2CCSAVEDAYS = 'ar_config.ArtbCon2CcSaveDays';

    /**
     * the column name for the ArtbCon2AprvdCcAsDeposit field
     */
    const COL_ARTBCON2APRVDCCASDEPOSIT = 'ar_config.ArtbCon2AprvdCcAsDeposit';

    /**
     * the column name for the ArtbCon2CmQtySign field
     */
    const COL_ARTBCON2CMQTYSIGN = 'ar_config.ArtbCon2CmQtySign';

    /**
     * the column name for the ArtbCon2BolLine field
     */
    const COL_ARTBCON2BOLLINE = 'ar_config.ArtbCon2BolLine';

    /**
     * the column name for the ArtbCon2BolCols field
     */
    const COL_ARTBCON2BOLCOLS = 'ar_config.ArtbCon2BolCols';

    /**
     * the column name for the ArtbCon2UseSoUnitWght field
     */
    const COL_ARTBCON2USESOUNITWGHT = 'ar_config.ArtbCon2UseSoUnitWght';

    /**
     * the column name for the ArtbCon2DelZbal field
     */
    const COL_ARTBCON2DELZBAL = 'ar_config.ArtbCon2DelZbal';

    /**
     * the column name for the ArtbConfStopCustChg field
     */
    const COL_ARTBCONFSTOPCUSTCHG = 'ar_config.ArtbConfStopCustChg';

    /**
     * the column name for the ArtbCon2ProspectEditCmm field
     */
    const COL_ARTBCON2PROSPECTEDITCMM = 'ar_config.ArtbCon2ProspectEditCmm';

    /**
     * the column name for the ArtbCon2ProspectNotesToCmm field
     */
    const COL_ARTBCON2PROSPECTNOTESTOCMM = 'ar_config.ArtbCon2ProspectNotesToCmm';

    /**
     * the column name for the ArtbCon2CtryGetDflt field
     */
    const COL_ARTBCON2CTRYGETDFLT = 'ar_config.ArtbCon2CtryGetDflt';

    /**
     * the column name for the ArtbConfRptByWhse field
     */
    const COL_ARTBCONFRPTBYWHSE = 'ar_config.ArtbConfRptByWhse';

    /**
     * the column name for the ArtbConfAppendPos field
     */
    const COL_ARTBCONFAPPENDPOS = 'ar_config.ArtbConfAppendPos';

    /**
     * the column name for the ArtbConfIncoAsstAcct field
     */
    const COL_ARTBCONFINCOASSTACCT = 'ar_config.ArtbConfIncoAsstAcct';

    /**
     * the column name for the ArtbConfIncoLiabAcct field
     */
    const COL_ARTBCONFINCOLIABACCT = 'ar_config.ArtbConfIncoLiabAcct';

    /**
     * the column name for the ArtbCon2IncoAsstAcct2 field
     */
    const COL_ARTBCON2INCOASSTACCT2 = 'ar_config.ArtbCon2IncoAsstAcct2';

    /**
     * the column name for the ArtbCon2IncoLiabAcct2 field
     */
    const COL_ARTBCON2INCOLIABACCT2 = 'ar_config.ArtbCon2IncoLiabAcct2';

    /**
     * the column name for the ArtbCon2UseSurchg field
     */
    const COL_ARTBCON2USESURCHG = 'ar_config.ArtbCon2UseSurchg';

    /**
     * the column name for the ArtbCon2SurchgItemId field
     */
    const COL_ARTBCON2SURCHGITEMID = 'ar_config.ArtbCon2SurchgItemId';

    /**
     * the column name for the ArtbCon2SurchgIgrupSeq field
     */
    const COL_ARTBCON2SURCHGIGRUPSEQ = 'ar_config.ArtbCon2SurchgIgrupSeq';

    /**
     * the column name for the ArtbCon2SurchgSviaSeq field
     */
    const COL_ARTBCON2SURCHGSVIASEQ = 'ar_config.ArtbCon2SurchgSviaSeq';

    /**
     * the column name for the ArtbCon2SurchgCstidSeq field
     */
    const COL_ARTBCON2SURCHGCSTIDSEQ = 'ar_config.ArtbCon2SurchgCstidSeq';

    /**
     * the column name for the ArtbCon2SurchgCstpcSeq field
     */
    const COL_ARTBCON2SURCHGCSTPCSEQ = 'ar_config.ArtbCon2SurchgCstpcSeq';

    /**
     * the column name for the ArtbConfZeroInvcLine field
     */
    const COL_ARTBCONFZEROINVCLINE = 'ar_config.ArtbConfZeroInvcLine';

    /**
     * the column name for the ArtbCon2ZeroOrdrShip field
     */
    const COL_ARTBCON2ZEROORDRSHIP = 'ar_config.ArtbCon2ZeroOrdrShip';

    /**
     * the column name for the ArtbCon2ZeroOrdrMess field
     */
    const COL_ARTBCON2ZEROORDRMESS = 'ar_config.ArtbCon2ZeroOrdrMess';

    /**
     * the column name for the ArtbConfCashAcctWhse field
     */
    const COL_ARTBCONFCASHACCTWHSE = 'ar_config.ArtbConfCashAcctWhse';

    /**
     * the column name for the ArtbCon2MtaxFrtFlagOrCode field
     */
    const COL_ARTBCON2MTAXFRTFLAGORCODE = 'ar_config.ArtbCon2MtaxFrtFlagOrCode';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_config.dummy';

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
        self::TYPE_PHPNAME       => array('Artbconfkey', 'Artbconfglifac', 'Artbconfinifac', 'Artbconfpcifac', 'Artbconfccifac', 'Artbconfinvcustgl', 'Artbconffrtacct', 'Artbconfmiscacct', 'Artbconfaracct', 'Artbconfcashacct', 'Artbcon2cccashacct', 'Artbconffincacct', 'Artbconfdiscacct', 'Artbconfrgacogsacct', 'Artbconfcusdacct', 'Artbconfdpstacct', 'Artbconfwriteoffacct', 'Artbcon2presalivtyacct', 'Artbconffincpct', 'Artbconffincdays', 'Artbconffincminchg', 'Artbconffincterm', 'Artbconfover1', 'Artbconfover2', 'Artbconfstmtline', 'Artbconfstmtcols', 'Artbconfstmtnotedef', 'Artbconfstmtnote1', 'Artbconfstmtnote2', 'Artbconfstmtnote3', 'Artbconfinvline', 'Artbconfinvcols', 'Artbconfinvnotedef', 'Artbconfcustline', 'Artbconfcustcols', 'Artbconfinvsort', 'Artbconfinvnc', 'Artbconfstmtsort', 'Artbconfstmt0orless', 'Artbconfspdef', 'Artbconfwhse', 'Artbconftypedef', 'Artbconfsviadef', 'Artbconftermdef', 'Artbconftaxdef', 'Artbconfstmtdef', 'Artbconfallowbo', 'Artbconfallowfc', 'Artbconfusepriccode', 'Artbconfpricdef', 'Artbconfusecommcode', 'Artbconfcommdef', 'Artbconfcustlabl', 'Artbconfcustreq', 'Artbconfcustdef', 'Artbconfshiplabl', 'Artbconfshipreq', 'Artbconfshipdef', 'Artbconfuseidlink', 'Artbconfreqdate2', 'Artbconfreqdate3', 'Artbconfreqdate4', 'Artbconfuseweb', 'Artbconfpayhstoredays', 'Artbconfbyclerk', 'Artbcon2ecrwhse', 'Artbconfzerotermdisc', 'Artbconfuseautocidgen', 'Artbconfprefixlen', 'Artbconfparagecredlast', 'Artbconfincludecod', 'Artbconfaddlpricdisc', 'Artbconfapdonoehd', 'Artbconfnbrsp', 'Artbconfforcesplvl', 'Artbconfcustgetopt', 'Artbconfaddicmnt', 'Artbcon2appaddiscitmpdm', 'Artbcon2rfndselectamt', 'Artbcon2rfndglacct', 'Artbcon2rfndapterm', 'Artbcon2rfndarterm', 'Artbcon2cwoterm', 'Artbcon2ccterm', 'Artbcon2ccsave', 'Artbcon2ccbatch', 'Artbcon2ccsavedays', 'Artbcon2aprvdccasdeposit', 'Artbcon2cmqtysign', 'Artbcon2bolline', 'Artbcon2bolcols', 'Artbcon2usesounitwght', 'Artbcon2delzbal', 'Artbconfstopcustchg', 'Artbcon2prospecteditcmm', 'Artbcon2prospectnotestocmm', 'Artbcon2ctrygetdflt', 'Artbconfrptbywhse', 'Artbconfappendpos', 'Artbconfincoasstacct', 'Artbconfincoliabacct', 'Artbcon2incoasstacct2', 'Artbcon2incoliabacct2', 'Artbcon2usesurchg', 'Artbcon2surchgitemid', 'Artbcon2surchgigrupseq', 'Artbcon2surchgsviaseq', 'Artbcon2surchgcstidseq', 'Artbcon2surchgcstpcseq', 'Artbconfzeroinvcline', 'Artbcon2zeroordrship', 'Artbcon2zeroordrmess', 'Artbconfcashacctwhse', 'Artbcon2mtaxfrtflagorcode', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('artbconfkey', 'artbconfglifac', 'artbconfinifac', 'artbconfpcifac', 'artbconfccifac', 'artbconfinvcustgl', 'artbconffrtacct', 'artbconfmiscacct', 'artbconfaracct', 'artbconfcashacct', 'artbcon2cccashacct', 'artbconffincacct', 'artbconfdiscacct', 'artbconfrgacogsacct', 'artbconfcusdacct', 'artbconfdpstacct', 'artbconfwriteoffacct', 'artbcon2presalivtyacct', 'artbconffincpct', 'artbconffincdays', 'artbconffincminchg', 'artbconffincterm', 'artbconfover1', 'artbconfover2', 'artbconfstmtline', 'artbconfstmtcols', 'artbconfstmtnotedef', 'artbconfstmtnote1', 'artbconfstmtnote2', 'artbconfstmtnote3', 'artbconfinvline', 'artbconfinvcols', 'artbconfinvnotedef', 'artbconfcustline', 'artbconfcustcols', 'artbconfinvsort', 'artbconfinvnc', 'artbconfstmtsort', 'artbconfstmt0orless', 'artbconfspdef', 'artbconfwhse', 'artbconftypedef', 'artbconfsviadef', 'artbconftermdef', 'artbconftaxdef', 'artbconfstmtdef', 'artbconfallowbo', 'artbconfallowfc', 'artbconfusepriccode', 'artbconfpricdef', 'artbconfusecommcode', 'artbconfcommdef', 'artbconfcustlabl', 'artbconfcustreq', 'artbconfcustdef', 'artbconfshiplabl', 'artbconfshipreq', 'artbconfshipdef', 'artbconfuseidlink', 'artbconfreqdate2', 'artbconfreqdate3', 'artbconfreqdate4', 'artbconfuseweb', 'artbconfpayhstoredays', 'artbconfbyclerk', 'artbcon2ecrwhse', 'artbconfzerotermdisc', 'artbconfuseautocidgen', 'artbconfprefixlen', 'artbconfparagecredlast', 'artbconfincludecod', 'artbconfaddlpricdisc', 'artbconfapdonoehd', 'artbconfnbrsp', 'artbconfforcesplvl', 'artbconfcustgetopt', 'artbconfaddicmnt', 'artbcon2appaddiscitmpdm', 'artbcon2rfndselectamt', 'artbcon2rfndglacct', 'artbcon2rfndapterm', 'artbcon2rfndarterm', 'artbcon2cwoterm', 'artbcon2ccterm', 'artbcon2ccsave', 'artbcon2ccbatch', 'artbcon2ccsavedays', 'artbcon2aprvdccasdeposit', 'artbcon2cmqtysign', 'artbcon2bolline', 'artbcon2bolcols', 'artbcon2usesounitwght', 'artbcon2delzbal', 'artbconfstopcustchg', 'artbcon2prospecteditcmm', 'artbcon2prospectnotestocmm', 'artbcon2ctrygetdflt', 'artbconfrptbywhse', 'artbconfappendpos', 'artbconfincoasstacct', 'artbconfincoliabacct', 'artbcon2incoasstacct2', 'artbcon2incoliabacct2', 'artbcon2usesurchg', 'artbcon2surchgitemid', 'artbcon2surchgigrupseq', 'artbcon2surchgsviaseq', 'artbcon2surchgcstidseq', 'artbcon2surchgcstpcseq', 'artbconfzeroinvcline', 'artbcon2zeroordrship', 'artbcon2zeroordrmess', 'artbconfcashacctwhse', 'artbcon2mtaxfrtflagorcode', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigArTableMap::COL_ARTBCONFKEY, ConfigArTableMap::COL_ARTBCONFGLIFAC, ConfigArTableMap::COL_ARTBCONFINIFAC, ConfigArTableMap::COL_ARTBCONFPCIFAC, ConfigArTableMap::COL_ARTBCONFCCIFAC, ConfigArTableMap::COL_ARTBCONFINVCUSTGL, ConfigArTableMap::COL_ARTBCONFFRTACCT, ConfigArTableMap::COL_ARTBCONFMISCACCT, ConfigArTableMap::COL_ARTBCONFARACCT, ConfigArTableMap::COL_ARTBCONFCASHACCT, ConfigArTableMap::COL_ARTBCON2CCCASHACCT, ConfigArTableMap::COL_ARTBCONFFINCACCT, ConfigArTableMap::COL_ARTBCONFDISCACCT, ConfigArTableMap::COL_ARTBCONFRGACOGSACCT, ConfigArTableMap::COL_ARTBCONFCUSDACCT, ConfigArTableMap::COL_ARTBCONFDPSTACCT, ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT, ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT, ConfigArTableMap::COL_ARTBCONFFINCPCT, ConfigArTableMap::COL_ARTBCONFFINCDAYS, ConfigArTableMap::COL_ARTBCONFFINCMINCHG, ConfigArTableMap::COL_ARTBCONFFINCTERM, ConfigArTableMap::COL_ARTBCONFOVER1, ConfigArTableMap::COL_ARTBCONFOVER2, ConfigArTableMap::COL_ARTBCONFSTMTLINE, ConfigArTableMap::COL_ARTBCONFSTMTCOLS, ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF, ConfigArTableMap::COL_ARTBCONFSTMTNOTE1, ConfigArTableMap::COL_ARTBCONFSTMTNOTE2, ConfigArTableMap::COL_ARTBCONFSTMTNOTE3, ConfigArTableMap::COL_ARTBCONFINVLINE, ConfigArTableMap::COL_ARTBCONFINVCOLS, ConfigArTableMap::COL_ARTBCONFINVNOTEDEF, ConfigArTableMap::COL_ARTBCONFCUSTLINE, ConfigArTableMap::COL_ARTBCONFCUSTCOLS, ConfigArTableMap::COL_ARTBCONFINVSORT, ConfigArTableMap::COL_ARTBCONFINVNC, ConfigArTableMap::COL_ARTBCONFSTMTSORT, ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS, ConfigArTableMap::COL_ARTBCONFSPDEF, ConfigArTableMap::COL_ARTBCONFWHSE, ConfigArTableMap::COL_ARTBCONFTYPEDEF, ConfigArTableMap::COL_ARTBCONFSVIADEF, ConfigArTableMap::COL_ARTBCONFTERMDEF, ConfigArTableMap::COL_ARTBCONFTAXDEF, ConfigArTableMap::COL_ARTBCONFSTMTDEF, ConfigArTableMap::COL_ARTBCONFALLOWBO, ConfigArTableMap::COL_ARTBCONFALLOWFC, ConfigArTableMap::COL_ARTBCONFUSEPRICCODE, ConfigArTableMap::COL_ARTBCONFPRICDEF, ConfigArTableMap::COL_ARTBCONFUSECOMMCODE, ConfigArTableMap::COL_ARTBCONFCOMMDEF, ConfigArTableMap::COL_ARTBCONFCUSTLABL, ConfigArTableMap::COL_ARTBCONFCUSTREQ, ConfigArTableMap::COL_ARTBCONFCUSTDEF, ConfigArTableMap::COL_ARTBCONFSHIPLABL, ConfigArTableMap::COL_ARTBCONFSHIPREQ, ConfigArTableMap::COL_ARTBCONFSHIPDEF, ConfigArTableMap::COL_ARTBCONFUSEIDLINK, ConfigArTableMap::COL_ARTBCONFREQDATE2, ConfigArTableMap::COL_ARTBCONFREQDATE3, ConfigArTableMap::COL_ARTBCONFREQDATE4, ConfigArTableMap::COL_ARTBCONFUSEWEB, ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS, ConfigArTableMap::COL_ARTBCONFBYCLERK, ConfigArTableMap::COL_ARTBCON2ECRWHSE, ConfigArTableMap::COL_ARTBCONFZEROTERMDISC, ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN, ConfigArTableMap::COL_ARTBCONFPREFIXLEN, ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST, ConfigArTableMap::COL_ARTBCONFINCLUDECOD, ConfigArTableMap::COL_ARTBCONFADDLPRICDISC, ConfigArTableMap::COL_ARTBCONFAPDONOEHD, ConfigArTableMap::COL_ARTBCONFNBRSP, ConfigArTableMap::COL_ARTBCONFFORCESPLVL, ConfigArTableMap::COL_ARTBCONFCUSTGETOPT, ConfigArTableMap::COL_ARTBCONFADDICMNT, ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM, ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT, ConfigArTableMap::COL_ARTBCON2RFNDGLACCT, ConfigArTableMap::COL_ARTBCON2RFNDAPTERM, ConfigArTableMap::COL_ARTBCON2RFNDARTERM, ConfigArTableMap::COL_ARTBCON2CWOTERM, ConfigArTableMap::COL_ARTBCON2CCTERM, ConfigArTableMap::COL_ARTBCON2CCSAVE, ConfigArTableMap::COL_ARTBCON2CCBATCH, ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS, ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT, ConfigArTableMap::COL_ARTBCON2CMQTYSIGN, ConfigArTableMap::COL_ARTBCON2BOLLINE, ConfigArTableMap::COL_ARTBCON2BOLCOLS, ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT, ConfigArTableMap::COL_ARTBCON2DELZBAL, ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG, ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM, ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM, ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT, ConfigArTableMap::COL_ARTBCONFRPTBYWHSE, ConfigArTableMap::COL_ARTBCONFAPPENDPOS, ConfigArTableMap::COL_ARTBCONFINCOASSTACCT, ConfigArTableMap::COL_ARTBCONFINCOLIABACCT, ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2, ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2, ConfigArTableMap::COL_ARTBCON2USESURCHG, ConfigArTableMap::COL_ARTBCON2SURCHGITEMID, ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ, ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ, ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ, ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ, ConfigArTableMap::COL_ARTBCONFZEROINVCLINE, ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP, ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS, ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE, ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE, ConfigArTableMap::COL_DATEUPDTD, ConfigArTableMap::COL_TIMEUPDTD, ConfigArTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArtbConfKey', 'ArtbConfGlIfac', 'ArtbConfInIfac', 'ArtbConfPcIfac', 'ArtbConfCcIfac', 'ArtbConfInvCustGl', 'ArtbConfFrtAcct', 'ArtbConfMiscAcct', 'ArtbConfArAcct', 'ArtbConfCashAcct', 'ArtbCon2CcCashAcct', 'ArtbConfFincAcct', 'ArtbConfDiscAcct', 'ArtbConfRgaCogsAcct', 'ArtbConfCusdAcct', 'ArtbConfDpstAcct', 'ArtbConfWriteOffAcct', 'ArtbCon2PresalIvtyAcct', 'ArtbConfFincPct', 'ArtbConfFincDays', 'ArtbConfFincMinChg', 'ArtbConfFincTerm', 'ArtbConfOver1', 'ArtbConfOver2', 'ArtbConfStmtLine', 'ArtbConfStmtCols', 'ArtbConfStmtNoteDef', 'ArtbConfStmtNote1', 'ArtbConfStmtNote2', 'ArtbConfStmtNote3', 'ArtbConfInvLine', 'ArtbConfInvCols', 'ArtbConfInvNoteDef', 'ArtbConfCustLine', 'ArtbConfCustCols', 'ArtbConfInvSort', 'ArtbConfInvNc', 'ArtbConfStmtSort', 'ArtbConfStmt0OrLess', 'ArtbConfSpDef', 'ArtbConfWhse', 'ArtbConfTypeDef', 'ArtbConfSviaDef', 'ArtbConfTermDef', 'ArtbConfTaxDef', 'ArtbConfStmtDef', 'ArtbConfAllowBo', 'ArtbConfAllowFc', 'ArtbConfUsePricCode', 'ArtbConfPricDef', 'ArtbConfUseCommCode', 'ArtbConfCommDef', 'ArtbConfCustLabl', 'ArtbConfCustReq', 'ArtbConfCustDef', 'ArtbConfShipLabl', 'ArtbConfShipReq', 'ArtbConfShipDef', 'ArtbConfUseIdLink', 'ArtbConfReqDate2', 'ArtbConfReqDate3', 'ArtbConfReqDate4', 'ArtbConfUseWeb', 'ArtbConfPayhStoreDays', 'ArtbConfByClerk', 'ArtbCon2EcrWhse', 'ArtbConfZeroTermDisc', 'ArtbConfUseAutoCidGen', 'ArtbConfPrefixLen', 'ArtbConfParAgeCredLast', 'ArtbConfIncludeCod', 'ArtbConfAddlPricDisc', 'ArtbConfApdOnOehd', 'ArtbConfNbrSp', 'ArtbConfForceSpLvl', 'ArtbConfCustGetOpt', 'ArtbConfAddICmnt', 'ArtbCon2AppAddiscItmPdm', 'ArtbCon2RfndSelectAmt', 'ArtbCon2RfndGlAcct', 'ArtbCon2RfndApTerm', 'ArtbCon2RfndArTerm', 'ArtbCon2CwoTerm', 'ArtbCon2CcTerm', 'ArtbCon2CcSave', 'ArtbCon2CcBatch', 'ArtbCon2CcSaveDays', 'ArtbCon2AprvdCcAsDeposit', 'ArtbCon2CmQtySign', 'ArtbCon2BolLine', 'ArtbCon2BolCols', 'ArtbCon2UseSoUnitWght', 'ArtbCon2DelZbal', 'ArtbConfStopCustChg', 'ArtbCon2ProspectEditCmm', 'ArtbCon2ProspectNotesToCmm', 'ArtbCon2CtryGetDflt', 'ArtbConfRptByWhse', 'ArtbConfAppendPos', 'ArtbConfIncoAsstAcct', 'ArtbConfIncoLiabAcct', 'ArtbCon2IncoAsstAcct2', 'ArtbCon2IncoLiabAcct2', 'ArtbCon2UseSurchg', 'ArtbCon2SurchgItemId', 'ArtbCon2SurchgIgrupSeq', 'ArtbCon2SurchgSviaSeq', 'ArtbCon2SurchgCstidSeq', 'ArtbCon2SurchgCstpcSeq', 'ArtbConfZeroInvcLine', 'ArtbCon2ZeroOrdrShip', 'ArtbCon2ZeroOrdrMess', 'ArtbConfCashAcctWhse', 'ArtbCon2MtaxFrtFlagOrCode', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Artbconfkey' => 0, 'Artbconfglifac' => 1, 'Artbconfinifac' => 2, 'Artbconfpcifac' => 3, 'Artbconfccifac' => 4, 'Artbconfinvcustgl' => 5, 'Artbconffrtacct' => 6, 'Artbconfmiscacct' => 7, 'Artbconfaracct' => 8, 'Artbconfcashacct' => 9, 'Artbcon2cccashacct' => 10, 'Artbconffincacct' => 11, 'Artbconfdiscacct' => 12, 'Artbconfrgacogsacct' => 13, 'Artbconfcusdacct' => 14, 'Artbconfdpstacct' => 15, 'Artbconfwriteoffacct' => 16, 'Artbcon2presalivtyacct' => 17, 'Artbconffincpct' => 18, 'Artbconffincdays' => 19, 'Artbconffincminchg' => 20, 'Artbconffincterm' => 21, 'Artbconfover1' => 22, 'Artbconfover2' => 23, 'Artbconfstmtline' => 24, 'Artbconfstmtcols' => 25, 'Artbconfstmtnotedef' => 26, 'Artbconfstmtnote1' => 27, 'Artbconfstmtnote2' => 28, 'Artbconfstmtnote3' => 29, 'Artbconfinvline' => 30, 'Artbconfinvcols' => 31, 'Artbconfinvnotedef' => 32, 'Artbconfcustline' => 33, 'Artbconfcustcols' => 34, 'Artbconfinvsort' => 35, 'Artbconfinvnc' => 36, 'Artbconfstmtsort' => 37, 'Artbconfstmt0orless' => 38, 'Artbconfspdef' => 39, 'Artbconfwhse' => 40, 'Artbconftypedef' => 41, 'Artbconfsviadef' => 42, 'Artbconftermdef' => 43, 'Artbconftaxdef' => 44, 'Artbconfstmtdef' => 45, 'Artbconfallowbo' => 46, 'Artbconfallowfc' => 47, 'Artbconfusepriccode' => 48, 'Artbconfpricdef' => 49, 'Artbconfusecommcode' => 50, 'Artbconfcommdef' => 51, 'Artbconfcustlabl' => 52, 'Artbconfcustreq' => 53, 'Artbconfcustdef' => 54, 'Artbconfshiplabl' => 55, 'Artbconfshipreq' => 56, 'Artbconfshipdef' => 57, 'Artbconfuseidlink' => 58, 'Artbconfreqdate2' => 59, 'Artbconfreqdate3' => 60, 'Artbconfreqdate4' => 61, 'Artbconfuseweb' => 62, 'Artbconfpayhstoredays' => 63, 'Artbconfbyclerk' => 64, 'Artbcon2ecrwhse' => 65, 'Artbconfzerotermdisc' => 66, 'Artbconfuseautocidgen' => 67, 'Artbconfprefixlen' => 68, 'Artbconfparagecredlast' => 69, 'Artbconfincludecod' => 70, 'Artbconfaddlpricdisc' => 71, 'Artbconfapdonoehd' => 72, 'Artbconfnbrsp' => 73, 'Artbconfforcesplvl' => 74, 'Artbconfcustgetopt' => 75, 'Artbconfaddicmnt' => 76, 'Artbcon2appaddiscitmpdm' => 77, 'Artbcon2rfndselectamt' => 78, 'Artbcon2rfndglacct' => 79, 'Artbcon2rfndapterm' => 80, 'Artbcon2rfndarterm' => 81, 'Artbcon2cwoterm' => 82, 'Artbcon2ccterm' => 83, 'Artbcon2ccsave' => 84, 'Artbcon2ccbatch' => 85, 'Artbcon2ccsavedays' => 86, 'Artbcon2aprvdccasdeposit' => 87, 'Artbcon2cmqtysign' => 88, 'Artbcon2bolline' => 89, 'Artbcon2bolcols' => 90, 'Artbcon2usesounitwght' => 91, 'Artbcon2delzbal' => 92, 'Artbconfstopcustchg' => 93, 'Artbcon2prospecteditcmm' => 94, 'Artbcon2prospectnotestocmm' => 95, 'Artbcon2ctrygetdflt' => 96, 'Artbconfrptbywhse' => 97, 'Artbconfappendpos' => 98, 'Artbconfincoasstacct' => 99, 'Artbconfincoliabacct' => 100, 'Artbcon2incoasstacct2' => 101, 'Artbcon2incoliabacct2' => 102, 'Artbcon2usesurchg' => 103, 'Artbcon2surchgitemid' => 104, 'Artbcon2surchgigrupseq' => 105, 'Artbcon2surchgsviaseq' => 106, 'Artbcon2surchgcstidseq' => 107, 'Artbcon2surchgcstpcseq' => 108, 'Artbconfzeroinvcline' => 109, 'Artbcon2zeroordrship' => 110, 'Artbcon2zeroordrmess' => 111, 'Artbconfcashacctwhse' => 112, 'Artbcon2mtaxfrtflagorcode' => 113, 'Dateupdtd' => 114, 'Timeupdtd' => 115, 'Dummy' => 116, ),
        self::TYPE_CAMELNAME     => array('artbconfkey' => 0, 'artbconfglifac' => 1, 'artbconfinifac' => 2, 'artbconfpcifac' => 3, 'artbconfccifac' => 4, 'artbconfinvcustgl' => 5, 'artbconffrtacct' => 6, 'artbconfmiscacct' => 7, 'artbconfaracct' => 8, 'artbconfcashacct' => 9, 'artbcon2cccashacct' => 10, 'artbconffincacct' => 11, 'artbconfdiscacct' => 12, 'artbconfrgacogsacct' => 13, 'artbconfcusdacct' => 14, 'artbconfdpstacct' => 15, 'artbconfwriteoffacct' => 16, 'artbcon2presalivtyacct' => 17, 'artbconffincpct' => 18, 'artbconffincdays' => 19, 'artbconffincminchg' => 20, 'artbconffincterm' => 21, 'artbconfover1' => 22, 'artbconfover2' => 23, 'artbconfstmtline' => 24, 'artbconfstmtcols' => 25, 'artbconfstmtnotedef' => 26, 'artbconfstmtnote1' => 27, 'artbconfstmtnote2' => 28, 'artbconfstmtnote3' => 29, 'artbconfinvline' => 30, 'artbconfinvcols' => 31, 'artbconfinvnotedef' => 32, 'artbconfcustline' => 33, 'artbconfcustcols' => 34, 'artbconfinvsort' => 35, 'artbconfinvnc' => 36, 'artbconfstmtsort' => 37, 'artbconfstmt0orless' => 38, 'artbconfspdef' => 39, 'artbconfwhse' => 40, 'artbconftypedef' => 41, 'artbconfsviadef' => 42, 'artbconftermdef' => 43, 'artbconftaxdef' => 44, 'artbconfstmtdef' => 45, 'artbconfallowbo' => 46, 'artbconfallowfc' => 47, 'artbconfusepriccode' => 48, 'artbconfpricdef' => 49, 'artbconfusecommcode' => 50, 'artbconfcommdef' => 51, 'artbconfcustlabl' => 52, 'artbconfcustreq' => 53, 'artbconfcustdef' => 54, 'artbconfshiplabl' => 55, 'artbconfshipreq' => 56, 'artbconfshipdef' => 57, 'artbconfuseidlink' => 58, 'artbconfreqdate2' => 59, 'artbconfreqdate3' => 60, 'artbconfreqdate4' => 61, 'artbconfuseweb' => 62, 'artbconfpayhstoredays' => 63, 'artbconfbyclerk' => 64, 'artbcon2ecrwhse' => 65, 'artbconfzerotermdisc' => 66, 'artbconfuseautocidgen' => 67, 'artbconfprefixlen' => 68, 'artbconfparagecredlast' => 69, 'artbconfincludecod' => 70, 'artbconfaddlpricdisc' => 71, 'artbconfapdonoehd' => 72, 'artbconfnbrsp' => 73, 'artbconfforcesplvl' => 74, 'artbconfcustgetopt' => 75, 'artbconfaddicmnt' => 76, 'artbcon2appaddiscitmpdm' => 77, 'artbcon2rfndselectamt' => 78, 'artbcon2rfndglacct' => 79, 'artbcon2rfndapterm' => 80, 'artbcon2rfndarterm' => 81, 'artbcon2cwoterm' => 82, 'artbcon2ccterm' => 83, 'artbcon2ccsave' => 84, 'artbcon2ccbatch' => 85, 'artbcon2ccsavedays' => 86, 'artbcon2aprvdccasdeposit' => 87, 'artbcon2cmqtysign' => 88, 'artbcon2bolline' => 89, 'artbcon2bolcols' => 90, 'artbcon2usesounitwght' => 91, 'artbcon2delzbal' => 92, 'artbconfstopcustchg' => 93, 'artbcon2prospecteditcmm' => 94, 'artbcon2prospectnotestocmm' => 95, 'artbcon2ctrygetdflt' => 96, 'artbconfrptbywhse' => 97, 'artbconfappendpos' => 98, 'artbconfincoasstacct' => 99, 'artbconfincoliabacct' => 100, 'artbcon2incoasstacct2' => 101, 'artbcon2incoliabacct2' => 102, 'artbcon2usesurchg' => 103, 'artbcon2surchgitemid' => 104, 'artbcon2surchgigrupseq' => 105, 'artbcon2surchgsviaseq' => 106, 'artbcon2surchgcstidseq' => 107, 'artbcon2surchgcstpcseq' => 108, 'artbconfzeroinvcline' => 109, 'artbcon2zeroordrship' => 110, 'artbcon2zeroordrmess' => 111, 'artbconfcashacctwhse' => 112, 'artbcon2mtaxfrtflagorcode' => 113, 'dateupdtd' => 114, 'timeupdtd' => 115, 'dummy' => 116, ),
        self::TYPE_COLNAME       => array(ConfigArTableMap::COL_ARTBCONFKEY => 0, ConfigArTableMap::COL_ARTBCONFGLIFAC => 1, ConfigArTableMap::COL_ARTBCONFINIFAC => 2, ConfigArTableMap::COL_ARTBCONFPCIFAC => 3, ConfigArTableMap::COL_ARTBCONFCCIFAC => 4, ConfigArTableMap::COL_ARTBCONFINVCUSTGL => 5, ConfigArTableMap::COL_ARTBCONFFRTACCT => 6, ConfigArTableMap::COL_ARTBCONFMISCACCT => 7, ConfigArTableMap::COL_ARTBCONFARACCT => 8, ConfigArTableMap::COL_ARTBCONFCASHACCT => 9, ConfigArTableMap::COL_ARTBCON2CCCASHACCT => 10, ConfigArTableMap::COL_ARTBCONFFINCACCT => 11, ConfigArTableMap::COL_ARTBCONFDISCACCT => 12, ConfigArTableMap::COL_ARTBCONFRGACOGSACCT => 13, ConfigArTableMap::COL_ARTBCONFCUSDACCT => 14, ConfigArTableMap::COL_ARTBCONFDPSTACCT => 15, ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT => 16, ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT => 17, ConfigArTableMap::COL_ARTBCONFFINCPCT => 18, ConfigArTableMap::COL_ARTBCONFFINCDAYS => 19, ConfigArTableMap::COL_ARTBCONFFINCMINCHG => 20, ConfigArTableMap::COL_ARTBCONFFINCTERM => 21, ConfigArTableMap::COL_ARTBCONFOVER1 => 22, ConfigArTableMap::COL_ARTBCONFOVER2 => 23, ConfigArTableMap::COL_ARTBCONFSTMTLINE => 24, ConfigArTableMap::COL_ARTBCONFSTMTCOLS => 25, ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF => 26, ConfigArTableMap::COL_ARTBCONFSTMTNOTE1 => 27, ConfigArTableMap::COL_ARTBCONFSTMTNOTE2 => 28, ConfigArTableMap::COL_ARTBCONFSTMTNOTE3 => 29, ConfigArTableMap::COL_ARTBCONFINVLINE => 30, ConfigArTableMap::COL_ARTBCONFINVCOLS => 31, ConfigArTableMap::COL_ARTBCONFINVNOTEDEF => 32, ConfigArTableMap::COL_ARTBCONFCUSTLINE => 33, ConfigArTableMap::COL_ARTBCONFCUSTCOLS => 34, ConfigArTableMap::COL_ARTBCONFINVSORT => 35, ConfigArTableMap::COL_ARTBCONFINVNC => 36, ConfigArTableMap::COL_ARTBCONFSTMTSORT => 37, ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS => 38, ConfigArTableMap::COL_ARTBCONFSPDEF => 39, ConfigArTableMap::COL_ARTBCONFWHSE => 40, ConfigArTableMap::COL_ARTBCONFTYPEDEF => 41, ConfigArTableMap::COL_ARTBCONFSVIADEF => 42, ConfigArTableMap::COL_ARTBCONFTERMDEF => 43, ConfigArTableMap::COL_ARTBCONFTAXDEF => 44, ConfigArTableMap::COL_ARTBCONFSTMTDEF => 45, ConfigArTableMap::COL_ARTBCONFALLOWBO => 46, ConfigArTableMap::COL_ARTBCONFALLOWFC => 47, ConfigArTableMap::COL_ARTBCONFUSEPRICCODE => 48, ConfigArTableMap::COL_ARTBCONFPRICDEF => 49, ConfigArTableMap::COL_ARTBCONFUSECOMMCODE => 50, ConfigArTableMap::COL_ARTBCONFCOMMDEF => 51, ConfigArTableMap::COL_ARTBCONFCUSTLABL => 52, ConfigArTableMap::COL_ARTBCONFCUSTREQ => 53, ConfigArTableMap::COL_ARTBCONFCUSTDEF => 54, ConfigArTableMap::COL_ARTBCONFSHIPLABL => 55, ConfigArTableMap::COL_ARTBCONFSHIPREQ => 56, ConfigArTableMap::COL_ARTBCONFSHIPDEF => 57, ConfigArTableMap::COL_ARTBCONFUSEIDLINK => 58, ConfigArTableMap::COL_ARTBCONFREQDATE2 => 59, ConfigArTableMap::COL_ARTBCONFREQDATE3 => 60, ConfigArTableMap::COL_ARTBCONFREQDATE4 => 61, ConfigArTableMap::COL_ARTBCONFUSEWEB => 62, ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS => 63, ConfigArTableMap::COL_ARTBCONFBYCLERK => 64, ConfigArTableMap::COL_ARTBCON2ECRWHSE => 65, ConfigArTableMap::COL_ARTBCONFZEROTERMDISC => 66, ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN => 67, ConfigArTableMap::COL_ARTBCONFPREFIXLEN => 68, ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST => 69, ConfigArTableMap::COL_ARTBCONFINCLUDECOD => 70, ConfigArTableMap::COL_ARTBCONFADDLPRICDISC => 71, ConfigArTableMap::COL_ARTBCONFAPDONOEHD => 72, ConfigArTableMap::COL_ARTBCONFNBRSP => 73, ConfigArTableMap::COL_ARTBCONFFORCESPLVL => 74, ConfigArTableMap::COL_ARTBCONFCUSTGETOPT => 75, ConfigArTableMap::COL_ARTBCONFADDICMNT => 76, ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM => 77, ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT => 78, ConfigArTableMap::COL_ARTBCON2RFNDGLACCT => 79, ConfigArTableMap::COL_ARTBCON2RFNDAPTERM => 80, ConfigArTableMap::COL_ARTBCON2RFNDARTERM => 81, ConfigArTableMap::COL_ARTBCON2CWOTERM => 82, ConfigArTableMap::COL_ARTBCON2CCTERM => 83, ConfigArTableMap::COL_ARTBCON2CCSAVE => 84, ConfigArTableMap::COL_ARTBCON2CCBATCH => 85, ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS => 86, ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT => 87, ConfigArTableMap::COL_ARTBCON2CMQTYSIGN => 88, ConfigArTableMap::COL_ARTBCON2BOLLINE => 89, ConfigArTableMap::COL_ARTBCON2BOLCOLS => 90, ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT => 91, ConfigArTableMap::COL_ARTBCON2DELZBAL => 92, ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG => 93, ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM => 94, ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM => 95, ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT => 96, ConfigArTableMap::COL_ARTBCONFRPTBYWHSE => 97, ConfigArTableMap::COL_ARTBCONFAPPENDPOS => 98, ConfigArTableMap::COL_ARTBCONFINCOASSTACCT => 99, ConfigArTableMap::COL_ARTBCONFINCOLIABACCT => 100, ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2 => 101, ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2 => 102, ConfigArTableMap::COL_ARTBCON2USESURCHG => 103, ConfigArTableMap::COL_ARTBCON2SURCHGITEMID => 104, ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ => 105, ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ => 106, ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ => 107, ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ => 108, ConfigArTableMap::COL_ARTBCONFZEROINVCLINE => 109, ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP => 110, ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS => 111, ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE => 112, ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE => 113, ConfigArTableMap::COL_DATEUPDTD => 114, ConfigArTableMap::COL_TIMEUPDTD => 115, ConfigArTableMap::COL_DUMMY => 116, ),
        self::TYPE_FIELDNAME     => array('ArtbConfKey' => 0, 'ArtbConfGlIfac' => 1, 'ArtbConfInIfac' => 2, 'ArtbConfPcIfac' => 3, 'ArtbConfCcIfac' => 4, 'ArtbConfInvCustGl' => 5, 'ArtbConfFrtAcct' => 6, 'ArtbConfMiscAcct' => 7, 'ArtbConfArAcct' => 8, 'ArtbConfCashAcct' => 9, 'ArtbCon2CcCashAcct' => 10, 'ArtbConfFincAcct' => 11, 'ArtbConfDiscAcct' => 12, 'ArtbConfRgaCogsAcct' => 13, 'ArtbConfCusdAcct' => 14, 'ArtbConfDpstAcct' => 15, 'ArtbConfWriteOffAcct' => 16, 'ArtbCon2PresalIvtyAcct' => 17, 'ArtbConfFincPct' => 18, 'ArtbConfFincDays' => 19, 'ArtbConfFincMinChg' => 20, 'ArtbConfFincTerm' => 21, 'ArtbConfOver1' => 22, 'ArtbConfOver2' => 23, 'ArtbConfStmtLine' => 24, 'ArtbConfStmtCols' => 25, 'ArtbConfStmtNoteDef' => 26, 'ArtbConfStmtNote1' => 27, 'ArtbConfStmtNote2' => 28, 'ArtbConfStmtNote3' => 29, 'ArtbConfInvLine' => 30, 'ArtbConfInvCols' => 31, 'ArtbConfInvNoteDef' => 32, 'ArtbConfCustLine' => 33, 'ArtbConfCustCols' => 34, 'ArtbConfInvSort' => 35, 'ArtbConfInvNc' => 36, 'ArtbConfStmtSort' => 37, 'ArtbConfStmt0OrLess' => 38, 'ArtbConfSpDef' => 39, 'ArtbConfWhse' => 40, 'ArtbConfTypeDef' => 41, 'ArtbConfSviaDef' => 42, 'ArtbConfTermDef' => 43, 'ArtbConfTaxDef' => 44, 'ArtbConfStmtDef' => 45, 'ArtbConfAllowBo' => 46, 'ArtbConfAllowFc' => 47, 'ArtbConfUsePricCode' => 48, 'ArtbConfPricDef' => 49, 'ArtbConfUseCommCode' => 50, 'ArtbConfCommDef' => 51, 'ArtbConfCustLabl' => 52, 'ArtbConfCustReq' => 53, 'ArtbConfCustDef' => 54, 'ArtbConfShipLabl' => 55, 'ArtbConfShipReq' => 56, 'ArtbConfShipDef' => 57, 'ArtbConfUseIdLink' => 58, 'ArtbConfReqDate2' => 59, 'ArtbConfReqDate3' => 60, 'ArtbConfReqDate4' => 61, 'ArtbConfUseWeb' => 62, 'ArtbConfPayhStoreDays' => 63, 'ArtbConfByClerk' => 64, 'ArtbCon2EcrWhse' => 65, 'ArtbConfZeroTermDisc' => 66, 'ArtbConfUseAutoCidGen' => 67, 'ArtbConfPrefixLen' => 68, 'ArtbConfParAgeCredLast' => 69, 'ArtbConfIncludeCod' => 70, 'ArtbConfAddlPricDisc' => 71, 'ArtbConfApdOnOehd' => 72, 'ArtbConfNbrSp' => 73, 'ArtbConfForceSpLvl' => 74, 'ArtbConfCustGetOpt' => 75, 'ArtbConfAddICmnt' => 76, 'ArtbCon2AppAddiscItmPdm' => 77, 'ArtbCon2RfndSelectAmt' => 78, 'ArtbCon2RfndGlAcct' => 79, 'ArtbCon2RfndApTerm' => 80, 'ArtbCon2RfndArTerm' => 81, 'ArtbCon2CwoTerm' => 82, 'ArtbCon2CcTerm' => 83, 'ArtbCon2CcSave' => 84, 'ArtbCon2CcBatch' => 85, 'ArtbCon2CcSaveDays' => 86, 'ArtbCon2AprvdCcAsDeposit' => 87, 'ArtbCon2CmQtySign' => 88, 'ArtbCon2BolLine' => 89, 'ArtbCon2BolCols' => 90, 'ArtbCon2UseSoUnitWght' => 91, 'ArtbCon2DelZbal' => 92, 'ArtbConfStopCustChg' => 93, 'ArtbCon2ProspectEditCmm' => 94, 'ArtbCon2ProspectNotesToCmm' => 95, 'ArtbCon2CtryGetDflt' => 96, 'ArtbConfRptByWhse' => 97, 'ArtbConfAppendPos' => 98, 'ArtbConfIncoAsstAcct' => 99, 'ArtbConfIncoLiabAcct' => 100, 'ArtbCon2IncoAsstAcct2' => 101, 'ArtbCon2IncoLiabAcct2' => 102, 'ArtbCon2UseSurchg' => 103, 'ArtbCon2SurchgItemId' => 104, 'ArtbCon2SurchgIgrupSeq' => 105, 'ArtbCon2SurchgSviaSeq' => 106, 'ArtbCon2SurchgCstidSeq' => 107, 'ArtbCon2SurchgCstpcSeq' => 108, 'ArtbConfZeroInvcLine' => 109, 'ArtbCon2ZeroOrdrShip' => 110, 'ArtbCon2ZeroOrdrMess' => 111, 'ArtbConfCashAcctWhse' => 112, 'ArtbCon2MtaxFrtFlagOrCode' => 113, 'DateUpdtd' => 114, 'TimeUpdtd' => 115, 'dummy' => 116, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, )
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
        $this->setName('ar_config');
        $this->setPhpName('ConfigAr');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigAr');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArtbConfKey', 'Artbconfkey', 'INTEGER', true, 1, 1);
        $this->addColumn('ArtbConfGlIfac', 'Artbconfglifac', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfInIfac', 'Artbconfinifac', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfPcIfac', 'Artbconfpcifac', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfCcIfac', 'Artbconfccifac', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfInvCustGl', 'Artbconfinvcustgl', 'VARCHAR', true, 1, 'I');
        $this->addColumn('ArtbConfFrtAcct', 'Artbconffrtacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfMiscAcct', 'Artbconfmiscacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfArAcct', 'Artbconfaracct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfCashAcct', 'Artbconfcashacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbCon2CcCashAcct', 'Artbcon2cccashacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfFincAcct', 'Artbconffincacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfDiscAcct', 'Artbconfdiscacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfRgaCogsAcct', 'Artbconfrgacogsacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfCusdAcct', 'Artbconfcusdacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfDpstAcct', 'Artbconfdpstacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfWriteOffAcct', 'Artbconfwriteoffacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbCon2PresalIvtyAcct', 'Artbcon2presalivtyacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfFincPct', 'Artbconffincpct', 'DECIMAL', true, 20, 0);
        $this->addColumn('ArtbConfFincDays', 'Artbconffincdays', 'INTEGER', true, 3, 0);
        $this->addColumn('ArtbConfFincMinChg', 'Artbconffincminchg', 'DECIMAL', true, 20, 0);
        $this->addColumn('ArtbConfFincTerm', 'Artbconffincterm', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbConfOver1', 'Artbconfover1', 'INTEGER', true, 3, 30);
        $this->addColumn('ArtbConfOver2', 'Artbconfover2', 'INTEGER', true, 3, 60);
        $this->addColumn('ArtbConfStmtLine', 'Artbconfstmtline', 'INTEGER', true, 2, 20);
        $this->addColumn('ArtbConfStmtCols', 'Artbconfstmtcols', 'INTEGER', true, 2, 60);
        $this->addColumn('ArtbConfStmtNoteDef', 'Artbconfstmtnotedef', 'VARCHAR', true, 1, '');
        $this->addColumn('ArtbConfStmtNote1', 'Artbconfstmtnote1', 'VARCHAR', true, 1, '');
        $this->addColumn('ArtbConfStmtNote2', 'Artbconfstmtnote2', 'VARCHAR', true, 1, '');
        $this->addColumn('ArtbConfStmtNote3', 'Artbconfstmtnote3', 'VARCHAR', true, 1, '');
        $this->addColumn('ArtbConfInvLine', 'Artbconfinvline', 'INTEGER', true, 2, 20);
        $this->addColumn('ArtbConfInvCols', 'Artbconfinvcols', 'INTEGER', true, 2, 35);
        $this->addColumn('ArtbConfInvNoteDef', 'Artbconfinvnotedef', 'VARCHAR', true, 1, '');
        $this->addColumn('ArtbConfCustLine', 'Artbconfcustline', 'INTEGER', true, 2, 20);
        $this->addColumn('ArtbConfCustCols', 'Artbconfcustcols', 'INTEGER', true, 2, 60);
        $this->addColumn('ArtbConfInvSort', 'Artbconfinvsort', 'VARCHAR', true, 1, 'I');
        $this->addColumn('ArtbConfInvNc', 'Artbconfinvnc', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfStmtSort', 'Artbconfstmtsort', 'VARCHAR', true, 1, 'I');
        $this->addColumn('ArtbConfStmt0OrLess', 'Artbconfstmt0orless', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfSpDef', 'Artbconfspdef', 'VARCHAR', true, 6, '');
        $this->addColumn('ArtbConfWhse', 'Artbconfwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('ArtbConfTypeDef', 'Artbconftypedef', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbConfSviaDef', 'Artbconfsviadef', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbConfTermDef', 'Artbconftermdef', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbConfTaxDef', 'Artbconftaxdef', 'VARCHAR', true, 6, '');
        $this->addColumn('ArtbConfStmtDef', 'Artbconfstmtdef', 'VARCHAR', true, 1, 'B');
        $this->addColumn('ArtbConfAllowBo', 'Artbconfallowbo', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfAllowFc', 'Artbconfallowfc', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfUsePricCode', 'Artbconfusepriccode', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfPricDef', 'Artbconfpricdef', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbConfUseCommCode', 'Artbconfusecommcode', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfCommDef', 'Artbconfcommdef', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbConfCustLabl', 'Artbconfcustlabl', 'VARCHAR', true, 8, '');
        $this->addColumn('ArtbConfCustReq', 'Artbconfcustreq', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfCustDef', 'Artbconfcustdef', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbConfShipLabl', 'Artbconfshiplabl', 'VARCHAR', true, 8, '');
        $this->addColumn('ArtbConfShipReq', 'Artbconfshipreq', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfShipDef', 'Artbconfshipdef', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbConfUseIdLink', 'Artbconfuseidlink', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfReqDate2', 'Artbconfreqdate2', 'INTEGER', true, 3, 30);
        $this->addColumn('ArtbConfReqDate3', 'Artbconfreqdate3', 'INTEGER', true, 3, 60);
        $this->addColumn('ArtbConfReqDate4', 'Artbconfreqdate4', 'INTEGER', true, 3, 90);
        $this->addColumn('ArtbConfUseWeb', 'Artbconfuseweb', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfPayhStoreDays', 'Artbconfpayhstoredays', 'INTEGER', true, 4, 530);
        $this->addColumn('ArtbConfByClerk', 'Artbconfbyclerk', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2EcrWhse', 'Artbcon2ecrwhse', 'VARCHAR', true, 1, 'L');
        $this->addColumn('ArtbConfZeroTermDisc', 'Artbconfzerotermdisc', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbConfUseAutoCidGen', 'Artbconfuseautocidgen', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfPrefixLen', 'Artbconfprefixlen', 'INTEGER', true, 1, 0);
        $this->addColumn('ArtbConfParAgeCredLast', 'Artbconfparagecredlast', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfIncludeCod', 'Artbconfincludecod', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfAddlPricDisc', 'Artbconfaddlpricdisc', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfApdOnOehd', 'Artbconfapdonoehd', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfNbrSp', 'Artbconfnbrsp', 'INTEGER', true, 1, 3);
        $this->addColumn('ArtbConfForceSpLvl', 'Artbconfforcesplvl', 'INTEGER', true, 1, 1);
        $this->addColumn('ArtbConfCustGetOpt', 'Artbconfcustgetopt', 'INTEGER', true, 1, 1);
        $this->addColumn('ArtbConfAddICmnt', 'Artbconfaddicmnt', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2AppAddiscItmPdm', 'Artbcon2appaddiscitmpdm', 'VARCHAR', true, 1, 'B');
        $this->addColumn('ArtbCon2RfndSelectAmt', 'Artbcon2rfndselectamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('ArtbCon2RfndGlAcct', 'Artbcon2rfndglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbCon2RfndApTerm', 'Artbcon2rfndapterm', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbCon2RfndArTerm', 'Artbcon2rfndarterm', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbCon2CwoTerm', 'Artbcon2cwoterm', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbCon2CcTerm', 'Artbcon2ccterm', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbCon2CcSave', 'Artbcon2ccsave', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2CcBatch', 'Artbcon2ccbatch', 'VARCHAR', true, 1, 'B');
        $this->addColumn('ArtbCon2CcSaveDays', 'Artbcon2ccsavedays', 'INTEGER', true, 5, 0);
        $this->addColumn('ArtbCon2AprvdCcAsDeposit', 'Artbcon2aprvdccasdeposit', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2CmQtySign', 'Artbcon2cmqtysign', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('ArtbCon2BolLine', 'Artbcon2bolline', 'INTEGER', true, 2, 20);
        $this->addColumn('ArtbCon2BolCols', 'Artbcon2bolcols', 'INTEGER', true, 2, 35);
        $this->addColumn('ArtbCon2UseSoUnitWght', 'Artbcon2usesounitwght', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2DelZbal', 'Artbcon2delzbal', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfStopCustChg', 'Artbconfstopcustchg', 'INTEGER', true, 4, 0);
        $this->addColumn('ArtbCon2ProspectEditCmm', 'Artbcon2prospecteditcmm', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2ProspectNotesToCmm', 'Artbcon2prospectnotestocmm', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2CtryGetDflt', 'Artbcon2ctrygetdflt', 'VARCHAR', true, 1, '3');
        $this->addColumn('ArtbConfRptByWhse', 'Artbconfrptbywhse', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbConfAppendPos', 'Artbconfappendpos', 'INTEGER', true, 1, 0);
        $this->addColumn('ArtbConfIncoAsstAcct', 'Artbconfincoasstacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbConfIncoLiabAcct', 'Artbconfincoliabacct', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbCon2IncoAsstAcct2', 'Artbcon2incoasstacct2', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbCon2IncoLiabAcct2', 'Artbcon2incoliabacct2', 'VARCHAR', true, 9, '');
        $this->addColumn('ArtbCon2UseSurchg', 'Artbcon2usesurchg', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2SurchgItemId', 'Artbcon2surchgitemid', 'VARCHAR', true, 30, '');
        $this->addColumn('ArtbCon2SurchgIgrupSeq', 'Artbcon2surchgigrupseq', 'INTEGER', true, 2, 0);
        $this->addColumn('ArtbCon2SurchgSviaSeq', 'Artbcon2surchgsviaseq', 'INTEGER', true, 2, 0);
        $this->addColumn('ArtbCon2SurchgCstidSeq', 'Artbcon2surchgcstidseq', 'INTEGER', true, 2, 0);
        $this->addColumn('ArtbCon2SurchgCstpcSeq', 'Artbcon2surchgcstpcseq', 'INTEGER', true, 2, 0);
        $this->addColumn('ArtbConfZeroInvcLine', 'Artbconfzeroinvcline', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2ZeroOrdrShip', 'Artbcon2zeroordrship', 'VARCHAR', true, 1, 'N');
        $this->addColumn('ArtbCon2ZeroOrdrMess', 'Artbcon2zeroordrmess', 'VARCHAR', true, 35, '');
        $this->addColumn('ArtbConfCashAcctWhse', 'Artbconfcashacctwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('ArtbCon2MtaxFrtFlagOrCode', 'Artbcon2mtaxfrtflagorcode', 'VARCHAR', true, 1, 'C');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', true, 1, 'P');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Artbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigArTableMap::CLASS_DEFAULT : ConfigArTableMap::OM_CLASS;
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
     * @return array           (ConfigAr object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigArTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigArTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigArTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigArTableMap::OM_CLASS;
            /** @var ConfigAr $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigArTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigArTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigArTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigAr $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigArTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFKEY);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFGLIFAC);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINIFAC);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFPCIFAC);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCCIFAC);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINVCUSTGL);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFFRTACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFMISCACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFARACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCASHACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2CCCASHACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFFINCACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFDISCACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFRGACOGSACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCUSDACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFDPSTACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFFINCPCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFFINCDAYS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFFINCMINCHG);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFFINCTERM);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFOVER1);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFOVER2);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMTLINE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMTCOLS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMTNOTE1);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMTNOTE2);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMTNOTE3);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINVLINE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINVCOLS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINVNOTEDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCUSTLINE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCUSTCOLS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINVSORT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINVNC);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMTSORT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSPDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFWHSE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFTYPEDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSVIADEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFTERMDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFTAXDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTMTDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFALLOWBO);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFALLOWFC);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFUSEPRICCODE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFPRICDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFUSECOMMCODE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCOMMDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCUSTLABL);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCUSTREQ);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCUSTDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSHIPLABL);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSHIPREQ);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSHIPDEF);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFUSEIDLINK);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFREQDATE2);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFREQDATE3);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFREQDATE4);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFUSEWEB);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFBYCLERK);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2ECRWHSE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFZEROTERMDISC);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFPREFIXLEN);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINCLUDECOD);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFADDLPRICDISC);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFAPDONOEHD);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFNBRSP);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFFORCESPLVL);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCUSTGETOPT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFADDICMNT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2RFNDGLACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2RFNDAPTERM);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2RFNDARTERM);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2CWOTERM);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2CCTERM);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2CCSAVE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2CCBATCH);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2CMQTYSIGN);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2BOLLINE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2BOLCOLS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2DELZBAL);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFRPTBYWHSE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFAPPENDPOS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINCOASSTACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFINCOLIABACCT);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2USESURCHG);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2SURCHGITEMID);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFZEROINVCLINE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE);
            $criteria->addSelectColumn(ConfigArTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigArTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigArTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArtbConfKey');
            $criteria->addSelectColumn($alias . '.ArtbConfGlIfac');
            $criteria->addSelectColumn($alias . '.ArtbConfInIfac');
            $criteria->addSelectColumn($alias . '.ArtbConfPcIfac');
            $criteria->addSelectColumn($alias . '.ArtbConfCcIfac');
            $criteria->addSelectColumn($alias . '.ArtbConfInvCustGl');
            $criteria->addSelectColumn($alias . '.ArtbConfFrtAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfMiscAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfArAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfCashAcct');
            $criteria->addSelectColumn($alias . '.ArtbCon2CcCashAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfFincAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfDiscAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfRgaCogsAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfCusdAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfDpstAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfWriteOffAcct');
            $criteria->addSelectColumn($alias . '.ArtbCon2PresalIvtyAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfFincPct');
            $criteria->addSelectColumn($alias . '.ArtbConfFincDays');
            $criteria->addSelectColumn($alias . '.ArtbConfFincMinChg');
            $criteria->addSelectColumn($alias . '.ArtbConfFincTerm');
            $criteria->addSelectColumn($alias . '.ArtbConfOver1');
            $criteria->addSelectColumn($alias . '.ArtbConfOver2');
            $criteria->addSelectColumn($alias . '.ArtbConfStmtLine');
            $criteria->addSelectColumn($alias . '.ArtbConfStmtCols');
            $criteria->addSelectColumn($alias . '.ArtbConfStmtNoteDef');
            $criteria->addSelectColumn($alias . '.ArtbConfStmtNote1');
            $criteria->addSelectColumn($alias . '.ArtbConfStmtNote2');
            $criteria->addSelectColumn($alias . '.ArtbConfStmtNote3');
            $criteria->addSelectColumn($alias . '.ArtbConfInvLine');
            $criteria->addSelectColumn($alias . '.ArtbConfInvCols');
            $criteria->addSelectColumn($alias . '.ArtbConfInvNoteDef');
            $criteria->addSelectColumn($alias . '.ArtbConfCustLine');
            $criteria->addSelectColumn($alias . '.ArtbConfCustCols');
            $criteria->addSelectColumn($alias . '.ArtbConfInvSort');
            $criteria->addSelectColumn($alias . '.ArtbConfInvNc');
            $criteria->addSelectColumn($alias . '.ArtbConfStmtSort');
            $criteria->addSelectColumn($alias . '.ArtbConfStmt0OrLess');
            $criteria->addSelectColumn($alias . '.ArtbConfSpDef');
            $criteria->addSelectColumn($alias . '.ArtbConfWhse');
            $criteria->addSelectColumn($alias . '.ArtbConfTypeDef');
            $criteria->addSelectColumn($alias . '.ArtbConfSviaDef');
            $criteria->addSelectColumn($alias . '.ArtbConfTermDef');
            $criteria->addSelectColumn($alias . '.ArtbConfTaxDef');
            $criteria->addSelectColumn($alias . '.ArtbConfStmtDef');
            $criteria->addSelectColumn($alias . '.ArtbConfAllowBo');
            $criteria->addSelectColumn($alias . '.ArtbConfAllowFc');
            $criteria->addSelectColumn($alias . '.ArtbConfUsePricCode');
            $criteria->addSelectColumn($alias . '.ArtbConfPricDef');
            $criteria->addSelectColumn($alias . '.ArtbConfUseCommCode');
            $criteria->addSelectColumn($alias . '.ArtbConfCommDef');
            $criteria->addSelectColumn($alias . '.ArtbConfCustLabl');
            $criteria->addSelectColumn($alias . '.ArtbConfCustReq');
            $criteria->addSelectColumn($alias . '.ArtbConfCustDef');
            $criteria->addSelectColumn($alias . '.ArtbConfShipLabl');
            $criteria->addSelectColumn($alias . '.ArtbConfShipReq');
            $criteria->addSelectColumn($alias . '.ArtbConfShipDef');
            $criteria->addSelectColumn($alias . '.ArtbConfUseIdLink');
            $criteria->addSelectColumn($alias . '.ArtbConfReqDate2');
            $criteria->addSelectColumn($alias . '.ArtbConfReqDate3');
            $criteria->addSelectColumn($alias . '.ArtbConfReqDate4');
            $criteria->addSelectColumn($alias . '.ArtbConfUseWeb');
            $criteria->addSelectColumn($alias . '.ArtbConfPayhStoreDays');
            $criteria->addSelectColumn($alias . '.ArtbConfByClerk');
            $criteria->addSelectColumn($alias . '.ArtbCon2EcrWhse');
            $criteria->addSelectColumn($alias . '.ArtbConfZeroTermDisc');
            $criteria->addSelectColumn($alias . '.ArtbConfUseAutoCidGen');
            $criteria->addSelectColumn($alias . '.ArtbConfPrefixLen');
            $criteria->addSelectColumn($alias . '.ArtbConfParAgeCredLast');
            $criteria->addSelectColumn($alias . '.ArtbConfIncludeCod');
            $criteria->addSelectColumn($alias . '.ArtbConfAddlPricDisc');
            $criteria->addSelectColumn($alias . '.ArtbConfApdOnOehd');
            $criteria->addSelectColumn($alias . '.ArtbConfNbrSp');
            $criteria->addSelectColumn($alias . '.ArtbConfForceSpLvl');
            $criteria->addSelectColumn($alias . '.ArtbConfCustGetOpt');
            $criteria->addSelectColumn($alias . '.ArtbConfAddICmnt');
            $criteria->addSelectColumn($alias . '.ArtbCon2AppAddiscItmPdm');
            $criteria->addSelectColumn($alias . '.ArtbCon2RfndSelectAmt');
            $criteria->addSelectColumn($alias . '.ArtbCon2RfndGlAcct');
            $criteria->addSelectColumn($alias . '.ArtbCon2RfndApTerm');
            $criteria->addSelectColumn($alias . '.ArtbCon2RfndArTerm');
            $criteria->addSelectColumn($alias . '.ArtbCon2CwoTerm');
            $criteria->addSelectColumn($alias . '.ArtbCon2CcTerm');
            $criteria->addSelectColumn($alias . '.ArtbCon2CcSave');
            $criteria->addSelectColumn($alias . '.ArtbCon2CcBatch');
            $criteria->addSelectColumn($alias . '.ArtbCon2CcSaveDays');
            $criteria->addSelectColumn($alias . '.ArtbCon2AprvdCcAsDeposit');
            $criteria->addSelectColumn($alias . '.ArtbCon2CmQtySign');
            $criteria->addSelectColumn($alias . '.ArtbCon2BolLine');
            $criteria->addSelectColumn($alias . '.ArtbCon2BolCols');
            $criteria->addSelectColumn($alias . '.ArtbCon2UseSoUnitWght');
            $criteria->addSelectColumn($alias . '.ArtbCon2DelZbal');
            $criteria->addSelectColumn($alias . '.ArtbConfStopCustChg');
            $criteria->addSelectColumn($alias . '.ArtbCon2ProspectEditCmm');
            $criteria->addSelectColumn($alias . '.ArtbCon2ProspectNotesToCmm');
            $criteria->addSelectColumn($alias . '.ArtbCon2CtryGetDflt');
            $criteria->addSelectColumn($alias . '.ArtbConfRptByWhse');
            $criteria->addSelectColumn($alias . '.ArtbConfAppendPos');
            $criteria->addSelectColumn($alias . '.ArtbConfIncoAsstAcct');
            $criteria->addSelectColumn($alias . '.ArtbConfIncoLiabAcct');
            $criteria->addSelectColumn($alias . '.ArtbCon2IncoAsstAcct2');
            $criteria->addSelectColumn($alias . '.ArtbCon2IncoLiabAcct2');
            $criteria->addSelectColumn($alias . '.ArtbCon2UseSurchg');
            $criteria->addSelectColumn($alias . '.ArtbCon2SurchgItemId');
            $criteria->addSelectColumn($alias . '.ArtbCon2SurchgIgrupSeq');
            $criteria->addSelectColumn($alias . '.ArtbCon2SurchgSviaSeq');
            $criteria->addSelectColumn($alias . '.ArtbCon2SurchgCstidSeq');
            $criteria->addSelectColumn($alias . '.ArtbCon2SurchgCstpcSeq');
            $criteria->addSelectColumn($alias . '.ArtbConfZeroInvcLine');
            $criteria->addSelectColumn($alias . '.ArtbCon2ZeroOrdrShip');
            $criteria->addSelectColumn($alias . '.ArtbCon2ZeroOrdrMess');
            $criteria->addSelectColumn($alias . '.ArtbConfCashAcctWhse');
            $criteria->addSelectColumn($alias . '.ArtbCon2MtaxFrtFlagOrCode');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigArTableMap::DATABASE_NAME)->getTable(ConfigArTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigArTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigArTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigArTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigAr or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigAr object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigArTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigAr) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigArTableMap::DATABASE_NAME);
            $criteria->add(ConfigArTableMap::COL_ARTBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigArQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigArTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigArTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigArQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigAr or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigAr object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigArTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigAr object
        }


        // Set the correct dbName
        $query = ConfigArQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigArTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigArTableMap::buildTableMap();
