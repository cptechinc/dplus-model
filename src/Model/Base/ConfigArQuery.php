<?php

namespace Base;

use \ConfigAr as ChildConfigAr;
use \ConfigArQuery as ChildConfigArQuery;
use \Exception;
use \PDO;
use Map\ConfigArTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_config` table.
 *
 * @method     ChildConfigArQuery orderByArtbconfkey($order = Criteria::ASC) Order by the ArtbConfKey column
 * @method     ChildConfigArQuery orderByArtbconfglifac($order = Criteria::ASC) Order by the ArtbConfGlIfac column
 * @method     ChildConfigArQuery orderByArtbconfinifac($order = Criteria::ASC) Order by the ArtbConfInIfac column
 * @method     ChildConfigArQuery orderByArtbconfpcifac($order = Criteria::ASC) Order by the ArtbConfPcIfac column
 * @method     ChildConfigArQuery orderByArtbconfccifac($order = Criteria::ASC) Order by the ArtbConfCcIfac column
 * @method     ChildConfigArQuery orderByArtbconfinvcustgl($order = Criteria::ASC) Order by the ArtbConfInvCustGl column
 * @method     ChildConfigArQuery orderByArtbconffrtacct($order = Criteria::ASC) Order by the ArtbConfFrtAcct column
 * @method     ChildConfigArQuery orderByArtbconfmiscacct($order = Criteria::ASC) Order by the ArtbConfMiscAcct column
 * @method     ChildConfigArQuery orderByArtbconfaracct($order = Criteria::ASC) Order by the ArtbConfArAcct column
 * @method     ChildConfigArQuery orderByArtbconfcashacct($order = Criteria::ASC) Order by the ArtbConfCashAcct column
 * @method     ChildConfigArQuery orderByArtbcon2cccashacct($order = Criteria::ASC) Order by the ArtbCon2CcCashAcct column
 * @method     ChildConfigArQuery orderByArtbconffincacct($order = Criteria::ASC) Order by the ArtbConfFincAcct column
 * @method     ChildConfigArQuery orderByArtbconfdiscacct($order = Criteria::ASC) Order by the ArtbConfDiscAcct column
 * @method     ChildConfigArQuery orderByArtbconfrgacogsacct($order = Criteria::ASC) Order by the ArtbConfRgaCogsAcct column
 * @method     ChildConfigArQuery orderByArtbconfcusdacct($order = Criteria::ASC) Order by the ArtbConfCusdAcct column
 * @method     ChildConfigArQuery orderByArtbconfdpstacct($order = Criteria::ASC) Order by the ArtbConfDpstAcct column
 * @method     ChildConfigArQuery orderByArtbconfwriteoffacct($order = Criteria::ASC) Order by the ArtbConfWriteOffAcct column
 * @method     ChildConfigArQuery orderByArtbcon2presalivtyacct($order = Criteria::ASC) Order by the ArtbCon2PresalIvtyAcct column
 * @method     ChildConfigArQuery orderByArtbconffincpct($order = Criteria::ASC) Order by the ArtbConfFincPct column
 * @method     ChildConfigArQuery orderByArtbconffincdays($order = Criteria::ASC) Order by the ArtbConfFincDays column
 * @method     ChildConfigArQuery orderByArtbconffincminchg($order = Criteria::ASC) Order by the ArtbConfFincMinChg column
 * @method     ChildConfigArQuery orderByArtbconffincterm($order = Criteria::ASC) Order by the ArtbConfFincTerm column
 * @method     ChildConfigArQuery orderByArtbconfover1($order = Criteria::ASC) Order by the ArtbConfOver1 column
 * @method     ChildConfigArQuery orderByArtbconfover2($order = Criteria::ASC) Order by the ArtbConfOver2 column
 * @method     ChildConfigArQuery orderByArtbconfstmtline($order = Criteria::ASC) Order by the ArtbConfStmtLine column
 * @method     ChildConfigArQuery orderByArtbconfstmtcols($order = Criteria::ASC) Order by the ArtbConfStmtCols column
 * @method     ChildConfigArQuery orderByArtbconfstmtnotedef($order = Criteria::ASC) Order by the ArtbConfStmtNoteDef column
 * @method     ChildConfigArQuery orderByArtbconfstmtnote1($order = Criteria::ASC) Order by the ArtbConfStmtNote1 column
 * @method     ChildConfigArQuery orderByArtbconfstmtnote2($order = Criteria::ASC) Order by the ArtbConfStmtNote2 column
 * @method     ChildConfigArQuery orderByArtbconfstmtnote3($order = Criteria::ASC) Order by the ArtbConfStmtNote3 column
 * @method     ChildConfigArQuery orderByArtbconfinvline($order = Criteria::ASC) Order by the ArtbConfInvLine column
 * @method     ChildConfigArQuery orderByArtbconfinvcols($order = Criteria::ASC) Order by the ArtbConfInvCols column
 * @method     ChildConfigArQuery orderByArtbconfinvnotedef($order = Criteria::ASC) Order by the ArtbConfInvNoteDef column
 * @method     ChildConfigArQuery orderByArtbconfcustline($order = Criteria::ASC) Order by the ArtbConfCustLine column
 * @method     ChildConfigArQuery orderByArtbconfcustcols($order = Criteria::ASC) Order by the ArtbConfCustCols column
 * @method     ChildConfigArQuery orderByArtbconfinvsort($order = Criteria::ASC) Order by the ArtbConfInvSort column
 * @method     ChildConfigArQuery orderByArtbconfinvnc($order = Criteria::ASC) Order by the ArtbConfInvNc column
 * @method     ChildConfigArQuery orderByArtbconfstmtsort($order = Criteria::ASC) Order by the ArtbConfStmtSort column
 * @method     ChildConfigArQuery orderByArtbconfstmt0orless($order = Criteria::ASC) Order by the ArtbConfStmt0OrLess column
 * @method     ChildConfigArQuery orderByArtbconfspdef($order = Criteria::ASC) Order by the ArtbConfSpDef column
 * @method     ChildConfigArQuery orderByArtbconfwhse($order = Criteria::ASC) Order by the ArtbConfWhse column
 * @method     ChildConfigArQuery orderByArtbconftypedef($order = Criteria::ASC) Order by the ArtbConfTypeDef column
 * @method     ChildConfigArQuery orderByArtbconfsviadef($order = Criteria::ASC) Order by the ArtbConfSviaDef column
 * @method     ChildConfigArQuery orderByArtbconftermdef($order = Criteria::ASC) Order by the ArtbConfTermDef column
 * @method     ChildConfigArQuery orderByArtbconftaxdef($order = Criteria::ASC) Order by the ArtbConfTaxDef column
 * @method     ChildConfigArQuery orderByArtbconfstmtdef($order = Criteria::ASC) Order by the ArtbConfStmtDef column
 * @method     ChildConfigArQuery orderByArtbconfallowbo($order = Criteria::ASC) Order by the ArtbConfAllowBo column
 * @method     ChildConfigArQuery orderByArtbconfallowfc($order = Criteria::ASC) Order by the ArtbConfAllowFc column
 * @method     ChildConfigArQuery orderByArtbconfusepriccode($order = Criteria::ASC) Order by the ArtbConfUsePricCode column
 * @method     ChildConfigArQuery orderByArtbconfpricdef($order = Criteria::ASC) Order by the ArtbConfPricDef column
 * @method     ChildConfigArQuery orderByArtbconfusecommcode($order = Criteria::ASC) Order by the ArtbConfUseCommCode column
 * @method     ChildConfigArQuery orderByArtbconfcommdef($order = Criteria::ASC) Order by the ArtbConfCommDef column
 * @method     ChildConfigArQuery orderByArtbconfcustlabl($order = Criteria::ASC) Order by the ArtbConfCustLabl column
 * @method     ChildConfigArQuery orderByArtbconfcustreq($order = Criteria::ASC) Order by the ArtbConfCustReq column
 * @method     ChildConfigArQuery orderByArtbconfcustdef($order = Criteria::ASC) Order by the ArtbConfCustDef column
 * @method     ChildConfigArQuery orderByArtbconfshiplabl($order = Criteria::ASC) Order by the ArtbConfShipLabl column
 * @method     ChildConfigArQuery orderByArtbconfshipreq($order = Criteria::ASC) Order by the ArtbConfShipReq column
 * @method     ChildConfigArQuery orderByArtbconfshipdef($order = Criteria::ASC) Order by the ArtbConfShipDef column
 * @method     ChildConfigArQuery orderByArtbconfuseidlink($order = Criteria::ASC) Order by the ArtbConfUseIdLink column
 * @method     ChildConfigArQuery orderByArtbconfreqdate2($order = Criteria::ASC) Order by the ArtbConfReqDate2 column
 * @method     ChildConfigArQuery orderByArtbconfreqdate3($order = Criteria::ASC) Order by the ArtbConfReqDate3 column
 * @method     ChildConfigArQuery orderByArtbconfreqdate4($order = Criteria::ASC) Order by the ArtbConfReqDate4 column
 * @method     ChildConfigArQuery orderByArtbconfuseweb($order = Criteria::ASC) Order by the ArtbConfUseWeb column
 * @method     ChildConfigArQuery orderByArtbconfpayhstoredays($order = Criteria::ASC) Order by the ArtbConfPayhStoreDays column
 * @method     ChildConfigArQuery orderByArtbconfbyclerk($order = Criteria::ASC) Order by the ArtbConfByClerk column
 * @method     ChildConfigArQuery orderByArtbcon2ecrwhse($order = Criteria::ASC) Order by the ArtbCon2EcrWhse column
 * @method     ChildConfigArQuery orderByArtbconfzerotermdisc($order = Criteria::ASC) Order by the ArtbConfZeroTermDisc column
 * @method     ChildConfigArQuery orderByArtbconfuseautocidgen($order = Criteria::ASC) Order by the ArtbConfUseAutoCidGen column
 * @method     ChildConfigArQuery orderByArtbconfprefixlen($order = Criteria::ASC) Order by the ArtbConfPrefixLen column
 * @method     ChildConfigArQuery orderByArtbconfparagecredlast($order = Criteria::ASC) Order by the ArtbConfParAgeCredLast column
 * @method     ChildConfigArQuery orderByArtbconfincludecod($order = Criteria::ASC) Order by the ArtbConfIncludeCod column
 * @method     ChildConfigArQuery orderByArtbconfaddlpricdisc($order = Criteria::ASC) Order by the ArtbConfAddlPricDisc column
 * @method     ChildConfigArQuery orderByArtbconfapdonoehd($order = Criteria::ASC) Order by the ArtbConfApdOnOehd column
 * @method     ChildConfigArQuery orderByArtbconfnbrsp($order = Criteria::ASC) Order by the ArtbConfNbrSp column
 * @method     ChildConfigArQuery orderByArtbconfforcesplvl($order = Criteria::ASC) Order by the ArtbConfForceSpLvl column
 * @method     ChildConfigArQuery orderByArtbconfcustgetopt($order = Criteria::ASC) Order by the ArtbConfCustGetOpt column
 * @method     ChildConfigArQuery orderByArtbconfaddicmnt($order = Criteria::ASC) Order by the ArtbConfAddICmnt column
 * @method     ChildConfigArQuery orderByArtbcon2appaddiscitmpdm($order = Criteria::ASC) Order by the ArtbCon2AppAddiscItmPdm column
 * @method     ChildConfigArQuery orderByArtbcon2rfndselectamt($order = Criteria::ASC) Order by the ArtbCon2RfndSelectAmt column
 * @method     ChildConfigArQuery orderByArtbcon2rfndglacct($order = Criteria::ASC) Order by the ArtbCon2RfndGlAcct column
 * @method     ChildConfigArQuery orderByArtbcon2rfndapterm($order = Criteria::ASC) Order by the ArtbCon2RfndApTerm column
 * @method     ChildConfigArQuery orderByArtbcon2rfndarterm($order = Criteria::ASC) Order by the ArtbCon2RfndArTerm column
 * @method     ChildConfigArQuery orderByArtbcon2cwoterm($order = Criteria::ASC) Order by the ArtbCon2CwoTerm column
 * @method     ChildConfigArQuery orderByArtbcon2ccterm($order = Criteria::ASC) Order by the ArtbCon2CcTerm column
 * @method     ChildConfigArQuery orderByArtbcon2ccsave($order = Criteria::ASC) Order by the ArtbCon2CcSave column
 * @method     ChildConfigArQuery orderByArtbcon2ccbatch($order = Criteria::ASC) Order by the ArtbCon2CcBatch column
 * @method     ChildConfigArQuery orderByArtbcon2ccsavedays($order = Criteria::ASC) Order by the ArtbCon2CcSaveDays column
 * @method     ChildConfigArQuery orderByArtbcon2aprvdccasdeposit($order = Criteria::ASC) Order by the ArtbCon2AprvdCcAsDeposit column
 * @method     ChildConfigArQuery orderByArtbcon2cmqtysign($order = Criteria::ASC) Order by the ArtbCon2CmQtySign column
 * @method     ChildConfigArQuery orderByArtbcon2bolline($order = Criteria::ASC) Order by the ArtbCon2BolLine column
 * @method     ChildConfigArQuery orderByArtbcon2bolcols($order = Criteria::ASC) Order by the ArtbCon2BolCols column
 * @method     ChildConfigArQuery orderByArtbcon2usesounitwght($order = Criteria::ASC) Order by the ArtbCon2UseSoUnitWght column
 * @method     ChildConfigArQuery orderByArtbcon2delzbal($order = Criteria::ASC) Order by the ArtbCon2DelZbal column
 * @method     ChildConfigArQuery orderByArtbconfstopcustchg($order = Criteria::ASC) Order by the ArtbConfStopCustChg column
 * @method     ChildConfigArQuery orderByArtbcon2prospecteditcmm($order = Criteria::ASC) Order by the ArtbCon2ProspectEditCmm column
 * @method     ChildConfigArQuery orderByArtbcon2prospectnotestocmm($order = Criteria::ASC) Order by the ArtbCon2ProspectNotesToCmm column
 * @method     ChildConfigArQuery orderByArtbcon2ctrygetdflt($order = Criteria::ASC) Order by the ArtbCon2CtryGetDflt column
 * @method     ChildConfigArQuery orderByArtbconfrptbywhse($order = Criteria::ASC) Order by the ArtbConfRptByWhse column
 * @method     ChildConfigArQuery orderByArtbconfappendpos($order = Criteria::ASC) Order by the ArtbConfAppendPos column
 * @method     ChildConfigArQuery orderByArtbconfincoasstacct($order = Criteria::ASC) Order by the ArtbConfIncoAsstAcct column
 * @method     ChildConfigArQuery orderByArtbconfincoliabacct($order = Criteria::ASC) Order by the ArtbConfIncoLiabAcct column
 * @method     ChildConfigArQuery orderByArtbcon2incoasstacct2($order = Criteria::ASC) Order by the ArtbCon2IncoAsstAcct2 column
 * @method     ChildConfigArQuery orderByArtbcon2incoliabacct2($order = Criteria::ASC) Order by the ArtbCon2IncoLiabAcct2 column
 * @method     ChildConfigArQuery orderByArtbcon2usesurchg($order = Criteria::ASC) Order by the ArtbCon2UseSurchg column
 * @method     ChildConfigArQuery orderByArtbcon2surchgitemid($order = Criteria::ASC) Order by the ArtbCon2SurchgItemId column
 * @method     ChildConfigArQuery orderByArtbcon2surchgigrupseq($order = Criteria::ASC) Order by the ArtbCon2SurchgIgrupSeq column
 * @method     ChildConfigArQuery orderByArtbcon2surchgsviaseq($order = Criteria::ASC) Order by the ArtbCon2SurchgSviaSeq column
 * @method     ChildConfigArQuery orderByArtbcon2surchgcstidseq($order = Criteria::ASC) Order by the ArtbCon2SurchgCstidSeq column
 * @method     ChildConfigArQuery orderByArtbcon2surchgcstpcseq($order = Criteria::ASC) Order by the ArtbCon2SurchgCstpcSeq column
 * @method     ChildConfigArQuery orderByArtbconfzeroinvcline($order = Criteria::ASC) Order by the ArtbConfZeroInvcLine column
 * @method     ChildConfigArQuery orderByArtbcon2zeroordrship($order = Criteria::ASC) Order by the ArtbCon2ZeroOrdrShip column
 * @method     ChildConfigArQuery orderByArtbcon2zeroordrmess($order = Criteria::ASC) Order by the ArtbCon2ZeroOrdrMess column
 * @method     ChildConfigArQuery orderByArtbconfcashacctwhse($order = Criteria::ASC) Order by the ArtbConfCashAcctWhse column
 * @method     ChildConfigArQuery orderByArtbcon2mtaxfrtflagorcode($order = Criteria::ASC) Order by the ArtbCon2MtaxFrtFlagOrCode column
 * @method     ChildConfigArQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigArQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigArQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigArQuery groupByArtbconfkey() Group by the ArtbConfKey column
 * @method     ChildConfigArQuery groupByArtbconfglifac() Group by the ArtbConfGlIfac column
 * @method     ChildConfigArQuery groupByArtbconfinifac() Group by the ArtbConfInIfac column
 * @method     ChildConfigArQuery groupByArtbconfpcifac() Group by the ArtbConfPcIfac column
 * @method     ChildConfigArQuery groupByArtbconfccifac() Group by the ArtbConfCcIfac column
 * @method     ChildConfigArQuery groupByArtbconfinvcustgl() Group by the ArtbConfInvCustGl column
 * @method     ChildConfigArQuery groupByArtbconffrtacct() Group by the ArtbConfFrtAcct column
 * @method     ChildConfigArQuery groupByArtbconfmiscacct() Group by the ArtbConfMiscAcct column
 * @method     ChildConfigArQuery groupByArtbconfaracct() Group by the ArtbConfArAcct column
 * @method     ChildConfigArQuery groupByArtbconfcashacct() Group by the ArtbConfCashAcct column
 * @method     ChildConfigArQuery groupByArtbcon2cccashacct() Group by the ArtbCon2CcCashAcct column
 * @method     ChildConfigArQuery groupByArtbconffincacct() Group by the ArtbConfFincAcct column
 * @method     ChildConfigArQuery groupByArtbconfdiscacct() Group by the ArtbConfDiscAcct column
 * @method     ChildConfigArQuery groupByArtbconfrgacogsacct() Group by the ArtbConfRgaCogsAcct column
 * @method     ChildConfigArQuery groupByArtbconfcusdacct() Group by the ArtbConfCusdAcct column
 * @method     ChildConfigArQuery groupByArtbconfdpstacct() Group by the ArtbConfDpstAcct column
 * @method     ChildConfigArQuery groupByArtbconfwriteoffacct() Group by the ArtbConfWriteOffAcct column
 * @method     ChildConfigArQuery groupByArtbcon2presalivtyacct() Group by the ArtbCon2PresalIvtyAcct column
 * @method     ChildConfigArQuery groupByArtbconffincpct() Group by the ArtbConfFincPct column
 * @method     ChildConfigArQuery groupByArtbconffincdays() Group by the ArtbConfFincDays column
 * @method     ChildConfigArQuery groupByArtbconffincminchg() Group by the ArtbConfFincMinChg column
 * @method     ChildConfigArQuery groupByArtbconffincterm() Group by the ArtbConfFincTerm column
 * @method     ChildConfigArQuery groupByArtbconfover1() Group by the ArtbConfOver1 column
 * @method     ChildConfigArQuery groupByArtbconfover2() Group by the ArtbConfOver2 column
 * @method     ChildConfigArQuery groupByArtbconfstmtline() Group by the ArtbConfStmtLine column
 * @method     ChildConfigArQuery groupByArtbconfstmtcols() Group by the ArtbConfStmtCols column
 * @method     ChildConfigArQuery groupByArtbconfstmtnotedef() Group by the ArtbConfStmtNoteDef column
 * @method     ChildConfigArQuery groupByArtbconfstmtnote1() Group by the ArtbConfStmtNote1 column
 * @method     ChildConfigArQuery groupByArtbconfstmtnote2() Group by the ArtbConfStmtNote2 column
 * @method     ChildConfigArQuery groupByArtbconfstmtnote3() Group by the ArtbConfStmtNote3 column
 * @method     ChildConfigArQuery groupByArtbconfinvline() Group by the ArtbConfInvLine column
 * @method     ChildConfigArQuery groupByArtbconfinvcols() Group by the ArtbConfInvCols column
 * @method     ChildConfigArQuery groupByArtbconfinvnotedef() Group by the ArtbConfInvNoteDef column
 * @method     ChildConfigArQuery groupByArtbconfcustline() Group by the ArtbConfCustLine column
 * @method     ChildConfigArQuery groupByArtbconfcustcols() Group by the ArtbConfCustCols column
 * @method     ChildConfigArQuery groupByArtbconfinvsort() Group by the ArtbConfInvSort column
 * @method     ChildConfigArQuery groupByArtbconfinvnc() Group by the ArtbConfInvNc column
 * @method     ChildConfigArQuery groupByArtbconfstmtsort() Group by the ArtbConfStmtSort column
 * @method     ChildConfigArQuery groupByArtbconfstmt0orless() Group by the ArtbConfStmt0OrLess column
 * @method     ChildConfigArQuery groupByArtbconfspdef() Group by the ArtbConfSpDef column
 * @method     ChildConfigArQuery groupByArtbconfwhse() Group by the ArtbConfWhse column
 * @method     ChildConfigArQuery groupByArtbconftypedef() Group by the ArtbConfTypeDef column
 * @method     ChildConfigArQuery groupByArtbconfsviadef() Group by the ArtbConfSviaDef column
 * @method     ChildConfigArQuery groupByArtbconftermdef() Group by the ArtbConfTermDef column
 * @method     ChildConfigArQuery groupByArtbconftaxdef() Group by the ArtbConfTaxDef column
 * @method     ChildConfigArQuery groupByArtbconfstmtdef() Group by the ArtbConfStmtDef column
 * @method     ChildConfigArQuery groupByArtbconfallowbo() Group by the ArtbConfAllowBo column
 * @method     ChildConfigArQuery groupByArtbconfallowfc() Group by the ArtbConfAllowFc column
 * @method     ChildConfigArQuery groupByArtbconfusepriccode() Group by the ArtbConfUsePricCode column
 * @method     ChildConfigArQuery groupByArtbconfpricdef() Group by the ArtbConfPricDef column
 * @method     ChildConfigArQuery groupByArtbconfusecommcode() Group by the ArtbConfUseCommCode column
 * @method     ChildConfigArQuery groupByArtbconfcommdef() Group by the ArtbConfCommDef column
 * @method     ChildConfigArQuery groupByArtbconfcustlabl() Group by the ArtbConfCustLabl column
 * @method     ChildConfigArQuery groupByArtbconfcustreq() Group by the ArtbConfCustReq column
 * @method     ChildConfigArQuery groupByArtbconfcustdef() Group by the ArtbConfCustDef column
 * @method     ChildConfigArQuery groupByArtbconfshiplabl() Group by the ArtbConfShipLabl column
 * @method     ChildConfigArQuery groupByArtbconfshipreq() Group by the ArtbConfShipReq column
 * @method     ChildConfigArQuery groupByArtbconfshipdef() Group by the ArtbConfShipDef column
 * @method     ChildConfigArQuery groupByArtbconfuseidlink() Group by the ArtbConfUseIdLink column
 * @method     ChildConfigArQuery groupByArtbconfreqdate2() Group by the ArtbConfReqDate2 column
 * @method     ChildConfigArQuery groupByArtbconfreqdate3() Group by the ArtbConfReqDate3 column
 * @method     ChildConfigArQuery groupByArtbconfreqdate4() Group by the ArtbConfReqDate4 column
 * @method     ChildConfigArQuery groupByArtbconfuseweb() Group by the ArtbConfUseWeb column
 * @method     ChildConfigArQuery groupByArtbconfpayhstoredays() Group by the ArtbConfPayhStoreDays column
 * @method     ChildConfigArQuery groupByArtbconfbyclerk() Group by the ArtbConfByClerk column
 * @method     ChildConfigArQuery groupByArtbcon2ecrwhse() Group by the ArtbCon2EcrWhse column
 * @method     ChildConfigArQuery groupByArtbconfzerotermdisc() Group by the ArtbConfZeroTermDisc column
 * @method     ChildConfigArQuery groupByArtbconfuseautocidgen() Group by the ArtbConfUseAutoCidGen column
 * @method     ChildConfigArQuery groupByArtbconfprefixlen() Group by the ArtbConfPrefixLen column
 * @method     ChildConfigArQuery groupByArtbconfparagecredlast() Group by the ArtbConfParAgeCredLast column
 * @method     ChildConfigArQuery groupByArtbconfincludecod() Group by the ArtbConfIncludeCod column
 * @method     ChildConfigArQuery groupByArtbconfaddlpricdisc() Group by the ArtbConfAddlPricDisc column
 * @method     ChildConfigArQuery groupByArtbconfapdonoehd() Group by the ArtbConfApdOnOehd column
 * @method     ChildConfigArQuery groupByArtbconfnbrsp() Group by the ArtbConfNbrSp column
 * @method     ChildConfigArQuery groupByArtbconfforcesplvl() Group by the ArtbConfForceSpLvl column
 * @method     ChildConfigArQuery groupByArtbconfcustgetopt() Group by the ArtbConfCustGetOpt column
 * @method     ChildConfigArQuery groupByArtbconfaddicmnt() Group by the ArtbConfAddICmnt column
 * @method     ChildConfigArQuery groupByArtbcon2appaddiscitmpdm() Group by the ArtbCon2AppAddiscItmPdm column
 * @method     ChildConfigArQuery groupByArtbcon2rfndselectamt() Group by the ArtbCon2RfndSelectAmt column
 * @method     ChildConfigArQuery groupByArtbcon2rfndglacct() Group by the ArtbCon2RfndGlAcct column
 * @method     ChildConfigArQuery groupByArtbcon2rfndapterm() Group by the ArtbCon2RfndApTerm column
 * @method     ChildConfigArQuery groupByArtbcon2rfndarterm() Group by the ArtbCon2RfndArTerm column
 * @method     ChildConfigArQuery groupByArtbcon2cwoterm() Group by the ArtbCon2CwoTerm column
 * @method     ChildConfigArQuery groupByArtbcon2ccterm() Group by the ArtbCon2CcTerm column
 * @method     ChildConfigArQuery groupByArtbcon2ccsave() Group by the ArtbCon2CcSave column
 * @method     ChildConfigArQuery groupByArtbcon2ccbatch() Group by the ArtbCon2CcBatch column
 * @method     ChildConfigArQuery groupByArtbcon2ccsavedays() Group by the ArtbCon2CcSaveDays column
 * @method     ChildConfigArQuery groupByArtbcon2aprvdccasdeposit() Group by the ArtbCon2AprvdCcAsDeposit column
 * @method     ChildConfigArQuery groupByArtbcon2cmqtysign() Group by the ArtbCon2CmQtySign column
 * @method     ChildConfigArQuery groupByArtbcon2bolline() Group by the ArtbCon2BolLine column
 * @method     ChildConfigArQuery groupByArtbcon2bolcols() Group by the ArtbCon2BolCols column
 * @method     ChildConfigArQuery groupByArtbcon2usesounitwght() Group by the ArtbCon2UseSoUnitWght column
 * @method     ChildConfigArQuery groupByArtbcon2delzbal() Group by the ArtbCon2DelZbal column
 * @method     ChildConfigArQuery groupByArtbconfstopcustchg() Group by the ArtbConfStopCustChg column
 * @method     ChildConfigArQuery groupByArtbcon2prospecteditcmm() Group by the ArtbCon2ProspectEditCmm column
 * @method     ChildConfigArQuery groupByArtbcon2prospectnotestocmm() Group by the ArtbCon2ProspectNotesToCmm column
 * @method     ChildConfigArQuery groupByArtbcon2ctrygetdflt() Group by the ArtbCon2CtryGetDflt column
 * @method     ChildConfigArQuery groupByArtbconfrptbywhse() Group by the ArtbConfRptByWhse column
 * @method     ChildConfigArQuery groupByArtbconfappendpos() Group by the ArtbConfAppendPos column
 * @method     ChildConfigArQuery groupByArtbconfincoasstacct() Group by the ArtbConfIncoAsstAcct column
 * @method     ChildConfigArQuery groupByArtbconfincoliabacct() Group by the ArtbConfIncoLiabAcct column
 * @method     ChildConfigArQuery groupByArtbcon2incoasstacct2() Group by the ArtbCon2IncoAsstAcct2 column
 * @method     ChildConfigArQuery groupByArtbcon2incoliabacct2() Group by the ArtbCon2IncoLiabAcct2 column
 * @method     ChildConfigArQuery groupByArtbcon2usesurchg() Group by the ArtbCon2UseSurchg column
 * @method     ChildConfigArQuery groupByArtbcon2surchgitemid() Group by the ArtbCon2SurchgItemId column
 * @method     ChildConfigArQuery groupByArtbcon2surchgigrupseq() Group by the ArtbCon2SurchgIgrupSeq column
 * @method     ChildConfigArQuery groupByArtbcon2surchgsviaseq() Group by the ArtbCon2SurchgSviaSeq column
 * @method     ChildConfigArQuery groupByArtbcon2surchgcstidseq() Group by the ArtbCon2SurchgCstidSeq column
 * @method     ChildConfigArQuery groupByArtbcon2surchgcstpcseq() Group by the ArtbCon2SurchgCstpcSeq column
 * @method     ChildConfigArQuery groupByArtbconfzeroinvcline() Group by the ArtbConfZeroInvcLine column
 * @method     ChildConfigArQuery groupByArtbcon2zeroordrship() Group by the ArtbCon2ZeroOrdrShip column
 * @method     ChildConfigArQuery groupByArtbcon2zeroordrmess() Group by the ArtbCon2ZeroOrdrMess column
 * @method     ChildConfigArQuery groupByArtbconfcashacctwhse() Group by the ArtbConfCashAcctWhse column
 * @method     ChildConfigArQuery groupByArtbcon2mtaxfrtflagorcode() Group by the ArtbCon2MtaxFrtFlagOrCode column
 * @method     ChildConfigArQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigArQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigArQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigArQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigArQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigArQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigArQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigArQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigArQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigAr|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigAr matching the query
 * @method     ChildConfigAr findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigAr matching the query, or a new ChildConfigAr object populated from the query conditions when no match is found
 *
 * @method     ChildConfigAr|null findOneByArtbconfkey(int $ArtbConfKey) Return the first ChildConfigAr filtered by the ArtbConfKey column
 * @method     ChildConfigAr|null findOneByArtbconfglifac(string $ArtbConfGlIfac) Return the first ChildConfigAr filtered by the ArtbConfGlIfac column
 * @method     ChildConfigAr|null findOneByArtbconfinifac(string $ArtbConfInIfac) Return the first ChildConfigAr filtered by the ArtbConfInIfac column
 * @method     ChildConfigAr|null findOneByArtbconfpcifac(string $ArtbConfPcIfac) Return the first ChildConfigAr filtered by the ArtbConfPcIfac column
 * @method     ChildConfigAr|null findOneByArtbconfccifac(string $ArtbConfCcIfac) Return the first ChildConfigAr filtered by the ArtbConfCcIfac column
 * @method     ChildConfigAr|null findOneByArtbconfinvcustgl(string $ArtbConfInvCustGl) Return the first ChildConfigAr filtered by the ArtbConfInvCustGl column
 * @method     ChildConfigAr|null findOneByArtbconffrtacct(string $ArtbConfFrtAcct) Return the first ChildConfigAr filtered by the ArtbConfFrtAcct column
 * @method     ChildConfigAr|null findOneByArtbconfmiscacct(string $ArtbConfMiscAcct) Return the first ChildConfigAr filtered by the ArtbConfMiscAcct column
 * @method     ChildConfigAr|null findOneByArtbconfaracct(string $ArtbConfArAcct) Return the first ChildConfigAr filtered by the ArtbConfArAcct column
 * @method     ChildConfigAr|null findOneByArtbconfcashacct(string $ArtbConfCashAcct) Return the first ChildConfigAr filtered by the ArtbConfCashAcct column
 * @method     ChildConfigAr|null findOneByArtbcon2cccashacct(string $ArtbCon2CcCashAcct) Return the first ChildConfigAr filtered by the ArtbCon2CcCashAcct column
 * @method     ChildConfigAr|null findOneByArtbconffincacct(string $ArtbConfFincAcct) Return the first ChildConfigAr filtered by the ArtbConfFincAcct column
 * @method     ChildConfigAr|null findOneByArtbconfdiscacct(string $ArtbConfDiscAcct) Return the first ChildConfigAr filtered by the ArtbConfDiscAcct column
 * @method     ChildConfigAr|null findOneByArtbconfrgacogsacct(string $ArtbConfRgaCogsAcct) Return the first ChildConfigAr filtered by the ArtbConfRgaCogsAcct column
 * @method     ChildConfigAr|null findOneByArtbconfcusdacct(string $ArtbConfCusdAcct) Return the first ChildConfigAr filtered by the ArtbConfCusdAcct column
 * @method     ChildConfigAr|null findOneByArtbconfdpstacct(string $ArtbConfDpstAcct) Return the first ChildConfigAr filtered by the ArtbConfDpstAcct column
 * @method     ChildConfigAr|null findOneByArtbconfwriteoffacct(string $ArtbConfWriteOffAcct) Return the first ChildConfigAr filtered by the ArtbConfWriteOffAcct column
 * @method     ChildConfigAr|null findOneByArtbcon2presalivtyacct(string $ArtbCon2PresalIvtyAcct) Return the first ChildConfigAr filtered by the ArtbCon2PresalIvtyAcct column
 * @method     ChildConfigAr|null findOneByArtbconffincpct(string $ArtbConfFincPct) Return the first ChildConfigAr filtered by the ArtbConfFincPct column
 * @method     ChildConfigAr|null findOneByArtbconffincdays(int $ArtbConfFincDays) Return the first ChildConfigAr filtered by the ArtbConfFincDays column
 * @method     ChildConfigAr|null findOneByArtbconffincminchg(string $ArtbConfFincMinChg) Return the first ChildConfigAr filtered by the ArtbConfFincMinChg column
 * @method     ChildConfigAr|null findOneByArtbconffincterm(string $ArtbConfFincTerm) Return the first ChildConfigAr filtered by the ArtbConfFincTerm column
 * @method     ChildConfigAr|null findOneByArtbconfover1(int $ArtbConfOver1) Return the first ChildConfigAr filtered by the ArtbConfOver1 column
 * @method     ChildConfigAr|null findOneByArtbconfover2(int $ArtbConfOver2) Return the first ChildConfigAr filtered by the ArtbConfOver2 column
 * @method     ChildConfigAr|null findOneByArtbconfstmtline(int $ArtbConfStmtLine) Return the first ChildConfigAr filtered by the ArtbConfStmtLine column
 * @method     ChildConfigAr|null findOneByArtbconfstmtcols(int $ArtbConfStmtCols) Return the first ChildConfigAr filtered by the ArtbConfStmtCols column
 * @method     ChildConfigAr|null findOneByArtbconfstmtnotedef(string $ArtbConfStmtNoteDef) Return the first ChildConfigAr filtered by the ArtbConfStmtNoteDef column
 * @method     ChildConfigAr|null findOneByArtbconfstmtnote1(string $ArtbConfStmtNote1) Return the first ChildConfigAr filtered by the ArtbConfStmtNote1 column
 * @method     ChildConfigAr|null findOneByArtbconfstmtnote2(string $ArtbConfStmtNote2) Return the first ChildConfigAr filtered by the ArtbConfStmtNote2 column
 * @method     ChildConfigAr|null findOneByArtbconfstmtnote3(string $ArtbConfStmtNote3) Return the first ChildConfigAr filtered by the ArtbConfStmtNote3 column
 * @method     ChildConfigAr|null findOneByArtbconfinvline(int $ArtbConfInvLine) Return the first ChildConfigAr filtered by the ArtbConfInvLine column
 * @method     ChildConfigAr|null findOneByArtbconfinvcols(int $ArtbConfInvCols) Return the first ChildConfigAr filtered by the ArtbConfInvCols column
 * @method     ChildConfigAr|null findOneByArtbconfinvnotedef(string $ArtbConfInvNoteDef) Return the first ChildConfigAr filtered by the ArtbConfInvNoteDef column
 * @method     ChildConfigAr|null findOneByArtbconfcustline(int $ArtbConfCustLine) Return the first ChildConfigAr filtered by the ArtbConfCustLine column
 * @method     ChildConfigAr|null findOneByArtbconfcustcols(int $ArtbConfCustCols) Return the first ChildConfigAr filtered by the ArtbConfCustCols column
 * @method     ChildConfigAr|null findOneByArtbconfinvsort(string $ArtbConfInvSort) Return the first ChildConfigAr filtered by the ArtbConfInvSort column
 * @method     ChildConfigAr|null findOneByArtbconfinvnc(string $ArtbConfInvNc) Return the first ChildConfigAr filtered by the ArtbConfInvNc column
 * @method     ChildConfigAr|null findOneByArtbconfstmtsort(string $ArtbConfStmtSort) Return the first ChildConfigAr filtered by the ArtbConfStmtSort column
 * @method     ChildConfigAr|null findOneByArtbconfstmt0orless(string $ArtbConfStmt0OrLess) Return the first ChildConfigAr filtered by the ArtbConfStmt0OrLess column
 * @method     ChildConfigAr|null findOneByArtbconfspdef(string $ArtbConfSpDef) Return the first ChildConfigAr filtered by the ArtbConfSpDef column
 * @method     ChildConfigAr|null findOneByArtbconfwhse(string $ArtbConfWhse) Return the first ChildConfigAr filtered by the ArtbConfWhse column
 * @method     ChildConfigAr|null findOneByArtbconftypedef(string $ArtbConfTypeDef) Return the first ChildConfigAr filtered by the ArtbConfTypeDef column
 * @method     ChildConfigAr|null findOneByArtbconfsviadef(string $ArtbConfSviaDef) Return the first ChildConfigAr filtered by the ArtbConfSviaDef column
 * @method     ChildConfigAr|null findOneByArtbconftermdef(string $ArtbConfTermDef) Return the first ChildConfigAr filtered by the ArtbConfTermDef column
 * @method     ChildConfigAr|null findOneByArtbconftaxdef(string $ArtbConfTaxDef) Return the first ChildConfigAr filtered by the ArtbConfTaxDef column
 * @method     ChildConfigAr|null findOneByArtbconfstmtdef(string $ArtbConfStmtDef) Return the first ChildConfigAr filtered by the ArtbConfStmtDef column
 * @method     ChildConfigAr|null findOneByArtbconfallowbo(string $ArtbConfAllowBo) Return the first ChildConfigAr filtered by the ArtbConfAllowBo column
 * @method     ChildConfigAr|null findOneByArtbconfallowfc(string $ArtbConfAllowFc) Return the first ChildConfigAr filtered by the ArtbConfAllowFc column
 * @method     ChildConfigAr|null findOneByArtbconfusepriccode(string $ArtbConfUsePricCode) Return the first ChildConfigAr filtered by the ArtbConfUsePricCode column
 * @method     ChildConfigAr|null findOneByArtbconfpricdef(string $ArtbConfPricDef) Return the first ChildConfigAr filtered by the ArtbConfPricDef column
 * @method     ChildConfigAr|null findOneByArtbconfusecommcode(string $ArtbConfUseCommCode) Return the first ChildConfigAr filtered by the ArtbConfUseCommCode column
 * @method     ChildConfigAr|null findOneByArtbconfcommdef(string $ArtbConfCommDef) Return the first ChildConfigAr filtered by the ArtbConfCommDef column
 * @method     ChildConfigAr|null findOneByArtbconfcustlabl(string $ArtbConfCustLabl) Return the first ChildConfigAr filtered by the ArtbConfCustLabl column
 * @method     ChildConfigAr|null findOneByArtbconfcustreq(string $ArtbConfCustReq) Return the first ChildConfigAr filtered by the ArtbConfCustReq column
 * @method     ChildConfigAr|null findOneByArtbconfcustdef(string $ArtbConfCustDef) Return the first ChildConfigAr filtered by the ArtbConfCustDef column
 * @method     ChildConfigAr|null findOneByArtbconfshiplabl(string $ArtbConfShipLabl) Return the first ChildConfigAr filtered by the ArtbConfShipLabl column
 * @method     ChildConfigAr|null findOneByArtbconfshipreq(string $ArtbConfShipReq) Return the first ChildConfigAr filtered by the ArtbConfShipReq column
 * @method     ChildConfigAr|null findOneByArtbconfshipdef(string $ArtbConfShipDef) Return the first ChildConfigAr filtered by the ArtbConfShipDef column
 * @method     ChildConfigAr|null findOneByArtbconfuseidlink(string $ArtbConfUseIdLink) Return the first ChildConfigAr filtered by the ArtbConfUseIdLink column
 * @method     ChildConfigAr|null findOneByArtbconfreqdate2(int $ArtbConfReqDate2) Return the first ChildConfigAr filtered by the ArtbConfReqDate2 column
 * @method     ChildConfigAr|null findOneByArtbconfreqdate3(int $ArtbConfReqDate3) Return the first ChildConfigAr filtered by the ArtbConfReqDate3 column
 * @method     ChildConfigAr|null findOneByArtbconfreqdate4(int $ArtbConfReqDate4) Return the first ChildConfigAr filtered by the ArtbConfReqDate4 column
 * @method     ChildConfigAr|null findOneByArtbconfuseweb(string $ArtbConfUseWeb) Return the first ChildConfigAr filtered by the ArtbConfUseWeb column
 * @method     ChildConfigAr|null findOneByArtbconfpayhstoredays(int $ArtbConfPayhStoreDays) Return the first ChildConfigAr filtered by the ArtbConfPayhStoreDays column
 * @method     ChildConfigAr|null findOneByArtbconfbyclerk(string $ArtbConfByClerk) Return the first ChildConfigAr filtered by the ArtbConfByClerk column
 * @method     ChildConfigAr|null findOneByArtbcon2ecrwhse(string $ArtbCon2EcrWhse) Return the first ChildConfigAr filtered by the ArtbCon2EcrWhse column
 * @method     ChildConfigAr|null findOneByArtbconfzerotermdisc(string $ArtbConfZeroTermDisc) Return the first ChildConfigAr filtered by the ArtbConfZeroTermDisc column
 * @method     ChildConfigAr|null findOneByArtbconfuseautocidgen(string $ArtbConfUseAutoCidGen) Return the first ChildConfigAr filtered by the ArtbConfUseAutoCidGen column
 * @method     ChildConfigAr|null findOneByArtbconfprefixlen(int $ArtbConfPrefixLen) Return the first ChildConfigAr filtered by the ArtbConfPrefixLen column
 * @method     ChildConfigAr|null findOneByArtbconfparagecredlast(string $ArtbConfParAgeCredLast) Return the first ChildConfigAr filtered by the ArtbConfParAgeCredLast column
 * @method     ChildConfigAr|null findOneByArtbconfincludecod(string $ArtbConfIncludeCod) Return the first ChildConfigAr filtered by the ArtbConfIncludeCod column
 * @method     ChildConfigAr|null findOneByArtbconfaddlpricdisc(string $ArtbConfAddlPricDisc) Return the first ChildConfigAr filtered by the ArtbConfAddlPricDisc column
 * @method     ChildConfigAr|null findOneByArtbconfapdonoehd(string $ArtbConfApdOnOehd) Return the first ChildConfigAr filtered by the ArtbConfApdOnOehd column
 * @method     ChildConfigAr|null findOneByArtbconfnbrsp(int $ArtbConfNbrSp) Return the first ChildConfigAr filtered by the ArtbConfNbrSp column
 * @method     ChildConfigAr|null findOneByArtbconfforcesplvl(int $ArtbConfForceSpLvl) Return the first ChildConfigAr filtered by the ArtbConfForceSpLvl column
 * @method     ChildConfigAr|null findOneByArtbconfcustgetopt(int $ArtbConfCustGetOpt) Return the first ChildConfigAr filtered by the ArtbConfCustGetOpt column
 * @method     ChildConfigAr|null findOneByArtbconfaddicmnt(string $ArtbConfAddICmnt) Return the first ChildConfigAr filtered by the ArtbConfAddICmnt column
 * @method     ChildConfigAr|null findOneByArtbcon2appaddiscitmpdm(string $ArtbCon2AppAddiscItmPdm) Return the first ChildConfigAr filtered by the ArtbCon2AppAddiscItmPdm column
 * @method     ChildConfigAr|null findOneByArtbcon2rfndselectamt(string $ArtbCon2RfndSelectAmt) Return the first ChildConfigAr filtered by the ArtbCon2RfndSelectAmt column
 * @method     ChildConfigAr|null findOneByArtbcon2rfndglacct(string $ArtbCon2RfndGlAcct) Return the first ChildConfigAr filtered by the ArtbCon2RfndGlAcct column
 * @method     ChildConfigAr|null findOneByArtbcon2rfndapterm(string $ArtbCon2RfndApTerm) Return the first ChildConfigAr filtered by the ArtbCon2RfndApTerm column
 * @method     ChildConfigAr|null findOneByArtbcon2rfndarterm(string $ArtbCon2RfndArTerm) Return the first ChildConfigAr filtered by the ArtbCon2RfndArTerm column
 * @method     ChildConfigAr|null findOneByArtbcon2cwoterm(string $ArtbCon2CwoTerm) Return the first ChildConfigAr filtered by the ArtbCon2CwoTerm column
 * @method     ChildConfigAr|null findOneByArtbcon2ccterm(string $ArtbCon2CcTerm) Return the first ChildConfigAr filtered by the ArtbCon2CcTerm column
 * @method     ChildConfigAr|null findOneByArtbcon2ccsave(string $ArtbCon2CcSave) Return the first ChildConfigAr filtered by the ArtbCon2CcSave column
 * @method     ChildConfigAr|null findOneByArtbcon2ccbatch(string $ArtbCon2CcBatch) Return the first ChildConfigAr filtered by the ArtbCon2CcBatch column
 * @method     ChildConfigAr|null findOneByArtbcon2ccsavedays(int $ArtbCon2CcSaveDays) Return the first ChildConfigAr filtered by the ArtbCon2CcSaveDays column
 * @method     ChildConfigAr|null findOneByArtbcon2aprvdccasdeposit(string $ArtbCon2AprvdCcAsDeposit) Return the first ChildConfigAr filtered by the ArtbCon2AprvdCcAsDeposit column
 * @method     ChildConfigAr|null findOneByArtbcon2cmqtysign(string $ArtbCon2CmQtySign) Return the first ChildConfigAr filtered by the ArtbCon2CmQtySign column
 * @method     ChildConfigAr|null findOneByArtbcon2bolline(int $ArtbCon2BolLine) Return the first ChildConfigAr filtered by the ArtbCon2BolLine column
 * @method     ChildConfigAr|null findOneByArtbcon2bolcols(int $ArtbCon2BolCols) Return the first ChildConfigAr filtered by the ArtbCon2BolCols column
 * @method     ChildConfigAr|null findOneByArtbcon2usesounitwght(string $ArtbCon2UseSoUnitWght) Return the first ChildConfigAr filtered by the ArtbCon2UseSoUnitWght column
 * @method     ChildConfigAr|null findOneByArtbcon2delzbal(string $ArtbCon2DelZbal) Return the first ChildConfigAr filtered by the ArtbCon2DelZbal column
 * @method     ChildConfigAr|null findOneByArtbconfstopcustchg(int $ArtbConfStopCustChg) Return the first ChildConfigAr filtered by the ArtbConfStopCustChg column
 * @method     ChildConfigAr|null findOneByArtbcon2prospecteditcmm(string $ArtbCon2ProspectEditCmm) Return the first ChildConfigAr filtered by the ArtbCon2ProspectEditCmm column
 * @method     ChildConfigAr|null findOneByArtbcon2prospectnotestocmm(string $ArtbCon2ProspectNotesToCmm) Return the first ChildConfigAr filtered by the ArtbCon2ProspectNotesToCmm column
 * @method     ChildConfigAr|null findOneByArtbcon2ctrygetdflt(string $ArtbCon2CtryGetDflt) Return the first ChildConfigAr filtered by the ArtbCon2CtryGetDflt column
 * @method     ChildConfigAr|null findOneByArtbconfrptbywhse(string $ArtbConfRptByWhse) Return the first ChildConfigAr filtered by the ArtbConfRptByWhse column
 * @method     ChildConfigAr|null findOneByArtbconfappendpos(int $ArtbConfAppendPos) Return the first ChildConfigAr filtered by the ArtbConfAppendPos column
 * @method     ChildConfigAr|null findOneByArtbconfincoasstacct(string $ArtbConfIncoAsstAcct) Return the first ChildConfigAr filtered by the ArtbConfIncoAsstAcct column
 * @method     ChildConfigAr|null findOneByArtbconfincoliabacct(string $ArtbConfIncoLiabAcct) Return the first ChildConfigAr filtered by the ArtbConfIncoLiabAcct column
 * @method     ChildConfigAr|null findOneByArtbcon2incoasstacct2(string $ArtbCon2IncoAsstAcct2) Return the first ChildConfigAr filtered by the ArtbCon2IncoAsstAcct2 column
 * @method     ChildConfigAr|null findOneByArtbcon2incoliabacct2(string $ArtbCon2IncoLiabAcct2) Return the first ChildConfigAr filtered by the ArtbCon2IncoLiabAcct2 column
 * @method     ChildConfigAr|null findOneByArtbcon2usesurchg(string $ArtbCon2UseSurchg) Return the first ChildConfigAr filtered by the ArtbCon2UseSurchg column
 * @method     ChildConfigAr|null findOneByArtbcon2surchgitemid(string $ArtbCon2SurchgItemId) Return the first ChildConfigAr filtered by the ArtbCon2SurchgItemId column
 * @method     ChildConfigAr|null findOneByArtbcon2surchgigrupseq(int $ArtbCon2SurchgIgrupSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgIgrupSeq column
 * @method     ChildConfigAr|null findOneByArtbcon2surchgsviaseq(int $ArtbCon2SurchgSviaSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgSviaSeq column
 * @method     ChildConfigAr|null findOneByArtbcon2surchgcstidseq(int $ArtbCon2SurchgCstidSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgCstidSeq column
 * @method     ChildConfigAr|null findOneByArtbcon2surchgcstpcseq(int $ArtbCon2SurchgCstpcSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgCstpcSeq column
 * @method     ChildConfigAr|null findOneByArtbconfzeroinvcline(string $ArtbConfZeroInvcLine) Return the first ChildConfigAr filtered by the ArtbConfZeroInvcLine column
 * @method     ChildConfigAr|null findOneByArtbcon2zeroordrship(string $ArtbCon2ZeroOrdrShip) Return the first ChildConfigAr filtered by the ArtbCon2ZeroOrdrShip column
 * @method     ChildConfigAr|null findOneByArtbcon2zeroordrmess(string $ArtbCon2ZeroOrdrMess) Return the first ChildConfigAr filtered by the ArtbCon2ZeroOrdrMess column
 * @method     ChildConfigAr|null findOneByArtbconfcashacctwhse(string $ArtbConfCashAcctWhse) Return the first ChildConfigAr filtered by the ArtbConfCashAcctWhse column
 * @method     ChildConfigAr|null findOneByArtbcon2mtaxfrtflagorcode(string $ArtbCon2MtaxFrtFlagOrCode) Return the first ChildConfigAr filtered by the ArtbCon2MtaxFrtFlagOrCode column
 * @method     ChildConfigAr|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigAr filtered by the DateUpdtd column
 * @method     ChildConfigAr|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigAr filtered by the TimeUpdtd column
 * @method     ChildConfigAr|null findOneByDummy(string $dummy) Return the first ChildConfigAr filtered by the dummy column
 *
 * @method     ChildConfigAr requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigAr by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOne(?ConnectionInterface $con = null) Return the first ChildConfigAr matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigAr requireOneByArtbconfkey(int $ArtbConfKey) Return the first ChildConfigAr filtered by the ArtbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfglifac(string $ArtbConfGlIfac) Return the first ChildConfigAr filtered by the ArtbConfGlIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfinifac(string $ArtbConfInIfac) Return the first ChildConfigAr filtered by the ArtbConfInIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfpcifac(string $ArtbConfPcIfac) Return the first ChildConfigAr filtered by the ArtbConfPcIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfccifac(string $ArtbConfCcIfac) Return the first ChildConfigAr filtered by the ArtbConfCcIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfinvcustgl(string $ArtbConfInvCustGl) Return the first ChildConfigAr filtered by the ArtbConfInvCustGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconffrtacct(string $ArtbConfFrtAcct) Return the first ChildConfigAr filtered by the ArtbConfFrtAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfmiscacct(string $ArtbConfMiscAcct) Return the first ChildConfigAr filtered by the ArtbConfMiscAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfaracct(string $ArtbConfArAcct) Return the first ChildConfigAr filtered by the ArtbConfArAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcashacct(string $ArtbConfCashAcct) Return the first ChildConfigAr filtered by the ArtbConfCashAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2cccashacct(string $ArtbCon2CcCashAcct) Return the first ChildConfigAr filtered by the ArtbCon2CcCashAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconffincacct(string $ArtbConfFincAcct) Return the first ChildConfigAr filtered by the ArtbConfFincAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfdiscacct(string $ArtbConfDiscAcct) Return the first ChildConfigAr filtered by the ArtbConfDiscAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfrgacogsacct(string $ArtbConfRgaCogsAcct) Return the first ChildConfigAr filtered by the ArtbConfRgaCogsAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcusdacct(string $ArtbConfCusdAcct) Return the first ChildConfigAr filtered by the ArtbConfCusdAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfdpstacct(string $ArtbConfDpstAcct) Return the first ChildConfigAr filtered by the ArtbConfDpstAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfwriteoffacct(string $ArtbConfWriteOffAcct) Return the first ChildConfigAr filtered by the ArtbConfWriteOffAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2presalivtyacct(string $ArtbCon2PresalIvtyAcct) Return the first ChildConfigAr filtered by the ArtbCon2PresalIvtyAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconffincpct(string $ArtbConfFincPct) Return the first ChildConfigAr filtered by the ArtbConfFincPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconffincdays(int $ArtbConfFincDays) Return the first ChildConfigAr filtered by the ArtbConfFincDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconffincminchg(string $ArtbConfFincMinChg) Return the first ChildConfigAr filtered by the ArtbConfFincMinChg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconffincterm(string $ArtbConfFincTerm) Return the first ChildConfigAr filtered by the ArtbConfFincTerm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfover1(int $ArtbConfOver1) Return the first ChildConfigAr filtered by the ArtbConfOver1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfover2(int $ArtbConfOver2) Return the first ChildConfigAr filtered by the ArtbConfOver2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmtline(int $ArtbConfStmtLine) Return the first ChildConfigAr filtered by the ArtbConfStmtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmtcols(int $ArtbConfStmtCols) Return the first ChildConfigAr filtered by the ArtbConfStmtCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmtnotedef(string $ArtbConfStmtNoteDef) Return the first ChildConfigAr filtered by the ArtbConfStmtNoteDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmtnote1(string $ArtbConfStmtNote1) Return the first ChildConfigAr filtered by the ArtbConfStmtNote1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmtnote2(string $ArtbConfStmtNote2) Return the first ChildConfigAr filtered by the ArtbConfStmtNote2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmtnote3(string $ArtbConfStmtNote3) Return the first ChildConfigAr filtered by the ArtbConfStmtNote3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfinvline(int $ArtbConfInvLine) Return the first ChildConfigAr filtered by the ArtbConfInvLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfinvcols(int $ArtbConfInvCols) Return the first ChildConfigAr filtered by the ArtbConfInvCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfinvnotedef(string $ArtbConfInvNoteDef) Return the first ChildConfigAr filtered by the ArtbConfInvNoteDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcustline(int $ArtbConfCustLine) Return the first ChildConfigAr filtered by the ArtbConfCustLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcustcols(int $ArtbConfCustCols) Return the first ChildConfigAr filtered by the ArtbConfCustCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfinvsort(string $ArtbConfInvSort) Return the first ChildConfigAr filtered by the ArtbConfInvSort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfinvnc(string $ArtbConfInvNc) Return the first ChildConfigAr filtered by the ArtbConfInvNc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmtsort(string $ArtbConfStmtSort) Return the first ChildConfigAr filtered by the ArtbConfStmtSort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmt0orless(string $ArtbConfStmt0OrLess) Return the first ChildConfigAr filtered by the ArtbConfStmt0OrLess column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfspdef(string $ArtbConfSpDef) Return the first ChildConfigAr filtered by the ArtbConfSpDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfwhse(string $ArtbConfWhse) Return the first ChildConfigAr filtered by the ArtbConfWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconftypedef(string $ArtbConfTypeDef) Return the first ChildConfigAr filtered by the ArtbConfTypeDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfsviadef(string $ArtbConfSviaDef) Return the first ChildConfigAr filtered by the ArtbConfSviaDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconftermdef(string $ArtbConfTermDef) Return the first ChildConfigAr filtered by the ArtbConfTermDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconftaxdef(string $ArtbConfTaxDef) Return the first ChildConfigAr filtered by the ArtbConfTaxDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstmtdef(string $ArtbConfStmtDef) Return the first ChildConfigAr filtered by the ArtbConfStmtDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfallowbo(string $ArtbConfAllowBo) Return the first ChildConfigAr filtered by the ArtbConfAllowBo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfallowfc(string $ArtbConfAllowFc) Return the first ChildConfigAr filtered by the ArtbConfAllowFc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfusepriccode(string $ArtbConfUsePricCode) Return the first ChildConfigAr filtered by the ArtbConfUsePricCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfpricdef(string $ArtbConfPricDef) Return the first ChildConfigAr filtered by the ArtbConfPricDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfusecommcode(string $ArtbConfUseCommCode) Return the first ChildConfigAr filtered by the ArtbConfUseCommCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcommdef(string $ArtbConfCommDef) Return the first ChildConfigAr filtered by the ArtbConfCommDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcustlabl(string $ArtbConfCustLabl) Return the first ChildConfigAr filtered by the ArtbConfCustLabl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcustreq(string $ArtbConfCustReq) Return the first ChildConfigAr filtered by the ArtbConfCustReq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcustdef(string $ArtbConfCustDef) Return the first ChildConfigAr filtered by the ArtbConfCustDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfshiplabl(string $ArtbConfShipLabl) Return the first ChildConfigAr filtered by the ArtbConfShipLabl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfshipreq(string $ArtbConfShipReq) Return the first ChildConfigAr filtered by the ArtbConfShipReq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfshipdef(string $ArtbConfShipDef) Return the first ChildConfigAr filtered by the ArtbConfShipDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfuseidlink(string $ArtbConfUseIdLink) Return the first ChildConfigAr filtered by the ArtbConfUseIdLink column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfreqdate2(int $ArtbConfReqDate2) Return the first ChildConfigAr filtered by the ArtbConfReqDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfreqdate3(int $ArtbConfReqDate3) Return the first ChildConfigAr filtered by the ArtbConfReqDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfreqdate4(int $ArtbConfReqDate4) Return the first ChildConfigAr filtered by the ArtbConfReqDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfuseweb(string $ArtbConfUseWeb) Return the first ChildConfigAr filtered by the ArtbConfUseWeb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfpayhstoredays(int $ArtbConfPayhStoreDays) Return the first ChildConfigAr filtered by the ArtbConfPayhStoreDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfbyclerk(string $ArtbConfByClerk) Return the first ChildConfigAr filtered by the ArtbConfByClerk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2ecrwhse(string $ArtbCon2EcrWhse) Return the first ChildConfigAr filtered by the ArtbCon2EcrWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfzerotermdisc(string $ArtbConfZeroTermDisc) Return the first ChildConfigAr filtered by the ArtbConfZeroTermDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfuseautocidgen(string $ArtbConfUseAutoCidGen) Return the first ChildConfigAr filtered by the ArtbConfUseAutoCidGen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfprefixlen(int $ArtbConfPrefixLen) Return the first ChildConfigAr filtered by the ArtbConfPrefixLen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfparagecredlast(string $ArtbConfParAgeCredLast) Return the first ChildConfigAr filtered by the ArtbConfParAgeCredLast column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfincludecod(string $ArtbConfIncludeCod) Return the first ChildConfigAr filtered by the ArtbConfIncludeCod column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfaddlpricdisc(string $ArtbConfAddlPricDisc) Return the first ChildConfigAr filtered by the ArtbConfAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfapdonoehd(string $ArtbConfApdOnOehd) Return the first ChildConfigAr filtered by the ArtbConfApdOnOehd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfnbrsp(int $ArtbConfNbrSp) Return the first ChildConfigAr filtered by the ArtbConfNbrSp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfforcesplvl(int $ArtbConfForceSpLvl) Return the first ChildConfigAr filtered by the ArtbConfForceSpLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcustgetopt(int $ArtbConfCustGetOpt) Return the first ChildConfigAr filtered by the ArtbConfCustGetOpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfaddicmnt(string $ArtbConfAddICmnt) Return the first ChildConfigAr filtered by the ArtbConfAddICmnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2appaddiscitmpdm(string $ArtbCon2AppAddiscItmPdm) Return the first ChildConfigAr filtered by the ArtbCon2AppAddiscItmPdm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2rfndselectamt(string $ArtbCon2RfndSelectAmt) Return the first ChildConfigAr filtered by the ArtbCon2RfndSelectAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2rfndglacct(string $ArtbCon2RfndGlAcct) Return the first ChildConfigAr filtered by the ArtbCon2RfndGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2rfndapterm(string $ArtbCon2RfndApTerm) Return the first ChildConfigAr filtered by the ArtbCon2RfndApTerm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2rfndarterm(string $ArtbCon2RfndArTerm) Return the first ChildConfigAr filtered by the ArtbCon2RfndArTerm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2cwoterm(string $ArtbCon2CwoTerm) Return the first ChildConfigAr filtered by the ArtbCon2CwoTerm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2ccterm(string $ArtbCon2CcTerm) Return the first ChildConfigAr filtered by the ArtbCon2CcTerm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2ccsave(string $ArtbCon2CcSave) Return the first ChildConfigAr filtered by the ArtbCon2CcSave column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2ccbatch(string $ArtbCon2CcBatch) Return the first ChildConfigAr filtered by the ArtbCon2CcBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2ccsavedays(int $ArtbCon2CcSaveDays) Return the first ChildConfigAr filtered by the ArtbCon2CcSaveDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2aprvdccasdeposit(string $ArtbCon2AprvdCcAsDeposit) Return the first ChildConfigAr filtered by the ArtbCon2AprvdCcAsDeposit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2cmqtysign(string $ArtbCon2CmQtySign) Return the first ChildConfigAr filtered by the ArtbCon2CmQtySign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2bolline(int $ArtbCon2BolLine) Return the first ChildConfigAr filtered by the ArtbCon2BolLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2bolcols(int $ArtbCon2BolCols) Return the first ChildConfigAr filtered by the ArtbCon2BolCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2usesounitwght(string $ArtbCon2UseSoUnitWght) Return the first ChildConfigAr filtered by the ArtbCon2UseSoUnitWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2delzbal(string $ArtbCon2DelZbal) Return the first ChildConfigAr filtered by the ArtbCon2DelZbal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfstopcustchg(int $ArtbConfStopCustChg) Return the first ChildConfigAr filtered by the ArtbConfStopCustChg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2prospecteditcmm(string $ArtbCon2ProspectEditCmm) Return the first ChildConfigAr filtered by the ArtbCon2ProspectEditCmm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2prospectnotestocmm(string $ArtbCon2ProspectNotesToCmm) Return the first ChildConfigAr filtered by the ArtbCon2ProspectNotesToCmm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2ctrygetdflt(string $ArtbCon2CtryGetDflt) Return the first ChildConfigAr filtered by the ArtbCon2CtryGetDflt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfrptbywhse(string $ArtbConfRptByWhse) Return the first ChildConfigAr filtered by the ArtbConfRptByWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfappendpos(int $ArtbConfAppendPos) Return the first ChildConfigAr filtered by the ArtbConfAppendPos column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfincoasstacct(string $ArtbConfIncoAsstAcct) Return the first ChildConfigAr filtered by the ArtbConfIncoAsstAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfincoliabacct(string $ArtbConfIncoLiabAcct) Return the first ChildConfigAr filtered by the ArtbConfIncoLiabAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2incoasstacct2(string $ArtbCon2IncoAsstAcct2) Return the first ChildConfigAr filtered by the ArtbCon2IncoAsstAcct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2incoliabacct2(string $ArtbCon2IncoLiabAcct2) Return the first ChildConfigAr filtered by the ArtbCon2IncoLiabAcct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2usesurchg(string $ArtbCon2UseSurchg) Return the first ChildConfigAr filtered by the ArtbCon2UseSurchg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2surchgitemid(string $ArtbCon2SurchgItemId) Return the first ChildConfigAr filtered by the ArtbCon2SurchgItemId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2surchgigrupseq(int $ArtbCon2SurchgIgrupSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgIgrupSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2surchgsviaseq(int $ArtbCon2SurchgSviaSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgSviaSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2surchgcstidseq(int $ArtbCon2SurchgCstidSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgCstidSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2surchgcstpcseq(int $ArtbCon2SurchgCstpcSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgCstpcSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfzeroinvcline(string $ArtbConfZeroInvcLine) Return the first ChildConfigAr filtered by the ArtbConfZeroInvcLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2zeroordrship(string $ArtbCon2ZeroOrdrShip) Return the first ChildConfigAr filtered by the ArtbCon2ZeroOrdrShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2zeroordrmess(string $ArtbCon2ZeroOrdrMess) Return the first ChildConfigAr filtered by the ArtbCon2ZeroOrdrMess column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbconfcashacctwhse(string $ArtbConfCashAcctWhse) Return the first ChildConfigAr filtered by the ArtbConfCashAcctWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByArtbcon2mtaxfrtflagorcode(string $ArtbCon2MtaxFrtFlagOrCode) Return the first ChildConfigAr filtered by the ArtbCon2MtaxFrtFlagOrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigAr filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigAr filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOneByDummy(string $dummy) Return the first ChildConfigAr filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigAr[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigAr objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigAr> find(?ConnectionInterface $con = null) Return ChildConfigAr objects based on current ModelCriteria
 *
 * @method     ChildConfigAr[]|Collection findByArtbconfkey(int|array<int> $ArtbConfKey) Return ChildConfigAr objects filtered by the ArtbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfkey(int|array<int> $ArtbConfKey) Return ChildConfigAr objects filtered by the ArtbConfKey column
 * @method     ChildConfigAr[]|Collection findByArtbconfglifac(string|array<string> $ArtbConfGlIfac) Return ChildConfigAr objects filtered by the ArtbConfGlIfac column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfglifac(string|array<string> $ArtbConfGlIfac) Return ChildConfigAr objects filtered by the ArtbConfGlIfac column
 * @method     ChildConfigAr[]|Collection findByArtbconfinifac(string|array<string> $ArtbConfInIfac) Return ChildConfigAr objects filtered by the ArtbConfInIfac column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfinifac(string|array<string> $ArtbConfInIfac) Return ChildConfigAr objects filtered by the ArtbConfInIfac column
 * @method     ChildConfigAr[]|Collection findByArtbconfpcifac(string|array<string> $ArtbConfPcIfac) Return ChildConfigAr objects filtered by the ArtbConfPcIfac column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfpcifac(string|array<string> $ArtbConfPcIfac) Return ChildConfigAr objects filtered by the ArtbConfPcIfac column
 * @method     ChildConfigAr[]|Collection findByArtbconfccifac(string|array<string> $ArtbConfCcIfac) Return ChildConfigAr objects filtered by the ArtbConfCcIfac column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfccifac(string|array<string> $ArtbConfCcIfac) Return ChildConfigAr objects filtered by the ArtbConfCcIfac column
 * @method     ChildConfigAr[]|Collection findByArtbconfinvcustgl(string|array<string> $ArtbConfInvCustGl) Return ChildConfigAr objects filtered by the ArtbConfInvCustGl column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfinvcustgl(string|array<string> $ArtbConfInvCustGl) Return ChildConfigAr objects filtered by the ArtbConfInvCustGl column
 * @method     ChildConfigAr[]|Collection findByArtbconffrtacct(string|array<string> $ArtbConfFrtAcct) Return ChildConfigAr objects filtered by the ArtbConfFrtAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconffrtacct(string|array<string> $ArtbConfFrtAcct) Return ChildConfigAr objects filtered by the ArtbConfFrtAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfmiscacct(string|array<string> $ArtbConfMiscAcct) Return ChildConfigAr objects filtered by the ArtbConfMiscAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfmiscacct(string|array<string> $ArtbConfMiscAcct) Return ChildConfigAr objects filtered by the ArtbConfMiscAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfaracct(string|array<string> $ArtbConfArAcct) Return ChildConfigAr objects filtered by the ArtbConfArAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfaracct(string|array<string> $ArtbConfArAcct) Return ChildConfigAr objects filtered by the ArtbConfArAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfcashacct(string|array<string> $ArtbConfCashAcct) Return ChildConfigAr objects filtered by the ArtbConfCashAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcashacct(string|array<string> $ArtbConfCashAcct) Return ChildConfigAr objects filtered by the ArtbConfCashAcct column
 * @method     ChildConfigAr[]|Collection findByArtbcon2cccashacct(string|array<string> $ArtbCon2CcCashAcct) Return ChildConfigAr objects filtered by the ArtbCon2CcCashAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2cccashacct(string|array<string> $ArtbCon2CcCashAcct) Return ChildConfigAr objects filtered by the ArtbCon2CcCashAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconffincacct(string|array<string> $ArtbConfFincAcct) Return ChildConfigAr objects filtered by the ArtbConfFincAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconffincacct(string|array<string> $ArtbConfFincAcct) Return ChildConfigAr objects filtered by the ArtbConfFincAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfdiscacct(string|array<string> $ArtbConfDiscAcct) Return ChildConfigAr objects filtered by the ArtbConfDiscAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfdiscacct(string|array<string> $ArtbConfDiscAcct) Return ChildConfigAr objects filtered by the ArtbConfDiscAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfrgacogsacct(string|array<string> $ArtbConfRgaCogsAcct) Return ChildConfigAr objects filtered by the ArtbConfRgaCogsAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfrgacogsacct(string|array<string> $ArtbConfRgaCogsAcct) Return ChildConfigAr objects filtered by the ArtbConfRgaCogsAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfcusdacct(string|array<string> $ArtbConfCusdAcct) Return ChildConfigAr objects filtered by the ArtbConfCusdAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcusdacct(string|array<string> $ArtbConfCusdAcct) Return ChildConfigAr objects filtered by the ArtbConfCusdAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfdpstacct(string|array<string> $ArtbConfDpstAcct) Return ChildConfigAr objects filtered by the ArtbConfDpstAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfdpstacct(string|array<string> $ArtbConfDpstAcct) Return ChildConfigAr objects filtered by the ArtbConfDpstAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfwriteoffacct(string|array<string> $ArtbConfWriteOffAcct) Return ChildConfigAr objects filtered by the ArtbConfWriteOffAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfwriteoffacct(string|array<string> $ArtbConfWriteOffAcct) Return ChildConfigAr objects filtered by the ArtbConfWriteOffAcct column
 * @method     ChildConfigAr[]|Collection findByArtbcon2presalivtyacct(string|array<string> $ArtbCon2PresalIvtyAcct) Return ChildConfigAr objects filtered by the ArtbCon2PresalIvtyAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2presalivtyacct(string|array<string> $ArtbCon2PresalIvtyAcct) Return ChildConfigAr objects filtered by the ArtbCon2PresalIvtyAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconffincpct(string|array<string> $ArtbConfFincPct) Return ChildConfigAr objects filtered by the ArtbConfFincPct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconffincpct(string|array<string> $ArtbConfFincPct) Return ChildConfigAr objects filtered by the ArtbConfFincPct column
 * @method     ChildConfigAr[]|Collection findByArtbconffincdays(int|array<int> $ArtbConfFincDays) Return ChildConfigAr objects filtered by the ArtbConfFincDays column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconffincdays(int|array<int> $ArtbConfFincDays) Return ChildConfigAr objects filtered by the ArtbConfFincDays column
 * @method     ChildConfigAr[]|Collection findByArtbconffincminchg(string|array<string> $ArtbConfFincMinChg) Return ChildConfigAr objects filtered by the ArtbConfFincMinChg column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconffincminchg(string|array<string> $ArtbConfFincMinChg) Return ChildConfigAr objects filtered by the ArtbConfFincMinChg column
 * @method     ChildConfigAr[]|Collection findByArtbconffincterm(string|array<string> $ArtbConfFincTerm) Return ChildConfigAr objects filtered by the ArtbConfFincTerm column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconffincterm(string|array<string> $ArtbConfFincTerm) Return ChildConfigAr objects filtered by the ArtbConfFincTerm column
 * @method     ChildConfigAr[]|Collection findByArtbconfover1(int|array<int> $ArtbConfOver1) Return ChildConfigAr objects filtered by the ArtbConfOver1 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfover1(int|array<int> $ArtbConfOver1) Return ChildConfigAr objects filtered by the ArtbConfOver1 column
 * @method     ChildConfigAr[]|Collection findByArtbconfover2(int|array<int> $ArtbConfOver2) Return ChildConfigAr objects filtered by the ArtbConfOver2 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfover2(int|array<int> $ArtbConfOver2) Return ChildConfigAr objects filtered by the ArtbConfOver2 column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmtline(int|array<int> $ArtbConfStmtLine) Return ChildConfigAr objects filtered by the ArtbConfStmtLine column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmtline(int|array<int> $ArtbConfStmtLine) Return ChildConfigAr objects filtered by the ArtbConfStmtLine column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmtcols(int|array<int> $ArtbConfStmtCols) Return ChildConfigAr objects filtered by the ArtbConfStmtCols column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmtcols(int|array<int> $ArtbConfStmtCols) Return ChildConfigAr objects filtered by the ArtbConfStmtCols column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmtnotedef(string|array<string> $ArtbConfStmtNoteDef) Return ChildConfigAr objects filtered by the ArtbConfStmtNoteDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmtnotedef(string|array<string> $ArtbConfStmtNoteDef) Return ChildConfigAr objects filtered by the ArtbConfStmtNoteDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmtnote1(string|array<string> $ArtbConfStmtNote1) Return ChildConfigAr objects filtered by the ArtbConfStmtNote1 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmtnote1(string|array<string> $ArtbConfStmtNote1) Return ChildConfigAr objects filtered by the ArtbConfStmtNote1 column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmtnote2(string|array<string> $ArtbConfStmtNote2) Return ChildConfigAr objects filtered by the ArtbConfStmtNote2 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmtnote2(string|array<string> $ArtbConfStmtNote2) Return ChildConfigAr objects filtered by the ArtbConfStmtNote2 column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmtnote3(string|array<string> $ArtbConfStmtNote3) Return ChildConfigAr objects filtered by the ArtbConfStmtNote3 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmtnote3(string|array<string> $ArtbConfStmtNote3) Return ChildConfigAr objects filtered by the ArtbConfStmtNote3 column
 * @method     ChildConfigAr[]|Collection findByArtbconfinvline(int|array<int> $ArtbConfInvLine) Return ChildConfigAr objects filtered by the ArtbConfInvLine column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfinvline(int|array<int> $ArtbConfInvLine) Return ChildConfigAr objects filtered by the ArtbConfInvLine column
 * @method     ChildConfigAr[]|Collection findByArtbconfinvcols(int|array<int> $ArtbConfInvCols) Return ChildConfigAr objects filtered by the ArtbConfInvCols column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfinvcols(int|array<int> $ArtbConfInvCols) Return ChildConfigAr objects filtered by the ArtbConfInvCols column
 * @method     ChildConfigAr[]|Collection findByArtbconfinvnotedef(string|array<string> $ArtbConfInvNoteDef) Return ChildConfigAr objects filtered by the ArtbConfInvNoteDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfinvnotedef(string|array<string> $ArtbConfInvNoteDef) Return ChildConfigAr objects filtered by the ArtbConfInvNoteDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfcustline(int|array<int> $ArtbConfCustLine) Return ChildConfigAr objects filtered by the ArtbConfCustLine column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcustline(int|array<int> $ArtbConfCustLine) Return ChildConfigAr objects filtered by the ArtbConfCustLine column
 * @method     ChildConfigAr[]|Collection findByArtbconfcustcols(int|array<int> $ArtbConfCustCols) Return ChildConfigAr objects filtered by the ArtbConfCustCols column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcustcols(int|array<int> $ArtbConfCustCols) Return ChildConfigAr objects filtered by the ArtbConfCustCols column
 * @method     ChildConfigAr[]|Collection findByArtbconfinvsort(string|array<string> $ArtbConfInvSort) Return ChildConfigAr objects filtered by the ArtbConfInvSort column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfinvsort(string|array<string> $ArtbConfInvSort) Return ChildConfigAr objects filtered by the ArtbConfInvSort column
 * @method     ChildConfigAr[]|Collection findByArtbconfinvnc(string|array<string> $ArtbConfInvNc) Return ChildConfigAr objects filtered by the ArtbConfInvNc column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfinvnc(string|array<string> $ArtbConfInvNc) Return ChildConfigAr objects filtered by the ArtbConfInvNc column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmtsort(string|array<string> $ArtbConfStmtSort) Return ChildConfigAr objects filtered by the ArtbConfStmtSort column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmtsort(string|array<string> $ArtbConfStmtSort) Return ChildConfigAr objects filtered by the ArtbConfStmtSort column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmt0orless(string|array<string> $ArtbConfStmt0OrLess) Return ChildConfigAr objects filtered by the ArtbConfStmt0OrLess column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmt0orless(string|array<string> $ArtbConfStmt0OrLess) Return ChildConfigAr objects filtered by the ArtbConfStmt0OrLess column
 * @method     ChildConfigAr[]|Collection findByArtbconfspdef(string|array<string> $ArtbConfSpDef) Return ChildConfigAr objects filtered by the ArtbConfSpDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfspdef(string|array<string> $ArtbConfSpDef) Return ChildConfigAr objects filtered by the ArtbConfSpDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfwhse(string|array<string> $ArtbConfWhse) Return ChildConfigAr objects filtered by the ArtbConfWhse column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfwhse(string|array<string> $ArtbConfWhse) Return ChildConfigAr objects filtered by the ArtbConfWhse column
 * @method     ChildConfigAr[]|Collection findByArtbconftypedef(string|array<string> $ArtbConfTypeDef) Return ChildConfigAr objects filtered by the ArtbConfTypeDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconftypedef(string|array<string> $ArtbConfTypeDef) Return ChildConfigAr objects filtered by the ArtbConfTypeDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfsviadef(string|array<string> $ArtbConfSviaDef) Return ChildConfigAr objects filtered by the ArtbConfSviaDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfsviadef(string|array<string> $ArtbConfSviaDef) Return ChildConfigAr objects filtered by the ArtbConfSviaDef column
 * @method     ChildConfigAr[]|Collection findByArtbconftermdef(string|array<string> $ArtbConfTermDef) Return ChildConfigAr objects filtered by the ArtbConfTermDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconftermdef(string|array<string> $ArtbConfTermDef) Return ChildConfigAr objects filtered by the ArtbConfTermDef column
 * @method     ChildConfigAr[]|Collection findByArtbconftaxdef(string|array<string> $ArtbConfTaxDef) Return ChildConfigAr objects filtered by the ArtbConfTaxDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconftaxdef(string|array<string> $ArtbConfTaxDef) Return ChildConfigAr objects filtered by the ArtbConfTaxDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfstmtdef(string|array<string> $ArtbConfStmtDef) Return ChildConfigAr objects filtered by the ArtbConfStmtDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstmtdef(string|array<string> $ArtbConfStmtDef) Return ChildConfigAr objects filtered by the ArtbConfStmtDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfallowbo(string|array<string> $ArtbConfAllowBo) Return ChildConfigAr objects filtered by the ArtbConfAllowBo column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfallowbo(string|array<string> $ArtbConfAllowBo) Return ChildConfigAr objects filtered by the ArtbConfAllowBo column
 * @method     ChildConfigAr[]|Collection findByArtbconfallowfc(string|array<string> $ArtbConfAllowFc) Return ChildConfigAr objects filtered by the ArtbConfAllowFc column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfallowfc(string|array<string> $ArtbConfAllowFc) Return ChildConfigAr objects filtered by the ArtbConfAllowFc column
 * @method     ChildConfigAr[]|Collection findByArtbconfusepriccode(string|array<string> $ArtbConfUsePricCode) Return ChildConfigAr objects filtered by the ArtbConfUsePricCode column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfusepriccode(string|array<string> $ArtbConfUsePricCode) Return ChildConfigAr objects filtered by the ArtbConfUsePricCode column
 * @method     ChildConfigAr[]|Collection findByArtbconfpricdef(string|array<string> $ArtbConfPricDef) Return ChildConfigAr objects filtered by the ArtbConfPricDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfpricdef(string|array<string> $ArtbConfPricDef) Return ChildConfigAr objects filtered by the ArtbConfPricDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfusecommcode(string|array<string> $ArtbConfUseCommCode) Return ChildConfigAr objects filtered by the ArtbConfUseCommCode column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfusecommcode(string|array<string> $ArtbConfUseCommCode) Return ChildConfigAr objects filtered by the ArtbConfUseCommCode column
 * @method     ChildConfigAr[]|Collection findByArtbconfcommdef(string|array<string> $ArtbConfCommDef) Return ChildConfigAr objects filtered by the ArtbConfCommDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcommdef(string|array<string> $ArtbConfCommDef) Return ChildConfigAr objects filtered by the ArtbConfCommDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfcustlabl(string|array<string> $ArtbConfCustLabl) Return ChildConfigAr objects filtered by the ArtbConfCustLabl column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcustlabl(string|array<string> $ArtbConfCustLabl) Return ChildConfigAr objects filtered by the ArtbConfCustLabl column
 * @method     ChildConfigAr[]|Collection findByArtbconfcustreq(string|array<string> $ArtbConfCustReq) Return ChildConfigAr objects filtered by the ArtbConfCustReq column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcustreq(string|array<string> $ArtbConfCustReq) Return ChildConfigAr objects filtered by the ArtbConfCustReq column
 * @method     ChildConfigAr[]|Collection findByArtbconfcustdef(string|array<string> $ArtbConfCustDef) Return ChildConfigAr objects filtered by the ArtbConfCustDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcustdef(string|array<string> $ArtbConfCustDef) Return ChildConfigAr objects filtered by the ArtbConfCustDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfshiplabl(string|array<string> $ArtbConfShipLabl) Return ChildConfigAr objects filtered by the ArtbConfShipLabl column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfshiplabl(string|array<string> $ArtbConfShipLabl) Return ChildConfigAr objects filtered by the ArtbConfShipLabl column
 * @method     ChildConfigAr[]|Collection findByArtbconfshipreq(string|array<string> $ArtbConfShipReq) Return ChildConfigAr objects filtered by the ArtbConfShipReq column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfshipreq(string|array<string> $ArtbConfShipReq) Return ChildConfigAr objects filtered by the ArtbConfShipReq column
 * @method     ChildConfigAr[]|Collection findByArtbconfshipdef(string|array<string> $ArtbConfShipDef) Return ChildConfigAr objects filtered by the ArtbConfShipDef column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfshipdef(string|array<string> $ArtbConfShipDef) Return ChildConfigAr objects filtered by the ArtbConfShipDef column
 * @method     ChildConfigAr[]|Collection findByArtbconfuseidlink(string|array<string> $ArtbConfUseIdLink) Return ChildConfigAr objects filtered by the ArtbConfUseIdLink column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfuseidlink(string|array<string> $ArtbConfUseIdLink) Return ChildConfigAr objects filtered by the ArtbConfUseIdLink column
 * @method     ChildConfigAr[]|Collection findByArtbconfreqdate2(int|array<int> $ArtbConfReqDate2) Return ChildConfigAr objects filtered by the ArtbConfReqDate2 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfreqdate2(int|array<int> $ArtbConfReqDate2) Return ChildConfigAr objects filtered by the ArtbConfReqDate2 column
 * @method     ChildConfigAr[]|Collection findByArtbconfreqdate3(int|array<int> $ArtbConfReqDate3) Return ChildConfigAr objects filtered by the ArtbConfReqDate3 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfreqdate3(int|array<int> $ArtbConfReqDate3) Return ChildConfigAr objects filtered by the ArtbConfReqDate3 column
 * @method     ChildConfigAr[]|Collection findByArtbconfreqdate4(int|array<int> $ArtbConfReqDate4) Return ChildConfigAr objects filtered by the ArtbConfReqDate4 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfreqdate4(int|array<int> $ArtbConfReqDate4) Return ChildConfigAr objects filtered by the ArtbConfReqDate4 column
 * @method     ChildConfigAr[]|Collection findByArtbconfuseweb(string|array<string> $ArtbConfUseWeb) Return ChildConfigAr objects filtered by the ArtbConfUseWeb column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfuseweb(string|array<string> $ArtbConfUseWeb) Return ChildConfigAr objects filtered by the ArtbConfUseWeb column
 * @method     ChildConfigAr[]|Collection findByArtbconfpayhstoredays(int|array<int> $ArtbConfPayhStoreDays) Return ChildConfigAr objects filtered by the ArtbConfPayhStoreDays column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfpayhstoredays(int|array<int> $ArtbConfPayhStoreDays) Return ChildConfigAr objects filtered by the ArtbConfPayhStoreDays column
 * @method     ChildConfigAr[]|Collection findByArtbconfbyclerk(string|array<string> $ArtbConfByClerk) Return ChildConfigAr objects filtered by the ArtbConfByClerk column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfbyclerk(string|array<string> $ArtbConfByClerk) Return ChildConfigAr objects filtered by the ArtbConfByClerk column
 * @method     ChildConfigAr[]|Collection findByArtbcon2ecrwhse(string|array<string> $ArtbCon2EcrWhse) Return ChildConfigAr objects filtered by the ArtbCon2EcrWhse column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2ecrwhse(string|array<string> $ArtbCon2EcrWhse) Return ChildConfigAr objects filtered by the ArtbCon2EcrWhse column
 * @method     ChildConfigAr[]|Collection findByArtbconfzerotermdisc(string|array<string> $ArtbConfZeroTermDisc) Return ChildConfigAr objects filtered by the ArtbConfZeroTermDisc column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfzerotermdisc(string|array<string> $ArtbConfZeroTermDisc) Return ChildConfigAr objects filtered by the ArtbConfZeroTermDisc column
 * @method     ChildConfigAr[]|Collection findByArtbconfuseautocidgen(string|array<string> $ArtbConfUseAutoCidGen) Return ChildConfigAr objects filtered by the ArtbConfUseAutoCidGen column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfuseautocidgen(string|array<string> $ArtbConfUseAutoCidGen) Return ChildConfigAr objects filtered by the ArtbConfUseAutoCidGen column
 * @method     ChildConfigAr[]|Collection findByArtbconfprefixlen(int|array<int> $ArtbConfPrefixLen) Return ChildConfigAr objects filtered by the ArtbConfPrefixLen column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfprefixlen(int|array<int> $ArtbConfPrefixLen) Return ChildConfigAr objects filtered by the ArtbConfPrefixLen column
 * @method     ChildConfigAr[]|Collection findByArtbconfparagecredlast(string|array<string> $ArtbConfParAgeCredLast) Return ChildConfigAr objects filtered by the ArtbConfParAgeCredLast column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfparagecredlast(string|array<string> $ArtbConfParAgeCredLast) Return ChildConfigAr objects filtered by the ArtbConfParAgeCredLast column
 * @method     ChildConfigAr[]|Collection findByArtbconfincludecod(string|array<string> $ArtbConfIncludeCod) Return ChildConfigAr objects filtered by the ArtbConfIncludeCod column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfincludecod(string|array<string> $ArtbConfIncludeCod) Return ChildConfigAr objects filtered by the ArtbConfIncludeCod column
 * @method     ChildConfigAr[]|Collection findByArtbconfaddlpricdisc(string|array<string> $ArtbConfAddlPricDisc) Return ChildConfigAr objects filtered by the ArtbConfAddlPricDisc column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfaddlpricdisc(string|array<string> $ArtbConfAddlPricDisc) Return ChildConfigAr objects filtered by the ArtbConfAddlPricDisc column
 * @method     ChildConfigAr[]|Collection findByArtbconfapdonoehd(string|array<string> $ArtbConfApdOnOehd) Return ChildConfigAr objects filtered by the ArtbConfApdOnOehd column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfapdonoehd(string|array<string> $ArtbConfApdOnOehd) Return ChildConfigAr objects filtered by the ArtbConfApdOnOehd column
 * @method     ChildConfigAr[]|Collection findByArtbconfnbrsp(int|array<int> $ArtbConfNbrSp) Return ChildConfigAr objects filtered by the ArtbConfNbrSp column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfnbrsp(int|array<int> $ArtbConfNbrSp) Return ChildConfigAr objects filtered by the ArtbConfNbrSp column
 * @method     ChildConfigAr[]|Collection findByArtbconfforcesplvl(int|array<int> $ArtbConfForceSpLvl) Return ChildConfigAr objects filtered by the ArtbConfForceSpLvl column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfforcesplvl(int|array<int> $ArtbConfForceSpLvl) Return ChildConfigAr objects filtered by the ArtbConfForceSpLvl column
 * @method     ChildConfigAr[]|Collection findByArtbconfcustgetopt(int|array<int> $ArtbConfCustGetOpt) Return ChildConfigAr objects filtered by the ArtbConfCustGetOpt column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcustgetopt(int|array<int> $ArtbConfCustGetOpt) Return ChildConfigAr objects filtered by the ArtbConfCustGetOpt column
 * @method     ChildConfigAr[]|Collection findByArtbconfaddicmnt(string|array<string> $ArtbConfAddICmnt) Return ChildConfigAr objects filtered by the ArtbConfAddICmnt column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfaddicmnt(string|array<string> $ArtbConfAddICmnt) Return ChildConfigAr objects filtered by the ArtbConfAddICmnt column
 * @method     ChildConfigAr[]|Collection findByArtbcon2appaddiscitmpdm(string|array<string> $ArtbCon2AppAddiscItmPdm) Return ChildConfigAr objects filtered by the ArtbCon2AppAddiscItmPdm column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2appaddiscitmpdm(string|array<string> $ArtbCon2AppAddiscItmPdm) Return ChildConfigAr objects filtered by the ArtbCon2AppAddiscItmPdm column
 * @method     ChildConfigAr[]|Collection findByArtbcon2rfndselectamt(string|array<string> $ArtbCon2RfndSelectAmt) Return ChildConfigAr objects filtered by the ArtbCon2RfndSelectAmt column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2rfndselectamt(string|array<string> $ArtbCon2RfndSelectAmt) Return ChildConfigAr objects filtered by the ArtbCon2RfndSelectAmt column
 * @method     ChildConfigAr[]|Collection findByArtbcon2rfndglacct(string|array<string> $ArtbCon2RfndGlAcct) Return ChildConfigAr objects filtered by the ArtbCon2RfndGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2rfndglacct(string|array<string> $ArtbCon2RfndGlAcct) Return ChildConfigAr objects filtered by the ArtbCon2RfndGlAcct column
 * @method     ChildConfigAr[]|Collection findByArtbcon2rfndapterm(string|array<string> $ArtbCon2RfndApTerm) Return ChildConfigAr objects filtered by the ArtbCon2RfndApTerm column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2rfndapterm(string|array<string> $ArtbCon2RfndApTerm) Return ChildConfigAr objects filtered by the ArtbCon2RfndApTerm column
 * @method     ChildConfigAr[]|Collection findByArtbcon2rfndarterm(string|array<string> $ArtbCon2RfndArTerm) Return ChildConfigAr objects filtered by the ArtbCon2RfndArTerm column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2rfndarterm(string|array<string> $ArtbCon2RfndArTerm) Return ChildConfigAr objects filtered by the ArtbCon2RfndArTerm column
 * @method     ChildConfigAr[]|Collection findByArtbcon2cwoterm(string|array<string> $ArtbCon2CwoTerm) Return ChildConfigAr objects filtered by the ArtbCon2CwoTerm column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2cwoterm(string|array<string> $ArtbCon2CwoTerm) Return ChildConfigAr objects filtered by the ArtbCon2CwoTerm column
 * @method     ChildConfigAr[]|Collection findByArtbcon2ccterm(string|array<string> $ArtbCon2CcTerm) Return ChildConfigAr objects filtered by the ArtbCon2CcTerm column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2ccterm(string|array<string> $ArtbCon2CcTerm) Return ChildConfigAr objects filtered by the ArtbCon2CcTerm column
 * @method     ChildConfigAr[]|Collection findByArtbcon2ccsave(string|array<string> $ArtbCon2CcSave) Return ChildConfigAr objects filtered by the ArtbCon2CcSave column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2ccsave(string|array<string> $ArtbCon2CcSave) Return ChildConfigAr objects filtered by the ArtbCon2CcSave column
 * @method     ChildConfigAr[]|Collection findByArtbcon2ccbatch(string|array<string> $ArtbCon2CcBatch) Return ChildConfigAr objects filtered by the ArtbCon2CcBatch column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2ccbatch(string|array<string> $ArtbCon2CcBatch) Return ChildConfigAr objects filtered by the ArtbCon2CcBatch column
 * @method     ChildConfigAr[]|Collection findByArtbcon2ccsavedays(int|array<int> $ArtbCon2CcSaveDays) Return ChildConfigAr objects filtered by the ArtbCon2CcSaveDays column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2ccsavedays(int|array<int> $ArtbCon2CcSaveDays) Return ChildConfigAr objects filtered by the ArtbCon2CcSaveDays column
 * @method     ChildConfigAr[]|Collection findByArtbcon2aprvdccasdeposit(string|array<string> $ArtbCon2AprvdCcAsDeposit) Return ChildConfigAr objects filtered by the ArtbCon2AprvdCcAsDeposit column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2aprvdccasdeposit(string|array<string> $ArtbCon2AprvdCcAsDeposit) Return ChildConfigAr objects filtered by the ArtbCon2AprvdCcAsDeposit column
 * @method     ChildConfigAr[]|Collection findByArtbcon2cmqtysign(string|array<string> $ArtbCon2CmQtySign) Return ChildConfigAr objects filtered by the ArtbCon2CmQtySign column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2cmqtysign(string|array<string> $ArtbCon2CmQtySign) Return ChildConfigAr objects filtered by the ArtbCon2CmQtySign column
 * @method     ChildConfigAr[]|Collection findByArtbcon2bolline(int|array<int> $ArtbCon2BolLine) Return ChildConfigAr objects filtered by the ArtbCon2BolLine column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2bolline(int|array<int> $ArtbCon2BolLine) Return ChildConfigAr objects filtered by the ArtbCon2BolLine column
 * @method     ChildConfigAr[]|Collection findByArtbcon2bolcols(int|array<int> $ArtbCon2BolCols) Return ChildConfigAr objects filtered by the ArtbCon2BolCols column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2bolcols(int|array<int> $ArtbCon2BolCols) Return ChildConfigAr objects filtered by the ArtbCon2BolCols column
 * @method     ChildConfigAr[]|Collection findByArtbcon2usesounitwght(string|array<string> $ArtbCon2UseSoUnitWght) Return ChildConfigAr objects filtered by the ArtbCon2UseSoUnitWght column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2usesounitwght(string|array<string> $ArtbCon2UseSoUnitWght) Return ChildConfigAr objects filtered by the ArtbCon2UseSoUnitWght column
 * @method     ChildConfigAr[]|Collection findByArtbcon2delzbal(string|array<string> $ArtbCon2DelZbal) Return ChildConfigAr objects filtered by the ArtbCon2DelZbal column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2delzbal(string|array<string> $ArtbCon2DelZbal) Return ChildConfigAr objects filtered by the ArtbCon2DelZbal column
 * @method     ChildConfigAr[]|Collection findByArtbconfstopcustchg(int|array<int> $ArtbConfStopCustChg) Return ChildConfigAr objects filtered by the ArtbConfStopCustChg column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfstopcustchg(int|array<int> $ArtbConfStopCustChg) Return ChildConfigAr objects filtered by the ArtbConfStopCustChg column
 * @method     ChildConfigAr[]|Collection findByArtbcon2prospecteditcmm(string|array<string> $ArtbCon2ProspectEditCmm) Return ChildConfigAr objects filtered by the ArtbCon2ProspectEditCmm column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2prospecteditcmm(string|array<string> $ArtbCon2ProspectEditCmm) Return ChildConfigAr objects filtered by the ArtbCon2ProspectEditCmm column
 * @method     ChildConfigAr[]|Collection findByArtbcon2prospectnotestocmm(string|array<string> $ArtbCon2ProspectNotesToCmm) Return ChildConfigAr objects filtered by the ArtbCon2ProspectNotesToCmm column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2prospectnotestocmm(string|array<string> $ArtbCon2ProspectNotesToCmm) Return ChildConfigAr objects filtered by the ArtbCon2ProspectNotesToCmm column
 * @method     ChildConfigAr[]|Collection findByArtbcon2ctrygetdflt(string|array<string> $ArtbCon2CtryGetDflt) Return ChildConfigAr objects filtered by the ArtbCon2CtryGetDflt column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2ctrygetdflt(string|array<string> $ArtbCon2CtryGetDflt) Return ChildConfigAr objects filtered by the ArtbCon2CtryGetDflt column
 * @method     ChildConfigAr[]|Collection findByArtbconfrptbywhse(string|array<string> $ArtbConfRptByWhse) Return ChildConfigAr objects filtered by the ArtbConfRptByWhse column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfrptbywhse(string|array<string> $ArtbConfRptByWhse) Return ChildConfigAr objects filtered by the ArtbConfRptByWhse column
 * @method     ChildConfigAr[]|Collection findByArtbconfappendpos(int|array<int> $ArtbConfAppendPos) Return ChildConfigAr objects filtered by the ArtbConfAppendPos column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfappendpos(int|array<int> $ArtbConfAppendPos) Return ChildConfigAr objects filtered by the ArtbConfAppendPos column
 * @method     ChildConfigAr[]|Collection findByArtbconfincoasstacct(string|array<string> $ArtbConfIncoAsstAcct) Return ChildConfigAr objects filtered by the ArtbConfIncoAsstAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfincoasstacct(string|array<string> $ArtbConfIncoAsstAcct) Return ChildConfigAr objects filtered by the ArtbConfIncoAsstAcct column
 * @method     ChildConfigAr[]|Collection findByArtbconfincoliabacct(string|array<string> $ArtbConfIncoLiabAcct) Return ChildConfigAr objects filtered by the ArtbConfIncoLiabAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfincoliabacct(string|array<string> $ArtbConfIncoLiabAcct) Return ChildConfigAr objects filtered by the ArtbConfIncoLiabAcct column
 * @method     ChildConfigAr[]|Collection findByArtbcon2incoasstacct2(string|array<string> $ArtbCon2IncoAsstAcct2) Return ChildConfigAr objects filtered by the ArtbCon2IncoAsstAcct2 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2incoasstacct2(string|array<string> $ArtbCon2IncoAsstAcct2) Return ChildConfigAr objects filtered by the ArtbCon2IncoAsstAcct2 column
 * @method     ChildConfigAr[]|Collection findByArtbcon2incoliabacct2(string|array<string> $ArtbCon2IncoLiabAcct2) Return ChildConfigAr objects filtered by the ArtbCon2IncoLiabAcct2 column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2incoliabacct2(string|array<string> $ArtbCon2IncoLiabAcct2) Return ChildConfigAr objects filtered by the ArtbCon2IncoLiabAcct2 column
 * @method     ChildConfigAr[]|Collection findByArtbcon2usesurchg(string|array<string> $ArtbCon2UseSurchg) Return ChildConfigAr objects filtered by the ArtbCon2UseSurchg column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2usesurchg(string|array<string> $ArtbCon2UseSurchg) Return ChildConfigAr objects filtered by the ArtbCon2UseSurchg column
 * @method     ChildConfigAr[]|Collection findByArtbcon2surchgitemid(string|array<string> $ArtbCon2SurchgItemId) Return ChildConfigAr objects filtered by the ArtbCon2SurchgItemId column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2surchgitemid(string|array<string> $ArtbCon2SurchgItemId) Return ChildConfigAr objects filtered by the ArtbCon2SurchgItemId column
 * @method     ChildConfigAr[]|Collection findByArtbcon2surchgigrupseq(int|array<int> $ArtbCon2SurchgIgrupSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgIgrupSeq column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2surchgigrupseq(int|array<int> $ArtbCon2SurchgIgrupSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgIgrupSeq column
 * @method     ChildConfigAr[]|Collection findByArtbcon2surchgsviaseq(int|array<int> $ArtbCon2SurchgSviaSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgSviaSeq column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2surchgsviaseq(int|array<int> $ArtbCon2SurchgSviaSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgSviaSeq column
 * @method     ChildConfigAr[]|Collection findByArtbcon2surchgcstidseq(int|array<int> $ArtbCon2SurchgCstidSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgCstidSeq column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2surchgcstidseq(int|array<int> $ArtbCon2SurchgCstidSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgCstidSeq column
 * @method     ChildConfigAr[]|Collection findByArtbcon2surchgcstpcseq(int|array<int> $ArtbCon2SurchgCstpcSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgCstpcSeq column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2surchgcstpcseq(int|array<int> $ArtbCon2SurchgCstpcSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgCstpcSeq column
 * @method     ChildConfigAr[]|Collection findByArtbconfzeroinvcline(string|array<string> $ArtbConfZeroInvcLine) Return ChildConfigAr objects filtered by the ArtbConfZeroInvcLine column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfzeroinvcline(string|array<string> $ArtbConfZeroInvcLine) Return ChildConfigAr objects filtered by the ArtbConfZeroInvcLine column
 * @method     ChildConfigAr[]|Collection findByArtbcon2zeroordrship(string|array<string> $ArtbCon2ZeroOrdrShip) Return ChildConfigAr objects filtered by the ArtbCon2ZeroOrdrShip column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2zeroordrship(string|array<string> $ArtbCon2ZeroOrdrShip) Return ChildConfigAr objects filtered by the ArtbCon2ZeroOrdrShip column
 * @method     ChildConfigAr[]|Collection findByArtbcon2zeroordrmess(string|array<string> $ArtbCon2ZeroOrdrMess) Return ChildConfigAr objects filtered by the ArtbCon2ZeroOrdrMess column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2zeroordrmess(string|array<string> $ArtbCon2ZeroOrdrMess) Return ChildConfigAr objects filtered by the ArtbCon2ZeroOrdrMess column
 * @method     ChildConfigAr[]|Collection findByArtbconfcashacctwhse(string|array<string> $ArtbConfCashAcctWhse) Return ChildConfigAr objects filtered by the ArtbConfCashAcctWhse column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbconfcashacctwhse(string|array<string> $ArtbConfCashAcctWhse) Return ChildConfigAr objects filtered by the ArtbConfCashAcctWhse column
 * @method     ChildConfigAr[]|Collection findByArtbcon2mtaxfrtflagorcode(string|array<string> $ArtbCon2MtaxFrtFlagOrCode) Return ChildConfigAr objects filtered by the ArtbCon2MtaxFrtFlagOrCode column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByArtbcon2mtaxfrtflagorcode(string|array<string> $ArtbCon2MtaxFrtFlagOrCode) Return ChildConfigAr objects filtered by the ArtbCon2MtaxFrtFlagOrCode column
 * @method     ChildConfigAr[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigAr objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigAr objects filtered by the DateUpdtd column
 * @method     ChildConfigAr[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigAr objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigAr objects filtered by the TimeUpdtd column
 * @method     ChildConfigAr[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigAr objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigAr> findByDummy(string|array<string> $dummy) Return ChildConfigAr objects filtered by the dummy column
 *
 * @method     ChildConfigAr[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigAr> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigArQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigArQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigAr', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigArQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigArQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildConfigArQuery) {
            return $criteria;
        }
        $query = new ChildConfigArQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildConfigAr|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigArTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigArTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildConfigAr A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbConfKey, ArtbConfGlIfac, ArtbConfInIfac, ArtbConfPcIfac, ArtbConfCcIfac, ArtbConfInvCustGl, ArtbConfFrtAcct, ArtbConfMiscAcct, ArtbConfArAcct, ArtbConfCashAcct, ArtbCon2CcCashAcct, ArtbConfFincAcct, ArtbConfDiscAcct, ArtbConfRgaCogsAcct, ArtbConfCusdAcct, ArtbConfDpstAcct, ArtbConfWriteOffAcct, ArtbCon2PresalIvtyAcct, ArtbConfFincPct, ArtbConfFincDays, ArtbConfFincMinChg, ArtbConfFincTerm, ArtbConfOver1, ArtbConfOver2, ArtbConfStmtLine, ArtbConfStmtCols, ArtbConfStmtNoteDef, ArtbConfStmtNote1, ArtbConfStmtNote2, ArtbConfStmtNote3, ArtbConfInvLine, ArtbConfInvCols, ArtbConfInvNoteDef, ArtbConfCustLine, ArtbConfCustCols, ArtbConfInvSort, ArtbConfInvNc, ArtbConfStmtSort, ArtbConfStmt0OrLess, ArtbConfSpDef, ArtbConfWhse, ArtbConfTypeDef, ArtbConfSviaDef, ArtbConfTermDef, ArtbConfTaxDef, ArtbConfStmtDef, ArtbConfAllowBo, ArtbConfAllowFc, ArtbConfUsePricCode, ArtbConfPricDef, ArtbConfUseCommCode, ArtbConfCommDef, ArtbConfCustLabl, ArtbConfCustReq, ArtbConfCustDef, ArtbConfShipLabl, ArtbConfShipReq, ArtbConfShipDef, ArtbConfUseIdLink, ArtbConfReqDate2, ArtbConfReqDate3, ArtbConfReqDate4, ArtbConfUseWeb, ArtbConfPayhStoreDays, ArtbConfByClerk, ArtbCon2EcrWhse, ArtbConfZeroTermDisc, ArtbConfUseAutoCidGen, ArtbConfPrefixLen, ArtbConfParAgeCredLast, ArtbConfIncludeCod, ArtbConfAddlPricDisc, ArtbConfApdOnOehd, ArtbConfNbrSp, ArtbConfForceSpLvl, ArtbConfCustGetOpt, ArtbConfAddICmnt, ArtbCon2AppAddiscItmPdm, ArtbCon2RfndSelectAmt, ArtbCon2RfndGlAcct, ArtbCon2RfndApTerm, ArtbCon2RfndArTerm, ArtbCon2CwoTerm, ArtbCon2CcTerm, ArtbCon2CcSave, ArtbCon2CcBatch, ArtbCon2CcSaveDays, ArtbCon2AprvdCcAsDeposit, ArtbCon2CmQtySign, ArtbCon2BolLine, ArtbCon2BolCols, ArtbCon2UseSoUnitWght, ArtbCon2DelZbal, ArtbConfStopCustChg, ArtbCon2ProspectEditCmm, ArtbCon2ProspectNotesToCmm, ArtbCon2CtryGetDflt, ArtbConfRptByWhse, ArtbConfAppendPos, ArtbConfIncoAsstAcct, ArtbConfIncoLiabAcct, ArtbCon2IncoAsstAcct2, ArtbCon2IncoLiabAcct2, ArtbCon2UseSurchg, ArtbCon2SurchgItemId, ArtbCon2SurchgIgrupSeq, ArtbCon2SurchgSviaSeq, ArtbCon2SurchgCstidSeq, ArtbCon2SurchgCstpcSeq, ArtbConfZeroInvcLine, ArtbCon2ZeroOrdrShip, ArtbCon2ZeroOrdrMess, ArtbConfCashAcctWhse, ArtbCon2MtaxFrtFlagOrCode, DateUpdtd, TimeUpdtd, dummy FROM ar_config WHERE ArtbConfKey = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildConfigAr $obj */
            $obj = new ChildConfigAr();
            $obj->hydrate($row);
            ConfigArTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildConfigAr|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $key, Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfkey(1234); // WHERE ArtbConfKey = 1234
     * $query->filterByArtbconfkey(array(12, 34)); // WHERE ArtbConfKey IN (12, 34)
     * $query->filterByArtbconfkey(array('min' => 12)); // WHERE ArtbConfKey > 12
     * </code>
     *
     * @param mixed $artbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfkey($artbconfkey = null, ?string $comparison = null)
    {
        if (is_array($artbconfkey)) {
            $useMinMax = false;
            if (isset($artbconfkey['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $artbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfkey['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $artbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $artbconfkey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfGlIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfglifac('fooValue');   // WHERE ArtbConfGlIfac = 'fooValue'
     * $query->filterByArtbconfglifac('%fooValue%', Criteria::LIKE); // WHERE ArtbConfGlIfac LIKE '%fooValue%'
     * $query->filterByArtbconfglifac(['foo', 'bar']); // WHERE ArtbConfGlIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfglifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfglifac($artbconfglifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfglifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFGLIFAC, $artbconfglifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfInIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinifac('fooValue');   // WHERE ArtbConfInIfac = 'fooValue'
     * $query->filterByArtbconfinifac('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInIfac LIKE '%fooValue%'
     * $query->filterByArtbconfinifac(['foo', 'bar']); // WHERE ArtbConfInIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfinifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfinifac($artbconfinifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINIFAC, $artbconfinifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfPcIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfpcifac('fooValue');   // WHERE ArtbConfPcIfac = 'fooValue'
     * $query->filterByArtbconfpcifac('%fooValue%', Criteria::LIKE); // WHERE ArtbConfPcIfac LIKE '%fooValue%'
     * $query->filterByArtbconfpcifac(['foo', 'bar']); // WHERE ArtbConfPcIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfpcifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfpcifac($artbconfpcifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfpcifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPCIFAC, $artbconfpcifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCcIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfccifac('fooValue');   // WHERE ArtbConfCcIfac = 'fooValue'
     * $query->filterByArtbconfccifac('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCcIfac LIKE '%fooValue%'
     * $query->filterByArtbconfccifac(['foo', 'bar']); // WHERE ArtbConfCcIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfccifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfccifac($artbconfccifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfccifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCCIFAC, $artbconfccifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfInvCustGl column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvcustgl('fooValue');   // WHERE ArtbConfInvCustGl = 'fooValue'
     * $query->filterByArtbconfinvcustgl('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInvCustGl LIKE '%fooValue%'
     * $query->filterByArtbconfinvcustgl(['foo', 'bar']); // WHERE ArtbConfInvCustGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfinvcustgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfinvcustgl($artbconfinvcustgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinvcustgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVCUSTGL, $artbconfinvcustgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfFrtAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffrtacct('fooValue');   // WHERE ArtbConfFrtAcct = 'fooValue'
     * $query->filterByArtbconffrtacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfFrtAcct LIKE '%fooValue%'
     * $query->filterByArtbconffrtacct(['foo', 'bar']); // WHERE ArtbConfFrtAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconffrtacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconffrtacct($artbconffrtacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconffrtacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFRTACCT, $artbconffrtacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfMiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfmiscacct('fooValue');   // WHERE ArtbConfMiscAcct = 'fooValue'
     * $query->filterByArtbconfmiscacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfMiscAcct LIKE '%fooValue%'
     * $query->filterByArtbconfmiscacct(['foo', 'bar']); // WHERE ArtbConfMiscAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfmiscacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfmiscacct($artbconfmiscacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfmiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFMISCACCT, $artbconfmiscacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfArAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfaracct('fooValue');   // WHERE ArtbConfArAcct = 'fooValue'
     * $query->filterByArtbconfaracct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfArAcct LIKE '%fooValue%'
     * $query->filterByArtbconfaracct(['foo', 'bar']); // WHERE ArtbConfArAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfaracct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfaracct($artbconfaracct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfaracct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFARACCT, $artbconfaracct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcashacct('fooValue');   // WHERE ArtbConfCashAcct = 'fooValue'
     * $query->filterByArtbconfcashacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCashAcct LIKE '%fooValue%'
     * $query->filterByArtbconfcashacct(['foo', 'bar']); // WHERE ArtbConfCashAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfcashacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcashacct($artbconfcashacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcashacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCASHACCT, $artbconfcashacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2CcCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2cccashacct('fooValue');   // WHERE ArtbCon2CcCashAcct = 'fooValue'
     * $query->filterByArtbcon2cccashacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CcCashAcct LIKE '%fooValue%'
     * $query->filterByArtbcon2cccashacct(['foo', 'bar']); // WHERE ArtbCon2CcCashAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2cccashacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2cccashacct($artbcon2cccashacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2cccashacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCCASHACCT, $artbcon2cccashacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfFincAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffincacct('fooValue');   // WHERE ArtbConfFincAcct = 'fooValue'
     * $query->filterByArtbconffincacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfFincAcct LIKE '%fooValue%'
     * $query->filterByArtbconffincacct(['foo', 'bar']); // WHERE ArtbConfFincAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconffincacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconffincacct($artbconffincacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconffincacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCACCT, $artbconffincacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfDiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfdiscacct('fooValue');   // WHERE ArtbConfDiscAcct = 'fooValue'
     * $query->filterByArtbconfdiscacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfDiscAcct LIKE '%fooValue%'
     * $query->filterByArtbconfdiscacct(['foo', 'bar']); // WHERE ArtbConfDiscAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfdiscacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfdiscacct($artbconfdiscacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfdiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFDISCACCT, $artbconfdiscacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfRgaCogsAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfrgacogsacct('fooValue');   // WHERE ArtbConfRgaCogsAcct = 'fooValue'
     * $query->filterByArtbconfrgacogsacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfRgaCogsAcct LIKE '%fooValue%'
     * $query->filterByArtbconfrgacogsacct(['foo', 'bar']); // WHERE ArtbConfRgaCogsAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfrgacogsacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfrgacogsacct($artbconfrgacogsacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfrgacogsacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFRGACOGSACCT, $artbconfrgacogsacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCusdAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcusdacct('fooValue');   // WHERE ArtbConfCusdAcct = 'fooValue'
     * $query->filterByArtbconfcusdacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCusdAcct LIKE '%fooValue%'
     * $query->filterByArtbconfcusdacct(['foo', 'bar']); // WHERE ArtbConfCusdAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfcusdacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcusdacct($artbconfcusdacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcusdacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSDACCT, $artbconfcusdacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfDpstAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfdpstacct('fooValue');   // WHERE ArtbConfDpstAcct = 'fooValue'
     * $query->filterByArtbconfdpstacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfDpstAcct LIKE '%fooValue%'
     * $query->filterByArtbconfdpstacct(['foo', 'bar']); // WHERE ArtbConfDpstAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfdpstacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfdpstacct($artbconfdpstacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfdpstacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFDPSTACCT, $artbconfdpstacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfWriteOffAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfwriteoffacct('fooValue');   // WHERE ArtbConfWriteOffAcct = 'fooValue'
     * $query->filterByArtbconfwriteoffacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfWriteOffAcct LIKE '%fooValue%'
     * $query->filterByArtbconfwriteoffacct(['foo', 'bar']); // WHERE ArtbConfWriteOffAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfwriteoffacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfwriteoffacct($artbconfwriteoffacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfwriteoffacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT, $artbconfwriteoffacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2PresalIvtyAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2presalivtyacct('fooValue');   // WHERE ArtbCon2PresalIvtyAcct = 'fooValue'
     * $query->filterByArtbcon2presalivtyacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2PresalIvtyAcct LIKE '%fooValue%'
     * $query->filterByArtbcon2presalivtyacct(['foo', 'bar']); // WHERE ArtbCon2PresalIvtyAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2presalivtyacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2presalivtyacct($artbcon2presalivtyacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2presalivtyacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT, $artbcon2presalivtyacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfFincPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffincpct(1234); // WHERE ArtbConfFincPct = 1234
     * $query->filterByArtbconffincpct(array(12, 34)); // WHERE ArtbConfFincPct IN (12, 34)
     * $query->filterByArtbconffincpct(array('min' => 12)); // WHERE ArtbConfFincPct > 12
     * </code>
     *
     * @param mixed $artbconffincpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconffincpct($artbconffincpct = null, ?string $comparison = null)
    {
        if (is_array($artbconffincpct)) {
            $useMinMax = false;
            if (isset($artbconffincpct['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCPCT, $artbconffincpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconffincpct['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCPCT, $artbconffincpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCPCT, $artbconffincpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfFincDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffincdays(1234); // WHERE ArtbConfFincDays = 1234
     * $query->filterByArtbconffincdays(array(12, 34)); // WHERE ArtbConfFincDays IN (12, 34)
     * $query->filterByArtbconffincdays(array('min' => 12)); // WHERE ArtbConfFincDays > 12
     * </code>
     *
     * @param mixed $artbconffincdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconffincdays($artbconffincdays = null, ?string $comparison = null)
    {
        if (is_array($artbconffincdays)) {
            $useMinMax = false;
            if (isset($artbconffincdays['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCDAYS, $artbconffincdays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconffincdays['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCDAYS, $artbconffincdays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCDAYS, $artbconffincdays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfFincMinChg column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffincminchg(1234); // WHERE ArtbConfFincMinChg = 1234
     * $query->filterByArtbconffincminchg(array(12, 34)); // WHERE ArtbConfFincMinChg IN (12, 34)
     * $query->filterByArtbconffincminchg(array('min' => 12)); // WHERE ArtbConfFincMinChg > 12
     * </code>
     *
     * @param mixed $artbconffincminchg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconffincminchg($artbconffincminchg = null, ?string $comparison = null)
    {
        if (is_array($artbconffincminchg)) {
            $useMinMax = false;
            if (isset($artbconffincminchg['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCMINCHG, $artbconffincminchg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconffincminchg['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCMINCHG, $artbconffincminchg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCMINCHG, $artbconffincminchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfFincTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffincterm('fooValue');   // WHERE ArtbConfFincTerm = 'fooValue'
     * $query->filterByArtbconffincterm('%fooValue%', Criteria::LIKE); // WHERE ArtbConfFincTerm LIKE '%fooValue%'
     * $query->filterByArtbconffincterm(['foo', 'bar']); // WHERE ArtbConfFincTerm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconffincterm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconffincterm($artbconffincterm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconffincterm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCTERM, $artbconffincterm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfOver1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfover1(1234); // WHERE ArtbConfOver1 = 1234
     * $query->filterByArtbconfover1(array(12, 34)); // WHERE ArtbConfOver1 IN (12, 34)
     * $query->filterByArtbconfover1(array('min' => 12)); // WHERE ArtbConfOver1 > 12
     * </code>
     *
     * @param mixed $artbconfover1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfover1($artbconfover1 = null, ?string $comparison = null)
    {
        if (is_array($artbconfover1)) {
            $useMinMax = false;
            if (isset($artbconfover1['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFOVER1, $artbconfover1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfover1['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFOVER1, $artbconfover1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFOVER1, $artbconfover1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfOver2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfover2(1234); // WHERE ArtbConfOver2 = 1234
     * $query->filterByArtbconfover2(array(12, 34)); // WHERE ArtbConfOver2 IN (12, 34)
     * $query->filterByArtbconfover2(array('min' => 12)); // WHERE ArtbConfOver2 > 12
     * </code>
     *
     * @param mixed $artbconfover2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfover2($artbconfover2 = null, ?string $comparison = null)
    {
        if (is_array($artbconfover2)) {
            $useMinMax = false;
            if (isset($artbconfover2['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFOVER2, $artbconfover2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfover2['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFOVER2, $artbconfover2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFOVER2, $artbconfover2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtline(1234); // WHERE ArtbConfStmtLine = 1234
     * $query->filterByArtbconfstmtline(array(12, 34)); // WHERE ArtbConfStmtLine IN (12, 34)
     * $query->filterByArtbconfstmtline(array('min' => 12)); // WHERE ArtbConfStmtLine > 12
     * </code>
     *
     * @param mixed $artbconfstmtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmtline($artbconfstmtline = null, ?string $comparison = null)
    {
        if (is_array($artbconfstmtline)) {
            $useMinMax = false;
            if (isset($artbconfstmtline['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTLINE, $artbconfstmtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfstmtline['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTLINE, $artbconfstmtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTLINE, $artbconfstmtline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmtCols column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtcols(1234); // WHERE ArtbConfStmtCols = 1234
     * $query->filterByArtbconfstmtcols(array(12, 34)); // WHERE ArtbConfStmtCols IN (12, 34)
     * $query->filterByArtbconfstmtcols(array('min' => 12)); // WHERE ArtbConfStmtCols > 12
     * </code>
     *
     * @param mixed $artbconfstmtcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmtcols($artbconfstmtcols = null, ?string $comparison = null)
    {
        if (is_array($artbconfstmtcols)) {
            $useMinMax = false;
            if (isset($artbconfstmtcols['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTCOLS, $artbconfstmtcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfstmtcols['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTCOLS, $artbconfstmtcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTCOLS, $artbconfstmtcols, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmtNoteDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtnotedef('fooValue');   // WHERE ArtbConfStmtNoteDef = 'fooValue'
     * $query->filterByArtbconfstmtnotedef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtNoteDef LIKE '%fooValue%'
     * $query->filterByArtbconfstmtnotedef(['foo', 'bar']); // WHERE ArtbConfStmtNoteDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfstmtnotedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmtnotedef($artbconfstmtnotedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtnotedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF, $artbconfstmtnotedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmtNote1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtnote1('fooValue');   // WHERE ArtbConfStmtNote1 = 'fooValue'
     * $query->filterByArtbconfstmtnote1('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtNote1 LIKE '%fooValue%'
     * $query->filterByArtbconfstmtnote1(['foo', 'bar']); // WHERE ArtbConfStmtNote1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfstmtnote1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmtnote1($artbconfstmtnote1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtnote1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTNOTE1, $artbconfstmtnote1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmtNote2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtnote2('fooValue');   // WHERE ArtbConfStmtNote2 = 'fooValue'
     * $query->filterByArtbconfstmtnote2('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtNote2 LIKE '%fooValue%'
     * $query->filterByArtbconfstmtnote2(['foo', 'bar']); // WHERE ArtbConfStmtNote2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfstmtnote2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmtnote2($artbconfstmtnote2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtnote2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTNOTE2, $artbconfstmtnote2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmtNote3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtnote3('fooValue');   // WHERE ArtbConfStmtNote3 = 'fooValue'
     * $query->filterByArtbconfstmtnote3('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtNote3 LIKE '%fooValue%'
     * $query->filterByArtbconfstmtnote3(['foo', 'bar']); // WHERE ArtbConfStmtNote3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfstmtnote3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmtnote3($artbconfstmtnote3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtnote3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTNOTE3, $artbconfstmtnote3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfInvLine column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvline(1234); // WHERE ArtbConfInvLine = 1234
     * $query->filterByArtbconfinvline(array(12, 34)); // WHERE ArtbConfInvLine IN (12, 34)
     * $query->filterByArtbconfinvline(array('min' => 12)); // WHERE ArtbConfInvLine > 12
     * </code>
     *
     * @param mixed $artbconfinvline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfinvline($artbconfinvline = null, ?string $comparison = null)
    {
        if (is_array($artbconfinvline)) {
            $useMinMax = false;
            if (isset($artbconfinvline['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVLINE, $artbconfinvline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfinvline['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVLINE, $artbconfinvline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVLINE, $artbconfinvline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfInvCols column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvcols(1234); // WHERE ArtbConfInvCols = 1234
     * $query->filterByArtbconfinvcols(array(12, 34)); // WHERE ArtbConfInvCols IN (12, 34)
     * $query->filterByArtbconfinvcols(array('min' => 12)); // WHERE ArtbConfInvCols > 12
     * </code>
     *
     * @param mixed $artbconfinvcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfinvcols($artbconfinvcols = null, ?string $comparison = null)
    {
        if (is_array($artbconfinvcols)) {
            $useMinMax = false;
            if (isset($artbconfinvcols['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVCOLS, $artbconfinvcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfinvcols['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVCOLS, $artbconfinvcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVCOLS, $artbconfinvcols, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfInvNoteDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvnotedef('fooValue');   // WHERE ArtbConfInvNoteDef = 'fooValue'
     * $query->filterByArtbconfinvnotedef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInvNoteDef LIKE '%fooValue%'
     * $query->filterByArtbconfinvnotedef(['foo', 'bar']); // WHERE ArtbConfInvNoteDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfinvnotedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfinvnotedef($artbconfinvnotedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinvnotedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVNOTEDEF, $artbconfinvnotedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCustLine column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustline(1234); // WHERE ArtbConfCustLine = 1234
     * $query->filterByArtbconfcustline(array(12, 34)); // WHERE ArtbConfCustLine IN (12, 34)
     * $query->filterByArtbconfcustline(array('min' => 12)); // WHERE ArtbConfCustLine > 12
     * </code>
     *
     * @param mixed $artbconfcustline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcustline($artbconfcustline = null, ?string $comparison = null)
    {
        if (is_array($artbconfcustline)) {
            $useMinMax = false;
            if (isset($artbconfcustline['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTLINE, $artbconfcustline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfcustline['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTLINE, $artbconfcustline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTLINE, $artbconfcustline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCustCols column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustcols(1234); // WHERE ArtbConfCustCols = 1234
     * $query->filterByArtbconfcustcols(array(12, 34)); // WHERE ArtbConfCustCols IN (12, 34)
     * $query->filterByArtbconfcustcols(array('min' => 12)); // WHERE ArtbConfCustCols > 12
     * </code>
     *
     * @param mixed $artbconfcustcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcustcols($artbconfcustcols = null, ?string $comparison = null)
    {
        if (is_array($artbconfcustcols)) {
            $useMinMax = false;
            if (isset($artbconfcustcols['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTCOLS, $artbconfcustcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfcustcols['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTCOLS, $artbconfcustcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTCOLS, $artbconfcustcols, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfInvSort column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvsort('fooValue');   // WHERE ArtbConfInvSort = 'fooValue'
     * $query->filterByArtbconfinvsort('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInvSort LIKE '%fooValue%'
     * $query->filterByArtbconfinvsort(['foo', 'bar']); // WHERE ArtbConfInvSort IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfinvsort The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfinvsort($artbconfinvsort = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinvsort)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVSORT, $artbconfinvsort, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfInvNc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvnc('fooValue');   // WHERE ArtbConfInvNc = 'fooValue'
     * $query->filterByArtbconfinvnc('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInvNc LIKE '%fooValue%'
     * $query->filterByArtbconfinvnc(['foo', 'bar']); // WHERE ArtbConfInvNc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfinvnc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfinvnc($artbconfinvnc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinvnc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVNC, $artbconfinvnc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmtSort column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtsort('fooValue');   // WHERE ArtbConfStmtSort = 'fooValue'
     * $query->filterByArtbconfstmtsort('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtSort LIKE '%fooValue%'
     * $query->filterByArtbconfstmtsort(['foo', 'bar']); // WHERE ArtbConfStmtSort IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfstmtsort The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmtsort($artbconfstmtsort = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtsort)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTSORT, $artbconfstmtsort, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmt0OrLess column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmt0orless('fooValue');   // WHERE ArtbConfStmt0OrLess = 'fooValue'
     * $query->filterByArtbconfstmt0orless('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmt0OrLess LIKE '%fooValue%'
     * $query->filterByArtbconfstmt0orless(['foo', 'bar']); // WHERE ArtbConfStmt0OrLess IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfstmt0orless The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmt0orless($artbconfstmt0orless = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmt0orless)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS, $artbconfstmt0orless, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfSpDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfspdef('fooValue');   // WHERE ArtbConfSpDef = 'fooValue'
     * $query->filterByArtbconfspdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfSpDef LIKE '%fooValue%'
     * $query->filterByArtbconfspdef(['foo', 'bar']); // WHERE ArtbConfSpDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfspdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfspdef($artbconfspdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfspdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSPDEF, $artbconfspdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfwhse('fooValue');   // WHERE ArtbConfWhse = 'fooValue'
     * $query->filterByArtbconfwhse('%fooValue%', Criteria::LIKE); // WHERE ArtbConfWhse LIKE '%fooValue%'
     * $query->filterByArtbconfwhse(['foo', 'bar']); // WHERE ArtbConfWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfwhse($artbconfwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFWHSE, $artbconfwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfTypeDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconftypedef('fooValue');   // WHERE ArtbConfTypeDef = 'fooValue'
     * $query->filterByArtbconftypedef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfTypeDef LIKE '%fooValue%'
     * $query->filterByArtbconftypedef(['foo', 'bar']); // WHERE ArtbConfTypeDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconftypedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconftypedef($artbconftypedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconftypedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFTYPEDEF, $artbconftypedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfSviaDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfsviadef('fooValue');   // WHERE ArtbConfSviaDef = 'fooValue'
     * $query->filterByArtbconfsviadef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfSviaDef LIKE '%fooValue%'
     * $query->filterByArtbconfsviadef(['foo', 'bar']); // WHERE ArtbConfSviaDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfsviadef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfsviadef($artbconfsviadef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfsviadef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSVIADEF, $artbconfsviadef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfTermDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconftermdef('fooValue');   // WHERE ArtbConfTermDef = 'fooValue'
     * $query->filterByArtbconftermdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfTermDef LIKE '%fooValue%'
     * $query->filterByArtbconftermdef(['foo', 'bar']); // WHERE ArtbConfTermDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconftermdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconftermdef($artbconftermdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconftermdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFTERMDEF, $artbconftermdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfTaxDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconftaxdef('fooValue');   // WHERE ArtbConfTaxDef = 'fooValue'
     * $query->filterByArtbconftaxdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfTaxDef LIKE '%fooValue%'
     * $query->filterByArtbconftaxdef(['foo', 'bar']); // WHERE ArtbConfTaxDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconftaxdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconftaxdef($artbconftaxdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconftaxdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFTAXDEF, $artbconftaxdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStmtDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtdef('fooValue');   // WHERE ArtbConfStmtDef = 'fooValue'
     * $query->filterByArtbconfstmtdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtDef LIKE '%fooValue%'
     * $query->filterByArtbconfstmtdef(['foo', 'bar']); // WHERE ArtbConfStmtDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfstmtdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstmtdef($artbconfstmtdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTDEF, $artbconfstmtdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfAllowBo column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfallowbo('fooValue');   // WHERE ArtbConfAllowBo = 'fooValue'
     * $query->filterByArtbconfallowbo('%fooValue%', Criteria::LIKE); // WHERE ArtbConfAllowBo LIKE '%fooValue%'
     * $query->filterByArtbconfallowbo(['foo', 'bar']); // WHERE ArtbConfAllowBo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfallowbo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfallowbo($artbconfallowbo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfallowbo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFALLOWBO, $artbconfallowbo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfAllowFc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfallowfc('fooValue');   // WHERE ArtbConfAllowFc = 'fooValue'
     * $query->filterByArtbconfallowfc('%fooValue%', Criteria::LIKE); // WHERE ArtbConfAllowFc LIKE '%fooValue%'
     * $query->filterByArtbconfallowfc(['foo', 'bar']); // WHERE ArtbConfAllowFc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfallowfc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfallowfc($artbconfallowfc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfallowfc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFALLOWFC, $artbconfallowfc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfUsePricCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfusepriccode('fooValue');   // WHERE ArtbConfUsePricCode = 'fooValue'
     * $query->filterByArtbconfusepriccode('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUsePricCode LIKE '%fooValue%'
     * $query->filterByArtbconfusepriccode(['foo', 'bar']); // WHERE ArtbConfUsePricCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfusepriccode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfusepriccode($artbconfusepriccode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfusepriccode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSEPRICCODE, $artbconfusepriccode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfPricDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfpricdef('fooValue');   // WHERE ArtbConfPricDef = 'fooValue'
     * $query->filterByArtbconfpricdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfPricDef LIKE '%fooValue%'
     * $query->filterByArtbconfpricdef(['foo', 'bar']); // WHERE ArtbConfPricDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfpricdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfpricdef($artbconfpricdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfpricdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPRICDEF, $artbconfpricdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfUseCommCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfusecommcode('fooValue');   // WHERE ArtbConfUseCommCode = 'fooValue'
     * $query->filterByArtbconfusecommcode('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUseCommCode LIKE '%fooValue%'
     * $query->filterByArtbconfusecommcode(['foo', 'bar']); // WHERE ArtbConfUseCommCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfusecommcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfusecommcode($artbconfusecommcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfusecommcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSECOMMCODE, $artbconfusecommcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCommDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcommdef('fooValue');   // WHERE ArtbConfCommDef = 'fooValue'
     * $query->filterByArtbconfcommdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCommDef LIKE '%fooValue%'
     * $query->filterByArtbconfcommdef(['foo', 'bar']); // WHERE ArtbConfCommDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfcommdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcommdef($artbconfcommdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcommdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCOMMDEF, $artbconfcommdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCustLabl column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustlabl('fooValue');   // WHERE ArtbConfCustLabl = 'fooValue'
     * $query->filterByArtbconfcustlabl('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCustLabl LIKE '%fooValue%'
     * $query->filterByArtbconfcustlabl(['foo', 'bar']); // WHERE ArtbConfCustLabl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfcustlabl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcustlabl($artbconfcustlabl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcustlabl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTLABL, $artbconfcustlabl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCustReq column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustreq('fooValue');   // WHERE ArtbConfCustReq = 'fooValue'
     * $query->filterByArtbconfcustreq('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCustReq LIKE '%fooValue%'
     * $query->filterByArtbconfcustreq(['foo', 'bar']); // WHERE ArtbConfCustReq IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfcustreq The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcustreq($artbconfcustreq = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcustreq)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTREQ, $artbconfcustreq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCustDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustdef('fooValue');   // WHERE ArtbConfCustDef = 'fooValue'
     * $query->filterByArtbconfcustdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCustDef LIKE '%fooValue%'
     * $query->filterByArtbconfcustdef(['foo', 'bar']); // WHERE ArtbConfCustDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfcustdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcustdef($artbconfcustdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcustdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTDEF, $artbconfcustdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfShipLabl column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfshiplabl('fooValue');   // WHERE ArtbConfShipLabl = 'fooValue'
     * $query->filterByArtbconfshiplabl('%fooValue%', Criteria::LIKE); // WHERE ArtbConfShipLabl LIKE '%fooValue%'
     * $query->filterByArtbconfshiplabl(['foo', 'bar']); // WHERE ArtbConfShipLabl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfshiplabl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfshiplabl($artbconfshiplabl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfshiplabl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSHIPLABL, $artbconfshiplabl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfShipReq column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfshipreq('fooValue');   // WHERE ArtbConfShipReq = 'fooValue'
     * $query->filterByArtbconfshipreq('%fooValue%', Criteria::LIKE); // WHERE ArtbConfShipReq LIKE '%fooValue%'
     * $query->filterByArtbconfshipreq(['foo', 'bar']); // WHERE ArtbConfShipReq IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfshipreq The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfshipreq($artbconfshipreq = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfshipreq)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSHIPREQ, $artbconfshipreq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfShipDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfshipdef('fooValue');   // WHERE ArtbConfShipDef = 'fooValue'
     * $query->filterByArtbconfshipdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfShipDef LIKE '%fooValue%'
     * $query->filterByArtbconfshipdef(['foo', 'bar']); // WHERE ArtbConfShipDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfshipdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfshipdef($artbconfshipdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfshipdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSHIPDEF, $artbconfshipdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfUseIdLink column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfuseidlink('fooValue');   // WHERE ArtbConfUseIdLink = 'fooValue'
     * $query->filterByArtbconfuseidlink('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUseIdLink LIKE '%fooValue%'
     * $query->filterByArtbconfuseidlink(['foo', 'bar']); // WHERE ArtbConfUseIdLink IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfuseidlink The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfuseidlink($artbconfuseidlink = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfuseidlink)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSEIDLINK, $artbconfuseidlink, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfReqDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfreqdate2(1234); // WHERE ArtbConfReqDate2 = 1234
     * $query->filterByArtbconfreqdate2(array(12, 34)); // WHERE ArtbConfReqDate2 IN (12, 34)
     * $query->filterByArtbconfreqdate2(array('min' => 12)); // WHERE ArtbConfReqDate2 > 12
     * </code>
     *
     * @param mixed $artbconfreqdate2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfreqdate2($artbconfreqdate2 = null, ?string $comparison = null)
    {
        if (is_array($artbconfreqdate2)) {
            $useMinMax = false;
            if (isset($artbconfreqdate2['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE2, $artbconfreqdate2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfreqdate2['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE2, $artbconfreqdate2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE2, $artbconfreqdate2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfReqDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfreqdate3(1234); // WHERE ArtbConfReqDate3 = 1234
     * $query->filterByArtbconfreqdate3(array(12, 34)); // WHERE ArtbConfReqDate3 IN (12, 34)
     * $query->filterByArtbconfreqdate3(array('min' => 12)); // WHERE ArtbConfReqDate3 > 12
     * </code>
     *
     * @param mixed $artbconfreqdate3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfreqdate3($artbconfreqdate3 = null, ?string $comparison = null)
    {
        if (is_array($artbconfreqdate3)) {
            $useMinMax = false;
            if (isset($artbconfreqdate3['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE3, $artbconfreqdate3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfreqdate3['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE3, $artbconfreqdate3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE3, $artbconfreqdate3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfReqDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfreqdate4(1234); // WHERE ArtbConfReqDate4 = 1234
     * $query->filterByArtbconfreqdate4(array(12, 34)); // WHERE ArtbConfReqDate4 IN (12, 34)
     * $query->filterByArtbconfreqdate4(array('min' => 12)); // WHERE ArtbConfReqDate4 > 12
     * </code>
     *
     * @param mixed $artbconfreqdate4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfreqdate4($artbconfreqdate4 = null, ?string $comparison = null)
    {
        if (is_array($artbconfreqdate4)) {
            $useMinMax = false;
            if (isset($artbconfreqdate4['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE4, $artbconfreqdate4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfreqdate4['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE4, $artbconfreqdate4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE4, $artbconfreqdate4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfUseWeb column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfuseweb('fooValue');   // WHERE ArtbConfUseWeb = 'fooValue'
     * $query->filterByArtbconfuseweb('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUseWeb LIKE '%fooValue%'
     * $query->filterByArtbconfuseweb(['foo', 'bar']); // WHERE ArtbConfUseWeb IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfuseweb The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfuseweb($artbconfuseweb = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfuseweb)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSEWEB, $artbconfuseweb, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfPayhStoreDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfpayhstoredays(1234); // WHERE ArtbConfPayhStoreDays = 1234
     * $query->filterByArtbconfpayhstoredays(array(12, 34)); // WHERE ArtbConfPayhStoreDays IN (12, 34)
     * $query->filterByArtbconfpayhstoredays(array('min' => 12)); // WHERE ArtbConfPayhStoreDays > 12
     * </code>
     *
     * @param mixed $artbconfpayhstoredays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfpayhstoredays($artbconfpayhstoredays = null, ?string $comparison = null)
    {
        if (is_array($artbconfpayhstoredays)) {
            $useMinMax = false;
            if (isset($artbconfpayhstoredays['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS, $artbconfpayhstoredays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfpayhstoredays['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS, $artbconfpayhstoredays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS, $artbconfpayhstoredays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfByClerk column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfbyclerk('fooValue');   // WHERE ArtbConfByClerk = 'fooValue'
     * $query->filterByArtbconfbyclerk('%fooValue%', Criteria::LIKE); // WHERE ArtbConfByClerk LIKE '%fooValue%'
     * $query->filterByArtbconfbyclerk(['foo', 'bar']); // WHERE ArtbConfByClerk IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfbyclerk The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfbyclerk($artbconfbyclerk = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfbyclerk)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFBYCLERK, $artbconfbyclerk, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2EcrWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ecrwhse('fooValue');   // WHERE ArtbCon2EcrWhse = 'fooValue'
     * $query->filterByArtbcon2ecrwhse('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2EcrWhse LIKE '%fooValue%'
     * $query->filterByArtbcon2ecrwhse(['foo', 'bar']); // WHERE ArtbCon2EcrWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2ecrwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2ecrwhse($artbcon2ecrwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ecrwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2ECRWHSE, $artbcon2ecrwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfZeroTermDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfzerotermdisc('fooValue');   // WHERE ArtbConfZeroTermDisc = 'fooValue'
     * $query->filterByArtbconfzerotermdisc('%fooValue%', Criteria::LIKE); // WHERE ArtbConfZeroTermDisc LIKE '%fooValue%'
     * $query->filterByArtbconfzerotermdisc(['foo', 'bar']); // WHERE ArtbConfZeroTermDisc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfzerotermdisc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfzerotermdisc($artbconfzerotermdisc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfzerotermdisc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFZEROTERMDISC, $artbconfzerotermdisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfUseAutoCidGen column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfuseautocidgen('fooValue');   // WHERE ArtbConfUseAutoCidGen = 'fooValue'
     * $query->filterByArtbconfuseautocidgen('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUseAutoCidGen LIKE '%fooValue%'
     * $query->filterByArtbconfuseautocidgen(['foo', 'bar']); // WHERE ArtbConfUseAutoCidGen IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfuseautocidgen The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfuseautocidgen($artbconfuseautocidgen = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfuseautocidgen)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN, $artbconfuseautocidgen, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfPrefixLen column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfprefixlen(1234); // WHERE ArtbConfPrefixLen = 1234
     * $query->filterByArtbconfprefixlen(array(12, 34)); // WHERE ArtbConfPrefixLen IN (12, 34)
     * $query->filterByArtbconfprefixlen(array('min' => 12)); // WHERE ArtbConfPrefixLen > 12
     * </code>
     *
     * @param mixed $artbconfprefixlen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfprefixlen($artbconfprefixlen = null, ?string $comparison = null)
    {
        if (is_array($artbconfprefixlen)) {
            $useMinMax = false;
            if (isset($artbconfprefixlen['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPREFIXLEN, $artbconfprefixlen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfprefixlen['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPREFIXLEN, $artbconfprefixlen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPREFIXLEN, $artbconfprefixlen, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfParAgeCredLast column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfparagecredlast('fooValue');   // WHERE ArtbConfParAgeCredLast = 'fooValue'
     * $query->filterByArtbconfparagecredlast('%fooValue%', Criteria::LIKE); // WHERE ArtbConfParAgeCredLast LIKE '%fooValue%'
     * $query->filterByArtbconfparagecredlast(['foo', 'bar']); // WHERE ArtbConfParAgeCredLast IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfparagecredlast The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfparagecredlast($artbconfparagecredlast = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfparagecredlast)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST, $artbconfparagecredlast, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfIncludeCod column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfincludecod('fooValue');   // WHERE ArtbConfIncludeCod = 'fooValue'
     * $query->filterByArtbconfincludecod('%fooValue%', Criteria::LIKE); // WHERE ArtbConfIncludeCod LIKE '%fooValue%'
     * $query->filterByArtbconfincludecod(['foo', 'bar']); // WHERE ArtbConfIncludeCod IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfincludecod The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfincludecod($artbconfincludecod = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfincludecod)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINCLUDECOD, $artbconfincludecod, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfAddlPricDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfaddlpricdisc('fooValue');   // WHERE ArtbConfAddlPricDisc = 'fooValue'
     * $query->filterByArtbconfaddlpricdisc('%fooValue%', Criteria::LIKE); // WHERE ArtbConfAddlPricDisc LIKE '%fooValue%'
     * $query->filterByArtbconfaddlpricdisc(['foo', 'bar']); // WHERE ArtbConfAddlPricDisc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfaddlpricdisc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfaddlpricdisc($artbconfaddlpricdisc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfaddlpricdisc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFADDLPRICDISC, $artbconfaddlpricdisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfApdOnOehd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfapdonoehd('fooValue');   // WHERE ArtbConfApdOnOehd = 'fooValue'
     * $query->filterByArtbconfapdonoehd('%fooValue%', Criteria::LIKE); // WHERE ArtbConfApdOnOehd LIKE '%fooValue%'
     * $query->filterByArtbconfapdonoehd(['foo', 'bar']); // WHERE ArtbConfApdOnOehd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfapdonoehd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfapdonoehd($artbconfapdonoehd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfapdonoehd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFAPDONOEHD, $artbconfapdonoehd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfNbrSp column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfnbrsp(1234); // WHERE ArtbConfNbrSp = 1234
     * $query->filterByArtbconfnbrsp(array(12, 34)); // WHERE ArtbConfNbrSp IN (12, 34)
     * $query->filterByArtbconfnbrsp(array('min' => 12)); // WHERE ArtbConfNbrSp > 12
     * </code>
     *
     * @param mixed $artbconfnbrsp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfnbrsp($artbconfnbrsp = null, ?string $comparison = null)
    {
        if (is_array($artbconfnbrsp)) {
            $useMinMax = false;
            if (isset($artbconfnbrsp['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFNBRSP, $artbconfnbrsp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfnbrsp['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFNBRSP, $artbconfnbrsp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFNBRSP, $artbconfnbrsp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfForceSpLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfforcesplvl(1234); // WHERE ArtbConfForceSpLvl = 1234
     * $query->filterByArtbconfforcesplvl(array(12, 34)); // WHERE ArtbConfForceSpLvl IN (12, 34)
     * $query->filterByArtbconfforcesplvl(array('min' => 12)); // WHERE ArtbConfForceSpLvl > 12
     * </code>
     *
     * @param mixed $artbconfforcesplvl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfforcesplvl($artbconfforcesplvl = null, ?string $comparison = null)
    {
        if (is_array($artbconfforcesplvl)) {
            $useMinMax = false;
            if (isset($artbconfforcesplvl['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFORCESPLVL, $artbconfforcesplvl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfforcesplvl['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFORCESPLVL, $artbconfforcesplvl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFORCESPLVL, $artbconfforcesplvl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCustGetOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustgetopt(1234); // WHERE ArtbConfCustGetOpt = 1234
     * $query->filterByArtbconfcustgetopt(array(12, 34)); // WHERE ArtbConfCustGetOpt IN (12, 34)
     * $query->filterByArtbconfcustgetopt(array('min' => 12)); // WHERE ArtbConfCustGetOpt > 12
     * </code>
     *
     * @param mixed $artbconfcustgetopt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcustgetopt($artbconfcustgetopt = null, ?string $comparison = null)
    {
        if (is_array($artbconfcustgetopt)) {
            $useMinMax = false;
            if (isset($artbconfcustgetopt['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTGETOPT, $artbconfcustgetopt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfcustgetopt['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTGETOPT, $artbconfcustgetopt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTGETOPT, $artbconfcustgetopt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfAddICmnt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfaddicmnt('fooValue');   // WHERE ArtbConfAddICmnt = 'fooValue'
     * $query->filterByArtbconfaddicmnt('%fooValue%', Criteria::LIKE); // WHERE ArtbConfAddICmnt LIKE '%fooValue%'
     * $query->filterByArtbconfaddicmnt(['foo', 'bar']); // WHERE ArtbConfAddICmnt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfaddicmnt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfaddicmnt($artbconfaddicmnt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfaddicmnt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFADDICMNT, $artbconfaddicmnt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2AppAddiscItmPdm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2appaddiscitmpdm('fooValue');   // WHERE ArtbCon2AppAddiscItmPdm = 'fooValue'
     * $query->filterByArtbcon2appaddiscitmpdm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2AppAddiscItmPdm LIKE '%fooValue%'
     * $query->filterByArtbcon2appaddiscitmpdm(['foo', 'bar']); // WHERE ArtbCon2AppAddiscItmPdm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2appaddiscitmpdm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2appaddiscitmpdm($artbcon2appaddiscitmpdm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2appaddiscitmpdm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM, $artbcon2appaddiscitmpdm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2RfndSelectAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2rfndselectamt(1234); // WHERE ArtbCon2RfndSelectAmt = 1234
     * $query->filterByArtbcon2rfndselectamt(array(12, 34)); // WHERE ArtbCon2RfndSelectAmt IN (12, 34)
     * $query->filterByArtbcon2rfndselectamt(array('min' => 12)); // WHERE ArtbCon2RfndSelectAmt > 12
     * </code>
     *
     * @param mixed $artbcon2rfndselectamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2rfndselectamt($artbcon2rfndselectamt = null, ?string $comparison = null)
    {
        if (is_array($artbcon2rfndselectamt)) {
            $useMinMax = false;
            if (isset($artbcon2rfndselectamt['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT, $artbcon2rfndselectamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcon2rfndselectamt['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT, $artbcon2rfndselectamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT, $artbcon2rfndselectamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2RfndGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2rfndglacct('fooValue');   // WHERE ArtbCon2RfndGlAcct = 'fooValue'
     * $query->filterByArtbcon2rfndglacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2RfndGlAcct LIKE '%fooValue%'
     * $query->filterByArtbcon2rfndglacct(['foo', 'bar']); // WHERE ArtbCon2RfndGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2rfndglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2rfndglacct($artbcon2rfndglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2rfndglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDGLACCT, $artbcon2rfndglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2RfndApTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2rfndapterm('fooValue');   // WHERE ArtbCon2RfndApTerm = 'fooValue'
     * $query->filterByArtbcon2rfndapterm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2RfndApTerm LIKE '%fooValue%'
     * $query->filterByArtbcon2rfndapterm(['foo', 'bar']); // WHERE ArtbCon2RfndApTerm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2rfndapterm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2rfndapterm($artbcon2rfndapterm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2rfndapterm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDAPTERM, $artbcon2rfndapterm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2RfndArTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2rfndarterm('fooValue');   // WHERE ArtbCon2RfndArTerm = 'fooValue'
     * $query->filterByArtbcon2rfndarterm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2RfndArTerm LIKE '%fooValue%'
     * $query->filterByArtbcon2rfndarterm(['foo', 'bar']); // WHERE ArtbCon2RfndArTerm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2rfndarterm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2rfndarterm($artbcon2rfndarterm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2rfndarterm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDARTERM, $artbcon2rfndarterm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2CwoTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2cwoterm('fooValue');   // WHERE ArtbCon2CwoTerm = 'fooValue'
     * $query->filterByArtbcon2cwoterm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CwoTerm LIKE '%fooValue%'
     * $query->filterByArtbcon2cwoterm(['foo', 'bar']); // WHERE ArtbCon2CwoTerm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2cwoterm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2cwoterm($artbcon2cwoterm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2cwoterm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CWOTERM, $artbcon2cwoterm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2CcTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ccterm('fooValue');   // WHERE ArtbCon2CcTerm = 'fooValue'
     * $query->filterByArtbcon2ccterm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CcTerm LIKE '%fooValue%'
     * $query->filterByArtbcon2ccterm(['foo', 'bar']); // WHERE ArtbCon2CcTerm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2ccterm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2ccterm($artbcon2ccterm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ccterm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCTERM, $artbcon2ccterm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2CcSave column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ccsave('fooValue');   // WHERE ArtbCon2CcSave = 'fooValue'
     * $query->filterByArtbcon2ccsave('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CcSave LIKE '%fooValue%'
     * $query->filterByArtbcon2ccsave(['foo', 'bar']); // WHERE ArtbCon2CcSave IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2ccsave The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2ccsave($artbcon2ccsave = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ccsave)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCSAVE, $artbcon2ccsave, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2CcBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ccbatch('fooValue');   // WHERE ArtbCon2CcBatch = 'fooValue'
     * $query->filterByArtbcon2ccbatch('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CcBatch LIKE '%fooValue%'
     * $query->filterByArtbcon2ccbatch(['foo', 'bar']); // WHERE ArtbCon2CcBatch IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2ccbatch The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2ccbatch($artbcon2ccbatch = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ccbatch)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCBATCH, $artbcon2ccbatch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2CcSaveDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ccsavedays(1234); // WHERE ArtbCon2CcSaveDays = 1234
     * $query->filterByArtbcon2ccsavedays(array(12, 34)); // WHERE ArtbCon2CcSaveDays IN (12, 34)
     * $query->filterByArtbcon2ccsavedays(array('min' => 12)); // WHERE ArtbCon2CcSaveDays > 12
     * </code>
     *
     * @param mixed $artbcon2ccsavedays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2ccsavedays($artbcon2ccsavedays = null, ?string $comparison = null)
    {
        if (is_array($artbcon2ccsavedays)) {
            $useMinMax = false;
            if (isset($artbcon2ccsavedays['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS, $artbcon2ccsavedays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcon2ccsavedays['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS, $artbcon2ccsavedays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS, $artbcon2ccsavedays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2AprvdCcAsDeposit column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2aprvdccasdeposit('fooValue');   // WHERE ArtbCon2AprvdCcAsDeposit = 'fooValue'
     * $query->filterByArtbcon2aprvdccasdeposit('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2AprvdCcAsDeposit LIKE '%fooValue%'
     * $query->filterByArtbcon2aprvdccasdeposit(['foo', 'bar']); // WHERE ArtbCon2AprvdCcAsDeposit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2aprvdccasdeposit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2aprvdccasdeposit($artbcon2aprvdccasdeposit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2aprvdccasdeposit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT, $artbcon2aprvdccasdeposit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2CmQtySign column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2cmqtysign('fooValue');   // WHERE ArtbCon2CmQtySign = 'fooValue'
     * $query->filterByArtbcon2cmqtysign('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CmQtySign LIKE '%fooValue%'
     * $query->filterByArtbcon2cmqtysign(['foo', 'bar']); // WHERE ArtbCon2CmQtySign IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2cmqtysign The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2cmqtysign($artbcon2cmqtysign = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2cmqtysign)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CMQTYSIGN, $artbcon2cmqtysign, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2BolLine column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2bolline(1234); // WHERE ArtbCon2BolLine = 1234
     * $query->filterByArtbcon2bolline(array(12, 34)); // WHERE ArtbCon2BolLine IN (12, 34)
     * $query->filterByArtbcon2bolline(array('min' => 12)); // WHERE ArtbCon2BolLine > 12
     * </code>
     *
     * @param mixed $artbcon2bolline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2bolline($artbcon2bolline = null, ?string $comparison = null)
    {
        if (is_array($artbcon2bolline)) {
            $useMinMax = false;
            if (isset($artbcon2bolline['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2BOLLINE, $artbcon2bolline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcon2bolline['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2BOLLINE, $artbcon2bolline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2BOLLINE, $artbcon2bolline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2BolCols column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2bolcols(1234); // WHERE ArtbCon2BolCols = 1234
     * $query->filterByArtbcon2bolcols(array(12, 34)); // WHERE ArtbCon2BolCols IN (12, 34)
     * $query->filterByArtbcon2bolcols(array('min' => 12)); // WHERE ArtbCon2BolCols > 12
     * </code>
     *
     * @param mixed $artbcon2bolcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2bolcols($artbcon2bolcols = null, ?string $comparison = null)
    {
        if (is_array($artbcon2bolcols)) {
            $useMinMax = false;
            if (isset($artbcon2bolcols['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2BOLCOLS, $artbcon2bolcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcon2bolcols['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2BOLCOLS, $artbcon2bolcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2BOLCOLS, $artbcon2bolcols, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2UseSoUnitWght column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2usesounitwght('fooValue');   // WHERE ArtbCon2UseSoUnitWght = 'fooValue'
     * $query->filterByArtbcon2usesounitwght('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2UseSoUnitWght LIKE '%fooValue%'
     * $query->filterByArtbcon2usesounitwght(['foo', 'bar']); // WHERE ArtbCon2UseSoUnitWght IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2usesounitwght The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2usesounitwght($artbcon2usesounitwght = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2usesounitwght)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT, $artbcon2usesounitwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2DelZbal column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2delzbal('fooValue');   // WHERE ArtbCon2DelZbal = 'fooValue'
     * $query->filterByArtbcon2delzbal('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2DelZbal LIKE '%fooValue%'
     * $query->filterByArtbcon2delzbal(['foo', 'bar']); // WHERE ArtbCon2DelZbal IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2delzbal The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2delzbal($artbcon2delzbal = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2delzbal)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2DELZBAL, $artbcon2delzbal, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfStopCustChg column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstopcustchg(1234); // WHERE ArtbConfStopCustChg = 1234
     * $query->filterByArtbconfstopcustchg(array(12, 34)); // WHERE ArtbConfStopCustChg IN (12, 34)
     * $query->filterByArtbconfstopcustchg(array('min' => 12)); // WHERE ArtbConfStopCustChg > 12
     * </code>
     *
     * @param mixed $artbconfstopcustchg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfstopcustchg($artbconfstopcustchg = null, ?string $comparison = null)
    {
        if (is_array($artbconfstopcustchg)) {
            $useMinMax = false;
            if (isset($artbconfstopcustchg['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG, $artbconfstopcustchg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfstopcustchg['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG, $artbconfstopcustchg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG, $artbconfstopcustchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2ProspectEditCmm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2prospecteditcmm('fooValue');   // WHERE ArtbCon2ProspectEditCmm = 'fooValue'
     * $query->filterByArtbcon2prospecteditcmm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2ProspectEditCmm LIKE '%fooValue%'
     * $query->filterByArtbcon2prospecteditcmm(['foo', 'bar']); // WHERE ArtbCon2ProspectEditCmm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2prospecteditcmm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2prospecteditcmm($artbcon2prospecteditcmm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2prospecteditcmm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM, $artbcon2prospecteditcmm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2ProspectNotesToCmm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2prospectnotestocmm('fooValue');   // WHERE ArtbCon2ProspectNotesToCmm = 'fooValue'
     * $query->filterByArtbcon2prospectnotestocmm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2ProspectNotesToCmm LIKE '%fooValue%'
     * $query->filterByArtbcon2prospectnotestocmm(['foo', 'bar']); // WHERE ArtbCon2ProspectNotesToCmm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2prospectnotestocmm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2prospectnotestocmm($artbcon2prospectnotestocmm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2prospectnotestocmm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM, $artbcon2prospectnotestocmm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2CtryGetDflt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ctrygetdflt('fooValue');   // WHERE ArtbCon2CtryGetDflt = 'fooValue'
     * $query->filterByArtbcon2ctrygetdflt('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CtryGetDflt LIKE '%fooValue%'
     * $query->filterByArtbcon2ctrygetdflt(['foo', 'bar']); // WHERE ArtbCon2CtryGetDflt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2ctrygetdflt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2ctrygetdflt($artbcon2ctrygetdflt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ctrygetdflt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT, $artbcon2ctrygetdflt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfRptByWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfrptbywhse('fooValue');   // WHERE ArtbConfRptByWhse = 'fooValue'
     * $query->filterByArtbconfrptbywhse('%fooValue%', Criteria::LIKE); // WHERE ArtbConfRptByWhse LIKE '%fooValue%'
     * $query->filterByArtbconfrptbywhse(['foo', 'bar']); // WHERE ArtbConfRptByWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfrptbywhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfrptbywhse($artbconfrptbywhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfrptbywhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFRPTBYWHSE, $artbconfrptbywhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfAppendPos column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfappendpos(1234); // WHERE ArtbConfAppendPos = 1234
     * $query->filterByArtbconfappendpos(array(12, 34)); // WHERE ArtbConfAppendPos IN (12, 34)
     * $query->filterByArtbconfappendpos(array('min' => 12)); // WHERE ArtbConfAppendPos > 12
     * </code>
     *
     * @param mixed $artbconfappendpos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfappendpos($artbconfappendpos = null, ?string $comparison = null)
    {
        if (is_array($artbconfappendpos)) {
            $useMinMax = false;
            if (isset($artbconfappendpos['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFAPPENDPOS, $artbconfappendpos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbconfappendpos['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFAPPENDPOS, $artbconfappendpos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFAPPENDPOS, $artbconfappendpos, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfIncoAsstAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfincoasstacct('fooValue');   // WHERE ArtbConfIncoAsstAcct = 'fooValue'
     * $query->filterByArtbconfincoasstacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfIncoAsstAcct LIKE '%fooValue%'
     * $query->filterByArtbconfincoasstacct(['foo', 'bar']); // WHERE ArtbConfIncoAsstAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfincoasstacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfincoasstacct($artbconfincoasstacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfincoasstacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINCOASSTACCT, $artbconfincoasstacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfIncoLiabAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfincoliabacct('fooValue');   // WHERE ArtbConfIncoLiabAcct = 'fooValue'
     * $query->filterByArtbconfincoliabacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfIncoLiabAcct LIKE '%fooValue%'
     * $query->filterByArtbconfincoliabacct(['foo', 'bar']); // WHERE ArtbConfIncoLiabAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfincoliabacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfincoliabacct($artbconfincoliabacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfincoliabacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINCOLIABACCT, $artbconfincoliabacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2IncoAsstAcct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2incoasstacct2('fooValue');   // WHERE ArtbCon2IncoAsstAcct2 = 'fooValue'
     * $query->filterByArtbcon2incoasstacct2('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2IncoAsstAcct2 LIKE '%fooValue%'
     * $query->filterByArtbcon2incoasstacct2(['foo', 'bar']); // WHERE ArtbCon2IncoAsstAcct2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2incoasstacct2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2incoasstacct2($artbcon2incoasstacct2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2incoasstacct2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2, $artbcon2incoasstacct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2IncoLiabAcct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2incoliabacct2('fooValue');   // WHERE ArtbCon2IncoLiabAcct2 = 'fooValue'
     * $query->filterByArtbcon2incoliabacct2('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2IncoLiabAcct2 LIKE '%fooValue%'
     * $query->filterByArtbcon2incoliabacct2(['foo', 'bar']); // WHERE ArtbCon2IncoLiabAcct2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2incoliabacct2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2incoliabacct2($artbcon2incoliabacct2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2incoliabacct2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2, $artbcon2incoliabacct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2UseSurchg column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2usesurchg('fooValue');   // WHERE ArtbCon2UseSurchg = 'fooValue'
     * $query->filterByArtbcon2usesurchg('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2UseSurchg LIKE '%fooValue%'
     * $query->filterByArtbcon2usesurchg(['foo', 'bar']); // WHERE ArtbCon2UseSurchg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2usesurchg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2usesurchg($artbcon2usesurchg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2usesurchg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2USESURCHG, $artbcon2usesurchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2SurchgItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2surchgitemid('fooValue');   // WHERE ArtbCon2SurchgItemId = 'fooValue'
     * $query->filterByArtbcon2surchgitemid('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2SurchgItemId LIKE '%fooValue%'
     * $query->filterByArtbcon2surchgitemid(['foo', 'bar']); // WHERE ArtbCon2SurchgItemId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2surchgitemid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2surchgitemid($artbcon2surchgitemid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2surchgitemid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGITEMID, $artbcon2surchgitemid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2SurchgIgrupSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2surchgigrupseq(1234); // WHERE ArtbCon2SurchgIgrupSeq = 1234
     * $query->filterByArtbcon2surchgigrupseq(array(12, 34)); // WHERE ArtbCon2SurchgIgrupSeq IN (12, 34)
     * $query->filterByArtbcon2surchgigrupseq(array('min' => 12)); // WHERE ArtbCon2SurchgIgrupSeq > 12
     * </code>
     *
     * @param mixed $artbcon2surchgigrupseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2surchgigrupseq($artbcon2surchgigrupseq = null, ?string $comparison = null)
    {
        if (is_array($artbcon2surchgigrupseq)) {
            $useMinMax = false;
            if (isset($artbcon2surchgigrupseq['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ, $artbcon2surchgigrupseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcon2surchgigrupseq['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ, $artbcon2surchgigrupseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ, $artbcon2surchgigrupseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2SurchgSviaSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2surchgsviaseq(1234); // WHERE ArtbCon2SurchgSviaSeq = 1234
     * $query->filterByArtbcon2surchgsviaseq(array(12, 34)); // WHERE ArtbCon2SurchgSviaSeq IN (12, 34)
     * $query->filterByArtbcon2surchgsviaseq(array('min' => 12)); // WHERE ArtbCon2SurchgSviaSeq > 12
     * </code>
     *
     * @param mixed $artbcon2surchgsviaseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2surchgsviaseq($artbcon2surchgsviaseq = null, ?string $comparison = null)
    {
        if (is_array($artbcon2surchgsviaseq)) {
            $useMinMax = false;
            if (isset($artbcon2surchgsviaseq['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ, $artbcon2surchgsviaseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcon2surchgsviaseq['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ, $artbcon2surchgsviaseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ, $artbcon2surchgsviaseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2SurchgCstidSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2surchgcstidseq(1234); // WHERE ArtbCon2SurchgCstidSeq = 1234
     * $query->filterByArtbcon2surchgcstidseq(array(12, 34)); // WHERE ArtbCon2SurchgCstidSeq IN (12, 34)
     * $query->filterByArtbcon2surchgcstidseq(array('min' => 12)); // WHERE ArtbCon2SurchgCstidSeq > 12
     * </code>
     *
     * @param mixed $artbcon2surchgcstidseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2surchgcstidseq($artbcon2surchgcstidseq = null, ?string $comparison = null)
    {
        if (is_array($artbcon2surchgcstidseq)) {
            $useMinMax = false;
            if (isset($artbcon2surchgcstidseq['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ, $artbcon2surchgcstidseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcon2surchgcstidseq['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ, $artbcon2surchgcstidseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ, $artbcon2surchgcstidseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2SurchgCstpcSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2surchgcstpcseq(1234); // WHERE ArtbCon2SurchgCstpcSeq = 1234
     * $query->filterByArtbcon2surchgcstpcseq(array(12, 34)); // WHERE ArtbCon2SurchgCstpcSeq IN (12, 34)
     * $query->filterByArtbcon2surchgcstpcseq(array('min' => 12)); // WHERE ArtbCon2SurchgCstpcSeq > 12
     * </code>
     *
     * @param mixed $artbcon2surchgcstpcseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2surchgcstpcseq($artbcon2surchgcstpcseq = null, ?string $comparison = null)
    {
        if (is_array($artbcon2surchgcstpcseq)) {
            $useMinMax = false;
            if (isset($artbcon2surchgcstpcseq['min'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ, $artbcon2surchgcstpcseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcon2surchgcstpcseq['max'])) {
                $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ, $artbcon2surchgcstpcseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ, $artbcon2surchgcstpcseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfZeroInvcLine column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfzeroinvcline('fooValue');   // WHERE ArtbConfZeroInvcLine = 'fooValue'
     * $query->filterByArtbconfzeroinvcline('%fooValue%', Criteria::LIKE); // WHERE ArtbConfZeroInvcLine LIKE '%fooValue%'
     * $query->filterByArtbconfzeroinvcline(['foo', 'bar']); // WHERE ArtbConfZeroInvcLine IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfzeroinvcline The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfzeroinvcline($artbconfzeroinvcline = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfzeroinvcline)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFZEROINVCLINE, $artbconfzeroinvcline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2ZeroOrdrShip column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2zeroordrship('fooValue');   // WHERE ArtbCon2ZeroOrdrShip = 'fooValue'
     * $query->filterByArtbcon2zeroordrship('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2ZeroOrdrShip LIKE '%fooValue%'
     * $query->filterByArtbcon2zeroordrship(['foo', 'bar']); // WHERE ArtbCon2ZeroOrdrShip IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2zeroordrship The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2zeroordrship($artbcon2zeroordrship = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2zeroordrship)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP, $artbcon2zeroordrship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2ZeroOrdrMess column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2zeroordrmess('fooValue');   // WHERE ArtbCon2ZeroOrdrMess = 'fooValue'
     * $query->filterByArtbcon2zeroordrmess('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2ZeroOrdrMess LIKE '%fooValue%'
     * $query->filterByArtbcon2zeroordrmess(['foo', 'bar']); // WHERE ArtbCon2ZeroOrdrMess IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2zeroordrmess The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2zeroordrmess($artbcon2zeroordrmess = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2zeroordrmess)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS, $artbcon2zeroordrmess, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbConfCashAcctWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcashacctwhse('fooValue');   // WHERE ArtbConfCashAcctWhse = 'fooValue'
     * $query->filterByArtbconfcashacctwhse('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCashAcctWhse LIKE '%fooValue%'
     * $query->filterByArtbconfcashacctwhse(['foo', 'bar']); // WHERE ArtbConfCashAcctWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbconfcashacctwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbconfcashacctwhse($artbconfcashacctwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcashacctwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE, $artbconfcashacctwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCon2MtaxFrtFlagOrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2mtaxfrtflagorcode('fooValue');   // WHERE ArtbCon2MtaxFrtFlagOrCode = 'fooValue'
     * $query->filterByArtbcon2mtaxfrtflagorcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2MtaxFrtFlagOrCode LIKE '%fooValue%'
     * $query->filterByArtbcon2mtaxfrtflagorcode(['foo', 'bar']); // WHERE ArtbCon2MtaxFrtFlagOrCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcon2mtaxfrtflagorcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcon2mtaxfrtflagorcode($artbcon2mtaxfrtflagorcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2mtaxfrtflagorcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE, $artbcon2mtaxfrtflagorcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * $query->filterByDateupdtd(['foo', 'bar']); // WHERE DateUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dateupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * $query->filterByTimeupdtd(['foo', 'bar']); // WHERE TimeUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $timeupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * $query->filterByDummy(['foo', 'bar']); // WHERE dummy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dummy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigArTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigAr $configAr Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($configAr = null)
    {
        if ($configAr) {
            $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $configAr->getArtbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigArTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigArTableMap::clearInstancePool();
            ConfigArTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigArTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigArTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigArTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigArTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
