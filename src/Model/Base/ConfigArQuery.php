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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_config' table.
 *
 *
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
 * @method     ChildConfigAr findOne(ConnectionInterface $con = null) Return the first ChildConfigAr matching the query
 * @method     ChildConfigAr findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigAr matching the query, or a new ChildConfigAr object populated from the query conditions when no match is found
 *
 * @method     ChildConfigAr findOneByArtbconfkey(int $ArtbConfKey) Return the first ChildConfigAr filtered by the ArtbConfKey column
 * @method     ChildConfigAr findOneByArtbconfglifac(string $ArtbConfGlIfac) Return the first ChildConfigAr filtered by the ArtbConfGlIfac column
 * @method     ChildConfigAr findOneByArtbconfinifac(string $ArtbConfInIfac) Return the first ChildConfigAr filtered by the ArtbConfInIfac column
 * @method     ChildConfigAr findOneByArtbconfpcifac(string $ArtbConfPcIfac) Return the first ChildConfigAr filtered by the ArtbConfPcIfac column
 * @method     ChildConfigAr findOneByArtbconfccifac(string $ArtbConfCcIfac) Return the first ChildConfigAr filtered by the ArtbConfCcIfac column
 * @method     ChildConfigAr findOneByArtbconfinvcustgl(string $ArtbConfInvCustGl) Return the first ChildConfigAr filtered by the ArtbConfInvCustGl column
 * @method     ChildConfigAr findOneByArtbconffrtacct(string $ArtbConfFrtAcct) Return the first ChildConfigAr filtered by the ArtbConfFrtAcct column
 * @method     ChildConfigAr findOneByArtbconfmiscacct(string $ArtbConfMiscAcct) Return the first ChildConfigAr filtered by the ArtbConfMiscAcct column
 * @method     ChildConfigAr findOneByArtbconfaracct(string $ArtbConfArAcct) Return the first ChildConfigAr filtered by the ArtbConfArAcct column
 * @method     ChildConfigAr findOneByArtbconfcashacct(string $ArtbConfCashAcct) Return the first ChildConfigAr filtered by the ArtbConfCashAcct column
 * @method     ChildConfigAr findOneByArtbcon2cccashacct(string $ArtbCon2CcCashAcct) Return the first ChildConfigAr filtered by the ArtbCon2CcCashAcct column
 * @method     ChildConfigAr findOneByArtbconffincacct(string $ArtbConfFincAcct) Return the first ChildConfigAr filtered by the ArtbConfFincAcct column
 * @method     ChildConfigAr findOneByArtbconfdiscacct(string $ArtbConfDiscAcct) Return the first ChildConfigAr filtered by the ArtbConfDiscAcct column
 * @method     ChildConfigAr findOneByArtbconfrgacogsacct(string $ArtbConfRgaCogsAcct) Return the first ChildConfigAr filtered by the ArtbConfRgaCogsAcct column
 * @method     ChildConfigAr findOneByArtbconfcusdacct(string $ArtbConfCusdAcct) Return the first ChildConfigAr filtered by the ArtbConfCusdAcct column
 * @method     ChildConfigAr findOneByArtbconfdpstacct(string $ArtbConfDpstAcct) Return the first ChildConfigAr filtered by the ArtbConfDpstAcct column
 * @method     ChildConfigAr findOneByArtbconfwriteoffacct(string $ArtbConfWriteOffAcct) Return the first ChildConfigAr filtered by the ArtbConfWriteOffAcct column
 * @method     ChildConfigAr findOneByArtbcon2presalivtyacct(string $ArtbCon2PresalIvtyAcct) Return the first ChildConfigAr filtered by the ArtbCon2PresalIvtyAcct column
 * @method     ChildConfigAr findOneByArtbconffincpct(string $ArtbConfFincPct) Return the first ChildConfigAr filtered by the ArtbConfFincPct column
 * @method     ChildConfigAr findOneByArtbconffincdays(int $ArtbConfFincDays) Return the first ChildConfigAr filtered by the ArtbConfFincDays column
 * @method     ChildConfigAr findOneByArtbconffincminchg(string $ArtbConfFincMinChg) Return the first ChildConfigAr filtered by the ArtbConfFincMinChg column
 * @method     ChildConfigAr findOneByArtbconffincterm(string $ArtbConfFincTerm) Return the first ChildConfigAr filtered by the ArtbConfFincTerm column
 * @method     ChildConfigAr findOneByArtbconfover1(int $ArtbConfOver1) Return the first ChildConfigAr filtered by the ArtbConfOver1 column
 * @method     ChildConfigAr findOneByArtbconfover2(int $ArtbConfOver2) Return the first ChildConfigAr filtered by the ArtbConfOver2 column
 * @method     ChildConfigAr findOneByArtbconfstmtline(int $ArtbConfStmtLine) Return the first ChildConfigAr filtered by the ArtbConfStmtLine column
 * @method     ChildConfigAr findOneByArtbconfstmtcols(int $ArtbConfStmtCols) Return the first ChildConfigAr filtered by the ArtbConfStmtCols column
 * @method     ChildConfigAr findOneByArtbconfstmtnotedef(string $ArtbConfStmtNoteDef) Return the first ChildConfigAr filtered by the ArtbConfStmtNoteDef column
 * @method     ChildConfigAr findOneByArtbconfstmtnote1(string $ArtbConfStmtNote1) Return the first ChildConfigAr filtered by the ArtbConfStmtNote1 column
 * @method     ChildConfigAr findOneByArtbconfstmtnote2(string $ArtbConfStmtNote2) Return the first ChildConfigAr filtered by the ArtbConfStmtNote2 column
 * @method     ChildConfigAr findOneByArtbconfstmtnote3(string $ArtbConfStmtNote3) Return the first ChildConfigAr filtered by the ArtbConfStmtNote3 column
 * @method     ChildConfigAr findOneByArtbconfinvline(int $ArtbConfInvLine) Return the first ChildConfigAr filtered by the ArtbConfInvLine column
 * @method     ChildConfigAr findOneByArtbconfinvcols(int $ArtbConfInvCols) Return the first ChildConfigAr filtered by the ArtbConfInvCols column
 * @method     ChildConfigAr findOneByArtbconfinvnotedef(string $ArtbConfInvNoteDef) Return the first ChildConfigAr filtered by the ArtbConfInvNoteDef column
 * @method     ChildConfigAr findOneByArtbconfcustline(int $ArtbConfCustLine) Return the first ChildConfigAr filtered by the ArtbConfCustLine column
 * @method     ChildConfigAr findOneByArtbconfcustcols(int $ArtbConfCustCols) Return the first ChildConfigAr filtered by the ArtbConfCustCols column
 * @method     ChildConfigAr findOneByArtbconfinvsort(string $ArtbConfInvSort) Return the first ChildConfigAr filtered by the ArtbConfInvSort column
 * @method     ChildConfigAr findOneByArtbconfinvnc(string $ArtbConfInvNc) Return the first ChildConfigAr filtered by the ArtbConfInvNc column
 * @method     ChildConfigAr findOneByArtbconfstmtsort(string $ArtbConfStmtSort) Return the first ChildConfigAr filtered by the ArtbConfStmtSort column
 * @method     ChildConfigAr findOneByArtbconfstmt0orless(string $ArtbConfStmt0OrLess) Return the first ChildConfigAr filtered by the ArtbConfStmt0OrLess column
 * @method     ChildConfigAr findOneByArtbconfspdef(string $ArtbConfSpDef) Return the first ChildConfigAr filtered by the ArtbConfSpDef column
 * @method     ChildConfigAr findOneByArtbconfwhse(string $ArtbConfWhse) Return the first ChildConfigAr filtered by the ArtbConfWhse column
 * @method     ChildConfigAr findOneByArtbconfsviadef(string $ArtbConfSviaDef) Return the first ChildConfigAr filtered by the ArtbConfSviaDef column
 * @method     ChildConfigAr findOneByArtbconftermdef(string $ArtbConfTermDef) Return the first ChildConfigAr filtered by the ArtbConfTermDef column
 * @method     ChildConfigAr findOneByArtbconftaxdef(string $ArtbConfTaxDef) Return the first ChildConfigAr filtered by the ArtbConfTaxDef column
 * @method     ChildConfigAr findOneByArtbconfstmtdef(string $ArtbConfStmtDef) Return the first ChildConfigAr filtered by the ArtbConfStmtDef column
 * @method     ChildConfigAr findOneByArtbconfallowbo(string $ArtbConfAllowBo) Return the first ChildConfigAr filtered by the ArtbConfAllowBo column
 * @method     ChildConfigAr findOneByArtbconfallowfc(string $ArtbConfAllowFc) Return the first ChildConfigAr filtered by the ArtbConfAllowFc column
 * @method     ChildConfigAr findOneByArtbconfusepriccode(string $ArtbConfUsePricCode) Return the first ChildConfigAr filtered by the ArtbConfUsePricCode column
 * @method     ChildConfigAr findOneByArtbconfpricdef(string $ArtbConfPricDef) Return the first ChildConfigAr filtered by the ArtbConfPricDef column
 * @method     ChildConfigAr findOneByArtbconfusecommcode(string $ArtbConfUseCommCode) Return the first ChildConfigAr filtered by the ArtbConfUseCommCode column
 * @method     ChildConfigAr findOneByArtbconfcommdef(string $ArtbConfCommDef) Return the first ChildConfigAr filtered by the ArtbConfCommDef column
 * @method     ChildConfigAr findOneByArtbconfcustlabl(string $ArtbConfCustLabl) Return the first ChildConfigAr filtered by the ArtbConfCustLabl column
 * @method     ChildConfigAr findOneByArtbconfcustreq(string $ArtbConfCustReq) Return the first ChildConfigAr filtered by the ArtbConfCustReq column
 * @method     ChildConfigAr findOneByArtbconfcustdef(string $ArtbConfCustDef) Return the first ChildConfigAr filtered by the ArtbConfCustDef column
 * @method     ChildConfigAr findOneByArtbconfshiplabl(string $ArtbConfShipLabl) Return the first ChildConfigAr filtered by the ArtbConfShipLabl column
 * @method     ChildConfigAr findOneByArtbconfshipreq(string $ArtbConfShipReq) Return the first ChildConfigAr filtered by the ArtbConfShipReq column
 * @method     ChildConfigAr findOneByArtbconfshipdef(string $ArtbConfShipDef) Return the first ChildConfigAr filtered by the ArtbConfShipDef column
 * @method     ChildConfigAr findOneByArtbconfreqdate2(int $ArtbConfReqDate2) Return the first ChildConfigAr filtered by the ArtbConfReqDate2 column
 * @method     ChildConfigAr findOneByArtbconfreqdate3(int $ArtbConfReqDate3) Return the first ChildConfigAr filtered by the ArtbConfReqDate3 column
 * @method     ChildConfigAr findOneByArtbconfreqdate4(int $ArtbConfReqDate4) Return the first ChildConfigAr filtered by the ArtbConfReqDate4 column
 * @method     ChildConfigAr findOneByArtbconfuseweb(string $ArtbConfUseWeb) Return the first ChildConfigAr filtered by the ArtbConfUseWeb column
 * @method     ChildConfigAr findOneByArtbconfpayhstoredays(int $ArtbConfPayhStoreDays) Return the first ChildConfigAr filtered by the ArtbConfPayhStoreDays column
 * @method     ChildConfigAr findOneByArtbconfbyclerk(string $ArtbConfByClerk) Return the first ChildConfigAr filtered by the ArtbConfByClerk column
 * @method     ChildConfigAr findOneByArtbcon2ecrwhse(string $ArtbCon2EcrWhse) Return the first ChildConfigAr filtered by the ArtbCon2EcrWhse column
 * @method     ChildConfigAr findOneByArtbconfzerotermdisc(string $ArtbConfZeroTermDisc) Return the first ChildConfigAr filtered by the ArtbConfZeroTermDisc column
 * @method     ChildConfigAr findOneByArtbconfuseautocidgen(string $ArtbConfUseAutoCidGen) Return the first ChildConfigAr filtered by the ArtbConfUseAutoCidGen column
 * @method     ChildConfigAr findOneByArtbconfprefixlen(int $ArtbConfPrefixLen) Return the first ChildConfigAr filtered by the ArtbConfPrefixLen column
 * @method     ChildConfigAr findOneByArtbconfparagecredlast(string $ArtbConfParAgeCredLast) Return the first ChildConfigAr filtered by the ArtbConfParAgeCredLast column
 * @method     ChildConfigAr findOneByArtbconfincludecod(string $ArtbConfIncludeCod) Return the first ChildConfigAr filtered by the ArtbConfIncludeCod column
 * @method     ChildConfigAr findOneByArtbconfaddlpricdisc(string $ArtbConfAddlPricDisc) Return the first ChildConfigAr filtered by the ArtbConfAddlPricDisc column
 * @method     ChildConfigAr findOneByArtbconfapdonoehd(string $ArtbConfApdOnOehd) Return the first ChildConfigAr filtered by the ArtbConfApdOnOehd column
 * @method     ChildConfigAr findOneByArtbconfnbrsp(int $ArtbConfNbrSp) Return the first ChildConfigAr filtered by the ArtbConfNbrSp column
 * @method     ChildConfigAr findOneByArtbconfforcesplvl(int $ArtbConfForceSpLvl) Return the first ChildConfigAr filtered by the ArtbConfForceSpLvl column
 * @method     ChildConfigAr findOneByArtbconfcustgetopt(int $ArtbConfCustGetOpt) Return the first ChildConfigAr filtered by the ArtbConfCustGetOpt column
 * @method     ChildConfigAr findOneByArtbconfaddicmnt(string $ArtbConfAddICmnt) Return the first ChildConfigAr filtered by the ArtbConfAddICmnt column
 * @method     ChildConfigAr findOneByArtbcon2appaddiscitmpdm(string $ArtbCon2AppAddiscItmPdm) Return the first ChildConfigAr filtered by the ArtbCon2AppAddiscItmPdm column
 * @method     ChildConfigAr findOneByArtbcon2rfndselectamt(string $ArtbCon2RfndSelectAmt) Return the first ChildConfigAr filtered by the ArtbCon2RfndSelectAmt column
 * @method     ChildConfigAr findOneByArtbcon2rfndglacct(string $ArtbCon2RfndGlAcct) Return the first ChildConfigAr filtered by the ArtbCon2RfndGlAcct column
 * @method     ChildConfigAr findOneByArtbcon2rfndapterm(string $ArtbCon2RfndApTerm) Return the first ChildConfigAr filtered by the ArtbCon2RfndApTerm column
 * @method     ChildConfigAr findOneByArtbcon2rfndarterm(string $ArtbCon2RfndArTerm) Return the first ChildConfigAr filtered by the ArtbCon2RfndArTerm column
 * @method     ChildConfigAr findOneByArtbcon2cwoterm(string $ArtbCon2CwoTerm) Return the first ChildConfigAr filtered by the ArtbCon2CwoTerm column
 * @method     ChildConfigAr findOneByArtbcon2ccterm(string $ArtbCon2CcTerm) Return the first ChildConfigAr filtered by the ArtbCon2CcTerm column
 * @method     ChildConfigAr findOneByArtbcon2ccbatch(string $ArtbCon2CcBatch) Return the first ChildConfigAr filtered by the ArtbCon2CcBatch column
 * @method     ChildConfigAr findOneByArtbcon2ccsavedays(int $ArtbCon2CcSaveDays) Return the first ChildConfigAr filtered by the ArtbCon2CcSaveDays column
 * @method     ChildConfigAr findOneByArtbcon2aprvdccasdeposit(string $ArtbCon2AprvdCcAsDeposit) Return the first ChildConfigAr filtered by the ArtbCon2AprvdCcAsDeposit column
 * @method     ChildConfigAr findOneByArtbcon2cmqtysign(string $ArtbCon2CmQtySign) Return the first ChildConfigAr filtered by the ArtbCon2CmQtySign column
 * @method     ChildConfigAr findOneByArtbcon2bolline(int $ArtbCon2BolLine) Return the first ChildConfigAr filtered by the ArtbCon2BolLine column
 * @method     ChildConfigAr findOneByArtbcon2bolcols(int $ArtbCon2BolCols) Return the first ChildConfigAr filtered by the ArtbCon2BolCols column
 * @method     ChildConfigAr findOneByArtbcon2usesounitwght(string $ArtbCon2UseSoUnitWght) Return the first ChildConfigAr filtered by the ArtbCon2UseSoUnitWght column
 * @method     ChildConfigAr findOneByArtbcon2delzbal(string $ArtbCon2DelZbal) Return the first ChildConfigAr filtered by the ArtbCon2DelZbal column
 * @method     ChildConfigAr findOneByArtbconfstopcustchg(int $ArtbConfStopCustChg) Return the first ChildConfigAr filtered by the ArtbConfStopCustChg column
 * @method     ChildConfigAr findOneByArtbcon2prospecteditcmm(string $ArtbCon2ProspectEditCmm) Return the first ChildConfigAr filtered by the ArtbCon2ProspectEditCmm column
 * @method     ChildConfigAr findOneByArtbcon2prospectnotestocmm(string $ArtbCon2ProspectNotesToCmm) Return the first ChildConfigAr filtered by the ArtbCon2ProspectNotesToCmm column
 * @method     ChildConfigAr findOneByArtbcon2ctrygetdflt(string $ArtbCon2CtryGetDflt) Return the first ChildConfigAr filtered by the ArtbCon2CtryGetDflt column
 * @method     ChildConfigAr findOneByArtbconfrptbywhse(string $ArtbConfRptByWhse) Return the first ChildConfigAr filtered by the ArtbConfRptByWhse column
 * @method     ChildConfigAr findOneByArtbconfappendpos(int $ArtbConfAppendPos) Return the first ChildConfigAr filtered by the ArtbConfAppendPos column
 * @method     ChildConfigAr findOneByArtbconfincoasstacct(string $ArtbConfIncoAsstAcct) Return the first ChildConfigAr filtered by the ArtbConfIncoAsstAcct column
 * @method     ChildConfigAr findOneByArtbconfincoliabacct(string $ArtbConfIncoLiabAcct) Return the first ChildConfigAr filtered by the ArtbConfIncoLiabAcct column
 * @method     ChildConfigAr findOneByArtbcon2incoasstacct2(string $ArtbCon2IncoAsstAcct2) Return the first ChildConfigAr filtered by the ArtbCon2IncoAsstAcct2 column
 * @method     ChildConfigAr findOneByArtbcon2incoliabacct2(string $ArtbCon2IncoLiabAcct2) Return the first ChildConfigAr filtered by the ArtbCon2IncoLiabAcct2 column
 * @method     ChildConfigAr findOneByArtbcon2usesurchg(string $ArtbCon2UseSurchg) Return the first ChildConfigAr filtered by the ArtbCon2UseSurchg column
 * @method     ChildConfigAr findOneByArtbcon2surchgitemid(string $ArtbCon2SurchgItemId) Return the first ChildConfigAr filtered by the ArtbCon2SurchgItemId column
 * @method     ChildConfigAr findOneByArtbcon2surchgigrupseq(int $ArtbCon2SurchgIgrupSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgIgrupSeq column
 * @method     ChildConfigAr findOneByArtbcon2surchgsviaseq(int $ArtbCon2SurchgSviaSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgSviaSeq column
 * @method     ChildConfigAr findOneByArtbcon2surchgcstidseq(int $ArtbCon2SurchgCstidSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgCstidSeq column
 * @method     ChildConfigAr findOneByArtbcon2surchgcstpcseq(int $ArtbCon2SurchgCstpcSeq) Return the first ChildConfigAr filtered by the ArtbCon2SurchgCstpcSeq column
 * @method     ChildConfigAr findOneByArtbconfzeroinvcline(string $ArtbConfZeroInvcLine) Return the first ChildConfigAr filtered by the ArtbConfZeroInvcLine column
 * @method     ChildConfigAr findOneByArtbcon2zeroordrship(string $ArtbCon2ZeroOrdrShip) Return the first ChildConfigAr filtered by the ArtbCon2ZeroOrdrShip column
 * @method     ChildConfigAr findOneByArtbcon2zeroordrmess(string $ArtbCon2ZeroOrdrMess) Return the first ChildConfigAr filtered by the ArtbCon2ZeroOrdrMess column
 * @method     ChildConfigAr findOneByArtbconfcashacctwhse(string $ArtbConfCashAcctWhse) Return the first ChildConfigAr filtered by the ArtbConfCashAcctWhse column
 * @method     ChildConfigAr findOneByArtbcon2mtaxfrtflagorcode(string $ArtbCon2MtaxFrtFlagOrCode) Return the first ChildConfigAr filtered by the ArtbCon2MtaxFrtFlagOrCode column
 * @method     ChildConfigAr findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigAr filtered by the DateUpdtd column
 * @method     ChildConfigAr findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigAr filtered by the TimeUpdtd column
 * @method     ChildConfigAr findOneByDummy(string $dummy) Return the first ChildConfigAr filtered by the dummy column *

 * @method     ChildConfigAr requirePk($key, ConnectionInterface $con = null) Return the ChildConfigAr by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAr requireOne(ConnectionInterface $con = null) Return the first ChildConfigAr matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigAr[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigAr objects based on current ModelCriteria
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfkey(int $ArtbConfKey) Return ChildConfigAr objects filtered by the ArtbConfKey column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfglifac(string $ArtbConfGlIfac) Return ChildConfigAr objects filtered by the ArtbConfGlIfac column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfinifac(string $ArtbConfInIfac) Return ChildConfigAr objects filtered by the ArtbConfInIfac column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfpcifac(string $ArtbConfPcIfac) Return ChildConfigAr objects filtered by the ArtbConfPcIfac column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfccifac(string $ArtbConfCcIfac) Return ChildConfigAr objects filtered by the ArtbConfCcIfac column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfinvcustgl(string $ArtbConfInvCustGl) Return ChildConfigAr objects filtered by the ArtbConfInvCustGl column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconffrtacct(string $ArtbConfFrtAcct) Return ChildConfigAr objects filtered by the ArtbConfFrtAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfmiscacct(string $ArtbConfMiscAcct) Return ChildConfigAr objects filtered by the ArtbConfMiscAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfaracct(string $ArtbConfArAcct) Return ChildConfigAr objects filtered by the ArtbConfArAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcashacct(string $ArtbConfCashAcct) Return ChildConfigAr objects filtered by the ArtbConfCashAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2cccashacct(string $ArtbCon2CcCashAcct) Return ChildConfigAr objects filtered by the ArtbCon2CcCashAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconffincacct(string $ArtbConfFincAcct) Return ChildConfigAr objects filtered by the ArtbConfFincAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfdiscacct(string $ArtbConfDiscAcct) Return ChildConfigAr objects filtered by the ArtbConfDiscAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfrgacogsacct(string $ArtbConfRgaCogsAcct) Return ChildConfigAr objects filtered by the ArtbConfRgaCogsAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcusdacct(string $ArtbConfCusdAcct) Return ChildConfigAr objects filtered by the ArtbConfCusdAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfdpstacct(string $ArtbConfDpstAcct) Return ChildConfigAr objects filtered by the ArtbConfDpstAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfwriteoffacct(string $ArtbConfWriteOffAcct) Return ChildConfigAr objects filtered by the ArtbConfWriteOffAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2presalivtyacct(string $ArtbCon2PresalIvtyAcct) Return ChildConfigAr objects filtered by the ArtbCon2PresalIvtyAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconffincpct(string $ArtbConfFincPct) Return ChildConfigAr objects filtered by the ArtbConfFincPct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconffincdays(int $ArtbConfFincDays) Return ChildConfigAr objects filtered by the ArtbConfFincDays column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconffincminchg(string $ArtbConfFincMinChg) Return ChildConfigAr objects filtered by the ArtbConfFincMinChg column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconffincterm(string $ArtbConfFincTerm) Return ChildConfigAr objects filtered by the ArtbConfFincTerm column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfover1(int $ArtbConfOver1) Return ChildConfigAr objects filtered by the ArtbConfOver1 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfover2(int $ArtbConfOver2) Return ChildConfigAr objects filtered by the ArtbConfOver2 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmtline(int $ArtbConfStmtLine) Return ChildConfigAr objects filtered by the ArtbConfStmtLine column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmtcols(int $ArtbConfStmtCols) Return ChildConfigAr objects filtered by the ArtbConfStmtCols column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmtnotedef(string $ArtbConfStmtNoteDef) Return ChildConfigAr objects filtered by the ArtbConfStmtNoteDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmtnote1(string $ArtbConfStmtNote1) Return ChildConfigAr objects filtered by the ArtbConfStmtNote1 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmtnote2(string $ArtbConfStmtNote2) Return ChildConfigAr objects filtered by the ArtbConfStmtNote2 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmtnote3(string $ArtbConfStmtNote3) Return ChildConfigAr objects filtered by the ArtbConfStmtNote3 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfinvline(int $ArtbConfInvLine) Return ChildConfigAr objects filtered by the ArtbConfInvLine column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfinvcols(int $ArtbConfInvCols) Return ChildConfigAr objects filtered by the ArtbConfInvCols column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfinvnotedef(string $ArtbConfInvNoteDef) Return ChildConfigAr objects filtered by the ArtbConfInvNoteDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcustline(int $ArtbConfCustLine) Return ChildConfigAr objects filtered by the ArtbConfCustLine column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcustcols(int $ArtbConfCustCols) Return ChildConfigAr objects filtered by the ArtbConfCustCols column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfinvsort(string $ArtbConfInvSort) Return ChildConfigAr objects filtered by the ArtbConfInvSort column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfinvnc(string $ArtbConfInvNc) Return ChildConfigAr objects filtered by the ArtbConfInvNc column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmtsort(string $ArtbConfStmtSort) Return ChildConfigAr objects filtered by the ArtbConfStmtSort column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmt0orless(string $ArtbConfStmt0OrLess) Return ChildConfigAr objects filtered by the ArtbConfStmt0OrLess column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfspdef(string $ArtbConfSpDef) Return ChildConfigAr objects filtered by the ArtbConfSpDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfwhse(string $ArtbConfWhse) Return ChildConfigAr objects filtered by the ArtbConfWhse column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfsviadef(string $ArtbConfSviaDef) Return ChildConfigAr objects filtered by the ArtbConfSviaDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconftermdef(string $ArtbConfTermDef) Return ChildConfigAr objects filtered by the ArtbConfTermDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconftaxdef(string $ArtbConfTaxDef) Return ChildConfigAr objects filtered by the ArtbConfTaxDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstmtdef(string $ArtbConfStmtDef) Return ChildConfigAr objects filtered by the ArtbConfStmtDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfallowbo(string $ArtbConfAllowBo) Return ChildConfigAr objects filtered by the ArtbConfAllowBo column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfallowfc(string $ArtbConfAllowFc) Return ChildConfigAr objects filtered by the ArtbConfAllowFc column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfusepriccode(string $ArtbConfUsePricCode) Return ChildConfigAr objects filtered by the ArtbConfUsePricCode column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfpricdef(string $ArtbConfPricDef) Return ChildConfigAr objects filtered by the ArtbConfPricDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfusecommcode(string $ArtbConfUseCommCode) Return ChildConfigAr objects filtered by the ArtbConfUseCommCode column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcommdef(string $ArtbConfCommDef) Return ChildConfigAr objects filtered by the ArtbConfCommDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcustlabl(string $ArtbConfCustLabl) Return ChildConfigAr objects filtered by the ArtbConfCustLabl column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcustreq(string $ArtbConfCustReq) Return ChildConfigAr objects filtered by the ArtbConfCustReq column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcustdef(string $ArtbConfCustDef) Return ChildConfigAr objects filtered by the ArtbConfCustDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfshiplabl(string $ArtbConfShipLabl) Return ChildConfigAr objects filtered by the ArtbConfShipLabl column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfshipreq(string $ArtbConfShipReq) Return ChildConfigAr objects filtered by the ArtbConfShipReq column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfshipdef(string $ArtbConfShipDef) Return ChildConfigAr objects filtered by the ArtbConfShipDef column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfreqdate2(int $ArtbConfReqDate2) Return ChildConfigAr objects filtered by the ArtbConfReqDate2 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfreqdate3(int $ArtbConfReqDate3) Return ChildConfigAr objects filtered by the ArtbConfReqDate3 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfreqdate4(int $ArtbConfReqDate4) Return ChildConfigAr objects filtered by the ArtbConfReqDate4 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfuseweb(string $ArtbConfUseWeb) Return ChildConfigAr objects filtered by the ArtbConfUseWeb column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfpayhstoredays(int $ArtbConfPayhStoreDays) Return ChildConfigAr objects filtered by the ArtbConfPayhStoreDays column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfbyclerk(string $ArtbConfByClerk) Return ChildConfigAr objects filtered by the ArtbConfByClerk column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2ecrwhse(string $ArtbCon2EcrWhse) Return ChildConfigAr objects filtered by the ArtbCon2EcrWhse column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfzerotermdisc(string $ArtbConfZeroTermDisc) Return ChildConfigAr objects filtered by the ArtbConfZeroTermDisc column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfuseautocidgen(string $ArtbConfUseAutoCidGen) Return ChildConfigAr objects filtered by the ArtbConfUseAutoCidGen column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfprefixlen(int $ArtbConfPrefixLen) Return ChildConfigAr objects filtered by the ArtbConfPrefixLen column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfparagecredlast(string $ArtbConfParAgeCredLast) Return ChildConfigAr objects filtered by the ArtbConfParAgeCredLast column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfincludecod(string $ArtbConfIncludeCod) Return ChildConfigAr objects filtered by the ArtbConfIncludeCod column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfaddlpricdisc(string $ArtbConfAddlPricDisc) Return ChildConfigAr objects filtered by the ArtbConfAddlPricDisc column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfapdonoehd(string $ArtbConfApdOnOehd) Return ChildConfigAr objects filtered by the ArtbConfApdOnOehd column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfnbrsp(int $ArtbConfNbrSp) Return ChildConfigAr objects filtered by the ArtbConfNbrSp column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfforcesplvl(int $ArtbConfForceSpLvl) Return ChildConfigAr objects filtered by the ArtbConfForceSpLvl column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcustgetopt(int $ArtbConfCustGetOpt) Return ChildConfigAr objects filtered by the ArtbConfCustGetOpt column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfaddicmnt(string $ArtbConfAddICmnt) Return ChildConfigAr objects filtered by the ArtbConfAddICmnt column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2appaddiscitmpdm(string $ArtbCon2AppAddiscItmPdm) Return ChildConfigAr objects filtered by the ArtbCon2AppAddiscItmPdm column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2rfndselectamt(string $ArtbCon2RfndSelectAmt) Return ChildConfigAr objects filtered by the ArtbCon2RfndSelectAmt column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2rfndglacct(string $ArtbCon2RfndGlAcct) Return ChildConfigAr objects filtered by the ArtbCon2RfndGlAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2rfndapterm(string $ArtbCon2RfndApTerm) Return ChildConfigAr objects filtered by the ArtbCon2RfndApTerm column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2rfndarterm(string $ArtbCon2RfndArTerm) Return ChildConfigAr objects filtered by the ArtbCon2RfndArTerm column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2cwoterm(string $ArtbCon2CwoTerm) Return ChildConfigAr objects filtered by the ArtbCon2CwoTerm column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2ccterm(string $ArtbCon2CcTerm) Return ChildConfigAr objects filtered by the ArtbCon2CcTerm column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2ccbatch(string $ArtbCon2CcBatch) Return ChildConfigAr objects filtered by the ArtbCon2CcBatch column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2ccsavedays(int $ArtbCon2CcSaveDays) Return ChildConfigAr objects filtered by the ArtbCon2CcSaveDays column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2aprvdccasdeposit(string $ArtbCon2AprvdCcAsDeposit) Return ChildConfigAr objects filtered by the ArtbCon2AprvdCcAsDeposit column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2cmqtysign(string $ArtbCon2CmQtySign) Return ChildConfigAr objects filtered by the ArtbCon2CmQtySign column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2bolline(int $ArtbCon2BolLine) Return ChildConfigAr objects filtered by the ArtbCon2BolLine column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2bolcols(int $ArtbCon2BolCols) Return ChildConfigAr objects filtered by the ArtbCon2BolCols column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2usesounitwght(string $ArtbCon2UseSoUnitWght) Return ChildConfigAr objects filtered by the ArtbCon2UseSoUnitWght column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2delzbal(string $ArtbCon2DelZbal) Return ChildConfigAr objects filtered by the ArtbCon2DelZbal column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfstopcustchg(int $ArtbConfStopCustChg) Return ChildConfigAr objects filtered by the ArtbConfStopCustChg column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2prospecteditcmm(string $ArtbCon2ProspectEditCmm) Return ChildConfigAr objects filtered by the ArtbCon2ProspectEditCmm column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2prospectnotestocmm(string $ArtbCon2ProspectNotesToCmm) Return ChildConfigAr objects filtered by the ArtbCon2ProspectNotesToCmm column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2ctrygetdflt(string $ArtbCon2CtryGetDflt) Return ChildConfigAr objects filtered by the ArtbCon2CtryGetDflt column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfrptbywhse(string $ArtbConfRptByWhse) Return ChildConfigAr objects filtered by the ArtbConfRptByWhse column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfappendpos(int $ArtbConfAppendPos) Return ChildConfigAr objects filtered by the ArtbConfAppendPos column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfincoasstacct(string $ArtbConfIncoAsstAcct) Return ChildConfigAr objects filtered by the ArtbConfIncoAsstAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfincoliabacct(string $ArtbConfIncoLiabAcct) Return ChildConfigAr objects filtered by the ArtbConfIncoLiabAcct column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2incoasstacct2(string $ArtbCon2IncoAsstAcct2) Return ChildConfigAr objects filtered by the ArtbCon2IncoAsstAcct2 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2incoliabacct2(string $ArtbCon2IncoLiabAcct2) Return ChildConfigAr objects filtered by the ArtbCon2IncoLiabAcct2 column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2usesurchg(string $ArtbCon2UseSurchg) Return ChildConfigAr objects filtered by the ArtbCon2UseSurchg column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2surchgitemid(string $ArtbCon2SurchgItemId) Return ChildConfigAr objects filtered by the ArtbCon2SurchgItemId column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2surchgigrupseq(int $ArtbCon2SurchgIgrupSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgIgrupSeq column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2surchgsviaseq(int $ArtbCon2SurchgSviaSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgSviaSeq column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2surchgcstidseq(int $ArtbCon2SurchgCstidSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgCstidSeq column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2surchgcstpcseq(int $ArtbCon2SurchgCstpcSeq) Return ChildConfigAr objects filtered by the ArtbCon2SurchgCstpcSeq column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfzeroinvcline(string $ArtbConfZeroInvcLine) Return ChildConfigAr objects filtered by the ArtbConfZeroInvcLine column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2zeroordrship(string $ArtbCon2ZeroOrdrShip) Return ChildConfigAr objects filtered by the ArtbCon2ZeroOrdrShip column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2zeroordrmess(string $ArtbCon2ZeroOrdrMess) Return ChildConfigAr objects filtered by the ArtbCon2ZeroOrdrMess column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbconfcashacctwhse(string $ArtbConfCashAcctWhse) Return ChildConfigAr objects filtered by the ArtbConfCashAcctWhse column
 * @method     ChildConfigAr[]|ObjectCollection findByArtbcon2mtaxfrtflagorcode(string $ArtbCon2MtaxFrtFlagOrCode) Return ChildConfigAr objects filtered by the ArtbCon2MtaxFrtFlagOrCode column
 * @method     ChildConfigAr[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigAr objects filtered by the DateUpdtd column
 * @method     ChildConfigAr[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigAr objects filtered by the TimeUpdtd column
 * @method     ChildConfigAr[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigAr objects filtered by the dummy column
 * @method     ChildConfigAr[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigArQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigArQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigAr', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigArQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigArQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildConfigAr A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbConfKey, ArtbConfGlIfac, ArtbConfInIfac, ArtbConfPcIfac, ArtbConfCcIfac, ArtbConfInvCustGl, ArtbConfFrtAcct, ArtbConfMiscAcct, ArtbConfArAcct, ArtbConfCashAcct, ArtbCon2CcCashAcct, ArtbConfFincAcct, ArtbConfDiscAcct, ArtbConfRgaCogsAcct, ArtbConfCusdAcct, ArtbConfDpstAcct, ArtbConfWriteOffAcct, ArtbCon2PresalIvtyAcct, ArtbConfFincPct, ArtbConfFincDays, ArtbConfFincMinChg, ArtbConfFincTerm, ArtbConfOver1, ArtbConfOver2, ArtbConfStmtLine, ArtbConfStmtCols, ArtbConfStmtNoteDef, ArtbConfStmtNote1, ArtbConfStmtNote2, ArtbConfStmtNote3, ArtbConfInvLine, ArtbConfInvCols, ArtbConfInvNoteDef, ArtbConfCustLine, ArtbConfCustCols, ArtbConfInvSort, ArtbConfInvNc, ArtbConfStmtSort, ArtbConfStmt0OrLess, ArtbConfSpDef, ArtbConfWhse, ArtbConfSviaDef, ArtbConfTermDef, ArtbConfTaxDef, ArtbConfStmtDef, ArtbConfAllowBo, ArtbConfAllowFc, ArtbConfUsePricCode, ArtbConfPricDef, ArtbConfUseCommCode, ArtbConfCommDef, ArtbConfCustLabl, ArtbConfCustReq, ArtbConfCustDef, ArtbConfShipLabl, ArtbConfShipReq, ArtbConfShipDef, ArtbConfReqDate2, ArtbConfReqDate3, ArtbConfReqDate4, ArtbConfUseWeb, ArtbConfPayhStoreDays, ArtbConfByClerk, ArtbCon2EcrWhse, ArtbConfZeroTermDisc, ArtbConfUseAutoCidGen, ArtbConfPrefixLen, ArtbConfParAgeCredLast, ArtbConfIncludeCod, ArtbConfAddlPricDisc, ArtbConfApdOnOehd, ArtbConfNbrSp, ArtbConfForceSpLvl, ArtbConfCustGetOpt, ArtbConfAddICmnt, ArtbCon2AppAddiscItmPdm, ArtbCon2RfndSelectAmt, ArtbCon2RfndGlAcct, ArtbCon2RfndApTerm, ArtbCon2RfndArTerm, ArtbCon2CwoTerm, ArtbCon2CcTerm, ArtbCon2CcBatch, ArtbCon2CcSaveDays, ArtbCon2AprvdCcAsDeposit, ArtbCon2CmQtySign, ArtbCon2BolLine, ArtbCon2BolCols, ArtbCon2UseSoUnitWght, ArtbCon2DelZbal, ArtbConfStopCustChg, ArtbCon2ProspectEditCmm, ArtbCon2ProspectNotesToCmm, ArtbCon2CtryGetDflt, ArtbConfRptByWhse, ArtbConfAppendPos, ArtbConfIncoAsstAcct, ArtbConfIncoLiabAcct, ArtbCon2IncoAsstAcct2, ArtbCon2IncoLiabAcct2, ArtbCon2UseSurchg, ArtbCon2SurchgItemId, ArtbCon2SurchgIgrupSeq, ArtbCon2SurchgSviaSeq, ArtbCon2SurchgCstidSeq, ArtbCon2SurchgCstpcSeq, ArtbConfZeroInvcLine, ArtbCon2ZeroOrdrShip, ArtbCon2ZeroOrdrMess, ArtbConfCashAcctWhse, ArtbCon2MtaxFrtFlagOrCode, DateUpdtd, TimeUpdtd, dummy FROM ar_config WHERE ArtbConfKey = :p0';
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $keys, Criteria::IN);
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
     * @param     mixed $artbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfkey($artbconfkey = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFKEY, $artbconfkey, $comparison);
    }

    /**
     * Filter the query on the ArtbConfGlIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfglifac('fooValue');   // WHERE ArtbConfGlIfac = 'fooValue'
     * $query->filterByArtbconfglifac('%fooValue%', Criteria::LIKE); // WHERE ArtbConfGlIfac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfglifac The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfglifac($artbconfglifac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfglifac)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFGLIFAC, $artbconfglifac, $comparison);
    }

    /**
     * Filter the query on the ArtbConfInIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinifac('fooValue');   // WHERE ArtbConfInIfac = 'fooValue'
     * $query->filterByArtbconfinifac('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInIfac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfinifac The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfinifac($artbconfinifac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinifac)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINIFAC, $artbconfinifac, $comparison);
    }

    /**
     * Filter the query on the ArtbConfPcIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfpcifac('fooValue');   // WHERE ArtbConfPcIfac = 'fooValue'
     * $query->filterByArtbconfpcifac('%fooValue%', Criteria::LIKE); // WHERE ArtbConfPcIfac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfpcifac The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfpcifac($artbconfpcifac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfpcifac)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPCIFAC, $artbconfpcifac, $comparison);
    }

    /**
     * Filter the query on the ArtbConfCcIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfccifac('fooValue');   // WHERE ArtbConfCcIfac = 'fooValue'
     * $query->filterByArtbconfccifac('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCcIfac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfccifac The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfccifac($artbconfccifac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfccifac)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCCIFAC, $artbconfccifac, $comparison);
    }

    /**
     * Filter the query on the ArtbConfInvCustGl column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvcustgl('fooValue');   // WHERE ArtbConfInvCustGl = 'fooValue'
     * $query->filterByArtbconfinvcustgl('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInvCustGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfinvcustgl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfinvcustgl($artbconfinvcustgl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinvcustgl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVCUSTGL, $artbconfinvcustgl, $comparison);
    }

    /**
     * Filter the query on the ArtbConfFrtAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffrtacct('fooValue');   // WHERE ArtbConfFrtAcct = 'fooValue'
     * $query->filterByArtbconffrtacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfFrtAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconffrtacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconffrtacct($artbconffrtacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconffrtacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFRTACCT, $artbconffrtacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfMiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfmiscacct('fooValue');   // WHERE ArtbConfMiscAcct = 'fooValue'
     * $query->filterByArtbconfmiscacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfMiscAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfmiscacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfmiscacct($artbconfmiscacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfmiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFMISCACCT, $artbconfmiscacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfArAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfaracct('fooValue');   // WHERE ArtbConfArAcct = 'fooValue'
     * $query->filterByArtbconfaracct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfArAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfaracct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfaracct($artbconfaracct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfaracct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFARACCT, $artbconfaracct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcashacct('fooValue');   // WHERE ArtbConfCashAcct = 'fooValue'
     * $query->filterByArtbconfcashacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCashAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfcashacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcashacct($artbconfcashacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcashacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCASHACCT, $artbconfcashacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2CcCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2cccashacct('fooValue');   // WHERE ArtbCon2CcCashAcct = 'fooValue'
     * $query->filterByArtbcon2cccashacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CcCashAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2cccashacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2cccashacct($artbcon2cccashacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2cccashacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCCASHACCT, $artbcon2cccashacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfFincAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffincacct('fooValue');   // WHERE ArtbConfFincAcct = 'fooValue'
     * $query->filterByArtbconffincacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfFincAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconffincacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconffincacct($artbconffincacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconffincacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCACCT, $artbconffincacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfDiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfdiscacct('fooValue');   // WHERE ArtbConfDiscAcct = 'fooValue'
     * $query->filterByArtbconfdiscacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfDiscAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfdiscacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfdiscacct($artbconfdiscacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfdiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFDISCACCT, $artbconfdiscacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfRgaCogsAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfrgacogsacct('fooValue');   // WHERE ArtbConfRgaCogsAcct = 'fooValue'
     * $query->filterByArtbconfrgacogsacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfRgaCogsAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfrgacogsacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfrgacogsacct($artbconfrgacogsacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfrgacogsacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFRGACOGSACCT, $artbconfrgacogsacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfCusdAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcusdacct('fooValue');   // WHERE ArtbConfCusdAcct = 'fooValue'
     * $query->filterByArtbconfcusdacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCusdAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfcusdacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcusdacct($artbconfcusdacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcusdacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSDACCT, $artbconfcusdacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfDpstAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfdpstacct('fooValue');   // WHERE ArtbConfDpstAcct = 'fooValue'
     * $query->filterByArtbconfdpstacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfDpstAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfdpstacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfdpstacct($artbconfdpstacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfdpstacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFDPSTACCT, $artbconfdpstacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfWriteOffAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfwriteoffacct('fooValue');   // WHERE ArtbConfWriteOffAcct = 'fooValue'
     * $query->filterByArtbconfwriteoffacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfWriteOffAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfwriteoffacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfwriteoffacct($artbconfwriteoffacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfwriteoffacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT, $artbconfwriteoffacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2PresalIvtyAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2presalivtyacct('fooValue');   // WHERE ArtbCon2PresalIvtyAcct = 'fooValue'
     * $query->filterByArtbcon2presalivtyacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2PresalIvtyAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2presalivtyacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2presalivtyacct($artbcon2presalivtyacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2presalivtyacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT, $artbcon2presalivtyacct, $comparison);
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
     * @param     mixed $artbconffincpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconffincpct($artbconffincpct = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCPCT, $artbconffincpct, $comparison);
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
     * @param     mixed $artbconffincdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconffincdays($artbconffincdays = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCDAYS, $artbconffincdays, $comparison);
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
     * @param     mixed $artbconffincminchg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconffincminchg($artbconffincminchg = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCMINCHG, $artbconffincminchg, $comparison);
    }

    /**
     * Filter the query on the ArtbConfFincTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconffincterm('fooValue');   // WHERE ArtbConfFincTerm = 'fooValue'
     * $query->filterByArtbconffincterm('%fooValue%', Criteria::LIKE); // WHERE ArtbConfFincTerm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconffincterm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconffincterm($artbconffincterm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconffincterm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFINCTERM, $artbconffincterm, $comparison);
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
     * @param     mixed $artbconfover1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfover1($artbconfover1 = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFOVER1, $artbconfover1, $comparison);
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
     * @param     mixed $artbconfover2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfover2($artbconfover2 = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFOVER2, $artbconfover2, $comparison);
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
     * @param     mixed $artbconfstmtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmtline($artbconfstmtline = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTLINE, $artbconfstmtline, $comparison);
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
     * @param     mixed $artbconfstmtcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmtcols($artbconfstmtcols = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTCOLS, $artbconfstmtcols, $comparison);
    }

    /**
     * Filter the query on the ArtbConfStmtNoteDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtnotedef('fooValue');   // WHERE ArtbConfStmtNoteDef = 'fooValue'
     * $query->filterByArtbconfstmtnotedef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtNoteDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfstmtnotedef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmtnotedef($artbconfstmtnotedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtnotedef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF, $artbconfstmtnotedef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfStmtNote1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtnote1('fooValue');   // WHERE ArtbConfStmtNote1 = 'fooValue'
     * $query->filterByArtbconfstmtnote1('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtNote1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfstmtnote1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmtnote1($artbconfstmtnote1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtnote1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTNOTE1, $artbconfstmtnote1, $comparison);
    }

    /**
     * Filter the query on the ArtbConfStmtNote2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtnote2('fooValue');   // WHERE ArtbConfStmtNote2 = 'fooValue'
     * $query->filterByArtbconfstmtnote2('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtNote2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfstmtnote2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmtnote2($artbconfstmtnote2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtnote2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTNOTE2, $artbconfstmtnote2, $comparison);
    }

    /**
     * Filter the query on the ArtbConfStmtNote3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtnote3('fooValue');   // WHERE ArtbConfStmtNote3 = 'fooValue'
     * $query->filterByArtbconfstmtnote3('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtNote3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfstmtnote3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmtnote3($artbconfstmtnote3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtnote3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTNOTE3, $artbconfstmtnote3, $comparison);
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
     * @param     mixed $artbconfinvline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfinvline($artbconfinvline = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVLINE, $artbconfinvline, $comparison);
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
     * @param     mixed $artbconfinvcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfinvcols($artbconfinvcols = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVCOLS, $artbconfinvcols, $comparison);
    }

    /**
     * Filter the query on the ArtbConfInvNoteDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvnotedef('fooValue');   // WHERE ArtbConfInvNoteDef = 'fooValue'
     * $query->filterByArtbconfinvnotedef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInvNoteDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfinvnotedef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfinvnotedef($artbconfinvnotedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinvnotedef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVNOTEDEF, $artbconfinvnotedef, $comparison);
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
     * @param     mixed $artbconfcustline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcustline($artbconfcustline = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTLINE, $artbconfcustline, $comparison);
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
     * @param     mixed $artbconfcustcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcustcols($artbconfcustcols = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTCOLS, $artbconfcustcols, $comparison);
    }

    /**
     * Filter the query on the ArtbConfInvSort column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvsort('fooValue');   // WHERE ArtbConfInvSort = 'fooValue'
     * $query->filterByArtbconfinvsort('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInvSort LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfinvsort The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfinvsort($artbconfinvsort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinvsort)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVSORT, $artbconfinvsort, $comparison);
    }

    /**
     * Filter the query on the ArtbConfInvNc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfinvnc('fooValue');   // WHERE ArtbConfInvNc = 'fooValue'
     * $query->filterByArtbconfinvnc('%fooValue%', Criteria::LIKE); // WHERE ArtbConfInvNc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfinvnc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfinvnc($artbconfinvnc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfinvnc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINVNC, $artbconfinvnc, $comparison);
    }

    /**
     * Filter the query on the ArtbConfStmtSort column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtsort('fooValue');   // WHERE ArtbConfStmtSort = 'fooValue'
     * $query->filterByArtbconfstmtsort('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtSort LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfstmtsort The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmtsort($artbconfstmtsort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtsort)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTSORT, $artbconfstmtsort, $comparison);
    }

    /**
     * Filter the query on the ArtbConfStmt0OrLess column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmt0orless('fooValue');   // WHERE ArtbConfStmt0OrLess = 'fooValue'
     * $query->filterByArtbconfstmt0orless('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmt0OrLess LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfstmt0orless The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmt0orless($artbconfstmt0orless = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmt0orless)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS, $artbconfstmt0orless, $comparison);
    }

    /**
     * Filter the query on the ArtbConfSpDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfspdef('fooValue');   // WHERE ArtbConfSpDef = 'fooValue'
     * $query->filterByArtbconfspdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfSpDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfspdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfspdef($artbconfspdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfspdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSPDEF, $artbconfspdef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfwhse('fooValue');   // WHERE ArtbConfWhse = 'fooValue'
     * $query->filterByArtbconfwhse('%fooValue%', Criteria::LIKE); // WHERE ArtbConfWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfwhse($artbconfwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFWHSE, $artbconfwhse, $comparison);
    }

    /**
     * Filter the query on the ArtbConfSviaDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfsviadef('fooValue');   // WHERE ArtbConfSviaDef = 'fooValue'
     * $query->filterByArtbconfsviadef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfSviaDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfsviadef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfsviadef($artbconfsviadef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfsviadef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSVIADEF, $artbconfsviadef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfTermDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconftermdef('fooValue');   // WHERE ArtbConfTermDef = 'fooValue'
     * $query->filterByArtbconftermdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfTermDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconftermdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconftermdef($artbconftermdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconftermdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFTERMDEF, $artbconftermdef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfTaxDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconftaxdef('fooValue');   // WHERE ArtbConfTaxDef = 'fooValue'
     * $query->filterByArtbconftaxdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfTaxDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconftaxdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconftaxdef($artbconftaxdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconftaxdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFTAXDEF, $artbconftaxdef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfStmtDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfstmtdef('fooValue');   // WHERE ArtbConfStmtDef = 'fooValue'
     * $query->filterByArtbconfstmtdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfStmtDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfstmtdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstmtdef($artbconfstmtdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfstmtdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTMTDEF, $artbconfstmtdef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfAllowBo column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfallowbo('fooValue');   // WHERE ArtbConfAllowBo = 'fooValue'
     * $query->filterByArtbconfallowbo('%fooValue%', Criteria::LIKE); // WHERE ArtbConfAllowBo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfallowbo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfallowbo($artbconfallowbo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfallowbo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFALLOWBO, $artbconfallowbo, $comparison);
    }

    /**
     * Filter the query on the ArtbConfAllowFc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfallowfc('fooValue');   // WHERE ArtbConfAllowFc = 'fooValue'
     * $query->filterByArtbconfallowfc('%fooValue%', Criteria::LIKE); // WHERE ArtbConfAllowFc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfallowfc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfallowfc($artbconfallowfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfallowfc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFALLOWFC, $artbconfallowfc, $comparison);
    }

    /**
     * Filter the query on the ArtbConfUsePricCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfusepriccode('fooValue');   // WHERE ArtbConfUsePricCode = 'fooValue'
     * $query->filterByArtbconfusepriccode('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUsePricCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfusepriccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfusepriccode($artbconfusepriccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfusepriccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSEPRICCODE, $artbconfusepriccode, $comparison);
    }

    /**
     * Filter the query on the ArtbConfPricDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfpricdef('fooValue');   // WHERE ArtbConfPricDef = 'fooValue'
     * $query->filterByArtbconfpricdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfPricDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfpricdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfpricdef($artbconfpricdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfpricdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPRICDEF, $artbconfpricdef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfUseCommCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfusecommcode('fooValue');   // WHERE ArtbConfUseCommCode = 'fooValue'
     * $query->filterByArtbconfusecommcode('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUseCommCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfusecommcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfusecommcode($artbconfusecommcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfusecommcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSECOMMCODE, $artbconfusecommcode, $comparison);
    }

    /**
     * Filter the query on the ArtbConfCommDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcommdef('fooValue');   // WHERE ArtbConfCommDef = 'fooValue'
     * $query->filterByArtbconfcommdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCommDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfcommdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcommdef($artbconfcommdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcommdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCOMMDEF, $artbconfcommdef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfCustLabl column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustlabl('fooValue');   // WHERE ArtbConfCustLabl = 'fooValue'
     * $query->filterByArtbconfcustlabl('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCustLabl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfcustlabl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcustlabl($artbconfcustlabl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcustlabl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTLABL, $artbconfcustlabl, $comparison);
    }

    /**
     * Filter the query on the ArtbConfCustReq column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustreq('fooValue');   // WHERE ArtbConfCustReq = 'fooValue'
     * $query->filterByArtbconfcustreq('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCustReq LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfcustreq The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcustreq($artbconfcustreq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcustreq)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTREQ, $artbconfcustreq, $comparison);
    }

    /**
     * Filter the query on the ArtbConfCustDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcustdef('fooValue');   // WHERE ArtbConfCustDef = 'fooValue'
     * $query->filterByArtbconfcustdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCustDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfcustdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcustdef($artbconfcustdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcustdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTDEF, $artbconfcustdef, $comparison);
    }

    /**
     * Filter the query on the ArtbConfShipLabl column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfshiplabl('fooValue');   // WHERE ArtbConfShipLabl = 'fooValue'
     * $query->filterByArtbconfshiplabl('%fooValue%', Criteria::LIKE); // WHERE ArtbConfShipLabl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfshiplabl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfshiplabl($artbconfshiplabl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfshiplabl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSHIPLABL, $artbconfshiplabl, $comparison);
    }

    /**
     * Filter the query on the ArtbConfShipReq column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfshipreq('fooValue');   // WHERE ArtbConfShipReq = 'fooValue'
     * $query->filterByArtbconfshipreq('%fooValue%', Criteria::LIKE); // WHERE ArtbConfShipReq LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfshipreq The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfshipreq($artbconfshipreq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfshipreq)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSHIPREQ, $artbconfshipreq, $comparison);
    }

    /**
     * Filter the query on the ArtbConfShipDef column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfshipdef('fooValue');   // WHERE ArtbConfShipDef = 'fooValue'
     * $query->filterByArtbconfshipdef('%fooValue%', Criteria::LIKE); // WHERE ArtbConfShipDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfshipdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfshipdef($artbconfshipdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfshipdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSHIPDEF, $artbconfshipdef, $comparison);
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
     * @param     mixed $artbconfreqdate2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfreqdate2($artbconfreqdate2 = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE2, $artbconfreqdate2, $comparison);
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
     * @param     mixed $artbconfreqdate3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfreqdate3($artbconfreqdate3 = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE3, $artbconfreqdate3, $comparison);
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
     * @param     mixed $artbconfreqdate4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfreqdate4($artbconfreqdate4 = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFREQDATE4, $artbconfreqdate4, $comparison);
    }

    /**
     * Filter the query on the ArtbConfUseWeb column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfuseweb('fooValue');   // WHERE ArtbConfUseWeb = 'fooValue'
     * $query->filterByArtbconfuseweb('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUseWeb LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfuseweb The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfuseweb($artbconfuseweb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfuseweb)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSEWEB, $artbconfuseweb, $comparison);
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
     * @param     mixed $artbconfpayhstoredays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfpayhstoredays($artbconfpayhstoredays = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS, $artbconfpayhstoredays, $comparison);
    }

    /**
     * Filter the query on the ArtbConfByClerk column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfbyclerk('fooValue');   // WHERE ArtbConfByClerk = 'fooValue'
     * $query->filterByArtbconfbyclerk('%fooValue%', Criteria::LIKE); // WHERE ArtbConfByClerk LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfbyclerk The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfbyclerk($artbconfbyclerk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfbyclerk)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFBYCLERK, $artbconfbyclerk, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2EcrWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ecrwhse('fooValue');   // WHERE ArtbCon2EcrWhse = 'fooValue'
     * $query->filterByArtbcon2ecrwhse('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2EcrWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2ecrwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2ecrwhse($artbcon2ecrwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ecrwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2ECRWHSE, $artbcon2ecrwhse, $comparison);
    }

    /**
     * Filter the query on the ArtbConfZeroTermDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfzerotermdisc('fooValue');   // WHERE ArtbConfZeroTermDisc = 'fooValue'
     * $query->filterByArtbconfzerotermdisc('%fooValue%', Criteria::LIKE); // WHERE ArtbConfZeroTermDisc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfzerotermdisc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfzerotermdisc($artbconfzerotermdisc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfzerotermdisc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFZEROTERMDISC, $artbconfzerotermdisc, $comparison);
    }

    /**
     * Filter the query on the ArtbConfUseAutoCidGen column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfuseautocidgen('fooValue');   // WHERE ArtbConfUseAutoCidGen = 'fooValue'
     * $query->filterByArtbconfuseautocidgen('%fooValue%', Criteria::LIKE); // WHERE ArtbConfUseAutoCidGen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfuseautocidgen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfuseautocidgen($artbconfuseautocidgen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfuseautocidgen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN, $artbconfuseautocidgen, $comparison);
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
     * @param     mixed $artbconfprefixlen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfprefixlen($artbconfprefixlen = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPREFIXLEN, $artbconfprefixlen, $comparison);
    }

    /**
     * Filter the query on the ArtbConfParAgeCredLast column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfparagecredlast('fooValue');   // WHERE ArtbConfParAgeCredLast = 'fooValue'
     * $query->filterByArtbconfparagecredlast('%fooValue%', Criteria::LIKE); // WHERE ArtbConfParAgeCredLast LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfparagecredlast The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfparagecredlast($artbconfparagecredlast = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfparagecredlast)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST, $artbconfparagecredlast, $comparison);
    }

    /**
     * Filter the query on the ArtbConfIncludeCod column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfincludecod('fooValue');   // WHERE ArtbConfIncludeCod = 'fooValue'
     * $query->filterByArtbconfincludecod('%fooValue%', Criteria::LIKE); // WHERE ArtbConfIncludeCod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfincludecod The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfincludecod($artbconfincludecod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfincludecod)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINCLUDECOD, $artbconfincludecod, $comparison);
    }

    /**
     * Filter the query on the ArtbConfAddlPricDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfaddlpricdisc('fooValue');   // WHERE ArtbConfAddlPricDisc = 'fooValue'
     * $query->filterByArtbconfaddlpricdisc('%fooValue%', Criteria::LIKE); // WHERE ArtbConfAddlPricDisc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfaddlpricdisc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfaddlpricdisc($artbconfaddlpricdisc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfaddlpricdisc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFADDLPRICDISC, $artbconfaddlpricdisc, $comparison);
    }

    /**
     * Filter the query on the ArtbConfApdOnOehd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfapdonoehd('fooValue');   // WHERE ArtbConfApdOnOehd = 'fooValue'
     * $query->filterByArtbconfapdonoehd('%fooValue%', Criteria::LIKE); // WHERE ArtbConfApdOnOehd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfapdonoehd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfapdonoehd($artbconfapdonoehd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfapdonoehd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFAPDONOEHD, $artbconfapdonoehd, $comparison);
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
     * @param     mixed $artbconfnbrsp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfnbrsp($artbconfnbrsp = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFNBRSP, $artbconfnbrsp, $comparison);
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
     * @param     mixed $artbconfforcesplvl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfforcesplvl($artbconfforcesplvl = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFFORCESPLVL, $artbconfforcesplvl, $comparison);
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
     * @param     mixed $artbconfcustgetopt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcustgetopt($artbconfcustgetopt = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCUSTGETOPT, $artbconfcustgetopt, $comparison);
    }

    /**
     * Filter the query on the ArtbConfAddICmnt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfaddicmnt('fooValue');   // WHERE ArtbConfAddICmnt = 'fooValue'
     * $query->filterByArtbconfaddicmnt('%fooValue%', Criteria::LIKE); // WHERE ArtbConfAddICmnt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfaddicmnt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfaddicmnt($artbconfaddicmnt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfaddicmnt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFADDICMNT, $artbconfaddicmnt, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2AppAddiscItmPdm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2appaddiscitmpdm('fooValue');   // WHERE ArtbCon2AppAddiscItmPdm = 'fooValue'
     * $query->filterByArtbcon2appaddiscitmpdm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2AppAddiscItmPdm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2appaddiscitmpdm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2appaddiscitmpdm($artbcon2appaddiscitmpdm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2appaddiscitmpdm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM, $artbcon2appaddiscitmpdm, $comparison);
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
     * @param     mixed $artbcon2rfndselectamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2rfndselectamt($artbcon2rfndselectamt = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT, $artbcon2rfndselectamt, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2RfndGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2rfndglacct('fooValue');   // WHERE ArtbCon2RfndGlAcct = 'fooValue'
     * $query->filterByArtbcon2rfndglacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2RfndGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2rfndglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2rfndglacct($artbcon2rfndglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2rfndglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDGLACCT, $artbcon2rfndglacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2RfndApTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2rfndapterm('fooValue');   // WHERE ArtbCon2RfndApTerm = 'fooValue'
     * $query->filterByArtbcon2rfndapterm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2RfndApTerm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2rfndapterm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2rfndapterm($artbcon2rfndapterm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2rfndapterm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDAPTERM, $artbcon2rfndapterm, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2RfndArTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2rfndarterm('fooValue');   // WHERE ArtbCon2RfndArTerm = 'fooValue'
     * $query->filterByArtbcon2rfndarterm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2RfndArTerm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2rfndarterm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2rfndarterm($artbcon2rfndarterm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2rfndarterm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2RFNDARTERM, $artbcon2rfndarterm, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2CwoTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2cwoterm('fooValue');   // WHERE ArtbCon2CwoTerm = 'fooValue'
     * $query->filterByArtbcon2cwoterm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CwoTerm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2cwoterm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2cwoterm($artbcon2cwoterm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2cwoterm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CWOTERM, $artbcon2cwoterm, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2CcTerm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ccterm('fooValue');   // WHERE ArtbCon2CcTerm = 'fooValue'
     * $query->filterByArtbcon2ccterm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CcTerm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2ccterm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2ccterm($artbcon2ccterm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ccterm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCTERM, $artbcon2ccterm, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2CcBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ccbatch('fooValue');   // WHERE ArtbCon2CcBatch = 'fooValue'
     * $query->filterByArtbcon2ccbatch('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CcBatch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2ccbatch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2ccbatch($artbcon2ccbatch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ccbatch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCBATCH, $artbcon2ccbatch, $comparison);
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
     * @param     mixed $artbcon2ccsavedays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2ccsavedays($artbcon2ccsavedays = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS, $artbcon2ccsavedays, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2AprvdCcAsDeposit column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2aprvdccasdeposit('fooValue');   // WHERE ArtbCon2AprvdCcAsDeposit = 'fooValue'
     * $query->filterByArtbcon2aprvdccasdeposit('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2AprvdCcAsDeposit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2aprvdccasdeposit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2aprvdccasdeposit($artbcon2aprvdccasdeposit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2aprvdccasdeposit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT, $artbcon2aprvdccasdeposit, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2CmQtySign column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2cmqtysign('fooValue');   // WHERE ArtbCon2CmQtySign = 'fooValue'
     * $query->filterByArtbcon2cmqtysign('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CmQtySign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2cmqtysign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2cmqtysign($artbcon2cmqtysign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2cmqtysign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CMQTYSIGN, $artbcon2cmqtysign, $comparison);
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
     * @param     mixed $artbcon2bolline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2bolline($artbcon2bolline = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2BOLLINE, $artbcon2bolline, $comparison);
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
     * @param     mixed $artbcon2bolcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2bolcols($artbcon2bolcols = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2BOLCOLS, $artbcon2bolcols, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2UseSoUnitWght column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2usesounitwght('fooValue');   // WHERE ArtbCon2UseSoUnitWght = 'fooValue'
     * $query->filterByArtbcon2usesounitwght('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2UseSoUnitWght LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2usesounitwght The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2usesounitwght($artbcon2usesounitwght = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2usesounitwght)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT, $artbcon2usesounitwght, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2DelZbal column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2delzbal('fooValue');   // WHERE ArtbCon2DelZbal = 'fooValue'
     * $query->filterByArtbcon2delzbal('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2DelZbal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2delzbal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2delzbal($artbcon2delzbal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2delzbal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2DELZBAL, $artbcon2delzbal, $comparison);
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
     * @param     mixed $artbconfstopcustchg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfstopcustchg($artbconfstopcustchg = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG, $artbconfstopcustchg, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2ProspectEditCmm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2prospecteditcmm('fooValue');   // WHERE ArtbCon2ProspectEditCmm = 'fooValue'
     * $query->filterByArtbcon2prospecteditcmm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2ProspectEditCmm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2prospecteditcmm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2prospecteditcmm($artbcon2prospecteditcmm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2prospecteditcmm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM, $artbcon2prospecteditcmm, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2ProspectNotesToCmm column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2prospectnotestocmm('fooValue');   // WHERE ArtbCon2ProspectNotesToCmm = 'fooValue'
     * $query->filterByArtbcon2prospectnotestocmm('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2ProspectNotesToCmm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2prospectnotestocmm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2prospectnotestocmm($artbcon2prospectnotestocmm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2prospectnotestocmm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM, $artbcon2prospectnotestocmm, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2CtryGetDflt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2ctrygetdflt('fooValue');   // WHERE ArtbCon2CtryGetDflt = 'fooValue'
     * $query->filterByArtbcon2ctrygetdflt('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2CtryGetDflt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2ctrygetdflt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2ctrygetdflt($artbcon2ctrygetdflt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2ctrygetdflt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT, $artbcon2ctrygetdflt, $comparison);
    }

    /**
     * Filter the query on the ArtbConfRptByWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfrptbywhse('fooValue');   // WHERE ArtbConfRptByWhse = 'fooValue'
     * $query->filterByArtbconfrptbywhse('%fooValue%', Criteria::LIKE); // WHERE ArtbConfRptByWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfrptbywhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfrptbywhse($artbconfrptbywhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfrptbywhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFRPTBYWHSE, $artbconfrptbywhse, $comparison);
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
     * @param     mixed $artbconfappendpos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfappendpos($artbconfappendpos = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFAPPENDPOS, $artbconfappendpos, $comparison);
    }

    /**
     * Filter the query on the ArtbConfIncoAsstAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfincoasstacct('fooValue');   // WHERE ArtbConfIncoAsstAcct = 'fooValue'
     * $query->filterByArtbconfincoasstacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfIncoAsstAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfincoasstacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfincoasstacct($artbconfincoasstacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfincoasstacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINCOASSTACCT, $artbconfincoasstacct, $comparison);
    }

    /**
     * Filter the query on the ArtbConfIncoLiabAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfincoliabacct('fooValue');   // WHERE ArtbConfIncoLiabAcct = 'fooValue'
     * $query->filterByArtbconfincoliabacct('%fooValue%', Criteria::LIKE); // WHERE ArtbConfIncoLiabAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfincoliabacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfincoliabacct($artbconfincoliabacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfincoliabacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFINCOLIABACCT, $artbconfincoliabacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2IncoAsstAcct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2incoasstacct2('fooValue');   // WHERE ArtbCon2IncoAsstAcct2 = 'fooValue'
     * $query->filterByArtbcon2incoasstacct2('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2IncoAsstAcct2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2incoasstacct2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2incoasstacct2($artbcon2incoasstacct2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2incoasstacct2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2, $artbcon2incoasstacct2, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2IncoLiabAcct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2incoliabacct2('fooValue');   // WHERE ArtbCon2IncoLiabAcct2 = 'fooValue'
     * $query->filterByArtbcon2incoliabacct2('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2IncoLiabAcct2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2incoliabacct2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2incoliabacct2($artbcon2incoliabacct2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2incoliabacct2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2, $artbcon2incoliabacct2, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2UseSurchg column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2usesurchg('fooValue');   // WHERE ArtbCon2UseSurchg = 'fooValue'
     * $query->filterByArtbcon2usesurchg('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2UseSurchg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2usesurchg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2usesurchg($artbcon2usesurchg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2usesurchg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2USESURCHG, $artbcon2usesurchg, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2SurchgItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2surchgitemid('fooValue');   // WHERE ArtbCon2SurchgItemId = 'fooValue'
     * $query->filterByArtbcon2surchgitemid('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2SurchgItemId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2surchgitemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2surchgitemid($artbcon2surchgitemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2surchgitemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGITEMID, $artbcon2surchgitemid, $comparison);
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
     * @param     mixed $artbcon2surchgigrupseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2surchgigrupseq($artbcon2surchgigrupseq = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ, $artbcon2surchgigrupseq, $comparison);
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
     * @param     mixed $artbcon2surchgsviaseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2surchgsviaseq($artbcon2surchgsviaseq = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ, $artbcon2surchgsviaseq, $comparison);
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
     * @param     mixed $artbcon2surchgcstidseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2surchgcstidseq($artbcon2surchgcstidseq = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ, $artbcon2surchgcstidseq, $comparison);
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
     * @param     mixed $artbcon2surchgcstpcseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2surchgcstpcseq($artbcon2surchgcstpcseq = null, $comparison = null)
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

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ, $artbcon2surchgcstpcseq, $comparison);
    }

    /**
     * Filter the query on the ArtbConfZeroInvcLine column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfzeroinvcline('fooValue');   // WHERE ArtbConfZeroInvcLine = 'fooValue'
     * $query->filterByArtbconfzeroinvcline('%fooValue%', Criteria::LIKE); // WHERE ArtbConfZeroInvcLine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfzeroinvcline The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfzeroinvcline($artbconfzeroinvcline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfzeroinvcline)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFZEROINVCLINE, $artbconfzeroinvcline, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2ZeroOrdrShip column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2zeroordrship('fooValue');   // WHERE ArtbCon2ZeroOrdrShip = 'fooValue'
     * $query->filterByArtbcon2zeroordrship('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2ZeroOrdrShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2zeroordrship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2zeroordrship($artbcon2zeroordrship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2zeroordrship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP, $artbcon2zeroordrship, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2ZeroOrdrMess column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2zeroordrmess('fooValue');   // WHERE ArtbCon2ZeroOrdrMess = 'fooValue'
     * $query->filterByArtbcon2zeroordrmess('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2ZeroOrdrMess LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2zeroordrmess The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2zeroordrmess($artbcon2zeroordrmess = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2zeroordrmess)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS, $artbcon2zeroordrmess, $comparison);
    }

    /**
     * Filter the query on the ArtbConfCashAcctWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbconfcashacctwhse('fooValue');   // WHERE ArtbConfCashAcctWhse = 'fooValue'
     * $query->filterByArtbconfcashacctwhse('%fooValue%', Criteria::LIKE); // WHERE ArtbConfCashAcctWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbconfcashacctwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbconfcashacctwhse($artbconfcashacctwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbconfcashacctwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE, $artbconfcashacctwhse, $comparison);
    }

    /**
     * Filter the query on the ArtbCon2MtaxFrtFlagOrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcon2mtaxfrtflagorcode('fooValue');   // WHERE ArtbCon2MtaxFrtFlagOrCode = 'fooValue'
     * $query->filterByArtbcon2mtaxfrtflagorcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCon2MtaxFrtFlagOrCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcon2mtaxfrtflagorcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByArtbcon2mtaxfrtflagorcode($artbcon2mtaxfrtflagorcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcon2mtaxfrtflagorcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE, $artbcon2mtaxfrtflagorcode, $comparison);
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateupdtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeupdtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dummy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigArTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigAr $configAr Object to remove from the list of results
     *
     * @return $this|ChildConfigArQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // ConfigArQuery
