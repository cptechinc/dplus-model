<?php

namespace Base;

use \SalesHistory as ChildSalesHistory;
use \SalesHistoryQuery as ChildSalesHistoryQuery;
use \Exception;
use \PDO;
use Map\SalesHistoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_head_hist` table.
 *
 * @method     ChildSalesHistoryQuery orderByOehhnbr($order = Criteria::ASC) Order by the OehhNbr column
 * @method     ChildSalesHistoryQuery orderByOehhyear($order = Criteria::ASC) Order by the OehhYear column
 * @method     ChildSalesHistoryQuery orderByOehhstat($order = Criteria::ASC) Order by the OehhStat column
 * @method     ChildSalesHistoryQuery orderByOehhhold($order = Criteria::ASC) Order by the OehhHold column
 * @method     ChildSalesHistoryQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildSalesHistoryQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildSalesHistoryQuery orderByOehhstname($order = Criteria::ASC) Order by the OehhStName column
 * @method     ChildSalesHistoryQuery orderByOehhstlastname($order = Criteria::ASC) Order by the OehhStLastName column
 * @method     ChildSalesHistoryQuery orderByOehhstfirstname($order = Criteria::ASC) Order by the OehhStFirstName column
 * @method     ChildSalesHistoryQuery orderByOehhstadr1($order = Criteria::ASC) Order by the OehhStAdr1 column
 * @method     ChildSalesHistoryQuery orderByOehhstadr2($order = Criteria::ASC) Order by the OehhStAdr2 column
 * @method     ChildSalesHistoryQuery orderByOehhstadr3($order = Criteria::ASC) Order by the OehhStAdr3 column
 * @method     ChildSalesHistoryQuery orderByOehhstctry($order = Criteria::ASC) Order by the OehhStCtry column
 * @method     ChildSalesHistoryQuery orderByOehhstcity($order = Criteria::ASC) Order by the OehhStCity column
 * @method     ChildSalesHistoryQuery orderByOehhststat($order = Criteria::ASC) Order by the OehhStStat column
 * @method     ChildSalesHistoryQuery orderByOehhstzipcode($order = Criteria::ASC) Order by the OehhStZipCode column
 * @method     ChildSalesHistoryQuery orderByOehhcustpo($order = Criteria::ASC) Order by the OehhCustPo column
 * @method     ChildSalesHistoryQuery orderByOehhordrdate($order = Criteria::ASC) Order by the OehhOrdrDate column
 * @method     ChildSalesHistoryQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildSalesHistoryQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildSalesHistoryQuery orderByArininvnbr($order = Criteria::ASC) Order by the ArinInvNbr column
 * @method     ChildSalesHistoryQuery orderByOehhinvdate($order = Criteria::ASC) Order by the OehhInvDate column
 * @method     ChildSalesHistoryQuery orderByOehhglpd($order = Criteria::ASC) Order by the OehhGLPd column
 * @method     ChildSalesHistoryQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildSalesHistoryQuery orderByOehhsp1pct($order = Criteria::ASC) Order by the OehhSp1Pct column
 * @method     ChildSalesHistoryQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildSalesHistoryQuery orderByOehhsp2pct($order = Criteria::ASC) Order by the OehhSp2Pct column
 * @method     ChildSalesHistoryQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildSalesHistoryQuery orderByOehhsp3pct($order = Criteria::ASC) Order by the OehhSp3Pct column
 * @method     ChildSalesHistoryQuery orderByOehhcntrnbr($order = Criteria::ASC) Order by the OehhCntrNbr column
 * @method     ChildSalesHistoryQuery orderByOehhwibatch($order = Criteria::ASC) Order by the OehhWiBatch column
 * @method     ChildSalesHistoryQuery orderByOehhdroprelhold($order = Criteria::ASC) Order by the OehhDropRelHold column
 * @method     ChildSalesHistoryQuery orderByOehhtaxsub($order = Criteria::ASC) Order by the OehhTaxSub column
 * @method     ChildSalesHistoryQuery orderByOehhnontaxsub($order = Criteria::ASC) Order by the OehhNonTaxSub column
 * @method     ChildSalesHistoryQuery orderByOehhtaxtot($order = Criteria::ASC) Order by the OehhTaxTot column
 * @method     ChildSalesHistoryQuery orderByOehhfrttot($order = Criteria::ASC) Order by the OehhFrtTot column
 * @method     ChildSalesHistoryQuery orderByOehhmisctot($order = Criteria::ASC) Order by the OehhMiscTot column
 * @method     ChildSalesHistoryQuery orderByOehhordrtot($order = Criteria::ASC) Order by the OehhOrdrTot column
 * @method     ChildSalesHistoryQuery orderByOehhcosttot($order = Criteria::ASC) Order by the OehhCostTot column
 * @method     ChildSalesHistoryQuery orderByOehhspcommlock($order = Criteria::ASC) Order by the OehhSpCommLock column
 * @method     ChildSalesHistoryQuery orderByOehhtakendate($order = Criteria::ASC) Order by the OehhTakenDate column
 * @method     ChildSalesHistoryQuery orderByOehhtakentime($order = Criteria::ASC) Order by the OehhTakenTime column
 * @method     ChildSalesHistoryQuery orderByOehhpickdate($order = Criteria::ASC) Order by the OehhPickDate column
 * @method     ChildSalesHistoryQuery orderByOehhpicktime($order = Criteria::ASC) Order by the OehhPickTime column
 * @method     ChildSalesHistoryQuery orderByOehhpackdate($order = Criteria::ASC) Order by the OehhPackDate column
 * @method     ChildSalesHistoryQuery orderByOehhpacktime($order = Criteria::ASC) Order by the OehhPackTime column
 * @method     ChildSalesHistoryQuery orderByOehhverifydate($order = Criteria::ASC) Order by the OehhVerifyDate column
 * @method     ChildSalesHistoryQuery orderByOehhverifytime($order = Criteria::ASC) Order by the OehhVerifyTime column
 * @method     ChildSalesHistoryQuery orderByOehhcreditmemo($order = Criteria::ASC) Order by the OehhCreditMemo column
 * @method     ChildSalesHistoryQuery orderByOehhbookedyn($order = Criteria::ASC) Order by the OehhBookedYn column
 * @method     ChildSalesHistoryQuery orderByIntbwhseorig($order = Criteria::ASC) Order by the IntbWhseOrig column
 * @method     ChildSalesHistoryQuery orderByOehhbtstat($order = Criteria::ASC) Order by the OehhBtStat column
 * @method     ChildSalesHistoryQuery orderByOehhshipcomp($order = Criteria::ASC) Order by the OehhShipComp column
 * @method     ChildSalesHistoryQuery orderByOehhcwoflag($order = Criteria::ASC) Order by the OehhCwoFlag column
 * @method     ChildSalesHistoryQuery orderByOehhdivision($order = Criteria::ASC) Order by the OehhDivision column
 * @method     ChildSalesHistoryQuery orderByOehhtakencode($order = Criteria::ASC) Order by the OehhTakenCode column
 * @method     ChildSalesHistoryQuery orderByOehhpickcode($order = Criteria::ASC) Order by the OehhPickCode column
 * @method     ChildSalesHistoryQuery orderByOehhpackcode($order = Criteria::ASC) Order by the OehhPackCode column
 * @method     ChildSalesHistoryQuery orderByOehhverifycode($order = Criteria::ASC) Order by the OehhVerifyCode column
 * @method     ChildSalesHistoryQuery orderByOehhtotdisc($order = Criteria::ASC) Order by the OehhTotDisc column
 * @method     ChildSalesHistoryQuery orderByOehhedirefnbrqual($order = Criteria::ASC) Order by the OehhEdiRefNbrQual column
 * @method     ChildSalesHistoryQuery orderByOehhusercode1($order = Criteria::ASC) Order by the OehhUserCode1 column
 * @method     ChildSalesHistoryQuery orderByOehhusercode2($order = Criteria::ASC) Order by the OehhUserCode2 column
 * @method     ChildSalesHistoryQuery orderByOehhusercode3($order = Criteria::ASC) Order by the OehhUserCode3 column
 * @method     ChildSalesHistoryQuery orderByOehhusercode4($order = Criteria::ASC) Order by the OehhUserCode4 column
 * @method     ChildSalesHistoryQuery orderByOehhexchctry($order = Criteria::ASC) Order by the OehhExchCtry column
 * @method     ChildSalesHistoryQuery orderByOehhexchrate($order = Criteria::ASC) Order by the OehhExchRate column
 * @method     ChildSalesHistoryQuery orderByOehhwghttot($order = Criteria::ASC) Order by the OehhWghtTot column
 * @method     ChildSalesHistoryQuery orderByOehhwghtoride($order = Criteria::ASC) Order by the OehhWghtOride column
 * @method     ChildSalesHistoryQuery orderByOehhccinfo($order = Criteria::ASC) Order by the OehhCcInfo column
 * @method     ChildSalesHistoryQuery orderByOehhboxcount($order = Criteria::ASC) Order by the OehhBoxCount column
 * @method     ChildSalesHistoryQuery orderByOehhrqstdate($order = Criteria::ASC) Order by the OehhRqstDate column
 * @method     ChildSalesHistoryQuery orderByOehhcancdate($order = Criteria::ASC) Order by the OehhCancDate column
 * @method     ChildSalesHistoryQuery orderByOehhcrntuser($order = Criteria::ASC) Order by the OehhCrntUser column
 * @method     ChildSalesHistoryQuery orderByOehhreleasenbr($order = Criteria::ASC) Order by the OehhReleaseNbr column
 * @method     ChildSalesHistoryQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildSalesHistoryQuery orderByOehhbordbuilddate($order = Criteria::ASC) Order by the OehhBordBuildDate column
 * @method     ChildSalesHistoryQuery orderByOehhdeptcode($order = Criteria::ASC) Order by the OehhDeptCode column
 * @method     ChildSalesHistoryQuery orderByOehhfrtinentered($order = Criteria::ASC) Order by the OehhFrtInEntered column
 * @method     ChildSalesHistoryQuery orderByOehhdropshipentered($order = Criteria::ASC) Order by the OehhDropShipEntered column
 * @method     ChildSalesHistoryQuery orderByOehherflag($order = Criteria::ASC) Order by the OehhErFlag column
 * @method     ChildSalesHistoryQuery orderByOehhfrtin($order = Criteria::ASC) Order by the OehhFrtIn column
 * @method     ChildSalesHistoryQuery orderByOehhdropship($order = Criteria::ASC) Order by the OehhDropShip column
 * @method     ChildSalesHistoryQuery orderByOehhminorder($order = Criteria::ASC) Order by the OehhMinOrder column
 * @method     ChildSalesHistoryQuery orderByOehhcontractterms($order = Criteria::ASC) Order by the OehhContractTerms column
 * @method     ChildSalesHistoryQuery orderByOehhdropshipbilled($order = Criteria::ASC) Order by the OehhDropShipBilled column
 * @method     ChildSalesHistoryQuery orderByOehhordtyp($order = Criteria::ASC) Order by the OehhOrdTyp column
 * @method     ChildSalesHistoryQuery orderByOehhtracknbr($order = Criteria::ASC) Order by the OehhTrackNbr column
 * @method     ChildSalesHistoryQuery orderByOehhsource($order = Criteria::ASC) Order by the OehhSource column
 * @method     ChildSalesHistoryQuery orderByOehhccaprv($order = Criteria::ASC) Order by the OehhCcAprv column
 * @method     ChildSalesHistoryQuery orderByOehhpickfmattype($order = Criteria::ASC) Order by the OehhPickFmatType column
 * @method     ChildSalesHistoryQuery orderByOehhinvcfmattype($order = Criteria::ASC) Order by the OehhInvcFmatType column
 * @method     ChildSalesHistoryQuery orderByOehhcashamt($order = Criteria::ASC) Order by the OehhCashAmt column
 * @method     ChildSalesHistoryQuery orderByOehhcheckamt($order = Criteria::ASC) Order by the OehhCheckAmt column
 * @method     ChildSalesHistoryQuery orderByOehhchecknbr($order = Criteria::ASC) Order by the OehhCheckNbr column
 * @method     ChildSalesHistoryQuery orderByOehhdepositamt($order = Criteria::ASC) Order by the OehhDepositAmt column
 * @method     ChildSalesHistoryQuery orderByOehhdepositnbr($order = Criteria::ASC) Order by the OehhDepositNbr column
 * @method     ChildSalesHistoryQuery orderByOehhccamt($order = Criteria::ASC) Order by the OehhCcAmt column
 * @method     ChildSalesHistoryQuery orderByOehhotaxsub($order = Criteria::ASC) Order by the OehhOTaxSub column
 * @method     ChildSalesHistoryQuery orderByOehhonontaxsub($order = Criteria::ASC) Order by the OehhONonTaxSub column
 * @method     ChildSalesHistoryQuery orderByOehhotaxtot($order = Criteria::ASC) Order by the OehhOTaxTot column
 * @method     ChildSalesHistoryQuery orderByOehhoordrtot($order = Criteria::ASC) Order by the OehhOOrdrTot column
 * @method     ChildSalesHistoryQuery orderByOehhpickprintdate($order = Criteria::ASC) Order by the OehhPickPrintDate column
 * @method     ChildSalesHistoryQuery orderByOehhpickprinttime($order = Criteria::ASC) Order by the OehhPickPrintTime column
 * @method     ChildSalesHistoryQuery orderByOehhcont($order = Criteria::ASC) Order by the OehhCont column
 * @method     ChildSalesHistoryQuery orderByOehhcontteleintl($order = Criteria::ASC) Order by the OehhContTeleIntl column
 * @method     ChildSalesHistoryQuery orderByOehhconttelenbr($order = Criteria::ASC) Order by the OehhContTeleNbr column
 * @method     ChildSalesHistoryQuery orderByOehhcontteleext($order = Criteria::ASC) Order by the OehhContTeleExt column
 * @method     ChildSalesHistoryQuery orderByOehhcontfaxintl($order = Criteria::ASC) Order by the OehhContFaxIntl column
 * @method     ChildSalesHistoryQuery orderByOehhcontfaxnbr($order = Criteria::ASC) Order by the OehhContFaxNbr column
 * @method     ChildSalesHistoryQuery orderByOehhshipacct($order = Criteria::ASC) Order by the OehhShipAcct column
 * @method     ChildSalesHistoryQuery orderByOehhchgdue($order = Criteria::ASC) Order by the OehhChgDue column
 * @method     ChildSalesHistoryQuery orderByOehhaddlpricdisc($order = Criteria::ASC) Order by the OehhAddlPricDisc column
 * @method     ChildSalesHistoryQuery orderByOehhallship($order = Criteria::ASC) Order by the OehhAllShip column
 * @method     ChildSalesHistoryQuery orderByOehhqtyorderamt($order = Criteria::ASC) Order by the OehhQtyOrderAmt column
 * @method     ChildSalesHistoryQuery orderByOehhcreditapplied($order = Criteria::ASC) Order by the OehhCreditApplied column
 * @method     ChildSalesHistoryQuery orderByOehhinvcprintdate($order = Criteria::ASC) Order by the OehhInvcPrintDate column
 * @method     ChildSalesHistoryQuery orderByOehhinvcprinttime($order = Criteria::ASC) Order by the OehhInvcPrintTime column
 * @method     ChildSalesHistoryQuery orderByOehhdiscfrt($order = Criteria::ASC) Order by the OehhDiscFrt column
 * @method     ChildSalesHistoryQuery orderByOehhorideshipcomp($order = Criteria::ASC) Order by the OehhOrideShipComp column
 * @method     ChildSalesHistoryQuery orderByOehhcontemail($order = Criteria::ASC) Order by the OehhContEmail column
 * @method     ChildSalesHistoryQuery orderByOehhmanualfrt($order = Criteria::ASC) Order by the OehhManualFrt column
 * @method     ChildSalesHistoryQuery orderByOehhinternalfrt($order = Criteria::ASC) Order by the OehhInternalFrt column
 * @method     ChildSalesHistoryQuery orderByOehhfrtcost($order = Criteria::ASC) Order by the OehhFrtCost column
 * @method     ChildSalesHistoryQuery orderByOehhroute($order = Criteria::ASC) Order by the OehhRoute column
 * @method     ChildSalesHistoryQuery orderByOehhrouteseq($order = Criteria::ASC) Order by the OehhRouteSeq column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode1($order = Criteria::ASC) Order by the OehhFrtTaxCode1 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt1($order = Criteria::ASC) Order by the OehhFrtTaxAmt1 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode2($order = Criteria::ASC) Order by the OehhFrtTaxCode2 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt2($order = Criteria::ASC) Order by the OehhFrtTaxAmt2 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode3($order = Criteria::ASC) Order by the OehhFrtTaxCode3 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt3($order = Criteria::ASC) Order by the OehhFrtTaxAmt3 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode4($order = Criteria::ASC) Order by the OehhFrtTaxCode4 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt4($order = Criteria::ASC) Order by the OehhFrtTaxAmt4 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode5($order = Criteria::ASC) Order by the OehhFrtTaxCode5 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt5($order = Criteria::ASC) Order by the OehhFrtTaxAmt5 column
 * @method     ChildSalesHistoryQuery orderByOehhedi855sent($order = Criteria::ASC) Order by the OehhEdi855Sent column
 * @method     ChildSalesHistoryQuery orderByOehhfrt3rdparty($order = Criteria::ASC) Order by the OehhFrt3rdParty column
 * @method     ChildSalesHistoryQuery orderByOehhfob($order = Criteria::ASC) Order by the OehhFob column
 * @method     ChildSalesHistoryQuery orderByOehhconfirmimagyn($order = Criteria::ASC) Order by the OehhConfirmImagYn column
 * @method     ChildSalesHistoryQuery orderByOehhindustconform($order = Criteria::ASC) Order by the OehhIndustConform column
 * @method     ChildSalesHistoryQuery orderByOehhcstkconsign($order = Criteria::ASC) Order by the OehhCstkConsign column
 * @method     ChildSalesHistoryQuery orderByOehhlmdelaycapsent($order = Criteria::ASC) Order by the OehhLmDelayCapSent column
 * @method     ChildSalesHistoryQuery orderByOehhmfgid($order = Criteria::ASC) Order by the OehhMfgId column
 * @method     ChildSalesHistoryQuery orderByOehhstoreid($order = Criteria::ASC) Order by the OehhStoreId column
 * @method     ChildSalesHistoryQuery orderByOehhpickqueue($order = Criteria::ASC) Order by the OehhPickQueue column
 * @method     ChildSalesHistoryQuery orderByOehharrvdate($order = Criteria::ASC) Order by the OehhArrvDate column
 * @method     ChildSalesHistoryQuery orderByOehhsurchgstat($order = Criteria::ASC) Order by the OehhSurchgStat column
 * @method     ChildSalesHistoryQuery orderByOehhfrtgrup($order = Criteria::ASC) Order by the OehhFrtGrup column
 * @method     ChildSalesHistoryQuery orderByOehhcommoride($order = Criteria::ASC) Order by the OehhCommOride column
 * @method     ChildSalesHistoryQuery orderByOehhchrgsplt($order = Criteria::ASC) Order by the OehhChrgSplt column
 * @method     ChildSalesHistoryQuery orderByOehhacccaprv($order = Criteria::ASC) Order by the OehhAcCcAprv column
 * @method     ChildSalesHistoryQuery orderByOehhorigordrnbr($order = Criteria::ASC) Order by the OehhOrigOrdrNbr column
 * @method     ChildSalesHistoryQuery orderByOehhpostdate($order = Criteria::ASC) Order by the OehhPostDate column
 * @method     ChildSalesHistoryQuery orderByOehhdiscdate1($order = Criteria::ASC) Order by the OehhDiscDate1 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscpct1($order = Criteria::ASC) Order by the OehhDiscPct1 column
 * @method     ChildSalesHistoryQuery orderByOehhduedate1($order = Criteria::ASC) Order by the OehhDueDate1 column
 * @method     ChildSalesHistoryQuery orderByOehhdueamt1($order = Criteria::ASC) Order by the OehhDueAmt1 column
 * @method     ChildSalesHistoryQuery orderByOehhduepct1($order = Criteria::ASC) Order by the OehhDuePct1 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscdate2($order = Criteria::ASC) Order by the OehhDiscDate2 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscpct2($order = Criteria::ASC) Order by the OehhDiscPct2 column
 * @method     ChildSalesHistoryQuery orderByOehhduedate2($order = Criteria::ASC) Order by the OehhDueDate2 column
 * @method     ChildSalesHistoryQuery orderByOehhdueamt2($order = Criteria::ASC) Order by the OehhDueAmt2 column
 * @method     ChildSalesHistoryQuery orderByOehhduepct2($order = Criteria::ASC) Order by the OehhDuePct2 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscdate3($order = Criteria::ASC) Order by the OehhDiscDate3 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscpct3($order = Criteria::ASC) Order by the OehhDiscPct3 column
 * @method     ChildSalesHistoryQuery orderByOehhduedate3($order = Criteria::ASC) Order by the OehhDueDate3 column
 * @method     ChildSalesHistoryQuery orderByOehhdueamt3($order = Criteria::ASC) Order by the OehhDueAmt3 column
 * @method     ChildSalesHistoryQuery orderByOehhduepct3($order = Criteria::ASC) Order by the OehhDuePct3 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscdate4($order = Criteria::ASC) Order by the OehhDiscDate4 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscpct4($order = Criteria::ASC) Order by the OehhDiscPct4 column
 * @method     ChildSalesHistoryQuery orderByOehhduedate4($order = Criteria::ASC) Order by the OehhDueDate4 column
 * @method     ChildSalesHistoryQuery orderByOehhdueamt4($order = Criteria::ASC) Order by the OehhDueAmt4 column
 * @method     ChildSalesHistoryQuery orderByOehhduepct4($order = Criteria::ASC) Order by the OehhDuePct4 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscdate5($order = Criteria::ASC) Order by the OehhDiscDate5 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscpct5($order = Criteria::ASC) Order by the OehhDiscPct5 column
 * @method     ChildSalesHistoryQuery orderByOehhduedate5($order = Criteria::ASC) Order by the OehhDueDate5 column
 * @method     ChildSalesHistoryQuery orderByOehhdueamt5($order = Criteria::ASC) Order by the OehhDueAmt5 column
 * @method     ChildSalesHistoryQuery orderByOehhduepct5($order = Criteria::ASC) Order by the OehhDuePct5 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscdate6($order = Criteria::ASC) Order by the OehhDiscDate6 column
 * @method     ChildSalesHistoryQuery orderByOehhdiscpct6($order = Criteria::ASC) Order by the OehhDiscPct6 column
 * @method     ChildSalesHistoryQuery orderByOehhduedate6($order = Criteria::ASC) Order by the OehhDueDate6 column
 * @method     ChildSalesHistoryQuery orderByOehhdueamt6($order = Criteria::ASC) Order by the OehhDueAmt6 column
 * @method     ChildSalesHistoryQuery orderByOehhduepct6($order = Criteria::ASC) Order by the OehhDuePct6 column
 * @method     ChildSalesHistoryQuery orderByOehhrefnbr($order = Criteria::ASC) Order by the OehhRefNbr column
 * @method     ChildSalesHistoryQuery orderByOehhacprognbr($order = Criteria::ASC) Order by the OehhAcProgNbr column
 * @method     ChildSalesHistoryQuery orderByOehhacprogexpdate($order = Criteria::ASC) Order by the OehhAcProgExpDate column
 * @method     ChildSalesHistoryQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesHistoryQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesHistoryQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesHistoryQuery groupByOehhnbr() Group by the OehhNbr column
 * @method     ChildSalesHistoryQuery groupByOehhyear() Group by the OehhYear column
 * @method     ChildSalesHistoryQuery groupByOehhstat() Group by the OehhStat column
 * @method     ChildSalesHistoryQuery groupByOehhhold() Group by the OehhHold column
 * @method     ChildSalesHistoryQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildSalesHistoryQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildSalesHistoryQuery groupByOehhstname() Group by the OehhStName column
 * @method     ChildSalesHistoryQuery groupByOehhstlastname() Group by the OehhStLastName column
 * @method     ChildSalesHistoryQuery groupByOehhstfirstname() Group by the OehhStFirstName column
 * @method     ChildSalesHistoryQuery groupByOehhstadr1() Group by the OehhStAdr1 column
 * @method     ChildSalesHistoryQuery groupByOehhstadr2() Group by the OehhStAdr2 column
 * @method     ChildSalesHistoryQuery groupByOehhstadr3() Group by the OehhStAdr3 column
 * @method     ChildSalesHistoryQuery groupByOehhstctry() Group by the OehhStCtry column
 * @method     ChildSalesHistoryQuery groupByOehhstcity() Group by the OehhStCity column
 * @method     ChildSalesHistoryQuery groupByOehhststat() Group by the OehhStStat column
 * @method     ChildSalesHistoryQuery groupByOehhstzipcode() Group by the OehhStZipCode column
 * @method     ChildSalesHistoryQuery groupByOehhcustpo() Group by the OehhCustPo column
 * @method     ChildSalesHistoryQuery groupByOehhordrdate() Group by the OehhOrdrDate column
 * @method     ChildSalesHistoryQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildSalesHistoryQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildSalesHistoryQuery groupByArininvnbr() Group by the ArinInvNbr column
 * @method     ChildSalesHistoryQuery groupByOehhinvdate() Group by the OehhInvDate column
 * @method     ChildSalesHistoryQuery groupByOehhglpd() Group by the OehhGLPd column
 * @method     ChildSalesHistoryQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildSalesHistoryQuery groupByOehhsp1pct() Group by the OehhSp1Pct column
 * @method     ChildSalesHistoryQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildSalesHistoryQuery groupByOehhsp2pct() Group by the OehhSp2Pct column
 * @method     ChildSalesHistoryQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildSalesHistoryQuery groupByOehhsp3pct() Group by the OehhSp3Pct column
 * @method     ChildSalesHistoryQuery groupByOehhcntrnbr() Group by the OehhCntrNbr column
 * @method     ChildSalesHistoryQuery groupByOehhwibatch() Group by the OehhWiBatch column
 * @method     ChildSalesHistoryQuery groupByOehhdroprelhold() Group by the OehhDropRelHold column
 * @method     ChildSalesHistoryQuery groupByOehhtaxsub() Group by the OehhTaxSub column
 * @method     ChildSalesHistoryQuery groupByOehhnontaxsub() Group by the OehhNonTaxSub column
 * @method     ChildSalesHistoryQuery groupByOehhtaxtot() Group by the OehhTaxTot column
 * @method     ChildSalesHistoryQuery groupByOehhfrttot() Group by the OehhFrtTot column
 * @method     ChildSalesHistoryQuery groupByOehhmisctot() Group by the OehhMiscTot column
 * @method     ChildSalesHistoryQuery groupByOehhordrtot() Group by the OehhOrdrTot column
 * @method     ChildSalesHistoryQuery groupByOehhcosttot() Group by the OehhCostTot column
 * @method     ChildSalesHistoryQuery groupByOehhspcommlock() Group by the OehhSpCommLock column
 * @method     ChildSalesHistoryQuery groupByOehhtakendate() Group by the OehhTakenDate column
 * @method     ChildSalesHistoryQuery groupByOehhtakentime() Group by the OehhTakenTime column
 * @method     ChildSalesHistoryQuery groupByOehhpickdate() Group by the OehhPickDate column
 * @method     ChildSalesHistoryQuery groupByOehhpicktime() Group by the OehhPickTime column
 * @method     ChildSalesHistoryQuery groupByOehhpackdate() Group by the OehhPackDate column
 * @method     ChildSalesHistoryQuery groupByOehhpacktime() Group by the OehhPackTime column
 * @method     ChildSalesHistoryQuery groupByOehhverifydate() Group by the OehhVerifyDate column
 * @method     ChildSalesHistoryQuery groupByOehhverifytime() Group by the OehhVerifyTime column
 * @method     ChildSalesHistoryQuery groupByOehhcreditmemo() Group by the OehhCreditMemo column
 * @method     ChildSalesHistoryQuery groupByOehhbookedyn() Group by the OehhBookedYn column
 * @method     ChildSalesHistoryQuery groupByIntbwhseorig() Group by the IntbWhseOrig column
 * @method     ChildSalesHistoryQuery groupByOehhbtstat() Group by the OehhBtStat column
 * @method     ChildSalesHistoryQuery groupByOehhshipcomp() Group by the OehhShipComp column
 * @method     ChildSalesHistoryQuery groupByOehhcwoflag() Group by the OehhCwoFlag column
 * @method     ChildSalesHistoryQuery groupByOehhdivision() Group by the OehhDivision column
 * @method     ChildSalesHistoryQuery groupByOehhtakencode() Group by the OehhTakenCode column
 * @method     ChildSalesHistoryQuery groupByOehhpickcode() Group by the OehhPickCode column
 * @method     ChildSalesHistoryQuery groupByOehhpackcode() Group by the OehhPackCode column
 * @method     ChildSalesHistoryQuery groupByOehhverifycode() Group by the OehhVerifyCode column
 * @method     ChildSalesHistoryQuery groupByOehhtotdisc() Group by the OehhTotDisc column
 * @method     ChildSalesHistoryQuery groupByOehhedirefnbrqual() Group by the OehhEdiRefNbrQual column
 * @method     ChildSalesHistoryQuery groupByOehhusercode1() Group by the OehhUserCode1 column
 * @method     ChildSalesHistoryQuery groupByOehhusercode2() Group by the OehhUserCode2 column
 * @method     ChildSalesHistoryQuery groupByOehhusercode3() Group by the OehhUserCode3 column
 * @method     ChildSalesHistoryQuery groupByOehhusercode4() Group by the OehhUserCode4 column
 * @method     ChildSalesHistoryQuery groupByOehhexchctry() Group by the OehhExchCtry column
 * @method     ChildSalesHistoryQuery groupByOehhexchrate() Group by the OehhExchRate column
 * @method     ChildSalesHistoryQuery groupByOehhwghttot() Group by the OehhWghtTot column
 * @method     ChildSalesHistoryQuery groupByOehhwghtoride() Group by the OehhWghtOride column
 * @method     ChildSalesHistoryQuery groupByOehhccinfo() Group by the OehhCcInfo column
 * @method     ChildSalesHistoryQuery groupByOehhboxcount() Group by the OehhBoxCount column
 * @method     ChildSalesHistoryQuery groupByOehhrqstdate() Group by the OehhRqstDate column
 * @method     ChildSalesHistoryQuery groupByOehhcancdate() Group by the OehhCancDate column
 * @method     ChildSalesHistoryQuery groupByOehhcrntuser() Group by the OehhCrntUser column
 * @method     ChildSalesHistoryQuery groupByOehhreleasenbr() Group by the OehhReleaseNbr column
 * @method     ChildSalesHistoryQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildSalesHistoryQuery groupByOehhbordbuilddate() Group by the OehhBordBuildDate column
 * @method     ChildSalesHistoryQuery groupByOehhdeptcode() Group by the OehhDeptCode column
 * @method     ChildSalesHistoryQuery groupByOehhfrtinentered() Group by the OehhFrtInEntered column
 * @method     ChildSalesHistoryQuery groupByOehhdropshipentered() Group by the OehhDropShipEntered column
 * @method     ChildSalesHistoryQuery groupByOehherflag() Group by the OehhErFlag column
 * @method     ChildSalesHistoryQuery groupByOehhfrtin() Group by the OehhFrtIn column
 * @method     ChildSalesHistoryQuery groupByOehhdropship() Group by the OehhDropShip column
 * @method     ChildSalesHistoryQuery groupByOehhminorder() Group by the OehhMinOrder column
 * @method     ChildSalesHistoryQuery groupByOehhcontractterms() Group by the OehhContractTerms column
 * @method     ChildSalesHistoryQuery groupByOehhdropshipbilled() Group by the OehhDropShipBilled column
 * @method     ChildSalesHistoryQuery groupByOehhordtyp() Group by the OehhOrdTyp column
 * @method     ChildSalesHistoryQuery groupByOehhtracknbr() Group by the OehhTrackNbr column
 * @method     ChildSalesHistoryQuery groupByOehhsource() Group by the OehhSource column
 * @method     ChildSalesHistoryQuery groupByOehhccaprv() Group by the OehhCcAprv column
 * @method     ChildSalesHistoryQuery groupByOehhpickfmattype() Group by the OehhPickFmatType column
 * @method     ChildSalesHistoryQuery groupByOehhinvcfmattype() Group by the OehhInvcFmatType column
 * @method     ChildSalesHistoryQuery groupByOehhcashamt() Group by the OehhCashAmt column
 * @method     ChildSalesHistoryQuery groupByOehhcheckamt() Group by the OehhCheckAmt column
 * @method     ChildSalesHistoryQuery groupByOehhchecknbr() Group by the OehhCheckNbr column
 * @method     ChildSalesHistoryQuery groupByOehhdepositamt() Group by the OehhDepositAmt column
 * @method     ChildSalesHistoryQuery groupByOehhdepositnbr() Group by the OehhDepositNbr column
 * @method     ChildSalesHistoryQuery groupByOehhccamt() Group by the OehhCcAmt column
 * @method     ChildSalesHistoryQuery groupByOehhotaxsub() Group by the OehhOTaxSub column
 * @method     ChildSalesHistoryQuery groupByOehhonontaxsub() Group by the OehhONonTaxSub column
 * @method     ChildSalesHistoryQuery groupByOehhotaxtot() Group by the OehhOTaxTot column
 * @method     ChildSalesHistoryQuery groupByOehhoordrtot() Group by the OehhOOrdrTot column
 * @method     ChildSalesHistoryQuery groupByOehhpickprintdate() Group by the OehhPickPrintDate column
 * @method     ChildSalesHistoryQuery groupByOehhpickprinttime() Group by the OehhPickPrintTime column
 * @method     ChildSalesHistoryQuery groupByOehhcont() Group by the OehhCont column
 * @method     ChildSalesHistoryQuery groupByOehhcontteleintl() Group by the OehhContTeleIntl column
 * @method     ChildSalesHistoryQuery groupByOehhconttelenbr() Group by the OehhContTeleNbr column
 * @method     ChildSalesHistoryQuery groupByOehhcontteleext() Group by the OehhContTeleExt column
 * @method     ChildSalesHistoryQuery groupByOehhcontfaxintl() Group by the OehhContFaxIntl column
 * @method     ChildSalesHistoryQuery groupByOehhcontfaxnbr() Group by the OehhContFaxNbr column
 * @method     ChildSalesHistoryQuery groupByOehhshipacct() Group by the OehhShipAcct column
 * @method     ChildSalesHistoryQuery groupByOehhchgdue() Group by the OehhChgDue column
 * @method     ChildSalesHistoryQuery groupByOehhaddlpricdisc() Group by the OehhAddlPricDisc column
 * @method     ChildSalesHistoryQuery groupByOehhallship() Group by the OehhAllShip column
 * @method     ChildSalesHistoryQuery groupByOehhqtyorderamt() Group by the OehhQtyOrderAmt column
 * @method     ChildSalesHistoryQuery groupByOehhcreditapplied() Group by the OehhCreditApplied column
 * @method     ChildSalesHistoryQuery groupByOehhinvcprintdate() Group by the OehhInvcPrintDate column
 * @method     ChildSalesHistoryQuery groupByOehhinvcprinttime() Group by the OehhInvcPrintTime column
 * @method     ChildSalesHistoryQuery groupByOehhdiscfrt() Group by the OehhDiscFrt column
 * @method     ChildSalesHistoryQuery groupByOehhorideshipcomp() Group by the OehhOrideShipComp column
 * @method     ChildSalesHistoryQuery groupByOehhcontemail() Group by the OehhContEmail column
 * @method     ChildSalesHistoryQuery groupByOehhmanualfrt() Group by the OehhManualFrt column
 * @method     ChildSalesHistoryQuery groupByOehhinternalfrt() Group by the OehhInternalFrt column
 * @method     ChildSalesHistoryQuery groupByOehhfrtcost() Group by the OehhFrtCost column
 * @method     ChildSalesHistoryQuery groupByOehhroute() Group by the OehhRoute column
 * @method     ChildSalesHistoryQuery groupByOehhrouteseq() Group by the OehhRouteSeq column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode1() Group by the OehhFrtTaxCode1 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt1() Group by the OehhFrtTaxAmt1 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode2() Group by the OehhFrtTaxCode2 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt2() Group by the OehhFrtTaxAmt2 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode3() Group by the OehhFrtTaxCode3 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt3() Group by the OehhFrtTaxAmt3 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode4() Group by the OehhFrtTaxCode4 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt4() Group by the OehhFrtTaxAmt4 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode5() Group by the OehhFrtTaxCode5 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt5() Group by the OehhFrtTaxAmt5 column
 * @method     ChildSalesHistoryQuery groupByOehhedi855sent() Group by the OehhEdi855Sent column
 * @method     ChildSalesHistoryQuery groupByOehhfrt3rdparty() Group by the OehhFrt3rdParty column
 * @method     ChildSalesHistoryQuery groupByOehhfob() Group by the OehhFob column
 * @method     ChildSalesHistoryQuery groupByOehhconfirmimagyn() Group by the OehhConfirmImagYn column
 * @method     ChildSalesHistoryQuery groupByOehhindustconform() Group by the OehhIndustConform column
 * @method     ChildSalesHistoryQuery groupByOehhcstkconsign() Group by the OehhCstkConsign column
 * @method     ChildSalesHistoryQuery groupByOehhlmdelaycapsent() Group by the OehhLmDelayCapSent column
 * @method     ChildSalesHistoryQuery groupByOehhmfgid() Group by the OehhMfgId column
 * @method     ChildSalesHistoryQuery groupByOehhstoreid() Group by the OehhStoreId column
 * @method     ChildSalesHistoryQuery groupByOehhpickqueue() Group by the OehhPickQueue column
 * @method     ChildSalesHistoryQuery groupByOehharrvdate() Group by the OehhArrvDate column
 * @method     ChildSalesHistoryQuery groupByOehhsurchgstat() Group by the OehhSurchgStat column
 * @method     ChildSalesHistoryQuery groupByOehhfrtgrup() Group by the OehhFrtGrup column
 * @method     ChildSalesHistoryQuery groupByOehhcommoride() Group by the OehhCommOride column
 * @method     ChildSalesHistoryQuery groupByOehhchrgsplt() Group by the OehhChrgSplt column
 * @method     ChildSalesHistoryQuery groupByOehhacccaprv() Group by the OehhAcCcAprv column
 * @method     ChildSalesHistoryQuery groupByOehhorigordrnbr() Group by the OehhOrigOrdrNbr column
 * @method     ChildSalesHistoryQuery groupByOehhpostdate() Group by the OehhPostDate column
 * @method     ChildSalesHistoryQuery groupByOehhdiscdate1() Group by the OehhDiscDate1 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscpct1() Group by the OehhDiscPct1 column
 * @method     ChildSalesHistoryQuery groupByOehhduedate1() Group by the OehhDueDate1 column
 * @method     ChildSalesHistoryQuery groupByOehhdueamt1() Group by the OehhDueAmt1 column
 * @method     ChildSalesHistoryQuery groupByOehhduepct1() Group by the OehhDuePct1 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscdate2() Group by the OehhDiscDate2 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscpct2() Group by the OehhDiscPct2 column
 * @method     ChildSalesHistoryQuery groupByOehhduedate2() Group by the OehhDueDate2 column
 * @method     ChildSalesHistoryQuery groupByOehhdueamt2() Group by the OehhDueAmt2 column
 * @method     ChildSalesHistoryQuery groupByOehhduepct2() Group by the OehhDuePct2 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscdate3() Group by the OehhDiscDate3 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscpct3() Group by the OehhDiscPct3 column
 * @method     ChildSalesHistoryQuery groupByOehhduedate3() Group by the OehhDueDate3 column
 * @method     ChildSalesHistoryQuery groupByOehhdueamt3() Group by the OehhDueAmt3 column
 * @method     ChildSalesHistoryQuery groupByOehhduepct3() Group by the OehhDuePct3 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscdate4() Group by the OehhDiscDate4 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscpct4() Group by the OehhDiscPct4 column
 * @method     ChildSalesHistoryQuery groupByOehhduedate4() Group by the OehhDueDate4 column
 * @method     ChildSalesHistoryQuery groupByOehhdueamt4() Group by the OehhDueAmt4 column
 * @method     ChildSalesHistoryQuery groupByOehhduepct4() Group by the OehhDuePct4 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscdate5() Group by the OehhDiscDate5 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscpct5() Group by the OehhDiscPct5 column
 * @method     ChildSalesHistoryQuery groupByOehhduedate5() Group by the OehhDueDate5 column
 * @method     ChildSalesHistoryQuery groupByOehhdueamt5() Group by the OehhDueAmt5 column
 * @method     ChildSalesHistoryQuery groupByOehhduepct5() Group by the OehhDuePct5 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscdate6() Group by the OehhDiscDate6 column
 * @method     ChildSalesHistoryQuery groupByOehhdiscpct6() Group by the OehhDiscPct6 column
 * @method     ChildSalesHistoryQuery groupByOehhduedate6() Group by the OehhDueDate6 column
 * @method     ChildSalesHistoryQuery groupByOehhdueamt6() Group by the OehhDueAmt6 column
 * @method     ChildSalesHistoryQuery groupByOehhduepct6() Group by the OehhDuePct6 column
 * @method     ChildSalesHistoryQuery groupByOehhrefnbr() Group by the OehhRefNbr column
 * @method     ChildSalesHistoryQuery groupByOehhacprognbr() Group by the OehhAcProgNbr column
 * @method     ChildSalesHistoryQuery groupByOehhacprogexpdate() Group by the OehhAcProgExpDate column
 * @method     ChildSalesHistoryQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesHistoryQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesHistoryQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesHistoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesHistoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesHistoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesHistoryQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildSalesHistoryQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildSalesHistoryQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildSalesHistoryQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildSalesHistoryQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildSalesHistoryQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildSalesHistoryQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildSalesHistoryQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildSalesHistoryQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildSalesHistoryQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildSalesHistoryQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildSalesHistoryQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildSalesHistoryQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildSalesHistoryQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildSalesHistoryQuery leftJoinSalesHistoryDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistoryDetail relation
 * @method     ChildSalesHistoryQuery rightJoinSalesHistoryDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistoryDetail relation
 * @method     ChildSalesHistoryQuery innerJoinSalesHistoryDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistoryDetail relation
 *
 * @method     ChildSalesHistoryQuery joinWithSalesHistoryDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistoryDetail relation
 *
 * @method     ChildSalesHistoryQuery leftJoinWithSalesHistoryDetail() Adds a LEFT JOIN clause and with to the query using the SalesHistoryDetail relation
 * @method     ChildSalesHistoryQuery rightJoinWithSalesHistoryDetail() Adds a RIGHT JOIN clause and with to the query using the SalesHistoryDetail relation
 * @method     ChildSalesHistoryQuery innerJoinWithSalesHistoryDetail() Adds a INNER JOIN clause and with to the query using the SalesHistoryDetail relation
 *
 * @method     ChildSalesHistoryQuery leftJoinSalesOrderShipment($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderShipment relation
 * @method     ChildSalesHistoryQuery rightJoinSalesOrderShipment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderShipment relation
 * @method     ChildSalesHistoryQuery innerJoinSalesOrderShipment($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderShipment relation
 *
 * @method     ChildSalesHistoryQuery joinWithSalesOrderShipment($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderShipment relation
 *
 * @method     ChildSalesHistoryQuery leftJoinWithSalesOrderShipment() Adds a LEFT JOIN clause and with to the query using the SalesOrderShipment relation
 * @method     ChildSalesHistoryQuery rightJoinWithSalesOrderShipment() Adds a RIGHT JOIN clause and with to the query using the SalesOrderShipment relation
 * @method     ChildSalesHistoryQuery innerJoinWithSalesOrderShipment() Adds a INNER JOIN clause and with to the query using the SalesOrderShipment relation
 *
 * @method     ChildSalesHistoryQuery leftJoinSalesHistoryLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistoryLotserial relation
 * @method     ChildSalesHistoryQuery rightJoinSalesHistoryLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistoryLotserial relation
 * @method     ChildSalesHistoryQuery innerJoinSalesHistoryLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistoryLotserial relation
 *
 * @method     ChildSalesHistoryQuery joinWithSalesHistoryLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistoryLotserial relation
 *
 * @method     ChildSalesHistoryQuery leftJoinWithSalesHistoryLotserial() Adds a LEFT JOIN clause and with to the query using the SalesHistoryLotserial relation
 * @method     ChildSalesHistoryQuery rightJoinWithSalesHistoryLotserial() Adds a RIGHT JOIN clause and with to the query using the SalesHistoryLotserial relation
 * @method     ChildSalesHistoryQuery innerJoinWithSalesHistoryLotserial() Adds a INNER JOIN clause and with to the query using the SalesHistoryLotserial relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery|\SalesHistoryDetailQuery|\SalesOrderShipmentQuery|\SalesHistoryLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesHistory|null findOne(?ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query
 * @method     ChildSalesHistory findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query, or a new ChildSalesHistory object populated from the query conditions when no match is found
 *
 * @method     ChildSalesHistory|null findOneByOehhnbr(int $OehhNbr) Return the first ChildSalesHistory filtered by the OehhNbr column
 * @method     ChildSalesHistory|null findOneByOehhyear(string $OehhYear) Return the first ChildSalesHistory filtered by the OehhYear column
 * @method     ChildSalesHistory|null findOneByOehhstat(string $OehhStat) Return the first ChildSalesHistory filtered by the OehhStat column
 * @method     ChildSalesHistory|null findOneByOehhhold(string $OehhHold) Return the first ChildSalesHistory filtered by the OehhHold column
 * @method     ChildSalesHistory|null findOneByArcucustid(string $ArcuCustId) Return the first ChildSalesHistory filtered by the ArcuCustId column
 * @method     ChildSalesHistory|null findOneByArstshipid(string $ArstShipId) Return the first ChildSalesHistory filtered by the ArstShipId column
 * @method     ChildSalesHistory|null findOneByOehhstname(string $OehhStName) Return the first ChildSalesHistory filtered by the OehhStName column
 * @method     ChildSalesHistory|null findOneByOehhstlastname(string $OehhStLastName) Return the first ChildSalesHistory filtered by the OehhStLastName column
 * @method     ChildSalesHistory|null findOneByOehhstfirstname(string $OehhStFirstName) Return the first ChildSalesHistory filtered by the OehhStFirstName column
 * @method     ChildSalesHistory|null findOneByOehhstadr1(string $OehhStAdr1) Return the first ChildSalesHistory filtered by the OehhStAdr1 column
 * @method     ChildSalesHistory|null findOneByOehhstadr2(string $OehhStAdr2) Return the first ChildSalesHistory filtered by the OehhStAdr2 column
 * @method     ChildSalesHistory|null findOneByOehhstadr3(string $OehhStAdr3) Return the first ChildSalesHistory filtered by the OehhStAdr3 column
 * @method     ChildSalesHistory|null findOneByOehhstctry(string $OehhStCtry) Return the first ChildSalesHistory filtered by the OehhStCtry column
 * @method     ChildSalesHistory|null findOneByOehhstcity(string $OehhStCity) Return the first ChildSalesHistory filtered by the OehhStCity column
 * @method     ChildSalesHistory|null findOneByOehhststat(string $OehhStStat) Return the first ChildSalesHistory filtered by the OehhStStat column
 * @method     ChildSalesHistory|null findOneByOehhstzipcode(string $OehhStZipCode) Return the first ChildSalesHistory filtered by the OehhStZipCode column
 * @method     ChildSalesHistory|null findOneByOehhcustpo(string $OehhCustPo) Return the first ChildSalesHistory filtered by the OehhCustPo column
 * @method     ChildSalesHistory|null findOneByOehhordrdate(string $OehhOrdrDate) Return the first ChildSalesHistory filtered by the OehhOrdrDate column
 * @method     ChildSalesHistory|null findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSalesHistory filtered by the ArtmTermCd column
 * @method     ChildSalesHistory|null findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSalesHistory filtered by the ArtbShipVia column
 * @method     ChildSalesHistory|null findOneByArininvnbr(string $ArinInvNbr) Return the first ChildSalesHistory filtered by the ArinInvNbr column
 * @method     ChildSalesHistory|null findOneByOehhinvdate(string $OehhInvDate) Return the first ChildSalesHistory filtered by the OehhInvDate column
 * @method     ChildSalesHistory|null findOneByOehhglpd(int $OehhGLPd) Return the first ChildSalesHistory filtered by the OehhGLPd column
 * @method     ChildSalesHistory|null findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSalesHistory filtered by the ArspSalePer1 column
 * @method     ChildSalesHistory|null findOneByOehhsp1pct(string $OehhSp1Pct) Return the first ChildSalesHistory filtered by the OehhSp1Pct column
 * @method     ChildSalesHistory|null findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSalesHistory filtered by the ArspSalePer2 column
 * @method     ChildSalesHistory|null findOneByOehhsp2pct(string $OehhSp2Pct) Return the first ChildSalesHistory filtered by the OehhSp2Pct column
 * @method     ChildSalesHistory|null findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSalesHistory filtered by the ArspSalePer3 column
 * @method     ChildSalesHistory|null findOneByOehhsp3pct(string $OehhSp3Pct) Return the first ChildSalesHistory filtered by the OehhSp3Pct column
 * @method     ChildSalesHistory|null findOneByOehhcntrnbr(int $OehhCntrNbr) Return the first ChildSalesHistory filtered by the OehhCntrNbr column
 * @method     ChildSalesHistory|null findOneByOehhwibatch(int $OehhWiBatch) Return the first ChildSalesHistory filtered by the OehhWiBatch column
 * @method     ChildSalesHistory|null findOneByOehhdroprelhold(string $OehhDropRelHold) Return the first ChildSalesHistory filtered by the OehhDropRelHold column
 * @method     ChildSalesHistory|null findOneByOehhtaxsub(string $OehhTaxSub) Return the first ChildSalesHistory filtered by the OehhTaxSub column
 * @method     ChildSalesHistory|null findOneByOehhnontaxsub(string $OehhNonTaxSub) Return the first ChildSalesHistory filtered by the OehhNonTaxSub column
 * @method     ChildSalesHistory|null findOneByOehhtaxtot(string $OehhTaxTot) Return the first ChildSalesHistory filtered by the OehhTaxTot column
 * @method     ChildSalesHistory|null findOneByOehhfrttot(string $OehhFrtTot) Return the first ChildSalesHistory filtered by the OehhFrtTot column
 * @method     ChildSalesHistory|null findOneByOehhmisctot(string $OehhMiscTot) Return the first ChildSalesHistory filtered by the OehhMiscTot column
 * @method     ChildSalesHistory|null findOneByOehhordrtot(string $OehhOrdrTot) Return the first ChildSalesHistory filtered by the OehhOrdrTot column
 * @method     ChildSalesHistory|null findOneByOehhcosttot(string $OehhCostTot) Return the first ChildSalesHistory filtered by the OehhCostTot column
 * @method     ChildSalesHistory|null findOneByOehhspcommlock(string $OehhSpCommLock) Return the first ChildSalesHistory filtered by the OehhSpCommLock column
 * @method     ChildSalesHistory|null findOneByOehhtakendate(string $OehhTakenDate) Return the first ChildSalesHistory filtered by the OehhTakenDate column
 * @method     ChildSalesHistory|null findOneByOehhtakentime(string $OehhTakenTime) Return the first ChildSalesHistory filtered by the OehhTakenTime column
 * @method     ChildSalesHistory|null findOneByOehhpickdate(string $OehhPickDate) Return the first ChildSalesHistory filtered by the OehhPickDate column
 * @method     ChildSalesHistory|null findOneByOehhpicktime(string $OehhPickTime) Return the first ChildSalesHistory filtered by the OehhPickTime column
 * @method     ChildSalesHistory|null findOneByOehhpackdate(string $OehhPackDate) Return the first ChildSalesHistory filtered by the OehhPackDate column
 * @method     ChildSalesHistory|null findOneByOehhpacktime(string $OehhPackTime) Return the first ChildSalesHistory filtered by the OehhPackTime column
 * @method     ChildSalesHistory|null findOneByOehhverifydate(string $OehhVerifyDate) Return the first ChildSalesHistory filtered by the OehhVerifyDate column
 * @method     ChildSalesHistory|null findOneByOehhverifytime(string $OehhVerifyTime) Return the first ChildSalesHistory filtered by the OehhVerifyTime column
 * @method     ChildSalesHistory|null findOneByOehhcreditmemo(string $OehhCreditMemo) Return the first ChildSalesHistory filtered by the OehhCreditMemo column
 * @method     ChildSalesHistory|null findOneByOehhbookedyn(string $OehhBookedYn) Return the first ChildSalesHistory filtered by the OehhBookedYn column
 * @method     ChildSalesHistory|null findOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSalesHistory filtered by the IntbWhseOrig column
 * @method     ChildSalesHistory|null findOneByOehhbtstat(string $OehhBtStat) Return the first ChildSalesHistory filtered by the OehhBtStat column
 * @method     ChildSalesHistory|null findOneByOehhshipcomp(string $OehhShipComp) Return the first ChildSalesHistory filtered by the OehhShipComp column
 * @method     ChildSalesHistory|null findOneByOehhcwoflag(string $OehhCwoFlag) Return the first ChildSalesHistory filtered by the OehhCwoFlag column
 * @method     ChildSalesHistory|null findOneByOehhdivision(string $OehhDivision) Return the first ChildSalesHistory filtered by the OehhDivision column
 * @method     ChildSalesHistory|null findOneByOehhtakencode(string $OehhTakenCode) Return the first ChildSalesHistory filtered by the OehhTakenCode column
 * @method     ChildSalesHistory|null findOneByOehhpickcode(string $OehhPickCode) Return the first ChildSalesHistory filtered by the OehhPickCode column
 * @method     ChildSalesHistory|null findOneByOehhpackcode(string $OehhPackCode) Return the first ChildSalesHistory filtered by the OehhPackCode column
 * @method     ChildSalesHistory|null findOneByOehhverifycode(string $OehhVerifyCode) Return the first ChildSalesHistory filtered by the OehhVerifyCode column
 * @method     ChildSalesHistory|null findOneByOehhtotdisc(string $OehhTotDisc) Return the first ChildSalesHistory filtered by the OehhTotDisc column
 * @method     ChildSalesHistory|null findOneByOehhedirefnbrqual(string $OehhEdiRefNbrQual) Return the first ChildSalesHistory filtered by the OehhEdiRefNbrQual column
 * @method     ChildSalesHistory|null findOneByOehhusercode1(string $OehhUserCode1) Return the first ChildSalesHistory filtered by the OehhUserCode1 column
 * @method     ChildSalesHistory|null findOneByOehhusercode2(string $OehhUserCode2) Return the first ChildSalesHistory filtered by the OehhUserCode2 column
 * @method     ChildSalesHistory|null findOneByOehhusercode3(string $OehhUserCode3) Return the first ChildSalesHistory filtered by the OehhUserCode3 column
 * @method     ChildSalesHistory|null findOneByOehhusercode4(string $OehhUserCode4) Return the first ChildSalesHistory filtered by the OehhUserCode4 column
 * @method     ChildSalesHistory|null findOneByOehhexchctry(string $OehhExchCtry) Return the first ChildSalesHistory filtered by the OehhExchCtry column
 * @method     ChildSalesHistory|null findOneByOehhexchrate(string $OehhExchRate) Return the first ChildSalesHistory filtered by the OehhExchRate column
 * @method     ChildSalesHistory|null findOneByOehhwghttot(string $OehhWghtTot) Return the first ChildSalesHistory filtered by the OehhWghtTot column
 * @method     ChildSalesHistory|null findOneByOehhwghtoride(string $OehhWghtOride) Return the first ChildSalesHistory filtered by the OehhWghtOride column
 * @method     ChildSalesHistory|null findOneByOehhccinfo(string $OehhCcInfo) Return the first ChildSalesHistory filtered by the OehhCcInfo column
 * @method     ChildSalesHistory|null findOneByOehhboxcount(int $OehhBoxCount) Return the first ChildSalesHistory filtered by the OehhBoxCount column
 * @method     ChildSalesHistory|null findOneByOehhrqstdate(string $OehhRqstDate) Return the first ChildSalesHistory filtered by the OehhRqstDate column
 * @method     ChildSalesHistory|null findOneByOehhcancdate(string $OehhCancDate) Return the first ChildSalesHistory filtered by the OehhCancDate column
 * @method     ChildSalesHistory|null findOneByOehhcrntuser(string $OehhCrntUser) Return the first ChildSalesHistory filtered by the OehhCrntUser column
 * @method     ChildSalesHistory|null findOneByOehhreleasenbr(string $OehhReleaseNbr) Return the first ChildSalesHistory filtered by the OehhReleaseNbr column
 * @method     ChildSalesHistory|null findOneByIntbwhse(string $IntbWhse) Return the first ChildSalesHistory filtered by the IntbWhse column
 * @method     ChildSalesHistory|null findOneByOehhbordbuilddate(string $OehhBordBuildDate) Return the first ChildSalesHistory filtered by the OehhBordBuildDate column
 * @method     ChildSalesHistory|null findOneByOehhdeptcode(string $OehhDeptCode) Return the first ChildSalesHistory filtered by the OehhDeptCode column
 * @method     ChildSalesHistory|null findOneByOehhfrtinentered(string $OehhFrtInEntered) Return the first ChildSalesHistory filtered by the OehhFrtInEntered column
 * @method     ChildSalesHistory|null findOneByOehhdropshipentered(string $OehhDropShipEntered) Return the first ChildSalesHistory filtered by the OehhDropShipEntered column
 * @method     ChildSalesHistory|null findOneByOehherflag(string $OehhErFlag) Return the first ChildSalesHistory filtered by the OehhErFlag column
 * @method     ChildSalesHistory|null findOneByOehhfrtin(string $OehhFrtIn) Return the first ChildSalesHistory filtered by the OehhFrtIn column
 * @method     ChildSalesHistory|null findOneByOehhdropship(string $OehhDropShip) Return the first ChildSalesHistory filtered by the OehhDropShip column
 * @method     ChildSalesHistory|null findOneByOehhminorder(string $OehhMinOrder) Return the first ChildSalesHistory filtered by the OehhMinOrder column
 * @method     ChildSalesHistory|null findOneByOehhcontractterms(string $OehhContractTerms) Return the first ChildSalesHistory filtered by the OehhContractTerms column
 * @method     ChildSalesHistory|null findOneByOehhdropshipbilled(string $OehhDropShipBilled) Return the first ChildSalesHistory filtered by the OehhDropShipBilled column
 * @method     ChildSalesHistory|null findOneByOehhordtyp(string $OehhOrdTyp) Return the first ChildSalesHistory filtered by the OehhOrdTyp column
 * @method     ChildSalesHistory|null findOneByOehhtracknbr(string $OehhTrackNbr) Return the first ChildSalesHistory filtered by the OehhTrackNbr column
 * @method     ChildSalesHistory|null findOneByOehhsource(string $OehhSource) Return the first ChildSalesHistory filtered by the OehhSource column
 * @method     ChildSalesHistory|null findOneByOehhccaprv(string $OehhCcAprv) Return the first ChildSalesHistory filtered by the OehhCcAprv column
 * @method     ChildSalesHistory|null findOneByOehhpickfmattype(string $OehhPickFmatType) Return the first ChildSalesHistory filtered by the OehhPickFmatType column
 * @method     ChildSalesHistory|null findOneByOehhinvcfmattype(string $OehhInvcFmatType) Return the first ChildSalesHistory filtered by the OehhInvcFmatType column
 * @method     ChildSalesHistory|null findOneByOehhcashamt(string $OehhCashAmt) Return the first ChildSalesHistory filtered by the OehhCashAmt column
 * @method     ChildSalesHistory|null findOneByOehhcheckamt(string $OehhCheckAmt) Return the first ChildSalesHistory filtered by the OehhCheckAmt column
 * @method     ChildSalesHistory|null findOneByOehhchecknbr(string $OehhCheckNbr) Return the first ChildSalesHistory filtered by the OehhCheckNbr column
 * @method     ChildSalesHistory|null findOneByOehhdepositamt(string $OehhDepositAmt) Return the first ChildSalesHistory filtered by the OehhDepositAmt column
 * @method     ChildSalesHistory|null findOneByOehhdepositnbr(string $OehhDepositNbr) Return the first ChildSalesHistory filtered by the OehhDepositNbr column
 * @method     ChildSalesHistory|null findOneByOehhccamt(string $OehhCcAmt) Return the first ChildSalesHistory filtered by the OehhCcAmt column
 * @method     ChildSalesHistory|null findOneByOehhotaxsub(string $OehhOTaxSub) Return the first ChildSalesHistory filtered by the OehhOTaxSub column
 * @method     ChildSalesHistory|null findOneByOehhonontaxsub(string $OehhONonTaxSub) Return the first ChildSalesHistory filtered by the OehhONonTaxSub column
 * @method     ChildSalesHistory|null findOneByOehhotaxtot(string $OehhOTaxTot) Return the first ChildSalesHistory filtered by the OehhOTaxTot column
 * @method     ChildSalesHistory|null findOneByOehhoordrtot(string $OehhOOrdrTot) Return the first ChildSalesHistory filtered by the OehhOOrdrTot column
 * @method     ChildSalesHistory|null findOneByOehhpickprintdate(string $OehhPickPrintDate) Return the first ChildSalesHistory filtered by the OehhPickPrintDate column
 * @method     ChildSalesHistory|null findOneByOehhpickprinttime(string $OehhPickPrintTime) Return the first ChildSalesHistory filtered by the OehhPickPrintTime column
 * @method     ChildSalesHistory|null findOneByOehhcont(string $OehhCont) Return the first ChildSalesHistory filtered by the OehhCont column
 * @method     ChildSalesHistory|null findOneByOehhcontteleintl(string $OehhContTeleIntl) Return the first ChildSalesHistory filtered by the OehhContTeleIntl column
 * @method     ChildSalesHistory|null findOneByOehhconttelenbr(string $OehhContTeleNbr) Return the first ChildSalesHistory filtered by the OehhContTeleNbr column
 * @method     ChildSalesHistory|null findOneByOehhcontteleext(string $OehhContTeleExt) Return the first ChildSalesHistory filtered by the OehhContTeleExt column
 * @method     ChildSalesHistory|null findOneByOehhcontfaxintl(string $OehhContFaxIntl) Return the first ChildSalesHistory filtered by the OehhContFaxIntl column
 * @method     ChildSalesHistory|null findOneByOehhcontfaxnbr(string $OehhContFaxNbr) Return the first ChildSalesHistory filtered by the OehhContFaxNbr column
 * @method     ChildSalesHistory|null findOneByOehhshipacct(string $OehhShipAcct) Return the first ChildSalesHistory filtered by the OehhShipAcct column
 * @method     ChildSalesHistory|null findOneByOehhchgdue(string $OehhChgDue) Return the first ChildSalesHistory filtered by the OehhChgDue column
 * @method     ChildSalesHistory|null findOneByOehhaddlpricdisc(string $OehhAddlPricDisc) Return the first ChildSalesHistory filtered by the OehhAddlPricDisc column
 * @method     ChildSalesHistory|null findOneByOehhallship(string $OehhAllShip) Return the first ChildSalesHistory filtered by the OehhAllShip column
 * @method     ChildSalesHistory|null findOneByOehhqtyorderamt(string $OehhQtyOrderAmt) Return the first ChildSalesHistory filtered by the OehhQtyOrderAmt column
 * @method     ChildSalesHistory|null findOneByOehhcreditapplied(string $OehhCreditApplied) Return the first ChildSalesHistory filtered by the OehhCreditApplied column
 * @method     ChildSalesHistory|null findOneByOehhinvcprintdate(string $OehhInvcPrintDate) Return the first ChildSalesHistory filtered by the OehhInvcPrintDate column
 * @method     ChildSalesHistory|null findOneByOehhinvcprinttime(string $OehhInvcPrintTime) Return the first ChildSalesHistory filtered by the OehhInvcPrintTime column
 * @method     ChildSalesHistory|null findOneByOehhdiscfrt(string $OehhDiscFrt) Return the first ChildSalesHistory filtered by the OehhDiscFrt column
 * @method     ChildSalesHistory|null findOneByOehhorideshipcomp(string $OehhOrideShipComp) Return the first ChildSalesHistory filtered by the OehhOrideShipComp column
 * @method     ChildSalesHistory|null findOneByOehhcontemail(string $OehhContEmail) Return the first ChildSalesHistory filtered by the OehhContEmail column
 * @method     ChildSalesHistory|null findOneByOehhmanualfrt(string $OehhManualFrt) Return the first ChildSalesHistory filtered by the OehhManualFrt column
 * @method     ChildSalesHistory|null findOneByOehhinternalfrt(string $OehhInternalFrt) Return the first ChildSalesHistory filtered by the OehhInternalFrt column
 * @method     ChildSalesHistory|null findOneByOehhfrtcost(string $OehhFrtCost) Return the first ChildSalesHistory filtered by the OehhFrtCost column
 * @method     ChildSalesHistory|null findOneByOehhroute(string $OehhRoute) Return the first ChildSalesHistory filtered by the OehhRoute column
 * @method     ChildSalesHistory|null findOneByOehhrouteseq(int $OehhRouteSeq) Return the first ChildSalesHistory filtered by the OehhRouteSeq column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxcode1(string $OehhFrtTaxCode1) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode1 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxamt1(string $OehhFrtTaxAmt1) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt1 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxcode2(string $OehhFrtTaxCode2) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode2 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxamt2(string $OehhFrtTaxAmt2) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt2 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxcode3(string $OehhFrtTaxCode3) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode3 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxamt3(string $OehhFrtTaxAmt3) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt3 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxcode4(string $OehhFrtTaxCode4) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode4 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxamt4(string $OehhFrtTaxAmt4) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt4 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxcode5(string $OehhFrtTaxCode5) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode5 column
 * @method     ChildSalesHistory|null findOneByOehhfrttaxamt5(string $OehhFrtTaxAmt5) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt5 column
 * @method     ChildSalesHistory|null findOneByOehhedi855sent(string $OehhEdi855Sent) Return the first ChildSalesHistory filtered by the OehhEdi855Sent column
 * @method     ChildSalesHistory|null findOneByOehhfrt3rdparty(string $OehhFrt3rdParty) Return the first ChildSalesHistory filtered by the OehhFrt3rdParty column
 * @method     ChildSalesHistory|null findOneByOehhfob(string $OehhFob) Return the first ChildSalesHistory filtered by the OehhFob column
 * @method     ChildSalesHistory|null findOneByOehhconfirmimagyn(string $OehhConfirmImagYn) Return the first ChildSalesHistory filtered by the OehhConfirmImagYn column
 * @method     ChildSalesHistory|null findOneByOehhindustconform(string $OehhIndustConform) Return the first ChildSalesHistory filtered by the OehhIndustConform column
 * @method     ChildSalesHistory|null findOneByOehhcstkconsign(string $OehhCstkConsign) Return the first ChildSalesHistory filtered by the OehhCstkConsign column
 * @method     ChildSalesHistory|null findOneByOehhlmdelaycapsent(string $OehhLmDelayCapSent) Return the first ChildSalesHistory filtered by the OehhLmDelayCapSent column
 * @method     ChildSalesHistory|null findOneByOehhmfgid(string $OehhMfgId) Return the first ChildSalesHistory filtered by the OehhMfgId column
 * @method     ChildSalesHistory|null findOneByOehhstoreid(string $OehhStoreId) Return the first ChildSalesHistory filtered by the OehhStoreId column
 * @method     ChildSalesHistory|null findOneByOehhpickqueue(string $OehhPickQueue) Return the first ChildSalesHistory filtered by the OehhPickQueue column
 * @method     ChildSalesHistory|null findOneByOehharrvdate(string $OehhArrvDate) Return the first ChildSalesHistory filtered by the OehhArrvDate column
 * @method     ChildSalesHistory|null findOneByOehhsurchgstat(string $OehhSurchgStat) Return the first ChildSalesHistory filtered by the OehhSurchgStat column
 * @method     ChildSalesHistory|null findOneByOehhfrtgrup(string $OehhFrtGrup) Return the first ChildSalesHistory filtered by the OehhFrtGrup column
 * @method     ChildSalesHistory|null findOneByOehhcommoride(string $OehhCommOride) Return the first ChildSalesHistory filtered by the OehhCommOride column
 * @method     ChildSalesHistory|null findOneByOehhchrgsplt(string $OehhChrgSplt) Return the first ChildSalesHistory filtered by the OehhChrgSplt column
 * @method     ChildSalesHistory|null findOneByOehhacccaprv(string $OehhAcCcAprv) Return the first ChildSalesHistory filtered by the OehhAcCcAprv column
 * @method     ChildSalesHistory|null findOneByOehhorigordrnbr(string $OehhOrigOrdrNbr) Return the first ChildSalesHistory filtered by the OehhOrigOrdrNbr column
 * @method     ChildSalesHistory|null findOneByOehhpostdate(string $OehhPostDate) Return the first ChildSalesHistory filtered by the OehhPostDate column
 * @method     ChildSalesHistory|null findOneByOehhdiscdate1(string $OehhDiscDate1) Return the first ChildSalesHistory filtered by the OehhDiscDate1 column
 * @method     ChildSalesHistory|null findOneByOehhdiscpct1(string $OehhDiscPct1) Return the first ChildSalesHistory filtered by the OehhDiscPct1 column
 * @method     ChildSalesHistory|null findOneByOehhduedate1(string $OehhDueDate1) Return the first ChildSalesHistory filtered by the OehhDueDate1 column
 * @method     ChildSalesHistory|null findOneByOehhdueamt1(string $OehhDueAmt1) Return the first ChildSalesHistory filtered by the OehhDueAmt1 column
 * @method     ChildSalesHistory|null findOneByOehhduepct1(string $OehhDuePct1) Return the first ChildSalesHistory filtered by the OehhDuePct1 column
 * @method     ChildSalesHistory|null findOneByOehhdiscdate2(string $OehhDiscDate2) Return the first ChildSalesHistory filtered by the OehhDiscDate2 column
 * @method     ChildSalesHistory|null findOneByOehhdiscpct2(string $OehhDiscPct2) Return the first ChildSalesHistory filtered by the OehhDiscPct2 column
 * @method     ChildSalesHistory|null findOneByOehhduedate2(string $OehhDueDate2) Return the first ChildSalesHistory filtered by the OehhDueDate2 column
 * @method     ChildSalesHistory|null findOneByOehhdueamt2(string $OehhDueAmt2) Return the first ChildSalesHistory filtered by the OehhDueAmt2 column
 * @method     ChildSalesHistory|null findOneByOehhduepct2(string $OehhDuePct2) Return the first ChildSalesHistory filtered by the OehhDuePct2 column
 * @method     ChildSalesHistory|null findOneByOehhdiscdate3(string $OehhDiscDate3) Return the first ChildSalesHistory filtered by the OehhDiscDate3 column
 * @method     ChildSalesHistory|null findOneByOehhdiscpct3(string $OehhDiscPct3) Return the first ChildSalesHistory filtered by the OehhDiscPct3 column
 * @method     ChildSalesHistory|null findOneByOehhduedate3(string $OehhDueDate3) Return the first ChildSalesHistory filtered by the OehhDueDate3 column
 * @method     ChildSalesHistory|null findOneByOehhdueamt3(string $OehhDueAmt3) Return the first ChildSalesHistory filtered by the OehhDueAmt3 column
 * @method     ChildSalesHistory|null findOneByOehhduepct3(string $OehhDuePct3) Return the first ChildSalesHistory filtered by the OehhDuePct3 column
 * @method     ChildSalesHistory|null findOneByOehhdiscdate4(string $OehhDiscDate4) Return the first ChildSalesHistory filtered by the OehhDiscDate4 column
 * @method     ChildSalesHistory|null findOneByOehhdiscpct4(string $OehhDiscPct4) Return the first ChildSalesHistory filtered by the OehhDiscPct4 column
 * @method     ChildSalesHistory|null findOneByOehhduedate4(string $OehhDueDate4) Return the first ChildSalesHistory filtered by the OehhDueDate4 column
 * @method     ChildSalesHistory|null findOneByOehhdueamt4(string $OehhDueAmt4) Return the first ChildSalesHistory filtered by the OehhDueAmt4 column
 * @method     ChildSalesHistory|null findOneByOehhduepct4(string $OehhDuePct4) Return the first ChildSalesHistory filtered by the OehhDuePct4 column
 * @method     ChildSalesHistory|null findOneByOehhdiscdate5(string $OehhDiscDate5) Return the first ChildSalesHistory filtered by the OehhDiscDate5 column
 * @method     ChildSalesHistory|null findOneByOehhdiscpct5(string $OehhDiscPct5) Return the first ChildSalesHistory filtered by the OehhDiscPct5 column
 * @method     ChildSalesHistory|null findOneByOehhduedate5(string $OehhDueDate5) Return the first ChildSalesHistory filtered by the OehhDueDate5 column
 * @method     ChildSalesHistory|null findOneByOehhdueamt5(string $OehhDueAmt5) Return the first ChildSalesHistory filtered by the OehhDueAmt5 column
 * @method     ChildSalesHistory|null findOneByOehhduepct5(string $OehhDuePct5) Return the first ChildSalesHistory filtered by the OehhDuePct5 column
 * @method     ChildSalesHistory|null findOneByOehhdiscdate6(string $OehhDiscDate6) Return the first ChildSalesHistory filtered by the OehhDiscDate6 column
 * @method     ChildSalesHistory|null findOneByOehhdiscpct6(string $OehhDiscPct6) Return the first ChildSalesHistory filtered by the OehhDiscPct6 column
 * @method     ChildSalesHistory|null findOneByOehhduedate6(string $OehhDueDate6) Return the first ChildSalesHistory filtered by the OehhDueDate6 column
 * @method     ChildSalesHistory|null findOneByOehhdueamt6(string $OehhDueAmt6) Return the first ChildSalesHistory filtered by the OehhDueAmt6 column
 * @method     ChildSalesHistory|null findOneByOehhduepct6(string $OehhDuePct6) Return the first ChildSalesHistory filtered by the OehhDuePct6 column
 * @method     ChildSalesHistory|null findOneByOehhrefnbr(string $OehhRefNbr) Return the first ChildSalesHistory filtered by the OehhRefNbr column
 * @method     ChildSalesHistory|null findOneByOehhacprognbr(string $OehhAcProgNbr) Return the first ChildSalesHistory filtered by the OehhAcProgNbr column
 * @method     ChildSalesHistory|null findOneByOehhacprogexpdate(string $OehhAcProgExpDate) Return the first ChildSalesHistory filtered by the OehhAcProgExpDate column
 * @method     ChildSalesHistory|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistory filtered by the DateUpdtd column
 * @method     ChildSalesHistory|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistory filtered by the TimeUpdtd column
 * @method     ChildSalesHistory|null findOneByDummy(string $dummy) Return the first ChildSalesHistory filtered by the dummy column
 *
 * @method     ChildSalesHistory requirePk($key, ?ConnectionInterface $con = null) Return the ChildSalesHistory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOne(?ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistory requireOneByOehhnbr(int $OehhNbr) Return the first ChildSalesHistory filtered by the OehhNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhyear(string $OehhYear) Return the first ChildSalesHistory filtered by the OehhYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstat(string $OehhStat) Return the first ChildSalesHistory filtered by the OehhStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhhold(string $OehhHold) Return the first ChildSalesHistory filtered by the OehhHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByArcucustid(string $ArcuCustId) Return the first ChildSalesHistory filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByArstshipid(string $ArstShipId) Return the first ChildSalesHistory filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstname(string $OehhStName) Return the first ChildSalesHistory filtered by the OehhStName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstlastname(string $OehhStLastName) Return the first ChildSalesHistory filtered by the OehhStLastName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstfirstname(string $OehhStFirstName) Return the first ChildSalesHistory filtered by the OehhStFirstName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstadr1(string $OehhStAdr1) Return the first ChildSalesHistory filtered by the OehhStAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstadr2(string $OehhStAdr2) Return the first ChildSalesHistory filtered by the OehhStAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstadr3(string $OehhStAdr3) Return the first ChildSalesHistory filtered by the OehhStAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstctry(string $OehhStCtry) Return the first ChildSalesHistory filtered by the OehhStCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstcity(string $OehhStCity) Return the first ChildSalesHistory filtered by the OehhStCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhststat(string $OehhStStat) Return the first ChildSalesHistory filtered by the OehhStStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstzipcode(string $OehhStZipCode) Return the first ChildSalesHistory filtered by the OehhStZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcustpo(string $OehhCustPo) Return the first ChildSalesHistory filtered by the OehhCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhordrdate(string $OehhOrdrDate) Return the first ChildSalesHistory filtered by the OehhOrdrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSalesHistory filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSalesHistory filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByArininvnbr(string $ArinInvNbr) Return the first ChildSalesHistory filtered by the ArinInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhinvdate(string $OehhInvDate) Return the first ChildSalesHistory filtered by the OehhInvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhglpd(int $OehhGLPd) Return the first ChildSalesHistory filtered by the OehhGLPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSalesHistory filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhsp1pct(string $OehhSp1Pct) Return the first ChildSalesHistory filtered by the OehhSp1Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSalesHistory filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhsp2pct(string $OehhSp2Pct) Return the first ChildSalesHistory filtered by the OehhSp2Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSalesHistory filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhsp3pct(string $OehhSp3Pct) Return the first ChildSalesHistory filtered by the OehhSp3Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcntrnbr(int $OehhCntrNbr) Return the first ChildSalesHistory filtered by the OehhCntrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhwibatch(int $OehhWiBatch) Return the first ChildSalesHistory filtered by the OehhWiBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdroprelhold(string $OehhDropRelHold) Return the first ChildSalesHistory filtered by the OehhDropRelHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhtaxsub(string $OehhTaxSub) Return the first ChildSalesHistory filtered by the OehhTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhnontaxsub(string $OehhNonTaxSub) Return the first ChildSalesHistory filtered by the OehhNonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhtaxtot(string $OehhTaxTot) Return the first ChildSalesHistory filtered by the OehhTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttot(string $OehhFrtTot) Return the first ChildSalesHistory filtered by the OehhFrtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhmisctot(string $OehhMiscTot) Return the first ChildSalesHistory filtered by the OehhMiscTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhordrtot(string $OehhOrdrTot) Return the first ChildSalesHistory filtered by the OehhOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcosttot(string $OehhCostTot) Return the first ChildSalesHistory filtered by the OehhCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhspcommlock(string $OehhSpCommLock) Return the first ChildSalesHistory filtered by the OehhSpCommLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhtakendate(string $OehhTakenDate) Return the first ChildSalesHistory filtered by the OehhTakenDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhtakentime(string $OehhTakenTime) Return the first ChildSalesHistory filtered by the OehhTakenTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpickdate(string $OehhPickDate) Return the first ChildSalesHistory filtered by the OehhPickDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpicktime(string $OehhPickTime) Return the first ChildSalesHistory filtered by the OehhPickTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpackdate(string $OehhPackDate) Return the first ChildSalesHistory filtered by the OehhPackDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpacktime(string $OehhPackTime) Return the first ChildSalesHistory filtered by the OehhPackTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhverifydate(string $OehhVerifyDate) Return the first ChildSalesHistory filtered by the OehhVerifyDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhverifytime(string $OehhVerifyTime) Return the first ChildSalesHistory filtered by the OehhVerifyTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcreditmemo(string $OehhCreditMemo) Return the first ChildSalesHistory filtered by the OehhCreditMemo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhbookedyn(string $OehhBookedYn) Return the first ChildSalesHistory filtered by the OehhBookedYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSalesHistory filtered by the IntbWhseOrig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhbtstat(string $OehhBtStat) Return the first ChildSalesHistory filtered by the OehhBtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhshipcomp(string $OehhShipComp) Return the first ChildSalesHistory filtered by the OehhShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcwoflag(string $OehhCwoFlag) Return the first ChildSalesHistory filtered by the OehhCwoFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdivision(string $OehhDivision) Return the first ChildSalesHistory filtered by the OehhDivision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhtakencode(string $OehhTakenCode) Return the first ChildSalesHistory filtered by the OehhTakenCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpickcode(string $OehhPickCode) Return the first ChildSalesHistory filtered by the OehhPickCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpackcode(string $OehhPackCode) Return the first ChildSalesHistory filtered by the OehhPackCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhverifycode(string $OehhVerifyCode) Return the first ChildSalesHistory filtered by the OehhVerifyCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhtotdisc(string $OehhTotDisc) Return the first ChildSalesHistory filtered by the OehhTotDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhedirefnbrqual(string $OehhEdiRefNbrQual) Return the first ChildSalesHistory filtered by the OehhEdiRefNbrQual column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhusercode1(string $OehhUserCode1) Return the first ChildSalesHistory filtered by the OehhUserCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhusercode2(string $OehhUserCode2) Return the first ChildSalesHistory filtered by the OehhUserCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhusercode3(string $OehhUserCode3) Return the first ChildSalesHistory filtered by the OehhUserCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhusercode4(string $OehhUserCode4) Return the first ChildSalesHistory filtered by the OehhUserCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhexchctry(string $OehhExchCtry) Return the first ChildSalesHistory filtered by the OehhExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhexchrate(string $OehhExchRate) Return the first ChildSalesHistory filtered by the OehhExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhwghttot(string $OehhWghtTot) Return the first ChildSalesHistory filtered by the OehhWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhwghtoride(string $OehhWghtOride) Return the first ChildSalesHistory filtered by the OehhWghtOride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhccinfo(string $OehhCcInfo) Return the first ChildSalesHistory filtered by the OehhCcInfo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhboxcount(int $OehhBoxCount) Return the first ChildSalesHistory filtered by the OehhBoxCount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhrqstdate(string $OehhRqstDate) Return the first ChildSalesHistory filtered by the OehhRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcancdate(string $OehhCancDate) Return the first ChildSalesHistory filtered by the OehhCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcrntuser(string $OehhCrntUser) Return the first ChildSalesHistory filtered by the OehhCrntUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhreleasenbr(string $OehhReleaseNbr) Return the first ChildSalesHistory filtered by the OehhReleaseNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByIntbwhse(string $IntbWhse) Return the first ChildSalesHistory filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhbordbuilddate(string $OehhBordBuildDate) Return the first ChildSalesHistory filtered by the OehhBordBuildDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdeptcode(string $OehhDeptCode) Return the first ChildSalesHistory filtered by the OehhDeptCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrtinentered(string $OehhFrtInEntered) Return the first ChildSalesHistory filtered by the OehhFrtInEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdropshipentered(string $OehhDropShipEntered) Return the first ChildSalesHistory filtered by the OehhDropShipEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehherflag(string $OehhErFlag) Return the first ChildSalesHistory filtered by the OehhErFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrtin(string $OehhFrtIn) Return the first ChildSalesHistory filtered by the OehhFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdropship(string $OehhDropShip) Return the first ChildSalesHistory filtered by the OehhDropShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhminorder(string $OehhMinOrder) Return the first ChildSalesHistory filtered by the OehhMinOrder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcontractterms(string $OehhContractTerms) Return the first ChildSalesHistory filtered by the OehhContractTerms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdropshipbilled(string $OehhDropShipBilled) Return the first ChildSalesHistory filtered by the OehhDropShipBilled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhordtyp(string $OehhOrdTyp) Return the first ChildSalesHistory filtered by the OehhOrdTyp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhtracknbr(string $OehhTrackNbr) Return the first ChildSalesHistory filtered by the OehhTrackNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhsource(string $OehhSource) Return the first ChildSalesHistory filtered by the OehhSource column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhccaprv(string $OehhCcAprv) Return the first ChildSalesHistory filtered by the OehhCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpickfmattype(string $OehhPickFmatType) Return the first ChildSalesHistory filtered by the OehhPickFmatType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhinvcfmattype(string $OehhInvcFmatType) Return the first ChildSalesHistory filtered by the OehhInvcFmatType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcashamt(string $OehhCashAmt) Return the first ChildSalesHistory filtered by the OehhCashAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcheckamt(string $OehhCheckAmt) Return the first ChildSalesHistory filtered by the OehhCheckAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhchecknbr(string $OehhCheckNbr) Return the first ChildSalesHistory filtered by the OehhCheckNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdepositamt(string $OehhDepositAmt) Return the first ChildSalesHistory filtered by the OehhDepositAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdepositnbr(string $OehhDepositNbr) Return the first ChildSalesHistory filtered by the OehhDepositNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhccamt(string $OehhCcAmt) Return the first ChildSalesHistory filtered by the OehhCcAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhotaxsub(string $OehhOTaxSub) Return the first ChildSalesHistory filtered by the OehhOTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhonontaxsub(string $OehhONonTaxSub) Return the first ChildSalesHistory filtered by the OehhONonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhotaxtot(string $OehhOTaxTot) Return the first ChildSalesHistory filtered by the OehhOTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhoordrtot(string $OehhOOrdrTot) Return the first ChildSalesHistory filtered by the OehhOOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpickprintdate(string $OehhPickPrintDate) Return the first ChildSalesHistory filtered by the OehhPickPrintDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpickprinttime(string $OehhPickPrintTime) Return the first ChildSalesHistory filtered by the OehhPickPrintTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcont(string $OehhCont) Return the first ChildSalesHistory filtered by the OehhCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcontteleintl(string $OehhContTeleIntl) Return the first ChildSalesHistory filtered by the OehhContTeleIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhconttelenbr(string $OehhContTeleNbr) Return the first ChildSalesHistory filtered by the OehhContTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcontteleext(string $OehhContTeleExt) Return the first ChildSalesHistory filtered by the OehhContTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcontfaxintl(string $OehhContFaxIntl) Return the first ChildSalesHistory filtered by the OehhContFaxIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcontfaxnbr(string $OehhContFaxNbr) Return the first ChildSalesHistory filtered by the OehhContFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhshipacct(string $OehhShipAcct) Return the first ChildSalesHistory filtered by the OehhShipAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhchgdue(string $OehhChgDue) Return the first ChildSalesHistory filtered by the OehhChgDue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhaddlpricdisc(string $OehhAddlPricDisc) Return the first ChildSalesHistory filtered by the OehhAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhallship(string $OehhAllShip) Return the first ChildSalesHistory filtered by the OehhAllShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhqtyorderamt(string $OehhQtyOrderAmt) Return the first ChildSalesHistory filtered by the OehhQtyOrderAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcreditapplied(string $OehhCreditApplied) Return the first ChildSalesHistory filtered by the OehhCreditApplied column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhinvcprintdate(string $OehhInvcPrintDate) Return the first ChildSalesHistory filtered by the OehhInvcPrintDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhinvcprinttime(string $OehhInvcPrintTime) Return the first ChildSalesHistory filtered by the OehhInvcPrintTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscfrt(string $OehhDiscFrt) Return the first ChildSalesHistory filtered by the OehhDiscFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhorideshipcomp(string $OehhOrideShipComp) Return the first ChildSalesHistory filtered by the OehhOrideShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcontemail(string $OehhContEmail) Return the first ChildSalesHistory filtered by the OehhContEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhmanualfrt(string $OehhManualFrt) Return the first ChildSalesHistory filtered by the OehhManualFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhinternalfrt(string $OehhInternalFrt) Return the first ChildSalesHistory filtered by the OehhInternalFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrtcost(string $OehhFrtCost) Return the first ChildSalesHistory filtered by the OehhFrtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhroute(string $OehhRoute) Return the first ChildSalesHistory filtered by the OehhRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhrouteseq(int $OehhRouteSeq) Return the first ChildSalesHistory filtered by the OehhRouteSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode1(string $OehhFrtTaxCode1) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt1(string $OehhFrtTaxAmt1) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode2(string $OehhFrtTaxCode2) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt2(string $OehhFrtTaxAmt2) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode3(string $OehhFrtTaxCode3) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt3(string $OehhFrtTaxAmt3) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode4(string $OehhFrtTaxCode4) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt4(string $OehhFrtTaxAmt4) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode5(string $OehhFrtTaxCode5) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt5(string $OehhFrtTaxAmt5) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhedi855sent(string $OehhEdi855Sent) Return the first ChildSalesHistory filtered by the OehhEdi855Sent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrt3rdparty(string $OehhFrt3rdParty) Return the first ChildSalesHistory filtered by the OehhFrt3rdParty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfob(string $OehhFob) Return the first ChildSalesHistory filtered by the OehhFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhconfirmimagyn(string $OehhConfirmImagYn) Return the first ChildSalesHistory filtered by the OehhConfirmImagYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhindustconform(string $OehhIndustConform) Return the first ChildSalesHistory filtered by the OehhIndustConform column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcstkconsign(string $OehhCstkConsign) Return the first ChildSalesHistory filtered by the OehhCstkConsign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhlmdelaycapsent(string $OehhLmDelayCapSent) Return the first ChildSalesHistory filtered by the OehhLmDelayCapSent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhmfgid(string $OehhMfgId) Return the first ChildSalesHistory filtered by the OehhMfgId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhstoreid(string $OehhStoreId) Return the first ChildSalesHistory filtered by the OehhStoreId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpickqueue(string $OehhPickQueue) Return the first ChildSalesHistory filtered by the OehhPickQueue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehharrvdate(string $OehhArrvDate) Return the first ChildSalesHistory filtered by the OehhArrvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhsurchgstat(string $OehhSurchgStat) Return the first ChildSalesHistory filtered by the OehhSurchgStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrtgrup(string $OehhFrtGrup) Return the first ChildSalesHistory filtered by the OehhFrtGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhcommoride(string $OehhCommOride) Return the first ChildSalesHistory filtered by the OehhCommOride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhchrgsplt(string $OehhChrgSplt) Return the first ChildSalesHistory filtered by the OehhChrgSplt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhacccaprv(string $OehhAcCcAprv) Return the first ChildSalesHistory filtered by the OehhAcCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhorigordrnbr(string $OehhOrigOrdrNbr) Return the first ChildSalesHistory filtered by the OehhOrigOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhpostdate(string $OehhPostDate) Return the first ChildSalesHistory filtered by the OehhPostDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscdate1(string $OehhDiscDate1) Return the first ChildSalesHistory filtered by the OehhDiscDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscpct1(string $OehhDiscPct1) Return the first ChildSalesHistory filtered by the OehhDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduedate1(string $OehhDueDate1) Return the first ChildSalesHistory filtered by the OehhDueDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdueamt1(string $OehhDueAmt1) Return the first ChildSalesHistory filtered by the OehhDueAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduepct1(string $OehhDuePct1) Return the first ChildSalesHistory filtered by the OehhDuePct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscdate2(string $OehhDiscDate2) Return the first ChildSalesHistory filtered by the OehhDiscDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscpct2(string $OehhDiscPct2) Return the first ChildSalesHistory filtered by the OehhDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduedate2(string $OehhDueDate2) Return the first ChildSalesHistory filtered by the OehhDueDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdueamt2(string $OehhDueAmt2) Return the first ChildSalesHistory filtered by the OehhDueAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduepct2(string $OehhDuePct2) Return the first ChildSalesHistory filtered by the OehhDuePct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscdate3(string $OehhDiscDate3) Return the first ChildSalesHistory filtered by the OehhDiscDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscpct3(string $OehhDiscPct3) Return the first ChildSalesHistory filtered by the OehhDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduedate3(string $OehhDueDate3) Return the first ChildSalesHistory filtered by the OehhDueDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdueamt3(string $OehhDueAmt3) Return the first ChildSalesHistory filtered by the OehhDueAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduepct3(string $OehhDuePct3) Return the first ChildSalesHistory filtered by the OehhDuePct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscdate4(string $OehhDiscDate4) Return the first ChildSalesHistory filtered by the OehhDiscDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscpct4(string $OehhDiscPct4) Return the first ChildSalesHistory filtered by the OehhDiscPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduedate4(string $OehhDueDate4) Return the first ChildSalesHistory filtered by the OehhDueDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdueamt4(string $OehhDueAmt4) Return the first ChildSalesHistory filtered by the OehhDueAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduepct4(string $OehhDuePct4) Return the first ChildSalesHistory filtered by the OehhDuePct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscdate5(string $OehhDiscDate5) Return the first ChildSalesHistory filtered by the OehhDiscDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscpct5(string $OehhDiscPct5) Return the first ChildSalesHistory filtered by the OehhDiscPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduedate5(string $OehhDueDate5) Return the first ChildSalesHistory filtered by the OehhDueDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdueamt5(string $OehhDueAmt5) Return the first ChildSalesHistory filtered by the OehhDueAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduepct5(string $OehhDuePct5) Return the first ChildSalesHistory filtered by the OehhDuePct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscdate6(string $OehhDiscDate6) Return the first ChildSalesHistory filtered by the OehhDiscDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdiscpct6(string $OehhDiscPct6) Return the first ChildSalesHistory filtered by the OehhDiscPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduedate6(string $OehhDueDate6) Return the first ChildSalesHistory filtered by the OehhDueDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhdueamt6(string $OehhDueAmt6) Return the first ChildSalesHistory filtered by the OehhDueAmt6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhduepct6(string $OehhDuePct6) Return the first ChildSalesHistory filtered by the OehhDuePct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhrefnbr(string $OehhRefNbr) Return the first ChildSalesHistory filtered by the OehhRefNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhacprognbr(string $OehhAcProgNbr) Return the first ChildSalesHistory filtered by the OehhAcProgNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhacprogexpdate(string $OehhAcProgExpDate) Return the first ChildSalesHistory filtered by the OehhAcProgExpDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistory filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistory filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByDummy(string $dummy) Return the first ChildSalesHistory filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistory[]|Collection find(?ConnectionInterface $con = null) Return ChildSalesHistory objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSalesHistory> find(?ConnectionInterface $con = null) Return ChildSalesHistory objects based on current ModelCriteria
 *
 * @method     ChildSalesHistory[]|Collection findByOehhnbr(int|array<int> $OehhNbr) Return ChildSalesHistory objects filtered by the OehhNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhnbr(int|array<int> $OehhNbr) Return ChildSalesHistory objects filtered by the OehhNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhyear(string|array<string> $OehhYear) Return ChildSalesHistory objects filtered by the OehhYear column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhyear(string|array<string> $OehhYear) Return ChildSalesHistory objects filtered by the OehhYear column
 * @method     ChildSalesHistory[]|Collection findByOehhstat(string|array<string> $OehhStat) Return ChildSalesHistory objects filtered by the OehhStat column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstat(string|array<string> $OehhStat) Return ChildSalesHistory objects filtered by the OehhStat column
 * @method     ChildSalesHistory[]|Collection findByOehhhold(string|array<string> $OehhHold) Return ChildSalesHistory objects filtered by the OehhHold column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhhold(string|array<string> $OehhHold) Return ChildSalesHistory objects filtered by the OehhHold column
 * @method     ChildSalesHistory[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildSalesHistory objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByArcucustid(string|array<string> $ArcuCustId) Return ChildSalesHistory objects filtered by the ArcuCustId column
 * @method     ChildSalesHistory[]|Collection findByArstshipid(string|array<string> $ArstShipId) Return ChildSalesHistory objects filtered by the ArstShipId column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByArstshipid(string|array<string> $ArstShipId) Return ChildSalesHistory objects filtered by the ArstShipId column
 * @method     ChildSalesHistory[]|Collection findByOehhstname(string|array<string> $OehhStName) Return ChildSalesHistory objects filtered by the OehhStName column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstname(string|array<string> $OehhStName) Return ChildSalesHistory objects filtered by the OehhStName column
 * @method     ChildSalesHistory[]|Collection findByOehhstlastname(string|array<string> $OehhStLastName) Return ChildSalesHistory objects filtered by the OehhStLastName column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstlastname(string|array<string> $OehhStLastName) Return ChildSalesHistory objects filtered by the OehhStLastName column
 * @method     ChildSalesHistory[]|Collection findByOehhstfirstname(string|array<string> $OehhStFirstName) Return ChildSalesHistory objects filtered by the OehhStFirstName column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstfirstname(string|array<string> $OehhStFirstName) Return ChildSalesHistory objects filtered by the OehhStFirstName column
 * @method     ChildSalesHistory[]|Collection findByOehhstadr1(string|array<string> $OehhStAdr1) Return ChildSalesHistory objects filtered by the OehhStAdr1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstadr1(string|array<string> $OehhStAdr1) Return ChildSalesHistory objects filtered by the OehhStAdr1 column
 * @method     ChildSalesHistory[]|Collection findByOehhstadr2(string|array<string> $OehhStAdr2) Return ChildSalesHistory objects filtered by the OehhStAdr2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstadr2(string|array<string> $OehhStAdr2) Return ChildSalesHistory objects filtered by the OehhStAdr2 column
 * @method     ChildSalesHistory[]|Collection findByOehhstadr3(string|array<string> $OehhStAdr3) Return ChildSalesHistory objects filtered by the OehhStAdr3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstadr3(string|array<string> $OehhStAdr3) Return ChildSalesHistory objects filtered by the OehhStAdr3 column
 * @method     ChildSalesHistory[]|Collection findByOehhstctry(string|array<string> $OehhStCtry) Return ChildSalesHistory objects filtered by the OehhStCtry column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstctry(string|array<string> $OehhStCtry) Return ChildSalesHistory objects filtered by the OehhStCtry column
 * @method     ChildSalesHistory[]|Collection findByOehhstcity(string|array<string> $OehhStCity) Return ChildSalesHistory objects filtered by the OehhStCity column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstcity(string|array<string> $OehhStCity) Return ChildSalesHistory objects filtered by the OehhStCity column
 * @method     ChildSalesHistory[]|Collection findByOehhststat(string|array<string> $OehhStStat) Return ChildSalesHistory objects filtered by the OehhStStat column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhststat(string|array<string> $OehhStStat) Return ChildSalesHistory objects filtered by the OehhStStat column
 * @method     ChildSalesHistory[]|Collection findByOehhstzipcode(string|array<string> $OehhStZipCode) Return ChildSalesHistory objects filtered by the OehhStZipCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstzipcode(string|array<string> $OehhStZipCode) Return ChildSalesHistory objects filtered by the OehhStZipCode column
 * @method     ChildSalesHistory[]|Collection findByOehhcustpo(string|array<string> $OehhCustPo) Return ChildSalesHistory objects filtered by the OehhCustPo column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcustpo(string|array<string> $OehhCustPo) Return ChildSalesHistory objects filtered by the OehhCustPo column
 * @method     ChildSalesHistory[]|Collection findByOehhordrdate(string|array<string> $OehhOrdrDate) Return ChildSalesHistory objects filtered by the OehhOrdrDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhordrdate(string|array<string> $OehhOrdrDate) Return ChildSalesHistory objects filtered by the OehhOrdrDate column
 * @method     ChildSalesHistory[]|Collection findByArtmtermcd(string|array<string> $ArtmTermCd) Return ChildSalesHistory objects filtered by the ArtmTermCd column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByArtmtermcd(string|array<string> $ArtmTermCd) Return ChildSalesHistory objects filtered by the ArtmTermCd column
 * @method     ChildSalesHistory[]|Collection findByArtbshipvia(string|array<string> $ArtbShipVia) Return ChildSalesHistory objects filtered by the ArtbShipVia column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByArtbshipvia(string|array<string> $ArtbShipVia) Return ChildSalesHistory objects filtered by the ArtbShipVia column
 * @method     ChildSalesHistory[]|Collection findByArininvnbr(string|array<string> $ArinInvNbr) Return ChildSalesHistory objects filtered by the ArinInvNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByArininvnbr(string|array<string> $ArinInvNbr) Return ChildSalesHistory objects filtered by the ArinInvNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhinvdate(string|array<string> $OehhInvDate) Return ChildSalesHistory objects filtered by the OehhInvDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhinvdate(string|array<string> $OehhInvDate) Return ChildSalesHistory objects filtered by the OehhInvDate column
 * @method     ChildSalesHistory[]|Collection findByOehhglpd(int|array<int> $OehhGLPd) Return ChildSalesHistory objects filtered by the OehhGLPd column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhglpd(int|array<int> $OehhGLPd) Return ChildSalesHistory objects filtered by the OehhGLPd column
 * @method     ChildSalesHistory[]|Collection findByArspsaleper1(string|array<string> $ArspSalePer1) Return ChildSalesHistory objects filtered by the ArspSalePer1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByArspsaleper1(string|array<string> $ArspSalePer1) Return ChildSalesHistory objects filtered by the ArspSalePer1 column
 * @method     ChildSalesHistory[]|Collection findByOehhsp1pct(string|array<string> $OehhSp1Pct) Return ChildSalesHistory objects filtered by the OehhSp1Pct column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhsp1pct(string|array<string> $OehhSp1Pct) Return ChildSalesHistory objects filtered by the OehhSp1Pct column
 * @method     ChildSalesHistory[]|Collection findByArspsaleper2(string|array<string> $ArspSalePer2) Return ChildSalesHistory objects filtered by the ArspSalePer2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByArspsaleper2(string|array<string> $ArspSalePer2) Return ChildSalesHistory objects filtered by the ArspSalePer2 column
 * @method     ChildSalesHistory[]|Collection findByOehhsp2pct(string|array<string> $OehhSp2Pct) Return ChildSalesHistory objects filtered by the OehhSp2Pct column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhsp2pct(string|array<string> $OehhSp2Pct) Return ChildSalesHistory objects filtered by the OehhSp2Pct column
 * @method     ChildSalesHistory[]|Collection findByArspsaleper3(string|array<string> $ArspSalePer3) Return ChildSalesHistory objects filtered by the ArspSalePer3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByArspsaleper3(string|array<string> $ArspSalePer3) Return ChildSalesHistory objects filtered by the ArspSalePer3 column
 * @method     ChildSalesHistory[]|Collection findByOehhsp3pct(string|array<string> $OehhSp3Pct) Return ChildSalesHistory objects filtered by the OehhSp3Pct column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhsp3pct(string|array<string> $OehhSp3Pct) Return ChildSalesHistory objects filtered by the OehhSp3Pct column
 * @method     ChildSalesHistory[]|Collection findByOehhcntrnbr(int|array<int> $OehhCntrNbr) Return ChildSalesHistory objects filtered by the OehhCntrNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcntrnbr(int|array<int> $OehhCntrNbr) Return ChildSalesHistory objects filtered by the OehhCntrNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhwibatch(int|array<int> $OehhWiBatch) Return ChildSalesHistory objects filtered by the OehhWiBatch column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhwibatch(int|array<int> $OehhWiBatch) Return ChildSalesHistory objects filtered by the OehhWiBatch column
 * @method     ChildSalesHistory[]|Collection findByOehhdroprelhold(string|array<string> $OehhDropRelHold) Return ChildSalesHistory objects filtered by the OehhDropRelHold column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdroprelhold(string|array<string> $OehhDropRelHold) Return ChildSalesHistory objects filtered by the OehhDropRelHold column
 * @method     ChildSalesHistory[]|Collection findByOehhtaxsub(string|array<string> $OehhTaxSub) Return ChildSalesHistory objects filtered by the OehhTaxSub column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhtaxsub(string|array<string> $OehhTaxSub) Return ChildSalesHistory objects filtered by the OehhTaxSub column
 * @method     ChildSalesHistory[]|Collection findByOehhnontaxsub(string|array<string> $OehhNonTaxSub) Return ChildSalesHistory objects filtered by the OehhNonTaxSub column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhnontaxsub(string|array<string> $OehhNonTaxSub) Return ChildSalesHistory objects filtered by the OehhNonTaxSub column
 * @method     ChildSalesHistory[]|Collection findByOehhtaxtot(string|array<string> $OehhTaxTot) Return ChildSalesHistory objects filtered by the OehhTaxTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhtaxtot(string|array<string> $OehhTaxTot) Return ChildSalesHistory objects filtered by the OehhTaxTot column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttot(string|array<string> $OehhFrtTot) Return ChildSalesHistory objects filtered by the OehhFrtTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttot(string|array<string> $OehhFrtTot) Return ChildSalesHistory objects filtered by the OehhFrtTot column
 * @method     ChildSalesHistory[]|Collection findByOehhmisctot(string|array<string> $OehhMiscTot) Return ChildSalesHistory objects filtered by the OehhMiscTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhmisctot(string|array<string> $OehhMiscTot) Return ChildSalesHistory objects filtered by the OehhMiscTot column
 * @method     ChildSalesHistory[]|Collection findByOehhordrtot(string|array<string> $OehhOrdrTot) Return ChildSalesHistory objects filtered by the OehhOrdrTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhordrtot(string|array<string> $OehhOrdrTot) Return ChildSalesHistory objects filtered by the OehhOrdrTot column
 * @method     ChildSalesHistory[]|Collection findByOehhcosttot(string|array<string> $OehhCostTot) Return ChildSalesHistory objects filtered by the OehhCostTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcosttot(string|array<string> $OehhCostTot) Return ChildSalesHistory objects filtered by the OehhCostTot column
 * @method     ChildSalesHistory[]|Collection findByOehhspcommlock(string|array<string> $OehhSpCommLock) Return ChildSalesHistory objects filtered by the OehhSpCommLock column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhspcommlock(string|array<string> $OehhSpCommLock) Return ChildSalesHistory objects filtered by the OehhSpCommLock column
 * @method     ChildSalesHistory[]|Collection findByOehhtakendate(string|array<string> $OehhTakenDate) Return ChildSalesHistory objects filtered by the OehhTakenDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhtakendate(string|array<string> $OehhTakenDate) Return ChildSalesHistory objects filtered by the OehhTakenDate column
 * @method     ChildSalesHistory[]|Collection findByOehhtakentime(string|array<string> $OehhTakenTime) Return ChildSalesHistory objects filtered by the OehhTakenTime column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhtakentime(string|array<string> $OehhTakenTime) Return ChildSalesHistory objects filtered by the OehhTakenTime column
 * @method     ChildSalesHistory[]|Collection findByOehhpickdate(string|array<string> $OehhPickDate) Return ChildSalesHistory objects filtered by the OehhPickDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpickdate(string|array<string> $OehhPickDate) Return ChildSalesHistory objects filtered by the OehhPickDate column
 * @method     ChildSalesHistory[]|Collection findByOehhpicktime(string|array<string> $OehhPickTime) Return ChildSalesHistory objects filtered by the OehhPickTime column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpicktime(string|array<string> $OehhPickTime) Return ChildSalesHistory objects filtered by the OehhPickTime column
 * @method     ChildSalesHistory[]|Collection findByOehhpackdate(string|array<string> $OehhPackDate) Return ChildSalesHistory objects filtered by the OehhPackDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpackdate(string|array<string> $OehhPackDate) Return ChildSalesHistory objects filtered by the OehhPackDate column
 * @method     ChildSalesHistory[]|Collection findByOehhpacktime(string|array<string> $OehhPackTime) Return ChildSalesHistory objects filtered by the OehhPackTime column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpacktime(string|array<string> $OehhPackTime) Return ChildSalesHistory objects filtered by the OehhPackTime column
 * @method     ChildSalesHistory[]|Collection findByOehhverifydate(string|array<string> $OehhVerifyDate) Return ChildSalesHistory objects filtered by the OehhVerifyDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhverifydate(string|array<string> $OehhVerifyDate) Return ChildSalesHistory objects filtered by the OehhVerifyDate column
 * @method     ChildSalesHistory[]|Collection findByOehhverifytime(string|array<string> $OehhVerifyTime) Return ChildSalesHistory objects filtered by the OehhVerifyTime column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhverifytime(string|array<string> $OehhVerifyTime) Return ChildSalesHistory objects filtered by the OehhVerifyTime column
 * @method     ChildSalesHistory[]|Collection findByOehhcreditmemo(string|array<string> $OehhCreditMemo) Return ChildSalesHistory objects filtered by the OehhCreditMemo column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcreditmemo(string|array<string> $OehhCreditMemo) Return ChildSalesHistory objects filtered by the OehhCreditMemo column
 * @method     ChildSalesHistory[]|Collection findByOehhbookedyn(string|array<string> $OehhBookedYn) Return ChildSalesHistory objects filtered by the OehhBookedYn column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhbookedyn(string|array<string> $OehhBookedYn) Return ChildSalesHistory objects filtered by the OehhBookedYn column
 * @method     ChildSalesHistory[]|Collection findByIntbwhseorig(string|array<string> $IntbWhseOrig) Return ChildSalesHistory objects filtered by the IntbWhseOrig column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByIntbwhseorig(string|array<string> $IntbWhseOrig) Return ChildSalesHistory objects filtered by the IntbWhseOrig column
 * @method     ChildSalesHistory[]|Collection findByOehhbtstat(string|array<string> $OehhBtStat) Return ChildSalesHistory objects filtered by the OehhBtStat column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhbtstat(string|array<string> $OehhBtStat) Return ChildSalesHistory objects filtered by the OehhBtStat column
 * @method     ChildSalesHistory[]|Collection findByOehhshipcomp(string|array<string> $OehhShipComp) Return ChildSalesHistory objects filtered by the OehhShipComp column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhshipcomp(string|array<string> $OehhShipComp) Return ChildSalesHistory objects filtered by the OehhShipComp column
 * @method     ChildSalesHistory[]|Collection findByOehhcwoflag(string|array<string> $OehhCwoFlag) Return ChildSalesHistory objects filtered by the OehhCwoFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcwoflag(string|array<string> $OehhCwoFlag) Return ChildSalesHistory objects filtered by the OehhCwoFlag column
 * @method     ChildSalesHistory[]|Collection findByOehhdivision(string|array<string> $OehhDivision) Return ChildSalesHistory objects filtered by the OehhDivision column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdivision(string|array<string> $OehhDivision) Return ChildSalesHistory objects filtered by the OehhDivision column
 * @method     ChildSalesHistory[]|Collection findByOehhtakencode(string|array<string> $OehhTakenCode) Return ChildSalesHistory objects filtered by the OehhTakenCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhtakencode(string|array<string> $OehhTakenCode) Return ChildSalesHistory objects filtered by the OehhTakenCode column
 * @method     ChildSalesHistory[]|Collection findByOehhpickcode(string|array<string> $OehhPickCode) Return ChildSalesHistory objects filtered by the OehhPickCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpickcode(string|array<string> $OehhPickCode) Return ChildSalesHistory objects filtered by the OehhPickCode column
 * @method     ChildSalesHistory[]|Collection findByOehhpackcode(string|array<string> $OehhPackCode) Return ChildSalesHistory objects filtered by the OehhPackCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpackcode(string|array<string> $OehhPackCode) Return ChildSalesHistory objects filtered by the OehhPackCode column
 * @method     ChildSalesHistory[]|Collection findByOehhverifycode(string|array<string> $OehhVerifyCode) Return ChildSalesHistory objects filtered by the OehhVerifyCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhverifycode(string|array<string> $OehhVerifyCode) Return ChildSalesHistory objects filtered by the OehhVerifyCode column
 * @method     ChildSalesHistory[]|Collection findByOehhtotdisc(string|array<string> $OehhTotDisc) Return ChildSalesHistory objects filtered by the OehhTotDisc column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhtotdisc(string|array<string> $OehhTotDisc) Return ChildSalesHistory objects filtered by the OehhTotDisc column
 * @method     ChildSalesHistory[]|Collection findByOehhedirefnbrqual(string|array<string> $OehhEdiRefNbrQual) Return ChildSalesHistory objects filtered by the OehhEdiRefNbrQual column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhedirefnbrqual(string|array<string> $OehhEdiRefNbrQual) Return ChildSalesHistory objects filtered by the OehhEdiRefNbrQual column
 * @method     ChildSalesHistory[]|Collection findByOehhusercode1(string|array<string> $OehhUserCode1) Return ChildSalesHistory objects filtered by the OehhUserCode1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhusercode1(string|array<string> $OehhUserCode1) Return ChildSalesHistory objects filtered by the OehhUserCode1 column
 * @method     ChildSalesHistory[]|Collection findByOehhusercode2(string|array<string> $OehhUserCode2) Return ChildSalesHistory objects filtered by the OehhUserCode2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhusercode2(string|array<string> $OehhUserCode2) Return ChildSalesHistory objects filtered by the OehhUserCode2 column
 * @method     ChildSalesHistory[]|Collection findByOehhusercode3(string|array<string> $OehhUserCode3) Return ChildSalesHistory objects filtered by the OehhUserCode3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhusercode3(string|array<string> $OehhUserCode3) Return ChildSalesHistory objects filtered by the OehhUserCode3 column
 * @method     ChildSalesHistory[]|Collection findByOehhusercode4(string|array<string> $OehhUserCode4) Return ChildSalesHistory objects filtered by the OehhUserCode4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhusercode4(string|array<string> $OehhUserCode4) Return ChildSalesHistory objects filtered by the OehhUserCode4 column
 * @method     ChildSalesHistory[]|Collection findByOehhexchctry(string|array<string> $OehhExchCtry) Return ChildSalesHistory objects filtered by the OehhExchCtry column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhexchctry(string|array<string> $OehhExchCtry) Return ChildSalesHistory objects filtered by the OehhExchCtry column
 * @method     ChildSalesHistory[]|Collection findByOehhexchrate(string|array<string> $OehhExchRate) Return ChildSalesHistory objects filtered by the OehhExchRate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhexchrate(string|array<string> $OehhExchRate) Return ChildSalesHistory objects filtered by the OehhExchRate column
 * @method     ChildSalesHistory[]|Collection findByOehhwghttot(string|array<string> $OehhWghtTot) Return ChildSalesHistory objects filtered by the OehhWghtTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhwghttot(string|array<string> $OehhWghtTot) Return ChildSalesHistory objects filtered by the OehhWghtTot column
 * @method     ChildSalesHistory[]|Collection findByOehhwghtoride(string|array<string> $OehhWghtOride) Return ChildSalesHistory objects filtered by the OehhWghtOride column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhwghtoride(string|array<string> $OehhWghtOride) Return ChildSalesHistory objects filtered by the OehhWghtOride column
 * @method     ChildSalesHistory[]|Collection findByOehhccinfo(string|array<string> $OehhCcInfo) Return ChildSalesHistory objects filtered by the OehhCcInfo column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhccinfo(string|array<string> $OehhCcInfo) Return ChildSalesHistory objects filtered by the OehhCcInfo column
 * @method     ChildSalesHistory[]|Collection findByOehhboxcount(int|array<int> $OehhBoxCount) Return ChildSalesHistory objects filtered by the OehhBoxCount column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhboxcount(int|array<int> $OehhBoxCount) Return ChildSalesHistory objects filtered by the OehhBoxCount column
 * @method     ChildSalesHistory[]|Collection findByOehhrqstdate(string|array<string> $OehhRqstDate) Return ChildSalesHistory objects filtered by the OehhRqstDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhrqstdate(string|array<string> $OehhRqstDate) Return ChildSalesHistory objects filtered by the OehhRqstDate column
 * @method     ChildSalesHistory[]|Collection findByOehhcancdate(string|array<string> $OehhCancDate) Return ChildSalesHistory objects filtered by the OehhCancDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcancdate(string|array<string> $OehhCancDate) Return ChildSalesHistory objects filtered by the OehhCancDate column
 * @method     ChildSalesHistory[]|Collection findByOehhcrntuser(string|array<string> $OehhCrntUser) Return ChildSalesHistory objects filtered by the OehhCrntUser column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcrntuser(string|array<string> $OehhCrntUser) Return ChildSalesHistory objects filtered by the OehhCrntUser column
 * @method     ChildSalesHistory[]|Collection findByOehhreleasenbr(string|array<string> $OehhReleaseNbr) Return ChildSalesHistory objects filtered by the OehhReleaseNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhreleasenbr(string|array<string> $OehhReleaseNbr) Return ChildSalesHistory objects filtered by the OehhReleaseNbr column
 * @method     ChildSalesHistory[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildSalesHistory objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByIntbwhse(string|array<string> $IntbWhse) Return ChildSalesHistory objects filtered by the IntbWhse column
 * @method     ChildSalesHistory[]|Collection findByOehhbordbuilddate(string|array<string> $OehhBordBuildDate) Return ChildSalesHistory objects filtered by the OehhBordBuildDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhbordbuilddate(string|array<string> $OehhBordBuildDate) Return ChildSalesHistory objects filtered by the OehhBordBuildDate column
 * @method     ChildSalesHistory[]|Collection findByOehhdeptcode(string|array<string> $OehhDeptCode) Return ChildSalesHistory objects filtered by the OehhDeptCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdeptcode(string|array<string> $OehhDeptCode) Return ChildSalesHistory objects filtered by the OehhDeptCode column
 * @method     ChildSalesHistory[]|Collection findByOehhfrtinentered(string|array<string> $OehhFrtInEntered) Return ChildSalesHistory objects filtered by the OehhFrtInEntered column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrtinentered(string|array<string> $OehhFrtInEntered) Return ChildSalesHistory objects filtered by the OehhFrtInEntered column
 * @method     ChildSalesHistory[]|Collection findByOehhdropshipentered(string|array<string> $OehhDropShipEntered) Return ChildSalesHistory objects filtered by the OehhDropShipEntered column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdropshipentered(string|array<string> $OehhDropShipEntered) Return ChildSalesHistory objects filtered by the OehhDropShipEntered column
 * @method     ChildSalesHistory[]|Collection findByOehherflag(string|array<string> $OehhErFlag) Return ChildSalesHistory objects filtered by the OehhErFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehherflag(string|array<string> $OehhErFlag) Return ChildSalesHistory objects filtered by the OehhErFlag column
 * @method     ChildSalesHistory[]|Collection findByOehhfrtin(string|array<string> $OehhFrtIn) Return ChildSalesHistory objects filtered by the OehhFrtIn column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrtin(string|array<string> $OehhFrtIn) Return ChildSalesHistory objects filtered by the OehhFrtIn column
 * @method     ChildSalesHistory[]|Collection findByOehhdropship(string|array<string> $OehhDropShip) Return ChildSalesHistory objects filtered by the OehhDropShip column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdropship(string|array<string> $OehhDropShip) Return ChildSalesHistory objects filtered by the OehhDropShip column
 * @method     ChildSalesHistory[]|Collection findByOehhminorder(string|array<string> $OehhMinOrder) Return ChildSalesHistory objects filtered by the OehhMinOrder column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhminorder(string|array<string> $OehhMinOrder) Return ChildSalesHistory objects filtered by the OehhMinOrder column
 * @method     ChildSalesHistory[]|Collection findByOehhcontractterms(string|array<string> $OehhContractTerms) Return ChildSalesHistory objects filtered by the OehhContractTerms column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcontractterms(string|array<string> $OehhContractTerms) Return ChildSalesHistory objects filtered by the OehhContractTerms column
 * @method     ChildSalesHistory[]|Collection findByOehhdropshipbilled(string|array<string> $OehhDropShipBilled) Return ChildSalesHistory objects filtered by the OehhDropShipBilled column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdropshipbilled(string|array<string> $OehhDropShipBilled) Return ChildSalesHistory objects filtered by the OehhDropShipBilled column
 * @method     ChildSalesHistory[]|Collection findByOehhordtyp(string|array<string> $OehhOrdTyp) Return ChildSalesHistory objects filtered by the OehhOrdTyp column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhordtyp(string|array<string> $OehhOrdTyp) Return ChildSalesHistory objects filtered by the OehhOrdTyp column
 * @method     ChildSalesHistory[]|Collection findByOehhtracknbr(string|array<string> $OehhTrackNbr) Return ChildSalesHistory objects filtered by the OehhTrackNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhtracknbr(string|array<string> $OehhTrackNbr) Return ChildSalesHistory objects filtered by the OehhTrackNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhsource(string|array<string> $OehhSource) Return ChildSalesHistory objects filtered by the OehhSource column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhsource(string|array<string> $OehhSource) Return ChildSalesHistory objects filtered by the OehhSource column
 * @method     ChildSalesHistory[]|Collection findByOehhccaprv(string|array<string> $OehhCcAprv) Return ChildSalesHistory objects filtered by the OehhCcAprv column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhccaprv(string|array<string> $OehhCcAprv) Return ChildSalesHistory objects filtered by the OehhCcAprv column
 * @method     ChildSalesHistory[]|Collection findByOehhpickfmattype(string|array<string> $OehhPickFmatType) Return ChildSalesHistory objects filtered by the OehhPickFmatType column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpickfmattype(string|array<string> $OehhPickFmatType) Return ChildSalesHistory objects filtered by the OehhPickFmatType column
 * @method     ChildSalesHistory[]|Collection findByOehhinvcfmattype(string|array<string> $OehhInvcFmatType) Return ChildSalesHistory objects filtered by the OehhInvcFmatType column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhinvcfmattype(string|array<string> $OehhInvcFmatType) Return ChildSalesHistory objects filtered by the OehhInvcFmatType column
 * @method     ChildSalesHistory[]|Collection findByOehhcashamt(string|array<string> $OehhCashAmt) Return ChildSalesHistory objects filtered by the OehhCashAmt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcashamt(string|array<string> $OehhCashAmt) Return ChildSalesHistory objects filtered by the OehhCashAmt column
 * @method     ChildSalesHistory[]|Collection findByOehhcheckamt(string|array<string> $OehhCheckAmt) Return ChildSalesHistory objects filtered by the OehhCheckAmt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcheckamt(string|array<string> $OehhCheckAmt) Return ChildSalesHistory objects filtered by the OehhCheckAmt column
 * @method     ChildSalesHistory[]|Collection findByOehhchecknbr(string|array<string> $OehhCheckNbr) Return ChildSalesHistory objects filtered by the OehhCheckNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhchecknbr(string|array<string> $OehhCheckNbr) Return ChildSalesHistory objects filtered by the OehhCheckNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhdepositamt(string|array<string> $OehhDepositAmt) Return ChildSalesHistory objects filtered by the OehhDepositAmt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdepositamt(string|array<string> $OehhDepositAmt) Return ChildSalesHistory objects filtered by the OehhDepositAmt column
 * @method     ChildSalesHistory[]|Collection findByOehhdepositnbr(string|array<string> $OehhDepositNbr) Return ChildSalesHistory objects filtered by the OehhDepositNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdepositnbr(string|array<string> $OehhDepositNbr) Return ChildSalesHistory objects filtered by the OehhDepositNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhccamt(string|array<string> $OehhCcAmt) Return ChildSalesHistory objects filtered by the OehhCcAmt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhccamt(string|array<string> $OehhCcAmt) Return ChildSalesHistory objects filtered by the OehhCcAmt column
 * @method     ChildSalesHistory[]|Collection findByOehhotaxsub(string|array<string> $OehhOTaxSub) Return ChildSalesHistory objects filtered by the OehhOTaxSub column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhotaxsub(string|array<string> $OehhOTaxSub) Return ChildSalesHistory objects filtered by the OehhOTaxSub column
 * @method     ChildSalesHistory[]|Collection findByOehhonontaxsub(string|array<string> $OehhONonTaxSub) Return ChildSalesHistory objects filtered by the OehhONonTaxSub column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhonontaxsub(string|array<string> $OehhONonTaxSub) Return ChildSalesHistory objects filtered by the OehhONonTaxSub column
 * @method     ChildSalesHistory[]|Collection findByOehhotaxtot(string|array<string> $OehhOTaxTot) Return ChildSalesHistory objects filtered by the OehhOTaxTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhotaxtot(string|array<string> $OehhOTaxTot) Return ChildSalesHistory objects filtered by the OehhOTaxTot column
 * @method     ChildSalesHistory[]|Collection findByOehhoordrtot(string|array<string> $OehhOOrdrTot) Return ChildSalesHistory objects filtered by the OehhOOrdrTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhoordrtot(string|array<string> $OehhOOrdrTot) Return ChildSalesHistory objects filtered by the OehhOOrdrTot column
 * @method     ChildSalesHistory[]|Collection findByOehhpickprintdate(string|array<string> $OehhPickPrintDate) Return ChildSalesHistory objects filtered by the OehhPickPrintDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpickprintdate(string|array<string> $OehhPickPrintDate) Return ChildSalesHistory objects filtered by the OehhPickPrintDate column
 * @method     ChildSalesHistory[]|Collection findByOehhpickprinttime(string|array<string> $OehhPickPrintTime) Return ChildSalesHistory objects filtered by the OehhPickPrintTime column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpickprinttime(string|array<string> $OehhPickPrintTime) Return ChildSalesHistory objects filtered by the OehhPickPrintTime column
 * @method     ChildSalesHistory[]|Collection findByOehhcont(string|array<string> $OehhCont) Return ChildSalesHistory objects filtered by the OehhCont column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcont(string|array<string> $OehhCont) Return ChildSalesHistory objects filtered by the OehhCont column
 * @method     ChildSalesHistory[]|Collection findByOehhcontteleintl(string|array<string> $OehhContTeleIntl) Return ChildSalesHistory objects filtered by the OehhContTeleIntl column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcontteleintl(string|array<string> $OehhContTeleIntl) Return ChildSalesHistory objects filtered by the OehhContTeleIntl column
 * @method     ChildSalesHistory[]|Collection findByOehhconttelenbr(string|array<string> $OehhContTeleNbr) Return ChildSalesHistory objects filtered by the OehhContTeleNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhconttelenbr(string|array<string> $OehhContTeleNbr) Return ChildSalesHistory objects filtered by the OehhContTeleNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhcontteleext(string|array<string> $OehhContTeleExt) Return ChildSalesHistory objects filtered by the OehhContTeleExt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcontteleext(string|array<string> $OehhContTeleExt) Return ChildSalesHistory objects filtered by the OehhContTeleExt column
 * @method     ChildSalesHistory[]|Collection findByOehhcontfaxintl(string|array<string> $OehhContFaxIntl) Return ChildSalesHistory objects filtered by the OehhContFaxIntl column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcontfaxintl(string|array<string> $OehhContFaxIntl) Return ChildSalesHistory objects filtered by the OehhContFaxIntl column
 * @method     ChildSalesHistory[]|Collection findByOehhcontfaxnbr(string|array<string> $OehhContFaxNbr) Return ChildSalesHistory objects filtered by the OehhContFaxNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcontfaxnbr(string|array<string> $OehhContFaxNbr) Return ChildSalesHistory objects filtered by the OehhContFaxNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhshipacct(string|array<string> $OehhShipAcct) Return ChildSalesHistory objects filtered by the OehhShipAcct column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhshipacct(string|array<string> $OehhShipAcct) Return ChildSalesHistory objects filtered by the OehhShipAcct column
 * @method     ChildSalesHistory[]|Collection findByOehhchgdue(string|array<string> $OehhChgDue) Return ChildSalesHistory objects filtered by the OehhChgDue column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhchgdue(string|array<string> $OehhChgDue) Return ChildSalesHistory objects filtered by the OehhChgDue column
 * @method     ChildSalesHistory[]|Collection findByOehhaddlpricdisc(string|array<string> $OehhAddlPricDisc) Return ChildSalesHistory objects filtered by the OehhAddlPricDisc column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhaddlpricdisc(string|array<string> $OehhAddlPricDisc) Return ChildSalesHistory objects filtered by the OehhAddlPricDisc column
 * @method     ChildSalesHistory[]|Collection findByOehhallship(string|array<string> $OehhAllShip) Return ChildSalesHistory objects filtered by the OehhAllShip column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhallship(string|array<string> $OehhAllShip) Return ChildSalesHistory objects filtered by the OehhAllShip column
 * @method     ChildSalesHistory[]|Collection findByOehhqtyorderamt(string|array<string> $OehhQtyOrderAmt) Return ChildSalesHistory objects filtered by the OehhQtyOrderAmt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhqtyorderamt(string|array<string> $OehhQtyOrderAmt) Return ChildSalesHistory objects filtered by the OehhQtyOrderAmt column
 * @method     ChildSalesHistory[]|Collection findByOehhcreditapplied(string|array<string> $OehhCreditApplied) Return ChildSalesHistory objects filtered by the OehhCreditApplied column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcreditapplied(string|array<string> $OehhCreditApplied) Return ChildSalesHistory objects filtered by the OehhCreditApplied column
 * @method     ChildSalesHistory[]|Collection findByOehhinvcprintdate(string|array<string> $OehhInvcPrintDate) Return ChildSalesHistory objects filtered by the OehhInvcPrintDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhinvcprintdate(string|array<string> $OehhInvcPrintDate) Return ChildSalesHistory objects filtered by the OehhInvcPrintDate column
 * @method     ChildSalesHistory[]|Collection findByOehhinvcprinttime(string|array<string> $OehhInvcPrintTime) Return ChildSalesHistory objects filtered by the OehhInvcPrintTime column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhinvcprinttime(string|array<string> $OehhInvcPrintTime) Return ChildSalesHistory objects filtered by the OehhInvcPrintTime column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscfrt(string|array<string> $OehhDiscFrt) Return ChildSalesHistory objects filtered by the OehhDiscFrt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscfrt(string|array<string> $OehhDiscFrt) Return ChildSalesHistory objects filtered by the OehhDiscFrt column
 * @method     ChildSalesHistory[]|Collection findByOehhorideshipcomp(string|array<string> $OehhOrideShipComp) Return ChildSalesHistory objects filtered by the OehhOrideShipComp column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhorideshipcomp(string|array<string> $OehhOrideShipComp) Return ChildSalesHistory objects filtered by the OehhOrideShipComp column
 * @method     ChildSalesHistory[]|Collection findByOehhcontemail(string|array<string> $OehhContEmail) Return ChildSalesHistory objects filtered by the OehhContEmail column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcontemail(string|array<string> $OehhContEmail) Return ChildSalesHistory objects filtered by the OehhContEmail column
 * @method     ChildSalesHistory[]|Collection findByOehhmanualfrt(string|array<string> $OehhManualFrt) Return ChildSalesHistory objects filtered by the OehhManualFrt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhmanualfrt(string|array<string> $OehhManualFrt) Return ChildSalesHistory objects filtered by the OehhManualFrt column
 * @method     ChildSalesHistory[]|Collection findByOehhinternalfrt(string|array<string> $OehhInternalFrt) Return ChildSalesHistory objects filtered by the OehhInternalFrt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhinternalfrt(string|array<string> $OehhInternalFrt) Return ChildSalesHistory objects filtered by the OehhInternalFrt column
 * @method     ChildSalesHistory[]|Collection findByOehhfrtcost(string|array<string> $OehhFrtCost) Return ChildSalesHistory objects filtered by the OehhFrtCost column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrtcost(string|array<string> $OehhFrtCost) Return ChildSalesHistory objects filtered by the OehhFrtCost column
 * @method     ChildSalesHistory[]|Collection findByOehhroute(string|array<string> $OehhRoute) Return ChildSalesHistory objects filtered by the OehhRoute column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhroute(string|array<string> $OehhRoute) Return ChildSalesHistory objects filtered by the OehhRoute column
 * @method     ChildSalesHistory[]|Collection findByOehhrouteseq(int|array<int> $OehhRouteSeq) Return ChildSalesHistory objects filtered by the OehhRouteSeq column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhrouteseq(int|array<int> $OehhRouteSeq) Return ChildSalesHistory objects filtered by the OehhRouteSeq column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxcode1(string|array<string> $OehhFrtTaxCode1) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxcode1(string|array<string> $OehhFrtTaxCode1) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode1 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxamt1(string|array<string> $OehhFrtTaxAmt1) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxamt1(string|array<string> $OehhFrtTaxAmt1) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt1 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxcode2(string|array<string> $OehhFrtTaxCode2) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxcode2(string|array<string> $OehhFrtTaxCode2) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode2 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxamt2(string|array<string> $OehhFrtTaxAmt2) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxamt2(string|array<string> $OehhFrtTaxAmt2) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt2 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxcode3(string|array<string> $OehhFrtTaxCode3) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxcode3(string|array<string> $OehhFrtTaxCode3) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode3 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxamt3(string|array<string> $OehhFrtTaxAmt3) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxamt3(string|array<string> $OehhFrtTaxAmt3) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt3 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxcode4(string|array<string> $OehhFrtTaxCode4) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxcode4(string|array<string> $OehhFrtTaxCode4) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode4 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxamt4(string|array<string> $OehhFrtTaxAmt4) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxamt4(string|array<string> $OehhFrtTaxAmt4) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt4 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxcode5(string|array<string> $OehhFrtTaxCode5) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxcode5(string|array<string> $OehhFrtTaxCode5) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode5 column
 * @method     ChildSalesHistory[]|Collection findByOehhfrttaxamt5(string|array<string> $OehhFrtTaxAmt5) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrttaxamt5(string|array<string> $OehhFrtTaxAmt5) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt5 column
 * @method     ChildSalesHistory[]|Collection findByOehhedi855sent(string|array<string> $OehhEdi855Sent) Return ChildSalesHistory objects filtered by the OehhEdi855Sent column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhedi855sent(string|array<string> $OehhEdi855Sent) Return ChildSalesHistory objects filtered by the OehhEdi855Sent column
 * @method     ChildSalesHistory[]|Collection findByOehhfrt3rdparty(string|array<string> $OehhFrt3rdParty) Return ChildSalesHistory objects filtered by the OehhFrt3rdParty column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrt3rdparty(string|array<string> $OehhFrt3rdParty) Return ChildSalesHistory objects filtered by the OehhFrt3rdParty column
 * @method     ChildSalesHistory[]|Collection findByOehhfob(string|array<string> $OehhFob) Return ChildSalesHistory objects filtered by the OehhFob column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfob(string|array<string> $OehhFob) Return ChildSalesHistory objects filtered by the OehhFob column
 * @method     ChildSalesHistory[]|Collection findByOehhconfirmimagyn(string|array<string> $OehhConfirmImagYn) Return ChildSalesHistory objects filtered by the OehhConfirmImagYn column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhconfirmimagyn(string|array<string> $OehhConfirmImagYn) Return ChildSalesHistory objects filtered by the OehhConfirmImagYn column
 * @method     ChildSalesHistory[]|Collection findByOehhindustconform(string|array<string> $OehhIndustConform) Return ChildSalesHistory objects filtered by the OehhIndustConform column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhindustconform(string|array<string> $OehhIndustConform) Return ChildSalesHistory objects filtered by the OehhIndustConform column
 * @method     ChildSalesHistory[]|Collection findByOehhcstkconsign(string|array<string> $OehhCstkConsign) Return ChildSalesHistory objects filtered by the OehhCstkConsign column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcstkconsign(string|array<string> $OehhCstkConsign) Return ChildSalesHistory objects filtered by the OehhCstkConsign column
 * @method     ChildSalesHistory[]|Collection findByOehhlmdelaycapsent(string|array<string> $OehhLmDelayCapSent) Return ChildSalesHistory objects filtered by the OehhLmDelayCapSent column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhlmdelaycapsent(string|array<string> $OehhLmDelayCapSent) Return ChildSalesHistory objects filtered by the OehhLmDelayCapSent column
 * @method     ChildSalesHistory[]|Collection findByOehhmfgid(string|array<string> $OehhMfgId) Return ChildSalesHistory objects filtered by the OehhMfgId column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhmfgid(string|array<string> $OehhMfgId) Return ChildSalesHistory objects filtered by the OehhMfgId column
 * @method     ChildSalesHistory[]|Collection findByOehhstoreid(string|array<string> $OehhStoreId) Return ChildSalesHistory objects filtered by the OehhStoreId column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhstoreid(string|array<string> $OehhStoreId) Return ChildSalesHistory objects filtered by the OehhStoreId column
 * @method     ChildSalesHistory[]|Collection findByOehhpickqueue(string|array<string> $OehhPickQueue) Return ChildSalesHistory objects filtered by the OehhPickQueue column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpickqueue(string|array<string> $OehhPickQueue) Return ChildSalesHistory objects filtered by the OehhPickQueue column
 * @method     ChildSalesHistory[]|Collection findByOehharrvdate(string|array<string> $OehhArrvDate) Return ChildSalesHistory objects filtered by the OehhArrvDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehharrvdate(string|array<string> $OehhArrvDate) Return ChildSalesHistory objects filtered by the OehhArrvDate column
 * @method     ChildSalesHistory[]|Collection findByOehhsurchgstat(string|array<string> $OehhSurchgStat) Return ChildSalesHistory objects filtered by the OehhSurchgStat column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhsurchgstat(string|array<string> $OehhSurchgStat) Return ChildSalesHistory objects filtered by the OehhSurchgStat column
 * @method     ChildSalesHistory[]|Collection findByOehhfrtgrup(string|array<string> $OehhFrtGrup) Return ChildSalesHistory objects filtered by the OehhFrtGrup column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhfrtgrup(string|array<string> $OehhFrtGrup) Return ChildSalesHistory objects filtered by the OehhFrtGrup column
 * @method     ChildSalesHistory[]|Collection findByOehhcommoride(string|array<string> $OehhCommOride) Return ChildSalesHistory objects filtered by the OehhCommOride column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhcommoride(string|array<string> $OehhCommOride) Return ChildSalesHistory objects filtered by the OehhCommOride column
 * @method     ChildSalesHistory[]|Collection findByOehhchrgsplt(string|array<string> $OehhChrgSplt) Return ChildSalesHistory objects filtered by the OehhChrgSplt column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhchrgsplt(string|array<string> $OehhChrgSplt) Return ChildSalesHistory objects filtered by the OehhChrgSplt column
 * @method     ChildSalesHistory[]|Collection findByOehhacccaprv(string|array<string> $OehhAcCcAprv) Return ChildSalesHistory objects filtered by the OehhAcCcAprv column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhacccaprv(string|array<string> $OehhAcCcAprv) Return ChildSalesHistory objects filtered by the OehhAcCcAprv column
 * @method     ChildSalesHistory[]|Collection findByOehhorigordrnbr(string|array<string> $OehhOrigOrdrNbr) Return ChildSalesHistory objects filtered by the OehhOrigOrdrNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhorigordrnbr(string|array<string> $OehhOrigOrdrNbr) Return ChildSalesHistory objects filtered by the OehhOrigOrdrNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhpostdate(string|array<string> $OehhPostDate) Return ChildSalesHistory objects filtered by the OehhPostDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhpostdate(string|array<string> $OehhPostDate) Return ChildSalesHistory objects filtered by the OehhPostDate column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscdate1(string|array<string> $OehhDiscDate1) Return ChildSalesHistory objects filtered by the OehhDiscDate1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscdate1(string|array<string> $OehhDiscDate1) Return ChildSalesHistory objects filtered by the OehhDiscDate1 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscpct1(string|array<string> $OehhDiscPct1) Return ChildSalesHistory objects filtered by the OehhDiscPct1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscpct1(string|array<string> $OehhDiscPct1) Return ChildSalesHistory objects filtered by the OehhDiscPct1 column
 * @method     ChildSalesHistory[]|Collection findByOehhduedate1(string|array<string> $OehhDueDate1) Return ChildSalesHistory objects filtered by the OehhDueDate1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduedate1(string|array<string> $OehhDueDate1) Return ChildSalesHistory objects filtered by the OehhDueDate1 column
 * @method     ChildSalesHistory[]|Collection findByOehhdueamt1(string|array<string> $OehhDueAmt1) Return ChildSalesHistory objects filtered by the OehhDueAmt1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdueamt1(string|array<string> $OehhDueAmt1) Return ChildSalesHistory objects filtered by the OehhDueAmt1 column
 * @method     ChildSalesHistory[]|Collection findByOehhduepct1(string|array<string> $OehhDuePct1) Return ChildSalesHistory objects filtered by the OehhDuePct1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduepct1(string|array<string> $OehhDuePct1) Return ChildSalesHistory objects filtered by the OehhDuePct1 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscdate2(string|array<string> $OehhDiscDate2) Return ChildSalesHistory objects filtered by the OehhDiscDate2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscdate2(string|array<string> $OehhDiscDate2) Return ChildSalesHistory objects filtered by the OehhDiscDate2 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscpct2(string|array<string> $OehhDiscPct2) Return ChildSalesHistory objects filtered by the OehhDiscPct2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscpct2(string|array<string> $OehhDiscPct2) Return ChildSalesHistory objects filtered by the OehhDiscPct2 column
 * @method     ChildSalesHistory[]|Collection findByOehhduedate2(string|array<string> $OehhDueDate2) Return ChildSalesHistory objects filtered by the OehhDueDate2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduedate2(string|array<string> $OehhDueDate2) Return ChildSalesHistory objects filtered by the OehhDueDate2 column
 * @method     ChildSalesHistory[]|Collection findByOehhdueamt2(string|array<string> $OehhDueAmt2) Return ChildSalesHistory objects filtered by the OehhDueAmt2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdueamt2(string|array<string> $OehhDueAmt2) Return ChildSalesHistory objects filtered by the OehhDueAmt2 column
 * @method     ChildSalesHistory[]|Collection findByOehhduepct2(string|array<string> $OehhDuePct2) Return ChildSalesHistory objects filtered by the OehhDuePct2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduepct2(string|array<string> $OehhDuePct2) Return ChildSalesHistory objects filtered by the OehhDuePct2 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscdate3(string|array<string> $OehhDiscDate3) Return ChildSalesHistory objects filtered by the OehhDiscDate3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscdate3(string|array<string> $OehhDiscDate3) Return ChildSalesHistory objects filtered by the OehhDiscDate3 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscpct3(string|array<string> $OehhDiscPct3) Return ChildSalesHistory objects filtered by the OehhDiscPct3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscpct3(string|array<string> $OehhDiscPct3) Return ChildSalesHistory objects filtered by the OehhDiscPct3 column
 * @method     ChildSalesHistory[]|Collection findByOehhduedate3(string|array<string> $OehhDueDate3) Return ChildSalesHistory objects filtered by the OehhDueDate3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduedate3(string|array<string> $OehhDueDate3) Return ChildSalesHistory objects filtered by the OehhDueDate3 column
 * @method     ChildSalesHistory[]|Collection findByOehhdueamt3(string|array<string> $OehhDueAmt3) Return ChildSalesHistory objects filtered by the OehhDueAmt3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdueamt3(string|array<string> $OehhDueAmt3) Return ChildSalesHistory objects filtered by the OehhDueAmt3 column
 * @method     ChildSalesHistory[]|Collection findByOehhduepct3(string|array<string> $OehhDuePct3) Return ChildSalesHistory objects filtered by the OehhDuePct3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduepct3(string|array<string> $OehhDuePct3) Return ChildSalesHistory objects filtered by the OehhDuePct3 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscdate4(string|array<string> $OehhDiscDate4) Return ChildSalesHistory objects filtered by the OehhDiscDate4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscdate4(string|array<string> $OehhDiscDate4) Return ChildSalesHistory objects filtered by the OehhDiscDate4 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscpct4(string|array<string> $OehhDiscPct4) Return ChildSalesHistory objects filtered by the OehhDiscPct4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscpct4(string|array<string> $OehhDiscPct4) Return ChildSalesHistory objects filtered by the OehhDiscPct4 column
 * @method     ChildSalesHistory[]|Collection findByOehhduedate4(string|array<string> $OehhDueDate4) Return ChildSalesHistory objects filtered by the OehhDueDate4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduedate4(string|array<string> $OehhDueDate4) Return ChildSalesHistory objects filtered by the OehhDueDate4 column
 * @method     ChildSalesHistory[]|Collection findByOehhdueamt4(string|array<string> $OehhDueAmt4) Return ChildSalesHistory objects filtered by the OehhDueAmt4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdueamt4(string|array<string> $OehhDueAmt4) Return ChildSalesHistory objects filtered by the OehhDueAmt4 column
 * @method     ChildSalesHistory[]|Collection findByOehhduepct4(string|array<string> $OehhDuePct4) Return ChildSalesHistory objects filtered by the OehhDuePct4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduepct4(string|array<string> $OehhDuePct4) Return ChildSalesHistory objects filtered by the OehhDuePct4 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscdate5(string|array<string> $OehhDiscDate5) Return ChildSalesHistory objects filtered by the OehhDiscDate5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscdate5(string|array<string> $OehhDiscDate5) Return ChildSalesHistory objects filtered by the OehhDiscDate5 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscpct5(string|array<string> $OehhDiscPct5) Return ChildSalesHistory objects filtered by the OehhDiscPct5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscpct5(string|array<string> $OehhDiscPct5) Return ChildSalesHistory objects filtered by the OehhDiscPct5 column
 * @method     ChildSalesHistory[]|Collection findByOehhduedate5(string|array<string> $OehhDueDate5) Return ChildSalesHistory objects filtered by the OehhDueDate5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduedate5(string|array<string> $OehhDueDate5) Return ChildSalesHistory objects filtered by the OehhDueDate5 column
 * @method     ChildSalesHistory[]|Collection findByOehhdueamt5(string|array<string> $OehhDueAmt5) Return ChildSalesHistory objects filtered by the OehhDueAmt5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdueamt5(string|array<string> $OehhDueAmt5) Return ChildSalesHistory objects filtered by the OehhDueAmt5 column
 * @method     ChildSalesHistory[]|Collection findByOehhduepct5(string|array<string> $OehhDuePct5) Return ChildSalesHistory objects filtered by the OehhDuePct5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduepct5(string|array<string> $OehhDuePct5) Return ChildSalesHistory objects filtered by the OehhDuePct5 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscdate6(string|array<string> $OehhDiscDate6) Return ChildSalesHistory objects filtered by the OehhDiscDate6 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscdate6(string|array<string> $OehhDiscDate6) Return ChildSalesHistory objects filtered by the OehhDiscDate6 column
 * @method     ChildSalesHistory[]|Collection findByOehhdiscpct6(string|array<string> $OehhDiscPct6) Return ChildSalesHistory objects filtered by the OehhDiscPct6 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdiscpct6(string|array<string> $OehhDiscPct6) Return ChildSalesHistory objects filtered by the OehhDiscPct6 column
 * @method     ChildSalesHistory[]|Collection findByOehhduedate6(string|array<string> $OehhDueDate6) Return ChildSalesHistory objects filtered by the OehhDueDate6 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduedate6(string|array<string> $OehhDueDate6) Return ChildSalesHistory objects filtered by the OehhDueDate6 column
 * @method     ChildSalesHistory[]|Collection findByOehhdueamt6(string|array<string> $OehhDueAmt6) Return ChildSalesHistory objects filtered by the OehhDueAmt6 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhdueamt6(string|array<string> $OehhDueAmt6) Return ChildSalesHistory objects filtered by the OehhDueAmt6 column
 * @method     ChildSalesHistory[]|Collection findByOehhduepct6(string|array<string> $OehhDuePct6) Return ChildSalesHistory objects filtered by the OehhDuePct6 column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhduepct6(string|array<string> $OehhDuePct6) Return ChildSalesHistory objects filtered by the OehhDuePct6 column
 * @method     ChildSalesHistory[]|Collection findByOehhrefnbr(string|array<string> $OehhRefNbr) Return ChildSalesHistory objects filtered by the OehhRefNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhrefnbr(string|array<string> $OehhRefNbr) Return ChildSalesHistory objects filtered by the OehhRefNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhacprognbr(string|array<string> $OehhAcProgNbr) Return ChildSalesHistory objects filtered by the OehhAcProgNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhacprognbr(string|array<string> $OehhAcProgNbr) Return ChildSalesHistory objects filtered by the OehhAcProgNbr column
 * @method     ChildSalesHistory[]|Collection findByOehhacprogexpdate(string|array<string> $OehhAcProgExpDate) Return ChildSalesHistory objects filtered by the OehhAcProgExpDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByOehhacprogexpdate(string|array<string> $OehhAcProgExpDate) Return ChildSalesHistory objects filtered by the OehhAcProgExpDate column
 * @method     ChildSalesHistory[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesHistory objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesHistory objects filtered by the DateUpdtd column
 * @method     ChildSalesHistory[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesHistory objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesHistory objects filtered by the TimeUpdtd column
 * @method     ChildSalesHistory[]|Collection findByDummy(string|array<string> $dummy) Return ChildSalesHistory objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSalesHistory> findByDummy(string|array<string> $dummy) Return ChildSalesHistory objects filtered by the dummy column
 *
 * @method     ChildSalesHistory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSalesHistory> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SalesHistoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesHistoryQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesHistory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesHistoryQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesHistoryQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSalesHistoryQuery) {
            return $criteria;
        }
        $query = new ChildSalesHistoryQuery();
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
     * @return ChildSalesHistory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesHistoryTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSalesHistory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehhNbr, OehhYear, OehhStat, OehhHold, ArcuCustId, ArstShipId, OehhStName, OehhStLastName, OehhStFirstName, OehhStAdr1, OehhStAdr2, OehhStAdr3, OehhStCtry, OehhStCity, OehhStStat, OehhStZipCode, OehhCustPo, OehhOrdrDate, ArtmTermCd, ArtbShipVia, ArinInvNbr, OehhInvDate, OehhGLPd, ArspSalePer1, OehhSp1Pct, ArspSalePer2, OehhSp2Pct, ArspSalePer3, OehhSp3Pct, OehhCntrNbr, OehhWiBatch, OehhDropRelHold, OehhTaxSub, OehhNonTaxSub, OehhTaxTot, OehhFrtTot, OehhMiscTot, OehhOrdrTot, OehhCostTot, OehhSpCommLock, OehhTakenDate, OehhTakenTime, OehhPickDate, OehhPickTime, OehhPackDate, OehhPackTime, OehhVerifyDate, OehhVerifyTime, OehhCreditMemo, OehhBookedYn, IntbWhseOrig, OehhBtStat, OehhShipComp, OehhCwoFlag, OehhDivision, OehhTakenCode, OehhPickCode, OehhPackCode, OehhVerifyCode, OehhTotDisc, OehhEdiRefNbrQual, OehhUserCode1, OehhUserCode2, OehhUserCode3, OehhUserCode4, OehhExchCtry, OehhExchRate, OehhWghtTot, OehhWghtOride, OehhCcInfo, OehhBoxCount, OehhRqstDate, OehhCancDate, OehhCrntUser, OehhReleaseNbr, IntbWhse, OehhBordBuildDate, OehhDeptCode, OehhFrtInEntered, OehhDropShipEntered, OehhErFlag, OehhFrtIn, OehhDropShip, OehhMinOrder, OehhContractTerms, OehhDropShipBilled, OehhOrdTyp, OehhTrackNbr, OehhSource, OehhCcAprv, OehhPickFmatType, OehhInvcFmatType, OehhCashAmt, OehhCheckAmt, OehhCheckNbr, OehhDepositAmt, OehhDepositNbr, OehhCcAmt, OehhOTaxSub, OehhONonTaxSub, OehhOTaxTot, OehhOOrdrTot, OehhPickPrintDate, OehhPickPrintTime, OehhCont, OehhContTeleIntl, OehhContTeleNbr, OehhContTeleExt, OehhContFaxIntl, OehhContFaxNbr, OehhShipAcct, OehhChgDue, OehhAddlPricDisc, OehhAllShip, OehhQtyOrderAmt, OehhCreditApplied, OehhInvcPrintDate, OehhInvcPrintTime, OehhDiscFrt, OehhOrideShipComp, OehhContEmail, OehhManualFrt, OehhInternalFrt, OehhFrtCost, OehhRoute, OehhRouteSeq, OehhFrtTaxCode1, OehhFrtTaxAmt1, OehhFrtTaxCode2, OehhFrtTaxAmt2, OehhFrtTaxCode3, OehhFrtTaxAmt3, OehhFrtTaxCode4, OehhFrtTaxAmt4, OehhFrtTaxCode5, OehhFrtTaxAmt5, OehhEdi855Sent, OehhFrt3rdParty, OehhFob, OehhConfirmImagYn, OehhIndustConform, OehhCstkConsign, OehhLmDelayCapSent, OehhMfgId, OehhStoreId, OehhPickQueue, OehhArrvDate, OehhSurchgStat, OehhFrtGrup, OehhCommOride, OehhChrgSplt, OehhAcCcAprv, OehhOrigOrdrNbr, OehhPostDate, OehhDiscDate1, OehhDiscPct1, OehhDueDate1, OehhDueAmt1, OehhDuePct1, OehhDiscDate2, OehhDiscPct2, OehhDueDate2, OehhDueAmt2, OehhDuePct2, OehhDiscDate3, OehhDiscPct3, OehhDueDate3, OehhDueAmt3, OehhDuePct3, OehhDiscDate4, OehhDiscPct4, OehhDueDate4, OehhDueAmt4, OehhDuePct4, OehhDiscDate5, OehhDiscPct5, OehhDueDate5, OehhDueAmt5, OehhDuePct5, OehhDiscDate6, OehhDiscPct6, OehhDueDate6, OehhDueAmt6, OehhDuePct6, OehhRefNbr, OehhAcProgNbr, OehhAcProgExpDate, DateUpdtd, TimeUpdtd, dummy FROM so_head_hist WHERE OehhNbr = :p0';
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
            /** @var ChildSalesHistory $obj */
            $obj = new ChildSalesHistory();
            $obj->hydrate($row);
            SalesHistoryTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSalesHistory|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the OehhNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhnbr(1234); // WHERE OehhNbr = 1234
     * $query->filterByOehhnbr(array(12, 34)); // WHERE OehhNbr IN (12, 34)
     * $query->filterByOehhnbr(array('min' => 12)); // WHERE OehhNbr > 12
     * </code>
     *
     * @param mixed $oehhnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhnbr($oehhnbr = null, ?string $comparison = null)
    {
        if (is_array($oehhnbr)) {
            $useMinMax = false;
            if (isset($oehhnbr['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $oehhnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhnbr['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $oehhnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $oehhnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhYear column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhyear('fooValue');   // WHERE OehhYear = 'fooValue'
     * $query->filterByOehhyear('%fooValue%', Criteria::LIKE); // WHERE OehhYear LIKE '%fooValue%'
     * $query->filterByOehhyear(['foo', 'bar']); // WHERE OehhYear IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhyear The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhyear($oehhyear = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhyear)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHYEAR, $oehhyear, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstat('fooValue');   // WHERE OehhStat = 'fooValue'
     * $query->filterByOehhstat('%fooValue%', Criteria::LIKE); // WHERE OehhStat LIKE '%fooValue%'
     * $query->filterByOehhstat(['foo', 'bar']); // WHERE OehhStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstat($oehhstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTAT, $oehhstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhhold('fooValue');   // WHERE OehhHold = 'fooValue'
     * $query->filterByOehhhold('%fooValue%', Criteria::LIKE); // WHERE OehhHold LIKE '%fooValue%'
     * $query->filterByOehhhold(['foo', 'bar']); // WHERE OehhHold IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhhold The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhhold($oehhhold = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhhold)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHHOLD, $oehhhold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * $query->filterByArcucustid(['foo', 'bar']); // WHERE ArcuCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcucustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * $query->filterByArstshipid(['foo', 'bar']); // WHERE ArstShipId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstshipid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstname('fooValue');   // WHERE OehhStName = 'fooValue'
     * $query->filterByOehhstname('%fooValue%', Criteria::LIKE); // WHERE OehhStName LIKE '%fooValue%'
     * $query->filterByOehhstname(['foo', 'bar']); // WHERE OehhStName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstname($oehhstname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTNAME, $oehhstname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStLastName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstlastname('fooValue');   // WHERE OehhStLastName = 'fooValue'
     * $query->filterByOehhstlastname('%fooValue%', Criteria::LIKE); // WHERE OehhStLastName LIKE '%fooValue%'
     * $query->filterByOehhstlastname(['foo', 'bar']); // WHERE OehhStLastName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstlastname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstlastname($oehhstlastname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstlastname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTLASTNAME, $oehhstlastname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStFirstName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstfirstname('fooValue');   // WHERE OehhStFirstName = 'fooValue'
     * $query->filterByOehhstfirstname('%fooValue%', Criteria::LIKE); // WHERE OehhStFirstName LIKE '%fooValue%'
     * $query->filterByOehhstfirstname(['foo', 'bar']); // WHERE OehhStFirstName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstfirstname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstfirstname($oehhstfirstname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstfirstname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTFIRSTNAME, $oehhstfirstname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstadr1('fooValue');   // WHERE OehhStAdr1 = 'fooValue'
     * $query->filterByOehhstadr1('%fooValue%', Criteria::LIKE); // WHERE OehhStAdr1 LIKE '%fooValue%'
     * $query->filterByOehhstadr1(['foo', 'bar']); // WHERE OehhStAdr1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstadr1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstadr1($oehhstadr1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTADR1, $oehhstadr1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstadr2('fooValue');   // WHERE OehhStAdr2 = 'fooValue'
     * $query->filterByOehhstadr2('%fooValue%', Criteria::LIKE); // WHERE OehhStAdr2 LIKE '%fooValue%'
     * $query->filterByOehhstadr2(['foo', 'bar']); // WHERE OehhStAdr2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstadr2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstadr2($oehhstadr2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTADR2, $oehhstadr2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstadr3('fooValue');   // WHERE OehhStAdr3 = 'fooValue'
     * $query->filterByOehhstadr3('%fooValue%', Criteria::LIKE); // WHERE OehhStAdr3 LIKE '%fooValue%'
     * $query->filterByOehhstadr3(['foo', 'bar']); // WHERE OehhStAdr3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstadr3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstadr3($oehhstadr3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTADR3, $oehhstadr3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstctry('fooValue');   // WHERE OehhStCtry = 'fooValue'
     * $query->filterByOehhstctry('%fooValue%', Criteria::LIKE); // WHERE OehhStCtry LIKE '%fooValue%'
     * $query->filterByOehhstctry(['foo', 'bar']); // WHERE OehhStCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstctry($oehhstctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTCTRY, $oehhstctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStCity column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstcity('fooValue');   // WHERE OehhStCity = 'fooValue'
     * $query->filterByOehhstcity('%fooValue%', Criteria::LIKE); // WHERE OehhStCity LIKE '%fooValue%'
     * $query->filterByOehhstcity(['foo', 'bar']); // WHERE OehhStCity IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstcity The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstcity($oehhstcity = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstcity)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTCITY, $oehhstcity, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhststat('fooValue');   // WHERE OehhStStat = 'fooValue'
     * $query->filterByOehhststat('%fooValue%', Criteria::LIKE); // WHERE OehhStStat LIKE '%fooValue%'
     * $query->filterByOehhststat(['foo', 'bar']); // WHERE OehhStStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhststat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhststat($oehhststat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhststat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTSTAT, $oehhststat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstzipcode('fooValue');   // WHERE OehhStZipCode = 'fooValue'
     * $query->filterByOehhstzipcode('%fooValue%', Criteria::LIKE); // WHERE OehhStZipCode LIKE '%fooValue%'
     * $query->filterByOehhstzipcode(['foo', 'bar']); // WHERE OehhStZipCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstzipcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstzipcode($oehhstzipcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTZIPCODE, $oehhstzipcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcustpo('fooValue');   // WHERE OehhCustPo = 'fooValue'
     * $query->filterByOehhcustpo('%fooValue%', Criteria::LIKE); // WHERE OehhCustPo LIKE '%fooValue%'
     * $query->filterByOehhcustpo(['foo', 'bar']); // WHERE OehhCustPo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcustpo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcustpo($oehhcustpo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCUSTPO, $oehhcustpo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhOrdrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhordrdate('fooValue');   // WHERE OehhOrdrDate = 'fooValue'
     * $query->filterByOehhordrdate('%fooValue%', Criteria::LIKE); // WHERE OehhOrdrDate LIKE '%fooValue%'
     * $query->filterByOehhordrdate(['foo', 'bar']); // WHERE OehhOrdrDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhordrdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhordrdate($oehhordrdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORDRDATE, $oehhordrdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtmTermCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtermcd('fooValue');   // WHERE ArtmTermCd = 'fooValue'
     * $query->filterByArtmtermcd('%fooValue%', Criteria::LIKE); // WHERE ArtmTermCd LIKE '%fooValue%'
     * $query->filterByArtmtermcd(['foo', 'bar']); // WHERE ArtmTermCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artmtermcd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbShipVia column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbshipvia('fooValue');   // WHERE ArtbShipVia = 'fooValue'
     * $query->filterByArtbshipvia('%fooValue%', Criteria::LIKE); // WHERE ArtbShipVia LIKE '%fooValue%'
     * $query->filterByArtbshipvia(['foo', 'bar']); // WHERE ArtbShipVia IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbshipvia The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArinInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArininvnbr('fooValue');   // WHERE ArinInvNbr = 'fooValue'
     * $query->filterByArininvnbr('%fooValue%', Criteria::LIKE); // WHERE ArinInvNbr LIKE '%fooValue%'
     * $query->filterByArininvnbr(['foo', 'bar']); // WHERE ArinInvNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arininvnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArininvnbr($arininvnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arininvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_ARININVNBR, $arininvnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhInvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinvdate('fooValue');   // WHERE OehhInvDate = 'fooValue'
     * $query->filterByOehhinvdate('%fooValue%', Criteria::LIKE); // WHERE OehhInvDate LIKE '%fooValue%'
     * $query->filterByOehhinvdate(['foo', 'bar']); // WHERE OehhInvDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhinvdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhinvdate($oehhinvdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINVDATE, $oehhinvdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhGLPd column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhglpd(1234); // WHERE OehhGLPd = 1234
     * $query->filterByOehhglpd(array(12, 34)); // WHERE OehhGLPd IN (12, 34)
     * $query->filterByOehhglpd(array('min' => 12)); // WHERE OehhGLPd > 12
     * </code>
     *
     * @param mixed $oehhglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhglpd($oehhglpd = null, ?string $comparison = null)
    {
        if (is_array($oehhglpd)) {
            $useMinMax = false;
            if (isset($oehhglpd['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHGLPD, $oehhglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhglpd['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHGLPD, $oehhglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHGLPD, $oehhglpd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * $query->filterByArspsaleper1(['foo', 'bar']); // WHERE ArspSalePer1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arspsaleper1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhSp1Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhsp1pct(1234); // WHERE OehhSp1Pct = 1234
     * $query->filterByOehhsp1pct(array(12, 34)); // WHERE OehhSp1Pct IN (12, 34)
     * $query->filterByOehhsp1pct(array('min' => 12)); // WHERE OehhSp1Pct > 12
     * </code>
     *
     * @param mixed $oehhsp1pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhsp1pct($oehhsp1pct = null, ?string $comparison = null)
    {
        if (is_array($oehhsp1pct)) {
            $useMinMax = false;
            if (isset($oehhsp1pct['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP1PCT, $oehhsp1pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhsp1pct['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP1PCT, $oehhsp1pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP1PCT, $oehhsp1pct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArspSalePer2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper2('fooValue');   // WHERE ArspSalePer2 = 'fooValue'
     * $query->filterByArspsaleper2('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer2 LIKE '%fooValue%'
     * $query->filterByArspsaleper2(['foo', 'bar']); // WHERE ArspSalePer2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arspsaleper2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhSp2Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhsp2pct(1234); // WHERE OehhSp2Pct = 1234
     * $query->filterByOehhsp2pct(array(12, 34)); // WHERE OehhSp2Pct IN (12, 34)
     * $query->filterByOehhsp2pct(array('min' => 12)); // WHERE OehhSp2Pct > 12
     * </code>
     *
     * @param mixed $oehhsp2pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhsp2pct($oehhsp2pct = null, ?string $comparison = null)
    {
        if (is_array($oehhsp2pct)) {
            $useMinMax = false;
            if (isset($oehhsp2pct['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP2PCT, $oehhsp2pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhsp2pct['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP2PCT, $oehhsp2pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP2PCT, $oehhsp2pct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArspSalePer3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE ArspSalePer3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer3 LIKE '%fooValue%'
     * $query->filterByArspsaleper3(['foo', 'bar']); // WHERE ArspSalePer3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arspsaleper3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhSp3Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhsp3pct(1234); // WHERE OehhSp3Pct = 1234
     * $query->filterByOehhsp3pct(array(12, 34)); // WHERE OehhSp3Pct IN (12, 34)
     * $query->filterByOehhsp3pct(array('min' => 12)); // WHERE OehhSp3Pct > 12
     * </code>
     *
     * @param mixed $oehhsp3pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhsp3pct($oehhsp3pct = null, ?string $comparison = null)
    {
        if (is_array($oehhsp3pct)) {
            $useMinMax = false;
            if (isset($oehhsp3pct['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP3PCT, $oehhsp3pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhsp3pct['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP3PCT, $oehhsp3pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP3PCT, $oehhsp3pct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCntrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcntrnbr(1234); // WHERE OehhCntrNbr = 1234
     * $query->filterByOehhcntrnbr(array(12, 34)); // WHERE OehhCntrNbr IN (12, 34)
     * $query->filterByOehhcntrnbr(array('min' => 12)); // WHERE OehhCntrNbr > 12
     * </code>
     *
     * @param mixed $oehhcntrnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcntrnbr($oehhcntrnbr = null, ?string $comparison = null)
    {
        if (is_array($oehhcntrnbr)) {
            $useMinMax = false;
            if (isset($oehhcntrnbr['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCNTRNBR, $oehhcntrnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcntrnbr['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCNTRNBR, $oehhcntrnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCNTRNBR, $oehhcntrnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhWiBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhwibatch(1234); // WHERE OehhWiBatch = 1234
     * $query->filterByOehhwibatch(array(12, 34)); // WHERE OehhWiBatch IN (12, 34)
     * $query->filterByOehhwibatch(array('min' => 12)); // WHERE OehhWiBatch > 12
     * </code>
     *
     * @param mixed $oehhwibatch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhwibatch($oehhwibatch = null, ?string $comparison = null)
    {
        if (is_array($oehhwibatch)) {
            $useMinMax = false;
            if (isset($oehhwibatch['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWIBATCH, $oehhwibatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhwibatch['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWIBATCH, $oehhwibatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWIBATCH, $oehhwibatch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDropRelHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdroprelhold('fooValue');   // WHERE OehhDropRelHold = 'fooValue'
     * $query->filterByOehhdroprelhold('%fooValue%', Criteria::LIKE); // WHERE OehhDropRelHold LIKE '%fooValue%'
     * $query->filterByOehhdroprelhold(['foo', 'bar']); // WHERE OehhDropRelHold IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdroprelhold The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdroprelhold($oehhdroprelhold = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdroprelhold)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPRELHOLD, $oehhdroprelhold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtaxsub(1234); // WHERE OehhTaxSub = 1234
     * $query->filterByOehhtaxsub(array(12, 34)); // WHERE OehhTaxSub IN (12, 34)
     * $query->filterByOehhtaxsub(array('min' => 12)); // WHERE OehhTaxSub > 12
     * </code>
     *
     * @param mixed $oehhtaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhtaxsub($oehhtaxsub = null, ?string $comparison = null)
    {
        if (is_array($oehhtaxsub)) {
            $useMinMax = false;
            if (isset($oehhtaxsub['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAXSUB, $oehhtaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhtaxsub['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAXSUB, $oehhtaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAXSUB, $oehhtaxsub, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhNonTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhnontaxsub(1234); // WHERE OehhNonTaxSub = 1234
     * $query->filterByOehhnontaxsub(array(12, 34)); // WHERE OehhNonTaxSub IN (12, 34)
     * $query->filterByOehhnontaxsub(array('min' => 12)); // WHERE OehhNonTaxSub > 12
     * </code>
     *
     * @param mixed $oehhnontaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhnontaxsub($oehhnontaxsub = null, ?string $comparison = null)
    {
        if (is_array($oehhnontaxsub)) {
            $useMinMax = false;
            if (isset($oehhnontaxsub['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNONTAXSUB, $oehhnontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhnontaxsub['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNONTAXSUB, $oehhnontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNONTAXSUB, $oehhnontaxsub, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhTaxTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtaxtot(1234); // WHERE OehhTaxTot = 1234
     * $query->filterByOehhtaxtot(array(12, 34)); // WHERE OehhTaxTot IN (12, 34)
     * $query->filterByOehhtaxtot(array('min' => 12)); // WHERE OehhTaxTot > 12
     * </code>
     *
     * @param mixed $oehhtaxtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhtaxtot($oehhtaxtot = null, ?string $comparison = null)
    {
        if (is_array($oehhtaxtot)) {
            $useMinMax = false;
            if (isset($oehhtaxtot['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAXTOT, $oehhtaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhtaxtot['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAXTOT, $oehhtaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAXTOT, $oehhtaxtot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttot(1234); // WHERE OehhFrtTot = 1234
     * $query->filterByOehhfrttot(array(12, 34)); // WHERE OehhFrtTot IN (12, 34)
     * $query->filterByOehhfrttot(array('min' => 12)); // WHERE OehhFrtTot > 12
     * </code>
     *
     * @param mixed $oehhfrttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttot($oehhfrttot = null, ?string $comparison = null)
    {
        if (is_array($oehhfrttot)) {
            $useMinMax = false;
            if (isset($oehhfrttot['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTOT, $oehhfrttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttot['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTOT, $oehhfrttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTOT, $oehhfrttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhMiscTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhmisctot(1234); // WHERE OehhMiscTot = 1234
     * $query->filterByOehhmisctot(array(12, 34)); // WHERE OehhMiscTot IN (12, 34)
     * $query->filterByOehhmisctot(array('min' => 12)); // WHERE OehhMiscTot > 12
     * </code>
     *
     * @param mixed $oehhmisctot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhmisctot($oehhmisctot = null, ?string $comparison = null)
    {
        if (is_array($oehhmisctot)) {
            $useMinMax = false;
            if (isset($oehhmisctot['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMISCTOT, $oehhmisctot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhmisctot['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMISCTOT, $oehhmisctot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMISCTOT, $oehhmisctot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhOrdrTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhordrtot(1234); // WHERE OehhOrdrTot = 1234
     * $query->filterByOehhordrtot(array(12, 34)); // WHERE OehhOrdrTot IN (12, 34)
     * $query->filterByOehhordrtot(array('min' => 12)); // WHERE OehhOrdrTot > 12
     * </code>
     *
     * @param mixed $oehhordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhordrtot($oehhordrtot = null, ?string $comparison = null)
    {
        if (is_array($oehhordrtot)) {
            $useMinMax = false;
            if (isset($oehhordrtot['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORDRTOT, $oehhordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhordrtot['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORDRTOT, $oehhordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORDRTOT, $oehhordrtot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcosttot(1234); // WHERE OehhCostTot = 1234
     * $query->filterByOehhcosttot(array(12, 34)); // WHERE OehhCostTot IN (12, 34)
     * $query->filterByOehhcosttot(array('min' => 12)); // WHERE OehhCostTot > 12
     * </code>
     *
     * @param mixed $oehhcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcosttot($oehhcosttot = null, ?string $comparison = null)
    {
        if (is_array($oehhcosttot)) {
            $useMinMax = false;
            if (isset($oehhcosttot['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCOSTTOT, $oehhcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcosttot['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCOSTTOT, $oehhcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCOSTTOT, $oehhcosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhSpCommLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhspcommlock('fooValue');   // WHERE OehhSpCommLock = 'fooValue'
     * $query->filterByOehhspcommlock('%fooValue%', Criteria::LIKE); // WHERE OehhSpCommLock LIKE '%fooValue%'
     * $query->filterByOehhspcommlock(['foo', 'bar']); // WHERE OehhSpCommLock IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhspcommlock The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhspcommlock($oehhspcommlock = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhspcommlock)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSPCOMMLOCK, $oehhspcommlock, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhTakenDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtakendate('fooValue');   // WHERE OehhTakenDate = 'fooValue'
     * $query->filterByOehhtakendate('%fooValue%', Criteria::LIKE); // WHERE OehhTakenDate LIKE '%fooValue%'
     * $query->filterByOehhtakendate(['foo', 'bar']); // WHERE OehhTakenDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhtakendate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhtakendate($oehhtakendate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakendate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAKENDATE, $oehhtakendate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhTakenTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtakentime('fooValue');   // WHERE OehhTakenTime = 'fooValue'
     * $query->filterByOehhtakentime('%fooValue%', Criteria::LIKE); // WHERE OehhTakenTime LIKE '%fooValue%'
     * $query->filterByOehhtakentime(['foo', 'bar']); // WHERE OehhTakenTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhtakentime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhtakentime($oehhtakentime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakentime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAKENTIME, $oehhtakentime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPickDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickdate('fooValue');   // WHERE OehhPickDate = 'fooValue'
     * $query->filterByOehhpickdate('%fooValue%', Criteria::LIKE); // WHERE OehhPickDate LIKE '%fooValue%'
     * $query->filterByOehhpickdate(['foo', 'bar']); // WHERE OehhPickDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpickdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpickdate($oehhpickdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKDATE, $oehhpickdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPickTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpicktime('fooValue');   // WHERE OehhPickTime = 'fooValue'
     * $query->filterByOehhpicktime('%fooValue%', Criteria::LIKE); // WHERE OehhPickTime LIKE '%fooValue%'
     * $query->filterByOehhpicktime(['foo', 'bar']); // WHERE OehhPickTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpicktime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpicktime($oehhpicktime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpicktime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKTIME, $oehhpicktime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPackDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpackdate('fooValue');   // WHERE OehhPackDate = 'fooValue'
     * $query->filterByOehhpackdate('%fooValue%', Criteria::LIKE); // WHERE OehhPackDate LIKE '%fooValue%'
     * $query->filterByOehhpackdate(['foo', 'bar']); // WHERE OehhPackDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpackdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpackdate($oehhpackdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpackdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPACKDATE, $oehhpackdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPackTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpacktime('fooValue');   // WHERE OehhPackTime = 'fooValue'
     * $query->filterByOehhpacktime('%fooValue%', Criteria::LIKE); // WHERE OehhPackTime LIKE '%fooValue%'
     * $query->filterByOehhpacktime(['foo', 'bar']); // WHERE OehhPackTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpacktime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpacktime($oehhpacktime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpacktime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPACKTIME, $oehhpacktime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhVerifyDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhverifydate('fooValue');   // WHERE OehhVerifyDate = 'fooValue'
     * $query->filterByOehhverifydate('%fooValue%', Criteria::LIKE); // WHERE OehhVerifyDate LIKE '%fooValue%'
     * $query->filterByOehhverifydate(['foo', 'bar']); // WHERE OehhVerifyDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhverifydate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhverifydate($oehhverifydate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifydate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHVERIFYDATE, $oehhverifydate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhVerifyTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhverifytime('fooValue');   // WHERE OehhVerifyTime = 'fooValue'
     * $query->filterByOehhverifytime('%fooValue%', Criteria::LIKE); // WHERE OehhVerifyTime LIKE '%fooValue%'
     * $query->filterByOehhverifytime(['foo', 'bar']); // WHERE OehhVerifyTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhverifytime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhverifytime($oehhverifytime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifytime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHVERIFYTIME, $oehhverifytime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCreditMemo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcreditmemo('fooValue');   // WHERE OehhCreditMemo = 'fooValue'
     * $query->filterByOehhcreditmemo('%fooValue%', Criteria::LIKE); // WHERE OehhCreditMemo LIKE '%fooValue%'
     * $query->filterByOehhcreditmemo(['foo', 'bar']); // WHERE OehhCreditMemo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcreditmemo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcreditmemo($oehhcreditmemo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcreditmemo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCREDITMEMO, $oehhcreditmemo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhBookedYn column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhbookedyn('fooValue');   // WHERE OehhBookedYn = 'fooValue'
     * $query->filterByOehhbookedyn('%fooValue%', Criteria::LIKE); // WHERE OehhBookedYn LIKE '%fooValue%'
     * $query->filterByOehhbookedyn(['foo', 'bar']); // WHERE OehhBookedYn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhbookedyn The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhbookedyn($oehhbookedyn = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbookedyn)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBOOKEDYN, $oehhbookedyn, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseOrig column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseorig('fooValue');   // WHERE IntbWhseOrig = 'fooValue'
     * $query->filterByIntbwhseorig('%fooValue%', Criteria::LIKE); // WHERE IntbWhseOrig LIKE '%fooValue%'
     * $query->filterByIntbwhseorig(['foo', 'bar']); // WHERE IntbWhseOrig IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseorig The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseorig($intbwhseorig = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseorig)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_INTBWHSEORIG, $intbwhseorig, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhBtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhbtstat('fooValue');   // WHERE OehhBtStat = 'fooValue'
     * $query->filterByOehhbtstat('%fooValue%', Criteria::LIKE); // WHERE OehhBtStat LIKE '%fooValue%'
     * $query->filterByOehhbtstat(['foo', 'bar']); // WHERE OehhBtStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhbtstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhbtstat($oehhbtstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbtstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBTSTAT, $oehhbtstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhshipcomp('fooValue');   // WHERE OehhShipComp = 'fooValue'
     * $query->filterByOehhshipcomp('%fooValue%', Criteria::LIKE); // WHERE OehhShipComp LIKE '%fooValue%'
     * $query->filterByOehhshipcomp(['foo', 'bar']); // WHERE OehhShipComp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhshipcomp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhshipcomp($oehhshipcomp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSHIPCOMP, $oehhshipcomp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCwoFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcwoflag('fooValue');   // WHERE OehhCwoFlag = 'fooValue'
     * $query->filterByOehhcwoflag('%fooValue%', Criteria::LIKE); // WHERE OehhCwoFlag LIKE '%fooValue%'
     * $query->filterByOehhcwoflag(['foo', 'bar']); // WHERE OehhCwoFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcwoflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcwoflag($oehhcwoflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcwoflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCWOFLAG, $oehhcwoflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDivision column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdivision('fooValue');   // WHERE OehhDivision = 'fooValue'
     * $query->filterByOehhdivision('%fooValue%', Criteria::LIKE); // WHERE OehhDivision LIKE '%fooValue%'
     * $query->filterByOehhdivision(['foo', 'bar']); // WHERE OehhDivision IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdivision The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdivision($oehhdivision = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdivision)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDIVISION, $oehhdivision, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhTakenCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtakencode('fooValue');   // WHERE OehhTakenCode = 'fooValue'
     * $query->filterByOehhtakencode('%fooValue%', Criteria::LIKE); // WHERE OehhTakenCode LIKE '%fooValue%'
     * $query->filterByOehhtakencode(['foo', 'bar']); // WHERE OehhTakenCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhtakencode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhtakencode($oehhtakencode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakencode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAKENCODE, $oehhtakencode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPickCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickcode('fooValue');   // WHERE OehhPickCode = 'fooValue'
     * $query->filterByOehhpickcode('%fooValue%', Criteria::LIKE); // WHERE OehhPickCode LIKE '%fooValue%'
     * $query->filterByOehhpickcode(['foo', 'bar']); // WHERE OehhPickCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpickcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpickcode($oehhpickcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKCODE, $oehhpickcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPackCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpackcode('fooValue');   // WHERE OehhPackCode = 'fooValue'
     * $query->filterByOehhpackcode('%fooValue%', Criteria::LIKE); // WHERE OehhPackCode LIKE '%fooValue%'
     * $query->filterByOehhpackcode(['foo', 'bar']); // WHERE OehhPackCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpackcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpackcode($oehhpackcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpackcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPACKCODE, $oehhpackcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhVerifyCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhverifycode('fooValue');   // WHERE OehhVerifyCode = 'fooValue'
     * $query->filterByOehhverifycode('%fooValue%', Criteria::LIKE); // WHERE OehhVerifyCode LIKE '%fooValue%'
     * $query->filterByOehhverifycode(['foo', 'bar']); // WHERE OehhVerifyCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhverifycode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhverifycode($oehhverifycode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifycode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHVERIFYCODE, $oehhverifycode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhTotDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtotdisc(1234); // WHERE OehhTotDisc = 1234
     * $query->filterByOehhtotdisc(array(12, 34)); // WHERE OehhTotDisc IN (12, 34)
     * $query->filterByOehhtotdisc(array('min' => 12)); // WHERE OehhTotDisc > 12
     * </code>
     *
     * @param mixed $oehhtotdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhtotdisc($oehhtotdisc = null, ?string $comparison = null)
    {
        if (is_array($oehhtotdisc)) {
            $useMinMax = false;
            if (isset($oehhtotdisc['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTOTDISC, $oehhtotdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhtotdisc['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTOTDISC, $oehhtotdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTOTDISC, $oehhtotdisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhEdiRefNbrQual column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhedirefnbrqual('fooValue');   // WHERE OehhEdiRefNbrQual = 'fooValue'
     * $query->filterByOehhedirefnbrqual('%fooValue%', Criteria::LIKE); // WHERE OehhEdiRefNbrQual LIKE '%fooValue%'
     * $query->filterByOehhedirefnbrqual(['foo', 'bar']); // WHERE OehhEdiRefNbrQual IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhedirefnbrqual The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhedirefnbrqual($oehhedirefnbrqual = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhedirefnbrqual)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL, $oehhedirefnbrqual, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhUserCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhusercode1('fooValue');   // WHERE OehhUserCode1 = 'fooValue'
     * $query->filterByOehhusercode1('%fooValue%', Criteria::LIKE); // WHERE OehhUserCode1 LIKE '%fooValue%'
     * $query->filterByOehhusercode1(['foo', 'bar']); // WHERE OehhUserCode1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhusercode1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhusercode1($oehhusercode1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHUSERCODE1, $oehhusercode1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhUserCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhusercode2('fooValue');   // WHERE OehhUserCode2 = 'fooValue'
     * $query->filterByOehhusercode2('%fooValue%', Criteria::LIKE); // WHERE OehhUserCode2 LIKE '%fooValue%'
     * $query->filterByOehhusercode2(['foo', 'bar']); // WHERE OehhUserCode2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhusercode2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhusercode2($oehhusercode2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHUSERCODE2, $oehhusercode2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhUserCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhusercode3('fooValue');   // WHERE OehhUserCode3 = 'fooValue'
     * $query->filterByOehhusercode3('%fooValue%', Criteria::LIKE); // WHERE OehhUserCode3 LIKE '%fooValue%'
     * $query->filterByOehhusercode3(['foo', 'bar']); // WHERE OehhUserCode3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhusercode3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhusercode3($oehhusercode3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHUSERCODE3, $oehhusercode3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhUserCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhusercode4('fooValue');   // WHERE OehhUserCode4 = 'fooValue'
     * $query->filterByOehhusercode4('%fooValue%', Criteria::LIKE); // WHERE OehhUserCode4 LIKE '%fooValue%'
     * $query->filterByOehhusercode4(['foo', 'bar']); // WHERE OehhUserCode4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhusercode4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhusercode4($oehhusercode4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHUSERCODE4, $oehhusercode4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhexchctry('fooValue');   // WHERE OehhExchCtry = 'fooValue'
     * $query->filterByOehhexchctry('%fooValue%', Criteria::LIKE); // WHERE OehhExchCtry LIKE '%fooValue%'
     * $query->filterByOehhexchctry(['foo', 'bar']); // WHERE OehhExchCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhexchctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhexchctry($oehhexchctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEXCHCTRY, $oehhexchctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhExchRate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhexchrate(1234); // WHERE OehhExchRate = 1234
     * $query->filterByOehhexchrate(array(12, 34)); // WHERE OehhExchRate IN (12, 34)
     * $query->filterByOehhexchrate(array('min' => 12)); // WHERE OehhExchRate > 12
     * </code>
     *
     * @param mixed $oehhexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhexchrate($oehhexchrate = null, ?string $comparison = null)
    {
        if (is_array($oehhexchrate)) {
            $useMinMax = false;
            if (isset($oehhexchrate['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEXCHRATE, $oehhexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhexchrate['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEXCHRATE, $oehhexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEXCHRATE, $oehhexchrate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhWghtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhwghttot(1234); // WHERE OehhWghtTot = 1234
     * $query->filterByOehhwghttot(array(12, 34)); // WHERE OehhWghtTot IN (12, 34)
     * $query->filterByOehhwghttot(array('min' => 12)); // WHERE OehhWghtTot > 12
     * </code>
     *
     * @param mixed $oehhwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhwghttot($oehhwghttot = null, ?string $comparison = null)
    {
        if (is_array($oehhwghttot)) {
            $useMinMax = false;
            if (isset($oehhwghttot['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWGHTTOT, $oehhwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhwghttot['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWGHTTOT, $oehhwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWGHTTOT, $oehhwghttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhWghtOride column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhwghtoride('fooValue');   // WHERE OehhWghtOride = 'fooValue'
     * $query->filterByOehhwghtoride('%fooValue%', Criteria::LIKE); // WHERE OehhWghtOride LIKE '%fooValue%'
     * $query->filterByOehhwghtoride(['foo', 'bar']); // WHERE OehhWghtOride IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhwghtoride The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhwghtoride($oehhwghtoride = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhwghtoride)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWGHTORIDE, $oehhwghtoride, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCcInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhccinfo('fooValue');   // WHERE OehhCcInfo = 'fooValue'
     * $query->filterByOehhccinfo('%fooValue%', Criteria::LIKE); // WHERE OehhCcInfo LIKE '%fooValue%'
     * $query->filterByOehhccinfo(['foo', 'bar']); // WHERE OehhCcInfo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhccinfo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhccinfo($oehhccinfo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhccinfo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCCINFO, $oehhccinfo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhBoxCount column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhboxcount(1234); // WHERE OehhBoxCount = 1234
     * $query->filterByOehhboxcount(array(12, 34)); // WHERE OehhBoxCount IN (12, 34)
     * $query->filterByOehhboxcount(array('min' => 12)); // WHERE OehhBoxCount > 12
     * </code>
     *
     * @param mixed $oehhboxcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhboxcount($oehhboxcount = null, ?string $comparison = null)
    {
        if (is_array($oehhboxcount)) {
            $useMinMax = false;
            if (isset($oehhboxcount['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBOXCOUNT, $oehhboxcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhboxcount['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBOXCOUNT, $oehhboxcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBOXCOUNT, $oehhboxcount, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhrqstdate('fooValue');   // WHERE OehhRqstDate = 'fooValue'
     * $query->filterByOehhrqstdate('%fooValue%', Criteria::LIKE); // WHERE OehhRqstDate LIKE '%fooValue%'
     * $query->filterByOehhrqstdate(['foo', 'bar']); // WHERE OehhRqstDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhrqstdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhrqstdate($oehhrqstdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHRQSTDATE, $oehhrqstdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcancdate('fooValue');   // WHERE OehhCancDate = 'fooValue'
     * $query->filterByOehhcancdate('%fooValue%', Criteria::LIKE); // WHERE OehhCancDate LIKE '%fooValue%'
     * $query->filterByOehhcancdate(['foo', 'bar']); // WHERE OehhCancDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcancdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcancdate($oehhcancdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCANCDATE, $oehhcancdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCrntUser column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcrntuser('fooValue');   // WHERE OehhCrntUser = 'fooValue'
     * $query->filterByOehhcrntuser('%fooValue%', Criteria::LIKE); // WHERE OehhCrntUser LIKE '%fooValue%'
     * $query->filterByOehhcrntuser(['foo', 'bar']); // WHERE OehhCrntUser IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcrntuser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcrntuser($oehhcrntuser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcrntuser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCRNTUSER, $oehhcrntuser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhReleaseNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhreleasenbr('fooValue');   // WHERE OehhReleaseNbr = 'fooValue'
     * $query->filterByOehhreleasenbr('%fooValue%', Criteria::LIKE); // WHERE OehhReleaseNbr LIKE '%fooValue%'
     * $query->filterByOehhreleasenbr(['foo', 'bar']); // WHERE OehhReleaseNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhreleasenbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhreleasenbr($oehhreleasenbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhreleasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHRELEASENBR, $oehhreleasenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * $query->filterByIntbwhse(['foo', 'bar']); // WHERE IntbWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhBordBuildDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhbordbuilddate('fooValue');   // WHERE OehhBordBuildDate = 'fooValue'
     * $query->filterByOehhbordbuilddate('%fooValue%', Criteria::LIKE); // WHERE OehhBordBuildDate LIKE '%fooValue%'
     * $query->filterByOehhbordbuilddate(['foo', 'bar']); // WHERE OehhBordBuildDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhbordbuilddate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhbordbuilddate($oehhbordbuilddate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbordbuilddate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBORDBUILDDATE, $oehhbordbuilddate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDeptCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdeptcode('fooValue');   // WHERE OehhDeptCode = 'fooValue'
     * $query->filterByOehhdeptcode('%fooValue%', Criteria::LIKE); // WHERE OehhDeptCode LIKE '%fooValue%'
     * $query->filterByOehhdeptcode(['foo', 'bar']); // WHERE OehhDeptCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdeptcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdeptcode($oehhdeptcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdeptcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDEPTCODE, $oehhdeptcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtInEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrtinentered('fooValue');   // WHERE OehhFrtInEntered = 'fooValue'
     * $query->filterByOehhfrtinentered('%fooValue%', Criteria::LIKE); // WHERE OehhFrtInEntered LIKE '%fooValue%'
     * $query->filterByOehhfrtinentered(['foo', 'bar']); // WHERE OehhFrtInEntered IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhfrtinentered The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrtinentered($oehhfrtinentered = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTINENTERED, $oehhfrtinentered, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDropShipEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdropshipentered('fooValue');   // WHERE OehhDropShipEntered = 'fooValue'
     * $query->filterByOehhdropshipentered('%fooValue%', Criteria::LIKE); // WHERE OehhDropShipEntered LIKE '%fooValue%'
     * $query->filterByOehhdropshipentered(['foo', 'bar']); // WHERE OehhDropShipEntered IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdropshipentered The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdropshipentered($oehhdropshipentered = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdropshipentered)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED, $oehhdropshipentered, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhErFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOehherflag('fooValue');   // WHERE OehhErFlag = 'fooValue'
     * $query->filterByOehherflag('%fooValue%', Criteria::LIKE); // WHERE OehhErFlag LIKE '%fooValue%'
     * $query->filterByOehherflag(['foo', 'bar']); // WHERE OehhErFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehherflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehherflag($oehherflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehherflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHERFLAG, $oehherflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrtin(1234); // WHERE OehhFrtIn = 1234
     * $query->filterByOehhfrtin(array(12, 34)); // WHERE OehhFrtIn IN (12, 34)
     * $query->filterByOehhfrtin(array('min' => 12)); // WHERE OehhFrtIn > 12
     * </code>
     *
     * @param mixed $oehhfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrtin($oehhfrtin = null, ?string $comparison = null)
    {
        if (is_array($oehhfrtin)) {
            $useMinMax = false;
            if (isset($oehhfrtin['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTIN, $oehhfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrtin['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTIN, $oehhfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTIN, $oehhfrtin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDropShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdropship(1234); // WHERE OehhDropShip = 1234
     * $query->filterByOehhdropship(array(12, 34)); // WHERE OehhDropShip IN (12, 34)
     * $query->filterByOehhdropship(array('min' => 12)); // WHERE OehhDropShip > 12
     * </code>
     *
     * @param mixed $oehhdropship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdropship($oehhdropship = null, ?string $comparison = null)
    {
        if (is_array($oehhdropship)) {
            $useMinMax = false;
            if (isset($oehhdropship['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPSHIP, $oehhdropship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdropship['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPSHIP, $oehhdropship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPSHIP, $oehhdropship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhMinOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhminorder(1234); // WHERE OehhMinOrder = 1234
     * $query->filterByOehhminorder(array(12, 34)); // WHERE OehhMinOrder IN (12, 34)
     * $query->filterByOehhminorder(array('min' => 12)); // WHERE OehhMinOrder > 12
     * </code>
     *
     * @param mixed $oehhminorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhminorder($oehhminorder = null, ?string $comparison = null)
    {
        if (is_array($oehhminorder)) {
            $useMinMax = false;
            if (isset($oehhminorder['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMINORDER, $oehhminorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhminorder['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMINORDER, $oehhminorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMINORDER, $oehhminorder, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhContractTerms column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontractterms('fooValue');   // WHERE OehhContractTerms = 'fooValue'
     * $query->filterByOehhcontractterms('%fooValue%', Criteria::LIKE); // WHERE OehhContractTerms LIKE '%fooValue%'
     * $query->filterByOehhcontractterms(['foo', 'bar']); // WHERE OehhContractTerms IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcontractterms The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcontractterms($oehhcontractterms = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontractterms)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTRACTTERMS, $oehhcontractterms, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDropShipBilled column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdropshipbilled('fooValue');   // WHERE OehhDropShipBilled = 'fooValue'
     * $query->filterByOehhdropshipbilled('%fooValue%', Criteria::LIKE); // WHERE OehhDropShipBilled LIKE '%fooValue%'
     * $query->filterByOehhdropshipbilled(['foo', 'bar']); // WHERE OehhDropShipBilled IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdropshipbilled The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdropshipbilled($oehhdropshipbilled = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdropshipbilled)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED, $oehhdropshipbilled, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhOrdTyp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhordtyp('fooValue');   // WHERE OehhOrdTyp = 'fooValue'
     * $query->filterByOehhordtyp('%fooValue%', Criteria::LIKE); // WHERE OehhOrdTyp LIKE '%fooValue%'
     * $query->filterByOehhordtyp(['foo', 'bar']); // WHERE OehhOrdTyp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhordtyp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhordtyp($oehhordtyp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhordtyp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORDTYP, $oehhordtyp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhTrackNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtracknbr('fooValue');   // WHERE OehhTrackNbr = 'fooValue'
     * $query->filterByOehhtracknbr('%fooValue%', Criteria::LIKE); // WHERE OehhTrackNbr LIKE '%fooValue%'
     * $query->filterByOehhtracknbr(['foo', 'bar']); // WHERE OehhTrackNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhtracknbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhtracknbr($oehhtracknbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTRACKNBR, $oehhtracknbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhSource column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhsource('fooValue');   // WHERE OehhSource = 'fooValue'
     * $query->filterByOehhsource('%fooValue%', Criteria::LIKE); // WHERE OehhSource LIKE '%fooValue%'
     * $query->filterByOehhsource(['foo', 'bar']); // WHERE OehhSource IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhsource The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhsource($oehhsource = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhsource)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSOURCE, $oehhsource, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCcAprv column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhccaprv('fooValue');   // WHERE OehhCcAprv = 'fooValue'
     * $query->filterByOehhccaprv('%fooValue%', Criteria::LIKE); // WHERE OehhCcAprv LIKE '%fooValue%'
     * $query->filterByOehhccaprv(['foo', 'bar']); // WHERE OehhCcAprv IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhccaprv The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhccaprv($oehhccaprv = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCCAPRV, $oehhccaprv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPickFmatType column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickfmattype('fooValue');   // WHERE OehhPickFmatType = 'fooValue'
     * $query->filterByOehhpickfmattype('%fooValue%', Criteria::LIKE); // WHERE OehhPickFmatType LIKE '%fooValue%'
     * $query->filterByOehhpickfmattype(['foo', 'bar']); // WHERE OehhPickFmatType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpickfmattype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpickfmattype($oehhpickfmattype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKFMATTYPE, $oehhpickfmattype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhInvcFmatType column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinvcfmattype('fooValue');   // WHERE OehhInvcFmatType = 'fooValue'
     * $query->filterByOehhinvcfmattype('%fooValue%', Criteria::LIKE); // WHERE OehhInvcFmatType LIKE '%fooValue%'
     * $query->filterByOehhinvcfmattype(['foo', 'bar']); // WHERE OehhInvcFmatType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhinvcfmattype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhinvcfmattype($oehhinvcfmattype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINVCFMATTYPE, $oehhinvcfmattype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCashAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcashamt(1234); // WHERE OehhCashAmt = 1234
     * $query->filterByOehhcashamt(array(12, 34)); // WHERE OehhCashAmt IN (12, 34)
     * $query->filterByOehhcashamt(array('min' => 12)); // WHERE OehhCashAmt > 12
     * </code>
     *
     * @param mixed $oehhcashamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcashamt($oehhcashamt = null, ?string $comparison = null)
    {
        if (is_array($oehhcashamt)) {
            $useMinMax = false;
            if (isset($oehhcashamt['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCASHAMT, $oehhcashamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcashamt['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCASHAMT, $oehhcashamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCASHAMT, $oehhcashamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCheckAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcheckamt(1234); // WHERE OehhCheckAmt = 1234
     * $query->filterByOehhcheckamt(array(12, 34)); // WHERE OehhCheckAmt IN (12, 34)
     * $query->filterByOehhcheckamt(array('min' => 12)); // WHERE OehhCheckAmt > 12
     * </code>
     *
     * @param mixed $oehhcheckamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcheckamt($oehhcheckamt = null, ?string $comparison = null)
    {
        if (is_array($oehhcheckamt)) {
            $useMinMax = false;
            if (isset($oehhcheckamt['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHECKAMT, $oehhcheckamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcheckamt['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHECKAMT, $oehhcheckamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHECKAMT, $oehhcheckamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCheckNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhchecknbr('fooValue');   // WHERE OehhCheckNbr = 'fooValue'
     * $query->filterByOehhchecknbr('%fooValue%', Criteria::LIKE); // WHERE OehhCheckNbr LIKE '%fooValue%'
     * $query->filterByOehhchecknbr(['foo', 'bar']); // WHERE OehhCheckNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhchecknbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhchecknbr($oehhchecknbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhchecknbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHECKNBR, $oehhchecknbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDepositAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdepositamt(1234); // WHERE OehhDepositAmt = 1234
     * $query->filterByOehhdepositamt(array(12, 34)); // WHERE OehhDepositAmt IN (12, 34)
     * $query->filterByOehhdepositamt(array('min' => 12)); // WHERE OehhDepositAmt > 12
     * </code>
     *
     * @param mixed $oehhdepositamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdepositamt($oehhdepositamt = null, ?string $comparison = null)
    {
        if (is_array($oehhdepositamt)) {
            $useMinMax = false;
            if (isset($oehhdepositamt['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDEPOSITAMT, $oehhdepositamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdepositamt['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDEPOSITAMT, $oehhdepositamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDEPOSITAMT, $oehhdepositamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDepositNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdepositnbr('fooValue');   // WHERE OehhDepositNbr = 'fooValue'
     * $query->filterByOehhdepositnbr('%fooValue%', Criteria::LIKE); // WHERE OehhDepositNbr LIKE '%fooValue%'
     * $query->filterByOehhdepositnbr(['foo', 'bar']); // WHERE OehhDepositNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdepositnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdepositnbr($oehhdepositnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdepositnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDEPOSITNBR, $oehhdepositnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCcAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhccamt(1234); // WHERE OehhCcAmt = 1234
     * $query->filterByOehhccamt(array(12, 34)); // WHERE OehhCcAmt IN (12, 34)
     * $query->filterByOehhccamt(array('min' => 12)); // WHERE OehhCcAmt > 12
     * </code>
     *
     * @param mixed $oehhccamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhccamt($oehhccamt = null, ?string $comparison = null)
    {
        if (is_array($oehhccamt)) {
            $useMinMax = false;
            if (isset($oehhccamt['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCCAMT, $oehhccamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhccamt['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCCAMT, $oehhccamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCCAMT, $oehhccamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhOTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhotaxsub(1234); // WHERE OehhOTaxSub = 1234
     * $query->filterByOehhotaxsub(array(12, 34)); // WHERE OehhOTaxSub IN (12, 34)
     * $query->filterByOehhotaxsub(array('min' => 12)); // WHERE OehhOTaxSub > 12
     * </code>
     *
     * @param mixed $oehhotaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhotaxsub($oehhotaxsub = null, ?string $comparison = null)
    {
        if (is_array($oehhotaxsub)) {
            $useMinMax = false;
            if (isset($oehhotaxsub['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOTAXSUB, $oehhotaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhotaxsub['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOTAXSUB, $oehhotaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOTAXSUB, $oehhotaxsub, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhONonTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhonontaxsub(1234); // WHERE OehhONonTaxSub = 1234
     * $query->filterByOehhonontaxsub(array(12, 34)); // WHERE OehhONonTaxSub IN (12, 34)
     * $query->filterByOehhonontaxsub(array('min' => 12)); // WHERE OehhONonTaxSub > 12
     * </code>
     *
     * @param mixed $oehhonontaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhonontaxsub($oehhonontaxsub = null, ?string $comparison = null)
    {
        if (is_array($oehhonontaxsub)) {
            $useMinMax = false;
            if (isset($oehhonontaxsub['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHONONTAXSUB, $oehhonontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhonontaxsub['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHONONTAXSUB, $oehhonontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHONONTAXSUB, $oehhonontaxsub, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhOTaxTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhotaxtot(1234); // WHERE OehhOTaxTot = 1234
     * $query->filterByOehhotaxtot(array(12, 34)); // WHERE OehhOTaxTot IN (12, 34)
     * $query->filterByOehhotaxtot(array('min' => 12)); // WHERE OehhOTaxTot > 12
     * </code>
     *
     * @param mixed $oehhotaxtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhotaxtot($oehhotaxtot = null, ?string $comparison = null)
    {
        if (is_array($oehhotaxtot)) {
            $useMinMax = false;
            if (isset($oehhotaxtot['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOTAXTOT, $oehhotaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhotaxtot['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOTAXTOT, $oehhotaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOTAXTOT, $oehhotaxtot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhOOrdrTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhoordrtot(1234); // WHERE OehhOOrdrTot = 1234
     * $query->filterByOehhoordrtot(array(12, 34)); // WHERE OehhOOrdrTot IN (12, 34)
     * $query->filterByOehhoordrtot(array('min' => 12)); // WHERE OehhOOrdrTot > 12
     * </code>
     *
     * @param mixed $oehhoordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhoordrtot($oehhoordrtot = null, ?string $comparison = null)
    {
        if (is_array($oehhoordrtot)) {
            $useMinMax = false;
            if (isset($oehhoordrtot['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOORDRTOT, $oehhoordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhoordrtot['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOORDRTOT, $oehhoordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOORDRTOT, $oehhoordrtot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPickPrintDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickprintdate('fooValue');   // WHERE OehhPickPrintDate = 'fooValue'
     * $query->filterByOehhpickprintdate('%fooValue%', Criteria::LIKE); // WHERE OehhPickPrintDate LIKE '%fooValue%'
     * $query->filterByOehhpickprintdate(['foo', 'bar']); // WHERE OehhPickPrintDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpickprintdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpickprintdate($oehhpickprintdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKPRINTDATE, $oehhpickprintdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPickPrintTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickprinttime('fooValue');   // WHERE OehhPickPrintTime = 'fooValue'
     * $query->filterByOehhpickprinttime('%fooValue%', Criteria::LIKE); // WHERE OehhPickPrintTime LIKE '%fooValue%'
     * $query->filterByOehhpickprinttime(['foo', 'bar']); // WHERE OehhPickPrintTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpickprinttime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpickprinttime($oehhpickprinttime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKPRINTTIME, $oehhpickprinttime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCont column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcont('fooValue');   // WHERE OehhCont = 'fooValue'
     * $query->filterByOehhcont('%fooValue%', Criteria::LIKE); // WHERE OehhCont LIKE '%fooValue%'
     * $query->filterByOehhcont(['foo', 'bar']); // WHERE OehhCont IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcont The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcont($oehhcont = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcont)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONT, $oehhcont, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhContTeleIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontteleintl('fooValue');   // WHERE OehhContTeleIntl = 'fooValue'
     * $query->filterByOehhcontteleintl('%fooValue%', Criteria::LIKE); // WHERE OehhContTeleIntl LIKE '%fooValue%'
     * $query->filterByOehhcontteleintl(['foo', 'bar']); // WHERE OehhContTeleIntl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcontteleintl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcontteleintl($oehhcontteleintl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontteleintl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTTELEINTL, $oehhcontteleintl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhContTeleNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhconttelenbr('fooValue');   // WHERE OehhContTeleNbr = 'fooValue'
     * $query->filterByOehhconttelenbr('%fooValue%', Criteria::LIKE); // WHERE OehhContTeleNbr LIKE '%fooValue%'
     * $query->filterByOehhconttelenbr(['foo', 'bar']); // WHERE OehhContTeleNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhconttelenbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhconttelenbr($oehhconttelenbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhconttelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTTELENBR, $oehhconttelenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhContTeleExt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontteleext('fooValue');   // WHERE OehhContTeleExt = 'fooValue'
     * $query->filterByOehhcontteleext('%fooValue%', Criteria::LIKE); // WHERE OehhContTeleExt LIKE '%fooValue%'
     * $query->filterByOehhcontteleext(['foo', 'bar']); // WHERE OehhContTeleExt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcontteleext The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcontteleext($oehhcontteleext = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontteleext)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTTELEEXT, $oehhcontteleext, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhContFaxIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontfaxintl('fooValue');   // WHERE OehhContFaxIntl = 'fooValue'
     * $query->filterByOehhcontfaxintl('%fooValue%', Criteria::LIKE); // WHERE OehhContFaxIntl LIKE '%fooValue%'
     * $query->filterByOehhcontfaxintl(['foo', 'bar']); // WHERE OehhContFaxIntl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcontfaxintl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcontfaxintl($oehhcontfaxintl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontfaxintl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTFAXINTL, $oehhcontfaxintl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhContFaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontfaxnbr('fooValue');   // WHERE OehhContFaxNbr = 'fooValue'
     * $query->filterByOehhcontfaxnbr('%fooValue%', Criteria::LIKE); // WHERE OehhContFaxNbr LIKE '%fooValue%'
     * $query->filterByOehhcontfaxnbr(['foo', 'bar']); // WHERE OehhContFaxNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcontfaxnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcontfaxnbr($oehhcontfaxnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTFAXNBR, $oehhcontfaxnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhShipAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhshipacct('fooValue');   // WHERE OehhShipAcct = 'fooValue'
     * $query->filterByOehhshipacct('%fooValue%', Criteria::LIKE); // WHERE OehhShipAcct LIKE '%fooValue%'
     * $query->filterByOehhshipacct(['foo', 'bar']); // WHERE OehhShipAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhshipacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhshipacct($oehhshipacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhshipacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSHIPACCT, $oehhshipacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhChgDue column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhchgdue(1234); // WHERE OehhChgDue = 1234
     * $query->filterByOehhchgdue(array(12, 34)); // WHERE OehhChgDue IN (12, 34)
     * $query->filterByOehhchgdue(array('min' => 12)); // WHERE OehhChgDue > 12
     * </code>
     *
     * @param mixed $oehhchgdue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhchgdue($oehhchgdue = null, ?string $comparison = null)
    {
        if (is_array($oehhchgdue)) {
            $useMinMax = false;
            if (isset($oehhchgdue['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHGDUE, $oehhchgdue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhchgdue['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHGDUE, $oehhchgdue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHGDUE, $oehhchgdue, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhAddlPricDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhaddlpricdisc(1234); // WHERE OehhAddlPricDisc = 1234
     * $query->filterByOehhaddlpricdisc(array(12, 34)); // WHERE OehhAddlPricDisc IN (12, 34)
     * $query->filterByOehhaddlpricdisc(array('min' => 12)); // WHERE OehhAddlPricDisc > 12
     * </code>
     *
     * @param mixed $oehhaddlpricdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhaddlpricdisc($oehhaddlpricdisc = null, ?string $comparison = null)
    {
        if (is_array($oehhaddlpricdisc)) {
            $useMinMax = false;
            if (isset($oehhaddlpricdisc['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHADDLPRICDISC, $oehhaddlpricdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhaddlpricdisc['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHADDLPRICDISC, $oehhaddlpricdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHADDLPRICDISC, $oehhaddlpricdisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhAllShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhallship('fooValue');   // WHERE OehhAllShip = 'fooValue'
     * $query->filterByOehhallship('%fooValue%', Criteria::LIKE); // WHERE OehhAllShip LIKE '%fooValue%'
     * $query->filterByOehhallship(['foo', 'bar']); // WHERE OehhAllShip IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhallship The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhallship($oehhallship = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhallship)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHALLSHIP, $oehhallship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhQtyOrderAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhqtyorderamt(1234); // WHERE OehhQtyOrderAmt = 1234
     * $query->filterByOehhqtyorderamt(array(12, 34)); // WHERE OehhQtyOrderAmt IN (12, 34)
     * $query->filterByOehhqtyorderamt(array('min' => 12)); // WHERE OehhQtyOrderAmt > 12
     * </code>
     *
     * @param mixed $oehhqtyorderamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhqtyorderamt($oehhqtyorderamt = null, ?string $comparison = null)
    {
        if (is_array($oehhqtyorderamt)) {
            $useMinMax = false;
            if (isset($oehhqtyorderamt['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHQTYORDERAMT, $oehhqtyorderamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhqtyorderamt['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHQTYORDERAMT, $oehhqtyorderamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHQTYORDERAMT, $oehhqtyorderamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCreditApplied column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcreditapplied(1234); // WHERE OehhCreditApplied = 1234
     * $query->filterByOehhcreditapplied(array(12, 34)); // WHERE OehhCreditApplied IN (12, 34)
     * $query->filterByOehhcreditapplied(array('min' => 12)); // WHERE OehhCreditApplied > 12
     * </code>
     *
     * @param mixed $oehhcreditapplied The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcreditapplied($oehhcreditapplied = null, ?string $comparison = null)
    {
        if (is_array($oehhcreditapplied)) {
            $useMinMax = false;
            if (isset($oehhcreditapplied['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED, $oehhcreditapplied['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcreditapplied['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED, $oehhcreditapplied['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED, $oehhcreditapplied, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhInvcPrintDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinvcprintdate('fooValue');   // WHERE OehhInvcPrintDate = 'fooValue'
     * $query->filterByOehhinvcprintdate('%fooValue%', Criteria::LIKE); // WHERE OehhInvcPrintDate LIKE '%fooValue%'
     * $query->filterByOehhinvcprintdate(['foo', 'bar']); // WHERE OehhInvcPrintDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhinvcprintdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhinvcprintdate($oehhinvcprintdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINVCPRINTDATE, $oehhinvcprintdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhInvcPrintTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinvcprinttime('fooValue');   // WHERE OehhInvcPrintTime = 'fooValue'
     * $query->filterByOehhinvcprinttime('%fooValue%', Criteria::LIKE); // WHERE OehhInvcPrintTime LIKE '%fooValue%'
     * $query->filterByOehhinvcprinttime(['foo', 'bar']); // WHERE OehhInvcPrintTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhinvcprinttime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhinvcprinttime($oehhinvcprinttime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINVCPRINTTIME, $oehhinvcprinttime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscfrt(1234); // WHERE OehhDiscFrt = 1234
     * $query->filterByOehhdiscfrt(array(12, 34)); // WHERE OehhDiscFrt IN (12, 34)
     * $query->filterByOehhdiscfrt(array('min' => 12)); // WHERE OehhDiscFrt > 12
     * </code>
     *
     * @param mixed $oehhdiscfrt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscfrt($oehhdiscfrt = null, ?string $comparison = null)
    {
        if (is_array($oehhdiscfrt)) {
            $useMinMax = false;
            if (isset($oehhdiscfrt['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCFRT, $oehhdiscfrt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscfrt['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCFRT, $oehhdiscfrt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCFRT, $oehhdiscfrt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhOrideShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhorideshipcomp('fooValue');   // WHERE OehhOrideShipComp = 'fooValue'
     * $query->filterByOehhorideshipcomp('%fooValue%', Criteria::LIKE); // WHERE OehhOrideShipComp LIKE '%fooValue%'
     * $query->filterByOehhorideshipcomp(['foo', 'bar']); // WHERE OehhOrideShipComp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhorideshipcomp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhorideshipcomp($oehhorideshipcomp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhorideshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP, $oehhorideshipcomp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhContEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontemail('fooValue');   // WHERE OehhContEmail = 'fooValue'
     * $query->filterByOehhcontemail('%fooValue%', Criteria::LIKE); // WHERE OehhContEmail LIKE '%fooValue%'
     * $query->filterByOehhcontemail(['foo', 'bar']); // WHERE OehhContEmail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcontemail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcontemail($oehhcontemail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontemail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTEMAIL, $oehhcontemail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhManualFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhmanualfrt('fooValue');   // WHERE OehhManualFrt = 'fooValue'
     * $query->filterByOehhmanualfrt('%fooValue%', Criteria::LIKE); // WHERE OehhManualFrt LIKE '%fooValue%'
     * $query->filterByOehhmanualfrt(['foo', 'bar']); // WHERE OehhManualFrt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhmanualfrt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhmanualfrt($oehhmanualfrt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhmanualfrt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMANUALFRT, $oehhmanualfrt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhInternalFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinternalfrt('fooValue');   // WHERE OehhInternalFrt = 'fooValue'
     * $query->filterByOehhinternalfrt('%fooValue%', Criteria::LIKE); // WHERE OehhInternalFrt LIKE '%fooValue%'
     * $query->filterByOehhinternalfrt(['foo', 'bar']); // WHERE OehhInternalFrt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhinternalfrt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhinternalfrt($oehhinternalfrt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinternalfrt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINTERNALFRT, $oehhinternalfrt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrtcost(1234); // WHERE OehhFrtCost = 1234
     * $query->filterByOehhfrtcost(array(12, 34)); // WHERE OehhFrtCost IN (12, 34)
     * $query->filterByOehhfrtcost(array('min' => 12)); // WHERE OehhFrtCost > 12
     * </code>
     *
     * @param mixed $oehhfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrtcost($oehhfrtcost = null, ?string $comparison = null)
    {
        if (is_array($oehhfrtcost)) {
            $useMinMax = false;
            if (isset($oehhfrtcost['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTCOST, $oehhfrtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrtcost['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTCOST, $oehhfrtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTCOST, $oehhfrtcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhroute('fooValue');   // WHERE OehhRoute = 'fooValue'
     * $query->filterByOehhroute('%fooValue%', Criteria::LIKE); // WHERE OehhRoute LIKE '%fooValue%'
     * $query->filterByOehhroute(['foo', 'bar']); // WHERE OehhRoute IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhroute The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhroute($oehhroute = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhroute)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHROUTE, $oehhroute, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhRouteSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhrouteseq(1234); // WHERE OehhRouteSeq = 1234
     * $query->filterByOehhrouteseq(array(12, 34)); // WHERE OehhRouteSeq IN (12, 34)
     * $query->filterByOehhrouteseq(array('min' => 12)); // WHERE OehhRouteSeq > 12
     * </code>
     *
     * @param mixed $oehhrouteseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhrouteseq($oehhrouteseq = null, ?string $comparison = null)
    {
        if (is_array($oehhrouteseq)) {
            $useMinMax = false;
            if (isset($oehhrouteseq['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHROUTESEQ, $oehhrouteseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhrouteseq['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHROUTESEQ, $oehhrouteseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHROUTESEQ, $oehhrouteseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode1('fooValue');   // WHERE OehhFrtTaxCode1 = 'fooValue'
     * $query->filterByOehhfrttaxcode1('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode1 LIKE '%fooValue%'
     * $query->filterByOehhfrttaxcode1(['foo', 'bar']); // WHERE OehhFrtTaxCode1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhfrttaxcode1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode1($oehhfrttaxcode1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE1, $oehhfrttaxcode1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxAmt1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt1(1234); // WHERE OehhFrtTaxAmt1 = 1234
     * $query->filterByOehhfrttaxamt1(array(12, 34)); // WHERE OehhFrtTaxAmt1 IN (12, 34)
     * $query->filterByOehhfrttaxamt1(array('min' => 12)); // WHERE OehhFrtTaxAmt1 > 12
     * </code>
     *
     * @param mixed $oehhfrttaxamt1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt1($oehhfrttaxamt1 = null, ?string $comparison = null)
    {
        if (is_array($oehhfrttaxamt1)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt1['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1, $oehhfrttaxamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt1['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1, $oehhfrttaxamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1, $oehhfrttaxamt1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode2('fooValue');   // WHERE OehhFrtTaxCode2 = 'fooValue'
     * $query->filterByOehhfrttaxcode2('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode2 LIKE '%fooValue%'
     * $query->filterByOehhfrttaxcode2(['foo', 'bar']); // WHERE OehhFrtTaxCode2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhfrttaxcode2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode2($oehhfrttaxcode2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE2, $oehhfrttaxcode2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxAmt2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt2(1234); // WHERE OehhFrtTaxAmt2 = 1234
     * $query->filterByOehhfrttaxamt2(array(12, 34)); // WHERE OehhFrtTaxAmt2 IN (12, 34)
     * $query->filterByOehhfrttaxamt2(array('min' => 12)); // WHERE OehhFrtTaxAmt2 > 12
     * </code>
     *
     * @param mixed $oehhfrttaxamt2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt2($oehhfrttaxamt2 = null, ?string $comparison = null)
    {
        if (is_array($oehhfrttaxamt2)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt2['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2, $oehhfrttaxamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt2['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2, $oehhfrttaxamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2, $oehhfrttaxamt2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode3('fooValue');   // WHERE OehhFrtTaxCode3 = 'fooValue'
     * $query->filterByOehhfrttaxcode3('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode3 LIKE '%fooValue%'
     * $query->filterByOehhfrttaxcode3(['foo', 'bar']); // WHERE OehhFrtTaxCode3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhfrttaxcode3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode3($oehhfrttaxcode3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE3, $oehhfrttaxcode3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxAmt3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt3(1234); // WHERE OehhFrtTaxAmt3 = 1234
     * $query->filterByOehhfrttaxamt3(array(12, 34)); // WHERE OehhFrtTaxAmt3 IN (12, 34)
     * $query->filterByOehhfrttaxamt3(array('min' => 12)); // WHERE OehhFrtTaxAmt3 > 12
     * </code>
     *
     * @param mixed $oehhfrttaxamt3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt3($oehhfrttaxamt3 = null, ?string $comparison = null)
    {
        if (is_array($oehhfrttaxamt3)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt3['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3, $oehhfrttaxamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt3['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3, $oehhfrttaxamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3, $oehhfrttaxamt3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode4('fooValue');   // WHERE OehhFrtTaxCode4 = 'fooValue'
     * $query->filterByOehhfrttaxcode4('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode4 LIKE '%fooValue%'
     * $query->filterByOehhfrttaxcode4(['foo', 'bar']); // WHERE OehhFrtTaxCode4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhfrttaxcode4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode4($oehhfrttaxcode4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE4, $oehhfrttaxcode4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxAmt4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt4(1234); // WHERE OehhFrtTaxAmt4 = 1234
     * $query->filterByOehhfrttaxamt4(array(12, 34)); // WHERE OehhFrtTaxAmt4 IN (12, 34)
     * $query->filterByOehhfrttaxamt4(array('min' => 12)); // WHERE OehhFrtTaxAmt4 > 12
     * </code>
     *
     * @param mixed $oehhfrttaxamt4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt4($oehhfrttaxamt4 = null, ?string $comparison = null)
    {
        if (is_array($oehhfrttaxamt4)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt4['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4, $oehhfrttaxamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt4['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4, $oehhfrttaxamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4, $oehhfrttaxamt4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode5('fooValue');   // WHERE OehhFrtTaxCode5 = 'fooValue'
     * $query->filterByOehhfrttaxcode5('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode5 LIKE '%fooValue%'
     * $query->filterByOehhfrttaxcode5(['foo', 'bar']); // WHERE OehhFrtTaxCode5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhfrttaxcode5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode5($oehhfrttaxcode5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE5, $oehhfrttaxcode5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtTaxAmt5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt5(1234); // WHERE OehhFrtTaxAmt5 = 1234
     * $query->filterByOehhfrttaxamt5(array(12, 34)); // WHERE OehhFrtTaxAmt5 IN (12, 34)
     * $query->filterByOehhfrttaxamt5(array('min' => 12)); // WHERE OehhFrtTaxAmt5 > 12
     * </code>
     *
     * @param mixed $oehhfrttaxamt5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt5($oehhfrttaxamt5 = null, ?string $comparison = null)
    {
        if (is_array($oehhfrttaxamt5)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt5['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5, $oehhfrttaxamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt5['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5, $oehhfrttaxamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5, $oehhfrttaxamt5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhEdi855Sent column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhedi855sent('fooValue');   // WHERE OehhEdi855Sent = 'fooValue'
     * $query->filterByOehhedi855sent('%fooValue%', Criteria::LIKE); // WHERE OehhEdi855Sent LIKE '%fooValue%'
     * $query->filterByOehhedi855sent(['foo', 'bar']); // WHERE OehhEdi855Sent IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhedi855sent The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhedi855sent($oehhedi855sent = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhedi855sent)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEDI855SENT, $oehhedi855sent, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrt3rdParty column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrt3rdparty(1234); // WHERE OehhFrt3rdParty = 1234
     * $query->filterByOehhfrt3rdparty(array(12, 34)); // WHERE OehhFrt3rdParty IN (12, 34)
     * $query->filterByOehhfrt3rdparty(array('min' => 12)); // WHERE OehhFrt3rdParty > 12
     * </code>
     *
     * @param mixed $oehhfrt3rdparty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrt3rdparty($oehhfrt3rdparty = null, ?string $comparison = null)
    {
        if (is_array($oehhfrt3rdparty)) {
            $useMinMax = false;
            if (isset($oehhfrt3rdparty['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY, $oehhfrt3rdparty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrt3rdparty['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY, $oehhfrt3rdparty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY, $oehhfrt3rdparty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFob column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfob('fooValue');   // WHERE OehhFob = 'fooValue'
     * $query->filterByOehhfob('%fooValue%', Criteria::LIKE); // WHERE OehhFob LIKE '%fooValue%'
     * $query->filterByOehhfob(['foo', 'bar']); // WHERE OehhFob IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhfob The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfob($oehhfob = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfob)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFOB, $oehhfob, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhConfirmImagYn column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhconfirmimagyn('fooValue');   // WHERE OehhConfirmImagYn = 'fooValue'
     * $query->filterByOehhconfirmimagyn('%fooValue%', Criteria::LIKE); // WHERE OehhConfirmImagYn LIKE '%fooValue%'
     * $query->filterByOehhconfirmimagyn(['foo', 'bar']); // WHERE OehhConfirmImagYn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhconfirmimagyn The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhconfirmimagyn($oehhconfirmimagyn = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhconfirmimagyn)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN, $oehhconfirmimagyn, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhIndustConform column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhindustconform('fooValue');   // WHERE OehhIndustConform = 'fooValue'
     * $query->filterByOehhindustconform('%fooValue%', Criteria::LIKE); // WHERE OehhIndustConform LIKE '%fooValue%'
     * $query->filterByOehhindustconform(['foo', 'bar']); // WHERE OehhIndustConform IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhindustconform The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhindustconform($oehhindustconform = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhindustconform)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINDUSTCONFORM, $oehhindustconform, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCstkConsign column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcstkconsign('fooValue');   // WHERE OehhCstkConsign = 'fooValue'
     * $query->filterByOehhcstkconsign('%fooValue%', Criteria::LIKE); // WHERE OehhCstkConsign LIKE '%fooValue%'
     * $query->filterByOehhcstkconsign(['foo', 'bar']); // WHERE OehhCstkConsign IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcstkconsign The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcstkconsign($oehhcstkconsign = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcstkconsign)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCSTKCONSIGN, $oehhcstkconsign, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhLmDelayCapSent column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhlmdelaycapsent('fooValue');   // WHERE OehhLmDelayCapSent = 'fooValue'
     * $query->filterByOehhlmdelaycapsent('%fooValue%', Criteria::LIKE); // WHERE OehhLmDelayCapSent LIKE '%fooValue%'
     * $query->filterByOehhlmdelaycapsent(['foo', 'bar']); // WHERE OehhLmDelayCapSent IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhlmdelaycapsent The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhlmdelaycapsent($oehhlmdelaycapsent = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhlmdelaycapsent)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT, $oehhlmdelaycapsent, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhMfgId column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhmfgid('fooValue');   // WHERE OehhMfgId = 'fooValue'
     * $query->filterByOehhmfgid('%fooValue%', Criteria::LIKE); // WHERE OehhMfgId LIKE '%fooValue%'
     * $query->filterByOehhmfgid(['foo', 'bar']); // WHERE OehhMfgId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhmfgid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhmfgid($oehhmfgid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhmfgid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMFGID, $oehhmfgid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhStoreId column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstoreid('fooValue');   // WHERE OehhStoreId = 'fooValue'
     * $query->filterByOehhstoreid('%fooValue%', Criteria::LIKE); // WHERE OehhStoreId LIKE '%fooValue%'
     * $query->filterByOehhstoreid(['foo', 'bar']); // WHERE OehhStoreId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhstoreid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhstoreid($oehhstoreid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstoreid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTOREID, $oehhstoreid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPickQueue column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickqueue('fooValue');   // WHERE OehhPickQueue = 'fooValue'
     * $query->filterByOehhpickqueue('%fooValue%', Criteria::LIKE); // WHERE OehhPickQueue LIKE '%fooValue%'
     * $query->filterByOehhpickqueue(['foo', 'bar']); // WHERE OehhPickQueue IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpickqueue The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpickqueue($oehhpickqueue = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickqueue)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKQUEUE, $oehhpickqueue, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhArrvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehharrvdate('fooValue');   // WHERE OehhArrvDate = 'fooValue'
     * $query->filterByOehharrvdate('%fooValue%', Criteria::LIKE); // WHERE OehhArrvDate LIKE '%fooValue%'
     * $query->filterByOehharrvdate(['foo', 'bar']); // WHERE OehhArrvDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehharrvdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehharrvdate($oehharrvdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehharrvdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHARRVDATE, $oehharrvdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhSurchgStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhsurchgstat('fooValue');   // WHERE OehhSurchgStat = 'fooValue'
     * $query->filterByOehhsurchgstat('%fooValue%', Criteria::LIKE); // WHERE OehhSurchgStat LIKE '%fooValue%'
     * $query->filterByOehhsurchgstat(['foo', 'bar']); // WHERE OehhSurchgStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhsurchgstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhsurchgstat($oehhsurchgstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhsurchgstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSURCHGSTAT, $oehhsurchgstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhFrtGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrtgrup('fooValue');   // WHERE OehhFrtGrup = 'fooValue'
     * $query->filterByOehhfrtgrup('%fooValue%', Criteria::LIKE); // WHERE OehhFrtGrup LIKE '%fooValue%'
     * $query->filterByOehhfrtgrup(['foo', 'bar']); // WHERE OehhFrtGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhfrtgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhfrtgrup($oehhfrtgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTGRUP, $oehhfrtgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhCommOride column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcommoride('fooValue');   // WHERE OehhCommOride = 'fooValue'
     * $query->filterByOehhcommoride('%fooValue%', Criteria::LIKE); // WHERE OehhCommOride LIKE '%fooValue%'
     * $query->filterByOehhcommoride(['foo', 'bar']); // WHERE OehhCommOride IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhcommoride The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhcommoride($oehhcommoride = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcommoride)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCOMMORIDE, $oehhcommoride, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhChrgSplt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhchrgsplt('fooValue');   // WHERE OehhChrgSplt = 'fooValue'
     * $query->filterByOehhchrgsplt('%fooValue%', Criteria::LIKE); // WHERE OehhChrgSplt LIKE '%fooValue%'
     * $query->filterByOehhchrgsplt(['foo', 'bar']); // WHERE OehhChrgSplt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhchrgsplt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhchrgsplt($oehhchrgsplt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhchrgsplt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHRGSPLT, $oehhchrgsplt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhAcCcAprv column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhacccaprv('fooValue');   // WHERE OehhAcCcAprv = 'fooValue'
     * $query->filterByOehhacccaprv('%fooValue%', Criteria::LIKE); // WHERE OehhAcCcAprv LIKE '%fooValue%'
     * $query->filterByOehhacccaprv(['foo', 'bar']); // WHERE OehhAcCcAprv IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhacccaprv The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhacccaprv($oehhacccaprv = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhacccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHACCCAPRV, $oehhacccaprv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhOrigOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhorigordrnbr('fooValue');   // WHERE OehhOrigOrdrNbr = 'fooValue'
     * $query->filterByOehhorigordrnbr('%fooValue%', Criteria::LIKE); // WHERE OehhOrigOrdrNbr LIKE '%fooValue%'
     * $query->filterByOehhorigordrnbr(['foo', 'bar']); // WHERE OehhOrigOrdrNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhorigordrnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhorigordrnbr($oehhorigordrnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhorigordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORIGORDRNBR, $oehhorigordrnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhPostDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpostdate('fooValue');   // WHERE OehhPostDate = 'fooValue'
     * $query->filterByOehhpostdate('%fooValue%', Criteria::LIKE); // WHERE OehhPostDate LIKE '%fooValue%'
     * $query->filterByOehhpostdate(['foo', 'bar']); // WHERE OehhPostDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhpostdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhpostdate($oehhpostdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpostdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPOSTDATE, $oehhpostdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate1('fooValue');   // WHERE OehhDiscDate1 = 'fooValue'
     * $query->filterByOehhdiscdate1('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate1 LIKE '%fooValue%'
     * $query->filterByOehhdiscdate1(['foo', 'bar']); // WHERE OehhDiscDate1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdiscdate1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscdate1($oehhdiscdate1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE1, $oehhdiscdate1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscpct1(1234); // WHERE OehhDiscPct1 = 1234
     * $query->filterByOehhdiscpct1(array(12, 34)); // WHERE OehhDiscPct1 IN (12, 34)
     * $query->filterByOehhdiscpct1(array('min' => 12)); // WHERE OehhDiscPct1 > 12
     * </code>
     *
     * @param mixed $oehhdiscpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscpct1($oehhdiscpct1 = null, ?string $comparison = null)
    {
        if (is_array($oehhdiscpct1)) {
            $useMinMax = false;
            if (isset($oehhdiscpct1['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT1, $oehhdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct1['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT1, $oehhdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT1, $oehhdiscpct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate1('fooValue');   // WHERE OehhDueDate1 = 'fooValue'
     * $query->filterByOehhduedate1('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate1 LIKE '%fooValue%'
     * $query->filterByOehhduedate1(['foo', 'bar']); // WHERE OehhDueDate1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhduedate1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduedate1($oehhduedate1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE1, $oehhduedate1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueAmt1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdueamt1(1234); // WHERE OehhDueAmt1 = 1234
     * $query->filterByOehhdueamt1(array(12, 34)); // WHERE OehhDueAmt1 IN (12, 34)
     * $query->filterByOehhdueamt1(array('min' => 12)); // WHERE OehhDueAmt1 > 12
     * </code>
     *
     * @param mixed $oehhdueamt1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdueamt1($oehhdueamt1 = null, ?string $comparison = null)
    {
        if (is_array($oehhdueamt1)) {
            $useMinMax = false;
            if (isset($oehhdueamt1['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT1, $oehhdueamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt1['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT1, $oehhdueamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT1, $oehhdueamt1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDuePct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduepct1(1234); // WHERE OehhDuePct1 = 1234
     * $query->filterByOehhduepct1(array(12, 34)); // WHERE OehhDuePct1 IN (12, 34)
     * $query->filterByOehhduepct1(array('min' => 12)); // WHERE OehhDuePct1 > 12
     * </code>
     *
     * @param mixed $oehhduepct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduepct1($oehhduepct1 = null, ?string $comparison = null)
    {
        if (is_array($oehhduepct1)) {
            $useMinMax = false;
            if (isset($oehhduepct1['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT1, $oehhduepct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct1['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT1, $oehhduepct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT1, $oehhduepct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate2('fooValue');   // WHERE OehhDiscDate2 = 'fooValue'
     * $query->filterByOehhdiscdate2('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate2 LIKE '%fooValue%'
     * $query->filterByOehhdiscdate2(['foo', 'bar']); // WHERE OehhDiscDate2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdiscdate2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscdate2($oehhdiscdate2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE2, $oehhdiscdate2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscpct2(1234); // WHERE OehhDiscPct2 = 1234
     * $query->filterByOehhdiscpct2(array(12, 34)); // WHERE OehhDiscPct2 IN (12, 34)
     * $query->filterByOehhdiscpct2(array('min' => 12)); // WHERE OehhDiscPct2 > 12
     * </code>
     *
     * @param mixed $oehhdiscpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscpct2($oehhdiscpct2 = null, ?string $comparison = null)
    {
        if (is_array($oehhdiscpct2)) {
            $useMinMax = false;
            if (isset($oehhdiscpct2['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT2, $oehhdiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct2['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT2, $oehhdiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT2, $oehhdiscpct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate2('fooValue');   // WHERE OehhDueDate2 = 'fooValue'
     * $query->filterByOehhduedate2('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate2 LIKE '%fooValue%'
     * $query->filterByOehhduedate2(['foo', 'bar']); // WHERE OehhDueDate2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhduedate2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduedate2($oehhduedate2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE2, $oehhduedate2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueAmt2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdueamt2(1234); // WHERE OehhDueAmt2 = 1234
     * $query->filterByOehhdueamt2(array(12, 34)); // WHERE OehhDueAmt2 IN (12, 34)
     * $query->filterByOehhdueamt2(array('min' => 12)); // WHERE OehhDueAmt2 > 12
     * </code>
     *
     * @param mixed $oehhdueamt2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdueamt2($oehhdueamt2 = null, ?string $comparison = null)
    {
        if (is_array($oehhdueamt2)) {
            $useMinMax = false;
            if (isset($oehhdueamt2['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT2, $oehhdueamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt2['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT2, $oehhdueamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT2, $oehhdueamt2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDuePct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduepct2(1234); // WHERE OehhDuePct2 = 1234
     * $query->filterByOehhduepct2(array(12, 34)); // WHERE OehhDuePct2 IN (12, 34)
     * $query->filterByOehhduepct2(array('min' => 12)); // WHERE OehhDuePct2 > 12
     * </code>
     *
     * @param mixed $oehhduepct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduepct2($oehhduepct2 = null, ?string $comparison = null)
    {
        if (is_array($oehhduepct2)) {
            $useMinMax = false;
            if (isset($oehhduepct2['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT2, $oehhduepct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct2['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT2, $oehhduepct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT2, $oehhduepct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate3('fooValue');   // WHERE OehhDiscDate3 = 'fooValue'
     * $query->filterByOehhdiscdate3('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate3 LIKE '%fooValue%'
     * $query->filterByOehhdiscdate3(['foo', 'bar']); // WHERE OehhDiscDate3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdiscdate3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscdate3($oehhdiscdate3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE3, $oehhdiscdate3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscpct3(1234); // WHERE OehhDiscPct3 = 1234
     * $query->filterByOehhdiscpct3(array(12, 34)); // WHERE OehhDiscPct3 IN (12, 34)
     * $query->filterByOehhdiscpct3(array('min' => 12)); // WHERE OehhDiscPct3 > 12
     * </code>
     *
     * @param mixed $oehhdiscpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscpct3($oehhdiscpct3 = null, ?string $comparison = null)
    {
        if (is_array($oehhdiscpct3)) {
            $useMinMax = false;
            if (isset($oehhdiscpct3['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT3, $oehhdiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct3['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT3, $oehhdiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT3, $oehhdiscpct3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate3('fooValue');   // WHERE OehhDueDate3 = 'fooValue'
     * $query->filterByOehhduedate3('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate3 LIKE '%fooValue%'
     * $query->filterByOehhduedate3(['foo', 'bar']); // WHERE OehhDueDate3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhduedate3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduedate3($oehhduedate3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE3, $oehhduedate3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueAmt3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdueamt3(1234); // WHERE OehhDueAmt3 = 1234
     * $query->filterByOehhdueamt3(array(12, 34)); // WHERE OehhDueAmt3 IN (12, 34)
     * $query->filterByOehhdueamt3(array('min' => 12)); // WHERE OehhDueAmt3 > 12
     * </code>
     *
     * @param mixed $oehhdueamt3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdueamt3($oehhdueamt3 = null, ?string $comparison = null)
    {
        if (is_array($oehhdueamt3)) {
            $useMinMax = false;
            if (isset($oehhdueamt3['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT3, $oehhdueamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt3['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT3, $oehhdueamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT3, $oehhdueamt3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDuePct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduepct3(1234); // WHERE OehhDuePct3 = 1234
     * $query->filterByOehhduepct3(array(12, 34)); // WHERE OehhDuePct3 IN (12, 34)
     * $query->filterByOehhduepct3(array('min' => 12)); // WHERE OehhDuePct3 > 12
     * </code>
     *
     * @param mixed $oehhduepct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduepct3($oehhduepct3 = null, ?string $comparison = null)
    {
        if (is_array($oehhduepct3)) {
            $useMinMax = false;
            if (isset($oehhduepct3['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT3, $oehhduepct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct3['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT3, $oehhduepct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT3, $oehhduepct3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate4('fooValue');   // WHERE OehhDiscDate4 = 'fooValue'
     * $query->filterByOehhdiscdate4('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate4 LIKE '%fooValue%'
     * $query->filterByOehhdiscdate4(['foo', 'bar']); // WHERE OehhDiscDate4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdiscdate4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscdate4($oehhdiscdate4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE4, $oehhdiscdate4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscpct4(1234); // WHERE OehhDiscPct4 = 1234
     * $query->filterByOehhdiscpct4(array(12, 34)); // WHERE OehhDiscPct4 IN (12, 34)
     * $query->filterByOehhdiscpct4(array('min' => 12)); // WHERE OehhDiscPct4 > 12
     * </code>
     *
     * @param mixed $oehhdiscpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscpct4($oehhdiscpct4 = null, ?string $comparison = null)
    {
        if (is_array($oehhdiscpct4)) {
            $useMinMax = false;
            if (isset($oehhdiscpct4['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT4, $oehhdiscpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct4['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT4, $oehhdiscpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT4, $oehhdiscpct4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate4('fooValue');   // WHERE OehhDueDate4 = 'fooValue'
     * $query->filterByOehhduedate4('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate4 LIKE '%fooValue%'
     * $query->filterByOehhduedate4(['foo', 'bar']); // WHERE OehhDueDate4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhduedate4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduedate4($oehhduedate4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE4, $oehhduedate4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueAmt4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdueamt4(1234); // WHERE OehhDueAmt4 = 1234
     * $query->filterByOehhdueamt4(array(12, 34)); // WHERE OehhDueAmt4 IN (12, 34)
     * $query->filterByOehhdueamt4(array('min' => 12)); // WHERE OehhDueAmt4 > 12
     * </code>
     *
     * @param mixed $oehhdueamt4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdueamt4($oehhdueamt4 = null, ?string $comparison = null)
    {
        if (is_array($oehhdueamt4)) {
            $useMinMax = false;
            if (isset($oehhdueamt4['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT4, $oehhdueamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt4['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT4, $oehhdueamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT4, $oehhdueamt4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDuePct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduepct4(1234); // WHERE OehhDuePct4 = 1234
     * $query->filterByOehhduepct4(array(12, 34)); // WHERE OehhDuePct4 IN (12, 34)
     * $query->filterByOehhduepct4(array('min' => 12)); // WHERE OehhDuePct4 > 12
     * </code>
     *
     * @param mixed $oehhduepct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduepct4($oehhduepct4 = null, ?string $comparison = null)
    {
        if (is_array($oehhduepct4)) {
            $useMinMax = false;
            if (isset($oehhduepct4['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT4, $oehhduepct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct4['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT4, $oehhduepct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT4, $oehhduepct4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate5('fooValue');   // WHERE OehhDiscDate5 = 'fooValue'
     * $query->filterByOehhdiscdate5('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate5 LIKE '%fooValue%'
     * $query->filterByOehhdiscdate5(['foo', 'bar']); // WHERE OehhDiscDate5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdiscdate5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscdate5($oehhdiscdate5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE5, $oehhdiscdate5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscpct5(1234); // WHERE OehhDiscPct5 = 1234
     * $query->filterByOehhdiscpct5(array(12, 34)); // WHERE OehhDiscPct5 IN (12, 34)
     * $query->filterByOehhdiscpct5(array('min' => 12)); // WHERE OehhDiscPct5 > 12
     * </code>
     *
     * @param mixed $oehhdiscpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscpct5($oehhdiscpct5 = null, ?string $comparison = null)
    {
        if (is_array($oehhdiscpct5)) {
            $useMinMax = false;
            if (isset($oehhdiscpct5['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT5, $oehhdiscpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct5['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT5, $oehhdiscpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT5, $oehhdiscpct5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate5('fooValue');   // WHERE OehhDueDate5 = 'fooValue'
     * $query->filterByOehhduedate5('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate5 LIKE '%fooValue%'
     * $query->filterByOehhduedate5(['foo', 'bar']); // WHERE OehhDueDate5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhduedate5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduedate5($oehhduedate5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE5, $oehhduedate5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueAmt5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdueamt5(1234); // WHERE OehhDueAmt5 = 1234
     * $query->filterByOehhdueamt5(array(12, 34)); // WHERE OehhDueAmt5 IN (12, 34)
     * $query->filterByOehhdueamt5(array('min' => 12)); // WHERE OehhDueAmt5 > 12
     * </code>
     *
     * @param mixed $oehhdueamt5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdueamt5($oehhdueamt5 = null, ?string $comparison = null)
    {
        if (is_array($oehhdueamt5)) {
            $useMinMax = false;
            if (isset($oehhdueamt5['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT5, $oehhdueamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt5['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT5, $oehhdueamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT5, $oehhdueamt5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDuePct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduepct5(1234); // WHERE OehhDuePct5 = 1234
     * $query->filterByOehhduepct5(array(12, 34)); // WHERE OehhDuePct5 IN (12, 34)
     * $query->filterByOehhduepct5(array('min' => 12)); // WHERE OehhDuePct5 > 12
     * </code>
     *
     * @param mixed $oehhduepct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduepct5($oehhduepct5 = null, ?string $comparison = null)
    {
        if (is_array($oehhduepct5)) {
            $useMinMax = false;
            if (isset($oehhduepct5['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT5, $oehhduepct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct5['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT5, $oehhduepct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT5, $oehhduepct5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscDate6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate6('fooValue');   // WHERE OehhDiscDate6 = 'fooValue'
     * $query->filterByOehhdiscdate6('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate6 LIKE '%fooValue%'
     * $query->filterByOehhdiscdate6(['foo', 'bar']); // WHERE OehhDiscDate6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhdiscdate6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscdate6($oehhdiscdate6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE6, $oehhdiscdate6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDiscPct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscpct6(1234); // WHERE OehhDiscPct6 = 1234
     * $query->filterByOehhdiscpct6(array(12, 34)); // WHERE OehhDiscPct6 IN (12, 34)
     * $query->filterByOehhdiscpct6(array('min' => 12)); // WHERE OehhDiscPct6 > 12
     * </code>
     *
     * @param mixed $oehhdiscpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdiscpct6($oehhdiscpct6 = null, ?string $comparison = null)
    {
        if (is_array($oehhdiscpct6)) {
            $useMinMax = false;
            if (isset($oehhdiscpct6['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT6, $oehhdiscpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct6['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT6, $oehhdiscpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT6, $oehhdiscpct6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueDate6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate6('fooValue');   // WHERE OehhDueDate6 = 'fooValue'
     * $query->filterByOehhduedate6('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate6 LIKE '%fooValue%'
     * $query->filterByOehhduedate6(['foo', 'bar']); // WHERE OehhDueDate6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhduedate6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduedate6($oehhduedate6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE6, $oehhduedate6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDueAmt6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdueamt6(1234); // WHERE OehhDueAmt6 = 1234
     * $query->filterByOehhdueamt6(array(12, 34)); // WHERE OehhDueAmt6 IN (12, 34)
     * $query->filterByOehhdueamt6(array('min' => 12)); // WHERE OehhDueAmt6 > 12
     * </code>
     *
     * @param mixed $oehhdueamt6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhdueamt6($oehhdueamt6 = null, ?string $comparison = null)
    {
        if (is_array($oehhdueamt6)) {
            $useMinMax = false;
            if (isset($oehhdueamt6['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT6, $oehhdueamt6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt6['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT6, $oehhdueamt6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT6, $oehhdueamt6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhDuePct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduepct6(1234); // WHERE OehhDuePct6 = 1234
     * $query->filterByOehhduepct6(array(12, 34)); // WHERE OehhDuePct6 IN (12, 34)
     * $query->filterByOehhduepct6(array('min' => 12)); // WHERE OehhDuePct6 > 12
     * </code>
     *
     * @param mixed $oehhduepct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhduepct6($oehhduepct6 = null, ?string $comparison = null)
    {
        if (is_array($oehhduepct6)) {
            $useMinMax = false;
            if (isset($oehhduepct6['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT6, $oehhduepct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct6['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT6, $oehhduepct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT6, $oehhduepct6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhRefNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhrefnbr('fooValue');   // WHERE OehhRefNbr = 'fooValue'
     * $query->filterByOehhrefnbr('%fooValue%', Criteria::LIKE); // WHERE OehhRefNbr LIKE '%fooValue%'
     * $query->filterByOehhrefnbr(['foo', 'bar']); // WHERE OehhRefNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhrefnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhrefnbr($oehhrefnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhrefnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHREFNBR, $oehhrefnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhAcProgNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhacprognbr('fooValue');   // WHERE OehhAcProgNbr = 'fooValue'
     * $query->filterByOehhacprognbr('%fooValue%', Criteria::LIKE); // WHERE OehhAcProgNbr LIKE '%fooValue%'
     * $query->filterByOehhacprognbr(['foo', 'bar']); // WHERE OehhAcProgNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhacprognbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhacprognbr($oehhacprognbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhacprognbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHACPROGNBR, $oehhacprognbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehhAcProgExpDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhacprogexpdate('fooValue');   // WHERE OehhAcProgExpDate = 'fooValue'
     * $query->filterByOehhacprogexpdate('%fooValue%', Criteria::LIKE); // WHERE OehhAcProgExpDate LIKE '%fooValue%'
     * $query->filterByOehhacprogexpdate(['foo', 'bar']); // WHERE OehhAcProgExpDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehhacprogexpdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhacprogexpdate($oehhacprogexpdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhacprogexpdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHACPROGEXPDATE, $oehhacprogexpdate, $comparison);

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

        $this->addUsingAlias(SalesHistoryTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SalesHistoryTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SalesHistoryTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(SalesHistoryTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesHistoryTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation Customer object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', '\CustomerQuery');
    }

    /**
     * Use the Customer relation Customer object
     *
     * @param callable(\CustomerQuery):\CustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Customer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerQuery The inner query object of the EXISTS statement
     */
    public function useCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT EXISTS query.
     *
     * @see useCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Customer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerQuery The inner query object of the IN statement
     */
    public function useInCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT IN query.
     *
     * @see useCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, ?string $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(SalesHistoryTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(SalesHistoryTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomerShipto(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerShipto');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CustomerShipto');
        }

        return $this;
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerShiptoQuery A secondary query class using the current class as primary query
     */
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @param callable(\CustomerShiptoQuery):\CustomerShiptoQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerShiptoQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerShiptoQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to CustomerShipto table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerShiptoQuery The inner query object of the EXISTS statement
     */
    public function useCustomerShiptoExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT EXISTS query.
     *
     * @see useCustomerShiptoExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerShiptoNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerShiptoQuery The inner query object of the IN statement
     */
    public function useInCustomerShiptoQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT IN query.
     *
     * @see useCustomerShiptoInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerShiptoQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesHistoryDetail object
     *
     * @param \SalesHistoryDetail|ObjectCollection $salesHistoryDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistoryDetail($salesHistoryDetail, ?string $comparison = null)
    {
        if ($salesHistoryDetail instanceof \SalesHistoryDetail) {
            $this
                ->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $salesHistoryDetail->getOehhnbr(), $comparison);

            return $this;
        } elseif ($salesHistoryDetail instanceof ObjectCollection) {
            $this
                ->useSalesHistoryDetailQuery()
                ->filterByPrimaryKeys($salesHistoryDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySalesHistoryDetail() only accepts arguments of type \SalesHistoryDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistoryDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistoryDetail');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesHistoryDetail');
        }

        return $this;
    }

    /**
     * Use the SalesHistoryDetail relation SalesHistoryDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryDetailQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistoryDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistoryDetail', '\SalesHistoryDetailQuery');
    }

    /**
     * Use the SalesHistoryDetail relation SalesHistoryDetail object
     *
     * @param callable(\SalesHistoryDetailQuery):\SalesHistoryDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistoryDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryDetailQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useExistsQuery('SalesHistoryDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for a NOT EXISTS query.
     *
     * @see useSalesHistoryDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useExistsQuery('SalesHistoryDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryDetailQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useInQuery('SalesHistoryDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for a NOT IN query.
     *
     * @see useSalesHistoryDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useInQuery('SalesHistoryDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesOrderShipment object
     *
     * @param \SalesOrderShipment|ObjectCollection $salesOrderShipment the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrderShipment($salesOrderShipment, ?string $comparison = null)
    {
        if ($salesOrderShipment instanceof \SalesOrderShipment) {
            $this
                ->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $salesOrderShipment->getOehshnbr(), $comparison);

            return $this;
        } elseif ($salesOrderShipment instanceof ObjectCollection) {
            $this
                ->useSalesOrderShipmentQuery()
                ->filterByPrimaryKeys($salesOrderShipment->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySalesOrderShipment() only accepts arguments of type \SalesOrderShipment or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderShipment relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrderShipment(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderShipment');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesOrderShipment');
        }

        return $this;
    }

    /**
     * Use the SalesOrderShipment relation SalesOrderShipment object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderShipmentQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderShipmentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrderShipment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderShipment', '\SalesOrderShipmentQuery');
    }

    /**
     * Use the SalesOrderShipment relation SalesOrderShipment object
     *
     * @param callable(\SalesOrderShipmentQuery):\SalesOrderShipmentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderShipmentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderShipmentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrderShipment table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderShipmentQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderShipmentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderShipmentQuery */
        $q = $this->useExistsQuery('SalesOrderShipment', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrderShipment table for a NOT EXISTS query.
     *
     * @see useSalesOrderShipmentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderShipmentQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderShipmentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderShipmentQuery */
        $q = $this->useExistsQuery('SalesOrderShipment', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrderShipment table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderShipmentQuery The inner query object of the IN statement
     */
    public function useInSalesOrderShipmentQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderShipmentQuery */
        $q = $this->useInQuery('SalesOrderShipment', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrderShipment table for a NOT IN query.
     *
     * @see useSalesOrderShipmentInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderShipmentQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderShipmentQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderShipmentQuery */
        $q = $this->useInQuery('SalesOrderShipment', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesHistoryLotserial object
     *
     * @param \SalesHistoryLotserial|ObjectCollection $salesHistoryLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistoryLotserial($salesHistoryLotserial, ?string $comparison = null)
    {
        if ($salesHistoryLotserial instanceof \SalesHistoryLotserial) {
            $this
                ->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $salesHistoryLotserial->getOehhnbr(), $comparison);

            return $this;
        } elseif ($salesHistoryLotserial instanceof ObjectCollection) {
            $this
                ->useSalesHistoryLotserialQuery()
                ->filterByPrimaryKeys($salesHistoryLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySalesHistoryLotserial() only accepts arguments of type \SalesHistoryLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistoryLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistoryLotserial');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesHistoryLotserial');
        }

        return $this;
    }

    /**
     * Use the SalesHistoryLotserial relation SalesHistoryLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistoryLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistoryLotserial', '\SalesHistoryLotserialQuery');
    }

    /**
     * Use the SalesHistoryLotserial relation SalesHistoryLotserial object
     *
     * @param callable(\SalesHistoryLotserialQuery):\SalesHistoryLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useExistsQuery('SalesHistoryLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for a NOT EXISTS query.
     *
     * @see useSalesHistoryLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useExistsQuery('SalesHistoryLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useInQuery('SalesHistoryLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for a NOT IN query.
     *
     * @see useSalesHistoryLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useInQuery('SalesHistoryLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSalesHistory $salesHistory Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($salesHistory = null)
    {
        if ($salesHistory) {
            $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $salesHistory->getOehhnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_head_hist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesHistoryTableMap::clearInstancePool();
            SalesHistoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesHistoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesHistoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesHistoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
