<?php

namespace Base;

use \SoHeadHist as ChildSoHeadHist;
use \SoHeadHistQuery as ChildSoHeadHistQuery;
use \Exception;
use \PDO;
use Map\SoHeadHistTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_head_hist' table.
 *
 *
 *
 * @method     ChildSoHeadHistQuery orderByOehhnbr($order = Criteria::ASC) Order by the OehhNbr column
 * @method     ChildSoHeadHistQuery orderByOehhyear($order = Criteria::ASC) Order by the OehhYear column
 * @method     ChildSoHeadHistQuery orderByOehhstat($order = Criteria::ASC) Order by the OehhStat column
 * @method     ChildSoHeadHistQuery orderByOehhhold($order = Criteria::ASC) Order by the OehhHold column
 * @method     ChildSoHeadHistQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildSoHeadHistQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildSoHeadHistQuery orderByOehhstname($order = Criteria::ASC) Order by the OehhStName column
 * @method     ChildSoHeadHistQuery orderByOehhstlastname($order = Criteria::ASC) Order by the OehhStLastName column
 * @method     ChildSoHeadHistQuery orderByOehhstfirstname($order = Criteria::ASC) Order by the OehhStFirstName column
 * @method     ChildSoHeadHistQuery orderByOehhstadr1($order = Criteria::ASC) Order by the OehhStAdr1 column
 * @method     ChildSoHeadHistQuery orderByOehhstadr2($order = Criteria::ASC) Order by the OehhStAdr2 column
 * @method     ChildSoHeadHistQuery orderByOehhstadr3($order = Criteria::ASC) Order by the OehhStAdr3 column
 * @method     ChildSoHeadHistQuery orderByOehhstctry($order = Criteria::ASC) Order by the OehhStCtry column
 * @method     ChildSoHeadHistQuery orderByOehhstcity($order = Criteria::ASC) Order by the OehhStCity column
 * @method     ChildSoHeadHistQuery orderByOehhststat($order = Criteria::ASC) Order by the OehhStStat column
 * @method     ChildSoHeadHistQuery orderByOehhstzipcode($order = Criteria::ASC) Order by the OehhStZipCode column
 * @method     ChildSoHeadHistQuery orderByOehhcustpo($order = Criteria::ASC) Order by the OehhCustPo column
 * @method     ChildSoHeadHistQuery orderByOehhordrdate($order = Criteria::ASC) Order by the OehhOrdrDate column
 * @method     ChildSoHeadHistQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildSoHeadHistQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildSoHeadHistQuery orderByArininvnbr($order = Criteria::ASC) Order by the ArinInvNbr column
 * @method     ChildSoHeadHistQuery orderByOehhinvdate($order = Criteria::ASC) Order by the OehhInvDate column
 * @method     ChildSoHeadHistQuery orderByOehhglpd($order = Criteria::ASC) Order by the OehhGLPd column
 * @method     ChildSoHeadHistQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildSoHeadHistQuery orderByOehhsp1pct($order = Criteria::ASC) Order by the OehhSp1Pct column
 * @method     ChildSoHeadHistQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildSoHeadHistQuery orderByOehhsp2pct($order = Criteria::ASC) Order by the OehhSp2Pct column
 * @method     ChildSoHeadHistQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildSoHeadHistQuery orderByOehhsp3pct($order = Criteria::ASC) Order by the OehhSp3Pct column
 * @method     ChildSoHeadHistQuery orderByOehhcntrnbr($order = Criteria::ASC) Order by the OehhCntrNbr column
 * @method     ChildSoHeadHistQuery orderByOehhwibatch($order = Criteria::ASC) Order by the OehhWiBatch column
 * @method     ChildSoHeadHistQuery orderByOehhdroprelhold($order = Criteria::ASC) Order by the OehhDropRelHold column
 * @method     ChildSoHeadHistQuery orderByOehhtaxsub($order = Criteria::ASC) Order by the OehhTaxSub column
 * @method     ChildSoHeadHistQuery orderByOehhnontaxsub($order = Criteria::ASC) Order by the OehhNonTaxSub column
 * @method     ChildSoHeadHistQuery orderByOehhtaxtot($order = Criteria::ASC) Order by the OehhTaxTot column
 * @method     ChildSoHeadHistQuery orderByOehhfrttot($order = Criteria::ASC) Order by the OehhFrtTot column
 * @method     ChildSoHeadHistQuery orderByOehhmisctot($order = Criteria::ASC) Order by the OehhMiscTot column
 * @method     ChildSoHeadHistQuery orderByOehhordrtot($order = Criteria::ASC) Order by the OehhOrdrTot column
 * @method     ChildSoHeadHistQuery orderByOehhcosttot($order = Criteria::ASC) Order by the OehhCostTot column
 * @method     ChildSoHeadHistQuery orderByOehhspcommlock($order = Criteria::ASC) Order by the OehhSpCommLock column
 * @method     ChildSoHeadHistQuery orderByOehhtakendate($order = Criteria::ASC) Order by the OehhTakenDate column
 * @method     ChildSoHeadHistQuery orderByOehhtakentime($order = Criteria::ASC) Order by the OehhTakenTime column
 * @method     ChildSoHeadHistQuery orderByOehhpickdate($order = Criteria::ASC) Order by the OehhPickDate column
 * @method     ChildSoHeadHistQuery orderByOehhpicktime($order = Criteria::ASC) Order by the OehhPickTime column
 * @method     ChildSoHeadHistQuery orderByOehhpackdate($order = Criteria::ASC) Order by the OehhPackDate column
 * @method     ChildSoHeadHistQuery orderByOehhpacktime($order = Criteria::ASC) Order by the OehhPackTime column
 * @method     ChildSoHeadHistQuery orderByOehhverifydate($order = Criteria::ASC) Order by the OehhVerifyDate column
 * @method     ChildSoHeadHistQuery orderByOehhverifytime($order = Criteria::ASC) Order by the OehhVerifyTime column
 * @method     ChildSoHeadHistQuery orderByOehhcreditmemo($order = Criteria::ASC) Order by the OehhCreditMemo column
 * @method     ChildSoHeadHistQuery orderByOehhbookedyn($order = Criteria::ASC) Order by the OehhBookedYn column
 * @method     ChildSoHeadHistQuery orderByIntbwhseorig($order = Criteria::ASC) Order by the IntbWhseOrig column
 * @method     ChildSoHeadHistQuery orderByOehhbtstat($order = Criteria::ASC) Order by the OehhBtStat column
 * @method     ChildSoHeadHistQuery orderByOehhshipcomp($order = Criteria::ASC) Order by the OehhShipComp column
 * @method     ChildSoHeadHistQuery orderByOehhcwoflag($order = Criteria::ASC) Order by the OehhCwoFlag column
 * @method     ChildSoHeadHistQuery orderByOehhdivision($order = Criteria::ASC) Order by the OehhDivision column
 * @method     ChildSoHeadHistQuery orderByOehhtakencode($order = Criteria::ASC) Order by the OehhTakenCode column
 * @method     ChildSoHeadHistQuery orderByOehhpickcode($order = Criteria::ASC) Order by the OehhPickCode column
 * @method     ChildSoHeadHistQuery orderByOehhpackcode($order = Criteria::ASC) Order by the OehhPackCode column
 * @method     ChildSoHeadHistQuery orderByOehhverifycode($order = Criteria::ASC) Order by the OehhVerifyCode column
 * @method     ChildSoHeadHistQuery orderByOehhtotdisc($order = Criteria::ASC) Order by the OehhTotDisc column
 * @method     ChildSoHeadHistQuery orderByOehhedirefnbrqual($order = Criteria::ASC) Order by the OehhEdiRefNbrQual column
 * @method     ChildSoHeadHistQuery orderByOehhusercode1($order = Criteria::ASC) Order by the OehhUserCode1 column
 * @method     ChildSoHeadHistQuery orderByOehhusercode2($order = Criteria::ASC) Order by the OehhUserCode2 column
 * @method     ChildSoHeadHistQuery orderByOehhusercode3($order = Criteria::ASC) Order by the OehhUserCode3 column
 * @method     ChildSoHeadHistQuery orderByOehhusercode4($order = Criteria::ASC) Order by the OehhUserCode4 column
 * @method     ChildSoHeadHistQuery orderByOehhexchctry($order = Criteria::ASC) Order by the OehhExchCtry column
 * @method     ChildSoHeadHistQuery orderByOehhexchrate($order = Criteria::ASC) Order by the OehhExchRate column
 * @method     ChildSoHeadHistQuery orderByOehhwghttot($order = Criteria::ASC) Order by the OehhWghtTot column
 * @method     ChildSoHeadHistQuery orderByOehhwghtoride($order = Criteria::ASC) Order by the OehhWghtOride column
 * @method     ChildSoHeadHistQuery orderByOehhccinfo($order = Criteria::ASC) Order by the OehhCcInfo column
 * @method     ChildSoHeadHistQuery orderByOehhboxcount($order = Criteria::ASC) Order by the OehhBoxCount column
 * @method     ChildSoHeadHistQuery orderByOehhrqstdate($order = Criteria::ASC) Order by the OehhRqstDate column
 * @method     ChildSoHeadHistQuery orderByOehhcancdate($order = Criteria::ASC) Order by the OehhCancDate column
 * @method     ChildSoHeadHistQuery orderByOehhcrntuser($order = Criteria::ASC) Order by the OehhCrntUser column
 * @method     ChildSoHeadHistQuery orderByOehhreleasenbr($order = Criteria::ASC) Order by the OehhReleaseNbr column
 * @method     ChildSoHeadHistQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildSoHeadHistQuery orderByOehhbordbuilddate($order = Criteria::ASC) Order by the OehhBordBuildDate column
 * @method     ChildSoHeadHistQuery orderByOehhdeptcode($order = Criteria::ASC) Order by the OehhDeptCode column
 * @method     ChildSoHeadHistQuery orderByOehhfrtinentered($order = Criteria::ASC) Order by the OehhFrtInEntered column
 * @method     ChildSoHeadHistQuery orderByOehhdropshipentered($order = Criteria::ASC) Order by the OehhDropShipEntered column
 * @method     ChildSoHeadHistQuery orderByOehherflag($order = Criteria::ASC) Order by the OehhErFlag column
 * @method     ChildSoHeadHistQuery orderByOehhfrtin($order = Criteria::ASC) Order by the OehhFrtIn column
 * @method     ChildSoHeadHistQuery orderByOehhdropship($order = Criteria::ASC) Order by the OehhDropShip column
 * @method     ChildSoHeadHistQuery orderByOehhminorder($order = Criteria::ASC) Order by the OehhMinOrder column
 * @method     ChildSoHeadHistQuery orderByOehhcontractterms($order = Criteria::ASC) Order by the OehhContractTerms column
 * @method     ChildSoHeadHistQuery orderByOehhdropshipbilled($order = Criteria::ASC) Order by the OehhDropShipBilled column
 * @method     ChildSoHeadHistQuery orderByOehhordtyp($order = Criteria::ASC) Order by the OehhOrdTyp column
 * @method     ChildSoHeadHistQuery orderByOehhtracknbr($order = Criteria::ASC) Order by the OehhTrackNbr column
 * @method     ChildSoHeadHistQuery orderByOehhsource($order = Criteria::ASC) Order by the OehhSource column
 * @method     ChildSoHeadHistQuery orderByOehhccaprv($order = Criteria::ASC) Order by the OehhCcAprv column
 * @method     ChildSoHeadHistQuery orderByOehhpickfmattype($order = Criteria::ASC) Order by the OehhPickFmatType column
 * @method     ChildSoHeadHistQuery orderByOehhinvcfmattype($order = Criteria::ASC) Order by the OehhInvcFmatType column
 * @method     ChildSoHeadHistQuery orderByOehhcashamt($order = Criteria::ASC) Order by the OehhCashAmt column
 * @method     ChildSoHeadHistQuery orderByOehhcheckamt($order = Criteria::ASC) Order by the OehhCheckAmt column
 * @method     ChildSoHeadHistQuery orderByOehhchecknbr($order = Criteria::ASC) Order by the OehhCheckNbr column
 * @method     ChildSoHeadHistQuery orderByOehhdepositamt($order = Criteria::ASC) Order by the OehhDepositAmt column
 * @method     ChildSoHeadHistQuery orderByOehhdepositnbr($order = Criteria::ASC) Order by the OehhDepositNbr column
 * @method     ChildSoHeadHistQuery orderByOehhccamt($order = Criteria::ASC) Order by the OehhCcAmt column
 * @method     ChildSoHeadHistQuery orderByOehhotaxsub($order = Criteria::ASC) Order by the OehhOTaxSub column
 * @method     ChildSoHeadHistQuery orderByOehhonontaxsub($order = Criteria::ASC) Order by the OehhONonTaxSub column
 * @method     ChildSoHeadHistQuery orderByOehhotaxtot($order = Criteria::ASC) Order by the OehhOTaxTot column
 * @method     ChildSoHeadHistQuery orderByOehhoordrtot($order = Criteria::ASC) Order by the OehhOOrdrTot column
 * @method     ChildSoHeadHistQuery orderByOehhpickprintdate($order = Criteria::ASC) Order by the OehhPickPrintDate column
 * @method     ChildSoHeadHistQuery orderByOehhpickprinttime($order = Criteria::ASC) Order by the OehhPickPrintTime column
 * @method     ChildSoHeadHistQuery orderByOehhcont($order = Criteria::ASC) Order by the OehhCont column
 * @method     ChildSoHeadHistQuery orderByOehhcontteleintl($order = Criteria::ASC) Order by the OehhContTeleIntl column
 * @method     ChildSoHeadHistQuery orderByOehhconttelenbr($order = Criteria::ASC) Order by the OehhContTeleNbr column
 * @method     ChildSoHeadHistQuery orderByOehhcontteleext($order = Criteria::ASC) Order by the OehhContTeleExt column
 * @method     ChildSoHeadHistQuery orderByOehhcontfaxintl($order = Criteria::ASC) Order by the OehhContFaxIntl column
 * @method     ChildSoHeadHistQuery orderByOehhcontfaxnbr($order = Criteria::ASC) Order by the OehhContFaxNbr column
 * @method     ChildSoHeadHistQuery orderByOehhshipacct($order = Criteria::ASC) Order by the OehhShipAcct column
 * @method     ChildSoHeadHistQuery orderByOehhchgdue($order = Criteria::ASC) Order by the OehhChgDue column
 * @method     ChildSoHeadHistQuery orderByOehhaddlpricdisc($order = Criteria::ASC) Order by the OehhAddlPricDisc column
 * @method     ChildSoHeadHistQuery orderByOehhallship($order = Criteria::ASC) Order by the OehhAllShip column
 * @method     ChildSoHeadHistQuery orderByOehhqtyorderamt($order = Criteria::ASC) Order by the OehhQtyOrderAmt column
 * @method     ChildSoHeadHistQuery orderByOehhcreditapplied($order = Criteria::ASC) Order by the OehhCreditApplied column
 * @method     ChildSoHeadHistQuery orderByOehhinvcprintdate($order = Criteria::ASC) Order by the OehhInvcPrintDate column
 * @method     ChildSoHeadHistQuery orderByOehhinvcprinttime($order = Criteria::ASC) Order by the OehhInvcPrintTime column
 * @method     ChildSoHeadHistQuery orderByOehhdiscfrt($order = Criteria::ASC) Order by the OehhDiscFrt column
 * @method     ChildSoHeadHistQuery orderByOehhorideshipcomp($order = Criteria::ASC) Order by the OehhOrideShipComp column
 * @method     ChildSoHeadHistQuery orderByOehhcontemail($order = Criteria::ASC) Order by the OehhContEmail column
 * @method     ChildSoHeadHistQuery orderByOehhmanualfrt($order = Criteria::ASC) Order by the OehhManualFrt column
 * @method     ChildSoHeadHistQuery orderByOehhinternalfrt($order = Criteria::ASC) Order by the OehhInternalFrt column
 * @method     ChildSoHeadHistQuery orderByOehhfrtcost($order = Criteria::ASC) Order by the OehhFrtCost column
 * @method     ChildSoHeadHistQuery orderByOehhroute($order = Criteria::ASC) Order by the OehhRoute column
 * @method     ChildSoHeadHistQuery orderByOehhrouteseq($order = Criteria::ASC) Order by the OehhRouteSeq column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxcode1($order = Criteria::ASC) Order by the OehhFrtTaxCode1 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxamt1($order = Criteria::ASC) Order by the OehhFrtTaxAmt1 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxcode2($order = Criteria::ASC) Order by the OehhFrtTaxCode2 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxamt2($order = Criteria::ASC) Order by the OehhFrtTaxAmt2 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxcode3($order = Criteria::ASC) Order by the OehhFrtTaxCode3 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxamt3($order = Criteria::ASC) Order by the OehhFrtTaxAmt3 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxcode4($order = Criteria::ASC) Order by the OehhFrtTaxCode4 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxamt4($order = Criteria::ASC) Order by the OehhFrtTaxAmt4 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxcode5($order = Criteria::ASC) Order by the OehhFrtTaxCode5 column
 * @method     ChildSoHeadHistQuery orderByOehhfrttaxamt5($order = Criteria::ASC) Order by the OehhFrtTaxAmt5 column
 * @method     ChildSoHeadHistQuery orderByOehhedi855sent($order = Criteria::ASC) Order by the OehhEdi855Sent column
 * @method     ChildSoHeadHistQuery orderByOehhfrt3rdparty($order = Criteria::ASC) Order by the OehhFrt3rdParty column
 * @method     ChildSoHeadHistQuery orderByOehhfob($order = Criteria::ASC) Order by the OehhFob column
 * @method     ChildSoHeadHistQuery orderByOehhconfirmimagyn($order = Criteria::ASC) Order by the OehhConfirmImagYn column
 * @method     ChildSoHeadHistQuery orderByOehhindustconform($order = Criteria::ASC) Order by the OehhIndustConform column
 * @method     ChildSoHeadHistQuery orderByOehhcstkconsign($order = Criteria::ASC) Order by the OehhCstkConsign column
 * @method     ChildSoHeadHistQuery orderByOehhlmdelaycapsent($order = Criteria::ASC) Order by the OehhLmDelayCapSent column
 * @method     ChildSoHeadHistQuery orderByOehhmfgid($order = Criteria::ASC) Order by the OehhMfgId column
 * @method     ChildSoHeadHistQuery orderByOehhstoreid($order = Criteria::ASC) Order by the OehhStoreId column
 * @method     ChildSoHeadHistQuery orderByOehhpickqueue($order = Criteria::ASC) Order by the OehhPickQueue column
 * @method     ChildSoHeadHistQuery orderByOehharrvdate($order = Criteria::ASC) Order by the OehhArrvDate column
 * @method     ChildSoHeadHistQuery orderByOehhsurchgstat($order = Criteria::ASC) Order by the OehhSurchgStat column
 * @method     ChildSoHeadHistQuery orderByOehhfrtgrup($order = Criteria::ASC) Order by the OehhFrtGrup column
 * @method     ChildSoHeadHistQuery orderByOehhcommoride($order = Criteria::ASC) Order by the OehhCommOride column
 * @method     ChildSoHeadHistQuery orderByOehhchrgsplt($order = Criteria::ASC) Order by the OehhChrgSplt column
 * @method     ChildSoHeadHistQuery orderByOehhacccaprv($order = Criteria::ASC) Order by the OehhAcCcAprv column
 * @method     ChildSoHeadHistQuery orderByOehhorigordrnbr($order = Criteria::ASC) Order by the OehhOrigOrdrNbr column
 * @method     ChildSoHeadHistQuery orderByOehhpostdate($order = Criteria::ASC) Order by the OehhPostDate column
 * @method     ChildSoHeadHistQuery orderByOehhdiscdate1($order = Criteria::ASC) Order by the OehhDiscDate1 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscpct1($order = Criteria::ASC) Order by the OehhDiscPct1 column
 * @method     ChildSoHeadHistQuery orderByOehhduedate1($order = Criteria::ASC) Order by the OehhDueDate1 column
 * @method     ChildSoHeadHistQuery orderByOehhdueamt1($order = Criteria::ASC) Order by the OehhDueAmt1 column
 * @method     ChildSoHeadHistQuery orderByOehhduepct1($order = Criteria::ASC) Order by the OehhDuePct1 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscdate2($order = Criteria::ASC) Order by the OehhDiscDate2 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscpct2($order = Criteria::ASC) Order by the OehhDiscPct2 column
 * @method     ChildSoHeadHistQuery orderByOehhduedate2($order = Criteria::ASC) Order by the OehhDueDate2 column
 * @method     ChildSoHeadHistQuery orderByOehhdueamt2($order = Criteria::ASC) Order by the OehhDueAmt2 column
 * @method     ChildSoHeadHistQuery orderByOehhduepct2($order = Criteria::ASC) Order by the OehhDuePct2 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscdate3($order = Criteria::ASC) Order by the OehhDiscDate3 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscpct3($order = Criteria::ASC) Order by the OehhDiscPct3 column
 * @method     ChildSoHeadHistQuery orderByOehhduedate3($order = Criteria::ASC) Order by the OehhDueDate3 column
 * @method     ChildSoHeadHistQuery orderByOehhdueamt3($order = Criteria::ASC) Order by the OehhDueAmt3 column
 * @method     ChildSoHeadHistQuery orderByOehhduepct3($order = Criteria::ASC) Order by the OehhDuePct3 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscdate4($order = Criteria::ASC) Order by the OehhDiscDate4 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscpct4($order = Criteria::ASC) Order by the OehhDiscPct4 column
 * @method     ChildSoHeadHistQuery orderByOehhduedate4($order = Criteria::ASC) Order by the OehhDueDate4 column
 * @method     ChildSoHeadHistQuery orderByOehhdueamt4($order = Criteria::ASC) Order by the OehhDueAmt4 column
 * @method     ChildSoHeadHistQuery orderByOehhduepct4($order = Criteria::ASC) Order by the OehhDuePct4 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscdate5($order = Criteria::ASC) Order by the OehhDiscDate5 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscpct5($order = Criteria::ASC) Order by the OehhDiscPct5 column
 * @method     ChildSoHeadHistQuery orderByOehhduedate5($order = Criteria::ASC) Order by the OehhDueDate5 column
 * @method     ChildSoHeadHistQuery orderByOehhdueamt5($order = Criteria::ASC) Order by the OehhDueAmt5 column
 * @method     ChildSoHeadHistQuery orderByOehhduepct5($order = Criteria::ASC) Order by the OehhDuePct5 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscdate6($order = Criteria::ASC) Order by the OehhDiscDate6 column
 * @method     ChildSoHeadHistQuery orderByOehhdiscpct6($order = Criteria::ASC) Order by the OehhDiscPct6 column
 * @method     ChildSoHeadHistQuery orderByOehhduedate6($order = Criteria::ASC) Order by the OehhDueDate6 column
 * @method     ChildSoHeadHistQuery orderByOehhdueamt6($order = Criteria::ASC) Order by the OehhDueAmt6 column
 * @method     ChildSoHeadHistQuery orderByOehhduepct6($order = Criteria::ASC) Order by the OehhDuePct6 column
 * @method     ChildSoHeadHistQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoHeadHistQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoHeadHistQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoHeadHistQuery groupByOehhnbr() Group by the OehhNbr column
 * @method     ChildSoHeadHistQuery groupByOehhyear() Group by the OehhYear column
 * @method     ChildSoHeadHistQuery groupByOehhstat() Group by the OehhStat column
 * @method     ChildSoHeadHistQuery groupByOehhhold() Group by the OehhHold column
 * @method     ChildSoHeadHistQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildSoHeadHistQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildSoHeadHistQuery groupByOehhstname() Group by the OehhStName column
 * @method     ChildSoHeadHistQuery groupByOehhstlastname() Group by the OehhStLastName column
 * @method     ChildSoHeadHistQuery groupByOehhstfirstname() Group by the OehhStFirstName column
 * @method     ChildSoHeadHistQuery groupByOehhstadr1() Group by the OehhStAdr1 column
 * @method     ChildSoHeadHistQuery groupByOehhstadr2() Group by the OehhStAdr2 column
 * @method     ChildSoHeadHistQuery groupByOehhstadr3() Group by the OehhStAdr3 column
 * @method     ChildSoHeadHistQuery groupByOehhstctry() Group by the OehhStCtry column
 * @method     ChildSoHeadHistQuery groupByOehhstcity() Group by the OehhStCity column
 * @method     ChildSoHeadHistQuery groupByOehhststat() Group by the OehhStStat column
 * @method     ChildSoHeadHistQuery groupByOehhstzipcode() Group by the OehhStZipCode column
 * @method     ChildSoHeadHistQuery groupByOehhcustpo() Group by the OehhCustPo column
 * @method     ChildSoHeadHistQuery groupByOehhordrdate() Group by the OehhOrdrDate column
 * @method     ChildSoHeadHistQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildSoHeadHistQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildSoHeadHistQuery groupByArininvnbr() Group by the ArinInvNbr column
 * @method     ChildSoHeadHistQuery groupByOehhinvdate() Group by the OehhInvDate column
 * @method     ChildSoHeadHistQuery groupByOehhglpd() Group by the OehhGLPd column
 * @method     ChildSoHeadHistQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildSoHeadHistQuery groupByOehhsp1pct() Group by the OehhSp1Pct column
 * @method     ChildSoHeadHistQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildSoHeadHistQuery groupByOehhsp2pct() Group by the OehhSp2Pct column
 * @method     ChildSoHeadHistQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildSoHeadHistQuery groupByOehhsp3pct() Group by the OehhSp3Pct column
 * @method     ChildSoHeadHistQuery groupByOehhcntrnbr() Group by the OehhCntrNbr column
 * @method     ChildSoHeadHistQuery groupByOehhwibatch() Group by the OehhWiBatch column
 * @method     ChildSoHeadHistQuery groupByOehhdroprelhold() Group by the OehhDropRelHold column
 * @method     ChildSoHeadHistQuery groupByOehhtaxsub() Group by the OehhTaxSub column
 * @method     ChildSoHeadHistQuery groupByOehhnontaxsub() Group by the OehhNonTaxSub column
 * @method     ChildSoHeadHistQuery groupByOehhtaxtot() Group by the OehhTaxTot column
 * @method     ChildSoHeadHistQuery groupByOehhfrttot() Group by the OehhFrtTot column
 * @method     ChildSoHeadHistQuery groupByOehhmisctot() Group by the OehhMiscTot column
 * @method     ChildSoHeadHistQuery groupByOehhordrtot() Group by the OehhOrdrTot column
 * @method     ChildSoHeadHistQuery groupByOehhcosttot() Group by the OehhCostTot column
 * @method     ChildSoHeadHistQuery groupByOehhspcommlock() Group by the OehhSpCommLock column
 * @method     ChildSoHeadHistQuery groupByOehhtakendate() Group by the OehhTakenDate column
 * @method     ChildSoHeadHistQuery groupByOehhtakentime() Group by the OehhTakenTime column
 * @method     ChildSoHeadHistQuery groupByOehhpickdate() Group by the OehhPickDate column
 * @method     ChildSoHeadHistQuery groupByOehhpicktime() Group by the OehhPickTime column
 * @method     ChildSoHeadHistQuery groupByOehhpackdate() Group by the OehhPackDate column
 * @method     ChildSoHeadHistQuery groupByOehhpacktime() Group by the OehhPackTime column
 * @method     ChildSoHeadHistQuery groupByOehhverifydate() Group by the OehhVerifyDate column
 * @method     ChildSoHeadHistQuery groupByOehhverifytime() Group by the OehhVerifyTime column
 * @method     ChildSoHeadHistQuery groupByOehhcreditmemo() Group by the OehhCreditMemo column
 * @method     ChildSoHeadHistQuery groupByOehhbookedyn() Group by the OehhBookedYn column
 * @method     ChildSoHeadHistQuery groupByIntbwhseorig() Group by the IntbWhseOrig column
 * @method     ChildSoHeadHistQuery groupByOehhbtstat() Group by the OehhBtStat column
 * @method     ChildSoHeadHistQuery groupByOehhshipcomp() Group by the OehhShipComp column
 * @method     ChildSoHeadHistQuery groupByOehhcwoflag() Group by the OehhCwoFlag column
 * @method     ChildSoHeadHistQuery groupByOehhdivision() Group by the OehhDivision column
 * @method     ChildSoHeadHistQuery groupByOehhtakencode() Group by the OehhTakenCode column
 * @method     ChildSoHeadHistQuery groupByOehhpickcode() Group by the OehhPickCode column
 * @method     ChildSoHeadHistQuery groupByOehhpackcode() Group by the OehhPackCode column
 * @method     ChildSoHeadHistQuery groupByOehhverifycode() Group by the OehhVerifyCode column
 * @method     ChildSoHeadHistQuery groupByOehhtotdisc() Group by the OehhTotDisc column
 * @method     ChildSoHeadHistQuery groupByOehhedirefnbrqual() Group by the OehhEdiRefNbrQual column
 * @method     ChildSoHeadHistQuery groupByOehhusercode1() Group by the OehhUserCode1 column
 * @method     ChildSoHeadHistQuery groupByOehhusercode2() Group by the OehhUserCode2 column
 * @method     ChildSoHeadHistQuery groupByOehhusercode3() Group by the OehhUserCode3 column
 * @method     ChildSoHeadHistQuery groupByOehhusercode4() Group by the OehhUserCode4 column
 * @method     ChildSoHeadHistQuery groupByOehhexchctry() Group by the OehhExchCtry column
 * @method     ChildSoHeadHistQuery groupByOehhexchrate() Group by the OehhExchRate column
 * @method     ChildSoHeadHistQuery groupByOehhwghttot() Group by the OehhWghtTot column
 * @method     ChildSoHeadHistQuery groupByOehhwghtoride() Group by the OehhWghtOride column
 * @method     ChildSoHeadHistQuery groupByOehhccinfo() Group by the OehhCcInfo column
 * @method     ChildSoHeadHistQuery groupByOehhboxcount() Group by the OehhBoxCount column
 * @method     ChildSoHeadHistQuery groupByOehhrqstdate() Group by the OehhRqstDate column
 * @method     ChildSoHeadHistQuery groupByOehhcancdate() Group by the OehhCancDate column
 * @method     ChildSoHeadHistQuery groupByOehhcrntuser() Group by the OehhCrntUser column
 * @method     ChildSoHeadHistQuery groupByOehhreleasenbr() Group by the OehhReleaseNbr column
 * @method     ChildSoHeadHistQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildSoHeadHistQuery groupByOehhbordbuilddate() Group by the OehhBordBuildDate column
 * @method     ChildSoHeadHistQuery groupByOehhdeptcode() Group by the OehhDeptCode column
 * @method     ChildSoHeadHistQuery groupByOehhfrtinentered() Group by the OehhFrtInEntered column
 * @method     ChildSoHeadHistQuery groupByOehhdropshipentered() Group by the OehhDropShipEntered column
 * @method     ChildSoHeadHistQuery groupByOehherflag() Group by the OehhErFlag column
 * @method     ChildSoHeadHistQuery groupByOehhfrtin() Group by the OehhFrtIn column
 * @method     ChildSoHeadHistQuery groupByOehhdropship() Group by the OehhDropShip column
 * @method     ChildSoHeadHistQuery groupByOehhminorder() Group by the OehhMinOrder column
 * @method     ChildSoHeadHistQuery groupByOehhcontractterms() Group by the OehhContractTerms column
 * @method     ChildSoHeadHistQuery groupByOehhdropshipbilled() Group by the OehhDropShipBilled column
 * @method     ChildSoHeadHistQuery groupByOehhordtyp() Group by the OehhOrdTyp column
 * @method     ChildSoHeadHistQuery groupByOehhtracknbr() Group by the OehhTrackNbr column
 * @method     ChildSoHeadHistQuery groupByOehhsource() Group by the OehhSource column
 * @method     ChildSoHeadHistQuery groupByOehhccaprv() Group by the OehhCcAprv column
 * @method     ChildSoHeadHistQuery groupByOehhpickfmattype() Group by the OehhPickFmatType column
 * @method     ChildSoHeadHistQuery groupByOehhinvcfmattype() Group by the OehhInvcFmatType column
 * @method     ChildSoHeadHistQuery groupByOehhcashamt() Group by the OehhCashAmt column
 * @method     ChildSoHeadHistQuery groupByOehhcheckamt() Group by the OehhCheckAmt column
 * @method     ChildSoHeadHistQuery groupByOehhchecknbr() Group by the OehhCheckNbr column
 * @method     ChildSoHeadHistQuery groupByOehhdepositamt() Group by the OehhDepositAmt column
 * @method     ChildSoHeadHistQuery groupByOehhdepositnbr() Group by the OehhDepositNbr column
 * @method     ChildSoHeadHistQuery groupByOehhccamt() Group by the OehhCcAmt column
 * @method     ChildSoHeadHistQuery groupByOehhotaxsub() Group by the OehhOTaxSub column
 * @method     ChildSoHeadHistQuery groupByOehhonontaxsub() Group by the OehhONonTaxSub column
 * @method     ChildSoHeadHistQuery groupByOehhotaxtot() Group by the OehhOTaxTot column
 * @method     ChildSoHeadHistQuery groupByOehhoordrtot() Group by the OehhOOrdrTot column
 * @method     ChildSoHeadHistQuery groupByOehhpickprintdate() Group by the OehhPickPrintDate column
 * @method     ChildSoHeadHistQuery groupByOehhpickprinttime() Group by the OehhPickPrintTime column
 * @method     ChildSoHeadHistQuery groupByOehhcont() Group by the OehhCont column
 * @method     ChildSoHeadHistQuery groupByOehhcontteleintl() Group by the OehhContTeleIntl column
 * @method     ChildSoHeadHistQuery groupByOehhconttelenbr() Group by the OehhContTeleNbr column
 * @method     ChildSoHeadHistQuery groupByOehhcontteleext() Group by the OehhContTeleExt column
 * @method     ChildSoHeadHistQuery groupByOehhcontfaxintl() Group by the OehhContFaxIntl column
 * @method     ChildSoHeadHistQuery groupByOehhcontfaxnbr() Group by the OehhContFaxNbr column
 * @method     ChildSoHeadHistQuery groupByOehhshipacct() Group by the OehhShipAcct column
 * @method     ChildSoHeadHistQuery groupByOehhchgdue() Group by the OehhChgDue column
 * @method     ChildSoHeadHistQuery groupByOehhaddlpricdisc() Group by the OehhAddlPricDisc column
 * @method     ChildSoHeadHistQuery groupByOehhallship() Group by the OehhAllShip column
 * @method     ChildSoHeadHistQuery groupByOehhqtyorderamt() Group by the OehhQtyOrderAmt column
 * @method     ChildSoHeadHistQuery groupByOehhcreditapplied() Group by the OehhCreditApplied column
 * @method     ChildSoHeadHistQuery groupByOehhinvcprintdate() Group by the OehhInvcPrintDate column
 * @method     ChildSoHeadHistQuery groupByOehhinvcprinttime() Group by the OehhInvcPrintTime column
 * @method     ChildSoHeadHistQuery groupByOehhdiscfrt() Group by the OehhDiscFrt column
 * @method     ChildSoHeadHistQuery groupByOehhorideshipcomp() Group by the OehhOrideShipComp column
 * @method     ChildSoHeadHistQuery groupByOehhcontemail() Group by the OehhContEmail column
 * @method     ChildSoHeadHistQuery groupByOehhmanualfrt() Group by the OehhManualFrt column
 * @method     ChildSoHeadHistQuery groupByOehhinternalfrt() Group by the OehhInternalFrt column
 * @method     ChildSoHeadHistQuery groupByOehhfrtcost() Group by the OehhFrtCost column
 * @method     ChildSoHeadHistQuery groupByOehhroute() Group by the OehhRoute column
 * @method     ChildSoHeadHistQuery groupByOehhrouteseq() Group by the OehhRouteSeq column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxcode1() Group by the OehhFrtTaxCode1 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxamt1() Group by the OehhFrtTaxAmt1 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxcode2() Group by the OehhFrtTaxCode2 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxamt2() Group by the OehhFrtTaxAmt2 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxcode3() Group by the OehhFrtTaxCode3 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxamt3() Group by the OehhFrtTaxAmt3 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxcode4() Group by the OehhFrtTaxCode4 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxamt4() Group by the OehhFrtTaxAmt4 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxcode5() Group by the OehhFrtTaxCode5 column
 * @method     ChildSoHeadHistQuery groupByOehhfrttaxamt5() Group by the OehhFrtTaxAmt5 column
 * @method     ChildSoHeadHistQuery groupByOehhedi855sent() Group by the OehhEdi855Sent column
 * @method     ChildSoHeadHistQuery groupByOehhfrt3rdparty() Group by the OehhFrt3rdParty column
 * @method     ChildSoHeadHistQuery groupByOehhfob() Group by the OehhFob column
 * @method     ChildSoHeadHistQuery groupByOehhconfirmimagyn() Group by the OehhConfirmImagYn column
 * @method     ChildSoHeadHistQuery groupByOehhindustconform() Group by the OehhIndustConform column
 * @method     ChildSoHeadHistQuery groupByOehhcstkconsign() Group by the OehhCstkConsign column
 * @method     ChildSoHeadHistQuery groupByOehhlmdelaycapsent() Group by the OehhLmDelayCapSent column
 * @method     ChildSoHeadHistQuery groupByOehhmfgid() Group by the OehhMfgId column
 * @method     ChildSoHeadHistQuery groupByOehhstoreid() Group by the OehhStoreId column
 * @method     ChildSoHeadHistQuery groupByOehhpickqueue() Group by the OehhPickQueue column
 * @method     ChildSoHeadHistQuery groupByOehharrvdate() Group by the OehhArrvDate column
 * @method     ChildSoHeadHistQuery groupByOehhsurchgstat() Group by the OehhSurchgStat column
 * @method     ChildSoHeadHistQuery groupByOehhfrtgrup() Group by the OehhFrtGrup column
 * @method     ChildSoHeadHistQuery groupByOehhcommoride() Group by the OehhCommOride column
 * @method     ChildSoHeadHistQuery groupByOehhchrgsplt() Group by the OehhChrgSplt column
 * @method     ChildSoHeadHistQuery groupByOehhacccaprv() Group by the OehhAcCcAprv column
 * @method     ChildSoHeadHistQuery groupByOehhorigordrnbr() Group by the OehhOrigOrdrNbr column
 * @method     ChildSoHeadHistQuery groupByOehhpostdate() Group by the OehhPostDate column
 * @method     ChildSoHeadHistQuery groupByOehhdiscdate1() Group by the OehhDiscDate1 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscpct1() Group by the OehhDiscPct1 column
 * @method     ChildSoHeadHistQuery groupByOehhduedate1() Group by the OehhDueDate1 column
 * @method     ChildSoHeadHistQuery groupByOehhdueamt1() Group by the OehhDueAmt1 column
 * @method     ChildSoHeadHistQuery groupByOehhduepct1() Group by the OehhDuePct1 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscdate2() Group by the OehhDiscDate2 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscpct2() Group by the OehhDiscPct2 column
 * @method     ChildSoHeadHistQuery groupByOehhduedate2() Group by the OehhDueDate2 column
 * @method     ChildSoHeadHistQuery groupByOehhdueamt2() Group by the OehhDueAmt2 column
 * @method     ChildSoHeadHistQuery groupByOehhduepct2() Group by the OehhDuePct2 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscdate3() Group by the OehhDiscDate3 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscpct3() Group by the OehhDiscPct3 column
 * @method     ChildSoHeadHistQuery groupByOehhduedate3() Group by the OehhDueDate3 column
 * @method     ChildSoHeadHistQuery groupByOehhdueamt3() Group by the OehhDueAmt3 column
 * @method     ChildSoHeadHistQuery groupByOehhduepct3() Group by the OehhDuePct3 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscdate4() Group by the OehhDiscDate4 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscpct4() Group by the OehhDiscPct4 column
 * @method     ChildSoHeadHistQuery groupByOehhduedate4() Group by the OehhDueDate4 column
 * @method     ChildSoHeadHistQuery groupByOehhdueamt4() Group by the OehhDueAmt4 column
 * @method     ChildSoHeadHistQuery groupByOehhduepct4() Group by the OehhDuePct4 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscdate5() Group by the OehhDiscDate5 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscpct5() Group by the OehhDiscPct5 column
 * @method     ChildSoHeadHistQuery groupByOehhduedate5() Group by the OehhDueDate5 column
 * @method     ChildSoHeadHistQuery groupByOehhdueamt5() Group by the OehhDueAmt5 column
 * @method     ChildSoHeadHistQuery groupByOehhduepct5() Group by the OehhDuePct5 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscdate6() Group by the OehhDiscDate6 column
 * @method     ChildSoHeadHistQuery groupByOehhdiscpct6() Group by the OehhDiscPct6 column
 * @method     ChildSoHeadHistQuery groupByOehhduedate6() Group by the OehhDueDate6 column
 * @method     ChildSoHeadHistQuery groupByOehhdueamt6() Group by the OehhDueAmt6 column
 * @method     ChildSoHeadHistQuery groupByOehhduepct6() Group by the OehhDuePct6 column
 * @method     ChildSoHeadHistQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoHeadHistQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoHeadHistQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoHeadHistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoHeadHistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoHeadHistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoHeadHistQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoHeadHistQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoHeadHistQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoHeadHist findOne(ConnectionInterface $con = null) Return the first ChildSoHeadHist matching the query
 * @method     ChildSoHeadHist findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSoHeadHist matching the query, or a new ChildSoHeadHist object populated from the query conditions when no match is found
 *
 * @method     ChildSoHeadHist findOneByOehhnbr(string $OehhNbr) Return the first ChildSoHeadHist filtered by the OehhNbr column
 * @method     ChildSoHeadHist findOneByOehhyear(string $OehhYear) Return the first ChildSoHeadHist filtered by the OehhYear column
 * @method     ChildSoHeadHist findOneByOehhstat(string $OehhStat) Return the first ChildSoHeadHist filtered by the OehhStat column
 * @method     ChildSoHeadHist findOneByOehhhold(string $OehhHold) Return the first ChildSoHeadHist filtered by the OehhHold column
 * @method     ChildSoHeadHist findOneByArcucustid(string $ArcuCustId) Return the first ChildSoHeadHist filtered by the ArcuCustId column
 * @method     ChildSoHeadHist findOneByArstshipid(string $ArstShipId) Return the first ChildSoHeadHist filtered by the ArstShipId column
 * @method     ChildSoHeadHist findOneByOehhstname(string $OehhStName) Return the first ChildSoHeadHist filtered by the OehhStName column
 * @method     ChildSoHeadHist findOneByOehhstlastname(string $OehhStLastName) Return the first ChildSoHeadHist filtered by the OehhStLastName column
 * @method     ChildSoHeadHist findOneByOehhstfirstname(string $OehhStFirstName) Return the first ChildSoHeadHist filtered by the OehhStFirstName column
 * @method     ChildSoHeadHist findOneByOehhstadr1(string $OehhStAdr1) Return the first ChildSoHeadHist filtered by the OehhStAdr1 column
 * @method     ChildSoHeadHist findOneByOehhstadr2(string $OehhStAdr2) Return the first ChildSoHeadHist filtered by the OehhStAdr2 column
 * @method     ChildSoHeadHist findOneByOehhstadr3(string $OehhStAdr3) Return the first ChildSoHeadHist filtered by the OehhStAdr3 column
 * @method     ChildSoHeadHist findOneByOehhstctry(string $OehhStCtry) Return the first ChildSoHeadHist filtered by the OehhStCtry column
 * @method     ChildSoHeadHist findOneByOehhstcity(string $OehhStCity) Return the first ChildSoHeadHist filtered by the OehhStCity column
 * @method     ChildSoHeadHist findOneByOehhststat(string $OehhStStat) Return the first ChildSoHeadHist filtered by the OehhStStat column
 * @method     ChildSoHeadHist findOneByOehhstzipcode(string $OehhStZipCode) Return the first ChildSoHeadHist filtered by the OehhStZipCode column
 * @method     ChildSoHeadHist findOneByOehhcustpo(string $OehhCustPo) Return the first ChildSoHeadHist filtered by the OehhCustPo column
 * @method     ChildSoHeadHist findOneByOehhordrdate(string $OehhOrdrDate) Return the first ChildSoHeadHist filtered by the OehhOrdrDate column
 * @method     ChildSoHeadHist findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSoHeadHist filtered by the ArtmTermCd column
 * @method     ChildSoHeadHist findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSoHeadHist filtered by the ArtbShipVia column
 * @method     ChildSoHeadHist findOneByArininvnbr(string $ArinInvNbr) Return the first ChildSoHeadHist filtered by the ArinInvNbr column
 * @method     ChildSoHeadHist findOneByOehhinvdate(string $OehhInvDate) Return the first ChildSoHeadHist filtered by the OehhInvDate column
 * @method     ChildSoHeadHist findOneByOehhglpd(int $OehhGLPd) Return the first ChildSoHeadHist filtered by the OehhGLPd column
 * @method     ChildSoHeadHist findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSoHeadHist filtered by the ArspSalePer1 column
 * @method     ChildSoHeadHist findOneByOehhsp1pct(string $OehhSp1Pct) Return the first ChildSoHeadHist filtered by the OehhSp1Pct column
 * @method     ChildSoHeadHist findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSoHeadHist filtered by the ArspSalePer2 column
 * @method     ChildSoHeadHist findOneByOehhsp2pct(string $OehhSp2Pct) Return the first ChildSoHeadHist filtered by the OehhSp2Pct column
 * @method     ChildSoHeadHist findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSoHeadHist filtered by the ArspSalePer3 column
 * @method     ChildSoHeadHist findOneByOehhsp3pct(string $OehhSp3Pct) Return the first ChildSoHeadHist filtered by the OehhSp3Pct column
 * @method     ChildSoHeadHist findOneByOehhcntrnbr(int $OehhCntrNbr) Return the first ChildSoHeadHist filtered by the OehhCntrNbr column
 * @method     ChildSoHeadHist findOneByOehhwibatch(int $OehhWiBatch) Return the first ChildSoHeadHist filtered by the OehhWiBatch column
 * @method     ChildSoHeadHist findOneByOehhdroprelhold(string $OehhDropRelHold) Return the first ChildSoHeadHist filtered by the OehhDropRelHold column
 * @method     ChildSoHeadHist findOneByOehhtaxsub(string $OehhTaxSub) Return the first ChildSoHeadHist filtered by the OehhTaxSub column
 * @method     ChildSoHeadHist findOneByOehhnontaxsub(string $OehhNonTaxSub) Return the first ChildSoHeadHist filtered by the OehhNonTaxSub column
 * @method     ChildSoHeadHist findOneByOehhtaxtot(string $OehhTaxTot) Return the first ChildSoHeadHist filtered by the OehhTaxTot column
 * @method     ChildSoHeadHist findOneByOehhfrttot(string $OehhFrtTot) Return the first ChildSoHeadHist filtered by the OehhFrtTot column
 * @method     ChildSoHeadHist findOneByOehhmisctot(string $OehhMiscTot) Return the first ChildSoHeadHist filtered by the OehhMiscTot column
 * @method     ChildSoHeadHist findOneByOehhordrtot(string $OehhOrdrTot) Return the first ChildSoHeadHist filtered by the OehhOrdrTot column
 * @method     ChildSoHeadHist findOneByOehhcosttot(string $OehhCostTot) Return the first ChildSoHeadHist filtered by the OehhCostTot column
 * @method     ChildSoHeadHist findOneByOehhspcommlock(string $OehhSpCommLock) Return the first ChildSoHeadHist filtered by the OehhSpCommLock column
 * @method     ChildSoHeadHist findOneByOehhtakendate(string $OehhTakenDate) Return the first ChildSoHeadHist filtered by the OehhTakenDate column
 * @method     ChildSoHeadHist findOneByOehhtakentime(string $OehhTakenTime) Return the first ChildSoHeadHist filtered by the OehhTakenTime column
 * @method     ChildSoHeadHist findOneByOehhpickdate(string $OehhPickDate) Return the first ChildSoHeadHist filtered by the OehhPickDate column
 * @method     ChildSoHeadHist findOneByOehhpicktime(string $OehhPickTime) Return the first ChildSoHeadHist filtered by the OehhPickTime column
 * @method     ChildSoHeadHist findOneByOehhpackdate(string $OehhPackDate) Return the first ChildSoHeadHist filtered by the OehhPackDate column
 * @method     ChildSoHeadHist findOneByOehhpacktime(string $OehhPackTime) Return the first ChildSoHeadHist filtered by the OehhPackTime column
 * @method     ChildSoHeadHist findOneByOehhverifydate(string $OehhVerifyDate) Return the first ChildSoHeadHist filtered by the OehhVerifyDate column
 * @method     ChildSoHeadHist findOneByOehhverifytime(string $OehhVerifyTime) Return the first ChildSoHeadHist filtered by the OehhVerifyTime column
 * @method     ChildSoHeadHist findOneByOehhcreditmemo(string $OehhCreditMemo) Return the first ChildSoHeadHist filtered by the OehhCreditMemo column
 * @method     ChildSoHeadHist findOneByOehhbookedyn(string $OehhBookedYn) Return the first ChildSoHeadHist filtered by the OehhBookedYn column
 * @method     ChildSoHeadHist findOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSoHeadHist filtered by the IntbWhseOrig column
 * @method     ChildSoHeadHist findOneByOehhbtstat(string $OehhBtStat) Return the first ChildSoHeadHist filtered by the OehhBtStat column
 * @method     ChildSoHeadHist findOneByOehhshipcomp(string $OehhShipComp) Return the first ChildSoHeadHist filtered by the OehhShipComp column
 * @method     ChildSoHeadHist findOneByOehhcwoflag(string $OehhCwoFlag) Return the first ChildSoHeadHist filtered by the OehhCwoFlag column
 * @method     ChildSoHeadHist findOneByOehhdivision(string $OehhDivision) Return the first ChildSoHeadHist filtered by the OehhDivision column
 * @method     ChildSoHeadHist findOneByOehhtakencode(string $OehhTakenCode) Return the first ChildSoHeadHist filtered by the OehhTakenCode column
 * @method     ChildSoHeadHist findOneByOehhpickcode(string $OehhPickCode) Return the first ChildSoHeadHist filtered by the OehhPickCode column
 * @method     ChildSoHeadHist findOneByOehhpackcode(string $OehhPackCode) Return the first ChildSoHeadHist filtered by the OehhPackCode column
 * @method     ChildSoHeadHist findOneByOehhverifycode(string $OehhVerifyCode) Return the first ChildSoHeadHist filtered by the OehhVerifyCode column
 * @method     ChildSoHeadHist findOneByOehhtotdisc(string $OehhTotDisc) Return the first ChildSoHeadHist filtered by the OehhTotDisc column
 * @method     ChildSoHeadHist findOneByOehhedirefnbrqual(string $OehhEdiRefNbrQual) Return the first ChildSoHeadHist filtered by the OehhEdiRefNbrQual column
 * @method     ChildSoHeadHist findOneByOehhusercode1(string $OehhUserCode1) Return the first ChildSoHeadHist filtered by the OehhUserCode1 column
 * @method     ChildSoHeadHist findOneByOehhusercode2(string $OehhUserCode2) Return the first ChildSoHeadHist filtered by the OehhUserCode2 column
 * @method     ChildSoHeadHist findOneByOehhusercode3(string $OehhUserCode3) Return the first ChildSoHeadHist filtered by the OehhUserCode3 column
 * @method     ChildSoHeadHist findOneByOehhusercode4(string $OehhUserCode4) Return the first ChildSoHeadHist filtered by the OehhUserCode4 column
 * @method     ChildSoHeadHist findOneByOehhexchctry(string $OehhExchCtry) Return the first ChildSoHeadHist filtered by the OehhExchCtry column
 * @method     ChildSoHeadHist findOneByOehhexchrate(string $OehhExchRate) Return the first ChildSoHeadHist filtered by the OehhExchRate column
 * @method     ChildSoHeadHist findOneByOehhwghttot(string $OehhWghtTot) Return the first ChildSoHeadHist filtered by the OehhWghtTot column
 * @method     ChildSoHeadHist findOneByOehhwghtoride(string $OehhWghtOride) Return the first ChildSoHeadHist filtered by the OehhWghtOride column
 * @method     ChildSoHeadHist findOneByOehhccinfo(string $OehhCcInfo) Return the first ChildSoHeadHist filtered by the OehhCcInfo column
 * @method     ChildSoHeadHist findOneByOehhboxcount(int $OehhBoxCount) Return the first ChildSoHeadHist filtered by the OehhBoxCount column
 * @method     ChildSoHeadHist findOneByOehhrqstdate(string $OehhRqstDate) Return the first ChildSoHeadHist filtered by the OehhRqstDate column
 * @method     ChildSoHeadHist findOneByOehhcancdate(string $OehhCancDate) Return the first ChildSoHeadHist filtered by the OehhCancDate column
 * @method     ChildSoHeadHist findOneByOehhcrntuser(string $OehhCrntUser) Return the first ChildSoHeadHist filtered by the OehhCrntUser column
 * @method     ChildSoHeadHist findOneByOehhreleasenbr(string $OehhReleaseNbr) Return the first ChildSoHeadHist filtered by the OehhReleaseNbr column
 * @method     ChildSoHeadHist findOneByIntbwhse(string $IntbWhse) Return the first ChildSoHeadHist filtered by the IntbWhse column
 * @method     ChildSoHeadHist findOneByOehhbordbuilddate(string $OehhBordBuildDate) Return the first ChildSoHeadHist filtered by the OehhBordBuildDate column
 * @method     ChildSoHeadHist findOneByOehhdeptcode(string $OehhDeptCode) Return the first ChildSoHeadHist filtered by the OehhDeptCode column
 * @method     ChildSoHeadHist findOneByOehhfrtinentered(string $OehhFrtInEntered) Return the first ChildSoHeadHist filtered by the OehhFrtInEntered column
 * @method     ChildSoHeadHist findOneByOehhdropshipentered(string $OehhDropShipEntered) Return the first ChildSoHeadHist filtered by the OehhDropShipEntered column
 * @method     ChildSoHeadHist findOneByOehherflag(string $OehhErFlag) Return the first ChildSoHeadHist filtered by the OehhErFlag column
 * @method     ChildSoHeadHist findOneByOehhfrtin(string $OehhFrtIn) Return the first ChildSoHeadHist filtered by the OehhFrtIn column
 * @method     ChildSoHeadHist findOneByOehhdropship(string $OehhDropShip) Return the first ChildSoHeadHist filtered by the OehhDropShip column
 * @method     ChildSoHeadHist findOneByOehhminorder(string $OehhMinOrder) Return the first ChildSoHeadHist filtered by the OehhMinOrder column
 * @method     ChildSoHeadHist findOneByOehhcontractterms(string $OehhContractTerms) Return the first ChildSoHeadHist filtered by the OehhContractTerms column
 * @method     ChildSoHeadHist findOneByOehhdropshipbilled(string $OehhDropShipBilled) Return the first ChildSoHeadHist filtered by the OehhDropShipBilled column
 * @method     ChildSoHeadHist findOneByOehhordtyp(string $OehhOrdTyp) Return the first ChildSoHeadHist filtered by the OehhOrdTyp column
 * @method     ChildSoHeadHist findOneByOehhtracknbr(string $OehhTrackNbr) Return the first ChildSoHeadHist filtered by the OehhTrackNbr column
 * @method     ChildSoHeadHist findOneByOehhsource(string $OehhSource) Return the first ChildSoHeadHist filtered by the OehhSource column
 * @method     ChildSoHeadHist findOneByOehhccaprv(string $OehhCcAprv) Return the first ChildSoHeadHist filtered by the OehhCcAprv column
 * @method     ChildSoHeadHist findOneByOehhpickfmattype(string $OehhPickFmatType) Return the first ChildSoHeadHist filtered by the OehhPickFmatType column
 * @method     ChildSoHeadHist findOneByOehhinvcfmattype(string $OehhInvcFmatType) Return the first ChildSoHeadHist filtered by the OehhInvcFmatType column
 * @method     ChildSoHeadHist findOneByOehhcashamt(string $OehhCashAmt) Return the first ChildSoHeadHist filtered by the OehhCashAmt column
 * @method     ChildSoHeadHist findOneByOehhcheckamt(string $OehhCheckAmt) Return the first ChildSoHeadHist filtered by the OehhCheckAmt column
 * @method     ChildSoHeadHist findOneByOehhchecknbr(string $OehhCheckNbr) Return the first ChildSoHeadHist filtered by the OehhCheckNbr column
 * @method     ChildSoHeadHist findOneByOehhdepositamt(string $OehhDepositAmt) Return the first ChildSoHeadHist filtered by the OehhDepositAmt column
 * @method     ChildSoHeadHist findOneByOehhdepositnbr(string $OehhDepositNbr) Return the first ChildSoHeadHist filtered by the OehhDepositNbr column
 * @method     ChildSoHeadHist findOneByOehhccamt(string $OehhCcAmt) Return the first ChildSoHeadHist filtered by the OehhCcAmt column
 * @method     ChildSoHeadHist findOneByOehhotaxsub(string $OehhOTaxSub) Return the first ChildSoHeadHist filtered by the OehhOTaxSub column
 * @method     ChildSoHeadHist findOneByOehhonontaxsub(string $OehhONonTaxSub) Return the first ChildSoHeadHist filtered by the OehhONonTaxSub column
 * @method     ChildSoHeadHist findOneByOehhotaxtot(string $OehhOTaxTot) Return the first ChildSoHeadHist filtered by the OehhOTaxTot column
 * @method     ChildSoHeadHist findOneByOehhoordrtot(string $OehhOOrdrTot) Return the first ChildSoHeadHist filtered by the OehhOOrdrTot column
 * @method     ChildSoHeadHist findOneByOehhpickprintdate(string $OehhPickPrintDate) Return the first ChildSoHeadHist filtered by the OehhPickPrintDate column
 * @method     ChildSoHeadHist findOneByOehhpickprinttime(string $OehhPickPrintTime) Return the first ChildSoHeadHist filtered by the OehhPickPrintTime column
 * @method     ChildSoHeadHist findOneByOehhcont(string $OehhCont) Return the first ChildSoHeadHist filtered by the OehhCont column
 * @method     ChildSoHeadHist findOneByOehhcontteleintl(string $OehhContTeleIntl) Return the first ChildSoHeadHist filtered by the OehhContTeleIntl column
 * @method     ChildSoHeadHist findOneByOehhconttelenbr(string $OehhContTeleNbr) Return the first ChildSoHeadHist filtered by the OehhContTeleNbr column
 * @method     ChildSoHeadHist findOneByOehhcontteleext(string $OehhContTeleExt) Return the first ChildSoHeadHist filtered by the OehhContTeleExt column
 * @method     ChildSoHeadHist findOneByOehhcontfaxintl(string $OehhContFaxIntl) Return the first ChildSoHeadHist filtered by the OehhContFaxIntl column
 * @method     ChildSoHeadHist findOneByOehhcontfaxnbr(string $OehhContFaxNbr) Return the first ChildSoHeadHist filtered by the OehhContFaxNbr column
 * @method     ChildSoHeadHist findOneByOehhshipacct(string $OehhShipAcct) Return the first ChildSoHeadHist filtered by the OehhShipAcct column
 * @method     ChildSoHeadHist findOneByOehhchgdue(string $OehhChgDue) Return the first ChildSoHeadHist filtered by the OehhChgDue column
 * @method     ChildSoHeadHist findOneByOehhaddlpricdisc(string $OehhAddlPricDisc) Return the first ChildSoHeadHist filtered by the OehhAddlPricDisc column
 * @method     ChildSoHeadHist findOneByOehhallship(string $OehhAllShip) Return the first ChildSoHeadHist filtered by the OehhAllShip column
 * @method     ChildSoHeadHist findOneByOehhqtyorderamt(string $OehhQtyOrderAmt) Return the first ChildSoHeadHist filtered by the OehhQtyOrderAmt column
 * @method     ChildSoHeadHist findOneByOehhcreditapplied(string $OehhCreditApplied) Return the first ChildSoHeadHist filtered by the OehhCreditApplied column
 * @method     ChildSoHeadHist findOneByOehhinvcprintdate(string $OehhInvcPrintDate) Return the first ChildSoHeadHist filtered by the OehhInvcPrintDate column
 * @method     ChildSoHeadHist findOneByOehhinvcprinttime(string $OehhInvcPrintTime) Return the first ChildSoHeadHist filtered by the OehhInvcPrintTime column
 * @method     ChildSoHeadHist findOneByOehhdiscfrt(string $OehhDiscFrt) Return the first ChildSoHeadHist filtered by the OehhDiscFrt column
 * @method     ChildSoHeadHist findOneByOehhorideshipcomp(string $OehhOrideShipComp) Return the first ChildSoHeadHist filtered by the OehhOrideShipComp column
 * @method     ChildSoHeadHist findOneByOehhcontemail(string $OehhContEmail) Return the first ChildSoHeadHist filtered by the OehhContEmail column
 * @method     ChildSoHeadHist findOneByOehhmanualfrt(string $OehhManualFrt) Return the first ChildSoHeadHist filtered by the OehhManualFrt column
 * @method     ChildSoHeadHist findOneByOehhinternalfrt(string $OehhInternalFrt) Return the first ChildSoHeadHist filtered by the OehhInternalFrt column
 * @method     ChildSoHeadHist findOneByOehhfrtcost(string $OehhFrtCost) Return the first ChildSoHeadHist filtered by the OehhFrtCost column
 * @method     ChildSoHeadHist findOneByOehhroute(string $OehhRoute) Return the first ChildSoHeadHist filtered by the OehhRoute column
 * @method     ChildSoHeadHist findOneByOehhrouteseq(int $OehhRouteSeq) Return the first ChildSoHeadHist filtered by the OehhRouteSeq column
 * @method     ChildSoHeadHist findOneByOehhfrttaxcode1(string $OehhFrtTaxCode1) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode1 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxamt1(string $OehhFrtTaxAmt1) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt1 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxcode2(string $OehhFrtTaxCode2) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode2 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxamt2(string $OehhFrtTaxAmt2) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt2 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxcode3(string $OehhFrtTaxCode3) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode3 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxamt3(string $OehhFrtTaxAmt3) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt3 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxcode4(string $OehhFrtTaxCode4) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode4 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxamt4(string $OehhFrtTaxAmt4) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt4 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxcode5(string $OehhFrtTaxCode5) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode5 column
 * @method     ChildSoHeadHist findOneByOehhfrttaxamt5(string $OehhFrtTaxAmt5) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt5 column
 * @method     ChildSoHeadHist findOneByOehhedi855sent(string $OehhEdi855Sent) Return the first ChildSoHeadHist filtered by the OehhEdi855Sent column
 * @method     ChildSoHeadHist findOneByOehhfrt3rdparty(string $OehhFrt3rdParty) Return the first ChildSoHeadHist filtered by the OehhFrt3rdParty column
 * @method     ChildSoHeadHist findOneByOehhfob(string $OehhFob) Return the first ChildSoHeadHist filtered by the OehhFob column
 * @method     ChildSoHeadHist findOneByOehhconfirmimagyn(string $OehhConfirmImagYn) Return the first ChildSoHeadHist filtered by the OehhConfirmImagYn column
 * @method     ChildSoHeadHist findOneByOehhindustconform(string $OehhIndustConform) Return the first ChildSoHeadHist filtered by the OehhIndustConform column
 * @method     ChildSoHeadHist findOneByOehhcstkconsign(string $OehhCstkConsign) Return the first ChildSoHeadHist filtered by the OehhCstkConsign column
 * @method     ChildSoHeadHist findOneByOehhlmdelaycapsent(string $OehhLmDelayCapSent) Return the first ChildSoHeadHist filtered by the OehhLmDelayCapSent column
 * @method     ChildSoHeadHist findOneByOehhmfgid(string $OehhMfgId) Return the first ChildSoHeadHist filtered by the OehhMfgId column
 * @method     ChildSoHeadHist findOneByOehhstoreid(string $OehhStoreId) Return the first ChildSoHeadHist filtered by the OehhStoreId column
 * @method     ChildSoHeadHist findOneByOehhpickqueue(string $OehhPickQueue) Return the first ChildSoHeadHist filtered by the OehhPickQueue column
 * @method     ChildSoHeadHist findOneByOehharrvdate(string $OehhArrvDate) Return the first ChildSoHeadHist filtered by the OehhArrvDate column
 * @method     ChildSoHeadHist findOneByOehhsurchgstat(string $OehhSurchgStat) Return the first ChildSoHeadHist filtered by the OehhSurchgStat column
 * @method     ChildSoHeadHist findOneByOehhfrtgrup(string $OehhFrtGrup) Return the first ChildSoHeadHist filtered by the OehhFrtGrup column
 * @method     ChildSoHeadHist findOneByOehhcommoride(string $OehhCommOride) Return the first ChildSoHeadHist filtered by the OehhCommOride column
 * @method     ChildSoHeadHist findOneByOehhchrgsplt(string $OehhChrgSplt) Return the first ChildSoHeadHist filtered by the OehhChrgSplt column
 * @method     ChildSoHeadHist findOneByOehhacccaprv(string $OehhAcCcAprv) Return the first ChildSoHeadHist filtered by the OehhAcCcAprv column
 * @method     ChildSoHeadHist findOneByOehhorigordrnbr(string $OehhOrigOrdrNbr) Return the first ChildSoHeadHist filtered by the OehhOrigOrdrNbr column
 * @method     ChildSoHeadHist findOneByOehhpostdate(string $OehhPostDate) Return the first ChildSoHeadHist filtered by the OehhPostDate column
 * @method     ChildSoHeadHist findOneByOehhdiscdate1(string $OehhDiscDate1) Return the first ChildSoHeadHist filtered by the OehhDiscDate1 column
 * @method     ChildSoHeadHist findOneByOehhdiscpct1(string $OehhDiscPct1) Return the first ChildSoHeadHist filtered by the OehhDiscPct1 column
 * @method     ChildSoHeadHist findOneByOehhduedate1(string $OehhDueDate1) Return the first ChildSoHeadHist filtered by the OehhDueDate1 column
 * @method     ChildSoHeadHist findOneByOehhdueamt1(string $OehhDueAmt1) Return the first ChildSoHeadHist filtered by the OehhDueAmt1 column
 * @method     ChildSoHeadHist findOneByOehhduepct1(string $OehhDuePct1) Return the first ChildSoHeadHist filtered by the OehhDuePct1 column
 * @method     ChildSoHeadHist findOneByOehhdiscdate2(string $OehhDiscDate2) Return the first ChildSoHeadHist filtered by the OehhDiscDate2 column
 * @method     ChildSoHeadHist findOneByOehhdiscpct2(string $OehhDiscPct2) Return the first ChildSoHeadHist filtered by the OehhDiscPct2 column
 * @method     ChildSoHeadHist findOneByOehhduedate2(string $OehhDueDate2) Return the first ChildSoHeadHist filtered by the OehhDueDate2 column
 * @method     ChildSoHeadHist findOneByOehhdueamt2(string $OehhDueAmt2) Return the first ChildSoHeadHist filtered by the OehhDueAmt2 column
 * @method     ChildSoHeadHist findOneByOehhduepct2(string $OehhDuePct2) Return the first ChildSoHeadHist filtered by the OehhDuePct2 column
 * @method     ChildSoHeadHist findOneByOehhdiscdate3(string $OehhDiscDate3) Return the first ChildSoHeadHist filtered by the OehhDiscDate3 column
 * @method     ChildSoHeadHist findOneByOehhdiscpct3(string $OehhDiscPct3) Return the first ChildSoHeadHist filtered by the OehhDiscPct3 column
 * @method     ChildSoHeadHist findOneByOehhduedate3(string $OehhDueDate3) Return the first ChildSoHeadHist filtered by the OehhDueDate3 column
 * @method     ChildSoHeadHist findOneByOehhdueamt3(string $OehhDueAmt3) Return the first ChildSoHeadHist filtered by the OehhDueAmt3 column
 * @method     ChildSoHeadHist findOneByOehhduepct3(string $OehhDuePct3) Return the first ChildSoHeadHist filtered by the OehhDuePct3 column
 * @method     ChildSoHeadHist findOneByOehhdiscdate4(string $OehhDiscDate4) Return the first ChildSoHeadHist filtered by the OehhDiscDate4 column
 * @method     ChildSoHeadHist findOneByOehhdiscpct4(string $OehhDiscPct4) Return the first ChildSoHeadHist filtered by the OehhDiscPct4 column
 * @method     ChildSoHeadHist findOneByOehhduedate4(string $OehhDueDate4) Return the first ChildSoHeadHist filtered by the OehhDueDate4 column
 * @method     ChildSoHeadHist findOneByOehhdueamt4(string $OehhDueAmt4) Return the first ChildSoHeadHist filtered by the OehhDueAmt4 column
 * @method     ChildSoHeadHist findOneByOehhduepct4(string $OehhDuePct4) Return the first ChildSoHeadHist filtered by the OehhDuePct4 column
 * @method     ChildSoHeadHist findOneByOehhdiscdate5(string $OehhDiscDate5) Return the first ChildSoHeadHist filtered by the OehhDiscDate5 column
 * @method     ChildSoHeadHist findOneByOehhdiscpct5(string $OehhDiscPct5) Return the first ChildSoHeadHist filtered by the OehhDiscPct5 column
 * @method     ChildSoHeadHist findOneByOehhduedate5(string $OehhDueDate5) Return the first ChildSoHeadHist filtered by the OehhDueDate5 column
 * @method     ChildSoHeadHist findOneByOehhdueamt5(string $OehhDueAmt5) Return the first ChildSoHeadHist filtered by the OehhDueAmt5 column
 * @method     ChildSoHeadHist findOneByOehhduepct5(string $OehhDuePct5) Return the first ChildSoHeadHist filtered by the OehhDuePct5 column
 * @method     ChildSoHeadHist findOneByOehhdiscdate6(string $OehhDiscDate6) Return the first ChildSoHeadHist filtered by the OehhDiscDate6 column
 * @method     ChildSoHeadHist findOneByOehhdiscpct6(string $OehhDiscPct6) Return the first ChildSoHeadHist filtered by the OehhDiscPct6 column
 * @method     ChildSoHeadHist findOneByOehhduedate6(string $OehhDueDate6) Return the first ChildSoHeadHist filtered by the OehhDueDate6 column
 * @method     ChildSoHeadHist findOneByOehhdueamt6(string $OehhDueAmt6) Return the first ChildSoHeadHist filtered by the OehhDueAmt6 column
 * @method     ChildSoHeadHist findOneByOehhduepct6(string $OehhDuePct6) Return the first ChildSoHeadHist filtered by the OehhDuePct6 column
 * @method     ChildSoHeadHist findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoHeadHist filtered by the DateUpdtd column
 * @method     ChildSoHeadHist findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoHeadHist filtered by the TimeUpdtd column
 * @method     ChildSoHeadHist findOneByDummy(string $dummy) Return the first ChildSoHeadHist filtered by the dummy column *

 * @method     ChildSoHeadHist requirePk($key, ConnectionInterface $con = null) Return the ChildSoHeadHist by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOne(ConnectionInterface $con = null) Return the first ChildSoHeadHist matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoHeadHist requireOneByOehhnbr(string $OehhNbr) Return the first ChildSoHeadHist filtered by the OehhNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhyear(string $OehhYear) Return the first ChildSoHeadHist filtered by the OehhYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstat(string $OehhStat) Return the first ChildSoHeadHist filtered by the OehhStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhhold(string $OehhHold) Return the first ChildSoHeadHist filtered by the OehhHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByArcucustid(string $ArcuCustId) Return the first ChildSoHeadHist filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByArstshipid(string $ArstShipId) Return the first ChildSoHeadHist filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstname(string $OehhStName) Return the first ChildSoHeadHist filtered by the OehhStName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstlastname(string $OehhStLastName) Return the first ChildSoHeadHist filtered by the OehhStLastName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstfirstname(string $OehhStFirstName) Return the first ChildSoHeadHist filtered by the OehhStFirstName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstadr1(string $OehhStAdr1) Return the first ChildSoHeadHist filtered by the OehhStAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstadr2(string $OehhStAdr2) Return the first ChildSoHeadHist filtered by the OehhStAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstadr3(string $OehhStAdr3) Return the first ChildSoHeadHist filtered by the OehhStAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstctry(string $OehhStCtry) Return the first ChildSoHeadHist filtered by the OehhStCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstcity(string $OehhStCity) Return the first ChildSoHeadHist filtered by the OehhStCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhststat(string $OehhStStat) Return the first ChildSoHeadHist filtered by the OehhStStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstzipcode(string $OehhStZipCode) Return the first ChildSoHeadHist filtered by the OehhStZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcustpo(string $OehhCustPo) Return the first ChildSoHeadHist filtered by the OehhCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhordrdate(string $OehhOrdrDate) Return the first ChildSoHeadHist filtered by the OehhOrdrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSoHeadHist filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSoHeadHist filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByArininvnbr(string $ArinInvNbr) Return the first ChildSoHeadHist filtered by the ArinInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhinvdate(string $OehhInvDate) Return the first ChildSoHeadHist filtered by the OehhInvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhglpd(int $OehhGLPd) Return the first ChildSoHeadHist filtered by the OehhGLPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSoHeadHist filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhsp1pct(string $OehhSp1Pct) Return the first ChildSoHeadHist filtered by the OehhSp1Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSoHeadHist filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhsp2pct(string $OehhSp2Pct) Return the first ChildSoHeadHist filtered by the OehhSp2Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSoHeadHist filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhsp3pct(string $OehhSp3Pct) Return the first ChildSoHeadHist filtered by the OehhSp3Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcntrnbr(int $OehhCntrNbr) Return the first ChildSoHeadHist filtered by the OehhCntrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhwibatch(int $OehhWiBatch) Return the first ChildSoHeadHist filtered by the OehhWiBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdroprelhold(string $OehhDropRelHold) Return the first ChildSoHeadHist filtered by the OehhDropRelHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhtaxsub(string $OehhTaxSub) Return the first ChildSoHeadHist filtered by the OehhTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhnontaxsub(string $OehhNonTaxSub) Return the first ChildSoHeadHist filtered by the OehhNonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhtaxtot(string $OehhTaxTot) Return the first ChildSoHeadHist filtered by the OehhTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttot(string $OehhFrtTot) Return the first ChildSoHeadHist filtered by the OehhFrtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhmisctot(string $OehhMiscTot) Return the first ChildSoHeadHist filtered by the OehhMiscTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhordrtot(string $OehhOrdrTot) Return the first ChildSoHeadHist filtered by the OehhOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcosttot(string $OehhCostTot) Return the first ChildSoHeadHist filtered by the OehhCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhspcommlock(string $OehhSpCommLock) Return the first ChildSoHeadHist filtered by the OehhSpCommLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhtakendate(string $OehhTakenDate) Return the first ChildSoHeadHist filtered by the OehhTakenDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhtakentime(string $OehhTakenTime) Return the first ChildSoHeadHist filtered by the OehhTakenTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpickdate(string $OehhPickDate) Return the first ChildSoHeadHist filtered by the OehhPickDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpicktime(string $OehhPickTime) Return the first ChildSoHeadHist filtered by the OehhPickTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpackdate(string $OehhPackDate) Return the first ChildSoHeadHist filtered by the OehhPackDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpacktime(string $OehhPackTime) Return the first ChildSoHeadHist filtered by the OehhPackTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhverifydate(string $OehhVerifyDate) Return the first ChildSoHeadHist filtered by the OehhVerifyDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhverifytime(string $OehhVerifyTime) Return the first ChildSoHeadHist filtered by the OehhVerifyTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcreditmemo(string $OehhCreditMemo) Return the first ChildSoHeadHist filtered by the OehhCreditMemo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhbookedyn(string $OehhBookedYn) Return the first ChildSoHeadHist filtered by the OehhBookedYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSoHeadHist filtered by the IntbWhseOrig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhbtstat(string $OehhBtStat) Return the first ChildSoHeadHist filtered by the OehhBtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhshipcomp(string $OehhShipComp) Return the first ChildSoHeadHist filtered by the OehhShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcwoflag(string $OehhCwoFlag) Return the first ChildSoHeadHist filtered by the OehhCwoFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdivision(string $OehhDivision) Return the first ChildSoHeadHist filtered by the OehhDivision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhtakencode(string $OehhTakenCode) Return the first ChildSoHeadHist filtered by the OehhTakenCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpickcode(string $OehhPickCode) Return the first ChildSoHeadHist filtered by the OehhPickCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpackcode(string $OehhPackCode) Return the first ChildSoHeadHist filtered by the OehhPackCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhverifycode(string $OehhVerifyCode) Return the first ChildSoHeadHist filtered by the OehhVerifyCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhtotdisc(string $OehhTotDisc) Return the first ChildSoHeadHist filtered by the OehhTotDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhedirefnbrqual(string $OehhEdiRefNbrQual) Return the first ChildSoHeadHist filtered by the OehhEdiRefNbrQual column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhusercode1(string $OehhUserCode1) Return the first ChildSoHeadHist filtered by the OehhUserCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhusercode2(string $OehhUserCode2) Return the first ChildSoHeadHist filtered by the OehhUserCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhusercode3(string $OehhUserCode3) Return the first ChildSoHeadHist filtered by the OehhUserCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhusercode4(string $OehhUserCode4) Return the first ChildSoHeadHist filtered by the OehhUserCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhexchctry(string $OehhExchCtry) Return the first ChildSoHeadHist filtered by the OehhExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhexchrate(string $OehhExchRate) Return the first ChildSoHeadHist filtered by the OehhExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhwghttot(string $OehhWghtTot) Return the first ChildSoHeadHist filtered by the OehhWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhwghtoride(string $OehhWghtOride) Return the first ChildSoHeadHist filtered by the OehhWghtOride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhccinfo(string $OehhCcInfo) Return the first ChildSoHeadHist filtered by the OehhCcInfo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhboxcount(int $OehhBoxCount) Return the first ChildSoHeadHist filtered by the OehhBoxCount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhrqstdate(string $OehhRqstDate) Return the first ChildSoHeadHist filtered by the OehhRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcancdate(string $OehhCancDate) Return the first ChildSoHeadHist filtered by the OehhCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcrntuser(string $OehhCrntUser) Return the first ChildSoHeadHist filtered by the OehhCrntUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhreleasenbr(string $OehhReleaseNbr) Return the first ChildSoHeadHist filtered by the OehhReleaseNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByIntbwhse(string $IntbWhse) Return the first ChildSoHeadHist filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhbordbuilddate(string $OehhBordBuildDate) Return the first ChildSoHeadHist filtered by the OehhBordBuildDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdeptcode(string $OehhDeptCode) Return the first ChildSoHeadHist filtered by the OehhDeptCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrtinentered(string $OehhFrtInEntered) Return the first ChildSoHeadHist filtered by the OehhFrtInEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdropshipentered(string $OehhDropShipEntered) Return the first ChildSoHeadHist filtered by the OehhDropShipEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehherflag(string $OehhErFlag) Return the first ChildSoHeadHist filtered by the OehhErFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrtin(string $OehhFrtIn) Return the first ChildSoHeadHist filtered by the OehhFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdropship(string $OehhDropShip) Return the first ChildSoHeadHist filtered by the OehhDropShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhminorder(string $OehhMinOrder) Return the first ChildSoHeadHist filtered by the OehhMinOrder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcontractterms(string $OehhContractTerms) Return the first ChildSoHeadHist filtered by the OehhContractTerms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdropshipbilled(string $OehhDropShipBilled) Return the first ChildSoHeadHist filtered by the OehhDropShipBilled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhordtyp(string $OehhOrdTyp) Return the first ChildSoHeadHist filtered by the OehhOrdTyp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhtracknbr(string $OehhTrackNbr) Return the first ChildSoHeadHist filtered by the OehhTrackNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhsource(string $OehhSource) Return the first ChildSoHeadHist filtered by the OehhSource column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhccaprv(string $OehhCcAprv) Return the first ChildSoHeadHist filtered by the OehhCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpickfmattype(string $OehhPickFmatType) Return the first ChildSoHeadHist filtered by the OehhPickFmatType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhinvcfmattype(string $OehhInvcFmatType) Return the first ChildSoHeadHist filtered by the OehhInvcFmatType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcashamt(string $OehhCashAmt) Return the first ChildSoHeadHist filtered by the OehhCashAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcheckamt(string $OehhCheckAmt) Return the first ChildSoHeadHist filtered by the OehhCheckAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhchecknbr(string $OehhCheckNbr) Return the first ChildSoHeadHist filtered by the OehhCheckNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdepositamt(string $OehhDepositAmt) Return the first ChildSoHeadHist filtered by the OehhDepositAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdepositnbr(string $OehhDepositNbr) Return the first ChildSoHeadHist filtered by the OehhDepositNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhccamt(string $OehhCcAmt) Return the first ChildSoHeadHist filtered by the OehhCcAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhotaxsub(string $OehhOTaxSub) Return the first ChildSoHeadHist filtered by the OehhOTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhonontaxsub(string $OehhONonTaxSub) Return the first ChildSoHeadHist filtered by the OehhONonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhotaxtot(string $OehhOTaxTot) Return the first ChildSoHeadHist filtered by the OehhOTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhoordrtot(string $OehhOOrdrTot) Return the first ChildSoHeadHist filtered by the OehhOOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpickprintdate(string $OehhPickPrintDate) Return the first ChildSoHeadHist filtered by the OehhPickPrintDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpickprinttime(string $OehhPickPrintTime) Return the first ChildSoHeadHist filtered by the OehhPickPrintTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcont(string $OehhCont) Return the first ChildSoHeadHist filtered by the OehhCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcontteleintl(string $OehhContTeleIntl) Return the first ChildSoHeadHist filtered by the OehhContTeleIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhconttelenbr(string $OehhContTeleNbr) Return the first ChildSoHeadHist filtered by the OehhContTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcontteleext(string $OehhContTeleExt) Return the first ChildSoHeadHist filtered by the OehhContTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcontfaxintl(string $OehhContFaxIntl) Return the first ChildSoHeadHist filtered by the OehhContFaxIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcontfaxnbr(string $OehhContFaxNbr) Return the first ChildSoHeadHist filtered by the OehhContFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhshipacct(string $OehhShipAcct) Return the first ChildSoHeadHist filtered by the OehhShipAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhchgdue(string $OehhChgDue) Return the first ChildSoHeadHist filtered by the OehhChgDue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhaddlpricdisc(string $OehhAddlPricDisc) Return the first ChildSoHeadHist filtered by the OehhAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhallship(string $OehhAllShip) Return the first ChildSoHeadHist filtered by the OehhAllShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhqtyorderamt(string $OehhQtyOrderAmt) Return the first ChildSoHeadHist filtered by the OehhQtyOrderAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcreditapplied(string $OehhCreditApplied) Return the first ChildSoHeadHist filtered by the OehhCreditApplied column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhinvcprintdate(string $OehhInvcPrintDate) Return the first ChildSoHeadHist filtered by the OehhInvcPrintDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhinvcprinttime(string $OehhInvcPrintTime) Return the first ChildSoHeadHist filtered by the OehhInvcPrintTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscfrt(string $OehhDiscFrt) Return the first ChildSoHeadHist filtered by the OehhDiscFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhorideshipcomp(string $OehhOrideShipComp) Return the first ChildSoHeadHist filtered by the OehhOrideShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcontemail(string $OehhContEmail) Return the first ChildSoHeadHist filtered by the OehhContEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhmanualfrt(string $OehhManualFrt) Return the first ChildSoHeadHist filtered by the OehhManualFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhinternalfrt(string $OehhInternalFrt) Return the first ChildSoHeadHist filtered by the OehhInternalFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrtcost(string $OehhFrtCost) Return the first ChildSoHeadHist filtered by the OehhFrtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhroute(string $OehhRoute) Return the first ChildSoHeadHist filtered by the OehhRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhrouteseq(int $OehhRouteSeq) Return the first ChildSoHeadHist filtered by the OehhRouteSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxcode1(string $OehhFrtTaxCode1) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxamt1(string $OehhFrtTaxAmt1) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxcode2(string $OehhFrtTaxCode2) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxamt2(string $OehhFrtTaxAmt2) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxcode3(string $OehhFrtTaxCode3) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxamt3(string $OehhFrtTaxAmt3) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxcode4(string $OehhFrtTaxCode4) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxamt4(string $OehhFrtTaxAmt4) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxcode5(string $OehhFrtTaxCode5) Return the first ChildSoHeadHist filtered by the OehhFrtTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrttaxamt5(string $OehhFrtTaxAmt5) Return the first ChildSoHeadHist filtered by the OehhFrtTaxAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhedi855sent(string $OehhEdi855Sent) Return the first ChildSoHeadHist filtered by the OehhEdi855Sent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrt3rdparty(string $OehhFrt3rdParty) Return the first ChildSoHeadHist filtered by the OehhFrt3rdParty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfob(string $OehhFob) Return the first ChildSoHeadHist filtered by the OehhFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhconfirmimagyn(string $OehhConfirmImagYn) Return the first ChildSoHeadHist filtered by the OehhConfirmImagYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhindustconform(string $OehhIndustConform) Return the first ChildSoHeadHist filtered by the OehhIndustConform column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcstkconsign(string $OehhCstkConsign) Return the first ChildSoHeadHist filtered by the OehhCstkConsign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhlmdelaycapsent(string $OehhLmDelayCapSent) Return the first ChildSoHeadHist filtered by the OehhLmDelayCapSent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhmfgid(string $OehhMfgId) Return the first ChildSoHeadHist filtered by the OehhMfgId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhstoreid(string $OehhStoreId) Return the first ChildSoHeadHist filtered by the OehhStoreId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpickqueue(string $OehhPickQueue) Return the first ChildSoHeadHist filtered by the OehhPickQueue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehharrvdate(string $OehhArrvDate) Return the first ChildSoHeadHist filtered by the OehhArrvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhsurchgstat(string $OehhSurchgStat) Return the first ChildSoHeadHist filtered by the OehhSurchgStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhfrtgrup(string $OehhFrtGrup) Return the first ChildSoHeadHist filtered by the OehhFrtGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhcommoride(string $OehhCommOride) Return the first ChildSoHeadHist filtered by the OehhCommOride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhchrgsplt(string $OehhChrgSplt) Return the first ChildSoHeadHist filtered by the OehhChrgSplt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhacccaprv(string $OehhAcCcAprv) Return the first ChildSoHeadHist filtered by the OehhAcCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhorigordrnbr(string $OehhOrigOrdrNbr) Return the first ChildSoHeadHist filtered by the OehhOrigOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhpostdate(string $OehhPostDate) Return the first ChildSoHeadHist filtered by the OehhPostDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscdate1(string $OehhDiscDate1) Return the first ChildSoHeadHist filtered by the OehhDiscDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscpct1(string $OehhDiscPct1) Return the first ChildSoHeadHist filtered by the OehhDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduedate1(string $OehhDueDate1) Return the first ChildSoHeadHist filtered by the OehhDueDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdueamt1(string $OehhDueAmt1) Return the first ChildSoHeadHist filtered by the OehhDueAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduepct1(string $OehhDuePct1) Return the first ChildSoHeadHist filtered by the OehhDuePct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscdate2(string $OehhDiscDate2) Return the first ChildSoHeadHist filtered by the OehhDiscDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscpct2(string $OehhDiscPct2) Return the first ChildSoHeadHist filtered by the OehhDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduedate2(string $OehhDueDate2) Return the first ChildSoHeadHist filtered by the OehhDueDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdueamt2(string $OehhDueAmt2) Return the first ChildSoHeadHist filtered by the OehhDueAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduepct2(string $OehhDuePct2) Return the first ChildSoHeadHist filtered by the OehhDuePct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscdate3(string $OehhDiscDate3) Return the first ChildSoHeadHist filtered by the OehhDiscDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscpct3(string $OehhDiscPct3) Return the first ChildSoHeadHist filtered by the OehhDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduedate3(string $OehhDueDate3) Return the first ChildSoHeadHist filtered by the OehhDueDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdueamt3(string $OehhDueAmt3) Return the first ChildSoHeadHist filtered by the OehhDueAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduepct3(string $OehhDuePct3) Return the first ChildSoHeadHist filtered by the OehhDuePct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscdate4(string $OehhDiscDate4) Return the first ChildSoHeadHist filtered by the OehhDiscDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscpct4(string $OehhDiscPct4) Return the first ChildSoHeadHist filtered by the OehhDiscPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduedate4(string $OehhDueDate4) Return the first ChildSoHeadHist filtered by the OehhDueDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdueamt4(string $OehhDueAmt4) Return the first ChildSoHeadHist filtered by the OehhDueAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduepct4(string $OehhDuePct4) Return the first ChildSoHeadHist filtered by the OehhDuePct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscdate5(string $OehhDiscDate5) Return the first ChildSoHeadHist filtered by the OehhDiscDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscpct5(string $OehhDiscPct5) Return the first ChildSoHeadHist filtered by the OehhDiscPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduedate5(string $OehhDueDate5) Return the first ChildSoHeadHist filtered by the OehhDueDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdueamt5(string $OehhDueAmt5) Return the first ChildSoHeadHist filtered by the OehhDueAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduepct5(string $OehhDuePct5) Return the first ChildSoHeadHist filtered by the OehhDuePct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscdate6(string $OehhDiscDate6) Return the first ChildSoHeadHist filtered by the OehhDiscDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdiscpct6(string $OehhDiscPct6) Return the first ChildSoHeadHist filtered by the OehhDiscPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduedate6(string $OehhDueDate6) Return the first ChildSoHeadHist filtered by the OehhDueDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhdueamt6(string $OehhDueAmt6) Return the first ChildSoHeadHist filtered by the OehhDueAmt6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByOehhduepct6(string $OehhDuePct6) Return the first ChildSoHeadHist filtered by the OehhDuePct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoHeadHist filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoHeadHist filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeadHist requireOneByDummy(string $dummy) Return the first ChildSoHeadHist filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoHeadHist[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSoHeadHist objects based on current ModelCriteria
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhnbr(string $OehhNbr) Return ChildSoHeadHist objects filtered by the OehhNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhyear(string $OehhYear) Return ChildSoHeadHist objects filtered by the OehhYear column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstat(string $OehhStat) Return ChildSoHeadHist objects filtered by the OehhStat column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhhold(string $OehhHold) Return ChildSoHeadHist objects filtered by the OehhHold column
 * @method     ChildSoHeadHist[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildSoHeadHist objects filtered by the ArcuCustId column
 * @method     ChildSoHeadHist[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildSoHeadHist objects filtered by the ArstShipId column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstname(string $OehhStName) Return ChildSoHeadHist objects filtered by the OehhStName column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstlastname(string $OehhStLastName) Return ChildSoHeadHist objects filtered by the OehhStLastName column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstfirstname(string $OehhStFirstName) Return ChildSoHeadHist objects filtered by the OehhStFirstName column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstadr1(string $OehhStAdr1) Return ChildSoHeadHist objects filtered by the OehhStAdr1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstadr2(string $OehhStAdr2) Return ChildSoHeadHist objects filtered by the OehhStAdr2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstadr3(string $OehhStAdr3) Return ChildSoHeadHist objects filtered by the OehhStAdr3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstctry(string $OehhStCtry) Return ChildSoHeadHist objects filtered by the OehhStCtry column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstcity(string $OehhStCity) Return ChildSoHeadHist objects filtered by the OehhStCity column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhststat(string $OehhStStat) Return ChildSoHeadHist objects filtered by the OehhStStat column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstzipcode(string $OehhStZipCode) Return ChildSoHeadHist objects filtered by the OehhStZipCode column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcustpo(string $OehhCustPo) Return ChildSoHeadHist objects filtered by the OehhCustPo column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhordrdate(string $OehhOrdrDate) Return ChildSoHeadHist objects filtered by the OehhOrdrDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildSoHeadHist objects filtered by the ArtmTermCd column
 * @method     ChildSoHeadHist[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildSoHeadHist objects filtered by the ArtbShipVia column
 * @method     ChildSoHeadHist[]|ObjectCollection findByArininvnbr(string $ArinInvNbr) Return ChildSoHeadHist objects filtered by the ArinInvNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhinvdate(string $OehhInvDate) Return ChildSoHeadHist objects filtered by the OehhInvDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhglpd(int $OehhGLPd) Return ChildSoHeadHist objects filtered by the OehhGLPd column
 * @method     ChildSoHeadHist[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildSoHeadHist objects filtered by the ArspSalePer1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhsp1pct(string $OehhSp1Pct) Return ChildSoHeadHist objects filtered by the OehhSp1Pct column
 * @method     ChildSoHeadHist[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildSoHeadHist objects filtered by the ArspSalePer2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhsp2pct(string $OehhSp2Pct) Return ChildSoHeadHist objects filtered by the OehhSp2Pct column
 * @method     ChildSoHeadHist[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildSoHeadHist objects filtered by the ArspSalePer3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhsp3pct(string $OehhSp3Pct) Return ChildSoHeadHist objects filtered by the OehhSp3Pct column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcntrnbr(int $OehhCntrNbr) Return ChildSoHeadHist objects filtered by the OehhCntrNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhwibatch(int $OehhWiBatch) Return ChildSoHeadHist objects filtered by the OehhWiBatch column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdroprelhold(string $OehhDropRelHold) Return ChildSoHeadHist objects filtered by the OehhDropRelHold column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhtaxsub(string $OehhTaxSub) Return ChildSoHeadHist objects filtered by the OehhTaxSub column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhnontaxsub(string $OehhNonTaxSub) Return ChildSoHeadHist objects filtered by the OehhNonTaxSub column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhtaxtot(string $OehhTaxTot) Return ChildSoHeadHist objects filtered by the OehhTaxTot column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttot(string $OehhFrtTot) Return ChildSoHeadHist objects filtered by the OehhFrtTot column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhmisctot(string $OehhMiscTot) Return ChildSoHeadHist objects filtered by the OehhMiscTot column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhordrtot(string $OehhOrdrTot) Return ChildSoHeadHist objects filtered by the OehhOrdrTot column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcosttot(string $OehhCostTot) Return ChildSoHeadHist objects filtered by the OehhCostTot column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhspcommlock(string $OehhSpCommLock) Return ChildSoHeadHist objects filtered by the OehhSpCommLock column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhtakendate(string $OehhTakenDate) Return ChildSoHeadHist objects filtered by the OehhTakenDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhtakentime(string $OehhTakenTime) Return ChildSoHeadHist objects filtered by the OehhTakenTime column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpickdate(string $OehhPickDate) Return ChildSoHeadHist objects filtered by the OehhPickDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpicktime(string $OehhPickTime) Return ChildSoHeadHist objects filtered by the OehhPickTime column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpackdate(string $OehhPackDate) Return ChildSoHeadHist objects filtered by the OehhPackDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpacktime(string $OehhPackTime) Return ChildSoHeadHist objects filtered by the OehhPackTime column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhverifydate(string $OehhVerifyDate) Return ChildSoHeadHist objects filtered by the OehhVerifyDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhverifytime(string $OehhVerifyTime) Return ChildSoHeadHist objects filtered by the OehhVerifyTime column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcreditmemo(string $OehhCreditMemo) Return ChildSoHeadHist objects filtered by the OehhCreditMemo column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhbookedyn(string $OehhBookedYn) Return ChildSoHeadHist objects filtered by the OehhBookedYn column
 * @method     ChildSoHeadHist[]|ObjectCollection findByIntbwhseorig(string $IntbWhseOrig) Return ChildSoHeadHist objects filtered by the IntbWhseOrig column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhbtstat(string $OehhBtStat) Return ChildSoHeadHist objects filtered by the OehhBtStat column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhshipcomp(string $OehhShipComp) Return ChildSoHeadHist objects filtered by the OehhShipComp column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcwoflag(string $OehhCwoFlag) Return ChildSoHeadHist objects filtered by the OehhCwoFlag column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdivision(string $OehhDivision) Return ChildSoHeadHist objects filtered by the OehhDivision column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhtakencode(string $OehhTakenCode) Return ChildSoHeadHist objects filtered by the OehhTakenCode column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpickcode(string $OehhPickCode) Return ChildSoHeadHist objects filtered by the OehhPickCode column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpackcode(string $OehhPackCode) Return ChildSoHeadHist objects filtered by the OehhPackCode column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhverifycode(string $OehhVerifyCode) Return ChildSoHeadHist objects filtered by the OehhVerifyCode column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhtotdisc(string $OehhTotDisc) Return ChildSoHeadHist objects filtered by the OehhTotDisc column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhedirefnbrqual(string $OehhEdiRefNbrQual) Return ChildSoHeadHist objects filtered by the OehhEdiRefNbrQual column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhusercode1(string $OehhUserCode1) Return ChildSoHeadHist objects filtered by the OehhUserCode1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhusercode2(string $OehhUserCode2) Return ChildSoHeadHist objects filtered by the OehhUserCode2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhusercode3(string $OehhUserCode3) Return ChildSoHeadHist objects filtered by the OehhUserCode3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhusercode4(string $OehhUserCode4) Return ChildSoHeadHist objects filtered by the OehhUserCode4 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhexchctry(string $OehhExchCtry) Return ChildSoHeadHist objects filtered by the OehhExchCtry column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhexchrate(string $OehhExchRate) Return ChildSoHeadHist objects filtered by the OehhExchRate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhwghttot(string $OehhWghtTot) Return ChildSoHeadHist objects filtered by the OehhWghtTot column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhwghtoride(string $OehhWghtOride) Return ChildSoHeadHist objects filtered by the OehhWghtOride column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhccinfo(string $OehhCcInfo) Return ChildSoHeadHist objects filtered by the OehhCcInfo column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhboxcount(int $OehhBoxCount) Return ChildSoHeadHist objects filtered by the OehhBoxCount column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhrqstdate(string $OehhRqstDate) Return ChildSoHeadHist objects filtered by the OehhRqstDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcancdate(string $OehhCancDate) Return ChildSoHeadHist objects filtered by the OehhCancDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcrntuser(string $OehhCrntUser) Return ChildSoHeadHist objects filtered by the OehhCrntUser column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhreleasenbr(string $OehhReleaseNbr) Return ChildSoHeadHist objects filtered by the OehhReleaseNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildSoHeadHist objects filtered by the IntbWhse column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhbordbuilddate(string $OehhBordBuildDate) Return ChildSoHeadHist objects filtered by the OehhBordBuildDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdeptcode(string $OehhDeptCode) Return ChildSoHeadHist objects filtered by the OehhDeptCode column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrtinentered(string $OehhFrtInEntered) Return ChildSoHeadHist objects filtered by the OehhFrtInEntered column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdropshipentered(string $OehhDropShipEntered) Return ChildSoHeadHist objects filtered by the OehhDropShipEntered column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehherflag(string $OehhErFlag) Return ChildSoHeadHist objects filtered by the OehhErFlag column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrtin(string $OehhFrtIn) Return ChildSoHeadHist objects filtered by the OehhFrtIn column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdropship(string $OehhDropShip) Return ChildSoHeadHist objects filtered by the OehhDropShip column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhminorder(string $OehhMinOrder) Return ChildSoHeadHist objects filtered by the OehhMinOrder column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcontractterms(string $OehhContractTerms) Return ChildSoHeadHist objects filtered by the OehhContractTerms column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdropshipbilled(string $OehhDropShipBilled) Return ChildSoHeadHist objects filtered by the OehhDropShipBilled column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhordtyp(string $OehhOrdTyp) Return ChildSoHeadHist objects filtered by the OehhOrdTyp column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhtracknbr(string $OehhTrackNbr) Return ChildSoHeadHist objects filtered by the OehhTrackNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhsource(string $OehhSource) Return ChildSoHeadHist objects filtered by the OehhSource column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhccaprv(string $OehhCcAprv) Return ChildSoHeadHist objects filtered by the OehhCcAprv column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpickfmattype(string $OehhPickFmatType) Return ChildSoHeadHist objects filtered by the OehhPickFmatType column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhinvcfmattype(string $OehhInvcFmatType) Return ChildSoHeadHist objects filtered by the OehhInvcFmatType column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcashamt(string $OehhCashAmt) Return ChildSoHeadHist objects filtered by the OehhCashAmt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcheckamt(string $OehhCheckAmt) Return ChildSoHeadHist objects filtered by the OehhCheckAmt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhchecknbr(string $OehhCheckNbr) Return ChildSoHeadHist objects filtered by the OehhCheckNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdepositamt(string $OehhDepositAmt) Return ChildSoHeadHist objects filtered by the OehhDepositAmt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdepositnbr(string $OehhDepositNbr) Return ChildSoHeadHist objects filtered by the OehhDepositNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhccamt(string $OehhCcAmt) Return ChildSoHeadHist objects filtered by the OehhCcAmt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhotaxsub(string $OehhOTaxSub) Return ChildSoHeadHist objects filtered by the OehhOTaxSub column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhonontaxsub(string $OehhONonTaxSub) Return ChildSoHeadHist objects filtered by the OehhONonTaxSub column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhotaxtot(string $OehhOTaxTot) Return ChildSoHeadHist objects filtered by the OehhOTaxTot column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhoordrtot(string $OehhOOrdrTot) Return ChildSoHeadHist objects filtered by the OehhOOrdrTot column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpickprintdate(string $OehhPickPrintDate) Return ChildSoHeadHist objects filtered by the OehhPickPrintDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpickprinttime(string $OehhPickPrintTime) Return ChildSoHeadHist objects filtered by the OehhPickPrintTime column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcont(string $OehhCont) Return ChildSoHeadHist objects filtered by the OehhCont column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcontteleintl(string $OehhContTeleIntl) Return ChildSoHeadHist objects filtered by the OehhContTeleIntl column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhconttelenbr(string $OehhContTeleNbr) Return ChildSoHeadHist objects filtered by the OehhContTeleNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcontteleext(string $OehhContTeleExt) Return ChildSoHeadHist objects filtered by the OehhContTeleExt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcontfaxintl(string $OehhContFaxIntl) Return ChildSoHeadHist objects filtered by the OehhContFaxIntl column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcontfaxnbr(string $OehhContFaxNbr) Return ChildSoHeadHist objects filtered by the OehhContFaxNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhshipacct(string $OehhShipAcct) Return ChildSoHeadHist objects filtered by the OehhShipAcct column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhchgdue(string $OehhChgDue) Return ChildSoHeadHist objects filtered by the OehhChgDue column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhaddlpricdisc(string $OehhAddlPricDisc) Return ChildSoHeadHist objects filtered by the OehhAddlPricDisc column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhallship(string $OehhAllShip) Return ChildSoHeadHist objects filtered by the OehhAllShip column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhqtyorderamt(string $OehhQtyOrderAmt) Return ChildSoHeadHist objects filtered by the OehhQtyOrderAmt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcreditapplied(string $OehhCreditApplied) Return ChildSoHeadHist objects filtered by the OehhCreditApplied column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhinvcprintdate(string $OehhInvcPrintDate) Return ChildSoHeadHist objects filtered by the OehhInvcPrintDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhinvcprinttime(string $OehhInvcPrintTime) Return ChildSoHeadHist objects filtered by the OehhInvcPrintTime column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscfrt(string $OehhDiscFrt) Return ChildSoHeadHist objects filtered by the OehhDiscFrt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhorideshipcomp(string $OehhOrideShipComp) Return ChildSoHeadHist objects filtered by the OehhOrideShipComp column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcontemail(string $OehhContEmail) Return ChildSoHeadHist objects filtered by the OehhContEmail column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhmanualfrt(string $OehhManualFrt) Return ChildSoHeadHist objects filtered by the OehhManualFrt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhinternalfrt(string $OehhInternalFrt) Return ChildSoHeadHist objects filtered by the OehhInternalFrt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrtcost(string $OehhFrtCost) Return ChildSoHeadHist objects filtered by the OehhFrtCost column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhroute(string $OehhRoute) Return ChildSoHeadHist objects filtered by the OehhRoute column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhrouteseq(int $OehhRouteSeq) Return ChildSoHeadHist objects filtered by the OehhRouteSeq column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxcode1(string $OehhFrtTaxCode1) Return ChildSoHeadHist objects filtered by the OehhFrtTaxCode1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxamt1(string $OehhFrtTaxAmt1) Return ChildSoHeadHist objects filtered by the OehhFrtTaxAmt1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxcode2(string $OehhFrtTaxCode2) Return ChildSoHeadHist objects filtered by the OehhFrtTaxCode2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxamt2(string $OehhFrtTaxAmt2) Return ChildSoHeadHist objects filtered by the OehhFrtTaxAmt2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxcode3(string $OehhFrtTaxCode3) Return ChildSoHeadHist objects filtered by the OehhFrtTaxCode3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxamt3(string $OehhFrtTaxAmt3) Return ChildSoHeadHist objects filtered by the OehhFrtTaxAmt3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxcode4(string $OehhFrtTaxCode4) Return ChildSoHeadHist objects filtered by the OehhFrtTaxCode4 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxamt4(string $OehhFrtTaxAmt4) Return ChildSoHeadHist objects filtered by the OehhFrtTaxAmt4 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxcode5(string $OehhFrtTaxCode5) Return ChildSoHeadHist objects filtered by the OehhFrtTaxCode5 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrttaxamt5(string $OehhFrtTaxAmt5) Return ChildSoHeadHist objects filtered by the OehhFrtTaxAmt5 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhedi855sent(string $OehhEdi855Sent) Return ChildSoHeadHist objects filtered by the OehhEdi855Sent column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrt3rdparty(string $OehhFrt3rdParty) Return ChildSoHeadHist objects filtered by the OehhFrt3rdParty column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfob(string $OehhFob) Return ChildSoHeadHist objects filtered by the OehhFob column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhconfirmimagyn(string $OehhConfirmImagYn) Return ChildSoHeadHist objects filtered by the OehhConfirmImagYn column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhindustconform(string $OehhIndustConform) Return ChildSoHeadHist objects filtered by the OehhIndustConform column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcstkconsign(string $OehhCstkConsign) Return ChildSoHeadHist objects filtered by the OehhCstkConsign column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhlmdelaycapsent(string $OehhLmDelayCapSent) Return ChildSoHeadHist objects filtered by the OehhLmDelayCapSent column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhmfgid(string $OehhMfgId) Return ChildSoHeadHist objects filtered by the OehhMfgId column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhstoreid(string $OehhStoreId) Return ChildSoHeadHist objects filtered by the OehhStoreId column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpickqueue(string $OehhPickQueue) Return ChildSoHeadHist objects filtered by the OehhPickQueue column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehharrvdate(string $OehhArrvDate) Return ChildSoHeadHist objects filtered by the OehhArrvDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhsurchgstat(string $OehhSurchgStat) Return ChildSoHeadHist objects filtered by the OehhSurchgStat column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhfrtgrup(string $OehhFrtGrup) Return ChildSoHeadHist objects filtered by the OehhFrtGrup column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhcommoride(string $OehhCommOride) Return ChildSoHeadHist objects filtered by the OehhCommOride column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhchrgsplt(string $OehhChrgSplt) Return ChildSoHeadHist objects filtered by the OehhChrgSplt column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhacccaprv(string $OehhAcCcAprv) Return ChildSoHeadHist objects filtered by the OehhAcCcAprv column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhorigordrnbr(string $OehhOrigOrdrNbr) Return ChildSoHeadHist objects filtered by the OehhOrigOrdrNbr column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhpostdate(string $OehhPostDate) Return ChildSoHeadHist objects filtered by the OehhPostDate column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscdate1(string $OehhDiscDate1) Return ChildSoHeadHist objects filtered by the OehhDiscDate1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscpct1(string $OehhDiscPct1) Return ChildSoHeadHist objects filtered by the OehhDiscPct1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduedate1(string $OehhDueDate1) Return ChildSoHeadHist objects filtered by the OehhDueDate1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdueamt1(string $OehhDueAmt1) Return ChildSoHeadHist objects filtered by the OehhDueAmt1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduepct1(string $OehhDuePct1) Return ChildSoHeadHist objects filtered by the OehhDuePct1 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscdate2(string $OehhDiscDate2) Return ChildSoHeadHist objects filtered by the OehhDiscDate2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscpct2(string $OehhDiscPct2) Return ChildSoHeadHist objects filtered by the OehhDiscPct2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduedate2(string $OehhDueDate2) Return ChildSoHeadHist objects filtered by the OehhDueDate2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdueamt2(string $OehhDueAmt2) Return ChildSoHeadHist objects filtered by the OehhDueAmt2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduepct2(string $OehhDuePct2) Return ChildSoHeadHist objects filtered by the OehhDuePct2 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscdate3(string $OehhDiscDate3) Return ChildSoHeadHist objects filtered by the OehhDiscDate3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscpct3(string $OehhDiscPct3) Return ChildSoHeadHist objects filtered by the OehhDiscPct3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduedate3(string $OehhDueDate3) Return ChildSoHeadHist objects filtered by the OehhDueDate3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdueamt3(string $OehhDueAmt3) Return ChildSoHeadHist objects filtered by the OehhDueAmt3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduepct3(string $OehhDuePct3) Return ChildSoHeadHist objects filtered by the OehhDuePct3 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscdate4(string $OehhDiscDate4) Return ChildSoHeadHist objects filtered by the OehhDiscDate4 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscpct4(string $OehhDiscPct4) Return ChildSoHeadHist objects filtered by the OehhDiscPct4 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduedate4(string $OehhDueDate4) Return ChildSoHeadHist objects filtered by the OehhDueDate4 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdueamt4(string $OehhDueAmt4) Return ChildSoHeadHist objects filtered by the OehhDueAmt4 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduepct4(string $OehhDuePct4) Return ChildSoHeadHist objects filtered by the OehhDuePct4 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscdate5(string $OehhDiscDate5) Return ChildSoHeadHist objects filtered by the OehhDiscDate5 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscpct5(string $OehhDiscPct5) Return ChildSoHeadHist objects filtered by the OehhDiscPct5 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduedate5(string $OehhDueDate5) Return ChildSoHeadHist objects filtered by the OehhDueDate5 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdueamt5(string $OehhDueAmt5) Return ChildSoHeadHist objects filtered by the OehhDueAmt5 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduepct5(string $OehhDuePct5) Return ChildSoHeadHist objects filtered by the OehhDuePct5 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscdate6(string $OehhDiscDate6) Return ChildSoHeadHist objects filtered by the OehhDiscDate6 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdiscpct6(string $OehhDiscPct6) Return ChildSoHeadHist objects filtered by the OehhDiscPct6 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduedate6(string $OehhDueDate6) Return ChildSoHeadHist objects filtered by the OehhDueDate6 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhdueamt6(string $OehhDueAmt6) Return ChildSoHeadHist objects filtered by the OehhDueAmt6 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByOehhduepct6(string $OehhDuePct6) Return ChildSoHeadHist objects filtered by the OehhDuePct6 column
 * @method     ChildSoHeadHist[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSoHeadHist objects filtered by the DateUpdtd column
 * @method     ChildSoHeadHist[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSoHeadHist objects filtered by the TimeUpdtd column
 * @method     ChildSoHeadHist[]|ObjectCollection findByDummy(string $dummy) Return ChildSoHeadHist objects filtered by the dummy column
 * @method     ChildSoHeadHist[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SoHeadHistQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoHeadHistQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoHeadHist', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoHeadHistQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoHeadHistQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSoHeadHistQuery) {
            return $criteria;
        }
        $query = new ChildSoHeadHistQuery();
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
     * @return ChildSoHeadHist|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoHeadHistTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoHeadHistTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSoHeadHist A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehhNbr, OehhYear, OehhStat, OehhHold, ArcuCustId, ArstShipId, OehhStName, OehhStLastName, OehhStFirstName, OehhStAdr1, OehhStAdr2, OehhStAdr3, OehhStCtry, OehhStCity, OehhStStat, OehhStZipCode, OehhCustPo, OehhOrdrDate, ArtmTermCd, ArtbShipVia, ArinInvNbr, OehhInvDate, OehhGLPd, ArspSalePer1, OehhSp1Pct, ArspSalePer2, OehhSp2Pct, ArspSalePer3, OehhSp3Pct, OehhCntrNbr, OehhWiBatch, OehhDropRelHold, OehhTaxSub, OehhNonTaxSub, OehhTaxTot, OehhFrtTot, OehhMiscTot, OehhOrdrTot, OehhCostTot, OehhSpCommLock, OehhTakenDate, OehhTakenTime, OehhPickDate, OehhPickTime, OehhPackDate, OehhPackTime, OehhVerifyDate, OehhVerifyTime, OehhCreditMemo, OehhBookedYn, IntbWhseOrig, OehhBtStat, OehhShipComp, OehhCwoFlag, OehhDivision, OehhTakenCode, OehhPickCode, OehhPackCode, OehhVerifyCode, OehhTotDisc, OehhEdiRefNbrQual, OehhUserCode1, OehhUserCode2, OehhUserCode3, OehhUserCode4, OehhExchCtry, OehhExchRate, OehhWghtTot, OehhWghtOride, OehhCcInfo, OehhBoxCount, OehhRqstDate, OehhCancDate, OehhCrntUser, OehhReleaseNbr, IntbWhse, OehhBordBuildDate, OehhDeptCode, OehhFrtInEntered, OehhDropShipEntered, OehhErFlag, OehhFrtIn, OehhDropShip, OehhMinOrder, OehhContractTerms, OehhDropShipBilled, OehhOrdTyp, OehhTrackNbr, OehhSource, OehhCcAprv, OehhPickFmatType, OehhInvcFmatType, OehhCashAmt, OehhCheckAmt, OehhCheckNbr, OehhDepositAmt, OehhDepositNbr, OehhCcAmt, OehhOTaxSub, OehhONonTaxSub, OehhOTaxTot, OehhOOrdrTot, OehhPickPrintDate, OehhPickPrintTime, OehhCont, OehhContTeleIntl, OehhContTeleNbr, OehhContTeleExt, OehhContFaxIntl, OehhContFaxNbr, OehhShipAcct, OehhChgDue, OehhAddlPricDisc, OehhAllShip, OehhQtyOrderAmt, OehhCreditApplied, OehhInvcPrintDate, OehhInvcPrintTime, OehhDiscFrt, OehhOrideShipComp, OehhContEmail, OehhManualFrt, OehhInternalFrt, OehhFrtCost, OehhRoute, OehhRouteSeq, OehhFrtTaxCode1, OehhFrtTaxAmt1, OehhFrtTaxCode2, OehhFrtTaxAmt2, OehhFrtTaxCode3, OehhFrtTaxAmt3, OehhFrtTaxCode4, OehhFrtTaxAmt4, OehhFrtTaxCode5, OehhFrtTaxAmt5, OehhEdi855Sent, OehhFrt3rdParty, OehhFob, OehhConfirmImagYn, OehhIndustConform, OehhCstkConsign, OehhLmDelayCapSent, OehhMfgId, OehhStoreId, OehhPickQueue, OehhArrvDate, OehhSurchgStat, OehhFrtGrup, OehhCommOride, OehhChrgSplt, OehhAcCcAprv, OehhOrigOrdrNbr, OehhPostDate, OehhDiscDate1, OehhDiscPct1, OehhDueDate1, OehhDueAmt1, OehhDuePct1, OehhDiscDate2, OehhDiscPct2, OehhDueDate2, OehhDueAmt2, OehhDuePct2, OehhDiscDate3, OehhDiscPct3, OehhDueDate3, OehhDueAmt3, OehhDuePct3, OehhDiscDate4, OehhDiscPct4, OehhDueDate4, OehhDueAmt4, OehhDuePct4, OehhDiscDate5, OehhDiscPct5, OehhDueDate5, OehhDueAmt5, OehhDuePct5, OehhDiscDate6, OehhDiscPct6, OehhDueDate6, OehhDueAmt6, OehhDuePct6, DateUpdtd, TimeUpdtd, dummy FROM so_head_hist WHERE OehhNbr = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSoHeadHist $obj */
            $obj = new ChildSoHeadHist();
            $obj->hydrate($row);
            SoHeadHistTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSoHeadHist|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHNBR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OehhNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhnbr('fooValue');   // WHERE OehhNbr = 'fooValue'
     * $query->filterByOehhnbr('%fooValue%', Criteria::LIKE); // WHERE OehhNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhnbr($oehhnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHNBR, $oehhnbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhyear($oehhyear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhyear)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHYEAR, $oehhyear, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstat($oehhstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTAT, $oehhstat, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhhold($oehhhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHHOLD, $oehhhold, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstname($oehhstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTNAME, $oehhstname, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstlastname($oehhstlastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstlastname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTLASTNAME, $oehhstlastname, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstfirstname($oehhstfirstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstfirstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTFIRSTNAME, $oehhstfirstname, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstadr1($oehhstadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTADR1, $oehhstadr1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstadr2($oehhstadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTADR2, $oehhstadr2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstadr3($oehhstadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTADR3, $oehhstadr3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstctry($oehhstctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTCTRY, $oehhstctry, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstcity($oehhstcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTCITY, $oehhstcity, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhststat($oehhststat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhststat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTSTAT, $oehhststat, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstzipcode($oehhstzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTZIPCODE, $oehhstzipcode, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcustpo($oehhcustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCUSTPO, $oehhcustpo, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhordrdate($oehhordrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHORDRDATE, $oehhordrdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByArininvnbr($arininvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arininvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_ARININVNBR, $arininvnbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhinvdate($oehhinvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHINVDATE, $oehhinvdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhglpd($oehhglpd = null, $comparison = null)
    {
        if (is_array($oehhglpd)) {
            $useMinMax = false;
            if (isset($oehhglpd['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHGLPD, $oehhglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhglpd['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHGLPD, $oehhglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHGLPD, $oehhglpd, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhsp1pct($oehhsp1pct = null, $comparison = null)
    {
        if (is_array($oehhsp1pct)) {
            $useMinMax = false;
            if (isset($oehhsp1pct['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP1PCT, $oehhsp1pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhsp1pct['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP1PCT, $oehhsp1pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP1PCT, $oehhsp1pct, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhsp2pct($oehhsp2pct = null, $comparison = null)
    {
        if (is_array($oehhsp2pct)) {
            $useMinMax = false;
            if (isset($oehhsp2pct['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP2PCT, $oehhsp2pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhsp2pct['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP2PCT, $oehhsp2pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP2PCT, $oehhsp2pct, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhsp3pct($oehhsp3pct = null, $comparison = null)
    {
        if (is_array($oehhsp3pct)) {
            $useMinMax = false;
            if (isset($oehhsp3pct['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP3PCT, $oehhsp3pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhsp3pct['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP3PCT, $oehhsp3pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSP3PCT, $oehhsp3pct, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcntrnbr($oehhcntrnbr = null, $comparison = null)
    {
        if (is_array($oehhcntrnbr)) {
            $useMinMax = false;
            if (isset($oehhcntrnbr['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCNTRNBR, $oehhcntrnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcntrnbr['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCNTRNBR, $oehhcntrnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCNTRNBR, $oehhcntrnbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhwibatch($oehhwibatch = null, $comparison = null)
    {
        if (is_array($oehhwibatch)) {
            $useMinMax = false;
            if (isset($oehhwibatch['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHWIBATCH, $oehhwibatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhwibatch['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHWIBATCH, $oehhwibatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHWIBATCH, $oehhwibatch, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdroprelhold($oehhdroprelhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdroprelhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDROPRELHOLD, $oehhdroprelhold, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhtaxsub($oehhtaxsub = null, $comparison = null)
    {
        if (is_array($oehhtaxsub)) {
            $useMinMax = false;
            if (isset($oehhtaxsub['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAXSUB, $oehhtaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhtaxsub['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAXSUB, $oehhtaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAXSUB, $oehhtaxsub, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhnontaxsub($oehhnontaxsub = null, $comparison = null)
    {
        if (is_array($oehhnontaxsub)) {
            $useMinMax = false;
            if (isset($oehhnontaxsub['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHNONTAXSUB, $oehhnontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhnontaxsub['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHNONTAXSUB, $oehhnontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHNONTAXSUB, $oehhnontaxsub, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhtaxtot($oehhtaxtot = null, $comparison = null)
    {
        if (is_array($oehhtaxtot)) {
            $useMinMax = false;
            if (isset($oehhtaxtot['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAXTOT, $oehhtaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhtaxtot['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAXTOT, $oehhtaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAXTOT, $oehhtaxtot, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttot($oehhfrttot = null, $comparison = null)
    {
        if (is_array($oehhfrttot)) {
            $useMinMax = false;
            if (isset($oehhfrttot['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTOT, $oehhfrttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttot['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTOT, $oehhfrttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTOT, $oehhfrttot, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhmisctot($oehhmisctot = null, $comparison = null)
    {
        if (is_array($oehhmisctot)) {
            $useMinMax = false;
            if (isset($oehhmisctot['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHMISCTOT, $oehhmisctot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhmisctot['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHMISCTOT, $oehhmisctot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHMISCTOT, $oehhmisctot, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhordrtot($oehhordrtot = null, $comparison = null)
    {
        if (is_array($oehhordrtot)) {
            $useMinMax = false;
            if (isset($oehhordrtot['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHORDRTOT, $oehhordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhordrtot['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHORDRTOT, $oehhordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHORDRTOT, $oehhordrtot, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcosttot($oehhcosttot = null, $comparison = null)
    {
        if (is_array($oehhcosttot)) {
            $useMinMax = false;
            if (isset($oehhcosttot['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCOSTTOT, $oehhcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcosttot['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCOSTTOT, $oehhcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCOSTTOT, $oehhcosttot, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhspcommlock($oehhspcommlock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhspcommlock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSPCOMMLOCK, $oehhspcommlock, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhtakendate($oehhtakendate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakendate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAKENDATE, $oehhtakendate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhtakentime($oehhtakentime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakentime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAKENTIME, $oehhtakentime, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpickdate($oehhpickdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPICKDATE, $oehhpickdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpicktime($oehhpicktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpicktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPICKTIME, $oehhpicktime, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpackdate($oehhpackdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpackdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPACKDATE, $oehhpackdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpacktime($oehhpacktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpacktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPACKTIME, $oehhpacktime, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhverifydate($oehhverifydate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifydate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHVERIFYDATE, $oehhverifydate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhverifytime($oehhverifytime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifytime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHVERIFYTIME, $oehhverifytime, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcreditmemo($oehhcreditmemo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcreditmemo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCREDITMEMO, $oehhcreditmemo, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhbookedyn($oehhbookedyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbookedyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHBOOKEDYN, $oehhbookedyn, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByIntbwhseorig($intbwhseorig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseorig)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_INTBWHSEORIG, $intbwhseorig, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhbtstat($oehhbtstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbtstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHBTSTAT, $oehhbtstat, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhshipcomp($oehhshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSHIPCOMP, $oehhshipcomp, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcwoflag($oehhcwoflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcwoflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCWOFLAG, $oehhcwoflag, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdivision($oehhdivision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdivision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDIVISION, $oehhdivision, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhtakencode($oehhtakencode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtakencode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTAKENCODE, $oehhtakencode, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpickcode($oehhpickcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPICKCODE, $oehhpickcode, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpackcode($oehhpackcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpackcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPACKCODE, $oehhpackcode, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhverifycode($oehhverifycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhverifycode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHVERIFYCODE, $oehhverifycode, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhtotdisc($oehhtotdisc = null, $comparison = null)
    {
        if (is_array($oehhtotdisc)) {
            $useMinMax = false;
            if (isset($oehhtotdisc['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTOTDISC, $oehhtotdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhtotdisc['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTOTDISC, $oehhtotdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTOTDISC, $oehhtotdisc, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhedirefnbrqual($oehhedirefnbrqual = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhedirefnbrqual)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHEDIREFNBRQUAL, $oehhedirefnbrqual, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhusercode1($oehhusercode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHUSERCODE1, $oehhusercode1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhusercode2($oehhusercode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHUSERCODE2, $oehhusercode2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhusercode3($oehhusercode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHUSERCODE3, $oehhusercode3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhusercode4($oehhusercode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhusercode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHUSERCODE4, $oehhusercode4, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhexchctry($oehhexchctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHEXCHCTRY, $oehhexchctry, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhexchrate($oehhexchrate = null, $comparison = null)
    {
        if (is_array($oehhexchrate)) {
            $useMinMax = false;
            if (isset($oehhexchrate['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHEXCHRATE, $oehhexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhexchrate['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHEXCHRATE, $oehhexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHEXCHRATE, $oehhexchrate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhwghttot($oehhwghttot = null, $comparison = null)
    {
        if (is_array($oehhwghttot)) {
            $useMinMax = false;
            if (isset($oehhwghttot['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHWGHTTOT, $oehhwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhwghttot['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHWGHTTOT, $oehhwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHWGHTTOT, $oehhwghttot, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhwghtoride($oehhwghtoride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhwghtoride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHWGHTORIDE, $oehhwghtoride, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhccinfo($oehhccinfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhccinfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCCINFO, $oehhccinfo, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhboxcount($oehhboxcount = null, $comparison = null)
    {
        if (is_array($oehhboxcount)) {
            $useMinMax = false;
            if (isset($oehhboxcount['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHBOXCOUNT, $oehhboxcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhboxcount['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHBOXCOUNT, $oehhboxcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHBOXCOUNT, $oehhboxcount, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhrqstdate($oehhrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHRQSTDATE, $oehhrqstdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcancdate($oehhcancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCANCDATE, $oehhcancdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcrntuser($oehhcrntuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcrntuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCRNTUSER, $oehhcrntuser, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhreleasenbr($oehhreleasenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhreleasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHRELEASENBR, $oehhreleasenbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_INTBWHSE, $intbwhse, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhbordbuilddate($oehhbordbuilddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhbordbuilddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHBORDBUILDDATE, $oehhbordbuilddate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdeptcode($oehhdeptcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdeptcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDEPTCODE, $oehhdeptcode, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrtinentered($oehhfrtinentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTINENTERED, $oehhfrtinentered, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdropshipentered($oehhdropshipentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdropshipentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDROPSHIPENTERED, $oehhdropshipentered, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehherflag($oehherflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehherflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHERFLAG, $oehherflag, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrtin($oehhfrtin = null, $comparison = null)
    {
        if (is_array($oehhfrtin)) {
            $useMinMax = false;
            if (isset($oehhfrtin['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTIN, $oehhfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrtin['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTIN, $oehhfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTIN, $oehhfrtin, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdropship($oehhdropship = null, $comparison = null)
    {
        if (is_array($oehhdropship)) {
            $useMinMax = false;
            if (isset($oehhdropship['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDROPSHIP, $oehhdropship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdropship['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDROPSHIP, $oehhdropship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDROPSHIP, $oehhdropship, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhminorder($oehhminorder = null, $comparison = null)
    {
        if (is_array($oehhminorder)) {
            $useMinMax = false;
            if (isset($oehhminorder['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHMINORDER, $oehhminorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhminorder['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHMINORDER, $oehhminorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHMINORDER, $oehhminorder, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcontractterms($oehhcontractterms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontractterms)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONTRACTTERMS, $oehhcontractterms, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdropshipbilled($oehhdropshipbilled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdropshipbilled)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDROPSHIPBILLED, $oehhdropshipbilled, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhordtyp($oehhordtyp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhordtyp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHORDTYP, $oehhordtyp, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhtracknbr($oehhtracknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHTRACKNBR, $oehhtracknbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhsource($oehhsource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhsource)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSOURCE, $oehhsource, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhccaprv($oehhccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCCAPRV, $oehhccaprv, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpickfmattype($oehhpickfmattype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPICKFMATTYPE, $oehhpickfmattype, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhinvcfmattype($oehhinvcfmattype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHINVCFMATTYPE, $oehhinvcfmattype, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcashamt($oehhcashamt = null, $comparison = null)
    {
        if (is_array($oehhcashamt)) {
            $useMinMax = false;
            if (isset($oehhcashamt['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCASHAMT, $oehhcashamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcashamt['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCASHAMT, $oehhcashamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCASHAMT, $oehhcashamt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcheckamt($oehhcheckamt = null, $comparison = null)
    {
        if (is_array($oehhcheckamt)) {
            $useMinMax = false;
            if (isset($oehhcheckamt['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCHECKAMT, $oehhcheckamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcheckamt['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCHECKAMT, $oehhcheckamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCHECKAMT, $oehhcheckamt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhchecknbr($oehhchecknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhchecknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCHECKNBR, $oehhchecknbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdepositamt($oehhdepositamt = null, $comparison = null)
    {
        if (is_array($oehhdepositamt)) {
            $useMinMax = false;
            if (isset($oehhdepositamt['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDEPOSITAMT, $oehhdepositamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdepositamt['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDEPOSITAMT, $oehhdepositamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDEPOSITAMT, $oehhdepositamt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdepositnbr($oehhdepositnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdepositnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDEPOSITNBR, $oehhdepositnbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhccamt($oehhccamt = null, $comparison = null)
    {
        if (is_array($oehhccamt)) {
            $useMinMax = false;
            if (isset($oehhccamt['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCCAMT, $oehhccamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhccamt['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCCAMT, $oehhccamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCCAMT, $oehhccamt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhotaxsub($oehhotaxsub = null, $comparison = null)
    {
        if (is_array($oehhotaxsub)) {
            $useMinMax = false;
            if (isset($oehhotaxsub['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOTAXSUB, $oehhotaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhotaxsub['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOTAXSUB, $oehhotaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOTAXSUB, $oehhotaxsub, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhonontaxsub($oehhonontaxsub = null, $comparison = null)
    {
        if (is_array($oehhonontaxsub)) {
            $useMinMax = false;
            if (isset($oehhonontaxsub['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHONONTAXSUB, $oehhonontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhonontaxsub['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHONONTAXSUB, $oehhonontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHONONTAXSUB, $oehhonontaxsub, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhotaxtot($oehhotaxtot = null, $comparison = null)
    {
        if (is_array($oehhotaxtot)) {
            $useMinMax = false;
            if (isset($oehhotaxtot['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOTAXTOT, $oehhotaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhotaxtot['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOTAXTOT, $oehhotaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOTAXTOT, $oehhotaxtot, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhoordrtot($oehhoordrtot = null, $comparison = null)
    {
        if (is_array($oehhoordrtot)) {
            $useMinMax = false;
            if (isset($oehhoordrtot['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOORDRTOT, $oehhoordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhoordrtot['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOORDRTOT, $oehhoordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHOORDRTOT, $oehhoordrtot, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpickprintdate($oehhpickprintdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPICKPRINTDATE, $oehhpickprintdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpickprinttime($oehhpickprinttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPICKPRINTTIME, $oehhpickprinttime, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcont($oehhcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONT, $oehhcont, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcontteleintl($oehhcontteleintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontteleintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONTTELEINTL, $oehhcontteleintl, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhconttelenbr($oehhconttelenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhconttelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONTTELENBR, $oehhconttelenbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcontteleext($oehhcontteleext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontteleext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONTTELEEXT, $oehhcontteleext, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcontfaxintl($oehhcontfaxintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontfaxintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONTFAXINTL, $oehhcontfaxintl, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcontfaxnbr($oehhcontfaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONTFAXNBR, $oehhcontfaxnbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhshipacct($oehhshipacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhshipacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSHIPACCT, $oehhshipacct, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhchgdue($oehhchgdue = null, $comparison = null)
    {
        if (is_array($oehhchgdue)) {
            $useMinMax = false;
            if (isset($oehhchgdue['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCHGDUE, $oehhchgdue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhchgdue['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCHGDUE, $oehhchgdue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCHGDUE, $oehhchgdue, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhaddlpricdisc($oehhaddlpricdisc = null, $comparison = null)
    {
        if (is_array($oehhaddlpricdisc)) {
            $useMinMax = false;
            if (isset($oehhaddlpricdisc['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHADDLPRICDISC, $oehhaddlpricdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhaddlpricdisc['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHADDLPRICDISC, $oehhaddlpricdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHADDLPRICDISC, $oehhaddlpricdisc, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhallship($oehhallship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhallship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHALLSHIP, $oehhallship, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhqtyorderamt($oehhqtyorderamt = null, $comparison = null)
    {
        if (is_array($oehhqtyorderamt)) {
            $useMinMax = false;
            if (isset($oehhqtyorderamt['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHQTYORDERAMT, $oehhqtyorderamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhqtyorderamt['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHQTYORDERAMT, $oehhqtyorderamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHQTYORDERAMT, $oehhqtyorderamt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcreditapplied($oehhcreditapplied = null, $comparison = null)
    {
        if (is_array($oehhcreditapplied)) {
            $useMinMax = false;
            if (isset($oehhcreditapplied['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCREDITAPPLIED, $oehhcreditapplied['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhcreditapplied['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCREDITAPPLIED, $oehhcreditapplied['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCREDITAPPLIED, $oehhcreditapplied, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhinvcprintdate($oehhinvcprintdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHINVCPRINTDATE, $oehhinvcprintdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhinvcprinttime($oehhinvcprinttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinvcprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHINVCPRINTTIME, $oehhinvcprinttime, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscfrt($oehhdiscfrt = null, $comparison = null)
    {
        if (is_array($oehhdiscfrt)) {
            $useMinMax = false;
            if (isset($oehhdiscfrt['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCFRT, $oehhdiscfrt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscfrt['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCFRT, $oehhdiscfrt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCFRT, $oehhdiscfrt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhorideshipcomp($oehhorideshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhorideshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHORIDESHIPCOMP, $oehhorideshipcomp, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcontemail($oehhcontemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcontemail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONTEMAIL, $oehhcontemail, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhmanualfrt($oehhmanualfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhmanualfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHMANUALFRT, $oehhmanualfrt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhinternalfrt($oehhinternalfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhinternalfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHINTERNALFRT, $oehhinternalfrt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrtcost($oehhfrtcost = null, $comparison = null)
    {
        if (is_array($oehhfrtcost)) {
            $useMinMax = false;
            if (isset($oehhfrtcost['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTCOST, $oehhfrtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrtcost['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTCOST, $oehhfrtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTCOST, $oehhfrtcost, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhroute($oehhroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHROUTE, $oehhroute, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhrouteseq($oehhrouteseq = null, $comparison = null)
    {
        if (is_array($oehhrouteseq)) {
            $useMinMax = false;
            if (isset($oehhrouteseq['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHROUTESEQ, $oehhrouteseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhrouteseq['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHROUTESEQ, $oehhrouteseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHROUTESEQ, $oehhrouteseq, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode1($oehhfrttaxcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXCODE1, $oehhfrttaxcode1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt1($oehhfrttaxamt1 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt1)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt1['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT1, $oehhfrttaxamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt1['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT1, $oehhfrttaxamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT1, $oehhfrttaxamt1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode2($oehhfrttaxcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXCODE2, $oehhfrttaxcode2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt2($oehhfrttaxamt2 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt2)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt2['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT2, $oehhfrttaxamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt2['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT2, $oehhfrttaxamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT2, $oehhfrttaxamt2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode3($oehhfrttaxcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXCODE3, $oehhfrttaxcode3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt3($oehhfrttaxamt3 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt3)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt3['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT3, $oehhfrttaxamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt3['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT3, $oehhfrttaxamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT3, $oehhfrttaxamt3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode4($oehhfrttaxcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXCODE4, $oehhfrttaxcode4, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt4($oehhfrttaxamt4 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt4)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt4['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT4, $oehhfrttaxamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt4['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT4, $oehhfrttaxamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT4, $oehhfrttaxamt4, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxcode5($oehhfrttaxcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrttaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXCODE5, $oehhfrttaxcode5, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrttaxamt5($oehhfrttaxamt5 = null, $comparison = null)
    {
        if (is_array($oehhfrttaxamt5)) {
            $useMinMax = false;
            if (isset($oehhfrttaxamt5['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT5, $oehhfrttaxamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrttaxamt5['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT5, $oehhfrttaxamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTTAXAMT5, $oehhfrttaxamt5, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhedi855sent($oehhedi855sent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhedi855sent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHEDI855SENT, $oehhedi855sent, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrt3rdparty($oehhfrt3rdparty = null, $comparison = null)
    {
        if (is_array($oehhfrt3rdparty)) {
            $useMinMax = false;
            if (isset($oehhfrt3rdparty['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRT3RDPARTY, $oehhfrt3rdparty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhfrt3rdparty['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRT3RDPARTY, $oehhfrt3rdparty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRT3RDPARTY, $oehhfrt3rdparty, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfob($oehhfob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFOB, $oehhfob, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhconfirmimagyn($oehhconfirmimagyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhconfirmimagyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCONFIRMIMAGYN, $oehhconfirmimagyn, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhindustconform($oehhindustconform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhindustconform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHINDUSTCONFORM, $oehhindustconform, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcstkconsign($oehhcstkconsign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcstkconsign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCSTKCONSIGN, $oehhcstkconsign, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhlmdelaycapsent($oehhlmdelaycapsent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhlmdelaycapsent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHLMDELAYCAPSENT, $oehhlmdelaycapsent, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhmfgid($oehhmfgid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhmfgid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHMFGID, $oehhmfgid, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhstoreid($oehhstoreid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhstoreid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSTOREID, $oehhstoreid, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpickqueue($oehhpickqueue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpickqueue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPICKQUEUE, $oehhpickqueue, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehharrvdate($oehharrvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehharrvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHARRVDATE, $oehharrvdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhsurchgstat($oehhsurchgstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhsurchgstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHSURCHGSTAT, $oehhsurchgstat, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhfrtgrup($oehhfrtgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhfrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHFRTGRUP, $oehhfrtgrup, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhcommoride($oehhcommoride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhcommoride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCOMMORIDE, $oehhcommoride, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhchrgsplt($oehhchrgsplt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhchrgsplt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHCHRGSPLT, $oehhchrgsplt, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhacccaprv($oehhacccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhacccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHACCCAPRV, $oehhacccaprv, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhorigordrnbr($oehhorigordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhorigordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHORIGORDRNBR, $oehhorigordrnbr, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhpostdate($oehhpostdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhpostdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHPOSTDATE, $oehhpostdate, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate1($oehhdiscdate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCDATE1, $oehhdiscdate1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct1($oehhdiscpct1 = null, $comparison = null)
    {
        if (is_array($oehhdiscpct1)) {
            $useMinMax = false;
            if (isset($oehhdiscpct1['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT1, $oehhdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct1['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT1, $oehhdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT1, $oehhdiscpct1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduedate1($oehhduedate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEDATE1, $oehhduedate1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt1($oehhdueamt1 = null, $comparison = null)
    {
        if (is_array($oehhdueamt1)) {
            $useMinMax = false;
            if (isset($oehhdueamt1['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT1, $oehhdueamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt1['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT1, $oehhdueamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT1, $oehhdueamt1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduepct1($oehhduepct1 = null, $comparison = null)
    {
        if (is_array($oehhduepct1)) {
            $useMinMax = false;
            if (isset($oehhduepct1['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT1, $oehhduepct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct1['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT1, $oehhduepct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT1, $oehhduepct1, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate2($oehhdiscdate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCDATE2, $oehhdiscdate2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct2($oehhdiscpct2 = null, $comparison = null)
    {
        if (is_array($oehhdiscpct2)) {
            $useMinMax = false;
            if (isset($oehhdiscpct2['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT2, $oehhdiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct2['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT2, $oehhdiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT2, $oehhdiscpct2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduedate2($oehhduedate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEDATE2, $oehhduedate2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt2($oehhdueamt2 = null, $comparison = null)
    {
        if (is_array($oehhdueamt2)) {
            $useMinMax = false;
            if (isset($oehhdueamt2['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT2, $oehhdueamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt2['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT2, $oehhdueamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT2, $oehhdueamt2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduepct2($oehhduepct2 = null, $comparison = null)
    {
        if (is_array($oehhduepct2)) {
            $useMinMax = false;
            if (isset($oehhduepct2['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT2, $oehhduepct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct2['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT2, $oehhduepct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT2, $oehhduepct2, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate3($oehhdiscdate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCDATE3, $oehhdiscdate3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct3($oehhdiscpct3 = null, $comparison = null)
    {
        if (is_array($oehhdiscpct3)) {
            $useMinMax = false;
            if (isset($oehhdiscpct3['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT3, $oehhdiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct3['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT3, $oehhdiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT3, $oehhdiscpct3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduedate3($oehhduedate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEDATE3, $oehhduedate3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt3($oehhdueamt3 = null, $comparison = null)
    {
        if (is_array($oehhdueamt3)) {
            $useMinMax = false;
            if (isset($oehhdueamt3['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT3, $oehhdueamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt3['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT3, $oehhdueamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT3, $oehhdueamt3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduepct3($oehhduepct3 = null, $comparison = null)
    {
        if (is_array($oehhduepct3)) {
            $useMinMax = false;
            if (isset($oehhduepct3['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT3, $oehhduepct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct3['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT3, $oehhduepct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT3, $oehhduepct3, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate4($oehhdiscdate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCDATE4, $oehhdiscdate4, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct4($oehhdiscpct4 = null, $comparison = null)
    {
        if (is_array($oehhdiscpct4)) {
            $useMinMax = false;
            if (isset($oehhdiscpct4['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT4, $oehhdiscpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct4['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT4, $oehhdiscpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT4, $oehhdiscpct4, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduedate4($oehhduedate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEDATE4, $oehhduedate4, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt4($oehhdueamt4 = null, $comparison = null)
    {
        if (is_array($oehhdueamt4)) {
            $useMinMax = false;
            if (isset($oehhdueamt4['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT4, $oehhdueamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt4['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT4, $oehhdueamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT4, $oehhdueamt4, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduepct4($oehhduepct4 = null, $comparison = null)
    {
        if (is_array($oehhduepct4)) {
            $useMinMax = false;
            if (isset($oehhduepct4['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT4, $oehhduepct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct4['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT4, $oehhduepct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT4, $oehhduepct4, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate5($oehhdiscdate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCDATE5, $oehhdiscdate5, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct5($oehhdiscpct5 = null, $comparison = null)
    {
        if (is_array($oehhdiscpct5)) {
            $useMinMax = false;
            if (isset($oehhdiscpct5['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT5, $oehhdiscpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct5['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT5, $oehhdiscpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT5, $oehhdiscpct5, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduedate5($oehhduedate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEDATE5, $oehhduedate5, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt5($oehhdueamt5 = null, $comparison = null)
    {
        if (is_array($oehhdueamt5)) {
            $useMinMax = false;
            if (isset($oehhdueamt5['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT5, $oehhdueamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt5['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT5, $oehhdueamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT5, $oehhdueamt5, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduepct5($oehhduepct5 = null, $comparison = null)
    {
        if (is_array($oehhduepct5)) {
            $useMinMax = false;
            if (isset($oehhduepct5['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT5, $oehhduepct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct5['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT5, $oehhduepct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT5, $oehhduepct5, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscdate6($oehhdiscdate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhdiscdate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCDATE6, $oehhdiscdate6, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdiscpct6($oehhdiscpct6 = null, $comparison = null)
    {
        if (is_array($oehhdiscpct6)) {
            $useMinMax = false;
            if (isset($oehhdiscpct6['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT6, $oehhdiscpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdiscpct6['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT6, $oehhdiscpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDISCPCT6, $oehhdiscpct6, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduedate6($oehhduedate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhduedate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEDATE6, $oehhduedate6, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhdueamt6($oehhdueamt6 = null, $comparison = null)
    {
        if (is_array($oehhdueamt6)) {
            $useMinMax = false;
            if (isset($oehhdueamt6['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT6, $oehhdueamt6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhdueamt6['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT6, $oehhdueamt6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEAMT6, $oehhdueamt6, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByOehhduepct6($oehhduepct6 = null, $comparison = null)
    {
        if (is_array($oehhduepct6)) {
            $useMinMax = false;
            if (isset($oehhduepct6['min'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT6, $oehhduepct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhduepct6['max'])) {
                $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT6, $oehhduepct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHDUEPCT6, $oehhduepct6, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeadHistTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSoHeadHist $soHeadHist Object to remove from the list of results
     *
     * @return $this|ChildSoHeadHistQuery The current query, for fluid interface
     */
    public function prune($soHeadHist = null)
    {
        if ($soHeadHist) {
            $this->addUsingAlias(SoHeadHistTableMap::COL_OEHHNBR, $soHeadHist->getOehhnbr(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeadHistTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoHeadHistTableMap::clearInstancePool();
            SoHeadHistTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeadHistTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoHeadHistTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoHeadHistTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoHeadHistTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SoHeadHistQuery
