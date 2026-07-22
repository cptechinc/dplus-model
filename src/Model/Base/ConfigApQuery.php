<?php

namespace Base;

use \ConfigAp as ChildConfigAp;
use \ConfigApQuery as ChildConfigApQuery;
use \Exception;
use \PDO;
use Map\ConfigApTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ap_config` table.
 *
 * @method     ChildConfigApQuery orderByAptbconfkey($order = Criteria::ASC) Order by the AptbConfKey column
 * @method     ChildConfigApQuery orderByAptbconfglifac($order = Criteria::ASC) Order by the AptbConfGlIfac column
 * @method     ChildConfigApQuery orderByAptbconfinifac($order = Criteria::ASC) Order by the AptbConfInIfac column
 * @method     ChildConfigApQuery orderByAptbconfsoifac($order = Criteria::ASC) Order by the AptbConfSoIfac column
 * @method     ChildConfigApQuery orderByAptbconfpoifac($order = Criteria::ASC) Order by the AptbConfPoIfac column
 * @method     ChildConfigApQuery orderByAptbconffrtacct($order = Criteria::ASC) Order by the AptbConfFrtAcct column
 * @method     ChildConfigApQuery orderByAptbconfmiscacct($order = Criteria::ASC) Order by the AptbConfMiscAcct column
 * @method     ChildConfigApQuery orderByAptbconfapacct($order = Criteria::ASC) Order by the AptbConfApAcct column
 * @method     ChildConfigApQuery orderByAptbconfcashacct($order = Criteria::ASC) Order by the AptbConfCashAcct column
 * @method     ChildConfigApQuery orderByAptbconfdiscacct($order = Criteria::ASC) Order by the AptbConfDiscAcct column
 * @method     ChildConfigApQuery orderByAptbconftaxacct($order = Criteria::ASC) Order by the AptbConfTaxAcct column
 * @method     ChildConfigApQuery orderByAptbconfpuracct($order = Criteria::ASC) Order by the AptbConfPurAcct column
 * @method     ChildConfigApQuery orderByAptbconfvaracct($order = Criteria::ASC) Order by the AptbConfVarAcct column
 * @method     ChildConfigApQuery orderByAptbconfvenddisc($order = Criteria::ASC) Order by the AptbConfVendDisc column
 * @method     ChildConfigApQuery orderByAptbconfapinvvaracct($order = Criteria::ASC) Order by the AptbConfApInvVarAcct column
 * @method     ChildConfigApQuery orderByAptbconfuseroyal($order = Criteria::ASC) Order by the AptbConfUseRoyal column
 * @method     ChildConfigApQuery orderByAptbconfdefbuyrcode($order = Criteria::ASC) Order by the AptbConfDefBuyrCode column
 * @method     ChildConfigApQuery orderByAptbconfdeftermcode($order = Criteria::ASC) Order by the AptbConfDefTermCode column
 * @method     ChildConfigApQuery orderByAptbconfdefsviacode($order = Criteria::ASC) Order by the AptbConfDefSviaCode column
 * @method     ChildConfigApQuery orderByAptbconfdeftypecode($order = Criteria::ASC) Order by the AptbConfDefTypeCode column
 * @method     ChildConfigApQuery orderByAptbconfvendline($order = Criteria::ASC) Order by the AptbConfVendLine column
 * @method     ChildConfigApQuery orderByAptbconfvendcols($order = Criteria::ASC) Order by the AptbConfVendCols column
 * @method     ChildConfigApQuery orderByAptbconfpoline($order = Criteria::ASC) Order by the AptbConfPoLine column
 * @method     ChildConfigApQuery orderByAptbconfpocols($order = Criteria::ASC) Order by the AptbConfPoCols column
 * @method     ChildConfigApQuery orderByAptbconfvendgetopt($order = Criteria::ASC) Order by the AptbConfVendGetOpt column
 * @method     ChildConfigApQuery orderByAptbconfpaytoshipfr($order = Criteria::ASC) Order by the AptbConfPaytoShipfr column
 * @method     ChildConfigApQuery orderByAptbconfholdstat($order = Criteria::ASC) Order by the AptbConfHoldStat column
 * @method     ChildConfigApQuery orderByAptbconfdiscret($order = Criteria::ASC) Order by the AptbConfDiscRet column
 * @method     ChildConfigApQuery orderByAptbconfstopvendchg($order = Criteria::ASC) Order by the AptbConfStopVendChg column
 * @method     ChildConfigApQuery orderByAptbconfreqdate2($order = Criteria::ASC) Order by the AptbConfReqDate2 column
 * @method     ChildConfigApQuery orderByAptbconfreqdate3($order = Criteria::ASC) Order by the AptbConfReqDate3 column
 * @method     ChildConfigApQuery orderByAptbconfreqdate4($order = Criteria::ASC) Order by the AptbConfReqDate4 column
 * @method     ChildConfigApQuery orderByAptbconf1099name($order = Criteria::ASC) Order by the AptbConf1099Name column
 * @method     ChildConfigApQuery orderByAptbconf1099adr1($order = Criteria::ASC) Order by the AptbConf1099Adr1 column
 * @method     ChildConfigApQuery orderByAptbconf1099adr2($order = Criteria::ASC) Order by the AptbConf1099Adr2 column
 * @method     ChildConfigApQuery orderByAptbconf1099adr3($order = Criteria::ASC) Order by the AptbConf1099Adr3 column
 * @method     ChildConfigApQuery orderByAptbconf1099city($order = Criteria::ASC) Order by the AptbConf1099City column
 * @method     ChildConfigApQuery orderByAptbconf1099stat($order = Criteria::ASC) Order by the AptbConf1099Stat column
 * @method     ChildConfigApQuery orderByAptbconf1099zipcode($order = Criteria::ASC) Order by the AptbConf1099ZipCode column
 * @method     ChildConfigApQuery orderByAptbconf1099id($order = Criteria::ASC) Order by the AptbConf1099Id column
 * @method     ChildConfigApQuery orderByAptbconfstubsort($order = Criteria::ASC) Order by the AptbConfStubSort column
 * @method     ChildConfigApQuery orderByAptbConfUseAch($order = Criteria::ASC) Order by the AptbConfUseAch column
 * @method     ChildConfigApQuery orderByAptbconfover1($order = Criteria::ASC) Order by the AptbConfOver1 column
 * @method     ChildConfigApQuery orderByAptbconfover2($order = Criteria::ASC) Order by the AptbConfOver2 column
 * @method     ChildConfigApQuery orderByAptbconfprtchk($order = Criteria::ASC) Order by the AptbConfPrtChk column
 * @method     ChildConfigApQuery orderByAptbconfeiunrecqty($order = Criteria::ASC) Order by the AptbConfEiUnrecQty column
 * @method     ChildConfigApQuery orderByAptbconfeirecqtyask($order = Criteria::ASC) Order by the AptbConfEiRecQtyAsk column
 * @method     ChildConfigApQuery orderByAptbconfeirecqtydef($order = Criteria::ASC) Order by the AptbConfEiRecQtyDef column
 * @method     ChildConfigApQuery orderByAptbconfallowmultpos($order = Criteria::ASC) Order by the AptbConfAllowMultPos column
 * @method     ChildConfigApQuery orderByAptbconfeibyclerk($order = Criteria::ASC) Order by the AptbConfEiByClerk column
 * @method     ChildConfigApQuery orderByAptbconfeibatchproc($order = Criteria::ASC) Order by the AptbConfEiBatchProc column
 * @method     ChildConfigApQuery orderByAptbconfeidispstancost($order = Criteria::ASC) Order by the AptbConfEiDispStanCost column
 * @method     ChildConfigApQuery orderByAptbconfeiassetacctchg($order = Criteria::ASC) Order by the AptbConfEiAssetAcctChg column
 * @method     ChildConfigApQuery orderByAptbconfallowdupinvc($order = Criteria::ASC) Order by the AptbConfAllowDupInvc column
 * @method     ChildConfigApQuery orderByAptbconfprtsorept($order = Criteria::ASC) Order by the AptbConfPrtSoRept column
 * @method     ChildConfigApQuery orderByAptbconfeicheckhist($order = Criteria::ASC) Order by the AptbConfEiCheckHist column
 * @method     ChildConfigApQuery orderByAptbconfsummgl($order = Criteria::ASC) Order by the AptbConfSummGl column
 * @method     ChildConfigApQuery orderByAptbconfvxmuserlabel($order = Criteria::ASC) Order by the AptbConfVxmUserLabel column
 * @method     ChildConfigApQuery orderByAptbconfvendcostbreaks($order = Criteria::ASC) Order by the AptbConfVendCostBreaks column
 * @method     ChildConfigApQuery orderByAptbconfmyeclrclospo($order = Criteria::ASC) Order by the AptbConfMyeClrClosPo column
 * @method     ChildConfigApQuery orderByAptbconfmyeclrclosdate($order = Criteria::ASC) Order by the AptbConfMyeClrClosDate column
 * @method     ChildConfigApQuery orderByAptbconfmyeclrpohist($order = Criteria::ASC) Order by the AptbConfMyeClrPoHist column
 * @method     ChildConfigApQuery orderByAptbconfmyeclrpodate($order = Criteria::ASC) Order by the AptbConfMyeClrPoDate column
 * @method     ChildConfigApQuery orderByAptbconfmyeclrckhist($order = Criteria::ASC) Order by the AptbConfMyeClrCkHist column
 * @method     ChildConfigApQuery orderByAptbconfmyeclrckdate($order = Criteria::ASC) Order by the AptbConfMyeClrCkDate column
 * @method     ChildConfigApQuery orderByAptbconfmyeclropenck($order = Criteria::ASC) Order by the AptbConfMyeClrOpenCk column
 * @method     ChildConfigApQuery orderByAptbconflead($order = Criteria::ASC) Order by the AptbConfLead column
 * @method     ChildConfigApQuery orderByAptbconfvrreworkitem($order = Criteria::ASC) Order by the AptbConfVrReworkItem column
 * @method     ChildConfigApQuery orderByAptbconfvrqcwhse($order = Criteria::ASC) Order by the AptbConfVrqcWhse column
 * @method     ChildConfigApQuery orderByAptbconfvrglacct($order = Criteria::ASC) Order by the AptbConfVrGlAcct column
 * @method     ChildConfigApQuery orderByAptbconfvxmlistpc($order = Criteria::ASC) Order by the AptbConfVxmListPc column
 * @method     ChildConfigApQuery orderByAptbconfvxmlistitemupd($order = Criteria::ASC) Order by the AptbConfVxmListItemUpd column
 * @method     ChildConfigApQuery orderByAptbconfvxmgrosslc($order = Criteria::ASC) Order by the AptbConfVxmGrossLc column
 * @method     ChildConfigApQuery orderByAptbconfvxmcostlp($order = Criteria::ASC) Order by the AptbConfVxmCostLp column
 * @method     ChildConfigApQuery orderByAptbconfvxmcostitemupd($order = Criteria::ASC) Order by the AptbConfVxmCostItemUpd column
 * @method     ChildConfigApQuery orderByAptbconfvxmcostrmesg($order = Criteria::ASC) Order by the AptbConfVxmCostRMesg column
 * @method     ChildConfigApQuery orderByAptbconfvxmcostitemupdm($order = Criteria::ASC) Order by the AptbConfVxmCostItemUpdM column
 * @method     ChildConfigApQuery orderByAptbconfvxmcostmmesg($order = Criteria::ASC) Order by the AptbConfVxmCostMMesg column
 * @method     ChildConfigApQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigApQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigApQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigApQuery groupByAptbconfkey() Group by the AptbConfKey column
 * @method     ChildConfigApQuery groupByAptbconfglifac() Group by the AptbConfGlIfac column
 * @method     ChildConfigApQuery groupByAptbconfinifac() Group by the AptbConfInIfac column
 * @method     ChildConfigApQuery groupByAptbconfsoifac() Group by the AptbConfSoIfac column
 * @method     ChildConfigApQuery groupByAptbconfpoifac() Group by the AptbConfPoIfac column
 * @method     ChildConfigApQuery groupByAptbconffrtacct() Group by the AptbConfFrtAcct column
 * @method     ChildConfigApQuery groupByAptbconfmiscacct() Group by the AptbConfMiscAcct column
 * @method     ChildConfigApQuery groupByAptbconfapacct() Group by the AptbConfApAcct column
 * @method     ChildConfigApQuery groupByAptbconfcashacct() Group by the AptbConfCashAcct column
 * @method     ChildConfigApQuery groupByAptbconfdiscacct() Group by the AptbConfDiscAcct column
 * @method     ChildConfigApQuery groupByAptbconftaxacct() Group by the AptbConfTaxAcct column
 * @method     ChildConfigApQuery groupByAptbconfpuracct() Group by the AptbConfPurAcct column
 * @method     ChildConfigApQuery groupByAptbconfvaracct() Group by the AptbConfVarAcct column
 * @method     ChildConfigApQuery groupByAptbconfvenddisc() Group by the AptbConfVendDisc column
 * @method     ChildConfigApQuery groupByAptbconfapinvvaracct() Group by the AptbConfApInvVarAcct column
 * @method     ChildConfigApQuery groupByAptbconfuseroyal() Group by the AptbConfUseRoyal column
 * @method     ChildConfigApQuery groupByAptbconfdefbuyrcode() Group by the AptbConfDefBuyrCode column
 * @method     ChildConfigApQuery groupByAptbconfdeftermcode() Group by the AptbConfDefTermCode column
 * @method     ChildConfigApQuery groupByAptbconfdefsviacode() Group by the AptbConfDefSviaCode column
 * @method     ChildConfigApQuery groupByAptbconfdeftypecode() Group by the AptbConfDefTypeCode column
 * @method     ChildConfigApQuery groupByAptbconfvendline() Group by the AptbConfVendLine column
 * @method     ChildConfigApQuery groupByAptbconfvendcols() Group by the AptbConfVendCols column
 * @method     ChildConfigApQuery groupByAptbconfpoline() Group by the AptbConfPoLine column
 * @method     ChildConfigApQuery groupByAptbconfpocols() Group by the AptbConfPoCols column
 * @method     ChildConfigApQuery groupByAptbconfvendgetopt() Group by the AptbConfVendGetOpt column
 * @method     ChildConfigApQuery groupByAptbconfpaytoshipfr() Group by the AptbConfPaytoShipfr column
 * @method     ChildConfigApQuery groupByAptbconfholdstat() Group by the AptbConfHoldStat column
 * @method     ChildConfigApQuery groupByAptbconfdiscret() Group by the AptbConfDiscRet column
 * @method     ChildConfigApQuery groupByAptbconfstopvendchg() Group by the AptbConfStopVendChg column
 * @method     ChildConfigApQuery groupByAptbconfreqdate2() Group by the AptbConfReqDate2 column
 * @method     ChildConfigApQuery groupByAptbconfreqdate3() Group by the AptbConfReqDate3 column
 * @method     ChildConfigApQuery groupByAptbconfreqdate4() Group by the AptbConfReqDate4 column
 * @method     ChildConfigApQuery groupByAptbconf1099name() Group by the AptbConf1099Name column
 * @method     ChildConfigApQuery groupByAptbconf1099adr1() Group by the AptbConf1099Adr1 column
 * @method     ChildConfigApQuery groupByAptbconf1099adr2() Group by the AptbConf1099Adr2 column
 * @method     ChildConfigApQuery groupByAptbconf1099adr3() Group by the AptbConf1099Adr3 column
 * @method     ChildConfigApQuery groupByAptbconf1099city() Group by the AptbConf1099City column
 * @method     ChildConfigApQuery groupByAptbconf1099stat() Group by the AptbConf1099Stat column
 * @method     ChildConfigApQuery groupByAptbconf1099zipcode() Group by the AptbConf1099ZipCode column
 * @method     ChildConfigApQuery groupByAptbconf1099id() Group by the AptbConf1099Id column
 * @method     ChildConfigApQuery groupByAptbconfstubsort() Group by the AptbConfStubSort column
 * @method     ChildConfigApQuery groupByAptbConfUseAch() Group by the AptbConfUseAch column
 * @method     ChildConfigApQuery groupByAptbconfover1() Group by the AptbConfOver1 column
 * @method     ChildConfigApQuery groupByAptbconfover2() Group by the AptbConfOver2 column
 * @method     ChildConfigApQuery groupByAptbconfprtchk() Group by the AptbConfPrtChk column
 * @method     ChildConfigApQuery groupByAptbconfeiunrecqty() Group by the AptbConfEiUnrecQty column
 * @method     ChildConfigApQuery groupByAptbconfeirecqtyask() Group by the AptbConfEiRecQtyAsk column
 * @method     ChildConfigApQuery groupByAptbconfeirecqtydef() Group by the AptbConfEiRecQtyDef column
 * @method     ChildConfigApQuery groupByAptbconfallowmultpos() Group by the AptbConfAllowMultPos column
 * @method     ChildConfigApQuery groupByAptbconfeibyclerk() Group by the AptbConfEiByClerk column
 * @method     ChildConfigApQuery groupByAptbconfeibatchproc() Group by the AptbConfEiBatchProc column
 * @method     ChildConfigApQuery groupByAptbconfeidispstancost() Group by the AptbConfEiDispStanCost column
 * @method     ChildConfigApQuery groupByAptbconfeiassetacctchg() Group by the AptbConfEiAssetAcctChg column
 * @method     ChildConfigApQuery groupByAptbconfallowdupinvc() Group by the AptbConfAllowDupInvc column
 * @method     ChildConfigApQuery groupByAptbconfprtsorept() Group by the AptbConfPrtSoRept column
 * @method     ChildConfigApQuery groupByAptbconfeicheckhist() Group by the AptbConfEiCheckHist column
 * @method     ChildConfigApQuery groupByAptbconfsummgl() Group by the AptbConfSummGl column
 * @method     ChildConfigApQuery groupByAptbconfvxmuserlabel() Group by the AptbConfVxmUserLabel column
 * @method     ChildConfigApQuery groupByAptbconfvendcostbreaks() Group by the AptbConfVendCostBreaks column
 * @method     ChildConfigApQuery groupByAptbconfmyeclrclospo() Group by the AptbConfMyeClrClosPo column
 * @method     ChildConfigApQuery groupByAptbconfmyeclrclosdate() Group by the AptbConfMyeClrClosDate column
 * @method     ChildConfigApQuery groupByAptbconfmyeclrpohist() Group by the AptbConfMyeClrPoHist column
 * @method     ChildConfigApQuery groupByAptbconfmyeclrpodate() Group by the AptbConfMyeClrPoDate column
 * @method     ChildConfigApQuery groupByAptbconfmyeclrckhist() Group by the AptbConfMyeClrCkHist column
 * @method     ChildConfigApQuery groupByAptbconfmyeclrckdate() Group by the AptbConfMyeClrCkDate column
 * @method     ChildConfigApQuery groupByAptbconfmyeclropenck() Group by the AptbConfMyeClrOpenCk column
 * @method     ChildConfigApQuery groupByAptbconflead() Group by the AptbConfLead column
 * @method     ChildConfigApQuery groupByAptbconfvrreworkitem() Group by the AptbConfVrReworkItem column
 * @method     ChildConfigApQuery groupByAptbconfvrqcwhse() Group by the AptbConfVrqcWhse column
 * @method     ChildConfigApQuery groupByAptbconfvrglacct() Group by the AptbConfVrGlAcct column
 * @method     ChildConfigApQuery groupByAptbconfvxmlistpc() Group by the AptbConfVxmListPc column
 * @method     ChildConfigApQuery groupByAptbconfvxmlistitemupd() Group by the AptbConfVxmListItemUpd column
 * @method     ChildConfigApQuery groupByAptbconfvxmgrosslc() Group by the AptbConfVxmGrossLc column
 * @method     ChildConfigApQuery groupByAptbconfvxmcostlp() Group by the AptbConfVxmCostLp column
 * @method     ChildConfigApQuery groupByAptbconfvxmcostitemupd() Group by the AptbConfVxmCostItemUpd column
 * @method     ChildConfigApQuery groupByAptbconfvxmcostrmesg() Group by the AptbConfVxmCostRMesg column
 * @method     ChildConfigApQuery groupByAptbconfvxmcostitemupdm() Group by the AptbConfVxmCostItemUpdM column
 * @method     ChildConfigApQuery groupByAptbconfvxmcostmmesg() Group by the AptbConfVxmCostMMesg column
 * @method     ChildConfigApQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigApQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigApQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigApQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigApQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigApQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigApQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigApQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigApQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigAp|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigAp matching the query
 * @method     ChildConfigAp findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigAp matching the query, or a new ChildConfigAp object populated from the query conditions when no match is found
 *
 * @method     ChildConfigAp|null findOneByAptbconfkey(int $AptbConfKey) Return the first ChildConfigAp filtered by the AptbConfKey column
 * @method     ChildConfigAp|null findOneByAptbconfglifac(string $AptbConfGlIfac) Return the first ChildConfigAp filtered by the AptbConfGlIfac column
 * @method     ChildConfigAp|null findOneByAptbconfinifac(string $AptbConfInIfac) Return the first ChildConfigAp filtered by the AptbConfInIfac column
 * @method     ChildConfigAp|null findOneByAptbconfsoifac(string $AptbConfSoIfac) Return the first ChildConfigAp filtered by the AptbConfSoIfac column
 * @method     ChildConfigAp|null findOneByAptbconfpoifac(string $AptbConfPoIfac) Return the first ChildConfigAp filtered by the AptbConfPoIfac column
 * @method     ChildConfigAp|null findOneByAptbconffrtacct(string $AptbConfFrtAcct) Return the first ChildConfigAp filtered by the AptbConfFrtAcct column
 * @method     ChildConfigAp|null findOneByAptbconfmiscacct(string $AptbConfMiscAcct) Return the first ChildConfigAp filtered by the AptbConfMiscAcct column
 * @method     ChildConfigAp|null findOneByAptbconfapacct(string $AptbConfApAcct) Return the first ChildConfigAp filtered by the AptbConfApAcct column
 * @method     ChildConfigAp|null findOneByAptbconfcashacct(string $AptbConfCashAcct) Return the first ChildConfigAp filtered by the AptbConfCashAcct column
 * @method     ChildConfigAp|null findOneByAptbconfdiscacct(string $AptbConfDiscAcct) Return the first ChildConfigAp filtered by the AptbConfDiscAcct column
 * @method     ChildConfigAp|null findOneByAptbconftaxacct(string $AptbConfTaxAcct) Return the first ChildConfigAp filtered by the AptbConfTaxAcct column
 * @method     ChildConfigAp|null findOneByAptbconfpuracct(string $AptbConfPurAcct) Return the first ChildConfigAp filtered by the AptbConfPurAcct column
 * @method     ChildConfigAp|null findOneByAptbconfvaracct(string $AptbConfVarAcct) Return the first ChildConfigAp filtered by the AptbConfVarAcct column
 * @method     ChildConfigAp|null findOneByAptbconfvenddisc(string $AptbConfVendDisc) Return the first ChildConfigAp filtered by the AptbConfVendDisc column
 * @method     ChildConfigAp|null findOneByAptbconfapinvvaracct(string $AptbConfApInvVarAcct) Return the first ChildConfigAp filtered by the AptbConfApInvVarAcct column
 * @method     ChildConfigAp|null findOneByAptbconfuseroyal(string $AptbConfUseRoyal) Return the first ChildConfigAp filtered by the AptbConfUseRoyal column
 * @method     ChildConfigAp|null findOneByAptbconfdefbuyrcode(string $AptbConfDefBuyrCode) Return the first ChildConfigAp filtered by the AptbConfDefBuyrCode column
 * @method     ChildConfigAp|null findOneByAptbconfdeftermcode(string $AptbConfDefTermCode) Return the first ChildConfigAp filtered by the AptbConfDefTermCode column
 * @method     ChildConfigAp|null findOneByAptbconfdefsviacode(string $AptbConfDefSviaCode) Return the first ChildConfigAp filtered by the AptbConfDefSviaCode column
 * @method     ChildConfigAp|null findOneByAptbconfdeftypecode(string $AptbConfDefTypeCode) Return the first ChildConfigAp filtered by the AptbConfDefTypeCode column
 * @method     ChildConfigAp|null findOneByAptbconfvendline(int $AptbConfVendLine) Return the first ChildConfigAp filtered by the AptbConfVendLine column
 * @method     ChildConfigAp|null findOneByAptbconfvendcols(int $AptbConfVendCols) Return the first ChildConfigAp filtered by the AptbConfVendCols column
 * @method     ChildConfigAp|null findOneByAptbconfpoline(int $AptbConfPoLine) Return the first ChildConfigAp filtered by the AptbConfPoLine column
 * @method     ChildConfigAp|null findOneByAptbconfpocols(int $AptbConfPoCols) Return the first ChildConfigAp filtered by the AptbConfPoCols column
 * @method     ChildConfigAp|null findOneByAptbconfvendgetopt(int $AptbConfVendGetOpt) Return the first ChildConfigAp filtered by the AptbConfVendGetOpt column
 * @method     ChildConfigAp|null findOneByAptbconfpaytoshipfr(string $AptbConfPaytoShipfr) Return the first ChildConfigAp filtered by the AptbConfPaytoShipfr column
 * @method     ChildConfigAp|null findOneByAptbconfholdstat(string $AptbConfHoldStat) Return the first ChildConfigAp filtered by the AptbConfHoldStat column
 * @method     ChildConfigAp|null findOneByAptbconfdiscret(string $AptbConfDiscRet) Return the first ChildConfigAp filtered by the AptbConfDiscRet column
 * @method     ChildConfigAp|null findOneByAptbconfstopvendchg(int $AptbConfStopVendChg) Return the first ChildConfigAp filtered by the AptbConfStopVendChg column
 * @method     ChildConfigAp|null findOneByAptbconfreqdate2(int $AptbConfReqDate2) Return the first ChildConfigAp filtered by the AptbConfReqDate2 column
 * @method     ChildConfigAp|null findOneByAptbconfreqdate3(int $AptbConfReqDate3) Return the first ChildConfigAp filtered by the AptbConfReqDate3 column
 * @method     ChildConfigAp|null findOneByAptbconfreqdate4(int $AptbConfReqDate4) Return the first ChildConfigAp filtered by the AptbConfReqDate4 column
 * @method     ChildConfigAp|null findOneByAptbconf1099name(string $AptbConf1099Name) Return the first ChildConfigAp filtered by the AptbConf1099Name column
 * @method     ChildConfigAp|null findOneByAptbconf1099adr1(string $AptbConf1099Adr1) Return the first ChildConfigAp filtered by the AptbConf1099Adr1 column
 * @method     ChildConfigAp|null findOneByAptbconf1099adr2(string $AptbConf1099Adr2) Return the first ChildConfigAp filtered by the AptbConf1099Adr2 column
 * @method     ChildConfigAp|null findOneByAptbconf1099adr3(string $AptbConf1099Adr3) Return the first ChildConfigAp filtered by the AptbConf1099Adr3 column
 * @method     ChildConfigAp|null findOneByAptbconf1099city(string $AptbConf1099City) Return the first ChildConfigAp filtered by the AptbConf1099City column
 * @method     ChildConfigAp|null findOneByAptbconf1099stat(string $AptbConf1099Stat) Return the first ChildConfigAp filtered by the AptbConf1099Stat column
 * @method     ChildConfigAp|null findOneByAptbconf1099zipcode(string $AptbConf1099ZipCode) Return the first ChildConfigAp filtered by the AptbConf1099ZipCode column
 * @method     ChildConfigAp|null findOneByAptbconf1099id(string $AptbConf1099Id) Return the first ChildConfigAp filtered by the AptbConf1099Id column
 * @method     ChildConfigAp|null findOneByAptbconfstubsort(string $AptbConfStubSort) Return the first ChildConfigAp filtered by the AptbConfStubSort column
 * @method     ChildConfigAp|null findOneByAptbConfUseAch(string $AptbConfUseAch) Return the first ChildConfigAp filtered by the AptbConfUseAch column
 * @method     ChildConfigAp|null findOneByAptbconfover1(int $AptbConfOver1) Return the first ChildConfigAp filtered by the AptbConfOver1 column
 * @method     ChildConfigAp|null findOneByAptbconfover2(int $AptbConfOver2) Return the first ChildConfigAp filtered by the AptbConfOver2 column
 * @method     ChildConfigAp|null findOneByAptbconfprtchk(string $AptbConfPrtChk) Return the first ChildConfigAp filtered by the AptbConfPrtChk column
 * @method     ChildConfigAp|null findOneByAptbconfeiunrecqty(string $AptbConfEiUnrecQty) Return the first ChildConfigAp filtered by the AptbConfEiUnrecQty column
 * @method     ChildConfigAp|null findOneByAptbconfeirecqtyask(string $AptbConfEiRecQtyAsk) Return the first ChildConfigAp filtered by the AptbConfEiRecQtyAsk column
 * @method     ChildConfigAp|null findOneByAptbconfeirecqtydef(string $AptbConfEiRecQtyDef) Return the first ChildConfigAp filtered by the AptbConfEiRecQtyDef column
 * @method     ChildConfigAp|null findOneByAptbconfallowmultpos(string $AptbConfAllowMultPos) Return the first ChildConfigAp filtered by the AptbConfAllowMultPos column
 * @method     ChildConfigAp|null findOneByAptbconfeibyclerk(string $AptbConfEiByClerk) Return the first ChildConfigAp filtered by the AptbConfEiByClerk column
 * @method     ChildConfigAp|null findOneByAptbconfeibatchproc(string $AptbConfEiBatchProc) Return the first ChildConfigAp filtered by the AptbConfEiBatchProc column
 * @method     ChildConfigAp|null findOneByAptbconfeidispstancost(string $AptbConfEiDispStanCost) Return the first ChildConfigAp filtered by the AptbConfEiDispStanCost column
 * @method     ChildConfigAp|null findOneByAptbconfeiassetacctchg(string $AptbConfEiAssetAcctChg) Return the first ChildConfigAp filtered by the AptbConfEiAssetAcctChg column
 * @method     ChildConfigAp|null findOneByAptbconfallowdupinvc(string $AptbConfAllowDupInvc) Return the first ChildConfigAp filtered by the AptbConfAllowDupInvc column
 * @method     ChildConfigAp|null findOneByAptbconfprtsorept(string $AptbConfPrtSoRept) Return the first ChildConfigAp filtered by the AptbConfPrtSoRept column
 * @method     ChildConfigAp|null findOneByAptbconfeicheckhist(string $AptbConfEiCheckHist) Return the first ChildConfigAp filtered by the AptbConfEiCheckHist column
 * @method     ChildConfigAp|null findOneByAptbconfsummgl(string $AptbConfSummGl) Return the first ChildConfigAp filtered by the AptbConfSummGl column
 * @method     ChildConfigAp|null findOneByAptbconfvxmuserlabel(string $AptbConfVxmUserLabel) Return the first ChildConfigAp filtered by the AptbConfVxmUserLabel column
 * @method     ChildConfigAp|null findOneByAptbconfvendcostbreaks(string $AptbConfVendCostBreaks) Return the first ChildConfigAp filtered by the AptbConfVendCostBreaks column
 * @method     ChildConfigAp|null findOneByAptbconfmyeclrclospo(string $AptbConfMyeClrClosPo) Return the first ChildConfigAp filtered by the AptbConfMyeClrClosPo column
 * @method     ChildConfigAp|null findOneByAptbconfmyeclrclosdate(string $AptbConfMyeClrClosDate) Return the first ChildConfigAp filtered by the AptbConfMyeClrClosDate column
 * @method     ChildConfigAp|null findOneByAptbconfmyeclrpohist(string $AptbConfMyeClrPoHist) Return the first ChildConfigAp filtered by the AptbConfMyeClrPoHist column
 * @method     ChildConfigAp|null findOneByAptbconfmyeclrpodate(string $AptbConfMyeClrPoDate) Return the first ChildConfigAp filtered by the AptbConfMyeClrPoDate column
 * @method     ChildConfigAp|null findOneByAptbconfmyeclrckhist(string $AptbConfMyeClrCkHist) Return the first ChildConfigAp filtered by the AptbConfMyeClrCkHist column
 * @method     ChildConfigAp|null findOneByAptbconfmyeclrckdate(string $AptbConfMyeClrCkDate) Return the first ChildConfigAp filtered by the AptbConfMyeClrCkDate column
 * @method     ChildConfigAp|null findOneByAptbconfmyeclropenck(string $AptbConfMyeClrOpenCk) Return the first ChildConfigAp filtered by the AptbConfMyeClrOpenCk column
 * @method     ChildConfigAp|null findOneByAptbconflead(string $AptbConfLead) Return the first ChildConfigAp filtered by the AptbConfLead column
 * @method     ChildConfigAp|null findOneByAptbconfvrreworkitem(string $AptbConfVrReworkItem) Return the first ChildConfigAp filtered by the AptbConfVrReworkItem column
 * @method     ChildConfigAp|null findOneByAptbconfvrqcwhse(string $AptbConfVrqcWhse) Return the first ChildConfigAp filtered by the AptbConfVrqcWhse column
 * @method     ChildConfigAp|null findOneByAptbconfvrglacct(string $AptbConfVrGlAcct) Return the first ChildConfigAp filtered by the AptbConfVrGlAcct column
 * @method     ChildConfigAp|null findOneByAptbconfvxmlistpc(string $AptbConfVxmListPc) Return the first ChildConfigAp filtered by the AptbConfVxmListPc column
 * @method     ChildConfigAp|null findOneByAptbconfvxmlistitemupd(string $AptbConfVxmListItemUpd) Return the first ChildConfigAp filtered by the AptbConfVxmListItemUpd column
 * @method     ChildConfigAp|null findOneByAptbconfvxmgrosslc(string $AptbConfVxmGrossLc) Return the first ChildConfigAp filtered by the AptbConfVxmGrossLc column
 * @method     ChildConfigAp|null findOneByAptbconfvxmcostlp(string $AptbConfVxmCostLp) Return the first ChildConfigAp filtered by the AptbConfVxmCostLp column
 * @method     ChildConfigAp|null findOneByAptbconfvxmcostitemupd(string $AptbConfVxmCostItemUpd) Return the first ChildConfigAp filtered by the AptbConfVxmCostItemUpd column
 * @method     ChildConfigAp|null findOneByAptbconfvxmcostrmesg(string $AptbConfVxmCostRMesg) Return the first ChildConfigAp filtered by the AptbConfVxmCostRMesg column
 * @method     ChildConfigAp|null findOneByAptbconfvxmcostitemupdm(string $AptbConfVxmCostItemUpdM) Return the first ChildConfigAp filtered by the AptbConfVxmCostItemUpdM column
 * @method     ChildConfigAp|null findOneByAptbconfvxmcostmmesg(string $AptbConfVxmCostMMesg) Return the first ChildConfigAp filtered by the AptbConfVxmCostMMesg column
 * @method     ChildConfigAp|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigAp filtered by the DateUpdtd column
 * @method     ChildConfigAp|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigAp filtered by the TimeUpdtd column
 * @method     ChildConfigAp|null findOneByDummy(string $dummy) Return the first ChildConfigAp filtered by the dummy column
 *
 * @method     ChildConfigAp requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigAp by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOne(?ConnectionInterface $con = null) Return the first ChildConfigAp matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigAp requireOneByAptbconfkey(int $AptbConfKey) Return the first ChildConfigAp filtered by the AptbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfglifac(string $AptbConfGlIfac) Return the first ChildConfigAp filtered by the AptbConfGlIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfinifac(string $AptbConfInIfac) Return the first ChildConfigAp filtered by the AptbConfInIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfsoifac(string $AptbConfSoIfac) Return the first ChildConfigAp filtered by the AptbConfSoIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfpoifac(string $AptbConfPoIfac) Return the first ChildConfigAp filtered by the AptbConfPoIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconffrtacct(string $AptbConfFrtAcct) Return the first ChildConfigAp filtered by the AptbConfFrtAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfmiscacct(string $AptbConfMiscAcct) Return the first ChildConfigAp filtered by the AptbConfMiscAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfapacct(string $AptbConfApAcct) Return the first ChildConfigAp filtered by the AptbConfApAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfcashacct(string $AptbConfCashAcct) Return the first ChildConfigAp filtered by the AptbConfCashAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfdiscacct(string $AptbConfDiscAcct) Return the first ChildConfigAp filtered by the AptbConfDiscAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconftaxacct(string $AptbConfTaxAcct) Return the first ChildConfigAp filtered by the AptbConfTaxAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfpuracct(string $AptbConfPurAcct) Return the first ChildConfigAp filtered by the AptbConfPurAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvaracct(string $AptbConfVarAcct) Return the first ChildConfigAp filtered by the AptbConfVarAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvenddisc(string $AptbConfVendDisc) Return the first ChildConfigAp filtered by the AptbConfVendDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfapinvvaracct(string $AptbConfApInvVarAcct) Return the first ChildConfigAp filtered by the AptbConfApInvVarAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfuseroyal(string $AptbConfUseRoyal) Return the first ChildConfigAp filtered by the AptbConfUseRoyal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfdefbuyrcode(string $AptbConfDefBuyrCode) Return the first ChildConfigAp filtered by the AptbConfDefBuyrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfdeftermcode(string $AptbConfDefTermCode) Return the first ChildConfigAp filtered by the AptbConfDefTermCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfdefsviacode(string $AptbConfDefSviaCode) Return the first ChildConfigAp filtered by the AptbConfDefSviaCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfdeftypecode(string $AptbConfDefTypeCode) Return the first ChildConfigAp filtered by the AptbConfDefTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvendline(int $AptbConfVendLine) Return the first ChildConfigAp filtered by the AptbConfVendLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvendcols(int $AptbConfVendCols) Return the first ChildConfigAp filtered by the AptbConfVendCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfpoline(int $AptbConfPoLine) Return the first ChildConfigAp filtered by the AptbConfPoLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfpocols(int $AptbConfPoCols) Return the first ChildConfigAp filtered by the AptbConfPoCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvendgetopt(int $AptbConfVendGetOpt) Return the first ChildConfigAp filtered by the AptbConfVendGetOpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfpaytoshipfr(string $AptbConfPaytoShipfr) Return the first ChildConfigAp filtered by the AptbConfPaytoShipfr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfholdstat(string $AptbConfHoldStat) Return the first ChildConfigAp filtered by the AptbConfHoldStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfdiscret(string $AptbConfDiscRet) Return the first ChildConfigAp filtered by the AptbConfDiscRet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfstopvendchg(int $AptbConfStopVendChg) Return the first ChildConfigAp filtered by the AptbConfStopVendChg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfreqdate2(int $AptbConfReqDate2) Return the first ChildConfigAp filtered by the AptbConfReqDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfreqdate3(int $AptbConfReqDate3) Return the first ChildConfigAp filtered by the AptbConfReqDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfreqdate4(int $AptbConfReqDate4) Return the first ChildConfigAp filtered by the AptbConfReqDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconf1099name(string $AptbConf1099Name) Return the first ChildConfigAp filtered by the AptbConf1099Name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconf1099adr1(string $AptbConf1099Adr1) Return the first ChildConfigAp filtered by the AptbConf1099Adr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconf1099adr2(string $AptbConf1099Adr2) Return the first ChildConfigAp filtered by the AptbConf1099Adr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconf1099adr3(string $AptbConf1099Adr3) Return the first ChildConfigAp filtered by the AptbConf1099Adr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconf1099city(string $AptbConf1099City) Return the first ChildConfigAp filtered by the AptbConf1099City column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconf1099stat(string $AptbConf1099Stat) Return the first ChildConfigAp filtered by the AptbConf1099Stat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconf1099zipcode(string $AptbConf1099ZipCode) Return the first ChildConfigAp filtered by the AptbConf1099ZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconf1099id(string $AptbConf1099Id) Return the first ChildConfigAp filtered by the AptbConf1099Id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfstubsort(string $AptbConfStubSort) Return the first ChildConfigAp filtered by the AptbConfStubSort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbConfUseAch(string $AptbConfUseAch) Return the first ChildConfigAp filtered by the AptbConfUseAch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfover1(int $AptbConfOver1) Return the first ChildConfigAp filtered by the AptbConfOver1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfover2(int $AptbConfOver2) Return the first ChildConfigAp filtered by the AptbConfOver2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfprtchk(string $AptbConfPrtChk) Return the first ChildConfigAp filtered by the AptbConfPrtChk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfeiunrecqty(string $AptbConfEiUnrecQty) Return the first ChildConfigAp filtered by the AptbConfEiUnrecQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfeirecqtyask(string $AptbConfEiRecQtyAsk) Return the first ChildConfigAp filtered by the AptbConfEiRecQtyAsk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfeirecqtydef(string $AptbConfEiRecQtyDef) Return the first ChildConfigAp filtered by the AptbConfEiRecQtyDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfallowmultpos(string $AptbConfAllowMultPos) Return the first ChildConfigAp filtered by the AptbConfAllowMultPos column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfeibyclerk(string $AptbConfEiByClerk) Return the first ChildConfigAp filtered by the AptbConfEiByClerk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfeibatchproc(string $AptbConfEiBatchProc) Return the first ChildConfigAp filtered by the AptbConfEiBatchProc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfeidispstancost(string $AptbConfEiDispStanCost) Return the first ChildConfigAp filtered by the AptbConfEiDispStanCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfeiassetacctchg(string $AptbConfEiAssetAcctChg) Return the first ChildConfigAp filtered by the AptbConfEiAssetAcctChg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfallowdupinvc(string $AptbConfAllowDupInvc) Return the first ChildConfigAp filtered by the AptbConfAllowDupInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfprtsorept(string $AptbConfPrtSoRept) Return the first ChildConfigAp filtered by the AptbConfPrtSoRept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfeicheckhist(string $AptbConfEiCheckHist) Return the first ChildConfigAp filtered by the AptbConfEiCheckHist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfsummgl(string $AptbConfSummGl) Return the first ChildConfigAp filtered by the AptbConfSummGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmuserlabel(string $AptbConfVxmUserLabel) Return the first ChildConfigAp filtered by the AptbConfVxmUserLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvendcostbreaks(string $AptbConfVendCostBreaks) Return the first ChildConfigAp filtered by the AptbConfVendCostBreaks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfmyeclrclospo(string $AptbConfMyeClrClosPo) Return the first ChildConfigAp filtered by the AptbConfMyeClrClosPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfmyeclrclosdate(string $AptbConfMyeClrClosDate) Return the first ChildConfigAp filtered by the AptbConfMyeClrClosDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfmyeclrpohist(string $AptbConfMyeClrPoHist) Return the first ChildConfigAp filtered by the AptbConfMyeClrPoHist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfmyeclrpodate(string $AptbConfMyeClrPoDate) Return the first ChildConfigAp filtered by the AptbConfMyeClrPoDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfmyeclrckhist(string $AptbConfMyeClrCkHist) Return the first ChildConfigAp filtered by the AptbConfMyeClrCkHist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfmyeclrckdate(string $AptbConfMyeClrCkDate) Return the first ChildConfigAp filtered by the AptbConfMyeClrCkDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfmyeclropenck(string $AptbConfMyeClrOpenCk) Return the first ChildConfigAp filtered by the AptbConfMyeClrOpenCk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconflead(string $AptbConfLead) Return the first ChildConfigAp filtered by the AptbConfLead column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvrreworkitem(string $AptbConfVrReworkItem) Return the first ChildConfigAp filtered by the AptbConfVrReworkItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvrqcwhse(string $AptbConfVrqcWhse) Return the first ChildConfigAp filtered by the AptbConfVrqcWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvrglacct(string $AptbConfVrGlAcct) Return the first ChildConfigAp filtered by the AptbConfVrGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmlistpc(string $AptbConfVxmListPc) Return the first ChildConfigAp filtered by the AptbConfVxmListPc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmlistitemupd(string $AptbConfVxmListItemUpd) Return the first ChildConfigAp filtered by the AptbConfVxmListItemUpd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmgrosslc(string $AptbConfVxmGrossLc) Return the first ChildConfigAp filtered by the AptbConfVxmGrossLc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmcostlp(string $AptbConfVxmCostLp) Return the first ChildConfigAp filtered by the AptbConfVxmCostLp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmcostitemupd(string $AptbConfVxmCostItemUpd) Return the first ChildConfigAp filtered by the AptbConfVxmCostItemUpd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmcostrmesg(string $AptbConfVxmCostRMesg) Return the first ChildConfigAp filtered by the AptbConfVxmCostRMesg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmcostitemupdm(string $AptbConfVxmCostItemUpdM) Return the first ChildConfigAp filtered by the AptbConfVxmCostItemUpdM column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByAptbconfvxmcostmmesg(string $AptbConfVxmCostMMesg) Return the first ChildConfigAp filtered by the AptbConfVxmCostMMesg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigAp filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigAp filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigAp requireOneByDummy(string $dummy) Return the first ChildConfigAp filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigAp[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigAp objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigAp> find(?ConnectionInterface $con = null) Return ChildConfigAp objects based on current ModelCriteria
 *
 * @method     ChildConfigAp[]|Collection findByAptbconfkey(int|array<int> $AptbConfKey) Return ChildConfigAp objects filtered by the AptbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfkey(int|array<int> $AptbConfKey) Return ChildConfigAp objects filtered by the AptbConfKey column
 * @method     ChildConfigAp[]|Collection findByAptbconfglifac(string|array<string> $AptbConfGlIfac) Return ChildConfigAp objects filtered by the AptbConfGlIfac column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfglifac(string|array<string> $AptbConfGlIfac) Return ChildConfigAp objects filtered by the AptbConfGlIfac column
 * @method     ChildConfigAp[]|Collection findByAptbconfinifac(string|array<string> $AptbConfInIfac) Return ChildConfigAp objects filtered by the AptbConfInIfac column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfinifac(string|array<string> $AptbConfInIfac) Return ChildConfigAp objects filtered by the AptbConfInIfac column
 * @method     ChildConfigAp[]|Collection findByAptbconfsoifac(string|array<string> $AptbConfSoIfac) Return ChildConfigAp objects filtered by the AptbConfSoIfac column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfsoifac(string|array<string> $AptbConfSoIfac) Return ChildConfigAp objects filtered by the AptbConfSoIfac column
 * @method     ChildConfigAp[]|Collection findByAptbconfpoifac(string|array<string> $AptbConfPoIfac) Return ChildConfigAp objects filtered by the AptbConfPoIfac column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfpoifac(string|array<string> $AptbConfPoIfac) Return ChildConfigAp objects filtered by the AptbConfPoIfac column
 * @method     ChildConfigAp[]|Collection findByAptbconffrtacct(string|array<string> $AptbConfFrtAcct) Return ChildConfigAp objects filtered by the AptbConfFrtAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconffrtacct(string|array<string> $AptbConfFrtAcct) Return ChildConfigAp objects filtered by the AptbConfFrtAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfmiscacct(string|array<string> $AptbConfMiscAcct) Return ChildConfigAp objects filtered by the AptbConfMiscAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfmiscacct(string|array<string> $AptbConfMiscAcct) Return ChildConfigAp objects filtered by the AptbConfMiscAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfapacct(string|array<string> $AptbConfApAcct) Return ChildConfigAp objects filtered by the AptbConfApAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfapacct(string|array<string> $AptbConfApAcct) Return ChildConfigAp objects filtered by the AptbConfApAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfcashacct(string|array<string> $AptbConfCashAcct) Return ChildConfigAp objects filtered by the AptbConfCashAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfcashacct(string|array<string> $AptbConfCashAcct) Return ChildConfigAp objects filtered by the AptbConfCashAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfdiscacct(string|array<string> $AptbConfDiscAcct) Return ChildConfigAp objects filtered by the AptbConfDiscAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfdiscacct(string|array<string> $AptbConfDiscAcct) Return ChildConfigAp objects filtered by the AptbConfDiscAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconftaxacct(string|array<string> $AptbConfTaxAcct) Return ChildConfigAp objects filtered by the AptbConfTaxAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconftaxacct(string|array<string> $AptbConfTaxAcct) Return ChildConfigAp objects filtered by the AptbConfTaxAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfpuracct(string|array<string> $AptbConfPurAcct) Return ChildConfigAp objects filtered by the AptbConfPurAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfpuracct(string|array<string> $AptbConfPurAcct) Return ChildConfigAp objects filtered by the AptbConfPurAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfvaracct(string|array<string> $AptbConfVarAcct) Return ChildConfigAp objects filtered by the AptbConfVarAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvaracct(string|array<string> $AptbConfVarAcct) Return ChildConfigAp objects filtered by the AptbConfVarAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfvenddisc(string|array<string> $AptbConfVendDisc) Return ChildConfigAp objects filtered by the AptbConfVendDisc column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvenddisc(string|array<string> $AptbConfVendDisc) Return ChildConfigAp objects filtered by the AptbConfVendDisc column
 * @method     ChildConfigAp[]|Collection findByAptbconfapinvvaracct(string|array<string> $AptbConfApInvVarAcct) Return ChildConfigAp objects filtered by the AptbConfApInvVarAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfapinvvaracct(string|array<string> $AptbConfApInvVarAcct) Return ChildConfigAp objects filtered by the AptbConfApInvVarAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfuseroyal(string|array<string> $AptbConfUseRoyal) Return ChildConfigAp objects filtered by the AptbConfUseRoyal column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfuseroyal(string|array<string> $AptbConfUseRoyal) Return ChildConfigAp objects filtered by the AptbConfUseRoyal column
 * @method     ChildConfigAp[]|Collection findByAptbconfdefbuyrcode(string|array<string> $AptbConfDefBuyrCode) Return ChildConfigAp objects filtered by the AptbConfDefBuyrCode column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfdefbuyrcode(string|array<string> $AptbConfDefBuyrCode) Return ChildConfigAp objects filtered by the AptbConfDefBuyrCode column
 * @method     ChildConfigAp[]|Collection findByAptbconfdeftermcode(string|array<string> $AptbConfDefTermCode) Return ChildConfigAp objects filtered by the AptbConfDefTermCode column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfdeftermcode(string|array<string> $AptbConfDefTermCode) Return ChildConfigAp objects filtered by the AptbConfDefTermCode column
 * @method     ChildConfigAp[]|Collection findByAptbconfdefsviacode(string|array<string> $AptbConfDefSviaCode) Return ChildConfigAp objects filtered by the AptbConfDefSviaCode column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfdefsviacode(string|array<string> $AptbConfDefSviaCode) Return ChildConfigAp objects filtered by the AptbConfDefSviaCode column
 * @method     ChildConfigAp[]|Collection findByAptbconfdeftypecode(string|array<string> $AptbConfDefTypeCode) Return ChildConfigAp objects filtered by the AptbConfDefTypeCode column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfdeftypecode(string|array<string> $AptbConfDefTypeCode) Return ChildConfigAp objects filtered by the AptbConfDefTypeCode column
 * @method     ChildConfigAp[]|Collection findByAptbconfvendline(int|array<int> $AptbConfVendLine) Return ChildConfigAp objects filtered by the AptbConfVendLine column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvendline(int|array<int> $AptbConfVendLine) Return ChildConfigAp objects filtered by the AptbConfVendLine column
 * @method     ChildConfigAp[]|Collection findByAptbconfvendcols(int|array<int> $AptbConfVendCols) Return ChildConfigAp objects filtered by the AptbConfVendCols column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvendcols(int|array<int> $AptbConfVendCols) Return ChildConfigAp objects filtered by the AptbConfVendCols column
 * @method     ChildConfigAp[]|Collection findByAptbconfpoline(int|array<int> $AptbConfPoLine) Return ChildConfigAp objects filtered by the AptbConfPoLine column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfpoline(int|array<int> $AptbConfPoLine) Return ChildConfigAp objects filtered by the AptbConfPoLine column
 * @method     ChildConfigAp[]|Collection findByAptbconfpocols(int|array<int> $AptbConfPoCols) Return ChildConfigAp objects filtered by the AptbConfPoCols column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfpocols(int|array<int> $AptbConfPoCols) Return ChildConfigAp objects filtered by the AptbConfPoCols column
 * @method     ChildConfigAp[]|Collection findByAptbconfvendgetopt(int|array<int> $AptbConfVendGetOpt) Return ChildConfigAp objects filtered by the AptbConfVendGetOpt column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvendgetopt(int|array<int> $AptbConfVendGetOpt) Return ChildConfigAp objects filtered by the AptbConfVendGetOpt column
 * @method     ChildConfigAp[]|Collection findByAptbconfpaytoshipfr(string|array<string> $AptbConfPaytoShipfr) Return ChildConfigAp objects filtered by the AptbConfPaytoShipfr column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfpaytoshipfr(string|array<string> $AptbConfPaytoShipfr) Return ChildConfigAp objects filtered by the AptbConfPaytoShipfr column
 * @method     ChildConfigAp[]|Collection findByAptbconfholdstat(string|array<string> $AptbConfHoldStat) Return ChildConfigAp objects filtered by the AptbConfHoldStat column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfholdstat(string|array<string> $AptbConfHoldStat) Return ChildConfigAp objects filtered by the AptbConfHoldStat column
 * @method     ChildConfigAp[]|Collection findByAptbconfdiscret(string|array<string> $AptbConfDiscRet) Return ChildConfigAp objects filtered by the AptbConfDiscRet column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfdiscret(string|array<string> $AptbConfDiscRet) Return ChildConfigAp objects filtered by the AptbConfDiscRet column
 * @method     ChildConfigAp[]|Collection findByAptbconfstopvendchg(int|array<int> $AptbConfStopVendChg) Return ChildConfigAp objects filtered by the AptbConfStopVendChg column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfstopvendchg(int|array<int> $AptbConfStopVendChg) Return ChildConfigAp objects filtered by the AptbConfStopVendChg column
 * @method     ChildConfigAp[]|Collection findByAptbconfreqdate2(int|array<int> $AptbConfReqDate2) Return ChildConfigAp objects filtered by the AptbConfReqDate2 column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfreqdate2(int|array<int> $AptbConfReqDate2) Return ChildConfigAp objects filtered by the AptbConfReqDate2 column
 * @method     ChildConfigAp[]|Collection findByAptbconfreqdate3(int|array<int> $AptbConfReqDate3) Return ChildConfigAp objects filtered by the AptbConfReqDate3 column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfreqdate3(int|array<int> $AptbConfReqDate3) Return ChildConfigAp objects filtered by the AptbConfReqDate3 column
 * @method     ChildConfigAp[]|Collection findByAptbconfreqdate4(int|array<int> $AptbConfReqDate4) Return ChildConfigAp objects filtered by the AptbConfReqDate4 column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfreqdate4(int|array<int> $AptbConfReqDate4) Return ChildConfigAp objects filtered by the AptbConfReqDate4 column
 * @method     ChildConfigAp[]|Collection findByAptbconf1099name(string|array<string> $AptbConf1099Name) Return ChildConfigAp objects filtered by the AptbConf1099Name column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconf1099name(string|array<string> $AptbConf1099Name) Return ChildConfigAp objects filtered by the AptbConf1099Name column
 * @method     ChildConfigAp[]|Collection findByAptbconf1099adr1(string|array<string> $AptbConf1099Adr1) Return ChildConfigAp objects filtered by the AptbConf1099Adr1 column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconf1099adr1(string|array<string> $AptbConf1099Adr1) Return ChildConfigAp objects filtered by the AptbConf1099Adr1 column
 * @method     ChildConfigAp[]|Collection findByAptbconf1099adr2(string|array<string> $AptbConf1099Adr2) Return ChildConfigAp objects filtered by the AptbConf1099Adr2 column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconf1099adr2(string|array<string> $AptbConf1099Adr2) Return ChildConfigAp objects filtered by the AptbConf1099Adr2 column
 * @method     ChildConfigAp[]|Collection findByAptbconf1099adr3(string|array<string> $AptbConf1099Adr3) Return ChildConfigAp objects filtered by the AptbConf1099Adr3 column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconf1099adr3(string|array<string> $AptbConf1099Adr3) Return ChildConfigAp objects filtered by the AptbConf1099Adr3 column
 * @method     ChildConfigAp[]|Collection findByAptbconf1099city(string|array<string> $AptbConf1099City) Return ChildConfigAp objects filtered by the AptbConf1099City column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconf1099city(string|array<string> $AptbConf1099City) Return ChildConfigAp objects filtered by the AptbConf1099City column
 * @method     ChildConfigAp[]|Collection findByAptbconf1099stat(string|array<string> $AptbConf1099Stat) Return ChildConfigAp objects filtered by the AptbConf1099Stat column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconf1099stat(string|array<string> $AptbConf1099Stat) Return ChildConfigAp objects filtered by the AptbConf1099Stat column
 * @method     ChildConfigAp[]|Collection findByAptbconf1099zipcode(string|array<string> $AptbConf1099ZipCode) Return ChildConfigAp objects filtered by the AptbConf1099ZipCode column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconf1099zipcode(string|array<string> $AptbConf1099ZipCode) Return ChildConfigAp objects filtered by the AptbConf1099ZipCode column
 * @method     ChildConfigAp[]|Collection findByAptbconf1099id(string|array<string> $AptbConf1099Id) Return ChildConfigAp objects filtered by the AptbConf1099Id column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconf1099id(string|array<string> $AptbConf1099Id) Return ChildConfigAp objects filtered by the AptbConf1099Id column
 * @method     ChildConfigAp[]|Collection findByAptbconfstubsort(string|array<string> $AptbConfStubSort) Return ChildConfigAp objects filtered by the AptbConfStubSort column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfstubsort(string|array<string> $AptbConfStubSort) Return ChildConfigAp objects filtered by the AptbConfStubSort column
 * @method     ChildConfigAp[]|Collection findByAptbConfUseAch(string|array<string> $AptbConfUseAch) Return ChildConfigAp objects filtered by the AptbConfUseAch column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbConfUseAch(string|array<string> $AptbConfUseAch) Return ChildConfigAp objects filtered by the AptbConfUseAch column
 * @method     ChildConfigAp[]|Collection findByAptbconfover1(int|array<int> $AptbConfOver1) Return ChildConfigAp objects filtered by the AptbConfOver1 column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfover1(int|array<int> $AptbConfOver1) Return ChildConfigAp objects filtered by the AptbConfOver1 column
 * @method     ChildConfigAp[]|Collection findByAptbconfover2(int|array<int> $AptbConfOver2) Return ChildConfigAp objects filtered by the AptbConfOver2 column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfover2(int|array<int> $AptbConfOver2) Return ChildConfigAp objects filtered by the AptbConfOver2 column
 * @method     ChildConfigAp[]|Collection findByAptbconfprtchk(string|array<string> $AptbConfPrtChk) Return ChildConfigAp objects filtered by the AptbConfPrtChk column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfprtchk(string|array<string> $AptbConfPrtChk) Return ChildConfigAp objects filtered by the AptbConfPrtChk column
 * @method     ChildConfigAp[]|Collection findByAptbconfeiunrecqty(string|array<string> $AptbConfEiUnrecQty) Return ChildConfigAp objects filtered by the AptbConfEiUnrecQty column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfeiunrecqty(string|array<string> $AptbConfEiUnrecQty) Return ChildConfigAp objects filtered by the AptbConfEiUnrecQty column
 * @method     ChildConfigAp[]|Collection findByAptbconfeirecqtyask(string|array<string> $AptbConfEiRecQtyAsk) Return ChildConfigAp objects filtered by the AptbConfEiRecQtyAsk column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfeirecqtyask(string|array<string> $AptbConfEiRecQtyAsk) Return ChildConfigAp objects filtered by the AptbConfEiRecQtyAsk column
 * @method     ChildConfigAp[]|Collection findByAptbconfeirecqtydef(string|array<string> $AptbConfEiRecQtyDef) Return ChildConfigAp objects filtered by the AptbConfEiRecQtyDef column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfeirecqtydef(string|array<string> $AptbConfEiRecQtyDef) Return ChildConfigAp objects filtered by the AptbConfEiRecQtyDef column
 * @method     ChildConfigAp[]|Collection findByAptbconfallowmultpos(string|array<string> $AptbConfAllowMultPos) Return ChildConfigAp objects filtered by the AptbConfAllowMultPos column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfallowmultpos(string|array<string> $AptbConfAllowMultPos) Return ChildConfigAp objects filtered by the AptbConfAllowMultPos column
 * @method     ChildConfigAp[]|Collection findByAptbconfeibyclerk(string|array<string> $AptbConfEiByClerk) Return ChildConfigAp objects filtered by the AptbConfEiByClerk column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfeibyclerk(string|array<string> $AptbConfEiByClerk) Return ChildConfigAp objects filtered by the AptbConfEiByClerk column
 * @method     ChildConfigAp[]|Collection findByAptbconfeibatchproc(string|array<string> $AptbConfEiBatchProc) Return ChildConfigAp objects filtered by the AptbConfEiBatchProc column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfeibatchproc(string|array<string> $AptbConfEiBatchProc) Return ChildConfigAp objects filtered by the AptbConfEiBatchProc column
 * @method     ChildConfigAp[]|Collection findByAptbconfeidispstancost(string|array<string> $AptbConfEiDispStanCost) Return ChildConfigAp objects filtered by the AptbConfEiDispStanCost column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfeidispstancost(string|array<string> $AptbConfEiDispStanCost) Return ChildConfigAp objects filtered by the AptbConfEiDispStanCost column
 * @method     ChildConfigAp[]|Collection findByAptbconfeiassetacctchg(string|array<string> $AptbConfEiAssetAcctChg) Return ChildConfigAp objects filtered by the AptbConfEiAssetAcctChg column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfeiassetacctchg(string|array<string> $AptbConfEiAssetAcctChg) Return ChildConfigAp objects filtered by the AptbConfEiAssetAcctChg column
 * @method     ChildConfigAp[]|Collection findByAptbconfallowdupinvc(string|array<string> $AptbConfAllowDupInvc) Return ChildConfigAp objects filtered by the AptbConfAllowDupInvc column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfallowdupinvc(string|array<string> $AptbConfAllowDupInvc) Return ChildConfigAp objects filtered by the AptbConfAllowDupInvc column
 * @method     ChildConfigAp[]|Collection findByAptbconfprtsorept(string|array<string> $AptbConfPrtSoRept) Return ChildConfigAp objects filtered by the AptbConfPrtSoRept column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfprtsorept(string|array<string> $AptbConfPrtSoRept) Return ChildConfigAp objects filtered by the AptbConfPrtSoRept column
 * @method     ChildConfigAp[]|Collection findByAptbconfeicheckhist(string|array<string> $AptbConfEiCheckHist) Return ChildConfigAp objects filtered by the AptbConfEiCheckHist column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfeicheckhist(string|array<string> $AptbConfEiCheckHist) Return ChildConfigAp objects filtered by the AptbConfEiCheckHist column
 * @method     ChildConfigAp[]|Collection findByAptbconfsummgl(string|array<string> $AptbConfSummGl) Return ChildConfigAp objects filtered by the AptbConfSummGl column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfsummgl(string|array<string> $AptbConfSummGl) Return ChildConfigAp objects filtered by the AptbConfSummGl column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmuserlabel(string|array<string> $AptbConfVxmUserLabel) Return ChildConfigAp objects filtered by the AptbConfVxmUserLabel column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmuserlabel(string|array<string> $AptbConfVxmUserLabel) Return ChildConfigAp objects filtered by the AptbConfVxmUserLabel column
 * @method     ChildConfigAp[]|Collection findByAptbconfvendcostbreaks(string|array<string> $AptbConfVendCostBreaks) Return ChildConfigAp objects filtered by the AptbConfVendCostBreaks column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvendcostbreaks(string|array<string> $AptbConfVendCostBreaks) Return ChildConfigAp objects filtered by the AptbConfVendCostBreaks column
 * @method     ChildConfigAp[]|Collection findByAptbconfmyeclrclospo(string|array<string> $AptbConfMyeClrClosPo) Return ChildConfigAp objects filtered by the AptbConfMyeClrClosPo column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfmyeclrclospo(string|array<string> $AptbConfMyeClrClosPo) Return ChildConfigAp objects filtered by the AptbConfMyeClrClosPo column
 * @method     ChildConfigAp[]|Collection findByAptbconfmyeclrclosdate(string|array<string> $AptbConfMyeClrClosDate) Return ChildConfigAp objects filtered by the AptbConfMyeClrClosDate column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfmyeclrclosdate(string|array<string> $AptbConfMyeClrClosDate) Return ChildConfigAp objects filtered by the AptbConfMyeClrClosDate column
 * @method     ChildConfigAp[]|Collection findByAptbconfmyeclrpohist(string|array<string> $AptbConfMyeClrPoHist) Return ChildConfigAp objects filtered by the AptbConfMyeClrPoHist column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfmyeclrpohist(string|array<string> $AptbConfMyeClrPoHist) Return ChildConfigAp objects filtered by the AptbConfMyeClrPoHist column
 * @method     ChildConfigAp[]|Collection findByAptbconfmyeclrpodate(string|array<string> $AptbConfMyeClrPoDate) Return ChildConfigAp objects filtered by the AptbConfMyeClrPoDate column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfmyeclrpodate(string|array<string> $AptbConfMyeClrPoDate) Return ChildConfigAp objects filtered by the AptbConfMyeClrPoDate column
 * @method     ChildConfigAp[]|Collection findByAptbconfmyeclrckhist(string|array<string> $AptbConfMyeClrCkHist) Return ChildConfigAp objects filtered by the AptbConfMyeClrCkHist column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfmyeclrckhist(string|array<string> $AptbConfMyeClrCkHist) Return ChildConfigAp objects filtered by the AptbConfMyeClrCkHist column
 * @method     ChildConfigAp[]|Collection findByAptbconfmyeclrckdate(string|array<string> $AptbConfMyeClrCkDate) Return ChildConfigAp objects filtered by the AptbConfMyeClrCkDate column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfmyeclrckdate(string|array<string> $AptbConfMyeClrCkDate) Return ChildConfigAp objects filtered by the AptbConfMyeClrCkDate column
 * @method     ChildConfigAp[]|Collection findByAptbconfmyeclropenck(string|array<string> $AptbConfMyeClrOpenCk) Return ChildConfigAp objects filtered by the AptbConfMyeClrOpenCk column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfmyeclropenck(string|array<string> $AptbConfMyeClrOpenCk) Return ChildConfigAp objects filtered by the AptbConfMyeClrOpenCk column
 * @method     ChildConfigAp[]|Collection findByAptbconflead(string|array<string> $AptbConfLead) Return ChildConfigAp objects filtered by the AptbConfLead column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconflead(string|array<string> $AptbConfLead) Return ChildConfigAp objects filtered by the AptbConfLead column
 * @method     ChildConfigAp[]|Collection findByAptbconfvrreworkitem(string|array<string> $AptbConfVrReworkItem) Return ChildConfigAp objects filtered by the AptbConfVrReworkItem column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvrreworkitem(string|array<string> $AptbConfVrReworkItem) Return ChildConfigAp objects filtered by the AptbConfVrReworkItem column
 * @method     ChildConfigAp[]|Collection findByAptbconfvrqcwhse(string|array<string> $AptbConfVrqcWhse) Return ChildConfigAp objects filtered by the AptbConfVrqcWhse column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvrqcwhse(string|array<string> $AptbConfVrqcWhse) Return ChildConfigAp objects filtered by the AptbConfVrqcWhse column
 * @method     ChildConfigAp[]|Collection findByAptbconfvrglacct(string|array<string> $AptbConfVrGlAcct) Return ChildConfigAp objects filtered by the AptbConfVrGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvrglacct(string|array<string> $AptbConfVrGlAcct) Return ChildConfigAp objects filtered by the AptbConfVrGlAcct column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmlistpc(string|array<string> $AptbConfVxmListPc) Return ChildConfigAp objects filtered by the AptbConfVxmListPc column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmlistpc(string|array<string> $AptbConfVxmListPc) Return ChildConfigAp objects filtered by the AptbConfVxmListPc column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmlistitemupd(string|array<string> $AptbConfVxmListItemUpd) Return ChildConfigAp objects filtered by the AptbConfVxmListItemUpd column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmlistitemupd(string|array<string> $AptbConfVxmListItemUpd) Return ChildConfigAp objects filtered by the AptbConfVxmListItemUpd column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmgrosslc(string|array<string> $AptbConfVxmGrossLc) Return ChildConfigAp objects filtered by the AptbConfVxmGrossLc column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmgrosslc(string|array<string> $AptbConfVxmGrossLc) Return ChildConfigAp objects filtered by the AptbConfVxmGrossLc column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmcostlp(string|array<string> $AptbConfVxmCostLp) Return ChildConfigAp objects filtered by the AptbConfVxmCostLp column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmcostlp(string|array<string> $AptbConfVxmCostLp) Return ChildConfigAp objects filtered by the AptbConfVxmCostLp column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmcostitemupd(string|array<string> $AptbConfVxmCostItemUpd) Return ChildConfigAp objects filtered by the AptbConfVxmCostItemUpd column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmcostitemupd(string|array<string> $AptbConfVxmCostItemUpd) Return ChildConfigAp objects filtered by the AptbConfVxmCostItemUpd column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmcostrmesg(string|array<string> $AptbConfVxmCostRMesg) Return ChildConfigAp objects filtered by the AptbConfVxmCostRMesg column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmcostrmesg(string|array<string> $AptbConfVxmCostRMesg) Return ChildConfigAp objects filtered by the AptbConfVxmCostRMesg column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmcostitemupdm(string|array<string> $AptbConfVxmCostItemUpdM) Return ChildConfigAp objects filtered by the AptbConfVxmCostItemUpdM column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmcostitemupdm(string|array<string> $AptbConfVxmCostItemUpdM) Return ChildConfigAp objects filtered by the AptbConfVxmCostItemUpdM column
 * @method     ChildConfigAp[]|Collection findByAptbconfvxmcostmmesg(string|array<string> $AptbConfVxmCostMMesg) Return ChildConfigAp objects filtered by the AptbConfVxmCostMMesg column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByAptbconfvxmcostmmesg(string|array<string> $AptbConfVxmCostMMesg) Return ChildConfigAp objects filtered by the AptbConfVxmCostMMesg column
 * @method     ChildConfigAp[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigAp objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigAp objects filtered by the DateUpdtd column
 * @method     ChildConfigAp[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigAp objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigAp objects filtered by the TimeUpdtd column
 * @method     ChildConfigAp[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigAp objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigAp> findByDummy(string|array<string> $dummy) Return ChildConfigAp objects filtered by the dummy column
 *
 * @method     ChildConfigAp[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigAp> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigApQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigApQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigAp', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigApQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigApQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildConfigApQuery) {
            return $criteria;
        }
        $query = new ChildConfigApQuery();
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
     * @return ChildConfigAp|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigApTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigApTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigAp A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT AptbConfKey, AptbConfGlIfac, AptbConfInIfac, AptbConfSoIfac, AptbConfPoIfac, AptbConfFrtAcct, AptbConfMiscAcct, AptbConfApAcct, AptbConfCashAcct, AptbConfDiscAcct, AptbConfTaxAcct, AptbConfPurAcct, AptbConfVarAcct, AptbConfVendDisc, AptbConfApInvVarAcct, AptbConfUseRoyal, AptbConfDefBuyrCode, AptbConfDefTermCode, AptbConfDefSviaCode, AptbConfDefTypeCode, AptbConfVendLine, AptbConfVendCols, AptbConfPoLine, AptbConfPoCols, AptbConfVendGetOpt, AptbConfPaytoShipfr, AptbConfHoldStat, AptbConfDiscRet, AptbConfStopVendChg, AptbConfReqDate2, AptbConfReqDate3, AptbConfReqDate4, AptbConf1099Name, AptbConf1099Adr1, AptbConf1099Adr2, AptbConf1099Adr3, AptbConf1099City, AptbConf1099Stat, AptbConf1099ZipCode, AptbConf1099Id, AptbConfStubSort, AptbConfUseAch, AptbConfOver1, AptbConfOver2, AptbConfPrtChk, AptbConfEiUnrecQty, AptbConfEiRecQtyAsk, AptbConfEiRecQtyDef, AptbConfAllowMultPos, AptbConfEiByClerk, AptbConfEiBatchProc, AptbConfEiDispStanCost, AptbConfEiAssetAcctChg, AptbConfAllowDupInvc, AptbConfPrtSoRept, AptbConfEiCheckHist, AptbConfSummGl, AptbConfVxmUserLabel, AptbConfVendCostBreaks, AptbConfMyeClrClosPo, AptbConfMyeClrClosDate, AptbConfMyeClrPoHist, AptbConfMyeClrPoDate, AptbConfMyeClrCkHist, AptbConfMyeClrCkDate, AptbConfMyeClrOpenCk, AptbConfLead, AptbConfVrReworkItem, AptbConfVrqcWhse, AptbConfVrGlAcct, AptbConfVxmListPc, AptbConfVxmListItemUpd, AptbConfVxmGrossLc, AptbConfVxmCostLp, AptbConfVxmCostItemUpd, AptbConfVxmCostRMesg, AptbConfVxmCostItemUpdM, AptbConfVxmCostMMesg, DateUpdtd, TimeUpdtd, dummy FROM ap_config WHERE AptbConfKey = :p0';
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
            /** @var ChildConfigAp $obj */
            $obj = new ChildConfigAp();
            $obj->hydrate($row);
            ConfigApTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigAp|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFKEY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFKEY, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the AptbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfkey(1234); // WHERE AptbConfKey = 1234
     * $query->filterByAptbconfkey(array(12, 34)); // WHERE AptbConfKey IN (12, 34)
     * $query->filterByAptbconfkey(array('min' => 12)); // WHERE AptbConfKey > 12
     * </code>
     *
     * @param mixed $aptbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfkey($aptbconfkey = null, ?string $comparison = null)
    {
        if (is_array($aptbconfkey)) {
            $useMinMax = false;
            if (isset($aptbconfkey['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFKEY, $aptbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfkey['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFKEY, $aptbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFKEY, $aptbconfkey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfGlIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfglifac('fooValue');   // WHERE AptbConfGlIfac = 'fooValue'
     * $query->filterByAptbconfglifac('%fooValue%', Criteria::LIKE); // WHERE AptbConfGlIfac LIKE '%fooValue%'
     * $query->filterByAptbconfglifac(['foo', 'bar']); // WHERE AptbConfGlIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfglifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfglifac($aptbconfglifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfglifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFGLIFAC, $aptbconfglifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfInIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfinifac('fooValue');   // WHERE AptbConfInIfac = 'fooValue'
     * $query->filterByAptbconfinifac('%fooValue%', Criteria::LIKE); // WHERE AptbConfInIfac LIKE '%fooValue%'
     * $query->filterByAptbconfinifac(['foo', 'bar']); // WHERE AptbConfInIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfinifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfinifac($aptbconfinifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfinifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFINIFAC, $aptbconfinifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfSoIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfsoifac('fooValue');   // WHERE AptbConfSoIfac = 'fooValue'
     * $query->filterByAptbconfsoifac('%fooValue%', Criteria::LIKE); // WHERE AptbConfSoIfac LIKE '%fooValue%'
     * $query->filterByAptbconfsoifac(['foo', 'bar']); // WHERE AptbConfSoIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfsoifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfsoifac($aptbconfsoifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfsoifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFSOIFAC, $aptbconfsoifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfPoIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfpoifac('fooValue');   // WHERE AptbConfPoIfac = 'fooValue'
     * $query->filterByAptbconfpoifac('%fooValue%', Criteria::LIKE); // WHERE AptbConfPoIfac LIKE '%fooValue%'
     * $query->filterByAptbconfpoifac(['foo', 'bar']); // WHERE AptbConfPoIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfpoifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfpoifac($aptbconfpoifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfpoifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPOIFAC, $aptbconfpoifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfFrtAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconffrtacct('fooValue');   // WHERE AptbConfFrtAcct = 'fooValue'
     * $query->filterByAptbconffrtacct('%fooValue%', Criteria::LIKE); // WHERE AptbConfFrtAcct LIKE '%fooValue%'
     * $query->filterByAptbconffrtacct(['foo', 'bar']); // WHERE AptbConfFrtAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconffrtacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconffrtacct($aptbconffrtacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconffrtacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFFRTACCT, $aptbconffrtacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfMiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfmiscacct('fooValue');   // WHERE AptbConfMiscAcct = 'fooValue'
     * $query->filterByAptbconfmiscacct('%fooValue%', Criteria::LIKE); // WHERE AptbConfMiscAcct LIKE '%fooValue%'
     * $query->filterByAptbconfmiscacct(['foo', 'bar']); // WHERE AptbConfMiscAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfmiscacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfmiscacct($aptbconfmiscacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfmiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFMISCACCT, $aptbconfmiscacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfApAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfapacct('fooValue');   // WHERE AptbConfApAcct = 'fooValue'
     * $query->filterByAptbconfapacct('%fooValue%', Criteria::LIKE); // WHERE AptbConfApAcct LIKE '%fooValue%'
     * $query->filterByAptbconfapacct(['foo', 'bar']); // WHERE AptbConfApAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfapacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfapacct($aptbconfapacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfapacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFAPACCT, $aptbconfapacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfcashacct('fooValue');   // WHERE AptbConfCashAcct = 'fooValue'
     * $query->filterByAptbconfcashacct('%fooValue%', Criteria::LIKE); // WHERE AptbConfCashAcct LIKE '%fooValue%'
     * $query->filterByAptbconfcashacct(['foo', 'bar']); // WHERE AptbConfCashAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfcashacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfcashacct($aptbconfcashacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfcashacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFCASHACCT, $aptbconfcashacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfDiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfdiscacct('fooValue');   // WHERE AptbConfDiscAcct = 'fooValue'
     * $query->filterByAptbconfdiscacct('%fooValue%', Criteria::LIKE); // WHERE AptbConfDiscAcct LIKE '%fooValue%'
     * $query->filterByAptbconfdiscacct(['foo', 'bar']); // WHERE AptbConfDiscAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfdiscacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfdiscacct($aptbconfdiscacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfdiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFDISCACCT, $aptbconfdiscacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfTaxAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconftaxacct('fooValue');   // WHERE AptbConfTaxAcct = 'fooValue'
     * $query->filterByAptbconftaxacct('%fooValue%', Criteria::LIKE); // WHERE AptbConfTaxAcct LIKE '%fooValue%'
     * $query->filterByAptbconftaxacct(['foo', 'bar']); // WHERE AptbConfTaxAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconftaxacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconftaxacct($aptbconftaxacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconftaxacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFTAXACCT, $aptbconftaxacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfPurAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfpuracct('fooValue');   // WHERE AptbConfPurAcct = 'fooValue'
     * $query->filterByAptbconfpuracct('%fooValue%', Criteria::LIKE); // WHERE AptbConfPurAcct LIKE '%fooValue%'
     * $query->filterByAptbconfpuracct(['foo', 'bar']); // WHERE AptbConfPurAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfpuracct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfpuracct($aptbconfpuracct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfpuracct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPURACCT, $aptbconfpuracct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVarAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvaracct('fooValue');   // WHERE AptbConfVarAcct = 'fooValue'
     * $query->filterByAptbconfvaracct('%fooValue%', Criteria::LIKE); // WHERE AptbConfVarAcct LIKE '%fooValue%'
     * $query->filterByAptbconfvaracct(['foo', 'bar']); // WHERE AptbConfVarAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvaracct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvaracct($aptbconfvaracct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvaracct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVARACCT, $aptbconfvaracct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVendDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvenddisc('fooValue');   // WHERE AptbConfVendDisc = 'fooValue'
     * $query->filterByAptbconfvenddisc('%fooValue%', Criteria::LIKE); // WHERE AptbConfVendDisc LIKE '%fooValue%'
     * $query->filterByAptbconfvenddisc(['foo', 'bar']); // WHERE AptbConfVendDisc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvenddisc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvenddisc($aptbconfvenddisc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvenddisc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDDISC, $aptbconfvenddisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfApInvVarAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfapinvvaracct('fooValue');   // WHERE AptbConfApInvVarAcct = 'fooValue'
     * $query->filterByAptbconfapinvvaracct('%fooValue%', Criteria::LIKE); // WHERE AptbConfApInvVarAcct LIKE '%fooValue%'
     * $query->filterByAptbconfapinvvaracct(['foo', 'bar']); // WHERE AptbConfApInvVarAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfapinvvaracct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfapinvvaracct($aptbconfapinvvaracct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfapinvvaracct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFAPINVVARACCT, $aptbconfapinvvaracct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfUseRoyal column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfuseroyal('fooValue');   // WHERE AptbConfUseRoyal = 'fooValue'
     * $query->filterByAptbconfuseroyal('%fooValue%', Criteria::LIKE); // WHERE AptbConfUseRoyal LIKE '%fooValue%'
     * $query->filterByAptbconfuseroyal(['foo', 'bar']); // WHERE AptbConfUseRoyal IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfuseroyal The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfuseroyal($aptbconfuseroyal = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfuseroyal)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFUSEROYAL, $aptbconfuseroyal, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfDefBuyrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfdefbuyrcode('fooValue');   // WHERE AptbConfDefBuyrCode = 'fooValue'
     * $query->filterByAptbconfdefbuyrcode('%fooValue%', Criteria::LIKE); // WHERE AptbConfDefBuyrCode LIKE '%fooValue%'
     * $query->filterByAptbconfdefbuyrcode(['foo', 'bar']); // WHERE AptbConfDefBuyrCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfdefbuyrcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfdefbuyrcode($aptbconfdefbuyrcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfdefbuyrcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFDEFBUYRCODE, $aptbconfdefbuyrcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfDefTermCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfdeftermcode('fooValue');   // WHERE AptbConfDefTermCode = 'fooValue'
     * $query->filterByAptbconfdeftermcode('%fooValue%', Criteria::LIKE); // WHERE AptbConfDefTermCode LIKE '%fooValue%'
     * $query->filterByAptbconfdeftermcode(['foo', 'bar']); // WHERE AptbConfDefTermCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfdeftermcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfdeftermcode($aptbconfdeftermcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfdeftermcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFDEFTERMCODE, $aptbconfdeftermcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfDefSviaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfdefsviacode('fooValue');   // WHERE AptbConfDefSviaCode = 'fooValue'
     * $query->filterByAptbconfdefsviacode('%fooValue%', Criteria::LIKE); // WHERE AptbConfDefSviaCode LIKE '%fooValue%'
     * $query->filterByAptbconfdefsviacode(['foo', 'bar']); // WHERE AptbConfDefSviaCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfdefsviacode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfdefsviacode($aptbconfdefsviacode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfdefsviacode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFDEFSVIACODE, $aptbconfdefsviacode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfDefTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfdeftypecode('fooValue');   // WHERE AptbConfDefTypeCode = 'fooValue'
     * $query->filterByAptbconfdeftypecode('%fooValue%', Criteria::LIKE); // WHERE AptbConfDefTypeCode LIKE '%fooValue%'
     * $query->filterByAptbconfdeftypecode(['foo', 'bar']); // WHERE AptbConfDefTypeCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfdeftypecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfdeftypecode($aptbconfdeftypecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfdeftypecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFDEFTYPECODE, $aptbconfdeftypecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVendLine column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvendline(1234); // WHERE AptbConfVendLine = 1234
     * $query->filterByAptbconfvendline(array(12, 34)); // WHERE AptbConfVendLine IN (12, 34)
     * $query->filterByAptbconfvendline(array('min' => 12)); // WHERE AptbConfVendLine > 12
     * </code>
     *
     * @param mixed $aptbconfvendline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvendline($aptbconfvendline = null, ?string $comparison = null)
    {
        if (is_array($aptbconfvendline)) {
            $useMinMax = false;
            if (isset($aptbconfvendline['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDLINE, $aptbconfvendline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfvendline['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDLINE, $aptbconfvendline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDLINE, $aptbconfvendline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVendCols column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvendcols(1234); // WHERE AptbConfVendCols = 1234
     * $query->filterByAptbconfvendcols(array(12, 34)); // WHERE AptbConfVendCols IN (12, 34)
     * $query->filterByAptbconfvendcols(array('min' => 12)); // WHERE AptbConfVendCols > 12
     * </code>
     *
     * @param mixed $aptbconfvendcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvendcols($aptbconfvendcols = null, ?string $comparison = null)
    {
        if (is_array($aptbconfvendcols)) {
            $useMinMax = false;
            if (isset($aptbconfvendcols['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDCOLS, $aptbconfvendcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfvendcols['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDCOLS, $aptbconfvendcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDCOLS, $aptbconfvendcols, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfPoLine column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfpoline(1234); // WHERE AptbConfPoLine = 1234
     * $query->filterByAptbconfpoline(array(12, 34)); // WHERE AptbConfPoLine IN (12, 34)
     * $query->filterByAptbconfpoline(array('min' => 12)); // WHERE AptbConfPoLine > 12
     * </code>
     *
     * @param mixed $aptbconfpoline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfpoline($aptbconfpoline = null, ?string $comparison = null)
    {
        if (is_array($aptbconfpoline)) {
            $useMinMax = false;
            if (isset($aptbconfpoline['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPOLINE, $aptbconfpoline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfpoline['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPOLINE, $aptbconfpoline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPOLINE, $aptbconfpoline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfPoCols column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfpocols(1234); // WHERE AptbConfPoCols = 1234
     * $query->filterByAptbconfpocols(array(12, 34)); // WHERE AptbConfPoCols IN (12, 34)
     * $query->filterByAptbconfpocols(array('min' => 12)); // WHERE AptbConfPoCols > 12
     * </code>
     *
     * @param mixed $aptbconfpocols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfpocols($aptbconfpocols = null, ?string $comparison = null)
    {
        if (is_array($aptbconfpocols)) {
            $useMinMax = false;
            if (isset($aptbconfpocols['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPOCOLS, $aptbconfpocols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfpocols['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPOCOLS, $aptbconfpocols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPOCOLS, $aptbconfpocols, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVendGetOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvendgetopt(1234); // WHERE AptbConfVendGetOpt = 1234
     * $query->filterByAptbconfvendgetopt(array(12, 34)); // WHERE AptbConfVendGetOpt IN (12, 34)
     * $query->filterByAptbconfvendgetopt(array('min' => 12)); // WHERE AptbConfVendGetOpt > 12
     * </code>
     *
     * @param mixed $aptbconfvendgetopt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvendgetopt($aptbconfvendgetopt = null, ?string $comparison = null)
    {
        if (is_array($aptbconfvendgetopt)) {
            $useMinMax = false;
            if (isset($aptbconfvendgetopt['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDGETOPT, $aptbconfvendgetopt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfvendgetopt['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDGETOPT, $aptbconfvendgetopt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDGETOPT, $aptbconfvendgetopt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfPaytoShipfr column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfpaytoshipfr('fooValue');   // WHERE AptbConfPaytoShipfr = 'fooValue'
     * $query->filterByAptbconfpaytoshipfr('%fooValue%', Criteria::LIKE); // WHERE AptbConfPaytoShipfr LIKE '%fooValue%'
     * $query->filterByAptbconfpaytoshipfr(['foo', 'bar']); // WHERE AptbConfPaytoShipfr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfpaytoshipfr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfpaytoshipfr($aptbconfpaytoshipfr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfpaytoshipfr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPAYTOSHIPFR, $aptbconfpaytoshipfr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfHoldStat column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfholdstat('fooValue');   // WHERE AptbConfHoldStat = 'fooValue'
     * $query->filterByAptbconfholdstat('%fooValue%', Criteria::LIKE); // WHERE AptbConfHoldStat LIKE '%fooValue%'
     * $query->filterByAptbconfholdstat(['foo', 'bar']); // WHERE AptbConfHoldStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfholdstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfholdstat($aptbconfholdstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfholdstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFHOLDSTAT, $aptbconfholdstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfDiscRet column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfdiscret('fooValue');   // WHERE AptbConfDiscRet = 'fooValue'
     * $query->filterByAptbconfdiscret('%fooValue%', Criteria::LIKE); // WHERE AptbConfDiscRet LIKE '%fooValue%'
     * $query->filterByAptbconfdiscret(['foo', 'bar']); // WHERE AptbConfDiscRet IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfdiscret The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfdiscret($aptbconfdiscret = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfdiscret)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFDISCRET, $aptbconfdiscret, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfStopVendChg column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfstopvendchg(1234); // WHERE AptbConfStopVendChg = 1234
     * $query->filterByAptbconfstopvendchg(array(12, 34)); // WHERE AptbConfStopVendChg IN (12, 34)
     * $query->filterByAptbconfstopvendchg(array('min' => 12)); // WHERE AptbConfStopVendChg > 12
     * </code>
     *
     * @param mixed $aptbconfstopvendchg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfstopvendchg($aptbconfstopvendchg = null, ?string $comparison = null)
    {
        if (is_array($aptbconfstopvendchg)) {
            $useMinMax = false;
            if (isset($aptbconfstopvendchg['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFSTOPVENDCHG, $aptbconfstopvendchg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfstopvendchg['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFSTOPVENDCHG, $aptbconfstopvendchg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFSTOPVENDCHG, $aptbconfstopvendchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfReqDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfreqdate2(1234); // WHERE AptbConfReqDate2 = 1234
     * $query->filterByAptbconfreqdate2(array(12, 34)); // WHERE AptbConfReqDate2 IN (12, 34)
     * $query->filterByAptbconfreqdate2(array('min' => 12)); // WHERE AptbConfReqDate2 > 12
     * </code>
     *
     * @param mixed $aptbconfreqdate2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfreqdate2($aptbconfreqdate2 = null, ?string $comparison = null)
    {
        if (is_array($aptbconfreqdate2)) {
            $useMinMax = false;
            if (isset($aptbconfreqdate2['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE2, $aptbconfreqdate2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfreqdate2['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE2, $aptbconfreqdate2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE2, $aptbconfreqdate2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfReqDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfreqdate3(1234); // WHERE AptbConfReqDate3 = 1234
     * $query->filterByAptbconfreqdate3(array(12, 34)); // WHERE AptbConfReqDate3 IN (12, 34)
     * $query->filterByAptbconfreqdate3(array('min' => 12)); // WHERE AptbConfReqDate3 > 12
     * </code>
     *
     * @param mixed $aptbconfreqdate3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfreqdate3($aptbconfreqdate3 = null, ?string $comparison = null)
    {
        if (is_array($aptbconfreqdate3)) {
            $useMinMax = false;
            if (isset($aptbconfreqdate3['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE3, $aptbconfreqdate3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfreqdate3['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE3, $aptbconfreqdate3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE3, $aptbconfreqdate3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfReqDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfreqdate4(1234); // WHERE AptbConfReqDate4 = 1234
     * $query->filterByAptbconfreqdate4(array(12, 34)); // WHERE AptbConfReqDate4 IN (12, 34)
     * $query->filterByAptbconfreqdate4(array('min' => 12)); // WHERE AptbConfReqDate4 > 12
     * </code>
     *
     * @param mixed $aptbconfreqdate4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfreqdate4($aptbconfreqdate4 = null, ?string $comparison = null)
    {
        if (is_array($aptbconfreqdate4)) {
            $useMinMax = false;
            if (isset($aptbconfreqdate4['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE4, $aptbconfreqdate4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfreqdate4['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE4, $aptbconfreqdate4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFREQDATE4, $aptbconfreqdate4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConf1099Name column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconf1099name('fooValue');   // WHERE AptbConf1099Name = 'fooValue'
     * $query->filterByAptbconf1099name('%fooValue%', Criteria::LIKE); // WHERE AptbConf1099Name LIKE '%fooValue%'
     * $query->filterByAptbconf1099name(['foo', 'bar']); // WHERE AptbConf1099Name IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconf1099name The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconf1099name($aptbconf1099name = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconf1099name)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONF1099NAME, $aptbconf1099name, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConf1099Adr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconf1099adr1('fooValue');   // WHERE AptbConf1099Adr1 = 'fooValue'
     * $query->filterByAptbconf1099adr1('%fooValue%', Criteria::LIKE); // WHERE AptbConf1099Adr1 LIKE '%fooValue%'
     * $query->filterByAptbconf1099adr1(['foo', 'bar']); // WHERE AptbConf1099Adr1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconf1099adr1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconf1099adr1($aptbconf1099adr1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconf1099adr1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONF1099ADR1, $aptbconf1099adr1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConf1099Adr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconf1099adr2('fooValue');   // WHERE AptbConf1099Adr2 = 'fooValue'
     * $query->filterByAptbconf1099adr2('%fooValue%', Criteria::LIKE); // WHERE AptbConf1099Adr2 LIKE '%fooValue%'
     * $query->filterByAptbconf1099adr2(['foo', 'bar']); // WHERE AptbConf1099Adr2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconf1099adr2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconf1099adr2($aptbconf1099adr2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconf1099adr2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONF1099ADR2, $aptbconf1099adr2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConf1099Adr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconf1099adr3('fooValue');   // WHERE AptbConf1099Adr3 = 'fooValue'
     * $query->filterByAptbconf1099adr3('%fooValue%', Criteria::LIKE); // WHERE AptbConf1099Adr3 LIKE '%fooValue%'
     * $query->filterByAptbconf1099adr3(['foo', 'bar']); // WHERE AptbConf1099Adr3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconf1099adr3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconf1099adr3($aptbconf1099adr3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconf1099adr3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONF1099ADR3, $aptbconf1099adr3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConf1099City column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconf1099city('fooValue');   // WHERE AptbConf1099City = 'fooValue'
     * $query->filterByAptbconf1099city('%fooValue%', Criteria::LIKE); // WHERE AptbConf1099City LIKE '%fooValue%'
     * $query->filterByAptbconf1099city(['foo', 'bar']); // WHERE AptbConf1099City IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconf1099city The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconf1099city($aptbconf1099city = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconf1099city)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONF1099CITY, $aptbconf1099city, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConf1099Stat column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconf1099stat('fooValue');   // WHERE AptbConf1099Stat = 'fooValue'
     * $query->filterByAptbconf1099stat('%fooValue%', Criteria::LIKE); // WHERE AptbConf1099Stat LIKE '%fooValue%'
     * $query->filterByAptbconf1099stat(['foo', 'bar']); // WHERE AptbConf1099Stat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconf1099stat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconf1099stat($aptbconf1099stat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconf1099stat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONF1099STAT, $aptbconf1099stat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConf1099ZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconf1099zipcode('fooValue');   // WHERE AptbConf1099ZipCode = 'fooValue'
     * $query->filterByAptbconf1099zipcode('%fooValue%', Criteria::LIKE); // WHERE AptbConf1099ZipCode LIKE '%fooValue%'
     * $query->filterByAptbconf1099zipcode(['foo', 'bar']); // WHERE AptbConf1099ZipCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconf1099zipcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconf1099zipcode($aptbconf1099zipcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconf1099zipcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONF1099ZIPCODE, $aptbconf1099zipcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConf1099Id column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconf1099id('fooValue');   // WHERE AptbConf1099Id = 'fooValue'
     * $query->filterByAptbconf1099id('%fooValue%', Criteria::LIKE); // WHERE AptbConf1099Id LIKE '%fooValue%'
     * $query->filterByAptbconf1099id(['foo', 'bar']); // WHERE AptbConf1099Id IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconf1099id The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconf1099id($aptbconf1099id = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconf1099id)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONF1099ID, $aptbconf1099id, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfStubSort column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfstubsort('fooValue');   // WHERE AptbConfStubSort = 'fooValue'
     * $query->filterByAptbconfstubsort('%fooValue%', Criteria::LIKE); // WHERE AptbConfStubSort LIKE '%fooValue%'
     * $query->filterByAptbconfstubsort(['foo', 'bar']); // WHERE AptbConfStubSort IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfstubsort The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfstubsort($aptbconfstubsort = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfstubsort)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFSTUBSORT, $aptbconfstubsort, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfUseAch column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbConfUseAch('fooValue');   // WHERE AptbConfUseAch = 'fooValue'
     * $query->filterByAptbConfUseAch('%fooValue%', Criteria::LIKE); // WHERE AptbConfUseAch LIKE '%fooValue%'
     * $query->filterByAptbConfUseAch(['foo', 'bar']); // WHERE AptbConfUseAch IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbConfUseAch The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbConfUseAch($aptbConfUseAch = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbConfUseAch)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFUSEACH, $aptbConfUseAch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfOver1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfover1(1234); // WHERE AptbConfOver1 = 1234
     * $query->filterByAptbconfover1(array(12, 34)); // WHERE AptbConfOver1 IN (12, 34)
     * $query->filterByAptbconfover1(array('min' => 12)); // WHERE AptbConfOver1 > 12
     * </code>
     *
     * @param mixed $aptbconfover1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfover1($aptbconfover1 = null, ?string $comparison = null)
    {
        if (is_array($aptbconfover1)) {
            $useMinMax = false;
            if (isset($aptbconfover1['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFOVER1, $aptbconfover1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfover1['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFOVER1, $aptbconfover1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFOVER1, $aptbconfover1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfOver2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfover2(1234); // WHERE AptbConfOver2 = 1234
     * $query->filterByAptbconfover2(array(12, 34)); // WHERE AptbConfOver2 IN (12, 34)
     * $query->filterByAptbconfover2(array('min' => 12)); // WHERE AptbConfOver2 > 12
     * </code>
     *
     * @param mixed $aptbconfover2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfover2($aptbconfover2 = null, ?string $comparison = null)
    {
        if (is_array($aptbconfover2)) {
            $useMinMax = false;
            if (isset($aptbconfover2['min'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFOVER2, $aptbconfover2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptbconfover2['max'])) {
                $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFOVER2, $aptbconfover2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFOVER2, $aptbconfover2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfPrtChk column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfprtchk('fooValue');   // WHERE AptbConfPrtChk = 'fooValue'
     * $query->filterByAptbconfprtchk('%fooValue%', Criteria::LIKE); // WHERE AptbConfPrtChk LIKE '%fooValue%'
     * $query->filterByAptbconfprtchk(['foo', 'bar']); // WHERE AptbConfPrtChk IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfprtchk The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfprtchk($aptbconfprtchk = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfprtchk)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPRTCHK, $aptbconfprtchk, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfEiUnrecQty column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfeiunrecqty('fooValue');   // WHERE AptbConfEiUnrecQty = 'fooValue'
     * $query->filterByAptbconfeiunrecqty('%fooValue%', Criteria::LIKE); // WHERE AptbConfEiUnrecQty LIKE '%fooValue%'
     * $query->filterByAptbconfeiunrecqty(['foo', 'bar']); // WHERE AptbConfEiUnrecQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfeiunrecqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfeiunrecqty($aptbconfeiunrecqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfeiunrecqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFEIUNRECQTY, $aptbconfeiunrecqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfEiRecQtyAsk column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfeirecqtyask('fooValue');   // WHERE AptbConfEiRecQtyAsk = 'fooValue'
     * $query->filterByAptbconfeirecqtyask('%fooValue%', Criteria::LIKE); // WHERE AptbConfEiRecQtyAsk LIKE '%fooValue%'
     * $query->filterByAptbconfeirecqtyask(['foo', 'bar']); // WHERE AptbConfEiRecQtyAsk IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfeirecqtyask The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfeirecqtyask($aptbconfeirecqtyask = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfeirecqtyask)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFEIRECQTYASK, $aptbconfeirecqtyask, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfEiRecQtyDef column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfeirecqtydef('fooValue');   // WHERE AptbConfEiRecQtyDef = 'fooValue'
     * $query->filterByAptbconfeirecqtydef('%fooValue%', Criteria::LIKE); // WHERE AptbConfEiRecQtyDef LIKE '%fooValue%'
     * $query->filterByAptbconfeirecqtydef(['foo', 'bar']); // WHERE AptbConfEiRecQtyDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfeirecqtydef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfeirecqtydef($aptbconfeirecqtydef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfeirecqtydef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFEIRECQTYDEF, $aptbconfeirecqtydef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfAllowMultPos column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfallowmultpos('fooValue');   // WHERE AptbConfAllowMultPos = 'fooValue'
     * $query->filterByAptbconfallowmultpos('%fooValue%', Criteria::LIKE); // WHERE AptbConfAllowMultPos LIKE '%fooValue%'
     * $query->filterByAptbconfallowmultpos(['foo', 'bar']); // WHERE AptbConfAllowMultPos IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfallowmultpos The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfallowmultpos($aptbconfallowmultpos = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfallowmultpos)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFALLOWMULTPOS, $aptbconfallowmultpos, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfEiByClerk column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfeibyclerk('fooValue');   // WHERE AptbConfEiByClerk = 'fooValue'
     * $query->filterByAptbconfeibyclerk('%fooValue%', Criteria::LIKE); // WHERE AptbConfEiByClerk LIKE '%fooValue%'
     * $query->filterByAptbconfeibyclerk(['foo', 'bar']); // WHERE AptbConfEiByClerk IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfeibyclerk The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfeibyclerk($aptbconfeibyclerk = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfeibyclerk)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFEIBYCLERK, $aptbconfeibyclerk, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfEiBatchProc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfeibatchproc('fooValue');   // WHERE AptbConfEiBatchProc = 'fooValue'
     * $query->filterByAptbconfeibatchproc('%fooValue%', Criteria::LIKE); // WHERE AptbConfEiBatchProc LIKE '%fooValue%'
     * $query->filterByAptbconfeibatchproc(['foo', 'bar']); // WHERE AptbConfEiBatchProc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfeibatchproc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfeibatchproc($aptbconfeibatchproc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfeibatchproc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFEIBATCHPROC, $aptbconfeibatchproc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfEiDispStanCost column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfeidispstancost('fooValue');   // WHERE AptbConfEiDispStanCost = 'fooValue'
     * $query->filterByAptbconfeidispstancost('%fooValue%', Criteria::LIKE); // WHERE AptbConfEiDispStanCost LIKE '%fooValue%'
     * $query->filterByAptbconfeidispstancost(['foo', 'bar']); // WHERE AptbConfEiDispStanCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfeidispstancost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfeidispstancost($aptbconfeidispstancost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfeidispstancost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFEIDISPSTANCOST, $aptbconfeidispstancost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfEiAssetAcctChg column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfeiassetacctchg('fooValue');   // WHERE AptbConfEiAssetAcctChg = 'fooValue'
     * $query->filterByAptbconfeiassetacctchg('%fooValue%', Criteria::LIKE); // WHERE AptbConfEiAssetAcctChg LIKE '%fooValue%'
     * $query->filterByAptbconfeiassetacctchg(['foo', 'bar']); // WHERE AptbConfEiAssetAcctChg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfeiassetacctchg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfeiassetacctchg($aptbconfeiassetacctchg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfeiassetacctchg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFEIASSETACCTCHG, $aptbconfeiassetacctchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfAllowDupInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfallowdupinvc('fooValue');   // WHERE AptbConfAllowDupInvc = 'fooValue'
     * $query->filterByAptbconfallowdupinvc('%fooValue%', Criteria::LIKE); // WHERE AptbConfAllowDupInvc LIKE '%fooValue%'
     * $query->filterByAptbconfallowdupinvc(['foo', 'bar']); // WHERE AptbConfAllowDupInvc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfallowdupinvc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfallowdupinvc($aptbconfallowdupinvc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfallowdupinvc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFALLOWDUPINVC, $aptbconfallowdupinvc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfPrtSoRept column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfprtsorept('fooValue');   // WHERE AptbConfPrtSoRept = 'fooValue'
     * $query->filterByAptbconfprtsorept('%fooValue%', Criteria::LIKE); // WHERE AptbConfPrtSoRept LIKE '%fooValue%'
     * $query->filterByAptbconfprtsorept(['foo', 'bar']); // WHERE AptbConfPrtSoRept IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfprtsorept The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfprtsorept($aptbconfprtsorept = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfprtsorept)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFPRTSOREPT, $aptbconfprtsorept, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfEiCheckHist column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfeicheckhist('fooValue');   // WHERE AptbConfEiCheckHist = 'fooValue'
     * $query->filterByAptbconfeicheckhist('%fooValue%', Criteria::LIKE); // WHERE AptbConfEiCheckHist LIKE '%fooValue%'
     * $query->filterByAptbconfeicheckhist(['foo', 'bar']); // WHERE AptbConfEiCheckHist IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfeicheckhist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfeicheckhist($aptbconfeicheckhist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfeicheckhist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFEICHECKHIST, $aptbconfeicheckhist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfSummGl column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfsummgl('fooValue');   // WHERE AptbConfSummGl = 'fooValue'
     * $query->filterByAptbconfsummgl('%fooValue%', Criteria::LIKE); // WHERE AptbConfSummGl LIKE '%fooValue%'
     * $query->filterByAptbconfsummgl(['foo', 'bar']); // WHERE AptbConfSummGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfsummgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfsummgl($aptbconfsummgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfsummgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFSUMMGL, $aptbconfsummgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmUserLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmuserlabel('fooValue');   // WHERE AptbConfVxmUserLabel = 'fooValue'
     * $query->filterByAptbconfvxmuserlabel('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmUserLabel LIKE '%fooValue%'
     * $query->filterByAptbconfvxmuserlabel(['foo', 'bar']); // WHERE AptbConfVxmUserLabel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmuserlabel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmuserlabel($aptbconfvxmuserlabel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmuserlabel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMUSERLABEL, $aptbconfvxmuserlabel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVendCostBreaks column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvendcostbreaks('fooValue');   // WHERE AptbConfVendCostBreaks = 'fooValue'
     * $query->filterByAptbconfvendcostbreaks('%fooValue%', Criteria::LIKE); // WHERE AptbConfVendCostBreaks LIKE '%fooValue%'
     * $query->filterByAptbconfvendcostbreaks(['foo', 'bar']); // WHERE AptbConfVendCostBreaks IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvendcostbreaks The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvendcostbreaks($aptbconfvendcostbreaks = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvendcostbreaks)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVENDCOSTBREAKS, $aptbconfvendcostbreaks, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfMyeClrClosPo column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfmyeclrclospo('fooValue');   // WHERE AptbConfMyeClrClosPo = 'fooValue'
     * $query->filterByAptbconfmyeclrclospo('%fooValue%', Criteria::LIKE); // WHERE AptbConfMyeClrClosPo LIKE '%fooValue%'
     * $query->filterByAptbconfmyeclrclospo(['foo', 'bar']); // WHERE AptbConfMyeClrClosPo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfmyeclrclospo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfmyeclrclospo($aptbconfmyeclrclospo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfmyeclrclospo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFMYECLRCLOSPO, $aptbconfmyeclrclospo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfMyeClrClosDate column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfmyeclrclosdate('fooValue');   // WHERE AptbConfMyeClrClosDate = 'fooValue'
     * $query->filterByAptbconfmyeclrclosdate('%fooValue%', Criteria::LIKE); // WHERE AptbConfMyeClrClosDate LIKE '%fooValue%'
     * $query->filterByAptbconfmyeclrclosdate(['foo', 'bar']); // WHERE AptbConfMyeClrClosDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfmyeclrclosdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfmyeclrclosdate($aptbconfmyeclrclosdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfmyeclrclosdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFMYECLRCLOSDATE, $aptbconfmyeclrclosdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfMyeClrPoHist column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfmyeclrpohist('fooValue');   // WHERE AptbConfMyeClrPoHist = 'fooValue'
     * $query->filterByAptbconfmyeclrpohist('%fooValue%', Criteria::LIKE); // WHERE AptbConfMyeClrPoHist LIKE '%fooValue%'
     * $query->filterByAptbconfmyeclrpohist(['foo', 'bar']); // WHERE AptbConfMyeClrPoHist IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfmyeclrpohist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfmyeclrpohist($aptbconfmyeclrpohist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfmyeclrpohist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFMYECLRPOHIST, $aptbconfmyeclrpohist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfMyeClrPoDate column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfmyeclrpodate('fooValue');   // WHERE AptbConfMyeClrPoDate = 'fooValue'
     * $query->filterByAptbconfmyeclrpodate('%fooValue%', Criteria::LIKE); // WHERE AptbConfMyeClrPoDate LIKE '%fooValue%'
     * $query->filterByAptbconfmyeclrpodate(['foo', 'bar']); // WHERE AptbConfMyeClrPoDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfmyeclrpodate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfmyeclrpodate($aptbconfmyeclrpodate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfmyeclrpodate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFMYECLRPODATE, $aptbconfmyeclrpodate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfMyeClrCkHist column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfmyeclrckhist('fooValue');   // WHERE AptbConfMyeClrCkHist = 'fooValue'
     * $query->filterByAptbconfmyeclrckhist('%fooValue%', Criteria::LIKE); // WHERE AptbConfMyeClrCkHist LIKE '%fooValue%'
     * $query->filterByAptbconfmyeclrckhist(['foo', 'bar']); // WHERE AptbConfMyeClrCkHist IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfmyeclrckhist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfmyeclrckhist($aptbconfmyeclrckhist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfmyeclrckhist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFMYECLRCKHIST, $aptbconfmyeclrckhist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfMyeClrCkDate column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfmyeclrckdate('fooValue');   // WHERE AptbConfMyeClrCkDate = 'fooValue'
     * $query->filterByAptbconfmyeclrckdate('%fooValue%', Criteria::LIKE); // WHERE AptbConfMyeClrCkDate LIKE '%fooValue%'
     * $query->filterByAptbconfmyeclrckdate(['foo', 'bar']); // WHERE AptbConfMyeClrCkDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfmyeclrckdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfmyeclrckdate($aptbconfmyeclrckdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfmyeclrckdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFMYECLRCKDATE, $aptbconfmyeclrckdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfMyeClrOpenCk column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfmyeclropenck('fooValue');   // WHERE AptbConfMyeClrOpenCk = 'fooValue'
     * $query->filterByAptbconfmyeclropenck('%fooValue%', Criteria::LIKE); // WHERE AptbConfMyeClrOpenCk LIKE '%fooValue%'
     * $query->filterByAptbconfmyeclropenck(['foo', 'bar']); // WHERE AptbConfMyeClrOpenCk IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfmyeclropenck The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfmyeclropenck($aptbconfmyeclropenck = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfmyeclropenck)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFMYECLROPENCK, $aptbconfmyeclropenck, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfLead column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconflead('fooValue');   // WHERE AptbConfLead = 'fooValue'
     * $query->filterByAptbconflead('%fooValue%', Criteria::LIKE); // WHERE AptbConfLead LIKE '%fooValue%'
     * $query->filterByAptbconflead(['foo', 'bar']); // WHERE AptbConfLead IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconflead The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconflead($aptbconflead = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconflead)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFLEAD, $aptbconflead, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVrReworkItem column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvrreworkitem('fooValue');   // WHERE AptbConfVrReworkItem = 'fooValue'
     * $query->filterByAptbconfvrreworkitem('%fooValue%', Criteria::LIKE); // WHERE AptbConfVrReworkItem LIKE '%fooValue%'
     * $query->filterByAptbconfvrreworkitem(['foo', 'bar']); // WHERE AptbConfVrReworkItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvrreworkitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvrreworkitem($aptbconfvrreworkitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvrreworkitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVRREWORKITEM, $aptbconfvrreworkitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVrqcWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvrqcwhse('fooValue');   // WHERE AptbConfVrqcWhse = 'fooValue'
     * $query->filterByAptbconfvrqcwhse('%fooValue%', Criteria::LIKE); // WHERE AptbConfVrqcWhse LIKE '%fooValue%'
     * $query->filterByAptbconfvrqcwhse(['foo', 'bar']); // WHERE AptbConfVrqcWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvrqcwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvrqcwhse($aptbconfvrqcwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvrqcwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVRQCWHSE, $aptbconfvrqcwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVrGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvrglacct('fooValue');   // WHERE AptbConfVrGlAcct = 'fooValue'
     * $query->filterByAptbconfvrglacct('%fooValue%', Criteria::LIKE); // WHERE AptbConfVrGlAcct LIKE '%fooValue%'
     * $query->filterByAptbconfvrglacct(['foo', 'bar']); // WHERE AptbConfVrGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvrglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvrglacct($aptbconfvrglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvrglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVRGLACCT, $aptbconfvrglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmListPc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmlistpc('fooValue');   // WHERE AptbConfVxmListPc = 'fooValue'
     * $query->filterByAptbconfvxmlistpc('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmListPc LIKE '%fooValue%'
     * $query->filterByAptbconfvxmlistpc(['foo', 'bar']); // WHERE AptbConfVxmListPc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmlistpc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmlistpc($aptbconfvxmlistpc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmlistpc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMLISTPC, $aptbconfvxmlistpc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmListItemUpd column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmlistitemupd('fooValue');   // WHERE AptbConfVxmListItemUpd = 'fooValue'
     * $query->filterByAptbconfvxmlistitemupd('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmListItemUpd LIKE '%fooValue%'
     * $query->filterByAptbconfvxmlistitemupd(['foo', 'bar']); // WHERE AptbConfVxmListItemUpd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmlistitemupd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmlistitemupd($aptbconfvxmlistitemupd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmlistitemupd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMLISTITEMUPD, $aptbconfvxmlistitemupd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmGrossLc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmgrosslc('fooValue');   // WHERE AptbConfVxmGrossLc = 'fooValue'
     * $query->filterByAptbconfvxmgrosslc('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmGrossLc LIKE '%fooValue%'
     * $query->filterByAptbconfvxmgrosslc(['foo', 'bar']); // WHERE AptbConfVxmGrossLc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmgrosslc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmgrosslc($aptbconfvxmgrosslc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmgrosslc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMGROSSLC, $aptbconfvxmgrosslc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmCostLp column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmcostlp('fooValue');   // WHERE AptbConfVxmCostLp = 'fooValue'
     * $query->filterByAptbconfvxmcostlp('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmCostLp LIKE '%fooValue%'
     * $query->filterByAptbconfvxmcostlp(['foo', 'bar']); // WHERE AptbConfVxmCostLp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmcostlp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmcostlp($aptbconfvxmcostlp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmcostlp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMCOSTLP, $aptbconfvxmcostlp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmCostItemUpd column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmcostitemupd('fooValue');   // WHERE AptbConfVxmCostItemUpd = 'fooValue'
     * $query->filterByAptbconfvxmcostitemupd('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmCostItemUpd LIKE '%fooValue%'
     * $query->filterByAptbconfvxmcostitemupd(['foo', 'bar']); // WHERE AptbConfVxmCostItemUpd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmcostitemupd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmcostitemupd($aptbconfvxmcostitemupd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmcostitemupd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPD, $aptbconfvxmcostitemupd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmCostRMesg column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmcostrmesg('fooValue');   // WHERE AptbConfVxmCostRMesg = 'fooValue'
     * $query->filterByAptbconfvxmcostrmesg('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmCostRMesg LIKE '%fooValue%'
     * $query->filterByAptbconfvxmcostrmesg(['foo', 'bar']); // WHERE AptbConfVxmCostRMesg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmcostrmesg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmcostrmesg($aptbconfvxmcostrmesg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmcostrmesg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMCOSTRMESG, $aptbconfvxmcostrmesg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmCostItemUpdM column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmcostitemupdm('fooValue');   // WHERE AptbConfVxmCostItemUpdM = 'fooValue'
     * $query->filterByAptbconfvxmcostitemupdm('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmCostItemUpdM LIKE '%fooValue%'
     * $query->filterByAptbconfvxmcostitemupdm(['foo', 'bar']); // WHERE AptbConfVxmCostItemUpdM IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmcostitemupdm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmcostitemupdm($aptbconfvxmcostitemupdm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmcostitemupdm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMCOSTITEMUPDM, $aptbconfvxmcostitemupdm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbConfVxmCostMMesg column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbconfvxmcostmmesg('fooValue');   // WHERE AptbConfVxmCostMMesg = 'fooValue'
     * $query->filterByAptbconfvxmcostmmesg('%fooValue%', Criteria::LIKE); // WHERE AptbConfVxmCostMMesg LIKE '%fooValue%'
     * $query->filterByAptbconfvxmcostmmesg(['foo', 'bar']); // WHERE AptbConfVxmCostMMesg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbconfvxmcostmmesg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbconfvxmcostmmesg($aptbconfvxmcostmmesg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbconfvxmcostmmesg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFVXMCOSTMMESG, $aptbconfvxmcostmmesg, $comparison);

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

        $this->addUsingAlias(ConfigApTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ConfigApTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ConfigApTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigAp $configAp Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($configAp = null)
    {
        if ($configAp) {
            $this->addUsingAlias(ConfigApTableMap::COL_APTBCONFKEY, $configAp->getAptbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigApTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigApTableMap::clearInstancePool();
            ConfigApTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigApTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigApTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigApTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigApTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
