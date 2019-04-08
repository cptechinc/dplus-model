<?php

namespace Base;

use \SoHeader as ChildSoHeader;
use \SoHeaderQuery as ChildSoHeaderQuery;
use \Exception;
use \PDO;
use Map\SoHeaderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_header' table.
 *
 *
 *
 * @method     ChildSoHeaderQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildSoHeaderQuery orderByOehdstat($order = Criteria::ASC) Order by the OehdStat column
 * @method     ChildSoHeaderQuery orderByOehdhold($order = Criteria::ASC) Order by the OehdHold column
 * @method     ChildSoHeaderQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildSoHeaderQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildSoHeaderQuery orderByOehdstname($order = Criteria::ASC) Order by the OehdStName column
 * @method     ChildSoHeaderQuery orderByOehdstlastname($order = Criteria::ASC) Order by the OehdStLastName column
 * @method     ChildSoHeaderQuery orderByOehdstfirstname($order = Criteria::ASC) Order by the OehdStFirstName column
 * @method     ChildSoHeaderQuery orderByOehdstadr1($order = Criteria::ASC) Order by the OehdStAdr1 column
 * @method     ChildSoHeaderQuery orderByOehdstadr2($order = Criteria::ASC) Order by the OehdStAdr2 column
 * @method     ChildSoHeaderQuery orderByOehdstadr3($order = Criteria::ASC) Order by the OehdStAdr3 column
 * @method     ChildSoHeaderQuery orderByOehdstctry($order = Criteria::ASC) Order by the OehdStCtry column
 * @method     ChildSoHeaderQuery orderByOehdstcity($order = Criteria::ASC) Order by the OehdStCity column
 * @method     ChildSoHeaderQuery orderByOehdststat($order = Criteria::ASC) Order by the OehdStStat column
 * @method     ChildSoHeaderQuery orderByOehdstzipcode($order = Criteria::ASC) Order by the OehdStZipCode column
 * @method     ChildSoHeaderQuery orderByOehdcustpo($order = Criteria::ASC) Order by the OehdCustPo column
 * @method     ChildSoHeaderQuery orderByOehdordrdate($order = Criteria::ASC) Order by the OehdOrdrDate column
 * @method     ChildSoHeaderQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildSoHeaderQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildSoHeaderQuery orderByArininvnbr($order = Criteria::ASC) Order by the ArinInvNbr column
 * @method     ChildSoHeaderQuery orderByOehdinvdate($order = Criteria::ASC) Order by the OehdInvDate column
 * @method     ChildSoHeaderQuery orderByOehdglpd($order = Criteria::ASC) Order by the OehdGLPd column
 * @method     ChildSoHeaderQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildSoHeaderQuery orderByOehdsp1pct($order = Criteria::ASC) Order by the OehdSp1Pct column
 * @method     ChildSoHeaderQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildSoHeaderQuery orderByOehdsp2pct($order = Criteria::ASC) Order by the OehdSp2Pct column
 * @method     ChildSoHeaderQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildSoHeaderQuery orderByOehdsp3pct($order = Criteria::ASC) Order by the OehdSp3Pct column
 * @method     ChildSoHeaderQuery orderByOehdcntrnbr($order = Criteria::ASC) Order by the OehdCntrNbr column
 * @method     ChildSoHeaderQuery orderByOehdwibatch($order = Criteria::ASC) Order by the OehdWiBatch column
 * @method     ChildSoHeaderQuery orderByOehddroprelhold($order = Criteria::ASC) Order by the OehdDropRelHold column
 * @method     ChildSoHeaderQuery orderByOehdtaxsub($order = Criteria::ASC) Order by the OehdTaxSub column
 * @method     ChildSoHeaderQuery orderByOehdnontaxsub($order = Criteria::ASC) Order by the OehdNonTaxSub column
 * @method     ChildSoHeaderQuery orderByOehdtaxtot($order = Criteria::ASC) Order by the OehdTaxTot column
 * @method     ChildSoHeaderQuery orderByOehdfrttot($order = Criteria::ASC) Order by the OehdFrtTot column
 * @method     ChildSoHeaderQuery orderByOehdmisctot($order = Criteria::ASC) Order by the OehdMiscTot column
 * @method     ChildSoHeaderQuery orderByOehdordrtot($order = Criteria::ASC) Order by the OehdOrdrTot column
 * @method     ChildSoHeaderQuery orderByOehdcosttot($order = Criteria::ASC) Order by the OehdCostTot column
 * @method     ChildSoHeaderQuery orderByOehdspcommlock($order = Criteria::ASC) Order by the OehdSpCommLock column
 * @method     ChildSoHeaderQuery orderByOehdtakendate($order = Criteria::ASC) Order by the OehdTakenDate column
 * @method     ChildSoHeaderQuery orderByOehdtakentime($order = Criteria::ASC) Order by the OehdTakenTime column
 * @method     ChildSoHeaderQuery orderByOehdpickdate($order = Criteria::ASC) Order by the OehdPickDate column
 * @method     ChildSoHeaderQuery orderByOehdpicktime($order = Criteria::ASC) Order by the OehdPickTime column
 * @method     ChildSoHeaderQuery orderByOehdpackdate($order = Criteria::ASC) Order by the OehdPackDate column
 * @method     ChildSoHeaderQuery orderByOehdpacktime($order = Criteria::ASC) Order by the OehdPackTime column
 * @method     ChildSoHeaderQuery orderByOehdverifydate($order = Criteria::ASC) Order by the OehdVerifyDate column
 * @method     ChildSoHeaderQuery orderByOehdverifytime($order = Criteria::ASC) Order by the OehdVerifyTime column
 * @method     ChildSoHeaderQuery orderByOehdcreditmemo($order = Criteria::ASC) Order by the OehdCreditMemo column
 * @method     ChildSoHeaderQuery orderByOehdbookedyn($order = Criteria::ASC) Order by the OehdBookedYn column
 * @method     ChildSoHeaderQuery orderByIntbwhseorig($order = Criteria::ASC) Order by the IntbWhseOrig column
 * @method     ChildSoHeaderQuery orderByOehdbtstat($order = Criteria::ASC) Order by the OehdBtStat column
 * @method     ChildSoHeaderQuery orderByOehdshipcomp($order = Criteria::ASC) Order by the OehdShipComp column
 * @method     ChildSoHeaderQuery orderByOehdcwoflag($order = Criteria::ASC) Order by the OehdCwoFlag column
 * @method     ChildSoHeaderQuery orderByOehddivision($order = Criteria::ASC) Order by the OehdDivision column
 * @method     ChildSoHeaderQuery orderByOehdtakencode($order = Criteria::ASC) Order by the OehdTakenCode column
 * @method     ChildSoHeaderQuery orderByOehdpickcode($order = Criteria::ASC) Order by the OehdPickCode column
 * @method     ChildSoHeaderQuery orderByOehdpackcode($order = Criteria::ASC) Order by the OehdPackCode column
 * @method     ChildSoHeaderQuery orderByOehdverifycode($order = Criteria::ASC) Order by the OehdVerifyCode column
 * @method     ChildSoHeaderQuery orderByOehdtotdisc($order = Criteria::ASC) Order by the OehdTotDisc column
 * @method     ChildSoHeaderQuery orderByOehdedirefnbrqual($order = Criteria::ASC) Order by the OehdEdiRefNbrQual column
 * @method     ChildSoHeaderQuery orderByOehdusercode1($order = Criteria::ASC) Order by the OehdUserCode1 column
 * @method     ChildSoHeaderQuery orderByOehdusercode2($order = Criteria::ASC) Order by the OehdUserCode2 column
 * @method     ChildSoHeaderQuery orderByOehdusercode3($order = Criteria::ASC) Order by the OehdUserCode3 column
 * @method     ChildSoHeaderQuery orderByOehdusercode4($order = Criteria::ASC) Order by the OehdUserCode4 column
 * @method     ChildSoHeaderQuery orderByOehdexchctry($order = Criteria::ASC) Order by the OehdExchCtry column
 * @method     ChildSoHeaderQuery orderByOehdexchrate($order = Criteria::ASC) Order by the OehdExchRate column
 * @method     ChildSoHeaderQuery orderByOehdwghttot($order = Criteria::ASC) Order by the OehdWghtTot column
 * @method     ChildSoHeaderQuery orderByOehdwghtoride($order = Criteria::ASC) Order by the OehdWghtOride column
 * @method     ChildSoHeaderQuery orderByOehdccinfo($order = Criteria::ASC) Order by the OehdCcInfo column
 * @method     ChildSoHeaderQuery orderByOehdboxcount($order = Criteria::ASC) Order by the OehdBoxCount column
 * @method     ChildSoHeaderQuery orderByOehdrqstdate($order = Criteria::ASC) Order by the OehdRqstDate column
 * @method     ChildSoHeaderQuery orderByOehdcancdate($order = Criteria::ASC) Order by the OehdCancDate column
 * @method     ChildSoHeaderQuery orderByOehdcrntuser($order = Criteria::ASC) Order by the OehdCrntUser column
 * @method     ChildSoHeaderQuery orderByOehdreleasenbr($order = Criteria::ASC) Order by the OehdReleaseNbr column
 * @method     ChildSoHeaderQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildSoHeaderQuery orderByOehdbordbuilddate($order = Criteria::ASC) Order by the OehdBordBuildDate column
 * @method     ChildSoHeaderQuery orderByOehddeptcode($order = Criteria::ASC) Order by the OehdDeptCode column
 * @method     ChildSoHeaderQuery orderByOehdfrtinentered($order = Criteria::ASC) Order by the OehdFrtInEntered column
 * @method     ChildSoHeaderQuery orderByOehddropshipentered($order = Criteria::ASC) Order by the OehdDropShipEntered column
 * @method     ChildSoHeaderQuery orderByOehderflag($order = Criteria::ASC) Order by the OehdErFlag column
 * @method     ChildSoHeaderQuery orderByOehdfrtin($order = Criteria::ASC) Order by the OehdFrtIn column
 * @method     ChildSoHeaderQuery orderByOehddropship($order = Criteria::ASC) Order by the OehdDropShip column
 * @method     ChildSoHeaderQuery orderByOehdminorder($order = Criteria::ASC) Order by the OehdMinOrder column
 * @method     ChildSoHeaderQuery orderByOehdcontractterms($order = Criteria::ASC) Order by the OehdContractTerms column
 * @method     ChildSoHeaderQuery orderByOehddropshipbilled($order = Criteria::ASC) Order by the OehdDropShipBilled column
 * @method     ChildSoHeaderQuery orderByOehdordtyp($order = Criteria::ASC) Order by the OehdOrdTyp column
 * @method     ChildSoHeaderQuery orderByOehdtracknbr($order = Criteria::ASC) Order by the OehdTrackNbr column
 * @method     ChildSoHeaderQuery orderByOehdsource($order = Criteria::ASC) Order by the OehdSource column
 * @method     ChildSoHeaderQuery orderByOehdccaprv($order = Criteria::ASC) Order by the OehdCcAprv column
 * @method     ChildSoHeaderQuery orderByOehdpickfmattype($order = Criteria::ASC) Order by the OehdPickFmatType column
 * @method     ChildSoHeaderQuery orderByOehdinvcfmattype($order = Criteria::ASC) Order by the OehdInvcFmatType column
 * @method     ChildSoHeaderQuery orderByOehdcashamt($order = Criteria::ASC) Order by the OehdCashAmt column
 * @method     ChildSoHeaderQuery orderByOehdcheckamt($order = Criteria::ASC) Order by the OehdCheckAmt column
 * @method     ChildSoHeaderQuery orderByOehdchecknbr($order = Criteria::ASC) Order by the OehdCheckNbr column
 * @method     ChildSoHeaderQuery orderByOehddepositamt($order = Criteria::ASC) Order by the OehdDepositAmt column
 * @method     ChildSoHeaderQuery orderByOehddepositnbr($order = Criteria::ASC) Order by the OehdDepositNbr column
 * @method     ChildSoHeaderQuery orderByOehdccamt($order = Criteria::ASC) Order by the OehdCcAmt column
 * @method     ChildSoHeaderQuery orderByOehdotaxsub($order = Criteria::ASC) Order by the OehdOTaxSub column
 * @method     ChildSoHeaderQuery orderByOehdonontaxsub($order = Criteria::ASC) Order by the OehdONonTaxSub column
 * @method     ChildSoHeaderQuery orderByOehdotaxtot($order = Criteria::ASC) Order by the OehdOTaxTot column
 * @method     ChildSoHeaderQuery orderByOehdoordrtot($order = Criteria::ASC) Order by the OehdOOrdrTot column
 * @method     ChildSoHeaderQuery orderByOehdpickprintdate($order = Criteria::ASC) Order by the OehdPickPrintDate column
 * @method     ChildSoHeaderQuery orderByOehdpickprinttime($order = Criteria::ASC) Order by the OehdPickPrintTime column
 * @method     ChildSoHeaderQuery orderByOehdcont($order = Criteria::ASC) Order by the OehdCont column
 * @method     ChildSoHeaderQuery orderByOehdcontteleintl($order = Criteria::ASC) Order by the OehdContTeleIntl column
 * @method     ChildSoHeaderQuery orderByOehdconttelenbr($order = Criteria::ASC) Order by the OehdContTeleNbr column
 * @method     ChildSoHeaderQuery orderByOehdcontteleext($order = Criteria::ASC) Order by the OehdContTeleExt column
 * @method     ChildSoHeaderQuery orderByOehdcontfaxintl($order = Criteria::ASC) Order by the OehdContFaxIntl column
 * @method     ChildSoHeaderQuery orderByOehdcontfaxnbr($order = Criteria::ASC) Order by the OehdContFaxNbr column
 * @method     ChildSoHeaderQuery orderByOehdshipacct($order = Criteria::ASC) Order by the OehdShipAcct column
 * @method     ChildSoHeaderQuery orderByOehdchgdue($order = Criteria::ASC) Order by the OehdChgDue column
 * @method     ChildSoHeaderQuery orderByOehdaddlpricdisc($order = Criteria::ASC) Order by the OehdAddlPricDisc column
 * @method     ChildSoHeaderQuery orderByOehdallship($order = Criteria::ASC) Order by the OehdAllShip column
 * @method     ChildSoHeaderQuery orderByOehdqtyorderamt($order = Criteria::ASC) Order by the OehdQtyOrderAmt column
 * @method     ChildSoHeaderQuery orderByOehdcreditapplied($order = Criteria::ASC) Order by the OehdCreditApplied column
 * @method     ChildSoHeaderQuery orderByOehdinvcprintdate($order = Criteria::ASC) Order by the OehdInvcPrintDate column
 * @method     ChildSoHeaderQuery orderByOehdinvcprinttime($order = Criteria::ASC) Order by the OehdInvcPrintTime column
 * @method     ChildSoHeaderQuery orderByOehddiscfrt($order = Criteria::ASC) Order by the OehdDiscFrt column
 * @method     ChildSoHeaderQuery orderByOehdorideshipcomp($order = Criteria::ASC) Order by the OehdOrideShipComp column
 * @method     ChildSoHeaderQuery orderByOehdcontemail($order = Criteria::ASC) Order by the OehdContEmail column
 * @method     ChildSoHeaderQuery orderByOehdmanualfrt($order = Criteria::ASC) Order by the OehdManualFrt column
 * @method     ChildSoHeaderQuery orderByOehdinternalfrt($order = Criteria::ASC) Order by the OehdInternalFrt column
 * @method     ChildSoHeaderQuery orderByOehdfrtcost($order = Criteria::ASC) Order by the OehdFrtCost column
 * @method     ChildSoHeaderQuery orderByOehdroute($order = Criteria::ASC) Order by the OehdRoute column
 * @method     ChildSoHeaderQuery orderByOehdrouteseq($order = Criteria::ASC) Order by the OehdRouteSeq column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxcode1($order = Criteria::ASC) Order by the OehdFrtTaxCode1 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxamt1($order = Criteria::ASC) Order by the OehdFrtTaxAmt1 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxcode2($order = Criteria::ASC) Order by the OehdFrtTaxCode2 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxamt2($order = Criteria::ASC) Order by the OehdFrtTaxAmt2 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxcode3($order = Criteria::ASC) Order by the OehdFrtTaxCode3 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxamt3($order = Criteria::ASC) Order by the OehdFrtTaxAmt3 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxcode4($order = Criteria::ASC) Order by the OehdFrtTaxCode4 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxamt4($order = Criteria::ASC) Order by the OehdFrtTaxAmt4 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxcode5($order = Criteria::ASC) Order by the OehdFrtTaxCode5 column
 * @method     ChildSoHeaderQuery orderByOehdfrttaxamt5($order = Criteria::ASC) Order by the OehdFrtTaxAmt5 column
 * @method     ChildSoHeaderQuery orderByOehdedi855sent($order = Criteria::ASC) Order by the OehdEdi855Sent column
 * @method     ChildSoHeaderQuery orderByOehdfrt3rdparty($order = Criteria::ASC) Order by the OehdFrt3rdParty column
 * @method     ChildSoHeaderQuery orderByOehdfob($order = Criteria::ASC) Order by the OehdFob column
 * @method     ChildSoHeaderQuery orderByOehdconfirmimagyn($order = Criteria::ASC) Order by the OehdConfirmImagYn column
 * @method     ChildSoHeaderQuery orderByOehdindustconform($order = Criteria::ASC) Order by the OehdIndustConform column
 * @method     ChildSoHeaderQuery orderByOehdcstkconsign($order = Criteria::ASC) Order by the OehdCstkConsign column
 * @method     ChildSoHeaderQuery orderByOehdlmdelaycapsent($order = Criteria::ASC) Order by the OehdLmDelayCapSent column
 * @method     ChildSoHeaderQuery orderByOehdmfgid($order = Criteria::ASC) Order by the OehdMfgId column
 * @method     ChildSoHeaderQuery orderByOehdstoreid($order = Criteria::ASC) Order by the OehdStoreId column
 * @method     ChildSoHeaderQuery orderByOehdpickqueue($order = Criteria::ASC) Order by the OehdPickQueue column
 * @method     ChildSoHeaderQuery orderByOehdarrvdate($order = Criteria::ASC) Order by the OehdArrvDate column
 * @method     ChildSoHeaderQuery orderByOehdsurchgstat($order = Criteria::ASC) Order by the OehdSurchgStat column
 * @method     ChildSoHeaderQuery orderByOehdfrtgrup($order = Criteria::ASC) Order by the OehdFrtGrup column
 * @method     ChildSoHeaderQuery orderByOehdcommoride($order = Criteria::ASC) Order by the OehdCommOride column
 * @method     ChildSoHeaderQuery orderByOehdchrgsplt($order = Criteria::ASC) Order by the OehdChrgSplt column
 * @method     ChildSoHeaderQuery orderByOehdacccaprv($order = Criteria::ASC) Order by the OehdAcCcAprv column
 * @method     ChildSoHeaderQuery orderByOehdorigordrnbr($order = Criteria::ASC) Order by the OehdOrigOrdrNbr column
 * @method     ChildSoHeaderQuery orderByOehdpostdate($order = Criteria::ASC) Order by the OehdPostDate column
 * @method     ChildSoHeaderQuery orderByOehddiscdate1($order = Criteria::ASC) Order by the OehdDiscDate1 column
 * @method     ChildSoHeaderQuery orderByOehddiscpct1($order = Criteria::ASC) Order by the OehdDiscPct1 column
 * @method     ChildSoHeaderQuery orderByOehdduedate1($order = Criteria::ASC) Order by the OehdDueDate1 column
 * @method     ChildSoHeaderQuery orderByOehddueamt1($order = Criteria::ASC) Order by the OehdDueAmt1 column
 * @method     ChildSoHeaderQuery orderByOehdduepct1($order = Criteria::ASC) Order by the OehdDuePct1 column
 * @method     ChildSoHeaderQuery orderByOehddiscdate2($order = Criteria::ASC) Order by the OehdDiscDate2 column
 * @method     ChildSoHeaderQuery orderByOehddiscpct2($order = Criteria::ASC) Order by the OehdDiscPct2 column
 * @method     ChildSoHeaderQuery orderByOehdduedate2($order = Criteria::ASC) Order by the OehdDueDate2 column
 * @method     ChildSoHeaderQuery orderByOehddueamt2($order = Criteria::ASC) Order by the OehdDueAmt2 column
 * @method     ChildSoHeaderQuery orderByOehdduepct2($order = Criteria::ASC) Order by the OehdDuePct2 column
 * @method     ChildSoHeaderQuery orderByOehddiscdate3($order = Criteria::ASC) Order by the OehdDiscDate3 column
 * @method     ChildSoHeaderQuery orderByOehddiscpct3($order = Criteria::ASC) Order by the OehdDiscPct3 column
 * @method     ChildSoHeaderQuery orderByOehdduedate3($order = Criteria::ASC) Order by the OehdDueDate3 column
 * @method     ChildSoHeaderQuery orderByOehddueamt3($order = Criteria::ASC) Order by the OehdDueAmt3 column
 * @method     ChildSoHeaderQuery orderByOehdduepct3($order = Criteria::ASC) Order by the OehdDuePct3 column
 * @method     ChildSoHeaderQuery orderByOehddiscdate4($order = Criteria::ASC) Order by the OehdDiscDate4 column
 * @method     ChildSoHeaderQuery orderByOehddiscpct4($order = Criteria::ASC) Order by the OehdDiscPct4 column
 * @method     ChildSoHeaderQuery orderByOehdduedate4($order = Criteria::ASC) Order by the OehdDueDate4 column
 * @method     ChildSoHeaderQuery orderByOehddueamt4($order = Criteria::ASC) Order by the OehdDueAmt4 column
 * @method     ChildSoHeaderQuery orderByOehdduepct4($order = Criteria::ASC) Order by the OehdDuePct4 column
 * @method     ChildSoHeaderQuery orderByOehddiscdate5($order = Criteria::ASC) Order by the OehdDiscDate5 column
 * @method     ChildSoHeaderQuery orderByOehddiscpct5($order = Criteria::ASC) Order by the OehdDiscPct5 column
 * @method     ChildSoHeaderQuery orderByOehdduedate5($order = Criteria::ASC) Order by the OehdDueDate5 column
 * @method     ChildSoHeaderQuery orderByOehddueamt5($order = Criteria::ASC) Order by the OehdDueAmt5 column
 * @method     ChildSoHeaderQuery orderByOehdduepct5($order = Criteria::ASC) Order by the OehdDuePct5 column
 * @method     ChildSoHeaderQuery orderByOehddiscdate6($order = Criteria::ASC) Order by the OehdDiscDate6 column
 * @method     ChildSoHeaderQuery orderByOehddiscpct6($order = Criteria::ASC) Order by the OehdDiscPct6 column
 * @method     ChildSoHeaderQuery orderByOehdduedate6($order = Criteria::ASC) Order by the OehdDueDate6 column
 * @method     ChildSoHeaderQuery orderByOehddueamt6($order = Criteria::ASC) Order by the OehdDueAmt6 column
 * @method     ChildSoHeaderQuery orderByOehdduepct6($order = Criteria::ASC) Order by the OehdDuePct6 column
 * @method     ChildSoHeaderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoHeaderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoHeaderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoHeaderQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildSoHeaderQuery groupByOehdstat() Group by the OehdStat column
 * @method     ChildSoHeaderQuery groupByOehdhold() Group by the OehdHold column
 * @method     ChildSoHeaderQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildSoHeaderQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildSoHeaderQuery groupByOehdstname() Group by the OehdStName column
 * @method     ChildSoHeaderQuery groupByOehdstlastname() Group by the OehdStLastName column
 * @method     ChildSoHeaderQuery groupByOehdstfirstname() Group by the OehdStFirstName column
 * @method     ChildSoHeaderQuery groupByOehdstadr1() Group by the OehdStAdr1 column
 * @method     ChildSoHeaderQuery groupByOehdstadr2() Group by the OehdStAdr2 column
 * @method     ChildSoHeaderQuery groupByOehdstadr3() Group by the OehdStAdr3 column
 * @method     ChildSoHeaderQuery groupByOehdstctry() Group by the OehdStCtry column
 * @method     ChildSoHeaderQuery groupByOehdstcity() Group by the OehdStCity column
 * @method     ChildSoHeaderQuery groupByOehdststat() Group by the OehdStStat column
 * @method     ChildSoHeaderQuery groupByOehdstzipcode() Group by the OehdStZipCode column
 * @method     ChildSoHeaderQuery groupByOehdcustpo() Group by the OehdCustPo column
 * @method     ChildSoHeaderQuery groupByOehdordrdate() Group by the OehdOrdrDate column
 * @method     ChildSoHeaderQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildSoHeaderQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildSoHeaderQuery groupByArininvnbr() Group by the ArinInvNbr column
 * @method     ChildSoHeaderQuery groupByOehdinvdate() Group by the OehdInvDate column
 * @method     ChildSoHeaderQuery groupByOehdglpd() Group by the OehdGLPd column
 * @method     ChildSoHeaderQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildSoHeaderQuery groupByOehdsp1pct() Group by the OehdSp1Pct column
 * @method     ChildSoHeaderQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildSoHeaderQuery groupByOehdsp2pct() Group by the OehdSp2Pct column
 * @method     ChildSoHeaderQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildSoHeaderQuery groupByOehdsp3pct() Group by the OehdSp3Pct column
 * @method     ChildSoHeaderQuery groupByOehdcntrnbr() Group by the OehdCntrNbr column
 * @method     ChildSoHeaderQuery groupByOehdwibatch() Group by the OehdWiBatch column
 * @method     ChildSoHeaderQuery groupByOehddroprelhold() Group by the OehdDropRelHold column
 * @method     ChildSoHeaderQuery groupByOehdtaxsub() Group by the OehdTaxSub column
 * @method     ChildSoHeaderQuery groupByOehdnontaxsub() Group by the OehdNonTaxSub column
 * @method     ChildSoHeaderQuery groupByOehdtaxtot() Group by the OehdTaxTot column
 * @method     ChildSoHeaderQuery groupByOehdfrttot() Group by the OehdFrtTot column
 * @method     ChildSoHeaderQuery groupByOehdmisctot() Group by the OehdMiscTot column
 * @method     ChildSoHeaderQuery groupByOehdordrtot() Group by the OehdOrdrTot column
 * @method     ChildSoHeaderQuery groupByOehdcosttot() Group by the OehdCostTot column
 * @method     ChildSoHeaderQuery groupByOehdspcommlock() Group by the OehdSpCommLock column
 * @method     ChildSoHeaderQuery groupByOehdtakendate() Group by the OehdTakenDate column
 * @method     ChildSoHeaderQuery groupByOehdtakentime() Group by the OehdTakenTime column
 * @method     ChildSoHeaderQuery groupByOehdpickdate() Group by the OehdPickDate column
 * @method     ChildSoHeaderQuery groupByOehdpicktime() Group by the OehdPickTime column
 * @method     ChildSoHeaderQuery groupByOehdpackdate() Group by the OehdPackDate column
 * @method     ChildSoHeaderQuery groupByOehdpacktime() Group by the OehdPackTime column
 * @method     ChildSoHeaderQuery groupByOehdverifydate() Group by the OehdVerifyDate column
 * @method     ChildSoHeaderQuery groupByOehdverifytime() Group by the OehdVerifyTime column
 * @method     ChildSoHeaderQuery groupByOehdcreditmemo() Group by the OehdCreditMemo column
 * @method     ChildSoHeaderQuery groupByOehdbookedyn() Group by the OehdBookedYn column
 * @method     ChildSoHeaderQuery groupByIntbwhseorig() Group by the IntbWhseOrig column
 * @method     ChildSoHeaderQuery groupByOehdbtstat() Group by the OehdBtStat column
 * @method     ChildSoHeaderQuery groupByOehdshipcomp() Group by the OehdShipComp column
 * @method     ChildSoHeaderQuery groupByOehdcwoflag() Group by the OehdCwoFlag column
 * @method     ChildSoHeaderQuery groupByOehddivision() Group by the OehdDivision column
 * @method     ChildSoHeaderQuery groupByOehdtakencode() Group by the OehdTakenCode column
 * @method     ChildSoHeaderQuery groupByOehdpickcode() Group by the OehdPickCode column
 * @method     ChildSoHeaderQuery groupByOehdpackcode() Group by the OehdPackCode column
 * @method     ChildSoHeaderQuery groupByOehdverifycode() Group by the OehdVerifyCode column
 * @method     ChildSoHeaderQuery groupByOehdtotdisc() Group by the OehdTotDisc column
 * @method     ChildSoHeaderQuery groupByOehdedirefnbrqual() Group by the OehdEdiRefNbrQual column
 * @method     ChildSoHeaderQuery groupByOehdusercode1() Group by the OehdUserCode1 column
 * @method     ChildSoHeaderQuery groupByOehdusercode2() Group by the OehdUserCode2 column
 * @method     ChildSoHeaderQuery groupByOehdusercode3() Group by the OehdUserCode3 column
 * @method     ChildSoHeaderQuery groupByOehdusercode4() Group by the OehdUserCode4 column
 * @method     ChildSoHeaderQuery groupByOehdexchctry() Group by the OehdExchCtry column
 * @method     ChildSoHeaderQuery groupByOehdexchrate() Group by the OehdExchRate column
 * @method     ChildSoHeaderQuery groupByOehdwghttot() Group by the OehdWghtTot column
 * @method     ChildSoHeaderQuery groupByOehdwghtoride() Group by the OehdWghtOride column
 * @method     ChildSoHeaderQuery groupByOehdccinfo() Group by the OehdCcInfo column
 * @method     ChildSoHeaderQuery groupByOehdboxcount() Group by the OehdBoxCount column
 * @method     ChildSoHeaderQuery groupByOehdrqstdate() Group by the OehdRqstDate column
 * @method     ChildSoHeaderQuery groupByOehdcancdate() Group by the OehdCancDate column
 * @method     ChildSoHeaderQuery groupByOehdcrntuser() Group by the OehdCrntUser column
 * @method     ChildSoHeaderQuery groupByOehdreleasenbr() Group by the OehdReleaseNbr column
 * @method     ChildSoHeaderQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildSoHeaderQuery groupByOehdbordbuilddate() Group by the OehdBordBuildDate column
 * @method     ChildSoHeaderQuery groupByOehddeptcode() Group by the OehdDeptCode column
 * @method     ChildSoHeaderQuery groupByOehdfrtinentered() Group by the OehdFrtInEntered column
 * @method     ChildSoHeaderQuery groupByOehddropshipentered() Group by the OehdDropShipEntered column
 * @method     ChildSoHeaderQuery groupByOehderflag() Group by the OehdErFlag column
 * @method     ChildSoHeaderQuery groupByOehdfrtin() Group by the OehdFrtIn column
 * @method     ChildSoHeaderQuery groupByOehddropship() Group by the OehdDropShip column
 * @method     ChildSoHeaderQuery groupByOehdminorder() Group by the OehdMinOrder column
 * @method     ChildSoHeaderQuery groupByOehdcontractterms() Group by the OehdContractTerms column
 * @method     ChildSoHeaderQuery groupByOehddropshipbilled() Group by the OehdDropShipBilled column
 * @method     ChildSoHeaderQuery groupByOehdordtyp() Group by the OehdOrdTyp column
 * @method     ChildSoHeaderQuery groupByOehdtracknbr() Group by the OehdTrackNbr column
 * @method     ChildSoHeaderQuery groupByOehdsource() Group by the OehdSource column
 * @method     ChildSoHeaderQuery groupByOehdccaprv() Group by the OehdCcAprv column
 * @method     ChildSoHeaderQuery groupByOehdpickfmattype() Group by the OehdPickFmatType column
 * @method     ChildSoHeaderQuery groupByOehdinvcfmattype() Group by the OehdInvcFmatType column
 * @method     ChildSoHeaderQuery groupByOehdcashamt() Group by the OehdCashAmt column
 * @method     ChildSoHeaderQuery groupByOehdcheckamt() Group by the OehdCheckAmt column
 * @method     ChildSoHeaderQuery groupByOehdchecknbr() Group by the OehdCheckNbr column
 * @method     ChildSoHeaderQuery groupByOehddepositamt() Group by the OehdDepositAmt column
 * @method     ChildSoHeaderQuery groupByOehddepositnbr() Group by the OehdDepositNbr column
 * @method     ChildSoHeaderQuery groupByOehdccamt() Group by the OehdCcAmt column
 * @method     ChildSoHeaderQuery groupByOehdotaxsub() Group by the OehdOTaxSub column
 * @method     ChildSoHeaderQuery groupByOehdonontaxsub() Group by the OehdONonTaxSub column
 * @method     ChildSoHeaderQuery groupByOehdotaxtot() Group by the OehdOTaxTot column
 * @method     ChildSoHeaderQuery groupByOehdoordrtot() Group by the OehdOOrdrTot column
 * @method     ChildSoHeaderQuery groupByOehdpickprintdate() Group by the OehdPickPrintDate column
 * @method     ChildSoHeaderQuery groupByOehdpickprinttime() Group by the OehdPickPrintTime column
 * @method     ChildSoHeaderQuery groupByOehdcont() Group by the OehdCont column
 * @method     ChildSoHeaderQuery groupByOehdcontteleintl() Group by the OehdContTeleIntl column
 * @method     ChildSoHeaderQuery groupByOehdconttelenbr() Group by the OehdContTeleNbr column
 * @method     ChildSoHeaderQuery groupByOehdcontteleext() Group by the OehdContTeleExt column
 * @method     ChildSoHeaderQuery groupByOehdcontfaxintl() Group by the OehdContFaxIntl column
 * @method     ChildSoHeaderQuery groupByOehdcontfaxnbr() Group by the OehdContFaxNbr column
 * @method     ChildSoHeaderQuery groupByOehdshipacct() Group by the OehdShipAcct column
 * @method     ChildSoHeaderQuery groupByOehdchgdue() Group by the OehdChgDue column
 * @method     ChildSoHeaderQuery groupByOehdaddlpricdisc() Group by the OehdAddlPricDisc column
 * @method     ChildSoHeaderQuery groupByOehdallship() Group by the OehdAllShip column
 * @method     ChildSoHeaderQuery groupByOehdqtyorderamt() Group by the OehdQtyOrderAmt column
 * @method     ChildSoHeaderQuery groupByOehdcreditapplied() Group by the OehdCreditApplied column
 * @method     ChildSoHeaderQuery groupByOehdinvcprintdate() Group by the OehdInvcPrintDate column
 * @method     ChildSoHeaderQuery groupByOehdinvcprinttime() Group by the OehdInvcPrintTime column
 * @method     ChildSoHeaderQuery groupByOehddiscfrt() Group by the OehdDiscFrt column
 * @method     ChildSoHeaderQuery groupByOehdorideshipcomp() Group by the OehdOrideShipComp column
 * @method     ChildSoHeaderQuery groupByOehdcontemail() Group by the OehdContEmail column
 * @method     ChildSoHeaderQuery groupByOehdmanualfrt() Group by the OehdManualFrt column
 * @method     ChildSoHeaderQuery groupByOehdinternalfrt() Group by the OehdInternalFrt column
 * @method     ChildSoHeaderQuery groupByOehdfrtcost() Group by the OehdFrtCost column
 * @method     ChildSoHeaderQuery groupByOehdroute() Group by the OehdRoute column
 * @method     ChildSoHeaderQuery groupByOehdrouteseq() Group by the OehdRouteSeq column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxcode1() Group by the OehdFrtTaxCode1 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxamt1() Group by the OehdFrtTaxAmt1 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxcode2() Group by the OehdFrtTaxCode2 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxamt2() Group by the OehdFrtTaxAmt2 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxcode3() Group by the OehdFrtTaxCode3 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxamt3() Group by the OehdFrtTaxAmt3 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxcode4() Group by the OehdFrtTaxCode4 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxamt4() Group by the OehdFrtTaxAmt4 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxcode5() Group by the OehdFrtTaxCode5 column
 * @method     ChildSoHeaderQuery groupByOehdfrttaxamt5() Group by the OehdFrtTaxAmt5 column
 * @method     ChildSoHeaderQuery groupByOehdedi855sent() Group by the OehdEdi855Sent column
 * @method     ChildSoHeaderQuery groupByOehdfrt3rdparty() Group by the OehdFrt3rdParty column
 * @method     ChildSoHeaderQuery groupByOehdfob() Group by the OehdFob column
 * @method     ChildSoHeaderQuery groupByOehdconfirmimagyn() Group by the OehdConfirmImagYn column
 * @method     ChildSoHeaderQuery groupByOehdindustconform() Group by the OehdIndustConform column
 * @method     ChildSoHeaderQuery groupByOehdcstkconsign() Group by the OehdCstkConsign column
 * @method     ChildSoHeaderQuery groupByOehdlmdelaycapsent() Group by the OehdLmDelayCapSent column
 * @method     ChildSoHeaderQuery groupByOehdmfgid() Group by the OehdMfgId column
 * @method     ChildSoHeaderQuery groupByOehdstoreid() Group by the OehdStoreId column
 * @method     ChildSoHeaderQuery groupByOehdpickqueue() Group by the OehdPickQueue column
 * @method     ChildSoHeaderQuery groupByOehdarrvdate() Group by the OehdArrvDate column
 * @method     ChildSoHeaderQuery groupByOehdsurchgstat() Group by the OehdSurchgStat column
 * @method     ChildSoHeaderQuery groupByOehdfrtgrup() Group by the OehdFrtGrup column
 * @method     ChildSoHeaderQuery groupByOehdcommoride() Group by the OehdCommOride column
 * @method     ChildSoHeaderQuery groupByOehdchrgsplt() Group by the OehdChrgSplt column
 * @method     ChildSoHeaderQuery groupByOehdacccaprv() Group by the OehdAcCcAprv column
 * @method     ChildSoHeaderQuery groupByOehdorigordrnbr() Group by the OehdOrigOrdrNbr column
 * @method     ChildSoHeaderQuery groupByOehdpostdate() Group by the OehdPostDate column
 * @method     ChildSoHeaderQuery groupByOehddiscdate1() Group by the OehdDiscDate1 column
 * @method     ChildSoHeaderQuery groupByOehddiscpct1() Group by the OehdDiscPct1 column
 * @method     ChildSoHeaderQuery groupByOehdduedate1() Group by the OehdDueDate1 column
 * @method     ChildSoHeaderQuery groupByOehddueamt1() Group by the OehdDueAmt1 column
 * @method     ChildSoHeaderQuery groupByOehdduepct1() Group by the OehdDuePct1 column
 * @method     ChildSoHeaderQuery groupByOehddiscdate2() Group by the OehdDiscDate2 column
 * @method     ChildSoHeaderQuery groupByOehddiscpct2() Group by the OehdDiscPct2 column
 * @method     ChildSoHeaderQuery groupByOehdduedate2() Group by the OehdDueDate2 column
 * @method     ChildSoHeaderQuery groupByOehddueamt2() Group by the OehdDueAmt2 column
 * @method     ChildSoHeaderQuery groupByOehdduepct2() Group by the OehdDuePct2 column
 * @method     ChildSoHeaderQuery groupByOehddiscdate3() Group by the OehdDiscDate3 column
 * @method     ChildSoHeaderQuery groupByOehddiscpct3() Group by the OehdDiscPct3 column
 * @method     ChildSoHeaderQuery groupByOehdduedate3() Group by the OehdDueDate3 column
 * @method     ChildSoHeaderQuery groupByOehddueamt3() Group by the OehdDueAmt3 column
 * @method     ChildSoHeaderQuery groupByOehdduepct3() Group by the OehdDuePct3 column
 * @method     ChildSoHeaderQuery groupByOehddiscdate4() Group by the OehdDiscDate4 column
 * @method     ChildSoHeaderQuery groupByOehddiscpct4() Group by the OehdDiscPct4 column
 * @method     ChildSoHeaderQuery groupByOehdduedate4() Group by the OehdDueDate4 column
 * @method     ChildSoHeaderQuery groupByOehddueamt4() Group by the OehdDueAmt4 column
 * @method     ChildSoHeaderQuery groupByOehdduepct4() Group by the OehdDuePct4 column
 * @method     ChildSoHeaderQuery groupByOehddiscdate5() Group by the OehdDiscDate5 column
 * @method     ChildSoHeaderQuery groupByOehddiscpct5() Group by the OehdDiscPct5 column
 * @method     ChildSoHeaderQuery groupByOehdduedate5() Group by the OehdDueDate5 column
 * @method     ChildSoHeaderQuery groupByOehddueamt5() Group by the OehdDueAmt5 column
 * @method     ChildSoHeaderQuery groupByOehdduepct5() Group by the OehdDuePct5 column
 * @method     ChildSoHeaderQuery groupByOehddiscdate6() Group by the OehdDiscDate6 column
 * @method     ChildSoHeaderQuery groupByOehddiscpct6() Group by the OehdDiscPct6 column
 * @method     ChildSoHeaderQuery groupByOehdduedate6() Group by the OehdDueDate6 column
 * @method     ChildSoHeaderQuery groupByOehddueamt6() Group by the OehdDueAmt6 column
 * @method     ChildSoHeaderQuery groupByOehdduepct6() Group by the OehdDuePct6 column
 * @method     ChildSoHeaderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoHeaderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoHeaderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoHeaderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoHeaderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoHeaderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoHeaderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoHeaderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoHeaderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoHeader findOne(ConnectionInterface $con = null) Return the first ChildSoHeader matching the query
 * @method     ChildSoHeader findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSoHeader matching the query, or a new ChildSoHeader object populated from the query conditions when no match is found
 *
 * @method     ChildSoHeader findOneByOehdnbr(string $OehdNbr) Return the first ChildSoHeader filtered by the OehdNbr column
 * @method     ChildSoHeader findOneByOehdstat(string $OehdStat) Return the first ChildSoHeader filtered by the OehdStat column
 * @method     ChildSoHeader findOneByOehdhold(string $OehdHold) Return the first ChildSoHeader filtered by the OehdHold column
 * @method     ChildSoHeader findOneByArcucustid(string $ArcuCustId) Return the first ChildSoHeader filtered by the ArcuCustId column
 * @method     ChildSoHeader findOneByArstshipid(string $ArstShipId) Return the first ChildSoHeader filtered by the ArstShipId column
 * @method     ChildSoHeader findOneByOehdstname(string $OehdStName) Return the first ChildSoHeader filtered by the OehdStName column
 * @method     ChildSoHeader findOneByOehdstlastname(string $OehdStLastName) Return the first ChildSoHeader filtered by the OehdStLastName column
 * @method     ChildSoHeader findOneByOehdstfirstname(string $OehdStFirstName) Return the first ChildSoHeader filtered by the OehdStFirstName column
 * @method     ChildSoHeader findOneByOehdstadr1(string $OehdStAdr1) Return the first ChildSoHeader filtered by the OehdStAdr1 column
 * @method     ChildSoHeader findOneByOehdstadr2(string $OehdStAdr2) Return the first ChildSoHeader filtered by the OehdStAdr2 column
 * @method     ChildSoHeader findOneByOehdstadr3(string $OehdStAdr3) Return the first ChildSoHeader filtered by the OehdStAdr3 column
 * @method     ChildSoHeader findOneByOehdstctry(string $OehdStCtry) Return the first ChildSoHeader filtered by the OehdStCtry column
 * @method     ChildSoHeader findOneByOehdstcity(string $OehdStCity) Return the first ChildSoHeader filtered by the OehdStCity column
 * @method     ChildSoHeader findOneByOehdststat(string $OehdStStat) Return the first ChildSoHeader filtered by the OehdStStat column
 * @method     ChildSoHeader findOneByOehdstzipcode(string $OehdStZipCode) Return the first ChildSoHeader filtered by the OehdStZipCode column
 * @method     ChildSoHeader findOneByOehdcustpo(string $OehdCustPo) Return the first ChildSoHeader filtered by the OehdCustPo column
 * @method     ChildSoHeader findOneByOehdordrdate(string $OehdOrdrDate) Return the first ChildSoHeader filtered by the OehdOrdrDate column
 * @method     ChildSoHeader findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSoHeader filtered by the ArtmTermCd column
 * @method     ChildSoHeader findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSoHeader filtered by the ArtbShipVia column
 * @method     ChildSoHeader findOneByArininvnbr(string $ArinInvNbr) Return the first ChildSoHeader filtered by the ArinInvNbr column
 * @method     ChildSoHeader findOneByOehdinvdate(string $OehdInvDate) Return the first ChildSoHeader filtered by the OehdInvDate column
 * @method     ChildSoHeader findOneByOehdglpd(int $OehdGLPd) Return the first ChildSoHeader filtered by the OehdGLPd column
 * @method     ChildSoHeader findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSoHeader filtered by the ArspSalePer1 column
 * @method     ChildSoHeader findOneByOehdsp1pct(string $OehdSp1Pct) Return the first ChildSoHeader filtered by the OehdSp1Pct column
 * @method     ChildSoHeader findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSoHeader filtered by the ArspSalePer2 column
 * @method     ChildSoHeader findOneByOehdsp2pct(string $OehdSp2Pct) Return the first ChildSoHeader filtered by the OehdSp2Pct column
 * @method     ChildSoHeader findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSoHeader filtered by the ArspSalePer3 column
 * @method     ChildSoHeader findOneByOehdsp3pct(string $OehdSp3Pct) Return the first ChildSoHeader filtered by the OehdSp3Pct column
 * @method     ChildSoHeader findOneByOehdcntrnbr(int $OehdCntrNbr) Return the first ChildSoHeader filtered by the OehdCntrNbr column
 * @method     ChildSoHeader findOneByOehdwibatch(int $OehdWiBatch) Return the first ChildSoHeader filtered by the OehdWiBatch column
 * @method     ChildSoHeader findOneByOehddroprelhold(string $OehdDropRelHold) Return the first ChildSoHeader filtered by the OehdDropRelHold column
 * @method     ChildSoHeader findOneByOehdtaxsub(string $OehdTaxSub) Return the first ChildSoHeader filtered by the OehdTaxSub column
 * @method     ChildSoHeader findOneByOehdnontaxsub(string $OehdNonTaxSub) Return the first ChildSoHeader filtered by the OehdNonTaxSub column
 * @method     ChildSoHeader findOneByOehdtaxtot(string $OehdTaxTot) Return the first ChildSoHeader filtered by the OehdTaxTot column
 * @method     ChildSoHeader findOneByOehdfrttot(string $OehdFrtTot) Return the first ChildSoHeader filtered by the OehdFrtTot column
 * @method     ChildSoHeader findOneByOehdmisctot(string $OehdMiscTot) Return the first ChildSoHeader filtered by the OehdMiscTot column
 * @method     ChildSoHeader findOneByOehdordrtot(string $OehdOrdrTot) Return the first ChildSoHeader filtered by the OehdOrdrTot column
 * @method     ChildSoHeader findOneByOehdcosttot(string $OehdCostTot) Return the first ChildSoHeader filtered by the OehdCostTot column
 * @method     ChildSoHeader findOneByOehdspcommlock(string $OehdSpCommLock) Return the first ChildSoHeader filtered by the OehdSpCommLock column
 * @method     ChildSoHeader findOneByOehdtakendate(string $OehdTakenDate) Return the first ChildSoHeader filtered by the OehdTakenDate column
 * @method     ChildSoHeader findOneByOehdtakentime(string $OehdTakenTime) Return the first ChildSoHeader filtered by the OehdTakenTime column
 * @method     ChildSoHeader findOneByOehdpickdate(string $OehdPickDate) Return the first ChildSoHeader filtered by the OehdPickDate column
 * @method     ChildSoHeader findOneByOehdpicktime(string $OehdPickTime) Return the first ChildSoHeader filtered by the OehdPickTime column
 * @method     ChildSoHeader findOneByOehdpackdate(string $OehdPackDate) Return the first ChildSoHeader filtered by the OehdPackDate column
 * @method     ChildSoHeader findOneByOehdpacktime(string $OehdPackTime) Return the first ChildSoHeader filtered by the OehdPackTime column
 * @method     ChildSoHeader findOneByOehdverifydate(string $OehdVerifyDate) Return the first ChildSoHeader filtered by the OehdVerifyDate column
 * @method     ChildSoHeader findOneByOehdverifytime(string $OehdVerifyTime) Return the first ChildSoHeader filtered by the OehdVerifyTime column
 * @method     ChildSoHeader findOneByOehdcreditmemo(string $OehdCreditMemo) Return the first ChildSoHeader filtered by the OehdCreditMemo column
 * @method     ChildSoHeader findOneByOehdbookedyn(string $OehdBookedYn) Return the first ChildSoHeader filtered by the OehdBookedYn column
 * @method     ChildSoHeader findOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSoHeader filtered by the IntbWhseOrig column
 * @method     ChildSoHeader findOneByOehdbtstat(string $OehdBtStat) Return the first ChildSoHeader filtered by the OehdBtStat column
 * @method     ChildSoHeader findOneByOehdshipcomp(string $OehdShipComp) Return the first ChildSoHeader filtered by the OehdShipComp column
 * @method     ChildSoHeader findOneByOehdcwoflag(string $OehdCwoFlag) Return the first ChildSoHeader filtered by the OehdCwoFlag column
 * @method     ChildSoHeader findOneByOehddivision(string $OehdDivision) Return the first ChildSoHeader filtered by the OehdDivision column
 * @method     ChildSoHeader findOneByOehdtakencode(string $OehdTakenCode) Return the first ChildSoHeader filtered by the OehdTakenCode column
 * @method     ChildSoHeader findOneByOehdpickcode(string $OehdPickCode) Return the first ChildSoHeader filtered by the OehdPickCode column
 * @method     ChildSoHeader findOneByOehdpackcode(string $OehdPackCode) Return the first ChildSoHeader filtered by the OehdPackCode column
 * @method     ChildSoHeader findOneByOehdverifycode(string $OehdVerifyCode) Return the first ChildSoHeader filtered by the OehdVerifyCode column
 * @method     ChildSoHeader findOneByOehdtotdisc(string $OehdTotDisc) Return the first ChildSoHeader filtered by the OehdTotDisc column
 * @method     ChildSoHeader findOneByOehdedirefnbrqual(string $OehdEdiRefNbrQual) Return the first ChildSoHeader filtered by the OehdEdiRefNbrQual column
 * @method     ChildSoHeader findOneByOehdusercode1(string $OehdUserCode1) Return the first ChildSoHeader filtered by the OehdUserCode1 column
 * @method     ChildSoHeader findOneByOehdusercode2(string $OehdUserCode2) Return the first ChildSoHeader filtered by the OehdUserCode2 column
 * @method     ChildSoHeader findOneByOehdusercode3(string $OehdUserCode3) Return the first ChildSoHeader filtered by the OehdUserCode3 column
 * @method     ChildSoHeader findOneByOehdusercode4(string $OehdUserCode4) Return the first ChildSoHeader filtered by the OehdUserCode4 column
 * @method     ChildSoHeader findOneByOehdexchctry(string $OehdExchCtry) Return the first ChildSoHeader filtered by the OehdExchCtry column
 * @method     ChildSoHeader findOneByOehdexchrate(string $OehdExchRate) Return the first ChildSoHeader filtered by the OehdExchRate column
 * @method     ChildSoHeader findOneByOehdwghttot(string $OehdWghtTot) Return the first ChildSoHeader filtered by the OehdWghtTot column
 * @method     ChildSoHeader findOneByOehdwghtoride(string $OehdWghtOride) Return the first ChildSoHeader filtered by the OehdWghtOride column
 * @method     ChildSoHeader findOneByOehdccinfo(string $OehdCcInfo) Return the first ChildSoHeader filtered by the OehdCcInfo column
 * @method     ChildSoHeader findOneByOehdboxcount(int $OehdBoxCount) Return the first ChildSoHeader filtered by the OehdBoxCount column
 * @method     ChildSoHeader findOneByOehdrqstdate(string $OehdRqstDate) Return the first ChildSoHeader filtered by the OehdRqstDate column
 * @method     ChildSoHeader findOneByOehdcancdate(string $OehdCancDate) Return the first ChildSoHeader filtered by the OehdCancDate column
 * @method     ChildSoHeader findOneByOehdcrntuser(string $OehdCrntUser) Return the first ChildSoHeader filtered by the OehdCrntUser column
 * @method     ChildSoHeader findOneByOehdreleasenbr(string $OehdReleaseNbr) Return the first ChildSoHeader filtered by the OehdReleaseNbr column
 * @method     ChildSoHeader findOneByIntbwhse(string $IntbWhse) Return the first ChildSoHeader filtered by the IntbWhse column
 * @method     ChildSoHeader findOneByOehdbordbuilddate(string $OehdBordBuildDate) Return the first ChildSoHeader filtered by the OehdBordBuildDate column
 * @method     ChildSoHeader findOneByOehddeptcode(string $OehdDeptCode) Return the first ChildSoHeader filtered by the OehdDeptCode column
 * @method     ChildSoHeader findOneByOehdfrtinentered(string $OehdFrtInEntered) Return the first ChildSoHeader filtered by the OehdFrtInEntered column
 * @method     ChildSoHeader findOneByOehddropshipentered(string $OehdDropShipEntered) Return the first ChildSoHeader filtered by the OehdDropShipEntered column
 * @method     ChildSoHeader findOneByOehderflag(string $OehdErFlag) Return the first ChildSoHeader filtered by the OehdErFlag column
 * @method     ChildSoHeader findOneByOehdfrtin(string $OehdFrtIn) Return the first ChildSoHeader filtered by the OehdFrtIn column
 * @method     ChildSoHeader findOneByOehddropship(string $OehdDropShip) Return the first ChildSoHeader filtered by the OehdDropShip column
 * @method     ChildSoHeader findOneByOehdminorder(string $OehdMinOrder) Return the first ChildSoHeader filtered by the OehdMinOrder column
 * @method     ChildSoHeader findOneByOehdcontractterms(string $OehdContractTerms) Return the first ChildSoHeader filtered by the OehdContractTerms column
 * @method     ChildSoHeader findOneByOehddropshipbilled(string $OehdDropShipBilled) Return the first ChildSoHeader filtered by the OehdDropShipBilled column
 * @method     ChildSoHeader findOneByOehdordtyp(string $OehdOrdTyp) Return the first ChildSoHeader filtered by the OehdOrdTyp column
 * @method     ChildSoHeader findOneByOehdtracknbr(string $OehdTrackNbr) Return the first ChildSoHeader filtered by the OehdTrackNbr column
 * @method     ChildSoHeader findOneByOehdsource(string $OehdSource) Return the first ChildSoHeader filtered by the OehdSource column
 * @method     ChildSoHeader findOneByOehdccaprv(string $OehdCcAprv) Return the first ChildSoHeader filtered by the OehdCcAprv column
 * @method     ChildSoHeader findOneByOehdpickfmattype(string $OehdPickFmatType) Return the first ChildSoHeader filtered by the OehdPickFmatType column
 * @method     ChildSoHeader findOneByOehdinvcfmattype(string $OehdInvcFmatType) Return the first ChildSoHeader filtered by the OehdInvcFmatType column
 * @method     ChildSoHeader findOneByOehdcashamt(string $OehdCashAmt) Return the first ChildSoHeader filtered by the OehdCashAmt column
 * @method     ChildSoHeader findOneByOehdcheckamt(string $OehdCheckAmt) Return the first ChildSoHeader filtered by the OehdCheckAmt column
 * @method     ChildSoHeader findOneByOehdchecknbr(string $OehdCheckNbr) Return the first ChildSoHeader filtered by the OehdCheckNbr column
 * @method     ChildSoHeader findOneByOehddepositamt(string $OehdDepositAmt) Return the first ChildSoHeader filtered by the OehdDepositAmt column
 * @method     ChildSoHeader findOneByOehddepositnbr(string $OehdDepositNbr) Return the first ChildSoHeader filtered by the OehdDepositNbr column
 * @method     ChildSoHeader findOneByOehdccamt(string $OehdCcAmt) Return the first ChildSoHeader filtered by the OehdCcAmt column
 * @method     ChildSoHeader findOneByOehdotaxsub(string $OehdOTaxSub) Return the first ChildSoHeader filtered by the OehdOTaxSub column
 * @method     ChildSoHeader findOneByOehdonontaxsub(string $OehdONonTaxSub) Return the first ChildSoHeader filtered by the OehdONonTaxSub column
 * @method     ChildSoHeader findOneByOehdotaxtot(string $OehdOTaxTot) Return the first ChildSoHeader filtered by the OehdOTaxTot column
 * @method     ChildSoHeader findOneByOehdoordrtot(string $OehdOOrdrTot) Return the first ChildSoHeader filtered by the OehdOOrdrTot column
 * @method     ChildSoHeader findOneByOehdpickprintdate(string $OehdPickPrintDate) Return the first ChildSoHeader filtered by the OehdPickPrintDate column
 * @method     ChildSoHeader findOneByOehdpickprinttime(string $OehdPickPrintTime) Return the first ChildSoHeader filtered by the OehdPickPrintTime column
 * @method     ChildSoHeader findOneByOehdcont(string $OehdCont) Return the first ChildSoHeader filtered by the OehdCont column
 * @method     ChildSoHeader findOneByOehdcontteleintl(string $OehdContTeleIntl) Return the first ChildSoHeader filtered by the OehdContTeleIntl column
 * @method     ChildSoHeader findOneByOehdconttelenbr(string $OehdContTeleNbr) Return the first ChildSoHeader filtered by the OehdContTeleNbr column
 * @method     ChildSoHeader findOneByOehdcontteleext(string $OehdContTeleExt) Return the first ChildSoHeader filtered by the OehdContTeleExt column
 * @method     ChildSoHeader findOneByOehdcontfaxintl(string $OehdContFaxIntl) Return the first ChildSoHeader filtered by the OehdContFaxIntl column
 * @method     ChildSoHeader findOneByOehdcontfaxnbr(string $OehdContFaxNbr) Return the first ChildSoHeader filtered by the OehdContFaxNbr column
 * @method     ChildSoHeader findOneByOehdshipacct(string $OehdShipAcct) Return the first ChildSoHeader filtered by the OehdShipAcct column
 * @method     ChildSoHeader findOneByOehdchgdue(string $OehdChgDue) Return the first ChildSoHeader filtered by the OehdChgDue column
 * @method     ChildSoHeader findOneByOehdaddlpricdisc(string $OehdAddlPricDisc) Return the first ChildSoHeader filtered by the OehdAddlPricDisc column
 * @method     ChildSoHeader findOneByOehdallship(string $OehdAllShip) Return the first ChildSoHeader filtered by the OehdAllShip column
 * @method     ChildSoHeader findOneByOehdqtyorderamt(string $OehdQtyOrderAmt) Return the first ChildSoHeader filtered by the OehdQtyOrderAmt column
 * @method     ChildSoHeader findOneByOehdcreditapplied(string $OehdCreditApplied) Return the first ChildSoHeader filtered by the OehdCreditApplied column
 * @method     ChildSoHeader findOneByOehdinvcprintdate(string $OehdInvcPrintDate) Return the first ChildSoHeader filtered by the OehdInvcPrintDate column
 * @method     ChildSoHeader findOneByOehdinvcprinttime(string $OehdInvcPrintTime) Return the first ChildSoHeader filtered by the OehdInvcPrintTime column
 * @method     ChildSoHeader findOneByOehddiscfrt(string $OehdDiscFrt) Return the first ChildSoHeader filtered by the OehdDiscFrt column
 * @method     ChildSoHeader findOneByOehdorideshipcomp(string $OehdOrideShipComp) Return the first ChildSoHeader filtered by the OehdOrideShipComp column
 * @method     ChildSoHeader findOneByOehdcontemail(string $OehdContEmail) Return the first ChildSoHeader filtered by the OehdContEmail column
 * @method     ChildSoHeader findOneByOehdmanualfrt(string $OehdManualFrt) Return the first ChildSoHeader filtered by the OehdManualFrt column
 * @method     ChildSoHeader findOneByOehdinternalfrt(string $OehdInternalFrt) Return the first ChildSoHeader filtered by the OehdInternalFrt column
 * @method     ChildSoHeader findOneByOehdfrtcost(string $OehdFrtCost) Return the first ChildSoHeader filtered by the OehdFrtCost column
 * @method     ChildSoHeader findOneByOehdroute(string $OehdRoute) Return the first ChildSoHeader filtered by the OehdRoute column
 * @method     ChildSoHeader findOneByOehdrouteseq(int $OehdRouteSeq) Return the first ChildSoHeader filtered by the OehdRouteSeq column
 * @method     ChildSoHeader findOneByOehdfrttaxcode1(string $OehdFrtTaxCode1) Return the first ChildSoHeader filtered by the OehdFrtTaxCode1 column
 * @method     ChildSoHeader findOneByOehdfrttaxamt1(string $OehdFrtTaxAmt1) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt1 column
 * @method     ChildSoHeader findOneByOehdfrttaxcode2(string $OehdFrtTaxCode2) Return the first ChildSoHeader filtered by the OehdFrtTaxCode2 column
 * @method     ChildSoHeader findOneByOehdfrttaxamt2(string $OehdFrtTaxAmt2) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt2 column
 * @method     ChildSoHeader findOneByOehdfrttaxcode3(string $OehdFrtTaxCode3) Return the first ChildSoHeader filtered by the OehdFrtTaxCode3 column
 * @method     ChildSoHeader findOneByOehdfrttaxamt3(string $OehdFrtTaxAmt3) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt3 column
 * @method     ChildSoHeader findOneByOehdfrttaxcode4(string $OehdFrtTaxCode4) Return the first ChildSoHeader filtered by the OehdFrtTaxCode4 column
 * @method     ChildSoHeader findOneByOehdfrttaxamt4(string $OehdFrtTaxAmt4) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt4 column
 * @method     ChildSoHeader findOneByOehdfrttaxcode5(string $OehdFrtTaxCode5) Return the first ChildSoHeader filtered by the OehdFrtTaxCode5 column
 * @method     ChildSoHeader findOneByOehdfrttaxamt5(string $OehdFrtTaxAmt5) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt5 column
 * @method     ChildSoHeader findOneByOehdedi855sent(string $OehdEdi855Sent) Return the first ChildSoHeader filtered by the OehdEdi855Sent column
 * @method     ChildSoHeader findOneByOehdfrt3rdparty(string $OehdFrt3rdParty) Return the first ChildSoHeader filtered by the OehdFrt3rdParty column
 * @method     ChildSoHeader findOneByOehdfob(string $OehdFob) Return the first ChildSoHeader filtered by the OehdFob column
 * @method     ChildSoHeader findOneByOehdconfirmimagyn(string $OehdConfirmImagYn) Return the first ChildSoHeader filtered by the OehdConfirmImagYn column
 * @method     ChildSoHeader findOneByOehdindustconform(string $OehdIndustConform) Return the first ChildSoHeader filtered by the OehdIndustConform column
 * @method     ChildSoHeader findOneByOehdcstkconsign(string $OehdCstkConsign) Return the first ChildSoHeader filtered by the OehdCstkConsign column
 * @method     ChildSoHeader findOneByOehdlmdelaycapsent(string $OehdLmDelayCapSent) Return the first ChildSoHeader filtered by the OehdLmDelayCapSent column
 * @method     ChildSoHeader findOneByOehdmfgid(string $OehdMfgId) Return the first ChildSoHeader filtered by the OehdMfgId column
 * @method     ChildSoHeader findOneByOehdstoreid(string $OehdStoreId) Return the first ChildSoHeader filtered by the OehdStoreId column
 * @method     ChildSoHeader findOneByOehdpickqueue(string $OehdPickQueue) Return the first ChildSoHeader filtered by the OehdPickQueue column
 * @method     ChildSoHeader findOneByOehdarrvdate(string $OehdArrvDate) Return the first ChildSoHeader filtered by the OehdArrvDate column
 * @method     ChildSoHeader findOneByOehdsurchgstat(string $OehdSurchgStat) Return the first ChildSoHeader filtered by the OehdSurchgStat column
 * @method     ChildSoHeader findOneByOehdfrtgrup(string $OehdFrtGrup) Return the first ChildSoHeader filtered by the OehdFrtGrup column
 * @method     ChildSoHeader findOneByOehdcommoride(string $OehdCommOride) Return the first ChildSoHeader filtered by the OehdCommOride column
 * @method     ChildSoHeader findOneByOehdchrgsplt(string $OehdChrgSplt) Return the first ChildSoHeader filtered by the OehdChrgSplt column
 * @method     ChildSoHeader findOneByOehdacccaprv(string $OehdAcCcAprv) Return the first ChildSoHeader filtered by the OehdAcCcAprv column
 * @method     ChildSoHeader findOneByOehdorigordrnbr(string $OehdOrigOrdrNbr) Return the first ChildSoHeader filtered by the OehdOrigOrdrNbr column
 * @method     ChildSoHeader findOneByOehdpostdate(string $OehdPostDate) Return the first ChildSoHeader filtered by the OehdPostDate column
 * @method     ChildSoHeader findOneByOehddiscdate1(string $OehdDiscDate1) Return the first ChildSoHeader filtered by the OehdDiscDate1 column
 * @method     ChildSoHeader findOneByOehddiscpct1(string $OehdDiscPct1) Return the first ChildSoHeader filtered by the OehdDiscPct1 column
 * @method     ChildSoHeader findOneByOehdduedate1(string $OehdDueDate1) Return the first ChildSoHeader filtered by the OehdDueDate1 column
 * @method     ChildSoHeader findOneByOehddueamt1(string $OehdDueAmt1) Return the first ChildSoHeader filtered by the OehdDueAmt1 column
 * @method     ChildSoHeader findOneByOehdduepct1(string $OehdDuePct1) Return the first ChildSoHeader filtered by the OehdDuePct1 column
 * @method     ChildSoHeader findOneByOehddiscdate2(string $OehdDiscDate2) Return the first ChildSoHeader filtered by the OehdDiscDate2 column
 * @method     ChildSoHeader findOneByOehddiscpct2(string $OehdDiscPct2) Return the first ChildSoHeader filtered by the OehdDiscPct2 column
 * @method     ChildSoHeader findOneByOehdduedate2(string $OehdDueDate2) Return the first ChildSoHeader filtered by the OehdDueDate2 column
 * @method     ChildSoHeader findOneByOehddueamt2(string $OehdDueAmt2) Return the first ChildSoHeader filtered by the OehdDueAmt2 column
 * @method     ChildSoHeader findOneByOehdduepct2(string $OehdDuePct2) Return the first ChildSoHeader filtered by the OehdDuePct2 column
 * @method     ChildSoHeader findOneByOehddiscdate3(string $OehdDiscDate3) Return the first ChildSoHeader filtered by the OehdDiscDate3 column
 * @method     ChildSoHeader findOneByOehddiscpct3(string $OehdDiscPct3) Return the first ChildSoHeader filtered by the OehdDiscPct3 column
 * @method     ChildSoHeader findOneByOehdduedate3(string $OehdDueDate3) Return the first ChildSoHeader filtered by the OehdDueDate3 column
 * @method     ChildSoHeader findOneByOehddueamt3(string $OehdDueAmt3) Return the first ChildSoHeader filtered by the OehdDueAmt3 column
 * @method     ChildSoHeader findOneByOehdduepct3(string $OehdDuePct3) Return the first ChildSoHeader filtered by the OehdDuePct3 column
 * @method     ChildSoHeader findOneByOehddiscdate4(string $OehdDiscDate4) Return the first ChildSoHeader filtered by the OehdDiscDate4 column
 * @method     ChildSoHeader findOneByOehddiscpct4(string $OehdDiscPct4) Return the first ChildSoHeader filtered by the OehdDiscPct4 column
 * @method     ChildSoHeader findOneByOehdduedate4(string $OehdDueDate4) Return the first ChildSoHeader filtered by the OehdDueDate4 column
 * @method     ChildSoHeader findOneByOehddueamt4(string $OehdDueAmt4) Return the first ChildSoHeader filtered by the OehdDueAmt4 column
 * @method     ChildSoHeader findOneByOehdduepct4(string $OehdDuePct4) Return the first ChildSoHeader filtered by the OehdDuePct4 column
 * @method     ChildSoHeader findOneByOehddiscdate5(string $OehdDiscDate5) Return the first ChildSoHeader filtered by the OehdDiscDate5 column
 * @method     ChildSoHeader findOneByOehddiscpct5(string $OehdDiscPct5) Return the first ChildSoHeader filtered by the OehdDiscPct5 column
 * @method     ChildSoHeader findOneByOehdduedate5(string $OehdDueDate5) Return the first ChildSoHeader filtered by the OehdDueDate5 column
 * @method     ChildSoHeader findOneByOehddueamt5(string $OehdDueAmt5) Return the first ChildSoHeader filtered by the OehdDueAmt5 column
 * @method     ChildSoHeader findOneByOehdduepct5(string $OehdDuePct5) Return the first ChildSoHeader filtered by the OehdDuePct5 column
 * @method     ChildSoHeader findOneByOehddiscdate6(string $OehdDiscDate6) Return the first ChildSoHeader filtered by the OehdDiscDate6 column
 * @method     ChildSoHeader findOneByOehddiscpct6(string $OehdDiscPct6) Return the first ChildSoHeader filtered by the OehdDiscPct6 column
 * @method     ChildSoHeader findOneByOehdduedate6(string $OehdDueDate6) Return the first ChildSoHeader filtered by the OehdDueDate6 column
 * @method     ChildSoHeader findOneByOehddueamt6(string $OehdDueAmt6) Return the first ChildSoHeader filtered by the OehdDueAmt6 column
 * @method     ChildSoHeader findOneByOehdduepct6(string $OehdDuePct6) Return the first ChildSoHeader filtered by the OehdDuePct6 column
 * @method     ChildSoHeader findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoHeader filtered by the DateUpdtd column
 * @method     ChildSoHeader findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoHeader filtered by the TimeUpdtd column
 * @method     ChildSoHeader findOneByDummy(string $dummy) Return the first ChildSoHeader filtered by the dummy column *

 * @method     ChildSoHeader requirePk($key, ConnectionInterface $con = null) Return the ChildSoHeader by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOne(ConnectionInterface $con = null) Return the first ChildSoHeader matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoHeader requireOneByOehdnbr(string $OehdNbr) Return the first ChildSoHeader filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstat(string $OehdStat) Return the first ChildSoHeader filtered by the OehdStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdhold(string $OehdHold) Return the first ChildSoHeader filtered by the OehdHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByArcucustid(string $ArcuCustId) Return the first ChildSoHeader filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByArstshipid(string $ArstShipId) Return the first ChildSoHeader filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstname(string $OehdStName) Return the first ChildSoHeader filtered by the OehdStName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstlastname(string $OehdStLastName) Return the first ChildSoHeader filtered by the OehdStLastName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstfirstname(string $OehdStFirstName) Return the first ChildSoHeader filtered by the OehdStFirstName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstadr1(string $OehdStAdr1) Return the first ChildSoHeader filtered by the OehdStAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstadr2(string $OehdStAdr2) Return the first ChildSoHeader filtered by the OehdStAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstadr3(string $OehdStAdr3) Return the first ChildSoHeader filtered by the OehdStAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstctry(string $OehdStCtry) Return the first ChildSoHeader filtered by the OehdStCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstcity(string $OehdStCity) Return the first ChildSoHeader filtered by the OehdStCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdststat(string $OehdStStat) Return the first ChildSoHeader filtered by the OehdStStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstzipcode(string $OehdStZipCode) Return the first ChildSoHeader filtered by the OehdStZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcustpo(string $OehdCustPo) Return the first ChildSoHeader filtered by the OehdCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdordrdate(string $OehdOrdrDate) Return the first ChildSoHeader filtered by the OehdOrdrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSoHeader filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSoHeader filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByArininvnbr(string $ArinInvNbr) Return the first ChildSoHeader filtered by the ArinInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdinvdate(string $OehdInvDate) Return the first ChildSoHeader filtered by the OehdInvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdglpd(int $OehdGLPd) Return the first ChildSoHeader filtered by the OehdGLPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSoHeader filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdsp1pct(string $OehdSp1Pct) Return the first ChildSoHeader filtered by the OehdSp1Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSoHeader filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdsp2pct(string $OehdSp2Pct) Return the first ChildSoHeader filtered by the OehdSp2Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSoHeader filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdsp3pct(string $OehdSp3Pct) Return the first ChildSoHeader filtered by the OehdSp3Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcntrnbr(int $OehdCntrNbr) Return the first ChildSoHeader filtered by the OehdCntrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdwibatch(int $OehdWiBatch) Return the first ChildSoHeader filtered by the OehdWiBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddroprelhold(string $OehdDropRelHold) Return the first ChildSoHeader filtered by the OehdDropRelHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdtaxsub(string $OehdTaxSub) Return the first ChildSoHeader filtered by the OehdTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdnontaxsub(string $OehdNonTaxSub) Return the first ChildSoHeader filtered by the OehdNonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdtaxtot(string $OehdTaxTot) Return the first ChildSoHeader filtered by the OehdTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttot(string $OehdFrtTot) Return the first ChildSoHeader filtered by the OehdFrtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdmisctot(string $OehdMiscTot) Return the first ChildSoHeader filtered by the OehdMiscTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdordrtot(string $OehdOrdrTot) Return the first ChildSoHeader filtered by the OehdOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcosttot(string $OehdCostTot) Return the first ChildSoHeader filtered by the OehdCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdspcommlock(string $OehdSpCommLock) Return the first ChildSoHeader filtered by the OehdSpCommLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdtakendate(string $OehdTakenDate) Return the first ChildSoHeader filtered by the OehdTakenDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdtakentime(string $OehdTakenTime) Return the first ChildSoHeader filtered by the OehdTakenTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpickdate(string $OehdPickDate) Return the first ChildSoHeader filtered by the OehdPickDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpicktime(string $OehdPickTime) Return the first ChildSoHeader filtered by the OehdPickTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpackdate(string $OehdPackDate) Return the first ChildSoHeader filtered by the OehdPackDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpacktime(string $OehdPackTime) Return the first ChildSoHeader filtered by the OehdPackTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdverifydate(string $OehdVerifyDate) Return the first ChildSoHeader filtered by the OehdVerifyDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdverifytime(string $OehdVerifyTime) Return the first ChildSoHeader filtered by the OehdVerifyTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcreditmemo(string $OehdCreditMemo) Return the first ChildSoHeader filtered by the OehdCreditMemo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdbookedyn(string $OehdBookedYn) Return the first ChildSoHeader filtered by the OehdBookedYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSoHeader filtered by the IntbWhseOrig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdbtstat(string $OehdBtStat) Return the first ChildSoHeader filtered by the OehdBtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdshipcomp(string $OehdShipComp) Return the first ChildSoHeader filtered by the OehdShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcwoflag(string $OehdCwoFlag) Return the first ChildSoHeader filtered by the OehdCwoFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddivision(string $OehdDivision) Return the first ChildSoHeader filtered by the OehdDivision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdtakencode(string $OehdTakenCode) Return the first ChildSoHeader filtered by the OehdTakenCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpickcode(string $OehdPickCode) Return the first ChildSoHeader filtered by the OehdPickCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpackcode(string $OehdPackCode) Return the first ChildSoHeader filtered by the OehdPackCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdverifycode(string $OehdVerifyCode) Return the first ChildSoHeader filtered by the OehdVerifyCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdtotdisc(string $OehdTotDisc) Return the first ChildSoHeader filtered by the OehdTotDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdedirefnbrqual(string $OehdEdiRefNbrQual) Return the first ChildSoHeader filtered by the OehdEdiRefNbrQual column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdusercode1(string $OehdUserCode1) Return the first ChildSoHeader filtered by the OehdUserCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdusercode2(string $OehdUserCode2) Return the first ChildSoHeader filtered by the OehdUserCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdusercode3(string $OehdUserCode3) Return the first ChildSoHeader filtered by the OehdUserCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdusercode4(string $OehdUserCode4) Return the first ChildSoHeader filtered by the OehdUserCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdexchctry(string $OehdExchCtry) Return the first ChildSoHeader filtered by the OehdExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdexchrate(string $OehdExchRate) Return the first ChildSoHeader filtered by the OehdExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdwghttot(string $OehdWghtTot) Return the first ChildSoHeader filtered by the OehdWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdwghtoride(string $OehdWghtOride) Return the first ChildSoHeader filtered by the OehdWghtOride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdccinfo(string $OehdCcInfo) Return the first ChildSoHeader filtered by the OehdCcInfo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdboxcount(int $OehdBoxCount) Return the first ChildSoHeader filtered by the OehdBoxCount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdrqstdate(string $OehdRqstDate) Return the first ChildSoHeader filtered by the OehdRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcancdate(string $OehdCancDate) Return the first ChildSoHeader filtered by the OehdCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcrntuser(string $OehdCrntUser) Return the first ChildSoHeader filtered by the OehdCrntUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdreleasenbr(string $OehdReleaseNbr) Return the first ChildSoHeader filtered by the OehdReleaseNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByIntbwhse(string $IntbWhse) Return the first ChildSoHeader filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdbordbuilddate(string $OehdBordBuildDate) Return the first ChildSoHeader filtered by the OehdBordBuildDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddeptcode(string $OehdDeptCode) Return the first ChildSoHeader filtered by the OehdDeptCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrtinentered(string $OehdFrtInEntered) Return the first ChildSoHeader filtered by the OehdFrtInEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddropshipentered(string $OehdDropShipEntered) Return the first ChildSoHeader filtered by the OehdDropShipEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehderflag(string $OehdErFlag) Return the first ChildSoHeader filtered by the OehdErFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrtin(string $OehdFrtIn) Return the first ChildSoHeader filtered by the OehdFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddropship(string $OehdDropShip) Return the first ChildSoHeader filtered by the OehdDropShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdminorder(string $OehdMinOrder) Return the first ChildSoHeader filtered by the OehdMinOrder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcontractterms(string $OehdContractTerms) Return the first ChildSoHeader filtered by the OehdContractTerms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddropshipbilled(string $OehdDropShipBilled) Return the first ChildSoHeader filtered by the OehdDropShipBilled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdordtyp(string $OehdOrdTyp) Return the first ChildSoHeader filtered by the OehdOrdTyp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdtracknbr(string $OehdTrackNbr) Return the first ChildSoHeader filtered by the OehdTrackNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdsource(string $OehdSource) Return the first ChildSoHeader filtered by the OehdSource column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdccaprv(string $OehdCcAprv) Return the first ChildSoHeader filtered by the OehdCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpickfmattype(string $OehdPickFmatType) Return the first ChildSoHeader filtered by the OehdPickFmatType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdinvcfmattype(string $OehdInvcFmatType) Return the first ChildSoHeader filtered by the OehdInvcFmatType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcashamt(string $OehdCashAmt) Return the first ChildSoHeader filtered by the OehdCashAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcheckamt(string $OehdCheckAmt) Return the first ChildSoHeader filtered by the OehdCheckAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdchecknbr(string $OehdCheckNbr) Return the first ChildSoHeader filtered by the OehdCheckNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddepositamt(string $OehdDepositAmt) Return the first ChildSoHeader filtered by the OehdDepositAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddepositnbr(string $OehdDepositNbr) Return the first ChildSoHeader filtered by the OehdDepositNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdccamt(string $OehdCcAmt) Return the first ChildSoHeader filtered by the OehdCcAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdotaxsub(string $OehdOTaxSub) Return the first ChildSoHeader filtered by the OehdOTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdonontaxsub(string $OehdONonTaxSub) Return the first ChildSoHeader filtered by the OehdONonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdotaxtot(string $OehdOTaxTot) Return the first ChildSoHeader filtered by the OehdOTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdoordrtot(string $OehdOOrdrTot) Return the first ChildSoHeader filtered by the OehdOOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpickprintdate(string $OehdPickPrintDate) Return the first ChildSoHeader filtered by the OehdPickPrintDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpickprinttime(string $OehdPickPrintTime) Return the first ChildSoHeader filtered by the OehdPickPrintTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcont(string $OehdCont) Return the first ChildSoHeader filtered by the OehdCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcontteleintl(string $OehdContTeleIntl) Return the first ChildSoHeader filtered by the OehdContTeleIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdconttelenbr(string $OehdContTeleNbr) Return the first ChildSoHeader filtered by the OehdContTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcontteleext(string $OehdContTeleExt) Return the first ChildSoHeader filtered by the OehdContTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcontfaxintl(string $OehdContFaxIntl) Return the first ChildSoHeader filtered by the OehdContFaxIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcontfaxnbr(string $OehdContFaxNbr) Return the first ChildSoHeader filtered by the OehdContFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdshipacct(string $OehdShipAcct) Return the first ChildSoHeader filtered by the OehdShipAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdchgdue(string $OehdChgDue) Return the first ChildSoHeader filtered by the OehdChgDue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdaddlpricdisc(string $OehdAddlPricDisc) Return the first ChildSoHeader filtered by the OehdAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdallship(string $OehdAllShip) Return the first ChildSoHeader filtered by the OehdAllShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdqtyorderamt(string $OehdQtyOrderAmt) Return the first ChildSoHeader filtered by the OehdQtyOrderAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcreditapplied(string $OehdCreditApplied) Return the first ChildSoHeader filtered by the OehdCreditApplied column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdinvcprintdate(string $OehdInvcPrintDate) Return the first ChildSoHeader filtered by the OehdInvcPrintDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdinvcprinttime(string $OehdInvcPrintTime) Return the first ChildSoHeader filtered by the OehdInvcPrintTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscfrt(string $OehdDiscFrt) Return the first ChildSoHeader filtered by the OehdDiscFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdorideshipcomp(string $OehdOrideShipComp) Return the first ChildSoHeader filtered by the OehdOrideShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcontemail(string $OehdContEmail) Return the first ChildSoHeader filtered by the OehdContEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdmanualfrt(string $OehdManualFrt) Return the first ChildSoHeader filtered by the OehdManualFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdinternalfrt(string $OehdInternalFrt) Return the first ChildSoHeader filtered by the OehdInternalFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrtcost(string $OehdFrtCost) Return the first ChildSoHeader filtered by the OehdFrtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdroute(string $OehdRoute) Return the first ChildSoHeader filtered by the OehdRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdrouteseq(int $OehdRouteSeq) Return the first ChildSoHeader filtered by the OehdRouteSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxcode1(string $OehdFrtTaxCode1) Return the first ChildSoHeader filtered by the OehdFrtTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxamt1(string $OehdFrtTaxAmt1) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxcode2(string $OehdFrtTaxCode2) Return the first ChildSoHeader filtered by the OehdFrtTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxamt2(string $OehdFrtTaxAmt2) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxcode3(string $OehdFrtTaxCode3) Return the first ChildSoHeader filtered by the OehdFrtTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxamt3(string $OehdFrtTaxAmt3) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxcode4(string $OehdFrtTaxCode4) Return the first ChildSoHeader filtered by the OehdFrtTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxamt4(string $OehdFrtTaxAmt4) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxcode5(string $OehdFrtTaxCode5) Return the first ChildSoHeader filtered by the OehdFrtTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrttaxamt5(string $OehdFrtTaxAmt5) Return the first ChildSoHeader filtered by the OehdFrtTaxAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdedi855sent(string $OehdEdi855Sent) Return the first ChildSoHeader filtered by the OehdEdi855Sent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrt3rdparty(string $OehdFrt3rdParty) Return the first ChildSoHeader filtered by the OehdFrt3rdParty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfob(string $OehdFob) Return the first ChildSoHeader filtered by the OehdFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdconfirmimagyn(string $OehdConfirmImagYn) Return the first ChildSoHeader filtered by the OehdConfirmImagYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdindustconform(string $OehdIndustConform) Return the first ChildSoHeader filtered by the OehdIndustConform column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcstkconsign(string $OehdCstkConsign) Return the first ChildSoHeader filtered by the OehdCstkConsign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdlmdelaycapsent(string $OehdLmDelayCapSent) Return the first ChildSoHeader filtered by the OehdLmDelayCapSent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdmfgid(string $OehdMfgId) Return the first ChildSoHeader filtered by the OehdMfgId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdstoreid(string $OehdStoreId) Return the first ChildSoHeader filtered by the OehdStoreId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpickqueue(string $OehdPickQueue) Return the first ChildSoHeader filtered by the OehdPickQueue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdarrvdate(string $OehdArrvDate) Return the first ChildSoHeader filtered by the OehdArrvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdsurchgstat(string $OehdSurchgStat) Return the first ChildSoHeader filtered by the OehdSurchgStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdfrtgrup(string $OehdFrtGrup) Return the first ChildSoHeader filtered by the OehdFrtGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdcommoride(string $OehdCommOride) Return the first ChildSoHeader filtered by the OehdCommOride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdchrgsplt(string $OehdChrgSplt) Return the first ChildSoHeader filtered by the OehdChrgSplt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdacccaprv(string $OehdAcCcAprv) Return the first ChildSoHeader filtered by the OehdAcCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdorigordrnbr(string $OehdOrigOrdrNbr) Return the first ChildSoHeader filtered by the OehdOrigOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdpostdate(string $OehdPostDate) Return the first ChildSoHeader filtered by the OehdPostDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscdate1(string $OehdDiscDate1) Return the first ChildSoHeader filtered by the OehdDiscDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscpct1(string $OehdDiscPct1) Return the first ChildSoHeader filtered by the OehdDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduedate1(string $OehdDueDate1) Return the first ChildSoHeader filtered by the OehdDueDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddueamt1(string $OehdDueAmt1) Return the first ChildSoHeader filtered by the OehdDueAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduepct1(string $OehdDuePct1) Return the first ChildSoHeader filtered by the OehdDuePct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscdate2(string $OehdDiscDate2) Return the first ChildSoHeader filtered by the OehdDiscDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscpct2(string $OehdDiscPct2) Return the first ChildSoHeader filtered by the OehdDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduedate2(string $OehdDueDate2) Return the first ChildSoHeader filtered by the OehdDueDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddueamt2(string $OehdDueAmt2) Return the first ChildSoHeader filtered by the OehdDueAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduepct2(string $OehdDuePct2) Return the first ChildSoHeader filtered by the OehdDuePct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscdate3(string $OehdDiscDate3) Return the first ChildSoHeader filtered by the OehdDiscDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscpct3(string $OehdDiscPct3) Return the first ChildSoHeader filtered by the OehdDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduedate3(string $OehdDueDate3) Return the first ChildSoHeader filtered by the OehdDueDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddueamt3(string $OehdDueAmt3) Return the first ChildSoHeader filtered by the OehdDueAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduepct3(string $OehdDuePct3) Return the first ChildSoHeader filtered by the OehdDuePct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscdate4(string $OehdDiscDate4) Return the first ChildSoHeader filtered by the OehdDiscDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscpct4(string $OehdDiscPct4) Return the first ChildSoHeader filtered by the OehdDiscPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduedate4(string $OehdDueDate4) Return the first ChildSoHeader filtered by the OehdDueDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddueamt4(string $OehdDueAmt4) Return the first ChildSoHeader filtered by the OehdDueAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduepct4(string $OehdDuePct4) Return the first ChildSoHeader filtered by the OehdDuePct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscdate5(string $OehdDiscDate5) Return the first ChildSoHeader filtered by the OehdDiscDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscpct5(string $OehdDiscPct5) Return the first ChildSoHeader filtered by the OehdDiscPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduedate5(string $OehdDueDate5) Return the first ChildSoHeader filtered by the OehdDueDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddueamt5(string $OehdDueAmt5) Return the first ChildSoHeader filtered by the OehdDueAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduepct5(string $OehdDuePct5) Return the first ChildSoHeader filtered by the OehdDuePct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscdate6(string $OehdDiscDate6) Return the first ChildSoHeader filtered by the OehdDiscDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddiscpct6(string $OehdDiscPct6) Return the first ChildSoHeader filtered by the OehdDiscPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduedate6(string $OehdDueDate6) Return the first ChildSoHeader filtered by the OehdDueDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehddueamt6(string $OehdDueAmt6) Return the first ChildSoHeader filtered by the OehdDueAmt6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByOehdduepct6(string $OehdDuePct6) Return the first ChildSoHeader filtered by the OehdDuePct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoHeader filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoHeader filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoHeader requireOneByDummy(string $dummy) Return the first ChildSoHeader filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoHeader[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSoHeader objects based on current ModelCriteria
 * @method     ChildSoHeader[]|ObjectCollection findByOehdnbr(string $OehdNbr) Return ChildSoHeader objects filtered by the OehdNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstat(string $OehdStat) Return ChildSoHeader objects filtered by the OehdStat column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdhold(string $OehdHold) Return ChildSoHeader objects filtered by the OehdHold column
 * @method     ChildSoHeader[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildSoHeader objects filtered by the ArcuCustId column
 * @method     ChildSoHeader[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildSoHeader objects filtered by the ArstShipId column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstname(string $OehdStName) Return ChildSoHeader objects filtered by the OehdStName column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstlastname(string $OehdStLastName) Return ChildSoHeader objects filtered by the OehdStLastName column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstfirstname(string $OehdStFirstName) Return ChildSoHeader objects filtered by the OehdStFirstName column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstadr1(string $OehdStAdr1) Return ChildSoHeader objects filtered by the OehdStAdr1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstadr2(string $OehdStAdr2) Return ChildSoHeader objects filtered by the OehdStAdr2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstadr3(string $OehdStAdr3) Return ChildSoHeader objects filtered by the OehdStAdr3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstctry(string $OehdStCtry) Return ChildSoHeader objects filtered by the OehdStCtry column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstcity(string $OehdStCity) Return ChildSoHeader objects filtered by the OehdStCity column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdststat(string $OehdStStat) Return ChildSoHeader objects filtered by the OehdStStat column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstzipcode(string $OehdStZipCode) Return ChildSoHeader objects filtered by the OehdStZipCode column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcustpo(string $OehdCustPo) Return ChildSoHeader objects filtered by the OehdCustPo column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdordrdate(string $OehdOrdrDate) Return ChildSoHeader objects filtered by the OehdOrdrDate column
 * @method     ChildSoHeader[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildSoHeader objects filtered by the ArtmTermCd column
 * @method     ChildSoHeader[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildSoHeader objects filtered by the ArtbShipVia column
 * @method     ChildSoHeader[]|ObjectCollection findByArininvnbr(string $ArinInvNbr) Return ChildSoHeader objects filtered by the ArinInvNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdinvdate(string $OehdInvDate) Return ChildSoHeader objects filtered by the OehdInvDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdglpd(int $OehdGLPd) Return ChildSoHeader objects filtered by the OehdGLPd column
 * @method     ChildSoHeader[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildSoHeader objects filtered by the ArspSalePer1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdsp1pct(string $OehdSp1Pct) Return ChildSoHeader objects filtered by the OehdSp1Pct column
 * @method     ChildSoHeader[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildSoHeader objects filtered by the ArspSalePer2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdsp2pct(string $OehdSp2Pct) Return ChildSoHeader objects filtered by the OehdSp2Pct column
 * @method     ChildSoHeader[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildSoHeader objects filtered by the ArspSalePer3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdsp3pct(string $OehdSp3Pct) Return ChildSoHeader objects filtered by the OehdSp3Pct column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcntrnbr(int $OehdCntrNbr) Return ChildSoHeader objects filtered by the OehdCntrNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdwibatch(int $OehdWiBatch) Return ChildSoHeader objects filtered by the OehdWiBatch column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddroprelhold(string $OehdDropRelHold) Return ChildSoHeader objects filtered by the OehdDropRelHold column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdtaxsub(string $OehdTaxSub) Return ChildSoHeader objects filtered by the OehdTaxSub column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdnontaxsub(string $OehdNonTaxSub) Return ChildSoHeader objects filtered by the OehdNonTaxSub column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdtaxtot(string $OehdTaxTot) Return ChildSoHeader objects filtered by the OehdTaxTot column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttot(string $OehdFrtTot) Return ChildSoHeader objects filtered by the OehdFrtTot column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdmisctot(string $OehdMiscTot) Return ChildSoHeader objects filtered by the OehdMiscTot column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdordrtot(string $OehdOrdrTot) Return ChildSoHeader objects filtered by the OehdOrdrTot column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcosttot(string $OehdCostTot) Return ChildSoHeader objects filtered by the OehdCostTot column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdspcommlock(string $OehdSpCommLock) Return ChildSoHeader objects filtered by the OehdSpCommLock column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdtakendate(string $OehdTakenDate) Return ChildSoHeader objects filtered by the OehdTakenDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdtakentime(string $OehdTakenTime) Return ChildSoHeader objects filtered by the OehdTakenTime column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpickdate(string $OehdPickDate) Return ChildSoHeader objects filtered by the OehdPickDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpicktime(string $OehdPickTime) Return ChildSoHeader objects filtered by the OehdPickTime column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpackdate(string $OehdPackDate) Return ChildSoHeader objects filtered by the OehdPackDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpacktime(string $OehdPackTime) Return ChildSoHeader objects filtered by the OehdPackTime column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdverifydate(string $OehdVerifyDate) Return ChildSoHeader objects filtered by the OehdVerifyDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdverifytime(string $OehdVerifyTime) Return ChildSoHeader objects filtered by the OehdVerifyTime column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcreditmemo(string $OehdCreditMemo) Return ChildSoHeader objects filtered by the OehdCreditMemo column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdbookedyn(string $OehdBookedYn) Return ChildSoHeader objects filtered by the OehdBookedYn column
 * @method     ChildSoHeader[]|ObjectCollection findByIntbwhseorig(string $IntbWhseOrig) Return ChildSoHeader objects filtered by the IntbWhseOrig column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdbtstat(string $OehdBtStat) Return ChildSoHeader objects filtered by the OehdBtStat column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdshipcomp(string $OehdShipComp) Return ChildSoHeader objects filtered by the OehdShipComp column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcwoflag(string $OehdCwoFlag) Return ChildSoHeader objects filtered by the OehdCwoFlag column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddivision(string $OehdDivision) Return ChildSoHeader objects filtered by the OehdDivision column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdtakencode(string $OehdTakenCode) Return ChildSoHeader objects filtered by the OehdTakenCode column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpickcode(string $OehdPickCode) Return ChildSoHeader objects filtered by the OehdPickCode column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpackcode(string $OehdPackCode) Return ChildSoHeader objects filtered by the OehdPackCode column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdverifycode(string $OehdVerifyCode) Return ChildSoHeader objects filtered by the OehdVerifyCode column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdtotdisc(string $OehdTotDisc) Return ChildSoHeader objects filtered by the OehdTotDisc column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdedirefnbrqual(string $OehdEdiRefNbrQual) Return ChildSoHeader objects filtered by the OehdEdiRefNbrQual column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdusercode1(string $OehdUserCode1) Return ChildSoHeader objects filtered by the OehdUserCode1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdusercode2(string $OehdUserCode2) Return ChildSoHeader objects filtered by the OehdUserCode2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdusercode3(string $OehdUserCode3) Return ChildSoHeader objects filtered by the OehdUserCode3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdusercode4(string $OehdUserCode4) Return ChildSoHeader objects filtered by the OehdUserCode4 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdexchctry(string $OehdExchCtry) Return ChildSoHeader objects filtered by the OehdExchCtry column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdexchrate(string $OehdExchRate) Return ChildSoHeader objects filtered by the OehdExchRate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdwghttot(string $OehdWghtTot) Return ChildSoHeader objects filtered by the OehdWghtTot column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdwghtoride(string $OehdWghtOride) Return ChildSoHeader objects filtered by the OehdWghtOride column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdccinfo(string $OehdCcInfo) Return ChildSoHeader objects filtered by the OehdCcInfo column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdboxcount(int $OehdBoxCount) Return ChildSoHeader objects filtered by the OehdBoxCount column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdrqstdate(string $OehdRqstDate) Return ChildSoHeader objects filtered by the OehdRqstDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcancdate(string $OehdCancDate) Return ChildSoHeader objects filtered by the OehdCancDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcrntuser(string $OehdCrntUser) Return ChildSoHeader objects filtered by the OehdCrntUser column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdreleasenbr(string $OehdReleaseNbr) Return ChildSoHeader objects filtered by the OehdReleaseNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildSoHeader objects filtered by the IntbWhse column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdbordbuilddate(string $OehdBordBuildDate) Return ChildSoHeader objects filtered by the OehdBordBuildDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddeptcode(string $OehdDeptCode) Return ChildSoHeader objects filtered by the OehdDeptCode column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrtinentered(string $OehdFrtInEntered) Return ChildSoHeader objects filtered by the OehdFrtInEntered column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddropshipentered(string $OehdDropShipEntered) Return ChildSoHeader objects filtered by the OehdDropShipEntered column
 * @method     ChildSoHeader[]|ObjectCollection findByOehderflag(string $OehdErFlag) Return ChildSoHeader objects filtered by the OehdErFlag column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrtin(string $OehdFrtIn) Return ChildSoHeader objects filtered by the OehdFrtIn column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddropship(string $OehdDropShip) Return ChildSoHeader objects filtered by the OehdDropShip column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdminorder(string $OehdMinOrder) Return ChildSoHeader objects filtered by the OehdMinOrder column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcontractterms(string $OehdContractTerms) Return ChildSoHeader objects filtered by the OehdContractTerms column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddropshipbilled(string $OehdDropShipBilled) Return ChildSoHeader objects filtered by the OehdDropShipBilled column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdordtyp(string $OehdOrdTyp) Return ChildSoHeader objects filtered by the OehdOrdTyp column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdtracknbr(string $OehdTrackNbr) Return ChildSoHeader objects filtered by the OehdTrackNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdsource(string $OehdSource) Return ChildSoHeader objects filtered by the OehdSource column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdccaprv(string $OehdCcAprv) Return ChildSoHeader objects filtered by the OehdCcAprv column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpickfmattype(string $OehdPickFmatType) Return ChildSoHeader objects filtered by the OehdPickFmatType column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdinvcfmattype(string $OehdInvcFmatType) Return ChildSoHeader objects filtered by the OehdInvcFmatType column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcashamt(string $OehdCashAmt) Return ChildSoHeader objects filtered by the OehdCashAmt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcheckamt(string $OehdCheckAmt) Return ChildSoHeader objects filtered by the OehdCheckAmt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdchecknbr(string $OehdCheckNbr) Return ChildSoHeader objects filtered by the OehdCheckNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddepositamt(string $OehdDepositAmt) Return ChildSoHeader objects filtered by the OehdDepositAmt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddepositnbr(string $OehdDepositNbr) Return ChildSoHeader objects filtered by the OehdDepositNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdccamt(string $OehdCcAmt) Return ChildSoHeader objects filtered by the OehdCcAmt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdotaxsub(string $OehdOTaxSub) Return ChildSoHeader objects filtered by the OehdOTaxSub column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdonontaxsub(string $OehdONonTaxSub) Return ChildSoHeader objects filtered by the OehdONonTaxSub column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdotaxtot(string $OehdOTaxTot) Return ChildSoHeader objects filtered by the OehdOTaxTot column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdoordrtot(string $OehdOOrdrTot) Return ChildSoHeader objects filtered by the OehdOOrdrTot column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpickprintdate(string $OehdPickPrintDate) Return ChildSoHeader objects filtered by the OehdPickPrintDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpickprinttime(string $OehdPickPrintTime) Return ChildSoHeader objects filtered by the OehdPickPrintTime column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcont(string $OehdCont) Return ChildSoHeader objects filtered by the OehdCont column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcontteleintl(string $OehdContTeleIntl) Return ChildSoHeader objects filtered by the OehdContTeleIntl column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdconttelenbr(string $OehdContTeleNbr) Return ChildSoHeader objects filtered by the OehdContTeleNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcontteleext(string $OehdContTeleExt) Return ChildSoHeader objects filtered by the OehdContTeleExt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcontfaxintl(string $OehdContFaxIntl) Return ChildSoHeader objects filtered by the OehdContFaxIntl column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcontfaxnbr(string $OehdContFaxNbr) Return ChildSoHeader objects filtered by the OehdContFaxNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdshipacct(string $OehdShipAcct) Return ChildSoHeader objects filtered by the OehdShipAcct column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdchgdue(string $OehdChgDue) Return ChildSoHeader objects filtered by the OehdChgDue column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdaddlpricdisc(string $OehdAddlPricDisc) Return ChildSoHeader objects filtered by the OehdAddlPricDisc column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdallship(string $OehdAllShip) Return ChildSoHeader objects filtered by the OehdAllShip column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdqtyorderamt(string $OehdQtyOrderAmt) Return ChildSoHeader objects filtered by the OehdQtyOrderAmt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcreditapplied(string $OehdCreditApplied) Return ChildSoHeader objects filtered by the OehdCreditApplied column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdinvcprintdate(string $OehdInvcPrintDate) Return ChildSoHeader objects filtered by the OehdInvcPrintDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdinvcprinttime(string $OehdInvcPrintTime) Return ChildSoHeader objects filtered by the OehdInvcPrintTime column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscfrt(string $OehdDiscFrt) Return ChildSoHeader objects filtered by the OehdDiscFrt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdorideshipcomp(string $OehdOrideShipComp) Return ChildSoHeader objects filtered by the OehdOrideShipComp column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcontemail(string $OehdContEmail) Return ChildSoHeader objects filtered by the OehdContEmail column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdmanualfrt(string $OehdManualFrt) Return ChildSoHeader objects filtered by the OehdManualFrt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdinternalfrt(string $OehdInternalFrt) Return ChildSoHeader objects filtered by the OehdInternalFrt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrtcost(string $OehdFrtCost) Return ChildSoHeader objects filtered by the OehdFrtCost column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdroute(string $OehdRoute) Return ChildSoHeader objects filtered by the OehdRoute column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdrouteseq(int $OehdRouteSeq) Return ChildSoHeader objects filtered by the OehdRouteSeq column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxcode1(string $OehdFrtTaxCode1) Return ChildSoHeader objects filtered by the OehdFrtTaxCode1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxamt1(string $OehdFrtTaxAmt1) Return ChildSoHeader objects filtered by the OehdFrtTaxAmt1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxcode2(string $OehdFrtTaxCode2) Return ChildSoHeader objects filtered by the OehdFrtTaxCode2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxamt2(string $OehdFrtTaxAmt2) Return ChildSoHeader objects filtered by the OehdFrtTaxAmt2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxcode3(string $OehdFrtTaxCode3) Return ChildSoHeader objects filtered by the OehdFrtTaxCode3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxamt3(string $OehdFrtTaxAmt3) Return ChildSoHeader objects filtered by the OehdFrtTaxAmt3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxcode4(string $OehdFrtTaxCode4) Return ChildSoHeader objects filtered by the OehdFrtTaxCode4 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxamt4(string $OehdFrtTaxAmt4) Return ChildSoHeader objects filtered by the OehdFrtTaxAmt4 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxcode5(string $OehdFrtTaxCode5) Return ChildSoHeader objects filtered by the OehdFrtTaxCode5 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrttaxamt5(string $OehdFrtTaxAmt5) Return ChildSoHeader objects filtered by the OehdFrtTaxAmt5 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdedi855sent(string $OehdEdi855Sent) Return ChildSoHeader objects filtered by the OehdEdi855Sent column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrt3rdparty(string $OehdFrt3rdParty) Return ChildSoHeader objects filtered by the OehdFrt3rdParty column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfob(string $OehdFob) Return ChildSoHeader objects filtered by the OehdFob column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdconfirmimagyn(string $OehdConfirmImagYn) Return ChildSoHeader objects filtered by the OehdConfirmImagYn column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdindustconform(string $OehdIndustConform) Return ChildSoHeader objects filtered by the OehdIndustConform column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcstkconsign(string $OehdCstkConsign) Return ChildSoHeader objects filtered by the OehdCstkConsign column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdlmdelaycapsent(string $OehdLmDelayCapSent) Return ChildSoHeader objects filtered by the OehdLmDelayCapSent column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdmfgid(string $OehdMfgId) Return ChildSoHeader objects filtered by the OehdMfgId column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdstoreid(string $OehdStoreId) Return ChildSoHeader objects filtered by the OehdStoreId column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpickqueue(string $OehdPickQueue) Return ChildSoHeader objects filtered by the OehdPickQueue column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdarrvdate(string $OehdArrvDate) Return ChildSoHeader objects filtered by the OehdArrvDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdsurchgstat(string $OehdSurchgStat) Return ChildSoHeader objects filtered by the OehdSurchgStat column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdfrtgrup(string $OehdFrtGrup) Return ChildSoHeader objects filtered by the OehdFrtGrup column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdcommoride(string $OehdCommOride) Return ChildSoHeader objects filtered by the OehdCommOride column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdchrgsplt(string $OehdChrgSplt) Return ChildSoHeader objects filtered by the OehdChrgSplt column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdacccaprv(string $OehdAcCcAprv) Return ChildSoHeader objects filtered by the OehdAcCcAprv column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdorigordrnbr(string $OehdOrigOrdrNbr) Return ChildSoHeader objects filtered by the OehdOrigOrdrNbr column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdpostdate(string $OehdPostDate) Return ChildSoHeader objects filtered by the OehdPostDate column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscdate1(string $OehdDiscDate1) Return ChildSoHeader objects filtered by the OehdDiscDate1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscpct1(string $OehdDiscPct1) Return ChildSoHeader objects filtered by the OehdDiscPct1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduedate1(string $OehdDueDate1) Return ChildSoHeader objects filtered by the OehdDueDate1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddueamt1(string $OehdDueAmt1) Return ChildSoHeader objects filtered by the OehdDueAmt1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduepct1(string $OehdDuePct1) Return ChildSoHeader objects filtered by the OehdDuePct1 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscdate2(string $OehdDiscDate2) Return ChildSoHeader objects filtered by the OehdDiscDate2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscpct2(string $OehdDiscPct2) Return ChildSoHeader objects filtered by the OehdDiscPct2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduedate2(string $OehdDueDate2) Return ChildSoHeader objects filtered by the OehdDueDate2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddueamt2(string $OehdDueAmt2) Return ChildSoHeader objects filtered by the OehdDueAmt2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduepct2(string $OehdDuePct2) Return ChildSoHeader objects filtered by the OehdDuePct2 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscdate3(string $OehdDiscDate3) Return ChildSoHeader objects filtered by the OehdDiscDate3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscpct3(string $OehdDiscPct3) Return ChildSoHeader objects filtered by the OehdDiscPct3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduedate3(string $OehdDueDate3) Return ChildSoHeader objects filtered by the OehdDueDate3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddueamt3(string $OehdDueAmt3) Return ChildSoHeader objects filtered by the OehdDueAmt3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduepct3(string $OehdDuePct3) Return ChildSoHeader objects filtered by the OehdDuePct3 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscdate4(string $OehdDiscDate4) Return ChildSoHeader objects filtered by the OehdDiscDate4 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscpct4(string $OehdDiscPct4) Return ChildSoHeader objects filtered by the OehdDiscPct4 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduedate4(string $OehdDueDate4) Return ChildSoHeader objects filtered by the OehdDueDate4 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddueamt4(string $OehdDueAmt4) Return ChildSoHeader objects filtered by the OehdDueAmt4 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduepct4(string $OehdDuePct4) Return ChildSoHeader objects filtered by the OehdDuePct4 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscdate5(string $OehdDiscDate5) Return ChildSoHeader objects filtered by the OehdDiscDate5 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscpct5(string $OehdDiscPct5) Return ChildSoHeader objects filtered by the OehdDiscPct5 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduedate5(string $OehdDueDate5) Return ChildSoHeader objects filtered by the OehdDueDate5 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddueamt5(string $OehdDueAmt5) Return ChildSoHeader objects filtered by the OehdDueAmt5 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduepct5(string $OehdDuePct5) Return ChildSoHeader objects filtered by the OehdDuePct5 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscdate6(string $OehdDiscDate6) Return ChildSoHeader objects filtered by the OehdDiscDate6 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddiscpct6(string $OehdDiscPct6) Return ChildSoHeader objects filtered by the OehdDiscPct6 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduedate6(string $OehdDueDate6) Return ChildSoHeader objects filtered by the OehdDueDate6 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehddueamt6(string $OehdDueAmt6) Return ChildSoHeader objects filtered by the OehdDueAmt6 column
 * @method     ChildSoHeader[]|ObjectCollection findByOehdduepct6(string $OehdDuePct6) Return ChildSoHeader objects filtered by the OehdDuePct6 column
 * @method     ChildSoHeader[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSoHeader objects filtered by the DateUpdtd column
 * @method     ChildSoHeader[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSoHeader objects filtered by the TimeUpdtd column
 * @method     ChildSoHeader[]|ObjectCollection findByDummy(string $dummy) Return ChildSoHeader objects filtered by the dummy column
 * @method     ChildSoHeader[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SoHeaderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoHeaderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoHeader', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoHeaderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoHeaderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSoHeaderQuery) {
            return $criteria;
        }
        $query = new ChildSoHeaderQuery();
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
     * @return ChildSoHeader|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoHeaderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSoHeader A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehdNbr, OehdStat, OehdHold, ArcuCustId, ArstShipId, OehdStName, OehdStLastName, OehdStFirstName, OehdStAdr1, OehdStAdr2, OehdStAdr3, OehdStCtry, OehdStCity, OehdStStat, OehdStZipCode, OehdCustPo, OehdOrdrDate, ArtmTermCd, ArtbShipVia, ArinInvNbr, OehdInvDate, OehdGLPd, ArspSalePer1, OehdSp1Pct, ArspSalePer2, OehdSp2Pct, ArspSalePer3, OehdSp3Pct, OehdCntrNbr, OehdWiBatch, OehdDropRelHold, OehdTaxSub, OehdNonTaxSub, OehdTaxTot, OehdFrtTot, OehdMiscTot, OehdOrdrTot, OehdCostTot, OehdSpCommLock, OehdTakenDate, OehdTakenTime, OehdPickDate, OehdPickTime, OehdPackDate, OehdPackTime, OehdVerifyDate, OehdVerifyTime, OehdCreditMemo, OehdBookedYn, IntbWhseOrig, OehdBtStat, OehdShipComp, OehdCwoFlag, OehdDivision, OehdTakenCode, OehdPickCode, OehdPackCode, OehdVerifyCode, OehdTotDisc, OehdEdiRefNbrQual, OehdUserCode1, OehdUserCode2, OehdUserCode3, OehdUserCode4, OehdExchCtry, OehdExchRate, OehdWghtTot, OehdWghtOride, OehdCcInfo, OehdBoxCount, OehdRqstDate, OehdCancDate, OehdCrntUser, OehdReleaseNbr, IntbWhse, OehdBordBuildDate, OehdDeptCode, OehdFrtInEntered, OehdDropShipEntered, OehdErFlag, OehdFrtIn, OehdDropShip, OehdMinOrder, OehdContractTerms, OehdDropShipBilled, OehdOrdTyp, OehdTrackNbr, OehdSource, OehdCcAprv, OehdPickFmatType, OehdInvcFmatType, OehdCashAmt, OehdCheckAmt, OehdCheckNbr, OehdDepositAmt, OehdDepositNbr, OehdCcAmt, OehdOTaxSub, OehdONonTaxSub, OehdOTaxTot, OehdOOrdrTot, OehdPickPrintDate, OehdPickPrintTime, OehdCont, OehdContTeleIntl, OehdContTeleNbr, OehdContTeleExt, OehdContFaxIntl, OehdContFaxNbr, OehdShipAcct, OehdChgDue, OehdAddlPricDisc, OehdAllShip, OehdQtyOrderAmt, OehdCreditApplied, OehdInvcPrintDate, OehdInvcPrintTime, OehdDiscFrt, OehdOrideShipComp, OehdContEmail, OehdManualFrt, OehdInternalFrt, OehdFrtCost, OehdRoute, OehdRouteSeq, OehdFrtTaxCode1, OehdFrtTaxAmt1, OehdFrtTaxCode2, OehdFrtTaxAmt2, OehdFrtTaxCode3, OehdFrtTaxAmt3, OehdFrtTaxCode4, OehdFrtTaxAmt4, OehdFrtTaxCode5, OehdFrtTaxAmt5, OehdEdi855Sent, OehdFrt3rdParty, OehdFob, OehdConfirmImagYn, OehdIndustConform, OehdCstkConsign, OehdLmDelayCapSent, OehdMfgId, OehdStoreId, OehdPickQueue, OehdArrvDate, OehdSurchgStat, OehdFrtGrup, OehdCommOride, OehdChrgSplt, OehdAcCcAprv, OehdOrigOrdrNbr, OehdPostDate, OehdDiscDate1, OehdDiscPct1, OehdDueDate1, OehdDueAmt1, OehdDuePct1, OehdDiscDate2, OehdDiscPct2, OehdDueDate2, OehdDueAmt2, OehdDuePct2, OehdDiscDate3, OehdDiscPct3, OehdDueDate3, OehdDueAmt3, OehdDuePct3, OehdDiscDate4, OehdDiscPct4, OehdDueDate4, OehdDueAmt4, OehdDuePct4, OehdDiscDate5, OehdDiscPct5, OehdDueDate5, OehdDueAmt5, OehdDuePct5, OehdDiscDate6, OehdDiscPct6, OehdDueDate6, OehdDueAmt6, OehdDuePct6, DateUpdtd, TimeUpdtd, dummy FROM so_header WHERE OehdNbr = :p0';
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
            /** @var ChildSoHeader $obj */
            $obj = new ChildSoHeader();
            $obj->hydrate($row);
            SoHeaderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSoHeader|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDNBR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OehdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdnbr('fooValue');   // WHERE OehdNbr = 'fooValue'
     * $query->filterByOehdnbr('%fooValue%', Criteria::LIKE); // WHERE OehdNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdnbr($oehdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDNBR, $oehdnbr, $comparison);
    }

    /**
     * Filter the query on the OehdStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstat('fooValue');   // WHERE OehdStat = 'fooValue'
     * $query->filterByOehdstat('%fooValue%', Criteria::LIKE); // WHERE OehdStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstat($oehdstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTAT, $oehdstat, $comparison);
    }

    /**
     * Filter the query on the OehdHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdhold('fooValue');   // WHERE OehdHold = 'fooValue'
     * $query->filterByOehdhold('%fooValue%', Criteria::LIKE); // WHERE OehdHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdhold($oehdhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDHOLD, $oehdhold, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the OehdStName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstname('fooValue');   // WHERE OehdStName = 'fooValue'
     * $query->filterByOehdstname('%fooValue%', Criteria::LIKE); // WHERE OehdStName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstname($oehdstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTNAME, $oehdstname, $comparison);
    }

    /**
     * Filter the query on the OehdStLastName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstlastname('fooValue');   // WHERE OehdStLastName = 'fooValue'
     * $query->filterByOehdstlastname('%fooValue%', Criteria::LIKE); // WHERE OehdStLastName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstlastname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstlastname($oehdstlastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstlastname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTLASTNAME, $oehdstlastname, $comparison);
    }

    /**
     * Filter the query on the OehdStFirstName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstfirstname('fooValue');   // WHERE OehdStFirstName = 'fooValue'
     * $query->filterByOehdstfirstname('%fooValue%', Criteria::LIKE); // WHERE OehdStFirstName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstfirstname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstfirstname($oehdstfirstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstfirstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTFIRSTNAME, $oehdstfirstname, $comparison);
    }

    /**
     * Filter the query on the OehdStAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstadr1('fooValue');   // WHERE OehdStAdr1 = 'fooValue'
     * $query->filterByOehdstadr1('%fooValue%', Criteria::LIKE); // WHERE OehdStAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstadr1($oehdstadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTADR1, $oehdstadr1, $comparison);
    }

    /**
     * Filter the query on the OehdStAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstadr2('fooValue');   // WHERE OehdStAdr2 = 'fooValue'
     * $query->filterByOehdstadr2('%fooValue%', Criteria::LIKE); // WHERE OehdStAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstadr2($oehdstadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTADR2, $oehdstadr2, $comparison);
    }

    /**
     * Filter the query on the OehdStAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstadr3('fooValue');   // WHERE OehdStAdr3 = 'fooValue'
     * $query->filterByOehdstadr3('%fooValue%', Criteria::LIKE); // WHERE OehdStAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstadr3($oehdstadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTADR3, $oehdstadr3, $comparison);
    }

    /**
     * Filter the query on the OehdStCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstctry('fooValue');   // WHERE OehdStCtry = 'fooValue'
     * $query->filterByOehdstctry('%fooValue%', Criteria::LIKE); // WHERE OehdStCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstctry($oehdstctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTCTRY, $oehdstctry, $comparison);
    }

    /**
     * Filter the query on the OehdStCity column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstcity('fooValue');   // WHERE OehdStCity = 'fooValue'
     * $query->filterByOehdstcity('%fooValue%', Criteria::LIKE); // WHERE OehdStCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstcity($oehdstcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTCITY, $oehdstcity, $comparison);
    }

    /**
     * Filter the query on the OehdStStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdststat('fooValue');   // WHERE OehdStStat = 'fooValue'
     * $query->filterByOehdststat('%fooValue%', Criteria::LIKE); // WHERE OehdStStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdststat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdststat($oehdststat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdststat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTSTAT, $oehdststat, $comparison);
    }

    /**
     * Filter the query on the OehdStZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstzipcode('fooValue');   // WHERE OehdStZipCode = 'fooValue'
     * $query->filterByOehdstzipcode('%fooValue%', Criteria::LIKE); // WHERE OehdStZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstzipcode($oehdstzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTZIPCODE, $oehdstzipcode, $comparison);
    }

    /**
     * Filter the query on the OehdCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcustpo('fooValue');   // WHERE OehdCustPo = 'fooValue'
     * $query->filterByOehdcustpo('%fooValue%', Criteria::LIKE); // WHERE OehdCustPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcustpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcustpo($oehdcustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCUSTPO, $oehdcustpo, $comparison);
    }

    /**
     * Filter the query on the OehdOrdrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdordrdate('fooValue');   // WHERE OehdOrdrDate = 'fooValue'
     * $query->filterByOehdordrdate('%fooValue%', Criteria::LIKE); // WHERE OehdOrdrDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdordrdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdordrdate($oehdordrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDORDRDATE, $oehdordrdate, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByArininvnbr($arininvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arininvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_ARININVNBR, $arininvnbr, $comparison);
    }

    /**
     * Filter the query on the OehdInvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdinvdate('fooValue');   // WHERE OehdInvDate = 'fooValue'
     * $query->filterByOehdinvdate('%fooValue%', Criteria::LIKE); // WHERE OehdInvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdinvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdinvdate($oehdinvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDINVDATE, $oehdinvdate, $comparison);
    }

    /**
     * Filter the query on the OehdGLPd column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdglpd(1234); // WHERE OehdGLPd = 1234
     * $query->filterByOehdglpd(array(12, 34)); // WHERE OehdGLPd IN (12, 34)
     * $query->filterByOehdglpd(array('min' => 12)); // WHERE OehdGLPd > 12
     * </code>
     *
     * @param     mixed $oehdglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdglpd($oehdglpd = null, $comparison = null)
    {
        if (is_array($oehdglpd)) {
            $useMinMax = false;
            if (isset($oehdglpd['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDGLPD, $oehdglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdglpd['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDGLPD, $oehdglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDGLPD, $oehdglpd, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the OehdSp1Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdsp1pct(1234); // WHERE OehdSp1Pct = 1234
     * $query->filterByOehdsp1pct(array(12, 34)); // WHERE OehdSp1Pct IN (12, 34)
     * $query->filterByOehdsp1pct(array('min' => 12)); // WHERE OehdSp1Pct > 12
     * </code>
     *
     * @param     mixed $oehdsp1pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdsp1pct($oehdsp1pct = null, $comparison = null)
    {
        if (is_array($oehdsp1pct)) {
            $useMinMax = false;
            if (isset($oehdsp1pct['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP1PCT, $oehdsp1pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdsp1pct['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP1PCT, $oehdsp1pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP1PCT, $oehdsp1pct, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
    }

    /**
     * Filter the query on the OehdSp2Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdsp2pct(1234); // WHERE OehdSp2Pct = 1234
     * $query->filterByOehdsp2pct(array(12, 34)); // WHERE OehdSp2Pct IN (12, 34)
     * $query->filterByOehdsp2pct(array('min' => 12)); // WHERE OehdSp2Pct > 12
     * </code>
     *
     * @param     mixed $oehdsp2pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdsp2pct($oehdsp2pct = null, $comparison = null)
    {
        if (is_array($oehdsp2pct)) {
            $useMinMax = false;
            if (isset($oehdsp2pct['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP2PCT, $oehdsp2pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdsp2pct['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP2PCT, $oehdsp2pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP2PCT, $oehdsp2pct, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
    }

    /**
     * Filter the query on the OehdSp3Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdsp3pct(1234); // WHERE OehdSp3Pct = 1234
     * $query->filterByOehdsp3pct(array(12, 34)); // WHERE OehdSp3Pct IN (12, 34)
     * $query->filterByOehdsp3pct(array('min' => 12)); // WHERE OehdSp3Pct > 12
     * </code>
     *
     * @param     mixed $oehdsp3pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdsp3pct($oehdsp3pct = null, $comparison = null)
    {
        if (is_array($oehdsp3pct)) {
            $useMinMax = false;
            if (isset($oehdsp3pct['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP3PCT, $oehdsp3pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdsp3pct['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP3PCT, $oehdsp3pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSP3PCT, $oehdsp3pct, $comparison);
    }

    /**
     * Filter the query on the OehdCntrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcntrnbr(1234); // WHERE OehdCntrNbr = 1234
     * $query->filterByOehdcntrnbr(array(12, 34)); // WHERE OehdCntrNbr IN (12, 34)
     * $query->filterByOehdcntrnbr(array('min' => 12)); // WHERE OehdCntrNbr > 12
     * </code>
     *
     * @param     mixed $oehdcntrnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcntrnbr($oehdcntrnbr = null, $comparison = null)
    {
        if (is_array($oehdcntrnbr)) {
            $useMinMax = false;
            if (isset($oehdcntrnbr['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCNTRNBR, $oehdcntrnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcntrnbr['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCNTRNBR, $oehdcntrnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCNTRNBR, $oehdcntrnbr, $comparison);
    }

    /**
     * Filter the query on the OehdWiBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdwibatch(1234); // WHERE OehdWiBatch = 1234
     * $query->filterByOehdwibatch(array(12, 34)); // WHERE OehdWiBatch IN (12, 34)
     * $query->filterByOehdwibatch(array('min' => 12)); // WHERE OehdWiBatch > 12
     * </code>
     *
     * @param     mixed $oehdwibatch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdwibatch($oehdwibatch = null, $comparison = null)
    {
        if (is_array($oehdwibatch)) {
            $useMinMax = false;
            if (isset($oehdwibatch['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDWIBATCH, $oehdwibatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdwibatch['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDWIBATCH, $oehdwibatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDWIBATCH, $oehdwibatch, $comparison);
    }

    /**
     * Filter the query on the OehdDropRelHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddroprelhold('fooValue');   // WHERE OehdDropRelHold = 'fooValue'
     * $query->filterByOehddroprelhold('%fooValue%', Criteria::LIKE); // WHERE OehdDropRelHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddroprelhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddroprelhold($oehddroprelhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddroprelhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDROPRELHOLD, $oehddroprelhold, $comparison);
    }

    /**
     * Filter the query on the OehdTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdtaxsub(1234); // WHERE OehdTaxSub = 1234
     * $query->filterByOehdtaxsub(array(12, 34)); // WHERE OehdTaxSub IN (12, 34)
     * $query->filterByOehdtaxsub(array('min' => 12)); // WHERE OehdTaxSub > 12
     * </code>
     *
     * @param     mixed $oehdtaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdtaxsub($oehdtaxsub = null, $comparison = null)
    {
        if (is_array($oehdtaxsub)) {
            $useMinMax = false;
            if (isset($oehdtaxsub['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAXSUB, $oehdtaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdtaxsub['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAXSUB, $oehdtaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAXSUB, $oehdtaxsub, $comparison);
    }

    /**
     * Filter the query on the OehdNonTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdnontaxsub(1234); // WHERE OehdNonTaxSub = 1234
     * $query->filterByOehdnontaxsub(array(12, 34)); // WHERE OehdNonTaxSub IN (12, 34)
     * $query->filterByOehdnontaxsub(array('min' => 12)); // WHERE OehdNonTaxSub > 12
     * </code>
     *
     * @param     mixed $oehdnontaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdnontaxsub($oehdnontaxsub = null, $comparison = null)
    {
        if (is_array($oehdnontaxsub)) {
            $useMinMax = false;
            if (isset($oehdnontaxsub['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDNONTAXSUB, $oehdnontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdnontaxsub['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDNONTAXSUB, $oehdnontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDNONTAXSUB, $oehdnontaxsub, $comparison);
    }

    /**
     * Filter the query on the OehdTaxTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdtaxtot(1234); // WHERE OehdTaxTot = 1234
     * $query->filterByOehdtaxtot(array(12, 34)); // WHERE OehdTaxTot IN (12, 34)
     * $query->filterByOehdtaxtot(array('min' => 12)); // WHERE OehdTaxTot > 12
     * </code>
     *
     * @param     mixed $oehdtaxtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdtaxtot($oehdtaxtot = null, $comparison = null)
    {
        if (is_array($oehdtaxtot)) {
            $useMinMax = false;
            if (isset($oehdtaxtot['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAXTOT, $oehdtaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdtaxtot['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAXTOT, $oehdtaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAXTOT, $oehdtaxtot, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttot(1234); // WHERE OehdFrtTot = 1234
     * $query->filterByOehdfrttot(array(12, 34)); // WHERE OehdFrtTot IN (12, 34)
     * $query->filterByOehdfrttot(array('min' => 12)); // WHERE OehdFrtTot > 12
     * </code>
     *
     * @param     mixed $oehdfrttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttot($oehdfrttot = null, $comparison = null)
    {
        if (is_array($oehdfrttot)) {
            $useMinMax = false;
            if (isset($oehdfrttot['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTOT, $oehdfrttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttot['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTOT, $oehdfrttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTOT, $oehdfrttot, $comparison);
    }

    /**
     * Filter the query on the OehdMiscTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdmisctot(1234); // WHERE OehdMiscTot = 1234
     * $query->filterByOehdmisctot(array(12, 34)); // WHERE OehdMiscTot IN (12, 34)
     * $query->filterByOehdmisctot(array('min' => 12)); // WHERE OehdMiscTot > 12
     * </code>
     *
     * @param     mixed $oehdmisctot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdmisctot($oehdmisctot = null, $comparison = null)
    {
        if (is_array($oehdmisctot)) {
            $useMinMax = false;
            if (isset($oehdmisctot['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDMISCTOT, $oehdmisctot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdmisctot['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDMISCTOT, $oehdmisctot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDMISCTOT, $oehdmisctot, $comparison);
    }

    /**
     * Filter the query on the OehdOrdrTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdordrtot(1234); // WHERE OehdOrdrTot = 1234
     * $query->filterByOehdordrtot(array(12, 34)); // WHERE OehdOrdrTot IN (12, 34)
     * $query->filterByOehdordrtot(array('min' => 12)); // WHERE OehdOrdrTot > 12
     * </code>
     *
     * @param     mixed $oehdordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdordrtot($oehdordrtot = null, $comparison = null)
    {
        if (is_array($oehdordrtot)) {
            $useMinMax = false;
            if (isset($oehdordrtot['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDORDRTOT, $oehdordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdordrtot['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDORDRTOT, $oehdordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDORDRTOT, $oehdordrtot, $comparison);
    }

    /**
     * Filter the query on the OehdCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcosttot(1234); // WHERE OehdCostTot = 1234
     * $query->filterByOehdcosttot(array(12, 34)); // WHERE OehdCostTot IN (12, 34)
     * $query->filterByOehdcosttot(array('min' => 12)); // WHERE OehdCostTot > 12
     * </code>
     *
     * @param     mixed $oehdcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcosttot($oehdcosttot = null, $comparison = null)
    {
        if (is_array($oehdcosttot)) {
            $useMinMax = false;
            if (isset($oehdcosttot['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCOSTTOT, $oehdcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcosttot['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCOSTTOT, $oehdcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCOSTTOT, $oehdcosttot, $comparison);
    }

    /**
     * Filter the query on the OehdSpCommLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdspcommlock('fooValue');   // WHERE OehdSpCommLock = 'fooValue'
     * $query->filterByOehdspcommlock('%fooValue%', Criteria::LIKE); // WHERE OehdSpCommLock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdspcommlock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdspcommlock($oehdspcommlock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdspcommlock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSPCOMMLOCK, $oehdspcommlock, $comparison);
    }

    /**
     * Filter the query on the OehdTakenDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdtakendate('fooValue');   // WHERE OehdTakenDate = 'fooValue'
     * $query->filterByOehdtakendate('%fooValue%', Criteria::LIKE); // WHERE OehdTakenDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdtakendate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdtakendate($oehdtakendate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdtakendate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAKENDATE, $oehdtakendate, $comparison);
    }

    /**
     * Filter the query on the OehdTakenTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdtakentime('fooValue');   // WHERE OehdTakenTime = 'fooValue'
     * $query->filterByOehdtakentime('%fooValue%', Criteria::LIKE); // WHERE OehdTakenTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdtakentime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdtakentime($oehdtakentime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdtakentime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAKENTIME, $oehdtakentime, $comparison);
    }

    /**
     * Filter the query on the OehdPickDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpickdate('fooValue');   // WHERE OehdPickDate = 'fooValue'
     * $query->filterByOehdpickdate('%fooValue%', Criteria::LIKE); // WHERE OehdPickDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpickdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpickdate($oehdpickdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPICKDATE, $oehdpickdate, $comparison);
    }

    /**
     * Filter the query on the OehdPickTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpicktime('fooValue');   // WHERE OehdPickTime = 'fooValue'
     * $query->filterByOehdpicktime('%fooValue%', Criteria::LIKE); // WHERE OehdPickTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpicktime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpicktime($oehdpicktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpicktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPICKTIME, $oehdpicktime, $comparison);
    }

    /**
     * Filter the query on the OehdPackDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpackdate('fooValue');   // WHERE OehdPackDate = 'fooValue'
     * $query->filterByOehdpackdate('%fooValue%', Criteria::LIKE); // WHERE OehdPackDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpackdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpackdate($oehdpackdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpackdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPACKDATE, $oehdpackdate, $comparison);
    }

    /**
     * Filter the query on the OehdPackTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpacktime('fooValue');   // WHERE OehdPackTime = 'fooValue'
     * $query->filterByOehdpacktime('%fooValue%', Criteria::LIKE); // WHERE OehdPackTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpacktime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpacktime($oehdpacktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpacktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPACKTIME, $oehdpacktime, $comparison);
    }

    /**
     * Filter the query on the OehdVerifyDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdverifydate('fooValue');   // WHERE OehdVerifyDate = 'fooValue'
     * $query->filterByOehdverifydate('%fooValue%', Criteria::LIKE); // WHERE OehdVerifyDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdverifydate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdverifydate($oehdverifydate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdverifydate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDVERIFYDATE, $oehdverifydate, $comparison);
    }

    /**
     * Filter the query on the OehdVerifyTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdverifytime('fooValue');   // WHERE OehdVerifyTime = 'fooValue'
     * $query->filterByOehdverifytime('%fooValue%', Criteria::LIKE); // WHERE OehdVerifyTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdverifytime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdverifytime($oehdverifytime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdverifytime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDVERIFYTIME, $oehdverifytime, $comparison);
    }

    /**
     * Filter the query on the OehdCreditMemo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcreditmemo('fooValue');   // WHERE OehdCreditMemo = 'fooValue'
     * $query->filterByOehdcreditmemo('%fooValue%', Criteria::LIKE); // WHERE OehdCreditMemo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcreditmemo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcreditmemo($oehdcreditmemo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcreditmemo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCREDITMEMO, $oehdcreditmemo, $comparison);
    }

    /**
     * Filter the query on the OehdBookedYn column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdbookedyn('fooValue');   // WHERE OehdBookedYn = 'fooValue'
     * $query->filterByOehdbookedyn('%fooValue%', Criteria::LIKE); // WHERE OehdBookedYn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdbookedyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdbookedyn($oehdbookedyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdbookedyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDBOOKEDYN, $oehdbookedyn, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByIntbwhseorig($intbwhseorig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseorig)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_INTBWHSEORIG, $intbwhseorig, $comparison);
    }

    /**
     * Filter the query on the OehdBtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdbtstat('fooValue');   // WHERE OehdBtStat = 'fooValue'
     * $query->filterByOehdbtstat('%fooValue%', Criteria::LIKE); // WHERE OehdBtStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdbtstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdbtstat($oehdbtstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdbtstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDBTSTAT, $oehdbtstat, $comparison);
    }

    /**
     * Filter the query on the OehdShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdshipcomp('fooValue');   // WHERE OehdShipComp = 'fooValue'
     * $query->filterByOehdshipcomp('%fooValue%', Criteria::LIKE); // WHERE OehdShipComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdshipcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdshipcomp($oehdshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSHIPCOMP, $oehdshipcomp, $comparison);
    }

    /**
     * Filter the query on the OehdCwoFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcwoflag('fooValue');   // WHERE OehdCwoFlag = 'fooValue'
     * $query->filterByOehdcwoflag('%fooValue%', Criteria::LIKE); // WHERE OehdCwoFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcwoflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcwoflag($oehdcwoflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcwoflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCWOFLAG, $oehdcwoflag, $comparison);
    }

    /**
     * Filter the query on the OehdDivision column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddivision('fooValue');   // WHERE OehdDivision = 'fooValue'
     * $query->filterByOehddivision('%fooValue%', Criteria::LIKE); // WHERE OehdDivision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddivision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddivision($oehddivision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddivision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDIVISION, $oehddivision, $comparison);
    }

    /**
     * Filter the query on the OehdTakenCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdtakencode('fooValue');   // WHERE OehdTakenCode = 'fooValue'
     * $query->filterByOehdtakencode('%fooValue%', Criteria::LIKE); // WHERE OehdTakenCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdtakencode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdtakencode($oehdtakencode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdtakencode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTAKENCODE, $oehdtakencode, $comparison);
    }

    /**
     * Filter the query on the OehdPickCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpickcode('fooValue');   // WHERE OehdPickCode = 'fooValue'
     * $query->filterByOehdpickcode('%fooValue%', Criteria::LIKE); // WHERE OehdPickCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpickcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpickcode($oehdpickcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPICKCODE, $oehdpickcode, $comparison);
    }

    /**
     * Filter the query on the OehdPackCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpackcode('fooValue');   // WHERE OehdPackCode = 'fooValue'
     * $query->filterByOehdpackcode('%fooValue%', Criteria::LIKE); // WHERE OehdPackCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpackcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpackcode($oehdpackcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpackcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPACKCODE, $oehdpackcode, $comparison);
    }

    /**
     * Filter the query on the OehdVerifyCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdverifycode('fooValue');   // WHERE OehdVerifyCode = 'fooValue'
     * $query->filterByOehdverifycode('%fooValue%', Criteria::LIKE); // WHERE OehdVerifyCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdverifycode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdverifycode($oehdverifycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdverifycode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDVERIFYCODE, $oehdverifycode, $comparison);
    }

    /**
     * Filter the query on the OehdTotDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdtotdisc(1234); // WHERE OehdTotDisc = 1234
     * $query->filterByOehdtotdisc(array(12, 34)); // WHERE OehdTotDisc IN (12, 34)
     * $query->filterByOehdtotdisc(array('min' => 12)); // WHERE OehdTotDisc > 12
     * </code>
     *
     * @param     mixed $oehdtotdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdtotdisc($oehdtotdisc = null, $comparison = null)
    {
        if (is_array($oehdtotdisc)) {
            $useMinMax = false;
            if (isset($oehdtotdisc['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTOTDISC, $oehdtotdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdtotdisc['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTOTDISC, $oehdtotdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTOTDISC, $oehdtotdisc, $comparison);
    }

    /**
     * Filter the query on the OehdEdiRefNbrQual column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdedirefnbrqual('fooValue');   // WHERE OehdEdiRefNbrQual = 'fooValue'
     * $query->filterByOehdedirefnbrqual('%fooValue%', Criteria::LIKE); // WHERE OehdEdiRefNbrQual LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdedirefnbrqual The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdedirefnbrqual($oehdedirefnbrqual = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdedirefnbrqual)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL, $oehdedirefnbrqual, $comparison);
    }

    /**
     * Filter the query on the OehdUserCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdusercode1('fooValue');   // WHERE OehdUserCode1 = 'fooValue'
     * $query->filterByOehdusercode1('%fooValue%', Criteria::LIKE); // WHERE OehdUserCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdusercode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdusercode1($oehdusercode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDUSERCODE1, $oehdusercode1, $comparison);
    }

    /**
     * Filter the query on the OehdUserCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdusercode2('fooValue');   // WHERE OehdUserCode2 = 'fooValue'
     * $query->filterByOehdusercode2('%fooValue%', Criteria::LIKE); // WHERE OehdUserCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdusercode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdusercode2($oehdusercode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDUSERCODE2, $oehdusercode2, $comparison);
    }

    /**
     * Filter the query on the OehdUserCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdusercode3('fooValue');   // WHERE OehdUserCode3 = 'fooValue'
     * $query->filterByOehdusercode3('%fooValue%', Criteria::LIKE); // WHERE OehdUserCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdusercode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdusercode3($oehdusercode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDUSERCODE3, $oehdusercode3, $comparison);
    }

    /**
     * Filter the query on the OehdUserCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdusercode4('fooValue');   // WHERE OehdUserCode4 = 'fooValue'
     * $query->filterByOehdusercode4('%fooValue%', Criteria::LIKE); // WHERE OehdUserCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdusercode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdusercode4($oehdusercode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDUSERCODE4, $oehdusercode4, $comparison);
    }

    /**
     * Filter the query on the OehdExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdexchctry('fooValue');   // WHERE OehdExchCtry = 'fooValue'
     * $query->filterByOehdexchctry('%fooValue%', Criteria::LIKE); // WHERE OehdExchCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdexchctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdexchctry($oehdexchctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDEXCHCTRY, $oehdexchctry, $comparison);
    }

    /**
     * Filter the query on the OehdExchRate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdexchrate(1234); // WHERE OehdExchRate = 1234
     * $query->filterByOehdexchrate(array(12, 34)); // WHERE OehdExchRate IN (12, 34)
     * $query->filterByOehdexchrate(array('min' => 12)); // WHERE OehdExchRate > 12
     * </code>
     *
     * @param     mixed $oehdexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdexchrate($oehdexchrate = null, $comparison = null)
    {
        if (is_array($oehdexchrate)) {
            $useMinMax = false;
            if (isset($oehdexchrate['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDEXCHRATE, $oehdexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdexchrate['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDEXCHRATE, $oehdexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDEXCHRATE, $oehdexchrate, $comparison);
    }

    /**
     * Filter the query on the OehdWghtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdwghttot(1234); // WHERE OehdWghtTot = 1234
     * $query->filterByOehdwghttot(array(12, 34)); // WHERE OehdWghtTot IN (12, 34)
     * $query->filterByOehdwghttot(array('min' => 12)); // WHERE OehdWghtTot > 12
     * </code>
     *
     * @param     mixed $oehdwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdwghttot($oehdwghttot = null, $comparison = null)
    {
        if (is_array($oehdwghttot)) {
            $useMinMax = false;
            if (isset($oehdwghttot['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDWGHTTOT, $oehdwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdwghttot['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDWGHTTOT, $oehdwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDWGHTTOT, $oehdwghttot, $comparison);
    }

    /**
     * Filter the query on the OehdWghtOride column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdwghtoride('fooValue');   // WHERE OehdWghtOride = 'fooValue'
     * $query->filterByOehdwghtoride('%fooValue%', Criteria::LIKE); // WHERE OehdWghtOride LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdwghtoride The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdwghtoride($oehdwghtoride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdwghtoride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDWGHTORIDE, $oehdwghtoride, $comparison);
    }

    /**
     * Filter the query on the OehdCcInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdccinfo('fooValue');   // WHERE OehdCcInfo = 'fooValue'
     * $query->filterByOehdccinfo('%fooValue%', Criteria::LIKE); // WHERE OehdCcInfo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdccinfo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdccinfo($oehdccinfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdccinfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCCINFO, $oehdccinfo, $comparison);
    }

    /**
     * Filter the query on the OehdBoxCount column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdboxcount(1234); // WHERE OehdBoxCount = 1234
     * $query->filterByOehdboxcount(array(12, 34)); // WHERE OehdBoxCount IN (12, 34)
     * $query->filterByOehdboxcount(array('min' => 12)); // WHERE OehdBoxCount > 12
     * </code>
     *
     * @param     mixed $oehdboxcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdboxcount($oehdboxcount = null, $comparison = null)
    {
        if (is_array($oehdboxcount)) {
            $useMinMax = false;
            if (isset($oehdboxcount['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDBOXCOUNT, $oehdboxcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdboxcount['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDBOXCOUNT, $oehdboxcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDBOXCOUNT, $oehdboxcount, $comparison);
    }

    /**
     * Filter the query on the OehdRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdrqstdate('fooValue');   // WHERE OehdRqstDate = 'fooValue'
     * $query->filterByOehdrqstdate('%fooValue%', Criteria::LIKE); // WHERE OehdRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdrqstdate($oehdrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDRQSTDATE, $oehdrqstdate, $comparison);
    }

    /**
     * Filter the query on the OehdCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcancdate('fooValue');   // WHERE OehdCancDate = 'fooValue'
     * $query->filterByOehdcancdate('%fooValue%', Criteria::LIKE); // WHERE OehdCancDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcancdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcancdate($oehdcancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCANCDATE, $oehdcancdate, $comparison);
    }

    /**
     * Filter the query on the OehdCrntUser column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcrntuser('fooValue');   // WHERE OehdCrntUser = 'fooValue'
     * $query->filterByOehdcrntuser('%fooValue%', Criteria::LIKE); // WHERE OehdCrntUser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcrntuser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcrntuser($oehdcrntuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcrntuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCRNTUSER, $oehdcrntuser, $comparison);
    }

    /**
     * Filter the query on the OehdReleaseNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdreleasenbr('fooValue');   // WHERE OehdReleaseNbr = 'fooValue'
     * $query->filterByOehdreleasenbr('%fooValue%', Criteria::LIKE); // WHERE OehdReleaseNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdreleasenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdreleasenbr($oehdreleasenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdreleasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDRELEASENBR, $oehdreleasenbr, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the OehdBordBuildDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdbordbuilddate('fooValue');   // WHERE OehdBordBuildDate = 'fooValue'
     * $query->filterByOehdbordbuilddate('%fooValue%', Criteria::LIKE); // WHERE OehdBordBuildDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdbordbuilddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdbordbuilddate($oehdbordbuilddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdbordbuilddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDBORDBUILDDATE, $oehdbordbuilddate, $comparison);
    }

    /**
     * Filter the query on the OehdDeptCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddeptcode('fooValue');   // WHERE OehdDeptCode = 'fooValue'
     * $query->filterByOehddeptcode('%fooValue%', Criteria::LIKE); // WHERE OehdDeptCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddeptcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddeptcode($oehddeptcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddeptcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDEPTCODE, $oehddeptcode, $comparison);
    }

    /**
     * Filter the query on the OehdFrtInEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrtinentered('fooValue');   // WHERE OehdFrtInEntered = 'fooValue'
     * $query->filterByOehdfrtinentered('%fooValue%', Criteria::LIKE); // WHERE OehdFrtInEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdfrtinentered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrtinentered($oehdfrtinentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTINENTERED, $oehdfrtinentered, $comparison);
    }

    /**
     * Filter the query on the OehdDropShipEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddropshipentered('fooValue');   // WHERE OehdDropShipEntered = 'fooValue'
     * $query->filterByOehddropshipentered('%fooValue%', Criteria::LIKE); // WHERE OehdDropShipEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddropshipentered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddropshipentered($oehddropshipentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddropshipentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDROPSHIPENTERED, $oehddropshipentered, $comparison);
    }

    /**
     * Filter the query on the OehdErFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOehderflag('fooValue');   // WHERE OehdErFlag = 'fooValue'
     * $query->filterByOehderflag('%fooValue%', Criteria::LIKE); // WHERE OehdErFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehderflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehderflag($oehderflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehderflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDERFLAG, $oehderflag, $comparison);
    }

    /**
     * Filter the query on the OehdFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrtin(1234); // WHERE OehdFrtIn = 1234
     * $query->filterByOehdfrtin(array(12, 34)); // WHERE OehdFrtIn IN (12, 34)
     * $query->filterByOehdfrtin(array('min' => 12)); // WHERE OehdFrtIn > 12
     * </code>
     *
     * @param     mixed $oehdfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrtin($oehdfrtin = null, $comparison = null)
    {
        if (is_array($oehdfrtin)) {
            $useMinMax = false;
            if (isset($oehdfrtin['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTIN, $oehdfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrtin['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTIN, $oehdfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTIN, $oehdfrtin, $comparison);
    }

    /**
     * Filter the query on the OehdDropShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddropship(1234); // WHERE OehdDropShip = 1234
     * $query->filterByOehddropship(array(12, 34)); // WHERE OehdDropShip IN (12, 34)
     * $query->filterByOehddropship(array('min' => 12)); // WHERE OehdDropShip > 12
     * </code>
     *
     * @param     mixed $oehddropship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddropship($oehddropship = null, $comparison = null)
    {
        if (is_array($oehddropship)) {
            $useMinMax = false;
            if (isset($oehddropship['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDROPSHIP, $oehddropship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddropship['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDROPSHIP, $oehddropship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDROPSHIP, $oehddropship, $comparison);
    }

    /**
     * Filter the query on the OehdMinOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdminorder(1234); // WHERE OehdMinOrder = 1234
     * $query->filterByOehdminorder(array(12, 34)); // WHERE OehdMinOrder IN (12, 34)
     * $query->filterByOehdminorder(array('min' => 12)); // WHERE OehdMinOrder > 12
     * </code>
     *
     * @param     mixed $oehdminorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdminorder($oehdminorder = null, $comparison = null)
    {
        if (is_array($oehdminorder)) {
            $useMinMax = false;
            if (isset($oehdminorder['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDMINORDER, $oehdminorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdminorder['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDMINORDER, $oehdminorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDMINORDER, $oehdminorder, $comparison);
    }

    /**
     * Filter the query on the OehdContractTerms column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcontractterms('fooValue');   // WHERE OehdContractTerms = 'fooValue'
     * $query->filterByOehdcontractterms('%fooValue%', Criteria::LIKE); // WHERE OehdContractTerms LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcontractterms The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcontractterms($oehdcontractterms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontractterms)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONTRACTTERMS, $oehdcontractterms, $comparison);
    }

    /**
     * Filter the query on the OehdDropShipBilled column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddropshipbilled('fooValue');   // WHERE OehdDropShipBilled = 'fooValue'
     * $query->filterByOehddropshipbilled('%fooValue%', Criteria::LIKE); // WHERE OehdDropShipBilled LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddropshipbilled The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddropshipbilled($oehddropshipbilled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddropshipbilled)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDROPSHIPBILLED, $oehddropshipbilled, $comparison);
    }

    /**
     * Filter the query on the OehdOrdTyp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdordtyp('fooValue');   // WHERE OehdOrdTyp = 'fooValue'
     * $query->filterByOehdordtyp('%fooValue%', Criteria::LIKE); // WHERE OehdOrdTyp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdordtyp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdordtyp($oehdordtyp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdordtyp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDORDTYP, $oehdordtyp, $comparison);
    }

    /**
     * Filter the query on the OehdTrackNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdtracknbr('fooValue');   // WHERE OehdTrackNbr = 'fooValue'
     * $query->filterByOehdtracknbr('%fooValue%', Criteria::LIKE); // WHERE OehdTrackNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdtracknbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdtracknbr($oehdtracknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDTRACKNBR, $oehdtracknbr, $comparison);
    }

    /**
     * Filter the query on the OehdSource column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdsource('fooValue');   // WHERE OehdSource = 'fooValue'
     * $query->filterByOehdsource('%fooValue%', Criteria::LIKE); // WHERE OehdSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdsource The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdsource($oehdsource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdsource)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSOURCE, $oehdsource, $comparison);
    }

    /**
     * Filter the query on the OehdCcAprv column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdccaprv('fooValue');   // WHERE OehdCcAprv = 'fooValue'
     * $query->filterByOehdccaprv('%fooValue%', Criteria::LIKE); // WHERE OehdCcAprv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdccaprv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdccaprv($oehdccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCCAPRV, $oehdccaprv, $comparison);
    }

    /**
     * Filter the query on the OehdPickFmatType column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpickfmattype('fooValue');   // WHERE OehdPickFmatType = 'fooValue'
     * $query->filterByOehdpickfmattype('%fooValue%', Criteria::LIKE); // WHERE OehdPickFmatType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpickfmattype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpickfmattype($oehdpickfmattype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPICKFMATTYPE, $oehdpickfmattype, $comparison);
    }

    /**
     * Filter the query on the OehdInvcFmatType column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdinvcfmattype('fooValue');   // WHERE OehdInvcFmatType = 'fooValue'
     * $query->filterByOehdinvcfmattype('%fooValue%', Criteria::LIKE); // WHERE OehdInvcFmatType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdinvcfmattype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdinvcfmattype($oehdinvcfmattype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinvcfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDINVCFMATTYPE, $oehdinvcfmattype, $comparison);
    }

    /**
     * Filter the query on the OehdCashAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcashamt(1234); // WHERE OehdCashAmt = 1234
     * $query->filterByOehdcashamt(array(12, 34)); // WHERE OehdCashAmt IN (12, 34)
     * $query->filterByOehdcashamt(array('min' => 12)); // WHERE OehdCashAmt > 12
     * </code>
     *
     * @param     mixed $oehdcashamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcashamt($oehdcashamt = null, $comparison = null)
    {
        if (is_array($oehdcashamt)) {
            $useMinMax = false;
            if (isset($oehdcashamt['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCASHAMT, $oehdcashamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcashamt['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCASHAMT, $oehdcashamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCASHAMT, $oehdcashamt, $comparison);
    }

    /**
     * Filter the query on the OehdCheckAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcheckamt(1234); // WHERE OehdCheckAmt = 1234
     * $query->filterByOehdcheckamt(array(12, 34)); // WHERE OehdCheckAmt IN (12, 34)
     * $query->filterByOehdcheckamt(array('min' => 12)); // WHERE OehdCheckAmt > 12
     * </code>
     *
     * @param     mixed $oehdcheckamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcheckamt($oehdcheckamt = null, $comparison = null)
    {
        if (is_array($oehdcheckamt)) {
            $useMinMax = false;
            if (isset($oehdcheckamt['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCHECKAMT, $oehdcheckamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcheckamt['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCHECKAMT, $oehdcheckamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCHECKAMT, $oehdcheckamt, $comparison);
    }

    /**
     * Filter the query on the OehdCheckNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdchecknbr('fooValue');   // WHERE OehdCheckNbr = 'fooValue'
     * $query->filterByOehdchecknbr('%fooValue%', Criteria::LIKE); // WHERE OehdCheckNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdchecknbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdchecknbr($oehdchecknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdchecknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCHECKNBR, $oehdchecknbr, $comparison);
    }

    /**
     * Filter the query on the OehdDepositAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddepositamt(1234); // WHERE OehdDepositAmt = 1234
     * $query->filterByOehddepositamt(array(12, 34)); // WHERE OehdDepositAmt IN (12, 34)
     * $query->filterByOehddepositamt(array('min' => 12)); // WHERE OehdDepositAmt > 12
     * </code>
     *
     * @param     mixed $oehddepositamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddepositamt($oehddepositamt = null, $comparison = null)
    {
        if (is_array($oehddepositamt)) {
            $useMinMax = false;
            if (isset($oehddepositamt['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDEPOSITAMT, $oehddepositamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddepositamt['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDEPOSITAMT, $oehddepositamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDEPOSITAMT, $oehddepositamt, $comparison);
    }

    /**
     * Filter the query on the OehdDepositNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddepositnbr('fooValue');   // WHERE OehdDepositNbr = 'fooValue'
     * $query->filterByOehddepositnbr('%fooValue%', Criteria::LIKE); // WHERE OehdDepositNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddepositnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddepositnbr($oehddepositnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddepositnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDEPOSITNBR, $oehddepositnbr, $comparison);
    }

    /**
     * Filter the query on the OehdCcAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdccamt(1234); // WHERE OehdCcAmt = 1234
     * $query->filterByOehdccamt(array(12, 34)); // WHERE OehdCcAmt IN (12, 34)
     * $query->filterByOehdccamt(array('min' => 12)); // WHERE OehdCcAmt > 12
     * </code>
     *
     * @param     mixed $oehdccamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdccamt($oehdccamt = null, $comparison = null)
    {
        if (is_array($oehdccamt)) {
            $useMinMax = false;
            if (isset($oehdccamt['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCCAMT, $oehdccamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdccamt['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCCAMT, $oehdccamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCCAMT, $oehdccamt, $comparison);
    }

    /**
     * Filter the query on the OehdOTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdotaxsub(1234); // WHERE OehdOTaxSub = 1234
     * $query->filterByOehdotaxsub(array(12, 34)); // WHERE OehdOTaxSub IN (12, 34)
     * $query->filterByOehdotaxsub(array('min' => 12)); // WHERE OehdOTaxSub > 12
     * </code>
     *
     * @param     mixed $oehdotaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdotaxsub($oehdotaxsub = null, $comparison = null)
    {
        if (is_array($oehdotaxsub)) {
            $useMinMax = false;
            if (isset($oehdotaxsub['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOTAXSUB, $oehdotaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdotaxsub['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOTAXSUB, $oehdotaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOTAXSUB, $oehdotaxsub, $comparison);
    }

    /**
     * Filter the query on the OehdONonTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdonontaxsub(1234); // WHERE OehdONonTaxSub = 1234
     * $query->filterByOehdonontaxsub(array(12, 34)); // WHERE OehdONonTaxSub IN (12, 34)
     * $query->filterByOehdonontaxsub(array('min' => 12)); // WHERE OehdONonTaxSub > 12
     * </code>
     *
     * @param     mixed $oehdonontaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdonontaxsub($oehdonontaxsub = null, $comparison = null)
    {
        if (is_array($oehdonontaxsub)) {
            $useMinMax = false;
            if (isset($oehdonontaxsub['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDONONTAXSUB, $oehdonontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdonontaxsub['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDONONTAXSUB, $oehdonontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDONONTAXSUB, $oehdonontaxsub, $comparison);
    }

    /**
     * Filter the query on the OehdOTaxTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdotaxtot(1234); // WHERE OehdOTaxTot = 1234
     * $query->filterByOehdotaxtot(array(12, 34)); // WHERE OehdOTaxTot IN (12, 34)
     * $query->filterByOehdotaxtot(array('min' => 12)); // WHERE OehdOTaxTot > 12
     * </code>
     *
     * @param     mixed $oehdotaxtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdotaxtot($oehdotaxtot = null, $comparison = null)
    {
        if (is_array($oehdotaxtot)) {
            $useMinMax = false;
            if (isset($oehdotaxtot['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOTAXTOT, $oehdotaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdotaxtot['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOTAXTOT, $oehdotaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOTAXTOT, $oehdotaxtot, $comparison);
    }

    /**
     * Filter the query on the OehdOOrdrTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdoordrtot(1234); // WHERE OehdOOrdrTot = 1234
     * $query->filterByOehdoordrtot(array(12, 34)); // WHERE OehdOOrdrTot IN (12, 34)
     * $query->filterByOehdoordrtot(array('min' => 12)); // WHERE OehdOOrdrTot > 12
     * </code>
     *
     * @param     mixed $oehdoordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdoordrtot($oehdoordrtot = null, $comparison = null)
    {
        if (is_array($oehdoordrtot)) {
            $useMinMax = false;
            if (isset($oehdoordrtot['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOORDRTOT, $oehdoordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdoordrtot['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOORDRTOT, $oehdoordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDOORDRTOT, $oehdoordrtot, $comparison);
    }

    /**
     * Filter the query on the OehdPickPrintDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpickprintdate('fooValue');   // WHERE OehdPickPrintDate = 'fooValue'
     * $query->filterByOehdpickprintdate('%fooValue%', Criteria::LIKE); // WHERE OehdPickPrintDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpickprintdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpickprintdate($oehdpickprintdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPICKPRINTDATE, $oehdpickprintdate, $comparison);
    }

    /**
     * Filter the query on the OehdPickPrintTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpickprinttime('fooValue');   // WHERE OehdPickPrintTime = 'fooValue'
     * $query->filterByOehdpickprinttime('%fooValue%', Criteria::LIKE); // WHERE OehdPickPrintTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpickprinttime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpickprinttime($oehdpickprinttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPICKPRINTTIME, $oehdpickprinttime, $comparison);
    }

    /**
     * Filter the query on the OehdCont column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcont('fooValue');   // WHERE OehdCont = 'fooValue'
     * $query->filterByOehdcont('%fooValue%', Criteria::LIKE); // WHERE OehdCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcont($oehdcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONT, $oehdcont, $comparison);
    }

    /**
     * Filter the query on the OehdContTeleIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcontteleintl('fooValue');   // WHERE OehdContTeleIntl = 'fooValue'
     * $query->filterByOehdcontteleintl('%fooValue%', Criteria::LIKE); // WHERE OehdContTeleIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcontteleintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcontteleintl($oehdcontteleintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontteleintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONTTELEINTL, $oehdcontteleintl, $comparison);
    }

    /**
     * Filter the query on the OehdContTeleNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdconttelenbr('fooValue');   // WHERE OehdContTeleNbr = 'fooValue'
     * $query->filterByOehdconttelenbr('%fooValue%', Criteria::LIKE); // WHERE OehdContTeleNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdconttelenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdconttelenbr($oehdconttelenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdconttelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONTTELENBR, $oehdconttelenbr, $comparison);
    }

    /**
     * Filter the query on the OehdContTeleExt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcontteleext('fooValue');   // WHERE OehdContTeleExt = 'fooValue'
     * $query->filterByOehdcontteleext('%fooValue%', Criteria::LIKE); // WHERE OehdContTeleExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcontteleext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcontteleext($oehdcontteleext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontteleext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONTTELEEXT, $oehdcontteleext, $comparison);
    }

    /**
     * Filter the query on the OehdContFaxIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcontfaxintl('fooValue');   // WHERE OehdContFaxIntl = 'fooValue'
     * $query->filterByOehdcontfaxintl('%fooValue%', Criteria::LIKE); // WHERE OehdContFaxIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcontfaxintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcontfaxintl($oehdcontfaxintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontfaxintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONTFAXINTL, $oehdcontfaxintl, $comparison);
    }

    /**
     * Filter the query on the OehdContFaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcontfaxnbr('fooValue');   // WHERE OehdContFaxNbr = 'fooValue'
     * $query->filterByOehdcontfaxnbr('%fooValue%', Criteria::LIKE); // WHERE OehdContFaxNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcontfaxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcontfaxnbr($oehdcontfaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONTFAXNBR, $oehdcontfaxnbr, $comparison);
    }

    /**
     * Filter the query on the OehdShipAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdshipacct('fooValue');   // WHERE OehdShipAcct = 'fooValue'
     * $query->filterByOehdshipacct('%fooValue%', Criteria::LIKE); // WHERE OehdShipAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdshipacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdshipacct($oehdshipacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdshipacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSHIPACCT, $oehdshipacct, $comparison);
    }

    /**
     * Filter the query on the OehdChgDue column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdchgdue(1234); // WHERE OehdChgDue = 1234
     * $query->filterByOehdchgdue(array(12, 34)); // WHERE OehdChgDue IN (12, 34)
     * $query->filterByOehdchgdue(array('min' => 12)); // WHERE OehdChgDue > 12
     * </code>
     *
     * @param     mixed $oehdchgdue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdchgdue($oehdchgdue = null, $comparison = null)
    {
        if (is_array($oehdchgdue)) {
            $useMinMax = false;
            if (isset($oehdchgdue['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCHGDUE, $oehdchgdue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdchgdue['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCHGDUE, $oehdchgdue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCHGDUE, $oehdchgdue, $comparison);
    }

    /**
     * Filter the query on the OehdAddlPricDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdaddlpricdisc(1234); // WHERE OehdAddlPricDisc = 1234
     * $query->filterByOehdaddlpricdisc(array(12, 34)); // WHERE OehdAddlPricDisc IN (12, 34)
     * $query->filterByOehdaddlpricdisc(array('min' => 12)); // WHERE OehdAddlPricDisc > 12
     * </code>
     *
     * @param     mixed $oehdaddlpricdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdaddlpricdisc($oehdaddlpricdisc = null, $comparison = null)
    {
        if (is_array($oehdaddlpricdisc)) {
            $useMinMax = false;
            if (isset($oehdaddlpricdisc['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDADDLPRICDISC, $oehdaddlpricdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdaddlpricdisc['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDADDLPRICDISC, $oehdaddlpricdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDADDLPRICDISC, $oehdaddlpricdisc, $comparison);
    }

    /**
     * Filter the query on the OehdAllShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdallship('fooValue');   // WHERE OehdAllShip = 'fooValue'
     * $query->filterByOehdallship('%fooValue%', Criteria::LIKE); // WHERE OehdAllShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdallship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdallship($oehdallship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdallship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDALLSHIP, $oehdallship, $comparison);
    }

    /**
     * Filter the query on the OehdQtyOrderAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdqtyorderamt(1234); // WHERE OehdQtyOrderAmt = 1234
     * $query->filterByOehdqtyorderamt(array(12, 34)); // WHERE OehdQtyOrderAmt IN (12, 34)
     * $query->filterByOehdqtyorderamt(array('min' => 12)); // WHERE OehdQtyOrderAmt > 12
     * </code>
     *
     * @param     mixed $oehdqtyorderamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdqtyorderamt($oehdqtyorderamt = null, $comparison = null)
    {
        if (is_array($oehdqtyorderamt)) {
            $useMinMax = false;
            if (isset($oehdqtyorderamt['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDQTYORDERAMT, $oehdqtyorderamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdqtyorderamt['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDQTYORDERAMT, $oehdqtyorderamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDQTYORDERAMT, $oehdqtyorderamt, $comparison);
    }

    /**
     * Filter the query on the OehdCreditApplied column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcreditapplied(1234); // WHERE OehdCreditApplied = 1234
     * $query->filterByOehdcreditapplied(array(12, 34)); // WHERE OehdCreditApplied IN (12, 34)
     * $query->filterByOehdcreditapplied(array('min' => 12)); // WHERE OehdCreditApplied > 12
     * </code>
     *
     * @param     mixed $oehdcreditapplied The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcreditapplied($oehdcreditapplied = null, $comparison = null)
    {
        if (is_array($oehdcreditapplied)) {
            $useMinMax = false;
            if (isset($oehdcreditapplied['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCREDITAPPLIED, $oehdcreditapplied['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcreditapplied['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCREDITAPPLIED, $oehdcreditapplied['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCREDITAPPLIED, $oehdcreditapplied, $comparison);
    }

    /**
     * Filter the query on the OehdInvcPrintDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdinvcprintdate('fooValue');   // WHERE OehdInvcPrintDate = 'fooValue'
     * $query->filterByOehdinvcprintdate('%fooValue%', Criteria::LIKE); // WHERE OehdInvcPrintDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdinvcprintdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdinvcprintdate($oehdinvcprintdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinvcprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDINVCPRINTDATE, $oehdinvcprintdate, $comparison);
    }

    /**
     * Filter the query on the OehdInvcPrintTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdinvcprinttime('fooValue');   // WHERE OehdInvcPrintTime = 'fooValue'
     * $query->filterByOehdinvcprinttime('%fooValue%', Criteria::LIKE); // WHERE OehdInvcPrintTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdinvcprinttime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdinvcprinttime($oehdinvcprinttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinvcprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDINVCPRINTTIME, $oehdinvcprinttime, $comparison);
    }

    /**
     * Filter the query on the OehdDiscFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscfrt(1234); // WHERE OehdDiscFrt = 1234
     * $query->filterByOehddiscfrt(array(12, 34)); // WHERE OehdDiscFrt IN (12, 34)
     * $query->filterByOehddiscfrt(array('min' => 12)); // WHERE OehdDiscFrt > 12
     * </code>
     *
     * @param     mixed $oehddiscfrt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscfrt($oehddiscfrt = null, $comparison = null)
    {
        if (is_array($oehddiscfrt)) {
            $useMinMax = false;
            if (isset($oehddiscfrt['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCFRT, $oehddiscfrt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscfrt['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCFRT, $oehddiscfrt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCFRT, $oehddiscfrt, $comparison);
    }

    /**
     * Filter the query on the OehdOrideShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdorideshipcomp('fooValue');   // WHERE OehdOrideShipComp = 'fooValue'
     * $query->filterByOehdorideshipcomp('%fooValue%', Criteria::LIKE); // WHERE OehdOrideShipComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdorideshipcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdorideshipcomp($oehdorideshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdorideshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDORIDESHIPCOMP, $oehdorideshipcomp, $comparison);
    }

    /**
     * Filter the query on the OehdContEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcontemail('fooValue');   // WHERE OehdContEmail = 'fooValue'
     * $query->filterByOehdcontemail('%fooValue%', Criteria::LIKE); // WHERE OehdContEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcontemail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcontemail($oehdcontemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontemail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONTEMAIL, $oehdcontemail, $comparison);
    }

    /**
     * Filter the query on the OehdManualFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdmanualfrt('fooValue');   // WHERE OehdManualFrt = 'fooValue'
     * $query->filterByOehdmanualfrt('%fooValue%', Criteria::LIKE); // WHERE OehdManualFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdmanualfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdmanualfrt($oehdmanualfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdmanualfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDMANUALFRT, $oehdmanualfrt, $comparison);
    }

    /**
     * Filter the query on the OehdInternalFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdinternalfrt('fooValue');   // WHERE OehdInternalFrt = 'fooValue'
     * $query->filterByOehdinternalfrt('%fooValue%', Criteria::LIKE); // WHERE OehdInternalFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdinternalfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdinternalfrt($oehdinternalfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinternalfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDINTERNALFRT, $oehdinternalfrt, $comparison);
    }

    /**
     * Filter the query on the OehdFrtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrtcost(1234); // WHERE OehdFrtCost = 1234
     * $query->filterByOehdfrtcost(array(12, 34)); // WHERE OehdFrtCost IN (12, 34)
     * $query->filterByOehdfrtcost(array('min' => 12)); // WHERE OehdFrtCost > 12
     * </code>
     *
     * @param     mixed $oehdfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrtcost($oehdfrtcost = null, $comparison = null)
    {
        if (is_array($oehdfrtcost)) {
            $useMinMax = false;
            if (isset($oehdfrtcost['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTCOST, $oehdfrtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrtcost['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTCOST, $oehdfrtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTCOST, $oehdfrtcost, $comparison);
    }

    /**
     * Filter the query on the OehdRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdroute('fooValue');   // WHERE OehdRoute = 'fooValue'
     * $query->filterByOehdroute('%fooValue%', Criteria::LIKE); // WHERE OehdRoute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdroute The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdroute($oehdroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDROUTE, $oehdroute, $comparison);
    }

    /**
     * Filter the query on the OehdRouteSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdrouteseq(1234); // WHERE OehdRouteSeq = 1234
     * $query->filterByOehdrouteseq(array(12, 34)); // WHERE OehdRouteSeq IN (12, 34)
     * $query->filterByOehdrouteseq(array('min' => 12)); // WHERE OehdRouteSeq > 12
     * </code>
     *
     * @param     mixed $oehdrouteseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdrouteseq($oehdrouteseq = null, $comparison = null)
    {
        if (is_array($oehdrouteseq)) {
            $useMinMax = false;
            if (isset($oehdrouteseq['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDROUTESEQ, $oehdrouteseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdrouteseq['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDROUTESEQ, $oehdrouteseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDROUTESEQ, $oehdrouteseq, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxcode1('fooValue');   // WHERE OehdFrtTaxCode1 = 'fooValue'
     * $query->filterByOehdfrttaxcode1('%fooValue%', Criteria::LIKE); // WHERE OehdFrtTaxCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdfrttaxcode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode1($oehdfrttaxcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXCODE1, $oehdfrttaxcode1, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxAmt1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxamt1(1234); // WHERE OehdFrtTaxAmt1 = 1234
     * $query->filterByOehdfrttaxamt1(array(12, 34)); // WHERE OehdFrtTaxAmt1 IN (12, 34)
     * $query->filterByOehdfrttaxamt1(array('min' => 12)); // WHERE OehdFrtTaxAmt1 > 12
     * </code>
     *
     * @param     mixed $oehdfrttaxamt1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt1($oehdfrttaxamt1 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt1)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt1['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT1, $oehdfrttaxamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt1['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT1, $oehdfrttaxamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT1, $oehdfrttaxamt1, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxcode2('fooValue');   // WHERE OehdFrtTaxCode2 = 'fooValue'
     * $query->filterByOehdfrttaxcode2('%fooValue%', Criteria::LIKE); // WHERE OehdFrtTaxCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdfrttaxcode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode2($oehdfrttaxcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXCODE2, $oehdfrttaxcode2, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxAmt2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxamt2(1234); // WHERE OehdFrtTaxAmt2 = 1234
     * $query->filterByOehdfrttaxamt2(array(12, 34)); // WHERE OehdFrtTaxAmt2 IN (12, 34)
     * $query->filterByOehdfrttaxamt2(array('min' => 12)); // WHERE OehdFrtTaxAmt2 > 12
     * </code>
     *
     * @param     mixed $oehdfrttaxamt2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt2($oehdfrttaxamt2 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt2)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt2['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT2, $oehdfrttaxamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt2['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT2, $oehdfrttaxamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT2, $oehdfrttaxamt2, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxcode3('fooValue');   // WHERE OehdFrtTaxCode3 = 'fooValue'
     * $query->filterByOehdfrttaxcode3('%fooValue%', Criteria::LIKE); // WHERE OehdFrtTaxCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdfrttaxcode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode3($oehdfrttaxcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXCODE3, $oehdfrttaxcode3, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxAmt3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxamt3(1234); // WHERE OehdFrtTaxAmt3 = 1234
     * $query->filterByOehdfrttaxamt3(array(12, 34)); // WHERE OehdFrtTaxAmt3 IN (12, 34)
     * $query->filterByOehdfrttaxamt3(array('min' => 12)); // WHERE OehdFrtTaxAmt3 > 12
     * </code>
     *
     * @param     mixed $oehdfrttaxamt3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt3($oehdfrttaxamt3 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt3)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt3['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT3, $oehdfrttaxamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt3['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT3, $oehdfrttaxamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT3, $oehdfrttaxamt3, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxcode4('fooValue');   // WHERE OehdFrtTaxCode4 = 'fooValue'
     * $query->filterByOehdfrttaxcode4('%fooValue%', Criteria::LIKE); // WHERE OehdFrtTaxCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdfrttaxcode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode4($oehdfrttaxcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXCODE4, $oehdfrttaxcode4, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxAmt4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxamt4(1234); // WHERE OehdFrtTaxAmt4 = 1234
     * $query->filterByOehdfrttaxamt4(array(12, 34)); // WHERE OehdFrtTaxAmt4 IN (12, 34)
     * $query->filterByOehdfrttaxamt4(array('min' => 12)); // WHERE OehdFrtTaxAmt4 > 12
     * </code>
     *
     * @param     mixed $oehdfrttaxamt4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt4($oehdfrttaxamt4 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt4)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt4['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT4, $oehdfrttaxamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt4['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT4, $oehdfrttaxamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT4, $oehdfrttaxamt4, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxcode5('fooValue');   // WHERE OehdFrtTaxCode5 = 'fooValue'
     * $query->filterByOehdfrttaxcode5('%fooValue%', Criteria::LIKE); // WHERE OehdFrtTaxCode5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdfrttaxcode5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode5($oehdfrttaxcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXCODE5, $oehdfrttaxcode5, $comparison);
    }

    /**
     * Filter the query on the OehdFrtTaxAmt5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrttaxamt5(1234); // WHERE OehdFrtTaxAmt5 = 1234
     * $query->filterByOehdfrttaxamt5(array(12, 34)); // WHERE OehdFrtTaxAmt5 IN (12, 34)
     * $query->filterByOehdfrttaxamt5(array('min' => 12)); // WHERE OehdFrtTaxAmt5 > 12
     * </code>
     *
     * @param     mixed $oehdfrttaxamt5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt5($oehdfrttaxamt5 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt5)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt5['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT5, $oehdfrttaxamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt5['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT5, $oehdfrttaxamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTTAXAMT5, $oehdfrttaxamt5, $comparison);
    }

    /**
     * Filter the query on the OehdEdi855Sent column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdedi855sent('fooValue');   // WHERE OehdEdi855Sent = 'fooValue'
     * $query->filterByOehdedi855sent('%fooValue%', Criteria::LIKE); // WHERE OehdEdi855Sent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdedi855sent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdedi855sent($oehdedi855sent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdedi855sent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDEDI855SENT, $oehdedi855sent, $comparison);
    }

    /**
     * Filter the query on the OehdFrt3rdParty column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrt3rdparty(1234); // WHERE OehdFrt3rdParty = 1234
     * $query->filterByOehdfrt3rdparty(array(12, 34)); // WHERE OehdFrt3rdParty IN (12, 34)
     * $query->filterByOehdfrt3rdparty(array('min' => 12)); // WHERE OehdFrt3rdParty > 12
     * </code>
     *
     * @param     mixed $oehdfrt3rdparty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrt3rdparty($oehdfrt3rdparty = null, $comparison = null)
    {
        if (is_array($oehdfrt3rdparty)) {
            $useMinMax = false;
            if (isset($oehdfrt3rdparty['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRT3RDPARTY, $oehdfrt3rdparty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrt3rdparty['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRT3RDPARTY, $oehdfrt3rdparty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRT3RDPARTY, $oehdfrt3rdparty, $comparison);
    }

    /**
     * Filter the query on the OehdFob column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfob('fooValue');   // WHERE OehdFob = 'fooValue'
     * $query->filterByOehdfob('%fooValue%', Criteria::LIKE); // WHERE OehdFob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdfob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfob($oehdfob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFOB, $oehdfob, $comparison);
    }

    /**
     * Filter the query on the OehdConfirmImagYn column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdconfirmimagyn('fooValue');   // WHERE OehdConfirmImagYn = 'fooValue'
     * $query->filterByOehdconfirmimagyn('%fooValue%', Criteria::LIKE); // WHERE OehdConfirmImagYn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdconfirmimagyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdconfirmimagyn($oehdconfirmimagyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdconfirmimagyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN, $oehdconfirmimagyn, $comparison);
    }

    /**
     * Filter the query on the OehdIndustConform column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdindustconform('fooValue');   // WHERE OehdIndustConform = 'fooValue'
     * $query->filterByOehdindustconform('%fooValue%', Criteria::LIKE); // WHERE OehdIndustConform LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdindustconform The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdindustconform($oehdindustconform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdindustconform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDINDUSTCONFORM, $oehdindustconform, $comparison);
    }

    /**
     * Filter the query on the OehdCstkConsign column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcstkconsign('fooValue');   // WHERE OehdCstkConsign = 'fooValue'
     * $query->filterByOehdcstkconsign('%fooValue%', Criteria::LIKE); // WHERE OehdCstkConsign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcstkconsign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcstkconsign($oehdcstkconsign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcstkconsign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCSTKCONSIGN, $oehdcstkconsign, $comparison);
    }

    /**
     * Filter the query on the OehdLmDelayCapSent column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdlmdelaycapsent('fooValue');   // WHERE OehdLmDelayCapSent = 'fooValue'
     * $query->filterByOehdlmdelaycapsent('%fooValue%', Criteria::LIKE); // WHERE OehdLmDelayCapSent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdlmdelaycapsent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdlmdelaycapsent($oehdlmdelaycapsent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdlmdelaycapsent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDLMDELAYCAPSENT, $oehdlmdelaycapsent, $comparison);
    }

    /**
     * Filter the query on the OehdMfgId column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdmfgid('fooValue');   // WHERE OehdMfgId = 'fooValue'
     * $query->filterByOehdmfgid('%fooValue%', Criteria::LIKE); // WHERE OehdMfgId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdmfgid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdmfgid($oehdmfgid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdmfgid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDMFGID, $oehdmfgid, $comparison);
    }

    /**
     * Filter the query on the OehdStoreId column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdstoreid('fooValue');   // WHERE OehdStoreId = 'fooValue'
     * $query->filterByOehdstoreid('%fooValue%', Criteria::LIKE); // WHERE OehdStoreId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdstoreid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdstoreid($oehdstoreid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstoreid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSTOREID, $oehdstoreid, $comparison);
    }

    /**
     * Filter the query on the OehdPickQueue column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpickqueue('fooValue');   // WHERE OehdPickQueue = 'fooValue'
     * $query->filterByOehdpickqueue('%fooValue%', Criteria::LIKE); // WHERE OehdPickQueue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpickqueue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpickqueue($oehdpickqueue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickqueue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPICKQUEUE, $oehdpickqueue, $comparison);
    }

    /**
     * Filter the query on the OehdArrvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdarrvdate('fooValue');   // WHERE OehdArrvDate = 'fooValue'
     * $query->filterByOehdarrvdate('%fooValue%', Criteria::LIKE); // WHERE OehdArrvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdarrvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdarrvdate($oehdarrvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdarrvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDARRVDATE, $oehdarrvdate, $comparison);
    }

    /**
     * Filter the query on the OehdSurchgStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdsurchgstat('fooValue');   // WHERE OehdSurchgStat = 'fooValue'
     * $query->filterByOehdsurchgstat('%fooValue%', Criteria::LIKE); // WHERE OehdSurchgStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdsurchgstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdsurchgstat($oehdsurchgstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdsurchgstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDSURCHGSTAT, $oehdsurchgstat, $comparison);
    }

    /**
     * Filter the query on the OehdFrtGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdfrtgrup('fooValue');   // WHERE OehdFrtGrup = 'fooValue'
     * $query->filterByOehdfrtgrup('%fooValue%', Criteria::LIKE); // WHERE OehdFrtGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdfrtgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdfrtgrup($oehdfrtgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDFRTGRUP, $oehdfrtgrup, $comparison);
    }

    /**
     * Filter the query on the OehdCommOride column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdcommoride('fooValue');   // WHERE OehdCommOride = 'fooValue'
     * $query->filterByOehdcommoride('%fooValue%', Criteria::LIKE); // WHERE OehdCommOride LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdcommoride The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdcommoride($oehdcommoride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcommoride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCOMMORIDE, $oehdcommoride, $comparison);
    }

    /**
     * Filter the query on the OehdChrgSplt column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdchrgsplt('fooValue');   // WHERE OehdChrgSplt = 'fooValue'
     * $query->filterByOehdchrgsplt('%fooValue%', Criteria::LIKE); // WHERE OehdChrgSplt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdchrgsplt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdchrgsplt($oehdchrgsplt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdchrgsplt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDCHRGSPLT, $oehdchrgsplt, $comparison);
    }

    /**
     * Filter the query on the OehdAcCcAprv column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdacccaprv('fooValue');   // WHERE OehdAcCcAprv = 'fooValue'
     * $query->filterByOehdacccaprv('%fooValue%', Criteria::LIKE); // WHERE OehdAcCcAprv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdacccaprv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdacccaprv($oehdacccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdacccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDACCCAPRV, $oehdacccaprv, $comparison);
    }

    /**
     * Filter the query on the OehdOrigOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdorigordrnbr('fooValue');   // WHERE OehdOrigOrdrNbr = 'fooValue'
     * $query->filterByOehdorigordrnbr('%fooValue%', Criteria::LIKE); // WHERE OehdOrigOrdrNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdorigordrnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdorigordrnbr($oehdorigordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdorigordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDORIGORDRNBR, $oehdorigordrnbr, $comparison);
    }

    /**
     * Filter the query on the OehdPostDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdpostdate('fooValue');   // WHERE OehdPostDate = 'fooValue'
     * $query->filterByOehdpostdate('%fooValue%', Criteria::LIKE); // WHERE OehdPostDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdpostdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdpostdate($oehdpostdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpostdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDPOSTDATE, $oehdpostdate, $comparison);
    }

    /**
     * Filter the query on the OehdDiscDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscdate1('fooValue');   // WHERE OehdDiscDate1 = 'fooValue'
     * $query->filterByOehddiscdate1('%fooValue%', Criteria::LIKE); // WHERE OehdDiscDate1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddiscdate1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate1($oehddiscdate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCDATE1, $oehddiscdate1, $comparison);
    }

    /**
     * Filter the query on the OehdDiscPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscpct1(1234); // WHERE OehdDiscPct1 = 1234
     * $query->filterByOehddiscpct1(array(12, 34)); // WHERE OehdDiscPct1 IN (12, 34)
     * $query->filterByOehddiscpct1(array('min' => 12)); // WHERE OehdDiscPct1 > 12
     * </code>
     *
     * @param     mixed $oehddiscpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct1($oehddiscpct1 = null, $comparison = null)
    {
        if (is_array($oehddiscpct1)) {
            $useMinMax = false;
            if (isset($oehddiscpct1['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT1, $oehddiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct1['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT1, $oehddiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT1, $oehddiscpct1, $comparison);
    }

    /**
     * Filter the query on the OehdDueDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduedate1('fooValue');   // WHERE OehdDueDate1 = 'fooValue'
     * $query->filterByOehdduedate1('%fooValue%', Criteria::LIKE); // WHERE OehdDueDate1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdduedate1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate1($oehdduedate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEDATE1, $oehdduedate1, $comparison);
    }

    /**
     * Filter the query on the OehdDueAmt1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddueamt1(1234); // WHERE OehdDueAmt1 = 1234
     * $query->filterByOehddueamt1(array(12, 34)); // WHERE OehdDueAmt1 IN (12, 34)
     * $query->filterByOehddueamt1(array('min' => 12)); // WHERE OehdDueAmt1 > 12
     * </code>
     *
     * @param     mixed $oehddueamt1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt1($oehddueamt1 = null, $comparison = null)
    {
        if (is_array($oehddueamt1)) {
            $useMinMax = false;
            if (isset($oehddueamt1['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT1, $oehddueamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt1['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT1, $oehddueamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT1, $oehddueamt1, $comparison);
    }

    /**
     * Filter the query on the OehdDuePct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduepct1(1234); // WHERE OehdDuePct1 = 1234
     * $query->filterByOehdduepct1(array(12, 34)); // WHERE OehdDuePct1 IN (12, 34)
     * $query->filterByOehdduepct1(array('min' => 12)); // WHERE OehdDuePct1 > 12
     * </code>
     *
     * @param     mixed $oehdduepct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct1($oehdduepct1 = null, $comparison = null)
    {
        if (is_array($oehdduepct1)) {
            $useMinMax = false;
            if (isset($oehdduepct1['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT1, $oehdduepct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct1['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT1, $oehdduepct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT1, $oehdduepct1, $comparison);
    }

    /**
     * Filter the query on the OehdDiscDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscdate2('fooValue');   // WHERE OehdDiscDate2 = 'fooValue'
     * $query->filterByOehddiscdate2('%fooValue%', Criteria::LIKE); // WHERE OehdDiscDate2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddiscdate2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate2($oehddiscdate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCDATE2, $oehddiscdate2, $comparison);
    }

    /**
     * Filter the query on the OehdDiscPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscpct2(1234); // WHERE OehdDiscPct2 = 1234
     * $query->filterByOehddiscpct2(array(12, 34)); // WHERE OehdDiscPct2 IN (12, 34)
     * $query->filterByOehddiscpct2(array('min' => 12)); // WHERE OehdDiscPct2 > 12
     * </code>
     *
     * @param     mixed $oehddiscpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct2($oehddiscpct2 = null, $comparison = null)
    {
        if (is_array($oehddiscpct2)) {
            $useMinMax = false;
            if (isset($oehddiscpct2['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT2, $oehddiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct2['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT2, $oehddiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT2, $oehddiscpct2, $comparison);
    }

    /**
     * Filter the query on the OehdDueDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduedate2('fooValue');   // WHERE OehdDueDate2 = 'fooValue'
     * $query->filterByOehdduedate2('%fooValue%', Criteria::LIKE); // WHERE OehdDueDate2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdduedate2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate2($oehdduedate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEDATE2, $oehdduedate2, $comparison);
    }

    /**
     * Filter the query on the OehdDueAmt2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddueamt2(1234); // WHERE OehdDueAmt2 = 1234
     * $query->filterByOehddueamt2(array(12, 34)); // WHERE OehdDueAmt2 IN (12, 34)
     * $query->filterByOehddueamt2(array('min' => 12)); // WHERE OehdDueAmt2 > 12
     * </code>
     *
     * @param     mixed $oehddueamt2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt2($oehddueamt2 = null, $comparison = null)
    {
        if (is_array($oehddueamt2)) {
            $useMinMax = false;
            if (isset($oehddueamt2['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT2, $oehddueamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt2['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT2, $oehddueamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT2, $oehddueamt2, $comparison);
    }

    /**
     * Filter the query on the OehdDuePct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduepct2(1234); // WHERE OehdDuePct2 = 1234
     * $query->filterByOehdduepct2(array(12, 34)); // WHERE OehdDuePct2 IN (12, 34)
     * $query->filterByOehdduepct2(array('min' => 12)); // WHERE OehdDuePct2 > 12
     * </code>
     *
     * @param     mixed $oehdduepct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct2($oehdduepct2 = null, $comparison = null)
    {
        if (is_array($oehdduepct2)) {
            $useMinMax = false;
            if (isset($oehdduepct2['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT2, $oehdduepct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct2['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT2, $oehdduepct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT2, $oehdduepct2, $comparison);
    }

    /**
     * Filter the query on the OehdDiscDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscdate3('fooValue');   // WHERE OehdDiscDate3 = 'fooValue'
     * $query->filterByOehddiscdate3('%fooValue%', Criteria::LIKE); // WHERE OehdDiscDate3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddiscdate3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate3($oehddiscdate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCDATE3, $oehddiscdate3, $comparison);
    }

    /**
     * Filter the query on the OehdDiscPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscpct3(1234); // WHERE OehdDiscPct3 = 1234
     * $query->filterByOehddiscpct3(array(12, 34)); // WHERE OehdDiscPct3 IN (12, 34)
     * $query->filterByOehddiscpct3(array('min' => 12)); // WHERE OehdDiscPct3 > 12
     * </code>
     *
     * @param     mixed $oehddiscpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct3($oehddiscpct3 = null, $comparison = null)
    {
        if (is_array($oehddiscpct3)) {
            $useMinMax = false;
            if (isset($oehddiscpct3['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT3, $oehddiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct3['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT3, $oehddiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT3, $oehddiscpct3, $comparison);
    }

    /**
     * Filter the query on the OehdDueDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduedate3('fooValue');   // WHERE OehdDueDate3 = 'fooValue'
     * $query->filterByOehdduedate3('%fooValue%', Criteria::LIKE); // WHERE OehdDueDate3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdduedate3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate3($oehdduedate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEDATE3, $oehdduedate3, $comparison);
    }

    /**
     * Filter the query on the OehdDueAmt3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddueamt3(1234); // WHERE OehdDueAmt3 = 1234
     * $query->filterByOehddueamt3(array(12, 34)); // WHERE OehdDueAmt3 IN (12, 34)
     * $query->filterByOehddueamt3(array('min' => 12)); // WHERE OehdDueAmt3 > 12
     * </code>
     *
     * @param     mixed $oehddueamt3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt3($oehddueamt3 = null, $comparison = null)
    {
        if (is_array($oehddueamt3)) {
            $useMinMax = false;
            if (isset($oehddueamt3['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT3, $oehddueamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt3['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT3, $oehddueamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT3, $oehddueamt3, $comparison);
    }

    /**
     * Filter the query on the OehdDuePct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduepct3(1234); // WHERE OehdDuePct3 = 1234
     * $query->filterByOehdduepct3(array(12, 34)); // WHERE OehdDuePct3 IN (12, 34)
     * $query->filterByOehdduepct3(array('min' => 12)); // WHERE OehdDuePct3 > 12
     * </code>
     *
     * @param     mixed $oehdduepct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct3($oehdduepct3 = null, $comparison = null)
    {
        if (is_array($oehdduepct3)) {
            $useMinMax = false;
            if (isset($oehdduepct3['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT3, $oehdduepct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct3['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT3, $oehdduepct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT3, $oehdduepct3, $comparison);
    }

    /**
     * Filter the query on the OehdDiscDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscdate4('fooValue');   // WHERE OehdDiscDate4 = 'fooValue'
     * $query->filterByOehddiscdate4('%fooValue%', Criteria::LIKE); // WHERE OehdDiscDate4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddiscdate4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate4($oehddiscdate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCDATE4, $oehddiscdate4, $comparison);
    }

    /**
     * Filter the query on the OehdDiscPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscpct4(1234); // WHERE OehdDiscPct4 = 1234
     * $query->filterByOehddiscpct4(array(12, 34)); // WHERE OehdDiscPct4 IN (12, 34)
     * $query->filterByOehddiscpct4(array('min' => 12)); // WHERE OehdDiscPct4 > 12
     * </code>
     *
     * @param     mixed $oehddiscpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct4($oehddiscpct4 = null, $comparison = null)
    {
        if (is_array($oehddiscpct4)) {
            $useMinMax = false;
            if (isset($oehddiscpct4['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT4, $oehddiscpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct4['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT4, $oehddiscpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT4, $oehddiscpct4, $comparison);
    }

    /**
     * Filter the query on the OehdDueDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduedate4('fooValue');   // WHERE OehdDueDate4 = 'fooValue'
     * $query->filterByOehdduedate4('%fooValue%', Criteria::LIKE); // WHERE OehdDueDate4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdduedate4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate4($oehdduedate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEDATE4, $oehdduedate4, $comparison);
    }

    /**
     * Filter the query on the OehdDueAmt4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddueamt4(1234); // WHERE OehdDueAmt4 = 1234
     * $query->filterByOehddueamt4(array(12, 34)); // WHERE OehdDueAmt4 IN (12, 34)
     * $query->filterByOehddueamt4(array('min' => 12)); // WHERE OehdDueAmt4 > 12
     * </code>
     *
     * @param     mixed $oehddueamt4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt4($oehddueamt4 = null, $comparison = null)
    {
        if (is_array($oehddueamt4)) {
            $useMinMax = false;
            if (isset($oehddueamt4['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT4, $oehddueamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt4['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT4, $oehddueamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT4, $oehddueamt4, $comparison);
    }

    /**
     * Filter the query on the OehdDuePct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduepct4(1234); // WHERE OehdDuePct4 = 1234
     * $query->filterByOehdduepct4(array(12, 34)); // WHERE OehdDuePct4 IN (12, 34)
     * $query->filterByOehdduepct4(array('min' => 12)); // WHERE OehdDuePct4 > 12
     * </code>
     *
     * @param     mixed $oehdduepct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct4($oehdduepct4 = null, $comparison = null)
    {
        if (is_array($oehdduepct4)) {
            $useMinMax = false;
            if (isset($oehdduepct4['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT4, $oehdduepct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct4['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT4, $oehdduepct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT4, $oehdduepct4, $comparison);
    }

    /**
     * Filter the query on the OehdDiscDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscdate5('fooValue');   // WHERE OehdDiscDate5 = 'fooValue'
     * $query->filterByOehddiscdate5('%fooValue%', Criteria::LIKE); // WHERE OehdDiscDate5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddiscdate5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate5($oehddiscdate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCDATE5, $oehddiscdate5, $comparison);
    }

    /**
     * Filter the query on the OehdDiscPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscpct5(1234); // WHERE OehdDiscPct5 = 1234
     * $query->filterByOehddiscpct5(array(12, 34)); // WHERE OehdDiscPct5 IN (12, 34)
     * $query->filterByOehddiscpct5(array('min' => 12)); // WHERE OehdDiscPct5 > 12
     * </code>
     *
     * @param     mixed $oehddiscpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct5($oehddiscpct5 = null, $comparison = null)
    {
        if (is_array($oehddiscpct5)) {
            $useMinMax = false;
            if (isset($oehddiscpct5['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT5, $oehddiscpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct5['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT5, $oehddiscpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT5, $oehddiscpct5, $comparison);
    }

    /**
     * Filter the query on the OehdDueDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduedate5('fooValue');   // WHERE OehdDueDate5 = 'fooValue'
     * $query->filterByOehdduedate5('%fooValue%', Criteria::LIKE); // WHERE OehdDueDate5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdduedate5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate5($oehdduedate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEDATE5, $oehdduedate5, $comparison);
    }

    /**
     * Filter the query on the OehdDueAmt5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddueamt5(1234); // WHERE OehdDueAmt5 = 1234
     * $query->filterByOehddueamt5(array(12, 34)); // WHERE OehdDueAmt5 IN (12, 34)
     * $query->filterByOehddueamt5(array('min' => 12)); // WHERE OehdDueAmt5 > 12
     * </code>
     *
     * @param     mixed $oehddueamt5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt5($oehddueamt5 = null, $comparison = null)
    {
        if (is_array($oehddueamt5)) {
            $useMinMax = false;
            if (isset($oehddueamt5['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT5, $oehddueamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt5['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT5, $oehddueamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT5, $oehddueamt5, $comparison);
    }

    /**
     * Filter the query on the OehdDuePct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduepct5(1234); // WHERE OehdDuePct5 = 1234
     * $query->filterByOehdduepct5(array(12, 34)); // WHERE OehdDuePct5 IN (12, 34)
     * $query->filterByOehdduepct5(array('min' => 12)); // WHERE OehdDuePct5 > 12
     * </code>
     *
     * @param     mixed $oehdduepct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct5($oehdduepct5 = null, $comparison = null)
    {
        if (is_array($oehdduepct5)) {
            $useMinMax = false;
            if (isset($oehdduepct5['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT5, $oehdduepct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct5['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT5, $oehdduepct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT5, $oehdduepct5, $comparison);
    }

    /**
     * Filter the query on the OehdDiscDate6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscdate6('fooValue');   // WHERE OehdDiscDate6 = 'fooValue'
     * $query->filterByOehddiscdate6('%fooValue%', Criteria::LIKE); // WHERE OehdDiscDate6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehddiscdate6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate6($oehddiscdate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCDATE6, $oehddiscdate6, $comparison);
    }

    /**
     * Filter the query on the OehdDiscPct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddiscpct6(1234); // WHERE OehdDiscPct6 = 1234
     * $query->filterByOehddiscpct6(array(12, 34)); // WHERE OehdDiscPct6 IN (12, 34)
     * $query->filterByOehddiscpct6(array('min' => 12)); // WHERE OehdDiscPct6 > 12
     * </code>
     *
     * @param     mixed $oehddiscpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct6($oehddiscpct6 = null, $comparison = null)
    {
        if (is_array($oehddiscpct6)) {
            $useMinMax = false;
            if (isset($oehddiscpct6['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT6, $oehddiscpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct6['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT6, $oehddiscpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDISCPCT6, $oehddiscpct6, $comparison);
    }

    /**
     * Filter the query on the OehdDueDate6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduedate6('fooValue');   // WHERE OehdDueDate6 = 'fooValue'
     * $query->filterByOehdduedate6('%fooValue%', Criteria::LIKE); // WHERE OehdDueDate6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdduedate6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate6($oehdduedate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEDATE6, $oehdduedate6, $comparison);
    }

    /**
     * Filter the query on the OehdDueAmt6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehddueamt6(1234); // WHERE OehdDueAmt6 = 1234
     * $query->filterByOehddueamt6(array(12, 34)); // WHERE OehdDueAmt6 IN (12, 34)
     * $query->filterByOehddueamt6(array('min' => 12)); // WHERE OehdDueAmt6 > 12
     * </code>
     *
     * @param     mixed $oehddueamt6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt6($oehddueamt6 = null, $comparison = null)
    {
        if (is_array($oehddueamt6)) {
            $useMinMax = false;
            if (isset($oehddueamt6['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT6, $oehddueamt6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt6['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT6, $oehddueamt6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEAMT6, $oehddueamt6, $comparison);
    }

    /**
     * Filter the query on the OehdDuePct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdduepct6(1234); // WHERE OehdDuePct6 = 1234
     * $query->filterByOehdduepct6(array(12, 34)); // WHERE OehdDuePct6 IN (12, 34)
     * $query->filterByOehdduepct6(array('min' => 12)); // WHERE OehdDuePct6 > 12
     * </code>
     *
     * @param     mixed $oehdduepct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct6($oehdduepct6 = null, $comparison = null)
    {
        if (is_array($oehdduepct6)) {
            $useMinMax = false;
            if (isset($oehdduepct6['min'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT6, $oehdduepct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct6['max'])) {
                $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT6, $oehdduepct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_OEHDDUEPCT6, $oehdduepct6, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoHeaderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSoHeader $soHeader Object to remove from the list of results
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
    public function prune($soHeader = null)
    {
        if ($soHeader) {
            $this->addUsingAlias(SoHeaderTableMap::COL_OEHDNBR, $soHeader->getOehdnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_header table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoHeaderTableMap::clearInstancePool();
            SoHeaderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoHeaderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoHeaderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoHeaderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SoHeaderQuery
