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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_head_hist' table.
 *
 *
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
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode6($order = Criteria::ASC) Order by the OehhFrtTaxCode6 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt6($order = Criteria::ASC) Order by the OehhFrtTaxAmt6 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode7($order = Criteria::ASC) Order by the OehhFrtTaxCode7 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt7($order = Criteria::ASC) Order by the OehhFrtTaxAmt7 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode8($order = Criteria::ASC) Order by the OehhFrtTaxCode8 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt8($order = Criteria::ASC) Order by the OehhFrtTaxAmt8 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxcode9($order = Criteria::ASC) Order by the OehhFrtTaxCode9 column
 * @method     ChildSalesHistoryQuery orderByOehhfrttaxamt9($order = Criteria::ASC) Order by the OehhFrtTaxAmt9 column
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
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode6() Group by the OehhFrtTaxCode6 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt6() Group by the OehhFrtTaxAmt6 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode7() Group by the OehhFrtTaxCode7 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt7() Group by the OehhFrtTaxAmt7 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode8() Group by the OehhFrtTaxCode8 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt8() Group by the OehhFrtTaxAmt8 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxcode9() Group by the OehhFrtTaxCode9 column
 * @method     ChildSalesHistoryQuery groupByOehhfrttaxamt9() Group by the OehhFrtTaxAmt9 column
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
 * @method     ChildSalesHistory findOne(ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query
 * @method     ChildSalesHistory findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query, or a new ChildSalesHistory object populated from the query conditions when no match is found
 *
 * @method     ChildSalesHistory findOneByOehhnbr(int $OehhNbr) Return the first ChildSalesHistory filtered by the OehhNbr column
 * @method     ChildSalesHistory findOneByOehhyear(string $OehhYear) Return the first ChildSalesHistory filtered by the OehhYear column
 * @method     ChildSalesHistory findOneByOehhstat(string $OehhStat) Return the first ChildSalesHistory filtered by the OehhStat column
 * @method     ChildSalesHistory findOneByOehhhold(string $OehhHold) Return the first ChildSalesHistory filtered by the OehhHold column
 * @method     ChildSalesHistory findOneByArcucustid(string $ArcuCustId) Return the first ChildSalesHistory filtered by the ArcuCustId column
 * @method     ChildSalesHistory findOneByArstshipid(string $ArstShipId) Return the first ChildSalesHistory filtered by the ArstShipId column
 * @method     ChildSalesHistory findOneByOehhstname(string $OehhStName) Return the first ChildSalesHistory filtered by the OehhStName column
 * @method     ChildSalesHistory findOneByOehhstlastname(string $OehhStLastName) Return the first ChildSalesHistory filtered by the OehhStLastName column
 * @method     ChildSalesHistory findOneByOehhstfirstname(string $OehhStFirstName) Return the first ChildSalesHistory filtered by the OehhStFirstName column
 * @method     ChildSalesHistory findOneByOehhstadr1(string $OehhStAdr1) Return the first ChildSalesHistory filtered by the OehhStAdr1 column
 * @method     ChildSalesHistory findOneByOehhstadr2(string $OehhStAdr2) Return the first ChildSalesHistory filtered by the OehhStAdr2 column
 * @method     ChildSalesHistory findOneByOehhstadr3(string $OehhStAdr3) Return the first ChildSalesHistory filtered by the OehhStAdr3 column
 * @method     ChildSalesHistory findOneByOehhstctry(string $OehhStCtry) Return the first ChildSalesHistory filtered by the OehhStCtry column
 * @method     ChildSalesHistory findOneByOehhstcity(string $OehhStCity) Return the first ChildSalesHistory filtered by the OehhStCity column
 * @method     ChildSalesHistory findOneByOehhststat(string $OehhStStat) Return the first ChildSalesHistory filtered by the OehhStStat column
 * @method     ChildSalesHistory findOneByOehhstzipcode(string $OehhStZipCode) Return the first ChildSalesHistory filtered by the OehhStZipCode column
 * @method     ChildSalesHistory findOneByOehhcustpo(string $OehhCustPo) Return the first ChildSalesHistory filtered by the OehhCustPo column
 * @method     ChildSalesHistory findOneByOehhordrdate(string $OehhOrdrDate) Return the first ChildSalesHistory filtered by the OehhOrdrDate column
 * @method     ChildSalesHistory findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSalesHistory filtered by the ArtmTermCd column
 * @method     ChildSalesHistory findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSalesHistory filtered by the ArtbShipVia column
 * @method     ChildSalesHistory findOneByArininvnbr(string $ArinInvNbr) Return the first ChildSalesHistory filtered by the ArinInvNbr column
 * @method     ChildSalesHistory findOneByOehhinvdate(string $OehhInvDate) Return the first ChildSalesHistory filtered by the OehhInvDate column
 * @method     ChildSalesHistory findOneByOehhglpd(int $OehhGLPd) Return the first ChildSalesHistory filtered by the OehhGLPd column
 * @method     ChildSalesHistory findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSalesHistory filtered by the ArspSalePer1 column
 * @method     ChildSalesHistory findOneByOehhsp1pct(string $OehhSp1Pct) Return the first ChildSalesHistory filtered by the OehhSp1Pct column
 * @method     ChildSalesHistory findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSalesHistory filtered by the ArspSalePer2 column
 * @method     ChildSalesHistory findOneByOehhsp2pct(string $OehhSp2Pct) Return the first ChildSalesHistory filtered by the OehhSp2Pct column
 * @method     ChildSalesHistory findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSalesHistory filtered by the ArspSalePer3 column
 * @method     ChildSalesHistory findOneByOehhsp3pct(string $OehhSp3Pct) Return the first ChildSalesHistory filtered by the OehhSp3Pct column
 * @method     ChildSalesHistory findOneByOehhcntrnbr(int $OehhCntrNbr) Return the first ChildSalesHistory filtered by the OehhCntrNbr column
 * @method     ChildSalesHistory findOneByOehhwibatch(int $OehhWiBatch) Return the first ChildSalesHistory filtered by the OehhWiBatch column
 * @method     ChildSalesHistory findOneByOehhdroprelhold(string $OehhDropRelHold) Return the first ChildSalesHistory filtered by the OehhDropRelHold column
 * @method     ChildSalesHistory findOneByOehhtaxsub(string $OehhTaxSub) Return the first ChildSalesHistory filtered by the OehhTaxSub column
 * @method     ChildSalesHistory findOneByOehhnontaxsub(string $OehhNonTaxSub) Return the first ChildSalesHistory filtered by the OehhNonTaxSub column
 * @method     ChildSalesHistory findOneByOehhtaxtot(string $OehhTaxTot) Return the first ChildSalesHistory filtered by the OehhTaxTot column
 * @method     ChildSalesHistory findOneByOehhfrttot(string $OehhFrtTot) Return the first ChildSalesHistory filtered by the OehhFrtTot column
 * @method     ChildSalesHistory findOneByOehhmisctot(string $OehhMiscTot) Return the first ChildSalesHistory filtered by the OehhMiscTot column
 * @method     ChildSalesHistory findOneByOehhordrtot(string $OehhOrdrTot) Return the first ChildSalesHistory filtered by the OehhOrdrTot column
 * @method     ChildSalesHistory findOneByOehhcosttot(string $OehhCostTot) Return the first ChildSalesHistory filtered by the OehhCostTot column
 * @method     ChildSalesHistory findOneByOehhspcommlock(string $OehhSpCommLock) Return the first ChildSalesHistory filtered by the OehhSpCommLock column
 * @method     ChildSalesHistory findOneByOehhtakendate(string $OehhTakenDate) Return the first ChildSalesHistory filtered by the OehhTakenDate column
 * @method     ChildSalesHistory findOneByOehhtakentime(string $OehhTakenTime) Return the first ChildSalesHistory filtered by the OehhTakenTime column
 * @method     ChildSalesHistory findOneByOehhpickdate(string $OehhPickDate) Return the first ChildSalesHistory filtered by the OehhPickDate column
 * @method     ChildSalesHistory findOneByOehhpicktime(string $OehhPickTime) Return the first ChildSalesHistory filtered by the OehhPickTime column
 * @method     ChildSalesHistory findOneByOehhpackdate(string $OehhPackDate) Return the first ChildSalesHistory filtered by the OehhPackDate column
 * @method     ChildSalesHistory findOneByOehhpacktime(string $OehhPackTime) Return the first ChildSalesHistory filtered by the OehhPackTime column
 * @method     ChildSalesHistory findOneByOehhverifydate(string $OehhVerifyDate) Return the first ChildSalesHistory filtered by the OehhVerifyDate column
 * @method     ChildSalesHistory findOneByOehhverifytime(string $OehhVerifyTime) Return the first ChildSalesHistory filtered by the OehhVerifyTime column
 * @method     ChildSalesHistory findOneByOehhcreditmemo(string $OehhCreditMemo) Return the first ChildSalesHistory filtered by the OehhCreditMemo column
 * @method     ChildSalesHistory findOneByOehhbookedyn(string $OehhBookedYn) Return the first ChildSalesHistory filtered by the OehhBookedYn column
 * @method     ChildSalesHistory findOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSalesHistory filtered by the IntbWhseOrig column
 * @method     ChildSalesHistory findOneByOehhbtstat(string $OehhBtStat) Return the first ChildSalesHistory filtered by the OehhBtStat column
 * @method     ChildSalesHistory findOneByOehhshipcomp(string $OehhShipComp) Return the first ChildSalesHistory filtered by the OehhShipComp column
 * @method     ChildSalesHistory findOneByOehhcwoflag(string $OehhCwoFlag) Return the first ChildSalesHistory filtered by the OehhCwoFlag column
 * @method     ChildSalesHistory findOneByOehhdivision(string $OehhDivision) Return the first ChildSalesHistory filtered by the OehhDivision column
 * @method     ChildSalesHistory findOneByOehhtakencode(string $OehhTakenCode) Return the first ChildSalesHistory filtered by the OehhTakenCode column
 * @method     ChildSalesHistory findOneByOehhpickcode(string $OehhPickCode) Return the first ChildSalesHistory filtered by the OehhPickCode column
 * @method     ChildSalesHistory findOneByOehhpackcode(string $OehhPackCode) Return the first ChildSalesHistory filtered by the OehhPackCode column
 * @method     ChildSalesHistory findOneByOehhverifycode(string $OehhVerifyCode) Return the first ChildSalesHistory filtered by the OehhVerifyCode column
 * @method     ChildSalesHistory findOneByOehhtotdisc(string $OehhTotDisc) Return the first ChildSalesHistory filtered by the OehhTotDisc column
 * @method     ChildSalesHistory findOneByOehhedirefnbrqual(string $OehhEdiRefNbrQual) Return the first ChildSalesHistory filtered by the OehhEdiRefNbrQual column
 * @method     ChildSalesHistory findOneByOehhusercode1(string $OehhUserCode1) Return the first ChildSalesHistory filtered by the OehhUserCode1 column
 * @method     ChildSalesHistory findOneByOehhusercode2(string $OehhUserCode2) Return the first ChildSalesHistory filtered by the OehhUserCode2 column
 * @method     ChildSalesHistory findOneByOehhusercode3(string $OehhUserCode3) Return the first ChildSalesHistory filtered by the OehhUserCode3 column
 * @method     ChildSalesHistory findOneByOehhusercode4(string $OehhUserCode4) Return the first ChildSalesHistory filtered by the OehhUserCode4 column
 * @method     ChildSalesHistory findOneByOehhexchctry(string $OehhExchCtry) Return the first ChildSalesHistory filtered by the OehhExchCtry column
 * @method     ChildSalesHistory findOneByOehhexchrate(string $OehhExchRate) Return the first ChildSalesHistory filtered by the OehhExchRate column
 * @method     ChildSalesHistory findOneByOehhwghttot(string $OehhWghtTot) Return the first ChildSalesHistory filtered by the OehhWghtTot column
 * @method     ChildSalesHistory findOneByOehhwghtoride(string $OehhWghtOride) Return the first ChildSalesHistory filtered by the OehhWghtOride column
 * @method     ChildSalesHistory findOneByOehhccinfo(string $OehhCcInfo) Return the first ChildSalesHistory filtered by the OehhCcInfo column
 * @method     ChildSalesHistory findOneByOehhboxcount(int $OehhBoxCount) Return the first ChildSalesHistory filtered by the OehhBoxCount column
 * @method     ChildSalesHistory findOneByOehhrqstdate(string $OehhRqstDate) Return the first ChildSalesHistory filtered by the OehhRqstDate column
 * @method     ChildSalesHistory findOneByOehhcancdate(string $OehhCancDate) Return the first ChildSalesHistory filtered by the OehhCancDate column
 * @method     ChildSalesHistory findOneByOehhcrntuser(string $OehhCrntUser) Return the first ChildSalesHistory filtered by the OehhCrntUser column
 * @method     ChildSalesHistory findOneByOehhreleasenbr(string $OehhReleaseNbr) Return the first ChildSalesHistory filtered by the OehhReleaseNbr column
 * @method     ChildSalesHistory findOneByIntbwhse(string $IntbWhse) Return the first ChildSalesHistory filtered by the IntbWhse column
 * @method     ChildSalesHistory findOneByOehhbordbuilddate(string $OehhBordBuildDate) Return the first ChildSalesHistory filtered by the OehhBordBuildDate column
 * @method     ChildSalesHistory findOneByOehhdeptcode(string $OehhDeptCode) Return the first ChildSalesHistory filtered by the OehhDeptCode column
 * @method     ChildSalesHistory findOneByOehhfrtinentered(string $OehhFrtInEntered) Return the first ChildSalesHistory filtered by the OehhFrtInEntered column
 * @method     ChildSalesHistory findOneByOehhdropshipentered(string $OehhDropShipEntered) Return the first ChildSalesHistory filtered by the OehhDropShipEntered column
 * @method     ChildSalesHistory findOneByOehherflag(string $OehhErFlag) Return the first ChildSalesHistory filtered by the OehhErFlag column
 * @method     ChildSalesHistory findOneByOehhfrtin(string $OehhFrtIn) Return the first ChildSalesHistory filtered by the OehhFrtIn column
 * @method     ChildSalesHistory findOneByOehhdropship(string $OehhDropShip) Return the first ChildSalesHistory filtered by the OehhDropShip column
 * @method     ChildSalesHistory findOneByOehhminorder(string $OehhMinOrder) Return the first ChildSalesHistory filtered by the OehhMinOrder column
 * @method     ChildSalesHistory findOneByOehhcontractterms(string $OehhContractTerms) Return the first ChildSalesHistory filtered by the OehhContractTerms column
 * @method     ChildSalesHistory findOneByOehhdropshipbilled(string $OehhDropShipBilled) Return the first ChildSalesHistory filtered by the OehhDropShipBilled column
 * @method     ChildSalesHistory findOneByOehhordtyp(string $OehhOrdTyp) Return the first ChildSalesHistory filtered by the OehhOrdTyp column
 * @method     ChildSalesHistory findOneByOehhtracknbr(string $OehhTrackNbr) Return the first ChildSalesHistory filtered by the OehhTrackNbr column
 * @method     ChildSalesHistory findOneByOehhsource(string $OehhSource) Return the first ChildSalesHistory filtered by the OehhSource column
 * @method     ChildSalesHistory findOneByOehhccaprv(string $OehhCcAprv) Return the first ChildSalesHistory filtered by the OehhCcAprv column
 * @method     ChildSalesHistory findOneByOehhpickfmattype(string $OehhPickFmatType) Return the first ChildSalesHistory filtered by the OehhPickFmatType column
 * @method     ChildSalesHistory findOneByOehhinvcfmattype(string $OehhInvcFmatType) Return the first ChildSalesHistory filtered by the OehhInvcFmatType column
 * @method     ChildSalesHistory findOneByOehhcashamt(string $OehhCashAmt) Return the first ChildSalesHistory filtered by the OehhCashAmt column
 * @method     ChildSalesHistory findOneByOehhcheckamt(string $OehhCheckAmt) Return the first ChildSalesHistory filtered by the OehhCheckAmt column
 * @method     ChildSalesHistory findOneByOehhchecknbr(string $OehhCheckNbr) Return the first ChildSalesHistory filtered by the OehhCheckNbr column
 * @method     ChildSalesHistory findOneByOehhdepositamt(string $OehhDepositAmt) Return the first ChildSalesHistory filtered by the OehhDepositAmt column
 * @method     ChildSalesHistory findOneByOehhdepositnbr(string $OehhDepositNbr) Return the first ChildSalesHistory filtered by the OehhDepositNbr column
 * @method     ChildSalesHistory findOneByOehhccamt(string $OehhCcAmt) Return the first ChildSalesHistory filtered by the OehhCcAmt column
 * @method     ChildSalesHistory findOneByOehhotaxsub(string $OehhOTaxSub) Return the first ChildSalesHistory filtered by the OehhOTaxSub column
 * @method     ChildSalesHistory findOneByOehhonontaxsub(string $OehhONonTaxSub) Return the first ChildSalesHistory filtered by the OehhONonTaxSub column
 * @method     ChildSalesHistory findOneByOehhotaxtot(string $OehhOTaxTot) Return the first ChildSalesHistory filtered by the OehhOTaxTot column
 * @method     ChildSalesHistory findOneByOehhoordrtot(string $OehhOOrdrTot) Return the first ChildSalesHistory filtered by the OehhOOrdrTot column
 * @method     ChildSalesHistory findOneByOehhpickprintdate(string $OehhPickPrintDate) Return the first ChildSalesHistory filtered by the OehhPickPrintDate column
 * @method     ChildSalesHistory findOneByOehhpickprinttime(string $OehhPickPrintTime) Return the first ChildSalesHistory filtered by the OehhPickPrintTime column
 * @method     ChildSalesHistory findOneByOehhcont(string $OehhCont) Return the first ChildSalesHistory filtered by the OehhCont column
 * @method     ChildSalesHistory findOneByOehhcontteleintl(string $OehhContTeleIntl) Return the first ChildSalesHistory filtered by the OehhContTeleIntl column
 * @method     ChildSalesHistory findOneByOehhconttelenbr(string $OehhContTeleNbr) Return the first ChildSalesHistory filtered by the OehhContTeleNbr column
 * @method     ChildSalesHistory findOneByOehhcontteleext(string $OehhContTeleExt) Return the first ChildSalesHistory filtered by the OehhContTeleExt column
 * @method     ChildSalesHistory findOneByOehhcontfaxintl(string $OehhContFaxIntl) Return the first ChildSalesHistory filtered by the OehhContFaxIntl column
 * @method     ChildSalesHistory findOneByOehhcontfaxnbr(string $OehhContFaxNbr) Return the first ChildSalesHistory filtered by the OehhContFaxNbr column
 * @method     ChildSalesHistory findOneByOehhshipacct(string $OehhShipAcct) Return the first ChildSalesHistory filtered by the OehhShipAcct column
 * @method     ChildSalesHistory findOneByOehhchgdue(string $OehhChgDue) Return the first ChildSalesHistory filtered by the OehhChgDue column
 * @method     ChildSalesHistory findOneByOehhaddlpricdisc(string $OehhAddlPricDisc) Return the first ChildSalesHistory filtered by the OehhAddlPricDisc column
 * @method     ChildSalesHistory findOneByOehhallship(string $OehhAllShip) Return the first ChildSalesHistory filtered by the OehhAllShip column
 * @method     ChildSalesHistory findOneByOehhqtyorderamt(string $OehhQtyOrderAmt) Return the first ChildSalesHistory filtered by the OehhQtyOrderAmt column
 * @method     ChildSalesHistory findOneByOehhcreditapplied(string $OehhCreditApplied) Return the first ChildSalesHistory filtered by the OehhCreditApplied column
 * @method     ChildSalesHistory findOneByOehhinvcprintdate(string $OehhInvcPrintDate) Return the first ChildSalesHistory filtered by the OehhInvcPrintDate column
 * @method     ChildSalesHistory findOneByOehhinvcprinttime(string $OehhInvcPrintTime) Return the first ChildSalesHistory filtered by the OehhInvcPrintTime column
 * @method     ChildSalesHistory findOneByOehhdiscfrt(string $OehhDiscFrt) Return the first ChildSalesHistory filtered by the OehhDiscFrt column
 * @method     ChildSalesHistory findOneByOehhorideshipcomp(string $OehhOrideShipComp) Return the first ChildSalesHistory filtered by the OehhOrideShipComp column
 * @method     ChildSalesHistory findOneByOehhcontemail(string $OehhContEmail) Return the first ChildSalesHistory filtered by the OehhContEmail column
 * @method     ChildSalesHistory findOneByOehhmanualfrt(string $OehhManualFrt) Return the first ChildSalesHistory filtered by the OehhManualFrt column
 * @method     ChildSalesHistory findOneByOehhinternalfrt(string $OehhInternalFrt) Return the first ChildSalesHistory filtered by the OehhInternalFrt column
 * @method     ChildSalesHistory findOneByOehhfrtcost(string $OehhFrtCost) Return the first ChildSalesHistory filtered by the OehhFrtCost column
 * @method     ChildSalesHistory findOneByOehhroute(string $OehhRoute) Return the first ChildSalesHistory filtered by the OehhRoute column
 * @method     ChildSalesHistory findOneByOehhrouteseq(int $OehhRouteSeq) Return the first ChildSalesHistory filtered by the OehhRouteSeq column
 * @method     ChildSalesHistory findOneByOehhedi855sent(string $OehhEdi855Sent) Return the first ChildSalesHistory filtered by the OehhEdi855Sent column
 * @method     ChildSalesHistory findOneByOehhfrt3rdparty(string $OehhFrt3rdParty) Return the first ChildSalesHistory filtered by the OehhFrt3rdParty column
 * @method     ChildSalesHistory findOneByOehhfob(string $OehhFob) Return the first ChildSalesHistory filtered by the OehhFob column
 * @method     ChildSalesHistory findOneByOehhconfirmimagyn(string $OehhConfirmImagYn) Return the first ChildSalesHistory filtered by the OehhConfirmImagYn column
 * @method     ChildSalesHistory findOneByOehhindustconform(string $OehhIndustConform) Return the first ChildSalesHistory filtered by the OehhIndustConform column
 * @method     ChildSalesHistory findOneByOehhcstkconsign(string $OehhCstkConsign) Return the first ChildSalesHistory filtered by the OehhCstkConsign column
 * @method     ChildSalesHistory findOneByOehhlmdelaycapsent(string $OehhLmDelayCapSent) Return the first ChildSalesHistory filtered by the OehhLmDelayCapSent column
 * @method     ChildSalesHistory findOneByOehhmfgid(string $OehhMfgId) Return the first ChildSalesHistory filtered by the OehhMfgId column
 * @method     ChildSalesHistory findOneByOehhstoreid(string $OehhStoreId) Return the first ChildSalesHistory filtered by the OehhStoreId column
 * @method     ChildSalesHistory findOneByOehhpickqueue(string $OehhPickQueue) Return the first ChildSalesHistory filtered by the OehhPickQueue column
 * @method     ChildSalesHistory findOneByOehharrvdate(string $OehhArrvDate) Return the first ChildSalesHistory filtered by the OehhArrvDate column
 * @method     ChildSalesHistory findOneByOehhsurchgstat(string $OehhSurchgStat) Return the first ChildSalesHistory filtered by the OehhSurchgStat column
 * @method     ChildSalesHistory findOneByOehhfrtgrup(string $OehhFrtGrup) Return the first ChildSalesHistory filtered by the OehhFrtGrup column
 * @method     ChildSalesHistory findOneByOehhcommoride(string $OehhCommOride) Return the first ChildSalesHistory filtered by the OehhCommOride column
 * @method     ChildSalesHistory findOneByOehhchrgsplt(string $OehhChrgSplt) Return the first ChildSalesHistory filtered by the OehhChrgSplt column
 * @method     ChildSalesHistory findOneByOehhacccaprv(string $OehhAcCcAprv) Return the first ChildSalesHistory filtered by the OehhAcCcAprv column
 * @method     ChildSalesHistory findOneByOehhorigordrnbr(string $OehhOrigOrdrNbr) Return the first ChildSalesHistory filtered by the OehhOrigOrdrNbr column
 * @method     ChildSalesHistory findOneByOehhpostdate(string $OehhPostDate) Return the first ChildSalesHistory filtered by the OehhPostDate column
 * @method     ChildSalesHistory findOneByOehhdiscdate1(string $OehhDiscDate1) Return the first ChildSalesHistory filtered by the OehhDiscDate1 column
 * @method     ChildSalesHistory findOneByOehhdiscpct1(string $OehhDiscPct1) Return the first ChildSalesHistory filtered by the OehhDiscPct1 column
 * @method     ChildSalesHistory findOneByOehhduedate1(string $OehhDueDate1) Return the first ChildSalesHistory filtered by the OehhDueDate1 column
 * @method     ChildSalesHistory findOneByOehhdueamt1(string $OehhDueAmt1) Return the first ChildSalesHistory filtered by the OehhDueAmt1 column
 * @method     ChildSalesHistory findOneByOehhduepct1(string $OehhDuePct1) Return the first ChildSalesHistory filtered by the OehhDuePct1 column
 * @method     ChildSalesHistory findOneByOehhdiscdate2(string $OehhDiscDate2) Return the first ChildSalesHistory filtered by the OehhDiscDate2 column
 * @method     ChildSalesHistory findOneByOehhdiscpct2(string $OehhDiscPct2) Return the first ChildSalesHistory filtered by the OehhDiscPct2 column
 * @method     ChildSalesHistory findOneByOehhduedate2(string $OehhDueDate2) Return the first ChildSalesHistory filtered by the OehhDueDate2 column
 * @method     ChildSalesHistory findOneByOehhdueamt2(string $OehhDueAmt2) Return the first ChildSalesHistory filtered by the OehhDueAmt2 column
 * @method     ChildSalesHistory findOneByOehhduepct2(string $OehhDuePct2) Return the first ChildSalesHistory filtered by the OehhDuePct2 column
 * @method     ChildSalesHistory findOneByOehhdiscdate3(string $OehhDiscDate3) Return the first ChildSalesHistory filtered by the OehhDiscDate3 column
 * @method     ChildSalesHistory findOneByOehhdiscpct3(string $OehhDiscPct3) Return the first ChildSalesHistory filtered by the OehhDiscPct3 column
 * @method     ChildSalesHistory findOneByOehhduedate3(string $OehhDueDate3) Return the first ChildSalesHistory filtered by the OehhDueDate3 column
 * @method     ChildSalesHistory findOneByOehhdueamt3(string $OehhDueAmt3) Return the first ChildSalesHistory filtered by the OehhDueAmt3 column
 * @method     ChildSalesHistory findOneByOehhduepct3(string $OehhDuePct3) Return the first ChildSalesHistory filtered by the OehhDuePct3 column
 * @method     ChildSalesHistory findOneByOehhdiscdate4(string $OehhDiscDate4) Return the first ChildSalesHistory filtered by the OehhDiscDate4 column
 * @method     ChildSalesHistory findOneByOehhdiscpct4(string $OehhDiscPct4) Return the first ChildSalesHistory filtered by the OehhDiscPct4 column
 * @method     ChildSalesHistory findOneByOehhduedate4(string $OehhDueDate4) Return the first ChildSalesHistory filtered by the OehhDueDate4 column
 * @method     ChildSalesHistory findOneByOehhdueamt4(string $OehhDueAmt4) Return the first ChildSalesHistory filtered by the OehhDueAmt4 column
 * @method     ChildSalesHistory findOneByOehhduepct4(string $OehhDuePct4) Return the first ChildSalesHistory filtered by the OehhDuePct4 column
 * @method     ChildSalesHistory findOneByOehhdiscdate5(string $OehhDiscDate5) Return the first ChildSalesHistory filtered by the OehhDiscDate5 column
 * @method     ChildSalesHistory findOneByOehhdiscpct5(string $OehhDiscPct5) Return the first ChildSalesHistory filtered by the OehhDiscPct5 column
 * @method     ChildSalesHistory findOneByOehhduedate5(string $OehhDueDate5) Return the first ChildSalesHistory filtered by the OehhDueDate5 column
 * @method     ChildSalesHistory findOneByOehhdueamt5(string $OehhDueAmt5) Return the first ChildSalesHistory filtered by the OehhDueAmt5 column
 * @method     ChildSalesHistory findOneByOehhduepct5(string $OehhDuePct5) Return the first ChildSalesHistory filtered by the OehhDuePct5 column
 * @method     ChildSalesHistory findOneByOehhdiscdate6(string $OehhDiscDate6) Return the first ChildSalesHistory filtered by the OehhDiscDate6 column
 * @method     ChildSalesHistory findOneByOehhdiscpct6(string $OehhDiscPct6) Return the first ChildSalesHistory filtered by the OehhDiscPct6 column
 * @method     ChildSalesHistory findOneByOehhduedate6(string $OehhDueDate6) Return the first ChildSalesHistory filtered by the OehhDueDate6 column
 * @method     ChildSalesHistory findOneByOehhdueamt6(string $OehhDueAmt6) Return the first ChildSalesHistory filtered by the OehhDueAmt6 column
 * @method     ChildSalesHistory findOneByOehhduepct6(string $OehhDuePct6) Return the first ChildSalesHistory filtered by the OehhDuePct6 column
 * @method     ChildSalesHistory findOneByOehhrefnbr(string $OehhRefNbr) Return the first ChildSalesHistory filtered by the OehhRefNbr column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode1(string $OehhFrtTaxCode1) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode1 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt1(string $OehhFrtTaxAmt1) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt1 column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode2(string $OehhFrtTaxCode2) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode2 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt2(string $OehhFrtTaxAmt2) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt2 column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode3(string $OehhFrtTaxCode3) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode3 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt3(string $OehhFrtTaxAmt3) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt3 column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode4(string $OehhFrtTaxCode4) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode4 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt4(string $OehhFrtTaxAmt4) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt4 column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode5(string $OehhFrtTaxCode5) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode5 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt5(string $OehhFrtTaxAmt5) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt5 column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode6(string $OehhFrtTaxCode6) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode6 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt6(string $OehhFrtTaxAmt6) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt6 column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode7(string $OehhFrtTaxCode7) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode7 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt7(string $OehhFrtTaxAmt7) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt7 column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode8(string $OehhFrtTaxCode8) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode8 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt8(string $OehhFrtTaxAmt8) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt8 column
 * @method     ChildSalesHistory findOneByOehhfrttaxcode9(string $OehhFrtTaxCode9) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode9 column
 * @method     ChildSalesHistory findOneByOehhfrttaxamt9(string $OehhFrtTaxAmt9) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt9 column
 * @method     ChildSalesHistory findOneByOehhacprognbr(string $OehhAcProgNbr) Return the first ChildSalesHistory filtered by the OehhAcProgNbr column
 * @method     ChildSalesHistory findOneByOehhacprogexpdate(string $OehhAcProgExpDate) Return the first ChildSalesHistory filtered by the OehhAcProgExpDate column
 * @method     ChildSalesHistory findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistory filtered by the DateUpdtd column
 * @method     ChildSalesHistory findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistory filtered by the TimeUpdtd column
 * @method     ChildSalesHistory findOneByDummy(string $dummy) Return the first ChildSalesHistory filtered by the dummy column *

 * @method     ChildSalesHistory requirePk($key, ConnectionInterface $con = null) Return the ChildSalesHistory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOne(ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode6(string $OehhFrtTaxCode6) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt6(string $OehhFrtTaxAmt6) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode7(string $OehhFrtTaxCode7) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt7(string $OehhFrtTaxAmt7) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode8(string $OehhFrtTaxCode8) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt8(string $OehhFrtTaxAmt8) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxcode9(string $OehhFrtTaxCode9) Return the first ChildSalesHistory filtered by the OehhFrtTaxCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhfrttaxamt9(string $OehhFrtTaxAmt9) Return the first ChildSalesHistory filtered by the OehhFrtTaxAmt9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhacprognbr(string $OehhAcProgNbr) Return the first ChildSalesHistory filtered by the OehhAcProgNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOehhacprogexpdate(string $OehhAcProgExpDate) Return the first ChildSalesHistory filtered by the OehhAcProgExpDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistory filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistory filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByDummy(string $dummy) Return the first ChildSalesHistory filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistory[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesHistory objects based on current ModelCriteria
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhnbr(int $OehhNbr) Return ChildSalesHistory objects filtered by the OehhNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhyear(string $OehhYear) Return ChildSalesHistory objects filtered by the OehhYear column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstat(string $OehhStat) Return ChildSalesHistory objects filtered by the OehhStat column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhhold(string $OehhHold) Return ChildSalesHistory objects filtered by the OehhHold column
 * @method     ChildSalesHistory[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildSalesHistory objects filtered by the ArcuCustId column
 * @method     ChildSalesHistory[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildSalesHistory objects filtered by the ArstShipId column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstname(string $OehhStName) Return ChildSalesHistory objects filtered by the OehhStName column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstlastname(string $OehhStLastName) Return ChildSalesHistory objects filtered by the OehhStLastName column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstfirstname(string $OehhStFirstName) Return ChildSalesHistory objects filtered by the OehhStFirstName column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstadr1(string $OehhStAdr1) Return ChildSalesHistory objects filtered by the OehhStAdr1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstadr2(string $OehhStAdr2) Return ChildSalesHistory objects filtered by the OehhStAdr2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstadr3(string $OehhStAdr3) Return ChildSalesHistory objects filtered by the OehhStAdr3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstctry(string $OehhStCtry) Return ChildSalesHistory objects filtered by the OehhStCtry column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstcity(string $OehhStCity) Return ChildSalesHistory objects filtered by the OehhStCity column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhststat(string $OehhStStat) Return ChildSalesHistory objects filtered by the OehhStStat column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstzipcode(string $OehhStZipCode) Return ChildSalesHistory objects filtered by the OehhStZipCode column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcustpo(string $OehhCustPo) Return ChildSalesHistory objects filtered by the OehhCustPo column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhordrdate(string $OehhOrdrDate) Return ChildSalesHistory objects filtered by the OehhOrdrDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildSalesHistory objects filtered by the ArtmTermCd column
 * @method     ChildSalesHistory[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildSalesHistory objects filtered by the ArtbShipVia column
 * @method     ChildSalesHistory[]|ObjectCollection findByArininvnbr(string $ArinInvNbr) Return ChildSalesHistory objects filtered by the ArinInvNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhinvdate(string $OehhInvDate) Return ChildSalesHistory objects filtered by the OehhInvDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhglpd(int $OehhGLPd) Return ChildSalesHistory objects filtered by the OehhGLPd column
 * @method     ChildSalesHistory[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildSalesHistory objects filtered by the ArspSalePer1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhsp1pct(string $OehhSp1Pct) Return ChildSalesHistory objects filtered by the OehhSp1Pct column
 * @method     ChildSalesHistory[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildSalesHistory objects filtered by the ArspSalePer2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhsp2pct(string $OehhSp2Pct) Return ChildSalesHistory objects filtered by the OehhSp2Pct column
 * @method     ChildSalesHistory[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildSalesHistory objects filtered by the ArspSalePer3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhsp3pct(string $OehhSp3Pct) Return ChildSalesHistory objects filtered by the OehhSp3Pct column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcntrnbr(int $OehhCntrNbr) Return ChildSalesHistory objects filtered by the OehhCntrNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhwibatch(int $OehhWiBatch) Return ChildSalesHistory objects filtered by the OehhWiBatch column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdroprelhold(string $OehhDropRelHold) Return ChildSalesHistory objects filtered by the OehhDropRelHold column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhtaxsub(string $OehhTaxSub) Return ChildSalesHistory objects filtered by the OehhTaxSub column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhnontaxsub(string $OehhNonTaxSub) Return ChildSalesHistory objects filtered by the OehhNonTaxSub column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhtaxtot(string $OehhTaxTot) Return ChildSalesHistory objects filtered by the OehhTaxTot column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttot(string $OehhFrtTot) Return ChildSalesHistory objects filtered by the OehhFrtTot column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhmisctot(string $OehhMiscTot) Return ChildSalesHistory objects filtered by the OehhMiscTot column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhordrtot(string $OehhOrdrTot) Return ChildSalesHistory objects filtered by the OehhOrdrTot column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcosttot(string $OehhCostTot) Return ChildSalesHistory objects filtered by the OehhCostTot column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhspcommlock(string $OehhSpCommLock) Return ChildSalesHistory objects filtered by the OehhSpCommLock column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhtakendate(string $OehhTakenDate) Return ChildSalesHistory objects filtered by the OehhTakenDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhtakentime(string $OehhTakenTime) Return ChildSalesHistory objects filtered by the OehhTakenTime column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpickdate(string $OehhPickDate) Return ChildSalesHistory objects filtered by the OehhPickDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpicktime(string $OehhPickTime) Return ChildSalesHistory objects filtered by the OehhPickTime column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpackdate(string $OehhPackDate) Return ChildSalesHistory objects filtered by the OehhPackDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpacktime(string $OehhPackTime) Return ChildSalesHistory objects filtered by the OehhPackTime column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhverifydate(string $OehhVerifyDate) Return ChildSalesHistory objects filtered by the OehhVerifyDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhverifytime(string $OehhVerifyTime) Return ChildSalesHistory objects filtered by the OehhVerifyTime column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcreditmemo(string $OehhCreditMemo) Return ChildSalesHistory objects filtered by the OehhCreditMemo column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhbookedyn(string $OehhBookedYn) Return ChildSalesHistory objects filtered by the OehhBookedYn column
 * @method     ChildSalesHistory[]|ObjectCollection findByIntbwhseorig(string $IntbWhseOrig) Return ChildSalesHistory objects filtered by the IntbWhseOrig column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhbtstat(string $OehhBtStat) Return ChildSalesHistory objects filtered by the OehhBtStat column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhshipcomp(string $OehhShipComp) Return ChildSalesHistory objects filtered by the OehhShipComp column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcwoflag(string $OehhCwoFlag) Return ChildSalesHistory objects filtered by the OehhCwoFlag column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdivision(string $OehhDivision) Return ChildSalesHistory objects filtered by the OehhDivision column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhtakencode(string $OehhTakenCode) Return ChildSalesHistory objects filtered by the OehhTakenCode column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpickcode(string $OehhPickCode) Return ChildSalesHistory objects filtered by the OehhPickCode column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpackcode(string $OehhPackCode) Return ChildSalesHistory objects filtered by the OehhPackCode column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhverifycode(string $OehhVerifyCode) Return ChildSalesHistory objects filtered by the OehhVerifyCode column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhtotdisc(string $OehhTotDisc) Return ChildSalesHistory objects filtered by the OehhTotDisc column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhedirefnbrqual(string $OehhEdiRefNbrQual) Return ChildSalesHistory objects filtered by the OehhEdiRefNbrQual column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhusercode1(string $OehhUserCode1) Return ChildSalesHistory objects filtered by the OehhUserCode1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhusercode2(string $OehhUserCode2) Return ChildSalesHistory objects filtered by the OehhUserCode2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhusercode3(string $OehhUserCode3) Return ChildSalesHistory objects filtered by the OehhUserCode3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhusercode4(string $OehhUserCode4) Return ChildSalesHistory objects filtered by the OehhUserCode4 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhexchctry(string $OehhExchCtry) Return ChildSalesHistory objects filtered by the OehhExchCtry column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhexchrate(string $OehhExchRate) Return ChildSalesHistory objects filtered by the OehhExchRate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhwghttot(string $OehhWghtTot) Return ChildSalesHistory objects filtered by the OehhWghtTot column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhwghtoride(string $OehhWghtOride) Return ChildSalesHistory objects filtered by the OehhWghtOride column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhccinfo(string $OehhCcInfo) Return ChildSalesHistory objects filtered by the OehhCcInfo column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhboxcount(int $OehhBoxCount) Return ChildSalesHistory objects filtered by the OehhBoxCount column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhrqstdate(string $OehhRqstDate) Return ChildSalesHistory objects filtered by the OehhRqstDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcancdate(string $OehhCancDate) Return ChildSalesHistory objects filtered by the OehhCancDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcrntuser(string $OehhCrntUser) Return ChildSalesHistory objects filtered by the OehhCrntUser column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhreleasenbr(string $OehhReleaseNbr) Return ChildSalesHistory objects filtered by the OehhReleaseNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildSalesHistory objects filtered by the IntbWhse column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhbordbuilddate(string $OehhBordBuildDate) Return ChildSalesHistory objects filtered by the OehhBordBuildDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdeptcode(string $OehhDeptCode) Return ChildSalesHistory objects filtered by the OehhDeptCode column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrtinentered(string $OehhFrtInEntered) Return ChildSalesHistory objects filtered by the OehhFrtInEntered column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdropshipentered(string $OehhDropShipEntered) Return ChildSalesHistory objects filtered by the OehhDropShipEntered column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehherflag(string $OehhErFlag) Return ChildSalesHistory objects filtered by the OehhErFlag column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrtin(string $OehhFrtIn) Return ChildSalesHistory objects filtered by the OehhFrtIn column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdropship(string $OehhDropShip) Return ChildSalesHistory objects filtered by the OehhDropShip column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhminorder(string $OehhMinOrder) Return ChildSalesHistory objects filtered by the OehhMinOrder column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcontractterms(string $OehhContractTerms) Return ChildSalesHistory objects filtered by the OehhContractTerms column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdropshipbilled(string $OehhDropShipBilled) Return ChildSalesHistory objects filtered by the OehhDropShipBilled column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhordtyp(string $OehhOrdTyp) Return ChildSalesHistory objects filtered by the OehhOrdTyp column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhtracknbr(string $OehhTrackNbr) Return ChildSalesHistory objects filtered by the OehhTrackNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhsource(string $OehhSource) Return ChildSalesHistory objects filtered by the OehhSource column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhccaprv(string $OehhCcAprv) Return ChildSalesHistory objects filtered by the OehhCcAprv column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpickfmattype(string $OehhPickFmatType) Return ChildSalesHistory objects filtered by the OehhPickFmatType column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhinvcfmattype(string $OehhInvcFmatType) Return ChildSalesHistory objects filtered by the OehhInvcFmatType column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcashamt(string $OehhCashAmt) Return ChildSalesHistory objects filtered by the OehhCashAmt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcheckamt(string $OehhCheckAmt) Return ChildSalesHistory objects filtered by the OehhCheckAmt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhchecknbr(string $OehhCheckNbr) Return ChildSalesHistory objects filtered by the OehhCheckNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdepositamt(string $OehhDepositAmt) Return ChildSalesHistory objects filtered by the OehhDepositAmt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdepositnbr(string $OehhDepositNbr) Return ChildSalesHistory objects filtered by the OehhDepositNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhccamt(string $OehhCcAmt) Return ChildSalesHistory objects filtered by the OehhCcAmt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhotaxsub(string $OehhOTaxSub) Return ChildSalesHistory objects filtered by the OehhOTaxSub column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhonontaxsub(string $OehhONonTaxSub) Return ChildSalesHistory objects filtered by the OehhONonTaxSub column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhotaxtot(string $OehhOTaxTot) Return ChildSalesHistory objects filtered by the OehhOTaxTot column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhoordrtot(string $OehhOOrdrTot) Return ChildSalesHistory objects filtered by the OehhOOrdrTot column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpickprintdate(string $OehhPickPrintDate) Return ChildSalesHistory objects filtered by the OehhPickPrintDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpickprinttime(string $OehhPickPrintTime) Return ChildSalesHistory objects filtered by the OehhPickPrintTime column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcont(string $OehhCont) Return ChildSalesHistory objects filtered by the OehhCont column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcontteleintl(string $OehhContTeleIntl) Return ChildSalesHistory objects filtered by the OehhContTeleIntl column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhconttelenbr(string $OehhContTeleNbr) Return ChildSalesHistory objects filtered by the OehhContTeleNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcontteleext(string $OehhContTeleExt) Return ChildSalesHistory objects filtered by the OehhContTeleExt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcontfaxintl(string $OehhContFaxIntl) Return ChildSalesHistory objects filtered by the OehhContFaxIntl column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcontfaxnbr(string $OehhContFaxNbr) Return ChildSalesHistory objects filtered by the OehhContFaxNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhshipacct(string $OehhShipAcct) Return ChildSalesHistory objects filtered by the OehhShipAcct column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhchgdue(string $OehhChgDue) Return ChildSalesHistory objects filtered by the OehhChgDue column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhaddlpricdisc(string $OehhAddlPricDisc) Return ChildSalesHistory objects filtered by the OehhAddlPricDisc column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhallship(string $OehhAllShip) Return ChildSalesHistory objects filtered by the OehhAllShip column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhqtyorderamt(string $OehhQtyOrderAmt) Return ChildSalesHistory objects filtered by the OehhQtyOrderAmt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcreditapplied(string $OehhCreditApplied) Return ChildSalesHistory objects filtered by the OehhCreditApplied column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhinvcprintdate(string $OehhInvcPrintDate) Return ChildSalesHistory objects filtered by the OehhInvcPrintDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhinvcprinttime(string $OehhInvcPrintTime) Return ChildSalesHistory objects filtered by the OehhInvcPrintTime column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscfrt(string $OehhDiscFrt) Return ChildSalesHistory objects filtered by the OehhDiscFrt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhorideshipcomp(string $OehhOrideShipComp) Return ChildSalesHistory objects filtered by the OehhOrideShipComp column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcontemail(string $OehhContEmail) Return ChildSalesHistory objects filtered by the OehhContEmail column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhmanualfrt(string $OehhManualFrt) Return ChildSalesHistory objects filtered by the OehhManualFrt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhinternalfrt(string $OehhInternalFrt) Return ChildSalesHistory objects filtered by the OehhInternalFrt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrtcost(string $OehhFrtCost) Return ChildSalesHistory objects filtered by the OehhFrtCost column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhroute(string $OehhRoute) Return ChildSalesHistory objects filtered by the OehhRoute column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhrouteseq(int $OehhRouteSeq) Return ChildSalesHistory objects filtered by the OehhRouteSeq column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhedi855sent(string $OehhEdi855Sent) Return ChildSalesHistory objects filtered by the OehhEdi855Sent column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrt3rdparty(string $OehhFrt3rdParty) Return ChildSalesHistory objects filtered by the OehhFrt3rdParty column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfob(string $OehhFob) Return ChildSalesHistory objects filtered by the OehhFob column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhconfirmimagyn(string $OehhConfirmImagYn) Return ChildSalesHistory objects filtered by the OehhConfirmImagYn column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhindustconform(string $OehhIndustConform) Return ChildSalesHistory objects filtered by the OehhIndustConform column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcstkconsign(string $OehhCstkConsign) Return ChildSalesHistory objects filtered by the OehhCstkConsign column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhlmdelaycapsent(string $OehhLmDelayCapSent) Return ChildSalesHistory objects filtered by the OehhLmDelayCapSent column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhmfgid(string $OehhMfgId) Return ChildSalesHistory objects filtered by the OehhMfgId column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhstoreid(string $OehhStoreId) Return ChildSalesHistory objects filtered by the OehhStoreId column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpickqueue(string $OehhPickQueue) Return ChildSalesHistory objects filtered by the OehhPickQueue column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehharrvdate(string $OehhArrvDate) Return ChildSalesHistory objects filtered by the OehhArrvDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhsurchgstat(string $OehhSurchgStat) Return ChildSalesHistory objects filtered by the OehhSurchgStat column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrtgrup(string $OehhFrtGrup) Return ChildSalesHistory objects filtered by the OehhFrtGrup column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhcommoride(string $OehhCommOride) Return ChildSalesHistory objects filtered by the OehhCommOride column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhchrgsplt(string $OehhChrgSplt) Return ChildSalesHistory objects filtered by the OehhChrgSplt column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhacccaprv(string $OehhAcCcAprv) Return ChildSalesHistory objects filtered by the OehhAcCcAprv column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhorigordrnbr(string $OehhOrigOrdrNbr) Return ChildSalesHistory objects filtered by the OehhOrigOrdrNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhpostdate(string $OehhPostDate) Return ChildSalesHistory objects filtered by the OehhPostDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscdate1(string $OehhDiscDate1) Return ChildSalesHistory objects filtered by the OehhDiscDate1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscpct1(string $OehhDiscPct1) Return ChildSalesHistory objects filtered by the OehhDiscPct1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduedate1(string $OehhDueDate1) Return ChildSalesHistory objects filtered by the OehhDueDate1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdueamt1(string $OehhDueAmt1) Return ChildSalesHistory objects filtered by the OehhDueAmt1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduepct1(string $OehhDuePct1) Return ChildSalesHistory objects filtered by the OehhDuePct1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscdate2(string $OehhDiscDate2) Return ChildSalesHistory objects filtered by the OehhDiscDate2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscpct2(string $OehhDiscPct2) Return ChildSalesHistory objects filtered by the OehhDiscPct2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduedate2(string $OehhDueDate2) Return ChildSalesHistory objects filtered by the OehhDueDate2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdueamt2(string $OehhDueAmt2) Return ChildSalesHistory objects filtered by the OehhDueAmt2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduepct2(string $OehhDuePct2) Return ChildSalesHistory objects filtered by the OehhDuePct2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscdate3(string $OehhDiscDate3) Return ChildSalesHistory objects filtered by the OehhDiscDate3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscpct3(string $OehhDiscPct3) Return ChildSalesHistory objects filtered by the OehhDiscPct3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduedate3(string $OehhDueDate3) Return ChildSalesHistory objects filtered by the OehhDueDate3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdueamt3(string $OehhDueAmt3) Return ChildSalesHistory objects filtered by the OehhDueAmt3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduepct3(string $OehhDuePct3) Return ChildSalesHistory objects filtered by the OehhDuePct3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscdate4(string $OehhDiscDate4) Return ChildSalesHistory objects filtered by the OehhDiscDate4 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscpct4(string $OehhDiscPct4) Return ChildSalesHistory objects filtered by the OehhDiscPct4 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduedate4(string $OehhDueDate4) Return ChildSalesHistory objects filtered by the OehhDueDate4 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdueamt4(string $OehhDueAmt4) Return ChildSalesHistory objects filtered by the OehhDueAmt4 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduepct4(string $OehhDuePct4) Return ChildSalesHistory objects filtered by the OehhDuePct4 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscdate5(string $OehhDiscDate5) Return ChildSalesHistory objects filtered by the OehhDiscDate5 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscpct5(string $OehhDiscPct5) Return ChildSalesHistory objects filtered by the OehhDiscPct5 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduedate5(string $OehhDueDate5) Return ChildSalesHistory objects filtered by the OehhDueDate5 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdueamt5(string $OehhDueAmt5) Return ChildSalesHistory objects filtered by the OehhDueAmt5 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduepct5(string $OehhDuePct5) Return ChildSalesHistory objects filtered by the OehhDuePct5 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscdate6(string $OehhDiscDate6) Return ChildSalesHistory objects filtered by the OehhDiscDate6 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdiscpct6(string $OehhDiscPct6) Return ChildSalesHistory objects filtered by the OehhDiscPct6 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduedate6(string $OehhDueDate6) Return ChildSalesHistory objects filtered by the OehhDueDate6 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhdueamt6(string $OehhDueAmt6) Return ChildSalesHistory objects filtered by the OehhDueAmt6 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhduepct6(string $OehhDuePct6) Return ChildSalesHistory objects filtered by the OehhDuePct6 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhrefnbr(string $OehhRefNbr) Return ChildSalesHistory objects filtered by the OehhRefNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode1(string $OehhFrtTaxCode1) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt1(string $OehhFrtTaxAmt1) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt1 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode2(string $OehhFrtTaxCode2) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt2(string $OehhFrtTaxAmt2) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt2 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode3(string $OehhFrtTaxCode3) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt3(string $OehhFrtTaxAmt3) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt3 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode4(string $OehhFrtTaxCode4) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode4 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt4(string $OehhFrtTaxAmt4) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt4 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode5(string $OehhFrtTaxCode5) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode5 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt5(string $OehhFrtTaxAmt5) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt5 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode6(string $OehhFrtTaxCode6) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode6 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt6(string $OehhFrtTaxAmt6) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt6 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode7(string $OehhFrtTaxCode7) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode7 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt7(string $OehhFrtTaxAmt7) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt7 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode8(string $OehhFrtTaxCode8) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode8 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt8(string $OehhFrtTaxAmt8) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt8 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxcode9(string $OehhFrtTaxCode9) Return ChildSalesHistory objects filtered by the OehhFrtTaxCode9 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhfrttaxamt9(string $OehhFrtTaxAmt9) Return ChildSalesHistory objects filtered by the OehhFrtTaxAmt9 column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhacprognbr(string $OehhAcProgNbr) Return ChildSalesHistory objects filtered by the OehhAcProgNbr column
 * @method     ChildSalesHistory[]|ObjectCollection findByOehhacprogexpdate(string $OehhAcProgExpDate) Return ChildSalesHistory objects filtered by the OehhAcProgExpDate column
 * @method     ChildSalesHistory[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSalesHistory objects filtered by the DateUpdtd column
 * @method     ChildSalesHistory[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSalesHistory objects filtered by the TimeUpdtd column
 * @method     ChildSalesHistory[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesHistory objects filtered by the dummy column
 * @method     ChildSalesHistory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesHistoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesHistoryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesHistory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesHistoryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSalesHistory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehhNbr, OehhYear, OehhStat, OehhHold, ArcuCustId, ArstShipId, OehhStName, OehhStLastName, OehhStFirstName, OehhStAdr1, OehhStAdr2, OehhStAdr3, OehhStCtry, OehhStCity, OehhStStat, OehhStZipCode, OehhCustPo, OehhOrdrDate, ArtmTermCd, ArtbShipVia, ArinInvNbr, OehhInvDate, OehhGLPd, ArspSalePer1, OehhSp1Pct, ArspSalePer2, OehhSp2Pct, ArspSalePer3, OehhSp3Pct, OehhCntrNbr, OehhWiBatch, OehhDropRelHold, OehhTaxSub, OehhNonTaxSub, OehhTaxTot, OehhFrtTot, OehhMiscTot, OehhOrdrTot, OehhCostTot, OehhSpCommLock, OehhTakenDate, OehhTakenTime, OehhPickDate, OehhPickTime, OehhPackDate, OehhPackTime, OehhVerifyDate, OehhVerifyTime, OehhCreditMemo, OehhBookedYn, IntbWhseOrig, OehhBtStat, OehhShipComp, OehhCwoFlag, OehhDivision, OehhTakenCode, OehhPickCode, OehhPackCode, OehhVerifyCode, OehhTotDisc, OehhEdiRefNbrQual, OehhUserCode1, OehhUserCode2, OehhUserCode3, OehhUserCode4, OehhExchCtry, OehhExchRate, OehhWghtTot, OehhWghtOride, OehhCcInfo, OehhBoxCount, OehhRqstDate, OehhCancDate, OehhCrntUser, OehhReleaseNbr, IntbWhse, OehhBordBuildDate, OehhDeptCode, OehhFrtInEntered, OehhDropShipEntered, OehhErFlag, OehhFrtIn, OehhDropShip, OehhMinOrder, OehhContractTerms, OehhDropShipBilled, OehhOrdTyp, OehhTrackNbr, OehhSource, OehhCcAprv, OehhPickFmatType, OehhInvcFmatType, OehhCashAmt, OehhCheckAmt, OehhCheckNbr, OehhDepositAmt, OehhDepositNbr, OehhCcAmt, OehhOTaxSub, OehhONonTaxSub, OehhOTaxTot, OehhOOrdrTot, OehhPickPrintDate, OehhPickPrintTime, OehhCont, OehhContTeleIntl, OehhContTeleNbr, OehhContTeleExt, OehhContFaxIntl, OehhContFaxNbr, OehhShipAcct, OehhChgDue, OehhAddlPricDisc, OehhAllShip, OehhQtyOrderAmt, OehhCreditApplied, OehhInvcPrintDate, OehhInvcPrintTime, OehhDiscFrt, OehhOrideShipComp, OehhContEmail, OehhManualFrt, OehhInternalFrt, OehhFrtCost, OehhRoute, OehhRouteSeq, OehhEdi855Sent, OehhFrt3rdParty, OehhFob, OehhConfirmImagYn, OehhIndustConform, OehhCstkConsign, OehhLmDelayCapSent, OehhMfgId, OehhStoreId, OehhPickQueue, OehhArrvDate, OehhSurchgStat, OehhFrtGrup, OehhCommOride, OehhChrgSplt, OehhAcCcAprv, OehhOrigOrdrNbr, OehhPostDate, OehhDiscDate1, OehhDiscPct1, OehhDueDate1, OehhDueAmt1, OehhDuePct1, OehhDiscDate2, OehhDiscPct2, OehhDueDate2, OehhDueAmt2, OehhDuePct2, OehhDiscDate3, OehhDiscPct3, OehhDueDate3, OehhDueAmt3, OehhDuePct3, OehhDiscDate4, OehhDiscPct4, OehhDueDate4, OehhDueAmt4, OehhDuePct4, OehhDiscDate5, OehhDiscPct5, OehhDueDate5, OehhDueAmt5, OehhDuePct5, OehhDiscDate6, OehhDiscPct6, OehhDueDate6, OehhDueAmt6, OehhDuePct6, OehhRefNbr, OehhFrtTaxCode1, OehhFrtTaxAmt1, OehhFrtTaxCode2, OehhFrtTaxAmt2, OehhFrtTaxCode3, OehhFrtTaxAmt3, OehhFrtTaxCode4, OehhFrtTaxAmt4, OehhFrtTaxCode5, OehhFrtTaxAmt5, OehhFrtTaxCode6, OehhFrtTaxAmt6, OehhFrtTaxCode7, OehhFrtTaxAmt7, OehhFrtTaxCode8, OehhFrtTaxAmt8, OehhFrtTaxCode9, OehhFrtTaxAmt9, OehhAcProgNbr, OehhAcProgExpDate, DateUpdtd, TimeUpdtd, dummy FROM so_head_hist WHERE OehhNbr = :p0';
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $keys, Criteria::IN);
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
     * @param     mixed $oehhnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhnbr($oehhnbr = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $oehhnbr, $comparison);
    }

    /**
     * Filter the query on the OehhYear column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhyear('fooValue');   // WHERE OehhYear = 'fooValue'
     * $query->filterByOehhyear('%fooValue%', Criteria::LIKE); // WHERE OehhYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhyear The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhyear($oehhyear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhyear)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHYEAR, $oehhyear, $comparison);
    }

    /**
     * Filter the query on the OehhStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstat('fooValue');   // WHERE OehhStat = 'fooValue'
     * $query->filterByOehhstat('%fooValue%', Criteria::LIKE); // WHERE OehhStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstat($oehhstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTAT, $oehhstat, $comparison);
    }

    /**
     * Filter the query on the OehhHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhhold('fooValue');   // WHERE OehhHold = 'fooValue'
     * $query->filterByOehhhold('%fooValue%', Criteria::LIKE); // WHERE OehhHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhhold($oehhhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHHOLD, $oehhhold, $comparison);
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the OehhStName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstname('fooValue');   // WHERE OehhStName = 'fooValue'
     * $query->filterByOehhstname('%fooValue%', Criteria::LIKE); // WHERE OehhStName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstname($oehhstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTNAME, $oehhstname, $comparison);
    }

    /**
     * Filter the query on the OehhStLastName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstlastname('fooValue');   // WHERE OehhStLastName = 'fooValue'
     * $query->filterByOehhstlastname('%fooValue%', Criteria::LIKE); // WHERE OehhStLastName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstlastname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstlastname($oehhstlastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstlastname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTLASTNAME, $oehhstlastname, $comparison);
    }

    /**
     * Filter the query on the OehhStFirstName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstfirstname('fooValue');   // WHERE OehhStFirstName = 'fooValue'
     * $query->filterByOehhstfirstname('%fooValue%', Criteria::LIKE); // WHERE OehhStFirstName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstfirstname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstfirstname($oehhstfirstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstfirstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTFIRSTNAME, $oehhstfirstname, $comparison);
    }

    /**
     * Filter the query on the OehhStAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstadr1('fooValue');   // WHERE OehhStAdr1 = 'fooValue'
     * $query->filterByOehhstadr1('%fooValue%', Criteria::LIKE); // WHERE OehhStAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstadr1($oehhstadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTADR1, $oehhstadr1, $comparison);
    }

    /**
     * Filter the query on the OehhStAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstadr2('fooValue');   // WHERE OehhStAdr2 = 'fooValue'
     * $query->filterByOehhstadr2('%fooValue%', Criteria::LIKE); // WHERE OehhStAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstadr2($oehhstadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTADR2, $oehhstadr2, $comparison);
    }

    /**
     * Filter the query on the OehhStAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstadr3('fooValue');   // WHERE OehhStAdr3 = 'fooValue'
     * $query->filterByOehhstadr3('%fooValue%', Criteria::LIKE); // WHERE OehhStAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstadr3($oehhstadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTADR3, $oehhstadr3, $comparison);
    }

    /**
     * Filter the query on the OehhStCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstctry('fooValue');   // WHERE OehhStCtry = 'fooValue'
     * $query->filterByOehhstctry('%fooValue%', Criteria::LIKE); // WHERE OehhStCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstctry($oehhstctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTCTRY, $oehhstctry, $comparison);
    }

    /**
     * Filter the query on the OehhStCity column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstcity('fooValue');   // WHERE OehhStCity = 'fooValue'
     * $query->filterByOehhstcity('%fooValue%', Criteria::LIKE); // WHERE OehhStCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstcity($oehhstcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTCITY, $oehhstcity, $comparison);
    }

    /**
     * Filter the query on the OehhStStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhststat('fooValue');   // WHERE OehhStStat = 'fooValue'
     * $query->filterByOehhststat('%fooValue%', Criteria::LIKE); // WHERE OehhStStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhststat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhststat($oehhststat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhststat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTSTAT, $oehhststat, $comparison);
    }

    /**
     * Filter the query on the OehhStZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstzipcode('fooValue');   // WHERE OehhStZipCode = 'fooValue'
     * $query->filterByOehhstzipcode('%fooValue%', Criteria::LIKE); // WHERE OehhStZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstzipcode($oehhstzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTZIPCODE, $oehhstzipcode, $comparison);
    }

    /**
     * Filter the query on the OehhCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcustpo('fooValue');   // WHERE OehhCustPo = 'fooValue'
     * $query->filterByOehhcustpo('%fooValue%', Criteria::LIKE); // WHERE OehhCustPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcustpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcustpo($oehhcustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCUSTPO, $oehhcustpo, $comparison);
    }

    /**
     * Filter the query on the OehhOrdrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhordrdate('fooValue');   // WHERE OehhOrdrDate = 'fooValue'
     * $query->filterByOehhordrdate('%fooValue%', Criteria::LIKE); // WHERE OehhOrdrDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhordrdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhordrdate($oehhordrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORDRDATE, $oehhordrdate, $comparison);
    }

    /**
     * Filter the query on the ArtmTermCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtermcd('fooValue');   // WHERE ArtmTermCd = 'fooValue'
     * $query->filterByArtmtermcd('%fooValue%', Criteria::LIKE); // WHERE ArtmTermCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmtermcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
    }

    /**
     * Filter the query on the ArtbShipVia column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbshipvia('fooValue');   // WHERE ArtbShipVia = 'fooValue'
     * $query->filterByArtbshipvia('%fooValue%', Criteria::LIKE); // WHERE ArtbShipVia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbshipvia The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
    }

    /**
     * Filter the query on the ArinInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArininvnbr('fooValue');   // WHERE ArinInvNbr = 'fooValue'
     * $query->filterByArininvnbr('%fooValue%', Criteria::LIKE); // WHERE ArinInvNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arininvnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByArininvnbr($arininvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arininvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ARININVNBR, $arininvnbr, $comparison);
    }

    /**
     * Filter the query on the OehhInvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinvdate('fooValue');   // WHERE OehhInvDate = 'fooValue'
     * $query->filterByOehhinvdate('%fooValue%', Criteria::LIKE); // WHERE OehhInvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhinvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhinvdate($oehhinvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINVDATE, $oehhinvdate, $comparison);
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
     * @param     mixed $oehhglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhglpd($oehhglpd = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHGLPD, $oehhglpd, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
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
     * @param     mixed $oehhsp1pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhsp1pct($oehhsp1pct = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP1PCT, $oehhsp1pct, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper2('fooValue');   // WHERE ArspSalePer2 = 'fooValue'
     * $query->filterByArspsaleper2('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
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
     * @param     mixed $oehhsp2pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhsp2pct($oehhsp2pct = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP2PCT, $oehhsp2pct, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE ArspSalePer3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
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
     * @param     mixed $oehhsp3pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhsp3pct($oehhsp3pct = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSP3PCT, $oehhsp3pct, $comparison);
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
     * @param     mixed $oehhcntrnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcntrnbr($oehhcntrnbr = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCNTRNBR, $oehhcntrnbr, $comparison);
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
     * @param     mixed $oehhwibatch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhwibatch($oehhwibatch = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWIBATCH, $oehhwibatch, $comparison);
    }

    /**
     * Filter the query on the OehhDropRelHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdroprelhold('fooValue');   // WHERE OehhDropRelHold = 'fooValue'
     * $query->filterByOehhdroprelhold('%fooValue%', Criteria::LIKE); // WHERE OehhDropRelHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdroprelhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdroprelhold($oehhdroprelhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdroprelhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPRELHOLD, $oehhdroprelhold, $comparison);
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
     * @param     mixed $oehhtaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhtaxsub($oehhtaxsub = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAXSUB, $oehhtaxsub, $comparison);
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
     * @param     mixed $oehhnontaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhnontaxsub($oehhnontaxsub = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHNONTAXSUB, $oehhnontaxsub, $comparison);
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
     * @param     mixed $oehhtaxtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhtaxtot($oehhtaxtot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAXTOT, $oehhtaxtot, $comparison);
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
     * @param     mixed $oehhfrttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttot($oehhfrttot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTOT, $oehhfrttot, $comparison);
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
     * @param     mixed $oehhmisctot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhmisctot($oehhmisctot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMISCTOT, $oehhmisctot, $comparison);
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
     * @param     mixed $oehhordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhordrtot($oehhordrtot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORDRTOT, $oehhordrtot, $comparison);
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
     * @param     mixed $oehhcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcosttot($oehhcosttot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCOSTTOT, $oehhcosttot, $comparison);
    }

    /**
     * Filter the query on the OehhSpCommLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhspcommlock('fooValue');   // WHERE OehhSpCommLock = 'fooValue'
     * $query->filterByOehhspcommlock('%fooValue%', Criteria::LIKE); // WHERE OehhSpCommLock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhspcommlock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhspcommlock($oehhspcommlock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhspcommlock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSPCOMMLOCK, $oehhspcommlock, $comparison);
    }

    /**
     * Filter the query on the OehhTakenDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtakendate('fooValue');   // WHERE OehhTakenDate = 'fooValue'
     * $query->filterByOehhtakendate('%fooValue%', Criteria::LIKE); // WHERE OehhTakenDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhtakendate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhtakendate($oehhtakendate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakendate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAKENDATE, $oehhtakendate, $comparison);
    }

    /**
     * Filter the query on the OehhTakenTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtakentime('fooValue');   // WHERE OehhTakenTime = 'fooValue'
     * $query->filterByOehhtakentime('%fooValue%', Criteria::LIKE); // WHERE OehhTakenTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhtakentime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhtakentime($oehhtakentime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakentime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAKENTIME, $oehhtakentime, $comparison);
    }

    /**
     * Filter the query on the OehhPickDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickdate('fooValue');   // WHERE OehhPickDate = 'fooValue'
     * $query->filterByOehhpickdate('%fooValue%', Criteria::LIKE); // WHERE OehhPickDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpickdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpickdate($oehhpickdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKDATE, $oehhpickdate, $comparison);
    }

    /**
     * Filter the query on the OehhPickTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpicktime('fooValue');   // WHERE OehhPickTime = 'fooValue'
     * $query->filterByOehhpicktime('%fooValue%', Criteria::LIKE); // WHERE OehhPickTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpicktime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpicktime($oehhpicktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpicktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKTIME, $oehhpicktime, $comparison);
    }

    /**
     * Filter the query on the OehhPackDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpackdate('fooValue');   // WHERE OehhPackDate = 'fooValue'
     * $query->filterByOehhpackdate('%fooValue%', Criteria::LIKE); // WHERE OehhPackDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpackdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpackdate($oehhpackdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpackdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPACKDATE, $oehhpackdate, $comparison);
    }

    /**
     * Filter the query on the OehhPackTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpacktime('fooValue');   // WHERE OehhPackTime = 'fooValue'
     * $query->filterByOehhpacktime('%fooValue%', Criteria::LIKE); // WHERE OehhPackTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpacktime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpacktime($oehhpacktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpacktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPACKTIME, $oehhpacktime, $comparison);
    }

    /**
     * Filter the query on the OehhVerifyDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhverifydate('fooValue');   // WHERE OehhVerifyDate = 'fooValue'
     * $query->filterByOehhverifydate('%fooValue%', Criteria::LIKE); // WHERE OehhVerifyDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhverifydate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhverifydate($oehhverifydate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifydate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHVERIFYDATE, $oehhverifydate, $comparison);
    }

    /**
     * Filter the query on the OehhVerifyTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhverifytime('fooValue');   // WHERE OehhVerifyTime = 'fooValue'
     * $query->filterByOehhverifytime('%fooValue%', Criteria::LIKE); // WHERE OehhVerifyTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhverifytime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhverifytime($oehhverifytime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifytime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHVERIFYTIME, $oehhverifytime, $comparison);
    }

    /**
     * Filter the query on the OehhCreditMemo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcreditmemo('fooValue');   // WHERE OehhCreditMemo = 'fooValue'
     * $query->filterByOehhcreditmemo('%fooValue%', Criteria::LIKE); // WHERE OehhCreditMemo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcreditmemo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcreditmemo($oehhcreditmemo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcreditmemo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCREDITMEMO, $oehhcreditmemo, $comparison);
    }

    /**
     * Filter the query on the OehhBookedYn column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhbookedyn('fooValue');   // WHERE OehhBookedYn = 'fooValue'
     * $query->filterByOehhbookedyn('%fooValue%', Criteria::LIKE); // WHERE OehhBookedYn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhbookedyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhbookedyn($oehhbookedyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbookedyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBOOKEDYN, $oehhbookedyn, $comparison);
    }

    /**
     * Filter the query on the IntbWhseOrig column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseorig('fooValue');   // WHERE IntbWhseOrig = 'fooValue'
     * $query->filterByIntbwhseorig('%fooValue%', Criteria::LIKE); // WHERE IntbWhseOrig LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseorig The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByIntbwhseorig($intbwhseorig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseorig)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_INTBWHSEORIG, $intbwhseorig, $comparison);
    }

    /**
     * Filter the query on the OehhBtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhbtstat('fooValue');   // WHERE OehhBtStat = 'fooValue'
     * $query->filterByOehhbtstat('%fooValue%', Criteria::LIKE); // WHERE OehhBtStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhbtstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhbtstat($oehhbtstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbtstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBTSTAT, $oehhbtstat, $comparison);
    }

    /**
     * Filter the query on the OehhShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhshipcomp('fooValue');   // WHERE OehhShipComp = 'fooValue'
     * $query->filterByOehhshipcomp('%fooValue%', Criteria::LIKE); // WHERE OehhShipComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhshipcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhshipcomp($oehhshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSHIPCOMP, $oehhshipcomp, $comparison);
    }

    /**
     * Filter the query on the OehhCwoFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcwoflag('fooValue');   // WHERE OehhCwoFlag = 'fooValue'
     * $query->filterByOehhcwoflag('%fooValue%', Criteria::LIKE); // WHERE OehhCwoFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcwoflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcwoflag($oehhcwoflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcwoflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCWOFLAG, $oehhcwoflag, $comparison);
    }

    /**
     * Filter the query on the OehhDivision column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdivision('fooValue');   // WHERE OehhDivision = 'fooValue'
     * $query->filterByOehhdivision('%fooValue%', Criteria::LIKE); // WHERE OehhDivision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdivision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdivision($oehhdivision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdivision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDIVISION, $oehhdivision, $comparison);
    }

    /**
     * Filter the query on the OehhTakenCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtakencode('fooValue');   // WHERE OehhTakenCode = 'fooValue'
     * $query->filterByOehhtakencode('%fooValue%', Criteria::LIKE); // WHERE OehhTakenCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhtakencode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhtakencode($oehhtakencode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakencode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTAKENCODE, $oehhtakencode, $comparison);
    }

    /**
     * Filter the query on the OehhPickCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickcode('fooValue');   // WHERE OehhPickCode = 'fooValue'
     * $query->filterByOehhpickcode('%fooValue%', Criteria::LIKE); // WHERE OehhPickCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpickcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpickcode($oehhpickcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKCODE, $oehhpickcode, $comparison);
    }

    /**
     * Filter the query on the OehhPackCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpackcode('fooValue');   // WHERE OehhPackCode = 'fooValue'
     * $query->filterByOehhpackcode('%fooValue%', Criteria::LIKE); // WHERE OehhPackCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpackcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpackcode($oehhpackcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpackcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPACKCODE, $oehhpackcode, $comparison);
    }

    /**
     * Filter the query on the OehhVerifyCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhverifycode('fooValue');   // WHERE OehhVerifyCode = 'fooValue'
     * $query->filterByOehhverifycode('%fooValue%', Criteria::LIKE); // WHERE OehhVerifyCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhverifycode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhverifycode($oehhverifycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifycode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHVERIFYCODE, $oehhverifycode, $comparison);
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
     * @param     mixed $oehhtotdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhtotdisc($oehhtotdisc = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTOTDISC, $oehhtotdisc, $comparison);
    }

    /**
     * Filter the query on the OehhEdiRefNbrQual column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhedirefnbrqual('fooValue');   // WHERE OehhEdiRefNbrQual = 'fooValue'
     * $query->filterByOehhedirefnbrqual('%fooValue%', Criteria::LIKE); // WHERE OehhEdiRefNbrQual LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhedirefnbrqual The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhedirefnbrqual($oehhedirefnbrqual = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhedirefnbrqual)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL, $oehhedirefnbrqual, $comparison);
    }

    /**
     * Filter the query on the OehhUserCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhusercode1('fooValue');   // WHERE OehhUserCode1 = 'fooValue'
     * $query->filterByOehhusercode1('%fooValue%', Criteria::LIKE); // WHERE OehhUserCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhusercode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhusercode1($oehhusercode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHUSERCODE1, $oehhusercode1, $comparison);
    }

    /**
     * Filter the query on the OehhUserCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhusercode2('fooValue');   // WHERE OehhUserCode2 = 'fooValue'
     * $query->filterByOehhusercode2('%fooValue%', Criteria::LIKE); // WHERE OehhUserCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhusercode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhusercode2($oehhusercode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHUSERCODE2, $oehhusercode2, $comparison);
    }

    /**
     * Filter the query on the OehhUserCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhusercode3('fooValue');   // WHERE OehhUserCode3 = 'fooValue'
     * $query->filterByOehhusercode3('%fooValue%', Criteria::LIKE); // WHERE OehhUserCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhusercode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhusercode3($oehhusercode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHUSERCODE3, $oehhusercode3, $comparison);
    }

    /**
     * Filter the query on the OehhUserCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhusercode4('fooValue');   // WHERE OehhUserCode4 = 'fooValue'
     * $query->filterByOehhusercode4('%fooValue%', Criteria::LIKE); // WHERE OehhUserCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhusercode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhusercode4($oehhusercode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHUSERCODE4, $oehhusercode4, $comparison);
    }

    /**
     * Filter the query on the OehhExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhexchctry('fooValue');   // WHERE OehhExchCtry = 'fooValue'
     * $query->filterByOehhexchctry('%fooValue%', Criteria::LIKE); // WHERE OehhExchCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhexchctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhexchctry($oehhexchctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEXCHCTRY, $oehhexchctry, $comparison);
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
     * @param     mixed $oehhexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhexchrate($oehhexchrate = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEXCHRATE, $oehhexchrate, $comparison);
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
     * @param     mixed $oehhwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhwghttot($oehhwghttot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWGHTTOT, $oehhwghttot, $comparison);
    }

    /**
     * Filter the query on the OehhWghtOride column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhwghtoride('fooValue');   // WHERE OehhWghtOride = 'fooValue'
     * $query->filterByOehhwghtoride('%fooValue%', Criteria::LIKE); // WHERE OehhWghtOride LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhwghtoride The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhwghtoride($oehhwghtoride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhwghtoride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHWGHTORIDE, $oehhwghtoride, $comparison);
    }

    /**
     * Filter the query on the OehhCcInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhccinfo('fooValue');   // WHERE OehhCcInfo = 'fooValue'
     * $query->filterByOehhccinfo('%fooValue%', Criteria::LIKE); // WHERE OehhCcInfo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhccinfo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhccinfo($oehhccinfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhccinfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCCINFO, $oehhccinfo, $comparison);
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
     * @param     mixed $oehhboxcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhboxcount($oehhboxcount = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBOXCOUNT, $oehhboxcount, $comparison);
    }

    /**
     * Filter the query on the OehhRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhrqstdate('fooValue');   // WHERE OehhRqstDate = 'fooValue'
     * $query->filterByOehhrqstdate('%fooValue%', Criteria::LIKE); // WHERE OehhRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhrqstdate($oehhrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHRQSTDATE, $oehhrqstdate, $comparison);
    }

    /**
     * Filter the query on the OehhCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcancdate('fooValue');   // WHERE OehhCancDate = 'fooValue'
     * $query->filterByOehhcancdate('%fooValue%', Criteria::LIKE); // WHERE OehhCancDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcancdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcancdate($oehhcancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCANCDATE, $oehhcancdate, $comparison);
    }

    /**
     * Filter the query on the OehhCrntUser column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcrntuser('fooValue');   // WHERE OehhCrntUser = 'fooValue'
     * $query->filterByOehhcrntuser('%fooValue%', Criteria::LIKE); // WHERE OehhCrntUser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcrntuser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcrntuser($oehhcrntuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcrntuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCRNTUSER, $oehhcrntuser, $comparison);
    }

    /**
     * Filter the query on the OehhReleaseNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhreleasenbr('fooValue');   // WHERE OehhReleaseNbr = 'fooValue'
     * $query->filterByOehhreleasenbr('%fooValue%', Criteria::LIKE); // WHERE OehhReleaseNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhreleasenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhreleasenbr($oehhreleasenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhreleasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHRELEASENBR, $oehhreleasenbr, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the OehhBordBuildDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhbordbuilddate('fooValue');   // WHERE OehhBordBuildDate = 'fooValue'
     * $query->filterByOehhbordbuilddate('%fooValue%', Criteria::LIKE); // WHERE OehhBordBuildDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhbordbuilddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhbordbuilddate($oehhbordbuilddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbordbuilddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHBORDBUILDDATE, $oehhbordbuilddate, $comparison);
    }

    /**
     * Filter the query on the OehhDeptCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdeptcode('fooValue');   // WHERE OehhDeptCode = 'fooValue'
     * $query->filterByOehhdeptcode('%fooValue%', Criteria::LIKE); // WHERE OehhDeptCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdeptcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdeptcode($oehhdeptcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdeptcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDEPTCODE, $oehhdeptcode, $comparison);
    }

    /**
     * Filter the query on the OehhFrtInEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrtinentered('fooValue');   // WHERE OehhFrtInEntered = 'fooValue'
     * $query->filterByOehhfrtinentered('%fooValue%', Criteria::LIKE); // WHERE OehhFrtInEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrtinentered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrtinentered($oehhfrtinentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTINENTERED, $oehhfrtinentered, $comparison);
    }

    /**
     * Filter the query on the OehhDropShipEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdropshipentered('fooValue');   // WHERE OehhDropShipEntered = 'fooValue'
     * $query->filterByOehhdropshipentered('%fooValue%', Criteria::LIKE); // WHERE OehhDropShipEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdropshipentered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdropshipentered($oehhdropshipentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdropshipentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED, $oehhdropshipentered, $comparison);
    }

    /**
     * Filter the query on the OehhErFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOehherflag('fooValue');   // WHERE OehhErFlag = 'fooValue'
     * $query->filterByOehherflag('%fooValue%', Criteria::LIKE); // WHERE OehhErFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehherflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehherflag($oehherflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehherflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHERFLAG, $oehherflag, $comparison);
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
     * @param     mixed $oehhfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrtin($oehhfrtin = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTIN, $oehhfrtin, $comparison);
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
     * @param     mixed $oehhdropship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdropship($oehhdropship = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPSHIP, $oehhdropship, $comparison);
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
     * @param     mixed $oehhminorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhminorder($oehhminorder = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMINORDER, $oehhminorder, $comparison);
    }

    /**
     * Filter the query on the OehhContractTerms column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontractterms('fooValue');   // WHERE OehhContractTerms = 'fooValue'
     * $query->filterByOehhcontractterms('%fooValue%', Criteria::LIKE); // WHERE OehhContractTerms LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcontractterms The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcontractterms($oehhcontractterms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontractterms)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTRACTTERMS, $oehhcontractterms, $comparison);
    }

    /**
     * Filter the query on the OehhDropShipBilled column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdropshipbilled('fooValue');   // WHERE OehhDropShipBilled = 'fooValue'
     * $query->filterByOehhdropshipbilled('%fooValue%', Criteria::LIKE); // WHERE OehhDropShipBilled LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdropshipbilled The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdropshipbilled($oehhdropshipbilled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdropshipbilled)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED, $oehhdropshipbilled, $comparison);
    }

    /**
     * Filter the query on the OehhOrdTyp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhordtyp('fooValue');   // WHERE OehhOrdTyp = 'fooValue'
     * $query->filterByOehhordtyp('%fooValue%', Criteria::LIKE); // WHERE OehhOrdTyp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhordtyp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhordtyp($oehhordtyp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhordtyp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORDTYP, $oehhordtyp, $comparison);
    }

    /**
     * Filter the query on the OehhTrackNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhtracknbr('fooValue');   // WHERE OehhTrackNbr = 'fooValue'
     * $query->filterByOehhtracknbr('%fooValue%', Criteria::LIKE); // WHERE OehhTrackNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhtracknbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhtracknbr($oehhtracknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHTRACKNBR, $oehhtracknbr, $comparison);
    }

    /**
     * Filter the query on the OehhSource column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhsource('fooValue');   // WHERE OehhSource = 'fooValue'
     * $query->filterByOehhsource('%fooValue%', Criteria::LIKE); // WHERE OehhSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhsource The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhsource($oehhsource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhsource)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSOURCE, $oehhsource, $comparison);
    }

    /**
     * Filter the query on the OehhCcAprv column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhccaprv('fooValue');   // WHERE OehhCcAprv = 'fooValue'
     * $query->filterByOehhccaprv('%fooValue%', Criteria::LIKE); // WHERE OehhCcAprv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhccaprv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhccaprv($oehhccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCCAPRV, $oehhccaprv, $comparison);
    }

    /**
     * Filter the query on the OehhPickFmatType column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickfmattype('fooValue');   // WHERE OehhPickFmatType = 'fooValue'
     * $query->filterByOehhpickfmattype('%fooValue%', Criteria::LIKE); // WHERE OehhPickFmatType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpickfmattype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpickfmattype($oehhpickfmattype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKFMATTYPE, $oehhpickfmattype, $comparison);
    }

    /**
     * Filter the query on the OehhInvcFmatType column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinvcfmattype('fooValue');   // WHERE OehhInvcFmatType = 'fooValue'
     * $query->filterByOehhinvcfmattype('%fooValue%', Criteria::LIKE); // WHERE OehhInvcFmatType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhinvcfmattype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhinvcfmattype($oehhinvcfmattype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINVCFMATTYPE, $oehhinvcfmattype, $comparison);
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
     * @param     mixed $oehhcashamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcashamt($oehhcashamt = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCASHAMT, $oehhcashamt, $comparison);
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
     * @param     mixed $oehhcheckamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcheckamt($oehhcheckamt = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHECKAMT, $oehhcheckamt, $comparison);
    }

    /**
     * Filter the query on the OehhCheckNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhchecknbr('fooValue');   // WHERE OehhCheckNbr = 'fooValue'
     * $query->filterByOehhchecknbr('%fooValue%', Criteria::LIKE); // WHERE OehhCheckNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhchecknbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhchecknbr($oehhchecknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhchecknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHECKNBR, $oehhchecknbr, $comparison);
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
     * @param     mixed $oehhdepositamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdepositamt($oehhdepositamt = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDEPOSITAMT, $oehhdepositamt, $comparison);
    }

    /**
     * Filter the query on the OehhDepositNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdepositnbr('fooValue');   // WHERE OehhDepositNbr = 'fooValue'
     * $query->filterByOehhdepositnbr('%fooValue%', Criteria::LIKE); // WHERE OehhDepositNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdepositnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdepositnbr($oehhdepositnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdepositnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDEPOSITNBR, $oehhdepositnbr, $comparison);
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
     * @param     mixed $oehhccamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhccamt($oehhccamt = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCCAMT, $oehhccamt, $comparison);
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
     * @param     mixed $oehhotaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhotaxsub($oehhotaxsub = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOTAXSUB, $oehhotaxsub, $comparison);
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
     * @param     mixed $oehhonontaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhonontaxsub($oehhonontaxsub = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHONONTAXSUB, $oehhonontaxsub, $comparison);
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
     * @param     mixed $oehhotaxtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhotaxtot($oehhotaxtot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOTAXTOT, $oehhotaxtot, $comparison);
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
     * @param     mixed $oehhoordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhoordrtot($oehhoordrtot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHOORDRTOT, $oehhoordrtot, $comparison);
    }

    /**
     * Filter the query on the OehhPickPrintDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickprintdate('fooValue');   // WHERE OehhPickPrintDate = 'fooValue'
     * $query->filterByOehhpickprintdate('%fooValue%', Criteria::LIKE); // WHERE OehhPickPrintDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpickprintdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpickprintdate($oehhpickprintdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKPRINTDATE, $oehhpickprintdate, $comparison);
    }

    /**
     * Filter the query on the OehhPickPrintTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickprinttime('fooValue');   // WHERE OehhPickPrintTime = 'fooValue'
     * $query->filterByOehhpickprinttime('%fooValue%', Criteria::LIKE); // WHERE OehhPickPrintTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpickprinttime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpickprinttime($oehhpickprinttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKPRINTTIME, $oehhpickprinttime, $comparison);
    }

    /**
     * Filter the query on the OehhCont column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcont('fooValue');   // WHERE OehhCont = 'fooValue'
     * $query->filterByOehhcont('%fooValue%', Criteria::LIKE); // WHERE OehhCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcont($oehhcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONT, $oehhcont, $comparison);
    }

    /**
     * Filter the query on the OehhContTeleIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontteleintl('fooValue');   // WHERE OehhContTeleIntl = 'fooValue'
     * $query->filterByOehhcontteleintl('%fooValue%', Criteria::LIKE); // WHERE OehhContTeleIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcontteleintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcontteleintl($oehhcontteleintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontteleintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTTELEINTL, $oehhcontteleintl, $comparison);
    }

    /**
     * Filter the query on the OehhContTeleNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhconttelenbr('fooValue');   // WHERE OehhContTeleNbr = 'fooValue'
     * $query->filterByOehhconttelenbr('%fooValue%', Criteria::LIKE); // WHERE OehhContTeleNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhconttelenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhconttelenbr($oehhconttelenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhconttelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTTELENBR, $oehhconttelenbr, $comparison);
    }

    /**
     * Filter the query on the OehhContTeleExt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontteleext('fooValue');   // WHERE OehhContTeleExt = 'fooValue'
     * $query->filterByOehhcontteleext('%fooValue%', Criteria::LIKE); // WHERE OehhContTeleExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcontteleext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcontteleext($oehhcontteleext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontteleext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTTELEEXT, $oehhcontteleext, $comparison);
    }

    /**
     * Filter the query on the OehhContFaxIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontfaxintl('fooValue');   // WHERE OehhContFaxIntl = 'fooValue'
     * $query->filterByOehhcontfaxintl('%fooValue%', Criteria::LIKE); // WHERE OehhContFaxIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcontfaxintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcontfaxintl($oehhcontfaxintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontfaxintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTFAXINTL, $oehhcontfaxintl, $comparison);
    }

    /**
     * Filter the query on the OehhContFaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontfaxnbr('fooValue');   // WHERE OehhContFaxNbr = 'fooValue'
     * $query->filterByOehhcontfaxnbr('%fooValue%', Criteria::LIKE); // WHERE OehhContFaxNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcontfaxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcontfaxnbr($oehhcontfaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTFAXNBR, $oehhcontfaxnbr, $comparison);
    }

    /**
     * Filter the query on the OehhShipAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhshipacct('fooValue');   // WHERE OehhShipAcct = 'fooValue'
     * $query->filterByOehhshipacct('%fooValue%', Criteria::LIKE); // WHERE OehhShipAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhshipacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhshipacct($oehhshipacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhshipacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSHIPACCT, $oehhshipacct, $comparison);
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
     * @param     mixed $oehhchgdue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhchgdue($oehhchgdue = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHGDUE, $oehhchgdue, $comparison);
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
     * @param     mixed $oehhaddlpricdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhaddlpricdisc($oehhaddlpricdisc = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHADDLPRICDISC, $oehhaddlpricdisc, $comparison);
    }

    /**
     * Filter the query on the OehhAllShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhallship('fooValue');   // WHERE OehhAllShip = 'fooValue'
     * $query->filterByOehhallship('%fooValue%', Criteria::LIKE); // WHERE OehhAllShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhallship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhallship($oehhallship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhallship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHALLSHIP, $oehhallship, $comparison);
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
     * @param     mixed $oehhqtyorderamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhqtyorderamt($oehhqtyorderamt = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHQTYORDERAMT, $oehhqtyorderamt, $comparison);
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
     * @param     mixed $oehhcreditapplied The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcreditapplied($oehhcreditapplied = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED, $oehhcreditapplied, $comparison);
    }

    /**
     * Filter the query on the OehhInvcPrintDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinvcprintdate('fooValue');   // WHERE OehhInvcPrintDate = 'fooValue'
     * $query->filterByOehhinvcprintdate('%fooValue%', Criteria::LIKE); // WHERE OehhInvcPrintDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhinvcprintdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhinvcprintdate($oehhinvcprintdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINVCPRINTDATE, $oehhinvcprintdate, $comparison);
    }

    /**
     * Filter the query on the OehhInvcPrintTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinvcprinttime('fooValue');   // WHERE OehhInvcPrintTime = 'fooValue'
     * $query->filterByOehhinvcprinttime('%fooValue%', Criteria::LIKE); // WHERE OehhInvcPrintTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhinvcprinttime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhinvcprinttime($oehhinvcprinttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINVCPRINTTIME, $oehhinvcprinttime, $comparison);
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
     * @param     mixed $oehhdiscfrt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscfrt($oehhdiscfrt = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCFRT, $oehhdiscfrt, $comparison);
    }

    /**
     * Filter the query on the OehhOrideShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhorideshipcomp('fooValue');   // WHERE OehhOrideShipComp = 'fooValue'
     * $query->filterByOehhorideshipcomp('%fooValue%', Criteria::LIKE); // WHERE OehhOrideShipComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhorideshipcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhorideshipcomp($oehhorideshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhorideshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP, $oehhorideshipcomp, $comparison);
    }

    /**
     * Filter the query on the OehhContEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcontemail('fooValue');   // WHERE OehhContEmail = 'fooValue'
     * $query->filterByOehhcontemail('%fooValue%', Criteria::LIKE); // WHERE OehhContEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcontemail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcontemail($oehhcontemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontemail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONTEMAIL, $oehhcontemail, $comparison);
    }

    /**
     * Filter the query on the OehhManualFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhmanualfrt('fooValue');   // WHERE OehhManualFrt = 'fooValue'
     * $query->filterByOehhmanualfrt('%fooValue%', Criteria::LIKE); // WHERE OehhManualFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhmanualfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhmanualfrt($oehhmanualfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhmanualfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMANUALFRT, $oehhmanualfrt, $comparison);
    }

    /**
     * Filter the query on the OehhInternalFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhinternalfrt('fooValue');   // WHERE OehhInternalFrt = 'fooValue'
     * $query->filterByOehhinternalfrt('%fooValue%', Criteria::LIKE); // WHERE OehhInternalFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhinternalfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhinternalfrt($oehhinternalfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinternalfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINTERNALFRT, $oehhinternalfrt, $comparison);
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
     * @param     mixed $oehhfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrtcost($oehhfrtcost = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTCOST, $oehhfrtcost, $comparison);
    }

    /**
     * Filter the query on the OehhRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhroute('fooValue');   // WHERE OehhRoute = 'fooValue'
     * $query->filterByOehhroute('%fooValue%', Criteria::LIKE); // WHERE OehhRoute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhroute The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhroute($oehhroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHROUTE, $oehhroute, $comparison);
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
     * @param     mixed $oehhrouteseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhrouteseq($oehhrouteseq = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHROUTESEQ, $oehhrouteseq, $comparison);
    }

    /**
     * Filter the query on the OehhEdi855Sent column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhedi855sent('fooValue');   // WHERE OehhEdi855Sent = 'fooValue'
     * $query->filterByOehhedi855sent('%fooValue%', Criteria::LIKE); // WHERE OehhEdi855Sent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhedi855sent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhedi855sent($oehhedi855sent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhedi855sent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHEDI855SENT, $oehhedi855sent, $comparison);
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
     * @param     mixed $oehhfrt3rdparty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrt3rdparty($oehhfrt3rdparty = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY, $oehhfrt3rdparty, $comparison);
    }

    /**
     * Filter the query on the OehhFob column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfob('fooValue');   // WHERE OehhFob = 'fooValue'
     * $query->filterByOehhfob('%fooValue%', Criteria::LIKE); // WHERE OehhFob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfob($oehhfob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFOB, $oehhfob, $comparison);
    }

    /**
     * Filter the query on the OehhConfirmImagYn column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhconfirmimagyn('fooValue');   // WHERE OehhConfirmImagYn = 'fooValue'
     * $query->filterByOehhconfirmimagyn('%fooValue%', Criteria::LIKE); // WHERE OehhConfirmImagYn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhconfirmimagyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhconfirmimagyn($oehhconfirmimagyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhconfirmimagyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN, $oehhconfirmimagyn, $comparison);
    }

    /**
     * Filter the query on the OehhIndustConform column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhindustconform('fooValue');   // WHERE OehhIndustConform = 'fooValue'
     * $query->filterByOehhindustconform('%fooValue%', Criteria::LIKE); // WHERE OehhIndustConform LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhindustconform The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhindustconform($oehhindustconform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhindustconform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHINDUSTCONFORM, $oehhindustconform, $comparison);
    }

    /**
     * Filter the query on the OehhCstkConsign column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcstkconsign('fooValue');   // WHERE OehhCstkConsign = 'fooValue'
     * $query->filterByOehhcstkconsign('%fooValue%', Criteria::LIKE); // WHERE OehhCstkConsign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcstkconsign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcstkconsign($oehhcstkconsign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcstkconsign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCSTKCONSIGN, $oehhcstkconsign, $comparison);
    }

    /**
     * Filter the query on the OehhLmDelayCapSent column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhlmdelaycapsent('fooValue');   // WHERE OehhLmDelayCapSent = 'fooValue'
     * $query->filterByOehhlmdelaycapsent('%fooValue%', Criteria::LIKE); // WHERE OehhLmDelayCapSent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhlmdelaycapsent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhlmdelaycapsent($oehhlmdelaycapsent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhlmdelaycapsent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT, $oehhlmdelaycapsent, $comparison);
    }

    /**
     * Filter the query on the OehhMfgId column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhmfgid('fooValue');   // WHERE OehhMfgId = 'fooValue'
     * $query->filterByOehhmfgid('%fooValue%', Criteria::LIKE); // WHERE OehhMfgId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhmfgid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhmfgid($oehhmfgid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhmfgid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHMFGID, $oehhmfgid, $comparison);
    }

    /**
     * Filter the query on the OehhStoreId column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhstoreid('fooValue');   // WHERE OehhStoreId = 'fooValue'
     * $query->filterByOehhstoreid('%fooValue%', Criteria::LIKE); // WHERE OehhStoreId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhstoreid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhstoreid($oehhstoreid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstoreid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSTOREID, $oehhstoreid, $comparison);
    }

    /**
     * Filter the query on the OehhPickQueue column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpickqueue('fooValue');   // WHERE OehhPickQueue = 'fooValue'
     * $query->filterByOehhpickqueue('%fooValue%', Criteria::LIKE); // WHERE OehhPickQueue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpickqueue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpickqueue($oehhpickqueue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickqueue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPICKQUEUE, $oehhpickqueue, $comparison);
    }

    /**
     * Filter the query on the OehhArrvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehharrvdate('fooValue');   // WHERE OehhArrvDate = 'fooValue'
     * $query->filterByOehharrvdate('%fooValue%', Criteria::LIKE); // WHERE OehhArrvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehharrvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehharrvdate($oehharrvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehharrvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHARRVDATE, $oehharrvdate, $comparison);
    }

    /**
     * Filter the query on the OehhSurchgStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhsurchgstat('fooValue');   // WHERE OehhSurchgStat = 'fooValue'
     * $query->filterByOehhsurchgstat('%fooValue%', Criteria::LIKE); // WHERE OehhSurchgStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhsurchgstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhsurchgstat($oehhsurchgstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhsurchgstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHSURCHGSTAT, $oehhsurchgstat, $comparison);
    }

    /**
     * Filter the query on the OehhFrtGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrtgrup('fooValue');   // WHERE OehhFrtGrup = 'fooValue'
     * $query->filterByOehhfrtgrup('%fooValue%', Criteria::LIKE); // WHERE OehhFrtGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrtgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrtgrup($oehhfrtgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTGRUP, $oehhfrtgrup, $comparison);
    }

    /**
     * Filter the query on the OehhCommOride column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhcommoride('fooValue');   // WHERE OehhCommOride = 'fooValue'
     * $query->filterByOehhcommoride('%fooValue%', Criteria::LIKE); // WHERE OehhCommOride LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhcommoride The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhcommoride($oehhcommoride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcommoride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCOMMORIDE, $oehhcommoride, $comparison);
    }

    /**
     * Filter the query on the OehhChrgSplt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhchrgsplt('fooValue');   // WHERE OehhChrgSplt = 'fooValue'
     * $query->filterByOehhchrgsplt('%fooValue%', Criteria::LIKE); // WHERE OehhChrgSplt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhchrgsplt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhchrgsplt($oehhchrgsplt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhchrgsplt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHCHRGSPLT, $oehhchrgsplt, $comparison);
    }

    /**
     * Filter the query on the OehhAcCcAprv column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhacccaprv('fooValue');   // WHERE OehhAcCcAprv = 'fooValue'
     * $query->filterByOehhacccaprv('%fooValue%', Criteria::LIKE); // WHERE OehhAcCcAprv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhacccaprv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhacccaprv($oehhacccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhacccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHACCCAPRV, $oehhacccaprv, $comparison);
    }

    /**
     * Filter the query on the OehhOrigOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhorigordrnbr('fooValue');   // WHERE OehhOrigOrdrNbr = 'fooValue'
     * $query->filterByOehhorigordrnbr('%fooValue%', Criteria::LIKE); // WHERE OehhOrigOrdrNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhorigordrnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhorigordrnbr($oehhorigordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhorigordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHORIGORDRNBR, $oehhorigordrnbr, $comparison);
    }

    /**
     * Filter the query on the OehhPostDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhpostdate('fooValue');   // WHERE OehhPostDate = 'fooValue'
     * $query->filterByOehhpostdate('%fooValue%', Criteria::LIKE); // WHERE OehhPostDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhpostdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhpostdate($oehhpostdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpostdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHPOSTDATE, $oehhpostdate, $comparison);
    }

    /**
     * Filter the query on the OehhDiscDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate1('fooValue');   // WHERE OehhDiscDate1 = 'fooValue'
     * $query->filterByOehhdiscdate1('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdiscdate1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate1($oehhdiscdate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE1, $oehhdiscdate1, $comparison);
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
     * @param     mixed $oehhdiscpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct1($oehhdiscpct1 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT1, $oehhdiscpct1, $comparison);
    }

    /**
     * Filter the query on the OehhDueDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate1('fooValue');   // WHERE OehhDueDate1 = 'fooValue'
     * $query->filterByOehhduedate1('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhduedate1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduedate1($oehhduedate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE1, $oehhduedate1, $comparison);
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
     * @param     mixed $oehhdueamt1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt1($oehhdueamt1 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT1, $oehhdueamt1, $comparison);
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
     * @param     mixed $oehhduepct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduepct1($oehhduepct1 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT1, $oehhduepct1, $comparison);
    }

    /**
     * Filter the query on the OehhDiscDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate2('fooValue');   // WHERE OehhDiscDate2 = 'fooValue'
     * $query->filterByOehhdiscdate2('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdiscdate2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate2($oehhdiscdate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE2, $oehhdiscdate2, $comparison);
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
     * @param     mixed $oehhdiscpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct2($oehhdiscpct2 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT2, $oehhdiscpct2, $comparison);
    }

    /**
     * Filter the query on the OehhDueDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate2('fooValue');   // WHERE OehhDueDate2 = 'fooValue'
     * $query->filterByOehhduedate2('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhduedate2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduedate2($oehhduedate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE2, $oehhduedate2, $comparison);
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
     * @param     mixed $oehhdueamt2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt2($oehhdueamt2 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT2, $oehhdueamt2, $comparison);
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
     * @param     mixed $oehhduepct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduepct2($oehhduepct2 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT2, $oehhduepct2, $comparison);
    }

    /**
     * Filter the query on the OehhDiscDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate3('fooValue');   // WHERE OehhDiscDate3 = 'fooValue'
     * $query->filterByOehhdiscdate3('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdiscdate3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate3($oehhdiscdate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE3, $oehhdiscdate3, $comparison);
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
     * @param     mixed $oehhdiscpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct3($oehhdiscpct3 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT3, $oehhdiscpct3, $comparison);
    }

    /**
     * Filter the query on the OehhDueDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate3('fooValue');   // WHERE OehhDueDate3 = 'fooValue'
     * $query->filterByOehhduedate3('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhduedate3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduedate3($oehhduedate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE3, $oehhduedate3, $comparison);
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
     * @param     mixed $oehhdueamt3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt3($oehhdueamt3 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT3, $oehhdueamt3, $comparison);
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
     * @param     mixed $oehhduepct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduepct3($oehhduepct3 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT3, $oehhduepct3, $comparison);
    }

    /**
     * Filter the query on the OehhDiscDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate4('fooValue');   // WHERE OehhDiscDate4 = 'fooValue'
     * $query->filterByOehhdiscdate4('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdiscdate4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate4($oehhdiscdate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE4, $oehhdiscdate4, $comparison);
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
     * @param     mixed $oehhdiscpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct4($oehhdiscpct4 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT4, $oehhdiscpct4, $comparison);
    }

    /**
     * Filter the query on the OehhDueDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate4('fooValue');   // WHERE OehhDueDate4 = 'fooValue'
     * $query->filterByOehhduedate4('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhduedate4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduedate4($oehhduedate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE4, $oehhduedate4, $comparison);
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
     * @param     mixed $oehhdueamt4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt4($oehhdueamt4 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT4, $oehhdueamt4, $comparison);
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
     * @param     mixed $oehhduepct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduepct4($oehhduepct4 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT4, $oehhduepct4, $comparison);
    }

    /**
     * Filter the query on the OehhDiscDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate5('fooValue');   // WHERE OehhDiscDate5 = 'fooValue'
     * $query->filterByOehhdiscdate5('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdiscdate5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate5($oehhdiscdate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE5, $oehhdiscdate5, $comparison);
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
     * @param     mixed $oehhdiscpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct5($oehhdiscpct5 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT5, $oehhdiscpct5, $comparison);
    }

    /**
     * Filter the query on the OehhDueDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate5('fooValue');   // WHERE OehhDueDate5 = 'fooValue'
     * $query->filterByOehhduedate5('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhduedate5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduedate5($oehhduedate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE5, $oehhduedate5, $comparison);
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
     * @param     mixed $oehhdueamt5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt5($oehhdueamt5 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT5, $oehhdueamt5, $comparison);
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
     * @param     mixed $oehhduepct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduepct5($oehhduepct5 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT5, $oehhduepct5, $comparison);
    }

    /**
     * Filter the query on the OehhDiscDate6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhdiscdate6('fooValue');   // WHERE OehhDiscDate6 = 'fooValue'
     * $query->filterByOehhdiscdate6('%fooValue%', Criteria::LIKE); // WHERE OehhDiscDate6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhdiscdate6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate6($oehhdiscdate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCDATE6, $oehhdiscdate6, $comparison);
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
     * @param     mixed $oehhdiscpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct6($oehhdiscpct6 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDISCPCT6, $oehhdiscpct6, $comparison);
    }

    /**
     * Filter the query on the OehhDueDate6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhduedate6('fooValue');   // WHERE OehhDueDate6 = 'fooValue'
     * $query->filterByOehhduedate6('%fooValue%', Criteria::LIKE); // WHERE OehhDueDate6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhduedate6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduedate6($oehhduedate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEDATE6, $oehhduedate6, $comparison);
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
     * @param     mixed $oehhdueamt6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt6($oehhdueamt6 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEAMT6, $oehhdueamt6, $comparison);
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
     * @param     mixed $oehhduepct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhduepct6($oehhduepct6 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHDUEPCT6, $oehhduepct6, $comparison);
    }

    /**
     * Filter the query on the OehhRefNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhrefnbr('fooValue');   // WHERE OehhRefNbr = 'fooValue'
     * $query->filterByOehhrefnbr('%fooValue%', Criteria::LIKE); // WHERE OehhRefNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhrefnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhrefnbr($oehhrefnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhrefnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHREFNBR, $oehhrefnbr, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode1('fooValue');   // WHERE OehhFrtTaxCode1 = 'fooValue'
     * $query->filterByOehhfrttaxcode1('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode1($oehhfrttaxcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE1, $oehhfrttaxcode1, $comparison);
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
     * @param     mixed $oehhfrttaxamt1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt1($oehhfrttaxamt1 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1, $oehhfrttaxamt1, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode2('fooValue');   // WHERE OehhFrtTaxCode2 = 'fooValue'
     * $query->filterByOehhfrttaxcode2('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode2($oehhfrttaxcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE2, $oehhfrttaxcode2, $comparison);
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
     * @param     mixed $oehhfrttaxamt2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt2($oehhfrttaxamt2 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2, $oehhfrttaxamt2, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode3('fooValue');   // WHERE OehhFrtTaxCode3 = 'fooValue'
     * $query->filterByOehhfrttaxcode3('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode3($oehhfrttaxcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE3, $oehhfrttaxcode3, $comparison);
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
     * @param     mixed $oehhfrttaxamt3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt3($oehhfrttaxamt3 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3, $oehhfrttaxamt3, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode4('fooValue');   // WHERE OehhFrtTaxCode4 = 'fooValue'
     * $query->filterByOehhfrttaxcode4('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode4($oehhfrttaxcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE4, $oehhfrttaxcode4, $comparison);
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
     * @param     mixed $oehhfrttaxamt4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt4($oehhfrttaxamt4 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4, $oehhfrttaxamt4, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode5('fooValue');   // WHERE OehhFrtTaxCode5 = 'fooValue'
     * $query->filterByOehhfrttaxcode5('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode5($oehhfrttaxcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE5, $oehhfrttaxcode5, $comparison);
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
     * @param     mixed $oehhfrttaxamt5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt5($oehhfrttaxamt5 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5, $oehhfrttaxamt5, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode6('fooValue');   // WHERE OehhFrtTaxCode6 = 'fooValue'
     * $query->filterByOehhfrttaxcode6('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode6($oehhfrttaxcode6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE6, $oehhfrttaxcode6, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxAmt6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt6(1234); // WHERE OehhFrtTaxAmt6 = 1234
     * $query->filterByOehhfrttaxamt6(array(12, 34)); // WHERE OehhFrtTaxAmt6 IN (12, 34)
     * $query->filterByOehhfrttaxamt6(array('min' => 12)); // WHERE OehhFrtTaxAmt6 > 12
     * </code>
     *
     * @param     mixed $oehhfrttaxamt6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt6($oehhfrttaxamt6 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt6)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt6['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT6, $oehhfrttaxamt6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt6['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT6, $oehhfrttaxamt6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT6, $oehhfrttaxamt6, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode7('fooValue');   // WHERE OehhFrtTaxCode7 = 'fooValue'
     * $query->filterByOehhfrttaxcode7('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode7($oehhfrttaxcode7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE7, $oehhfrttaxcode7, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxAmt7 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt7(1234); // WHERE OehhFrtTaxAmt7 = 1234
     * $query->filterByOehhfrttaxamt7(array(12, 34)); // WHERE OehhFrtTaxAmt7 IN (12, 34)
     * $query->filterByOehhfrttaxamt7(array('min' => 12)); // WHERE OehhFrtTaxAmt7 > 12
     * </code>
     *
     * @param     mixed $oehhfrttaxamt7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt7($oehhfrttaxamt7 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt7)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt7['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT7, $oehhfrttaxamt7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt7['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT7, $oehhfrttaxamt7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT7, $oehhfrttaxamt7, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode8('fooValue');   // WHERE OehhFrtTaxCode8 = 'fooValue'
     * $query->filterByOehhfrttaxcode8('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode8($oehhfrttaxcode8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE8, $oehhfrttaxcode8, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxAmt8 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt8(1234); // WHERE OehhFrtTaxAmt8 = 1234
     * $query->filterByOehhfrttaxamt8(array(12, 34)); // WHERE OehhFrtTaxAmt8 IN (12, 34)
     * $query->filterByOehhfrttaxamt8(array('min' => 12)); // WHERE OehhFrtTaxAmt8 > 12
     * </code>
     *
     * @param     mixed $oehhfrttaxamt8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt8($oehhfrttaxamt8 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt8)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt8['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT8, $oehhfrttaxamt8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt8['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT8, $oehhfrttaxamt8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT8, $oehhfrttaxamt8, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxcode9('fooValue');   // WHERE OehhFrtTaxCode9 = 'fooValue'
     * $query->filterByOehhfrttaxcode9('%fooValue%', Criteria::LIKE); // WHERE OehhFrtTaxCode9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhfrttaxcode9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode9($oehhfrttaxcode9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXCODE9, $oehhfrttaxcode9, $comparison);
    }

    /**
     * Filter the query on the OehhFrtTaxAmt9 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhfrttaxamt9(1234); // WHERE OehhFrtTaxAmt9 = 1234
     * $query->filterByOehhfrttaxamt9(array(12, 34)); // WHERE OehhFrtTaxAmt9 IN (12, 34)
     * $query->filterByOehhfrttaxamt9(array('min' => 12)); // WHERE OehhFrtTaxAmt9 > 12
     * </code>
     *
     * @param     mixed $oehhfrttaxamt9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt9($oehhfrttaxamt9 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt9)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt9['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT9, $oehhfrttaxamt9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt9['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT9, $oehhfrttaxamt9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHFRTTAXAMT9, $oehhfrttaxamt9, $comparison);
    }

    /**
     * Filter the query on the OehhAcProgNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhacprognbr('fooValue');   // WHERE OehhAcProgNbr = 'fooValue'
     * $query->filterByOehhacprognbr('%fooValue%', Criteria::LIKE); // WHERE OehhAcProgNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhacprognbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhacprognbr($oehhacprognbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhacprognbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHACPROGNBR, $oehhacprognbr, $comparison);
    }

    /**
     * Filter the query on the OehhAcProgExpDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhacprogexpdate('fooValue');   // WHERE OehhAcProgExpDate = 'fooValue'
     * $query->filterByOehhacprogexpdate('%fooValue%', Criteria::LIKE); // WHERE OehhAcProgExpDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhacprogexpdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOehhacprogexpdate($oehhacprogexpdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhacprogexpdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_OEHHACPROGEXPDATE, $oehhacprogexpdate, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(SalesHistoryTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesHistoryTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
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
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \SalesHistoryDetail object
     *
     * @param \SalesHistoryDetail|ObjectCollection $salesHistoryDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterBySalesHistoryDetail($salesHistoryDetail, $comparison = null)
    {
        if ($salesHistoryDetail instanceof \SalesHistoryDetail) {
            return $this
                ->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $salesHistoryDetail->getOehhnbr(), $comparison);
        } elseif ($salesHistoryDetail instanceof ObjectCollection) {
            return $this
                ->useSalesHistoryDetailQuery()
                ->filterByPrimaryKeys($salesHistoryDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesHistoryDetail() only accepts arguments of type \SalesHistoryDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function joinSalesHistoryDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \SalesOrderShipment object
     *
     * @param \SalesOrderShipment|ObjectCollection $salesOrderShipment the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterBySalesOrderShipment($salesOrderShipment, $comparison = null)
    {
        if ($salesOrderShipment instanceof \SalesOrderShipment) {
            return $this
                ->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $salesOrderShipment->getOehshnbr(), $comparison);
        } elseif ($salesOrderShipment instanceof ObjectCollection) {
            return $this
                ->useSalesOrderShipmentQuery()
                ->filterByPrimaryKeys($salesOrderShipment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesOrderShipment() only accepts arguments of type \SalesOrderShipment or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderShipment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function joinSalesOrderShipment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \SalesHistoryLotserial object
     *
     * @param \SalesHistoryLotserial|ObjectCollection $salesHistoryLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterBySalesHistoryLotserial($salesHistoryLotserial, $comparison = null)
    {
        if ($salesHistoryLotserial instanceof \SalesHistoryLotserial) {
            return $this
                ->addUsingAlias(SalesHistoryTableMap::COL_OEHHNBR, $salesHistoryLotserial->getOehhnbr(), $comparison);
        } elseif ($salesHistoryLotserial instanceof ObjectCollection) {
            return $this
                ->useSalesHistoryLotserialQuery()
                ->filterByPrimaryKeys($salesHistoryLotserial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesHistoryLotserial() only accepts arguments of type \SalesHistoryLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function joinSalesHistoryLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildSalesHistory $salesHistory Object to remove from the list of results
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // SalesHistoryQuery
